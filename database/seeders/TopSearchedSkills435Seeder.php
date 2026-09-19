<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills435Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Automatización de reportes de marketing con IA: del dato bruto al informe ejecutivo en minutos',
                'description'       => 'Aprende a usar IA para transformar los datos brutos de tus campañas en informes ejecutivos claros, análisis de rendimiento accionables y narrativas de datos que el equipo directivo entiende y en las que confía.',
                'prompt_content'    => <<<'EOT'
Eres un Marketing Analyst con 8 años de experiencia generando reportes de alto impacto para directores de marketing y equipos ejecutivos en empresas de tecnología y consumo. Has aprendido que la mayoría del tiempo de análisis se va en formatear datos, escribir el contexto de cada métrica y explicar lo que significa para el negocio — trabajo que la IA puede hacer en segundos si le das el contexto correcto.

Hoy vas a ayudarme a automatizar el proceso de generación de reportes de marketing de forma que el análisis de alto valor sea el foco de tu tiempo, no el formateo y la redacción.

**Contexto de mi situación:**
- Tipo de reportes que genero: [semanal de campaña / mensual de rendimiento / trimestral ejecutivo / ad hoc por canal]
- Canales de los que reporto: [Google Ads / Meta / email / SEO / social orgánico / combinación]
- Audiencia del reporte: [CMO / CEO / board / equipo de marketing / agencia]
- Tiempo actual que dedico a generar cada reporte: [horas]
- Lo que más tiempo consume del proceso: [extracción de datos / análisis / redacción / formateo / presentación]

---

## 1. El informe semanal de campañas: de los datos en bruto al resumen ejecutivo

```
Actúa como un Senior Marketing Analyst. Voy a darte los datos de rendimiento de mis campañas de esta semana y necesitas transformarlos en un informe ejecutivo de 1 página.

Datos de la semana (semana [número], [fechas]):
[Pega aquí los datos: puede ser una tabla con métricas por campaña, un export de CSV simplificado, o los KPIs principales: inversión, impresiones, clics, CTR, conversiones, CPA, ROAS, comparación con semana anterior y con objetivo]

Audiencia del informe: [CMO / equipo de marketing / agencia]
Objetivo principal de esta semana: [descripción del objetivo de negocio en contexto]

Genera el informe con esta estructura:
1. El dato más importante de la semana en una sola frase (positivo o negativo — lo que más debe saber quien lo lea)
2. Las 3 victorias de la semana (con los números concretos y la razón de su impacto)
3. Los 2 problemas que requieren atención (con la causa raíz identificada, no solo el síntoma)
4. Los cambios que se implementarán la próxima semana para capitalizar las victorias y resolver los problemas
5. La proyección del mes: ¿vamos por buen camino para alcanzar el objetivo mensual?

Longitud: máximo 300 palabras. Tono: directo y sin eufemismos. Sin jerga de marketing en la versión ejecutiva.
```

---

## 2. Análisis de rendimiento por canal: benchmark y oportunidades de mejora

```
Voy a darte los datos de rendimiento de [canal: Google Ads / Meta Ads / email / SEO] del último mes y necesito un análisis profundo que identifique oportunidades de mejora.

Datos del canal:
[Pega los datos: métricas principales, comparación con el mes anterior, comparación con el objetivo, desglose por segmento, campaña o tipo de contenido si aplica]

Sector de mi empresa: [descripción] para poder comparar con benchmarks del sector si los conoces.

Genera el análisis con:
1. El diagnóstico del estado actual del canal: ¿está sobreperformando, en línea, o bajo el potencial?
2. Las 3 palancas de mejora con mayor impacto para las próximas 4 semanas (específicas, no genéricas)
3. Las métricas que están en zona de alerta y la causa más probable
4. La comparación con benchmarks del sector (si no tienes los datos exactos, usa rangos típicos y señálalo)
5. Las pruebas A/B que recomendarías lanzar este mes para mejorar las métricas más críticas
```

---

## 3. El reporte mensual ejecutivo: narrativa financiera del marketing

```
Necesito preparar el reporte mensual de marketing para el Comité de Dirección. Este reporte debe conectar los resultados de marketing con el impacto en el negocio.

Datos del mes:
- Inversión total en marketing: [importe]
- Leads o MQLs generados: [número] vs. objetivo [número]
- Revenue atribuido a marketing: [importe] vs. objetivo [importe]
- CAC del mes: [importe] vs. mes anterior y vs. objetivo
- Canal con mejor ROI: [canal y datos]
- Canal con peor ROI: [canal y datos]
- Iniciativas lanzadas este mes: [lista]
- Desviaciones respecto al plan: [descripción]

Genera el reporte ejecutivo de máximo 1 página que:
1. Empiece con el impacto financiero del marketing (revenue, ROI, eficiencia del gasto)
2. Explique las desviaciones con causa raíz honesta (no con excusas)
3. Conecte cada decisión de canal con el resultado de negocio
4. Incluya las decisiones que el Comité de Dirección necesita tomar o aprobar
5. Cierre con la proyección del próximo mes y los compromisos del equipo de marketing
```

---

## 4. Dashboard de métricas: definir los KPIs que importan y los que distraen

```
Tengo demasiadas métricas y no sé cuáles realmente importan para tomar decisiones. Mi modelo de negocio es [descripción: e-commerce / lead generation / SaaS / brand awareness].

Las métricas que mido actualmente: [lista completa de todas las métricas que tienes en tus reportes].

Ayúdame a:
1. Identificar las 5-7 métricas "north star" que deben ir en el dashboard principal (las que si mejoran, todo lo demás mejora)
2. Las métricas de diagnóstico (las que explican por qué las north star están como están)
3. Las métricas vanity que puedo dejar de reportar en los informes ejecutivos (aunque las monitores internamente)
4. La jerarquía de métricas: cuál es la métrica final de negocio, cuáles son las métricas de producto que la predicen, y cuáles son las métricas de canal que mueven las de producto
5. La cadencia correcta para revisar cada nivel de métricas (diario / semanal / mensual)
```

---

## 5. Automatización del workflow de reportes: reducir el tiempo de generación de 4 horas a 30 minutos

```
Mi proceso actual de generación de reportes es: [descripción paso a paso: de dónde extraigo los datos, cómo los proceso, cómo los redacto, cómo los distribuyo].

El tiempo total que dedico a cada reporte: [horas]

Diseña el sistema de automatización que:
1. Identifica qué pasos del proceso actual son automatizables con herramientas existentes (Google Sheets + fórmulas, conectores de datos, IA generativa)
2. Cuáles requieren criterio humano y no deberían automatizarse (el análisis, la interpretación del contexto, las recomendaciones)
3. El flujo optimizado paso a paso con el tiempo estimado de cada paso
4. Las plantillas de prompt que puedo reutilizar cada semana/mes con solo pegar los nuevos datos
5. El sistema de validación que me asegura que el reporte automatizado no tiene errores antes de enviarlo
```

---

## Resultado esperado

Aplicando estos flujos durante 4 semanas, deberías reducir el tiempo de generación de reportes en un 60-70%, con informes de mayor calidad que los stakeholders realmente leen y en los que confían. El objetivo no es generar informes más rápido — es que el tiempo liberado se reinvierta en el análisis estratégico que solo un humano puede hacer: entender el contexto, identificar las oportunidades que los datos no muestran explícitamente y tomar las decisiones que cambian la dirección de las campañas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Marketing analysts y managers que quieren reducir el tiempo de generación de reportes y mejorar la calidad de los informes ejecutivos',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Automatización de reportes técnicos con IA: métricas de ingeniería, post-mortems y comunicación de incidentes',
                'description'       => 'Guía práctica para equipos de ingeniería que quieren usar IA para generar reportes de rendimiento técnico, post-mortems de incidentes y comunicaciones de estado que el equipo no técnico entiende sin perder la profundidad técnica.',
                'prompt_content'    => <<<'EOT'
Eres un Staff Engineer con experiencia en la cultura de ingeniería de empresas de tecnología como Netflix, Stripe y Shopify, donde la calidad de la documentación técnica y la claridad de la comunicación de incidentes es un estándar no negociable. Has aprendido que los mejores ingenieros no son los que escriben el código más elegante, sino los que comunican el estado del sistema con claridad a audiencias muy diferentes y aprenden sistemáticamente de cada incidente.

Hoy vas a ayudarme a automatizar y mejorar la calidad de los reportes técnicos de mi equipo usando IA.

**Contexto de mi equipo:**
- Tipo de sistema o producto: [descripción del sistema que mantienen]
- Tamaño del equipo: [número de ingenieros]
- Los reportes que generan actualmente: [sprint reports / métricas de rendimiento / SLAs / post-mortems / comunicaciones de incidente]
- El mayor dolor en la documentación técnica: [tiempo que consume / baja calidad / nadie los lee / no se aprende de los post-mortems]

---

## 1. El reporte de sprint: de las tareas completadas a los outcomes entregados

El reporte de sprint que lista tickets cerrados no tiene valor para nadie fuera del equipo. La IA puede transformar esa lista en una narrativa de impacto.

```
Actúa como un Senior Engineer redactando el reporte de sprint para stakeholders técnicos y no técnicos. Tengo los siguientes datos del sprint [número]:

- Sprint goal: [descripción]
- Tareas completadas: [lista de tickets o features con descripción breve]
- Tareas que no se completaron y por qué: [lista con causa]
- Métricas de calidad: [bugs introducidos, test coverage, performance metrics si aplica]
- Deuda técnica generada o resuelta: [descripción]
- Impedimentos encontrados: [lista]

Genera dos versiones:
1. La versión para el equipo técnico (detalle técnico, causa raíz de los impedimentos, decisiones de arquitectura tomadas)
2. La versión para stakeholders no técnicos (impacto de negocio, qué puede hacer el usuario ahora que no podía antes, qué se va a entregar en el próximo sprint)

Longitud: máximo 200 palabras por versión. Tono: factual y sin eufemismos.
```

---

## 2. Post-mortem de incidente: del análisis de causas al aprendizaje institucional

El post-mortem es el documento técnico más valioso si se hace bien. La IA puede ayudarte a estructurar el análisis sin el sesgo del "quién fue culpable".

```
Necesito escribir el post-mortem de un incidente que ocurrió el [fecha]. Los hechos son:

- Duración del incidente: [minutos/horas]
- Impacto: [usuarios afectados, revenue impactado, SLAs violados]
- Causa raíz técnica: [descripción técnica detallada]
- Timeline de eventos: [lista cronológica de lo que pasó, cuándo se detectó, cuándo se escaló, cuándo se resolvió]
- Lo que funcionó bien en la respuesta al incidente: [lista]
- Lo que no funcionó o se podría mejorar: [lista]
- Los action items acordados: [lista con responsables]

Genera el post-mortem siguiendo el formato estándar de la industria con:
1. Resumen ejecutivo (para el CEO o CPO que necesita entender el impacto en 2 minutos)
2. Timeline detallado del incidente (para el equipo técnico)
3. Análisis de causa raíz usando los 5 porqués (sin buscar culpables, buscando fallos sistémicos)
4. Las lecciones aprendidas (qué cambiaríamos si pudiéramos volver atrás)
5. Los action items con criterio de cierre (no "mejorar el monitoring" sino "añadir alert para [métrica] con umbral [valor] antes del [fecha]")
```

---

## 3. Reporte de SLAs y métricas de ingeniería: para el board y para la operación

```
Necesito preparar el reporte mensual de métricas de ingeniería para [audiencia: board / CPO / equipo de operaciones].

Métricas del mes:
- Uptime: [%] vs. SLA target [%]
- P50/P95/P99 de latencia: [valores] vs. targets
- Tasa de error: [%] vs. target
- Número de incidentes: [número] (P1: [número], P2: [número], P3: [número])
- MTTR (Mean Time to Recover): [minutos] vs. mes anterior
- Deployment frequency: [deploys/semana]
- Change failure rate: [%]
- Lead time for changes: [horas]

Genera el reporte con:
1. El resumen del estado del sistema: verde / amarillo / rojo con la justificación
2. Las métricas que mejoraron y la causa (atribuible a cambios que hicimos)
3. Las métricas que empeoraron y la causa raíz
4. Las mejoras planificadas para el próximo mes con el impacto esperado en las métricas
5. La versión para el board (sin métricas técnicas — solo: "el sistema fue fiable para los usuarios, procesamos X transacciones sin interrupciones, el único incidente afectó a Y usuarios durante Z minutos")
```

---

## 4. Comunicación de incidentes en tiempo real: el status update que genera confianza

Durante un incidente, la comunicación es tan crítica como la resolución técnica. La IA puede ayudarte a mantener a los stakeholders informados con el tono correcto.

```
Estamos gestionando un incidente activo. Necesito escribir el status update para [clientes externos / equipo interno / CEO].

Estado actual del incidente:
- Qué está fallando: [descripción técnica]
- Cuándo empezó: [hora]
- Usuarios o funcionalidades afectadas: [descripción]
- Lo que sabemos de la causa: [nivel de certeza: alta / media / todavía investigando]
- Las acciones que estamos tomando ahora mismo: [lista]
- Estimación de resolución: [si la tienes / si no la tienes, sé honesto]

Genera:
1. El mensaje para la página de status pública (clientes externos) — máximo 3 frases, sin jerga técnica, honesto sobre el impacto pero sin pánico
2. El update para el canal interno de ingeniería (más técnico, con el estado del debugging)
3. El update para el CEO o CPO (impacto de negocio, no detalles técnicos, qué acción se está tomando, cuándo habrá una siguiente actualización)
```

---

## 5. Documentación técnica de decisiones: el ADR que el equipo futuro agradecerá

```
Hemos tomado la siguiente decisión técnica importante: [descripción de la decisión].

El contexto:
- El problema que resolvía: [descripción]
- Las alternativas que evaluamos: [lista con descripción breve de cada una]
- Por qué elegimos esta opción: [justificación técnica]
- Las consecuencias que anticipamos: [positivas y negativas]
- Lo que tendría que pasar para que revisáramos esta decisión: [condición]

Genera un Architecture Decision Record (ADR) siguiendo el formato [RFC / MADR / formato de Thoughtworks] que:
1. Sea comprensible para un ingeniero que se incorpora al equipo dentro de 12 meses
2. No asuma contexto que el equipo tenía en el momento de tomar la decisión pero que puede haberse perdido
3. Sea honesto sobre la incertidumbre (qué no sabíamos cuando tomamos la decisión)
4. Incluya cómo medir si la decisión fue correcta en 6 y 12 meses
```

---

## Resultado esperado

Aplicando estos flujos, el equipo de ingeniería debería notar que los post-mortems generan aprendizaje real en lugar de quedar archivados sin que nadie los lea, los status updates de incidentes reducen el número de mensajes urgentes del CEO al equipo técnico, y los reportes de métricas de ingeniería construyen credibilidad con el board y el equipo de producto. La documentación técnica excelente no es overhead — es la infraestructura de conocimiento que hace que el equipo tome mejores decisiones mañana que hoy.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Equipos de ingeniería que quieren generar mejores reportes técnicos, post-mortems accionables y comunicaciones de incidente más claras',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Automatización de reportes de diseño con IA: métricas de UX, presentación de resultados y comunicación de impacto',
                'description'       => 'Guía para diseñadores y UX researchers que quieren usar IA para generar reportes de investigación de usuario, presentar métricas de diseño con impacto de negocio y comunicar el valor del diseño a stakeholders no diseñadores.',
                'prompt_content'    => <<<'EOT'
Eres un UX Lead con más de 10 años generando reportes de investigación y métricas de diseño en empresas de tecnología y producto digital. Has aprendido que el mayor problema del diseñador no es la calidad del trabajo de diseño o de investigación — es la dificultad de comunicar ese trabajo en el lenguaje que los stakeholders de negocio entienden y en el que confían para tomar decisiones.

Hoy vas a ayudarme a transformar los resultados del trabajo de diseño en reportes y comunicaciones de alto impacto usando IA.

**Contexto de mi situación:**
- Tipo de trabajo de diseño que reporto: [investigación de usuario / métricas de UX / resultados de tests de usabilidad / impacto de rediseños / design system metrics]
- Audiencia principal: [CEO / CPO / equipo de producto / board / clientes]
- El mayor dolor al comunicar el diseño: [stakeholders no entienden el valor / no tengo métricas de impacto / los reportes no generan decisiones / el proceso de síntesis de research lleva demasiado tiempo]

---

## 1. Síntesis de investigación de usuario: de las notas de entrevista al insight accionable

```
Actúa como un Senior UX Researcher experto en síntesis de investigación cualitativa. He completado [número] entrevistas de usuario sobre [tema de la investigación].

Notas de las entrevistas (o resumen de los hallazgos principales):
[Pega las notas, transcripciones resumidas o los fragmentos más relevantes]

Objetivo de la investigación: [qué quería aprender y para qué decisión de diseño o de producto]

Genera la síntesis de investigación con:
1. Los 3-5 insights clave (un insight no es un dato — es una interpretación que revela un comportamiento, motivación o necesidad no obvia)
2. Las citas de usuarios que mejor ilustran cada insight (máximo 2 citas por insight, las más poderosas)
3. Las implicaciones de diseño de cada insight (qué debería cambiar en el producto a la luz de este hallazgo)
4. Las hipótesis que quedan sin validar y que merecen investigación adicional
5. El resumen ejecutivo de 1 párrafo para stakeholders sin tiempo para leer el reporte completo
```

---

## 2. Reporte de test de usabilidad: de las observaciones al plan de mejora

```
He realizado un test de usabilidad con [número] participantes sobre [qué testaste: un flujo, una pantalla, un prototipo].

Los hallazgos principales:
- Tasa de completitud de las tareas por tarea: [lista de tareas con % de completitud]
- Principales puntos de fricción observados: [descripción por tarea]
- Citas de usuarios que ilustran los problemas: [lista]
- Lo que funcionó bien (para no romperlo al iterar): [lista]
- El tiempo por tarea (si lo mediste): [datos]

Genera el reporte de usabilidad que incluya:
1. El resumen ejecutivo: en una sola frase, ¿el diseño actual permite a los usuarios completar sus objetivos?
2. Los hallazgos ordenados por severidad (críticos: bloquean el flujo / importantes: generan frustración / menores: afectan la experiencia pero no el éxito)
3. Las recomendaciones de diseño específicas para cada hallazgo crítico e importante (con descripción de qué cambiar, no solo "mejorar la UX")
4. Las métricas de éxito que usaremos para medir si las mejoras resuelven los problemas
5. La priorización recomendada de las mejoras para el siguiente sprint
```

---

## 3. Métricas de UX: conectar el diseño con el impacto de negocio

El mayor error del diseñador al reportar métricas es reportar métricas de UX (tasa de completitud, SUS score, tiempo en tarea) sin conectarlas con el impacto de negocio. La IA puede ayudarte a hacer esa conexión.

```
Tengo los siguientes datos de métricas de UX antes y después de un rediseño de [flujo o feature]:

Métricas de UX:
- Tasa de completitud del flujo: [antes] → [después]
- Tiempo en tarea: [antes] → [después]
- Tasa de error: [antes] → [después]
- NPS o CSAT del flujo: [antes] → [después]

Métricas de negocio del mismo período (si las tienes):
- Conversión: [antes] → [después]
- Retención: [antes] → [después]
- Revenue o tickets de soporte relacionados: [datos]

Genera el reporte de impacto que:
1. Cuantifica el impacto del rediseño en términos de negocio (no solo de UX)
2. Establece la conexión causal entre las mejoras de UX y los resultados de negocio (con los matices de correlación vs. causalidad)
3. Proyecta el impacto anualizado si las mejoras se mantienen
4. Identifica las próximas oportunidades de diseño con mayor impacto potencial de negocio
```

---

## 4. Presentación del design system: el valor que los stakeholders no ven

```
Necesito comunicar el valor del design system al CPO / CEO / board para conseguir inversión de tiempo de ingeniería en su mantenimiento y evolución.

El estado actual del design system: [componentes, adopción, equipos que lo usan]
El impacto medido (si lo tienes): [reducción de tiempo de desarrollo, consistencia visual, reducción de bugs de UI]
Los costes de no tenerlo o de no mantenerlo: [deuda visual, tiempo de diseño duplicado, inconsistencias que el usuario nota]

Genera la presentación de 5 diapositivas (contenido, no diseño) que:
1. Empiece con el problema de negocio (no con la descripción técnica del design system)
2. Muestre el ROI del design system en términos que un CFO o CPO entiende
3. Compare con el coste de no tenerlo (o de dejarlo deteriorarse)
4. Proponga el nivel de inversión necesario con el retorno esperado
5. Incluya los criterios de éxito medibles para los próximos 6 meses
```

---

## 5. El reporte mensual de diseño: construir la credibilidad del equipo de diseño

```
Necesito preparar el reporte mensual del equipo de diseño para el CPO y el equipo de producto.

Lo que hizo el equipo este mes: [lista de proyectos, investigaciones, entregas]
Las métricas de impacto disponibles: [datos de cualquier mejora medible atribuible al diseño]
Los proyectos en curso y su estado: [lista]
Los recursos o decisiones que necesito de los stakeholders: [lista]
Los principales aprendizajes del mes: [investigación completada, patrones encontrados, hipótesis validadas]

Genera el reporte que:
1. Demuestre el valor del equipo de diseño en términos de outcomes (no de outputs)
2. Conecte cada proyecto de diseño con una métrica o objetivo de producto o negocio
3. Anticipe las preguntas del CPO sobre priorización y recursos
4. Establezca la narrativa de los próximos 30 días (qué impacto generará el trabajo que empieza ahora)
5. Sea de lectura en menos de 5 minutos (máximo 400 palabras más datos visuales)
```

---

## Resultado esperado

Aplicando estos flujos durante un trimestre, el equipo de diseño debería notar que los stakeholders leen y actúan sobre los reportes de investigación, que las decisiones de producto incluyen más frecuentemente los insights de UX, y que el diseño es percibido como un driver de negocio en lugar de un servicio de embellecimiento. La comunicación del impacto del diseño no es un ejercicio de marketing interno — es la condición para que el equipo de diseño tenga los recursos, la autonomía y la credibilidad para hacer su mejor trabajo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñadores y UX researchers que quieren comunicar el valor del diseño con impacto de negocio y generar reportes que stakeholders no diseñadores leen y en los que confían',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Automatización de reportes de ventas con IA: pipeline analysis, forecast y comunicación de resultados al board',
                'description'       => 'Guía práctica para sales managers y directores comerciales que quieren generar análisis de pipeline más profundos, forecasts más precisos y reportes de resultados para el board que generan confianza sin perder horas en Excel.',
                'prompt_content'    => <<<'EOT'
Eres un Revenue Operations expert con más de 10 años ayudando a equipos de ventas B2B a construir sistemas de reporting que reducen el tiempo de análisis y mejoran la precisión de las previsiones. Has aprendido que la mayoría de los sales managers pasan entre 3 y 6 horas por semana generando reportes que podrían hacerse en 30 minutos con el sistema correcto, y que la diferencia entre el forecast que el board respeta y el que no es la calidad del análisis de pipeline y la honestidad de los supuestos.

Hoy vas a ayudarme a transformar el proceso de reporting de ventas con IA.

**Contexto de mi situación:**
- Tipo de ventas: [B2B enterprise / mid-market / SMB / inside sales / field sales]
- CRM actual: [Salesforce / HubSpot / Pipedrive / otro]
- Ciclo de venta medio: [días]
- Ticket medio: [importe]
- El reporte que más tiempo consume: [weekly pipeline review / monthly forecast / quarterly board report]
- Principal dolor en el reporting: [datos poco fiables del CRM / tiempo de preparación / forecast impreciso / board que no confía en las cifras]

---

## 1. Análisis semanal del pipeline: de los datos del CRM al insight accionable

```
Actúa como un Revenue Operations analyst. Tengo el siguiente estado del pipeline de esta semana:

[Pega los datos del CRM: lista de oportunidades con nombre del cliente, valor, etapa, fecha de cierre estimada, días en la etapa actual, última actividad, AE responsable]

Objetivos del mes: [cuota mensual y del trimestre]
Tiempo restante en el mes: [días]

Analiza el pipeline y dime:
1. La probabilidad de alcanzar la cuota del mes basada en el pipeline actual (con los supuestos explícitos)
2. Las 5 oportunidades con mayor probabilidad de cierre este mes (y por qué)
3. Las oportunidades estancadas que necesitan intervención del manager (criterio: sin actividad en más de [X] días o fecha de cierre pasada)
4. Los AEs con el pipeline más sano y los que necesitan más atención de coaching
5. Las 3 acciones que como manager debo tomar esta semana para proteger el número del mes
```

---

## 2. Forecast mensual: del gut feeling al análisis estructurado

```
Necesito construir el forecast del mes [nombre] para presentar al CEO y al CFO.

Datos disponibles:
- Pipeline actual por etapa: [valor total en cada etapa]
- Win rate histórico por etapa: [% de conversión en cada etapa]
- Velocidad del pipeline: [días promedio en cada etapa]
- Oportunidades en "commit" (AE lo pone como cerrado seguro): [lista con valores]
- Oportunidades en "upside" (posibles): [lista con valores]
- Revenue ya cerrado este mes: [importe]
- Cuota del mes: [importe]

Genera el forecast con:
1. El número de commit (alta confianza, >85% de probabilidad): [metodología de cálculo explícita]
2. El upside más probable (si todo va razonablemente bien)
3. El gap entre el commit y la cuota (y qué se necesita para cerrarlo)
4. Los supuestos más críticos del forecast (qué tiene que ser verdad para que los números se cumplan)
5. Los escenarios: pesimista (solo el commit), base (commit + 60% del upside), optimista (commit + todo el upside)
```

---

## 3. Reporte trimestral para el board: del Excel al informe ejecutivo

```
Necesito preparar el reporte trimestral de ventas para el Board de Directores.

Resultados del trimestre:
- Revenue total: [importe] vs. plan [importe]: [% de logro]
- Número de deals cerrados: [número] (nuevos clientes: [número], expansión: [número])
- ASP (Average Selling Price): [importe] vs. trimestre anterior
- Win rate: [%] vs. trimestre anterior
- Sales cycle: [días] vs. trimestre anterior
- Churn de revenue (si aplica): [importe]
- Pipeline generado el trimestre: [importe]
- Los 3 mayores deals cerrados: [descripción]
- Los 3 deals perdidos más relevantes con causa: [descripción]

Genera el reporte de board con:
1. El resumen de 1 párrafo del trimestre (lo que cualquier board member debe saber antes de entrar en detalles)
2. El análisis de la desviación del plan: qué salió mejor de lo esperado y qué salió peor (con causa raíz)
3. Las lecciones aprendidas de los deals perdidos que cambiarán el approach el próximo trimestre
4. La proyección del próximo trimestre con los supuestos explícitos
5. Las decisiones o recursos que el board necesita aprobar para que el equipo alcance el objetivo
```

---

## 4. Análisis de win/loss: aprender de cada deal

```
He recopilado los siguientes datos de deals perdidos y ganados del último trimestre:

Deals ganados (muestra representativa):
[Lista de deals con: sector, tamaño de empresa, ciclo de venta, reason won según el AE, feedback del cliente si lo tienes]

Deals perdidos:
[Lista de deals con: sector, tamaño de empresa, ciclo de venta, reason lost según el AE, competidor que ganó si lo sabes]

Analiza los datos y genera:
1. Los patrones de los deals ganados: qué tienen en común las cuentas que sí compran
2. Los patrones de los deals perdidos: qué señales en etapa temprana predicen la pérdida
3. Las diferencias entre los AEs con mayor win rate y los de menor win rate (si tienes datos por AE)
4. Las 3 mejoras en el proceso de ventas que tendrían mayor impacto en el win rate según este análisis
5. El ICP actualizado basado en los datos reales de los deals ganados (puede diferir del ICP original)
```

---

## 5. Métricas de productividad del equipo de ventas: el dashboard que informa el coaching

```
Necesito analizar la productividad de mi equipo de ventas de [número] AEs para informar las decisiones de coaching y asignación de recursos.

Datos por AE del último mes:
[Lista por AE: llamadas realizadas, emails enviados, reuniones completadas, demos realizadas, propuestas enviadas, deals cerrados, revenue, pipeline generado]

Genera el análisis que:
1. Identifica los patrones de comportamiento de los AEs de mayor rendimiento (no solo las métricas de resultado sino las métricas de actividad que los diferencian)
2. Detecta los AEs con problemas en fases específicas del pipeline (prospecting / cualificación / demo / propuesta / cierre)
3. Propone las intervenciones de coaching individualizadas para los 2-3 AEs con mayor potencial de mejora
4. Calcula la mejora de revenue que podría esperarse si los AEs de bajo rendimiento alcanzaran la media del equipo
5. Identifica los AEs con sobrecarga de actividad pero bajo resultado (puede indicar problemas de cualificación o ciclo de venta demasiado largo)
```

---

## Resultado esperado

Aplicando estos flujos, el equipo de ventas debería notar forecasts más precisos que el CFO empieza a tomar como referencia confiable, análisis de pipeline que identifican los problemas antes de que sea demasiado tarde para actuar, y reportes de board que construyen credibilidad en lugar de generar más preguntas. El reporting de ventas excelente no es sobre mostrar los números — es sobre extraer el insight que cambia el comportamiento del equipo y la calidad de las decisiones del liderazgo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Sales managers y directores comerciales que quieren generar análisis de pipeline más profundos y forecasts más precisos sin pasar horas en Excel',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Automatización de reportes de producto con IA: métricas de adopción, análisis de cohortes y comunicación de producto al board',
                'description'       => 'Guía práctica para product managers que quieren transformar datos de uso del producto en insights accionables, análisis de cohortes comprensibles y reportes de producto que el board y el CEO usan para tomar decisiones.',
                'prompt_content'    => <<<'EOT'
Eres un Director of Product Analytics con experiencia en empresas SaaS de alto crecimiento donde la calidad del análisis de producto determina si el equipo construye las cosas correctas o acumula features que nadie usa. Has aprendido que la mayoría de los product managers tienen acceso a más datos de los que pueden procesar, y que el mayor valor no está en tener más datos sino en hacer las preguntas correctas y comunicar los hallazgos de forma que generen decisiones.

Hoy vas a ayudarme a transformar los datos del producto en reportes e insights de alto impacto usando IA.

**Contexto de mi situación:**
- Tipo de producto: [SaaS B2B / app de consumo / marketplace / plataforma]
- Herramientas de analytics disponibles: [Mixpanel / Amplitude / Google Analytics / PostHog / BigQuery / otra]
- Los reportes que genero actualmente: [weekly metrics / monthly product report / board deck / ad hoc analysis]
- Principal dolor en el análisis de producto: [demasiados datos / no sé qué métricas importan / los stakeholders no entienden el análisis / los insights no generan decisiones]

---

## 1. Weekly metrics review: del dashboard de números al informe de salud del producto

```
Actúa como un Senior Product Analyst. Tengo las siguientes métricas del producto de esta semana:

Métricas de activación:
- Usuarios nuevos registrados: [número] vs. semana anterior y vs. objetivo
- Tasa de activación (usuarios que completan onboarding): [%]
- Tiempo hasta el "aha moment": [horas/días]

Métricas de engagement:
- DAU/MAU ratio: [%]
- Features más usadas: [lista con % de usuarios activos que las usan]
- Features con menor adopción de lo esperado: [lista]

Métricas de retención:
- Retención D7: [%] vs. semana anterior
- Retención D30: [%] vs. mes anterior
- Churn semanal: [%]

Genera el análisis de la semana con:
1. El diagnóstico del estado de salud del producto en una sola frase (¿está mejorando, estable o deteriorando?)
2. El insight más importante que revelan los datos esta semana (el que cambiaría las prioridades si el equipo lo entendiera)
3. Las 2 señales de alerta que requieren investigación o acción
4. La hipótesis más probable para las anomalías observadas (positivas o negativas)
5. Las preguntas que quedan sin responder y que justifican un análisis más profundo
```

---

## 2. Análisis de cohortes: entender la retención más allá del promedio

```
Tengo los siguientes datos de retención por cohorte de usuarios:

[Pega la tabla de cohortes: filas = cohorte de adquisición (mes/semana), columnas = período de retención (M0, M1, M2, M3...), valores = % de usuarios activos]

El contexto de los cambios del producto durante el período analizado: [descripción de los cambios más importantes con fechas]

Genera el análisis de cohortes que:
1. Identifique las cohortes con comportamiento significativamente diferente a la media (mejor o peor retención)
2. Correlacione los cambios de retención con los cambios del producto (con la causalidad apropiada — sin afirmar causalidad donde solo hay correlación)
3. Calcule el LTV implícito en la curva de retención actual y cómo cambia si mejoramos la retención en X puntos
4. Identifique el "cliff" de retención (el período donde se produce la mayor caída) y la hipótesis de por qué ocurre
5. Las recomendaciones específicas para mejorar la retención en los puntos críticos identificados
```

---

## 3. Feature adoption analysis: entender qué se usa y qué no y por qué

```
He lanzado [nombre de feature] hace [semanas/meses]. Los datos de adopción son:

- % de usuarios elegibles que han probado la feature al menos una vez: [%]
- % de usuarios que la usan regularmente (al menos una vez por semana): [%]
- Distribución de uso por segmento de usuario: [datos]
- Flujo de adopción: dónde abandonan los usuarios que la intentan pero no la completan: [datos si los tienes]
- Feedback cualitativo recibido: [descripción]

Genera el análisis de adopción que:
1. Diagnostique si la adopción está en niveles saludables para el tipo de feature (comparado con benchmarks del sector si los conoces, o con otras features del mismo producto)
2. Identifique las barreras de adopción más probables (¿es un problema de discovery, de onboarding de la feature, de propuesta de valor, o de ICP incorrecto?)
3. Proponga los 3 experimentos más probables para aumentar la adopción, ordenados por impacto esperado y esfuerzo
4. Recomiende si esta feature merece inversión adicional o si debería depriorizarse
```

---

## 4. Reporte mensual de producto para el CEO y el board

```
Necesito preparar el reporte mensual de producto para el CEO y el board.

Métricas del mes:
- MAU: [número] vs. mes anterior y vs. objetivo
- DAU/MAU: [%]
- NRR o MRR (si aplica): [dato]
- Principales hitos de producto del mes: [lista de features lanzadas o experimentos completados]
- Resultados de los experimentos: [qué testamos, qué encontramos, qué decidimos]
- Métricas de calidad: [uptime, latencia, bug rate si aplica]
- Lo que aprendimos de los usuarios este mes: [investigación cualitativa o feedback]
- Lo que NO hicimos que estaba planeado y por qué: [lista]

Genera el reporte de producto que:
1. Empiece con el estado de salud del producto en una sola frase (¿estamos creciendo, consolidando, o perdiendo traction?)
2. Conecte cada decisión de producto con los datos que la justifican
3. Sea honesto sobre lo que no funcionó y lo que aprendimos de ello
4. Comunique la dirección del próximo mes con la hipótesis que intentamos validar
5. Sea de lectura en 5 minutos máximo para un CEO o board member con tiempo limitado
```

---

## 5. North star metric y árbol de métricas: diseñar el sistema de métricas del producto

```
Necesito diseñar el sistema de métricas del producto que alinee al equipo de producto, ingeniería y negocio alrededor de los mismos objetivos.

El tipo de producto y modelo de negocio: [descripción]
Las métricas que medimos ahora: [lista completa]
El objetivo de negocio más importante para los próximos 12 meses: [crecimiento / retención / expansión / eficiencia]

Genera el árbol de métricas con:
1. La North Star Metric: la métrica que mejor captura el valor que el producto crea para los usuarios y que predice el crecimiento del negocio
2. Las métricas de input (las que el equipo puede controlar directamente y que mueven la North Star)
3. Las métricas de guardarraíl (las que no deben caer aunque la North Star suba — calidad, retención, NPS)
4. La jerarquía de métricas por nivel: qué revisa el board (mensual), qué revisa el CEO (semanal), qué revisa el equipo de producto (diario)
5. Cómo comunicar el cambio de sistema de métricas al equipo y por qué el nuevo sistema es mejor
```

---

## Resultado esperado

Aplicando estos flujos durante un trimestre, el equipo de producto debería notar que los insights del análisis de datos generan decisiones de roadmap más frecuentemente, que el CEO y el board confían en los reportes de producto como base de sus decisiones, y que el equipo de ingeniería entiende el impacto de lo que construye. El análisis de producto excelente no es sobre dashboards bonitos — es sobre las preguntas correctas que revelan la realidad del uso del producto antes de que los síntomas sean obvios.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Product managers que quieren transformar datos de uso del producto en insights accionables y reportes que el board y el CEO usan para tomar decisiones',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Automatización de reportes de RRHH con IA: people analytics, métricas de talento y comunicación ejecutiva',
                'description'       => 'Guía práctica para profesionales de RRHH que quieren usar IA para convertir datos de personas en insights de negocio, generar reportes de people analytics más profundos y comunicar el impacto de las iniciativas de talento en el lenguaje que los CEO y CFO entienden.',
                'prompt_content'    => <<<'EOT'
Eres un People Analytics Lead con más de 8 años convirtiendo datos de RRHH en insights estratégicos para empresas de tecnología y servicios. Has aprendido que el mayor problema del departamento de RRHH no es la falta de datos — es la incapacidad de transformar los datos de personas en el lenguaje que los CEO y CFO necesitan para tomar decisiones de negocio, y que los reportes de RRHH que no se conectan con el impacto financiero nunca llegan a la agenda del Comité de Dirección.

Hoy vas a ayudarme a transformar el proceso de reporting de RRHH con IA.

**Contexto de mi situación:**
- Tamaño de la organización: [número de empleados]
- Herramientas de RRHH disponibles: [HiBob / BambooHR / Workday / Excel / combinación]
- Los reportes que genero actualmente: [rotación / headcount / costes de personal / performance / engagement]
- Principal dolor en el reporting de RRHH: [datos en silos / stakeholders que no usan los datos / no sé cómo conectar RRHH con impacto de negocio / mucho tiempo en extracción de datos]

---

## 1. Análisis de rotación: del dato de churn al insight que activa la retención

```
Actúa como un People Analytics expert. Tengo los siguientes datos de rotación de los últimos 12 meses:

[Pega los datos: rotación total, voluntaria vs. involuntaria, por departamento, por seniority, por tenure (tiempo en la empresa), por manager, por localización si aplica]

Contexto de la empresa: [sector, crecimiento, cambios organizativos importantes del período]

Analiza los datos y dime:
1. Los patrones de rotación que no son obvios a simple vista (más allá del dato total)
2. Los departamentos o managers con rotación significativamente mayor que la media (y las hipótesis de causa)
3. El costo estimado de la rotación actual (coste de reemplazo * número de salidas * salary media)
4. Los leading indicators que predijeron la rotación con más antelación
5. Las 3 intervenciones de mayor impacto en la retención según los patrones encontrados, con el ROI estimado de cada una
```

---

## 2. Reporte de headcount y costes de personal: para el CFO y el CEO

```
Necesito preparar el reporte mensual de headcount y costes de personal para el CFO.

Datos del mes:
- Headcount actual: [número] vs. mes anterior y vs. plan
- Headcount por departamento: [tabla]
- Nuevas incorporaciones: [número] (hires externos: [número], internos: [número])
- Salidas: [número] (voluntarias: [número], involuntarias: [número])
- Coste total de personal del mes: [importe] vs. plan y vs. mes anterior
- Desglose por categoría: [salarios / beneficios / contratistas / recruiting]
- Tiempo medio de cobertura de vacantes críticas: [días]

Genera el reporte para el CFO que:
1. Empiece con el dato más importante: ¿estamos dentro del budget de personal o hay desviación?
2. Explique las desviaciones con causa raíz (no con excusas)
3. Conecte el headcount con la capacidad de ejecución del plan de negocio
4. Proyecte el cierre del año con los supuestos explícitos
5. Identifique las decisiones de headcount que el Comité debe tomar este mes
```

---

## 3. Dashboard de engagement y NPS del empleado: del dato a la intervención

```
He realizado la encuesta de engagement / eNPS. Los resultados son:

eNPS general: [puntuación]
Preguntas con mayor satisfacción: [lista con puntuaciones]
Preguntas con menor satisfacción: [lista con puntuaciones]
Desglose por departamento: [tabla]
Desglose por seniority: [datos]
Tendencia vs. encuesta anterior: [mejor / igual / peor en qué áreas]
Comentarios cualitativos más frecuentes (temas): [lista de temas]

Genera el análisis de engagement que:
1. Identifique los 3 drivers de engagement que tienen mayor impacto en la retención (los que más correlacionan con intención de quedarse)
2. Las áreas de mayor riesgo que requieren intervención inmediata
3. Los departamentos que necesitan atención diferenciada
4. Las 3 acciones concretas de las próximas 4 semanas que abordan los problemas más urgentes
5. La comunicación a la organización de los resultados de la encuesta (el mensaje que demuestra que los escuchamos y que vamos a actuar)
```

---

## 4. Reporte de performance management: métricas del ciclo de evaluación

```
He completado el ciclo de evaluación de rendimiento. Los datos son:

- Distribución de ratings: [% por categoría: excepcional / supera expectativas / cumple / por debajo / insuficiente]
- Departamentos con mayor y menor concentración en la parte alta o baja de la distribución
- Tasa de calibración: [% de ratings que se mantuvieron después de la sesión de calibración]
- Tiempo medio de completitud de las evaluaciones: [días]
- % de managers que entregaron evaluaciones en plazo: [%]
- Correlación entre rating de rendimiento y rotación posterior (si tienes datos históricos)

Genera el análisis post-ciclo que:
1. Identifique los managers con sesgos de evaluación más pronunciados (inflación o deflación sistemática)
2. Los departamentos con posibles inconsistencias en los estándares de evaluación
3. Las implicaciones para las decisiones de compensación y promoción
4. Las mejoras del proceso para el próximo ciclo basadas en los datos de este
5. El resumen ejecutivo para el CEO: qué nos dice el ciclo de evaluación sobre el nivel de talento de la organización
```

---

## 5. Impacto de RRHH en el negocio: el reporte que llega a la agenda del board

```
Necesito preparar el reporte trimestral de RRHH para el Board. El board está compuesto por [descripción: inversores financieros / fundadores / executives] que piensan principalmente en términos de [crecimiento / rentabilidad / riesgo].

Las iniciativas de RRHH del trimestre: [lista]
El impacto medido de cada iniciativa: [datos si los tienes]
Los riesgos de talento más importantes: [lista]
Los KPIs de personas del trimestre: [rotación, tiempo de cobertura, eNPS, coste por hire, ratio headcount/revenue]

Genera el reporte de board que:
1. Conecta cada iniciativa de RRHH con su impacto en el negocio (en términos de velocidad de ejecución, retención de talento clave, o reducción de riesgo)
2. Cuantifica el coste de los problemas de talento que RRHH está gestionando (rotación, tiempo de vacantes críticas sin cubrir)
3. Presenta los riesgos de talento que el board debe conocer (sin alarmismo, con los planes de mitigación)
4. Propone los 2-3 compromisos del equipo de RRHH para el próximo trimestre con métricas de éxito
5. Sea de lectura en 5 minutos y genere una sola decisión clara del board
```

---

## Resultado esperado

Aplicando estos flujos durante un trimestre, el departamento de RRHH debería notar que el CEO y el CFO solicitan proactivamente los análisis de personas antes de tomar decisiones de headcount o estructura organizativa, que las iniciativas de retención tienen ROI cuantificado, y que RRHH es percibido como un socio estratégico en lugar de un departamento de administración de personal. El people analytics excelente no es sobre dashboards de Recursos Humanos — es sobre responder las preguntas de negocio que el CEO tiene sobre las personas de su organización.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Profesionales de RRHH que quieren convertir datos de personas en insights de negocio y comunicar el impacto de RRHH en el lenguaje que CEO y CFO entienden',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Automatización de análisis financieros con IA: del Excel al informe ejecutivo con narrativa y acción',
                'description'       => 'Guía práctica para analistas y managers financieros que quieren usar IA para transformar datos financieros en análisis con narrativa, generar varianzas comentadas en minutos y construir reportes que el Comité de Dirección usa para tomar decisiones.',
                'prompt_content'    => <<<'EOT'
Eres un Finance Business Partner con más de 12 años convirtiendo datos financieros en narrativas estratégicas para equipos directivos en empresas de tecnología, retail y servicios. Has aprendido que el análisis financiero de mayor valor no está en la exactitud de los números — está en la interpretación de las varianzas, la identificación de las causas raíz y la claridad con que se comunican las implicaciones para el negocio.

Hoy vas a ayudarme a transformar el proceso de análisis financiero con IA para reducir el tiempo de preparación y mejorar la calidad de los insights.

**Contexto de mi situación:**
- Tipo de organización: [empresa de tecnología / retail / servicios / industrial / otro]
- Los análisis que genero regularmente: [P&L mensual / análisis de varianzas / forecast / cash flow / presupuesto]
- Herramientas disponibles: [Excel / Power BI / Tableau / ERP específico]
- Principal dolor en el reporting financiero: [tiempo de preparación / calidad de los comentarios de varianza / comunicación con stakeholders no financieros / precisión del forecast]

---

## 1. Análisis de varianzas comentado: del dato a la historia que explica la desviación

El análisis de varianzas que solo dice "revenue fue 5% por debajo del presupuesto" no tiene valor. La IA puede ayudarte a construir la narrativa causal.

```
Actúa como un Finance Business Partner analizando las varianzas del mes [nombre]. Los datos son:

[Tabla de P&L con: Presupuesto, Real, Varianza en importe y en %, para las líneas principales: Revenue por línea de negocio, COGS, Gross Profit, OpEx por departamento (Marketing, Ventas, I+D, G&A), EBITDA]

Contexto del mes (información no financiera que explica el negocio):
- Eventos o cambios importantes del mes: [lanzamientos, problemas, cambios de mercado]
- Lo que el equipo directivo ya sabe del mes: [contexto que tienen]
- La causa raíz que ya identificaste de las varianzas principales: [tu análisis previo]

Genera el comentario de varianzas ejecutivo que:
1. Empiece con el resultado neto (EBITDA o el KPI más relevante) y si está dentro del rango aceptable o requiere acción
2. Explique las 3 varianzas más significativas con causa raíz identificada (no solo el síntoma)
3. Distinga entre varianzas estructurales (revelan un problema del negocio) y varianzas de timing (se compensarán en meses siguientes)
4. Calcule el impacto en el forecast del año de mantener las varianzas actuales
5. Proponga las acciones concretas para las varianzas negativas que están bajo el control del equipo directivo
```

---

## 2. Reporte mensual de P&L para el Comité de Dirección

```
Necesito preparar el reporte de P&L del mes [nombre] para el Comité de Dirección que incluye CEO, CFO, CPO y CRO.

Datos financieros del mes:
[Pega el P&L simplificado o los datos clave: Revenue total y por segmento, Gross Margin, OpEx total y por área, EBITDA, Cash position, KPIs de negocio que correlacionan con el P&L: ARR, NRR, CAC, LTV si aplica]

Situación del año hasta la fecha vs. budget

Genera el reporte ejecutivo de 1 página que:
1. Capture el estado financiero del mes en 2-3 frases (como si el CFO lo tuviera que comunicar al board en 30 segundos)
2. Priorice las varianzas por impacto en el año (no las liste todas — las que realmente importan)
3. Distinga claramente entre lo que está dentro del plan, lo que tiene riesgo, y lo que requiere intervención
4. Termine con las 2-3 decisiones que el Comité debe tomar este mes (con los plazos)
5. Sea legible para alguien sin formación financiera profunda (el CPO o el CRO)
```

---

## 3. Actualización del forecast: de la revisión mensual al modelo dinámico

```
Necesito actualizar el forecast del año con los resultados del mes [nombre]. Los datos para actualizar el modelo son:

Resultados del mes vs. forecast anterior:
- Revenue real vs. forecast: [datos]
- Principales desviaciones y sus causas: [descripción]
- Cambios en el pipeline de ventas que afectan al forecast: [descripción]
- Cambios de coste que no estaban en el forecast original: [descripción]
- Cambios en el entorno externo que afectan las asunciones: [descripción]

Genera la actualización del forecast que incluya:
1. La revisión de las asunciones principales del modelo (cuáles siguen vigentes, cuáles hay que actualizar)
2. El nuevo forecast de ingresos y EBITDA para el año, con el rango de confianza (punto medio, conservador, optimista)
3. La comparación del nuevo forecast con el presupuesto original y con el forecast anterior
4. Las palancas de mayor impacto para cerrar el gap vs. presupuesto (si existe gap)
5. El mensaje al CEO sobre la nueva expectativa de cierre del año (en lenguaje directo, sin eufemismos)
```

---

## 4. Análisis de rentabilidad: clientes, productos o segmentos que generan valor real

```
Necesito analizar la rentabilidad real de [mis clientes / mis líneas de producto / mis segmentos de mercado] para tomar decisiones de priorización.

Los datos disponibles:
- Revenue por [cliente/producto/segmento]: [datos]
- Coste directo atribuible: [datos]
- Coste de atención o servicio: [datos estimados si no son exactos]
- Margen bruto por [cliente/producto/segmento]: [calculado o a calcular]
- Volumen y tendencia de crecimiento: [datos]

Genera el análisis de rentabilidad que:
1. Calcule el margen de contribución real por categoría (gross margin menos los costes directos atribuibles)
2. Identifique los clientes/productos/segmentos que destruyen valor aunque generen revenue
3. Cuantifique el impacto de descontinuar o repriorizar los de menor rentabilidad
4. Proponga la estrategia de pricing o de mix que maximiza el margen total de la empresa
5. Defina los criterios de rentabilidad mínima que deberían guiar las decisiones de ventas y producto
```

---

## 5. Presentación del presupuesto: defender los números con narrativa estratégica

```
Necesito presentar el presupuesto del próximo año al Comité de Dirección y al Board. El presupuesto incluye:

- Revenue proyectado: [importe] con crecimiento de [%] vs. año actual
- Principales asunciones de crecimiento: [lista]
- Incremento de costes planificado: [%] y en qué categorías
- EBITDA objetivo: [%]
- Inversiones prioritarias: [lista con importes]
- El argumento para el nivel de inversión: [por qué este presupuesto y no uno más conservador o más agresivo]

Genera la presentación del presupuesto que:
1. Conecte cada inversión con el retorno esperado en términos de negocio
2. Explique los trade-offs: qué no estamos haciendo para poder hacer esto
3. Presente los escenarios de sensibilidad: qué pasa con el EBITDA si el revenue viene 10% por debajo
4. Defienda el nivel de inversión con criterio estratégico, no solo financiero
5. Anticipe las preguntas del board sobre: ¿por qué no invertir más?, ¿por qué no más conservadores?, ¿cuál es el plan B si no se alcanza el revenue?
```

---

## Resultado esperado

Aplicando estos flujos durante un trimestre, el equipo financiero debería notar que el tiempo de preparación de reportes se reduce en un 50-60%, que los comentarios de varianza que genera explican el "por qué" y no solo el "qué", y que el Comité de Dirección empieza a usar los análisis financieros como base de sus decisiones estratégicas en lugar de como información de referencia. El análisis financiero excelente con IA es la diferencia entre el Finance que informa el pasado y el Finance que da forma al futuro.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Analistas y managers financieros que quieren transformar datos financieros en análisis con narrativa y construir reportes que el Comité de Dirección usa para tomar decisiones',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Automatización de reportes legales con IA: informes de compliance, gestión de contratos y comunicación de riesgos jurídicos',
                'description'       => 'Guía práctica para departamentos jurídicos y compliance officers que quieren usar IA para generar reportes de riesgo legal más rápido, construir dashboards de compliance y comunicar el estado jurídico al board con claridad.',
                'prompt_content'    => <<<'EOT'
Eres un Director Legal con más de 15 años gestionando departamentos jurídicos en empresas reguladas y de tecnología. Has aprendido que el mayor ineficiencia del equipo legal no está en el análisis jurídico — está en la documentación, el reporting de compliance y la traducción del lenguaje jurídico al lenguaje de negocio que los stakeholders no jurídicos necesitan para tomar decisiones. La IA puede acelerar dramáticamente el trabajo documental sin comprometer la precisión jurídica.

Hoy vas a ayudarme a automatizar el proceso de reporting legal usando IA de forma responsable.

**Aviso importante:** Los reportes generados con IA deben ser siempre revisados por un profesional jurídico antes de su uso. Este prompt facilita la estructura y la narrativa de los reportes — no reemplaza el juicio jurídico experto para cada situación específica.

**Contexto de mi situación:**
- Tipo de empresa y sector: [tecnología / fintech / healthcare / retail / industrial]
- Jurisdicciones: [España / UE / LATAM / global]
- Los reportes jurídicos que genero regularmente: [compliance / contratos / riesgos / incidencias / board reports]
- Principal dolor en el reporting legal: [tiempo de redacción / comunicación con no jurídicos / tracking del estado de contratos / reporting de compliance]

---

## 1. Reporte mensual de compliance: del checklist al dashboard ejecutivo

```
Actúa como un Compliance Manager redactando el reporte mensual de compliance para el Comité de Dirección. Los datos son:

Estado de las obligaciones de compliance del mes:
- RGPD: [estado de las obligaciones principales: registro de actividades, DPAs firmados, brechas detectadas, ejercicio de derechos]
- Obligaciones sectoriales [lista las relevantes para tu sector]: [estado]
- Formaciones de compliance completadas: [% de empleados formados vs. objetivo]
- Auditorías o inspecciones: [si ha habido]
- Incidencias de compliance del mes: [número y descripción breve]
- Contratos con cláusulas de compliance pendientes de revisión: [número]

Genera el reporte ejecutivo de compliance que:
1. Clasifique el estado de compliance general: Verde (cumplimiento total) / Amarillo (áreas de atención) / Rojo (riesgo de incumplimiento)
2. Destaque las incidencias significativas con la acción tomada o en curso
3. Identifique los riesgos de compliance más importantes del próximo mes
4. Sea comprensible para el CEO y el CFO sin formación jurídica
5. Incluya el cuadro de mandos de los indicadores de compliance más relevantes
```

---

## 2. Análisis de contratos: del volumen al dashboard de estado y riesgos

```
Necesito generar un informe del estado de la cartera de contratos de mi empresa.

Datos disponibles:
- Contratos activos por tipo: [NDAs: número, contratos de cliente: número, acuerdos de proveedor: número, contratos de empleo: número, otros: número]
- Contratos que vencen en los próximos 90 días: [lista con cliente/proveedor, importe si aplica, fecha]
- Contratos con cláusulas de renovación automática: [número y condiciones]
- Contratos en proceso de negociación: [número y estado]
- Contratos con disputas o incidencias activas: [descripción]

Genera el dashboard de contratos que:
1. Identifique los contratos que requieren acción inmediata (vencimiento próximo, renovación automática inminente, disputas)
2. Cuantifique el riesgo financiero de la cartera de contratos (exposición máxima si se activan las cláusulas de penalización)
3. Proponga las prioridades de la agenda jurídica del próximo mes basadas en los vencimientos y el riesgo
4. Sea presentable al CFO para la planificación financiera de los compromisos contractuales
```

---

## 3. Reporte de incidencias jurídicas: del expediente al resumen ejecutivo

```
Necesito preparar el resumen mensual de incidencias y litigios para el Comité de Dirección.

Incidencias activas:
[Para cada incidencia: tipo (reclamación / litigio / inspección / denuncia), parte contraria, estado actual, exposición económica estimada, probabilidad de resultado adverso según criterio del abogado, próximo hito procesal]

Incidencias cerradas en el mes: [descripción y resultado]
Nuevas incidencias del mes: [descripción]

Genera el reporte ejecutivo de incidencias que:
1. Cuantifique la exposición total de la empresa (suma de exposiciones ponderadas por probabilidad)
2. Identifique las incidencias que requieren atención del Comité en el próximo mes
3. Presente el estado de los litigios en un formato visual comprensible (semáforo: baja / media / alta exposición)
4. Proponga las provisiones contables necesarias en coordinación con el CFO
5. Sea comprensible para directivos sin formación jurídica
```

---

## 4. Due diligence report: síntesis de hallazgos para M&A o fundraising

```
He completado el proceso de due diligence legal de [tipo: adquisición / fusión / ronda de inversión]. Los hallazgos principales son:

[Descripción de los hallazgos: áreas revisadas, documentos analizados, riesgos identificados por categoría: corporate / comercial / laboral / propiedad intelectual / RGPD / regulatorio / litigios]

Genera el informe de due diligence ejecutivo que:
1. Clasifique los riesgos por severidad: críticos (pueden matar el deal) / significativos (requieren ajuste de precio o garantías) / menores (a gestionar post-cierre)
2. Traduzca cada riesgo jurídico a su impacto económico estimado
3. Proponga las condiciones de cierre o las garantías que mitigan los riesgos más importantes
4. Incluya el resumen de 1 página para el CEO o el board que permite tomar la decisión de proceder o no
5. Sea comprensible para los asesores financieros de la operación que no tienen formación jurídica
```

---

## 5. Reporte de protección de datos (RGPD): para el DPO y para el board

```
Necesito preparar el informe anual de protección de datos para el Delegado de Protección de Datos y para el Comité de Dirección.

Estado del programa de protección de datos:
- Registro de actividades de tratamiento: [estado: completo / en revisión / desactualizado]
- DPAs firmados con proveedores críticos: [% completitud]
- Análisis de impacto (DPIA) realizados el año: [número y para qué tratamientos]
- Ejercicios de derechos de interesados atendidos: [número, tipos, tiempo de respuesta]
- Brechas de seguridad detectadas: [número, severidad, notificaciones a la AEPD si aplica]
- Formaciones en protección de datos: [% empleados formados]
- Auditorías o revisiones del programa: [realizadas y hallazgos]

Genera el informe anual de protección de datos con:
1. La evaluación del nivel de madurez del programa (1-5 con descripción)
2. Los riesgos de incumplimiento más importantes y las acciones correctoras
3. El plan de mejora del próximo año con prioridades y responsables
4. El resumen ejecutivo para el CEO en lenguaje de negocio (no jurídico)
5. El apartado para el board: qué riesgos de sanción existen y cuál es el plan para mitigarlos
```

---

## Resultado esperado

Aplicando estos flujos, el departamento jurídico debería notar que el tiempo de preparación de reportes de compliance y estado jurídico se reduce significativamente, que los stakeholders no jurídicos comprenden mejor el estado de riesgo legal de la empresa, y que el Comité de Dirección toma decisiones más informadas sobre los temas jurídicos más importantes. Recordatorio: todos los reportes generados con IA deben pasar la revisión de un profesional jurídico cualificado antes de su distribución. La IA acelera la estructura y la narrativa — el juicio jurídico sigue siendo responsabilidad del equipo legal.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Departamentos jurídicos y compliance officers que quieren generar reportes de riesgo legal más rápido y comunicar el estado jurídico al board con claridad',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Automatización de reportes de Customer Success con IA: health scores, QBR decks y análisis de churn',
                'description'       => 'Guía práctica para equipos de Customer Success que quieren generar análisis de salud del cliente más profundos, preparar QBRs de alto impacto con IA y construir reportes de churn que identifican patrones accionables.',
                'prompt_content'    => <<<'EOT'
Eres un VP de Customer Success con experiencia construyendo sistemas de reporting en empresas SaaS B2B con ARR entre 5M y 100M de dólares. Has aprendido que el mayor ineficiencia de los equipos de CS no es la falta de datos — es el tiempo que los CSMs invierten en preparar reportes y QBRs en lugar de en las conversaciones con clientes que construyen relaciones y expanden revenue. La IA puede reducir el tiempo de preparación de reportes en un 70% si se usa con el sistema correcto.

Hoy vas a ayudarme a automatizar y mejorar la calidad de los reportes de Customer Success.

**Contexto de mi situación:**
- ARR bajo gestión: [importe]
- Número de cuentas: [número] y segmentación: [enterprise / mid-market / SMB]
- CRM o herramienta de CS: [Salesforce / HubSpot / Gainsight / ChurnZero / otra]
- Los reportes que generan más tiempo: [QBRs / health score reviews / churn analysis / executive reports]
- Principal dolor en el reporting de CS: [preparación manual de QBRs / health scores subjetivos / churn análisis reactivo / stakeholders que no leen los reportes]

---

## 1. Health score automatizado: de las señales dispersas al indicador de riesgo accionable

```
Actúa como un Customer Success Operations expert. Necesito construir el health score de mis clientes basado en las señales disponibles.

Datos disponibles por cliente:
- Uso del producto: [métricas: login frequency, features usadas, usuarios activos / total de licencias]
- Soporte: [tickets abiertos, CSAT de los tickets, tiempo de resolución]
- Engagement: [NPS, respuesta a comunicaciones, participación en webinars o eventos]
- Financiero: [estado de pago, expansión o contracción del contrato, fecha de renovación]
- Relación: [última llamada con el CSM, acceso a decision maker, número de stakeholders internos involucrados]

Diseña el health score que:
1. Asigne pesos a cada categoría de señal basándose en su correlación histórica con el churn (si no tienes datos históricos, propón pesos razonables con la justificación)
2. Calcule una puntuación de 0-100 con bandas de color: verde (60-100), amarillo (30-59), rojo (0-29)
3. Identifique las señales individuales que tienen mayor peso en la clasificación final
4. Genere una alerta automática cuando un cliente pasa de verde a amarillo o de amarillo a rojo
5. Proponga la acción de CSM recomendada para cada banda de riesgo
```

---

## 2. Preparación del QBR: de los datos del cliente al deck de alto impacto

El QBR es la reunión más importante del año con un cliente enterprise. La IA puede preparar el 70% del deck en minutos, dejando al CSM tiempo para la personalización y la estrategia.

```
Necesito preparar el QBR de [nombre del cliente]. Los datos disponibles son:

Datos de uso del trimestre:
- MAU o DAU (si aplica): [datos]
- Features más utilizadas: [lista]
- Features con baja adopción: [lista]
- Mejoras de adopción vs. trimestre anterior: [descripción]

Datos de la relación:
- CSAT del trimestre: [puntuación]
- Tickets de soporte: [número, tiempo de resolución, temas recurrentes]
- Objetivos del cliente documentados al inicio del año: [lista]
- Progreso hacia esos objetivos: [descripción]

Datos financieros:
- ARR actual: [importe]
- Contrato: [fecha de renovación, expansión o contracción del período]
- Oportunidades de expansión identificadas: [descripción]

Genera el deck de QBR con contenido para 5 diapositivas:
1. Revisión de objetivos del cliente: progreso hacia los goals que definió al inicio del año
2. Métricas de uso y adopción: dónde ha crecido y dónde hay oportunidad
3. Partnership review: lo que hemos hecho juntos (soporte, onboarding, iniciativas)
4. Roadmap relevante para este cliente: las funcionalidades próximas que resuelven sus necesidades
5. Próximos pasos y objetivos del próximo trimestre (con la oportunidad de expansión integrada de forma natural)
```

---

## 3. Análisis mensual de churn: del dato de salida al patrón accionable

```
Actúa como un Customer Success Analytics expert. He tenido [número] churns en el último mes. Los datos de cada uno son:

[Para cada cuenta churneada: ARR, segmento, tiempo como cliente, health score en los últimos 3 meses, reason lost documentado por el CSM, última actividad en el producto, última llamada con el CSM, si hubo señales de riesgo previas y cuándo]

Analiza el churn del mes y dime:
1. Los patrones comunes entre las cuentas churneadas (más allá del "reason lost" que el CSM documenta — que suele ser incompleto)
2. El tiempo promedio de deterioro del health score antes del churn (el "churn warning window")
3. Los CSMs con mayor tasa de churn y los con menor (sin señalar culpables, buscando patterns de comportamiento)
4. Las 3 intervenciones que podrían haber evitado al menos [número] de estos churns si se hubieran hecho antes
5. El patrón de churn emergente que debo vigilar en las cuentas actuales con señales similares
```

---

## 4. Reporte de CS para el board: del operativo al estratégico

```
Necesito preparar el reporte trimestral de Customer Success para el Board.

Métricas del trimestre:
- NRR (Net Revenue Retention): [%] vs. objetivo [%] vs. trimestre anterior
- GRR (Gross Revenue Retention): [%]
- Churn de revenue: [importe] y número de cuentas
- Expansión de revenue: [importe]
- NPS del cliente: [puntuación] vs. trimestre anterior
- Cuentas en riesgo alto actualmente: [número y ARR en riesgo]
- Tiempo promedio hasta el primer valor (time-to-value) para nuevos clientes: [días]

Genera el reporte de board que:
1. Conecte el NRR con el impacto en la valoración de la empresa (el NRR es el múltiplo — un punto de NRR puede valer X de valoración)
2. Explique el churn con causa raíz honesta (no "el cliente no usaba el producto" — eso es un síntoma, no una causa)
3. Presente el pipeline de riesgo con el plan de mitigación para las cuentas más importantes
4. Muestre la tendencia y la proyección del NRR para los próximos 2 trimestres
5. Proponga la inversión en el equipo de CS necesaria para alcanzar el objetivo de NRR del año próximo con el ROI esperado
```

---

## 5. Executive Business Review: la versión anual del QBR para las cuentas más estratégicas

```
Necesito preparar el Executive Business Review (EBR) anual de [nombre del cliente — cuenta estratégica]. Este EBR lo presentará nuestro CEO al CEO del cliente.

Datos del año:
- Evolución del ARR: [inicio del año] → [actual]
- Objetivos del cliente al inicio del año: [lista]
- Resultados conseguidos: [descripción con métricas si las tienes]
- ROI documentado del uso de nuestro producto: [cálculo si lo tienes]
- Estado de la relación: [fortalezas y áreas de tensión]
- Oportunidades de expansión para el próximo año: [descripción]
- Roadmap que más le importa a este cliente: [features o capacidades que ha pedido]

Genera el EBR de alto nivel que:
1. Conecte el uso de nuestro producto con el resultado de negocio del cliente (en el lenguaje estratégico que importa a su CEO)
2. Cuantifique el ROI de la relación para el cliente (no para nosotros)
3. Presente la visión de la partnership para los próximos 2-3 años (no solo el próximo contrato)
4. Incluya la conversación de expansión de forma estratégica (no comercial)
5. Cierre con los compromisos mutuos para el próximo año (lo que nosotros nos comprometemos a entregarles y lo que necesitamos de ellos)
```

---

## Resultado esperado

Aplicando estos flujos, el equipo de CS debería notar que el tiempo de preparación de QBRs se reduce de 4-6 horas a 60-90 minutos, que los health scores generan alertas accionables antes de que el churn sea inminente, y que los reportes de CS al board muestran el NRR como palanca estratégica de valoración de la empresa en lugar de como una métrica operativa. El Customer Success excelente con IA es la diferencia entre el equipo que reacciona al churn y el que construye el motor de retención y expansión que el CFO y el board ven en las métricas trimestrales.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Equipos de Customer Success que quieren preparar QBRs de alto impacto más rápido y construir reportes de churn que identifican patrones accionables',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Automatización de reportes para freelancers con IA: informes de cliente, análisis de rentabilidad y gestión del negocio propio',
                'description'       => 'Guía práctica para freelancers que quieren usar IA para generar informes de avance para clientes más rápido, analizar la rentabilidad de cada proyecto y construir el dashboard de su negocio que les permite tomar mejores decisiones.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de negocio especializado en freelancers y consultores independientes con más de 10 años ayudando a profesionales autónomos a construir negocios más rentables y mejor gestionados. Has aprendido que la mayoría de los freelancers senior tienen proyectos bien ejecutados pero negocios mal gestionados — no porque les falte capacidad, sino porque el trabajo de reporting, análisis financiero y comunicación con clientes consume un tiempo valioso que podrían dedicar al trabajo de mayor valor.

Hoy vas a ayudarme a automatizar y mejorar la calidad de los reportes y la gestión de mi negocio freelance con IA.

**Contexto de mi situación:**
- Especialidad: [tipo de trabajo que haces]
- Número de clientes activos: [número]
- Tipo de facturación: [por hora / por proyecto / retainer mensual / combinación]
- El reporte que más tiempo consume: [informe de avance a clientes / facturación / análisis de rentabilidad / reporte de resultados]
- Principal dolor en la gestión del negocio: [tracking del tiempo / análisis de rentabilidad / comunicación con clientes / visibilidad de la situación financiera]

---

## 1. El informe de avance para el cliente: del tiempo trabajado al valor entregado

El error más común del freelancer al reportar es listar las tareas que hizo en lugar del valor que entregó. La IA puede transformar un timesheet en un informe orientado a resultados.

```
Actúa como mi Chief of Staff. Voy a darte los datos del trabajo que hice esta semana/mes para [nombre del cliente] y necesitas transformarlos en un informe de avance que el cliente lea, entienda y valore.

Lo que hice:
- Tareas completadas: [lista detallada de lo que trabajaste]
- Tiempo invertido por tarea: [si lo tienes]
- Entregables producidos: [documentos, diseños, código, análisis, etc.]
- Decisiones tomadas o problemas resueltos: [descripción]
- Lo que quedó pendiente y por qué: [lista con justificación]

El contexto del proyecto:
- Objetivo del proyecto: [qué está intentando conseguir el cliente]
- Hito más importante del período: [el avance más relevante]
- Lo que el cliente más valora: [velocidad / calidad / comunicación / resultados de negocio]

Genera el informe de avance de máximo 300 palabras que:
1. Empiece con el logro más importante del período (no con la lista de tareas)
2. Conecte el trabajo realizado con el objetivo del cliente
3. Sea honesto sobre lo que no se completó y por qué, con la solución
4. Incluya los próximos pasos concretos de la siguiente semana/mes
5. Tenga el tono correcto para este cliente específico
```

---

## 2. Análisis de rentabilidad del proyecto: ¿estoy ganando dinero realmente?

```
Necesito analizar la rentabilidad real de [nombre del proyecto o cliente].

Datos del proyecto:
- Importe facturado o acordado: [importe]
- Horas reales invertidas: [número] (si no las tienes exactas, estima por fase)
- Desglose de horas por tipo de actividad: [reuniones / trabajo productivo / revisiones / gestión / reportes]
- Gastos directos del proyecto: [si aplica]
- Importe de horas no facturables (scope creep, correcciones, comunicación no incluida): [horas]

Calcula y analiza:
1. La tarifa efectiva por hora real trabajada (importe total / horas totales incluyendo las no facturables)
2. La comparación con mi tarifa objetivo o con la tarifa que presupuestamos
3. Las actividades que más erosionaron la rentabilidad (donde se fue el tiempo no planificado)
4. La rentabilidad real del proyecto vs. la esperada al inicio
5. Las 3 decisiones que tomaré diferente en el próximo proyecto de este tipo para mejorar la rentabilidad
```

---

## 3. Dashboard financiero del negocio freelance: visibilidad de la situación en 10 minutos

```
Actúa como mi CFO personal. Necesito construir el dashboard mensual de mi negocio freelance para tener visibilidad real de cómo va el negocio.

Datos del mes:
- Ingresos facturados: [importe] vs. mes anterior y vs. objetivo
- Ingresos cobrados (puede diferir si hay retrasos de pago): [importe]
- Gastos del negocio: [desglosados por categoría: herramientas, formación, marketing, gestoría, otros]
- Horas trabajadas en total: [número]
- Distribución por cliente: [cliente A: X horas / cliente B: Y horas / propuesta y ventas: Z horas / admin: W horas]
- Proyectos activos y su estado: [lista]
- Pipeline de nuevos proyectos: [importe potencial y probabilidad]

Genera el análisis mensual que:
1. Calcule las métricas clave del negocio: tarifa efectiva por hora, margen neto, % de tiempo facturable
2. Identifique el cliente más y menos rentable del mes
3. Proyecte los ingresos del próximo mes basándose en el pipeline y los proyectos activos
4. Alerte sobre los riesgos financieros del próximo trimestre (concentración en un cliente, pipeline vacío, etc.)
5. Recomiende las 2-3 acciones de negocio para el próximo mes basadas en el análisis
```

---

## 4. Propuesta de proyecto: del briefing del cliente a la propuesta que se acepta

```
Tengo el briefing de un cliente potencial para [tipo de proyecto]. Los detalles son:

Lo que el cliente me contó: [descripción de sus necesidades, objetivos y contexto]
Lo que interpreto que realmente necesita (puede ser diferente de lo que dijo): [tu análisis]
Mi estimación de horas: [número] — con el desglose por fase si lo tienes
Mi tarifa: [importe y forma: por hora / proyecto / retainer]
Lo que más le importa al cliente según la conversación: [velocidad / precio / resultado garantizado / tu metodología / tu reputación]
Sus principales dudas o objeciones que anticipas: [lista]

Genera la propuesta que:
1. Empiece con el problema del cliente en sus propias palabras (no con mi presentación)
2. Describa el resultado esperado en términos medibles (no las actividades que haré)
3. Explique mi metodología de forma que genere confianza sin revelar todo el "cómo"
4. Justifique el precio en términos de ROI para el cliente (no de horas)
5. Incluya los términos y condiciones más importantes (pagos, revisiones, scope)
Longitud: máximo 2 páginas. Tono: experto y seguro.
```

---

## 5. Retrospectiva del mes: aprender del negocio para mejorar el siguiente mes

```
Voy a hacer la retrospectiva mensual de mi negocio freelance. Los datos del mes son:

Lo que fue bien: [lista de logros, proyectos que salieron según lo esperado, clientes satisfechos]
Lo que no fue según lo esperado: [proyectos con problemas, clientes difíciles, tiempo invertido que no generó ingresos]
Lo que aprendí: [sobre mis clientes, sobre mi proceso, sobre mi posicionamiento, sobre mi capacidad]
Las decisiones que tomé este mes sobre el negocio: [nuevos clientes / rechazos / cambios de tarifa / nuevos servicios]
La sensación general con el negocio este mes (1-10): [número y por qué]

Genera la retrospectiva estructurada que:
1. Sintetice los 3 aprendizajes más importantes del mes (que aplicaré en el siguiente)
2. Identifique el patrón de negocio más relevante que emergen de los últimos 3 meses
3. Proponga los 2-3 experimentos del próximo mes para mejorar la rentabilidad o la satisfacción
4. Actualice el plan de negocio del trimestre basándose en lo que aprendí
5. Defina el indicador de éxito del próximo mes (cómo sabré si mejoré)
```

---

## Resultado esperado

Aplicando estos flujos durante 3 meses, deberías notar que el tiempo de reporting a clientes se reduce de 2-3 horas a 30-45 minutos, que tienes visibilidad real de cuáles son tus proyectos más rentables (y puedes tomar decisiones de posicionamiento basadas en datos), y que la gestión del negocio deja de ser algo que haces cuando tienes tiempo para convertirse en un hábito de 30 minutos al mes que cambia la dirección del negocio. El freelancer que gestiona bien su negocio gana más que el que solo factura más horas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Freelancers que quieren generar informes de cliente más rápido, analizar la rentabilidad de sus proyectos y construir el dashboard de su negocio propio',
                'vote_score'        => 41,
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
