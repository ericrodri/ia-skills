<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills163Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing para empresas de energía',
                'description'      => 'Estrategias de marketing para comercializar electricidad, gas o energías renovables en el mercado residencial y empresarial, con el precio como diferenciador casi único.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing del sector energético con más de diez años de experiencia trabajando para comercializadoras de electricidad, gas natural y energías renovables en España y Europa.

Necesito desarrollar una estrategia de marketing completa para una empresa comercializadora de energía que quiere diferenciarse en un mercado donde el producto es esencialmente un commodity y el precio lo domina casi todo.

El contexto es el siguiente: la empresa opera en el mercado residencial y en el segmento de pymes. Tiene una tarifa competitiva pero no siempre la más barata. Quiere construir marca y fidelizar clientes más allá de la guerra de precios.

Por favor, ayúdame a desarrollar los siguientes puntos con detalle:

1. **Análisis del mercado energético como commodity**: explica por qué la energía es uno de los mercados donde el marketing tiene más dificultades para crear diferenciación y cuáles son las palancas que realmente funcionan cuando el producto es idéntico entre competidores.

2. **Segmentación y propuesta de valor**: define los segmentos del mercado residencial y pyme en los que tiene sentido competir más allá del precio (clientes preocupados por la sostenibilidad, consumidores digitales que valoran la comodidad, empresas con compromisos ESG) y diseña una propuesta de valor específica para cada segmento.

3. **Estrategia de contenidos y educación**: el cliente de energía está cada vez más interesado en entender su consumo, las energías renovables y el autoconsumo. Diseña un plan de contenidos que posicione a la empresa como referente en este espacio: blogs, calculadoras de ahorro, guías de autoconsumo, contenido sobre el mercado eléctrico.

4. **Marketing digital para captación**: describe las campañas de performance marketing que mejor funcionan en el sector energético: Google Ads con intención de búsqueda de cambio de comercializadora, comparadores de precio, campañas de retargeting y los embudos de conversión típicos del sector.

5. **Fidelización y reducción del churn**: el sector energético tiene tasas de churn elevadas porque cambiar de comercializadora es muy fácil. Diseña un programa de fidelización que vaya más allá del precio: servicios de valor añadido (asistencia en el hogar, informes de consumo, gestión del autoconsumo), comunicación proactiva antes de las renovaciones y los momentos de la verdad que definen si un cliente se queda o se va.

6. **Sostenibilidad como argumento de venta**: cómo comunicar de forma creíble la apuesta por las energías renovables sin caer en el greenwashing, incluyendo certificaciones (Garantía de Origen), etiquetado de la electricidad y cómo los clientes empresariales usan los RECs para sus informes de sostenibilidad.

7. **Comparadores y marketplaces de energía**: cuál es la estrategia óptima para aparecer bien posicionado en plataformas como Selectra, Kelisto o los comparadores de OCU, y cuándo tiene sentido invertir en presencia propia frente a depender de intermediarios.

8. **Marketing B2B para grandes consumidores**: el enfoque para llegar a pymes y autónomos es diferente al residencial. Describe las acciones de marketing B2B que funcionan: contenido técnico sobre gestión energética, casos de éxito de ahorro, presencia en eventos del sector y la relación con los gestores de flota o facility managers.

9. **Métricas clave del marketing energético**: define los KPIs que debe seguir el departamento de marketing de una comercializadora: CAC por canal, LTV del cliente por segmento, tasa de activación, NPS, tasa de churn mensual y cómo se relacionan entre sí.

10. **Plan de acción para los próximos 90 días**: proporciona un roadmap concreto con acciones prioritarias, presupuesto orientativo por canal y los quick wins que permiten demostrar resultados mientras se construye la estrategia a largo plazo.

Responde en español, con ejemplos concretos del mercado energético español cuando sea posible, y con recomendaciones accionables que un equipo de marketing de tamaño medio pueda implementar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Estrategia de marketing para comercializadoras de energía en mercados de commodity',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Software para el sector energético',
                'description'      => 'Desarrollo de sistemas SCADA/EMS, plataformas de trading de energía y software en un sector altamente regulado con datos críticos de infraestructura.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de software especializado en sistemas críticos del sector energético con experiencia en proyectos de SCADA, Energy Management Systems (EMS) y plataformas de trading de energía eléctrica.

Estoy desarrollando software para el sector energético y necesito entender las particularidades técnicas, regulatorias y de calidad que hacen que este dominio sea diferente a cualquier otro proyecto de software.

Ayúdame a estructurar el conocimiento que necesito en estas áreas:

1. **Arquitectura de sistemas SCADA/EMS**: explica la arquitectura típica de un sistema SCADA para redes de distribución eléctrica, los componentes clave (MTU, RTU, protocolos IEC 61850, DNP3, Modbus), las consideraciones de tiempo real y alta disponibilidad, y cómo se integra con los sistemas de gestión de la red (EMS/DMS).

2. **Sistemas de trading de energía**: describe la arquitectura de una plataforma de trading de energía que conecta con los mercados OMIE (mercado diario e intradiario), las APIs del operador del sistema (REE en España), y los sistemas de gestión de posición y riesgo. Qué tecnologías se usan para gestionar la latencia y la fiabilidad en este entorno.

3. **Calidad y validación del software crítico**: el software en infraestructuras críticas energéticas requiere niveles de calidad muy superiores a los del software comercial. Explica los estándares aplicables (IEC 62443 para ciberseguridad industrial, NERC CIP, ISO 27001 adaptado a OT), los procesos de validación y verificación, y cómo se estructura un plan de pruebas para un sistema SCADA.

4. **Regulación y cumplimiento normativo**: qué normativas afectan al software energético en España y Europa: directiva NIS2 para infraestructuras críticas, requisitos de REE como operador del sistema, obligaciones de reporting al regulador (CNMC) y cómo se documenta el cumplimiento desde el desarrollo.

5. **Ciberseguridad en entornos OT (Operational Technology)**: la seguridad en redes industriales es radicalmente diferente a la seguridad IT tradicional. Describe las amenazas específicas (ataques a SCADA, ransomware en infraestructuras críticas), las arquitecturas de red segmentadas (zonas Purdue), y las prácticas de hardening para sistemas industriales.

6. **Gestión de datos en tiempo real**: los sistemas energéticos generan volúmenes enormes de datos de series temporales (medidas de contadores, señales de red, precios de mercado). Qué tecnologías de bases de datos se usan (InfluxDB, TimescaleDB, OSIsoft PI), cómo se gestionan los datos históricos y cuáles son los patrones de arquitectura para el procesamiento en tiempo real.

7. **APIs de integración con el mercado**: documenta las integraciones típicas que debe tener una plataforma energética: API de ESIOS (REE), webservices de OMIE para el mercado, plataformas de gestión de contadores (CUPS), y las particularidades de los formatos de intercambio de datos del sector (XML de liquidaciones, ficheros de curvas de carga).

8. **Alta disponibilidad y recuperación ante desastres**: los sistemas energéticos no pueden permitirse tiempo de inactividad. Diseña una arquitectura de alta disponibilidad con failover automático, replicación de datos en tiempo real, RTO/RPO para sistemas críticos, y los procedimientos de DR específicos del sector.

9. **DevOps y CI/CD en entornos regulados**: cómo se aplica DevOps en proyectos donde los cambios deben pasar por procesos de validación exhaustivos, los entornos de pruebas deben replicar condiciones reales de red y los despliegues en producción requieren ventanas de mantenimiento coordinadas con el operador.

10. **Plan de proyecto para sistemas energéticos**: estructura un plan de proyecto típico para desarrollar un sistema de gestión energética, con las fases de ingeniería de requisitos, diseño, implementación, pruebas de fábrica (FAT), pruebas en sitio (SAT), puesta en marcha y soporte post-implantación.

Responde con nivel técnico alto, incluye ejemplos de tecnologías y estándares reales del sector, y señala las diferencias clave respecto al desarrollo de software en otros sectores menos regulados.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Arquitectura y desarrollo de sistemas críticos para infraestructuras energéticas',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'UX para apps de energía',
                'description'      => 'Diseño de dashboards de consumo, configuradores de tarifas y experiencias que ayudan a los clientes a entender y gestionar su consumo eléctrico.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de UX especializado en aplicaciones de energía y utilities con experiencia en proyectos para comercializadoras, distribuidoras y plataformas de gestión energética.

Necesito diseñar la experiencia de usuario de una aplicación móvil y web para clientes de una comercializadora de electricidad. El objetivo es que los clientes entiendan su consumo, gestionen su tarifa y reduzcan su factura de forma autónoma.

Guíame a través del proceso de diseño completo:

1. **Research y comprensión del usuario energético**: qué sabemos sobre cómo los usuarios perciben su consumo eléctrico (generalmente muy poco), cuáles son sus principales frustraciones con las apps de energía actuales, y cómo realizar un research efectivo con usuarios de distintos perfiles (familias, propietarios con autoconsumo, usuarios tech y no-tech).

2. **Arquitectura de información de la app**: diseña la estructura de navegación de una app de energía con las secciones principales: consumo en tiempo real, factura y desglose, gestión de la tarifa, alertas y consejos de ahorro, y soporte. Justifica las decisiones de jerarquía y por qué ciertas funcionalidades son más accesibles que otras.

3. **Dashboard de consumo**: este es el corazón de la app. Diseña un dashboard que muestre el consumo de forma comprensible para usuarios no técnicos: visualización por periodos (hoy, esta semana, este mes), comparativa con meses anteriores, distribución por franjas horarias (punta, llano, valle), y cómo presentar kWh y euros de forma que el usuario entienda la relación entre consumo y coste.

4. **Visualización de datos de energía**: los datos de consumo son inherentemente complejos (curvas de carga horarias, precios variables del mercado). Define los principios de visualización de datos para este dominio: cuándo usar gráficos de barras vs. líneas vs. áreas, cómo representar la variabilidad del precio horario (PVPC), y cómo evitar la sobrecarga cognitiva en usuarios que no son analistas de datos.

5. **Configurador de tarifas**: diseña el flujo de selección y comparación de tarifas, incluyendo la comparativa entre la tarifa actual y las alternativas, la estimación del ahorro proyectado, y el proceso de contratación. Cómo hacer que una decisión compleja (elegir entre precio fijo, indexado, con discriminación horaria) sea comprensible para el usuario medio.

6. **Onboarding y gestión del cambio**: los usuarios llegan a la app después de contratar la luz, que es un momento de baja motivación para aprender. Diseña un onboarding progresivo que no abrume, active las funcionalidades más valiosas de forma gradual y consiga que el usuario llegue a su primer "aha moment" en las primeras sesiones.

7. **Alertas y notificaciones inteligentes**: define una estrategia de notificaciones que añada valor sin molestar: alertas de consumo inusual, avisos de horas de precio bajo para activar electrodomésticos, recordatorios de lectura del contador, y consejos de ahorro personalizados basados en el perfil de consumo del usuario.

8. **Accesibilidad en apps de energía**: los usuarios de apps de utilities incluyen personas mayores y personas con discapacidad visual. Define los requisitos de accesibilidad (WCAG 2.1 nivel AA mínimo), los colores que no dependan solo del color para transmitir información de consumo (verde=barato/rojo=caro tiene problemas para daltónicos), y las adaptaciones para usuarios con baja alfabetización digital.

9. **Diseño para la gestión del autoconsumo**: cada vez más usuarios tienen paneles solares. Diseña la interfaz para que el usuario entienda la generación, el autoconsumo y el excedente vertido a la red, con la complejidad añadida de explicar la compensación de excedentes en la factura.

10. **Métricas de UX y plan de iteración**: define los indicadores de experiencia para una app de energía: tasa de apertura semanal, tiempo hasta entender la factura, tasa de configuración de alertas, y cómo estructurar un proceso de mejora continua basado en datos de uso y feedback de usuarios.

Responde con recomendaciones concretas de diseño, patrones de interacción recomendados, y ejemplos de buenas y malas prácticas que hayas visto en apps de energía o utilities.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseño de experiencia de usuario para aplicaciones de gestión energética',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de energía B2B',
                'description'      => 'Proceso de venta a grandes consumidores industriales: análisis del perfil de carga, negociación de contratos de suministro y argumentos en un mercado dominado por el precio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director comercial con quince años de experiencia en la venta de energía a grandes consumidores industriales, empresas del sector terciario y flotas de consumo en España.

Necesito estructurar el proceso de venta de energía eléctrica y gas natural a clientes B2B, desde la prospección inicial hasta el cierre del contrato y la gestión de la renovación. El reto es vender en un mercado donde el precio es el argumento dominante y la diferenciación es muy difícil.

Desarrolla una guía completa del proceso de ventas:

1. **Identificación y cualificación de oportunidades**: cómo identificar los clientes con mayor potencial (consumos anuales, vencimiento de contratos, perfil de carga), las fuentes de prospección en el sector industrial (bases de datos de CNMC, contactos en polígonos industriales, referencias de gestorías), y los criterios de cualificación para priorizar esfuerzos comerciales.

2. **Análisis del perfil de carga del cliente**: el análisis energético del cliente es la base de la propuesta. Explica cómo interpretar las curvas de carga horaria (ficheros de telemedida del distribuidor), identificar los picos de demanda que aumentan la potencia contratada, y detectar oportunidades de optimización antes de presentar la oferta.

3. **Estructura de la factura eléctrica industrial**: domina los componentes de la factura que el cliente no entiende: término de potencia por periodos P1-P6, término de energía activa y reactiva, peajes de acceso, cargos del sistema, impuesto eléctrico y IVA. Saber explicar esto con claridad es un diferenciador enorme frente a competidores que solo hablan de precio del kWh.

4. **Diseño de la propuesta comercial**: cómo estructurar una propuesta que vaya más allá del precio: análisis comparativo con la situación actual, proyección de ahorro a 12 y 24 meses, propuesta de optimización de la potencia contratada, y los servicios de valor añadido que justifican un margen superior al mínimo.

5. **Negociación con el departamento de compras**: en empresas grandes, la energía la gestiona compras o un facility manager. Describe las tácticas de negociación en este entorno: cuándo usar subastas de energía, cómo responder a la presión de precio sin destruir el margen, y los argumentos que funcionan cuando el interlocutor solo mira el precio unitario del kWh.

6. **Contratos de suministro energético**: los elementos clave del contrato B2B: fijación de precio (precio fijo vs. indexado a mercado), duración y condiciones de renovación, penalizaciones por abandono anticipado, cláusulas de revisión de precio por cambios regulatorios, y los riesgos que debe conocer el cliente antes de firmar.

7. **Power Purchase Agreements (PPA) para grandes consumidores**: cada vez más empresas con objetivos ESG quieren comprar energía renovable directamente a través de PPAs. Explica el funcionamiento de los PPAs físicos y financieros, el perfil de cliente que los demanda, y cómo posicionarte como asesor en este mercado emergente.

8. **Gestión de la cartera y renovaciones**: las renovaciones son más rentables que la captación nueva. Diseña un proceso de gestión proactiva de vencimientos: cuándo iniciar la conversación de renovación, cómo detectar señales de fuga (contacto con la competencia, solicitudes de factura), y las palancas para retener al cliente antes de que reciba la oferta del competidor.

9. **CRM y herramientas para la venta energética**: cómo usar un CRM para gestionar el ciclo de ventas largo del sector energético (meses desde el primer contacto hasta la firma), las automatizaciones útiles para el seguimiento, y los datos que hay que registrar en cada cuenta para facilitar las renovaciones y el upselling.

10. **Objeciones frecuentes y cómo gestionarlas**: trabaja las diez objeciones más comunes en la venta de energía B2B: "ya tenemos precio con otro proveedor", "el mercado está bajando y queremos esperar", "no nos fiamos de las comercializadoras pequeñas", y las respuestas que desbloquearon conversaciones atascadas.

Responde con ejemplos concretos del mercado energético español, argumentos reales que funcionan con compradores industriales, y los errores más comunes que cometen los equipos de ventas energéticos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Proceso de venta consultiva de energía a grandes consumidores industriales y B2B',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Plataformas de energía renovable',
                'description'      => 'Decisiones de producto en plataformas que conectan productores, distribuidores y consumidores de energías renovables en un mercado en plena disrupción regulatoria.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager con experiencia en plataformas digitales del sector de energías renovables, con conocimiento de los mercados de autoconsumo, comunidades energéticas y trading de certificados de origen.

Estoy diseñando el roadmap de producto de una plataforma que conecta productores de energía renovable (instaladores de solar, parques eólicos pequeños) con consumidores finales y con el mercado. Necesito entender las decisiones de producto clave en este espacio.

Ayúdame a estructurar la visión y estrategia de producto:

1. **Mapeo del ecosistema de energía renovable**: describe los actores del ecosistema que debe conectar la plataforma (prosumers con autoconsumo, comunidades energéticas locales, agregadores, comercializadoras verdes, distribuidoras, operador del sistema) y cómo fluyen la energía, los datos y el dinero entre ellos.

2. **Casos de uso prioritarios del producto**: define los tres o cuatro casos de uso donde la plataforma puede aportar más valor inmediato: marketplace de PPAs para pymes, gestión de comunidades energéticas, optimización del autoconsumo compartido, o certificación y trazabilidad del origen renovable. Justifica la priorización.

3. **Regulación como restricción de producto**: el mercado de renovables en España está muy condicionado por la regulación (RD 244/2019 de autoconsumo, circular 3/2020 de comunidades energéticas, normativa de la CNMC). Explica cómo las decisiones regulatorias afectan directamente al producto y cómo construir un roadmap que sea robusto ante cambios regulatorios.

4. **Gestión de datos energéticos como core del producto**: los datos de producción, consumo y precios de mercado son el activo central de la plataforma. Define la arquitectura de datos necesaria (integración con distribuidoras para datos de contadores, SCADA de instalaciones, API de OMIE para precios), los modelos de datos, y cómo la calidad del dato determina la calidad del producto.

5. **Monetización de la plataforma**: diseña el modelo de negocio de una plataforma de energía renovable, incluyendo las distintas palancas de ingresos: comisión por transacción en PPAs, suscripción para gestión de comunidades energéticas, licencia de software para instaladores, y servicios de datos y analítica para utilities.

6. **Experiencia del prosumer en la plataforma**: el usuario que tiene paneles solares y quiere maximizar su autoconsumo es un usuario nuevo que no existía hace diez años. Define su journey completo: instalación y alta en la plataforma, monitorización de la producción, gestión del excedente, participación en una comunidad energética, y la facturación integrada de compensación de excedentes.

7. **Interoperabilidad y estándares del sector**: las plataformas de energía deben integrarse con múltiples sistemas heredados. Describe los estándares de interoperabilidad relevantes (OpenADR para gestión de demanda, CIM para modelos de red, EEBUS para dispositivos domésticos), y cómo diseñar una capa de integración que permita escalar sin depender de un único proveedor.

8. **Producto para comunidades energéticas locales**: las comunidades energéticas son uno de los vectores de crecimiento más importantes del sector. Define las funcionalidades específicas que necesita el producto para gestionar una comunidad: reparto de la energía entre miembros, gestión de excedentes, facturación interna, y los roles de administrador de la comunidad.

9. **Roadmap y priorización ante la incertidumbre regulatoria**: cómo construir un roadmap de producto cuando el marco regulatorio puede cambiar significativamente cada año, equilibrando la inversión en funcionalidades que ya son viables con la apuesta por funcionalidades que dependen de regulación pendiente.

10. **Métricas de éxito de la plataforma**: define los KPIs del producto para una plataforma de energía renovable: energía transaccionada (MWh), número de instalaciones conectadas, tasa de retención de prosumers, ahorro medio generado por usuario, y cómo se relacionan estas métricas con el impacto climático del producto.

Responde con visión estratégica de producto, ejemplos de decisiones reales en el sector, y las tensiones típicas entre lo que el mercado pide y lo que la regulación permite.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia y roadmap de producto para plataformas de energía renovable',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Talento en la transición energética',
                'description'      => 'El sector energético necesita nuevos perfiles tech que compiten con la industria tecnológica por el mismo talento escaso.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de People especializado en empresas del sector energético que ha liderado procesos de transformación digital y captación de nuevos perfiles tecnológicos en empresas de utilities, renovables y tecnología energética.

La transición energética está creando una demanda masiva de nuevos perfiles profesionales que el sector nunca había necesitado antes. Al mismo tiempo, estos perfiles (data scientists, ingenieros de software, especialistas en baterías, expertos en ciberseguridad OT) son los mismos que busca la industria tecnológica, con la que el sector energético compete en desventaja de marca empleadora.

Ayúdame a diseñar una estrategia de talento completa para este contexto:

1. **Mapa de nuevos perfiles de la transición energética**: define los perfiles críticos que el sector necesita y escasean: ingenieros de software para sistemas de control, data scientists para optimización energética, especialistas en almacenamiento de energía y baterías, expertos en ciberseguridad OT/ICS, y product managers con experiencia en plataformas de energía. Cuál es la situación del mercado de talento para cada uno.

2. **Employer branding para competir con tech**: una empresa de energía no es Google. Define la estrategia de employer branding que permite atraer perfiles tech con argumentos genuinos: impacto en la descarbonización, proyectos de ingeniería complejos y únicos, estabilidad y proyección del sector, y las condiciones laborales que sí puede ofrecer una empresa industrial grande frente a una startup.

3. **Fuentes de captación para perfiles técnicos energéticos**: dónde buscar estos perfiles: universidades con grados de ingeniería energética y telecomunicaciones, comunidades de energía solar y renovables, conferencias del sector (intersolar, WindEurope), LinkedIn con estrategias específicas para cada perfil, y el rol de los headhunters especializados en el sector energético.

4. **Diseño de procesos de selección técnicos**: cómo evaluar la competencia técnica de un data scientist que va a trabajar con series temporales de consumo energético, o de un ingeniero de software que va a desarrollar sistemas SCADA. Las pruebas técnicas que son relevantes para el sector, y cómo involucrar a los equipos técnicos en el proceso sin alargar demasiado el tiempo de contratación.

5. **Reconversión del talento interno**: muchas empresas energéticas tienen ingenieros de procesos o electricistas con décadas de experiencia en el sector que pueden convertirse en puentes entre el mundo OT y el mundo IT. Diseña programas de reskilling para este perfil: qué habilidades digitales pueden adquirir, cuánto tiempo requiere la reconversión, y cómo posicionarlos como activos únicos de la empresa.

6. **Retención en un mercado de talento competitivo**: un data scientist en una empresa de energía recibe ofertas constantemente de startups tech y consultoras. Define las palancas de retención que van más allá del salario: proyectos de impacto, autonomía técnica, plan de carrera claro en el sector, formación continua, y los momentos críticos en los que es más probable la fuga.

7. **Gestión del choque cultural**: integrar perfiles con mentalidad de startup en organizaciones energéticas tradicionales con culturas de proceso y jerarquía genera fricción. Describe las estrategias para gestionar este choque: equipos autónomos dentro de la estructura grande, protección de los equipos digitales de la burocracia corporativa, y la figura del líder puente que entiende ambos mundos.

8. **Colaboración con universidades y centros de investigación**: las empresas energéticas que invierten en relaciones con universidades técnicas tienen ventaja en captación de talento junior. Diseña un programa de colaboración: proyectos finales de carrera en problemas reales del sector, cátedras de empresa, prácticas estructuradas que conviertan en contrataciones, y la participación en la definición de planes de estudio.

9. **Diversidad en el sector energético**: el sector energético tiene un problema de diversidad de género especialmente grave en los perfiles técnicos. Define las acciones concretas para mejorar la diversidad: revisión de las descripciones de puesto para eliminar sesgos, relación con asociaciones como Women in Energy, procesos de selección que mitiguen sesgos inconscientes, y los argumentos de negocio que justifican la inversión.

10. **Plan de workforce planning para la transición energética**: el sector va a necesitar miles de nuevos perfiles en los próximos cinco años mientras algunos perfiles tradicionales quedan obsoletos. Diseña un ejercicio de workforce planning que ayude a la empresa a anticipar las necesidades de talento, planificar la reconversión interna, y dimensionar la captación externa necesaria.

Responde con estrategias concretas y accionables, ejemplos de empresas del sector que lo están haciendo bien, y las trampas más comunes en la gestión del talento tecnológico en entornos industriales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Estrategia de talento y RRHH para empresas en la transición energética',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Financiación de proyectos renovables',
                'description'      => 'Project finance para parques solares y eólicos: estructuras de financiación, PPAs y evaluación de riesgo de activos regulados.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un analista de project finance especializado en infraestructuras de energías renovables con experiencia en la estructuración de financiación para parques solares fotovoltaicos, parques eólicos onshore y proyectos de almacenamiento de energía en España y Europa.

Necesito comprender a fondo las estructuras de financiación de proyectos renovables para evaluar y estructurar la financiación de un parque solar de 50 MW sin subvenciones públicas (merchant o con PPA).

Guíame a través del análisis financiero completo:

1. **Estructura típica de project finance para renovables**: explica la estructura de financiación típica de un proyecto renovable (SPV, ratio deuda/equity, financiación sin recurso vs. con recurso limitado), los participantes en la estructura (promotor, bancos financiadores, inversor en equity, asegurador, y organismo de supervisión), y por qué el project finance es la estructura dominante en este sector.

2. **Modelización financiera del proyecto**: describe los componentes del modelo financiero de un parque solar: producción energética (P50/P90 según el informe de recurso solar), ingresos (precio del mercado spot o PPA), CAPEX por componentes (paneles, inversores, estructura, obra civil, conexión a red), OPEX anual, y los ratios financieros clave (DSCR, LLCR, TIR del proyecto y TIR del equity).

3. **Power Purchase Agreements (PPA) como palanca de financiación**: el PPA es el instrumento que transforma un proyecto merchant de alto riesgo en un activo financiable. Explica los tipos de PPA (físico vs. financiero/virtual), la negociación del precio, el plazo típico (10-15 años), el perfil del comprador corporativo, y cómo el rating del comprador afecta a las condiciones de la financiación bancaria.

4. **Análisis de riesgos del proyecto renovable**: estructura una matriz de riesgos completa: riesgo de recurso (variabilidad del sol/viento), riesgo de construcción (retrasos, sobrecostes), riesgo de operación (degradación de paneles, averías), riesgo de mercado (precio de la energía), riesgo de contrapartida (solvencia del comprador del PPA), riesgo regulatorio (cambios en peajes o cargos), y riesgo de conexión a red.

5. **Documentación legal de la financiación**: los contratos que estructuran una financiación de proyecto renovable: contrato de préstamo sindicado, direct agreement entre prestamistas y contrapartes clave, contrato de pignoración de los activos del SPV, account agreement para las cuentas del proyecto, y la importancia del legal opinion en cada jurisdicción.

6. **Financiación bancaria vs. bonos de proyecto**: los proyectos renovables de tamaño significativo tienen acceso a los mercados de capitales a través de bonos de infraestructura. Compara las ventajas e inconvenientes de la financiación bancaria tradicional (mayor flexibilidad, menor plazo) frente a los bonos de proyecto (mayor plazo, mercado más amplio de inversores institucionales, mayor rigidez en los covenants).

7. **Refinanciación y optimización de la estructura**: una vez el proyecto lleva dos o tres años operando con resultados conocidos, el riesgo percibido baja y es posible refinanciar en mejores condiciones. Describe el proceso de refinanciación: cuándo tiene sentido, cómo se mejoran las condiciones, y el impacto en la TIR del equity de los inversores.

8. **Inversores en equity de proyectos renovables**: quién invierte en el equity de proyectos renovables en España: fondos de infraestructuras (como Macquarie, BlackRock Infrastructure), utilities europeas, family offices, y fondos de pensiones. Cuál es el retorno esperado para cada tipo de inversor y qué buscan en la due diligence.

9. **Impacto de la taxonomía verde y ESG en la financiación**: la taxonomía verde europea y los estándares ESG están transformando el mercado de capitales para renovables. Explica cómo los bonos verdes, los préstamos ligados a sostenibilidad, y los marcos ESG de los bancos afectan a la disponibilidad y coste de la financiación para proyectos renovables.

10. **Caso práctico: estructuración de un parque solar de 50 MW**: aplica todo lo anterior a un caso concreto. Define las hipótesis del modelo financiero, la estructura de financiación propuesta (ratio deuda/equity, plazo, coste de la deuda), el DSCR mínimo exigido por los bancos, y los principales riesgos que habría que mitigar para conseguir la aprobación de los financiadores.

Responde con el nivel de detalle que esperaría un comité de riesgos bancario, incluye métricas y ratios típicos del mercado español, y señala las diferencias entre la financiación de solar y eólico cuando sean relevantes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estructuración de project finance y análisis de riesgo para proyectos de energías renovables',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Regulación del sector energético',
                'description'      => 'Marco regulatorio de la energía en España y Europa: CNMC, mercado mayorista, autoconsumo y las licencias que necesita una empresa para operar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho energético con experiencia en el marco regulatorio español y europeo, incluyendo litigios ante la CNMC, recursos ante el Tribunal Supremo y asesoramiento a operadores del sector eléctrico y gasista.

Necesito entender el marco regulatorio completo del sector energético español para asesorar a una empresa que quiere iniciar actividad como comercializadora de electricidad y también está estudiando promover un proyecto de autoconsumo colectivo.

Estructura el análisis regulatorio de forma completa:

1. **Estructura del sistema eléctrico español y sus actores regulados**: explica la separación de actividades reguladas (transporte, distribución) y liberalizadas (generación, comercialización) en el sistema eléctrico español, los actores principales (REE como operador del sistema y gestor de la red de transporte, Endesa/Iberdrola/Naturgy como distribuidoras), y el rol de la CNMC como regulador sectorial.

2. **Autorización para ser comercializadora de electricidad**: el proceso de obtención de la habilitación para actuar como comercializador de último recurso o comercializador libre: ante qué organismo se tramita (Ministerio de Transición Ecológica), la documentación requerida, las garantías económicas que hay que depositar, y el Código de Conducta de las comercializadoras.

3. **Mercado mayorista de electricidad (OMIE y mercados de ajuste)**: cómo funciona el mercado diario e intradiario gestionado por OMIE, los mecanismos de ajuste y balance gestionados por REE, el proceso de liquidación de desviaciones, y las obligaciones de una comercializadora en relación con el balance y la cobertura de desvíos.

4. **Peajes, cargos y costes regulados**: la factura eléctrica tiene una parte regulada (peajes de acceso, cargos del sistema, pagos por capacidad) cuyo importe fija la CNMC y el Ministerio. Explica qué son estos componentes, cómo se calculan, por qué han aumentado, y las controversias sobre la distribución de los costes del sistema entre consumidores.

5. **Regulación del autoconsumo (RD 244/2019)**: el marco regulatorio del autoconsumo fotovoltaico en España: modalidades (sin excedentes, con excedentes acogidos a compensación, con excedentes no acogidos), la compensación simplificada de excedentes, el autoconsumo colectivo, y el procedimiento ante la distribuidora para dar de alta una instalación.

6. **Comunidades energéticas locales**: el marco incipiente de las comunidades energéticas en España (transposición de la Directiva RED II, Circular 3/2020 de CNMC), el reparto de la energía entre los miembros, las implicaciones para la facturación de la distribuidora, y el estado actual de la regulación que todavía tiene muchas lagunas.

7. **Obligaciones de suministro y protección del consumidor vulnerable**: las obligaciones de las comercializadoras con los consumidores vulnerables: Bono Social Eléctrico, prohibición de corte de suministro en determinados periodos, los procedimientos de reclamación ante la CNMC, y las sanciones por incumplimiento de las obligaciones de suministro.

8. **Regulación del almacenamiento de energía**: el almacenamiento de energía (baterías) tiene un tratamiento regulatorio incierto en España. Explica el estado actual: si el almacenamiento puede acumular energía del mercado y vendería después, las restricciones de los distribuidores para conectar almacenamiento a la red, y las expectativas regulatorias para los próximos años.

9. **Procedimientos sancionadores de la CNMC**: la CNMC tiene potestad sancionadora sobre los operadores del sector. Describe los tipos de infracciones más frecuentes (facturación incorrecta, incumplimiento de obligaciones de información, prácticas anticompetitivas), el procedimiento sancionador, los recursos disponibles, y las multas que se han impuesto en los últimos años.

10. **Perspectivas regulatorias de la transición energética**: los cambios regulatorios que están por venir: mercados de capacidad, regulación de los agregadores de demanda, el papel de los prosumers en los servicios de red, la integración del hidrógeno verde en el marco regulatorio, y cómo preparar una estrategia empresarial que sea robusta ante la incertidumbre regulatoria.

Responde con referencias a normativa específica (reales decretos, circulares de CNMC, directivas europeas), plazos y costes de los procedimientos cuando los conozcas, y señala claramente cuándo una decisión empresarial requiere consulta legal específica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Análisis del marco regulatorio energético español para nuevos operadores del sector',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente en utilities',
                'description'      => 'Gestión de picos de contacto por facturas, averías y cambios de suministrador en un sector donde el cliente llama cuando ya está enfadado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Service con amplia experiencia en el sector de utilities (electricidad, gas, agua) que ha liderado equipos de atención al cliente en entornos de alto volumen y alta tensión emocional.

Las utilities tienen una particularidad brutal en el servicio al cliente: el cliente solo contacta cuando algo va mal (la factura es muy alta, se ha ido la luz, le van a cortar el suministro, quiere cambiarse de empresa). El punto de partida es casi siempre la frustración o el miedo.

Ayúdame a diseñar un modelo de atención al cliente robusto para este contexto:

1. **Tipología de contactos en utilities**: mapea los motivos de contacto más frecuentes y su carga emocional: reclamación de factura alta, avería o corte de suministro, gestión del cambio de comercializadora, solicitud del Bono Social, cambio de titular, y lectura del contador. Cuál es el volumen relativo de cada tipo y su estacionalidad (los picos de verano por el aire acondicionado, los picos de invierno por la calefacción).

2. **Gestión de la llamada de reclamación de factura**: la reclamación de factura alta es el contacto más frecuente y más tenso. Define el protocolo de gestión: cómo verificar la factura en sistemas, cómo explicar los componentes de la factura de forma comprensible, cuándo ofrecer una revisión de la potencia contratada como solución, y cómo gestionar el caso en que la reclamación no procede.

3. **Gestión de averías y cortes de suministro**: cuando el cliente se queda sin luz o sin gas, cada minuto cuenta. Define los SLAs de respuesta en situaciones de emergencia, el protocolo de coordinación con la distribuidora (que es quien gestiona la red física), cómo comunicar el estado de la avería en tiempo real, y cómo gestionar las expectativas cuando la resolución depende de un tercero.

4. **Proceso de cambio de suministrador**: el cliente que quiere cambiarse de empresa está a punto de marcharse. Define el proceso de retención: detección temprana de la intención de fuga, el protocolo de contraoferta, cuándo dejar ir al cliente sin insistir, y cómo gestionar el proceso de baja de forma que deje la puerta abierta para una futura vuelta.

5. **Gestión de la morosidad y clientes con riesgo de corte**: la comunicación con clientes que tienen facturas impagadas requiere un protocolo específico: las fases de reclamación (aviso, carta de corte, corte efectivo), las obligaciones legales antes de cortar el suministro a consumidores vulnerables, y cómo ofrecer soluciones de pago sin erosionar el cobro.

6. **Canales de atención y omnicanalidad**: las utilities deben atender por teléfono (sigue siendo el canal mayoritario para incidencias), por web (área de cliente para gestiones administrativas), por app (lectura de contador, consulta de factura), por chatbot (FAQs y gestiones simples), y presencialmente en oficinas. Define la estrategia omnicanal y la distribución de contactos por canal según el tipo de gestión.

7. **Formación de agentes en terminología técnica**: un agente de atención al cliente de una utility necesita entender conceptos técnicos que el cliente desconoce: discriminación horaria, potencia contratada vs. demandada, contador inteligente, CUPS, cambio de comercializadora vs. cambio de distribuidora. Diseña un plan de formación para nuevos agentes en este sector.

8. **KPIs de calidad en utilities**: define los indicadores de servicio específicos del sector: FCR (First Contact Resolution), AHT por tipo de gestión, CSAT después de reclamación, tasa de resolución en primera llamada para averías, tiempo de respuesta en emergencias, y las obligaciones de calidad que exige la CNMC a las comercializadoras.

9. **Automatización con chatbots e IVR**: qué gestiones son automatizables en utilities (lectura de contador, consulta de saldo, estado de una avería, emisión de duplicado de factura) y cuáles siguen requiriendo agente humano. Cómo diseñar un IVR que reduzca el tiempo de espera sin frustrar al cliente que quiere hablar con una persona.

10. **Gestión de crisis de atención masiva**: cuando hay una gran tormenta o un fallo de red que afecta a miles de clientes, el volumen de contactos se multiplica. Define el plan de contingencia para gestionar picos de llamadas de hasta cinco veces el volumen habitual: activación de recursos adicionales, mensajería proactiva para reducir llamadas innecesarias, y la comunicación de estado en redes sociales y web.

Responde con protocolos concretos, ejemplos de guiones de atención para las situaciones más tensas, y métricas de referencia del sector de utilities en España.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Diseño de protocolos y modelo de atención al cliente para empresas del sector utilities',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultor de transición energética',
                'description'      => 'El nicho del consultor independiente en eficiencia energética y renovables: proyectos para pymes y administraciones que quieren reducir su factura y huella de carbono.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de energía independiente con diez años de experiencia ayudando a pymes, comercios y administraciones locales a reducir su consumo energético, instalar energía renovable y navegar la burocracia del sector en España.

Quiero establecerme como consultor freelance especializado en transición energética para el segmento de pymes y administraciones públicas. Necesito entender el negocio completo: qué servicios ofrecer, cómo conseguir clientes, cómo entregar valor real y cómo construir un negocio sostenible en este nicho.

Guíame a través de todos los aspectos del negocio:

1. **Definición del servicio y propuesta de valor**: qué servicios concretos puede ofrecer un consultor energético independiente a una pyme o ayuntamiento: auditoría energética, análisis de la factura eléctrica, asesoramiento en la instalación de autoconsumo, gestión de subvenciones (PERTE, fondos Next Generation), optimización de contratos de suministro, y el diseño de la estrategia de descarbonización. Cómo se diferencia de las grandes consultoras y de las empresas instaladoras que también asesoran.

2. **Segmentación del mercado**: define los segmentos de mercado más accesibles y rentables para un consultor independiente: pymes industriales con alto consumo (metalurgia, alimentación, logística), cadenas de retail con muchos puntos de consumo, administraciones locales con edificios públicos y flotas municipales, y comunidades de vecinos con zonas comunes. Cuál es el perfil ideal de primer cliente.

3. **Proceso de captación de clientes**: cómo consigue sus primeros clientes un consultor energético sin cartera previa: el papel de las asociaciones empresariales y los clusters industriales, la colaboración con gestorías y asesorías fiscales que tienen relación de confianza con pymes, las redes de instaladores que necesitan el componente de consultoría, y la estrategia de contenidos para posicionarse como experto (LinkedIn, artículos en medios locales).

4. **Auditoría energética como servicio de entrada**: la auditoría energética es la puerta de entrada habitual. Define el proceso de una auditoría energética básica para una pyme: recogida de datos (facturas de los últimos 12 meses, visita a las instalaciones, inventario de equipos consumidores), análisis del perfil de consumo, identificación de oportunidades de ahorro (iluminación LED, motores de alta eficiencia, optimización de potencia contratada, aislamiento) y el formato del informe.

5. **Gestión de subvenciones como servicio de alto valor**: las subvenciones de los fondos Next Generation para rehabilitación energética y autoconsumo requieren gestión documental compleja. Define el servicio de gestión de subvenciones: qué programas están disponibles (PERTE de renovables, ayudas del IDAE, programas autonómicos), los requisitos para pymes y autónomos, el proceso de solicitud, y el modelo de honorarios del consultor (fijo, porcentaje de la subvención obtenida, o mixto).

6. **Modelo de honorarios y propuesta económica**: cómo estructurar los honorarios: fee fijo por auditoría (rango típico para una pyme de tamaño medio), retainer mensual para optimización continua, success fee sobre el ahorro generado, y la combinación de modelos que maximiza los ingresos recurrentes. Cómo presentar el ROI al cliente para que el precio no sea el primer criterio de decisión.

7. **Herramientas y formación continua**: qué herramientas necesita un consultor energético independiente: software de análisis de facturas y curvas de carga, bases de datos de precios de instalaciones fotovoltaicas, y calculadoras de ahorro. Qué certificaciones son valoradas por los clientes en España (certificado de auditor energético según RD 56/2016, acreditaciones de IDAE), y cómo mantenerse actualizado en un sector que cambia muy rápidamente.

8. **Colaboración con instaladores y otros proveedores**: el consultor independiente no instala, pero sí recomienda instaladores. Cómo gestionar esta relación de forma ética: cuándo aceptar comisiones de instaladores (transparencia con el cliente), cuándo es mejor mantenerse completamente independiente para preservar la credibilidad, y cómo construir una red de proveedores de confianza en renovables, eficiencia y almacenamiento.

9. **Propuesta de valor para administraciones públicas**: las administraciones locales tienen necesidades específicas y procesos de contratación distintos. Cómo acceder a contratos públicos como autónomo: el umbral de contratos menores que no requieren concurso, la participación en concursos públicos de mayor importe, y los pliegos tipo de los contratos de auditoría y consultoría energética en el sector público.

10. **Plan de negocio para el primer año como consultor energético**: estructura un plan de negocio realista para el primer año: cuántos clientes son necesarios para alcanzar la rentabilidad, el mix de servicios que mejor equilibra ingresos rápidos (optimización de contratos) con proyectos de mayor valor (gestión de subvenciones y proyectos de autoconsumo), y los hitos que marcan que el negocio está consolidado.

Responde con datos concretos del mercado español, rangos de precios reales, y los errores más frecuentes que cometen los consultores energéticos independientes en sus primeros años.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Guía completa para establecerse como consultor freelance de eficiencia energética y renovables',
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
