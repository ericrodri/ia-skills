<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills524Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing automotriz con IA para concesionarios y marcas',
                'description'      => 'Estrategias de marketing digital para el sector automotriz usando IA: campañas personalizadas para vehículos eléctricos, retargeting avanzado y experiencias de cliente en concesionarios.',
                'prompt_content'   => <<<'EOT'
Eres un estratega de marketing especializado en el sector automotriz con experiencia en marcas premium, concesionarios y fabricantes de vehículos eléctricos. Tu objetivo es ayudarme a diseñar una estrategia de marketing digital completa que use IA para personalizar la experiencia del cliente y acelerar las ventas en un mercado en plena transición hacia la movilidad eléctrica.

**Contexto del sector:**
El mercado automotriz está viviendo una transformación sin precedentes: los compradores investigan online durante meses antes de pisar un concesionario, los vehículos eléctricos requieren una comunicación educativa completamente diferente, y las expectativas de personalización de los consumidores son cada vez más altas.

**Estrategia 1: Segmentación de compradores de automóviles con IA**
Diseña los segmentos de audiencia y sus estrategias específicas:
- Perfil del comprador de vehículo eléctrico: motivaciones, barreras, información que necesita antes de decidir
- Perfil del comprador de vehículo de combustión que evalúa el salto a eléctrico: cómo acelerar su conversión
- Segmento de flotas empresariales: argumentos de coste total de propiedad (TCO) y sostenibilidad corporativa
- Comprador de ocasión o km0: cómo captar este segmento con campañas de precio y confianza
- Millennials y Gen Z: cómo comunicar el coche como servicio en lugar de como posesión

**Estrategia 2: Contenido educativo para vehículos eléctricos**
Crea el plan de contenidos para superar las barreras a la compra de VE:
- Guía de contenidos que resuelva las 10 dudas más frecuentes sobre vehículos eléctricos (autonomía, carga, coste)
- Formatos más efectivos por canal: vídeo comparativo para YouTube, calculadoras de ahorro en web, testimonios en redes sociales
- Plan de SEO para captar búsquedas de comparación (modelo A vs modelo B, mejor coche eléctrico para ciudad)
- Contenido de remarketing para leads que visitaron la web pero no pidieron prueba de vehículo
- Newsletter de educación progresiva para nutrir prospectos en ciclos de compra de 6 a 18 meses

**Estrategia 3: Experiencia digital del cliente antes del concesionario**
Optimiza el journey digital pre-venta:
- Configurador de vehículo online con IA que recomienda la versión más adecuada según el perfil
- Chatbot cualificador de leads que recoge necesidades y agenda pruebas de vehículo automáticamente
- Visita virtual al concesionario y al vehículo con realidad aumentada o vídeo 360
- Simulador de cuota personalizada que integra financiación, seguros y ayudas a la compra de VE
- Sistema de notificaciones personalizadas cuando el vehículo de interés tiene stock disponible o promoción

**Estrategia 4: Campañas de publicidad digital para automoción**
Diseña el plan de medios pagados:
- Estructura de campañas en Google Ads: búsqueda, display, YouTube, Performance Max para automoción
- Estrategia de Meta Ads para la fase de consideración y para retargeting de visitantes del configurador
- Campañas de LinkedIn para ventas de flotas a empresas y directivos con presupuesto de movilidad
- Estrategia de geotargeting alrededor de puntos de carga y competidores para captar intención en tiempo real
- Presupuesto y distribución recomendada entre canales según fase del embudo de ventas

**Estrategia 5: Fidelización postventa y movilidad como servicio**
Desarrolla el marketing para retener clientes:
- Programa de fidelización basado en el uso real del vehículo y los servicios asociados
- Campaña de upgrade: cómo comunicar la renovación del vehículo a clientes con más de 3 años de antigüedad
- Marketing de servicios: mantenimiento, seguros, carga en casa y en ruta como fuentes de ingresos recurrentes
- Comunidad de propietarios de VE: cómo crear embajadores de marca entre los primeros adoptadores
- Net Promoter Score en automoción: cómo medir y mejorar la experiencia postventa con IA

**Estrategia 6: Métricas y optimización de la estrategia**
Define el dashboard de marketing automotriz:
- CPL (coste por lead) por canal y tipo de vehículo
- Tasa de conversión de lead a prueba de vehículo y de prueba a venta
- Tiempo medio del ciclo de ventas y palancas para acortarlo
- ROI de las campañas digitales vs. publicidad tradicional (TV, radio, exterior)
- Atribución multi-touch en un proceso de compra largo con múltiples puntos de contacto

Termina con un calendario de marketing mensual para los próximos 12 meses, con las campañas clave, los lanzamientos de nuevos modelos y las temporadas de mayor demanda a aprovechar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de marketing digital para concesionarios y marcas de vehículos eléctricos',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Software de mantenimiento predictivo para flotas con IA',
                'description'      => 'Diseña sistemas de software para mantenimiento predictivo en vehículos y flotas usando IA, análisis de sensores IoT y modelos de predicción de fallos para el sector automotriz.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en sistemas IoT y aprendizaje automático para el sector automotriz. Tu objetivo es ayudarme a diseñar e implementar una plataforma de mantenimiento predictivo para flotas de vehículos que use datos de sensores en tiempo real y modelos de IA para predecir fallos antes de que ocurran.

**Contexto técnico:**
El mantenimiento preventivo tradicional (por kilómetros o tiempo) es ineficiente y costoso. El mantenimiento predictivo con IA permite actuar justo antes de que un componente falle, reduciendo paradas no planificadas y costes de reparación hasta un 30%.

**Módulo técnico 1: Arquitectura de ingesta de datos de vehículos**
Diseña el pipeline de datos desde el vehículo hasta la plataforma:
- Fuentes de datos: OBD-II, CAN bus, sensores de batería para VE, GPS, sensores de temperatura y vibración
- Protocolo de comunicación: MQTT, AMQP o HTTP/2 según latencia requerida y ancho de banda disponible
- Edge computing en el vehículo: qué procesar localmente vs. enviar a la nube
- Estrategia de compresión y batching para minimizar el consumo de datos móviles
- Gestión de conectividad intermitente: qué pasa cuando el vehículo pierde señal

**Módulo técnico 2: Procesamiento de streams de datos en tiempo real**
Arquitectura del procesamiento de datos de la flota:
- Tecnologías de streaming: Apache Kafka, AWS Kinesis o Azure Event Hubs para ingesta masiva
- Pipeline de limpieza y normalización de señales de sensores con valores atípicos y datos faltantes
- Ventanas temporales de análisis: cómo agregar datos de sensores a distintas granularidades (segundos, minutos, horas)
- Detección de anomalías en tiempo real: algoritmos de isolation forest, autoencoders o Z-score por componente
- Alertas inmediatas cuando una señal supera umbrales críticos de seguridad

**Módulo técnico 3: Modelos de predicción de fallos por componente**
Desarrolla los modelos de machine learning específicos:
- Modelo de predicción de fallo de batería en VE: variables clave (SOH, temperatura, ciclos de carga)
- Modelo de desgaste de frenos: correlación entre patrones de conducción y vida útil estimada
- Modelo de fallo del motor de combustión: análisis de aceite, temperatura y vibraciones características
- Modelo de predicción de neumáticos: presión, temperatura, kilómetros y estilo de conducción
- Estrategia de entrenamiento continuo: cómo el modelo aprende de cada fallo real que ocurre

**Módulo técnico 4: Plataforma de gestión de flotas**
Diseña la interfaz y las funcionalidades de la plataforma:
- Dashboard de salud de la flota: estado de cada vehículo en tiempo real con semáforo de riesgo
- Cola de mantenimiento priorizada: vehículos ordenados por urgencia estimada de intervención
- Orden de trabajo automática: generación de OT cuando el sistema detecta necesidad inminente de mantenimiento
- Historial técnico del vehículo: toda la telemetría, alertas y mantenimientos realizados en una línea de tiempo
- Módulo de predicción de costes: estimación del coste del mantenimiento antes de que el taller lo diagnostique

**Módulo técnico 5: Integración con el ecosistema automotriz**
Conecta la plataforma con sistemas externos:
- Integración con ERPs de flotas (SAP Fleet, Fleetio, TomTom Telematics)
- API para talleres autorizados: acceso al diagnóstico predictivo antes de que llegue el vehículo
- Integración con los sistemas del fabricante: datos de garantía, recalls y actualizaciones OTA
- Conexión con proveedores de piezas para automatizar el pedido de recambios cuando se acerca el fallo
- Exportación de informes para aseguradoras que ofrecen seguros basados en el uso real del vehículo

**Módulo técnico 6: Seguridad, privacidad y escalabilidad**
Diseña el sistema para entornos de producción:
- Arquitectura de seguridad: autenticación, autorización y cifrado de los datos de telemetría
- Privacidad del conductor: qué datos de comportamiento de conducción se pueden recopilar y procesar
- Escalabilidad: diseño para manejar desde 100 hasta 100.000 vehículos en la misma plataforma
- SLA del sistema: disponibilidad requerida y plan de recuperación ante desastres
- Costes de infraestructura cloud por vehículo al mes y modelo de pricing para clientes B2B

Incluye al final un plan de implementación en 4 fases (MVP en 3 meses, beta con 10 flotas en 6 meses, lanzamiento en 12 meses, escalado en 18 meses) con los hitos técnicos de cada fase.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Plataforma de mantenimiento predictivo para flotas de vehículos con IoT e IA',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencia de usuario en concesionarios con IA',
                'description'      => 'Diseña la experiencia del cliente en concesionarios físicos y digitales usando IA: desde el espacio físico hasta las interfaces digitales de configuración de vehículos y el proceso de compra.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de experiencia de usuario especializado en el sector retail de automoción. Tu objetivo es ayudarme a redesenhar completamente la experiencia del cliente en un concesionario, integrando el espacio físico con las herramientas digitales y usando IA para personalizar cada punto de contacto.

**Contexto del proyecto:**
Los concesionarios tradicionales están perdiendo tráfico porque los compradores investigan todo online y van al concesionario solo para cerrar la compra. Necesito rediseñar la experiencia para que el concesionario vuelva a ser el lugar donde los clientes quieren vivir la marca, no solo firmar contratos.

**Diseño 1: Experiencia digital pre-visita**
Crea el recorrido digital antes de que el cliente llegue al concesionario:
- Landing page del concesionario: arquitectura de información y jerarquía visual para el comprador online
- Configurador de vehículo con IA que adapta las recomendaciones al perfil y presupuesto del usuario
- Chatbot de pre-cualificación: diseño de la conversación para recoger necesidades sin resultar invasivo
- Sistema de reserva de cita para prueba de vehículo: UX del formulario y confirmación personalizada
- Preparación de la visita: email de bienvenida que recuerda qué vehículos ha configurado y qué documentación llevar

**Diseño 2: Espacio físico del concesionario**
Diseña el layout y la señalética del espacio físico:
- Zonificación del showroom: área de bienvenida, área de configuración digital, área de prueba sensitiva (materiales, colores), sala de negociación privada
- Pantallas interactivas: qué contenido mostrar en cada zona para enriquecer la exploración del cliente
- Señalética de vehículos eléctricos: cómo comunicar visualmente la infraestructura de carga y la autonomía
- Área de espera premium: diseño para que la espera (trámites, preparación del coche) no sea percibida como tiempo perdido
- Iluminación y atmósfera: cómo el diseño de iluminación impacta en la percepción del color y los materiales del vehículo

**Diseño 3: Herramientas digitales en el punto de venta**
Diseña las interfaces que el vendedor y el cliente usan juntos:
- Tablet del vendedor: aplicación que muestra el historial del cliente, sus configuraciones previas y las recomendaciones de IA
- Pantalla grande de configuración en sala: interfaz para explorar versiones, colores, extras y calcular el precio en tiempo real
- Comparador de vehículos en pantalla: herramienta visual para comparar hasta 3 modelos lado a lado
- Calculadora de cuota integrada: interfaz que muestra el impacto de cada extra en la cuota mensual
- Firma digital del contrato: flujo de firma que reduce el tiempo de papeleo y digitaliza el proceso completo

**Diseño 4: Experiencia de entrega del vehículo**
Convierte la entrega en un momento memorable de marca:
- Escenificación de la entrega: cómo el concesionario puede crear un momento emocional en la recogida del vehículo
- Kit de bienvenida personalizado: documentación, accesorios y recursos digitales adaptados al perfil del comprador
- Tutorial interactivo del vehículo: guía personalizada de las funciones más relevantes para ese cliente específico
- App de cliente: diseño de la aplicación móvil para gestionar el vehículo, agendar servicios y contactar con el concesionario
- Seguimiento post-entrega: diseño de los puntos de contacto en las primeras 2 semanas (email de bienvenida, llamada de satisfacción, encuesta NPS)

**Diseño 5: Accesibilidad e inclusión en la experiencia automotriz**
Diseña para todos los perfiles de comprador:
- Accesibilidad en los sistemas digitales del concesionario (WCAG AA mínimo)
- Experiencia para compradores mayores: interfaces sin tecnicismos, tipografía legible, proceso simplificado
- Adaptación a compradores con poca experiencia en VE: señalización y materiales educativos sin abrumar
- Experiencia para compradores en movilidad reducida: acceso físico y demostración de adaptaciones del vehículo
- Soporte multiidioma: cómo gestionar la experiencia cuando el comprador no habla el idioma local

**Diseño 6: Métricas de experiencia y mejora continua**
Define cómo medir y mejorar la experiencia:
- Mapa de calor del concesionario: qué zonas generan más tiempo de permanencia y cuáles se ignoran
- Encuesta de satisfacción post-visita: las 5 preguntas que revelan los mayores problemas de UX
- Análisis de la grabación de sesiones en el configurador digital para identificar dónde el usuario abandona
- NPS por etapa del proceso de compra: detectar en qué momento se pierde la confianza del cliente
- Plan de iteración mensual: cómo incorporar el feedback en mejoras tangibles del espacio y las herramientas

Proporciona al final un mapa de la experiencia del cliente (customer journey map) visual desde el primer impacto publicitario hasta la primera revisión del vehículo, con los momentos emocionales clave y las oportunidades de mejora identificadas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseño de experiencia de cliente en concesionarios físicos y digitales con IA',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de vehículos eléctricos con IA para asesores comerciales',
                'description'      => 'Técnicas y herramientas de IA para asesores de ventas en concesionarios: cualificación de leads, manejo de objeciones sobre vehículos eléctricos y cierre de ventas en el sector automotriz.',
                'prompt_content'   => <<<'EOT'
Eres un formador de ventas especializado en el sector automotriz con experiencia en la transición hacia los vehículos eléctricos. Tu objetivo es ayudarme a construir un sistema de ventas moderno que use IA para cualificar mejor los leads, personalizar la propuesta y cerrar más ventas de vehículos eléctricos.

**Contexto de ventas:**
Soy asesor comercial en un concesionario que vende vehículos de combustión y eléctricos. El ciclo de compra se ha alargado porque los clientes investigan mucho online antes de venir, y las ventas de VE requieren una conversación educativa diferente. Necesito herramientas y técnicas para adaptarme a este nuevo cliente.

**Técnica de ventas 1: Cualificación avanzada de leads**
Mejora el proceso de cualificación desde el primer contacto:
- Las 7 preguntas que revelan si un cliente es un comprador real o solo está explorando
- Señales de intención de compra en el lenguaje del cliente que indican urgencia o indiferencia
- Uso de la IA para analizar el historial de interacciones digitales del lead antes de llamarle
- Sistema de scoring de leads: qué información puntúa más para priorizar el tiempo del asesor
- Guión de llamada inicial que califica sin intimidar y que abre la puerta a la visita al concesionario

**Técnica de ventas 2: Manejo de objeciones en vehículos eléctricos**
Supera las barreras específicas de la venta de VE:
- Objeción de autonomía: cómo usar datos reales de uso para demostrar que el VE cubre el 95% de sus trayectos
- Objeción de infraestructura de carga: mapa personalizado de puntos de carga en su zona de uso habitual
- Objeción de precio: calculadora de TCO (coste total de propiedad) que muestra el ahorro a 5 años
- Objeción de incertidumbre tecnológica: cómo usar la garantía de batería y los datos de fiabilidad para generar confianza
- Objeción de tiempo de carga: educación sobre los hábitos de carga en casa y la comparativa con el tiempo en gasolinera

**Técnica de ventas 3: Demostración y prueba de vehículo efectiva**
Convierte la prueba en el punto de inflexión de la venta:
- Ruta de prueba estratégica: cómo diseñar el recorrido para que el cliente experimente las ventajas clave del VE
- Puntos de conversación durante la prueba: qué destacar en cada momento de la conducción
- Cómo involucrar a la pareja o acompañante que puede vetar la decisión de compra
- Técnica de cierre de prueba: la pregunta que transforma la experiencia en intención de compra
- Seguimiento post-prueba: mensaje de WhatsApp o email que mantiene el calor de la prueba en las 48 horas siguientes

**Técnica de ventas 4: Propuesta personalizada y negociación**
Crea propuestas que el cliente no quiera rechazar:
- Plantilla de propuesta personalizada que integra el vehículo, la financiación, el seguro y los extras en un solo documento
- Técnica de anclaje de precio: cómo presentar el precio de lista antes del precio final negociado
- Estrategia de paquetización: cómo los extras incluidos aumentan el valor percibido sin reducir el margen
- Negociación de la entrada y la cuota: cómo adaptar la propuesta financiera a la situación del cliente
- Cierre de urgencia ético: cómo usar el stock disponible o las ayudas a la compra de VE para acelerar la decisión

**Técnica de ventas 5: CRM y seguimiento con IA**
Optimiza la gestión de tu cartera de clientes:
- Configuración del CRM para el seguimiento de leads de VE: campos específicos, etapas del funnel, tareas automáticas
- Secuencia de seguimiento automatizada para leads que no compraron en la primera visita
- Personalización de los mensajes de seguimiento según el modelo de interés y las objeciones identificadas
- Gestión de la cartera de clientes existentes: cuándo y cómo contactar a clientes para proponer la renovación
- Alertas automáticas: cuándo contactar a un cliente porque su modelo de interés tiene una nueva oferta o lanzamiento

**Técnica de ventas 6: Métricas de rendimiento del asesor comercial**
Define y mejora tus indicadores de ventas:
- Tasa de conversión de lead a visita, de visita a prueba y de prueba a venta
- Tiempo medio de cierre por tipo de vehículo (combustión vs. eléctrico)
- Ticket medio de venta: margen bruto por operación y comparativa con el objetivo
- Satisfacción del cliente: NPS personal del asesor como indicador de calidad del proceso de venta
- Plan de mejora personal: cómo usar los datos de CRM para identificar en qué etapa del funnel pierdo más oportunidades

Termina con un guión de ventas completo para la primera visita de un cliente interesado en un vehículo eléctrico, desde la bienvenida hasta el cierre o el acuerdo de próximo paso.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Técnicas de ventas con IA para asesores comerciales de vehículos eléctricos',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Movilidad como servicio (MaaS) con IA: estrategia de producto',
                'description'      => 'Define la estrategia de producto para plataformas de movilidad como servicio usando IA para integrar transporte público, vehículos compartidos, microtransporte y planificación de viajes.',
                'prompt_content'   => <<<'EOT'
Eres un Product Manager especializado en movilidad urbana y plataformas de transporte. Tu objetivo es ayudarme a diseñar la estrategia de producto para una plataforma de Movilidad como Servicio (MaaS) que use IA para ofrecer la solución de transporte más eficiente, sostenible y personalizada para cada usuario.

**Contexto del producto:**
La Movilidad como Servicio integra en una sola aplicación el transporte público, los coches compartidos, las motos eléctricas, los patinetes y el taxi, permitiendo al usuario planificar, reservar y pagar cualquier viaje desde una única plataforma. La IA es el corazón del sistema.

**Bloque de producto 1: Definición del problema y el usuario**
Entiende profundamente al usuario de MaaS:
- Mapa de arquetipos de usuarios: el viajero diario de trabajo, el turista ocasional, el usuario sin coche propio, la empresa que gestiona desplazamientos de empleados
- Jobs to be done: qué trabajo real resuelve MaaS que los medios de transporte individuales no resuelven bien
- Principales frustraciones del usuario de transporte multimodal actual (transbordos, pagos múltiples, incertidumbre de horarios)
- Mapa de competidores: quién hace MaaS hoy y cuáles son sus debilidades que podemos aprovechar
- Hipótesis de valor: qué cambio de comportamiento de movilidad queremos conseguir en el usuario

**Bloque de producto 2: Motor de planificación de viajes con IA**
Diseña el núcleo algorítmico de la plataforma:
- Algoritmo multimodal: cómo comparar y combinar opciones de transporte considerando tiempo, coste, comodidad y huella de carbono
- Personalización de resultados: cómo la IA aprende las preferencias individuales y las aplica a los resultados de cada búsqueda
- Predicción de disponibilidad en tiempo real: anticiparse a la escasez de vehículos compartidos en horas punta
- Recomendación proactiva: notificar al usuario que debe salir 5 minutos antes por una incidencia detectada en su ruta habitual
- Modo de emergencia: rutas alternativas cuando el transporte preferido no está disponible o hay incidencia

**Bloque de producto 3: Integración con operadores de movilidad**
Define la estrategia de partnerships y APIs:
- Criterios para seleccionar los operadores de movilidad a integrar en cada ciudad
- Modelo de integración técnica: API en tiempo real, feed estático o scraping para cada tipo de operador
- Acuerdos comerciales: modelos de comisión, tarifa plana o coste por reserva con operadores
- Gestión de la disponibilidad cuando un operador tiene una incidencia o deja de operar
- Estrategia de expansión a nuevas ciudades: qué integraciones mínimas necesita una ciudad para lanzar el servicio

**Bloque de producto 4: Suscripciones y modelos de precios de MaaS**
Diseña el modelo de monetización:
- Paquetes de suscripción mensual: básico (solo transporte público), estándar (+ vehículos compartidos), premium (todo incluido sin límites)
- Comparativa del valor del paquete vs. el coste real de tener un coche propio para el usuario
- Precios dinámicos: cómo ajustar el precio de los desplazamientos según demanda y disponibilidad
- Modelo B2B para empresas: gestión de la movilidad de empleados, reporting de gasto y ahorro de CO2
- Incentivos de gamificación: puntos, descuentos o beneficios por elegir las opciones de menor impacto ambiental

**Bloque de producto 5: Sostenibilidad y movilidad verde**
Integra la sostenibilidad como diferenciador:
- Calculadora de huella de carbono por viaje y acumulado mensual visible en la app
- Ranking de opciones de transporte ordenado por impacto ambiental, no solo por tiempo o precio
- Integración prioritaria de operadores de movilidad eléctrica y sostenible
- Alianzas con empleadores y administraciones para incentivos de movilidad sostenible
- Informe mensual de impacto ambiental del usuario: cuántas emisiones ha evitado usando MaaS vs. ir en coche

**Bloque de producto 6: Roadmap y métricas de éxito**
Planifica la evolución del producto:
- MVP de MaaS: las funcionalidades mínimas para lanzar en una ciudad piloto
- Fases de expansión de funcionalidades: de la planificación básica a la personalización avanzada con IA
- OKRs por trimestre: viajes completados, usuarios activos mensuales, NPS, tasa de retención
- Modelo de datos que necesita la plataforma para mejorar continuamente las recomendaciones de IA
- Estrategia de feedback del usuario: cómo recoger valoraciones de cada viaje sin generar fricción

Proporciona al final una descripción detallada del MVP en formato de user stories priorizadas, con criterios de aceptación claros para el equipo de desarrollo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estrategia de producto para plataformas de movilidad como servicio con IA',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del talento en el sector automotriz con IA',
                'description'      => 'Estrategias de RRHH para empresas automotrices en transformación: reclutamiento de ingenieros de VE, upskilling de mecánicos para coches eléctricos y gestión del cambio cultural.',
                'prompt_content'   => <<<'EOT'
Eres un director de recursos humanos con experiencia en la industria automotriz durante su transición hacia la electrificación. Tu objetivo es ayudarme a diseñar una estrategia de gestión del talento que prepare a la organización para los retos del vehículo eléctrico, la conducción autónoma y la digitalización del sector.

**Contexto de transformación:**
La industria automotriz está viviendo la mayor transformación de su historia. Los perfiles de ingeniería tradicional (combustión, transmisiones mecánicas) están siendo desplazados por nuevas competencias (baterías, software de vehículo, IA). Los concesionarios necesitan técnicos de VE que hoy no existen en suficiente cantidad.

**Área de RRHH 1: Análisis de brechas de competencias**
Diagnostica el estado actual del talento en la organización:
- Inventario de competencias actual: qué sabe hacer el equipo hoy vs. qué necesitará saber en 3 años
- Mapa de roles en riesgo de obsolescencia por la electrificación y la digitalización
- Identificación de competencias transferibles: qué conocen los mecánicos de combustión que es válido para VE
- Perfiles críticos a contratar externamente: cuáles no se pueden desarrollar internamente con suficiente rapidez
- Análisis de la competencia por talento: con quién competimos para contratar ingenieros de baterías y software

**Área de RRHH 2: Reclutamiento de perfiles digitales y de VE**
Diseña el proceso de atracción de nuevo talento:
- Propuesta de valor del empleador para ingenieros de software automotriz y especialistas en baterías
- Canales de reclutamiento no tradicionales para perfiles tech (comunidades de GitHub, hackathons, universidades tecnológicas)
- Proceso de selección técnica para ingenieros de VE: qué evaluar y con qué pruebas
- Estrategia de employer branding: cómo posicionar la empresa como referente en movilidad sostenible para atraer talento joven
- Programas de prácticas y becas con universidades para crear un pipeline de talento a futuro

**Área de RRHH 3: Reconversión de mecánicos a técnicos de VE**
Lidera el upskilling del taller:
- Plan de formación técnica en VE para mecánicos de combustión: contenidos, duración y certificaciones
- Seguridad eléctrica de alta tensión: formación obligatoria y certificación para trabajar con baterías de VE
- Plan de prácticas supervisadas en vehículos eléctricos reales antes de certificar la autonomía del técnico
- Incentivos salariales y de carrera para técnicos que obtienen la certificación de VE
- Gestión de la resistencia al cambio: cómo apoyar a los mecánicos con más años de experiencia en combustión

**Área de RRHH 4: Formación de la red de ventas para VE**
Capacita a los asesores comerciales del concesionario:
- Plan de formación en producto para vendedores: conocimiento técnico mínimo para vender VE con confianza
- Taller de manejo de objeciones específicas de VE con role-play y feedback de IA
- Certificación interna de especialista en movilidad eléctrica para asesores comerciales
- Formación en financiación y ayudas a la compra de VE: un área donde los vendedores pierden credibilidad
- Evaluación continua del conocimiento del producto: test mensual corto para mantener la formación actualizada

**Área de RRHH 5: Gestión del cambio cultural**
Lidera la transformación cultural del sector:
- Diagnóstico de la cultura organizacional actual: resistencias al cambio más comunes en empresas automotrices tradicionales
- Plan de comunicación interna sobre la transformación eléctrica: narrativa que inspire en lugar de atemorizar
- Embajadores del cambio: cómo identificar y empoderar a los líderes informales que impulsen la adopción
- Gestión del miedo a la automatización: cómo comunicar que la IA es una herramienta de apoyo, no de sustitución
- Celebración de hitos de transformación: reconocer públicamente los logros del equipo en la adopción de nuevas competencias

**Área de RRHH 6: Métricas de capital humano en la transformación**
Define los indicadores de éxito del plan de talento:
- Porcentaje del personal con certificación de VE por área funcional y evolución trimestral
- Tiempo para cubrir vacantes críticas de perfiles digitales y de electrónica
- Índice de retención de talento crítico (ingenieros de VE y software)
- ROI de la inversión en formación: reducción de tiempo de diagnóstico y reparación de VE tras la certificación
- Clima organizacional: encuesta de compromiso antes y después del programa de transformación

Cierra con un plan de comunicación interna para presentar esta estrategia de talento a todos los empleados de la organización, con mensajes diferenciados por colectivo (mecánicos, vendedores, ingenieros, dirección).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de talento y formación en empresas automotrices durante la transición eléctrica',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de la transición eléctrica en el sector automotriz',
                'description'      => 'Modela el impacto financiero de la electrificación en empresas automotrices: análisis de inversión en VE, TCO para flotas, modelos de financiación y proyección de rentabilidad.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en el sector automotriz con experiencia en valoración de empresas de movilidad, análisis de flotas y modelos de negocio de vehículos eléctricos. Tu objetivo es ayudarme a construir el análisis financiero que soporte las decisiones de inversión en la transición hacia la movilidad eléctrica.

**Contexto financiero:**
La electrificación del parque vehicular representa la mayor inversión de capital de muchas empresas en la próxima década. Necesito modelos financieros rigurosos para justificar estas inversiones ante el consejo de administración o los inversores.

**Análisis financiero 1: Coste total de propiedad de vehículos eléctricos**
Construye el modelo de TCO comparativo:
- Componentes del TCO para VE vs. vehículo de combustión: precio de compra, financiación, seguro, mantenimiento, energía, impuestos, valor residual
- Cálculo del punto de equilibrio financiero: en qué año o kilómetro el VE es más barato que la alternativa de combustión
- Variables sensibles del modelo: precio de la electricidad, precio de la gasolina, descuentos de fabricante, ayudas gubernamentales
- TCO diferenciado por perfil de uso: urbano intensivo, carretera larga distancia, flota mixta
- Proyección del TCO a 5 y 10 años considerando la caída del precio de baterías y el aumento previsto del precio de los combustibles fósiles

**Análisis financiero 2: Valoración de la inversión para flotas empresariales**
Analiza el ROI de electrificar una flota corporativa:
- Cálculo del VAN y TIR de la inversión en electrificación de una flota de 100 vehículos
- Impacto en el balance: capitalización de los VE, amortización y tratamiento fiscal de las diferencias con la flota anterior
- Financiación óptima: compra al contado, leasing operativo, renting o modelos de pago por uso
- Coste de infraestructura de carga: CAPEX de la instalación en sede y OPEX de mantenimiento y electricidad
- Beneficios no financieros cuantificables: imagen corporativa, acceso a zonas de bajas emisiones, bienestar del conductor

**Análisis financiero 3: Modelos de financiación para la compra de VE**
Evalúa las opciones de financiación del comprador individual:
- Comparativa financiera de compra vs. leasing vs. renting para un vehículo eléctrico de gama media
- Impacto de las ayudas gubernamentales (Plan MOVES, exenciones fiscales autonómicas) en el coste efectivo
- Valor residual del VE: cómo proyectarlo con mayor incertidumbre que los vehículos de combustión
- Seguros de batería: cómo cubrir el riesgo de degradación acelerada y su impacto en la cuota
- Estructuración de la oferta comercial: qué cuota mensual maximiza la conversión sin comprometer el margen

**Análisis financiero 4: Impacto de la electrificación en la cuenta de resultados del concesionario**
Analiza cómo cambia el modelo de negocio:
- Reducción de ingresos de taller: los VE tienen menos revisiones y componentes que fallar menos frecuentemente
- Nuevas fuentes de ingresos: instalación de puntos de carga, servicios de software y conectividad, suscripciones de actualización OTA
- Impacto en el margen de ventas: ¿los VE tienen mayor o menor margen por unidad que los de combustión?
- Inversión necesaria en equipamiento de taller: elevadores, herramientas de alta tensión, formación certificada
- Proyección de la cuenta de resultados del concesionario a 5 años con mix creciente de VE

**Análisis financiero 5: Análisis de riesgo e incertidumbre**
Modela los escenarios de riesgo de la transición:
- Análisis de sensibilidad: qué pasa si la adopción de VE va más lenta o más rápida de lo esperado
- Riesgo regulatorio: impacto financiero de adelantar o retrasar la prohibición de motores de combustión en 2035
- Riesgo de valor residual: impacto de una caída mayor de la esperada en el valor de los VE de segunda mano
- Riesgo tecnológico: qué pasa financieramente si una tecnología competidora (hidrógeno, baterías de estado sólido) desplaza al VE de ion de litio
- Riesgo de competencia: impacto en el negocio si los fabricantes chinos de VE conquistan el 20% del mercado europeo

**Análisis financiero 6: Reporting financiero para inversores y consejo**
Comunica el análisis financiero de manera efectiva:
- Dashboard financiero de la transición eléctrica: KPIs clave para el seguimiento mensual del consejo
- Presentación ejecutiva del business case de electrificación: estructura, datos clave y recomendación
- Métricas ESG relacionadas con la electrificación: cómo cuantificar el impacto ambiental en términos financieros (carbon credits, reducción de riesgo regulatorio)
- Comparativa con peers del sector: benchmarking de la inversión en electrificación frente a competidores
- Hoja de ruta de inversiones: plan de capex para la electrificación de la flota o el concesionario a 3 años

Termina con una plantilla de modelo financiero en 5 pestañas (supuestos, TCO, P&L, flujo de caja, análisis de sensibilidad) que pueda adaptar a las características específicas de mi organización.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Modelos financieros para la transición a vehículos eléctricos en empresas y flotas',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal de los vehículos autónomos y la movilidad con IA',
                'description'      => 'Analiza el marco regulatorio de la conducción autónoma, la responsabilidad civil en accidentes de vehículos con IA y el cumplimiento legal en plataformas de movilidad compartida.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho de la tecnología y la movilidad con experiencia en regulación de vehículos autónomos, responsabilidad civil en el sector automotriz y cumplimiento normativo en plataformas de movilidad. Tu objetivo es ayudarme a navegar el complejo marco legal de la movilidad con IA.

**Contexto legal:**
La irrupción de los sistemas avanzados de asistencia a la conducción (ADAS), los vehículos semiautónomos y las plataformas de movilidad plantea preguntas legales sin respuesta clara en muchos ordenamientos jurídicos. Los profesionales del sector necesitan entender estos riesgos antes de que la regulación los aclare definitivamente.

**Marco legal 1: Responsabilidad civil en accidentes con vehículos autónomos**
Analiza el régimen de responsabilidad aplicable:
- Marco actual en España y la UE: cómo se distribuye la responsabilidad entre el conductor, el fabricante y el desarrollador del software
- Niveles de autonomía SAE (0 a 5) y su impacto en la atribución de responsabilidad: cuándo el conductor deja de ser responsable
- Regulación europea de vehículos autónomos: directivas y reglamentos aplicables y su calendario de entrada en vigor
- Seguro del vehículo autónomo: quién asegura qué en cada nivel de autonomía y cómo se liquida un siniestro
- Registro de datos del vehículo (caja negra): obligaciones legales de conservación y acceso por autoridades e investigadores de accidentes

**Marco legal 2: Homologación y certificación de sistemas ADAS**
Comprende los requisitos regulatorios de los sistemas de asistencia:
- Reglamento europeo de seguridad general de vehículos: sistemas ADAS obligatorios desde 2024 y 2026
- Proceso de homologación de nuevas funcionalidades de conducción autónoma: quién aprueba, qué se valida
- Obligaciones de actualización de software: derechos del consumidor cuando un fabricante actualiza (o elimina) una función
- Recall de software: cuándo un fabricante está obligado a retirar o actualizar un sistema de conducción autónoma defectuoso
- Certificación de ciberseguridad del vehículo: regulación UNECE WP.29 y su impacto en el desarrollo de software automotriz

**Marco legal 3: Protección de datos en vehículos conectados**
Aplica el RGPD al vehículo como dispositivo recopilador de datos:
- Datos que genera un vehículo conectado: localización, comportamiento de conducción, contenidos del infotainment, biometría del conductor
- Base legal para el tratamiento de estos datos: cuándo se necesita consentimiento y cuándo aplica el interés legítimo
- Derechos del propietario y del conductor sobre los datos del vehículo (pueden ser personas diferentes)
- Conflicto entre los datos del vehículo y el secreto comercial del fabricante: hasta dónde llega el derecho de acceso
- Transferencia de datos del vehículo a terceros (aseguradoras, talleres, plataformas de movilidad): requisitos legales

**Marco legal 4: Regulación de plataformas de movilidad compartida**
Marco jurídico para operadores de MaaS, carsharing y ridesharing:
- Clasificación legal de los conductores en plataformas de ridesharing: trabajadores por cuenta ajena, autónomos o colaboradores
- Licencias y autorizaciones necesarias para operar servicios de VTC (vehículo de transporte con conductor) en España
- Regulación municipal del carsharing: limitaciones de zona, aparcamiento, tarifas y acceso a áreas de bajas emisiones
- Régimen de responsabilidad de la plataforma cuando un vehículo de la flota compartida causa un accidente
- Obligaciones de la plataforma MaaS como intermediaria entre el usuario y los operadores de transporte integrados

**Marco legal 5: Ayudas públicas a la movilidad eléctrica y cumplimiento**
Cumplimiento en el acceso a incentivos para VE:
- Requisitos del Plan MOVES III para acceder a las subvenciones a la compra de vehículos eléctricos
- Obligaciones de los concesionarios como tramitadores de las ayudas: documentación, plazos y responsabilidades
- Fraude en las ayudas: riesgos legales de incumplir los requisitos de permanencia o uso del vehículo subvencionado
- Incentivos fiscales autonómicos: bonificaciones en el impuesto de matriculación y en el impuesto de circulación
- Compatibilidad de las distintas ayudas: cuáles se pueden acumular y cuáles son incompatibles entre sí

**Marco legal 6: Contratos en el sector automotriz con elementos de IA**
Protege a tu organización contractualmente:
- Cláusulas esenciales en contratos con proveedores de software de conducción autónoma: propiedad intelectual, responsabilidad, actualizaciones
- Contrato de venta de un vehículo con funciones de conducción autónoma: qué garantías ofrecer y cuáles excluir
- Términos y condiciones de uso de una plataforma de movilidad: cláusulas de limitación de responsabilidad admisibles
- Acuerdos de nivel de servicio (SLA) en sistemas críticos de software automotriz: penalizaciones y límites de responsabilidad
- Seguros de responsabilidad civil para fabricantes y desarrolladores de software de conducción autónoma

Proporciona al final una guía de compliance práctica para una empresa del sector automotriz (fabricante, concesionario o plataforma MaaS) con los 10 puntos legales más urgentes que debe revisar en los próximos 12 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Marco regulatorio y compliance legal para vehículos autónomos y plataformas de movilidad',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Servicio al cliente en concesionarios con IA',
                'description'      => 'Implementa sistemas de atención al cliente con IA en concesionarios: chatbots para consultas de compra, gestión de citas de taller, seguimiento postventa y fidelización de clientes.',
                'prompt_content'   => <<<'EOT'
Eres un experto en customer success para el sector automotriz con experiencia en concesionarios, marcas premium y plataformas digitales de movilidad. Tu objetivo es ayudarme a rediseñar completamente la experiencia de atención al cliente de un concesionario usando IA para aumentar la satisfacción y la fidelización.

**Contexto del servicio:**
El concesionario atiende dos tipos de clientes: los compradores (proceso de compra de meses) y los clientes de postventa (revisiones y reparaciones recurrentes). Ambos tienen necesidades muy diferentes y en ambos casos hay oportunidades enormes de mejorar la experiencia con IA.

**Pilar 1: Atención digital al comprador potencial**
Diseña la experiencia de atención en el proceso de compra:
- Chatbot de cualificación: preguntas para entender las necesidades del comprador sin ser invasivo
- Respuesta instantánea a las 10 consultas más frecuentes sobre disponibilidad, precios y financiación
- Sistema de reserva de prueba de vehículo: flujo de UX optimizado para convertir la consulta en cita
- Seguimiento automático de leads: secuencia de emails y mensajes para mantener el interés sin agobiar
- Traspaso al vendedor humano: en qué momento y cómo el chatbot cede la conversación al asesor comercial

**Pilar 2: Gestión de citas de taller con IA**
Optimiza la experiencia de agendamiento y recepción en taller:
- Canal de reserva de cita multicanal: web, WhatsApp, app, llamada, con disponibilidad en tiempo real
- Recuerdo automático de revisión: cómo y cuándo notificar al cliente que su vehículo necesita mantenimiento
- Pre-diagnóstico inteligente: formulario previo a la cita donde el cliente describe los síntomas y la IA ayuda a anticipar la intervención necesaria
- Estimación de tiempo y coste antes de la cita: cómo generar confianza informando antes de que llegue el cliente
- Actualización en tiempo real durante la reparación: cómo mantener al cliente informado del progreso sin llamadas innecesarias

**Pilar 3: Recepción del vehículo y proceso de diagnóstico**
Mejora la experiencia en el momento de entrada al taller:
- Check-in digital rápido: el cliente confirma la cita y entrega el vehículo en menos de 5 minutos
- Foto y video del estado del vehículo al entrar: documentación automática para evitar conflictos posteriores
- Explicación del presupuesto: cómo comunicar de manera transparente y visual lo que se va a hacer y por qué
- Aprobación del presupuesto por WhatsApp: el cliente aprueba o rechaza intervenciones adicionales sin tener que venir al taller
- Alternativas de movilidad mientras el coche está en taller: vehículo de sustitución, taxi, transporte público con guía

**Pilar 4: Gestión de incidencias y reclamaciones**
Maneja los momentos críticos que definen la fidelización:
- Protocolo de gestión de garantías y reclamaciones: cómo resolver con agilidad para convertir un problema en una oportunidad de fidelización
- Respuesta ante fallos en la entrega de plazos prometidos: cómo comunicar y compensar sin perder la confianza
- Escalada a responsable cuando la IA no puede resolver: en qué situaciones y con qué información previa
- Seguimiento de reclamaciones abiertas: sistema para que el cliente sepa en qué estado está su queja
- Encuesta de resolución: cómo cerrar el ciclo de la reclamación y recuperar la satisfacción del cliente

**Pilar 5: Programas de fidelización postventa**
Retiene a los clientes más allá de la garantía:
- Programa de mantenimiento por suscripción: paquete de revisiones prepagadas que garantiza recurrencia
- Recordatorio de revisiones obligatorias y opcionales: cuándo, por qué canal y con qué mensaje
- Oferta de renovación de vehículo: cuándo y cómo proponer al cliente el cambio a un modelo más nuevo
- Beneficios exclusivos para clientes de mantenimiento regular (prioridad de cita, descuentos, servicios adicionales)
- Programa de referidos: incentivos para que el cliente satisfecho recomiende el concesionario a su entorno

**Pilar 6: Métricas de satisfacción y calidad del servicio**
Define y actúa sobre los indicadores de cliente:
- NPS del concesionario: cómo medirlo, cuándo pedirlo y cómo actuar sobre los detractores
- Tiempo medio de resolución de consultas por canal (chatbot, email, teléfono, presencial)
- Tasa de retención de clientes en el taller: porcentaje de clientes que vuelven al concesionario para su segunda revisión
- Ratio de aprobación de presupuestos adicionales: indicador de confianza del cliente en las recomendaciones del taller
- Coste de atención por consulta y ROI de la automatización con IA en cada canal

Cierra con un guión de atención al cliente para el técnico de recepción de taller, incluyendo cómo usar las herramientas de IA durante el proceso de recepción para dar una experiencia más profesional y eficiente al cliente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Sistema de atención al cliente con IA para concesionarios y talleres automotrices',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría automotriz freelance con IA',
                'description'      => 'Construye una práctica de consultoría independiente en el sector automotriz usando IA: desde la especialización en movilidad eléctrica hasta la entrega de proyectos de transformación digital.',
                'prompt_content'   => <<<'EOT'
Eres un consultor sénior de gestión especializado en la industria automotriz con experiencia en proyectos de transformación digital, electrificación de flotas y estrategia de movilidad. Tu objetivo es ayudarme a construir y escalar una práctica de consultoría independiente en el sector automotriz usando IA como palanca de diferenciación y productividad.

**Contexto del freelance:**
El sector automotriz está en plena transformación y los fabricantes, concesionarios, flotas y startups de movilidad necesitan expertise externo para navegar la electrificación, la digitalización y los nuevos modelos de negocio. Quiero posicionarme como el consultor de referencia en este momento de cambio.

**Pilar 1: Definición de la especialización de consultoría**
Construye tu nicho en el sector automotriz:
- Las 5 áreas de mayor demanda de consultoría en el sector automotriz en los próximos 3 años
- Cómo elegir mi nicho: electrificación de flotas, transformación digital de concesionarios, estrategia MaaS, go-to-market de VE o experiencia del cliente automotriz
- Propuesta de valor diferenciada: qué puedo ofrecer que una gran consultora generalista no puede
- Casos de uso específicos donde la IA me da ventaja competitiva frente a consultores tradicionales
- Cómo construir credibilidad rápida en un sector donde la experiencia previa es muy valorada

**Pilar 2: Captación de clientes en la industria automotriz**
Desarrolla tu estrategia comercial:
- Red de contactos clave en el sector: qué roles son los sponsors de proyectos de consultoría en fabricantes, concesionarios y flotas
- Estrategia de LinkedIn para consultores automotrices: qué contenido publicar para ser percibido como experto
- Participación en eventos del sector: salones del automóvil, conferencias de movilidad, foros de VE
- Propuesta de proyecto inicial: cómo presentar un diagnóstico breve y de bajo riesgo para empezar la relación
- Generación de casos de éxito: cómo documentar y publicar los resultados de cada proyecto respetando la confidencialidad del cliente

**Pilar 3: Metodología de consultoría asistida por IA**
Usa IA para entregar proyectos de mayor calidad en menos tiempo:
- Framework de diagnóstico rápido: cómo analizar un concesionario o una flota en 2 semanas con análisis de datos y entrevistas asistidas por IA
- Generación de benchmarks sectoriales: cómo construir comparativas de referencia usando datos públicos y herramientas de IA
- Elaboración de informes y presentaciones: cómo usar IA para transformar los hallazgos del análisis en narrativas ejecutivas convincentes
- Modelado financiero con IA: cómo construir business cases de electrificación más rápido sin sacrificar rigor
- Generación de roadmaps de transformación: cómo priorizar iniciativas usando frameworks estándar acelerados con IA

**Pilar 4: Gestión de proyectos y entrega de valor**
Organiza tu trabajo como un profesional independiente:
- Contrato tipo para proyectos de consultoría automotriz: entregables, plazos, confidencialidad y propiedad intelectual
- Estructura de precios: tarifa diaria vs. precio por proyecto vs. retainer mensual en el sector automotriz
- Gestión del tiempo entre fases de proyecto: cómo mantener la calidad cuando llevas varios clientes en paralelo
- Herramientas de gestión de proyectos para consultores individuales: qué usar para cada tipo de entregable
- Comunicación con el cliente durante el proyecto: frecuencia de actualización, formato de los informes de progreso y gestión de expectativas

**Pilar 5: Posicionamiento como referente en movilidad eléctrica**
Construye tu marca personal en el sector:
- Newsletter semanal de tendencias en movilidad eléctrica y automotriz: cómo atraer y retener suscriptores del sector
- Publicación de artículos de opinión en medios especializados: autorevista, Movilidad Eléctrica, Motor.es
- Participación como ponente en conferencias de movilidad: cómo conseguir las primeras invitaciones
- Podcast o webinar mensual sobre transformación digital en el sector automotriz
- Informe anual de tendencias del sector que te posicione como la referencia de datos para el sector

**Pilar 6: Escalado de la práctica de consultoría**
Crece más allá del modelo unipersonal:
- Cuándo y cómo incorporar a otros consultores freelance para proyectos más grandes
- Modelo de asociación con otras especialidades complementarias (legal, RRHH, tecnología) para ofertas integradas
- Desarrollo de productos de conocimiento: cursos, plantillas, herramientas digitales que generan ingresos pasivos
- Modelo de retainer con fabricantes o grupos de concesionarios para ingresos recurrentes
- Evaluación de cuándo tiene sentido constituir una sociedad y dejar de operar como autónomo

Termina con un plan de negocio de 6 meses para lanzar la práctica de consultoría, con objetivos de ingresos, número de clientes objetivo y las acciones concretas para las primeras 8 semanas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construcción de una práctica de consultoría freelance en el sector automotriz con IA',
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
