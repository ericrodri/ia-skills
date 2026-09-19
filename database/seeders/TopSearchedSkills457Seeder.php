<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills457Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing digital para agencias inmobiliarias con IA',
                'description'      => 'Diseña campañas de captación de compradores y vendedores de inmuebles usando IA generativa para crear anuncios, landing pages y contenido de alto impacto.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing digital especializado en el sector inmobiliario residencial y comercial. Tu misión es ayudarme a construir una estrategia de captación y conversión de clientes para una agencia inmobiliaria que quiere diferenciarse mediante contenido de calidad y publicidad hiperpersonalizada.

Contexto de la agencia:
- Tipo: agencia inmobiliaria mediana con 15 agentes
- Mercado: vivienda residencial de obra nueva y segunda mano en zonas urbanas
- Objetivo: duplicar las captaciones de mandatos exclusivos y aumentar el volumen de ventas cerradas en un 30%

Estrategia de marketing con IA:

1. ANÁLISIS DEL COMPRADOR Y VENDEDOR IDEAL
Define los perfiles de cliente para una agencia inmobiliaria moderna:
- Buyer persona del comprador: primera vivienda (25-35 años), cambio de vivienda (35-50 años), inversión (40-60 años)
- Buyer persona del vendedor: herencia, divorcio, traslado laboral, desinversión
- Para cada perfil: motivaciones, miedos, objeciones frecuentes, canales donde se informa, palabras clave que busca en Google
- Cómo usar IA para analizar reseñas de portales inmobiliarios y extraer los puntos de dolor más frecuentes de compradores y vendedores

2. POSICIONAMIENTO ORGÁNICO LOCAL
Diseña la estrategia de contenido SEO para posicionar la agencia en búsquedas locales:
- Estructura de blog: artículos de precio por metro cuadrado por barrio, guías de hipoteca, comparativas de zonas, guías del proceso de compra
- Google Business Profile: cómo optimizarlo para aparecer en el mapa local, qué publicar semanalmente, cómo gestionar las reseñas
- Uso de IA para generar artículos de 1.500 palabras sobre el mercado inmobiliario local a partir de datos de portales como Idealista o Fotocasa

3. PUBLICIDAD EN META Y GOOGLE ADS
Crea el plan de medios de pago para captación de leads:
- Estructura de campañas de Google Ads: campañas de búsqueda para "piso en venta en [ciudad]", "agencia inmobiliaria [barrio]", y retargeting de visitantes de la web
- Campañas de Meta para vendedores: audiencias de propietarios (intereses en hipotecas pagadas, seguros de hogar), creatividades con propuesta de valoración gratuita
- Campañas de Meta para compradores: segmentación por rango de edad, zona geográfica, eventos de vida (recién casados, nueva familia)
- Uso de IA para generar variaciones de copy A/B y optimizar los titulares de los anuncios

4. PORTAL DE PROPIEDADES Y CAPTACIÓN DE LEADS
Optimiza la presencia en portales inmobiliarios y la web propia:
- Descripciones de propiedades generadas con IA: cómo dar un briefing a Claude para que genere una descripción persuasiva que destaque los beneficios, no solo las características
- Fotografía y tour virtual: cómo integrar estas herramientas en la ficha de producto para aumentar el tiempo de permanencia
- Lead magnet para captar emails de compradores: guía de barrios, calculadora de hipoteca, informe de mercado trimestral
- Secuencia de email nurturing de cinco correos para llevar al lead desde la descarga del lead magnet hasta la visita al piso

5. AUTOMATIZACIÓN Y CRM
Diseña los flujos de automatización de marketing para la agencia:
- Configuración de un CRM inmobiliario básico: etapas del embudo, automatizaciones de seguimiento, recordatorios para el agente
- Secuencia de WhatsApp para el lead recién captado: primer mensaje en menos de cinco minutos, seguimiento a 24 horas, encuesta de necesidades
- Flujo de feedback post-visita: encuesta automática al comprador, resumen de objeciones al agente, recomendación de propiedades alternativas

6. MÉTRICAS Y KPIs DE MARKETING INMOBILIARIO
Define el cuadro de mando del responsable de marketing:
- Coste por lead (CPL) por canal: SEO, Google Ads, Meta, portales, referidos
- Tasa de conversión de lead a visita, y de visita a oferta
- Tiempo medio del ciclo de venta por tipo de operación
- ROI de las acciones de marketing: ingreso atribuido a cada canal vs. inversión
- Cómo usar IA para generar el informe mensual de marketing en lenguaje ejecutivo a partir de los datos del CRM y Google Analytics
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar estrategia de marketing digital para agencia inmobiliaria',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de plataforma de valoración inmobiliaria con IA',
                'description'      => 'Diseña y documenta la arquitectura técnica de una herramienta de valoración automática de inmuebles usando modelos de machine learning y datos de mercado.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software senior especializado en sistemas de datos y machine learning aplicados al sector inmobiliario. Necesito tu ayuda para diseñar una plataforma de valoración automática de inmuebles (AVM - Automated Valuation Model) que pueda integrarse en portales inmobiliarios, bancos y agencias.

Especificaciones del sistema:
- Cobertura geográfica inicial: mercado residencial de España (obra nueva y segunda mano)
- Tipos de inmueble: pisos, casas unifamiliares, locales comerciales
- Precisión objetivo: error medio inferior al 8% respecto al precio de transacción real
- Latencia de respuesta: valoración en menos de dos segundos para el usuario final

Arquitectura técnica:

1. RECOPILACIÓN Y PREPARACIÓN DE DATOS
Define las fuentes de datos y el pipeline de ingesta:
- Fuentes primarias: datos del Catastro (superficie, año de construcción, localización), transacciones del Registro de la Propiedad, anuncios de portales inmobiliarios (Idealista, Fotocasa, Habitaclia) mediante scraping ético o API oficial
- Fuentes secundarias: datos del INE (renta media por sección censal), puntos de interés (colegios, hospitales, metro, parques), índice de criminalidad por barrio, proyectos de urbanismo y obra pública
- Pipeline de ETL: cómo limpiar, normalizar y enriquecer los datos heterogéneos de múltiples fuentes
- Gestión de datos temporales: cómo modelar la evolución del precio en el tiempo para capturar tendencias de mercado

2. FEATURE ENGINEERING
Diseña las variables de entrada del modelo:
- Variables intrínsecas del inmueble: superficie construida y útil, número de habitaciones y baños, planta, orientación, estado de conservación, antigüedad, existencia de parking y trastero
- Variables de localización: latitud y longitud, distancia al centro, decil de renta de la sección censal, accesibilidad a transporte público
- Variables de mercado: precio por metro cuadrado de la zona en los últimos 12 meses, número de transacciones recientes, días medios en el mercado por tipo de inmueble
- Variables derivadas: interacciones entre superficie y zona, ratio de demanda vs. oferta, índice de gentrificación por barrio

3. SELECCIÓN Y ENTRENAMIENTO DEL MODELO
Compara los enfoques de modelado más adecuados:
- Gradient Boosting (XGBoost, LightGBM): ventajas para datos tabulares heterogéneos, manejo de valores nulos, interpretabilidad con SHAP values
- Modelos geoespaciales (Geographically Weighted Regression): cuándo usarlos para capturar heterogeneidad espacial
- Redes neuronales profundas: cuándo aportan mejora real vs. coste de interpretabilidad y datos necesarios
- Estrategia de validación: split temporal (entrenar en datos históricos, validar en los más recientes), validación cruzada por provincia o ciudad

4. SISTEMA DE INTERVALOS DE CONFIANZA
Diseña la capa de incertidumbre de la valoración:
- Predicción de intervalos: cómo generar un rango de precio (mínimo-máximo) además del valor central
- Indicador de confianza: cuándo el modelo tiene alta vs. baja confianza (inmuebles atípicos, zonas con pocos datos)
- Calibración del modelo: cómo asegurarse de que el 90% de las transacciones caen dentro del intervalo del 90% predicho

5. API Y ARQUITECTURA DE PRODUCCIÓN
Diseña la infraestructura para servir el modelo en producción:
- Diseño de la API REST: endpoints para valoración individual, valoración masiva (batch), y consulta de histórico de valoraciones
- Arquitectura en la nube: servicios recomendados en AWS o GCP para almacenamiento de datos, entrenamiento y serving del modelo
- Estrategia de reentrenamiento: con qué frecuencia reentrenar el modelo, cómo detectar drift del modelo en producción
- Caché de predicciones: cómo reducir el coste computacional para inmuebles consultados frecuentemente

6. INTERPRETABILIDAD Y REPORTING
Diseña la capa de explicabilidad del modelo:
- SHAP values para el usuario final: cómo presentar de forma comprensible qué factores suben o bajan el precio de un inmueble concreto
- Comparables de mercado: cómo seleccionar y mostrar los tres a cinco inmuebles similares más recientes que respaldan la valoración
- Informe de valoración automático generado con IA: cómo combinar los outputs del modelo con lenguaje natural para generar un informe PDF profesional
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar plataforma de valoración automática de inmuebles con ML',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencia visual para portales inmobiliarios con IA',
                'description'      => 'Crea interfaces de búsqueda, fichas de producto y experiencias de visita virtual para portales inmobiliarios usando principios de diseño centrado en el usuario.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador UX/UI con especialización en plataformas de e-commerce y portales de alto tráfico. Necesito tu ayuda para rediseñar la experiencia de usuario de un portal inmobiliario que quiere diferenciarse de Idealista y Fotocasa mediante un diseño superior y funcionalidades de IA que ayuden al comprador en su decisión.

Contexto del proyecto:
- Portal inmobiliario mediano: 50.000 propiedades activas, 200.000 visitas mensuales
- Usuario principal: comprador de primera o segunda vivienda, entre 28 y 50 años
- Problema detectado: alta tasa de rebote en la página de resultados (72%) y baja conversión de visita web a contacto con agencia (menos del 2%)

Rediseño de la experiencia:

1. BÚSQUEDA Y FILTRADO
Diseña un sistema de búsqueda que reduzca la fricción del usuario:
- Búsqueda semántica: campo de texto libre donde el usuario escribe "piso luminoso con terraza cerca del colegio X" y la IA interpreta los criterios
- Filtros inteligentes: cómo mostrar solo los filtros relevantes según el tipo de búsqueda y el perfil del usuario
- Mapa interactivo: capas de datos superpuestas (precio por metro cuadrado, ruido, acceso a metro, calidad del aire), cómo diseñar la leyenda y los controles sin saturar la vista
- Persistencia de búsqueda: cómo guardar las preferencias del usuario entre sesiones y mostrar alertas de nuevas propiedades que encajan

2. FICHA DE PROPIEDAD
Rediseña la página de detalle del inmueble:
- Jerarquía de la información: qué datos mostrar above the fold, qué dejar para el scroll, qué agrupar en pestañas
- Galería fotográfica: cómo diseñar la navegación de fotos en móvil y escritorio, etiquetado automático de espacios con IA
- Tour virtual integrado: cómo embeber el tour 3D sin que ralentice la carga de la página
- Módulo de valoración del entorno: mapa de proximidad a servicios con tiempos a pie y en transporte público
- Sección de hipoteca: calculadora integrada con conexión a tipos de interés en tiempo real

3. ASISTENTE VIRTUAL DE COMPRA
Diseña la experiencia del asistente de IA en el portal:
- Onboarding conversacional: cómo recoger las necesidades del usuario (presupuesto, zona, tipo de inmueble, must-haves) en un chat o wizard de pocas preguntas
- Recomendaciones personalizadas: cómo presentar el feed de propiedades recomendadas distinguiéndolo visualmente de los resultados de búsqueda general
- Comparador de propiedades: diseño de la tabla de comparación (hasta cuatro inmuebles), qué atributos mostrar, cómo destacar diferencias

4. DISEÑO PARA MÓVIL
Adapta la experiencia al contexto de uso en smartphone:
- Navegación de resultados en móvil: lista vs. mapa como modos primarios, cómo cambiar entre ellos con un toque
- Ficha de propiedad en móvil: CTA de contacto siempre visible, galería en formato carousel, detalles colapsables
- Microinteracciones: animación del botón de favorito, confirmación de alerta activada, feedback de contacto enviado

5. SISTEMA DE DISEÑO
Define los fundamentos del sistema visual:
- Tipografía y espaciado: jerarquía para precio (dato más importante), título de la propiedad, detalles secundarios
- Paleta de color: cómo usar el color para transmitir confianza y profesionalidad sin ser genérico, diferenciación de estados (nuevo, precio rebajado, oportunidad)
- Componentes reutilizables: tarjeta de propiedad en tres variantes (lista, grid compacto, grid expandido), badge de características especiales

6. PRUEBAS DE USABILIDAD
Diseña el plan de validación del rediseño:
- Pruebas de árbol de categorías para validar la arquitectura de información
- Tests de cinco segundos para la ficha de propiedad: qué información retiene el usuario tras una breve exposición
- A/B testing del CTA de contacto: texto, color, posición y variantes de formulario
- Métricas de éxito: tasa de rebote, páginas por sesión, tasa de conversión a contacto, NPS del usuario
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Rediseñar experiencia de usuario de portal inmobiliario con IA',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Técnicas de venta consultiva para agentes inmobiliarios con IA',
                'description'      => 'Construye un sistema de ventas para agentes inmobiliarios que combina escucha activa, gestión de objeciones y herramientas de IA para cerrar más operaciones.',
                'prompt_content'   => <<<'EOT'
Eres un coach de ventas especializado en el sector inmobiliario con experiencia en agencias de alto rendimiento. Necesito tu ayuda para construir un sistema de venta consultiva completo para agentes inmobiliarios que quieren pasar de vender propiedades a asesorar procesos de vida.

Perfil del agente objetivo:
- Agente con uno a tres años de experiencia, con buenas habilidades sociales pero proceso de venta no estructurado
- Trabaja en mercado residencial: pisos de primera vivienda y cambio de vivienda
- Objetivo: cerrar cuatro a seis operaciones mensuales (actualmente cierra dos a tres)

Sistema de ventas:

1. CAPTACIÓN DE MANDATOS EXCLUSIVOS
Define el proceso para conseguir que el propietario elija tu agencia:
- Cómo preparar la visita de captación: investigar el inmueble en el Catastro, buscar el historial de anuncios previos, preparar la valoración comparativa de mercado con datos de Idealista
- La presentación de captación: estructura de 45 minutos para convencer al propietario de que trabajar en exclusiva es mejor para él
- Cómo usar IA para preparar un informe de valoración profesional que impresione al propietario y justifique el precio de salida recomendado
- Manejo de la objeción más frecuente: "prefiero ir con varias agencias" → argumento de la atención concentrada y el marketing superior

2. CUALIFICACIÓN DEL COMPRADOR
Diseña el proceso de cualificación para no perder tiempo con compradores no preparados:
- Las cinco preguntas de cualificación que todo agente debe hacer en el primer contacto: motivación de compra, urgencia, presupuesto, preaprobación hipotecaria, decisor real
- Cómo usar IA para analizar el perfil del comprador (mensajes, emails) antes de la visita y preparar las propiedades más adecuadas
- Secuencia de WhatsApp para mantener el interés del comprador entre visitas: compartir propiedades, resolver dudas, enviar información de la zona

3. LA VISITA AL INMUEBLE
Diseña la visita perfecta para maximizar la probabilidad de oferta:
- Preparación: cómo briefar al propietario para que la vivienda esté en condiciones óptimas, qué información tener lista (certificado energético, IBI, gastos de comunidad)
- Durante la visita: cómo gestionar los silencios, cómo guiar al comprador emocionalmente, qué preguntas hacer para detectar el interés real
- Home staging verbal: cómo usar el lenguaje para que el comprador visualice su vida en ese inmueble
- Cierre de la visita: cómo pedir retroalimentación honesta y no dejar ir al comprador sin una acción comprometida

4. NEGOCIACIÓN Y CIERRE
Construye el marco de negociación para defender el precio y cerrar operaciones:
- Diferencia entre precio de salida y precio de mercado: cómo educar al vendedor para que no rechace ofertas razonables
- Tácticas de negociación con el comprador: ancla de precio, concesiones estratégicas, técnica del "si yo consigo X, ¿tú harías Y?"
- Gestión de la contraoferta: cómo presentarla al vendedor con la perspectiva correcta para que no se sienta ofendido
- Uso de IA para generar el memo de negociación: resumen de la situación, propuesta de estrategia de respuesta, argumentos para ambas partes

5. POSTVENTA Y REFERIDOS
Diseña el sistema de fidelización para generar negocio recurrente:
- Seguimiento post-firma: llamada al mes, al trimestre y al año para mantener el vínculo
- Sistema de referidos: cómo pedir recomendaciones sin resultar incómodo, cuándo y cómo hacerlo
- Campaña de felicitación anual: cómo usar IA para personalizar un mensaje por el aniversario de la compra
- Construcción de la red de influencia local: vecinos, comercios, colegios, asociaciones de propietarios

6. PRODUCTIVIDAD CON IA
Integra la IA en el día a día del agente inmobiliario:
- Redacción de descripciones de propiedades: cómo dar el briefing correcto a Claude para que genere textos de anuncio persuasivos en menos de dos minutos
- Respuesta a leads: plantillas de respuesta personalizadas para cada tipo de solicitud, adaptadas al canal (email, WhatsApp, portal)
- Preparación de reuniones: cómo usar IA para investigar al cliente, preparar argumentos y anticipar objeciones
- Seguimiento de operaciones: cómo usar IA para generar recordatorios, resúmenes de conversaciones y próximos pasos en cada expediente
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir sistema de venta consultiva para agentes inmobiliarios',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product strategy para proptech B2B con IA',
                'description'      => 'Define la estrategia de producto y el roadmap de una startup proptech que vende software de gestión inmobiliaria a agencias y promotoras.',
                'prompt_content'   => <<<'EOT'
Eres un Director de Producto con experiencia en startups proptech y SaaS B2B. Necesito tu ayuda para definir la estrategia de producto y el roadmap de los próximos 12 meses de una plataforma proptech en fase de crecimiento que vende software de gestión a agencias inmobiliarias, promotoras y gestoras de activos.

Contexto del producto:
- Plataforma SaaS de gestión inmobiliaria: CRM para agentes, gestión de propiedades, portal de cliente y reporting
- Estado actual: 200 agencias cliente, ARR de 1,2M€, equipo de producto de seis personas
- Competencia principal: soluciones locales legacy (Witei, Inmovilla) y amenaza de plataformas internacionales (Salesforce con módulo inmobiliario, HubSpot vertical)

Estrategia de producto:

1. ANÁLISIS DE MERCADO Y POSICIONAMIENTO
Define el espacio estratégico donde competir:
- Segmentación del mercado proptech: agencias pequeñas (menos de 10 agentes), medianas (10-50 agentes), grandes (más de 50), promotoras, gestoras de patrimonio
- Dónde tiene la empresa ventaja real: conocimiento del mercado local español, integraciones con portales nacionales, soporte en castellano
- Mapa de competidores: posiciona a los cinco principales en una matriz de funcionalidad vs. precio para identificar el espacio no cubierto
- Propuesta de valor diferencial: por qué una agencia mediana debería elegir este producto sobre la alternativa más conocida

2. DISCOVERY E INVESTIGACIÓN DE USUARIOS
Diseña el proceso de discovery para los próximos dos trimestres:
- Plan de entrevistas con usuarios: cuántas, con qué perfil (agente operativo, director de agencia, responsable IT), qué preguntas hacer
- Análisis de uso del producto actual: qué features tienen alta adopción, cuáles están infrautilizadas, en qué momento los usuarios abandonan
- Jobs-to-be-done del agente inmobiliario: qué trabajo real está intentando hacer cuando abre la plataforma, qué le frustra, qué le haría recomendar el producto a un colega
- Cómo usar IA para analizar el backlog de tickets de soporte y extraer los problemas más frecuentes en forma de oportunidades de producto

3. OPORTUNIDADES DE IA EN EL PRODUCTO
Identifica dónde la IA aportaría más valor para el usuario inmobiliario:
- Redacción automática de fichas de propiedades a partir de los datos del CRM y fotos subidas
- Scoring de leads: probabilidad de conversión basada en comportamiento en el portal del cliente y datos del CRM
- Alertas de oportunidad: detectar mandatos con más de 90 días sin visita y proponer acciones proactivas al agente
- Generación de informes de mercado para el propietario: comparativa de precio con inmuebles similares vendidos en la zona
- Para cada oportunidad: impacto esperado en retención o captación, esfuerzo de implementación, riesgos

4. ROADMAP Y PRIORIZACIÓN
Construye el roadmap estratégico para 12 meses:
- Marco de priorización: cómo puntuar iniciativas combinando impacto en retención, potencial de upsell y coste de implementación
- Distribución del tiempo del equipo: qué porcentaje a deuda técnica, nuevas features de IA, mejoras de UX, integraciones con terceros
- Iniciativas del Q1 al Q4: para cada trimestre, cuál es el tema estratégico, las tres features principales y el objetivo de negocio asociado
- Cómo comunicar el roadmap a los clientes clave sin comprometer fechas que el equipo no puede garantizar

5. MÉTRICAS DE ADOPCIÓN Y SALUD DEL PRODUCTO
Define el sistema de métricas para tomar decisiones basadas en datos:
- North Star Metric para un CRM inmobiliario: propón cuál debería ser (número de operaciones gestionadas activamente, tiempo de respuesta a leads, propiedades activas por agente)
- Métricas de activación: qué debe hacer un usuario nuevo en las primeras dos semanas para que sea probable que renueve
- Señales de churn: qué comportamientos en la plataforma predicen la cancelación con dos meses de antelación
- Dashboard de salud del producto: qué ver cada semana en la reunión de producto para tomar decisiones rápidas

6. GO-TO-MARKET DE NUEVAS FEATURES
Diseña el proceso de lanzamiento de nuevas funcionalidades:
- Programa de beta testers: cómo seleccionar agencias colaboradoras, qué pedirles, cómo incentivar la participación
- Comunicación del lanzamiento: secuencia de emails, vídeo de demo, webinar de formación
- Medición del éxito del lanzamiento: adopción en 30 y 90 días, impacto en NPS, menciones en reseñas y redes sociales
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Definir estrategia de producto para plataforma proptech B2B',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Selección y onboarding de agentes inmobiliarios con IA',
                'description'      => 'Diseña un proceso de selección, contratación y formación inicial de agentes inmobiliarios usando herramientas de IA para reducir la rotación y acelerar la productividad.',
                'prompt_content'   => <<<'EOT'
Eres un Director de RRHH con experiencia en empresas de servicios y redes de agentes. Necesito tu ayuda para diseñar un sistema completo de selección y onboarding para agentes inmobiliarios que reduzca la rotación (habitualmente superior al 50% en el primer año) y acelere el tiempo hasta la primera venta.

Contexto del sector:
- El agente inmobiliario en España trabaja mayoritariamente a comisión o en régimen de autónomo
- La selección errónea es muy costosa: formación invertida, cartera no desarrollada, impacto en el equipo
- El perfil ideal no siempre tiene experiencia previa en inmobiliario: puede venir de ventas B2C, atención al cliente, o incluso perfiles de reconversión profesional

Diseño del sistema de RRHH:

1. DEFINICIÓN DEL PERFIL IDEAL
Define los criterios objetivos para seleccionar agentes con alta probabilidad de éxito:
- Competencias blandas críticas: orientación al cliente, resiliencia ante el rechazo, habilidades de escucha activa, gestión del tiempo autónoma
- Señales de advertencia que predicen el abandono temprano: expectativas irreales de ingresos, dependencia excesiva de la estructura, baja tolerancia a la incertidumbre
- Cómo usar IA para analizar CVs y cartas de presentación en busca de estas competencias y señales
- Perfil de éxito basado en datos: qué tienen en común los agentes que han cerrado su primera operación en menos de 90 días

2. PROCESO DE SELECCIÓN
Diseña el proceso de selección de cuatro fases adaptado al sector inmobiliario:
- Fase 1 (cribado): anuncio de empleo redactado con IA que atraiga al perfil correcto y filtre al inadecuado; formulario de preselección con preguntas clave sobre motivación y expectativas económicas
- Fase 2 (entrevista telefónica): guion de entrevista de 20 minutos para evaluar resiliencia, orientación al cliente y comprensión del modelo de comisiones
- Fase 3 (dinámica de grupo o role play): simulación de una llamada de captación a un propietario, evaluación de escucha activa y manejo del rechazo
- Fase 4 (entrevista con el director): evaluación de la alineación cultural y de valores, presentación del plan de carrera realista

3. ONBOARDING DE 90 DÍAS
Diseña el programa de incorporación estructurado por hitos:
- Semanas uno y dos: formación legal básica (contrato de mandato, LOPD en inmobiliario, normativa de reservas y arras), conocimiento del mercado local, sombra con agente senior
- Mes uno: primer mandato captado (con apoyo del director), primeras visitas realizadas, dominio de las herramientas tecnológicas (CRM, portales, firma digital)
- Mes dos: gestión autónoma de la cartera inicial, primera negociación acompañada, participación en sesiones de formación grupales
- Mes tres: primera operación cerrada como objetivo, evaluación de competencias, definición del plan de desarrollo individual
- Uso de IA para generar materiales de formación personalizados por perfil y ritmo de aprendizaje

4. RETENCIÓN EN EL PRIMER AÑO
Diseña las palancas de retención específicas para el agente en comisión:
- Estructura de soporte en el primer año: mentor asignado, reunión semanal con el director, grupo de agentes junior para compartir experiencias
- Gestión de las expectativas económicas: cómo comunicar de forma honesta la curva de ingresos real, qué ocurre si el agente tiene dificultades en los primeros meses
- Reconocimiento no monetario: cómo celebrar los hitos del agente (primer mandato, primera visita, primera oferta, primer cierre) para sostener la motivación
- Plan de carrera: rutas desde agente junior hasta agente senior, responsable de zona y franquiciado o socio

5. ANALÍTICA DE RRHH PARA INMOBILIARIO
Define las métricas de gestión de personas para una red de agentes:
- Tasa de activación: porcentaje de agentes que cierran al menos una operación en los primeros 90 días
- Tasa de retención a seis y doce meses: segmentada por fuente de captación del agente, perfil anterior y zona de trabajo
- Tiempo hasta la primera operación: por cohorte de incorporación, identificando qué variables del proceso de selección predicen este indicador
- Productividad media por agente: operaciones mensuales y facturación, seguimiento de la curva de madurez

6. FORMACIÓN CONTINUA CON IA
Diseña el programa de desarrollo profesional del agente establecido:
- Biblioteca de formación en píldoras: módulos de 10-15 minutos sobre negociación, fotografía inmobiliaria, presentación de captación, herramientas digitales
- Role play asistido por IA: cómo usar Claude para simular conversaciones con propietarios difíciles y practicar el argumentario
- Análisis de las grabaciones de llamadas con IA: identificar patrones de éxito y áreas de mejora por agente
- Plan de certificaciones del sector: LCCI, certificación energética, mediación hipotecaria, y cómo financiarlas vinculadas a objetivos de producción
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar selección y onboarding de agentes inmobiliarios con IA',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de inversión inmobiliaria y due diligence financiera con IA',
                'description'      => 'Construye modelos financieros y procesos de due diligence para evaluar operaciones de inversión inmobiliaria usando IA para acelerar el análisis y reducir el riesgo.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en inversión inmobiliaria con experiencia en family offices, fondos de real estate y promotoras. Necesito tu ayuda para construir un proceso riguroso de análisis y due diligence financiera para operaciones inmobiliarias de entre uno y veinte millones de euros.

Tipos de operación analizados:
- Compra de edificios residenciales para alquiler (Build-to-Rent, Buy-to-Let)
- Compra de locales y oficinas para alquiler o transformación de uso
- Participación en promociones de obra nueva como coinversor
- Compra de suelo para desarrollo

Proceso de análisis financiero:

1. MODELO DE FLUJOS DE CAJA (DCF)
Construye la estructura del modelo de valoración por descuento de flujos:
- Proyección de ingresos: rentas de alquiler por unidad, ocupación estimada con rampa de alquiler, revisión anual por IPC o índice de referencia
- Proyección de gastos: comunidad, IBI, seguro, mantenimiento, gestión de activo (entre el 5% y el 10% de la renta), vacante estimada, capex de mantenimiento decenal
- Estructura de financiación: LTV óptimo según el tipo de activo, coste del préstamo hipotecario, amortización, covenants típicos del sector
- Cálculo de la TIR y el VAN para distintos horizontes de salida: cinco, siete y diez años
- Análisis de sensibilidad: impacto en la TIR ante variaciones del precio de compra, la renta de alquiler, el tipo de interés y el precio de venta

2. VALORACIÓN DEL ACTIVO
Diseña el proceso de valoración por múltiples métodos:
- Método de capitalización de rentas: cómo calcular la yield neta y cómo se compara con el mercado de referencia
- Método comparativo: selección de transacciones comparables recientes, ajustes por superficie, estado, localización y época de la transacción
- Método de coste de reposición: cuándo es relevante para suelos y edificios de obra nueva
- Cómo usar IA para agregar y analizar datos de transacciones de portales, notarías y registros para construir la base comparativa

3. DUE DILIGENCE FINANCIERA
Define el checklist de due diligence para una operación de compra:
- Ingresos: contratos de arrendamiento vigentes, historial de cobros, depósitos y avales, rentas de mercado vs. contractuales
- Gastos: facturas de los últimos dos años, contratos de mantenimiento, derramas pendientes, litigios con inquilinos
- Financiación existente: cargas hipotecarias, condiciones del préstamo, cláusulas de vencimiento anticipado, coste de cancelación
- Fiscal: estudio de la estructura óptima de adquisición (compra de activo vs. compra de sociedad), IVA o ITP, plusvalías latentes, due diligence fiscal del vendedor
- Cómo usar IA para revisar grandes volúmenes de documentación (contratos, facturas, actas de comunidad) e identificar riesgos materiales

4. ANÁLISIS DE RIESGO
Construye la matriz de riesgos de la operación:
- Riesgo de mercado: evolución del precio de alquiler en la zona, pipeline de oferta nueva, cambios regulatorios (índices de contención de renta)
- Riesgo del activo: estado técnico del edificio, necesidades de capex a corto plazo, certificación energética y coste de mejora
- Riesgo de concentración: dependencia de un único inquilino, caducidad próxima de contratos de alquiler
- Riesgo de financiación: exposición a subidas de tipos si la deuda es variable, capacidad de refinanciación al vencimiento
- Para cada riesgo: probabilidad, impacto en la TIR y mitigación propuesta

5. ESTRUCTURA DE LA OPERACIÓN
Diseña la estructura óptima de adquisición y gestión:
- Vehículo de inversión: compra directa, sociedad limitada, SOCIMI, fondo de inversión inmobiliaria: ventajas e inconvenientes de cada uno
- Estructura de financiación: deuda senior, deuda mezzanine, equity: cómo optimizar el apalancamiento sin comprometer la sostenibilidad
- Gestión del activo: gestión directa vs. externalización a property manager: criterios de selección y modelo de contrato
- Estrategia de salida: cuándo vender, a quién (inversor institucional, particular, promotor), cómo preparar el activo para maximizar el precio

6. REPORTING PARA INVERSORES
Diseña el reporting periódico del activo en cartera:
- Informe trimestral: KPIs de ocupación, renta media, EBITDA del activo, valor estimado de mercado, LTV actualizado
- Informe anual: rendimiento total (income return + capital return), comparativa contra el benchmark del sector, proyección revisada
- Uso de IA para generar narrativas financieras automáticas: que el sistema no solo muestre los números sino que explique las variaciones y destaque los riesgos emergentes en lenguaje claro para el inversor no técnico
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Analizar inversiones inmobiliarias y construir modelos financieros con IA',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Due diligence jurídica de activos inmobiliarios con IA',
                'description'      => 'Diseña un proceso de revisión legal completa para operaciones de compraventa e inversión inmobiliaria usando IA para analizar cargas, contratos y riesgos urbanísticos.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especialista en derecho inmobiliario y transacciones de real estate. Necesito tu ayuda para diseñar un proceso completo de due diligence jurídica para operaciones de compraventa e inversión inmobiliaria, con especial énfasis en cómo la IA puede acelerar y mejorar la calidad del análisis legal.

Tipología de operaciones cubiertas:
- Compraventa de inmuebles residenciales y comerciales
- Adquisición de carteras de activos o sociedades inmobiliarias
- Operaciones de sale and leaseback
- Compra de suelo para desarrollo urbanístico

Proceso de due diligence jurídica:

1. REVISIÓN REGISTRAL Y CATASTRAL
Define el proceso de análisis de la situación registral del inmueble:
- Nota simple y certificación registral: qué datos verificar (titularidad, cargas, anotaciones preventivas, afecciones fiscales)
- Cargas hipotecarias: cómo analizar el préstamo hipotecario existente, condiciones de cancelación, coste de subrogación o cancelación registral
- Servidumbres y derechos reales: servidumbres de paso, usufructos, derechos de superficie, retractos convencionales, cómo afectan a la transmisibilidad
- Concordancia Catastro-Registro: cómo detectar y resolver discrepancias de superficie o linderos, implicaciones fiscales de la rectificación

2. SITUACIÓN URBANÍSTICA Y LICENCIAS
Analiza el régimen urbanístico del inmueble:
- Clasificación y calificación del suelo: suelo urbano consolidado, urbanizable, no urbanizable, qué usos permite y cuáles limita
- Cumplimiento de licencias: licencia de primera ocupación, cédula de habitabilidad, licencia de actividad para locales, certificado de final de obra
- Infracciones urbanísticas: cómo detectar obras sin licencia, prescripción de infracciones, riesgo de expediente de restauración de la legalidad
- DANA de usos y aprovechamiento: cómo interpretar el planeamiento municipal para detectar posibilidades de cambio de uso o ampliación

3. CONTRATOS DE ARRENDAMIENTO VIGENTES
Revisa la cartera de contratos de alquiler del activo:
- Análisis de cada contrato: fecha de inicio y vencimiento, prórroga obligatoria y tácita reconducción, renta actual y mecanismos de actualización
- Derechos de adquisición preferente: tanteo y retracto del arrendatario, cómo comunicar correctamente la venta para evitar el ejercicio del derecho
- Contratos con empresas: diferencia de régimen entre arrendamiento de vivienda (LAU) y arrendamiento de local de negocio (Código Civil)
- Uso de IA para extraer de forma automática los datos clave de cada contrato (partes, superficies, rentas, vencimientos, cláusulas especiales) y generar una tabla comparativa

4. ASPECTOS FISCALES DE LA TRANSMISIÓN
Diseña el análisis fiscal de la operación de compra:
- Tributación según el tipo de transmisión: IVA en primera transmisión de obra nueva, ITP en segunda transmisión, exenciones aplicables
- Plusvalía municipal (IIVTNU): cómo calcular la base imponible, riesgo de impugnación, quién la soporta en la negociación
- Compra de sociedad vs. compra de activo: diferencias en tributación directa e indirecta, responsabilidad por deudas tributarias del vendedor
- Retención en el IRPF si el vendedor es no residente: cuándo aplica, cómo tramitarla para no generar contingencias

5. ESTRUCTURA DEL CONTRATO DE COMPRAVENTA
Diseña las cláusulas clave del contrato:
- Arras y señal: diferencia entre arras confirmatorias, penales y penitenciales, implicaciones de cada tipo si hay incumplimiento
- Condiciones suspensivas: cuáles son habituales (financiación, due diligence satisfactoria, autorización administrativa), cómo redactarlas para que sean accionables
- Declaraciones y garantías del vendedor: qué afirmaciones debe hacer sobre el estado legal, técnico y de cargas del inmueble, cuánto tiempo duran
- Cómo usar IA para comparar el borrador de contrato recibido contra una plantilla de referencia e identificar cláusulas inusuales o desequilibradas

6. IA EN EL FLUJO DE TRABAJO JURÍDICO INMOBILIARIO
Integra la IA en el proceso de due diligence legal:
- Revisión masiva de documentación: cómo usar IA para analizar decenas de contratos, licencias y escrituras e identificar los puntos de atención prioritarios
- Generación de informes de due diligence: estructura del informe ejecutivo para el cliente inversor vs. el informe técnico completo para el equipo
- Monitorización normativa: alertas sobre cambios en la legislación arrendaticia, normativa energética obligatoria para inmuebles, modificaciones urbanísticas locales
- Límites y responsabilidad: qué partes del análisis jurídico requieren revisión obligatoria por el abogado y no pueden delegarse en la IA
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Realizar due diligence jurídica de activos inmobiliarios con IA',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención postventa y gestión de propietarios en inmobiliarias con IA',
                'description'      => 'Diseña flujos de comunicación, gestión de incidencias y seguimiento postventa para compradores y propietarios usando IA conversacional y automatización.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en Customer Success con experiencia en empresas de servicios inmobiliarios y promotoras. Necesito tu ayuda para diseñar un sistema de atención postventa que convierta a compradores y propietarios en promotores de la agencia, reduciendo las incidencias y mejorando la satisfacción post-compra.

Contexto:
- Agencia inmobiliaria que cierra entre 20 y 40 operaciones al mes
- Volumen de propietarios que tienen su inmueble en alquiler gestionado: 150 propiedades
- Principal queja: falta de comunicación proactiva después de la firma y lentitud en la resolución de incidencias de mantenimiento

Sistema de postventa:

1. COMUNICACIÓN PROACTIVA POST-FIRMA
Diseña la secuencia de comunicación desde la firma hasta la entrega de llaves:
- Timeline de hitos: firma de arras, firma de la hipoteca, firma ante notario, entrega de llaves, primeros días en la nueva vivienda
- Para cada hito: qué comunicar, por qué canal (email, WhatsApp, llamada), quién es el responsable en la agencia
- Kit de bienvenida al nuevo propietario: guía del barrio generada con IA, contactos de servicios esenciales (fontanero, electricista de confianza), checklist de primeras gestiones (cambio de suministros, empadronamiento)
- Encuesta de satisfacción post-firma: cuándo enviarla, qué preguntar, cómo usar las respuestas para mejorar el proceso

2. GESTIÓN DE PROPIETARIOS EN ALQUILER
Diseña el servicio de property management para propietarios:
- Onboarding del propietario: proceso de firma del mandato de gestión, recogida de datos del inmueble, instrucciones de mantenimiento, definición de límites de gasto para reparaciones
- Reporting mensual automático: extracto de rentas cobradas, gastos de mantenimiento, incidencias del mes, estado del contrato, generado automáticamente con IA
- Comunicación de incidencias: cómo informar al propietario cuando surge un problema (avería, impago, solicitud del inquilino), con propuesta de solución y presupuesto
- Renovación del mandato: sistema de recordatorio proactivo seis meses antes del vencimiento, con informe de valor del servicio prestado

3. GESTIÓN DE INCIDENCIAS DE MANTENIMIENTO
Diseña el flujo de gestión de averías e incidencias:
- Canal de reporte para el inquilino: formulario en app o web con foto y descripción, WhatsApp dedicado con respuesta en menos de dos horas
- Clasificación de la urgencia: urgente (sin agua caliente, inundación, sin calefacción en invierno), prioritaria (electrodoméstico roto, humedad), normal (pintura, pequeñas reparaciones)
- Red de proveedores homologados: cómo seleccionarlos, cómo gestionarlos con IA (comparación de presupuestos, historial de incidencias resueltas, valoraciones)
- Cierre de incidencias: notificación automática al inquilino y al propietario con la resolución, foto del trabajo terminado, factura digitalizada

4. GESTIÓN DE IMPAGOS
Diseña el protocolo de gestión de impago de renta:
- Detección temprana: alerta automática el día cinco si no se ha cobrado la renta, primer contacto amigable con el inquilino
- Escalado progresivo: si en diez días no hay pago, comunicación formal por burofax, propuesta de plan de pago si hay problema temporal
- Coordinación con el abogado: cuándo iniciar el proceso de desahucio, documentación necesaria, comunicación al propietario
- Seguro de impago: cómo recomendar el seguro en el momento de firma del contrato y qué cubre para el propietario

5. FIDELIZACIÓN Y REFERIDOS
Diseña el sistema de retención de propietarios y generación de referidos:
- Programa de referidos para propietarios: cómo incentivar que recomienden la gestión del alquiler a amigos y familiares
- Cumpleaños del contrato: mensaje personalizado al aniversario de cada propietario con resumen del año y propuesta de revisión de la renta
- Informe anual de rentabilidad: rentas totales cobradas, gastos, rentabilidad neta del activo, comparativa con el mercado de la zona
- NPS del propietario: cómo y cuándo medirlo, cómo actuar sobre los detractores antes de que se vayan a la competencia

6. TECNOLOGÍA Y AUTOMATIZACIÓN
Define el stack tecnológico para la gestión de la postventa:
- CRM de gestión de propietarios: qué datos registrar, cómo segmentar por tipo de servicio y perfil del propietario
- App de propietario: qué funcionalidades mínimas debe tener (estado de la renta, incidencias activas, documentos del contrato)
- Automatizaciones esenciales: generación del extracto mensual, alerta de impago, recordatorio de vencimiento del contrato, encuesta post-resolución de incidencia
- Uso de IA generativa: cómo usar Claude para redactar comunicaciones personalizadas al propietario a partir de datos del CRM, reduciendo el tiempo del gestor
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar sistema de postventa y gestión de propietarios en alquiler con IA',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría freelance en inversión y gestión de patrimonio inmobiliario con IA',
                'description'      => 'Estructura tu práctica como asesor independiente de inversión inmobiliaria usando IA para analizar operaciones, crear informes y captar clientes de alto patrimonio.',
                'prompt_content'   => <<<'EOT'
Eres un consultor freelance con experiencia en inversión inmobiliaria y gestión de patrimonio. Necesito tu ayuda para estructurar mi práctica como asesor independiente especializado en ayudar a inversores particulares y family offices a construir y gestionar carteras de activos inmobiliarios rentables.

Contexto del consultor:
- Experiencia previa: seis años en fondos de inversión inmobiliaria o en promotora como analista o director de inversiones
- Especialidad: análisis financiero de operaciones, selección de activos, estructuración de la inversión
- Objetivo: construir una práctica que genere entre 80.000 y 120.000 euros anuales en el primer año con cuatro a seis clientes de alto patrimonio

Construcción de la práctica:

1. POSICIONAMIENTO Y NICHO
Define el nicho estratégico donde competir como asesor independiente:
- Opciones de especialización: inversores particulares con carteras de tres a diez inmuebles, family offices con hasta veinte millones de patrimonio inmobiliario, herederos que reciben patrimonio inmobiliario sin experiencia en gestión
- Para cada nicho: problema principal que resuelves, resultado concreto que ofreces, cuánto están dispuestos a pagar, cómo les encuentras
- Diferenciación frente a gestoras y fondos: independencia, trato personal, alineación de intereses (sin conflicto de comisiones de portales o vendedores), conocimiento profundo del mercado local
- Elevator pitch de 60 segundos para una cena de networking o una primera reunión

2. SERVICIOS Y MODELO DE PRECIOS
Diseña el catálogo de servicios con estructura de honorarios:
- Análisis de operación puntual: revisión de una oportunidad de inversión específica que el cliente trae, entregable (informe de viabilidad), precio fijo de 1.500 a 3.000 euros
- Plan de inversión inmobiliaria anual: definición de la estrategia, búsqueda activa de activos, análisis de las oportunidades identificadas, seguimiento de la cartera, retainer mensual de 1.500 a 3.500 euros
- Due diligence asistida: coordinación de la revisión legal, técnica y financiera antes de la compra, precio por proyecto
- Gestión patrimonial delegada: supervisión de property managers, reporting consolidado de la cartera, reunión trimestral con el cliente, retainer de alto valor
- Cómo fijar los honorarios: coste objetivo de vida y negocio, días facturables esperados, posicionamiento de precio respecto al mercado

3. CAPTACIÓN DE CLIENTES DE ALTO PATRIMONIO
Define la estrategia de desarrollo de negocio para este segmento:
- Red de referidores: abogados de familia, asesores fiscales, gestores de banca privada, notarios, son quienes tienen acceso a clientes con patrimonio; cómo construir estas relaciones de forma sistemática
- Contenido de autoridad en LinkedIn: qué tipo de publicaciones posicionan como experto en inversión inmobiliaria, con qué frecuencia publicar, cómo usar IA para generar análisis de mercado propios que demuestren el conocimiento
- Presencia en eventos del sector: clubs de inversores, eventos de banca privada, foros de family offices, qué aportar y cómo hacer el seguimiento post-evento
- Caso de estudio como herramienta de ventas: cómo documentar una operación de éxito (con datos anonimizados) para usarla en la primera reunión con un prospecto

4. METODOLOGÍA DE TRABAJO
Diseña el proceso de trabajo con el cliente:
- Reunión de diagnóstico inicial: qué preguntar sobre el patrimonio actual, los objetivos, el horizonte de inversión, la tolerancia al riesgo y las restricciones de liquidez
- Fase de análisis: cómo usar IA para acelerar el análisis de mercado, la comparativa de activos y la construcción del modelo financiero
- Presentación de la recomendación: estructura del informe ejecutivo para el cliente no técnico, cómo presentar la TIR y el riesgo de forma comprensible
- Seguimiento y reporting: frecuencia, formato, cómo generar el informe de cartera trimestral de forma automática con IA a partir de los datos del cliente

5. OPERATIVA DEL NEGOCIO FREELANCE
Organiza la gestión del negocio independiente:
- Herramientas imprescindibles: hoja de cálculo de modelos financieros parametrizable, CRM ligero para gestión de prospectos y clientes, herramienta de reporting automatizado
- Contrato estándar de asesoramiento: cláusulas de independencia y conflicto de intereses, limitación de responsabilidad, confidencialidad, propiedad intelectual de los informes
- Uso de IA para productividad: generación de informes de mercado, análisis de documentación de due diligence, redacción de propuestas comerciales personalizadas
- Gestión del tiempo: equilibrio entre atención a clientes actuales y captación de nuevos, cuándo es el momento de subir precios o rechazar clientes

6. CRECIMIENTO Y ESCALABILIDAD
Planifica el crecimiento más allá del trabajo individual:
- Productización del conocimiento: curso online de inversión inmobiliaria para inversores particulares, club de inversores con cuota mensual, informe de mercado por suscripción
- Red de colaboradores: asociación con analistas junior para proyectos de mayor escala, red de agentes inmobiliarios que aporten deal flow a cambio de honorarios de referido
- Reconocimiento como experto: artículos en medios del sector, participación como ponente, libro blanco sobre inversión inmobiliaria en España
- Indicadores de salud del negocio: tasa de retención de clientes en retainer, NPS, ingresos recurrentes vs. ingresos por proyecto, pipeline de oportunidades a noventa días
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Lanzar práctica de asesoría freelance en inversión inmobiliaria con IA',
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
