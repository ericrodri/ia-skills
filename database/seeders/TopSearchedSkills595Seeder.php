<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills595Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de servicios de transporte urbano con IA',
                'description'      => 'Usa la IA para crear campañas de marketing segmentadas que aumenten la adopción de servicios de transporte urbano y movilidad compartida.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing de servicios de transporte urbano y movilidad inteligente. Tu misión es ayudarme a diseñar una estrategia de marketing completa para un servicio de transporte urbano que incorpora tecnología de gestión de flotas con inteligencia artificial.

Contexto del proyecto:
Gestiono el área de marketing de una empresa de transporte urbano (puede ser autobuses, VTC, bicicletas eléctricas o patinetes compartidos) que ha implementado un sistema de gestión de flotas basado en IA. Necesito comunicar las ventajas de este servicio a los usuarios potenciales de la ciudad y diferenciarnos de la competencia.

Tarea principal:
Desarrolla una estrategia de marketing integral que incluya los siguientes elementos:

1. Análisis del público objetivo: Define los segmentos de usuarios más relevantes para un servicio de transporte urbano inteligente. Considera perfiles como trabajadores en trayectos diarios, estudiantes universitarios, turistas, personas mayores que buscan accesibilidad y ciudadanos comprometidos con el medio ambiente. Para cada segmento, describe sus motivaciones principales, barreras de adopción y mensajes clave que resonarán con ellos.

2. Propuesta de valor diferenciada: Redacta tres propuestas de valor distintas que destaquen los beneficios de la IA en el transporte: la precisión en tiempos de llegada gracias a la predicción algorítmica, la optimización de rutas en tiempo real según el tráfico, y la reducción de la huella de carbono mediante el uso eficiente de la flota.

3. Plan de contenidos para redes sociales: Crea un calendario de contenidos para un mes completo con publicaciones diarias para Instagram, LinkedIn y Twitter/X. Cada publicación debe tener su copy, el hashtag principal recomendado y el formato visual sugerido (infografía, vídeo corto, carrusel, etc.). Los contenidos deben alternar entre educación sobre la tecnología IA, testimonios de usuarios, datos de impacto ambiental y promociones de uso.

4. Estrategia de captación y retención: Diseña un funnel de conversión específico para apps de movilidad urbana. Describe las acciones de marketing para cada etapa: concienciación (awareness), consideración, primera descarga, primer viaje, y fidelización. Incluye ideas para programas de referidos y recompensas por uso frecuente.

5. Métricas e indicadores clave: Establece un cuadro de mandos con los KPIs más importantes para medir el éxito de la estrategia. Incluye métricas de adquisición (coste por descarga, coste por primer viaje), métricas de engagement (frecuencia de uso semanal, tasa de retención a 30 y 90 días) y métricas de satisfacción (NPS, valoración media en tiendas de aplicaciones).

6. Campaña de lanzamiento: Propón una campaña de lanzamiento de 4 semanas para una ciudad nueva. Incluye acciones offline (presencia en puntos de movilidad, colaboración con instituciones locales) y online (publicidad programática, influencers de movilidad sostenible, relaciones con medios locales).

Formato de respuesta esperado:
Estructura la respuesta en secciones claramente diferenciadas. Usa ejemplos concretos de mensajes y copies listos para usar. Incluye tablas cuando sea útil para visualizar calendarios o comparativas. El tono debe ser profesional pero accesible, orientado a resultados medibles.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de marketing para servicios de transporte urbano inteligente',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de sistema de gestión de flotas con IA',
                'description'      => 'Diseña y documenta la arquitectura técnica de un sistema de gestión de flotas urbanas impulsado por inteligencia artificial y datos en tiempo real.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en sistemas de transporte inteligente y aplicaciones de gestión de flotas. Necesito tu ayuda para diseñar la arquitectura técnica completa de un sistema de gestión de flotas urbanas con inteligencia artificial.

Contexto del sistema:
Quiero construir una plataforma de gestión de flotas para una empresa de transporte urbano que opera entre 50 y 500 vehículos (autobuses, furgonetas de reparto o vehículos compartidos). El sistema debe optimizar rutas en tiempo real, predecir el mantenimiento preventivo y reducir costes operativos mediante el uso de modelos de machine learning.

Objetivo de la tarea:
Diseña la arquitectura técnica completa del sistema y proporciona guía de implementación para el equipo de desarrollo.

Sección 1 - Diseño de la arquitectura:
Describe la arquitectura del sistema usando un enfoque de microservicios. Define los servicios principales que deben existir: servicio de telemetría de vehículos (ingesta de datos GPS, velocidad, consumo), servicio de optimización de rutas, servicio de predicción de mantenimiento, servicio de alertas y notificaciones, y servicio de reporting. Para cada microservicio, especifica las tecnologías recomendadas, el patrón de comunicación (REST, gRPC, colas de mensajes) y las dependencias entre servicios.

Sección 2 - Ingesta y procesamiento de datos en tiempo real:
Explica cómo implementar el pipeline de datos desde los dispositivos IoT instalados en los vehículos hasta el motor de decisiones IA. Incluye la elección de broker de mensajes (Kafka vs. RabbitMQ), el procesamiento de streams (Apache Flink o Spark Streaming) y el almacenamiento en capas (datos calientes en Redis, datos históricos en PostgreSQL o TimescaleDB).

Sección 3 - Modelos de inteligencia artificial:
Describe los modelos de ML que forman el núcleo inteligente del sistema. Para la optimización de rutas, explica cómo implementar un modelo de reinforcement learning o algoritmos heurísticos como el problema del viajante (TSP) con restricciones de tiempo. Para la predicción de mantenimiento, detalla un modelo de clasificación o regresión entrenado sobre datos de telemetría histórica. Incluye el pipeline de entrenamiento, validación y despliegue continuo (MLOps) de estos modelos.

Sección 4 - Integración con APIs externas:
Detalla las integraciones necesarias con servicios de terceros: APIs de mapas y tráfico (Google Maps Platform, HERE o TomTom), servicios meteorológicos para ajustar rutas, APIs de proveedores de combustible o carga eléctrica, y sistemas ERP/SAP de la empresa. Proporciona ejemplos de código en Python o Node.js para las integraciones más críticas.

Sección 5 - Seguridad y privacidad:
Aborda los aspectos de seguridad específicos de los sistemas de transporte: autenticación de dispositivos IoT mediante certificados TLS, cifrado de datos de localización de conductores cumpliendo el RGPD, control de acceso basado en roles (RBAC) y auditoría de acciones críticas.

Sección 6 - Plan de implementación por fases:
Propón un roadmap de desarrollo en tres fases de tres meses cada una. Fase 1: infraestructura base y telemetría básica. Fase 2: modelos de IA y optimización de rutas. Fase 3: mantenimiento predictivo y reporting avanzado. Para cada fase, indica las historias de usuario prioritarias y los criterios de aceptación técnicos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Arquitectura técnica de plataforma IoT y IA para gestión de flotas',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de interfaz para apps de movilidad urbana con IA',
                'description'      => 'Crea el diseño UX/UI de una aplicación de movilidad urbana que integra recomendaciones de IA para optimizar los desplazamientos del usuario.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de experiencia de usuario (UX/UI) especializado en aplicaciones de movilidad urbana y transporte inteligente. Necesito tu guía experta para diseñar una aplicación móvil de movilidad urbana que integra inteligencia artificial para personalizar los desplazamientos de cada usuario.

Descripción del producto:
La app permite a los usuarios de una ciudad planificar y ejecutar sus desplazamientos combinando diferentes medios de transporte (metro, autobús, bicicleta eléctrica, patinete, taxi) con recomendaciones personalizadas de IA que aprenden de sus hábitos y preferencias.

Objetivo de diseño:
Diseña una experiencia de usuario que sea intuitiva para usuarios de todas las edades, que comunique claramente las recomendaciones de la IA y que diferencie visualmente cuándo el sistema está usando inteligencia artificial para tomar decisiones.

Bloque 1 - Investigación y arquetipos de usuario:
Define tres arquetipos de usuario (personas) detallados. Incluye para cada uno: nombre, edad, ocupación, nivel de familiaridad tecnológica, sus objetivos principales al usar la app, sus frustraciones más comunes con el transporte actual y los escenarios de uso más frecuentes. Estos arquetipos deben guiar todas las decisiones de diseño posteriores.

Bloque 2 - Mapa de flujo de usuario (User Flow):
Describe los flujos de usuario principales en texto estructurado. Flujo 1: primer uso y onboarding donde la IA aprende las preferencias del usuario. Flujo 2: planificación de un viaje habitual con recomendación proactiva de la IA antes de que el usuario lo solicite. Flujo 3: adaptación en tiempo real cuando hay incidencias en el transporte. Para cada flujo, describe cada pantalla, las decisiones del usuario y los estados de la interfaz.

Bloque 3 - Sistema de diseño y componentes:
Propón las guías de estilo para la aplicación. Incluye una paleta de colores con sus usos específicos (color principal de marca, color de confirmación, color de alerta IA, color de error). Define la tipografía principal y de apoyo. Diseña en texto los componentes de interfaz más importantes: la tarjeta de ruta recomendada por IA, el widget de tiempo real en el mapa, las notificaciones proactivas y la barra de progreso del viaje activo.

Bloque 4 - Comunicación visual de la IA:
Este es el desafío más importante del diseño. Explica cómo diseñar visualmente la presencia de la IA en la app de forma que inspire confianza sin resultar intrusiva. Propón un sistema de iconografía específico para las acciones de IA, el lenguaje de copywriting para las recomendaciones automáticas (cómo debe hablar la IA al usuario), y las microinteracciones que confirman que la IA ha procesado los datos del usuario.

Bloque 5 - Accesibilidad y diseño inclusivo:
Detalla los requisitos de accesibilidad según WCAG 2.1 nivel AA aplicados específicamente a esta app. Aborda el tamaño mínimo de elementos táctiles, el contraste de colores en condiciones de luz solar intensa, el soporte para lectores de pantalla en las recomendaciones de IA y el modo de alto contraste para usuarios con baja visión.

Bloque 6 - Prototipado y validación:
Describe el plan de prototipado y las pruebas de usabilidad. Propón cinco tareas específicas para las sesiones de test con usuarios reales, los criterios de éxito medibles para cada tarea y las preguntas del cuestionario post-test para evaluar la confianza en las recomendaciones de la IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseño UX/UI de app de movilidad urbana con IA integrada',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas B2B de soluciones de gestión de flotas con IA',
                'description'      => 'Desarrolla argumentarios de venta y estrategias de prospección para comercializar soluciones tecnológicas de gestión de flotas con IA a empresas de transporte.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de ventas B2B especializado en tecnología para el sector del transporte y la logística. Necesito tu ayuda para construir un proceso de ventas completo para comercializar una solución de gestión de flotas con inteligencia artificial a empresas medianas y grandes del sector del transporte.

Perfil del producto a vender:
Plataforma SaaS de gestión de flotas que combina telemetría en tiempo real, optimización de rutas mediante IA y mantenimiento predictivo. Precio entre 50 y 500 euros por vehículo al mes según el tamaño de la flota. Ciclo de venta típico de 3 a 9 meses.

Perfil del comprador objetivo:
Empresas de transporte de viajeros, empresas de reparto de última milla, flotas de vehículos corporativos y operadores de transporte público concesionado. El comprador económico suele ser el director de operaciones o el director financiero; el usuario técnico es el responsable de flota o el jefe de taller.

Apartado 1 - Mapa de stakeholders y sus motivaciones:
Describe los diferentes perfiles de decisión dentro de una empresa de transporte. Para cada uno (director de operaciones, director financiero, responsable de flota, director de TI y conductor) explica cuáles son sus objetivos profesionales, sus miedos ante la adopción de nueva tecnología y los argumentos que más les convencen. Diseña mensajes de venta diferenciados para cada perfil.

Apartado 2 - Metodología de prospección y cualificación:
Propón un proceso de prospección basado en datos. Describe cómo identificar empresas de transporte con flotas entre 30 y 200 vehículos que estén en el momento ideal de compra (señales de compra: renovación de contrato, crecimiento de flota, incidentes recientes de mantenimiento). Crea una secuencia de prospección multicanal de 8 pasos combinando LinkedIn, email y llamada telefónica, con los mensajes exactos para cada contacto.

Apartado 3 - Argumentario de ventas y gestión de objeciones:
Desarrolla el argumentario central de ventas estructurado en el modelo SPIN (Situación, Problema, Implicación, Necesidad-Beneficio). Crea las 20 preguntas más importantes para el discovery. Después, anticipa las 10 objeciones más frecuentes que pone el sector del transporte ("ya tenemos un sistema", "el precio es muy alto", "los conductores no lo adoptarán", "necesitamos datos propios antes de usar IA") y escribe la respuesta modelo para cada una.

Apartado 4 - Construcción del caso de negocio (ROI):
Diseña una plantilla de cálculo de ROI que el comercial pueda completar con el cliente durante la fase de consideración. Incluye las variables de ahorro en combustible (media del 8-12% con optimización de rutas), reducción de costes de mantenimiento no planificado (media del 20-25% con mantenimiento predictivo), reducción de accidentes y siniestros, y mejora de productividad por reducción de tiempos muertos. Muestra un ejemplo numérico para una flota de 80 vehículos.

Apartado 5 - Estrategia de cierre y negociación:
Describe las tácticas de cierre más efectivas para este tipo de venta tecnológica compleja. Propón cómo estructurar el piloto o proof of concept (POC) de 30-60 días para reducir el riesgo percibido. Explica cómo negociar contratos plurianuales con descuento a cambio de compromiso de volumen y cómo gestionar el proceso de licitación pública cuando el cliente es un operador de transporte público.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Proceso de venta B2B de software de gestión de flotas con IA',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management para plataformas de transporte inteligente',
                'description'      => 'Define la visión de producto, el roadmap y las métricas de una plataforma de transporte urbano potenciada por inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Eres un Product Manager senior con experiencia en plataformas de transporte urbano y aplicaciones de movilidad como servicio (MaaS). Necesito tu ayuda para definir la estrategia de producto completa de una plataforma de transporte inteligente que usa IA para optimizar la experiencia del usuario y la eficiencia operativa.

Contexto del producto:
La plataforma conecta a los usuarios de una ciudad con múltiples operadores de transporte (autobuses municipales, taxi, VTC, bicicleta y patinete compartido) y usa IA para recomendar la mejor combinación de medios de transporte según el perfil del usuario, el tráfico en tiempo real y la disponibilidad de servicios.

Objetivo de la sesión:
Ayúdame a construir el marco de gestión de producto completo para los próximos 12 meses.

Área 1 - Visión y estrategia de producto:
Redacta la declaración de visión del producto a 3 años. Define los tres horizontes de crecimiento del producto: el core actual (integración multimodal básica), la expansión (personalización profunda con IA) y la transformación (plataforma de datos de movilidad para ciudades). Para cada horizonte, describe las capacidades clave que necesita el producto y cómo la IA evoluciona en cada etapa.

Área 2 - Discovery y validación de hipótesis:
Propón un proceso de discovery continuo adaptado a un producto de movilidad urbana. Define cómo recoger feedback de tres tipos de usuarios: viajeros diarios habituales, usuarios ocasionales y usuarios de accesibilidad reducida. Diseña un sistema de experimentos A/B para validar las funcionalidades de IA, incluyendo cómo aislar el efecto de la recomendación algorítmica del resto de variables. Establece los criterios de go/no-go para lanzar nuevas funcionalidades de IA al 100% de los usuarios.

Área 3 - Priorización del backlog:
Aplica el framework RICE (Reach, Impact, Confidence, Effort) a las siguientes iniciativas de producto para los próximos dos trimestres: modo viajero habitual con predicción proactiva, integración con calendarios del usuario para anticipar desplazamientos, alertas de incidencias personalizadas, modo bajo consumo de datos, gamificación de desplazamientos sostenibles y panel de huella de carbono personal. Justifica la puntuación de cada dimensión y ordénalas por prioridad resultante.

Área 4 - Métricas y OKRs:
Define los OKRs para los próximos dos trimestres centrados en la adopción de las funciones de IA. Para cada objetivo, escribe entre 3 y 4 key results medibles. Complementa los OKRs con un North Star Metric que capture el valor real que la plataforma entrega a los usuarios y que esté correlacionado con la retención a largo plazo. Diseña el cuadro de mandos semanal del equipo de producto con las métricas de salud del producto, las métricas de uso de IA y las métricas de negocio.

Área 5 - Gestión de stakeholders y comunicación:
Describe cómo gestionar la relación con los tres tipos de stakeholders más complejos de un producto de movilidad: los operadores de transporte socios (que aportan datos pero también son competidores), el ayuntamiento o administración local (que regula y a veces financia) y el equipo de ingeniería (que debe equilibrar deuda técnica y velocidad de entrega). Para cada uno, propón la cadencia de comunicación, el formato de reporte y las expectativas que hay que gestionar proactivamente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Estrategia y roadmap de producto para plataforma MaaS con IA',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de conductores y personal de flotas con IA',
                'description'      => 'Usa la IA para optimizar la gestión del personal de conducción, turnos, formación y bienestar laboral en empresas de transporte urbano.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en recursos humanos con experiencia en el sector del transporte y la logística. Necesito tu ayuda para diseñar un sistema de gestión de personas para conductores y personal de flota que aproveche la inteligencia artificial para mejorar tanto la eficiencia operativa como el bienestar de los trabajadores.

Contexto de la empresa:
Gestiono los RRHH de una empresa de transporte urbano con 150 conductores, 20 mecánicos y 15 personas en administración y operaciones. Tenemos tres turnos, operamos 365 días al año y enfrentamos desafíos típicos del sector: alta rotación, absentismo, dificultad para cubrir turnos de madrugada y necesidad de reciclaje formativo continuo.

Objetivo principal:
Diseñar un modelo de gestión de personas centrado en el conductor que use datos e IA de forma ética y transparente para mejorar las condiciones de trabajo y la eficiencia de la plantilla.

Módulo 1 - Planificación inteligente de turnos:
Explica cómo implementar un sistema de planificación de turnos asistido por IA que respete la normativa de tiempos de conducción y descanso (Reglamento CE 561/2006), las preferencias individuales de los conductores y las necesidades operativas de la empresa. Describe el algoritmo de asignación óptima, cómo recoger las preferencias de los conductores de forma digital y el proceso de gestión de cambios y coberturas de última hora. Incluye cómo el sistema aprende de las solicitudes históricas para anticipar necesidades futuras.

Módulo 2 - Selección y onboarding de conductores:
Diseña el proceso de selección para conductores de transporte urbano asistido por IA. Define el perfil competencial ideal más allá del carnet de conducir (tolerancia al estrés, orientación al cliente, habilidades digitales básicas). Crea una guía de entrevistas por competencias con las preguntas específicas para detectar cada competencia. Diseña el plan de onboarding de 30-60-90 días para nuevos conductores, incluyendo la asignación de un conductor mentor y las evaluaciones de seguimiento.

Módulo 3 - Formación continua y reciclaje:
Propón un programa de formación continua para conductores que incluya módulos de conducción eficiente con IA (eco-driving), atención al cliente en el transporte público, manejo de situaciones de emergencia y uso de las herramientas digitales de la empresa. Diseña el sistema de microformación (píldoras de 5 minutos) que los conductores puedan completar en sus tiempos de espera. Establece los certificados internos y cómo impactan en la carrera profesional dentro de la empresa.

Módulo 4 - Bienestar, prevención y gestión del absentismo:
Describe cómo usar datos de telemetría y encuestas periódicas para identificar conductores en riesgo de agotamiento o insatisfacción antes de que se conviertan en bajas. Propón intervenciones preventivas: rotación de rutas para reducir la monotonía, acceso a servicios de salud mental, programas de reconocimiento y pequeños incentivos por asistencia y conducción segura. Establece los límites éticos claros del uso de datos de conducción para evaluar a las personas y asegúrate de que el sistema cumple el RGPD y el Estatuto de los Trabajadores.

Módulo 5 - Clima laboral y comunicación interna:
Diseña el sistema de escucha activa de los conductores: encuestas de clima laboral trimestrales adaptadas a trabajadores que no están en oficina, canales de comunicación interna accesibles desde el móvil y el proceso de recogida y respuesta a sugerencias de mejora. Propón un plan de reconocimiento que valore tanto los resultados (puntualidad, satisfacción de clientes) como los comportamientos (compañerismo, actitud de mejora continua).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Sistema de gestión de personas para conductores de flota con IA',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Optimización financiera de flotas de transporte con IA',
                'description'      => 'Aplica la inteligencia artificial al análisis de costes, presupuestación y rentabilidad de flotas de transporte urbano para mejorar la salud financiera de la empresa.',
                'prompt_content'   => <<<'EOT'
Eres un director financiero con experiencia en empresas del sector del transporte y la logística. Necesito tu ayuda para construir un modelo de gestión financiera de una flota de transporte urbano que aproveche la inteligencia artificial para optimizar costes, mejorar la previsión de tesorería y maximizar la rentabilidad por vehículo.

Contexto financiero:
Dirijo las finanzas de una empresa de transporte urbano con 80 vehículos. Nuestros principales costes son: combustible o energía eléctrica (35% de los costes totales), personal de conducción y taller (40%), mantenimiento y reparaciones (12%), seguros y tasas (8%) y overhead administrativo (5%). Los ingresos provienen de contratos de servicio con administraciones públicas (70%) y de taquilla directa (30%).

Objetivo de la sesión:
Construye un marco financiero completo para la gestión inteligente de la flota.

Bloque financiero 1 - Modelo de costes por vehículo:
Diseña una metodología de contabilidad analítica por vehículo que permita conocer el coste real de operación de cada unidad de la flota. Define las categorías de costes directos (combustible, neumáticos, mantenimiento correctivo) y costes indirectos asignables (parte proporcional del seguro, depreciación, coste del conductor asignado). Establece el cálculo del coste por kilómetro operado como métrica base de referencia del sector.

Bloque financiero 2 - Aplicaciones de IA en la reducción de costes:
Describe cómo la IA impacta en cada línea de coste principal. En combustible: cómo los sistemas de eco-driving y optimización de rutas reducen el consumo entre un 8% y un 15%, y cómo modelar el ahorro esperado para tu flota específica. En mantenimiento: cómo el mantenimiento predictivo reduce las averías no planificadas (que cuestan entre 3 y 5 veces más que el mantenimiento preventivo) y cómo calcular el ROI del sistema predictivo. En gestión de turnos: cómo la planificación algorítmica reduce las horas extras y las ineficiencias en la cobertura de servicios.

Bloque financiero 3 - Presupuestación y forecasting:
Propón un modelo de presupuestación anual y previsión mensual adaptado a la estacionalidad del transporte urbano. Explica cómo construir un modelo de forecasting de costes de mantenimiento basado en datos históricos de averías y el estado actual de la flota (edad de vehículos, kilómetros recorridos). Describe cómo integrar variables externas en el modelo: precio del combustible o la electricidad, inflación salarial del convenio colectivo del transporte y variaciones en el volumen de servicio contratado.

Bloque financiero 4 - Gestión de la inversión en renovación de flota:
Diseña el modelo de decisión para la renovación de vehículos. Establece los criterios financieros y operativos para decidir cuándo retirar un vehículo (coste de mantenimiento acumulado, fiabilidad, valor residual). Compara financieramente las opciones de adquisición: compra directa, leasing operativo, renting con mantenimiento incluido y modelos de pago por uso. Calcula el impacto en el balance y en la cuenta de resultados de cada opción para una flota de 80 vehículos que necesita renovar 20 unidades.

Bloque financiero 5 - Reporting financiero para la dirección:
Diseña el cuadro de mandos financiero mensual que debe recibir el comité de dirección. Incluye: resultado por línea de negocio, coste por kilómetro real vs. presupuestado, rentabilidad por contrato de servicio, posición de tesorería y previsión a 13 semanas, y ratio de inversión en mantenimiento preventivo vs. correctivo. Define las alertas automáticas que debe generar el sistema cuando algún indicador se desvíe más de un 5% del presupuesto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Modelo financiero y de costes para flotas de transporte con IA',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión legal y regulatoria del transporte urbano con IA',
                'description'      => 'Navega el marco legal del transporte urbano y la regulación de la IA para implementar soluciones tecnológicas en flotas con total seguridad jurídica.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho del transporte, regulación tecnológica y protección de datos. Necesito tu análisis jurídico completo para implementar un sistema de gestión de flotas con inteligencia artificial en una empresa de transporte urbano en España, cumpliendo con todas las normativas aplicables.

Contexto jurídico del proyecto:
La empresa opera servicios de transporte regular de viajeros bajo concesión administrativa y quiere implementar: telemetría en tiempo real de vehículos y conductores, sistema de IA para optimización de rutas, análisis de conducción individual para programas de seguridad vial y un modelo de mantenimiento predictivo basado en datos de los vehículos.

Objetivo del análisis:
Proporciona un mapa regulatorio completo y las acciones concretas necesarias para operar el sistema con seguridad jurídica total.

Área legal 1 - Marco regulatorio del transporte:
Analiza las normativas aplicables al transporte urbano regular en España. Incluye la Ley de Ordenación de los Transportes Terrestres (LOTT), el Reglamento CE 561/2006 sobre tiempos de conducción y descanso, el Real Decreto que regula los tacógrafos digitales, y las competencias autonómicas y municipales en transporte urbano. Explica cómo la digitalización y la IA interactúan con estas normativas y qué obligaciones adicionales generan.

Área legal 2 - Protección de datos y RGPD en el transporte:
Detalla las implicaciones del Reglamento General de Protección de Datos para el sistema de telemetría. Los datos de geolocalización de conductores son datos personales y su tratamiento requiere una base jurídica legítima. Analiza las opciones (interés legítimo, contrato de trabajo, obligación legal) y cuál es la más sólida. Describe los requisitos de información al trabajador, el registro de actividades de tratamiento que debe llevarse, los plazos máximos de conservación de los datos y cómo gestionar el derecho de acceso de los conductores a sus propios datos.

Área legal 3 - Reglamento Europeo de IA (AI Act):
Analiza cómo el AI Act europeo, en vigor desde 2024 y con pleno efecto desde 2026, afecta al sistema de gestión de flotas. Clasifica los usos de IA del sistema según las categorías de riesgo del AI Act: el sistema de optimización de rutas (probablemente bajo riesgo), el análisis de conducción individual para evaluación del conductor (posiblemente alto riesgo por impactar en el empleo) y las alertas de fatiga o comportamiento al volante. Para los usos de alto riesgo, detalla las obligaciones de transparencia, documentación técnica, supervisión humana y registro de incidentes.

Área legal 4 - Relaciones laborales y negociación colectiva:
Aborda el marco legal de la introducción de tecnología de vigilancia y control de trabajadores. Analiza el artículo 20 bis del Estatuto de los Trabajadores sobre los derechos digitales de los trabajadores, la obligación de información y negociación con el comité de empresa antes de implementar sistemas de control digital, y los límites jurisprudenciales al uso de datos de conducción en expedientes disciplinarios. Propón el protocolo legal de implementación que minimice el riesgo de conflicto laboral.

Área legal 5 - Contratos tecnológicos y responsabilidad civil:
Describe los elementos esenciales que deben incluir los contratos con el proveedor de la plataforma de gestión de flotas: cláusulas de nivel de servicio (SLA), responsabilidad por fallos del sistema que causen accidentes o sanciones administrativas, derechos sobre los datos generados, protección ante la insolvencia del proveedor y auditoría del sistema de IA. Analiza también la responsabilidad civil de la empresa cuando un sistema de IA toma una decisión incorrecta que contribuye a un accidente de tráfico, a la luz de la nueva normativa europea de responsabilidad por productos de IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Mapa legal y regulatorio para implementar IA en flotas de transporte',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente en servicios de transporte urbano con IA',
                'description'      => 'Diseña un sistema de atención al usuario de transporte urbano impulsado por IA que resuelva incidencias, gestione reclamaciones y mejore la satisfacción del viajero.',
                'prompt_content'   => <<<'EOT'
Eres un experto en experiencia de cliente (CX) y atención al usuario especializado en servicios de transporte público y movilidad urbana. Necesito tu ayuda para diseñar e implementar un sistema de atención al cliente impulsado por inteligencia artificial para una empresa de transporte urbano.

Contexto del servicio:
La empresa opera servicios de transporte urbano (autobuses, tranvía o metro ligero) con más de 50.000 viajes diarios. Recibimos más de 500 contactos al día por múltiples canales: app móvil, web, teléfono, redes sociales y atención presencial en oficinas. Los motivos más frecuentes son: información sobre líneas y horarios, incidencias en el servicio, reclamaciones por tarjetas de transporte, objetos perdidos, quejas sobre comportamiento y sugerencias de mejora.

Objetivo del proyecto:
Diseñar un sistema de atención al cliente omnicanal con IA que resuelva el 70% de los contactos de forma autónoma y derive al equipo humano únicamente los casos complejos o sensibles.

Componente 1 - Arquitectura del sistema de atención omnicanal:
Describe la arquitectura del sistema de atención al cliente con IA. Define los canales de contacto prioritarios y cómo unificarlos en una plataforma única. Explica el diseño del chatbot conversacional para la app y la web, el sistema de respuesta automática en redes sociales, la integración con el IVR (respuesta de voz interactiva) para el teléfono y el dashboard del agente humano que concentra todas las interacciones. Describe cómo la IA mantiene el contexto del usuario a través de los cambios de canal.

Componente 2 - Diseño del árbol de conversación y flujos de resolución:
Diseña los flujos de conversación para los cinco tipos de contacto más frecuentes. Para cada tipo, describe el árbol de decisión: cómo la IA identifica la intención del usuario, qué preguntas de clarificación hace si es necesario, qué información consulta en tiempo real (estado de la línea, historial del usuario, saldo de la tarjeta) y cómo presenta la resolución. Incluye los criterios de escalado al agente humano: cuándo la IA debe reconocer sus limitaciones y transferir la conversación con todo el contexto al agente.

Componente 3 - Gestión de reclamaciones formales con IA:
Describe el proceso de gestión de reclamaciones asistido por IA. Explica cómo la IA clasifica la reclamación según su tipología y gravedad, extrae automáticamente los datos relevantes del mensaje del usuario (línea, fecha, hora, incidente), consulta los datos operativos del momento para verificar la reclamación, genera una respuesta preliminar personalizada y asigna la reclamación al departamento responsable con toda la información estructurada. Diseña la plantilla de respuesta automatizada que cumpla con los plazos legales de respuesta del transporte público.

Componente 4 - Sistema de voz del cliente y mejora continua:
Diseña un sistema de análisis de feedback de usuarios que la IA procese de forma continua. Incluye encuestas de satisfacción post-viaje de tres preguntas enviadas automáticamente, análisis de sentimiento de los comentarios en redes sociales y en la app, detección de patrones de quejas recurrentes que indiquen problemas sistémicos en el servicio (por ejemplo, si 50 usuarios se quejan de la línea 7 el mismo martes, la IA debe generar una alerta operativa automática), y el reporte mensual de CX que la IA elabora automáticamente para la dirección.

Componente 5 - Formación del equipo humano para trabajar con IA:
Propón el plan de formación para los agentes de atención al cliente que trabajarán junto al sistema de IA. Aborda cómo cambiar la mentalidad del equipo (la IA no elimina puestos, los eleva a casos más complejos), qué habilidades nuevas necesitan desarrollar (interpretación de contexto de IA, gestión de emociones en escalados complejos, supervisión de la calidad del bot), y cómo medir el desempeño del equipo híbrido humano-IA con métricas que valoren la calidad de la resolución y no solo la velocidad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Sistema de atención al cliente omnicanal con IA para transporte urbano',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría freelance en movilidad urbana inteligente con IA',
                'description'      => 'Posiciónate como consultor freelance especializado en proyectos de movilidad urbana y gestión de flotas con IA para ayuntamientos y empresas del sector.',
                'prompt_content'   => <<<'EOT'
Eres un consultor freelance senior especializado en proyectos de movilidad urbana inteligente y transformación digital del transporte. Necesito tu ayuda para construir mi negocio de consultoría independiente en el nicho de la inteligencia artificial aplicada al transporte urbano y la gestión de flotas.

Mi situación actual:
Tengo experiencia de 8 años en el sector del transporte (operaciones, tecnología o gestión de proyectos) y quiero dar el salto a la consultoría freelance. Mi objetivo es trabajar con ayuntamientos, operadores de transporte, empresas de logística urbana y startups de movilidad que necesiten orientación experta para implementar tecnología de IA de forma efectiva.

Objetivo de esta sesión:
Construye el plan de negocio y la estrategia de posicionamiento completa para lanzar mi consultoría en los próximos 90 días.

Pilar 1 - Posicionamiento y propuesta de valor:
Ayúdame a definir mi nicho específico dentro del amplio sector de la movilidad urbana. Analiza las cinco especializaciones más demandadas: consultoría para licitaciones de transporte público con componente tecnológico, proyectos de electrificación de flotas con IA de gestión, implementación de sistemas MaaS (Mobility as a Service) para ciudades, optimización logística de última milla para e-commerce y consultoría de movilidad sostenible para empresas (planes de transporte al trabajo). Para cada nicho, describe el cliente típico, el presupuesto medio de proyecto, la duración del encargo y la competencia existente. Ayúdame a elegir el nicho donde mis capacidades tienen más valor diferencial.

Pilar 2 - Estructura de servicios y tarifas:
Diseña el catálogo de servicios de la consultoría con tres niveles de producto. Producto 1 (entrada): diagnóstico rápido de 10 días con entregable de mapa de oportunidades de IA, precio orientativo entre 3.000 y 6.000 euros. Producto 2 (core): consultoría de proyecto de 3 a 6 meses para diseñar e implementar una solución específica, precio orientativo entre 800 y 1.400 euros por día. Producto 3 (recurrente): retainer mensual de dirección técnica o advisory board para startups, precio orientativo entre 2.000 y 4.000 euros al mes. Para cada producto, define el alcance exacto, los entregables, las exclusiones y cómo presentarlo a distintos tipos de cliente.

Pilar 3 - Estrategia de captación de clientes:
Propón un plan de generación de negocio para los primeros 6 meses. Define la estrategia de contenido en LinkedIn para construir autoridad en el nicho (tipos de publicaciones, frecuencia, temas concretos sobre IA y transporte que generarán engagement en el sector). Describe cómo identificar y abordar los contratos del sector público (portales de licitación relevantes, cómo cumplir los requisitos de solvencia como freelance mediante UTEs o subcontratación). Establece una red de alianzas estratégicas con consultoras de ingeniería civil, despachos de abogados especializados en transporte y fabricantes de tecnología que necesiten expertise en movilidad.

Pilar 4 - Operativa del negocio freelance:
Diseña la estructura operativa de la consultoría. Define la forma jurídica óptima en España (autónomo, SL o sociedad profesional) según el volumen de facturación objetivo. Describe las herramientas de gestión que necesitas: CRM para llevar el seguimiento de oportunidades, herramientas de propuesta y contrato, sistema de facturación y control de horas, y plataformas para entrega de informes y documentación a clientes. Propón el modelo de subcontratación de especialistas para proyectos que requieran capacidades complementarias (analistas de datos, expertos en regulación, diseñadores UX para presentaciones).

Pilar 5 - Plan de los primeros 90 días:
Crea un plan de acción semana a semana para los primeros tres meses. Semanas 1-4: definición de posicionamiento, creación de materiales de venta y activación de la red de contactos. Semanas 5-8: lanzamiento de contenido en LinkedIn, primer outreach proactivo a 20 clientes potenciales y asistencia a un evento del sector. Semanas 9-12: seguimiento de oportunidades abiertas, cierre del primer proyecto y diseño del sistema de referencias. Define los hitos clave y las métricas de seguimiento para cada mes: número de conversaciones iniciadas, propuestas enviadas, tasa de conversión y facturación acumulada.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Plan de negocio para consultoría freelance en movilidad urbana con IA',
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
