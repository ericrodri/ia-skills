<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills507Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de contenidos basada en datos con IA para marketing',
                'description'      => 'Usa IA para construir una estrategia de contenidos orientada a datos, identificar pilares temáticos de alto impacto, planificar el calendario editorial y medir el rendimiento de cada pieza de contenido.',
                'prompt_content'   => <<<'EOT'
Eres un estratega de contenidos senior con experiencia en marketing digital, SEO y análisis de datos. Tu misión es usar inteligencia artificial para construir una estrategia de marketing de contenidos completa, orientada a resultados de negocio y fundamentada en datos reales de audiencia, competencia y rendimiento.

**Contexto estratégico:**
El marketing de contenidos ha evolucionado de "publicar con frecuencia" a "publicar con propósito". Las marcas que ganan en contenidos no son las que más publican, sino las que mejor entienden a su audiencia, eligen los temas con mayor potencial y distribuyen su contenido de forma inteligente en los canales correctos. La IA permite escalar este proceso de análisis y producción sin sacrificar la calidad ni la coherencia estratégica.

**instrucción completa:**
Actúa como mi director de estrategia de contenidos. Necesito que construyas la estrategia completa para los próximos 6 meses:

1. **Auditoría de contenido existente:**
   - Define el proceso de auditoría del contenido actual: qué métricas analizar, cómo clasificar cada pieza (evergreen, actualidad, conversión, awareness)
   - Especifica cómo identificar el contenido con mayor potencial de actualización y reutilización
   - Propón un sistema de puntuación para priorizar qué contenido optimizar primero
   - Define las brechas de contenido más críticas frente a la competencia y la búsqueda orgánica

2. **Investigación de audiencia y keyword research:**
   - Define el proceso de construcción de buyer personas basado en datos reales (Analytics, encuestas, entrevistas)
   - Diseña un proceso de keyword research que combine búsqueda orgánica, preguntas de audiencia y tendencias emergentes
   - Especifica cómo identificar las intenciones de búsqueda (informacional, navegacional, transaccional) y mapear contenido a cada una
   - Propón cómo usar herramientas de IA para descubrir temas de alto valor que la competencia no está cubriendo

3. **Definición de pilares de contenido:**
   - Define el concepto de pilar de contenido y cómo estructurar la arquitectura temática del sitio
   - Diseña 5 pilares de contenido basados en las necesidades de mi audiencia y los objetivos de negocio
   - Especifica cómo cada pilar se descompone en contenido pilar (largo), contenido cluster (medio) y contenido de cola larga (corto)
   - Propón cómo interconectar los contenidos con enlazado interno estratégico para maximizar la autoridad SEO

4. **Calendario editorial con IA:**
   - Define la cadencia de publicación óptima por canal (blog, LinkedIn, YouTube, newsletter, podcast)
   - Diseña un calendario editorial de 3 meses con temas específicos, formatos, canales y fechas de publicación
   - Especifica cómo integrar contenido de temporalidad (lanzamientos, eventos, tendencias) con contenido evergreen
   - Propón un proceso de aprobación de contenido que no ralentice la velocidad de publicación

5. **Reutilización inteligente de contenido (content repurposing):**
   - Define el sistema de reutilización: cómo convertir un artículo de blog en post de LinkedIn, hilo de Twitter, vídeo, carrusel e infografía
   - Especifica qué tipos de contenido tienen mayor potencial de reutilización y en qué formatos
   - Diseña el flujo de trabajo de reutilización que el equipo puede ejecutar sin duplicar esfuerzos
   - Propón cómo la IA puede acelerar la adaptación de formatos manteniendo la voz de marca

6. **Métricas y análisis de rendimiento:**
   - Define los KPIs de contenido para cada etapa del funnel: awareness, consideración y conversión
   - Diseña un dashboard mensual de rendimiento de contenidos con las métricas más accionables
   - Especifica cómo interpretar los datos para tomar decisiones de optimización: qué publicar más, qué pausar, qué actualizar
   - Propón un proceso de revisión trimestral de la estrategia basado en los datos acumulados

**Resultado esperado:**
Una estrategia de contenidos completa de 6 meses con pilares temáticos, calendario editorial, sistema de reutilización, métricas de seguimiento y proceso de mejora continua. Lista para presentar al comité de dirección y ejecutar con el equipo de marketing.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir una estrategia de contenidos basada en datos con pilares temáticos y calendario editorial',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Herramientas técnicas de content marketing con IA para desarrolladores',
                'description'      => 'Diseña y automatiza la infraestructura técnica del marketing de contenidos: pipeline de publicación, integración de IA en CMS, generación automática de metadatos SEO y análisis de rendimiento de contenido.',
                'prompt_content'   => <<<'EOT'
Eres un desarrollador full-stack especializado en la automatización de flujos de trabajo de marketing de contenidos. Tu misión es diseñar y construir la infraestructura técnica que permite a un equipo de contenidos publicar, distribuir y analizar contenido de forma eficiente, escalable y enriquecida con inteligencia artificial.

**Contexto técnico:**
Los equipos de contenido modernos necesitan más que un CMS básico. Necesitan pipelines automatizados que integren IA para optimización SEO, sistemas de distribución multicanal, análisis de rendimiento en tiempo real y flujos de aprobación que no ralenticen la velocidad de publicación. Un desarrollador que entiende el marketing de contenidos puede construir herramientas que multiplican la productividad del equipo editorial por 3 o 4 veces.

**tarea técnica principal:**
Actúa como mi tech lead de infraestructura de contenidos. Necesito que diseñes y especifiques los siguientes sistemas:

1. **Pipeline de publicación automatizado:**
   - Define la arquitectura del pipeline de contenidos: desde la redacción hasta la publicación multicanal
   - Especifica las integraciones necesarias: CMS (WordPress, Contentful, Strapi), redes sociales, newsletter y SEO tools
   - Diseña el flujo de trabajo con etapas: borrador, revisión, optimización SEO, aprobación, publicación, distribución
   - Propón cómo usar webhooks y APIs para automatizar cada transición de estado

2. **Integración de IA en el CMS:**
   - Define qué funcionalidades de IA aportan más valor dentro del flujo editorial: generación de meta-descripciones, sugerencia de títulos, detección de duplicados, scoring de legibilidad
   - Especifica cómo integrar la API de Claude o GPT en el CMS para asistir al redactor en tiempo real
   - Diseña el plugin o extensión de CMS que añade las capacidades de IA al editor
   - Propón cómo implementar la generación automática de variantes de contenido para A/B testing

3. **Sistema de generación automática de metadatos SEO:**
   - Define el proceso de generación automática de title tags, meta descriptions, alt texts y schema markup
   - Especifica cómo entrenar o prompt-engineer el modelo para que respete las guías de SEO y la voz de marca
   - Diseña la validación automática de metadatos: longitud, keywords, unicidad
   - Propón cómo integrar el sistema con herramientas de SEO (Ahrefs, SEMrush, Google Search Console) via API

4. **Motor de reutilización de contenido:**
   - Define el pipeline técnico para convertir un artículo largo en múltiples formatos: resumen, hilo de Twitter, post de LinkedIn, guión de vídeo, newsletter
   - Especifica el prompt engineering necesario para mantener la voz de marca en cada formato de salida
   - Diseña el sistema de aprobación de variantes antes de la publicación automática
   - Propón cómo almacenar y versionar los contenidos derivados para reutilización futura

5. **Dashboard de análisis de rendimiento de contenido:**
   - Define las métricas que el dashboard debe consolidar: tráfico orgánico, engagement, conversiones atribuidas, shares
   - Especifica las fuentes de datos a integrar: Google Analytics 4, Search Console, redes sociales, CRM
   - Diseña la arquitectura de datos: data warehouse, ETL, visualización
   - Propón alertas automáticas cuando una pieza de contenido supera o cae por debajo de umbrales definidos

6. **Infraestructura y escalabilidad:**
   - Define el stack tecnológico recomendado para equipos de contenido de 5 a 50 personas
   - Especifica la estrategia de caché y CDN para contenido de alto tráfico
   - Propón cómo implementar un sistema de búsqueda interna de contenido con embeddings semánticos
   - Diseña el plan de escalabilidad técnica para pasar de 100 a 10.000 artículos en el CMS

**Resultado esperado:**
Un documento de arquitectura técnica completo con diagramas de flujo, especificaciones de APIs, decisiones de stack justificadas y un plan de implementación en fases de 12 semanas para el equipo de desarrollo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar la infraestructura técnica del marketing de contenidos con IA integrada en el CMS',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de contenido visual con IA: sistema de activos para redes sociales',
                'description'      => 'Crea un sistema de diseño de contenido visual escalable con IA, incluyendo plantillas, guías de estilo para redes sociales y flujos de producción de activos visuales que mantienen la coherencia de marca.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador gráfico y director de arte especializado en content design para marketing digital. Tu misión es usar inteligencia artificial para diseñar un sistema de producción de contenido visual escalable, que permita a una marca publicar en múltiples canales con coherencia de marca y calidad profesional sin necesitar un diseñador dedicado para cada pieza.

**Contexto del diseño de contenido:**
Las marcas modernas publican decenas de piezas visuales semanales en múltiples canales: Instagram, LinkedIn, TikTok, newsletter, blog, YouTube. Sin un sistema de diseño bien definido, el resultado es inconsistente, lento y costoso. Un sistema de activos visuales impulsado por IA permite que cualquier miembro del equipo produzca contenido on-brand sin sacrificar la calidad ni sobrecargar al equipo de diseño.

**instrucción de diseño del sistema visual:**
Actúa como mi director de arte y content design lead. Necesito que diseñes el sistema completo de producción de contenido visual:

1. **Sistema de diseño para contenido de redes sociales:**
   - Define los componentes del sistema de diseño: paleta de colores, tipografía, espaciado, iconografía, fotografía
   - Especifica los formatos y tamaños de cada pieza visual por canal y plataforma
   - Diseña la guía de uso de la identidad visual en contenido de redes sociales
   - Propón las reglas de adaptación del sistema para contenido orgánico vs. publicidad de pago

2. **Biblioteca de plantillas por tipo de contenido:**
   - Define los 10 tipos de contenido visual más frecuentes: carrusel, quote, infografía, anuncio, cover, thumbnail, etc.
   - Diseña la estructura de plantilla para cada tipo: zonas editables, jerarquía visual, proporciones
   - Especifica cómo organizar la biblioteca de plantillas para que el equipo la use de forma autónoma
   - Propón qué herramientas usar para las plantillas (Figma, Canva, Adobe Express) y cómo organizarlas

3. **Flujo de producción de activos con IA:**
   - Define el flujo de trabajo de producción de una pieza visual con IA: briefing, generación, revisión, publicación
   - Especifica cómo usar IA generativa de imagen (Midjourney, Firefly, DALL-E) dentro del flujo de producción de marca
   - Propón las guías de prompt engineering para generar imágenes on-brand de forma consistente
   - Diseña el proceso de revisión y aprobación de activos generados por IA antes de su publicación

4. **Estrategia visual por canal:**
   - Define el estilo visual diferenciado para cada canal: LinkedIn (profesional), Instagram (aspiracional), TikTok (auténtico), newsletter (informativo)
   - Especifica cómo adaptar la misma pieza de contenido a los distintos canales sin empezar de cero
   - Propón la guía de uso de vídeo corto: proporciones, subtítulos, elementos visuales de retención
   - Diseña los criterios de selección de fotografía e ilustración para cada tipo de contenido

5. **Medición del rendimiento visual:**
   - Define qué métricas de diseño debes monitorizar: tasa de guardado, engagement por formato, CTR de anuncios por creatividad
   - Especifica cómo testear creatividades distintas para optimizar el rendimiento visual
   - Propón un proceso mensual de revisión de activos visuales basado en datos de rendimiento
   - Diseña cómo iterar el sistema de diseño con los aprendizajes de cada mes

6. **Formación del equipo en producción de contenido visual:**
   - Define el plan de formación para que el equipo de marketing use el sistema de diseño de forma autónoma
   - Diseña una guía de uso de las plantillas con ejemplos de dos y errores comunes a evitar
   'Propón cómo gestionar las excepciones: cuándo el equipo puede romper las reglas del sistema
   - Especifica el proceso de mantenimiento y actualización del sistema de diseño con el tiempo

**Resultado esperado:**
Un sistema de producción de contenido visual completo con guía de marca para redes sociales, estructura de biblioteca de plantillas, flujo de trabajo con IA y plan de formación del equipo. Implementable en 4 semanas con cualquier herramienta de diseño existente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar un sistema de producción de contenido visual escalable con IA y plantillas de marca',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Contenido de ventas con IA: propuestas, casos de éxito y materiales de cierre',
                'description'      => 'Genera con IA materiales de ventas de alto impacto: propuestas comerciales personalizadas, casos de éxito convincentes, one-pagers y presentaciones de producto que acortan el ciclo de venta.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en sales enablement y marketing de contenido para ventas. Tu misión es usar inteligencia artificial para crear y optimizar los materiales de ventas que el equipo comercial necesita para cerrar más deals en menos tiempo: propuestas personalizadas, casos de éxito por vertical, one-pagers y presentaciones de producto que hablan el idioma del comprador.

**Contexto de sales enablement:**
El 80% de los materiales de ventas que crea el equipo de marketing no los usa el equipo comercial porque no son relevantes para el momento o el perfil del prospecto. El sales enablement moderno con IA permite crear materiales altamente personalizados en minutos, medir qué funciona y actualizar los contenidos en tiempo real basándose en los datos de ventas.

**tarea de sales enablement con IA:**
Actúa como mi director de sales enablement. Necesito que diseñes el sistema completo de contenido de ventas:

1. **Mapa de contenido de ventas por etapa del funnel:**
   - Define qué tipo de contenido necesita el vendedor en cada etapa: prospección, calificación, presentación, propuesta, cierre, onboarding
   - Especifica el contenido que necesita el comprador en cada etapa de su proceso de decisión
   - Propón cómo crear una biblioteca de contenido de ventas organizada por etapa, vertical e ICP
   - Diseña el sistema de acceso rápido para que el vendedor encuentre el material correcto en segundos

2. **Propuesta comercial personalizada con IA:**
   - Define la estructura de una propuesta comercial ganadora: executive summary, diagnóstico del problema, solución propuesta, casos similares, inversión, ROI estimado, siguientes pasos
   - Diseña el template de propuesta modular que el vendedor personaliza en menos de 30 minutos
   - Especifica cómo usar IA para personalizar cada sección de la propuesta con datos del prospecto
   - Genera el texto del executive summary (200 palabras) de una propuesta de software B2B

3. **Casos de éxito por vertical e ICP:**
   - Define la estructura del caso de éxito perfecto: contexto del cliente, reto, solución implementada, resultados cuantificados, cita del cliente
   - Diseña el template de caso de éxito en dos formatos: PDF de 2 páginas y one-pager de página web
   - Especifica cómo recopilar la información del cliente de forma sistemática para producir casos de éxito
   - Propón cómo usar los casos de éxito en distintos momentos del proceso de ventas

4. **One-pagers y battle cards:**
   - Define cuándo usar un one-pager y qué información debe contener para cada tipo de producto o servicio
   - Diseña el template de battle card de competencia: nuestra propuesta de valor, diferenciadores, debilidades de la competencia, respuestas a objeciones comparativas
   - Especifica cómo mantener las battle cards actualizadas en un mercado que cambia rápido
   - Propón cómo usar IA para generar battle cards a partir de datos públicos de la competencia

5. **Presentaciones de producto con IA:**
   - Define la estructura de la presentación de producto ideal para distintos perfiles de audiencia (C-level, técnico, usuario final)
   - Especifica cómo personalizar la presentación en tiempo real según las respuestas del prospecto en la reunión
   - Diseña el deck de demo de producto con los elementos visuales de mayor impacto
   - Propón cómo usar IA para generar variantes de presentación para distintos sectores o casos de uso

6. **Medición del rendimiento de los materiales de ventas:**
   - Define las métricas de sales enablement más importantes: tasa de uso de materiales, impacto en tasa de cierre, tiempo en ciclo de venta
   - Especifica cómo rastrear qué materiales usa el equipo de ventas y cuáles correlacionan con el cierre
   - Propón cómo hacer un ciclo de mejora continua de los materiales basado en datos de ventas reales
   - Diseña la reunión mensual de revisión de materiales entre marketing y ventas

**Resultado esperado:**
Un sistema de sales enablement completo con biblioteca de contenidos estructurada, templates de propuesta y caso de éxito, battle cards por competidor y dashboard de rendimiento de materiales. Listo para implementar en 30 días con el equipo de ventas y marketing.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear materiales de ventas de alto impacto con IA que acortan el ciclo de venta',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Contenido de producto con IA: release notes, documentación y onboarding',
                'description'      => 'Usa IA para crear y mantener la documentación de producto, escribir release notes que los usuarios realmente lean, diseñar flujos de onboarding en el producto y comunicar el valor de cada feature.',
                'prompt_content'   => <<<'EOT'
Eres un product manager con habilidades de escritura técnica y comunicación de producto. Tu misión es usar inteligencia artificial para crear y mantener todos los contenidos relacionados con el producto: documentación de usuario, release notes, tooltips de onboarding, FAQs y comunicaciones de nuevas funcionalidades que generen adopción y reduzcan el churn.

**Contexto del contenido de producto:**
El contenido de producto es el más infrautilizado de todos los tipos de contenido de marketing. La documentación obsoleta, las release notes aburridas que nadie lee y los flujos de onboarding que no explican el valor real de las funcionalidades son responsables de miles de churns evitables cada mes. Un PM que domina la escritura de contenido de producto con IA puede transformar la experiencia del usuario y los indicadores de adopción de features.

**instrucción de product content con IA:**
Actúa como mi product content strategist. Necesito que diseñes el sistema de contenido de producto completo:

1. **Estrategia de documentación de producto:**
   - Define la estructura de la base de conocimiento de producto: categorías, jerarquía, navegación
   - Especifica el estilo de escritura técnica para documentación de usuario: tono, longitud, formato, ejemplos
   - Propón el proceso de creación y mantenimiento de documentación con IA: cómo generar el borrador y cómo el PM lo revisa
   - Diseña el sistema de alertas para detectar documentación desactualizada después de cada release

2. **Release notes que la gente quiere leer:**
   - Define la estructura de unas release notes perfectas: resumen ejecutivo, features principales, mejoras, fixes
   - Genera un ejemplo de release notes para una actualización de plataforma SaaS (300 palabras) con el tono correcto: útil, conciso, orientado al beneficio del usuario
   - Especifica cómo adaptar las release notes para distintos canales: email, in-app, blog, LinkedIn
   - Propón cómo medir si las release notes generan adopción de las nuevas funcionalidades

3. **Flujos de onboarding in-product con IA:**
   - Define los elementos de contenido del onboarding: tooltips, walkthroughs, empty states, success states
   - Especifica cómo escribir tooltips efectivos de máximo 15 palabras que expliquen el valor, no la función
   - Diseña el copy del flujo de onboarding para llevar al usuario al momento "aha" en menos de 5 pasos
   - Propón cómo testear distintas versiones del copy de onboarding con A/B testing

4. **Comunicación de lanzamiento de features:**
   - Define el plan de comunicación para el lanzamiento de una feature importante: anuncio, tutorial, caso de uso, testimonial
   - Genera el email de anuncio de lanzamiento de feature (250 palabras) orientado a la adopción
   - Especifica cómo distribuir el anuncio de lanzamiento en distintos canales simultáneamente
   - Propón cómo medir el éxito del lanzamiento de la feature en términos de adopción y engagement

5. **FAQs y contenido de soporte con IA:**
   - Define el proceso de generación de FAQs a partir de tickets de soporte reales
   - Especifica cómo usar IA para detectar las preguntas más frecuentes en el soporte y convertirlas en documentación
   - Diseña el formato y la estructura de las FAQs que más ayudan a los usuarios a resolver sus problemas solos
   - Propón cómo mantener las FAQs actualizadas de forma continua con mínimo esfuerzo del equipo

6. **Métricas de contenido de producto:**
   - Define los KPIs de contenido de producto más relevantes: tasa de adopción de features, reducción de tickets de soporte, NPS post-onboarding
   - Especifica cómo medir el impacto de la documentación en la retención de usuarios
   - Propón un proceso de revisión trimestral del contenido de producto basado en datos de uso y soporte
   - Diseña el dashboard de contenido de producto para el equipo de PM y marketing

**Resultado esperado:**
Un sistema completo de contenido de producto con templates de documentación, guía de estilo de escritura técnica, proceso de creación de release notes y plan de comunicación de features. Implementable por cualquier PM sin formación específica en escritura técnica.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear documentación, release notes y contenido de onboarding de producto con IA que impulse la adopción',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Employer branding con IA: contenido para atraer y retener talento',
                'description'      => 'Usa IA para crear contenido de employer branding auténtico y escalable que posicione a tu empresa como empleador de referencia, atraiga talento de calidad y reduzca el costo de adquisición de candidatos.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en employer branding y marketing de RRHH. Tu misión es usar inteligencia artificial para crear una estrategia de contenido de employer branding que posicione a la empresa como un lugar excepcional para trabajar, atraiga talento de calidad de forma orgánica y reduzca la dependencia de los portales de empleo de pago.

**Contexto del employer branding:**
El 75% de los candidatos investiga la reputación de un empleador antes de solicitar un puesto. Las empresas con employer branding fuerte reciben el doble de solicitudes cualificadas, pagan hasta un 50% menos en reclutamiento y tienen tasas de retención significativamente más altas. El contenido es el vehículo principal del employer branding, y la IA permite producirlo de forma sistemática sin sobrecargar al equipo de RRHH.

**tarea de employer branding con IA:**
Actúa como mi employer branding strategist. Necesito que diseñes la estrategia completa de contenido de employer branding:

1. **Propuesta de valor al empleado (EVP) basada en datos:**
   - Define el proceso para identificar y articular la EVP real de la empresa (no aspiracional, sino auténtica)
   - Diseña la encuesta de clima laboral que revela los diferenciadores reales como empleador
   - Especifica cómo estructurar la EVP en una narrativa coherente para distintas audiencias de talento
   - Propón cómo validar la EVP con empleados actuales antes de comunicarla externamente

2. **Estrategia de contenido de employer branding:**
   - Define los 5 pilares de contenido del employer branding: cultura, crecimiento profesional, impacto, equipo, beneficios
   - Diseña el calendario editorial de employer branding para LinkedIn y Glassdoor durante 3 meses
   - Especifica los formatos de contenido más efectivos para employer branding: behind the scenes, day in the life, employee stories, team moments
   - Propón cómo involucrar a los empleados como creadores de contenido de employer branding (employee advocacy)

3. **Contenido de employer branding por audiencia de talento:**
   - Define las audiencias de talento que necesitas atraer: perfiles tech, comerciales, liderazgo, recién graduados
   - Diseña mensajes específicos de employer branding para cada audiencia
   - Especifica qué canales priorizar para llegar a cada perfil de talento
   - Propón cómo adaptar el tono y el formato del contenido según la audiencia objetivo

4. **Historias de empleados (employee stories) con IA:**
   - Define la estructura de una historia de empleado efectiva: contexto, reto, crecimiento, satisfacción, consejo
   - Diseña el proceso de entrevista con el empleado para extraer la historia de forma natural
   - Genera un ejemplo de historia de empleado de 300 palabras que sea auténtica y persuasiva
   - Especifica cómo distribuir las historias de empleados en distintos canales y formatos

5. **Gestión de la reputación en Glassdoor y portales de empleo:**
   - Define el proceso de monitorización de reseñas de empleados en Glassdoor e Indeed
   - Diseña las respuestas a distintos tipos de reseñas: positivas, críticas constructivas, negativas
   - Especifica cómo usar las reseñas negativas como información para mejorar la propuesta de valor real
   - Propón cómo solicitar reseñas a empleados satisfechos de forma ética y sin presión

6. **Métricas de employer branding:**
   - Define los KPIs del employer branding: tasa de solicitudes orgánicas, calidad del candidato, costo por contratación, tiempo de cobertura de vacante, tasa de retención en el primer año
   - Especifica cómo atribuir el impacto del contenido de employer branding en las métricas de reclutamiento
   - Propón un dashboard de employer branding para presentar al comité de dirección trimestralmente
   - Diseña el proceso de mejora continua de la EVP basado en los datos de reclutamiento y retención

**Resultado esperado:**
Una estrategia de employer branding completa con EVP definida, calendario editorial de 3 meses, templates de historias de empleados, guía de gestión de reseñas y dashboard de métricas. Lista para implementar con un equipo de RRHH de 2-3 personas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear una estrategia de contenido de employer branding con IA que atraiga talento de calidad de forma orgánica',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Contenido financiero con IA: informes, newsletters y comunicación a inversores',
                'description'      => 'Usa IA para crear contenido financiero profesional: newsletters de mercado, comentarios de cartera, informes trimestrales y comunicaciones a inversores que transmitan confianza y claridad.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en comunicación financiera y content marketing para el sector de inversiones y finanzas corporativas. Tu misión es usar inteligencia artificial para crear contenido financiero de alto valor que informe, eduque y genere confianza en inversores, clientes y stakeholders, cumpliendo siempre con los requisitos regulatorios de comunicación financiera.

**Contexto de la comunicación financiera:**
El contenido financiero tiene características únicas: debe ser preciso, compliant con la regulación, comprensible para audiencias no expertas y suficientemente detallado para las audiencias técnicas. Las entidades financieras, gestoras de activos y empresas cotizadas que dominan la comunicación de contenidos financieros construyen una ventaja competitiva en captación de clientes, retención de inversores y reputación de marca.

**instrucción de contenido financiero:**
Actúa como mi director de comunicación financiera. Necesito que diseñes el sistema completo de producción de contenido financiero:

1. **Newsletter de mercado y análisis de inversión:**
   - Define la estructura de una newsletter financiera semanal: resumen de mercado, análisis de sector, idea de inversión, datos macro relevantes
   - Especifica el tono y el nivel de tecnicismo adecuado para distintas audiencias: retail, profesional, institucional
   - Genera el texto de una introducción de newsletter financiera (150 palabras) que enganche al lector
   - Propón el proceso de producción de la newsletter con IA minimizando el tiempo del analista

2. **Comentarios de cartera y reporting a clientes:**
   - Define la estructura del comentario de cartera mensual: rentabilidad, contribuidores, detractores, perspectivas
   - Especifica cómo usar IA para generar el primer borrador del comentario a partir de los datos de la cartera
   - Diseña el template de carta trimestral a inversores con el nivel de detalle adecuado
   - Propón cómo adaptar el mismo informe de cartera a distintos formatos: PDF, email, vídeo, presentación

3. **Informe de resultados y comunicación corporativa:**
   - Define la estructura del comunicado de resultados trimestrales de una empresa: highlights, P&L, balance, guidance, cita del CEO
   - Especifica las secciones que el equipo de IR necesita crear y cuáles puede agilizar con IA
   - Diseña el script de la presentación de resultados para analistas e inversores
   - Propón cómo preparar el Q&A de analistas con IA: anticipar preguntas difíciles y preparar respuestas

4. **Contenido educativo de inversión para captación:**
   - Define una estrategia de contenido educativo que convierta lectores en clientes de servicios financieros
   - Diseña los 10 temas de mayor interés para inversores particulares en la actualidad
   - Genera el esquema de un artículo de blog sobre diversificación de carteras (500 palabras) con 5 puntos clave
   - Especifica cómo incluir disclaimers regulatorios sin romper la fluidez del contenido

5. **Comunicación de riesgo y cumplimiento normativo:**
   - Define las obligaciones de comunicación transparente de riesgos para distintos productos financieros
   - Especifica el lenguaje que el regulador exige y cómo integrarlo de forma natural en el contenido
   - Propón cómo usar IA para verificar el compliance del contenido financiero antes de publicarlo
   - Diseña el proceso de aprobación de contenido financiero por el equipo de compliance

6. **Métricas de contenido financiero:**
   - Define los KPIs de contenido financiero: tasa de apertura de newsletter, engagement de informes, leads generados por contenido educativo, retención de clientes vinculados a contenido
   - Especifica cómo medir el impacto del contenido en la captación de nuevos inversores
   - Propón un proceso de mejora continua del contenido basado en feedback de clientes e inversores
   - Diseña el informe mensual de rendimiento de contenido para el equipo de marketing y el equipo de inversión

**Resultado esperado:**
Un sistema de producción de contenido financiero completo con templates de newsletter, carta de cartera e informe de resultados, proceso de aprobación compliance y dashboard de métricas. Agiliza la producción del equipo de comunicación financiera sin sacrificar la calidad ni el cumplimiento regulatorio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Crear contenido financiero profesional con IA para inversores, clientes y stakeholders',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marketing de contenidos para despachos legales con IA',
                'description'      => 'Usa IA para crear contenido jurídico de autoridad que posicione a tu despacho como referente, atraiga clientes ideales de forma orgánica y cumpla con las normas deontológicas de la publicidad legal.',
                'prompt_content'   => <<<'EOT'
Eres un abogado con experiencia en marketing jurídico y desarrollo de negocio para despachos de abogados. Tu misión es usar inteligencia artificial para crear una estrategia de marketing de contenidos que posicione al despacho como autoridad en su área de práctica, atraiga clientes ideales de forma orgánica y cumpla estrictamente con las normas deontológicas de publicidad legal del Consejo General de la Abogacía.

**Contexto del marketing legal:**
El marketing de contenidos para abogados tiene restricciones únicas: no se pueden hacer promesas de resultados, no se pueden usar testimonios de clientes sin limitaciones, y el contenido debe ser informativo, no sustituto del asesoramiento legal. Dentro de estos límites, el contenido jurídico de calidad es uno de los activos de captación más poderosos para un despacho: un artículo bien posicionado puede generar leads durante años.

**instrucción de marketing legal con IA:**
Actúa como mi consultor de marketing y desarrollo de negocio para despachos. Necesito que diseñes la estrategia de contenidos legal completa:

1. **Posicionamiento del despacho como autoridad:**
   - Define el área de práctica o nicho en el que el despacho puede ser referente y cómo identificarlo
   - Diseña la propuesta de valor del despacho comunicable en contenidos (sin promesas de resultados)
   - Especifica los temas en los que el despacho debe crear contenido para posicionarse como experto
   - Propón cómo diferenciar el contenido del despacho del de la competencia en la misma área de práctica

2. **Blog jurídico de autoridad:**
   - Define la estructura de un artículo jurídico que posiciona y convierte lectores en clientes potenciales
   - Especifica cómo combinar precisión jurídica con legibilidad para el público no especializado
   - Genera el esquema de un artículo de blog sobre divorcio de mutuo acuerdo (5 secciones con subtítulos) orientado a clientes potenciales
   - Propón la cadencia de publicación y los temas prioritarios para los primeros 6 meses

3. **Newsletter jurídica para clientes y referentes:**
   - Define la audiencia de la newsletter: clientes actuales, potenciales, referentes, empresas
   - Diseña la estructura de la newsletter mensual del despacho: actualidad legislativa, análisis, consejo práctico
   - Especifica el tono y el nivel de tecnicismo adecuado para una audiencia mixta de abogados y empresarios
   - Propón cómo usar la newsletter para generar oportunidades de negocio sin parecer comercial

4. **Contenido en LinkedIn para abogados:**
   - Define la estrategia de contenido personal de los socios del despacho en LinkedIn
   - Diseña un calendario editorial de 4 semanas con temas jurídicos de actualidad y formatos específicos
   - Especifica cómo los abogados pueden compartir criterio jurídico propio sin infringir la deontología
   - Propón cómo usar LinkedIn para hacer networking digital con referentes de negocio

5. **Gestión del cumplimiento deontológico en el contenido:**
   - Define las normas deontológicas de publicidad legal vigentes en España que afectan al contenido
   - Especifica los disclaimers que debe incluir cualquier contenido jurídico publicado por el despacho
   - Propón cómo usar IA para verificar que el contenido no infringe las normas antes de publicarlo
   - Diseña el proceso de revisión interna del contenido legal antes de su publicación

6. **Métricas de marketing de contenidos para despachos:**
   - Define los KPIs relevantes para un despacho: visitas al blog, leads orgánicos, consultas generadas por contenido, valor del cliente captado por contenido
   - Especifica cómo atribuir las consultas al contenido que las generó
   - Propón un informe trimestral de rendimiento del marketing de contenidos para los socios del despacho
   - Diseña el ciclo de mejora continua del contenido basado en los temas que más consultas generan

**Resultado esperado:**
Una estrategia de marketing de contenidos para despachos de abogados completa con plan editorial de 6 meses, guía deontológica de contenido legal, templates de blog y newsletter y sistema de métricas. Aplicable a cualquier área de práctica y tamaño de despacho.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Crear contenido jurídico de autoridad con IA que posicione el despacho y atraiga clientes ideales',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Base de conocimiento y contenido de autoservicio con IA para CS',
                'description'      => 'Usa IA para construir y mantener una base de conocimiento de soporte al cliente que resuelva el 60% de las consultas sin intervención humana, reduciendo el volumen de tickets y mejorando el NPS.',
                'prompt_content'   => <<<'EOT'
Eres un director de customer success especializado en la construcción de sistemas de autoservicio y soporte escalable. Tu misión es usar inteligencia artificial para diseñar, crear y mantener una base de conocimiento de soporte que los clientes encuentren útil, los agentes usen de forma efectiva y el equipo pueda mantener actualizada sin un esfuerzo desproporcionado.

**Contexto del autoservicio en CS:**
El 67% de los clientes prefiere resolver sus problemas de forma autónoma antes de contactar con soporte. Una base de conocimiento bien diseñada y mantenida es el activo más rentable de un equipo de customer success: reduce el volumen de tickets, mejora el tiempo de primera respuesta, aumenta la satisfacción del cliente y libera al equipo humano para los casos de mayor valor. La IA transforma la creación y el mantenimiento de este contenido, haciendo posible una base de conocimiento siempre actualizada y optimizada.

**instrucción de CS content con IA:**
Actúa como mi director de conocimiento y contenido de soporte. Necesito que diseñes el sistema completo de contenido de autoservicio:

1. **Arquitectura de la base de conocimiento:**
   - Define la estructura de categorías y subcategorías adaptada al tipo de producto y cliente
   - Especifica la jerarquía de contenidos: artículos de getting started, how-to, troubleshooting, referencia técnica, FAQs
   - Propón el sistema de etiquetas y metadatos que permite a los clientes encontrar lo que buscan
   - Diseña la navegación y la búsqueda de la base de conocimiento para maximizar la tasa de autoservicio

2. **Producción de contenido de soporte con IA:**
   - Define el proceso de creación de artículos a partir de tickets de soporte frecuentes
   - Especifica el prompt para usar IA en la transformación de la respuesta de un agente en un artículo de base de conocimiento estructurado
   - Diseña el template estándar de artículo de soporte: título, introducción, pasos, nota, recursos relacionados
   - Propón el proceso de revisión y aprobación de artículos antes de publicarlos en la base de conocimiento

3. **Optimización del contenido existente con IA:**
   - Define el proceso de auditoría de la base de conocimiento: identificar artículos desactualizados, con baja utilidad o con alto índice de escalada
   - Especifica cómo usar los datos de búsqueda sin resultado para detectar brechas de contenido
   - Propón cómo priorizar la actualización y creación de artículos según el impacto en el volumen de tickets
   - Diseña el proceso de mantenimiento continuo de la base de conocimiento con mínimo esfuerzo del equipo

4. **IA conversacional integrada en la base de conocimiento:**
   - Define cómo integrar un chatbot que use la base de conocimiento como fuente de verdad para responder
   - Especifica el proceso de entrenamiento del chatbot con el contenido de soporte
   - Diseña el flujo de escalada del chatbot al agente humano cuando no encuentra la respuesta
   - Propón cómo el chatbot aprende de las conversaciones para mejorar la base de conocimiento

5. **Contenido de soporte proactivo y self-onboarding:**
   - Define los momentos del ciclo de vida del cliente donde el contenido proactivo reduce más tickets
   - Diseña las guías de getting started para nuevos clientes según su perfil y caso de uso
   - Especifica cómo integrar el contenido de soporte en el producto (tooltips, empty states, in-app guidance)
   - Propón una estrategia de email de soporte proactivo que anticipe los problemas más frecuentes

6. **Métricas de la base de conocimiento:**
   - Define los KPIs del contenido de soporte: tasa de autoservicio, deflexión de tickets, tiempo de resolución, CSAT post-artículo
   - Especifica cómo medir qué artículos resuelven consultas y cuáles frustran al cliente
   - Propón un proceso de mejora continua basado en datos de uso y feedback de los clientes
   - Diseña el informe mensual de rendimiento de la base de conocimiento para el equipo de CS y producto

**Resultado esperado:**
Un sistema completo de contenido de autoservicio con arquitectura de la base de conocimiento, proceso de producción con IA, plan de mantenimiento y dashboard de métricas. Diseñado para equipos de CS de 2 a 20 personas que quieren escalar sin escalar el equipo proporcionalmente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir y mantener una base de conocimiento con IA que resuelva el 60% de las consultas sin agente humano',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Content marketing freelance con IA: sistema de producción y captación de clientes',
                'description'      => 'Crea un sistema de producción de contenido para tu negocio freelance con IA, combina la creación de contenido propio que te posiciona con la producción de contenido para clientes que te paga, y escala sin trabajar más horas.',
                'prompt_content'   => <<<'EOT'
Eres un content marketer freelance especializado en ayudar a otros freelancers y profesionales independientes a usar el marketing de contenidos como motor de crecimiento de su negocio. Tu misión es usar inteligencia artificial para construir un sistema de producción de contenido que simultáneamente posiciona al freelancer como experto, atrae clientes de calidad y produce entregables de alta calidad para los clientes actuales, todo ello en la mitad del tiempo.

**Contexto del content marketer freelance:**
El content marketer freelance vive la paradoja del cobrador: cuando está trabajando para clientes no tiene tiempo para crear su propio contenido, y cuando tiene tiempo libre no tiene clientes. La IA rompe esta paradoja al multiplicar la capacidad de producción de contenido sin multiplicar las horas de trabajo. El resultado es un freelancer que puede gestionar más clientes, entregar más valor y al mismo tiempo construir su propia audiencia que genera ingresos futuros.

**instrucción completa para el content freelancer:**
Actúa como mi mentor de negocio para content marketers freelance. Necesito que diseñes el sistema completo:

1. **Posicionamiento del content marketer freelance:**
   - Define los nichos de content marketing con mayor demanda y mejores tarifas actualmente
   - Especifica cómo elegir el nicho según mis habilidades actuales y el mercado
   - Redacta mi propuesta de valor como content marketer especializado en una frase y un párrafo
   - Diseña mi perfil de LinkedIn optimizado para atraer clientes de content marketing de calidad

2. **Sistema de producción de contenido para clientes con IA:**
   - Define el flujo de trabajo de producción de contenido con IA para clientes: brief, investigación, esquema, borrador IA, edición humana, entrega
   - Especifica los prompts que uso para cada fase del proceso de producción
   - Diseña el sistema de control de calidad que garantiza que el contenido con IA suena humano y on-brand
   - Propón cómo documentar la voz de marca de cada cliente para alimentar los prompts correctamente

3. **Paquetes de servicios escalables:**
   - Define 3 paquetes de servicios de content marketing (básico, profesional, premium) con entregables claros
   - Especifica cómo estructurar los paquetes para que la IA haga el trabajo pesado y tú el estratégico
   - Propón cómo presentar los paquetes a los clientes y cuándo ofrecer el upsell
   - Diseña el onboarding del cliente que recopila toda la información necesaria para producir con IA

4. **Tu propio contenido como canal de captación:**
   - Define la estrategia de contenido propio que te posiciona y atrae inbound leads
   - Diseña un sistema de producción de tu propio contenido que requiera menos de 2 horas semanales con IA
   - Especifica los canales prioritarios y la cadencia de publicación para tu audiencia objetivo
   - Propón cómo convertir seguidores de LinkedIn en leads y leads en clientes con contenido

5. **Fijación de precios y rentabilidad:**
   - Define el método de cálculo de tarifa para content marketing con IA: cuánto cuesta producir, cuánto vale para el cliente, cuánto cobrar
   - Especifica cómo justificar tu tarifa premium frente a clientes que piensan que la IA "lo hace todo"
   - Propón cómo estructurar la tarificación por resultados (ingresos por leads generados, tráfico orgánico) en lugar de por horas
   - Diseña el contrato tipo para servicios de content marketing freelance con IA

6. **Escalabilidad del negocio de content:**
   - Define cuándo y cómo subcontratar partes del proceso a otros freelancers para escalar sin colapsar
   - Propón cómo crear productos digitales basados en tu expertise de content marketing (templates, cursos, guías)
   - Diseña la estrategia de retainer mensual que garantiza ingresos recurrentes estables
   - Especifica cómo pasar de un modelo de tiempo-por-dinero a un modelo basado en valor y resultados

**Resultado esperado:**
Un sistema completo de negocio para content marketers freelance con IA: posicionamiento definido, paquetes de servicios, flujo de producción, estrategia de captación propia y plan de escalabilidad. Listo para implementar en 30 días y alcanzar 5.000-8.000€ mensuales en los primeros 6 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir un negocio de content marketing freelance escalable con IA como palanca de productividad',
                'vote_score'       => 51,
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
