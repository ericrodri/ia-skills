<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills309Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Brand IP protection: proteger el nombre, logo y activos creativos de la marca',
                'description'       => 'Aprende a proteger los activos de marca más valiosos: registro de marca, vigilancia de competidores, defensa frente a usos no autorizados y gestión de los derechos sobre el contenido creativo de marketing.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de marketing con especialización en protección de activos de marca y propiedad intelectual aplicada al ámbito del marketing. Necesito que me guíes para proteger los activos de mi marca de manera efectiva y práctica.

**Mi contexto:**
- Tipo de empresa: [startup / pyme / empresa establecida]
- Sector: [describe tu industria]
- Presencia geográfica actual: [España / Europa / global]
- Activos de marca principales: [nombre comercial, logo, slogan, dominio, packaging, etc.]
- Estado de protección actual: [ninguno / marca registrada en España / marca UE / registro en varios países]
- Problema principal: [no sé cómo empezar / alguien usa un nombre similar / tenemos la marca pero no monitorizamos / tenemos contenido creativo sin proteger]

Desarrolla una guía completa de protección de activos de marca para el equipo de marketing:

**1. Por qué la protección de marca es un tema de marketing, no solo legal**
Explica por qué el equipo de marketing debe entender y participar activamente en la protección de la marca: el valor de la marca como activo intangible que puede representar más que los activos tangibles de la empresa, el daño reputacional de la confusión con marcas similares, el impacto en el SEO y en el CPC de la publicidad cuando hay competidores que pujan por el nombre de tu marca, el coste de cambiar de nombre si no se protege a tiempo. Por qué es más barato proteger la marca ahora que litigar después.

**2. El registro de marca: fundamentos que el equipo de marketing debe conocer**
Explica el proceso de registro de marca de manera accesible para no-juristas: qué se puede registrar como marca (nombres, logos, slogans, colores, formas, sonidos), el sistema de clases del Nomenclátor de Niza y por qué elegir las clases correctas es crítico para la protección real, la diferencia entre el registro nacional en la OEPM (España), el registro comunitario en la EUIPO (toda la UE) y el registro internacional a través del sistema de Madrid de la OMPI, los plazos y los costes aproximados de cada opción, cómo hacer la búsqueda de anterioridades antes de lanzar una marca.

**3. Auditoría de activos de marca que necesitan protección**
Detalla cómo hacer el inventario completo de activos de marca que el equipo de marketing debe proteger: nombre comercial y variaciones, logotipo en sus versiones principales, slogans y taglines, dominio web y variaciones tipográficas, cuentas en redes sociales, colores y elementos de diseño registrables como marca, contenido creativo con copyright (fotografías, ilustraciones, vídeos, textos), música e identidad sonora. Para cada activo, cómo determinar si está protegido y qué protección le falta.

**4. Vigilancia de marca: detectar usos no autorizados**
Explica cómo implementar un sistema de vigilancia de marca que detecte usos no autorizados antes de que causen daño: herramientas de monitorización de marcas (MarkMonitor, Corsearch, o alternativas más asequibles para pymes), cómo configurar Google Alerts para el nombre de la marca y sus variaciones, la monitorización de dominios con nombres similares (typosquatting), la vigilancia en marketplaces (Amazon, eBay) donde aparecen productos falsificados, la monitorización de solicitudes de registro de marcas similares ante la EUIPO y la OEPM.

**5. Contenido de marketing y derechos de autor**
Detalla cómo gestionar los derechos sobre el contenido creativo que produce el equipo de marketing: cuándo el copyright pertenece a la empresa y cuándo al creador externo (la regla de la obra por encargo y cuándo aplica en España), qué debe incluir el contrato con una agencia de publicidad, fotógrafo, diseñador o productor de video para que los derechos pasen a la empresa, cómo licenciar el uso de imágenes, música e iconos de terceros de manera correcta, las implicaciones de las licencias Creative Commons que se aplican al contenido usado en el marketing.

**6. Gestión de marca en redes sociales y dominios**
Explica la estrategia de protección digital de la marca: la importancia de registrar el nombre en todas las redes sociales relevantes aunque no se usen activamente (para evitar squatting), el proceso de reclamar una cuenta de red social que usa el nombre de la marca sin autorización, cómo gestionar el registro de dominios en los TLDs principales y en los países donde opera la empresa, el proceso de reclamación de dominios con la UDRP (Uniform Domain-Name Dispute-Resolution Policy) para casos de cybersquatting.

**7. Cuando alguien infringe tu marca: primeros pasos**
Detalla el proceso de respuesta ante una infracción de marca desde la perspectiva del equipo de marketing en coordinación con el equipo legal: cómo documentar la infracción correctamente (capturas de pantalla con fecha, URLs, contexto), el sistema de notificación progresiva (carta de cese y desistimiento antes de iniciar acciones legales), cómo responder cuando la plataforma (Google, Meta, Amazon) tiene un proceso de reclamación por infracción de marca, cuándo escalar al abogado especialista y cuándo la inversión en litigio no merece la pena.

**8. Cuando eres tú quien usa marcas de terceros**
Explica los riesgos de infracción que el equipo de marketing debe evitar: el uso de marcas de terceros en publicidad comparativa (cuándo es legal y cuándo no), el riesgo del uso del nombre de un competidor en Google Ads, el uso de hashtags registrados como marca en redes sociales, la reutilización de contenido de terceros sin licencia (imágenes de Google, música en videos de redes sociales), el fair use y cuándo aplica en el contexto del marketing digital en España.

**9. Protección de la marca en las colaboraciones**
Detalla cómo gestionar los activos de marca en colaboraciones con influencers, embajadores de marca, agencias y socios comerciales: qué debe incluir el contrato para proteger el uso de la marca, las guías de uso de marca (brand guidelines) como herramienta de protección y consistencia, cómo gestionar el uso de la marca por el partner después de que termine la colaboración, los riesgos reputacionales de las asociaciones de marca con personas o empresas que incurren en conductas negativas.

Termina con un checklist de protección de marca para el equipo de marketing: las 10 acciones que hay que tomar en los primeros 90 días para tener los activos de marca correctamente protegidos, ordenadas por urgencia y coste.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Proteger los activos de marca con registro, vigilancia y gestión de derechos sobre el contenido creativo',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Open source licensing: elegir y cumplir con las licencias del ecosistema open source',
                'description'       => 'Navega el ecosistema de licencias open source con confianza: entiende la diferencia entre licencias permisivas y copyleft, cumple con las obligaciones de atribución y protege el código propietario de tu empresa.',
                'prompt_content'    => <<<'PROMPT'
Eres un abogado tecnológico especializado en propiedad intelectual del software y licencias open source, con experiencia asesorando a equipos de desarrollo sobre el uso correcto del código abierto en productos comerciales. Necesito que me ayudes a entender el ecosistema de licencias open source y a cumplir correctamente con sus obligaciones.

**Mi contexto:**
- Tipo de proyecto: [producto SaaS / aplicación móvil / librería de uso interno / herramienta developer / contribución a OSS]
- Lenguaje y ecosistema principal: [JavaScript/Node, Python, Java, Go, Rust, etc.]
- Modelo de negocio: [código propietario cerrado / SaaS / código abierto / freemium]
- Principal preocupación: [no sé qué licencias tengo en mis dependencias / quiero publicar mi código como OSS / alguien puede usar mi código libre de cargo / cómo cumplir con la atribución]

Desarrolla una guía completa de licencias open source para desarrolladores:

**1. Los fundamentos de las licencias de software**
Explica los conceptos básicos que todo desarrollador debe entender: el copyright del software (quién lo tiene, cuándo se activa, qué protege), la diferencia entre el código propietario (todos los derechos reservados) y el código open source (algunos derechos reservados, otros concedidos mediante licencia), qué es una licencia de software (un contrato de adhesión que concede al usuario ciertos permisos sobre el código), por qué ignorar las licencias de las dependencias que usas puede tener consecuencias legales y comerciales graves.

**2. Las familias de licencias open source**
Detalla las principales familias de licencias open source y sus características: licencias permisivas (MIT, Apache 2.0, BSD 2-Clause, BSD 3-Clause) que permiten el uso libre incluyendo en código propietario con solo atribuir; licencias copyleft débil (LGPL, MPL 2.0, EPL) que permiten enlazar la librería desde código propietario pero exigen que las modificaciones a la librería misma sean open source; licencias copyleft fuerte (GPL v2, GPL v3, AGPL v3) que exigen que el código que integra o modifica el software sea distribuido bajo la misma licencia; y licencias específicas de documentación y contenido como Creative Commons.

**3. La trampa del copyleft y los proyectos comerciales**
Explica en detalle el riesgo del copyleft para los proyectos comerciales: el efecto viral de la GPL (si integras código GPL en tu código propietario, tu código debe distribuirse también como GPL), la diferencia entre la GPL normal y la AGPL (la AGPL extiende el copyleft al uso en red: si tu SaaS usa código AGPL, podrías tener que publicar el tuyo), cómo manejar las dependencias con licencias copyleft de manera segura (usar como servicio externo en lugar de integrar el código, usar la versión LGPL si existe, o buscar alternativas con licencias permisivas), la diferencia entre "distribuir" software y ejecutarlo en un servidor.

**4. Obligaciones de atribución y cumplimiento**
Detalla las obligaciones de atribución que imponen las licencias permisivas y cómo cumplirlas correctamente: la atribución que exige la licencia MIT (incluir el texto de la licencia y el aviso de copyright en las distribuciones), los requisitos adicionales de la Apache 2.0 (NOTICE file, atribución de los cambios), qué hacer con los avisos de licencia en aplicaciones móviles (sección de créditos o "Open Source Licenses" que exige Apple y Google), cómo generar automáticamente el inventario de licencias de tus dependencias con herramientas como license-checker, FOSSA o WhiteSource.

**5. Auditoría de licencias en un proyecto existente**
Explica el proceso de hacer una auditoría de licencias de las dependencias de un proyecto: cómo inventariar todas las dependencias directas e indirectas, las herramientas de análisis de licencias por ecosistema (npm license-checker, pip-licenses, mvn license:aggregate-download-licenses, go-licenses), cómo identificar las dependencias con licencias incompatibles o que requieren atención, qué hacer cuando encuentras una dependencia problemática (buscar alternativa, pedir excepción comercial al mantenedor, o aislar el componente).

**6. Publicar tu propio código como open source**
Detalla el proceso de decisión para publicar código como open source: qué licencia elegir según tus objetivos (MIT/Apache si quieres máxima adopción incluyendo uso comercial, GPL si quieres que todas las mejoras vuelvan a la comunidad, AGPL si el proyecto es un SaaS y quieres evitar que competidores ofrezcan versión hosted sin contribuir), cómo gestionar el Contributor License Agreement (CLA) para retener los derechos de cambiar la licencia en el futuro, cómo manejar las contribuciones externas al proyecto, la importancia del archivo LICENSE y del NOTICE en el repositorio.

**7. Licencias duales y excepciones comerciales**
Explica el modelo de licencia dual que usan muchos proyectos open source exitosos: el código es GPL para uso open source y tiene una licencia comercial de pago para uso propietario (ejemplos: MySQL, Qt, Elastic antes del cambio), cómo funciona este modelo como estrategia de negocio, cómo gestionar las excepciones comerciales individuales (carve-outs) para empresas específicas. El debate reciente sobre licencias que no son OSI-approved como SSPL, BSL o Commons Clause y por qué generan controversia en la comunidad.

**8. Dependencias y propiedad intelectual en el entorno empresarial**
Detalla las políticas que debe tener una empresa de desarrollo respecto a las dependencias open source: el proceso de aprobación de nuevas dependencias antes de añadirlas al proyecto (quién revisa, qué licencias están pre-aprobadas, qué requiere revisión legal), la política de contribución de los empleados a proyectos open source (qué pueden publicar, bajo qué condiciones, si necesitan aprobación de la empresa), el rol del equipo de InnerSource para compartir código entre proyectos internos.

**9. Casos especiales: IA y open source**
Explica las nuevas cuestiones de licencias open source en el contexto de la IA: las licencias de los modelos de lenguaje y sus restricciones de uso (Llama, Mistral, modelos de Hugging Face), los datasets de entrenamiento y sus licencias (qué puede entrenarse con datos de GitHub, qué dice la GPL sobre el código generado por IA entrenada en código GPL), las primeras decisiones judiciales sobre el uso de código open source para entrenar modelos de IA.

Termina con una guía de decisión para elegir la licencia correcta según el tipo de proyecto: un árbol de decisión simple que cubra los 10 escenarios más comunes (librería interna, API pública, SaaS, producto mobile, herramienta CLI, plugin para otro software, contribución a OSS existente, fork de proyecto OSS, proyecto dual-license, contribución de la empresa al ecosistema).
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Auditar y cumplir con las licencias open source en proyectos comerciales y publicar código de manera correcta',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Derechos de autor del diseñador: proteger el trabajo creativo y cobrar por los usos',
                'description'       => 'Entiende tus derechos como diseñador: cuándo eres el titular del copyright, cómo ceder correctamente los derechos al cliente, cómo estructurar contratos que eviten usos no autorizados y cómo reclamar cuando alguien usa tu trabajo sin permiso.',
                'prompt_content'    => <<<'PROMPT'
Eres un abogado especialista en propiedad intelectual con experiencia en el sector creativo, asesorando a diseñadores gráficos, ilustradores, fotógrafos y creativos digitales en la protección de su trabajo y la negociación de sus derechos. Necesito que me ayudes a entender mis derechos como diseñador y cómo proteger mi trabajo de manera efectiva.

**Mi contexto:**
- Tipo de trabajo creativo: [diseño gráfico / ilustración / fotografía / UX/UI / motion design / branding]
- Modo de trabajo: [freelance / agencia / empleado / mixto]
- Tipo de clientes habituales: [pymes, startups, agencias, grandes empresas, particulares]
- Principal problema: [el cliente usa mi trabajo más allá de lo pactado / no sé cómo poner precio a los derechos / quiero protegerme de usos no autorizados / alguien ha copiado mi diseño]

Desarrolla una guía completa de derechos de autor para diseñadores:

**1. El copyright del diseñador: fundamentos que debes conocer**
Explica los fundamentos del derecho de autor aplicados al trabajo del diseñador en España bajo el Texto Refundido de la Ley de Propiedad Intelectual (TRLPI): qué trabajos creativos están protegidos automáticamente por el copyright (obras originales: diseños, ilustraciones, fotografías, tipografías propias, trabajos audiovisuales), qué no está protegido (ideas, estilos, técnicas, elementos genéricos sin originalidad suficiente), cuánto dura la protección (70 años desde la muerte del autor), que el registro no es necesario pero puede ser útil como prueba de autoría y fecha de creación.

**2. Quién es el titular de los derechos: diseñador freelance vs empleado**
Detalla las reglas de titularidad del copyright en los distintos escenarios que vive un diseñador: el diseñador freelance es el autor y titular de los derechos salvo que los ceda expresamente (la cesión debe ser por escrito, específica en cuanto al tipo de uso y la duración), el empleado que crea en el ámbito de su contrato (los derechos económicos se ceden al empleador por ley, con excepciones para programas de ordenador), el diseñador que trabaja en la agencia para un cliente final (quién es el titular en esta cadena y cómo gestionarlo en los contratos), la obra en colaboración cuando hay varios autores.

**3. Los derechos morales del diseñador**
Explica los derechos morales del autor que son irrenunciables e inalienables en España: el derecho de paternidad (que el trabajo se atribuya al autor), el derecho de integridad (que la obra no sea mutilada o modificada de manera que dañe su honor o reputación), el derecho de divulgación (decidir si y cuándo se publica la obra), y el derecho de retracto (retirar la obra del comercio con indemnización). En qué situaciones prácticas el cliente infringe los derechos morales del diseñador y cómo reclamarlo.

**4. La cesión de derechos: qué negociar en el contrato**
Detalla cómo estructurar la cesión de derechos en el contrato con el cliente: el principio de interpretación restrictiva (solo se ceden los derechos expresamente pactados), las dimensiones de la cesión que hay que especificar (exclusividad o no exclusividad, ámbito geográfico, medios o canales de uso permitidos, duración, posibilidad de sublicenciar a terceros), cómo distinguir entre la cesión de derechos de uso limitada y la cesión total y exclusiva, el precio correcto para cada tipo de cesión. Por qué "todos los derechos" es una trampa para el diseñador si no se especifica bien.

**5. El precio de los derechos de imagen y diseño**
Explica cómo calcular y cobrar los derechos de uso de manera justa: la tarifa de diseño (el coste de crear la pieza) es diferente del precio de los derechos de uso (el valor del uso que el cliente va a hacer del trabajo), cómo valorar los derechos según el alcance del uso (tirada de un folleto local vs campaña nacional vs uso digital global), las tarifas de referencia por tipo de trabajo y uso que publican organizaciones como el Club de Creativos o similares en España, cómo estructurar contratos con pagos adicionales cuando el cliente expande el uso más allá de lo originalmente pactado.

**6. El contrato que protege al diseñador**
Detalla los elementos que debe incluir el contrato de diseño para proteger los derechos del creativo: descripción precisa del trabajo encargado, descripción precisa de los derechos cedidos (con todas las dimensiones mencionadas), cláusula de que los derechos no cedidos quedan en manos del diseñador, cláusula de atribución (el cliente se compromete a mencionar al diseñador en el uso de la obra), cláusula de modificaciones (el cliente no puede modificar la obra sin autorización), proceso de revisiones incluidas y qué constituye un cambio de alcance que genera facturación adicional, y las consecuencias del uso fuera del alcance pactado.

**7. Cómo actuar ante el uso no autorizado del trabajo**
Explica el proceso de respuesta ante un uso no autorizado del trabajo del diseñador: cómo documentar la infracción de manera que sea útil en un proceso legal, la carta de requerimiento como primer paso (qué debe incluir, el tono, el plazo de respuesta), las plataformas que tienen procesos de reclamación de copyright (Instagram, Pinterest, Behance, Google Images, stock sites), cuándo el proceso de DMCA (Digital Millennium Copyright Act) es relevante aunque estés en España, cuándo vale la pena ir a los juzgados y cuándo no, los organismos públicos gratuitos como la Comisión de Propiedad Intelectual a los que puedes recurrir.

**8. Protección de los trabajos en portfolio y redes sociales**
Detalla cómo proteger el trabajo que el diseñador publica en su portfolio y en redes sociales: el riesgo de publicar trabajos a alta resolución sin watermark en Behance o Dribbble, cómo añadir metadatos de copyright a los archivos de imagen (EXIF/IPTC), el uso de marcas de agua visibles e invisibles, el registro de obras en el Registro de la Propiedad Intelectual de España como prueba de autoría y fecha, las condiciones de uso de las plataformas de portfolio respecto a los derechos de las obras publicadas.

**9. IA y derechos de autor del diseñador**
Explica el impacto de la IA generativa en los derechos del diseñador: el debate sobre si las imágenes generadas por IA son protegibles por copyright (la posición actual en España y en EE.UU.), el problema del entrenamiento de modelos de IA con obras de diseñadores sin licencia y sin compensación, las plataformas de stock que empiezan a pagar a los artistas cuyo trabajo se usó para entrenar sus modelos de IA, cómo los diseñadores están adaptando sus contratos para incluir cláusulas sobre el uso de su trabajo para entrenar modelos de IA.

Termina con un kit de herramientas para el diseñador: la plantilla de contrato básico, el proceso de reclamación por infracción de copyright paso a paso, y los recursos (asociaciones, registros, plataformas) que el diseñador en España debe conocer para defender su trabajo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Proteger el trabajo creativo del diseñador con contratos correctos, cesión de derechos y reclamaciones',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'IP como argumento de venta: usar las patentes y registros como diferenciador comercial',
                'description'       => 'Convierte los activos de propiedad intelectual en argumentos de venta: cómo comunicar las patentes y registros al cliente, cómo usarlos para justificar el precio premium y cómo integrarlos en el discurso comercial y en las propuestas.',
                'prompt_content'    => <<<'PROMPT'
Eres un director de ventas con experiencia en sectores de alta tecnología y manufactura donde la propiedad intelectual es un activo estratégico, y has aprendido a integrar las patentes, los diseños registrados y las marcas en el discurso comercial para ganar deals contra competidores con precios más bajos. Necesito que me ayudes a usar la IP de mi empresa como argumento de venta.

**Mi contexto:**
- Tipo de empresa: [tecnología / manufactura / software / farmacéutica / diseño industrial]
- IP disponible: [patentes / diseños registrados / marcas / secretos comerciales / derechos de autor / certificaciones]
- Tipo de cliente objetivo: [pymes / grandes empresas / sector público / distribuidores]
- Problema principal: [el cliente no entiende el valor de nuestras patentes / la IP no se menciona en las propuestas / perdemos deals por precio sin usar la IP como diferenciador / no sabemos cómo explicar la IP de manera simple]

Desarrolla una guía completa para usar la IP como argumento de venta:

**1. Por qué la IP es el diferenciador más difícil de copiar**
Explica el valor estratégico de la propiedad intelectual desde la perspectiva del vendedor: la IP como barrera de entrada que los competidores no pueden replicar en el corto plazo, la diferencia entre un diferenciador temporal (característica que la competencia puede copiar en 6 meses) y un diferenciador estructural (una patente que dura 20 años), el efecto señalizador de la IP ante el cliente (una empresa con patentes invierte en innovación y tiene vocación de continuidad), cómo la IP justifica el precio premium de manera objetiva ante un comprador que solo mira el precio.

**2. Entender la IP de tu empresa antes de venderla**
Detalla el proceso de auditar los activos de IP de la empresa para preparar el discurso de ventas: qué patentes tiene la empresa y qué protegen exactamente en lenguaje comprensible para el equipo comercial, cuáles son los diseños registrados y en qué mercados, las marcas registradas y su cobertura geográfica, los secretos comerciales y conocimiento propietario que no está registrado pero que es difícil de replicar. Cómo hacer que el equipo legal explique la IP al equipo de ventas de manera que el comercial pueda usarla en una conversación con el cliente.

**3. Traducir la IP a valor para el cliente**
Explica cómo traducir los activos de IP en beneficios concretos para el comprador: de "tenemos la patente X" a "esto significa que somos los únicos que pueden ofrecerte Y resultado", de "nuestro diseño está registrado" a "esto garantiza que el producto que compras hoy no lo va a copiar un proveedor chino el año que viene", de "nuestra marca lleva 20 años registrada" a "cuando compras nuestra marca, compras la garantía de una empresa que lleva décadas invirtiendo en su reputación". El ejercicio de completar la frase "para ti, como cliente, esto significa que...".

**4. La IP en las diferentes etapas del proceso de venta**
Describe cómo usar la IP en cada etapa del funnel de ventas: en la prospección y el cold outreach (la IP como credencial de seriedad tecnológica), en la reunión de descubrimiento (preguntas que descubren si el cliente valora la protección o ha tenido malas experiencias con productos sin IP), en la demo o presentación del producto (dónde y cómo mencionar la IP sin que suene a discurso legal), en la propuesta (cómo documentar la IP como elemento diferenciador en la sección de por qué nosotros), en la negociación de precio (la IP como ancla del precio premium).

**5. Objeciones comunes sobre el precio y cómo responder con la IP**
Detalla las respuestas a las objeciones de precio más frecuentes usando la IP como argumento: "el competidor es más barato" → comparativa de IP y qué riesgos protege la IP propia vs no tener, "¿por qué vuestro precio es más alto?" → el coste de la innovación y la protección que incluye el precio, "necesito justificarlo ante mi comité de compras" → cómo preparar el business case del comprador incluyendo la IP como reducción de riesgos legales y de dependencia del proveedor, "el producto parece igual al de la competencia" → la explicación de la IP que hace la diferencia invisible visible.

**6. IP en la venta enterprise y licitaciones públicas**
Explica cómo la IP es especialmente valiosa en procesos de venta enterprise y en licitaciones públicas: los criterios de valoración de IP en los pliegos de contratación pública, cómo la propiedad intelectual protege al comprador enterprise de la dependencia tecnológica (vendor lock-in vs propiedad de la IP del desarrollo), las cláusulas de IP en los contratos enterprise que el vendedor debe entender, cómo gestionar las peticiones de cesión de IP que hacen las grandes empresas en sus contratos de proveedores.

**7. Formación del equipo de ventas en IP**
Detalla cómo formar al equipo comercial para que pueda usar la IP con confianza en las conversaciones de ventas: el nivel de conocimiento mínimo que necesita un comercial (no necesita ser abogado, pero debe entender qué protege cada activo de IP), las preguntas de discovery que revelan si el cliente valora la IP, el storytelling de la innovación que humaniza la IP (la historia de cómo se desarrolló la patente, el problema que resolvía), los materiales de soporte que el equipo de marketing debe proporcionar al equipo de ventas sobre la IP de la empresa.

**8. IP en los materiales de marketing y propuestas**
Describe cómo integrar la IP en los materiales de ventas y marketing: cómo mencionar las patentes en el sitio web (con el número de patente, el alcance de la protección, los beneficios para el cliente), cómo usar los logos de marcas registradas y los certificados de patente como elementos de credibilidad en el material comercial, cómo diseñar una sección de "por qué nosotros" en la propuesta que integre la IP como diferenciador, el uso de comparativas visuales entre productos con IP propia y productos genéricos.

**9. Vigilancia de la competencia en IP**
Explica cómo usar el monitoreo de patentes y marcas de la competencia como inteligencia comercial: cómo las bases de datos de patentes (Espacenet, Google Patents) son fuentes de información gratuita sobre las estrategias de innovación de los competidores, cómo detectar cuando un competidor registra una patente que puede afectar al producto propio, cómo usar las patentes caducadas o de dominio público como fuente de ventaja competitiva, cómo interpretar el portfolio de IP de un competidor para anticipar sus movimientos estratégicos.

Termina con una plantilla de sección de propuesta de ventas que integra los activos de IP de la empresa de manera efectiva: cómo presentar la IP visualmente, qué lenguaje usar, cómo cuantificar el valor de la protección para el comprador específico.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Usar patentes y activos de IP como argumento de venta para justificar precio premium y ganar deals',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product IP strategy: qué proteger, cuándo y cómo en el desarrollo de producto',
                'description'       => 'Define la estrategia de propiedad intelectual para tu producto: qué innovaciones patentar, qué mantener como secreto comercial, cuándo proteger cada activo y cómo construir un portfolio de IP que aporte valor estratégico.',
                'prompt_content'    => <<<'PROMPT'
Eres un asesor estratégico de propiedad intelectual con experiencia en startups y empresas tecnológicas en crecimiento que han construido portfolios de IP como ventaja competitiva y activo de valoración. Necesito que me ayudes a definir la estrategia de propiedad intelectual para mi producto.

**Mi contexto:**
- Tipo de empresa: [startup / scale-up / empresa establecida]
- Tipo de producto: [software SaaS / hardware / IoT / biotech / e-commerce / plataforma digital]
- Innovación principal: [describe brevemente qué hace tu producto de manera diferente]
- Estado de desarrollo: [idea / MVP / producto con tracción / producto maduro]
- Recursos disponibles para IP: [presupuesto aproximado y si hay asesor legal]
- Objetivo estratégico: [financiación VC / salida M&A / crecimiento orgánico / posición defensiva]

Desarrolla una estrategia completa de IP para el producto:

**1. Por qué la estrategia de IP importa en el desarrollo de producto**
Explica el valor estratégico de la IP para las empresas de producto: la IP como activo en los procesos de due diligence de inversión (los VCs valoran las startups con IP protegida más alto que las que no tienen nada protegido), el papel de la IP en las valoraciones de M&A (el precio de adquisición de una empresa puede multiplicarse por sus activos de IP), la IP como barrera de entrada que da tiempo al producto a establecerse en el mercado antes de que lleguen los copias, la IP defensiva como protección contra las demandas de patent trolls. Los errores que cometen las startups al ignorar la IP hasta que es demasiado tarde.

**2. Los instrumentos de protección de IP disponibles para un producto**
Detalla todos los mecanismos de protección disponibles y cuándo aplica cada uno: patentes de invención (para innovaciones técnicas con novedad, actividad inventiva y aplicación industrial, duración 20 años), modelos de utilidad (para invenciones menores, trámite más rápido y barato, duración 10 años), diseños industriales y diseños comunitarios (para la apariencia del producto, duración hasta 25 años), marcas (para el nombre y el logo, duración indefinida con renovaciones), derechos de autor (para el código y el contenido, automático), y secretos comerciales (para know-how que no puede patentarse o que se protege mejor con confidencialidad).

**3. Patentes de software: qué se puede y qué no se puede patentar**
Explica la situación específica de las patentes de software: en Europa, los programas de ordenador no son patentables en sí mismos pero las invenciones implementadas en ordenador que producen un efecto técnico sí pueden serlo, la diferencia entre patentar el algoritmo como tal (generalmente imposible) vs patentar el proceso técnico que el algoritmo implementa (más viable), los ejemplos de patentes de software concedidas en Europa para entender los límites, la diferencia respecto a EE.UU. donde el régimen es más amplio pero también más incierto después de las decisiones judiciales recientes.

**4. El proceso de patente: desde la idea hasta la concesión**
Detalla el proceso de solicitud de patente paso a paso: la búsqueda de anterioridades antes de invertir en la solicitud (cómo hacerla de manera básica en Espacenet y Google Patents), la importancia de documentar el proceso de invención (cuadernos de laboratorio, commits de código con fecha, emails que acrediten la fecha de invención), la solicitud provisional como herramienta para ganar 12 meses a coste reducido, la solicitud PCT (Patent Cooperation Treaty) para la cobertura internacional, los costes reales de una solicitud de patente de software en Europa (desde el examen hasta la concesión y el mantenimiento anual), el tiempo de espera hasta la concesión (2-5 años en Europa).

**5. Secretos comerciales: cuándo son mejor opción que la patente**
Explica cuándo el secreto comercial es preferible a la patente: los algoritmos que son difíciles de reverse-engineer (la fórmula de Coca-Cola como ejemplo clásico), el know-how de proceso que no estaría expuesto a la competencia si se patenta (al patentar, se publica la innovación), las innovaciones en áreas donde el ciclo tecnológico es más corto que el proceso de patente (para cuando la patente se concede, la tecnología ya es obsoleta), cómo implementar un programa de gestión de secretos comerciales (acuerdos de confidencialidad, control de acceso a la información sensible, procedimientos de salida de empleados).

**6. La decisión de qué proteger y cuándo**
Detalla el framework de decisión para priorizar qué activos de IP proteger con recursos limitados: el inventario de activos de IP potenciales (qué innovaciones tiene el producto que son únicas y no son del dominio público), la matriz de valor vs coste de protección para cada activo (impacto competitivo de la innovación vs coste y tiempo de la protección), el timing de la protección (antes del lanzamiento público para no perder la novedad, antes del proceso de fundraising, antes de entrar en nuevos mercados), cómo priorizar si el presupuesto solo permite proteger una o dos cosas.

**7. IP en el equipo de producto: cultura y procesos**
Explica cómo construir una cultura de IP awareness en el equipo de desarrollo de producto: el proceso de invention disclosure (cómo el equipo técnico comunica las innovaciones potenciales al equipo legal para que las evalúe), la formación básica en IP para PMs y developers (qué innovaciones pueden ser patentables, qué no hacer antes de patentar como publicar o presentar en conferencias), la política de IP en los contratos de empleados (asignación de los derechos al empleador, obligación de informar de las invenciones), cómo integrar el análisis de IP en el proceso de diseño de producto.

**8. IP en el contexto de la inversión y el M&A**
Detalla cómo la estrategia de IP afecta al proceso de fundraising y a las salidas por M&A: qué buscan los VCs en la due diligence de IP (que las patentes estén registradas en los nombres correctos, que los acuerdos con empleados y contratistas cedan los derechos, que no haya licencias de OSS conflictivas, que no haya pleitos pendientes de IP), cómo la IP influye en la valoración en un proceso de venta, qué preparar para el data room de IP, cómo gestionar la transición de IP cuando la empresa es adquirida.

**9. Vigilancia tecnológica y IP de la competencia**
Explica cómo usar el monitoreo de la IP de la competencia como parte de la estrategia de producto: la vigilancia de patentes de la competencia como fuente de inteligencia sobre su hoja de ruta tecnológica, cómo detectar si la competencia está construyendo un portfolio de IP que puede crear problemas futuros, el análisis de freedom-to-operate (FTO) antes de lanzar nuevas funcionalidades para verificar que no se infringe una patente existente, cómo responder si recibes una carta de infracción de patente de un competidor o de un patent troll.

Termina con una hoja de ruta de IP para los primeros 18 meses de una startup de producto digital: qué proteger en el primer mes (la marca, los acuerdos de empleados), qué evaluar a los 6 meses (si hay innovaciones patentables antes del lanzamiento), y cómo construir el portfolio en los primeros 18 meses para tener una posición defensiva robusta.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Definir la estrategia de IP del producto: qué patentar, cuándo proteger y cómo construir el portfolio',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Employee IP agreements: cláusulas de propiedad intelectual en los contratos laborales',
                'description'       => 'Diseña los acuerdos de propiedad intelectual con empleados: cláusulas de asignación de invenciones, protección de secretos comerciales, non-compete y gestión de la IP al salir de la empresa.',
                'prompt_content'    => <<<'PROMPT'
Eres un abogado laboralista especializado en la intersección entre el derecho del trabajo y la propiedad intelectual, con experiencia asesorando a empresas tecnológicas en el diseño de sus contratos de empleados y en la gestión de conflictos de IP al finalizar la relación laboral. Necesito que me ayudes a diseñar un marco contractual sólido para proteger la IP de la empresa en las relaciones laborales.

**Mi contexto:**
- Tipo de empresa: [startup tecnológica / empresa de software / empresa de diseño / empresa industrial / consultoría]
- Número de empleados: [cantidad]
- Tipo de roles con acceso a IP sensible: [developers, diseñadores, product managers, comerciales, investigadores]
- Situación actual de los contratos: [contratos genéricos sin cláusulas de IP / algunos contratos con cláusulas básicas / contratos revisados por abogado]
- Principal preocupación: [un empleado se fue con código propietario / un empleado quiere patentar algo a su nombre / queremos contratar talento y no sabemos qué poner en el contrato]

Desarrolla un marco completo de gestión de IP en las relaciones laborales:

**1. El régimen legal de la propiedad intelectual en el contrato de trabajo en España**
Explica el marco legal español que regula la propiedad intelectual de los empleados: el artículo 51 del TRLPI (los derechos patrimoniales de software creado en el ámbito del contrato de trabajo corresponden al empleador), el artículo 17 de la Ley de Patentes (las invenciones del empleado que caen dentro del ámbito de sus funciones pertenecen al empleador, con derecho del empleado a una remuneración adicional cuando la invención excede las funciones para las que fue contratado), el tratamiento del diseño industrial y otras categorías de IP en el contexto laboral, la diferencia entre el empleado a tiempo completo y el contratista independiente (para quien la cesión debe ser siempre explícita y contractual).

**2. La cláusula de asignación de invenciones**
Detalla cómo redactar una cláusula de asignación de invenciones efectiva y válida en España: qué invenciones debe ceder el empleado (las relacionadas con su ámbito de trabajo y las que usa recursos de la empresa), cómo manejar las invenciones del empleado realizadas fuera del horario y sin recursos de la empresa (que en principio le pertenecen), el deber de comunicación del empleado a la empresa cuando cree haber realizado una invención, el proceso de evaluación de la empresa (plazo de 3 meses para reivindicar la invención), la remuneración adicional al empleado cuando la empresa reivindica una invención que excede las funciones normales del puesto.

**3. Acuerdos de confidencialidad y secretos comerciales**
Explica cómo implementar la protección de secretos comerciales en el contrato de trabajo: las obligaciones de confidencialidad que ya impone la ley laboral (el artículo 5.a) del ET exige el deber de buena fe y el artículo 21 limita la competencia desleal), cómo reforzar estas obligaciones con cláusulas contractuales específicas, qué información debe definirse como confidencial y secreta, las medidas técnicas y organizativas que la empresa debe adoptar para que la información sea legalmente un secreto comercial bajo la Ley de Secretos Empresariales, la duración de las obligaciones de confidencialidad más allá del fin de la relación laboral.

**4. Las cláusulas de no competencia y no captación**
Detalla el régimen de las cláusulas de no competencia en España: el artículo 21 del ET establece que la cláusula de no competencia post-contractual es válida con dos requisitos (que exista un efectivo interés industrial o comercial de la empresa y que se satisfaga al empleado con una compensación económica adecuada), la duración máxima legal (2 años para técnicos y 6 meses para el resto), cómo calcular la compensación adecuada (entre el 33% y el 60% del salario mensual según la jurisprudencia más reciente), las cláusulas de no captación de clientes y compañeros (garden leave), y qué pasa cuando la empresa incumple la compensación pactada.

**5. El onboarding de IP para nuevos empleados**
Explica el proceso de onboarding de IP que debe seguir cada nuevo empleado: la revisión de los contratos previos del empleado para detectar cláusulas de no competencia o confidencialidad de empleadores anteriores que puedan crear conflictos, la formación en las políticas de IP de la empresa (qué es confidencial, cómo manejar el código, cómo documentar las invenciones), la firma de los acuerdos de IP específicos (asignación de invenciones, confidencialidad), el acceso a los sistemas de información según el principio de mínimo privilegio.

**6. Gestión de la IP cuando el empleado se va**
Detalla el proceso de offboarding de IP que minimiza los riesgos cuando un empleado deja la empresa: la entrevista de salida orientada a IP (qué proyectos estaba desarrollando, qué documentación tiene en dispositivos personales, si ha iniciado algún proceso de registro a su nombre), la devolución de dispositivos y accesos (checklist de revocación de accesos en el mismo día de la salida), la revisión del repositorio de código para detectar extracciones anómalas, el recordatorio formal y documentado de las obligaciones de confidencialidad y no competencia post-contractuales, la gestión del período de garden leave cuando procede.

**7. Contratistas externos y la IP en los contratos de prestación de servicios**
Explica cómo gestionar la IP cuando se trabaja con contratistas externos (freelancers, agencias, consultores): por qué la cesión de derechos no es automática como en el contrato laboral y debe ser siempre explícita, qué debe incluir el contrato de servicios para que la IP creada pertenezca a la empresa (cesión de todos los derechos patrimoniales de manera exclusiva, completa y por toda la duración de los derechos), cómo gestionar la IP preexistente del contratista que usa en el proyecto (licencia de uso vs cesión), las cláusulas de confidencialidad para contratistas.

**8. Conflictos de IP con empleados: prevención y gestión**
Detalla los conflictos de IP más frecuentes con empleados y cómo prevenirlos y gestionarlos: el empleado que reclama ser el inventor de una patente registrada a nombre de la empresa, el empleado que se lleva código de la empresa para su startup, el empleado que contesta que el trabajo lo hizo en su tiempo libre con sus propios recursos, la competencia desleal post-contractual, cómo investigar y documentar el caso antes de actuar, cuándo intentar una solución negociada y cuándo es necesario ir a los juzgados de lo social o a los civiles.

Termina con los contratos y documentos que toda empresa debe tener: el checklist del contrato de trabajo con todas las cláusulas de IP necesarias, el acuerdo independiente de confidencialidad y cesión de IP para contratistas, el protocolo de salida de empleados para minimizar el riesgo de fuga de IP, y los recursos legales de referencia actualizados.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar acuerdos de IP con empleados y contratistas que protejan los activos de la empresa',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Valoración de activos intangibles: cómo valorar la IP en el balance y las transacciones',
                'description'       => 'Domina los métodos de valoración de activos intangibles: marca, patentes, software y know-how en el contexto de M&A, fundraising, informes de due diligence y estados financieros bajo NIIF y PGC.',
                'prompt_content'    => <<<'PROMPT'
Eres un valorador de empresas y activos intangibles con experiencia en transacciones M&A, procesos de fundraising y preparación de informes de valoración para auditorías y procesos regulatorios. Necesito que me ayudes a entender los métodos de valoración de activos intangibles y a aplicarlos correctamente.

**Mi contexto:**
- Propósito de la valoración: [transacción M&A / fundraising / auditoría / litigio / informe de gestión / reconocimiento contable]
- Tipo de activo a valorar: [marca / patentes / software / base de clientes / know-how / contratos / dominio web]
- Tipo de empresa: [startup / pyme / gran empresa / multinacional]
- Marco contable aplicable: [NIIF / PGC español / US GAAP]
- Nivel de experiencia en valoración: [ninguno / conceptual / intermedio / avanzado]

Desarrolla una guía completa de valoración de activos intangibles:

**1. El problema de los intangibles en los estados financieros**
Explica la tensión fundamental entre el valor real de los intangibles y su tratamiento contable: por qué los estados financieros subestiman el valor de las empresas intensivas en conocimiento (una empresa de software puede tener el 90% de su valor en intangibles que no están en el balance), la diferencia entre los intangibles generados internamente (que en general no se activan) y los adquiridos (que sí se reconocen), por qué el precio de adquisición de una empresa es casi siempre mayor que el valor en libros (el goodwill y la asignación del precio de compra), las normas contables relevantes (NIIF 38 Activos Intangibles, NIIF 3 Combinaciones de Negocios, PGC NRV 5 y 6).

**2. Los tres grandes métodos de valoración de intangibles**
Detalla los tres enfoques de valoración de activos intangibles y cuándo usar cada uno: el enfoque de coste (cuánto costaría recrear el activo desde cero o cuánto costó desarrollarlo, útil para software y bases de datos), el enfoque de mercado (comparación con transacciones de activos similares, útil cuando hay suficiente información de mercado disponible como para marcas en ciertos sectores), y el enfoque de ingresos (el valor presente de los flujos de caja que el activo generará en el futuro, el método más usado y más riguroso para la mayoría de los intangibles). Por qué en la práctica se suelen usar varios métodos y se triangula el resultado.

**3. Valoración de marca: el método Relief from Royalty**
Explica en detalle el método Relief from Royalty (RFR) para valorar marcas: la lógica del método (el valor de la marca es el ahorro en royalties que la empresa obtiene por ser propietaria de su marca en lugar de licenciarla de terceros), cómo determinar la tasa de royalties apropiada (bases de datos de transacciones comparables como ktMINE, RoyaltyStat, o BVR), cómo proyectar los ingresos sobre los que aplicar el royalty, la tasa de descuento correcta para actualizar los flujos de royalties futuros, cómo calcular el valor terminal, los ajustes por riesgo específico de la marca. Ejemplo numérico paso a paso.

**4. Valoración de patentes y tecnología**
Detalla los métodos para valorar patentes y activos tecnológicos: el método de ingresos para patentes (proyección de los ingresos que la patente protege, aplicando un factor de obsolescencia técnica y el período de vida restante de la patente), el método de coste de desarrollo (cuánto costó desarrollar la tecnología patentada, con ajuste por obsolescencia), las tasas de royalties de referencia para distintas industrias (la regla del 25%, las bases de datos de royalties), la valoración del portfolio de patentes como conjunto (el valor defensivo además del ofensivo), los ajustes por fortaleza de la patente (anchura de las reivindicaciones, historial de enforcement, jurisdicciones cubiertas).

**5. Valoración de software y activos digitales**
Explica los métodos de valoración específicos para software: el método de coste de recreación o coste histórico capitalizado (cuántas horas de desarrollo a qué coste, con ajuste por obsolescencia funcional y tecnológica), el método de ingresos para SaaS (DCF basado en el ARR actual y la tasa de crecimiento proyectada, con múltiplos de valoración ajustados por la calidad de los ingresos), la valoración de los datos como activo (metodologías emergentes para cuantificar el valor de los datos de usuarios o de entrenamiento de IA), la valoración de dominios web y plataformas digitales.

**6. Valoración de la base de clientes y contratos**
Detalla cómo valorar la cartera de clientes como activo intangible: el método MPEEM (Multi-Period Excess Earnings Method) que atribuye a la base de clientes los ingresos futuros menos los cargos por los activos que contribuyen a generarlos, cómo estimar la tasa de retención de clientes y su impacto en el valor, el valor de la vida del cliente (LTV) como punto de partida para la valoración de la cartera, la valoración de contratos a largo plazo y acuerdos de licencia.

**7. Asignación del precio de compra (PPA) en M&A**
Explica el proceso de Purchase Price Allocation (PPA) que se realiza tras una adquisición bajo NIIF 3 o ASC 805: la obligación de identificar y valorar todos los activos intangibles adquiridos por separado del goodwill, los activos intangibles típicos que se identifican (marca, tecnología, base de clientes, backlog, non-compete agreements, know-how), cómo se amortiza cada tipo de intangible (vida útil definida vs indefinida), el impacto del PPA en el P&L post-adquisición y cómo afecta a los estados financieros que verán los inversores.

**8. Valoración de intangibles en fundraising**
Detalla cómo los inversores valoran los activos intangibles en los procesos de inversión: por qué los VCs valoran más una startup con IP protegida (menor riesgo de que la competencia replique la innovación, mayor valoración en una salida futura), cómo presentar el valor de los intangibles en el deck de inversión y en el data room, qué esperan los compradores estratégicos en el due diligence de IP (propiedad clara, contratos con empleados y contratistas correctos, ausencia de litigios), cómo negociar la valoración cuando el mayor activo de la empresa es intangible y difícil de cuantificar para el inversor.

**9. Impairment testing y deterioro de intangibles**
Explica el proceso de prueba de deterioro de los activos intangibles bajo las normas contables: cuándo se requiere un test de deterioro (anualmente para los intangibles de vida indefinida y el goodwill, y cuando hay indicios de deterioro para los de vida definida), cómo calcular el valor recuperable (el mayor entre el valor razonable menos costes de venta y el valor en uso), las implicaciones de reconocer un deterioro en el P&L y cómo comunicarlo a los inversores, los indicadores de que puede ser necesario registrar un deterioro.

Termina con un caso práctico completo de valoración de una startup de software: aplicación del método de alivio de royalties para la marca, del método de coste de recreación para el software, y del método MPEEM para la base de clientes, con los parámetros clave y las sensibilidades del modelo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 65,
                'use_case'          => 'Valorar activos intangibles (marca, patentes, software) en M&A, fundraising e informes financieros',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'IP portfolio management: estrategia de registro, defensa y monetización de la propiedad intelectual',
                'description'       => 'Gestiona el portfolio de propiedad intelectual de un cliente o de un despacho: estrategia de registro en múltiples jurisdicciones, defensa activa frente a infracciones, licenciamiento y monetización de los activos.',
                'prompt_content'    => <<<'PROMPT'
Eres un abogado senior especialista en propiedad intelectual e industrial con experiencia en la gestión de portfolios de IP para empresas tecnológicas, farmacéuticas y de consumo en múltiples jurisdicciones. Necesito que me ayudes a desarrollar e implementar una estrategia completa de gestión del portfolio de IP.

**Mi contexto:**
- Tipo de cliente: [startup tecnológica / empresa industrial / empresa de consumo / institución de investigación / pyme innovadora]
- Portfolio actual de IP: [tipos de activos y número aproximado: patentes, marcas, diseños, derechos de autor]
- Presencia geográfica: [España / UE / EE.UU. / global]
- Objetivo principal: [protección defensiva / monetización / preparación para M&A / reducción de costes de mantenimiento / construcción de portfolio desde cero]
- Presupuesto anual de IP: [rango aproximado]

Desarrolla una estrategia completa de gestión del portfolio de IP:

**1. La auditoría del portfolio de IP: el punto de partida**
Explica el proceso de auditoría completa del portfolio de IP existente: el inventario de todos los activos (patentes concedidas y solicitadas, marcas registradas, diseños, derechos de autor relevantes, secretos comerciales documentados), la evaluación del estado de cada activo (fechas de vencimiento, jurisdicciones cubiertas, estado de las renovaciones), el análisis de alineación entre el portfolio y la estrategia de negocio actual (activos valiosos vs activos que ya no cubren productos o mercados relevantes), la identificación de gaps (innovaciones sin proteger, mercados sin cobertura). Herramientas de gestión de portfolios de IP (Dennemeyer, Anaqua, CPI).

**2. Estrategia de registro: cobertura geográfica óptima**
Detalla cómo definir la estrategia de registro geográfico para maximizar el valor al menor coste: el análisis de mercados donde la empresa vende, compra o fabrica como punto de partida para la cobertura geográfica mínima necesaria, la diferencia entre la protección nacional, regional (marca UE en la EUIPO, patente europea en la EPO, diseño comunitario) e internacional (Madrid, PCT, La Haya), cómo priorizar las jurisdicciones cuando el presupuesto es limitado, el análisis de la cobertura de la competencia para identificar jurisdicciones estratégicas no evidentes, los plazos críticos en el sistema internacional (12 meses para el sistema de Madrid y PCT desde la prioridad).

**3. La estrategia de patentes: construcción y mantenimiento del portfolio**
Explica cómo construir y gestionar un portfolio de patentes estratégico: el balance entre amplitud de las reivindicaciones (más difícil de conceder pero más valiosa si se concede) y estrechez (más fácil de conceder pero más fácil de rodear), la estrategia de patentes divisionales (dividir una solicitud en varias para cubrir distintos aspectos de la misma invención), el uso de las continuations en EE.UU. para construir cobertura progresiva mientras la tecnología evoluciona, la decisión de mantener o abandonar patentes según su relevancia actual para el negocio (el coste de mantenimiento de una patente concedida en Europa puede superar los 5.000 euros anuales cuando se acumulan varias jurisdicciones).

**4. Defensa activa del portfolio: enforcement**
Detalla la estrategia de defensa activa del portfolio de IP: el sistema de vigilancia de IP (monitorización de solicitudes de registro de marcas similares, alertas de patentes de la competencia, monitoring de infractores en el mercado y en plataformas online), el proceso de enforcement escalonado (carta de cese y desistimiento, procedimiento de oposición ante la oficina de IP, medidas cautelares, procedimiento principal de infracción), los factores que determinan si vale la pena litigar (valor económico de la infracción, solidez de la IP propia, recursos del infractor, jurisdicción), las alternativas al litigio (mediación, arbitraje, licencia forzosa).

**5. Oposición y nulidad: atacar la IP de la competencia**
Explica cuándo y cómo usar los procedimientos de oposición y nulidad como herramienta estratégica: el procedimiento de oposición ante la EUIPO o la OEPM cuando la competencia solicita una marca similar (plazos, legitimación, motivos de oposición, estrategia de oposición), el procedimiento de nulidad o caducidad para atacar marcas ya registradas del competidor que no se usa (la caducidad por falta de uso de la marca en la UE en 5 años), los procedimientos de oposición a patentes en la EPO (oposición en los 9 meses siguientes a la concesión) y los procedimientos de nulidad de patentes ante los tribunales, la defensa ante una oposición iniciada por terceros.

**6. Licenciamiento y monetización del portfolio**
Detalla las estrategias de monetización del portfolio de IP: el licenciamiento de patentes no esenciales a terceros (in-bound licensing como fuente de ingresos), los acuerdos de cross-licensing con competidores para evitar litigios cruzados, la participación en estándares tecnológicos con patentes FRAND (Fair Reasonable And Non-Discriminatory), la venta de activos de IP que no son estratégicos para el negocio actual, los fondos y plataformas de IP para monetizar portfolios de patentes (IP Fund, Allied Security Trust), la licencia de marca a distribuidores y franquiciados.

**7. Due diligence de IP en M&A**
Explica el proceso de due diligence de propiedad intelectual en transacciones corporativas: la revisión de la titularidad de todos los activos (que las asignaciones de empleados y contratistas estén correctamente documentadas), el análisis de la solidez de las patentes (riesgo de nulidad, scope real de las reivindicaciones), la revisión de las licencias entrantes y salientes (qué derechos tiene la empresa sobre IP de terceros y qué ha cedido a terceros), la identificación de riesgos de infracción (análisis de FTO para los productos principales), las representaciones y garantías de IP que el vendedor debe dar y el comprador debe exigir.

**8. Presupuesto y gestión de costes del portfolio**
Detalla cómo gestionar el presupuesto de IP de manera eficiente: el coste total de propiedad de un portfolio de patentes (desde la solicitud hasta la expiración en múltiples jurisdicciones puede superar los 100.000 euros por patente), las decisiones de mantener vs abandonar activos según su relevancia comercial actual y proyectada, el uso de agentes de IP locales vs agentes internacionales para reducir los costes de las validaciones nacionales de la patente europea, los mecanismos de financiación de la IP para pymes (deducciones fiscales por I+D+i, ayudas de la EUIPO para pymes, Patent Box fiscal).

Termina con un modelo de política de IP para una empresa innovadora: los procesos internos de disclosure de invenciones, el comité de IP, los criterios de decisión de registro, el presupuesto de IP como porcentaje de la facturación según el sector, y el sistema de reporting de IP para el consejo de administración.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 65,
                'use_case'          => 'Gestionar un portfolio de IP con estrategia de registro, defensa, licenciamiento y M&A',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Protecting customer IP: cómo el equipo de CS gestiona el conocimiento confidencial del cliente',
                'description'       => 'Implementa las mejores prácticas para proteger la propiedad intelectual y la información confidencial del cliente en el equipo de CS: NDAs, gestión de datos sensibles, formación del equipo y protocolos de salida del cliente.',
                'prompt_content'    => <<<'PROMPT'
Eres un VP de Customer Success con experiencia en empresas SaaS que manejan información altamente sensible de sus clientes (datos financieros, estratégicos, de salud o de consumidores), y has implementado marcos robustos para proteger la confidencialidad del cliente en todas las interacciones del equipo de CS. Necesito que me ayudes a construir un sistema de protección de la IP y la información confidencial del cliente.

**Mi contexto:**
- Tipo de producto: [SaaS de datos / plataforma de análisis / software de gestión empresarial / plataforma de salud / herramienta financiera]
- Tipo de información que maneja el CS: [datos financieros del cliente / estrategia de negocio / datos de empleados / datos de clientes del cliente / código fuente / secretos comerciales]
- Tamaño del equipo de CS: [número de CSMs y roles]
- Marco regulatorio aplicable: [RGPD, HIPAA, SOC 2, ISO 27001, NDA genérico]
- Principal preocupación: [que un CSM comparta información entre clientes / que un ex-empleado lleve información del cliente / que el cliente no confíe en que protegemos su información / cómo gestionar el conocimiento del cliente al finalizar el contrato]

Desarrolla un marco completo de protección de la IP del cliente:

**1. Por qué la protección de la IP del cliente es estratégica para el CS**
Explica por qué la confidencialidad es un activo competitivo para el equipo de CS: la confianza del cliente como base de la relación a largo plazo (el cliente comparte más información cuando confía en que se protegerá), el riesgo reputacional y legal de las filtraciones (un caso de uso indebido de información del cliente puede destruir la relación y generar demandas), la diferencia entre la obligación legal de confidencialidad (el contrato, el RGPD) y la cultura de confidencialidad que hace que el equipo proteja la información incluso en situaciones no previstas en los contratos.

**2. El marco contractual de confidencialidad con el cliente**
Detalla los elementos que deben estar en los contratos con los clientes para proteger adecuadamente su IP: las cláusulas de confidencialidad mutua (el cliente también debe proteger la IP del proveedor), la definición precisa de qué información es confidencial (la definición amplia vs la lista específica, sus ventajas e inconvenientes), las excepciones estándar a la confidencialidad (información de dominio público, información recibida de terceros sin restricción, información requerida por orden judicial), las obligaciones del equipo de CS que nacen del contrato (quién puede acceder, con qué fin, durante cuánto tiempo), las consecuencias del incumplimiento y cómo se calcula el daño.

**3. Políticas internas de manejo de información del cliente**
Explica las políticas internas que debe tener el equipo de CS para proteger la información del cliente: el principio de mínimo privilegio aplicado al CS (cada CSM solo accede a la información de sus clientes asignados, no a la de toda la cartera), la política de no uso cruzado de información entre clientes (lo que el CSM aprende con un cliente no puede usarse para asesorar a un competidor), el procedimiento de escalada cuando un CSM necesita consultar el caso de un cliente con otro miembro del equipo, la política de captura de información en los sistemas de CS y CRM (qué se documenta, con qué nivel de detalle, quién puede verlo).

**4. Formación del equipo de CS en confidencialidad**
Detalla el programa de formación en confidencialidad y protección de datos para el equipo de CS: los conceptos que todo CSM debe conocer (qué es información confidencial del cliente, qué es información personal bajo el RGPD, la diferencia entre secreto comercial y dato personal), los escenarios de riesgo más frecuentes y cómo manejarlos (el cliente pregunta sobre otro cliente, el CSM trabaja en un café y habla por teléfono de un cliente, el cliente comparte información que no debería compartir), las simulaciones y casos prácticos en la formación, la frecuencia de la formación (onboarding + formación anual de actualización).

**5. Protección de datos del cliente bajo el RGPD**
Explica las obligaciones específicas bajo el RGPD que afectan al equipo de CS cuando trata datos personales de los clientes o de los usuarios finales del cliente: la distinción entre el responsable del tratamiento (el cliente) y el encargado del tratamiento (el proveedor de software), las cláusulas de encargado del tratamiento que deben estar en el contrato de servicio, las instrucciones del responsable y cómo el CS debe seguirlas, el deber de notificación al cliente ante una brecha de seguridad que afecta a sus datos, los derechos del interesado (el usuario final del cliente) y cómo gestionarlos cuando se ejercen a través del cliente.

**6. Gestión de la información del cliente al finalizar el contrato**
Detalla el proceso de offboarding de datos del cliente cuando finaliza la relación comercial: el derecho del cliente a recuperar todos sus datos en un formato exportable antes de la cancelación, las políticas de retención y destrucción de datos del cliente en los sistemas del proveedor (qué se elimina, cuándo, cómo se certifica la eliminación), la eliminación de la información confidencial del cliente en los sistemas de CS, CRM y email, cómo manejar la información que el equipo de CS ha internalizado como conocimiento (no se puede borrar de la cabeza del CSM, pero sí gestionar sus obligaciones contractuales de no uso), las cláusulas de supervivencia de la confidencialidad en el contrato.

**7. Incidentes de confidencialidad: detección y respuesta**
Explica el protocolo de gestión de incidentes de confidencialidad del cliente: los tipos de incidentes más frecuentes (compartir información del cliente A con el cliente B, enviar documentación del cliente equivocado, pérdida de un dispositivo con información del cliente, acceso de un ex-empleado a sistemas), el proceso de notificación interna (quién debe saber, cuándo, cómo), la evaluación del impacto y la decisión de notificar al cliente afectado, cómo comunicar el incidente al cliente de manera que minimice el daño reputacional, el análisis post-incidente y las medidas correctoras.

**8. Tecnología y seguridad para proteger la IP del cliente**
Detalla las medidas técnicas que protegen la información del cliente en el entorno del CS: control de acceso basado en roles en el CRM y en la plataforma de CS (cada CSM ve solo sus cuentas), cifrado de datos en tránsito y en reposo, políticas de dispositivos del equipo de CS (BYOD vs dispositivos corporativos, cifrado de disco, gestión de dispositivos móviles), control de las descargas y exportaciones de información del cliente, logs de auditoría de acceso a la información de clientes, herramientas de prevención de pérdida de datos (DLP) para el email y el almacenamiento en nube.

**9. Confianza como producto: cómo comunicar las medidas de seguridad al cliente**
Explica cómo convertir las medidas de protección de la IP del cliente en un argumento de venta y retención: cómo comunicar las certificaciones de seguridad (SOC 2 Type II, ISO 27001) al equipo de compras y al CISO del cliente, la hoja de seguridad y privacidad como documento de ventas para clientes enterprise, cómo responder a los cuestionarios de seguridad de clientes grandes, el papel del CSM en las revisiones de seguridad periódicas con el cliente (security reviews como touchpoint de retención), cómo el equipo de CS puede detectar cuando el cliente tiene preocupaciones de seguridad antes de que se conviertan en un motivo de churn.

Termina con una política de confidencialidad y protección de datos del cliente para el equipo de CS: las reglas que cada CSM debe seguir, los procedimientos de escalada cuando no está seguro de cómo manejar una situación, y el compromiso que la empresa puede compartir públicamente con sus clientes sobre cómo protege su información.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Proteger la información confidencial del cliente en el equipo de CS con políticas, formación y protocolos',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'IP del freelance: a quién pertenece el trabajo creado para un cliente',
                'description'       => 'Entiende tus derechos como freelance sobre el trabajo que creas: cuándo conservas el copyright, cómo ceder correctamente los derechos, qué incluir en el contrato y cómo protegerte de los clientes que usan tu trabajo sin pagar o más allá de lo acordado.',
                'prompt_content'    => <<<'PROMPT'
Eres un abogado especialista en contratos para profesionales creativos y tecnológicos independientes, con experiencia asesorando a freelancers de diseño, desarrollo, copywriting y consultoría en la protección de sus derechos sobre el trabajo creado para clientes. Necesito que me ayudes a entender mis derechos sobre el trabajo que creo como freelance y a protegerme de manera efectiva.

**Mi contexto:**
- Tipo de trabajo freelance: [diseño gráfico / desarrollo de software / copywriting / fotografía / consultoría / ilustración / UX/UI]
- Tipo de clientes habituales: [particulares / pymes / agencias / grandes empresas / startups]
- Problema más frecuente: [el cliente usa mi trabajo para cosas que no acordamos / no sé a quién pertenece el copyright / un cliente publicó mi trabajo sin pagar la factura / quiero retener algunos derechos sobre el trabajo]
- País de residencia: [España o especifica otro]

Desarrolla una guía completa de derechos de propiedad intelectual para freelancers:

**1. El copyright del freelance: el principio fundamental**
Explica el principio básico que todo freelance debe conocer: en España, como en la mayoría de los países, el autor de una obra (el que la crea) es el titular de los derechos de propiedad intelectual, incluso cuando la crea por encargo de un cliente. El cliente que paga no adquiere automáticamente los derechos sobre el trabajo; solo adquiere los derechos que el contrato le cede de manera expresa. La diferencia fundamental con el trabajador asalariado: el empleado que crea en el ámbito de su contrato cede los derechos económicos al empleador por ley, pero el freelance los retiene hasta que los cede voluntariamente.

**2. Qué derechos tienes sobre el trabajo que creas**
Detalla los derechos que el freelance tiene sobre su trabajo: los derechos morales (inalienables e irrenunciables en España: el derecho a ser reconocido como autor, el derecho a que la obra no sea modificada sin su consentimiento, el derecho de divulgación), los derechos patrimoniales o económicos (los que se pueden ceder o licenciar: reproducción, distribución, comunicación pública, transformación), la distinción entre el soporte material (el archivo que se entrega al cliente) y los derechos sobre la obra (que el freelance retiene salvo cesión). Por qué "pagar el diseño" no equivale a "comprar todos los derechos del diseño".

**3. La cesión de derechos: qué significa y qué deberías negociar**
Explica los tipos de cesión de derechos que puede negociar el freelance: la licencia de uso limitada (el cliente puede usar la obra para el fin específico pactado, pero el freelance retiene la titularidad y puede reutilizar elementos en otros proyectos), la cesión exclusiva por tiempo y territorio limitado (el cliente tiene los derechos en exclusiva durante X años para Y mercado), y la cesión total y exclusiva de todos los derechos (el cliente se convierte en el titular como si fuera el creador, el precio debe reflejar esta transferencia de valor). Por qué la cesión total es la excepción y no la regla, y cómo calcular el precio diferencial para cada tipo de cesión.

**4. El contrato del freelance: las cláusulas de IP imprescindibles**
Detalla las cláusulas que debe incluir el contrato del freelance para proteger sus derechos: la descripción precisa del trabajo encargado y de los entregables específicos, la cláusula de derechos (qué derechos cede, para qué uso, en qué territorio y durante cuánto tiempo), la cláusula de retención de derechos no cedidos (todos los derechos no cedidos expresamente quedan en manos del freelance), la cláusula de crédito o atribución (el cliente debe mencionar al freelance como autor en el uso de la obra), la cláusula de modificaciones (el cliente no puede modificar la obra sin autorización del freelance o debe adquirir ese derecho por separado), y las cláusulas de uso del trabajo en el portfolio del freelance.

**5. El trabajo no pagado: puedes retener los derechos**
Explica la situación que vive muchos freelancers y cuáles son sus derechos: cuando el cliente no paga la factura, el freelance no ha cedido los derechos aunque haya entregado el trabajo (la cesión de derechos puede estar condicionada contractualmente al pago completo), cómo redactar la cláusula de condición de pago para la cesión de derechos en el contrato, qué hacer cuando el cliente ya está usando el trabajo sin haber pagado (la reclamación de copyright como palanca de cobro), el proceso para solicitar la retirada del trabajo de uso público hasta que se regularice el pago.

**6. El uso más allá de lo acordado: cómo detectarlo y reclamar**
Detalla cómo actuar cuando el cliente usa el trabajo para más de lo acordado: el logo que se contrató para uso en web y ahora está en publicidad exterior, la fotografía que se licenció para la web de España y se usa en toda Europa, el texto que se encargó para un blog y se publica como libro. Cómo documentar el uso original pactado vs el uso detectado, la comunicación amistosa al cliente para regularizar el uso ampliado (el cliente muchas veces no sabe que lo que hace está fuera del acuerdo), la factura de uso adicional como solución económica, cuándo escalar a un proceso formal de reclamación.

**7. Reutilización de tu propio trabajo: qué puedes hacer**
Explica los derechos del freelance sobre el trabajo que ha creado para un cliente: cuándo puede el freelance usar elementos de un proyecto para otro cliente (elementos genéricos y no protegibles por el cliente vs elementos específicos creados para ese cliente), cómo construir una biblioteca de elementos reutilizables que sea claramente propiedad del freelance (plantillas, componentes de código, assets genéricos), cuándo puede el freelance mostrar el trabajo en su portfolio (depende de las cláusulas del contrato y de si hay acuerdo de confidencialidad), el derecho a atribuirse la autoría aunque el trabajo esté bajo una marca del cliente.

**8. Acuerdos de confidencialidad y secretos del cliente**
Detalla las implicaciones de los acuerdos de confidencialidad que firman muchos freelancers: qué es el NDA del cliente y qué te obliga a guardar en secreto, la diferencia entre la confidencialidad del trabajo (no revelar el contenido del proyecto) y la cesión de derechos (a quién pertenece el trabajo), cómo el NDA puede limitar el uso del trabajo en el portfolio del freelance, qué cláusulas del NDA son razonables y cuáles son abusivas, cómo negociar un NDA desequilibrado antes de firmarlo.

**9. Contratos leoninos y cláusulas que debes rechazar**
Explica las cláusulas que aparecen en los contratos de clientes grandes que el freelance debe entender antes de firmar: la cláusula de "work made for hire" y por qué en España tiene un alcance diferente al de EE.UU., la cesión automática de todos los derechos sin compensación adicional, la cláusula de "moral rights waiver" o renuncia de derechos morales (no válida en España), la cláusula de propiedad intelectual sobre el know-how del freelance (que intentaría apropiarse de tu metodología y experiencia), las cláusulas de exclusividad que te impiden trabajar con la competencia del cliente.

Termina con un kit de supervivencia para el freelance: la plantilla de propuesta comercial con las cláusulas de IP incluidas, la guía de cómo comunicar los derechos de IP al cliente de manera clara sin que suene a desconfianza, y las tres situaciones en las que definitivamente debes consultar a un abogado antes de firmar o de actuar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 45,
                'use_case'          => 'Proteger los derechos del freelance sobre el trabajo creado con contratos correctos y reclamaciones',
                'vote_score'        => 46,
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
