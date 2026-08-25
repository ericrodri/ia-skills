<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills85Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de influencers micro y nano',
                'description'      => 'Diseña campañas con creadores de 1K-50K seguidores: mayor ROI, menor coste, comunidades más comprometidas y autenticidad que los mega-influencers no pueden ofrecer.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en influencer marketing especializado en estrategias con micro y nano influencers, con experiencia gestionando más de doscientas campañas para marcas de consumo, tecnología, salud y lifestyle. Conoces en detalle las métricas reales de este tipo de campañas y sabes distinguir entre engagement auténtico y métricas infladas.

Necesito diseñar una estrategia de influencer marketing con micro y nano influencers. Guíame a través del proceso completo:

**1. Por qué micro y nano en lugar de mega-influencers**
- Explica las diferencias en las métricas clave: engagement rate (micro: 3-8% vs. mega: 1-2%), coste por impacto real, tasa de conversión y autenticidad percibida por la audiencia.
- Describe los contextos en los que los micro y nano influencers superan a los grandes: nichos específicos, campañas locales, productos de alto valor percibido, lanzamientos de marca nueva y categorías donde la confianza es determinante (salud, finanzas, educación).
- Explica el concepto de audiencia cautiva: por qué los seguidores de un nano influencer tienen una relación personal con el creador que los grandes no pueden replicar.

**2. Definición de la estrategia y objetivos**
- Ayúdame a definir los objetivos de la campaña según la etapa del funnel: awareness (alcance e impresiones), consideración (engagement y tráfico) o conversión (ventas, registros, descargas).
- Explica cómo calcular el presupuesto óptimo para una campaña de micro-influencers: número de creadores necesarios para el alcance objetivo, mix entre producción de contenido y distribución, y comparativa de coste por mil impactos reales vs. publicidad pagada.
- Detalla cómo elegir entre trabajar con muchos nano influencers (1K-10K) o un número menor de micro influencers (10K-50K) según el objetivo y el nicho.

**3. Identificación y selección de creadores**
- Proporciona los criterios de selección más importantes: tasa de engagement real (excluye likes falsos), coherencia de la audiencia con mi target, historial de colaboraciones previas (¿promueve todo o es selectivo?), calidad del contenido, valores alineados con mi marca y geografía de la audiencia.
- Explica las herramientas para encontrar micro y nano influencers: búsqueda manual en hashtags, plataformas como Heepsy, Modash, Upfluence, y la búsqueda de clientes actuales o fans orgánicos de la marca.
- Describe las señales de alerta que indican seguidores falsos o engagement inflado: ratio seguidores/seguidos anómalo, comentarios genéricos, picos inexplicables de crecimiento.

**4. Briefing y gestión de la colaboración**
- Proporciona una plantilla de briefing para micro-influencers que equilibre las directrices de marca con la libertad creativa del creador: qué debe comunicar, qué no puede decir, el tono deseado, los formatos requeridos (stories, reels, post estático) y los plazos.
- Explica la diferencia entre contenido prescrito (guion cerrado) y contenido co-creado y por qué el segundo suele funcionar mejor con audiencias de micro-influencers.
- Describe el proceso de aprobación de contenido: cómo revisar sin matar la autenticidad y cómo manejar un creador que se aleja del briefing.

**5. Contratos, pagos y cumplimiento legal**
- Detalla qué debe incluir el contrato con un micro-influencer: deliverables, plazos, exclusividad (temporal y de categoría), derechos de uso del contenido, obligación de marcar como publicidad (#ad, #publicidad según la ley española) y causas de resolución.
- Explica la regulación española de publicidad encubierta en redes sociales y las sanciones por incumplimiento.

**6. Medición de resultados**
- Define el dashboard de métricas para una campaña de micro-influencers: reach real, engagement rate por post, tráfico generado (UTMs), conversiones atribuidas (códigos de descuento únicos por creador), CPM real y coste por conversión.
- Explica cómo hacer el análisis post-campaña para identificar qué perfiles, formatos y mensajes funcionaron mejor y escalar los que dieron resultado.

**Preguntas iniciales:**
1. ¿Cuál es tu marca y producto, y cuál es tu público objetivo?
2. ¿Cuál es tu presupuesto total para la campaña?
3. ¿Cuál es el objetivo principal: awareness, tráfico o ventas?
4. ¿Has trabajado con influencers anteriormente? ¿Con qué resultados?

Dime los detalles y diseñamos la campaña juntos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar y ejecutar una campaña de marketing con micro y nano influencers',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Machine learning en producción con MLOps',
                'description'      => 'Despliega, monitoriza y actualiza modelos de machine learning en aplicaciones reales: pipelines, drift detection, versionado y estrategias de reentrenamiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ML engineer con experiencia en MLOps llevando modelos de machine learning de notebooks de investigación a sistemas de producción robustos. Has trabajado con scikit-learn, TensorFlow, PyTorch y frameworks de MLOps como MLflow, Kubeflow, Vertex AI y SageMaker.

Necesito desplegar un modelo de machine learning en producción y construir la infraestructura MLOps para mantenerlo. Guíame a través del proceso completo:

**1. La brecha entre el notebook y la producción**
- Explica por qué el 87% de los proyectos de ML nunca llegan a producción: falta de infraestructura, código no reproducible, ausencia de monitorización, dificultad para actualizar modelos y falta de alineación entre data scientists e ingenieros.
- Describe las diferencias entre un modelo que funciona en un notebook y uno que funciona en producción: reproducibilidad del entorno, latencia de inferencia, escalabilidad, mantenimiento del pipeline de datos y gestión de versiones.
- Explica los tres pilares de MLOps: CI/CD para ML (pipelines automatizados de entrenamiento y despliegue), monitorización continua del modelo y gobernanza del modelo.

**2. Pipeline de datos para producción**
- Describe cómo construir un pipeline de datos reproducible: desde la ingesta de datos hasta el feature engineering, con versionado de datos (DVC o similares), validación automática de calidad y detección de anomalías en los datos de entrada.
- Explica cómo gestionar el feature store: centraliza los features para que el entrenamiento y la inferencia usen exactamente las mismas transformaciones.
- Detalla los errores más comunes en el pipeline de datos que degradan el modelo en producción: data leakage, train-serve skew y drift en la distribución de los datos de entrada.

**3. Entrenamiento reproducible y versionado de modelos**
- Explica cómo estructurar el código de entrenamiento para que sea reproducible: gestión de semillas aleatorias, versionado de dependencias, parametrización mediante archivos de configuración y logging de métricas.
- Describe cómo usar MLflow (u otro experiment tracker) para registrar experimentos: parámetros, métricas, artefactos y el modelo final.
- Detalla el proceso de registro y versionado de modelos en el model registry: staging, production y archivado.

**4. Despliegue del modelo**
- Compara las opciones de despliegue según los requisitos de latencia y escala: REST API con FastAPI o Flask, serverless (AWS Lambda, Cloud Functions), batch inference y despliegue en edge.
- Explica cómo hacer un despliegue canary o blue-green para un modelo ML: cómo enrutar un porcentaje del tráfico al nuevo modelo antes del rollout completo.
- Describe la contenedorización del modelo con Docker: Dockerfile para un servicio de inferencia, gestión de dependencias pesadas (CUDA, torch) y optimización del tamaño de la imagen.

**5. Monitorización del modelo en producción**
- Explica los tipos de degradación del modelo que hay que monitorizar: data drift (cambio en la distribución de los inputs), concept drift (cambio en la relación entre inputs y outputs) y model decay (degradación gradual del performance).
- Describe las métricas de monitorización a implementar: distribución de las predicciones, latencia de inferencia, tasa de errores, comparación con un baseline y, cuando sea posible, métricas de negocio.
- Detalla cómo implementar alertas automáticas cuando el modelo se degrada y el proceso de reentrenamiento desencadenado por las alertas.

**6. Reentrenamiento y actualización del modelo**
- Explica las estrategias de reentrenamiento: programado (cada N días), disparado por drift detectado o disparado por degradación de métricas de negocio.
- Describe cómo automatizar el pipeline de reentrenamiento con herramientas como Airflow, Prefect o GitHub Actions.

**Preguntas iniciales:**
1. ¿Cuál es tu modelo (tipo de problema: clasificación, regresión, recomendación) y el framework que usas?
2. ¿En qué infraestructura cloud o on-premise vas a desplegar?
3. ¿Cuáles son los requisitos de latencia y volumen de predicciones?
4. ¿Tienes ya alguna pieza de MLOps implementada o empiezas desde cero?

Dame los detalles y diseñamos la arquitectura MLOps adecuada para tu proyecto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 120,
                'use_case'         => 'Desplegar y mantener un modelo de machine learning en producción con pipelines MLOps',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencias phygital',
                'description'      => 'Integra mundos físico y digital en retail, eventos y espacios públicos para crear experiencias sin fricción que potencien la relación con el cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de experiencias especializado en entornos phygital, con experiencia creando instalaciones para marcas de moda, museos, festivales y espacios de retail que combinan lo físico y lo digital de forma coherente y memorable.

Necesito diseñar una experiencia phygital para mi contexto. Guíame a través del proceso de diseño completo:

**1. Qué es phygital y por qué va más allá de poner pantallas**
- Define el concepto de experiencia phygital y diferéncialo de la mera digitalización de espacios físicos: una pantalla en una tienda no es phygital, sino la integración fluida donde lo digital amplifica lo físico y viceversa.
- Describe los principios de diseño de experiencias phygital: fluidez entre mundos (el usuario no siente el salto), personalización contextual, participación activa, capas de información adicional y continuidad de la experiencia antes, durante y después del espacio físico.
- Explica los contextos donde las experiencias phygital generan más valor: retail de experiencia, museos y espacios culturales, eventos y festivales, espacios de trabajo, gastronomía y salud.

**2. Mapeo del customer journey phygital**
- Describe cómo mapear el journey del usuario en una experiencia phygital: los touchpoints físicos (entrada al espacio, interacción con objetos, personal de atención) y los touchpoints digitales (app, QR, RFID, realidad aumentada, pantallas interactivas) y cómo se entrelazan.
- Explica cómo identificar los momentos de fricción donde el salto entre lo físico y lo digital interrumpe la experiencia y cómo eliminarlos.
- Proporciona una plantilla de customer journey map específica para experiencias phygital con los dos carriles (físico y digital) y los puntos de integración.

**3. Tecnologías habilitadoras y cuándo elegir cada una**
- Describe las principales tecnologías phygital y su caso de uso óptimo: QR (bajo coste, universal), NFC y RFID (sin fricción, toque), realidad aumentada (cámara del móvil), beacons Bluetooth (geolocalización indoor), proyección interactiva (gran formato, instalación artística), pantallas táctiles (participación activa) y gemelos digitales (visualización de datos en tiempo real sobre el espacio físico).
- Explica los criterios de selección tecnológica: coste de instalación y mantenimiento, barrera de adopción del usuario, fiabilidad en el contexto real (interferencias, luz, volumen de personas) y escalabilidad.

**4. Diseño de la experiencia**
- Describe el proceso de ideación de una experiencia phygital: definición del concepto narrativo, diseño de los momentos clave de la experiencia (el "wow moment"), storyboarding del journey y prototipado rápido.
- Explica cómo diseñar la señalización y el onboarding in-situ: el usuario debe entender en segundos cómo interactuar con la experiencia sin leer instrucciones largas.
- Detalla el diseño de la interfaz digital en el contexto físico: legibilidad en distintas condiciones de luz, tamaño de los elementos interactivos para uso en movimiento, tiempos de respuesta que no rompan el ritmo de la experiencia.

**5. Datos y personalización**
- Explica cómo recoger datos de comportamiento en el espacio físico de forma ética: cuáles son las formas de consentimiento adecuadas, qué datos son los más valiosos (tiempo en cada zona, secuencia de interacciones, elementos más tocados) y cómo usarlos para mejorar la experiencia.
- Describe cómo usar los datos para personalizar la experiencia en tiempo real: mostrar contenido diferente según el perfil del visitante o su comportamiento previo en el espacio.

**6. Medición del éxito**
- Define los KPIs de una experiencia phygital: tiempo de permanencia, tasa de interacción con elementos digitales, NPS de la experiencia, conversión (compras, registros, compartición en redes sociales) y retorno a la experiencia.

**Preguntas iniciales:**
1. ¿Cuál es el contexto de la experiencia (retail, evento, museo, espacio de trabajo)?
2. ¿Quién es el usuario objetivo y qué comportamiento quieres generar?
3. ¿Cuál es el presupuesto disponible y el plazo de implementación?
4. ¿Tienes ya alguna tecnología o infraestructura existente en el espacio?

Dame los detalles y diseñamos la experiencia phygital juntos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 90,
                'use_case'         => 'Diseñar una experiencia phygital que integre el mundo físico y digital de forma fluida',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Gestión de cuentas estratégicas (KAM)',
                'description'      => 'Domina el proceso de gestión de cuentas clave: planes de cuenta, expansión de revenue y construcción de relaciones que duran décadas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Key Account Management con más de quince años gestionando cuentas estratégicas en sectores de tecnología B2B, servicios financieros y manufactura. Has gestionado cuentas de más de un millón de euros anuales y has entrenado a equipos de KAMs de hasta veinte personas.

Necesito mejorar mi gestión de cuentas estratégicas. Guíame a través del proceso y las herramientas del KAM profesional:

**1. Qué es la gestión de cuentas clave y por qué es diferente a vender**
- Explica la diferencia fundamental entre un account manager transaccional y un Key Account Manager estratégico: el KAM no gestiona pedidos, gestiona relaciones y crea valor.
- Describe el perfil de una cuenta clave: criterios para designarla como estratégica (revenue actual, potencial de crecimiento, importancia estratégica, referencia de mercado) y por qué tener demasiadas cuentas estratégicas vacía el concepto.
- Explica los tres roles del KAM: arquitecto (diseña la estrategia de la cuenta), director de orquesta (coordina todos los recursos internos al servicio de la cuenta) y socio de negocio (participa activamente en los objetivos del cliente).

**2. El plan de cuenta (Account Plan)**
- Proporciona la estructura completa de un plan de cuenta profesional: análisis de la situación del cliente (negocio, industria, retos estratégicos, competidores del cliente), mapa de stakeholders, análisis de la relación actual (fortalezas y riesgos), objetivos de la cuenta a 12 y 36 meses, iniciativas prioritarias y plan de acción con responsables y fechas.
- Explica cómo hacer un mapa de stakeholders de una cuenta compleja: quiénes son los decisores, los influenciadores, los usuarios y los saboteadores, y cómo gestionar cada perfil.
- Describe cómo construir el mapa de oportunidades de la cuenta: productos o servicios actuales, productos que podrían usar y no usan (cross-sell), incremento del uso de lo que ya tienen (upsell) y nuevas necesidades emergentes.

**3. Revisiones de negocio ejecutivas (EBR)**
- Explica la estructura de una Executive Business Review trimestral o semestral: qué resultados presentar (siempre en términos de negocio del cliente, no de actividad del proveedor), qué información recopilar del cliente sobre sus prioridades del próximo período y cómo co-construir el plan conjunto.
- Describe cómo preparar a los ejecutivos de tu empresa para una EBR con el C-level del cliente: qué decir, qué no decir y cómo manejar los temas incómodos.
- Detalla cómo usar la EBR para proteger la relación cuando hay problemas de servicio o cuando la competencia está activa.

**4. Expansión de revenue en la cuenta**
- Explica las estrategias de expansion revenue en cuentas existentes: penetración de nuevas líneas de negocio del cliente, expansión geográfica dentro de la misma empresa, referidos a otras divisiones o filiales y participación en nuevos proyectos estratégicos del cliente.
- Describe cómo identificar las señales de compra de una cuenta: cambio de dirección, nuevo presupuesto anual, fusión o adquisición, nuevo proyecto estratégico y cambio de interlocutor.
- Detalla cómo gestionar las negociaciones de renovación y upsell sin dañar la relación: cuándo hablar de precio, cómo anclar el valor antes de hablar de coste.

**5. Gestión interna de la cuenta**
- Explica cómo coordinar a los equipos internos (producto, soporte, legal, finanzas) para que la cuenta reciba un servicio coherente y de alta calidad.
- Describe cómo gestionar internamente las expectativas cuando la cuenta pide algo que no está en el roadmap o en los términos del contrato.

**Preguntas iniciales:**
1. ¿Cuántas cuentas estratégicas gestionas y cuál es el revenue anual de la mayor?
2. ¿Cuál es el principal reto que tienes ahora mismo con tus cuentas clave (retención, expansión, acceso al C-level, competencia)?
3. ¿Tienes ya un proceso estructurado de KAM o partes de cero?
4. ¿Cuántos recursos internos tienes para dedicar a cada cuenta?

Dime tu situación y te ayudo a estructurar tu modelo de KAM.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 75,
                'use_case'         => 'Estructurar el proceso de gestión de cuentas estratégicas para maximizar el revenue y la relación',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión del producto en modo crisis',
                'description'      => 'Toma decisiones de producto bajo presión extrema: protocolo de respuesta a bugs críticos, caídas del servicio y situaciones de reputación que requieren acción inmediata.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager senior con experiencia gestionando crisis de producto en empresas digitales de escala: caídas de servicio, bugs críticos con impacto en datos de usuarios, brechas de seguridad y situaciones de reputación negativa. Has gestionado situaciones de guardia que requirieron decisiones en minutos con información incompleta.

Necesito aprender a gestionar crisis de producto de forma efectiva. Guíame a través del proceso y el protocolo de respuesta:

**1. Qué constituye una crisis de producto**
- Define los niveles de severidad de un incidente de producto: P0 (servicio completamente caído o pérdida de datos en curso), P1 (funcionalidad crítica degradada con impacto en un porcentaje significativo de usuarios), P2 (funcionalidad importante afectada con workaround disponible) y P3 (bug con impacto limitado y baja urgencia).
- Explica los tipos más comunes de crisis de producto: caída total del servicio (outage), degradación de rendimiento, bug de datos (corrupción, exposición o pérdida), brecha de seguridad, error de despliegue, y crisis de reputación originada en el producto.
- Describe cómo el PM debe distinguir entre un bug operativo (ownership del equipo de ingeniería) y una crisis que requiere decisiones de producto: cambiar el roadmap, activar comunicación externa, compensar a usuarios o tomar decisiones de negocio bajo presión.

**2. El protocolo de respuesta en los primeros 30 minutos**
- Proporciona un protocolo paso a paso para los primeros 30 minutos de una crisis P0: cómo confirmar el impacto real antes de escalar, a quién notificar primero (on-call engineer, CTO, CEO, soporte), cómo abrir el war room (Slack channel dedicado, videollamada de crisis) y cómo evitar la duplicación de esfuerzos y el caos de comunicación.
- Explica el rol del PM en la crisis: el PM no repara el bug, pero sí toma decisiones de negocio (¿apagar una funcionalidad para proteger el resto?, ¿comunicar proactivamente a los usuarios?), coordina la comunicación externa e interna y gestiona las expectativas del C-level.
- Describe cómo hacer una evaluación rápida del impacto con información incompleta: qué preguntas hacer al equipo técnico, cómo estimar el número de usuarios afectados y cómo evaluar el riesgo reputacional y legal.

**3. Decisiones de producto bajo presión**
- Explica el framework de decisión rápida en crisis: cuándo revertir un despliegue (rollback), cuándo aplicar un hotfix, cuándo desactivar una funcionalidad completa y cuándo activar el modo mantenimiento.
- Describe cómo evaluar el trade-off entre velocidad de respuesta y riesgo de empeorar la situación: las decisiones apresuradas en crisis pueden generar crisis adicionales.
- Detalla cómo documentar las decisiones tomadas durante la crisis en tiempo real: el incident log que luego servirá para el post-mortem.

**4. Comunicación durante la crisis**
- Proporciona plantillas de comunicación para distintas audiencias durante una crisis: status page pública (qué decir y qué no), comunicación interna al equipo, notificación a clientes premium, comunicación a la prensa si hay filtración y actualización periódica cada 30-60 minutos.
- Explica los principios de comunicación en crisis: transparencia sin generar pánico, información concreta sin compromisos que no puedas cumplir y actualización proactiva aunque no haya novedades.

**5. Post-mortem y aprendizaje**
- Describe cómo facilitar un post-mortem blameless: el objetivo es aprender del sistema, no culpar a personas. Formato, participantes, preguntas clave y cómo convertir los aprendizajes en mejoras del producto y los procesos.
- Explica cómo comunicar el post-mortem externamente cuando la crisis ha tenido impacto en los clientes: cuándo publicarlo, qué nivel de detalle compartir y cómo recuperar la confianza.

**Preguntas iniciales:**
1. ¿Qué tipo de crisis has sufrido recientemente o temes más en tu producto?
2. ¿Tienes ya un protocolo de respuesta a incidentes o necesitas construirlo desde cero?
3. ¿Cuál es el tamaño del equipo y cómo está organizada la guardia técnica?
4. ¿Has tenido que comunicar una crisis a tus usuarios? ¿Cómo fue?

Dame el contexto y te ayudo a preparar el protocolo de crisis de tu producto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Preparar y ejecutar el protocolo de respuesta a una crisis de producto digital',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Transformación digital de RRHH',
                'description'      => 'Digitaliza los procesos de RRHH sin perder la parte humana: qué automatizar, qué herramientas elegir y cómo gestionar el cambio interno.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de RRHH con experiencia liderando transformaciones digitales del departamento de personas en empresas de entre 50 y 2000 empleados. Has implementado HRIS, plataformas de selección, herramientas de onboarding digital, sistemas de evaluación de desempeño y plataformas de formación online, y sabes cuándo la tecnología ayuda y cuándo estorba.

Necesito digitalizar los procesos de RRHH de mi empresa. Guíame a través de la estrategia y la implementación:

**1. Diagnóstico: qué digitalizar primero**
- Proporciona un framework de priorización de la digitalización de RRHH según el impacto en la eficiencia y la experiencia del empleado: qué procesos generan más fricción, cuáles consumen más tiempo del equipo de RRHH y cuáles tienen mayor impacto en la satisfacción del empleado.
- Describe los ocho procesos de RRHH que más se benefician de la digitalización: reclutamiento y selección, onboarding, gestión de la jornada y ausencias, evaluación de desempeño, formación y desarrollo, comunicación interna, administración de personal y offboarding.
- Explica qué no debe digitalizarse o debe digitalizarse con mucho cuidado: las conversaciones de feedback difícil, la gestión de conflictos interpersonales y el apoyo emocional a empleados en situaciones delicadas.

**2. El stack tecnológico de RRHH**
- Explica la arquitectura de un stack de RRHH moderno: el HRIS como núcleo central (datos de empleados, organigrama, contratos), más las herramientas especializadas en cada proceso (ATS para selección, LMS para formación, plataforma de feedback y desempeño).
- Compara los principales HRIS del mercado según el tamaño de empresa: soluciones all-in-one (Factorial, Personio, Bamboo HR, Workday) y las ventajas e inconvenientes de cada enfoque.
- Describe los criterios de selección de herramientas de RRHH: integración con el HRIS central, experiencia de usuario del empleado (no solo del RRHH), coste por empleado activo, soporte y curva de aprendizaje.

**3. Digitalización del reclutamiento**
- Explica cómo un ATS (Applicant Tracking System) transforma el proceso de selección: centralización de candidaturas, automatización de comunicaciones, scoring de CVs y colaboración entre los entrevistadores.
- Describe cómo usar la IA para el screening inicial sin introducir sesgos: qué criterios son seguros para automatizar y cuáles deben seguir siendo revisados por una persona.
- Detalla cómo crear una experiencia de candidato digital que refleje los valores de la empresa.

**4. Onboarding digital**
- Describe los elementos de un onboarding digital efectivo: preonboarding (antes del primer día), firma electrónica de documentos, presentación del equipo y la empresa, asignación de equipos y accesos, plan de formación inicial y checkpoints de los primeros 30-60-90 días.
- Explica cómo personalizar el onboarding digital según el rol, la localización y el nivel del empleado.

**5. Gestión del cambio interno**
- Describe cómo gestionar la resistencia interna a la digitalización de RRHH: los miedos más comunes (pérdida del trato personal, errores del sistema, exposición de datos privados) y cómo abordarlos.
- Explica cómo involucrar a los managers en la adopción de las herramientas digitales: ellos son el eslabón más crítico y el más resistente al cambio.
- Proporciona un plan de comunicación y formación para el lanzamiento de una nueva herramienta de RRHH.

**Preguntas iniciales:**
1. ¿Cuántos empleados tiene tu empresa y en cuántas ubicaciones?
2. ¿Qué herramientas de RRHH tienes ya implementadas?
3. ¿Cuál es el proceso de RRHH que más fricción genera actualmente?
4. ¿Cuál es el presupuesto disponible para la transformación digital de RRHH?

Dame los datos y diseñamos el plan de digitalización adecuado para tu empresa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 75,
                'use_case'         => 'Diseñar e implementar la digitalización de los procesos de RRHH con las herramientas adecuadas',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Gestión financiera de la estacionalidad',
                'description'      => 'Planifica el capital circulante y la tesorería cuando tu negocio tiene picos y valles: financiación puente, gestión de costes fijos y estrategias anti-estacionalidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO con experiencia asesorando a empresas con alta estacionalidad en sectores como turismo, hostelería, moda, agricultura, juguetes y comercio navideño. Conoces los mecanismos de financiación del circulante, las estrategias de reducción de costes fijos en temporada baja y las palancas operativas para suavizar los ciclos de caja.

Necesito gestionar mejor las finanzas de mi negocio estacional. Guíame a través de la estrategia financiera completa:

**1. Diagnóstico del patrón de estacionalidad**
- Explica cómo analizar el patrón de estacionalidad de mi negocio: qué datos históricos mirar (ventas, cobros, pagos, caja) y con qué granularidad (semana a semana, mes a mes).
- Describe cómo calcular el índice de estacionalidad por mes y la ratio entre el pico máximo y el valle mínimo de ingresos.
- Proporciona una herramienta de análisis para identificar los meses críticos de tensión de caja y cuánto capital adicional se necesita en esos períodos.

**2. Gestión del capital circulante estacional**
- Explica los tres componentes del capital circulante y cómo se comportan en un negocio estacional: stock (aumenta antes del pico, se liquida durante), cobros a clientes (se disparan en temporada alta) y pagos a proveedores (se concentran antes del pico para abastecerse).
- Describe las palancas para optimizar el capital circulante: negociar pagos a proveedores más largos en temporada de compras, ofrecer descuentos por pago anticipado a clientes en temporada alta, y gestionar el stock de forma precisa para no sobreinvertir.
- Detalla cómo calcular las necesidades de capital circulante adicional en la temporada de compras y cómo financiarlo.

**3. Instrumentos de financiación estacional**
- Describe las opciones de financiación del circulante estacional disponibles en España: línea de crédito revolving (la más flexible), póliza de crédito, descuento comercial de facturas (para adelantar cobros de clientes), confirming (para gestionar mejor los pagos a proveedores) y financiación ICO para circulante.
- Explica cuándo solicitar la financiación: siempre antes de necesitarla, en temporada de ingresos, nunca en el valle de caja.
- Detalla cómo dimensionar correctamente la línea de crédito: el error más común es pedir demasiado poco y el más caro es no tenerla cuando se necesita.

**4. Gestión de los costes fijos en temporada baja**
- Explica las estrategias para reducir la presión de los costes fijos en temporada baja: negociación de contratos de alquiler con reducción en temporada baja, Expediente de Regulación Temporal de Empleo (ERTE) estacional, flexibilización de la plantilla con contratos fijos discontinuos, y conversión de costes fijos en variables (externalización, comisiones).
- Describe cómo planificar el ERTE estacional: plazos de comunicación, obligaciones con los trabajadores y ahorro real en la nómina.
- Detalla cómo gestionar el equipo durante la temporada baja para retener el talento clave: formación, proyectos internos, y retribución flexible.

**5. Estrategias anti-estacionalidad**
- Explica las estrategias para suavizar la estacionalidad: diversificación de productos o servicios para la temporada baja, precios dinámicos para incentivar la demanda fuera del pico, suscripciones o pagos fraccionados que distribuyen los ingresos a lo largo del año, y expansión a mercados con estacionalidad inversa.

**6. Presupuesto estacional y forecast**
- Proporciona la estructura de un presupuesto diseñado para negocios estacionales: cómo distribuir los ingresos esperados por mes, cómo presupuestar los costes variables en línea con la actividad y cómo tratar los costes fijos en los meses de baja actividad.

**Preguntas iniciales:**
1. ¿En qué sector operas y cuáles son tus meses de mayor y menor actividad?
2. ¿Cuál es la ratio entre el mes pico y el mes valle de ingresos?
3. ¿Cuál es tu principal problema ahora: falta de caja en el valle, sobreinversión en stock o financiación del pico de compras?
4. ¿Tienes financiación bancaria disponible actualmente?

Dame los datos y diseñamos el plan financiero estacional.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 75,
                'use_case'         => 'Gestionar la tesorería y el capital circulante de un negocio con alta estacionalidad',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Startup legal toolkit',
                'description'      => 'Los documentos legales esenciales que toda startup necesita en sus primeros 18 meses: constitución, pacto de socios, acuerdos con empleados y primeros contratos con clientes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en startups y venture capital con experiencia asesorando a más de cien startups desde su constitución hasta sus primeras rondas de financiación en España y en el ecosistema europeo. Tu enfoque es pragmático: sabes qué documentos son imprescindibles desde el día uno y cuáles pueden esperar sin que generen riesgo real.

Necesito construir el toolkit legal de mi startup. Guíame a través de los documentos y decisiones legales clave de los primeros 18 meses:

**1. La constitución: forma jurídica y estructura societaria**
- Compara las formas jurídicas más adecuadas para una startup en España: SL (Sociedad Limitada) como opción estándar, la SL Unipersonal para fundadores solos, y por qué casi nunca tiene sentido constituir una SA al inicio.
- Explica las opciones para acelerar la constitución: constitución telemática por el boletin oficial, el procedimiento CIRCE y los estatutos tipo vs. estatutos personalizados.
- Detalla qué debe incluir el capital social inicial, el valor nominal de las participaciones y cómo estructurar el porcentaje de cada fundador desde el inicio.

**2. El pacto de socios entre fundadores**
- Explica por qué el pacto de socios entre fundadores es el documento más importante de los primeros meses y por qué muchas startups lo ignoran hasta que es demasiado tarde.
- Detalla los elementos esenciales del pacto de socios de fundadores: vesting de participaciones (qué ocurre si un fundador se va en los primeros años), cláusula de good leaver / bad leaver, dedicación exclusiva y restricciones de competencia, toma de decisiones y quórum para decisiones estratégicas, derechos de tanteo entre socios y política de dividendos.
- Explica el concepto de vesting y por qué protege a todos los fundadores: si un cofundador se va al año con el 33% de la empresa sin haber trabajado el período completo, el daño puede ser irreparable para la startup.

**3. Acuerdos con los primeros empleados**
- Detalla qué debe incluir el contrato de trabajo de los primeros empleados clave: cláusula de confidencialidad, cesión de derechos de propiedad intelectual a la empresa, pacto de no competencia post-contractual y pacto de no captación.
- Explica las opciones de retribución variable en equity para empleados tempranos: stock options (ESOP), phantom shares y participaciones directas, con sus implicaciones fiscales en España.
- Describe cómo debe redactarse la cláusula de cesión de propiedad intelectual para que sea válida y cubra el código, los diseños y las invenciones creadas durante el empleo.

**4. Los primeros contratos con clientes**
- Proporciona la estructura de un contrato de prestación de servicios o SaaS para los primeros clientes: definición del servicio, SLA, propiedad de los datos, limitación de responsabilidad (imprescindible para una startup), duración y renovación automática, y condiciones de pago.
- Explica la importancia de las cláusulas de limitación de responsabilidad y por qué sin ellas una startup puede quedar expuesta a reclamaciones que superen su capital.
- Detalla cómo adaptar las Condiciones Generales de Uso y la Política de Privacidad a los requisitos del RGPD si el producto es B2C o maneja datos personales de clientes.

**5. Preparación para la primera ronda de financiación**
- Explica los documentos que los inversores pedirán en el due diligence: cap table actualizado, pacto de socios, contratos de empleados clave, contratos con clientes significativos, registros de propiedad intelectual y declaraciones fiscales.
- Describe los instrumentos de financiación más usados en fases seed: nota convertible (SAFE o KISS) y ronda de equity con term sheet. Explica cuándo usar cada uno.

**Preguntas iniciales:**
1. ¿En qué fase está tu startup (idea, MVP, primeros ingresos)?
2. ¿Cuántos fundadores sois y está ya todo el mundo a tiempo completo?
3. ¿Has constituido ya la empresa o todavía no?
4. ¿Hay ya empleados o colaboradores trabajando sin contrato?

Dame la situación actual y te digo qué documentos necesitas primero.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 75,
                'use_case'         => 'Construir el marco legal básico de una startup en sus primeros 18 meses de vida',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer success en productos de IA',
                'description'      => 'Onboarding, adopción y retención cuando el producto aprende y cambia constantemente: estrategias CS específicas para productos de inteligencia artificial.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de customer success especializado en productos de inteligencia artificial y machine learning, con experiencia ayudando a empresas a adoptar herramientas de IA que aprenden, evolucionan y a veces se comportan de forma inesperada. Conoces los desafíos únicos de hacer CS en un producto que no siempre da la misma respuesta a la misma pregunta.

Necesito construir un modelo de customer success para mi producto de IA. Guíame a través de los elementos específicos de CS en este contexto:

**1. Los retos únicos del CS en productos de IA**
- Explica por qué el CS en productos de IA es fundamentalmente diferente al CS en software tradicional: el producto no tiene un comportamiento completamente determinista, los resultados varían según los datos del cliente, el modelo puede cambiar con actualizaciones y los usuarios tienden a tener expectativas irreales (tanto excesivas como demasiado bajas).
- Describe los tres problemas más comunes de adopción en productos de IA: el usuario no confía en los resultados del modelo, el usuario confía ciegamente y no verifica los outputs, o el usuario no entiende qué inputs debe proporcionar para obtener buenos resultados.
- Explica el concepto de AI literacy del usuario y por qué el CSM de un producto de IA debe convertirse en un educador además de en un gestor de relaciones.

**2. Onboarding para productos de IA**
- Diseña un proceso de onboarding específico para un producto de IA que incluya: configuración inicial del modelo con los datos del cliente, calibración de las expectativas sobre precisión y errores, educación sobre cómo interpretar y verificar los outputs, y definición conjunta de los casos de uso prioritarios donde el modelo aporta más valor.
- Explica cómo gestionar el período de entrenamiento o warm-up del modelo: cuándo el producto necesita datos del cliente para mejorar, cómo comunicarlo y cómo mantener al cliente comprometido durante ese período.
- Describe cómo estructurar los primeros 30 días: qué hitos debe alcanzar el cliente para que el CSM pueda confirmar que la adopción está en buen camino.

**3. Gestión de las expectativas y la confianza**
- Explica cómo comunicar las limitaciones del modelo sin que el cliente pierda la confianza: la diferencia entre un error de IA y un fallo de producto, y cómo enmarcar los errores como oportunidades de mejora del modelo.
- Describe cómo establecer métricas de éxito del producto de IA que sean honestas: precisión esperada, recall, casos donde el modelo funciona mejor y casos donde no es el más adecuado.
- Detalla cómo manejar la conversación cuando el modelo comete un error significativo en producción: comunicación transparente, análisis de causa raíz y plan de mejora.

**4. Retención y expansión en productos de IA**
- Explica los drivers de retención específicos de los productos de IA: cuanto más tiempo usa el cliente el producto (y más datos aporta), mejor funciona el modelo, lo que crea un switching cost natural pero que hay que comunicar activamente.
- Describe cómo demostrar el valor acumulado del producto de IA a lo largo del tiempo: informes de mejora del modelo, comparativa de precisión en el tiempo y ROI calculado en horas ahorradas o errores evitados.
- Detalla las oportunidades de expansión en productos de IA: nuevos casos de uso para el mismo modelo, extensión a otros departamentos o equipos y acceso a modelos más avanzados o capacidades adicionales.

**5. Monitorización del producto para el CSM**
- Explica qué métricas del producto debe monitorizar el CSM para anticipar problemas de adopción: tasa de uso de la IA vs. bypass manual, tasa de aceptación de las sugerencias del modelo, tiempo de respuesta a los outputs y tasa de feedback negativo.

**Preguntas iniciales:**
1. ¿Qué tipo de producto de IA tienes (generativa, predictiva, clasificación, recomendación)?
2. ¿Cuál es el perfil del usuario final y cuánta experiencia tiene con herramientas de IA?
3. ¿Cuál es el principal problema de adopción que estás viendo ahora mismo?
4. ¿Tienes ya un equipo de CS o lo estás construyendo?

Dame el contexto y diseñamos el modelo de CS para tu producto de IA.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 75,
                'use_case'         => 'Diseñar un modelo de customer success para productos de inteligencia artificial',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Diversificación de fuentes de ingreso del freelance',
                'description'      => 'Construye un modelo de negocio freelance con tres o más fuentes de ingreso: servicios, productos digitales, formación y licencias, para mayor estabilidad y crecimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de negocio especializado en freelances y profesionales independientes que quieren escalar sus ingresos sin trabajar más horas. Has ayudado a más de doscientos freelances a transformar su expertise en múltiples fuentes de ingreso, incluyendo productos digitales, formación y modelos de licencia.

Necesito diversificar mis fuentes de ingreso como freelance. Ayúdame a diseñar un modelo de negocio con múltiples flujos de ingresos:

**1. Por qué depender de un solo cliente o tipo de ingreso es frágil**
- Explica el riesgo de concentración de ingresos en el freelance: qué ocurre cuando el cliente principal cancela, cuando baja el mercado de tu servicio principal o cuando tienes un período de baja salud.
- Describe la diferencia entre fuentes de ingreso activo (cambias tiempo por dinero directamente) y fuentes de ingreso pasivo o semipassivo (el trabajo se hace una vez y genera ingresos recurrentes).
- Explica el concepto de leverage en el negocio del freelance: cómo el mismo conocimiento puede generar ingresos de múltiples formas sin multiplicar las horas trabajadas.

**2. Mapa de fuentes de ingreso posibles para un freelance**
- Describe las principales fuentes de ingreso disponibles para un profesional independiente y cómo se comparan en términos de esfuerzo de creación, tiempo de maduración y potencial de ingreso: servicios 1-1 (la más inmediata pero la menos escalable), servicios en grupo o talleres, retainers y contratos de consultoría mensual, cursos online (asincrónico), cohorts de formación en directo, libros o ebooks, plantillas y herramientas descargables, membership o comunidad de pago, software o SaaS pequeño, licencia de metodología o sistema, y afiliación o referidos.
- Explica cuáles son más adecuadas según el tipo de expertise (técnico, creativo, directivo) y el nivel de audiencia que ya tiene el freelance.

**3. Cómo elegir las tres fuentes de ingreso correctas**
- Proporciona un framework de selección de fuentes de ingreso para el freelance basado en: qué es viable con la audiencia que ya tienes, qué demanda ya existe (validación antes de crear), qué encaja con tu forma de trabajar y qué puedes construir en los próximos 6-12 meses sin dejar de facturar.
- Describe el error más común: intentar crear demasiadas fuentes a la vez y no construir ninguna bien.
- Explica la secuencia óptima: primero consolida el servicio principal, luego añade un retainer o formato de grupo, luego un producto digital.

**4. Construcción de un producto digital desde cero**
- Explica los pasos para crear y lanzar un primer producto digital (curso, plantilla, ebook): validación de la idea con pre-venta o encuesta, creación del contenido mínimo viable, lanzamiento a la audiencia existente y feedback para la segunda versión.
- Describe las plataformas para vender productos digitales: Gumroad, Lemon Squeezy, Hotmart, Teachable, Kajabi, y cómo elegir según el tipo de producto y el nivel de comisión aceptable.

**5. Construir la audiencia que hace posible la diversificación**
- Explica por qué la audiencia (newsletter, seguidores, comunidad) es el activo que permite diversificar ingresos y cómo construirla de forma sostenible mientras se trabaja con clientes.
- Describe la estrategia de contenido mínima para un freelance que quiere diversificar: un canal principal, consistencia antes que volumen, y contenido que demuestra expertise relevante para los productos futuros.

**Preguntas iniciales:**
1. ¿Cuál es tu especialidad y cuál es tu principal fuente de ingreso actual?
2. ¿Tienes ya alguna audiencia (newsletter, seguidores, comunidad)?
3. ¿Qué otras formas de monetizar tu conocimiento has considerado o intentado?
4. ¿Cuántas horas a la semana podrías dedicar a construir fuentes adicionales de ingreso?

Dame los datos y diseñamos el mapa de diversificación adaptado a tu situación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar un modelo de negocio freelance con múltiples fuentes de ingreso escalables',
                'vote_score'       => 45,
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
