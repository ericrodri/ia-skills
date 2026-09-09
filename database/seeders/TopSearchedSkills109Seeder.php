<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills109Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de go-to-market para B2B SaaS',
                'description'      => 'El GTM que funciona para software empresarial: canales, ICP, messaging y el orden de las acciones para llegar al mercado de forma eficiente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en estrategia go-to-market para empresas B2B SaaS con experiencia en llevar productos al mercado empresarial desde cero hasta los primeros 100 clientes y más allá.

Necesito que me ayudes a diseñar una estrategia de go-to-market completa para mi producto B2B SaaS. Aquí está el contexto de mi situación:

**Información del producto:**
- Descripción del producto: [describe brevemente qué hace tu software]
- Problema que resuelve: [el dolor principal que elimina]
- Fase actual: [pre-lanzamiento / recién lanzado / con primeros clientes / en crecimiento]
- ARR actual si aplica: [cifra o "pre-revenue"]

**Información del mercado:**
- Sector vertical: [el sector al que va dirigido]
- Tamaño de empresa objetivo: [startup / PYME / mid-market / enterprise]
- Geografía: [mercado o mercados objetivo]
- Competidores principales: [2-3 alternativas que usan tus clientes hoy]

Con esta información, desarrolla una estrategia GTM completa que cubra:

**1. Definición del ICP (Ideal Customer Profile)**
Define con precisión quién es el cliente ideal: industria, tamaño de empresa, cargo del decisor, cargo del usuario final, síntomas que indican que tienen el problema que resuelvo, señales de compra que puedo usar para prospección. Explica cómo priorizar si tengo varios segmentos potenciales y por qué es un error ir a todos a la vez al principio.

**2. Messaging y posicionamiento**
Crea el marco de messaging: propuesta de valor en una frase, tres beneficios principales con prueba, objeciones más comunes y cómo desactivarlas, diferenciación frente a la competencia sin atacar directamente. Incluye el "mensaje de ascensor" de 30 segundos que debería usar en cualquier conversación de ventas.

**3. Canales de adquisición y secuencia de acciones**
Explica qué canales tienen sentido para B2B SaaS según la fase en que me encuentro:
- Fase 0 (pre-revenue): ventas directas, red personal, LinkedIn outreach manual
- Fase 1 (primeros 10 clientes): contenido, SEO, comunidades, webinars
- Fase 2 (escalando): paid acquisition, partnerships, canal de revendedores
Para cada canal, indica el esfuerzo, el tiempo hasta ver resultados y las métricas de éxito.

**4. Modelo de ventas**
Recomienda el motion de ventas más adecuado (PLG / sales-led / hybrid) con justificación basada en el precio medio, la complejidad de implementación y el perfil del comprador. Explica el proceso de ventas paso a paso: discovery, demo, prueba, propuesta, cierre y onboarding.

**5. Métricas y objetivos a 90 días**
Define los KPIs que debo seguir en los primeros 90 días de la estrategia GTM: número de conversaciones de ventas, tasa de conversión a prueba, tasa de conversión a pago, CAC inicial estimado, tiempo de ciclo de ventas. Proporciona benchmarks de referencia para B2B SaaS en etapa temprana.

**6. Errores más comunes a evitar**
Lista los 5 errores más frecuentes que cometen los fundadores B2B SaaS al diseñar su GTM y cómo evitarlos. Sé directo y específico, no genérico.

**7. Plan de acción semana a semana (primeras 4 semanas)**
Detalla las acciones concretas que debería ejecutar en las primeras cuatro semanas para validar los supuestos del GTM antes de invertir en escalar. Incluye cómo medir si el supuesto se confirma o refuta.

Al final, dame un resumen ejecutivo de una página con las decisiones más importantes que debo tomar y en qué orden.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar una estrategia de go-to-market B2B SaaS completa con ICP, canales, modelo de ventas y plan de acción para las primeras semanas.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Decisiones de arquitectura con ADRs',
                'description'      => 'Documenta y comunica las decisiones técnicas importantes para que el equipo las entienda y las respete años después con Architecture Decision Records.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de software senior con experiencia en equipos distribuidos y en proyectos de larga duración donde la documentación técnica marca la diferencia entre un equipo que avanza rápido y uno que tropiza con los mismos problemas una y otra vez.

Necesito tu ayuda para crear un Architecture Decision Record (ADR) profesional para una decisión técnica importante que debo documentar. Proporciona el contexto de la decisión:

**Información de la decisión:**
- Decisión técnica a documentar: [describe la decisión que debes tomar o que ya tomaste]
- Contexto del sistema: [describe brevemente el sistema o la parte del sistema afectada]
- Fase del proyecto: [greenfield / sistema existente en evolución / migración / refactor]
- Equipo: [tamaño del equipo, nivel de experiencia, si es distribuido o no]
- Restricciones conocidas: [presupuesto, tiempo, skills del equipo, constraints técnicos]

Con este contexto, genera un ADR completo y profesional usando la siguiente estructura:

**1. Título y metadatos**
Número de ADR, título descriptivo en formato "Usar X para Y", fecha, estado (propuesto / aceptado / deprecado / supersedido), autores y revisores involucrados.

**2. Contexto**
Explica la situación que fuerza esta decisión: el problema de negocio o técnico que existe, por qué hay que tomar una decisión ahora, qué ocurriría si no se toma, y cuáles son las fuerzas en juego (velocidad de desarrollo, escalabilidad, coste operativo, mantenibilidad, conocimiento del equipo).

**3. Opciones consideradas**
Para cada alternativa evaluada (mínimo tres, incluyendo "no cambiar nada"):
- Descripción breve de la opción
- Pros: qué problemas resuelve y qué ventajas ofrece
- Contras: qué problemas introduce o qué ventajas sacrifica
- Esfuerzo de implementación estimado
- Riesgo técnico y operacional

**4. Decisión**
La opción elegida con justificación clara. Explica por qué esta opción es mejor que las alternativas para el contexto específico, no en abstracto. Incluye los factores decisivos que rompieron el empate si los hubo.

**5. Consecuencias**
Divide en positivas (qué mejora con esta decisión), negativas (qué empeora o qué deuda técnica introduce), neutrales (qué cambia sin ser mejor ni peor), y decisiones que quedan abiertas para el futuro que esta decisión no resuelve.

**6. Plan de implementación y revisión**
Hitos principales de implementación, criterios de éxito medibles, fecha o condición de revisión del ADR (cuándo se revisitará si las circunstancias cambian), y cómo se comunicará la decisión al resto del equipo.

**7. Referencias**
Artículos, RFCs, issues, pull requests, conversaciones de Slack o documentos que respaldan el análisis o que el lector debería consultar para entender mejor el contexto.

Después de generar el ADR, explica:
- Cómo debería almacenarse y versionarse en el repositorio (estructura de carpetas recomendada, naming convention)
- Cómo incorporar los ADRs al proceso de revisión de código para que nuevos miembros del equipo los descubran de forma natural
- Las tres señales de que un ADR debería actualizarse o deprecarse

Finaliza con una plantilla Markdown limpia del ADR que pueda copiar directamente al repositorio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Crear un Architecture Decision Record completo y profesional para documentar decisiones técnicas importantes de forma que perduren y sean útiles años después.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Estrategia de diseño de producto',
                'description'      => 'Cómo el diseño contribuye a la estrategia de negocio: desde investigación hasta impacto en métricas de negocio concretas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Diseño con experiencia en empresas de producto digital que ha liderado equipos de diseño y ha conectado el trabajo de diseño con los resultados de negocio de forma medible y consistente.

Necesito tu ayuda para construir una estrategia de diseño de producto que esté alineada con los objetivos de la empresa y que permita al equipo de diseño demostrar su impacto con datos. Proporciona el contexto de tu situación:

**Contexto del producto y la empresa:**
- Tipo de producto: [SaaS / app móvil / plataforma / e-commerce / otro]
- Fase de la empresa: [startup temprana / crecimiento / escala / empresa establecida]
- Tamaño del equipo de diseño: [número de diseñadores y sus especialidades]
- Objetivos de negocio principales de este año: [crecimiento de usuarios / retención / conversión / expansión de mercado]
- Problema de diseño más urgente: [el mayor dolor que tienes hoy]

Con este contexto, desarrolla una estrategia de diseño de producto completa:

**1. Diagnóstico de la madurez de diseño actual**
Evalúa en qué nivel de madurez de diseño se encuentra la organización en una escala de 1 a 5 (desde "diseño como decoración" hasta "diseño como ventaja competitiva"). Describe las características de cada nivel y qué acciones son prioritarias para avanzar al siguiente.

**2. Principios de diseño del producto**
Propone entre cuatro y seis principios de diseño específicos para el producto (no los genéricos de "simple" o "intuitivo"). Para cada principio: la formulación del principio, qué significa en la práctica, un ejemplo de cómo se aplica en una decisión de diseño real, y cómo ayuda a resolver conflictos de criterio dentro del equipo.

**3. Conexión diseño-negocio**
Construye el mapa de cómo las decisiones de diseño afectan las métricas de negocio. Para los principales flujos del producto, identifica: qué fricción de diseño existe hoy, qué métrica de negocio impacta esa fricción, cuánto podría mejorar la métrica si se resuelve el problema, y cómo se mediría el impacto.

**4. Proceso de investigación de usuarios**
Define el sistema de research continuo: qué métodos usar (entrevistas, tests de usabilidad, surveys, analytics, session recordings), con qué frecuencia, cómo sintetizar y distribuir los insights al equipo de producto e ingeniería, y cómo asegurarte de que las decisiones de diseño estén basadas en evidencia y no en opiniones.

**5. Sistema de diseño y velocidad de ejecución**
Describe cómo construir o evolucionar el design system para que acelere la entrega sin sacrificar calidad: qué componentes son prioritarios, cómo gestionar la deuda de diseño, cómo colaborar con el equipo de frontend para mantener la paridad entre Figma y código.

**6. Métricas de éxito del equipo de diseño**
Define los KPIs que usarás para medir el impacto del diseño: métricas de producto (task success rate, tiempo en tarea, error rate), métricas de proceso (velocity, ratio de iteraciones antes de entrega), métricas de satisfacción (NPS, CSAT, SUS score). Explica cómo presentar estos datos a la dirección de forma convincente.

**7. Hoja de ruta de diseño a 12 meses**
Propone una hoja de ruta trimestral con iniciativas de diseño ordenadas por impacto en negocio y esfuerzo. Incluye qué recursos se necesitan, qué dependencias tiene con otros equipos y cómo gestionar las expectativas de los stakeholders cuando hay más demanda de diseño que capacidad.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir una estrategia de diseño de producto alineada con los objetivos de negocio que permita medir el impacto del diseño con datos.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia de pricing para SaaS',
                'description'      => 'Elige el modelo de precios que maximiza el ARR y reduce la fricción de compra para software como servicio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en pricing de SaaS que ha diseñado y optimizado modelos de precios para empresas de software en distintas etapas, desde startups en fase seed hasta empresas con decenas de millones en ARR.

Necesito que me ayudes a diseñar o revisar la estrategia de pricing de mi producto SaaS. Proporciona el contexto de tu situación:

**Información del producto y negocio:**
- Descripción del producto: [qué hace tu software en una frase]
- Segmento objetivo principal: [B2C / SMB / mid-market / enterprise]
- ARR actual o ticket medio si ya tienes clientes: [cifra o "pre-revenue"]
- Modelo de precios actual si existe: [freemium / trial / por usuario / por uso / flat fee / otro]
- Problema o duda principal con el pricing actual: [por qué estás revisando el pricing]

Con este contexto, desarrolla una estrategia de pricing completa:

**1. Elección del modelo de monetización**
Analiza los cuatro grandes modelos de pricing para SaaS (por usuario/seat, por uso/consumption, por valor/outcome, flat fee) con sus pros y contras aplicados a tu contexto específico. Recomienda el modelo o la combinación de modelos más adecuada y justifica por qué. Explica también cuándo tiene sentido el freemium y cuándo es una trampa que destruye valor.

**2. Estructura de planes y tiers**
Diseña la arquitectura de planes: cuántos planes tener (normalmente tres es el óptimo psicológico), qué incluye cada plan, cómo nombrarlos, cuál debería ser el plan "âncora" que hace que el plan objetivo parezca razonable. Explica el principio del Good-Better-Best y cómo aplicarlo para maximizar el ARPU sin aumentar la fricción de ventas.

**3. Fijación de precios**
Explica cómo fijar el precio de cada plan usando las tres metodologías: cost-plus (suelo), competencia (referencia) y valor percibido (techo). El precio debería estar más cerca del techo que del suelo. Incluye cómo hacer investigación de willingness-to-pay con los clientes actuales y potenciales sin revelar los precios que estás considerando.

**4. Estrategia de descuentos y negociación**
Define las reglas de descuento: cuándo sí, cuándo no, cuánto máximo, quién puede aprobarlo y cómo evitar que los descuentos se conviertan en el precio real. Explica cómo tratar los descuentos por volumen, por pago anual y por clientes estratégicos sin destruir la percepción de valor.

**5. Transición de precios para clientes existentes**
Si ya tienes clientes, cómo gestionar una subida de precios o un cambio de modelo sin perder la confianza ni generar churn: comunicación, grandfathering, compensaciones y el momento adecuado para hacerlo.

**6. Métricas de pricing a monitorizar**
Define los KPIs que indican si el pricing está funcionando: ARPU, expansión revenue, churn por tier, conversión de trial a pago, distribución de clientes por plan, ratio de descuento medio. Explica qué señal indica que el precio es demasiado bajo o demasiado alto.

**7. Experimentos de pricing para los próximos 90 días**
Propón tres experimentos concretos de pricing que pueda ejecutar en los próximos 90 días para optimizar el modelo actual con datos reales, sin necesidad de rediseñar todo desde cero.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar o revisar la estrategia de pricing de un SaaS para maximizar el ARR con el modelo de precios y la estructura de planes más adecuada.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product strategy framework',
                'description'      => 'Cómo construir una estrategia de producto que el CEO, el board y el equipo puedan alinear con la estrategia de la empresa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CPO con experiencia en empresas de producto que ha construido y comunicado estrategias de producto que han conseguido alineación real de la dirección, el consejo y el equipo de ingeniería.

Necesito tu ayuda para construir una estrategia de producto sólida y comunicable para mi empresa. Proporciona el contexto de tu situación:

**Contexto de la empresa y el producto:**
- Descripción del producto: [qué hace el producto y para quién]
- Fase de la empresa: [startup / series A-B / growth / scale-up]
- Objetivos de negocio del año: [los dos o tres objetivos más importantes de la empresa este año]
- Estado actual del producto: [qué funciona bien, qué está roto, qué falta]
- Retos de alineación que tienes hoy: [por qué es difícil alinear al equipo y a la dirección en torno al producto]

Con este contexto, desarrolla un framework de estrategia de producto completo:

**1. Visión y misión de producto**
Diferencia entre visión (dónde queremos llegar en 3-5 años) y misión (por qué existimos). Formula ambas de manera que sean inspiradoras pero concretas: que el equipo pueda usarlas para tomar decisiones de priorización sin consultarte. Incluye cómo validar que la visión está alineada con la estrategia de la empresa y no es solo aspiracional.

**2. Apuestas estratégicas**
Define las tres a cinco apuestas estratégicas de producto para los próximos 12-18 meses. Una apuesta estratégica es una hipótesis de alto nivel sobre cómo el producto puede crear valor diferencial. Para cada apuesta: la hipótesis, el resultado esperado en métricas de negocio, los riesgos principales, y cómo sabrás si se está validando o refutando.

**3. Ahora / siguiente / después (Now / Next / Later)**
Construye el marco de priorización temporal: qué está en ejecución ahora, qué viene en el siguiente ciclo y qué está en el horizonte de largo plazo. Explica cómo mantener este marco actualizado sin que se convierta en un roadmap de características con fechas falsas que decepciona a todo el mundo.

**4. Métricas del norte**
Define la North Star Metric del producto y el árbol de métricas que la explican. La North Star debe capturar el valor que el producto entrega a los usuarios, no las métricas de vanidad. Explica cómo la North Star conecta con los objetivos de negocio (ARR, retención, crecimiento) y cómo comunicarla al equipo para que cada iniciativa pueda conectarse a ella.

**5. Gestión de stakeholders y comunicación de la estrategia**
Cómo presentar la estrategia de producto al CEO y al board de forma que genere confianza y soporte, no preguntas incómodas. Cómo conseguir que el equipo de ingeniería se apropie de la estrategia y no la vea como un documento externo. Cómo gestionar las peticiones ad hoc que interrumpen la ejecución de la estrategia.

**6. Ciclo de revisión de la estrategia**
Define con qué frecuencia revisar la estrategia, qué eventos deben desencadenar una revisión fuera del ciclo habitual (pivots, cambios de mercado, resultados inesperados) y cómo gestionar la tensión entre consistencia estratégica y capacidad de adaptación.

**7. Template de estrategia de producto en una página**
Genera un documento de una página con la estructura que usaría para comunicar la estrategia de producto a la dirección: visión, apuestas, métricas y próximos pasos. Este documento debe ser lo suficientemente claro para que alguien que no conoce el producto lo entienda en cinco minutos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir una estrategia de producto con visión, apuestas estratégicas y métricas del norte que alinee a la dirección, el board y el equipo.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Estrategia de personas a 3 años',
                'description'      => 'El plan de RRHH a 3 años: qué roles contratar, qué cultura construir y cómo la estrategia de personas habilita la estrategia de negocio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief People Officer con experiencia en empresas en crecimiento que ha construido organizaciones de alto rendimiento alineando la estrategia de personas con la estrategia de negocio de forma pragmática y medible.

Necesito tu ayuda para diseñar una estrategia de personas a tres años para mi empresa. Proporciona el contexto de tu situación:

**Contexto de la empresa:**
- Sector y tipo de empresa: [describe brevemente el negocio]
- Tamaño actual del equipo: [número de empleados y principales áreas]
- Objetivos de negocio a 3 años: [crecimiento de ingresos, expansión geográfica, nuevos productos]
- Cultura actual (cómo la describirías honestamente): [los valores reales, no los del mural de la oficina]
- Principal reto de personas hoy: [atracción de talento / retención / rendimiento / cultura / estructura]

Con este contexto, desarrolla una estrategia de personas completa para los próximos tres años:

**1. Del plan de negocio al plan de personas**
Explica cómo traducir los objetivos de negocio a tres años en necesidades de personas: qué capacidades se necesitarán que hoy no existen, qué roles serán críticos en cada fase del crecimiento, cuáles pueden desarrollarse internamente y cuáles deben contratarse fuera. Incluye el modelo de workforce planning que debería usar.

**2. Estrategia de atracción de talento**
Define el employer brand que necesita la empresa para competir por el talento que necesita. Incluye la propuesta de valor al empleado (EVP), los canales de reclutamiento más efectivos según el tipo de rol, cómo construir un pipeline de talento pasivo, y las métricas del proceso de selección que deberías monitorizar (time to hire, quality of hire, offer acceptance rate).

**3. Estrategia de desarrollo y retención**
Diseña el sistema de desarrollo de talento: planes de carrera claros y creíbles, programas de formación que conecten con las necesidades de negocio, feedback continuo, gestión del rendimiento sin burocracia. Explica cómo identificar a los top performers y a los empleados en riesgo de irse antes de que sea demasiado tarde.

**4. Cultura y valores operativos**
La diferencia entre los valores que están en el mural y los valores que realmente guían el comportamiento. Cómo definir o redefinir la cultura de forma que sea un activo competitivo y no un eslogan. Qué rituales, procesos de decisión y comportamientos de los líderes refuerzan la cultura deseada.

**5. Estructura organizativa y evolución**
Cómo debería evolucionar la estructura de la empresa a medida que crece: cuándo crear nuevas funciones, cuándo contratar managers, cuándo descentralizar decisiones. Los errores más comunes en la estructura organizativa de empresas en crecimiento y cómo evitarlos.

**6. Compensación y beneficios**
Framework de compensación que sea competitivo, equitativo y sostenible: bandas salariales, criterios de progresión, variable e incentivos, beneficios que realmente valoran los empleados versus los que son caros y no mueven la aguja de retención.

**7. Métricas de RRHH y cuadro de mando**
Los indicadores que debería revisar mensualmente para saber si la estrategia de personas está funcionando: eNPS, rotación voluntaria segmentada, tiempo de cobertura de vacantes, coste por contratación, absentismo, distribución del rendimiento. Cómo presentar estos datos a la dirección de forma que generen conversaciones útiles.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar una estrategia de personas a 3 años con plan de contratación, desarrollo de talento, cultura y métricas alineada con los objetivos de negocio.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Estrategia de capital para fundadores',
                'description'      => 'Cuándo levantar financiación, cuánto levantar, de quién y a qué valoración: el mapa de decisiones financieras del fundador.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor financiero experto en startups y venture capital con experiencia acompañando a fundadores en sus decisiones de financiación desde la fase pre-seed hasta la serie B y más allá.

Necesito que me ayudes a diseñar la estrategia de capital de mi empresa. Proporciona el contexto de tu situación:

**Contexto de la empresa:**
- Descripción del negocio: [qué hace la empresa y en qué mercado]
- Fase actual: [idea / MVP / primeros ingresos / creciendo / rentable]
- Financiación levantada hasta ahora: [rondas anteriores, importes y dilución acumulada]
- Métricas financieras clave actuales: [ARR/MRR, crecimiento mensual, burn rate, runway actual]
- Objetivo de la próxima ronda si aplica: [para qué usarías el capital]

Con este contexto, desarrolla una estrategia de capital completa:

**1. ¿Levantar capital o no?**
Analiza honestamente si levantar venture capital es la decisión correcta para este negocio en este momento. Explica cuándo el VC es la herramienta equivocada (negocios que no pueden escalar exponencialmente, fundadores que no quieren perder control, mercados demasiado pequeños). Describe las alternativas: bootstrapping, revenue-based financing, préstamos bancarios, subvenciones públicas, business angels sin dilución significativa.

**2. Cuánto capital necesito**
Metodología para calcular cuánto capital levantar: cómo proyectar el uso de fondos a 18-24 meses, cómo calcular el burn rate esperado, cuánto runway mínimo necesitas para llegar al siguiente hito que mejore la valoración. La regla de oro: levanta para llegar al siguiente inflection point con margen de seguridad, no para ejecutar el plan perfectamente.

**3. Cuándo es el momento adecuado**
Las señales que indican que una empresa está lista para levantar una ronda específica: qué métricas, qué pruebas de concepto y qué narrativa necesitas para cada etapa (pre-seed, seed, serie A). Explica por qué intentar levantar antes de tener esas señales destruye tiempo y credibilidad.

**4. De quién levantar capital**
Cómo elegir los inversores más adecuados: la diferencia entre smart money y dumb money, cómo evaluar un VC más allá de su marca (qué preguntas hacer a founders de su portfolio), cuándo tiene sentido un business angel versus un fondo, cómo construir el cap table desde el principio para no tener problemas en rondas futuras.

**5. Valoración y términos del deal**
Cómo pensar en la valoración: el problema de sobrevaluar en rondas tempranas, los términos del term sheet que importan más que la valoración (liquidation preference, anti-dilution, pro-rata rights, board composition), cómo negociar sin perder la relación con el inversor.

**6. El proceso de fundraising**
Cómo estructurar el proceso: preparación de materiales (pitch deck, data room, financial model), cómo construir pipeline de inversores, cómo crear momentum y urgencia sin mentir, cuánto tiempo reservar para el proceso (normalmente más del que piensas) y cómo gestionarlo sin que destruya el foco operativo.

**7. Gestión del capital post-inversión**
Cómo gestionar la relación con los inversores después de cerrar la ronda: reporting, board meetings, cómo pedir ayuda cuando la necesitas, cómo gestionar expectativas en momentos difíciles. Los errores más comunes de los fundadores con su cap table y sus inversores y cómo evitarlos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar la estrategia de capital de una startup: cuándo levantar, cuánto, de quién y cómo gestionar el proceso de fundraising sin perder el foco operativo.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Estrategia legal para startups en crecimiento',
                'description'      => 'Cuándo contratar abogado interno, cuándo usar firma externa y cómo priorizar el trabajo legal con presupuesto limitado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un General Counsel con experiencia en startups y scale-ups que ha construido la función legal desde cero y sabe cómo priorizar el trabajo legal con presupuesto limitado para maximizar la protección y minimizar el riesgo.

Necesito tu ayuda para diseñar la estrategia legal de mi empresa en crecimiento. Proporciona el contexto de tu situación:

**Contexto de la empresa:**
- Tipo de negocio y sector: [describe brevemente el modelo de negocio]
- Fase de la empresa: [early stage / serie A-B / growth]
- Mercados donde opera: [países o regiones]
- Situación legal actual: [¿tienes asesor legal? ¿han auditado la empresa recientemente?]
- Riesgo legal más urgente que percibes: [contractual / laboral / propiedad intelectual / regulatorio / privacidad]

Con este contexto, desarrolla una estrategia legal completa:

**1. Diagnóstico de riesgos legales por prioridad**
Analiza los principales riesgos legales según la fase y el sector de la empresa. Clasifícalos en tres categorías: críticos (pueden matar el negocio), importantes (pueden costar mucho dinero o tiempo) y secundarios (molestias gestionables). Para cada categoría crítica, explica qué medida preventiva hay que tomar y en qué plazo.

**2. Cuándo contratar abogado interno vs. firma externa**
Los criterios para decidir cuándo añadir el primer jurista interno: volumen de trabajo legal, coste comparado con firma externa, necesidad de conocimiento profundo del negocio. Para cada tipo de trabajo legal (contratos comerciales, laboral, financiación, PI, regulatorio, litigación), recomienda si debe ser interno, externo o una combinación.

**3. Cómo maximizar el presupuesto legal**
Estrategias para hacer más con menos en la función legal: qué se puede estandarizar y automatizar (plantillas de contratos, políticas de privacidad, NDAs), cómo negociar con firmas externas (retainer vs. por horas, project-based), cómo construir una base de conocimiento legal interna que reduzca la dependencia de asesoría externa para preguntas recurrentes.

**4. Contratos esenciales para el crecimiento**
Los contratos que toda startup en crecimiento debe tener bien redactados y por qué: acuerdos de fundadores, contratos de empleados y contractors, términos y condiciones, acuerdos de confidencialidad, contratos enterprise, acuerdos con inversores. Para cada uno, los cláusulas más críticas que hay que revisar y los errores más comunes.

**5. Propiedad intelectual como activo estratégico**
Cómo proteger la propiedad intelectual de la empresa: registro de marcas (cuándo y dónde), protección del código (acuerdos de cesión con empleados y contractors, code escrow para clientes enterprise), manejo de datos como activo, cuándo tiene sentido considerar patentes y cuándo no merece la pena.

**6. Cumplimiento regulatorio prioritario**
Cómo identificar qué regulaciones aplican al negocio y priorizarlas: GDPR y privacidad de datos, normativa sectorial específica, regulación laboral en los mercados donde opera, obligaciones fiscales internacionales. La diferencia entre cumplimiento legal mínimo y cumplimiento que genera confianza con clientes enterprise.

**7. Hoja de ruta legal para los próximos 12 meses**
Un plan de acción concreto con las iniciativas legales más importantes ordenadas por urgencia e impacto. Incluye estimación de presupuesto, recursos necesarios y dependencias con otros departamentos (RRHH, producto, finanzas).
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar la estrategia legal de una startup en crecimiento: priorización de riesgos, cuándo internalizar vs. externalizar y cómo maximizar el presupuesto legal.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Estrategia de customer success para maximizar el NRR',
                'description'      => 'Diseña el modelo de CS que maximiza el Net Revenue Retention: segmentación, playbooks, tecnología y el equipo que lo ejecuta.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP of Customer Success con experiencia en SaaS B2B que ha construido equipos de CS desde cero y ha optimizado el NRR de forma sistemática y medible en empresas en distintas fases de crecimiento.

Necesito tu ayuda para diseñar la estrategia de customer success de mi empresa. Proporciona el contexto de tu situación:

**Contexto del negocio y los clientes:**
- Tipo de producto SaaS y sector: [describe brevemente el producto y el mercado]
- Ticket medio anual (ACV): [cifra aproximada]
- Número de clientes actuales: [número y distribución por segmento si la conoces]
- NRR actual o estimado: [porcentaje o "no lo medimos todavía"]
- Principal causa de churn que identificas: [por qué se van los clientes]

Con este contexto, desarrolla una estrategia de customer success completa:

**1. Modelo de segmentación de clientes**
Define la segmentación de la base de clientes en función del ACV, el potencial de expansión y el nivel de riesgo. Propón la estructura de cobertura de cada segmento (high-touch, mid-touch, tech-touch / digital CS) con la ratio CSM:clientes adecuada para cada uno. Explica cómo priorizar el tiempo del equipo de CS cuando hay más clientes de los que se pueden atender.

**2. Customer journey y puntos de intervención**
Mapea el customer journey desde la firma del contrato hasta la renovación y expansión. Para cada etapa (onboarding, adoption, value realization, renewal, expansion), define: qué objetivo tiene el cliente en esa etapa, qué señales indican que va bien o mal, y qué acción debe tomar el equipo de CS para maximizar las probabilidades de éxito.

**3. Playbooks de CS**
Diseña los playbooks más críticos: onboarding para clientes nuevos (primeros 90 días), EBR (Executive Business Review) para clientes enterprise, playbook de riesgo de churn (señales de alerta y protocolo de salvación), playbook de expansión (cuándo y cómo identificar y abordar oportunidades de upsell/cross-sell). Para cada playbook, incluye el trigger, las acciones en secuencia y el objetivo medible.

**4. Health score de clientes**
Construye el modelo de health score: qué señales usar (producto: login frequency, feature adoption, time in app / relación: NPS, respuesta a emails, asistencia a QBRs / negocio: ROI percibido, crecimiento del cliente), cómo ponderarlas, cómo visualizarlas y cómo usarlas para priorizar las intervenciones del equipo.

**5. Stack tecnológico de CS**
Qué herramientas necesita el equipo de CS en cada fase de crecimiento: desde hojas de cálculo hasta plataformas especializadas de CS (Gainsight, ChurnZero, Vitally, HubSpot). Cuándo tiene sentido invertir en cada herramienta y cómo evaluar el ROI de la inversión tecnológica en CS.

**6. Estructura del equipo y competencias**
Cómo construir el equipo de CS: cuándo contratar el primer CSM, qué perfil buscar (más técnico vs. más relacional, según el producto), cómo estructurar el equipo a medida que crece, qué competencias desarrollar internamente y cuáles contratar. Los errores más comunes al construir equipos de CS y cómo evitarlos.

**7. Métricas de CS y cuadro de mando**
Los KPIs que debe seguir el equipo de CS mensualmente: NRR (Net Revenue Retention), GRR (Gross Revenue Retention), churn rate por cohorte, tiempo de onboarding, NPS por segmento, health score medio. Cómo presentar estas métricas a la dirección y cómo conectarlas con el impacto financiero del equipo de CS.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar la estrategia de customer success que maximiza el NRR con segmentación, playbooks, health score y la estructura de equipo adecuada.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Estrategia de negocio freelance a 3 años',
                'description'      => 'Deja de vivir al día y diseña el negocio independiente que quieres tener: posicionamiento, precios y modelo de ingresos a 3 años.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor de negocio especializado en profesionales independientes y freelancers que ha ayudado a decenas de autónomos a pasar de reaccionar a la demanda a construir un negocio independiente sostenible, rentable y diseñado intencionalmente.

Necesito tu ayuda para construir la estrategia de negocio de mi actividad freelance para los próximos tres años. Proporciona el contexto de tu situación:

**Contexto actual:**
- Qué servicio o servicios ofreces: [describe tu especialidad principal]
- Años de experiencia y logros relevantes: [para entender tu punto de partida]
- Ingresos actuales mensuales aproximados: [bruto o "prefiero no decirlo"]
- Principal fuente de clientes hoy: [red personal / plataformas / inbound / referidos]
- Mayor problema en tu negocio freelance hoy: [incertidumbre de ingresos / clientes difíciles / bajo precio / demasiado trabajo operativo]

Con este contexto, desarrolla una estrategia de negocio freelance a tres años:

**1. Auditoría honesta del negocio actual**
Analiza el estado actual del negocio freelance con honestidad: qué está funcionando (tipo de cliente, tipo de proyecto, canales que traen clientes), qué no está funcionando (clientes que drenan energía, proyectos poco rentables, tiempo dedicado a tareas que no facturan). El punto de partida real, no el ideal.

**2. Posicionamiento y nicho**
El mayor error del freelancer es intentar llegar a todos. Define el posicionamiento específico: el nicho de mercado (sector, tipo de empresa, tamaño), el perfil del cliente ideal (cargo, dolor específico, presupuesto), la especialidad que te diferencia de los miles de freelancers que hacen lo mismo que tú. Explica cómo el posicionamiento específico, aunque parezca que limita, en realidad genera más oportunidades y precios más altos.

**3. Modelo de precios y estructura de servicios**
Propone una arquitectura de servicios en tres niveles que tenga sentido para tu especialidad: un servicio de entrada (bajo compromiso, fácil de contratar), un servicio principal (el trabajo más valioso que haces), y un servicio de alto valor o retainer mensual. Para cada nivel, el precio basado en valor, no en horas. Explica cómo subir precios a clientes existentes sin perderlos.

**4. Modelo de ingresos a tres años**
Diseña la evolución del modelo de ingresos: Año 1 (consolidar y subir precios), Año 2 (añadir un segundo flujo de ingresos: productos digitales, grupo, consultoría estratégica), Año 3 (reducir dependencia de tiempo por dinero). Incluye hitos financieros realistas para cada año basados en el punto de partida.

**5. Estrategia de captación de clientes**
Los tres canales de captación más efectivos para freelancers según el tipo de servicio: contenido de autoridad (artículos, posts de LinkedIn, podcast), referidos sistematizados (programa de referidos, comunidades profesionales), y outreach selectivo (prospección directa a clientes ideales). Para cada canal, el esfuerzo mensual y el tiempo hasta ver resultados.

**6. Operaciones y tiempo no facturable**
Cómo diseñar las operaciones del negocio para minimizar el tiempo que no se factura: sistema de propuestas, contratos estándar, onboarding de clientes, gestión de proyectos, facturación y cobro. Las herramientas mínimas necesarias. Cómo proteger el tiempo estratégico (marketing, desarrollo de producto, descanso) frente a la presión del trabajo operativo.

**7. Plan de acción trimestral para los próximos 12 meses**
Las iniciativas concretas ordenadas por trimestre para ejecutar la estrategia: qué hacer en el primer trimestre (posicionamiento y precios), segundo trimestre (canal de contenido), tercer trimestre (primer retainer), cuarto trimestre (revisar y escalar). Para cada iniciativa, el indicador de éxito que confirma que va en la dirección correcta.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Construir una estrategia de negocio freelance a 3 años con posicionamiento, modelo de precios, captación de clientes y plan de acción trimestral.',
                'vote_score'       => 40,
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
