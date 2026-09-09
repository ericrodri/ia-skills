<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills97Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Relaciones públicas digitales para startups',
                'description'      => 'Consigue cobertura en medios online, newsletters de nicho y podcasts sin agencia: el proceso que funciona con poco presupuesto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en relaciones públicas digitales con experiencia trabajando con startups en etapa early stage que no tienen presupuesto para agencias de PR. Tu objetivo es ayudarme a diseñar y ejecutar una estrategia de PR que consiga cobertura real en medios relevantes para mi industria.

## Por qué el PR digital es diferente al PR tradicional

Los periodistas y creadores de contenido reciben cientos de notas de prensa y pitches por semana. El 90% van directamente a la papelera. Lo que sí funciona es construir relaciones genuinas con los periodistas que cubren tu sector antes de necesitarlos, y tener historias reales que a su audiencia le importe leer.

El PR digital efectivo para startups no es "enviar nota de prensa a 200 medios". Es identificar las 10-15 personas que tienen la audiencia que necesitas y construir una relación que les haga querer escribir sobre ti.

## Paso 1: Mapa de medios y periodistas objetivo

**Tipos de cobertura por objetivo:**
| Objetivo | Tipo de medio | Qué buscan |
|----------|--------------|-----------|
| Credibilidad B2B | Medios sectoriales, LinkedIn | Casos de uso, datos, tendencias |
| Atracción de talento | Medios tech, podcasts de industria | Cultura, crecimiento, visión |
| Captación de clientes | Newsletters de nicho, blogs especializados | Comparativas, tutoriales, opinión |
| Inversión | Medios de ecosistema (Xataka, El Referente) | Traction, rondas, equipo |
| SEO y backlinks | Medios generales tech | Noticias con contexto novedoso |

**Cómo construir tu lista de medios:**
1. Busca quién ha cubierto a tus competidores en los últimos 6 meses
2. Identifica las newsletters de nicho que leen tus clientes ideales
3. Encuentra los podcasts donde han estado los founders de empresas similares
4. Lista los 5 periodistas que más citan otras personas de tu sector

Para cada medio o persona: nombre, medio, tema que cubre, formato preferido, cómo contactar y cuándo fue la última vez que publicaron algo relevante para tu industria.

## Paso 2: El pitch perfecto (que sí se lee)

**Anatomía de un pitch efectivo:**

**Asunto (lo más importante):**
- Máximo 6-8 palabras
- El ángulo de la historia, no el nombre de tu empresa
- Ejemplos: "El 73% de los CFOs no saben cuánto gastan en SaaS" / "La startup que elimina el Excel de los equipos de finanzas"

**Cuerpo del email:**
```
Línea 1: El dato o hecho llamativo que contextualiza la historia (no tu empresa)
Línea 2-3: La historia que puedes darle y por qué es relevante para SU audiencia
Línea 4: Por qué eres la fuente adecuada para contarla (credenciales, datos propios)
Línea 5: CTA concreto (¿una llamada de 15 minutos? ¿te paso el comunicado completo?)

PS: Un dato adicional que justifique el interés. Los PS se leen más que el cuerpo.
```

**Lo que nunca debes hacer:**
- Empezar el email con el nombre de tu empresa o producto
- Adjuntar el comunicado de prensa al primer email
- Copiar y pegar el mismo pitch a 50 periodistas
- Enviar a info@ o redaccion@ sin nombre de persona

## Paso 3: Tipos de historia que funcionan para startups

**Historia 1: Los datos propios**
Si tu producto o servicio genera datos interesantes sobre un comportamiento o tendencia, puedes publicar un informe y ofrecérselo a medios en exclusiva o embargo. Los medios quieren datos originales que no tienen que producir ellos.

**Historia 2: El punto de vista contrario**
¿Hay un consensus en tu industria con el que genuinamente no estás de acuerdo y tienes argumentos para sostenerlo? Las opiniones argumentadas y contrarias a la corriente principal consiguen mucha más cobertura que las que confirman lo que todos ya saben.

**Historia 3: El caso de cliente con cifras reales**
Un caso de cliente con métricas concretas (% de ahorro, tiempo reducido, ingresos generados) es uno de los formatos más pedidos por medios B2B. Necesitas la autorización del cliente y números reales, no aproximaciones vagas.

**Historia 4: El founder como fuente experta**
Posiciónate como fuente experta en un tema, no solo como fundador de una empresa. Los periodistas buscan personas que puedan comentar tendencias con conocimiento, no solo vender su producto.

## Paso 4: Newsletters de nicho y podcasts

Los medios grandes son difíciles al principio. Las newsletters de nicho y los podcasts de industria son más accesibles y a menudo tienen audiencias más cualificadas.

**Cómo aparecer en newsletters de nicho:**
1. Suscríbete y sé lector activo durante 4-6 semanas
2. Responde al creador con feedback genuino sobre algún número
3. Propón un artículo de guest o una colaboración que aporte valor a SU audiencia
4. Ofrece primicia de algún dato o historia antes de hacerlo público

**Cómo conseguir entrevistas en podcasts:**
1. Escucha 3-5 episodios del podcast antes de proponer nada
2. El pitch de podcast es diferente: propón el tema del episodio, no que entrevisten a tu empresa
3. Menciona a oyentes del podcast en tu propuesta: "para los CEOs de SaaS que escuchan tu podcast, creo que el tema X sería muy relevante porque..."
4. Prepara un kit de invitado: bio, foto, temas propuestos con bullet points, episodios anteriores donde hayas participado

## Paso 5: Seguimiento y medición

**Sistema de seguimiento de PR:**
Crea una hoja de cálculo con: periodista/newsletter/podcast, fecha del primer contacto, respuesta (sí/no/quizás), tipo de cobertura conseguida, fecha de publicación, alcance estimado y link.

**Métricas de PR que importan:**
- Coberturas conseguidas por período (calidad > cantidad)
- Backlinks obtenidos (impacto SEO medible)
- Tráfico referido desde cada cobertura
- Leads atribuibles a menciones en medios (con UTMs en URLs compartidas)
- Cambio en búsquedas del nombre de la marca (Google Search Console)

**Cadencia recomendada:**
- 5-10 pitches personalizados por semana es más que suficiente
- Seguimiento a los 5-7 días si no hay respuesta (máximo 1 seguimiento)
- Una historia nueva o actualización de datos cada 4-6 semanas

## Entregable: Kit de PR mínimo viable

Ayúdame a crear: lista priorizada de 15 medios/newsletters/podcasts objetivo, plantilla de pitch adaptada a mi empresa, calendario de acciones para los primeros 60 días y checklist del kit de prensa básico que debo preparar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar y ejecutar una estrategia de PR digital para una startup sin agencia, consiguiendo cobertura real en medios, newsletters y podcasts del sector.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura de datos moderna',
                'description'      => 'Data warehouse, data lake, dbt, ETL/ELT: cómo elegir la arquitectura correcta según la etapa y el tamaño del equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un data engineer con experiencia diseñando arquitecturas de datos para empresas en distintas etapas de crecimiento, desde startups con un analista hasta scale-ups con equipos de datos de 20 personas. Voy a describir mi situación actual y necesito recomendaciones concretas sobre qué arquitectura implementar y en qué orden.

## El problema de las decisiones prematuras en datos

La mayoría de las empresas copian la arquitectura de datos de empresas mucho más grandes que ellas. El resultado: un data lake en S3 que nadie consulta, pipelines de Airflow que mantiene media persona, y un data warehouse de 200€/mes con 3 tablas. La arquitectura de datos debe evolucionar con la empresa, no anticipar un tamaño que quizás nunca llegue.

**Principio rector:** la arquitectura correcta es la más simple que resuelve el problema actual sin crear deuda técnica que bloquee el crecimiento futuro.

## Etapa 1: < 1M registros, 1-2 personas en datos

**El problema típico:** datos dispersos en múltiples SaaS (CRM, base de datos de producción, herramientas de marketing), informes manuales en Excel, decisiones basadas en intuición porque el dato está en 3 sitios diferentes.

**Stack recomendado:**
- **Extracción**: Fivetran o Airbyte (managed) — no construyas extractores propios
- **Destino**: BigQuery o Redshift (el primero más barato en volúmenes bajos, factura por consulta)
- **Transformación**: dbt Cloud (plan gratuito suficiente para empezar)
- **Visualización**: Looker Studio (gratuito) o Metabase (open source)

**Por qué NO necesitas todavía:**
- Data lake (S3/GCS): añade complejidad sin beneficio a este volumen
- Kafka o streaming: tus datos cambian en horas, no en segundos
- Spark: overkill para < 100GB de datos
- Airflow: dbt + el scheduler de BigQuery es suficiente

**Inversión estimada mensual:** 50-200€ (principalmente BigQuery y Fivetran básico)

## Etapa 2: 1M-100M registros, 3-10 personas en datos

**Nuevas necesidades que emergen:**
- Múltiples fuentes de datos con lógica de negocio compleja
- Varios equipos consumiendo datos con definiciones diferentes de la misma métrica
- Necesidad de histórico y auditoría de cambios
- Latencia de datos < 1 hora en algunos casos de uso

**Stack recomendado:**
| Capa | Tecnología | Por qué |
|------|-----------|---------|
| Ingestión | Fivetran + extractores propios para APIs internas | Fivetran para SaaS estándar, custom para datos propietarios |
| Storage | Snowflake o BigQuery | Snowflake mejor para carga predecible, BigQuery mejor para ad-hoc |
| Transformación | dbt Core + Airflow o Prefect | dbt modela, Airflow orquesta |
| Calidad | dbt tests + Great Expectations | Validación en cada capa |
| Catálogo | dbt docs + DataHub o Amundsen | Descubribilidad de datos |
| BI | Looker o Tableau | Semántica centralizada |

**Patrones de modelado con dbt:**
```
staging/ — modelos 1:1 con la fuente, sin lógica de negocio, solo limpieza
intermediate/ — joins y transformaciones complejas reutilizables
marts/ — tablas finales orientadas al consumidor (finance, marketing, product)
```

**Materialización recomendada:**
- staging: views (siempre frescos, sin coste de almacenamiento)
- intermediate: tables (cuando los joins son costosos)
- marts: tables con incremental refresh para tablas grandes

## Etapa 3: > 100M registros, equipo de datos dedicado

**Nuevas necesidades:**
- Datos en tiempo real o near-real-time para product y operaciones
- Separación entre datos para ML/AI y datos para BI
- Gobierno de datos y control de acceso granular
- Costes de cómputo que justifican optimización activa

**Arquitectura Medallion (Bronze / Silver / Gold):**

| Capa | Contenido | Consumidor | Frecuencia |
|------|----------|-----------|-----------|
| Bronze (raw) | Datos crudos tal como llegan de la fuente | Ingeniería de datos | Continuo o batch |
| Silver (cleaned) | Datos validados, deduplicados, tipados | Data scientists | Cada hora / día |
| Gold (business) | Métricas y dimensiones de negocio | Analistas, BI, producto | Cada hora / día |

**Cuándo añadir streaming (Kafka + Flink/Spark Streaming):**
Solo cuando necesites: alertas en tiempo real basadas en eventos, actualización de dashboards operativos en < 5 minutos, o pipelines de ML que requieran features en tiempo real. En cualquier otro caso, micro-batch (cada 15-30 minutos con Airflow) es suficiente y mucho más simple.

## Data Lakehouse: ¿la arquitectura del futuro?

El data lakehouse (Delta Lake, Apache Iceberg, Hudi) combina el bajo coste de almacenamiento del data lake con las capacidades ACID y la velocidad de consulta del data warehouse.

**Cuándo tiene sentido:**
- Tienes > 10TB de datos históricos que no consultas frecuentemente
- Necesitas ML sobre los mismos datos que usa el BI
- El coste del data warehouse es un problema real (> 5.000€/mes)

**Stack lakehouse típico:**
- Almacenamiento: S3 o GCS con formato Delta Lake o Iceberg
- Motor de consulta: Trino, Spark SQL o DuckDB para analítica
- Catálogo: Glue (AWS) o Unity Catalog (Databricks)
- Ingesta: Delta Live Tables o Databricks Auto Loader

## Decisión: ¿qué arquitectura necesito ahora?

Responde estas preguntas y te daré la recomendación concreta:
1. ¿Cuántos registros en total tiene tu tabla más grande?
2. ¿Cuántas fuentes de datos diferentes tienes?
3. ¿Cuántas personas van a consumir los datos?
4. ¿Tienes algún caso de uso que requiera datos frescos en < 1 hora?
5. ¿Cuál es tu presupuesto mensual máximo para infraestructura de datos?

Con estas respuestas, diseño el stack exacto, el orden de implementación, los costes estimados y el plan de migración si ya tienes algo en marcha.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Elegir la arquitectura de datos correcta (warehouse, lake, lakehouse, dbt, streaming) según la etapa de la empresa y el tamaño del equipo, con un plan de implementación concreto.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Prototipado rápido con Figma',
                'description'      => 'De idea a prototipo funcional en 2 horas: el proceso que usan los mejores diseñadores para validar antes de escribir código.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product designer con experiencia en design sprints y prototipado rápido en Figma. Voy a describir la funcionalidad o flujo que quiero prototipar y necesito que me guíes en el proceso para crear un prototipo funcional y testeable en el menor tiempo posible.

## Por qué prototipar antes de programar

Cada hora de programación sin validar una suposición de diseño puede representar días de trabajo tirado. Un prototipo en Figma que tarda 2 horas en hacer puede responder las mismas preguntas de usabilidad que costaba semanas descubrir en código.

La regla del prototipado: nunca programes algo que puedas prototipar. Nunca prototipes algo que puedas dibujar en papel primero.

## Fase 1: Definir qué quieres validar (10 minutos)

Antes de abrir Figma, define con precisión:

**Las 3 preguntas del prototipo:**
1. ¿Qué hipótesis de diseño estamos testando? ("Los usuarios entenderán que deben hacer X antes de Y")
2. ¿Qué tarea realizará el usuario en el test? ("Completa una compra con dirección nueva")
3. ¿Qué resultado nos indica que la hipótesis es correcta? ("El 80% completa la tarea sin ayuda en < 2 minutos")

Sin respuesta a estas tres preguntas, el prototipo será hermoso pero inútil para la toma de decisiones.

## Fase 2: Estructura del prototipo en Figma

**Jerarquía de fidelidad según el objetivo:**

| Fidelidad | Cuándo usarla | Tiempo de creación |
|-----------|--------------|-------------------|
| Wireframe (solo estructura) | Validar flujo y arquitectura de información | 30-60 min |
| Mockup (con diseño visual básico) | Validar comprensión y usabilidad | 1-2 horas |
| Prototipo de alta fidelidad | Presentación a stakeholders, tests con usuarios reales | 3-8 horas |

Para la mayoría de los tests de usabilidad, un wireframe gris con texto real (no Lorem Ipsum) es suficiente. El diseño visual es una distracción en los primeros tests.

**Estructura de un archivo Figma bien organizado:**
```
📁 [Proyecto]
  📄 Prototipo v1
    🖼️ Cover (thumbnail del proyecto)
    📦 Components (librería local)
    📱 Flujo 1: [nombre del flujo]
      Frame: Pantalla 1
      Frame: Pantalla 2
      Frame: Pantalla N
    📱 Flujo 2: [nombre del flujo]
```

## Fase 3: Componentes esenciales en Figma

**Los 5 componentes que aceleran cualquier prototipo:**

**1. Auto Layout para contenedores adaptativos:**
Usa Auto Layout en todos los contenedores que necesiten adaptarse al contenido. La configuración más útil: gap entre elementos, padding interno y resize según contenido. Evita las posiciones absolutas dentro de contenedores que van a cambiar.

**2. Variables para texto real:**
Sustituye Lorem Ipsum por texto real desde el primer wireframe. El texto falso impide detectar problemas de truncamiento, jerarquía visual y comprensión del usuario.

**3. Overlays y modals:**
En Figma puedes crear modals y overlays que aparecen sobre la pantalla sin duplicar toda la pantalla. Usa "Open overlay" en los prototipos en lugar de crear pantallas duplicadas con el modal abierto.

**4. Scroll vertical con Fixed elements:**
Para prototipar navbars o footers fijos mientras el contenido hace scroll: agrupa el contenido en un frame con "Clip content" y "Overflow scrolling", y posiciona los elementos fijos fuera del grupo scrollable.

**5. Conditional logic con Variables de Figma:**
Para prototipos más avanzados, usa Variables booleanas para mostrar/ocultar estados (toggle on/off, logged in/out, empty/filled). Esto permite un prototipo interactivo sin duplicar pantallas para cada estado.

## Fase 4: El flujo de prototipado en 2 horas

**Minuto 0-20: Sketching rápido en papel o Figjam**
Antes de Figma: dibuja a mano los 3-5 pantallas principales del flujo. No busques la perfección, busca la secuencia lógica. ¿Qué ve el usuario primero? ¿Qué ocurre cuando hace clic en X?

**Minuto 20-60: Wireframes en Figma**
Crea los frames con el tamaño correcto del dispositivo objetivo. Coloca los elementos usando Auto Layout. Usa texto real. No pierdas tiempo con colores o fuentes: todo en gris #333 y #999.

**Minuto 60-90: Conexiones y interacciones**
Activa el modo Prototype en Figma. Conecta los frames con interacciones básicas: On Click → Navigate to. Para los flujos más importantes añade transiciones (Smart Animate o Slide In). Crea un Starting Frame claro.

**Minuto 90-120: Test y ajuste**
Presenta el prototipo (Cmd/Ctrl + P) y haz un primer test tú mismo. ¿Hay alguna pantalla que falta? ¿Alguna interacción que no funciona? Ajusta y comparte el link con la primera persona de test.

## Fase 5: Testing del prototipo

**Protocolo de test de usabilidad rápido (30-45 min por usuario):**
1. Contexto: "Imagina que eres [persona]. Acabas de descubrir esta app y vas a [objetivo]."
2. Tarea: "Por favor, [tarea concreta]. Piensa en voz alta mientras lo haces."
3. Observación: No interfieras. Toma nota de: dónde se detiene, qué dice, dónde hace clic y falla.
4. Preguntas post-test: "¿Qué esperabas que ocurriera cuando...? / ¿Qué parte fue confusa?"

**Con 5 usuarios detectas el 85% de los problemas de usabilidad.** No necesitas grupos de 20 personas.

**Template de reporte rápido tras los tests:**
| Problema | Frecuencia | Severidad (1-3) | Solución propuesta |
|---------|-----------|----------------|-------------------|
| | | | |

## Entregable: Protocolo de prototipado para mi caso

Dime la funcionalidad o flujo que quieres prototipar y te daré: lista de pantallas necesarias, componentes clave a crear, interacciones mínimas para el test, tareas para los usuarios de test y las métricas que indicarán si el diseño funciona.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Crear prototipos funcionales en Figma en pocas horas para validar hipótesis de diseño con usuarios antes de empezar a programar.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Sales playbook',
                'description'      => 'El documento que estandariza el proceso de ventas, acelera el onboarding y mantiene la calidad cuando el equipo escala.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Ventas con experiencia construyendo procesos de ventas escalables en empresas B2B en crecimiento. Mi objetivo es crear un sales playbook completo que estandarice cómo vende mi equipo, acelere el tiempo hasta la primera venta de los nuevos miembros y mantenga la calidad del proceso cuando el equipo crezca de 3 a 15 personas.

## Por qué la mayoría de los sales playbooks no funcionan

Un playbook de ventas que acumula polvo digital existe en el 80% de las empresas con más de 5 vendedores. No funcionan porque: están escritos por marketing, no por los vendedores que realmente cierran deals; tienen demasiado sobre el producto y muy poco sobre el cliente; describen lo que debería pasar, no lo que pasa de verdad; y nadie los actualiza cuando el mercado o el producto cambia.

Un buen playbook es una herramienta de trabajo, no un documento para impresionar a inversores.

## Módulo 1: El cliente ideal (ICP y personas)

**Ideal Customer Profile (ICP) — criterios objetivos:**
Define los atributos que hacen que un cliente sea bueno para tu empresa, no solo para cerrar el deal:

| Atributo | Valor ideal | Señal de alerta |
|---------|------------|----------------|
| Tamaño de empresa | 50-500 empleados | < 10 o > 5.000 |
| Industria | Tech, SaaS, servicios profesionales | Manufactura, retail |
| Presupuesto disponible | > 10.000€/año | < 5.000€/año |
| Urgencia del problema | Problema activo, están buscando solución | "Lo necesitaremos en el futuro" |
| Decisor accesible | Puedes hablar con el decisor en < 2 semanas | Acceso solo a nivel junior |
| Expansión posible | > 3 potenciales usuarios en la empresa | Solo 1 usuario |

**Personas de compra — los roles que aparecen en el proceso:**
- **Champion**: el que quiere que la solución exista dentro de la empresa. Tu aliado interno.
- **Economic buyer**: el que firma el presupuesto. A menudo no es el usuario.
- **Technical buyer**: el que valida la seguridad, la integración y el contrato.
- **End user**: quien usará el producto a diario. Puede ser un bloqueador si no está convencido.

Para cada persona: qué le importa, qué le preocupa, cómo habla de su problema y qué necesita ver para dar el OK.

## Módulo 2: El proceso de ventas paso a paso

**Las 6 etapas del proceso y cómo saber en cuál estamos:**

| Etapa | Criterio de entrada | Criterio de salida | Probabilidad |
|-------|--------------------|--------------------|-------------|
| 1. Prospecto | Encaja con ICP | Responde primer contacto | 10% |
| 2. Descubrimiento | Primera reunión acordada | Pain validado, existe presupuesto | 25% |
| 3. Demo/Propuesta | Pain confirmado + decisor identificado | Demo completa + propuesta enviada | 40% |
| 4. Evaluación | Propuesta revisada por decisor | Negociación activa | 60% |
| 5. Negociación | Intención de compra verbal | Contrato enviado | 80% |
| 6. Cierre | Contrato enviado | Firmado y pagado | 95% |

**Para cada etapa, el playbook debe incluir:**
- El objetivo de la etapa (qué información necesitamos obtener)
- Las preguntas clave que debemos hacer
- Los materiales de apoyo (deck, case study, propuesta tipo)
- Los criterios exactos para avanzar o descartar el deal

## Módulo 3: Scripts y frameworks de conversación

**Framework de descubrimiento (MEDDIC o SPIN adaptado):**

MEDDIC para ventas enterprise:
- **M — Metrics**: ¿Qué métricas impacta este problema? ¿Cuánto les cuesta no resolverlo?
- **E — Economic buyer**: ¿Quién tiene la firma del presupuesto?
- **D — Decision criteria**: ¿Con qué criterios van a tomar la decisión?
- **D — Decision process**: ¿Cómo se toman las decisiones de compra en su empresa?
- **I — Identify pain**: ¿Cuál es el impacto concreto de no resolver esto?
- **C — Champion**: ¿Quién dentro de la empresa quiere que esto funcione?

**Script de primera llamada (15 minutos):**
```
Apertura (1 min):
"[Nombre], gracias por hacer tiempo. He investigado [empresa] y vi que [observación específica].
Tenemos 15 minutos: prefiero dedicarlos a entender tu situación antes de contarte nada
de nosotros. ¿Te parece bien si empiezo con algunas preguntas?"

Descubrimiento (10 min):
1. "¿Cómo estáis gestionando [proceso que resuelves] actualmente?"
2. "¿Cuál es el mayor dolor en ese proceso?"
3. "¿Qué impacto tiene ese problema en vuestros resultados?"
4. "¿Habéis intentado resolverlo antes? ¿Qué pasó?"

Cierre de la llamada (4 min):
"Basándome en lo que me has contado, creo que podemos ayudar con [X].
¿Tiene sentido que exploremos más? Podría mostrarte [solución específica al pain]
en una sesión de 45 minutos con [persona relevante de tu equipo]. ¿La semana que viene?"
```

## Módulo 4: Gestión de objeciones

**Las 5 objeciones más frecuentes y cómo responderlas:**

**"Es muy caro"**
No bajéis el precio directamente. Primero entiende qué hay detrás:
- "Comparado con qué alternativa?" (puede ser un competidor, Excel, o no hacer nada)
- "¿Cuánto os cuesta el problema que esto resuelve cada mes?"
- Recalcula el ROI con sus números reales, no los tuyos

**"Ahora no es el momento"**
- "¿Qué necesitaría cambiar para que fuera el momento?"
- Si la respuesta es vaga, el problema no es prioritario → descalifica o pausa
- Si la respuesta es concreta, convierte ese hito en un trigger para retomar

**"Lo necesitamos revisar con el equipo técnico / jurídico"**
- "¿Podemos hacer esa revisión juntos? Tenemos experiencia respondiendo las preguntas que suelen surgir"
- Ofrece un documento de seguridad / un legal FAQ que anticipen las dudas

## Módulo 5: Onboarding de nuevos vendedores

**Plan de 30-60-90 días:**
| Semana 1-2 | Semana 3-4 | Mes 2 | Mes 3 |
|-----------|-----------|-------|-------|
| Producto + ICP | Shadowing de demos | Demos propias con supervisor | Pipeline propio con cuota |
| Proceso interno | Primera llamada de descubrimiento supervisada | Gestión de objeciones | Cuota completa |
| Herramientas (CRM, etc) | Rol play de objeciones | Primer cierre asistido | Autonomía total |

**Métricas de ramp esperadas:**
- Semana 4: primera oportunidad calificada propia
- Mes 2: primera demo propia sin supervisor
- Mes 3: primer cierre (asistido si es necesario)
- Mes 4-5: velocidad de cruising speed (80% de cuota)

## Entregable: Playbook completo para mi equipo

Comparte conmigo: qué vendes, a quién, precio medio, ciclo de venta actual y tamaño del equipo. Construyo el playbook completo adaptado a tu proceso real con todos los módulos anteriores rellenados con tu información específica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear un sales playbook completo y funcional que estandarice el proceso de ventas, acelere el onboarding y sea la guía real que usa el equipo cada día.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product strategy colaborativa',
                'description'      => 'Involucra a engineering, design, sales y marketing en la estrategia sin comités interminables ni decisiones que nadie entiende.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief Product Officer con experiencia construyendo procesos de estrategia de producto que involucran a múltiples equipos sin convertirse en burocracia paralizante. Mi desafío es que cada equipo tiene perspectivas y prioridades diferentes, y necesito un proceso que integre esas perspectivas sin que el producto termine siendo un Frankenstein que intenta satisfacer a todos y no sirve a nadie.

## El problema de la estrategia de producto en silos

En la mayoría de las empresas, la estrategia de producto se crea en una sala pequeña (PM + CEO) y se presenta al resto del mundo. El resultado predecible: engineering tiene reservas técnicas que nadie preguntó, sales dice que los clientes quieren otra cosa, design señala inconsistencias con la visión, y marketing no entiende el posicionamiento. Todos implementan sin convicción y el producto sufre.

La alternativa no es un comité donde todos votan. Es un proceso estructurado donde cada equipo aporta lo que sabe mejor, se toman decisiones claras y el proceso genera convicción, no solo alineamiento superficial.

## Fase 1: Inputs de cada equipo antes de la sesión de estrategia

Antes de sentarse juntos, cada equipo debe preparar su perspectiva específica. El PM integra estas perspectivas, no las promedia.

**Engineering — what's possible:**
- Deuda técnica que limita qué se puede construir y en qué plazo
- Estimación de esfuerzo de las iniciativas en discusión (rough order of magnitude)
- Riesgos técnicos conocidos y su impacto
- Oportunidades técnicas que el resto de la empresa no conoce (cosas que ya podemos hacer mejor de lo que usamos)

**Design — what's desirable:**
- Hallazgos de research: lo que los usuarios dicen vs. lo que realmente hacen
- Problemas de UX actuales que bloquean retención o adopción
- Oportunidades de diseño identificadas en el uso real del producto
- Benchmark de experiencia de usuario vs. competidores

**Sales — what's sellable:**
- Las 5 objeciones más frecuentes en el proceso de ventas
- Los 3 deals más grandes perdidos en los últimos 6 meses y por qué
- La funcionalidad que se menciona más en demos como diferenciador
- Los clientes que se van y el motivo principal

**Marketing — what's marketable:**
- Posicionamiento actual vs. cómo nos percibe el mercado (si hay datos)
- Las categorías y términos de búsqueda con más volumen en el espacio
- Los mensajes que mejor convierten en paid y orgánico
- Oportunidades de categoría o posicionamiento que el producto podría aprovechar

**Customer Success — what's sticky:**
- Las funcionalidades con más uso y cuáles tienen el uso más bajo
- Los patrones de comportamiento de los clientes que renuevan vs. los que se van
- Los workflows que los clientes han construido y que no documentamos
- El "aha moment" real: qué hace el usuario en su primera semana que predice la retención

## Fase 2: La sesión de estrategia (formato)

**Duración recomendada:** 3-4 horas en un solo bloque, no 8 sesiones de 1 hora.

**Estructura de la sesión:**

**Bloque 1 — Contexto compartido (45 min):**
- El PM presenta el estado actual: métricas de retención, activación y crecimiento
- Cada equipo comparte sus 3 insights más importantes (no un informe, 3 puntos)
- Regla: no se proponen soluciones todavía, solo se comparte contexto

**Bloque 2 — Definición del problema estratégico (30 min):**
- A partir de los inputs, el grupo identifica cuál es el problema estratégico central del producto para los próximos 6 meses
- Formato: "Los usuarios de [perfil] no consiguen [resultado] porque [causa raíz]. Si resolvemos esto, [impacto esperado en la métrica X]."
- El PM propone, el grupo debate y valida

**Bloque 3 — Generación de opciones estratégicas (45 min):**
Cada equipo propone 1-2 apuestas estratégicas que resuelvan el problema central desde su perspectiva. Regla: las propuestas deben ser mutuamente excluyentes o claramente priorizables, no aditivas.

**Bloque 4 — Evaluación y decisión (60 min):**
Evalúa cada opción en 4 dimensiones:
| Opción | Impacto esperado | Esfuerzo estimado | Riesgo | Alineamiento con visión |
|--------|----------------|------------------|--------|------------------------|
| | | | | |

El PM toma la decisión final con transparencia sobre los trade-offs elegidos.

**Bloque 5 — Compromisos explícitos (30 min):**
Para la opción elegida: qué hace cada equipo, con qué recursos, en qué plazos y cuáles son los hitos de validación que indicarán si la apuesta está funcionando o hay que pivotar.

## Fase 3: Comunicación hacia afuera de la sesión

**El documento de estrategia mínimo viable:**
Una sola página con: el problema que resolvemos en los próximos 6 meses, las 2-3 apuestas principales ordenadas por prioridad, los criterios de éxito de cada apuesta y lo que explícitamente NO haremos (igual de importante).

**Cómo comunicarlo a la empresa:**
- All-hands de 20 minutos: problema, apuesta, por qué, qué no haremos
- Sesión de Q&A separada para los que quieren profundizar
- Un canal Slack o Notion page con el documento y actualizaciones semanales del progreso

## Fase 4: Revisión y adaptación

**Cadencia de revisión:**
- Semanal: métricas de ejecución (velocidad de desarrollo, activación de la feature)
- Mensual: revisión de las hipótesis con datos reales
- Trimestral: ¿sigue siendo correcta la apuesta o hay que pivotar?

**Cuándo revisar la estrategia antes del ciclo:**
Si una métrica crítica (retención, activación) cambia > 15% inesperadamente, o si emerge información nueva de mercado que invalida las hipótesis centrales.

## Entregable para mi caso

Describe el contexto de tu producto: etapa, equipo, métricas actuales y el desafío de alineamiento que tienes. Diseñaré el proceso de strategy colaborativa adaptado a tu realidad, con las preguntas exactas para cada equipo y el formato de sesión que mejor funcione dado el tamaño y la cultura de tu organización.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar un proceso de product strategy que involucre genuinamente a engineering, design, sales y marketing para tomar mejores decisiones con más convicción.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Cultura en adquisiciones',
                'description'      => 'Mantén la identidad cultural de tu empresa cuando eres adquirido o cuando integras una empresa que has comprado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en integración cultural post-M&A con experiencia en procesos de adquisición tanto desde el lado del comprador como del vendido. Ayúdame a navegar el proceso de integración cultural para preservar lo que hace únicos a los equipos de ambas empresas y construir algo mejor que la suma de las partes.

## Por qué fracasan culturalmente las adquisiciones

El 70-80% de las adquisiciones no generan el valor esperado. La razón principal no es estratégica ni financiera: es cultural. Cuando dos empresas se unen, también chocan dos sistemas de valores, dos formas de tomar decisiones, dos visiones de lo que significa trabajar bien.

Los errores más frecuentes son: asumir que la empresa compradora tiene la cultura correcta, ignorar la cultura hasta que los problemas son evidentes, y tratar la integración cultural como un proyecto de RRHH cuando es responsabilidad del liderazgo.

## Fase 1: Diagnóstico cultural antes de la integración

**El Due Diligence cultural (lo que suele ignorarse):**

Antes de cerrar la adquisición —o inmediatamente después si ya está cerrada— necesitas entender la cultura real de la empresa que se integra, no la que describe su web:

**Preguntas de diagnóstico para líderes y empleados clave:**
1. "¿Cómo se toman las decisiones importantes aquí? ¿Quién tiene realmente la última palabra?"
2. "¿Qué ocurre cuando alguien comete un error grave? Dame un ejemplo."
3. "¿Qué es lo que más valoras de trabajar aquí? ¿Qué es lo que más te frustra?"
4. "Si pudieras cambiar una sola cosa, ¿qué sería?"
5. "¿Qué temes que ocurra con la adquisición?"

**Dimensiones culturales a mapear:**
| Dimensión | Empresa A | Empresa B | Tensión potencial |
|-----------|----------|----------|------------------|
| Toma de decisiones (centralizada/distribuida) | | | |
| Comunicación (directa/formal) | | | |
| Tolerancia al riesgo | | | |
| Orientación (resultados/proceso) | | | |
| Jerarquía vs. horizontalidad | | | |
| Velocidad vs. cuidado | | | |

Mapea estas dimensiones para ambas empresas y tendrás una visión clara de dónde van a surgir los conflictos.

## Fase 2: Diseño del modelo de integración

**Los 4 modelos de integración cultural:**

**Modelo 1: Absorción**
La empresa compradora impone su cultura. Funciona cuando la empresa adquirida es pequeña, tiene problemas culturales evidentes o el objetivo es principalmente tecnología/talento. Riesgo: pérdida del talento clave que vino con la cultura de la empresa adquirida.

**Modelo 2: Preservación**
La empresa adquirida mantiene su autonomía cultural. Funciona en adquisiciones donde la diferenciación cultural es parte del valor (una empresa creativa adquirida por un corporativo). Riesgo: la integración real nunca ocurre y los dos grupos nunca se benefician mutuamente.

**Modelo 3: Fusión**
Se construye una cultura nueva tomando lo mejor de ambas. Es el más ambicioso y el que más requiere liderazgo activo. Funciona cuando hay respeto mutuo y tiempo para hacerlo bien.

**Modelo 4: Transformación**
La adquisición es el catalizador para un cambio cultural más amplio en la empresa compradora. Poco frecuente pero poderoso cuando el objetivo estratégico es transformar la cultura de la empresa principal.

Elige el modelo según el objetivo estratégico de la adquisición, no según la preferencia del comprador.

## Fase 3: Comunicación en los primeros 100 días

**Los primeros 72 horas son críticos:**

Lo que los empleados de la empresa adquirida necesitan saber inmediatamente:
1. ¿Me voy a quedar? (¿hay despidos previstos?)
2. ¿Quién es mi manager ahora?
3. ¿Cambia mi compensación?
4. ¿Qué va a cambiar primero?
5. ¿A quién puedo preguntar si tengo dudas?

La ausencia de respuesta a estas preguntas genera los peores escenarios: rumores, búsquedas de empleo, pérdida de productividad.

**Plan de comunicación para los primeros 30 días:**
- Día 1: All-hands conjunto con los líderes de ambas empresas. Responde las 5 preguntas anteriores directamente, incluso si la respuesta es "todavía no lo sabemos y lo comunicaremos antes del [fecha]".
- Semana 1: Reuniones 1:1 del CEO/liderazgo con los 10-15 empleados más críticos de la empresa adquirida
- Semana 2-4: Sesiones de Q&A abiertas por equipos. Sin agenda: solo preguntas
- Mes 1: Decisiones concretas anunciadas sobre estructura organizativa

## Fase 4: Construcción de la cultura combinada

**Los 4 rituales de integración que funcionan:**

**1. Proyectos mixtos desde el día 1:**
Forma equipos con personas de ambas empresas para trabajar en un proyecto real desde la primera semana. No un ejercicio de team building: trabajo real con entregable concreto. La cultura se aprende trabajando juntos, no en talleres.

**2. Documentación de los "cómo hacemos las cosas":**
Cada empresa tiene formas de hacer las cosas que no están escritas en ningún sitio. Documenta explícitamente los procesos de ambas, compáralos y decide conscientemente cuál adoptar o si hay un tercer camino mejor.

**3. Embajadores culturales bidireccionales:**
Identifica en cada empresa a 2-3 personas que encarnen los valores de su empresa y conviértelas en embajadores en la otra. No deben vender la cultura: deben escuchar y compartir cómo hacen las cosas en su empresa.

**4. Victorias tempranas intencionadas:**
Diseña 2-3 victorias rápidas (primeras 4-6 semanas) que demuestren que la unión aporta valor a los empleados de ambas empresas. Una victoria que solo beneficia al comprador refuerza la percepción de conquista, no de unión.

## Fase 5: Métricas de integración cultural

**Cómo medir si la integración cultural va bien:**
- Employee NPS medido por separado para cada grupo durante los primeros 6 meses
- Retención del talento clave de la empresa adquirida (define quién es "clave" antes de cerrar el trato)
- Número de proyectos colaborativos cross-empresa
- Velocidad de decisiones cross-empresa (una señal de confianza)
- Absentismo y bajas voluntarias vs. tendencia histórica

Si el eNPS cae > 15 puntos en los primeros 3 meses, hay un problema de integración que requiere atención urgente.

## Entregable: Plan de integración para tu caso

Comparte: ¿cuál es tu rol (comprador o adquirido)?, ¿en qué momento del proceso estás?, ¿cuáles son las diferencias culturales más evidentes que ya detectas? Con esa información, diseño el plan de integración específico para tu situación con las acciones concretas para los primeros 100 días.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar la integración cultural en una adquisición empresarial para preservar el talento y los valores de ambas empresas y construir algo más valioso que la suma de las partes.',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelo de previsión de ingresos',
                'description'      => 'Construye el forecast de ingresos que el board y los inversores encuentran creíble y que el equipo puede ejecutar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO con experiencia construyendo modelos financieros para empresas en crecimiento que presentan ante boards e inversores. Necesito crear un modelo de previsión de ingresos que sea riguroso, defendible y que el equipo comercial pueda usar como herramienta de gestión, no solo como ejercicio para reportar.

## La diferencia entre un forecast que se usa y uno que se archiva

Un mal modelo de ingresos tiene dos síntomas: el CEO lo presenta al board con poco convencimiento y el equipo de ventas lo ignora porque no refleja cómo venden realmente. Un buen modelo es la herramienta que el equipo de ventas usa para gestionar el pipeline y el CEO usa para tomar decisiones de contratación e inversión.

El criterio de calidad de un forecast no es la precisión a 12 meses (nadie puede ser preciso a 12 meses). Es la consistencia de los supuestos, la transparencia sobre la incertidumbre y la capacidad de actualizar el modelo rápidamente cuando cambia la realidad.

## Bloque 1: Elección del modelo de forecast según el modelo de negocio

**Modelo A: Bottom-up para empresas con pipeline comercial**
Parte del pipeline real de ventas para proyectar los ingresos de los próximos 3-6 meses, y usa supuestos de crecimiento de pipeline para los meses siguientes.

**Cómo construirlo:**
1. Toma el pipeline actual por etapa de venta
2. Aplica la tasa de conversión histórica de cada etapa a la siguiente
3. Aplica el ciclo de venta medio para estimar cuándo se cerrarán
4. Suma a los ingresos recurrentes actuales (si tienes MRR/ARR)

**Fórmula simplificada:**
```
Ingresos mes N =
  MRR actual × (1 - churn rate)
  + Pipeline en etapa 4-5 × win rate
  + Pipeline en etapa 3 × win rate × 0.5 (ajuste por tiempo de ciclo)
  + Pipeline por generar (supuesto de generación de pipeline × win rate)
```

**Modelo B: Top-down para nuevos negocios sin histórico**
Parte del mercado total disponible y hace supuestos sobre penetración. Menos preciso, pero necesario cuando no hay suficiente histórico de pipeline.

**Modelo C: Cohort-based para SaaS y modelos de suscripción**
Proyecta los ingresos de cada cohorte de clientes (mes de adquisición) por separado, aplicando las tasas de retención y expansión observadas en cohortes anteriores.

Este es el modelo más preciso para SaaS porque captura la dinámica de retención real y el efecto de la expansión.

## Bloque 2: Los supuestos críticos y cómo defenderlos

**Los 7 supuestos que el board siempre pregunta:**

| Supuesto | Fuente del dato | Cómo validarlo |
|---------|----------------|----------------|
| Tasa de conversión de pipeline | Histórico CRM últimos 12 meses | Compara por rep y por cohorte |
| Ciclo de venta medio | Histórico CRM | Segmenta por tamaño de deal |
| Churn rate | Análisis de cohortes de clientes | Separa logo churn de revenue churn |
| NRR (Net Revenue Retention) | Expansión - contracción - churn | Benchmark sector: > 110% es excelente |
| Generación de pipeline | Métricas de marketing + SDR | Relación pipeline/cuota = 3-4x |
| Ticket medio | Histórico de deals cerrados | Segmenta por ICP y por canal |
| Velocidad de contratación comercial | Plan de headcount | Considera ramp time (3-6 meses) |

**Cómo presentar la incertidumbre con honestidad:**
Presenta siempre 3 escenarios: base case (más probable), optimista (si 2-3 cosas salen bien) y pesimista (si hay fricción en el mercado). El rango entre optimista y pesimista comunica cuánta incertidumbre genuina hay.

Un rango estrecho en un negocio joven no es señal de confianza: es señal de que no entiendes las variables de tu negocio.

## Bloque 3: Estructura del modelo en hoja de cálculo

**Arquitectura recomendada:**

**Hoja 1 — Supuestos (la única hoja que se edita):**
Todos los supuestos del modelo en una sola hoja con color diferente. Nadie debería tener que editar fórmulas para actualizar el modelo.

**Hoja 2 — Pipeline (input desde CRM):**
Exportación mensual del pipeline con: importe, etapa, fecha de cierre esperada, rep asignado, ICP score.

**Hoja 3 — Proyección de ingresos:**
La proyección mes a mes para 12-18 meses, construida desde los supuestos y el pipeline.

**Hoja 4 — P&L simplificado:**
Los ingresos proyectados como primera línea de un P&L que muestra la relación entre crecimiento y quema de caja.

**Hoja 5 — Dashboard:**
Los 5-7 gráficos que van en el board deck: ARR bridge, pipeline coverage, cohort retention, NRR trend, forecast vs. actual.

## Bloque 4: ARR Bridge — la visualización que los inversores esperan

El ARR Bridge explica cómo cambia el ARR de un período al siguiente:

```
ARR inicio del período
+ New ARR (nuevos clientes)
+ Expansion ARR (upsell/cross-sell de clientes existentes)
- Contraction ARR (downgrade de clientes existentes)
- Churned ARR (clientes que se van)
= ARR fin del período
```

Esta visualización convierte el ARR en un flujo explicable. Un ARR que crece gracias a expansión es una señal de salud diferente a uno que crece solo por nuevos clientes con alto churn.

## Bloque 5: Forecast vs. Actual — el proceso de seguimiento

**Revisión mensual del modelo:**
Compara el forecast del mes anterior con el resultado real. Para cada desviación significativa:
1. ¿Es una variación de timing (el deal llegó un mes después)?
2. ¿Es una variación de supuesto (la tasa de conversión fue diferente a la esperada)?
3. ¿Es una variación estructural (el mercado cambió)?

Solo las variaciones estructurales requieren actualizar los supuestos del modelo. Las de timing y supuesto puntual son información para mejorar la precisión futura, pero no invalidan el modelo.

## Entregable: Modelo para mi empresa

Comparte: modelo de negocio, métricas actuales clave (MRR/ARR, churn, pipeline) y horizonte de presentación (cuántos meses de forecast necesitas). Construyo el modelo con los supuestos específicos para tu situación y el formato de presentación para tu próximo board.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir un modelo de previsión de ingresos riguroso y defendible que el board y los inversores encuentren creíble y que el equipo comercial use para gestionar el pipeline.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Comercio electrónico transfronterizo en la UE',
                'description'      => 'IVA OSS, obligaciones aduaneras y derechos del consumidor en ventas a otros países de la Unión Europea.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en comercio electrónico transfronterizo en la Unión Europea con conocimiento del régimen OSS de IVA, las obligaciones aduaneras y la normativa de protección del consumidor aplicable a las ventas online entre países de la UE. Mi objetivo es entender qué obligaciones legales y fiscales tengo al vender online a consumidores de otros países de la UE desde España.

## El marco regulatorio del ecommerce transfronterizo en la UE

La UE ha armonizado gran parte de la normativa para crear el mercado único digital, pero la implementación de algunos aspectos (especialmente el IVA) sigue siendo compleja. Desde julio de 2021, el régimen OSS (One Stop Shop) ha simplificado significativamente la gestión del IVA para ventas B2C transfronterizas.

## Bloque 1: IVA en ventas B2C transfronterizas (régimen OSS)

**El principio del país de destino:**
Desde 2021, el IVA de las ventas online B2C a consumidores de otros países de la UE debe aplicarse al tipo del país del comprador, no del vendedor. Si vendes a un consumidor francés, cobras IVA francés (20%), no IVA español (21%).

**Umbral de ventas que activa la obligación:**
- Si tus ventas B2C a todos los demás países de la UE superan los 10.000€/año, debes aplicar el IVA del país del comprador
- Por debajo de este umbral, puedes seguir aplicando el IVA español en todas las ventas
- Este umbral es conjunto para todas las ventas a la UE, no por país

**El régimen OSS (One Stop Shop):**
El OSS permite que declares y pagues el IVA de todos los países de la UE a través de un único registro en la AEAT (España), eliminando la necesidad de registrarte como contribuyente del IVA en cada país donde vendes.

**Cómo funciona el OSS:**
1. Te registras en el OSS a través de la sede electrónica de la AEAT
2. En cada trimestre presentas una única declaración (modelo 369) con las ventas desglosadas por país de destino y tipo de IVA aplicable
3. Ingresas el IVA total en España
4. La AEAT distribuye los importes a cada administración tributaria de destino

**Los tipos de IVA por país que debes conocer:**

| País | Tipo general | Libros/Cultura | Alimentos |
|------|-------------|---------------|----------|
| Francia | 20% | 5,5% | 5,5-10% |
| Alemania | 19% | 7% | 7% |
| Italia | 22% | 4% | 4-10% |
| Portugal | 23% | 6% | 6-13% |
| Países Bajos | 21% | 9% | 9% |
| Polonia | 23% | 5% | 5-8% |

El tipo que debes aplicar depende de la categoría del producto según la legislación del país de destino. Para algunos productos con tipos reducidos (libros, alimentos, medicamentos), el tipo puede variar significativamente.

**Qué no cubre el OSS:**
- Ventas B2B (entre empresas): se sigue usando el régimen de inversión del sujeto pasivo
- Ventas desde un almacén en otro país de la UE: puede requerir registro local
- Bienes sujetos a impuestos especiales (alcohol, tabaco, combustibles): tienen su propio régimen

## Bloque 2: Aduanas dentro de la UE

**La buena noticia:** dentro de la UE no hay aranceles ni controles aduaneros para el movimiento de mercancías. Los productos circulan libremente sin declaraciones aduaneras.

**Lo que sí existe:**
- Controles de calidad y seguridad del producto (marcado CE, etiquetado)
- Impuestos especiales para ciertos productos (alcohol, tabaco)
- Restricciones sanitarias para algunos productos alimentarios

**Importante para ventas fuera de la UE:**
Si vendes también fuera de la UE (Reino Unido, USA, etc.), el IVA de la UE no aplica, pero necesitas gestionar las declaraciones de exportación y los posibles aranceles e impuestos del país de destino.

## Bloque 3: Derechos del consumidor en ventas transfronterizas

**La Directiva de Derechos del Consumidor (2011/83/UE) establece unos mínimos comunes:**

**Derecho de desistimiento (devolución sin causa):**
- 14 días calendario desde la recepción del producto para devolver sin explicar el motivo
- El vendedor debe reembolsar en 14 días desde la devolución o el desistimiento (lo que ocurra antes)
- Los gastos de devolución pueden ser a cargo del comprador si se informa antes de la compra
- Excepciones: productos personalizados, perecederos, descargados digitalmente después de la autorización expresa del comprador

**Garantía legal de conformidad:**
- Mínimo 2 años de garantía legal para bienes físicos en toda la UE
- 1 año para bienes de segunda mano (si así se acuerda)
- Algunos países (como Francia) tienen períodos más largos
- Esta garantía es independiente de cualquier garantía comercial adicional del fabricante

**Información precontractual obligatoria:**
Antes de la compra, el consumidor debe recibir claramente: precio total con IVA incluido, gastos de envío, plazo de entrega estimado, política de devoluciones, datos del vendedor e información del derecho de desistimiento.

## Bloque 4: Obligaciones adicionales de cumplimiento

**Reglamento de servicios digitales (DSA) — aplicable si tienes plataforma:**
Si vendes a través de un marketplace o tienes una plataforma que conecta vendedores con compradores, hay obligaciones adicionales de transparencia y eliminación de contenido ilegal.

**RGPD — gestión de datos de clientes europeos:**
Las ventas transfronterizas implican transferencia de datos personales de consumidores de otros países de la UE. El RGPD aplica uniformemente en toda la UE, pero tienes la obligación de designar un único punto de contacto y gestionar los derechos de los usuarios independientemente de su país.

**Resolución de disputas online (ODR):**
Las tiendas online que venden a consumidores de la UE deben incluir un enlace a la plataforma europea de resolución de disputas online (ec.europa.eu/consumers/odr) en su web.

## Bloque 5: Checklist de cumplimiento para empezar a vender transfronterizo

**Antes de vender:**
- [ ] Registrarme en el OSS a través de la AEAT si supero o voy a superar 10.000€ en ventas transfronterizas
- [ ] Actualizar la plataforma para aplicar el tipo de IVA correcto según el país del comprador
- [ ] Adaptar la política de devoluciones al mínimo legal de la UE (14 días)
- [ ] Incluir enlace a la plataforma ODR
- [ ] Revisar que la información precontractual esté completa
- [ ] Verificar que el etiquetado del producto cumple con los requisitos del país de destino

**Trimestralmente:**
- [ ] Presentar el modelo 369 (declaración OSS) antes del final del mes siguiente al trimestre
- [ ] Revisar los tipos de IVA de los países destino principales (pueden cambiar)

Adapta este análisis a tus productos específicos y a los países donde quieres vender. Algunos sectores (alimentación, farmacia, juguetes) tienen requisitos adicionales que analizamos en detalle si aplican a tu caso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Entender y cumplir las obligaciones de IVA (régimen OSS), aduaneras y de protección al consumidor para vender online a otros países de la Unión Europea desde España.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Análisis de causa raíz de tickets',
                'description'      => 'Convierte los tickets repetitivos en mejoras de producto, documentación y reducción del volumen de soporte.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia transformando equipos de soporte reactivos en equipos que mejoran el producto y reducen el volumen de tickets a través del análisis sistemático de sus causas raíz. Mi objetivo es convertir el tiempo que mi equipo dedica a responder tickets repetitivos en mejoras concretas que reduzcan ese volumen de forma permanente.

## El problema del soporte en bucle

Muchos equipos de soporte trabajan en un ciclo interminable: llegan tickets, se responden, se cierran y al día siguiente llegan los mismos tickets de usuarios diferentes. Cada mes el volumen crece con la base de usuarios, pero la tasa de tickets por usuario no baja porque nadie está atacando las causas raíz.

El análisis de causa raíz de tickets es el proceso de pasar de "respondemos preguntas" a "eliminamos las razones por las que surgen esas preguntas".

## Fase 1: Taxonomía de tickets — la base de todo análisis

**Por qué la mayoría de los análisis de tickets fallan:**
Los tags "bug", "feature request" y "question" son categorías demasiado amplias para sacar conclusiones accionables. Para hacer análisis de causa raíz necesitas una taxonomía más granular que capture el área del producto, el tipo de problema y el punto del journey del usuario donde ocurre.

**Sistema de clasificación recomendado:**

**Dimensión 1: Área del producto**
Ejemplo: Onboarding / Configuración inicial / Integración con [herramienta] / Feature X / Facturación / Exportación

**Dimensión 2: Tipo de problema**
- Bug confirmado: el software no funciona como debería
- Bug potencial: comportamiento inesperado sin confirmar
- Confusión UX: el usuario no entiende cómo funciona algo que funciona correctamente
- Falta de documentación: el usuario buscó y no encontró la respuesta
- Feature request: el producto no tiene lo que el usuario necesita
- Proceso: el problema está en el proceso del usuario, no en el producto

**Dimensión 3: Momento del journey del usuario**
- Primera semana (onboarding)
- Mes 1 (adopción)
- Usuario recurrente (uso avanzado)
- Renovación / expansión

**Cómo implementarlo:**
Añade estos campos como atributos del ticket en tu helpdesk (Zendesk, Intercom, Freshdesk). Configura que sean obligatorios al cerrar el ticket para garantizar consistencia.

## Fase 2: El proceso de análisis mensual

**Frecuencia recomendada:** análisis mensual de tickets, con una revisión trimestral más profunda.

**El proceso en 4 pasos:**

**Paso 1: Exportación y agrupación (30 minutos)**
Exporta todos los tickets cerrados del mes. Agrupa por las 3 dimensiones de la taxonomía. Identifica los 10-15 clusters con mayor volumen.

**Paso 2: Análisis de los top clusters (2 horas)**
Para cada cluster de los 5 más frecuentes:
1. Lee 10-15 tickets del cluster en detalle
2. Identifica el patrón exacto: ¿qué momento, qué acción, qué expectativa del usuario no se cumple?
3. Clasifica la causa raíz en: bug, UX confusa, documentación insuficiente, feature ausente o expectativa incorrecta del usuario

**Paso 3: Propuesta de solución (1 hora)**
Para cada causa raíz identificada, define la solución correspondiente:
| Tipo de causa raíz | Solución | Propietario | Impacto estimado |
|-------------------|---------|-------------|-----------------|
| Bug confirmado | Fix de desarrollo | Engineering | -X tickets/mes |
| UX confusa | Mejora de diseño o copy | Product/Design | -Y tickets/mes |
| Falta de documentación | Nuevo artículo de ayuda | Support | -Z tickets/mes |
| Feature ausente | Feature request al roadmap | Product | -W tickets/mes |

**Paso 4: Seguimiento del impacto (el siguiente mes)**
Verifica que el volumen del cluster atacado ha disminuido. Si no, el diagnóstico de causa raíz fue incorrecto o la solución implementada no fue efectiva.

## Fase 3: El ticket como señal de producto

**Cómo convertir tickets en inputs de producto:**

**El informe mensual de soporte para producto:**
No envíes un listado de tickets al equipo de producto. Envía:
1. Top 3 causas raíz de este mes con volumen y coste estimado
2. Propuesta de solución para cada una con esfuerzo estimado
3. Tendencia: ¿qué está creciendo, qué está bajando?
4. Un caso de cliente representativo de cada causa raíz (con consentimiento o anonimizado)

**La pregunta que une soporte con producto:**
"Si resolvemos este problema en el producto, ¿cuántos tickets por mes evitamos?" Traducir el volumen de tickets a tiempo de soporte y coste hace que las solicitudes de soporte compitan en el mismo idioma que las demás prioridades del producto.

**Estimación del ROI de resolver causas raíz:**
```
Volumen mensual del cluster: 150 tickets
Tiempo medio de resolución: 12 minutos
Coste por hora de agente: 25€/hora
Coste mensual del cluster: 150 × 0,2h × 25€ = 750€/mes
Coste anual: 9.000€/año
Si una mejora de documentación elimina el 60% del cluster: 5.400€/año ahorrados
```

## Fase 4: Reducción proactiva del volumen

**Además del análisis reactivo, hay 3 acciones proactivas:**

**1. Tours de onboarding basados en los tickets más frecuentes:**
Si el 20% de los tickets del primer mes vienen de usuarios que no entienden la funcionalidad X, añade un tour interactivo en el onboarding que muestre exactamente esa funcionalidad en el momento en que el usuario la necesita por primera vez.

**2. Mensajes en el producto antes de la fricción:**
Identifica los momentos del producto donde surge confusión frecuente y añade tooltips, empty states informativos o mensajes contextuales antes de que el usuario llegue a necesitar abrir un ticket.

**3. Documentación proactiva basada en búsquedas sin resultado:**
Revisa las búsquedas en tu centro de ayuda que terminan en cero resultados. Cada búsqueda sin resultado es un artículo que falta. Prioriza los artículos faltantes por volumen de búsqueda.

## Fase 5: Métricas de éxito

**KPIs del programa de análisis de causa raíz:**
| Métrica | Frecuencia | Objetivo |
|---------|-----------|---------|
| Tickets por usuario activo | Mensual | Reducción > 5% trimestral |
| % tickets con causa raíz clasificada | Mensual | > 80% |
| Causas raíz atacadas y validadas | Trimestral | Al menos 3 por trimestre |
| Reducción de volumen en clusters atacados | Mensual | > 40% en los 2 meses post-fix |
| Tiempo hasta la primera resolución (TTFR) | Semanal | Estable o decreciente |

## Entregable: Sistema para mi equipo

Comparte el volumen mensual de tickets, las categorías que ya usas y el helpdesk que tienes. Diseño el sistema de clasificación adaptado a tu producto y el proceso de análisis mensual que tu equipo puede implementar en las próximas 4 semanas sin añadir más de 2 horas semanales de trabajo adicional.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Implementar un sistema de análisis de causa raíz de tickets que convierta el soporte reactivo en mejoras de producto y documentación que reduzcan el volumen de forma permanente.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestionar clientes difíciles como freelancer',
                'description'      => 'Protocolos de comunicación, gestión de expectativas y cómo mantener la relación cuando el cliente se pone complicado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor senior con 15 años de experiencia como freelancer y coach de otros freelancers. He llegado a un punto difícil con un cliente y necesito ayuda para gestionar la situación de forma profesional, proteger mi trabajo y mantener (o terminar) la relación de forma que no dañe mi reputación ni mis ingresos.

## Por qué los clientes difíciles son parte inevitable del trabajo freelance

Todo freelancer que trabaja suficiente tiempo topará con clientes difíciles. No es una señal de que eres malo en tu trabajo: es estadística. La diferencia entre un freelancer que prospera y uno que se quema no está en evitar los clientes difíciles (imposible), sino en tener protocolos para gestionarlos que protejan el trabajo, la energía y la reputación.

Antes de aplicar cualquier protocolo, necesito entender qué tipo de situación estoy viviendo, porque la solución es diferente según el problema.

## Los 5 arquetipos de cliente difícil y cómo tratarlos

### Tipo 1: El que cambia de opinión continuamente (scope creep)
**Síntoma:** Cada reunión añade nuevos requisitos o cambia los que aprobó la semana anterior. El proyecto nunca termina porque el cliente siempre tiene "una cosita más".

**Causa raíz:** Falta de definición inicial del alcance o proceso de aprobación que permite cambios sin coste.

**Protocolo:**
1. Regresa al contrato: "Revisando lo que acordamos en [fecha], el alcance incluía X pero no Y. Para añadir Y tenemos dos opciones: ajustamos el plazo/precio o postponemos Y para la siguiente fase."
2. Implementa el Change Order: cualquier cambio de alcance requiere un documento firmado que actualiza precio y/o plazo antes de empezar a trabajar en el cambio.
3. Template de Change Order que te doy al final del prompt.

**Lo que no debes hacer:** absorber los cambios "por esta vez" pensando que el cliente lo valora. No lo valora: aprende que puede pedir cambios sin consecuencias.

### Tipo 2: El que no paga a tiempo (cliente moroso)
**Síntoma:** Las facturas vencen sin pago, hay excusas pero el dinero no llega, o hay promesas de pago que no se cumplen.

**Protocolo de cobro escalonado:**
- Día 0 del vencimiento: recordatorio suave por email ("adjunto factura por si se perdió")
- Día 3: llamada telefónica directa, sin email. Los emails se ignoran; las llamadas no.
- Día 7: email formal con consecuencias concretas: "si no recibo el pago antes del [fecha], pausaré el trabajo en el proyecto hasta regularizar la situación"
- Día 14: pausa real del trabajo y email notificando la pausa
- Día 30: última comunicación antes de escalar (burofax, reclamación formal o plataforma de reclamación online)

**Prevención:** cobra el 50% por adelantado en todos los proyectos. No es desconfianza: es política estándar de cualquier freelancer profesional.

### Tipo 3: El que no respeta los tiempos
**Síntoma:** Necesita todo para ayer, te escribe a las 11pm esperando respuesta inmediata, y cuando tú necesitas feedback de él tarda semanas.

**Protocolo:**
1. Define los tiempos de respuesta en el contrato desde el inicio: "mis horas de trabajo son L-V 9-18h. Respondo emails en 24h laborables."
2. Cuando ya estás en el proyecto: responde siempre dentro del horario acordado, aunque el mensaje llegue a las 11pm. Si respondes a las 11pm, enseñas al cliente que puede esperar respuesta a las 11pm.
3. Para los retrasos del cliente en dar feedback: "necesito tu revisión antes del [fecha] para mantener el plazo de entrega del [fecha final]. Si la revisión llega después, el plazo final se desplazará proporcionalmente."

### Tipo 4: El que no sabe lo que quiere
**Síntoma:** El brief está vacío o cambia constantemente. Las reuniones terminan sin decisiones claras. "No sé exactamente qué quiero pero cuando lo vea lo sabré."

**Protocolo:**
1. Antes de empezar: no arranques un proyecto sin un brief completo y firmado. Si el cliente no sabe lo que quiere, tu trabajo es ayudarle a definirlo (y cobrar por eso).
2. Sesión de kick-off estructurada con preguntas concretas: "¿Qué resultado medible esperamos en 90 días? / ¿Quién es el usuario final y qué problema tiene? / ¿Cuál es el criterio de éxito que usaremos para evaluar el resultado?"
3. Aprobaciones por escrito en cada etapa: "Antes de pasar a la fase 2, necesito tu aprobación por escrito de la fase 1 en este email."

### Tipo 5: El que menosprecia tu trabajo
**Síntoma:** Cuestiona cada decisión, cree que puede hacer tu trabajo mejor que tú, usa frases como "mi sobrino lo haría en 10 minutos".

**Protocolo:**
Este tipo de cliente rara vez mejora con el tiempo. Las opciones son dos:
1. Establecer autoridad profesional claramente desde el principio: "Te contrataste porque soy el experto en X. Estoy encantado de explicar mis decisiones, pero las decisiones las tomo yo. Si en algún punto no confías en mi criterio, es mejor que lo hablemos abiertamente."
2. Si la situación ya se degradó: evalúa si el coste de la relación (tiempo, energía, estrés) supera el ingreso. Si supera, es mejor terminar la relación de forma profesional.

## Cómo terminar una relación con un cliente difícil

**El off-boarding profesional:**
1. Revisa el contrato: ¿qué dice sobre la terminación? ¿Hay período de preaviso?
2. Notifica por escrito con el tiempo acordado (normalmente 15-30 días)
3. Entrega todo el trabajo hasta la fecha y la documentación necesaria para que otro profesional pueda continuar
4. Cobra todo lo pendiente antes de entregar el acceso final
5. No burns: el sector es pequeño, sé profesional incluso si el cliente no lo ha sido

**Template de email de terminación:**
"Tras evaluar nuestra colaboración, he decidido no continuar con el proyecto a partir del [fecha]. Te entregaré [lista de entregables] y la documentación necesaria para que puedas continuar con otro profesional. Las facturas pendientes hasta la fecha son [importe]. ¿Podemos acordar una fecha esta semana para hacer la entrega?"

## Prevención: los 5 elementos del contrato que evitan el 80% de los problemas

1. Alcance detallado: qué incluye y qué NO incluye
2. Proceso de cambio de alcance (Change Order)
3. Condiciones de pago: adelanto, plazos y penalización por retraso
4. Horario de disponibilidad y tiempo de respuesta
5. Condiciones de terminación del contrato por ambas partes

Cuéntame qué tipo de situación estás viviendo con tu cliente difícil y te doy el protocolo específico para tu caso con los textos exactos para las comunicaciones.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Gestionar situaciones difíciles con clientes como freelancer: scope creep, impagos, falta de respeto al horario y cómo terminar una relación profesionalmente cuando es necesario.',
                'vote_score'       => 48,
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
