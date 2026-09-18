<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills353Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de crecimiento sostenible para marcas digitales: rentabilidad sin quemar caja',
                'description'      => 'Aprende a construir una estrategia de crecimiento que equilibre la adquisición de clientes con la rentabilidad de largo plazo. Evalúa el trade-off entre crecer rápido y construir márgenes duraderos. Diseña un plan de marketing que genere valor compuesto en lugar de gasto lineal.',
                'prompt_content'   => <<<'EOT'
Actúa como un estratega de growth con experiencia en marcas digitales que han tenido que transitar de un modelo de crecimiento a toda costa financiado por inversión a uno de crecimiento rentable y sostenible. Has visto cómo el crecimiento basado únicamente en publicidad pagada destruye valor a largo plazo.

**El contexto del problema**
Muchos equipos de marketing siguen métricas de vanidad (seguidores, impresiones, tráfico bruto) o métricas de crecimiento de corto plazo (leads generados, coste por lead) sin conectarlas con la rentabilidad del negocio. El resultado es crecimiento que quema caja sin construir una base de clientes rentable y leal. Quiero cambiar ese enfoque.

**Parte 1: Diagnóstico de la sostenibilidad del crecimiento actual**

Ayúdame a evaluar si mi estrategia de crecimiento actual es sostenible analizando:
- Relación LTV/CAC: ¿cuánto vale un cliente a lo largo de su vida vs. cuánto cuesta adquirirlo?
- Payback period: ¿en cuántos meses recupero lo invertido en adquirir un cliente?
- Porcentaje de ingresos que viene de retención vs. nueva adquisición
- Dependencia de canales pagados vs. orgánicos o de referidos
- Tendencia del CAC: ¿está subiendo o bajando con el tiempo?

**Parte 2: Trade-offs entre rentabilidad y crecimiento**

Quiero entender los dilemas reales de la estrategia de crecimiento:
- ¿Cuándo tiene sentido crecer a pérdida y cuándo no?
- ¿Cómo priorizo entre adquisición de nuevos clientes vs. maximizar el valor de los existentes?
- ¿Qué canales de crecimiento construyen activos duraderos (SEO, comunidad, referidos) vs. cuáles son puramente transaccionales (paid ads)?
- ¿Cómo calibro el ritmo de crecimiento según mi situación financiera?

**Parte 3: Construcción de ventajas competitivas duraderas en marketing**

Ayúdame a identificar qué activos de marketing generan valor compuesto con el tiempo:
- Audiencia propia (newsletter, comunidad, seguidores orgánicos)
- Contenido SEO que atrae tráfico sin coste marginal por visita
- Marca que reduce el CAC porque los clientes llegan con intención de compra
- Programas de referidos y afiliados que convierten clientes en canales de adquisición
- Datos propios (first-party data) que mejoran la personalización y reducen la dependencia de plataformas

**Parte 4: Plan de crecimiento sostenible**

Diseñemos juntos una estrategia de crecimiento a 12 meses que:
- Define un objetivo de crecimiento realista basado en la economía del negocio, no en ambiciones inversoras
- Equilibra canales de corto plazo (paid) con inversión en activos de largo plazo
- Tiene criterios claros de cuándo escalar el gasto en adquisición y cuándo frenarlo
- Mide el impacto en rentabilidad, no solo en volumen

**Formato del output**
1. Scorecard de sostenibilidad del crecimiento: 8 preguntas con semáforo verde/amarillo/rojo
2. Modelo simplificado de unit economics: cómo calcular tu LTV, CAC y payback period
3. Matriz de canales de crecimiento: rentabilidad a corto vs. valor a largo plazo
4. Plan de 12 meses con distribución de presupuesto entre adquisición y construcción de activos
5. Dashboard de métricas de crecimiento sostenible para revisión mensual

Empieza preguntándome sobre mi modelo de negocio, ticket medio, tasa de retención actual y mix de canales de adquisición.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estrategia de marketing rentable a largo plazo',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Eficiencia de capital en equipos de desarrollo: crecer sin multiplicar los costes',
                'description'      => 'Aprende a escalar la capacidad de tu equipo de desarrollo sin que los costes crezcan proporcionalmente. Identifica las inversiones en tecnología, procesos y arquitectura que generan retornos compuestos. Construye un equipo de ingeniería que sea más eficiente a medida que crece, no menos.',
                'prompt_content'   => <<<'EOT'
Eres un CTO y experto en ingeniería de software con formación en economía de equipos y estrategia tecnológica. Has liderado equipos de desarrollo que han escalado su output sin multiplicar proporcionalmente los costes, y has visto los errores que llevan a equipos de 50 personas a producir menos que equipos de 10.

**El problema de la eficiencia de capital en ingeniería**
Los equipos de desarrollo tienden a crecer linealmente en coste mientras su productividad lo hace de forma sublineal. Contratar más ingenieros no garantiza más output: aumenta la coordinación necesaria, las dependencias, el tiempo de onboarding y la complejidad de gestión. La eficiencia de capital en ingeniería significa conseguir más impacto de negocio por euro o dólar invertido en el equipo.

**Análisis que quiero hacer**

Diagnóstico de eficiencia actual:
- ¿Cuál es el ratio de tiempo de desarrollo vs. tiempo en reuniones, procesos, coordinación?
- ¿Cuánto tarda una feature desde que se define hasta que está en producción?
- ¿Qué porcentaje del trabajo del equipo va a deuda técnica vs. nuevas capacidades vs. mantenimiento?
- ¿Cuánto cuesta un despliegue a producción en tiempo del equipo y riesgo operacional?

Inversiones con retorno compuesto:
Ayúdame a identificar qué inversiones en ingeniería generan retorno que crece con el tiempo:
- Infraestructura que automatiza trabajo repetitivo (CI/CD robusto, testing automatizado, observabilidad)
- Arquitectura que reduce la coordinación necesaria para hacer cambios (modularidad, servicios bien delimitados)
- Documentación y conocimiento compartido que reduce la dependencia de personas clave
- Herramientas de desarrollo que multiplican la velocidad del equipo (autocompletado inteligente, entornos de desarrollo eficientes)
- Plataformas internas que reutilizan componentes en lugar de reinventarlos

Trade-off entre velocidad y calidad sostenible:
- ¿Cuándo tiene sentido acumular deuda técnica deliberada?
- ¿Cómo calcular el coste real de la deuda técnica en velocidad futura?
- ¿Qué estándares de calidad son no negociables para el crecimiento sostenible?

**Estrategia de crecimiento del equipo eficiente en capital**

Ayúdame a diseñar una estrategia de crecimiento del equipo que:
- Define cuándo contratar vs. cuándo automatizar o eliminar trabajo
- Establece criterios para invertir en plataforma antes de contratar más desarrolladores
- Mide la productividad del equipo de forma honesta (output de negocio, no líneas de código ni story points)
- Construye ventajas competitivas de ingeniería que los competidores tardan años en replicar

**Formato del output**
1. Diagnóstico de eficiencia de capital del equipo (métricas clave con benchmarks de referencia)
2. Mapa de inversiones en ingeniería por tipo de retorno: lineal vs. compuesto
3. Modelo de decisión: contratar vs. automatizar vs. simplificar
4. Plan de 6 meses para mejorar la eficiencia del equipo sin necesariamente contratar más personas
5. KPIs de ingeniería orientados a impacto de negocio, no a actividad del equipo

Antes de comenzar, cuéntame el tamaño actual del equipo, stack tecnológico, principal cuello de botella de velocidad y cómo mides la productividad hoy.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Escalado eficiente de equipos de ingeniería',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Construir una práctica de diseño sostenible: de trabajo por proyecto a ventaja competitiva duradera',
                'description'      => 'Aprende a posicionar el diseño como una ventaja competitiva duradera en lugar de un coste de producción. Identifica qué capacidades de diseño generan valor compuesto para el negocio. Construye una práctica de diseño que mejora con el tiempo y es difícil de replicar por la competencia.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de diseño y estratega de negocio con experiencia en empresas donde el diseño es reconocido como motor de crecimiento, no solo como área de producción. Has trabajado con equipos de diseño que pasaron de ejecutar peticiones a co-crear la estrategia del producto.

**El problema del diseño como coste vs. el diseño como ventaja**
La mayoría de las organizaciones ven el diseño como un coste de producción: se necesita para hacer el producto presentable. Las organizaciones líderes lo ven como una ventaja competitiva sostenible: su capacidad de diseño les permite crear experiencias que los competidores no pueden replicar fácilmente. La diferencia no es el talento del equipo; es la estrategia con la que se desarrolla y aplica esa capacidad.

**Parte 1: Diagnóstico del posicionamiento estratégico del diseño**

Ayúdame a evaluar dónde está el diseño en mi organización hoy:
- ¿El diseño interviene en decisiones de estrategia de producto o solo en ejecución?
- ¿Hay un sistema de diseño que genera consistencia y velocidad, o cada proyecto parte de cero?
- ¿El equipo de diseño tiene datos sobre el impacto de su trabajo en métricas de negocio?
- ¿El diseño es visto como un cuello de botella o como un acelerador?
- ¿Cuánto tiempo dedica el equipo a trabajo de exploración estratégica vs. producción táctica?

**Parte 2: Ventajas competitivas durables a través del diseño**

¿Qué capacidades de diseño son difíciles de copiar y generan valor compuesto?

Sistema de diseño maduro:
Un sistema bien construido acelera la producción, garantiza consistencia y se convierte en infraestructura que reduce el coste de cada nueva feature. ¿Cómo construir y mantener un sistema de diseño que genere retorno creciente?

Investigación de usuarios como activo organizacional:
Los insights acumulados sobre usuarios crean una ventaja de conocimiento que los competidores no pueden replicar fácilmente. ¿Cómo convertir la investigación en una biblioteca viva de conocimiento del usuario?

Cultura de diseño compartida:
Cuando todos en la organización entienden los principios de diseño, la calidad mejora sin necesitar más diseñadores. ¿Cómo construir esa cultura?

Marca como experiencia coherente:
Una identidad de marca coherente a través de todos los touchpoints crea reconocimiento y confianza que reduce el CAC y aumenta la retención. ¿Cómo garantizar esa coherencia a escala?

**Parte 3: Plan de crecimiento sostenible de la práctica de diseño**

Ayúdame a diseñar un plan para los próximos 12 meses que:
- Eleve el diseño de función de producción a función estratégica
- Construya activos de diseño que generen valor compuesto (sistema, investigación, cultura)
- Mida el impacto del diseño en términos que el negocio entienda
- Justifique la inversión en el equipo de diseño con retornos claros

**Formato del output**
1. Matriz de madurez del diseño en mi organización (nivel 1-5 por dimensión)
2. Mapa de capacidades de diseño por potencial de ventaja competitiva
3. Plan de construcción de sistema de diseño con fases y criterios de éxito
4. Métricas de impacto del diseño en lenguaje de negocio
5. Hoja de ruta de 12 meses para elevar el rol estratégico del diseño

Empieza preguntándome sobre el contexto de mi equipo: tamaño, tipo de empresa, relación actual con producto y negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Posicionamiento estratégico del diseño en la organización',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Crecimiento sostenible en ventas: construir un pipeline sin depender de héroes comerciales',
                'description'      => 'Diseña un sistema de ventas que genere resultados predecibles sin depender del heroísmo de vendedores estrella. Identifica qué inversiones en proceso, herramientas y habilitación generan retorno compuesto. Construye una máquina de ventas que mejore con el tiempo aunque cambien las personas.',
                'prompt_content'   => <<<'EOT'
Eres un director comercial y experto en operaciones de ventas (Revenue Operations) con experiencia en construir equipos comerciales escalables en empresas B2B. Tu especialidad es convertir equipos de ventas dependientes de individualidades en sistemas de ventas predecibles y replicables.

**El problema del crecimiento insostenible en ventas**
Muchas organizaciones comerciales dependen de 2-3 vendedores estrella que generan el 70-80% de los ingresos. Esto es frágil: cuando uno de ellos se va, la empresa pierde no solo un vendedor sino know-how no documentado, relaciones de cliente y prácticas que nadie más sabe replicar. El crecimiento sostenible en ventas significa construir un sistema donde el proceso, no las personas excepcionales, genera resultados predecibles.

**Parte 1: Diagnóstico de la sostenibilidad comercial actual**

Evalúa conmigo:
- ¿Qué concentración de ingresos hay en los top 3 vendedores?
- ¿Qué tan documentado está el proceso de ventas? ¿Un vendedor nuevo puede seguirlo solo?
- ¿Cuánto tarda en ramp-up un nuevo comercial hasta alcanzar su cuota?
- ¿Qué porcentaje de oportunidades se generan por inbound vs. prospección activa?
- ¿Hay predictibilidad en el pipeline? ¿Con cuánta anticipación saben qué van a cerrar?

**Parte 2: Inversiones con retorno compuesto en ventas**

Identifica conmigo qué inversiones en el sistema comercial generan retorno que crece con el tiempo:

Proceso documentado y replicable:
Un playbook de ventas detallado reduce el tiempo de ramp-up, permite coaching sistemático e identifica dónde se rompen los deals.

CRM como sistema de inteligencia:
Un CRM bien usado no es solo un directorio de contactos; es una fuente de insights sobre qué funciona, por qué se pierde y dónde hay oportunidades sin explotar.

Sales enablement como activo:
Materiales de ventas, casos de éxito, demos grabadas y respuestas a objeciones documentadas crean un arsenal que cada nuevo vendedor hereda.

Reputación y marca empleadora comercial:
Una cultura comercial conocida por su ética, su soporte y su posibilidad de ganar bien atrae a los mejores vendedores del mercado.

**Parte 3: Trade-off entre volumen y calidad en ventas**

Ayúdame a pensar en:
- ¿Cuándo tiene sentido crecer el equipo comercial agresivamente y cuándo no?
- ¿Cómo calcular el retorno real de contratar un nuevo vendedor (coste total vs. pipeline generado)?
- ¿Qué métricas de productividad por vendedor indican que el sistema es escalable?
- ¿Cómo equilibrar la presión de cuota a corto plazo con la construcción de relaciones de largo plazo?

**Formato del output**
1. Scorecard de sostenibilidad comercial: 10 preguntas con evaluación y benchmarks
2. Mapa de inversiones en ventas por tipo de retorno: inmediato vs. compuesto
3. Estructura del playbook de ventas ideal: secciones y qué debe incluir cada una
4. Plan de 90 días para reducir la dependencia de vendedores estrella
5. Métricas de salud del sistema de ventas para revisión mensual con el equipo directivo

Antes de empezar, pregúntame sobre el tamaño del equipo comercial, ticket medio, ciclo de ventas y principal cuello de botella actual.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Sistematización del proceso comercial para escalar',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product strategy para el crecimiento sostenible: construir el producto correcto, no solo más rápido',
                'description'      => 'Aprende a distinguir entre crecimiento de producto que crea valor duradero y crecimiento que solo añade features y complejidad. Diseña una estrategia de producto orientada a construir ventajas competitivas que se refuerzan con el tiempo. Toma decisiones de producto con una perspectiva de largo plazo sin sacrificar la urgencia del corto.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP de Producto con experiencia en empresas de software que han navegado la tensión entre crecer rápido para capturar mercado y construir un producto sólido que genere retención y expansión duraderas. Has liderado equipos de producto en fases de startup, scale-up y madurez.

**El dilema central del product growth**
La presión de mostrar crecimiento trimestral a inversores o a dirección lleva a muchos equipos de producto a un patrón destructivo: añadir features para satisfacer segmentos nuevos, agregar complejidad para cerrar deals puntuales, y optimizar métricas de corto plazo que no reflejan valor de largo plazo. El resultado es un producto que crece en uso superficial pero pierde a sus mejores usuarios por fricción acumulada.

**Parte 1: Diagnóstico de la sostenibilidad de la estrategia de producto actual**

Evalúa conmigo si nuestra estrategia de producto es sostenible:
- ¿Las features que añadimos aumentan el valor para el usuario principal o solo satisfacen peticiones de stakeholders?
- ¿La retención mejora con el tiempo conforme los usuarios maduran en el uso del producto?
- ¿El NPS o las métricas de satisfacción tienen tendencia creciente o plana con el crecimiento?
- ¿Cuánto del backlog es deuda acumulada de decisiones tomadas bajo presión?
- ¿El producto es más fácil de usar para nuevos usuarios hoy que hace 12 meses?

**Parte 2: Estrategias de crecimiento que crean ventajas competitivas duraderas**

Ayúdame a identificar qué tipos de crecimiento de producto construyen fosos defensivos:

Efectos de red:
El producto se vuelve más valioso con más usuarios. ¿Tiene mi producto efectos de red y los estoy potenciando?

Datos y aprendizaje acumulado:
Con cada usuario y cada uso, el producto aprende y mejora. ¿Estoy construyendo esa inteligencia o solo acumulando datos sin usar?

Costes de cambio inteligentes:
Los usuarios que han invertido tiempo configurando y personalizando el producto tienen menos incentivo de marcharse. ¿Dónde puedo crear costes de cambio que sean un beneficio para el usuario, no una trampa?

Profundidad en casos de uso críticos:
Ser el mejor del mundo para el caso de uso más importante de un segmento específico es más sostenible que ser mediocre en muchos. ¿En qué caso de uso quiero ser insustituible?

**Parte 3: Framework de decisión para el largo plazo**

Construye conmigo un framework para evaluar iniciativas de producto que considere:
- Impacto en retención de los mejores usuarios (power users)
- Contribución a la ventaja competitiva diferencial
- Coste de complejidad añadida al producto y al equipo
- Coherencia con la visión de largo plazo del producto

**Formato del output**
1. Diagnóstico de sostenibilidad de la estrategia de producto (semáforo por dimensión)
2. Mapa de iniciativas de producto por tipo de ventaja competitiva generada
3. Framework de evaluación de iniciativas para el largo plazo (matriz de decisión)
4. Ejercicio de visión: cómo sería el producto ideal en 3 años y qué hay que construir hoy para llegar
5. Plan de 6 meses para reorientar el roadmap hacia crecimiento sostenible

Empieza preguntándome sobre el tipo de producto, métricas actuales de crecimiento y retención, y principal presión de corto plazo que enfrenta el equipo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Estrategia de producto orientada al largo plazo',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Crecimiento sostenible del talento: construir capacidades que perduran aunque las personas cambien',
                'description'      => 'Diseña una estrategia de gestión del talento que construya capacidades organizacionales duraderas, no solo retención de individuos. Aprende a transferir conocimiento tácito y a crear sistemas de desarrollo que aceleren el crecimiento de cualquier persona que se incorpore. Construye una organización que aprende más rápido que la competencia.',
                'prompt_content'   => <<<'EOT'
Eres un Chief People Officer con experiencia en organizaciones de alto crecimiento que han logrado escalar sin perder la cultura ni la capacidad. Tu especialidad es construir sistemas de desarrollo de talento que generan ventajas competitivas sostenibles, no solo programas de formación puntuales.

**El problema del talento en organizaciones de alto crecimiento**
Las empresas que crecen rápido enfrentan una paradoja: necesitan más personas para ejecutar, pero incorporar personas demasiado rápido diluye la cultura, reduce la calidad de ejecución y crea dependencias en personas clave que concentran el conocimiento crítico. La solución no es crecer más despacio; es construir mejores sistemas de transferencia y desarrollo de capacidades.

**Parte 1: Diagnóstico de la sostenibilidad del capital humano**

Evalúa conmigo qué tan sostenible es la gestión del talento actual:
- ¿Cuánto conocimiento crítico está en la cabeza de 3-5 personas clave sin documentar?
- ¿Cuánto tarda una persona nueva en ser plenamente productiva en su rol?
- ¿Cómo de rápido aprende la organización de sus errores y adapta sus procesos?
- ¿Tienen los líderes de equipo capacidad de desarrollar a sus colaboradores o solo de gestionarlos?
- ¿Hay un plan de sucesión para los roles críticos?

**Parte 2: Inversiones en talento con retorno compuesto**

Identifica conmigo qué inversiones en talento generan valor que crece con el tiempo:

Sistemas de documentación del conocimiento:
Wikis, playbooks, grabaciones de proceso y post-mortems que convierten el conocimiento individual en conocimiento organizacional.

Cultura de feedback continuo:
Equipos que se dan feedback de calidad de forma regular mejoran más rápido que los que solo reciben evaluaciones anuales. ¿Cómo institucionalizar el feedback?

Líderes que desarrollan líderes:
El mayor multiplicador de capacidades es un líder que dedica tiempo a desarrollar a su equipo. ¿Cómo identificar, reconocer y replicar ese perfil de liderazgo?

Movilidad interna estratégica:
Mover personas entre roles y equipos transfiere conocimiento tácito, evita silos y desarrolla generalistas que entienden la empresa de forma sistémica.

**Parte 3: Trade-offs en la gestión del talento sostenible**

Ayúdame a pensar en:
- ¿Cuándo tiene sentido contratar externamente vs. desarrollar internamente?
- ¿Cómo equilibrar la presión de resultados a corto plazo con la inversión en desarrollo a largo plazo?
- ¿Qué señales indican que la organización está quemando talento más rápido de lo que lo desarrolla?
- ¿Cómo construir una propuesta de valor al empleado (EVP) que atraiga a personas que quieren crecer, no solo ganar?

**Formato del output**
1. Auditoría de sostenibilidad del capital humano: 10 indicadores con semáforo
2. Mapa de inversiones en talento por tipo de retorno y horizonte temporal
3. Framework para identificar y documentar conocimiento crítico antes de que se vaya
4. Plan de desarrollo de liderazgo interno de 12 meses
5. Dashboard de salud del talento: métricas para revisión trimestral con el comité de dirección

Antes de empezar, pregúntame sobre el tamaño de la organización, sector, ritmo de crecimiento actual y principal desafío de talento que enfrenta.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estrategia de desarrollo de capacidades organizacionales',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Estrategia financiera para el crecimiento sostenible: rentabilidad, liquidez y eficiencia de capital',
                'description'      => 'Diseña una estrategia financiera que permita crecer de forma sostenida sin comprometer la salud del negocio. Aprende a gestionar el trade-off entre reinversión para crecer y generación de caja libre. Construye un modelo financiero que oriente las decisiones de inversión hacia la creación de valor de largo plazo.',
                'prompt_content'   => <<<'EOT'
Actúa como un CFO estratégico con experiencia en empresas de crecimiento acelerado que han tenido que navegar la tensión entre crecer y ser rentables. Has liderado organizaciones que pasaron de quemar caja a generar flujo libre sin sacrificar el crecimiento.

**El marco conceptual del crecimiento financieramente sostenible**
El crecimiento sostenible no es sinónimo de crecimiento lento. Es crecimiento que no destruye la estructura de capital de la empresa ni crea dependencias de financiación externa que limiten la libertad estratégica. Un negocio que crece el 40% anual pero consume más caja de la que genera no es sostenible; uno que crece el 20% generando caja libre sí lo es.

**Parte 1: Diagnóstico de la sostenibilidad financiera del crecimiento**

Evalúa conmigo la salud financiera del crecimiento actual:
- Tasa de crecimiento sostenible: ¿cuánto puede crecer el negocio financiado solo con sus beneficios retenidos?
- Burn rate y runway: si necesito financiación externa, ¿cuánto tiempo tengo antes de que se acabe la caja?
- Retorno sobre el capital invertido (ROIC): ¿cada euro invertido en crecimiento genera más de un euro de valor?
- Working capital: ¿el crecimiento de ingresos consume caja por mayor necesidad de capital circulante?
- Concentración de deuda: ¿tengo vencimientos relevantes que puedan crear crisis de liquidez?

**Parte 2: Trade-offs entre rentabilidad y crecimiento**

Los dilemas financieros reales que quiero analizar:
- ¿Cuándo tiene sentido sacrificar margen para crecer más rápido?
- ¿Cómo evaluar si una inversión de crecimiento genera valor o solo mueve ingresos hacia adelante?
- ¿Qué nivel de apalancamiento es apropiado según la visibilidad de los ingresos futuros?
- ¿Cuándo tiene más sentido recomprar acciones o pagar dividendos que reinvertir en crecimiento?

**Parte 3: Construcción de ventajas financieras duraderas**

Ayúdame a identificar qué fortalezas financieras son difíciles de replicar y generan valor compuesto:

Modelo de ingresos recurrentes:
Los SaaS y los contratos de larga duración generan predictibilidad que reduce el coste de capital y facilita la planificación de inversiones.

Eficiencia operativa estructural:
Estructuras de costes que crecen más lento que los ingresos (economías de escala, automatización) generan expansión de margen con el crecimiento.

Posición de liquidez como ventaja estratégica:
Las empresas con caja y sin deuda pueden adquirir competidores en situaciones difíciles, invertir en oportunidades contrarianas y sobrevivir a recesiones que eliminan a rivales.

**Formato del output**
1. Diagnóstico financiero de sostenibilidad: 8 ratios clave con interpretación y benchmarks por sector
2. Modelo simplificado de tasa de crecimiento sostenible: cómo calcularlo para mi empresa
3. Framework de decisión de inversión: ¿cuándo crecer agresivamente y cuándo consolidar?
4. Plan financiero de 3 años que equilibra crecimiento y generación de caja libre
5. Dashboard CFO de métricas de crecimiento sostenible para el comité de dirección

Empieza preguntándome sobre el modelo de negocio, métricas financieras actuales clave y principal presión de corto plazo del consejo o inversores.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Planificación financiera estratégica para el crecimiento',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Construir una práctica jurídica sostenible: de la facturación por hora a modelos de valor duradero',
                'description'      => 'Aprende a diseñar un modelo de negocio jurídico que genere ingresos predecibles y crecientes sin depender de picos de trabajo o de pocos clientes clave. Identifica qué ventajas competitivas son difíciles de replicar en el sector legal. Construye relaciones de cliente que generen valor compuesto para ambas partes.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de estrategia de negocio especializado en firmas de servicios profesionales, con particular experiencia en despachos de abogados y departamentos jurídicos. Has ayudado a despachos a transformar su modelo de negocio de uno puramente reactivo y basado en horas billables a uno proactivo con ingresos más predecibles.

**El problema de la sostenibilidad en el sector jurídico**
La mayoría de los despachos tienen un modelo de negocio con alta volatilidad: dependen de pocos clientes grandes, los ingresos fluctúan con la actividad económica, y el crecimiento requiere contratar más abogados en una proporción casi lineal con el aumento de ingresos. El resultado es un negocio difícil de escalar, con márgenes que no mejoran y alta dependencia de socios que concentran las relaciones con clientes.

**Parte 1: Diagnóstico de la sostenibilidad del negocio jurídico actual**

Evalúa conmigo:
- ¿Qué porcentaje de ingresos viene del top 3 clientes? ¿Cuál es el riesgo de concentración?
- ¿Hay ingresos recurrentes o todo es proyecto a proyecto?
- ¿Las relaciones de cliente pertenecen a la firma o a socios individuales?
- ¿El crecimiento en ingresos requiere crecimiento proporcional en el equipo?
- ¿Qué ventaja diferencial tenemos que los competidores no pueden replicar fácilmente?

**Parte 2: Modelos de negocio jurídico con mayor sostenibilidad**

Ayúdame a explorar alternativas al modelo puro de facturación por horas:

Retainer o asesoría continua:
Un cliente que paga una cuota fija mensual por acceso a asesoramiento tiene mayor predictibilidad de ingresos y mayor profundidad de relación. ¿Para qué tipos de trabajo es apropiado?

Precios por proyecto o resultados:
Facturar por entregable (un contrato, un proceso de M&A, una licencia regulatoria) en lugar de por tiempo alinea mejor los incentivos con el cliente y premia la eficiencia del despacho.

Especialización profunda como ventaja:
Ser el mejor en un nicho específico (industria + tipo de trabajo) permite cobrar precios premium, reducir el coste de adquisición de clientes y generar referidos sistemáticos.

Conocimiento propietario como diferencial:
Publicaciones, guías sectoriales, bases de datos de precedentes y metodologías propias que los clientes valoran más allá del tiempo invertido.

**Parte 3: Construcción de ventajas competitivas jurídicas duraderas**

Identifica qué activos construir en los próximos 3 años que sean difíciles de copiar:
- Reputación específica en una industria o tipo de asunto
- Red de relaciones con decisores en sectores clave
- Tecnología propia que mejora la eficiencia o la calidad del servicio
- Marca empleadora que atrae a los mejores abogados del mercado

**Formato del output**
1. Diagnóstico de sostenibilidad del negocio jurídico: 8 indicadores con evaluación
2. Mapa de modelos de negocio jurídico por sostenibilidad y potencial de escala
3. Framework para migrar clientes de facturación por horas a retainer sin perder la relación
4. Plan de especialización: cómo elegir el nicho correcto y cómo comunicarlo al mercado
5. Roadmap de 24 meses para construir un despacho con ingresos más predecibles y márgenes mejores

Empieza preguntándome sobre el tamaño del despacho, áreas de práctica, mix de clientes actual y principal desafío de negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Transformación del modelo de negocio jurídico',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer success como motor de crecimiento sostenible: de retención a expansión',
                'description'      => 'Aprende a transformar tu equipo de customer success de un centro de costes defensivo a un motor de crecimiento que genera ingresos crecientes de la base de clientes existente. Diseña una estrategia de expansión basada en datos de uso y salud del cliente. Construye relaciones que generan valor compuesto para cliente y empresa.',
                'prompt_content'   => <<<'EOT'
Eres un VP de Customer Success con especialización en growth from existing customers — el arte de generar crecimiento sostenible maximizando el valor de la base de clientes actual. Has liderado equipos de CS que pasaron de medir su éxito por el churn evitado a medirlo por los ingresos expansivos generados.

**El cambio de paradigma: de retención a expansión**
El customer success de primera generación se diseñó para evitar el churn: identificar clientes en riesgo y salvarlos antes de que se fueran. Es necesario pero no suficiente. El customer success de segunda generación entiende que la mayor fuente de crecimiento sostenible para un negocio de ingresos recurrentes no es la adquisición de nuevos clientes (que cuesta cada vez más) sino la expansión de los existentes (que conocen el producto, confían en la empresa y ya están integrados).

**Parte 1: Diagnóstico del potencial de expansión de la base de clientes**

Evalúa conmigo:
- Net Revenue Retention (NRR): ¿los ingresos de la cohorte de clientes del año pasado son mayores este año?
- Expansion Revenue: ¿qué porcentaje de los ingresos nuevos viene de clientes existentes (upsell, cross-sell, seats adicionales)?
- Product Qualified Leads (PQLs): ¿identificas señales de uso del producto que predicen disposición a expandir?
- White space analysis: ¿cuántos clientes están usando solo el 20-30% de las capacidades por las que pagan?
- Customer health score: ¿tienes un modelo que predice quién va a expandir y quién va a churnar?

**Parte 2: Estrategias de expansión que crean valor compuesto**

Ayúdame a diseñar estrategias de expansión que se refuerzan con el tiempo:

Expansión orgánica guiada por datos de producto:
Identificar en el producto los momentos en que un usuario o equipo está listo para usar más funcionalidades o necesita más capacidad, y actuar proactivamente en ese momento.

Programas de éxito de cliente que demuestran ROI:
Clientes que pueden cuantificar el valor que obtienen del producto tienen mucho más incentivo de renovar y expandir. ¿Cómo construir un framework de ROI compartido con cada cliente?

Comunidad de clientes como acelerador de adopción:
Clientes que comparten aprendizajes entre sí adoptan el producto más rápido, lo usan mejor y se convierten en embajadores que generan nuevos clientes.

Executive sponsorship para cuentas estratégicas:
Relaciones de alto nivel con los decisores de los clientes más importantes crean conversaciones estratégicas que van mucho más allá de la renovación anual.

**Parte 3: Métricas y sistemas para el CS como motor de crecimiento**

Construye conmigo el sistema de métricas y procesos que convierte al equipo de CS en generador de ingresos:
- KPIs de expansión para el equipo de CS (expansion MRR por CSM, NRR por segmento)
- Proceso de identificación y gestión de oportunidades de expansión
- Integración con el equipo de ventas para oportunidades de upsell complejo
- Modelo de compensación del equipo de CS que incentiva la expansión

**Formato del output**
1. Diagnóstico del potencial de expansión: 8 métricas con evaluación y benchmarks de la industria
2. Mapa de señales de producto que predicen expansión para mi tipo de producto
3. Playbook de expansión: proceso desde señal hasta contrato firmado
4. Framework de ROI compartido con el cliente: cómo calcular y comunicar el valor generado
5. Plan de 6 meses para convertir el equipo de CS en generador neto de ingresos

Primero pregúntame sobre el tipo de producto, modelo de precios, NRR actual y estructura del equipo de CS.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Conversión del CS en generador de ingresos de expansión',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Crecimiento sostenible como freelancer: construir un negocio que no dependa de ti 100%',
                'description'      => 'Aprende a construir un negocio freelance que genera valor y reputación incluso cuando no estás trabajando activamente. Diseña sistemas de marketing, entrega y fidelización que funcionen sin tu presencia constante. Construye activos que aumenten tu valor de mercado y reduzcan tu dependencia del tiempo billable.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocios para profesionales independientes con experiencia en ayudar a freelancers a construir negocios sostenibles y escalables. Has acompañado a decenas de profesionales en la transición de intercambiar tiempo por dinero a construir un negocio que genera valor compuesto.

**El problema central del freelancer exitoso**
Paradójicamente, cuando un freelancer tiene éxito, su mayor problema aparece: está tan ocupado ejecutando para clientes que no tiene tiempo de hacer marketing, mejorar sus sistemas, desarrollar nuevas capacidades ni pensar estratégicamente. El resultado es el ciclo de feast and famine: cuando está lleno de trabajo no consigue clientes; cuando termina los proyectos, empieza de cero. Un negocio freelance sostenible rompe ese ciclo construyendo activos que trabajan cuando el profesional no puede.

**Parte 1: Diagnóstico de la sostenibilidad del negocio freelance actual**

Evalúa conmigo qué tan sostenible es tu negocio hoy:
- ¿Qué pasaría con tus ingresos si te tomas 3 semanas de vacaciones sin trabajar?
- ¿Cuánto de tu pipeline nuevo viene de marketing activo vs. referencias de clientes satisfechos?
- ¿Tienes algún producto o activo (curso, plantilla, guía, comunidad) que genere ingresos sin tu tiempo directo?
- ¿Puedes predecir tus ingresos del próximo trimestre con razonable precisión?
- ¿Tu reputación en el mercado es lo suficientemente fuerte para que clientes te busquen a ti?

**Parte 2: Activos de crecimiento sostenible para freelancers**

Identifica qué activos construir en los próximos 12-18 meses:

Contenido que trabaja mientras duermes:
Artículos de blog, casos de estudio, vídeos, newsletters y publicaciones en LinkedIn que demuestran tu expertise y atraen clientes calificados sin tu intervención activa.

Reputación en un nicho específico:
Ser reconocido como el mejor en un caso de uso muy específico (por ejemplo: "el copywriter especializado en SaaS de gestión de proyectos en español") permite cobrar más, trabajar menos horas y recibir referidos de mayor calidad.

Sistemas de entrega que reducen tu tiempo por proyecto:
Plantillas, procesos documentados, herramientas configuradas y checklists que hacen cada proyecto más eficiente sin reducir la calidad percibida.

Productos de información o comunidad:
Cursos, talleres, membresías o asesorías grupales que monetizan tu conocimiento a un coste marginal bajo una vez creados.

Red de colegas para proyectos y referidos:
Una red activa de profesionales complementarios que te refiere trabajo y a quien tú refiere trabajo multiplica tu capacidad sin contratar.

**Parte 3: Trade-offs del crecimiento freelance**

Ayúdame a pensar en:
- ¿Cuándo tiene sentido subir tarifas vs. añadir más clientes?
- ¿Cuándo conviene crear productos digitales vs. seguir en el modelo de servicios?
- ¿Cómo decido en qué contenido o activos invertir tiempo dado que no tengo ingresos de ese tiempo?
- ¿Cuándo tiene sentido asociarse con otro profesional o contratar ayuda?

**Formato del output**
1. Scorecard de sostenibilidad del negocio freelance: 10 preguntas con interpretación
2. Mapa de activos de negocio por potencial de retorno compuesto y esfuerzo de construcción
3. Plan de contenido de 6 meses para construir reputación en tu nicho sin saturarte
4. Sistema de referidos: cómo construir una red que genere el 50% de tu pipeline
5. Hoja de ruta de 18 meses para reducir la dependencia del tiempo facturado en un 30%

Empieza preguntándome sobre mi especialidad, tarifa actual, cómo llegan los clientes hoy y cuántas horas semanales dedico a actividades de marketing y desarrollo de negocio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construcción de un negocio freelance menos dependiente del tiempo',
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
