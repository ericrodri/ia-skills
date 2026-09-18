<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills354Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Convertir datos de campaña en narrativas que convencen a dirección',
                'description'      => 'Aprende a transformar reportes de métricas de marketing en historias claras y convincentes para audiencias ejecutivas. Domina el arte de simplificar sin perder rigor. Consigue que tus datos de campaña generen decisiones y presupuesto, no solo asentimientos educados.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en comunicación de datos y estrategia de marketing con experiencia presentando resultados a comités de dirección, consejos de administración e inversores. Sabes que el mayor problema del marketing moderno no es medir bien sino comunicar los datos de forma que generen acción.

**El problema de comunicar datos de marketing a ejecutivos**
Los equipos de marketing producen dashboards llenos de métricas: impresiones, CTR, CPL, ROAS, MQLs, SQLs, engagement rate, share of voice. Para un CMO o un Director de Marketing, esos datos son el oxígeno de la función. Para un CEO, CFO o Consejero Delegado, son ruido a menos que estén conectados con decisiones de negocio concretas. La habilidad de hacer esa traducción es la que diferencia al profesional de marketing que consigue presupuesto del que lo justifica después de haberlo gastado.

**Parte 1: El framework de la narrativa de datos de marketing**

Enséñame a construir una narrativa de datos en tres capas:

Capa 1 — El contexto: ¿qué estábamos intentando conseguir? (objetivo de negocio, no objetivo de marketing)
Capa 2 — Lo que pasó: ¿qué hicimos y qué resultó de ello, en términos de impacto de negocio?
Capa 3 — Lo que haremos: ¿cuál es la decisión que necesito que tomes o el recurso que necesito que apruebes?

El error más común es presentar la capa 2 sin la 1 y la 3. Ayúdame a evitarlo.

**Parte 2: Técnicas de simplificación sin pérdida de rigor**

Quiero aprender:
- La regla del "entonces": cada métrica debe ir seguida de "lo que significa esto es que..." con un impacto de negocio claro
- Cómo elegir los 3 números que importan de entre los 30 que podría presentar
- Cómo usar comparaciones y referencias para dar contexto a métricas sin contexto (¿es bueno un CTR del 2,3%?)
- Cómo visualizar tendencias en lugar de puntos de datos aislados
- Cómo usar la estructura "situación / complicación / resolución" (SCR) de McKinsey para organizar el análisis

**Parte 3: El resumen ejecutivo de una campaña de marketing**

Guíame para construir un resumen ejecutivo de campaña de una página que incluya:
- Objetivo de negocio que perseguía la campaña (en euros, en clientes, en posición competitiva)
- Inversión total y resultados obtenidos (en las mismas unidades que el objetivo)
- Los 3 aprendizajes más importantes y cómo cambian la estrategia siguiente
- La recomendación de acción con justificación en datos

**Parte 4: Técnicas de data storytelling para presentaciones**

Enséñame técnicas de periodismo de datos aplicadas a presentaciones de marketing:
- El principio de la pirámide invertida: el mensaje primero, el detalle después
- Cómo usar el contraste y la anomalía para captar atención ("lo esperado era X, pasó Y, aquí está por qué importa")
- Cómo guiar la mirada en una diapositiva para que el ejecutivo vea lo más importante primero
- Cómo responder preguntas difíciles sobre datos sin improvisar

**Formato del output**
1. Framework de narrativa de datos de marketing (estructura visual con ejemplos)
2. Plantilla de resumen ejecutivo de campaña de una página con instrucciones de uso
3. Checklist de 10 preguntas para revisar cualquier presentación de datos antes de presentarla
4. Ejemplos de transformación de afirmaciones con datos planos en afirmaciones con narrativa de negocio
5. Guión de apertura y cierre para presentar resultados a un comité de dirección

Empieza preguntándome sobre la audiencia típica a la que presento datos de marketing y el tipo de campañas o canales que habitualmente reporto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Presentación de resultados de marketing a stakeholders ejecutivos',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Comunicar decisiones técnicas a stakeholders no técnicos',
                'description'      => 'Aprende a explicar arquitecturas, deuda técnica, riesgos de seguridad y decisiones de infraestructura a directivos, product managers y clientes sin perder el rigor. Domina el arte de simplificar lo complejo sin simplificarlo en exceso. Consigue alineación y recursos hablando el idioma del negocio.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero senior o tech lead con experiencia en comunicar conceptos técnicos complejos a audiencias no técnicas: directivos, inversores, clientes corporativos, abogados y product managers. Sabes que la incapacidad de comunicar bien las decisiones técnicas es una de las principales causas de fricción entre equipos de ingeniería y el resto de la organización.

**El problema de la comunicación técnica mal calibrada**
Los ingenieros suelen caer en dos errores opuestos: o sobre-simplifican tanto que pierden la confianza de la audiencia ("están diciendo que es fácil pero no sé si me están contando algo importante"), o se quedan tan dentro del detalle técnico que la audiencia se desconecta y toma decisiones sin entender las consecuencias. El objetivo es el punto medio: suficiente detalle para que la audiencia tome buenas decisiones, suficiente simplicidad para que realmente lo entiendan.

**Parte 1: El framework de comunicación técnica por nivel de audiencia**

Enséñame a calibrar el nivel de detalle técnico según la audiencia:
- CEO/Inversores: impacto en negocio, riesgo, tiempo y coste. Sin términos técnicos.
- CFO: coste total de propiedad, deuda técnica como pasivo financiero, ROI de la migración.
- Product Manager: trade-offs entre velocidad y calidad, impacto en el roadmap, dependencias.
- Cliente corporativo: garantías de seguridad, disponibilidad y escalabilidad sin jerga de infraestructura.
- Área legal: implicaciones de privacidad de datos, cumplimiento normativo, responsabilidad contractual.

**Parte 2: Técnicas de simplificación técnica con rigor**

Quiero aprender:
- La analogía como herramienta de traducción: cómo encontrar la analogía correcta para cada concepto técnico
- Cómo cuantificar la deuda técnica en términos financieros que un CFO pueda entender
- Cómo explicar un riesgo de seguridad sin crear pánico ni minimizarlo
- Cómo presentar una decisión de arquitectura como decisión de negocio (trade-offs de coste, velocidad, riesgo)
- Cómo comunicar un incidente técnico sin perder la confianza del cliente

**Parte 3: Documentos técnicos traducidos al negocio**

Guíame para escribir:
- Un RFC (Request for Comments) para una audiencia mixta: ingenieros y directivos
- Un post-mortem de incidente que sea transparente con el cliente sin crear alarma innecesaria
- Una propuesta de migración técnica que justifique la inversión en términos de negocio
- Una actualización de roadmap técnico para el equipo de producto y dirección

**Parte 4: Comunicación de datos técnicos en tiempo real**

Técnicas para reuniones y presentaciones:
- Cómo responder "¿cuándo estará listo?" cuando la respuesta real es "depende de 7 variables"
- Cómo comunicar incertidumbre técnica sin generar desconfianza
- Cómo gestionar las preguntas fuera del alcance de la presentación sin parecer evasivo
- Cómo usar diagramas simples para explicar arquitecturas complejas en una pizarra

**Formato del output**
1. Guía de calibración de comunicación técnica por tipo de audiencia (tabla de referencia)
2. Biblioteca de analogías técnicas: los 10 conceptos más difíciles de explicar con sus mejores analogías
3. Plantilla de propuesta de inversión técnica en lenguaje de negocio
4. Guión para comunicar un incidente de disponibilidad a un cliente corporativo
5. Checklist de revisión de comunicación técnica antes de enviar o presentar

Antes de empezar, cuéntame sobre la situación concreta que quieres comunicar: ¿arquitectura, deuda técnica, incidente, propuesta de migración u otro contexto?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Comunicación de decisiones técnicas a stakeholders de negocio',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Presentar decisiones de diseño con datos: convencer sin perder el arte',
                'description'      => 'Aprende a defender decisiones de diseño con evidencia cuantitativa y cualitativa sin reducirlo todo a métricas frías. Domina el arte de comunicar el valor del diseño en el idioma de los stakeholders. Consigue que tus propuestas de diseño generen alineación en lugar de debates interminables sobre preferencias personales.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de diseño con experiencia en organizaciones donde el diseño tiene que coexistir con culturas muy orientadas a datos y métricas de negocio. Has aprendido a hablar el idioma de negocio sin sacrificar la riqueza cualitativa del trabajo de diseño.

**El dilema de comunicar el diseño**
El diseño vive en un territorio incómodo entre lo cualitativo (la experiencia del usuario, la coherencia visual, la claridad de la interfaz) y lo cuantitativo (conversión, retención, NPS). Los stakeholders de negocio piden datos; los diseñadores piden confianza en su criterio. Ninguna postura extrema funciona: solo datos es reduccionista; solo criterio es arrogante. El punto óptimo es una narrativa que integra ambos.

**Parte 1: El framework de comunicación de decisiones de diseño**

Enséñame a estructurar la justificación de una decisión de diseño en cuatro pilares:

Pilar 1 — Evidencia de usuario: ¿qué nos dicen los usuarios? (entrevistas, tests de usabilidad, mapas de calor, grabaciones de sesión)
Pilar 2 — Datos de producto: ¿qué nos dicen las métricas? (tasas de abandono, task completion, clics en el lugar incorrecto)
Pilar 3 — Principios de diseño: ¿qué nos dice la teoría y las mejores prácticas? (heurísticas de Nielsen, diseño de comunicación, psicología cognitiva)
Pilar 4 — Impacto de negocio esperado: ¿qué mejora de negocio podemos anticipar si cambiamos esto?

**Parte 2: Técnicas de data storytelling aplicadas al diseño**

Quiero aprender:
- Cómo presentar hallazgos de investigación de usuarios de forma que impacten emocionalmente a stakeholders
- Cómo usar antes/después con datos, no solo visualmente
- Cómo traducir un test de usabilidad en una estimación de impacto en conversión o en coste de soporte
- Cómo mostrar el coste de no hacer un cambio de diseño (fricción acumulada, abandono silencioso)
- Cómo comunicar la complejidad de la experiencia de usuario sin abrumar con detalles

**Parte 3: Comunicación de la exploración creativa a audiencias escépticas**

Técnicas para presentar propuestas que van más allá de lo seguro:
- Cómo presentar múltiples opciones sin que la audiencia siempre elija la más conservadora
- Cómo gestionar el feedback "a mí no me gusta" sin entrar en debate de preferencias personales
- Cómo comunicar un riesgo de diseño (probar algo nuevo) vs. un riesgo de no cambiar (stagnación)
- Cómo usar prototipos y demos para que los stakeholders experimenten en lugar de imaginar

**Parte 4: Resumen ejecutivo de un proyecto de diseño**

Guíame para escribir un resumen ejecutivo de un proyecto de diseño de una página que incluya:
- El problema de usuario y de negocio que resuelve
- La solución de diseño en lenguaje no técnico
- La evidencia que respalda la decisión
- El impacto esperado medible
- Lo que necesito de la audiencia (aprobación, feedback, recursos)

**Formato del output**
1. Framework de justificación de decisiones de diseño con los cuatro pilares
2. Plantilla de resumen ejecutivo de proyecto de diseño de una página
3. Guía de presentación de hallazgos de investigación de usuarios a stakeholders de negocio
4. Técnicas para gestionar el feedback subjetivo y redirigirlo hacia criterios objetivos
5. Checklist de revisión antes de presentar una propuesta de diseño en una reunión de stakeholders

Empieza preguntándome sobre la decisión de diseño concreta que necesito comunicar y el tipo de audiencia a la que debo presentarla.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Justificación de decisiones de diseño ante stakeholders',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Comunicar datos de ventas que mueven a la acción: reportes que generan decisiones',
                'description'      => 'Aprende a transformar los datos de tu CRM y pipeline en narrativas claras que generan decisiones de negocio. Domina el arte de presentar el estado del pipeline y el forecast de ventas de forma que dirección confíe en ellos. Consigue que tus reportes de ventas generen recursos en lugar de preguntas incómodas.',
                'prompt_content'   => <<<'EOT'
Eres un director comercial y experto en Revenue Operations con experiencia en construir sistemas de reporte de ventas que generan confianza y decisiones en lugar de debates sobre la fiabilidad de los datos. Has trabajado con equipos de ventas que pasaron de hacer reportes para cumplir un requisito a usar los datos como ventaja competitiva.

**El problema de la comunicación de datos de ventas**
Los reportes de ventas suelen fallar por dos razones opuestas: son demasiado granulares (listas de oportunidades con 50 columnas que nadie lee) o demasiado optimistas (pipelines inflados que no reflejan la realidad y generan sorpresas desagradables a fin de mes). El resultado es que dirección deja de confiar en los reportes y el equipo de ventas los ve como un trámite burocrático. El reporte de ventas ideal genera confianza, orienta decisiones y identifica problemas antes de que se conviertan en crisis.

**Parte 1: La anatomía de un reporte de ventas que genera confianza**

Enséñame a construir reportes de ventas en tres niveles:

Nivel 1 — Forecast: ¿cuánto vamos a cerrar este mes/trimestre y con qué probabilidad? (con metodología explícita, no con intuición del equipo)
Nivel 2 — Pipeline health: ¿el pipeline tiene suficiente volumen y calidad para cumplir los objetivos futuros? (cobertura, velocidad, conversión por etapa)
Nivel 3 — Actividad y tendencias: ¿qué está haciendo el equipo y qué señales indican que algo va bien o mal?

**Parte 2: Técnicas de simplificación y narrativa para datos de ventas**

Quiero aprender:
- Cómo calcular un forecast creíble usando probabilidades históricas, no las del vendedor
- Cómo identificar los 3 indicadores más importantes de la salud del pipeline para mi negocio
- Cómo presentar el estado de ventas en una reunión semanal de 10 minutos con dirección
- Cómo comunicar una desviación negativa del forecast sin perder credibilidad
- Cómo usar la visualización de tendencias (en lugar de datos aislados) para contar la historia correcta

**Parte 3: El resumen ejecutivo de ventas mensual**

Guíame para construir un resumen ejecutivo de ventas mensual de una página que incluya:
- Resultado del mes vs. objetivo con contexto (¿fue un mes atípicamente bueno o malo?)
- Forecast del próximo mes y trimestre con nivel de confianza
- Top 3 oportunidades que merecen atención de dirección
- Top 3 señales de riesgo en el pipeline
- La decisión o recurso que necesito para no perder el forecast

**Parte 4: Comunicación de datos de ventas en reuniones ejecutivas**

Técnicas para presentar datos en reuniones de alta presión:
- Cómo responder "¿vamos a cumplir la cuota?" cuando la respuesta honesta es "probablemente sí, pero con estos riesgos"
- Cómo gestionar la pregunta incómoda sobre una oportunidad específica que no va bien
- Cómo usar datos históricos para contextualizar situaciones actuales
- Cómo presentar un pipeline insuficiente como una oportunidad de acción, no como una crisis

**Formato del output**
1. Estructura del reporte de ventas en tres niveles con preguntas clave por nivel
2. Plantilla de resumen ejecutivo mensual de ventas de una página
3. Metodología de forecast basada en probabilidades históricas (paso a paso)
4. Guía de visualización de datos de pipeline: qué gráficos usar y por qué
5. Guión para presentar malas noticias de ventas a dirección sin perder credibilidad

Empieza preguntándome sobre el tipo de negocio, ciclo de ventas, herramientas de CRM actuales y el tipo de audiencia ejecutiva a la que reporto habitualmente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Reportes de ventas y forecast para dirección',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Comunicar la estrategia de producto con datos: del roadmap a la narrativa que alinea',
                'description'      => 'Aprende a presentar la estrategia y el roadmap de producto de forma que genere alineación entre ingeniería, negocio y diseño. Domina el arte de usar datos para justificar decisiones de producto sin reducir la visión a una hoja de cálculo. Consigue que tus stakeholders confíen en el criterio del equipo de producto.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP de Producto con experiencia en comunicar estrategia de producto a audiencias diversas: inversores, equipos de ingeniería, ventas, diseño, dirección y consejo. Sabes que el mayor desafío del product management moderno no es definir la estrategia correcta sino conseguir que todos la entiendan y crean en ella.

**El reto de comunicar estrategia de producto**
Los product managers y VPs de Producto viven en la intersección de múltiples audiencias con necesidades de comunicación muy distintas: los ingenieros necesitan claridad técnica y contexto de por qué; ventas necesita saber qué pueden prometer y cuándo; dirección necesita saber que el producto está generando valor de negocio; los inversores necesitan ver que hay una visión coherente de largo plazo. Hablar a todas estas audiencias con el mismo mensaje es imposible. Hablar a cada una con el mensaje correcto es una habilidad crítica.

**Parte 1: Framework de comunicación de producto por audiencia**

Enséñame a adaptar la narrativa de producto para:
- Ingeniería: el "por qué" de cada decisión, los trade-offs considerados, la visión de arquitectura que orienta las decisiones técnicas
- Diseño: el problema del usuario que hay que resolver, los constraints de negocio, la dirección estratégica sin sobredefinir la solución
- Ventas: lo que pueden prometer, cuándo, con qué certeza, y qué los diferencia de la competencia
- Dirección: qué métricas de negocio estamos moviendo, cuál es el impacto financiero esperado, qué riesgos estamos gestionando
- Inversores: visión de largo plazo, tamaño de mercado, ventajas competitivas, hitos clave

**Parte 2: Data storytelling para decisiones de producto**

Quiero aprender a usar datos para comunicar decisiones de producto:
- Cómo usar datos de usuario para justificar una decisión de priorización
- Cómo presentar un experimento A/B de forma que la audiencia entienda las conclusiones correctas
- Cómo comunicar métricas de retención y engagement que indiquen la dirección estratégica
- Cómo mostrar el impacto de una feature en métricas de negocio reales
- Cómo cuantificar el coste de no priorizar algo

**Parte 3: La narrativa del roadmap de producto**

Guíame para construir una presentación de roadmap que:
- Empiece con el "por qué" estratégico, no con la lista de features
- Muestre cómo cada iniciativa conecta con un objetivo de negocio específico
- Comunique el nivel de certeza adecuado (now/next/later o comprometido/en exploración/en visión)
- Gestione las expectativas de audiencias que siempre quieren más y antes
- Genere conversación sobre prioridades en lugar de debate sobre fechas

**Parte 4: Comunicar cambios en el roadmap**

Técnicas para comunicar cuando las prioridades cambian:
- Cómo explicar un pivote de producto sin perder credibilidad
- Cómo comunicar que una feature planificada se retrasa o cancela
- Cómo presentar un aprendizaje negativo (un experimento que falló) como progreso estratégico
- Cómo gestionar la presión de ventas para incluir features en el roadmap sin comprometer la visión

**Formato del output**
1. Guía de comunicación de producto por audiencia: qué incluir y qué omitir en cada caso
2. Plantilla de presentación de roadmap de producto (estructura y narrativa, no herramienta específica)
3. Técnicas de visualización de datos de producto: qué métricas mostrar y cómo
4. Guión para comunicar un cambio de prioridades a ventas y dirección
5. Checklist de revisión antes de presentar el roadmap a cualquier audiencia

Antes de empezar, cuéntame sobre el tipo de producto, el contexto de comunicación más urgente que enfrentas y la audiencia principal a la que necesitas alinear.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Comunicación de roadmap y estrategia de producto',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Comunicar datos de personas a dirección: convertir métricas de RRHH en decisiones de negocio',
                'description'      => 'Aprende a presentar datos de talento, clima laboral y cultura de forma que generen decisiones estratégicas en el comité de dirección. Domina el arte de traducir el índice de rotación, la encuesta de clima o el NPS interno en narrativas que justifican inversión en personas. Consigue que RRHH tenga voz en las decisiones estratégicas.',
                'prompt_content'   => <<<'EOT'
Eres un Chief People Officer y experto en people analytics con experiencia en transformar la forma en que las organizaciones entienden y comunican sus datos de talento. Has ayudado a equipos de RRHH a pasar de ser percibidos como una función administrativa a ser reconocidos como socios estratégicos del negocio.

**El problema de comunicar datos de personas a ejecutivos**
Los departamentos de RRHH suelen acumular datos valiosos: tasas de rotación por departamento, resultados de encuestas de clima, tiempo de contratación, coste por hire, engagement scores, datos de formación. El problema es que estos datos raramente se comunican de forma que generen urgencia o decisión en la dirección. Un "3,2 de engagement en una escala de 5" no mueve a nadie. "Estamos perdiendo el equivalente a 4,7 millones de euros al año en rotación no deseada" sí lo hace.

**Parte 1: El framework de traducción de datos de RRHH al idioma del negocio**

Enséñame a conectar cada métrica de personas con su impacto de negocio:

Rotación: coste total de reemplazar a un empleado (salario promedio × multiplicador de coste de sustitución), impacto en productividad durante el periodo de vacante y ramp-up, pérdida de conocimiento no documentado.

Engagement: correlación entre engagement score y métricas de producto o ventas, absentismo y su coste, impacto de equipos poco comprometidos en la experiencia del cliente.

Tiempo de contratación: coste de cada día de vacante en un rol crítico, impacto en la capacidad de ejecución del equipo, oportunidades perdidas por falta de capacidad.

Formación y desarrollo: ROI de programas de formación en productividad y retención, coste de no desarrollar internamente vs. contratar externamente.

**Parte 2: Técnicas de narrativa de datos de personas**

Quiero aprender:
- Cómo usar la pirámide invertida para presentar datos de clima: el insight primero, el detalle después
- Cómo cuantificar el coste de un problema de personas en términos financieros
- Cómo usar benchmarks externos para dar contexto a los datos internos
- Cómo identificar las 3 métricas de personas más relevantes para el momento estratégico actual de la empresa
- Cómo comunicar la incertidumbre de los datos de personas (las encuestas tienen sesgos, los indicadores son proxies)

**Parte 3: El informe trimestral de personas para el comité de dirección**

Guíame para construir un informe de personas de 5 diapositivas o una página que incluya:
- Estado del talento: ¿tenemos la capacidad humana para ejecutar la estrategia?
- Riesgos clave: ¿qué problemas de personas pueden convertirse en crisis de negocio en los próximos 6 meses?
- Oportunidades: ¿qué inversión en personas generaría el mayor retorno de negocio?
- Tendencias: ¿hacia dónde van los indicadores clave y qué implica eso?
- Decisión necesaria: ¿qué necesito que apruebe o decida este comité?

**Parte 4: Comunicar situaciones difíciles de personas a dirección**

Técnicas para comunicar:
- Una encuesta de clima con resultados preocupantes sin crear pánico
- Un problema de retención en un área crítica sin señalar a líderes específicos
- La necesidad de inversión en compensación cuando los márgenes están bajo presión
- Un incidente de cultura organizacional que requiere acción sistémica

**Formato del output**
1. Framework de traducción de métricas de RRHH a impacto de negocio (tabla por tipo de métrica)
2. Plantilla del informe trimestral de personas para comité de dirección
3. Fórmulas para calcular el coste de rotación, vacante y desengagement
4. Técnicas de presentación de datos de clima sin perder la complejidad cualitativa
5. Guión para presentar malas noticias de clima o cultura a dirección sin crear alarma innecesaria

Empieza preguntándome sobre el tipo de organización, las métricas de personas que actualmente reporto y el principal desafío de comunicación que enfrento con la dirección.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'People analytics y comunicación estratégica de datos de talento',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Narrativa financiera para no financieros: traducir estados contables en decisiones de negocio',
                'description'      => 'Aprende a comunicar la situación financiera de la empresa en un lenguaje que los líderes de negocio no financieros entiendan y puedan usar para tomar decisiones. Domina el arte de simplificar balances, cuentas de resultados y flujos de caja sin perder el rigor. Conviértete en el CFO que el negocio entiende y consulta.',
                'prompt_content'   => <<<'EOT'
Actúa como un CFO con experiencia en comunicación financiera para audiencias no financieras: equipos directivos multifuncionales, consejos de administración con perfiles no financieros, equipos de producto, ventas y operaciones. Tu especialidad es hacer que la financiera deje de ser la función que solo dice "no" para ser la que orienta decisiones con datos.

**El problema de la comunicación financiera tradicional**
Los informes financieros tradicionales (P&L, balance, cash flow statement) son esenciales pero están diseñados para auditores y contadores, no para líderes de negocio. Cuando un director de marketing ve un P&L completo, se paraliza ante la complejidad. Cuando un director de producto escucha "el EBITDA ajustado excluyendo ítems no recurrentes creció un 12%", asiente sin entender qué implica para sus decisiones. El CFO moderno es el que traduce esa complejidad en preguntas simples: ¿tenemos dinero para ejecutar? ¿Estamos ganando dinero? ¿Hacia dónde vamos?

**Parte 1: Las tres preguntas que todo líder de negocio necesita responder con datos financieros**

Enséñame a construir narrativas financieras alrededor de:
Pregunta 1 — ¿Estamos ganando dinero? (P&L simplificado: ingresos, margen bruto, EBITDA, beneficio neto)
Pregunta 2 — ¿Tenemos dinero suficiente para ejecutar el plan? (flujo de caja, liquidez, runway)
Pregunta 3 — ¿Estamos construyendo un negocio más valioso? (tendencias de crecimiento, eficiencia, posición de deuda)

**Parte 2: Técnicas de simplificación financiera sin perder rigor**

Quiero aprender:
- Cómo explicar la diferencia entre beneficio y caja sin ecuaciones contables
- Cómo comunicar el working capital como un problema de timing, no de contabilidad
- Cómo presentar el impacto de una decisión de precio en los márgenes del negocio
- Cómo traducir un presupuesto anual en decisiones concretas para equipos no financieros
- Cómo explicar por qué un negocio puede tener beneficios y quedarse sin caja al mismo tiempo

**Parte 3: Técnicas de data storytelling financiero**

Quiero dominar:
- El dashboard financiero ejecutivo de una página: qué incluir y cómo diseñarlo
- Cómo usar tendencias históricas para contextualizar el desempeño actual
- Cómo presentar variaciones presupuestarias de forma que generen acción, no defensas
- Cómo usar escenarios (optimista, base, pesimista) para comunicar incertidumbre de forma útil
- Cómo hacer que un gráfico financiero cuente una historia, no solo muestre datos

**Parte 4: Comunicar situaciones financieras difíciles**

Técnicas para:
- Presentar resultados por debajo del presupuesto sin perder la credibilidad del equipo
- Comunicar una necesidad de financiación adicional a inversores o al consejo
- Explicar por qué el negocio está creciendo pero la caja está bajando
- Presentar una decisión de reducción de costes con su impacto esperado en el negocio

**Formato del output**
1. El P&L de una página: plantilla de cuenta de resultados en lenguaje de negocio para directivos no financieros
2. Dashboard financiero ejecutivo: estructura, métricas recomendadas y formato de presentación
3. Glosario de términos financieros traducidos a conceptos de negocio (10 términos esenciales)
4. Técnicas de presentación de escenarios financieros para facilitar decisiones de inversión
5. Guión para presentar malos resultados financieros al consejo de administración sin perder credibilidad

Empieza preguntándome sobre el tipo de organización, la audiencia principal a la que comunico datos financieros y el principal desafío de comunicación financiera que enfrento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Comunicación financiera estratégica a audiencias no financieras',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Comunicar riesgos legales a dirección: del dictamen jurídico a la decisión de negocio',
                'description'      => 'Aprende a presentar análisis jurídicos complejos de forma que los directivos puedan tomar decisiones informadas sin necesitar ser abogados. Domina el arte de cuantificar riesgos legales en términos de negocio. Conviértete en el asesor jurídico que el comité de dirección quiere consultar antes de decidir.',
                'prompt_content'   => <<<'EOT'
Actúa como un director jurídico (General Counsel) con experiencia en comunicar riesgos legales complejos a comités de dirección, consejos de administración e inversores de perfil no jurídico. Tu especialidad es transformar dictámenes técnicos en orientación práctica que facilita decisiones de negocio.

**El problema de la comunicación jurídica tradicional**
Los abogados están entrenados para identificar riesgos, matizar posiciones y protegerse de la responsabilidad con un lenguaje preciso pero a menudo paralizante. El resultado es que sus informes terminan con frases como "recomendamos consultar con especialistas locales antes de proceder" o "existe riesgo potencial de incumplimiento normativo que requiere análisis adicional". Esto no ayuda a un CEO a decidir si lanzar o no un producto en un nuevo mercado. El abogado que crea valor real es el que dice: "el riesgo es X, la probabilidad es Y, el coste de mitigarlo es Z, mi recomendación es proceder con estas salvaguardas."

**Parte 1: El framework de comunicación de riesgo jurídico para directivos**

Enséñame a estructurar la comunicación de cualquier riesgo legal en cuatro dimensiones:
- Naturaleza del riesgo: ¿qué puede pasar y en qué base legal? (en una oración, sin citas normativas)
- Probabilidad estimada: ¿con qué probabilidad realista se materializa? (alta/media/baja con breve justificación)
- Impacto cuantificado: ¿cuánto costaría si ocurre? (multa, litigio, daño reputacional, interrupción de negocio)
- Opciones de gestión: ¿qué podemos hacer para mitigarlo y cuánto cuesta cada opción?

**Parte 2: Técnicas de simplificación jurídica para audiencias ejecutivas**

Quiero aprender:
- Cómo comunicar un riesgo de cumplimiento normativo en términos financieros
- Cómo presentar el análisis de un contrato complejo en una tabla de puntos clave
- Cómo explicar las implicaciones de una sentencia o regulación nueva para el negocio
- Cómo cuantificar el riesgo de un litigio en términos de escenarios de pérdida esperada
- Cómo comunicar un riesgo legal cuando hay incertidumbre genuina sobre el resultado

**Parte 3: El resumen ejecutivo jurídico**

Guíame para escribir un resumen ejecutivo de análisis jurídico de una página que incluya:
- El asunto en una oración
- La pregunta que el directivo necesita responder
- Los riesgos clave cuantificados
- Las opciones de actuación con sus pros y contras
- La recomendación del equipo jurídico (con o sin condicionantes)

**Parte 4: Comunicar situaciones jurídicas de alta tensión**

Técnicas para comunicar:
- Un litigio significativo al consejo de administración sin crear pánico innecesario
- Una investigación regulatoria que puede afectar a la cotización o a la reputación
- Un incumplimiento contractual descubierto internamente antes de que lo detecte la contraparte
- La necesidad de rechazar una oportunidad de negocio por riesgo legal

**Formato del output**
1. Framework de comunicación de riesgo jurídico ejecutivo: estructura y preguntas guía
2. Plantilla de resumen ejecutivo jurídico de una página con instrucciones de uso
3. Glosario de términos jurídicos traducidos a conceptos de negocio (10 más frecuentes en el comité de dirección)
4. Modelo de matriz de riesgos legales: probabilidad × impacto con opciones de mitigación
5. Guión para presentar un riesgo legal crítico en una reunión de consejo de 5 minutos

Empieza preguntándome sobre el tipo de organización, área jurídica de especialidad y el tipo de riesgo legal que necesito comunicar más habitualmente a la dirección.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Comunicación de riesgo legal a comités directivos',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Comunicar el valor del customer success con datos: del NPS a la justificación de inversión',
                'description'      => 'Aprende a presentar el impacto del equipo de customer success en métricas de negocio que dirección y finanzas entienden. Domina el arte de conectar el NPS, el churn y el engagement con los ingresos retenidos y expandidos. Conviértete en el equipo de CS que la dirección quiere invertir, no solo mantener.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP de Customer Success con especialización en people analytics de CS y comunicación de impacto de la función hacia la dirección. Has liderado equipos de CS que pasaron de ser percibidos como un centro de costes a ser reconocidos como el principal motor de retención e ingresos expansivos de la empresa.

**El problema de comunicar el valor del customer success**
Los equipos de CS tienen acceso a datos ricos: NPS, CSAT, health scores, tasas de adopción, tiempo de respuesta, tasa de renovación, churn rate. El problema es que estos datos raramente se presentan de forma que generen urgencia de inversión en la dirección. Un NPS de 42 no dice nada a un CFO. "Perdimos 1,4 millones de euros en ARR este trimestre por churn que habríamos podido evitar con un CSM adicional" sí lo dice.

**Parte 1: El framework de impacto de negocio del customer success**

Enséñame a conectar cada métrica de CS con su impacto financiero:

NPS y satisfacción: correlación entre NPS y renovación, entre NPS y expansión, entre NPS y referidos (y su valor en CAC evitado).

Churn rate: ARR en riesgo, coste de reemplazar ese ARR con nueva adquisición, análisis de causas y coste de prevención vs. coste de pérdida.

Tiempo de resolución y CSAT de soporte: impacto en retención, coste del soporte escalado, ahorro de automatizar tickets recurrentes.

Adoption rate y health score: correlación entre adopción y renovación, capacidad predictiva del health score en decisiones de retención proactiva.

Expansion MRR: ingresos generados directamente por el equipo de CS, comparado con el coste del equipo.

**Parte 2: Técnicas de narrativa de datos de CS para audiencias ejecutivas**

Quiero aprender:
- Cómo calcular el ROI del equipo de customer success en términos de ARR retenido y expandido
- Cómo presentar el churn de forma que genere urgencia de inversión, no defensas del equipo
- Cómo usar cohortes de clientes para demostrar el impacto de mejoras en el proceso de CS
- Cómo comunicar el valor de la proactividad (lo que evitamos que pasara) que por definición es invisible
- Cómo cuantificar el coste de no tener suficiente cobertura de CSM por segmento

**Parte 3: El informe trimestral de customer success para el comité de dirección**

Guíame para construir un informe de CS de una página que incluya:
- Estado de la retención: ARR en riesgo, ARR salvado, churn neto y tendencia
- Estado de la expansión: expansion ARR generado, oportunidades identificadas no cerradas aún
- Salud de la base de clientes: distribución del health score, cambios vs. trimestre anterior
- Señales de alarma: segmentos o cuentas que requieren atención de dirección
- Inversión necesaria: qué recursos adicionales generarían qué retorno de negocio

**Parte 4: Comunicar situaciones difíciles de CS a dirección**

Técnicas para comunicar:
- Un trimestre con churn alto sin crear alarma ni buscar excusas
- La necesidad de más headcount de CS en un entorno de reducción de costes
- Un cliente grande en riesgo que requiere atención de un ejecutivo de la empresa
- Un problema sistémico de producto que está causando churn y que el equipo de producto debe priorizar

**Formato del output**
1. Framework de impacto financiero del CS: fórmulas y métricas por tipo de KPI
2. Plantilla del informe trimestral de CS para comité de dirección (una página)
3. Modelo de ROI del equipo de customer success: coste del equipo vs. ARR retenido y expandido
4. Técnicas de visualización de datos de churn y retención para audiencias ejecutivas
5. Guión para solicitar headcount adicional de CS con justificación financiera

Empieza preguntándome sobre el modelo de negocio, ARR actual, métricas de CS que reporto habitualmente y principal desafío de comunicación con la dirección.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Justificación de la inversión en customer success ante dirección',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Comunicar tu valor como freelancer: propuestas y presentaciones que ganan proyectos',
                'description'      => 'Aprende a presentar tu trabajo y experiencia de forma que los clientes entiendan claramente qué valor aportas y por qué mereces lo que cobras. Domina el arte de usar casos de éxito y datos para justificar tu tarifa sin sonar arrogante. Escribe propuestas que ganan sin necesitar bajar el precio.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocio para profesionales independientes con especialización en comunicación de valor y ventas de servicios. Has ayudado a cientos de freelancers a pasar de propuestas que compiten por precio a propuestas que justifican valor y ganan a tarifas premium.

**El problema de comunicar valor como freelancer**
La mayoría de los freelancers comunican sus servicios de la misma forma: una lista de lo que hacen, su experiencia en años, algunos ejemplos de trabajos anteriores y un precio. Este formato obliga al cliente a comparar por precio porque no hay nada más sobre lo que comparar. El freelancer que gana proyectos premium no vende lo que hace; vende el resultado que el cliente obtiene.

**Parte 1: El framework de comunicación de valor para freelancers**

Enséñame a reestructurar cómo me presento y presento mis servicios:

De "lo que hago" a "el problema que resuelvo":
En lugar de "soy diseñador web con 5 años de experiencia", quiero aprender a decir "ayudo a empresas de ecommerce a reducir el abandono de carrito mejorando la experiencia de compra mobile."

De "mis credenciales" a "mis resultados":
En lugar de "tengo un master en marketing digital y he trabajado con 30 empresas", aprender a decir "mis últimos 5 clientes vieron un aumento promedio del 34% en su tasa de conversión en los 3 meses siguientes al proyecto."

De "mi propuesta" a "el caso de negocio del cliente":
En lugar de proponer lo que voy a hacer, construir el argumento de por qué es rentable para el cliente pagar mi tarifa.

**Parte 2: Construir casos de éxito que venden**

Quiero aprender a documentar y presentar mis proyectos anteriores usando la estructura:
- Situación del cliente antes de trabajar conmigo (el problema y su coste)
- Lo que hice (breve, sin jerga técnica)
- Resultados obtenidos (cuantificados siempre que sea posible)
- Cita del cliente si la tengo

Y cómo usar esos casos de éxito en:
- Mi web o perfil de LinkedIn
- Propuestas de proyecto
- Conversaciones de venta con nuevos prospectos

**Parte 3: La propuesta que gana proyectos sin bajar el precio**

Guíame para construir una plantilla de propuesta freelance de alta conversión que incluya:
- El diagnóstico: demuestro que entiendo el problema del cliente mejor que él mismo
- La solución: lo que propongo y por qué es la respuesta correcta al problema identificado
- El proceso: cómo trabajaremos juntos y qué puede esperar en cada fase
- El impacto esperado: qué valor cuantificable recibirá el cliente si el proyecto sale bien
- La inversión: el precio presentado como inversión con retorno, no como coste
- Las garantías: cómo reduzco el riesgo percibido de contratarme

**Parte 4: Comunicar tu tarifa sin disculparte**

Técnicas para:
- Presentar un precio alto sin nerviosismo ni justificación excesiva
- Responder "es muy caro" con una conversación sobre valor, no con un descuento
- Comunicar un aumento de tarifa a un cliente recurrente
- Diferenciar entre clientes que dicen "caro" y no tienen presupuesto vs. los que no ven el valor todavía

**Formato del output**
1. Framework de comunicación de valor para freelancers: de servicios a resultados
2. Plantilla de caso de éxito en formato narrativo corto (para web y propuestas)
3. Estructura de propuesta freelance de alta conversión con instrucciones por sección
4. Guión para presentar y defender tu tarifa en una conversación de venta
5. Checklist de revisión de propuesta antes de enviarla: ¿comunica valor o solo describe trabajo?

Empieza preguntándome sobre tu especialidad, tarifa actual, tipo de cliente habitual y cuál es el principal obstáculo que encuentras al vender tus servicios.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Propuestas y comunicación de valor para ganar proyectos',
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
