<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills525Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de fundraising con IA para ONGs y causas sociales',
                'description'      => 'Estrategias de marketing digital para organizaciones sin ánimo de lucro usando IA: campañas de donación personalizadas, storytelling de impacto y captación de donantes recurrentes.',
                'prompt_content'   => <<<'EOT'
Eres un director de marketing especializado en organizaciones sin ánimo de lucro y fundraising digital. Tu objetivo es ayudarme a construir una estrategia de marketing completa para captar donantes, aumentar las donaciones recurrentes y comunicar el impacto de la organización usando IA como herramienta de personalización y optimización.

**Contexto de la organización:**
Gestiono el marketing de una ONG o causa social con recursos limitados y necesidad de maximizar el impacto de cada euro invertido en comunicación. Compito por la atención de los donantes con cientos de otras organizaciones y necesito diferenciarnos tanto en el mensaje como en la experiencia del donante.

**Estrategia 1: Segmentación de donantes con IA**
Identifica y trabaja cada segmento de manera diferenciada:
- Perfiles de donantes: el donante de crisis (reacciona a emergencias), el donante comprometido (donación recurrente ideológica), el donante corporativo (RSE), el pequeño donante digital (micromecenazgo)
- Variables para segmentar: historial de donaciones, canal de captación, causa de interés, capacidad económica estimada, frecuencia de interacción con el contenido
- Personalización del mensaje según el segmento: qué argumento emocional y racional resuena con cada perfil
- Estrategia diferenciada para donantes primerizos vs. donantes recurrentes vs. donantes inactivos a reactivar
- Identificación de los donantes de mayor potencial (major donors) mediante análisis de datos con IA

**Estrategia 2: Storytelling de impacto con IA**
Comunica el impacto de manera emocionalmente efectiva:
- Framework de storytelling para ONGs: protagonista vulnerable, villano (el problema), héroe (la organización y el donante), transformación
- Generación de historias individuales de beneficiarios que ilustren el impacto de las donaciones
- Adaptación del storytelling por canal: vídeo corto para redes sociales, historia larga para email, datos visualizados para la web
- Equilibrio entre el rigor factual (datos de impacto medibles) y el impacto emocional de la narrativa humana
- Plan de contenidos de impacto: frecuencia, formatos y canales para mantener al donante informado y comprometido

**Estrategia 3: Campañas de captación de donantes con IA**
Diseña campañas de alta conversión:
- Estructura de una campaña de fundraising digital de 30 días: fases de calentamiento, lanzamiento, intensificación y cierre
- Páginas de donación optimizadas: elementos de diseño y copy que aumentan la tasa de conversión
- Estrategia de retargeting para personas que visitaron la página de donación pero no completaron el proceso
- Campañas en fechas clave: Giving Tuesday, fin de año, días internacionales de la causa
- Uso de IA para probar variantes de mensajes, imágenes y llamadas a la acción en tiempo real

**Estrategia 4: Programa de donantes recurrentes**
Construye la base de financiación sostenible:
- Argumentos para convertir una donación única en una donación mensual de menor importe
- Flujo de bienvenida para nuevos donantes recurrentes: 5 emails en las primeras 4 semanas
- Programa de fidelización de donantes: reconocimiento, transparencia y exclusividad como palancas de retención
- Gestión del churn: cuándo un donante recurrente señala intención de cancelar y cómo reactivarlo
- Actualización del importe de la donación recurrente: cuándo y cómo pedir al donante que aumente su aportación

**Estrategia 5: Marketing de emergencias y crowdfunding**
Activa la captación rápida ante una crisis humanitaria:
- Protocolo de comunicación de emergencia: primeras 24 horas, primera semana, seguimiento del impacto
- Página de donación de emergencia: diseño para máxima velocidad de carga y conversión bajo presión temporal
- Amplificación en redes sociales: cómo conseguir viralidad orgánica en una campaña de emergencia
- Colaboración con medios e influencers para ampliar el alcance de la campaña de emergencia
- Reporting de transparencia durante la campaña: cómo informar en tiempo real del uso de los fondos recibidos

**Estrategia 6: Métricas de fundraising y optimización**
Mide y mejora continuamente los resultados:
- KPIs de fundraising digital: coste de captación de donante (CAC), valor del tiempo de vida del donante (LTV), tasa de retención anual, ticket medio
- Dashboard mensual de marketing para ONGs: donaciones captadas por canal, nuevos donantes, donantes recurrentes activos
- ROI de cada canal de captación: email, redes sociales, SEM, eventos, telemarketing
- Análisis de cohortes de donantes: qué campañas generan los donantes más fieles y de mayor valor
- Plan de mejora continua: qué probar cada trimestre para optimizar los resultados de fundraising

Termina con un calendario de campañas de fundraising para los próximos 12 meses, con las campañas estacionales clave, los hitos de comunicación de impacto y los objetivos de captación por período.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de marketing digital de fundraising con IA para ONGs y causas sociales',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Plataformas de crowdfunding inteligente con IA para desarrolladores',
                'description'      => 'Diseña e implementa una plataforma de crowdfunding que usa IA para emparejar proyectos con donantes, predecir el éxito de campañas y personalizar la experiencia de recaudación.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en plataformas fintech y marketplaces de financiación colectiva. Tu objetivo es ayudarme a diseñar e implementar una plataforma de crowdfunding inteligente que use IA para maximizar las probabilidades de éxito de cada campaña y la satisfacción de los donantes.

**Contexto técnico:**
Las plataformas de crowdfunding tradicionales tienen tasas de éxito bajas (menos del 40% de las campañas alcanzan su objetivo). La IA puede mejorar estas tasas prediciendo qué campañas tienen más posibilidades de éxito, emparejando donantes con proyectos afines y optimizando el timing de las comunicaciones.

**Módulo técnico 1: Arquitectura de la plataforma de crowdfunding**
Diseña la arquitectura técnica completa:
- Arquitectura de microservicios: módulos de usuarios, campañas, pagos, recomendaciones, notificaciones y analytics
- Stack tecnológico recomendado: framework backend, base de datos relacional para transacciones, base de datos vectorial para recomendaciones
- Integración de pasarelas de pago: Stripe, PayPal y SEPA para donaciones recurrentes en Europa
- Arquitectura de datos: qué datos recopilar de cada campaña, donante e interacción para entrenar los modelos de IA
- Plan de escalabilidad: cómo manejar picos de tráfico en campañas virales sin degradar el servicio

**Módulo técnico 2: Motor de predicción de éxito de campañas**
Construye el modelo predictivo de fundraising:
- Variables predictoras del éxito de una campaña: objetivo económico, duración, categoría, calidad del vídeo y texto, red social del promotor, velocidad de captación en las primeras 48 horas
- Modelo de machine learning para predecir si una campaña alcanzará su objetivo (clasificación binaria)
- Sistema de scoring de campañas antes del lanzamiento: análisis del borrador para sugerir mejoras antes de publicar
- Detección de campañas en riesgo de fracasar: alertas al promotor con recomendaciones de acciones correctoras
- Reentrenamiento continuo del modelo con datos de nuevas campañas para mejorar la precisión

**Módulo técnico 3: Sistema de recomendación de proyectos**
Desarrolla el motor de matching donante-campaña:
- Perfil del donante: historial de donaciones, categorías de interés, importe medio, frecuencia de donación
- Algoritmo de collaborative filtering: qué campañas han apoyado donantes similares al usuario actual
- Algoritmo de content-based filtering: qué campañas encajan con las palabras clave e intereses del perfil
- Modelo híbrido: combinación de ambos enfoques con pesos ajustables según la madurez del perfil del usuario
- Diversificación de recomendaciones: evitar que el donante siempre vea el mismo tipo de proyecto

**Módulo técnico 4: Personalización de la experiencia del donante**
Usa IA para adaptar la plataforma a cada usuario:
- Dashboard personalizado: campañas recomendadas, actualizaciones de proyectos apoyados, estadísticas de impacto personal
- Notificaciones inteligentes: algoritmo que determina el momento óptimo para notificar al donante (hábitos de apertura, urgencia de la campaña)
- Comunicaciones automáticas de impacto: emails generados con IA que muestran el resultado concreto de la donación del usuario
- Sistema de fidelización: puntos, insignias y reconocimiento por contribuciones repetidas o de alto impacto
- Experiencia de donación simplificada para recurrentes: un clic para repetir la donación al mismo proyecto o promotor

**Módulo técnico 5: Herramientas para promotores de campañas**
Potencia el éxito de los creadores de campañas:
- Asistente de creación de campaña con IA: sugiere el objetivo económico óptimo, la duración, el título y la descripción
- Análisis de sentimiento del texto de la campaña: detecta si el tono emocional es el adecuado para la audiencia objetivo
- Generador de actualizaciones de campaña: plantillas que la IA personaliza con los datos de progreso de cada promotor
- Análisis de audiencia del promotor: qué segmentos de donantes tienen más afinidad con su proyecto específico
- Informe de rendimiento de campaña: dashboard en tiempo real con métricas de conversión, canales de origen y comparativa con campañas similares

**Módulo técnico 6: Seguridad, fraude y cumplimiento**
Diseña el sistema para entornos de producción seguros:
- Detección de fraude en campañas: modelos de IA para identificar campañas falsas o proyectos que no cumplen las promesas
- Verificación de identidad del promotor: nivel de verificación KYC requerido según el volumen de fondos a recaudar
- Prevención del blanqueo de capitales: reglas de compliance para plataformas de donación en Europa
- Seguridad de los datos de pago: cumplimiento PCI-DSS para el manejo de datos de tarjeta de crédito
- Auditoría de las transacciones: trazabilidad completa del dinero desde la donación hasta la disposición por el promotor

Incluye al final un plan de lanzamiento en 3 fases: MVP con las funcionalidades core de campaña y pago en 4 meses, motor de recomendación básico en el mes 6 y personalización avanzada con IA en el mes 12.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Arquitectura técnica de plataforma de crowdfunding inteligente con IA y machine learning',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de campañas de fundraising con IA para diseñadores',
                'description'      => 'Crea el sistema visual de campañas de recaudación de fondos: identidad de marca para ONGs, materiales de campaña multicanalidad y diseño de páginas de donación que convierten.',
                'prompt_content'   => <<<'EOT'
Eres un director de arte especializado en comunicación para el tercer sector y campañas de fundraising. Tu objetivo es ayudarme a diseñar un sistema visual completo para una campaña de recaudación de fondos que genere empatía, confianza y, sobre todo, donaciones.

**Contexto del proyecto:**
El diseño visual de una campaña de fundraising debe equilibrar el impacto emocional (que mueve a donar) con la transparencia y la seriedad institucional (que genera confianza). Un diseño pobre puede destruir la credibilidad de una causa genuina; un diseño excelente puede multiplicar las donaciones.

**Diseño 1: Identidad visual de la campaña de fundraising**
Construye la marca de la campaña:
- Paleta de colores para fundraising: psicología del color en campañas de donación (qué transmite urgencia, esperanza, confianza, cercanía)
- Tipografía de campaña: combinaciones que equilibren humanidad y profesionalidad para el tercer sector
- Sistema de iconografía: cómo representar visualmente el impacto de las donaciones de manera clara y honesta
- Fotografía de campaña: criterios editoriales para elegir imágenes que generen empatía sin caer en el poverty porn
- Logotipo e identidad de la campaña: cómo crear una marca temporal de campaña compatible con la identidad institucional

**Diseño 2: Página de donación de alta conversión**
Optimiza el diseño del punto de conversión más crítico:
- Jerarquía visual de la página de donación: lo primero que el ojo debe ver y el recorrido visual óptimo
- Formulario de donación: diseño que minimiza la fricción y maximiza la tasa de completado
- Propuestas de importe sugerido: cómo presentar visualmente las opciones de donación (25€, 50€, 100€, personalizado)
- Elementos de confianza visual: sellos de transparencia, porcentaje de fondos al proyecto, testimonios de impacto
- Diseño responsive para móvil: el 65% de las donaciones online se realizan desde el teléfono, el diseño debe priorizarlo
- Progreso de la campaña: barra de progreso visual que genera urgencia y sensación de movimiento colectivo

**Diseño 3: Materiales de campaña multicanal**
Crea el sistema de assets para cada plataforma:
- Pack de redes sociales: dimensiones y composición para Instagram, Facebook, Twitter/X, LinkedIn y WhatsApp
- Email de campaña: diseño de la plantilla de email de fundraising con ratio texto/imagen óptimo para evitar el spam
- Cartelería y materiales offline: poster, flyer y roll-up adaptados al lenguaje visual de la campaña
- Vídeo de campaña: guión visual y storyboard para un vídeo de 90 segundos que capture la esencia de la causa
- Material para prensa: nota de prensa con imagen de portada y kit de medios descargable

**Diseño 4: Comunicación del impacto de las donaciones**
Diseña cómo mostrar el resultado de las donaciones:
- Infografía de impacto: cómo visualizar el resultado de la campaña de manera que el donante sienta que su aportación importó
- Mapa de impacto geográfico: visualización de dónde llega el dinero recaudado
- Estadísticas de impacto: formato visual para presentar datos clave (beneficiarios atendidos, proyectos financiados, países)
- Informe de transparencia: diseño del documento anual que rinde cuentas a los donantes de manera atractiva y clara
- Certificado de donación personalizado: documento descargable que el donante puede compartir o conservar como recuerdo

**Diseño 5: Experiencia de usuario del donante**
Diseña el journey visual completo:
- Email de confirmación de donación: el primer impacto tras donar que define la relación futura con el donante
- Página de agradecimiento post-donación: diseño que celebra la acción del donante y fomenta la viralidad
- Email de bienvenida al programa de donación recurrente: presentación visual del compromiso adquirido
- Actualización periódica de impacto: diseño del email o newsletter que mantiene al donante informado y comprometido
- Tarjeta de regalo de donación: producto visual para donar en nombre de otra persona en fechas especiales

**Diseño 6: Guía de uso y sistema de diseño**
Asegura la coherencia en todo el equipo:
- Manual de identidad de campaña: reglas de uso del logotipo, colores, tipografías y fotografía
- Biblioteca de assets: dónde y cómo organizar todos los archivos para que el equipo los encuentre y use bien
- Plantillas editables: en qué formato entregar las plantillas para que el equipo pueda adaptar sin romper el diseño
- Proceso de revisión: cuántas iteraciones de diseño incluir en el proyecto y cómo gestionar el feedback del cliente
- Accesibilidad en el diseño de fundraising: contraste de color, tamaño de texto y descripción de imágenes para llegar a más donantes

Proporciona al final una lista de herramientas de IA recomendadas para cada etapa del proceso de diseño de fundraising, con casos de uso específicos y los criterios éticos a considerar al generar imágenes para causas sociales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Sistema de diseño visual para campañas de fundraising y recaudación de fondos con IA',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Captación de grandes donantes con IA para responsables de fundraising',
                'description'      => 'Estrategias de identificación, prospección y cultivo de major donors usando IA: análisis de capacidad de donación, personalización del relacionamiento y cierre de grandes aportaciones.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en major gifts y captación de grandes donantes para organizaciones sin ánimo de lucro. Tu objetivo es ayudarme a construir un programa sistemático de identificación, cultivo y cierre de donaciones de alto valor usando IA para personalizar cada interacción y maximizar las probabilidades de éxito.

**Contexto del programa:**
Las donaciones de grandes donantes (major donors) representan con frecuencia el 80% de los ingresos de una organización aunque procedan del 20% de los donantes. Identificar, cultivar y mantener estas relaciones requiere un enfoque completamente diferente al fundraising masivo, y la IA puede ser una ventaja decisiva.

**Fase 1: Identificación de prospectos de alto valor**
Encuentra a los donantes con mayor potencial:
- Análisis de la base de datos actual: señales que indican capacidad de donación alta entre donantes existentes (frecuencia, importe creciente, engagement con la causa)
- Wealth screening con IA: cómo usar datos públicos para estimar la capacidad económica de prospectos (propiedad inmobiliaria, participaciones empresariales, filantropía pública)
- Perfil del major donor potencial: características demográficas, de valores y de comportamiento filantrópico que predicen una gran donación
- Identificación de prospectos en el entorno: cómo la red de contactos del consejo directivo puede generar los mejores prospectos
- Priorización de la cartera: scoring de prospectos según capacidad estimada, afinidad con la causa y accesibilidad

**Fase 2: Investigación del prospecto**
Conoce en profundidad a cada donante potencial antes de contactar:
- Fuentes de investigación: noticias, LinkedIn, registros mercantiles, patronatos de otras organizaciones, publicaciones de su empresa
- Perfil de donante 360: intereses personales, causas que ya apoya, conexiones con la organización, historial filantrópico conocido
- Mapeo de motivaciones: qué le importa más (legado personal, impacto medible, reconocimiento, creencia en la causa, conexión emocional)
- Identificación del conector: quién en nuestra organización o consejo tiene la relación de mayor confianza con el prospecto
- Plan de entrada: cuál es la excusa natural para iniciar o profundizar la relación (evento, proyecto específico, conexión mutua)

**Fase 3: Cultivo de la relación**
Construye confianza antes de hacer la petición:
- Calendario de cultivo: plan de interacciones a 12-18 meses antes de hacer la solicitud formal
- Tipos de interacciones de cultivo: visita a proyectos, invitación a eventos exclusivos, reunión con los beneficiarios, informe personalizado de impacto
- Comunicación personalizada: cómo adaptar el lenguaje, los argumentos y los canales a las preferencias de cada prospecto
- Involucración en la organización: cómo el prospecto puede participar más allá de la donación (consejo asesor, embajador, mentor de proyectos)
- Señales de madurez para la solicitud: cómo saber cuándo el prospecto está listo para recibir la petición formal

**Fase 4: La solicitud formal de donación**
Ejecuta la petición de la gran donación:
- Preparación de la reunión de solicitud: briefing del prospecto, práctica de la conversación, materiales de apoyo
- Estructura de la conversación de solicitud: apertura, presentación del proyecto, propuesta concreta, escucha y manejo de objeciones
- Propuesta personalizada de donación: cómo presentar el proyecto que encaja con los intereses específicos del prospecto
- Opciones de donación flexibles: donación única, plurianual, naming de proyectos, legado testamentario
- Manejo del silencio y las objeciones más frecuentes de los grandes donantes

**Fase 5: Seguimiento y fidelización del major donor**
Convierte una gran donación en una relación de por vida:
- Plan de stewardship de 12 meses tras la primera gran donación: hitos de comunicación y reconocimiento
- Reporting de impacto personalizado: cómo mostrar al donante el resultado concreto de su aportación específica
- Reconocimiento público y privado: cómo equilibrar la visibilidad que el donante desea con la discreción que puede preferir
- Conversación de renovación: cuándo y cómo plantear la continuación o ampliación del compromiso
- Planificación del legado testamentario: cómo iniciar esta conversación de manera natural y respetuosa

**Fase 6: Gestión de la cartera y métricas del programa**
Optimiza el rendimiento del programa de major gifts:
- CRM para major donors: qué campos registrar, cómo documentar cada interacción y qué alertas configurar
- Métricas del programa: número de prospectos en cada fase del pipeline, tasa de conversión por fase, ticket medio, tiempo medio hasta la primera donación
- Gestión de la carga de trabajo: cuántos prospectos puede cultivar en paralelo un solo fundraiser de manera efectiva
- Informe de pipeline para la dirección: cómo presentar el estado del programa y las previsiones de ingresos
- Plan de formación continua: cómo desarrollar las habilidades de relacionamiento y negociación del equipo de major gifts

Termina con un guión detallado de la reunión de solicitud para una donación de 50.000 euros para un proyecto específico, con las transiciones entre cada fase de la conversación y las respuestas a las 5 objeciones más habituales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Programa de captación y gestión de grandes donantes con IA para ONGs',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Producto digital de recaudación de fondos con IA',
                'description'      => 'Define la estrategia de producto para herramientas digitales de fundraising: páginas de donación, apps de ONGs, sistemas de donación recurrente y funcionalidades de impacto social.',
                'prompt_content'   => <<<'EOT'
Eres un Product Manager especializado en tecnología para el tercer sector y plataformas de impacto social. Tu objetivo es ayudarme a diseñar la estrategia de producto de una herramienta digital de fundraising que maximice las donaciones, la retención de donantes y la comunicación del impacto de manera transparente.

**Contexto del producto:**
Las herramientas de fundraising digital han madurado, pero la mayoría son genéricas y no están optimizadas para las necesidades específicas de cada causa o tipo de organización. Quiero construir un producto que entienda el contexto de cada campaña y use IA para personalizar la experiencia tanto del donante como del gestor de la campaña.

**Bloque de producto 1: Definición del problema y el usuario**
Entiende los trabajos que el producto debe resolver:
- Usuarios de la plataforma: el gestor de campaña (necesita herramientas de captación y análisis), el donante individual (necesita motivación y transparencia) y la organización (necesita cumplimiento legal y reporting)
- Problemas del gestor de campaña actual: complejidad técnica para crear la página de donación, falta de insights en tiempo real, dificultad para personalizar la comunicación con donantes
- Problemas del donante actual: incertidumbre sobre el destino del dinero, experiencias de donación lentas y complicadas, falta de seguimiento del impacto de su donación
- Benchmarking de competidores: funcionalidades de Donorbox, Givebutter, Fundera y plataformas europeas como Teaming, y sus puntos débiles
- Hipótesis de valor: qué funcionalidad específica con IA podría multiplicar las donaciones de una campaña típica

**Bloque de producto 2: Funcionalidades de captación con IA**
Diseña las características que aumentan las donaciones:
- Constructor de página de donación con IA: el gestor responde 5 preguntas y la IA genera la página optimizada con el copy y la estructura de mayor conversión para esa causa
- Importe sugerido inteligente: la IA sugiere el importe de donación más probable según el perfil del visitante y el historial de donaciones similares
- Formulario de donación adaptativo: se simplifica o amplía según el dispositivo, el tiempo disponible del donante y su historial
- Urgencia dinámica: mensajes de urgencia o social proof generados en tiempo real según el progreso de la campaña
- Donación en 1 clic para donantes recurrentes: eliminación de toda la fricción para los donantes que ya han donado antes

**Bloque de producto 3: Comunicación de impacto y transparencia**
Construye la confianza del donante con datos:
- Dashboard de impacto del donante: vista personalizada que muestra el resultado acumulado de todas sus donaciones a esa organización
- Actualización automática de impacto: la IA genera el mensaje de impacto personalizado cuando se alcanza un hito del proyecto financiado
- Calculadora de impacto interactiva: el donante ve en tiempo real qué puede conseguir su donación (50€ = X raciones de comida, X meses de escolarización)
- Informe anual del donante: generado automáticamente con los datos de sus donaciones y el impacto de cada proyecto apoyado
- Certificados fiscales automáticos: generación y envío automático del certificado deducible en la declaración de renta

**Bloque de producto 4: Herramientas de gestión para la organización**
Potencia al gestor de la campaña:
- Analytics de campaña en tiempo real: origen de los donantes, tasa de conversión por canal, importe medio, donantes nuevos vs. recurrentes
- Predicción de cierre de campaña: la IA proyecta si la campaña alcanzará el objetivo con el ritmo actual y sugiere acciones si va retrasada
- Segmentador de donantes para envío de comunicaciones personalizadas desde la misma plataforma
- Gestor de donantes recurrentes: alertas de pagos fallidos, gestión de actualizaciones de datos de pago, comunicaciones automáticas de renovación
- Exportación de datos para CRM y contabilidad: integración con Salesforce, HubSpot, Holded y otros sistemas de la organización

**Bloque de producto 5: Funcionalidades de comunidad y viralidad**
Convierte a los donantes en embajadores:
- Fundraising entre pares (peer-to-peer): los donantes crean sus propias páginas de recaudación vinculadas a la campaña principal
- Retos y desafíos: mecánica de gamificación donde grupos de donantes compiten por recaudar más dentro de la misma campaña
- Compartición social integrada: el donante comparte su donación en redes sociales desde la misma página de confirmación
- Matching de donaciones: el sistema muestra en tiempo real si hay un donante corporativo que igualará cada euro donado
- Sistema de logros del donante: reconocimiento acumulado por donaciones repetidas, importes totales o diversidad de causas apoyadas

**Bloque de producto 6: Roadmap y monetización**
Planifica la evolución y el modelo de negocio del producto:
- Modelo de precios para ONGs: freemium con límite de donaciones al mes, plan básico para pequeñas organizaciones y plan completo para grandes
- Funcionalidades exclusivas del plan premium: IA de personalización avanzada, analytics profundo, integración de CRM, múltiples campañas simultáneas
- OKRs del producto por trimestre: volumen de donaciones procesadas, tasa de conversión de la página de donación, NPS de gestores y donantes
- Roadmap de 12 meses: qué funcionalidades se lanzarán y en qué orden según el impacto en los OKRs
- Estrategia de expansión: de España a otros mercados hispanohablantes con adaptaciones fiscales y legales por país

Cierra con un documento de requerimientos del producto (PRD) resumido para las 3 funcionalidades más innovadoras que se desarrollarían primero, con criterios de aceptación y métricas de éxito para cada una.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estrategia y roadmap de producto para herramientas digitales de fundraising con IA',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de voluntarios y equipos en ONGs con IA',
                'description'      => 'Estrategias de RRHH para organizaciones sin ánimo de lucro: reclutamiento de voluntarios, gestión del compromiso, prevención del burnout del tercer sector y desarrollo del equipo remunerado.',
                'prompt_content'   => <<<'EOT'
Eres un director de personas especializado en organizaciones del tercer sector con experiencia en gestión de equipos mixtos de voluntarios y empleados remunerados. Tu objetivo es ayudarme a construir un sistema de gestión de personas que maximice el impacto de cada persona que dedica su tiempo y talento a la organización.

**Contexto organizacional:**
Las ONGs tienen desafíos únicos en la gestión de personas: deben motivar a voluntarios sin compensación económica, retener a profesionales remunerados con salarios por debajo del mercado, y gestionar la presión emocional de trabajar con causas de alto impacto social. La IA puede ayudar a personalizar el cuidado de cada persona.

**Área de personas 1: Reclutamiento y selección de voluntarios**
Atrae y selecciona el voluntariado más comprometido:
- Perfil del voluntario ideal para cada tipo de rol: compromisos de tiempo, habilidades necesarias, motivaciones alineadas con la causa
- Canales de captación de voluntarios: plataformas de voluntariado (Voluntare, Fundación Telefónica), redes sociales, empresas con programas de RSE
- Proceso de selección que filtra el compromiso real sin ser burocrático: entrevista de motivación + acuerdo de voluntariado
- Onboarding de voluntarios: los primeros 30 días son críticos para convertir el interés en compromiso duradero
- Gestión de voluntariado corporativo: cómo integrar a grupos de empleados de empresas que vienen a colaborar puntualmente

**Área de personas 2: Gestión del compromiso y la motivación del voluntariado**
Mantén el compromiso del voluntario a largo plazo:
- Las 5 motivaciones principales del voluntariado y cómo satisfacerlas con la gestión del día a día
- Sistema de reconocimiento no monetario: menciones públicas, certificados de experiencia, responsabilidades crecientes
- Comunidad de voluntarios: cómo crear un sentido de pertenencia que haga que el voluntario sienta que es parte de algo grande
- Gestión de la irregularidad: cómo mantener la relación con voluntarios que tienen períodos de menor disponibilidad
- Señales de desenganche del voluntario y cómo reactivar el compromiso antes de que abandone definitivamente

**Área de personas 3: Gestión del equipo remunerado en el tercer sector**
Retén y desarrolla a los profesionales pagados:
- Propuesta de valor del empleador en el tercer sector: qué ofreces además del salario (propósito, flexibilidad, formación, impacto)
- Compensación en ONGs: cómo estructurar el salario, los beneficios sociales y las retribuciones en especie para ser competitivos con presupuesto limitado
- Evaluación del desempeño adaptada al tercer sector: cómo medir el rendimiento cuando el producto son vidas mejoradas, no cifras de ventas
- Plan de carrera en organizaciones sin ánimo de lucro: cómo ofrecer crecimiento cuando la estructura es plana
- Gestión de la tensión entre la cultura de sacrificio del sector y la sostenibilidad personal de los empleados

**Área de personas 4: Prevención del burnout en el tercer sector**
Cuida la salud emocional de tu equipo:
- Factores de riesgo específicos del burnout en el tercer sector: empatía excesiva, recursos insuficientes, frustración sistémica, doble jornada (laboral y de compromiso personal)
- Protocolo de detección temprana de burnout: señales de alarma en el comportamiento y el rendimiento del equipo
- Cultura organizacional que normaliza el autocuidado: cómo hablar de la salud mental sin estigma en una organización de ayuda
- Supervisión y espacios de procesamiento emocional: herramientas para equipos que trabajan con colectivos vulnerables
- Políticas de desconexión y equilibrio: límites de disponibilidad, vacaciones reales y períodos de descanso entre proyectos intensos

**Área de personas 5: Formación y desarrollo en ONGs**
Desarrolla el talento con presupuesto ajustado:
- Plan de formación de bajo coste con alto impacto: recursos gratuitos, intercambio de conocimientos interno, mentoring entre organizaciones del sector
- Competencias clave para el equipo de fundraising: comunicación, gestión de relaciones, análisis de datos, uso de herramientas de IA
- Formación en IA para el tercer sector: qué herramientas pueden aprender a usar el equipo de voluntarios y empleados para multiplicar su impacto
- Certificaciones y formación continua como palanca de retención: el compromiso con el desarrollo profesional del empleado
- Programas de intercambio con otras ONGs: cómo el aprendizaje entre pares multiplica el conocimiento del sector

**Área de personas 6: Métricas de gestión de personas en ONGs**
Mide lo que importa para mejorar la gestión:
- Tasa de retención de voluntarios: porcentaje que permanece activo tras 6 y 12 meses del primer día
- Horas de voluntariado por causa y su equivalente en valor económico para la organización
- Índice de satisfacción del equipo remunerado: encuesta anónima semestral y tendencia
- Rotación del equipo remunerado y coste real de cada sustitución para la organización
- ROI de la inversión en formación y bienestar: impacto en productividad, retención y calidad de los proyectos

Proporciona al final un plan de bienestar para el equipo de 12 meses, con acciones concretas para cada trimestre que equilibren las demandas del trabajo con el cuidado de las personas que lo hacen posible.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestión de voluntarios y equipos remunerados en organizaciones del tercer sector con IA',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero y presupuestación en ONGs con IA',
                'description'      => 'Gestión financiera de organizaciones sin ánimo de lucro: presupuesto por proyectos, reporting de fondos restringidos, análisis de sostenibilidad y modelos de diversificación de ingresos.',
                'prompt_content'   => <<<'EOT'
Eres un director financiero especializado en el sector no lucrativo con experiencia en gestión de fondos restringidos, reporting a donantes institucionales y modelos de financiación sostenible para ONGs. Tu objetivo es ayudarme a construir un sistema financiero robusto que permita a la organización crecer sin comprometer su misión.

**Contexto financiero:**
Las organizaciones sin ánimo de lucro enfrentan retos financieros únicos: dependencia de pocos financiadores, fondos restringidos a proyectos específicos, obligación de transparencia total ante donantes y sociedad, y la necesidad de equilibrar el impacto social con la sostenibilidad económica.

**Pilar financiero 1: Presupuesto por proyectos y actividades**
Construye el modelo presupuestario de la organización:
- Estructura de presupuesto para ONGs: separación entre costes directos de proyectos y costes estructurales (overhead)
- Presupuestación de proyectos con fondos restringidos: cómo ajustar los gastos a las condiciones del financiador
- Política de imputación de costes indirectos a proyectos: qué porcentaje de overhead es aceptable para diferentes tipos de financiadores
- Gestión del cash flow cuando los proyectos se financian por anticipos y justificaciones: cómo evitar la descapitalización
- Fondo de reserva estratégica: cuántos meses de gastos estructurales debe tener la organización para ser resiliente

**Pilar financiero 2: Gestión de fondos restringidos y reporting a donantes**
Cumple con las obligaciones de los financiadores:
- Sistema de seguimiento de fondos por proyecto y financiador: cómo garantizar que cada euro se gasta en lo que se prometió
- Plantilla de justificación económica para subvenciones: estructura, documentación requerida y errores más frecuentes
- Reporting financiero a donantes privados: cómo presentar las cuentas de manera transparente y atractiva para no contadores
- Gestión de desviaciones presupuestarias en proyectos: cómo comunicar y justificar al financiador cuando los costes reales difieren del presupuesto aprobado
- Cierre económico de proyectos: proceso para justificar completamente un proyecto y liberar el saldo no ejecutado

**Pilar financiero 3: Diversificación de las fuentes de financiación**
Reduce la dependencia de un único financiador:
- Análisis de la cartera de financiadores actual: concentración de riesgo y vulnerabilidades del modelo actual
- Mapa de fuentes de financiación disponibles: subvenciones públicas, donantes privados, fundaciones, empresas (RSE), ingresos propios
- Estrategia de diversificación: cómo ampliar la base de financiadores en un período de 3 años sin sobrecargar el equipo
- Ingresos propios en ONGs: actividades generadoras de ingresos compatibles con la misión (formación, consultoría, venta de productos de impacto)
- Evaluación del riesgo financiero ante la pérdida del mayor financiador: simulación de escenarios y planes de contingencia

**Pilar financiero 4: Análisis de sostenibilidad y viabilidad**
Evalúa la salud financiera de la organización:
- Indicadores de sostenibilidad financiera para ONGs: cobertura de gastos estructurales con fondos propios o no restringidos, nivel de reservas, concentración de ingresos
- Análisis del coste por beneficiario: eficiencia en la entrega del impacto social por cada euro gastado
- Benchmarking con organizaciones similares: cómo comparar la eficiencia y la estructura de costes con el sector
- Proyección financiera a 3 años: escenarios de crecimiento sostenido, estancamiento y crisis de financiación
- Plan de saneamiento financiero: qué medidas tomar cuando los indicadores de sostenibilidad se deterioran

**Pilar financiero 5: Transparencia y rendición de cuentas**
Cumple con los más altos estándares de transparencia:
- Cuentas anuales de una ONG: qué incluir en la memoria económica más allá de lo legalmente exigido
- Ratios de eficiencia que los donantes y la sociedad valoran: porcentaje de fondos al proyecto vs. administración, coste de captación de fondos
- Informe de impacto social con datos económicos: cómo combinar los resultados sociales con la información financiera
- Sellos de calidad y transparencia para ONGs en España: Fundación Lealtad, ONG con valores, y sus requisitos financieros
- Comunicación de la situación financiera a la junta directiva: cómo presentar el estado financiero de manera comprensible para no financieros

**Pilar financiero 6: Tecnología financiera para ONGs**
Optimiza la gestión financiera con herramientas digitales:
- Software de gestión financiera para el tercer sector: comparativa de Sage, Holded, Odoo y soluciones específicas para ONGs
- Automatización de la justificación económica con IA: cómo reducir el tiempo de preparación de informes financieros
- Integración entre la plataforma de donaciones, el CRM de donantes y la contabilidad
- Control de gastos en tiempo real: apps y herramientas para que el equipo de proyectos gestione sus gastos con visibilidad inmediata
- Reporting automático a financiadores: generación de informes periódicos a partir de los datos del sistema de gestión

Termina con una hoja de ruta de transformación financiera para una ONG en crecimiento, con las acciones prioritarias en los primeros 6 meses para mejorar la solidez y la transparencia del modelo financiero.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestión financiera, presupuestación y sostenibilidad económica en organizaciones sin ánimo de lucro',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal del fundraising y las donaciones en España con IA',
                'description'      => 'Analiza el marco jurídico del fundraising en España: régimen fiscal de las donaciones, constitución de ONGs, cumplimiento de la Ley de Mecenazgo y obligaciones legales del crowdfunding.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en el derecho del tercer sector y la filantropía con experiencia en asesoramiento a ONGs, fundaciones y plataformas de crowdfunding en España. Tu objetivo es ayudarme a construir un marco legal sólido para las actividades de fundraising y captación de fondos de mi organización.

**Contexto legal:**
Las organizaciones sin ánimo de lucro en España operan en un entorno legal complejo: el régimen fiscal de las donaciones, la Ley de Mecenazgo, las obligaciones de las entidades de utilidad pública y la regulación del crowdfunding exigen un conocimiento especializado que muchas ONGs no tienen internamente.

**Marco legal 1: Formas jurídicas para organizaciones sin ánimo de lucro**
Elige la forma jurídica más adecuada:
- Diferencias entre asociación, fundación y entidad de utilidad pública: ventajas, desventajas y requisitos de cada forma
- Proceso de constitución de una fundación en España: requisitos del patronato, dotación mínima, registro y reconocimiento de interés general
- Entidades de utilidad pública: qué ventajas fiscales otorga esta calificación y cómo solicitarla al Ministerio del Interior
- Régimen fiscal de las asociaciones sin ánimo de lucro: exenciones, obligaciones de declaración y límites de la actividad económica accesoria
- Gobernanza de las ONGs: obligaciones legales del consejo directivo o patronato en materia de supervisión y rendición de cuentas

**Marco legal 2: Régimen fiscal de las donaciones en España**
Conoce el incentivo fiscal para maximizar las donaciones:
- Deducciones fiscales por donativos en la renta: porcentajes actuales, límites y diferenciación según la entidad receptora
- Deducciones en el impuesto de sociedades para empresas donadoras: requisitos y límites del mecenazgo empresarial
- Certificado de deducibilidad: qué debe incluir para que el donante pueda aplicar la deducción en su declaración
- Donaciones en especie: valoración, documentación y tratamiento fiscal de las donaciones no monetarias
- Régimen especial de la Ley 49/2002 (Ley de Mecenazgo): a quién aplica y qué ventajas fiscales adicionales otorga

**Marco legal 3: La nueva Ley de Mecenazgo en tramitación**
Prepárate para los cambios regulatorios en el mecenazgo:
- Estado actual de la reforma de la Ley de Mecenazgo y principales novedades previstas
- Nuevas formas de mecenazgo que se pretenden regular: crowdfunding, micromecenazgo, mecenazgo recurrente
- Ampliación de los incentivos fiscales previstos: porcentajes de deducción y nuevas modalidades de deducción
- Impacto de la reforma en la estrategia de fundraising de las organizaciones
- Acciones preparatorias: qué debe hacer la organización ahora para estar lista cuando entre en vigor la nueva ley

**Marco legal 4: Regulación del crowdfunding en España**
Cumple con la normativa de financiación participativa:
- Ley del Mercado de Valores y el Reglamento Europeo de Crowdfunding: diferencias entre crowdfunding de inversión y de donación
- Crowdfunding de donación: ¿está regulado en España? Obligaciones de las plataformas y de las organizaciones que lanzan campañas
- Deberes de transparencia en campañas de crowdfunding: qué información debe publicar la organización sobre el uso de los fondos
- Responsabilidad legal del promotor de una campaña de crowdfunding que no cumple sus promesas
- Crowdfunding con recompensas: implicaciones fiscales del IVA cuando la recompensa tiene valor económico

**Marco legal 5: Protección de datos en fundraising**
Cumple el RGPD en la captación y gestión de donantes:
- Base legal para tratar los datos de donantes: contrato, consentimiento o interés legítimo según el tipo de tratamiento
- Información que debe incluir la política de privacidad de una ONG que hace fundraising digital
- Derechos de los donantes: cómo gestionar las solicitudes de acceso, rectificación, supresión y portabilidad de datos
- Email marketing a donantes: cuándo es necesario el consentimiento explícito y cuándo aplica el interés legítimo
- Transferencia de datos de donantes a plataformas de fundraising internacionales: cláusulas contractuales tipo requeridas

**Marco legal 6: Obligaciones legales de reporting y transparencia**
Cumple con las obligaciones de rendición de cuentas:
- Cuentas anuales de fundaciones y asociaciones: cuándo son obligatorias, qué deben incluir y dónde se depositan
- Memoria de actividades: qué debe incluir el informe anual de actividades para cumplir con las obligaciones legales
- Auditoría de cuentas: a partir de qué volumen de ingresos es obligatoria la auditoría externa para las entidades sin ánimo de lucro
- Obligaciones frente al Protectorado de Fundaciones: supervisión, informes periódicos y respuesta a requerimientos
- Consecuencias legales del incumplimiento: pérdida de beneficios fiscales, responsabilidad del patronato y sanciones administrativas

Proporciona al final una checklist de compliance legal para una ONG española que hace fundraising digital, con los 15 puntos más urgentes que debe verificar para operar con plenas garantías legales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Marco jurídico y compliance legal del fundraising y las donaciones en España',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención y fidelización de donantes con IA para ONGs',
                'description'      => 'Diseña el sistema de atención al donante de una ONG usando IA: onboarding de nuevos donantes, gestión de consultas sobre el uso de fondos, retención de donantes recurrentes y reactivación.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en donor relations y customer success para organizaciones sin ánimo de lucro. Tu objetivo es ayudarme a construir un sistema de atención al donante que maximice la satisfacción, la retención y el valor de vida de cada persona que decide apoyar nuestra causa.

**Contexto del servicio:**
Los donantes de una ONG no son "clientes" en el sentido tradicional, pero esperan una experiencia de igual calidad: quieren saber que su dinero llega donde prometiste, que la organización es seria y transparente, y que su apoyo marca una diferencia real. La IA puede ayudarnos a personalizar esta relación a escala.

**Pilar de atención 1: Bienvenida y onboarding del nuevo donante**
Crea una primera experiencia memorable:
- Email de bienvenida inmediato: qué decir en los primeros 5 minutos tras la primera donación para generar el compromiso
- Secuencia de onboarding de 30 días: 5 emails que transforman una donación puntual en una relación comprometida
- Vídeo de bienvenida personalizado: cómo usar herramientas de IA para personalizar el mensaje de agradecimiento del director o de un beneficiario
- Kit de bienvenida digital: qué recursos compartir para que el donante entienda la organización, el proyecto y el impacto esperado
- Primer informe de impacto personalizado: cómo mostrar al donante en los primeros 90 días que su aportación ya está en marcha

**Pilar de atención 2: Gestión de consultas y comunicación con el donante**
Atiende todas las dudas con rapidez y transparencia:
- Preguntas frecuentes de donantes: las 20 preguntas más habituales sobre el uso de fondos, la eficiencia de la organización y el impacto del proyecto
- Chatbot de atención al donante: qué puede resolver el bot y qué debe escalar al equipo humano de donor relations
- Canales de atención: email, WhatsApp, teléfono y redes sociales (cuál para qué tipo de consulta)
- Tiempo de respuesta comprometido: estándar de atención y cómo gestionarlo con el equipo de voluntarios y empleados
- Comunicación proactiva: cuándo contactar al donante sin que él haya preguntado (actualización de proyecto, hito alcanzado, emergencia)

**Pilar de atención 3: Retención del donante recurrente**
Mantén el compromiso mes a mes:
- Señales de churn del donante recurrente: comportamiento que predice la cancelación inminente de la donación mensual
- Flujo de retención proactiva: cuándo y cómo contactar al donante en riesgo antes de que cancele
- Gestión de pagos fallidos: cómo comunicar y resolver el problema de un cobro rechazado sin perder al donante
- Actualización de datos de pago: facilitar al máximo el proceso para que el donante actualice su tarjeta o cuenta bancaria
- Propuesta de pausa: ofrecer una pausa temporal en lugar de la cancelación definitiva cuando el donante tiene dificultades económicas

**Pilar de atención 4: Comunicación de impacto personalizada**
Muestra a cada donante el resultado concreto de su aportación:
- Informe de impacto semestral personalizado: datos del proyecto apoyado + cálculo del impacto proporcional de la donación del suscriptor
- Historia de impacto mensual: un beneficiario real, un proyecto específico, narrado de manera que el donante sienta la conexión
- Hitos del proyecto: cómo comunicar cuando se alcanza el 25%, 50%, 75% y el 100% del objetivo del proyecto financiado
- Actualizaciones de emergencia: cómo comunicar al donante cuando hay una situación crítica en el proyecto que apoya
- Reporte anual al donante: resumen del año, impacto global de la organización y perspectivas para el año siguiente

**Pilar de atención 5: Gestión de quejas y situaciones delicadas**
Maneja los momentos críticos con transparencia:
- Protocolo de respuesta a quejas sobre el uso de fondos: cómo investigar y comunicar la resolución
- Gestión de la crisis reputacional: qué hacer cuando una noticia negativa sobre la organización impacta en la confianza de los donantes
- Devolución de donaciones: cuándo y cómo devolver una donación si el donante lo solicita o si no se puede cumplir el compromiso prometido
- Donante fallecido: protocolo de comunicación con la familia y gestión del legado testamentario
- Donante que cuestiona la eficiencia de la organización: cómo responder con datos y transparencia sin resultar defensivo

**Pilar de atención 6: Métricas de atención al donante**
Mide y optimiza la calidad del servicio:
- Tasa de retención de donantes recurrentes anual y comparativa con benchmarks del sector
- NPS de donantes: cuándo pedirlo y cómo actuar sobre los resultados por segmento
- Tiempo medio de resolución de consultas por canal y tipo de consulta
- Tasa de reactivación de donantes inactivos tras campaña de win-back
- Valor del tiempo de vida del donante (DLTV) y factores que más lo aumentan en nuestra organización

Termina con una guía de voz y tono para toda la comunicación con donantes de la organización, con ejemplos de cómo escribir para transmitir transparencia, gratitud e impacto en cada tipo de comunicación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Sistema de atención y fidelización de donantes con IA para organizaciones sin ánimo de lucro',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría de fundraising freelance con IA',
                'description'      => 'Construye una práctica independiente de consultoría de fundraising usando IA: desde la especialización en captación digital hasta la entrega de estrategias de recaudación para ONGs y causas sociales.',
                'prompt_content'   => <<<'EOT'
Eres un consultor experto en fundraising y captación de fondos para el tercer sector con experiencia en proyectos de transformación digital para ONGs de diferente tamaño y causa. Tu objetivo es ayudarme a construir una práctica de consultoría independiente de fundraising que use IA para entregar más valor a mis clientes y escalar mi negocio de manera sostenible.

**Contexto del freelance:**
El tercer sector en España y América Latina está invirtiendo cada vez más en la profesionalización de su fundraising digital. Las ONGs necesitan expertise externo para implementar estrategias de captación online, y la IA está creando oportunidades para consultores que sepan combinar el conocimiento del sector con las nuevas herramientas digitales.

**Pilar 1: Definición de la especialización de consultoría de fundraising**
Construye tu nicho en el tercer sector:
- Las 5 áreas de consultoría de fundraising con mayor demanda: captación digital, major donors, fundaciones corporativas, fundraising de emergencias, legacy planning
- Cómo elegir mi especialización según mi experiencia, mis intereses y el potencial de mercado
- Causas y tipos de organizaciones en las que me especializaré: salud, medioambiente, infancia, derechos humanos, cultura
- Propuesta de valor diferenciada: qué ofrezco que un consultor generalista o una agencia de marketing no pueden ofrecer
- Cómo el conocimiento del tercer sector me protege frente a la competencia de consultores puramente digitales

**Pilar 2: Captación de clientes ONGs y fundaciones**
Desarrolla tu estrategia comercial en el sector:
- Red de contactos clave en el sector: responsables de fundraising, directores de organizaciones, gestores de fundaciones financiadoras
- Participación en el ecosistema: jornadas de fundraising, asociaciones del sector (AFP España, CONGDE), grupos de LinkedIn de profesionales del tercer sector
- Estrategia de contenido para posicionarte: artículos sobre tendencias de fundraising, casos de éxito (anonimizados), recursos gratuitos para ONGs
- Propuesta de diagnóstico inicial: cómo ofrecer un análisis breve y de bajo riesgo que demuestre tu valor antes del contrato formal
- Proceso de ventas adaptado al sector: tiempos de decisión más lentos, múltiples aprobadores, presupuestos ajustados

**Pilar 3: Metodología de consultoría de fundraising con IA**
Usa IA para entregar proyectos de mayor calidad:
- Framework de diagnóstico de fundraising: análisis de la situación actual de la organización en 2-3 semanas (fuentes de ingresos, donantes, herramientas, equipo)
- Benchmarking sectorial acelerado con IA: cómo construir comparativas de captación con datos públicos y estudios del sector
- Diseño de estrategias de captación: uso de IA para estructurar el plan, generar ideas de campaña y calcular proyecciones de ingresos
- Elaboración de materiales de consultoría: uso de IA para transformar el análisis en presentaciones ejecutivas y planes de acción accionables
- Acompañamiento en la implementación: cómo apoyar al equipo de la ONG en la ejecución del plan sin hacer el trabajo por ellos

**Pilar 4: Gestión de proyectos y entrega de valor**
Organiza tu práctica como un negocio profesional:
- Tipos de proyectos y estructura de precios: auditoría de fundraising, diseño de estrategia, acompañamiento de campaña, formación del equipo, retainer mensual
- Contrato de consultoría para ONGs: cláusulas clave sobre confidencialidad, entregables, plazos y condiciones de pago
- Gestión de expectativas: cómo establecer desde el inicio qué puede y no puede conseguirse con la consultoría
- Documentación del proyecto: qué entregables formalizan cada fase del trabajo y protegen al consultor y al cliente
- Gestión de proyectos con equipos de voluntarios: cómo trabajar cuando el equipo de la ONG es parcialmente voluntario y su disponibilidad es limitada

**Pilar 5: Posicionamiento como referente en fundraising digital**
Construye tu autoridad en el sector:
- Newsletter de fundraising digital: contenido semanal que posiciona al consultor como la fuente de referencia para profesionales del tercer sector
- Guías y recursos gratuitos: cómo crear materiales de alto valor que atraigan a ONGs que luego contratan consultoría
- Participación como formador en escuelas de fundraising, universidades y programas de ONGs
- Publicación de casos de éxito: cómo documentar y difundir resultados de proyectos respetando la confidencialidad del cliente
- Colaboración con fundaciones financiadoras: posicionarse como proveedor de formación y consultoría para las ONGs que financian

**Pilar 6: Escalado y sostenibilidad de la práctica**
Crece más allá del modelo unipersonal:
- Cuándo incorporar a otros consultores freelance especialistas: copywriter de fundraising, especialista en Facebook Ads para ONGs, diseñador de páginas de donación
- Productos de consultoría escalables: cursos online, plantillas de estrategia de fundraising, herramientas de diagnóstico digital
- Modelo de retainer con organizaciones medianas: ingresos recurrentes mensuales como base de la práctica
- Internacionalización: cómo llevar la práctica a América Latina donde la demanda de fundraising digital está en pleno crecimiento
- Evaluación del impacto personal: cómo medir el impacto social de tu trabajo de consultoría más allá de los ingresos generados

Termina con un plan de negocio de 6 meses para lanzar o relanzar tu práctica de consultoría de fundraising, con objetivos de ingresos, número de clientes objetivo, canales de captación prioritarios y las 10 acciones concretas para las primeras 8 semanas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construcción de práctica freelance de consultoría de fundraising para el tercer sector con IA',
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
