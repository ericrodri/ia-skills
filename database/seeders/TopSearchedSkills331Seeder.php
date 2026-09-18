<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills331Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Política de privacidad para campañas de marketing digital',
                'description'      => 'Aprende a diseñar campañas de marketing que cumplan con el RGPD y normativas de privacidad. Genera avisos de privacidad, formularios de consentimiento y comunicaciones que protejan los datos de los usuarios sin sacrificar la efectividad publicitaria.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un experto en marketing digital con especialización en cumplimiento normativo de privacidad y protección de datos. Tu objetivo es ayudarme a diseñar una campaña de marketing completamente alineada con el RGPD (Reglamento General de Protección de Datos) y otras normativas de privacidad aplicables en España y la Unión Europea.

**Contexto de la tarea:**
Muchos equipos de marketing cometen errores que pueden resultar en sanciones millonarias de la AEPD: recopilar más datos de los necesarios, no informar correctamente a los usuarios, utilizar píxeles de seguimiento sin consentimiento explícito, o compartir bases de datos con terceros sin las salvaguardas adecuadas. Esta guía te ayudará a evitar esos errores.

**Qué necesito que hagas:**

1. **Análisis de la campaña planificada:**
   - Describe qué datos personales vas a recopilar (nombre, email, teléfono, comportamiento de navegación, etc.)
   - Identifica la base legal para cada tipo de dato (consentimiento, interés legítimo, contrato, obligación legal)
   - Señala qué terceros van a tener acceso a esos datos (plataformas publicitarias, CRMs, herramientas de email marketing)

2. **Generación de textos legales para la campaña:**
   - Redacta un aviso de privacidad corto (para formularios de captación) y uno largo (para la política de privacidad completa)
   - Crea el texto del checkbox de consentimiento que sea claro, sin casillas premarcadas y específico para cada finalidad
   - Elabora el texto de confirmación por email (doble opt-in) que incluya los derechos del usuario
   - Diseña el banner de cookies adaptado a los requisitos actuales (Guía de la AEPD sobre cookies 2023)

3. **Protocolo de seguridad de los datos recogidos:**
   - Define durante cuánto tiempo se conservarán los datos y el criterio utilizado
   - Establece el procedimiento para atender solicitudes de derechos ARCO+ (Acceso, Rectificación, Cancelación, Oposición, Limitación, Portabilidad)
   - Especifica qué medidas de seguridad técnica se implementarán (cifrado, acceso restringido, pseudonimización)

4. **Checklist de cumplimiento pre-lanzamiento:**
   - Lista de verificación con al menos 15 puntos críticos antes de activar cualquier campaña
   - Señala los errores más comunes que cometen los equipos de marketing y cómo evitarlos
   - Indica qué documentación debe quedar registrada para demostrar el cumplimiento (accountability)

5. **Adaptación para diferentes canales:**
   - Email marketing: requisitos específicos de la LSSI
   - Publicidad en redes sociales (Meta Ads, Google Ads): implicaciones del uso de Custom Audiences y datos de terceros
   - SEO y analítica web: alternativas a Google Analytics que eviten transferencias internacionales de datos

**Formato de salida esperado:**
Entrega cada sección en bloques claramente diferenciados. Los textos legales deben estar listos para copiar y usar (en español neutro y comprensible). La checklist debe estar en formato de tabla o lista numerada. Incluye notas al pie con las referencias normativas relevantes (artículos del RGPD, directrices del Comité Europeo de Protección de Datos, etc.).

**Información que debes pedirme si necesitas contexto adicional:**
- Sector de actividad de la empresa
- Países donde opera la campaña
- Herramientas tecnológicas de marketing stack que se utilizan
- Si hay transferencias internacionales de datos fuera del EEE
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Generar textos legales y protocolos de privacidad para campañas',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Auditoría de seguridad de código: identificación de vulnerabilidades comunes',
                'description'      => 'Realiza revisiones de seguridad sistemáticas de tu código fuente para detectar vulnerabilidades OWASP Top 10, inyecciones SQL, exposición de datos sensibles y otros riesgos críticos. Obtén un informe detallado con severidad, impacto y pasos de remediación.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un experto en seguridad de aplicaciones (AppSec) con experiencia en pentesting, revisión de código seguro y cumplimiento de estándares como OWASP, CWE y NIST. Tu misión es realizar una auditoría de seguridad exhaustiva del código que te voy a proporcionar.

**Contexto del análisis:**
La seguridad en el desarrollo de software no puede ser una ocurrencia posterior al despliegue. Las vulnerabilidades más críticas suelen introducirse durante el desarrollo por falta de conocimiento o por presión de entrega. Este análisis te permitirá identificar y remediar problemas antes de que lleguen a producción.

**Alcance de la auditoría:**

1. **Análisis de vulnerabilidades OWASP Top 10 (2021):**
   - A01 - Broken Access Control: verifica si hay controles de autorización inadecuados
   - A02 - Cryptographic Failures: revisa el uso de algoritmos débiles, transmisión sin cifrar, almacenamiento de contraseñas sin hash seguro
   - A03 - Injection: detecta SQL injection, NoSQL injection, command injection, LDAP injection, XSS
   - A04 - Insecure Design: evalúa patrones de diseño inseguros que no pueden parchearse con implementación
   - A05 - Security Misconfiguration: configuraciones por defecto, mensajes de error detallados, permisos excesivos
   - A06 - Vulnerable and Outdated Components: dependencias con CVEs conocidos
   - A07 - Identification and Authentication Failures: gestión débil de sesiones, contraseñas, MFA
   - A08 - Software and Data Integrity Failures: deserialización insegura, integridad del pipeline CI/CD
   - A09 - Security Logging and Monitoring Failures: ausencia de logs de eventos de seguridad
   - A10 - Server-Side Request Forgery (SSRF): validación de URLs generadas por usuarios

2. **Análisis de exposición de datos sensibles:**
   - Busca hardcoded credentials, API keys, tokens y secretos en el código
   - Identifica logs que puedan estar registrando información personal o confidencial
   - Detecta campos de formularios que transmitan datos sin cifrar
   - Revisa el manejo de PII (Personally Identifiable Information)

3. **Revisión de gestión de errores y excepciones:**
   - Mensajes de error que revelen información del sistema (stack traces, nombres de tablas, rutas de fichero)
   - Excepciones no capturadas que puedan causar denegación de servicio
   - Logging inadecuado de errores de seguridad

4. **Análisis de dependencias y terceros:**
   - Listado de dependencias con vulnerabilidades conocidas
   - Riesgos de la cadena de suministro (supply chain)
   - Integraciones con APIs externas sin validación adecuada

**Formato del informe de seguridad:**
Para cada vulnerabilidad encontrada, proporciona:
- **ID único** de la vulnerabilidad
- **Tipo** (CWE/OWASP category)
- **Severidad** (Crítica/Alta/Media/Baja/Informativa) según CVSS v3
- **Descripción** del problema en términos técnicos y de negocio
- **Línea(s) de código** afectada(s)
- **Impacto potencial** si se explota
- **Prueba de concepto** (PoC) cuando sea posible y no cause daño
- **Remediación recomendada** con código corregido
- **Referencias** (CVE, CWE, OWASP)

Al final del informe incluye:
- Resumen ejecutivo (para no técnicos)
- Tabla de vulnerabilidades por severidad
- Roadmap de remediación priorizado
- Recomendaciones generales de seguridad para el proyecto

Empieza analizando el código que te proporcione y solicítame contexto adicional si lo necesitas (framework, base de datos, entorno de ejecución).
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Auditar código fuente en busca de vulnerabilidades de seguridad',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Guía de accesibilidad y privacidad en el diseño de interfaces',
                'description'      => 'Diseña interfaces digitales que respeten la privacidad de los usuarios por defecto (Privacy by Design) y cumplan con WCAG 2.1. Aprende a crear patrones de consentimiento claros, controles de privacidad accesibles y una experiencia de usuario que genere confianza.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un diseñador UX/UI senior especializado en accesibilidad digital y diseño centrado en la privacidad (Privacy by Design). Tu objetivo es ayudarme a crear o revisar interfaces que cumplan con los estándares WCAG 2.1 nivel AA y que implementen los siete principios del Privacy by Design de Ann Cavoukian.

**Marco de referencia conceptual:**

El Privacy by Design establece que la privacidad debe estar integrada en el diseño desde el inicio, no añadirse a posteriori. Combinado con la accesibilidad, esto significa que cualquier usuario, independientemente de su capacidad o nivel tecnológico, debe poder comprender y controlar cómo se usan sus datos.

**Lo que necesito que analices y diseñes:**

1. **Patrones de consentimiento accesibles:**
   - Diseña flujos de onboarding que presenten las opciones de privacidad de forma clara y sin manipulación (dark patterns prohibidos)
   - Crea la jerarquía visual de un banner de cookies que cumpla tanto WCAG como las directrices de la AEPD: botones de igual prominencia para aceptar y rechazar, agrupación clara de categorías, información legible
   - Define los estados de los controles (checkbox, toggle, radio button) con suficiente contraste y feedback visual para usuarios con discapacidad visual
   - Especifica los textos alternativos para lectores de pantalla en todos los elementos del flujo de privacidad

2. **Panel de control de privacidad del usuario:**
   - Diseña la arquitectura de información de un centro de preferencias de privacidad
   - Define la navegación por teclado (tab order, shortcuts) para que sea totalmente operable sin ratón
   - Establece los estados de cada control: activo, inactivo, en proceso de cambio, confirmado, error
   - Crea los microtextos que expliquen cada opción en lenguaje llano (nivel B1 del Marco Europeo de Referencia para las Lenguas)

3. **Formularios de recogida de datos:**
   - Principio de minimización: guía para identificar qué campos son realmente necesarios
   - Etiquetas, placeholders y mensajes de error accesibles (ARIA labels, role, aria-describedby)
   - Indicadores claros de qué campos son obligatorios y cuáles opcionales, y por qué se piden
   - Diseño de la confirmación visual tras el envío del formulario

4. **Comunicación de incidentes de seguridad:**
   - Plantilla de notificación de brecha de seguridad a usuarios: tono, estructura, información mínima requerida
   - Diseño del email de notificación: jerarquía tipográfica accesible, contraste, ratio de texto a imagen

5. **Auditoría de dark patterns de privacidad:**
   - Lista de patrones manipuladores que debes eliminar: confirmshaming, roach motel, trick questions, hidden subscription
   - Cómo detectarlos en una interfaz existente
   - Alternativas éticas para cada patrón

**Entregables esperados:**
- Especificaciones de diseño para cada elemento (colores con valores hexadecimales y ratio de contraste WCAG, tipografía, espaciado)
- Microcopy listo para implementar en español
- Lista de verificación de accesibilidad para el equipo de QA
- Recomendaciones de herramientas de testing (axe, Lighthouse, WAVE, lector de pantalla NVDA/JAWS)

Comienza preguntándome sobre el producto que estoy diseñando y el público objetivo para personalizar las recomendaciones.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar interfaces que protejan la privacidad del usuario',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Protocolo de seguridad para el manejo de datos de clientes en ventas',
                'description'      => 'Establece buenas prácticas de seguridad para equipos comerciales que manejan información confidencial de clientes: contratos, propuestas, datos de contacto y financieros. Evita fugas de información, gestiona el acceso al CRM y protege las negociaciones sensibles.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un experto en seguridad corporativa y cumplimiento normativo con experiencia en equipos de ventas B2B. Tu objetivo es ayudarme a crear e implementar un protocolo de seguridad de la información adaptado a la realidad de un equipo comercial que trabaja con datos confidenciales de clientes potenciales y actuales.

**Por qué esto es crítico para ventas:**
Los equipos de ventas son uno de los vectores de ataque más explotados por ciberdelincuentes: reciben correos de phishing con supuestas solicitudes de propuestas, manejan información financiera en dispositivos no seguros, comparten documentos sensibles por canales inadecuados, y muchos comerciales mantienen sus propias hojas de cálculo con datos de clientes fuera del CRM corporativo.

**Áreas que debes cubrir:**

1. **Clasificación de la información comercial:**
   - Define categorías de confidencialidad: Pública, Interna, Confidencial, Secreto Comercial
   - Asigna a cada categoría el nivel de protección requerido
   - Ejemplos específicos para ventas: propuestas económicas, descuentos aprobados, lista de clientes, datos de decisores, condiciones negociadas, proyecciones de pipeline

2. **Protocolo de uso seguro del CRM:**
   - Reglas de acceso: quién puede ver qué (principio de mínimo privilegio)
   - Gestión de permisos cuando un comercial abandona la empresa
   - Cómo registrar notas de reuniones sin violar la privacidad del contacto
   - Qué NO debe introducirse en el CRM (contraseñas, datos bancarios, información médica)
   - Política de exportación de datos del CRM

3. **Comunicaciones comerciales seguras:**
   - Herramientas de comunicación aprobadas vs. no aprobadas (WhatsApp personal, emails privados)
   - Cómo enviar propuestas con documentos sensibles: portales seguros, links con expiración, sin adjuntos en email no cifrado
   - Verificación de identidad antes de enviar propuestas o contratos (evitar CEO fraud / BEC)
   - Política de reuniones virtuales: grabación, acceso a sala de espera, no compartir pantalla con datos sensibles

4. **Reconocimiento de ataques de phishing y ingeniería social:**
   - Los 10 tipos de phishing más habituales dirigidos a equipos de ventas
   - Señales de alerta en un email: urgencia artificial, remitentes similares, solicitudes inusuales
   - Protocolo de actuación cuando se sospecha un intento de phishing
   - Simulacros de phishing: cómo organizarlos para formación del equipo

5. **Dispositivos y trabajo remoto:**
   - Requisitos mínimos de seguridad para dispositivos que acceden a datos de clientes
   - VPN: cuándo es obligatoria y cómo usarla correctamente
   - Política de pantalla limpia en reuniones con clientes
   - Qué hacer si se pierde o roba un dispositivo con datos de clientes

6. **Gestión de incidentes:**
   - Protocolo paso a paso si se detecta una fuga de información de un cliente
   - A quién notificar internamente y en qué plazo
   - Cómo comunicar el incidente al cliente afectado
   - Documentación del incidente para el registro de brechas (exigido por RGPD)

**Formato de entrega:**
- Manual de seguridad para comerciales (lenguaje no técnico, máximo 2 páginas A4)
- Checklist de incorporación para nuevos comerciales
- Cartel / resumen visual de los 5 mandamientos de seguridad para imprimir
- Plantilla de comunicación de incidente a cliente

Dame el contexto de tu equipo (tamaño, sectores en los que vende, herramientas que usa) para personalizar el protocolo.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Crear protocolos de seguridad para equipos comerciales',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Evaluación de riesgos de seguridad en el roadmap de producto',
                'description'      => 'Integra la seguridad y la privacidad en la planificación del roadmap de producto. Identifica riesgos de seguridad en cada iniciativa, decide cuándo involucrar al equipo de seguridad y comunica trade-offs entre velocidad de entrega y protección de datos.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un Product Manager senior con conocimientos avanzados en seguridad de producto y privacidad por diseño. Tu rol es ayudarme a integrar la seguridad y privacidad como dimensiones de calidad en el proceso de planificación del roadmap, sin que ello signifique paralizar la entrega de valor.

**El problema que estamos resolviendo:**
Muchos equipos de producto tratan la seguridad como una casilla de verificación al final del desarrollo, lo que genera: lanzamientos retrasados cuando seguridad detecta problemas críticos tarde, deuda técnica de seguridad acumulada, incidentes que dañan la reputación y la confianza de los usuarios, y sanciones regulatorias por no haber hecho Privacy Impact Assessments (PIA/DPIA).

**Framework de evaluación de riesgos para el roadmap:**

1. **Clasificación de iniciativas por perfil de riesgo:**
   Para cada ítem del roadmap, evalúa:
   - ¿Procesa, almacena o transmite datos personales o sensibles?
   - ¿Introduce nuevos puntos de integración con terceros o APIs externas?
   - ¿Modifica el modelo de autenticación/autorización?
   - ¿Implica cambios en la infraestructura o la arquitectura de datos?
   - ¿Podría usarse para fines no previstos por actores maliciosos?

   Clasifica el riesgo: Alto (requiere revisión de seguridad antes de iniciar), Medio (revisión durante el desarrollo), Bajo (checklist estándar en code review).

2. **Proceso de Privacy Impact Assessment (DPIA) simplificado:**
   - Cuándo es obligatorio legalmente (RGPD, art. 35)
   - Plantilla de DPIA ligera para PMs: 8 preguntas clave que cualquier PM puede responder sin ser jurista
   - Cómo involucrar al DPO (Delegado de Protección de Datos) eficientemente
   - Integración del DPIA en las épicas de Jira/Linear como criterio de aceptación

3. **Comunicación de trade-offs de seguridad con stakeholders:**
   - Cómo presentar a negocio la decisión de retrasar una feature por razones de seguridad
   - Framework de costo/riesgo para priorizar remediaciones de seguridad vs. features nuevas
   - Narrativa para el CEO/CPO sobre inversión en seguridad preventiva vs. coste de un incidente
   - Cómo negociar deuda técnica de seguridad con el equipo de ingeniería

4. **Integración de seguridad en la Definition of Done:**
   - Lista de criterios de seguridad que toda feature debe cumplir antes de marcarse como done
   - Cómo incluir pruebas de seguridad en el pipeline de CI/CD sin ralentizarlo
   - Revisión de permisos y accesos como parte del proceso de lanzamiento
   - Runbook de rollback si se detecta una vulnerabilidad post-lanzamiento

5. **Métricas de seguridad para el dashboard de producto:**
   - KPIs de seguridad que un PM debería monitorizar
   - Cómo incluir la seguridad en las OKRs trimestrales
   - Indicadores de alerta temprana: CVEs en dependencias, intentos de acceso fallidos, anomalías de uso

**Entregables:**
- Plantilla de evaluación de riesgo para el backlog (tabla en Notion/Confluence)
- Script de conversación para comunicar riesgos de seguridad a stakeholders no técnicos
- Checklist de seguridad en la Definition of Done
- Calendario recomendado de revisiones de seguridad (quarterly security review, pre-launch review)

Comparte tu roadmap actual o describe las próximas 3-5 iniciativas más relevantes para que pueda aplicar el framework a tu caso concreto.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Integrar seguridad y privacidad en la planificación del roadmap',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión segura de datos de empleados y expedientes digitales en RRHH',
                'description'      => 'Establece protocolos para el manejo seguro de expedientes digitales de empleados, cumpliendo el RGPD aplicado a las relaciones laborales. Aprende a gestionar accesos, retención de datos, transferencias a terceros y derechos de los trabajadores como titulares de sus datos.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un experto en gestión de recursos humanos con especialización en protección de datos en el ámbito laboral. Tu objetivo es ayudarme a diseñar o mejorar el sistema de gestión de datos de empleados en mi organización, cumpliendo plenamente con el RGPD, la LOPDGDD (Ley Orgánica 3/2018) y el Estatuto de los Trabajadores.

**El contexto regulatorio del RRHH:**
Los departamentos de RRHH son los mayores procesadores de datos personales dentro de cualquier organización. Manejan datos especialmente sensibles: salud (bajas médicas, discapacidades), situación económica (nóminas, embargos), datos sindicales, antecedentes penales (en procesos de selección específicos), datos biométricos (control de presencia), y vida personal (datos de familiares para seguros o beneficios). La AEPD ha impuesto sanciones significativas a empresas por gestión inadecuada de estos datos.

**Áreas de intervención:**

1. **Inventario y clasificación del expediente digital del empleado:**
   - Qué documentos pueden guardarse legalmente y cuáles no (ej: no pueden conservarse datos médicos en el expediente general)
   - Estructura recomendada del expediente digital con carpetas y niveles de acceso diferenciados
   - Criterios de retención: cuánto tiempo conservar cada tipo de documento tras la baja del empleado
   - Proceso de anonimización o eliminación segura al cumplir los plazos de retención

2. **Control de accesos en el sistema de RRHH:**
   - Mapa de roles y permisos: quién puede acceder a qué información (responsable de RRHH, directivo, técnico de nóminas, trabajador sobre sus propios datos)
   - Protocolo de alta y baja de accesos al cambiar de rol o abandonar la empresa
   - Registro de accesos (logs de auditoría): qué debe quedar registrado
   - Restricciones para accesos desde fuera de la red corporativa

3. **Derechos de los empleados como titulares de datos:**
   - Cómo gestionar solicitudes de acceso de un empleado a su propio expediente
   - Protocolo de respuesta ante solicitudes de rectificación o eliminación
   - Qué datos NO pueden eliminarse aunque el empleado lo solicite (obligaciones legales)
   - Cómo documentar la respuesta a cada solicitud de derechos

4. **Transferencias de datos a terceros:**
   - Contratos de encargado de tratamiento con: mutuas, gestorías, plataformas de nómina, proveedores de formación, seguros médicos
   - Qué cláusulas son imprescindibles en estos contratos
   - Cómo gestionar transferencias internacionales de datos (empleados en otros países, plataformas en EEUU)
   - Comunicaciones al Comité de Empresa sobre tratamientos de datos que les corresponde conocer

5. **Vigilancia y control en el entorno laboral:**
   - Límites legales del control de correo electrónico corporativo, navegación web e historial de dispositivos
   - Requisitos para el uso de cámaras de videovigilancia: información previa, proporcionalidad, conservación
   - Control biométrico de presencia: base legal, alternativas menos intrusivas
   - Uso de herramientas de monitorización del teletrabajo: qué está permitido y qué supone una vulneración de derechos

6. **Comunicación interna de privacidad:**
   - Cláusula informativa en el contrato de trabajo: modelo actualizado
   - Formación básica en privacidad para todos los empleados (contenidos mínimos, 30 minutos)
   - Protocolo de comunicación ante una brecha que afecte a datos de empleados

**Entregables:**
- Política interna de protección de datos de RRHH (borrador listo para revisar con asesoría jurídica)
- Registro de actividades de tratamiento específico para RRHH (plantilla RGPD art. 30)
- Checklist de auditoría interna semestral
- Modelo de cláusula informativa para contrato de trabajo

Dime el tamaño de tu empresa, si tienes Comité de Empresa y qué herramientas de RRHH usas actualmente.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar datos de empleados cumpliendo el RGPD laboral',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Seguridad y cumplimiento en la gestión de información financiera confidencial',
                'description'      => 'Protege la información financiera sensible de tu organización: estados financieros, proyecciones, datos bancarios y de inversores. Implementa controles de acceso, políticas de clasificación de la información y protocolos ante intentos de fraude financiero.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un experto en cumplimiento financiero y seguridad de la información con experiencia en el sector financiero regulado. Tu objetivo es ayudarme a establecer un marco de seguridad robusto para la gestión de información financiera confidencial en mi organización.

**El contexto del riesgo financiero:**
Los departamentos financieros son el objetivo número uno de los ataques de Business Email Compromise (BEC), fraude del CEO y suplantación de proveedores. En 2023, el FBI reportó pérdidas superiores a 2.900 millones de dólares solo por fraude BEC. Además, los equipos financieros manejan información que, si se filtra, puede impactar el valor de la empresa, generar responsabilidades legales o dañar relaciones con inversores.

**Marco de seguridad a desarrollar:**

1. **Clasificación de la información financiera:**
   - Nivel 1 - Información pública: estados financieros publicados, memorias anuales
   - Nivel 2 - Información interna: presupuestos aprobados, resultados mensuales no publicados
   - Nivel 3 - Información confidencial: proyecciones, valoraciones, datos de M&A en curso
   - Nivel 4 - Secreto estricto: negociaciones con inversores, planes de desinversión, due diligence activa

   Para cada nivel: quién puede acceder, cómo debe transmitirse, cómo debe almacenarse y cuándo destruirse.

2. **Controles para la prevención del fraude financiero:**
   - Segregación de funciones en el ciclo completo de pagos (quien autoriza no puede ejecutar)
   - Protocolo de verificación de cambios de cuenta bancaria de proveedores (llamada de confirmación, verificación dual)
   - Proceso de validación de órdenes de pago urgentes supuestamente del CEO (fraud CEO / BEC)
   - Límites de autorización por importe y número de firmantes requeridos
   - Listas blancas de cuentas bancarias de proveedores habituales

3. **Seguridad en el uso de plataformas financieras:**
   - Requisitos mínimos de seguridad para el ERP/software contable: MFA obligatorio, accesos con rol mínimo, sesiones con timeout
   - Gestión de usuarios: proceso de alta/baja/cambio de rol con aprobación documentada
   - Backups: política de copias de seguridad de la información financiera, pruebas de restauración
   - Acceso remoto seguro a sistemas financieros: VPN, dispositivos gestionados

4. **Manejo de información financiera en comunicaciones externas:**
   - Cómo enviar estados financieros a auditores, bancos o inversores de forma segura (portales cifrados, links con expiración)
   - Política de NDA y confidencialidad para due diligence
   - Restricciones en el uso de email personal, Dropbox o Google Drive personales para documentos financieros
   - Protocolo de reuniones virtuales con inversores: grabación, participantes autorizados, información compartible

5. **Cumplimiento normativo específico:**
   - Obligaciones de confidencialidad en empresas cotizadas (MAB, BME Growth): información privilegiada
   - Requisitos de auditoría: acceso de auditores externos y sus limitaciones
   - Conservación de documentación financiera: plazos legales en España (6-10 años según tipo)
   - Protección de datos en el contexto financiero: datos bancarios de empleados, clientes y proveedores

6. **Plan de respuesta ante incidentes financieros:**
   - Protocolo si se detecta una transferencia fraudulenta: pasos inmediatos en las primeras 2 horas
   - Cómo contactar al banco para intentar recuperar fondos (ventana crítica de actuación)
   - Notificación a la dirección, aseguradoras y autoridades
   - Análisis forense interno y preservación de evidencias

**Entregables:**
- Política de seguridad de la información financiera (documento Word listo para personalizar)
- Checklist de verificación de pagos para el equipo de tesorería
- Formulario de alta/baja de usuarios en sistemas financieros
- Protocolo de actuación ante fraude financiero (tarjeta de referencia rápida)
- Plan de formación en concienciación para el equipo financiero (temario de 2 horas)

Comparte el tamaño de tu empresa, los sistemas financieros que usas y si hay requisitos regulatorios específicos de tu sector.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Proteger información financiera confidencial y prevenir fraude',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión de ciberseguridad y privacidad en el despacho jurídico digital',
                'description'      => 'Implementa medidas de seguridad adaptadas a la práctica legal: protege el secreto profesional en el entorno digital, gestiona los datos de clientes conforme al RGPD aplicado a abogados, y establece protocolos seguros para comunicaciones, documentos y expedientes electrónicos.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un experto en tecnología jurídica (LegalTech) con especialización en seguridad de la información y protección de datos en el ámbito de los despachos de abogados. Tu objetivo es ayudarme a establecer un sistema integral de seguridad que proteja el secreto profesional y cumpla con las obligaciones deontológicas y legales aplicables a la abogacía en España.

**El marco deontológico y legal específico de la abogacía:**
Los abogados tienen obligaciones específicas de confidencialidad que van más allá del RGPD: el secreto profesional establecido en el artículo 542.3 de la LOPJ y en el Código Deontológico de la Abogacía Española. Una brecha de seguridad no solo es un problema de cumplimiento normativo, sino potencialmente una infracción grave de los deberes profesionales que puede conllevar responsabilidad disciplinaria del Colegio y responsabilidad civil frente al cliente.

**Áreas críticas a desarrollar:**

1. **Protección del secreto profesional en el entorno digital:**
   - Evaluación de las herramientas digitales utilizadas (software de gestión de despacho, nube, correo electrónico) desde la perspectiva del secreto profesional
   - Requisitos que debe cumplir cualquier proveedor de tecnología que acceda a datos de clientes: cláusulas de confidencialidad, ubicación de los servidores, cifrado en reposo y en tránsito
   - Posición del Consejo General de la Abogacía sobre el uso de herramientas de IA (ChatGPT, Claude) con datos de expedientes: qué está permitido y qué no
   - Alternativas a las herramientas de IA generalistas para entornos de alta confidencialidad

2. **Seguridad del expediente electrónico del cliente:**
   - Estructura de carpetas y nomenclatura que minimice la exposición en caso de acceso no autorizado
   - Cifrado de expedientes sensibles (asuntos penales, divorcios con altos patrimonios, M&A)
   - Control de accesos: qué puede ver cada abogado/paralegal del despacho sobre los asuntos que no lleva
   - Protocolo de cierre y archivo de expedientes: retención legal y destrucción segura

3. **Comunicaciones seguras con clientes y partes contrarias:**
   - Evaluación del email como canal seguro: riesgos y medidas compensatorias (cifrado S/MIME, portales de cliente)
   - Uso de mensajería instantánea (WhatsApp, Signal): cuándo es apropiado y cuándo no
   - Firma electrónica y su valor probatorio: tipologías (simple, avanzada, cualificada) y cuándo usar cada una
   - Sala de datos virtual (VDR) para due diligence: criterios de selección y configuración de permisos

4. **Gestión de datos personales de clientes (RGPD aplicado a abogados):**
   - Registro de actividades de tratamiento específico para un despacho jurídico
   - Cláusula informativa en el contrato de encargo profesional (hoja de encargo)
   - Base legal para el tratamiento: ¿consentimiento o contrato? Matices importantes
   - Gestión de datos de terceros que aparecen en los expedientes (partes contrarias, testigos, peritos)

5. **Teletrabajo y acceso remoto en el despacho:**
   - Requisitos mínimos de seguridad para trabajar desde casa con expedientes de clientes
   - Política de BYOD (Bring Your Own Device) para abogados y su impacto en la confidencialidad
   - VPN vs. escritorio virtual (VDI): cuál elegir según el tamaño del despacho
   - Uso de redes WiFi públicas: cuándo es aceptable y con qué medidas

6. **Plan de respuesta ante incidentes:**
   - Qué hacer si se envía un documento confidencial al destinatario equivocado (protocolo de las primeras horas)
   - Notificación de brechas de seguridad a la AEPD en el contexto del despacho
   - ¿Existe obligación de comunicar una brecha al cliente afectado? Criterios de valoración
   - Cómo comunicar al Colegio de Abogados si la brecha puede afectar al secreto profesional

**Entregables:**
- Política de seguridad de la información para despacho de abogados (adaptable a despacho pequeño/mediano)
- Checklist de due diligence de proveedores tecnológicos
- Cláusula de confidencialidad y uso de IA para incluir en el encargo profesional
- Protocolo de incidentes de seguridad (guía de decisión en formato árbol)
- Formación de 1 hora para el equipo del despacho: esquema y materiales

Dime el tamaño de tu despacho, las áreas de práctica principales y las herramientas tecnológicas que usas actualmente.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Proteger el secreto profesional y datos de clientes en el despacho',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Seguridad en la gestión de datos de clientes en Customer Success',
                'description'      => 'Maneja con seguridad los datos de clientes en el día a día del Customer Success: accesos a cuentas, grabaciones de llamadas, datos de uso del producto y comunicaciones. Establece protocolos que protejan la confidencialidad sin afectar la calidad del servicio.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un experto en Customer Success con formación en seguridad de la información y privacidad de datos. Tu objetivo es ayudarme a implementar prácticas de seguridad en el trabajo diario de un equipo de CS sin que ello penalice la velocidad de respuesta ni la experiencia del cliente.

**El perfil de riesgo único del Customer Success:**
Los equipos de CS tienen acceso a combinaciones de datos especialmente sensibles: datos de uso del producto (que pueden revelar información estratégica del negocio del cliente), grabaciones de conversaciones (que pueden contener información privilegiada), datos de contacto personales de múltiples interlocutores dentro del cliente, y a veces acceso técnico a las instancias o cuentas del cliente en la plataforma. Una brecha desde el equipo de CS puede impactar a decenas o cientos de cuentas simultáneamente.

**Framework de seguridad para CS:**

1. **Gestión segura del acceso a cuentas de clientes:**
   - Principio de mínimo acceso: ¿cuántos miembros del equipo necesitan acceso admin a cada cuenta?
   - Registro de accesos a cuentas de clientes: qué debe quedar documentado (quién, cuándo, para qué)
   - Proceso de solicitud y aprobación para accesos especiales (impersonation, acceso a datos de producción)
   - Gestión de accesos compartidos: cómo evitar el uso de credenciales genéricas del equipo

2. **Manejo de grabaciones de llamadas y transcripciones:**
   - Qué información avisar al cliente antes de grabar (consentimiento informado)
   - Dónde se almacenan las grabaciones y quién puede acceder a ellas
   - Criterios de retención: cuánto tiempo guardar las grabaciones y bajo qué justificación
   - Proceso de eliminación a petición del cliente
   - Riesgos del uso de herramientas de transcripción automática con IA (Otter, Fireflies, Fathom): ¿los datos de las llamadas van a entrenar modelos de terceros?

3. **Comunicaciones seguras con clientes:**
   - Qué información puede compartirse por email vs. qué requiere canales cifrados
   - Política para el uso de Slack Connect, Teams o canales compartidos con clientes: qué datos son apropiados compartir
   - Gestión de cuentas de email compartidas del equipo (support@, cs@)
   - Protocolo de verificación de identidad antes de compartir información sensible de la cuenta

4. **Datos de uso y analytics del cliente:**
   - Qué datos de uso pueden compartirse con el cliente sobre su propio uso vs. datos que no pueden salir (benchmarks anónimos de la base de clientes)
   - Cómo usar datos de uso para personalizar el servicio sin violar la privacidad de los usuarios finales del cliente
   - Restricciones al compartir datos de un cliente con otro (aunque sea anonimizado)
   - Informes de uso: cómo enviarlos de forma segura cuando contienen información estratégica

5. **Gestión de la información confidencial del cliente:**
   - Qué hacer cuando el cliente comparte información confidencial de su negocio durante una llamada de onboarding o QBR
   - Cómo registrar notas internas de forma que no constituyan un activo de riesgo si hay una brecha
   - Política de uso de información del cliente para casos de estudio o referencias (doble consentimiento)
   - NDA con clientes: cuándo es necesario y cómo gestionarlo

6. **Offboarding seguro de clientes:**
   - Qué datos deben eliminarse o devolverse al cliente cuando cancela
   - Proceso de revocación de accesos del cliente a herramientas internas (Slack Connect, portales de cliente)
   - Retención de información sobre el cliente tras la baja: qué es legítimo conservar y por cuánto tiempo
   - Gestión de las grabaciones de llamadas de clientes que han cancelado

**Entregables:**
- Guía rápida de seguridad para el equipo de CS (2 páginas, lenguaje operacional)
- Checklist de onboarding seguro de nuevo cliente
- Checklist de offboarding seguro de cliente
- Plantilla de cláusula de consentimiento de grabación para el inicio de llamadas
- Evaluación de las herramientas de IA de transcripción más usadas (tabla comparativa de privacidad)

Comparte tu stack tecnológico de CS y el tipo de clientes que manejas (empresa B2B o B2C, tamaño, sector) para personalizar las recomendaciones.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Gestionar datos de clientes con seguridad en equipos de CS',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Seguridad digital básica para freelancers: protege tu negocio y tus clientes',
                'description'      => 'Aprende las medidas de ciberseguridad esenciales para freelancers que trabajan con datos de clientes, manejan pagos online y operan desde distintos dispositivos y redes. Configura tu entorno de trabajo digital de forma segura sin necesidad de ser experto técnico.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un consultor de ciberseguridad especializado en pequeños negocios y trabajadores independientes. Tu objetivo es ayudarme a establecer una protección digital sólida como freelancer, usando herramientas accesibles y sin necesidad de conocimientos técnicos avanzados.

**Por qué los freelancers son un objetivo atractivo para los atacantes:**
Los freelancers combinan el peor de los mundos en términos de seguridad: manejan datos confidenciales de clientes (contratos, creatividades, datos financieros, código fuente), operan sin departamento de IT ni políticas de seguridad corporativas, trabajan desde múltiples redes (casa, cafeterías, coworking), y suelen usar los mismos dispositivos para uso personal y profesional. Además, una brecha de seguridad puede destruir la reputación construida durante años en cuestión de horas.

**Plan de seguridad digital para freelancers:**

1. **Gestión segura de contraseñas:**
   - Por qué reutilizar contraseñas es el mayor error de seguridad que puedes cometer
   - Cómo elegir y configurar un gestor de contraseñas (recomendaciones: Bitwarden gratuito, 1Password, Dashlane)
   - Contraseñas maestras: cómo crear una que sea segura y memorable
   - Activación de autenticación en dos factores (2FA) en las plataformas más críticas: banco, email, plataformas de freelance, herramientas de trabajo

2. **Separación del entorno personal y profesional:**
   - Cuentas de email: por qué usar una cuenta específica para el negocio (dominio propio vs. Gmail gratuito)
   - Separación de perfiles del navegador: perfil de trabajo vs. personal
   - Si usas un solo dispositivo: cómo minimizar el riesgo de contaminación cruzada
   - Cuando tener dos dispositivos distintos empieza a tener sentido (criterios de valoración)

3. **Trabajo seguro desde distintas redes:**
   - Riesgos de las redes WiFi públicas y cómo mitigarlos
   - VPN: qué es, cuándo necesitas una y cuál elegir (gratuitas fiables vs. de pago)
   - Configuración básica de seguridad del router de casa
   - Hotspot del móvil como alternativa más segura en desplazamientos

4. **Protección de los datos de tus clientes:**
   - Dónde almacenar los archivos de clientes: comparativa de seguridad entre Google Drive, Dropbox, iCloud, OneDrive
   - Cómo compartir archivos de forma segura: links con contraseña, expiración, sin permitir descarga si es solo revisión
   - Política de borrado de datos de clientes al terminar el proyecto (y qué conviene conservar)
   - Backups: la regla 3-2-1 adaptada al freelancer (una copia local, una en nube, y no mezclarlas)

5. **Protección frente a las amenazas más comunes:**
   - Phishing en plataformas de freelance: cómo reconocer propuestas falsas de trabajo diseñadas para robar información
   - Malware a través de archivos de clientes: precauciones al abrir documentos de desconocidos
   - Fraude en pagos: cómo verificar que un cliente es legítimo antes de empezar a trabajar
   - Suplantación de identidad: cómo proteger tu marca personal y presencia online

6. **Obligaciones legales del freelancer como responsable de datos:**
   - Si tienes clientes en la UE, el RGPD te aplica: qué significa en la práctica para un freelancer
   - Registro de actividades de tratamiento: versión simplificada para autónomos
   - Qué incluir en tu contrato de servicios sobre protección de datos del cliente
   - Seguros de ciberresponsabilidad: cuándo empiezan a tener sentido económico

7. **Plan de acción ante un incidente:**
   - ¿Qué hago si creo que me han hackeado la cuenta de email?
   - ¿Qué hago si pierdo o me roban el portátil con datos de clientes?
   - ¿Tengo obligación de avisar a mis clientes? ¿Y a la AEPD?
   - Cómo comunicar un incidente de seguridad a un cliente manteniendo la confianza

**Entregables:**
- Plan de seguridad personal priorizado (semana 1, mes 1, trimestre 1) con acciones concretas
- Lista de herramientas gratuitas o de bajo coste recomendadas para cada área
- Cláusula de protección de datos para tu contrato de servicios (texto listo para usar)
- Checklist de seguridad para inicio de proyecto con nuevo cliente

Cuéntame en qué sector trabajas como freelancer, qué tipo de datos manejas habitualmente y cuáles son tus herramientas de trabajo principales para personalizar el plan.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Establecer seguridad digital esencial para el negocio freelance',
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
