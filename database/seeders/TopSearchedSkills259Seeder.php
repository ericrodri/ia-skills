<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills259Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Web3 marketing: comunidades, tokens y NFTs como herramienta de marca',
                'description'       => 'Aprende a aplicar las estrategias de marketing propias del ecosistema Web3 para construir comunidades comprometidas, diseñar programas de recompensas con tokens y usar NFTs como herramienta de fidelización y diferenciación de marca.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en marketing Web3 con experiencia trabajando con proyectos de blockchain, NFTs y comunidades descentralizadas, además de conocimiento profundo de cómo las marcas tradicionales están adoptando las herramientas de Web3 para conectar con sus audiencias de manera diferente. Quiero aprender a aplicar las estrategias de marketing del ecosistema Web3 en mi trabajo, tanto si estoy en una empresa nativa Web3 como si estoy ayudando a una marca tradicional a dar sus primeros pasos en este ecosistema.

**Preguntas iniciales:**
1. ¿Tu trabajo está en una empresa nativa Web3 (protocolo, dApp, marketplace de NFTs) o en una marca tradicional que quiere explorar Web3?
2. ¿Cuál es tu objetivo principal: construir comunidad, lanzar un programa de fidelización con tokens, crear una colección de NFTs, o ampliar el reconocimiento de marca en el ecosistema crypto?
3. ¿Cuánto conoce tu audiencia actual sobre Web3 y blockchain? ¿Son nativos crypto o estás hablando con una audiencia mainstream?
4. ¿Qué presupuesto y recursos tienes disponibles para una iniciativa Web3?

**EL MARKETING EN WEB3: QUÉ CAMBIA Y QUÉ NO:**

LA COMUNIDAD COMO ACTIVO PRINCIPAL
En Web3, la comunidad no es un canal de marketing; es el activo más valioso que un proyecto puede tener. Los proyectos que han construido comunidades sólidas en Discord y Twitter (ahora X) han demostrado una resiliencia y un poder de distribución que ningún presupuesto publicitario puede comprar. La diferencia fundamental con el marketing tradicional es que en Web3 los miembros de la comunidad son también propietarios parciales del proyecto (a través de tokens o NFTs) y tienen incentivos económicos para que el proyecto tenga éxito. Esto crea un tipo de advocacy y embajadores de marca que no tiene equivalente en Web2. Ayúdame a entender cómo construir una estrategia de comunidad para mi proyecto o marca: la plataforma correcta, el tipo de contenido que genera engagement, los rituales de comunidad (AMAs, drops exclusivos, gobernanza participativa) y cómo mantener activa la comunidad más allá del momento del lanzamiento.

LOS TOKENS COMO HERRAMIENTA DE MARKETING
Los tokens de utilidad y los tokens de gobernanza han demostrado ser una de las herramientas de marketing más poderosas del ecosistema Web3: crean alineación de incentivos entre el proyecto y sus usuarios, recompensan el comportamiento deseado (uso del producto, referidos, contribuciones a la comunidad) y crean una economía interna que da valor a la participación. Ayúdame a entender los modelos de tokenomics aplicados al marketing: cómo diseñar un programa de recompensas con tokens, qué comportamientos incentivar, cómo evitar los errores más comunes (inflación descontrolada, distribución inequitativa, tokens sin utilidad real) y cómo comunicar el modelo de tokens a una audiencia no técnica.

**LOS NFTs COMO ESTRATEGIA DE MARCA:**

MÁS ALLÁ DEL ARTE DIGITAL
Los NFTs han madurado como herramienta de marketing más allá de la especulación con arte digital. Las marcas más innovadoras los están usando como: membresías exclusivas con acceso a contenido, eventos o productos; certificados de autenticidad para productos físicos de lujo; coleccionables digitales que construyen identidad de fan; y herramientas de gamificación que recompensan la fidelidad a largo plazo. Ayúdame a identificar los casos de uso de NFTs que tienen más sentido para mi marca o proyecto y a diseñar una estrategia que genere valor real para los holders más allá de la especulación de precio.

LA EXPERIENCIA DEL HOLDER
El error más común de las marcas que entran en Web3 con NFTs es enfocarse únicamente en el lanzamiento y no en la experiencia a largo plazo de los holders. El valor de un NFT de marca se sostiene cuando los holders reciben beneficios continuos, cuando hay una hoja de ruta clara de lo que se va a construir y cuando la comunidad de holders tiene un sentido de pertenencia e identidad fuerte. Ayúdame a diseñar la experiencia del holder más allá del momento de compra: los beneficios exclusivos, el acceso a la comunidad, las decisiones de gobernanza en las que pueden participar y la hoja de ruta de desarrollo que mantiene el interés.

**CANALES Y TÁCTICAS DE MARKETING WEB3:**

TWITTER (X), DISCORD Y LOS CANALES NATIVOS DE WEB3
El ecosistema Web3 tiene sus propios canales de comunicación y sus propias convenciones. Twitter es el canal de conversación pública donde se debate sobre proyectos, se hacen anuncios y se construye el pensamiento de liderazgo. Discord es el canal de comunidad donde se gestionan los sub-grupos, se da soporte y se crean los rituales de comunidad. Farcaster y Lens son las redes sociales descentralizadas emergentes con una audiencia de early adopters de alta calidad. Ayúdame a diseñar la estrategia de presencia en estos canales: la frecuencia de publicación, el tipo de contenido para cada canal, la voz y el tono que funciona en el ecosistema Web3 y las métricas que me dicen si la estrategia está funcionando.

INFLUENCERS Y KOLs (KEY OPINION LEADERS) EN CRYPTO
El ecosistema Web3 tiene su propia capa de influencers especializados: los KOLs (Key Opinion Leaders) son figuras con alta credibilidad en comunidades específicas de crypto. Su endorsement puede ser transformador para el awareness de un proyecto, pero también conlleva riesgos reputacionales significativos si se asocia con proyectos de baja calidad. Ayúdame a entender cómo funciona el ecosistema de KOLs en crypto: cómo identificar los más relevantes para mi audiencia, cómo estructurar las colaboraciones, qué señales de alerta indican un KOL de baja calidad o poco ético y cómo medir el ROI de estas colaboraciones.

**MÉTRICAS DE MARKETING WEB3:**

Las métricas del marketing Web3 son distintas de las del marketing tradicional. Además de las métricas de awareness y engagement estándar, en Web3 hay que medir: el número de holders únicos y la distribución de la tenencia (señal de descentralización real), el volumen de transacciones en el marketplace, la actividad on-chain de los usuarios (frecuencia de uso del protocolo, TVL en DeFi), la retención de holders a lo largo del tiempo y la salud de la comunidad en Discord (mensajes diarios, nuevos miembros activos, sentimiento general). Ayúdame a construir el dashboard de métricas de marketing Web3 para mi proyecto.

Dame la estrategia completa de marketing Web3 adaptada a mi contexto, incluyendo la comunidad, los tokens o NFTs y los canales específicos del ecosistema.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Estrategia de marketing Web3 con comunidades, tokens y NFTs como herramientas de construcción de marca',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Smart contracts y Solidity: el developer que entra en Web3',
                'description'       => 'Guía práctica para developers con experiencia en Web2 que quieren entrar en el desarrollo blockchain: smart contracts en Solidity, el entorno de desarrollo, los patrones de seguridad y el camino hacia el primer proyecto desplegado en mainnet.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un senior blockchain developer con experiencia en el desarrollo de smart contracts en Solidity y en la transición desde el desarrollo Web2, que ha ayudado a múltiples developers a dar sus primeros pasos en el ecosistema Ethereum y blockchains EVM-compatibles. Tengo experiencia en desarrollo de software (Web2) y quiero entrar en el mundo del desarrollo blockchain. Ayúdame a construir la base de conocimiento, las habilidades prácticas y el camino hacia el primer proyecto real desplegado.

**Preguntas iniciales:**
1. ¿Cuál es tu stack actual de desarrollo? ¿Con qué lenguajes tienes más experiencia (JavaScript, TypeScript, Python, Java, otros)?
2. ¿Tienes ya alguna base de conocimiento sobre blockchain y Ethereum, o estás empezando desde cero?
3. ¿Cuál es tu objetivo en Web3: trabajar como blockchain developer en una empresa, contribuir a proyectos open source, o lanzar tu propio proyecto?
4. ¿Cuánto tiempo puedes dedicar al aprendizaje de manera consistente (horas por semana)?

**LOS FUNDAMENTOS QUE NO PUEDES SALTARTE:**

CÓMO FUNCIONA ETHEREUM BAJO EL CAPÓ
Antes de escribir una línea de Solidity, necesitas entender cómo funciona la blockchain en la que vas a desplegar: la EVM (Ethereum Virtual Machine) y cómo ejecuta el código de los smart contracts, el modelo de cuentas (EOA y cuentas de contrato), cómo funcionan las transacciones y el gas, la diferencia entre el estado on-chain y el estado off-chain, y por qué la inmutabilidad del código desplegado lo hace radicalmente diferente al desarrollo tradicional. Ayúdame a construir este modelo mental de cómo funciona Ethereum desde la perspectiva del developer, con las analogías que conectan con lo que ya sé de desarrollo tradicional.

SOLIDITY: EL LENGUAJE DE LOS SMART CONTRACTS
Solidity es el lenguaje principal para el desarrollo de smart contracts en Ethereum y en todas las blockchains EVM-compatibles (Polygon, BNB Chain, Arbitrum, Optimism, Base). Si sabes JavaScript o TypeScript, la sintaxis de Solidity te va a resultar familiar pero el modelo de ejecución es radicalmente diferente. Ayúdame a entender los conceptos fundamentales de Solidity que son específicos del desarrollo blockchain y que no tienen equivalente en el desarrollo Web2: los tipos de datos específicos (address, bytes, mapping), los modificadores de visibilidad y acceso, los eventos y los logs, las funciones payable y los mecanismos de transferencia de ETH, y los modificadores de función.

**EL ENTORNO DE DESARROLLO WEB3:**

HARDHAT Y FOUNDRY: LAS DOS OPCIONES DEL DEVELOPER MODERNO
El entorno de desarrollo de smart contracts ha madurado significativamente. Hardhat (basado en JavaScript/TypeScript) y Foundry (basado en Rust, tests en Solidity) son los dos frameworks dominantes. Hardhat es más accesible si vienes de JavaScript; Foundry es más rápido y potente para el desarrollo avanzado. Ayúdame a entender las diferencias entre ambos y a elegir el que mejor se adapta a mi stack actual. Después, guíame en la configuración del entorno completo: el proyecto inicial, la compilación, el testing, el deployment en una red de pruebas local (Anvil o Hardhat Network) y el deployment en una testnet pública.

HERRAMIENTAS ESENCIALES DEL STACK WEB3
El stack del developer Web3 incluye herramientas específicas que no existen en el desarrollo tradicional: Remix IDE para prototipar y experimentar rápido, Ethers.js o Viem para interactuar con la blockchain desde el frontend, OpenZeppelin para las librerías de contratos auditados y estándar, Alchemy o Infura como proveedores de nodos RPC, y Tenderly o Hardhat para debugging de transacciones. Ayúdame a entender el papel de cada herramienta en el workflow del developer Web3 y cuáles son imprescindibles para empezar.

**SEGURIDAD: EL TEMA QUE LO CAMBIA TODO:**

POR QUÉ LA SEGURIDAD ES DIFERENTE EN BLOCKCHAIN
En el desarrollo Web2, un bug en producción se puede corregir desplegando una nueva versión. En los smart contracts, el código desplegado es inmutable y gestiona activos reales (ETH y tokens con valor económico). Un bug de seguridad en un smart contract puede resultar en pérdidas de millones de dólares que no se pueden recuperar. Esta realidad cambia completamente la mentalidad del developer: la seguridad debe ser parte del proceso desde el primer día, no un afterthought. Ayúdame a entender las vulnerabilidades más comunes en smart contracts (reentrancy, integer overflow, front-running, access control failures) con ejemplos de código concretos y las técnicas para prevenirlas.

PATTERNS DE SEGURIDAD QUE TODO DEVELOPER SOLIDITY DEBE CONOCER
Existen patrones de diseño específicos para el desarrollo seguro de smart contracts: el patrón checks-effects-interactions para prevenir reentrancy, el uso de OpenZeppelin's ReentrancyGuard, el patrón pull-over-push para pagos, el uso correcto de los modificadores de acceso con Ownable y AccessControl, y cómo diseñar contratos actualizables cuando sea necesario (proxy patterns). Ayúdame a aprender estos patrones con ejemplos de código reales y a entender cuándo y por qué aplicarlos.

**EL CAMINO HACIA EL PRIMER PROYECTO REAL:**

DEL TUTORIAL AL PROYECTO PROPIO
El salto del tutorial al proyecto propio es el momento más difícil para el developer que entra en Web3. Ayúdame a diseñar el proyecto inicial que tenga la complejidad justa para aplicar los conceptos aprendidos sin ser tan complejo que se convierta en un obstáculo: un contrato ERC-20 con mecanismos de distribución, un contrato de staking simple, una subasta on-chain o un contrato de escrow. Guíame desde el diseño del contrato hasta el deployment en una testnet pública con la interfaz mínima para interactuar con él.

Dame el roadmap personalizado de aprendizaje Web3 para mi perfil de developer, con los recursos concretos, el orden de estudio y el proyecto inicial que valide los conocimientos adquiridos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Guía de entrada al desarrollo blockchain con Solidity para developers con experiencia en Web2',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de interfaces Web3: wallets, NFTs y DAOs para usuarios normales',
                'description'       => 'Domina los patrones de UX y los principios de diseño específicos del ecosistema Web3 para crear interfaces que hagan accesibles las wallets, las transacciones y las DAOs a usuarios que no son nativos crypto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un UX designer especializado en Web3 con experiencia diseñando interfaces para productos blockchain, wallets y aplicaciones descentralizadas (dApps), con un enfoque particular en hacer que la tecnología sea accesible para usuarios que no tienen experiencia previa en crypto. Quiero aprender a diseñar interfaces Web3 que reduzcan la fricción para el usuario normal, manteniendo la transparencia y la seguridad que la tecnología descentralizada requiere.

**Preguntas iniciales:**
1. ¿Cuál es tu experiencia actual en diseño de producto y qué tipo de interfaces diseñas habitualmente?
2. ¿Estás diseñando para un producto nativo Web3 (wallet, DEX, marketplace de NFTs, DAO) o para una empresa tradicional que está añadiendo funcionalidad Web3?
3. ¿Cuál es el nivel de experiencia crypto de tus usuarios objetivo: son nativos crypto o usuarios mainstream que llegan por primera vez a Web3?
4. ¿Cuáles son los principales puntos de fricción de tus usuarios actuales con las interfaces Web3 que ya existen en tu producto o en la competencia?

**LOS DESAFÍOS ÚNICOS DEL DISEÑO WEB3:**

LA BRECHA DE USABILIDAD DE WEB3
Web3 tiene un problema de usabilidad estructural que va más allá del diseño de interfaces: los conceptos fundamentales de la tecnología (claves privadas, gas fees, confirmaciones de bloque, firmas de transacción) son radicalmente diferentes a todo lo que el usuario ha experimentado en Web2. El diseñador Web3 debe trabajar en dos frentes simultáneamente: hacer que la interfaz sea intuitiva para el usuario no técnico, y enseñar al usuario los conceptos mínimos que necesita para usar el producto de manera segura. Ayúdame a entender cómo abordar esta tensión entre la simplicidad y la educación en el diseño de mi producto.

LOS MOMENTOS DE MAYOR FRICCIÓN EN WEB3
Los estudios de usabilidad en dApps identifican consistentemente los mismos momentos de mayor fricción: la creación y gestión de la wallet (para el usuario nuevo, este paso solo ya tiene un abandono altísimo), la primera transacción (el usuario no entiende qué está firmando, qué es el gas, por qué tiene que esperar), los mensajes de error on-chain (que son técnicos y no accionables), y la gestión de múltiples redes y tokens. Ayúdame a diseñar las soluciones de UX para cada uno de estos momentos de fricción en mi producto concreto.

**PATRONES DE DISEÑO ESPECÍFICOS DE WEB3:**

ONBOARDING A LA WALLET: EL PRIMER OBSTÁCULO
El onboarding a una wallet es el punto de mayor abandono en cualquier producto Web3 para usuarios nuevos. Los mejores productos han desarrollado patrones específicos para reducir esta fricción: las embedded wallets (wallets creadas automáticamente con el email del usuario, como las de Magic, Privy o Dynamic) que eliminan la necesidad de que el usuario instale MetaMask, los flows progresivos que permiten al usuario explorar el producto antes de conectar la wallet, y los tutoriales interactivos que explican qué es una wallet en el contexto de beneficios concretos para el usuario. Ayúdame a diseñar el flow de onboarding a la wallet más adecuado para mi audiencia objetivo.

DISEÑAR LAS TRANSACCIONES PARA LA CONFIANZA
Cada transacción en blockchain requiere que el usuario firme algo que normalmente no entiende. El diseño de la pantalla de confirmación de transacción es crítico para construir confianza y reducir el abandono: mostrar en lenguaje claro qué va a ocurrir (no el hexadecimal de la transacción), el coste total en la moneda local del usuario (no solo en ETH o gas), el tiempo estimado de confirmación y las consecuencias de la acción de manera que el usuario pueda tomar una decisión informada. Ayúdame a diseñar las pantallas de confirmación de transacción para los casos de uso más frecuentes de mi producto.

DISEÑO DE INTERFACES DE NFTs
Las interfaces de NFTs tienen sus propios patrones de diseño: cómo mostrar la colección de NFTs de un usuario de manera que comunique propiedad y valor, cómo diseñar el proceso de minting para maximizar la conversión, cómo mostrar el historial de transacciones y la procedencia de manera comprensible, y cómo diseñar los marketplaces secundarios con la información de precio, rareza y oferta/demanda que los coleccionistas necesitan. Ayúdame a identificar los patrones de diseño de NFTs más relevantes para mi caso de uso.

**DISEÑO PARA DAOs:**

HACER LA GOBERNANZA COMPRENSIBLE
Las interfaces de gobernanza de las DAOs son uno de los mayores desafíos de diseño en Web3: ¿cómo haces que un usuario no técnico entienda una propuesta de gobernanza compleja, evalúe su impacto y vote de manera informada? Las mejores interfaces de DAO (Snapshot, Tally, Commonwealth) han desarrollado patrones para resumir las propuestas en lenguaje accesible, mostrar el estado de la votación de manera visual y comunicar el peso del voto del usuario en función de sus tokens. Ayúdame a diseñar la interfaz de gobernanza más accesible para la DAO o el protocolo en el que trabajo.

**ACCESIBILIDAD Y DISEÑO INCLUSIVO EN WEB3:**

Web3 tiene un problema de diversidad de usuarios: la gran mayoría de los usuarios actuales son hombres jóvenes con educación técnica. Para que Web3 cumpla su promesa de democratizar las finanzas y la propiedad digital, necesita interfaces que sean accesibles para usuarios con diferentes niveles de conocimiento técnico, diferentes idiomas y diferentes contextos de uso (incluyendo usuarios de países en desarrollo que acceden desde móvil en redes lentas). Ayúdame a incorporar los principios de diseño inclusivo en mi trabajo de diseño Web3.

Dame los patrones de diseño concretos y las decisiones de UX que debo tomar para que mi producto Web3 sea accesible para usuarios que no son nativos crypto, con ejemplos visuales y flujos de usuario detallados.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Patrones de UX y diseño de interfaces Web3 accesibles para usuarios no técnicos en wallets, NFTs y DAOs',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Ventas en el ecosistema crypto y blockchain: cómo se negocia en Web3',
                'description'       => 'Aprende las dinámicas y los procesos de venta específicos del ecosistema blockchain: desde vender infraestructura a protocolos hasta cerrar acuerdos de integración y partnerships en un entorno donde la confianza y la credibilidad técnica lo son todo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un senior sales executive con experiencia en ventas B2B en el ecosistema blockchain y crypto, habiendo cerrado acuerdos con exchanges, protocolos DeFi, empresas de infraestructura blockchain y proyectos NFT. Quiero entender las dinámicas específicas de las ventas en Web3: cómo se construye la confianza en un ecosistema altamente técnico y desconfiado, cómo funciona el ciclo de ventas en los proyectos descentralizados y cómo se cierran acuerdos en un entorno donde los compradores son muchas veces anónimos y los ciclos de decisión son radicalmente diferentes a los del B2B tradicional.

**Preguntas iniciales:**
1. ¿Qué tipo de producto o servicio vendes en el ecosistema Web3 (infraestructura, herramientas para developers, servicios de marketing, soluciones de compliance, servicios de auditoría)?
2. ¿Tus compradores son proyectos nativos Web3 (protocolos, DAOs, dApps) o empresas tradicionales que están adoptando blockchain?
3. ¿Cuál es el mayor obstáculo que encuentras actualmente en el ciclo de ventas Web3?
4. ¿Tienes experiencia en ventas B2B tradicional y estás haciendo la transición a Web3, o empezaste directamente en el ecosistema crypto?

**LAS DIFERENCIAS FUNDAMENTALES DE LAS VENTAS EN WEB3:**

LA CREDIBILIDAD TÉCNICA COMO REQUISITO DE ENTRADA
En Web3, la credibilidad técnica no es un diferenciador; es el precio de entrada. Los compradores en el ecosistema blockchain son generalmente muy técnicos, altamente escépticos y han sido víctimas de múltiples estafas y proyectos que no cumplieron sus promesas. Un comercial que no puede hablar con fluidez sobre la tecnología que vende, que no conoce los conceptos básicos de blockchain o que no está genuinamente embebido en el ecosistema, va a perder la credibilidad en los primeros minutos de la conversación. Ayúdame a construir el nivel de conocimiento técnico que necesito para vender con credibilidad en Web3 y a identificar los límites de lo que debo conocer versus lo que puedo delegar al equipo técnico.

LOS COMPRADORES SON DIFERENTES EN WEB3
El decisor de compra en Web3 es frecuentemente diferente al decisor en B2B tradicional. En una startup Web3, el founder técnico (muchas veces el CTO o el protocol lead) tiene mucho más poder de decisión que en una empresa tradicional. En las DAOs, la decisión de compra puede requerir una propuesta de gobernanza que vote toda la comunidad. Los ciclos de decisión pueden ser muy rápidos (si el founder decide, se cierra en días) o eternamente lentos (si requiere gobernanza, puede tardar meses). Ayúdame a mapear los perfiles de decisor y los ciclos de compra en los distintos tipos de compradores Web3 relevantes para mi producto.

**EL PROCESO DE VENTAS EN WEB3:**

PROSPECCIÓN EN EL ECOSISTEMA CRYPTO
La prospección en Web3 es radicalmente diferente a la prospección B2B tradicional. Los mejores leads no vienen de LinkedIn ni de las listas de contactos empresariales; vienen de estar activo en los mismos espacios donde están tus compradores potenciales: Twitter/X, Discord, los foros de gobernanza de los protocolos, las conferencias como ETH Denver o Token2049, y los grupos de Telegram de la industria. El vendedor en Web3 que solo hace cold outreach por email va a tener tasas de conversión muy bajas. Ayúdame a diseñar la estrategia de prospección adaptada al ecosistema Web3: la presencia en las comunidades relevantes, el warm outreach a través de los canales nativos de Web3 y cómo convertir la participación en comunidad en conversaciones de ventas.

CONSTRUIR CONFIANZA EN UN ECOSISTEMA QUE DESCONFÍA
El ecosistema Web3 tiene un nivel de escepticismo estructuralmente alto hacia los vendedores, derivado de la historia de proyectos fraudulentos y promesas incumplidas. La confianza en Web3 se construye principalmente a través de: el track record verificable on-chain (qué proyectos has integrado o con quiénes has trabajado), los endorsements de figuras respetadas en el ecosistema, la calidad técnica de tu documentación y la demostración práctica de que tu producto funciona. Ayúdame a construir la estrategia de construcción de confianza para mi producto en el ecosistema Web3.

PARTNERSHIPS Y INTEGRACIONES: EL MOTOR DE VENTAS EN WEB3
En Web3, los partnerships técnicos y las integraciones son frecuentemente más importantes que las ventas directas. Un protocolo que se integra con otro protocolo relevante obtiene acceso a su liquidez, a sus usuarios y a su credibilidad. Ayúdame a entender cómo funciona el proceso de partnership en Web3: cómo identificar los socios estratégicos, cómo estructurar la propuesta de valor de la integración, cómo navegar el proceso de decisión técnica y de gobernanza, y cómo hacer que el partnership sea beneficioso a largo plazo para ambas partes.

**CERRAR ACUERDOS EN WEB3:**

LAS NEGOCIACIONES Y LOS CONTRATOS EN WEB3
Los acuerdos en Web3 tienen características únicas: muchos se formalizan con smart contracts en lugar de contratos tradicionales, los pagos se hacen frecuentemente en tokens o en stablecoins, y las condiciones del acuerdo pueden estar vinculadas a métricas on-chain verificables. Ayúdame a entender cómo estructurar y negociar los acuerdos comerciales en Web3: los modelos de pricing habituales (por transacción, por volumen, en tokens del protocolo), las estructuras de vesting para los pagos en tokens y cómo gestionar la volatilidad de los precios en los contratos denominados en crypto.

Dame el playbook completo de ventas para el ecosistema Web3 adaptado a mi tipo de producto y compradores, incluyendo la prospección, la construcción de credibilidad y el cierre de acuerdos en este entorno único.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Playbook de ventas B2B para el ecosistema blockchain y crypto con las dinámicas y los ciclos específicos de Web3',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product management en protocolos DeFi y aplicaciones descentralizadas',
                'description'       => 'Aprende las competencias específicas del product management en el ecosistema DeFi y Web3: cómo definir la hoja de ruta de un protocolo, gestionar la tensión entre la descentralización y la velocidad de ejecución, y trabajar con comunidades de gobernanza como stakeholders.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un protocol product manager con experiencia gestionando la hoja de ruta de protocolos DeFi y aplicaciones descentralizadas en el ecosistema Ethereum y L2s, con conocimiento profundo de las diferencias que existen entre el product management en Web2 y en Web3. Quiero aprender a gestionar el producto en un contexto descentralizado donde la gobernanza de la comunidad, la inmutabilidad del código y las dinámicas del mercado crypto cambian radicalmente las reglas del product management tradicional.

**Preguntas iniciales:**
1. ¿En qué tipo de producto Web3 trabajas o quieres trabajar (protocolo DeFi, dApp de consumo, infraestructura blockchain, marketplace de NFTs, DAO)?
2. ¿Tienes experiencia en product management en Web2 y estás haciendo la transición, o estás empezando directamente en Web3?
3. ¿Cuál es el mayor desafío que encuentras en la gestión del producto en un entorno descentralizado?
4. ¿Tu producto tiene gobernanza on-chain con token de gobernanza, o la toma de decisiones sigue siendo centralizada en el equipo fundador?

**LAS DIFERENCIAS FUNDAMENTALES DEL PM EN WEB3:**

EL USUARIO COMO PROPIETARIO Y GOBERNADOR
La diferencia más fundamental del product management en Web3 es que los usuarios del protocolo son también propietarios (a través de tokens) y gobernadores (a través del mecanismo de votación on-chain). Esto significa que las decisiones de producto no pueden tomarse de manera unilateral por el equipo; hay que navegar la gobernanza de la comunidad, comunicar las decisiones de hoja de ruta de manera transparente y en muchos casos someter las decisiones de mayor impacto a votación. Ayúdame a entender cómo gestionar la tensión entre la velocidad de ejecución que requiere un producto competitivo y el proceso de gobernanza que requiere la descentralización real.

LA INMUTABILIDAD DEL CÓDIGO COMO CONSTRAINT DE PRODUCTO
En Web2, desplegar una nueva versión del producto es un proceso relativamente sencillo. En Web3, los smart contracts son inmutables una vez desplegados y cambiarlos requiere un proceso de migración complejo (y en muchos casos una votación de gobernanza). Esto cambia radicalmente el proceso de product development: el coste del error es mucho más alto, el testing y la auditoría son parte crítica del ciclo de desarrollo y la planificación de la hoja de ruta debe contemplar estas limitaciones. Ayúdame a adaptar mi proceso de product development a las restricciones de la inmutabilidad del código on-chain.

**DISCOVERY Y RESEARCH EN WEB3:**

LOS DATOS ON-CHAIN COMO FUENTE DE INSIGHTS
Una de las ventajas únicas del product management en Web3 es el acceso a datos de comportamiento del usuario que son completamente transparentes y verificables on-chain: todas las transacciones, todos los flujos de liquidez, todos los patrones de uso del protocolo son datos públicos que se pueden analizar con herramientas como Dune Analytics, Nansen o Token Terminal. Ayúdame a aprender a usar el análisis on-chain como herramienta de product discovery: qué métricas son más relevantes para mi tipo de protocolo, cómo identificar patrones de uso que revelan oportunidades de mejora y cómo usar los datos on-chain para priorizar la hoja de ruta.

RESEARCH CON LA COMUNIDAD
En Web3, la comunidad de usuarios no es solo un canal de feedback; es el stakeholder más importante del producto. Los mejores PMs de protocolos participan activamente en el Discord y el foro de gobernanza, hacen AMAs (Ask Me Anything) regulares con la comunidad, proponen cambios para el debate antes de formalizarlos y construyen relaciones con los power users y los holders más activos. Ayúdame a diseñar el proceso de research y engagement con la comunidad que me dé los insights que necesito para tomar buenas decisiones de producto.

**ROADMAP Y PRIORIZACIÓN EN WEB3:**

PRIORIZAR CON LA COMUNIDAD DE GOBERNANZA
La priorización del roadmap en un protocolo con gobernanza on-chain es un proceso político además de técnico. Las propuestas de la comunidad (llamadas frecuentemente AIPs, RFCs o similares según el protocolo) pueden venir de cualquier miembro de la comunidad y compiten por el tiempo del equipo de desarrollo. Ayúdame a diseñar el proceso de priorización del roadmap que equilibra la visión del equipo con las propuestas de la comunidad: cómo clasificar las propuestas entrantes, cómo comunicar las decisiones de priorización con transparencia y cómo gestionar las expectativas de la comunidad cuando una propuesta popular no entra en el roadmap.

LA SEGURIDAD COMO FEATURE PERMANENTE
En los protocolos DeFi, la seguridad no es una consideración de producto más; es el fundamento de todo. Un bug de seguridad puede drenar los fondos de todos los usuarios del protocolo en minutos, destruyendo años de construcción de confianza. El PM de un protocolo DeFi debe incorporar la seguridad en cada decisión de roadmap: las auditorías de código como prerequisito para cualquier cambio significativo, los programas de bug bounty como feature permanente y la comunicación de las medidas de seguridad como herramienta de marketing y construcción de confianza. Ayúdame a integrar la gestión de la seguridad en mi proceso de product management.

Dame el framework completo de product management adaptado al ecosistema DeFi y Web3, con los procesos específicos para el discovery, la gobernanza, la priorización y el delivery en un entorno descentralizado.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Framework de product management para protocolos DeFi y aplicaciones descentralizadas con gobernanza on-chain',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'DAO governance y gestión de equipos distribuidos sin jerarquía formal',
                'description'       => 'Aprende a coordinar equipos distribuidos y multidisciplinares en el contexto de una DAO o una organización con gobernanza descentralizada, donde la autoridad emerge de la comunidad y no de la jerarquía tradicional.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en organizaciones descentralizadas y gobernanza de DAOs con experiencia coordinando equipos distribuidos globalmente en organizaciones donde la toma de decisiones es colectiva y la autoridad no emana de la jerarquía sino de la participación y la reputación. Quiero aprender a gestionar equipos y coordinar el trabajo en el contexto de una DAO o una organización con estructuras de gobernanza descentralizadas, donde los modelos de management tradicional no aplican directamente.

**Preguntas iniciales:**
1. ¿Cuál es tu rol actual en la DAO o en la organización descentralizada (contributor, core team, delegate, multisig signer)?
2. ¿La DAO en la que trabajas tiene un equipo core centralizado con gobernanza comunitaria encima, o es una organización completamente descentralizada donde todo el trabajo lo hacen contributors voluntarios o pagados por la tesorería?
3. ¿Cuál es el mayor desafío de coordinación que experimentas actualmente: alinear prioridades, mantener a las personas motivadas sin jerarquía formal, gestionar la toma de decisiones colectiva, o retener el talento en un entorno sin contratos laborales?
4. ¿Cuántas personas hay en tu DAO y en qué zona horaria están distribuidas?

**LOS PRINCIPIOS DE LAS ORGANIZACIONES DESCENTRALIZADAS:**

AUTORIDAD SIN JERARQUÍA: CÓMO FUNCIONA EL LIDERAZGO EN LAS DAOs
En una DAO, el liderazgo no viene del título; viene de la credibilidad ganada a través de las contribuciones, la confianza de la comunidad y la capacidad de construir consenso. El líder en una DAO es un coordinador, un facilitador y un comunicador más que un jefe que da órdenes. Esto requiere un conjunto de habilidades completamente diferente al del management tradicional: la capacidad de influir sin autoridad formal, construir coaliciones alrededor de una propuesta, escuchar activamente a la comunidad y comunicar con transparencia radical. Ayúdame a desarrollar las habilidades de liderazgo específicas para el contexto descentralizado.

COORDINACIÓN SIN OFICINA Y SIN HORARIOS
Los teams de las DAOs son típicamente globales, asíncronos y voluntarios (o remunerados por proyectos, no por horas). La coordinación sin la fricción natural de una oficina compartida requiere sistemas explícitos: la documentación como herramienta de coordinación principal, los rituales asincrónicos que mantienen la alineación sin reuniones, y las normas de comunicación que permiten a personas en diferentes zonas horarias colaborar sin cuellos de botella. Ayúdame a diseñar el sistema de coordinación asíncrona para mi equipo en la DAO.

**GOBERNANZA Y TOMA DE DECISIONES COLECTIVA:**

LOS MECANISMOS DE GOBERNANZA
Las DAOs usan diferentes mecanismos de gobernanza para tomar decisiones colectivas: la votación on-chain con tokens de gobernanza (token voting), la votación por snapshot para decisiones no ejecutivas, la gobernanza representativa con delegates elegidos por la comunidad, y los sistemas de gobernanza multicapa que combinan la velocidad de un equipo core con la supervisión de la comunidad. Ayúdame a entender los pros y los contras de cada mecanismo y a identificar cuál es más adecuado para los diferentes tipos de decisiones en mi DAO.

EL PROCESO DE PROPUESTA EN UNA DAO
El proceso de propuesta en una DAO bien diseñada tiene etapas específicas: la discusión informal en el foro o el Discord donde se elabora la idea, la propuesta formal con la descripción completa del cambio propuesto, los recursos necesarios y el impacto esperado, el período de feedback de la comunidad, la votación formal y la implementación. Ayúdame a diseñar o mejorar el proceso de propuesta en mi DAO: los templates de propuesta, los períodos de deliberación, los quórums necesarios y el proceso de implementación post-votación.

PREVENIR LA APATÍA DE GOBERNANZA
Uno de los mayores problemas de las DAOs establecidas es la caída de la participación en la gobernanza: los holders de tokens no votan porque las propuestas son muy técnicas, porque el proceso es complicado o porque sienten que su voto no importa. La apatía de gobernanza concentra el poder de facto en los grandes holders y en el equipo core, traicionando el principio de descentralización. Ayúdame a diseñar las estrategias para mantener la participación activa en la gobernanza: la comunicación de propuestas en lenguaje accesible, los incentivos a la participación y los sistemas de delegación para los holders que quieren participar sin seguir cada propuesta.

**COMPENSACIÓN Y RETENCIÓN EN LAS DAOs:**

COMPENSAR AL TALENTO EN UN ENTORNO SIN CONTRATOS LABORALES
La compensación en las DAOs es un desafío único: muchos contributors trabajan por recompensas en tokens de la tesorería de la DAO, con las implicaciones fiscales, de volatilidad y de alineación de incentivos que eso conlleva. Ayúdame a entender los modelos de compensación más comunes en las DAOs (grants por proyecto, salarios en stablecoins desde la tesorería, retribución en tokens con vesting) y cómo diseñar un sistema de compensación que atraiga y retenga talento de calidad.

Dame el framework completo de gestión y coordinación para DAOs y organizaciones descentralizadas, con los procesos de gobernanza, compensación y coordinación de equipos asíncronos que producen resultados reales sin jerarquía formal.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Framework de gestión y coordinación para DAOs con gobernanza descentralizada, equipos asíncronos y compensación en tokens',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'DeFi para financieros: yield, lending y los riesgos que no están en el libro',
                'description'       => 'Entiende el ecosistema de las finanzas descentralizadas desde la perspectiva del profesional financiero: los protocolos de lending y yield, los modelos económicos de los protocolos DeFi y los riesgos específicos que no aparecen en los libros de gestión de riesgos tradicional.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un analista financiero especializado en DeFi (finanzas descentralizadas) con experiencia evaluando protocolos DeFi desde una perspectiva de riesgo-retorno rigurosa, combinando el conocimiento de las finanzas tradicionales con la comprensión profunda de cómo funcionan los protocolos de lending, yield farming y los modelos económicos de los tokens en blockchain. Quiero entender DeFi con la profundidad analítica que requiere un profesional de finanzas: no como especulación, sino como un ecosistema financiero con sus propias mecánicas, oportunidades y riesgos específicos.

**Preguntas iniciales:**
1. ¿Cuál es tu background en finanzas (banking, gestión de activos, finanzas corporativas, análisis de inversiones)?
2. ¿Cuál es tu nivel de exposición actual a DeFi? ¿Has usado algún protocolo o es completamente nuevo para ti?
3. ¿Cuál es tu objetivo al entender DeFi: evaluar oportunidades de inversión, analizar el riesgo para una institución que está considerando exposición, o entender el ecosistema para tu trabajo en una empresa fintech o blockchain?
4. ¿Cuál es tu tolerancia al riesgo y cuál es el marco regulatorio bajo el que operas?

**LOS FUNDAMENTOS DE DEFI PARA EL FINANCIERO:**

CÓMO REPLICAN LOS PROTOCOLOS DEFI LOS SERVICIOS FINANCIEROS TRADICIONALES
DeFi recrea en forma de código en blockchain los servicios financieros que conoces de la banca y los mercados de capitales: los protocolos de lending (Aave, Compound) replican los mercados de dinero, los exchanges descentralizados (Uniswap, Curve) replican los mercados de capitales pero con market makers algorítmicos en lugar de humanos, los protocolos de stablecoins (MakerDAO, Liquity) replican la emisión de moneda respaldada por colateral. La diferencia fundamental es que toda la lógica de negocio está codificada en smart contracts transparentes y verificables, sin intermediarios que requieran confianza. Ayúdame a mapear los servicios financieros de DeFi con los equivalentes que conozco de las finanzas tradicionales.

LA ECONOMÍA DE LOS TOKENS: CÓMO GENERAN VALOR Y CÓMO LO DESTRUYEN
Los tokens de gobernanza y los tokens de protocolo son el elemento más difícil de analizar para el financiero tradicional porque no tienen equivalente directo en los activos financieros convencionales. Son simultáneamente un derecho de gobernanza, una participación en los flujos de comisiones del protocolo, un instrumento de incentivo para la liquidez y un activo especulativo. Ayúdame a construir el framework analítico para evaluar el valor fundamental de un token de protocolo DeFi: los flujos de comisiones que genera, el modelo de distribución de esos flujos, la tokenomics (inflación, distribución inicial, vesting de los founders) y los mecanismos que capturan o destruyen valor a largo plazo.

**LOS MECANISMOS DE YIELD EN DEFI:**

LENDING Y BORROWING: EL MERCADO DE DINERO DESCENTRALIZADO
Los protocolos de lending como Aave y Compound permiten a los usuarios depositar colateral y pedir prestado activos a tasas determinadas algorítmicamente por la oferta y la demanda. Como depositante, obtienes el tipo de interés del préstamo; como prestatario, pagas ese tipo más una prima. La diferencia con la banca es que todo está sobrecolateralizado (debes depositar más valor del que pides prestado) y es completamente transparente. Ayúdame a entender la economía del lending en DeFi: cómo se determinan los tipos de interés, qué ocurre en la liquidación del colateral, cuál es el riesgo real de los proveedores de liquidez y cómo comparar los yields de DeFi con los instrumentos equivalentes en TradFi.

YIELD FARMING Y LIQUIDEZ: EL RIESGO QUE NO VES EN EL TIPO DE INTERÉS
El yield farming es la práctica de proveer liquidez a los protocolos DeFi a cambio de recompensas en tokens además del tipo de interés. Las APYs anunciadas pueden parecer extraordinariamente altas (a veces de tres dígitos), pero esconden riesgos específicos de DeFi que el financiero debe entender: la impermanent loss (la pérdida no realizada que sufre el proveedor de liquidez cuando los precios de los activos del pool divergen), el riesgo de los tokens de recompensa (que pueden perder valor rápidamente), y el riesgo de los smart contracts (que el protocolo sea hackeado). Ayúdame a construir el análisis de riesgo-retorno real del yield farming que va más allá del APY anunciado.

**LOS RIESGOS ESPECÍFICOS DE DEFI:**

RIESGOS DE SMART CONTRACT Y EXPLOITS
El mayor riesgo específico de DeFi que no tiene equivalente en las finanzas tradicionales es el riesgo de exploit de smart contract: un bug en el código puede permitir a un atacante drenar los fondos del protocolo en minutos. Los exploits de DeFi han resultado en pérdidas de miles de millones de dólares. Ayúdame a entender cómo evaluar el riesgo de smart contract de un protocolo: la importancia de las auditorías (y sus limitaciones), los programas de bug bounty como señal de seguridad, el tiempo que lleva el protocolo en producción sin incidentes y la concentración del riesgo en los contratos más críticos.

RIESGOS DE LIQUIDEZ, ORÁCULO Y GOBERNANZA
Los protocolos DeFi tienen también riesgos específicos relacionados con la liquidez de mercado (riesgo de que no puedas salir de una posición a precio de mercado en condiciones de estrés), el riesgo de oráculo (los protocolos DeFi dependen de oráculos de precios externos que pueden ser manipulados) y el riesgo de gobernanza (los holders de tokens de gobernanza pueden votar cambios que perjudiquen a los proveedores de liquidez o a los depositantes). Ayúdame a incorporar estos riesgos en el framework de due diligence de protocolos DeFi.

Dame el framework completo de análisis financiero para el ecosistema DeFi que me permita evaluar oportunidades y riesgos con el rigor que aplico en las finanzas tradicionales.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Framework de análisis financiero riguroso para el ecosistema DeFi: yields, tokenomics y gestión de riesgos específicos de blockchain',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Marco regulatorio de criptomonedas y activos digitales en España y la UE',
                'description'       => 'Guía jurídica práctica sobre el marco regulatorio aplicable a las criptomonedas y los activos digitales en España y la Unión Europea: MiCA, el régimen VASP, la fiscalidad crypto y los aspectos legales de los smart contracts y las DAOs.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en derecho de las criptomonedas y los activos digitales con conocimiento profundo del marco regulatorio europeo (MiCA), la normativa española aplicable a los proveedores de servicios de criptoactivos (VASPs), la fiscalidad de las criptomonedas y los aspectos legales emergentes de los smart contracts y las DAOs. Quiero entender el panorama regulatorio completo de los activos digitales en España y la UE para asesorar a clientes o para garantizar el cumplimiento de un proyecto blockchain.

**Preguntas iniciales:**
1. ¿Cuál es tu contexto específico: asesoras a empresas que operan en el ecosistema crypto, trabajas en el departamento legal de un proyecto blockchain, o estás desarrollando un producto y necesitas entender el cumplimiento regulatorio?
2. ¿Cuál es el tipo de actividad que necesitas analizar desde el punto de vista legal: emisión de tokens, operación de un exchange, prestación de servicios de custodia, emisión de stablecoins, u otra?
3. ¿Tu actividad tiene dimensión cross-border o está principalmente limitada a España?
4. ¿Cuál es el nivel de urgencia regulatoria que tienes: MiCA ya es aplicable a tu actividad o todavía estás en fase de planificación?

**EL REGLAMENTO MiCA: EL NUEVO MARCO EUROPEO:**

QUÉ ES MiCA Y QUÉ CAMBIA PARA EL ECOSISTEMA CRYPTO EN EUROPA
El Reglamento de Mercados de Criptoactivos (MiCA, Markets in Crypto-Assets Regulation) es el marco regulatorio más ambicioso del mundo para los activos digitales. Entró en aplicación completa en diciembre de 2024 y establece un régimen armonizado a nivel europeo para: la emisión de criptoactivos (incluidos los utility tokens), la emisión de stablecoins referenciadas a activos (ARTs) y de e-money tokens (EMTs), y la prestación de servicios sobre criptoactivos (custodia, operación de plataformas de negociación, canje, asesoramiento). Ayúdame a entender qué actividades caen bajo el ámbito de MiCA, cuáles quedan excluidas (DeFi, NFTs de arte únicos, criptoactivos completamente descentralizados) y qué obligaciones concretas impone.

EL RÉGIMEN DE AUTORIZACIÓN DE CASP (CRYPTO ASSET SERVICE PROVIDERS)
MiCA crea la figura del CASP (Crypto Asset Service Provider), que sustituye al VASP (Virtual Asset Service Provider) del régimen previo. Los CASPs deben obtener autorización en un Estado miembro de la UE para operar en toda la Unión. Ayúdame a entender el proceso de autorización como CASP en España: el órgano competente (CNMV), los requisitos de capital, los requisitos organizativos (gobierno corporativo, gestión de riesgos, custodia de activos de clientes), los requisitos de información y los plazos del procedimiento de autorización.

**FISCALIDAD DE LAS CRIPTOMONEDAS EN ESPAÑA:**

TRATAMIENTO FISCAL DE LAS GANANCIAS Y PÉRDIDAS EN CRYPTO
La fiscalidad de las criptomonedas en España ha evolucionado significativamente en los últimos años. Las ganancias y pérdidas en la transmisión de criptomonedas tributan como ganancias patrimoniales en el IRPF, con los tipos de la base del ahorro que oscilan entre el 19% y el 28%. Ayúdame a entender el tratamiento fiscal detallado de las situaciones más comunes: la venta de criptomonedas por euros, el intercambio de una criptomoneda por otra, el uso de criptomonedas para pagar bienes o servicios, las ganancias de yield farming y staking, y el tratamiento de los NFTs.

OBLIGACIONES DE INFORMACIÓN: EL MODELO 721 Y LA DECLARACIÓN INFORMATIVA
La Agencia Tributaria española ha establecido obligaciones de información específicas para los tenedores y operadores de criptomonedas. El Modelo 721 obliga a declarar la tenencia de criptomonedas en el extranjero que superen los 50.000 euros a 31 de diciembre. Las plataformas de criptomonedas tienen obligaciones de reporting a la AEAT sobre las operaciones de sus clientes. Ayúdame a entender el alcance completo de las obligaciones de información en España y las sanciones por incumplimiento.

**ASPECTOS LEGALES DE SMART CONTRACTS Y DAOs:**

LA VALIDEZ JURÍDICA DE LOS SMART CONTRACTS
Los smart contracts son código que se ejecuta automáticamente en la blockchain cuando se cumplen las condiciones programadas. Su validez jurídica como contratos es un área en evolución en el derecho español y europeo. Ayúdame a entender en qué condiciones un smart contract puede ser reconocido como un contrato jurídicamente vinculante bajo el derecho español, qué ocurre cuando el código tiene un bug que produce un resultado no deseado por las partes, y cómo combinar los smart contracts con la documentación legal tradicional para garantizar la validez y ejecutabilidad del acuerdo.

LA PERSONALIDAD JURÍDICA DE LAS DAOs
Las DAOs presentan un desafío legal fundamental: no tienen personalidad jurídica reconocida en la mayoría de los ordenamientos jurídicos, lo que significa que sus miembros pueden tener responsabilidad personal ilimitada por las obligaciones de la DAO. Algunos estados de EEUU (Wyoming, Marshall Islands) han creado marcos legales específicos para las DAOs. En España y la UE, el estado es de incertidumbre. Ayúdame a entender las opciones de estructuración legal disponibles para una DAO que quiere operar con seguridad jurídica en España: las estructuras de wrapper legal más comunes (asociación, fundación, sociedad) y sus implicaciones.

PREVENCIÓN DE BLANQUEO DE CAPITALES (AML/KYC) EN PROYECTOS CRYPTO
Los proveedores de servicios crypto tienen obligaciones AML/KYC bajo la normativa europea de prevención del blanqueo de capitales y de financiación del terrorismo (AMLD5, AMLD6 y la futura Transfer of Funds Regulation). Ayúdame a entender el alcance de estas obligaciones para diferentes tipos de proyectos crypto: cuándo aplica el KYC, qué procesos de due diligence son necesarios, cómo gestionar los reportes de operaciones sospechosas y las sanciones por incumplimiento.

Dame el mapa completo del marco regulatorio aplicable a mi actividad específica en el ecosistema crypto en España y la UE, con las obligaciones de cumplimiento prioritarias y las áreas de mayor incertidumbre jurídica.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Análisis jurídico del marco regulatorio MiCA, fiscalidad crypto y aspectos legales de smart contracts y DAOs en España y la UE',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Soporte en productos crypto: cuando el cliente pierde acceso a su wallet',
                'description'       => 'Protocolos y habilidades de comunicación para gestionar los casos de soporte más críticos en productos crypto: la pérdida de acceso a la wallet, las transacciones enviadas a la dirección incorrecta y el cliente que ha sido víctima de una estafa.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un senior customer support specialist con experiencia en equipos de soporte de productos crypto y blockchain, especializado en la gestión de los casos más delicados que enfrenta el soporte en este tipo de productos: la pérdida de acceso a wallets, los fondos enviados a direcciones incorrectas, las víctimas de estafas y los clientes que no entienden la irreversibilidad de las transacciones blockchain. Quiero aprender a gestionar estos casos con la combinación correcta de empatía, claridad técnica y honestidad sobre las limitaciones de lo que el soporte puede hacer.

**Preguntas iniciales:**
1. ¿En qué tipo de producto crypto trabajas (exchange centralizado, wallet propia de la empresa, plataforma DeFi, aplicación de NFTs)?
2. ¿Cuál es el caso de soporte más frecuente y más emocionalmente intenso que gestionas actualmente?
3. ¿Cuál es el mayor error que cometen los agentes de soporte novatos al gestionar estos casos en tu equipo?
4. ¿Tu empresa tiene custody de los activos de los usuarios (exchange centralizado) o los usuarios gestionan sus propias claves (self-custody)?

**EL CONTEXTO ÚNICO DEL SOPORTE EN CRYPTO:**

POR QUÉ EL SOPORTE EN CRYPTO ES EMOCIONALMENTE DIFERENTE
El soporte en productos crypto tiene una carga emocional específica que lo diferencia del soporte en otros tipos de software: los errores no son reversibles. En la mayoría de los productos digitales, si algo va mal, el equipo de soporte puede revertir la acción, recuperar el archivo o restablecer la contraseña. En blockchain, una transacción enviada es irreversible. Una wallet cuyas claves privadas se pierden pierde también los activos para siempre. Esta irreversibilidad pone una carga emocional sobre los agentes de soporte que gestionar situaciones donde el cliente ha perdido dinero real y no hay nada que se pueda hacer para recuperarlo. Ayúdame a entender cómo preparar al equipo de soporte para estas conversaciones y cómo construir la resiliencia emocional necesaria para hacerlo bien de manera consistente.

LA CONFUSIÓN ENTRE CUSTODIAL Y NON-CUSTODIAL
El primer punto de confusión en el soporte crypto es que los usuarios no entienden la diferencia entre un producto custodial (donde la empresa guarda las claves privadas, como Coinbase o Binance) y uno non-custodial (donde el usuario es el único que tiene las claves, como MetaMask o Trust Wallet). En un producto custodial, el soporte puede recuperar el acceso a la cuenta. En uno non-custodial, si el usuario pierde su seed phrase, nadie puede recuperar los activos. Esta diferencia fundamental hay que comunicarla con claridad sin que suene como una excusa para no ayudar. Ayúdame a desarrollar el script de comunicación para explicar esta distinción en las situaciones más frecuentes.

**LOS CASOS CRÍTICOS Y CÓMO GESTIONARLOS:**

EL CLIENTE QUE HA PERDIDO EL ACCESO A SU WALLET
Este es el caso más angustiante para el usuario y uno de los más difíciles para el agente de soporte. El usuario ha perdido su seed phrase o su contraseña, tiene activos en la wallet y no puede acceder a ellos. Si es un producto custodial, hay un proceso de recuperación de cuenta mediante verificación de identidad. Si es non-custodial, la realidad es que sin la seed phrase los activos son irrecuperables. Ayúdame a diseñar el protocolo de atención para este caso: las preguntas de diagnóstico iniciales para entender la situación real, el proceso de verificación de identidad para los casos custodiales, la comunicación honesta y empática para los casos non-custodiales y cómo cerrar el caso sin que el cliente sienta que ha sido abandonado.

LA TRANSACCIÓN ENVIADA A LA DIRECCIÓN INCORRECTA
El usuario ha enviado fondos a una dirección incorrecta (se ha equivocado al copiarla, o ha pegado la dirección correcta pero era de una red diferente como enviar ETH de Ethereum a una dirección de Binance Smart Chain). En la mayoría de los casos, estos fondos son irrecuperables. Ayúdame a diseñar el protocolo de atención: cómo diagnosticar rápidamente si hay alguna posibilidad de recuperación (cross-chain bridges en casos específicos, contacto con el exchange de destino si la dirección corresponde a uno), cómo comunicar la situación al usuario y cómo prevenir estos errores en el futuro con mejoras de UX en el producto.

EL CLIENTE VÍCTIMA DE UNA ESTAFA
Las estafas en crypto son endémicas: phishing, fake support, rug pulls, romance scams, fake investment platforms. Cuando un cliente llega al soporte habiendo sido víctima de una estafa, el daño ya está hecho y frecuentemente los fondos son irrecuperables. Sin embargo, el soporte tiene un papel importante: ayudar al cliente a entender qué ocurrió, evitar que el daño se extienda (si el scammer todavía tiene acceso a la wallet del cliente) y redirigir al cliente a las autoridades competentes para la denuncia. Ayúdame a diseñar el protocolo de atención a víctimas de estafa: el diagnóstico inicial, las acciones de mitigación inmediata, la comunicación empática y los recursos de denuncia disponibles en España.

**EDUCACIÓN COMO HERRAMIENTA DE SOPORTE:**

PREVENIR ES MEJOR QUE CURAR: EL SOPORTE PROACTIVO EN CRYPTO
La mayoría de los casos críticos de soporte en crypto son prevenibles con la educación correcta en el momento adecuado. Ayúdame a diseñar el programa de soporte proactivo: los mensajes de onboarding que educan al nuevo usuario sobre la seguridad de la seed phrase, los avisos contextuales antes de transacciones irreversibles, y la base de conocimiento que responde las preguntas más frecuentes antes de que lleguen al soporte.

Dame los protocolos completos de atención para los casos críticos de soporte en crypto, incluyendo los scripts de comunicación, los criterios de diagnóstico y las acciones de mitigación que están en mano del equipo de soporte.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Protocolos de soporte para los casos críticos en productos crypto: wallets perdidas, transacciones incorrectas y víctimas de estafas',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Cobrar en crypto y trabajar para protocolos Web3',
                'description'       => 'Guía práctica para freelancers que quieren trabajar para proyectos Web3 o cobrar sus servicios en criptomonedas: cómo encontrar oportunidades, negociar en tokens, gestionar la volatilidad y cumplir con las obligaciones fiscales en España.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un freelance advisor especializado en el ecosistema Web3 con experiencia ayudando a profesionales independientes a conseguir proyectos en el ecosistema blockchain, negociar compensaciones en tokens y criptomonedas, gestionar la volatilidad de la compensación en crypto y cumplir con las obligaciones fiscales en España cuando una parte significativa de los ingresos viene en activos digitales. Quiero aprender a navegar el ecosistema de trabajo freelance en Web3 con las herramientas y el conocimiento que me permitan aprovechar las oportunidades que ofrece.

**Preguntas iniciales:**
1. ¿Cuál es tu especialidad como freelance (diseño, desarrollo, marketing, redacción, legal, finanzas) y tienes ya experiencia o conocimiento del ecosistema Web3?
2. ¿Cuál es tu objetivo principal: conseguir proyectos en el ecosistema Web3 o añadir la opción de cobrar en crypto a tu negocio freelance actual con clientes de cualquier sector?
3. ¿Cuál es tu tolerancia a la volatilidad? ¿Estarías cómodo cobrando una parte de tu compensación en tokens de un protocolo que pueden subir o bajar significativamente?
4. ¿Cuál es tu situación fiscal actual (autónomo en España, SL, o trabajas como freelance internacional)?

**EL ECOSISTEMA DE TRABAJO FREELANCE EN WEB3:**

LAS OPORTUNIDADES PARA FREELANCERS EN WEB3
El ecosistema Web3 tiene una demanda significativa de talento freelance en múltiples disciplinas: developers de Solidity y smart contracts (la habilidad más escasa y mejor pagada), diseñadores UX especialistas en interfaces Web3, escritores técnicos para documentación de protocolos y whitepapers, gestores de comunidad para Discord y Twitter, marketers especializados en Web3, auditores de smart contracts y asesores legales especializados en crypto. Ayúdame a identificar las oportunidades más relevantes para mi perfil y a evaluar el nivel de competencia y las tarifas de mercado en cada categoría.

DÓNDE ENCONTRAR PROYECTOS WEB3
Las plataformas y los canales para encontrar trabajo freelance en Web3 son diferentes a las plataformas tradicionales. Ayúdame a entender los canales principales: los foros de gobernanza de las DAOs donde se publican las solicitudes de grants para contributors, las plataformas especializadas en trabajo Web3 (Braintrust, Crypto Jobs List, Web3 Career, DeWork), el Discord de los proyectos donde se publican las oportunidades de collaboration, Twitter como canal de networking y visibilidad en el ecosistema, y las aceleradoras y fondos de inversión que facilitan el matching entre talento y proyectos. Diseña conmigo la estrategia de búsqueda de proyectos Web3 adaptada a mi perfil.

**NEGOCIAR Y COBRAR EN CRYPTO:**

ESTRUCTURAS DE COMPENSACIÓN EN WEB3
La compensación en el ecosistema Web3 tiene estructuras diferentes a las del freelancing tradicional. Los proyectos pueden ofrecer: pago en stablecoins (USDC, USDT, DAI) que eliminan la volatilidad y son similares a cobrar en euros; pago en ETH o BTC que tienen volatilidad moderada pero son activos líquidos; pago en el token nativo del protocolo con un período de vesting (el mayor potencial de upside pero también el mayor riesgo); o una combinación de stablecoins más tokens (el modelo más común en proyectos maduros que quieren atraer talento de calidad). Ayúdame a evaluar las diferentes estructuras de compensación y a negociar la que mejor se adapta a mi tolerancia al riesgo y mis necesidades financieras.

GESTIONAR LA VOLATILIDAD DE LA COMPENSACIÓN EN TOKENS
Si una parte de tu compensación es en tokens del protocolo, necesitas una estrategia para gestionar la volatilidad: cuándo convertir los tokens a stablecoins o a euros, cómo evaluar el potencial a largo plazo del token que recibes como compensación, cómo diversificar para no tener toda la exposición en un solo activo y cómo gestionar psicológicamente las bajadas de precio cuando representan una caída en tu renta efectiva. Ayúdame a diseñar mi estrategia personal de gestión de la compensación en crypto.

PLATAFORMAS DE PAGO CRYPTO PARA FREELANCERS
Cobrar en crypto requiere infraestructura específica: una wallet no custodial para recibir pagos en tokens (MetaMask, Ledger), plataformas de facturación que generan invoices crypto-compatibles (Request Finance es la más usada en el ecosistema Web3 para facturas en crypto), servicios de conversión de crypto a euros con transferencia a cuenta bancaria española (Coinbase, Kraken, Bitstamp) y el registro de todas las transacciones para la declaración fiscal. Ayúdame a configurar la infraestructura de cobro en crypto para mi negocio freelance.

**FISCALIDAD DEL FREELANCE QUE COBRA EN CRYPTO EN ESPAÑA:**

CÓMO DECLARAR LOS INGRESOS EN CRYPTO A LA AGENCIA TRIBUTARIA
Los ingresos como autónomo cobrados en criptomonedas tributan en España como rendimientos de actividad económica, igual que si los cobras en euros. El valor de la criptomoneda en el momento del cobro determina la base imponible en euros. Ayúdame a entender las obligaciones fiscales completas del freelance que cobra en crypto: cómo calcular el valor en euros en el momento del cobro (el tipo de cambio de referencia), si hay que emitir factura en euros aunque el pago sea en crypto, cómo registrar los ingresos en el libro de facturas, cómo gestionar el IVA y cómo declarar las ganancias adicionales cuando conviertes los tokens a euros a un precio diferente al de cobro.

Dame el plan completo para construir un negocio freelance en el ecosistema Web3: las oportunidades para mi perfil, la estrategia de búsqueda, la negociación de compensaciones en crypto y el cumplimiento fiscal en España.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Guía completa para freelancers que quieren trabajar en proyectos Web3 y cobrar en criptomonedas con cumplimiento fiscal en España',
                'vote_score'        => 43,
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
