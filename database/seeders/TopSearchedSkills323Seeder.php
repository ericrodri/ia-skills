<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills323Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 - Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Co-marketing y partnerships de marca para ampliar el alcance',
                'description'      => 'Diseña y ejecuta alianzas de co-marketing que multipliquen el alcance de tu marca sin incrementar proporcionalmente el presupuesto. Aprende a identificar partners complementarios, estructurar acuerdos equilibrados y medir el impacto compartido de las campañas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing de partnerships con más de 12 años de experiencia diseñando y ejecutando alianzas de co-marketing para empresas de consumo, B2B y startups en distintas etapas de crecimiento. Has gestionado desde partnerships informales de intercambio de audiencias hasta acuerdos formales con grandes marcas que incluían presupuestos compartidos y KPIs conjuntos.

Necesito tu ayuda para desarrollar una estrategia de partnerships de marketing para mi negocio.

**Marco completo de co-marketing y alianzas de marca:**

**1. Identificación y calificación de partners potenciales**
- ¿Cómo identificar marcas que son complementarias pero no competidoras directas para mi negocio?
- Proporciona un framework de calificación de partners que evalúe: solapamiento de audiencia, alineación de valores de marca, salud del negocio del partner, capacidad de ejecución y potencial de valor mutuo.
- ¿Cómo priorizar una lista larga de partners potenciales para enfocar los recursos de prospección?
- ¿Dónde buscar partners potenciales: eventos, comunidades, bases de datos, redes profesionales?
- Diseña una matriz de evaluación de partners con los criterios más importantes para mi negocio.

**2. Estructuración de la propuesta de valor mutua**
- ¿Cómo construir una propuesta de co-marketing que sea genuinamente atractiva para el partner, no solo para mí?
- ¿Qué tipos de acuerdos de co-marketing existen (intercambio de audiencias, co-creación de contenido, eventos conjuntos, ofertas combinadas, co-branding de producto) y cuándo es más adecuado cada uno?
- ¿Cómo cuantificar el valor que puedo aportar a un partner para justificar la alianza?
- Proporciona una plantilla de deck de propuesta de partnership que pueda personalizar para diferentes tipos de partners.

**3. Primer contacto y negociación del acuerdo**
- ¿Cómo aproximarme a un partner potencial cuando no tengo contacto previo con su equipo?
- Proporciona scripts de outreach para diferentes canales: email frío, LinkedIn, presentación en evento, referido de un contacto común.
- ¿Cómo estructurar la primera reunión de exploración de partnership para generar interés sin sobrecomprometerse?
- ¿Qué términos deben quedar claros en un acuerdo de co-marketing: responsabilidades de cada parte, presupuesto, calendario, propiedad de activos creados, uso de logos y marcas, métricas de éxito, cláusulas de salida?
- ¿Cuándo necesito un contrato formal y cuándo es suficiente un acuerdo informal por email?

**4. Ejecución de campañas de co-marketing**
- Diseña un plan de proyecto tipo para una campaña de co-marketing de 3 meses entre dos marcas.
- ¿Cómo gestionar la coordinación operativa con el equipo del partner sin que se convierta en una fuente de fricción?
- ¿Cómo mantener la coherencia de marca de cada parte mientras se crea una comunicación conjunta?
- ¿Cómo gestionar los desacuerdos creativos o estratégicos durante la ejecución sin dañar la relación?

**5. Medición del impacto y ROI compartido**
- ¿Qué métricas debo usar para medir el éxito de una campaña de co-marketing y cómo atribuir los resultados a la alianza?
- ¿Cómo diseñar un dashboard compartido con el partner para hacer seguimiento conjunto del rendimiento?
- ¿Cómo evaluar si un partnership vale la pena renovar o escalar al finalizar la primera campaña?

**6. Escalado y gestión del ecosistema de partners**
- ¿Cómo pasar de gestionar 1-2 partnerships a construir un ecosistema de 5-10 alianzas activas simultáneamente?
- ¿Qué herramientas y procesos necesito para escalar la gestión de partnerships?

**Formato de respuesta:**
Organiza tu respuesta en las 6 secciones con recomendaciones concretas, plantillas y ejemplos. Incluye al menos una plantilla de email de outreach, una plantilla de propuesta y un framework de evaluación de partners. Cierra con un plan de 90 días para lanzar mi primer partnership de co-marketing.

Antes de responder, pregúntame sobre mi negocio, mi audiencia objetivo y si ya tengo alguna idea de con qué tipo de marcas me gustaría aliarme.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar y ejecutar alianzas de co-marketing para ampliar el alcance de la marca',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],

            // 2 - Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Alianzas tecnológicas e integraciones para ampliar el ecosistema de un producto',
                'description'      => 'Aprende a diseñar y gestionar alianzas tecnológicas que amplíen las capacidades de tu producto a través de integraciones, APIs compartidas y ecosistemas de desarrollo. Desde la selección de partners técnicos hasta la gestión del programa de partners.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en estrategia de plataforma y alianzas tecnológicas con experiencia en empresas de software B2B. Has diseñado programas de partners tecnológicos, lanzado marketplaces de integraciones y construido ecosistemas de desarrolladores que han multiplicado el valor del producto central.

Necesito desarrollar una estrategia de alianzas tecnológicas para mi producto de software.

**Marco completo de alianzas e integraciones tecnológicas:**

**1. Estrategia de ecosistema de producto**
- ¿Cómo decidir qué integraciones y alianzas tecnológicas son estratégicamente prioritarias para mi producto?
- Proporciona un framework de análisis del ecosistema tecnológico: ¿con qué herramientas usa mi cliente el producto? ¿Cuáles son los flujos de trabajo que mi integración podría automatizar o mejorar?
- ¿Cómo priorizar el backlog de integraciones posibles según el impacto en la retención, la adquisición y la expansión de ingresos?
- ¿Cuándo tiene sentido construir una integración internamente versus establecer una alianza con el partner tecnológico para co-desarrollarla?
- ¿Cómo las integraciones contribuyen al efecto red y a las barreras de salida del producto?

**2. Identificación y clasificación de partners tecnológicos**
- ¿Cómo identificar los partners tecnológicos más valiosos para mi stack de producto actual y futuro?
- Proporciona un framework de clasificación de partners tecnológicos: integraciones de datos, integraciones de flujo de trabajo, extensiones de funcionalidad, partners de distribución.
- ¿Cómo evaluar la calidad técnica y la fiabilidad de un partner: documentación de API, SLA, soporte para desarrolladores, estabilidad del negocio?

**3. Desarrollo y mantenimiento de integraciones**
- ¿Cuáles son las mejores prácticas para diseñar una arquitectura de integración escalable (webhooks, OAuth, APIs REST, SDKs)?
- ¿Cómo establecer un estándar de calidad para las integraciones: manejo de errores, retry logic, idempotencia, monitorización?
- Proporciona una checklist de lanzamiento de integración que cubra los aspectos técnicos, de documentación, de soporte y de go-to-market.
- ¿Cómo gestionar el breaking change de la API de un partner sin impactar negativamente a los usuarios que dependen de la integración?

**4. Programa de partners tecnológicos**
- ¿Cómo diseñar un programa de partners tecnológicos que incentive a otras empresas de software a integrarse con mi plataforma?
- ¿Qué beneficios debo ofrecer a mis partners tecnológicos: acceso a API sandbox, soporte dedicado, co-marketing, listing en marketplace, revenue sharing?
- ¿Cómo estructurar diferentes niveles de partnership (tecnológico básico, estratégico, premium) y qué criterios definen cada nivel?
- Diseña una documentación de onboarding para nuevos partners tecnológicos que acelere el tiempo hasta la primera integración.

**5. Marketplace de integraciones y distribución**
- ¿Cómo lanzar y gestionar un marketplace de integraciones dentro de mi producto?
- ¿Cuáles son los elementos esenciales de una página de integración en el marketplace: descripción, casos de uso, configuración, capturas de pantalla, valoraciones?
- ¿Cómo garantizar la calidad de las integraciones de terceros sin asumir toda la carga de desarrollo y mantenimiento?

**6. Métricas y gestión del programa**
- ¿Qué métricas debo usar para evaluar el éxito de mi programa de alianzas tecnológicas: número de integraciones activas, clientes que usan integraciones, influencia en retención, nuevas cuentas atribuidas a partners?
- ¿Cómo organizar el equipo interno para gestionar un ecosistema de partners tecnológicos en crecimiento?

**Formato de respuesta:**
Estructura la respuesta en las 6 secciones con recomendaciones concretas, frameworks y plantillas. Incluye ejemplos de empresas de software con ecosistemas de integraciones exitosos. Cierra con una hoja de ruta de 6 meses para construir las primeras alianzas tecnológicas estratégicas.

Antes de responder, pregúntame sobre mi producto, el stack tecnológico de mis clientes y si ya tengo integraciones existentes o si estoy empezando desde cero.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar un ecosistema de alianzas tecnológicas e integraciones para ampliar el valor del producto',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],

            // 3 - Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Colaboraciones de diseño y partnerships creativos para estudios y freelancers',
                'description'      => 'Aprende a estructurar colaboraciones estratégicas con otros estudios, freelancers y marcas para acceder a proyectos más grandes, ampliar tu oferta de servicios y crecer profesionalmente de forma colaborativa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de desarrollo de negocio especializado en la industria creativa y del diseño. Has asesorado a estudios de diseño, agencias creativas y freelancers a construir colaboraciones estratégicas que han multiplicado su capacidad, su reputación y sus ingresos.

Necesito desarrollar una estrategia de partnerships y colaboraciones para hacer crecer mi práctica de diseño.

**Marco completo de alianzas y colaboraciones para profesionales del diseño:**

**1. Tipos de colaboración y cuándo usar cada una**
- ¿Cuáles son los modelos de colaboración más comunes en la industria del diseño y cuándo tiene sentido cada uno?
  - Subcontratación (tú como proveedor o receptor)
  - Consorcio de estudio para ganar proyectos grandes
  - Partnership de referidos mutuos
  - Co-branding o proyectos conjuntos
  - Alianza con agencias de desarrollo o marketing
- ¿Cómo evaluar qué modelo de colaboración es el más adecuado para mi situación actual?

**2. Identificación de partners complementarios**
- ¿Cómo identificar a los colaboradores más valiosos para mi perfil de diseño: estudios de mayor capacidad, freelancers con habilidades complementarias (copywriting, desarrollo, ilustración, fotografía), agencias de marketing o publicidad?
- Proporciona un framework de calificación de colaboradores potenciales que evalúe: calidad del trabajo, ética profesional, comunicación, puntualidad, compatibilidad de estilo.
- ¿Cómo encontrar colaboradores de calidad: comunidades online, eventos del sector, redes de exalumnos, recomendaciones de clientes?

**3. Primeras colaboraciones: de la conversación al proyecto**
- ¿Cómo abordar a un colaborador potencial de manera profesional y genuina sin sonar desesperado o transaccional?
- Proporciona un script de primer contacto para proponer una colaboración creativa.
- ¿Qué términos deben quedar claros antes de empezar un proyecto colaborativo: responsabilidades, créditos, facturación al cliente, reparto de honorarios, manejo de revisiones, propiedad del trabajo?
- ¿Cuándo necesito un contrato formal de colaboración y qué debe incluir?
- Diseña una plantilla básica de acuerdo de colaboración para proyectos de diseño.

**4. Gestión de proyectos colaborativos**
- ¿Cómo estructurar el flujo de trabajo en un proyecto donde participan varios diseñadores o disciplinas?
- ¿Qué herramientas y procesos facilitan la colaboración asíncrona entre creativos: Figma, Notion, herramientas de feedback de diseño?
- ¿Cómo asegurar la coherencia de estilo y calidad cuando el trabajo está distribuido entre varios colaboradores?
- ¿Cómo gestionar desacuerdos creativos o de dirección durante la ejecución de un proyecto colaborativo?

**5. Alianzas con agencias y empresas de tecnología**
- ¿Cómo posicionarme como partner de diseño estratégico para agencias de desarrollo web o marketing que necesitan capacidad de diseño?
- Proporciona una estrategia para convertirte en el diseñador o estudio de referencia para una agencia complementaria.
- ¿Cómo estructurar un acuerdo de referidos con una agencia: tarifa de referido, presentación al cliente, gestión de la relación?

**6. Construcción de reputación colaborativa**
- ¿Cómo presentar proyectos colaborativos en el portfolio sin generar confusión sobre qué aportó cada parte?
- ¿Cómo construir una red de colaboradores de confianza a largo plazo que se convierta en un activo estratégico?
- ¿Cómo usar colaboraciones para acceder a proyectos de mayor presupuesto y visibilidad que serían inalcanzables individualmente?

**Formato de respuesta:**
Organiza tu respuesta en las 6 secciones con recomendaciones concretas, scripts de conversación y plantillas. Incluye ejemplos de estructuras de colaboración exitosas en el sector del diseño. Cierra con un plan de 60 días para establecer las primeras alianzas estratégicas.

Comienza preguntándome sobre mi especialidad de diseño, mi tamaño actual (freelancer o estudio pequeño) y qué tipos de proyectos quiero acceder a través de las colaboraciones.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Estructurar colaboraciones y alianzas estratégicas para crecer como diseñador o estudio creativo',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],

            // 4 - Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia de ventas por canal: diseño y gestión de una red de partners comerciales',
                'description'      => 'Desarrolla una estrategia completa de ventas a través de canales indirectos: distribuidores, revendedores, agentes y aliados comerciales. Aprende a reclutar, habilitar y motivar a los partners para que vendan activamente tu solución.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en estrategia de canal y gestión de partners comerciales con experiencia en empresas de tecnología, software y servicios B2B. Has diseñado programas de canal desde cero y has gestionado redes de distribuidores y revendedores que han multiplicado los ingresos sin aumentar proporcionalmente el equipo de ventas directo.

Necesito desarrollar o mejorar mi estrategia de ventas a través de canales y partners comerciales.

**Marco completo de estrategia de canal:**

**1. Decisión estratégica: directo vs. canal vs. híbrido**
- ¿Cómo decidir qué porción de las ventas debe atenderse con fuerza directa y qué porción a través de canales indirectos?
- ¿Para qué tipos de productos, mercados geográficos o segmentos de cliente tiene más sentido el modelo de canal?
- ¿Cuáles son los riesgos de depender demasiado del canal versus tener un modelo completamente directo?
- ¿Cómo calcular el CAC potencial a través de canal comparado con ventas directas?

**2. Diseño del programa de canal**
- ¿Cuáles son los elementos esenciales de un programa de canal bien diseñado: niveles de partnership, requisitos de certificación, márgenes, protección de territorio, registro de oportunidades, fondos de marketing cooperativo?
- ¿Cómo diseñar una estructura de márgenes y comisiones que incentive a los partners a priorizar mi solución sobre las alternativas?
- Proporciona un modelo de programa de canal con 3 niveles (Autorizado, Preferido, Estratégico) con los beneficios y requisitos de cada nivel.
- ¿Cómo proteger al canal directo del conflicto con los partners de canal?

**3. Reclutamiento y selección de partners**
- ¿Cómo identificar y reclutar al tipo de partner de canal adecuado para mi solución: ¿quién tiene acceso a mis clientes objetivo?
- Proporciona un perfil de partner ideal (Ideal Partner Profile) con los criterios de calificación más importantes.
- ¿Cómo estructurar el proceso de reclutamiento de partners: prospección, evaluación, negociación del acuerdo, incorporación?
- ¿Cuándo tiene sentido ser selectivo con el canal (menos partners, más comprometidos) versus maximizar el número de partners?

**4. Habilitación y formación del canal**
- ¿Qué materiales de habilitación son esenciales para que un partner pueda vender eficazmente mi solución desde el primer día?
- Diseña un programa de certificación para partners de canal que cubra: conocimiento del producto, proceso de ventas, manejo de objeciones y soporte post-venta.
- ¿Cómo entrenar a los vendedores de los partners cuando tienen poco tiempo y mucho en qué enfocarse?
- ¿Qué plataforma o portal de partner necesito para centralizar la habilitación, el registro de oportunidades y las comunicaciones del programa?

**5. Motivación y gestión del rendimiento del canal**
- ¿Cómo mantener motivados y activos a los partners más allá de los primeros meses de la relación?
- Proporciona estrategias para aumentar el mindshare del partner: presencia en sus reuniones de equipo, incentivos adicionales, reconocimiento público.
- ¿Cómo gestionar a los partners que no están alcanzando los objetivos sin terminar la relación abruptamente?
- ¿Qué métricas debo monitorizar para gestionar la salud del canal: pipeline generado por partners, tasa de conversión, tiempo de ciclo de venta, margen promedio?

**6. Resolución de conflictos de canal**
- ¿Cómo gestionar los conflictos entre partners que compiten por el mismo cliente?
- ¿Cómo proteger las cuentas estratégicas del cliente directo sin alienar al canal?
- ¿Cuándo tiene sentido terminar la relación con un partner de canal y cómo hacerlo profesionalmente?

**Formato de respuesta:**
Estructura la respuesta en las 6 secciones con recomendaciones concretas, plantillas y frameworks. Incluye un modelo de acuerdo de partner, un plan de incorporación y un dashboard de métricas de canal. Cierra con una hoja de ruta de 6 meses para lanzar o reestructurar el programa de canal.

Antes de responder, pregúntame sobre mi producto o servicio, el mercado objetivo, si tengo experiencia previa con canales y cuál es el principal desafío que enfrento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar y gestionar una red de partners comerciales para escalar las ventas indirectamente',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],

            // 5 - Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Ecosistema de producto: estrategia de partnerships para ampliar el valor de la plataforma',
                'description'      => 'Diseña una estrategia de partnerships que convierta tu producto en una plataforma conectada dentro de un ecosistema más amplio. Aprende a identificar las alianzas que más valor añaden a los usuarios y a estructurar acuerdos que beneficien a todas las partes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en estrategia de plataforma y ecosistemas de producto con experiencia en empresas de software de alto crecimiento. Has liderado iniciativas de partnerships que han transformado productos aislados en plataformas con efectos de red, incrementando la retención y la expansión de ingresos.

Necesito diseñar una estrategia de partnerships que convierta mi producto en el centro de un ecosistema de valor para los usuarios.

**Marco de estrategia de ecosistema de producto:**

**1. Visión de plataforma y posicionamiento en el ecosistema**
- ¿Cuándo tiene sentido pensar en mi producto como plataforma versus como producto punto?
- ¿Cómo identificar el papel de mi producto en el ecosistema de herramientas de mis usuarios: ¿soy el sistema de registro, el hub de flujo de trabajo, la capa de análisis?
- Proporciona un framework para mapear el ecosistema de productos que rodea a mi cliente objetivo y encontrar las conexiones estratégicas más valiosas.
- ¿Cómo crear efectos de red a través de las integraciones y partnerships del ecosistema?

**2. Tipos de partnerships para el ecosistema de producto**
- ¿Cuál es la diferencia estratégica entre un partnership de integración técnica, un partnership de distribución, un partnership de datos y un partnership de go-to-market conjunto?
- ¿Cómo decidir qué tipo de partnership es el más adecuado para cada relación potencial?
- Proporciona ejemplos de ecosistemas de producto exitosos (SaaS B2B) y qué tipos de partnerships los impulsaron.
- ¿Cómo combinar múltiples tipos de partnerships con un mismo socio para maximizar el valor mutuo?

**3. Criterios de selección y priorización de partners**
- ¿Cómo diseñar un proceso de evaluación de partners potenciales que sea sistemático y evite el sesgo hacia marcas conocidas sobre partners más estratégicos?
- Proporciona una matrix de priorización de partnerships que considere: impacto en la retención de usuarios, potencial de nuevos usuarios, complejidad de integración y riesgo estratégico.
- ¿Cómo evaluar si un partner potencial tiene el alineamiento estratégico y la capacidad de ejecución necesarios?
- ¿Cuántos partnerships activos puede gestionar eficazmente un equipo de producto pequeño?

**4. Diseño del acuerdo de partnership de producto**
- ¿Qué elementos debe contener un acuerdo de partnership de producto: acceso a API, SLAs de integración, compromisos de co-marketing, governance, proceso de escalación de problemas técnicos?
- ¿Cómo estructurar acuerdos de revenue sharing o referral en partnerships de producto?
- ¿Cómo negociar condiciones favorables de acceso a APIs o datos cuando el partner tiene más poder de mercado?
- Diseña una plantilla de acuerdo de partnership de producto adaptable a diferentes tipos de alianza.

**5. Lanzamiento y activación del partnership**
- Diseña un plan de lanzamiento conjunto de una nueva integración o partnership que incluya: comunicación interna, documentación técnica, co-marketing y activación de la base de clientes.
- ¿Cómo medir el impacto real del partnership en métricas de producto: adoption rate de la integración, influencia en retención, nuevos usuarios provenientes del partner?
- ¿Cómo conseguir que los customer success managers de ambas empresas activen el partnership con sus cuentas?

**6. Governance y evolución del ecosistema**
- ¿Cómo estructurar el governance de un ecosistema de 10-20 partners activos?
- ¿Cómo gestionar la obsolescencia de partnerships que ya no son estratégicamente relevantes?
- ¿Cómo decidir cuándo construir internamente una funcionalidad que actualmente se cubre con un partnership?

**Formato de respuesta:**
Organiza la respuesta en las 6 secciones con recomendaciones concretas, frameworks y plantillas. Incluye una matriz de priorización de partners, un plan de lanzamiento tipo y un dashboard de métricas de ecosistema. Cierra con una hoja de ruta de 9 meses para construir el ecosistema de producto.

Empieza preguntándome sobre mi producto, el mercado que sirvo, el número de partnerships que ya tengo activos y cuál es mi mayor oportunidad de crecimiento a través del ecosistema.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar una estrategia de ecosystem partnerships para convertir el producto en una plataforma',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],

            // 6 - RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Alianzas con universidades y partners de talento para la atracción de candidatos',
                'description'      => 'Diseña una estrategia de partnerships con instituciones educativas, bootcamps, comunidades profesionales y plataformas de talento para garantizar un flujo constante de candidatos cualificados y adelantarte a las necesidades de talento futuras.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en talent acquisition y employer branding con especialización en partnerships estratégicos para la atracción de talento. Has diseñado programas de alianzas universitarias y con comunidades profesionales que han transformado el pipeline de candidatos de empresas tecnológicas y de otros sectores.

Necesito desarrollar una estrategia de partnerships de talento para garantizar el flujo de candidatos cualificados para nuestra organización.

**Marco completo de partnerships para la atracción de talento:**

**1. Diagnóstico y estrategia de partnerships de talento**
- ¿Cómo analizar las necesidades de talento actuales y futuras para definir qué tipos de partnerships de talento son prioritarios?
- ¿Cuál es la diferencia entre partnerships de talento con universidades, bootcamps, asociaciones profesionales, comunidades online y plataformas de talento, y cuándo usar cada uno?
- ¿Cómo mapear el ecosistema de instituciones formadoras de talento para los perfiles que necesito?
- Proporciona un framework de priorización de partnerships de talento según el volumen esperado de candidatos, la alineación con los perfiles necesarios y el esfuerzo de gestión.

**2. Alianzas universitarias y de instituciones educativas**
- ¿Cómo estructurar un programa de alianza universitaria que vaya más allá del simple puesto de trabajo en bolsa de empleo?
  - Programas de prácticas estructuradas
  - Charlas y masterclasses en el campus
  - Proyectos de fin de grado o máster patrocinados
  - Presencia en ferias de empleo
  - Programas de becas
  - Co-diseño de currículos con la institución
- ¿Cómo priorizar qué universidades o programas son los más relevantes para los perfiles que necesito?
- Diseña un plan de alianza universitaria tipo para una empresa tecnológica mediana.
- ¿Cómo mantener relaciones activas con el cuerpo docente para tener acceso temprano a los mejores estudiantes?

**3. Alianzas con bootcamps y formación acelerada**
- ¿Cuáles son los criterios para evaluar la calidad de un bootcamp o programa de formación acelerada como partner de talento?
- ¿Cómo estructurar un acuerdo con un bootcamp: ¿acceso prioritario a candidatos a cambio de qué?
- ¿Cómo gestionar las expectativas cuando los candidatos provenientes de bootcamps tienen formación técnica variable?

**4. Comunidades profesionales y asociaciones del sector**
- ¿Cómo identificar las comunidades online y asociaciones profesionales donde está concentrado el talento especializado que necesito?
- ¿Qué tipos de patrocinio o colaboración tienen más impacto en el employer branding dentro de estas comunidades?
- ¿Cómo participar activamente en comunidades profesionales sin parecer oportunista o solo interesado en reclutar?

**5. Plataformas y marketplaces de talento**
- ¿Cómo evaluar y seleccionar las plataformas de talento (LinkedIn, InfoJobs, Glassdoor, plataformas especializadas) más adecuadas para cada perfil?
- ¿Cómo negociar acuerdos con plataformas de talento que maximicen el retorno de la inversión en publicidad de empleo?
- ¿Cuándo tiene sentido el acceso a bases de datos de candidatos pasivos versus la publicación de ofertas activas?

**6. Medición y gestión del ecosistema de talento**
- ¿Qué métricas debo usar para evaluar el rendimiento de cada tipo de partnership de talento: número de candidatos generados, tasa de conversión a contratación, calidad de los candidatos, coste por contratación?
- ¿Cómo mantener el ecosistema de partners de talento activo durante los períodos de baja contratación para estar preparados cuando aumente la demanda?

**Formato de respuesta:**
Organiza la respuesta en las 6 secciones con recomendaciones concretas, plantillas de acuerdo y ejemplos. Incluye un plan tipo de alianza universitaria y un dashboard de métricas de partnerships de talento. Cierra con un plan de 12 meses para construir un ecosistema de talento sostenible.

Antes de responder, pregúntame sobre el sector de la empresa, los perfiles de talento prioritarios, el volumen anual de contrataciones y si tenemos presupuesto dedicado para partnerships de talento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir alianzas con universidades y comunidades de talento para asegurar un pipeline de candidatos',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],

            // 7 - Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Joint ventures y estructuración financiera de acuerdos de alianza estratégica',
                'description'      => 'Aprende a estructurar financieramente los acuerdos de alianza estratégica y joint ventures: desde la valoración de las aportaciones de cada parte hasta el diseño de los mecanismos de reparto de beneficios, riesgos y salida.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor financiero corporativo especializado en estructuración de alianzas estratégicas y joint ventures. Has participado en la negociación y estructuración financiera de decenas de acuerdos de alianza, desde joint ventures simples hasta estructuras complejas con mecanismos de desinversión y opciones de compra.

Necesito entender cómo estructurar financieramente un acuerdo de alianza estratégica o joint venture para asegurar que sea equitativo, sostenible y que proteja adecuadamente los intereses de mi organización.

**Marco completo de estructuración financiera de alianzas:**

**1. Modelos de alianza y sus implicaciones financieras**
- ¿Cuáles son los principales modelos de alianza desde el punto de vista financiero y cuándo es más adecuado cada uno?
  - Acuerdo de distribución o agencia
  - Licenciamiento mutuo
  - Consorcio para un proyecto específico
  - Joint venture (entidad jurídica separada)
  - Fusión o adquisición parcial
- ¿Qué implicaciones contables, fiscales y de reporting tiene cada estructura de alianza?
- ¿Cuándo tiene sentido crear una entidad jurídica separada para la alianza versus mantenerla como un acuerdo contractual?

**2. Valoración de las aportaciones de cada parte**
- ¿Cómo valorar financieramente las aportaciones no monetarias a una alianza: activos intangibles, tecnología, cartera de clientes, know-how, marca, acceso a mercados?
- Proporciona diferentes metodologías de valoración para activos intangibles en el contexto de una alianza: DCF, comparables, costo de reposición.
- ¿Cómo llegar a un acuerdo sobre el valor de las aportaciones cuando las partes tienen valoraciones muy diferentes?
- ¿Qué due diligence financiero debo realizar sobre el partner antes de comprometer recursos de mi organización?

**3. Estructuras de reparto de resultados y riesgos**
- ¿Cómo diseñar mecanismos de reparto de beneficios que sean equitativos y alineados con las aportaciones de cada parte?
- ¿Cómo estructurar el reparto de costes y pérdidas en escenarios adversos?
- ¿Qué mecanismos de protección financiera debo incluir: guaranteed minimum returns, earnout clauses, clawback provisions?
- ¿Cómo diseñar los KPIs financieros de la alianza y los mecanismos de reporting conjunto?

**4. Financiación de la alianza**
- ¿Cómo estructurar las aportaciones de capital iniciales y el mecanismo de financiación continua de la alianza?
- ¿Qué opciones de financiación externa tiene una joint venture: deuda bancaria, financiación de proyectos, capital de riesgo?
- ¿Cómo gestionar la tesorería y el flujo de caja en una alianza con múltiples socios?

**5. Mecanismos de salida y desinversión**
- ¿Qué cláusulas de salida deben incluirse desde el inicio: derecho de primera oferta, drag-along, tag-along, opciones de compra y venta?
- ¿Cómo valorar la participación de un socio que quiere salir de la alianza?
- ¿Cómo estructurar la disolución de una alianza que no ha funcionado minimizando los costes y los conflictos?

**6. Governance financiero de la alianza**
- ¿Cómo estructurar el comité de dirección y los mecanismos de toma de decisiones financieras en una alianza?
- ¿Cómo prevenir y resolver los conflictos financieros más comunes en alianzas estratégicas?

**Formato de respuesta:**
Organiza la respuesta en las 6 secciones con recomendaciones concretas, metodologías de valoración y ejemplos de estructuras de acuerdo. Incluye ejemplos de cláusulas financieras clave. Cierra con una lista de verificación financiera para la negociación de una alianza estratégica.

Antes de responder, pregúntame sobre el tipo de alianza que estoy considerando, el tamaño relativo de las partes y cuáles son los aspectos financieros que más me preocupan.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Estructurar financieramente acuerdos de joint venture y alianzas estratégicas',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],

            // 8 - Legal
            [
                'profession_id'    => 8,
                'title'            => 'Contratos de partnership y alianza estratégica: estructura jurídica y cláusulas clave',
                'description'      => 'Aprende a redactar, revisar y negociar contratos de partnership y alianza estratégica que protejan adecuadamente los intereses de tu cliente o empresa. Desde los NDAs iniciales hasta los contratos de joint venture y los mecanismos de salida.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado corporativo especializado en contratos de alianza estratégica y joint ventures. Has redactado y negociado contratos de partnership para empresas de distintos tamaños y sectores, y conoces en profundidad las cláusulas que protegen adecuadamente a las partes y las que generan más conflictos.

Necesito orientación jurídica para redactar, revisar o negociar un contrato de partnership o alianza estratégica.

**Marco jurídico completo de contratos de alianza:**

**1. Fase precontractual: protección antes del acuerdo**
- ¿Qué documentos jurídicos deben firmarse antes de iniciar las negociaciones de una alianza?
  - Acuerdo de confidencialidad (NDA): tipos, alcance, duración, excepciones, consecuencias del incumplimiento
  - Carta de intenciones (LOI o MOU): valor jurídico, cláusulas vinculantes vs. no vinculantes
- ¿Cuáles son las obligaciones jurídicas en la fase de due diligence mutua?
- ¿Cómo proteger la información confidencial compartida durante las negociaciones si estas fracasan?
- Proporciona una estructura de NDA estándar para negociaciones de alianza con las cláusulas esenciales.

**2. Estructura jurídica del acuerdo de alianza**
- ¿Cuáles son las estructuras jurídicas disponibles para una alianza estratégica y sus implicaciones legales?
  - Contrato de colaboración o prestación de servicios mutuos
  - Acuerdo de distribución o agencia
  - Contrato de licencia cruzada
  - Acuerdo de joint venture contractual
  - Joint venture societaria (sociedad participada por ambas partes)
- ¿Qué factores determinan la elección de la estructura jurídica: control, responsabilidad, fiscalidad, flexibilidad?

**3. Cláusulas esenciales del contrato de alianza**
- Proporciona un análisis detallado de las cláusulas más importantes en un contrato de alianza estratégica:
  - Objeto y alcance de la alianza
  - Exclusividad y territorialidad
  - Obligaciones y compromisos de cada parte
  - Propiedad intelectual: titularidad del IP generado en la alianza, licencias, restricciones de uso
  - Confidencialidad post-contractual
  - No competencia y no captación
  - Responsabilidad y limitación de responsabilidad
  - Representaciones y garantías
  - Indemnizaciones
  - Fuerza mayor
  - Resolución de disputas: mediación, arbitraje, tribunales competentes, ley aplicable

**4. Cláusulas de governance y toma de decisiones**
- ¿Cómo estructurar jurídicamente el governance de la alianza: comités, quórums, mayorías, derecho de veto?
- ¿Cómo regular jurídicamente los conflictos de interés entre los socios?
- ¿Cómo establecer mecanismos de deadlock resolution cuando las partes no llegan a acuerdo en decisiones clave?

**5. Modificación, incumplimiento y terminación**
- ¿Cómo regular jurídicamente las causas de terminación del contrato: por mutuo acuerdo, por incumplimiento, por causa justificada, por cambio de control?
- ¿Qué consecuencias debe tener el incumplimiento material de las obligaciones de la alianza?
- ¿Cómo estructurar los mecanismos de salida: derecho de primera oferta, opciones de compra y venta, drag-along y tag-along en joint ventures societarias?
- ¿Cómo regular los efectos post-terminación: devolución de información, cesación de uso de marcas, gestión de clientes compartidos?

**6. Aspectos regulatorios y de competencia**
- ¿Qué alianzas requieren notificación a autoridades de competencia y cómo evaluar si la alianza proyectada supera los umbrales de notificación?
- ¿Cómo redactar la alianza para minimizar el riesgo de ser considerada una práctica anticompetitiva?

**Formato de respuesta:**
Organiza la respuesta en las 6 secciones con análisis jurídico concreto, ejemplos de redacción de cláusulas y advertencias sobre los riesgos más comunes. Incluye una checklist de due diligence jurídica para alianzas. Cierra con las 10 cláusulas más críticas que nunca deben faltar en un contrato de partnership.

Antes de responder, pregúntame sobre el tipo de alianza, la jurisdicción aplicable y si tengo un borrador de contrato para revisar o estoy empezando desde cero.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Redactar y negociar contratos de alianza estratégica y joint venture con las cláusulas adecuadas',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],

            // 9 - Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Partnerships de Customer Success: ampliar el valor del cliente a través de alianzas',
                'description'      => 'Diseña alianzas con partners complementarios que amplíen el valor que puedes ofrecer a tus clientes. Aprende a co-vender con partners de implementación, a construir comunidades de socios certificados y a monetizar el ecosistema alrededor de tu producto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en Customer Success y partnerships de ecosistema con experiencia en empresas SaaS B2B de alto crecimiento. Has diseñado programas de partners de implementación y consultoría que han mejorado los resultados de los clientes, reducido el churn y generado nuevos ingresos.

Necesito desarrollar una estrategia de partnerships que amplíe el valor que ofrecemos a nuestros clientes y mejore los resultados de Customer Success.

**Marco de partnerships para ampliar el éxito del cliente:**

**1. Mapa de necesidades del cliente que van más allá del producto**
- ¿Cómo identificar las necesidades de los clientes que mi producto no cubre directamente pero que son críticas para su éxito?
- Proporciona un framework para mapear el journey completo del cliente e identificar los puntos donde un partner podría añadir valor crítico.
- ¿Qué tipos de partners complementarios pueden acelerar el time-to-value de los clientes: consultoras de implementación, partners de formación, integradores de sistemas, agencias especializadas?
- ¿Cómo usar la inteligencia de Customer Success para identificar las brechas de capacidad del cliente que generan riesgo de churn y que un partner podría cubrir?

**2. Diseño del programa de partners de implementación**
- ¿Cómo estructurar un programa de partners de implementación o consultoría certificada que garantice la calidad del trabajo con los clientes?
- ¿Qué beneficios debo ofrecer a los partners de implementación: acceso anticipado a features, co-marketing, leads, revenue sharing, soporte técnico prioritario?
- ¿Cómo diseñar el proceso de certificación de partners: formación, evaluación, acreditación, renovación?
- ¿Cómo asegurar que los partners de implementación mantienen los estándares de calidad que protegen la experiencia del cliente?

**3. Coordinación entre el equipo de CS y los partners**
- ¿Cómo estructurar la colaboración entre el CSM interno y el partner de implementación del cliente?
- ¿Cómo definir claramente las responsabilidades de cada parte durante el onboarding, la adopción y la renovación?
- ¿Cómo gestionar los conflictos cuando el partner de implementación y el equipo de CS tienen visiones diferentes sobre lo que necesita el cliente?
- Diseña un protocolo de escalación que involucre tanto al partner como al equipo interno de CS.

**4. Expansión de ingresos a través de partners**
- ¿Cómo usar la red de partners para identificar oportunidades de upsell o expansión en cuentas existentes?
- ¿Cómo estructurar los incentivos para que los partners de implementación traigan oportunidades de expansión?
- ¿Cómo co-vender con partners para acceder a nuevas cuentas que de otra manera serían difíciles de alcanzar con el equipo de CS directo?

**5. Comunidad de partners y clientes**
- ¿Cómo construir una comunidad que conecte a partners y clientes para generar aprendizaje compartido y referencias cruzadas?
- ¿Qué eventos, programas o recursos pueden anclar esta comunidad de partners y clientes?
- ¿Cómo usar los casos de éxito de clientes implementados por partners como activos de marketing y ventas?

**6. Métricas de éxito del programa de partners de CS**
- ¿Qué métricas debo monitorizar para evaluar si el programa de partners está mejorando los resultados del cliente: time-to-value, adoption rate, NPS de cuentas con partners vs. sin partners, tasa de renovación comparada?
- ¿Cómo identificar a los partners de mejor rendimiento y cómo apoyarles para que crezcan?

**Formato de respuesta:**
Organiza la respuesta en las 6 secciones con recomendaciones concretas, plantillas de programa de partners y ejemplos. Incluye un plan de onboarding de partners y un dashboard de métricas. Cierra con una hoja de ruta de 6 meses para lanzar o mejorar el programa de partners de Customer Success.

Empieza preguntándome sobre mi producto, el perfil de clientes que gestiono y si ya tenemos partners de implementación o estamos empezando el programa desde cero.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir un ecosistema de partners de implementación para mejorar los resultados de los clientes',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],

            // 10 - Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Alianzas estratégicas para freelancers: crecer colaborando con otros profesionales',
                'description'      => 'Diseña una red de alianzas estratégicas con otros freelancers y profesionales complementarios que te permita acceder a proyectos más grandes, ampliar tu oferta de servicios y construir un flujo de referidos mutuos que estabilice tus ingresos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de desarrollo de negocio especializado en el ecosistema del trabajo independiente. Has asesorado a cientos de freelancers a construir redes de colaboración estratégica que han transformado sus negocios individuales en ecosistemas colaborativos más resilientes y rentables.

Necesito desarrollar una estrategia de alianzas con otros profesionales independientes y empresas complementarias para hacer crecer mi negocio freelance.

**Marco completo de alianzas para freelancers:**

**1. Diagnóstico: qué tipo de alianzas necesitas**
- ¿Cuáles son los tres tipos de alianzas más valiosas para un freelancer y cuándo necesita cada una?
  - Alianzas de capacidad: otros freelancers con habilidades complementarias para poder ofrecer proyectos más completos
  - Alianzas de referidos: profesionales que tienen acceso a los mismos clientes pero ofrecen servicios diferentes
  - Alianzas con agencias: ser subcontratista o partner preferente de agencias o empresas que necesitan tu especialidad
- ¿Cómo auditar mi negocio actual para identificar qué tipo de alianzas tendrían mayor impacto en mis ingresos?
- ¿Cuáles son mis propias fortalezas y recursos que puedo aportar a una alianza: especialización, base de clientes, volumen de trabajo que subcontrataría?

**2. Identificación y selección de aliados**
- ¿Cómo identificar a los freelancers o profesionales más complementarios para mi especialidad?
- Proporciona un perfil de aliado ideal para distintos tipos de freelancer: diseñador web buscando aliados con desarrolladores y redactores; consultor de marketing buscando aliados con diseñadores y programadores de anuncios.
- ¿Cómo evaluar la calidad profesional y la confiabilidad de un potencial aliado antes de comprometer proyectos de clientes?
- ¿Cuántos aliados activos puede gestionar un freelancer sin que las relaciones pierdan profundidad?
- ¿Dónde encontrar aliados de calidad: comunidades online, eventos del sector, grupos de mastermind, antiguos compañeros de trabajo?

**3. Primer contacto y construcción de la relación**
- ¿Cómo aproximarme a un potencial aliado de manera genuina y profesional sin sonar transaccional desde el primer mensaje?
- Proporciona un script de primer contacto para proponer una relación de alianza o referidos mutuos.
- ¿Cómo estructurar las primeras interacciones para evaluar la compatibilidad profesional y personal antes de comprometer proyectos?
- ¿Qué señales de alerta debo tener en cuenta durante las primeras conversaciones que indiquen que no sería un buen aliado?

**4. Estructura del acuerdo de alianza entre freelancers**
- ¿Cuándo es necesario un acuerdo formal y cuándo es suficiente un acuerdo informal?
- ¿Qué términos deben quedar claros en una alianza de referidos: tarifa de referido o comisión, proceso de presentación al cliente, transparencia sobre la relación al cliente?
- ¿Qué términos deben quedar claros en una alianza de subcontratación: honorarios, plazos, proceso de revisión, propiedad del trabajo, confidencialidad, relación directa con el cliente final?
- Diseña una plantilla sencilla de acuerdo de alianza entre freelancers adaptable a distintas situaciones.

**5. Activación y mantenimiento de las alianzas**
- ¿Cómo activar una red de alianzas que genere referidos de manera consistente y no solo ocasional?
- ¿Con qué frecuencia y de qué manera debo mantener el contacto con mis aliados para que la relación permanezca activa?
- ¿Cómo ser el primero en aportar valor a los aliados para crear una relación de reciprocidad genuina?
- ¿Qué rituales o hábitos pueden mantener vivas las alianzas a largo plazo?

**6. Métricas y gestión del ecosistema de alianzas**
- ¿Cómo medir si mis alianzas están generando valor real: ingresos por referidos recibidos, proyectos ejecutados con aliados, ahorros en tiempo al subcontratar?
- ¿Cómo gestionar las alianzas que no están generando el valor esperado sin dañar la relación personal?
- ¿Cuándo tiene sentido formalizar una alianza exitosa en una estructura de negocio más permanente?

**Formato de respuesta:**
Organiza la respuesta en las 6 secciones con recomendaciones concretas, scripts de conversación, plantillas de acuerdo y estrategias prácticas. Incluye ejemplos de alianzas freelance exitosas. Cierra con un plan de 60 días para construir o activar las primeras alianzas estratégicas.

Antes de responder, pregúntame sobre mi especialidad freelance, mis ingresos actuales, si ya tengo alianzas informales y cuál es mi mayor problema de negocio en este momento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir una red de alianzas con otros freelancers para acceder a proyectos más grandes y flujo de referidos',
                'vote_score'       => 38,
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
