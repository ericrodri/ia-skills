<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills143Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing global con equipos locales',
                'description'      => 'Coordina la estrategia global con la ejecución local: el modelo hub-and-spoke, los toolkits de marca y la autonomía que necesitan los equipos locales para ser relevantes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como CMO global con experiencia gestionando equipos de marketing distribuidos en 5 o más mercados. Quiero diseñar el modelo operativo de marketing internacional para mi empresa que equilibre la coherencia de marca con la relevancia local.

Mi situación: [describe en qué mercados operates o planeas operar, qué tamaño tienen los equipos locales, si tienen experiencia previa con marketing o son equipos comerciales haciendo marketing, y cuál es la mayor tensión que existe hoy entre el equipo central y los equipos locales].

**Lo que necesito:**

Primero, explícame el modelo hub-and-spoke aplicado al marketing: cómo funciona el reparto de responsabilidades entre el equipo central (HQ) y los equipos locales, qué decisiones deben tomarse centralmente y cuáles deben delegarse, y cómo varía este modelo según el tamaño y la madurez de cada mercado local.

Segundo, ayúdame a diseñar el Brand Toolkit internacional: qué debe incluir para que los equipos locales puedan ejecutar campañas relevantes sin romper la coherencia de marca, cómo estructurarlo por nivel de obligatoriedad (must-have vs. adaptable), y cómo mantenerlo actualizado sin convertirlo en un documento que nadie lee.

Tercero, diseña el proceso de campañas internacionales: cómo se produce una campaña global que luego los equipos locales adaptan, cuánto tiempo de adelanto necesitan los equipos locales para planificar bien, y cómo gestionar las excepciones cuando un mercado necesita algo diferente.

Cuarto, ayúdame a estructurar el sistema de briefing y aprobación: el flujo de trabajo desde que el equipo central lanza un brief hasta que el equipo local ejecuta la campaña, incluyendo los puntos de revisión, los tiempos razonables y cómo evitar el cuello de botella de la aprobación central sin perder control de calidad.

Quinto, propón el modelo de gobierno del marketing global: la cadencia de reuniones entre HQ y los mercados, qué se comparte en cada reunión, cómo se gestionan los aprendizajes cross-market para que lo que funciona en un país llegue a los demás, y cómo construyes la comunidad de marketing global.

Sexto, dame las métricas que usarías para gestionar la salud del modelo: indicadores de coherencia de marca, indicadores de eficiencia de los equipos locales, y las señales que te dicen que un mercado tiene demasiada o demasiado poca autonomía.

Séptimo, explica cómo gestionar los conflictos más comunes: qué hacer cuando el mercado local dice que la estrategia global no funciona en su cultura, cómo resolver las disputas de presupuesto entre HQ y los mercados, y cómo manejar los "supermercados" que prefieren hacer las cosas a su manera.

Termina con las 3 lecciones que más se repiten en las implementaciones fallidas del modelo hub-and-spoke de marketing y cómo evitarlas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar el modelo operativo de marketing internacional con equipos locales',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Internacionalización (i18n) de software',
                'description'      => 'Implementa i18n desde el inicio: manejo de cadenas, pluralización, formatos de fecha/número/moneda y las librerías que lo hacen menos doloroso.',
                'prompt_content'   => <<<'PROMPT'
Actúa como senior software engineer especializado en internacionalización y localización de aplicaciones. Quiero implementar i18n en mi proyecto de forma que escale sin convertirse en una pesadilla de mantenimiento.

Mi proyecto: [describe el stack tecnológico —framework frontend, backend, lenguaje de programación—, los idiomas que necesitas soportar ahora y los que podrías necesitar en el futuro, y si el proyecto ya existe o estás empezando desde cero].

**Lo que necesito:**

Primero, dame los fundamentos de i18n que todo desarrollador debe entender antes de empezar: la diferencia entre internacionalización (i18n) y localización (l10n), por qué es mucho más caro hacerlo después que desde el principio, y los errores de arquitectura más comunes que complican la localización futura.

Segundo, diseña la estrategia de gestión de cadenas de texto: cómo estructurar los archivos de traducción (JSON, PO, XLIFF), la convención de naming de las claves que escala bien cuando tienes miles de strings, cómo manejar el contexto para que los traductores entiendan qué traducen, y cómo organizar las traducciones por módulo o feature.

Tercero, explícame el manejo correcto de la pluralización: por qué no basta con singular/plural en inglés cuando soportas idiomas eslavos o árabes, las reglas de pluralización de CLDR, y cómo las principales librerías (i18next, ICU MessageFormat, react-intl) manejan esto con ejemplos de código.

Cuarto, dame el modelo para manejar formatos de fecha, hora, número y moneda: cómo usar la Internationalisation API nativa del navegador (Intl), cuándo necesitas una librería adicional, y los casos límite que hacen fallar las implementaciones naïve (zonas horarias, formatos de semana, separadores decimales).

Quinto, propón la arquitectura para manejar contenido bidireccional (RTL): qué cambios necesita el CSS, cómo testear el layout en árabe o hebreo sin tener un hablante nativo, y las librerías que facilitan el soporte RTL en los frameworks más comunes.

Sexto, diseña el pipeline de localización: cómo extractas las cadenas del código, las envías a traductores, las importas de vuelta y las despliegas. Recomienda herramientas (Lokalise, Crowdin, Phrase) y explica cómo integrar ese pipeline en el proceso de CI/CD para que las traducciones no sean un cuello de botella en los releases.

Séptimo, dame el plan de testing de i18n: qué pruebas automatizadas escribir para detectar strings sin traducir, desbordamientos de layout por cadenas más largas (el alemán es un 30% más largo que el inglés), y cómo configurar un entorno de pseudo-localización para detectar problemas antes de tener traductores reales.

Termina con una checklist de i18n para code review: las 10 cosas que deben verificarse en cada pull request para no introducir problemas de localización.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Implementar internacionalización robusta en una aplicación web o móvil',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño para mercados internacionales',
                'description'      => 'Los aspectos de diseño que cambian según el mercado: RTL para árabe y hebreo, variaciones culturales de color y las consideraciones que evitan errores costosos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como design lead con experiencia diseñando productos para múltiples mercados culturales. Quiero entender cómo adaptar el diseño de mi producto o marca para diferentes mercados sin cometer errores culturales costosos.

Mi proyecto: [describe qué estás diseñando —una app, una web, materiales de marketing—, los mercados objetivo actuales y futuros, y si tienes ya algún diseño base que necesitas adaptar o estás empezando desde cero].

**Lo que necesito:**

Primero, dame una visión general de las dimensiones del diseño que cambian según la cultura: tipografía y dirección del texto, uso del color y sus connotaciones culturales, iconografía y simbolismo, densidad de información preferida, y las diferencias en cómo se percibe la jerarquía visual en diferentes culturas. Pon ejemplos específicos para los mercados más comunes.

Segundo, profundiza en el diseño RTL (right-to-left) para árabe y hebreo: no solo el espejado del layout, sino también los cambios en iconos direccionales, los patrones de navegación, las diferencias en tipografía árabe vs. latina, y los errores más comunes que cometen los diseñadores que no hablan esos idiomas. Dame un checklist de revisión RTL.

Tercero, explícame la psicología cultural del color con ejemplos concretos: el significado del rojo en China vs. Occidente vs. Sudáfrica, el uso del blanco en culturas asiáticas, el verde en mercados islámicos, y cómo equilibrar la identidad de marca con la sensibilidad cultural cuando los colores corporativos tienen connotaciones negativas en un mercado.

Cuarto, diseña un sistema de iconografía culturalmente neutral: qué iconos tienen significados diferentes según el mercado (la mano, el ojo, ciertos gestos), cómo testear la comprensión de iconos con usuarios locales, y qué alternativas usar cuando el icono estándar no funciona en un mercado.

Quinto, explica las diferencias de densidad y complejidad visual por cultura: por qué los diseños minimalistas occidentales pueden percibirse como incompletos o poco profesionales en algunos mercados asiáticos, cómo adaptar la densidad de información sin rediseñar desde cero, y cómo tomar esa decisión con datos de usuarios reales.

Sexto, propón el proceso de design review cultural: cómo estructurar el feedback de usuarios locales antes del lanzamiento, qué preguntas hacer en un test de usabilidad cross-cultural, y cómo incorporar ese feedback en el proceso de diseño sin que ralentice los ciclos de lanzamiento.

Séptimo, dame un plan de adaptación de un design system existente para múltiples mercados: cómo gestionar los tokens de diseño que necesitan variar por mercado (colores, tipografías, espaciados para idiomas con caracteres más anchos), cómo documentarlo para que el equipo de desarrollo lo implemente correctamente.

Termina con los 5 errores de diseño cross-cultural más costosos que has visto, qué los causó y cómo podrían haberse evitado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Adaptar un diseño de producto o marca para mercados culturalmente diferentes',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Expansión comercial internacional',
                'description'      => 'Abre nuevos mercados geográficos: el proceso de validación, la selección del canal de entrada y las particularidades comerciales de cada región.',
                'prompt_content'   => <<<'PROMPT'
Actúa como director de desarrollo de negocio internacional con experiencia abriendo mercados en Europa, Latinoamérica y Asia. Quiero diseñar la estrategia de expansión comercial de mi empresa a nuevos mercados geográficos.

Mi empresa: [describe el producto o servicio, el mercado donde operas actualmente, los mercados que estás considerando para expandirte, el tamaño del equipo comercial y el presupuesto aproximado que tienes para la expansión].

**Lo que necesito:**

Primero, ayúdame a priorizar los mercados objetivo: el framework de evaluación que usarías —tamaño del mercado, competencia local, barreras regulatorias, afinidad cultural con tu oferta, infraestructura de pagos y legal, tiempo estimado hasta los primeros ingresos— y cómo ponderarlo según mi tipo de negocio.

Segundo, diseña el proceso de validación antes de invertir en un mercado: las señales que buscarías para confirmar la demanda sin abrir una oficina, cómo conseguir los primeros 3-5 clientes en el mercado objetivo a distancia, y cuándo has validado suficiente para hacer la inversión formal.

Tercero, explícame los modelos de entrada al mercado: las diferencias entre venta directa, partnership con distribuidor local, resellers, y agentes comerciales. Para mi tipo de producto y mercado, qué modelo tiene más sentido en la fase inicial y cuándo tiene sentido cambiar de modelo.

Cuarto, dame las particularidades comerciales de los mercados más comunes: cómo son los ciclos de venta en Alemania vs. España vs. México, las diferencias culturales en la negociación, los plazos de pago típicos, y qué espera el cliente de cada región en términos de soporte, idioma y presencia local.

Quinto, diseña el plan de go-to-market para los primeros 90 días en un nuevo mercado: cómo construir el pipeline inicial desde cero, qué canales de prospección funcionan mejor en mercados donde no tienes marca, y cómo conseguir las primeras referencias que multiplican el crecimiento.

Sexto, ayúdame a estructurar el equipo comercial internacional: cuándo contratar el primer empleado local, qué perfil buscar, cómo gestionar un equipo remoto en otro huso horario, y cómo replicar la cultura de ventas de la sede en un equipo nuevo.

Séptimo, diseña el sistema de reporte y gobierno de la expansión: las métricas que usarías para evaluar si el mercado está despegando o hay que pivotar, con qué frecuencia revisarías el progreso y qué señales indicarían que hay que acelerar o frenar la inversión.

Termina con los errores más costosos que cometen las empresas cuando expanden comercialmente sin suficiente preparación, y qué haría diferente alguien que ya ha pasado por eso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar la estrategia de expansión comercial internacional de una empresa',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Producto global',
                'description'      => 'Las decisiones de producto que permiten servir a múltiples mercados sin multiplicar la complejidad: feature flags por región, localización y compliance local.',
                'prompt_content'   => <<<'PROMPT'
Actúa como product director con experiencia lanzando productos digitales en múltiples mercados simultáneamente. Quiero diseñar la arquitectura de producto que me permita servir a varios países sin que la complejidad se multiplique de forma incontrolable.

Mi producto: [describe el tipo de producto —SaaS B2B, app de consumo, marketplace—, los mercados donde opera actualmente y los que vas a añadir, y cuál es el mayor desafío que has identificado para la expansión internacional del producto].

**Lo que necesito:**

Primero, explícame el framework de decisiones de localización: qué es obligatorio localizar (texto, formatos de fecha, moneda, compliance), qué es recomendable (UX cultural, soporte en idioma local) y qué es opcional (contenido de marketing, funcionalidades específicas de mercado). Ayúdame a crear la matriz de priorización para mi tipo de producto.

Segundo, diseña la arquitectura de feature flags por región: cómo implementar un sistema que te permita activar o desactivar funcionalidades por país, controlar el rollout gradual en nuevos mercados, y gestionar excepciones de compliance (funcionalidades prohibidas en ciertos países) sin que el código base se llene de condicionales.

Tercero, ayúdame a gestionar los requisitos de compliance local en el roadmap: cómo estimas el esfuerzo de GDPR, PCI DSS, requisitos de facturación local, restricciones de datos (data residency) o regulaciones sectoriales, y cómo priorizar ese trabajo contra las features de producto que generan crecimiento.

Cuarto, propón el modelo de localización del contenido de producto: la diferencia entre traducción automática y localización de calidad, cómo gestionar el proceso de traducción de UI strings, emails, notificaciones y documentación, y cómo mantener sincronizados los idiomas cuando el producto evoluciona rápido.

Quinto, diseña el proceso de discovery para mercados internacionales: cómo hacer user research cuando no hablas el idioma, cómo identificar si un problema es universal o específico de un mercado, y cómo priorizar las necesidades de mercados locales sin fragmentar el roadmap global.

Sexto, explica cómo gestionar la tensión entre product global y necesidades locales: el modelo de decisión para aceptar o rechazar una feature request que solo es relevante para un mercado, cómo evaluar si una funcionalidad local debería universalizarse, y cómo comunicar a los equipos locales cuando priorizas el producto global.

Séptimo, dame las métricas de producto que monitorizarías por mercado: cómo segmentas el análisis de retención, conversión y engagement por región para identificar dónde el producto necesita adaptaciones, y cómo distingues un problema de producto de un problema de go-to-market.

Termina con las 3 decisiones de arquitectura de producto que tienen más impacto a largo plazo en la capacidad de expansión internacional, y cómo tomarlas correctamente desde el principio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar la arquitectura de producto para expansión a múltiples mercados internacionales',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'RRHH global',
                'description'      => 'Gestiona equipos en múltiples países: las diferencias laborales, los proveedores de employer of record (EOR) y las políticas que equilibran consistencia global con necesidades locales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como VP de People con experiencia gestionando equipos distribuidos en más de 5 países. Quiero diseñar el modelo de RRHH global de mi empresa que me permita contratar y retener talento internacionalmente sin una infraestructura legal en cada país.

Mi situación: [describe en qué países tienes o quieres tener empleados, el tamaño total del equipo, si ya tienes entidades legales propias en algún país o todo es remoto sin presencia formal, y cuál es la mayor fricción que tienes hoy con los empleados internacionales].

**Lo que necesito:**

Primero, explícame las opciones para contratar en el extranjero sin constituir una entidad propia: la figura del Employer of Record (EOR), los contratistas independientes (y sus riesgos de reclasificación), las plataformas PEO (Professional Employer Organization), y cuándo tiene sentido constituir una entidad propia. Dame los criterios de decisión para elegir el modelo correcto según el país y el número de empleados.

Segundo, ayúdame a evaluar los proveedores de EOR más importantes: compara Deel, Remote, Rippling, Oyster y Papaya Global en términos de cobertura geográfica, coste, calidad del soporte local, rapidez de contratación y funcionalidades adicionales (nómina, equity, beneficios). Para mi caso concreto [especifica países], dame una recomendación.

Tercero, diseña las políticas de RRHH que necesitan ser globales vs. locales: qué políticas deben ser iguales en todos los países (valores, código de conducta, gestión del rendimiento), qué debe adaptarse localmente (beneficios, horarios, festividades), y cómo documentar y comunicar este framework a toda la organización.

Cuarto, explica las diferencias laborales más importantes entre los mercados más comunes: los períodos de preaviso en Alemania vs. España vs. UK vs. EEUU, las indemnizaciones por despido, los convenios colectivos que pueden afectar tus contratos, y las vacaciones mínimas legales que varían enormemente entre países.

Quinto, ayúdame a diseñar la política de compensación global: cómo manejar las diferencias de mercado salarial entre países (un engineer en San Francisco cobra 3x que en Polonia), si usar bandas globales o locales, cómo gestionar la percepción de equidad cuando los salarios son diferentes por geografía, y cómo comunicarlo de forma transparente.

Sexto, propón el modelo operativo de RRHH global: cómo gestionas la nómina multidivisa, qué herramientas de HRIS soportan equipos distribuidos (Workday, BambooHR, HiBob, Personio), cómo manejas las revisiones de rendimiento cuando los managers y sus equipos están en zonas horarias diferentes.

Séptimo, diseña el employee experience para equipos remotos e internacionales: cómo construyes cultura de empresa cuando nunca todos están en el mismo lugar, los rituales que funcionan para equipos distribuidos y los que no, y cómo aseguras que los empleados de mercados pequeños no se sienten ciudadanos de segunda clase en la empresa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar el modelo de RRHH global para contratar y gestionar equipos en múltiples países',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Expansión internacional y tesorería',
                'description'      => 'Gestiona múltiples divisas, riesgos de tipo de cambio, repatriación de beneficios y las estructuras fiscales que optimizan una operación multinacional.',
                'prompt_content'   => <<<'PROMPT'
Actúa como CFO con experiencia gestionando la complejidad financiera de empresas que operan en múltiples divisas y jurisdicciones fiscales. Quiero preparar la estructura financiera de mi empresa para la expansión internacional.

Mi empresa: [describe el modelo de negocio, la divisa funcional actual, los países a los que estás expandiendo, y cuál es la principal preocupación financiera que tienes respecto a la expansión].

**Lo que necesito:**

Primero, explícame el modelo de consolidación de divisas: cómo funciona la exposición al tipo de cambio (transaccional, traslacional y económica), cuál de las tres es más relevante para mi tipo de negocio, y las estrategias básicas de hedging natural (facturar en la divisa del cliente, emparejar costes e ingresos) antes de necesitar instrumentos financieros derivados.

Segundo, diseña la política de gestión de tesorería multinacional: cómo centralizar la tesorería en una estructura de cash pooling o notional pooling, cuándo tiene sentido abrir cuentas bancarias locales vs. usar una cuenta en una fintech global (Wise Business, Mercury, Airwallex), y cómo automatizar la repatriación de beneficios a la entidad matriz.

Tercero, ayúdame a entender los fundamentos del transfer pricing: por qué importa cuando tienes entidades en múltiples países, qué es el principio arm's length, cómo estructuras los cargos intercompany de forma defensible, y cuándo necesitas un asesor fiscal especializado que no sea tu asesor local habitual.

Cuarto, explica las implicaciones fiscales de la estructura internacional: la diferencia entre un establecimiento permanente (que crea obligaciones fiscales) y una filial, las retenciones de dividendos entre países según los convenios de doble imposición, y las estructuras de holding más comunes y por qué las usan las empresas en expansión.

Quinto, propón el modelo de previsión financiera consolidada: cómo construyes un P&L y un cash flow consolidado cuando tienes entidades en múltiples divisas, con qué tipo de cambio consolidas (cierre del período, promedio mensual, presupuestado), y cómo separas las variaciones de divisa de las variaciones de negocio en el reporting.

Sexto, diseña el sistema de control financiero para filiales: qué nivel de autonomía financiera tiene cada filial local, qué aprobaciones requieren del CFO central, cómo haces el cierre mensual consolidado sin que sea un proceso manual interminable, y las herramientas (Netsuite, Workday Financial, Xero multi-entity) que recomendarías.

Séptimo, dame el calendario de cumplimiento fiscal internacional: qué obligaciones fiscales y de reporting exigen los mercados más comunes donde vas a operar, cuándo contratarías un asesor fiscal local vs. usar una firma global, y cómo gestionas el riesgo de sanciones por incumplimiento cuando no conoces bien la regulación local.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Estructurar la tesorería y fiscalidad de una empresa en expansión internacional',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legal de la expansión internacional',
                'description'      => 'Los aspectos legales de entrar en un nuevo mercado: constitución de entidad, contratos locales, cumplimiento regulatorio y las decisiones de estructura que protegen la matriz.',
                'prompt_content'   => <<<'PROMPT'
Actúa como General Counsel con experiencia acompañando a empresas tecnológicas en su expansión a mercados internacionales. Quiero entender el mapa legal completo de lo que necesita mi empresa para operar correctamente en nuevos países.

Mi situación: [describe en qué país estás constituida actualmente, a qué mercados vas a expandirte, el tipo de operación que vas a tener en cada país —solo ventas, o también empleados o infraestructura—, y cuál es el principal riesgo legal que te preocupa].

**Lo que necesito:**

Primero, explícame las opciones de estructura legal para entrar en un nuevo mercado: la sucursal (branch) vs. la filial (subsidiary), la figura del representante comercial sin entidad, el establishment permanente y sus consecuencias fiscales. Para cada modelo, dame los pros, los contras, el coste y el tiempo estimado de constitución en los mercados más comunes.

Segundo, diseña el proceso de constitución de una entidad en los mercados principales: qué pasos son necesarios para constituir una SL/GmbH/Ltd/SAS según el país, los documentos que necesitas de la entidad madre, los tiempos reales de constitución (no los teóricos), y los registros adicionales (fiscal, laboral, social) que deben completarse antes de poder operar.

Tercero, ayúdame a entender los contratos que necesito adaptar para cada mercado: cuáles son los términos y condiciones de venta que no son ejecutables en ciertos países, qué cláusulas son obligatorias por ley local (garantías legales de consumidor en la UE, por ejemplo), y cómo gestionar la ley aplicable y la jurisdicción cuando vendes a clientes internacionales.

Cuarto, diseña el mapa de cumplimiento regulatorio para los mercados más relevantes: las regulaciones de protección de datos que aplican (GDPR, LGPD, CCPA, PDPA), las licencias específicas que puede requerir tu sector, y las restricciones de importación de software o datos que pueden afectar a un producto digital.

Quinto, explícame las implicaciones del GDPR para una empresa española que vende a otros países de la UE y a países fuera de la UE: qué mecanismos de transferencia internacional de datos son válidos (Adequacy Decisions, SCCs, BCRs), cómo documentar el cumplimiento, y qué nivel de riesgo real supone no tener un programa de privacidad robusto.

Sexto, propón la estrategia de propiedad intelectual para la expansión internacional: cómo proteger la marca en nuevos mercados (registro de trademark por jurisdicción vs. EUIPO vs. OMPI), cómo gestionar el riesgo de que alguien registre tu marca antes que tú en un nuevo mercado, y cómo proteger el software y la IP en países con protección débil.

Séptimo, diseña el sistema de governance legal internacional: cómo gestionas las relaciones con los abogados locales en cada país (firma local vs. firma global con práctica local), cómo mantienes la consistencia de los contratos y las políticas, y cómo construyes un knowledge base legal que no dependa completamente de asesores externos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Planificar el mapa legal completo para la expansión internacional de una empresa',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'CS para clientes internacionales',
                'description'      => 'Gestiona clientes en múltiples zonas horarias, idiomas y culturas: las adaptaciones del proceso de CS que mantienen la calidad sin duplicar el equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como VP de Customer Success con experiencia construyendo equipos de CS que sirven a clientes en múltiples continentes. Quiero diseñar el modelo de Customer Success internacional de mi empresa que mantenga la calidad sin multiplicar el coste del equipo.

Mi situación: [describe el tipo de clientes —SMB, mid-market, enterprise—, los mercados donde tienes clientes actualmente y los nuevos, el tamaño actual del equipo de CS, y cuál es la mayor fricción que tienes hoy con los clientes internacionales].

**Lo que necesito:**

Primero, dame el framework para diseñar la cobertura horaria de un equipo de CS distribuido: cómo calcular cuántos mercados puedes cubrir con cada modelo (follow-the-sun, overlap parcial, solo asincrónico), cuándo el asincrónico es suficiente y cuándo el cliente espera respuesta en su horario de negocio, y cómo comunicar los tiempos de respuesta de forma que no creen expectativas falsas.

Segundo, diseña la estrategia de idiomas en el servicio al cliente: cómo decidir qué idiomas soportar (el 80/20 de la base de clientes), qué estrategias existen para cubrir idiomas con pocos clientes (traducción automática con revisión humana, CSMs bilingües, alianzas con partners locales), y cómo gestionar la calidad del soporte cuando no todos los CSMs dominan el idioma del cliente.

Tercero, explícame las diferencias culturales en la relación con el cliente que impactan el CS: las expectativas de frecuencia de contacto (los clientes japoneses vs. los americanos), la directividad con la que comunicas malas noticias, el estilo de relación personal antes del negocio, y las señales de insatisfacción que son explícitas en algunas culturas e implícitas en otras.

Cuarto, propón el modelo de onboarding para clientes internacionales: cómo adaptar el proceso de implementación cuando hay diferencias de zona horaria de 8+ horas, cómo localizar la documentación de onboarding sin que sea un cuello de botella, y qué herramientas de onboarding digital (videos con subtítulos, bases de conocimiento traducidas) reducen la dependencia del CSM.

Quinto, diseña el proceso de escalación internacional: qué makes escalations más complejas cuando el cliente está en otra jurisdicción (diferencias de SLA legales, expectativas de compensación, acceso a datos), cómo manejas una escalación crítica cuando no hay nadie en la zona horaria del cliente, y cómo el equipo de CS coordina con legal y ventas en escalaciones de retención internacionales.

Sexto, ayúdame a medir la salud de clientes internacionales de forma consistente: cómo comparas el NPS o el CSAT de clientes en culturas donde las puntuaciones tienden a ser más altas o más bajas, cómo ajustas el health score para que sea comparable cross-mercado, y qué señales de riesgo son específicas de ciertos mercados.

Séptimo, propón el modelo de expansión del equipo de CS internacional: cuándo contrata el primer CSM local vs. apoyar desde la sede, qué perfil buscar en un CSM para un mercado específico, y cómo aseguras que ese CSM esté conectado a la cultura y los procesos del equipo central.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar el modelo de Customer Success para clientes en múltiples mercados y culturas',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Clientes internacionales como freelance',
                'description'      => 'Trabaja con clientes de otros países: contratos, cobro en divisas, impuestos de no residentes y las ventajas de facturar en mercados con tarifas más altas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como asesor especializado en negocios freelance internacionales con experiencia ayudando a profesionales independientes a trabajar con clientes de todo el mundo. Quiero empezar a atraer y trabajar con clientes fuera de mi país para acceder a tarifas más altas y diversificar mi base de clientes.

Mi situación: [describe tu especialidad freelance, el país donde vives, los países de los clientes internacionales que te interesan, tu nivel actual de inglés u otros idiomas, y si ya tienes alguna experiencia con clientes internacionales o es algo nuevo para ti].

**Lo que necesito:**

Primero, explícame las ventajas reales y los riesgos de trabajar con clientes internacionales: el diferencial de tarifas que existe entre mercados (cuánto más paga un cliente de EEUU, UK o Australia por el mismo servicio), los riesgos de impago y cómo son diferentes según el mercado, y las complejidades operativas que aumentan al trabajar a distancia y en otro idioma.

Segundo, diseña el contrato de servicios para clientes internacionales: las cláusulas que son diferentes cuando el cliente está en otro país (ley aplicable, jurisdicción, moneda de pago, mecanismos de resolución de disputas), cómo redactar un contrato en inglés que proteja tus intereses como proveedor, y las plataformas que ofrecen contratos estándar ya validados para trabajo freelance internacional.

Tercero, ayúdame a resolver el cobro en divisas extranjeras: las opciones para recibir pagos en dólares, libras o euros cuando vives en un país con moneda diferente, la comparativa de Wise (Transferwise), Payoneer, Stripe y PayPal en términos de comisiones, velocidad y límites, y cómo elegir la divisa de facturación para maximizar el ingreso neto.

Cuarto, explícame las obligaciones fiscales cuando trabajo con clientes extranjeros: si los clientes internacionales deben retenerte impuestos en su país (withholding tax), qué es el formulario W-8BEN para clientes de EEUU y por qué te lo piden, cómo declarar los ingresos internacionales en tu país de residencia, y qué convenios de doble imposición pueden beneficiarte.

Quinto, propón la estrategia para encontrar clientes internacionales: qué plataformas funcionan mejor para cada especialidad (Toptal, Contra, Gun.io para perfiles técnicos; 99designs, DesignPickle para diseño; WriterAccess para escritura), cómo posicionarte para clientes angloparlantes si tu inglés es bueno pero no nativo, y cómo construir credibilidad sin tener un portfolio internacional previo.

Sexto, ayúdame a preparar la propuesta de servicios para clientes internacionales: cómo fijar el precio cuando no conoces bien el mercado del cliente, cómo presentarte en un mercado nuevo sin referencias locales, y qué diferencias en el proceso de venta debes anticipar (los americanos deciden más rápido, los alemanes piden más documentación, etc.).

Séptimo, diseña el workflow de trabajo con clientes en otra zona horaria: cuántas horas de overlap son suficientes para mantener una relación de trabajo fluida, cómo estructurar las actualizaciones y los reportes para reducir la necesidad de reuniones sincrónicas, y las herramientas de comunicación y gestión de proyectos que funcionan mejor para trabajo asincrónico internacional.

Termina con las 5 cosas que desearías haber sabido antes de conseguir tu primer cliente internacional y que hubieran ahorrado tiempo, dinero o malentendidos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Empezar a trabajar con clientes internacionales y acceder a tarifas de mercados más altos',
                'vote_score'       => 39,
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
