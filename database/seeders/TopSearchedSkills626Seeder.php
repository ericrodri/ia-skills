<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills626Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de activos de propiedad intelectual con IA',
                'description'      => 'Usa IA para crear estrategias de comunicación y marketing que maximicen el valor comercial de patentes, marcas y otros activos de propiedad intelectual.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en marketing estratégico especializado en la comercialización de activos de propiedad intelectual. Necesito desarrollar una estrategia de marketing para comunicar el valor de un portfolio de patentes tecnológicas en el sector de energías renovables y conseguir licenciatarios o compradores potenciales.

Contexto del portfolio de PI:
- 12 patentes activas en España y tramitaciones PCT en marcha
- Tecnologías: sistemas de almacenamiento de energía y gestión inteligente de microrredes
- Propietario: spin-off universitaria con 6 años de trayectoria
- Objetivo: licenciar las patentes a fabricantes del sector energético o atraer inversión para desarrollo propio

Tarea principal: Diseña una estrategia de marketing de propiedad intelectual completa.

Desarrolla los siguientes componentes estratégicos:

1. Posicionamiento del portfolio de patentes:
   - Cómo articular el valor técnico en lenguaje que entienda un director de innovación
   - Diferenciación respecto a patentes competidoras ya licenciadas en el mercado
   - Narrativa de PI: historia de la tecnología, inventores, aplicaciones ya demostradas
   - One-pager ejecutivo del portfolio para primeros contactos

2. Identificación y segmentación de licenciatarios potenciales:
   - Tipología de empresas objetivo: fabricantes de equipos, utilities, integradores de sistemas
   - Criterios de priorización: tamaño, mercados en los que operan, gaps tecnológicos propios
   - Mapa de actores del sector: quién necesita exactamente lo que nuestras patentes resuelven
   - Bases de datos y fuentes para construir la lista de prospección

3. Estrategia de contenido técnico-comercial:
   - White papers técnicos que demuestran el valor sin revelar el know-how protegido
   - Casos de aplicación: qué problemas industriales concretos resuelve cada patente
   - Videos de demostración de prototipos y pruebas de concepto
   - Presentación ejecutiva de 10 diapositivas para reuniones con C-suite

4. Canales y presencia digital:
   - LinkedIn: estrategia para spin-offs tecnológicas (página de empresa + perfiles de investigadores)
   - Participación en eventos del sector: ferias energéticas, congresos de innovación
   - Plataformas de PI: cómo usar IAM Market, Patent Auction, Ocean Tomo para visibilidad
   - Relaciones públicas en medios especializados del sector energético

5. Proceso de contacto y negociación inicial:
   - Secuencia de outreach: primer correo, seguimiento, llamada de presentación
   - NDA: cuándo pedirlo y cómo hacerlo sin frenar el proceso
   - Reunión de presentación técnica: estructura y materiales necesarios
   - Cómo mantener el interés de múltiples prospectos en paralelo

6. Métricas de la estrategia de marketing de PI:
   - Número de prospectos contactados vs. reuniones conseguidas
   - Tiempo medio desde primer contacto hasta carta de intención
   - Valor total del pipeline de licencias en negociación
   - Alcance y engagement del contenido técnico publicado

Incluye ejemplos de mensajes de outreach, estructura del one-pager de patente y recomendaciones de plataformas específicas del ecosistema de PI.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Desarrollar estrategias de marketing para comercializar portfolios de patentes y activos de propiedad intelectual',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Herramientas de búsqueda y análisis de patentes con IA para desarrolladores',
                'description'      => 'Aprende a usar IA para automatizar búsquedas de prior art, analizar el estado de la técnica y detectar libertad de operación antes de desarrollar nuevas funcionalidades.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en inteligencia de patentes con conocimiento técnico en ingeniería de software. Necesito aprender a realizar búsquedas de patentes eficientes para garantizar la libertad de operación (freedom to operate) de un nuevo producto de software que combina IA con procesamiento de lenguaje natural para análisis de documentos legales.

Contexto del desarrollo:
- Producto: plataforma SaaS de análisis automático de contratos legales con IA
- Tecnologías usadas: LLMs, RAG, procesamiento de documentos, clasificación semántica
- Mercados objetivo: España, UE, Estados Unidos
- Fase: antes del lanzamiento comercial, queremos validar que no infringimos patentes de terceros

Tarea principal: Guíame en el proceso completo de análisis de libertad de operación para nuestro producto de software.

Desarrolla los siguientes pasos con detalle técnico-práctico:

1. Fundamentos de patentabilidad del software:
   - Qué puede y no puede patentarse en software según EPO y USPTO
   - Diferencias clave entre la doctrina europea (excluye software "como tal") y la americana
   - Por qué las patentes de software siguen siendo un riesgo real a pesar de las limitaciones
   - Ejemplos de patentes de IA/NLP que han generado litigios recientes

2. Fuentes de búsqueda de patentes gratuitas y de pago:
   - Google Patents: cómo construir consultas booleanas avanzadas por clasificación CPC
   - Espacenet (EPO): búsqueda por familia de patentes, texto completo y clasificación
   - USPTO Patent Full-Text Database: búsqueda por claims y especificaciones
   - Lens.org: herramienta gratuita con capacidades de análisis de portfolios
   - Herramientas de pago: Derwent Innovation, PatSnap, Orbit Intelligence (casos de uso)

3. Estrategia de búsqueda para producto de IA/NLP:
   - Construcción del árbol de búsqueda: descomposición funcional del producto en elementos técnicos
   - Clasificaciones CPC relevantes: G06F40 (NLP), G06N20 (ML), G06F16 (recuperación de información)
   - Búsqueda por palabras clave en títulos, resúmenes y claims
   - Cómo manejar el vocabulario variante en patentes de software (misma idea, distinta terminología)

4. Análisis de libertad de operación (FTO):
   - Cómo leer una patente: estructura, reivindicaciones independientes vs. dependientes
   - Interpretación de claims: cuándo una funcionalidad cae dentro del alcance de una reivindicación
   - Vigencia de patentes: cómo verificar si una patente está en vigor en el mercado de interés
   - Mapa de riesgos: clasificar patentes encontradas por nivel de riesgo (alto/medio/bajo)

5. Respuesta ante patentes de riesgo:
   - Diseño en torno a la patente (design around): cómo modificar el enfoque técnico para evitar la infracción
   - Búsqueda de prior art para invalidar patentes problemáticas
   - Licenciamiento voluntario vs. esperar a la demanda
   - Cuándo es imprescindible contratar a un abogado de patentes

6. Integración de la vigilancia de patentes en el proceso de desarrollo:
   - Búsquedas periódicas: con qué frecuencia revisar nuevas publicaciones
   - Alertas automáticas: Google Patents alerts, Espacenet RSS, servicios de vigilancia
   - Documentación interna: cómo registrar las búsquedas realizadas para demostrar buena fe
   - Formación del equipo de desarrollo: qué deben saber los ingenieros sobre PI

Para cada paso, incluye ejemplos de consultas de búsqueda reales, capturas de pantalla describibles de las interfaces y plantillas para documentar los resultados del análisis.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Realizar búsquedas de patentes y análisis de libertad de operación para productos de software e IA',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Protección de diseños industriales y obra artística con IA',
                'description'      => 'Usa IA para documentar, registrar y defender diseños industriales, obras artísticas e identidades visuales frente a copias e infracciones de derechos de autor.',
                'prompt_content'   => <<<'EOT'
Actúa como un asesor especializado en propiedad intelectual para el sector creativo y del diseño industrial. Necesito entender cómo proteger los activos creativos de un estudio de diseño de producto que crea mobiliario de autor, iconografía de marca y elementos de identidad visual para clientes corporativos.

Tipos de activos creativos a proteger:
- Diseños de mobiliario original (sillas, lámparas, elementos decorativos)
- Logotipos e identidades visuales para clientes
- Ilustraciones y obras artísticas originales
- Patrones, texturas y elementos gráficos repetitivos

Tarea principal: Desarrolla una estrategia integral de protección de la propiedad intelectual para un estudio de diseño creativo.

Analiza en detalle cada tipo de protección disponible:

1. Derechos de autor (copyright) para obras creativas:
   - Qué protege automáticamente el copyright sin necesidad de registro
   - Duración de la protección: vida del autor más 70 años en Europa
   - Cómo acreditar la autoría y la fecha de creación (depósito notarial, plataformas digitales)
   - Alcance de la protección: qué se considera copia y qué es inspiración legítima
   - Derechos morales vs. derechos patrimoniales: qué puedes ceder y qué no

2. Diseño industrial registrado (RCD / DI nacional):
   - Qué diseños son registrables: apariencia externa, sin función técnica determinante
   - Diferencia entre Diseño Comunitario Registrado (RCD) y Diseño Comunitario No Registrado (UCD)
   - Proceso de registro ante la EUIPO: plazos, costes y documentación necesaria
   - Protección en terceros países: sistema de La Haya de la OMPI
   - Novedad e individualidad: requisitos previos y cómo evaluarlos antes de registrar

3. Marcas para elementos de identidad visual:
   - Registro de logotipos como marcas: tipos de marcas (figurativa, mixta, tridimensional)
   - Proceso de registro en OEPM (España) y EUIPO (Unión Europea)
   - Búsqueda de anterioridades: cómo verificar que el logotipo no conflicta con marcas existentes
   - Renovación: la marca hay que renovarla cada 10 años para mantener la protección

4. Contratos de creación y cesión de derechos con clientes:
   - Qué cláusulas son imprescindibles en un contrato de encargo creativo
   - Cesión de derechos vs. licencia: cuándo usar cada figura y sus implicaciones económicas
   - Titularidad de obras por encargo: a quién pertenece el diseño creado para un cliente
   - Cláusulas de protección del nombre del diseñador (crédito autoral)

5. Vigilancia y detección de infracciones:
   - Herramientas de búsqueda inversa de imágenes: Google Images, TinEye, Pinterest Lens
   - Monitorización de plataformas de venta: Amazon, Etsy, AliExpress
   - Alertas de Google para el nombre del estudio y títulos de colecciones
   - Herramientas de vigilancia de marcas y diseños registrados

6. Respuesta ante una infracción detectada:
   - Carta de cese y desistimiento: cuándo enviarla y cómo redactarla
   - Reclamación extrajudicial: mediación y arbitraje como alternativas al juicio
   - Takedown en plataformas digitales: DMCA, formularios de EUIPO, Amazon Brand Registry
   - Cuándo acudir a un abogado y cómo elegir uno especializado en PI creativa

Incluye una checklist de protección para cada nuevo proyecto del estudio y una guía de contratos con las cláusulas mínimas de PI.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Proteger diseños industriales, obras artísticas e identidades visuales frente a copias e infracciones',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Licenciamiento y ventas de patentes tecnológicas con IA',
                'description'      => 'Desarrolla estrategias de negociación y venta para licenciar patentes tecnológicas, incluyendo valoración, estructuración de contratos y gestión del pipeline de licenciatarios.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en comercialización de tecnología y licenciamiento de patentes. Necesito desarrollar un sistema completo para negociar y cerrar acuerdos de licencia de un portfolio de 8 patentes en el sector de semiconductores y sensores IoT, con potenciales licenciatarios en Europa, Estados Unidos y Asia.

Contexto del portfolio:
- 8 patentes activas: 3 en EPO, 5 en USPTO, 2 con tramitaciones PCT pendientes
- Tecnología: sensores de temperatura y presión de ultra-baja potencia para IoT industrial
- Propietario: empresa española de 45 personas, spin-off de un centro de investigación
- Necesidad: generar ingresos por licencias para financiar la siguiente fase de I+D

Tarea principal: Diseña el proceso completo de ventas y negociación de licencias de patentes.

Desarrolla cada etapa del proceso:

1. Valoración del portfolio de patentes:
   - Métodos de valoración: ingresos (royalties esperados), coste (inversión en I+D) y mercado (transacciones comparables)
   - Factores que aumentan el valor: amplitud de las reivindicaciones, mercados cubiertos, vida restante, dificultad de diseño en torno
   - Cómo calcular un royalty razonable: porcentaje sobre precio neto de venta del producto licenciado
   - Estructura de regalías: royalty fijo, escalado por volumen, lump sum inicial + royalties corrientes
   - Tabla de valoración simplificada con rangos para cada patente del portfolio

2. Identificación y cualificación de licenciatarios:
   - Perfil del licenciatario ideal: capacidad de fabricación, mercados de distribución, necesidad tecnológica
   - Fuentes de prospección: análisis de patentes de la competencia, publicaciones técnicas, ferias del sector
   - Señales de interés: empresas que han citado nuestras patentes, que operan en el mismo espacio técnico
   - Proceso de cualificación: evaluar si tienen capacidad financiera para pagar y productiva para explotar

3. Proceso de outreach y presentación inicial:
   - Quién contactar en la empresa objetivo (Director de IP, CTO, Director de Compras de Tecnología)
   - Mensaje de acercamiento inicial: qué revelar y qué guardar para la primera reunión
   - NDA antes de la presentación técnica: modelo de NDA bilateral adaptado a PI
   - Presentación técnica de la patente: estructura para explicarla sin asumir conocimientos legales

4. Negociación de los términos del acuerdo:
   - Variables clave a negociar: exclusividad/no exclusividad, territorio, campo de uso, sublicencias
   - Estructura de pagos: upfront payment, milestone payments, running royalties
   - Mínimos garantizados: cómo protegerse si el licenciatario no explota activamente la patente
   - Auditoria de royalties: derecho a auditar la contabilidad del licenciatario
   - Cláusulas de resolución de conflictos: arbitraje internacional vs. tribunales nacionales

5. Cierre del acuerdo y due diligence:
   - Qué documentación técnica y legal solicita el licenciatario antes de firmar
   - Proceso de due diligence de la patente: cómo preparar el dataroom
   - Negociación de las últimas cláusulas: qué ceder y qué defender
   - Firma y registro del contrato de licencia

6. Gestión post-licencia:
   - Sistema de reporte de ventas y cálculo de royalties
   - Proceso de cobro y seguimiento de pagos
   - Revisión periódica del contrato: actualización ante cambios en el mercado
   - Cómo mantener una relación constructiva con el licenciatario a largo plazo

Incluye plantillas de NDA, estructura del contrato de licencia y herramientas de cálculo de royalties.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Negociar y cerrar acuerdos de licencia de patentes tecnológicas con licenciatarios internacionales',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de portfolio de PI en product management con IA',
                'description'      => 'Integra la gestión de propiedad intelectual en el ciclo de vida del producto: desde la detección de oportunidades de patente hasta la protección de funcionalidades clave frente a la competencia.',
                'prompt_content'   => <<<'EOT'
Actúa como un Product Manager con experiencia en empresas de tecnología que operan en mercados altamente competitivos donde la propiedad intelectual es un activo estratégico. Necesito integrar la gestión de PI en el proceso de desarrollo de producto de manera sistemática, sin frenar la velocidad de iteración del equipo.

Contexto de la empresa:
- Startup B2B SaaS de 80 personas en Series B
- Producto: plataforma de automatización de procesos con componentes de IA propia
- Mercados: España, Francia, Alemania, LATAM
- Situación actual: 2 patentes concedidas, 4 en tramitación, sin proceso sistemático de PI

Tarea principal: Diseña el sistema de gestión de PI integrado en el proceso de product management.

Desarrolla los siguientes componentes del sistema:

1. Integración de PI en el proceso de ideación y discovery:
   - Cómo identificar funcionalidades con potencial de patentabilidad durante el discovery
   - Preguntas de PI en el template de especificación de feature: ¿es técnicamente novedoso? ¿es no obvio?
   - Proceso de disclosure interna: cómo el equipo de ingeniería reporta posibles invenciones al PM y a Legal
   - Ventana de patentabilidad: cuánto tiempo tienes antes de publicar o lanzar la feature

2. Búsqueda de PI como input de la estrategia de producto:
   - Análisis de patentes de la competencia: qué están protegiendo y hacia dónde va su I+D
   - White spaces: áreas tecnológicas donde no hay patentes y podemos establecer ventaja
   - Freedom to operate como criterio de evaluación de funcionalidades en el roadmap
   - Cuándo una patente de la competencia debe influir en el diseño técnico de una feature

3. Proceso de evaluación y priorización de solicitudes de patente:
   - Criterios de decisión: ¿patentamos, mantenemos como secreto industrial o publicamos?
   - Marco de priorización: valor estratégico × fortaleza de la reivindicación × coste de tramitación
   - Comité de PI: quiénes participan, frecuencia de reuniones, proceso de decisión
   - Presupuesto de PI: cómo dimensionarlo como porcentaje del gasto de I+D

4. Portfolio de PI como activo de producto:
   - Cómo usar las patentes en la comunicación con inversores y clientes enterprise
   - PI como barrera de entrada: análisis de qué funcionalidades clave proteger estratégicamente
   - Licenciamiento cruzado: cuándo negociar cross-licenses con competidores o partners
   - Impacto del portfolio de PI en la valoración de la empresa en rondas de inversión

5. Protección de trade secrets y know-how:
   - Qué proteger como secreto industrial vs. qué patentar
   - Medidas técnicas y contractuales para proteger el know-how propietario
   - Non-disclosure agreements con empleados, contractors y partners
   - Procedimientos internos de compartimentación de información sensible

6. Indicadores de PI para el dashboard de producto:
   - Número de disclosures internas por trimestre
   - Solicitudes de patente presentadas vs. target anual
   - Cobertura del portfolio: qué porcentaje de las funcionalidades clave están protegidas
   - Mapa de competencia: patentes de la competencia vs. las nuestras en cada área de producto

Incluye plantillas de disclosure interna, criterios de priorización y un modelo de comité de PI para empresas de tecnología de tamaño medio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Integrar la gestión de propiedad intelectual en el ciclo de vida del producto de manera sistemática y estratégica',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Formación en propiedad intelectual para equipos de innovación con IA',
                'description'      => 'Diseña programas de formación en propiedad intelectual para equipos de I+D, ingeniería y producto, fomentando la cultura de PI y los procesos de disclosure interna.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en formación corporativa especializado en propiedad intelectual y gestión de la innovación. Necesito diseñar un programa de formación en PI para los equipos de una empresa tecnológica mediana (150 personas) que quiere sistematizar la generación y protección de sus activos intelectuales.

Perfiles a formar:
- Ingenieros y desarrolladores de software (60 personas): nivel técnico alto, desconocimiento legal
- Product Managers y diseñadores (20 personas): mentalidad de negocio, pocos conocimientos de PI
- Equipo de ventas y marketing (25 personas): necesitan argumentar el valor de la PI ante clientes
- Dirección y C-suite (8 personas): visión estratégica, tiempo muy limitado

Tarea principal: Diseña el programa completo de formación en PI adaptado a cada perfil de la empresa.

Desarrolla los siguientes componentes del programa:

1. Diagnóstico de la cultura actual de PI:
   - Encuesta de conocimientos previos sobre PI para cada perfil
   - Entrevistas con líderes de equipo para identificar gaps y oportunidades
   - Análisis del proceso actual de generación y captura de ideas innovadoras
   - Mapa de conocimientos actuales vs. conocimientos necesarios por rol

2. Módulo básico para toda la empresa (2 horas):
   - Qué es la PI y por qué importa para la empresa: casos reales del sector
   - Los cuatro pilares: patentes, marcas, derechos de autor, secretos industriales
   - El proceso de disclosure: cómo reportar una posible invención antes de que sea tarde
   - Qué hacer y qué NO hacer: redes sociales, publicaciones, conversaciones con partners

3. Módulo técnico para ingenieros y desarrolladores (4 horas):
   - Cómo leer una patente: estructura, reivindicaciones y alcance de protección
   - Freedom to operate básico: cómo hacer una búsqueda preliminar en Google Patents
   - Protección del código fuente: derechos de autor, licencias open source y compatibilidad
   - Cuándo preguntar al departamento legal antes de compartir código o documentación técnica

4. Módulo estratégico para Product y Negocio (3 horas):
   - PI como ventaja competitiva: patentes que han cambiado industrias enteras
   - Integración de PI en el roadmap de producto: cuándo y cómo considerar la PI
   - Análisis de la PI de la competencia como input estratégico
   - Cómo hablar de PI con inversores y clientes enterprise

5. Módulo ejecutivo para la dirección (1,5 horas):
   - Valor financiero de la PI: cómo los activos intangibles se reflejan en la valoración
   - Estrategia de PI: construir para defender, para licenciar o para atraer inversión
   - Gestión de riesgos de PI: litigios, reclamaciones de terceros, due diligence en M&A
   - Decisiones de inversión en PI: cuánto gastar y cuándo

6. Implementación y sostenibilidad del programa:
   - Formato de impartición: presencial, e-learning, microlearning trimestral
   - Gamificación: sistema de puntos por disclosures, búsquedas de PI, alertas detectadas
   - Champions de PI por equipo: formación de embajadores internos
   - Evaluación del impacto: métricas de conocimiento antes/después y cambio en comportamiento

Incluye materiales de ejemplo para cada módulo, preguntas de evaluación y recomendaciones de plataformas de e-learning para el despliegue del programa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar programas de formación en propiedad intelectual adaptados a distintos perfiles de equipos corporativos',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Valoración financiera de activos de propiedad intelectual con IA',
                'description'      => 'Aplica metodologías de valoración financiera a patentes, marcas y otros activos intangibles para transacciones, inversiones, litigios y reporting contable.',
                'prompt_content'   => <<<'EOT'
Actúa como un asesor financiero especializado en la valoración de activos intangibles y propiedad intelectual. Necesito realizar una valoración formal de un portfolio de propiedad intelectual compuesto por patentes, una marca comercial y software propietario, en el contexto de una operación de fusión y adquisición donde el comprador quiere justificar el precio de adquisición ante sus inversores.

Activos a valorar:
- 6 patentes activas en Europa y Estados Unidos (sector biotecnología diagnóstica)
- Marca registrada con 12 años de antigüedad y presencia en 15 países
- Software de análisis clínico propietario con base instalada de 450 hospitales
- Know-how técnico documentado y procesos propietarios de fabricación

Contexto de la operación:
- Precio de adquisición total: 85 millones de euros
- Los activos de PI representan aproximadamente el 60% del valor de la transacción
- Informe de valoración necesario para auditoría y PPA (Purchase Price Allocation) según NIIF 3

Tarea principal: Desarrolla el marco metodológico y los modelos de valoración para cada tipo de activo de PI.

Construye los siguientes componentes del análisis de valoración:

1. Marco metodológico general:
   - Los tres enfoques de valoración de PI: coste, mercado e ingresos
   - Cuándo aplicar cada enfoque según el tipo de activo y el propósito de la valoración
   - Normas internacionales: NIIF 3 (combinaciones de negocio), IAS 38 (activos intangibles)
   - Estándares de valoración: IVSC, ASA, contribuciones de WIPO y OCDE

2. Valoración de patentes (enfoque de ingresos):
   - Método de royalty relief: estimación del royalty de mercado que se evita por ser propietario
   - Proyección de ingresos atribuibles a la patente durante su vida útil restante
   - Tasa de descuento: WACC ajustada por riesgo tecnológico y de obsolescencia
   - Factores de riesgo específicos de patentes: litigios pendientes, citas recibidas, extensiones posibles
   - Modelo de DCF simplificado para las 6 patentes del portfolio

3. Valoración de la marca (método de royalty relief):
   - Determinación del royalty rate de mercado para la categoría (bases de datos de licencias comparables)
   - Proyección de ingresos de la marca por geografía y segmento de producto
   - Tasa de descuento ajustada por riesgo de marca: dependencia de un solo producto, amenazas competitivas
   - Vida útil de la marca: ¿perpetua o con horizonte definido?

4. Valoración del software propietario (enfoque de coste y de ingresos):
   - Coste de reproducción: horas de desarrollo × tarifa × factor de obsolescencia funcional y tecnológica
   - Enfoque de ingresos: margen atribuible al software sobre la base instalada de hospitales
   - Churn rate y tasa de renovación: impacto en el valor presente
   - Comparables de transacciones en sector health-tech para calibrar múltiplos

5. Valoración del know-how y secretos industriales:
   - Por qué el know-how es el activo más difícil de valorar (no hay mercado de referencia)
   - Enfoque de coste: inversión histórica en I+D ajustada por inflación y obsolescencia
   - Enfoque de ingresos: prima de precio o reducción de costes atribuible al know-how
   - Documentación necesaria para que el know-how sea reconocido como activo en una PPA

6. Síntesis y sensibilidad del modelo:
   - Tabla resumen: valor de cada activo y pesos relativos en el total
   - Análisis de sensibilidad: impacto de ±1 punto en la tasa de descuento y ±10% en los ingresos proyectados
   - Reconciliación con el precio de adquisición pactado
   - Resumen ejecutivo del informe de valoración para inversores

Incluye modelos de DCF simplificados, rangos de royalty rates por sector y referencias de bases de datos de transacciones comparables.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Realizar valoraciones financieras de patentes, marcas y software para operaciones corporativas e informes contables',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Redacción y análisis de reivindicaciones de patentes con IA',
                'description'      => 'Usa IA para redactar, analizar y optimizar las reivindicaciones de una solicitud de patente, maximizando el alcance de la protección y minimizando el riesgo de objeciones del examinador.',
                'prompt_content'   => <<<'EOT'
Actúa como un agente de patentes con experiencia en la redacción de solicitudes ante la EPO y la USPTO. Necesito asistencia para redactar y revisar las reivindicaciones de una solicitud de patente en el campo de la inteligencia artificial aplicada al diagnóstico médico por imagen.

Descripción de la invención:
- Un método de análisis automatizado de imágenes de resonancia magnética cerebral para la detección temprana de marcadores de la enfermedad de Alzheimer
- El método utiliza una arquitectura de red neuronal convolucional entrenada con un dataset de 50.000 imágenes etiquetadas
- Novedad principal: la combinación específica de capas de atención espacial con un módulo de calibración de incertidumbre que permite cuantificar la confianza del diagnóstico
- Resultado demostrado: sensibilidad del 94% y especificidad del 91% frente al 78% y 82% del estado de la técnica

Tarea principal: Desarrolla las reivindicaciones de la solicitud de patente y un análisis de su fortaleza.

Trabaja los siguientes elementos de la solicitud:

1. Estructura óptima de las reivindicaciones:
   - Reivindicación independiente de método (claim 1): elementos esenciales de la invención en lenguaje amplio pero defensible
   - Reivindicaciones independientes de sistema y de producto de programa de ordenador (claims 2 y 3)
   - Árbol de reivindicaciones dependientes: especificaciones de las variantes preferidas (al menos 8 reivindicaciones dependientes)
   - Balance entre amplitud de protección y riesgo de invalidación

2. Redacción de la reivindicación independiente principal:
   - Preámbulo (preamble): identificación del campo y del tipo de objeto protegido
   - Cuerpo de la reivindicación: los elementos técnicos necesarios y suficientes para definir la invención
   - Lenguaje funcional vs. estructural: cuándo usar cada uno en reivindicaciones de IA
   - Evitar limitaciones innecesarias que reduzcan el alcance de protección

3. Problemas típicos en patentes de IA ante la EPO:
   - Requisito de aplicación técnica: cómo demostrar que la IA resuelve un problema técnico (no solo abstracto)
   - Inventive step para sistemas de IA: cómo argumentar la no obviedad cuando se usan técnicas conocidas de ML
   - Efectos técnicos demostrables: cómo usar los datos de rendimiento del clasificador en la descripción
   - Comparativa con el estado de la técnica más próximo: estructura del análisis de novedad

4. Diferencias entre EPO y USPTO para patentes de IA:
   - Alice/Mayo en USPTO: cómo superar el rechazo por subject matter inelegible
   - Artículo 52(2) EPO: exclusiones y cómo salvarlas mediante efecto técnico
   - Estrategia de redacción para proteger en ambos sistemas con una única solicitud PCT

5. Análisis de fortaleza de las reivindicaciones redactadas:
   - Test de novedad: búsqueda de prior art y evaluación de cada elemento de la claim independiente
   - Test de actividad inventiva/non-obviousness: argumentación técnica de por qué no es obvio combinar los elementos
   - Vulnerabilidades identificadas en las reivindicaciones y cómo resolverlas
   - Solicitudes de patente de la competencia que podrían limitar nuestras reivindicaciones

6. Descripción y ejemplos de realización:
   - Estructura de la descripción para dar soporte amplio a las reivindicaciones
   - Nivel de detalle técnico necesario en la descripción del modelo de IA
   - Cómo describir los datos de entrenamiento sin revelar know-how confidencial
   - Ejemplos de realización: cuántos y qué nivel de detalle

Proporciona ejemplos concretos de texto de reivindicación en español e inglés, y un análisis crítico de cada elección de redacción.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Redactar y revisar reivindicaciones de patentes en el campo de la inteligencia artificial para solicitudes ante EPO y USPTO',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte a empresas en disputas de propiedad intelectual con IA',
                'description'      => 'Gestiona el soporte a clientes empresariales que enfrentan reclamaciones de infracción de PI o necesitan orientación ante una carta de cese y desistimiento.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en soporte empresarial con conocimiento en propiedad intelectual y gestión de crisis legales. Necesito diseñar un protocolo de atención para clientes de una plataforma SaaS que reciben reclamaciones de infracción de propiedad intelectual (cartas de cese, notificaciones de DMCA, reclamaciones de marcas) y necesitan orientación urgente para proteger su negocio.

Tipos de situaciones de soporte en PI:
- Carta de cese y desistimiento por supuesta infracción de patente de software
- Reclamación de infracción de marca por nombre de producto o dominio similar
- Notificación DMCA por contenido publicado en la plataforma del cliente
- Reclamación de derechos de autor por uso de imágenes, música o código

Tarea principal: Diseña el sistema de soporte para clientes que enfrentan reclamaciones de PI.

Desarrolla los siguientes componentes del sistema:

1. Protocolo de triaje de reclamaciones de PI:
   - Preguntas de diagnóstico inicial para entender la situación del cliente
   - Matriz de urgencia: qué reclamaciones requieren respuesta inmediata (menos de 48 horas) vs. las que permiten más tiempo
   - Señales de alerta: cuándo el cliente necesita un abogado externo urgentemente
   - Documentación que el cliente debe recopilar antes de la primera reunión con legal

2. Respuesta inicial ante una carta de cese y desistimiento (C&D):
   - Qué significa recibir una carta de C&D y qué no significa (no es una demanda judicial)
   - Tiempo para responder: en general 10-30 días según la carta, pero el silencio puede perjudicar
   - Opciones de respuesta: negación, propuesta de licencia, diseño en torno, acuerdo amistoso
   - Errores que el cliente no debe cometer: eliminar pruebas, responder sin asesoramiento legal

3. Guía de respuesta ante reclamaciones DMCA (takedown):
   - Qué es el proceso DMCA: takedown y counter-notice
   - Pasos para presentar una contra-notificación si el cliente cree que la reclamación es infundada
   - Plazos: la plataforma tiene 10-14 días para restaurar el contenido si el reclamante no demanda
   - Casos en que la contra-notificación no es recomendable (cuando el cliente sí infringe)

4. Comunicación con el cliente durante la crisis de PI:
   - Cómo explicar conceptos legales complejos en lenguaje accesible
   - Gestión de la ansiedad del cliente: normalizar la situación sin minimizar el riesgo
   - Actualizaciones de estado: con qué frecuencia comunicar y qué información compartir
   - Cómo decirle al cliente que necesita contratar un abogado (y no puede el equipo de soporte gestionar su caso)

5. Base de conocimiento de PI para el equipo de soporte:
   - Glosario esencial de términos de PI para agentes de soporte
   - Las 20 preguntas más frecuentes de clientes sobre PI con respuestas modelo
   - Límites del soporte: qué orientación puede dar el equipo y qué es consejo legal que requiere abogado
   - Recursos externos recomendados: EUIPO, OEPM, USPTO, organizaciones de ayuda a PYMEs en PI

6. Prevención de disputas: onboarding de PI para nuevos clientes:
   - Checklist de PI que todo cliente debería completar antes de lanzar su producto
   - Recursos formativos sobre PI básica que la plataforma puede ofrecer
   - Alertas automáticas: cuándo notificar a los clientes sobre riesgos detectados en la plataforma
   - Programa de revisión de PI para clientes en crecimiento (prevención proactiva)

Incluye guiones de llamada para situaciones de crisis, plantillas de emails de seguimiento y una base de conocimiento con las respuestas más frecuentes sobre PI.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar protocolos de soporte para clientes empresariales que enfrentan reclamaciones de infracción de propiedad intelectual',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría freelance en propiedad intelectual para startups con IA',
                'description'      => 'Estructura tu práctica como consultor independiente de PI: define tus servicios, metodología de trabajo, tarifas y estrategia para captar startups y PYMEs innovadoras.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocios especializado en el lanzamiento de prácticas independientes en el campo de la propiedad intelectual y la innovación tecnológica. Soy abogado especializado en PI con 10 años de experiencia en un despacho grande y quiero establecer mi consultoría independiente enfocada en startups tecnológicas, scale-ups y empresas de base tecnológica.

Mi perfil profesional:
- Especialización: patentes de software e IA, marcas tecnológicas, contratos de licencia y transferencia de tecnología
- Experiencia: redacción de +200 solicitudes de patente, 50 litigios de PI gestionados, due diligence de PI en 15 operaciones de M&A
- Red de contactos: ecosistema de startups tech, aceleradoras, fondos de venture capital
- Objetivo: ingresos de 8.000 € netos mensuales en el primer año de actividad independiente

Tarea principal: Diseña el modelo de negocio y el plan de lanzamiento de mi consultoría independiente de PI.

Desarrolla los siguientes componentes del plan:

1. Definición del modelo de servicio y especialización:
   - Cartera de servicios: asesoría estratégica de PI, auditorías de portfolio, redacción de patentes, due diligence de PI, formación corporativa
   - Especialización diferenciadora: qué área de PI pocas firmas independientes dominan bien para startups de IA
   - Modelo de entrega: retainer mensual vs. proyectos puntuales vs. éxito compartido (royalties)
   - Servicios que NO ofreceré: litigación (requiere recursos y tiempos incompatibles con operación unipersonal)

2. Fijación de tarifas para consultoría de PI:
   - Tarifa hora de consultoría estratégica de PI
   - Precio de paquetes: auditoría de PI para startup (fijo), acompañamiento en primera solicitud de patente (fijo)
   - Retainer mensual de asesoría continua de PI: qué incluye y cuánto cuesta
   - Política de éxito fee para operaciones de licenciamiento o M&A donde intervengo

3. Posicionamiento y propuesta de valor para startups:
   - Por qué una startup tech necesita un consultor externo de PI vs. un despacho grande
   - Propuesta de valor: experiencia de despacho grande, agilidad y precio de consultor independiente
   - Casos de éxito que puedo usar como argumentario (anonimizados)
   - Diferenciación frente a despachos boutique de PI y consultores generalistas

4. Canales de captación de clientes:
   - Ecosistema de aceleradoras e incubadoras: cómo convertirse en asesor de PI residente
   - Venture capital: por qué los fondos quieren un experto de PI en su red para sus participadas
   - LinkedIn: estrategia de contenido para construir autoridad en PI para startups tech
   - Comunidad tech: participación en eventos, meetups, podcasts del ecosistema emprendedor

5. Estructura legal y administrativa de la consultoría:
   - Forma jurídica óptima: autónomo vs. SL para un consultor de PI independiente
   - Colegiación en el COAPI (Colegio Oficial de Agentes de la Propiedad Industrial)
   - Seguro de responsabilidad civil profesional específico para agentes y asesores de PI
   - Contrato de servicios tipo con cláusulas esenciales para proyectos de PI

6. Plan de los primeros 90 días:
   - Mes 1: marca personal, presencia digital y activación de la red de contactos existente
   - Mes 2: primeros clientes piloto (precio reducido a cambio de testimonio y referidos)
   - Mes 3: sistematización de procesos, primeras tarifas completas y pipeline activo
   - Indicadores de validación: primer cliente de retainer antes del mes 3, 3 proyectos facturados en total

Incluye plantillas de propuesta comercial para startups, un modelo de contrato de servicios de PI y una guía de precios comparativos del mercado de consultoría independiente de PI en España y LATAM.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Lanzar y estructurar una práctica independiente de consultoría en propiedad intelectual orientada a startups tecnológicas',
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
