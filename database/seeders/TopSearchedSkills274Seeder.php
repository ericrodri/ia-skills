<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills274Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'PLG marketing: cuando el producto es el canal de marketing',
                'description'      => 'Aprende a diseñar y ejecutar estrategias de marketing en las que el propio producto genera adquisición, activación y retención sin depender de campañas de pago.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en product-led growth con experiencia en empresas SaaS que han escalado con presupuesto de marketing reducido. Voy a describir mi producto y mi situación actual, y necesito que me ayudes a construir una estrategia de PLG marketing completa.

**Contexto que debes pedirme si no lo proporciono:**
- ¿Cuál es el producto y qué problema resuelve?
- ¿Cuál es el modelo de negocio (freemium, free trial, open source)?
- ¿Quién es el usuario que se beneficia directamente del producto?
- ¿Qué canal de adquisición usamos hoy y cuál es el CAC aproximado?
- ¿Existe algún momento "AHA" identificado?

**Análisis que debes realizar:**

1. **Diagnóstico PLG**: Evalúa si mi producto tiene las condiciones para ser un canal de marketing en sí mismo. Analiza: valor entregado antes del registro, fricción en el onboarding, si el valor es perceptible sin ayuda de ventas, y si hay elementos compartibles o colaborativos que expanden la red.

2. **Mapa de touchpoints de marketing basado en producto**: Identifica los momentos donde el producto mismo puede actuar como marketing. Ejemplos: una firma de email generada por el producto, una página pública de resultados, un widget embebible, un informe compartible, una invitación que genera valor al invitado. Propón cuáles aplicarían a mi caso.

3. **Estrategia de contenido PQL (Product Qualified Leads)**: Explica cómo combinar el uso del producto con señales de intención para alimentar el funnel. Define qué comportamientos dentro del producto deben activar secuencias de marketing (emails, notificaciones in-app, llamadas de CS).

4. **Loops de crecimiento basados en producto**: Diseña al menos dos loops de crecimiento donde el uso del producto genera más usuarios. Un loop viral (el usuario invita o comparte), un loop de contenido (el uso genera contenido indexable) o un loop de comunidad (los usuarios se relacionan entre sí y eso atrae más usuarios).

5. **Métricas de PLG marketing**: Define los KPIs que debo seguir para saber si el producto está funcionando como canal de marketing. Incluye: tasa de activación, tiempo hasta el AHA moment, ratio de invitaciones enviadas por usuario activo, % de nuevos registros provenientes de usuarios existentes, y tasa de conversión de freemium a pago.

6. **Plan de experimentación en 90 días**: Propón un roadmap de 12 semanas con experimentos concretos para validar si el producto puede ser un canal de marketing efectivo. Incluye hipótesis, métricas de éxito y criterios de decisión para escalar o pivotar cada experimento.

7. **Coordinación entre producto y marketing**: Explica cómo estructurar la colaboración entre el equipo de producto y el de marketing para que los cambios de producto se planifiquen también con lógica de crecimiento. Qué reuniones, qué artefactos compartidos y qué roles deben existir.

**Formato de respuesta esperado:**
- Análisis diagnóstico con puntuación PLG (0-10) y justificación
- Lista priorizada de mecanismos de growth basados en producto
- Dos loops de crecimiento detallados con diagrama textual
- Dashboard de métricas con frecuencia de revisión
- Plan de 90 días semana a semana con responsables

Empieza con las preguntas de contexto si no he proporcionado la información necesaria, y luego despliega el análisis completo.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar una estrategia de marketing donde el producto es el principal canal de adquisición y crecimiento.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Viral loops técnicos: construir la viralidad dentro del producto',
                'description'      => 'Guía técnica para implementar mecanismos de viralidad nativos en el producto: invitaciones, páginas públicas, widgets embebibles y otras estructuras que generan crecimiento exponencial.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero de crecimiento con experiencia implementando viral loops en productos SaaS y aplicaciones de consumo. Necesito diseñar e implementar los mecanismos técnicos que harán que mi producto crezca de forma orgánica.

**Información de contexto a solicitar:**
- Stack tecnológico del producto (frontend, backend, base de datos)
- Tipo de producto y naturaleza del valor que ofrece
- ¿Tiene componentes colaborativos o de red actualmente?
- ¿Existen páginas o entidades que puedan ser públicas?
- ¿Hay historial de usuarios que hayan invitado a otros?

**Análisis técnico que debes realizar:**

1. **Auditoría de viralidad actual**: Revisa qué mecanismos de compartición o invitación existen hoy. Evalúa su efectividad técnica: ¿generan URLs rastreables? ¿Tienen atribución correcta? ¿El flujo de registro para un usuario invitado es fluido y breve?

2. **Catálogo de viral loops técnicos por tipo**:
   - **Loop de invitación**: sistema de referidos con tokens únicos, tracking de conversión, recompensas automáticas si aplica
   - **Loop de contenido público**: entidades del producto que pueden tener URL pública indexable (resultados, proyectos, portfolios)
   - **Loop de colaboración**: características que requieren o incentivan traer a otros usuarios al workspace
   - **Loop de distribución**: widgets embebibles, integraciones con herramientas de terceros que llevan el producto a otros contextos

3. **Arquitectura técnica del sistema de referidos**: Diseña el esquema de base de datos y los endpoints necesarios para un sistema de referidos completo. Incluye: generación de tokens, tracking de clics y conversiones, lógica de atribución (first touch, last touch), y dashboard de métricas.

4. **SEO técnico orientado a growth**: Explica cómo estructurar las páginas públicas del producto para que sean indexables y generen tráfico orgánico. Aspectos a cubrir: generación de meta tags dinámicos, sitemap automático, structured data, y estrategia de URL para maximizar la indexación.

5. **Instrumentación y medición**: Define los eventos de analítica que deben capturarse para medir cada loop. Para cada loop, especifica: el evento de inicio, el evento de conversión, el coeficiente viral (K-factor), y cómo calcular el tiempo de ciclo del loop.

6. **Implementación paso a paso**: Para el loop más prometedor según mi contexto, proporciona un plan de implementación técnico con: estimación de horas, componentes a crear o modificar, tests a escribir, y criterios de lanzamiento.

7. **Errores técnicos comunes**: Lista los errores más frecuentes al implementar viral loops (atribución rota, tokens sin expiración, emails en spam, páginas públicas que exponen datos sensibles) y cómo prevenirlos.

**Formato esperado:**
- Tabla de loops aplicables con complejidad técnica y potencial estimado
- Esquema de base de datos para el sistema de referidos
- Checklist de implementación por loop
- Fórmula de K-factor adaptada a mi producto
- Plan de implementación priorizado con estimaciones

Dame primero las preguntas de diagnóstico si no he aportado el contexto necesario.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar mecanismos técnicos de viralidad nativa en el producto para generar crecimiento orgánico y exponencial.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño para el crecimiento: onboarding, activación y el AHA moment',
                'description'      => 'Aprende a diseñar flujos de onboarding y activación que lleven al usuario al momento de valor lo antes posible, reduciendo la fricción y maximizando la retención desde el primer uso.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de experiencia especializado en growth design con experiencia en productos digitales de alto crecimiento. Quiero revisar y rediseñar el flujo de onboarding de mi producto para maximizar la activación y la retención temprana.

**Preguntas de contexto necesarias:**
- ¿Cuál es el producto y qué transformación vive el usuario cuando lo usa bien?
- ¿Tienes datos de dónde abandonan los usuarios en el onboarding actual?
- ¿Tienes identificado el AHA moment o el momento de valor clave?
- ¿Cuántos pasos tiene el onboarding actual y cuánto tiempo lleva?
- ¿Existe algún flujo de bienvenida por email o notificación?

**Análisis de diseño que debes realizar:**

1. **Diagnóstico del onboarding actual**: Evalúa el flujo existente con los ojos de un usuario nuevo. Identifica: puntos de fricción innecesaria (formularios largos, verificaciones prematuras, decisiones que el usuario no está listo para tomar), elementos de valor diferido (el usuario tiene que esperar mucho para ver el beneficio), y pasos que podrían eliminarse o posponerse.

2. **Definición y diseño del AHA moment**: Ayúdame a identificar con precisión cuál es el momento exacto en que el usuario entiende por primera vez el valor del producto. Luego diseña el flujo más corto posible para llevarlo ahí. Define: qué debe ver, qué debe hacer, y qué debe sentir en ese momento.

3. **Principios de diseño para la activación**:
   - Progreso visible desde el primer momento (progress bars, checklists de configuración)
   - Valor antes que configuración (mostrar el producto en acción antes de pedir datos)
   - Personalización progresiva (preguntar lo mínimo al inicio, enriquecer el perfil después)
   - Social proof en el onboarding (mostrar que otros usuarios similares usan el producto)
   - Primeros éxitos rápidos (diseñar micro-victorias antes del AHA moment principal)

4. **Diseño del flujo revisado**: Propón una arquitectura de pantallas para el nuevo onboarding. Para cada pantalla, describe: objetivo, contenido principal, acción requerida, criterio de éxito, y qué ocurre si el usuario abandona en esa pantalla.

5. **Onboarding adaptativo**: Explica cómo diseñar un onboarding que se adapte al tipo de usuario (perfil, caso de uso, tamaño de empresa) sin añadir fricción al inicio. Diseña el árbol de decisión que el sistema usaría para personalizar la experiencia.

6. **Emails de activación**: Diseña la secuencia de emails de los primeros 7 días para usuarios que no completan el onboarding o no alcanzan el AHA moment. Para cada email: asunto, momento de envío, objetivo, contenido y CTA.

7. **Testing y medición**: Define cómo medir el éxito del nuevo diseño. Propón un plan de A/B testing con hipótesis, variantes y métricas de éxito. Incluye: tasa de completado del onboarding, tiempo hasta el AHA moment, retención a 7 y 30 días por cohorte de onboarding.

**Formato esperado:**
- Diagnóstico del flujo actual con puntuación de fricción
- Mapa del nuevo flujo de onboarding en formato textual
- Especificaciones de diseño pantalla a pantalla
- Secuencia de emails con copy
- Plan de testing con hipótesis priorizadas

Comienza solicitando el contexto que necesites para personalizar el análisis.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Rediseñar el onboarding para llevar al usuario al AHA moment más rápido y maximizar la activación y retención temprana.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Sales-assisted PLG: combinar el autoservicio con el toque humano',
                'description'      => 'Aprende a construir un modelo de ventas que complementa el autoservicio del PLG con intervención humana en los momentos de mayor impacto, sin romper la experiencia del usuario.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en estrategia de ventas para modelos PLG con experiencia en empresas SaaS que han pasado de puramente autoservicio a un modelo híbrido con ventas asistidas. Necesito diseñar el modelo que combine ambos enfoques de forma coherente.

**Contexto necesario:**
- ¿Cuál es el producto y el precio por usuario o cuenta?
- ¿Existe actualmente un plan gratuito o trial?
- ¿Cuántos usuarios o cuentas tienen en el producto hoy?
- ¿Hay un equipo de ventas? ¿De qué tamaño?
- ¿Cuál es el ACV (Annual Contract Value) objetivo para las cuentas enterprise?

**Análisis que debes realizar:**

1. **Segmentación de cuentas para el modelo híbrido**: Define los criterios para clasificar qué cuentas deben seguir en autoservicio y cuáles deben recibir atención de ventas. Criterios típicos: tamaño de empresa, comportamiento en el producto (PQL signals), sector, potencial de expansión. Diseña la matriz de segmentación adaptada a mi contexto.

2. **PQL (Product Qualified Lead) framework**: Define qué comportamientos en el producto deben activar una intervención de ventas. Construye un modelo de scoring de PQLs con: señales de engagement (frecuencia de uso, funcionalidades activadas, usuarios invitados), señales de intención (visita a página de precios, inicio de proceso de pago abandonado), y señales de límite (acercarse al límite del plan gratuito). Asigna pesos a cada señal.

3. **Diseño del handoff producto-ventas**: Describe exactamente cómo debe ocurrir la transición del usuario de autoservicio a atención de ventas. ¿Quién inicia el contacto? ¿Cómo? ¿Cuándo? ¿Qué información debe tener el vendedor antes del primer contacto? ¿Qué debe evitarse para no romper la experiencia del usuario?

4. **Playbook de ventas para PLG**: Adapta el proceso de ventas a un contexto donde el usuario ya conoce el producto. El pitch no puede ser una demo estándar. Diseña: el primer mensaje de outreach adaptado al uso del producto, la conversación de discovery orientada a expansión, y la propuesta de valor para el upgrade enterprise.

5. **Estructura de incentivos del equipo de ventas**: Explica cómo estructurar las compensaciones para que el equipo de ventas no interfiera con el autoservicio ni lo sabotee. Qué cuentas son "de ventas", qué cuentas son "del producto", y cómo se resuelven los conflictos de atribución.

6. **Customer Success en el modelo PLG+Sales**: Define el rol de CS en este modelo. ¿Cuándo entra CS? ¿Qué diferencia hay entre las cuentas self-serve y las asistidas? ¿Cómo se evita que las cuentas grandes necesiten más tiempo del que generan en ingresos?

7. **Métricas del modelo híbrido**: Define los KPIs que permiten saber si el modelo híbrido está funcionando. Incluye: ratio de conversión PQL a oportunidad, ACV de cuentas PLG-asistidas vs puras, tiempo hasta la primera compra, y NRR (Net Revenue Retention) por segmento.

**Formato esperado:**
- Matriz de segmentación de cuentas
- Modelo de scoring de PQLs con pesos
- Flujo del handoff producto-ventas
- Primer email de outreach adaptado al contexto PLG
- Dashboard de métricas con benchmarks del sector

Empieza con el diagnóstico de contexto y luego construye el análisis completo.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar un modelo de ventas híbrido que combina el autoservicio PLG con intervención humana en los momentos de mayor impacto.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'PLG strategy: diseñar el producto para que se venda solo',
                'description'      => 'Marco estratégico completo para rediseñar el producto con lógica PLG: desde el modelo de monetización hasta la arquitectura de funcionalidades que impulsan la adquisición y expansión orgánica.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief Product Officer con experiencia liderando la transición de productos SaaS hacia modelos product-led. Necesito tu ayuda para evaluar si mi producto tiene las condiciones para adoptar una estrategia PLG y diseñar el roadmap de transformación.

**Información de contexto necesaria:**
- Descripción del producto y propuesta de valor central
- Modelo de negocio actual (cómo se adquieren clientes hoy)
- ¿Existe algún plan gratuito, trial o versión de entrada sin fricción?
- ¿Cuál es el tiempo hasta que un usuario nuevo obtiene valor real del producto?
- ¿Hay funcionalidades del producto que se beneficien de tener más usuarios en el mismo workspace?

**Análisis estratégico completo:**

1. **PLG readiness assessment**: Evalúa en qué medida mi producto está preparado para el PLG en cinco dimensiones: (a) entrega de valor autónoma sin necesidad de consultoría o implementación, (b) experiencia de primera vez sin fricción, (c) modelo de monetización compatible con autoservicio, (d) viralidad natural o potencial de expansión dentro de las cuentas, (e) datos e instrumentación para medir el comportamiento en el producto. Puntúa cada dimensión del 1 al 10 y da recomendaciones.

2. **Arquitectura del modelo freemium o trial**: Diseña la estructura de funcionalidades entre el plan gratuito/trial y los planes de pago. Define: qué funcionalidades van en el plan gratuito para que el usuario experimente el valor core, qué funcionalidades actúan como upgrade triggers naturales (el usuario las descubre y quiere pagar para acceder), y qué límites de uso (almacenamiento, usuarios, proyectos) funcionan como mecanismo de conversión.

3. **Diseño de la expansión orgánica**: Explica cómo el producto puede crecer dentro de cada cuenta sin intervención de ventas. Diseña: el flujo de invitación de colaboradores, el momento en que los límites del plan activan la conversión, y cómo los administradores de la cuenta descubren el valor de los planes superiores.

4. **Roadmap PLG a 12 meses**: Construye un roadmap que transforme progresivamente el producto hacia el PLG. Divide el año en tres fases: fundación (onboarding fluido, instrumentación, AHA moment claro), crecimiento (loops virales, upgrade triggers, expansión de cuentas), y escala (personalización, inteligencia sobre el uso, automatización de CS).

5. **Pricing PLG**: Analiza si la estructura de precios actual es compatible con el PLG. ¿El precio de entrada es lo suficientemente bajo para que un individuo pueda decidir? ¿Existe un plan gratuito real? ¿El pricing escala con el valor entregado (usuarios, volumen, funcionalidades)? Propón ajustes si son necesarios.

6. **Organización para el PLG**: Describe cómo debe cambiar la organización de producto para operar con lógica PLG. Qué roles son necesarios (growth PM, data analyst, growth designer), cómo deben coordinarse con marketing y ventas, y qué procesos de priorización deben cambiar para que el crecimiento sea un objetivo de producto.

7. **Gestión del cambio**: Identifica las resistencias internas más comunes al adoptar PLG (el equipo de ventas que siente que el producto les quita trabajo, el equipo de producto que no está acostumbrado a medir conversión, la dirección que no entiende el CAC del PLG) y propón cómo abordarlas.

**Formato esperado:**
- Scorecard PLG con puntuaciones y gap analysis
- Mapa de funcionalidades freemium vs pago
- Roadmap de 12 meses con hitos y métricas
- Propuesta de pricing revisada si aplica
- Plan de gestión del cambio organizacional

Dame el diagnóstico primero y luego el plan completo.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar la estrategia completa para transformar un producto en su propio canal de adquisición y expansión con lógica PLG.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Employer brand PLG: cuando los empleados son el canal de recruiting',
                'description'      => 'Diseña una estrategia de employer branding donde los propios empleados son embajadores que generan candidatos pasivos, aplicando los principios del crecimiento basado en producto al recruiting.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en employer branding y talent acquisition con experiencia en empresas tech que han construido pipelines de candidatos pasivos a través de sus empleados. Quiero diseñar una estrategia donde nuestros empleados sean el principal canal de atracción de talento.

**Contexto necesario:**
- ¿Cuántos empleados tiene la empresa actualmente?
- ¿Cuál es el perfil de los perfiles más difíciles de contratar?
- ¿Tienen los empleados presencia activa en redes profesionales (LinkedIn, Twitter/X, blogs)?
- ¿Existe algún programa de referidos actualmente? ¿Cuál es su tasa de uso?
- ¿Hay historias o logros de empleados que podrían resonar con candidatos objetivo?

**Estrategia completa que debes desarrollar:**

1. **Diagnóstico del employer brand actual**: Evalúa el estado del employer brand desde la perspectiva de los candidatos pasivos. Revisa: presencia en LinkedIn (empresa y empleados), reseñas en Glassdoor o Kununu, visibilidad de los líderes técnicos o de negocio, y coherencia entre lo que la empresa dice ser y lo que los empleados muestran externamente.

2. **Identificación de employee advocates**: No todos los empleados son embajadores naturales. Define los criterios para identificar a los empleados con mayor potencial de influencia: audiencia existente, calidad de su comunicación, alineación con los valores de la empresa, y disposición a participar. Propón cómo seleccionarlos y cómo involucrarlos sin forzarlos.

3. **Programa de employee advocacy**: Diseña el programa estructurado para que los empleados amplifiquen el employer brand. Incluye: qué tipo de contenido deben generar (logros técnicos, cultura de trabajo, proyectos en los que trabajan), cómo se les apoya (formación en personal branding, herramientas de distribución, aprobación de contenido), y qué incentivos existen (reconocimiento, visibilidad, bonus por referido contratado).

4. **Loop viral del recruiting**: Aplica la lógica de los viral loops del PLG al recruiting. Diseña el loop: un empleado comparte contenido → un candidato pasivo lo ve → el candidato sigue al empleado o a la empresa → el candidato postula o es referido → el candidato se incorpora y se convierte en nuevo embajador. Identifica dónde se rompe el loop hoy y cómo arreglarlo.

5. **Contenido de employer brand por tipo de perfil**: Para los tres perfiles más difíciles de contratar, diseña el tipo de contenido que más resuena con esos candidatos pasivos. Para cada perfil: qué les importa en un empleador, qué tipo de historias los convencen, y qué canales son los más efectivos (LinkedIn, GitHub, conferencias, podcasts técnicos).

6. **Métricas del employer brand PLG**: Define cómo medir si la estrategia está funcionando. Incluye: tasa de referidos sobre total de contrataciones, tiempo hasta cobertura de posiciones clave, calidad de candidatos referidos vs canal de pago, costo por contratación por canal, y NPS del candidato (cómo viven el proceso los candidatos que vienen por referido).

7. **Plan de activación en 60 días**: Diseña un plan de 8 semanas para lanzar el programa de employee advocacy. Incluye: semana 1-2 (diagnóstico y selección de advocates), semana 3-4 (formación y co-creación de contenido inicial), semana 5-6 (lanzamiento y amplificación), semana 7-8 (medición y ajuste).

**Formato esperado:**
- Diagnóstico del employer brand con gaps identificados
- Perfil del empleado embajador ideal
- Estructura del programa de advocacy
- Mapa del loop viral del recruiting
- Plan de 60 días semana a semana

Solicita el contexto necesario y luego despliega el análisis completo.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar un programa donde los empleados son el principal canal de atracción de talento aplicando lógica PLG al recruiting.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Unit economics del PLG: el CAC cuando el producto hace la captación',
                'description'      => 'Aprende a calcular e interpretar las unit economics en un modelo PLG: cómo cambia el CAC, qué métricas son relevantes y cómo presentar el caso financiero del crecimiento basado en producto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO o director financiero con experiencia en empresas SaaS de crecimiento PLG. Necesito entender, calcular y optimizar las unit economics de nuestro modelo de negocio, donde el producto es el principal canal de adquisición.

**Datos necesarios para el análisis:**
- Ingresos mensuales recurrentes (MRR) y número de cuentas activas
- Inversión mensual en marketing y ventas (separada si es posible)
- Tasa de conversión de free a pago
- LTV promedio de un cliente o ARPU mensual
- Churn mensual de ingresos y de cuentas
- % de nuevos clientes que vienen por referido o autoservicio vs canal asistido

**Análisis financiero completo:**

1. **Recalculando el CAC en un modelo PLG**: En un modelo PLG, el CAC convencional mezcla canales con costos muy distintos. Explica cómo descomponer el CAC por canal: CAC de autoservicio puro (solo costos de producto e infraestructura), CAC de referido (costo del programa de referidos más atribución del esfuerzo de marketing), CAC de canal asistido (ventas + marketing). Proporciona las fórmulas y cálculos adaptados a mis datos.

2. **Payback period por canal**: Calcula el tiempo que tarda cada canal en recuperar el costo de adquisición. En PLG, el payback del canal de autoservicio suele ser muy diferente al del canal asistido. Muestra cómo esto afecta las decisiones de inversión y qué mix de canales maximiza el retorno.

3. **LTV en contexto PLG**: En PLG, el LTV no solo viene de la retención del usuario original sino de la expansión dentro de la cuenta. Explica cómo calcular el LTV de expansión (NRR > 100%) y cómo presentarlo correctamente en los modelos financieros. Define la diferencia entre LTV de usuario individual y LTV de cuenta.

4. **El valor del plan gratuito**: Uno de los debates más frecuentes en PLG es si el plan gratuito "canibaliza" el negocio. Construye el argumento financiero a favor del freemium: cuántos usuarios gratuitos se convierten en pagos, cuántos actúan como embajadores que traen cuentas nuevas, y cuál es el costo real de servir a un usuario gratuito vs el valor que genera.

5. **Métricas financieras clave del PLG**: Define y explica cómo calcular: Activation Rate, Time to Value, Free-to-Paid Conversion Rate, Product Qualified Lead (PQL) Conversion Rate, Average Contract Value de cuentas PLG vs asistidas, y Net Revenue Retention. Para cada una, incluye benchmarks del sector SaaS.

6. **Modelo de proyección PLG**: Construye la lógica de un modelo de proyección financiera a 24 meses para un negocio PLG. ¿Qué inputs son los más sensibles? ¿Cómo se modela el crecimiento viral? ¿Cómo se proyecta la conversión freemium? Proporciona la estructura del modelo en formato de tabla con las principales líneas.

7. **Presentación a inversores o junta directiva**: Explica cómo presentar las unit economics PLG a una audiencia financiera que puede estar más familiarizada con los modelos de ventas tradicionales. Qué métricas priorizar, cómo comparar con benchmarks, y cómo defender el plan gratuito como activo estratégico en lugar de pasivo.

**Formato esperado:**
- Tabla de CAC por canal con fórmulas
- Comparativa LTV:CAC por canal
- Cálculo del payback period por segmento
- Modelo de proyección simplificado en formato tabla
- Script de presentación a la junta con los tres argumentos financieros principales del PLG

Empieza con el diagnóstico de datos y luego construye el análisis.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Calcular e interpretar las unit economics en un modelo PLG y construir el caso financiero del crecimiento basado en producto.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legal de los modelos freemium: licencias, uso aceptable y conversión',
                'description'      => 'Guía jurídica para estructurar los términos y condiciones de un modelo freemium: diferencias entre planes, restricciones de uso, mecanismos de conversión y protección frente al abuso del plan gratuito.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho tecnológico y contratos SaaS con experiencia asesorando a startups que operan modelos freemium o product-led. Necesito revisar y estructurar el marco legal de nuestro modelo freemium para proteger el negocio y cumplir con la normativa aplicable.

**Contexto necesario:**
- ¿En qué jurisdicción opera la empresa principalmente (España, UE, global)?
- ¿Cuál es la naturaleza del producto (B2B, B2C, marketplace, herramienta)?
- ¿Qué diferencia al plan gratuito del plan de pago en términos de funcionalidades o límites?
- ¿Existen usuarios gratuitos que usan el producto de forma que podría considerarse comercial o de reventa?
- ¿Se recogen datos personales de los usuarios gratuitos y cómo se usan?

**Análisis jurídico completo:**

1. **Estructura contractual del modelo freemium**: Explica cómo deben estructurarse los Términos y Condiciones para un modelo freemium. Diferencias entre: el acuerdo con el usuario gratuito (licencia de uso limitada, sin garantías de disponibilidad, condiciones de terminación unilateral por la empresa) y el contrato con el usuario de pago (SLA, compromisos de disponibilidad, condiciones de renovación y cancelación). Identifica las cláusulas críticas que deben estar presentes en cada versión.

2. **Política de uso aceptable (AUP)**: Diseña la estructura de una AUP para un producto freemium. Qué usos deben quedar expresamente prohibidos: uso comercial no autorizado, reventa del servicio, scraping, automatización abusiva, creación de cuentas múltiples para eludir los límites. Cómo redactar estas prohibiciones de forma que sean ejecutables y no disuadan a los usuarios legítimos.

3. **Mecanismos de conversión legalmente correctos**: Analiza los principales mecanismos de conversión de free a pago desde una perspectiva legal. ¿Cuándo se considera que hay una oferta contractual y cuándo una mera información comercial? ¿Qué información precontractual debe darse antes de que el usuario active el pago? ¿Cómo debe gestionarse el consentimiento para el cargo automático (autorenovación)?

4. **RGPD y usuarios gratuitos**: En la UE, los usuarios gratuitos pueden estar pagando con sus datos. Explica: qué base legal ampara el tratamiento de datos de usuarios gratuitos, si se puede usar la mejora del producto como base legítima, qué información debe incluirse en la política de privacidad sobre el tratamiento diferencial de usuarios gratuitos y de pago, y cómo gestionar correctamente el consentimiento para comunicaciones comerciales a usuarios gratuitos.

5. **Suspensión y terminación de cuentas gratuitas**: Define el marco legal para poder suspender o eliminar cuentas gratuitas que incumplan la AUP o que la empresa decida no continuar manteniendo (sunset de plan gratuito). ¿Qué preaviso es necesario? ¿Qué obligaciones tiene la empresa respecto a los datos del usuario? ¿Cómo minimizar el riesgo de reclamaciones?

6. **Riesgo de abuso del plan gratuito**: Analiza los principales riesgos legales del abuso del plan gratuito: usuarios que crean múltiples cuentas, uso automatizado para extraer valor sin pagar, reventa de acceso. Propón mecanismos contractuales y técnicos para prevenirlos y las acciones legales disponibles si se detecta el abuso.

7. **Checklist legal para lanzar o revisar un modelo freemium**: Proporciona una lista de verificación completa de los documentos legales necesarios, las cláusulas imprescindibles, las comunicaciones al usuario requeridas por ley, y las revisiones periódicas recomendadas.

**Formato esperado:**
- Tabla comparativa de las cláusulas necesarias en el contrato gratuito vs el de pago
- Estructura de la Política de Uso Aceptable
- Checklist RGPD para usuarios gratuitos
- Checklist legal completa para el lanzamiento del modelo freemium
- Lista de riesgos legales priorizados con nivel de severidad

Empieza con las preguntas de contexto antes de construir el análisis.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estructurar el marco legal de un modelo freemium: términos, uso aceptable, conversión y protección frente al abuso.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'CS en PLG: cuando hay miles de cuentas y no puedes tocar todas',
                'description'      => 'Aprende a diseñar un modelo de Customer Success escalable para productos PLG donde la mayoría de cuentas son self-serve y el equipo de CS debe concentrarse en las de mayor potencial.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia liderando equipos en empresas SaaS con modelos PLG donde el ratio de cuentas por CSM es muy superior al de las empresas de ventas tradicionales. Necesito diseñar un modelo de CS que sea escalable y que maximice la retención y expansión sin requerir un CSM por cada cuenta.

**Contexto necesario:**
- ¿Cuántas cuentas activas tienen actualmente (gratuitas y de pago)?
- ¿Cuántas personas tiene el equipo de CS hoy?
- ¿Cuál es el churn mensual de ingresos y de cuentas?
- ¿Qué plan tienen los clientes más valiosos y cuál es su ACV?
- ¿Existe algún sistema de salud de cuenta (health score) actualmente?

**Análisis y diseño completo:**

1. **Segmentación de cuentas para CS PLG**: Define los segmentos de cuentas y el modelo de atención para cada uno. Segmento 1 - High Touch: cuentas enterprise con alto ACV que requieren CSM dedicado. Segmento 2 - Mid Touch: cuentas de tamaño medio con potencial de expansión que reciben atención programada. Segmento 3 - Tech Touch: cuentas self-serve gestionadas exclusivamente con automatización, comunicaciones en producto y contenido de éxito. Define los criterios de asignación a cada segmento.

2. **Health score para PLG**: Diseña un modelo de puntuación de salud de cuenta adaptado a un producto PLG. Variables a considerar: frecuencia de login, funcionalidades activadas, número de usuarios que usan el producto activamente dentro de la cuenta, cumplimiento del journey de onboarding, y señales de riesgo (descenso en el uso, soporte repetido, acceso a página de cancelación). Asigna pesos y define los umbrales de alerta.

3. **Estrategia de Tech Touch escalable**: Para las cuentas del segmento self-serve, diseña la estrategia de engagement automatizado. Incluye: secuencias de email basadas en comportamiento en el producto (no en el tiempo), notificaciones in-app contextuales, contenido de éxito (webinars, tutoriales, casos de uso), y una comunidad de usuarios como mecanismo de soporte entre pares.

4. **Modelo de early warning y escalación**: Define cómo detectar automáticamente las cuentas en riesgo de churn o con oportunidad de expansión. Propón el flujo de decisión: qué nivel de alerta activa qué tipo de intervención (email automático, asignación a CSM, llamada proactiva). Incluye los criterios para desescalar una cuenta de High Touch a Tech Touch o viceversa.

5. **Playbook de expansión en PLG**: En un modelo PLG, la expansión ocurre cuando el valor percibido supera el límite del plan actual. Diseña el playbook de expansión: qué señales en el producto indican que una cuenta está lista para expandirse, cómo debe ser la conversación de expansión (diferente a una venta tradicional), y cómo incentivar la expansión orgánica sin que requiera siempre intervención de CS.

6. **Métricas de CS PLG**: Define los KPIs del equipo de CS en un modelo PLG. Incluye: Net Revenue Retention por segmento, Gross Revenue Retention, ratio de cuentas por CSM, tiempo de respuesta por tier, tasa de adopción de funcionalidades clave, Product Adoption Score, y Customer Effort Score. Para cada métrica, proporciona el benchmark del sector.

7. **Organización y estructura del equipo**: Propón la estructura del equipo de CS para escalar en un modelo PLG. Qué roles son necesarios (CSM enterprise, digital CS specialist, community manager, CS ops), cuándo tiene sentido contratar cada uno, y cómo organizar la colaboración con producto para que los insights de CS alimenten el roadmap.

**Formato esperado:**
- Tabla de segmentación de cuentas con criterios y modelo de atención
- Modelo de health score con variables y pesos
- Mapa del early warning system con umbrales y acciones
- Secuencia de Tech Touch en formato calendario de 90 días
- Dashboard de métricas con benchmarks

Empieza con el análisis de contexto antes de construir el modelo.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar un modelo de CS escalable para productos PLG con miles de cuentas y un equipo reducido.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Viralidad del freelance: cómo el boca a boca se convierte en pipeline',
                'description'      => 'Aprende a construir un sistema deliberado para que el trabajo bien hecho genere referencias y nuevos clientes de forma constante, aplicando los principios del PLG a la práctica freelance.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un mentor de negocio para freelancers con experiencia ayudando a profesionales independientes a construir pipelines de clientes basados en referencias y boca a boca. Quiero dejar de depender de la búsqueda activa de clientes y construir un sistema donde el trabajo y los clientes existentes generen nuevos proyectos de forma continua.

**Contexto necesario:**
- ¿Cuál es tu especialidad como freelance y a qué tipo de clientes sirves?
- ¿Cuántos clientes has tenido en el último año y cuántos han vuelto a contratarte?
- ¿Has recibido referencias de clientes anteriores? ¿Con qué frecuencia?
- ¿Tienes algún proceso deliberado para pedir referencias o está dejado al azar?
- ¿Qué tipo de entregable o resultado genera tu trabajo que el cliente podría compartir o mostrar?

**Sistema completo de viralidad freelance:**

1. **Diagnóstico del boca a boca actual**: Analiza si el flujo de referencias actual es el resultado de un sistema o de la casualidad. Evalúa: ¿Los clientes conocen exactamente qué tipo de proyectos quieres que te refieran? ¿Sabes cuántos de tus clientes han hablado de ti con alguien más? ¿Tienes algún mecanismo para detectar y activar esas conversaciones? Proporciona un diagnóstico honesto basado en mi situación.

2. **Diseño del "producto" que genera referencias**: En el PLG, el producto es el vehículo de la viralidad. En el freelance, la referenciabilidad viene de: la calidad del entregable (¿algo que el cliente quiere mostrar?), la experiencia de trabajar contigo (¿algo de lo que el cliente habla?), y el resultado obtenido (¿algo que el cliente puede atribuirte públicamente?). Analiza mi práctica freelance y propón qué aspectos del trabajo o la relación pueden diseñarse deliberadamente para maximizar la probabilidad de que el cliente hable de ti.

3. **Sistema de activación de referencias**: Las referencias no ocurren solas incluso cuando el cliente está satisfecho. Diseña un sistema para activarlas: el momento adecuado para pedirlas (no al final del proyecto, sino en el pico de satisfacción), cómo formular la petición de referencia de forma que el cliente sepa exactamente qué decir y a quién, y cómo facilitar la introducción (un email de presentación que puedas redactar tú para que el cliente lo reenvíe).

4. **Casos de éxito como herramienta viral**: Describe cómo convertir los resultados de cada proyecto en contenido que atraiga nuevos clientes. Para cada proyecto terminado: cómo documentar el caso (problema, solución, resultado en cifras), qué formato distribuir (PDF de caso de uso, post en LinkedIn, entrada en portfolio), y cómo conseguir que el cliente firme el caso y lo comparta en sus redes.

5. **Red de referidores estratégicos**: Además de los clientes, existen referidores estratégicos: otros freelancers que trabajan con tus mismos clientes en servicios complementarios, consultoras que subcontratan, y profesionales del sector que pueden recomendarte cuando alguien pregunta. Diseña una estrategia para identificar y cultivar estas relaciones de referido mutuo.

6. **Métricas del sistema de referencias**: Define cómo medir si el sistema está funcionando. Incluye: % de nuevos proyectos provenientes de referencias vs otros canales, tasa de referencia por cliente (cuántos clientes han referido al menos uno nuevo), tiempo entre fin de proyecto y primera referencia, y valor medio de los proyectos que vienen por referencia vs otros canales.

7. **Plan de 90 días para activar el sistema**: Diseña un plan concreto de tres meses para pasar de referencias casuales a un sistema deliberado. Incluye acciones semanales, plantillas de comunicación para pedir referencias, y un proceso de seguimiento para saber qué clientes han tenido conversaciones sobre ti y no han llegado a hacer la introducción.

**Formato esperado:**
- Diagnóstico del sistema de referencias actual
- Los tres cambios de mayor impacto en el trabajo para aumentar la referenciabilidad
- Plantilla de email para pedir referencias
- Plantilla de email de presentación para que el cliente la reenvíe
- Plan de 90 días con acciones semanales
- Dashboard de métricas con seguimiento mensual

Empieza por el contexto y luego construye el sistema completo.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir un sistema deliberado de referencias y boca a boca que genere un pipeline continuo de nuevos clientes como freelance.',
                'vote_score'       => 36,
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
