<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills328Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Análisis de campañas de marketing con Excel y dashboards visuales',
                'description'      => 'Aprende a transformar los datos brutos de tus campañas en informes visuales accionables usando Excel y herramientas de dashboard. Descubre qué canales generan más ROI y toma decisiones basadas en datos reales. Ideal para marketers que quieren pasar de los informes estáticos al análisis dinámico.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un analista de marketing digital experto en análisis de datos y visualización. Tu misión es ayudarme a analizar los resultados de mis campañas de marketing y crear dashboards visuales efectivos que permitan tomar decisiones estratégicas rápidas.

**Contexto de uso:**
Soy un profesional de marketing que maneja múltiples campañas simultáneas (redes sociales, email, SEM, contenido orgánico). Tengo acceso a los datos de cada canal pero me cuesta sintetizarlos en una visión unificada que sea fácil de interpretar y presentar a dirección.

**Paso 1 — Inventario de fuentes de datos**
Comienza preguntándome qué herramientas y fuentes de datos tengo disponibles. Categoriza las respuestas en:
- Fuentes de tráfico (Google Analytics, Search Console, plataformas de ads)
- Fuentes de conversión (CRM, e-commerce, landing pages)
- Fuentes de engagement (redes sociales, email marketing, herramientas de SEO)

Para cada fuente, indícame qué métricas clave exportar y en qué formato (CSV, Excel, API).

**Paso 2 — Estructura del modelo de datos en Excel**
Diseña para mí la arquitectura de un libro de Excel para análisis de campañas. Incluye:
- Hoja "Raw Data": estructura de tabla maestra con columnas normalizadas (fecha, canal, campaña, impresiones, clics, conversiones, coste, ingresos)
- Hoja "Cálculos": fórmulas para CTR, CPL, CPA, ROAS, LTV, tasa de conversión por etapa del funnel
- Hoja "Pivot Tables": configuración de tablas dinámicas para análisis por canal, periodo y segmento
- Hoja "Dashboard": diseño del panel de control con gráficos dinámicos vinculados a las pivots

Proporciona las fórmulas exactas de Excel para cada métrica clave, incluyendo fórmulas de comparación período anterior (MoM, YoY).

**Paso 3 — Selección de tipos de gráficos**
Para cada tipo de análisis, recomiéndame el gráfico más efectivo y explica por qué:
- Evolución temporal de KPIs: ¿líneas, área apilada o barras agrupadas?
- Comparación entre canales: ¿barras horizontales, radar o gráfico de burbujas?
- Distribución del presupuesto vs rendimiento: ¿treemap, scatter plot o barras normalizadas?
- Funnel de conversión: ¿embudo, barras decrecientes o Sankey?
- Correlaciones entre métricas: ¿scatter plot con línea de tendencia o heatmap?

Para cada recomendación, indica qué historia visual cuenta ese gráfico y cómo titularlo para máximo impacto.

**Paso 4 — Interpretación de datos y detección de anomalías**
Enséñame a leer mis datos con criterio analítico. Crea una guía de preguntas diagnósticas:
- ¿Cómo identifico canales con alta inversión y bajo retorno?
- ¿Qué señales indican fatiga de audiencia o saturación de canal?
- ¿Cómo detectar caídas de rendimiento antes de que impacten en resultados?
- ¿Qué benchmarks del sector debo usar para contextualizar mis métricas?

Incluye reglas de formato condicional en Excel para alertas automáticas cuando una métrica cae por debajo del umbral aceptable.

**Paso 5 — Insights accionables y reporte ejecutivo**
Ayúdame a transformar los datos en narrativa estratégica. Proporciona una plantilla de resumen ejecutivo mensual con:
- 3 titulares de logros del mes (formato: métrica + variación + contexto)
- Tabla de semáforo de rendimiento por canal
- Top 3 hallazgos con implicaciones estratégicas
- 3 recomendaciones de acción para el próximo mes con indicador de prioridad e impacto estimado

**Formato de salida:**
Estructura tu respuesta en secciones claramente etiquetadas. Incluye ejemplos concretos con datos ficticios realistas para ilustrar cada concepto. Cuando propongas fórmulas de Excel, escríbelas en formato listo para copiar y pegar. Usa tablas comparativas cuando sea útil.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Análisis y reporte de campañas de marketing',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Visualización de métricas de rendimiento de aplicaciones con Python',
                'description'      => 'Domina la creación de dashboards técnicos con Python, Pandas y Matplotlib/Plotly para monitorizar el rendimiento de tus aplicaciones. Transforma logs, métricas de infraestructura y datos de uso en gráficos interactivos accionables. Reduce el tiempo de detección de problemas con visualizaciones automatizadas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero senior de plataforma con experiencia en observabilidad y análisis de rendimiento de sistemas. Guíame para construir un sistema de visualización de métricas de aplicación usando Python que me permita detectar problemas de rendimiento antes de que impacten a los usuarios.

**Contexto técnico:**
Trabajo en una aplicación web/API en producción. Tengo acceso a logs de servidor, métricas de base de datos, datos de APM (Application Performance Monitoring) y métricas de infraestructura. Quiero centralizar todo esto en dashboards Python que pueda ejecutar localmente o desplegar como herramienta interna.

**Bloque 1 — Stack tecnológico y configuración inicial**
Recomiéndame el stack de visualización más adecuado para métricas técnicas:
- Pandas para manipulación de datos temporales
- Matplotlib para gráficos estáticos en informes
- Plotly/Dash para dashboards interactivos con filtros
- Seaborn para análisis estadístico de distribuciones

Proporciona el código de instalación y configuración inicial, incluyendo un entorno virtual y las importaciones estándar que usaré en todos mis scripts de análisis.

**Bloque 2 — Ingesta y normalización de datos**
Escribe funciones Python reutilizables para:
- Parsear logs de acceso HTTP (formato Combined Log Format) y extraer: timestamp, endpoint, método, status code, tiempo de respuesta, bytes transferidos
- Leer métricas de PostgreSQL (pg_stat_statements, pg_stat_user_tables) vía SQLAlchemy
- Normalizar series temporales a intervalos regulares (resample en Pandas) para comparación entre fuentes
- Detectar y tratar valores atípicos usando IQR o z-score

Incluye manejo de excepciones robusto y logging adecuado para producción.

**Bloque 3 — Métricas clave y cálculos derivados**
Implementa en Python el cálculo de:
- Percentiles de latencia (p50, p90, p95, p99) por endpoint y ventana temporal
- Tasa de errores (4xx, 5xx) como porcentaje del tráfico total
- Throughput (requests/segundo) con media móvil exponencial
- Apdex score por endpoint (con umbrales T configurables)
- Disponibilidad (uptime) calculada desde los logs de error
- Query time distribution para las N queries más lentas de la base de datos

Para cada métrica, explica el umbral de alerta recomendado según estándares de la industria (SRE/SLO).

**Bloque 4 — Tipos de visualizaciones y cuándo usarlas**
Crea ejemplos de código para los gráficos más útiles en contexto de rendimiento:
- Time series multilinea con bandas de confianza para latencia a lo largo del tiempo
- Heatmap horario (días × horas) para detectar patrones de tráfico
- Histograma de distribución de tiempos de respuesta con escala logarítmica
- Flame graph simplificado para análisis de endpoints más lentos
- Scatter plot de correlación entre carga del servidor y latencia
- Gráfico de barras agrupadas para comparar rendimiento antes/después de un deploy

**Bloque 5 — Dashboard automatizado y alertas**
Diseña un script Python que:
- Se ejecute como tarea cron cada hora
- Genere un informe HTML con Plotly embebido (sin servidor externo)
- Envíe alerta por correo (usando smtplib) si alguna métrica supera el umbral crítico
- Guarde histórico de métricas en SQLite para análisis de tendencias

Proporciona el código completo del script principal con comentarios explicativos en cada sección relevante.

**Formato de salida:**
Organiza la respuesta en bloques claramente separados con encabezados. Incluye código Python completo y funcional en bloques de código. Para cada función, añade un docstring explicativo. Señala con comentarios inline las partes que debo adaptar a mi entorno específico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Monitorización de rendimiento de aplicaciones',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Visualización de datos para informes de investigación de usuarios',
                'description'      => 'Aprende a presentar hallazgos de investigación UX de forma visual e impactante usando herramientas de diseño y análisis de datos. Convierte encuestas, entrevistas y datos de usabilidad en narrativas visuales que convenzan a stakeholders. Diseña dashboards de investigación que aceleren la toma de decisiones de producto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un investigador de experiencia de usuario senior con especialización en síntesis y comunicación de hallazgos. Ayúdame a transformar mis datos de investigación UX en presentaciones visuales que impacten a stakeholders y aceleren las decisiones de diseño de producto.

**Contexto del proyecto:**
Soy diseñador o investigador UX y acabo de completar una ronda de investigación (puede ser encuestas cuantitativas, entrevistas cualitativas, tests de usabilidad o análisis de datos de comportamiento). Tengo los datos en bruto pero necesito convertirlos en un informe visual convincente y accionable.

**Fase 1 — Clasificación y jerarquía de hallazgos**
Guíame para estructurar mis hallazgos antes de visualizarlos:
- Cómo separar hallazgos de observaciones, observaciones de insights e insights de recomendaciones
- Método de afinidad digital (usando FigJam o Miro) para agrupar hallazgos cualitativos
- Cómo priorizar hallazgos usando una matriz de impacto × frecuencia
- Framework para convertir citas textuales de entrevistas en insights accionables

Proporciona plantillas de frases para formular insights según el patrón: [Tipo de usuario] necesita [necesidad] porque [insight], lo que nos indica que [implicación de diseño].

**Fase 2 — Visualización de datos cuantitativos de UX**
Para cada tipo de dato cuantitativo frecuente en investigación UX, recomiéndame el gráfico más efectivo:
- Resultados de encuestas Likert (1-5 o 1-7): gráfico de barras divergentes desde el punto neutro
- NPS y métricas de satisfacción: gauge chart + distribución de promotores/detractores/pasivos
- Tasa de éxito en tareas de usabilidad: barras horizontales ordenadas con benchmark
- Tiempos de completación de tareas: boxplot o violín para mostrar distribución
- Comparación entre segmentos de usuarios: gráficos de araña/radar para perfiles

Para cada tipo, explica qué historia visual cuenta y cómo titularlo para comunicar el hallazgo principal de un vistazo.

**Fase 3 — Representación de datos cualitativos**
Enséñame técnicas visuales para datos cualitativos:
- Nubes de palabras ponderadas por frecuencia e impacto emocional
- Journey maps con anotaciones de puntos de dolor y momentos de deleite
- Mapas de empatía con cuadrantes enriquecidos con datos de entrevistas
- Diagramas de flujo de decisión del usuario con porcentajes de cada ruta
- Matrices de comportamiento por segmento (personas × comportamientos)

Incluye consejos de color: cómo usar el color semánticamente (rojo para fricción, verde para éxito, amarillo para oportunidad) sin perder accesibilidad.

**Fase 4 — Estructura del informe visual de investigación**
Diseña la estructura de un informe de investigación de 10-15 slides:
- Slide 1: resumen ejecutivo con 3 hallazgos principales y su impacto en el negocio
- Slides 2-3: metodología y perfil de participantes (con visualización demográfica)
- Slides 4-8: hallazgos principales, uno por slide, con evidencia visual y cita representativa
- Slide 9: mapa de oportunidades priorizado
- Slide 10: recomendaciones de diseño con nivel de esfuerzo e impacto estimado
- Slide 11: próximos pasos y criterios de éxito

Para cada tipo de slide, describe el layout visual recomendado y qué elementos deben tener mayor peso visual.

**Fase 5 — Comunicación con stakeholders**
Ayúdame a adaptar la presentación según la audiencia:
- Para C-level: versión de 3 slides con impacto de negocio cuantificado
- Para equipo de producto: hallazgos + implicaciones para el roadmap
- Para equipo de desarrollo: especificaciones derivadas de los hallazgos
- Para el equipo de diseño: insights brutos + espacio para ideación

**Formato de salida:**
Responde con secciones numeradas y ejemplos concretos para cada técnica. Cuando menciones un tipo de gráfico, describe su construcción paso a paso. Incluye ejemplos de títulos de slide efectivos. Proporciona una checklist de calidad para revisar el informe antes de presentarlo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Presentación de investigación UX a stakeholders',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Análisis del pipeline de ventas con dashboards interactivos',
                'description'      => 'Transforma los datos de tu CRM en dashboards de pipeline que revelen dónde se pierden oportunidades y qué acciones aceleran el cierre. Aprende a calcular métricas de conversión por etapa, velocidad de ventas y forecast de ingresos. Toma decisiones de gestión basadas en datos reales de tu embudo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con experiencia en análisis de datos y Revenue Operations. Ayúdame a construir un sistema de análisis de pipeline de ventas que me permita identificar cuellos de botella, predecir ingresos con precisión y tomar decisiones de coaching basadas en datos.

**Contexto:**
Lidero un equipo de ventas B2B y tengo acceso a los datos de mi CRM (Salesforce, HubSpot o similar). Quiero dejar de tomar decisiones basadas en intuición y empezar a usar los datos para gestionar mi pipeline con rigor analítico.

**Módulo 1 — Métricas fundamentales del pipeline**
Explícame cómo calcular y qué significan estas métricas esenciales:

Tasas de conversión por etapa: cómo calcular el porcentaje de oportunidades que avanzan de cada etapa a la siguiente, y cómo identificar la etapa con mayor pérdida (el "cuello de botella del embudo").

Velocidad de ventas: la fórmula completa (número de oportunidades × valor medio × tasa de cierre / ciclo de ventas en días) y cómo interpretarla para comparar trimestres o representantes.

Cobertura de pipeline: la ratio entre el valor total del pipeline y la cuota del periodo, y qué ratio es saludable según el tipo de venta.

Tiempo medio por etapa: cómo detectar oportunidades que llevan demasiado tiempo en una etapa (síntoma de pipeline fantasma o deal en riesgo).

Tasa de win/loss: no solo el porcentaje global sino segmentada por tamaño de deal, sector, representante y fuente del lead.

**Módulo 2 — Diseño del dashboard de pipeline**
Ayúdame a diseñar un dashboard operativo semanal con:
- Vista de embudo de conversión: gráfico de barras decrecientes con % de conversión entre etapas
- Tendencia de ingresos: gráfico de líneas con pipeline total, pipeline cualificado y forecast comprometido
- Leaderboard de representantes: tabla con métricas clave por persona (deals activos, valor, tasa de cierre, ciclo medio)
- Mapa de calor de actividad: grid de días × representantes con intensidad de actividad de ventas
- Alertas de deals en riesgo: tabla de oportunidades sin actividad en X días o con fecha de cierre vencida

Para cada componente, describe qué historia visual cuenta y qué acción de gestión debe desencadenar.

**Módulo 3 — Análisis de win/loss**
Guíame para construir un análisis sistemático de por qué gano y pierdo deals:
- Qué datos capturar en el CRM en el momento del cierre o la pérdida (razón de pérdida, competidor, objeción principal, factor decisivo)
- Cómo segmentar el análisis: por sector, tamaño de empresa, persona que toma la decisión, fuente del lead
- Qué visualizaciones usar para identificar patrones: barras apiladas de razones de pérdida, scatter plot de deal size vs ciclo de ventas para wins
- Cómo convertir los hallazgos en mejoras de proceso, materiales de ventas o criterios de cualificación

**Módulo 4 — Forecast de ingresos**
Diseña un modelo de forecast con tres metodologías complementarias:
- Forecast basado en etapas: multiplicar el valor de cada etapa por la tasa histórica de cierre de esa etapa
- Forecast basado en representante: cada rep se compromete con una cantidad; el manager ajusta con un factor de confianza histórico
- Forecast estadístico: usar regresión sobre datos históricos de pipeline a final de trimestre para predecir cierre

Explica cómo combinar los tres en un forecast de consenso y cómo medir la precisión del forecast mes a mes.

**Módulo 5 — Rutina de revisión de pipeline**
Ayúdame a estructurar una revisión de pipeline semanal efectiva:
- Agenda de 45 minutos con secciones cronometradas
- Las 5 preguntas que debo hacer a cada representante sobre sus top deals
- Cómo usar el dashboard para preparar la reunión en 10 minutos
- Qué decisiones debo tomar en la reunión (reasignar recursos, escalar deals, dar de baja oportunidades estancadas)

**Formato de salida:**
Organiza la respuesta en módulos numerados con subtítulos claros. Incluye fórmulas exactas donde corresponda. Usa ejemplos con números ficticios realistas para ilustrar cada cálculo. Proporciona una plantilla de dashboard en formato texto (tabla) para que pueda replicarla en mi herramienta de BI.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestión y optimización del pipeline comercial',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Dashboard de KPIs de producto con análisis de cohortes',
                'description'      => 'Aprende a diseñar y construir dashboards de producto que muestren el comportamiento real de los usuarios a lo largo del tiempo mediante análisis de cohortes. Identifica patrones de retención, detecta el momento de valor y toma decisiones de roadmap respaldadas por datos. Convierte métricas de vanidad en indicadores de salud del producto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Product Manager experto en análisis de datos de producto y growth. Ayúdame a construir un sistema de medición de KPIs de producto centrado en el análisis de cohortes que me permita entender el comportamiento real de mis usuarios y tomar decisiones de roadmap basadas en evidencia.

**Contexto:**
Soy PM de un producto digital (app móvil o web) con base de usuarios activa. Tengo acceso a datos de eventos de usuario (mediante Mixpanel, Amplitude, BigQuery o similar) y quiero ir más allá de las métricas de vanidad (usuarios totales, pageviews) para entender la salud real de mi producto.

**Sección 1 — Framework de métricas de producto**
Ayúdame a definir el árbol de métricas de mi producto:
- Métrica norte: cómo elegir un único indicador que refleje el valor real que entregamos a usuarios (ejemplos: canciones escuchadas por semana, proyectos completados al mes, conexiones establecidas)
- Métricas de insumo: qué actividades del producto impulsan la métrica norte
- Métricas de guardrail: qué no debo sacrificar mientras optimizo la métrica norte (satisfacción, privacidad, calidad)
- Cómo comunicar este framework al equipo para alinear criterios de priorización

**Sección 2 — Análisis de cohortes: conceptos y diseño**
Explícame el análisis de cohortes desde cero:
- Qué es una cohorte (usuarios que comparten un evento en un mismo período: registro, primera compra, primer uso de feature)
- Diferencia entre cohortes de adquisición, cohortes de comportamiento y cohortes de experimentación
- Cómo construir una tabla de retención: filas = cohortes por semana/mes, columnas = semanas desde el evento fundacional, valores = % de usuarios activos
- Cómo leer la tabla: retención en día 1, día 7, día 30 como indicadores de diferentes tipos de problemas
- El concepto de "flattening": cuándo una curva de retención se aplana y qué indica sobre el ajuste producto-mercado

**Sección 3 — Implementación del dashboard de cohortes**
Guíame para construir el dashboard paso a paso:
- Qué SQL escribir para extraer los datos de retención desde una tabla de eventos (esquema típico: user_id, event_name, event_timestamp)
- Cómo pivotear los datos para construir la tabla de cohortes en Python/Pandas o SQL
- Qué paleta de color usar en el heatmap de retención (verde intenso = alta retención, rojo = alta pérdida)
- Cómo añadir benchmarks del sector como referencia visual en el dashboard
- Cómo filtrar la vista por segmento: canal de adquisición, plan de precio, región, versión de app

**Sección 4 — Métricas complementarias de salud del producto**
Además de retención, incluye en el dashboard:
- DAU/MAU ratio como indicador de hábito (y cómo interpretar valores del 10%, 20%, 50%)
- Stickiness: porcentaje de usuarios mensuales que vuelven a diario
- Time to value: tiempo medio entre registro y primer momento de valor (y cómo reducirlo)
- Feature adoption rate: qué porcentaje de usuarios activos usa cada feature clave
- Churn predictivo: señales de comportamiento que predicen la baja (reducción de frecuencia, no uso de features de retención)

**Sección 5 — Traducción de datos a decisiones de roadmap**
Enséñame a usar el dashboard para priorizar el roadmap:
- Si la retención en D1 es baja: el problema está en el onboarding o la primera experiencia
- Si la retención en D7 cae pero D1 es alta: el producto no genera hábito suficiente en la primera semana
- Si el DAU/MAU es bajo: el caso de uso no es lo suficientemente frecuente para su categoría
- Cómo presentar los datos de cohortes a dirección para justificar inversión en retención vs adquisición

Incluye un framework de triage: dados los datos de mi dashboard, cómo decidir si el foco debe estar en acquisition, activation, retention o monetization.

**Formato de salida:**
Organiza la respuesta en cinco secciones numeradas con subsecciones claras. Incluye al menos un ejemplo de SQL para la extracción de datos de retención. Proporciona una tabla de referencia de benchmarks de retención por tipo de producto (SaaS, e-commerce, app de consumo). Añade una checklist de "preguntas que debe responder mi dashboard de producto".
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Análisis de retención y salud del producto digital',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Análisis de datos de RRHH para toma de decisiones estratégicas',
                'description'      => 'Domina el People Analytics aplicando análisis de datos y visualizaciones a las métricas de recursos humanos más relevantes: rotación, absentismo, desempeño y compensación. Aprende a construir dashboards de RRHH que hablen el idioma del negocio y justifiquen decisiones de talento con datos. Pasa de reportar el pasado a predecir riesgos de fuga.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en People Analytics con experiencia en transformación de datos de RRHH en decisiones estratégicas de talento. Guíame para construir un sistema de análisis de datos de personas que añada valor medible al negocio.

**Contexto:**
Soy profesional de RRHH en una empresa de tamaño medio (100-1.000 empleados). Tengo acceso a datos de nómina, sistema de gestión de talento, encuestas de clima y registros de formación. Quiero convertir estos datos en insights que me permitan anticiparme a problemas de talento y asesorar a dirección con rigor analítico.

**Área 1 — Métricas de rotación y retención**
Guíame para construir el análisis de rotación completo:
- Cómo calcular la tasa de rotación voluntaria, involuntaria y total (fórmulas exactas con numerador y denominador)
- Diferencia entre rotación total, rotación de alto rendimiento y rotación regrettable (la que más duele)
- Análisis de cohortes de incorporación: qué porcentaje de personas contratadas en cada trimestre sigue en la empresa a los 6, 12, 18 y 24 meses
- Coste real de la rotación: cómo calcularlo incluyendo reclutamiento, onboarding, productividad perdida y conocimiento institucional
- Visualización recomendada: heatmap de retención por cohorte de incorporación, igual que en análisis de producto

Incluye señales de alerta temprana de riesgo de fuga que debo monitorizar (cambios en comportamiento, reducción de participación, ausencias incrementadas).

**Área 2 — Análisis de absentismo y bienestar**
Diseña el módulo de análisis de absentismo:
- Cómo calcular el índice de absentismo Bradford (fórmula: S² × D, donde S = número de episodios y D = días totales) y cuándo usarlo
- Segmentación del absentismo por departamento, tipo de ausencia, día de la semana y estacionalidad
- Visualización de patrones: heatmap de ausencias por día del año para detectar estacionalidad
- Cómo distinguir absentismo sintomático de absentismo estructural
- Dashboard de bienestar: qué métricas incluir además del absentismo (NPS interno, uso del EAP, solicitudes de ajuste de carga)

**Área 3 — Análisis de desempeño y compensación**
Ayúdame a analizar la equidad y efectividad del sistema de gestión del talento:
- Distribución de calificaciones de desempeño: cómo detectar sesgos de leniencia, centralidad o halo effect
- Análisis de equidad salarial: cómo construir un modelo de regresión simple que controle por puesto, experiencia y ubicación para detectar gaps no justificados
- Matriz 9-box: cómo visualizarla y qué acciones de talento corresponden a cada cuadrante
- Correlación entre inversión en formación y mejora de desempeño: scatter plot con línea de tendencia por departamento

**Área 4 — Dashboard ejecutivo de People Analytics**
Diseña el dashboard mensual de RRHH para el comité de dirección:
- KPI de salud de plantilla: rotación LTM, tiempo medio de cobertura de vacantes, % de posiciones críticas cubiertas
- Semáforo de riesgo de talento: departamentos con alta rotación + bajo desempeño + vacantes abiertas
- Tendencia de headcount: evolución de plantilla por departamento con hitos relevantes (incorporaciones masivas, restructuraciones)
- ROI de iniciativas de RRHH: cómo medir el retorno de programas de formación, bienestar o employer branding

**Área 5 — Predictive analytics básico para RRHH**
Introduce conceptos de análisis predictivo aplicables sin ser data scientist:
- Modelo de riesgo de fuga: cómo combinar 4-5 variables (antigüedad, última evaluación, ausencias recientes, tiempo sin ascenso) en un score de riesgo simple
- Cómo comunicar predicciones con incertidumbre de forma que la dirección las tome en serio sin sobrevender la precisión
- Herramientas accesibles: desde Excel avanzado hasta Google Colab con Python básico

**Formato de salida:**
Organiza la respuesta en cinco áreas numeradas. Incluye las fórmulas exactas de cada métrica. Proporciona una tabla de benchmarks de rotación por sector. Añade una lista de las 10 preguntas que debe poder responder mi dashboard de People Analytics.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'People Analytics y decisiones de talento basadas en datos',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Visualización financiera avanzada con tablas dinámicas y gráficos',
                'description'      => 'Aprende a construir modelos financieros visuales en Excel que comuniquen la situación económica de tu empresa de forma clara y convincente. Domina las tablas dinámicas financieras, los gráficos de cascada para análisis de varianzas y los dashboards de tesorería. Transforma hojas de cálculo complejas en narrativas financieras que dirección entienda de un vistazo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO con experiencia en modelado financiero y comunicación de datos económicos a juntas directivas. Guíame para construir un sistema de visualización financiera en Excel que eleve la calidad de mis presentaciones de resultados y facilite la toma de decisiones.

**Contexto:**
Soy profesional de finanzas (controller, FP&A, CFO) en una empresa con facturación entre 2M y 50M€. Quiero modernizar la forma en que presento los datos financieros, pasando de tablas estáticas a dashboards visuales que cuenten una historia financiera clara.

**Bloque 1 — Arquitectura del modelo financiero visual**
Diseña la estructura de un libro Excel para análisis financiero ejecutivo:
- Hoja "Inputs": datos de origen (P&L, balance, cash flow) con validación de datos y protección de celdas
- Hoja "Cálculos": métricas derivadas sin fórmulas circulares, con auditoría de fórmulas habilitada
- Hoja "Dashboard Ejecutivo": KPIs principales con visualización de semáforo y sparklines
- Hoja "Análisis de Varianzas": comparación real vs presupuesto vs año anterior con código de colores
- Hoja "Proyecciones": modelo de escenarios (optimista, base, pesimista) con sliders de supuestos

Indica qué convenciones de color usar (azul para inputs manuales, negro para fórmulas, verde para vínculos externos) y por qué son importantes para la auditoría.

**Bloque 2 — Gráficos financieros especializados**
Para cada tipo de análisis financiero, indica el gráfico más efectivo y cómo construirlo:

Gráfico de cascada (waterfall): para análisis de varianzas de EBITDA (puente entre real y presupuesto mostrando cada palanca). Describe cómo construirlo en Excel con barras invisibles y etiquetas de datos.

Gráfico de semáforo de KPIs: cómo usar formato condicional con iconos para crear un panel de indicadores verde/amarillo/rojo sin necesitar tablas de datos voluminosas.

Líneas de tendencia con bandas de pronóstico: cómo mostrar resultados históricos + proyección con banda de incertidumbre usando áreas apiladas transparentes.

Gráfico de barras de mariposa: para comparar dos períodos o dos entidades simétricamente (ideal para comparar departamentos o segmentos de negocio).

Bullet chart: para mostrar el avance hacia objetivos con contexto de rangos satisfactorio/bueno/excelente, alternativa superior al simple velocímetro.

**Bloque 3 — Análisis de ratios financieros visualizado**
Guíame para construir un tablero de ratios financieros:
- Rentabilidad: ROE, ROA, ROCE, margen EBITDA, margen neto — con evolución trimestral en sparklines
- Liquidez: current ratio, quick ratio, días de cobro (DSO), días de pago (DPO), días de inventario (DIO) — con visualización del ciclo de conversión de caja
- Endeudamiento: debt/equity, debt/EBITDA, cobertura de intereses — con semáforo de niveles de riesgo
- Eficiencia operativa: rotación de activos, ingresos por empleado, coste por unidad vendida

Para cada ratio, indica el rango saludable por sector (manufacturing, servicios, retail, tech) y cómo representarlo visualmente como benchmark.

**Bloque 4 — Dashboard de tesorería**
Diseña el dashboard de gestión de cash flow:
- Previsión de tesorería a 13 semanas: barras de entradas y salidas con línea de saldo acumulado y umbral de liquidez mínima
- Análisis de antigüedad de saldos: pirámide de cobros por vencimiento (0-30, 31-60, 61-90, +90 días)
- Calendario de pagos comprometidos: gráfico de barras apiladas por categoría de gasto (personal, proveedores, deuda financiera, impuestos)
- Indicador de días de cash runway: cuántos días puede operar la empresa con el efectivo actual al nivel de burn actual

**Bloque 5 — Presentación financiera para no financieros**
Ayúdame a adaptar los datos financieros para audiencias no expertas (comité de dirección, consejo):
- Cómo traducir ratios técnicos a lenguaje de negocio (no "current ratio de 1.8", sino "por cada euro que debemos a corto plazo, tenemos 1,80€ disponibles")
- Regla del "so what": cómo añadir la implicación de cada dato debajo de cada gráfico
- Qué no mostrar en el dashboard ejecutivo (evitar abrumar con detalle operativo)
- Cómo estructurar una presentación de resultados de 15 minutos usando el dashboard

**Formato de salida:**
Organiza la respuesta en cinco bloques con subsecciones. Incluye instrucciones paso a paso para construir el gráfico de cascada en Excel. Proporciona una tabla de ratios financieros con fórmulas, rangos saludables por sector e interpretación en lenguaje de negocio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Modelado financiero y presentación de resultados',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Análisis de datos jurídicos y visualización de tendencias legales',
                'description'      => 'Aprende a extraer inteligencia accionable de los datos jurídicos de tu organización: litigiosidad, plazos procesales, tipología de asuntos y coste de servicios legales. Construye dashboards de Legal Analytics que justifiquen decisiones estratégicas ante dirección. Convierte el departamento legal de centro de coste en socio estratégico del negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director jurídico con experiencia en Legal Analytics y gestión de datos legales. Guíame para construir un sistema de análisis y visualización de datos jurídicos que permita al departamento legal demostrar su valor estratégico y optimizar su gestión.

**Contexto:**
Soy responsable de un departamento legal interno (in-house counsel) o gestor de un despacho de abogados con múltiples clientes. Tengo datos de asuntos, proveedores externos, costes, plazos y resultados dispersos en varios sistemas. Quiero centralizar este conocimiento en dashboards que faciliten la toma de decisiones.

**Módulo 1 — Inventario y clasificación de asuntos**
Diseña un sistema de clasificación de asuntos legales para análisis:
- Taxonomía de asuntos: categorías principales (litigioso vs no litigioso), subcategorías por área (laboral, mercantil, fiscal, regulatorio, contractual) y nivel de complejidad
- Campos de datos clave a capturar por asunto: fecha de apertura, tipo, área, cliente/empresa involucrada, abogado responsable, jurisdicción, importe en disputa, coste acumulado, probabilidad de resultado favorable, fecha de resolución, resultado
- Cómo normalizar datos históricos dispersos en diferentes formatos para un análisis unificado
- Métricas de gestión de cartera: asuntos activos vs cerrados, tiempo medio de resolución por tipo, tasa de éxito por área y abogado

**Módulo 2 — Dashboard de Legal Analytics**
Diseña el dashboard de gestión jurídica con estas vistas:
- Vista de cartera activa: número de asuntos por área, estado y abogado responsable (gráfico de árbol o barras apiladas)
- Mapa de calor de riesgo: plot con eje X = probabilidad de resultado adverso, eje Y = importe en riesgo; cuadrante de alta probabilidad + alto importe = prioridad crítica
- Tendencia de nuevos asuntos: serie temporal mensual por categoría para detectar estacionalidad o incrementos preocupantes
- Benchmark de plazos: comparación entre plazo medio real y plazo objetivo por tipo de asunto
- Panel de proveedores externos: coste acumulado, tasa de éxito y ratio de eficiencia (resultado obtenido / coste) por firma externa

**Módulo 3 — Análisis de costes del departamento legal**
Guíame para construir el análisis de gasto jurídico:
- Desglose de coste total legal: interno (coste de equipo, tiempo) vs externo (honorarios de firma, peritos, tasas judiciales)
- Coste por asunto: cómo distribuir costes fijos del departamento entre asuntos activos para tener un coste real por materia
- Evolución del spend legal como porcentaje de ingresos: benchmark y alertas si supera el umbral del sector
- Análisis de eficiencia de firmas externas: horas facturadas vs horas estimadas, coste por resultado, calidad percibida
- ROI de las acciones preventivas: estimación del coste de litigios evitados por la inversión en compliance y contratos sólidos

**Módulo 4 — Análisis de tendencias regulatorias**
Ayúdame a monitorizar el entorno normativo con datos:
- Cómo construir un tracker de cambios regulatorios: fuente (BOE, DOUE, resoluciones de autoridades), fecha, impacto estimado (alto/medio/bajo), área afectada, acción requerida
- Visualización de roadmap regulatorio: diagrama de Gantt con plazos de adaptación por normativa
- Dashboard de compliance: estado de adaptación a cada normativa relevante (semáforo) con fecha límite y responsable
- Métricas de gestión de incidencias: número de incidencias de compliance por período, tiempo de resolución, impacto económico de sanciones

**Módulo 5 — Comunicación del valor legal a dirección**
Diseña la presentación trimestral del departamento legal al comité de dirección:
- Slide 1: Semáforo de riesgo legal (riesgos críticos activos con coste potencial)
- Slide 2: Evolución del gasto legal con comparativa vs presupuesto y vs competencia
- Slide 3: Resultados obtenidos en litigios (tasa de éxito, importe recuperado/defendido)
- Slide 4: Logros del período (contratos negociados, ahorro generado, riesgos mitigados)
- Slide 5: Alertas regulatorias pendientes con plazo y plan de acción

Para cada slide, describe cómo cuantificar el valor del departamento legal en términos de dinero protegido, riesgos evitados y eficiencia ganada.

**Formato de salida:**
Organiza la respuesta en cinco módulos con subsecciones claras. Proporciona una estructura de base de datos (campos y tipos) para el registro de asuntos. Incluye una fórmula para calcular el ROI del departamento legal. Añade una lista de los 8 KPIs esenciales de Legal Analytics con su definición y fórmula de cálculo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Legal Analytics y gestión estratégica del departamento jurídico',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Dashboard de métricas de Customer Success y análisis de churn',
                'description'      => 'Construye un dashboard completo de Customer Success que te permita identificar clientes en riesgo de abandono antes de que ocurra, medir el impacto del equipo de CS en la retención y demostrar el ROI de tu programa de éxito del cliente. Pasa de gestionar por incendios a gestionar por datos con un sistema de health scoring propio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia en análisis de datos de retención y construcción de programas de CS escalables. Ayúdame a diseñar un sistema de métricas y visualización que convierta a mi equipo de CS en una máquina de retención basada en datos.

**Contexto:**
Lidero o formo parte de un equipo de Customer Success en una empresa SaaS o de servicios recurrentes. Quiero abandonar la gestión reactiva (responder cuando el cliente se queja o cancela) y pasar a una gestión proactiva basada en señales de salud del cliente.

**Área 1 — Métricas fundamentales de Customer Success**
Explícame las métricas esenciales del ecosistema CS y cómo calcularlas:

Net Revenue Retention (NRR): cómo calcularlo (ingresos al final del período de los clientes que existían al inicio / ingresos al inicio) y por qué es la métrica de salud más importante de un SaaS. Qué significa un NRR >100%.

Gross Revenue Retention (GRR): diferencia con NRR, cómo calcularlo y cuándo es más relevante para la conversación con inversores.

Customer Churn Rate: tasa de abandonos por número de clientes y por ingresos (Revenue Churn), diferencias y cuándo usar cada una. Fórmula exacta y cómo anualizarla desde datos mensuales.

Logo Retention: porcentaje de cuentas que renuevan, y cómo segmentarlo por tamaño, sector y antigüedad para identificar patrones.

Time to Value (TTV): tiempo entre el inicio de la suscripción y el primer momento en que el cliente logra el resultado que esperaba. Cómo medirlo y cómo reducirlo.

**Área 2 — Sistema de Health Scoring**
Diseña un modelo de customer health score propio:
- Qué variables incluir: uso del producto (frecuencia de login, features utilizadas, usuarios activos / licencias contratadas), engagement con CS (respuesta a QBRs, tickets de soporte, formación completada), indicadores de expansión (añadir usuarios, subir de plan) e indicadores de riesgo (reducción de uso, impagos, escalaciones)
- Cómo ponderar cada variable según tu tipo de producto (asigna pesos por importancia relativa)
- Cómo normalizar cada variable en una escala 0-100 para crear un score compuesto
- Cómo segmentar clientes en categorías: Verde (sano), Amarillo (en observación), Naranja (en riesgo), Rojo (crítico)
- Cómo calibrar el modelo comparando los scores históricos con los clientes que efectivamente cancelaron

**Área 3 — Dashboard de CS operativo**
Diseña el dashboard semanal del equipo de CS:
- Vista de cartera: distribución de clientes por health score (gráfico de distribución o tabla segmentada) con variación respecto a la semana anterior
- Lista de prioridades de la semana: top 10 cuentas que han empeorado su health score o tienen señales de riesgo, ordenadas por impacto en ARR
- Actividad del equipo: reuniones completadas, QBRs realizados, tickets resueltos por CSM, cobertura de cartera
- Expansiones y riesgos: pipeline de upsell por CSM, renovaciones próximas a 30/60/90 días y su health score actual
- Cohort de onboarding activo: estado de cada cliente en proceso de implementación con semáforo de progreso

**Área 4 — Análisis de churn: ¿por qué se van los clientes?**
Construye un framework de análisis de churn:
- Metodología de exit interviews: qué preguntar, cómo codificar las respuestas en categorías (precio, competidor, falta de uso, cambio interno, fallo del producto)
- Visualización de razones de churn: barras horizontales ordenadas por frecuencia, segmentadas por tamaño de cliente y por período
- Análisis de los 90 días previos al churn: qué señales de comportamiento preceden consistentemente a la cancelación en tu producto
- Churn cohort analysis: qué cohortes de adquisición (por canal, mes, plan inicial) tienen mayor tasa de churn y qué las diferencia

**Área 5 — Demostración del ROI del equipo de CS**
Ayúdame a cuantificar y comunicar el impacto del equipo de CS:
- Cómo calcular el ARR protegido por las intervenciones del equipo (clientes rescatados × ARR promedio)
- Cómo medir la contribución del CS a la expansión (upsell y cross-sell generados)
- Fórmula de ROI del programa de CS: (ARR retenido + ARR expandido - coste del equipo) / coste del equipo
- Cómo presentar estos datos al CEO/CFO para justificar inversión en crecimiento del equipo

**Formato de salida:**
Organiza la respuesta en cinco áreas numeradas con subsecciones. Incluye las fórmulas exactas de todas las métricas. Proporciona un ejemplo de tabla de health scoring con pesos y normalización. Añade una lista de los 5 errores más comunes en la construcción de sistemas de CS analytics.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Retención de clientes y gestión de churn con datos',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Análisis de ingresos y rentabilidad freelance con visualización de datos',
                'description'      => 'Aprende a construir tu propio sistema de análisis financiero freelance que te muestre en qué proyectos, clientes y servicios ganas más dinero por hora real trabajada. Detecta los clientes que drenan tu tiempo y rentabilidad. Toma decisiones de pricing y aceptación de proyectos basadas en datos históricos propios.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor de negocio para freelancers con experiencia en finanzas y análisis de rentabilidad de servicios profesionales independientes. Ayúdame a construir un sistema de análisis de mi negocio freelance que me permita entender con precisión dónde gano dinero de verdad y dónde estoy regalando mi tiempo.

**Contexto:**
Soy freelancer con una cartera activa de 5-15 clientes simultáneos y varios tipos de proyectos o servicios. Facturo en euros o dólares y llevo mis registros en hojas de cálculo o herramientas básicas. Quiero modernizar mi gestión y empezar a tomar decisiones de negocio con datos propios en lugar de intuición.

**Bloque 1 — Sistema de registro de tiempo y proyectos**
Diseña el sistema de captura de datos para un freelancer:
- Estructura de hoja de registro diario: columnas necesarias (fecha, cliente, proyecto, descripción de tarea, horas reales, horas facturadas, tarifa aplicada, facturado sí/no)
- Importancia de registrar el tiempo no facturable: reuniones de ventas, propuestas no ganadas, administración, formación. Cómo asignarlo como overhead
- Cómo categorizar el trabajo: facturable directo, facturable indirecto, overhead, inversión en el negocio
- Rutina de registro: cómo hacer el seguimiento de tiempo de forma sostenible sin herramientas costosas (desde un timer en el móvil hasta Toggl gratuito)

**Bloque 2 — Métricas de rentabilidad freelance**
Explícame las métricas que debo calcular mensualmente:

Tarifa horaria efectiva real: ingresos del período / horas totales trabajadas (incluyendo no facturables). La diferencia entre mi tarifa nominal y mi tarifa efectiva revela cuánto overhead cargo sin cobrar.

Rentabilidad por cliente: ingresos de ese cliente / horas dedicadas a ese cliente (incluyendo gestión, reuniones y revisiones). Cómo comparar clientes entre sí para identificar los más rentables.

Rentabilidad por tipo de servicio: si ofrezco varios servicios (diseño, consultoría, formación), cuál tiene mayor margen por hora real.

Tasa de aceptación de propuestas: propuestas ganadas / propuestas enviadas. Cómo calcular el coste de cada propuesta no ganada y su impacto en mi tarifa efectiva.

Días de cobro (DSO): tiempo medio entre la entrega del trabajo y el cobro. Cómo reducirlo y su impacto en el flujo de caja.

**Bloque 3 — Dashboard visual del negocio freelance**
Diseña el dashboard mensual que debo construir:
- Gráfico de ingresos mensuales: barras con línea de objetivo, coloradas por cliente para ver concentración
- Treemap de distribución de horas: áreas proporcionales al tiempo dedicado a cada cliente/proyecto, coloreadas por rentabilidad (verde = alta tarifa efectiva, rojo = baja)
- Matriz de clientes: scatter plot con eje X = ingresos totales del cliente, eje Y = tarifa efectiva por hora; cuadrante superior derecho = clientes estrella; inferior derecho = volumen pero bajo margen; superior izquierdo = altamente rentable pero pequeño
- Evolución de la tarifa efectiva: línea temporal mes a mes para ver si estoy mejorando o deteriorando mi rentabilidad
- Indicadores de salud del negocio: % de ingresos del cliente más grande (riesgo de concentración), pipeline activo de propuestas, meses de runway con los ingresos actuales

**Bloque 4 — Análisis de pricing y decisiones de aceptación**
Ayúdame a usar mis datos históricos para tomar mejores decisiones:
- Cómo calcular mi tarifa mínima aceptable: costes fijos mensuales + coste de vida + ahorro objetivo / horas facturables disponibles al mes
- Cómo usar el historial de tiempo real por tipo de proyecto para estimar proyectos futuros con más precisión y evitar subestimaciones
- Señales de que debo subir mis tarifas: tarifa efectiva estancada, lista de espera, alta tasa de aceptación de propuestas
- Cómo hacer el análisis de "disparar al cliente": cuándo los ingresos que aporta un cliente no justifican el estrés, el tiempo de gestión o la fricción que genera

**Bloque 5 — Previsión y planificación financiera freelance**
Diseña un modelo de previsión de ingresos para los próximos 3 meses:
- Cómo construir un forecast con tres escenarios: pesimista (solo proyectos confirmados), base (confirmados + probabilidad alta), optimista (todo el pipeline activo)
- Previsión de tesorería mensual: cuándo entran los pagos versus cuándo salen los gastos fijos
- Cómo establecer una reserva de emergencia adecuada para un freelancer (meses recomendados y cómo calcularlos basándome en la volatilidad histórica de mis ingresos)
- Métricas de crecimiento: cómo medir si mi negocio freelance está creciendo en valor (no solo en volumen): tarifa efectiva creciente, menor concentración de clientes, mayor % de trabajo de alto margen

**Formato de salida:**
Organiza la respuesta en cinco bloques numerados. Incluye las fórmulas exactas de cada métrica con un ejemplo numérico ficticio. Proporciona la estructura completa de la hoja de registro de tiempo (nombres de columnas y tipos de dato). Añade una checklist mensual de revisión del negocio freelance de no más de 10 puntos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Gestión financiera y rentabilidad del negocio freelance',
                'vote_score'       => 39,
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
