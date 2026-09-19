<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills563Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de sostenibilidad y ESG con IA',
                'description'      => 'Crea estrategias de marketing auténticas para empresas con compromisos ESG: comunica los avances medioambientales sin caer en el greenwashing, atrae a consumidores concienciados y construye reputación de marca sostenible.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing de sostenibilidad, comunicación ESG (Environmental, Social and Governance) y estrategia de marca responsable. Has liderado campañas de comunicación medioambiental para empresas del IBEX 35 y startups B Corp en los sectores de energía, alimentación y consumo.

Contexto de la empresa:
Trabajo en el departamento de marketing de una empresa de [SECTOR] con compromisos ESG en las siguientes áreas: [COMPROMISOS: reducción de emisiones, economía circular, diversidad, gobierno corporativo, etc.]. El público objetivo son [AUDIENCIA] y el presupuesto de comunicación ESG es [PRESUPUESTO].

Estrategia de marketing ESG que necesito desarrollar:

1. Auditoría de comunicación ESG actual
Analiza los mensajes que la empresa está comunicando actualmente sobre sostenibilidad y detecta posibles riesgos de greenwashing: promesas vagas sin datos, uso de términos no certificados (eco-friendly, verde, natural), falta de evidencias verificables o declaraciones que no cubren toda la cadena de valor. Propón cómo corregir cada punto débil.

2. Narrativa de sostenibilidad auténtica
Ayúdame a construir una narrativa de sostenibilidad honesta y emocionalmente resonante que no oculte las limitaciones actuales pero sí comunique el progreso real. Define el tono de voz: cuándo ser aspiracional, cuándo ser transparente sobre los retos y cómo convertir la vulnerabilidad en fortaleza de marca. Escribe tres versiones del mensaje central para tres audiencias distintas: consumidores finales, inversores y empleados.

3. Campaña de comunicación de impacto medioambiental
Diseña una campaña de seis meses que comunique los avances ESG de la empresa: qué datos y métricas destacar (huella de carbono reducida, litros de agua ahorrados, toneladas recicladas), cómo visualizarlos de forma comprensible para el gran público, y qué canales usar (RRSS, PR, branded content, packaging, eventos) para cada segmento.

4. Contenido ESG para redes sociales
Crea doce publicaciones listas para usar repartidas entre LinkedIn, Instagram y Twitter/X. Cada publicación debe combinar datos reales con storytelling humano, usar hashtags relevantes del movimiento ESG (#sostenibilidad, #ESG, #climateaction, #economiacircular) y tener una llamada a la acción clara. Incluye ideas de formatos visuales: infografías, carruseles, reels y testimonios de empleados.

5. Estrategia de relaciones con medios y stakeholders ESG
Identifica los medios especializados en sostenibilidad donde publicar notas de prensa y artículos de opinión: Corresponsables, El Economista Verde, Expansión Sostenible, etc. Define el perfil de portavoces internos para comunicación ESG y cómo preparar sus mensajes clave. Propón cómo gestionar las preguntas incómodas de periodistas escépticos.

6. Certificaciones y sellos de sostenibilidad
Explica qué certificaciones ESG son más reconocidas y valoradas en España y Europa: B Corp, ISO 14001, EMAS, Sello de Igualdad, EFR, huella de carbono verificada. Define cuáles son más relevantes para el sector de la empresa y cómo comunicarlas en los materiales de marketing sin exagerarlas.

7. Marketing de producto sostenible
Si la empresa tiene productos o servicios con atributos de sostenibilidad, diseña cómo comunicarlos en el packaging, la web y los puntos de venta: qué información incluir obligatoriamente (por regulación), qué información añadir voluntariamente para diferenciarse, y cómo hacer el claim verificable y creíble.

8. Medición del impacto de la comunicación ESG
Define los KPIs de las campañas de sostenibilidad: awareness de los compromisos ESG entre el público objetivo, cambio en la percepción de marca (brand equity), cobertura mediática positiva, crecimiento de la comunidad ESG en redes sociales, y contribución a la captación de talento que valora el propósito empresarial.

Entregables: Guía de estilo de comunicación ESG de la empresa, calendario editorial de 3 meses y checklist anti-greenwashing para revisar cualquier material antes de publicarlo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Comunicación ESG y marketing de sostenibilidad empresarial',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de software para proyectos medioambientales con IA',
                'description'      => 'Diseña y desarrolla soluciones tecnológicas para la gestión medioambiental: calculadoras de huella de carbono, plataformas de reporting ESG, sistemas de monitoreo ambiental y dashboards de sostenibilidad.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en tecnología para la sostenibilidad (GreenTech) con experiencia en el desarrollo de plataformas de reporting ESG, sistemas de monitoreo ambiental IoT, calculadoras de huella de carbono y aplicaciones de economía circular. Conoces los estándares internacionales de reporting sostenible (GRI, TCFD, CSRD).

Contexto técnico:
Necesito desarrollar [TIPO DE SOLUCIÓN: calculadora de huella de carbono / plataforma ESG / dashboard de sostenibilidad / sistema de monitoreo ambiental] para una empresa de [SECTOR] con [NÚMERO] de empleados. El stack tecnológico disponible es [STACK] y el equipo de desarrollo tiene [TAMAÑO] personas.

Arquitectura y desarrollo técnico requeridos:

1. Especificación de requisitos del sistema
Define los requisitos funcionales y no funcionales del sistema de gestión medioambiental. Requisitos funcionales: qué datos debe recoger, procesar y mostrar; flujos de usuario principales; integraciones necesarias con sistemas existentes (ERP, CRM, IoT). Requisitos no funcionales: escalabilidad, disponibilidad, rendimiento, seguridad de datos y cumplimiento regulatorio (CSRD, GRI, TCFD).

2. Arquitectura del sistema de datos ambientales
Diseña la arquitectura de datos para gestionar indicadores ESG: modelo de datos para el seguimiento de emisiones de CO2 por alcance (Scope 1, 2 y 3 según el Greenhouse Gas Protocol), consumo de energía, agua y residuos, datos de diversidad e inclusión, y métricas de gobernanza. Define las fuentes de datos (sensores IoT, hojas de cálculo, APIs de proveedores) y cómo normalizar datos heterogéneos.

3. Calculadora de huella de carbono
Desarrolla la lógica de cálculo de la huella de carbono siguiendo el GHG Protocol: factores de emisión por fuente (electricidad, gas, transporte, viajes de negocio, cadena de suministro), conversión a CO2 equivalente, distinción entre emisiones directas e indirectas. Explica cómo mantener actualizados los factores de emisión con fuentes oficiales (MITERD, IEA, DEFRA).

4. Dashboard de KPIs de sostenibilidad
Diseña la arquitectura del frontend para el dashboard ESG: qué métricas mostrar en tiempo real vs. periódicas, cómo visualizar la evolución temporal de los indicadores, alertas cuando un KPI se desvía del objetivo, comparativas con benchmarks del sector y proyecciones hacia los objetivos de neutralidad de carbono.

5. Integración con estándares de reporting ESG
Explica cómo estructurar la base de datos para que los datos puedan exportarse en los formatos requeridos por los principales marcos de reporting: GRI Standards, TCFD, SASB, y la nueva CSRD europea. Define qué campos son obligatorios en cada estándar y cómo mapear los datos internos a cada marco.

6. APIs para datos medioambientales
Diseña las APIs REST o GraphQL que el sistema necesita: endpoints para registrar actividades con huella de carbono, consultar el inventario de emisiones por período y categoría, exportar informes en PDF/Excel, y recibir datos de sensores IoT. Incluye la especificación de autenticación, rate limiting y versionado de API.

7. Automatización del reporting ESG
Construye flujos de automatización para generar reportes ESG periódicos: recolección automática de datos de sistemas conectados, validación de datos con alertas de anomalías, generación de borradores de informes siguiendo plantillas de los estándares elegidos, y circuito de aprobación interna antes de publicación.

8. Seguridad y auditoría de datos ESG
Define los requisitos de seguridad específicos para datos medioambientales que se publicarán en informes auditados: control de versiones de los datos con trazabilidad de cambios, registro de auditoría inmutable, roles y permisos granulares por departamento, y cifrado de datos sensibles de la cadena de suministro.

Entregables técnicos: Diagrama de arquitectura del sistema, especificación de la API en formato OpenAPI, modelo de datos ER y plan de desarrollo en sprints de dos semanas para un equipo de [TAMAÑO].
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Desarrollo de plataformas GreenTech y sistemas de gestión ESG',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño sostenible y economía circular con IA',
                'description'      => 'Aplica principios de diseño sostenible, ecodiseño y economía circular en productos y servicios: reduce el impacto medioambiental desde la fase de diseño, elige materiales responsables y diseña para la reparabilidad.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador industrial y de producto especializado en ecodiseño, economía circular y materiales sostenibles. Has trabajado con empresas de bienes de consumo, packaging y mobiliario aplicando los principios del diseño para la sostenibilidad: Life Cycle Thinking, Design for Disassembly y biomimetismo.

Contexto del proyecto de diseño:
Estoy diseñando [TIPO DE PRODUCTO O SERVICIO] para una empresa de [SECTOR]. El producto actualmente tiene [DESCRIPCIÓN DE MATERIALES Y PROCESO ACTUAL]. Los objetivos de sostenibilidad son [REDUCIR PLÁSTICO / ALARGAR VIDA ÚTIL / FACILITAR RECICLAJE / ELIMINAR RESIDUOS / OTRO].

Proceso de diseño sostenible que debo seguir:

1. Análisis del ciclo de vida (LCA simplificado)
Realiza un análisis cualitativo del ciclo de vida del producto actual identificando los puntos de mayor impacto: extracción de materias primas, fabricación, transporte, uso y fin de vida. Para cada fase, identifica las tres mejoras de mayor impacto ambiental posibles. Prioriza las intervenciones por potencial de reducción de huella vs. complejidad de implementación.

2. Selección de materiales responsables
Propón alternativas de materiales sostenibles para cada componente del producto: materiales reciclados (PCR - post-consumer recycled), materiales bio-basados (PLA, PHA, bambú, cáñamo, corcho), materiales de origen certificado (FSC, GOTS, Bluesign). Para cada alternativa, evalúa: rendimiento técnico, costo relativo, disponibilidad de proveedores certificados en Europa y fin de vida recomendado.

3. Diseño para la durabilidad y reparabilidad
Diseña el producto siguiendo los principios del Índice de Reparabilidad francés y el futuro Derecho a Reparar europeo: facilidad de desmontaje (conexiones reversibles vs. irreversibles), disponibilidad garantizada de piezas de repuesto durante al menos 7-10 años, diseño modular que permita actualizar componentes individuales, y documentación de reparación accesible para el usuario final.

4. Diseño para el fin de vida (Design for End of Life)
Define cómo el producto debe ser recuperado, reutilizado o reciclado al final de su vida útil: diseño monomaterial o con materiales fácilmente separables, etiquetado claro de materiales para facilitar la clasificación, programa de take-back o depósito de devolución, y diseño para la cascada de materiales (reducir → reutilizar → reciclar → recuperar energía).

5. Packaging sostenible
Si el producto tiene embalaje, rediseña el packaging siguiendo los principios de economía circular: eliminar capas innecesarias, usar materiales monomateriales reciclables, reducir el peso y el volumen para optimizar el transporte, explorar packaging reutilizable o recargable (refill), y garantizar el cumplimiento de las nuevas normativas europeas de packaging (PPWR - Packaging and Packaging Waste Regulation).

6. Certificaciones y ecoetiquetas
Explica qué certificaciones de producto son relevantes para este tipo de producto en el mercado europeo: Ecolabel europeo, Ángel Azul (Alemania), Nordic Swan, Cradle to Cradle Certified, FSC, etc. Define cuáles son más valoradas por los compradores objetivo y cuál es el proceso y costo aproximado de certificación.

7. Comunicación de los atributos sostenibles en el diseño
Diseña cómo comunicar los atributos de sostenibilidad directamente en el producto y su packaging: iconografía clara y verificable, QR codes que llevan a información de verificación, Pasaporte Digital del Producto (requerido por la nueva regulación europea), y cómo diferenciar los mensajes para consumidores vs. compradores B2B.

8. Métricas de diseño sostenible
Define cómo medir el impacto de las decisiones de diseño: reducción de peso del producto, porcentaje de materiales reciclados o bio-basados, índice de reparabilidad calculado, tiempo estimado de vida útil vs. el producto anterior, y porcentaje de materiales recuperables al final de vida. Establece los objetivos de mejora para la siguiente generación del producto.

Formato de entrega: Brief de diseño sostenible con tablas comparativas de materiales, árbol de decisión para la selección de materiales y checklist de ecodiseño para revisar el producto antes de validar el prototipo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Ecodiseño, diseño de producto sostenible y economía circular',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de soluciones de sostenibilidad y ESG con IA',
                'description'      => 'Desarrolla argumentarios de venta, propuestas comerciales y estrategias de cierre para la venta de productos, servicios y consultoría de sostenibilidad ESG a empresas medianas y grandes.',
                'prompt_content'   => <<<'EOT'
Eres un director comercial especializado en la venta de soluciones de sostenibilidad, consultoría ESG, tecnología GreenTech y servicios de compensación de carbono. Conoces en profundidad las motivaciones de compra de los diferentes decisores en una empresa: el Chief Sustainability Officer (CSO), el CFO, el Director de Cumplimiento y el CEO.

Contexto comercial:
Vendo [PRODUCTO / SERVICIO / CONSULTORÍA] de sostenibilidad a empresas de [SECTOR] con [TAMAÑO] de empleados. El precio de venta es [PRECIO] y el ciclo de venta habitual es [DURACIÓN]. Los principales competidores son [COMPETIDORES] y las principales objeciones que encuentro son [OBJECIONES].

Estrategia comercial de sostenibilidad:

1. Mapa de decisores en la compra ESG
Identifica todos los stakeholders involucrados en la decisión de compra de una solución de sostenibilidad: quién inicia la compra (CSO, Director de Relaciones con Inversores, CEO), quién evalúa técnicamente (equipo de sostenibilidad, IT, Legal), quién aprueba el presupuesto (CFO, CEO), y quién puede vetar la decisión. Define el mensaje clave adaptado a cada perfil.

2. Argumentario de venta por motivación
Desarrolla argumentarios diferenciados según la motivación principal del comprador:
- Cumplimiento regulatorio (CSRD, taxonomía verde de la UE, reporting obligatorio): enfoca en el riesgo de incumplimiento y las multas asociadas.
- Presión de inversores (ESG ratings, ISS, MSCI ESG): destaca el impacto en el acceso a capital y el coste de financiación.
- Reputación y marca empleadora: conecta con la atracción de talento y la percepción del consumidor.
- Eficiencia operativa y ahorro de costes: demuestra el ROI financiero directo de las mejoras medioambientales.
- Ventaja competitiva en licitaciones públicas: explica cómo los criterios ESG ya son valorados en los pliegos de contratos públicos europeos.

3. Gestión de objeciones habituales en sostenibilidad
Para cada objeción común, desarrolla una respuesta con datos y ejemplos concretos: "No tenemos presupuesto para esto ahora" — "Ya tenemos un programa interno" — "Necesito verificarlo con mi equipo de sostenibilidad" — "No sé si esto es greenwashing" — "El retorno no está claro". Incluye preguntas de recalificación para cada objeción que te permitan identificar si el cliente realmente no tiene presupuesto o si es solo una objeción de bloqueo.

4. Propuesta económica de valor (Business Case ESG)
Diseña una plantilla de Business Case para presentar al CFO: cuantificación del riesgo regulatorio evitado (multas CSRD, exclusión de fondos ESG), ahorros operativos por eficiencia energética o reducción de residuos, impacto en el coste de capital por mejora de ESG ratings, y valoración del impacto reputacional en la captación de clientes y talento. Incluye los supuestos del modelo y cómo personalizarlos para cada cliente.

5. Proceso de venta consultiva en ESG
Diseña el proceso de venta de 5 etapas adaptado a la complejidad de las soluciones ESG: descubrimiento (diagnóstico de madurez ESG del cliente), análisis (propuesta de hoja de ruta personalizada), presentación de solución (vinculando cada elemento a las motivaciones identificadas), gestión del proceso de aprobación interna (ayudando al champion a vender internamente), y cierre y onboarding.

6. Materiales de venta y presentaciones
Crea el índice y los mensajes clave de: una propuesta ejecutiva de 10 diapositivas para el C-Level, una hoja de producto de una página para el equipo de sostenibilidad, y una FAQ de objeciones para el equipo de ventas. Define los casos de estudio (case studies) que más impactan en la decisión de compra: mismos sector, mismo tamaño de empresa, ROI cuantificado.

7. Prospección y generación de leads ESG
Identifica los disparadores de compra que indican que una empresa está lista para invertir en sostenibilidad: anuncio de objetivos de Net Zero, incorporación de un CSO, nuevo requisito de reporting por parte de inversores, exclusión de un índice ESG, o presión mediática por incidente ambiental. Define cómo monitorizar estos eventos y activar una acción comercial inmediata.

8. Métricas del equipo comercial de ESG
Define los KPIs del equipo de ventas: tasa de conversión por etapa del funnel, ciclo de venta medio, deal size promedio, ratio de upsell a clientes existentes, y NPS de clientes tras el primer año de implementación. Propón incentivos de compensación que alineen al equipo con el impacto real generado, no solo con el revenue.

Entregables: Guía de ventas completa con argumentarios, plantilla de Business Case en blanco y script de primera reunión con guión de preguntas de descubrimiento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Venta consultiva de soluciones de sostenibilidad y consultoría ESG',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management de plataformas ESG con IA',
                'description'      => 'Gestiona el desarrollo de productos y plataformas digitales enfocadas en sostenibilidad: define la hoja de ruta, prioriza funcionalidades de reporting ESG y diseña experiencias de usuario para equipos de sostenibilidad empresarial.',
                'prompt_content'   => <<<'EOT'
Eres un product manager especializado en plataformas SaaS de sostenibilidad, reporting ESG y gestión medioambiental empresarial. Tienes experiencia definiendo productos que ayudan a las empresas a medir, gestionar y comunicar su impacto ambiental, social y de gobernanza.

Contexto del producto:
Gestiono [O QUIERO LANZAR] una plataforma de [TIPO: reporting ESG / huella de carbono / gestión de residuos / compliance medioambiental]. Los clientes objetivo son empresas de [TAMAÑO Y SECTOR]. El equipo de desarrollo tiene [TAMAÑO] personas y el producto está en [FASE].

Trabajo de product management que necesito completar:

1. Investigación de usuarios en el sector ESG
Diseña un plan de investigación de usuarios para entender las necesidades de los equipos de sostenibilidad: perfiles de usuario a entrevistar (CSO, sustainability manager, controller financiero, responsable de comunicación), guión de entrevistas de descubrimiento con las preguntas más importantes, y cómo analizar los resultados para extraer jobs-to-be-done prioritarios.

2. Mapa de dolores del equipo de sostenibilidad
Basándome en el conocimiento del sector, describe los principales puntos de dolor que tienen los equipos de sostenibilidad al gestionar los datos ESG: recolección manual de datos en hojas de cálculo dispersas, falta de trazabilidad y auditoría, dificultad para consolidar datos de filiales internacionales, cambios constantes en los estándares de reporting (GRI, CSRD, TCFD), y dificultad para comunicar los avances al C-Level y a los inversores.

3. Definición del MVP de la plataforma ESG
Define el Producto Mínimo Viable que resuelva el dolor más crítico: qué funcionalidades son imprescindibles para el primer lanzamiento, cuáles pueden esperar a la versión 2.0, y cuáles son nice-to-have pero no diferenciadoras. Usa el framework MoSCoW para priorizar las 20 funcionalidades más relevantes de una plataforma ESG.

4. Roadmap a 18 meses alineado con regulación
Diseña un roadmap de producto que esté sincronizado con el calendario regulatorio europeo: hitos de cumplimiento de la CSRD (Corporate Sustainability Reporting Directive), requisitos de taxonomía verde de la UE, y futuras regulaciones de due diligence en la cadena de suministro. El roadmap debe anticipar las necesidades de los clientes antes de que sean obligatorias.

5. Experiencia de usuario para equipos de sostenibilidad
Define los principios de UX para una plataforma ESG: simplicidad en la entrada de datos (reducir el tiempo de recolección de datos en un 80%), dashboards ejecutivos claros para el C-Level, flujos de aprobación y auditoría para garantizar la calidad de los datos, y exportación de informes que cumplan exactamente con los formatos requeridos por los diferentes marcos de reporting.

6. Integraciones como ventaja competitiva
Define la estrategia de integraciones de la plataforma: con qué sistemas empresariales debe conectarse primero (SAP, Oracle, Microsoft 365, sistemas de facturación energética, APIs de proveedores de datos de emisiones), cómo priorizar las integraciones según el valor para el cliente, y cómo construir un ecosistema de partners tecnológicos.

7. Modelo de precios y empaquetado del producto
Diseña el modelo de precios para la plataforma ESG: ¿por número de empleados de la empresa cliente? ¿por volumen de datos gestionados? ¿por módulos activados? Propón tres planes (básico, profesional, enterprise) con las funcionalidades incluidas en cada uno, justificando por qué cada feature está en cada plan.

8. Métricas de éxito del producto
Define los OKRs del producto para los próximos dos trimestres: adopción (usuarios activos semanales, tiempo en la plataforma), calidad de datos (% de indicadores completados, alertas de anomalías resueltas), valor para el cliente (informes ESG generados, horas ahorradas vs. proceso manual) y negocio (ARR, churn, NPS).

Entregables: Documento de visión del producto, backlog priorizado con las 30 primeras historias de usuario, y propuesta de proceso de discovery continuo con clientes del sector ESG.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Product management de plataformas SaaS de sostenibilidad y reporting ESG',
                'vote_score'       => 25,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de programas ESG en recursos humanos con IA',
                'description'      => 'Diseña e implementa programas de sostenibilidad y ESG desde RRHH: cultura de empresa sostenible, diversidad e inclusión, bienestar laboral y reporting de indicadores sociales para los informes ESG corporativos.',
                'prompt_content'   => <<<'EOT'
Eres un director de recursos humanos especializado en la dimensión social del ESG (Environmental, Social and Governance), cultura corporativa sostenible, programas de diversidad, equidad e inclusión (DEI), y bienestar laboral. Conoces los indicadores sociales requeridos por los marcos de reporting ESG más relevantes: GRI, CSRD, SASB y los ODS de Naciones Unidas.

Contexto de la organización:
Trabajo en RRHH de una empresa de [SECTOR] con [NÚMERO] empleados en [NÚMERO DE PAÍSES]. Los compromisos ESG en la dimensión social incluyen: [COMPROMISOS: reducción de brecha de género, formación en sostenibilidad, bienestar laboral, diversidad en puestos directivos, etc.]. Necesito reportar los indicadores sociales en el informe de sostenibilidad anual.

Programa ESG desde RRHH que necesito desarrollar:

1. Estrategia de diversidad, equidad e inclusión (DEI)
Diseña un programa DEI alineado con los compromisos ESG de la empresa: definición de objetivos medibles (% de mujeres en puestos directivos, brecha salarial de género, diversidad de origen en contrataciones), medidas concretas para alcanzarlos (programas de mentoring, revisión de procesos de selección, formación en sesgos inconscientes), y hoja de ruta a tres años con hitos intermedios.

2. Recolección y reporting de indicadores sociales GRI
Define los indicadores GRI de la dimensión social que la empresa debe reportar: GRI 401 (empleo), GRI 402 (relaciones laborales), GRI 403 (salud y seguridad), GRI 404 (formación y educación), GRI 405 (diversidad e igualdad), GRI 406 (no discriminación), GRI 407 (libertad de asociación). Para cada indicador, explica cómo recolectar el dato, qué sistema de HR lo genera y cómo calcularlo correctamente.

3. Programa de formación en sostenibilidad para toda la plantilla
Diseña un itinerario formativo en sostenibilidad adaptado a cada nivel de la organización: sensibilización básica para toda la plantilla (qué es ESG, por qué importa, cómo contribuye cada persona), formación funcional para áreas con mayor impacto (operaciones, compras, finanzas), y formación avanzada para el equipo de sostenibilidad y los líderes. Define los canales, formatos y la forma de medir la eficacia de la formación.

4. Cultura corporativa sostenible
Explica cómo integrar los valores de sostenibilidad en los procesos de RRHH existentes: criterios de sostenibilidad en las evaluaciones de desempeño, reconocimiento de iniciativas sostenibles de empleados, integración del propósito ESG en el employer branding para la captación de talento, y cómo medir el nivel de cultura sostenible mediante encuestas internas.

5. Bienestar laboral como pilar ESG
Diseña un programa de bienestar laboral que cumpla con los estándares más exigentes: salud física (ergonomía, actividad física, nutrición), salud mental (gestión del estrés, acceso a apoyo psicológico, prevención del burnout), bienestar financiero (educación financiera, seguros complementarios) y bienestar social (comunidad, voluntariado, desconexión digital). Define cómo medir el ROI del programa de bienestar.

6. Gestión de la cadena de valor humana (supply chain social)
Si la empresa tiene proveedores o subcontratistas relevantes, diseña un programa de due diligence social en la cadena de suministro: código de conducta para proveedores, proceso de auditoría social, indicadores de trabajo decente (salario justo, horas razonables, libertad sindical), y cómo gestionar proveedores que no cumplen los estándares.

7. Comunicación interna de los avances ESG
Diseña una estrategia de comunicación interna que mantenga a la plantilla informada y comprometida con los objetivos ESG: qué comunicar (avances, hitos alcanzados, historias de impacto humano), con qué frecuencia, en qué canales (intranet, townhalls, newsletters, pantallas en oficinas) y cómo involucrar a los empleados como embajadores de la sostenibilidad.

8. Preparación del capítulo social del informe ESG
Redacta el esquema del capítulo social del informe de sostenibilidad: estructura de las secciones, datos e indicadores que se incluirán, narrativa de progreso y transparencia sobre los retos pendientes, y cómo asegurar la verificación externa de los indicadores sociales por parte de un auditor independiente.

Entregables: Plantilla de recolección de indicadores sociales GRI, calendario anual de actividades DEI y bienestar, y borrador del capítulo social del informe ESG con los placeholders de datos a rellenar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Programas ESG en RRHH, diversidad e inclusión y reporting social',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Reporting financiero ESG y taxonomía verde con IA',
                'description'      => 'Prepara informes financieros ESG, aplica la taxonomía verde de la UE, calcula el porcentaje de actividades alineadas y cumple con los requisitos de divulgación del reglamento SFDR y la directiva CSRD.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en finanzas sostenibles, reporting ESG y cumplimiento regulatorio europeo. Conoces en profundidad la Taxonomía Verde de la UE, el reglamento SFDR (Sustainable Finance Disclosure Regulation), la Directiva CSRD (Corporate Sustainability Reporting Directive) y los principales marcos de reporting como TCFD, GRI y SASB.

Contexto regulatorio y financiero:
Trabajo en el departamento financiero de una empresa de [SECTOR] cotizada / no cotizada con ingresos de [CIFRA]. La empresa está sujeta a los requisitos de reporting de [NORMATIVAS APLICABLES]. Necesito preparar la divulgación financiera ESG para [PERÍODO].

Análisis y reporting financiero ESG:

1. Aplicación de la Taxonomía Verde de la UE
Explica paso a paso cómo aplicar la Taxonomía Verde de la UE a las actividades de la empresa: identificación de las actividades económicas elegibles (artículo 10-16 del Reglamento Taxonomía), evaluación de la contribución sustancial a uno de los seis objetivos medioambientales, verificación del principio DNSH (Do No Significant Harm) para los otros cinco objetivos, y comprobación de las salvaguardas sociales mínimas. Define los KPIs de taxonomía a reportar: porcentaje de CapEx, OpEx e ingresos alineados con la taxonomía.

2. Cumplimiento con la Directiva CSRD
Describe los requisitos de divulgación de la CSRD que aplican a la empresa según su tamaño y si cotiza en mercados regulados: doble materialidad (impacto de la empresa en el medioambiente Y impacto del medioambiente en la empresa), los Estándares Europeos de Reporting de Sostenibilidad (ESRS), y el formato XBRL digital requerido. Define el proceso interno para cumplir con la CSRD en el primer año de aplicación.

3. Análisis de doble materialidad
Diseña el proceso de evaluación de doble materialidad según la metodología CSRD: identificación del universo de temas ESG potencialmente materiales, evaluación de la materialidad de impacto (impactos reales y potenciales de la empresa en personas y medioambiente), evaluación de la materialidad financiera (riesgos y oportunidades ESG que afectan a los resultados financieros), y cómo involucrar a stakeholders en el proceso. Define qué temas resultan materiales y cómo priorizarlos.

4. Integración del riesgo climático en las finanzas (TCFD)
Aplica el marco TCFD a la empresa: análisis de escenarios climáticos (alineado con 1,5°C y 2°C del Acuerdo de París), identificación y cuantificación de riesgos físicos (inundaciones, sequías, eventos extremos) y riesgos de transición (regulación carbono, cambio en preferencias de consumidores, stranded assets), y cómo integrar estos riesgos en la planificación financiera y los stress tests.

5. Cálculo y reporte de emisiones de carbono (GHG Protocol)
Explica la metodología de cálculo del inventario de gases de efecto invernadero según el GHG Protocol: Scope 1 (emisiones directas de instalaciones propias), Scope 2 (emisiones indirectas por consumo de energía, con metodología de mercado y localización), y Scope 3 (emisiones de la cadena de valor, con las 15 categorías). Define las fuentes de datos para cada alcance y cómo gestionar la incertidumbre en el cálculo.

6. Inversiones verdes y financiación sostenible
Identifica las oportunidades de financiación sostenible disponibles para la empresa: bonos verdes y bonos sociales (Green Bonds, Social Bonds según los principios ICMA), préstamos vinculados a la sostenibilidad (Sustainability-Linked Loans con KPIs ESG negociados), y acceso a fondos y programas de financiación europea (Fondo de Innovación, InvestEU, fondos del BEI). Define los criterios que la empresa debe cumplir para cada instrumento.

7. ESG Ratings y relaciones con inversores ESG
Explica cómo funcionan los principales ratings ESG (MSCI ESG, Sustainalytics, ISS ESG, S&P Global CSA) y cómo mejorar la puntuación de la empresa: qué datos valoran más, cómo responder a los cuestionarios anuales, cómo gestionar la comunicación con los analistas de sostenibilidad de los inversores, y cómo el rating ESG influye en el acceso a inversores institucionales y en el coste de capital.

8. Aseguramiento y verificación externa del informe ESG
Describe el proceso de verificación externa del informe de sostenibilidad: diferencia entre aseguramiento limitado y razonable, qué partes del informe suelen verificarse primero (habitualmente los datos de emisiones y los KPIs financieros ESG), cómo preparar la documentación para la auditoría externa, y cómo gestionar las conclusiones del auditor en el informe final.

Entregables: Checklist de cumplimiento CSRD por año de aplicación, plantilla de análisis de doble materialidad, y calculadora de KPIs de la Taxonomía Verde con los campos requeridos para el reporting.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Reporting financiero ESG, Taxonomía Verde de la UE y cumplimiento CSRD',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cumplimiento normativo medioambiental y ESG con IA',
                'description'      => 'Gestiona el cumplimiento de la normativa medioambiental y ESG: analiza el marco regulatorio aplicable, implementa sistemas de due diligence en la cadena de suministro y prepara la documentación legal para el reporting sostenible.',
                'prompt_content'   => <<<'EOT'
Eres un abogado y experto en compliance medioambiental y regulación ESG con especialización en derecho ambiental europeo, compliance corporativo sostenible y due diligence en la cadena de suministro. Conoces en profundidad la normativa medioambiental española y europea, incluyendo la Ley de Residuos, la normativa de emisiones y las nuevas obligaciones de due diligence en sostenibilidad.

Contexto legal y de compliance:
Trabajo en el departamento legal o de compliance de una empresa de [SECTOR] con operaciones en [PAÍSES]. La empresa está sujeta a [NORMATIVAS PRINCIPALES] y enfrenta los siguientes riesgos de cumplimiento: [RIESGOS].

Análisis de cumplimiento normativo ESG:

1. Mapa regulatorio ESG aplicable a la empresa
Elabora un mapa completo de las normativas ESG aplicables a la empresa según su sector, tamaño y jurisdicción: normativa medioambiental sectorial (IPPC, normativa de residuos, de agua, de suelo), normativa de reporting de sostenibilidad (CSRD, Taxonomía Verde, SFDR si aplica), nueva legislación de due diligence en la cadena de suministro (CS3D - Corporate Sustainability Due Diligence Directive), y normativas sectoriales específicas. Para cada norma, indica el ámbito de aplicación, las obligaciones concretas y las sanciones por incumplimiento.

2. Due diligence de sostenibilidad en la cadena de suministro (CS3D)
Explica los requisitos de la Directiva de Due Diligence en Sostenibilidad Corporativa (CS3D) que se aplicará progresivamente desde 2026: obligaciones de identificar, prevenir, mitigar y remediar impactos adversos en derechos humanos y medioambiente en la cadena de suministro, alcance de la due diligence (proveedores directos e indirectos), mecanismos de denuncia obligatorios, y responsabilidad civil de la empresa por daños causados por proveedores si no se ejerció la debida diligencia.

3. Sistema de gestión medioambiental (ISO 14001 / EMAS)
Diseña el proceso de implantación de un Sistema de Gestión Medioambiental certificado: diferencias entre ISO 14001 y EMAS, fases del proceso de certificación (diagnóstico inicial, definición de política ambiental, identificación de aspectos e impactos significativos, establecimiento de objetivos y programas, auditoría interna y certificación externa), y cómo mantener y mejorar el sistema una vez certificado.

4. Prevención y respuesta ante incidentes medioambientales
Define el protocolo legal de respuesta ante un incidente medioambiental: obligaciones de notificación inmediata a las autoridades competentes (plazos legales, autoridades a notificar según el tipo de incidente), medidas de contención y minimización del daño, responsabilidad civil y penal medioambiental de la empresa y de sus directivos, y cómo gestionar la comunicación con los medios y la comunidad afectada.

5. Fiscalidad verde y tributos ambientales
Analiza el panorama de la fiscalidad medioambiental aplicable a la empresa: impuesto sobre el plástico no reciclado, tributos autonómicos sobre emisiones y vertidos, tasas de gestión de residuos, y las deducciones fiscales disponibles por inversiones en sostenibilidad (deducciones por inversiones medioambientales en el Impuesto de Sociedades). Calcula el impacto fiscal neto de las obligaciones ambientales vs. los beneficios fiscales disponibles.

6. Propiedad intelectual en tecnologías sostenibles
Si la empresa desarrolla o utiliza tecnologías de reducción de emisiones o economía circular, analiza: cómo proteger las innovaciones medioambientales mediante patentes (incluyendo las vías nacionales, europeas y PCT), las licencias obligatorias en tecnologías climáticas promovidas por algunos organismos internacionales, y cómo gestionar el acceso a tecnología de terceros para proyectos de sostenibilidad.

7. Contratos y cláusulas de sostenibilidad
Diseña las cláusulas de sostenibilidad que deben incluirse en los contratos de la empresa: con proveedores (código de conducta ESG, derecho de auditoría, cláusula resolutoria por incumplimiento), con clientes (declaraciones medioambientales verificables, responsabilidad por el fin de vida del producto), y con socios o joint ventures (objetivos ESG compartidos y mecanismo de resolución de conflictos si no se alcanzan).

8. Preparación para la verificación del informe ESG
Explica desde la perspectiva legal cómo preparar la empresa para la verificación obligatoria del informe de sostenibilidad: qué documentos y evidencias debe conservar para cada indicador ESG declarado, cómo gestionar la relación con el auditor de sostenibilidad (diferencias con el auditor financiero), qué responsabilidades legales asume el Consejo de Administración por la información ESG publicada, y cómo gestionar las discrepancias detectadas durante la auditoría.

Nota legal: Este análisis tiene carácter orientativo y general. Cada empresa debe obtener asesoramiento legal específico adaptado a su situación particular, sector de actividad y jurisdicción aplicable.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Compliance medioambiental, due diligence ESG y normativa de sostenibilidad',
                'vote_score'       => 23,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente en empresas sostenibles con IA',
                'description'      => 'Gestiona la relación con clientes de empresas con propósito sostenible: responde preguntas sobre prácticas ESG, gestiona quejas medioambientales, comunica los compromisos de sostenibilidad y convierte el propósito en fidelización.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en atención al cliente y experiencia de cliente (CX) en empresas con propósito sostenible y modelo de negocio responsable. Tienes experiencia en empresas del sector de alimentación ecológica, moda sostenible, energía renovable y productos de economía circular, donde los clientes tienen altas expectativas sobre las prácticas medioambientales y sociales de la empresa.

Contexto del rol:
Trabajo en el equipo de atención al cliente de una empresa de [SECTOR] con un fuerte posicionamiento de sostenibilidad. Los clientes son consumidores que valoran el propósito y el impacto positivo de la empresa. Las consultas y reclamaciones más frecuentes son [TIPOS DE CONSULTAS].

Estrategia de atención al cliente en sostenibilidad:

1. Respuestas a preguntas habituales sobre sostenibilidad
Crea respuestas tipo para las preguntas más frecuentes de clientes concienciados: ¿cómo calculáis vuestra huella de carbono? ¿por qué vuestro producto no es 100% reciclable? ¿de dónde vienen vuestras materias primas? ¿cómo tratáis a los trabajadores de vuestra cadena de suministro? ¿qué certificaciones tenéis? Las respuestas deben ser honestas, específicas con datos reales, y evitar el lenguaje vago o el greenwashing.

2. Gestión de quejas medioambientales
Define el protocolo para gestionar quejas de clientes relacionadas con incumplimientos percibidos de los compromisos de sostenibilidad: un cliente afirma que el packaging no es reciclable como se declara, un cliente denuncia que un proveedor tiene prácticas laborales cuestionables, un cliente cuestiona si los certificados son reales. Para cada tipo de queja, define: cómo escuchar activamente, cómo investigar internamente, cómo responder con transparencia y qué acciones correctivas comunicar.

3. Comunicación de los avances ESG a los clientes
Diseña una estrategia de comunicación proactiva de los progresos ESG a los clientes: qué contar (hitos alcanzados en reducción de emisiones, nuevas certificaciones, mejoras en la cadena de suministro, proyectos de impacto social), cómo contarlo (storytelling con datos, con testimonios de los afectados positivamente, con honestidad sobre lo que falta por mejorar), y en qué momentos del ciclo de vida del cliente comunicarlo (bienvenida, primera compra, renovación, aniversario).

4. Conversión del propósito ESG en fidelización
Explica cómo usar los compromisos de sostenibilidad de la empresa como herramienta de retención y fidelización: programa de lealtad con impacto (donación a causas medioambientales por cada compra, árbol plantado por cada cliente, compensación de carbono incluida), comunidad de clientes con propósito compartido, eventos y talleres de sostenibilidad para clientes premium, y cómo medir el impacto del propósito en el NPS y la tasa de retención.

5. Manejo de clientes que cuestionan el greenwashing
Algunos clientes son escépticos sobre las afirmaciones de sostenibilidad. Define cómo responder sin ponerse a la defensiva: reconocer la legitimidad del escepticismo, ofrecer evidencias verificables (links a certificados, informes auditados, datos con metodología explicada), y cómo convertir a un cliente crítico en un embajador una vez que confía en la empresa.

6. Formación del equipo de CS en ESG
Diseña un programa de formación para el equipo de atención al cliente sobre los compromisos ESG de la empresa: qué necesitan saber para responder con seguridad (los cinco mensajes clave sobre la sostenibilidad de la empresa), qué recursos tienen disponibles para consultar antes de responder (base de conocimiento interna, expertos de referencia), y cómo manejar preguntas técnicas que superan su conocimiento (protocolo de escalado a expertos).

7. Métricas de satisfacción en clientes ESG
Define los KPIs específicos para un negocio sostenible: CSAT segmentado por tipo de consulta ESG, NPS correlacionado con el conocimiento de los compromisos de sostenibilidad, tasa de conversión de clientes que preguntan sobre ESG, impacto de las respuestas de sostenibilidad en la tasa de retención, y cobertura de las respuestas en la base de conocimiento ESG.

8. Feedback del cliente para mejorar la sostenibilidad
Diseña un sistema para canalizar el feedback de clientes sobre sostenibilidad hacia los equipos internos relevantes: cómo categorizar y analizar las preguntas y quejas ESG, qué insights comunicar al equipo de producto (mejoras en el packaging), al equipo de marketing (mensajes que generan confusión) y al equipo de sostenibilidad (compromisos que los clientes más valoran o cuestionan).

Entregables: Base de conocimiento ESG para el equipo de CS con las 30 preguntas más frecuentes y sus respuestas verificadas, protocolo de gestión de quejas medioambientales y guión de formación inicial en ESG para nuevas incorporaciones al equipo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Atención al cliente y comunicación ESG en empresas sostenibles',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría ESG freelance con IA',
                'description'      => 'Lanza y consolida tu negocio de consultoría ESG y sostenibilidad como freelance: define tu especialización, consigue clientes empresariales, diseña servicios escalables y construye autoridad en el sector.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de negocios especializado en el mercado de la consultoría ESG y sostenibilidad independiente. Conoces las oportunidades del mercado europeo impulsadas por la regulación CSRD, la Taxonomía Verde y el creciente interés inversor por los criterios ESG. Has acompañado a decenas de consultores freelance a construir negocios rentables en este sector en crecimiento.

Contexto personal:
Tengo experiencia en [ÁREA: finanzas sostenibles / gestión medioambiental / comunicación ESG / RRHH y dimensión social / supply chain sostenible / otro] y quiero [INICIAR / ESCALAR] mi actividad como consultor independiente de ESG. Mi objetivo de facturación es [CANTIDAD] en [PLAZO].

Plan de negocio para consultoría ESG freelance:

1. Definición de la especialización y nicho de mercado
El mercado ESG es muy amplio: desde la estrategia de sostenibilidad hasta el reporting técnico, desde la Taxonomía Verde hasta la diversidad e inclusión. Ayúdame a elegir el nicho donde tengo más ventaja competitiva y mayor demanda de mercado. Analiza cinco nichos de alta demanda en 2025-2026: reporting CSRD para pymes que escalan, due diligence ESG en cadena de suministro, medición y compensación de huella de carbono para pymes, ESG para el sector financiero (fondos de inversión, bancos), y comunicación de sostenibilidad y gestión del greenwashing. Para cada nicho, evalúa: demanda esperada, barrera de entrada, ticket medio y competencia.

2. Propuesta de valor y posicionamiento
Define tu propuesta de valor como consultor ESG independiente: qué te diferencia de las grandes consultoras (velocidad, precio, especialización profunda, acceso directo al experto senior), qué perfil de cliente es ideal (tamaño, sector, madurez ESG, presupuesto), y cómo articular tu propuesta en una frase de posicionamiento clara y memorable. Diseña tu elevator pitch de 60 segundos para presentaciones de networking.

3. Portafolio de servicios escalables
Diseña una cartera de servicios con diferentes niveles de profundidad y precio: servicio de entrada (diagnóstico ESG o assessment de materialidad, precio bajo para reducir fricción de primera compra), servicio core (programa de acompañamiento en reporting CSRD o implantación de sistema de gestión ESG, precio medio, duración 3-6 meses), y servicio premium (consultoría estratégica continua como CSO externo, precio alto, relación de largo plazo). Define el precio de cada servicio y el modelo de tarificación (por proyecto, por hora, retainer mensual).

4. Captación de los primeros clientes
Diseña una estrategia de captación de clientes sin depender de una marca reconocida: identificación de los decisores de compra ESG en las empresas objetivo (CEO, CFO, Director de Sostenibilidad), canales de prospección más efectivos (LinkedIn outreach con contenido de valor previo, eventos de cámaras de comercio y asociaciones sectoriales, colaboración con despachos de abogados y auditoras que necesitan expertise ESG), y cómo usar el efecto ancla de los primeros clientes para conseguir referencias.

5. Autoridad y visibilidad en el sector ESG
Define un plan de construcción de autoridad a 12 meses: publicación de contenido técnico en LinkedIn (artículos sobre CSRD, análisis de la Taxonomía Verde, casos de estudio anonimizados), participación como ponente en eventos del sector (ForoSostenible, Greenbiz, eventos de la CNMV o del ICEX), colaboración con medios especializados (Corresponsables, Diario Responsable, ESG Finance Spain) y desarrollo de un recurso gratuito descargable (checklist CSRD, guía de doble materialidad) para captar leads.

6. Fijación de precios y negociación
Explica cómo fijar el precio de los servicios ESG: benchmarks del mercado para consultores independientes vs. grandes consultoras, cómo comunicar el precio sin generar rechazo, cuándo y cómo hacer descuentos (primeros clientes, proyectos referenciables, contratos largos), y cómo estructurar una propuesta económica que justifique el precio con el ROI esperado para el cliente.

7. Gestión de proyectos y entrega de calidad
Define el proceso de entrega de un proyecto ESG de alta calidad: fase de diagnóstico y recopilación de información, co-creación de la solución con el cliente, entrega de documentos profesionales (informes de sostenibilidad, planes de acción, manuales de proceso), formación al equipo interno, y seguimiento post-proyecto para asegurar la implementación. Diseña plantillas reutilizables que agilicen la ejecución sin perder personalización.

8. Escalado: de freelance a firma de consultoría
Una vez consolidada la base de clientes, define las opciones de escalado: asociarse con otros consultores especializados para ofrecer proyectos más completos, desarrollar productos digitales (cursos online, templates de reporting, software ESG propio), o crear una firma boutique con subcontratistas. Analiza las implicaciones fiscales y legales de cada modelo de escalado en España.

Entregables: Modelo de negocio Canvas completado para la consultoría ESG freelance, propuesta comercial tipo lista para personalizar, y plan de 90 días para conseguir los dos primeros clientes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Negocio freelance de consultoría ESG y sostenibilidad empresarial',
                'vote_score'       => 37,
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
