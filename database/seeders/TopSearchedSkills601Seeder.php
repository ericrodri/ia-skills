<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills601Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing Web3 y blockchain con IA para proyectos crypto',
                'description'      => 'Diseña estrategias de marketing para proyectos blockchain, tokens y NFTs usando inteligencia artificial para crecer comunidades, generar confianza y atraer inversores y usuarios en el ecosistema Web3.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing Web3, estrategia de comunidades crypto y posicionamiento de proyectos blockchain. Necesito tu ayuda para diseñar una estrategia de marketing completa con inteligencia artificial para un proyecto blockchain en fase de lanzamiento.

Contexto del proyecto:
Lanzamos una plataforma DeFi (Finanzas Descentralizadas) que permite a usuarios particulares acceder a rendimientos de staking y yield farming con una interfaz simplificada y sin necesidad de conocimientos técnicos avanzados. El token nativo del protocolo se lanzará en tres meses. El mercado objetivo son usuarios de entre 25 y 45 años con interés en las criptomonedas pero frustrados por la complejidad de los protocolos DeFi actuales.

Objetivo de la estrategia:
Construir una comunidad de 50.000 miembros activos antes del lanzamiento del token y 10.000 usuarios registrados en los primeros 90 días post-lanzamiento.

Pilar 1 - Inteligencia de comunidad y análisis de competencia con IA:
Describe cómo usar la IA para analizar el ecosistema DeFi y entender a la comunidad objetivo. El sistema debe monitorizar los principales foros y canales del sector: Discord y Telegram de los protocolos DeFi líderes (Uniswap, Aave, Compound, Lido), los subreddits de criptomonedas como r/DeFi y r/CryptoCurrency, las conversaciones en X (Twitter) con hashtags relevantes y los informes de DeFiLlama y DappRadar sobre TVL y actividad de los protocolos. La IA debe identificar los puntos de dolor más frecuentes que los usuarios expresan sobre los protocolos DeFi actuales, las funcionalidades que más solicitan y el lenguaje que usan para describir sus necesidades. Define cómo transformar estos insights en mensajes de posicionamiento diferenciado que conecten directamente con las frustraciones reales de la comunidad.

Pilar 2 - Construcción de comunidad en canales Web3 con IA:
El marketing Web3 vive en Discord y Telegram. Diseña la arquitectura de comunidad y el plan de crecimiento para los tres meses previos al lanzamiento. Describe la estructura del servidor Discord: los canales de anuncio, los canales educativos (cómo funciona el protocolo, tutoriales de uso), los canales de gobernanza (para involucrar a la comunidad en las decisiones del protocolo), los canales de soporte técnico y los canales de discusión libre. Propón el programa de moderadores y embajadores de comunidad: cómo identificarlos, cómo compensarlos (tokens, acceso anticipado, rol especial) y cómo gestionarlos con herramientas de coordinación asistidas por IA. Define el calendario de eventos de comunidad que mantienen el engagement alto: AMAs con el equipo fundador, sesiones educativas sobre DeFi, concursos de predicción de TVL y hackathons de integración.

Pilar 3 - Estrategia de contenido educativo con IA:
En Web3, la educación es marketing. Diseña el programa de contenido educativo que posiciona al proyecto como referente en DeFi simplificado. Define los formatos: hilos de Twitter/X que explican conceptos complejos de DeFi en lenguaje accesible (impermanent loss, MEV, slippage, APY vs APR), vídeos cortos de YouTube que demuestran cómo usar el protocolo paso a paso, artículos de blog en Mirror.xyz sobre la visión del protocolo y los problemas que resuelve, y newsletters semanales con el estado del protocolo, las métricas de TVL y los próximos hitos del roadmap. Describe cómo la IA acelera la producción de contenido técnico sin comprometer la precisión: qué puede generar directamente la IA, qué necesita revisión técnica del equipo de desarrollo y cómo mantener un tono auténtico que resuene con la cultura crypto.

Pilar 4 - Estrategia de influencers y KOLs en el ecosistema crypto:
El marketing de influencers en crypto (Key Opinion Leaders o KOLs) tiene sus propias reglas y riesgos. Describe el proceso de selección y gestión de KOLs con IA. El sistema debe evaluar cada KOL potencial en base a: autenticidad de su audiencia (ratio de engagement real vs. seguidores, detección de seguidores bot), alineación temática con DeFi y finanzas descentralizadas (no solo crypto genérica), historial de proyectos que ha promovido y su resultado posterior, y transparencia en las colaboraciones pagadas según la normativa de publicidad. Define los niveles de colaboración: nano-influencers de nicho con audiencias muy comprometidas, influencers mid-tier con alcance medio y mega-influencers para visibilidad masiva en momentos clave del lanzamiento. Establece las métricas de retorno de cada tipo de colaboración.

Pilar 5 - Lanzamiento del token y gestión de la narrativa con IA:
El lanzamiento del token es el evento de marketing más importante del proyecto. Diseña la estrategia de comunicación para las 72 horas antes, durante y después del lanzamiento. Describe cómo la IA monitoriza en tiempo real las menciones del proyecto, el sentimiento de la comunidad y las conversaciones sobre el precio del token en los primeros momentos de trading, y cómo el equipo de marketing responde de forma proactiva a los narrativos negativos antes de que se viralicen. Define el protocolo de comunicación de crisis para los escenarios más probables: caída del precio en el primer día, error en el contrato inteligente, ataque de bots en el lanzamiento o narrativo negativo en redes sociales. Establece el calendario de anuncios post-lanzamiento que mantiene el momentum: integraciones con otros protocolos, nuevas funcionalidades y métricas de crecimiento que alimentan el relato de éxito del proyecto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Estrategia de marketing Web3 con IA para lanzamiento de protocolo DeFi y token',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de smart contracts con IA y auditoría de seguridad',
                'description'      => 'Diseña, implementa y audita contratos inteligentes en Solidity usando inteligencia artificial para detectar vulnerabilidades, optimizar el consumo de gas y garantizar la seguridad del código on-chain.',
                'prompt_content'   => <<<'EOT'
Eres un desarrollador de smart contracts senior con experiencia en Solidity, auditorías de seguridad blockchain y protocolos DeFi. Necesito tu guía técnica completa para desarrollar y auditar contratos inteligentes seguros usando inteligencia artificial como herramienta de asistencia en cada fase del proceso.

Contexto del proyecto:
Debo implementar un protocolo de staking de tokens ERC-20 en Ethereum y Polygon que permita a los usuarios depositar tokens, acumular recompensas según el tiempo y el importe depositado, y retirar fondos en cualquier momento. El protocolo manejará fondos de terceros, por lo que la seguridad es el requisito número uno. El TVL objetivo en los primeros 6 meses es de 5 millones de dólares.

Objetivo técnico:
Desarrolla la arquitectura del contrato, el código seguro y el proceso de auditoría asistidos por IA.

Módulo técnico 1 - Arquitectura y diseño del contrato de staking:
Describe la arquitectura óptima para un contrato de staking seguro y eficiente en gas. Explica el patrón de diseño de Checks-Effects-Interactions para prevenir ataques de reentrancia (el vector de ataque más común en DeFi, responsable de pérdidas de cientos de millones de dólares como en The DAO hack de 2016). Define la estructura de datos del contrato: el mapping de balances de usuarios, el sistema de acumulación de recompensas por bloque o por tiempo (usando el algoritmo de recompensas acumuladas por token depositado, similar al diseño de MasterChef de SushiSwap), y los controles de acceso con el patrón Ownable u OpenZeppelin AccessControl. Describe cómo el asistente de IA puede revisar el diseño arquitectónico antes de escribir una sola línea de código, identificando posibles vectores de ataque basándose en su conocimiento de los exploits más comunes en DeFi.

Módulo técnico 2 - Implementación en Solidity con asistencia de IA:
Explica cómo usar la IA como copiloto durante el desarrollo del contrato. Describe el flujo de trabajo: el desarrollador escribe la especificación funcional en lenguaje natural, la IA genera el esqueleto del contrato en Solidity siguiendo las mejores prácticas actuales, el desarrollador implementa la lógica de negocio, y la IA revisa cada función para detectar problemas comunes. Detalla los patrones de seguridad que la IA debe verificar en cada función: ausencia de desbordamientos aritméticos (usar SafeMath o Solidity 0.8+ que tiene verificaciones nativas), validación de todos los inputs de usuario, correcta gestión del estado antes de las llamadas externas, y uso de modificadores de acceso apropiados. Incluye el proceso de optimización de gas asistido por IA: cómo identificar las operaciones más costosas (escrituras en storage vs. memory, loops con coste variable) y cómo refactorizarlas sin comprometer la seguridad.

Módulo técnico 3 - Testing exhaustivo con IA:
Describe la estrategia de testing para el contrato de staking que la IA puede ayudar a diseñar y ejecutar. Define la suite de tests con Hardhat o Foundry: tests unitarios de cada función con casos normales, casos límite y casos de error (qué pasa si el usuario intenta retirar más de lo que tiene, qué pasa si el contrato queda sin fondos de recompensas, qué pasa si se llama a deposit con amount igual a cero). Describe el fuzzing testing con Foundry Fuzz Testing o Echidna: cómo la IA genera automáticamente cientos de inputs aleatorios para detectar comportamientos inesperados que los tests manuales no cubren. Diseña los tests de integración que simulan escenarios de ataque reales: ataques de reentrancia, flash loans que manipulan el precio del token de recompensa, y ataques de front-running en las transacciones de depósito y retiro.

Módulo técnico 4 - Auditoría de seguridad asistida por IA:
Describe el proceso de auditoría de seguridad usando IA como primera línea de defensa antes de contratar una auditoría externa profesional. Explica cómo usar herramientas de análisis estático como Slither, Mythril y MythX, y cómo interpretar sus resultados con la ayuda de la IA para distinguir los falsos positivos de las vulnerabilidades reales. Detalla las categorías de vulnerabilidades que la IA debe revisar específicamente: reentrancy, integer overflow/underflow, access control issues, front-running, timestamp dependence, denial of service patterns, y lógica de negocio incorrecta. Describe cómo preparar el informe de auditoría interna que documenta cada hallazgo, su nivel de severidad (crítico, alto, medio, bajo) y la solución implementada, para presentarlo a los auditores externos como parte del proceso de auditoría formal.

Módulo técnico 5 - Despliegue, monitorización y actualización del protocolo:
Aborda las consideraciones de despliegue y la gestión del protocolo en producción. Describe el proceso de despliegue con scripts de Hardhat o Foundry en testnet (Sepolia, Mumbai) y mainnet, con verificación automática del código en Etherscan. Diseña el sistema de monitorización on-chain con herramientas como OpenZeppelin Defender o Tenderly: alertas automáticas cuando el TVL cae más del 20% en una hora (posible hack), cuando se ejecutan funciones privilegiadas del contrato, o cuando el saldo del contrato de recompensas cae por debajo del mínimo de reserva. Describe las estrategias de actualización del contrato: el patrón proxy transparente (OpenZeppelin Upgradeable Contracts), sus riesgos de centralización y cómo mitigarlos con un timelock de 48 horas para las actualizaciones y un multisig de gobernanza que requiere 3 de 5 firmas para ejecutar cambios.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 75,
                'use_case'         => 'Desarrollo y auditoría de smart contracts DeFi seguros con asistencia de IA',
                'vote_score'       => 58,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de interfaces Web3 y UX para aplicaciones blockchain con IA',
                'description'      => 'Crea experiencias de usuario intuitivas para dApps, wallets y plataformas DeFi usando inteligencia artificial para simplificar la complejidad técnica del blockchain y hacer Web3 accesible a usuarios no técnicos.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador UX/UI especializado en aplicaciones Web3, dApps y experiencias de usuario para el ecosistema blockchain. Necesito tu guía completa para diseñar la interfaz de una plataforma DeFi que sea intuitiva para usuarios sin experiencia técnica en blockchain, usando inteligencia artificial como herramienta de diseño y análisis de comportamiento.

Contexto del proyecto de diseño:
La plataforma DeFi permite a usuarios particulares hacer staking de tokens y recibir recompensas. El problema central de diseño es que el proceso implica pasos técnicos que confunden a usuarios no nativos de Web3: instalar una wallet, aprobar tokens (approve transaction), confirmar transacciones con gas fees variables y entender los riesgos de los smart contracts. La tasa de abandono en el onboarding de otras dApps similares supera el 70%.

Objetivo del diseño:
Diseñar una experiencia de usuario que reduzca la tasa de abandono en el onboarding al 30% y consiga que el usuario complete su primera transacción de staking en menos de 10 minutos.

Sección de diseño 1 - Research de usuarios Web3 con IA:
Describe el proceso de investigación de usuarios para entender las barreras de entrada al DeFi. La IA puede analizar miles de posts en Reddit, Twitter y Discord donde los usuarios describen sus frustraciones con las interfaces de otras dApps: qué les confunde de las wallet approvals, qué mensajes de error los asustan, por qué no entienden el concepto de gas fees, y qué les genera desconfianza sobre la seguridad de sus fondos. Define las entrevistas de usuario que debes realizar: el perfil del "crypto curious" (tiene Bitcoin o ETH en Coinbase pero nunca ha usado DeFi), el perfil del "DeFi intermediate" (usa Uniswap pero lo encuentra complicado) y el perfil del "crypto native" (ya usa protocolos DeFi avanzados). Para cada perfil, identifica los puntos de dolor específicos en el onboarding y los criterios de éxito desde su perspectiva.

Sección de diseño 2 - Arquitectura de información y flujos de usuario:
Diseña la arquitectura de información de la plataforma y los flujos de usuario principales. Define el flujo de onboarding para un usuario nuevo: cómo conectar la wallet (MetaMask, WalletConnect, Coinbase Wallet) de forma que el usuario entienda qué está haciendo y por qué necesita una wallet, cómo hacer el primer depósito de tokens con un UI que explica cada paso en lenguaje sencillo (sin jerga técnica como "approve ERC-20 allowance"), y cómo visualizar las recompensas acumuladas de forma que el usuario entienda cómo crece su posición. Propón el sistema de progressive disclosure: cómo mostrar primero la información esencial y revelar progresivamente los detalles técnicos (APY calculado, block confirmations, smart contract address) solo a los usuarios que los solicitan activamente.

Sección de diseño 3 - Diseño visual y sistema de design tokens para Web3:
Describe el lenguaje visual de la plataforma. En Web3, la estética dark mode con acentos en púrpura, azul eléctrico o verde neón es dominante (Uniswap, Aave, Compound). Analiza si adoptar esta estética familiar para los usuarios crypto o diferenciarse con un diseño más limpio y minimalista que transmita confianza a los usuarios menos técnicos. Define el design system: tipografía (monoespaciada para los valores numéricos y las direcciones de wallet, para reforzar la precisión), paleta de color con semáforo de riesgo (verde para transacciones confirmadas, amarillo para pendientes, rojo para errores), iconografía específica de blockchain (tokens, wallets, smart contracts) y los microcomponentes más críticos de la UX Web3: el badge de red (Ethereum, Polygon), el selector de slippage y el estimador de gas fees con explicación en lenguaje natural de cuánto cuesta y por qué varía.

Sección de diseño 4 - Gestión de errores y estados de transacción con IA:
El mayor reto de UX en Web3 son los estados de transacción: el usuario hace clic en "Depositar" y durante los siguientes 15 segundos no sabe si ha funcionado o no. Diseña el sistema de feedback de transacciones que elimina la incertidumbre. Define los estados de transacción que el usuario debe ver: firma pendiente en la wallet, transacción enviada a la mempool con hash visible, número de confirmaciones necesarias vs. obtenidas y confirmación final con el saldo actualizado. Describe cómo la IA puede generar mensajes de error en lenguaje natural que expliquen el problema y la solución: en lugar de "Transaction reverted: ERC20: transfer amount exceeds allowance", el usuario ve "Necesitas autorizar primero a la plataforma para mover tus tokens. Haz clic aquí para hacerlo en un paso". Define los flujos de recuperación de error más comunes y cómo guiar al usuario para resolverlos sin perder su confianza.

Sección de diseño 5 - Testing de usabilidad y optimización continua con IA:
Diseña el programa de testing de usabilidad para la plataforma DeFi. Describe las sesiones de test moderadas con los tres perfiles de usuario definidos: las tareas a completar (conectar wallet, hacer staking de 100 USDC, ver recompensas, retirar fondos), las métricas de usabilidad a medir (tiempo hasta primera transacción completada, número de errores cometidos, tasa de abandono por pantalla) y el protocolo de think-aloud para capturar las dudas y confusiones en tiempo real. Define cómo usar la IA para analizar las grabaciones de sesiones (con herramientas como FullStory o Hotjar) y los mapas de calor para identificar automáticamente los puntos de fricción más críticos. Propón el proceso de optimización continua post-lanzamiento: cómo priorizar los experimentos A/B, qué métricas determinan el éxito de cada cambio y cómo integrar el feedback de la comunidad en el ciclo de diseño de cada sprint.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseño UX/UI de plataforma DeFi accesible con asistencia de inteligencia artificial',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas B2B de soluciones blockchain empresariales con IA',
                'description'      => 'Desarrolla un proceso de ventas consultivo con IA para comercializar soluciones de blockchain empresarial, tokenización de activos y trazabilidad on-chain a grandes corporaciones y organismos públicos.',
                'prompt_content'   => <<<'EOT'
Eres un director de ventas especializado en la venta de soluciones de tecnología blockchain a grandes empresas y organismos del sector público. Necesito tu ayuda para construir un proceso de ventas consultivo completo, asistido por inteligencia artificial, para comercializar soluciones de blockchain empresarial en el mercado español y europeo.

Perfil de la solución:
Vendemos una plataforma de blockchain empresarial (basada en Hyperledger Fabric o Quorum privado) para casos de uso como: trazabilidad de cadena de suministro (desde el proveedor hasta el consumidor final), digitalización de documentos y contratos con valor legal, tokenización de activos reales (facturas, inmuebles, derechos de carbono) y sistemas de votación electrónica para organismos públicos. El ticket promedio de un proyecto piloto es de 150.000 euros y el de un despliegue completo oscila entre 500.000 y 3 millones de euros.

Objetivo de ventas:
Construye el proceso de ventas y el sistema de generación de pipeline para cerrar 6 proyectos de blockchain empresarial en los próximos 12 meses.

Apartado de ventas 1 - Prospección y cualificación de oportunidades con IA:
Describe el sistema de prospección de oportunidades de blockchain empresarial. Los sectores con mayor adopción actual en España son: alimentación y agroalimentario (trazabilidad de origen y certificaciones de calidad), logística y transporte (visibilidad de la cadena de suministro), farmacéutico (trazabilidad de medicamentos según el Reglamento Falsified Medicines Directive), sector público (notaría digital, registro de títulos, votación) y energía (certificados de origen renovable y mercados de carbono). Para cada sector, define las empresas objetivo: las del TOP 100 de facturación de España con operaciones de cadena de suministro complejas. Describe cómo la IA monitoriza las señales de compra: proyectos piloto de blockchain anunciados en prensa del sector, convocatorias de licitación pública con componente de tecnología distribuida, publicaciones de directivos sobre problemas de trazabilidad o fraude en su cadena de suministro.

Apartado de ventas 2 - Discovery y construcción del caso de negocio:
Diseña el proceso de discovery para proyectos de blockchain empresarial, donde el ciclo de venta puede ser de 12 a 36 meses y el proceso de decisión implica a tecnología, operaciones, legal y dirección general. Define las 20 preguntas de discovery más críticas: qué problemas de trazabilidad o verificación tiene actualmente la empresa, cuánto le cuesta cada año un problema de fraude o falsificación de producto, cuántos socios de la cadena de suministro deberían integrarse en la solución, si tienen experiencia previa con blockchain (proyectos piloto fallidos previos son frecuentes y hay que gestionarlos), y cuál es su posición sobre la gestión de los datos en una infraestructura compartida con competidores. Describe cómo la IA procesa las notas del discovery para identificar el caso de uso más sólido y el argumento financiero más convincente para ese cliente específico.

Apartado de ventas 3 - Gestión del comité de compra y los escépticos del blockchain:
En la venta de blockchain empresarial, el escepticismo es la regla. El término "blockchain" ha generado mucha decepción por proyectos piloto fallidos entre 2017 y 2020. Diseña la estrategia para manejar el comité de compra compuesto por perfiles con posiciones muy distintas: el CTO escéptico que preguntará "¿por qué necesitamos blockchain y no una base de datos compartida normal?", el director de operaciones que quiere ver el ROI claro antes de comprometer a sus equipos en la integración, el director legal que necesita entender la validez legal de los registros on-chain, y el CFO que ve el blockchain como una tecnología cara con casos de uso poco claros. Desarrolla el argumentario específico para cada perfil y las respuestas modelo a las 10 objeciones más frecuentes en la venta de blockchain empresarial.

Apartado de ventas 4 - Estrategia de prueba de concepto y piloto:
El piloto o prueba de concepto (PoC) es el momento decisivo en la venta de blockchain empresarial. Diseña la estrategia de estructuración del piloto que maximiza la probabilidad de conversión a proyecto completo. Define el alcance óptimo del piloto: suficientemente amplio para demostrar valor real pero suficientemente acotado para completarse en 8-12 semanas con un presupuesto de 30.000 a 80.000 euros. Describe los criterios de éxito del piloto que deben acordarse antes de empezar: cuántos nodos participantes, qué volumen de transacciones, qué métricas de eficiencia o reducción de costes demostrarán el valor. Define cómo usar la IA para generar el informe de resultados del piloto que el sponsor interno del cliente usará para presentar el caso de inversión al comité de dirección y conseguir la aprobación del proyecto completo.

Apartado de ventas 5 - Cierre y gestión del ecosistema de socios:
Describe el proceso de cierre y la estrategia de ecosistema para proyectos de blockchain empresarial. Los proyectos de blockchain requieren la participación de múltiples socios de la cadena de suministro del cliente, lo que convierte la venta en una venta múltiple simultánea a todos los participantes del consorcio. Diseña la estrategia de venta en red: cómo usar al cliente ancla para facilitar la adopción por parte del resto de participantes del consorcio, cómo estructurar el modelo de precios por nodo participante que crece con cada nueva incorporación, y cómo gestionar el proceso de onboarding técnico de socios con distintos niveles de madurez tecnológica. Define el modelo de partnership con integradores de sistemas (Accenture, Capgemini, Indra) que pueden actuar como prescriptores en grandes proyectos de transformación digital donde el blockchain es un componente más.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Proceso de venta consultiva de blockchain empresarial a grandes corporaciones con IA',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management de protocolo DeFi con IA y tokenomics',
                'description'      => 'Define la visión de producto, el roadmap y el diseño de tokenomics de un protocolo DeFi usando inteligencia artificial para analizar datos on-chain, comportamiento de usuarios y dinámica del mercado crypto.',
                'prompt_content'   => <<<'EOT'
Eres un Product Manager con experiencia en protocolos DeFi, diseño de tokenomics y gestión de productos Web3. Necesito tu ayuda para definir la estrategia de producto completa de un protocolo DeFi de staking, incluyendo el diseño del sistema de incentivos tokenomics y el roadmap de funcionalidades para los próximos cuatro trimestres.

Contexto del protocolo:
El protocolo permite a usuarios depositar tokens USDC o ETH, que se despliegan automáticamente en las estrategias de yield más rentables del ecosistema DeFi (Aave, Compound, Curve Finance) mediante un sistema de rebalanceo automático gestionado por IA. El token de gobernanza del protocolo (YIELD) se distribuye entre los usuarios que aportan liquidez y entre los validadores que ejecutan las estrategias. El TVL actual es de 8 millones de dólares y el objetivo es 80 millones en 18 meses.

Objetivo del product management:
Construye el marco de gestión de producto para escalar el protocolo de 8 a 80 millones de TVL.

Dimensión estratégica 1 - Análisis de datos on-chain con IA para el discovery:
Describe cómo usar la IA y el análisis de datos on-chain para entender el comportamiento de los usuarios del protocolo. Las plataformas de análisis blockchain como Dune Analytics, Nansen o Flipside Crypto permiten analizar el comportamiento de cada wallet que interactúa con el protocolo: con qué frecuencia deposita y retira, qué importe promedio mantiene, si usa otros protocolos DeFi simultáneamente (señal de usuario sofisticado), si proviene de un exchange centralizado (señal de usuario nuevo en DeFi) y cuánto tiempo permanece antes de retirar sus fondos. Define los segmentos de usuario que emergen de este análisis y las funcionalidades que cada segmento necesita: el whale (más de 100.000 dólares) necesita opciones de rendimiento personalizado y atención directa; el usuario retail (1.000 a 10.000 dólares) necesita simplicidad y educación; el usuario institucional necesita informes fiscales, auditorías y API de integración.

Dimensión estratégica 2 - Diseño de tokenomics con IA:
El diseño del sistema de incentivos del token YIELD es la decisión de producto más importante del protocolo. Describe el proceso de diseño de tokenomics asistido por IA. Define la distribución del supply total: qué porcentaje va a los proveedores de liquidez (liquidity mining), qué porcentaje al equipo y advisors con vesting de 3-4 años, qué porcentaje al tesoro del protocolo para financiar el desarrollo futuro y qué porcentaje a la venta pública. Diseña el sistema de emisión de recompensas: cómo decrecen las emisiones de YIELD con el tiempo (halving schedule similar a Bitcoin o curva de emisión exponencialmente decreciente), cómo se distribuyen las recompensas entre los distintos pools de liquidez según el TVL y la importancia estratégica de cada pool, y qué mecanismos de quema de tokens (buyback and burn con las comisiones del protocolo) crean presión deflacionaria sobre el supply.

Dimensión estratégica 3 - Gobernanza descentralizada del protocolo:
Define el sistema de gobernanza on-chain del protocolo usando el token YIELD. Describe el diseño del DAO (Decentralized Autonomous Organization): cómo los poseedores de YIELD pueden proponer y votar cambios en el protocolo (nuevas estrategias de yield, cambios en los parámetros de riesgo, distribución de los fondos del tesoro), el quorum mínimo necesario para que una propuesta sea válida, el timelock de 48-72 horas entre la aprobación de una propuesta y su ejecución on-chain. Analiza los mecanismos de participación en la gobernanza que han funcionado en otros protocolos (veTokenomics de Curve Finance, Snapshot para votación off-chain sin coste de gas) y propón el diseño de gobernanza que maximiza la participación de la comunidad sin comprometer la velocidad de decisión en situaciones de emergencia.

Dimensión estratégica 4 - Roadmap de producto y gestión de riesgo:
Define el roadmap de funcionalidades para los próximos cuatro trimestres con foco en el crecimiento del TVL. Trimestre 1: integración de nuevas estrategias de yield (Yearn Finance, Convex, Pendle Finance) y lanzamiento en Arbitrum y Base para reducir los costes de gas de los usuarios. Trimestre 2: lanzamiento del módulo de yield institucional con informes de cumplimiento normativo y API para integraciones. Trimestre 3: sistema de yield personalizado donde los usuarios eligen su perfil de riesgo-rendimiento y la IA selecciona automáticamente la estrategia óptima. Trimestre 4: lanzamiento del sistema de seguro on-chain que cubre a los usuarios ante exploits de los protocolos subyacentes. Para cada iniciativa, define el impacto esperado en TVL, el coste de desarrollo en tiempo y equipo, y los riesgos técnicos y de mercado más relevantes.

Dimensión estratégica 5 - Métricas de producto y framework de decisión:
Define el sistema de métricas para un protocolo DeFi. Establece la métrica North Star: el TVL no es suficiente porque puede estar inflado por capital mercenario; la métrica más significativa es el "retention TVL" (capital que permanece más de 30 días), que indica confianza real en el protocolo. Define el cuadro de métricas completo: TVL por pool y por cadena, APY promedio generado vs. la competencia, coste de adquisición por dólar de TVL (cuánto gasta el protocolo en incentivos por cada dólar que atrae), tasa de retención del TVL a 7, 30 y 90 días, número de wallets únicas activas por semana, y ratio de participación en la gobernanza (holders que votan vs. total). Describe cómo la IA analiza estos datos para identificar señales tempranas de fuga de capital y proponer acciones correctivas antes de que el TVL caiga.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Estrategia de producto y tokenomics para protocolo DeFi con análisis on-chain con IA',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de talento en empresas Web3 y blockchain con IA',
                'description'      => 'Diseña estrategias de atracción, selección y retención de talento especializado en blockchain, smart contracts y Web3 para startups y empresas en el ecosistema crypto, usando inteligencia artificial en cada fase del proceso.',
                'prompt_content'   => <<<'EOT'
Eres un director de RRHH especializado en la captación y gestión de talento tecnológico para empresas del ecosistema Web3, blockchain y criptomonedas. Necesito tu ayuda para diseñar un programa completo de gestión del talento para una empresa del sector que compite por los mejores desarrolladores, diseñadores y product managers del mercado global de blockchain.

Contexto de la empresa:
Somos un protocolo DeFi con 45 empleados remotos repartidos en 12 países. Necesitamos contratar 20 personas en los próximos 6 meses: principalmente ingenieros de smart contracts (Solidity), ingenieros de backend con experiencia en indexación blockchain (The Graph, subgraphs), diseñadores UX especializados en Web3 y un head of growth con experiencia en marketing crypto. El mercado de talento blockchain es global, extremadamente competitivo y con una escasez severa de profesionales cualificados.

Objetivo del programa:
Diseña el sistema de atracción, selección y retención de talento Web3 que permita contratar a los 20 mejores candidatos disponibles globalmente.

Bloque de talento 1 - Mapa del mercado de talento blockchain con IA:
Describe cómo usar la IA para mapear el mercado global de talento blockchain antes de iniciar el reclutamiento. El sistema debe identificar y clasificar a los desarrolladores de smart contracts más activos en GitHub (análisis de repositorios de Solidity, contribuciones a proyectos open-source DeFi de referencia como OpenZeppelin, Uniswap, Aave), los ingenieros que publican artículos técnicos sobre blockchain en Mirror.xyz, Substack o Medium, los ponentes en conferencias blockchain (ETHGlobal, Devcon, EthCC) y los participantes activos en hackathones blockchain donde demuestran habilidades prácticas reales. Define el perfil de talento de cada posición con criterios técnicos objetivos: para un ingeniero de smart contracts senior, qué proyectos de Solidity en producción con TVL real son evidencia de excelencia, a diferencia de quien solo tiene tutoriales en GitHub.

Bloque de talento 2 - Employer branding en el ecosistema Web3:
El talento blockchain elige sus proyectos por valores, visión y cultura tanto como por el salario. Diseña la estrategia de employer branding para atraer a los mejores del ecosistema. Define el relato auténtico de la empresa: qué problema real resuelve el protocolo, qué impacto tiene en democratizar las finanzas, cuál es la visión a largo plazo y por qué trabajar aquí es más significativo que hacerlo en una BigTech. Describe los canales donde este relato debe estar presente: el repositorio de GitHub público (la calidad del código y la documentación dice más que cualquier descripción de empresa), el blog técnico donde el equipo comparte sus aprendizajes de ingeniería, la participación activa de los ingenieros en los foros técnicos de Ethereum y los hackathones que organiza o patrocina la empresa. Define el paquete de compensación que compite en el mercado global: salario en fiat, tokens de gobernanza con vesting de 4 años, trabajo 100% remoto y con horario flexible, y budget de formación y conferencias.

Bloque de talento 3 - Proceso de selección técnica con IA para perfiles blockchain:
Diseña el proceso de evaluación técnica para contratar ingenieros de smart contracts y backend blockchain. Describe las fases: revisión del portfolio on-chain (análisis de los contratos que el candidato ha desplegado en mainnet, verificación de la calidad del código en Etherscan, evaluación del TVL que han manejado sus contratos), prueba técnica de toma a casa (audit de un contrato con vulnerabilidades conocidas donde el candidato debe identificarlas, o implementación de un mini-protocolo con especificaciones concretas), y la revisión técnica final con el equipo de ingeniería donde se discuten las decisiones de diseño de la prueba. Describe cómo la IA asiste en la revisión del código de los candidatos: análisis automático de patrones de seguridad, eficiencia de gas y calidad del código en la prueba técnica, para priorizar qué candidatos merecen más tiempo del equipo humano.

Bloque de talento 4 - Gestión de equipos remotos globales en Web3 con IA:
Los equipos Web3 son nativamente remotos y globales. Diseña el sistema de gestión de equipos distribuidos. Describe las herramientas y procesos para coordinar un equipo asíncrono en 12 zonas horarias: cómo estructurar la comunicación en Discord (el hub central para equipos Web3), cómo gestionar los sprints de desarrollo con Notion o Linear en un entorno asíncrono, y cómo tomar decisiones de producto y arquitectura sin necesidad de reuniones síncronas que excluyan a los miembros del equipo en zonas horarias extremas. Define el sistema de evaluación del desempeño adaptado a una empresa Web3: en lugar de evaluaciones anuales convencionales, propón el uso de contribuciones on-chain verificables (código desplegado en producción, smart contracts auditados, TVL generado) y la participación activa en la gobernanza del protocolo como métricas objetivas de contribución.

Bloque de talento 5 - Retención y desarrollo de carrera en el ecosistema blockchain:
La retención de talento blockchain es el mayor desafío porque los ingenieros reciben ofertas continuamente de otros protocolos. Diseña el programa de retención y desarrollo profesional. Define el plan de vesting de tokens que alinea los incentivos del equipo con el éxito del protocolo a largo plazo: cliff de 1 año y vesting lineal de 3 años adicionales, con aceleración en caso de adquisición. Diseña el programa de desarrollo profesional específico para el ecosistema blockchain: budget para asistir a Devcon, EthCC y ETHGlobal, tiempo dedicado a contribuciones open-source durante el horario laboral, programa de investigación interno donde los ingenieros pueden dedicar el 20% de su tiempo a proyectos experimentales, y acceso a las últimas investigaciones de Ethereum Foundation y EIP discussions. Propón el programa de reconocimiento basado en contribuciones on-chain verificables donde los ingenieros más prolíficos reciben tokens adicionales y reconocimiento público en la comunidad del protocolo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Atracción y retención de talento blockchain y Web3 para equipos remotos globales',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de proyectos crypto y tokenización de activos con IA',
                'description'      => 'Evalúa la viabilidad financiera de proyectos blockchain, diseña modelos de tokenomics sostenibles y analiza oportunidades de tokenización de activos del mundo real usando inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en criptoactivos, tokenomics y valoración de proyectos blockchain. Necesito tu ayuda para desarrollar el marco financiero completo para evaluar proyectos crypto, diseñar modelos de tokenomics sostenibles y analizar oportunidades de tokenización de activos reales con el apoyo de inteligencia artificial.

Contexto del trabajo:
Trabajo en un family office que está construyendo una cartera de inversión en el ecosistema blockchain: inversiones en proyectos DeFi en etapa temprana (pre-token), compra de tokens de protocolos establecidos y exploración de oportunidades de tokenización de activos reales (real estate, derechos de carbono, facturas comerciales). El capital disponible para este vertical es de 10 millones de euros.

Objetivo del análisis:
Construye el framework de análisis financiero y de due diligence para cada categoría de inversión blockchain.

Marco financiero 1 - Valoración de protocolos DeFi con métricas on-chain:
Describe la metodología de valoración de protocolos DeFi usando datos on-chain y modelos de valoración adaptados al contexto blockchain. Las métricas de valoración más usadas en DeFi: el ratio Price/TVL (análogo al Price/Book en finanzas tradicionales), el ratio Price/Revenue (donde el revenue son las comisiones que genera el protocolo, equivalentes al cash flow de una empresa tradicional), y el Price/Fees en relación a los protocolos comparables del mismo sector. Explica cómo la IA puede extraer y analizar estos datos de fuentes como DeFiLlama, Token Terminal y Dune Analytics para construir tablas comparativas de valoración entre protocolos DeFi del mismo nicho. Define los ajustes necesarios para protocolos en distintas fases de madurez: un protocolo con 2 años de historial on-chain y revenue sostenible merece una valoración muy distinta a un protocolo nuevo con solo expectativas de crecimiento futuro.

Marco financiero 2 - Due diligence de inversión en proyectos blockchain:
Diseña el proceso de due diligence para invertir en proyectos blockchain en etapa pre-token o post-token. La due diligence técnica incluye: revisión del código de los smart contracts (o informe de auditoría de una firma reconocida como Trail of Bits, Consensys Diligence, OpenZeppelin), análisis de los incidentes de seguridad históricos y cómo fueron gestionados, evaluación de la descentralización real del protocolo (cuántos validadores, distribución del token de gobernanza, existencia de admin keys con poder de modificar el protocolo). La due diligence de tokenomics incluye: análisis del schedule de vesting del equipo y los inversores (señal de compromiso a largo plazo), evaluación de la inflación anual del token (emisiones de recompensas vs. mecanismos de quema), y modelización del impacto de los desbloqueos de tokens de inversores en el precio. Define las red flags que descalifican automáticamente una inversión: admin keys no renunciadas, concentración de más del 50% del token en 5 wallets, equipo anónimo sin historial verificable.

Marco financiero 3 - Modelización financiera de tokenomics:
Construye el framework de modelización financiera para el diseño y evaluación de tokenomics. Describe el modelo de simulación de la dinámica del token: cómo modelizar la curva de emisión de nuevos tokens (inflación), los mecanismos de quema o reducción de supply (deflación), la demanda de tokens generada por los usuarios del protocolo y las presiones de venta de los poseedores con vesting próximo a terminar. Propón las herramientas de modelización: hojas de cálculo avanzadas con escenarios de Monte Carlo, o herramientas especializadas como Machinations.io para simular dinámica de sistemas complejos. Describe cómo la IA puede asistir en la calibración del modelo con datos históricos de protocolos comparables: si un protocolo similar con el mismo mecanismo de emisión perdió el 90% de su valor en el ciclo bajista de 2022, qué ajustes al modelo de tokenomics hubieran generado mayor resiliencia.

Marco financiero 4 - Tokenización de activos del mundo real (RWA):
Analiza el framework financiero para evaluar y estructurar oportunidades de tokenización de activos reales. Los Real World Assets (RWA) más tokenizados actualmente: bonos del tesoro estadounidense (Ondo Finance, Maple Finance), facturas comerciales (Centrifuge, Goldfinch), inmuebles (RealT, Lofty) y derechos de carbono (Toucan Protocol, KlimaDAO). Para cada categoría, describe: el proceso legal de tokenización en el marco regulatorio europeo (MiCA, Directiva Mercados de Valores), la estructura del vehículo de inversión (SPV, trust o fund que posee el activo subyacente y emite los tokens), los rendimientos históricos y la liquidez del mercado secundario de los tokens, y los riesgos específicos (riesgo del emisor, riesgo de custodia del activo subyacente, riesgo de smart contract). Define los criterios de evaluación para una oportunidad de tokenización de activos reales desde la perspectiva de un family office conservador.

Marco financiero 5 - Gestión de cartera crypto con IA y gestión de riesgos:
Define el framework de gestión de cartera para la asignación de 10 millones de euros en el ecosistema blockchain. Describe la asignación estratégica: qué porcentaje en Layer 1 y Layer 2 establecidas (ETH, SOL, base layer), qué porcentaje en tokens DeFi blue chip (Aave, Uniswap, Curve), qué porcentaje en proyectos early-stage con mayor riesgo y mayor potencial, y qué porcentaje en RWA tokenizados de bajo riesgo. Diseña el sistema de gestión de riesgo asistido por IA: monitorización continua de la correlación entre activos de la cartera, alertas automáticas cuando la concentración en un protocolo supera el umbral máximo definido, análisis de las posiciones de otras wallets institucionales identificables on-chain (Blockchain Capital, a16z crypto, Paradigm) como señal de sentimiento institucional, y el proceso de rebalanceo trimestral de la cartera basado en las métricas on-chain actualizadas de cada protocolo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Framework de análisis financiero y due diligence para inversiones en proyectos blockchain',
                'vote_score'       => 51,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cumplimiento normativo MiCA y regulación crypto con IA para abogados',
                'description'      => 'Navega el Reglamento de Mercados de Criptoactivos (MiCA) de la UE, la regulación de stablecoins y las obligaciones de AML/KYC para proyectos blockchain, con inteligencia artificial como herramienta de análisis y cumplimiento normativo.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en regulación de criptoactivos, tecnología financiera y cumplimiento normativo en el ecosistema blockchain. Necesito tu análisis jurídico completo sobre el marco regulatorio aplicable a un protocolo DeFi que opera en la Unión Europea, con especial atención al nuevo Reglamento MiCA y sus implicaciones prácticas.

Contexto jurídico:
Un protocolo DeFi de staking y yield farming planea operar en la UE desde España, con usuarios de toda Europa. El protocolo emite un token de gobernanza (YIELD) que se distribuye entre los proveedores de liquidez y los usuarios activos. El protocolo también maneja USDC y otros stablecoins como parte de sus estrategias de yield. El equipo tiene dudas sobre si necesita licencia, qué obligaciones de KYC/AML aplican a un protocolo descentralizado y cómo gestionar la relación con los reguladores europeos.

Objetivo del análisis:
Proporciona el mapa regulatorio completo y las acciones jurídicas necesarias para operar con cumplimiento legal en la UE.

Área normativa 1 - Reglamento MiCA y clasificación de criptoactivos:
Analiza la aplicación del Reglamento de Mercados de Criptoactivos (MiCA), en vigor desde diciembre de 2024, al protocolo DeFi. Explica las tres categorías de criptoactivos que define MiCA y cómo clasificar el token YIELD: si es un utility token (acceso a servicios del protocolo), un asset-referenced token (respaldado por activos) o un e-money token (respaldado por moneda fiat). Describe la zona gris de MiCA para los protocolos DeFi "suficientemente descentralizados": el reglamento prevé que los protocolos sin un emisor o responsable identificable puedan quedar fuera de su ámbito de aplicación, pero los criterios de descentralización suficiente están aún sin definir con precisión por parte de ESMA. Analiza qué nivel de descentralización (en términos de gobernanza, control de los smart contracts y toma de decisiones) necesita el protocolo para argumentar que está fuera del alcance de MiCA, y los riesgos de esta posición jurídica.

Área normativa 2 - Obligaciones de proveedores de servicios de criptoactivos (CASP):
Si el protocolo o su empresa gestora entra en el ámbito de MiCA como Proveedor de Servicios de Criptoactivos (CASP), describe las obligaciones completas. Los CASP necesitan: autorización previa de la autoridad competente (CNMV en España), requisitos de capital mínimo según el tipo de servicio prestado, política de custodia segura de los activos de los clientes, obligaciones de información a los clientes sobre los riesgos (whitepaper del criptoactivo que cumple los requisitos de MiCA), políticas de gestión de conflictos de interés y continuidad del negocio, y requisitos de ciberseguridad y resiliencia operativa. Describe el proceso de solicitud de licencia CASP ante la CNMV: documentación necesaria, plazos de resolución esperados y los recursos necesarios (capital, equipo de cumplimiento, sistemas de control).

Área normativa 3 - AML/KYC en protocolos DeFi:
Analiza la aplicación de las obligaciones de prevención del blanqueo de capitales (AML) y verificación de identidad (KYC) a un protocolo DeFi. La 6ª Directiva AML (AMLD6) y su implementación española obligan a las entidades que prestan servicios con criptoactivos a identificar a sus clientes. El problema es que los protocolos DeFi son por diseño permissionless (cualquiera puede interactuar con el smart contract sin identificarse). Describe las distintas posiciones jurídicas posibles: el protocolo puro de smart contracts sin interfaz web controlada puede argumentar que no es sujeto obligado de AML, pero si el equipo controla la interfaz web (el frontend de la dApp), es probable que sea considerado sujeto obligado. Define las soluciones de compliance on-chain que están emergiendo en el mercado: los sistemas de KYC descentralizado con verificación de identidad on-chain (Proof of Humanity, Worldcoin, Polygon ID) que permiten filtrar usuarios sin que el protocolo procese datos personales directamente.

Área normativa 4 - Regulación de stablecoins y reservas bajo MiCA:
Analiza el impacto de las normas específicas de MiCA sobre las stablecoins (e-money tokens y asset-referenced tokens) en el protocolo. El USDC que el protocolo utiliza en sus estrategias de yield es un e-money token bajo MiCA y su emisor (Circle) debe cumplir con los requisitos de MiCA para operar en la UE. Describe las implicaciones para el protocolo: ¿puede un protocolo DeFi usar USDC en la UE sin restricciones después de la plena aplicación de MiCA?, ¿qué ocurre si Circle no obtiene o pierde la autorización bajo MiCA?, y qué alternativas de stablecoins reguladas bajo MiCA existen o están en proceso de obtener licencia en la UE. Analiza también el impacto del Reglamento de Transferencias de Fondos (TFR, "Travel Rule") en las transacciones de stablecoins: las obligaciones de identificación del ordenante y el beneficiario para transacciones superiores a 1.000 euros.

Área normativa 5 - Estructura jurídica óptima y relación con reguladores:
Recomienda la estructura jurídica óptima para operar el protocolo DeFi en el marco regulatorio europeo actual. Analiza las alternativas de domiciliación: España con regulación MiCA directamente aplicable (CNMV como supervisor), un estado con sandbox regulatorio activo (Gibraltar, Suiza para la estructura de la Fundación, Malta con su VFA Act para operaciones no MiCA). Describe la estrategia de relación proactiva con el regulador: cómo aproximarse a la CNMV antes del lanzamiento para presentar el proyecto, las ventajas del sandbox de innovación financiera de la CNMV para proyectos DeFi innovadores, y cómo documentar las decisiones de diseño del protocolo en términos de descentralización para construir el argumento jurídico de que el protocolo no necesita licencia MiCA. Define el equipo jurídico mínimo necesario: abogados de regulación financiera en España, un experto en smart contracts para la documentación técnico-jurídica y un especialista en AML para el programa de compliance.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 70,
                'use_case'         => 'Marco legal MiCA y AML/KYC para operar un protocolo DeFi en la Unión Europea',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte al usuario Web3 y gestión de comunidad crypto con IA',
                'description'      => 'Diseña un sistema de soporte al usuario y gestión de comunidad para proyectos blockchain y plataformas DeFi usando inteligencia artificial para escalar el soporte técnico y mantener el engagement de la comunidad crypto.',
                'prompt_content'   => <<<'EOT'
Eres un experto en soporte al usuario y gestión de comunidades para proyectos blockchain, dApps y plataformas DeFi. Necesito tu ayuda para diseñar el sistema completo de soporte al usuario y gestión de comunidad para un protocolo DeFi con 10.000 usuarios activos y una comunidad en Discord de 45.000 miembros.

Contexto del proyecto:
El protocolo DeFi recibe diariamente decenas de consultas técnicas de usuarios con distintos niveles de conocimiento: desde usuarios que no entienden por qué su transacción falló, hasta ingenieros que preguntan sobre los detalles técnicos de los smart contracts para construir integraciones. La comunidad en Discord y Telegram es activa pero también volátil: en momentos de caída de mercado o cuando el APY baja, el sentimiento puede volverse muy negativo muy rápidamente y los rumores de hack o rug pull se viralizan en minutos.

Objetivo del sistema:
Diseña el sistema de soporte y gestión de comunidad que mantiene la satisfacción del usuario alta y el sentimiento de la comunidad positivo incluso en momentos de estrés del mercado.

Componente de soporte 1 - Sistema de soporte técnico con IA para Web3:
Describe el sistema de soporte técnico de primer nivel con IA para resolver las consultas más frecuentes de usuarios DeFi. Las consultas más comunes en protocolos de staking: transacción fallida con error "insufficient gas", no aparece el saldo depositado en la interfaz aunque la transacción está confirmada en Etherscan, las recompensas no se acumulan como esperaban, error al intentar retirar fondos, y confusión sobre los gas fees y por qué varían. Para cada tipo de consulta, diseña el árbol de diagnóstico que el bot de IA sigue para resolver el problema sin intervención humana: cómo verificar el estado de la transacción on-chain con la hash del usuario, cómo identificar si el problema es de la interfaz web o del smart contract, y cuándo escalar al equipo técnico humano. Define los límites del soporte automatizado: qué problemas requieren siempre intervención humana (posibles fondos atrapados en el contrato, comportamientos anómalos del protocolo).

Componente de soporte 2 - Gestión de crisis de comunidad con IA:
Diseña el protocolo de gestión de crisis de comunidad para los escenarios más temidos en Web3. Escenario 1: rumor de hack o exploit que empieza a circular en Twitter y Discord. Describe el proceso de respuesta en los primeros 30 minutos: verificación técnica del estado del protocolo (revisión de las transacciones recientes en Etherscan, verificación de que los fondos del contrato están intactos), comunicado oficial de transparencia aunque el equipo no tenga aún toda la información, y cómo la IA monitoriza el volumen y el sentimiento de las menciones para alertar al equipo antes de que el rumor se viralice. Escenario 2: caída pronunciada del APY que genera descontento masivo en la comunidad. Diseña el protocolo de comunicación proactiva que explica las causas (cambios en el mercado de yield subyacente), las acciones que está tomando el protocolo para recuperar el rendimiento y el cronograma de nuevas estrategias. Define el tono comunicativo adecuado para cada escenario.

Componente de soporte 3 - Programa de moderadores y embajadores de comunidad:
Describe el sistema de moderación descentralizada de la comunidad Web3. Los protocolos DeFi no pueden pagar a moderadores profesionales para cubrir las 24 horas en todos los canales (Discord, Telegram, Twitter, Reddit), por lo que necesitan un programa de moderadores voluntarios de la comunidad incentivados con tokens. Define el programa de moderadores comunitarios: cómo seleccionarlos (miembros activos con buena reputación en la comunidad, sin historial de comportamiento tóxico, con conocimientos técnicos del protocolo), cómo formarlos (protocolo de respuesta a consultas frecuentes, cómo identificar y escalar casos que superan su conocimiento, cómo reconocer y reportar ataques de ingeniería social), y cómo compensarlos (tokens mensuales, rol especial en Discord, acceso anticipado a nuevas funcionalidades, invitación al evento anual de la comunidad). Describe las herramientas de coordinación de moderadores que la IA puede asistir: sistemas de ticketing, bases de conocimiento actualizadas y alertas de volumen inusual de consultas.

Componente de soporte 4 - Educación continua de usuarios con IA:
Los usuarios de DeFi necesitan educación continua para usar el protocolo de forma segura y sacar el máximo partido a sus funcionalidades. Diseña el programa de educación de usuarios asistido por IA. Define los formatos de contenido educativo adaptados al contexto Web3: hilos de Twitter explicativos sobre nuevas funcionalidades del protocolo, tutoriales interactivos en la interfaz del protocolo que guían al usuario la primera vez que ejecuta cada acción, sesiones de AMA (Ask Me Anything) semanales en Discord con el equipo del protocolo, y una academia online con cursos cortos sobre conceptos DeFi necesarios para usar el protocolo de forma óptima. Describe cómo la IA personaliza el contenido educativo según el nivel de conocimiento del usuario: detecta si es un usuario nuevo (primera conexión de wallet, saldo pequeño) o un usuario avanzado (múltiples transacciones, usa funciones avanzadas del protocolo) y adapta los recursos que le muestra proactivamente.

Componente de soporte 5 - Métricas de comunidad y salud del ecosistema con IA:
Define el sistema de métricas para medir la salud de la comunidad del protocolo. Las métricas de comunidad más significativas para un protocolo DeFi: el ratio de mensajes positivos vs. negativos en Discord (análisis de sentimiento automatizado con IA), el número de consultas de soporte por cada 1.000 transacciones (indicador de fricción en la experiencia de usuario), el tiempo medio de resolución de consultas de soporte, el porcentaje de usuarios que repiten depósito en los primeros 30 días (indicador de satisfacción real), y el Net Promoter Score de la comunidad medido en encuestas trimestrales. Describe cómo la IA correlaciona el sentimiento de la comunidad con los eventos del protocolo: una caída del APY genera cuántas consultas adicionales, un comunicado proactivo del equipo reduce el volumen de consultas en qué porcentaje, y qué tipo de contenido educativo genera mayor reducción en las consultas de soporte técnico. Propón el cuadro de mando semanal de salud de la comunidad que el equipo revisa cada lunes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Sistema de soporte técnico y gestión de comunidad crypto con IA para protocolo DeFi',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría freelance en blockchain y Web3 con IA',
                'description'      => 'Construye un negocio de consultoría freelance especializado en blockchain, smart contracts y estrategia Web3 para empresas que quieren entrar en el ecosistema crypto, usando la inteligencia artificial como ventaja competitiva.',
                'prompt_content'   => <<<'EOT'
Eres un consultor blockchain freelance senior con experiencia en proyectos DeFi, tokenización de activos y estrategia Web3 para empresas. Necesito tu ayuda para construir mi negocio de consultoría independiente en el nicho del blockchain empresarial y Web3, usando la inteligencia artificial como herramienta diferenciadora en mi práctica profesional.

Mi situación actual:
Tengo 8 años de experiencia en tecnología financiera y los últimos 3 años he trabajado en un proyecto DeFi donde he desarrollado expertise en smart contracts, tokenomics y estrategia de protocolos. Quiero lanzarme como consultor freelance para trabajar con empresas tradicionales que quieren explorar el blockchain, startups Web3 que necesitan orientación estratégica, y family offices interesados en invertir en el ecosistema crypto.

Objetivo de la sesión:
Diseña el plan completo para lanzar y escalar mi consultoría freelance blockchain en los próximos 18 meses.

Pilar estratégico 1 - Posicionamiento como experto blockchain:
Ayúdame a definir mi nicho específico dentro del campo del blockchain y Web3. Analiza cinco especializaciones posibles con su mercado potencial: consultoría de estrategia Web3 para grandes empresas que estudian cómo el blockchain puede transformar su negocio (cadena de suministro, tokenización de activos, pagos), auditorías de smart contracts para proyectos DeFi que necesitan validar la seguridad de su código antes de lanzar (mercado con una demanda enorme y escasez de auditores cualificados), diseño de tokenomics para proyectos que van a lanzar un token (un servicio que puede facturarse entre 20.000 y 80.000 euros por proyecto), consultoría de cumplimiento normativo MiCA para proyectos blockchain que necesitan orientación legal-técnica, y formación en blockchain para equipos directivos y técnicos de empresas del IBEX 35. Para cada especialización, describe el cliente típico, el ticket promedio por proyecto, la competencia existente y la escasez relativa de consultores especializados.

Pilar estratégico 2 - Estructura de servicios y propuesta de valor:
Diseña el catálogo de servicios de la consultoría con tres niveles de compromiso. Nivel 1 - Assessment estratégico de blockchain (2-3 semanas, honorarios de 6.000 a 12.000 euros): evalúo las necesidades del cliente, identifico los casos de uso de blockchain con mayor impacto potencial en su negocio y entrego un informe con la recomendación de si blockchain aporta valor real o si una base de datos convencional resuelve el problema mejor. Nivel 2 - Consultoría de diseño e implementación (2-6 meses, 800 a 1.500 euros por día): acompaño al cliente en el diseño técnico de la solución blockchain, la selección del protocolo o plataforma (Ethereum, Hyperledger, Polygon), la evaluación y selección del equipo de desarrollo, y la supervisión técnica del proyecto. Nivel 3 - Asesor estratégico en retainer (6-12 meses, 3.000 a 6.000 euros al mes): actúo como Chief Blockchain Officer externo, orientando las decisiones estratégicas del cliente en su adopción de blockchain y manteniéndolo actualizado sobre la evolución regulatoria y tecnológica del ecosistema.

Pilar estratégico 3 - Captación de clientes en dos mercados paralelos:
La consultoría blockchain tiene dos mercados con características muy distintas: las empresas tradicionales y el ecosistema Web3 nativo. Para las empresas tradicionales (bancos, aseguradoras, empresas de logística, retailers): el canal de acceso es diferente al de las startups Web3. Estos clientes se llegan a través de eventos del sector financiero y tecnológico (Fintech Spain, South Summit), publicaciones en LinkedIn con análisis de casos de uso blockchain en su sector específico, y relaciones con los departamentos de innovación de grandes consultoras que buscan socios especializados para proyectos de blockchain de sus clientes. Para el ecosistema Web3 nativo (proyectos DeFi, DAOs, startups blockchain): la credibilidad se construye on-chain (proyectos en los que has participado verificables en Etherscan), en GitHub (contribuciones open-source), en Twitter/X (análisis técnicos que el ecosistema comparte) y en los hackathones donde puedes demostrar tus capacidades en tiempo real.

Pilar estratégico 4 - Uso de la IA como ventaja competitiva del consultor blockchain:
Describe cómo integrar la IA en tu práctica de consultoría para diferenciarte de los consultores blockchain tradicionales. La IA permite: análisis de datos on-chain más rápido y profundo para el due diligence de proyectos blockchain (puedo analizar el historial completo de transacciones de un smart contract en horas, identificar patrones de uso anómalos y comparar métricas con protocolos similares), generación de documentos de estrategia y whitepapers de tokenomics más detallados y mejor estructurados, investigación continua del ecosistema blockchain que evoluciona a una velocidad que ningún humano puede seguir sin asistencia de IA (nuevos protocolos, actualizaciones de Ethereum, cambios regulatorios en tiempo real), modelización financiera de tokenomics con simulaciones de Monte Carlo que antes requerían semanas de trabajo, y preparación de materiales de formación personalizados para cada perfil de directivo o técnico del cliente.

Pilar estratégico 5 - Gestión del negocio freelance en el ecosistema blockchain:
Describe la operativa del negocio de consultoría blockchain freelance. Cubre: la visibilidad pública en el ecosistema (escribir en Mirror.xyz, tener contratos desplegados en mainnet que demuestran tu trabajo, coleccionar tokens de participación en hackathones como prueba de actividad), la gestión de proyectos con clientes de distintos países y timezone (el ecosistema Web3 es global por definición, por lo que necesitas flujos de trabajo asíncronos y acuerdos contractuales en inglés), la compensación mixta en fiat y tokens que algunos clientes Web3 prefieren pagar (cómo gestionarlo fiscalmente en España, cuándo aceptarlo y cuándo exigir fiat), los proveedores especializados que puedes movilizar para proyectos que superan tu capacidad individual (auditores de smart contracts, diseñadores UI para dApps, expertos en regulación MiCA), y el plan de crecimiento hacia una boutique de consultoría blockchain con 3-5 consultores asociados que permita asumir proyectos de mayor envergadura para clientes institucionales o del IBEX 35.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Plan de negocio para consultoría freelance especializada en blockchain y Web3',
                'vote_score'       => 48,
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
