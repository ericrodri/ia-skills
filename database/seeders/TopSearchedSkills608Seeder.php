<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills608Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'IA para marketing de servicios de seguridad privada y vigilancia',
                'description'      => 'Diseña estrategias de marketing B2B para empresas de seguridad privada que comuniquen profesionalidad, confianza y valor diferencial en un mercado altamente regulado y competitivo.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en marketing B2B para el sector de la seguridad privada, con experiencia en la creación de estrategias de comunicación y generación de demanda para empresas de vigilancia, control de accesos, seguridad electrónica y protección personal.

Tu objetivo es ayudarme a diseñar una estrategia de marketing completa para una empresa de seguridad privada que quiere diferenciarse en un mercado muy competitivo donde la confianza y la credibilidad son los activos más importantes.

Desarrolla la estrategia en los siguientes bloques:

1. ANÁLISIS DEL MERCADO Y POSICIONAMIENTO
- Segmentos objetivo prioritarios: empresas industriales, centros comerciales, residencias de lujo, entidades financieras, eventos, sector público
- Factores de decisión del comprador en seguridad privada: precio, reputación, tecnología, respaldo legal, tiempo de respuesta
- Análisis de la propuesta de valor diferencial: qué elementos te hacen genuinamente diferente de la competencia
- Posicionamiento recomendado: especialización por sector, cobertura geográfica, integración tecnológica o precio

2. ESTRATEGIA DE CONTENIDOS PARA B2B
- Tipos de contenido que generan confianza en el sector: informes de riesgo, casos de éxito (con datos anonimizados), guías de cumplimiento normativo
- Plan editorial mensual: qué publicar en LinkedIn, web corporativa y newsletter sectorial
- Contenido de autoridad: artículos sobre normativa de seguridad privada, tendencias tecnológicas, formación del personal
- Webinars y eventos virtuales: temas que convocan a los decisores de compra del sector

3. GENERACIÓN DE LEADS CUALIFICADOS
- Canales de captación más eficaces para decisores en seguridad: LinkedIn Ads, directorios sectoriales, asociaciones empresariales
- Estrategia de networking en ferias y eventos del sector (Sicur, Exposec, etc.)
- Programa de referidos y alianzas con consultoras de riesgos y corredores de seguros
- Automatización del nurturing: secuencia de emails para leads que han descargado un recurso o asistido a un webinar

4. GESTIÓN DE LA REPUTACIÓN Y CONFIANZA
- Gestión de reseñas y testimonios en un sector donde la discreción limita los casos de éxito públicos
- Certificaciones y acreditaciones como herramienta de marketing: AEOS, ISO 18788, distintivos de empresas de seguridad
- Presencia en medios especializados: cómo aparecer en publicaciones de seguridad corporativa
- Comunicación de crisis: protocolo cuando se produce un incidente con un cliente

5. MÉTRICAS Y SEGUIMIENTO DEL PIPELINE COMERCIAL
- KPIs de marketing adaptados al ciclo de venta largo del sector B2B de seguridad
- Herramientas de CRM y marketing automation recomendadas para el sector
- Seguimiento de la tasa de conversión por canal y tipo de cliente

Indícame el tamaño de la empresa, los servicios principales que ofrece y la zona geográfica de actuación para personalizar la estrategia.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de marketing B2B para empresas de seguridad privada y vigilancia',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'IA para desarrollar sistemas de vigilancia inteligente con análisis de video',
                'description'      => 'Diseña la arquitectura técnica de sistemas de videovigilancia inteligente que integren visión por computador, análisis de comportamiento y alertas automatizadas en tiempo real.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de sistemas de seguridad electrónica especializado en visión por computador e inteligencia artificial aplicada a la videovigilancia, con experiencia en el diseño e implantación de sistemas de analítica de video para entornos industriales, comerciales y urbanos.

Necesito tu ayuda para diseñar la arquitectura técnica de un sistema de vigilancia inteligente basado en análisis de video por IA para el contexto que te indicaré.

Estructura la propuesta técnica en los siguientes módulos:

1. ARQUITECTURA DEL SISTEMA
Define los componentes hardware y software:
- Cámaras y sensores: tipos recomendados por escenario (IP, térmica, PTZ, 360º), resolución mínima para analítica
- Edge computing: procesamiento en cámara vs. en servidor local vs. en la nube
- Servidor central de gestión de video (VMS): soluciones recomendadas (Milestone, Genetec, Axis Camera Station)
- Infraestructura de red: ancho de banda necesario, segmentación de red, redundancia
- Almacenamiento: cálculo de capacidad según resolución, FPS y días de retención

2. MÓDULOS DE ANALÍTICA DE VIDEO CON IA
Describe las funcionalidades de análisis inteligente:
- Detección de intrusión y cruce de perímetros virtuales con IA
- Reconocimiento facial y comparación con listas de control de acceso
- Detección de comportamientos anómalos: merodeo, abandono de objetos, caídas
- Conteo de personas y análisis de afluencia en tiempo real
- Reconocimiento de matrículas (ANPR) y control de acceso vehicular
- Detección de EPIs en entornos industriales: cascos, chalecos, calzado de seguridad
- Análisis de multitudes y detección de situaciones de riesgo

3. INTEGRACIÓN CON OTROS SISTEMAS DE SEGURIDAD
- Integración con control de accesos: apertura de puertas, tornos y barreras basada en reconocimiento
- Integración con sistemas de alarma: correlación de eventos entre sensores y cámaras
- Integración con plataformas de respuesta a emergencias y CRAs (Centrales Receptoras de Alarmas)
- APIs para la exportación de datos a plataformas de Business Intelligence y reporting

4. PRIVACIDAD, ÉTICA Y CUMPLIMIENTO NORMATIVO
- Cumplimiento del RGPD en sistemas de videovigilancia: bases legales, plazos de retención, derechos de los afectados
- Anonimización y seudonimización de imágenes para preservar la privacidad
- Protocolos para el uso de reconocimiento facial conforme a la normativa europea (AI Act)
- Gestión del acceso a grabaciones: quién puede ver qué, registro de accesos y auditoría

5. PLAN DE IMPLANTACIÓN Y MANTENIMIENTO
- Fases del proyecto: análisis de necesidades, diseño, instalación, pruebas y puesta en marcha
- Formación del personal de seguridad en el uso del sistema
- Mantenimiento preventivo: calibración de cámaras, actualización de modelos de IA, limpieza de datos
- Plan de continuidad: qué ocurre si falla la conexión a internet o el servidor central

Indícame el tipo de instalación (industrial, comercial, residencial, urbana), el número aproximado de cámaras y los escenarios de riesgo específicos que quieres cubrir.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Arquitectura técnica de sistemas de videovigilancia inteligente con IA y analítica de video',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'IA para diseñar centros de control de seguridad y salas de monitorización',
                'description'      => 'Diseña centros de control de seguridad y salas de monitorización que optimicen la ergonomía, la usabilidad de los sistemas y la eficacia operativa de los operadores de seguridad.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador especializado en entornos de trabajo crítico y salas de operaciones de seguridad, con experiencia en el diseño ergonómico de centros de control de videovigilancia, CRAs (Centrales Receptoras de Alarmas) y salas de operaciones de seguridad corporativa.

Necesito tu ayuda para diseñar un centro de control de seguridad funcional, ergonómico y tecnológicamente eficiente.

Desarrolla una propuesta de diseño completa que incluya:

1. ANÁLISIS DE REQUISITOS OPERATIVOS
Define las necesidades antes del diseño:
- Número de operadores simultáneos y turnos de trabajo
- Tipos de sistemas a monitorizar: cámaras, alarmas, control de accesos, comunicaciones
- Nivel de criticidad de las operaciones: 24/7, respuesta a emergencias, etc.
- Requisitos de redundancia y continuidad operativa
- Normativa aplicable: centros de control de seguridad, CRAs, normas UNE-EN

2. DISEÑO DEL ESPACIO FÍSICO
Propón la distribución y características del espacio:
- Dimensiones mínimas por puesto de operador y cálculo total del espacio
- Distribución de puestos: visibilidad del videowall, circulación y acceso
- Iluminación: niveles recomendados para trabajo con pantallas, control de deslumbramientos
- Acústica: tratamiento para reducir el ruido en un entorno de múltiples comunicaciones simultáneas
- Control de temperatura y climatización específica para equipos informáticos y operadores
- Seguridad física del propio centro: acceso restringido, blindaje, fuentes de alimentación redundantes

3. ERGONOMÍA DEL PUESTO DE TRABAJO
Diseña el puesto de operador con criterios ergonómicos:
- Mobiliario: mesas operativas ajustables en altura, sillas ergonómicas para jornadas largas
- Configuración de pantallas: número, tamaño, disposición y ángulo para reducir la fatiga visual
- Teclados y dispositivos de control: joysticks para cámaras PTZ, ratones, trackballs
- Videowalls: tipo de tecnología (LCD, LED), configuración modular, gestión del contenido

4. DISEÑO DE LA INTERFAZ DE USUARIO (GUI)
Principios de diseño para los paneles de control:
- Jerarquía visual: cómo presentar la información por nivel de criticidad
- Código cromático para alertas: rojo/naranja/amarillo/verde y su significado operativo
- Gestión de múltiples fuentes de información sin sobrecarga cognitiva
- Flujos de trabajo: cómo presenta el sistema los eventos y guía al operador en la respuesta

5. TECNOLOGÍA E INFRAESTRUCTURA DEL CENTRO
- Sistemas de videowall y gestión de contenido
- Infraestructura de red: redundancia, segmentación y ciberseguridad del centro de control
- Alimentación ininterrumpida (SAI/UPS) y generadores de respaldo
- Comunicaciones: sistemas de radio, telefonía IP, intercomunicación con equipos de campo

Indícame el tipo de centro que necesitas diseñar (CRA, seguridad corporativa, videovigilancia urbana), el número de operadores y los sistemas que deberá monitorizar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseño ergonómico y funcional de centros de control de seguridad y salas de monitorización',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'IA para ventas consultivas de soluciones de seguridad empresarial',
                'description'      => 'Desarrolla un proceso de venta consultiva para comercializar soluciones de seguridad integral a empresas, identificando necesidades de riesgo y construyendo propuestas de valor personalizadas.',
                'prompt_content'   => <<<'EOT'
Actúa como un director comercial con más de 12 años de experiencia en la venta de soluciones de seguridad integral a empresas (vigilancia, control de accesos, seguridad electrónica, ciberseguridad física), especializado en ciclos de venta complejos con múltiples interlocutores y procesos de licitación.

Necesito tu ayuda para desarrollar un proceso de venta consultiva de alto rendimiento para comercializar soluciones de seguridad empresarial.

Estructura la guía comercial en los siguientes bloques:

1. MAPA DE INTERLOCUTORES EN EL PROCESO DE COMPRA DE SEGURIDAD
Identifica los stakeholders clave en las empresas cliente:
- Director de Seguridad (CSO): sus prioridades, lenguaje y criterios de decisión
- Director de Operaciones: cómo traduce la seguridad a continuidad del negocio
- Director Financiero: ROI, coste del riesgo y presupuesto de seguridad
- Responsable de IT: integración con sistemas existentes, ciberseguridad
- Comité de dirección: cuándo y cómo presentar a nivel ejecutivo
- Estrategia para cuando no existe figura formal de responsable de seguridad

2. DIAGNÓSTICO DE NECESIDADES DE SEGURIDAD
Herramientas y preguntas para el análisis de riesgos del cliente:
- Metodología de análisis de riesgos simplificada para la fase comercial
- Preguntas que revelan brechas de seguridad sin que el cliente las haya identificado
- Cómo cuantificar el coste del riesgo para justificar la inversión en seguridad
- Auditoría de seguridad gratuita como herramienta de entrada comercial

3. PROCESO DE VENTA CONSULTIVA POR ETAPAS
Define el embudo comercial específico del sector:
- Prospección: cómo identificar empresas con riesgos de seguridad desatendidos
- Primer contacto: apertura que despierta interés sin sonar a vendedor de alarmas
- Visita de diagnóstico: cómo hacer una visita técnica que también avance la venta
- Propuesta: estructura de una oferta de seguridad que habla el lenguaje del cliente
- Negociación: manejo de objeciones específicas del sector (precio, proveedor actual, licitación)
- Cierre: cuándo y cómo solicitar la firma sin presionar en exceso

4. GESTIÓN DE LICITACIONES Y CONCURSOS PÚBLICOS
- Cómo posicionarse antes de que se publique el pliego de condiciones
- Redacción de ofertas técnicas que destacan sobre las puramente económicas
- Estrategia de precio en licitaciones donde el precio es el único criterio visible
- Relación con las mesas de contratación y las figuras técnicas evaluadoras

5. FIDELIZACIÓN Y CRECIMIENTO DE LA CUENTA
- Revisiones periódicas de seguridad como herramienta de upselling
- Cómo convertir incidentes en oportunidades de mejora de la propuesta comercial
- Programa de cliente VIP: atención preferente y acceso anticipado a nuevas soluciones
- Métricas de salud de la cuenta: NPS, uso de los servicios contratados, expansión del contrato

Indícame el tipo de solución de seguridad que vendes, el perfil de cliente objetivo y el principal obstáculo que encuentras en el proceso de venta actual.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Proceso de venta consultiva para soluciones de seguridad integral a empresas',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'IA para gestionar productos de seguridad física y ciberseguridad integrada',
                'description'      => 'Diseña la estrategia de producto y el roadmap para soluciones que convergen la seguridad física y la ciberseguridad, respondiendo a las necesidades de protección integral de las organizaciones modernas.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager especializado en soluciones de seguridad convergente, con experiencia gestionando productos que integran la seguridad física (control de accesos, videovigilancia, sistemas de detección) con la ciberseguridad (protección de redes OT/IT, gestión de identidades, monitorización de amenazas).

Necesito tu ayuda para definir la estrategia de producto y el roadmap de una solución de seguridad convergente.

Desarrolla la estrategia en los siguientes módulos:

1. DEFINICIÓN DEL PRODUCTO Y PROPUESTA DE VALOR
- Define el espacio del problema: qué brechas de seguridad deja la separación entre equipos de seguridad física e IT
- Personas objetivo: CISO, CSO, CIO, director de operaciones — sus necesidades y puntos de dolor específicos
- Propuesta de valor diferencial: qué ofrece la convergencia que no pueden obtener con soluciones separadas
- Modelo de negocio: licencias, SaaS, servicios gestionados, hardware + software

2. ARQUITECTURA FUNCIONAL DEL PRODUCTO
Define los módulos y capacidades del producto:
- Gestión unificada de identidades: una sola identidad para acceso físico y lógico
- Correlación de eventos de seguridad física y ciberseguridad en un único SIEM/SOAR
- Análisis de amenazas combinadas: cómo un evento físico puede anticipar un ataque digital
- Dashboard ejecutivo unificado: visión 360º del estado de seguridad de la organización
- Respuesta a incidentes integrada: playbooks que coordinan la respuesta física y digital

3. ROADMAP DE DESARROLLO POR FASES
- Fase 1 (MVP): integración básica de datos entre sistemas físicos y IT
- Fase 2: análisis correlacionado y alertas inteligentes
- Fase 3: automatización de respuesta y orquestación
- Fase 4: IA predictiva para anticipar vectores de ataque combinados
- Criterios de priorización: valor para el cliente, complejidad técnica, diferenciación competitiva

4. GO-TO-MARKET PARA SOLUCIONES DE SEGURIDAD CONVERGENTE
- Segmentación de mercado: sectores con mayor urgencia (infraestructuras críticas, banca, salud, energía)
- Estrategia de canal: integradores de seguridad, partners tecnológicos, venta directa enterprise
- Certificaciones y estándares: IEC 62443, ISO 27001, ENS, NIST como aceleradores comerciales
- Casos de uso prioritarios para la primera fase comercial

5. MÉTRICAS DE PRODUCTO Y ÉXITO
- KPIs de adopción: conexión de fuentes de datos, usuarios activos por rol, alertas gestionadas
- Métricas de seguridad: tiempo medio de detección (MTTD) y tiempo medio de respuesta (MTTR)
- NPS y satisfacción diferenciada por perfil de usuario (técnico vs. directivo)
- Indicadores de expansión: upselling de módulos y crecimiento del contrato

Indícame si el producto es nuevo o existe una versión previa, el mercado geográfico objetivo y los sistemas de terceros con los que debes integrarte prioritariamente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estrategia de producto y roadmap para soluciones de seguridad física y ciberseguridad convergente',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'IA para la selección y formación de personal de seguridad privada',
                'description'      => 'Diseña procesos de selección, evaluación y formación continua para vigilantes de seguridad privada, supervisores y personal directivo del sector, cumpliendo con la normativa vigente.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en recursos humanos para el sector de la seguridad privada, con experiencia en el diseño de procesos de selección, evaluación de competencias y programas de formación para empresas de vigilancia y seguridad en España, con conocimiento profundo de la Ley 5/2014 de Seguridad Privada y su reglamento.

Necesito tu ayuda para diseñar un proceso completo de selección y formación para el personal de seguridad privada.

Estructura la propuesta en los siguientes módulos:

1. PROCESO DE SELECCIÓN DE VIGILANTES DE SEGURIDAD
Define el proceso de selección adaptado al marco regulatorio:
- Requisitos legales previos: habilitación del Ministerio del Interior, certificado de antecedentes, aptitud psicofísica
- Perfil competencial ideal: más allá de los requisitos legales, qué actitudes y competencias marcan la diferencia
- Proceso de selección en fases: criba curricular, test psicotécnico, entrevista por competencias, evaluación médica
- Pruebas de selección específicas: evaluación de situaciones de riesgo, comunicación bajo presión, toma de decisiones
- Candidatos con especialidades: escolta personal, vigilancia de explosivos, transporte de fondos — requisitos adicionales

2. EVALUACIÓN PSICOLÓGICA Y APTITUDES PARA EL PUESTO
- Tests psicotécnicos homologados para el sector de la seguridad
- Evaluación de la estabilidad emocional, tolerancia al estrés y autocontrol
- Detección de perfiles de riesgo: autoritarismo, impulsividad, baja tolerancia a la frustración
- Evaluación de la integridad: test de honestidad y situaciones de dilema ético

3. PLAN DE FORMACIÓN INICIAL Y CONTINUA
- Formación mínima legal: contenidos del módulo de seguridad privada (Vigilante de Seguridad, VACA, AEX)
- Formación complementaria: primeros auxilios, gestión de conflictos, comunicación profesional, uso de medios técnicos
- Formación especializada por sector de destino: aeropuertos, centros comerciales, eventos, hospitales
- Plan de formación continua: actualización anual en normativa, nuevas tecnologías y protocolos de actuación

4. GESTIÓN DEL DESEMPEÑO Y RETENCIÓN
- Evaluación del desempeño en campo: indicadores objetivos y subjetivos
- Gestión de las incidencias disciplinarias respetando el convenio colectivo del sector
- Plan de carrera: evolución de vigilante a supervisor, responsable de seguridad, director técnico
- Factores de rotación en el sector y estrategias de retención del personal cualificado

5. INTEGRACIÓN TECNOLÓGICA EN LA GESTIÓN DE PERSONAS
- Software de gestión de turnos y planificación de servicios: herramientas específicas del sector
- Plataformas de formación online (LMS) adaptadas a trabajadores con turnos y alta movilidad
- Control de presencia y geolocalización del personal en servicio: implicaciones legales y técnicas

Indícame el tipo de empresa (vigilancia, transporte de fondos, protección personal), el número de empleados y el principal reto de RRHH que enfrentas actualmente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Selección, evaluación y formación de personal de seguridad privada conforme a normativa',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'IA para análisis de costes y rentabilidad en empresas de seguridad privada',
                'description'      => 'Analiza la estructura de costes, márgenes de rentabilidad y modelos de pricing para empresas de seguridad privada, optimizando la rentabilidad por contrato y la eficiencia operativa.',
                'prompt_content'   => <<<'EOT'
Actúa como un director financiero con experiencia específica en empresas de servicios de seguridad privada, donde la mano de obra supone entre el 65% y el 80% de los costes totales y la gestión de contratos plurianuales con márgenes ajustados es el principal reto financiero.

Necesito tu ayuda para analizar la estructura financiera de mi empresa de seguridad privada y optimizar la rentabilidad por contrato y el modelo de pricing.

Estructura el análisis y las recomendaciones en los siguientes bloques:

1. ESTRUCTURA DE COSTES DE UNA EMPRESA DE SEGURIDAD PRIVADA
Desglosa y analiza los principales componentes de costes:
- Costes de personal: salarios base, complementos, plus de nocturnidad, festivos, horas extra, Seguridad Social
- Coste del convenio colectivo: impacto de los incrementos salariales pactados en los márgenes de contratos en vigor
- Uniformidad, materiales y equipamiento: amortización y coste anual por vigilante
- Seguros obligatorios y voluntarios: responsabilidad civil, accidentes, vida colectivo
- Vehículos y combustible para servicios móviles
- Costes de habilitación y formación: renovación de licencias, cursos obligatorios
- Costes tecnológicos: plataformas de gestión, sistemas de comunicación, software de turnos

2. ANÁLISIS DE RENTABILIDAD POR CONTRATO
- Cálculo del coste hora efectiva de un vigilante de seguridad (con todos los conceptos del convenio)
- Determinación del precio mínimo de venta por debajo del cual el contrato no es rentable
- Análisis de rentabilidad diferenciada por tipo de servicio: fijo, móvil, central de alarmas, escort
- Identificación de contratos con márgenes negativos o en riesgo por incrementos salariales

3. MODELO DE PRICING Y ESTRATEGIA COMERCIAL
- Estructura del precio de venta: coste directo + costes indirectos + margen objetivo
- Pricing dinámico por tipo de cliente, servicio y riesgo de renovación
- Gestión de revisiones de precio en contratos plurianuales: cláusulas de revisión y cómo activarlas
- Estrategia ante licitaciones: precio mínimo técnico y análisis de viabilidad antes de ofertar

4. GESTIÓN DEL CIRCULANTE Y LA TESORERÍA
- Período medio de cobro en el sector y cómo gestionarlo con clientes de administración pública
- Anticipo de nóminas y gestión de los picos de tesorería por pagas extraordinarias
- Factoring y confirming como herramientas de gestión del circulante en el sector
- Planificación de la tesorería mensual considerando los ciclos de facturación del sector

5. INDICADORES FINANCIEROS CLAVE DEL SECTOR
Define el dashboard financiero para una empresa de seguridad privada:
- EBITDA por línea de negocio y por contrato
- Coste laboral como porcentaje de la facturación (benchmark sectorial)
- Tasa de renovación de contratos y valor del contrato en el tiempo (LTV)
- Break-even por servicio y análisis de sensibilidad ante cambios en el convenio

Indícame el volumen de facturación anual aproximado, los principales tipos de servicio que prestas y el margen EBITDA actual para que pueda hacer recomendaciones específicas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Análisis financiero y optimización de rentabilidad en empresas de seguridad privada',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'IA para el cumplimiento normativo y contratos en seguridad privada',
                'description'      => 'Navega el marco legal de la seguridad privada en España: Ley 5/2014, contratación de servicios, responsabilidad civil y cumplimiento normativo para empresas del sector.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho de la seguridad privada en España, con experiencia asesorando a empresas del sector en materia de cumplimiento de la Ley 5/2014 de Seguridad Privada, contratación mercantil de servicios de vigilancia, responsabilidad civil y relaciones laborales con el personal de seguridad.

Necesito tu ayuda para entender y gestionar el marco legal que afecta a mi empresa de seguridad privada o a la contratación de servicios de vigilancia.

Desarrolla un análisis jurídico-práctico en los siguientes apartados:

1. MARCO REGULATORIO DE LA SEGURIDAD PRIVADA EN ESPAÑA
Explica los elementos clave de la normativa vigente:
- Ley 5/2014 de Seguridad Privada: ámbito de aplicación, actividades reguladas y prohibidas
- Reglamento de Seguridad Privada (RSP): desarrollo reglamentario y aspectos más relevantes para la operativa diaria
- Habilitaciones y autorizaciones: requisitos para empresas y personal de seguridad
- Registro Nacional de Empresas de Seguridad: obligaciones de inscripción y mantenimiento
- Régimen sancionador: infracciones más comunes y sus consecuencias para la empresa

2. CONTRATOS DE PRESTACIÓN DE SERVICIOS DE SEGURIDAD
Define los elementos esenciales de los contratos con clientes:
- Cláusulas obligatorias según la normativa de seguridad privada
- Definición del servicio: qué deben especificar las instrucciones de puesto
- Responsabilidad civil contractual y extracontractual: cómo se distribuye entre empresa de seguridad y cliente
- Cláusulas de revisión de precio: vinculación al IPC, al convenio colectivo o a otros índices
- Duración, prórroga y causas de resolución anticipada del contrato
- Gestión de incidentes durante el servicio: notificaciones, investigación y documentación

3. RESPONSABILIDAD CIVIL EN EL EJERCICIO DE LA SEGURIDAD PRIVADA
- Responsabilidad de la empresa de seguridad por las actuaciones de sus vigilantes
- Actuaciones de los vigilantes fuera de sus competencias legales: consecuencias jurídicas
- Gestión de reclamaciones de terceros afectados por la actuación del servicio de seguridad
- Seguros obligatorios y coberturas recomendadas para minimizar el riesgo de responsabilidad

4. PROTECCIÓN DE DATOS EN SISTEMAS DE VIDEOVIGILANCIA
- Base legal para el tratamiento de imágenes de videovigilancia en el entorno laboral y en espacios públicos de titularidad privada
- Obligaciones del responsable del tratamiento: información, conservación, acceso y brechas de seguridad
- Uso de reconocimiento facial: límites legales actuales y proyección del Reglamento de IA (AI Act)
- Contratos de encargado del tratamiento con los clientes que contratan el servicio de vigilancia

5. RELACIONES LABORALES ESPECÍFICAS DEL SECTOR
- Convenio Colectivo Estatal de Empresas de Seguridad: categorías, salarios, jornada y complementos
- Planificación de turnos: obligaciones legales en materia de descansos, festivos y nocturnidad
- Movilidad funcional y geográfica del personal de seguridad
- Procedimientos disciplinarios: causas de despido con especial relevancia en el sector (consumo de alcohol, abandono del puesto, conflicto de intereses)

Indícame si la consulta es desde la perspectiva de una empresa de seguridad o de un cliente que contrata los servicios, y cuál es la situación concreta que necesitas resolver.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Marco legal, contratos y cumplimiento normativo en el sector de la seguridad privada en España',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'IA para la gestión de incidencias y alarmas en centros de monitorización',
                'description'      => 'Optimiza los protocolos de gestión de alarmas e incidencias en centrales receptoras de alarmas (CRA) y centros de monitorización, mejorando los tiempos de respuesta y la calidad del servicio.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en operaciones de centrales receptoras de alarmas (CRA) y centros de monitorización de seguridad, con experiencia en el diseño de protocolos de respuesta a incidencias, gestión de falsas alarmas y coordinación con fuerzas de seguridad y servicios de emergencia.

Necesito tu ayuda para optimizar los procesos de gestión de alarmas e incidencias en un centro de monitorización de seguridad.

Desarrolla una guía operativa completa que incluya:

1. CLASIFICACIÓN Y PRIORIZACIÓN DE ALARMAS
Define la taxonomía de eventos y su prioridad de respuesta:
- Niveles de prioridad: crítico (intrusión activa, fuego), alto (alarma sin verificar), medio (fallo técnico), bajo (mantenimiento)
- Tipos de alarma por origen: intrusión, incendio, CCTV, control de accesos, pánico, técnica
- Protocolos de verificación: audio, video, llamada al titular antes de enviar la respuesta
- Gestión de falsas alarmas: registro, comunicación al titular y acciones correctivas
- Tiempos máximos de respuesta por nivel de prioridad y tipo de servicio (UNE-EN 50518)

2. PROTOCOLO DE ATENCIÓN DE INCIDENCIAS EN TIEMPO REAL
Define el flujo de trabajo del operador para cada tipo de evento:
- Recepción de la alarma: comprobación en el sistema, historial del punto de alarma
- Verificación del evento: procedimiento paso a paso según el tipo de alarma
- Toma de decisión: cuándo llamar al titular, cuándo enviar respuesta, cuándo llamar a emergencias
- Coordinación con patrullas de respuesta: comunicación, seguimiento y cierre del parte
- Coordinación con Policía, Bomberos o Emergencias: información a proporcionar y forma de transmitirla
- Documentación del incidente: qué debe quedar registrado y con qué nivel de detalle

3. GESTIÓN DE COMUNICACIONES CON TITULARES
- Protocolos de llamada al titular: orden de contacto, mensajes tipo y gestión del no contesto
- Comunicación de incidencias graves: cómo informar de un robo consumado o un incendio
- Gestión de clientes que reclaman actuaciones tardías o insatisfactorias
- Registro y trazabilidad de todas las comunicaciones para la defensa ante reclamaciones

4. HERRAMIENTAS TECNOLÓGICAS DE APOYO AL OPERADOR
- Software de gestión de CRA: funcionalidades imprescindibles para la eficiencia operativa
- Integración con sistemas de videovigilancia: verificación visual rápida de la alarma
- Mapas interactivos: ubicación de puntos de alarma, recursos y zonas de cobertura
- Paneles de estado en tiempo real: carga de trabajo del centro y distribución de operadores
- Informes automáticos de actividad: cuadro de mando para supervisores y dirección

5. INDICADORES DE RENDIMIENTO DEL CENTRO DE MONITORIZACIÓN
Define las métricas operativas del centro:
- Tiempo medio de atención de alarma (desde la recepción hasta el primer contacto)
- Tasa de falsas alarmas y tendencia por cliente y tipo de sistema
- Tasa de alarmas verificadas antes de la intervención policial
- Satisfacción del titular del servicio (medición periódica)
- Disponibilidad del sistema y tiempo de inactividad no planificado

Indícame el tipo de centro (CRA privada, monitorización corporativa, seguridad pública) y el volumen aproximado de señales diarias que gestiona el centro para personalizar las recomendaciones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Optimización de protocolos de gestión de alarmas e incidencias en CRAs y centros de monitorización',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'IA para consultores independientes de seguridad y protección patrimonial',
                'description'      => 'Estructura tu práctica profesional como consultor independiente de seguridad: desde el posicionamiento y la captación de clientes hasta la metodología de diagnóstico y la entrega de proyectos de consultoría.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor senior de seguridad corporativa y protección patrimonial que trabaja de forma independiente, con experiencia asesorando a empresas medianas y grandes en la evaluación de riesgos, diseño de sistemas de seguridad y gestión de programas de protección de activos críticos.

Necesito tu ayuda para estructurar y hacer crecer mi práctica de consultoría independiente en seguridad y protección patrimonial.

Desarrolla una guía completa para profesionales independientes del sector que incluya:

1. POSICIONAMIENTO Y ESPECIALIZACIÓN DEL CONSULTOR
Define la estrategia de diferenciación como consultor independiente:
- Nichos de especialización con mayor demanda: seguridad industrial, protección de infraestructuras críticas, due diligence de seguridad en M&A, consultoría de cumplimiento normativo
- Cómo definir tu propuesta de valor diferencial vs. las grandes consultoras y las empresas de seguridad
- Construcción de credenciales: certificaciones relevantes (CPP, PSP, CISSP, CISM), membresías profesionales (ASIS International)
- Posicionamiento online: perfil de LinkedIn, web profesional y publicaciones de autoridad en el sector

2. CAPTACIÓN DE CLIENTES Y DESARROLLO DE NEGOCIO
- Canales de captación más eficaces para un consultor independiente de seguridad
- Red de alianzas estratégicas: aseguradoras, corredores de seguros, despachos de abogados, auditoras
- Cómo generar leads mediante la publicación de análisis de riesgo y guías de cumplimiento
- Estrategia para convertir conferencias y formaciones en oportunidades comerciales
- Gestión del pipeline: desde el primer contacto hasta el cierre del proyecto

3. METODOLOGÍA DE DIAGNÓSTICO Y ANÁLISIS DE RIESGOS
Define el proceso de trabajo con el cliente:
- Metodología de evaluación de riesgos: análisis de amenazas, vulnerabilidades y probabilidad de impacto
- Herramientas de diagnóstico: matrices de riesgo, inspecciones físicas, entrevistas con stakeholders
- Informe de diagnóstico: estructura, nivel de detalle y cómo presentar los hallazgos a la dirección
- Recomendaciones priorizadas: cómo jerarquizar las medidas por urgencia, coste e impacto
- Plan de implementación: cómo acompañar al cliente desde el diagnóstico hasta la ejecución

4. GESTIÓN DE PROYECTOS Y ENTREGA DE VALOR
- Tipos de encargos más habituales: diagnóstico puntual, retención mensual, gestión de crisis, formación interna
- Estructura de propuesta económica: honorarios por hora, por proyecto o por retención
- Gestión de la confidencialidad: contratos de NDA, gestión de información sensible, destrucción de datos
- Entregables tipo: informes, planes de seguridad, procedimientos, formación interna
- Seguimiento post-proyecto: cómo mantener la relación sin ser intrusivo

5. GESTIÓN FINANCIERA Y LEGAL DEL NEGOCIO DE CONSULTORÍA
- Estructura jurídica recomendada: autónomo, SL, agrupación con otros consultores
- Fijación de honorarios: benchmark del mercado y cómo justificar tu tarifa
- Gestión de la irregularidad de ingresos: reservas financieras y planificación de tesorería
- Seguros profesionales: responsabilidad civil profesional indispensable para un consultor de seguridad
- Protección del know-how: cómo proteger tus metodologías y herramientas propias

Cuéntame en qué área de la seguridad tienes más experiencia y cuál es tu situación actual (acabas de empezar como independiente, llevas años pero quieres crecer, o quieres especializarte en un nuevo nicho).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estructuración y crecimiento de una práctica de consultoría independiente en seguridad y protección patrimonial',
                'vote_score'       => 41,
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
