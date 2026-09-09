<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills237Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Econometría de marketing: modelos de atribución avanzados',
                'description'       => 'Los modelos estadísticos que atribuyen correctamente el impacto de cada canal: la regresión de series temporales, el modelo de mix de medios y las técnicas de causalidad que van más allá de la atribución last-click que la mayoría de los equipos todavía usa.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en econometría aplicada al marketing y en Marketing Mix Modeling (MMM). Necesito que me ayudes a entender y aplicar los modelos estadísticos de atribución avanzada para medir correctamente el impacto de cada canal de marketing en las ventas o conversiones.

Mi contexto:
- Descripción del negocio: [qué vendes, volumen aproximado de ventas, canales de marketing que usas]
- Modelo de atribución actual: [last-click / first-click / lineal / basado en datos / ninguno formal]
- Datos disponibles: [histórico de gasto por canal, datos de ventas, datos de web analytics, frecuencia — semanal / mensual]
- Período de datos disponible: [meses o años de histórico]
- Principal problema de atribución: [no sé cuánto contribuye cada canal / el modelo last-click sobrevalora Google / tenemos canales offline que no podemos atribuir / necesitamos justificar el presupuesto de marketing con datos]

Con ese contexto, dame:

1. POR QUÉ EL LAST-CLICK ESTÁ ROTO
Explícame los problemas del modelo de atribución last-click (y de los modelos de atribución basados en el viaje del usuario en general) que hacen que las decisiones de inversión basadas en ellos sean sistemáticamente erróneas:
- Por qué el last-click sobrevalora los canales de captura de demanda (SEM de marca, retargeting) y subvalora los canales de creación de demanda (display, vídeo, social awareness)
- El problema de la correlación vs causalidad en la atribución: por qué el canal que aparece antes de la conversión no es necesariamente el que la causó
- El problema de los canales offline: por qué la atribución basada en cookies es incapaz de medir TV, radio, exterior o eventos
- El impacto concreto en las decisiones de presupuesto: qué canales se sobreinvierten y cuáles se desinvierten sistemáticamente con el last-click

2. EL MARKETING MIX MODELING (MMM): EL FUNDAMENTO
Explícame los fundamentos del Marketing Mix Modeling como alternativa a la atribución basada en el usuario:
- Qué es el MMM y cómo funciona: la regresión de series temporales que relaciona el gasto en marketing con las ventas, controlando por factores externos (estacionalidad, precio, competencia)
- Los datos que necesito para construir un modelo MMM: el formato, la granularidad temporal y el volumen mínimo de histórico
- Las limitaciones del MMM: la lentitud de los modelos tradicionales, la dificultad de medir canales digitales de baja inversión y la dependencia de la calidad de los datos
- Cuándo tiene sentido invertir en MMM: los criterios de tamaño de empresa y complejidad del mix que justifican el esfuerzo

3. ADSTOCK Y EFECTOS DE ARRASTRE
Uno de los conceptos clave del MMM es el adstock: el efecto de arrastre de la publicidad en el tiempo. Dame el framework:
- Qué es el adstock y por qué es imprescindible para modelar correctamente el impacto del marketing
- Los dos parámetros del adstock: la tasa de decaimiento y la forma de la curva de respuesta (lineal, cóncava, en S)
- Cómo la forma de la curva de respuesta determina si hay rendimientos crecientes o decrecientes a escala para cada canal
- Cómo calibrar los parámetros de adstock para diferentes tipos de canal (TV vs display vs email vs SEM)

4. CAUSALIDAD: MÁS ALLÁ DE LA CORRELACIÓN
Los modelos de atribución tradicionales confunden correlación con causalidad. Dame el framework de inferencia causal aplicado al marketing:
- Experimentos geográficos: cómo diseñar un geo-holdout test para medir el impacto causal de un canal apagando la inversión en un mercado de control
- Tests de incrementalidad: la diferencia entre el lift medido por el MMM y el lift incremental real, y cómo reconciliarlos
- El diseño cuasi-experimental: cómo usar los métodos de diferencias en diferencias o de regresión discontinua cuando no puedo hacer un experimento controlado
- El modelo causal de Rubin y los contrafactuales en marketing: cómo pensar correctamente la pregunta "¿qué hubiera pasado sin este gasto?"

5. HERRAMIENTAS Y FRAMEWORKS MODERNOS PARA MMM
¿Qué herramientas existen para construir un MMM sin ser un econometrista experto? Dame el panorama:
- Las bibliotecas open source de MMM: Meta Robyn, Google Meridian, PyMC-Marketing — características, ventajas y limitaciones de cada una
- Los modelos bayesianos de MMM: por qué el enfoque bayesiano mejora la estimación de los parámetros de adstock y cómo interpretar las distribuciones posteriores
- El pipeline de datos para alimentar un MMM: cómo integrar los datos de gasto, ventas, factores externos y señales de medios en el formato correcto
- Cuándo contratar a un experto externo vs construir el modelo internamente: los criterios de decisión

6. VALIDACIÓN Y USO DEL MODELO
Un modelo MMM que nadie usa es inútil. Dame el framework de validación y uso:
- Cómo validar que el modelo es bueno: el MAPE (Mean Absolute Percentage Error), la backtesting en períodos fuera del training y la comparación con los experimentos causales
- Cómo traducir los coeficientes del modelo en decisiones de presupuesto: la curva de respuesta marginal por canal y la optimización del presupuesto
- El budget optimizer: cómo usar el modelo para encontrar la distribución de presupuesto que maximiza el ROI total
- La cadencia de actualización: cada cuánto debo re-entrenar el modelo y con qué frecuencia debo actualizar las recomendaciones de inversión

7. DE LOS MODELOS A LAS DECISIONES
¿Cómo presentar los resultados del MMM al liderazgo de marketing y al CFO para que se usen en las decisiones reales de presupuesto? Dame el framework de comunicación:
- Los outputs del MMM que más importan a los diferentes stakeholders: el equipo de marketing, el CFO y la dirección general
- Cómo construir el business case para la inversión en MMM: el retorno esperado de mejorar la atribución y el presupuesto típico de un proyecto de MMM
- Los errores de presentación que hacen que los resultados del MMM sean ignorados: demasiada complejidad técnica, falta de conexión con las decisiones concretas, modelos que no sobreviven el escrutinio del CFO
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Entender y aplicar modelos de atribución avanzada (MMM) para medir el impacto real de cada canal de marketing y optimizar el presupuesto.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Algoritmos y estructuras de datos para entrevistas técnicas avanzadas',
                'description'       => 'Los algoritmos y estructuras de datos que aparecen en las entrevistas de las empresas de tecnología de mayor nivel: árboles, grafos, programación dinámica y las técnicas de resolución de problemas que diferencian al candidato que pasa de FAANG del que no.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en preparación de entrevistas técnicas de alto nivel con experiencia en procesos de selección de empresas como Google, Meta, Amazon, Microsoft, Apple y otras empresas de tecnología de referencia. Necesito que me ayudes a prepararme de forma sistemática para superar los coding interviews de nivel avanzado.

Mi contexto:
- Nivel actual de experiencia: [junior / mid / senior / staff]
- Lenguaje de programación preferido para las entrevistas: [Python / Java / C++ / JavaScript / Go / otro]
- Estado de preparación actual: [empezando desde cero / tengo las bases pero fallo en problemas difíciles / he fallado entrevistas recientes y quiero entender por qué]
- Empresas objetivo: [las empresas o tipos de empresa a los que aplicas o planeas aplicar]
- Tiempo disponible para la preparación: [horas por semana y semanas disponibles hasta el primer proceso]
- Principal debilidad técnica: [árboles y grafos / programación dinámica / diseño de sistemas / todos los anteriores]

Con ese contexto, dame:

1. EL MAPA DE CONOCIMIENTOS NECESARIOS
¿Qué estructuras de datos y algoritmos son imprescindibles para los coding interviews de nivel avanzado? Dame el mapa completo organizado por frecuencia de aparición:

Estructuras de datos esenciales: arrays y strings, listas enlazadas, pilas y colas, árboles binarios y BST, heaps, grafos, tablas hash y sets — para cada una, el nivel de dominio esperado y los patrones de problema más frecuentes.

Algoritmos esenciales: búsqueda binaria, two pointers, sliding window, BFS y DFS, backtracking, programación dinámica, divide y vencerás, algoritmos de grafos (Dijkstra, Bellman-Ford, topological sort, Union-Find) — para cada uno, cuándo aplicarlo y las variantes más frecuentes.

2. EL FRAMEWORK DE RESOLUCIÓN DE PROBLEMAS EN ENTREVISTA
La técnica de resolución es tan importante como el conocimiento técnico. Dame el framework paso a paso que debo aplicar en cada problema:
- Los primeros dos minutos: cómo clarificar el problema, identificar los edge cases y confirmar el entendimiento antes de escribir código
- La exploración de enfoques: cómo pensar en voz alta mientras exploras desde la solución bruta hasta la óptima, y por qué hacer esto convence al entrevistador aunque no llegues a la solución perfecta
- El análisis de complejidad: cómo calcular y comunicar la complejidad temporal y espacial de cada solución
- La implementación: las prácticas de codificación que demuestran seniority (nombres de variables claros, funciones auxiliares, manejo de edge cases)
- El testing en entrevista: cómo trazar la ejecución del código con un ejemplo antes de declararlo correcto

3. PROGRAMACIÓN DINÁMICA: EL TEMA QUE MÁS ASUSTA
La programación dinámica (DP) es el tema donde más candidatos fallan. Dame el framework sistemático para atacar cualquier problema de DP:
- Cómo reconocer que un problema tiene solución de DP: las características (optimal substructure, overlapping subproblems) y las pistas en el enunciado
- El proceso de cinco pasos para resolver cualquier problema de DP: definir el estado, la transición, el caso base, el orden de cálculo y la respuesta
- Los patrones de DP más frecuentes en entrevistas: knapsack, longest common subsequence, edit distance, matrix path, interval DP, tree DP, digit DP
- La diferencia entre top-down (memoización) y bottom-up (tabulación): cuándo usar cada uno y cómo convertir uno en el otro

4. GRAFOS: EL TEMA QUE DEFINE AL CANDIDATO SENIOR
Los problemas de grafos distinguen a los candidatos senior de los mid. Dame el framework completo:
- Las representaciones de grafos: lista de adyacencia vs matriz de adyacencia — cuándo usar cada una y cómo implementarlas limpiamente
- BFS vs DFS: las diferencias fundamentales, cuándo usar BFS (caminos más cortos, nivel por nivel) y cuándo DFS (backtracking, componentes conexas, topological sort)
- Los algoritmos de grafos que aparecen en entrevistas y cómo implementarlos: Dijkstra con heap, detectar ciclos, topological sort (Kahn y DFS), Union-Find (con path compression y union by rank)
- Los problemas de grafos disfrazados: los problemas de matrices (BFS/DFS sobre grid), los problemas de dependencias (topological sort) y los problemas de conectividad (Union-Find)

5. ÁRBOLES: PATRONES Y TÉCNICAS AVANZADAS
Los árboles son el tema más frecuente en entrevistas. Dame el dominio completo:
- Los recorridos de árbol y cuándo usar cada uno: inorder, preorder, postorder (DFS) vs level order (BFS)
- Los problemas de LCA (Lowest Common Ancestor) y cómo resolverlos en diferentes tipos de árbol
- Los problemas de path en árboles: cómo atacar los problemas que piden el camino de mayor suma, mayor longitud o que cumple una condición
- Los árboles BST y sus propiedades: búsqueda, inserción, eliminación y los problemas que aprovechan la propiedad de orden
- Los árboles equilibrados: cuándo mencionarlos en la entrevista y cuánto detalle dar sobre AVL, Red-Black o B-trees

6. ESTRATEGIA DE PREPARACIÓN Y PRÁCTICA
¿Cómo estructuro las semanas de preparación para maximizar las probabilidades de pasar los procesos? Dame el plan:
- La secuencia de temas en el orden óptimo de aprendizaje para alguien con mi nivel actual
- Las plataformas y recursos recomendados: LeetCode, NeetCode.io, Blind 75 / Grind 169, libros, vídeos — con la recomendación de cuántos problemas por tema y qué nivel (easy/medium/hard)
- El proceso de revisión: cómo sacar el máximo aprendizaje de un problema que no he sabido resolver
- Las señales de que estoy listo: cómo saber cuándo he preparado suficiente para empezar a aplicar
- La práctica de la comunicación: por qué practicar en voz alta o con un compañero es imprescindible aunque conozcas los algoritmos

7. LOS ERRORES QUE CUESTAN EL TRABAJO
Dame los errores no técnicos más frecuentes que hacen que un candidato técnicamente capaz falle el coding interview:
- El silencio: codificar sin comunicar el razonamiento
- El overconfidence: lanzarse a implementar sin verificar el entendimiento del problema
- La rendición temprana: declarar que un problema es imposible antes de explorar todas las opciones
- El código no limpio bajo presión: nombres de variables de una letra, ausencia de funciones auxiliares, código que funciona pero que no podría mantenerse
- La falta de testing: declarar el código correcto sin trazarlo con un ejemplo
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Prepararse sistemáticamente para superar los coding interviews de nivel avanzado en empresas de tecnología de primer nivel.',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Métricas de diseño: medir el impacto con rigor estadístico',
                'description'       => 'El diseñador que usa estadística para defender sus decisiones: los métodos de análisis de UX con rigor estadístico, la interpretación correcta de los tests A/B y las métricas de experiencia de usuario que se pueden medir y mejorar de forma sistemática.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en investigación de UX cuantitativa y en la aplicación de métodos estadísticos al diseño de experiencia de usuario. Necesito que me ayudes a construir el framework de métricas y análisis estadístico que me permita medir el impacto del diseño con rigor y defender mis decisiones con datos.

Mi contexto:
- Tipo de producto que diseño: [web app / app móvil / e-commerce / SaaS / plataforma / otro]
- Nivel actual de trabajo con datos: [no trabajo con datos / uso Google Analytics de forma básica / tengo acceso a datos pero no los analizo con rigor / quiero ir más allá de los tests A/B básicos]
- Herramientas de analytics disponibles: [Google Analytics / Mixpanel / Amplitude / Hotjar / FullStory / otras]
- Principal reto con los datos en diseño: [no tenemos cultura de datos / los diseños se aprueban sin evidencia / hago tests A/B pero no sé si los resultados son estadísticamente válidos / no sé cómo medir el impacto del diseño en los KPIs del negocio]

Con ese contexto, dame:

1. EL FRAMEWORK DE MÉTRICAS DE UX
¿Qué métricas debo usar para medir la calidad de la experiencia de usuario de forma rigurosa? Dame el framework:
- Las métricas de comportamiento: tasa de conversión, tasa de completado de tareas, tiempo en tarea, tasa de error, tasa de abandono — cómo calcular cada una y qué nos dice sobre la experiencia
- Las métricas de percepción: NPS, CSAT, SUS (System Usability Scale), UMUX — cuándo usar cada escala y cómo interpretarla correctamente
- El modelo HEART de Google: Happiness, Engagement, Adoption, Retention, Task success — cómo aplicarlo a mi producto y definir las métricas específicas para cada dimensión
- Las métricas de accesibilidad: cómo incluir métricas de accesibilidad en el sistema de medición de UX

2. ESTADÍSTICA BÁSICA PARA DISEÑADORES
¿Cuánta estadística necesito saber para trabajar con datos de UX de forma rigurosa? Dame el kit mínimo:
- La diferencia entre media, mediana y moda: cuándo usar cada una en el contexto de métricas de UX y por qué la media puede engañarte
- Distribuciones de datos: cómo visualizar la distribución de los tiempos de tarea o las puntuaciones de usabilidad para ver la realidad que el promedio esconde
- Los intervalos de confianza: qué son, cómo interpretarlos y por qué son más útiles que el p-value para las decisiones de diseño
- La significación estadística: el concepto básico de p-value, qué significa p < 0.05 y qué no significa, y cuándo un resultado es estadísticamente significativo pero no es práctico

3. TESTS A/B: DISEÑARLOS Y LEERLOS CORRECTAMENTE
El test A/B es la herramienta de evaluación de diseño más usada y más mal interpretada. Dame el framework completo:
- Cuándo tiene sentido hacer un test A/B y cuándo es mejor usar otra metodología: los criterios de volumen de tráfico, impacto esperado y tiempo disponible
- Cómo calcular el tamaño de muestra necesario antes de empezar: la relación entre el efecto mínimo detectable, la potencia estadística y el tamaño de muestra
- Los errores más frecuentes en tests A/B: testear múltiples variantes sin corrección, parar el test cuando el resultado parece bueno, ignorar los efectos de novedad y los efectos de Hawthorne
- Cómo interpretar el resultado: la diferencia entre el uplift puntual y el intervalo de confianza del uplift, y cómo tomar la decisión de implementar o no implementar
- Los tests A/B para métricas de UX no conversionales: cómo testear el impacto del diseño en el tiempo en tarea, la tasa de error o el NPS

4. TESTS DE USABILIDAD CUANTITATIVOS
Los tests de usabilidad no tienen que ser solo cualitativos. Dame el framework de los tests de usabilidad cuantitativos:
- Cuántos participantes necesito para un test de usabilidad cuantitativo: la regla de los 5 para tests cualitativos vs el cálculo de muestra para tests cuantitativos
- Las métricas que debo medir en un test de usabilidad cuantitativo: tasa de completado binaria, tiempo en tarea, Single Ease Question (SEQ), tasa de error
- El método de benchmark: cómo establecer una línea base y cómo medir el impacto de un rediseño comparándolo con el benchmark
- Cómo hacer estudios longitudinales de usabilidad: los paneles de usuarios que permiten medir la evolución de la usabilidad a lo largo del tiempo

5. ANÁLISIS DE DATOS DE COMPORTAMIENTO
¿Cómo analizar los datos de comportamiento del usuario (analytics, heatmaps, grabaciones) con rigor estadístico? Dame el framework:
- El análisis de funnels: cómo construir los funnels de conversión, cómo identificar los puntos de mayor caída y cómo evaluar si una diferencia entre etapas es estadísticamente significativa
- Los análisis de cohortes para diseño: cómo usar los datos de cohortes para evaluar si un cambio de diseño ha mejorado la retención o el engagement
- El análisis de segmentación: cómo detectar si el impacto de un cambio de diseño varía según el segmento de usuario (device, canal de adquisición, segmento de valor)
- Los heatmaps y grabaciones: qué se puede concluir con rigor de los heatmaps y qué no (la tentación de las conclusiones falsas a partir de datos de comportamiento visual)

6. PRESENTAR LOS DATOS DE DISEÑO CON CLARIDAD
Los datos de UX solo tienen impacto si se comunican de forma que el equipo y el liderazgo los entienden y actúan sobre ellos. Dame el framework de comunicación:
- Las visualizaciones de datos más efectivas para comunicar resultados de UX: cuándo usar barras, líneas, scatter plots o tablas
- El narrative de los datos: cómo construir el argumento de datos que lleva de la métrica al insight y del insight a la recomendación de diseño
- Cómo presentar la incertidumbre: cómo comunicar los intervalos de confianza y los márgenes de error sin asustar al equipo no técnico
- El dashboard de UX: qué métricas deben estar siempre visibles para el equipo de producto y de diseño

7. CULTURA DE DATOS EN EL EQUIPO DE DISEÑO
¿Cómo convencer al equipo y a la organización de que el diseño basado en datos produce mejores productos? Dame el plan de implantación:
- Cómo empezar con recursos limitados: el stack mínimo de herramientas para empezar a medir el impacto del diseño con rigor
- Cómo construir el caso de negocio para la investigación cuantitativa de UX: el argumento para convencer al product manager y al liderazgo de invertir tiempo en medir correctamente
- Los proyectos de quick win: los análisis que demuestran el valor de los datos de diseño en pocas semanas y que construyen la credibilidad para proyectos más ambiciosos
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Aplicar métodos estadísticos al análisis de UX para medir el impacto del diseño con rigor y defender las decisiones con datos.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Econometría para sales ops: optimizar el proceso de ventas con datos',
                'description'       => 'Los modelos cuantitativos que mejoran el proceso de ventas: la regresión logística para predecir el cierre, el análisis de supervivencia del ciclo de ventas y los modelos de forecasting que van más allá de la intuición del manager.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en sales operations y analytics con especialización en la aplicación de modelos cuantitativos al proceso de ventas B2B. Necesito que me ayudes a implementar los modelos estadísticos que mejoran las decisiones del equipo comercial: el forecasting, la priorización de oportunidades y la optimización del proceso.

Mi contexto:
- Tipo de venta: [B2B de ciclo largo / B2B transaccional / SaaS / servicios profesionales]
- Tamaño del equipo de ventas: [número de AEs y SDRs]
- Herramienta de CRM: [Salesforce / HubSpot / Pipedrive / otra]
- Datos disponibles: [años de histórico de oportunidades, si tienes datos de actividad del equipo, si tienes datos de comportamiento del comprador]
- Principal problema de analytics de ventas: [el forecast siempre falla / no sabemos qué oportunidades priorizar / el equipo no sabe en qué actividades de ventas invertir el tiempo / queremos saber qué predice el cierre]

Con ese contexto, dame:

1. EL MODELO DE SCORING DE OPORTUNIDADES
¿Cómo construir el modelo que predice la probabilidad de cierre de cada oportunidad en el pipeline? Dame el framework:
- La regresión logística como modelo de lead scoring: qué es, qué variables incluir (tamaño del deal, sector del cliente, fuente de la oportunidad, actividad de engagement, tiempo en el stage, número de stakeholders involucrados) y cómo interpretar los coeficientes
- Cómo construir el modelo con los datos del CRM: la limpieza de datos de oportunidades históricas, la definición de la variable objetivo (cerrado ganado vs cerrado perdido) y el proceso de training y validación del modelo
- Las herramientas para construir el modelo sin ser un data scientist: Python con scikit-learn, R, o las capacidades nativas de Salesforce Einstein y HubSpot AI
- Cómo interpretar y comunicar el modelo al equipo de ventas: por qué un score de probabilidad es más útil que una categoría de "frío/tibio/caliente"

2. EL FORECASTING CON MODELOS CUANTITATIVOS
El forecast de ventas que solo usa el criterio del manager es sistemáticamente optimista. Dame el framework de forecasting cuantitativo:
- El modelo de pipeline conversion: cómo calcular la tasa de conversión histórica por stage y tipo de deal para construir un forecast bottom-up más fiable que el del manager
- El modelo de series temporales para el forecast de ventas: cuándo tiene sentido usar ARIMA, ETS u otros modelos de series temporales para complementar el pipeline forecast con el forecast estadístico top-down
- El forecast por cohorte: cómo usar las cohortes de oportunidades creadas en el mismo período para predecir el cierre en base al comportamiento histórico de cohortes similares
- La calibración del forecast: cómo medir la precisión del forecast histórico (MAPE, RMSE) y ajustar el modelo para reducir el sesgo sistemático

3. ANÁLISIS DE SUPERVIVENCIA DEL CICLO DE VENTAS
¿Cuánto dura un deal en cada etapa del funnel antes de cerrar o perderse? El análisis de supervivencia responde a esa pregunta. Dame el framework:
- El concepto de análisis de supervivencia aplicado al ciclo de ventas: la función de supervivencia S(t) que estima la probabilidad de que un deal siga activo después de t días
- La estimación de Kaplan-Meier: cómo calcular la curva de supervivencia de los deals por stage y por segmento (tamaño, industria, fuente)
- El modelo de Cox: cómo identificar los factores que aceleran o frenan el ciclo de ventas y cuantificar su impacto
- Cómo usar los resultados del análisis de supervivencia en la gestión del pipeline: las reglas de antigüedad por stage que deben activar una acción del manager

4. QUÉ PREDICE EL CIERRE: ANÁLISIS DE LOS FACTORES DE ÉXITO
¿Qué diferencia a los deals que se cierran de los que se pierden? Dame el framework de análisis:
- El análisis de los deals ganados y perdidos: las variables del CRM que más correlacionan con el cierre (número de stakeholders, tiempo de respuesta del lead, presencia del campeón interno, demos realizadas, número de touches de ventas)
- El análisis de la calidad de la actividad de ventas: qué actividades (emails enviados, llamadas, reuniones, propuestas) predicen mejor el cierre y en qué stage son más relevantes
- El análisis de los factores de pérdida: cómo categorizar las razones de pérdida del CRM y encontrar los patrones que permiten intervenir antes en los deals con esas características
- La inteligencia de conversación: cómo usar los datos de las grabaciones de llamadas (Gong, Chorus) para identificar los patrones de comportamiento de ventas que correlacionan con el cierre

5. OPTIMIZACIÓN DE LA ASIGNACIÓN DE RECURSOS
¿Cómo usar los modelos cuantitativos para que el equipo de ventas invierta el tiempo donde genera más valor? Dame el framework de optimización:
- El modelo de priorización del pipeline: cómo combinar el score de probabilidad de cierre con el tamaño del deal para crear el ranking de oportunidades en las que el equipo debe invertir tiempo
- El análisis de capacidad: cómo calcular cuántos deals puede gestionar bien cada AE y cómo identificar si un AE tiene el pipeline demasiado concentrado o demasiado disperso
- La asignación óptima de oportunidades: cómo usar los datos de rendimiento del equipo para asignar los deals a los AEs con mayor probabilidad de cerrarlos
- El ROI de las actividades de ventas: cómo calcular el coste por oportunidad por canal de generación y qué canales tienen mayor ROI según el tipo de deal

6. EL STACK DE DATOS DE SALES OPS
¿Qué infraestructura de datos necesita un equipo de sales ops para implementar modelos cuantitativos? Dame el diseño:
- La fuente de verdad: por qué la calidad de los datos del CRM es el cuello de botella de cualquier modelo cuantitativo de ventas y cómo mejorarla
- El data warehouse de ventas: cuándo tiene sentido integrar los datos del CRM con los datos de producto, de marketing y de finanzas
- El stack de análisis: las herramientas que el equipo de sales ops puede usar sin ser ingenieros de datos (Tableau, Looker, dbt, Python con pandas, las capacidades nativas del CRM)
- La hoja de ruta de madurez de datos: el progreso desde el reporting básico hasta los modelos predictivos en producción

7. VENDER LOS MODELOS AL EQUIPO COMERCIAL
Los mejores modelos son inútiles si el equipo de ventas no los usa. Dame el framework de adopción:
- Cómo presentar el modelo de scoring al equipo de ventas sin que lo perciban como una amenaza a su criterio profesional
- La integración en el workflow: cómo mostrar el score de probabilidad directamente en la vista del pipeline del CRM para que el equipo lo use de forma natural
- El ciclo de feedback: cómo recoger el feedback del equipo de ventas para mejorar el modelo y cómo comunicar que sus observaciones son parte del proceso
- Cómo medir la adopción: las métricas que indican si el equipo está usando los modelos en sus decisiones cotidianas
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Implementar modelos cuantitativos de ventas para mejorar el forecasting, la priorización de oportunidades y la optimización del proceso comercial.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Estadística para la experimentación en producto',
                'description'       => 'El framework estadístico correcto para los experimentos de producto: el diseño del experimento, el cálculo del power estadístico, la detección de efectos de network y los errores estadísticos que hacen que muchos equipos de producto tomen decisiones equivocadas basándose en datos incorrectamente interpretados.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en experimentación en producto y estadística aplicada al desarrollo de productos digitales. Necesito que me ayudes a construir el framework de experimentación estadísticamente riguroso que permita a mi equipo tomar mejores decisiones de producto basadas en evidencia real.

Mi contexto:
- Tipo de producto: [app móvil / web app / marketplace / SaaS / plataforma]
- Volumen de usuarios mensuales activos: [necesario para evaluar la viabilidad de los tests A/B]
- Estado actual de la experimentación: [sin tests A/B / tests A/B básicos sin rigor estadístico / plataforma de experimentación establecida pero con problemas de interpretación]
- Herramientas de experimentación: [Optimizely / LaunchDarkly / Firebase A/B Testing / Growthbook / herramienta propia / ninguna]
- Principal problema con los experimentos: [no sabemos cuántos usuarios necesitamos / paramos los tests cuando vemos resultados positivos / tenemos muchos tests pero las decisiones siguen siendo por intuición / no sabemos qué hacer con los tests nulos]

Con ese contexto, dame:

1. LOS FUNDAMENTOS ESTADÍSTICOS DE LA EXPERIMENTACIÓN
Explícame los conceptos estadísticos que todo product manager que diseña experimentos debe dominar:
- La hipótesis nula y la hipótesis alternativa: qué son y cómo formularlas correctamente para un experimento de producto
- Los errores tipo I y tipo II: la diferencia entre un falso positivo (detectar un efecto que no existe) y un falso negativo (no detectar un efecto que sí existe), y cómo el nivel de significación (alpha) y el power (1-beta) controlan cada uno
- El p-value: qué significa exactamente p < 0.05, qué no significa y por qué el p-value solo es interpretable junto al tamaño del efecto y el intervalo de confianza
- El efecto mínimo detectable (MDE): qué es, por qué es el parámetro más importante del diseño del experimento y cómo elegirlo en base a lo que es relevante para el negocio (no en base a lo que el experimento puede detectar)

2. EL CÁLCULO DEL TAMAÑO DE MUESTRA
¿Cuántos usuarios necesito en cada variante para que el resultado del test sea fiable? Dame el framework completo:
- La fórmula del tamaño de muestra y sus inputs: el MDE, el alpha (nivel de significación), el power (1-beta), el valor de la métrica en el control y la varianza de la métrica
- Cómo calcular el tamaño de muestra para diferentes tipos de métrica: métricas binarias (tasa de conversión), métricas continuas (ingresos por usuario, tiempo en sesión) y métricas de ratio (ratio de likes/sesión)
- Las herramientas para calcular el tamaño de muestra sin hacer los cálculos a mano: las calculadoras online, las bibliotecas de Python y los recursos internos que debo construir
- Cuánto tiempo debo dejar correr el test: la conversión del tamaño de muestra en tiempo dado el volumen diario de usuarios expuestos

3. LOS ERRORES ESTADÍSTICOS MÁS FRECUENTES
Dame el catálogo de los errores estadísticos que hacen que los equipos de producto tomen decisiones equivocadas:
- Peeking: por qué parar el test cuando el resultado parece positivo o negativo infla el error tipo I dramáticamente y qué hacer en su lugar (sequential testing, métodos bayesianos, CUPED)
- Multiple comparisons: por qué testear múltiples métricas o múltiples variantes sin corrección estadística aumenta la tasa de falsos positivos y cómo hacer la corrección (Bonferroni, Benjamini-Hochberg)
- El Novelty Effect: por qué los usuarios reaccionan de forma diferente a lo nuevo y cómo distinguir el efecto de novedad del efecto real del cambio
- SRM (Sample Ratio Mismatch): qué es, cómo detectarlo y por qué invalida cualquier conclusión del experimento si no se corrige
- La confusión de correlación y causalidad en los experimentos: por qué incluso un experimento mal diseñado puede producir correlaciones espurias

4. EFECTOS DE NETWORK Y SPILLOVER
Los tests A/B asumen que los usuarios del control y la variante son independientes. En muchos productos esto no es verdad. Dame el framework:
- El problema del spillover: qué ocurre cuando los usuarios del control y de la variante interactúan entre sí (productos sociales, marketplaces, colaboración) y por qué el test A/B clásico no funciona en estos casos
- Las técnicas de experimentación que manejan el spillover: el clustering geográfico, el holdout temporal, el switchback experiment, los graph cluster experiments
- El network effect en los experimentos de features: cómo diseñar experimentos en productos con efectos de red sin contaminar el grupo de control
- El SUTVA (Stable Unit Treatment Value Assumption): qué es, cuándo se viola y qué hacer cuando se viola

5. MÉTRICAS DE EXPERIMENTACIÓN: CUÁLES USAR Y CUÁLES IGNORAR
¿Cómo elegir la métrica correcta para cada experimento? Dame el framework de selección de métricas:
- La métrica primaria vs métricas de guardrail: por qué cada experimento debe tener una sola métrica primaria de decisión y un conjunto de métricas de guardrail que no deben deteriorarse
- Las métricas que son malas para los tests A/B: las métricas con alta varianza (ingresos por usuario con outliers extremos) y cómo transformarlas para aumentar el power del test
- El método CUPED (Controlled-experiment Using Pre-Experiment Data): cómo usar los datos pre-experimento para reducir la varianza de la métrica y detectar efectos más pequeños con menos usuarios
- Las métricas de largo plazo y el problema de los experimentos cortos: cómo los experimentos de corto plazo pueden subestimar el impacto en métricas de largo plazo como la retención

6. LA PLATAFORMA DE EXPERIMENTACIÓN
¿Qué infraestructura técnica necesita un equipo de producto para experimentar de forma eficiente y rigurosa? Dame el diseño:
- Los componentes de una plataforma de experimentación: el sistema de asignación aleatoria, el tracking de la exposición al experimento, el cálculo de métricas, el análisis estadístico y el sistema de decisión
- Los requisitos de la asignación aleatoria: por qué la aleatorización a nivel de usuario, sesión o dispositivo produce resultados diferentes y cómo elegir la unidad correcta
- La integración con el data warehouse: cómo conectar los datos de exposición al experimento con los datos de comportamiento del usuario para calcular las métricas de impacto
- El build vs buy: cuándo tiene sentido construir la plataforma propia vs usar herramientas comerciales

7. LA CULTURA DE EXPERIMENTACIÓN EN EL EQUIPO DE PRODUCTO
¿Cómo crear una cultura de equipo de producto que tome decisiones basadas en evidencia? Dame el plan:
- El proceso de revisión de experimentos: cómo hacer la review estadística de los resultados antes de tomar la decisión de lanzar o descartar
- El registro de experimentos: por qué documentar las hipótesis, el diseño y los resultados de cada experimento es imprescindible para aprender y no repetir errores
- Cómo comunicar los resultados de los experimentos: qué incluir en el reporte de resultados, cómo presentar la incertidumbre y cómo comunicar los resultados nulos sin que el equipo los perciba como fracasos
- La velocidad de experimentación: cómo aumentar el número de experimentos por semana sin comprometer el rigor estadístico
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir el framework de experimentación estadísticamente riguroso que permite tomar mejores decisiones de producto basadas en evidencia.',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'People analytics avanzado: modelos predictivos para RRHH',
                'description'       => 'Los modelos de machine learning aplicados a RRHH: el modelo de predicción de fuga, el análisis de redes organizacionales y las técnicas de people analytics avanzado que las empresas más sofisticadas ya están usando para gestionar el talento.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en people analytics y en la aplicación de modelos cuantitativos y de machine learning a la gestión del talento. Necesito que me ayudes a construir las capacidades de people analytics avanzado que permitan a mi organización tomar mejores decisiones de talento basadas en datos.

Mi contexto:
- Tipo de organización: [empresa tecnológica / empresa de servicios / empresa industrial / sector público]
- Tamaño de la organización: [número de empleados — necesario para evaluar la viabilidad de los modelos]
- Datos de RRHH disponibles: [datos del HRIS — Workday, SAP SuccessFactors, BambooHR — datos de desempeño, datos de encuestas de compromiso, datos de nómina]
- Estado actual de analytics de RRHH: [solo reporting básico / dashboards de métricas de RRHH / análisis descriptivo / queremos pasar a predictivo]
- Principal problema de talento que queremos predecir o entender: [el churn de empleados / el desempeño futuro / la efectividad del liderazgo / las necesidades de talento en los próximos dos o tres años]

Con ese contexto, dame:

1. EL MODELO PREDICTIVO DE FUGA DE TALENTO
El modelo de predicción de churn de empleados es el caso de uso de people analytics con mayor ROI demostrado. Dame el framework completo:
- Los datos que el modelo necesita: las features de RRHH con mayor poder predictivo del churn (tiempo en el rol, número de cambios de manager, variación de desempeño, distancia del salario al mercado, antigüedad, participación en programas de desarrollo, puntaje en encuestas de compromiso, actividad en LinkedIn)
- El algoritmo: por qué un modelo de random forest o gradient boosting suele superar a la regresión logística en este caso de uso y cómo elegir entre ellos
- El proceso de construcción: la preparación de datos, el feature engineering, el training, la validación cruzada y la evaluación con métricas apropiadas (AUC-ROC, precision-recall, el coste relativo de los falsos positivos y falsos negativos)
- Cómo interpretar el modelo: las técnicas de explicabilidad (SHAP values) que permiten entender qué factores están impulsando la predicción para cada empleado y cómo comunicarlo a los managers sin violar la privacidad

2. EL ANÁLISIS DE REDES ORGANIZACIONALES (ONA)
El análisis de redes organizacionales revela la estructura informal de la organización que el organigrama no muestra. Dame el framework:
- Qué es el ONA y qué preguntas puede responder: quiénes son los conectores informales de la organización, dónde están los silos de comunicación, quién está sobrecargado de conexiones y quién está aislado
- Los métodos de recogida de datos para el ONA: las encuestas de red (qué preguntas hacer), el análisis de metadatos de email y calendario (sin contenido, solo emisor/receptor/hora) y los datos de herramientas de colaboración
- Los algoritmos de análisis de redes: la centralidad de grado, la centralidad de intermediación y la detección de comunidades — qué revela cada métrica sobre la estructura organizacional
- Los casos de uso del ONA en RRHH: identificar a los empleados de alto impacto que no son visibles en el organigrama, detectar el riesgo de churn de conectores clave, optimizar los equipos de proyecto y gestionar la integración en fusiones y adquisiciones

3. MODELOS PREDICTIVOS DE DESEMPEÑO
¿Podemos predecir qué candidatos tendrán mejor desempeño o qué empleados actuales tienen mayor potencial? Dame el framework:
- Los datos que predicen el desempeño: las evaluaciones de selección, el historial de desempeño anterior, los datos de onboarding, la velocidad de aprendizaje en los primeros 90 días
- El modelo de predicción de éxito en el rol: cómo construir el modelo que predice el desempeño a 12 meses en base a los datos disponibles en el momento de la contratación o de la promoción
- Los sesgos en los modelos de desempeño: cómo detectar y mitigar el sesgo racial, de género o de edad en los modelos de people analytics — el imperativo ético y legal
- La validación predictiva: cómo medir si el modelo está prediciendo correctamente y con qué frecuencia debe revisarse

4. WORKFORCE PLANNING CUANTITATIVO
¿Cómo anticipar las necesidades de talento de la organización con modelos cuantitativos? Dame el framework:
- Los modelos de proyección de plantilla: el modelo de stock y flujo que proyecta la plantilla futura en base a las tasas históricas de contratación, promoción, rotación y jubilación
- El análisis de gaps: cómo identificar las brechas entre la plantilla proyectada y la plantilla necesaria para ejecutar la estrategia de negocio
- El modelo de skills-based workforce planning: cómo pasar de planificación por roles a planificación por competencias, y cómo modelar la evolución de las necesidades de skills en función de la estrategia tecnológica y de negocio
- Los escenarios de planificación: cómo construir escenarios de workforce bajo diferentes hipótesis de crecimiento, automatización o transformación del modelo de negocio

5. EL ANÁLISIS DE EQUIDAD Y COMPENSACIÓN
People analytics también sirve para detectar inequidades salariales y de progresión. Dame el framework:
- El análisis de equidad salarial: el modelo de regresión que controla por los factores legítimos (rol, nivel, experiencia, desempeño) y detecta las diferencias salariales no explicadas por género, etnia u otras características protegidas
- Cómo comunicar los resultados del análisis de equidad: el informe que la dirección y el comité de diversidad pueden entender y sobre el que pueden actuar
- El análisis de equidad en la progresión: cómo detectar si determinados grupos tienen menores tasas de promoción o mayores tasas de salida en ciertos stages de la carrera
- Los requisitos legales: qué datos debo tener para cumplir con los requisitos de reporting de equidad salarial en diferentes jurisdicciones

6. LA INFRAESTRUCTURA DE DATOS PARA PEOPLE ANALYTICS AVANZADO
¿Qué infraestructura de datos necesita un equipo de RRHH que quiere hacer people analytics avanzado? Dame el diseño:
- El HRIS como fuente de datos: qué datos del HRIS son los más valiosos para el analytics y cómo asegurar su calidad
- La integración de fuentes de datos: cómo conectar el HRIS con los datos de desempeño, las encuestas, los datos de calendario y colaboración y los datos de nómina de forma segura
- Las herramientas de people analytics: las opciones del mercado desde las integradas en el HRIS (Workday People Analytics, SAP SuccessFactors Workforce Analytics) hasta las herramientas especializadas (Visier, Orgvue, Crunchr)
- La gobernanza de datos: los principios de privacidad, el consentimiento de los empleados y los límites éticos del people analytics

7. ÉTICA Y GOBIERNO DEL PEOPLE ANALYTICS
¿Cuáles son los límites éticos y legales del people analytics avanzado? Dame el framework de gobernanza:
- Los principios de uso ético de los datos de empleados: minimización de datos, proporcionalidad del objetivo, transparencia con los empleados y limitación del uso
- Las implicaciones del RGPD y de la normativa laboral: qué puedo y qué no puedo hacer con los datos de los empleados en Europa y en otros mercados
- Cómo comunicar a los empleados qué datos se recogen y para qué: el equilibrio entre la transparencia y la ansiedad que genera la percepción de vigilancia
- El comité de ética de people analytics: por qué las organizaciones más avanzadas tienen un proceso de revisión ética para los nuevos proyectos de people analytics
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir capacidades de people analytics avanzado con modelos predictivos para mejorar las decisiones de talento en la organización.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Modelos cuantitativos de riesgo financiero',
                'description'       => 'El framework cuantitativo para la gestión del riesgo financiero: el Value at Risk (VaR), los modelos de stress testing, el riesgo de crédito y las técnicas de cobertura de riesgo que los departamentos de tesorería y riesgo de las instituciones financieras aplican.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en riesgo financiero cuantitativo con experiencia en banca, gestión de activos y tesorería corporativa. Necesito que me ayudes a entender y aplicar los modelos cuantitativos de riesgo financiero para gestionar mejor la exposición al riesgo de mi organización.

Mi contexto:
- Tipo de organización: [banco / gestora de activos / empresa corporativa con exposición a riesgo de mercado / aseguradora / family office]
- Tipos de riesgo que necesito gestionar: [riesgo de mercado — tipo de interés, tipo de cambio, renta variable — / riesgo de crédito / riesgo de liquidez / riesgo operacional / combinación]
- Nivel técnico del equipo: [finanzas con conocimiento estadístico básico / equipo con experiencia en modelos cuantitativos / queremos entender los modelos que usa el equipo de riesgo]
- Normativa aplicable: [Basilea III/IV si eres banco / Solvencia II si eres aseguradora / no aplica si eres corporativo]
- Principal problema de gestión del riesgo: [no tenemos modelos formales / los modelos que tenemos no capturan las situaciones de estrés / necesitamos cumplir con los requerimientos regulatorios / queremos mejorar la eficiencia del capital]

Con ese contexto, dame:

1. EL VALUE AT RISK (VaR): FUNDAMENTOS Y LIMITACIONES
El VaR es la métrica de riesgo de mercado más usada. Dame el framework completo:
- Qué mide el VaR: la pérdida máxima esperada con un nivel de confianza dado (99%) en un horizonte temporal determinado (1 día, 10 días) y cómo interpretarlo correctamente
- Los tres métodos de cálculo del VaR: el método paramétrico (varianza-covarianza), la simulación histórica y la simulación de Monte Carlo — las ventajas y limitaciones de cada uno y cuándo usar cada método
- La implementación del VaR: las decisiones de modelización (ventana histórica, horizonte temporal, nivel de confianza) y cómo afectan al resultado
- Las limitaciones del VaR: por qué el VaR no dice nada sobre las pérdidas más allá del percentil elegido (el "tail risk"), el problema de la normalidad asumida y la crisis de 2008 como ejemplo de sus fallos

2. EL EXPECTED SHORTFALL Y LAS MÉTRICAS ALTERNATIVAS
¿Qué alternativas al VaR capturan mejor el riesgo de cola? Dame el framework:
- El Expected Shortfall (ES) o Conditional VaR: qué mide (la pérdida media en los escenarios peores del x%), por qué es superior al VaR para capturar el riesgo de cola y por qué Basilea IV lo ha adoptado como la métrica de referencia
- El Stressed VaR y el Stressed ES: cómo recalibrar las métricas usando un período de estrés histórico en lugar del histórico reciente
- Las métricas de riesgo de cola: el CVaR, el Extreme Value Theory (EVT) para modelar las distribuciones de colas pesadas
- La comparación de portafolios con métricas de riesgo: cómo usar el VaR y el ES para comparar el perfil de riesgo de diferentes portafolios o estrategias

3. STRESS TESTING Y ESCENARIOS ADVERSOS
El stress testing es la metodología que evalúa el impacto de situaciones extremas. Dame el framework:
- La diferencia entre stress testing y VaR: por qué el stress testing complementa al VaR en lugar de sustituirlo
- Los tipos de escenarios de stress: el escenario histórico (2008, COVID, 2022 de tipos), el escenario hipotético (guerra, pandemia, crisis energética) y el escenario inverso (reverse stress test)
- El proceso de construcción de escenarios: cómo definir los shocks de los factores de riesgo, cómo propagarlos a través del portafolio y cómo calcular el impacto en los estados financieros
- El stress testing regulatorio: los escenarios del BCE y la EBA para los bancos europeos, cómo funciona el proceso y qué lecciones son aplicables fuera del entorno bancario

4. MODELOS DE RIESGO DE CRÉDITO
¿Cómo modelar la probabilidad de impago y la pérdida esperada? Dame el framework de riesgo de crédito cuantitativo:
- Los componentes de la pérdida esperada: PD (Probability of Default), LGD (Loss Given Default) y EAD (Exposure at Default) — qué mide cada uno y cómo se estiman
- Los modelos de scoring de crédito: la regresión logística, los árboles de decisión y los modelos de machine learning para predecir el impago — los datos que necesito y cómo validar el modelo
- Las matrices de transición: cómo modelar la evolución del rating de la cartera a lo largo del tiempo y las implicaciones para el capital y las provisiones
- El riesgo de crédito en contexto regulatorio: los modelos IRB (Internal Ratings-Based) de Basilea y cómo las instituciones financieras usan sus modelos internos para calcular el capital regulatorio

5. GESTIÓN DEL RIESGO DE TIPO DE INTERÉS Y TIPO DE CAMBIO
Para empresas corporativas y tesorerías, el riesgo de tipo de interés y de tipo de cambio es el más relevante. Dame el framework:
- La sensibilidad al tipo de interés: la duración y la convexidad como medidas de sensibilidad al tipo de interés, cómo calcularlas y cómo usarlas para gestionar el riesgo de la cartera de deuda
- El riesgo de tipo de cambio: la exposición transaccional (flujos de caja en divisa extranjera), la exposición traslacional (balance en divisa extranjera) y la exposición económica (impacto del tipo de cambio en la posición competitiva)
- Las estrategias de cobertura: los instrumentos de cobertura (forwards, opciones, swaps) y cómo diseñar la política de cobertura óptima para una empresa corporativa
- La medición de la efectividad de la cobertura: cómo evaluar si la estrategia de cobertura está reduciendo el riesgo de la forma esperada

6. GESTIÓN DEL RIESGO DE LIQUIDEZ
El riesgo de liquidez fue el detonante de la crisis de 2008. Dame el framework de gestión de liquidez:
- Los indicadores de riesgo de liquidez: el Liquidity Coverage Ratio (LCR), el Net Stable Funding Ratio (NSFR), el colchón de liquidez y los indicadores de liquidez de mercado
- El análisis de los flujos de caja bajo estrés: cómo proyectar los flujos de caja en escenarios adversos y cuánto colchón de liquidez es necesario
- El plan de contingencia de liquidez: qué debe incluir el plan de liquidez de emergencia y cómo testarlo
- La gestión de la liquidez intradía: los desafíos específicos de la gestión de la liquidez en tiempo real para instituciones financieras

7. IMPLEMENTACIÓN Y GOBERNANZA DEL RIESGO CUANTITATIVO
¿Cómo implementar los modelos cuantitativos de riesgo en la organización y gobernarlo correctamente? Dame el framework:
- El modelo de validación independiente: por qué los modelos de riesgo deben ser validados por un equipo independiente del que los construye y qué incluye el proceso de validación
- El ciclo de vida del modelo: el desarrollo, la validación, la aprobación, el monitoreo y la revisión periódica del modelo
- El modelo risk: el riesgo de que el propio modelo sea incorrecto y cómo gestionarlo mediante pruebas de backtesting y benchmarking
- La integración del riesgo cuantitativo en las decisiones: cómo hacer que las métricas de riesgo influyan realmente en las decisiones de inversión, de crédito y de gestión de balance
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Entender y aplicar los modelos cuantitativos de riesgo financiero para gestionar la exposición al riesgo de mercado, crédito y liquidez.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Análisis cuantitativo en litigios y arbitrajes',
                'description'       => 'La cuantificación rigurosa en el contexto jurídico: los métodos de cálculo del daño económico aceptados por los tribunales, el análisis estadístico de precedentes y los modelos de valoración de empresas que los peritos económicos usan en disputas de alto valor.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en análisis económico aplicado a litigios y arbitrajes internacionales, con experiencia en la cuantificación de daños, la valoración de empresas en contexto contencioso y la presentación de análisis cuantitativos ante tribunales y paneles arbitrales. Necesito que me ayudes a entender y aplicar los métodos de análisis cuantitativo en el contexto jurídico.

Mi contexto:
- Tipo de disputa: [litigio comercial / arbitraje de inversión / arbitraje de construcción / disputa de competencia / disputas de M&A / disputa laboral de alto valor]
- Rol en el proceso: [abogado que necesita cuantificar daños para su cliente / perito económico / abogado que necesita contraargumentar un informe pericial / cliente que necesita entender el análisis]
- Jurisdicción: [española / europea / internacional — CISG, arbitraje ICC, ICSID, etc.]
- Principal necesidad de análisis: [cuantificar el daño económico / valorar una empresa o activo en disputa / analizar la causalidad económica / contraanalizar el informe de la contraparte]

Con ese contexto, dame:

1. LOS ESTÁNDARES DE CUANTIFICACIÓN DE DAÑOS ACEPTADOS POR LOS TRIBUNALES
¿Qué métodos de cuantificación de daños son aceptados por los tribunales españoles, europeos y los principales foros de arbitraje internacional? Dame el mapa:
- El estándar de certeza razonable: qué nivel de prueba del daño exige cada foro y cómo afecta a la metodología de cuantificación
- Los métodos generalmente aceptados para diferentes tipos de daño: el lucro cesante (beneficio dejado de obtener), el daño emergente (pérdida real sufrida), el daño moral con componente económico y los daños en contratos de construcción o de suministro
- El estándar del "but for world": el contrafactual jurídico — cómo calcular qué habría ocurrido si no hubiera existido el incumplimiento, el ilícito o la expropiación
- Las diferencias entre las jurisdicciones: cómo difieren los estándares de cuantificación entre el derecho español, el derecho inglés, el derecho americano y los principales sistemas de arbitraje internacional

2. MÉTODOS DE VALORACIÓN DE EMPRESAS EN DISPUTAS
La valoración de empresas en contexto contencioso tiene peculiaridades que no existen en una valoración ordinaria. Dame el framework:
- El DCF (Discounted Cash Flow) en litigios: las decisiones de modelización más controvertidas (tasa de descuento, tasa de crecimiento terminal, proyecciones de negocio) y cómo se justifican ante un tribunal
- El método de comparables de mercado: cómo seleccionar los comparables apropiados en contexto contencioso y cómo manejar la falta de empresas comparables
- El valor de liquidación vs el valor de empresa en funcionamiento: cuándo aplica cada uno y cómo los tribunales deciden entre ellos
- Las disputas de daños por incumplimiento de M&A: los métodos para calcular la diferencia entre el valor real de la empresa y el precio pagado cuando el vendedor ocultó información material

3. EL INFORME PERICIAL ECONÓMICO: ESTRUCTURA Y ESTÁNDARES
¿Qué debe contener un informe pericial económico para ser creíble y útil en un proceso judicial o arbitral? Dame la estructura:
- Los elementos imprescindibles: la descripción de la asignación y el alcance del trabajo, las hipótesis adoptadas, los datos utilizados y su fuente, la metodología y su justificación, los cálculos y los resultados, y las limitaciones del análisis
- Los estándares internacionales del informe pericial: los IBA Guidelines on Conflicts of Interest, los estándares del CIArb y el código de conducta del perito bajo la Ley de Enjuiciamiento Civil española
- La independencia del perito: cómo mantener la apariencia de independencia cuando eres el perito del demandante o del demandado y por qué esto importa para la credibilidad del informe
- El lenguaje del informe pericial: cómo escribir para un tribunal que puede no tener formación económica — la claridad vs la precisión técnica

4. ANÁLISIS ESTADÍSTICO DE PRECEDENTES
¿Cómo usar el análisis estadístico de precedentes jurídicos para fortalecer los argumentos cuantitativos? Dame el framework:
- El análisis de bases de datos de laudos arbitrales y sentencias: cómo usar bases de datos como Westlaw, LexisNexis, ICSID Case Database o Global Arbitration Review para analizar tendencias en la cuantificación de daños
- La estadística descriptiva de precedentes: cómo presentar un análisis estadístico de los daños otorgados en casos similares que apoye o contradiga la cuantificación propia
- Los estudios de eventos en litigios de competencia y valores: cómo usar el análisis de series temporales para aislar el impacto de un comportamiento anticompetitivo o de información privilegiada en el precio de un valor
- Las limitaciones del análisis de precedentes cuantitativos: por qué cada caso es diferente y cómo presentar el análisis estadístico sin que el tribunal lo descarte por ser inaplicable al caso concreto

5. CONTRAANÁLISIS: ATACAR EL INFORME PERICIAL DE LA CONTRAPARTE
¿Cómo identificar los errores y debilidades del informe pericial económico de la contraparte? Dame el framework de contraanálisis:
- La revisión de los inputs: cómo verificar si los datos utilizados son correctos, completos y no sesgados — los errores de datos son los más fáciles de encontrar y los más dañinos para la credibilidad del perito
- La revisión de la metodología: cómo argumentar que la metodología elegida no es la más apropiada o que ha sido aplicada incorrectamente
- La revisión de los supuestos: cómo identificar y cuantificar el impacto de los supuestos favorables que inflan o deflactan el daño
- La deposición del perito contrario: las preguntas que un abogado debe hacer al perito contrario para exponer las debilidades del informe en el interrogatorio cruzado

6. ANÁLISIS DE CAUSALIDAD ECONÓMICA
Probar que el incumplimiento causó el daño es tan importante como cuantificarlo. Dame el framework de análisis de causalidad económica:
- Los tests de causalidad aceptados en el contexto jurídico: la causalidad fáctica (el "but for" test), la causalidad adecuada y la proximidad del daño
- Los métodos econométricos para demostrar causalidad: las diferencias en diferencias, la regresión discontinua y los experimentos naturales aplicados a litigios
- El problema de los factores concurrentes: cómo demostrar que el daño fue causado por el incumplimiento y no por factores externos (crisis económica, errores de gestión propios)
- El análisis de la mitigación: cómo evaluar si el demandante tomó las medidas razonables para mitigar el daño y cuál es el impacto de no haberlas tomado

7. EL PROCESO DE TRABAJO CON EL PERITO ECONÓMICO
¿Cómo debe trabajar el abogado con el perito económico para producir el mejor análisis posible? Dame el framework de colaboración:
- La asignación al perito: qué instrucciones dar, qué hipótesis fijar, qué documentos proporcionar y qué preguntas hacer en la carta de encargo
- El papel del abogado en la revisión del informe: qué puede revisar y sugerir y qué comprometería la independencia del perito
- La preparación del perito para el interrogatorio: cómo preparar al perito para las preguntas difíciles del abogado contrario sin que la preparación comprometa la credibilidad
- El doble perito: cuándo tiene sentido nombrar un perito técnico y un perito económico y cómo coordinar sus informes
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Entender y aplicar los métodos de análisis cuantitativo en litigios y arbitrajes: cuantificación de daños, valoración de empresas y peritaje económico.',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Modelos predictivos de churn: machine learning para la retención',
                'description'       => 'Construye el modelo de machine learning que predice cuándo va a cancelar un cliente: las features, los algoritmos (logistic regression, random forest, gradient boosting) y el proceso de deploy e integración con la plataforma de CS que hace que el modelo sea útil.',
                'prompt_content'    => <<<'PROMPT'
Eres un experto en machine learning aplicado al Customer Success y en la construcción de modelos predictivos de churn. Necesito que me ayudes a construir el modelo que predice cuándo un cliente va a cancelar, integrarlo en los procesos del equipo de CS y hacerlo realmente útil para tomar decisiones de retención.

Mi contexto:
- Tipo de producto o servicio: [SaaS B2B / plataforma / servicio recurrente B2C / otro]
- Tamaño de la cartera de clientes: [número de clientes activos — necesario para evaluar la viabilidad del modelo]
- Datos disponibles: [datos de uso del producto, datos de CRM, datos de soporte, datos de encuestas, histórico de contratos]
- Tasa de churn actual: [mensual o anual — necesario para entender la proporción de clase positiva]
- Stack tecnológico de datos: [data warehouse en BigQuery/Snowflake/Redshift, CRM en Salesforce/HubSpot, plataforma de CS en Gainsight/ChurnZero/otra]
- Nivel del equipo: [tenemos data scientists / tenemos ingenieros con conocimiento de ML / necesitamos una guía que cualquier analista pueda seguir]

Con ese contexto, dame:

1. LOS DATOS: LA FUNDACIÓN DEL MODELO
¿Qué datos necesito para construir un modelo de churn de alta calidad? Dame el inventario de features por categoría:

Features de uso del producto: frecuencia de login, número de features activas, volumen de uso de las features clave, tendencia del uso en los últimos 30 y 90 días, tiempo desde el último uso, ratio de usuarios activos sobre usuarios licenciados.

Features de relación: NPS, CSAT, número de tickets de soporte abiertos y sin resolver, tiempo medio de resolución, número de escalaciones, última fecha de contacto con el CSM.

Features de contrato: tiempo restante hasta la renovación, tamaño del contrato, tipo de plan, histórico de cambios de plan (upgrades o downgrades), histórico de pagos (retrasos, disputas).

Features del cliente: tamaño de la empresa, sector, ubicación geográfica, fuente de adquisición, tiempo como cliente, número de expansiones previas.

Dame además las señales de que los datos no están listos para el modelo y cómo prepararlos.

2. PREPARACIÓN DE LOS DATOS Y FEATURE ENGINEERING
El modelo es tan bueno como los datos que lo alimentan. Dame el proceso de preparación:
- La definición del label: cómo definir el churn como variable objetivo — la ventana de observación (qué período de datos uso para predecir) y la ventana de etiqueta (cuánto tiempo en el futuro quiero predecir)
- El manejo de datos faltantes: las estrategias de imputación para cada tipo de feature y cuándo un dato faltante es en sí mismo una señal (el cliente que no hace login nunca tiene datos de uso faltantes, pero eso es la señal)
- El feature engineering de tendencias: cómo construir las features de tendencia (caída del uso en los últimos 30 días respecto a los 30 anteriores) que suelen ser más predictivas que los valores absolutos
- El problema del desbalanceo de clases: por qué en un modelo de churn la clase positiva (los que churnan) es minoritaria y cómo manejarlo — oversampling (SMOTE), undersampling, class weights, o cambiar la función de evaluación

3. LOS ALGORITMOS: CUÁL USAR Y CUÁNDO
¿Qué modelos de machine learning funcionan mejor para predecir el churn? Dame el análisis comparativo:
- Regresión logística: las ventajas (interpretabilidad, rapidez, funciona bien con pocos datos) y las limitaciones (no captura relaciones no lineales). Cuándo elegirla como punto de partida
- Random Forest: cómo combina múltiples árboles de decisión, por qué maneja bien las interacciones entre features y los valores atípicos, y cuándo supera a la regresión logística
- Gradient Boosting (XGBoost, LightGBM, CatBoost): por qué suele dar el mejor rendimiento en tabular data de CS, las diferencias entre las implementaciones y los hiperparámetros más importantes que ajustar
- El modelo de supervivencia (Kaplan-Meier, Cox Proportional Hazards): cuándo tiene sentido modelar el tiempo hasta el churn en lugar de predecir si el churn ocurrirá en una ventana temporal fija

4. ENTRENAMIENTO, VALIDACIÓN Y EVALUACIÓN
¿Cómo construir el modelo correctamente para que el rendimiento que reportamos sea el rendimiento real? Dame el framework:
- El split de datos: la separación temporal — por qué no debo hacer un split aleatorio en datos de series temporales (el data leakage que produce modelos artificialmente buenos)
- Las métricas de evaluación para churn: por qué el accuracy es la métrica incorrecta para un modelo con clases desbalanceadas y qué usar en su lugar — AUC-ROC, AUC-PR, F1-score, el análisis del coste de los falsos positivos (alertas innecesarias que queman el tiempo del CSM) vs los falsos negativos (churns que no detectamos)
- La curva de lift y la curva de ganancias: cómo evaluar si el modelo es útil para priorizar la intervención del equipo de CS con recursos limitados
- La validación cruzada temporal: cómo hacer cross-validation respetando el orden temporal de los datos

5. INTERPRETABILIDAD: POR QUÉ EL CLIENTE X ESTÁ EN RIESGO
Un modelo que produce un score sin explicación es difícil de usar en la práctica. Dame el framework de interpretabilidad:
- Los SHAP values: qué son, cómo calcularlos para cualquier modelo y cómo usarlos para explicar por qué un cliente específico tiene un riesgo alto de churn
- La importancia de las features: cómo identificar las features más predictivas del modelo y qué nos dicen sobre los drivers del churn en nuestra base de clientes
- La visualización para el equipo de CS: cómo mostrar en la interfaz del CSM las tres o cuatro razones principales del riesgo de churn de un cliente específico de forma que el CSM pueda actuar
- Los límites de la explicabilidad: qué no podemos explicar y cómo comunicarlo honestamente

6. DEPLOY E INTEGRACIÓN EN EL WORKFLOW DE CS
El mejor modelo es inútil si no está integrado en el proceso del equipo de CS. Dame el framework de implementación:
- La arquitectura de deployment: cómo construir el pipeline de datos que alimenta el modelo de forma periódica (diaria o semanal), calcula los scores y los envía al CRM o a la plataforma de CS
- La integración con el CRM y la plataforma de CS: cómo mostrar el score de riesgo en la vista del cliente en Gainsight, ChurnZero o HubSpot para que el CSM lo vea en su workflow natural
- La automatización de alertas: cómo disparar automáticamente un task o un playbook cuando un cliente cruza el umbral de riesgo
- El ciclo de feedback: cómo capturar el resultado de la intervención del CSM para usarlo en el reentrenamiento del modelo

7. MONITOREO Y MANTENIMIENTO DEL MODELO
Un modelo en producción se degrada con el tiempo. Dame el framework de mantenimiento:
- El concept drift: por qué el comportamiento de los clientes cambia (un competidor nuevo, una crisis económica, un cambio de producto) y cómo detectar cuándo el modelo ha dejado de ser preciso
- Las métricas de monitoreo en producción: las alertas que deben dispararse cuando el rendimiento del modelo cae por debajo del umbral
- El proceso de reentrenamiento: con qué frecuencia reentrenar el modelo y cuándo vale la pena hacer un rebuild completo vs simplemente actualizar los datos de entrenamiento
- La documentación del modelo: el model card que documenta el propósito, el rendimiento, las limitaciones y el uso esperado del modelo — imprescindible para que el equipo pueda mantenerlo en el tiempo
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Construir el modelo predictivo de churn con machine learning e integrarlo en los procesos del equipo de Customer Success.',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Analítica avanzada para el negocio freelance',
                'description'       => 'El freelance que usa datos para tomar mejores decisiones de negocio: los modelos de previsión de ingresos, el análisis de rentabilidad por tipo de proyecto y las técnicas cuantitativas que convierten la gestión del negocio freelance en un proceso basado en datos.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de negocio especializado en profesionales independientes con experiencia en la aplicación de analytics al negocio freelance. Necesito que me ayudes a construir el sistema de métricas y análisis que me permita entender mi negocio en profundidad y tomar mejores decisiones de forma continua.

Mi contexto:
- Tipo de servicio freelance: [diseño, desarrollo, copywriting, consultoría, marketing, formación, fotografía, etc.]
- Antigüedad del negocio freelance: [meses o años — necesario para evaluar qué datos históricos tienes]
- Herramientas actuales de gestión: [cómo trackeas proyectos, ingresos, tiempo y gastos hoy]
- Volumen aproximado de proyectos al año: [número de proyectos y rango de facturación anual]
- Principal problema de gestión que quieres resolver con datos: [no sé en qué tipos de proyecto gano más dinero / no puedo prever cuánto voy a ingresar el mes que viene / no sé si debo subir los precios / no sé qué clientes o proyectos debo priorizar]

Con ese contexto, dame:

1. EL SISTEMA DE MÉTRICAS DEL NEGOCIO FREELANCE
¿Qué métricas debe monitorizar un freelance para entender la salud de su negocio? Dame el cuadro de mando:
- Métricas de ingresos: facturación mensual y anual, precio medio por proyecto o por día, MRR si tienes retainers, tasa de crecimiento de ingresos
- Métricas de rentabilidad: margen por proyecto (ingresos menos el tiempo invertido valorado a tu tarifa objetivo menos los costes directos), rentabilidad por tipo de proyecto y por tipo de cliente
- Métricas de pipeline: número de propuestas enviadas, tasa de conversión de propuesta a proyecto, tiempo medio de cierre, valor del pipeline activo
- Métricas de capacidad: utilización (porcentaje del tiempo disponible que está facturado), tiempo de no facturación (administración, marketing, formación, descanso) y cómo cada una afecta a los ingresos reales

2. ANÁLISIS DE RENTABILIDAD POR TIPO DE PROYECTO
No todos los proyectos son igual de rentables. Dame el framework de análisis:
- Cómo calcular la rentabilidad real por proyecto: el registro del tiempo real vs el estimado, el desfase y su impacto en el margen
- La segmentación de proyectos por rentabilidad: cómo clasificar los tipos de proyecto por margen real y encontrar los que te hacen ganar más por hora real invertida vs los que parecen grandes pero consumen más de lo que producen
- El análisis por cliente: qué clientes tienen mayor LTV, cuáles tienen mayor margen, cuáles generan más referencias y cuáles son costosos en tiempo de gestión
- La matrix cliente/proyecto: cómo combinar el análisis de rentabilidad por cliente y por tipo de proyecto para decidir en qué tipos de trabajo y en qué tipos de cliente debes enfocarte

3. PREVISIÓN DE INGRESOS: MÁS ALLÁ DE LA INTUICIÓN
¿Cómo saber con más certeza cuánto vas a ingresar en los próximos 90 días? Dame el modelo de previsión:
- El modelo de pipeline ponderado: cómo asignar probabilidades de cierre a cada propuesta activa y calcular el ingreso esperado ponderado de los próximos meses
- La estacionalidad del negocio freelance: cómo identificar los meses de mayor y menor demanda en tu especialidad y cómo usar ese patrón para anticipar los ciclos
- El forecast de retainers: cómo construir el forecast de los ingresos recurrentes por retainer incluyendo la probabilidad de renovación de cada contrato
- El modelo de ingresos mínimos: cómo calcular el nivel de pipeline que necesitas tener hoy para garantizar los ingresos mínimos en los próximos tres meses — la métrica que decide cuándo debes activar el marketing personal

4. ANÁLISIS DE PRECIOS Y TARIFA ÓPTIMA
¿Cuál es la tarifa correcta para maximizar los ingresos sin perder clientes valiosos? Dame el análisis:
- El análisis histórico de conversión por precio: si tienes suficientes datos, cómo relacionar el precio de las propuestas con la tasa de aceptación para encontrar la zona de precio óptima
- El análisis del tiempo real vs la estimación: cuántas veces has cobrado por debajo del trabajo real realizado y cuánto dinero te ha costado esa diferencia acumulada
- La calibración del precio por tipo de proyecto: cómo ajustar la tarifa o el precio fijo según el tipo de proyecto para que la rentabilidad por hora sea consistente
- Cuándo subir los precios: las señales de que estás cobrando por debajo del mercado (tasa de conversión demasiado alta, clientes que aceptan sin negociar, sensación de estar siempre ocupado pero sin poder ahorrar)

5. GESTIÓN DEL TIEMPO Y PRODUCTIVIDAD FREELANCE
El tiempo es el activo más escaso del freelance. Dame el framework de análisis de uso del tiempo:
- Cómo trackear el tiempo de forma que los datos sean útiles: las categorías que deben existir en el time tracking (trabajo facturable por proyecto, administración, marketing y ventas, formación, inactividad)
- El análisis de la tasa de utilización: qué porcentaje del tiempo disponible debería estar facturado para alcanzar el objetivo de ingresos, y la trampa de la utilización al 100% que deja sin tiempo para crecer
- El análisis de los ladrones de tiempo: los tipos de actividad que consumen tiempo sin generar ingresos ni crecimiento, y cómo cuantificar su coste de oportunidad
- El precio del tiempo no facturado: cómo calcular cuánto debe costar la hora facturable para cubrir también las horas no facturables — el error de confundir la tarifa por hora facturable con el sueldo real por hora trabajada

6. AUTOMATIZACIÓN DE LA ANALÍTICA FREELANCE
¿Cómo construir el sistema de seguimiento sin que se convierta en un trabajo adicional? Dame el diseño del sistema:
- La hoja de cálculo mínima viable: las columnas imprescindibles para tener los datos que alimentan los análisis anteriores sin pasar horas gestionando una base de datos
- Las herramientas de gestión freelance con analítica integrada: Harvest, Toggl, FreshBooks, Honeybook, Bonsai — las que tienen mejores capacidades analíticas para el tipo de análisis que necesitas
- La automatización de los informes mensuales: cómo crear el dashboard mensual que te da en 10 minutos la visión completa del estado del negocio
- La revisión mensual del negocio: el ritual de cierre del mes con las cinco preguntas que debes responderte con datos antes de abrir el mes siguiente

7. DECISIONES DE NEGOCIO BASADAS EN LOS DATOS
¿Cómo uso el análisis de datos para tomar las decisiones más importantes del negocio freelance? Dame el framework de decisión:
- La decisión de aceptar o rechazar un proyecto: cómo usar los datos de rentabilidad histórica y de pipeline para decidir si merece la pena aceptar un proyecto por debajo de tu precio ideal o si puedes permitirte rechazarlo
- La decisión de subir los precios: el análisis que justifica cuándo y cuánto subir
- La decisión de especializarse o diversificar: cómo usar los datos de rentabilidad por tipo de proyecto para decidir en qué nichos profundizar
- La decisión de delegar o subcontratar: cuándo los datos de utilización y rentabilidad indican que tiene sentido pagar a alguien para hacer el trabajo que tú haces para poder hacer más del trabajo que mejor te pagan
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Construir el sistema de métricas y análisis que permite al freelance tomar mejores decisiones de negocio basadas en datos.',
                'vote_score'        => 42,
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
