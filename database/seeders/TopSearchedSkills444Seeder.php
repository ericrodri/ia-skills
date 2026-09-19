<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills444Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Preparación de los activos de marca y marketing para un proceso de M&A o exit con IA',
                'description'       => 'Usa IA para auditar, documentar y optimizar los activos de marketing y marca de una empresa antes de un proceso de venta o fusión, maximizando el valor percibido por el comprador.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de marketing especializado en procesos de M&A y exit de empresas con experiencia en la preparación y presentación de activos de marca para maximizar la valoración en procesos de venta o fusión. Tu objetivo es ayudarme a auditar, documentar y optimizar los activos de marketing de la empresa antes de iniciar un proceso de due diligence comprador, asegurando que el comprador potencial perciba el máximo valor en la marca, los canales de adquisición y la base de clientes.

**Contexto de la empresa:**
[Describe la empresa: sector, modelo de negocio, etapa de desarrollo, ingresos anuales aproximados y perfil del comprador potencial: estratégico, financiero (PE/VC), competidor]

**Activos de marketing principales:**
[Describe los activos existentes: reconocimiento de marca, base de clientes, canales de adquisición, contenido, presencia digital, comunidad, partnerships, datos de clientes, etc.]

**Horizonte del proceso:**
[Indica cuánto tiempo tienes para prepararte: 3 meses, 6 meses, 12 meses]

**Objetivo de valoración:**
[El rango de valoración esperado y los múltiplos de referencia del sector si los conoces]

---

Con este contexto, necesito que:

**1. Audites el valor de los activos de marketing para el comprador:**
Define un framework de auditoría de activos de marketing desde la perspectiva del comprador: ¿qué elementos de marca, canal y audiencia tienen mayor valor estratégico para un adquirente en mi sector? ¿Cuáles son los activos diferenciadores que justifican un múltiplo premium? ¿Cuáles son las debilidades que un comprador sofisticado detectará en el due diligence y que deben corregirse antes?

**2. Documentes los activos de marketing para el data room:**
Diseña la sección de marketing del data room de due diligence: qué documentos, métricas y análisis debe incluir, cómo presentar la estrategia de marca y posicionamiento, cómo documentar los canales de adquisición con métricas históricas (CAC, LTV, ROAS por canal, tasa de retención), y cómo presentar la base de clientes de forma que maximice el valor percibido sin revelar información sensible antes de firmar el NDA.

**3. Construyas la narrativa de marketing para el CIM:**
Ayúdame a redactar la sección de marketing del Confidential Information Memorandum (CIM o teaser): cómo articular el posicionamiento competitivo de la marca, la sostenibilidad de los canales de adquisición, el valor de la base de clientes y el potencial de crecimiento de los activos de marketing bajo un nuevo propietario con mayores recursos. Incluye los mensajes clave para cada tipo de comprador potencial.

**4. Optimices los indicadores de marketing antes del proceso:**
Identifica los KPIs de marketing que los compradores priorizan en la valoración de empresas de mi sector: ¿cuáles tengo que mejorar en los próximos meses para maximizar el múltiplo? Define acciones concretas con horizonte de 3 a 6 meses para mejorar los indicadores más críticos: reducción del CAC, mejora del LTV, diversificación de canales, aumento de la cuota de tráfico orgánico, mejora de las tasas de retención.

**5. Prepares la narrativa de sinergias para compradores estratégicos:**
Para los dos o tres perfiles de comprador más probables, desarrolla una narrativa de sinergias de marketing específica: cómo los activos de la empresa se complementan con los del comprador, qué capacidades de marketing aporta la empresa que el comprador no tiene, y cómo el comprador podría escalar los canales de adquisición existentes con sus recursos. Esta narrativa justifica el precio premium en la negociación.

**6. Diseñes el plan de transición de marketing post-cierre:**
Prepara un plan de 100 días de transición de los activos y operaciones de marketing que el comprador recibirá: cómo garantizar la continuidad de los canales de adquisición, cómo transferir el conocimiento de la marca y la estrategia, y cómo minimizar el riesgo de pérdida de clientes durante el período de integración. Tener este plan listo antes del cierre aumenta la confianza del comprador y reduce los ajustes de precio de última hora.

Responde con un plan estructurado por fases, plantillas de documentación para el data room y ejemplos de narrativas del CIM adaptadas a mi sector y tipo de comprador.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Auditar, documentar y optimizar los activos de marketing de una empresa antes de un proceso de M&A o exit para maximizar el valor percibido por el comprador y facilitar el due diligence.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Auditoría técnica del stack de desarrollo para procesos de M&A con IA',
                'description'       => 'Usa IA para preparar una auditoría técnica completa del stack de desarrollo, deuda técnica, seguridad y escalabilidad que un comprador potencial evaluará en el due diligence tecnológico.',
                'prompt_content'    => <<<'EOT'
Eres un CTO y consultor técnico con experiencia en procesos de due diligence tecnológico en operaciones de M&A para empresas de software y tecnología. Tu objetivo es ayudarme a realizar una auditoría técnica interna exhaustiva que anticipe las preguntas y hallazgos de los auditores técnicos del comprador, permitiéndome corregir debilidades y documentar fortalezas antes de que comience el proceso formal de due diligence.

**Contexto técnico del proyecto:**
[Describe el stack tecnológico: lenguajes, frameworks, infraestructura, arquitectura general (monolito, microservicios, serverless), bases de datos y herramientas de desarrollo]

**Tamaño del equipo técnico:**
[Número de desarrolladores, seniority mix, estructura de equipos y prácticas de ingeniería actuales]

**Modelo de negocio del software:**
[SaaS, plataforma marketplace, herramienta interna, producto de datos, API, etc.]

**Perfil del comprador potencial:**
[Estratégico (competidor o empresa del sector), financiero (PE/VC), gran corporación que quiere capacidades técnicas, etc.]

---

Con este contexto, necesito que:

**1. Diseñes el framework de due diligence técnico interno:**
Define las dimensiones que un auditor técnico externo evaluará en mi stack: arquitectura y escalabilidad, calidad del código y prácticas de ingeniería, seguridad y cumplimiento normativo, deuda técnica acumulada, dependencias críticas y vendor lock-in, documentación y transferibilidad del conocimiento, y capacidad del equipo para operar sin los fundadores. Para cada dimensión define los criterios de evaluación y los artefactos que el auditor solicitará.

**2. Audites la deuda técnica y los riesgos de escalabilidad:**
Proporciona un proceso para identificar, cuantificar y priorizar la deuda técnica antes del proceso de venta: cómo crear un inventario de deuda técnica, cómo estimar el coste de remediación de cada elemento, cuáles son los riesgos de escalabilidad más críticos que un comprador considerará como riesgos de valoración, y cuáles correcciones tienen mayor ROI en términos de impacto en la valoración versus esfuerzo de remediación.

**3. Evaluees la seguridad y el cumplimiento normativo:**
Define el proceso de auditoría de seguridad interna que debe preceder al due diligence: revisión de gestión de credenciales y secretos, análisis de dependencias con vulnerabilidades conocidas (usando herramientas como Snyk, OWASP Dependency Check o Trivy), revisión de controles de acceso y gestión de roles, verificación de cumplimiento con GDPR/CCPA si aplica, y revisión de los incidentes de seguridad pasados y cómo se gestionaron.

**4. Documentes la arquitectura y los sistemas para el data room técnico:**
Diseña la sección técnica del data room de M&A: qué diagramas de arquitectura incluir, cómo documentar las decisiones de diseño y sus trade-offs, cómo presentar las métricas de rendimiento y disponibilidad (uptime, latencia, capacidad actual versus proyectada), cómo describir el proceso de desarrollo y despliegue (CI/CD, testing, code review), y cómo documentar las dependencias críticas de terceros y sus alternativas.

**5. Prepares la narrativa de escalabilidad para el comprador:**
Desarrolla la narrativa técnica que justifica el valor de la plataforma para un comprador: cómo describir el potencial de escala de la arquitectura actual, qué inversiones técnicas adicionales serían necesarias para escalar 10x y en qué plazo, qué ventajas competitivas técnicas son difíciles de replicar, y cómo presentar el roadmap técnico como activo estratégico.

**6. Diseñes el plan de transición técnica post-adquisición:**
Prepara un plan de transición técnica de 100 días que el comprador puede ejecutar tras el cierre: documentación del onboarding técnico, plan de transferencia del conocimiento crítico, identificación de las personas clave cuya retención es crítica, y hoja de ruta de integración técnica con los sistemas del comprador. Tener este plan reduce el riesgo percibido por el comprador y fortalece la posición negociadora en precio y términos.

Incluye plantillas de documentación técnica, checklist de seguridad y ejemplos de narrativa de arquitectura para el data room.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Realizar una auditoría técnica interna que anticipe el due diligence del comprador en un proceso de M&A, documentando fortalezas y corrigiendo debilidades para maximizar la valoración tecnológica.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Valoración y documentación de activos de diseño y propiedad intelectual visual para procesos de M&A con IA',
                'description'       => 'Usa IA para inventariar, valorar y documentar los activos de diseño y propiedad intelectual visual de una empresa antes de un proceso de fusión o adquisición.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de diseño estratégico y propiedad intelectual con experiencia en procesos de valoración y due diligence de activos intangibles en operaciones de M&A. Tu objetivo es ayudarme a realizar un inventario completo de los activos de diseño y propiedad intelectual visual de la empresa, documentarlos correctamente para el proceso de due diligence y articular su valor estratégico para un comprador potencial.

**Contexto de la empresa:**
[Describe la empresa: tipo de negocio, sector, modelo de monetización y si el diseño es un diferenciador competitivo clave o un activo secundario]

**Activos de diseño existentes:**
[Describe los activos: identidad de marca (logo, sistema visual), sistema de diseño de producto, biblioteca de componentes, ilustraciones, iconografía, fotografía, animaciones, patentes de diseño, marcas registradas, etc.]

**Herramientas de diseño actuales:**
[Figma, Sketch, Adobe Creative Cloud, sistemas de diseño propios, repositorios de assets, etc.]

**Perfil del comprador potencial:**
[Estratégico del mismo sector, empresa de consumo que adquiere capacidades de diseño, fondo de PE que compra por crecimiento de ingresos, etc.]

---

Con este contexto, necesito que:

**1. Crees el inventario completo de activos de diseño y PI visual:**
Define la metodología para inventariar todos los activos de diseño y propiedad intelectual visual de la empresa: categorías de activos (identidad de marca, activos de producto, activos de marketing, documentación de sistemas de diseño, patentes de diseño, marcas registradas), formato de documentación de cada activo (nombre, descripción, estado legal, propietario, fecha de creación, vigencia de registro si aplica, valor estimado) y herramientas para automatizar el inventario.

**2. Evalúes el estado legal de la propiedad intelectual:**
Diseña el proceso de auditoría legal de los activos de diseño: verificación de que todas las marcas visuales están registradas en los territorios relevantes, revisión de los contratos con diseñadores externos para confirmar la cesión de derechos, identificación de activos con derechos inciertos o compartidos, y lista de acciones correctivas prioritarias para sanear la propiedad intelectual antes del due diligence.

**3. Documentes el sistema de diseño para el data room:**
Define qué documentación del sistema de diseño debe incluirse en el data room de M&A: cómo presentar el sistema de diseño de forma que un comprador no técnico entienda su valor, qué métricas de adopción y eficiencia del sistema de diseño mostrar (reducción del tiempo de desarrollo de UI, consistencia de la experiencia, cobertura de componentes), y cómo demostrar que el sistema es transferible y no depende de un único diseñador clave.

**4. Articules el valor estratégico de los activos de diseño para el comprador:**
Desarrolla la narrativa de valor de los activos de diseño para cada perfil de comprador potencial: cómo los activos de diseño aceleran la integración post-adquisición, qué sinergias de diseño aporta la empresa al comprador (equipo, sistema, procesos, reconocimiento de marca), y cómo el diseño como activo estratégico justifica un múltiplo premium en la valoración.

**5. Prepares el plan de transición del equipo y los activos de diseño:**
Diseña un plan de transición de 100 días para los activos y el equipo de diseño tras el cierre: cómo transferir el conocimiento del sistema de diseño, cómo gestionar la integración de las identidades de marca (si hay consolidación), cómo retener al talento clave de diseño durante el período de incertidumbre post-adquisición, y cómo garantizar la continuidad de los proyectos en curso.

**6. Optimices los activos de diseño antes del proceso:**
Identifica las mejoras de los activos de diseño que tienen mayor impacto en la valoración y que pueden implementarse en 3 a 6 meses: registro de marcas pendiente, documentación del sistema de diseño incompleta, activos desactualizados, inconsistencias de marca que generan riesgo de dilusión, o falta de propiedad clara de algunos activos. Prioriza las acciones por impacto en la valoración versus esfuerzo de implementación.

Incluye plantillas de inventario de activos, checklist de auditoría legal de PI y ejemplos de narrativa de valor de diseño para el CIM.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Inventariar, valorar y documentar los activos de diseño y propiedad intelectual visual de una empresa para maximizar su valor percibido en un proceso de M&A o exit.',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Preparación del equipo comercial y la cartera de clientes para un proceso de venta o fusión con IA',
                'description'       => 'Usa IA para auditar y documentar la cartera de clientes, los contratos comerciales y el pipeline como activos estratégicos que maximizan la valoración en un proceso de M&A.',
                'prompt_content'    => <<<'EOT'
Eres un director comercial y consultor de M&A con experiencia en la preparación de empresas para procesos de venta y fusión, específicamente en la valoración y presentación de los activos comerciales: cartera de clientes, contratos, pipeline y capacidades del equipo de ventas. Tu objetivo es ayudarme a preparar el área comercial de la empresa para un proceso de due diligence que maximice la valoración y genere confianza en el comprador sobre la sostenibilidad y escalabilidad de los ingresos.

**Contexto comercial:**
[Describe el modelo comercial: tipo de venta, ciclo promedio, ticket promedio, modelo de ingresos (recurrente, transaccional, mixto), número de clientes activos y concentración de ingresos]

**Estado de los contratos:**
[Duración promedio de contratos, tasas de renovación, cláusulas de cambio de control, contratos de exclusividad, etc.]

**Equipo de ventas:**
[Número de vendedores, antigüedad promedio, planes de compensación y dependencia de personas clave]

**Perfil del comprador potencial:**
[Estratégico del mismo sector, competidor, empresa que quiere distribución en tu mercado, fondo de PE, etc.]

---

Con este contexto, necesito que:

**1. Audites la cartera de clientes como activo de valoración:**
Define el análisis que un comprador realizará sobre la cartera de clientes: distribución de ingresos por cliente (concentración de riesgo), análisis de retención y churn histórico, segmentación de clientes por valor y potencial, análisis de contratos y su duración media ponderada, y Net Revenue Retention (NRR) como indicador de la salud del negocio recurrente. Proporciona el formato de análisis y las métricas clave que debo tener preparadas.

**2. Documentes los contratos comerciales para el data room:**
Diseña la sección de contratos comerciales del data room: cómo organizar y presentar los contratos de clientes, qué cláusulas revisar antes del proceso (change of control, exclusividad, renovación automática, limitaciones de cesión), cómo redactar el resumen ejecutivo de los contratos más importantes, y qué información de contratos es estratégicamente sensible y debe protegerse hasta etapas avanzadas del proceso.

**3. Construyas la narrativa de calidad y recurrencia de ingresos:**
Desarrolla la narrativa comercial para el CIM: cómo presentar la base de clientes de forma que transmita solidez y previsibilidad de ingresos, cómo articular la tasa de retención y el NRR como indicadores de satisfacción y valor entregado, cómo describir los contratos plurianuales como activos de visibilidad de ingresos, y cómo presentar el pipeline actual como evidencia de crecimiento futuro verificable.

**4. Prepares el análisis de sinergias comerciales para el comprador:**
Para los dos o tres perfiles de comprador más probables, desarrolla el análisis de sinergias comerciales: qué clientes o mercados de la empresa son complementarios a los del comprador, qué capacidades de ventas aporta la empresa que el comprador no tiene (canales, geografías, segmentos), y cómo el comprador podría acelerar la penetración en nuevos mercados usando la base de clientes y el equipo de ventas adquirido.

**5. Gestionas los riesgos de concentración y dependencia:**
Identifica los riesgos comerciales que un comprador detectará y que pueden impactar negativamente en el precio: concentración excesiva de ingresos en pocos clientes, dependencia de relaciones personales del fundador para retener clientes, contratos próximos a vencer sin renovación confirmada, o cláusulas de cambio de control que dan a clientes el derecho a rescindir. Para cada riesgo define la acción correctiva y el tiempo necesario para mitigarlo antes del proceso.

**6. Diseñes el plan de transición del equipo y cartera de clientes:**
Prepara el plan de transición comercial de 100 días para el periodo post-cierre: cómo gestionar la comunicación con los clientes clave sobre el cambio de propiedad, cómo retener al equipo de ventas durante el período de incertidumbre, qué incentivos de retención proponer para los vendedores clave, y cómo garantizar la continuidad de las relaciones comerciales durante la integración.

Incluye plantillas de análisis de cartera de clientes, checklist de revisión de contratos y narrativa comercial de ejemplo para el CIM.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Preparar los activos comerciales de una empresa para un proceso de M&A documentando la cartera de clientes, contratos y pipeline de forma que maximice la valoración y la confianza del comprador.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Preparación del producto y el roadmap para due diligence en procesos de M&A con IA',
                'description'       => 'Usa IA para documentar el producto, el roadmap y la estrategia de producto de forma que maximice el valor percibido por un comprador estratégico o financiero en un proceso de M&A.',
                'prompt_content'    => <<<'EOT'
Eres un VP de Producto y consultor de M&A con experiencia en la preparación de la documentación de producto para procesos de due diligence y la construcción de narrativas que maximizan el valor estratégico del producto en negociaciones de venta o fusión. Tu objetivo es ayudarme a documentar el producto, la estrategia y el roadmap de forma que un comprador potencial perciba claramente el valor diferencial, el potencial de crecimiento y la sostenibilidad de la ventaja competitiva.

**Contexto del producto:**
[Describe el producto: tipo de software o plataforma, propuesta de valor principal, etapa de madurez (early stage, growth, scale), métricas de uso y retención, y modelo de monetización]

**Posición competitiva:**
[Describe el mercado: principales competidores, ventaja competitiva diferencial y barreras de entrada que protegen el producto]

**Perfil del comprador potencial:**
[Estratégico (competidor, empresa del sector), financiero (PE/VC), corporación que adquiere por capacidades o por acceso a mercado, etc.]

**Horizonte del proceso:**
[Tiempo disponible para prepararse: 3, 6 o 12 meses]

---

Con este contexto, necesito que:

**1. Diseñes el data room de producto para due diligence:**
Define la sección de producto del data room: qué documentos y análisis debe incluir (descripción funcional del producto, arquitectura de alto nivel, métricas de producto clave, historial de versiones y lanzamientos, análisis de competencia, feedback de clientes, resultados de investigación de usuario) y cómo organizarlos para que un comprador no técnico entienda el valor y un comprador técnico pueda validar la solidez.

**2. Construyas la narrativa del producto para el CIM:**
Desarrolla la sección de producto del Confidential Information Memorandum: cómo articular la propuesta de valor del producto de forma clara y memorable, cómo describir la ventaja competitiva diferencial usando evidencia objetiva (métricas de uso, retención, NPS, comparativas de funcionalidad), y cómo presentar el potencial de mercado addressable (TAM, SAM, SOM) de forma rigurosa y creíble.

**3. Documentes el roadmap como activo estratégico:**
Explica cómo presentar el roadmap del producto en un proceso de M&A: qué nivel de detalle compartir en cada etapa del proceso (teaser, CIM, management presentation, due diligence avanzado), cómo articular el roadmap como evidencia de visión estratégica y no solo como lista de features, y cómo conectar cada iniciativa del roadmap con una métrica de negocio o una hipótesis de crecimiento verificable.

**4. Identifiques y articules las barreras de entrada del producto:**
Define el análisis de moat del producto para el comprador: qué hace que el producto sea difícil de replicar (efectos de red, datos propietarios, integraciones estratégicas, switching costs, know-how del equipo), cómo cuantificar cada barrera de entrada en términos de tiempo y coste que necesitaría un competidor para alcanzar el mismo nivel, y cómo presentar este análisis de forma convincente sin revelar información operativa sensible.

**5. Prepares la narrativa de sinergias de producto para el comprador:**
Para el perfil de comprador más probable, desarrolla el análisis de sinergias de producto: qué capacidades técnicas o funcionales de la empresa complementan el producto del comprador, qué mercados o segmentos nuevos puede atender el comprador combinando ambos productos, y cómo la integración de productos podría acelerar la monetización o reducir el churn para ambas partes.

**6. Diseñes el plan de transición de producto post-cierre:**
Prepara un plan de transición de producto de 100 días para el comprador: cómo mantener la cadencia de lanzamientos durante la integración, cómo gestionar el roadmap combinado si hay solapamiento con el producto del comprador, cómo retener al equipo de producto durante el período de incertidumbre, y cómo comunicar la adquisición a los usuarios del producto de forma que refuerce la confianza y minimice el churn.

Proporciona plantillas de documentación de producto para el data room, estructura del CIM de producto y framework de análisis de barreras de entrada.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Documentar el producto, el roadmap y la estrategia de producto para un proceso de M&A de forma que maximice el valor percibido por el comprador y facilite el due diligence.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Preparación del equipo y los activos de talento para un proceso de M&A con IA',
                'description'       => 'Usa IA para auditar y documentar los activos de talento, cultura y organización de una empresa antes de un proceso de fusión o adquisición, reduciendo el riesgo de fuga de talento y maximizando el valor del capital humano.',
                'prompt_content'    => <<<'EOT'
Eres un Chief People Officer y consultor de M&A con amplia experiencia en la gestión de los procesos de due diligence de capital humano y en la preparación de organizaciones para procesos de fusión o adquisición. Tu objetivo es ayudarme a auditar los activos de talento y cultura de la empresa, documentarlos para el proceso de due diligence y diseñar una estrategia de retención que minimice la fuga de personas clave durante el período de incertidumbre.

**Contexto de la empresa:**
[Describe la empresa: sector, tamaño, modelo de trabajo (presencial, remoto, híbrido), cultura organizacional y propuesta de valor al empleado (EVP)]

**Estructura del equipo:**
[Número de empleados, distribución por área, mix de seniority, principales roles críticos y grado de dependencia de personas clave]

**Estado de los contratos laborales:**
[Tipos de contratos, pactos de no competencia, acuerdos de confidencialidad, planes de stock options o equity, beneficios no estándar, etc.]

**Perfil del comprador potencial:**
[Estratégico del mismo sector, PE/VC que mantiene la empresa independiente, gran corporación que integrará el equipo, comprador que quiere principalmente el talento (acqui-hire), etc.]

---

Con este contexto, necesito que:

**1. Audites el capital humano como activo de valoración:**
Define el análisis de capital humano que un comprador realizará en el due diligence: inventario de roles críticos y evaluación del riesgo de fuga, análisis de la estructura de compensación versus mercado, revisión de los planes de equity y cómo se ven afectados por la transacción, evaluación de la cultura organizacional y su compatibilidad con el comprador, y análisis del employer brand y su impacto en la capacidad de atraer talento futuro.

**2. Documentes el equipo para el data room de RR.HH.:**
Diseña la sección de capital humano del data room: qué información incluir (organigrama, distribución de compensación por banda sin revelar salarios individuales hasta etapas avanzadas, políticas de RR.HH., planes de equity y sus términos, métricas de clima y rotación histórica) y cómo presentar el equipo de forma que transmita solidez, estabilidad y capacidad de escalar.

**3. Diseñes la estrategia de retención durante el proceso:**
Define el plan de retención de talento clave para el período de incertidumbre del proceso de M&A: cómo identificar a los empleados cuya retención es crítica para la valoración, qué tipos de incentivos de retención son más efectivos (retention bonuses, aceleración de vesting, compromisos de rol post-cierre), cómo comunicar con el equipo durante las distintas fases del proceso sin violar la confidencialidad, y cuándo y cómo hacer el anuncio oficial para minimizar el impacto en la moral.

**4. Evaluees los riesgos legales y laborales:**
Identifica los riesgos laborales que pueden impactar negativamente en el precio o crear contingencias en el proceso: conflictos laborales no resueltos, empleados con contratos irregulares, incumplimientos de obligaciones de seguridad social, cláusulas de cambio de control en contratos de directivos, o planes de equity con términos que crean derechos inesperados para los empleados en caso de venta. Para cada riesgo define la acción correctiva prioritaria.

**5. Construyas la narrativa de cultura y equipo para el CIM:**
Desarrolla la sección de equipo del Confidential Information Memorandum: cómo describir la cultura organizacional de forma auténtica y atractiva, cómo presentar al equipo directivo destacando su trayectoria y complementariedad, cómo articular la propuesta de valor al empleado como activo diferencial, y cómo evidenciar que el equipo es capaz de ejecutar el plan de negocio de forma independiente del fundador.

**6. Diseñes el plan de integración cultural post-cierre:**
Prepara el plan de integración de 100 días desde la perspectiva de personas: cómo gestionar la comunicación con el equipo sobre los cambios de estructura, políticas y compensación, cómo preservar los elementos de cultura que son fuente de ventaja competitiva, cómo gestionar las redundancias de forma justa y transparente si las hay, y cómo medir la salud organizacional durante el período de integración para actuar rápido ante señales de fuga de talento.

Incluye plantillas de inventario de talento clave, checklist de due diligence de RR.HH. y framework de comunicación por fases del proceso.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Auditar los activos de talento y cultura de una empresa para un proceso de M&A, diseñando una estrategia de retención y documentación que maximice el valor del capital humano y minimice el riesgo de fuga.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Modelización financiera y análisis de valoración para procesos de M&A y exit con IA',
                'description'       => 'Usa IA para construir y validar los modelos financieros que sustentan la valoración de una empresa en un proceso de M&A, incluyendo DCF, análisis de comparables y análisis de transacciones precedentes.',
                'prompt_content'    => <<<'EOT'
Eres un analista financiero senior y asesor de M&A con profunda experiencia en la construcción y validación de modelos de valoración para procesos de fusión y adquisición. Tu objetivo es ayudarme a construir los modelos financieros que sustentarán la valoración de la empresa en el proceso de M&A, a entender cómo los compradores y sus asesores analizarán las cifras, y a preparar las proyecciones financieras que maximicen el valor de venta manteniendo la credibilidad.

**Contexto financiero de la empresa:**
[Describe la situación financiera: modelo de ingresos, ingresos anuales actuales, márgenes (EBITDA, margen bruto), tasa de crecimiento histórica, estructura de deuda, y si es rentable o está en pérdidas]

**Horizonte del proceso:**
[Fecha estimada del cierre y si hay urgencia por condiciones del mercado, necesidades de liquidez de los accionistas, ventana de mercado para el sector, etc.]

**Tipo de proceso:**
[Venta total, venta parcial con PE, fusión con igual, venta a estratégico, proceso de recapitalización, etc.]

**Perfil de compradores potenciales:**
[Compradores estratégicos del sector, fondos de PE con portfolio complementario, family offices, compradores internacionales, etc.]

---

Con este contexto, necesito que:

**1. Diseñes el modelo de valoración DCF:**
Proporciona el framework para construir el modelo DCF de la empresa: cómo proyectar los ingresos a 5 años con supuestos conservadores, base y optimista, cómo proyectar el EBITDA y los márgenes con drivers de negocio claros, cómo calcular el WACC apropiado para el sector y el perfil de riesgo de la empresa, cómo estimar el valor terminal y su sensibilidad a los supuestos, y cuáles son los errores más frecuentes en modelos DCF de empresa que los compradores detectan y que reducen la credibilidad de la valoración.

**2. Realices el análisis de empresas comparables (trading comps):**
Define la metodología para el análisis de comparables cotizados: cómo identificar el peer group apropiado, qué múltiplos son más relevantes para mi sector (EV/EBITDA, EV/Revenue, P/E, EV/ARR para SaaS), cómo ajustar los múltiplos de empresas cotizadas para aplicarlos a una empresa privada (descuento por iliquidez, tamaño, crecimiento diferencial), y dónde obtener datos de comparables sin suscripciones a terminales de datos profesionales.

**3. Construyas el análisis de transacciones precedentes:**
Explica cómo buscar y analizar transacciones M&A precedentes en mi sector: fuentes de datos accesibles (PitchBook, Mergermarket, noticias de sector, comunicados de prensa), cómo ajustar los múltiplos de transacciones históricas para el contexto actual, y cómo usar las transacciones precedentes para anclar las expectativas de valoración en la negociación con los compradores.

**4. Prepares las proyecciones financieras para el CIM:**
Define las mejores prácticas para construir y presentar las proyecciones financieras del CIM: cómo estructurar el modelo con supuestos claramente documentados y verificables, cómo presentar los escenarios de forma que el escenario base sea creíble y los compradores no lo perciban como demasiado optimista, cómo incluir el análisis de sensibilidad de las variables más críticas, y qué nivel de detalle incluir en cada etapa del proceso (teaser, CIM, management presentation, confirmatory due diligence).

**5. Anticipees y respondas al análisis del comprador:**
Describe cómo los compradores (financieros y estratégicos) típicamente re-modelan las finanzas de la empresa objetivo para ajustar la valoración a su baja: ajustes normalizadores al EBITDA (eliminación de gastos del fundador, normalización de salarios, one-offs), ajustes por cuentas por cobrar y working capital, ajustes por deuda y elementos off-balance sheet. Para cada tipo de ajuste prepara la argumentación que defiende tu posición y los datos que la respaldan.

**6. Estructures el bridge de valoración para la negociación:**
Diseña el análisis de bridge de valoración que usarás en la negociación: cómo partir del precio inicial del comprador y construir argumento por argumento el camino hacia tu precio objetivo, qué concesiones puedes ofrecer que tienen alto valor percibido para el comprador pero bajo coste económico para ti (earn-outs, rolled equity, warranties limitadas), y cómo estructurar el precio para maximizar el valor post-impuestos de los accionistas vendedores.

Incluye plantillas de modelos financieros en Excel o Google Sheets, ejemplos de análisis de comparables y framework de negociación de valoración.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Construir y validar los modelos de valoración para un proceso de M&A, preparar proyecciones financieras creíbles y diseñar la estrategia de negociación de precio basada en análisis de comparables y transacciones precedentes.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Due diligence legal y preparación de documentación para un proceso de M&A con IA',
                'description'       => 'Usa IA para preparar el data room legal de un proceso de M&A, identificar contingencias jurídicas y negociar las representaciones y garantías del contrato de compraventa.',
                'prompt_content'    => <<<'EOT'
Eres un abogado M&A senior con experiencia en la estructuración y ejecución de operaciones de fusión y adquisición en España y en el ámbito internacional. Tu objetivo es ayudarme a preparar la documentación legal de la empresa para un proceso de venta o fusión, a identificar y gestionar las contingencias jurídicas que pueden afectar al precio o al cierre de la operación, y a entender los elementos clave del contrato de compraventa desde la perspectiva del vendedor.

**Tipo de empresa:**
[Describe la empresa: forma jurídica, estructura accionarial, número de subsidiarias o filiales, jurisdicciones donde opera y si hay inversores institucionales con derechos especiales]

**Tipo de operación:**
[Venta de acciones, venta de activos, fusión, escisión, LBO con el management, etc.]

**Complejidad legal anticipada:**
[Indica si hay elementos que añaden complejidad: litigios pendientes, propiedad intelectual disputada, contratos con cláusulas de cambio de control, filiales en múltiples jurisdicciones, regulación sectorial específica (finanzas, salud, telecomunicaciones), etc.]

**Perfil del comprador potencial:**
[Comprador estratégico, fondo de PE, empresa extranjera que requiere aprobación regulatoria, etc.]

---

Con este contexto, necesito que:

**1. Diseñes el data room legal para due diligence:**
Define la estructura completa del data room legal: categorías de documentos (corporate, contratos comerciales, propiedad intelectual, laboral y RRHH, fiscal, regulatorio, litigios y contingencias, medio ambiente si aplica), orden de revelación según la sensibilidad de la información, y proceso para gestionar el acceso y las preguntas de los asesores del comprador durante el Q&A del due diligence.

**2. Identifices las contingencias legales y su impacto en la valoración:**
Define el proceso de auditoría legal interna antes del proceso: cómo identificar contingencias en cada área jurídica (litigios, reclamaciones laborales, riesgos fiscales, incumplimientos contractuales, propiedad intelectual disputada), cómo cuantificar la exposición económica de cada contingencia, cómo decidir cuáles revelar proactivamente en el data room (full disclosure para construir confianza) versus cuáles gestionar con representaciones y garantías, y qué acciones correctivas priorizar antes de iniciar el proceso.

**3. Structures la documentación de propiedad intelectual:**
Diseña la auditoría de propiedad intelectual para el data room legal: inventario de marcas registradas y estado de registro en cada jurisdicción, patentes y solicitudes pendientes, derechos de software (código propio versus open source con licencias restrictivas), acuerdos de cesión de derechos con empleados y contratistas externos, y contratos de licencia como licenciante o licenciatario con términos de cambio de control.

**4. Prepares las representaciones y garantías del SPA:**
Explica los elementos más importantes del contrato de compraventa (Share Purchase Agreement) desde la perspectiva del vendedor: cómo negociar el alcance y los límites de las representaciones y garantías (reps & warranties), qué concepto de conocimiento usar (actual knowledge versus constructive knowledge), cómo limitar la responsabilidad del vendedor (caps, baskets, survival periods), y si es posible o conveniente contratar un seguro de W&I (Warranties & Indemnities) para transferir el riesgo al mercado asegurador.

**5. Gestionas los procesos regulatorios y de aprobación:**
Para los tipos de comprador y jurisdicciones relevantes en mi caso, define los procesos regulatorios que deben completarse antes del cierre: notificación o aprobación de autoridades de competencia (CNMC en España, DG Comp en Europa, DoJ/FTC en EEUU según umbrales), autorizaciones sectoriales específicas, derechos de tanteo o aprobación de socios o terceros en contratos clave, y cómo integrar los plazos regulatorios en el calendario del proceso de M&A.

**6. Diseñes la estructura de la operación para optimizar la fiscalidad del vendedor:**
Describe las principales consideraciones fiscales del vendedor en una operación de venta de empresa en España: tributación de la plusvalía según el tipo de vendedor (persona física, sociedad holding, no residente), exención por reinversión o participación, ventajas de estructurar la venta a través de una holding, y cómo la forma de la operación (acciones versus activos, consideración en efectivo versus earn-out versus rolled equity) afecta a la fiscalidad del vendedor.

Incluye checklists de due diligence legal por área, estructura tipo del data room y guía de negociación de los términos clave del SPA desde la perspectiva del vendedor.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Preparar la documentación legal de una empresa para un proceso de M&A, identificar y gestionar contingencias jurídicas, y negociar los términos del contrato de compraventa desde la perspectiva del vendedor.',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Preparación de los activos de datos de cliente y operaciones de CS para un proceso de M&A con IA',
                'description'       => 'Usa IA para documentar y valorar los activos de datos de cliente, métricas de retención y operaciones de customer success de cara a un proceso de due diligence en M&A.',
                'prompt_content'    => <<<'EOT'
Eres un VP de Customer Success y consultor de M&A con experiencia en la preparación de las operaciones de customer success y los activos de datos de cliente para procesos de due diligence en fusiones y adquisiciones. Tu objetivo es ayudarme a documentar, valorar y presentar las operaciones de CS y los datos de cliente de forma que transmitan al comprador la solidez, previsibilidad y escalabilidad de los ingresos, aumentando la confianza en el negocio y justificando un múltiplo de valoración premium.

**Contexto de las operaciones de CS:**
[Describe el equipo: número de CSMs, modelo de servicio (low-touch, mid-touch, high-touch), ratio de cuentas por CSM, herramientas que usan y métricas que monitorizan]

**Métricas de cliente disponibles:**
[NRR, GRR, churn rate, CSAT, NPS, time-to-value, health score, expansion revenue, etc. Indica cuáles tienes calculadas y para qué períodos]

**Base de clientes:**
[Número de clientes, distribución por segmento, concentración de ingresos, contratos con cláusulas de cambio de control, etc.]

**Perfil del comprador potencial:**
[Estratégico del mismo sector, PE que mantiene la empresa independiente, empresa que adquiere por la base de clientes o los datos, etc.]

---

Con este contexto, necesito que:

**1. Defines el análisis de métricas de customer success para el due diligence:**
Define las métricas de CS que un comprador sofisticado analizará y cómo calcularlas correctamente para no generar discrepancias durante el due diligence: Net Revenue Retention (NRR), Gross Revenue Retention (GRR), churn rate por cohorte, expansion revenue como porcentaje del ARR, time-to-value para nuevos clientes, y health score promedio de la cartera. Para cada métrica explica cómo presentarla de forma que muestre la trayectoria positiva y la sostenibilidad del negocio.

**2. Diseñes la sección de CS del data room:**
Define qué documentos e información deben incluirse en el data room para el due diligence de CS y datos de cliente: historial de métricas de retención (mínimo 3 años), análisis de cohortes, análisis de churn y sus causas documentadas, manuales de operaciones de CS, playbooks de onboarding y renovación, contratos de clientes con términos de renovación y cambio de control, y evidencia de la escalabilidad del modelo de servicio (ratio de cuentas por CSM en el tiempo).

**3. Construyas la narrativa de retención y recurrencia para el CIM:**
Desarrolla la sección de customer success del Confidential Information Memorandum: cómo articular el NRR como evidencia de la calidad del producto y la relación con los clientes, cómo presentar el análisis de cohortes de forma visual y convincente, cómo describir el proceso de customer success como activo operacional escalable, y cómo conectar las métricas de CS con las proyecciones de ingresos futuros de forma que el comprador las perciba como conservadoras y creíbles.

**4. Documentes los activos de datos de cliente:**
Define el inventario de activos de datos de cliente que tienen valor estratégico para el comprador: base de datos de perfiles de cliente con atributos de comportamiento, datos de uso del producto que permiten optimización predictiva, datos de feedback y señales de satisfacción, benchmarks de industria derivados de la base de clientes. Para cada activo evalúa su valor estratégico para el comprador, las implicaciones de privacidad y GDPR en la transferencia de datos en el contexto de M&A, y cómo presentarlo de forma que sea un activo diferencial en la negociación.

**5. Gestionas los riesgos de CS que pueden impactar en el precio:**
Identifica los riesgos del área de CS que un comprador utilizará para justificar ajustes a la baja en la valoración: concentración de ingresos en pocos clientes de alto riesgo, cláusulas de cambio de control que permiten a clientes salir tras la adquisición, métricas de churn deterioradas en los últimos trimestres, dependencia del fundador para las relaciones con clientes clave, o falta de documentación de los procesos de CS. Para cada riesgo define la acción correctiva y el tiempo de implementación.

**6. Diseñes el plan de transición de CS post-cierre:**
Prepara el plan de transición de customer success de 100 días para el período post-adquisición: cómo comunicar el cambio de propiedad a los clientes de forma que refuerce la confianza y minimice el riesgo de churn, cómo gestionar las cuentas de mayor riesgo durante la integración, cómo integrar los sistemas y procesos de CS de ambas empresas sin interrumpir el servicio, y cómo medir la salud de la cartera de clientes durante el período de integración para actuar rápido ante señales de deterioro.

Incluye plantillas de análisis de cohortes, dashboard de métricas de CS para el data room y framework de comunicación con clientes para el anuncio de la adquisición.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Documentar las métricas de customer success y los activos de datos de cliente para un proceso de M&A, construyendo una narrativa de retención y recurrencia que maximice la valoración y la confianza del comprador.',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Estrategia de exit para freelancers y consultores independientes que quieren vender su práctica o agencia con IA',
                'description'       => 'Usa IA para diseñar una estrategia de exit de una práctica freelance o agencia boutique, preparando los activos, los sistemas y la documentación para maximizar el valor de venta.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de estrategia de negocio especializado en el exit de práticas freelance, consultorías boutique y agencias independientes. Tu objetivo es ayudarme a diseñar y ejecutar una estrategia de exit que me permita vender mi negocio independiente al mayor valor posible, estructurándolo de forma que sea atractivo para compradores potenciales y no dependa exclusivamente de mi presencia personal para generar ingresos.

**Contexto de mi negocio:**
[Describe tu negocio: tipo de servicio, ingresos anuales aproximados, número de clientes activos, si tienes equipo o trabajas solo, modelo de ingresos (proyectos puntuales, retainers, mixto) y si tienes acuerdos de exclusividad o dependencia de pocos clientes grandes]

**Horizonte del exit:**
[En cuánto tiempo quieres materializar el exit: 1 año, 2 años, 5 años, o simplemente quieres prepararte aunque no tengas fecha definida]

**Perfil de comprador potencial:**
[Qué tipo de comprador es más probable: agencia más grande del sector, consultora que quiere capacidades o clientes específicos, competidor, empresa del sector de los clientes que internaliza la función, o un gestor que quiere comprar el negocio como inversión (search fund, SBA loan, etc.)]

**Principal debilidad para el exit:**
[Ejemplo: el negocio depende completamente de mi persona y mis relaciones, no hay sistemas documentados, los ingresos son irregulares, los clientes no tienen contratos plurianuales, no hay equipo, etc.]

---

Con este contexto, necesito que:

**1. Evalúes la vendibilidad actual de mi negocio:**
Define un diagnóstico de la vendibilidad actual de mi práctica o agencia usando el framework de los cinco pilares de un negocio transferible: ingresos predecibles y documentados, sistemas y procesos que no dependen del fundador, equipo o capacidad de entregar sin el dueño, diversificación de clientes sin concentración excesiva, y propuesta de valor diferenciada que el comprador puede mantener y escalar. Para cada pilar evalúa mi situación actual y define las acciones de mejora más prioritarias.

**2. Diseñes el plan de preparación para el exit:**
Basándote en el diagnóstico anterior, define un plan de preparación por fases con horizonte de 12 a 24 meses: en qué orden abordar cada área de mejora, qué hitos deben alcanzarse antes de iniciar el proceso de venta formal, cuáles son los cambios que tienen mayor impacto en la valoración versus el esfuerzo de implementación, y cómo equilibrar la preparación para el exit con la operación del día a día del negocio.

**3. Calcules y maximices la valoración de tu negocio:**
Explica cómo se valoran las práticas freelance y las agencias boutique en el mercado actual: múltiplos típicos de EBITDA o SDE (Seller's Discretionary Earnings) por tamaño y sector, qué factores elevan el múltiplo (contratos recurrentes, equipo estable, sistemas documentados, diversificación de clientes, marca reconocida), qué factores lo reducen (dependencia del fundador, concentración de clientes, ingresos irregulares). Define las tres o cuatro acciones que mayor impacto tendrían en mi múltiplo de valoración dado mi perfil.

**4. Documentes el negocio para hacerlo transferible:**
Diseña el proceso de documentación del negocio: cómo crear el manual de operaciones que describe cómo se entrega el servicio sin que yo esté, cómo documentar los procesos de captación y onboarding de clientes, cómo crear la base de conocimiento de los clientes actuales (contexto, preferencias, historial de trabajo), y cómo documentar las relaciones con proveedores y colaboradores. Esta documentación es un activo de valoración que un comprador puede asumir con confianza.

**5. Identifiques y abordes a compradores potenciales:**
Describe el proceso de búsqueda y cualificación de compradores potenciales para mi tipo de negocio: dónde encontrarlos (agencias del sector, brokers de negocios online como Flippa o Quiet Light para agencias digitales, LinkedIn, eventos del sector), cómo estructurar el primer acercamiento sin revelar que estás en proceso de venta, cómo evaluar si un comprador es serio y tiene capacidad financiera, y cómo gestionar múltiples conversaciones en paralelo para crear competencia y mejorar los términos.

**6. Estructures el proceso de venta y negociación:**
Explica los pasos del proceso de venta de una agencia o consultora boutique: preparación del teaser y el CIM simplificado, proceso de due diligence (qué información pedir versus dar en cada etapa), estructura típica del contrato de compraventa (precio, earn-out por rendimiento post-venta, período de transición, acuerdo de no competencia), y cómo negociar el rol y la compensación del vendedor durante el período de transición, que suele ser un factor crítico para el éxito de la integración.

Responde con un plan de acción por fases, plantillas de documentación del negocio y guía de conversación para el primer acercamiento a compradores potenciales.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar y ejecutar una estrategia de exit para una práctica freelance o agencia boutique, preparando los activos, los sistemas y la documentación para maximizar el valor de venta y facilitar la transferencia al comprador.',
                'vote_score'        => 42,
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
