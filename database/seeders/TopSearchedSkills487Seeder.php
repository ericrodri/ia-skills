<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills487Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Comunicación de sostenibilidad y ESG con IA para marketing',
                'description'      => 'Aprende a usar IA para crear narrativas de sostenibilidad auténticas, reportes ESG comprensibles para todos los públicos y campañas que conecten con consumidores conscientes.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en comunicación de sostenibilidad y marketing ESG con más de diez años de experiencia ayudando a empresas a transformar datos medioambientales y sociales en narrativas de marca poderosas y creíbles.

Tu misión es ayudarme a desarrollar una estrategia integral de comunicación ESG para mi empresa. Necesito crear contenido que sea honesto, verificable y emocionalmente resonante, evitando el greenwashing que puede dañar la reputación corporativa.

**Contexto de mi empresa:**
[Describe aquí tu sector, tamaño de empresa, principales iniciativas de sostenibilidad actuales y audiencias clave: consumidores, inversores, empleados, reguladores]

**Fase 1: Auditoría de mensajes de sostenibilidad**
Antes de crear nuevo contenido, analiza críticamente lo que ya comunicamos:
- Identifica posibles afirmaciones vagas o no verificables en nuestros mensajes actuales
- Señala brechas entre lo que prometemos y lo que medimos realmente
- Propón un marco de credibilidad basado en evidencias concretas y métricas reales
- Sugiere cómo alinear el tono de comunicación con las expectativas del público objetivo

**Fase 2: Arquitectura de mensajes ESG**
Desarrolla una estructura de mensajes diferenciada por audiencia:
- Para consumidores: lenguaje accesible, beneficios tangibles, historias de impacto real
- Para inversores: métricas cuantitativas, reducción de riesgos, alineación con marcos como GRI, SASB o TCFD
- Para empleados: propósito compartido, orgullo de pertenencia, participación en iniciativas
- Para reguladores y medios: cumplimiento normativo, transparencia proactiva, datos auditables

**Fase 3: Calendario de contenidos ESG**
Diseña un plan de publicación trimestral que incluya:
- Hitos del año corporativo ESG (publicación de memoria de sostenibilidad, fechas clave como el Día del Medio Ambiente, compromisos de reducción de huella)
- Formatos por canal: artículos de blog, infografías de impacto, vídeos de proceso, hilos en redes sociales
- Momentos de escucha activa: cómo recoger y responder al feedback de stakeholders sobre nuestra sostenibilidad

**Fase 4: Gestión de la comunicación en momentos de crisis ESG**
Prepara plantillas y protocolos para situaciones complejas:
- Cuando los datos de emisiones no mejoran tan rápido como se prometió
- Cuando un proveedor de la cadena de suministro incumple estándares laborales
- Cuando activistas o medios cuestionan la autenticidad de nuestras afirmaciones

**Fase 5: Métricas de comunicación ESG**
Define indicadores para medir la efectividad de nuestra comunicación:
- Engagement con contenido de sostenibilidad vs. contenido comercial tradicional
- Percepción de autenticidad (encuestas de consumidores, NPS de sostenibilidad)
- Cobertura mediática espontánea de nuestras iniciativas
- Impacto en decisiones de compra atribuibles a valores de sostenibilidad

Para cada sección, proporciona ejemplos concretos de empresas que lo están haciendo bien, los errores más comunes a evitar y sugerencias de prompts adicionales que puedo usar contigo para profundizar en cada área.

Recuerda que la comunicación de sostenibilidad más efectiva no es la más perfecta, sino la más honesta sobre el camino que aún queda por recorrer.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de comunicación ESG para marketing auténtico y sin greenwashing',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Plataformas de reporting ESG con IA para desarrollo de software',
                'description'      => 'Diseña y desarrolla sistemas de recopilación, procesamiento y visualización de datos ESG usando IA, con integración de estándares internacionales como GRI y CSRD.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software especializado en sistemas de datos de sostenibilidad, con experiencia en la implementación de plataformas ESG para empresas medianas y grandes que deben cumplir con normativas europeas como la CSRD (Corporate Sustainability Reporting Directive).

Necesito diseñar y desarrollar una plataforma de reporting ESG. Ayúdame a planificar la arquitectura técnica completa y a resolver los desafíos de ingeniería más complejos de este tipo de sistemas.

**Contexto del proyecto:**
[Describe el tamaño de tu empresa, los marcos de referencia ESG que debes cumplir, los sistemas de datos existentes (ERP, sensores IoT, hojas de cálculo) y el equipo de desarrollo disponible]

**Módulo 1: Ingesta y normalización de datos ESG**
Diseña la capa de datos considerando:
- Fuentes heterogéneas: contadores de energía, facturas de proveedores, registros de RRHH, datos de cadena de suministro
- Procesamiento de datos no estructurados: PDFs de certificados, correos de proveedores, informes de auditoría
- Conversión automática de unidades (kWh a toneladas de CO2 equivalente, galones a litros, monedas locales)
- Manejo de datos incompletos o estimados con indicadores de calidad de datos
- Pipelines de validación automática con reglas de negocio configurables

**Módulo 2: Motor de cálculo de huella de carbono**
Implementa la lógica de cálculo para los tres alcances:
- Alcance 1: emisiones directas de combustión y procesos industriales
- Alcance 2: emisiones indirectas de electricidad consumida (market-based vs. location-based)
- Alcance 3: cadena de valor completa, los 15 categorías del GHG Protocol
- Factores de emisión actualizables: bases de datos como Ecoinvent, DEFRA, EPA
- Cálculo de incertidumbre estadística y rangos de confianza

**Módulo 3: Framework de inteligencia artificial para análisis ESG**
Integra capacidades de IA para:
- Clasificación automática de gastos por categoría ESG usando modelos de lenguaje
- Detección de anomalías en series temporales de consumo (posibles fugas, ineficiencias)
- Generación de narrativas automáticas para el informe de sostenibilidad en múltiples idiomas
- Análisis de sentimiento de noticias relacionadas con la empresa para alertas de riesgo reputacional ESG
- Benchmarking automático contra empresas del sector usando datos públicos

**Módulo 4: Generación de informes normativos**
Automatiza la producción de documentación requerida:
- Mapeado dinámico de datos internos a indicadores GRI, CSRD, TCFD, SASB
- Generación de la doble materialidad requerida por la CSRD
- Exportación en formatos XBRL/iXBRL para presentación regulatoria
- Workflow de revisión y aprobación con pistas de auditoría inmutables
- Versionado de informes con trazabilidad de cambios

**Módulo 5: APIs e integraciones**
Especifica las integraciones prioritarias:
- Proveedores de datos de huella de carbono (Watershed, Persefoni, etc.)
- Plataformas de ESG para inversores (Bloomberg ESG, MSCI)
- Sistemas ERP (SAP, Oracle, Microsoft Dynamics)
- Herramientas de gestión de proveedores para datos de Alcance 3

Para cada módulo, proporciona el stack tecnológico recomendado, los patrones de diseño más adecuados, los principales riesgos técnicos y cómo mitigarlos, y una estimación del esfuerzo de desarrollo en sprints.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Arquitectura de software para plataformas de datos ESG y reporting de sostenibilidad',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de memorias de sostenibilidad e informes ESG con IA',
                'description'      => 'Crea informes de sostenibilidad visualmente impactantes y narrativamente coherentes, transformando datos ESG complejos en diseños accesibles para todos los stakeholders.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de comunicación especializado en informes corporativos de sostenibilidad, con experiencia en la creación de memorias anuales ESG que combinan excelencia visual con claridad informativa y rigor de datos.

Mi objetivo es diseñar una memoria de sostenibilidad que supere los estándares del sector y se convierta en referencia de transparencia y diseño en nuestra industria.

**Contexto del encargo:**
[Describe el sector de tu empresa, el volumen de datos ESG a comunicar, las audiencias principales del informe y si hay guías de marca existentes que respetar]

**Sección 1: Sistema visual para datos de sostenibilidad**
Desarrolla un lenguaje visual específico para ESG:
- Paleta de colores sostenible: cómo usar el verde de forma no cliché, integración de colores corporativos con significado ESG
- Iconografía coherente para los Objetivos de Desarrollo Sostenible (ODS) y categorías ESG
- Jerarquía tipográfica para datos cuantitativos vs. narrativas cualitativas
- Tratamiento fotográfico: directrices para imágenes auténticas que eviten el greenwashing visual
- Sistema de visualización de datos: gráficos de progreso hacia objetivos, comparativas anuales, mapas de materialidad

**Sección 2: Arquitectura de información del informe**
Diseña la estructura editorial completa:
- Portada e introducción ejecutiva: los tres mensajes clave que el CEO debe transmitir
- Doble índice: uno temático (para lectores interesados en áreas concretas) y uno de indicadores GRI (para auditores e inversores)
- Navegación no lineal: cómo diseñar para que cada stakeholder encuentre rápidamente lo que necesita
- Páginas de datos duros vs. páginas de historias de impacto: balance editorial recomendado

**Sección 3: Visualización de métricas ESG complejas**
Resuelve los desafíos de diseño más habituales:
- Cómo representar el Alcance 3 de emisiones sin abrumar visualmente
- Diseño de la matriz de materialidad doble (probabilidad de impacto financiero x impacto en sostenibilidad)
- Visualización del progreso hacia compromisos de largo plazo (net zero 2050) en el informe del año actual
- Tablas de datos extensas: cómo hacerlas escaneables y comprensibles sin simplificar en exceso
- Comparativas sectoriales y benchmarks: cómo mostrar la posición relativa de forma honesta

**Sección 4: Versiones adaptadas por canal**
Planifica las variaciones del informe:
- Versión PDF completa para descarga: navegación hipervinculada, bookmarks por sección
- Resumen ejecutivo de 8-12 páginas para inversores y medios de comunicación
- Micrositio web interactivo: componentes de diseño que traduzcan el PDF a web
- Piezas de redes sociales: infografías extraíbles del informe para LinkedIn y Twitter corporativo
- Presentación de resultados ESG para el consejo de administración

**Sección 5: Revisión y validación del diseño**
Establece criterios de calidad:
- Checklist de accesibilidad (WCAG 2.1) para el PDF y la versión web
- Prueba de legibilidad con representantes de cada audiencia objetivo
- Verificación de que ninguna visualización distorsiona o embellece los datos reales
- Revisión de consistencia entre texto, gráficos y notas al pie

Proporciona referencias visuales concretas de memorias de sostenibilidad ejemplares (Patagonia, Interface, Unilever, Inditex) y explica qué decisiones de diseño específicas las hacen destacar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseño de memorias de sostenibilidad e informes ESG visualmente impactantes',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Argumentación de valor ESG en ventas B2B con IA',
                'description'      => 'Desarrolla argumentarios comerciales que integren la propuesta de valor de sostenibilidad para clientes que priorizan criterios ESG en sus decisiones de compra.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en ventas B2B consultivas con especialización en propuestas de valor ESG, con experiencia ayudando a equipos comerciales a convertir las credenciales de sostenibilidad de sus empresas en argumentos de venta concretos y medibles.

Cada vez más, los departamentos de compras de grandes corporaciones incluyen criterios ESG en sus evaluaciones de proveedores. Necesito desarrollar una metodología de venta que integre nuestra propuesta de valor de sostenibilidad de forma natural y convincente.

**Contexto de mi situación:**
[Describe tu producto o servicio, el perfil de tus clientes objetivo, tus principales credenciales de sostenibilidad actuales y los sectores donde vendes]

**Módulo 1: Diagnóstico del nivel de madurez ESG del cliente**
Aprende a calificar oportunidades desde la perspectiva ESG:
- Preguntas de descubrimiento para entender la política de compras sostenibles del cliente
- Señales de que el ESG es un criterio decisor real vs. una preferencia secundaria
- Identificación de los stakeholders ESG dentro del proceso de compra (Director de Sostenibilidad, Compliance, Finanzas)
- Cómo adaptar la profundidad del discurso ESG según la madurez del interlocutor

**Módulo 2: Traducción de credenciales ESG en valor de negocio**
Conecta sostenibilidad con métricas financieras:
- Ahorro de costes: reducción de consumo energético en la operación, economía circular
- Reducción de riesgos: continuidad de suministro, reputación, cumplimiento regulatorio
- Acceso a capital: cómo nuestras certificaciones mejoran las condiciones financieras del cliente
- Ventaja competitiva: cómo nuestra sostenibilidad refuerza la propuesta de valor del cliente ante sus clientes
- Simplificación del reporting: cómo comprarnos facilita el cumplimiento de la CSRD del cliente

**Módulo 3: Gestión de objeciones ESG en el proceso de venta**
Prepara respuestas a las resistencias más comunes:
- "Los criterios de precio siguen siendo más importantes que el ESG en nuestro comité de compras"
- "Vuestras certificaciones no son las que nuestro departamento de sostenibilidad reconoce"
- "¿Podéis demostrar el impacto real de vuestras afirmaciones de sostenibilidad?"
- "Tenemos dudas sobre el greenwashing: ¿cómo verificamos vuestros datos?"
- "Nuestro proveedor actual también tiene credenciales verdes similares a las vuestras"

**Módulo 4: Propuestas comerciales con sección ESG integrada**
Diseña el formato de propuesta ideal:
- Estructura de la sección de sostenibilidad en la propuesta: longitud, datos, certificaciones
- Cálculo del ROI de sostenibilidad específico para el cliente
- Casos de éxito ESG: formato de presentación de referencias de otros clientes
- Compromisos contractuales de sostenibilidad: qué podemos y no podemos garantizar

**Módulo 5: Herramientas de apoyo a la venta ESG**
Desarrolla materiales de ventas específicos:
- One-pager de credenciales ESG adaptable por sector de cliente
- Calculadora de impacto: herramienta para cuantificar el beneficio ESG de trabajar con nosotros
- Guía de preguntas frecuentes ESG para el equipo comercial
- Plantilla de respuesta a cuestionarios ESG de clientes (cada vez más frecuentes en licitaciones)

Para cada módulo, incluye ejemplos de conversaciones reales, scripts de llamadas y plantillas de correo adaptadas al contexto de la venta ESG B2B.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Argumentarios comerciales ESG para ventas B2B con criterios de sostenibilidad',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Estrategia de producto sostenible y roadmap ESG con IA',
                'description'      => 'Integra criterios de sostenibilidad en el ciclo de vida del producto digital, desde el diseño hasta la medición de impacto, usando IA para priorizar funcionalidades ESG.',
                'prompt_content'   => <<<'EOT'
Actúa como un Product Manager senior especializado en estrategia de producto sostenible, con experiencia integrando criterios ESG en roadmaps de productos digitales y físicos sin comprometer la experiencia de usuario ni los objetivos de negocio.

La sostenibilidad ya no es un añadido opcional en el desarrollo de producto: es un diferenciador competitivo y una exigencia regulatoria creciente. Necesito integrarla de forma sistémica en mi proceso de gestión de producto.

**Contexto de mi producto:**
[Describe el tipo de producto (digital, físico, híbrido), la etapa de desarrollo actual, el equipo disponible y las principales métricas de negocio que gestionas]

**Área 1: Marco de sostenibilidad para decisiones de producto**
Desarrolla un framework de evaluación ESG para el roadmap:
- Cómo añadir una dimensión de impacto ambiental y social al scoring de priorización de funcionalidades
- Métricas de producto sostenible: eficiencia energética del software, durabilidad de hardware, accesibilidad digital
- Integración del análisis del ciclo de vida (LCA) en el proceso de discovery de producto
- Cómo equilibrar la presión de velocidad de desarrollo con el tiempo necesario para decisiones sostenibles

**Área 2: Diseño de producto para la economía circular**
Aplica principios de circularidad al producto:
- Productos digitales: arquitecturas eficientes en energía, dark mode, optimización de transferencia de datos
- Modelos de negocio circulares: suscripción vs. propiedad, reparabilidad, actualización modular
- Diseño para la reutilización de datos: cómo la portabilidad de datos es una característica de sostenibilidad
- Estrategias de extensión del ciclo de vida del producto y reducción de la obsolescencia programada

**Área 3: Medición del impacto ESG del producto**
Define las métricas de sostenibilidad específicas de producto:
- Huella de carbono del uso del producto por usuario (especialmente para productos digitales en la nube)
- Impacto social medible: accesibilidad, inclusión digital, privacidad como derecho
- KPIs de sostenibilidad que complementen los OKRs de negocio tradicionales
- Herramientas de medición: APIs de CO2 de proveedores cloud, herramientas de análisis de accesibilidad

**Área 4: Comunicación de la sostenibilidad del producto**
Conecta las decisiones de producto con la narrativa ESG corporativa:
- Cómo documentar las decisiones de diseño sostenible para el informe ESG de la empresa
- Transparencia con usuarios sobre el impacto ambiental del producto
- Características de sostenibilidad como diferenciador en marketing de producto
- Gestión de las expectativas cuando el producto no puede ser 100% sostenible aún

**Área 5: Roadmap ESG a 12 meses**
Crea un plan de acción concreto:
- Auditoría de sostenibilidad del producto actual: identificar las mejoras de mayor impacto
- Quick wins de sostenibilidad que se pueden implementar en el próximo sprint
- Iniciativas de medio plazo que requieren inversión y cambios de arquitectura
- Hitos regulatorios: funcionalidades necesarias para cumplir con normativas ESG aplicables
- Cómo presentar el roadmap ESG al consejo y a los inversores

Incluye ejemplos de productos que han integrado la sostenibilidad como ventaja competitiva real (Ecosia, Fairphone, Notion con sus compromisos de transparencia) y extrae lecciones aplicables a mi contexto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Integración de criterios ESG en roadmap y estrategia de producto',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Cultura corporativa sostenible y employee engagement ESG con IA',
                'description'      => 'Diseña programas de RRHH que integren la sostenibilidad como parte del propósito corporativo, mejorando el compromiso y la retención del talento consciente.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Personas con especialización en cultura organizacional sostenible, con experiencia diseñando programas de employee engagement vinculados a los objetivos ESG corporativos en empresas de más de 200 empleados.

La sostenibilidad ya es uno de los factores más citados por los candidatos al evaluar empleadores, y un motor clave de la retención de talento de la generación millennial y Z. Necesito convertir nuestros compromisos ESG en una experiencia real para las personas de la organización.

**Contexto organizacional:**
[Describe el tamaño de tu organización, sector, cultura actual y los principales compromisos ESG corporativos vigentes]

**Pilar 1: Propósito sostenible integrado en la cultura**
Alinea el propósito ESG con la identidad de la empresa:
- Cómo traducir los compromisos ESG corporativos a comportamientos esperados en el día a día
- Revisión de los valores corporativos desde la lente de la sostenibilidad
- Narrativa interna: cómo hablar de sostenibilidad sin que suene a marketing corporativo vacío
- Rituales culturales vinculados a hitos ESG: celebraciones de logros ambientales, reconocimientos de iniciativas de empleados

**Pilar 2: Formación y capacitación en sostenibilidad**
Diseña el programa de aprendizaje ESG para la organización:
- Mapa de competencias de sostenibilidad por nivel y función
- Rutas de formación diferenciadas: todos los empleados, managers, equipos ESG, consejo de administración
- Formatos de aprendizaje efectivos: gamificación de hábitos sostenibles, retos de equipo, formación experiencial
- Cómo usar la IA para personalizar el aprendizaje ESG según el rol y el contexto de cada empleado

**Pilar 3: Participación activa en iniciativas de sostenibilidad**
Convierte a los empleados en agentes de cambio:
- Programa de embajadores de sostenibilidad: selección, formación, reconocimiento
- Sistema de ideas de sostenibilidad: cómo recoger, evaluar e implementar propuestas de empleados
- Voluntariado corporativo de impacto real: criterios de selección de causas, medición de impacto
- Contribución de empleados al cálculo de la huella de carbono: movilidad, teletrabajo, hábitos de oficina

**Pilar 4: Integración ESG en los procesos de RRHH**
Incorpora la sostenibilidad en cada momento del ciclo de vida del empleado:
- Employer branding sostenible: cómo comunicar el compromiso ESG en la atracción de talento
- Entrevistas de valores: preguntas para evaluar la afinidad con el propósito sostenible
- Onboarding de sostenibilidad: qué debe saber cada nuevo empleado en sus primeras semanas
- Evaluación de desempeño: cómo incluir indicadores de contribución a objetivos ESG
- Offboarding sostenible: cómo los ex-empleados pueden seguir siendo embajadores de la causa

**Pilar 5: Medición del engagement ESG**
Define métricas de impacto cultural:
- Encuestas de propósito: cómo medir si los empleados se sienten conectados con los valores ESG
- Participación en iniciativas: tasas de voluntariado, uso de beneficios sostenibles
- Retención diferencial: comparar la rotación entre empleados más y menos involucrados en ESG
- Impacto en NPS de empleados de las iniciativas de sostenibilidad

Incluye benchmarks del sector y ejemplos de empresas reconocidas como Great Place to Work por su cultura sostenible (Patagonia, Interface, B Corps destacadas) con lecciones prácticas aplicables.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Programas de RRHH y cultura organizacional vinculados a objetivos ESG',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de inversión ESG y finanzas sostenibles con IA',
                'description'      => 'Domina el análisis de activos bajo criterios ESG, la evaluación de riesgos climáticos en carteras y la integración de métricas de sostenibilidad en modelos financieros.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista de inversiones ESG senior con experiencia en fondos de inversión sostenible, análisis de riesgo climático para carteras institucionales y modelización financiera integrada con métricas de sostenibilidad.

La inversión sostenible ya mueve más de 35 billones de dólares globalmente y las normativas europeas (SFDR, Taxonomía Verde) están redefiniendo cómo se analiza y comunica el rendimiento de las carteras. Necesito dominar este campo con rigor analítico.

**Contexto de mi trabajo:**
[Describe tu rol (analista, gestor de cartera, CFO), el tipo de activos que gestionas, el marco regulatorio aplicable y la madurez actual de tu integración ESG]

**Bloque 1: Fundamentos del análisis financiero ESG**
Construye la base analítica necesaria:
- Diferencias entre inversión ESG, inversión de impacto e inversión responsable: matices y aplicaciones
- Principales proveedores de datos ESG (MSCI, Sustainalytics, Bloomberg, ISS) y cómo interpretar sus ratings
- Limitaciones de los ratings ESG: divergencia entre proveedores, sesgo de tamaño, opacidad metodológica
- Cómo construir un scoring ESG propio cuando los datos de terceros son insuficientes o inconsistentes

**Bloque 2: Integración de riesgos climáticos en el análisis financiero**
Aplica el marco TCFD a tu proceso de inversión:
- Riesgos físicos: cómo cuantificar el impacto de eventos climáticos extremos sobre activos específicos
- Riesgos de transición: valoración del impacto de la descarbonización regulatoria en sectores intensivos
- Análisis de escenarios climáticos: uso de los escenarios del IPCC (1.5°C, 2°C, 4°C) en la valoración de activos
- Stranded assets: identificación y cuantificación de activos que quedarán obsoletos por la transición energética
- Oportunidades de transición: empresas y sectores que se benefician de la economía verde

**Bloque 3: Modelización financiera con variables ESG**
Integra métricas de sostenibilidad en los modelos de valoración:
- Ajuste del coste de capital por riesgo ESG: metodologías y evidencia empírica
- Impacto de las métricas ESG en el EBITDA futuro: regulación de carbono, ahorro energético, rotación de talento
- Modelos de valoración para empresas de energías renovables e infraestructuras verdes
- Due diligence ESG en M&A: cómo los pasivos ambientales y sociales afectan al precio de adquisición

**Bloque 4: Cumplimiento regulatorio europeo**
Navega el marco normativo de finanzas sostenibles:
- Taxonomía Verde Europea: criterios de alineación, Do No Significant Harm (DNSH), salvaguardas mínimas
- SFDR: diferencias entre fondos Artículo 6, 8 y 9, y las implicaciones de cada clasificación
- CSRD y su impacto en la disponibilidad de datos ESG de las empresas en cartera
- Regulación de bonos verdes (EU Green Bond Standard) y criterios de evaluación

**Bloque 5: Reporting y comunicación ESG a inversores**
Diseña los entregables de análisis ESG:
- Estructura del informe de integración ESG para comités de inversión
- Dashboard de métricas de sostenibilidad de cartera: KPIs clave y benchmarks sectoriales
- Comunicación del impacto ESG a inversores institucionales y clientes privados
- Respuesta a cuestionarios ESG de due diligence de potenciales inversores

Incluye casos prácticos de análisis ESG de empresas reales (con datos públicos disponibles) para ilustrar cada metodología.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Análisis de inversión ESG, riesgo climático y finanzas sostenibles',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Compliance ESG europeo y normativas de sostenibilidad con IA',
                'description'      => 'Navega el complejo ecosistema regulatorio ESG europeo (CSRD, Taxonomía, SFDR) y diseña sistemas de cumplimiento normativo para empresas sujetas a obligaciones de reporting de sostenibilidad.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho ambiental corporativo y compliance ESG, con experiencia asesorando a empresas europeas en la implementación de las nuevas obligaciones de reporting de sostenibilidad y en la gestión del riesgo legal derivado de compromisos climáticos.

El ecosistema regulatorio ESG europeo es uno de los más complejos y de más rápida evolución del mundo. Las empresas que no se preparan adecuadamente enfrentan riesgos de sanción, litigios climáticos y pérdida de acceso a financiación. Necesito un mapa completo de las obligaciones y una hoja de ruta para el cumplimiento.

**Contexto de mi empresa:**
[Describe el tamaño (número de empleados, facturación), sector, países donde opera y si cotiza en bolsa o tiene acceso a financiación institucional]

**Capítulo 1: Mapa de obligaciones ESG por perfil de empresa**
Identifica qué normativas aplican a mi organización:
- CSRD (Corporate Sustainability Reporting Directive): cronograma de aplicación por tamaño de empresa
- ESRS (European Sustainability Reporting Standards): las doce normas sectoriales y transversales
- Taxonomía Verde Europea: qué empresas están obligadas a declarar qué porcentaje de su actividad es alineada
- SFDR: aplicación para entidades financieras y fondos de inversión
- Directiva de diligencia debida en sostenibilidad (CSDDD): obligaciones en la cadena de suministro

**Capítulo 2: Sistema de cumplimiento CSRD**
Diseña el programa de implementación de la CSRD:
- Proceso de evaluación de doble materialidad: metodología paso a paso conforme a los ESRS
- Gobierno del reporting ESG: estructura del comité de supervisión, roles y responsabilidades
- Proceso de recopilación de datos: quién aporta qué información y con qué validaciones
- Revisión limitada de aseguramiento (limited assurance): preparación para la auditoría externa
- Ruta hacia el aseguramiento razonable (reasonable assurance) cuando sea obligatorio

**Capítulo 3: Gestión del riesgo legal ESG**
Identifica y mitiga los principales riesgos jurídicos:
- Litigios climáticos: tipología de demandas, jurisdicciones de riesgo, sectores más expuestos
- Greenwashing legal: qué afirmaciones de sostenibilidad pueden generar responsabilidad ante reguladores o consumidores
- Directiva de Alegaciones Ecológicas (Green Claims Directive): requisitos de verificación antes de comunicar
- Due diligence en cadena de suministro: cómo documentar el proceso para minimizar responsabilidad

**Capítulo 4: Contratos y cláusulas ESG**
Adapta la documentación contractual a las nuevas obligaciones:
- Cláusulas ESG en contratos con proveedores: qué pedir, cómo verificar, consecuencias del incumplimiento
- Representaciones y garantías ESG en operaciones de M&A
- Cláusulas de sostenibilidad en contratos de financiación (sustainability-linked loans)
- Acuerdos de compra de energía renovable (PPAs): estructura y riesgos legales

**Capítulo 5: Hoja de ruta de compliance ESG a 3 años**
Planifica la implementación progresiva:
- Evaluación del gap actual respecto a las obligaciones futuras
- Priorización de acciones por riesgo regulatorio y esfuerzo de implementación
- Presupuesto estimado para compliance ESG: tecnología, consultoría, auditoría externa
- Indicadores de madurez del programa ESG: cómo medir el avance del compliance

Proporciona referencias a las fuentes regulatorias oficiales y advierte sobre las áreas de mayor incertidumbre interpretativa donde la normativa aún está en desarrollo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Compliance ESG europeo, CSRD, Taxonomía Verde y gestión de riesgo legal de sostenibilidad',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente sostenible y comunicación ESG con IA',
                'description'      => 'Forma equipos de customer service capaces de responder preguntas sobre sostenibilidad, gestionar expectativas ESG y convertir cada interacción en una oportunidad de reforzar los valores ambientales de la marca.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Customer Experience especializado en marcas de propósito con sólidos compromisos ESG, con experiencia formando equipos de atención al cliente para responder con autenticidad y expertise a preguntas cada vez más exigentes sobre sostenibilidad.

Los consumidores conscientes hacen preguntas muy específicas sobre las prácticas de sostenibilidad de las empresas. Un equipo de CS mal preparado puede dañar en segundos la credibilidad de años de trabajo ESG. Necesito un sistema completo para gestionar estas interacciones.

**Contexto de mi equipo:**
[Describe el tamaño del equipo de CS, los canales que gestionas (email, chat, redes sociales, teléfono), el tipo de producto y los principales compromisos ESG de tu empresa]

**Área 1: Knowledge base de sostenibilidad para CS**
Construye la base de conocimiento que necesita el equipo:
- Preguntas frecuentes sobre sostenibilidad organizadas por tema: materiales, emisiones, packaging, cadena de suministro
- Respuestas verificadas y aprobadas por el equipo ESG corporativo para cada pregunta
- Sistema de actualización: cómo mantener el knowledge base al día cuando cambian los compromisos o datos
- Protocolo de escalado: qué preguntas deben pasar al equipo de sostenibilidad o comunicación
- Alertas: qué afirmaciones nunca debe hacer el equipo de CS sin verificación previa

**Área 2: Formación del equipo en comunicación ESG**
Desarrolla las competencias necesarias:
- Conceptos básicos de sostenibilidad que todo agente de CS debe conocer
- Lenguaje de la sostenibilidad: cómo hablar con precisión sin simplificar en exceso
- Detección de preguntas trampa: clientes que buscan comprometer la credibilidad ESG de la marca
- Empatía con el consumidor ESG: entender la motivación detrás de las preguntas de sostenibilidad
- Role-playing de situaciones difíciles: empresa acusada de greenwashing, incidente en cadena de suministro

**Área 3: Gestión de interacciones ESG en redes sociales**
Protocolo específico para el entorno digital:
- Monitorización de menciones relacionadas con sostenibilidad: herramientas y alertas
- Respuesta a comentarios negativos sobre prácticas ambientales: velocidad, tono, contenido
- Amplificación de historias positivas de impacto: cómo el CS puede ser aliado del marketing ESG
- Gestión de viralizaciones negativas: protocolo de crisis ESG en redes sociales

**Área 4: Métricas de CS vinculadas a ESG**
Integra la sostenibilidad en los KPIs del equipo:
- CSAT y NPS de clientes que preguntan sobre sostenibilidad vs. media general
- Tasa de resolución en primer contacto de dudas ESG
- Calidad de las respuestas ESG: auditorías manuales y asistidas por IA
- Feedback de clientes como fuente de inteligencia ESG: qué preocupa realmente a los consumidores

**Área 5: Tecnología y automatización para CS sostenible**
Usa herramientas para escalar la atención ESG:
- Chatbots especializados en preguntas de sostenibilidad: alcance, limitaciones, configuración
- Integración del knowledge base ESG en herramientas de helpdesk (Zendesk, Intercom, Freshdesk)
- IA para detección de intención ESG en tickets: routing automático hacia agentes especializados
- Análisis de sentimiento en interacciones de sostenibilidad para identificar tendencias

Incluye plantillas de respuesta para las diez preguntas de sostenibilidad más frecuentes en empresas de consumo, con ejemplos de respuestas que equilibran transparencia, precisión y empatía.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestión de atención al cliente en contextos ESG y comunicación de sostenibilidad',
                'vote_score'       => 26,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría de sostenibilidad ESG para freelancers con IA',
                'description'      => 'Construye una práctica freelance de consultoría ESG usando IA como palanca de productividad, desde el posicionamiento como experto hasta la entrega de proyectos de reporting y estrategia.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor independiente de sostenibilidad con seis años de experiencia construyendo una práctica freelance rentable en el ámbito ESG, trabajando con pymes, startups y organizaciones sin ánimo de lucro que necesitan expertise de sostenibilidad sin poder contratar un equipo interno.

La demanda de consultoría ESG está creciendo exponencialmente, pero la mayoría de las empresas no pueden permitirse grandes consultoras. Existe una enorme oportunidad para freelancers especializados que ofrezcan valor real a precios razonables. Quiero construir mi práctica con IA como palanca de productividad.

**Contexto de mi situación:**
[Describe tu formación previa, experiencia en sostenibilidad, el tipo de clientes que quieres trabajar y la etapa actual de tu carrera freelance]

**Módulo 1: Posicionamiento y nicho en consultoría ESG**
Define tu propuesta de valor diferenciada:
- Los cinco nichos más rentables en consultoría ESG para freelancers: reporting CSRD, huella de carbono, cadena de suministro, B Corp, comunicación de sostenibilidad
- Cómo elegir tu especialización basándote en tu experiencia previa y la demanda del mercado
- Perfil de LinkedIn optimizado para atraer clientes ESG: palabras clave, casos de éxito, certificaciones
- Certificaciones que aceleran la credibilidad: GRI, B Corp Leader, TCFD, SASB, curso de Taxonomía Verde

**Módulo 2: Metodología de proyectos ESG con IA**
Desarrolla procesos eficientes para entregar proyectos de calidad:
- Plantilla de diagnóstico ESG inicial para nuevos clientes: preguntas, fuentes de datos, análisis
- Flujo de trabajo de evaluación de materialidad doble asistida por IA
- Sistema de recopilación de datos: formularios, cuestionarios, entrevistas, cuándo usar cada uno
- Uso de Claude para análisis de documentos: informes de proveedores, contratos, políticas existentes
- Generación asistida de borradores de informes ESG: qué automatizar y qué requiere criterio experto

**Módulo 3: Estructura de servicios y tarifas**
Diseña tu catálogo de servicios y modelo de precios:
- Servicios de entrada (200-500€): diagnóstico rápido, taller de concienciación, auditoría de comunicación ESG
- Proyectos de medio alcance (2.000-8.000€): primera memoria de sostenibilidad, cálculo de huella Alcance 1 y 2, proceso de materialidad
- Compromisos de largo plazo (retainer mensual): acompañamiento CSRD, actualización anual de reporting
- Cómo cotizar proyectos ESG: estimación de horas, ajuste por complejidad, valor percibido por el cliente

**Módulo 4: Adquisición de clientes para consultoría ESG**
Construye un flujo constante de proyectos:
- Contenido de autoridad en LinkedIn: tipos de posts que generan leads en sostenibilidad
- Networking en el ecosistema ESG: eventos, certificaciones, asociaciones profesionales
- Alianzas estratégicas: contables, asesores legales y agencias de comunicación como fuente de referidos
- Licitaciones de sostenibilidad: cómo encontrarlas y qué hace ganadoras a las propuestas

**Módulo 5: Operación eficiente de la práctica freelance ESG**
Gestiona el negocio con sistemas ágiles:
- Stack tecnológico para un consultor ESG independiente: herramientas de datos, reporting, gestión de proyectos
- Contratos y protección legal: propiedad intelectual de los informes, limitación de responsabilidad
- Cómo mantenerte actualizado en una normativa ESG en constante evolución
- Comunidad profesional: grupos de consultores ESG independientes donde compartir conocimiento

Incluye un plan de 90 días para lanzar o relanzar tu práctica freelance ESG con los primeros tres clientes y los primeros 10.000€ de ingresos como objetivo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construcción de práctica freelance de consultoría ESG con IA como herramienta de productividad',
                'vote_score'       => 34,
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
