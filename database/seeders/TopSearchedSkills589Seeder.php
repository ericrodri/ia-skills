<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills589Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing digital para notarías con IA',
                'description'      => 'Crea una estrategia de contenido y captación de clientes adaptada al sector notarial, respetando la normativa deontológica y diferenciando la notaría en entornos digitales.',
                'prompt_content'   => <<<'EOT'
Actúa como consultor de marketing digital especializado en servicios legales y sector notarial. Necesito desarrollar una estrategia de marketing digital completa para una notaría que quiere aumentar su visibilidad online y captar nuevos clientes, respetando en todo momento la normativa deontológica del Consejo General del Notariado.

Contexto de la notaría:
- Nombre: [NOMBRE DE LA NOTARÍA]
- Ubicación: [CIUDAD, COMUNIDAD AUTÓNOMA]
- Especialidades: [compraventa inmobiliaria / herencias / sociedades / poderes notariales / otros]
- Años de actividad: [AÑOS]
- Competencia local: [número aproximado de notarías en el área]
- Presupuesto mensual estimado para marketing: [PRESUPUESTO]

Tarea principal: Desarrolla una estrategia de marketing digital para los próximos 6 meses que incluya:

1. ANÁLISIS DE POSICIONAMIENTO
- Identifica los servicios notariales con mayor demanda de búsqueda local (escrituras, testamentos, herencias, poderes, actas, capitulaciones)
- Define el público objetivo por cada servicio: particulares compradores de vivienda, empresas, familias con gestión patrimonial, expatriados
- Analiza cómo diferenciarse de otras notarías sin incurrir en publicidad comparativa prohibida

2. ESTRATEGIA DE CONTENIDO Y SEO LOCAL
- Propón 20 ideas de artículos informativos para el blog de la notaría sobre trámites notariales frecuentes
- Define palabras clave locales prioritarias (ej. "notaría en [ciudad] compraventa vivienda")
- Diseña una guía de Google Business Profile: categorías, horarios, fotos, respuesta a reseñas
- Sugiere una estrategia de reseñas éticas para generar confianza sin incentivarlas indebidamente

3. REDES SOCIALES Y COMUNICACIÓN DIGITAL
- Selecciona las plataformas más adecuadas (LinkedIn para empresas, Facebook para particulares mayores, Instagram para públicos jóvenes)
- Crea un plan editorial mensual con 16 publicaciones: tips legales, explicaciones de trámites, preguntas frecuentes, fechas relevantes (declaración de renta, fin del plazo de herencias)
- Define el tono de comunicación: cercano pero profesional, divulgativo pero riguroso

4. CAPTACIÓN Y AUTOMATIZACIÓN
- Propón un embudo de captación digital: desde búsqueda en Google → landing page → formulario de cita previa → confirmación automática por email
- Diseña la estructura de una landing page para el servicio estrella elegido
- Sugiere integraciones con herramientas de agenda online compatibles con el flujo de trabajo notarial

5. MÉTRICAS Y SEGUIMIENTO
- Define los KPIs clave: visitas web, solicitudes de cita, tasa de conversión por servicio, posición SEO local
- Crea un cuadro de mando mensual sencillo para que el personal de la notaría pueda seguir la evolución

6. CUMPLIMIENTO DEONTOLÓGICO
- Lista las restricciones publicitarias aplicables a notarías según el Reglamento Notarial
- Propón un checklist de revisión para asegurarse de que cada pieza de contenido cumple con la normativa antes de publicarse

Entrega el resultado en formato estructurado con apartados claramente diferenciados. Incluye ejemplos concretos de titulares, textos de publicaciones y copy para la landing page. El tono debe transmitir confianza, seriedad y cercanía al ciudadano.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estrategia de marketing digital para notarías respetando normativa deontológica',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Automatización de documentos notariales con IA',
                'description'      => 'Diseña un sistema de generación y revisión automática de documentos notariales estándar usando IA, reduciendo tiempos de redacción y minimizando errores formales.',
                'prompt_content'   => <<<'EOT'
Actúa como arquitecto de software especializado en legaltech y automatización documental para el sector notarial. Necesito diseñar e implementar un sistema de automatización de documentos notariales que reduzca los tiempos de redacción, minimice errores formales y mejore la eficiencia del despacho.

Contexto del proyecto:
- Tipo de despacho: [notaría individual / asociación de notarías / gestoría con convenio notarial]
- Volumen de escrituras mensuales: [NÚMERO]
- Documentos más frecuentes: [compraventas / herencias / poderes / sociedades / arrendamientos / otros]
- Stack tecnológico actual: [sistema de gestión notarial usado, ej. Signo, Nota, u otro]
- Integraciones necesarias: [Catastro, Registro de la Propiedad, AEAT, Banco de España]
- Equipo técnico disponible: [desarrolladores internos / proveedor externo]

Objetivo: Diseña un sistema de automatización documental con las siguientes capacidades:

1. ARQUITECTURA DEL SISTEMA
- Define los componentes principales: motor de plantillas, sistema de variables, validador de datos, generador de borradores, módulo de revisión
- Propón la arquitectura técnica: microservicios vs monolito, APIs REST o GraphQL, almacenamiento de documentos
- Explica cómo integrar el sistema con el software notarial existente mediante APIs o conectores
- Diseña el modelo de datos para almacenar plantillas, variables de escritura y metadatos

2. SISTEMA DE PLANTILLAS INTELIGENTES
- Diseña un motor de plantillas que permita escrituras con lógica condicional (ej. si hay hipoteca incluir cláusula de subrogación, si hay menores incluir tutor)
- Propón el formato de definición de variables: tipos de dato, validaciones, dependencias entre campos
- Explica cómo manejar las actualizaciones normativas (cambios en modelos de escritura aprobados por el Notariado)
- Diseña un sistema de versionado de plantillas para mantener historial de cambios

3. EXTRACCIÓN E INTEGRACIÓN DE DATOS
- Describe cómo conectar con el Catastro para obtener datos del inmueble automáticamente
- Propón la integración con el Registro de la Propiedad Mercantil para datos de sociedades
- Diseña el flujo de extracción de datos del DNI/NIE mediante OCR para rellenar automáticamente datos del compareciente
- Explica cómo validar datos de NIF/CIF con la AEAT antes de incluirlos en escritura

4. MÓDULO DE REVISIÓN Y CONTROL DE CALIDAD
- Diseña un validador que compruebe la coherencia interna del documento antes de presentarlo al notario
- Propón un sistema de alertas para detectar: fechas inconsistentes, importes sin cuadrar, partes sin identificar correctamente
- Crea un checklist automatizado de requisitos formales por tipo de escritura
- Explica cómo implementar un diff visual entre borrador generado y versión corregida por el notario para mejorar las plantillas

5. SEGURIDAD Y CUMPLIMIENTO
- Describe las medidas de seguridad necesarias: cifrado en reposo y en tránsito, control de acceso por rol
- Explica cómo cumplir con el RGPD en el tratamiento de datos personales de los comparecientes
- Propón un sistema de auditoría con trazabilidad completa de quién accedió y modificó cada documento
- Diseña la política de retención y borrado seguro de datos

6. PLAN DE IMPLEMENTACIÓN
- Define las fases de despliegue: piloto con un tipo de escritura, validación, extensión a más tipologías
- Propón métricas de éxito: tiempo medio de generación de borrador, tasa de errores detectados, satisfacción del equipo
- Estima el esfuerzo de desarrollo en semanas por componente

Incluye ejemplos de código en Python o JavaScript para los componentes clave, y diagramas en texto ASCII para la arquitectura propuesta.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Sistema de automatización y generación de documentos notariales',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de interfaces para sistemas de gestión notarial',
                'description'      => 'Diseña la experiencia de usuario y las interfaces de un sistema de gestión de escrituras notariales, priorizando eficiencia, claridad y cumplimiento normativo.',
                'prompt_content'   => <<<'EOT'
Actúa como diseñador UX/UI especializado en software legal y gestión documental para profesionales. Necesito diseñar la interfaz de usuario de un sistema de gestión notarial que usen tanto el personal administrativo como los propios notarios para gestionar escrituras, comparecientes y agenda.

Contexto del proyecto:
- Usuarios principales: [notario/a / oficial notarial / administrativo/a]
- Tareas más frecuentes: [alta de comparecientes, redacción de escrituras, gestión de agenda, archivo de protocolos]
- Dispositivos: [desktop principalmente / tablet ocasional]
- Sistema actual: [sistema heredado a sustituir / nuevo desarrollo desde cero]
- Volumen de operaciones diarias: [NÚMERO de escrituras/actos al día]
- Requisitos de accesibilidad: [WCAG 2.1 AA / sin requisito especial]

Objetivo: Diseña la arquitectura de información y los flujos de pantallas principales del sistema:

1. ARQUITECTURA DE INFORMACIÓN Y NAVEGACIÓN
- Define la estructura de menús y módulos principales: protocolo, comparecientes, agenda, facturación, informes
- Propón una jerarquía de acceso por roles: notario (acceso total), oficial (redacción y gestión), administrativo (agenda y facturación)
- Diseña el sistema de navegación: menú lateral persistente, breadcrumbs, accesos rápidos a acciones frecuentes
- Crea el mapa de pantallas completo con relaciones entre vistas

2. FLUJO PRINCIPAL: ALTA DE NUEVA ESCRITURA
- Diseña paso a paso el formulario de alta de escritura: tipo de acto, comparecientes, datos del objeto (inmueble, sociedad, etc.), clausulado
- Propón un asistente guiado (wizard) para tipos de escritura complejos con validaciones en cada paso
- Diseña la pantalla de selección o alta de comparecientes con búsqueda predictiva y validación de documentos
- Crea el panel de edición del texto de la escritura con toolbar notarial (insertar cláusula estándar, insertar datos de compareciente, numeración de folios)

3. DASHBOARD Y VISIÓN GENERAL
- Diseña el dashboard diario: escrituras del día, comparecientes pendientes de citar, alertas de plazos (ej. herencias a punto de prescribir)
- Propón widgets de productividad: escrituras firmadas esta semana, ingresos del mes, número de comparecientes atendidos
- Crea una vista de agenda integrada con el protocolo: al hacer clic en un acto de la agenda, acceder directamente a la escritura

4. BÚSQUEDA Y ARCHIVO
- Diseña un buscador avanzado del protocolo: por número de protocolo, fecha, compareciente, tipo de acto, NIF
- Propón la vista de resultados con filtros laterales y ordenación múltiple
- Diseña la pantalla de detalle de escritura archivada con acciones disponibles: imprimir, exportar PDF, añadir nota, solicitar copia

5. COMPONENTES DE DISEÑO
- Define la paleta de colores apropiada para software profesional-legal: sobriedad, contraste alto, diferenciación de estados (borrador, firmado, archivado)
- Propón la tipografía: fuente principal para UI, fuente monoespaciada para texto de escrituras
- Diseña los estados de los elementos: escritura en borrador (gris), pendiente de firma (naranja), firmada (verde), anulada (rojo)
- Crea los componentes de feedback: confirmaciones, alertas de error, indicadores de guardado automático

6. ESPECIFICACIONES PARA DESARROLLO
- Redacta las especificaciones funcionales de las 3 pantallas más críticas en formato de historias de usuario
- Propón las métricas de usabilidad a medir durante pruebas con usuarios reales: tiempo en tarea, tasa de error, satisfacción (SUS)
- Lista las pruebas de usabilidad recomendadas antes del lanzamiento

Incluye wireframes en ASCII art o descripción detallada de cada pantalla, con anotaciones sobre comportamiento e interacciones clave.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'UX/UI para software de gestión de escrituras y protocolos notariales',
                'vote_score'       => 22,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Captación de clientes para servicios notariales con IA',
                'description'      => 'Desarrolla un sistema de captación y seguimiento de clientes potenciales para notarías, con scripts de atención, plantillas de comunicación y procesos de cualificación.',
                'prompt_content'   => <<<'EOT'
Actúa como consultor de ventas y desarrollo de negocio especializado en servicios profesionales del sector legal. Necesito diseñar un proceso completo de captación y cualificación de clientes potenciales para una notaría, respetando las restricciones deontológicas aplicables y maximizando la conversión de consultas en citas confirmadas.

Contexto de la notaría:
- Servicios principales: [compraventas inmobiliarias / herencias / constitución de sociedades / poderes / otros]
- Canales de entrada actuales: [llamada telefónica / formulario web / presencial / derivación de gestorías]
- Volumen de consultas mensuales: [NÚMERO]
- Tasa de conversión actual (consulta → cita): [PORCENTAJE]
- Personal que atiende consultas: [administrativo/a / oficial notarial]
- Objetivo de mejora: [aumentar conversión / reducir tiempo de respuesta / mejorar experiencia]

Objetivo: Diseña un sistema de captación y seguimiento con los siguientes elementos:

1. MAPA DE VIAJE DEL CLIENTE NOTARIAL
- Define las etapas del journey del cliente: toma de conciencia del trámite necesario → búsqueda de notaría → primera consulta → solicitud de cita → acudir a la firma → post-servicio
- Identifica los puntos de fricción más comunes en cada etapa y propón cómo eliminarlos
- Diseña un mapa de empatía para los tres perfiles de cliente más frecuentes: comprador de vivienda por primera vez, heredero en proceso de aceptación, emprendedor que constituye sociedad

2. GUIÓN DE ATENCIÓN TELEFÓNICA
- Crea un guión detallado para la recepción de llamadas de consulta sobre compraventa de vivienda
- Incluye las preguntas clave de cualificación: ¿ya tiene firmado el contrato de arras? ¿tiene financiación hipotecaria? ¿cuándo quieren firmar?
- Diseña respuestas a las objeciones más frecuentes: precio de los honorarios, disponibilidad de fechas, dudas sobre qué documentos aportar
- Propón el cierre para agendar la cita: confirmación de datos, envío de confirmación por email/WhatsApp, recordatorio previo

3. PLANTILLAS DE COMUNICACIÓN ESCRITA
- Redacta 5 plantillas de email para las situaciones más frecuentes: confirmación de cita, recordatorio 48 horas antes, solicitud de documentación previa, seguimiento post-consulta sin cita, agradecimiento tras escritura firmada
- Crea 3 plantillas de mensaje de WhatsApp Business para: confirmación de cita, recordatorio el día anterior, información de documentación necesaria
- Diseña un FAQ respondible por chatbot para el horario fuera de oficina: preguntas sobre honorarios, tiempos, documentación necesaria

4. PROCESO DE CUALIFICACIÓN DE CONSULTAS
- Define los criterios de cualificación: urgencia del trámite, estado de preparación (documentación disponible), decisor real (¿consulta para sí mismo o para otro?)
- Diseña una hoja de recogida de datos estándar para que el personal registre cada consulta y su seguimiento
- Propón un flujo de seguimiento para consultas no convertidas: llamada de seguimiento a los 7 días, email informativo al mes
- Crea un sistema de clasificación de consultas por prioridad y probabilidad de conversión

5. MÉTRICAS Y GESTIÓN DE PIPELINE
- Define los KPIs de captación: consultas recibidas, tasa de conversión, tiempo medio de respuesta, servicios más solicitados, ticket medio
- Propón una herramienta sencilla de seguimiento (hoja de cálculo o CRM básico) adaptada a la realidad operativa de una notaría
- Diseña un informe mensual de 5 minutos que el responsable pueda revisar para tomar decisiones

6. CUMPLIMIENTO DEONTOLÓGICO EN CAPTACIÓN
- Lista las restricciones aplicables: prohibición de captación activa, limitaciones en descuentos, restricciones en publicidad
- Define qué acciones de captación están permitidas y cuáles deben evitarse
- Propón cómo posicionar los servicios como información al ciudadano, no como venta agresiva

Entrega el resultado con todos los scripts y plantillas listos para usar, con marcadores [entre corchetes] para personalizar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Sistema de captación y cualificación de clientes para notarías',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Hoja de ruta de producto para plataformas notariales digitales',
                'description'      => 'Define la estrategia y hoja de ruta de una plataforma digital para el sector notarial, priorizando funcionalidades según impacto en usuarios y cumplimiento normativo.',
                'prompt_content'   => <<<'EOT'
Actúa como product manager con experiencia en legaltech y servicios notariales digitales. Necesito definir la estrategia de producto y la hoja de ruta para una plataforma digital orientada a modernizar y digitalizar los procesos de una notaría o de una red de notarías.

Contexto del producto:
- Tipo de plataforma: [SaaS para notarías individuales / plataforma B2B para grupos notariales / portal ciudadano de cita previa y gestión de trámites]
- Estado actual: [idea / MVP / producto en producción con X usuarios]
- Usuarios objetivo: [notarios y su equipo / ciudadanos que necesitan trámites / gestorías y promotoras como clientes B2B]
- Principales dolores a resolver: [DESCRIBIR los 2-3 dolores principales]
- Competencia existente: [soluciones actuales del mercado si las conoces]
- Restricciones normativas clave: [Reglamento Notarial, RGPD, normativa de firma electrónica]

Objetivo: Desarrolla una estrategia de producto completa con los siguientes entregables:

1. VISIÓN Y PROPUESTA DE VALOR
- Redacta la visión del producto en 2 frases: qué hace, para quién, qué cambia
- Define la propuesta de valor diferencial frente a soluciones genéricas de gestión documental
- Identifica los 3 momentos clave donde el producto genera más valor para el usuario notarial
- Establece los principios de diseño de producto que guiarán las decisiones futuras

2. MAPA DE USUARIOS Y NECESIDADES
- Define las personas de usuario con sus objetivos, frustraciones y comportamientos: el notario titular, el oficial, el administrativo, el ciudadano que tramita
- Mapea los jobs-to-be-done principales por perfil: qué tarea funcional, emocional y social intenta resolver
- Identifica las necesidades no atendidas por las soluciones actuales del mercado notarial
- Prioriza necesidades según frecuencia de uso y criticidad del proceso

3. FUNCIONALIDADES Y PRIORIZACIÓN
- Lista exhaustiva de funcionalidades posibles: gestión de protocolo, agenda, firma electrónica, notificaciones, integración con registros, facturación, archivo digital
- Aplica una matriz de priorización (impacto vs esfuerzo) para las 20 funcionalidades más relevantes
- Define el MVP: qué 5-7 funcionalidades son imprescindibles para el primer lanzamiento
- Propón las fases de expansión del producto: qué añadir en v1.1, v2.0, y el producto maduro a 3 años

4. HOJA DE RUTA A 12 MESES
- Divide el año en 4 trimestres con objetivos, funcionalidades y métricas de éxito por trimestre
- Define las dependencias entre funcionalidades: qué debe estar antes de qué
- Identifica los riesgos técnicos y normativos que podrían afectar a la hoja de ruta
- Propón puntos de revisión y criterios para ajustar la hoja de ruta según aprendizajes

5. MÉTRICAS DE PRODUCTO Y NEGOCIO
- Define los OKRs del primer año: objetivos cualitativos y resultados clave medibles
- Propón las métricas de adopción: tiempo hasta primer valor (time-to-value), retención a 30/60/90 días, NPS
- Diseña el funnel de activación: desde registro hasta primera escritura creada en el sistema
- Establece los umbrales de alerta que indicarían que el producto no está funcionando

6. GO-TO-MARKET Y MODELO DE NEGOCIO
- Propón el modelo de precios más adecuado: suscripción mensual por notaría, por usuario, por volumen de escrituras, o tarifa plana
- Define la estrategia de entrada al mercado: ¿directo a notarías individuales, colegios notariales, o integradores?
- Identifica los aliados estratégicos clave: colegios notariales, gestorías, promotoras, bancos
- Diseña la propuesta de piloto inicial para validar el producto con 3-5 notarías early adopters

Entrega la hoja de ruta en formato de tabla por trimestres y los OKRs en formato estándar con objetivos y key results claramente diferenciados.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Estrategia y hoja de ruta de producto para plataformas legaltech notariales',
                'vote_score'       => 26,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de equipos en despachos notariales con IA',
                'description'      => 'Optimiza la gestión del equipo humano en una notaría: planificación de turnos, evaluación del desempeño, formación continua y retención del talento especializado.',
                'prompt_content'   => <<<'EOT'
Actúa como director de recursos humanos con experiencia en despachos profesionales jurídicos y notariales. Necesito desarrollar un sistema completo de gestión de personas para una notaría que quiere profesionalizar sus procesos de RRHH, mejorar la retención del talento y garantizar la formación continua del equipo.

Contexto de la notaría:
- Tamaño del equipo: [NÚMERO de personas] — notario/a titular, oficiales notariales, administrativos
- Antigüedad media del equipo: [AÑOS]
- Principal reto de RRHH actual: [alta rotación / dificultad de encontrar oficiales cualificados / falta de procesos formales / gestión del conocimiento]
- Convenio colectivo aplicable: [Empleados de Notarías o similar]
- Horario de la notaría: [HORARIO habitual y si hay guardias]
- Objetivos a 12 meses: [DESCRIBIR objetivos de equipo]

Desarrolla un sistema de gestión de personas con los siguientes módulos:

1. ESTRUCTURA ORGANIZATIVA Y ROLES
- Define las funciones y responsabilidades de cada rol: oficial notarial (redacción, coordinación de firmas, relación con registros), administrativo (atención al público, agenda, archivo), auxiliar (gestión documental básica)
- Propón un organigrama funcional con líneas de reporte y sustitución en ausencias
- Diseña una matriz de competencias por rol: técnicas (conocimiento jurídico-notarial, software), transversales (atención al cliente, organización, discreción)
- Identifica los perfiles más difíciles de cubrir en el mercado y las estrategias para retenerlos

2. SELECCIÓN Y ACOGIDA
- Crea un proceso de selección para oficial notarial: perfil buscado, fuentes de candidatos (opositoría notarial, gestorías, despachos jurídicos), prueba técnica práctica, entrevista por competencias
- Diseña un plan de onboarding de 90 días: semana 1 (orientación y sistemas), mes 1 (acompañamiento en escrituras frecuentes), mes 3 (autonomía supervisada)
- Propón un checklist de incorporación: accesos a sistemas, protocolos de confidencialidad firmados, formación en normativa de protección de datos, presentación al equipo

3. PLANIFICACIÓN DE TURNOS Y CARGAS DE TRABAJO
- Diseña un sistema de planificación de agenda que equilibre la carga entre oficiales según tipología de escritura y complejidad
- Propón indicadores de carga de trabajo: escrituras por oficial por semana, tiempo medio de preparación por tipo de acto
- Crea un protocolo de gestión de picos de trabajo (fin de año, campañas de compraventa, períodos de herencias)
- Define los criterios para decidir cuándo es necesario ampliar el equipo o externalizar funciones

4. EVALUACIÓN DEL DESEMPEÑO
- Diseña un sistema de evaluación semestral adaptado al trabajo notarial: calidad de redacción, ausencia de errores formales, atención al compareciente, puntualidad, trabajo en equipo
- Propón un proceso de evaluación 360º adaptado al tamaño de la notaría
- Crea plantillas de ficha de evaluación por rol con criterios objetivos y subjetivos
- Define el proceso de retroalimentación: reunión de feedback, plan de mejora si aplica, reconocimiento de alto desempeño

5. FORMACIÓN Y DESARROLLO PROFESIONAL
- Diseña un plan de formación anual: actualización normativa (reformas del Código Civil, nuevas figuras societarias), competencias digitales (firma electrónica, sistemas de gestión), habilidades blandas (atención al cliente complejo, gestión del estrés)
- Propón fuentes de formación: Colegio Notarial, colegios de gestores, formación online en plataformas jurídicas
- Crea un sistema de gestión del conocimiento interno: protocolo para documentar resoluciones de casos complejos, base de conocimiento de cláusulas estándar aprobadas, manual de procedimientos actualizados

6. RETENCIÓN Y CLIMA LABORAL
- Propón una estrategia de retención del talento especializado: revisión salarial anual vinculada a resultados, flexibilidad horaria donde la actividad lo permita, reconocimiento de antigüedad
- Diseña una encuesta de clima laboral semestral adaptada al entorno notarial
- Crea un protocolo de offboarding que garantice la transferencia de conocimiento antes de la salida de cualquier miembro del equipo

Entrega todos los documentos con formato editable, usando tablas donde sea conveniente para facilitar su uso real por el personal de la notaría.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Sistema de RRHH y gestión del talento para despachos notariales',
                'vote_score'       => 20,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de operaciones notariales con IA',
                'description'      => 'Analiza la rentabilidad de los servicios notariales, optimiza la estructura de honorarios y diseña informes financieros adaptados a la realidad del sector.',
                'prompt_content'   => <<<'EOT'
Actúa como analista financiero con experiencia en despachos profesionales y sector notarial. Necesito desarrollar un sistema de análisis financiero completo para una notaría que permita controlar la rentabilidad por servicio, optimizar la estructura de honorarios y proyectar el crecimiento del negocio.

Contexto financiero de la notaría:
- Facturación anual aproximada: [IMPORTE]
- Número de escrituras anuales: [NÚMERO]
- Distribución de servicios por volumen: [compraventas X% / herencias Y% / poderes Z% / otros W%]
- Costes fijos principales: [alquiler local / personal / sistemas / colegio notarial / seguros]
- Situación fiscal: [régimen de estimación directa / módulos / sociedad profesional]
- Objetivo financiero a 3 años: [aumentar facturación / mejorar margen / reducir dependencia de un tipo de escritura]

Desarrolla el análisis financiero con los siguientes componentes:

1. ESTRUCTURA DE INGRESOS Y RENTABILIDAD POR SERVICIO
- Diseña una tabla de análisis de rentabilidad por tipo de acto notarial: ingresos medios por acto, tiempo medio de preparación y firma, coste de personal asignado, margen por acto
- Identifica los servicios más rentables (alto ingreso, bajo tiempo) y los menos rentables
- Propón estrategias para mejorar el mix de servicios: cómo captar más operaciones de alta rentabilidad
- Analiza la estacionalidad de los ingresos y cómo suavizar los picos y valles

2. ESTRUCTURA DE COSTES Y PUNTO DE EQUILIBRIO
- Clasifica todos los costes de la notaría: personal (fijos y variables), instalaciones, tecnología, formación, colegios profesionales, seguros, marketing
- Calcula el punto de equilibrio mensual: cuántas escrituras mínimas son necesarias para cubrir todos los costes fijos
- Propón un análisis de sensibilidad: ¿qué pasa si el volumen baja un 20%? ¿y si sube un 30%?
- Identifica los costes que pueden optimizarse sin reducir calidad del servicio

3. SISTEMA DE HONORARIOS Y PRECIO
- Explica la estructura del arancel notarial y qué margen de flexibilidad existe para servicios complementarios no arancelados (asesoramiento previo, traducciones, gestiones adicionales)
- Diseña un calculador de presupuesto estimado por tipo de operación que pueda ofrecerse al cliente antes de la cita
- Propón servicios de valor añadido facturables por separado del arancel: asesoramiento fiscal previo, gestión de inscripción registral, servicio urgente
- Analiza cómo comparar honorarios con la competencia de forma ética dentro del marco legal

4. GESTIÓN DE TESORERÍA Y COBRO
- Diseña un proceso de gestión de cobros: momento del cobro (antes o después de la firma), medios de pago admitidos, política para impagos
- Propón un sistema de seguimiento de cuentas a cobrar: escrituras pendientes de liquidación, suplidos por recuperar de clientes
- Crea proyecciones de tesorería a 3 y 6 meses basadas en el pipeline de escrituras previstas
- Diseña alertas de tesorería: cuándo la caja disponible baja de un umbral de seguridad

5. CUADRO DE MANDO FINANCIERO
- Define los KPIs financieros para seguimiento mensual: facturación total, escrituras por tipo, ticket medio, coste por escritura, margen neto, días de cobro medio
- Diseña un dashboard financiero mensual de una página que el notario pueda revisar en 10 minutos
- Propón la comparativa histórica más relevante: mes actual vs mismo mes del año anterior, acumulado año vs objetivo anual
- Crea un sistema de alertas automáticas: si la facturación cae más de un X% respecto al mes anterior, notificar

6. PLANIFICACIÓN Y PROYECCIONES
- Diseña un modelo de proyección financiera a 3 años con escenarios: conservador, base y optimista
- Propón los indicadores que deben mejorar para alcanzar los objetivos a 3 años
- Analiza la viabilidad de inversiones: nuevo sistema de gestión notarial, ampliación del equipo, segundo local
- Define los criterios financieros para decidir si abrir una segunda notaría o asociarse con otra

Entrega todas las tablas en formato listo para trasladar a una hoja de cálculo, con fórmulas indicadas donde aplique.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Análisis financiero, rentabilidad y cuadro de mando para notarías',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Revisión de escrituras notariales con IA',
                'description'      => 'Asiste al equipo legal en la revisión sistemática de escrituras notariales para detectar cláusulas problemáticas, inconsistencias formales y riesgos jurídicos antes de la firma.',
                'prompt_content'   => <<<'EOT'
Actúa como abogado especializado en derecho notarial y registral con amplia experiencia en revisión de escrituras de compraventa, herencia y constitución de sociedades. Necesito desarrollar un protocolo y sistema de revisión de documentos notariales que permita detectar errores formales, cláusulas problemáticas y riesgos jurídicos antes de que el cliente acuda a la firma.

Contexto de revisión:
- Tipo de escritura a revisar: [compraventa de inmueble / herencia / constitución de sociedad / poder notarial / otro]
- Partes intervinientes: [identificar vendedor, comprador, herederos, socios, poderdante, etc.]
- Situación especial si aplica: [hipoteca, menores, no residentes, bienes gananciales, usufructo, etc.]
- Objetivo de la revisión: [revisión pre-firma por encargo del comprador / revisión interna del despacho / due diligence inmobiliaria]

Desarrolla el protocolo de revisión con los siguientes componentes:

1. CHECKLIST DE REVISIÓN POR TIPO DE ESCRITURA
Para escritura de compraventa inmobiliaria, verifica:
- Identificación correcta de las partes: DNI/NIF vigentes, representación acreditada si es persona jurídica, poder suficiente si actúa apoderado
- Descripción registral del inmueble: referencia catastral, linderos, superficie, concordancia con Registro de la Propiedad
- Situación de cargas: cargas que se cancelan, cargas que se subrogan, declaración de libertad de cargas
- Precio y forma de pago: desglose de cantidades ya satisfechas (arras, señal), cantidad pendiente en el acto, medio de pago que acredite trazabilidad
- Gastos e impuestos: distribución pactada de gastos notariales y registrales, quién asume el ITP o IVA según caso
- Cláusulas especiales: primera ocupación, declaración de obra nueva, división horizontal, aprovechamiento por turnos

2. DETECCIÓN DE CLÁUSULAS PROBLEMÁTICAS
- Cláusulas abusivas frecuentes en compraventas: penalizaciones desproporcionadas, limitaciones de responsabilidad del vendedor, plazos de reclamación reducidos
- Inconsistencias entre el contrato de arras previo y la escritura de compraventa
- Discrepancias entre precio declarado en escritura y precio real (problemática fiscal y penal)
- Cláusulas hipotecarias que deben revisarse según la Ley de Contratos de Crédito Inmobiliario: IRPH, suelo, vencimiento anticipado
- Representaciones y garantías del vendedor sobre el estado del inmueble: deudas de comunidad, IBI pendiente, suministros al corriente

3. ANÁLISIS DE RIESGOS REGISTRALES
- Comprueba si el transmitente es el titular registral o hay alguna discordancia
- Identifica posibles cargas ocultas: embargos, hipotecas no canceladas, anotaciones preventivas
- Verifica el historial de transmisiones para detectar operaciones sospechosas de blanqueo
- Alerta sobre situaciones de doble venta o venta de cosa ajena

4. REVISIÓN DE CAPACIDAD Y REPRESENTACIÓN
- Verifica la capacidad para contratar de cada parte: mayores de edad, no incapacitados, no declarados en concurso
- Comprueba la validez y suficiencia del poder notarial cuando actúa un apoderado
- Analiza la representación de personas jurídicas: vigencia de la sociedad, cargo del representante inscrito, límites de sus facultades
- Revisa la situación de bienes gananciales: necesidad de consentimiento del cónyuge

5. INFORME DE REVISIÓN
- Crea la estructura del informe de revisión: resumen ejecutivo, aspectos positivos, alertas de riesgo alto/medio/bajo, recomendaciones
- Diseña una matriz de semáforo para clasificar los hallazgos: verde (sin incidencias), amarillo (aspectos a aclarar), rojo (bloqueante para la firma)
- Propón el texto estándar de las recomendaciones más frecuentes para reutilizar en múltiples revisiones
- Define el proceso de comunicación con el cliente: cómo explicar los riesgos encontrados de forma comprensible sin alarmar innecesariamente

6. CONTROL DE CALIDAD DEL PROCESO
- Diseña el flujo de trabajo de revisión: quién hace la primera revisión, quién valida, quién firma el informe
- Establece los tiempos mínimos de revisión por tipo y complejidad de escritura
- Crea un registro de incidencias recurrentes para mejorar las plantillas de revisión futuras
- Define cuándo es necesario elevar la consulta a un especialista externo (derecho fiscal, urbanístico, mercantil)

Aplica el protocolo a la escritura proporcionada y entrega un informe estructurado con todos los hallazgos clasificados por nivel de riesgo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Revisión sistemática de escrituras notariales para detección de riesgos jurídicos',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al ciudadano en notarías con IA',
                'description'      => 'Mejora la experiencia del ciudadano que acude a una notaría con protocolos de atención, guías de trámites y comunicaciones que reduzcan la ansiedad ante el proceso notarial.',
                'prompt_content'   => <<<'EOT'
Actúa como especialista en experiencia de cliente y comunicación institucional con experiencia en entornos legales y notariales. Necesito diseñar un sistema completo de atención al ciudadano para una notaría que reduzca la ansiedad ante el proceso notarial, mejore la comprensión de los trámites y aumente la satisfacción general de las personas que acuden a la notaría.

Contexto de la notaría:
- Perfil de ciudadanos más frecuentes: [compradores de vivienda por primera vez / herederos / emprendedores / mayores para poderes / otros]
- Principal queja o fricción actual: [falta de información previa / esperas / lenguaje jurídico incomprensible / coste percibido como alto / otros]
- Canales de comunicación disponibles: [teléfono / email / WhatsApp / web / presencial]
- Objetivo de mejora: [reducir consultas repetitivas / mejorar valoraciones en Google / reducir errores de documentación aportada]

Desarrolla el sistema de atención con los siguientes componentes:

1. GUÍAS DE TRÁMITES EN LENGUAJE CIUDADANO
- Escribe una guía completa para el ciudadano sobre cómo prepararse para la firma de una escritura de compraventa: qué documentos llevar, qué pasará durante la cita, cuánto tiempo llevará, qué firmarán, qué recibirán al salir
- Crea una guía para herencias: qué es la escritura de aceptación de herencia, quién debe acudir, qué documentos del fallecido son necesarios, cuánto suele costar el proceso, cuánto tiempo lleva
- Diseña una guía para constitución de sociedad: qué información decidir antes de ir a la notaría, cuánto tarda la inscripción posterior, qué pasos siguen después
- Adapta el lenguaje: evita términos como "otorgante", "causante", "protocolización" sin explicarlos o sustitúyelos por equivalentes comprensibles

2. GESTIÓN DE EXPECTATIVAS Y REDUCCIÓN DE ANSIEDAD
- Diseña un email de bienvenida que se envíe al confirmar la cita: qué esperar del proceso, cómo prepararse, respuestas a las 5 preguntas más frecuentes
- Crea un video script de 2 minutos que explique qué ocurre durante una escritura de compraventa (para publicar en web o enviar por WhatsApp)
- Propón mensajes tranquilizadores para los momentos de mayor estrés: cuando el ciudadano llega con documentación incompleta, cuando hay retrasos, cuando no entiende alguna cláusula

3. PROTOCOLO DE ATENCIÓN PRESENCIAL
- Diseña el protocolo de recepción en sala de espera: saludo, estimación de tiempo de espera, oferta de agua/asiento, seguimiento si la espera se alarga
- Propón cómo presentar la escritura al ciudadano antes de firmar: tiempo recomendado para lectura, cómo explicar las cláusulas más relevantes en términos simples, cómo invitar a preguntar sin que se sienta ignorante
- Crea un protocolo para situaciones delicadas: cliente con dificultades para leer, cliente que no habla bien español, cliente que llega con nerviosismo extremo, cliente que quiere cancelar en el último momento

4. COMUNICACIONES POST-FIRMA
- Diseña el email de seguimiento post-firma: resumen de lo firmado, próximos pasos (inscripción en registro, liquidación de impuestos), contacto para dudas
- Crea una guía de "qué hacer después de la escritura" por tipo de trámite: compraventa, herencia, poder
- Propón un proceso de recogida de valoración del servicio: cuándo pedirla (24-48 horas después), qué preguntar, cómo gestionar valoraciones negativas

5. BASE DE CONOCIMIENTO PARA ATENCIÓN TELEFÓNICA
- Crea respuestas estándar para las 20 preguntas más frecuentes que recibe una notaría por teléfono: honorarios, documentación, tiempos, procesos, disponibilidad
- Diseña el árbol de decisión para el personal de atención: cómo derivar al oficial, cuándo citar directamente, cuándo pedir documentación antes de la cita
- Propón un sistema de registro de consultas para identificar las preguntas más recurrentes y mejorar la información proactiva

6. MEDICIÓN DE SATISFACCIÓN
- Diseña una encuesta de satisfacción de 5 preguntas para enviar tras la firma
- Define los umbrales de alerta: qué puntuación activa una llamada de seguimiento, qué tipo de comentario escala a revisión del proceso
- Propón un proceso mensual de análisis de feedback: quién revisa, qué acciones se derivan, cómo se comunica la mejora al equipo

Entrega todas las comunicaciones y guías listas para usar, con el tono cálido, cercano y profesional adecuado para una institución de confianza como la notaría.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Protocolos de atención y comunicación con ciudadanos en notarías',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Servicios freelance para digitalización de archivos notariales',
                'description'      => 'Define una propuesta de servicios freelance para digitalizar, indexar y gestionar el archivo histórico de escrituras notariales usando IA y herramientas de OCR avanzado.',
                'prompt_content'   => <<<'EOT'
Actúa como consultor freelance especializado en gestión documental, digitalización de archivos y legaltech. Necesito definir y estructurar una propuesta de servicios freelance para notarías que quieran digitalizar su archivo histórico de escrituras, modernizar sus procesos documentales y cumplir con los requisitos de conservación digital establecidos por el Consejo General del Notariado.

Contexto del encargo freelance:
- Cliente tipo: [notaría con 20-40 años de protocolo en papel / notaría que hereda archivo de notario jubilado / red de notarías con volumen de millones de folios]
- Volumen estimado del archivo: [NÚMERO de escrituras o folios a digitalizar]
- Estado del archivo: [bien ordenado por año y número / desorganizado / mezcla de soportes: papel, microfilm, digital]
- Urgencia: [digitalización urgente por mudanza / proyecto a largo plazo / necesidad de consulta remota del archivo]
- Presupuesto estimado del cliente: [RANGO]
- Herramientas disponibles en tu stack freelance: [escáner de alta producción / software OCR / NAS / cloud storage / software de gestión documental]

Desarrolla la propuesta de servicios con los siguientes apartados:

1. DIAGNÓSTICO Y ALCANCE DEL PROYECTO
- Diseña el proceso de auditoría inicial del archivo: inventario de volumen, evaluación del estado de conservación, identificación de documentos prioritarios, diagnóstico del sistema de indexación actual
- Crea una ficha de diagnóstico que puedas completar en la primera visita a la notaría en 2-3 horas
- Define los criterios para segmentar el archivo: escrituras recientes (alta consulta) vs archivo histórico (baja consulta), documentos en soporte frágil que necesitan tratamiento previo
- Propón cómo presentar el alcance del proyecto al notario: estimación de tiempo, fases, entregables

2. PROCESO DE DIGITALIZACIÓN Y CALIDAD
- Define los estándares técnicos de digitalización: resolución mínima por tipo de documento (300 dpi para texto, 400 dpi para documentos con sellos o firmas), formato de archivo (PDF/A para archivo a largo plazo), nomenclatura de archivos
- Diseña el flujo de trabajo de digitalización: preparación del documento (eliminación de grapas, aplanado), escaneo, control de calidad visual, OCR, indexación, almacenamiento
- Propón las herramientas de OCR más adecuadas para escrituras notariales en español: comparativa entre ABBYY FineReader, Adobe Acrobat Pro, soluciones open source
- Crea el protocolo de control de calidad: tasa de error de OCR aceptable, revisión manual de páginas con baja puntuación de confianza, validación final por el personal de la notaría

3. INDEXACIÓN Y SISTEMA DE BÚSQUEDA
- Diseña el modelo de metadatos para escrituras notariales: número de protocolo, fecha, tipo de acto, otorgantes (nombre y NIF), objeto del acto (inmueble, sociedad, etc.), notario autorizante
- Propón un proceso de extracción automática de metadatos mediante IA: qué campos pueden extraerse automáticamente con alta fiabilidad y cuáles requieren revisión humana
- Diseña el sistema de búsqueda del archivo digitalizado: búsqueda por metadatos, búsqueda de texto libre en el contenido de la escritura, combinación de criterios
- Explica cómo integrar el archivo digitalizado con el software de gestión notarial existente o propón una solución independiente

4. ALMACENAMIENTO, SEGURIDAD Y CUMPLIMIENTO
- Define la arquitectura de almacenamiento: copia local en NAS, copia en cloud cifrada, política de backup 3-2-1
- Explica los requisitos de seguridad: cifrado en reposo y en tránsito, control de acceso por rol, registro de auditoría de consultas
- Detalla cómo cumplir con el RGPD en la digitalización de documentos con datos personales de los comparecientes
- Propón la política de retención de los originales en papel tras la digitalización: cuáles conservar, cuáles destruir de forma segura, cuáles transferir al Archivo Histórico Notarial

5. PROPUESTA ECONÓMICA Y MODELO DE NEGOCIO FREELANCE
- Diseña tres modalidades de tarifa: por folio digitalizado, por escritura completa, por mes de proyecto a precio cerrado
- Define los factores que incrementan el precio: estado del archivo (documentos deteriorados), necesidad de indexación manual elevada, urgencia, desplazamientos
- Propón el modelo de contrato: alcance, hitos, garantías de calidad, propiedad intelectual del trabajo realizado
- Crea una plantilla de propuesta de servicios de 2 páginas que puedas personalizar para cada notaría

6. EXPANSIÓN Y SERVICIOS COMPLEMENTARIOS
- Identifica servicios adicionales que puedes ofrecer una vez completada la digitalización: formación del personal en el uso del archivo digital, mantenimiento anual, digitalización continua de nuevos protocolos, consultoría para la implantación de firma electrónica
- Propón cómo posicionarte como proveedor de referencia para notarías en tu área geográfica: qué certificaciones obtener, cómo conseguir las primeras referencias, cómo escalar de un cliente a una cartera de notarías

Entrega la propuesta completa con todos los documentos, tablas de precios y plantillas listos para usar con un cliente real.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Propuesta freelance de digitalización e indexación de archivos notariales históricos',
                'vote_score'       => 25,
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
