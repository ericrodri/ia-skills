<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills140Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Marketing en Web3: comunidad primero, tokenomics y canales nativos',
                'description'       => 'Entiende las reglas del marketing en Web3: la comunidad como canal principal, los tokenomics como herramienta de growth y los canales nativos que dominan el espacio.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un CMO con experiencia en proyectos Web3 que ha trabajado en protocolos DeFi, NFT collections y DAOs. Voy a darte el contexto de mi proyecto y quiero diseñar una estrategia de marketing que funcione en el ecosistema Web3.

**Contexto de mi proyecto Web3:**
- Tipo de proyecto: [protocolo DeFi / NFT / DAO / infraestructura / app descentralizada / token de utilidad / otro]
- Fase actual: [idea / pre-launch / launch / post-launch con comunidad]
- Público objetivo: [crypto nativos / Web2 onboarding / instituciones / otro]
- Blockchain principal: [Ethereum / Solana / Base / otra]
- Presupuesto de marketing mensual: [rango]
- Principal problema hoy: [no tenemos comunidad / tenemos comunidad pero no crece / no sabemos cómo generar awareness / otro]

**Parte 1 — Las reglas del marketing en Web3**

Antes de cualquier táctica, explícame las reglas específicas:
1. Por qué el playbook de marketing tradicional falla en Web3: las razones estructurales por las que las campañas de paid media y el funnel clásico no funcionan de la misma forma.
2. El concepto de "community first": qué significa exactamente, por qué la comunidad en Web3 no es un canal de distribución sino el producto mismo, y cómo construirla antes de tener producto.
3. La diferencia entre proyectos Web3 que construyen comunidades genuinas y los que generan hype temporal. Los patrones que distinguen a Uniswap o Nouns DAO de los rugs o proyectos abandonados.
4. Los valores que la comunidad crypto premia: descentralización real, transparencia, open source, autonomía. Cómo integrarlos en la comunicación sin que parezca performativo.

**Parte 2 — Canales nativos de Web3**

Dame la guía de los canales que dominan el espacio:
1. Discord para proyectos Web3: la arquitectura de un servidor de Discord que convierte y retiene. Los canales obligatorios, la moderación, los bots (MEE6, Collab.Land, Guild.xyz) y cómo evitar que el servidor quede lleno de spam y bots.
2. X (Twitter/Crypto Twitter): cómo funciona el algoritmo de CT, los formatos que amplifican (threads, spaces, RT de influencers), la cadencia óptima de publicación y cómo construir una presencia desde cero.
3. Mirror.xyz: cómo usarlo para publicar contenido de largo formato que construya narrativa alrededor del proyecto.
4. Farcaster y Lens: están ganando relevancia. Para mi tipo de proyecto, ¿vale la pena invertir tiempo allí ahora?
5. Telegram: cuándo tiene sentido frente a Discord y cómo gestionar grupos grandes sin que se conviertan en caos.

**Parte 3 — Tokenomics como herramienta de marketing**

Esta es la parte que no existe en Web2:
1. Cómo diseñar la distribución del token de forma que incentive la participación comunitaria sin crear presión vendedora que destruya el precio.
2. Los airdrops como herramienta de adquisición: qué hace que un airdrop funcione (Uniswap, ENS, Arbitrum) vs. los que generaron dump inmediato. Cómo diseñar el mío.
3. Los mecanismos de incentivo en comunidad: quests, contribuciones, rewards por comportamientos específicos. Plataformas como Layer3, Galxe o Zealy para gamificar la participación.
4. El vesting y los lockups como señal de confianza: cómo comunicarlos para que la comunidad los perciba como alineación y no como trampa.

**Parte 4 — KOLs e influencers en crypto**

La economía de los KOLs en Web3:
1. Cómo funciona el ecosistema de KOLs en crypto: los niveles (mega, macro, micro, nano), los precios reales y las métricas que importan (engagement, wallet holders entre sus seguidores).
2. Cómo identificar a los KOLs legítimos vs. los que tienen audiencias bot o que solo hacen paid promo sin convicción.
3. El modelo de compensación más alineado: cash, tokens, NFTs, equity. Qué funciona mejor para cada fase del proyecto.
4. Las colaboraciones entre proyectos como táctica de co-marketing: crossover de comunidades, integraciones técnicas que generan awareness mutuo.

**Parte 5 — Launch y growth**

Diseña el plan de launch para mi proyecto:
1. El cronograma de activación: qué pasa en el mes -3, -2, -1, el día del launch y las semanas posteriores.
2. Cómo generar FOMO sin engañar: las mecánicas de whitelist, allowlist y early access que funcionan éticamente.
3. Las métricas de Web3 marketing que importan: holders únicos, wallet activas, TVL, volumen de protocolo. Cómo medirlas y cuáles priorizo según mi tipo de proyecto.

Dame ejemplos concretos de proyectos que han ejecutado bien cada parte de esta estrategia.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 60,
                'use_case'          => 'Diseñar la estrategia de marketing para un proyecto Web3 desde cero',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Smart contracts en Solidity: seguridad, patrones y auditoría',
                'description'       => 'Escribe, testa y despliega contratos inteligentes en Solidity con los patrones de seguridad correctos: aprende de los errores que han costado millones al ecosistema.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un auditor de smart contracts senior con experiencia en Consensys Diligence, OpenZeppelin y Trail of Bits. Voy a desarrollar contratos inteligentes y quiero que me guíes por los aspectos de seguridad, patrones y buenas prácticas que no se aprenden en los tutoriales básicos.

**Mi contexto de desarrollo:**
- Tipo de contrato que voy a desarrollar: [token ERC-20/ERC-721/ERC-1155 / protocolo DeFi / DAO / escrow / vesting / bridge / otro]
- Mi nivel en Solidity: [principiante / intermedio / avanzado]
- Blockchain objetivo: [Ethereum mainnet / L2 (Base, Arbitrum, Optimism) / Polygon / otra]
- Framework de desarrollo: [Hardhat / Foundry / Truffle]
- El contrato específico que voy a escribir: [describe la funcionalidad en detalle]

**Parte 1 — Los errores que han costado millones**

Antes de escribir una sola línea, explícame:
1. Los 10 vectores de ataque más comunes en smart contracts con ejemplos reales: reentrancy (The DAO), integer overflow/underflow (BeautyChain), access control (Parity), oracle manipulation (Mango Markets), flash loan attacks (Euler Finance). Para cada uno, dame el patrón de ataque y el patrón de defensa.
2. Los errores específicos más comunes en el tipo de contrato que voy a desarrollar. No los genéricos, los que son específicos de mi caso de uso.
3. La diferencia entre un bug que permite robar fondos inmediatamente y uno que los congela para siempre. Ambos son igual de catastróficos.

**Parte 2 — Arquitectura y patrones**

Ayúdame a diseñar bien desde el inicio:
1. Los patrones de diseño de contratos que debo conocer: Proxy/Upgradeable contracts (transparente vs. UUPS), Access Control (Ownable vs. roles), Checks-Effects-Interactions, Pull over Push, Circuit Breaker.
2. Para mi caso de uso específico, qué patrones son esenciales y cuáles son prematuros (el error de sobre-ingeniar un contrato simple).
3. Cuándo usar contratos upgradeable y cuándo es un error: el trade-off entre flexibilidad y centralización.
4. Cómo usar las librerías de OpenZeppelin correctamente: qué se importa, qué se modifica y qué nunca se toca.

**Parte 3 — Testing exhaustivo**

El testing en contratos es vida o muerte:
1. La estrategia de testing completa: unit tests, integration tests, fuzzing (Foundry), invariant testing. Para mi contrato específico, qué nivel de cobertura necesito.
2. Los casos borde que siempre hay que testar en contratos que manejan fondos: zero values, maximum values, reentrancy attempts, failed external calls.
3. Cómo usar Foundry para fuzzing y property-based testing: dame un ejemplo de invariant test para mi tipo de contrato.
4. Las herramientas de análisis estático: Slither y Mythril. Cómo interpretarlos y qué findings hay que resolver antes de cualquier despliegue.

**Parte 4 — Gas optimization**

El gas es dinero real:
1. Los patrones de optimización de gas más impactantes: storage vs. memory vs. calldata, packing de variables, unchecked math cuando es seguro, eventos vs. storage.
2. Cuándo optimizar y cuándo no: el trade-off entre gas optimization y legibilidad del código que va a ser auditado.
3. Las herramientas para medir el consumo de gas: hardhat-gas-reporter, Foundry gas snapshots. Cómo establecer un baseline y detectar regresiones.

**Parte 5 — Despliegue y auditoría**

Antes de ir a mainnet:
1. El checklist de pre-despliegue que todo equipo debería seguir. Línea por línea, qué verifico antes de desplegar a mainnet.
2. Cómo contratar una auditoría: qué firmas hay (Trail of Bits, Sherlock, Code4rena, Immunefi), cuánto cuesta según la complejidad, cuánto tiempo tarda y qué me entrega.
3. Bug bounties: cuándo lanzar uno, cómo dimensionarlo y cómo gestionar los reports.
4. El proceso de despliegue seguro: multisig, timelocks, deployment scripts verificados. Para mi contrato específico, qué proceso mínimo debo seguir.

Escríbeme también el esqueleto del contrato para mi caso de uso con los comentarios NatSpec correctos y los checks de seguridad básicos ya incluidos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 90,
                'use_case'          => 'Desarrollar smart contracts seguros en Solidity con patrones profesionales',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'UX para dApps: diseña para wallets, gas y la complejidad de Web3',
                'description'       => 'Diseña aplicaciones descentralizadas accesibles: onboarding con wallets, confirmaciones de transacción, gas fees y los patrones que reducen la fricción sin sacrificar la descentralización.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un UX designer especializado en aplicaciones Web3 con experiencia en protocolos como Uniswap, OpenSea, Aave y wallets como MetaMask y Rainbow. Voy a diseñar una dApp y quiero que me guíes por los retos de UX específicos del mundo descentralizado.

**Contexto de mi proyecto:**
- Tipo de dApp: [DEX / lending / NFT marketplace / DAO voting / staking / bridge / otro]
- Público objetivo: [crypto nativos / usuarios Web2 haciendo onboarding / instituciones]
- Blockchain: [Ethereum / L2 / Solana / otra]
- Fase de diseño: [discovery / wireframes / prototipo / iterando sobre diseño existente]
- Principal reto que tengo ahora: [el onboarding es demasiado complejo / los usuarios no entienden el gas / la confirmación de transacciones genera abandono / otro]

**Parte 1 — Los retos únicos de UX en Web3**

Explícame el contexto de diseño específico:
1. Por qué el UX de Web3 es estructuralmente más difícil que el de Web2: las acciones son irreversibles, hay costes variables de transacción, la identidad es una wallet y el estado puede tardar en confirmar.
2. El gap de conocimiento del usuario: qué necesita entender el usuario mínimamente para usar una dApp de forma segura y qué es responsabilidad del diseño explicar vs. asumir que el usuario ya sabe.
3. Los patrones de abandono más comunes en dApps: en qué momento del flujo los usuarios se van y por qué. Dame datos si los conoces.

**Parte 2 — Onboarding con wallets**

El primer contacto es crítico:
1. La experiencia de conexión de wallet: los estados del flujo (no tiene wallet / tiene wallet pero no conectada / conectada / wrong network), cómo diseñar cada uno de forma que no frustre.
2. Wallet as a Service (WaaS): cuándo tiene sentido usar soluciones como Privy, Dynamic, Thirdweb o Magic para hacer el onboarding sin requerir que el usuario instale MetaMask desde el principio.
3. La primera transacción: cómo diseñar el primer momento en que el usuario firma algo para que entienda qué está haciendo, a quién le da qué permiso y por qué es seguro (o no).
4. Los patrones de progressive disclosure en Web3: cómo mostrar la complejidad del protocolo de forma gradual según la sofisticación del usuario.

**Parte 3 — Gas fees y transacciones**

El gas es el mayor generador de fricción:
1. Cómo explicar el gas fee al usuario de forma que no lo asuste pero que sea honesto sobre lo que paga. Los patrones de UI que normalizan el coste sin ocultar información.
2. La confirmación de transacción: el estado de pending puede durar segundos o minutos. Cómo diseñar ese estado de espera para que el usuario no piense que algo ha fallado.
3. Las transacciones fallidas: cómo comunicar un error de transacción de forma que el usuario entienda qué pasó y qué tiene que hacer. Los mensajes de error de blockchain son ilegibles.
4. Transaction simulation: cómo mostrar al usuario exactamente qué va a pasar antes de que firme. Los componentes de pre-confirmación que reducen el miedo a equivocarse.

**Parte 4 — Patrones de diseño específicos para dApps**

Dame la librería de patrones que debo conocer:
1. El token selector: cómo diseñar un selector de tokens que funcione bien con miles de opciones, muestre saldos en tiempo real y prevenga errores.
2. El input de cantidad: con precio en USD y en token, slippage warnings, los estados de error específicos de DeFi (insufficient balance, price impact too high).
3. El approval flow: una de las partes más confusas para usuarios no nativos. Cómo diseñar el flujo de approve + execute para que sea comprensible.
4. Las notificaciones de wallet: toast notifications para confirmaciones, alerts para transacciones que requieren atención. La cadencia correcta.

**Parte 5 — Accesibilidad y onboarding Web2**

Para usuarios que vienen de Web2:
1. El modo "simple" vs. "avanzado": cuándo vale la pena y cómo diseñar la transición entre los dos.
2. Los tooltips y modales educativos: cuándo explicar y cuándo el exceso de explicación genera más confusión.
3. El diseño del estado vacío para un usuario nuevo: cómo guiarle desde una wallet sin fondos hasta su primera transacción exitosa.

Termina con un audit de UX de las 3 dApps que mejor han resuelto los retos que describes y qué puedo aprender de cada una.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 65,
                'use_case'          => 'Diseñar la experiencia de usuario de una dApp reduciendo la fricción de Web3',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Ventas de soluciones blockchain enterprise: casos reales y superando el escepticismo',
                'description'       => 'Vende tecnología blockchain a grandes empresas con casos de uso probados en supply chain, identidad y finanzas: las objeciones reales y cómo superarlas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de ventas enterprise especializado en tecnología blockchain con experiencia vendiendo a corporaciones Fortune 500. Quiero mejorar mis conversiones en ventas de soluciones blockchain a grandes empresas.

**Mi contexto:**
- Solución que vendo: [describe el producto o servicio blockchain]
- Caso de uso principal: [supply chain / identidad digital / tokenización de activos / pagos / trazabilidad / smart contracts / otro]
- Empresas objetivo (ICP): [industria, tamaño, geografía]
- Ciclo de venta medio actual: [meses]
- Principal objeción que recibo: [describe la objeción más frecuente]
- Fase del proceso en que pierdo más oportunidades: [discovery / demo / propuesta / negociación / implementación]

**Parte 1 — El mercado real de blockchain enterprise**

Dame contexto honesto antes de cualquier táctica:
1. Los casos de uso de blockchain en enterprise que han demostrado ROI real vs. los que siguen siendo piloto eterno o han fracasado. Para cada categoría (supply chain, identidad, finanzas, NFTs empresariales), dame el estado actual honesto del mercado.
2. Por qué el 80% de los proyectos de blockchain enterprise no pasan de piloto. Las razones organizacionales, técnicas y políticas detrás de eso.
3. El comprador real de blockchain en una empresa grande: quién firma (CTO, CFO, CDO, COO), quién bloquea (IT security, legal, procurement) y quién debe ser el champion interno.

**Parte 2 — Discovery y calificación**

Las preguntas que salvan tiempo:
1. Las 10 preguntas de discovery que me permiten saber en la primera llamada si esta oportunidad tiene posibilidades reales o si voy a perder 6 meses.
2. Las señales de que una empresa está lista para implementar blockchain (no solo explorar): qué tienen que tener resuelto antes de que tenga sentido hablar con ellos.
3. Cómo diferenciar el interés real del blockchain tourism: los ejecutivos que quieren aprender pero no comprar.

**Parte 3 — Las objeciones reales**

Dame las respuestas a las objeciones que sí importan:
1. "No entiendo qué ventaja tiene blockchain frente a una base de datos normal": esta es la objeción que más separa los proyectos con sentido de los que no. Dame el árbol de decisión para responderla honestamente según el caso de uso.
2. "No podemos usar una blockchain pública por datos sensibles": cómo explicar las opciones (blockchain privada, hybrid, zero-knowledge proofs) sin perder al cliente en complejidad técnica.
3. "El ROI no está claro": cómo construir un business case para blockchain cuando los beneficios son parcialmente intangibles (confianza, interoperabilidad, automatización de procesos multi-empresa).
4. "¿Y si blockchain muere como tecnología?": cómo responder a la objeción de risk tecnológico con argumentos sólidos.
5. "Nuestro departamento de seguridad no va a aprobar esto": el proceso para trabajar con IT security desde el inicio y no al final.

**Parte 4 — La demo que convierte**

Diseña conmigo la demo perfecta:
1. Qué demostrar y qué no: el error de mostrar demasiada complejidad técnica a perfiles de negocio o demasiado poco a perfiles técnicos.
2. El caso de uso específico que genera más "aha moments" para mi tipo de solución.
3. Cómo demostrar la inmutabilidad, la trazabilidad o la automatización de contratos de forma que sea tangible para alguien que nunca ha usado blockchain.
4. El prototipo o sandbox que permita al cliente tocar la solución sin necesidad de integración.

**Parte 5 — De piloto a contrato**

El mayor problema de ventas blockchain:
1. Cómo estructurar el piloto para que tenga un criterio de éxito claro que lleve naturalmente al contrato full.
2. Las condiciones que deben estar en el piloto para que el cliente no lo use como forma de obtener trabajo gratis.
3. Cómo gestionar la expectativa de tiempo (blockchain implementation tarda más de lo que los clientes esperan) sin perder el cierre.
4. Los contratos y SLAs específicos para blockchain: qué cláusulas son críticas cuando el sistema es descentralizado.

Termina con 5 casos de éxito reales de ventas enterprise de blockchain que pueda usar como referencias en mis conversaciones.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 70,
                'use_case'          => 'Mejorar las conversiones en ventas enterprise de soluciones blockchain',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product management en Web3: tokens, comunidad y decisiones sin precedente',
                'description'       => 'Hacer producto en Web3 es radicalmente diferente: tokens como mecánica de producto, comunidad como co-creador y las decisiones que no tienen paralelo en Web2.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Product Manager con experiencia en protocolos Web3 líderes como Uniswap, Compound, Aave o protocolos emergentes. Quiero entender cómo hacer producto en Web3 de forma profesional y estructurada.

**Mi contexto:**
- Tipo de protocolo o dApp que gestiono: [DeFi / NFT / DAO / gaming / infraestructura / otro]
- Mi experiencia previa: [vengo de Web2 / llevo X tiempo en Web3]
- Fase del producto: [pre-launch / live con usuarios / escalando]
- Principal reto de producto actual: [no sé qué construir primero / la comunidad pide cosas contradictorias / no sé cómo priorizar / otro]

**Parte 1 — El rol del PM en Web3**

Explícame qué cambia radicalmente:
1. Por qué el framework de producto de Web2 (jobs to be done, OKRs clásicos, A/B testing, métricas de retención) funciona solo parcialmente en Web3 y qué hay que adaptar.
2. La naturaleza pública del desarrollo: el código es open source, el roadmap es público, los competidores pueden forkear tu protocolo. Cómo cambiar la estrategia de producto cuando no hay moat tecnológico tradicional.
3. La gobernanza como producto: en protocolos con governance token, algunas decisiones de producto requieren un voto de la comunidad. Cómo integrar esto en el proceso de PM sin perder velocidad.
4. El PM en un equipo descentralizado: sin jerarquía formal, con contribuidores de todo el mundo y con una comunidad que es simultáneamente usuario, inversor y stakeholder.

**Parte 2 — Token como mecánica de producto**

Esta es la diferencia más fundamental:
1. Cómo el token cambia la economía de incentivos del producto: qué comportamientos puedo incentivar con tokens que sería imposible o muy costoso en Web2.
2. El diseño de tokenomics como decisión de producto: cómo las decisiones de distribución, inflación, quema y vesting afectan al comportamiento de los usuarios y al health del protocolo a largo plazo.
3. Los problemas que crea el token como herramienta de producto: mercenarios que solo usan el protocolo mientras hay incentivos, concentración de governance, alineación de intereses a corto vs. largo plazo.
4. Casos de éxito de tokenomics como producto: Uniswap fee switch, Curve wars, el modelo veToken. Qué podemos aprender para mi protocolo.

**Parte 3 — Descubrimiento de producto con comunidad**

El proceso de discovery es diferente:
1. Cómo estructurar un proceso de discovery cuando tu comunidad es de miles de personas con opiniones fuertes y a veces contradictorias.
2. Los canales de feedback en Web3: Discord, Snapshot proposals, governance forums, on-chain data. Cómo pesar cada uno y cuándo cada tipo de feedback importa.
3. Cómo interpretar los datos on-chain como feedback de producto: qué métricas de uso del protocolo revelan fricciones, qué revela sobre las preferencias de los usuarios.
4. El proceso de RFC (Request for Comment) en Web3: cómo proponer cambios de protocolo de forma que la comunidad aporte sin que el proceso se convierta en caos.

**Parte 4 — Roadmap y priorización**

Cómo decidir qué construir:
1. El framework de priorización que funciona en Web3: cómo balancear entre lo que pide la comunidad, lo que revela el data on-chain, lo que dicen los competidores y la visión del equipo fundador.
2. Cómo comunicar el roadmap públicamente cuando cualquier anuncio puede mover el precio del token y atraer a especuladores.
3. Las decisiones de producto que necesitan governance vote vs. las que puede tomar el equipo unilateralmente. Dónde trazar esa línea.
4. Cómo gestionar la presión de los holders que quieren features que benefician el precio a corto plazo vs. la salud del protocolo a largo.

**Parte 5 — Métricas de producto en Web3**

Las métricas que importan:
1. Las métricas on-chain que todo PM de Web3 debe monitorizar: TVL, volumen, usuarios únicos, retención de wallets, distribución de governance.
2. Dónde están los datos: Dune Analytics, Nansen, DefiLlama, The Graph. Cómo construir mis dashboards de producto sin pagar fortune por herramientas.
3. Cómo medir el éxito de una feature en Web3 cuando no puedo hacer A/B testing de contratos en producción.

Incluye ejemplos específicos de decisiones de producto reales tomadas por protocolos top y qué podemos aprender de ellas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 75,
                'use_case'          => 'Aprender a hacer product management en protocolos y dApps Web3',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'RRHH en empresas crypto y Web3: talento, tokens y cultura 24/7',
                'description'       => 'Gestiona talento en el sector crypto: equipos globales, compensación en tokens, cultura pseudónima y las normas del empleo tradicional que no aplican en Web3.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Head of People con experiencia en empresas crypto y protocolos Web3. Quiero diseñar las prácticas de RRHH para una empresa o DAO en el ecosistema Web3.

**Contexto de mi organización:**
- Tipo: [startup crypto / protocolo Web3 / DAO / exchange / fondo de crypto / otro]
- Tamaño del equipo: [número]
- Distribución geográfica: [países principales donde hay equipo]
- Modelo legal: [empresa tradicional / DAO / híbrido]
- Principal reto de personas: [atracción de talento / retención / cultura / compensación / compliance laboral / otro]

**Parte 1 — Las reglas del juego en Web3**

Contexto que cambia todo:
1. Por qué el playbook de RRHH corporativo falla parcialmente en empresas crypto: la mentalidad del equipo, la velocidad de iteración, la cultura de open source y la visibilidad pública de todo lo que hace la organización.
2. El mercado de talento en Web3: dónde están los profesionales, qué valoran (misión, tokens, remote-first, autonomía) y cómo compites con gigantes como Coinbase o Binance sin tener su presupuesto.
3. Los roles que son únicos en Web3 (protocol engineers, tokenomics designers, community managers Web3, governance leads) y los que son iguales que en cualquier empresa tech.
4. La cultura pseudónima: cómo gestionar a colaboradores que trabajan bajo pseudónimo, que pueden ser anónimos en redes sociales pero comprometidos con el proyecto, y las implicaciones legales y de confianza.

**Parte 2 — Compensación en tokens**

El mayor diferenciador de Web3:
1. Cómo estructurar un paquete de compensación que combina salario en fiat + tokens con vesting. Los estándares del sector en 2025: qué porcentaje es típicamente en tokens, qué periodos de vesting son normales.
2. El cliff y el vesting schedule: cómo diseñarlos para que alineen al empleado con el largo plazo sin que el contrato sea una trampa en el caso de que el token pierda valor.
3. Cómo gestionar la situación de que el token ha bajado un 80%: los empleados tienen un paquete teóricamente en pérdidas. Qué herramientas hay para gestionar esta situación.
4. La tributación de la compensación en tokens: las implicaciones fiscales que RRHH debe conocer para asesorar a los empleados correctamente.
5. Los diferentes tipos de token grants: options, restricted token units, SAFTs. Cuál usar según la fase del proyecto y la jurisdicción.

**Parte 3 — Atracción y selección de talento**

Cómo reclutar en Web3:
1. Dónde encontrar talento Web3: Crypto Twitter, Discord de proyectos, ETHGlobal hackathons, Braintrust, CryptoCurrency Jobs. Para cada perfil (ingeniero, PM, marketing, operaciones), los mejores canales.
2. Cómo evaluar a un candidato Web3: qué pruebas técnicas, qué contributions on-chain puedo revisar, cómo valorar un portfolio de trabajo en proyectos open source.
3. El employer branding en Web3: qué comunica la organización sobre su misión, cultura y compensación para atraer talento que tiene muchas opciones.
4. Las red flags que indican que un candidato está en Web3 solo por el dinero vs. uno que está genuinamente comprometido con la misión.

**Parte 4 — Operativa de RRHH en contexto global y descentralizado**

La operativa que nadie explica:
1. Cómo contratar legalmente en múltiples países sin abrir entidades locales: Employer of Record (Remote, Deel, Rippling), contractors y las implicaciones de cada modelo.
2. Las herramientas de comunicación y coordinación para equipos 24/7 distribuidos en múltiples zonas horarias. Qué procesos deben ser asíncronos y cuáles requieren sincronía.
3. La cultura de empresa en un equipo donde algunos miembros son empleados, otros son contributors DAO y otros son pseudónimos: cómo crear cohesión sin uniformidad forzada.
4. El offboarding en Web3: cuando alguien sale, tienen acceso a wallets, claves de contratos y canales de Discord. El protocolo de offboarding seguro que evita riesgos.

**Parte 5 — Bienestar y retención**

El burnout en crypto es endémico:
1. Por qué las personas en crypto se queman más rápido: el mercado opera 24/7, la presión de precio del token afecta el ánimo del equipo y la cultura move fast es extrema. Qué hace RRHH al respecto.
2. Las políticas de descanso y desconexión que funcionan en empresas crypto sin ir en contra de la cultura de la industria.
3. Los indicadores de que el equipo está en riesgo de burnout y las acciones preventivas.

Dame ejemplos concretos de cómo empresas como Uniswap Labs, Consensys o Alchemy han estructurado sus equipos y prácticas de RRHH.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar las prácticas de personas para una empresa o DAO en el ecosistema Web3',
                'vote_score'        => 26,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'DeFi para profesionales de finanzas: análisis real más allá del hype',
                'description'       => 'Entiende las finanzas descentralizadas con rigor: lending, DEXes, yield farming, liquidaciones y el análisis de riesgo que falta en casi todas las explicaciones de DeFi.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un analista financiero senior con profundo conocimiento de los mercados tradicionales y del ecosistema DeFi. Voy a darte mi perfil y quiero entender DeFi con el nivel de rigor analítico que aplico a los instrumentos financieros tradicionales.

**Mi contexto:**
- Perfil financiero: [banca de inversión / gestión de activos / trading / finanzas corporativas / consultoría / otro]
- Conocimiento actual de crypto/DeFi: [ninguno / básico / tengo cripto pero no entiendo DeFi / uso DeFi básico]
- Objetivo: [entender para mi trabajo / evaluar inversión institucional / analizar riesgos para un cliente / integrar en cartera personal]
- Área de finanzas tradicionales en que soy más fuerte: [renta fija / renta variable / derivados / private equity / riesgo de crédito / otro]

**Parte 1 — La arquitectura de DeFi para un financiero**

Desde el punto de vista de las finanzas tradicionales:
1. El mapa del ecosistema DeFi: los primitivos financieros (lending, DEX, derivatives, stablecoins) y cómo mapean con sus equivalentes en TradFi. Dónde hay analogías exactas y dónde DeFi hace algo que no existe en el mundo tradicional.
2. Cómo funciona realmente una blockchain para un financiero: sin la metáfora de "libro de contabilidad distribuido", sino con la lógica de settlement, clearing y finalidad que un financiero entiende.
3. La infraestructura de DeFi: oráculos de precio (Chainlink, Pyth), bridges, stablecoins algorítmicas vs. colateralizadas. Para cada pieza, cuál es el riesgo sistémico que representa.

**Parte 2 — Lending y borrowing**

Los mercados monetarios descentralizados:
1. Cómo funciona Aave, Compound o Morpho: tasas de interés dinámicas, colateral, loan-to-value, factores de liquidación. Compara con los credit markets tradicionales: qué es similar y qué es radicalmente diferente.
2. El riesgo de liquidación: cuándo y cómo se liquida una posición en DeFi. Las cascadas de liquidación que han provocado crashes de mercado (marzo 2020, mayo 2021). El equivalente en TradFi y por qué en DeFi es más brutal.
3. El flash loan: no existe en TradFi. Explícame exactamente cómo funciona, para qué se usa legítimamente (arbitraje, liquidaciones) y para qué se usa de forma maliciosa (ataques de precio).
4. El riesgo de crédito en DeFi: ¿cómo hay préstamos sin identidad del prestatario? La lógica del overcollateralization y sus límites.

**Parte 3 — DEXes y market making**

Los mercados descentralizados:
1. Cómo funciona un Automated Market Maker (AMM): la fórmula x*y=k de Uniswap v2, los concentrated liquidity pools de v3. Compara con el market making tradicional de un creador de mercado.
2. El impermanent loss: el riesgo específico del LP en un AMM que no tiene equivalente en TradFi. Dame la matemática real, no la explicación simplificada.
3. El MEV (Maximal Extractable Value): sandwich attacks, front-running en blockchain. El equivalente regulado (y prohibido) en mercados tradicionales y por qué en DeFi es legal y sistémico.
4. Los orderbook DEXes (dYdX, Hyperliquid): cómo se diferencian de los AMM y cuándo tienen ventaja.

**Parte 4 — Yield farming y staking**

Cómo analizar el rendimiento real:
1. El APY en DeFi: por qué hay que descomponer yield (fees de protocolo) + token rewards + el riesgo de cada fuente. El rendimiento que parece atractivo vs. el rendimiento ajustado por riesgo.
2. Los riesgos de yield farming: smart contract risk, oracle risk, liquidity risk, rug pull. Para cada uno, cómo cuantificarlo y compararlo con el spread de crédito equivalente en TradFi.
3. El staking de ETH: diferencias entre staking nativo, liquid staking (Lido, Rocket Pool) y restaking (EigenLayer). El análisis de riesgo de cada nivel.

**Parte 5 — Análisis de riesgo y due diligence**

Como analista financiero, cómo evalúo un protocolo DeFi:
1. El due diligence de un protocolo DeFi: qué leo (whitepaper, documentación técnica, auditorías de seguridad), qué datos on-chain analizo (TVL, volumen, distribución de tokens, age of protocol).
2. Las métricas financieras de DeFi: P/E equivalente (P/S, P/TVL), revenue del protocolo, fee revenue. Cómo comparo protocolos entre sí.
3. El marco de análisis de riesgo sistémico en DeFi: cómo la composabilidad ("money legos") crea riesgo de contagio que es diferente al riesgo sistémico en TradFi.

Dame también una lista de los recursos que debo leer para seguir profundizando desde la perspectiva financiera seria.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 70,
                'use_case'          => 'Entender DeFi con rigor financiero tradicional para análisis e inversión',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Marco legal del blockchain en Europa: MiCA, tokens y riesgos reales',
                'description'       => 'El estado regulatorio de crypto, NFTs y tokens en Europa: qué es un valor, cómo tributa, qué exige MiCA y los riesgos legales que el sector ignora.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en regulación de activos digitales y blockchain con profundo conocimiento de la regulación europea y española. Quiero entender el marco legal vigente para operar en el ecosistema crypto de forma que cumpla con la normativa y gestione los riesgos correctamente.

**Contexto de mi actividad:**
- Tipo de actividad: [emisión de token / operación de exchange / servicio de custodia / DAO / NFT marketplace / DeFi / inversión en crypto / otro]
- Jurisdicción principal de operación: [España / UE / otra]
- Estado actual: [explorando el espacio / tengo un proyecto activo / tengo clientes que me preguntan sobre esto]
- Principal duda legal: [describe tu pregunta o situación más urgente]

**Parte 1 — MiCA: el nuevo marco regulatorio europeo**

El Reglamento de Mercados de Criptoactivos (MiCA) es la norma más importante:
1. Qué regula exactamente MiCA, qué queda fuera (DeFi, NFTs en algunos casos, activos financieros ya regulados por MiFID) y el calendario de aplicación completo.
2. Las tres categorías de criptoactivos en MiCA: tokens de referencia de activos (ART), tokens de dinero electrónico (EMT) y la categoría residual. Cómo clasifico mi token o actividad.
3. Los requisitos para operar como CASP (Crypto Asset Service Provider) bajo MiCA: capital mínimo, autorización, requisitos organizativos, libro blanco (white paper) y sus contenidos obligatorios.
4. Las obligaciones de transparencia y buen gobierno que MiCA impone: qué debo publicar, qué debo mantener como registro y qué informo periódicamente.
5. El pasaporte europeo de MiCA: qué ventajas da estar regulado en un país de la UE para operar en todos los demás.

**Parte 2 — La clasificación del token: la decisión legal más crítica**

Un error aquí puede convertir un proyecto en una emisión de valores no registrada:
1. El test de Howey aplicado a tokens: cuándo un token es un valor (security) bajo la ley española y europea. Los factores concretos que determinan la clasificación.
2. La diferencia entre utility token, payment token y security token en la práctica regulatoria europea actual. Cuándo la distinción es clara y cuándo el regulador puede discutir.
3. Los NFTs y su tratamiento regulatorio: cuándo un NFT es un activo digital bajo MiCA y cuándo puede ser un valor. La distinción entre NFTs de coleccionismo y NFTs fraccionales.
4. Los tokens de gobernanza DAO: cómo los regulan los supervisores europeos y qué riesgos implica emitir governance tokens sin una estructura legal clara.

**Parte 3 — Fiscalidad de criptoactivos en España**

Las reglas tributarias actuales:
1. El tratamiento fiscal de las operaciones con criptoactivos en España en 2025: ganancia patrimonial, rendimiento de capital mobiliario, actividad económica. Cuándo aplica cada categoría.
2. El staking y el yield farming: cómo tributan los rendimientos obtenidos. El debate del momento de devengo que aún no tiene respuesta clara.
3. Los NFTs: fiscalidad de la venta, de los royalties y del intercambio.
4. La declaración informativa de criptoactivos (Modelo 721): quiénes están obligados, qué se declara y las sanciones por incumplimiento.
5. Los crypto para empresas: cómo contabilizar y tributar en el Impuesto de Sociedades.

**Parte 4 — AML/KYC y prevención del blanqueo**

La regulación que más impacto operativo tiene:
1. Las obligaciones de PBC/FT para las empresas del sector crypto en España: quiénes son sujetos obligados, qué due diligence deben hacer y qué deben reportar al SEPBLAC.
2. La Travel Rule en crypto: qué es, qué exige y cómo la implementan los exchanges y custodios.
3. El KYC para DeFi: el debate regulatorio actual y hacia dónde va la regulación para protocolos descentralizados.

**Parte 5 — Riesgos y estrategia legal**

Para mi actividad específica:
1. Los riesgos legales que más frecuentemente ignoran los proyectos crypto y que acaban siendo el origen de problemas regulatorios graves.
2. Cómo estructurar un proyecto crypto legalmente para minimizar riesgos: qué entidad legal, en qué jurisdicción y con qué controles internos.
3. Cuándo es imprescindible tener un abogado especializado y cuándo puedo gestionar la parte legal internamente.

Nota: Esta respuesta es orientativa y no constituye asesoramiento legal. Para decisiones concretas, consulta con un abogado especializado en regulación de activos digitales en tu jurisdicción.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 80,
                'use_case'          => 'Entender el marco legal de MiCA y la regulación crypto en Europa para cumplimiento normativo',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Soporte en productos Web3: transacciones irreversibles y usuarios anónimos',
                'description'       => 'Gestiona el soporte en un producto Web3 donde los errores son permanentes, los usuarios son anónimos y la cultura de la comunidad desafía las normas del soporte tradicional.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un Head of Support con experiencia en productos Web3 como exchanges descentralizados, wallets y protocolos DeFi. Quiero diseñar el sistema de soporte para un producto Web3 que sea eficaz en un entorno radicalmente diferente al SaaS tradicional.

**Contexto de mi producto:**
- Tipo de producto: [wallet / DEX / protocolo DeFi / NFT marketplace / DAO / exchange centralizado / otro]
- Usuarios: [número aproximado, perfil]
- Volumen de tickets actual o esperado: [tickets por día/semana]
- Principal tipo de problema que reportan los usuarios: [fondos perdidos / transacciones fallidas / errores de interfaz / scams / otro]
- Estado actual del soporte: [no tenemos sistema / Discord caótico / otro]

**Parte 1 — Las reglas del soporte en Web3**

Las diferencias fundamentales que cambian todo:
1. La irreversibilidad como realidad del soporte: cuando un usuario envía fondos a una dirección incorrecta o interactúa con un contrato malicioso, no se puede hacer nada. Cómo gestionar estos tickets sin dejar al usuario desamparado pero sin crear falsas expectativas.
2. El anonimato de los usuarios: no tenemos nombre, no tenemos email verificado, no tenemos historial de cuenta. Cómo verificar la identidad del usuario para resolver su problema sin comprometer su privacidad.
3. Los scams como principal fuente de contacto: en Web3, una parte enorme de los tickets de soporte son usuarios que han sido víctimas de phishing, fake support o rug pulls. Cómo manejar esto con empatía pero con claridad.
4. La cultura de la comunidad crypto: los usuarios son exigentes, tienen alta tolerancia al riesgo pero baja tolerancia a la fricción, y esperan transparencia total. Cómo adaptar el tono y los procesos al contexto.

**Parte 2 — Canales de soporte en Web3**

El Discord como central de soporte:
1. Cómo estructurar un servidor de Discord para que el soporte sea eficiente sin que el servidor se convierta en caos: channels de soporte, bots de triaje, tickets vs. channels públicos.
2. Los bots de Discord para soporte en Web3: Ticket Tool, Helper.gg, bots custom. Cuál recomiendas para qué tamaño y tipo de producto.
3. Por qué el DM en Discord es la fuente principal de scams de soporte falso: cómo educar a los usuarios, qué medidas técnicas tomar y cómo comunicarlo de forma efectiva.
4. La integración de Discord con herramientas de soporte tradicionales (Intercom, Zendesk, Linear para bugs): cuándo tiene sentido y cuándo es sobredimensionado.

**Parte 3 — Tipología de tickets y cómo resolverlos**

Dame el playbook para cada tipo:
1. "Envié fondos a la dirección equivocada": diagnóstico, qué es recuperable y qué no, qué puedo hacer como soporte y cómo comunicarlo.
2. "Mi transacción está pending desde hace horas": cómo diagnosticar gas too low, nonce issues, network congestion, y qué pasos guiar al usuario.
3. "Me han hackeado la wallet": el protocolo de respuesta inmediata. Qué puede hacer el usuario, qué puede hacer el protocolo (si tiene algún control) y cómo gestionar el trauma del usuario.
4. "Estoy interactuando con este contrato y no sé si es legítimo": cómo enseñar al usuario a verificar contratos en Etherscan, cómo nuestra documentación puede prevenir esto.
5. "El protocolo tomó más slippage del esperado": explicación técnica accesible y cómo prevenir esto con la configuración correcta.

**Parte 4 — Educación como herramienta de soporte preventivo**

El soporte que evita tickets:
1. El centro de ayuda para un producto Web3: qué contenido reducirá más el volumen de tickets según el tipo de producto que tengo.
2. Las advertencias in-app que previenen los errores más comunes: cuándo mostrarlas, qué decir y cómo no asustar al usuario con cada transacción.
3. Los mensajes de error que realmente ayudan: los errores de blockchain son crípticos. Cómo traducirlos a lenguaje de usuario sin perder precisión técnica.
4. La comunidad como primera línea de soporte: cómo identificar y empoderar a los usuarios avanzados que ayudan a otros en Discord antes de que llegue el equipo.

**Parte 5 — Métricas y operativa**

Las métricas de soporte en Web3:
1. Qué métricas seguir cuando no tienes tickets tradicionales sino threads de Discord: tiempo de primera respuesta, tasa de resolución, CSAT en un entorno anónimo.
2. Cómo escalar el equipo de soporte cuando el producto crece: cuándo contratar vs. cuándo usar la comunidad, qué perfil buscar en un support specialist de Web3.
3. El protocolo de comunicación de incidentes: cuando el protocolo tiene un bug o sufre un ataque, cómo comunicar en tiempo real para mantener la confianza de la comunidad.

Termina con las 5 mejores prácticas de soporte que los mejores productos Web3 han implementado y que más impacto han tenido en la satisfacción de usuarios.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar el sistema de soporte para un producto Web3 con las particularidades del ecosistema',
                'vote_score'        => 22,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Freelance en Web3: DAOs, crypto payments y más oportunidades que talento',
                'description'       => 'El ecosistema Web3 paga en crypto, trabaja en DAOs y tiene más demanda que oferta de talento: cómo entrar, dónde encontrar proyectos y cómo gestionar el riesgo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un freelance senior con 4 años de experiencia trabajando en proyectos Web3, habiendo colaborado con múltiples DAOs, protocolos y startups del ecosistema. Quiero entrar al mercado de trabajo freelance en Web3 o expandir mi presencia en él.

**Mi contexto:**
- Mi especialidad actual: [desarrollo / diseño / marketing / escritura / legal / finanzas / community management / otro]
- Experiencia en Web3: [ninguna / básica (tengo crypto) / participé en DAOs / tengo proyectos en mi portfolio]
- Objetivo principal: [ingresos complementarios / transición completa a Web3 / proyectos específicos]
- Principal barrera que percibo: [no sé por dónde empezar / no tengo portfolio Web3 / no entiendo cómo funcionan los pagos en crypto / no sé si es estable]

**Parte 1 — El mercado de freelance en Web3**

Entiende el ecosistema antes de entrar:
1. Por qué hay más demanda que oferta en Web3 para casi todas las especialidades: el ecosistema es joven, muchos proyectos están bien financiados y la mayoría de freelancers no se sienten cómodos con la incertidumbre del espacio.
2. Los tipos de cliente en Web3: DAOs, protocolos descentralizados, startups crypto con VC, NFT studios, fondos de inversión crypto. Las diferencias en cómo trabajan, cómo pagan y qué esperan de un colaborador.
3. Los skills más demandados en Web3 según cada especialidad: para un desarrollador (Solidity, Rust, TypeScript/Web3.js, Foundry), para un diseñador (UX para dApps, tokenomics visualization, brand para crypto), para un marketer (community growth, tokenomics marketing, X y Discord). Dame la lista para mi especialidad.
4. La seasonality de Web3: cómo el mercado bull/bear afecta la demanda y los presupuestos. Cómo planificar para que un bear market no destruya mis ingresos.

**Parte 2 — Dónde encontrar proyectos**

Los canales específicos de Web3:
1. Las plataformas de trabajo freelance en Web3: Braintrust (DAO de talent), Cryptojobslist, web3.career, Dework, Layer3, ethlance. Para mi especialidad y nivel, cuáles son los mejores y cómo destacar en cada uno.
2. Los hackathons como puerta de entrada: ETHGlobal, Solana hackathons, los hackathons organizados por protocolos específicos. Cómo usar un hackathon para conseguir mi primer proyecto pagado en Web3.
3. La contribución a DAOs como freelance: cómo entrar en una DAO sin invitación previa, cómo identificar las bounties y trabajos disponibles, y cómo construir reputación dentro de una DAO que genere más oportunidades.
4. El outbound en Web3: Discord es el LinkedIn de este ecosistema. Cómo hacer outreach de forma efectiva en los servidores de Discord de proyectos que me interesan.
5. Las grants de protocolos: Ethereum Foundation, Optimism RPGF, Solana Foundation, Gitcoin. Cuándo aplican, qué proyectos financian y si son relevantes para un freelance.

**Parte 3 — Pagos en crypto**

La parte que más miedo da a quien viene de fuera:
1. Cómo recibir pagos en crypto como freelance: wallets que usar, qué red (Ethereum mainnet vs. L2 para evitar gas fees), qué stablecoins son las más usadas para pagos freelance (USDC, USDT, DAI).
2. Los contratos inteligentes de pago: cómo funcionan los streaming payments (Sablier, Superfluid), los escrows on-chain y cuándo protegen al freelance vs. al cliente.
3. La conversión de crypto a fiat: los mejores procesos para convertir sin perder mucho en fees y sin problemas regulatorios. El KYC de los exchanges y qué documentación necesitar.
4. La facturación y la declaración de impuestos cuando cobras en crypto: qué necesito registrar, cuándo se produce el hecho imponible y qué herramientas uso para el tracking (Koinly, Cointracking, Cryptio para empresas).

**Parte 4 — Portfolio y posicionamiento**

Cómo construir credibilidad en Web3:
1. Cómo construir un portfolio de Web3 cuando no tengo proyectos previos: los proyectos de práctica que demuestran skills, las contribuciones open source y las auditorías de contratos públicos que puedo hacer como práctica.
2. La importancia de tu wallet como portfolio: en Web3, lo que has hecho on-chain es verificable. Cómo usar tu historial de transacciones y contribuciones como parte de tu presentación.
3. La presencia en X (crypto Twitter): para un freelance en Web3, tener una presencia activa en CT es más valioso que LinkedIn. Cómo construirla sin que absorba demasiado tiempo.
4. El pseudónimo vs. identidad real: los pros y contras de trabajar bajo un pseudónimo en Web3 desde la perspectiva del freelance.

**Parte 5 — Gestión del riesgo**

Lo que nadie te cuenta:
1. Cómo gestionar la inestabilidad de ingresos propia de Web3: el proyecto se cancela, el token pierde el 70% de valor y el cliente paga menos de lo acordado. Estrategias concretas de gestión financiera.
2. Los contratos y acuerdos para protegerme como freelance en Web3: qué debe incluir un acuerdo, cómo manejar el pago en tokens con precio variable.
3. Los scams más comunes que afectan a freelancers en Web3: fake clients, proyectos que pagan con tokens sin liquidez, rug pulls después de entregar el trabajo. Cómo identificarlos antes de empezar.

Termina con las acciones concretas que debo hacer esta semana para empezar a entrar en el ecosistema de freelance Web3.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 40,
                'use_case'          => 'Entrar y crecer como freelance en el ecosistema Web3',
                'vote_score'        => 37,
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
