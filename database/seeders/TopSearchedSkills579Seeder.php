<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills579Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Comunicación ciudadana y marketing urbano con IA para smart cities',
                'description'      => 'Diseña estrategias de comunicación pública para municipios e iniciativas de ciudad inteligente: campañas de participación ciudadana, branding urbano y comunicación de proyectos smart.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en comunicación pública y marketing territorial con más de 12 años de experiencia en proyectos de ciudades inteligentes, regeneración urbana y participación ciudadana en administraciones locales europeas.

Contexto: Trabajo en [municipio/administración/empresa tecnológica que colabora con el sector público] y necesito diseñar una estrategia de comunicación para [proyecto de smart city: nueva app de movilidad urbana / sistema de gestión de residuos inteligente / proyecto de participación ciudadana digital / etc.]. El objetivo es informar, involucrar y generar confianza entre la ciudadanía.

Objetivo: Desarrollar una estrategia de comunicación pública completa que explique el proyecto, genere confianza, impulse la participación y mida el impacto comunicativo.

instrucción principal:
Crea la estrategia de comunicación completa para la iniciativa de smart city:

1. ANÁLISIS DEL CONTEXTO COMUNICATIVO
Entiende el punto de partida:
- Análisis de stakeholders: ciudadanos, medios, empresas locales, grupos de presión
- Mapa de percepciones actuales: qué sabe y qué piensa la ciudadanía sobre el proyecto
- Análisis de comunicación del municipio: canales actuales y su alcance
- Barreras de comunicación: desconfianza, brecha digital, idioma, edad
- Benchmarking: cómo comunican proyectos similares en otras ciudades
- Oportunidades de comunicación: eventos, fechas clave, momentos de visibilidad

2. ESTRATEGIA DE MENSAJES
Define el qué comunicar:
- Mensaje central del proyecto: una frase que lo resume todo
- Mensajes por audiencia: ciudadanos en general, mayores, jóvenes, empresas, medios
- Narrativa del cambio: antes / durante / después de la transformación urbana
- Beneficios concretos y tangibles para el ciudadano de a pie
- Respuestas preparadas a las objeciones más probables
- Cómo explicar tecnología compleja en lenguaje simple y cercano

3. MIX DE CANALES DE COMUNICACIÓN
Define el dónde comunicar:
- Canales digitales: web municipal, app, redes sociales, newsletter
- Canales presenciales: eventos, asambleas, puntos de información en el barrio
- Medios de comunicación locales: notas de prensa, ruedas de prensa, entrevistas
- Canales alternativos: carteles, vallas, buzoneo, pantallas digitales urbanas
- Colaboradores de comunicación: asociaciones de vecinos, comerciantes, colegios
- Radio y TV local: formatos y frecuencia recomendada

4. PLAN DE PARTICIPACIÓN CIUDADANA
Diseña la estrategia de co-creación:
- Proceso participativo: consulta, co-diseño o solo información
- Plataformas de participación digital: Consul, Decidim u otras
- Jornadas presenciales de participación: formato, convocatoria y dinamización
- Cómo llegar a los ciudadanos menos conectados digitalmente
- Gestión de las aportaciones: cómo responder a todas las propuestas
- Transparencia en el proceso: publicación de resultados y cómo se incorporan

5. COMUNICACIÓN DE DATOS Y TRANSPARENCIA
Genera confianza con datos abiertos:
- Dashboard ciudadano: qué métricas publicar y cómo visualizarlas
- Informes de impacto: frecuencia, formato y canales de distribución
- Datos abiertos: portal open data municipal y cómo comunicarlo
- Rendición de cuentas: cómo informar del uso de recursos públicos
- Gestión de la privacidad: cómo explicar qué datos se recogen y para qué
- Comunicación de incidencias: protocolo de transparencia cuando algo falla

6. GESTIÓN DE CRISIS Y COMUNICACIÓN NEGATIVA
Prepárate para la controversia:
- Identificación de escenarios de riesgo comunicativo
- Protocolo de crisis: quién habla, qué dice y por dónde
- Gestión de desinformación y fake news sobre el proyecto
- Respuesta a críticas en redes sociales: tono y tiempo de respuesta
- Portavocía: quién representa al proyecto y cómo prepararlos
- Post-crisis: cómo recuperar la confianza y aprender del error

7. MEDICIÓN DEL IMPACTO COMUNICATIVO
Define los KPIs de comunicación pública:
- Alcance: ciudadanos impactados por canal
- Engagement: participación en consultas, eventos y redes
- Cobertura mediática: menciones y tono en medios locales
- Satisfacción ciudadana: encuestas de percepción pre y post proyecto
- Adopción del servicio: uso de la nueva app, sistema o servicio implantado
- NPS ciudadano: recomendarías este proyecto a tu familia o vecinos

Incluye un calendario de comunicación para los primeros 6 meses del proyecto con acciones concretas por semana.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Comunicación pública y marketing territorial en smart cities',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de software y APIs para infraestructura de smart city con IA',
                'description'      => 'Diseña la arquitectura técnica de plataformas de ciudad inteligente: gestión de datos urbanos, APIs públicas, integración de sensores IoT y servicios ciudadanos digitales.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de soluciones especializado en smart cities y urbanismo digital, con experiencia en proyectos de ciudad inteligente en Europa. Conoces los estándares FIWARE, los modelos de datos NGSI-LD, la plataforma FIWARE Orion Context Broker y las mejores prácticas de integración de IoT urbano con sistemas de información geográfica (GIS).

Contexto: Estoy desarrollando [o planificando] una plataforma tecnológica de ciudad inteligente para [municipio/proyecto específico]. El alcance incluye [gestión del tráfico, monitorización de calidad del aire, iluminación inteligente, gestión de residuos, parking inteligente, etc.]. Necesito diseñar la arquitectura técnica y el plan de desarrollo.

Objetivo: Diseñar una arquitectura técnica robusta, escalable e interoperable para la plataforma de smart city, siguiendo estándares europeos y las mejores prácticas del sector.

instrucción principal:
Desarrolla la arquitectura técnica completa para la plataforma de smart city:

1. ARQUITECTURA DE LA PLATAFORMA
Define la arquitectura del sistema:
- Capas de la arquitectura: sensores/IoT, conectividad, plataforma de datos, servicios, aplicaciones
- Stack tecnológico recomendado con justificación para cada componente
- Estándares de interoperabilidad: FIWARE, NGSI-LD, CityGML, INSPIRE
- Estrategia multi-cloud vs. infraestructura municipal propia
- Consideraciones de soberanía de datos y cumplimiento con RGPD
- Modelo de gobernanza de datos urbanos

2. CAPA DE SENSORES E IOT
Diseña la infraestructura de captación de datos:
- Tipología de sensores por caso de uso: tráfico, calidad del aire, ruido, residuos
- Protocolos de comunicación: LoRaWAN, NB-IoT, 5G, Zigbee, WiFi
- Gestión de dispositivos IoT: plataformas de device management
- Seguridad en el edge: autenticación de dispositivos y cifrado
- Mantenimiento y gestión del ciclo de vida de los sensores
- Estrategia de despliegue: fases y criterios de cobertura geográfica

3. PLATAFORMA DE DATOS URBANOS
Diseña el corazón del sistema:
- Context Broker (FIWARE Orion): gestión de entidades y datos en tiempo real
- Modelo de datos: entidades según catálogo Smart Data Models
- Datos históricos: Time Series DB (QuantumLeap, InfluxDB)
- Data Lake para análisis avanzado: almacenamiento y procesamiento batch
- Catálogo de datos: CKAN o equivalente para open data municipal
- API gateway: gestión de acceso, autenticación y rate limiting

4. SERVICIOS Y CASOS DE USO
Define los servicios urbanos a implementar:
- Movilidad urbana: tráfico en tiempo real, parking, bicicleta y patinetes
- Medioambiente: calidad del aire, ruido, temperatura, verde urbano
- Energía: iluminación inteligente, consumo de edificios municipales
- Residuos: contenedores inteligentes y optimización de rutas de recogida
- Seguridad: videovigilancia analítica, detección de incidencias
- Participación ciudadana: canal de incidencias, consultas y transparencia

5. APLICACIONES Y PORTALES CIUDADANOS
Diseña la capa de acceso ciudadano:
- App móvil ciudadana: funcionalidades mínimas viables y roadmap
- Portal web de transparencia y datos abiertos
- Dashboard operacional para técnicos municipales
- Portal de desarrolladores: acceso a APIs públicas y documentación
- Integración con servicios digitales existentes: Cl@ve, Carpeta Ciudadana
- Accesibilidad: WCAG 2.1 AA para todos los portales públicos

6. SEGURIDAD Y PRIVACIDAD
Diseña la arquitectura de seguridad:
- Modelo de amenazas: análisis de riesgos específicos de smart city
- Autenticación y autorización: OAuth2, OpenID Connect, gestión de roles
- Cifrado en tránsito y en reposo: estándares y protocolos
- Gestión de datos personales: minimización, seudonimización, retención
- Evaluación de impacto en privacidad (DPIA) para sistemas de videovigilancia
- Plan de respuesta a incidentes de ciberseguridad

7. HOJA DE RUTA DE IMPLEMENTACIÓN
Planifica el despliegue por fases:
- Fase 0 (2 meses): infraestructura base y plataforma de datos
- Fase 1 (4 meses): primeros casos de uso (2-3 servicios prioritarios)
- Fase 2 (6 meses): expansión de servicios y app ciudadana
- Fase 3 (12 meses): plataforma completa y open data
- Criterios de éxito por fase y métricas técnicas
- Modelo de operación y mantenimiento post-implantación

Incluye referencias a proyectos de smart city exitosos en ciudades europeas similares en tamaño y contexto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Arquitectura técnica de plataformas smart city',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño urbano y visualización de proyectos de ciudad inteligente con IA',
                'description'      => 'Usa IA para conceptualizar, visualizar y comunicar proyectos de diseño urbano, espacio público y smart city: renders conceptuales, infografías urbanas y presentaciones para ciudadanos.',
                'prompt_content'   => <<<'EOT'
Actúa como un urbanista y diseñador de espacios públicos especializado en proyectos de ciudad inteligente y regeneración urbana, con experiencia en comunicar proyectos complejos a audiencias técnicas y no técnicas a través de visualizaciones e infografías.

Contexto: Necesito crear materiales visuales para comunicar un proyecto de [transformación urbana / espacio público inteligente / movilidad sostenible / regeneración de barrio]. El proyecto involucra [descripción del proyecto y su alcance]. La audiencia incluye [ciudadanos, técnicos municipales, políticos, inversores].

Objetivo: Diseñar un sistema de visualización y comunicación visual completo que explique el proyecto de forma comprensible, atractiva y que genere apoyo ciudadano e institucional.

instrucción principal:
Desarrolla el sistema visual completo para el proyecto urbano:

1. ESTRATEGIA DE COMUNICACIÓN VISUAL
Define el marco visual del proyecto:
- Identidad visual del proyecto: nombre, concepto gráfico, paleta de colores
- Nivel de abstracción por audiencia: técnico vs. conceptual vs. emocional
- Secuencia narrativa: cómo contar la historia del proyecto visualmente
- Momentos de comunicación: hitos donde se necesitan visualizaciones
- Formatos requeridos: digital, impreso, gran formato, presentación
- Estilo visual: fotorealismo, ilustración, diagram, collage urbano

2. VISUALIZACIONES DEL ESTADO ACTUAL Y FUTURO
Diseña las piezas de comparación antes/después:
- Análisis visual del estado actual: lo que existe y sus problemas
- Visión del futuro: cómo será el espacio transformado
- Fotomontajes conceptuales: descripción detallada de escenas por mostrar
- Renders de atmósfera: personas, actividad, vegetación, luz en distintas horas
- Perspectivas a pie de calle: desde el punto de vista del peatón
- Vista aérea/drone: para contexto urbano y escala del proyecto

3. INFOGRAFÍAS URBANAS
Crea los materiales informativos:
- Infografía de plan de actuación: fases, zonas y cronograma
- Diagrama de movilidad: flujos peatonales, ciclistas y vehículos
- Infografía de beneficios: impacto medioambiental, social y económico
- Mapa de servicios urbanos inteligentes: sensores, cobertura, servicios
- Sección constructiva explicativa: materiales, instalaciones, vegetación
- Infografía de participación ciudadana: resultados de consultas y aportaciones

4. MATERIALES PARA EXPOSICIÓN PÚBLICA
Diseña los soportes para participación ciudadana:
- Paneles de exposición (A1/A0): guión visual y jerarquía de información
- Maqueta conceptual: descripción para fabricación física o 3D
- Visualización interactiva: descripción de una app o web para explorar el proyecto
- Vídeo de presentación: guión visual y storyboard de 3-5 minutos
- Dossier del proyecto para entidades y prensa: estructura y contenidos

5. PRESENTACIONES PARA STAKEHOLDERS
Diseña los decks para cada audiencia:
- Presentación técnica (municipio/arquitectos): plantas, secciones, detalles
- Presentación política (concejales/alcaldía): visión, beneficios e impacto electoral
- Presentación ciudadana (vecinos): enfoque en mejoras cotidianas y proceso
- Presentación a inversores/fondos: ROI social, ROI económico y viabilidad
- Presentación de prensa: 5 imágenes clave y 5 datos esenciales del proyecto

6. SEÑALÉTICA Y COMUNICACIÓN EN OBRA
Diseña la comunicación durante la ejecución:
- Valla de obra: diseño informativo con avance, cronograma y canal de contacto
- Paneles informativos en el barrio: actualizaciones de progreso
- QR de realidad aumentada: visualización de cómo quedará el espacio
- Newsletter de obra: comunicaciones periódicas a vecinos afectados
- Señalización temporal de desvíos y accesos durante la construcción

7. DOCUMENTACIÓN FINAL Y LEGADO VISUAL
Captura el resultado del proyecto:
- Reportaje fotográfico del proyecto terminado: guión de tomas necesarias
- Vídeo de apertura: guión y estructura del vídeo de inauguración
- Publicación del proyecto: estructura de la memoria o libro del proyecto
- Material para premios: cómo documentar el proyecto para convocatorias
- Archivo digital del proyecto: estructura de carpetas y formatos de entrega

Incluye descripción detallada de cada pieza para que pueda ser encargada a un estudio de visualización o producida internamente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Visualización y comunicación de proyectos urbanos',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas B2G de soluciones tecnológicas para smart cities con IA',
                'description'      => 'Diseña la estrategia de ventas para tecnología urbana a ayuntamientos y administraciones públicas: proceso de licitación, relación institucional y propuesta de valor para smart cities.',
                'prompt_content'   => <<<'EOT'
Actúa como un director comercial especializado en ventas B2G (Business to Government) de soluciones tecnológicas para ciudades inteligentes y administraciones públicas locales. Conoces el proceso de contratación pública, los ciclos de decisión en las administraciones y cómo construir relaciones de confianza con interlocutores técnicos y políticos.

Contexto: Trabajo en [empresa tecnológica / startup / consultora] que ofrece soluciones de [smart city: gestión de tráfico, calidad del aire, iluminación inteligente, app ciudadana, etc.] y quiero desarrollar el canal de ventas a ayuntamientos y administraciones públicas de forma estructurada y escalable.

Objetivo: Desarrollar una estrategia de ventas B2G completa que me permita identificar oportunidades, construir relaciones institucionales y ganar contratos públicos de forma ética y efectiva.

instrucción principal:
Crea la estrategia completa de ventas B2G para soluciones de smart city:

1. INTELIGENCIA DE MERCADO PÚBLICO
Identifica y cualifica oportunidades:
- Fuentes de información sobre convocatorias: PLACSP, perfil del contratante, BOE/BOJA
- Criterios de selección de municipios objetivo: tamaño, presupuesto, partido, visión digital
- Identificación de interlocutores clave: Alcaldía, Concejalía de Innovación, Área de IT
- Mapa de influencia: quién decide técnicamente, políticamente y presupuestariamente
- Timing del proceso de compra: cuándo aprueben presupuestos y cuándo licitan
- Análisis de competencia: quién está ganando contratos similares y por qué

2. ESTRATEGIA DE RELACIÓN INSTITUCIONAL
Construye relaciones antes de la licitación:
- Eventos sectoriales: congresos de smart city, jornadas de administración digital
- Asociaciones municipalistas: FEMP, RECI y federaciones autonómicas
- Demostraciones y pilotos: cómo proponer un proyecto piloto gratuito o subvencionado
- Visitas técnicas a municipios de referencia: crear comunidad de práctica
- Webinars y contenidos para técnicos municipales: posicionarte como experto
- Relación con los grupos de innovación de las diputaciones provinciales

3. EL PROCESO DE LICITACIÓN PÚBLICA
Domina el proceso de contratación:
- Tipos de contratos: servicio, suministro, concesión y cuándo aplica cada uno
- Umbrales de licitación: contratos menores, abiertos simplificados y abiertos
- Criterios de adjudicación: precio vs. criterios técnicos y de calidad
- Cómo influir en los pliegos: cuándo y cómo aportar conocimiento técnico
- Plataformas de licitación: cómo monitorizar y alertas automáticas
- Agrupaciones y UTE: cuándo asociarte con otras empresas para licitar

4. LA PROPUESTA TÉCNICA GANADORA
Construye propuestas que destacan:
- Estructura de una oferta técnica ganadora para smart city
- Cómo leer el pliego y adaptar exactamente la propuesta a los criterios
- Casos de éxito y referencias: cómo presentarlas de forma convincente
- Propuesta económica: cómo ser competitivo sin destruir margen
- Diferenciadores técnicos: qué aspectos de tu solución son difícilmente replicables
- Revisión y scoring interno antes de presentar

5. FINANCIACIÓN EUROPEA COMO PALANCA COMERCIAL
Usa los fondos europeos como argumento de venta:
- Fondos FEDER, Horizonte Europa, Plan de Recuperación: cuáles aplican a smart city
- Cómo ayudar al municipio a solicitar fondos para financiar tu solución
- Proyectos europeos (H2020, CEF): cómo participar como proveedor tecnológico
- Convocatorias de la Red de Iniciativas Urbanas y Urban Innovative Actions
- Cómo posicionarte como socio tecnológico en proyectos de innovación pública

6. GESTIÓN POST-ADJUDICACIÓN
Convierte el contrato en relación a largo plazo:
- Kick-off y gestión del proyecto: expectativas y gobernanza
- Comunicación con el municipio durante la ejecución: reporting y hitos
- Gestión de cambios de alcance en contratos públicos
- Extensión y renovación del contrato: cómo anticiparte
- Upselling en administraciones públicas: ampliar el alcance del proyecto
- Casos de éxito para usar en nuevas licitaciones

7. MÉTRICAS Y PIPELINE B2G
Gestiona el ciclo de venta largo:
- Pipeline de administraciones: etapas del funnel B2G y tiempos medios
- KPIs comerciales: número de licitaciones presentadas, tasa de éxito, valor medio
- Ciclo de venta B2G: de 12 a 36 meses desde el primer contacto
- Gestión del equipo comercial en ventas institucionales
- Herramientas de CRM adaptadas al ciclo público
- Presupuesto de ventas: inversión necesaria para ganar contratos públicos

Incluye ejemplos de correos de contacto inicial con técnicos municipales y estructura de propuesta piloto gratuito para abrir puertas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Ventas B2G de tecnología a administraciones públicas',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de producto para servicios digitales ciudadanos y smart city con IA',
                'description'      => 'Define roadmap, métricas y estrategia de producto para apps ciudadanas, plataformas de participación y servicios digitales municipales usando metodologías de product management.',
                'prompt_content'   => <<<'EOT'
Actúa como un Product Manager senior especializado en servicios digitales públicos y plataformas de ciudad inteligente, con experiencia en equipos de transformación digital de administraciones públicas europeas. Conoces las particularidades de diseñar productos para ciudadanos (no clientes), donde la inclusión digital, la accesibilidad y la confianza institucional son críticos.

Contexto: Soy responsable del producto digital [app ciudadana / plataforma de participación / portal de servicios municipales / sistema de gestión urbana] en [municipio / empresa tecnológica que trabaja con administraciones]. Necesito estructurar la visión del producto, el roadmap y el proceso de desarrollo para entregar valor real a los ciudadanos y a la administración.

Objetivo: Desarrollar un framework completo de product management adaptado al contexto de servicios digitales públicos y smart city.

instrucción principal:
Crea el framework de product management para servicios digitales ciudadanos:

1. VISIÓN Y ESTRATEGIA DE PRODUCTO
Define el norte estratégico del producto:
- Product vision statement: qué mundo queremos crear con este producto
- Métricas de impacto: cómo medimos éxito en un servicio público
- Objetivos estratégicos por año: OKRs adaptados al contexto público
- Público objetivo: segmentos ciudadanos y sus características
- Principios de diseño: los valores que guían cada decisión de producto
- Restricciones del sector público: normativas, accesibilidad, presupuesto

2. DISCOVERY Y INVESTIGACIÓN CIUDADANA
Entiende las necesidades reales:
- Investigación de usuario con ciudadanos: metodologías adaptadas al sector público
- Cómo reclutar ciudadanos para entrevistas y pruebas de usabilidad
- Análisis de reclamaciones y consultas: datos del CAC como fuente de insights
- Benchmarking de servicios digitales públicos: AEAT, DGT, eIDAS, GovTech europeo
- Datos de uso del servicio actual: qué métricas analizar y cómo interpretarlas
- Panel ciudadano: cómo crear un grupo estable de usuarios de prueba

3. FRAMEWORK DE PRIORIZACIÓN
Decide qué construir primero:
- Modelo de priorización adaptado a servicios públicos: impacto ciudadano vs. complejidad técnica
- Criterios de inclusión: accesibilidad, brecha digital, colectivos vulnerables
- Obligaciones legales y normativas: qué es mandatorio vs. qué es mejora
- Coordinación con otras áreas municipales: dependencias y alineamiento político
- Gestión de las peticiones de los representantes políticos
- Ciclos presupuestarios: cómo alinear el roadmap con los presupuestos anuales

4. ROADMAP DE PRODUCTO PÚBLICO
Estructura el plan de desarrollo:
- Now/Next/Later adaptado al contexto municipal
- Comunicación del roadmap: a técnicos, a políticos y a ciudadanos
- Gestión de expectativas con mandatos políticos de 4 años
- Continuidad del producto entre cambios de gobierno
- Dependencias con proveedores tecnológicos y contratación pública
- Versionado y releases: cómo gestionar actualizaciones en servicios críticos

5. MÉTRICAS DE PRODUCTO PARA EL SECTOR PÚBLICO
Mide el impacto real:
- Métricas de adopción: usuarios activos, tasa de digitalización del trámite
- Métricas de satisfacción: CSAT, CES y NPS ciudadano
- Métricas de inclusión: porcentaje de ciudadanos que pueden usar el servicio
- Métricas de eficiencia: reducción de tiempo de tramitación, costes municipales
- Métricas de accesibilidad: cumplimiento WCAG y uso por colectivos vulnerables
- Reporting a stakeholders: cómo presentar datos a concejales y técnicos

6. DISEÑO CENTRADO EN EL CIUDADANO
Aplica UX para servicios públicos:
- Principios de Gobierno Digital: GDS, 18F y estándares europeos
- Accesibilidad: WCAG 2.1 AA como requisito, no opción
- Diseño para la brecha digital: ciudadanos mayores y con menor alfabetización digital
- Multilingüismo: gestión de idiomas oficiales y lenguas cooficiales
- Diseño de formularios: buenas prácticas para trámites administrativos
- Test de usabilidad con ciudadanos: protocolo y selección de participantes

7. GOBERNANZA Y OPERACIÓN DEL PRODUCTO
Gestiona el producto a largo plazo:
- Modelo de gobernanza: quién decide qué en el producto
- Relación con el proveedor tecnológico: gestión del contrato y la calidad
- Gestión de incidencias críticas en un servicio público
- Obsolescencia tecnológica: plan de modernización a largo plazo
- Transferencia de conocimiento: evitar la dependencia de personas o proveedores
- Estrategia open source: cuándo y cómo liberar el código

Incluye una plantilla de PRD (Product Requirements Document) adaptada al contexto de servicios digitales públicos con todos los campos relevantes para el sector.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Product management en servicios digitales públicos y smart city',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del talento y cultura organizativa en el sector público con IA',
                'description'      => 'Diseña programas de captación, formación y retención del talento en administraciones públicas y empresas de tecnología urbana, adaptados a las particularidades del sector.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de RRHH especializado en transformación cultural y gestión del talento en organizaciones del sector público y empresas de tecnología cívica. Conoces los retos específicos de atraer talento digital a las administraciones, gestionar equipos mixtos (funcionarios y personal laboral) y construir cultura de innovación en entornos altamente regulados.

Contexto: Trabajo en [administración pública / empresa pública / empresa tecnológica que colabora con el sector público] y necesito diseñar una estrategia de RRHH para [atraer talento digital / retener a los mejores técnicos / construir cultura de innovación / gestionar la transformación digital del equipo]. Los principales retos son [burocracia, rigidez salarial, resistencia al cambio, competencia con el sector privado].

Objetivo: Desarrollar una estrategia de gestión del talento adaptada a las particularidades del sector público y la tecnología urbana.

instrucción principal:
Crea la estrategia de RRHH completa para el sector público/tecnología urbana:

1. EMPLOYER BRANDING EN EL SECTOR PÚBLICO
Atrae talento en un entorno competitivo:
- Propuesta de valor al empleado (EVP) específica del sector público
- Qué puede ofrecer la administración que el sector privado no puede (misión, estabilidad, impacto)
- Comunicación del impacto social del trabajo en smart city y urbanismo
- Presencia en eventos tecnológicos: hackathons, conferencias, universidades
- Programa de prácticas con talento universitario
- Storytelling de empleados: cómo usar casos reales de impacto para atraer

2. CAPTACIÓN DE TALENTO DIGITAL
Diseña el proceso de selección:
- Perfiles tech más demandados en smart city: desarrolladores, data scientists, UX
- Adaptación de los procesos de selección pública para atraer perfiles digitales
- Pruebas técnicas: cómo evaluar competencias en un concurso-oposición
- Colaboración con universidades y bootcamps para pipeline de talento
- Proceso de selección en empresas tecnológicas que trabajan con administraciones
- Onboarding técnico en el sector público: las primeras 90 horas

3. RETENCIÓN EN UN ENTORNO DE RIGIDEZ SALARIAL
Retén talento sin poder competir en salario:
- Beneficios no monetarios: flexibilidad, teletrabajo, formación, horario
- Desarrollo profesional: carrera horizontal en el sector público
- Participación en proyectos de impacto europeo (Horizon, Urban Agenda)
- Reconocimiento: cómo valorar la contribución en entornos públicos
- Planes de desarrollo individualizados: qué ofrecer a cada perfil
- Gestión de la frustración: cuando la burocracia desmotiva al talento

4. FORMACIÓN EN TRANSFORMACIÓN DIGITAL
Desarrolla las capacidades del equipo:
- Diagnóstico de brechas de competencias digitales por área
- Plan de upskilling para perfiles tradicionales de la administración
- Formación en metodologías ágiles para gestores públicos
- Cultura de datos: alfabetización en datos para directivos no técnicos
- Seguridad digital y ciberseguridad: obligaciones y buenas prácticas
- Gestión del cambio: cómo preparar al equipo para la transformación

5. CULTURA DE INNOVACIÓN EN EL SECTOR PÚBLICO
Construye capacidad de innovación:
- Laboratorios de innovación pública: cómo crear y sostener un GovLab
- Metodologías ágiles en la administración: Scrum, Kanban y sus adaptaciones
- Design thinking para servicios públicos: cómo aplicarlo realmente
- Gestión del fracaso: cómo crear cultura de experimento en entorno de riesgo
- Hackathons internos: cómo organizar eventos de innovación ciudadana
- Red de innovadores internos: comunidad de práctica transversal

6. GESTIÓN DE EQUIPOS MIXTOS
Lidera equipos con diferentes regímenes laborales:
- Diferencias entre funcionarios, personal laboral y personal externo
- Cómo alinear objetivos en un equipo con motivaciones distintas
- Gestión del conflicto entre personal interno y consultores externos
- Liderazgo sin autoridad formal: influencia en estructuras jerárquicas
- Reuniones efectivas en equipos grandes y dispersos
- Comunicación interna: herramientas para equipos de la administración

7. MÉTRICAS DE RRHH EN EL SECTOR PÚBLICO
Mide el impacto de la estrategia:
- Indicadores de clima laboral específicos del sector público
- Tasa de rotación voluntaria y sus causas
- Satisfacción en el trabajo: encuestas adaptadas al contexto
- Porcentaje de puestos cubiertos con el perfil adecuado
- Tiempo de cobertura de vacantes técnicas
- Impacto de la formación en productividad y calidad del servicio

Incluye ejemplos de iniciativas implementadas con éxito en administraciones públicas europeas como referencia.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'RRHH y talento en sector público y tecnología urbana',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Financiación y rentabilidad de proyectos de smart city con IA',
                'description'      => 'Diseña modelos de financiación para proyectos de ciudad inteligente: fondos europeos, colaboración público-privada, modelos de negocio sostenibles y análisis coste-beneficio.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor financiero especializado en proyectos de inversión pública en infraestructura tecnológica y smart cities, con experiencia en estructuración de fondos europeos, modelos de colaboración público-privada (CPP) y análisis de retorno social de la inversión (SROI) para proyectos urbanos.

Contexto: Soy [responsable municipal / director de proyecto / consultor] y necesito diseñar el modelo financiero para [proyecto de smart city específico: plataforma de datos urbanos, red de sensores IoT, app ciudadana, renovación de iluminación inteligente, etc.]. El presupuesto disponible es limitado y necesito identificar todas las fuentes de financiación posibles.

Objetivo: Desarrollar un modelo financiero completo para el proyecto de smart city que combine financiación pública, europea y privada, con análisis de viabilidad y retorno.

instrucción principal:
Crea el modelo financiero completo para el proyecto de smart city:

1. ANÁLISIS DE COSTE DEL PROYECTO
Estructura el presupuesto completo:
- Costes de inversión (CAPEX): hardware, software, instalación, obra civil
- Costes de operación y mantenimiento (OPEX): anuales durante el ciclo de vida
- Costes de personal: técnicos, gestión de proyecto, formación
- Costes de integración: con sistemas existentes y proveedores externos
- Contingencias y reservas: porcentaje recomendado por tipo de proyecto
- Ciclo de vida del proyecto: ¿cuánto durará hasta necesitar renovación?

2. FUENTES DE FINANCIACIÓN PÚBLICA
Identifica la financiación disponible:
- Fondos FEDER: programas operativos y criterios de elegibilidad smart city
- Plan de Recuperación, Transformación y Resiliencia: componentes relevantes
- Fondo de Transición Justa: para zonas industriales en reconversión
- Programa URBACT: redes de ciudades para aprendizaje e innovación urbana
- Programa LIFE: para proyectos con componente medioambiental
- Subvenciones del Ministerio de Agenda Digital: convocatorias específicas

3. COLABORACIÓN PÚBLICO-PRIVADA
Estructura los modelos de CPP:
- Tipos de CPP: concesión, contrato de servicio, empresa mixta, asociación
- Criterios para elegir el modelo de CPP adecuado
- Risk sharing: cómo distribuir riesgos entre la administración y el privado
- Modelo de pago por disponibilidad vs. modelo de uso
- Contrato de servicios energéticos (ESE): aplicación en iluminación inteligente
- Atraer inversión privada: cómo hacer el proyecto atractivo para el sector

4. MODELOS DE NEGOCIO SOSTENIBLES
Diseña la viabilidad a largo plazo:
- Data monetization: ¿puede el municipio generar ingresos con datos urbanos?
- Modelo de tarifas ciudadanas: cuándo es adecuado cobrar por servicios digitales
- Venta de soluciones replicadas a otros municipios
- Participación en proyectos europeos como fuente de ingresos
- Ahorro como retorno: reducción de costes operativos como justificación
- GreenBonds y bonos sociales: financiación innovadora para proyectos urbanos

5. ANÁLISIS COSTE-BENEFICIO Y SROI
Cuantifica el impacto:
- Metodología de análisis coste-beneficio para proyectos públicos
- Identificación de beneficios tangibles: ahorro energético, reducción de accidentes, etc.
- Beneficios intangibles: calidad de vida, satisfacción ciudadana, cohesión social
- Social Return on Investment (SROI): metodología y métricas
- Valor económico de la reducción de emisiones de CO2
- Benchmark de retornos en proyectos similares europeos

6. GESTIÓN FINANCIERA DEL PROYECTO
Controla la ejecución financiera:
- Estructura de gobernanza financiera del proyecto
- Proceso de justificación de fondos europeos: documentación y plazos
- Control presupuestario: alertas y desviaciones
- Gestión de la tesorería en proyectos plurianuales
- Auditoría de fondos europeos: cómo prepararse
- Cierre financiero del proyecto: liquidación y lecciones aprendidas

7. PRESENTACIÓN A ÓRGANOS DE DECISIÓN
Comunica la viabilidad financiera:
- Informe ejecutivo para el Pleno o Consejo de Administración
- Presentación de riesgos y plan de mitigación
- Escenarios financieros: optimista, base y pesimista
- Hoja de ruta financiera: cuándo hay que decidir y qué
- Indicadores de seguimiento para el mandato político
- Rendición de cuentas: cómo informar del gasto a la ciudadanía

Incluye un ejemplo de tabla de fuentes de financiación con porcentajes típicos para un proyecto de smart city de tamaño medio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Financiación y viabilidad económica de proyectos smart city',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco jurídico de la planificación urbana y los proyectos de smart city con IA',
                'description'      => 'Navega el marco legal de los proyectos de transformación urbana: planeamiento urbanístico, contratación pública tecnológica, propiedad de datos urbanos y normativa de smart city.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho urbanístico, contratación pública y nuevas tecnologías en el contexto de la administración local española y europea. Tienes experiencia asesorando a ayuntamientos y empresas tecnológicas en la implementación de proyectos de smart city, desde la perspectiva legal y de cumplimiento normativo.

Contexto: Necesito asesoramiento legal sobre el marco jurídico aplicable a un proyecto de [planificación urbana inteligente / implementación de infraestructura IoT urbana / app ciudadana con datos personales / sistema de videovigilancia inteligente / plataforma de datos abiertos urbanos]. El proyecto se desarrolla en [tipo de entidad: ayuntamiento / empresa pública / colaboración público-privada].

Objetivo: Obtener un análisis legal completo del marco normativo aplicable y las acciones necesarias para garantizar el cumplimiento legal del proyecto.

instrucción principal:
Desarrolla el análisis legal completo del proyecto de planificación urbana y smart city:

1. MARCO JURÍDICO DEL PLANEAMIENTO URBANÍSTICO
Entiende la normativa urbanística:
- Ley del Suelo estatal: principios y su aplicación a proyectos smart
- Competencias municipales en urbanismo: qué puede decidir el ayuntamiento solo
- Planeamiento general: PGOU, Plan General Estructural y su revisión
- Planeamiento de desarrollo: planes parciales, especiales y de mejora urbana
- Proceso de aprobación de planes: fases, plazos y participación pública
- Información urbanística pública: obligaciones de transparencia

2. CONTRATACIÓN PÚBLICA DE TECNOLOGÍA
Gestiona la adquisición de soluciones tecnológicas:
- Ley de Contratos del Sector Público (LCSP): tipos de contratos tecnológicos
- Umbrales de licitación: contratos menores y sus límites para tecnología
- Licitación de soluciones innovadoras: CPP (Compra Pública Pre-Comercial) y CPIN
- Pliegos de condiciones para contratos tecnológicos: qué incluir
- Propiedad intelectual del software desarrollado para la administración
- Gestión de la renovación y actualización tecnológica en contratos vigentes

3. PROTECCIÓN DE DATOS EN ENTORNOS URBANOS
Cumple con el RGPD en smart city:
- Base jurídica para el tratamiento de datos urbanos por la administración
- Datos de movilidad y tráfico: qué es personal y qué no
- Videovigilancia urbana con IA: regulación específica y limitaciones
- DPIA (Evaluación de Impacto en Protección de Datos) para sistemas IoT
- Derechos de los ciudadanos sobre sus datos urbanos
- Delegado de Protección de Datos (DPD) en el ayuntamiento: obligaciones

4. INTELIGENCIA ARTIFICIAL EN LA ADMINISTRACIÓN PÚBLICA
Navega la nueva normativa de IA:
- Reglamento europeo de IA: clasificación de sistemas de IA urbanos por riesgo
- Sistemas de IA de alto riesgo en smart city: reconocimiento facial, scoring social
- Requisitos para sistemas de IA en administración pública: transparencia y explicabilidad
- Prohibiciones absolutas: qué no puede hacer la IA en el sector público
- Gobernanza de la IA municipal: quién decide y rinde cuentas
- Impugnación de decisiones automatizadas por ciudadanos

5. DATOS ABIERTOS Y PROPIEDAD DE LOS DATOS URBANOS
Gestiona los datos generados en la ciudad:
- Ley de Reutilización de la Información del Sector Público (RISP)
- Propiedad de los datos generados por infraestructura pública
- Datos en posesión de empresas privadas con interés público
- Licencias de datos abiertos: Creative Commons y equivalentes para datos
- Portal de datos abiertos: obligaciones legales de publicación
- Datos de empresas concesionarias: acceso y reutilización por el municipio

6. RESPONSABILIDAD Y SEGURIDAD JURÍDICA
Gestiona los riesgos legales del proyecto:
- Responsabilidad patrimonial de la administración por fallos del sistema
- Seguros y coberturas necesarias para infraestructura inteligente
- Responsabilidad del proveedor tecnológico vs. la administración
- Gestión de incidentes de ciberseguridad: obligaciones de notificación
- Normativa de infraestructuras críticas: aplicación a smart city
- Recurso ciudadano contra sistemas automatizados de la administración

7. NORMATIVA SECTORIAL ESPECÍFICA
Aplica la normativa por tipo de proyecto:
- Movilidad urbana: Ley de Tráfico y normativa de vehículos autónomos
- Energía: normativa de redes eléctricas inteligentes y autoconsumo
- Telecomunicaciones: despliegue de infraestructura 5G y normativa RITEL
- Medioambiente: normativa de calidad del aire y ruido ambiental
- Espacio público: normativa de publicidad y señalización en la vía pública
- Accesibilidad: normativa de accesibilidad universal en servicios digitales

Incluye un checklist de cumplimiento legal para los primeros pasos del proyecto, con advertencia de que esta orientación no sustituye al asesoramiento jurídico específico de cada caso.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Marco legal de urbanismo y smart city en España',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al ciudadano y servicios digitales municipales con IA',
                'description'      => 'Diseña el sistema de atención ciudadana omnicanal para administraciones locales: chatbot, portal de trámites, canal de incidencias y gestión de reclamaciones con IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en transformación digital de la atención ciudadana en administraciones locales, con experiencia en el diseño e implementación de servicios de atención omnicanal que combinan canales presenciales, telefónicos y digitales con herramientas de IA para mejorar la experiencia del ciudadano.

Contexto: El [ayuntamiento / administración local] necesita modernizar la atención ciudadana. Actualmente la mayoría de trámites se hacen en persona o por teléfono, con tiempos de espera largos y horarios limitados. Queremos digitalizar sin excluir a ciudadanos con menor capacidad digital, y usar IA para agilizar la atención sin perder el factor humano.

Objetivo: Diseñar un sistema de atención ciudadana omnicanal y moderno que mejore la experiencia del ciudadano, reduzca cargas administrativas y use la IA de forma responsable.

instrucción principal:
Desarrolla el sistema completo de atención ciudadana con IA:

1. MODELO DE ATENCIÓN CIUDADANA OMNICANAL
Define la arquitectura de canales:
- Canal presencial: rediseño de la oficina de atención y gestión de citas previas
- Canal telefónico: IVR inteligente y protocolo de atención por teléfono
- Canal web: portal de trámites y área de ciudadano digital
- App móvil: funcionalidades mínimas y criterios de inclusión digital
- WhatsApp Business: uso para notificaciones y consultas sencillas
- Redes sociales: gestión de consultas y reclamaciones en Twitter/X y Facebook

2. PORTAL DE TRÁMITES CIUDADANOS
Diseña el self-service digital:
- Inventario de trámites municipales: catalogación y priorización para digitalizar
- Experiencia de usuario en el trámite digital: paso a paso, simplificación
- Identificación digital: Cl@ve, certificado digital, SMS de verificación
- Documentación: cómo solicitar solo lo necesario (principio de minimalidad)
- Estado del expediente: seguimiento en tiempo real por el ciudadano
- Notificaciones: electrónicas y tradicionales según preferencia del ciudadano

3. CHATBOT Y ASISTENTE VIRTUAL MUNICIPAL
Diseña el sistema de IA conversacional:
- Ámbito del chatbot: qué puede y qué no debe responder la IA
- Árbol de conversación para las consultas más frecuentes
- Integración con la base de conocimiento municipal
- Derivación al agente humano: cuándo y cómo hacer el traspaso
- Gestión de la identidad del ciudadano en el chatbot
- Multidioma: gestión de idiomas cooficiales y lenguas de inmigración
- Evaluación de la calidad del chatbot: métricas y proceso de mejora

4. CANAL DE INCIDENCIAS URBANAS
Diseña el sistema de reporte ciudadano:
- App o web de reporte de incidencias: bache, farola, parque, etc.
- Categorización automática de incidencias con IA
- Geolocalización y asignación automática al servicio municipal
- SLA de respuesta por tipo de incidencia
- Comunicación al ciudadano: actualizaciones del estado de su reporte
- Dashboard público de incidencias: transparencia y rendición de cuentas

5. GESTIÓN DE RECLAMACIONES Y SUGERENCIAS
Estructura el proceso de reclamaciones:
- Canal de reclamaciones: formulario, presencial y registro de entrada
- Plazos legales de respuesta y gestión interna
- Clasificación y asignación automática a área competente
- Seguimiento del expediente de reclamación
- Informe de reclamaciones: análisis para mejora continua del servicio
- Mediación: opciones de resolución alternativa antes de la vía contenciosa

6. INCLUSIÓN DIGITAL Y ACCESIBILIDAD
Garantiza que nadie se queda atrás:
- Análisis de la brecha digital en el municipio: quién no puede acceder
- Personas mayores: formación, acompañamiento y canal adaptado
- Personas con diversidad funcional: accesibilidad en todos los canales
- Población con menor alfabetización: lenguaje claro y pictogramas
- Ciudadanos extranjeros: servicio en varios idiomas y apoyo presencial
- Zonas sin conectividad: soluciones para ciudadanos en entorno rural del municipio

7. MÉTRICAS DE ATENCIÓN CIUDADANA
Mide la calidad del servicio:
- Tasa de resolución en primer contacto (FCR) por canal
- Tiempo medio de resolución por tipo de trámite
- CSAT ciudadano: satisfacción con la atención recibida
- Tasa de digitalización: porcentaje de trámites completados online
- Deflexión a autoservicio: reducción de consultas que llegan al agente
- Coste por trámite por canal: justificación de la inversión en digitalización

Incluye un caso de uso concreto de implementación de chatbot municipal con ejemplos de diálogos para las consultas más habituales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Atención ciudadana digital y smart city en administración local',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría freelance en smart cities y transformación digital urbana con IA',
                'description'      => 'Guía para consultores independientes que quieren especializarse en proyectos de smart city: qué servicios ofrecer, cómo posicionarse y cómo conseguir proyectos en el sector público.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor senior con 15 años de experiencia trabajando como independiente en proyectos de smart city, planificación urbana y transformación digital de administraciones públicas. Has trabajado con municipios de todos los tamaños, empresas tecnológicas del sector y organismos europeos de financiación.

Contexto: Soy freelancer con experiencia en [área: urbanismo / tecnología / comunicación / gestión de proyectos / datos / diseño] y quiero especializarme en el nicho de smart cities y transformación digital urbana. Es un sector con proyectos interesantes, financiación europea y crecimiento sostenido, pero no sé por dónde empezar para construir un negocio consultivo en este espacio.

Objetivo: Desarrollar una hoja de ruta completa para construir un negocio de consultoría freelance especializado en smart cities y transformación digital urbana.

instrucción principal:
Crea la guía completa para el consultor independiente en smart cities:

1. EL ECOSISTEMA DE SMART CITIES
Entiende el mercado en profundidad:
- Actores del ecosistema: ayuntamientos, diputaciones, empresas tech, consultoras, fondos europeos
- Proyectos típicos: tipos, tamaños y presupuestos habituales
- Ciclo del proyecto de smart city: desde la idea hasta la implantación y evaluación
- Organismos de referencia: RECI, ITU, IESE Cities in Motion, European Smart Cities
- Eventos y conferencias clave del sector en España y Europa
- Publicaciones y fuentes de conocimiento para mantenerse actualizado

2. TU PROPUESTA DE VALOR COMO CONSULTOR INDEPENDIENTE
Define tu posicionamiento:
- Cómo combinar tu experiencia previa con las necesidades del sector
- Especialización: el riesgo de ser generalista y los beneficios de la especialidad
- Servicios que puede ofrecer un consultor independiente en smart city
- Tu valor diferencial vs. las grandes consultoras (Deloitte, Accenture, IBM)
- Perfil de LinkedIn para el nicho: cómo construir autoridad online
- Portfolio de proyectos: qué mostrar cuando empiezas sin experiencia directa

3. SERVICIOS DE CONSULTORÍA EN SMART CITY
Define tu oferta de servicios:
- Diagnóstico de madurez de smart city: auditorías y planes de acción
- Redacción de estrategias de ciudad inteligente para municipios
- Gestión de proyectos de implementación tecnológica
- Apoyo en licitaciones y pliegos técnicos para administraciones
- Formación interna a equipos municipales en tecnología y datos
- Evaluación y seguimiento de proyectos financiados con fondos europeos
- Facilitación de procesos participativos y co-diseño ciudadano

4. CAPTACIÓN DE CLIENTES EN EL SECTOR PÚBLICO
Encuentra y convierte clientes:
- Cómo entrar en el sector público sin experiencia previa como autónomo
- Colaboración con consultoras: subcontratación y alianzas estratégicas
- Concursos y licitaciones accesibles para consultores independientes
- Red de contactos: cómo construir relaciones en el sector municipal
- Presencia en congresos y foros de smart city: cómo hacerlo con bajo presupuesto
- Contenido especializado: artículos, informes y guías que posicionan

5. MODELOS DE TRABAJO Y PRICING
Estructura tu negocio:
- Tarifa día para consultoría en smart city: rangos del mercado
- Presupuesto por proyecto: cómo estimar el esfuerzo en proyectos públicos
- Retainer mensual: cuándo es posible y con qué tipo de clientes
- Modelo de subcontratación: cuándo contratar a otros para ampliar capacidad
- Gestión del tiempo en múltiples proyectos simultáneos
- Ciclo de facturación con administraciones: demoras y gestión de tesorería

6. GESTIÓN DE PROYECTOS EN EL SECTOR PÚBLICO
Trabaja efectivamente con administraciones:
- Particularidades de trabajar con la administración: tiempos, procesos y cultura
- Gestión de múltiples stakeholders: técnicos, políticos y ciudadanos
- Deliverables típicos: informes, presentaciones, talleres y formaciones
- Revisiones y aprobaciones: cómo gestionar los cambios de alcance
- Gestión del conocimiento: documentación para que el cliente sea autónomo
- Cierre del proyecto y seguimiento: cómo generar referencias y proyectos continuos

7. DESARROLLO PROFESIONAL CONTINUO
Mantente actualizado y crece:
- Certificaciones relevantes: Project Management, GIS, Data Analysis, IA
- Formación continua: universidades, MOOC y programas europeos
- Comunidades de práctica: grupos de profesionales de smart city
- Publicaciones: cómo escribir y dónde publicar sobre smart cities
- Proyectos europeos como fuente de aprendizaje y red de contactos
- De consultor individual a pequeña firma: cuándo y cómo dar el salto

Incluye un plan de acción de 6 meses para conseguir los primeros 2-3 proyectos como consultor independiente en smart cities.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Consultoría freelance especializada en smart cities',
                'vote_score'       => 56,
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
