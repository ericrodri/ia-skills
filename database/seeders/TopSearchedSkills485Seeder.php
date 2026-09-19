<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills485Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing inmobiliario con inteligencia artificial',
                'description'       => 'Aprende a usar Claude para crear estrategias de marketing inmobiliario más efectivas: anuncios que convierten, segmentación de compradores e inquilinos, y campañas personalizadas basadas en datos del mercado.',
                'prompt_content'    => <<<'EOT'
Eres un experto en marketing inmobiliario digital y en el uso de IA para la generación de demanda en el sector proptech. Necesito que me ayudes a crear una estrategia de marketing inmobiliario completa que maximice las consultas cualificadas y reduzca el tiempo de comercialización de las propiedades.

**Contexto de mi agencia:**
Tenemos una cartera de 85 inmuebles activos: 60% pisos de venta, 25% viviendas de alquiler y 15% locales comerciales. Operamos en tres ciudades medianas. Nuestro mayor problema es que recibimos muchas consultas poco cualificadas (compradores que no tienen financiación aprobada, personas que buscan algo muy diferente a lo que ofrecemos) y tardamos una media de 128 días en cerrar una venta.

**instrucción de estrategia de contenidos:**
Actúa como mi director de marketing inmobiliario. Ayúdame a crear:

1. Una estrategia de contenidos para Instagram y TikTok que muestre la vida en cada barrio, no solo el piso.
2. Anuncios de Facebook/Instagram Ads segmentados por perfil de comprador: familias con hijos, inversores, jóvenes compradores de primera vivienda, jubilados.
3. Textos de anuncios para portales inmobiliarios (Idealista, Fotocasa) que destaquen los beneficios únicos de cada propiedad.
4. Secuencia de emails de nurturing para compradores que han mostrado interés pero no han tomado decisión.
5. Estrategia de SEO local para posicionarnos como la agencia de referencia en cada barrio donde operamos.

**tarea de redacción de anuncios inmobiliarios:**
Para cada tipo de inmueble, escribe un anuncio completo con:
- Titular impactante (máximo 60 caracteres para portales)
- Descripción principal (150-200 palabras) que evoque el estilo de vida
- Lista de características técnicas (m², habitaciones, extras)
- Call to action específico
- Hashtags para redes sociales

Tipo de inmueble de ejemplo: piso de 85m² en el centro histórico de una ciudad mediana, 3 habitaciones, reformado recientemente, con terraza de 12m², precio 285.000€.

**objetivo de cualificación de leads:**
Diseña el proceso de cualificación de consultas entrantes usando IA:
- Formulario de precualificación que filtre compradores según capacidad de financiación
- Chatbot de primera respuesta que clasifique la intención del comprador (urgencia, presupuesto, zona)
- Secuencia automática de preguntas para leads que llegan por WhatsApp
- Criterios de puntuación (lead scoring) para priorizar qué consultas atender primero
- Momento óptimo para escalar de la IA al agente humano

**Análisis de mercado para el cliente:**
Ayúdame a crear informes personalizados de mercado para los vendedores de propiedades:
- Análisis de precios de venta recientes en la zona (últimos 6 meses)
- Tiempo medio de comercialización según tipología y precio
- Demanda actual por zona: número de búsquedas activas que encajan con su propiedad
- Recomendación de precio de salida basada en datos de mercado
- Estrategia de reducción de precio si la propiedad no recibe consultas en 30 días

**Contenido educativo para compradores:**
Crea una serie de contenidos para ayudar a los compradores de primera vivienda:
- Guía visual de los pasos del proceso de compra (desde buscar hasta firmar)
- Calculadora de cuánto puedo pagar con mi sueldo y ahorros
- Explicación de los gastos adicionales al precio de compra (ITP/AJD, notaría, registro)
- Checklist de visita: qué revisar en cada visita a un piso
- Guía para entender una tasación hipotecaria

**Plan de marketing por tipo de propiedad:**
Diseña una estrategia específica para:
- Piso de lujo (+500.000€): canales y mensajes premium, énfasis en privacidad y exclusividad
- Primera vivienda (150.000-250.000€): énfasis en financiación, ayudas y seguridad jurídica
- Inversión para alquiler: ROI, rentabilidad bruta, demanda de alquiler en la zona
- Local comercial: retorno de inversión, tráfico peatonal, análisis de viabilidad de negocio

Empieza creando los 3 anuncios para el piso de ejemplo que te he descrito y luego diseñamos la estrategia de cualificación de leads.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Estrategia completa de marketing inmobiliario digital con cualificación de leads y contenidos que convierten',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Desarrollo de plataformas proptech con IA',
                'description'       => 'Usa Claude para diseñar y construir funcionalidades proptech avanzadas: algoritmos de valoración automatizada de propiedades, motores de recomendación inmobiliaria y APIs de análisis de mercado en tiempo real.',
                'prompt_content'    => <<<'EOT'
Eres un arquitecto de software senior especializado en plataformas proptech y en la integración de modelos de machine learning en sistemas de gestión inmobiliaria. Necesito que me ayudes a diseñar y desarrollar funcionalidades de IA para una plataforma inmobiliaria digital.

**Contexto del proyecto:**
Estamos construyendo una plataforma proptech B2B para agencias inmobiliarias medianas (20-100 agentes). El stack actual es: Laravel 11 en el backend, Vue 3 en el frontend, PostgreSQL como base de datos principal, Redis para caché. Tenemos 45.000 propiedades indexadas y datos de transacciones de los últimos 5 años en nueve ciudades españolas.

**instrucción de arquitectura del módulo de valoración automática:**
Diseña el sistema de AVM (Automated Valuation Model) con estos componentes:

1. Pipeline de datos: cómo ingerir, limpiar y normalizar los datos de transacciones inmobiliarias.
2. Feature engineering: qué variables predictoras usar (m², ubicación, año de construcción, planta, orientación, extras, proximidad a servicios).
3. Modelo de ML: qué algoritmo usar (Random Forest, Gradient Boosting, red neuronal) y por qué.
4. API de valoración: endpoint REST que reciba las características de un inmueble y devuelva precio estimado con intervalo de confianza.
5. Explicabilidad: cómo mostrar al usuario qué factores impactan más en el precio estimado.

**tarea de motor de recomendación:**
Diseña el sistema de recomendación de propiedades para compradores:
- Filtrado colaborativo: usuarios con comportamiento similar han mostrado interés en estas propiedades
- Filtrado basado en contenido: propiedades similares a las que el usuario ha marcado como favoritas
- Modelo híbrido: combinar ambos enfoques con ponderación dinámica
- Cold start problem: cómo recomendar a usuarios nuevos sin historial
- Re-ranking: ajustar recomendaciones según disponibilidad y urgencia de venta del vendedor

**objetivo de análisis de mercado en tiempo real:**
Construye el módulo de Market Intelligence:
- Scraping ético de portales inmobiliarios para datos de oferta disponible
- Procesamiento de señales de demanda: búsquedas, favoritos, contactos por zona y tipología
- Dashboard de heat maps de precios por barrio (integración con Mapbox o Leaflet)
- Alertas automáticas cuando aparece una propiedad por debajo del precio de mercado
- Índice de liquidez por zona: cuánto tarda en venderse un piso de cada tipología

**Integración con Claude API:**
Diseña los casos de uso de Claude como capa de inteligencia:
- Generación automática de descripciones de propiedades a partir de las fichas técnicas
- Análisis de descripciones de propiedades en portales para extraer características no estructuradas
- Respuesta a preguntas frecuentes de compradores sobre propiedades específicas
- Generación de informes de valoración en lenguaje natural para el agente
- Extracción de datos de contratos de alquiler y compraventa en PDF

**Arquitectura de microservicios proptech:**
Diseña la separación en servicios de la plataforma:
- Servicio de propiedades: CRUD de fichas inmobiliarias con multimedia
- Servicio de valoración: AVM con modelo ML propio
- Servicio de búsqueda: Elasticsearch para búsqueda geoespacial avanzada
- Servicio de IA: integración con Claude API para las funcionalidades de lenguaje
- Servicio de notificaciones: alertas de mercado y actualizaciones de propiedades
- Servicio de analytics: métricas de la agencia y rendimiento de agentes

**Código base que necesito:**
Escribe los siguientes componentes en Laravel/PHP:
- Modelo Eloquent `Property` con todos los atributos y relaciones necesarias
- Clase `PropertyValuationService` que integre el modelo ML externo vía API
- Endpoint API `POST /api/v1/properties/{id}/valuation` con su FormRequest y Resource
- Job de Laravel para actualizar valoraciones masivamente en background
- Comando Artisan para importar propiedades desde CSV de portales inmobiliarios

Empieza con el diseño de la base de datos para el módulo de propiedades y el esquema de features del AVM.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 90,
                'use_case'          => 'Diseño y desarrollo de módulos proptech: AVM, motor de recomendación y análisis de mercado inmobiliario',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de tours virtuales inmobiliarios con IA',
                'description'       => 'Aprende a usar Claude para diseñar experiencias de tour virtual inmobiliario más inmersivas: staging virtual, recorridos guiados por IA, personalización del espacio y materiales de presentación visual de propiedades.',
                'prompt_content'    => <<<'EOT'
Eres un experto en diseño de experiencias inmersivas para el sector inmobiliario y en el uso de IA para la visualización y presentación de propiedades. Necesito que me ayudes a crear tours virtuales y experiencias de visualización de propiedades más impactantes y que aceleren la decisión de compra.

**Mi situación como diseñador inmobiliario:**
Trabajo como diseñador freelance para agencias inmobiliarias y promotoras. Me piden crear materiales visuales para propiedades: desde pisos de segunda mano que necesitan restyling virtual hasta promociones de obra nueva donde todo el proyecto existe solo en planos. El cliente quiere que los compradores puedan "sentir" cómo sería vivir en la propiedad antes de visitarla físicamente.

**instrucción de estrategia de staging virtual:**
Actúa como mi consultor de visualización inmobiliaria. Ayúdame a:

1. Definir el flujo de trabajo para transformar fotos de pisos vacíos o anticuados en renders de staging virtual.
2. Crear las especificaciones de diseño para cada tipo de espacio (salón, dormitorio, cocina, baño, terraza).
3. Diseñar la guía de estilo de staging según el perfil del comprador objetivo.
4. Seleccionar las herramientas de IA de staging virtual más adecuadas según el presupuesto del proyecto.
5. Crear el briefing tipo que pido a la IA de staging para obtener resultados coherentes.

**tarea de diseño de tour virtual interactivo:**
Para una promoción de obra nueva de 40 pisos, diseña la experiencia de tour virtual:
- Plano de planta interactivo como punto de partida: el comprador hace clic en cada estancia
- Recorrido 360° por cada habitación con hotspots informativos
- Selector de acabados: el comprador puede cambiar entre cocina blanca, gris y madera
- Comparador de tipologías: piso de 2 o 3 habitaciones en el mismo edificio
- Vista desde la terraza a diferentes horas del día (amanecer, tarde, noche)
- Integración del plano de planta con la orientación y vistas reales del edificio

**objetivo de personalización del espacio:**
Diseña la funcionalidad de "personalización virtual" que permite al comprador:
- Cambiar el color de las paredes para ver cómo quedaría su decoración
- Ver el espacio amueblado según tres estilos diferentes (escandinavo, mediterráneo, minimalista)
- Calcular si su mobiliario actual cabe en las habitaciones (integración de medidas reales)
- Ver el piso con diferentes configuraciones de muebles
- Simular la distribución de un dormitorio de bebé si la familia está esperando un hijo

**Materiales de presentación inmobiliaria:**
Ayúdame a crear los briefings para generar con IA:
- Fotografías de ambiente externas: fachada del edificio en diferentes estaciones
- Infografías del barrio: mapa de servicios cercanos (colegios, transporte, supermercados)
- Vídeo de lifestyle: imágenes de la vida cotidiana en ese tipo de vivienda y barrio
- Cartel comercial para obra nueva: composición, jerarquía de información, elementos visuales
- Dossier digital de ventas: estructura y diseño del PDF interactivo para enviar por email

**Guía de estilo según perfil comprador:**
Define el sistema de diseño visual para cada segmento:
- Familias con hijos: espacios amplios, luz natural, almacenamiento, zona de juegos
- Parejas jóvenes: diseño moderno, home office, tecnología smart home
- Inversores para alquiler: materiales duraderos, bajo mantenimiento, rentabilidad destacada
- Jubilados: accesibilidad, tranquilidad, espacios comunes del edificio
- Compradores internacionales: énfasis en localización, calidad de vida española, comparativa de precios

**Especificaciones técnicas de entrega:**
Define los formatos de entrega para cada material:
- Renders interiores: resolución mínima, ratio de aspecto, formatos de archivo
- Tour virtual 360°: plataformas recomendadas (Matterport, Kuula, My360), embed en web
- Vídeo walkthrough: duración ideal, ratio, formato para portales vs redes sociales
- Fotografías de staging virtual: cuántas por propiedad, qué estancias son imprescindibles
- Assets para redes sociales: stories, posts cuadrados, videos cortos para Reels/TikTok

Empieza con el briefing completo de staging virtual para un piso vacío de 90m² con 3 habitaciones orientado a familias con hijos.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseño de tours virtuales, staging digital y experiencias visuales inmersivas para propiedades inmobiliarias',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'CRM inmobiliario inteligente con IA para ventas',
                'description'       => 'Usa Claude para transformar tu CRM inmobiliario en un sistema de ventas inteligente: seguimiento automatizado de compradores, predicción de cierre de operaciones y secuencias de comunicación personalizadas.',
                'prompt_content'    => <<<'EOT'
Eres un experto en procesos de venta inmobiliaria y en la implementación de CRM inteligentes con IA para agencias. Necesito que me ayudes a optimizar completamente mi proceso comercial, desde la captación del lead hasta el cierre de la operación, usando IA en cada etapa.

**Situación de mi agencia:**
Somos 8 agentes en una agencia inmobiliaria mediana. Usamos un CRM básico (Clientify) donde registramos los contactos y las propiedades. El problema es que la mayoría del seguimiento es reactivo: esperamos a que el cliente llame en vez de anticiparnos. Perdemos muchos compradores que "necesitaban más tiempo" pero al final compraron con otra agencia. Tenemos una tasa de conversión de lead a operación del 2,8% cuando el sector está en torno al 5-6%.

**instrucción del sistema de seguimiento inteligente:**
Actúa como mi consultor de ventas inmobiliarias. Ayúdame a diseñar un proceso de seguimiento que use IA para:

1. Categorizar automáticamente cada lead según su nivel de urgencia y probabilidad de compra.
2. Generar el mensaje de seguimiento personalizado para cada comprador según su perfil y propiedades vistas.
3. Detectar señales de "frío" (deja de responder, visitas propiedades de otras agencias) y activar protocolo de recuperación.
4. Identificar el momento óptimo para hacer una oferta o proponer una reducción de precio.
5. Predecir qué leads del pipeline cerrarán operación este mes.

**tarea de segmentación de compradores:**
Define los perfiles de comprador inmobiliario con su protocolo de seguimiento:

Perfil "urgente activo": tiene preaprobación hipotecaria, busca en zona concreta, tiempo disponible <60 días
- Seguimiento: diario, mensajes cortos con nuevas opciones, visitas rápidas
- Oferta: proponer oferta en la 3ª visita a la misma propiedad

Perfil "explorador": sin urgencia, ampliando mapa mental de posibilidades, 6-12 meses de decisión
- Seguimiento: semanal, contenido educativo (guías de compra, análisis de mercado)
- Oferta: no presionar; cultivar relación hasta que madure la decisión

Perfil "inversor": busca rentabilidad, no vivienda habitual; decide en días si los números cuadran
- Seguimiento: análisis financiero inmediato, comparativa de rentabilidades
- Oferta: presentar siempre con modelo financiero de rentabilidad y ROI

**objetivo de secuencias de email y WhatsApp:**
Diseña las secuencias de comunicación para cada etapa:

Secuencia post-primera-visita (5 mensajes en 14 días):
- Día 0: agradecimiento + resumen de la visita + próximo paso
- Día 2: propiedades similares que podrían interesar + pregunta de feedback
- Día 5: artículo o dato de mercado relevante para su búsqueda
- Día 9: ¿Alguna duda? Oferta de reunión para resolver preguntas de financiación
- Día 14: ¿Sigues buscando? Nuevas opciones que han llegado esta semana

Secuencia de recuperación de leads fríos (llevan +30 días sin responder):
- Mensaje 1: "¿Sigues buscando?" con tono informal
- Mensaje 2: Alerta de nueva propiedad que coincide con su búsqueda inicial
- Mensaje 3: Cambio de precio en propiedad que visitó
- Mensaje 4: Contenido de valor (guía de barrios, informe de mercado)
- Mensaje 5: Cierre: "Entendemos si ya encontraste lo que buscabas, te desamos lo mejor"

**Predicción de cierre de operaciones:**
Diseña el scoring de probabilidad de cierre para el pipeline:

Variables positivas (aumentan la probabilidad):
- Número de visitas realizadas (>2 visitas = alta señal)
- Velocidad de respuesta a mensajes (<2 horas = alta urgencia)
- Solicitud de información sobre hipotecas o notarías
- Segunda visita con familiares o pareja
- Preguntas sobre plazos de escritura

Variables negativas (reducen la probabilidad):
- Sin respuesta a 3 mensajes consecutivos
- Ha bajado su presupuesto máximo
- Menciona que está "mirando más opciones"
- Más de 45 días en pipeline sin avance de etapa

**Plantillas de mensajes por situación:**
Escríbeme mensajes adaptados para:
- Respuesta inicial a un lead de Idealista (genérica vs personalizada según la propiedad buscada)
- Propuesta de visita presencial
- Resumen post-visita
- Mensaje cuando bajan el precio de una propiedad que el cliente visitó
- Respuesta cuando el cliente dice "necesito pensarlo"
- Mensaje de recuperación tras 3 semanas sin contacto
- Felicitación cuando cierran la compra con otra agencia (para mantener la relación)

Comienza con el sistema de scoring de leads y los mensajes de seguimiento post-primera-visita.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Sistema de CRM inmobiliario inteligente: seguimiento automatizado, scoring de leads y cierre de operaciones',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Gestión de producto para plataformas proptech con IA',
                'description'       => 'Usa Claude para definir la estrategia de producto de una plataforma inmobiliaria digital: investigación de usuarios, priorización del roadmap y métricas de éxito para funcionalidades proptech.',
                'prompt_content'    => <<<'EOT'
Eres un experto en gestión de producto para plataformas de tecnología inmobiliaria (proptech) con experiencia en marketplaces, herramientas de CRM para agencias y portales de búsqueda de propiedades. Necesito que me ayudes a definir y ejecutar la estrategia de producto de nuestra plataforma.

**Contexto de nuestra plataforma:**
Somos una startup proptech en fase de crecimiento con 180 agencias inmobiliarias activas en España. Nuestra plataforma ofrece CRM para agentes, portal de propiedades para compradores y módulo de análisis de mercado. Tenemos 12 personas en el equipo de producto y tecnología. El mayor desafío es que las agencias clientes nos piden funcionalidades muy diversas y necesitamos priorizar con criterio para crecer sin perder el foco del producto.

**instrucción de investigación de usuarios:**
Actúa como mi partner de estrategia de producto. Ayúdame a:

1. Diseñar el plan de research de usuarios para los próximos 3 meses (entrevistas, encuestas, análisis de uso).
2. Crear las preguntas de entrevista para entender el job-to-be-done de cada perfil de usuario.
3. Analizar el feedback de las solicitudes de funcionalidades y agruparlas por problema subyacente.
4. Definir las personas de usuario (buyer persona) de la plataforma con sus necesidades reales.
5. Identificar los jobs-to-be-done más frecuentes y los que generan más frustración actualmente.

**tarea de framework de priorización del roadmap:**
Diseña el proceso de priorización para un backlog de 60 funcionalidades pendientes:
- Criterios de valoración: impacto en retención, potencial de captación de nuevos clientes, peticiones de usuarios, diferenciación competitiva
- Peso de cada criterio según la fase de la empresa (growth vs. maturity)
- Método de scoring: cómo puntuar cada funcionalidad de 1 a 5 en cada criterio
- Proceso de revisión: quién participa en la priorización y con qué cadencia
- Cómo balancear las peticiones de los clientes más grandes vs. el bien de la mayoría

**objetivo del roadmap de IA para la plataforma:**
Diseña las funcionalidades de IA que podríamos añadir en los próximos 12 meses:

Trimestre 1 (quick wins):
- Generación automática de descripciones de propiedades desde ficha técnica
- Resumen de conversaciones con compradores para el agente
- Clasificación automática de leads por urgencia y perfil

Trimestre 2 (diferenciación):
- AVM (valoración automática de propiedades) para la cartera de la agencia
- Motor de recomendación de propiedades para compradores en el portal
- Detección de duplicados de propiedades en la base de datos

Trimestre 3-4 (ventaja competitiva):
- Predicción de propiedades que se venderán próximamente (captación proactiva)
- Análisis de tendencias de precios por zona con alertas para inversores
- Asistente virtual para compradores en el portal de búsqueda

**Métricas de éxito por funcionalidad:**
Define los OKRs y métricas de producto para medir el impacto de cada funcionalidad de IA:

Para la generación de descripciones:
- % de agentes que usan la funcionalidad al menos 1 vez por semana
- Reducción del tiempo de publicación de una propiedad (minutos)
- Puntuación de calidad de las descripciones generadas vs. las manuales

Para el motor de recomendación:
- Click-through rate de las propiedades recomendadas vs. búsqueda estándar
- Tasa de conversión de usuarios que ven propiedades recomendadas
- Tiempo hasta primera visita programada

**Gestión de stakeholders en proptech:**
Ayúdame a comunicar la estrategia de IA a:
- Agencias clientes: cómo presentar las nuevas funcionalidades de IA sin generar miedo a la automatización
- Inversores: narrative de diferenciación competitiva y moat tecnológico con IA
- Equipo de ventas: materiales de producto para vender las capacidades de IA
- Equipo de desarrollo: documentos de especificaciones funcionales para cada módulo de IA

**Modelo de pricing proptech:**
Ayúdame a analizar cómo monetizar las funcionalidades de IA:
- ¿Incluir en el plan base o crear un plan premium de IA?
- Análisis del willingness to pay de las agencias inmobiliarias para las funcionalidades de IA
- Propuesta de estructura de precios: plan Starter, Professional y Enterprise
- Modelo de créditos de IA para funcionalidades de uso intensivo (generación de imágenes, valoraciones masivas)

Empieza con el diseño del plan de research y las preguntas de entrevista para los agentes inmobiliarios.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Estrategia de producto para plataformas proptech: roadmap de IA, research de usuarios y métricas de éxito',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Gestión de equipos inmobiliarios con IA',
                'description'       => 'Usa Claude para optimizar la gestión de equipos de agentes inmobiliarios: onboarding acelerado, evaluación de rendimiento, planes de formación personalizados y retención del talento comercial.',
                'prompt_content'    => <<<'EOT'
Eres un experto en gestión de equipos comerciales del sector inmobiliario y en el uso de IA para el desarrollo del talento en agencias. Necesito que me ayudes a profesionalizar la gestión de mis agentes, reducir la alta rotación del sector y acelerar el tiempo hasta que un agente nuevo cierra su primera operación.

**Situación de mi equipo:**
Dirijo una agencia inmobiliaria con 22 agentes. La rotación anual del equipo es del 45% (muy alta, la media del sector está en 35%). El tiempo medio desde que entra un agente nuevo hasta que cierra su primera operación es de 4,5 meses. Los agentes más experimentados generan 10 veces más operaciones que los nuevos. El 20% de los agentes genera el 80% de las comisiones.

**instrucción del programa de onboarding acelerado:**
Actúa como mi director de RRHH inmobiliario. Diseña el programa de onboarding de 90 días que incluya:

1. Semanas 1-2: conocimiento del producto (portfolio de propiedades, herramientas, CRM, procesos internos).
2. Semanas 3-4: conocimiento del mercado local (precios por zona, compradores típicos, competidores).
3. Semanas 5-8: habilidades de venta inmobiliaria (captación, visitas, negociación, cierre).
4. Semanas 9-12: cartera propia supervisada (primeras captaciones con mentoring).
5. Evaluación de los 90 días: criterios para pasar de "en formación" a "agente independiente".

**tarea de evaluación del rendimiento de agentes:**
Diseña el sistema de evaluación de rendimiento con KPIs cuantitativos y cualitativos:

KPIs de actividad (leading indicators):
- Número de captaciones de cartera por semana
- Número de visitas realizadas por semana
- Número de ofertas presentadas por mes
- Tasa de conversión de captación a exclusiva
- Tiempo medio de respuesta a leads del portal

KPIs de resultado (lagging indicators):
- Operaciones cerradas por mes
- Comisión media por operación
- Días medios de comercialización de sus propiedades
- Tasa de conversión de visita a oferta
- NPS de clientes (compradores y vendedores)

**objetivo de planes de formación personalizados:**
Crea planes de desarrollo individualizados según el perfil del agente:

Agente nuevo (0-6 meses):
- Módulos de formación prioritarios
- Ratio mínimo de acompañamiento con agente senior
- Métricas de progresión esperadas mes a mes

Agente en desarrollo (6-18 meses):
- Especialización por tipología de inmueble o zona geográfica
- Desarrollo de habilidades de captación en frío
- Construcción de red de referencias

Agente senior (18+ meses):
- Mentoring a agentes junior como parte de su desarrollo
- Especialización en segmentos premium o comercial
- Desarrollo hacia perfil de team leader

**Análisis de causas de rotación:**
Ayúdame a identificar y mitigar las causas principales de abandono:
- Entrevistas de salida: qué preguntar para entender por qué se van
- Señales de alerta temprana: indicadores de que un agente está pensando en irse
- Plan de retención para agentes en riesgo de fuga
- Compensación: cómo diseñar una estructura de comisiones que incentive la permanencia
- Cultura y liderazgo: qué elementos de la cultura inmobiliaria generan más rotación

**Reuniones de equipo efectivas:**
Diseña la cadencia y estructura de las reuniones:
- Reunión diaria (daily): 10 minutos, solo actividad y bloqueos del día
- Reunión semanal de equipo: revisión de pipeline, propiedades nuevas, mejores prácticas
- One-on-one mensual: revisión de rendimiento individual, objetivos, desarrollo personal
- Reunión trimestral de estrategia: resultados del trimestre, objetivos del siguiente
- Formación mensual: sesión de role-play de situaciones difíciles (objeciones, negociaciones)

**Herramientas de gestión de equipo con IA:**
Ayúdame a automatizar estas tareas de gestión:
- Generación automática del informe de rendimiento mensual por agente
- Resumen semanal de actividad del equipo desde los datos del CRM
- Detección de agentes que están por debajo de sus métricas de actividad habitual
- Sugerencias de propiedades de la cartera que cada agente debería priorizar esta semana
- Generación del plan de acción de la semana para cada agente según su situación

Empieza con el programa de onboarding de 90 días con el detalle semana a semana.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Gestión profesional de equipos de agentes inmobiliarios: onboarding, rendimiento y retención del talento',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Valoración automática de propiedades con IA',
                'description'       => 'Aprende a usar Claude para desarrollar y aplicar modelos de valoración inmobiliaria automatizada (AVM), analizar comparables de mercado y generar informes de tasación preliminar fundamentados en datos.',
                'prompt_content'    => <<<'EOT'
Eres un experto en valoración inmobiliaria con conocimiento profundo de los métodos de tasación reconocidos en España (método de comparación, método de coste, método de capitalización de rentas) y en la aplicación de modelos de IA para la valoración automática de propiedades. Necesito que me ayudes a construir y aplicar un sistema de valoración inmobiliaria más preciso y eficiente.

**Contexto de mi empresa:**
Soy tasador inmobiliario homologado (RICS). Realizo entre 40 y 60 tasaciones al mes para hipotecas, seguros y operaciones de compraventa. El proceso actual es muy intensivo en tiempo: buscar comparables manualmente en portales, calcular coeficientes correctores, redactar el informe. Necesito reducir el tiempo por tasación sin perder rigor metodológico ni calidad de los informes.

**instrucción del método de comparación con IA:**
Actúa como mi asistente de valoración inmobiliaria. Para el método de comparación de mercado (el más utilizado en tasación de viviendas), ayúdame a:

1. Definir los criterios de selección de comparables (zona, tipología, superficie, antigüedad, estado).
2. Calcular los coeficientes correctores para cada comparable respecto al inmueble tasado.
3. Ponderar los comparables según su relevancia y aplicar la media ponderada.
4. Calcular el valor unitario (€/m²) y el valor total de la propiedad.
5. Generar el informe del método de comparación en formato texto estructurado.

**tarea de análisis de comparables de mercado:**
Para un piso de 85m² en el centro de una ciudad mediana española, te proporcionaré los datos de 6 comparables. Para cada uno, necesito que calcules:

Coeficientes correctores por:
- Superficie: +2% por cada 10m² que sea más pequeño que el inmueble tasado (a igualdad de precio/m², los pisos más pequeños son más caros)
- Antigüedad: -1% por cada 5 años más antiguo que el inmueble tasado
- Estado de conservación: +8% si está reformado frente a estado medio
- Planta: +1% por cada planta por encima de la segunda
- Ascensor: +3% si tiene ascensor y el inmueble tasado también, 0% si ambos no tienen
- Garaje incluido: +5% si el comparable incluye garaje y el tasado no lo incluye

**objetivo del método de capitalización de rentas:**
Para propiedades de inversión, calcula el valor por capitalización:
- Renta anual bruta = Renta mensual de mercado × 12
- Renta anual neta = Renta bruta - Gastos (IBI, comunidad, seguros, gestión, vacancia)
- Tasa de capitalización (yield) de mercado para esa tipología y zona
- Valor por capitalización = Renta neta anual / Tasa de capitalización
- Comparativa del valor por comparación vs. por capitalización

**Análisis de riesgos en la tasación:**
Ayúdame a identificar y documentar los factores de riesgo que afectan al valor:
- Riesgo de liquidez: ¿cuánto tardaría en venderse a ese precio?
- Riesgo de depreciación: tendencia de precios en la zona (últimos 12 meses)
- Riesgo urbanístico: cargas o limitaciones que afectan al inmueble
- Riesgo de sobreoferta: número de inmuebles similares disponibles en la zona
- Riesgo técnico: estado de conservación del edificio, ITE, derramas previstas

**Generación del informe de tasación:**
Diseña la plantilla del informe de valoración preliminar que incluya:
1. Datos del inmueble tasado (descripción, localización, superficie registral vs. útil)
2. Análisis del mercado inmobiliario de la zona
3. Descripción y cuadro de comparables utilizados con coeficientes correctores
4. Cálculo del valor por método de comparación
5. Cálculo del valor por capitalización (si procede)
6. Valor de tasación adoptado y justificación
7. Condicionantes y advertencias del tasador
8. Fecha de validez de la tasación y limitaciones

**Proceso de control de calidad:**
Diseña las validaciones automáticas para detectar errores en la tasación:
- ¿El valor obtenido está dentro del rango razonable (±15% de la media de comparables)?
- ¿Los coeficientes correctores son coherentes entre sí?
- ¿Los comparables seleccionados son representativos del mercado actual?
- ¿La renta de mercado utilizada está actualizada (fuentes: idealista, fotocasa)?
- ¿Se han documentado suficientes comparables (mínimo 6 según Orden ECO/805/2003)?

Empieza con la plantilla de análisis de comparables y el cálculo de coeficientes correctores para el piso de ejemplo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Sistema de valoración inmobiliaria automatizada con métodos de tasación homologados y análisis de comparables',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Contratos inmobiliarios y due diligence con IA',
                'description'       => 'Usa Claude para revisar y generar contratos inmobiliarios, realizar due diligence jurídico de propiedades y detectar riesgos legales en operaciones de compraventa y arrendamiento.',
                'prompt_content'    => <<<'EOT'
Eres un experto en derecho inmobiliario español con conocimiento profundo de la Ley de Arrendamientos Urbanos (LAU), la regulación hipotecaria, el derecho urbanístico y los procesos de due diligence jurídico en transacciones inmobiliarias. Necesito que me ayudes a mejorar la gestión jurídica de las operaciones de mi despacho.

**Contexto del despacho:**
Somos un despacho de abogados especializado en derecho inmobiliario con 3 abogados y 1 paralegal. Gestionamos unas 25-30 operaciones de compraventa al mes y 15-20 contratos de arrendamiento. El cuello de botella es el tiempo que dedicamos a revisar escrituras, notas simples, estatutos de comunidades y contratos de arrendamiento. Necesito acelerar estos procesos sin reducir el rigor jurídico.

**instrucción de due diligence jurídico:**
Actúa como mi asistente jurídico inmobiliario. Para cada operación de compraventa, ayúdame a:

1. Revisar la nota simple del Registro de la Propiedad e identificar todos los elementos relevantes (cargas, hipotecas, anotaciones preventivas, limitaciones de disposición).
2. Analizar los estatutos de la comunidad de propietarios en busca de restricciones relevantes.
3. Revisar el certificado de deudas con la comunidad y las derramas pendientes.
4. Verificar la situación urbanística de la finca (calificación, aprovechamiento, posibles infracciones).
5. Generar el informe de due diligence con semáforo de riesgos (verde, amarillo, rojo).

**tarea de revisión de contratos de arrendamiento:**
Para un contrato de arrendamiento de vivienda habitual bajo la LAU, realiza una revisión completa y detecta:

Cláusulas nulas de pleno derecho:
- Renuncia del arrendatario a derechos irrenunciables por la LAU
- Cláusulas de resolución por venta del inmueble contrarias al art. 14 LAU
- Fianza superior a dos mensualidades en arrendamiento de vivienda habitual
- Repercusión de impuestos al arrendatario que por ley corresponden al arrendador

Cláusulas abusivas a negociar:
- Obligación de contratar seguros innecesarios
- Cláusulas de actualización de renta sin referencia al IPC o índice legal
- Restricciones excesivas al uso de la vivienda
- Penalizaciones desproporcionadas por resolución anticipada

Cláusulas que protegen al arrendador que faltan:
- Inventario detallado del inmueble y su estado
- Cláusula de prohibición de subarrendamiento
- Obligación de comunicar obras necesarias
- Procedimiento de resolución por impago

**objetivo de generación de contratos:**
Ayúdame a generar las cláusulas específicas para situaciones especiales:
- Arrendamiento con opción de compra: cómo estructurar la prima, el plazo y el precio de ejercicio
- Arrendamiento a empresa para uso de empleados: diferencias con el arrendamiento de vivienda habitual
- Contrato de temporada (estudiantes, turismo): requisitos para que no aplique la LAU de vivienda
- Contrato de local de negocio: libertad de pactos y cláusulas de actualización de renta
- Arrendamiento de vivienda de uso turístico (VUT): regulación autonómica y requisitos

**Checklist de due diligence de compraventa:**
Diseña el checklist completo de documentación a revisar antes de firmar una compraventa:

Registro de la Propiedad:
- Nota simple actualizada (máximo 3 meses)
- Coincidencia de la descripción registral con la realidad física
- Cargas y gravámenes (hipotecas, servidumbres, afecciones fiscales)
- Titularidad y legitimación del vendedor

Catastro:
- Referencia catastral y coincidencia de datos
- Valor catastral (base para el ITP)
- Superficie catastral vs. registral vs. real

Situación urbanística:
- Cédula de habitabilidad vigente
- Licencia de primera ocupación
- ITE (Inspección Técnica de Edificios) si el edificio tiene más de 45 años
- Posibles infracciones urbanísticas o expedientes de disciplina urbanística

Situación económica del inmueble:
- Certificado de deudas con la comunidad de propietarios
- Actas de la comunidad (últimos 2 años) para detectar derramas aprobadas
- Recibos del IBI al corriente de pago
- Subrogación o cancelación de la hipoteca existente

**Informe jurídico de due diligence:**
Estructura el informe final con:
1. Resumen ejecutivo: ¿es recomendable proceder con la operación?
2. Semáforo de riesgos: verde (sin riesgos), amarillo (riesgo menor, mitigable), rojo (riesgo grave, bloquea la operación)
3. Descripción detallada de cada riesgo identificado
4. Acciones recomendadas para mitigar cada riesgo
5. Condicionantes de la operación (documentación pendiente, condiciones suspensivas)
6. Estimación de costes de la operación (ITP/AJD, notaría, registro, gestoría)

Empieza con el análisis de una nota simple tipo y los elementos que siempre debo revisar prioritariamente.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Due diligence jurídico inmobiliario, revisión de contratos LAU y gestión de riesgos en compraventas',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Atención al cliente inmobiliario con IA',
                'description'       => 'Aprende a usar Claude para mejorar la experiencia del comprador e inquilino en todo el proceso inmobiliario: respuesta instantánea a consultas, gestión de visitas, seguimiento post-cierre y resolución de incidencias.',
                'prompt_content'    => <<<'EOT'
Eres un experto en customer experience del sector inmobiliario y en la implementación de sistemas de atención al cliente con IA para agencias y promotoras. Necesito que me ayudes a diseñar una experiencia de cliente excepcional en todo el proceso inmobiliario, desde la primera consulta hasta la postventa.

**Contexto de mi empresa:**
Somos una promotora inmobiliaria que entrega entre 200 y 280 viviendas al año. El proceso de venta dura entre 18 y 24 meses (desde la reserva hasta la entrega de llaves). Tenemos un equipo de atención al cliente de 5 personas que gestionan más de 800 compradores activos en diferentes fases del proceso. Los compradores se quejan de falta de información durante la construcción, lo que genera ansiedad y muchas llamadas innecesarias.

**instrucción del sistema de comunicación proactiva:**
Actúa como mi directora de customer experience inmobiliaria. Diseña el sistema de comunicación que incluya:

1. Comunicaciones automáticas según el hito del proceso constructivo (inicio obra, estructura, cerramiento, acabados, entrega).
2. Newsletter mensual del estado de la obra con fotos y vídeos del avance.
3. Portal del comprador donde pueda ver en tiempo real el estado de su vivienda.
4. Sistema de notificaciones push para hitos importantes (fecha de escritura, revisión previa a la entrega).
5. Canal de WhatsApp Business para comunicaciones ágiles y personalizadas.

**tarea de gestión de la primera atención:**
Diseña el protocolo de primera atención para diferentes canales:

Para consultas de portales inmobiliarios (Idealista, Fotocasa):
- Respuesta automática en menos de 5 minutos con información básica
- Precualificación: 3 preguntas para entender la urgencia y capacidad financiera
- Asignación al comercial más adecuado según zona y tipología buscada
- Propuesta de visita con opciones de horario en la misma respuesta

Para visitas a la oficina de ventas sin cita previa:
- Protocolo de bienvenida y recogida de datos de contacto
- Presentación del proyecto adaptada al perfil del visitante
- Material que se lleva de la visita (dossier, renders, planos)
- Seguimiento post-visita a las 24 horas

Para compradores en fase de construcción:
- Respuesta a la pregunta "¿cómo va la obra?" con datos reales
- Gestión de cambios de materiales o acabados durante la obra
- Resolución de dudas sobre el proceso de escritura e hipoteca
- Coordinación de la visita previa a la entrega de llaves

**objetivo de experiencia de entrega de llaves:**
Diseña el protocolo del día de la entrega (el momento más crítico para la satisfacción):
- Comunicación previa: checklist de documentación para el comprador
- Visita previa: 2 semanas antes, recorrido de la vivienda para detectar repasos
- Gestión de repasos: cómo registrar, priorizar y comunicar el estado de los repasos
- Acto de entrega: protocolo del día, regalo de bienvenida, manual del propietario
- Seguimiento post-entrega: llamada a los 30 días, encuesta de satisfacción
- Garantías: protocolo de reclamación durante el período de garantía (1, 3 y 10 años)

**Gestión de incidencias y reclamaciones:**
Diseña el proceso de gestión de incidencias durante la garantía:
- Canales de reporte: app, email, teléfono, portal del propietario
- Clasificación de urgencia: emergencia (24h), urgente (48h), normal (5 días laborables)
- Sistema de tickets con seguimiento visible para el propietario
- Umbrales de escalado cuando una incidencia supera el tiempo de resolución
- Registro de incidencias para mejorar la calidad constructiva en próximas promociones
- Comunicación de cierre de incidencia con confirmación del propietario

**NPS y satisfacción del cliente:**
Diseña el sistema de medición de la experiencia del cliente:
- NPS en 3 momentos clave: firma del contrato, visita previa a entrega, 3 meses post-entrega
- Encuesta de satisfacción detallada al mes de la entrega
- Proceso de recuperación de detractores (NPS < 7)
- Programa de referrals para promotores (descuento por recomendar a un amigo)
- Cómo usar el feedback para mejorar el producto y el proceso en las siguientes promociones

**Plantillas de comunicación por hito:**
Escríbeme las comunicaciones tipo para:
- Email de bienvenida al proyecto tras firmar la reserva
- Actualización mensual del avance de obra (con estructura para rellenar datos)
- Notificación de fecha de escritura confirmada
- Email de instrucciones para el día de la entrega de llaves
- Carta de garantías tras la entrega
- Respuesta a reclamación con plazo de resolución

Empieza con el plan de comunicaciones proactivas durante los 18 meses de construcción y el portal del comprador.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Customer experience inmobiliario: comunicación proactiva, gestión de incidencias y experiencia de entrega de llaves',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Consultoría inmobiliaria freelance con IA',
                'description'       => 'Usa Claude para profesionalizar tu práctica como consultor o agente inmobiliario independiente: captación de clientes, análisis de inversiones, gestión de cartera y desarrollo de tu marca personal en el sector.',
                'prompt_content'    => <<<'EOT'
Eres un experto en desarrollo de negocio para consultores inmobiliarios freelance y en el uso de IA para profesionalizar la práctica independiente en el sector inmobiliario. Necesito que me ayudes a construir una consultoría inmobiliaria rentable, diferenciada y escalable como profesional independiente.

**Mi situación como freelance inmobiliario:**
Soy agente inmobiliario independiente con 4 años de experiencia. Trabajo sin agencia, directamente con particulares e inversores. Cierro entre 3 y 5 operaciones al mes con una comisión media de 4.500€. Quiero doblar mis ingresos en 18 meses sin necesariamente aumentar el número de operaciones, sino aumentando el ticket medio trabajando con inversores y propiedades de mayor valor.

**instrucción de posicionamiento como consultor senior:**
Actúa como mi mentor de negocio inmobiliario. Ayúdame a:

1. Definir mi propuesta de valor diferenciada para inversores inmobiliarios vs. compradores particulares.
2. Crear mi perfil de LinkedIn que posicione claramente mi especialidad y atraiga al cliente objetivo.
3. Diseñar mi metodología de consultoría propia que justifique honorarios superiores al estándar.
4. Construir el contenido de mi marca personal (artículos, vídeos, podcast) sobre inversión inmobiliaria.
5. Desarrollar mi red de contactos estratégicos (gestores de patrimonios, asesores fiscales, promotores).

**tarea de análisis de inversiones inmobiliarias:**
Para cada oportunidad que encuentro, necesito analizar rápidamente si es una buena inversión:

Análisis de rentabilidad básico:
- Rentabilidad bruta = (Renta anual / Precio de compra) × 100
- Rentabilidad neta = (Renta anual - Gastos) / (Precio compra + Gastos de compra) × 100
- Cash-on-cash return = Flujo de caja neto anual / Capital propio invertido × 100
- Payback period = Precio total de compra / Flujo de caja neto anual

Análisis avanzado para inversores exigentes:
- TIR (Tasa Interna de Retorno) a 10 años con supuesto de venta al final del período
- VAN (Valor Actual Neto) con tasa de descuento del 7%
- Análisis de sensibilidad: ¿cómo cambia el ROI si la ocupación baja al 85% o la renta cae un 10%?
- Escenario de venta anticipada: ROI si vendo en 3, 5 o 7 años

**objetivo de propuesta de servicio premium:**
Diseña mi oferta de consultoría para inversores con ticket medio de 8.000-15.000€ por operación:

Paquete básico de asesoramiento (1.500€):
- Análisis financiero de la oportunidad
- Informe de due diligence básico (nota simple, estado del mercado)
- Recomendación fundamentada: comprar, negociar o descartar

Paquete completo de inversión (4.500€):
- Todo lo anterior
- Identificación proactiva de 5 oportunidades en la zona y tipología objetivo
- Análisis comparativo de las 5 opciones
- Acompañamiento en la negociación del precio
- Coordinación del proceso hasta la firma

Paquete de gestión de cartera (retainer mensual 1.200€):
- Análisis mensual del rendimiento de la cartera del inversor
- Vigilancia del mercado y alertas de nuevas oportunidades
- Asesoramiento en decisiones de compra, reforma y venta
- Informe trimestral de evolución del patrimonio inmobiliario

**Captación de clientes inversores:**
Diseña la estrategia de captación específica para inversores inmobiliarios:
- LinkedIn: contenido semanal sobre análisis de mercado y casos de éxito de inversión
- Newsletter semanal: "La operación de la semana" (análisis de una oportunidad real del mercado)
- Seminarios online mensuales: "Cómo analizar una inversión inmobiliaria en 30 minutos"
- Colaboración con gestoras de patrimonio y family offices
- Programa de referrals: incentivo para que los inversores actuales recomienden nuevos clientes

**Informe de inversión para el cliente:**
Diseña la plantilla del informe que entrego a cada inversor:
1. Resumen ejecutivo: ¿es una buena inversión? Recomendación en 3 líneas
2. Descripción del activo: datos técnicos, localización, estado
3. Análisis del mercado de alquiler en la zona (demanda, renta de mercado, vacancia)
4. Análisis financiero completo (rentabilidades, TIR, VAN, flujos de caja)
5. Análisis de riesgos y escenarios adversos
6. Propuesta de negociación: precio objetivo y argumentos para la negociación
7. Plan de puesta en valor: qué pequeñas reformas maximizarían la renta o el valor de venta

**Gestión de mi negocio freelance:**
Ayúdame también a gestionar el lado administrativo y financiero:
- CRM personal: cómo organizar mi pipeline de oportunidades y clientes
- Seguimiento de mis propias métricas de negocio (pipeline, conversión, ingresos)
- Gestión del tiempo: cuánto dedicar a captación vs. ejecución vs. desarrollo personal
- Fijación de precios: cuándo y cómo subir mis honorarios
- Construcción de un equipo virtual: qué funciones delegar primero (paralegal, asistente)

Empieza con la plantilla del análisis financiero de inversión y la propuesta de valor diferenciada para inversores.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Consultoría inmobiliaria freelance: análisis de inversiones, propuesta de valor premium y captación de inversores',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
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
