<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills388Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Lead magnets irresistibles para marketing de contenidos',
                'description'      => 'Aprende a diseñar lead magnets de alto valor que convierten visitantes en suscriptores cualificados. Crea recursos descargables, plantillas y guías que resuelven problemas reales de tu audiencia objetivo.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en estrategia de contenidos y generación de leads con más de 10 años de experiencia creando activos de marketing que convierten visitantes en clientes. Tu especialidad es diseñar lead magnets que ofrecen valor inmediato y posicionan a la marca como referente en su industria.

**CONTEXTO DE LA TAREA**

Necesito que me ayudes a crear un lead magnet completo y de alto impacto para mi negocio. Un lead magnet es un recurso gratuito que ofrezco a cambio de los datos de contacto de un visitante (generalmente email). El éxito de un lead magnet depende de que resuelva un problema específico y urgente de mi audiencia, que sea fácil de consumir y que ofrezca una victoria rápida (quick win).

**INFORMACIÓN QUE DEBES SOLICITAR AL INICIO**

Antes de empezar, pregúntame:
1. ¿Cuál es mi nicho o industria?
2. ¿Quién es mi cliente ideal (perfil demográfico y psicográfico)?
3. ¿Cuáles son los 3 principales problemas o frustraciones de mi audiencia?
4. ¿Qué tipo de formato prefiero: checklist, plantilla, guía, mini-curso, calculadora, webinar, swipe file?
5. ¿Qué producto o servicio quiero vender después de capturar el lead?

**LO QUE DEBES CREAR**

Con la información que te proporcione, desarrolla lo siguiente:

1. **Análisis de audiencia y problema**: Describe el problema específico que resuelve el lead magnet, por qué es urgente y qué emociones genera en la audiencia (frustración, miedo, deseo).

2. **Concepto del lead magnet**: Propón 3 ideas de lead magnets con título, formato, longitud estimada y promesa principal. Ayúdame a elegir el más efectivo.

3. **Título magnético**: Escribe 5 versiones de título usando fórmulas probadas como "Cómo [resultado] sin [obstáculo]", "[Número] pasos para [resultado] en [tiempo]", o "El sistema [adjetivo] para [resultado]".

4. **Estructura de contenido**: Para el lead magnet elegido, crea un índice detallado con todos los apartados, el objetivo de cada sección y el tiempo estimado de consumo.

5. **Página de captura (landing page)**: Redacta el copy completo de la landing page incluyendo:
   - Titular principal (headline)
   - Subtítulo que amplía la promesa
   - 5-7 bullets con los beneficios específicos
   - Prueba social (testimonios sugeridos)
   - CTA (llamada a la acción) con texto del botón
   - Texto de pie de página que elimina objeciones

6. **Secuencia de entrega**: Diseña el email de bienvenida que se envía automáticamente tras la suscripción, incluyendo el asunto, el preview text y el cuerpo del email.

7. **Métricas de éxito**: Define qué KPIs debo medir (tasa de conversión de la landing, tasa de apertura del email, tasa de descarga) y cuáles son los benchmarks del sector.

**FORMATO DE ENTREGA**

Organiza la respuesta con encabezados claros para cada sección. Usa viñetas para listas y negritas para los elementos más importantes. El tono debe ser práctico y orientado a resultados, no teórico.

**ADVERTENCIAS IMPORTANTES**

- El lead magnet debe ser percibido como de mayor valor que muchos productos de pago
- Evita temas genéricos; la especificidad es lo que convierte
- El lead magnet debe conectar lógicamente con tu oferta de pago para facilitar la venta posterior
- Incluye siempre una victoria rápida que el usuario pueda implementar en menos de 30 minutos
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear lead magnets de alto valor para captar suscriptores cualificados',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Documentación técnica como lead magnet para desarrolladores',
                'description'      => 'Convierte tu conocimiento técnico en activos de captación de leads: whitepapers de arquitectura, SDKs de demostración, guías de integración y plantillas de código que atraen a desarrolladores cualificados.',
                'prompt_content'   => <<<'EOT'
Actúa como un developer advocate y experto en marketing de producto técnico con experiencia en crear contenido que atrae a desarrolladores y equipos de ingeniería. Entiendes tanto el código como las estrategias de contenido que generan pipeline de ventas B2B técnico.

**CONTEXTO**

Las empresas de software, las herramientas para desarrolladores y los productos API-first necesitan estrategias de generación de leads específicas para audiencias técnicas. Los desarrolladores son escépticos ante el marketing tradicional, pero responden muy bien al contenido técnico honesto y de alta calidad. El objetivo es crear assets técnicos que aporten valor real y, al mismo tiempo, demuestren las capacidades del producto.

**SOLICITA PRIMERO ESTA INFORMACIÓN**

Antes de crear el plan, pregúntame:
1. ¿Qué tipo de producto o servicio técnico ofrezco (API, librería, plataforma, servicio de consultoría)?
2. ¿Cuál es el lenguaje de programación o stack tecnológico de mi audiencia objetivo?
3. ¿Qué problema técnico principal resuelvo?
4. ¿Cuál es mi competidor principal y en qué me diferencio técnicamente?
5. ¿Tengo sandbox, ambiente de pruebas o tier gratuito disponible?

**PLAN DE CONTENIDO TÉCNICO**

Desarrolla una estrategia completa con los siguientes elementos:

1. **Auditoría de problemas técnicos**: Lista los 10 principales pain points técnicos de mi audiencia relacionados con el problema que resuelvo. Para cada uno indica la frecuencia con que aparece en foros como Stack Overflow, Reddit o GitHub Issues.

2. **Cartera de lead magnets técnicos**: Diseña 4 tipos de activos:
   - **Whitepaper de arquitectura**: Estructura de un documento de 8-12 páginas que explique un patrón de arquitectura relevante, con diagramas sugeridos y secciones clave
   - **Plantilla de código**: Propón un starter template o boilerplate que resuelva un caso de uso frecuente, con estructura de ficheros y comentarios guía
   - **Guía de benchmarking**: Cómo crear una comparativa técnica honesta que muestre ventajas del producto sin parecer publicidad
   - **Checklist de seguridad o rendimiento**: Lista de verificación técnica que los desarrolladores puedan usar en sus proyectos

3. **Landing page técnica**: Redacta el copy para una página de captura orientada a desarrolladores, con un tono directo, sin hipérboles de marketing, que incluya: titular técnico específico, lo que aprenderán, fragmento de código de ejemplo, y formulario mínimo (solo email o email + GitHub username).

4. **Canal de distribución**: Estrategia para distribuir el contenido en GitHub (README con CTA), Hacker News, Dev.to, newsletters técnicas y comunidades de Discord/Slack.

5. **Nurturing técnico**: Diseña una secuencia de 3 emails post-descarga con contenido técnico progresivo que lleve al desarrollador desde el interés hasta la prueba del producto.

6. **Métricas técnicas de éxito**: KPIs relevantes como número de repos con el starter template, forks en GitHub, calidad de leads (seniority, tamaño de empresa) y tasa de conversión de lead técnico a trial.

**FORMATO**

Usa bloques de código para ejemplos, tablas para comparativas y encabezados jerárquicos. El lenguaje debe ser técnico pero accesible para desarrolladores mid-senior.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Captar desarrolladores como leads mediante contenido técnico de alto valor',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Portfolio interactivo como herramienta de captación de clientes',
                'description'      => 'Transforma tu portfolio de diseño en un sistema de generación de leads: páginas de caso de estudio optimizadas, recursos descargables para clientes y calls to action estratégicos que convierten visitas en consultas.',
                'prompt_content'   => <<<'EOT'
Actúa como un estratega de marketing especializado en diseñadores freelance y estudios de diseño, con experiencia en convertir portfolios pasivos en máquinas activas de generación de oportunidades de negocio. Combinas conocimientos de UX, copywriting y estrategia de contenidos.

**CONTEXTO DEL PROYECTO**

Un portfolio de diseño tradicional muestra trabajo pero raramente convierte visitas en clientes. El objetivo de este ejercicio es rediseñar la estrategia de contenido del portfolio para que cada visita tenga una ruta clara hacia el contacto o la contratación. Esto implica añadir recursos descargables, optimizar los casos de estudio y crear puntos de captura de datos en momentos de máximo interés.

**INFORMACIÓN NECESARIA**

Dime antes de comenzar:
1. ¿Cuál es tu especialidad de diseño (UI/UX, branding, motion, ilustración, diseño web)?
2. ¿A qué tipo de clientes te diriges (startups, empresas medianas, agencias, consumidores finales)?
3. ¿Cuántos proyectos tienes en tu portfolio actual?
4. ¿Tienes web propia o usas plataformas como Behance o Dribbble?
5. ¿Cuál es tu principal fuente actual de clientes?

**ESTRATEGIA COMPLETA**

Desarrolla los siguientes componentes:

1. **Análisis del visitante**: Define los 3 perfiles de visitante más frecuentes de un portfolio de diseño (cliente potencial directo, reclutador, colega del sector) y qué busca cada uno. Diseña una estrategia de contenido diferenciada para cada perfil.

2. **Casos de estudio de alta conversión**: Para cada proyecto del portfolio, crea una estructura narrativa que incluya: el problema del cliente, el proceso de investigación, las decisiones de diseño clave, el resultado medible y una CTA al final. Escribe el guión completo para uno de los casos de estudio.

3. **Lead magnets para diseñadores**: Propón 4 recursos descargables específicos para diseñadores:
   - Plantilla de brief de diseño para clientes
   - Checklist de entrega de proyecto UX
   - Guía de precios para servicios de diseño
   - Kit de recursos para onboarding de nuevos clientes
   Incluye el título, la descripción y la promesa de valor de cada uno.

4. **Arquitectura de conversión del portfolio**: Diseña el flujo completo que sigue un visitante desde que llega al portfolio hasta que se convierte en lead: qué páginas ve, dónde aparecen los formularios de captura, qué recurso se ofrece y en qué momento.

5. **Copy para página de contacto**: Escribe el texto completo de una página de contacto que elimine la fricción y anime al cliente potencial a dar el primer paso, incluyendo garantías de respuesta, muestra de disponibilidad y un formulario de cualificación básica.

6. **Automatización básica**: Describe cómo automatizar la entrega del lead magnet, el email de seguimiento y el recordatorio si no hay respuesta, usando herramientas accesibles como Mailchimp, ConvertKit o Brevo.

**FORMATO DE ENTREGA**

Crea una guía accionable con pasos numerados, ejemplos de copy listo para usar y recomendaciones de herramientas. Prioriza las acciones de mayor impacto que se puedan implementar en una semana.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Convertir el portfolio en un sistema activo de captación de clientes',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Secuencias de nurturing para convertir leads en clientes',
                'description'      => 'Diseña secuencias de emails y contenidos que acompañen al prospecto desde el primer contacto hasta el cierre de venta. Aprende a crear mensajes que construyen confianza, eliminan objeciones y aceleran el ciclo de compra.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en ventas consultivas y automatización de marketing con amplia experiencia en diseñar secuencias de nurturing que acortan ciclos de venta y mejoran las tasas de conversión. Conoces en profundidad la psicología del comprador B2B y B2C.

**CONTEXTO**

El nurturing de leads es el proceso de acompañar a un prospecto a lo largo de su proceso de decisión mediante contenido relevante y oportuno. La mayoría de los leads no están listos para comprar en el momento en que se captan; el nurturing les educa, genera confianza y los prepara para la conversación de venta. Una secuencia bien diseñada puede triplicar las tasas de conversión respecto a un seguimiento manual y desordenado.

**DATOS QUE NECESITO DE TI**

Responde estas preguntas antes de que diseñe la secuencia:
1. ¿Qué producto o servicio vendes y cuál es el precio aproximado?
2. ¿Cuánto dura normalmente tu ciclo de venta (días, semanas, meses)?
3. ¿Cuáles son las 3-5 objeciones más frecuentes que escuchas de los prospectos?
4. ¿Cómo captaste al lead (descarga de lead magnet, webinar, formulario de contacto, referido)?
5. ¿Usas algún CRM o herramienta de email marketing?

**DISEÑO DE LA SECUENCIA**

Crea una secuencia de nurturing completa:

1. **Mapa del journey del comprador**: Divide el proceso de decisión en tres etapas (Conciencia, Consideración, Decisión) y define qué información necesita el prospecto en cada una, qué emociones experimenta y qué objeciones tiene.

2. **Secuencia de 7 emails**: Para cada email escribe el asunto completo, el preview text, la estructura del cuerpo (introducción, desarrollo, CTA) y el objetivo de conversión. Los emails deben seguir este arco narrativo:
   - Email 1 (Día 0): Entrega del recurso + bienvenida + establecer expectativas
   - Email 2 (Día 2): Contenido educativo que aborda el problema principal
   - Email 3 (Día 4): Caso de éxito o historia de cliente similar
   - Email 4 (Día 7): Objeción #1 respondida con evidencia
   - Email 5 (Día 10): Demostración de valor o comparativa
   - Email 6 (Día 14): Oferta o invitación a conversación con urgencia
   - Email 7 (Día 17): Último intento con cambio de ángulo

3. **Segmentación por comportamiento**: Explica cómo ramificar la secuencia según el comportamiento del prospecto (abre emails pero no hace clic, descarga el recurso pero no responde, hace clic en la página de ventas pero no compra).

4. **Contenido complementario**: Para cada email sugiere un contenido adicional (artículo, video, caso de estudio, calculadora) que refuerce el mensaje.

5. **Indicadores de compra listos**: Define los "buying signals" que indican que un lead está listo para una llamada de ventas directa y cómo configurar alertas para actuar en ese momento.

**TONO Y ESTILO**

La secuencia debe sonar humana y personalizada, nunca automatizada o corporativa. Usa el nombre del prospecto, referencias al contenido que descargó y un tono conversacional. Cada email debe tener un solo objetivo claro.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar secuencias de email que convierten leads en clientes',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Webinars de producto que generan demos cualificadas',
                'description'      => 'Diseña webinars estratégicos que educan a tu audiencia, demuestran el valor del producto y generan un flujo constante de demos cualificadas. Aprende a estructurar el contenido, la presentación y el seguimiento post-evento.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en product marketing y growth con experiencia en diseñar webinars que generan pipeline de ventas cualificado para productos SaaS y software B2B. Conoces las mejores prácticas de presentación, engagement y conversión post-evento.

**CONTEXTO DE LA TAREA**

Los webinars son uno de los canales de generación de leads de mayor calidad en el entorno B2B, especialmente para productos que requieren educación. Un webinar bien diseñado no solo capta emails, sino que precalifica a los asistentes, demuestra valor real del producto y crea un momento de máxima disposición para solicitar una demo o iniciar una prueba.

**INFORMACIÓN PREVIA**

Necesito que me respondas:
1. ¿Cuál es el producto y su categoría (CRM, herramienta de análisis, plataforma de gestión, etc.)?
2. ¿Quién es el comprador principal (CEO, Director de Marketing, jefe de TI)?
3. ¿Cuántos asistentes típicos tiene un webinar en tu sector?
4. ¿Tienes casos de éxito o clientes dispuestos a participar como ponentes invitados?
5. ¿Cuál es el CTA principal del webinar (demo, prueba gratuita, consultoría)?

**PLAN COMPLETO DEL WEBINAR**

1. **Estrategia de tema y posicionamiento**: Propón 5 temas de webinar que equilibren el interés educativo de la audiencia con la demostración natural del producto. Para cada tema, describe el ángulo, el perfil de asistente ideal y cómo conecta orgánicamente con una demo del producto.

2. **Estructura de 60 minutos**: Diseña la agenda detallada:
   - 0-5 min: Bienvenida, presentación de ponentes y agenda
   - 5-20 min: Problema del sector y contexto educativo
   - 20-35 min: Demostración de solución (con o sin el producto)
   - 35-45 min: Caso de éxito de cliente real
   - 45-55 min: Q&A moderada
   - 55-60 min: CTA claro y próximos pasos

3. **Página de registro**: Escribe el copy completo de la landing page de registro, incluyendo título, descripción, lista de lo que aprenderán, información de ponentes, y formulario de registro con preguntas de cualificación.

4. **Secuencia de emails pre-evento**: 3 emails desde el registro hasta el día del webinar (confirmación, recordatorio 3 días antes, recordatorio el mismo día) con objetivos de reducir no-shows y generar anticipación.

5. **Estrategia de engagement durante el webinar**: Diseña 5 momentos de interacción (encuestas, preguntas, ejercicios en vivo) que mantengan la atención y precalifiquen a los asistentes.

6. **Seguimiento post-evento**: Secuencia de 4 emails para los 7 días siguientes, diferenciando entre asistentes que pidieron demo, asistentes que no pidieron demo y personas que se registraron pero no asistieron.

7. **Reutilización del contenido**: Cómo convertir el webinar en otros activos de contenido (artículo, clips de redes sociales, guía descargable, episodio de podcast).

**MÉTRICAS CLAVE**

Define los KPIs del webinar: tasa de registro a asistencia, tasa de asistencia a demo solicitada, coste por lead cualificado y velocidad del ciclo de venta de leads provenientes de webinar versus otros canales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Crear webinars que generan demos y pipeline de ventas cualificado',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Contenido de employer branding para atraer talento cualificado',
                'description'      => 'Desarrolla una estrategia de contenido de employer branding que posicione tu empresa como empleador de referencia, atraiga candidatos cualificados de forma orgánica y reduzca el coste de adquisición de talento.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en employer branding y marketing de RRHH con experiencia en crear estrategias de contenido que convierten empresas en marcas empleadoras atractivas. Entiendes tanto el marketing digital como la psicología de los candidatos activos e inactivos.

**CONTEXTO**

El employer branding es la reputación de una empresa como lugar de trabajo. En un mercado de talento competitivo, las empresas que invierten en contenido de employer branding reciben más solicitudes espontáneas, pagan menos en reclutamiento y retienen mejor a sus empleados. El contenido es el vehículo principal para comunicar la cultura, los valores y la propuesta de valor para el empleado (EVP).

**INFORMACIÓN DE PARTIDA**

Antes de crear la estrategia, necesito saber:
1. ¿Cuántos empleados tiene tu empresa y en qué sector opera?
2. ¿Qué perfiles o roles son más difíciles de contratar actualmente?
3. ¿Cuáles son los 3 principales diferenciales de tu empresa como empleador?
4. ¿Qué canales de comunicación usa ya la empresa (LinkedIn, Instagram, blog, YouTube)?
5. ¿Tienes empleados dispuestos a ser embajadores de marca o participar en contenido?

**ESTRATEGIA DE CONTENIDO**

Diseña los siguientes elementos:

1. **Employee Value Proposition (EVP)**: Ayúdame a articular mi propuesta de valor como empleador en una frase memorable y en 5 bullets que describan qué ofrece la empresa más allá del salario. Incluye ejemplos de cómo comunicar cada elemento con historias reales.

2. **Calendario de contenido mensual**: Diseña un plan de 4 semanas con los tipos de contenido para cada canal:
   - LinkedIn: posts de cultura, logros del equipo, behind-the-scenes
   - Instagram: contenido visual del día a día, eventos, personas del equipo
   - Blog o web de empleo: artículos sobre el equipo, tecnología, metodología de trabajo
   - Glassdoor/LinkedIn: cómo gestionar y responder las reseñas

3. **Formatos de contenido de alto impacto**: Para cada uno de los siguientes formatos, proporciona una guía de creación y un ejemplo concreto:
   - Employee spotlight (perfil de empleado)
   - Day in the life (día en la empresa)
   - Video de cultura corporativa (guión y estructura)
   - Infografía de beneficios
   - Artículo de blog sobre crecimiento interno

4. **Landing page de empleo**: Escribe el copy completo de una página de "Trabaja con nosotros" que sea atractiva para candidatos cualificados, incluyendo propuesta de valor, secciones de cultura y testimonios de empleados.

5. **Formulario de talento pasivo**: Diseña un formulario y la propuesta de valor para captar datos de candidatos que no aplican a una posición concreta pero quieren estar en el radar de la empresa.

6. **Métricas de employer branding**: Define cómo medir el éxito de la estrategia: tráfico a la página de empleo, candidaturas espontáneas, índice de aceptación de ofertas, puntuación en Glassdoor y coste por contratación.

**NOTA IMPORTANTE**

El contenido de employer branding más efectivo es auténtico y específico. Evita el lenguaje corporativo genérico ("somos una familia", "ambiente dinámico") y busca detalles concretos que diferencien genuinamente a la empresa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Atraer talento cualificado mediante contenido de employer branding',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Calculadoras financieras como lead magnets de alto valor',
                'description'      => 'Crea calculadoras y herramientas financieras interactivas que atraigan clientes potenciales cualificados, demuestren tu expertise y generen conversaciones de consultoría de forma natural.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en marketing de servicios financieros y generación de leads B2B con experiencia en crear herramientas interactivas que capturan leads cualificados para asesores financieros, contables, gestores de patrimonio y consultores de finanzas corporativas.

**CONTEXTO**

Las calculadoras y herramientas financieras son uno de los lead magnets de mayor conversión en el sector financiero porque ofrecen valor inmediato, personalizado y medible. Un usuario que calcula su ahorro potencial, su rentabilidad de inversión o su carga fiscal tiene una intención de compra mucho más alta que uno que solo descargó un PDF. Además, los datos que introduce revelan su situación financiera y sus necesidades, lo que facilita la personalización del seguimiento.

**DATOS NECESARIOS**

Cuéntame:
1. ¿Qué tipo de servicios financieros ofreces (asesoría de inversión, planificación fiscal, finanzas corporativas, contabilidad para empresas)?
2. ¿A quién va dirigido (particulares, autónomos, pymes, grandes empresas)?
3. ¿Cuáles son los 3 principales problemas o preguntas financieras de tus clientes potenciales?
4. ¿Tienes capacidad para crear una herramienta web o prefieres un Excel/PDF interactivo?
5. ¿Qué tipo de consulta quieres generar (primera reunión, auditoría gratuita, propuesta de servicio)?

**PLAN DE HERRAMIENTAS LEAD MAGNET**

1. **Portafolio de calculadoras**: Diseña 4 conceptos de calculadoras financieras adaptadas a mi servicio, con:
   - Nombre y descripción de la herramienta
   - Variables de entrada que solicitará al usuario
   - Resultado que entrega y cómo lo interpreta
   - Por qué ese resultado genera una necesidad de consultoría
   - Nivel de complejidad técnica para crearla

2. **Especificación de la calculadora principal**: Para la herramienta más relevante, crea una especificación detallada:
   - Lógica de cálculo completa con fórmulas
   - Diseño del formulario de entrada (campos, validaciones, UX)
   - Formato de presentación de resultados (número, gráfico, semáforo de riesgo)
   - Mensaje interpretativo adaptado al resultado (si el resultado es X, mostrar mensaje Y)

3. **Página de captura**: Escribe el copy de la landing page que presenta la herramienta, enfatizando el valor del resultado que obtendrá y minimizando la percepción de "me están pidiendo mis datos".

4. **Integración con el servicio**: Diseña el flujo desde que el usuario obtiene su resultado hasta que agenda una consulta: el email automático con el resumen de resultados, la propuesta de siguiente paso y el calendario de reserva.

5. **Cualificación automática**: Explica cómo usar los datos introducidos en la calculadora para segmentar a los leads y personalizar el seguimiento según su perfil (volumen de inversión, tipo de empresa, urgencia fiscal).

6. **Variaciones por canal**: Adapta la presentación de la herramienta para LinkedIn (post con captura de resultados ejemplo), email marketing (teaser del valor que ofrece) y publicidad digital (anuncio de performance).

**CONSIDERACIONES LEGALES**

Recuerda incluir los disclaimers apropiados: los resultados son orientativos y no constituyen asesoría financiera regulada. Sugiere el lenguaje legal mínimo necesario para proteger al profesional.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Captar leads financieros cualificados con herramientas de cálculo interactivas',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Guías legales gratuitas como estrategia de captación de clientes',
                'description'      => 'Diseña guías legales accesibles y recursos educativos que posicionen tu despacho como referente, generen confianza en clientes potenciales y creen un flujo constante de consultas cualificadas.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en marketing jurídico y business development para despachos de abogados, con experiencia en crear estrategias de contenido legal que atraen clientes sin violar las normas éticas de la profesión. Entiendes tanto el Derecho como las técnicas modernas de inbound marketing.

**CONTEXTO**

El marketing de servicios legales tiene restricciones éticas específicas, pero permite y fomenta la educación jurídica de la ciudadanía. Las guías legales gratuitas son una forma ética y efectiva de generar leads: educan al potencial cliente sobre sus derechos o problemas legales, demuestran la expertise del abogado y crean una relación de confianza antes del primer contacto de pago.

**DATOS DE PARTIDA**

Necesito saber:
1. ¿En qué rama del Derecho te especializas (laboral, mercantil, fiscal, familia, inmobiliario, tecnología)?
2. ¿Tu cliente típico es un particular, un autónomo o una empresa?
3. ¿Cuáles son las 5 preguntas legales más frecuentes que te hacen antes de contratar?
4. ¿En qué jurisdicción operas (España, México, Argentina u otro país)?
5. ¿Tienes blog, newsletter o presencia activa en redes sociales actualmente?

**ESTRATEGIA DE CONTENIDO LEGAL**

Desarrolla los siguientes componentes:

1. **Biblioteca de guías legales**: Propón 6 títulos de guías jurídicas para mi especialidad, cada una con:
   - Título claro y orientado al problema del cliente (no al concepto jurídico)
   - Resumen del contenido en 3 bullets
   - Nivel de urgencia del problema para el lector
   - Tipo de cliente que la buscaría
   - CTA natural al final de la guía

2. **Estructura de la guía principal**: Para la guía más demandada, crea el índice completo y el desarrollo del primer capítulo, con un lenguaje accesible para no juristas que incluya ejemplos prácticos y casos hipotéticos ilustrativos.

3. **FAQ legal como lead magnet**: Diseña una sección de preguntas frecuentes de al menos 15 preguntas y respuestas que cubran las dudas más comunes de mi área, con el formato óptimo para posicionamiento SEO local.

4. **Landing page del despacho**: Redacta el copy de la página principal o de una práctica específica, con enfoque en los problemas del cliente (no en los títulos del abogado), incluyendo social proof, explicación del proceso de trabajo y CTA para primera consulta.

5. **Estrategia de primera consulta**: Diseña el formato y el copy para una primera consulta gratuita o de bajo coste que sirva como lead magnet de alta cualificación: duración, qué incluye, qué no incluye y cómo presentarla como oportunidad de valor.

6. **Email de seguimiento**: Escribe la secuencia de 3 emails post-descarga de guía legal que educan al prospecto, demuestran expertise y ofrecen naturalmente el siguiente paso (consulta).

7. **Consideraciones éticas**: Lista las principales restricciones del Colegio de Abogados relevantes para el marketing jurídico en mi jurisdicción y cómo cumplirlas sin limitar la efectividad del contenido.

**TONO**

El contenido legal debe ser empático (el cliente tiene un problema que le genera estrés), claro (sin jerga innecesaria) y firme en transmitir competencia y experiencia sin sonar arrogante.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Generar consultas cualificadas mediante guías legales educativas gratuitas',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Casos de éxito de clientes como contenido de conversión',
                'description'      => 'Transforma los resultados de tus clientes en casos de estudio persuasivos que generen nuevas oportunidades de negocio, reduzcan el ciclo de venta y construyan la credibilidad necesaria para escalar el revenue.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en customer marketing y growth de Customer Success, con especialización en crear casos de éxito que no solo cuentan historias bonitas, sino que generan pipeline de ventas real y aceleran el cierre de nuevos contratos. Entiendes la psicología de la prueba social y cómo convertir resultados de clientes en argumentos de venta irrefutables.

**CONTEXTO**

Los casos de éxito son el contenido de mayor conversión en el ciclo de venta B2B. Un prospecto que lee cómo una empresa similar a la suya consiguió resultados concretos con tu solución tiene muchas más probabilidades de avanzar en el proceso de compra que uno que solo leyó una descripción del producto. El problema es que la mayoría de los casos de éxito son demasiado genéricos, no muestran números reales y no conectan con los problemas específicos del prospecto.

**INFORMACIÓN DE PARTIDA**

Cuéntame:
1. ¿Qué producto o servicio de Customer Success ofreces (plataforma CS, servicio de onboarding, consultoría de retención)?
2. ¿Cuál es el perfil de empresa que mejor resultado obtiene con tu solución?
3. ¿Tienes 2-3 clientes dispuestos a participar en un caso de éxito (con cifras reales o estimadas)?
4. ¿Cuáles son las métricas clave de tu producto (NPS, churn rate, tiempo de onboarding, ARR expansion)?
5. ¿Dónde publicarás los casos de éxito (web, sales deck, LinkedIn, email)?

**PLAN COMPLETO DE CASOS DE ÉXITO**

1. **Framework de entrevista al cliente**: Crea un guión completo de 20 preguntas para la entrevista con el cliente, organizadas en cinco bloques:
   - Situación antes de la solución (el "antes")
   - Por qué eligieron tu solución (criterios de decisión)
   - El proceso de implementación (la experiencia)
   - Los resultados obtenidos con cifras (el "después")
   - Qué recomendarían a empresas similares (la prueba social)

2. **Estructura narrativa del caso**: Para un cliente específico que me proporciones, redacta un caso de éxito completo de 600-800 palabras con la estructura: Titular con resultado cuantificado, Resumen ejecutivo (3 bullets), El desafío, La solución implementada, Los resultados con datos, La cita del cliente, Próximos pasos del cliente.

3. **Versiones por formato**: Adapta el mismo caso de éxito para 4 formatos:
   - Landing page de caso de estudio (formato largo)
   - Diapositiva para sales deck (formato ultra comprimido: titular + 3 cifras + logo)
   - Post de LinkedIn (formato conversacional, 150 palabras)
   - Email para prospecto similar (personalizado con referencia a su sector)

4. **Biblioteca de citas y testimonios**: Diseña un sistema para extraer y catalogar 10-15 citas de clientes por categoría (sobre resultados, sobre el proceso, sobre el equipo, sobre el ROI) listas para usar en diferentes contextos de venta.

5. **Distribución y activación en ventas**: Crea un playbook para que el equipo de ventas use los casos de éxito de forma efectiva: cuándo compartirlos en el ciclo de venta, cómo personalizar el email de entrega, cómo usarlos en las llamadas de discovery.

6. **Métricas de impacto**: Define cómo medir si los casos de éxito están funcionando: vistas, descargas, tasa de conversión de prospectos que leyeron el caso versus los que no, influencia en el ciclo de venta.

**CONSIDERACIONES ÉTICAS**

Obtén siempre permiso explícito del cliente para publicar su nombre y cifras. Ofrece la opción de caso anónimo por sector si el cliente no quiere identificación pública. Nunca exageres ni fabrique resultados; la credibilidad del caso depende de su autenticidad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear casos de éxito que aceleran el ciclo de venta y generan nuevos leads',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Sistema de contenido para atraer clientes como freelancer',
                'description'      => 'Construye un sistema de contenido consistente y sostenible que posicione tu expertise, atraiga clientes ideales de forma orgánica y elimine la dependencia de plataformas de trabajo por proyecto.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocio para freelancers con experiencia en ayudar a profesionales independientes a construir sistemas de contenido que generan clientes de forma consistente sin depender de Upwork, Fiverr o referencias espontáneas. Combinas conocimiento de personal branding, content marketing y psicología del cliente de servicios profesionales.

**CONTEXTO**

El mayor reto del freelancer no es la calidad de su trabajo sino la irregularidad de los ingresos causada por la dependencia de plataformas o referencias. El contenido publicado de forma sistemática crea un activo que trabaja 24/7, posiciona al freelancer como experto, atrae clientes que ya confían en su conocimiento y permite cobrar tarifas premium porque el cliente llega pre-vendido.

**DATOS DE PARTIDA**

Antes de diseñar el sistema, necesito saber:
1. ¿Cuál es tu especialidad freelance y tu nicho (sector o tipo de cliente que sirves)?
2. ¿Cuántos clientes nuevos necesitas al mes para alcanzar tus objetivos de ingresos?
3. ¿Cuántas horas a la semana puedes dedicar a crear contenido?
4. ¿En qué plataformas tienes ya presencia o audiencia, aunque sea pequeña?
5. ¿Cuál es el principal resultado tangible que consigues para tus clientes?

**DISEÑO DEL SISTEMA DE CONTENIDO**

Crea un sistema completo y sostenible:

1. **Posicionamiento y nicho de contenido**: Ayúdame a definir mi "content niche" o ángulo único de contenido que me diferencie de otros freelancers de mi especialidad. Propón 3 ángulos basados en mi experiencia, mis clientes ideales y los temas donde tengo autoridad genuina.

2. **Ecosistema de contenido**: Diseña un sistema de producción eficiente basado en el concepto de "contenido pilar" y "contenido derivado":
   - 1 pieza de contenido largo al mes (artículo detallado, guía, caso de estudio)
   - 4 posts de red social por semana derivados del contenido pilar
   - 1 email a lista de suscriptores por semana
   - Explica cómo reutilizar cada pieza para maximizar el trabajo invertido

3. **Plan de contenido para 90 días**: Crea el calendario completo de las primeras 12 semanas con:
   - Tema de la pieza pilar de cada mes
   - Ideas de posts derivados para cada semana
   - Tipo de contenido (educativo, opinión, behind-the-scenes, caso de cliente, mito vs. realidad)

4. **Lead magnet para freelancers**: Diseña un recurso descargable específico para tu nicho que capte emails de clientes potenciales, con el título, el contenido resumido y la landing page.

5. **Proceso de consulta inbound**: Define el flujo desde que un cliente llega por el contenido hasta que firma el contrato: formulario de contacto, llamada de discovery, propuesta y cierre.

6. **Sistema de publicación sostenible**: Diseña una rutina semanal de creación de contenido que no consuma más de 5 horas, con templates reutilizables, herramientas recomendadas y un proceso de batch content para máxima eficiencia.

7. **Métricas de crecimiento**: Define qué medir cada mes: seguidores, alcance, tráfico web, suscriptores email, consultas recibidas y porcentaje que provienen del contenido. Establece metas realistas para los primeros 6 meses.

**MOTIVACIÓN Y CONSISTENCIA**

La principal razón por la que los sistemas de contenido fallan es la falta de consistencia. Incluye estrategias para mantener la disciplina, superar el bloqueo creativo y ajustar el sistema cuando los resultados tarden en llegar (lo cual es normal en los primeros 3-6 meses).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir un sistema de contenido que atrae clientes ideales de forma orgánica',
                'vote_score'       => 44,
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
