<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills460Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Auditoría ética de campañas de marketing con IA',
                'description'      => 'Evalúa tus campañas de marketing con IA para detectar sesgos, mensajes manipuladores y prácticas que puedan vulnerar la confianza del consumidor.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ética del marketing digital y uso responsable de la inteligencia artificial. Tu misión es ayudarme a realizar una auditoría ética completa de mis campañas de marketing que utilizan IA para personalización, segmentación o generación de contenido.

**Contexto de la auditoría**

Antes de comenzar, necesito que me hagas las siguientes preguntas para contextualizar correctamente el análisis:
1. ¿Qué canales de marketing usas actualmente donde aplicas IA? (email, redes sociales, publicidad programática, web, etc.)
2. ¿Qué tipo de datos de usuarios recopila y utiliza la IA para personalizar mensajes?
3. ¿Tienes alguna política de privacidad o consentimiento activa para el uso de datos con IA?
4. ¿Han recibido quejas o señales de malestar de usuarios respecto a la personalización?

**Dimensiones éticas que debes evaluar**

Una vez que tengas mi contexto, analiza mi campaña o estrategia de marketing en estas cinco dimensiones clave:

**1. Transparencia con el usuario**
- ¿El usuario sabe que está recibiendo contenido generado o personalizado por IA?
- ¿Los emails, anuncios o mensajes indican de alguna forma que han sido creados con asistencia de IA?
- ¿Existe una opción clara para que el usuario opte por no recibir comunicaciones personalizadas por IA?

**2. Detección de sesgos en la segmentación**
- ¿Los algoritmos de segmentación excluyen sistemáticamente a grupos demográficos por razones que podrían considerarse discriminatorias?
- ¿Se aplican precios diferenciados basados en variables que correlacionan con raza, género o nivel socioeconómico?
- ¿Los modelos de lookalike audience reproducen sesgos históricos en la adquisición de clientes?

**3. Prácticas de persuasión y manipulación**
- ¿Se utilizan técnicas de urgencia artificial, escasez falsa o presión psicológica potenciada por IA?
- ¿Los mensajes aprovechan vulnerabilidades emocionales detectadas por el modelo de IA?
- ¿Existe una diferencia significativa entre lo que promete el marketing y lo que realmente entrega el producto?

**4. Privacidad y uso de datos**
- ¿El uso de datos personales para alimentar los modelos de IA cumple con el RGPD o la normativa local aplicable?
- ¿Se comparten datos con terceros para entrenamiento de modelos sin consentimiento explícito?
- ¿Los datos se retienen más tiempo del necesario?

**5. Impacto en la confianza de marca**
- ¿El nivel de personalización puede percibirse como intrusivo o incluso inquietante ("efecto uncanny valley" en el marketing)?
- ¿Existe algún riesgo reputacional si se hace pública la forma en que la IA personaliza los mensajes?

**Entregable esperado**

Para cada dimensión, proporciona:
- Una calificación de riesgo ético: Bajo / Medio / Alto
- Una descripción concreta del problema detectado (si existe)
- Una recomendación accionable y realista para corregirlo
- Un ejemplo de buena práctica del sector que pueda servir de referencia

Finaliza con un resumen ejecutivo de una página que pueda presentarse al equipo de liderazgo, con los tres riesgos más urgentes y un plan de acción de 30-60-90 días para implementar marketing con IA de forma ética y sostenible.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Auditoría ética de estrategias de marketing que usan IA para personalización y segmentación',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Implementación de IA responsable en pipelines de desarrollo',
                'description'      => 'Guía práctica para integrar principios de IA responsable en el ciclo de vida del desarrollo de software: desde el diseño hasta el despliegue.',
                'prompt_content'   => <<<'EOT'
Actúa como un ingeniero de software senior especializado en IA responsable y MLOps ético. Tu objetivo es ayudarme a integrar principios de IA responsable en mi pipeline de desarrollo, de forma práctica y sin burocracia innecesaria.

**Punto de partida**

Primero, necesito que diagnostiques mi situación actual. Haré una descripción de mi stack tecnológico y el tipo de modelos de IA que utilizamos, y tú deberás identificar los puntos críticos donde la ética y la responsabilidad deben ser incorporadas.

Describe cómo tu equipo actualmente:
- Selecciona y preprocesa los datos de entrenamiento
- Evalúa y valida los modelos antes del despliegue
- Monitorea el comportamiento de los modelos en producción
- Gestiona el ciclo de vida de los modelos (versioning, rollback, deprecación)

**Framework de IA responsable para desarrolladores**

Basándote en mi contexto, ayúdame a construir un checklist de IA responsable adaptado a mi pipeline, organizado en estas etapas:

**Etapa 1: Diseño y definición del problema**
- ¿El problema que resuelve la IA justifica éticamente su uso?
- ¿Existen alternativas más simples y transparentes que funcionen igual de bien?
- ¿Se ha identificado quiénes podrían verse perjudicados por el sistema?
- ¿El equipo incluye perspectivas diversas en el diseño?

**Etapa 2: Recopilación y preparación de datos**
- Lineage de datos: ¿De dónde provienen los datos y con qué consentimiento fueron recopilados?
- Análisis de sesgos: ¿Cómo se detecta y mitiga el sesgo en los datos de entrenamiento?
- Manejo de datos sensibles: ¿Qué protocolos existen para PII, datos de salud, datos financieros?

**Etapa 3: Entrenamiento y evaluación del modelo**
- Métricas de equidad: ¿Se mide el rendimiento por subgrupos demográficos, no solo en promedio?
- Explicabilidad: ¿Puedes explicar por qué el modelo toma una decisión específica?
- Pruebas de adversarial robustness: ¿El modelo es resistente a inputs maliciosos?

**Etapa 4: Despliegue y gobernanza**
- Human-in-the-loop: ¿En qué decisiones siempre debe intervenir un humano?
- Kill switch: ¿Existe un mecanismo para detener el modelo si se detecta comportamiento dañino?
- Auditoría y logs: ¿Se registran las predicciones del modelo para auditorías futuras?

**Etapa 5: Monitoreo continuo**
- Detección de drift: ¿Cómo identificas cuando el modelo empieza a degradarse éticamente?
- Mecanismo de reporte: ¿Cómo pueden los usuarios afectados reportar decisiones injustas del modelo?
- Ciclo de revisión: ¿Con qué frecuencia se revisa el modelo desde una perspectiva ética?

**Entregable final**

Genera tres artefactos para mi equipo:
1. Un checklist de responsible AI en formato Markdown listo para añadir a mi repositorio como RESPONSIBLE_AI.md
2. Una plantilla de "Model Card" para documentar cada modelo que desplegamos
3. Un conjunto de pruebas de equidad básicas que pueda añadir a mi suite de CI/CD

El resultado debe ser práctico, opinionado y adaptado al contexto de un equipo de desarrollo que trabaja con agilidad, no una lista burocrática imposible de seguir.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Integrar principios de IA responsable en el ciclo de vida del desarrollo de modelos y productos con IA',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño ético de experiencias de usuario con IA',
                'description'      => 'Aprende a diseñar interfaces y flujos de IA que sean transparentes, accesibles y respeten la autonomía del usuario sin recurrir a dark patterns.',
                'prompt_content'   => <<<'EOT'
Eres un experto en diseño de experiencia de usuario (UX) especializado en ética del diseño e interacción humano-máquina con sistemas de IA. Tu misión es guiarme para crear experiencias de IA que sean genuinamente útiles, transparentes y respetuosas con el usuario.

**Situación de diseño**

Comparte conmigo el producto o feature de IA que estás diseñando: ¿Qué hace la IA en esta experiencia? ¿Quién es el usuario objetivo? ¿Qué decisiones toma la IA en nombre del usuario o qué tipo de contenido genera?

Con ese contexto, realizaremos un análisis ético del diseño en seis dimensiones.

**Dimensión 1: Transparencia e identificación de la IA**

Una de las responsabilidades más importantes del diseñador es que el usuario sepa cuándo está interactuando con un sistema de IA. Evalúa:
- ¿Los usuarios saben claramente que están interactuando con IA y no con un humano?
- ¿El diseño distingue visualmente el contenido generado por IA del contenido humano?
- ¿Se explica en lenguaje simple qué hace la IA y qué datos usa para hacerlo?

**Dimensión 2: Control y autonomía del usuario**

El usuario siempre debe sentirse en control. Analiza:
- ¿Puede el usuario deshacer o corregir fácilmente una decisión tomada por la IA?
- ¿Existe una opción clara para desactivar las funciones de IA o usar una versión manual?
- ¿El diseño evita "lock-in" donde el usuario queda atrapado en flujos automáticos?

**Dimensión 3: Evitar dark patterns en IA**

Los dark patterns con IA son especialmente peligrosos porque pueden ser invisibles. Revisa:
- ¿El diseño utiliza la personalización de IA para manipular emociones o crear dependencia artificial?
- ¿Las notificaciones o recomendaciones están diseñadas para el beneficio del usuario o para métricas de engagement?
- ¿Se utilizan técnicas de "sludge" (fricción artificial) para disuadir al usuario de cambiar configuraciones de IA?

**Dimensión 4: Accesibilidad e inclusión**

La IA ética debe funcionar para todos. Verifica:
- ¿Los modelos de IA han sido probados con grupos de usuarios diversos (edad, idioma, capacidades)?
- ¿El diseño compensa posibles errores de la IA para usuarios vulnerables (adultos mayores, usuarios con baja alfabetización digital)?
- ¿Las explicaciones de la IA son comprensibles para usuarios sin conocimientos técnicos?

**Dimensión 5: Gestión de errores y confianza calibrada**

La IA comete errores. El diseño debe preparar al usuario para ello:
- ¿Los mensajes de error de la IA son honestos sobre las limitaciones del sistema?
- ¿El diseño evita sobrevender las capacidades de la IA o crear confianza excesiva?
- ¿Existe un mecanismo fácil para reportar cuando la IA se equivoca?

**Dimensión 6: Privacidad by design**

- ¿El flujo de usuario hace visible qué datos se recopilan y por qué?
- ¿Los usuarios pueden acceder, exportar o borrar los datos que usa la IA para personalizarles?
- ¿El diseño minimiza la recopilación de datos al mínimo necesario?

**Entregables del diseñador**

Con base en el análisis, genera:
1. Un inventario de problemas éticos encontrados, ordenados por severidad
2. Propuestas de rediseño concretas para los tres problemas más graves, con descripción del flujo mejorado
3. Un conjunto de principios de diseño de IA responsable adaptados a mi producto específico
4. Cinco heurísticas de evaluación ética que pueda usar en cada revisión de diseño futura

El tono debe ser constructivo y orientado a soluciones, no alarmista. El objetivo es ayudarme a crear productos de IA de los que pueda estar orgulloso.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Evaluar y mejorar el diseño de experiencias de IA para que sean éticas, transparentes y centradas en el usuario',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Uso ético de IA en procesos de ventas y CRM',
                'description'      => 'Aplica IA en tus ventas de forma responsable: detecta límites éticos en la personalización, el seguimiento y la automatización de la relación con el cliente.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor especializado en ventas éticas y uso responsable de la IA en procesos comerciales. Ayúdame a revisar cómo utilizo la IA en mi proceso de ventas y CRM para asegurarme de que estoy construyendo relaciones de confianza genuinas con mis clientes, no explotando sus datos o vulnerabilidades.

**Contexto de mi proceso de ventas**

Responde primero las siguientes preguntas para que pueda contextualizar mejor mi análisis:
- ¿En qué etapas del embudo de ventas usas IA actualmente? (prospección, calificación, nurturing, cierre, upselling)
- ¿Qué tipo de datos de clientes utilizas para entrenar o alimentar tus modelos de IA?
- ¿Tus clientes saben que utilizas IA en el proceso de venta?
- ¿Cuál es el ticket promedio o complejidad del ciclo de venta?

**Análisis ético de mi stack de ventas con IA**

Una vez tenga mi contexto, evalúa estas áreas críticas:

**Área 1: Transparencia con el prospecto**
Los prospectos tienen derecho a saber cuándo están siendo analizados o contactados por sistemas de IA. Evalúa si mi proceso:
- Identifica claramente los emails automatizados o mensajes de seguimiento generados por IA
- Informa a los prospectos sobre el scoring o calificación automática que hace la IA sobre ellos
- Ofrece una vía clara para hablar con un humano cuando el prospecto lo solicita

**Área 2: Calidad de los datos de prospectos**
La IA de ventas es tan ética como los datos que la alimentan. Revisa:
- ¿Los datos de enriquecimiento de contactos provienen de fuentes con consentimiento adecuado?
- ¿Se utilizan datos de comportamiento en el sitio web sin consentimiento explícito para hacer scoring?
- ¿El CRM retiene datos de contactos que rechazaron ser contactados?

**Área 3: Hiperpersonalización vs. manipulación**
Existe una línea fina entre la personalización útil y la manipulación psicológica. Analiza:
- ¿La IA utiliza señales de vulnerabilidad (pérdida de empleo, crisis empresarial) para personalizar mensajes de urgencia?
- ¿Los modelos de precios dinámicos de IA discriminan por capacidad de pago estimada?
- ¿Los seguimientos automatizados respetan el "no" del prospecto o lo ignoran?

**Área 4: Equidad en el proceso de ventas**
- ¿Los leads se distribuyen de forma equitativa entre el equipo de ventas, o la IA favorece a ciertos vendedores de formas injustas?
- ¿El scoring de la IA discrimina leads por datos demográficos en lugar de intención real de compra?
- ¿Los objetivos de ventas impulsados por IA crean presión que lleva a prácticas de venta poco éticas?

**Área 5: Autonomía del cliente durante el ciclo de venta**
- ¿El proceso de ventas facilita que el cliente tome una decisión informada, o la IA está diseñada para minimizar el tiempo de reflexión?
- ¿Se da al cliente toda la información relevante, incluyendo las limitaciones del producto?
- ¿Las técnicas de cierre automatizadas respetan el ritmo de decisión del cliente?

**Plan de acción ético**

Basándote en el análisis, entrega:
1. Un semáforo ético de mi proceso de ventas (verde, amarillo, rojo por área)
2. Las tres mejoras más urgentes con instrucciones específicas de implementación
3. Un script modelo de apertura de conversación de ventas que sea transparente sobre el uso de IA
4. Una política de uso de datos de clientes en ventas que pueda compartir con mi equipo
5. Tres KPIs de ventas responsables que equilibren resultados con ética del cliente

El objetivo no es frenar las ventas, sino construir un proceso comercial que genere confianza duradera y reduzca el churn a largo plazo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Revisar y mejorar el uso de IA en procesos de ventas para garantizar prácticas comerciales éticas y transparentes',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Framework de gobernanza de IA para productos digitales',
                'description'      => 'Diseña un sistema de gobernanza de IA para tu producto que equilibre la innovación con la responsabilidad, el cumplimiento normativo y la confianza del usuario.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gobernanza de IA y gestión de productos digitales responsables. Tu misión es ayudarme a diseñar e implementar un framework de gobernanza de IA adaptado al tamaño y madurez de mi organización.

**Diagnóstico inicial**

Para comenzar, necesito que me hagas estas preguntas clave:
- ¿Cuántos productos o features con IA tiene tu empresa actualmente?
- ¿Cuál es el tamaño del equipo de producto y qué roles existen relacionados con IA?
- ¿Operáis en sectores regulados (salud, finanzas, educación) o con usuarios vulnerables?
- ¿Habéis tenido ya incidentes relacionados con la IA (sesgo, privacidad, errors de modelo)?
- ¿Qué frameworks normativos os aplican? (EU AI Act, GDPR, sector específico)

**Pilares del framework de gobernanza**

Con base en tu situación, construiré un framework personalizado sobre estos seis pilares:

**Pilar 1: Registro y clasificación de sistemas de IA**
Todo sistema de IA debe estar inventariado y clasificado por nivel de riesgo. El framework debe incluir:
- Un proceso de registro para cada nuevo sistema de IA antes de su despliegue
- Una taxonomía de riesgo adaptada al EU AI Act: prohibido, alto riesgo, riesgo limitado, mínimo riesgo
- Un propietario claro (AI Owner) para cada sistema con responsabilidades definidas

**Pilar 2: Evaluación de impacto antes del despliegue**
- Una plantilla de AI Impact Assessment obligatoria para features de IA de alto riesgo
- Criterios de go/no-go ético antes del lanzamiento
- Proceso de revisión por pares que incluya perspectivas de privacidad, legal y diversidad

**Pilar 3: Monitoreo y alertas en producción**
- Qué métricas de equidad y comportamiento deben monitorearse continuamente
- Umbrales de alerta que activen una revisión humana urgente
- Proceso de respuesta a incidentes de IA (qué hacer en las primeras 24, 72 horas)

**Pilar 4: Participación de stakeholders**
- Cómo involucrar a usuarios finales en el diseño y evaluación de sistemas de IA
- Mecanismo de feedback y reclamaciones accesible para usuarios afectados
- Revisiones periódicas con el equipo legal, de privacidad y liderazgo

**Pilar 5: Formación y cultura responsable**
- Programa de formación obligatoria en IA responsable para el equipo de producto
- Cómo crear una cultura donde cualquier miembro del equipo pueda "alzar la mano" sobre un riesgo ético sin consecuencias
- Recursos y comunidades de práctica para mantenerse actualizado

**Pilar 6: Documentación y auditoría**
- Qué documentación debe mantenerse para cada sistema de IA
- Con qué frecuencia realizar auditorías internas vs. externas
- Cómo prepararse para una auditoría regulatoria

**Entregables**

Genera los siguientes artefactos listos para usar en mi organización:
1. Un framework de gobernanza de IA en formato de documento ejecutivo (máximo 2 páginas) para presentar al CEO/board
2. Una plantilla de AI Impact Assessment en formato de tabla
3. Un RACI de gobernanza de IA: quién es responsable, rinde cuentas, consulta e informa en cada decisión clave
4. Un roadmap de implementación de 6 meses, adaptado al tamaño de mi equipo
5. Tres ejemplos de buenas prácticas de gobernanza de IA de empresas reales que pueda usar como benchmarks

El framework debe ser pragmático, escalable y no crear una burocracia que paralice la innovación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar un sistema de gobernanza de IA adaptado a la organización para garantizar el desarrollo y despliegue responsable de productos con IA',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'IA responsable en selección y gestión del talento',
                'description'      => 'Implementa IA en RRHH de forma ética: detecta y mitiga sesgos en selección, evaluación del rendimiento y gestión del talento con inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Eres un experto en recursos humanos y ética de la IA aplicada a la gestión del talento. Tu misión es ayudarme a usar la IA en procesos de RRHH de forma que sea justa, transparente y que cumpla con la normativa vigente, especialmente en materia de no discriminación.

**Contexto de mis procesos de RRHH con IA**

Para comenzar el análisis, necesito que me describas:
- ¿En qué procesos de RRHH usas IA actualmente? (cribado de CVs, entrevistas automatizadas, scoring de candidatos, evaluación del rendimiento, planificación de sucesión, etc.)
- ¿Qué herramientas de IA utilizas? (ATS con IA, plataformas de video-entrevista con análisis de IA, etc.)
- ¿Los candidatos y empleados saben que la IA participa en las decisiones sobre ellos?
- ¿Has tenido situaciones donde la IA haya producido resultados que parecían injustos?

**Auditoría de IA responsable en RRHH**

Con tu contexto, analizaré tus procesos en estas dimensiones críticas:

**Dimensión 1: Sesgo en la selección de candidatos**
El sesgo algorítmico en RRHH puede reproducir décadas de discriminación. Evalúa:
- ¿Los modelos de cribado han sido entrenados con datos históricos que reflejan sesgos de contratación pasados?
- ¿Se mide el índice de selección adversa por género, edad, etnia u otras características protegidas?
- ¿Las palabras clave del sistema ATS favorecen candidatos de ciertos perfiles educativos o geográficos?
- ¿Las herramientas de análisis de video-entrevistas han sido validadas en poblaciones diversas?

**Dimensión 2: Transparencia con candidatos y empleados**
Las personas tienen derecho a saber cómo la IA influye en decisiones sobre su carrera:
- ¿Los candidatos son informados de que su CV o entrevista será procesado por IA?
- ¿Los empleados saben qué datos se analizan con IA en la evaluación de su rendimiento?
- ¿Existe un proceso para que candidatos o empleados pidan una revisión humana de decisiones tomadas con IA?

**Dimensión 3: Evaluación del rendimiento con IA**
La IA en la evaluación del rendimiento puede ser especialmente sensible:
- ¿Los sistemas de monitoreo de empleados con IA respetan la privacidad y la dignidad laboral?
- ¿Las métricas de rendimiento capturadas por IA reflejan la totalidad del valor del empleado o solo indicadores cuantitativos fáciles de medir?
- ¿Los objetivos generados o sugeridos por IA son alcanzables y equitativos entre empleados de diferentes contextos?

**Dimensión 4: Cumplimiento normativo**
- ¿Tu uso de IA en RRHH cumple con el RGPD (en Europa) y la normativa laboral aplicable?
- ¿El EU AI Act clasifica alguno de tus sistemas como de "alto riesgo" en RRHH? (Sí, los ATS con IA y sistemas de gestión del rendimiento están incluidos)
- ¿Tienes un Delegado de Protección de Datos que haya revisado el uso de IA en RRHH?

**Dimensión 5: Impacto en la cultura organizacional**
- ¿El uso de IA en RRHH genera desconfianza o ansiedad entre los empleados?
- ¿La IA está reemplazando conversaciones humanas importantes (feedback, desarrollo profesional) o las está complementando?

**Plan de IA responsable en RRHH**

Genera estos entregables:
1. Un informe de riesgo ético de mis procesos de RRHH con IA, clasificado por severidad
2. Una política de uso de IA en RRHH que pueda comunicar a candidatos y empleados
3. Un protocolo de auditoría de sesgo semestral para los sistemas de IA en selección
4. Una plantilla de "carta de derechos del candidato/empleado" respecto a la IA
5. Recomendaciones sobre qué decisiones de RRHH NUNCA deben delegarse completamente a la IA

El objetivo es usar la IA para hacer RRHH más eficiente y justo, no para reducir la responsabilidad humana en decisiones que afectan profundamente la vida de las personas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Auditar y mejorar el uso de IA en procesos de selección y gestión del talento para garantizar equidad y cumplimiento normativo',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Transparencia y explicabilidad en modelos de IA financiera',
                'description'      => 'Implementa estándares de explicabilidad en los modelos de IA que uses en finanzas: scoring de crédito, detección de fraude o planificación financiera automatizada.',
                'prompt_content'   => <<<'EOT'
Eres un experto en finanzas cuantitativas, IA explicable (XAI) y cumplimiento normativo financiero. Tu misión es ayudarme a implementar estándares de transparencia y explicabilidad en los modelos de IA que utilizo en mis procesos financieros.

**Contexto de mis modelos de IA financiera**

Antes de comenzar, necesito que me describas:
- ¿Qué tipo de modelos de IA utilizas en tus procesos financieros? (scoring de crédito, detección de fraude, robo-advisory, forecasting, etc.)
- ¿Quiénes son los usuarios o clientes afectados por las decisiones de estos modelos?
- ¿Bajo qué marco regulatorio operas? (Banco de España, BCE, SEC, MiFID II, etc.)
- ¿Has recibido alguna consulta regulatoria o queja de cliente relacionada con decisiones de modelos de IA?

**Framework de explicabilidad para IA financiera**

Con tu contexto, te ayudaré a implementar explicabilidad en tres niveles:

**Nivel 1: Explicabilidad técnica (para el equipo de data science)**
Los modelos de IA financiera deben poder ser auditados internamente. Evalúa:
- ¿Qué técnicas de XAI utilizas actualmente? (SHAP, LIME, counterfactual explanations, attention maps)
- ¿Tienes documentación de las variables más influyentes en cada modelo y su dirección de efecto?
- ¿Puedes detectar cuándo un modelo está usando proxies de características protegidas (código postal como proxy de raza, por ejemplo)?
- ¿Cómo validas que el modelo no está aprendiendo correlaciones espurias del período de entrenamiento?

**Nivel 2: Explicabilidad regulatoria (para auditores y supervisores)**
Los reguladores financieros exigen cada vez más explicaciones de los modelos de IA:
- ¿Puedes generar un informe de modelo que cumpla con los requisitos del BCE para modelos internos?
- ¿Tu scoring de crédito puede explicar en términos comprensibles por qué se denegó un préstamo? (Requerimiento del RGPD y normativa de crédito)
- ¿Tienes un proceso de validación independiente de los modelos de IA?
- ¿Documentas el "model risk" de cada sistema de IA según las guías EBA/BCE?

**Nivel 3: Explicabilidad al cliente (para los usuarios finales)**
El cliente tiene derecho a entender las decisiones que le afectan:
- ¿Puedes explicar en menos de tres frases simples por qué la IA tomó una decisión sobre un cliente específico?
- ¿Tienes un proceso para que el cliente solicite una revisión humana de una decisión de IA?
- ¿Las comunicaciones al cliente sobre decisiones de IA están escritas en lenguaje claro y sin jerga técnica?

**Casos de uso específicos**

Para cada uno de mis modelos de IA, ayúdame a:

*Scoring de crédito:*
- Identificar las cinco variables más importantes y su impacto esperado en el score
- Diseñar una carta de denegación que explique las razones principales en lenguaje simple
- Crear un protocolo de contestación cuando el cliente impugna la decisión

*Detección de fraude:*
- Establecer umbrales de score con diferentes niveles de intervención humana
- Documentar los falsos positivos y su impacto en clientes legítimos
- Diseñar un proceso de revisión expedita para transacciones bloqueadas incorrectamente

*Robo-advisory y planificación financiera:*
- Explicar las recomendaciones de cartera en términos de objetivos del cliente, no de parámetros técnicos
- Documentar los escenarios de stress en los que las recomendaciones podrían fallar
- Establecer límites claros de lo que la IA puede y no puede recomendar sin supervisión humana

**Entregables**

Genera los siguientes artefactos:
1. Una plantilla de "Model Card" específica para modelos financieros con los campos requeridos por la EBA
2. Un protocolo de explicación al cliente en tres pasos para decisiones de IA de alto impacto
3. Un dashboard de monitoreo de equidad para mis modelos con las métricas clave y umbrales de alerta
4. Una checklist de auditoría de explicabilidad que mi equipo pueda ejecutar trimestralmente

La explicabilidad no es un obstáculo para la innovación: es lo que hace que los modelos de IA financiera sean sostenibles a largo plazo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Implementar estándares de explicabilidad y transparencia en modelos de IA utilizados en procesos financieros y bancarios',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal y compliance para el uso de IA en empresas',
                'description'      => 'Analiza el marco regulatorio aplicable al uso de IA en tu organización: EU AI Act, RGPD, normativa sectorial y responsabilidad civil por decisiones automatizadas.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho tecnológico, privacidad y regulación de inteligencia artificial. Tu misión es ayudarme a entender el marco legal aplicable al uso de IA en mi organización y diseñar un programa de compliance que sea práctico y proporcional al tamaño de mi empresa.

**Diagnóstico legal inicial**

Para comenzar, necesito conocer:
- ¿En qué país o jurisdicción opera tu empresa? ¿Tenéis clientes en la UE?
- ¿En qué sector operáis? (Salud, finanzas, RRHH, educación, servicios generales)
- ¿Qué sistemas de IA utilizáis actualmente? (Describe brevemente su función)
- ¿Tomáis decisiones automatizadas que afecten significativamente a personas físicas?
- ¿Habéis realizado algún análisis legal previo de vuestro uso de IA?

**Análisis del marco regulatorio**

Con tu contexto, analizaré la regulación aplicable en estas áreas:

**Área 1: EU AI Act (Reglamento de IA de la Unión Europea)**
El EU AI Act es la regulación más comprehensiva del mundo en IA. Para tu empresa, determinaré:
- ¿Alguno de tus sistemas de IA entra en la categoría de "prohibidos"? (IA de scoring social, manipulación subliminal, explotación de vulnerabilidades, reconocimiento de emociones en el trabajo)
- ¿Tienes sistemas de "alto riesgo" que requieren cumplimiento estricto? (Sistemas en RRHH, educación, infraestructuras críticas, crédito, justicia)
- ¿Qué obligaciones específicas te aplican? (Documentación técnica, registro de sistemas, supervisión humana, transparencia)
- ¿Cuáles son las multas y sanciones aplicables por incumplimiento?

**Área 2: RGPD y decisiones automatizadas**
El RGPD ya regula la IA desde 2018. Evalúa tu cumplimiento en:
- Artículo 22 RGPD: ¿Tomas decisiones automatizadas con efectos jurídicos significativos? ¿Tienes base legal para ello?
- Artículo 13/14 RGPD: ¿Informas a los interesados sobre el uso de sus datos para IA y toma de decisiones automatizadas?
- ¿Has realizado una Evaluación de Impacto en la Protección de Datos (EIPD) para los sistemas de IA que procesan datos personales?
- ¿Tienes un DPO (Delegado de Protección de Datos) designado si es obligatorio?

**Área 3: Responsabilidad civil y contractual**
- ¿Quién es responsable cuando una decisión de IA causa daño a un tercero? ¿Tu empresa, el proveedor del modelo, o el desarrollador?
- ¿Tus contratos con proveedores de IA incluyen cláusulas de responsabilidad, auditoría y portabilidad de datos?
- ¿Tienes cobertura de seguro para riesgos derivados de la IA (errores de modelo, sesgos, ciberataques)?

**Área 4: Normativa sectorial**
Dependiendo de tu sector, pueden aplicar normas adicionales:
- Salud: MDR, normativa de producto sanitario con IA
- Finanzas: Directrices EBA/ESMA sobre IA, MiFID II
- RRHH: Legislación laboral sobre vigilancia y decisiones automatizadas
- Publicidad: Código de conducta de IA en publicidad, normativa sobre deepfakes

**Plan de compliance de IA**

Genera los siguientes entregables:
1. Un mapa de riesgo regulatorio para mis sistemas de IA actuales, clasificando cada uno por nivel de riesgo bajo el EU AI Act
2. Una checklist de compliance prioritaria con las 15 acciones más urgentes
3. Una plantilla de cláusulas contractuales de IA para incluir en contratos con proveedores y clientes
4. Un modelo de aviso de transparencia de IA para comunicar a usuarios y empleados
5. Un roadmap de compliance de 12 meses con hitos concretos y responsables

Recuerda que el compliance de IA no es un proyecto puntual sino un proceso continuo. El objetivo es crear una capacidad organizacional permanente para gestionar el riesgo legal de la IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Analizar el marco legal aplicable al uso de IA en la empresa y diseñar un programa de compliance adaptado a la organización',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente ética con IA: límites y supervisión humana',
                'description'      => 'Define los límites éticos del uso de IA en atención al cliente: qué puede automatizar la IA, cuándo debe intervenir un humano y cómo gestionar situaciones sensibles.',
                'prompt_content'   => <<<'EOT'
Eres un experto en atención al cliente, experiencia de usuario y uso ético de la IA en contact centers y sistemas de soporte. Tu misión es ayudarme a diseñar un modelo de atención al cliente con IA que sea eficiente pero que no sacrifique la dignidad, el bienestar ni los derechos del cliente.

**Contexto de mi atención al cliente**

Para comenzar, cuéntame:
- ¿Qué canales de atención al cliente utilizas actualmente? (Chat, email, teléfono, redes sociales, app)
- ¿Qué parte del proceso está ya automatizada con IA?
- ¿Qué tipo de consultas o problemas gestionas? ¿Hay situaciones sensibles frecuentes? (clientes en dificultades económicas, reclamaciones complejas, emergencias)
- ¿Qué herramientas de IA usas actualmente en el contact center?

**Diseño ético del modelo de atención con IA**

Con tu contexto, te ayudaré a definir tu modelo en estos bloques:

**Bloque 1: Qué puede y no puede hacer la IA**
Define con precisión los límites de automatización:

Lo que la IA PUEDE gestionar de forma autónoma:
- Consultas informativas estándar (horarios, precios, políticas)
- Seguimiento de pedidos o solicitudes con información objetiva
- Resolución de incidencias frecuentes con soluciones predefinidas y conocidas
- Primera respuesta de triaje para cualificar y enrutar correctamente

Lo que la IA NUNCA debe gestionar sin supervisión humana:
- Clientes en situación de crisis emocional, vulnerabilidad económica o emergencia
- Reclamaciones con implicaciones legales o económicas significativas
- Situaciones donde el cliente ha expresado frustración extrema o ha escalado
- Decisiones que afectan derechos del consumidor (cancelaciones, devoluciones complejas)

**Bloque 2: Protocolos de escalado humano**
La escalada humana debe ser rápida, sin fricciones y sin vergüenza para el cliente. Define:
- Señales automáticas de escalada: qué palabras clave, emociones detectadas o patrones de conversación deben activar automáticamente la transferencia a un agente
- Escalada por solicitud del cliente: el cliente siempre debe poder pedir un humano en menos de dos pasos y sin justificación
- Handoff de contexto: cuando un humano recoge la conversación, debe tener el historial completo sin pedir al cliente que repita

**Bloque 3: Transparencia con el cliente**
- ¿El cliente sabe siempre si está hablando con IA o con un humano?
- ¿El bot de IA se identifica claramente como tal sin simular ser humano?
- ¿Existe información accesible sobre cómo funciona la IA en el servicio de atención?

**Bloque 4: Gestión de situaciones sensibles**
Define protocolos específicos para:
- Clientes con dificultades económicas que solicitan aplazamientos o cancelaciones
- Clientes que expresan ansiedad, angustia o desesperación
- Clientes mayores o con barreras digitales que necesitan más asistencia
- Clientes que reportan situaciones de urgencia o emergencia

**Bloque 5: Calidad y mejora continua**
- ¿Cómo mides la satisfacción del cliente en interacciones con IA vs. humanos?
- ¿Qué mecanismo de feedback existe para que los clientes reporten malas experiencias con la IA?
- ¿Con qué frecuencia se revisan y actualizan los flujos de IA?

**Entregables**

Genera estos artefactos para mi equipo:
1. Una política de uso ético de IA en atención al cliente (1 página) para comunicar externamente
2. Un árbol de decisión de escalado: cuándo la IA debe transferir automáticamente a un humano
3. Una guía de mejores prácticas para que los agentes humanos gestionen el handoff desde la IA
4. Cinco métricas de calidad ética del servicio con IA que midan algo más que eficiencia
5. Un protocolo de gestión de crisis en el contact center (cuando la IA falla masivamente)

La atención al cliente con IA ética no significa menos IA: significa IA en el lugar correcto y humanos donde realmente importan.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar límites éticos claros para el uso de IA en atención al cliente, definiendo cuándo debe intervenir un agente humano',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Principios de IA responsable para freelancers y consultores',
                'description'      => 'Desarrolla tu posicionamiento como consultor de IA responsable: qué compromisos éticos asumir, cómo comunicarlos a clientes y cómo estructurar proyectos de IA de forma responsable.',
                'prompt_content'   => <<<'EOT'
Eres un experto en consultoría tecnológica, ética de la IA y construcción de marca profesional para freelancers. Tu misión es ayudarme a desarrollar mi propuesta de valor como consultor o freelancer que trabaja con IA de forma responsable, y a construir un sistema de trabajo que me permita entregar proyectos de IA con integridad.

**Contexto de mi perfil freelance**

Para personalizar el análisis, necesito saber:
- ¿Qué tipo de proyectos de IA desarrollas como freelancer? (Automatización, chatbots, análisis de datos, desarrollo de modelos, consultoría estratégica, etc.)
- ¿En qué sectores trabajan tus clientes principalmente?
- ¿Cuál es el rango típico de tus proyectos? (Duración, presupuesto)
- ¿Has tenido ya situaciones donde el cliente pedía algo éticamente cuestionable con IA?
- ¿Cómo te diferencias actualmente en el mercado?

**Framework de consultoría de IA responsable**

Con tu contexto, construiré tu framework de trabajo ético en estos bloques:

**Bloque 1: Tu posicionamiento de marca responsable**
La responsabilidad en IA puede ser un diferenciador competitivo real en el mercado. Define:
- Tu "manifiesto de IA responsable" personal: tres a cinco compromisos no negociables
- Cómo comunicar tu posicionamiento en tu perfil de LinkedIn, portfolio y propuestas
- Certificaciones o formaciones en IA ética que refuercen tu credibilidad
- Casos de uso donde tu enfoque responsable generó mejores resultados para el cliente

**Bloque 2: Due diligence antes de aceptar un proyecto**
Como freelancer, tú eliges a tus clientes. Define un proceso de evaluación ética:
- Criterios de aceptación/rechazo de proyectos: ¿Qué proyectos de IA nunca aceptarías?
- Preguntas de due diligence ética que haces a cada cliente antes de firmar
- Señales de alerta (red flags) en briefings de proyectos de IA
- Cómo manejar la conversación cuando un cliente propone algo éticamente cuestionable

**Bloque 3: Cláusulas de IA responsable en tus contratos**
Tu contrato debe protegerte y proteger a los usuarios finales de tus proyectos:
- Cláusula de uso aceptable: para qué puede y no puede usar el cliente el sistema de IA que desarrolles
- Cláusula de no discriminación: el cliente no puede usar el sistema para discriminar
- Cláusula de transparencia: el cliente debe informar a los usuarios finales del uso de IA
- Cláusula de tu derecho a denegar modificaciones: si el cliente quiere usar el sistema de formas no éticas, puedes rescindir

**Bloque 4: Proceso de trabajo responsable**
Cómo integrar la ética en cada fase de tu metodología de trabajo:
- Fase de discovery: qué preguntas éticas debes hacer al inicio de cada proyecto
- Fase de diseño: cómo incorporar principios de privacidad by design y fairness by design
- Fase de desarrollo: qué pruebas de sesgo y explicabilidad incluyes en tu proceso
- Fase de entrega: qué documentación de responsabilidad entregas con cada proyecto
- Fase de post-proyecto: cómo manejas el seguimiento y la rendición de cuentas

**Bloque 5: Gestión de conflictos éticos con clientes**
- Cómo plantear objeciones éticas al cliente de forma constructiva y sin perder el proyecto
- Cuándo y cómo negarte a continuar un proyecto si descubres un problema ético en medio del trabajo
- Cómo proteger tu reputación si un cliente usa tu trabajo de forma no ética después de la entrega

**Entregables**

Genera estos recursos listos para usar en mi práctica freelance:
1. Mi manifiesto de IA responsable (formato para LinkedIn o website, 150-200 palabras)
2. Un cuestionario de due diligence ética de 10 preguntas para nuevos proyectos de IA
3. Tres cláusulas de IA responsable listas para insertar en mis contratos
4. Una plantilla de documentación de responsabilidad para entregar con cada proyecto
5. Un guión de conversación para cuando un cliente me pide algo éticamente cuestionable

Ser un consultor de IA responsable no significa cobrar menos: significa construir una reputación que te dará clientes mejores y proyectos más interesantes a largo plazo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir un framework de trabajo ético como consultor freelance de IA, con posicionamiento, contratos y procesos responsables',
                'vote_score'       => 35,
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
