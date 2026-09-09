<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills152Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Comunicación en el sector público',
                'description'      => 'Las reglas de comunicación para organismos públicos: transparencia, inclusión, lenguaje claro y las campañas de servicio público que realmente informan a los ciudadanos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en comunicación institucional y comunicación pública con experiencia en organismos de la administración central, autonómica y local. Conoces los principios de transparencia, lenguaje claro, comunicación inclusiva y el marco legal que regula la comunicación de las administraciones públicas en España.

Necesito una guía completa para comunicar eficazmente desde un organismo público. Desarrolla los siguientes bloques:

**1. El marco específico de la comunicación pública**
Explica en qué se diferencia comunicar desde una administración pública vs. desde una empresa privada:
- Principios que rigen la comunicación pública: transparencia, objetividad, neutralidad, inclusión, accesibilidad
- El marco legal: Ley de Transparencia (19/2013), Ley de Acceso Electrónico (11/2007), normativa de accesibilidad web (WCAG 2.1 obligatoria en el sector público)
- La pluralidad de audiencias: ciudadanía general, medios de comunicación, otros organismos, grupos específicos
- Cómo gestionar la comunicación en procesos electorales: la comunicación institucional permitida vs. la que podría interpretarse como propaganda

**2. Lenguaje claro: el principio más ignorado y el más importante**
El lenguaje administrativo es el enemigo de la comunicación efectiva. Explica:
- Los vicios del lenguaje administrativo: gerundios incorrectos, voz pasiva excesiva, nominalizaciones, tecnicismos innecesarios
- Los principios del lenguaje claro (Plain Language): cómo aplicarlos a textos institucionales
- Cómo reescribir documentos administrativos, resoluciones y comunicados de prensa en lenguaje ciudadano
- Los tests de legibilidad más usados (Fernández Huerta, índice de Flesch) y cómo aplicarlos
- Ejemplos de antes y después de textos administrativos reales reescritos en lenguaje claro

**3. Comunicación inclusiva en el sector público**
Las administraciones deben comunicar para toda la ciudadanía:
- Lenguaje no discriminatorio: género, diversidad funcional, origen, religión, orientación sexual
- Cómo aplicar la perspectiva de género en las comunicaciones sin generar rechazo
- Accesibilidad en los contenidos digitales: subtítulos, audiodescripciones, lectura fácil, braille
- Comunicación multilingüe en comunidades con lengua cooficial
- Recursos y guías de lenguaje inclusivo de referencia para organismos públicos

**4. Las campañas de servicio público que funcionan**
Analiza qué hace que una campaña de comunicación pública sea eficaz:
- La diferencia entre informar y comunicar: por qué las campañas puramente informativas no cambian comportamientos
- El modelo de comunicación para el cambio de comportamiento (behaviour change communication): el marco COM-B
- Casos de éxito de campañas de salud pública, seguridad vial y concienciación medioambiental en España y Europa
- Cómo medir el impacto de una campaña de comunicación pública: más allá del alcance y las impresiones
- El rol de los canales digitales en la comunicación pública moderna: redes sociales, apps, notificaciones push

**5. Gestión de crisis de comunicación en el sector público**
Las instituciones públicas son especialmente vulnerables a las crisis de comunicación:
- El protocolo de gestión de crisis para organismos públicos
- Las primeras 24 horas: qué comunicar, en qué formato y por qué canales
- Cómo comunicar errores institucionales de forma honesta sin amplificar el problema
- El rol del portavoz institucional y cómo prepararlo
- Casos de crisis de comunicación pública recientes y las lecciones aprendidas

**6. El plan de comunicación institucional**
Diseña la estructura de un plan de comunicación para un organismo público:
- Análisis de audiencias y canales
- Objetivos de comunicación medibles y alineados con la misión institucional
- Calendario editorial anual
- Presupuesto tipo y cómo optimizarlo con recursos limitados
- Cómo integrar la comunicación digital con los canales tradicionales

Cierra con un checklist de 15 puntos para revisar cualquier comunicado institucional antes de su publicación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar y ejecutar comunicación institucional transparente y efectiva para ciudadanos',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'GovTech y desarrollo para administraciones',
                'description'      => 'Desarrolla para el sector público: licitaciones, estándares de seguridad, accesibilidad obligatoria y las particularidades de los proyectos con la administración.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un desarrollador de software con amplia experiencia en proyectos para administraciones públicas y GovTech. Conoces el marco de contratación pública, los estándares técnicos obligatorios, los requisitos de seguridad del ENS y las particularidades de trabajar con organismos públicos en España y Europa.

Necesito una guía técnica completa para desarrollar software para el sector público. Estructura tu respuesta en los siguientes bloques:

**1. El ecosistema GovTech: oportunidades y realidades**
Presenta el panorama del desarrollo para administraciones públicas:
- Qué es GovTech y cómo ha evolucionado en España (iniciativas como el PERTE Digital, el Plan de Digitalización de las AAPP)
- Los tipos de proyectos más frecuentes: portales ciudadanos, backoffice administrativo, interoperabilidad, datos abiertos, IA en la administración
- Diferencias fundamentales con el desarrollo para el sector privado: plazos, procesos de decisión, ciclos presupuestarios
- Las oportunidades reales para empresas medianas y startups vs. las grandes integradores

**2. Cómo funciona la contratación pública de tecnología**
Explica el proceso de contratación que debe conocer todo desarrollador que quiere trabajar con la administración:
- Los procedimientos de contratación más frecuentes para proyectos TIC: abierto, restringido, negociado sin publicidad, contrato menor
- El umbral del contrato menor (15.000 € sin IVA para servicios): cómo aprovecharlo para entrar
- Los pliegos técnicos y administrativos: qué contienen y cómo leerlos para valorar si merece la pena presentarse
- Los criterios de evaluación más habituales y cómo ponderarlos en la oferta
- Los errores más frecuentes que descalifican una oferta técnica

**3. Estándares técnicos obligatorios**
Las administraciones públicas tienen requisitos técnicos específicos e ineludibles:
- El ENI (Esquema Nacional de Interoperabilidad): formatos, protocolos y estándares de intercambio de datos
- El ENS (Esquema Nacional de Seguridad): categorías de sistemas, medidas de seguridad y certificación
- WCAG 2.1 nivel AA: accesibilidad web obligatoria para el sector público y cómo implementarla
- La Ley de Protección de Datos (LOPD-GDD) y el RGPD aplicados a sistemas que tratan datos de ciudadanos
- Cl@ve y FIRe: integración con los sistemas de identidad digital y firma electrónica de la administración

**4. Arquitectura de sistemas para la administración**
Las decisiones de arquitectura más relevantes para proyectos públicos:
- Software libre y open source: la preferencia legal de las administraciones y cómo aprovecharlo
- Interoperabilidad con SARA, REDSARA y los servicios comunes de la AGE
- Microservicios vs. monolito en el contexto de las administraciones: cuándo cada arquitectura es más segura
- Despliegue en cloud: el marco de seguridad para cloud público en la administración española
- Cómo estructurar los entornos (desarrollo, preproducción, producción) en un proyecto público

**5. Gestión de proyectos con la administración**
Las particularidades del project management en entornos públicos:
- Los interlocutores habituales y sus distintos roles: técnico, jurídico, político
- Cómo gestionar los cambios de alcance en un contrato público sin incurrir en modificaciones ilegales
- Los plazos de pago de la administración y cómo gestionarlos financieramente
- La documentación que debes mantener para protegerte en caso de reclamaciones
- Cómo gestionar la propiedad intelectual del software desarrollado para la administración

**6. Plan de entrada al mercado público**
Estrategia para una empresa de desarrollo que quiere empezar a trabajar con la administración:
- Cómo obtener los certificados necesarios para presentarse a licitaciones (DEUC, certificados de estar al corriente)
- Dónde monitorizar licitaciones: PLACE, PLACSP, Plataforma de Contratación del Sector Público
- Las alianzas estratégicas con integradores establecidos para acceder a proyectos grandes
- Cómo construir referencias públicas desde los primeros proyectos
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Desarrollar y licitar proyectos de software para administraciones públicas',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de servicios públicos',
                'description'      => 'Diseña servicios digitales para ciudadanos con los estándares de accesibilidad obligatorios, lenguaje claro y diseño inclusivo que no deja a nadie atrás.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de servicios con especialización en el diseño de servicios públicos digitales para ciudadanos. Conoces los estándares del GDS (UK Government Digital Service), la metodología de service design aplicada al contexto público y los requisitos de accesibilidad obligatorios para las administraciones europeas.

Necesito una guía completa para diseñar servicios públicos digitales que realmente funcionen para toda la ciudadanía. Desarrolla los siguientes bloques:

**1. Los principios del diseño de servicios públicos**
Explica los principios que deben guiar el diseño de cualquier servicio público digital:
- Diseñar para las necesidades del usuario, no para las de la organización
- Hacer lo más simple posible lo más difícil para el usuario
- El gobierno como plataforma: servicios consistentes, reutilizables e interoperables
- Transparencia en el proceso: que el ciudadano sepa siempre en qué paso está y qué le falta
- Cómo los principios del GDS (UK) y del Observatorio de Administración Electrónica (España) guían el diseño

**2. Research con ciudadanos: cómo hacerlo bien**
El research en el sector público tiene sus propias particularidades:
- Cómo reclutar participantes representativos, incluyendo personas mayores, con baja literacidad digital y con diversidad funcional
- Los métodos de investigación más útiles para servicios públicos: entrevistas, pruebas de usabilidad, análisis de llamadas y reclamaciones
- Cómo trabajar con datos de uso existentes (analytics de la sede electrónica) para identificar puntos de abandono
- El problema de la población no digital: cómo diseñar el servicio digital sin excluir a quien no tiene acceso o habilidades

**3. Accesibilidad obligatoria: más allá del checklist**
La accesibilidad no es opcional en el sector público. Explica cómo implementarla de verdad:
- WCAG 2.1 nivel AA: los cuatro principios (perceptible, operable, comprensible, robusto) con ejemplos concretos de cada uno
- Las tecnologías de apoyo que debes probar: lectores de pantalla (NVDA, JAWS, VoiceOver), control por teclado, control por voz
- Cómo integrar las pruebas de accesibilidad en el proceso de diseño, no solo al final
- Las auditorías de accesibilidad: qué herramientas automáticas usar (Axe, WAVE) y qué solo puede detectar una auditoría manual con usuarios reales
- El rol de la Declaración de Accesibilidad que obliga la normativa europea

**4. Lenguaje claro en la interfaz**
Los formularios y textos de los servicios públicos son frecuentemente incomprensibles:
- Cómo escribir instrucciones de formulario que el ciudadano realmente entiende
- Los mensajes de error que ayudan vs. los que frustran
- Cómo explicar conceptos legales o administrativos complejos en lenguaje llano sin perder precisión
- La lectura fácil: cuándo y cómo usarla, y los organismos que la acreditan
- Cómo hacer pruebas de comprensión con usuarios de baja literacidad

**5. El proceso de diseño para servicios públicos**
Adapta el proceso de diseño de producto al contexto de la administración:
- Cómo trabajar con los múltiples stakeholders internos de un organismo público (jurídico, IT, gestores)
- Cómo gestionar los requisitos legales que impone la normativa y que el diseñador no puede cambiar
- El prototipado para servicios públicos: cómo testear flujos que implican sistemas legacy
- La validación del servicio antes del lanzamiento: las guías de evaluación del GDS y cómo adaptarlas
- Cómo iterar un servicio público después del lanzamiento cuando los ciclos presupuestarios son anuales

**6. Métricas de los servicios públicos digitales**
Diseña el cuadro de mando de un servicio público digital:
- Las cuatro métricas del GDS: cost per transaction, user satisfaction, completion rate, digital take-up
- Cómo medir la exclusión digital: qué porcentaje de ciudadanos no puede completar el servicio sin ayuda
- El canal shift: cómo medir si el servicio digital está sustituyendo llamadas y visitas presenciales
- Cómo comunicar los resultados de usabilidad y accesibilidad a los decisores políticos
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar servicios públicos digitales accesibles e inclusivos para toda la ciudadanía',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas al sector público',
                'description'      => 'Navega el proceso de licitación pública: pliegos, criterios de evaluación, recursos y la estrategia de posicionamiento que gana concursos sin necesidad de bajar el precio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en ventas al sector público y en licitaciones con experiencia en empresas tecnológicas, consultoras y proveedores de servicios que venden a administraciones públicas en España. Conoces la Ley de Contratos del Sector Público (LCSP), los procedimientos de contratación y las estrategias que permiten a empresas medianas competir con los grandes integradores.

Necesito una guía completa para vender al sector público de forma eficaz. Desarrolla los siguientes bloques:

**1. El mercado público como canal de ventas**
Explica las características del mercado público que todo vendedor debe conocer:
- El volumen del mercado de contratación pública en España y los sectores con mayor gasto TIC
- Los ciclos de compra de las administraciones: cómo se alinean con los presupuestos y los cambios de gobierno
- Los tipos de compradores: AGE, CCAA, EELL, organismos autónomos, universidades, sanidad — sus diferencias prácticas
- Por qué vender al sector público es diferente: el proceso formal, los tiempos, la trazabilidad y la igualdad de trato obligatoria

**2. Dónde y cómo encontrar oportunidades**
Estrategia de monitorización de licitaciones:
- Las plataformas de contratación: PLACE (AGE), PLACSP (autonómico), plataformas provinciales y municipales
- Cómo configurar alertas para recibir licitaciones relevantes automáticamente
- Los anuncios de información previa (AIP): cómo la administración avisa de lo que viene y cómo usarlos para prepararse
- Las consultas preliminares al mercado: cuándo las hace la administración y cómo participar para influir en el pliego
- La contratación menor: el camino más rápido para las primeras relaciones con organismos públicos

**3. Leer y analizar un pliego como un profesional**
La oferta empieza en el pliego, no en el formulario:
- La diferencia entre el PCAP (pliego administrativo) y el PPT (pliego técnico) y qué buscar en cada uno
- Cómo identificar si un pliego ha sido "diseñado" para un competidor concreto y qué hacer al respecto
- Los criterios de adjudicación: cómo leer la ponderación para calcular cuánto margen tienes en precio vs. calidad técnica
- Las solvencias técnicas y económicas: cómo acreditarlas y cuándo son un problema real
- Las preguntas a la mesa de contratación: cómo hacer preguntas que aclaran ambigüedades y que son públicas para todos los licitadores

**4. Preparar una oferta ganadora**
La metodología para construir propuestas que ganan:
- La estructura de una oferta técnica que puntúa al máximo: cómo responder exactamente a los criterios del pliego
- Cómo diferenciarse en la propuesta técnica cuando el pliego deja poco margen creativo
- La oferta económica: cuándo ajustar el precio y cuándo no, y cómo calcular la baja temeraria
- Los documentos de soporte que refuerzan la oferta: casos de uso similares, certificaciones, metodología
- El error más frecuente: propuestas que no responden al pliego sino que presentan el catálogo del proveedor

**5. Gestión del proceso y recursos**
El proceso no termina cuando se entrega la oferta:
- Los plazos del proceso de licitación y cómo gestionarlos internamente
- Cómo hacer seguimiento sin presionar: las comunicaciones permitidas durante el proceso
- El acto de apertura de proposiciones: qué información obtienes y cómo usarla
- Cómo interponer un recurso cuando sospechas de irregularidades: el TACRC y los órganos autonómicos
- Qué hacer cuando pierdes: la solicitud de informes y cómo aprender para la siguiente

**6. Construir relaciones y reputación en el sector público**
La venta al sector público es un juego de largo plazo:
- Cómo relacionarse con los técnicos de la administración de forma legal y ética
- Las ferias y eventos del sector público donde hacer networking
- Cómo convertir un contrato bien ejecutado en la referencia que gana el siguiente
- El papel de las asociaciones sectoriales en el mercado público tecnológico
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Ganar licitaciones públicas con una estrategia de ventas estructurada y ofertas que puntúan alto',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de producto en el sector público',
                'description'      => 'Las particularidades del product management en administraciones: stakeholders múltiples, presupuestos rígidos y el ciclo político que lo condiciona todo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager con experiencia trabajando en y para administraciones públicas, tanto en organismos internos que digitalizan sus servicios como en empresas GovTech que venden a la administración. Conoces las diferencias fundamentales entre el PM en el sector privado y en el público, y cómo navegar las complejidades del entorno institucional.

Necesito una guía completa sobre product management en el sector público. Desarrolla los siguientes bloques:

**1. El producto público: qué es diferente**
Explica por qué el product management en el sector público requiere habilidades distintas:
- El cliente no elige: los ciudadanos no pueden cambiar de proveedor de servicios públicos, lo que cambia radicalmente la relación con el usuario
- El mandato legal: el producto no puede ir más allá ni quedarse por debajo de lo que dicta la norma
- El éxito no es el crecimiento: las métricas de éxito (eficiencia, cobertura, equidad) son distintas a las del sector privado
- El ciclo político: cómo los cambios de gobierno afectan al roadmap, al presupuesto y a las prioridades
- La transparencia obligatoria: todo lo que hace la administración es público y auditable

**2. Stakeholder management en administraciones**
El mapa de stakeholders en un organismo público es mucho más complejo que en una startup:
- El mapa de poder en una administración: técnicos, jurídicos, directivos, cargos políticos, sindicatos
- Cómo gestionar las distintas velocidades: el técnico quiere ágil, el jurídico quiere certeza, el político quiere visibilidad
- El comité de dirección de un proyecto público: quién debe estar y cómo funcionan las reuniones
- Cómo comunicar el roadmap a stakeholders con distintos niveles de comprensión técnica
- Gestión de la resistencia al cambio en organizaciones con funcionarios con mucha antigüedad

**3. Presupuesto público y planificación de producto**
El presupuesto en la administración funciona de forma radicalmente diferente:
- El ciclo presupuestario anual y cómo afecta a la planificación del producto
- Modificaciones presupuestarias: cuándo son posibles y qué implican
- Fondos europeos (FEDER, FSE, MRR) como fuente de financiación para proyectos de digitalización
- Cómo presentar el business case de un proyecto digital ante los órganos de aprobación
- La plurianualidad: cómo estructurar proyectos que requieren más de un año fiscal

**4. Metodologías ágiles en el contexto de la administración**
El agilismo choca frecuentemente con los procesos administrativos:
- Cómo adaptar Scrum o Kanban a un entorno donde los cambios de alcance requieren modificaciones contractuales
- El sprint review con stakeholders institucionales: cómo hacerlo funcionar
- Cómo gestionar el backlog cuando hay requisitos legales inamovibles y requisitos funcionales flexibles
- Las historias de usuario para servicios públicos: cómo incluir a los ciudadanos que no pueden ser usuarios frecuentes del producto
- Agile procurement: los nuevos modelos de contratación pública que permiten trabajar de forma más iterativa

**5. Diseño e investigación con ciudadanos**
El usuario de los servicios públicos tiene características únicas:
- La diversidad radical del usuario: de los 18 a los 90 años, con distintas habilidades digitales, idiomas y situaciones vitales
- Cómo hacer research con ciudadanos cuando hay restricciones de acceso a los datos por protección de datos
- El rol del funcionario como proxy del ciudadano: sus limitaciones y cómo complementarlo
- Cómo priorizar funcionalidades cuando el usuario no puede quejarse cambiando de proveedor

**6. Lanzamiento y evolución de servicios públicos**
El go-to-market en el sector público tiene sus propias reglas:
- Cómo gestionar el lanzamiento de un servicio público con alta visibilidad política
- Los planes de contingencia para fallas técnicas en servicios críticos
- Cómo medir el éxito de un servicio público más allá del uso: equidad, accesibilidad, satisfacción
- Cómo construir una hoja de ruta de mejora continua en un entorno con ciclos presupuestarios rígidos
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar productos y servicios digitales en organismos públicos con ágil y centrado en el ciudadano',
                'vote_score'       => 26,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de personas en la administración pública',
                'description'      => 'Las particularidades del RRHH en el sector público: cuerpos funcionariales, convenios, motivación sin incentivos económicos y la transformación cultural pendiente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en recursos humanos con larga experiencia en la gestión de personas en la administración pública española. Conoces el EBEP (Estatuto Básico del Empleado Público), la negociación colectiva en el sector público, los sistemas de acceso y carrera administrativa, y los retos de liderar equipos en organizaciones con alta rigidez estructural.

Necesito una guía completa sobre RRHH en la administración pública. Cubre los siguientes bloques:

**1. El marco jurídico del empleo público**
Explica las bases del empleo público en España que todo responsable de personas debe conocer:
- El EBEP y su desarrollo: qué regula y qué deja a cada administración
- Las clases de empleados públicos: funcionarios de carrera, interinos, laborales fijos, laborales temporales, personal eventual y directivo público
- El sistema de acceso: oposiciones, concursos, concurso-oposición y libre designación — sus diferencias y en qué casos se usa cada uno
- La carrera administrativa: progresión horizontal (complemento de carrera) vs. vertical (jefe de servicio, subdirector)
- Los derechos y deberes del empleado público que el gestor de personas debe conocer para no incurrir en ilegalidades

**2. Motivación sin incentivos económicos**
La nómina del funcionario apenas varía con el rendimiento. Explica cómo motivar de todas formas:
- Las teorías de motivación que más aplican al contexto público: Herzberg, Deci y Ryan (autodeterminación), Hackman y Oldham (diseño del trabajo)
- Qué sí puede hacer el directivo público para aumentar la motivación: autonomía, propósito, desarrollo, reconocimiento social
- Las evaluaciones del desempeño en la administración: por qué casi nunca funcionan y qué haría que funcionaran
- La motivación por misión (mission-driven motivation): cómo conectar el trabajo del funcionario con el impacto en el ciudadano
- Los peligros del presentismo en el sector público y cómo combatirlo

**3. La negociación colectiva en el sector público**
Los sindicatos tienen un peso enorme en la administración pública:
- Las Mesas de Negociación: General, Sectoriales y de Función Pública — qué se negocia en cada una
- Los derechos sindicales de los empleados públicos que el gestor debe respetar
- Cómo gestionar la relación con los representantes sindicales de forma constructiva
- Las materias que son de obligatoria negociación y las que son de mera consulta
- Cómo implementar cambios organizativos respetando el proceso de negociación

**4. Selección y provisión de puestos**
Los procesos de selección y provisión en la administración tienen sus propias reglas:
- Cómo diseñar una OPE (Oferta de Empleo Público) realista y justificada
- Los tribunales y órganos de selección: cómo garantizar la objetividad e imparcialidad
- La provisión de puestos: concurso de méritos y libre designación — criterios legales y gestión práctica
- La comisión de servicios: cuándo es la herramienta adecuada y sus límites
- El personal interino: cómo gestionarlo y los riesgos del uso abusivo de la interinidad

**5. Transformación cultural en la administración**
El mayor reto del RRHH público es el cambio cultural:
- Cómo identificar los frenos culturales más comunes en una organización pública (resistencia al cambio, silos, "esto siempre se ha hecho así")
- Metodologías de transformación cultural adaptadas al sector público: liderazgo intermedio como palanca del cambio
- Formación y desarrollo en la administración: el INAP, las escuelas de formación autonómicas y cómo usarlos
- Cómo gestionar a los empleados de alto rendimiento que se frustran ante la rigidez del sistema
- Los experimentos de transformación cultural que han funcionado en administraciones avanzadas (GovTech, Laboratorios de innovación pública)

**6. El directivo público profesional**
La profesionalización de la función directiva pública es una asignatura pendiente:
- Qué es el directivo público y por qué el modelo español está en debate
- Las competencias específicas del liderazgo público: gestión política, accountability, orientación al ciudadano
- Cómo construir un equipo de alto rendimiento dentro de las restricciones del sistema público
- Programas de desarrollo directivo en la administración española y europea
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar personas y liderar equipos en la administración pública con eficacia',
                'vote_score'       => 24,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Finanzas públicas y presupuestación',
                'description'      => 'Entiende cómo funcionan los presupuestos públicos: programas, partidas, modificaciones y los mecanismos que determinan dónde va el dinero del Estado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en finanzas públicas y gestión presupuestaria con experiencia en la administración del Estado, autonómica y local. Conoces la Ley General Presupuestaria, la LOEPSF (Ley Orgánica de Estabilidad Presupuestaria), el funcionamiento del ciclo presupuestario y las herramientas de gestión financiera pública.

Necesito una guía completa sobre finanzas públicas y presupuestación. Desarrolla los siguientes bloques:

**1. La arquitectura del presupuesto público**
Explica cómo se estructura el presupuesto público en España:
- Los Presupuestos Generales del Estado: secciones, programas, artículos, conceptos y subconceptos
- La clasificación orgánica, funcional y económica del gasto: cómo se articulan
- Los estados de ingresos y gastos: cómo leerlos y qué información contienen
- El presupuesto de las CCAA y las EELL: similitudes y diferencias con el estatal
- Los organismos autónomos, las agencias y las empresas públicas: cómo se integran en el presupuesto

**2. El ciclo presupuestario**
El presupuesto no es un documento estático sino un proceso continuo:
- La elaboración: los escenarios presupuestarios, los techos de gasto y la negociación interna
- La aprobación parlamentaria: el proceso, los plazos y qué pasa cuando no se aprueban los presupuestos
- La ejecución presupuestaria: fases del gasto (autorización, compromiso, reconocimiento de obligación, pago)
- El control: el papel de la Intervención General, el Tribunal de Cuentas y las auditorías externas
- La liquidación y el cierre: cómo se mide si el presupuesto se ha ejecutado bien

**3. Modificaciones presupuestarias**
El presupuesto aprobado no es inamovible:
- Los tipos de modificaciones: créditos extraordinarios, suplementos de crédito, ampliaciones, transferencias, generaciones e incorporaciones
- Qué autoriza el Consejo de Ministros, qué el Ministerio de Hacienda y qué cada organismo
- Cómo gestionar el fin de ejercicio: los créditos que pueden incorporarse y los que se pierden
- La prorroga presupuestaria: qué se puede gastar y qué no cuando hay prórroga

**4. Estabilidad presupuestaria y reglas fiscales**
El gasto público tiene límites legales y europeos:
- La LOEPSF y los principios de estabilidad presupuestaria, sostenibilidad financiera y regla de gasto
- El Pacto de Estabilidad y Crecimiento europeo y el nuevo marco de gobernanza fiscal (GPF)
- El techo de déficit y de deuda: cómo se asigna entre niveles de la administración
- El periodo de consolidación fiscal: qué implica para la gestión presupuestaria en periodos de ajuste
- Las entidades locales: el plan de ajuste y las medidas de equilibrio presupuestario

**5. Los fondos europeos como instrumento presupuestario**
Los fondos europeos son una pieza clave del presupuesto público:
- El Marco Financiero Plurianual (MFP): cómo funciona y los fondos disponibles para España
- El MRR (Mecanismo de Recuperación y Resiliencia): qué es, cómo se gestiona y las obligaciones de justificación
- Los fondos estructurales (FEDER, FSE+, Cohesión): cómo se programan y gestionan en España
- El principio de adicionalidad: qué implica para la programación de fondos europeos
- La gestión de proyectos cofinanciados: las exigencias de control, auditoría y comunicación

**6. Presupuestación para resultados**
La modernización de la gestión presupuestaria:
- Qué es la presupuestación orientada a resultados y cómo se aplica en España
- Los indicadores de seguimiento del presupuesto por programas
- Cómo leer un informe de seguimiento presupuestario para evaluar el desempeño de un organismo
- Las buenas prácticas internacionales en gestión financiera pública (OCDE, FMI)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Entender y gestionar el ciclo presupuestario público en administraciones españolas',
                'vote_score'       => 22,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratación pública',
                'description'      => 'La LCSP, los principios de la contratación pública y los procedimientos que cualquier empresa que venda a la administración debe conocer de arriba abajo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en contratación pública con amplia experiencia tanto asesorando a órganos de contratación de la administración como a empresas que se presentan a licitaciones. Conoces la LCSP (Ley 9/2017 de Contratos del Sector Público), la jurisprudencia del TACRC y los órganos de resolución de recursos contractuales autonómicos.

Necesito una guía jurídica completa sobre contratación pública. Desarrolla los siguientes bloques:

**1. Los principios de la contratación pública**
Explica los principios que rigen toda la contratación pública y por qué son importantes:
- Publicidad y transparencia: qué obliga a publicar la administración y dónde
- Concurrencia competitiva: cómo garantizarla y qué la vulnera
- No discriminación e igualdad de trato: implicaciones prácticas para los pliegos y la evaluación
- Proporcionalidad: cómo deben calibrarse las solvencias y los criterios de adjudicación
- Integridad y lucha contra la corrupción: las medidas de transparencia y los conflictos de interés

**2. Los contratos del sector público: tipos y umbrales**
Clasifica los tipos de contratos y sus umbrales relevantes:
- Contratos típicos: obras, concesiones de obra, servicios, suministros, concesiones de servicios
- Umbrales de publicación comunitaria (DOUE) actualizados y qué obliga a cada uno
- El contrato menor: requisitos, límites (15.000/40.000 €) y el fraccionamiento prohibido
- Los negocios jurídicos excluidos: convenios, encargos a medios propios y acuerdos internacionales
- La distinción entre sector público obligado a la LCSP y entidades que solo están sujetas a los principios

**3. Los procedimientos de contratación**
Explica cada procedimiento con sus condiciones y plazos:
- Procedimiento abierto: ordinario y simplificado (y simplificado abreviado)
- Procedimiento restringido: cuándo se usa y cómo funciona la fase de precualificación
- Procedimiento negociado sin publicidad: los supuestos tasados que lo permiten y sus riesgos
- Diálogo competitivo: cuándo procede y cómo se desarrolla
- Asociación para la innovación: el procedimiento diseñado para compra de innovación
- Licitación con negociación: las diferencias con el negociado y cuándo es adecuado

**4. Los pliegos: PCAP y PPT**
Los pliegos son el contrato antes del contrato. Explica sus elementos clave:
- El Pliego de Cláusulas Administrativas Particulares (PCAP): contenido obligatorio y optativo
- El Pliego de Prescripciones Técnicas (PPT): cómo deben redactarse para no limitar la concurrencia
- Las solvencias técnicas y económicas: cómo fijarlas proporcionalmente y los medios de acreditación
- Los criterios de adjudicación: objetivos (automáticos) y subjetivos (juicio de valor) — cómo equilibrarlos
- Las condiciones especiales de ejecución: las cláusulas sociales, medioambientales y de innovación permitidas
- La modificación de contratos: los supuestos legales y los límites del artículo 205

**5. El recurso especial en materia de contratación**
El sistema de impugnación es una herramienta poderosa para los licitadores:
- Qué actos son recurribles y cuáles no ante el TACRC y los órganos autonómicos
- Los plazos para recurrir: los errores más frecuentes que hacen inadmisible el recurso
- Cómo redactar un recurso efectivo: estructura, motivos más frecuentes y jurisprudencia de referencia
- El efecto suspensivo automático y cuándo levanta la administración la suspensión
- Los recursos ante la jurisdicción contencioso-administrativa: cuándo vale la pena ir más allá del TACRC

**6. La ejecución del contrato y sus incidencias**
El contrato adjudicado es solo el comienzo:
- El responsable del contrato: sus funciones y la importancia de identificarlo bien
- Las modificaciones durante la ejecución: las modificaciones previstas y las no previstas
- Las penalidades contractuales: cómo aplicarlas y cómo impugnarlas
- La resolución del contrato: causas imputables al contratista y a la administración
- La liquidación del contrato y los plazos de pago: la morosidad de la administración y sus remedios
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Dominar la LCSP para licitar, ejecutar contratos y resolver conflictos con la administración',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte a organismos públicos',
                'description'      => 'Gestiona la relación con clientes del sector público: procesos de escalado, comunicación formal y las particularidades de los SLAs con la administración.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en customer service y gestión de cuentas con experiencia en contratos de soporte y mantenimiento para organismos de la administración pública. Conoces las particularidades de la comunicación institucional, los SLAs en contratos públicos, los sistemas de escalado y las dinámicas de la relación proveedor-administración.

Necesito una guía completa para gestionar el soporte a clientes del sector público. Desarrolla los siguientes bloques:

**1. Las diferencias del cliente público**
Explica por qué el cliente público es diferente y qué implica para el soporte:
- El interlocutor técnico vs. el responsable administrativo: roles distintos y cómo gestionarlos
- La comunicación formal obligatoria: registros de entrada, oficios y la trazabilidad que exige la administración
- Los tiempos de respuesta institucionales: por qué los procesos de aprobación son más lentos y cómo gestionarlo con el equipo
- El cambio frecuente de interlocutores: concursos de traslados, cambios de gobierno y cómo mantener la continuidad del servicio
- La transparencia de los contratos públicos: que cualquier ciudadano puede pedir información sobre el contrato que estás ejecutando

**2. Los SLAs en contratos públicos**
Los acuerdos de nivel de servicio en contratos públicos tienen características propias:
- Cómo están definidos los SLAs típicos en los pliegos técnicos de servicios de soporte
- Las penalidades por incumplimiento de SLA: cómo funcionan, cómo se calculan y cómo se aplican
- Cómo gestionar el riesgo de penalidades: monitorización, alertas y protocolos de respuesta
- Cómo renegociar los SLAs cuando las condiciones del contrato han cambiado sustancialmente
- Los informes de seguimiento de SLA: qué debe contener el informe mensual para que el responsable del contrato esté satisfecho

**3. Gestión de incidencias y escalado en la administración**
Los procesos de escalado con clientes públicos tienen sus propias particularidades:
- Cómo clasificar las incidencias según su impacto en el servicio público (P1: servicio caído, P2: degradado, P3: individual)
- El protocolo de escalado: cuándo escalar, a quién y con qué información
- La comunicación de crisis con un organismo público: el formato del comunicado oficial de incidencia
- Los comités de seguimiento: cómo prepararlos y cómo conducirlos cuando hay problemas
- Cómo documentar los incidentes para la liquidación del contrato y los posibles recursos

**4. Comunicación formal con la administración**
La comunicación con la administración requiere formatos y registros específicos:
- El registro de entrada: qué documentos deben registrarse y por qué es importante para el proveedor
- La estructura de un oficio o comunicación formal: cabecera, cuerpo, firma y referencias
- Las actas de reunión en contratos públicos: qué deben contener para que sean válidas como evidencia
- Cómo gestionar los acuerdos verbales en un entorno donde "lo que no está escrito no existe"
- La gestión documental del contrato: qué conservar, durante cuánto tiempo y por qué

**5. Renovación y expansión de contratos públicos**
La fidelización en la administración pública no sigue las reglas del sector privado:
- Por qué no puedes renovar un contrato público indefinidamente (principio de concurrencia)
- Cómo posicionarse para ganar el nuevo concurso siendo el titular actual
- La transmisión del conocimiento al nuevo adjudicatario: obligaciones legales y estrategia
- Cómo ampliar el alcance del contrato dentro de los límites de la LCSP (modificaciones previstas)
- El valor de las referencias públicas para ganar nuevos contratos: cómo documentarlas y usarlas

**6. Calidad de servicio y mejora continua**
Cómo mantener y mejorar la calidad del servicio a lo largo de la vida del contrato:
- Las encuestas de satisfacción en contratos públicos: cómo hacerlas y qué hacer con los resultados
- Los informes periódicos al responsable del contrato: estructura, frecuencia y cómo usarlos para reforzar la relación
- Cómo gestionar las quejas formales de la administración sin que deriven en expediente sancionador
- La auditoría interna del contrato: cómo usarla para detectar riesgos antes de que los detecte la administración
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestionar contratos de soporte con administraciones públicas con SLAs, escalados y comunicación formal',
                'vote_score'       => 25,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Trabajar con el sector público como freelance',
                'description'      => 'Accede a contratos públicos siendo autónomo: los límites del contrato menor, las plataformas de contratación y los tipos de proyectos accesibles para freelances.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance con experiencia trabajando directamente con organismos de la administración pública y también a través de empresas intermediarias. Conoces los mecanismos de acceso al mercado público siendo autónomo, las limitaciones legales, las plataformas y los tipos de proyectos donde hay hueco real para el trabajo independiente.

Necesito una guía completa y honesta para trabajar con el sector público como autónomo. Desarrolla los siguientes bloques:

**1. La realidad del freelance en el mercado público**
Sé directo sobre las oportunidades y los límites:
- Qué sí puede hacer un freelance autónomo directamente con la administración: el contrato menor es la vía principal
- Qué es más difícil sin estructura empresarial: los procedimientos abiertos exigen solvencia económica que los autónomos raramente acreditan
- Los modelos de acceso indirecto: trabajar como subcontratista de una empresa adjudicataria o a través de cooperativas y UTEs
- Qué sectores y tipos de administración son más accesibles para los independientes: municipios pequeños, entidades locales, organismos culturales

**2. El contrato menor: la puerta de entrada**
El contrato menor es el camino más realista para empezar:
- Los límites actuales: 15.000 € sin IVA para servicios y 40.000 € para suministros y obras
- Qué compra la administración por contrato menor: consultoría, diseño, comunicación, formación, traducción, desarrollo web
- Cómo encontrar contratos menores: las plataformas de transparencia donde los publican y cómo monitorizar
- Las limitaciones del contrato menor para el mismo proveedor y el mismo órgano: el fraccionamiento prohibido
- Cómo presentar un presupuesto para un contrato menor: el formato, el IVA aplicable y la facturación posterior

**3. Las plataformas y los canales de acceso**
Dónde buscar oportunidades reales como freelance:
- La Plataforma de Contratación del Sector Público (contrataciondelestado.es): cómo filtrar por importe para encontrar contratos menores
- Las plataformas autonómicas y locales: las más activas por comunidad autónoma
- Los portales de transparencia donde la administración publica los contratos menores adjudicados: cómo usarlos para identificar compradores activos
- Las bolsas de proveedores de algunas administraciones: cómo inscribirse y qué ofrecen
- El boca a boca y la red: cómo los funcionarios recomiendan proveedores dentro de la administración

**4. Trabajar como subcontratista**
La vía indirecta puede ser más accesible y más rentable:
- Cómo identificar empresas que ganan contratos públicos en tu ámbito y podrían subcontratarte
- Qué buscan los adjudicatarios en sus subcontratistas: perfil, disponibilidad, precio
- El contrato de subcontratación: qué debe incluir para protegerte (plazos de pago, propiedad intelectual, confidencialidad)
- Las limitaciones legales de la subcontratación en contratos públicos: el porcentaje máximo que puede subcontratar el adjudicatario
- Cómo posicionarte como recurso técnico habitual de integradores y consultoras del sector público

**5. Aspectos fiscales y administrativos del freelance que trabaja con la administración**
La administración como cliente tiene sus particularidades también en la facturación:
- La factura electrónica obligatoria (FACe, FACeB2B): cómo emitirla y los formatos aceptados
- Los plazos de pago de la administración: los 30 días legales y qué pasa cuando no se cumplen
- La retención del IRPF en facturas a la administración: cuándo aplica y a qué porcentaje
- Cómo gestionar la tesorería cuando la administración paga a 60-90 días en la práctica
- La documentación que debes conservar: facturas, contratos, correos y actas para posibles auditorías

**6. Construir una cartera de clientes públicos**
La estrategia de largo plazo para el freelance con el sector público:
- Cómo convertir un pequeño encargo en una relación duradera sin infringir las normas de contratación
- La reputación en la administración: cómo funciona el boca a boca entre técnicos de distintos organismos
- Los perfiles de LinkedIn más efectivos para ser encontrado por técnicos de la administración que buscan proveedores
- Los eventos, jornadas y grupos profesionales donde se relacionan los gestores públicos que contratan servicios externos
- Cómo documentar los proyectos públicos en el portfolio: qué puedes publicar y qué puede estar bajo confidencialidad
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Acceder al mercado público como autónomo con contratos menores y subcontratación',
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
