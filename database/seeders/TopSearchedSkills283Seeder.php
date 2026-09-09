<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills283Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing APIs: integraciones que automatizan y escalan las campañas',
                'description'      => 'Aprende a conectar plataformas de marketing mediante APIs para automatizar flujos, centralizar datos y escalar campañas sin esfuerzo manual.',
                'prompt_content'   => <<<'PROMPT'
Eres un consultor experto en marketing digital y ecosistemas tecnológicos. Tu misión es ayudarme a aprovechar las APIs de las principales plataformas de marketing para automatizar mis campañas y obtener datos accionables en tiempo real.

**Contexto que necesito que conozcas:**
Gestiono campañas en múltiples plataformas: Meta Ads, Google Ads, HubSpot, Mailchimp, y analytics propios. Actualmente el trabajo es manual: exporto CSVs, los consolido en hojas de cálculo y tardo horas en obtener una visión unificada del rendimiento. Quiero cambiar eso usando las APIs disponibles.

**Lo que quiero que me ayudes a diseñar:**

1. **Mapa de integraciones prioritarias**: Analiza las APIs de Meta Marketing, Google Ads API, HubSpot API y Mailchimp API. ¿Cuáles son los endpoints más valiosos para un equipo de marketing de tamaño mediano? Dame una lista priorizada según impacto / esfuerzo de implementación.

2. **Automatización de reporting**: Diseña un flujo donde los datos de rendimiento de cada plataforma (impresiones, clics, conversiones, coste) se consolidan automáticamente en un dashboard. ¿Qué campos debo extraer de cada API? ¿Con qué frecuencia debo hacer llamadas para no superar los rate limits?

3. **Sincronización de audiencias**: Explícame cómo usar las APIs de Custom Audiences de Meta y Customer Match de Google para mantener sincronizadas mis listas de contactos desde el CRM sin procesos manuales de exportación e importación.

4. **Webhooks para triggers en tiempo real**: ¿Cómo configuro webhooks en HubSpot para disparar acciones automáticas cuando un lead llega a cierta puntuación? Dame un ejemplo de flujo: lead scoring → activación de campaña → notificación al equipo de ventas.

5. **Herramientas no-code para equipos sin desarrollador**: Si no tengo un desarrollador en el equipo, ¿qué herramientas (Zapier, Make, n8n) me permiten conectar estas APIs? ¿Cuáles son las limitaciones que debo conocer antes de elegir una?

6. **Gestión de tokens y autenticación**: Explícame las diferencias entre OAuth 2.0, API Keys y tokens de larga duración en el contexto de estas plataformas. ¿Cómo renuevo tokens de forma segura sin interrumpir las automatizaciones?

7. **Control de costes y rate limits**: ¿Cómo evito sorpresas en la facturación de APIs de pago? Dame una estrategia de caché, batching y control de llamadas para mantener los costes predecibles.

8. **Caso práctico**: Construye conmigo un escenario real: tengo una campaña de lanzamiento en 4 semanas. ¿Qué integraciones de API configuraría primero para tener visibilidad completa desde el día uno?

**Formato de respuesta esperado:**
- Sección por sección siguiendo los puntos anteriores
- Ejemplos de llamadas API (formato JSON o pseudocódigo) donde sea relevante
- Tabla comparativa cuando haya varias opciones
- Lista de errores comunes a evitar
- Recursos de documentación oficial recomendados

Empieza por el mapa de integraciones prioritarias y avanza según mi feedback.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Automatizar campañas y centralizar datos de marketing mediante APIs de plataformas publicitarias y CRM.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'API design: construir APIs que otros developers quieren usar',
                'description'      => 'Domina los principios de diseño de APIs REST y GraphQL para crear interfaces que sean intuitivas, consistentes y un placer de integrar.',
                'prompt_content'   => <<<'PROMPT'
Eres un arquitecto de software especializado en diseño de APIs con experiencia en APIs públicas de alto tráfico. Quiero que me guíes para diseñar una API que otros desarrolladores adopten con entusiasmo, no por obligación.

**Mi situación:**
Estoy diseñando la API pública de nuestro producto SaaS. Tendrá endpoints para gestionar recursos, autenticación de usuarios, webhooks y un modelo de permisos granular. Quiero que sea la API que yo mismo querría consumir.

**Ayúdame con estos aspectos:**

1. **Principios de diseño REST que realmente importan**: Más allá de los verbos HTTP correctos, ¿cuáles son las decisiones de diseño que marcan la diferencia entre una API mediocre y una excelente? Habla de naming de recursos, versionado, idempotencia y diseño orientado a recursos vs orientado a acciones.

2. **Diseño de respuestas consistentes**: ¿Cómo estructuro los envelopes de respuesta para que sean predecibles? Dame una especificación concreta para respuestas de éxito, errores de validación, errores de negocio y errores del servidor. Incluye los campos que siempre deben estar presentes.

3. **Manejo de errores que no frustran**: Los errores mal diseñados son la fuente número uno de frustración para los integradores. Dame una taxonomía de errores con códigos HTTP correctos, error codes semánticos propios, mensajes accionables y enlaces a documentación.

4. **Paginación, filtrado y ordenación**: ¿Cursor-based o offset? ¿Cómo diseño filtros flexibles sin complejidad innecesaria? Dame las convenciones que debo adoptar y los casos edge que debo anticipar.

5. **Autenticación y autorización**: Compara API Keys, OAuth 2.0 con diferentes grant types, y JWT para mi caso de uso. ¿Cómo diseño scopes de permisos granulares sin volverlos imposibles de gestionar?

6. **Webhooks que funcionan en producción**: ¿Cómo diseño el sistema de webhooks para que sea fiable, verificable y fácil de debugear para el integrador? Cubre: payload signing, reintentos, orden de eventos y delivery guarantees.

7. **Versionado sin romper integraciones**: ¿URL versioning vs header versioning? ¿Cómo gestiono la deprecación de endpoints de forma que los integradores confíen en mí como proveedor?

8. **OpenAPI/Swagger como contrato**: ¿Cómo uso la especificación OpenAPI para que sirva de documentación viva, generación de SDKs y validación en CI/CD? Dame la estructura mínima que debo cubrir.

9. **Rate limiting con experiencia de usuario**: ¿Cómo implemento rate limiting que sea fair, predecible y que comunique claramente el estado al desarrollador? Diseña los headers de respuesta y la estrategia de backoff que recomendarías.

10. **Checklist de API review**: Dame una lista de verificación de 20 puntos que pueda usar antes de publicar cualquier endpoint nuevo.

Quiero respuestas concretas con ejemplos de JSON, no solo teoría. Empieza por los principios de diseño REST y los errores más comunes que cometen los equipos que diseñan su primera API pública.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar APIs REST públicas con buenas prácticas de versionado, errores, autenticación y experiencia de desarrollador.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de developer experience: documentación, portales y onboarding de APIs',
                'description'      => 'Crea la experiencia de integración que hace que los developers adopten tu API en horas, no en semanas. DX como ventaja competitiva.',
                'prompt_content'   => <<<'PROMPT'
Eres un especialista en developer experience (DX) con experiencia diseñando portales de documentación y procesos de onboarding para APIs de empresas como Stripe, Twilio y SendGrid. Necesito tu ayuda para crear una experiencia que haga que los developers elijan nuestra API sobre la competencia.

**Contexto del proyecto:**
Tenemos una API funcional para [descripción del producto]. Hasta ahora la documentación ha sido un afterthought: tenemos un Swagger generado automáticamente y poco más. Queremos invertir en DX como diferenciador competitivo real.

**Ayúdame a diseñar:**

1. **Arquitectura de información del portal de developers**: ¿Cómo organizo la documentación para que un developer que llega por primera vez encuentre valor en los primeros 5 minutos? Diseña la estructura de navegación, las secciones obligatorias y el orden lógico de presentación.

2. **Getting started que realmente funciona**: Diseña un flujo de onboarding donde el developer haga su primera llamada API exitosa en menos de 10 minutos. ¿Qué pasos incluyo? ¿Cómo manejo la autenticación en este primer flujo sin fricción?

3. **Documentación de referencia vs guías conceptuales**: ¿Cuál es la diferencia y cuándo uso cada una? Dame una plantilla para documentar un endpoint completo (parámetros, respuestas, ejemplos, errores, casos edge) y otra para escribir una guía de caso de uso.

4. **Ejemplos de código multi-lenguaje**: ¿Cómo organizo los ejemplos para que sean útiles en Python, JavaScript, PHP, Ruby y curl? ¿Cuáles son los errores más comunes en los ejemplos de código de documentación que alejan a los developers?

5. **Sandbox y entornos de prueba**: ¿Cómo diseño un entorno sandbox que permita explorar sin miedo? ¿Qué datos de prueba debo proveer? ¿Cómo gestiono las diferencias entre sandbox y producción para que no sean sorpresas?

6. **API playground interactivo**: ¿Qué herramientas (Redoc, Swagger UI, Stoplight, ReadMe) recomendarías para un portal que permita probar endpoints directamente desde el navegador? ¿Cuáles son los pros y contras de cada opción?

7. **Changelog y comunicación de cambios**: ¿Cómo diseño el changelog para que los integradores confíen en mí? ¿Qué información debe incluir cada entrada? ¿Cómo comunico deprecaciones con suficiente antelación?

8. **Soporte y comunidad para developers**: ¿Foro, Slack, GitHub Discussions, Discord? ¿Cuál es la estrategia correcta para una API de tamaño mediano? ¿Cómo gestiono las respuestas sin un equipo de developer relations dedicado?

9. **Métricas de DX**: ¿Cómo mido si mi documentación es buena? Dame los indicadores clave: tiempo hasta primera llamada exitosa, tasa de abandono del onboarding, tickets de soporte por tipo de error, NPS de developers.

10. **Inspiración concreta**: Analiza qué hace bien Stripe, Twilio y Cloudflare Workers en su DX. ¿Qué elementos puedo adaptar para una API de menor escala?

Empieza por la arquitectura de información y el flujo de onboarding. Quiero outputs concretos: estructuras, plantillas y ejemplos, no solo principios.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar portales de documentación y flujos de onboarding que aceleren la adopción de APIs por parte de developers externos.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Selling APIs y plataformas: vender a developers y CTOs',
                'description'      => 'Aprende a articular el valor de una API o plataforma técnica para audiencias técnicas y ejecutivas, acortando ciclos de venta complejos.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en ventas de tecnología con especialización en productos API-first y plataformas técnicas. Has cerrado contratos con startups, scale-ups y grandes empresas. Necesito tu ayuda para perfeccionar mi proceso de ventas en un contexto donde el comprador principal es técnico.

**Mi situación:**
Vendo una API/plataforma que [descripción del producto]. Mis interlocutores son developers, arquitectos de software y CTOs. El ciclo de ventas es largo porque hay una evaluación técnica antes de cualquier decisión comercial. Frecuentemente pierdo deals en la fase de evaluación técnica o porque el developer champion no consigue el buy-in ejecutivo.

**Ayúdame con estos aspectos:**

1. **El perfil del comprador técnico**: ¿Qué motiva a un developer, a un architect y a un CTO respectivamente? ¿Cuáles son sus objeciones típicas, sus miedos y su definición de éxito? Dame los pain points reales de cada perfil.

2. **El pitch para audiencia técnica**: Los developers detectan el bullshit de inmediato. ¿Cómo presento el valor técnico de mi API sin sonar como un vendedor? Dame un framework para la conversación inicial con un developer.

3. **El proof of concept como herramienta de ventas**: ¿Cómo diseño un POC que sea rápido de ejecutar, que demuestre valor real y que ponga al developer de mi lado? ¿Qué duración, alcance y criterios de éxito son adecuados?

4. **Convertir al developer en champion interno**: El developer lo ve, pero ¿cómo le ayudo a vender internamente a su CTO y CFO? Dame las herramientas: email de escalado, business case template, argumentos de ROI.

5. **La conversación con el CTO**: Cuando consigo acceso al CTO, ¿de qué hablo y de qué no? ¿Cuáles son los temas que les importan (seguridad, escalabilidad, dependencia de vendor, total cost of ownership) y cómo los abordo proactivamente?

6. **Objeciones técnicas frecuentes**: "Podríamos construirlo internamente", "¿Cómo de segura es su API?", "¿Qué pasa si se caen?", "¿Cuál es su roadmap?". Dame respuestas honestas y efectivas para cada una.

7. **Pricing y modelo de negocio para APIs**: ¿Cómo comunico el pricing basado en llamadas/uso sin que el cliente entre en pánico ante la incertidumbre del coste? ¿Cómo compito contra alternativas open source?

8. **La demo técnica perfecta**: ¿Cómo estructura una demo que muestre tanto el valor de negocio como la calidad técnica? ¿Qué errores cometen los vendedores de APIs en las demos?

9. **Casos de éxito que convencen a técnicos**: ¿Cómo presento un caso de éxito para una audiencia técnica? Los números de negocio no les bastan. ¿Qué datos técnicos, arquitecturales y de implementación deben incluir?

10. **Acortando el ciclo**: ¿Cuáles son los cuellos de botella más comunes en la venta de APIs y cómo los ataco? Dame un playbook de acciones para cada semana del ciclo de ventas.

Empieza por el perfil del comprador técnico y el pitch inicial. Quiero respuestas accionables, no teóricas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Estructurar conversaciones de venta, demos y business cases para cerrar contratos de APIs y plataformas técnicas con perfiles técnicos y ejecutivos.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Platform strategy: cuando tu producto se convierte en plataforma',
                'description'      => 'Toma las decisiones estratégicas correctas para convertir tu producto en una plataforma con ecosistema de terceros que multiplique el valor sin escalar el equipo.',
                'prompt_content'   => <<<'PROMPT'
Eres un estratega de producto con experiencia en la transición de productos SaaS a plataformas con ecosistemas de terceros. Has trabajado con empresas que han ejecutado este movimiento con éxito. Necesito ayuda para diseñar nuestra estrategia de plataforma.

**Contexto:**
Nuestro producto [descripción] tiene una base de clientes establecida y hemos identificado que hay casos de uso que nuestros usuarios quieren cubrir pero que nosotros no podemos construir solos. Estamos considerando abrir APIs, crear un marketplace de integraciones o ambas. No queremos hacerlo mal.

**Ayúdame a pensar en:**

1. **¿Estamos listos para ser una plataforma?**: ¿Cuáles son las señales de product-market fit que indican que es el momento correcto para abrirse como plataforma? ¿Qué debe estar en orden internamente antes de invitar a terceros?

2. **Elegir el modelo de plataforma correcto**: API abierta, marketplace de apps, webhooks y automatizaciones, SDK y extensiones... ¿Cómo decido qué modelo encaja con mi producto y mis usuarios? Dame un framework de decisión.

3. **La estrategia de partners iniciales**: ¿Cómo elijo a los primeros socios que construirán sobre mi plataforma? ¿Cuántos necesito para el lanzamiento? ¿Qué debo darles para que inviertan en integrarme?

4. **El modelo de negocio de la plataforma**: ¿Revenue share? ¿Freemium para developers? ¿Cobro por llamada API? ¿Listing fee en el marketplace? Analiza los modelos de negocio de plataformas conocidas y ayúdame a elegir el más adecuado para mi etapa.

5. **Governance del ecosistema**: ¿Cómo establezco las reglas del juego para los terceros? Términos de uso, política de revisión de apps, gestión de calidad, proceso de certificación. ¿Cómo balanceo control y apertura?

6. **La tensión con el core product**: ¿Cómo gestiono el riesgo de que un partner construya algo tan bueno que compita con mi producto core? ¿Cuándo tiene sentido adquirir una app del ecosistema?

7. **Métricas de ecosistema**: ¿Qué mido para saber si la plataforma está funcionando? Número de partners, apps instaladas, retention de integraciones, NPS de developers, GMV del marketplace... ¿Cuál es el norte correcto?

8. **Roadmap de plataforma vs roadmap de producto**: ¿Cómo priorizo las necesidades de los developers externos frente a las necesidades de los usuarios finales? ¿Cómo gestiono los conflictos?

9. **Casos de estudio**: Analiza cómo Shopify, Figma y Slack construyeron sus ecosistemas. ¿Qué decisiones tempranas fueron clave? ¿Qué errores cometieron que puedo evitar?

10. **El plan de 90 días**: Si decidiéramos lanzar nuestra primera versión de plataforma, ¿cuáles serían los hitos de los primeros 90 días? Dame un roadmap concreto.

Empieza por el framework de decisión sobre si estamos listos y qué modelo de plataforma elegir. Quiero razonamiento estratégico con ejemplos concretos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar la estrategia para abrir el producto como plataforma, eligiendo modelo, partners, governance y métricas de ecosistema.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'HR integrations: conectar los sistemas de RRHH con el resto de la empresa',
                'description'      => 'Diseña una arquitectura de integraciones que conecte el HCM, el ATS y la nómina con el resto de sistemas empresariales para eliminar el trabajo manual.',
                'prompt_content'   => <<<'PROMPT'
Eres un especialista en tecnología de RRHH y arquitectura de integraciones empresariales. Has diseñado la infraestructura tecnológica de departamentos de personas en empresas de 100 a 5000 empleados. Necesito tu ayuda para conectar nuestro stack de RRHH con el resto de la organización.

**Nuestra situación actual:**
Usamos [HCM/HRIS] para gestión de personal, [ATS] para reclutamiento, [herramienta de nómina] para pagos y [plataforma de formación]. El problema: cada cambio en un sistema hay que replicarlo manualmente en los demás. Los onboardings duran días por culpa de la desincronización. Finance siempre tiene datos de headcount diferentes a los nuestros.

**Ayúdame a diseñar:**

1. **El mapa de integraciones críticas**: ¿Cuáles son las integraciones que tienen mayor impacto en eficiencia y experiencia del empleado? Prioriza según ROI de tiempo y riesgo de errores. Dame una lista de las 10 integraciones más valiosas para un departamento de RRHH medio.

2. **El flujo maestro de employee lifecycle**: Diseña el flujo de datos desde la oferta aceptada en el ATS hasta el offboarding, pasando por onboarding, cambios de rol y nómina. ¿Qué sistema es el sistema de registro (source of truth) para cada dato?

3. **Onboarding automatizado**: ¿Cómo diseño un flujo donde la aceptación de oferta dispare automáticamente: creación de cuenta en IT, asignación de equipos, alta en nómina, acceso a formación obligatoria y bienvenida personalizada? Dame los pasos y los sistemas involucrados.

4. **Sincronización de org chart con IT**: ¿Cómo mantener el Active Directory / Google Workspace sincronizado con los cambios de estructura organizativa? ¿Cómo gestiono los cambios de rol, las bajas y las reestructuraciones sin errores de acceso?

5. **Integraciones con Finance**: ¿Cómo comparto datos de headcount, costes de personal y previsiones con el equipo financiero de forma que ambos trabajen con los mismos números? ¿Cuál es la arquitectura correcta?

6. **APIs de los principales HCM**: ¿Qué capacidades de integración ofrecen Workday, BambooHR, Personio y SAP SuccessFactors? ¿Cuáles tienen mejores APIs para integraciones personalizadas?

7. **Plataformas de integración para RRHH**: ¿Qué rol pueden jugar Rippling, Okta, o plataformas iPaaS como Workato o Boomi en simplificar estas integraciones? ¿Cuándo tiene sentido cada opción?

8. **Privacidad y seguridad de datos de empleados**: Las integraciones de RRHH mueven datos muy sensibles. ¿Qué controles de seguridad son imprescindibles? ¿Cómo cumplo con GDPR en flujos de integración automatizados?

9. **Gestión de errores y excepciones**: ¿Cómo detecto y gestiono los casos donde la sincronización falla? ¿Quién recibe la alerta? ¿Cómo evito que un error en una integración bloquee el onboarding de un empleado?

10. **El roadmap de integración**: Si empiezo desde cero, ¿en qué orden implemento las integraciones? Dame un plan de 6 meses con hitos concretos.

Empieza por el mapa de integraciones críticas y el flujo maestro del ciclo de vida del empleado. Quiero outputs concretos, no solo conceptos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar la arquitectura de integraciones entre sistemas de RRHH y el resto de la empresa para automatizar el ciclo de vida del empleado.',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Open banking y APIs financieras: las oportunidades del ecosistema financiero abierto',
                'description'      => 'Entiende el ecosistema de open banking, PSD2 y las APIs financieras para identificar oportunidades de negocio y decisiones de inversión en fintech.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en fintech, regulación financiera y open banking con experiencia en el ecosistema europeo y latinoamericano. Necesito entender a fondo las oportunidades que el open banking y las APIs financieras generan desde una perspectiva financiera y estratégica.

**Mi contexto:**
Trabajo en [empresa financiera / fintech / empresa que quiere integrar datos financieros]. Necesito entender el ecosistema de open banking para tomar decisiones sobre: qué servicios podemos ofrecer, qué datos podemos acceder, qué regulación aplica y dónde están las oportunidades reales.

**Ayúdame a entender:**

1. **El ecosistema de open banking**: ¿Qué es exactamente el open banking y qué lo diferencia del open finance? ¿Cuáles son los actores clave: bancos, TPPs, Account Information Services, Payment Initiation Services? Dame un mapa del ecosistema.

2. **PSD2 en Europa y marcos regulatorios globales**: ¿Qué obliga PSD2 a los bancos a publicar? ¿Qué permisos necesito como tercero para acceder a datos bancarios? ¿Cuál es la diferencia entre el marco europeo, el UK Open Banking, y los marcos emergentes en LATAM?

3. **Casos de uso financieros reales**: ¿Cuáles son los casos de uso más valiosos que se construyen sobre APIs financieras? Habla de verificación de ingresos, análisis de solvencia, pagos account-to-account, agregación de cuentas, gestión financiera personal y financiación alternativa.

4. **Los agregadores de APIs bancarias**: ¿Qué son Plaid, TrueLayer, Tink, Belvo, Finerio? ¿Cuándo tiene sentido usar un agregador vs conectarse directamente con los bancos? Analiza los costes, cobertura y capacidades de cada opción.

5. **Modelos de negocio en el ecosistema de open banking**: ¿Dónde está el dinero? ¿Qué empresas han construido negocios sostenibles sobre open banking y cuál es su modelo de monetización?

6. **Análisis de riesgo y scoring alternativo**: ¿Cómo usan las fintech los datos de transacciones bancarias para construir modelos de scoring más precisos que los tradicionales? ¿Cuáles son las implicaciones regulatorias del uso de estos datos?

7. **Pagos A2A como alternativa a tarjetas**: Los pagos account-to-account pueden eliminar las comisiones de las tarjetas. ¿Cuál es el estado real de la adopción? ¿Cuándo tiene sentido para un negocio migrarse a pagos A2A?

8. **Seguridad y cumplimiento en APIs financieras**: ¿Qué estándares de seguridad aplican (OAuth 2.0, FAPI, certificados eIDAS)? ¿Cómo gestiono el consentimiento del usuario de forma compliant?

9. **Open finance: la siguiente ola**: Más allá de los datos bancarios, ¿qué implica el open finance para datos de inversión, seguros y pensiones? ¿Qué mercados están más avanzados en esta evolución?

10. **Oportunidades de inversión en el ecosistema**: Desde una perspectiva de inversión o M&A, ¿qué categorías del ecosistema de APIs financieras tienen mayor potencial en los próximos 3 años? ¿Dónde están los gaps que todavía no se han cubierto bien?

Empieza con el mapa del ecosistema y los casos de uso más valiosos. Quiero análisis con criterio financiero y estratégico, no solo descripción técnica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Analizar el ecosistema de open banking para identificar oportunidades de negocio, modelos de monetización y decisiones estratégicas en fintech.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legal de las APIs: licencias, términos de uso y responsabilidad en el ecosistema API',
                'description'      => 'Navega los aspectos legales del ecosistema de APIs: desde los términos de uso que proteges a los que estás sujeto como consumidor o proveedor.',
                'prompt_content'   => <<<'PROMPT'
Eres un abogado especializado en tecnología, contratos digitales y propiedad intelectual con experiencia en el ecosistema de APIs y plataformas digitales. Necesito orientación jurídica sobre los aspectos legales de publicar y consumir APIs.

**Mi situación:**
Nuestra empresa tanto publica APIs (somos proveedor) como consume APIs de terceros (somos integrador). Necesito entender el marco legal que aplica en ambos roles para proteger nuestros intereses y cumplir con nuestras obligaciones.

**Como proveedor de APIs, ayúdame con:**

1. **Términos de servicio para la API**: ¿Qué cláusulas son imprescindibles en los términos de uso de una API pública? Cubre: definición del uso permitido, restricciones, rate limits, cambios y deprecaciones, suspensión de acceso, indemnizaciones y limitación de responsabilidad.

2. **Licencias para APIs y SDKs**: ¿Cuál es la diferencia entre licenciar una API y licenciar el código del SDK? ¿Qué licencias open source (MIT, Apache, GPL) son compatibles con un modelo de negocio comercial? ¿Cuándo necesito una licencia comercial específica?

3. **Propiedad intelectual de los datos**: ¿Los datos que los clientes envían a través de mi API me pertenecen? ¿Puedo usarlos para entrenar modelos de ML? ¿Cómo debo recoger el consentimiento y redactar la cláusula de datos en los términos?

4. **Responsabilidad por errores y caídas de la API**: ¿Cuál es mi responsabilidad legal si mi API falla y causa daños al negocio de un integrador? ¿Cómo limito la responsabilidad contractualmente sin que sea considerado abusivo?

5. **Cambios en la API y protección al integrador**: ¿Tengo obligación legal de mantener la compatibilidad hacia atrás? ¿Qué aviso previo es razonable antes de deprecar un endpoint? ¿Cómo gestiono legalmente la migración forzada de los integradores?

**Como consumidor de APIs, ayúdame con:**

6. **Due diligence de los términos que acepto**: ¿Qué debo revisar antes de integrar la API de un tercero? Dame un checklist de cláusulas de riesgo: propiedad de los datos, derecho a cambiar precios unilateralmente, terminación del servicio, portabilidad de datos.

7. **Riesgo de dependencia de vendor y lock-in**: ¿Qué cláusulas contractuales puedo negociar para protegerme del lock-in? ¿Qué derechos de exportación y portabilidad de datos debo exigir?

8. **Uso de la marca del proveedor de API**: ¿Cuándo puedo mencionar que "integro con X"? ¿Qué restricciones imponen los brand guidelines de las APIs sobre cómo menciono la integración en mi marketing?

**Aspectos transversales:**

9. **GDPR y protección de datos en flujos de integración**: Cuando datos personales fluyen a través de APIs entre empresas, ¿quién es el controller y quién el processor? ¿Qué contratos (DPA) son obligatorios? ¿Cómo gestiono las transferencias internacionales de datos?

10. **Scrapers vs APIs: el debate legal**: ¿Cuándo el scraping de una web es legal? ¿Cuándo viola los términos de uso o la normativa? ¿Cuáles son los precedentes judiciales relevantes en Europa y EEUU?

Empieza por los términos de servicio para la API como proveedor y el checklist de due diligence como consumidor. Quiero orientación práctica con ejemplos de cláusulas reales, no solo principios generales. Indica cuando algo requiere consulta con un abogado local.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Revisar y redactar términos de uso de APIs, gestionar responsabilidades legales y proteger los intereses como proveedor y consumidor de APIs.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Integration success: ayudar a los clientes a integrar y adoptar la API del producto',
                'description'      => 'Desarrolla un programa de integration success que acelere la adopción de tu API, reduzca el time-to-value y convierta la integración en un momento de expansión.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en customer success especializado en productos API-first y plataformas técnicas. Has diseñado programas de integration success en empresas SaaS que han reducido el time-to-value de semanas a días. Necesito construir un programa similar.

**Contexto:**
Nuestro producto tiene una API que los clientes necesitan integrar para obtener valor real. El problema actual: los clientes se integran lentamente (promedio 6 semanas), muchos se quedan en una integración superficial y el churn a 6 meses es alto porque nunca llegaron a la integración completa.

**Ayúdame a diseñar:**

1. **El framework de integration success**: ¿Cuál es la diferencia entre customer success genérico e integration success? ¿Qué modelo de madurez de integración debería definir para mis clientes (desde "conectado" hasta "integración completa y optimizada")?

2. **La etapa de pre-integración**: ¿Cómo preparo al cliente para la integración antes de que empiece? ¿Qué información técnica debo recoger en el proceso de venta? ¿Cómo hago el handoff de ventas a CS con el contexto técnico adecuado?

3. **El kickoff técnico de integración**: ¿Cómo estructura una reunión de kickoff que involucre tanto al business sponsor como al equipo técnico? ¿Cuál es la agenda, qué acuerdos debo sacar y cómo documento el plan de integración?

4. **Herramientas de monitorización de adopción**: ¿Cómo detecto que un cliente está atascado en la integración antes de que lo digan ellos? ¿Qué señales de producto (llamadas API, errores, endpoints no usados) indican que necesita ayuda?

5. **El playbook de desatasco**: Cuando un cliente lleva 2 semanas sin avanzar en la integración, ¿cuál es la secuencia de acciones correcta? Dame el playbook: qué canal uso, qué digo, qué recursos ofrezco y cuándo escalo.

6. **Recursos de auto-servicio que realmente usan los developers**: Los developers de los clientes no quieren calls. ¿Qué recursos de auto-servicio (guías paso a paso, scripts de diagnóstico, ambientes de prueba, ejemplos específicos por caso de uso) reducen el tiempo de integración sin necesitar al CSM?

7. **Integration health score**: ¿Cómo construyo una métrica compuesta que refleje la salud real de la integración? ¿Qué variables incluyo (completitud, volumen de uso, tasa de errores, diversidad de endpoints usados) y qué pesos les doy?

8. **De la integración básica a la integración avanzada**: Una vez el cliente está integrado, ¿cómo lo muevo a usar más capacidades de la API? ¿Cómo convierte esto en oportunidades de expansión de revenue?

9. **Gestión de problemas técnicos del cliente**: Cuando el cliente tiene un bug en su integración que culpa a tu API, ¿cómo lo gestionas? ¿Qué proceso de diagnóstico conjunto usas? ¿Cómo mantienes la relación mientras se resuelve un problema técnico delicado?

10. **Métricas del programa de integration success**: ¿Qué KPIs uso para medir si el programa está funcionando? Time to first integration, time to full integration, integration depth score, correlation con retention y NRR. Dame los benchmarks a los que debería aspirar.

Empieza por el modelo de madurez de integración y el framework de monitorización de adopción. Quiero outputs concretos: plantillas, playbooks y definiciones de métricas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar un programa de integration success que acelere la adopción de la API del producto y mejore la retención de clientes técnicos.',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Automatización del freelance con APIs: conectar herramientas sin programar',
                'description'      => 'Aprende a conectar tus herramientas de freelance mediante APIs y automatizaciones no-code para eliminar el trabajo administrativo y cobrar por tu tiempo real.',
                'prompt_content'   => <<<'PROMPT'
Eres un consultor de productividad y automatización especializado en freelancers y profesionales independientes. Has ayudado a cientos de freelancers a recuperar horas semanales automatizando sus procesos administrativos con herramientas no-code. Necesito que hagas lo mismo por mí.

**Mi situación actual:**
Soy freelance de [profesión]. Gestiono mis proyectos en Notion, facturo con [herramienta], uso Calendly para reuniones, cobro por Stripe o transferencia, y me comunico con clientes por email y WhatsApp. El problema: cada acción manual que hago entre estas herramientas me roba tiempo que podría cobrar al cliente.

**Ayúdame a identificar y construir:**

1. **Diagnóstico de tareas repetitivas**: ¿Cuáles son las 10 tareas administrativas más comunes de un freelance que se pueden automatizar? Ayúdame a identificar cuáles de las mías tienen mayor potencial de automatización según mi stack de herramientas.

2. **Las automatizaciones de mayor impacto para un freelance**: Basándote en lo que funcionan bien para freelancers sin conocimientos técnicos, dame las 5 automatizaciones de mayor ROI de tiempo. Para cada una: ¿qué trigger la activa, qué acciones realiza, qué herramienta la ejecuta y cuánto tiempo me ahorra a la semana?

3. **Make vs Zapier vs n8n para freelancers**: ¿Cuál es la mejor opción para alguien que no programa? Compara según: coste mensual para el volumen de un freelance, facilidad de uso, capacidades de lógica condicional, y las integraciones más relevantes para mi stack.

4. **El flujo de onboarding de nuevo cliente**: Diseña una automatización completa: desde que un cliente firma el contrato → se crea el proyecto en Notion → se envía email de bienvenida con accesos → se programa la reunión de kickoff en Calendly → se crea la primera factura en la herramienta de facturación. Dame los pasos concretos para construirlo.

5. **Seguimiento de pagos sin vergüenza**: ¿Cómo automatizo los recordatorios de facturas pendientes para que lleguen en el momento adecuado con el tono correcto, sin que yo tenga que escribirlos? Dame el flujo y los textos de los recordatorios.

6. **Time tracking y facturación automática**: Si trabajo por horas, ¿cómo conecto una herramienta de time tracking (Toggl, Harvest, Clockify) para que al final del período se genere automáticamente el borrador de factura con el tiempo registrado?

7. **Gestión de leads entrantes**: Cuando alguien llena mi formulario de contacto, ¿cómo automatizo la respuesta inicial, la calificación del lead y la agenda de una primera llamada sin intervención manual?

8. **Notificaciones inteligentes**: ¿Cómo configuro alertas que me avisen de lo que realmente importa (cliente sin respuesta en X días, factura próxima a vencer, proyecto sin actualización) sin saturarme de notificaciones?

9. **Backup y archivo automático**: ¿Cómo automatizo el archivo de proyectos terminados, el backup de entregables y la actualización del portfolio sin que sea una tarea pendiente que siempre postergo?

10. **El plan de implementación realista**: Si tengo 3 horas para empezar a automatizar, ¿en qué orden implemento las automatizaciones para maximizar el tiempo recuperado en la primera semana? Dame un plan concreto de implementación gradual.

Empieza por el diagnóstico de mis tareas repetitivas y las automatizaciones de mayor impacto. Quiero instrucciones paso a paso, no conceptos generales. Asumo que no sé programar pero aprendo rápido con las herramientas adecuadas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Identificar y construir automatizaciones no-code que conecten las herramientas de trabajo del freelance para eliminar el trabajo administrativo repetitivo.',
                'vote_score'       => 37,
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
