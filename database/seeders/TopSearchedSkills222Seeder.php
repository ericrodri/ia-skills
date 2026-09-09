<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills222Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Account-based marketing (ABM) avanzado',
                'description'      => 'El marketing que se dirige a cuentas específicas, no a audiencias: la estrategia ABM, la personalización a escala y la coordinación con ventas que convierte el ABM en una ventaja competitiva real.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en Account-Based Marketing (ABM) para empresas B2B que venden a grandes cuentas. Quiero que me ayudes a diseñar e implementar una estrategia ABM que funcione como ventaja competitiva real, no como otro nombre para el marketing masivo de siempre.

Mi contexto:
- Empresa y producto: [describe qué vendes y tu propuesta de valor]
- Perfil de cuenta objetivo (ICP): [tamaño, sector, geografía, señales de compra]
- Ciclo de venta actual: [duración, número de stakeholders, cómo se inicia el proceso]
- Relación actual con el equipo de ventas: [alineados, en silos, conflicto marketing-ventas]
- Budget de ABM disponible: [aproximado para tecnología, contenido y publicidad]
- Cuentas objetivo identificadas: [cuántas, cómo se eligieron]

Con esa información, quiero que me entregues:

1. ESTRATEGIA ABM: ONE-TO-ONE, ONE-TO-FEW O ONE-TO-MANY
Explica las tres variantes de ABM y cuál se adapta mejor a mi situación: el ABM one-to-one (hiperpersonalización para las 10-20 cuentas más estratégicas), el one-to-few (personalización por clusters de cuentas similares) y el one-to-many (ABM ligero para una lista más amplia). Define los criterios para decidir qué nivel de ABM aplicar a cada cuenta y cómo diseñar el programa para que los tres niveles coexistan con recursos limitados.

2. IDENTIFICACIÓN Y PRIORIZACIÓN DE CUENTAS OBJETIVO
Diseña el proceso de identificación y priorización de cuentas: los criterios de selección del ICP (firmographics, technographics, señales de intención, potencial de revenue), las fuentes de datos para construir la lista (LinkedIn Sales Navigator, ZoomInfo, G2, bombora u otras herramientas de intent data), cómo puntuar y rankear las cuentas para asignar el nivel correcto de ABM y cómo mantener la lista actualizada cuando el ICP evoluciona.

3. PERSONALIZACIÓN DE CONTENIDO Y MENSAJES A ESCALA
Explica cómo personalizar el contenido y los mensajes para diferentes cuentas y personas compradoras sin multiplicar el esfuerzo de producción de contenido: la matriz de personalización (qué elementos cambiar por cuenta, qué mantener igual), las herramientas de personalización web (Demandbase, Mutiny, Clearbit Reveal) que muestran contenido distinto según la empresa que visita, los templates de contenido personalizable y los formatos de cuenta que maximizan el impacto (reportes de industria personalizados, vídeos de prospecto, microsites por cuenta).

4. ALINEACIÓN MARKETING-VENTAS: EL CORAZÓN DEL ABM
Define el modelo operativo de alineación entre marketing y ventas para ABM: el proceso de selección conjunta de cuentas, las reuniones de sincronización (con qué frecuencia, qué revisar), las definiciones acordadas (MQA: Marketing Qualified Account versus MQL), las responsabilidades de cada equipo en cada etapa del journey de la cuenta y cómo gestionar los conflictos de atribución cuando ambos equipos contribuyen al deal. Dame una plantilla del acuerdo de nivel de servicio (SLA) entre marketing y ventas para ABM.

5. ACTIVACIÓN MULTICANAL: LLEGAR A LOS STAKEHOLDERS DE LA CUENTA
Diseña la estrategia de activación multicanal para las cuentas objetivo: la publicidad programática dirigida a cuentas específicas (LinkedIn ABM ads, display con targeting por IP), el outreach coordinado de ventas, el contenido orgánico que aparece cuando el stakeholder busca, los eventos exclusivos para cuentas estratégicas (executive dinners, webinars privados) y el direct mail físico para los momentos de alto impacto. Explica cómo orquestar todos los canales para que el mensaje sea coherente.

6. MÉTRICAS ABM: MEDIR LO QUE IMPORTA
Define el framework de métricas de ABM que va más allá de los leads: el pipeline de cuentas (número de cuentas en cada etapa, velocidad de progresión), el engagement de cuenta (número de stakeholders comprometidos, frecuencia de interacción), el win rate por segmento de cuentas ABM versus no-ABM, el ACV (Annual Contract Value) medio de las cuentas ABM y el ROI del programa. Explica cómo construir el dashboard ABM y con qué frecuencia revisarlo con el equipo de ventas.

Termina con un plan de lanzamiento de 90 días del programa ABM: las cuentas piloto con las que empezar, la tecnología mínima necesaria, las primeras campañas a activar y los hitos de aprendizaje que informarán la escala del programa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar e implementar una estrategia de Account-Based Marketing para ventas B2B complejas',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Technical sales engineering',
                'description'      => 'El sales engineer que traduce capacidades técnicas en valor de negocio: el demo que convence, el proof of concept que elimina el riesgo percibido y la relación con el equipo de ventas que acelera los deals enterprise.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en sales engineering y en el rol del pre-sales técnico en ciclos de venta enterprise. Quiero que me ayudes a desarrollar las habilidades y los procesos que convierten al sales engineer en el factor diferenciador que acelera los deals más complejos.

Mi contexto:
- Tipo de producto técnico: [SaaS, software on-premise, plataforma de datos, infraestructura, API...]
- Complejidad técnica del producto: [describe brevemente las integraciones, la arquitectura y las customizaciones típicas]
- Perfil del comprador: [CTO, VP Engineering, IT Director, o mix técnico y de negocio]
- Ciclo de venta típico: [duración, etapas, número de personas involucradas en la evaluación técnica]
- Mi posición actual: [sales engineer, solutions architect, pre-sales consultant o developer que apoya a ventas]

Con esa información, quiero que me entregues:

1. EL DISCOVERY TÉCNICO: ENTENDER EL PROBLEMA ANTES DEL DEMO
Explica cómo hacer el discovery técnico antes de cualquier demo: las preguntas que revelan el stack actual del cliente, sus integraciones críticas, los pain points técnicos reales y los criterios de evaluación no declarados del equipo técnico. Define la diferencia entre el discovery de negocio (que hace el AE) y el discovery técnico (que hace el SE) y cómo coordinar ambos para que la primera conversación técnica sea de valor y no de presentación genérica. Dame las 15 preguntas de discovery técnico esenciales.

2. EL DEMO TÉCNICO QUE CONVENCE
Diseña la estructura del demo técnico de alto impacto: cómo personalizar el demo a los pain points específicos del cliente (no el demo genérico de producto), cómo demostrar la profundidad técnica del producto sin abrumar al comprador de negocio, cómo gestionar los momentos de la demo donde el producto no tiene exactamente lo que pide el cliente y cómo cerrar el demo con una acción concreta que avance el deal. Dame un guion de demo técnico con los momentos clave y las transiciones.

3. PROOF OF CONCEPT: DISEÑAR EL POC QUE ELIMINA EL RIESGO
Explica cómo diseñar y gestionar un Proof of Concept que demuestre valor sin convertirse en un proyecto de implementación gratuita: los criterios de éxito que debes acordar por escrito antes de empezar (el Statement of Work del POC), el alcance mínimo que demuestra el caso de uso crítico, la duración máxima recomendable, cómo involucrar al equipo técnico del cliente para que se convierta en champion interno y cómo presentar los resultados del POC al comité de decisión.

4. GESTIÓN DE OBJECIONES TÉCNICAS
Define el playbook de objeciones técnicas más comunes en ventas enterprise: las objeciones de seguridad y compliance (cómo responder sobre SOC2, GDPR, penetration testing), las objeciones de integración (cómo demostrar que el producto se integra con el stack existente), las objeciones de escalabilidad (cómo presentar evidencias de carga y rendimiento) y las objeciones de vendor lock-in (cómo argumentar sobre la portabilidad de los datos). Dame los argumentos específicos para las cinco objeciones técnicas más frecuentes en mi categoría de producto.

5. LA RELACIÓN ENTRE EL SE Y EL AE: UN EQUIPO DE DOS
Explica cómo debe funcionar la relación entre el sales engineer y el account executive para maximizar la efectividad del equipo de dos: el briefing antes de cada reunión (qué compartir, qué acordar), el debriefing después (qué aprendimos técnicamente, qué pasos técnicos quedan), cómo gestionar los conflictos cuando las expectativas del AE y las capacidades reales del producto no coinciden y cómo el SE puede contribuir a la estrategia comercial del deal más allá de las reuniones técnicas.

6. DE SE A PRODUCT: INFLUIR EN EL ROADMAP DESDE VENTAS
Explica cómo el sales engineer puede y debe influir en el product roadmap: el proceso de captura de los gaps de producto que aparecen en los deals (qué formato usar, cómo priorizarlos), cómo comunicar el impacto de revenue de una funcionalidad faltante al equipo de producto, cómo participar en los procesos de discovery de producto sin convertirse en un delivery de feature requests de clientes individuales y cómo construir la relación con el equipo de producto que permita al SE ser una voz influyente.

Termina con un plan de desarrollo personal de 90 días para el sales engineer que quiere mejorar su impacto en el win rate: las habilidades técnicas y comerciales en las que invertir, los recursos de aprendizaje recomendados y las métricas con las que medir el progreso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Mejorar el impacto del sales engineer en los deals enterprise',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Pitch decks y materiales de ventas de alto impacto',
                'description'      => 'Diseña las presentaciones que cierran deals: la estructura visual del pitch deck, los principios de diseño de materiales de ventas y el proceso para crear presentaciones que se ven y se sienten como premium.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en diseño de materiales de ventas y pitch decks para empresas B2B. Quiero que me ayudes a diseñar presentaciones y materiales comerciales que transmitan el valor del producto de forma visualmente poderosa y que contribuyan activamente al cierre de deals.

Mi contexto:
- Empresa y producto: [describe qué vendes y tu propuesta de valor diferencial]
- Tipo de presentación que necesito: [pitch para inversores, presentación comercial para clientes, deck de lanzamiento de producto, propuesta técnica]
- Audiencia: [CEO/C-suite, VP de negocio, equipo técnico, inversores]
- Herramientas de diseño disponibles: [Figma, PowerPoint, Keynote, Canva, Google Slides]
- Estado actual de los materiales: [nada, materiales desactualizados, buenos en contenido pero mal en diseño]

Con esa información, quiero que me entregues:

1. ESTRUCTURA NARRATIVA: LA HISTORIA QUE VENDE
Diseña la estructura narrativa del pitch deck: el arco de la historia que lleva al comprador desde el reconocimiento del problema hasta la decisión de compra. Define las diapositivas imprescindibles (problema, solución, evidencia de valor, diferenciación, prueba social, plan de implementación y siguiente paso), el número óptimo de diapositivas según el contexto (live meeting vs. deck enviado por email) y cómo adaptar la estructura según la audiencia. Dame el outline completo de un deck de 15 diapositivas para mi tipo de presentación.

2. PRINCIPIOS DE DISEÑO VISUAL PARA MATERIALES DE VENTAS
Explica los principios de diseño que hacen que un deck de ventas parezca premium y transmita confianza: la jerarquía visual (cómo el ojo recorre la diapositiva), el uso del espacio en blanco, la tipografía que proyecta autoridad, la paleta de colores que comunica los valores de la marca y la coherencia visual entre todas las diapositivas. Define los errores de diseño más comunes en los decks de ventas (exceso de texto, slides sin jerarquía, inconsistencia visual) y cómo evitarlos.

3. LA DIAPOSITIVA DE PROBLEMA: EL MOMENTO MÁS IMPORTANTE
Explica en detalle cómo diseñar la diapositiva de problema: cómo cuantificar el pain para que el comprador lo sienta como urgente (las métricas del problema, el coste de no hacer nada, las consecuencias a largo plazo), qué tipo de visualización (datos en gráfico, cita de analista, escenario narrativo) genera más impacto según la audiencia y cómo conectar el problema genérico del mercado con el problema específico de esta cuenta. Dame tres versiones de la diapositiva de problema para mi contexto.

4. VISUALIZACIÓN DE DATOS: GRÁFICOS QUE CONVENCEN
Diseña el sistema de visualización de datos del deck: qué tipo de gráfico usar para cada tipo de dato (comparación, tendencia temporal, composición, distribución), cómo diseñar los gráficos para que la conclusión sea obvia sin necesidad de explicarla, cómo presentar los resultados de clientes (el antes y después, el ROI calculado, las métricas de adopción) y cómo usar los datos de benchmarking de industria para contextualizar el valor. Dame ejemplos de visualizaciones para los datos más relevantes de mi producto.

5. PRUEBA SOCIAL Y CREDIBILIDAD: EL DISEÑO DE LOS CASOS DE ÉXITO
Explica cómo diseñar los case studies y la prueba social en el deck: el formato del case study de una página (cliente, contexto, solución implementada, resultados con métricas), cómo presentar los logos de clientes de forma que maximicen el efecto de credibilidad, cómo diseñar las citas de clientes para que sean memorables y cómo adaptar los casos de éxito según la industria o el perfil del comprador al que te diriges.

6. EL SISTEMA DE MATERIALES: MÁS ALLÁ DEL DECK
Define el ecosistema completo de materiales de ventas que el diseñador debe construir: el deck de discovery (más preguntas, menos contenido), el deck de propuesta (personalizado, con pricing), el one-pager de resumen ejecutivo, la hoja de batalla competitiva y los templates de email con imagen o mini-deck embebido. Explica cómo mantener la coherencia visual entre todos los materiales y cómo diseñar el sistema en Figma o en la herramienta elegida para que el equipo de ventas pueda personalizar sin romper el diseño.

Termina con un proceso de producción de 10 días para crear el deck principal: las fases de brief, wireframe, diseño, revisión y entrega, y las preguntas que debes hacer al equipo de ventas antes de empezar para que el diseño esté al servicio del proceso de venta real.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar pitch decks y materiales de ventas que contribuyen activamente al cierre de deals',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Complex enterprise sales: cerrar en ciclos de 12 meses',
                'description'      => 'El proceso de ventas enterprise de largo ciclo: la gestión del deal en el tiempo, el mantenimiento del momentum cuando el ciclo se alarga y las técnicas de cierre con múltiples stakeholders.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en ventas enterprise con ciclos de venta complejos de 6 a 18 meses. Quiero que me ayudes a diseñar el proceso y desarrollar las habilidades que permiten gestionar deals de alta complejidad sin perder el momentum y cerrarlos con éxito.

Mi contexto:
- Producto o solución: [describe qué vendes y el problema que resuelve]
- Ciclo de venta típico: [duración media, etapas del proceso de compra del cliente]
- Comité de compra típico: [cuántas personas, qué roles, dónde está el poder real de decisión]
- Valor del deal medio: [ACV o TCV aproximado]
- Principal problema en los deals actuales: [deals que se alargan indefinidamente, pérdida de momentum, no llegar al decisor real, deals que mueren en el comité de compra]

Con esa información, quiero que me entregues:

1. MAPEO DEL COMITÉ DE COMPRA: ENCONTRAR EL PODER REAL
Explica cómo mapear el comité de compra de un deal enterprise: cómo identificar al economic buyer (quien aprueba el presupuesto), al champion (quien nos defiende internamente), a los blockers (quien puede vetar), a los usuarios finales y a los influenciadores técnicos. Define cómo descubrir quién tiene el poder real (que raramente es el cargo más alto en el organigrama de la reunión), las preguntas para revelar la dinámica interna de la empresa y cómo gestionar stakeholders a los que no tenemos acceso directo. Dame una plantilla de mapa del comité de compra.

2. EL PLAN DE DEAL MUTUO: SINCRONIZAR CON EL PROCESO DEL CLIENTE
Define el Mutual Action Plan (MAP) o Close Plan como herramienta de gestión del deal: cómo proponerlo al cliente en una fase temprana del ciclo, qué debe incluir (hitos del proceso de compra del cliente, responsabilidades de cada parte, fechas comprometidas, criterios de decisión explícitos), cómo usarlo para mantener el momentum y como señal de alerta cuando el cliente deja de actualizar o cumplir los hitos acordados. Dame una plantilla de Mutual Action Plan para un deal enterprise de 6 meses.

3. MANTENER EL MOMENTUM EN EL CICLO LARGO
Explica las técnicas para mantener la urgencia y el avance en un ciclo de venta de muchos meses: cómo crear y mantener el "compelling event" (la razón por la que el cliente tiene que decidir antes de una fecha), cómo usar los micro-compromisos para mantener el progreso sin forzar al cliente, cómo diseñar el calendario de touchpoints que aporta valor en cada contacto (no solo seguimiento de "¿alguna novedad?") y cómo recuperar un deal que lleva meses en la misma etapa sin avanzar.

4. BUSINESS CASE Y ROI: LA JUSTIFICACIÓN ECONÓMICA DEL DEAL
Define el proceso de construcción del business case con el champion interno: cómo ayudar al champion a construir la justificación económica que necesita para presentar al board o al CFO, las métricas que los C-suite usan para aprobar inversiones de este tamaño, cómo cuantificar el coste de no hacer nada y cómo diseñar el modelo de ROI que el champion puede defender sin la presencia del vendedor. Dame una estructura de business case executive con las secciones clave.

5. LA NEGOCIACIÓN ENTERPRISE: PRECIO, TÉRMINOS Y CONCESIONES
Explica el proceso de negociación en el cierre del deal enterprise: cuándo introducir el pricing en el proceso para no quemarlo antes de que el valor esté establecido, cómo responder a las presiones de descuento sin destruir el margen, cómo negociar los términos contractuales (SLAs, penalizaciones, cláusulas de salida) con el equipo legal del cliente y cómo gestionar el período de revisión legal que puede añadir semanas al cierre. Define las concesiones aceptables versus las líneas rojas que nunca se cruzan.

6. CIERRE CON MÚLTIPLES STAKEHOLDERS: LA REUNIÓN EJECUTIVA FINAL
Diseña la estrategia para el cierre en un comité de decisión con múltiples stakeholders: cómo preparar la presentación ejecutiva final (qué incluir, qué omitir, cómo adaptar el mensaje para el C-suite versus el equipo técnico), cómo manejar las preguntas difíciles en tiempo real, cómo gestionar las objeciones de último momento que aparecen cuando hay dinero real sobre la mesa y cómo crear la urgencia de cierre sin parecer desesperado. Dame el guion de la reunión ejecutiva de cierre con los momentos clave.

Termina con un diagnóstico del deal: dame las 10 preguntas que debo ser capaz de responder sobre cualquier deal enterprise en mi pipeline para saber con certeza si está en una posición ganadora o si tengo trabajo por hacer.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar y cerrar deals de ventas enterprise con ciclos de 6 a 18 meses',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Enterprise product: adaptar el producto para grandes clientes',
                'description'      => 'Las características que los clientes enterprise necesitan y el proceso de construirlas sin comprometer el producto para el mercado masivo: SSO, permisos granulares, SLAs y el balance entre customización y estandarización.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en product management para mercados enterprise. Quiero que me ayudes a diseñar la estrategia de producto para los clientes enterprise: qué construir, qué no construir y cómo hacerlo sin comprometer el producto para los demás segmentos del mercado.

Mi contexto:
- Producto actual: [describe el producto, el mercado actual y las capacidades existentes]
- Clientes enterprise objetivo: [tamaño, sector, casos de uso que buscan]
- Estado enterprise del producto: [sin ninguna feature enterprise, algunas básicas, en proceso de enterprise-ización]
- Tensión principal: [los clientes enterprise piden customización que el equipo no quiere construir, o hay features enterprise que ralentizan el desarrollo del producto core]
- Recursos del equipo de producto e ingeniería disponibles para enterprise: [aproximado]

Con esa información, quiero que me entregues:

1. EL ENTERPRISE READINESS FRAMEWORK: QUÉ NECESITA UN CLIENTE ENTERPRISE
Define el framework completo de requisitos enterprise que debes evaluar en tu producto: seguridad y compliance (SSO/SAML, SCIM, SOC 2, GDPR, cifrado en reposo y en tránsito), administración y gobierno (permisos granulares por rol, audit logs, gestión centralizada de usuarios), escalabilidad y SLAs (tiempo de actividad garantizado, soporte dedicado, disaster recovery), integraciones (API robusta, webhooks, conectores con los sistemas enterprise más comunes) y customización (white labeling, configuración por tenant). Dame una checklist de enterprise readiness con el nivel de prioridad de cada elemento.

2. SSO Y GESTIÓN DE IDENTIDAD: EL BLOQUEADOR MÁS COMÚN
Explica en detalle cómo implementar SSO/SAML y la gestión de identidad enterprise: por qué el SSO es el requisito enterprise más bloqueante para los deals de gran tamaño, qué estándares debes soportar (SAML 2.0, OIDC, SCIM para el aprovisionamiento automático), cómo diseñar la implementación para que sea flexible (múltiples identity providers por tenant) y cómo presentar el roadmap de SSO al cliente enterprise para desbloquear el deal antes de que esté completamente implementado.

3. PERMISOS GRANULARES Y ROLES: LA COMPLEJIDAD DEL GOBIERNO ENTERPRISE
Diseña el modelo de permisos y roles enterprise: la diferencia entre el modelo de permisos simple (que funciona para SMB) y el modelo granular que necesita enterprise (permisos por recurso, herencia de permisos, roles personalizados), cómo diseñar el sistema de permisos de forma que sea potente para enterprise sin ser incomprensible para el usuario de SMB y cómo gestionar la explosión de complejidad que genera el modelo de permisos cuando hay decenas de tipos de usuarios distintos.

4. MULTI-TENANCY Y AISLAMIENTO DE DATOS
Explica las decisiones de arquitectura de multi-tenancy que afectan al product manager: la diferencia entre shared infrastructure (más barata, menos aislada) y dedicated infrastructure (más cara, más aislada), cómo comunicar al cliente enterprise las garantías de aislamiento de datos, cómo gestionar los requisitos de data residency (datos que deben estar en una región geográfica específica) y cuándo tiene sentido ofrecer una opción de despliegue on-premise o VPC del cliente.

5. PRICING Y PACKAGING ENTERPRISE: MONETIZAR LA COMPLEJIDAD
Define el modelo de pricing y packaging para el segmento enterprise: cuándo separar el tier enterprise con precio fijo (enterprise license) versus mantener un modelo de consumo con volumen garantizado, qué features deben ser exclusivamente enterprise (para justificar el precio) versus qué features deben estar en todos los tiers (para que la adopción masiva justifique su desarrollo), cómo gestionar las negociaciones de precio custom que piden los enterprise sin crear un caos de contratos ad hoc.

6. EL PROCESO DE VENTAS Y EL ROADMAP ENTERPRISE: GESTIONAR LAS PETICIONES
Define el proceso para gestionar las peticiones de features de los clientes enterprise: cómo diferenciar entre los requisitos enterprise genuinamente generalizables (que vale la pena construir) y las customizaciones específicas de un solo cliente (que solo valen si hay un deal grande detrás), cómo comunicar al equipo de ventas lo que está en el roadmap y lo que no, cómo gestionar la conversación con el cliente enterprise sobre los plazos de las features que necesita y cómo evitar que el roadmap enterprise secuestre el producto completo.

Termina con un plan de enterprise readiness de 12 meses: las features enterprise que construir en cada trimestre, los criterios de priorización que usas para decidir qué va primero y los hitos de producto que desbloquearán los deals enterprise más grandes en el pipeline.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar la estrategia de producto para el segmento enterprise',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Executive recruiting y headhunting',
                'description'      => 'Busca y contrata los perfiles más difíciles de encontrar: C-suite, especialistas únicos y líderes que no están buscando trabajo activamente pero que la empresa necesita atraer para ejecutar su estrategia.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en executive search y en la atracción de talento de alto nivel para organizaciones. Quiero que me ayudes a diseñar el proceso de búsqueda y atracción de perfiles ejecutivos y especialistas únicos que no están en el mercado activo de candidatos.

Mi contexto:
- Posición que necesito cubrir: [cargo, área, nivel de responsabilidad]
- Empresa y cultura: [describe la empresa, el momento de crecimiento y la propuesta de valor para el candidato]
- Restricciones de búsqueda: [geografía, sector de procedencia, experiencia mínima, presupuesto de compensación]
- Urgencia: [cuándo se necesita que la persona esté incorporada]
- Intentos previos: [si se ha buscado antes y qué pasó]

Con esa información, quiero que me entregues:

1. EL PERFIL DE ÉXITO: QUÉ NECESITAS DE VERDAD
Explica cómo definir el perfil de éxito de un rol ejecutivo más allá del job description estándar: las competencias que distinguen al candidato excelente del bueno en este rol específico (no en el cargo en abstracto), los indicadores de desempeño de los primeros 90 y 180 días, las experiencias pasadas que predicen el éxito en el contexto de esta empresa (startup vs. corporación, turnaround vs. crecimiento, mercado conocido vs. nuevo mercado) y los dealbreakers reales versus los nice-to-haves que se pueden ceder. Dame una plantilla de perfil de éxito ejecutivo.

2. IDENTIFICACIÓN DE CANDIDATOS PASIVOS: DÓNDE ESTÁN
Diseña el proceso de identificación de candidatos que no están buscando trabajo: las fuentes de mapping (LinkedIn con búsqueda avanzada, bases de datos sectoriales, quién habla en los eventos clave, quién publica en los medios especializados, redes de ex-empleados de empresas de referencia), el proceso de long-listing (construir una lista larga de 50-100 personas) y el criterio de short-listing (cómo reducir la lista a los 10-15 candidatos que merece la pena contactar). Explica qué señales en el perfil de LinkedIn indican que un candidato podría estar receptivo aunque no haya activado el modo "búsqueda activa".

3. EL PRIMER CONTACTO: EL OUTREACH QUE ABRE LA CONVERSACIÓN
Diseña la estrategia de primer contacto con candidatos pasivos de nivel ejecutivo: el mensaje de LinkedIn que abre la conversación sin parecer un mensaje de spam de recruiter, el email de presentación que despierta curiosidad sobre la oportunidad, el papel de los referidos internos y la red de contactos para hacer introducciones cálidas y cómo gestionar el rechazo del primer contacto sin quemar la relación. Dame tres plantillas de primer contacto para distintos niveles de conexión previa con el candidato.

4. EL PROCESO DE SELECCIÓN EJECUTIVA
Define el proceso de selección para perfiles ejecutivos: las fases (conversación exploratoria confidencial, entrevistas con el CEO y el board, referencias tempranas, caso práctico o inmersión en la empresa), la duración esperada y cómo gestionar el proceso para que sea riguroso sin resultar tan largo que pierda al candidato en favor de otra oportunidad. Explica cómo hacer referencias en profundidad a 360 grados (no solo las que proporciona el candidato) y cómo interpretar los patrones que aparecen en ellas.

5. LA PROPUESTA DE VALOR PARA EL CANDIDATO EJECUTIVO
Explica cómo construir y comunicar la propuesta de valor de la posición para un candidato que no necesita el trabajo: más allá del salario, qué hace que este rol sea una oportunidad única (el momento de la empresa, el impacto del rol, la calidad del equipo, el potencial de upside en equity, el aprendizaje que ofrece, el legacy que puede construir). Define cómo personalizar la propuesta según el perfil motivacional de cada candidato y cómo presentarla en la conversación inicial para que el candidato quiera saber más.

6. COMPENSACIÓN Y OFERTA EJECUTIVA
Define el proceso de diseño y negociación de la oferta para un perfil ejecutivo: cómo hacer el benchmarking de compensación ejecutiva (salario base, bonus variable, equity, beneficios), cuándo y cómo abrir la conversación de compensación en el proceso, cómo gestionar la negociación de equity (opciones vs. RSUs, vesting, cliff), cómo estructurar el gardening leave o el non-compete del candidato y cómo cerrar la oferta con un candidato que tiene otras opciones o que necesita gestionar su salida de la empresa actual.

Termina con un plan de búsqueda de 12 semanas para el rol que necesitas cubrir: las actividades de cada semana, los hitos de decisión y las contingencias si el candidato preferido rechaza la oferta.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar y ejecutar un proceso de executive search para perfiles difíciles de encontrar',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Structuring deals: estructurar operaciones financieras complejas',
                'description'      => 'Diseña la estructura financiera de una adquisición, alianza o contrato de gran tamaño: los instrumentos, los mecanismos de precio y las garantías que protegen a ambas partes en operaciones de alta complejidad.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en estructuración de operaciones financieras complejas para empresas y corporaciones. Quiero que me ayudes a diseñar la estructura óptima para una operación de gran tamaño, equilibrando la protección de intereses, la eficiencia fiscal y la viabilidad de la operación para ambas partes.

Mi contexto:
- Tipo de operación: [adquisición de empresa, joint venture, alianza estratégica, contrato de larga duración con cliente grande, financiación de proyecto]
- Partes involucradas: [describe brevemente compradores, vendedores o partes de la alianza]
- Valoración aproximada o volumen de la operación: [rango]
- Principales complejidades: [diferencias de valoración, incertidumbre sobre el negocio futuro, asimetría de información, riesgo regulatorio, necesidad de financiación]
- Restricciones: [plazos, restricciones regulatorias, limitaciones de deuda, consideraciones fiscales conocidas]

Con esa información, quiero que me entregues:

1. SELECCIÓN DE LA ESTRUCTURA: LAS OPCIONES Y SUS TRADE-OFFS
Explica las distintas estructuras posibles para mi tipo de operación y los trade-offs de cada una: compra de activos versus compra de acciones (en una adquisición), joint venture versus acuerdo de distribución (en una alianza), earn-out versus precio fijo (cuando hay incertidumbre sobre el valor futuro). Para cada estructura, define las implicaciones fiscales, legales y operativas para cada parte y dame una recomendación fundamentada en función de mi contexto.

2. MECANISMOS DE AJUSTE DE PRECIO: EARN-OUTS Y OTRAS FÓRMULAS
Explica en profundidad los mecanismos de ajuste de precio para operaciones con incertidumbre sobre el valor futuro: el earn-out (cómo definir las métricas de referencia, el período de devengo, los umbrales, los cap y floor y las cláusulas anti-dilución), el precio variable ligado a métricas de negocio y los escrows como mecanismo de retención del precio hasta la confirmación de determinadas condiciones. Define los errores más comunes en el diseño de earn-outs y cómo evitar los conflictos post-cierre sobre su liquidación.

3. GARANTÍAS E INDEMNIZACIONES: PROTEGER A LAS PARTES
Diseña el régimen de garantías e indemnizaciones de la operación: las manifestaciones y garantías estándar del vendedor en una operación M&A (sobre el negocio, el balance, los litigios, el cumplimiento normativo), los límites de responsabilidad del vendedor (basket, deductible, cap), el plazo de las garantías y las alternativas al régimen clásico de garantías (el seguro de declaraciones y garantías, también conocido como W&I insurance o R&W insurance). Explica cuándo tiene sentido contratar este seguro y qué cubre.

4. ESTRUCTURA DE FINANCIACIÓN: DEUDA, EQUITY Y ESTRUCTURAS HÍBRIDAS
Explica cómo estructurar la financiación de una operación de gran tamaño: la distinción entre deuda senior, deuda subordinada o mezzanine y equity, cómo calcular el nivel de apalancamiento óptimo que maximiza el retorno para el comprador sin comprometer la viabilidad del negocio adquirido, los instrumentos híbridos (bonos convertibles, preferred equity, vendor loans) que cierran el gap entre el precio que pide el vendedor y el que el comprador puede pagar en efectivo y las implicaciones de cada estructura para el control de la sociedad resultante.

5. ASPECTOS FISCALES DE LA ESTRUCTURA
Explica las principales consideraciones fiscales en la estructuración de la operación: la optimización de la estructura de adquisición (holding de adquisición, debt push-down, financiación intragrupo), el tratamiento fiscal de los earn-outs y los instrumentos híbridos, las implicaciones del IVA o del Impuesto de Transmisiones Patrimoniales según la estructura elegida y los riesgos fiscales que debes analizar antes de cerrar (posibles ajustes de valoración, reclamaciones fiscales pendientes, deducciones en riesgo). Explica cuándo es imprescindible una due diligence fiscal.

6. PROCESO Y TIMELINE DE UNA OPERACIÓN COMPLEJA
Define el proceso y el timeline de una operación de alta complejidad: las fases desde la firma de la carta de intenciones (LOI o termsheet) hasta el closing, los documentos que se negocian en cada fase (SPA, SHA, contratos de gestión, non-compete), el rol de los distintos asesores (financiero, legal, fiscal, técnico) y cómo gestionar el proceso para que no se paralice en los momentos críticos de negociación. Dame un Gantt de una operación M&A típica de complejidad media con las fases y los hitos clave.

Termina con los diez errores más comunes en la estructuración de operaciones complejas que tienen consecuencias graves post-cierre y cómo prevenirlos en el diseño inicial de la estructura.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar la estructura óptima para una operación financiera compleja',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Negociación de contratos enterprise y MSAs',
                'description'      => 'Negocia los contratos marco con grandes clientes o proveedores: la estrategia de negociación de las cláusulas más conflictivas, las concesiones aceptables y los puntos en los que nunca debes ceder.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en negociación de contratos comerciales complejos para empresas y despachos de abogados. Quiero que me ayudes a diseñar la estrategia de negociación de un contrato marco con un cliente o proveedor de gran tamaño, identificando las cláusulas críticas, las posiciones de negociación y los límites que nunca debo ceder.

Mi contexto:
- Tipo de contrato: [MSA (Master Services Agreement), SaaS, servicios profesionales, suministro, licencia de software, joint venture]
- Mi posición: [cliente o proveedor/vendedor]
- Contrapartida: [empresa grande con departamento legal propio, empresa similar a la nuestra, empresa extranjera]
- Contexto del acuerdo: [volumen de la relación, duración prevista, dependencia estratégica]
- Principales puntos de tensión esperados: [describe las cláusulas que anticipa conflictivas]

Con esa información, quiero que me entregues:

1. PREPARACIÓN DE LA NEGOCIACIÓN: EL MAPA DE INTERESES
Explica cómo preparar la negociación antes de sentarte a negociar: el mapa de intereses de ambas partes (qué le importa realmente a la otra parte más allá de sus posiciones declaradas), la zona de posible acuerdo (ZOPA) en los puntos más conflictivos, la alternativa si no hay acuerdo (BATNA de ambas partes) y cómo esta información cambia la estrategia y el tono de la negociación. Dame un template de preparación de negociación contractual.

2. CLÁUSULAS CRÍTICAS: LAS BATALLAS QUE IMPORTAN
Identifica y explica las cláusulas más conflictivas en este tipo de contrato y la posición óptima para mi lado: la limitación de responsabilidad (cap de daños, exclusión de daños indirectos y consecuenciales), la indemnización (por infracción de propiedad intelectual, por violación de datos, por negligencia), la confidencialidad (scope, duración, excepciones), la propiedad intelectual de lo que se desarrolla durante la relación y las cláusulas de terminación (causas, preaviso, consecuencias). Para cada cláusula, dame mi posición de apertura, mi posición de compromiso aceptable y mi línea roja.

3. LIMITACIONES DE RESPONSABILIDAD: EL PUNTO MÁS SENSIBLE
Explica en profundidad la negociación de las limitaciones de responsabilidad: por qué el cap de daños es la cláusula más importante del contrato para el proveedor (y por qué el cliente quiere maximizar su exposición), cómo calibrar el cap en función del valor del contrato (múltiplo de las fees anuales, importe fijo, ilimitado para ciertas categorías), qué daños deben estar siempre excluidos (lucro cesante, daños indirectos, daños punitivos) y cuándo tiene sentido aceptar excepciones al cap (muerte, fraude, violación de confidencialidad, violación de protección de datos).

4. PROPIEDAD INTELECTUAL EN CONTRATOS DE SERVICIOS Y SOFTWARE
Diseña la estrategia de negociación de la propiedad intelectual: la distinción entre el IP preexistente del proveedor (que nunca debe ceder), el IP desarrollado expresamente para el cliente durante el contrato (que el cliente querrá en exclusiva) y los trabajos derivados que mezclan ambos. Explica cuándo es razonable ceder la propiedad del IP personalizado al cliente, qué licencia alternativa protege los intereses del proveedor sin bloquear al cliente y cómo manejar la cláusula de IP en un contrato SaaS (donde el proveedor no cede nunca la propiedad del software base).

5. TERMINACIÓN Y CONTINUIDAD DEL SERVICIO
Explica la negociación de las cláusulas de terminación: las causas de terminación por causa justificada (breach material, insolvencia, cambio de control), el preaviso en la terminación por conveniencia (y por qué el cliente siempre quiere más preaviso del que el proveedor puede sostener), la obligación de continuar prestando el servicio durante el período de transición y el deber de cooperación en la migración a otro proveedor. Define los mecanismos de protección del proveedor frente a la terminación oportunista del cliente.

6. RESOLUCIÓN DE DISPUTAS Y LEY APLICABLE
Define la estrategia de negociación de la cláusula de resolución de disputas: arbitraje versus jurisdicción ordinaria (con sus pros y contras para mi posición), la elección de la sede del arbitraje y las reglas aplicables (ICC, LCIA, CIAR, UNCITRAL), el proceso escalonado de resolución (negociación, mediación, arbitraje) y cómo elegir la ley aplicable al contrato cuando las partes son de países distintos. Explica cuándo conviene negociar la mediación obligatoria antes del arbitraje y cuándo es una cláusula que solo retrasa la resolución.

Termina con un simulacro de negociación: dame los cinco argumentos que la otra parte me lanzará en las cláusulas más conflictivas y la respuesta que debo preparar para cada uno, incluyendo las alternativas de redacción que puedo proponer para desbloquear los puntos más difíciles.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Preparar la estrategia de negociación de un contrato marco enterprise',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Enterprise customer success: gestionar las cuentas más grandes',
                'description'      => 'La gestión de las cuentas enterprise que representan el 80% de los ingresos: el modelo de éxito ejecutivo, los Executive Business Reviews y la estrategia de expansión en grandes cuentas.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en customer success enterprise para empresas SaaS y de servicios. Quiero que me ayudes a diseñar el modelo de gestión de las cuentas enterprise que maximiza la retención, la expansión y la satisfacción de los clientes de mayor tamaño y complejidad.

Mi contexto:
- Tipo de producto o servicio: [SaaS B2B, plataforma de datos, servicios profesionales...]
- Definición de enterprise en mi empresa: [ACV, número de empleados del cliente, número de usuarios, complejidad de la implementación]
- Número de cuentas enterprise actuales: [aproximado]
- Ratio de cuentas por CSM enterprise: [cuentas por persona]
- Principales problemas con cuentas enterprise: [complejidad de stakeholders, riesgo de churn, expansión lenta, falta de visibilidad del uso real]

Con esa información, quiero que me entregues:

1. EL MODELO DE ÉXITO PARA CUENTAS ENTERPRISE
Define el modelo de customer success específico para cuentas enterprise: cómo difiere del modelo para SMB (mayor personalización, menor ratio de cuentas por CSM, más tiempo de cara al cliente), la estructura del equipo que necesita una cuenta enterprise (CSM principal, solution architect, apoyo ejecutivo del CEO o CRO), los entregables que el equipo de CS debe producir para cada cuenta (success plan, executive sponsor mapping, health scorecard) y los hitos de la relación que definen el éxito a 12 meses.

2. EL EXECUTIVE BUSINESS REVIEW (EBR): DEMOSTRAR VALOR AL C-SUITE
Diseña el EBR (Executive Business Review) o QBR (Quarterly Business Review) que convenza al C-suite del cliente de que la relación genera valor estratégico: la estructura de la presentación (resultados del período anterior, estado de los objetivos acordados, iniciativas del siguiente período, recomendaciones estratégicas), cómo cuantificar el ROI de la inversión del cliente en el producto, cómo manejar los EBRs cuando los resultados no son los esperados y cómo usar el EBR para crear el contexto para la conversación de renovación y expansión. Dame una plantilla de EBR de 20 diapositivas.

3. MAPA DE STAKEHOLDERS Y GESTIÓN POLÍTICA INTERNA
Explica cómo gestionar la complejidad política de las grandes organizaciones: cómo mapear los stakeholders más allá del contacto principal (el economic buyer, el champion, los usuarios finales, los detractores, el departamento IT, el departamento legal que gestiona la renovación), cómo mantener relaciones activas con múltiples personas en la organización del cliente, cómo detectar cuando el champion pierde influencia interna y cómo construir relaciones ejecutivas que protejan la cuenta cuando hay cambios de liderazgo. Dame una plantilla de mapa de stakeholders enterprise.

4. HEALTH SCORE ENTERPRISE: MEDIR LO QUE IMPORTA
Define el health score adaptado a cuentas enterprise: las métricas de adopción que son relevantes a escala (no solo el número de usuarios activos sino la profundidad de adopción de las funcionalidades críticas), los indicadores de riesgo que aparecen en las grandes cuentas antes del churn (cambio de champion, reducción del presupuesto, evaluación de competidores), los indicadores de expansión (nuevos departamentos que podrían adoptar el producto, nuevos casos de uso discutidos) y cómo automatizar la monitorización del health score sin perder el juicio humano del CSM.

5. ESTRATEGIA DE EXPANSIÓN: CRECER DENTRO DE LAS GRANDES CUENTAS
Diseña la estrategia de expansión (land and expand) en cuentas enterprise: cómo identificar las oportunidades de upsell (más usuarios, más módulos, más funcionalidades premium) y de cross-sell (otros productos del portafolio), cómo crear el business case interno que el champion puede usar para conseguir el presupuesto adicional, cómo coordinar con el equipo de ventas la gestión de la oportunidad de expansión (quién lleva la relación, quién cierra) y cómo medir el Net Revenue Retention (NRR) como métrica clave de la salud del negocio.

6. RENOVACIÓN DE GRANDES CUENTAS: EL PROCESO COMPLETO
Define el proceso de renovación de contratos enterprise de principio a fin: cuándo iniciar el proceso de renovación (normalmente 6 meses antes del vencimiento en grandes cuentas), cómo preparar la conversación de renovación (baseline de valor aportado, propuesta de valor del siguiente período, estrategia de pricing para el upsell), cómo gestionar las conversaciones con el departamento de compras o procurement (que en las grandes corporaciones tiene sus propios procesos y plazos), cómo manejar los intentos del cliente de renegociar el precio en la renovación y cómo escalar la conversación al nivel ejecutivo cuando el deal está en riesgo.

Termina con un plan de cuenta de 12 meses para la cuenta enterprise más importante de tu portfolio: los hitos trimestrales, las actividades de valor que llevarás a cabo, los objetivos de expansión y los indicadores que te alertarán si la cuenta está en riesgo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar y hacer crecer las cuentas enterprise como CSM',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Proyectos enterprise como freelance',
                'description'      => 'Accede y gestiona proyectos de grandes empresas siendo autónomo: la cualificación, los contratos, el proceso de facturación y el modelo de trabajo que permite a un freelance trabajar con grandes corporaciones.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en la gestión de proyectos enterprise para freelancers y consultores independientes. Quiero que me ayudes a diseñar el modelo completo para acceder, ganar y gestionar proyectos con grandes empresas siendo autónomo, sin perder la flexibilidad que hace atractiva la carrera independiente.

Mi contexto:
- Especialidad como freelance: [desarrollo, diseño, consultoría estratégica, marketing, legal, finanzas...]
- Tarifa actual: [por hora o por proyecto]
- Experiencia previa con grandes empresas: [ninguna, algunos proyectos pequeños, ya trabajo con alguna corporación]
- Estructura legal: [autónomo persona física, SL/Ltd, S.A.]
- Objetivo: [conseguir el primer proyecto enterprise, escalar el volumen con grandes clientes, mejorar los términos de los contratos que ya tengo]

Con esa información, quiero que me entregues:

1. POSICIONAMIENTO: POR QUÉ UNA GRAN EMPRESA CONTRATARÍA UN FREELANCE
Explica qué ventajas tiene un freelance frente a una consultora grande en la mente de un cliente enterprise: la velocidad de respuesta, la especialización profunda sin generalistas, el acceso directo al experto, el coste sin overhead de consultoría y la flexibilidad de escala. Define cómo posicionar estas ventajas en la conversación con el cliente y cómo neutralizar las objeciones típicas sobre la falta de tamaño (continuidad del proyecto, sustitución en caso de baja, cobertura de responsabilidad).

2. CÓMO ENCONTRAR PROYECTOS ENTERPRISE
Diseña la estrategia de generación de oportunidades en el mercado enterprise: las plataformas donde las grandes empresas buscan freelancers (Toptal, Expert360, consultoras boutique como intermediarios, los portales de vendor management), el networking con los intermediarios que conectan freelancers con corporaciones (procurement de las grandes empresas, directores de área que externalizan proyectos, ex-compañeros que ahora están en corporaciones), y cómo usar LinkedIn y el portfolio de proyectos para ser encontrado por los managers que buscan talento externo. Define las diferencias entre el proceso de compra en una startup y en una corporación.

3. EL PROCESO DE HOMOLOGACIÓN COMO PROVEEDOR
Explica el proceso de homologación como vendor de una gran empresa: los documentos que suelen requerir (escritura de constitución o alta de autónomo, certificado de estar al corriente con Hacienda y la Seguridad Social, póliza de responsabilidad civil, certificaciones o acreditaciones de la especialidad), cómo gestionar los formularios de vendor registration que pueden tener decenas de campos, cuánto tiempo suele durar el proceso y cómo acelerar la homologación cuando hay un proyecto urgente esperando. Dame un checklist de documentos de homologación habitual.

4. EL CONTRATO CON LA GRAN EMPRESA: CÓMO NEGOCIAR DESDE UNA POSICIÓN ASIMÉTRICA
Explica cómo negociar los contratos con grandes empresas cuando la corporación impone su propio contrato marco (MSA): las cláusulas más problemáticas para un freelance (IP que se generará durante el proyecto, confidencialidad ilimitada, limitación de trabajar para la competencia, pagos a 60 o 90 días), cuáles se pueden negociar y cuáles son prácticamente innegociables, cómo proteger tu IP preexistente en proyectos de desarrollo y cuándo tiene sentido rechazar un contrato por las condiciones aunque el proyecto sea atractivo. Dame los cinco puntos que siempre debes intentar negociar.

5. GESTIÓN DEL PROYECTO Y COMUNICACIÓN CON STAKEHOLDERS CORPORATIVOS
Diseña el modelo de trabajo para un proyecto enterprise: cómo gestionar la burocracia interna (aprobaciones, revisiones, múltiples stakeholders con agendas distintas), cómo adaptar el ritmo de trabajo a la cultura corporativa (sin perder la productividad que tienes como freelance), cómo documentar el avance del proyecto para satisfacer las exigencias de governance del cliente y cómo gestionar el scope creep cuando el cliente pide más de lo acordado en el contrato original.

6. FACTURACIÓN Y COBROS EN PROYECTOS ENTERPRISE
Explica las particularidades de la facturación y el cobro en proyectos con grandes empresas: cómo estructurar el contrato para que los hitos de pago sean alcanzables (no todo al cierre), cómo gestionar los plazos de pago de 60 o 90 días sin que afecten a la liquidez, qué mecanismos de protección incluir en el contrato (intereses de demora, derecho a suspender el servicio si hay impago), cómo navegar el proceso de aprobación de facturas dentro de la corporación (que puede requerir múltiples firmas y plazos internos) y qué herramientas de gestión de tesorería usar para suavizar los picos y valles de cobro.

Termina con un plan de acción de 90 días para conseguir el primer (o el siguiente) proyecto enterprise: las acciones de networking de la primera semana, los materiales que preparar, el proceso de homologación que iniciar en paralelo y las métricas que indicarán que la estrategia está funcionando.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Acceder y gestionar proyectos con grandes empresas siendo freelance',
                'vote_score'       => 44,
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
