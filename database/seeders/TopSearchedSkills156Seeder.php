<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills156Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Compliance en publicidad digital',
                'description'       => 'Las reglas que los equipos de marketing suelen ignorar hasta que llega la multa: ASA, FTC, AUTOCONTROL y los riesgos del influencer marketing no regulado.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en derecho publicitario y cumplimiento normativo en marketing digital con experiencia asesorando a equipos de marketing en España, Reino Unido y EEUU. Voy a compartirte información sobre mis campañas y prácticas actuales, y necesito que me ayudes a identificar los riesgos de cumplimiento y a diseñar procesos para operar dentro de la ley sin paralizar la creatividad del equipo.

**Contexto que debes pedirme si no lo proporciono:**
- Tipo de empresa y sector (financiero, salud, alimentación, cosméticos, tecnología)
- Mercados donde operas (España, UE, EEUU, UK)
- Canales de marketing que usas (redes sociales, email, SEM, influencers, programática)
- Si trabajas con influencers o creadores de contenido y en qué escala
- Historial de reclamaciones o advertencias de organismos reguladores

**Parte 1 — El mapa regulatorio del marketing digital**

El marketing digital opera bajo múltiples capas regulatorias que se superponen y a veces se contradicen:

Regulación publicitaria general: en España, la Ley General de Publicidad y el Código de Conducta de AUTOCONTROL; en UK, las ASA Guidelines (CAP/BCAP); en EEUU, las FTC Guidelines. Lo que tienen en común: la publicidad no debe ser engañosa, debe identificarse claramente como tal y las afirmaciones sobre el producto deben ser verídicas y verificables.

Regulación de datos y privacidad en marketing: el RGPD en la UE afecta a cualquier actividad de marketing que use datos personales: segmentación, retargeting, email marketing. La Directiva de Privacidad y Comunicaciones Electrónicas (ePrivacy) regula las cookies y las comunicaciones comerciales no solicitadas.

Regulación sectorial: el sector financiero (CNMV, FCA), salud (AEMPS, MHRA), alimentación (EFSA) y cosméticos tienen regulaciones adicionales que limitan qué se puede y no se puede decir en publicidad. Estos sectores son los de mayor riesgo de multa.

**Parte 2 — Publicidad en redes sociales: las reglas que más se ignoran**

Las plataformas de redes sociales tienen sus propias políticas además de la regulación general:
- La obligación de identificar el contenido publicitario: en España, la normativa exige etiquetar el contenido publicitario con "publicidad", "ad", "patrocinado" o equivalente de forma que sea claramente visible. No es suficiente con un hashtag enterrado en los últimos caracteres del caption.
- Afirmaciones prohibidas o restringidas: las afirmaciones de resultado ("pierde 10 kilos en un mes"), las comparaciones con competidores sin datos que las soporten, y los testimoniales no representativos son fuentes habituales de reclamaciones.
- Publicidad dirigida a menores: las restricciones en Facebook, Instagram y TikTok para publicidad de alcohol, juegos de azar, alimentos con alto contenido de azúcar o grasas saturadas dirigida a menores.
- Dark patterns en publicidad digital: la regulación de la UE sobre prácticas comerciales desleales que considera ilegales ciertos patrones de diseño de landing pages y flows de conversión.

**Parte 3 — Influencer marketing: el área de mayor riesgo**

El influencer marketing es el área de marketing digital con más reclamaciones activas y mayor riesgo de multa en 2024-2025:
- La obligación de identificación clara: el influencer que recibe cualquier compensación (monetaria, en especie, invitaciones, códigos de descuento, productos gratuitos) está obligado a identificar el contenido como publicidad. La regla aplica aunque el influencer tenga libertad creativa total.
- Quién es responsable: el anunciante, la agencia y el influencer comparten responsabilidad según la regulación española y europea. El anunciante no puede delegarlo todo al influencer y desentenderse.
- Los contratos con influencers que te protegen: qué cláusulas deben incluirse para asegurarte de que el influencer cumple con las obligaciones de identificación y que tienes derecho de reclamar si incumple.
- La Ley de Influencers española: el Real Decreto 444/2024 que regula a los prestadores de servicios audiovisuales compartidos, sus obligaciones y las sanciones por incumplimiento.

**Parte 4 — Email marketing y spam**

El email marketing mal ejecutado genera multas y destruye la reputación del dominio:
- Los requisitos del RGPD para el email marketing: base legal para el envío (consentimiento explícito o interés legítimo en B2B), registro del consentimiento, derecho de baja efectiva en menos de 10 días
- La Ley de Servicios de la Sociedad de la Información (LSSI) en España: la prohibición del spam, las excepciones para clientes actuales y las sanciones por incumplimiento
- Los requisitos técnicos de las plataformas de email (Gmail, Outlook) para no caer en spam: SPF, DKIM, DMARC, tasa de rebote y de spam, gestión de bajas

**Parte 5 — Procesos de compliance para el equipo de marketing**

El compliance de marketing no puede ser una revisión posterior que frena todas las campañas; debe ser parte del proceso creativo:
- El checklist de compliance que el equipo de marketing debe completar antes de publicar cualquier campaña o contenido patrocinado
- El proceso de revisión de materiales publicitarios con los plazos adecuados para cada tipo de campaña
- Cómo formar al equipo de marketing en compliance sin que lo perciban como burocracia
- El protocolo de respuesta ante una reclamación de AUTOCONTROL, ASA o FTC: tiempos, documentación necesaria, quién gestiona la respuesta

Termina con los cinco riesgos de compliance de marketing digital más frecuentes en empresas como la mía y la acción concreta para mitigar cada uno.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Identificar y gestionar riesgos de compliance en campañas de publicidad digital e influencer marketing',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Desarrollo bajo regulación (SOC2, ISO27001)',
                'description'       => 'Implementa los controles técnicos que exige una certificación de seguridad: qué hacer en el código, en la infraestructura y en los procesos para pasar la auditoría.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de seguridad de la información con experiencia guiando a equipos de desarrollo en la obtención de certificaciones SOC 2 Type II e ISO 27001. Voy a compartirte información sobre nuestra arquitectura y nuestro objetivo de certificación, y necesito que me ayudes a entender qué controles técnicos debo implementar y cómo integrarlos en el proceso de desarrollo sin ralentizar el equipo.

**Contexto que debes pedirme si no lo proporciono:**
- Certificación objetivo: SOC 2 Type I/II, ISO 27001, ambas, o evaluación de qué conviene más
- Industria y tipo de clientes (enterprise B2B, fintech, healthtech, SaaS general)
- Arquitectura actual: cloud provider, lenguajes, bases de datos, CI/CD
- Tamaño del equipo de desarrollo y si hay alguien dedicado a seguridad
- Plazo objetivo para la certificación

**Parte 1 — SOC 2 vs. ISO 27001: elegir el camino correcto**

Antes de implementar controles, es crítico entender qué certifica cada estándar y qué te piden los clientes:
- SOC 2 está basado en los Trust Services Criteria del AICPA y es el estándar que exigen los compradores enterprise norteamericanos. SOC 2 Type I certifica que los controles están diseñados; Type II certifica que han estado operando durante al menos seis meses.
- ISO 27001 es el estándar internacional reconocido globalmente, requerido frecuentemente por clientes europeos y en sectores como defensa, gobierno y servicios financieros.
- La intersección es grande: muchos controles satisfacen ambos estándares simultáneamente. Explica la estrategia de obtener ambas certificaciones de forma eficiente.

**Parte 2 — Los controles técnicos en el código**

Los controles que viven en el código fuente y en el proceso de desarrollo:

Gestión de secretos: prohibición de hardcodear secretos, API keys o contraseñas en el código. Implementación de gestión de secretos con AWS Secrets Manager, HashiCorp Vault o Azure Key Vault. Cómo detectar secretos comprometidos antes de que lleguen al repositorio (pre-commit hooks, git-secrets, truffleHog).

Control de acceso y autenticación: implementación de autenticación fuerte en la aplicación (MFA, passwords seguros, gestión de sesiones), control de acceso basado en roles (RBAC) con principio de mínimo privilegio, logging de accesos y acciones sensibles.

Seguridad en el desarrollo: cómo integrar SAST (Static Application Security Testing) en el pipeline de CI/CD para detectar vulnerabilidades en el código antes del deploy. Las herramientas más usadas: Semgrep, Snyk, SonarQube. Dependency scanning para detectar vulnerabilidades en librerías de terceros.

Cifrado de datos: datos en reposo cifrados (AES-256), datos en tránsito sobre TLS 1.2+, gestión de claves de cifrado, qué datos deben cifrarse y cuáles están fuera del alcance del cifrado.

**Parte 3 — Los controles técnicos en la infraestructura**

Los controles que viven en la infraestructura cloud o on-premise:
- Identity and Access Management (IAM): principio de mínimo privilegio en los permisos cloud, separación de entornos (dev, staging, producción con accesos diferentes), MFA obligatoria para accesos a producción, prohibición de credenciales de larga duración (preferir roles temporales)
- Network security: segmentación de red, security groups restrictivos, WAF para aplicaciones web, VPN o zero-trust para accesos internos, prohibición de servicios expuestos públicamente sin necesidad
- Logging y monitoring: centralización de logs, retención de logs durante el período exigido (típicamente 12 meses para SOC 2), alertas sobre eventos de seguridad, SIEM para correlación de eventos
- Gestión de vulnerabilidades: escaneo periódico de infraestructura, política de parcheo (SLA de aplicación de parches críticos en menos de 30 días), gestión de cambios con aprobación antes de modificaciones en producción

**Parte 4 — Los controles de proceso**

La certificación no es solo técnica; los auditores también evalúan los procesos:
- Change management: toda modificación en producción debe seguir un proceso documentado con revisión de código, aprobación y testing previo. Demostrar que no existen deploys directos a producción sin control.
- Incident response: el plan de respuesta a incidentes de seguridad documentado y probado. Quién hace qué en caso de brecha, en qué plazo y cómo se comunica a los clientes afectados.
- Vendor management: evaluación de seguridad de los proveedores críticos (subprocesadores de datos), inventario de proveedores con acceso a datos sensibles
- Business continuity y disaster recovery: RTO y RPO definidos, estrategia de backup probada, plan de continuidad documentado

**Parte 5 — Preparación para la auditoría**

La auditoría SOC 2 o ISO 27001 es un proceso que dura meses; la preparación determina el resultado:
- El gap assessment: cómo evaluar la distancia entre los controles actuales y los requeridos, y priorizar las implementaciones según el riesgo y el esfuerzo
- La documentación que debes tener: políticas de seguridad, procedimientos, evidencias de control (logs, capturas, registros de revisión)
- Cómo trabajar con el auditor: la diferencia entre auditores que te ayudan a certificarte y los que solo buscan hallazgos, y cómo elegir el partner adecuado
- El roadmap de implementación para obtener SOC 2 Type II en 12 meses desde cero

Termina con el plan de implementación en cuatro fases para los primeros seis meses, con los entregables técnicos de cada fase.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Implementar controles técnicos para obtener certificación SOC 2 o ISO 27001',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño accesible (WCAG 2.2)',
                'description'       => 'Los criterios de accesibilidad que son obligatorios por ley en Europa y EEUU: cómo implementarlos en Figma y en código sin ralentizar el proceso de diseño.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un diseñador de producto especializado en accesibilidad digital con experiencia implementando WCAG 2.2 en productos web y móviles. Voy a compartirte información sobre un proyecto de diseño, y necesito que me ayudes a integrar la accesibilidad como parte del proceso de diseño, no como una corrección posterior que ralentiza el lanzamiento.

**Contexto que debes pedirme si no lo proporciono:**
- Tipo de producto: web, app móvil, herramienta interna, ecommerce, aplicación pública
- Si existe ya un producto con deuda de accesibilidad o es un proyecto nuevo
- El nivel de WCAG objetivo: A, AA (requerido por ley en la mayoría de contextos) o AAA
- Si hay obligación legal específica: sector público, empresa con más de 50 empleados en España, empresa que opere en mercados con ADA (EEUU)
- Herramientas de diseño disponibles: Figma, Sketch, Adobe XD

**Parte 1 — Marco legal de la accesibilidad digital**

La accesibilidad no es solo ética; en muchos contextos es obligatoria por ley:
- En España: el Real Decreto 1112/2018 obliga a los sitios web y aplicaciones del sector público a cumplir WCAG 2.1 nivel AA. La Ley 11/2023 amplía las obligaciones al sector privado con más de 10 trabajadores o facturación superior a dos millones de euros.
- En la UE: la Directiva de Accesibilidad Web y el European Accessibility Act (EAA/Directiva 2019/882) que entra en aplicación plena en junio de 2025 amplía los requisitos al sector privado para productos y servicios digitales.
- En EEUU: la Section 508 para el sector público y la ADA Americanos con Discapacidades, bajo la que se han generado miles de demandas contra empresas privadas por sitios web inaccesibles.
- Las consecuencias del incumplimiento: multas regulatorias, demandas, exclusión de licitaciones públicas y daño reputacional.

**Parte 2 — Los cuatro principios WCAG y su impacto en el diseño**

WCAG 2.2 organiza los criterios de accesibilidad en cuatro principios. Para cada uno, explica qué significa en decisiones de diseño concretas:

Perceptible: la información y los componentes de la interfaz deben presentarse de manera que los usuarios puedan percibirlos. Implicaciones de diseño: contraste de color mínimo 4.5:1 para texto normal y 3:1 para texto grande, alternativas de texto para imágenes y medios, no usar solo el color para transmitir información.

Operable: los componentes de la interfaz y la navegación deben ser operables. Implicaciones de diseño: todos los elementos interactivos deben ser accesibles con teclado, los elementos de foco deben tener un indicador visual claro (WCAG 2.2 lo refuerza con 2.4.11 y 2.4.12), los targets táctiles mínimos de 24x24 píxeles (criterio nuevo en WCAG 2.2).

Comprensible: la información y el funcionamiento de la interfaz deben ser comprensibles. Implicaciones de diseño: consistencia de navegación y componentes, mensajes de error descriptivos, instrucciones claras en formularios.

Robusto: el contenido debe ser suficientemente robusto para ser interpretado por diferentes agentes de usuario. Implicaciones de diseño: usar HTML semántico, ARIA roles cuando el HTML no es suficiente, pruebas con lectores de pantalla reales.

**Parte 3 — Accesibilidad en Figma: cómo diseñar para accesibilidad desde el principio**

La accesibilidad integrada en el diseño es diez veces más barata que corregirla en código:
- Cómo configurar Figma para trabajar con accesibilidad: plugins de contraste (Contrast, Able, A11y - Annotation Kit), cómo usar el panel de anotaciones para documentar los requerimientos de accesibilidad para el equipo de desarrollo
- Diseño de la jerarquía de encabezados: cómo definir la estructura semántica del documento en Figma para que el desarrollador sepa qué elementos son H1, H2, etc.
- Diseño de estados de foco: cómo mostrar el estado de foco del teclado en los mockups para que sea parte del diseño, no una corrección posterior
- Diseño de alternativas: cómo documentar el texto alternativo para imágenes, los labels para formularios y las descripciones para gráficos complejos directamente en el archivo de Figma

**Parte 4 — Componentes accesibles: checklist por tipo de elemento**

Diseña el checklist de accesibilidad para los componentes más comunes:
- Botones e inputs: texto visible, label accessible, estado disabled, estado de error
- Formularios: labels asociados, agrupación de campos relacionados, mensajes de error descriptivos y vinculados al campo
- Tablas: encabezados de columna y fila, caption, resumen para tablas complejas
- Modales y overlays: gestión del foco al abrir y cerrar, trampa de foco dentro del modal, cierre con Escape
- Navegación: landmark regions, skip to content link, estado activo de los items de navegación
- Imágenes e iconos: texto alternativo descriptivo para imágenes con información, alt vacío para imágenes decorativas

**Parte 5 — Testing de accesibilidad integrado en el proceso**

La accesibilidad no puede verificarse solo con herramientas automáticas:
- Testing automático: Axe, Wave, Lighthouse. Lo que detectan y lo que no detectan (solo el 30-40% de los criterios WCAG son automatizables)
- Testing con lectores de pantalla: NVDA+Chrome (Windows), VoiceOver+Safari (Mac), TalkBack (Android). Cómo hacer un recorrido básico con lectores de pantalla sin ser experto en accesibilidad.
- Testing con teclado: el protocolo de navegación solo con teclado que debes completar antes de cualquier release
- Integración en el proceso: cuándo hacer cada tipo de test en el ciclo de desarrollo (diseño, código, QA, release)

Termina con el plan de implementación de accesibilidad para los próximos dos meses en un producto existente con deuda de accesibilidad.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Implementar accesibilidad WCAG 2.2 en el proceso de diseño y desarrollo',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Ventas en mercados regulados',
                'description'       => 'Farmacéutica, servicios financieros, defensa: los procesos de venta donde el compliance es parte del ciclo comercial y el vendedor necesita conocer la regulación.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de ventas con experiencia en sectores fuertemente regulados: farmacéutico, servicios financieros, defensa, energía o sector público. Voy a compartirte información sobre mi sector y mi proceso de ventas, y necesito que me ayudes a integrar el compliance regulatorio en el ciclo comercial sin que se convierta en un freno para el equipo de ventas.

**Contexto que debes pedirme si no lo proporciono:**
- Sector específico y tipo de producto o servicio que vendes
- Mercados geográficos donde operas
- El perfil del comprador: responsable de compras, comité técnico, regulador como stakeholder de influencia
- Los principales requisitos regulatorios que afectan al proceso de venta
- Si el problema es conocimiento de la regulación, procesos internos o formación del equipo

**Parte 1 — Por qué vender en mercados regulados es diferente**

En mercados no regulados, el vendedor que convence al comprador cierra el deal. En mercados regulados, hay un tercer stakeholder que no se siente en la negociación pero tiene poder de veto: el regulador:
- El ciclo de venta regulado: cómo los requisitos de aprobación regulatoria, los procesos de licitación pública y los comités de validación técnica alargan el ciclo y añaden puntos de decisión que el vendedor debe conocer y gestionar
- La figura del "compliance champion" interno en el cliente: la persona que valida si tu producto puede ser usado legalmente en su organización. Identificarla y trabajar con ella es tan importante como identificar al Economic Buyer.
- Los documentos regulatorios que el vendedor debe conocer para tener conversaciones de valor con clientes de sectores regulados: ficha técnica, hoja de seguridad, RCP, prospectos, autorizaciones de comercialización
- Cómo el conocimiento de la regulación es el principal diferenciador competitivo en ventas de sectores regulados

**Parte 2 — Ventas en farmacéutica y salud**

El sector farmacéutico tiene las restricciones de promoción más estrictas del mercado:
- Qué se puede y no se puede hacer en la visita médica: afirmaciones sobre el medicamento que deben estar respaldadas por el RCP, prohibición de off-label promotion, restricciones en la entrega de muestras y material promocional
- El papel de los medical affairs, market access y regulatory affairs en el ciclo de venta: los interlocutores que el vendedor debe conocer más allá del médico o el farmacéutico
- Licitaciones de hospitales y sistemas de salud: el proceso de inclusión en guías farmacoterapéuticas, el papel de las comisiones de farmacia y terapéutica, las evaluaciones de tecnología sanitaria
- Compliance en la relación con los profesionales sanitarios: el Código de Buenas Prácticas de la Industria Farmacéutica (Farmaindustria en España, EFPIA en Europa), las restricciones en hospitalidad, los registros de transferencias de valor

**Parte 3 — Ventas en servicios financieros**

Los servicios financieros están bajo supervisión de reguladores con poder sancionador real:
- MiFID II y la venta de productos de inversión: la obligación de hacer el test de idoneidad y conveniencia antes de recomendar un producto, la documentación de la relación con el cliente, las restricciones en incentivos
- PSD2 y la venta de servicios de pago: los requisitos de autorización para prestar servicios de pago y la responsabilidad del vendedor de asegurarse de que el cliente entiende los costes y los riesgos
- Seguros (IDD): la obligación de hacer el análisis de necesidades del cliente antes de recomendar un seguro, la documentación del proceso de asesoramiento
- Cómo gestionar el ciclo de venta de servicios financieros complejos cuando intervienen compliance, riesgos, jurídico y el propio regulador como stakeholders

**Parte 4 — Ventas en sector público y defensa**

Las licitaciones públicas tienen sus propias reglas y sus propias oportunidades:
- El proceso de licitación pública en España: LCSP, tipos de procedimiento (abierto, restringido, negociado, diálogo competitivo), plazos y criterios de adjudicación
- Cómo influir en el pliego antes de que se publique: la relación con el órgano de contratación en la fase pre-licitación, la consulta al mercado (market consultation)
- El recurso a la licitación: cuándo y cómo presentar recurso especial en materia de contratación cuando los pliegos son restrictivos o la adjudicación parece irregular
- Ventas en defensa: los permisos de exportación (licencias de exportación de material de defensa), los procesos de offset y compensaciones industriales, las diferencias entre contratos de I+D, de adquisición y de servicio

**Parte 5 — Procesos y formación del equipo de ventas en mercados regulados**

El vendedor de un sector regulado necesita formación y procesos diferentes:
- El onboarding de un vendedor en un sector regulado: los meses de formación regulatoria antes de la primera visita de cliente, los tests de certificación internos y externos
- El proceso de revisión de materiales de venta por parte de compliance: cómo acelerar las revisiones sin comprometer la calidad del compliance
- Los límites del vendedor: qué preguntas regulatorias debe responder el vendedor y cuáles debe redirigir a medical affairs, regulatory o jurídico
- Cómo medir el performance del equipo de ventas en sectores regulados cuando no todo lo que importa es el revenue a corto plazo

Termina con los cinco puntos de mayor riesgo de cumplimiento en el proceso de ventas de mi sector y la acción concreta para mitigar cada uno.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Integrar compliance regulatorio en el proceso de ventas en sectores de alto riesgo',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Producto en mercados regulados',
                'description'       => 'PSD2, HIPAA, MiFID II: cómo hacer producto cuando el regulador es un stakeholder con veto y las decisiones de compliance afectan al roadmap.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product manager con experiencia en sectores fuertemente regulados: fintech bajo PSD2 y MiFID II, healthtech bajo HIPAA o MDR, legaltech bajo GDPR. Voy a compartirte información sobre mi producto y el entorno regulatorio en el que opera, y necesito que me ayudes a tomar decisiones de producto que cumplan con la regulación sin que el compliance se convierta en el principal freno del roadmap.

**Contexto que debes pedirme si no lo proporciono:**
- Sector y regulación principal que aplica a tu producto
- Mercados geográficos donde opera el producto
- Si el producto ya está en producción con usuarios o está en desarrollo
- Los principales conflictos actuales entre las decisiones de producto y los requisitos regulatorios
- Relación con el equipo de compliance, legal y regulatorio interno

**Parte 1 — El regulador como stakeholder de producto**

En mercados no regulados, el product manager balancea las necesidades del usuario, del negocio y de la tecnología. En mercados regulados, hay un cuarto stakeholder que no asiste a los sprint reviews pero tiene poder de veto:
- Cómo incorporar los requisitos regulatorios al proceso de discovery: cuándo involucrar a compliance y legal en la fase de definición de un feature (antes de diseñar, no antes de lanzar)
- La diferencia entre los requisitos regulatorios no negociables (el regulador no acepta interpretaciones) y los que admiten implementaciones alternativas (el resultado está prescrito, no la solución técnica)
- Cómo construir la relación con el equipo de compliance para que sea un colaborador del roadmap en lugar de un departamento que dice no a todo
- El riesgo regulatorio como dimensión del scoring de priorización: cómo incluir el riesgo de multa o de enforcement en la matriz de priorización junto con el impacto para el usuario y el negocio

**Parte 2 — Producto en fintech: PSD2, MiFID II y Open Banking**

Las regulaciones que más afectan al product management en servicios financieros:

PSD2 y autenticación fuerte (SCA): la obligación de implementar autenticación de dos factores para transacciones de pago genera fricciones en el usuario que el PM debe gestionar. Cómo diseñar flows de SCA que cumplan con la regulación sin destruir la conversión. Las exenciones disponibles (transacciones de bajo valor, análisis de riesgo de transacción, comerciante de confianza) y cómo implementarlas correctamente.

Open Banking: los APIs que los bancos deben exponer bajo PSD2 y cómo los PMs de fintechs pueden construir sobre ellas. Los desafíos prácticos de trabajar con APIs bancarias: calidad, disponibilidad y los fallbacks cuando los APIs no funcionan.

MiFID II y la información al cliente: los requisitos de información precontractual, los tests de idoneidad y conveniencia, y cómo diseñar flujos que cumplan con MiFID II sin convertir el onboarding en un interrogatorio que abandona el 80% de los usuarios.

**Parte 3 — Producto en healthtech: HIPAA, MDR y CE marking**

Las regulaciones que más afectan al producto en tecnología sanitaria:
- HIPAA (EEUU): qué datos son Protected Health Information (PHI), los requisitos de seguridad técnica, física y administrativa, y cómo diseñar un producto que maneje PHI sin convertirse en una brecha de seguridad andante
- MDR europeo: cuándo un software es un dispositivo médico bajo el Reglamento de Dispositivos Médicos, las clasificaciones (clase I, IIa, IIb, III) y lo que implica cada una para el proceso de desarrollo, los requisitos de documentación técnica y el marcado CE
- El Sistema de Gestión de Calidad (QMS) como requisito de producto: cómo la norma ISO 13485 afecta al proceso de desarrollo cuando el producto es o contiene un dispositivo médico
- El post-market surveillance: la obligación de monitorizar el producto en uso y cómo integrar esa obligación regulatoria con el proceso habitual de análisis de métricas de producto

**Parte 4 — El roadmap en un entorno regulado**

Cómo gestionar el roadmap cuando los requisitos regulatorios compiten con las features de usuario:
- Cómo estimar el esfuerzo de los proyectos de compliance: por qué suelen subestimarse y cómo hacer estimaciones más realistas que incluyan la revisión regulatoria, los tests de conformidad y la documentación
- La deuda de compliance: cuándo es aceptable priorizar features de usuario sobre compliance (early stage, usuario no afectado por la regulación) y cuándo no lo es nunca
- Cómo comunicar las restricciones regulatorias al equipo de diseño y desarrollo sin generar frustración: la diferencia entre "el regulador dice que no" y "el regulador requiere este resultado, diseñemos la mejor solución dentro de esa restricción"
- Cuándo solicitar una opinión o no-action letter al regulador sobre una nueva funcionalidad que está en zona gris regulatoria

**Parte 5 — Lanzamiento en mercados regulados**

Los pasos adicionales del lanzamiento cuando el regulador debe aprobar o ser notificado:
- El proceso de autorización previa vs. notificación posterior: cuándo el producto puede lanzarse y notificar al regulador vs. cuándo debe esperar la aprobación
- El rollout gradual en mercados regulados: cómo hacer un beta launch controlado cuando hay restricciones regulatorias sobre quién puede acceder al producto
- La documentación de lanzamiento que los reguladores pueden solicitar: ficha técnica, instrucciones de uso, evaluación de riesgos, plan de post-market surveillance
- Post-lanzamiento: cómo gestionar los cambios en el producto que pueden requerir re-evaluación o re-certificación

Termina con las tres decisiones de roadmap de los próximos seis meses que tienen mayor implicación regulatoria y cómo abordarlas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Tomar decisiones de roadmap y producto en sectores con PSD2, HIPAA o MDR',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Compliance laboral',
                'description'       => 'Los riesgos legales que el departamento de RRHH debe gestionar: clasificación de empleados, horas extraordinarias, igualdad retributiva y las auditorías de la Inspección de Trabajo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en derecho laboral y relaciones laborales con experiencia asesorando a departamentos de RRHH en la gestión del compliance laboral. Voy a compartirte información sobre nuestra empresa y nuestras prácticas de gestión de personas, y necesito que me ayudes a identificar los riesgos laborales más relevantes y a diseñar los procesos para mitigarlos antes de que llegue una inspección o una denuncia.

**Contexto que debes pedirme si no lo proporciono:**
- Tamaño de la plantilla y tipos de contrato utilizados
- Sector y convenio colectivo aplicable
- Prácticas que generan más dudas: teletrabajo, flexibilidad horaria, freelancers y autónomos, retribución variable
- Si ha habido inspecciones o denuncias previas
- País o comunidad autónoma principal de operación

**Parte 1 — Los riesgos laborales más frecuentes en las empresas españolas**

La Inspección de Trabajo tiene datos históricos de las infracciones más comunes:

Falsos autónomos: la empresa que trabaja con autónomos o freelancers que en realidad cumplen los criterios de laboralidad (dependencia económica, ajenidad, instrucciones de la empresa, horario fijo) está asumiendo un riesgo de relación laboral encubierta. Las consecuencias incluyen el reconocimiento de la relación laboral con efectos retroactivos, el pago de las cotizaciones sociales no ingresadas y las sanciones de la Inspección.

Control de jornada: desde 2019, el Real Decreto-Ley 8/2019 obliga a todas las empresas con trabajadores por cuenta ajena a registrar diariamente la jornada de trabajo. Los incumplimientos son sancionables con multas de hasta 6.250€ por infracción. Cómo implementar un sistema de registro de jornada que cumpla con la ley y qué información debe contener.

Brecha salarial e igualdad retributiva: las empresas de 50 o más empleados deben disponer de un Plan de Igualdad y un Registro Retributivo. Qué debe incluir cada documento, cómo realizar la auditoría retributiva y cuáles son las consecuencias del incumplimiento.

**Parte 2 — Clasificación de trabajadores y contratos**

La elección del contrato y la forma de trabajar con cada persona determina las obligaciones de la empresa:
- Los criterios legales de laboralidad: voluntariedad, ajenidad, dependencia y remuneración. Cómo evaluar si una relación con un autónomo puede ser considerada relación laboral encubierta.
- Los contratos de trabajo más comunes y sus requisitos: contrato indefinido (las modalidades tras la Reforma Laboral de 2021), contrato temporal (las causas válidas que quedan tras la reforma), contrato a tiempo parcial (las restricciones en horas extraordinarias)
- El período de prueba: duración máxima según el convenio y la categoría, lo que puede y no puede hacer la empresa durante el período de prueba, la extinción durante el período de prueba como acto extintivo
- Los contratos formativos: contrato de formación en alternancia y contrato de prácticas profesionales; los requisitos de edad, duración y retribución mínima

**Parte 3 — Gestión de horas extraordinarias**

Las horas extraordinarias son una de las materias donde la Inspección de Trabajo encuentra más irregularidades:
- Los límites legales: un máximo de 80 horas extraordinarias al año por trabajador, con las excepciones del convenio colectivo. El impacto en los trabajadores a tiempo parcial.
- La compensación de horas extraordinarias: retribución económica o compensación por descanso, qué dice el convenio colectivo aplicable
- El riesgo del trabajador que "siempre se queda un rato más": cómo el registro de jornada evidencia el problema y cómo gestionarlo proactivamente
- La desconexión digital: la obligación de respetar el tiempo de descanso del trabajador y cómo implementar una política de desconexión digital que sea efectiva y no solo cosmética

**Parte 4 — La auditoría de la Inspección de Trabajo**

Saber cómo funciona la Inspección ayuda a prepararse mejor:
- Qué documenta la Inspección cuando llega: registros de jornada, contratos, nóminas, cotizaciones a la Seguridad Social, actas de reuniones del comité de empresa, protocolos de acoso
- Los derechos de la empresa durante la inspección: qué debe proporcionar, qué puede negar y cuándo conviene pedir asesoramiento jurídico antes de responder
- El proceso de levantamiento de acta de infracción: plazos para alegar, cómo preparar las alegaciones y las posibilidades de reducción de la sanción
- La reincidencia como agravante: por qué solucionar las infracciones detectadas en una primera inspección es crítico antes de una segunda visita

**Parte 5 — El calendario de compliance laboral del departamento de RRHH**

El compliance laboral no es un proyecto puntual; es un proceso continuo:
- Las obligaciones periódicas: auditoría del Plan de Igualdad (cada cuatro años), revisión del registro retributivo (anual), negociación del convenio colectivo, comunicación de contratos al SEPE
- El calendario de revisiones internas: qué revisar cada mes, cada trimestre y cada año para detectar desviaciones antes de que llegue la Inspección
- El protocolo de prevención y gestión del acoso laboral: la obligación de tener un protocolo, cómo implementarlo y cómo gestionar una denuncia interna de acoso
- La formación en compliance laboral para managers: lo que todo responsable de equipo debe saber sobre la gestión de personas para no generar riesgos para la empresa

Termina con los cinco riesgos laborales de mayor probabilidad en mi empresa y el plan de acción para mitigar cada uno en los próximos noventa días.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Identificar y mitigar riesgos de compliance laboral antes de la Inspección de Trabajo',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Regulación financiera para empresas',
                'description'       => 'MiFID II, EMIR, Basel III: lo que el director financiero de una empresa que opera en mercados financieros regulados necesita saber.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un especialista en regulación financiera con experiencia asesorando a directores financieros y tesoreros corporativos sobre el impacto de la regulación de mercados financieros en la gestión corporativa. Voy a compartirte información sobre las actividades financieras de mi empresa y necesito entender qué obligaciones regulatorias aplican y cómo gestionarlas.

**Contexto que debes pedirme si no lo proporciono:**
- Tipo de empresa y actividades financieras: uso de derivados para cobertura, inversión de excedentes de tesorería, captación de financiación en mercados de capitales
- Si la empresa está cotizada o es privada
- Los mercados geográficos donde opera y los reguladores que le supervisan
- Si ya tiene un departamento de compliance financiero o es el director financiero quien gestiona esto
- El nivel de sofisticación de las contrapartes financieras: bancos de inversión, dealers de derivados, fondos

**Parte 1 — El ecosistema regulatorio de los mercados financieros europeos**

Las empresas no financieras que usan los mercados financieros para gestionar su riesgo o su tesorería están más reguladas de lo que muchos directores financieros creen:
- MiFID II y su aplicación a las empresas no financieras: cuándo una empresa no financiera que opera con derivados necesita registro como empresa de inversión o puede acogerse a las exenciones previstas en la directiva
- EMIR (European Market Infrastructure Regulation): las obligaciones que aplican a las empresas no financieras que operan con derivados OTC (compensación central, reportes a trade repository, técnicas de mitigación de riesgos)
- El umbral de compensación de EMIR: cómo calcular si la empresa supera el umbral que la obliga a compensar sus derivados a través de una cámara de compensación central (CCP)
- MAR (Market Abuse Regulation): las obligaciones de las empresas cotizadas y de las que operan en mercados organizados sobre divulgación de información privilegiada y prevención del abuso de mercado

**Parte 2 — Gestión de derivados en la empresa: el impacto de EMIR**

Muchas empresas usan derivados para cubrir riesgos de tipo de interés, de divisa o de precio de materias primas. EMIR aplica desde el primer derivado:
- La obligación de reporte: todos los derivados OTC y cotizados deben reportarse a un trade repository autorizado (como REGIS-TR, DTCC o ICE Trade Vault). Quién tiene la obligación de reportar y cuándo puede delegarse en la contraparte financiera.
- Los registros que debes mantener: todos los contratos de derivados deben conservarse durante cinco años desde su extinción con información detallada sobre las condiciones del contrato.
- Las técnicas de mitigación de riesgo para NFC (non-financial counterparties): confirmación oportuna de contratos, reconciliación de carteras, gestión de disputas, compresión de cartera.
- El impacto de Basilea III/IV en el coste de los derivados de cobertura: cómo los mayores requerimientos de capital de los bancos se trasladan al precio de los derivados que ofreces a tus clientes corporativos.

**Parte 3 — Inversión de excedentes de tesorería**

La empresa con excedentes de tesorería que busca rentabilidad sin asumir riesgo excesivo opera bajo restricciones regulatorias y de gobierno:
- Los instrumentos permitidos en la política de inversión de tesorería corporativa y los que generan riesgo regulatorio o de reputación
- Los fondos monetarios bajo el Reglamento de Fondos del Mercado Monetario (MMF Regulation): los fondos CNAV, LVNAV y VNAV y cuándo usar cada tipo
- La gestión del riesgo de contraparte en inversiones de tesorería: límites por contraparte, ratings mínimos, plazos máximos y cómo documentar las decisiones de inversión
- Las implicaciones de la Directiva AIFMD para las empresas que invierten en fondos alternativos: los requisitos de información que el gestor del fondo debe proporcionar a los inversores

**Parte 4 — Empresas cotizadas: obligaciones bajo MAR**

Si la empresa cotiza en un mercado regulado o en un SMN, las obligaciones de transparencia son significativas:
- La gestión de información privilegiada: cómo identificar qué información es privilegiada, los procedimientos de control de acceso a esa información, los registros de personas con acceso (insider lists)
- El retraso en la divulgación: los supuestos en los que la empresa puede retrasar la publicación de información privilegiada y las condiciones que deben cumplirse
- Las transacciones de directivos: la obligación de notificación de transacciones sobre valores de la empresa por parte de directivos y personas estrechamente vinculadas, los plazos y los períodos de ventana cerrada
- El programa de recompra de acciones propias: las condiciones del safe harbour bajo MAR para los programas de recompra

**Parte 5 — Gobierno del compliance financiero corporativo**

El compliance financiero no puede gestionarse ad hoc; necesita estructura:
- La política de gestión de riesgos financieros del consejo: qué debe aprobar el consejo, qué puede delegar en el comité de auditoría y qué puede gestionar el director financiero con autonomía
- El comité de riesgos financieros: composición, frecuencia de reunión, informes que debe revisar y decisiones que debe tomar
- La relación con los supervisores financieros: CNMV, Banco de España, BCE. Cuándo comunicarse proactivamente con el supervisor y cómo prepararse para una solicitud de información.
- Las sanciones por incumplimiento de la regulación financiera: los rangos de multas bajo EMIR, MiFID II y MAR y los casos que sirven de referencia

Termina con el mapa de obligaciones regulatorias financieras que aplican a mi empresa y las tres prioridades de compliance para el próximo trimestre.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Entender y gestionar las obligaciones regulatorias financieras de una empresa no financiera',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Gestión del compliance corporativo',
                'description'       => 'El programa de compliance que protege a la empresa: canal de denuncias, código ético, formaciones y los controles que reducen el riesgo penal corporativo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en compliance corporativo y prevención de delitos empresariales con experiencia diseñando e implementando programas de compliance eficaces. Voy a compartirte información sobre mi empresa y su situación actual, y necesito que me ayudes a diseñar o mejorar el programa de compliance que proteja a la organización y a sus directivos frente al riesgo penal corporativo.

**Contexto que debes pedirme si no lo proporciono:**
- Tamaño de la empresa, sector y si es cotizada o privada
- Si ya existe un programa de compliance o hay que construirlo desde cero
- Los riesgos de compliance más relevantes para el sector: corrupción, blanqueo de capitales, fraude fiscal, protección de datos, seguridad de la información
- Si ha habido incidentes previos o investigaciones regulatorias o judiciales
- La estructura de propiedad y gobierno: accionistas, consejo, comité de auditoría

**Parte 1 — La responsabilidad penal de las personas jurídicas en España**

La reforma del Código Penal de 2010 introdujo la responsabilidad penal de las personas jurídicas. El artículo 31 bis establece que una empresa puede ser condenada por delitos cometidos por sus directivos o empleados en su nombre y beneficio. La exención requiere demostrar que la empresa tenía un modelo de organización y gestión adecuado para prevenir el delito:
- Los delitos que generan responsabilidad corporativa bajo el Código Penal español: corrupción entre particulares, corrupción de funcionarios, fraude fiscal, blanqueo de capitales, financiación del terrorismo, delitos contra los trabajadores, delitos contra el medio ambiente
- Las condiciones de la exención de responsabilidad: que el órgano de administración haya adoptado y ejecutado eficazmente modelos de organización y gestión que incluyan medidas de vigilancia y control para prevenir el delito
- El papel del compliance officer: la Circular 1/2016 de la Fiscalía General del Estado y cómo establece los requisitos del modelo de prevención de delitos

**Parte 2 — Elementos esenciales del programa de compliance**

Un programa de compliance que exime de responsabilidad penal tiene elementos no negociables:

Análisis de riesgos (risk assessment): la identificación y evaluación de los riesgos penales concretos de la empresa según su actividad, sector, geografía y modelo de negocio. Es el punto de partida de cualquier programa: sin saber qué riesgos existen, no se puede prevenir nada.

Código ético y políticas: el código de conducta que define los valores y los comportamientos esperados e inaceptables en la empresa. Las políticas específicas por área de riesgo: anticorrupción, regalos y hospitalidad, conflictos de interés, protección de datos, uso de recursos corporativos.

Canal de denuncias: desde el 13 de febrero de 2023, la Ley 2/2023 obliga a las empresas de más de 50 trabajadores a tener un canal de denuncias confidencial y anónimo. Los requisitos del canal, la gestión de las denuncias recibidas y la protección del denunciante.

**Parte 3 — Formación y comunicación**

Un programa de compliance que nadie conoce no puede eximir de responsabilidad:
- El programa de formación en compliance: contenido diferenciado por nivel (todos los empleados, managers, directivos, comité de dirección), formato (presencial, e-learning, casos prácticos), frecuencia y registro de asistencia
- La comunicación del código ético: cómo hacer que el código de conducta sea algo vivo en la organización y no un documento que nadie lee
- Las formaciones específicas de alto riesgo: el empleado que gestiona relaciones con funcionarios públicos, el que aprueba pagos, el que negocia contratos con terceros, necesitan formación específica sobre los riesgos que gestiona
- Cómo medir la efectividad de la formación: no el porcentaje de empleados que completó el curso, sino el cambio de comportamiento

**Parte 4 — Supervisión, auditoría y mejora continua**

Un modelo de compliance que no se supervisa no cumple su función preventiva:
- El sistema de controles internos: cómo diseñar los controles que detectan violaciones del programa antes de que se conviertan en delitos
- La auditoría interna del compliance: qué debe revisar, con qué frecuencia y a quién reporta. La independencia del compliance officer del resto de la organización.
- La investigación interna: cuándo y cómo investigar una denuncia o un incidente de compliance. Los protocolos que protegen los privilegios legales del proceso de investigación.
- La actualización del programa: el compliance no es estático; debe actualizarse cuando cambia la regulación, cuando cambia el modelo de negocio o cuando una investigación revela gaps en el programa

**Parte 5 — Compliance en la cadena de valor**

La empresa también puede ser responsable por los actos de sus terceros:
- Due diligence de terceros: proveedores, intermediarios, distribuidores, socios comerciales. Cómo diseñar el proceso de evaluación de riesgos de terceros y los controles contractuales que protegen a la empresa.
- La Directiva de Diligencia Debida Empresarial en materia de Sostenibilidad (CSDDD): las obligaciones de due diligence sobre derechos humanos y medio ambiente en la cadena de suministro para empresas de gran tamaño
- Cómo gestionar el compliance en fusiones y adquisiciones: la due diligence de compliance previo a una adquisición y la integración del programa de la empresa adquirida

Termina con el plan de implementación del programa de compliance en doce meses para una empresa de mediano tamaño que empieza desde cero.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar e implementar programa de compliance corporativo que reduce el riesgo penal',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'SLAs y contratos de nivel de servicio',
                'description'       => 'Diseña, negocia y gestiona los SLAs con clientes: indicadores, penalizaciones, créditos y la comunicación cuando se incumple un SLA.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia diseñando y gestionando Service Level Agreements (SLAs) con clientes enterprise. Voy a compartirte información sobre el tipo de servicio que presto y el perfil de mis clientes, y necesito que me ayudes a diseñar un marco de SLAs que proteja al cliente, sea operativamente realista para nuestro equipo y sea justo para ambas partes.

**Contexto que debes pedirme si no lo proporciono:**
- Tipo de servicio: SaaS, servicios gestionados, soporte técnico, consultoría, cloud
- Perfil de clientes: enterprise, mid-market, sector regulado
- Métricas actuales de servicio: disponibilidad, tiempos de respuesta, resolución de incidencias
- Si los SLAs actuales tienen problemas: demasiado ambiciosos, mal definidos, nunca se cumplen, generan disputas frecuentes
- Recursos del equipo de soporte y operaciones

**Parte 1 — Arquitectura de un SLA bien diseñado**

Un SLA es un contrato que define las expectativas mutuas sobre el servicio. Un SLA mal diseñado es peor que no tener SLA porque crea falsas expectativas y disputas:
- Los componentes de un SLA completo: alcance del servicio (qué está cubierto y qué no), métricas e indicadores, ventanas de servicio, proceso de reporte de incidencias, categorías de severidad, tiempos de respuesta y resolución por categoría, exclusiones, compensaciones por incumplimiento
- La diferencia entre SLA (el compromiso formal), OLA (Operational Level Agreement, el acuerdo interno entre equipos) y UC (Underpinning Contract, el acuerdo con proveedores externos). El SLA no puede comprometer más de lo que el OLA y el UC permiten cumplir.
- Los errores más comunes en el diseño de SLAs: comprometerse con disponibilidades del 99.99% sin la infraestructura que lo respalde, mezclar tiempos de respuesta con tiempos de resolución, no definir claramente el período de medición

**Parte 2 — Métricas de SLA: cómo elegir los indicadores correctos**

No todas las métricas que se pueden medir tienen sentido en un SLA:
- Disponibilidad o uptime: cómo calcularlo correctamente (uptime vs. tiempo total del período de medición, exclusión o no de mantenimiento programado), los impactos de los decimales (99.9% vs. 99.99% en términos de horas de downtime anuales)
- Tiempo de primera respuesta: desde que el cliente reporta la incidencia hasta que el equipo de soporte confirma la recepción y asigna el caso. Cómo medirlo de forma objetiva y qué herramientas permiten automatizar el registro.
- Tiempo de resolución: el período más difícil de comprometer porque depende de factores fuera del control del equipo de soporte. Cómo definir "resolución" de forma que sea objetivamente verificable y no genere disputas.
- Métricas de calidad de soporte: CSAT por ticket, FCR (First Contact Resolution), tiempo de espera en cola. Cuándo incluirlas en el SLA y cuándo dejarlas como métricas internas.

**Parte 3 — Categorías de severidad y tiempos de respuesta**

Las categorías de severidad permiten priorizar los recursos sin comprometer tiempos imposibles en todas las incidencias:
- Diseño de las categorías de severidad: cuántas tener (típicamente 3-4), qué define cada categoría (impacto en el negocio del cliente, usuarios afectados, disponibilidad del servicio), ejemplos concretos para cada categoría que eviten la interpretación subjetiva
- Tiempos de respuesta y resolución por categoría: los benchmarks del mercado según el tipo de servicio y el segmento de clientes. El error de prometer tiempos de resolución para incidencias de alta severidad que el equipo no puede cumplir.
- El proceso de escalado: cuándo y cómo escalar una incidencia de una categoría a otra, quién tiene autoridad para escalar, cómo impacta en los tiempos del SLA

**Parte 4 — Compensaciones y créditos por incumplimiento**

Las compensaciones deben ser lo suficientemente significativas para que el cliente las valore y lo suficientemente limitadas para que la empresa pueda pagarlas:
- Créditos de servicio: el modelo más habitual. Cómo calcularlo (porcentaje del fee mensual por cada hora de downtime por encima del SLA), cómo reclamarlo (proceso de solicitud del cliente) y los topes razonables
- Terminación por incumplimiento reiterado del SLA: cuándo el cliente tiene derecho a terminar el contrato por incumplimiento del SLA sin penalización, y qué constituye "incumplimiento reiterado"
- Las exclusiones que protegen a la empresa: interrupciones causadas por el cliente, fuerza mayor, problemas de infraestructura de terceros, ataques de denegación de servicio. Cómo redactarlas de forma que sean claras y no parezcan evasivas.
- La diferencia entre SLA penalties (penalizaciones en dinero) y service credits (descuentos en el fee futuro): por qué los créditos son más habituales y cuándo el cliente debería negociar penalizaciones

**Parte 5 — Comunicación de incumplimiento de SLA**

El incumplimiento de un SLA es inevitable; lo que diferencia a los equipos de CS es cómo lo gestionan:
- El proceso de notificación proactiva: cómo comunicar al cliente que hay un problema antes de que lo detecte él y antes de que se incumpla formalmente el SLA
- La plantilla de comunicación de incidente: qué información debe contener (impacto, causa raíz preliminar, acciones en curso, próxima actualización), el tono correcto y los errores de comunicación que destruyen la confianza
- El post-mortem con el cliente: cuándo hacerlo, qué debe incluir (análisis de causa raíz, medidas correctivas, timeline), cómo presentarlo para que reconstruya la confianza en lugar de abrir más heridas
- Cómo gestionar al cliente que usa el incumplimiento del SLA para renegociar el contrato o exigir descuentos adicionales

Termina con la plantilla de SLA de tres páginas que utilizaría para el tipo de servicio que me hayas descrito.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñar, negociar y gestionar SLAs con clientes enterprise incluida la comunicación de incumplimientos',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Compliance para autónomos',
                'description'       => 'Los riesgos legales del trabajo autónomo que nadie te cuenta: falsos autónomos, cesión ilegal y las señales que convierten una relación mercantil en laboral.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un asesor laboral especializado en trabajo autónomo y relaciones mercantiles con experiencia asesorando tanto a freelancers como a las empresas que trabajan con ellos. Voy a compartirte información sobre mi situación como autónomo o sobre mis prácticas como empresa que contrata autónomos, y necesito entender los riesgos legales y cómo estructurar las relaciones de forma que sean legalmente sólidas.

**Contexto que debes pedirme si no lo proporciono:**
- Si eres autónomo que busca protegerse o empresa que contrata autónomos (o ambos)
- Tipo de servicio prestado y sector
- Cómo se estructura actualmente la relación: contrato de servicios, facturación, herramientas de trabajo, horarios, supervisión
- Si hay un cliente principal que representa más del 75% de los ingresos
- País o comunidad autónoma principal de operación

**Parte 1 — Los criterios que convierten una relación mercantil en laboral**

La línea entre el autónomo y el trabajador por cuenta ajena no es el contrato; es la realidad de la relación. La jurisprudencia española y la Inspección de Trabajo analizan cuatro criterios para determinar si hay relación laboral encubierta:

Ajenidad: el trabajador pone su trabajo a disposición del empleador, que asume los riesgos y los beneficios de la actividad. El autónomo que trabaja sin asumir riesgo económico propio (factura a precio fijo, no tiene responsabilidad por los resultados) puede ser considerado trabajador por cuenta ajena.

Dependencia: el autónomo que recibe instrucciones detalladas sobre cómo realizar el trabajo, cumple un horario fijado por el cliente, trabaja exclusivamente con herramientas del cliente y no puede rechazar encargos sin consecuencias, muestra señales de dependencia.

Integración organizativa: trabajar en las instalaciones del cliente, con el equipo del cliente, usando los sistemas y procesos del cliente, y siendo presentado como miembro del equipo ante terceros son señales de integración que apuntan a relación laboral.

Exclusividad económica: el autónomo económicamente dependiente (TRADE) que concentra más del 75% de sus ingresos en un único cliente tiene una categoría especial bajo el Estatuto del Trabajo Autónomo con derechos adicionales.

**Parte 2 — La figura del TRADE (Trabajador Autónomo Económicamente Dependiente)**

El TRADE es una figura híbrida que muchos autónomos desconocen y que puede aplicarles sin saberlo:
- Los criterios para ser TRADE: más del 75% de ingresos de un único cliente, no tener trabajadores por cuenta ajena, no subcontratar la actividad principal, no ser administrador de la empresa cliente con participación superior al 25%
- Los derechos adicionales del TRADE: vacaciones anuales de al menos 18 días hábiles, derecho a interrupción de la actividad por maternidad/paternidad/accidente, plazo de preaviso para la extinción del contrato
- Las obligaciones del TRADE: comunicación a la Seguridad Social de la condición de TRADE, registro del contrato en el Servicio Público de Empleo
- El riesgo de ser TRADE sin saberlo: la empresa que extingue la relación con un TRADE sin respetar los plazos y condiciones puede enfrentarse a una reclamación de indemnización

**Parte 3 — Cesión ilegal de trabajadores**

La cesión ilegal de trabajadores es más frecuente de lo que parece y tiene consecuencias graves:
- Qué es la cesión ilegal: cuando una empresa (cedente) pone a disposición de otra (cesionaria) trabajadores propios para que trabajen bajo las órdenes de la cesionaria. Está prohibida salvo a través de Empresas de Trabajo Temporal (ETT) autorizadas.
- La diferencia entre subcontratación lícita y cesión ilegal: en la subcontratación lícita, la empresa subcontratada gestiona y dirige a sus propios trabajadores. En la cesión ilegal, los trabajadores quedan bajo la dirección de la empresa cliente.
- Las consecuencias de la cesión ilegal: el trabajador puede optar por adquirir la condición de fijo en cualquiera de las dos empresas, y ambas empresas son responsables solidariamente de las obligaciones laborales y de seguridad social.
- Cómo estructurar la subcontratación para que sea lícita: el subcontratista debe tener autonomía en la organización del trabajo, dirección propia sobre sus trabajadores y responsabilidad sobre los resultados

**Parte 4 — El contrato de servicios que protege al autónomo y a la empresa**

El contrato de servicios entre empresa y autónomo debe reflejar la realidad de la relación para ser útil:
- Las cláusulas esenciales: objeto del servicio (resultados, no disponibilidad horaria), precio y forma de pago, duración y preaviso para la extinción, propiedad intelectual de los entregables, confidencialidad, protección de datos
- Las cláusulas que generan riesgo de laboralidad: exclusividad absoluta (que impide trabajar para otros clientes), horarios fijos, obligación de presencia en las instalaciones del cliente, prohibición de subcontratar
- Cómo documentar la independencia del autónomo: uso de herramientas propias, libertad para fijar precios y condiciones con otros clientes, asunción de riesgo económico, organización propia del trabajo
- La facturación correcta: los datos obligatorios de la factura, el IVA en servicios profesionales, la retención del IRPF y en qué supuestos no aplica

**Parte 5 — La Inspección de Trabajo y el autónomo**

La Inspección de Trabajo puede investigar relaciones con autónomos cuando recibe una denuncia o en campañas sectoriales:
- Cómo se desarrolla una inspección de relaciones con autónomos: qué documentación solicita la Inspección, qué entrevistas realiza y qué indicios de laboralidad busca
- Las sanciones por falso autónomo: el reconocimiento de la relación laboral, el ingreso de las cotizaciones sociales no pagadas con recargos (hasta el 300% sobre la diferencia), las sanciones administrativas de la LISOS
- El autónomo que denuncia la situación de falso autónomo: sus derechos, el proceso de reclamación ante el SMAC y posteriormente ante la jurisdicción laboral, y si tiene protección frente a represalias
- Cómo regularizar una situación de riesgo antes de que llegue la Inspección: las opciones disponibles y el asesoramiento jurídico necesario

Termina con el diagnóstico de las tres señales de mayor riesgo en mi situación actual y el plan de acción para mitigarlas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Identificar y mitigar riesgos legales del trabajo autónomo: falsos autónomos y cesión ilegal',
                'vote_score'        => 47,
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
