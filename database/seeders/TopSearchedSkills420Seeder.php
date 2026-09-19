<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills420Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Compliance de publicidad digital y normativa de datos con IA',
                'description'       => 'Usa IA para garantizar que tus campañas de marketing cumplen con el GDPR, la normativa de cookies, las reglas de publicidad de las plataformas y las directrices de disclosure de contenido patrocinado.',
                'prompt_content'    => <<<'EOT'
Eres un experto en compliance de marketing digital con profundo conocimiento de la normativa europea y española aplicable a la publicidad online, la protección de datos, la publicidad encubierta y las políticas de las principales plataformas publicitarias (Google Ads, Meta, TikTok, LinkedIn).

**Mi contexto en marketing:**
Soy un profesional de marketing digital responsable de gestionar campañas de publicidad online, redes sociales y email marketing. Quiero asegurarme de que todas mis actividades cumplen con las normativas vigentes, tanto para evitar sanciones regulatorias como para mantener la confianza de los usuarios.

**objetivo: guía de compliance de marketing digital con IA**

1. **Mapa regulatorio para marketing digital**: Dame un mapa completo de las normativas que afectan al marketing digital en España y la UE:
   - GDPR y su impacto en la gestión de datos de clientes y prospectos
   - Ley de Servicios de la Sociedad de la Información (LSSI) para email marketing
   - Directiva ePrivacy y normativa de cookies
   - Ley General de Publicidad: publicidad engañosa, comparativa y encubierta
   - Directrices de la CNMC sobre publicidad en redes sociales
   - Reglamento de Servicios Digitales (DSA) de la UE
   Para cada normativa, dame los requisitos concretos que debo cumplir como marketero.

2. **Checklist de compliance por tipo de actividad**: Crea checklists de compliance específicas para las actividades de marketing más comunes:
   - Email marketing: opt-in, identificación del remitente, opción de baja, tratamiento de datos
   - Publicidad en redes sociales: segmentación de audiencias, retargeting, uso de datos de terceros
   - Contenido patrocinado e influencers: disclosure obligatorio, etiquetado correcto
   - Landing pages y formularios: avisos de privacidad, consentimiento, cookies
   - Campañas de remarketing: bases legales, períodos de retención de datos

3. **Auditoría de compliance con IA**: ¿Cómo usar IA para realizar una auditoría de compliance de mis materiales de marketing? Dame prompts para que la IA revise:
   - Textos de anuncios en busca de afirmaciones potencialmente engañosas
   - Políticas de privacidad y avisos legales
   - Correos de email marketing en busca de requisitos faltantes
   - Contratos con influencers para verificar cláusulas de disclosure

4. **Gestión del consentimiento y cookies**: ¿Cuáles son los requisitos actuales de las autoridades de protección de datos (AEPD) para la recogida de consentimiento de cookies? ¿Cómo diseñar un banner de cookies que cumpla con la normativa y minimice el impacto en la tasa de conversión?

5. **Compliance en plataformas publicitarias**: ¿Cuáles son las principales reglas de publicidad de Google Ads, Meta y LinkedIn que más frecuentemente se violan? ¿Cómo usar IA para revisar creatividades y textos publicitarios antes de lanzar una campaña?

6. **Gestión de incidencias de compliance**: ¿Qué hacer cuando una campaña viola inadvertidamente una normativa o recibe una reclamación? Dame un protocolo de respuesta a incidencias de compliance de marketing.

7. **Mantenerse actualizado con la regulación cambiante**: El entorno regulatorio del marketing digital cambia constantemente. ¿Cómo usar IA para monitorizar cambios regulatorios relevantes y evaluar su impacto en mis actividades de marketing?

EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Compliance normativo en marketing digital y publicidad online',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Auditoría de seguridad de código y compliance de desarrollo con IA',
                'description'       => 'Integra IA en tu proceso de desarrollo para detectar vulnerabilidades de seguridad, garantizar el compliance del código con estándares y normativas, y construir software más seguro desde el origen.',
                'prompt_content'    => <<<'EOT'
Eres un experto en seguridad de aplicaciones (AppSec) y en el desarrollo de software seguro según metodologías DevSecOps. Tienes experiencia en la integración de herramientas y procesos de auditoría de seguridad en el ciclo de vida del desarrollo de software (SDLC), con énfasis en la detección temprana de vulnerabilidades para reducir el coste de su corrección.

**Mi contexto como desarrollador:**
Trabajo como desarrollador de software y quiero mejorar la seguridad del código que produzco. Actualmente la seguridad se revisa principalmente al final del ciclo de desarrollo, lo que hace costoso corregir las vulnerabilidades encontradas. Quiero integrar prácticas de seguridad desde el inicio del desarrollo con apoyo de IA.

**objetivo: sistema de auditoría de seguridad de código con IA**

1. **Las vulnerabilidades más comunes que debo detectar**: Dame una guía de las vulnerabilidades de seguridad más frecuentes en desarrollo web y de APIs que debo aprender a detectar y prevenir:
   - OWASP Top 10: inyección SQL, XSS, CSRF, autenticación rota, exposición de datos sensibles, etc.
   - Vulnerabilidades específicas del stack tecnológico (según me indiques el stack)
   - Errores de configuración de seguridad comunes
   - Problemas de gestión de secretos y credenciales en el código
   Para cada vulnerabilidad, dame: descripción, ejemplo de código vulnerable y ejemplo de código seguro.

2. **Revisión de seguridad de código con IA**: ¿Cómo usar IA para revisar fragmentos de código en busca de vulnerabilidades de seguridad? Dame prompts específicos para:
   - Revisar código de autenticación y gestión de sesiones
   - Analizar queries de base de datos en busca de inyección SQL
   - Revisar el manejo de inputs del usuario
   - Detectar exposición inadvertida de datos sensibles en logs o responses
   - Verificar la correcta implementación de cifrado

3. **Integración de seguridad en el flujo de desarrollo**: ¿Cómo integrar revisiones de seguridad con IA en mi flujo de trabajo diario sin que se conviertan en un cuello de botella? Dame un proceso de security review ligero para:
   - Revisión de código antes de crear un PR
   - Checklist de seguridad en el proceso de code review
   - Verificaciones automáticas en el pipeline de CI/CD

4. **Compliance con estándares de seguridad**: Dame una guía de los principales estándares de seguridad que pueden ser aplicables según el tipo de aplicación:
   - OWASP Application Security Verification Standard (ASVS)
   - PCI DSS para aplicaciones que manejan datos de pago
   - ISO 27001 para seguridad de la información
   - SOC 2 para SaaS empresarial
   ¿Cómo usar IA para evaluar si mi código cumple con los requisitos de cada estándar?

5. **Gestión de dependencias y vulnerabilidades conocidas**: ¿Cómo mantener las dependencias del proyecto libres de vulnerabilidades conocidas (CVEs)? ¿Qué herramientas usar? ¿Cómo usar IA para evaluar el riesgo de una dependencia con vulnerabilidades conocidas y decidir si parchear inmediatamente o aceptar el riesgo temporalmente?

6. **Modelado de amenazas con IA**: ¿Cómo usar IA para realizar un threat modeling básico de una funcionalidad antes de desarrollarla? Dame un proceso simplificado de threat modeling (STRIDE) que pueda aplicar en la fase de diseño de cada nueva feature.

7. **Documentación de seguridad con IA**: ¿Cómo documentar las decisiones de seguridad, los controles implementados y las vulnerabilidades conocidas de forma que ayude al equipo y sirva en auditorías externas? Dame un template de security documentation para proyectos de software.

EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Seguridad de código y compliance en desarrollo de software',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Accesibilidad y cumplimiento normativo en diseño digital con IA',
                'description'       => 'Usa IA para garantizar que tus diseños cumplen con los estándares de accesibilidad WCAG, la normativa europea de accesibilidad y las directrices de las plataformas, haciendo tus productos inclusivos por diseño.',
                'prompt_content'    => <<<'EOT'
Eres un experto en diseño accesible e inclusivo con profundo conocimiento de los estándares WCAG (Web Content Accessibility Guidelines), la Directiva Europea de Accesibilidad, el Real Decreto 1112/2018 en España y las directrices de accesibilidad de iOS, Android y las principales plataformas digitales.

**Mi contexto como diseñador:**
Soy un diseñador UX/UI que quiere incorporar la accesibilidad como parte integral de mi proceso de diseño, no como un añadido al final. Quiero usar IA para revisar mis diseños en busca de problemas de accesibilidad, aprender buenas prácticas y cumplir con la normativa sin que el proceso sea tedioso.

**objetivo: sistema de diseño accesible con apoyo de IA**

1. **Fundamentos de accesibilidad para diseñadores**: Explica los principios POUR de accesibilidad (Perceptible, Operable, Comprensible, Robusto) y cómo se traducen en decisiones de diseño concretas. Dame los requisitos de WCAG 2.1 nivel AA más relevantes para un diseñador UI:
   - Contraste de color (ratios mínimos para texto normal, texto grande e iconos)
   - Tamaños mínimos de elementos interactivos
   - Indicadores de foco visibles
   - Textos alternativos para imágenes
   - Jerarquía de encabezados
   - Formularios accesibles
   Para cada requisito, dame el criterio numérico concreto y un ejemplo visual de lo que pasa vs. lo que debe ser.

2. **Revisión de diseños con IA**: ¿Cómo usar IA para revisar mis diseños (describiéndolos en texto) en busca de problemas de accesibilidad? Dame prompts específicos para revisar:
   - Paletas de color y contraste
   - Tipografía y legibilidad
   - Flujos de navegación por teclado
   - Diseño de formularios
   - Uso de color como único indicador de información
   - Animaciones y efectos que pueden causar problemas (epilepsia, vestibular)

3. **Paletas de color accesibles con IA**: ¿Cómo crear paletas de color que cumplan con los ratios de contraste WCAG manteniendo la coherencia estética? Dame un proceso para:
   - Evaluar el contraste de los colores de mi paleta actual
   - Generar variaciones accesibles de un color dado
   - Diseñar un sistema de tokens de color que garantice accesibilidad por defecto

4. **Diseño inclusivo para diferentes necesidades**: ¿Cómo diseñar teniendo en cuenta a usuarios con diferentes capacidades?
   - Usuarios con baja visión o daltonismo
   - Usuarios que navegan solo con teclado
   - Usuarios de lectores de pantalla
   - Usuarios con dificultades cognitivas
   - Usuarios mayores
   Dame estrategias de diseño inclusivo para cada grupo.

5. **Normativa de accesibilidad aplicable**: ¿Qué normativa de accesibilidad aplica según el tipo de proyecto?
   - Sector público en España (RD 1112/2018, ENI)
   - Sector privado con la Directiva Europea de Accesibilidad (2025)
   - Apps móviles: directrices de App Store y Play Store
   - Productos de comunicación: normativa de subtitulado
   Dame los requisitos concretos y las fechas de compliance.

6. **Proceso de auditoría de accesibilidad**: Diseña un proceso de auditoría de accesibilidad que pueda realizar sobre mis propios diseños antes de entregarlos a desarrollo. ¿Qué herramientas usar? ¿Qué aspectos revisar? ¿Cómo documentar y priorizar los issues encontrados?

7. **Comunicación de accesibilidad al equipo**: ¿Cómo comunicar los requisitos de accesibilidad al equipo de desarrollo de forma que se implementen correctamente? Dame un proceso para incluir anotaciones de accesibilidad en los archivos de diseño (Figma, Sketch) que faciliten la implementación.

EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseño accesible y cumplimiento de normativa de accesibilidad digital',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Cumplimiento de regulaciones de ventas y protección al consumidor con IA',
                'description'       => 'Garantiza que tus procesos de ventas cumplen con la normativa de protección al consumidor, prácticas comerciales desleales y regulaciones sectoriales usando IA como herramienta de verificación.',
                'prompt_content'    => <<<'EOT'
Eres un experto en derecho del consumidor y en compliance de prácticas comerciales. Conoces en profundidad la normativa española y europea aplicable a los procesos de venta: desde la Ley de Defensa de los Consumidores hasta las directivas europeas sobre prácticas comerciales desleales, derechos de los consumidores en contratos a distancia y protección de datos en procesos de venta.

**Mi contexto en ventas:**
Soy un profesional de ventas (B2C o B2B) que quiere asegurarme de que mis prácticas comerciales cumplen con la normativa vigente. Quiero evitar prácticas que puedan ser consideradas engañosas o abusivas, conocer los derechos de los consumidores con los que trabajo y proteger a mi empresa de reclamaciones y sanciones.

**objetivo: guía de compliance de ventas con IA**

1. **Normativa clave en ventas al consumidor**: Dame un resumen de la normativa más relevante para los procesos de venta en España:
   - Real Decreto Legislativo 1/2007 (Ley de Defensa de Consumidores)
   - Ley de Competencia Desleal: prácticas engañosas, agresivas y prohibidas
   - Derechos en contratos a distancia (venta online, telefónica): información precontractual, desistimiento
   - Ley de Ordenación del Comercio Minorista: rebajas, saldos, ventas especiales
   - GDPR en el proceso de venta: consentimiento para comunicaciones comerciales
   Para cada norma, dame los requisitos concretos que afectan a un vendedor.

2. **Prácticas de venta que debo evitar**: Dame una guía de las prácticas comerciales que la ley prohíbe o considera engañosas:
   - Publicidad engañosa: afirmaciones falsas o que inducen a error
   - Prácticas agresivas: presión excesiva, acoso, impedimentos para ejercer derechos
   - Ventas con obsequio y prácticas de señuelo
   - Condiciones de garantía y posventa engañosas
   - Dark patterns en e-commerce
   Para cada práctica, dame el fundamento legal y ejemplos concretos de lo que está prohibido.

3. **Revisión de scripts de venta con IA**: ¿Cómo usar IA para revisar mis guiones de venta, presentaciones y materiales comerciales en busca de afirmaciones potencialmente problemáticas? Dame prompts específicos para identificar:
   - Afirmaciones sobre el producto que requieren sustanciación
   - Promesas o garantías que pueden crear expectativas no cumplibles
   - Presión indebida o técnicas de urgencia artificial

4. **Compliance en ventas B2B**: ¿Cómo difiere el marco legal en ventas B2B vs. B2C? ¿Qué normativa específica aplica en ventas entre empresas? ¿Cuándo aplica la normativa de consumidores incluso en contextos B2B (autónomos, micropymes)?

5. **Gestión del derecho de desistimiento**: En ventas online y a distancia, ¿cuáles son exactamente los derechos de desistimiento del consumidor? ¿Qué información debo proporcionar obligatoriamente? ¿Qué contratos quedan excluidos del derecho de desistimiento? Dame un protocolo de gestión de desistimientos.

6. **Reclamaciones de consumidores**: ¿Cómo gestionar una reclamación de un consumidor de forma que cumpla con los requisitos legales y minimice el riesgo de escalada? ¿Cuándo tengo obligación de aceptar una reclamación? ¿Cuándo puedo rechazarla? Dame un protocolo de gestión de reclamaciones.

7. **Compliance sectorial**: ¿Cuáles son las regulaciones específicas más relevantes en sectores con mayor regulación de ventas: telecomunicaciones, seguros, servicios financieros, energía, salud? Dame los requisitos adicionales que aplican en cada sector.

EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Compliance de prácticas comerciales y protección al consumidor en ventas',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Privacy by design y regulación de IA en productos digitales',
                'description'       => 'Integra los principios de privacy by design y los requisitos del Reglamento Europeo de IA en el ciclo de desarrollo de producto para construir productos conformes y confiables desde el diseño.',
                'prompt_content'    => <<<'EOT'
Eres un experto en privacidad de datos aplicada al desarrollo de productos digitales y en el marco regulatorio de la inteligencia artificial en la Unión Europea. Tienes experiencia asesorando a equipos de producto en la integración de privacy by design y AI compliance en sus procesos de desarrollo.

**Mi contexto como PM:**
Soy un Product Manager que desarrolla productos digitales que recopilan datos de usuarios y/o incorporan funcionalidades de IA. Quiero asegurarme de que mis productos cumplen con el GDPR, aplican los principios de privacy by design y están alineados con los requisitos del Reglamento Europeo de Inteligencia Artificial (AI Act).

**objetivo: guía de privacy by design y AI compliance para Product Managers**

1. **Principios de privacy by design para PMs**: Explica los 7 principios de privacy by design de Ann Cavoukian y cómo se traducen en decisiones concretas de producto:
   - Proactivo, no reactivo: ¿qué preguntas de privacidad hacerme en la fase de discovery?
   - Privacidad como configuración predeterminada: ¿qué settings debo configurar por defecto?
   - Privacidad integrada en el diseño: ¿cómo incluir la revisión de privacidad en el proceso de diseño?
   - Funcionalidad plena: ¿cómo garantizar que la privacidad no sacrifica la funcionalidad?
   - Seguridad extremo a extremo: ¿qué responsabilidades tiene el PM en seguridad?
   - Visibilidad y transparencia: ¿cómo comunicar el tratamiento de datos a los usuarios?
   - Respeto por la privacidad del usuario: ¿qué controles debo ofrecer al usuario sobre sus datos?

2. **Evaluación de Impacto en Privacidad (DPIA) para PMs**: ¿Cuándo es obligatorio realizar una DPIA (Data Protection Impact Assessment)? ¿Cómo usar IA para facilitar el proceso de DPIA? Dame una plantilla simplificada de DPIA para Product Managers que permita identificar los riesgos de privacidad de una nueva funcionalidad.

3. **Reglamento Europeo de IA (AI Act): requisitos para productos**: Dame un resumen práctico del AI Act y sus implicaciones para los productos digitales con IA:
   - Clasificación de sistemas de IA por nivel de riesgo (inaceptable, alto, limitado, mínimo)
   - Requisitos para sistemas de IA de alto riesgo: transparencia, supervisión humana, robustez
   - Obligaciones de los proveedores vs. los usuarios de sistemas de IA
   - Cronograma de entrada en vigor de los diferentes requisitos

4. **Diseño de features con datos de usuarios**: ¿Qué preguntas de privacidad y compliance debo hacerme antes de diseñar una feature que recopile o procese datos de usuarios?
   - ¿Cuál es la base legal para el tratamiento de estos datos?
   - ¿Es este dato necesario para la funcionalidad (minimización de datos)?
   - ¿Cuánto tiempo necesito conservar estos datos?
   - ¿Cómo garantizaré el ejercicio de derechos del usuario (acceso, rectificación, supresión)?
   Dame una checklist de privacidad para el diseño de features.

5. **Consentimiento y gestión de preferencias**: ¿Cómo diseñar los flujos de recogida de consentimiento y gestión de preferencias de privacidad que sean legalmente válidos y ofrezcan buena experiencia de usuario? ¿Cuáles son los requisitos de un consentimiento válido según el GDPR?

6. **Incidentes de seguridad y brechas de datos**: ¿Cuáles son las obligaciones del PM y del equipo de producto en caso de una brecha de datos? ¿Cuándo es obligatorio notificar a la AEPD y a los usuarios afectados? ¿Cómo usar IA para preparar el protocolo de respuesta a incidentes?

7. **Integración de privacy en el proceso de desarrollo**: ¿Cómo integrar las revisiones de privacidad y compliance de IA en el proceso de desarrollo (Scrum, Kanban)? ¿En qué ceremonia abordar cada aspecto? ¿Cómo colaborar con el DPO y el equipo legal de forma eficiente?

EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Privacy by design y regulación de IA en el desarrollo de productos digitales',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Compliance laboral y auditoría de procesos de RRHH con IA',
                'description'       => 'Usa IA para auditar que tus procesos de recursos humanos cumplen con la legislación laboral española, la normativa de igualdad y los requisitos de protección de datos de empleados.',
                'prompt_content'    => <<<'EOT'
Eres un experto en derecho laboral español y en compliance de Recursos Humanos. Conoces en profundidad el Estatuto de los Trabajadores, la normativa de igualdad y no discriminación, la Ley de Protección de Datos aplicada al ámbito laboral y las obligaciones de registro y documentación de los departamentos de RRHH.

**Mi contexto en RRHH:**
Soy un profesional de Recursos Humanos responsable de garantizar que los procesos de mi organización cumplen con la legislación laboral y las normativas relacionadas. Quiero usar IA para auditar nuestros procedimientos, identificar gaps de compliance y mantenerme actualizado ante los cambios regulatorios frecuentes.

**objetivo: sistema de compliance laboral con IA para RRHH**

1. **Mapa de obligaciones laborales de una empresa española**: Dame un mapa completo de las principales obligaciones laborales que debe cumplir una empresa en España:
   - Registro de jornada: obligaciones, formato y conservación
   - Plan de igualdad: cuándo es obligatorio, qué debe incluir
   - Protocolo de acoso laboral y sexual: contenido mínimo obligatorio
   - Registro salarial: para qué empresas, qué información incluir
   - Prevención de riesgos laborales: evaluación de riesgos, formación obligatoria
   - Obligaciones de información a los representantes de los trabajadores
   Para cada obligación, dame el fundamento legal y las consecuencias de incumplimiento.

2. **Auditoría de procesos de selección**: ¿Cómo garantizar que los procesos de selección están libres de discriminación? Dame una checklist de compliance para los procesos de reclutamiento que cubra:
   - Redacción no discriminatoria de ofertas de empleo
   - Criterios de selección objetivos y documentados
   - Preguntas prohibidas en las entrevistas
   - Protección de datos de los candidatos: qué datos recopilar, cuánto tiempo conservarlos
   - Notificaciones a candidatos descartados

3. **Protección de datos de empleados**: ¿Qué datos de empleados puede tratar una empresa y con qué bases legales? ¿Cuáles son los límites del control y monitorización de empleados (geolocalización, email corporativo, herramientas de productividad)? Dame una guía de compliance de datos de empleados.

4. **Revisión de contratos de trabajo con IA**: ¿Cómo usar IA para revisar contratos de trabajo en busca de cláusulas potencialmente no conformes con el ET o el convenio colectivo aplicable? Dame prompts de revisión para los tipos de contrato más comunes.

5. **Gestión de bajas, ausencias e incapacidades**: ¿Cuáles son las obligaciones legales en la gestión de bajas por incapacidad temporal, ausencias justificadas e injustificadas y permisos retribuidos? ¿Cuándo puede la empresa descontar salario? ¿Qué documentación debo conservar?

6. **Cumplimiento en desvinculaciones**: ¿Qué requisitos legales debo cumplir en un proceso de desvinculación (despido objetivo, disciplinario, ERE, baja voluntaria)? ¿Cómo usar IA para revisar que la documentación de un despido es correcta y reduce el riesgo de impugnación?

7. **Actualización regulatoria continua**: ¿Cómo usar IA para monitorizar los cambios en la legislación laboral española (reformas del ET, nuevas obligaciones, cambios en cotizaciones) y evaluar su impacto en nuestros procesos de RRHH? Dame un sistema de seguimiento regulatorio.

EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Compliance laboral y auditoría de procesos de RRHH',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Auditoría financiera interna y detección de fraude con IA',
                'description'       => 'Usa IA para fortalecer los controles de auditoría interna, detectar patrones de fraude en los datos financieros e identificar riesgos de compliance en los procesos contables y financieros.',
                'prompt_content'    => <<<'EOT'
Eres un auditor interno certificado (CIA) con experiencia en la aplicación de tecnología e inteligencia artificial a los procesos de auditoría interna y detección de fraude. Conoces los marcos de referencia internacionales de auditoría interna (IIA Standards), los esquemas de fraude más comunes (Triángulo del Fraude de Cressey) y las técnicas de análisis de datos aplicadas a la auditoría.

**Mi contexto en finanzas:**
Soy un profesional de finanzas o auditoría interna que quiere usar IA para fortalecer los controles, detectar irregularidades en los datos financieros y mejorar la eficiencia de los procesos de auditoría. El volumen de transacciones hace imposible una revisión manual exhaustiva, y la IA puede ser la clave para una cobertura de auditoría más amplia y profunda.

**objetivo: sistema de auditoría interna y detección de fraude con IA**

1. **Esquemas de fraude más comunes que debo detectar**: Dame un catálogo de los esquemas de fraude financiero más frecuentes según el ACFE (Report to the Nations), con énfasis en los que más afectan a empresas medianas:
   - Malversación de activos: robo de efectivo, fraude en nómina, fraude en gastos
   - Corrupción: sobornos, conflictos de interés, licitaciones amañadas
   - Fraude en estados financieros: inflación de ingresos, subestimación de pasivos
   Para cada esquema, dame las señales de alerta (red flags) que debo buscar en los datos.

2. **Análisis de datos financieros con IA para detección de anomalías**: ¿Cómo usar IA para analizar grandes conjuntos de datos financieros en busca de anomalías que puedan indicar fraude o error? Dame técnicas y prompts para:
   - Análisis de la Ley de Benford en los datos contables
   - Detección de transacciones duplicadas o muy similares
   - Identificación de pagos a proveedores no habituales o de nueva creación
   - Análisis de autorizaciones fuera de horario o de patrón habitual
   - Revisión de gastos de representación y viajes atípicos

3. **Auditoría del ciclo de compras con IA**: El ciclo de compras (procure-to-pay) es uno de los más expuestos al fraude. ¿Cómo usar IA para auditar eficientemente este ciclo? Dame un programa de auditoría del ciclo de compras con los procedimientos de IA para cada área de riesgo.

4. **Auditoría de nómina con IA**: ¿Cómo usar IA para detectar irregularidades en el proceso de nómina? Señales de alerta como: empleados fantasma, cambios de nómina no autorizados, horas extra excesivas o irregulares, bonificaciones fuera de política. Dame los análisis y los prompts para cada control.

5. **Evaluación del control interno con IA**: ¿Cómo usar IA para evaluar la efectividad de los controles internos existentes? ¿Cómo identificar controles que no se están aplicando correctamente? ¿Cómo usar IA para redactar informes de deficiencias de control interno con sus recomendaciones de mejora?

6. **Compliance financiero y regulatorio**: ¿Cómo usar IA para verificar el cumplimiento de obligaciones financieras y regulatorias clave: prevención del blanqueo de capitales (PBC), cumplimiento fiscal (retenciones, declaraciones), límites de pago en efectivo? Dame checklists de compliance por área.

7. **Informe de auditoría interna con IA**: ¿Cómo usar IA para acelerar la redacción de informes de auditoría interna que sean claros, objetivos y orientados a la acción? Dame un proceso y plantillas de prompts para generar informes de auditoría de alta calidad en menos tiempo.

EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Auditoría interna y detección de fraude financiero con IA',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Monitorización regulatoria y compliance legal con IA',
                'description'       => 'Implementa un sistema de vigilancia regulatoria con IA que detecte cambios normativos relevantes para tu práctica, evalúe su impacto y genere alertas accionables para tus clientes.',
                'prompt_content'    => <<<'EOT'
Eres un abogado especializado en compliance regulatorio y en la aplicación de tecnología legal (LegalTech) a la práctica del derecho. Tienes experiencia en el diseño de sistemas de monitorización normativa para despachos de abogados y departamentos jurídicos, que deben mantenerse al día de cambios legislativos en múltiples áreas del derecho y múltiples jurisdicciones.

**Mi contexto legal:**
Soy un abogado o responsable de compliance en un despacho o departamento legal. El mayor reto de mi trabajo es mantenerme actualizado ante el ritmo constante de cambios normativos, evaluar rápidamente el impacto en mis clientes y comunicarles de forma oportuna las implicaciones relevantes para su negocio.

**objetivo: sistema de vigilancia regulatoria con IA**

1. **Arquitectura de un sistema de monitorización normativa**: ¿Cómo diseñar un sistema de vigilancia regulatoria que cubra eficientemente las áreas de derecho relevantes para mi práctica? Dame un framework que incluya:
   - Identificación de fuentes normativas primarias (BOE, DOUE, resoluciones de reguladores)
   - Fuentes secundarias de análisis jurídico (doctrina, jurisprudencia, notas de reguladores)
   - Frecuencia de revisión por área y urgencia
   - Proceso de triaje y evaluación de relevancia para cada tipo de cliente

2. **Análisis de nuevas normas con IA**: ¿Cómo usar IA para analizar eficientemente textos normativos nuevos y extraer rápidamente la información relevante? Dame prompts específicos para:
   - Extraer los puntos clave de una nueva ley o reglamento
   - Identificar las obligaciones específicas que genera para diferentes tipos de empresa
   - Comparar la nueva norma con la regulación anterior e identificar los cambios materiales
   - Evaluar el plazo de adaptación y las consecuencias del incumplimiento

3. **Evaluación de impacto en clientes**: Una vez identificada una norma relevante, ¿cómo usar IA para evaluar rápidamente su impacto en diferentes tipos de clientes de mi cartera? Dame un proceso de evaluación de impacto que incluya: sectores afectados, tamaño de empresa, presencia internacional, y generación de una lista priorizada de clientes que requieren asesoramiento urgente.

4. **Comunicaciones de alerta regulatoria con IA**: ¿Cómo generar comunicaciones de alerta regulatoria para clientes que sean claras, prácticas y diferenciadas por nivel de impacto? Dame prompts para generar:
   - Alertas urgentes para cambios de alto impacto
   - Newsletters mensuales de novedades regulatorias
   - Notas informativas técnicas para clientes con equipos jurídicos propios
   - Resúmenes ejecutivos para consejos de administración

5. **Gestión de plazos regulatorios**: ¿Cómo crear y gestionar un calendario de plazos regulatorios (transposición de directivas, entrada en vigor de nuevas normas, fechas límite de adaptación) que cubra a todos mis clientes? ¿Cómo usar IA para priorizar las acciones más urgentes?

6. **Compliance programs y manuales de compliance**: ¿Cómo usar IA para redactar o actualizar programas de compliance para clientes cuando cambia la normativa aplicable? Dame un proceso de actualización de compliance programs con IA que mantenga la coherencia del documento y documente los cambios realizados.

7. **Posicionamiento como experto en compliance regulatorio**: ¿Cómo usar el sistema de monitorización regulatoria para generar contenido de thought leadership que posicione a mi despacho como referente en compliance? Dame un proceso para convertir las alertas regulatorias en artículos de blog, posts de LinkedIn o newsletters que atraigan nuevos clientes.

EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Vigilancia regulatoria y compliance legal con IA',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Cumplimiento de GDPR y privacidad en atención al cliente con IA',
                'description'       => 'Implementa procesos de atención al cliente que cumplan con el GDPR en el tratamiento de datos personales, gestionen correctamente las solicitudes de ejercicio de derechos y protejan la privacidad de los usuarios.',
                'prompt_content'    => <<<'EOT'
Eres un experto en protección de datos con especialización en su aplicación a los departamentos de atención al cliente y Customer Success. Conoces en profundidad el GDPR, la LOPDGDD española y los criterios de la Agencia Española de Protección de Datos (AEPD) sobre el tratamiento de datos en el contexto de la relación con el cliente.

**Mi contexto en Customer Success:**
Gestiono un equipo o proceso de atención al cliente que maneja diariamente grandes volúmenes de datos personales de clientes: consultas, reclamaciones, datos de facturación, historial de interacciones, preferencias. Quiero asegurarme de que todos estos procesos cumplen con el GDPR y que mi equipo sabe cómo actuar ante solicitudes de ejercicio de derechos de los clientes.

**objetivo: guía de compliance de GDPR en atención al cliente con IA**

1. **Datos personales en el proceso de atención al cliente**: ¿Qué datos personales trata habitualmente un departamento de atención al cliente y qué base legal ampara cada tratamiento?
   - Datos de identificación y contacto: contrato o consentimiento
   - Historial de interacciones: interés legítimo o ejecución del contrato
   - Grabaciones de llamadas: consentimiento + información previa
   - Valoraciones de satisfacción: consentimiento
   - Datos de pago y facturación: ejecución del contrato + obligación legal
   Para cada tipo de dato, dame la base legal correcta y los requisitos de información al cliente.

2. **Gestión de solicitudes de ejercicio de derechos**: ¿Cómo establecer un proceso eficiente para gestionar las solicitudes de ejercicio de derechos de los clientes (acceso, rectificación, supresión, portabilidad, limitación del tratamiento, oposición)? Dame:
   - Cómo verificar la identidad del solicitante
   - Plazos de respuesta obligatorios para cada derecho
   - Qué información proporcionar en cada caso
   - Cómo documentar la solicitud y la respuesta
   - Cómo usar IA para acelerar la generación de respuestas a solicitudes de ejercicio de derechos

3. **Grabación de llamadas y monitorización de interacciones**: ¿Cuáles son los requisitos legales para grabar llamadas de atención al cliente? ¿Cuánto tiempo pueden conservarse las grabaciones? ¿Qué información debo proporcionar al cliente antes de grabar? ¿Qué ocurre si el cliente se niega a ser grabado?

4. **Uso de IA en la atención al cliente y GDPR**: ¿Qué implicaciones de privacidad tiene el uso de chatbots, IA generativa y análisis de sentimiento en la atención al cliente? ¿Cuándo es obligatorio informar al cliente de que está interactuando con IA? ¿Cuándo aplica la prohibición de decisiones automatizadas con efectos significativos?

5. **Formación del equipo de atención al cliente en GDPR**: ¿Cómo formar a los agentes de atención al cliente en sus obligaciones de protección de datos de forma práctica y memorable? Dame un programa de formación de 2 horas sobre GDPR para equipos de CS con los casos prácticos más relevantes.

6. **Incidentes de seguridad en atención al cliente**: ¿Cuáles son los incidentes de seguridad más comunes en atención al cliente (envío de información a cliente equivocado, acceso no autorizado a datos, pérdida de registros)? ¿Cuándo son notificables a la AEPD? ¿Cuál es el protocolo de respuesta?

7. **Auditoría de compliance de GDPR en CS**: ¿Cómo realizar una auditoría periódica del compliance de GDPR en el departamento de atención al cliente? Dame una checklist de auditoría que cubra los puntos más críticos y un proceso de seguimiento de las acciones de mejora.

EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'GDPR y protección de datos en procesos de atención al cliente',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Gestión de obligaciones legales y fiscales del freelancer con IA',
                'description'       => 'Usa IA para entender y gestionar tus obligaciones legales, fiscales y de Seguridad Social como autónomo en España, manteniéndote en compliance sin necesidad de costoso asesoramiento externo constante.',
                'prompt_content'    => <<<'EOT'
Eres un asesor especializado en el régimen fiscal y legal de los trabajadores autónomos en España. Conoces en profundidad el Régimen Especial de Trabajadores Autónomos (RETA), las obligaciones fiscales de los autónomos (IVA, IRPF, declaraciones trimestrales), los contratos de prestación de servicios y las implicaciones legales de trabajar como freelancer.

**Mi contexto como freelancer:**
Soy un trabajador autónomo en España. Mis dudas y preocupaciones sobre compliance incluyen: qué declaraciones debo presentar y cuándo, cómo gestionar la facturación con clientes españoles y extranjeros, qué deducciones puedo aplicar legalmente, cómo estructurar mis contratos con clientes y cómo mantenerme al día de los cambios que afectan a los autónomos.

**objetivo: guía completa de compliance legal y fiscal para autónomos con IA**

1. **Obligaciones fiscales del autónomo en España**: Dame un calendario completo de las obligaciones fiscales de un autónomo en España durante el año:
   - Declaraciones trimestrales de IVA (modelo 303): qué incluir, plazos
   - Retenciones trimestrales de IRPF (modelo 130 o 131): diferencias, cuándo aplica cada uno
   - Declaración anual de IVA (modelo 390): qué es y para qué sirve
   - Declaración de la Renta (IRPF anual): peculiaridades del autónomo
   - Declaración informativa de operaciones con terceros (modelo 347): cuándo es obligatoria
   Para cada declaración, dame el plazo exacto y las consecuencias del incumplimiento.

2. **Facturación correcta como autónomo**: ¿Cuáles son los requisitos legales de una factura correcta? ¿Cómo facturar a clientes en España, en la UE y fuera de la UE? ¿Cuándo aplicar IVA y cuándo no? ¿Qué es la inversión del sujeto pasivo y cuándo aplica? ¿Cómo tratar las facturas en divisas extranjeras?

3. **Deducciones fiscales para autónomos**: ¿Qué gastos puede deducir un autónomo de forma legal y bien documentada?
   - Cuota de autónomos (RETA): deducción en IRPF
   - Suministros del hogar (oficina en casa): porcentajes y requisitos
   - Material de trabajo: ordenadores, software, libros profesionales
   - Formación profesional relacionada con la actividad
   - Seguros: responsabilidad civil, de salud (cuándo deducible)
   - Viajes y manutención: requisitos de documentación
   Dame los criterios de la AEAT para cada categoría y los errores más frecuentes que generan comprobaciones.

4. **Contratos con clientes**: ¿Qué elementos debe incluir un contrato de prestación de servicios como freelancer? ¿Cómo protegerme de impagos con cláusulas contractuales? ¿Qué diferencia a un contrato de servicios de una relación laboral encubierta (falso autónomo)? ¿Cuándo es obligatorio un contrato escrito?

5. **Régimen de cuotas de la Seguridad Social para autónomos**: Explica el sistema de cotización por ingresos reales de los autónomos. ¿Cómo funciona el sistema de tramos? ¿Qué beneficios tiene cotizar por una base más alta? ¿Cómo gestionar los cambios de tramo durante el año cuando mis ingresos varían?

6. **Protección jurídica ante impagos**: ¿Cuáles son mis opciones legales cuando un cliente no paga? Explica el proceso desde el requerimiento extrajudicial hasta el juicio monitorio y la orden europea de pago. ¿Cuándo compensa iniciar acciones legales? ¿Cómo usar IA para redactar requerimientos de pago efectivos?

7. **Mantenerse actualizado como autónomo**: ¿Cómo usar IA para monitorizar los cambios en la normativa que afectan a los autónomos (cambios en la Ley de Autónomos, modificaciones fiscales, nuevas deducciones) y evaluar su impacto en mi situación? ¿Cuándo es imprescindible consultar a un asesor fiscal presencialmente?

EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Obligaciones legales, fiscales y de compliance para autónomos en España',
                'vote_score'        => 52,
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
