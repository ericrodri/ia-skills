<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills118Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de partnerships de marketing',
                'description'      => 'Diseña acuerdos de co-marketing, co-branding y joint ventures de contenido que expanden tu alcance a nuevas audiencias sin inversión en publicidad de pago.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de partnerships de marketing con experiencia en empresas B2B y B2C que han escalado mediante alianzas estratégicas. Tu misión es ayudarme a diseñar una estrategia completa de co-marketing que genere audiencia nueva sin depender de presupuesto publicitario.

**Contexto de mi empresa:**
- Empresa/producto: [describe tu empresa, qué vendes y a quién]
- Audiencia objetivo: [perfil de cliente ideal]
- Canales actuales: [dónde tienes presencia hoy: newsletter, redes, SEO, etc.]
- Tamaño de audiencia actual: [suscriptores, seguidores, tráfico mensual]
- Presupuesto disponible para partnerships: [puede ser 0€]
- Objetivo principal: [awareness, leads, ventas, comunidad]

**Fase 1 – Diagnóstico de potencial de partnerships:**
Analiza mi posición actual y dime:
1. Qué tipo de empresa complementaria se beneficiaría más de llegar a mi audiencia (sin ser competidora directa)
2. Qué puedo ofrecer yo en un intercambio: ¿newsletter mentions, acceso a mi comunidad, contenido conjunto, descuentos cruzados?
3. Cuál es mi "unfair advantage" como partner: ¿nicho muy específico, alta tasa de apertura, audiencia premium?

**Fase 2 – Mapa de partners potenciales:**
Genera una lista de 10 tipos de empresa o creador con los que debería buscar alianza, explicando para cada uno:
- Por qué sus audiencias se solapan con la mía sin competir
- Qué formato de partnership funciona mejor con ellos (webinar conjunto, newsletter swap, bundle de producto, guest post, descuento cruzado, co-creación de contenido)
- Cómo priorizar: cuáles atacar primero según facilidad de acceso y potencial de impacto

**Fase 3 – Pitch de outreach:**
Redacta tres versiones de email de primer contacto para proponer un partnership:
- Versión A: para una empresa grande donde no conozco a nadie
- Versión B: para un creador o newsletter de mi sector con audiencia similar a la mía
- Versión C: para alguien con quien ya tengo conexión o contacto en común

Cada versión debe incluir: asunto, apertura personalizada, propuesta de valor para ellos (no para mí), CTA concreto y no invasivo.

**Fase 4 – Formatos de co-marketing y cómo estructurarlos:**
Para cada uno de estos formatos, explícame cómo estructurarlo, qué entregables necesito preparar y cómo medir el éxito:
1. Newsletter cross-promotion (mención pagada vs. intercambio)
2. Webinar o evento online conjunto
3. Guía o recurso co-creado (lead magnet conjunto)
4. Bundle o paquete de productos combinados
5. Reto o campaña compartida en redes sociales

**Fase 5 – Seguimiento y medición:**
Define para mí:
- Las métricas clave para evaluar cada partnership (no solo leads: también calidad de audiencia, engagement, LTV de los clientes captados)
- Un sistema sencillo de tracking para partnerships sin herramientas caras
- Cuándo renovar, escalar o abandonar un partnership

**Entregable final:**
Con toda la información que te dé, genera un documento de Partnership Brief de una página que pueda enviar a potenciales partners: quiénes somos, qué audiencia tenemos, qué ofrecemos y qué esperamos del partnership. Tono profesional pero cercano.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar estrategias de co-marketing y alianzas que amplíen audiencia sin presupuesto publicitario',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Ecosistema de integraciones y marketplace de apps',
                'description'      => 'Diseña el marketplace de integraciones que convierte tu SaaS en una plataforma que otros productos complementan, aumentando retención y expansión de revenue.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de plataforma y ecosistema con experiencia en SaaS que han pasado de producto a plataforma (Slack, HubSpot, Notion). Necesito tu ayuda para diseñar la estrategia técnica y de negocio de un marketplace de integraciones.

**Contexto:**
- Mi SaaS: [describe el producto, qué problema resuelve, para quién]
- Stack tecnológico actual: [lenguajes, frameworks, infraestructura]
- Número de clientes actuales: [rango aproximado]
- Integraciones existentes si las hay: [lista las que ya tienes o las más pedidas]
- Objetivo: [retención, expansión, adquisición via ecosistema, o los tres]

**Bloque 1 – Diseño de la API pública:**
Ayúdame a definir:
1. Qué partes de mi producto deben exponerse como API pública vs. mantenerse internas
2. Principios de diseño REST vs. GraphQL vs. webhooks para este tipo de integraciones
3. Cómo versionar la API desde el principio para no romper integraciones de partners
4. Esquema de autenticación: OAuth2, API keys, JWT — cuándo usar cada uno
5. Rate limiting, quotas y cómo diferenciarlo por plan de precio

**Bloque 2 – Arquitectura del marketplace:**
Diseña la arquitectura de alto nivel del marketplace de integraciones:
- Cómo deben funcionar los webhooks (delivery, retry, logs de eventos)
- Modelo de datos para gestionar apps de terceros: permisos, scopes, tokens
- Cómo un partner publica, actualiza y hace rollback de su integración
- Sistema de review y aprobación de apps antes de publicarlas
- Consideraciones de seguridad: sandbox vs. producción, aislamiento de datos

**Bloque 3 – Developer experience (DX):**
Define qué necesita el portal de developers para que el ecosistema crezca:
- Documentación: estructura, ejemplos de código en varios lenguajes, Postman collections
- Entorno de sandbox con datos de prueba realistas
- SDKs: cuáles generar primero y cómo mantenerlos
- CLI para desarrollo local de integraciones
- Programa de partners: niveles, beneficios técnicos y de marketing

**Bloque 4 – Go-to-market del marketplace:**
Más allá de lo técnico, cómo conseguir que el ecosistema crezca:
1. Estrategia de las primeras 10 integraciones: ¿construirlas yo o buscar partners que ya las quieran?
2. Cómo las integraciones se convierten en canal de adquisición (SEO de integraciones, presencia en marketplaces de terceros como Zapier)
3. Revenue sharing: modelos posibles, pros y contras de cada uno
4. Métricas del ecosistema: adoption rate, retention por número de integraciones activas, NPS de developers

**Bloque 5 – Roadmap técnico:**
Dame un roadmap en 3 fases (0-3 meses, 3-9 meses, 9-18 meses) con los hitos técnicos, recursos de equipo necesarios y criterios de éxito para pasar a la siguiente fase.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Convertir un SaaS en plataforma mediante un ecosistema de integraciones y marketplace de apps de terceros',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño para ecosistemas de producto',
                'description'      => 'Mantén coherencia visual y de experiencia cuando tu producto crece a múltiples apps, plataformas y touchpoints que deben sentirse como uno solo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un design systems lead con experiencia en empresas cuyo producto ha crecido de una sola app a un ecosistema multi-plataforma (web, mobile, desktop, API, widgets de terceros). Necesito tu ayuda para diseñar y mantener la coherencia de experiencia en un ecosistema de producto complejo.

**Situación actual:**
- Producto principal: [describe la app o plataforma y su propósito]
- Plataformas existentes o planeadas: [web app, app iOS/Android, extensión de navegador, widget embebible, dashboard de datos, etc.]
- Número de diseñadores en el equipo: [cantidad]
- Estado actual del design system: [ninguno / en desarrollo / establecido pero con deuda técnica]
- Principal dolor de inconsistencia hoy: [describe dónde ves más fragmentación]

**Módulo 1 – Auditoría de inconsistencias:**
Guíame para hacer una auditoría del ecosistema actual:
1. Cómo documentar todas las superficies de diseño existentes (lista de plataformas, touchpoints, emails, pantallas de error, etc.)
2. Qué dimensiones revisar: tipografía, color, espaciado, iconografía, tono de voz, patrones de interacción, accesibilidad
3. Cómo priorizar qué inconsistencias resolver primero según impacto en el usuario y coste de corrección
4. Template de matriz de inconsistencias que pueda compartir con el equipo y con stakeholders

**Módulo 2 – Arquitectura del design system multi-plataforma:**
Ayúdame a diseñar la estructura del sistema:
- Cómo organizar tokens de diseño (primitivos vs. semánticos vs. de componente) para que funcionen en web, iOS y Android con una sola fuente de verdad
- Qué herramienta usar según el tamaño y stack del equipo (Figma Variables, Style Dictionary, Storybook)
- Cómo gestionar las variaciones de plataforma sin romper la coherencia: ¿qué debe ser idéntico y qué debe adaptarse?
- Modelo de gobernanza: quién decide cambios al sistema, cómo se proponen y aprueban
- Cómo versionar el design system para que los equipos de producto puedan actualizarse sin sorpresas

**Módulo 3 – Touchpoints no-app:**
El ecosistema va más allá de las pantallas. Ayúdame a extender el sistema a:
- Emails transaccionales y newsletters: templates, tokens de color en email, tipografía segura
- Documentación y portales de developers: cómo el branding debe aparecer aquí
- Widgets embebibles en sitios de terceros: constraints de diseño, personalización permitida vs. restringida
- Notificaciones push, SMS y comunicaciones del sistema

**Módulo 4 – Gestión del cambio y adopción:**
El mejor sistema no sirve de nada si el equipo no lo usa:
1. Cómo presentar el sistema a diseñadores y developers para que lo adopten con entusiasmo
2. Proceso de contribución: cómo un diseñador propone un componente nuevo al sistema
3. Documentación: qué debe documentar el propio design system (cuándo usar X, por qué existe Y)
4. Cómo medir la adopción del sistema y el impacto en velocidad de diseño y consistencia

**Entregable final:**
Genera un resumen ejecutivo de una página sobre el estado del ecosistema de diseño y el plan de mejora, pensado para presentar a dirección de producto y justificar la inversión en el design system.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar y mantener coherencia visual en ecosistemas de producto con múltiples plataformas y touchpoints',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ecosistema de partners de ventas',
                'description'      => 'Construye una red de VARs, SIs y consultoras que multiplica tu pipeline sin multiplicar el equipo de ventas directas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Channel Sales con experiencia en construir programas de partners para empresas de software B2B que han escalado entre 1M€ y 50M€ ARR. Necesito diseñar un ecosistema de partners de ventas que multiplique el pipeline sin contratar más vendedores directos.

**Mi situación:**
- Producto: [describe tu SaaS o solución B2B, precio medio de contrato, ciclo de ventas típico]
- Mercado objetivo: [tamaño de empresa cliente, sector, geografía]
- Ventas actuales: [equipo actual, ARR aproximado, principales fuentes de leads]
- Experiencia con partners: [ninguna / algunos informales / programa estructurado pero pequeño]
- Objetivo del programa de partners: [volumen de pipeline, cobertura geográfica, sectores verticales]

**Parte 1 – Tipos de partners y cuándo usar cada uno:**
Explícame las diferencias prácticas entre:
- Resellers / VARs (Value Added Resellers): cómo funcionan, qué márgenes esperan, cuándo tienen sentido
- System Integrators (SIs): cómo colaboran, cuándo el SI es el que cierra y cuándo es solo facilitador
- Consultoras y agencias: diferencias con SIs, cómo monetizan la relación con mi producto
- Referral partners / afiliados: estructura más ligera, qué esperar de ellos
- OEM / white-label partners: cuándo tiene sentido ceder la marca

Para mi caso concreto, recomiéndame qué tipo(s) de partner debo priorizar y por qué.

**Parte 2 – Diseño del programa de partners:**
Ayúdame a estructurar el programa:
1. Niveles del programa (Silver / Gold / Platinum o equivalente): qué criterios de acceso y qué beneficios en cada nivel
2. Estructura de comisiones y descuentos: rangos habituales en el sector, qué es sostenible para mi margen
3. Certificación y formación: qué debe saber un partner antes de poder vender mi producto
4. Materiales de ventas que debo proveer: battlecards, demos, propuestas tipo, guías de objeciones
5. Registro de oportunidades (deal registration): cómo gestionar conflictos entre ventas directas y canales

**Parte 3 – Reclutamiento de los primeros 10 partners:**
Dame un plan concreto:
- Cómo identificar partners potenciales en mi mercado (dónde buscar, qué señales buscar)
- El pitch para convencer a un partner de que añada mi producto a su portfolio
- El proceso de onboarding en las primeras 90 días para que el partner cierre su primera venta
- Cómo evitar los partners que "se certifican pero nunca venden" (zombi partners)

**Parte 4 – Gestión continua del canal:**
Cómo mantener el canal vivo y productivo:
- Cadencia de comunicación con partners: QBRs, newsletters de canal, alertas de producto
- Cómo gestionar los conflictos canal vs. venta directa sin perder partners ni clientes
- Métricas del canal: cuáles son las más importantes (pipeline generado, win rate de partners vs. directo, tiempo al primer cierre)
- Cuándo escalar un Partner Manager dedicado vs. gestionarlo desde el equipo de ventas

**Entregable:**
Redacta el borrador del Partner Program Agreement de una página que pueda enviar a los primeros partners para formalizar la relación antes de tener el contrato legal definitivo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar y escalar un programa de partners de ventas con VARs, SIs y consultoras',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Plataformización del producto',
                'description'      => 'Decide cuándo y cómo convertir tu producto en una plataforma con APIs, webhooks y un ecosistema de partners que lo extienden más allá de lo que tú podrías construir.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief Product Officer con experiencia en la transición de producto a plataforma. Necesito evaluar si mi producto está listo para plataformizarse y, si es así, diseñar la estrategia de producto para hacerlo bien.

**Contexto de mi producto:**
- Qué hace el producto y para quién: [describe el producto, su propuesta de valor y el perfil de usuario]
- Estado actual: [número de usuarios/clientes, ARR aproximado, antigüedad del producto]
- Señales que me hacen pensar en plataformizarme: [integraciones pedidas frecuentemente, clientes que construyen encima, equipo que no da abasto con customizaciones, etc.]
- Stack técnico: [lenguajes, frameworks, infraestructura]

**Parte 1 – ¿Está mi producto listo para ser plataforma?**
Ayúdame a hacer este diagnóstico honesto:
1. Criterios de madurez: qué debe tener resuelto un producto antes de intentar ser plataforma (estabilidad del core, claridad del modelo de datos, masa crítica de usuarios)
2. Señales de mercado: cómo saber si hay demanda real de extensibilidad o si estoy proyectando
3. Coste de oportunidad: qué dejo de hacer en el producto core si dedico recursos a construir plataforma
4. Trampas comunes: por qué muchos productos fracasan al intentar ser plataforma demasiado pronto o de la manera equivocada

**Parte 2 – Modelo de extensibilidad:**
Si decido seguir adelante, ayúdame a elegir el modelo:
- API pública: ventajas, riesgos de compromiso a largo plazo, cómo versionarla
- Webhooks y eventos: qué casos de uso resuelven mejor que las APIs, cómo diseñarlos
- Plugins / extensiones nativas: cuándo tiene sentido un modelo de plugin vs. confiar en integraciones via Zapier/n8n
- Marketplace de apps: el modelo más ambicioso, cuándo abordarlo y qué recursos requiere

**Parte 3 – Diseño de la experiencia de plataforma:**
Desde el punto de vista de producto (no solo técnico):
1. Qué debe poder hacer un developer externo sin tocar a nadie de mi equipo
2. Developer portal: qué secciones son imprescindibles desde el día 1
3. Cómo diseñar los permisos y scopes para que los usuarios confíen en las integraciones de terceros
4. Modelo de sandbox para que los developers puedan experimentar sin riesgo
5. Cómo gestionar la deprecación de funcionalidades de plataforma sin destruir el ecosistema

**Parte 4 – Estrategia de ecosistema:**
La plataforma sin ecosistema no vale nada:
- Primeras 5 integraciones: ¿construirlas yo para demostrar el caso de uso o dejar que el mercado las haga?
- Cómo conseguir que developers externos construyan encima de mi plataforma
- Cómo el ecosistema se convierte en un moat competitivo (switching cost, network effects)
- Métricas de salud del ecosistema: qué medir y con qué frecuencia

**Entregable:**
Genera una Platform Strategy Page de una hoja al estilo Amazon que capture la visión, el problema que resuelve la plataforma, las oportunidades para partners y los principios que guiarán las decisiones de producto de plataforma.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Evaluar y ejecutar la transición de producto a plataforma con APIs, plugins y ecosistema de partners',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Redes profesionales y comunidades de práctica',
                'description'      => 'Construye y aprovecha las redes y comunidades que aceleran tanto el reclutamiento como el desarrollo profesional continuo del equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief People Officer especializado en estrategia de talento y desarrollo organizacional. Necesito tu ayuda para construir una estrategia de redes profesionales y comunidades de práctica que beneficie tanto a la empresa en reclutamiento como al equipo en desarrollo profesional.

**Contexto:**
- Empresa: [sector, tamaño del equipo, etapa: startup / scale-up / corporación]
- Perfiles principales que contratas o desarrollas: [roles, especialidades]
- Estado actual de networking: [¿tiene el equipo comunidades activas? ¿hay un programa de employer branding técnico?]
- Principal dolor: [dificultad para contratar, retención baja, desarrollo profesional estancado, falta de visibilidad de marca empleadora]

**Bloque 1 – Mapa de comunidades relevantes:**
Ayúdame a identificar y priorizar:
1. Las comunidades online y offline más relevantes para los perfiles que contrato (Slacks de sector, meetups, conferencias, foros, comunidades de LinkedIn)
2. Cómo evaluar una comunidad antes de invertir tiempo: tamaño, actividad, calidad de los miembros, alineación con nuestros valores
3. La diferencia entre participar en una comunidad existente vs. crear la nuestra propia: cuándo tiene sentido cada opción
4. Cómo mapear quiénes son los nodos más influyentes en cada comunidad (los que amplifican, no solo los que tienen seguidores)

**Bloque 2 – Programa de embajadores internos:**
El activo más valioso para networking y employer branding son los propios empleados:
1. Cómo identificar a los empleados con mayor potencial como embajadores (no necesariamente los más extrovertidos)
2. Qué soporte darles: tiempo para actividades de comunidad, presupuesto para conferencias, ayuda con contenido
3. Qué no hacer: cómo evitar que el programa se sienta forzado o corporativo
4. Cómo medir el impacto del programa en reclutamiento y branding

**Bloque 3 – Comunidades de práctica internas:**
Más allá del networking externo, las comunidades internas son el motor del aprendizaje:
1. Qué es una comunidad de práctica y cómo se diferencia de un equipo o un comité
2. Cómo lanzar las primeras comunidades de práctica (por disciplina: engineering, diseño, datos, etc.)
3. Qué estructura mínima necesitan para sobrevivir más de 3 meses (facilitador, cadencia, formato)
4. Cómo conectar las comunidades internas con el ecosistema externo para traer aprendizaje de fuera

**Bloque 4 – Networking estratégico para RRHH:**
Como equipo de People, también tenemos que cultivar nuestra propia red:
- Con qué tipo de profesionales de RRHH y talento debería tener relación activa (headhunters, CPOs, comunidades de HR)
- Cómo mantener relaciones con candidatos que no contratamos pero podrían ser ideales en el futuro (talent pipelines)
- Cómo usar LinkedIn y otras plataformas de forma estratégica sin que parezca spam

**Entregable:**
Genera un plan de 90 días para lanzar el programa de comunidades, con acciones semanales, métricas de seguimiento y criterios de éxito al final del trimestre.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir redes profesionales y comunidades de práctica para mejorar reclutamiento y desarrollo del equipo',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Ecosistema financiero para empresas',
                'description'      => 'Conoce las bancas de inversión, fondos de deuda, family offices y proveedores de capital que debes tener en tu red para financiar el crecimiento en cada etapa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO con experiencia en operaciones de financiación para empresas en crecimiento, desde Series A hasta salidas a bolsa o ventas estratégicas. Necesito entender el ecosistema de capital y financiación y cómo navegar las relaciones con cada tipo de proveedor.

**Mi situación:**
- Empresa: [sector, modelo de negocio, revenue aproximado o etapa]
- Necesidad de capital: [para qué: expansión, M&A, capital circulante, refinanciación, preparar venta]
- Historial de financiación: [bootstrapped / angel / VC / deuda bancaria — qué tienes ya]
- Horizonte temporal: [cuándo necesitas el capital o cuándo quieres tenerlo disponible]

**Parte 1 – Mapa completo de proveedores de capital:**
Explícame las diferencias prácticas entre:
1. **Venture Capital**: etapas donde aplica, qué buscan los VCs, dilución típica, cómo son los mejores VCs como socios
2. **Private Equity**: diferencias con VC, para qué tipo de empresa tiene sentido, cómo funciona una operación de PE
3. **Deuda venture / venture debt**: cuándo es mejor que equity, proveedores habituales en Europa, covenants típicos
4. **Bancos de inversión (IBs)**: qué hacen exactamente, cuándo necesitas uno, cómo se les paga, cómo elegir el adecuado
5. **Family offices**: cómo son distintos de los fondos institucionales, ventajas de trabajar con ellos, cómo acceder
6. **Fondos de deuda privada (private credit)**: cuándo usar deuda privada vs. banca tradicional
7. **Banca tradicional y líneas de crédito**: para qué sirven todavía, limitaciones, cómo mantener buena relación
8. **Corporate venture capital (CVC)**: ventajas y riesgos de tomar dinero de un corporate

**Parte 2 – Relaciones con el ecosistema financiero:**
Independientemente de si necesito capital ahora, cómo debo cultivar el ecosistema:
1. Con qué actores financieros deberías tener relación antes de necesitar dinero y por qué
2. Cómo hacer networking en el mundo financiero: eventos, intros, qué decir en una primera llamada
3. Cómo presentar la empresa a distintos tipos de inversor (pitch para VC vs. pitch para deuda vs. pitch para family office)
4. Cómo gestionar las relaciones con inversores existentes para maximizar su valor más allá del capital

**Parte 3 – Proceso de fundraising:**
Dame un playbook del proceso:
1. Preparación: qué materiales necesito (teaser, deck, data room, modelo financiero)
2. Proceso competitivo: cómo crear urgencia y gestionar múltiples conversaciones en paralelo
3. Term sheet: las cláusulas más importantes que no debo pasar por alto (liquidation preference, anti-dilution, board seats, drag-along)
4. Due diligence: cómo prepararme y qué es lo que más falla en la due diligence de empresas como la mía
5. Cierre: tiempos realistas y cómo no dejar que el proceso de fundraising destruya el negocio mientras ocurre

**Entregable:**
Dame un mapa visual (en texto estructurado) del ecosistema financiero con los actores que debería tener en mi red en los próximos 12 meses, ordenados por prioridad según mi situación actual.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Mapear y navegar el ecosistema financiero para conseguir el capital adecuado en cada etapa',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Alianzas estratégicas y joint ventures',
                'description'      => 'Estructura legal, gobernanza y cláusulas de salida que determinan si una alianza empresarial sobrevive a los primeros desacuerdos reales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado mercantil especializado en alianzas estratégicas, joint ventures y contratos de colaboración empresarial. Necesito entender cómo estructurar legalmente una alianza o JV de modo que proteja mis intereses y establezca reglas claras de gobernanza desde el principio.

**Contexto:**
- Tipo de alianza que planteo: [joint venture con nueva sociedad / acuerdo de colaboración sin nueva entidad / consorcio / licencia cruzada / distribución exclusiva]
- Descripción de la alianza: [quiénes son las partes, qué aporta cada una, cuál es el negocio conjunto]
- Duración prevista: [duración mínima del acuerdo y horizonte de la relación]
- Geometría de poder: [¿participaciones iguales? ¿una parte aporta más capital, la otra tecnología o acceso a mercado?]
- Principal preocupación legal: [proteger IP, evitar competencia posterior del socio, gestionar la salida, gobernanza en desacuerdos]

**Parte 1 – Elección de la estructura legal:**
Ayúdame a decidir entre:
1. **JV con nueva sociedad (NewCo)**: ventajas en separación de riesgos, contabilidad propia, atracción de inversión; desventajas en coste y complejidad
2. **Acuerdo de colaboración contractual** (sin nueva entidad): más ágil, pero cómo gestionar la responsabilidad y los activos compartidos
3. **Consorcio temporal**: cuándo aplica, régimen específico en España
4. **Acuerdo de licencia cruzada o de distribución**: cuándo es suficiente con esto en lugar de una alianza más profunda

Para cada opción, explícame las implicaciones fiscales en España (IVA, IS, operaciones vinculadas entre partes relacionadas).

**Parte 2 – Gobernanza de la alianza:**
Las alianzas mueren por problemas de gobernanza, no de negocio:
1. Estructura de toma de decisiones: board conjunto, comité de dirección, mayorías necesarias para decisiones ordinarias vs. extraordinarias
2. Derechos de veto: qué materias deben requerir unanimidad y cuáles mayoría simple
3. Información y transparencia: qué información debe compartir cada parte y con qué frecuencia
4. Gestión de conflictos de interés cuando una parte también opera en un mercado adyacente
5. Mecanismo de desempate cuando el board está bloqueado (deadlock mechanism)

**Parte 3 – Protección de la propiedad intelectual:**
La IP es siempre el punto más conflictivo:
1. IP background (pre-existente): cómo licenciarla a la JV sin cederla definitivamente
2. IP foreground (creada en la JV): quién la posee, cómo se comparte, qué pasa con ella en la salida
3. Cláusulas de no competencia y no solicitud: alcance razonable y exigible en España
4. Confidencialidad: qué debe cubrir el NDA de la alianza y cómo se aplica tras la terminación

**Parte 4 – Cláusulas de salida:**
La salida bien diseñada desde el principio salva muchas alianzas:
1. Causas de terminación anticipada: cuáles son justas, cuáles abusivas
2. Mecanismos de compraventa: tag-along, drag-along, right of first refusal, call/put options, Texas shootout
3. Valoración en la salida: cómo acordar ahora el método de valoración para evitar disputas futuras
4. Liquidación de activos compartidos: quién se queda con qué, cómo valorar los intangibles
5. Obligaciones post-terminación: no competencia, confidencialidad, transición de clientes

**Entregable:**
Genera un term sheet de JV / alianza de dos páginas con los principales términos a negociar, ordenados de mayor a menor importancia estratégica, que pueda llevar a la primera reunión de negociación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estructurar legalmente alianzas estratégicas y joint ventures con gobernanza y salida bien definidas',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Partnerships de éxito del cliente',
                'description'      => 'Aprende a colaborar con partners de implementación, consultoras y otros proveedores del cliente para maximizar los resultados y la retención.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia en SaaS B2B donde el ecosistema de partners (implementadores, consultoras, agencias) juega un papel clave en los resultados del cliente. Necesito construir una estrategia de partnership de CS que mejore los resultados del cliente y aumente la retención.

**Contexto:**
- Mi producto: [describe el SaaS, para qué sirve, precio medio y complejidad de implementación]
- Perfil de cliente: [tamaño de empresa, sector, sofisticación técnica]
- Ecosistema de partners actual: [¿hay ya implementadores o consultoras que trabajan con tus clientes? ¿de forma organizada o informal?]
- Principal dolor: [los clientes no extraen todo el valor / alta churn / implementaciones lentas / el CS está desbordado]

**Parte 1 – Mapa de partners en el ecosistema del cliente:**
Muchos de tus clientes ya trabajan con otros proveedores. Ayúdame a entender:
1. Qué tipos de partners suelen estar presentes en los proyectos de mis clientes (implementadores, consultoras de negocio, agencias de marketing, proveedores de datos, ERPs)
2. Cómo identificar qué partners están activos con cada cliente desde el principio del ciclo de vida
3. El impacto que los partners tienen en el éxito del cliente: cuándo son aceleradores y cuándo son obstáculos
4. Cómo hacer que los partners sean aliados del CS en lugar de competidores por la atención del cliente

**Parte 2 – Programa de partners de implementación:**
Para los partners que implementan mi producto en clientes:
1. Proceso de certificación: qué deben saber y demostrar antes de implementar solos
2. Handoff del proyecto: cómo transferir un cliente a un partner de implementación sin perder contexto ni calidad
3. Accountability: cómo mantener visibilidad del éxito del cliente aunque el partner lleve el día a día
4. Escalación: cómo gestionar las situaciones donde la implementación del partner está causando riesgo de churn
5. Health scoring de clientes con partner vs. clientes directos: ¿hay diferencias? ¿cuáles y por qué?

**Parte 3 – Colaboración con consultoras y asesores del cliente:**
Cuando el cliente tiene un consultor externo influyente:
1. Cómo identificar y relacionarte con el consultor o asesor de tu cliente antes de que se convierta en obstáculo
2. Cómo educar al consultor sobre el valor de tu producto sin que parezca que lo estás gestionando
3. Situaciones donde el consultor recomienda una solución alternativa: cómo responder
4. Cómo convertir a los consultores más frecuentes en defensores de tu producto

**Parte 4 – Métricas e incentivos:**
Cómo alinear a los partners con los resultados del cliente:
1. KPIs de partner en CS: health score de clientes gestionados, tiempo de implementación, churn de clientes del partner
2. Cómo incentivar a los partners a priorizar el éxito del cliente (no solo la implementación y el cobro)
3. Partner scorecard trimestral: qué medir y cómo comunicar los resultados
4. Cómo gestionar a los partners que tienen malos resultados: conversación, plan de mejora, y cuándo terminar la relación

**Entregable:**
Genera un Playbook de Onboarding de Partner CS de una página que pueda usar el equipo de CS para iniciar la relación con un nuevo partner implementador de forma consistente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Colaborar con partners de implementación y consultoras para mejorar resultados del cliente y reducir el churn',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Red de referencias entre freelancers',
                'description'      => 'Construye la red de colegas complementarios que te mandan trabajo y a quien mandas trabajo: el activo profesional más valioso que puede tener un freelance.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance senior con más de 10 años de experiencia que ha construido un negocio estable basado principalmente en referencias mutuas entre profesionales complementarios. Ayúdame a diseñar y ejecutar una estrategia para construir mi propia red de referencias.

**Mi situación:**
- Mi especialidad: [qué haces exactamente, para qué tipo de cliente]
- Años de experiencia como freelance: [tiempo]
- Estado actual de mi red: [¿tienes ya algunos colegas con quienes te mandas trabajo? ¿o empiezas de cero?]
- Principal fuente de trabajo hoy: [referencias de clientes, plataformas, outreach directo, etc.]
- Objetivo: [más estabilidad en el flujo de trabajo / mejores clientes / más ingresos / menos dependencia de plataformas]

**Parte 1 – Diseño de tu ecosistema de referencias:**
Una red de referencias no es solo "conocer gente". Ayúdame a estructurarla:
1. Mapa de perfiles complementarios: qué tipo de freelances hacen trabajo que mis clientes también necesitan pero yo no hago (ej: si soy diseñador, quizás necesito copywriters, developers, fotógrafos, project managers)
2. Mapa de perfiles adyacentes: freelances que hacen algo parecido a lo mío pero con distinto enfoque, nivel de precio o sector: ¿cuándo me mandan trabajo a mí y cuándo les mando yo a ellos?
3. La regla de la red: con cuántas personas necesitas tener relación activa de referencias para que el flujo sea significativo (la respuesta es menos de lo que crees)
4. Calidad vs. cantidad: por qué 5 personas que confían profundamente en ti valen más que 500 conexiones en LinkedIn

**Parte 2 – Cómo construir relaciones de referencia reales:**
El networking superficial no genera referencias. Cómo construir relaciones que sí lo hacen:
1. Dónde encontrar freelances complementarios con quienes valga la pena conectar (comunidades, eventos, proyectos conjuntos)
2. El primer contacto: cómo presentarte a un colega potencial de forma que no parezca transaccional
3. Cómo construir confianza antes de que llegue la primera oportunidad de mandar trabajo
4. El primer intercambio de referencias: cómo hacerlo bien para que la relación se fortalezca
5. Cómo mantener vivas las relaciones de referencia sin convertirlo en un segundo trabajo

**Parte 3 – Sistema de referencias que funciona:**
La buena voluntad no basta; necesitas un sistema:
1. Cómo gestionar quién te manda qué tipo de trabajo (sin una hoja de cálculo que no usarás)
2. Cómo hacer seguimiento de las referencias que has dado: ¿llegaron a buen puerto? ¿el cliente quedó satisfecho?
3. Acuerdos de referencia: ¿comisión económica o intercambio de referencias? Cuándo usar cada modelo, cómo formalizarlo sin que sea incómodo
4. Cuándo declinar una referencia que recibes (el trabajo no encaja) sin dañar la relación
5. Cómo protegerte si una referencia sale mal: gestión de expectativas con el colega y con el cliente

**Parte 4 – Red de referencias como activo estratégico:**
Más allá del flujo de trabajo:
1. Cómo tu red de referencias mejora tu posicionamiento y reputación en el mercado
2. Proyectos conjuntos: cuándo tiene sentido hacer un proyecto con otros freelances en lugar de solo referirlos
3. Cómo la red te protege en épocas de menos trabajo: la red como seguro profesional
4. Cómo hacer crecer la red con intención: añadir nuevos perfiles según evoluciona tu especialidad

**Entregable:**
Genera un plan de 60 días para activar o construir desde cero tu red de referencias, con acciones concretas semana a semana y una plantilla de mensaje para el primer contacto con un freelance complementario.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Construir una red de referencias entre freelancers complementarios para generar un flujo estable de trabajo de calidad',
                'vote_score'       => 29,
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
