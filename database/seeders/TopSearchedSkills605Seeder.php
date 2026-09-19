<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills605Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de marketing para NFTs empresariales con IA',
                'description'      => 'Usa IA para diseñar campañas de marketing que posicionen los activos digitales y NFTs corporativos ante audiencias B2B y B2C, diferenciando el valor real del hype especulativo.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing digital especializado en tecnología blockchain y activos digitales empresariales. Tu objetivo es ayudarme a diseñar una estrategia de marketing para el lanzamiento o reposicionamiento de activos digitales o NFTs con utilidad real para empresas, alejándome del ruido especulativo del mercado retail.

Contexto del proyecto:
- Tipo de activo digital o NFT (certificado de propiedad, token de fidelización, credencial verificable, NFT de acceso, coleccionable corporativo): [ESPECIFICAR]
- Sector de la empresa emisora: [ESPECIFICAR]
- Audiencia objetivo (empresas B2B, consumidores finales B2C, ambos): [ESPECIFICAR]
- Blockchain o plataforma tecnológica utilizada: [ESPECIFICAR]
- Presupuesto de marketing disponible: [ESPECIFICAR]
- Objetivos de la campaña (awareness, generación de leads, ventas directas, fidelización): [ESPECIFICAR]

Tarea 1 — Posicionamiento estratégico de activos digitales empresariales:
Define el marco de posicionamiento para comunicar el valor real de un NFT empresarial sin caer en el lenguaje especulativo que aleja a las empresas conservadoras:
a) Propuesta de valor central: qué problema concreto resuelve el NFT para el comprador.
b) Diferenciación frente a alternativas digitales convencionales (bases de datos, certificados PDF, programas de fidelización tradicionales).
c) Narrativa de confianza: cómo comunicar la seguridad, auditabilidad y permanencia del blockchain a audiencias no técnicas.
d) Gestión del riesgo reputacional asociado a la volatilidad del mercado crypto.

Tarea 2 — Plan de contenidos para audiencias empresariales:
Diseña un plan de contenidos de 3 meses orientado a buyers corporativos, con:
- Artículos técnicos para LinkedIn sobre casos de uso industriales (supply chain, autenticación de productos, propiedad intelectual).
- Webinars y demos interactivas para decisores de compra (C-suite y directores de innovación).
- Whitepapers descargables con ROI documentado de proyectos similares.
- Casos de estudio de empresas del sector que ya usan NFTs con resultados medibles.

Tarea 3 — Estrategia de comunidad y embajadores:
Define cómo construir una comunidad activa alrededor de los activos digitales sin depender de las comunidades crypto especulativas. Incluye: estrategia de Discord o Telegram corporativo, programa de early adopters empresariales, incentivos para prescriptores y analistas del sector.

Tarea 4 — Relaciones públicas y cobertura mediática:
Diseña una estrategia de PR para conseguir cobertura en medios especializados de negocio (no solo de crypto): identificación de periodistas objetivo, notas de prensa orientadas al impacto empresarial, participación en eventos de innovación empresarial y premios de tecnología.

Tarea 5 — Métricas de campaña adaptadas a activos digitales:
Define KPIs específicos para campañas de marketing de NFTs empresariales: número de wallets corporativas activas, tasa de uso del NFT por parte de los titulares, volumen de transacciones secundarias autorizadas, NPS de titulares, menciones en medios especializados y leads cualificados generados por el programa.

Formato de respuesta: estructura el plan en fases (pre-lanzamiento, lanzamiento, post-lanzamiento). Usa tablas para el calendario de contenidos y las métricas. Incluye ejemplos de mensajes clave adaptados a diferentes perfiles de interlocutor corporativo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar campañas de marketing para NFTs y activos digitales con utilidad empresarial real',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de plataformas de activos digitales empresariales con IA',
                'description'      => 'Planifica la arquitectura técnica de una plataforma empresarial para emitir, gestionar y transferir activos digitales y NFTs, incluyendo integración con sistemas legados.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto blockchain y desarrollador full-stack especializado en plataformas empresariales de activos digitales. Tu objetivo es ayudarme a diseñar la arquitectura técnica completa de una plataforma para emitir y gestionar NFTs o tokens con utilidad real en un entorno corporativo.

Especificaciones del proyecto:
- Caso de uso principal (certificados de autenticidad, tokens de acceso, credenciales verificables, tokenización de activos reales, programas de fidelización blockchain): [ESPECIFICAR]
- Sector empresarial: [ESPECIFICAR]
- Número estimado de activos digitales a emitir en el primer año: [ESPECIFICAR]
- Requisitos de integración con sistemas existentes (ERP, CRM, base de datos de clientes): [ESPECIFICAR]
- Requisitos de privacidad y regulación aplicable (GDPR, CCPA, sector financiero): [ESPECIFICAR]
- Experiencia del equipo de desarrollo en blockchain: [ESPECIFICAR]

Tarea 1 — Selección de blockchain y protocolo:
Analiza y recomienda la infraestructura blockchain más adecuada considerando:
a) Blockchains públicas (Ethereum, Polygon, Solana, Base): ventajas en interoperabilidad vs. costes de gas y velocidad.
b) Blockchains privadas o permisionadas (Hyperledger Fabric, Quorum, Corda): control total vs. menor liquidez y portabilidad.
c) Blockchains híbridas: anclaje de hashes en chain pública con datos privados off-chain.
d) Estándares de token: ERC-721, ERC-1155, ERC-3525 (semi-fungible) y sus diferencias en cuanto a utilidad empresarial.

Tarea 2 — Arquitectura de la plataforma:
Diseña la arquitectura completa del sistema con:
- Backend: API REST o GraphQL para emisión, transferencia y consulta de NFTs, integración con RPC nodes, gestión de wallets custodiales para usuarios corporativos no cripto-nativos.
- Smart contracts: diseño del contrato de NFT, funciones de minting, transferencia, quemado y royalties. Estrategia de upgradability (patrón proxy vs. inmutabilidad).
- Frontend: panel de administración para el emisor corporativo y portal del titular de activos.
- Almacenamiento descentralizado: estrategia para metadatos e imágenes (IPFS, Arweave, AWS S3 con hash en chain).

Tarea 3 — Gestión de wallets para usuarios empresariales:
Diseña la estrategia de onboarding de usuarios sin experiencia en crypto:
- Wallets custodiales gestionadas por la plataforma: ventajas de UX vs. riesgo de custodia.
- Wallets MPC (Multi-Party Computation) para reducir el single point of failure.
- Integración con SSO corporativo (SAML, OAuth2) para que el empleado use sus credenciales empresariales.
- Proceso de recuperación de acceso sin seed phrase para usuarios no técnicos.

Tarea 4 — Integración con sistemas legados:
Define los conectores y middleware necesarios para integrar la plataforma blockchain con:
- ERP (SAP, Oracle, Microsoft Dynamics): sincronización de inventario y activos tokenizados.
- CRM (Salesforce, HubSpot): registro automático de NFTs en el perfil del cliente.
- Sistemas de autenticación e identidad corporativa.
- APIs de terceros para verificación de identidad (KYC/AML si aplica al caso de uso).

Tarea 5 — Plan de desarrollo y auditoría de smart contracts:
Propón un roadmap técnico de 6 meses incluyendo: fases de desarrollo, framework de testing para smart contracts (Hardhat, Foundry), proceso de auditoría de seguridad externa obligatoria antes del lanzamiento en mainnet, y plan de respuesta ante incidentes (exploits, bugs en contratos).

Formato de respuesta: incluye diagramas de arquitectura en formato texto (ASCII o pseudocódigo). Proporciona fragmentos de código de ejemplo para los smart contracts más críticos. Usa tablas comparativas para la selección de blockchain y protocolo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Arquitectar plataformas empresariales de emisión y gestión de NFTs y activos digitales',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Creación de activos digitales y NFT art con IA generativa',
                'description'      => 'Domina el flujo de trabajo para crear colecciones de NFT art con IA generativa, desde el concepto hasta los metadatos, garantizando coherencia visual y valor diferencial.',
                'prompt_content'   => <<<'EOT'
Eres un artista digital y diseñador especializado en NFT art y colecciones generativas. Tu objetivo es ayudarme a diseñar el proceso creativo completo para una colección de activos digitales, aprovechando las herramientas de IA generativa para crear obras con identidad visual fuerte y valor diferencial.

Información del proyecto creativo:
- Concepto o temática de la colección: [ESPECIFICAR]
- Número de piezas en la colección (1/1, edición limitada, generativa con miles de variantes): [ESPECIFICAR]
- Herramientas de IA a utilizar (Midjourney, Stable Diffusion, DALL-E 3, Adobe Firefly, Runway): [ESPECIFICAR]
- Blockchain de despliegue previsto: [ESPECIFICAR]
- Público objetivo de la colección (coleccionistas de arte digital, comunidades específicas, empresas): [ESPECIFICAR]
- Presupuesto de producción y marketing: [ESPECIFICAR]

Tarea 1 — Desarrollo del concepto artístico:
Diseña la identidad visual de la colección con:
a) Guía de estilo visual: paleta de colores, vocabulario estético, influencias artísticas y lo que diferencia la colección del ruido del mercado NFT.
b) Narrativa o lore: historia de fondo que da coherencia y profundidad a las piezas y fomenta el coleccionismo.
c) Sistema de rarezas: si la colección es generativa, define los atributos (traits), sus variantes y la distribución de probabilidad que determina la rareza de cada pieza.
d) Coherencia entre piezas: cómo garantizar que todas las combinaciones generadas resultan visualmente armónicas.

Tarea 2 — Flujo de trabajo con IA generativa:
Define el proceso de producción paso a paso:
- Iteración de prompts: técnica de prompting avanzado para Midjourney (parámetros --ar, --style, --sref, --cref) o Stable Diffusion (modelos, LoRAs, ControlNet).
- Control de consistencia: estrategias para mantener el estilo coherente a través de cientos o miles de variantes.
- Post-procesamiento: upscaling, refinado manual en Photoshop o Procreate, composición de capas.
- Proceso de selección y curación de las piezas finales.

Tarea 3 — Metadatos y estándares técnicos:
Define la estructura de metadatos para los NFT según el estándar ERC-721 o ERC-1155:
- Campos obligatorios: name, description, image, attributes.
- Atributos personalizados para la colección: cómo nombrar traits y valores para que los agregadores (OpenSea, Blur, Magic Eden) los muestren correctamente.
- Almacenamiento de imágenes y metadatos: IPFS con Pinata, Arweave permanente o servidor centralizado (ventajas y riesgos de cada opción).
- Script de generación automática de metadatos JSON para colecciones generativas.

Tarea 4 — Protección de derechos de autor y licencias:
Analiza el marco legal actual sobre:
- Derechos de autor de obras creadas con IA: estado de la ley en la UE y EE.UU.
- Licencias de uso que acompañan al NFT: CC0 (dominio público), licencias propietarias con limitaciones, NFT License 2.0.
- Riesgo de infracción si los modelos de IA fueron entrenados con obras protegidas.
- Cómo documentar el proceso creativo para demostrar originalidad y aportación humana.

Tarea 5 — Estrategia de lanzamiento de la colección:
Diseña el plan de lanzamiento en 4 fases: pre-lanzamiento (construcción de comunidad, whitelist, teaser de artwork), mint event (precio, formato: Dutch auction, precio fijo, free mint + royalties), post-mint (activación de la comunidad, roadmap de utilidades adicionales) y estrategia de mercado secundario (royalties, colaboraciones).

Formato de respuesta: incluye ejemplos de prompts reales para Midjourney y Stable Diffusion para el estilo definido. Proporciona un ejemplo de archivo JSON de metadatos completo. Usa tablas para el sistema de rarezas y el plan de lanzamiento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Crear colecciones de NFT art coherentes y valiosas usando herramientas de IA generativa',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de activos digitales y NFTs a empresas con IA',
                'description'      => 'Diseña argumentarios y procesos de venta consultiva para comercializar soluciones de activos digitales y NFTs a empresas que aún no comprenden o no confían en la tecnología blockchain.',
                'prompt_content'   => <<<'EOT'
Eres un director de ventas especializado en soluciones tecnológicas empresariales de blockchain y activos digitales. Tu objetivo es ayudarme a superar las barreras de venta habituales cuando se intenta comercializar NFTs o tokens empresariales ante compradores corporativos escépticos o sin conocimiento técnico.

Contexto del equipo comercial:
- Solución o producto que vendemos (plataforma de certificación en blockchain, programa de fidelización NFT, tokenización de activos reales, credenciales verificables): [ESPECIFICAR]
- Sectores objetivo (retail, lujo, educación, seguros, supply chain, entretenimiento): [ESPECIFICAR]
- Ticket promedio de contrato: [ESPECIFICAR]
- Ciclo de venta estimado: [ESPECIFICAR]
- Principal competencia (soluciones tradicionales no blockchain vs. otras plataformas blockchain): [ESPECIFICAR]
- Perfil del interlocutor habitual en el cliente (CTO, CDO, director de marketing, CEO en pymes): [ESPECIFICAR]

Tarea 1 — Mapa de objeciones y respuestas:
Identifica las 10 objeciones más frecuentes al vender activos digitales a empresas y desarrolla respuestas concretas para cada una:
- "El blockchain es para especuladores, no tiene uso real en mi negocio."
- "¿Qué pasa si el proyecto de blockchain fracasa o la empresa proveedora cierra?"
- "Mis clientes no tienen wallets ni entienden de crypto."
- "Ya tenemos una base de datos, ¿para qué necesito blockchain?"
- "El consumo energético del blockchain es incompatible con nuestra política ESG."
Y las cinco adicionales más relevantes para el sector especificado.

Tarea 2 — Argumentario de valor por rol:
Adapta el mensaje de venta para cada interlocutor dentro de la empresa cliente:
- CEO o propietario: ROI, reducción de fraude, diferenciación competitiva.
- CTO o director de tecnología: arquitectura técnica, integración con sistemas existentes, seguridad.
- Director de marketing: engagement de clientes, exclusividad, viralidad, nuevos modelos de relación.
- Director financiero: reducción de costes operativos, nuevo modelo de ingresos, auditoría simplificada.
- Director jurídico: trazabilidad, cumplimiento normativo, valor probatorio del registro blockchain.

Tarea 3 — Proceso de venta consultiva en 6 etapas:
Define el proceso de descubrimiento y cierre adaptado a la venta de activos digitales empresariales:
- Prospección: qué señales indican que una empresa está lista para blockchain (proyectos de innovación activos, competidores que ya lo usan, problemas de autenticidad o fraude).
- Discovery: preguntas para descubrir el dolor específico que justifica la inversión.
- Demo o prueba de concepto: cómo estructurar una PoC de 4 semanas que demuestre valor tangible.
- Propuesta económica: cómo presentar el precio de un proyecto tecnológico nuevo sin referencias de mercado claras.
- Gestión del comité de compra: cómo avanzar cuando hay múltiples stakeholders con criterios diferentes.
- Cierre y upsell: expansión del contrato inicial hacia un programa más amplio.

Tarea 4 — Herramientas de habilitación de ventas:
Lista y describe los materiales de sales enablement necesarios: deck de ventas por sector, calculadora de ROI interactiva, demo sandbox con datos del cliente, biblioteca de casos de éxito por industria, y guía de respuesta rápida a objeciones técnicas para no-técnicos.

Tarea 5 — Métricas de rendimiento del equipo comercial:
Define el cuadro de mando para el equipo de ventas de activos digitales: número de PoCs iniciadas, tasa de conversión de PoC a contrato, ciclo de venta promedio por sector, valor del contrato inicial vs. expansión al año, y satisfacción del cliente (NPS a los 6 meses).

Formato de respuesta: presenta el mapa de objeciones en formato de tabla dos columnas (objeción / respuesta). Usa roleplay para simular dos o tres momentos clave del proceso de venta. Incluye un modelo de agenda para la demo de 45 minutos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Superar objeciones y cerrar contratos de soluciones de activos digitales en entornos corporativos',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de portfolio de activos digitales empresariales con IA',
                'description'      => 'Aplica metodologías de product management para planificar, lanzar y evolucionar un portfolio de NFTs y activos digitales con utilidad real dentro de una organización.',
                'prompt_content'   => <<<'EOT'
Eres un product manager especializado en productos blockchain y activos digitales empresariales. Tu objetivo es ayudarme a gestionar el ciclo de vida completo de un portfolio de activos digitales, desde la ideación hasta la adopción masiva, aplicando metodologías ágiles adaptadas al entorno blockchain.

Contexto del producto:
- Tipo de activo digital o NFT a gestionar (token de fidelización, certificado de autenticidad, credencial verificable, NFT de acceso a servicios, activo tokenizado): [ESPECIFICAR]
- Estado actual del producto (idea, PoC, beta privada, lanzado): [ESPECIFICAR]
- Número de usuarios o titulares activos actuales: [ESPECIFICAR]
- Equipo disponible (desarrolladores, diseñadores, legal, marketing): [ESPECIFICAR]
- Métricas actuales de adopción y uso: [ESPECIFICAR]
- Competidores directos e indirectos: [ESPECIFICAR]

Tarea 1 — Estrategia de producto para activos digitales:
Define la visión y estrategia del producto a 18 meses:
a) Propuesta de valor diferencial frente a alternativas no blockchain.
b) Modelo de negocio: cómo genera valor económico el activo digital (comisión en mint, royalties en secundaria, suscripción de plataforma, licencia por empresa emisora).
c) Mapa de stakeholders: titulares del NFT, empresas emisoras, marketplaces, integradores tecnológicos.
d) Estrategia de red: cómo crece el valor del activo cuantos más participantes hay (efecto red).

Tarea 2 — Roadmap del producto:
Diseña un roadmap de producto organizado en horizontes:
- Horizonte 1 (0-6 meses): funcionalidades para conseguir product-market fit con early adopters. Define los criterios de éxito para cada funcionalidad.
- Horizonte 2 (6-12 meses): funcionalidades de escalado y retención. Integraciones con ecosistemas externos.
- Horizonte 3 (12-18 meses): expansión del caso de uso, nuevos mercados, nuevas categorías de activos.

Tarea 3 — Framework de priorización:
Adapta un framework de priorización (RICE, ICE, MoSCoW) al contexto de activos digitales, considerando factores únicos de blockchain: coste de auditoría de smart contracts para nuevas funciones, impacto en descentralización, compatibilidad con estándares ERC, y posible fricción para usuarios no técnicos.

Tarea 4 — Métricas de producto para NFTs y activos digitales:
Define el sistema de métricas de producto específico para activos digitales:
- Métricas de adopción: wallets activas, tasa de mint, porcentaje de titulares que usan el NFT para su utilidad (vs. puramente especulativa).
- Métricas de retención: tasa de venta y salida del ecosistema, tiempo medio de tenencia, porcentaje que compra más de un activo.
- Métricas de valor: precio de mercado secundario, volumen de transacciones, royalties generados para el emisor.
- Métricas de comunidad: miembros activos, tasa de participación en governance (si aplica), NPS de titulares.

Tarea 5 — Gestión de incidentes en productos blockchain:
Diseña el proceso de respuesta ante incidentes graves específicos del entorno blockchain: exploit de smart contract, pérdida masiva de acceso a wallets por parte de usuarios, caída del marketplace principal, cambios regulatorios que afectan al caso de uso, y crisis de imagen por asociación con proyectos fraudulentos del sector.

Formato de respuesta: presenta el roadmap en formato tabla por trimestre. Usa el framework de priorización en un ejemplo concreto con 5 funcionalidades ficticias. Incluye una plantilla de análisis de incidente post-mortem adaptada a productos blockchain.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar el ciclo de vida de un portfolio de activos digitales y NFTs empresariales',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del talento en blockchain y activos digitales con IA',
                'description'      => 'Diseña procesos de atracción, evaluación y retención de profesionales especializados en blockchain, smart contracts y gestión de activos digitales para equipos empresariales.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en recursos humanos con experiencia en captación de talento tecnológico para empresas que operan en el ecosistema blockchain y activos digitales. Tu objetivo es ayudarme a construir y retener equipos de alto rendimiento en un sector con escasez severa de talento especializado.

Contexto de la organización:
- Tipo de empresa (startup blockchain nativa, empresa tradicional en proceso de transformación digital con blockchain, exchange o custodio de activos digitales): [ESPECIFICAR]
- Perfiles a contratar: [ESPECIFICAR]
- Rango salarial disponible para perfiles técnicos: [ESPECIFICAR]
- Modalidad de trabajo (remoto global, híbrido, presencial): [ESPECIFICAR]
- Cultura de empresa actual y fit esperado con perfil blockchain: [ESPECIFICAR]
- Urgencia de contratación: [ESPECIFICAR]

Tarea 1 — Mapa de perfiles en el ecosistema blockchain:
Describe las competencias técnicas y salariales de referencia para los perfiles más demandados:
a) Smart contract developer (Solidity, Rust, Vyper): años de experiencia, proyectos en portfolio, auditorías realizadas, protocolos conocidos.
b) Blockchain architect: diseño de sistemas distribuidos, elección de infraestructura, interoperabilidad entre cadenas.
c) Web3 product manager: experiencia en tokenomics, comunidades DAO, lanzamientos en mainnet.
d) Blockchain security auditor: metodologías de auditoría, herramientas (Slither, Mythril, Echidna), experiencia en bug bounties.
e) Tokenomics designer / crypto economist: modelización de incentivos, diseño de mecanismos de governance.

Tarea 2 — Estrategia de atracción de talento:
El talento blockchain es escaso y sus mejores representantes reciben múltiples ofertas. Define una estrategia de employer branding y captación para destacar:
- Presencia activa en GitHub, ETHGlobal, Devcon y hackathones.
- Programa de contribuciones a proyectos open source como señal de compromiso con la comunidad.
- Comunicación de la stack tecnológica y el impacto real del proyecto para captar desarrolladores motivados por el reto técnico.
- Política de compensación con tokens, opciones sobre equity o participación en el protocolo para competir con proyectos DeFi.

Tarea 3 — Proceso de evaluación técnica:
Diseña un proceso de selección técnica riguroso y respetuoso del tiempo de candidatos senior:
- Screening inicial: revisión de contribuciones en Github, contratos desplegados en mainnet y auditorías publicadas.
- Prueba técnica (máximo 3 horas): ejercicio de smart contract con vulnerabilidades a identificar y corregir.
- Entrevista de arquitectura: revisión de decisiones de diseño en un caso práctico real de la empresa.
- Entrevista de cultura: evaluación de alineación con valores de descentralización, transparencia y seguridad.

Tarea 4 — Retención en un mercado de alta rotación:
El mercado blockchain tiene rotación muy superior a la media tecnológica. Propón medidas concretas de retención:
- Planes de vesting de tokens bien diseñados (cliff, schedule, aceleración en M&A).
- Tiempo dedicado a proyectos personales o de investigación (20% time).
- Financiación de auditorías de seguridad certificadas como beneficio formativo.
- Participación en conferencias internacionales (ETHDenver, Devcon, Token2049) como representantes de la empresa.

Tarea 5 — Formación interna en blockchain para equipos no técnicos:
Diseña un programa de alfabetización blockchain para empleados no técnicos (legal, finanzas, marketing, RRHH) que necesitan colaborar con el equipo de activos digitales: módulos formativos, duración, herramientas de e-learning recomendadas y evaluación de conocimientos adquiridos.

Formato de respuesta: usa tablas para el mapa de perfiles con rangos salariales orientativos. Incluye una plantilla de prueba técnica con criterios de corrección. Proporciona un modelo de plan de vesting adaptable.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Atraer, evaluar y retener talento especializado en blockchain y activos digitales',
                'vote_score'       => 26,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Valoración y auditoría de activos digitales empresariales con IA',
                'description'      => 'Aplica metodologías de valoración financiera adaptadas al entorno blockchain para auditar, contabilizar y reportar activos digitales y NFTs en el balance empresarial.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero y auditor especializado en activos digitales, con conocimiento profundo de las normativas contables aplicables a criptoactivos y NFTs en balance empresarial. Tu objetivo es ayudarme a establecer un proceso riguroso de valoración, contabilización y auditoría de activos digitales en una organización.

Contexto de la organización:
- Tipo de activos digitales en cartera (criptomonedas, NFTs especulativos, NFTs con utilidad real, tokens de protocolo, stablecoins, activos tokenizados): [ESPECIFICAR]
- Valor estimado del portfolio de activos digitales: [ESPECIFICAR]
- Marco contable aplicable (IFRS, US GAAP, Plan General Contable español): [ESPECIFICAR]
- Propósito de la valoración (auditoría externa anual, due diligence para M&A, reporting interno, colateral para financiación): [ESPECIFICAR]
- Frecuencia de reporte deseada: [ESPECIFICAR]

Tarea 1 — Marco contable para activos digitales:
Explica el tratamiento contable actual de los diferentes tipos de activos digitales según los principales marcos normativos:
a) Criptomonedas (BTC, ETH): clasificación como intangibles o inventario según IFRS, impacto de la volatilidad en la cuenta de resultados, norma IAS 38.
b) NFTs: tratamiento como activos intangibles únicos vs. inventario cuando son intercambiables, dificultad de amortización por vida útil indefinida.
c) Tokens de seguridad (STOs): posible clasificación como instrumentos financieros bajo IFRS 9.
d) Stablecoins: tratamiento como efectivo equivalente o activo financiero según el emisor y respaldo.
e) Novedades regulatorias: MiCA (Markets in Crypto-Assets Regulation) y su impacto en el reporting financiero europeo.

Tarea 2 — Metodologías de valoración de NFTs empresariales:
Desarrolla los métodos de valoración aplicables a NFTs con diferentes características:
- NFTs coleccionables o de arte digital: método comparativo con transacciones recientes en marketplaces, ajuste por rareza y liquidez.
- NFTs con utilidad real (acceso, membresía, certificación): método de capitalización de beneficios futuros esperados del uso del NFT.
- NFTs de activos reales tokenizados (inmuebles, obras de arte físicas): valor del activo subyacente más prima o descuento de liquidez blockchain.
- Impacto en la valoración de la liquidez del mercado secundario (marketplaces activos vs. activos sin mercado).

Tarea 3 — Proceso de auditoría de activos digitales:
Define el proceso de auditoría completo para verificar la existencia, propiedad y valoración de activos digitales en balance:
- Verificación on-chain: cómo consultar el blockchain para confirmar la tenencia real de NFTs y tokens (exploradores de blockchain, análisis de wallets).
- Custodia y control interno: segregación de duties para la gestión de claves privadas, política de wallets frías y calientes, procedimientos de backup.
- Pruebas de auditoría específicas: confirmación directa con custodios, reconciliación entre registros internos y estado on-chain, evaluación de controles de TI.

Tarea 4 — Reporting y disclosure de activos digitales:
Define los requisitos de información que deben incluirse en los estados financieros y el informe de gestión:
- Política contable adoptada para cada clase de activo digital.
- Movimientos durante el ejercicio (adquisiciones, disposiciones, variaciones de valor).
- Análisis de riesgos: riesgo de mercado, riesgo de custodia, riesgo regulatorio, riesgo de contraparte.
- KPIs no financieros relevantes para inversores y analistas.

Tarea 5 — Fiscalidad de activos digitales para empresas:
Resume el tratamiento fiscal vigente en España para empresas que poseen y operan con activos digitales: impuesto sobre sociedades por plusvalías realizadas, IVA en operaciones con criptoactivos (exención art. 135 Directiva IVA), obligaciones de información (modelo 172 y 173), y tratamiento de los ingresos por staking o yield farming.

Formato de respuesta: usa tablas para el marco contable comparativo por tipo de activo. Incluye un ejemplo numérico de valoración y sus asientos contables. Proporciona una plantilla de disclosure para los estados financieros.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Valorar, contabilizar y auditar activos digitales y NFTs en el balance de una empresa',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal de NFTs y activos digitales empresariales con IA',
                'description'      => 'Analiza el marco regulatorio europeo e internacional aplicable a la emisión y comercialización de NFTs y activos digitales en contextos empresariales, incluyendo MiCA y GDPR.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho tecnológico y regulación de criptoactivos, con experiencia en asesorar empresas que emiten o comercializan NFTs y activos digitales en Europa. Tu objetivo es ayudarme a navegar el complejo marco regulatorio aplicable a mi proyecto de activos digitales empresariales.

Información del proyecto:
- Tipo de activo digital (NFT de coleccionable, NFT de acceso a servicios, token de fidelización, token de seguridad, stablecoin corporativa): [ESPECIFICAR]
- País o países de emisión y distribución: [ESPECIFICAR]
- Modelo de negocio (venta directa al público, B2B, marketplace propio, whitelist privada): [ESPECIFICAR]
- Blockchain utilizada y protocolo de smart contract: [ESPECIFICAR]
- Datos personales que procesa o almacena la plataforma: [ESPECIFICAR]
- Volumen de transacciones previsto: [ESPECIFICAR]

Tarea 1 — Clasificación regulatoria bajo MiCA:
Analiza si el activo digital planificado queda dentro o fuera del ámbito de aplicación del Reglamento MiCA (UE 2023/1114):
a) NFTs únicos: criterios de exclusión del ámbito de MiCA para NFTs con características realmente únicas y no fungibles.
b) Colecciones de NFTs: cuándo una colección puede ser considerada fungible y caer bajo la regulación.
c) Token de utilidad (utility token): requisitos de white paper, obligaciones de la entidad emisora, categorías de exención.
d) Token referenciado a activos (ART): régimen más estricto aplicable si el NFT tiene respaldo en activos reales.
e) Obligaciones de registro y autorización ante la CNMV u organismo equivalente en el país de establecimiento.

Tarea 2 — Derechos de autor y propiedad intelectual en NFTs:
Clarifica el marco legal de propiedad intelectual aplicable:
- Compra de un NFT vs. compra de los derechos de autor de la obra subyacente: por qué son conceptos separados.
- Licencias que se pueden vincular al NFT: tipos de licencias, limitaciones territoriales y temporales.
- Uso de IA generativa para crear arte de NFT: estado actual de la protección por derechos de autor en la UE.
- Tratamiento de obras derivadas y remix: cuándo se necesita autorización del autor original.

Tarea 3 — Cumplimiento GDPR en plataformas de activos digitales:
Analiza los desafíos específicos de compatibilizar blockchain con el GDPR:
- El derecho al olvido (art. 17 GDPR) en datos inmutables almacenados on-chain: soluciones técnicas (off-chain storage, hash de datos, zero-knowledge proofs).
- Responsable del tratamiento en blockchains descentralizadas: quién responde ante la autoridad de control.
- KYC/AML en plataformas de activos digitales: obligaciones bajo la Directiva AML6 y el Reglamento de Transferencias de Fondos ampliado a criptoactivos (TFR).
- Transferencias internacionales de datos en redes blockchain globales.

Tarea 4 — Fiscalidad de NFTs: obligaciones del emisor y del adquirente:
Explica el tratamiento fiscal vigente en España para:
- IVA en la venta de NFTs: criterios de sujeción, tipo aplicable, lugar de prestación en ventas internacionales.
- IRPF e IS en las ganancias obtenidas por la venta de NFTs.
- Royalties automáticos en smart contracts: cuándo constituyen rendimiento de actividad económica.
- Obligaciones de información del marketplace al fisco.

Tarea 5 — Contratos inteligentes y su validez jurídica:
Analiza la validez legal de los smart contracts en el derecho español y europeo:
- Reconocimiento como contratos vinculantes: elementos esenciales del contrato que deben estar presentes.
- Jurisdicción y ley aplicable en smart contracts transfronterizos.
- Mecanismos de resolución de conflictos cuando un smart contract ejecuta algo no previsto por las partes.
- Propuesta de cláusulas legales que deben acompañar a cualquier emisión de NFT empresarial.

Formato de respuesta: usa tablas para la clasificación regulatoria por tipo de activo. Proporciona un checklist legal de cumplimiento previo al lanzamiento. Incluye ejemplos de cláusulas contractuales y avisos legales para NFTs empresariales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Navegar el marco regulatorio de MiCA, GDPR y propiedad intelectual en proyectos de NFTs empresariales',
                'vote_score'       => 25,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte técnico para plataformas de activos digitales con IA',
                'description'      => 'Diseña protocolos de atención al cliente para usuarios de plataformas de NFTs y activos digitales, gestionando incidencias técnicas y educando a usuarios no técnicos en el ecosistema blockchain.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en experiencia de cliente y soporte técnico para plataformas digitales del ecosistema blockchain. Tu objetivo es ayudarme a diseñar procesos eficaces de atención al cliente para una plataforma de emisión, venta o gestión de NFTs y activos digitales, donde los usuarios combinan problemas técnicos complejos con una curva de aprendizaje muy pronunciada.

Contexto de la plataforma:
- Tipo de plataforma (marketplace de NFTs, plataforma de emisión corporativa, exchange con activos digitales, plataforma de fidelización blockchain): [ESPECIFICAR]
- Perfil del usuario (consumidores sin experiencia crypto, empresas, coleccionistas expertos, inversores): [ESPECIFICAR]
- Canales de soporte disponibles (chat en vivo, email, Discord, Telegram, centro de ayuda): [ESPECIFICAR]
- Volumen de tickets mensuales actual o previsto: [ESPECIFICAR]
- Tamaño del equipo de soporte: [ESPECIFICAR]
- Idiomas de atención requeridos: [ESPECIFICAR]

Tarea 1 — Taxonomía de incidencias en plataformas blockchain:
Clasifica las categorías de soporte más frecuentes en plataformas de activos digitales y define el flujo de resolución para cada una:
a) Problemas de wallet (no puedo conectar mi wallet, MetaMask no reconoce la red, fondos bloqueados en transacción pendiente).
b) Problemas de autenticación y acceso (pérdida de seed phrase, recuperación de cuenta con custodia centralizada, doble autenticación bloqueada).
c) Incidencias de transacción (NFT comprado no aparece en mi wallet, gas fee muy alto, transacción fallida con cargo).
d) Dudas sobre propiedad y derechos (¿qué puedo hacer con mi NFT?, ¿cómo transfiero a otra wallet?, ¿puedo revender?).
e) Problemas técnicos de la plataforma (carga lenta, error en el mint, smart contract revertido).

Tarea 2 — Base de conocimiento y autoservicio:
Diseña la estructura completa del centro de ayuda adaptado a usuarios de todos los niveles:
- Sección para principiantes: qué es una wallet, cómo instalar MetaMask, cómo conectar a la plataforma, glosario básico de términos blockchain en lenguaje accesible.
- Sección intermedia: cómo transferir NFTs entre wallets, gestión de gas fees, diferencia entre redes blockchain.
- Sección avanzada: integración con hardware wallets, lectura de exploradores de blockchain, interacción directa con smart contracts.
- Videos tutoriales: lista de los 10 tutoriales en vídeo más necesarios con guión resumido de cada uno.

Tarea 3 — Protocolos de respuesta ante incidencias críticas:
Define el protocolo de respuesta ante los escenarios de mayor impacto y urgencia:
- Pérdida irreversible de activos por error del usuario (enviado a dirección incorrecta, seed phrase perdida): comunicación empática que gestione expectativas realistas sobre la imposibilidad de recuperación en blockchain.
- Sospecha de hack o phishing que ha vaciado la wallet de un usuario.
- Fallo masivo de la plataforma durante un mint event o drop de alta demanda.
- Transacción de alto valor bloqueada por error técnico.

Tarea 4 — Educación proactiva del usuario:
Diseña una estrategia de customer education para reducir el volumen de tickets básicos:
- Secuencia de onboarding educativo para nuevos usuarios (correos, tooltips en app, checklists de configuración).
- Alertas preventivas antes de acciones irreversibles (confirmación de dirección destino, advertencia de red incorrecta).
- Newsletter mensual con actualizaciones de seguridad, nuevas funciones y mejores prácticas de gestión de activos digitales.
- Webinar mensual de preguntas frecuentes en directo para la comunidad.

Tarea 5 — Métricas de soporte para plataformas blockchain:
Define el cuadro de mando de soporte adaptado al sector: tiempo de primera respuesta, tasa de resolución en primer contacto, satisfacción del cliente (CSAT) por categoría de incidencia, ratio de autoservicio (tickets resueltos sin agente / total tickets), y tendencias de incidencias que señalan problemas de UX o técnicos recurrentes.

Formato de respuesta: usa árboles de decisión para los flujos de resolución de incidencias. Incluye guiones de respuesta a las situaciones más delicadas (pérdida de activos). Usa tablas para la estructura del centro de ayuda y las métricas de soporte.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar procesos de soporte para usuarios de plataformas de NFTs y activos digitales',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría freelance de estrategia NFT con IA',
                'description'      => 'Diseña tu propuesta de servicios como consultor independiente especializado en estrategia de NFTs y activos digitales para empresas que quieren explorar la tecnología blockchain.',
                'prompt_content'   => <<<'EOT'
Eres un consultor freelance especializado en estrategia de NFTs y activos digitales para empresas. Tu objetivo es ayudarme a posicionarme como referente en este nicho de consultoría, captar clientes corporativos de manera consistente y gestionar proyectos de alto valor de forma eficiente.

Información sobre mi perfil como consultor:
- Años de experiencia en el ecosistema blockchain y NFTs: [ESPECIFICAR]
- Especialización principal (estrategia de lanzamiento, tokenomics, comunidad, legal, técnica, marketing): [ESPECIFICAR]
- Proyectos destacados o casos de éxito en el portfolio: [ESPECIFICAR]
- Tarifa hora o proyecto actual: [ESPECIFICAR]
- Tipo de clientes que quiero priorizar (startups Web3, grandes empresas en transformación digital, marcas de lujo, sector entretenimiento): [ESPECIFICAR]
- Disponibilidad mensual en horas: [ESPECIFICAR]

Tarea 1 — Posicionamiento como consultor NFT empresarial:
Define tu nicho de posicionamiento ultra-específico en el mercado de consultoría blockchain:
a) El problema que resuelves de forma única: cómo evitar el hype y crear valor real con activos digitales.
b) Tu metodología diferencial: el proceso que sigues para pasar de idea a proyecto NFT exitoso.
c) A quién no ayudas: delimitar el tipo de proyecto o cliente que no aceptas para proteger tu reputación.
d) Tu prueba social: cómo demostrar credibilidad en un mercado lleno de charlatanes (proyectos públicos on-chain verificables, auditorías publicadas, artículos técnicos, ponencias en conferencias).

Tarea 2 — Catálogo de servicios de consultoría:
Define una oferta de servicios estructurada por nivel de inversión y compromiso:
- Servicio de entrada (diagnóstico rápido): auditoría de estrategia NFT existente o workshop de ideación de 4 horas para empresas que quieren explorar el espacio. Precio fijo, entregable único.
- Servicio medio (consultoría de proyecto): acompañamiento en el diseño e implementación de un proyecto NFT de 3 meses. Precio por retainer mensual.
- Servicio premium (partnership estratégico): asesor externo continuo para empresas con portfolio de activos digitales activo. Modelo de compensación mixto (honorarios + participación en el proyecto).

Tarea 3 — Propuesta comercial para un cliente corporativo:
Redacta una propuesta de consultoría completa para una marca de moda de lujo que quiere explorar NFTs como herramienta de fidelización y autenticación de productos. La propuesta debe incluir: diagnóstico del sector, oportunidad específica identificada, alcance del trabajo, metodología de trabajo, entregables, cronograma de 4 meses, inversión y condiciones comerciales.

Tarea 4 — Captación de clientes en el nicho blockchain:
Diseña tu estrategia de visibilidad y captación de clientes corporativos en el sector de activos digitales:
- Contenidos de autoridad: tipos de publicaciones en LinkedIn y Twitter/X que generan confianza en el sector (análisis de proyectos reales, opiniones sobre regulación MiCA, casos de estudio propios).
- Participación en el ecosistema: qué eventos físicos y hackathones asistir como expositor o ponente, cómo las contribuciones open source construyen reputación.
- Red de alianzas: bufetes de abogados especializados en crypto, auditoras de smart contracts, agencias de marketing Web3 con las que hacer co-marketing o referrals.
- Plataformas de contratación específicas: Toptal (si tiene vertical blockchain), Arc.dev, comunidades de Telegram y Discord de builders donde aparecen oportunidades de proyectos.

Tarea 5 — Gestión financiera de la consultoría freelance blockchain:
Detalla cómo gestionar las particularidades financieras de cobrar en un sector donde los clientes pueden querer pagar en criptomonedas:
- Aceptar pagos en crypto: ventajas fiscales y riesgos de volatilidad, cómo convertir a fiat de forma eficiente.
- Estructura de precios resistente a la volatilidad del mercado crypto: cuándo subir tarifas durante bull markets y cómo retener clientes en bear markets.
- Protección contractual: cláusulas esenciales en contratos de consultoría blockchain (propiedad intelectual de la estrategia, confidencialidad de tokenomics, limitación de responsabilidad en caso de pérdida de valor de los NFTs).
- Diversificación de ingresos: cursos online, libros blancos pagados, afiliaciones con plataformas blockchain como partner certificado.

Formato de respuesta: redacta la propuesta comercial en formato profesional listo para enviar. Usa tablas para el catálogo de servicios con precios orientativos. Incluye un modelo de contrato de confidencialidad específico para proyectos NFT.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Posicionarse y captar clientes corporativos como consultor freelance especializado en NFTs y activos digitales',
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
