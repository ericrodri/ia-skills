<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills276Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Data storytelling para marketing: convertir métricas en narrativa',
                'description'      => 'Aprende a transformar dashboards y tablas de datos en historias que la dirección entiende y en las que actúa, conectando las métricas de marketing con los resultados de negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en comunicación de datos y storytelling para equipos de marketing. Quiero aprender a presentar los resultados de marketing de una forma que genere impacto, consiga presupuesto y lleve a decisiones, en lugar de reportes que nadie lee más allá del momento de presentación.

**Contexto necesario:**
- ¿A quién presentas los resultados de marketing habitualmente (CEO, CFO, junta, equipo)?
- ¿Cuál es el formato actual de los informes de marketing (PowerPoint, dashboard, informe escrito)?
- ¿Cuál es la métrica principal de la que eres responsable?
- ¿Has tenido alguna presentación de resultados en la que sentiste que los datos no tuvieron el impacto que esperabas?
- ¿Qué decisión quieres conseguir con los próximos datos que vayas a presentar?

**Marco completo de data storytelling para marketing:**

1. **Los tres errores más comunes al presentar datos de marketing**: Antes de construir una buena historia, identifica qué hace que las presentaciones de datos fracasen. Error 1: mostrar demasiadas métricas sin jerarquía (la audiencia no sabe qué importa). Error 2: presentar datos sin contexto (un 12% de CTR no dice nada sin el benchmark o el periodo anterior). Error 3: presentar el pasado sin recomendación sobre el futuro (los datos deben llevar a una acción). Analiza cuál de estos errores es el más presente en mis presentaciones actuales.

2. **La estructura narrativa de los datos de marketing**: Propón la estructura de la historia basada en datos para una presentación de marketing. Modelo recomendado: situación (dónde estamos y por qué es relevante), complicación (qué ha pasado o qué problema tenemos), datos como evidencia (los números que demuestran la complicación o la oportunidad), resolución (qué propones hacer), y llamada a la acción (qué decisión necesitas de la audiencia). Aplica esta estructura al contexto de mis datos de marketing.

3. **Selección de las métricas que importan**: El data storytelling empieza antes de la presentación: en la selección de qué datos contar. Explica cómo elegir las tres o cinco métricas que cuentan la historia correcta para cada audiencia. Para el CEO: métricas conectadas con revenue y crecimiento. Para el CFO: métricas de eficiencia y ROI. Para el equipo de ventas: métricas de calidad del pipeline. Para el equipo de producto: métricas de comportamiento del usuario. Proporciona la tabla de métricas por audiencia.

4. **Contextualizar los números para que signifiquen algo**: Un número sin contexto no tiene significado. Diseña las técnicas de contextualización: comparación con el periodo anterior (crecimiento), comparación con el objetivo (progreso), comparación con el benchmark del sector (posición competitiva), y narración de la tendencia (dirección). Para cada métrica clave de mi situación, aplica las técnicas de contextualización más efectivas.

5. **Visualización de datos para el impacto**: La elección del gráfico correcto es parte del storytelling. Explica qué tipo de gráfico usar para cada tipo de historia: el gráfico de línea para tendencias temporales, el de barras para comparaciones entre categorías, el de dispersión para mostrar la relación entre dos variables, el de funnel para mostrar tasas de conversión. Para cada gráfico, explica qué errores de diseño eliminar (pie charts innecesarios, dobles ejes confusos, escalas que distorsionan).

6. **El slide de insight vs el slide de datos**: La diferencia entre una presentación que impacta y una que no suele estar en si los slides muestran datos o insights. Un dato es "el CTR ha bajado un 15%". Un insight es "hemos perdido eficiencia en el canal de búsqueda de pago porque la competencia ha subido sus pujas en las mismas palabras clave que nosotros, y podemos recuperarlo con una estrategia de palabras clave de cola larga". Diseña el proceso para transformar cada dato en un insight con recomendación.

7. **Práctica: construye la historia de tus próximos datos**: Aplica todo el marco a una presentación de marketing real que tengas que hacer próximamente. Ayúdame a: definir la pregunta central que la presentación debe responder, elegir las métricas que construyen la historia, escribir el titular de cada slide como un insight (no como un título descriptivo), y diseñar la llamada a la acción final.

**Formato esperado:**
- Análisis de los errores actuales en la presentación de datos
- Estructura narrativa aplicada a mis datos concretos
- Tabla de métricas por audiencia
- Guía de selección de gráficos con ejemplos
- Borrador de la próxima presentación de resultados con estructura narrativa

Empieza con el diagnóstico de contexto y luego construye el marco completo.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Transformar informes de marketing en historias basadas en datos que generan impacto, decisiones y presupuesto.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Technical data visualization: representar datos complejos con claridad',
                'description'      => 'Aprende los principios y técnicas para diseñar visualizaciones de datos técnicos que comunican patrones complejos con claridad: desde logs y métricas de sistema hasta análisis de rendimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero de datos con experiencia en visualización de datos técnicos para audiencias tanto técnicas como no técnicas. Necesito mejorar la forma en que represento datos complejos: logs de sistema, métricas de rendimiento, trazas de errores, resultados de algoritmos o cualquier dato técnico que necesite ser comprendido y comunicado.

**Contexto necesario:**
- ¿Qué tipo de datos técnicos necesitas visualizar principalmente?
- ¿Cuál es la audiencia de tus visualizaciones (otros ingenieros, product managers, dirección)?
- ¿Qué herramientas de visualización usas actualmente (Grafana, Kibana, Tableau, matplotlib, D3.js, Metabase)?
- ¿Cuál es el principal problema con tus visualizaciones actuales (demasiada información, difícil de interpretar, no lleva a decisiones)?
- ¿Existe algún tipo de análisis o dashboard que necesitas construir próximamente?

**Marco de visualización de datos técnicos:**

1. **Principios de diseño de visualizaciones técnicas**: Establece los principios fundamentales para cualquier visualización de datos técnicos. Principio 1: la visualización debe responder a una pregunta concreta, no mostrar todos los datos disponibles. Principio 2: el nivel de detalle debe adaptarse a la audiencia (ingenieros vs dirección). Principio 3: los outliers y anomalías deben ser inmediatamente visibles. Principio 4: el tiempo debe estar siempre contextualizado (comparación con periodo anterior o con el baseline). Aplica estos principios al análisis de mis necesidades específicas.

2. **Elección del tipo de gráfico correcto para datos técnicos**: Para cada tipo de dato técnico, define qué representación visual es más efectiva. Series temporales de métricas de sistema: gráfico de línea con anotaciones de incidentes. Distribución de latencias: histograma o percentil plot (P50, P95, P99). Correlación entre dos métricas: scatter plot con regresión. Comparación de rendimiento antes y después: gráfico de barras con diferencia porcentual. Flujo de datos en el sistema: sankey diagram o gráfico de red. Proporciona la guía de selección adaptada a mis tipos de datos.

3. **Diseño de dashboards de monitorización técnica**: Un buen dashboard técnico no es una colección de gráficos sino un sistema para detectar problemas. Diseña la arquitectura del dashboard: la jerarquía de información (resumen de salud del sistema en la parte superior, desglose por componente debajo), los indicadores de alerta (líneas de umbral, zonas de color para estados ok/warning/critical), y la estructura de drill-down (cómo pasar del resumen al detalle sin perder el contexto).

4. **Visualización de datos de logs y errores**: Los logs son datos no estructurados que contienen patrones valiosos pero son difíciles de visualizar. Explica cómo estructurar la visualización de logs: la distribución temporal de errores por tipo, el mapa de calor de errores por hora del día y día de la semana, la correlación entre picos de tráfico y tasa de errores, y cómo representar las trazas de errores en cascada para diagnosticar problemas distribuidos.

5. **Comunicar rendimiento y benchmarks**: Cuando tienes que comunicar los resultados de una optimización técnica (una mejora de latencia, una reducción de coste de infraestructura, un aumento de throughput), la visualización debe hacer obvia la mejora. Diseña las técnicas de comparación antes/después: cómo representar la reducción de latencia de forma que la dirección entienda el impacto, cómo mostrar la evolución del rendimiento en el tiempo, y cómo calcular y visualizar el ROI de una inversión técnica.

6. **Automatización y reproducibilidad de visualizaciones**: Las visualizaciones que se construyen manualmente una sola vez tienen poco valor. Diseña el enfoque de visualización como código: cómo generar visualizaciones reproducibles con Python (matplotlib, seaborn, plotly), cómo conectar las visualizaciones directamente a las fuentes de datos, y cómo versionar las visualizaciones junto con el código que las genera. Proporciona el template base en Python para los tipos de visualización más comunes.

7. **Presentar análisis técnico a audiencias no técnicas**: Define cómo adaptar una visualización técnica para que sea comprensible para product managers, dirección y stakeholders de negocio. La clave no es simplificar el dato sino contextualizarlo: en lugar de "P99 de latencia = 2.3s", "el 1% de nuestros usuarios experimenta tiempos de carga de más de 2 segundos, lo que representa X usuarios diarios". Proporciona el framework de traducción técnica a lenguaje de impacto.

**Formato esperado:**
- Guía de selección de tipo de gráfico por tipo de dato técnico
- Arquitectura del dashboard técnico con jerarquía de información
- Template de Python para las cinco visualizaciones más comunes
- Framework de traducción de métricas técnicas a lenguaje de negocio
- Checklist de diseño para revisar cualquier visualización antes de compartirla

Empieza con el diagnóstico de contexto y necesidades.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar visualizaciones de datos técnicos que comunican patrones complejos con claridad para audiencias técnicas y no técnicas.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Information design: diseñar dashboards e infografías que comunican',
                'description'      => 'Aprende los principios del diseño de información para crear dashboards, infografías y visualizaciones que transmiten el mensaje correcto al usuario correcto sin sobrecargar cognitivamente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de información con experiencia creando dashboards, infografías y visualizaciones de datos que son tanto funcionales como visualmente claros. Quiero aprender a diseñar representaciones visuales de información compleja que cualquier audiencia pueda entender y en las que pueda actuar.

**Contexto necesario:**
- ¿Qué tipo de visualizaciones de información necesitas diseñar principalmente (dashboards de negocio, infografías para comunicación, flujos de proceso, mapas de datos)?
- ¿Cuál es la herramienta con la que trabajas (Figma, Tableau, PowerPoint, Adobe Illustrator, código)?
- ¿Cuál es la audiencia principal y cuál es su nivel de familiaridad con los datos?
- ¿Hay alguna visualización específica que no está funcionando bien actualmente?
- ¿Cuál es el objetivo principal: informar, persuadir, facilitar una decisión, o enseñar?

**Marco de information design:**

1. **Los principios de Edward Tufte aplicados al diseño actual**: Introduce los principios fundamentales del diseño de información eficaz basados en el trabajo de Tufte. Data-ink ratio: elimina todo el tinte que no representa datos (líneas de grid innecesarias, marcos decorativos, sombras, gradientes). Chartjunk: elimina los elementos decorativos que distraen del dato. Small multiples: usa múltiples versiones pequeñas del mismo gráfico en lugar de un gráfico complejo. Sparklines: integra gráficos miniaturizados en el texto para mostrar tendencias sin interrumpir el flujo. Aplica cada principio a un análisis de las visualizaciones que produzco hoy.

2. **Diseño de dashboards con jerarquía visual**: Un dashboard efectivo no es una colección de gráficos: es un sistema con jerarquía de información. Diseña la arquitectura visual de un dashboard: la zona de resumen ejecutivo (los tres o cuatro números más importantes, visibles sin scroll), la zona de análisis (los gráficos que explican los números del resumen), y la zona de detalle (las tablas y los datos granulares para el análisis profundo). Proporciona el layout tipo con proporciones y zonas.

3. **Elección del tipo de visualización por objetivo comunicativo**: El tipo de chart no debe elegirse por estética sino por lo que quieres comunicar. Diseña la guía de selección: para mostrar cambio en el tiempo usa líneas o áreas; para comparar entre categorías usa barras horizontales; para mostrar proporciones usa barras apiladas o treemaps (nunca pie charts de más de tres segmentos); para mostrar distribuciones usa histogramas o violin plots; para mostrar relaciones usa scatter plots. Para cada tipo, incluye un ejemplo visual en formato textual.

4. **Color como herramienta de comunicación, no de decoración**: El color en el diseño de información tiene un rol funcional, no decorativo. Diseña el sistema de color para dashboards e infografías: cómo usar el color para destacar el dato más importante (un color acento sobre una base gris), cómo usar paletas secuenciales para datos ordenados, paletas divergentes para datos con un punto central de referencia, y paletas cualitativas para categorías sin orden. Incluye las reglas de accesibilidad (contraste, daltonismo) que deben respetarse.

5. **Tipografía funcional para datos**: La tipografía en el diseño de información tiene reglas distintas a las del diseño gráfico general. Explica: qué familias tipográficas funcionan mejor para datos numéricos (fuentes con números tabulares, que se alinean verticalmente), cómo usar el tamaño tipográfico para crear jerarquía visual sin elementos decorativos, cómo formatear los números para que sean legibles (separadores de miles, decimales consistentes, unidades claras), y cuándo es mejor mostrar el dato en texto que en gráfico.

6. **Diseño de infografías narrativas**: Cuando el objetivo es comunicar a una audiencia amplia (comunicación interna, redes sociales, publicaciones), la infografía narrativa sigue una estructura diferente al dashboard. Diseña el flujo de una infografía efectiva: el titular con el dato más impactante, la contextualización con un dato comparativo, el desarrollo de la historia con tres o cuatro puntos visuales, y el cierre con la conclusión o llamada a la acción. Proporciona la plantilla de layout.

7. **Testing de la visualización**: Antes de publicar una visualización, debes comprobar que comunica lo que quieres. Diseña el proceso de testing: el test de los cinco segundos (¿qué recuerda la audiencia cinco segundos después de ver la visualización?), el test de la pregunta (¿puede la audiencia responder la pregunta que la visualización intenta responder en menos de diez segundos?), y cómo iterar el diseño basándote en el feedback de usuarios reales.

**Formato esperado:**
- Análisis de las visualizaciones actuales con los principios de Tufte
- Layout tipo de dashboard con jerarquía de información
- Guía de selección de tipo de visualización por objetivo
- Sistema de color con paletas y reglas de uso
- Checklist de revisión de visualizaciones antes de publicar
- Plantilla de infografía narrativa

Empieza con el diagnóstico de contexto y las necesidades específicas.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar dashboards e infografías que comunican información compleja con claridad usando los principios del information design.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Sales storytelling con datos: usar números para convencer, no para confundir',
                'description'      => 'Aprende a incorporar datos en el discurso de ventas para reforzar la credibilidad y acelerar la decisión de compra, sin abrumar al cliente con estadísticas que no le hablan.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de ventas especializado en el uso de datos y evidencia en el proceso comercial. Quiero aprender a usar los datos de forma efectiva en mis conversaciones y presentaciones de ventas: que los números refuercen mi argumento en lugar de distraer al cliente o hacer que la conversación parezca una clase de estadística.

**Contexto necesario:**
- ¿Qué tipo de producto o servicio vendes y cuál es el perfil del comprador?
- ¿Qué datos tienes disponibles actualmente (resultados de clientes, benchmarks del sector, datos de producto)?
- ¿En qué momento del proceso de ventas sueles usar datos (discovery, demo, propuesta, negociación)?
- ¿Has tenido experiencias en las que los datos no funcionaron como esperabas en una conversación de ventas?
- ¿Cuál es la principal objeción que los datos podrían ayudarte a superar?

**Sistema de sales storytelling con datos:**

1. **Cuándo usar datos en el proceso de ventas**: Los datos no funcionan igual en todos los momentos del proceso. Diseña el mapa de uso de datos por etapa: en discovery (usar datos del sector para demostrar que entiendes el problema del cliente), en la demo (usar datos de usuarios similares para mostrar que otros han resuelto el mismo problema), en la propuesta (usar el ROI calculado para justificar la inversión), y en la negociación (usar el costo de la inacción para crear urgencia). Para cada etapa, proporciona el tipo de dato más efectivo.

2. **El dato que convierte: ROI y business case**: El argumento de datos más poderoso en ventas es el ROI del cliente. Diseña el proceso para construir el business case personalizado: cómo preguntar al cliente sobre sus métricas actuales en el discovery (sin que se sienta auditado), cómo calcular el impacto esperado de tu solución usando sus propios datos, y cómo presentar el ROI de forma que el cliente sienta que él construyó el número, no que tú se lo estás vendiendo.

3. **Las tres reglas del dato en ventas**: Establece los principios que deben guiar el uso de datos en el proceso comercial. Regla 1: un dato sin historia es ruido (el dato debe estar contextualizado en la situación del cliente). Regla 2: los datos de clientes similares son más convincentes que las estadísticas generales (un caso de un cliente en el mismo sector pesa más que un estudio de mercado). Regla 3: menos es más (tres datos bien elegidos y bien presentados son más poderosos que veinte datos en un slide saturado).

4. **Social proof basado en datos**: Los testimonios y casos de éxito son más poderosos cuando están respaldados por datos concretos. Diseña la biblioteca de social proof basada en datos: cómo estructurar los casos de clientes (empresa similar, problema similar, solución, resultado en cifras y en tiempo), cómo seleccionar el caso correcto para cada cliente, y cómo presentarlo en la conversación de ventas de forma que el cliente se vea reflejado, no que sienta que le estás enseñando marketing.

5. **Gestionar los datos que el cliente cuestiona**: El cliente puede cuestionar la validez de tus datos: "eso es para vuestra base de clientes en general, no para empresas como la mía". Diseña el protocolo de respuesta: cómo anticipar las objeciones a tus datos, cómo filtrar los casos de éxito por segmento para mostrar al cliente solo los relevantes para él, y cómo invitarle a construir su propio cálculo de ROI si no confía en el tuyo.

6. **Visualización simple en presentaciones de ventas**: Una visualización bien diseñada puede duplicar el impacto de un dato en una presentación de ventas. Define las reglas de visualización para el contexto comercial: un solo mensaje visual por slide, el dato más importante debe ser el más visible (tamaño, color, posición), usar siempre comparaciones (antes vs después, con vs sin el producto, tú vs la competencia), y eliminar todo lo que no contribuye a la decisión de compra.

7. **Construye tu arsenal de datos de ventas**: Define el proceso para construir y mantener actualizado el conjunto de datos que usarás en tus conversaciones de ventas. Propón: cómo recoger datos de clientes existentes (encuestas de impacto, análisis del uso del producto, entrevistas de éxito), cómo organizar los casos por sector y tamaño de empresa para acceder rápidamente al caso correcto, y cómo mantener los datos actualizados para que no pierdan credibilidad con el tiempo.

**Formato esperado:**
- Mapa de uso de datos por etapa del proceso de ventas
- Plantilla de business case / ROI calculador
- Biblioteca de casos de éxito con estructura estándar
- Protocolo de respuesta a objeciones sobre los datos
- Checklist de la presentación de ventas basada en datos
- Plan de construcción del arsenal de datos en 30 días

Empieza con el análisis del contexto y las necesidades específicas.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Incorporar datos y evidencia en el proceso de ventas para reforzar la credibilidad y acelerar la decisión de compra.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product data narrative: comunicar los resultados del producto con impacto',
                'description'      => 'Aprende a presentar los datos del producto de forma que la dirección, los inversores y el equipo entiendan el progreso, las decisiones tomadas y las próximas apuestas, generando confianza y alineación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Producto con experiencia comunicando los resultados y el progreso del producto a audiencias de nivel C y a inversores. Necesito mejorar la forma en que presento los datos del producto para que generen confianza, alineación y apoyo a las decisiones de roadmap, en lugar de crear más preguntas y escepticismo.

**Contexto necesario:**
- ¿A quién presentas los datos del producto (CEO, junta directiva, inversores, equipo)?
- ¿Con qué frecuencia presentas y qué métricas incluyes actualmente?
- ¿Cuál es el principal reto al comunicar datos de producto (audiencia que no entiende el contexto, métricas que van bien pero el negocio no crece, decisiones que parecen contradictorias con los datos)?
- ¿Tienes OKRs de producto y cómo los comunicas?
- ¿Qué decisión importante de producto debes comunicar próximamente?

**Marco de product data narrative:**

1. **La diferencia entre informar y comunicar**: La mayoría de los product managers informan cuando deberían comunicar. Informar es mostrar datos. Comunicar es construir una historia con datos que lleva a una conclusión o decisión. Diseña la transición de los informes actuales a una comunicación de producto con narrativa. Proporciona el antes y el después de cómo se estructura el mismo conjunto de datos en formato informe vs en formato narrativa de producto.

2. **La pirámide de métricas de producto**: Las métricas de producto tienen jerarquía: las métricas de negocio (revenue, churn) están en la cima, las métricas de producto (activación, retención, expansión) en el medio, y las métricas de funcionalidades en la base. Diseña la pirámide de métricas adaptada a mi contexto y explica cómo presentarlas de arriba abajo: empezar con el impacto en el negocio, luego explicar qué comportamientos del producto lo generan, y finalmente detallar qué funcionalidades impulsan esos comportamientos.

3. **Comunicar cuando los datos no son buenos**: Una de las situaciones más difíciles del product manager es comunicar datos negativos o decepcionantes. Diseña el protocolo de comunicación en contexto difícil: cómo presentar un mes de retención baja sin perder la confianza de la audiencia, cómo explicar por qué una funcionalidad no tuvo el impacto esperado, y cómo presentar el aprendizaje obtenido y el siguiente paso de forma que la audiencia vea progreso aunque los números no sean los esperados.

4. **Narrativa de las decisiones de roadmap**: Las decisiones de roadmap son difíciles de comunicar porque son apuestas sobre el futuro, no certezas. Diseña el formato para comunicar las decisiones de roadmap con su justificación basada en datos: qué problema resuelve la iniciativa (dato del problema), por qué la prioridad es ésta y no otra (datos de impacto esperado vs esfuerzo), qué hipótesis debe validarse para considerar que la iniciativa fue un éxito, y cuál es el criterio de decisión si los datos no confirman la hipótesis.

5. **El product review ejecutivo**: Define la estructura del product review mensual o trimestral para la dirección y los inversores. Propón: apertura con el titular del período (cuál es la historia en una frase), progreso en los OKRs con contexto (por qué estamos donde estamos), las tres decisiones de producto más importantes del período con su justificación, el outlook del próximo período con los riesgos identificados, y la pregunta o decisión que necesitas de la audiencia. Limita el formato a seis slides o menos.

6. **Datos cuantitativos y cualitativos en la narrativa de producto**: Los datos cuantitativos dicen qué está pasando, los cualitativos dicen por qué. Diseña cómo combinar ambos en la narrativa de producto: cómo usar una cita de usuario para humanizar un dato de retención, cómo respaldar una decisión de diseño con datos cuantitativos de uso, y cómo presentar los insights de investigación de usuarios como evidencia que complementa los datos de analytics.

7. **Construir confianza a través de la consistencia de la narrativa**: La confianza de la dirección en el equipo de producto se construye sobre la consistencia a lo largo del tiempo: las métricas que dijiste que mejorarían mejoran, las hipótesis que dijiste que validarías se validan o se invalidan y se aprende, las decisiones que tomaste producen los resultados que prometiste. Diseña el sistema de seguimiento de compromisos de producto: cómo documentar las hipótesis y los criterios de éxito, cómo hacer el seguimiento de los compromisos entre reviews, y cómo comunicar cuando los resultados difieren de lo esperado.

**Formato esperado:**
- Comparativa de informe vs narrativa de producto con ejemplo
- Pirámide de métricas adaptada a mi contexto
- Plantilla del product review ejecutivo de seis slides
- Protocolo de comunicación de resultados negativos
- Sistema de seguimiento de compromisos con plantilla
- Guía de combinación de datos cuantitativos y cualitativos

Empieza con el análisis de contexto y construye el marco completo.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Comunicar los datos del producto con narrativa que genera confianza y alineación en dirección, inversores y equipo.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'People data storytelling: presentar las métricas de RRHH con narrativa',
                'description'      => 'Aprende a convertir los datos de personas (rotación, engagement, tiempo de cobertura, coste de contratación) en historias que la dirección entiende y que justifican las inversiones en talento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief People Officer o people analytics specialist con experiencia convirtiendo los datos de RRHH en argumentos estratégicos que la dirección toma en serio. Necesito aprender a presentar las métricas de personas de forma que generen el mismo respeto y atención que los datos financieros o de producto.

**Contexto necesario:**
- ¿Cuál es el tamaño de la empresa y el sector?
- ¿Qué métricas de personas recoges actualmente?
- ¿Qué herramientas usas para los datos de RRHH (HRIS, encuestas de engagement, ATS)?
- ¿Participas en reuniones de dirección y cómo presentas los datos de personas?
- ¿Cuál es el mayor escepticismo de la dirección hacia los datos de RRHH que debes superar?

**Marco de people data storytelling:**

1. **El problema de los datos de RRHH en la dirección**: Los datos de RRHH tienen un problema de credibilidad en la mayoría de los comités de dirección: se perciben como datos de gestión interna (el número de contrataciones del mes) en lugar de datos estratégicos (el impacto de la rotación en el revenue). Diseña el diagnóstico de cómo presentas los datos actualmente e identifica los cambios necesarios para elevar su impacto estratégico.

2. **Conectar los datos de personas con los resultados de negocio**: El primer paso para que la dirección tome en serio los datos de RRHH es mostrar que tienen impacto directo en los resultados de negocio. Para cada métrica de personas, proporciona la conexión con el negocio: rotación alta → revenue en riesgo (clientes atendidos por personas sin experiencia), bajo engagement → productividad inferior (output del equipo correlacionado con el score de engagement), tiempo de cobertura largo en posiciones clave → retraso en proyectos estratégicos (impacto en el roadmap de producto o en los plazos comerciales).

3. **El coste real de la rotación**: La rotación es la métrica de personas más fácil de conectar con el dinero. Diseña el cálculo completo del coste de la rotación para mi empresa: coste directo (selección, contratación, onboarding), coste indirecto (pérdida de productividad durante la curva de aprendizaje del sustituto, impacto en el equipo que asume la carga adicional, pérdida de conocimiento), y el tiempo hasta que el sustituto alcanza la productividad plena. Proporciona la fórmula y el cálculo estimado.

4. **Narrativa del engagement**: Los datos de engagement son a menudo los más difíciles de vender a la dirección porque parecen subjetivos. Diseña la narrativa del engagement que sea convincente para un CEO o CFO: correlación entre engagement y absentismo, entre engagement y productividad (si tienes datos de output), y entre engagement y rotación (el engagement bajo es el predictor más fiable de la rotación). Proporciona el formato de presentación del engagement que muestre estas conexiones.

5. **El people dashboard para el comité de dirección**: Define las cinco o seis métricas de personas que deben estar en el cuadro de mando de la dirección. Para cada métrica: qué mide exactamente, por qué es relevante para el negocio, con qué frecuencia debe reportarse, y qué umbral de alerta debe activar una conversación en el comité. Proporciona el diseño del dashboard con la jerarquía de información.

6. **Presentar la inversión en talento como ROI**: Cuando propones una inversión en talento (formación, nuevas contrataciones, mejora de beneficios, herramientas de RRHH), la dirección espera el mismo rigor que en cualquier inversión de negocio. Diseña el template del business case de inversión en talento: qué problema resuelve, qué datos lo evidencian, cuánto cuesta la inversión, qué retorno esperado tiene en términos de negocio (menor rotación, mayor productividad, cobertura de posiciones más rápida), y cuál es el período de recuperación.

7. **Narrativa de los datos a lo largo del tiempo**: Los datos de personas más poderosos no son los de un mes sino las tendencias. Diseña la narrativa de tendencias de personas: cómo mostrar la evolución del engagement a lo largo de los últimos 12 meses y correlacionarla con los eventos de la empresa (cambio de liderazgo, reestructuración, lanzamiento de producto), cómo identificar patrones de rotación por departamento o antigüedad que muestran dónde está el problema, y cómo usar esas tendencias para construir argumentos de inversión preventiva.

**Formato esperado:**
- Diagnóstico de la presentación actual de datos de personas
- Tabla de conexión métricas de personas → impacto de negocio
- Calculadora del coste real de la rotación con fórmula
- Diseño del people dashboard para dirección
- Template del business case de inversión en talento
- Formato de presentación del engagement para CEO y CFO

Empieza con el diagnóstico de contexto.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Convertir las métricas de RRHH en historias con impacto estratégico que la dirección toma en serio y que justifican las inversiones en talento.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Financial visualization: los gráficos que hacen que los números hablen',
                'description'      => 'Aprende a diseñar representaciones visuales de datos financieros que comunican el estado del negocio, identifican tendencias y facilitan decisiones de forma clara y sin distorsión.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero con experiencia en la comunicación visual de datos financieros para audiencias ejecutivas e inversores. Necesito aprender a convertir tablas de Excel llenas de números en visualizaciones que cuenten la historia financiera del negocio de forma clara, honesta y accionable.

**Contexto necesario:**
- ¿Qué tipo de datos financieros necesitas visualizar principalmente (P&L, cashflow, métricas SaaS, análisis de inversiones, presupuesto vs real)?
- ¿Cuál es la audiencia principal de tus visualizaciones financieras?
- ¿Qué herramientas usas actualmente (Excel, PowerBI, Tableau, Google Sheets)?
- ¿Cuál es el mayor problema con tus visualizaciones actuales (demasiada información, difícil interpretar las tendencias, la audiencia no sabe qué hacer con los datos)?
- ¿Tienes alguna presentación financiera importante próximamente?

**Marco de visualización financiera:**

1. **Principios específicos para la visualización financiera**: Los datos financieros tienen características únicas que requieren principios específicos de visualización. La escala importa: cambiar el eje Y para magnificar variaciones pequeñas puede ser engañoso; mantener siempre el cero como referencia en gráficos de barras. El contexto temporal es esencial: los datos financieros sin comparación temporal (mes anterior, mismo período del año pasado, presupuesto) son poco útiles. Las variaciones son tan importantes como los valores absolutos: diseña siempre la visualización de la variación junto al valor. Proporciona ejemplos concretos de visualizaciones bien y mal diseñadas.

2. **El cuadro de mando financiero ejecutivo**: Diseña la estructura del cuadro de mando financiero para el comité de dirección. Sección 1: semáforo de salud financiera (los tres o cuatro KPIs más importantes en rojo/amarillo/verde). Sección 2: evolución de ingresos con comparativa vs presupuesto y vs período anterior. Sección 3: análisis de márgenes con desglose por línea de negocio o producto. Sección 4: cashflow con proyección a 90 días. Sección 5: los dos o tres focos de atención para el próximo período. Proporciona el layout completo con proporciones.

3. **Visualización de la cuenta de resultados**: La cuenta de resultados en formato tabla es difícil de interpretar para audiencias no financieras. Diseña alternativas visuales: el waterfall chart (gráfico de cascada) para mostrar cómo se llega del ingreso al beneficio neto pasando por cada categoría de coste, el análisis de márgenes en gráfico de barras apiladas que muestre la evolución de la estructura de costes a lo largo del tiempo, y el bridge chart para explicar la variación del EBITDA entre períodos.

4. **Visualización de métricas SaaS**: Las métricas de un negocio SaaS son complejas porque se solapan en el tiempo (cohort analysis, MRR movement). Diseña las visualizaciones específicas para SaaS: el MRR waterfall que muestra el movimiento de ingresos (nuevo MRR, expansión, contracción, churn), el análisis de cohortes de retención en formato heatmap, y la curva de recuperación del CAC en gráfico de líneas acumulativas.

5. **Visualización del análisis presupuestario**: El análisis de desviaciones entre presupuesto y real es uno de los usos más frecuentes de la visualización financiera. Diseña el formato para hacerlo claro y accionable: cómo mostrar la desviación en valor absoluto y en porcentaje, cómo distinguir visualmente las desviaciones positivas de las negativas, cómo crear el drill-down desde el total hasta la línea de coste específica, y cómo presentar las acciones correctoras junto a las desviaciones.

6. **Visualización del cashflow y la tesorería**: El cashflow es el dato financiero más crítico para la supervivencia del negocio pero suele presentarse de forma confusa. Diseña la visualización del cashflow: el gráfico de flujos de caja acumulados con la proyección de saldo mínimo, el análisis de necesidades de tesorería por período, y la visualización del ciclo de conversión de efectivo (días de cobro, días de pago, días de inventario).

7. **Storytelling financiero para no financieros**: Define cómo presentar los datos financieros a una audiencia que no tiene formación financiera (el equipo de producto, el equipo de ventas, los empleados en una all-hands). Diseña el formato que traduce los datos financieros al lenguaje de cada audiencia: para el equipo de producto (cuánto revenue genera cada funcionalidad, cuánto cuesta el tiempo del equipo), para el equipo de ventas (margen por tipo de cliente, coste de adquisición vs LTV), y para toda la empresa (cómo va el negocio en términos que todos puedan entender).

**Formato esperado:**
- Principios de visualización financiera con ejemplos de bien/mal
- Layout del cuadro de mando ejecutivo con secciones y proporciones
- Guía de selección de tipo de gráfico por tipo de dato financiero
- Diseño del MRR waterfall y el análisis de cohortes
- Plantilla del análisis presupuestario visual
- Guía de traducción de datos financieros por audiencia

Empieza con el diagnóstico de contexto y necesidades.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar visualizaciones de datos financieros que comunican el estado del negocio y facilitan decisiones de forma clara y sin distorsión.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legal data presentation: cómo usar los datos para reforzar el argumento jurídico',
                'description'      => 'Aprende a incorporar datos estadísticos, análisis cuantitativos y visualizaciones en los argumentos jurídicos para reforzar la credibilidad, la claridad y el impacto ante jueces, árbitros y clientes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado con experiencia en litigación compleja y arbitraje internacional donde el uso de evidencia cuantitativa y visualizaciones de datos es determinante para el resultado. Necesito aprender a incorporar datos, análisis estadísticos y representaciones visuales en mi práctica jurídica para hacer mis argumentos más sólidos y más claros.

**Contexto necesario:**
- ¿En qué área del derecho ejerces principalmente (litigación civil, arbitraje, derecho mercantil, regulatorio, laboral)?
- ¿Has usado datos o visualizaciones en algún procedimiento anterior? ¿Con qué resultado?
- ¿Cuál es el tipo de caso donde los datos podrían tener más impacto en tu práctica?
- ¿Tienes acceso a expertos en análisis de datos o economistas en tu firma?
- ¿Cuál es la jurisdicción principal donde ejerces?

**Marco de uso de datos en la práctica jurídica:**

1. **Cuándo y por qué los datos refuerzan el argumento jurídico**: Los datos no son siempre relevantes en derecho, pero cuando lo son pueden ser determinantes. Identifica los tipos de casos donde el análisis cuantitativo es más valioso: daños y perjuicios (cuantificación económica), competencia y regulatorio (análisis de mercado y posición dominante), laboral colectivo (análisis estadístico de discriminación), propiedad intelectual (cuantificación del daño por infracción), y fraude (análisis de transacciones para detectar patrones). Para cada tipo, explica qué datos son relevantes y qué nivel de análisis es habitual en la jurisdicción.

2. **Tipos de evidencia cuantitativa en los procedimientos jurídicos**: Define los tipos de evidencia basada en datos que se admiten en los procedimientos jurídicos: informes periciales de economistas o estadísticos, análisis de bases de datos producidos en el descubrimiento, benchmarks del sector obtenidos de fuentes públicas, y análisis de transacciones. Para cada tipo, explica cuáles son los requisitos de admisibilidad y las fortalezas y debilidades como evidencia.

3. **Presentación visual de la evidencia en vistas y audiencias**: Una visualización bien diseñada puede explicar en segundos lo que un texto tarda páginas en comunicar. Diseña los principios de visualización jurídica: claridad sobre estética (el gráfico debe ser comprensible para alguien sin formación técnica), exactitud sobre impacto (nunca distorsionar la escala para magnificar el efecto), fuente siempre visible (cada dato debe tener su referencia), y simplicidad sobre completitud (un gráfico con una sola idea es siempre más poderoso que uno que muestra todo). Proporciona ejemplos de visualizaciones habituales en procedimientos jurídicos.

4. **El perito de análisis de datos como aliado estratégico**: En casos complejos, el experto cuantitativo puede ser la pieza decisiva. Diseña el proceso de trabajo con el perito: cómo briefarle para que sus análisis respondan exactamente a las preguntas jurídicas relevantes, cómo revisar su informe para detectar debilidades que la parte contraria pueda explotar, y cómo prepararle para el interrogatorio cruzado de forma que sus respuestas sean precisas sin perder la claridad.

5. **Análisis de datos para el cliente: cuantificar el riesgo y el valor del caso**: Antes de litigar, el cliente necesita entender cuánto puede ganar o perder. Diseña el análisis de decisión de litigio basado en datos: cómo estimar la probabilidad de éxito usando precedentes similares, cómo cuantificar el rango de daños potenciales con escenarios pesimista, base y optimista, y cómo calcular el valor esperado del litigio comparado con un acuerdo extrajudicial. Proporciona el árbol de decisión y el modelo de valoración del caso.

6. **Uso de datos en la negociación y el arbitraje**: En el arbitraje internacional y en la negociación de acuerdos complejos, la parte que llega con datos más sólidos tiene una ventaja. Diseña cómo preparar el paquete de datos para una negociación: qué análisis cuantitativos preparar de antemano para tener respuestas preparadas a las posiciones de la contraparte, cómo usar los datos para anclar la negociación en un número favorable, y cómo responder a los datos de la contraparte con contraanálisis.

7. **Ética y límites del uso de datos en derecho**: El uso de datos en la argumentación jurídica tiene límites éticos y procesales. Diseña el protocolo de revisión de la evidencia cuantitativa: cómo verificar que los datos son exactos y no están manipulados, cómo asegurarte de que las visualizaciones no distorsionan la realidad aunque sean técnicamente correctas, y cuándo es obligatorio revelar las limitaciones del análisis aunque debiliten el argumento.

**Formato esperado:**
- Mapa de tipos de casos donde los datos son más valiosos
- Guía de visualizaciones habituales en procedimientos jurídicos
- Proceso de trabajo con el perito cuantitativo
- Árbol de decisión para el análisis de litigio vs acuerdo
- Checklist de revisión ética de la evidencia cuantitativa
- Plantilla del informe pericial de análisis de datos

Empieza con el diagnóstico de contexto antes de construir el marco.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Incorporar datos, análisis cuantitativos y visualizaciones en los argumentos jurídicos para reforzar la credibilidad y el impacto.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'CS data stories: cómo presentar el impacto del CS con datos que importan',
                'description'      => 'Aprende a construir y presentar las historias basadas en datos del equipo de Customer Success que demuestran el impacto en el negocio y justifican la inversión en el equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia construyendo el business case del CS ante la dirección usando datos de impacto de negocio. Necesito aprender a presentar el trabajo del equipo de CS de forma que la dirección vea claramente el valor que aportamos, más allá de los tickets resueltos y los NPS scores.

**Contexto necesario:**
- ¿Cuántos clientes gestiona el equipo de CS y cuál es el modelo de negocio (SaaS, servicios, marketplace)?
- ¿Qué métricas de CS reportas actualmente a la dirección?
- ¿Cuál es la percepción del equipo de CS en la organización (centro de coste, motor de retención, generador de revenue)?
- ¿Cuál es el mayor reto al justificar la inversión en CS (dificultad de atribuir el impacto, métricas que no conectan con el negocio, comparación con el coste de ventas)?
- ¿Tienes datos de retención y expansión de cuentas que gestiona CS?

**Sistema de CS data storytelling:**

1. **El problema de las métricas de CS tradicionales**: Las métricas habituales de CS (tickets cerrados, tiempo de respuesta, NPS) son métricas de actividad, no de impacto. La dirección no puede conectar "NPS de 42" con "revenue protegido" o "costes evitados". Diseña el diagnóstico de las métricas actuales e identifica cuáles deben mantenerse, cuáles deben abandonarse, y qué métricas de impacto deben añadirse.

2. **Las métricas de CS que importan al CEO y al CFO**: Define las métricas de CS que conectan directamente con los objetivos de negocio. Gross Revenue Retention (qué porcentaje de los ingresos existentes se conserva, excluyendo expansión): el indicador más directo de la salud del CS. Net Revenue Retention (incluye expansión): el indicador de si los clientes crecen. Revenue at Risk (el revenue de cuentas en riesgo de churn identificadas): el valor del trabajo proactivo del CS. Customer Lifetime Value por segmento: cómo el CS extiende el LTV de las cuentas que gestiona. Para cada métrica, proporciona la fórmula, el benchmark y cómo calcularla con los datos disponibles.

3. **El revenue que CS genera y protege**: Uno de los cambios más poderosos en la narrativa del CS es pasar de "costes del equipo de CS" a "revenue gestionado por CS". Diseña el cálculo del revenue bajo gestión del CS: cuánto revenue total está en la cartera del equipo, cuánto se ha renovado en el último año, cuánto se ha expandido, y cuánto se ha perdido. Compara el coste del equipo de CS con el revenue que gestiona para mostrar el ratio de cobertura.

4. **La historia de la retención**: La retención es el argumento financiero más poderoso del CS porque tiene un impacto directo en el valor de la empresa. Diseña la historia de la retención adaptada a mi contexto: cuánto vale un punto de reducción del churn en términos de revenue anual, cómo ha evolucionado la retención en los últimos 12 meses, y qué iniciativas de CS han contribuido a mejorarla. Proporciona el formato de presentación con el impacto en el valor de la empresa.

5. **Casos de éxito de CS con datos**: Los casos de éxito son la forma más poderosa de humanizar los datos de CS. Diseña el formato del caso de éxito de CS: cliente (sin nombre si hay confidencialidad, con sector y tamaño), situación de riesgo identificada, acción del equipo de CS, resultado medido en términos de negocio (renovación conseguida, expansión generada, churn evitado con su valor económico). Proporciona la plantilla y el proceso para documentar un caso de éxito cada mes.

6. **El dashboard de CS para la dirección**: Define las cinco o seis métricas que deben aparecer en el cuadro de mando de CS que la dirección ve regularmente. Diseña el formato: semáforo de salud de la cartera (% de cuentas en verde/amarillo/rojo), GRR y NRR con tendencia mensual, revenue at risk con acciones en curso, pipeline de expansión identificado por CS, y el resultado de las iniciativas proactivas del período. Proporciona el layout con la jerarquía de información.

7. **Construir el business case para ampliar el equipo de CS**: Cuando necesitas justificar la contratación de más CSMs, necesitas el argumento financiero. Diseña el business case: cuánto revenue por CSM es el ratio óptimo del sector, cuánto revenue está en riesgo por la carga actual del equipo (cuentas sin suficiente atención), cuánto revenue adicional se podría generar con un CSM dedicado a la expansión, y cuál es el retorno esperado de la inversión en el nuevo headcount. Proporciona el modelo con los cálculos.

**Formato esperado:**
- Diagnóstico de métricas actuales con clasificación actividad/impacto
- Tabla de métricas de impacto con fórmulas y benchmarks
- Cálculo del revenue bajo gestión del CS
- Plantilla del caso de éxito de CS
- Layout del dashboard de CS para la dirección
- Business case para expansión del equipo con modelo financiero

Empieza con el diagnóstico de contexto.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir y presentar historias basadas en datos del equipo de CS que demuestran el impacto en el negocio y justifican la inversión.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Storytelling del freelance: usar datos y casos para justificar el precio',
                'description'      => 'Aprende a construir la narrativa basada en datos y casos de éxito que justifica tus tarifas, diferencia tu oferta y elimina las objeciones de precio antes de que aparezcan.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un mentor de negocio para freelancers con experiencia ayudando a profesionales independientes a posicionarse en el segmento premium de su mercado usando datos y casos de éxito como base de su argumento de valor. Quiero aprender a usar los números y las historias de mi trabajo para cobrar más sin tener que justificarlo constantemente.

**Contexto necesario:**
- ¿Cuál es tu especialidad como freelance y cuál es tu tarifa actual?
- ¿Cuáles son los resultados más significativos que has conseguido para tus clientes?
- ¿En qué momento del proceso comercial sueles enfrentarte a objeciones de precio?
- ¿Tienes documentados los resultados de tus proyectos anteriores (en cifras)?
- ¿Cuál es la diferencia entre tu tarifa y la de los freelancers más baratos que compiten por los mismos proyectos?

**Sistema de storytelling de valor para el freelance:**

1. **La diferencia entre precio y valor**: La objeción de precio es siempre un síntoma de que el cliente no percibe suficiente valor. Antes de trabajar en cómo presentar los datos, diseña el diagnóstico del problema de valor: ¿en qué momento del proceso comercial aparece la objeción de precio?, ¿es el cliente el decisor económico o alguien que necesita justificarlo ante otro?, ¿cuál es la alternativa con la que te comparan (otro freelance, una agencia, hacerlo internamente)? El tratamiento correcto depende del diagnóstico.

2. **Cuantificar el valor de tu trabajo**: Para poder justificar tus tarifas con datos necesitas conocer el impacto económico de tu trabajo en los clientes. Diseña el proceso de cuantificación: después de cada proyecto, qué preguntas hacer al cliente para documentar el impacto (¿cuánto aumentaron los ingresos?, ¿cuánto tiempo del equipo se liberó?, ¿cuánto costaba el problema que resolviste antes de contratarme?). Proporciona la lista de preguntas por tipo de servicio freelance.

3. **Construir el portfolio de impacto**: La diferencia entre un portfolio decorativo y un portfolio de impacto está en que el segundo conecta tu trabajo con los resultados del cliente. Diseña la estructura del caso de éxito para un freelance: cliente (con nombre si hay permiso, con sector y tamaño si no), el problema o la situación antes de trabajar juntos, tu solución y el proceso, los resultados medidos en cifras concretas, y una cita del cliente que lo confirme. Proporciona la plantilla completa y el proceso para documentar un caso después de cada proyecto.

4. **El ROI como argumento de precio**: Si puedes demostrar que tu trabajo genera un retorno mayor que tu coste, el debate de precio cambia de naturaleza. Diseña el cálculo del ROI de contratar a un freelance con tu perfil: en el peor de los casos (el cliente no puede cuantificar el impacto directamente), usa el coste alternativo (cuánto costaría hacer lo mismo internamente o con una agencia, cuánto tiempo tardaría más, cuántos errores se evitan). Proporciona el framework de ROI adaptado a tu tipo de servicio.

5. **Narrativa de precio en la propuesta**: La forma en que presentas el precio en la propuesta es tan importante como el precio en sí. Diseña la estructura de la propuesta que desactiva la objeción de precio antes de que aparezca: presentar primero el impacto esperado (en términos del cliente, no en términos de horas tuyas), luego el proceso y el entregable, y finalmente el precio como la inversión necesaria para ese impacto. Proporciona el template de propuesta con esta lógica.

6. **Gestión de la objeción de precio cuando aparece**: Cuando el cliente dice "es caro", ¿qué haces? Diseña el protocolo de respuesta a la objeción de precio: primero entender qué hay detrás (¿problema de presupuesto real, comparación con alternativas, falta de percepción de valor?), luego responder con el argumento correcto para cada causa. Para cada tipo de objeción, proporciona la respuesta con el dato o el caso que la neutraliza.

7. **Posicionamiento premium basado en datos**: El posicionamiento de precio premium no se construye solo cuando llega la propuesta sino en toda la comunicación anterior. Diseña la estrategia de comunicación de valor a lo largo del tiempo: cómo incluir los resultados de clientes en el perfil de LinkedIn, en la web, en los correos de outreach, y en las conversaciones informales. El objetivo es que cuando el cliente llegue a la propuesta, ya haya visto suficiente evidencia de que el precio merece la pena.

**Formato esperado:**
- Diagnóstico de la situación de precio con causa raíz
- Lista de preguntas de cuantificación de impacto por tipo de servicio
- Plantilla de caso de éxito de freelance
- Framework de cálculo del ROI de contratar tu servicio
- Template de propuesta con lógica de valor antes que precio
- Protocolo de respuesta a objeciones de precio con argumentos basados en datos

Empieza con el diagnóstico de contexto y construye el sistema completo.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir la narrativa basada en datos y casos de éxito que justifica las tarifas freelance y elimina las objeciones de precio.',
                'vote_score'       => 33,
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
