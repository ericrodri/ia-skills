<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills528Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de contenidos para plataformas streaming con IA',
                'description'      => 'Estrategia completa de marketing de contenidos para plataformas de streaming y medios digitales que usan IA, cubriendo la atracción de nuevos suscriptores, la retención mediante personalización y la construcción de comunidad alrededor del contenido.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing digital especializado en plataformas de streaming y medios de comunicación digitales. Tu experiencia abarca la estrategia de contenidos, la adquisición de suscriptores, la personalización con IA y la construcción de comunidades de fans. Necesito tu ayuda para diseñar una estrategia completa de marketing de contenidos para una plataforma de streaming.

**Contexto de la plataforma:**
- Plataforma: [NOMBRE_PLATAFORMA], servicio de streaming de [tipo de contenido: series, documentales, deportes, formación, música]
- Mercado: España y Latinoamérica hispanohablante
- Situación actual: 45.000 suscriptores de pago, tasa de churn mensual del 6%, coste de adquisición de €22 por suscriptor
- Modelo: suscripción mensual de €7,99 con periodo de prueba gratuito de 14 días
- Objetivo: llegar a 120.000 suscriptores en 12 meses reduciendo el CAC a €15

**instrucción central:**
Diseña una estrategia de marketing de contenidos de 12 meses que use IA para personalizar cada punto de contacto con el usuario, desde el descubrimiento hasta la retención, y que construya una comunidad apasionada alrededor del contenido de la plataforma.

**Bloques de la estrategia:**

1. **Estrategia de contenidos de marca con IA**
   - Plan editorial trimestral: tipos de contenido (detrás de cámaras, entrevistas, listas, análisis), canales (YouTube, Instagram, TikTok, newsletter) y frecuencia
   - Cómo usar IA para generar ideas de contenido a partir de las tendencias de búsqueda y consumo de tu audiencia
   - Estrategia de contenido basado en el catálogo: cómo crear contenido de marketing que venda el catálogo sin spoilers
   - Calendario de lanzamientos: cómo construir el buzz alrededor de cada estreno con semanas de anticipación

2. **Personalización del marketing con IA**
   - Cómo segmentar a la audiencia según sus preferencias de contenido y personalizar los mensajes de marketing
   - Email marketing automatizado con IA: secuencias de bienvenida, recomendaciones personalizadas y campañas de reactivación
   - Personalización del anuncio según el contenido que el usuario ya consume en otras plataformas
   - Retargeting inteligente: cómo usar IA para determinar el momento óptimo y el mensaje correcto para reconvertir usuarios que cancelaron

3. **Estrategia de SEO y descubrimiento orgánico**
   - Investigación de palabras clave en el nicho de streaming: cómo encontrar los términos de búsqueda que usan los fans del contenido que ofreces
   - Cómo usar IA para generar contenido SEO optimizado sobre los títulos, géneros y creadores de tu catálogo
   - Estrategia de Wikipedia y IMDB: cómo las plataformas de streaming construyen presencia en fuentes de información
   - Podcast de contenido: cómo lanzar un podcast sobre el universo de tu plataforma que genere descubrimiento orgánico

4. **Comunidad y fandom**
   - Estrategia de construcción de comunidad: Discord, subreddit, grupos de Facebook o foro propio
   - Cómo usar IA para moderar la comunidad, detectar contenido tóxico y descubrir a los fans más influyentes
   - Programa de embajadores de fan: cómo identificar y activar a los usuarios más apasionados como promotores
   - Eventos digitales: maratones en vivo, Q&A con creadores y experiencias exclusivas para suscriptores

5. **Métricas de marketing y optimización con IA**
   - KPIs del funnel completo: impresiones, CTR, conversión a prueba gratuita, conversión a pago y retención a 90 días
   - Cómo usar IA para identificar qué tipo de contenido de marketing genera los suscriptores con mayor LTV
   - Dashboard de marketing semanal: qué datos ver y qué decisiones tomar a partir de ellos
   - Test A/B con IA: cómo automatizar los experimentos de copy, imagen y llamada a la acción

6. **Estrategia de partnerships y contenido patrocinado**
   - Cómo identificar y acercarse a creadores de contenido que tienen audiencias alineadas con tu plataforma
   - Estructura de acuerdos de partnership: qué ofrecer a cambio de qué
   - Contenido de marca: cómo integrar patrocinadores en el contenido editorial sin perder credibilidad
   - Co-producciones de contenido con marcas: ventajas, riesgos y cómo gestionarlos

Finaliza con un plan de los primeros 90 días con acciones concretas, presupuesto estimado y métricas de éxito para cada iniciativa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de marketing de contenidos para plataformas de streaming con IA',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Sistemas de recomendación de contenido con IA',
                'description'      => 'Guía técnica completa para diseñar e implementar sistemas de recomendación de contenido para plataformas de streaming y medios digitales, cubriendo algoritmos colaborativos, basados en contenido e híbridos con aprendizaje profundo.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de machine learning especializado en sistemas de recomendación para plataformas de streaming y medios digitales. Tu experiencia abarca desde el diseño de la arquitectura de datos hasta la implementación de modelos de recomendación en producción, con un enfoque especial en la personalización a escala y la evaluación offline y online de los algoritmos. Necesito tu guía técnica completa para construir un sistema de recomendación de contenido con IA.

**Descripción de la plataforma:**
- Plataforma de streaming con catálogo de [número] títulos (series, películas, documentales)
- Usuarios activos: 80.000 mensuales, con historial de visualización de entre 2 y 200 horas por usuario
- Stack tecnológico actual: [TU_STACK, por ejemplo Python/Django + PostgreSQL + Redis]
- Objetivo: aumentar el tiempo de visualización por usuario en un 25% y reducir el tiempo de abandono en la home en un 40%
- Restricción: presupuesto de infraestructura de €3.000 mensuales

**objetivo técnico:**
Diseña la arquitectura completa del sistema de recomendación y proporciona guía de implementación para cada componente, priorizando las soluciones que ofrecen mayor impacto con los recursos disponibles.

**Componentes técnicos a diseñar:**

1. **Arquitectura de datos para la recomendación**
   - Esquema de datos necesario: qué eventos de usuario capturar (reproducciones, pausas, búsquedas, valoraciones, tiempo de visualización) y cómo almacenarlos
   - Pipeline de procesamiento de datos en tiempo real vs. batch: qué procesar en tiempo real y qué puede esperar
   - Feature engineering para el sistema de recomendación: qué características del usuario, del contenido y del contexto son más predictivas
   - Arquitectura del feature store: cómo organizar y servir las features a los modelos de recomendación

2. **Algoritmos de recomendación**
   - Comparativa técnica de los principales enfoques: filtrado colaborativo, basado en contenido e híbrido
   - Implementación paso a paso del algoritmo más adecuado para el tamaño y los datos disponibles
   - Manejo del problema del arranque en frío: cómo recomendar a usuarios nuevos sin historial
   - Diversidad vs. relevancia: cómo evitar la cámara de eco sin sacrificar la precisión de las recomendaciones

3. **Personalización en tiempo real**
   - Arquitectura del sistema de recomendación en tiempo real: cómo servir recomendaciones en menos de 100 ms
   - Actualización incremental del modelo: cómo incorporar el comportamiento reciente del usuario sin reentrenar el modelo completo
   - Contextualización de las recomendaciones: cómo adaptar las recomendaciones según la hora del día, el dispositivo o el estado de ánimo inferido
   - A/B testing de algoritmos en producción: cómo comparar el rendimiento de dos modelos sin afectar negativamente a la experiencia del usuario

4. **Evaluación de los sistemas de recomendación**
   - Métricas offline: precision@K, recall@K, NDCG y cómo interpretarlas en el contexto del streaming
   - Métricas online: CTR, tiempo de visualización, tasa de abandono y retención
   - Por qué las métricas offline no siempre predicen el rendimiento online y cómo gestionar esa brecha
   - Sistema de evaluación continua: cómo monitorizar el rendimiento del sistema en producción y detectar degradación del modelo

5. **Infraestructura y escalabilidad**
   - Arquitectura de microservicios para el sistema de recomendación: componentes, APIs y flujos de datos
   - Soluciones de caché: cómo usar Redis u otras tecnologías para reducir la latencia en las recomendaciones más frecuentes
   - Escalado horizontal: cómo diseñar el sistema para que soporte 10x el tráfico actual sin rediseño
   - Monitorización y alertas: qué métricas técnicas monitorizar y qué debe activar una alerta

6. **Consideraciones éticas y de diversidad**
   - Sesgos de popularidad: cómo evitar que el sistema solo recomiende contenido popular y ahogue el contenido largo
   - Diversidad en las recomendaciones: algoritmos para garantizar que los usuarios descubren contenido nuevo y diverso
   - Transparencia de las recomendaciones: cuándo y cómo explicar al usuario por qué se le recomienda algo
   - Auditoría de sesgos: cómo detectar si el sistema discrimina a grupos de usuarios o a tipos de contenido

Finaliza con una hoja de ruta de implementación de 20 semanas, indicando qué versión del sistema lanzar en cada etapa y qué mejora en las métricas de negocio esperar en cada hito.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseño e implementación de sistemas de recomendación para plataformas de streaming',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de interfaces para streaming personalizado con IA',
                'description'      => 'Principios y metodología para diseñar interfaces de plataformas de streaming que se adaptan al usuario con IA, cubriendo el diseño de la home personalizada, la navegación del catálogo, el reproductor de video y los flujos de descubrimiento de contenido.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador UX/UI especializado en plataformas de streaming y medios digitales con experiencia en el diseño de interfaces que se personalizan con inteligencia artificial. Tu trabajo combina los principios del diseño de interfaces de televisión y móvil con los retos únicos de mostrar catálogos grandes de contenido y guiar al usuario hacia lo que quiere ver. Necesito tu guía completa para diseñar la interfaz de una plataforma de streaming con personalización por IA.

**Contexto de la plataforma:**
- Plataforma de streaming con catálogo de contenido en español (series, documentales, películas)
- Dispositivos objetivo: smart TV (prioritario), móvil (secundario) y web (terciario)
- Usuarios: entre 25 y 55 años, con niveles variables de habilidad digital
- Sistema de IA que genera recomendaciones personalizadas, ordena el catálogo y selecciona las imágenes de portada más relevantes para cada usuario
- Objetivo: reducir el tiempo de decisión (cuánto tarda el usuario en elegir qué ver) de 8 minutos a 3 minutos

**tarea central:**
Diseña el sistema de diseño completo para la plataforma de streaming, con especial énfasis en cómo la IA puede mejorar la interfaz sin hacerla confusa o alienante para el usuario.

**Áreas de diseño a desarrollar:**

1. **Principios de diseño para streaming con IA**
   - Los 6 principios específicos de diseño para interfaces de streaming (diferentes de las apps genéricas)
   - Cómo comunicar la personalización sin que el usuario sienta que está siendo vigilado
   - El reto de la paradoja de la elección: cómo mostrar un catálogo grande sin paralizar al usuario
   - Diseño para el "modo de sofa": cómo diseñar para usuarios que interactúan con un control remoto desde el sofá

2. **Diseño de la home personalizada**
   - Arquitectura de la home: qué filas mostrar, en qué orden y con qué lógica de personalización
   - Diseño del hero o banner principal: cómo la IA decide qué mostrar y cómo el diseño maximiza el impacto visual
   - Filas de recomendación: etiquetas que explican por qué se recomienda algo ("Porque viste X", "Tendencia en España")
   - Diseño para diferentes contextos: ¿cómo cambia la home si el usuario la abre a las 7 AM vs. a las 11 PM?

3. **Navegación del catálogo y búsqueda**
   - Diseño de la navegación por géneros, colecciones y listas editoriales
   - Búsqueda inteligente con IA: autocompletar, corrección de errores y búsqueda semántica (buscar por "películas tristes para llorar" y obtener resultados relevantes)
   - Filtros del catálogo: qué filtros ofrecer y cómo diseñarlos para que sean útiles sin añadir fricción
   - Páginas de detalle del título: qué información mostrar, en qué orden y cómo incentivar el play

4. **Diseño del reproductor y la experiencia de visualización**
   - Elementos esenciales del reproductor y su posición en pantalla para TV y móvil
   - Interfaz de selección de episodios: cómo facilitar la navegación entre episodios de una serie
   - Diseño de las recomendaciones al final del episodio: autoplay, sugerencias y cómo evitar el abandono
   - Accesibilidad en el reproductor: subtítulos, descripciones de audio y controles accesibles para Smart TV

5. **Sistema de imágenes y thumbnails personalizados con IA**
   - Cómo funciona la personalización de thumbnails (mostrar diferentes imágenes del mismo título a diferentes usuarios)
   - Principios de diseño para crear thumbnails efectivos que aumenten el CTR
   - Sistema de variantes de thumbnail: cuántas variantes crear y qué elementos variar (personaje, escena, tipo de imagen)
   - Cómo medir el impacto de los thumbnails personalizados en el CTR y el tiempo de visualización

6. **Onboarding y configuración de preferencias**
   - Diseño del flujo de onboarding: cómo recoger las preferencias del usuario nuevo de forma atractiva y rápida
   - Momento de pedido de preferencias explícitas: cuándo pedir al usuario que valore o confirme recomendaciones
   - Centro de preferencias: interfaz para que el usuario controle cómo la IA personaliza su experiencia
   - Diseño del estado vacío: qué mostrar al usuario nuevo cuando todavía no hay datos de personalización

Finaliza con un análisis de las 5 mejores decisiones de diseño de las principales plataformas de streaming (Netflix, HBO, Disney+) y qué puedes aprender de ellas para tu plataforma.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Sistema de diseño UX para plataformas de streaming con personalización por IA',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Monetización de contenido en plataformas streaming con IA',
                'description'      => 'Estrategias avanzadas de monetización para plataformas de streaming y medios digitales usando inteligencia artificial, cubriendo modelos de suscripción, publicidad programática, ventas B2B y estrategias de upsell personalizadas.',
                'prompt_content'   => <<<'EOT'
Eres un director de revenue especializado en modelos de monetización de plataformas de streaming y medios digitales. Tu experiencia abarca desde la optimización de estrategias de suscripción hasta la implementación de publicidad personalizada con IA y las ventas B2B de licencias de contenido. Necesito tu guía completa para maximizar los ingresos de una plataforma de streaming con IA.

**Contexto de la plataforma:**
- Plataforma de streaming con 80.000 suscriptores de pago (plan básico €5,99/mes, plan premium €9,99/mes)
- Ingresos actuales: €580.000 anuales, con un ARPU de €7,25 mensuales
- Tasa de churn mensual: 5,5%
- Modelo actual: sólo suscripción, sin publicidad ni ventas B2B
- Objetivo: duplicar los ingresos anuales a €1,1 millones en 18 meses sin duplicar la base de usuarios

**instrucción central:**
Diseña una estrategia completa de monetización que diversifique las fuentes de ingresos más allá de la suscripción básica, usando IA para personalizar las ofertas, optimizar los precios y maximizar el LTV de cada usuario.

**Estrategias de monetización a desarrollar:**

1. **Optimización de la estrategia de suscripción con IA**
   - Análisis de la arquitectura de planes: ¿deberías añadir un tercer plan o simplificar? Qué funcionalidades deben diferenciarse entre planes
   - Pricing dinámico con IA: cómo ajustar el precio del plan según el mercado, el comportamiento del usuario y la elasticidad de la demanda
   - Estrategia de upsell personalizado: cómo usar IA para identificar el momento óptimo y el mensaje correcto para mover a un usuario del plan básico al premium
   - Precios por país: cómo adaptar el precio a cada mercado hispanohablante de forma que maximice los ingresos totales

2. **Publicidad personalizada con IA (modelo AVOD)**
   - Análisis de viabilidad de añadir un plan con publicidad más barato (AVOD)
   - Cómo funciona la publicidad programática en streaming: tecnología, partners y formatos más efectivos
   - Targeting de publicidad con IA: cómo usar los datos de comportamiento del usuario para vender publicidad a mayor precio
   - Integración de la publicidad en la experiencia de streaming sin destruir la satisfacción del usuario

3. **Ventas B2B: licencias y distribución**
   - Identificación de oportunidades de ingresos B2B: hoteles, aerolíneas, universidades, empresas para beneficios de empleados
   - Proceso de ventas B2B para licencias de contenido: desde la identificación del cliente hasta el cierre del contrato
   - Estructura de precios B2B: precio por asiento, precio por acceso ilimitado o modelo de revenue sharing
   - Cómo la IA puede ayudar a identificar a los mejores leads B2B y personalizar las propuestas

4. **Monetización del engagement: mercancía, eventos y experiencias**
   - Cómo monetizar la comunidad de fans a través de mercancía oficial relacionada con el contenido
   - Eventos en streaming de pago: preestrenos, Q&A exclusivos con creadores y eventos en vivo
   - Contenido exclusivo de pago: episodios adicionales, versiones extendidas o contenido detrás de cámaras premium
   - Estrategia de NFTs o coleccionables digitales relacionados con el contenido (si aplica al tipo de plataforma)

5. **Reducción del churn y maximización del LTV**
   - Modelo predictivo de churn con IA: cómo identificar a los usuarios con mayor riesgo de cancelar antes de que lo hagan
   - Intervenciones personalizadas de retención: qué ofrecer a cada usuario en riesgo (descuento, contenido personalizado, pausa de suscripción)
   - Flujo de cancelación: cómo diseñar el proceso de baja para recuperar el máximo número de usuarios
   - Cálculo y optimización del LTV: cómo usar IA para maximizar el valor de vida de cada segmento de usuario

6. **Métricas de revenue y optimización continua**
   - KPIs de monetización: ARPU, LTV, CAC, payback period y MRR por plan
   - Cómo usar IA para identificar correlaciones entre el comportamiento de consumo y el LTV
   - Dashboard de revenue semanal: qué métricas ver y qué decisiones tomar
   - Proceso de experimentación continua: cómo testear nuevas iniciativas de monetización sin arriesgar los ingresos actuales

Finaliza con un modelo financiero simplificado que proyecte el impacto de implementar las 3 estrategias de monetización más prometedoras en los próximos 18 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estrategia de monetización para plataformas de streaming con IA',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management para plataformas de streaming con IA',
                'description'      => 'Framework de product management especializado en plataformas de streaming y medios digitales con IA, cubriendo el discovery de contenido, la gestión del catálogo, los algoritmos de recomendación y las métricas de engagement como norte estrella.',
                'prompt_content'   => <<<'EOT'
Eres un product manager senior especializado en plataformas de streaming y medios digitales. Tu experiencia abarca desde la definición de la estrategia de producto hasta la gestión del algoritmo de recomendación, pasando por la optimización del catálogo y el diseño de los flujos de descubrimiento de contenido. Usas intensamente la IA para tomar mejores decisiones de producto con datos. Necesito tu framework completo de product management para una plataforma de streaming.

**Situación del producto:**
- Plataforma de streaming con catálogo propio de contenido en español
- Métricas actuales: 80.000 suscriptores, 45 minutos de visualización diaria por usuario activo, tasa de retención mensual del 82%
- Equipo de producto: 1 PM (yo), 3 desarrolladores, 1 diseñadora, 1 data scientist y 1 especialista en contenido
- Objetivo: llegar a 180.000 suscriptores y 70 minutos de visualización diaria en 12 meses

**instrucción principal:**
Desarrolla un framework completo de product management para una plataforma de streaming con IA, adaptado a las particularidades de este tipo de producto (gestión del catálogo, algoritmos de recomendación, retención de suscriptores y equilibrio entre contenido y tecnología).

**Bloques del framework:**

1. **Norte estrella y árbol de métricas**
   - Define la métrica de norte estrella más adecuada para una plataforma de streaming (debate entre el tiempo de visualización, la retención y el CSAT)
   - Árbol de métricas completo: de la norte estrella a las métricas de equipo y las métricas de producto
   - Cómo usar IA para identificar qué métricas de engagement predicen mejor la retención a 6 meses
   - Sistema de detección temprana de problemas: señales que indican que la retención va a caer antes de que caiga

2. **Discovery y validación de hipótesis**
   - Cómo hacer discovery en una plataforma de streaming: qué datos analizar y qué investigación cualitativa hacer
   - Proceso de generación de hipótesis basadas en datos: cómo usar IA para analizar patrones de comportamiento e identificar oportunidades de mejora
   - Diseño de experimentos en una plataforma de streaming: qué probar, cómo dividir la audiencia y durante cuánto tiempo
   - Cómo tomar decisiones de catálogo con datos: qué contenido adquirir, producir o abandonar

3. **Gestión del algoritmo de recomendación como producto**
   - Cómo el PM debe trabajar con el data scientist para mejorar el algoritmo de recomendación
   - Proceso de evaluación de cambios en el algoritmo: cómo medir el impacto de una modificación en el algoritmo en las métricas de negocio
   - Equilibrio entre el algoritmo y la curaduría editorial: cuándo confiar en el algoritmo y cuándo la mano humana añade valor
   - Cómo comunicar cambios en el algoritmo al equipo y a los stakeholders sin entrar en detalles técnicos

4. **Priorización y roadmap en streaming**
   - Framework de priorización adaptado a streaming: cómo equilibrar las mejoras de producto, los proyectos de IA y las iniciativas de contenido
   - Cómo gestionar las peticiones del equipo de contenido (que quiere features para destacar sus adquisiciones) vs. las necesidades del usuario
   - Roadmap de producto de streaming: cómo presentarlo al equipo directivo con las métricas de impacto esperadas
   - Criterios para decidir cuándo construir una feature internamente y cuándo comprar una solución de terceros

5. **Retención y engagement como reto de producto**
   - Análisis de los momentos de mayor riesgo de churn en el ciclo de vida del suscriptor
   - Iniciativas de producto para reducir el churn: mejoras en el algoritmo, nuevas features de personalización y redesign de la home
   - Diseño de los bucles de hábito: cómo hacer que la plataforma forme parte de la rutina diaria del usuario
   - Cómo medir el impacto de las features de producto en la retención de suscriptores

6. **Gestión de stakeholders en una empresa de medios**
   - Las particularidades de trabajar con el equipo de contenido: cómo alinear sus objetivos con los de producto
   - Cómo presentar el roadmap de producto a los directivos de una empresa de medios con background no tecnológico
   - Gestión de la tensión entre los intereses comerciales (publicidad, sponsors) y la experiencia del usuario
   - Cómo construir una cultura de decisiones basadas en datos en una empresa de medios con tradición editorial

Termina con una plantilla de OKRs trimestrales para un equipo de producto de streaming que equilibre el crecimiento de suscriptores con la mejora del engagement y la retención.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Framework de product management para plataformas de streaming con IA',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de talento creativo en medios con IA',
                'description'      => 'Estrategias de recursos humanos para gestionar equipos creativos en empresas de medios y entretenimiento, usando IA para identificar talento, medir el rendimiento creativo y construir culturas que combinan la creatividad con la eficiencia.',
                'prompt_content'   => <<<'EOT'
Eres un director de recursos humanos especializado en empresas de medios, entretenimiento y streaming con experiencia en la gestión de equipos creativos. Tu enfoque equilibra las necesidades del negocio (eficiencia, escalabilidad) con las particularidades del trabajo creativo (autonomía, experimentación, ciclos irregulares de productividad). Usas IA para mejorar la selección de talento, el desarrollo de personas y la medición del rendimiento. Necesito tu guía completa para gestionar el talento creativo en una empresa de medios con IA.

**Contexto de la organización:**
- Empresa: plataforma de streaming con equipo creativo de 35 personas (guionistas, directores, editores de vídeo, diseñadores, community managers y productores de contenido)
- Desafío: el 40% del equipo creativo es freelance o contratado por proyecto, lo que dificulta la cohesión cultural y la gestión del conocimiento
- Situación actual: alta demanda de contenido, plazos ajustados, burnout en los editores y dificultad para evaluar el rendimiento creativo de forma objetiva
- Objetivo: construir un equipo creativo sostenible que produzca contenido de calidad sin sacrificar el bienestar de las personas

**tarea central:**
Diseña una estrategia completa de gestión del talento creativo en medios que use IA para mejorar la selección, el desarrollo y la medición del rendimiento, adaptada a las particularidades de los equipos mixtos (empleados fijos + freelancers).

**Componentes de la estrategia:**

1. **Selección y atracción de talento creativo con IA**
   - Cómo usar IA para analizar portfolios, showreels y muestras de trabajo sin sesgos
   - Diseño del proceso de selección para perfiles creativos: pruebas, entrevistas y evaluación de la cultura
   - Cómo evaluar el potencial creativo a largo plazo, no solo el trabajo pasado
   - Estrategia de employer branding para atraer talento creativo en un mercado competitivo

2. **Onboarding de creativos: cultura, procesos y herramientas**
   - Qué necesita saber un creativo en sus primeras 2 semanas para ser productivo y sentirse parte del equipo
   - Onboarding específico para freelancers: cómo integrarlos en la cultura sin los beneficios de un contrato fijo
   - Cómo usar IA para personalizar el onboarding según el perfil creativo y el proyecto asignado
   - Asignación de mentoría: cómo emparejar a nuevos creativos con los más experimentados

3. **Medición del rendimiento creativo con IA**
   - El reto de medir el rendimiento en trabajos creativos: qué métricas usar y cuáles evitar
   - Framework de evaluación del rendimiento creativo: combinación de métricas cuantitativas (plazos, revisiones) y cualitativas (impacto del contenido, innovación)
   - Cómo usar IA para analizar el engagement del contenido producido y conectarlo con el rendimiento del creativo
   - Evaluación 360º adaptada a equipos creativos: cómo hacer feedback entre pares que sea útil y no hiriente

4. **Prevención del burnout en equipos creativos de alta demanda**
   - Señales de burnout específicas de los perfiles creativos: cómo detectarlas antes de que el creativo queme
   - Cómo usar IA para identificar patrones de trabajo insostenibles en los datos de producción (horas extraordinarias, días sin descanso, ciclos de revisión infinitos)
   - Política de carga de trabajo: cómo planificar la producción de forma que sea sostenible a largo plazo
   - Cultura del descanso creativo: cómo defender el tiempo no productivo como inversión en la calidad del trabajo

5. **Gestión del conocimiento y la cultura creativa**
   - Cómo capturar y transferir el conocimiento creativo en un equipo con alta rotación de freelancers
   - Sistema de documentación de procesos creativos: qué documentar, en qué formato y cómo mantenerlo actualizado
   - Rituales de cultura creativa: sesiones de feedback de contenido, retrospectivas de proyecto y espacios de experimentación
   - Cómo usar IA para analizar qué características del proceso creativo predicen el éxito del contenido

6. **Gestión de la comunidad de freelancers**
   - Cómo construir una comunidad de freelancers fidelizados que prefieran trabajar contigo antes que con la competencia
   - Sistema de calificación y feedback para freelancers: cómo ser transparente sin crear tensión
   - Política de tarifas y pagos: cómo ser competitivo en precios sin sacrificar la sostenibilidad financiera
   - Cómo usar IA para gestionar el pool de freelancers y asignar proyectos según habilidades, disponibilidad y rendimiento histórico

Finaliza con un plan de implementación de 6 meses para transformar la gestión del talento creativo, con iniciativas prioritarias y métricas de éxito para cada una.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestión estratégica del talento creativo en empresas de medios y streaming con IA',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelos financieros para medios y streaming con IA',
                'description'      => 'Análisis y modelado financiero avanzado para empresas de medios digitales y plataformas de streaming, usando IA para proyectar ingresos por suscripción, modelar el impacto del churn y valorar empresas en el sector de entretenimiento digital.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en el sector de medios digitales, streaming y entretenimiento. Tu expertise incluye el modelado financiero de negocios de suscripción, la valoración de empresas de medios y el análisis del impacto de la inteligencia artificial en la economía del sector. Necesito tu guía completa para construir y analizar modelos financieros para una plataforma de streaming.

**Datos de la empresa a modelar:**
- Plataforma de streaming: [NOMBRE], fundada en [AÑO]
- Suscriptores de pago actuales: 80.000 (plan básico: 60% a €5,99/mes; plan premium: 40% a €9,99/mes)
- Crecimiento mensual de nuevos suscriptores: 3.500 (brutos)
- Tasa de churn mensual: 5,5%
- Coste de contenido anual: €800.000 (licencias y producción)
- Coste de infraestructura tecnológica: €150.000 anuales
- Equipo: 45 personas, con una masa salarial de €1,8 millones anuales
- Objetivo de la empresa: llegar a la rentabilidad operativa en 18 meses

**objetivo del análisis:**
Construye un modelo financiero completo que proyecte la evolución de la empresa en los próximos 3 años, analiza los escenarios de inversión y proporciona la valoración de la empresa en el contexto del mercado de streaming hispanohablante.

**Secciones del modelo financiero:**

1. **Modelo de suscriptores y métricas SaaS aplicadas a streaming**
   - Modelo de cohortes de suscriptores: cómo proyectar la evolución de cada cohorte mensual considerando el churn específico del sector streaming
   - Cálculo del LTV por plan y por canal de adquisición
   - Análisis de sensibilidad del ARPU: impacto de subir el precio del plan básico en €1 en los ingresos y en el churn
   - Métricas clave del negocio de streaming: MRR, ARR, Net MRR (growth - churned), quick ratio y Rule of 40

2. **Modelo de P&G completo a 3 años**
   - Proyección de ingresos por suscripción con los supuestos de crecimiento y churn
   - Estructura de costes del streaming: coste de contenido, infraestructura, marketing y equipo, y cómo escalan con el número de suscriptores
   - Margen bruto y su evolución: cómo mejora el margen conforme crece la base de suscriptores
   - Punto de equilibrio: mes y número de suscriptores en que la plataforma alcanza la rentabilidad operativa

3. **Modelo de inversión en contenido**
   - Cómo modelar la inversión en contenido propio vs. licenciado y su impacto en la retención y el crecimiento
   - Análisis del ROI del contenido: cómo calcular el retorno de cada título basándose en el incremento de suscriptores y la reducción del churn
   - Cómo usar IA para predecir el éxito de un contenido antes de inversión, basándose en datos de audiencia y tendencias
   - Optimización del presupuesto de contenido: qué inversión en qué tipo de contenido maximiza el LTV

4. **Análisis de escenarios y sensibilidad**
   - Escenario conservador, base y optimista: supuestos de cada uno y resultados en ARR y camino a la rentabilidad
   - Variables más sensibles del modelo: cuáles tienen mayor impacto en el resultado final
   - Análisis de sensibilidad del churn: impacto de una reducción del churn del 5,5% al 4% en la valoración de la empresa
   - Plan B: qué palancas tiene la empresa si el crecimiento de suscriptores es más lento de lo esperado

5. **Valoración de la empresa**
   - Múltiplos de valoración del sector streaming: EV/Revenue, EV/EBITDA y comparables de transacciones recientes
   - Valoración por DCF adaptada a un negocio de streaming con inversión intensa en contenido
   - Diferencias de valoración según la etapa: early stage (múltiplo de ARR) vs. late stage (EV/EBITDA)
   - Cómo mejorar la valoración antes de una ronda: qué métricas mejorar y en cuánto tiempo

6. **Planificación de la ronda de inversión**
   - Cuánto capital necesita la empresa para llegar a la rentabilidad y por qué
   - Estructura de la ronda: cantidad, tipo de inversor (VC, family office, estratégico) y condiciones habituales del sector
   - Qué modelo financiero presentar a un inversor de streaming: qué incluir y qué no
   - Term sheet: conceptos clave que debes entender antes de firmar (valoración pre-money, dilución, liquidation preference, drag-along)

Finaliza con un dashboard financiero de una página que muestre las 10 métricas más importantes que cualquier inversor o directivo de una plataforma de streaming debe monitorizar mensualmente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Modelado financiero y valoración de plataformas de streaming con IA',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Derechos digitales y propiedad intelectual en streaming con IA',
                'description'      => 'Marco jurídico completo para la gestión de los derechos de propiedad intelectual en plataformas de streaming y medios digitales, incluyendo el impacto de la IA en la creación de contenido, las licencias digitales y la protección frente a la piratería.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en propiedad intelectual, derechos de autor y regulación de medios digitales con expertise en el sector del streaming y el entretenimiento. Tu conocimiento abarca la legislación española y europea sobre derechos de autor, las licencias de contenido digital y el impacto del Reglamento de IA de la UE en la creación y distribución de contenido. Necesito tu análisis legal completo para una plataforma de streaming.

**Descripción de la plataforma:**
- Plataforma de streaming de producción propia (series y documentales) con distribución en España y Latinoamérica
- Modelos de contenido: producción propia, co-producción con terceros y licencias de contenido internacional
- La plataforma usa IA para: generar tráileres automatizados, crear subtítulos, sintetizar voces para el doblaje, generar thumbnails personalizados y crear resúmenes de contenido
- Próximo desafío: expandir a Brasil y Portugal y negociar acuerdos con distribuidores de SVOD internacionales

**instrucción principal:**
Elabora un análisis legal exhaustivo que cubra todos los aspectos de propiedad intelectual y derechos digitales relevantes para una plataforma de streaming que usa IA en la creación y distribución de contenido.

**Bloques del análisis:**

1. **Derechos de autor en la producción de contenido**
   - Marco legal español y europeo de los derechos de autor aplicable a series y documentales (LPI y Directiva 2019/790)
   - Titularidad de los derechos en una co-producción: cómo se reparten los derechos entre los co-productores
   - Contratos con el equipo creativo: qué cláusulas son imprescindibles para que los derechos recaigan en la plataforma
   - Derechos morales vs. derechos patrimoniales: qué puede ceder el creador y qué no

2. **IA y propiedad intelectual: el nuevo territorio**
   - ¿Puede la IA ser autora de contenido según la ley española y europea? Estado actual de la jurisprudencia
   - Implicaciones legales de usar IA para generar tráileres, thumbnails y resúmenes a partir del contenido original
   - Entrenamiento de modelos de IA con contenido propio: qué derechos necesitas y cómo obtenerlos
   - Uso de contenido de terceros para entrenar modelos de IA: qué es legal y qué puede generar responsabilidad
   - El Reglamento de IA de la UE y sus obligaciones de transparencia para las plataformas de medios

3. **Licencias de contenido y acuerdos de distribución**
   - Tipos de licencias en el streaming: exclusiva, no exclusiva, territorial y por ventana de distribución
   - Cláusulas imprescindibles en un acuerdo de licencia de contenido: duración, territorio, plataformas autorizadas, royalties y auditoría
   - Licencias de música en el streaming: qué licencias necesitas (sincronización, máster) y cómo gestionarlas con SGAE, AGEDI y equivalentes latinoamericanos
   - Acuerdos de distribución internacional: diferencias entre el marco legal español, mexicano, argentino y brasileño

4. **Protección frente a la piratería**
   - Marco legal para combatir la piratería de contenido streaming en España (Ley 34/2002 y procedimientos ante la Comisión de Propiedad Intelectual)
   - Herramientas técnicas y legales para proteger el contenido: DRM, watermarking y DMCA takedowns
   - Cómo usar IA para detectar distribución no autorizada del contenido en internet y redes sociales
   - Proceso de denuncia ante plataformas como YouTube, Meta y Telegram y plazos de respuesta esperados

5. **Doblaje con IA y derechos de los actores de voz**
   - Marco legal para el uso de síntesis de voz con IA en el doblaje de contenido audiovisual
   - Derechos de los actores de doblaje sobre el uso de su voz por IA: convenios colectivos y jurisprudencia emergente
   - Cómo obtener el consentimiento informado de un actor para usar su voz con IA
   - Riesgo legal de crear voces sintéticas sin consentimiento expreso: casos recientes y sanciones

6. **Expansión internacional y gestión de derechos territoriales**
   - Principales diferencias en la legislación de propiedad intelectual entre España, México, Argentina y Brasil
   - Cómo gestionar los derechos territoriales cuando el contenido se distribuye en múltiples países simultáneamente
   - Estructura societaria recomendada para una plataforma con distribución panlatina
   - Negociación con distribuidores internacionales: qué derechos ceder y cuáles retener siempre

Finaliza con una lista de verificación de propiedad intelectual de 20 puntos que el equipo legal debe revisar antes de cada lanzamiento de nuevo contenido en la plataforma.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Marco legal de propiedad intelectual y derechos digitales para plataformas de streaming con IA',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Retención de suscriptores en plataformas streaming con IA',
                'description'      => 'Estrategia de customer success para reducir el churn y maximizar la retención de suscriptores en plataformas de streaming, usando IA para predecir el abandono, personalizar las intervenciones y diseñar programas de fidelización efectivos.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en customer success y retención de suscriptores para plataformas de streaming y productos digitales de suscripción. Tu expertise combina el análisis de datos de comportamiento de usuarios con el diseño de intervenciones de retención personalizadas usando inteligencia artificial. Necesito tu guía completa para reducir el churn y maximizar la retención en una plataforma de streaming.

**Contexto de la plataforma:**
- Plataforma de streaming de contenido en español con 80.000 suscriptores de pago
- Tasa de churn mensual actual: 5,5% (objetivo: reducirla al 3,5% en 9 meses)
- LTV promedio actual: €87 por suscriptor
- Principales razones de cancelación declaradas (según encuesta de salida): "no encuentro nada para ver" (35%), "demasiado caro" (28%), "vi todo lo que me interesaba" (22%), "problemas técnicos" (15%)
- Equipo de CS: 2 agentes y 1 manager

**tarea central:**
Diseña un sistema completo de retención de suscriptores que use IA para predecir el riesgo de churn en cada usuario y activar intervenciones personalizadas antes de que el usuario decida cancelar.

**Componentes del sistema de retención:**

1. **Modelo predictivo de churn con IA**
   - Features del modelo: qué señales de comportamiento del usuario son más predictivas del churn en streaming (días sin visualización, patrones de búsqueda fallida, tipo de contenido que busca y no encuentra)
   - Arquitectura del modelo: tipo de algoritmo recomendado, datos de entrenamiento necesarios y frecuencia de actualización
   - Segmentación de riesgo: cómo clasificar a los usuarios en grupos de riesgo (bajo, medio, alto, crítico) y qué intervención corresponde a cada uno
   - Métricas de evaluación del modelo: precisión, recall y cuántos "falsos positivos" puedes permitirte

2. **Intervenciones de retención personalizadas**
   - Intervención para usuarios de riesgo alto: qué ofrecer (descuento, contenido exclusivo, acceso a un plan superior) y cuándo
   - Campaña de recomendación personalizada: cómo usar IA para recomendar exactamente el contenido que puede reconvertir al usuario
   - Notificaciones proactivas: cuándo, en qué canal y con qué mensaje contactar a los usuarios en riesgo
   - Intervención para el motivo "no encuentro nada para ver": rediseño del discovery y campaña de curación personalizada

3. **Flujo de cancelación optimizado**
   - Diseño del proceso de baja: qué pantallas mostrar, en qué orden y qué ofertas hacer para recuperar al usuario
   - Pausa de suscripción: cómo ofrecer esta opción a los usuarios que se van por precio o por viaje y cuántos se recuperan
   - Encuesta de salida: 3 preguntas clave y cómo usar las respuestas para mejorar el producto y el catálogo
   - Flujo de win-back: cómo reconvertir a los usuarios que ya han cancelado (timing, oferta y mensaje)

4. **Programa de fidelización de suscriptores**
   - Diseño de un programa de fidelización para una plataforma de streaming: qué beneficios ofrecer y cómo estructurar los niveles
   - Beneficios que tienen mayor impacto en la retención: acceso anticipado a contenido, descuentos en la renovación, experiencias exclusivas con creadores
   - Gamificación responsable: cómo usar los hábitos de visualización para incentivar el engagement sin crear adicción
   - Cómo comunicar el valor del programa a los suscriptores sin que parezca marketing intrusivo

5. **Estrategia de contenido para la retención**
   - Cómo el calendario de lanzamiento de contenido impacta en el churn (el "cliff hanger" efecto)
   - Estrategia de contenido siempre activo: cómo garantizar que siempre hay algo nuevo para ver en la plataforma
   - Cómo usar los datos de retención para informar las decisiones de adquisición y producción de contenido
   - Programas de maratón y eventos especiales para crear urgencia y reducir el churn estacional

6. **Métricas y dashboard de retención**
   - KPIs de retención: tasa de retención mensual y por cohorte, NPS del suscriptor, tasa de éxito de las intervenciones y coste de retención por suscriptor
   - Dashboard de retención semanal: qué métricas ver y qué decisiones tomar en la reunión de equipo
   - Informe mensual de retención para la dirección: cómo presentar el impacto del programa de retención en términos financieros
   - Proceso de mejora continua: cómo usar los datos de retención para mejorar el producto, el catálogo y las intervenciones

Finaliza con un plan de los primeros 60 días para implementar el sistema de retención, con acciones concretas para cada semana y las métricas de éxito que debes ver al final de cada quincena.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Sistema de retención de suscriptores con IA para plataformas de streaming',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Producción de contenido digital con IA para freelancers',
                'description'      => 'Guía práctica para creadores de contenido y productores audiovisuales independientes que quieren usar inteligencia artificial para escalar su producción, mejorar la calidad y monetizar su trabajo en el ecosistema de streaming y medios digitales.',
                'prompt_content'   => <<<'EOT'
Eres un consultor especializado en ayudar a creadores de contenido y productores audiovisuales independientes a construir negocios sostenibles en el ecosistema de streaming y medios digitales. Tu expertise incluye el uso de herramientas de IA para escalar la producción, la monetización del contenido en múltiples plataformas y la construcción de relaciones con plataformas de streaming que buscan contenido externo. Necesito tu guía completa para convertirme en un productor de contenido independiente exitoso con IA.

**Mi situación de partida:**
- Experiencia: [TU EXPERIENCIA, por ejemplo periodista, youtuber, realizador de vídeo, podcaster o community manager]
- Tipo de contenido que produzco: [TIPO, por ejemplo documentales, entretenimiento, formación, noticias o deportes]
- Audiencia actual: [AUDIENCIA, por ejemplo 5.000 suscriptores en YouTube, 10.000 seguidores en Instagram]
- Herramientas actuales: [HERRAMIENTAS, por ejemplo Premiere Pro, Da Vinci Resolve, GarageBand]
- Objetivo: generar €3.000 mensuales de forma estable como productor de contenido independiente en 12 meses

**objetivo del ejercicio:**
Ayúdame a construir un negocio de producción de contenido digital independiente que use inteligencia artificial para multiplicar la capacidad de producción, mejorar la calidad del contenido y diversificar las fuentes de ingresos más allá de AdSense y los patrocinios tradicionales.

**Plan de negocio y producción a desarrollar:**

1. **Definición del nicho y la propuesta de valor**
   - Cómo encontrar el nicho de contenido con mayor demanda y menor saturación para mi perfil y mis intereses
   - Propuesta de valor diferenciada: qué ofrece mi contenido que no ofrece nadie más y por qué alguien debería elegirme
   - Análisis de la competencia: quién produce contenido similar, qué hace bien y qué oportunidad deja
   - Formato ideal: serie de vídeo, documental, podcast, newsletter, curso o combinación de varios

2. **Producción eficiente con IA**
   - Flujo de producción con IA desde la idea hasta la publicación: qué pasos automatizar y cuáles mantener artesanales
   - Investigación y guion con IA: cómo usar Claude para investigar temas, estructurar narrativas y generar borradores de guion
   - Edición asistida por IA: herramientas de transcripción automática, corte por palabras, eliminación de silencios y generación de subtítulos
   - Optimización del tiempo: cómo producir el doble de contenido en el mismo tiempo usando IA sin sacrificar la calidad percibida

3. **Distribución multiplataforma**
   - Estrategia de distribución: cómo adaptar el mismo contenido para YouTube, Instagram, TikTok, podcast y newsletter sin producirlo cuatro veces
   - Repurposing con IA: cómo un solo vídeo largo genera clips cortos, un episodio de podcast, un artículo y una newsletter usando IA
   - SEO de contenido en YouTube con IA: títulos, descripciones y tags optimizados para el algoritmo
   - Cómo vender contenido a plataformas de streaming: qué buscan, cómo contactarlas y qué formato de propuesta usar

4. **Monetización diversificada**
   - Las 6 fuentes de ingresos de un productor de contenido independiente: AdSense, patrocinios, membresías, licencias, formación y contenido de marca
   - Cómo construir un modelo de ingresos que no dependa exclusivamente de las plataformas
   - Membresías y suscripciones: cómo crear un club de fans que pague por contenido exclusivo o por acceso anticipado
   - Venta de licencias de contenido: cómo ofrecer tu contenido a plataformas de streaming, televisiones y empresas que necesitan vídeos

5. **Crecimiento de audiencia con IA**
   - Estrategia de crecimiento orgánico: cómo usar IA para identificar los temas y formatos que más crecen en tu nicho
   - Colaboraciones estratégicas: cómo identificar y acercarte a otros creadores con audiencias complementarias
   - Análisis de métricas con IA: cómo interpretar los datos de YouTube Analytics, Instagram Insights y Spotify for Podcasters para tomar mejores decisiones
   - Construcción de lista de correo: por qué es tu activo más valioso y cómo construirla rápidamente

6. **Gestión del negocio como freelancer**
   - Estructura legal y fiscal para un productor de contenido independiente en España
   - Gestión de contratos con plataformas, marcas y colaboradores: qué cláusulas son imprescindibles
   - Planificación financiera del freelancer: cómo gestionar los ingresos irregulares, reservar para impuestos y construir un colchón de seguridad
   - Escalabilidad: cuándo y cómo añadir colaboradores, delegar la producción y pasar de creador individual a productora

Termina con un plan de los primeros 30 días para publicar los primeros 4 piezas de contenido, configurar al menos 2 fuentes de monetización y medir qué funciona, con un calendario semanal de acciones concretas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Negocio de producción de contenido digital independiente con IA para el ecosistema de streaming',
                'vote_score'       => 42,
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
