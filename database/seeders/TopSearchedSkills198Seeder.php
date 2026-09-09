<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills198Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estadística básica para marketers',
                'description'      => 'Entiende los conceptos estadísticos que necesitas para interpretar tus campañas: la significancia estadística, los intervalos de confianza y por qué no todos los aumentos en métricas son reales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un analista de marketing con sólida base estadística y experiencia explicando conceptos cuantitativos a profesionales de marketing que no tienen formación matemática formal. Voy a explorar contigo los conceptos estadísticos que todo marketer necesita para interpretar datos sin engañarse a sí mismo.

Mi contexto: [describe tu nivel actual con los datos: si trabajas con herramientas de analítica web, si haces tests A/B, el tipo de métricas que gestionas habitualmente y los conceptos estadísticos que más te confunden o que sabes que no entiendes bien]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Por qué la intuición falla con los datos de marketing**
El cerebro humano es muy malo para razonar sobre probabilidades y patrones en datos ruidosos. Explícame los sesgos cognitivos que hacen que los marketers tomen decisiones incorrectas basadas en datos: el sesgo de confirmación (ver en los datos lo que queremos ver), la ilusión de causalidad (confundir correlación con causa), la tendencia a sacar conclusiones de muestras demasiado pequeñas y el error de interpretar la variación aleatoria normal como señal de un cambio real. Casos concretos de decisiones de marketing basadas en datos mal interpretados.

**2. La media, la mediana y los percentiles: más allá del promedio**
La media es la métrica más usada y la más mal interpretada en marketing. Explícame cuándo la media es engañosa y qué alternativas usar: la diferencia entre media y mediana (y por qué para métricas de ingresos, tiempo en página o LTV la mediana suele ser más útil), el concepto de distribución (normal, sesgada, bimodal) y lo que nos dice sobre el comportamiento de los usuarios, y los percentiles como herramienta para entender la distribución sin asumir que todos los usuarios se comportan como el usuario promedio.

Incluye ejemplos de métricas de marketing donde la media engaña y la mediana o los percentiles revelan la realidad.

**3. Significancia estadística: cuándo creer en los resultados**
La significancia estadística es el concepto que los marketers necesitan para dejar de tomar decisiones de los tests A/B demasiado pronto o demasiado tarde. Explícame la significancia estadística desde cero, sin fórmulas pero con intuición real: qué significa que un resultado tiene un p-valor de 0.05 (y qué no significa), el concepto de hipótesis nula y por qué importa, el error de Tipo I (creer que hay diferencia cuando no la hay) y el error de Tipo II (no detectar una diferencia que sí existe), y por qué el 95% de confianza que usan la mayoría de herramientas de A/B testing no es tan seguro como parece.

**4. El tamaño de muestra: cuántos datos necesitas**
Uno de los errores más comunes en marketing es sacar conclusiones de muestras demasiado pequeñas. Explícame el concepto de tamaño de muestra y su importancia práctica: por qué los resultados de tests con pocos usuarios o pocas conversiones no son confiables (la varianza de estimación), cómo calcular el tamaño de muestra necesario para detectar un efecto real en un test A/B (con las herramientas que lo hacen automáticamente), el concepto de poder estadístico (la probabilidad de detectar un efecto si existe) y las consecuencias prácticas de hacer tests con muestras insuficientes.

**5. Correlación y causalidad: el error más caro del marketing**
Confundir correlación con causalidad es el error estadístico más caro que puede cometer un marketer. Explícame la diferencia con ejemplos del mundo del marketing: los casos clásicos de correlaciones espurias que parecen relaciones causales, por qué los datos de analítica web y CRM están llenos de correlaciones que no son causalidades, los métodos para establecer causalidad cuando el experimento controlado no es posible (análisis de regresión con controles, diferencias en diferencias, variables instrumentales explicados con intuición) y por qué el attribution en marketing es un problema fundamentalmente causal que las herramientas actuales resuelven solo parcialmente.

**6. Los intervalos de confianza: la honestidad que los marketers necesitan**
Los intervalos de confianza son la herramienta más importante que los marketers nunca usan. Explícame qué son los intervalos de confianza y por qué deben reemplazar a los números puntuales en los reportes de marketing: la diferencia entre reportar "el CTR mejoró un 12%" y reportar "el CTR mejoró entre un 3% y un 21% con un 95% de confianza", cómo interpretar los intervalos de confianza en los resultados de tests A/B, por qué muchas diferencias que parecen significativas dejan de serlo cuando se consideran los intervalos de confianza y cómo presentar los resultados con intervalos de confianza sin confundir al stakeholder no estadístico.

Quiero que uses ejemplos del mundo real del marketing digital (conversiones, CTR, ROAS, LTV) para hacer los conceptos concretos y aplicables.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Interpretar los datos de marketing con rigor estadístico para tomar decisiones más fundamentadas',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Matemáticas para machine learning',
                'description'      => 'Los conceptos de álgebra lineal, cálculo y probabilidad que necesitas para entender (y no solo usar) los algoritmos de ML: lo esencial explicado con intuición visual y código, sin perder rigor.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un investigador de machine learning con habilidad para explicar conceptos matemáticos complejos con intuición geométrica y código, haciendo accesible la base matemática del ML a programadores que tienen experiencia práctica con las herramientas pero sienten que les falta el fundamento teórico. Voy a explorar contigo las matemáticas que necesito para entender el machine learning en profundidad.

Mi contexto: [describe tu situación: si ya usas scikit-learn, TensorFlow o PyTorch, los algoritmos que usas habitualmente, y los conceptos matemáticos específicos que sabes que no entiendes bien (matrices, derivadas, probabilidades, etc.)]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Álgebra lineal: la geometría detrás del ML**
El álgebra lineal es el lenguaje matemático del machine learning. Explícame los conceptos esenciales con intuición geométrica antes que con fórmulas: los vectores como puntos o direcciones en el espacio (y por qué un datapoint con 100 features es un punto en un espacio de 100 dimensiones), las matrices como transformaciones que rotan, escalan o proyectan vectores, la multiplicación de matrices como composición de transformaciones, los conceptos de rango, dependencia lineal y espacio nulo (con la intuición de qué información contiene una matriz) y la descomposición en valores singulares (SVD) como la operación que está detrás de la reducción de dimensionalidad y las recomendaciones.

Para cada concepto, dame el código Python que lo ilustra.

**2. Cálculo: cómo aprenden los modelos**
El descenso por gradiente es el motor de aprendizaje de casi todos los modelos modernos de ML, y para entenderlo necesitas entender las derivadas. Explícame el cálculo necesario para el ML desde la intuición: las derivadas como la tasa de cambio local de una función (la pendiente de la función en un punto), el gradiente como la generalización de la derivada a múltiples dimensiones (el vector que apunta en la dirección de máximo aumento de la función), el descenso por gradiente como el algoritmo que camina cuesta abajo en el paisaje de la función de pérdida, la regla de la cadena como el mecanismo del backpropagation y por qué la diferenciación automática (autograd) es uno de los inventos más importantes del ML moderno.

**3. Probabilidad y estadística: la incertidumbre en el ML**
El machine learning es fundamentalmente un problema de inferencia estadística. Explícame los conceptos de probabilidad que necesitas para entender los modelos de ML: la diferencia entre probabilidad frecuentista y bayesiana (y por qué importa para el ML), las distribuciones de probabilidad más importantes en ML (gaussiana, Bernoulli, categórica, Poisson) y su aplicación en los modelos, el concepto de verosimilitud (likelihood) y cómo los modelos se entrenan maximizando la verosimilitud de los datos, el teorema de Bayes y su rol en la clasificación bayesiana y en la inferencia variacional y la entropía como medida de incertidumbre que está detrás del árbol de decisión y la información mutua.

**4. La función de pérdida: qué aprende realmente el modelo**
La función de pérdida es el objetivo que el modelo minimiza durante el entrenamiento. Explícame las funciones de pérdida más importantes y su derivación matemática: el error cuadrático medio (MSE) para regresión y su relación con la distribución gaussiana del error, la entropía cruzada (cross-entropy) para clasificación y su derivación desde la verosimilitud, la pérdida de bisagra (hinge loss) de las SVM, la pérdida focal para problemas con clases desbalanceadas y por qué elegir la función de pérdida correcta es una decisión matemáticamente fundamentada, no arbitraria.

**5. La regularización: el balance entre ajuste y generalización**
La regularización es la técnica matemática que previene el sobreajuste. Explícame las formas de regularización más comunes y su fundamento matemático: la regularización L1 (Lasso) y L2 (Ridge) como penalizaciones a la magnitud de los pesos del modelo, la interpretación bayesiana de la regularización (como la imposición de un prior sobre los pesos), el dropout como forma de regularización en redes neuronales (con la interpretación de conjunto de modelos), el early stopping como forma implícita de regularización y los métodos de selección de hiperparámetros (validación cruzada) como la forma correcta de elegir el nivel de regularización.

**6. La geometría de los modelos de ML**
La intuición geométrica ayuda a entender por qué los modelos de ML funcionan o fallan. Explícame la geometría de los modelos más importantes: la regresión lineal como proyección de los datos sobre el subespacio de las features, la regresión logística como un hiperplano de decisión en el espacio de features, las redes neuronales como transformaciones sucesivas del espacio de entrada que hacen que los datos sean linealmente separables, los kernels de las SVM como transformaciones implícitas a espacios de alta dimensión y el t-SNE y UMAP como proyecciones no lineales que preservan la estructura local de los datos.

Quiero visualizaciones conceptuales y código Python que ilustre cada concepto, para que la matemática sea concreta y aplicable.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Entender la base matemática del machine learning para aplicar los algoritmos con mayor criterio',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Estadística para diseñadores',
                'description'      => 'Los conceptos cuantitativos que el diseñador necesita: cómo interpretar los resultados de tests A/B, entender las distribuciones de usuarios y hablar el idioma de los datos con el equipo de producto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un investigador UX con sólida base cuantitativa y experiencia ayudando a diseñadores a desarrollar la competencia estadística necesaria para trabajar con datos de usuario, interpretar tests A/B y colaborar de forma más efectiva con equipos de producto y analítica. Voy a explorar contigo los conceptos estadísticos que los diseñadores necesitan dominar.

Mi contexto: [describe tu nivel actual: si participas en tests A/B, qué herramientas de analítica usas, los tipos de decisiones de diseño que intentas fundamentar con datos y los conceptos estadísticos que te resultan más confusos]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Por qué los diseñadores necesitan estadística**
Durante décadas, el diseño se basó en el criterio experto y la intuición. Hoy, los diseñadores que trabajan en entornos de producto digital necesitan comprender los datos para tomar decisiones más informadas. Explícame por qué la estadística es una competencia relevante para el diseñador: la diferencia entre el research cualitativo (que el diseñador domina) y el cuantitativo (que complementa ese conocimiento), los errores de diseño costosos que una comprensión básica de los datos habría evitado y cómo los diseñadores con competencias cuantitativas tienen mayor influencia en los equipos de producto.

**2. Métricas de comportamiento del usuario: qué medir y cómo leerlo**
Las métricas de comportamiento del usuario son el lenguaje de la analítica de producto. Explícame las métricas más relevantes para el diseñador y cómo interpretarlas correctamente: la tasa de conversión y sus trampas (por qué optimizar la conversión en un paso puede dañar la experiencia general), el tiempo en pantalla y la tasa de rebote como indicadores de engagement (con las situaciones en que más no significa mejor), los mapas de calor y las grabaciones de sesión como herramientas de observación cuantitativa, los embudos de conversión como forma de identificar los puntos de fricción y el error de interpretar la métrica sin el contexto del flujo completo.

**3. El test A/B para diseñadores: cómo leer los resultados**
El test A/B es la herramienta más usada para validar decisiones de diseño de forma cuantitativa. Explícame lo que el diseñador necesita entender sobre los tests A/B: la diferencia entre el test A/B correcto (bien diseñado, con hipótesis clara, muestra suficiente, métricas correctas) y el test que produce resultados sin sentido, cómo leer los resultados de un test A/B sin caer en la trampa de la significancia estadística superficial (el p-valor no dice lo que crees que dice), la diferencia entre significancia estadística y significancia práctica (un resultado estadísticamente significativo puede ser un efecto demasiado pequeño para importar) y cuándo parar un test.

**4. Distribuciones de usuarios: no todos los usuarios son el usuario promedio**
La tendencia a diseñar para el usuario promedio es uno de los errores más frecuentes en diseño. Explícame cómo las distribuciones estadísticas revelan la diversidad de los usuarios: la diferencia entre la media y la mediana en el comportamiento de usuarios (y por qué para el diseño suele importar más la mediana o los percentiles), los histogramas como herramienta para ver la distribución real del comportamiento (que rara vez es una campana simétrica), la importancia de los usuarios en los extremos de la distribución (los usuarios principiantes y los usuarios expertos) y cómo los datos de distribución informan decisiones de diseño para usuarios con necesidades muy distintas.

**5. Correlación en los datos de usuario: qué relaciones son reales**
Los datos de analítica están llenos de correlaciones que parecen relaciones causales pero no lo son. Explícame cómo identificar y no sobreinterpretar las correlaciones en los datos de usuario: la definición visual de la correlación (el scatterplot como herramienta de exploración), los casos clásicos de correlaciones espurias en datos de producto (el feature que tiene alta correlación con la retención porque lo usan los usuarios más motivados, no porque la feature cause retención), la diferencia entre correlación e causalidad y por qué los tests A/B son la única forma de establecer causalidad en el contexto del diseño de producto.

**6. Presentar datos de diseño a stakeholders**
El diseñador que sabe presentar datos tiene mayor influencia en las decisiones de producto. Guíame en la presentación efectiva de datos de diseño: los principios de visualización de datos que hacen que los números sean comprensibles (las elecciones de gráfico que no engañan), cómo combinar los insights cualitativos del research con los datos cuantitativos de la analítica en una narrativa coherente, los errores comunes en la presentación de datos de diseño (los gráficos que exageran pequeñas diferencias, los promedios que ocultan la distribución real) y cómo responder a las preguntas de un stakeholder que piensa en términos de datos.

Quiero que uses ejemplos de decisiones de diseño reales (navegación, onboarding, checkout, formularios) para ilustrar cada concepto estadístico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Desarrollar la competencia estadística necesaria para tomar decisiones de diseño fundamentadas en datos',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Forecasting de ventas con datos',
                'description'      => 'Construye previsiones de ventas que el equipo y el CFO pueden confiar: los métodos estadísticos, el ajuste estacional y los modelos que mejoran con el tiempo usando los datos del CRM.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de revenue operations con experiencia construyendo modelos de forecasting de ventas en empresas SaaS B2B, con dominio de los métodos estadísticos que producen previsiones confiables y de los procesos organizativos que hacen que el equipo comercial las use y las actualice. Voy a explorar contigo cómo construir un sistema de forecasting de ventas basado en datos.

Mi contexto: [describe tu situación: tamaño del equipo de ventas, tipo de venta (transaccional, enterprise, mixta), ciclo de ventas típico, herramientas de CRM disponibles y el nivel actual de precisión de tus previsiones]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Por qué el forecasting de ventas falla habitualmente**
La mayoría de los equipos de ventas tienen un proceso de forecasting que produce previsiones poco confiables. Explícame los problemas más comunes: el optimismo estructural del vendedor (que tiende a sobreestimar la probabilidad de cierre de sus oportunidades), la dependencia del criterio subjetivo del vendedor en lugar de datos históricos, la falta de ajuste estacional (que hace que los meses de baja actividad sorprendan siempre al equipo), el problema del sandbagging (el vendedor que infraestima para superar el objetivo) y cómo la falta de datos históricos de calidad en el CRM hace imposible construir modelos objetivos.

**2. Los métodos de forecasting y cuándo usar cada uno**
Existen varios métodos de forecasting con distintos niveles de sofisticación y requisitos de datos. Explícame los métodos principales con sus pros y contras: el forecasting por etapas del pipeline (el método más simple: la probabilidad de cierre por etapa multiplicada por el valor de la oportunidad), el forecasting basado en cobertura (la ratio entre el pipeline y el objetivo que determina si hay suficiente volumen para alcanzar el número), el forecasting por análisis de cohortes históricas (usando las tasas de conversión reales de cohortes anteriores para predecir las actuales), los modelos de machine learning para forecasting (cuándo tienen sentido y cuándo son sobreingeniería) y el método de run rate ajustado estacionalmente.

**3. Los datos del CRM como base del forecasting**
El CRM es la fuente de datos del forecasting, pero solo si contiene datos de calidad. Guíame en el proceso de construir la base de datos para un forecasting de calidad: los campos del CRM que son esenciales para el forecasting (fecha de creación, etapa, valor, fecha de cierre estimada, actividad reciente), el proceso de higiene de datos que mantiene el CRM actualizado (los mecanismos que hacen que los vendedores actualicen los datos sin que sea una carga), los indicadores de velocidad del deal que predicen el cierre mejor que la probabilidad declarada por el vendedor y el análisis de los deals perdidos como fuente de calibración del modelo.

**4. La estacionalidad en el forecasting de ventas**
La estacionalidad es uno de los factores más ignorados en el forecasting de ventas B2B, y su ignorancia produce sorpresas previsibles. Explícame cómo identificar y ajustar la estacionalidad en las previsiones de ventas: el análisis de la serie temporal de ventas históricas para identificar patrones estacionales (los cierres de trimestre, los meses de baja en agosto, el efecto del ciclo presupuestario del cliente), el cálculo de los índices estacionales que ajustan la previsión base, cómo separar el efecto de la estacionalidad del efecto de la tendencia (el crecimiento del negocio) y cómo construir el pipeline necesario para alcanzar el objetivo teniendo en cuenta la estacionalidad.

**5. El modelo de forecasting por cohortes**
El forecasting por cohortes es el método que produce las previsiones más confiables cuando hay suficiente historia de datos. Guíame en la construcción de un modelo de forecasting por cohortes: cómo agrupar las oportunidades históricas en cohortes por mes de creación, cómo calcular la tasa de conversión real de cada cohorte en cada etapa del pipeline a lo largo del tiempo, cómo usar estas tasas históricas para proyectar las conversiones esperadas de las cohortes activas, cómo ajustar el modelo cuando el mercado o el proceso de ventas ha cambiado y cómo presentar el intervalo de confianza de la previsión en lugar de un único número puntual.

**6. El proceso de forecasting: rituales y responsabilidades**
Un modelo estadístico de forecasting solo funciona si el proceso organizativo lo soporta. Propón el sistema de forecasting que combina el modelo cuantitativo con el proceso comercial: la cadencia de actualización del forecast (semanal, mensual, trimestral y qué se revisa en cada ciclo), el proceso de revisión del pipeline con los managers de ventas que calibra los datos del CRM, la presentación del forecast al CFO y al CEO con los rangos de incertidumbre correctos y cómo mejorar el modelo con el tiempo usando los datos de los deals cerrados y perdidos.

Quiero herramientas concretas (Excel, Google Sheets, Salesforce, Python si aplica) y plantillas que pueda adaptar a mi situación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir un sistema de forecasting de ventas basado en datos que produce previsiones confiables',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Estadística para product managers',
                'description'      => 'Los conceptos cuantitativos que el PM necesita dominar: el diseño de experimentos, el cálculo del tamaño de muestra, la detección de efectos pequeños y la interpretación honesta de los resultados.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de producto con sólida formación en estadística aplicada y experiencia diseñando programas de experimentación a escala en empresas tech con millones de usuarios. Voy a explorar contigo los conceptos estadísticos que todo product manager necesita para tomar decisiones de producto más rigurosas.

Mi contexto: [describe tu situación: el volumen de usuarios o tráfico con el que trabajas, si ya haces tests A/B y con qué herramientas, el nivel de sofisticación estadística de tu equipo y los conceptos específicos que sabes que te faltan]

Trabaja conmigo en profundidad los siguientes bloques:

**1. La mentalidad experimental del product manager**
El PM que trabaja con datos de forma rigurosa no busca confirmación de sus hipótesis: diseña experimentos para falsarlas. Explícame la diferencia entre la mentalidad de confirmación (buscar en los datos evidencias de que tenemos razón) y la mentalidad experimental (diseñar el test que podría demostrar que estamos equivocados): el concepto de hipótesis falsable en el contexto del diseño de producto, por qué los PMs que hacen tests para aprender tienen mejor historial de decisiones que los que hacen tests para convencer a los stakeholders y los errores de diseño experimental más comunes que producen resultados no interpretables.

**2. El diseño del experimento: antes de lanzar el test**
El resultado de un test A/B está determinado en gran medida por las decisiones que se toman antes de lanzarlo. Explícame el proceso de diseño de experimentos en el contexto del PM: cómo formular la hipótesis de forma que sea testable (el formato "si hacemos X, esperamos Y en la métrica Z porque W"), la elección de la métrica primaria y las métricas guardianas (que detectan si el cambio tiene efectos secundarios negativos), el período de observación necesario (que va más allá del tiempo hasta la significancia estadística), las decisiones de asignación de usuarios al experimento (aleatorización correcta, manejo de grupos contaminados) y la documentación del diseño antes de lanzar.

**3. El tamaño de muestra: cuántos usuarios necesitas**
El error más frecuente en los tests A/B de producto es lanzarlos sin calcular el tamaño de muestra necesario. Explícame cómo calcular el tamaño de muestra para un test A/B: el mínimo efecto detectable (MDE) como el tamaño mínimo de mejora que el equipo consideraría significativa desde el punto de vista del negocio, el poder estadístico (la probabilidad de detectar el efecto si existe), el nivel de significancia (la tolerancia al error de Tipo I), cómo estos tres factores determinan el tamaño de muestra necesario y las herramientas que hacen el cálculo sin necesitar hacer las matemáticas a mano. Las consecuencias de los tests con poder insuficiente.

**4. Interpretar los resultados sin caer en las trampas comunes**
La fase de interpretación de los resultados es donde más errores se cometen. Explícame las trampas estadísticas más comunes en la interpretación de tests A/B: el peeking (mirar los resultados antes de tiempo y tomar decisiones cuando el test todavía no tiene suficiente muestra), el problema de las comparaciones múltiples (por qué testear muchas métricas a la vez genera falsos positivos), la diferencia entre el resultado del test en el período de observación y el efecto a largo plazo (los efectos de novedad), cómo interpretar los resultados cuando la métrica primaria no mueve pero las métricas secundarias sí y cómo gestionar la presión del stakeholder que quiere ver un resultado positivo.

**5. Experimentos avanzados: más allá del test A/B simple**
El test A/B clásico es solo el punto de partida de un programa de experimentación maduro. Explícame las variantes más avanzadas que el PM debe conocer: el test multivariante (cuando quieres testear varias variantes a la vez y las implicaciones para el tamaño de muestra), los tests de switchback o time-based (para cambios que no se pueden aleatorizar por usuario), los experimentos de holdout a largo plazo (para medir el efecto acumulado de los cambios), el bandido multi-brazo (como alternativa al test A/B cuando la exploración y la explotación deben ocurrir simultáneamente) y los quasi-experimentos (cuando el experimento controlado no es posible).

**6. Construir la cultura de experimentación en el equipo de producto**
Los conceptos estadísticos solo generan valor si el equipo los aplica de forma sistemática. Propón el proceso para construir una cultura de experimentación rigurosa: el programa de formación estadística básica para PMs y diseñadores (qué deben entender y qué no necesitan dominar), el proceso de revisión del diseño experimental antes de lanzar el test (la revisión de pares que detecta los errores de diseño más comunes), el repositorio de experimentos que acumula el aprendizaje del equipo y evita repetir los mismos errores, y cómo comunicar los resultados de los tests (incluyendo los negativos) a los stakeholders de forma que generen aprendizaje organizacional.

Quiero que uses ejemplos de decisiones de producto reales (onboarding, retención, monetización, engagement) para ilustrar cada concepto estadístico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar e interpretar experimentos de producto con rigor estadístico para tomar mejores decisiones',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'People analytics: conceptos cuantitativos para RRHH',
                'description'      => 'Los métodos estadísticos básicos que el profesional de personas necesita para hacer análisis propios: la regresión, la correlación y los tests que permiten hacer afirmaciones con datos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de people analytics con experiencia traduciendo conceptos estadísticos al lenguaje de los profesionales de recursos humanos, haciendo accesible el análisis cuantitativo de datos de personas a equipos sin formación matemática formal. Voy a explorar contigo los conceptos estadísticos que los profesionales de RRHH necesitan para hacer people analytics de calidad.

Mi contexto: [describe tu situación: el tipo de datos de personas con los que trabajas habitualmente (encuestas de clima, datos de rotación, datos de performance), las herramientas que usas y el nivel de análisis que haces actualmente]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Por qué los datos de personas son especialmente difíciles de analizar**
Los datos de personas tienen características que los hacen especialmente sensibles a los errores de análisis. Explícame las particularidades de los datos de RRHH: el problema de los datos escasos (los equipos pequeños tienen tan pocos datos que los análisis tienen poca potencia estadística), el sesgo de respuesta en las encuestas (los empleados más satisfechos y los más insatisfechos responden más, lo que distorsiona los promedios), el problema de la privacidad (las limitaciones que impone el RGPD al análisis de datos de personas), la confusión entre correlación y causalidad en datos de personas (el manager que tiene un equipo más productivo, ¿causa la productividad o el equipo productivo atrae a buenos managers?) y la tendencia al cherry-picking de datos que confirman las creencias previas del equipo de RRHH.

**2. Estadística descriptiva para datos de personas**
Antes de buscar relaciones entre variables, necesitas entender la distribución de cada variable. Explícame las herramientas de estadística descriptiva que el profesional de RRHH necesita: la diferencia entre la media y la mediana en datos de personas (y por qué para el salario o el tiempo de permanencia la mediana es más informativa), la desviación estándar como medida de dispersión (qué significa que la satisfacción tiene una desviación estándar alta), los histogramas y las distribuciones para entender la diversidad en los datos de personas y los percentiles para comparar sin asumir que la distribución es simétrica.

Incluye ejemplos con datos típicos de RRHH: rotación, satisfacción, compensación, tiempo hasta la contratación.

**3. La correlación en people analytics: qué relaciones existen**
La correlación es la herramienta más usada en people analytics y la más mal interpretada. Explícame cómo usar la correlación correctamente en el análisis de datos de personas: la interpretación visual del coeficiente de correlación (qué significa r=0.3 en términos prácticos), el coeficiente de correlación de Spearman como alternativa para datos ordinales (como las escalas de satisfacción), las correlaciones espurias más comunes en datos de RRHH (las que parecen relaciones causales pero no lo son), la correlación como herramienta de generación de hipótesis (que necesitan validación con métodos más rigurosos) y cómo presentar una correlación al equipo de liderazgo sin inducir conclusiones causales.

**4. Los tests de hipótesis para RRHH: ¿son los grupos diferentes?**
El test de hipótesis permite responder preguntas como "¿Los equipos de la región Norte tienen mayor rotación que los del Sur?" con rigor estadístico. Explícame los tests de hipótesis que el profesional de RRHH usa con más frecuencia: el t-test para comparar los promedios de dos grupos (con los supuestos que hay que verificar), el test de chi-cuadrado para comparar proporciones (como la tasa de rotación o la tasa de ascenso por género), el ANOVA para comparar más de dos grupos simultáneamente y la interpretación correcta del p-valor (con honestidad sobre sus limitaciones). El concepto de significancia práctica como complemento de la significancia estadística.

**5. La regresión en people analytics: qué predice qué**
La regresión permite identificar qué factores predicen los outcomes de personas que más importan. Explícame cómo usar la regresión en el análisis de datos de RRHH sin convertirlo en una caja negra: la regresión lineal múltiple para predecir outcomes cuantitativos (la compensación, el tiempo de permanencia), la regresión logística para predecir outcomes binarios (la probabilidad de rotación, la probabilidad de promoción), cómo interpretar los coeficientes de la regresión en términos de RRHH (el factor que más predice la rotación después de controlar por los demás), las limitaciones de la regresión con datos de personas (la multicolinealidad, el overfitting con muestras pequeñas) y el modelo de regresión de rotación como caso de uso concreto paso a paso.

**6. Comunicar los análisis de personas a los stakeholders**
El análisis de datos de personas solo tiene impacto si se comunica de forma que los líderes de negocio lo entienden y actúan en consecuencia. Guíame en la comunicación efectiva de los análisis de people analytics: cómo construir la narrativa que conecta el análisis estadístico con las decisiones de negocio, las visualizaciones que hacen accesibles los datos de personas (con las trampas de los gráficos engañosos), cómo presentar la incertidumbre de los resultados sin que los stakeholders pierdan la confianza en los análisis, cómo responder a las preguntas del CFO o del CEO que cuestionan la metodología y el proceso para traducir los insights de people analytics en recomendaciones de acción concretas.

Quiero que uses ejemplos de análisis reales de RRHH (análisis de rotación, análisis de brecha salarial de género, predicción de rendimiento) para ilustrar cada concepto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Aplicar métodos estadísticos básicos al análisis de datos de personas para tomar decisiones de RRHH más fundamentadas',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelos cuantitativos en finanzas',
                'description'      => 'Los modelos matemáticos que usan los analistas financieros: valoración por opciones reales, modelos de riesgo (VaR) y simulaciones de Monte Carlo que cuantifican la incertidumbre.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un analista cuantitativo con experiencia en finanzas corporativas y gestión de riesgos, con habilidad para explicar los modelos matemáticos de finanzas con intuición clara y aplicaciones prácticas, haciendo accesibles los conceptos más técnicos a analistas financieros que quieren profundizar en el lado cuantitativo de la profesión. Voy a explorar contigo los modelos cuantitativos más relevantes para el analista financiero.

Mi contexto: [describe tu perfil: si trabajas en finanzas corporativas, gestión de riesgos, inversiones, banca o consultoría, y los modelos cuantitativos que ya usas o que sabes que deberías entender mejor]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Los fundamentos matemáticos de las finanzas cuantitativas**
Las finanzas cuantitativas se apoyan en un conjunto de conceptos matemáticos que es necesario entender antes de los modelos. Explícame los fundamentos con intuición financiera: el valor temporal del dinero como el concepto central de las finanzas (y su expresión matemática en el descuento de flujos), la relación entre riesgo y rendimiento como el trade-off fundamental, los conceptos de esperanza, varianza y desviación estándar aplicados a los retornos financieros, la distribución normal y log-normal en el contexto de los precios de los activos (con sus limitaciones reales: las colas gordas que hacen que los eventos extremos sean más frecuentes de lo que la distribución normal predice) y la correlación entre activos como herramienta de diversificación de portfolios.

**2. La valoración por opciones reales**
El DCF (Discounted Cash Flow) es insuficiente para valorar empresas o proyectos con alta incertidumbre y flexibilidad de gestión. Las opciones reales resuelven este problema. Explícame la teoría de opciones reales y su aplicación práctica: qué es una opción real y en qué se diferencia de una opción financiera (la opción de expandir, de abandonar, de diferir o de cambiar un proyecto), el modelo de Black-Scholes y sus supuestos (con honestidad sobre cuándo se cumplen y cuándo no), el modelo binomial como alternativa más intuitiva y flexible, los pasos para valorar un proyecto con opciones reales con un ejemplo numérico concreto y los casos de uso donde las opciones reales añaden más valor al análisis (proyectos de exploración, inversiones en I+D, expansión a nuevos mercados).

**3. El Value at Risk (VaR) y la gestión del riesgo de mercado**
El VaR es la métrica de riesgo de mercado más usada en la industria financiera, a pesar de sus conocidas limitaciones. Explícame el VaR con profundidad: la definición del VaR y cómo interpretarlo (el VaR al 99% de confianza a un día significa que hay un 1% de probabilidad de perder más de X en el próximo día), los tres métodos de cálculo del VaR (el método paramétrico, el método histórico y la simulación de Monte Carlo), las limitaciones fundamentales del VaR que la crisis de 2008 puso de manifiesto (la subestimación de las colas de la distribución, la suposición de liquidez, la falta de información sobre las pérdidas más allá del VaR) y las métricas complementarias que lo mejoran (el Expected Shortfall o CVaR, el stress testing).

**4. La simulación de Monte Carlo en finanzas**
La simulación de Monte Carlo es la herramienta más versátil de las finanzas cuantitativas: permite cuantificar la incertidumbre en cualquier modelo financiero. Explícame la simulación de Monte Carlo desde sus fundamentos: el principio básico (generar miles de escenarios posibles del futuro y ver cómo se distribuyen los resultados), cómo simular la evolución de los precios de los activos (el movimiento browniano geométrico), cómo simular el flujo de caja de un proyecto con variables inciertas, la implementación práctica en Excel y Python (con el código concreto), los casos de uso en finanzas corporativas (valoración de proyectos con variables inciertas, análisis de sostenibilidad de la deuda, proyecciones de tesorería) y los errores más comunes en la implementación de simulaciones de Monte Carlo.

**5. Los modelos de crédito y el riesgo de impago**
El riesgo de crédito es uno de los riesgos financieros más importantes para bancos, bonistas e incluso para las empresas que gestionan el riesgo de sus contrapartes. Explícame los modelos de riesgo de crédito más usados: el modelo de Merton (que trata el equity como una opción sobre los activos de la empresa y la quiebra como el momento en que los activos caen por debajo de la deuda), los modelos de forma reducida que modelan directamente la probabilidad de impago, los ratings crediticios y sus metodologías, el modelo de Altman Z-score como herramienta de predicción de quiebra basada en ratios financieros (con sus limitaciones) y el Credit Default Swap (CDS) como instrumento que refleja el precio de mercado del riesgo de crédito.

**6. Los modelos de optimización de portfolios**
La teoría moderna de portfolios de Markowitz es el fundamento matemático de la gestión de activos. Explícame los modelos de optimización de portfolios: la frontera eficiente de Markowitz (el conjunto de portfolios que maximizan el retorno para un nivel dado de riesgo), el modelo CAPM (Capital Asset Pricing Model) y el concepto de beta como medida del riesgo sistemático, la crítica de los modelos de Markowitz en la práctica (la sensibilidad a los inputs, el error de estimación de la matriz de covarianzas) y las alternativas que lo mejoran (el portfolio de mínima varianza, la paridad de riesgo, los modelos de Black-Litterman que incorporan las visiones del gestor en la optimización).

Quiero implementaciones numéricas y en Python de los modelos principales, no solo la teoría.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Dominar los modelos cuantitativos fundamentales para el análisis financiero profesional',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cuantificación del daño y peritaje económico',
                'description'      => 'Cuando el abogado necesita cuantificar el daño económico en un litigio: los métodos de valoración aceptados por los tribunales y cómo trabajar con peritos economistas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un economista forense especializado en cuantificación del daño económico en procedimientos judiciales y arbitrajes comerciales, con experiencia como perito y como asesor de abogados en litigios de daños y perjuicios, competencia desleal, incumplimiento de contrato y daños de responsabilidad civil. Voy a explorar contigo cómo abordar la cuantificación del daño económico en el contexto jurídico.

Mi contexto: [describe el tipo de caso en el que trabajas: si es un litigio por incumplimiento de contrato, daño a la reputación, competencia desleal, responsabilidad civil, infracción de propiedad intelectual u otro, y cuál es tu posición (parte demandante, demandada o árbitro/juez)]

Trabaja conmigo en profundidad los siguientes bloques:

**1. Los principios de la cuantificación del daño en el derecho**
La cuantificación del daño económico en el derecho se basa en principios legales y económicos que determinan qué se puede reclamar y cómo. Explícame los principios fundamentales: el principio de restitutio in integrum (el perjudicado debe quedar en la misma situación económica que si el daño no hubiera ocurrido), la distinción entre daño emergente (el daño real y directo) y lucro cesante (las ganancias que se han dejado de obtener), el estándar de causalidad (la conexión entre el hecho dañoso y el daño reclamado), el estándar de certeza del daño (el daño debe ser cierto, no meramente especulativo) y el deber de mitigación (el perjudicado tiene la obligación de minimizar sus pérdidas).

**2. Los métodos de cuantificación del daño**
Existen varios métodos para cuantificar el daño económico, cada uno apropiado para distintos tipos de casos. Explícame los métodos principales con sus supuestos y limitaciones: el método del beneficio perdido (comparing the actual performance with the but-for scenario: qué habría ganado la empresa si el daño no hubiera ocurrido), el método del valor de mercado (cuánto vale lo dañado en el mercado), el método del coste de reposición (cuánto cuesta reponer lo dañado a su estado anterior), el método de los precios de comparación (usar transacciones comparables para estimar el valor de lo dañado) y los métodos de valoración de empresa (DCF, múltiplos de mercado) cuando el daño afecta al valor de un negocio.

**3. El escenario contrafactual: el but-for scenario**
El corazón de la mayoría de las cuantificaciones de daño es la construcción del escenario contrafactual: qué habría ocurrido si el hecho dañoso no hubiera tenido lugar. Guíame en la construcción rigurosa del contrafactual: los principios que guían la construcción del but-for scenario (debe ser razonable, consistente con la evidencia disponible y libre de hindsight bias), los datos y las fuentes de información que se usan para construirlo (datos históricos de la empresa, benchmarks del sector, proyecciones financieras previas al daño), los factores de control que deben excluirse del contrafactual (el daño causado por la crisis económica general, los factores que habrían reducido el rendimiento independientemente del hecho dañoso) y cómo presentar el contrafactual de forma convincente ante el tribunal o el árbitro.

**4. El rol del perito economista en el litigio**
El perito economista es el experto que cuantifica el daño y lo explica ante el tribunal o el árbitro. Explícame el rol del perito en el proceso: las funciones del perito (la elaboración del informe pericial, la defensa del informe en juicio o en arbitraje, la respuesta al informe del perito contrario), los estándares de independencia y objetividad que se exigen al perito (que tiene la obligación de ayudar al tribunal, no de servir a la parte que le contrató), el proceso de selección del perito adecuado para cada tipo de caso y cómo el abogado debe trabajar con el perito para que el informe sea sólido y defensible.

**5. El informe pericial de cuantificación del daño**
El informe pericial es el documento central de la cuantificación del daño en el litigio. Guíame en la estructura y el contenido de un informe pericial de calidad: los elementos que el tribunal o el árbitro espera encontrar (la descripción del encargo, el resumen ejecutivo, la metodología, los datos y supuestos, el cálculo del daño y la sensibilidad del resultado a los supuestos clave), los errores más comunes que debilitan un informe pericial (los supuestos no justificados, la selección sesgada de comparables, la omisión de las incertidumbres del análisis), cómo presentar el informe de forma que sea accesible para un juez o árbitro sin formación económica y cómo estructurar la defensa del informe ante las preguntas del perito contrario y del tribunal.

**6. La cuantificación del daño en tipos específicos de litigio**
Los métodos de cuantificación del daño varían según el tipo de litigio. Explícame los enfoques específicos para los tipos de casos más frecuentes: el lucro cesante por incumplimiento de contrato (el daño al negocio de la parte que no recibió lo que le correspondía), el daño por competencia desleal (las ventas que se habrían realizado sin la conducta desleal del competidor), la cuantificación del daño en litigios de propiedad intelectual (el lucro cesante del titular de los derechos y el enriquecimiento injusto del infractor), el daño a la reputación comercial (el más difícil de cuantificar y el que más depende del criterio del perito) y las particularidades de la cuantificación del daño en arbitraje de inversiones.

Quiero orientación sobre cómo el abogado puede trabajar de forma más efectiva con el perito economista para construir el mejor argumento cuantitativo posible.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Cuantificar el daño económico en litigios con rigor metodológico y construir el argumento pericial más sólido',
                'vote_score'       => 26,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Métricas de CS: los números que importan',
                'description'      => 'Los KPIs fundamentales de customer success y cómo calcularlos correctamente: NRR, GRR, churn rate, NPS, CSAT y el health score compuesto que predice la renovación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia construyendo sistemas de métricas de CS en empresas SaaS B2B de distintas etapas y modelos de negocio, con dominio del cálculo correcto y la interpretación de los KPIs que determinan la salud del negocio de CS y la calidad del servicio al cliente. Voy a explorar contigo las métricas de customer success que realmente importan.

Mi contexto: [describe tu modelo de negocio: si vendes por suscripción anual o mensual, el ACV promedio de tus clientes, el tamaño del equipo de CS y las métricas que actualmente rastreas con mayor y menor confianza en su correcto cálculo]

Trabaja conmigo en profundidad los siguientes bloques:

**1. El framework de métricas de CS: las capas de medición**
Las métricas de customer success se organizan en capas que miden aspectos distintos del negocio. Explícame el framework de métricas de CS: las métricas de negocio (que miden el impacto financiero del CS en el ARR de la empresa: NRR, GRR, churn de ARR), las métricas de servicio (que miden la calidad de la experiencia del cliente: NPS, CSAT, tiempo de resolución), las métricas de actividad (que miden el trabajo del equipo de CS: número de QBRs realizados, cobertura de health score, pipeline de expansión) y las métricas predictivas (que anticipan el comportamiento futuro del cliente: el health score, los indicadores tempranos de riesgo). Cómo estas capas se relacionan y cuándo usar cada una para distintas audiencias (el CFO vs. el equipo de CS).

**2. El churn: tipos, cálculo y trampas**
El churn es la métrica más importante del negocio de suscripción y la que más formas de calcularse tiene, con resultados muy distintos según la metodología. Explícame los tipos de churn y cómo calcular cada uno correctamente: el churn de clientes (porcentaje de clientes que no renuevan), el churn de ARR o MRR (porcentaje de ARR que no se renueva, que puede ser muy diferente del churn de clientes si los que se van son más grandes o más pequeños que la media), el churn mensual vs. anual (y por qué no se puede simplemente multiplicar por 12), el churn bruto (solo las pérdidas) vs. el churn neto (pérdidas menos expansión), las fechas de corte que generan controvsersia en el cálculo del churn y cómo presentar el churn de forma que el CFO confíe en el número.

**3. NRR y GRR: las métricas que miden el crecimiento del negocio**
El Net Revenue Retention y el Gross Revenue Retention son las métricas que mejor predicen la salud de un negocio SaaS B2B a largo plazo. Explícame ambas métricas en detalle: la fórmula exacta del GRR (ARR de renovación sin contar expansiones, dividido por el ARR al inicio del período) y por qué es el suelo de la calidad del CS, la fórmula del NRR (GRR más la expansión neta) y su interpretación como medida del crecimiento orgánico del negocio, qué valores son buenos según el tipo de empresa y mercado, por qué el NRR superior al 100% hace que el negocio crezca incluso sin nuevos clientes y los errores más comunes en el cálculo que producen cifras infladas o defladas.

**4. NPS y CSAT: medir la satisfacción con rigor**
El NPS y el CSAT son las métricas de satisfacción del cliente más usadas en CS, pero rara vez se calculan y se interpretan correctamente. Explícame ambas métricas con profundidad: la fórmula del NPS (promotores menos detractores, ignorando los neutros) y los errores de implementación que lo hacen poco útil (la frecuencia de encuesta, el momento en que se lanza, la tasa de respuesta insuficiente), cómo distinguir los movimientos reales del NPS de la variación aleatoria (el intervalo de confianza del NPS raramente se calcula), el CSAT como medida de satisfacción transaccional (más útil que el NPS para medir la calidad de interacciones específicas), la relación entre el NPS y el churn (que existe pero es más débil de lo que la industria pretende) y los benchmarks de NPS y CSAT por sector.

**5. El health score: predecir la renovación antes de que ocurra**
El health score es la métrica de CS más poderosa y la más difícil de construir bien. Guíame en el diseño de un health score que predice el churn con anticipación suficiente para intervenir: las dimensiones del health score que más predicen el churn (la adopción del producto medida por el uso de las features clave, el engagement con el equipo de CS, los indicadores de satisfacción y los indicadores financieros del cliente), cómo asignar pesos a cada dimensión de forma que el score sea predictivo de los outcomes reales (y no solo un promedio de métricas positivas), la calibración del health score con datos históricos de churn y renovación, los umbrales de alerta que disparan las intervenciones del CSM y cómo actualizar el modelo cuando los factores predictivos cambian.

**6. El reporting de métricas de CS a distintas audiencias**
Las métricas de CS tienen distintos públicos con distintas necesidades de información. Propón el sistema de reporting de métricas de CS para distintas audiencias: el dashboard del CEO y el CFO (las tres o cuatro métricas de negocio que resumen la salud del CS: NRR, GRR, churn de ARR, pipeline de renovaciones), el reporte mensual del VP de CS para el equipo de liderazgo (que añade las métricas de servicio y las tendencias), el dashboard del equipo de CS (las métricas de actividad y el health score de las cuentas asignadas a cada CSM), el QBR interno de métricas de CS (la revisión trimestral profunda con el análisis de cohortes y los aprendizajes del período) y cómo comunicar los resultados negativos (el churn que fue más alto de lo esperado) con honestidad y con plan de acción.

Quiero fórmulas concretas, ejemplos numéricos y las convenciones del sector sobre cómo calcular cada métrica para que los números sean comparables con los benchmarks de la industria.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Implementar un sistema de métricas de CS que mide la salud del negocio y predice el comportamiento futuro de los clientes',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Finanzas personales y gestión del dinero para freelancers',
                'description'      => 'Los conceptos financieros que el freelance necesita para gestionar ingresos variables: ahorro de emergencia, impuestos trimestrales, separación de cuentas y el planning para la jubilación sin nómina.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor financiero especializado en finanzas personales para profesionales independientes, con experiencia ayudando a freelancers y autónomos a construir la estructura financiera que les da seguridad a pesar de los ingresos variables. Voy a explorar contigo cómo gestionar el dinero como freelancer de forma inteligente.

Mi contexto: [describe tu situación: cuánto tiempo llevas como freelancer o autónomo, si tus ingresos son estables o muy variables, si tienes estructura financiera básica (cuenta separada para el negocio, fondo de emergencia) o empiezas prácticamente desde cero, y los aspectos financieros que más te preocupan]

Trabaja conmigo en profundidad los siguientes bloques:

**1. La estructura financiera del freelancer: separar las cuentas**
El primer error del freelancer es mezclar las finanzas del negocio con las personales. Explícame la estructura de cuentas que necesita un freelancer para gestionar su dinero con claridad: la cuenta de negocio donde llegan todos los ingresos y se pagan todos los gastos del negocio, la cuenta fiscal donde se reserva automáticamente el porcentaje de cada ingreso para el pago de impuestos (el sistema del "paga primero a Hacienda"), la cuenta de emergencia personal (con el objetivo de meses de gastos y cómo llegar a él progresivamente) y la cuenta de ahorro e inversión personal. El proceso de "sueldo" fijo que el freelancer se paga a sí mismo desde la cuenta de negocio para estabilizar sus finanzas personales independientemente de la variabilidad de los ingresos.

**2. Los impuestos del autónomo en España: lo que necesitas saber**
La fiscalidad del autónomo en España es más compleja que la del asalariado y muchos freelancers la descubren tarde con consecuencias dolorosas. Explícame los impuestos que el autónomo tiene que gestionar: el IRPF y las retenciones en las facturas (qué porcentaje de retención aplica, cuándo el cliente retiene y cuándo no, y cómo afecta al flujo de caja), los pagos fraccionados trimestrales (los modelos 130 y 131: cuándo corresponde cada uno, cómo se calcula el pago y por qué subestimarlo puede llevar a sorpresas en la declaración de la renta), el IVA para los autónomos que lo gestionan (el modelo 303 trimestral, la diferencia entre IVA repercutido y soportado) y la cuota de autónomos (los tramos del nuevo sistema de cotización por ingresos reales).

**3. El fondo de emergencia del freelancer: cuánto y cómo**
El freelancer necesita un fondo de emergencia mayor que el asalariado porque sus ingresos no están garantizados por contrato. Explícame el diseño del fondo de emergencia para el freelancer: cuántos meses de gastos debe cubrir el fondo (la respuesta varía según la variabilidad de los ingresos, el sector y el colchón de clientes recurrentes), el proceso de construcción progresiva del fondo (el porcentaje de cada ingreso que va directamente al fondo hasta alcanzar el objetivo), dónde mantener el fondo (liquidez vs. rentabilidad mínima), los criterios para usar el fondo (qué constituye una emergencia real que justifica tocarlo) y el proceso de reconstrucción del fondo después de usarlo.

**4. La planificación de tesorería con ingresos variables**
La variabilidad de los ingresos es el mayor reto de las finanzas del freelancer: los meses de vacas gordas coexisten con los meses de vacas flacas. Guíame en la planificación de la tesorería del freelancer: el presupuesto mensual basado en el ingreso medio (no en el ingreso del mes bueno), la regla de pagar los gastos fijos con el ingreso mínimo esperado (y tratar el exceso como variable), el proceso de suavización de ingresos (reservar en los meses buenos para cubrir los meses malos), las señales de alerta de problemas de tesorería (los síntomas que aparecen antes de que la situación sea crítica) y el proceso de reducción de gastos cuando los ingresos caen por debajo de los mínimos.

**5. La jubilación del autónomo: el problema que se pospone demasiado**
El autónomo no tiene un empleador que cotice por su pensión ni un plan de pensiones de empresa al que contribuir. La jubilación es una responsabilidad individual que la mayoría de los freelancers pospone hasta que es tarde. Explícame el plan de jubilación del autónomo en España: el estado de la pensión pública del autónomo (la realidad de las cotizaciones bajas y la pensión resultante), las herramientas de ahorro para la jubilación disponibles para el autónomo (los planes de pensiones individuales, los planes de pensiones de empleo simplificados para autónomos, el seguro de vida con cobertura de jubilación, las acciones y los fondos indexados como alternativa más flexible), cuánto ahorrar para la jubilación según la edad de inicio y el objetivo de ingreso en la jubilación, y el impacto fiscal del ahorro para la jubilación (la deducción de los planes de pensiones en el IRPF).

**6. La inversión del freelancer: hacer crecer el dinero con disciplina**
El freelancer que consigue ahorrar tiene la oportunidad de invertir ese ahorro de forma inteligente. Guíame en la estrategia de inversión para el freelancer: la jerarquía de prioridades financieras (primero el fondo de emergencia, luego la deuda cara, luego la jubilación, luego la inversión libre), los vehículos de inversión adecuados para el perfil del autónomo (los fondos indexados como opción de bajo coste y alta diversificación, los ETFs, los fondos de inversión con ventajas fiscales), el concepto de inversión periódica (dollar cost averaging) que funciona especialmente bien para el freelancer con ingresos variables, la fiscalidad de las inversiones para el autónomo español (cómo tributan las plusvalías, los dividendos y los intereses) y los errores de inversión más comunes del freelancer que tiene dinero por primera vez.

Quiero orientación práctica para el autónomo español, con los números y los instrumentos concretos que son relevantes en el contexto fiscal y regulatorio de España.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir la estructura financiera del freelancer para gestionar ingresos variables y planificar la jubilación sin nómina',
                'vote_score'       => 46,
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
