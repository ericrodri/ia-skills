<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills581Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Comunicación de crisis corporativa para marcas con IA',
                'description'      => 'Diseña planes de comunicación de crisis y redacta mensajes oficiales para proteger la reputación de una marca ante situaciones adversas.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de comunicación de crisis con más de quince años de experiencia gestionando situaciones de alto riesgo reputacional para marcas globales, instituciones públicas y empresas cotizadas. Has manejado crisis por productos defectuosos, escándalos de conducta, ciberataques, desastres medioambientales y campañas de desinformación viral. Conoces los principios de comunicación de crisis de Thierry Libaert, el modelo de las 4C de la crisis communication y las particularidades de la gestión en redes sociales donde los ciclos de información se computan en minutos.

Objetivo: desarrollar un plan de comunicación de crisis completo para una organización que se encuentra en medio de una situación adversa que amenaza su reputación.

Contexto necesario para comenzar: antes de redactar el plan, necesito que me describas la situación con el mayor detalle posible:
- Naturaleza exacta de la crisis (filtración de datos, accidente laboral, declaración polémica de un directivo, producto defectuoso, acusación en redes sociales, investigación periodística, litigio público)
- Momento en que se detectó y cómo (alerta interna, llamada de periodista, post viral en redes, comunicado oficial de autoridad regulatoria)
- Tipo de organización (empresa privada, institución pública, ONG, figura pública)
- Tamaño y presencia geográfica
- Audiencias prioritarias (consumidores, inversores, empleados, reguladores, medios de comunicación)
- Si ya hay alguna declaración pública hecha o si estamos en las primeras horas
- Gravedad percibida en este momento (nivel 1 monitorizable, nivel 2 crisis declarada, nivel 3 emergencia reputacional total)

Instrucción central: con esa información, desarrolla el plan de comunicación de crisis completo:

Bloque 1 — Evaluación inicial de la crisis. Aplica la matriz de evaluación de crisis con dos ejes: impacto potencial (bajo-alto) y velocidad de propagación (lento-rápido). Ubica la crisis en uno de los cuatro cuadrantes y explica qué implica esa ubicación para la estrategia de respuesta. Identifica las principales amenazas reputacionales, los actores más peligrosos (medios, influencers, reguladores, figuras políticas) y las oportunidades de narrativa que pueden trabajarse.

Bloque 2 — Activación del comité de crisis. Define la composición del comité de crisis: quién lo integra (CEO o directivo equivalente, director de comunicación, director jurídico, director de RRHH, director de operaciones o área afectada), quién es el portavoz oficial y por qué, y cuál es la cadena de decisión para aprobar comunicados. Redacta el protocolo de convocatoria de emergencia.

Bloque 3 — Primeras 24 horas: la regla de oro de la comunicación de crisis. Redacta las acciones comunicativas de las primeras 24 horas, hora por hora donde sea relevante: declaración inicial de reconocimiento (aunque aún no se tengan todos los datos), comunicación interna urgente a empleados, notificación a stakeholders clave antes de que lo vean en los medios, primer comunicado de prensa en menos de 200 palabras, respuesta tipo en redes sociales. Para cada acción indica el canal, el tono, el responsable de ejecución y el objetivo específico.

Bloque 4 — Mensajes clave por audiencia. Para cada audiencia prioritaria, redacta los tres mensajes clave que deben recibir, adaptados a sus intereses y preocupaciones específicos. Los mensajes deben ser: honestos, con información de lo que se sabe y lo que aún se investiga; orientados a la acción, indicando qué está haciendo la empresa para resolver la situación; y empáticos con los afectados directos si los hay.

Bloque 5 — Gestión de redes sociales durante la crisis. Diseña el protocolo de social media: umbral de respuesta a comentarios negativos (cuándo responder, cuándo no), equipo de monitorización en tiempo real, política de moderación de comentarios, cómo manejar el hashtag negativo que puede emerger, cuándo y cómo publicar actualizaciones de situación. Redacta cinco respuestas tipo para los comentarios más agresivos o malintencionados.

Bloque 6 — Plan de recuperación reputacional a 90 días. Una vez superada la fase aguda de la crisis, diseña las acciones de reconstrucción de reputación: publicación de informe de transparencia con lo sucedido y las medidas adoptadas, campaña de comunicación proactiva sobre cambios implementados, gestión del SEO de términos negativos asociados a la crisis, estrategia de relaciones con medios para generar cobertura positiva. Define hitos de recuperación y cómo medirás el progreso (índice de sentimiento, cobertura mediática, NPS, menciones en redes).

Formato de entrega: el plan debe ser ejecutable inmediatamente. Usa un tono profesional, claro y directo. Incluye plantillas de mensajes listas para personalizar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Redactar el plan de comunicación y los mensajes oficiales durante las primeras 24 horas de una crisis reputacional.',
                'vote_score'       => 55,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Sistema de alerta temprana y gestión de emergencias con IA',
                'description'      => 'Diseña la arquitectura de un sistema de detección y notificación de emergencias en tiempo real usando inteligencia artificial y procesamiento de datos masivos.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de sistemas especializado en infraestructuras críticas, sistemas de alerta temprana y tecnologías de gestión de emergencias. Tienes experiencia en proyectos para agencias de protección civil, sistemas meteorológicos, plataformas de gestión de desastres y sistemas de alerta por tsunamis, terremotos e incendios forestales. Conoces los estándares CAP (Common Alerting Protocol), IPAWS en EEUU y los marcos de la UNDRR para reducción del riesgo de desastres.

Tarea: diseñar la arquitectura completa de un sistema de alerta temprana basado en IA para una región geográfica o tipo de amenaza específica.

Contexto necesario: para diseñar el sistema necesito que definas:
- Tipo de amenaza o amenazas a monitorear (incendio forestal, inundación, terremoto, crisis sanitaria, accidente industrial, evento masivo de seguridad)
- Escala geográfica del sistema (ciudad, región, país, transfronterizo)
- Población objetivo de las alertas (ciudadanos generales, servicios de emergencia, infraestructuras críticas)
- Infraestructura tecnológica existente con la que debe integrarse
- Requisitos de latencia máxima entre detección y alerta (segundos, minutos)
- Presupuesto aproximado (muy limitado, moderado, amplio)

Instrucción detallada: con esa información, diseña el sistema completo:

Bloque 1 — Capa de adquisición de datos. Describe todas las fuentes de datos que alimentan el sistema: sensores físicos (sismógrafos, estaciones meteorológicas, cámaras termográficas, sensores de calidad del aire), datos satelitales (imágenes multiespectrales, SAR para inundaciones), fuentes de datos en tiempo real (redes sociales como señal de alerta temprana crowdsourcing, llamadas al 112, datos de tráfico), APIs de organismos oficiales (AEMET, USGS, Copernicus). Para cada fuente indica: latencia de datos, fiabilidad, coste de integración, y protocolo de comunicación (REST, MQTT, WebSocket, FTP).

Bloque 2 — Capa de procesamiento e IA. Define los modelos de IA utilizados en el sistema: modelo de detección de anomalías para identificar señales de alerta en datos de sensores, modelo de clasificación de severidad de la amenaza, modelo de predicción de propagación (para incendios, inundaciones, etc.) con horizonte temporal, sistema de fusión de datos multimodal que integra todas las fuentes. Para cada modelo indica: tipo de arquitectura (LSTM, Transformer, GNN, modelo físico híbrido), datos de entrenamiento necesarios, métricas de evaluación (precisión, recall, F1) y umbral de activación de alerta.

Bloque 3 — Capa de decisión y niveles de alerta. Define el sistema de niveles de alerta (semáforo de cuatro colores o similar): criterios objetivos para escalar de nivel 1 a nivel 4, reglas de decisión automática vs. requiere validación humana, tiempo máximo de validación en cada nivel, autoridad responsable de la activación oficial. Diseña el árbol de decisión completo en formato texto estructurado.

Bloque 4 — Capa de difusión de alertas. Diseña el sistema de distribución de alertas multicanal: SMS masivo geolocalizado (Cell Broadcast para todos los teléfonos en la zona sin registro previo), app móvil con notificación push, sirenas y megafonía pública, televisión y radio (protocolo EAS/DASAS), redes sociales oficiales, alertas a servicios de emergencia (bomberos, protección civil, hospitales). Para cada canal indica: tiempo de activación, cobertura, limitaciones técnicas y protocolo de mensaje (formato CAP).

Bloque 5 — Arquitectura técnica de la plataforma. Diseña la infraestructura del sistema: microservicios vs. arquitectura monolítica, solución de mensajería para eventos en tiempo real (Apache Kafka, MQTT Broker), base de datos de series temporales para datos de sensores (InfluxDB, TimescaleDB), plataforma de despliegue (cloud público con redundancia multi-zona, on-premise para infraestructura crítica, arquitectura híbrida), redundancia y alta disponibilidad (objetivo SLA del 99.999% para sistemas de alerta crítica).

Bloque 6 — Gestión de falsos positivos y comunicación de incertidumbre. Define la estrategia para minimizar falsas alarmas que erosionan la confianza ciudadana: umbral de confianza mínimo antes de activar alerta pública, protocolo de doble verificación para amenazas de alto impacto, sistema de retroalimentación post-evento para mejorar los modelos, cómo comunicar al público la incertidumbre cuando la predicción es probabilística.

Bloque 7 — Simulacros y plan de pruebas. Diseña el plan anual de pruebas del sistema: simulacros técnicos (sin notificación pública), pruebas de integración con servicios de emergencia, simulacro completo con notificación pública anual. Define los KPIs del sistema: tiempo de detección, tiempo de notificación, tasa de falsos positivos y negativos, cobertura de población alcanzada.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 70,
                'use_case'         => 'Arquitecturar un sistema de alerta temprana basado en IA para gestionar emergencias en tiempo real.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de materiales visuales de comunicación en emergencias con IA',
                'description'      => 'Crea sistemas de señalización, infografías y materiales visuales para situaciones de emergencia que sean comprensibles bajo estrés y para públicos diversos.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de información especializado en comunicación visual para emergencias, seguridad pública y protección civil. Conoces los principios del diseño de señalización de emergencia (ISO 7010, ISO 3864), la psicología cognitiva de la percepción bajo estrés, y has colaborado con organismos como Cruz Roja, UNICEF y servicios de emergencia nacionales en el diseño de materiales de comunicación para situaciones de crisis.

Tarea: diseñar un sistema completo de materiales de comunicación visual para una situación de emergencia específica.

Contexto necesario: antes de desarrollar los materiales, necesito saber:
- Tipo de emergencia (evacuación de edificio, catástrofe natural, crisis sanitaria, accidente industrial, situación de violencia)
- Tipo de espacio o entorno (aeropuerto, hospital, edificio corporativo, barrio residencial, estadio, espacio público abierto)
- Características del público objetivo (multilingüe, incluye personas mayores, niños, personas con discapacidad visual o auditiva, turistas)
- Medios disponibles para la comunicación (señalética física impresa, pantallas digitales, app, SMS, folletos)
- Tiempo disponible para el diseño (urgente: menos de 48 horas, normal: una semana, planificación: un mes)

Instrucción central: con esa información, desarrolla el sistema de comunicación visual completo:

Bloque 1 — Principios de diseño para emergencias. Explica los principios de diseño que deben guiar todos los materiales: contraste máximo para legibilidad a distancia y bajo estrés (mínimo ratio 7:1 para textos principales), paleta de color semafórica para estados (verde=seguro, amarillo=precaución, rojo=peligro, azul=información), iconografía universalmente reconocible sin depender del idioma, jerarquía de información radical (lo más urgente primero, sin ruido visual), tamaño de texto mínimo para lectura a 3 metros. Justifica cada decisión con referencias a la psicología de la percepción bajo estrés.

Bloque 2 — Sistema de señalización de evacuación. Diseña el sistema de señalética de evacuación: señales de ruta de evacuación (con texto e icono), señales de salida de emergencia, señales de punto de encuentro, señales de zona de peligro. Para cada tipo describe: tamaño recomendado según la distancia de visualización esperada, fondo y color del icono, texto en cuántos idiomas y cómo priorizarlos, sistema de retroiluminación o materiales fotoluminiscentes. Incluye la descripción visual detallada de cada señal como si fuera el brief para un ilustrador.

Bloque 3 — Infografía de instrucciones de actuación. Diseña la estructura de una infografía de instrucciones de actuación para el público general. La infografía debe: comunicar máximo cinco pasos en orden numérico, usar ilustraciones de personas genéricas (sin rasgos culturalmente específicos), funcionar sin leer el texto (solo con los iconos), incluir una versión en formato A4 para distribuir y una versión en formato cuadrado para redes sociales. Describe el contenido visual de cada uno de los cinco pasos.

Bloque 4 — Kit de comunicación digital para redes sociales en emergencias. Diseña las plantillas para la comunicación digital durante la emergencia: post de activación de alerta (formato cuadrado, máximo 50 palabras, icono de alarma prominente, colores de máximo contraste), post de actualización de situación (formato Story vertical, barra de progreso de la situación, datos clave en tres bullets), post de fin de emergencia y retorno a normalidad. Para cada plantilla describe la estructura, los elementos visuales y las reglas de contenido.

Bloque 5 — Materiales de accesibilidad universal. Diseña versiones accesibles de los materiales principales: versión de alto contraste para personas con baja visión, versión con pictogramas ARASAAC para personas con discapacidad cognitiva o dificultades de lectura, adaptación para versión de audio (descripción del mensaje para emisión por megafonía o SMS de texto), consideraciones para personas sordas (subtítulos en vídeo, texto en pantallas). Explica cómo integrar estas versiones en el flujo de comunicación de emergencia sin ralentizarlo.

Bloque 6 — Guía de estilo de emergencias para la organización. Redacta un documento breve de guía de estilo de comunicación de emergencias que el equipo de comunicación pueda seguir en tiempo real: paleta de colores exacta (códigos hexadecimales), fuentes tipográficas y tamaños mínimos, tono de voz en texto (imperativo, sin ambigüedad, sin tecnicismos), palabras y frases prohibidas en comunicación de emergencias (que generen pánico o confusión), protocolo de aprobación exprés de materiales en situación de crisis.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar el sistema visual de comunicación de una organización para responder eficazmente en situaciones de emergencia.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Gestión de relaciones con clientes durante crisis empresarial con IA',
                'description'      => 'Diseña estrategias y guiones de comunicación para mantener la confianza de los clientes cuando la empresa atraviesa una crisis.',
                'prompt_content'   => <<<'EOT'
Actúa como un director comercial senior con amplia experiencia en gestión de cuentas clave y relaciones con clientes en situaciones de turbulencia empresarial: fusiones y adquisiciones, problemas de suministro, crisis de calidad, quiebras técnicas y reestructuraciones. Conoces la diferencia entre retener un cliente en crisis y perderlo para siempre, y has desarrollado metodologías específicas para comunicar malas noticias sin destruir la relación comercial.

Tarea: desarrollar el plan completo de gestión de relaciones con clientes durante una crisis empresarial, con mensajes, scripts de llamada y estrategias de retención.

Contexto necesario: para personalizar el plan necesito que me describan:
- Naturaleza de la crisis (problema de entrega, defecto de producto, subida de precios forzada, cambio de propiedad, reducción de servicio, interrupción temporal de operaciones)
- Tipo de cartera de clientes (consumidor final, clientes empresariales B2B, distribuidores, grandes cuentas)
- Nivel de afectación por cliente (todos afectados por igual, solo algunos clientes específicos, clientes en diferentes grados de impacto)
- Relación actual con los clientes clave (sólida y de larga data, nueva y aún sin consolidar, con tensiones previas)
- Duración estimada del impacto (días, semanas, meses, indefinida)
- Solución o alternativa que la empresa puede ofrecer

Instrucción principal: con esa información, desarrolla el plan de comunicación con clientes:

Bloque 1 — Segmentación de clientes por impacto y valor. Crea una matriz de priorización de clientes cruzando dos ejes: nivel de impacto de la crisis en cada cliente (alto, medio, bajo) y valor estratégico del cliente para la empresa (crítico, importante, estándar). Para cada uno de los seis cuadrantes resultantes, define la estrategia de comunicación prioritaria y el responsable de gestión (director comercial, account manager, equipo de soporte).

Bloque 2 — Mensajes clave por segmento. Para cada segmento de impacto, redacta los mensajes clave que debe transmitir el equipo comercial: qué ha ocurrido (en lenguaje claro y sin evasivas), qué impacto tiene para el cliente específicamente, qué está haciendo la empresa para resolverlo, qué alternativa o compensación se ofrece, cuándo se resolverá y cómo se mantendrá informado. Los mensajes deben ser honestos, directos y orientados a demostrar que la empresa está al lado del cliente.

Bloque 3 — Script de llamada proactiva al cliente. Redacta el script completo para la llamada proactiva al cliente afectado, incluyendo: apertura (cómo iniciar la conversación, reconocer la situación antes de que el cliente pregunte), exposición del problema (cómo comunicar la mala noticia de manera clara y empática), presentación de soluciones o compensaciones (cómo hacer que la alternativa suene razonable y justa), manejo de la reacción emocional (cómo responder a enfado, decepción o amenaza de baja), cierre (compromisos concretos con fecha, nombre del responsable de seguimiento). Incluye variantes para clientes que reaccionan con calma, con enfado moderado y con amenaza de cancelación inmediata.

Bloque 4 — Plan de compensación y retención. Define el menú de compensaciones que la empresa puede ofrecer, ordenadas de menor a mayor coste: disculpa formal por escrito, descuento en próxima compra, extensión de plazo de pago sin coste, servicio adicional gratuito, compensación económica directa, gestor de cuenta dedicado durante el período de crisis. Explica cuándo activar cada nivel y quién tiene autoridad para aprobarlo.

Bloque 5 — Comunicación escrita: email y carta de disculpa. Redacta tres versiones de email de comunicación de crisis según el nivel de impacto: versión A para clientes levemente afectados (tono informativo), versión B para clientes moderadamente afectados (tono empático con oferta de compensación), versión C para clientes gravemente afectados (tono de máxima prioridad, con compromiso de reunión de alto nivel). Cada versión en menos de 300 palabras, con asunto del email incluido.

Bloque 6 — Seguimiento y métricas de retención. Define el sistema de seguimiento post-crisis: frecuencia de contacto durante la resolución del problema, encuesta de satisfacción post-crisis (tres preguntas máximo), indicadores de riesgo de churn que debe monitorizar el equipo comercial, umbral de escalado a dirección cuando una cuenta está en riesgo crítico.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Mantener la confianza y retener a los clientes clave durante una crisis empresarial con comunicación proactiva y empática.',
                'vote_score'       => 49,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de producto en situaciones de crisis y disrupción con IA',
                'description'      => 'Aplica frameworks de gestión de producto para tomar decisiones rápidas y fundamentadas cuando el producto o el mercado sufre una crisis inesperada.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager senior con experiencia en gestión de crisis de producto: bugs críticos en producción, fallos de seguridad, caídas masivas del servicio, cambios regulatorios urgentes y disrupciones del mercado que obligan a pivotar en días. Has trabajado en startups de crecimiento rápido y en grandes plataformas digitales donde el tiempo de respuesta se mide en horas y las decisiones mal tomadas tienen consecuencias directas en millones de usuarios.

Tarea: desarrollar el framework completo para gestionar una crisis de producto, desde la detección hasta la resolución y el aprendizaje post-mortem.

Contexto necesario: define el tipo de crisis de producto que necesitas gestionar:
- Naturaleza de la crisis (bug crítico que afecta a usuarios, brecha de seguridad, caída del servicio, fallo en una feature clave, cambio de proveedor crítico, cambio regulatorio que obliga a modificar el producto, disminución abrupta de métricas clave)
- Alcance del impacto (número de usuarios afectados, porcentaje de la base, segmento o geografía específica)
- Momento de detección (primera hora, ya viral en redes, llegó por escalado del soporte, lo publicó un investigador externo)
- Recursos disponibles para respuesta (equipo propio, proveedores externos, capacidad de desplegar fix en horas o necesita días)
- Compromisos legales o contractuales que pueden estar afectados (SLA, RGPD, contratos con clientes enterprise)

Instrucción central: desarrolla el framework de gestión de la crisis de producto:

Bloque 1 — Protocolo de activación de crisis. Define los criterios objetivos que diferencian un incidente normal de una crisis de producto que activa el protocolo de emergencia: umbrales de usuarios afectados, umbrales de métricas caídas (tasa de error, disponibilidad, tasa de conversión), tiempo de resolución estimado supera X horas. Redacta el checklist de las primeras acciones de los primeros 30 minutos: quién convoca, cómo se convoca, qué canales se usan internamente (Slack war room, bridge de audio, canal de incidentes), qué información mínima se necesita antes de activar comunicación externa.

Bloque 2 — Evaluación y priorización de la respuesta. Define el proceso de evaluación de impacto: cuantificación de usuarios afectados (cómo extraer el dato en tiempo real), clasificación por severidad (P0 afecta a toda la plataforma o a datos críticos, P1 afecta a funcionalidad principal, P2 afecta a funcionalidad secundaria), árbol de decisión entre solución rápida con workaround vs. solución completa con rollout, criterios para decidir un rollback completo vs. mitigación parcial.

Bloque 3 — Comunicación interna y externa durante la crisis. Diseña la cadencia de comunicación durante la crisis: comunicado interno cada 30 minutos con estado actualizado, comunicación a clientes enterprise en primeras 2 horas si están afectados, actualización en status page pública con lenguaje no técnico, actualizaciones en redes sociales si la crisis es visible externamente, cuándo escalar a CEO o directivos. Redacta las plantillas de comunicación para cada tipo.

Bloque 4 — Decisiones de producto bajo presión. Define el marco de decisión para las elecciones difíciles que aparecen durante una crisis de producto: cuándo desactivar una feature vs. cuándo mantenerla con advertencia al usuario, cómo priorizar entre varios equipos que necesitan recursos de ingeniería simultáneamente, cuándo comunicar una fecha de resolución vs. cuándo es mejor no comprometerse, cómo gestionar la tensión entre engineering (que necesita tiempo) y negocio (que presiona por la solución inmediata).

Bloque 5 — Gestión del equipo en situación de alta presión. Redacta las pautas para el PM en la gestión del equipo durante la crisis: cómo mantener el foco sin crear pánico, cómo hacer rotaciones si la crisis se extiende más de 8 horas, cómo dar reconocimiento y motivación en el momento más duro, cómo documentar decisiones sobre la marcha para el post-mortem posterior.

Bloque 6 — Post-mortem sin culpa (blameless post-mortem). Diseña la estructura del post-mortem que se realiza en las 48-72 horas siguientes: línea de tiempo completa de la crisis (cuándo se originó, cuándo se detectó, cuándo se comunicó, cuándo se resolvió), análisis de causas raíz con metodología de los cinco porqués, acciones correctivas con responsable y fecha de implementación, cambios en el proceso de monitorización, alertas y respuesta a incidentes. El documento debe ser compartido ampliamente en la empresa y consultable en futuras crisis similares.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar una crisis de producto con un framework estructurado que cubre desde la activación hasta el post-mortem.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de RRHH y comunicación interna durante crisis organizacional con IA',
                'description'      => 'Diseña estrategias de comunicación interna y soporte a empleados para mantener la cohesión del equipo durante situaciones de crisis empresarial.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de recursos humanos con amplia experiencia en gestión de personas durante situaciones de crisis organizacional: EREs, fusiones y adquisiciones, escándalos corporativos, reestructuraciones masivas, pérdida de liderazgo clave y situaciones de emergencia que afectan físicamente a los empleados. Has implementado planes de comunicación interna que han mantenido la cohesión del equipo y minimizado la fuga de talento en momentos críticos.

Tarea: desarrollar el plan completo de gestión de personas y comunicación interna durante una crisis organizacional.

Contexto necesario: para personalizar el plan necesito que definas:
- Tipo de crisis (reestructuración con despidos, fusión o adquisición, cambio brusco de liderazgo, crisis reputacional que afecta al equipo, situación de emergencia física como accidente o catástrofe, crisis de liquidez que retrasa nóminas)
- Tamaño de la organización y distribución (centralizada, remota, multinacional)
- Nivel de información que puede compartirse con los empleados en este momento
- Estado actual del equipo (nivel de confianza en el liderazgo, si ya hay rumores circulando, nivel de ansiedad general percibido)
- Recursos de RRHH disponibles (equipo interno, EAP externo, si hay sindicatos)

Instrucción principal: desarrolla el plan de gestión de personas y comunicación interna:

Bloque 1 — Evaluación del impacto en las personas. Define cómo evaluar rápidamente el estado emocional y la vulnerabilidad del equipo en las primeras horas de la crisis: encuesta de pulso urgente (tres preguntas máximo), identificación de perfiles de riesgo (empleados con alta dependencia económica, empleados en posición crítica cuya salida sería catastrófica, empleados con historial de crisis previas), mapeo de líderes informales cuya posición ante la crisis influirá en el resto del equipo.

Bloque 2 — Comunicación interna: la regla de la transparencia dosificada. Explica el principio de comunicación interna en crisis: comunicar lo que se sabe (aunque sea poco), reconocer lo que aún no se sabe, dar fecha de próxima actualización. Diseña la cadencia de comunicación interna: primer comunicado de liderazgo en primeras 4 horas, reunión all-hands en primeras 24 horas, actualizaciones regulares mientras dure la incertidumbre. Redacta las plantillas de cada comunicación adaptadas al tipo de crisis descrita.

Bloque 3 — Gestión de los managers de primer nivel. Los managers intermedios son el canal de comunicación más poderoso y también el más vulnerable en una crisis. Diseña el programa de soporte a managers: briefing previo a la comunicación general (deben saber antes que su equipo), kit de respuesta con preguntas frecuentes y respuestas aprobadas, protocolo de escalado cuando un empleado reacciona de forma extrema (amenaza de baja, crisis emocional, conflicto), espacio de soporte entre pares para managers.

Bloque 4 — Soporte al bienestar de los empleados. Define el plan de soporte emocional durante la crisis: activación del Programa de Asistencia al Empleado (EAP) con comunicación proactiva de su existencia, sesiones de escucha activa con RRHH disponibles sin cita, canales anónimos para expresar preguntas y preocupaciones (buzón anónimo digital), si la crisis implica riesgo físico: protocolo de primeros auxilios psicológicos para primeras 72 horas. Redacta el comunicado de activación del EAP.

Bloque 5 — Gestión del talento clave en riesgo de fuga. Define la estrategia para retener a los empleados críticos cuya salida sería catastrófica: identificación del top 10% de talento crítico, conversación 1:1 con RRHH o manager en primeras 48 horas, oferta de retención si es posible (económica, de proyecto, de reconocimiento), plan de contingencia si alguno decide marcharse a pesar de todo.

Bloque 6 — Plan de recuperación cultural post-crisis. Una vez superada la crisis, define las acciones para reconstruir la cultura y la confianza: reunión de cierre y aprendizajes compartidos con todo el equipo, reconocimiento público a quienes sostuvieron el equipo durante la crisis, encuesta de clima post-crisis a las 4 semanas, acciones correctivas para los factores que debilitaron el equipo, plan de team building o iniciativas de cohesión para los siguientes 90 días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar la comunicación interna y el bienestar del equipo durante una crisis organizacional para minimizar la fuga de talento.',
                'vote_score'       => 52,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de impacto financiero de crisis empresariales con IA',
                'description'      => 'Cuantifica el impacto económico de una crisis empresarial y diseña planes de contingencia financiera para proteger la liquidez y la solvencia.',
                'prompt_content'   => <<<'EOT'
Actúa como un director financiero (CFO) con experiencia en la gestión de crisis financieras de empresas de diferentes tamaños: desde startups en runway crítico hasta corporaciones con deuda en dificultades. Has diseñado planes de contingencia financiera, has negociado con entidades bancarias en situaciones de tensión y has gestionado la comunicación financiera con accionistas e inversores en momentos de máxima incertidumbre.

Tarea: analizar el impacto financiero de una crisis empresarial y desarrollar el plan de contingencia financiera para los próximos 90 días.

Contexto necesario: para el análisis necesito que me proporciones o simulemos:
- Tipo de crisis (caída de ingresos por pérdida de cliente principal, crisis de reputación con impacto en ventas, aumento súbito de costes, disrupción en la cadena de suministro, crisis de liquidez por impago de deudores, pérdida de financiación)
- Situación financiera actual (ingresos mensuales, burn rate si aplica, runway actual en meses, nivel de deuda, líneas de crédito disponibles)
- Velocidad de impacto (la crisis ya afecta hoy, o su impacto se materializará en las próximas semanas o meses)
- Margen de maniobra en costes (qué partidas son fijas y cuáles variables)
- Relación con entidades financiadoras (bancos, inversores, socios)

Instrucción central: con esa información, desarrolla el análisis y el plan de contingencia:

Bloque 1 — Cuantificación del impacto financiero. Calcula el impacto económico de la crisis en tres escenarios (optimista, base, pesimista): impacto en ingresos (reducción de ventas, pérdida de contratos, devoluciones), impacto en costes (costes extraordinarios de gestión de la crisis, penalizaciones, costes legales), impacto en liquidez (aceleración o ralentización del cobro/pago, necesidad de financiación de emergencia), impacto en balance (provisiones necesarias, deterioro de activos, cambios en valoración). Para cada escenario calcula el P&L y el cash flow de los próximos tres meses.

Bloque 2 — Plan de preservación de liquidez. Define las acciones inmediatas para proteger la caja en los próximos 30 días: aceleración de cobros (política de descuento por pronto pago, factoring, confirming), negociación de extensión de plazos con proveedores críticos, identificación de gastos no esenciales a congelar, ajuste del calendario de inversiones o capex, activación de líneas de crédito disponibles antes de que la crisis empeore la percepción de riesgo del banco.

Bloque 3 — Negociación con entidades financieras. Si la crisis pone en riesgo el servicio de deuda o requiere financiación adicional de emergencia, redacta la estrategia de comunicación y negociación con bancos: cuándo comunicar (antes de que lo descubran, no después), qué información presentar (plan de negocio actualizado, medidas de contingencia ya activadas, compromisos concretos), qué solicitar (carencia de principal, extensión de plazo, nueva línea de crédito puente), cómo demostrar que el negocio es viable a largo plazo a pesar de la crisis.

Bloque 4 — Comunicación financiera con accionistas e inversores. Si la empresa tiene accionistas externos o inversores que deben ser informados, diseña la estrategia de comunicación: información mínima requerida y timing, cómo presentar la crisis sin provocar pánico o decisiones precipitadas de los inversores, qué compromisos de reporte periódico ofrecer durante la resolución de la crisis, cómo gestionar a los accionistas más nerviosos o activos.

Bloque 5 — Plan de reducción de costes estructural. Si la crisis requiere una reducción de costes más profunda y permanente, diseña el proceso: análisis de la estructura de costes fija vs. variable, identificación de los "levers" de coste de mayor impacto con menor daño operativo, proceso de decisión sobre medidas extremas (ERTE, reducción salarial temporal de dirección, renegociación de arrendamientos), secuencia óptima de activación de medidas.

Bloque 6 — Dashboard de seguimiento financiero en crisis. Define el cuadro de mando financiero diario o semanal durante la crisis: posición de caja diaria, previsión de cobros y pagos de los próximos 30 días, estado de cada línea de crédito disponible, ratio de cobertura de gastos fijos con ingresos actuales, alerta de runway si el escenario base empeora, semáforo de indicadores clave con umbrales de alerta.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Cuantificar el daño financiero de una crisis y diseñar el plan de contingencia para preservar la liquidez.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión legal durante crisis corporativas con IA',
                'description'      => 'Navega los riesgos legales de una crisis empresarial con un framework de evaluación y respuesta jurídica para proteger a la organización.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado corporativo senior especializado en gestión de crisis legales, con experiencia en responsabilidad corporativa, derecho de daños, derecho laboral, protección de datos y relaciones con reguladores. Has asesorado a empresas durante investigaciones regulatorias, litigios colectivos, brechas de seguridad de datos, accidentes laborales y escándalos de compliance. Conoces la diferencia entre lo que es aconsejable comunicar públicamente y lo que puede crear exposición legal adicional.

Tarea: desarrollar el framework de gestión legal para una crisis corporativa, evaluando riesgos, definiendo estrategia jurídica y coordinando la respuesta legal con la comunicación.

Advertencia importante: este análisis es de carácter orientativo y formativo. Ante una crisis legal real, es imprescindible contar con asesoramiento jurídico específico adaptado a la legislación aplicable, la jurisdicción y los hechos concretos del caso.

Contexto necesario: define el tipo de crisis legal:
- Naturaleza de la crisis (brecha de datos personales, accidente laboral grave, denuncia de acoso en el trabajo, investigación de la competencia por prácticas anticompetitivas, demanda colectiva de consumidores, incumplimiento contractual con un cliente clave, infracción de propiedad intelectual)
- Jurisdicción principal (España y UE, EEUU, LATAM, múltiples jurisdicciones)
- Quién ha iniciado o puede iniciar acción legal (regulador, empleado, consumidor, competidor, accionista)
- Qué evidencia o documentación existe que puede ser relevante
- Si ya hay asesor jurídico externo involucrado o es todo interno

Instrucción detallada: con esa información, desarrolla el framework de gestión legal:

Bloque 1 — Evaluación inicial de riesgos legales. Define el proceso de evaluación legal de emergencia: identificación de todos los posibles vectores de responsabilidad (civil, penal, administrativa, laboral, regulatoria), estimación de la exposición económica en cada vector (en rangos amplios, no como certeza), evaluación de la solidez de la posición de la empresa en cada vector, plazos legales críticos que no pueden incumplirse (notificación a la AEPD en 72 horas para brechas de datos, comunicación a autoridades bursátiles si la empresa cotiza, etc.).

Bloque 2 — Privilegio abogado-cliente y gestión de documentación. Explica los principios del privilegio abogado-cliente y cómo proteger las comunicaciones internas durante la crisis: qué comunicaciones quedan protegidas por el privilegio y cuáles no, cómo etiquetar correctamente los documentos confidenciales, protocolo de preservación de evidencias (litigation hold) para evitar destrucción accidental o intencionada de documentos relevantes, qué NO debe escribirse por email durante una crisis legal (instrucciones concretas para el equipo).

Bloque 3 — Estrategia de relación con reguladores. Si la crisis involucra a un regulador (AEPD, CNMC, Inspección de Trabajo, CNMV, regulador sectorial), define la estrategia de relación: si es mejor comunicación proactiva o esperar a ser requerido, qué información se puede compartir voluntariamente y qué debe reservarse, cómo preparar la respuesta a un requerimiento de información, cómo gestionar una investigación in situ, los beneficios de la cooperación activa en términos de reducción de sanciones.

Bloque 4 — Coordinación con el equipo de comunicación. Define el protocolo de revisión legal de todas las comunicaciones externas durante la crisis: qué tipos de declaraciones crean riesgo legal (admisiones de responsabilidad, compromisos de compensación, datos que contradicen posiciones legales), cómo decir lo que es necesario decir públicamente sin crear exposición legal adicional, el concepto de "no admitir sin negar" y cuándo es la estrategia correcta vs. cuándo la transparencia total es más ventajosa.

Bloque 5 — Gestión de demandas y reclamaciones. Define el proceso de gestión de reclamaciones que llegan durante la crisis: sistema centralizado de registro de todas las reclamaciones, criterios para resolver extrajudicialmente vs. litigar, rangos de compensación por tipo de daño que pueden autorizarse sin necesidad de aprobación superior, cómo documentar los acuerdos para que sean definitivos y no generen reclamaciones futuras.

Bloque 6 — Plan de compliance post-crisis. Una vez resuelta la crisis, define las acciones legales de refuerzo: auditoría de compliance en el área donde se originó la crisis, actualización de políticas y procedimientos, formación obligatoria al equipo relevante, revisión de contratos con terceros que puedan haber contribuido a la crisis, implementación de nuevos controles preventivos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Evaluar riesgos legales y diseñar la estrategia jurídica durante una crisis corporativa.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte al cliente durante crisis de servicio con IA',
                'description'      => 'Gestiona el volumen extraordinario de contactos y la presión emocional del equipo de soporte cuando el producto o servicio falla masivamente.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de customer support con experiencia en la gestión de situaciones de crisis de servicio: caídas del sistema que afectan a miles de usuarios, fallos masivos de producto, errores en facturación a escala, brechas de datos que impactan a clientes. Has implementado protocolos de respuesta de emergencia para equipos de soporte que pasan de recibir 100 contactos al día a gestionar 5.000 en pocas horas.

Tarea: diseñar el plan completo de gestión de soporte al cliente durante una crisis de servicio, incluyendo protocolos, scripts y gestión del equipo.

Contexto necesario: antes de desarrollar el plan, necesito que definas:
- Naturaleza del incidente (caída total del servicio, funcionalidad crítica rota, error en facturación, pérdida de datos de usuario, brecha de seguridad que afecta a cuentas)
- Número estimado de clientes afectados y porcentaje de la base total
- Canales de soporte activos (teléfono, chat en vivo, email, redes sociales, WhatsApp)
- Tamaño del equipo de soporte disponible y turno actual
- Si ya hay una solución técnica en camino y su ETA
- Tipo de clientes predominante (consumidores individuales, pymes, grandes empresas con SLA)

Instrucción central: desarrolla el plan de gestión de crisis de soporte:

Bloque 1 — Activación del modo de crisis en soporte. Define el protocolo de activación: umbral de volumen de contactos o severidad del incidente que activa el modo crisis, notificación inmediata al equipo completo (incluyendo llamar a quienes estén fuera de turno), configuración de emergencia de los canales (mensaje automático en todos los canales informando del incidente, ajuste de IVR en teléfono, banner en la web y la app), designación del incident manager de soporte que coordina toda la respuesta.

Bloque 2 — Priorización de contactos en situación de volumen extraordinario. Con un volumen de contactos 10x o 50x superior al habitual, define los criterios de triaje: qué tipos de contacto deben atenderse primero (clientes con impacto económico directo, clientes enterprise con SLA, clientes con problema de seguridad de su cuenta, resto de clientes afectados), cómo comunicar los tiempos de espera reales sin generar más frustración, cuándo es aceptable priorizar respuesta a un canal sobre otro.

Bloque 3 — Scripts de respuesta para los escenarios más frecuentes. Redacta los scripts de atención al cliente para los cinco tipos de contacto más frecuentes durante una crisis de servicio típica, con variantes para canal escrito y canal de voz: cliente que pregunta qué ha pasado y cuándo se resolverá, cliente que ha perdido datos o trabajo por el fallo, cliente que exige compensación económica inmediata, cliente que amenaza con cancelar su cuenta, cliente que ha compartido la queja públicamente en redes y contacta también por soporte. Cada script incluye la apertura empática, la información de la situación, lo que se puede y no se puede comprometer, y el cierre con próximos pasos.

Bloque 4 — Gestión de redes sociales durante la crisis. Cuando la crisis es visible en Twitter/X, LinkedIn o foros de usuarios, define el protocolo del equipo de soporte en redes: cadencia de actualización del status oficial, umbral para responder a comentarios individuales vs. actualización general, cómo gestionar a los usuarios que amplifican la crisis con contenido incendiario, cuándo y cómo cerrar el bucle con usuarios que recibieron respuesta durante la crisis.

Bloque 5 — Bienestar del equipo de soporte durante la crisis. Los agentes de soporte absorben la frustración de miles de clientes durante horas. Define el plan de bienestar del equipo: rotaciones de canal para evitar el burnout del canal más intenso (teléfono o chat), sesiones de desahogo rápido entre compañeros cada 90 minutos, reconocimiento en tiempo real durante la crisis, protocolo si un agente necesita un descanso de urgencia. Incluye el mensaje que el responsable de equipo debería enviar al equipo en las primeras horas de la crisis.

Bloque 6 — Comunicación post-crisis con clientes afectados. Una vez resuelto el incidente, diseña la comunicación de cierre: email de disculpa y explicación a todos los afectados (plantilla lista para personalizar), política de compensación aplicable, respuesta a los clientes que contactaron durante la crisis y aún no tienen resolución satisfactoria, encuesta de satisfacción post-crisis para medir el impacto en NPS y CSAT.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Activar y gestionar el protocolo de soporte de emergencia cuando un incidente masivo colapsa los canales de atención al cliente.',
                'vote_score'       => 61,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría de comunicación de crisis para pymes y autónomos con IA',
                'description'      => 'Guía a freelancers y pequeñas empresas para gestionar su reputación y comunicación cuando enfrentan una crisis pública o profesional.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de comunicación de crisis especializado en pymes, negocios locales, profesionales independientes y marcas personales. Entiendes que una persona autónoma o una pequeña empresa no tiene el departamento de comunicación de una multinacional, pero puede sufrir el mismo daño reputacional con mucho menos capacidad de respuesta. Has ayudado a restaurantes a recuperarse de reseñas negativas virales, a profesionales independientes a gestionar acusaciones públicas falsas, y a pequeñas marcas a sobrevivir a errores que se amplifican en redes sociales.

Tarea: desarrollar una guía completa de gestión de crisis de comunicación adaptada específicamente a la realidad y los recursos de un profesional independiente o una pequeña empresa.

Contexto necesario: antes de desarrollar la guía, necesito que me describas la situación:
- Tipo de crisis (reseña negativa viral, acusación pública en redes, error propio que se ha hecho público, mal servicio que un cliente ha difundido, conflicto con un colaborador que se ha hecho visible, información falsa que circula sobre ti o tu negocio)
- Canal donde está ocurriendo (Google Reviews, TripAdvisor, LinkedIn, Instagram, Twitter/X, foro sectorial, boca a boca en tu comunidad)
- Alcance actual (cuántas personas lo han visto o interactuado, si hay medios locales o influencers involucrados)
- Tu relación con la persona que generó la crisis (cliente, ex-empleado, competidor, desconocido)
- Si hay algo de cierto en lo que se dice o es completamente falso
- Tus recursos actuales (tiempo disponible para gestionar esto, si tienes alguien de confianza que te pueda ayudar)

Instrucción central: desarrolla la guía de gestión de crisis personalizada:

Bloque 1 — Evaluación de la gravedad real. Explica cómo evaluar objetivamente si la situación es una crisis real o un incidente menor que puede resolverse fácilmente: escala de gravedad del 1 al 5 con criterios claros para cada nivel, factores que amplifican el riesgo (que lo comparta alguien con muchos seguidores, que sea un sector muy local donde todos se conocen, que haya un elemento emocional fuerte como maltrato o engaño), factores que mitigan el riesgo (el emisor tiene poca credibilidad, el contenido es fácilmente rebatible con evidencia, la audiencia es pequeña). En función del nivel de gravedad, indica qué tipo de respuesta corresponde.

Bloque 2 — La decisión de responder o no responder. Explica cuándo es mejor responder y cuándo el silencio es la estrategia correcta: en una reseña de Google, responder siempre (es visible para futuros clientes y el algoritmo lo valora), en una acusación en redes de alguien con poca audiencia, puede ser mejor no amplificarla con una respuesta, en una acusación falsa con evidencia que la refuta, responder con los hechos es necesario. Proporciona el árbol de decisión completo.

Bloque 3 — Cómo redactar la respuesta perfecta como pyme o freelancer. Redacta las normas de la respuesta ideal para un profesional independiente: tono humano y personal (no corporativo, tú eres la marca), reconocer lo que tenga de válido la crítica aunque duela, corregir sin agredir los elementos que son falsos o exagerados, ofrecer una solución concreta si aplica, invitar al diálogo privado para resolver el problema, evitar entrar en debates públicos prolongados. Incluye tres ejemplos de respuesta a tipos de crítica frecuentes: reseña injusta, acusación pública en redes y conflicto con ex-colaborador.

Bloque 4 — Gestión de la evidencia y documentación. Para cuando la acusación es falsa o exagerada: qué evidencia recopilar (capturas de pantalla con fecha, contratos, conversaciones, facturas, testimonios de terceros), cómo conservarla correctamente para un posible uso legal posterior, cuándo y cómo presentar la evidencia públicamente de forma que sea persuasiva sin resultar agresiva, si considerar una denuncia por calumnias o injurias y cuándo vale la pena (rara vez, pero a veces sí).

Bloque 5 — Movilizar a tu comunidad de manera ética. Si tienes clientes o colaboradores satisfechos, pueden ser tu mejor defensa. Explica cómo activar tu red de forma ética durante una crisis: pedir testimonios a clientes reales que quieran compartirlos (sin presionar), compartir tu versión de los hechos con tus seguidores de manera transparente y sin victimismo, cómo el contenido positivo y consistente en el tiempo contrarresta el negativo. Distingue entre movilizar tu comunidad de forma auténtica vs. prácticas que pueden empeorar la situación (comprar reseñas, campañas coordinadas de ataque).

Bloque 6 — Plan de reputación preventivo para el futuro. Una vez gestionada la crisis, redacta las cinco acciones que todo profesional independiente o pyme debe implementar para estar preparado ante futuras crisis: perfil de Google My Business optimizado y con respuestas a reseñas, presencia activa en las plataformas relevantes de tu sector, base de clientes satisfechos que puedan dar testimonio, política clara de resolución de conflictos con clientes, y un "kit de crisis" básico (plantillas de respuesta, contacto de un asesor de confianza, acceso a tus cuentas de redes sociales en todo momento).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Ayudar a un profesional independiente o pequeño negocio a gestionar una crisis de reputación online con recursos limitados.',
                'vote_score'       => 67,
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
