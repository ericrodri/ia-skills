<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills329Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Revisión de contratos de agencias y acuerdos de colaboración en marketing',
                'description'      => 'Aprende a revisar contratos con agencias de publicidad, influencers y partners de co-marketing para proteger los intereses de tu empresa antes de firmar. Identifica cláusulas abusivas, ambigüedades en el alcance del servicio y condiciones de salida desfavorables. Negocia acuerdos equilibrados sin necesidad de depender siempre del departamento legal.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado corporativo especializado en contratos de servicios de marketing y publicidad. Ayúdame a revisar y negociar contratos con agencias, influencers y partners de colaboración para proteger los intereses de mi empresa y evitar sorpresas desagradables durante la relación comercial.

**Contexto:**
Soy responsable de marketing en una empresa y estoy a punto de firmar un contrato con una agencia de publicidad, un influencer o un partner de co-marketing. Quiero entender el contrato en profundidad, identificar riesgos y saber qué cláusulas negociar antes de comprometer la firma.

**Paso 1 — Estructura estándar de un contrato de servicios de marketing**
Explícame las secciones que debe tener un contrato de agencia completo:
- Objeto del contrato: cómo debe describir el alcance del servicio de forma que no deje espacio a interpretaciones
- Partes y representantes: quién firma y con qué poderes; riesgos de firmar con representantes sin autorización suficiente
- Duración y renovación automática: cómo identificar cláusulas de renovación tácita y cómo protegerse
- Obligaciones de cada parte: qué debe comprometerse a entregar la agencia (entregables, plazos, formatos) y qué me comprometo yo (briefings, aprobaciones, pago)
- Tarifas y condiciones de pago: fee fijo vs variable, hitos de pago, penalizaciones por retraso en aprobaciones
- Propiedad intelectual: quién posee los creativos, los datos de campaña y los activos generados durante la relación

**Paso 2 — Cláusulas de riesgo en contratos de agencia**
Identifica y explícame las 10 cláusulas más peligrosas que debo detectar:
- Cláusulas de exclusividad que me impiden trabajar con otras agencias en mi sector
- Cesión automática de derechos sobre mis activos de marca a la agencia
- Cláusulas de confidencialidad unilaterales que solo me obligan a mí
- Limitaciones de responsabilidad excesivas que dejan a la agencia sin consecuencias por mal rendimiento
- Plazos de preaviso de resolución demasiado largos (180+ días) que me dejan atrapado
- Cláusulas de compensación por cancelación anticipada desproporcionadas
- Derecho de la agencia a usar mi marca y casos de éxito en su portfolio sin mi aprobación
- Acuerdos de nivel de servicio (SLAs) poco específicos o sin métricas medibles
- Comisiones ocultas de la agencia en la compra de medios (mark-ups no declarados)
- Jurisdicción y ley aplicable en un tribunal lejano o desfavorable

Para cada cláusula, indica cómo redactarla de forma más equilibrada.

**Paso 3 — Contratos con influencers y creadores de contenido**
Guíame para los aspectos específicos de estos contratos:
- Especificación exacta de entregables: tipo de contenido, plataforma, formato, número de publicaciones, ventana temporal
- Derechos de uso del contenido: cuánto tiempo puedo usar el contenido del influencer en mis propios canales, en paid media y en materiales comerciales
- Cláusula de contenido exclusivo: restricción de que el influencer no promueva a competidores directos durante el período y X días después
- Obligaciones de divulgación: cómo garantizar que el influencer etiqueta el contenido como publicidad (requerimiento legal)
- Aprobación de contenido: proceso de revisión antes de publicación y cuántas rondas están incluidas
- Cláusula morality: bajo qué circunstancias puedo rescindir si el influencer incurre en conducta reputacionalmente dañina

**Paso 4 — Acuerdos de co-marketing y partnerships**
Aborda los contratos específicos de colaboración entre marcas:
- Definición de la campaña conjunta: alcance, canales, fechas y geografía
- Aportaciones de cada parte: presupuesto, recursos, audiencias, contenido, distribución
- Propiedad de los leads generados y uso de datos de los usuarios captados conjuntamente
- Distribución de resultados y cómo medir el éxito de cada parte
- Cláusula de no captación de clientes: protección mutua para no ir a por los clientes del partner
- Proceso de aprobación de materiales conjuntos y quién tiene la palabra final en disputas de marca

**Paso 5 — Proceso de negociación y redlines**
Dame un proceso práctico para negociar contratos:
- Cómo marcar redlines (cambios propuestos) en un contrato recibido de forma profesional
- Qué batallas dar y cuáles no valen la pena (jerarquía de importancia de cláusulas)
- Cómo pedir cambios sin romper la relación comercial: lenguaje sugerido para proponer modificaciones
- Cuándo escalar al departamento legal y cuándo puedo gestionar yo mismo la negociación
- Lista de verificación final antes de firmar: los 15 puntos que debo confirmar

**Formato de salida:**
Organiza la respuesta en cinco pasos numerados. Para cada cláusula problemática, muestra la redacción original típica (en cursiva) y la versión mejorada propuesta. Proporciona una checklist final de revisión de contratos de marketing en formato de lista de verificación marcable.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Revisión y negociación de contratos con agencias y partners',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Contratos de desarrollo de software: cláusulas clave y SLAs',
                'description'      => 'Aprende a redactar, revisar y negociar contratos de desarrollo de software que protejan tu propiedad intelectual, definan con precisión el alcance del proyecto y establezcan acuerdos de nivel de servicio realistas. Evita las ambigüedades que generan disputas y aprende a gestionar cambios de alcance de forma contractualmente sólida. Esencial para freelancers, agencias y equipos in-house.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho tecnológico y contratos de software. Guíame para redactar y revisar contratos de desarrollo de software que protejan mis intereses, ya sea como proveedor (desarrollador o agencia) o como cliente que encarga el desarrollo.

**Contexto:**
Estoy involucrado en un proyecto de desarrollo de software (aplicación web, móvil, sistema interno o integración). Necesito un contrato sólido que defina claramente el alcance, la propiedad intelectual, los plazos, las condiciones de pago y los mecanismos para gestionar cambios e incidencias.

**Sección 1 — Definición del alcance: el talón de Aquiles del contrato de software**
Explícame cómo redactar la especificación de alcance de forma que evite disputas:
- La diferencia entre un Statement of Work (SOW) y las especificaciones técnicas, y por qué el SOW debe ser parte del contrato
- Cómo describir las funcionalidades entregables en lenguaje no ambiguo: criterios de aceptación verificables en lugar de descripciones subjetivas
- El concepto de "done": cuándo se considera terminada una funcionalidad y quién lo determina
- Cómo manejar la lista de exclusiones explícitas: qué NO incluye el contrato es tan importante como lo que sí incluye
- El proceso de gestión de cambios de alcance (change requests): cómo documentar, valorar y aprobar cambios sin que el proyecto se desconfigure

**Sección 2 — Propiedad intelectual en contratos de software**
Guíame sobre los aspectos de PI más críticos:
- Work for hire vs licencia: diferencia entre ceder la propiedad total al cliente vs licenciar el uso del software
- Código preexistente del proveedor (background IP): cómo el proveedor se protege para poder reutilizar sus herramientas y frameworks propios en otros proyectos
- Código de terceros (librerías open source): cómo documentar las dependencias y qué implicaciones tienen sus licencias (GPL, MIT, Apache) para el producto final
- Repositorio de código fuente: quién controla el repositorio, acceso del cliente al código durante el desarrollo y condiciones de entrega del código al finalizar
- Cláusula de escrow: cuándo tiene sentido depositar el código fuente en un tercero de confianza

**Sección 3 — Acuerdos de nivel de servicio (SLAs) para software**
Diseña la arquitectura de SLAs para un contrato de mantenimiento o servicio:
- Definición de niveles de severidad de incidencias: P1 (sistema caído), P2 (funcionalidad crítica degradada), P3 (error no crítico), P4 (mejora)
- Tiempos de respuesta y resolución por nivel de severidad: qué compromisos son razonables y cuáles son irrealizables
- Disponibilidad (uptime): cómo expresarla (99,9% = ~8,7h de caída permitida al año) y cómo medirla objetivamente
- Penalizaciones por incumplimiento de SLA: créditos de servicio, descuentos proporcionales; cómo estructurarlos sin que sean ruinosos para el proveedor
- Exclusiones del SLA: fuerza mayor, mantenimiento programado, fallos causados por el cliente

**Sección 4 — Condiciones económicas y de pago**
Estructura los términos financieros del contrato:
- Modelos de precio: precio fijo (riesgo del proveedor), time & materials (riesgo del cliente) e híbrido; cuándo usar cada uno según el tipo de proyecto
- Hitos de pago vinculados a entregables verificables: cómo estructurar el cronograma de pagos para que no avance el dinero sin avanzar el trabajo
- Retención de garantía: porcentaje que el cliente retiene hasta la aceptación final y durante el período de garantía
- Condiciones de escalada de precios para contratos plurianuales (IPC, renegociación)
- Qué pasa si el cliente retrasa las aprobaciones y el impacto en los plazos de pago

**Sección 5 — Resolución del contrato y garantías post-entrega**
Aborda el final del contrato y las responsabilidades posteriores:
- Período de garantía: duración estándar (90-180 días) y qué cubre (corrección de bugs vs nuevas funcionalidades)
- Condiciones de resolución anticipada: causas justificadas de cada parte, notificación previa, liquidación de trabajos realizados
- Cláusulas de limitación de responsabilidad: tope máximo de indemnización del proveedor (típicamente el valor del contrato) y exclusiones de daños indirectos
- Proceso de entrega y transición: documentación técnica requerida, formación, soporte durante la transición
- Acuerdo de no captación: protección mutua frente a la contratación directa de empleados clave del otro

**Formato de salida:**
Organiza la respuesta en cinco secciones numeradas. Proporciona ejemplos de redacción contractual específica (en cursiva o bloque de texto) para las cláusulas más importantes. Incluye una tabla de SLAs con niveles de severidad, tiempos de respuesta y penalizaciones. Añade una checklist de 12 puntos para revisar un contrato de software antes de firmar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Redacción y negociación de contratos de desarrollo de software',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Contratos de diseño: propiedad intelectual, licencias y gestión del alcance',
                'description'      => 'Aprende a proteger tu trabajo creativo con contratos de diseño que definan claramente la propiedad intelectual, los derechos de uso, el alcance del proyecto y las condiciones de revisión. Evita los malentendidos más comunes que llevan a trabajar gratis en revisiones infinitas. Esencial para diseñadores freelance y estudios de diseño.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en propiedad intelectual y contratos para profesionales creativos. Guíame para redactar contratos de diseño que protejan mi trabajo, definan con precisión el alcance del servicio y establezcan bases sanas para la relación con el cliente.

**Contexto:**
Soy diseñador (gráfico, UX/UI, de producto, branding) que trabaja de forma freelance o en un estudio. Necesito contratos sólidos que protejan mi propiedad intelectual, delimiten el alcance, regulen las revisiones y definan claramente qué sucede con los archivos y derechos al finalizar el proyecto.

**Bloque 1 — Propiedad intelectual en el trabajo de diseño**
Explícame los conceptos de PI que todo diseñador debe dominar:
- Derechos morales vs derechos patrimoniales: qué son, cuáles son irrenunciables en España/Europa y cómo afecta esto a los contratos
- Obra por encargo (work for hire): diferencia entre crear una obra propia que luego licencio vs crear una obra cuya autoría pertenece desde el inicio al cliente
- Cuándo nacen los derechos de autor: en el momento de la creación, sin necesidad de registro; cómo documentar la fecha de creación
- Registro de obra en el Registro de la Propiedad Intelectual: cuándo vale la pena y cómo hacerlo
- Diferencia entre vender el copyright completo (cesión total y exclusiva) vs licenciar el uso para fines específicos

**Bloque 2 — Estructura de las cláusulas de cesión y licencia**
Guíame para redactar las cláusulas de PI con precisión:
- Modelo A — Licencia limitada (lo recomendado para la mayoría de proyectos de diseño): el diseñador conserva el copyright y licencia al cliente el derecho de uso para un fin específico, territorio, duración y soporte
- Modelo B — Cesión total: el cliente adquiere todos los derechos; cómo fijar el precio adecuado para compensar la pérdida de reutilización del trabajo
- Qué incluir siempre en la descripción de la licencia: finalidad (uso comercial/editorial/web), territorio (nacional/mundial), duración (indefinida/X años), soporte (digital/print/outdoor), exclusividad (exclusiva/no exclusiva)
- Derechos reservados que el diseñador debe proteger: mostrar el trabajo en portfolio, firma del autor, reutilización de elementos no originales del cliente
- Qué pasa con los archivos fuente (Figma, AI, PSD): diferencia entre entregar el archivo fuente (que permite modificaciones sin el diseñador) y entregar solo el archivo de producción final

**Bloque 3 — Definición del alcance y gestión de revisiones**
El problema más común en el trabajo de diseño:
- Cómo describir el entregable de forma precisa: número de propuestas conceptuales iniciales, número de revisiones incluidas, qué constituye una "revisión" vs un "cambio de dirección" (que se factura aparte)
- Cómo estructurar el proceso creativo en el contrato: brief → propuestas → selección → refinamiento → aprobación final
- Cláusula de aprobación: qué se considera aprobado (silencio positivo tras X días, aprobación expresa por escrito)
- Gestión de cambios de dirección: cómo facturar trabajos adicionales no contemplados en el alcance original sin deteriorar la relación con el cliente
- Uso de los entregables preliminares: qué puede y no puede hacer el cliente con los mockups, propuestas y borradores no seleccionados

**Bloque 4 — Condiciones económicas específicas del diseño**
Estructura los términos financieros para proyectos creativos:
- Señal o anticipo: entre el 30% y el 50% del total antes de comenzar; por qué es esencial y cómo justificarlo ante el cliente
- Hitos de pago vinculados a fases: anticipo al inicio, pago intermedio al aprobar concepto, pago final al entregar archivos definitivos
- Retención de entregables hasta cobro completo: el derecho del diseñador a no entregar los archivos finales hasta recibir el último pago
- Cómo manejar proyectos que el cliente "pausa" o abandona: cláusula de proyectos paralizados (kill fee) para compensar el tiempo invertido y el bloqueo de agenda
- Honorarios por uso extendido: si el cliente quiere usar el diseño más allá de lo acordado (nuevo soporte, nuevo territorio), cómo facturarlo

**Bloque 5 — Cláusulas de protección adicional para diseñadores**
Añade estas cláusulas que marcan la diferencia:
- Derecho de portfolio: el diseñador puede mostrar el trabajo finalizado en su portfolio y redes profesionales
- Crédito de autoría: si el proyecto se publica en medios, el diseñador quiere ser mencionado
- Cláusula de no alteración: el cliente no puede modificar el trabajo de diseño de manera que dañe la reputación del diseñador
- Acuerdo de confidencialidad (NDA) mutuo: protege los datos del cliente y los métodos de trabajo del diseñador
- Resolución de disputas: mediación antes del arbitraje o juicio; cómo incluirlo de forma que sea practicable

Proporciona redacciones modelo para cada cláusula en español jurídico claro, y para cada una una versión "traducida" en lenguaje llano para explicársela al cliente.

**Formato de salida:**
Organiza la respuesta en cinco bloques numerados. Para las cláusulas más importantes, proporciona la redacción contractual sugerida entre comillas o en bloque diferenciado. Incluye una lista de los 5 errores contractuales más comunes de los diseñadores freelance y cómo evitarlos. Añade un checklist de "lo mínimo que debe tener mi contrato de diseño".
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Protección legal del trabajo creativo y gestión de proyectos de diseño',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Negociación y revisión de contratos comerciales de compraventa',
                'description'      => 'Aprende a leer, negociar y redactar contratos comerciales de venta que protejan los intereses de tu empresa, definan condiciones claras de entrega, pago y garantías, y minimicen el riesgo de disputas con clientes y proveedores. Domina las cláusulas clave que todo profesional de ventas debe entender antes de comprometer la firma.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado mercantilista con experiencia en contratos comerciales y negociación B2B. Guíame para entender, revisar y negociar contratos de compraventa de productos o servicios que protejan mi posición como vendedor o comprador en transacciones comerciales significativas.

**Contexto:**
Soy profesional de ventas o directivo comercial que cierra acuerdos B2B. Necesito entender los contratos comerciales que firmo, identificar riesgos antes de comprometer la firma y saber qué cláusulas negociar para proteger los intereses de mi empresa sin destruir la relación comercial.

**Parte 1 — Anatomía del contrato comercial de compraventa**
Explícame la estructura estándar de un contrato de compraventa B2B:
- Preámbulo e identificación de las partes: información mínima necesaria (razón social, CIF, domicilio, representante con poder)
- Objeto del contrato: descripción precisa del producto o servicio, especificaciones técnicas por referencia a un anexo
- Precio y condiciones de pago: precio fijo vs variable, moneda, incoterms si hay transporte, formas de pago aceptadas, plazos máximos (Ley de Morosidad: 60 días para empresas, 30 para administraciones)
- Condiciones de entrega: lugar, plazo, quién asume el transporte y el seguro, transferencia del riesgo
- Garantías y vicios ocultos: período de garantía, qué cubre, proceso de reclamación, responsabilidad del proveedor
- Duración y condiciones de renovación o extinción del contrato

**Parte 2 — Cláusulas de riesgo para el vendedor**
Identifica y explícame las cláusulas que más me dañan como proveedor:
- Plazos de pago superiores a 60 días: cómo identificarlos y cómo negociar sin perder el cliente
- Cláusulas de responsabilidad ilimitada: por qué son peligrosas y cómo limitarla al valor del contrato o del daño directo
- Garantías de rendimiento sin definición de métrica: cómo convertir compromisos vagos en métricas verificables
- Cláusulas de penalización por retraso desproporcionadas: cómo negociar topes razonables
- Derecho del comprador a resolver el contrato por cualquier causa: cómo añadir condiciones que protejan los trabajos ya realizados
- Confidencialidad unilateral: cómo asegurar que el NDA sea recíproco
- Derecho del comprador a auditar mis instalaciones o sistemas sin límite: cómo delimitar el alcance y la frecuencia

**Parte 3 — Cláusulas de riesgo para el comprador**
Identifica las cláusulas peligrosas desde la perspectiva de quien compra:
- Límites de responsabilidad del proveedor inferiores al daño que puede causar un fallo del servicio
- Cláusulas de force majeure demasiado amplias que excusan el incumplimiento por razones triviales
- Renovación automática sin notificación o con período de preaviso excesivo para cancelar
- Cambios unilaterales de precio por parte del proveedor sin aceptación expresa del comprador
- Cláusulas de auditoría del proveedor sobre los datos del cliente: con qué propósito y bajo qué controles
- Jurisdicción en el domicilio del proveedor: por qué es un inconveniente y cómo negociar una alternativa

**Parte 4 — Negociación de contratos comerciales: estrategia y táctica**
Dame un proceso práctico de negociación:
- Cómo preparar la posición de negociación: identificar mis imprescindibles, mis preferencias y mis concesiones posibles antes de la reunión
- Lenguaje profesional para proponer cambios: cómo redactar una redline (propuesta de modificación) sin dañar la relación
- La regla del intercambio: cómo pedir una concesión a cambio de cada concesión que haga
- Cuándo aceptar las condiciones del otro: análisis del coste de la negociación vs el valor de la concesión
- Cómo gestionar la presión de "es nuestro contrato estándar, no cambiamos nada": técnicas para abrir espacios de negociación sin confrontación
- El papel del equipo legal: cuándo pasar el contrato a los abogados y cómo hacer el handover eficientemente

**Parte 5 — Gestión post-firma del contrato**
El contrato no termina al firmar:
- Sistema de gestión de contratos: dónde guardar los contratos, cómo indexarlos y qué alertas configurar (renovaciones, vencimientos de garantía, revisiones de precio)
- Cómo documentar los cambios orales o por email para que tengan validez contractual (confirmación escrita de acuerdos verbales)
- Qué hacer cuando el cliente incumple: protocolo de reclamación amistosa, burofax de requerimiento, reserva de acciones legales
- Cómo gestionar contratos internacionales: incoterms, ley aplicable, convenio de Viena sobre compraventa internacional

**Formato de salida:**
Organiza la respuesta en cinco partes numeradas. Para las cláusulas más importantes, proporciona la redacción problemática típica y la alternativa negociada. Incluye una tabla de incoterms básicos con el punto de transferencia de riesgo de cada uno. Añade una checklist de revisión de contratos comerciales dividida entre riesgos del vendedor y riesgos del comprador.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Negociación de contratos comerciales B2B',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de contratos con proveedores de software y licencias tecnológicas',
                'description'      => 'Aprende a negociar y gestionar contratos con proveedores de SaaS, licencias de software y servicios cloud para proteger a tu empresa de bloqueos de proveedor, cambios de precio arbitrarios y condiciones de uso desfavorables. Entiende los términos clave que los proveedores tecnológicos incluyen en sus contratos y cómo negociar condiciones más favorables.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado tecnológico especializado en contratos SaaS y licencias de software empresarial. Guíame para revisar, negociar y gestionar contratos con proveedores tecnológicos que protejan a mi empresa de riesgos de lock-in, cambios arbitrarios de condiciones y pérdida de datos.

**Contexto:**
Soy Product Manager o responsable de tecnología que gestiona el stack de herramientas de mi empresa. Firmo o superviso contratos con proveedores de SaaS (CRM, ERP, herramientas de productividad, plataformas de datos), servicios cloud (AWS, Azure, GCP) y licencias de software tradicional. Quiero asegurarme de que estos contratos protejan los intereses de mi empresa a largo plazo.

**Módulo 1 — Tipos de acuerdos tecnológicos y sus diferencias**
Explícame los distintos tipos de contratos que manejo:
- Contrato de licencia de software (on-premise): qué licencio exactamente (uso perpetuo vs suscripción), qué restricciones aplican (número de usuarios, dispositivos, localización), derechos de actualización y soporte
- Acuerdo de servicio SaaS (MSA + Order Form): estructura típica de un Master Service Agreement y por qué las condiciones específicas van en el Order Form adjunto
- Contrato de servicios cloud (AWS, Azure): diferencias con un SaaS clásico, cómo funcionan los compromisos de uso (Reserved Instances, Committed Use Discounts), créditos de SLA
- Acuerdo de uso de APIs: términos de uso aceptable, límites de rate, política de cambios breaking, obligaciones de notificación de deprecación

**Módulo 2 — Cláusulas críticas en contratos SaaS**
Identifica y explícame las cláusulas más importantes a revisar:

Portabilidad y exportación de datos: el derecho de mi empresa a exportar TODOS los datos en un formato estándar (CSV, JSON, SQL) en cualquier momento y durante 30-90 días tras la terminación del contrato. Cómo detectar contratos que lo dificultan.

Derecho a auditar el uso: qué métricas puede monitorizar el proveedor sobre mi uso y para qué puede usarlas. Protección frente al uso de mis datos para mejorar su producto o entrenar modelos de IA.

Cambios en los términos de servicio: cómo protegerme de cambios unilaterales de precio, funcionalidades eliminadas o cambios de política de uso; cláusula de notificación anticipada y derecho de salida sin penalización.

Subcontratistas y sub-encargados: quién más tiene acceso a mis datos (subprocesadores de terceros); obligación del proveedor de notificar cambios en su lista de subprocesadores.

Continuidad del servicio y escrow: qué ocurre si el proveedor quiebra, es adquirido o descontinúa el producto; acuerdo de escrow de código fuente.

Cláusulas de indemnización: quién indemniza a quién en caso de reclamación de terceros por infracción de PI del software.

**Módulo 3 — Negociación de precios y compromisos de volumen**
Guíame para negociar condiciones económicas favorables:
- Cuándo y cómo pedir descuento por volumen, pago anticipado o compromiso plurianual
- Cómo estructurar una negociación de renovación con tiempo suficiente (6 meses antes del vencimiento)
- Cláusula de precio garantizado: cómo blindar el precio durante un período y limitar los incrementos futuros (tope del IPC o porcentaje máximo anual)
- Derechos de licencia para filiales: asegurar que el contrato cubra a todo el grupo empresarial y no solo a la entidad firmante
- Cómo usar una RFP (Request for Proposal) con múltiples proveedores para crear competencia y mejorar condiciones

**Módulo 4 — Seguridad y privacidad en contratos tecnológicos**
Asegura el cumplimiento normativo en los contratos:
- Data Processing Agreement (DPA): qué debe incluir según el RGPD; roles de responsable vs encargado del tratamiento; medidas de seguridad exigibles; proceso ante brechas de datos
- Certificaciones de seguridad exigibles: ISO 27001, SOC 2 Type II, ENS (Esquema Nacional de Seguridad) — qué son y cómo exigir evidencia actualizada
- Localización de datos: dónde almacena el proveedor mis datos; si es fuera de la UE, qué mecanismos de transferencia usa (SCCs, BCRs)
- Derecho de auditoría de seguridad: si puedo realizar un pentest o exigir los resultados de las auditorías del proveedor

**Módulo 5 — Gestión del ciclo de vida de contratos tecnológicos**
Implementa un sistema de gestión contractual:
- Inventario de contratos SaaS: herramientas para centralizar contratos, fechas de vencimiento y costes (desde una hoja de cálculo hasta herramientas CLM como Vendr o Zylo)
- Calendario de renovaciones: alertas a 180, 90 y 30 días antes del vencimiento para tener tiempo de negociar o buscar alternativas
- Proceso de baja y offboarding de un proveedor: cómo ejecutar la exportación de datos, cancelar accesos y documentar el proceso
- Métricas de gestión de proveedores: coste por usuario activo, tasa de adopción real vs licencias pagadas, ROI de cada herramienta

**Formato de salida:**
Organiza la respuesta en cinco módulos numerados con subsecciones. Para las cláusulas más críticas, proporciona la redacción que debo buscar y la redacción alternativa que debo proponer. Incluye una plantilla de inventario de contratos SaaS con los campos esenciales. Añade una lista de 8 preguntas que debo hacer a cualquier proveedor SaaS antes de firmar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestión de contratos SaaS y licencias tecnológicas',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Contratos laborales, NDAs y documentación de cumplimiento en RRHH',
                'description'      => 'Domina la redacción y revisión de contratos laborales, acuerdos de confidencialidad y documentación de compliance en RRHH para proteger a tu empresa y garantizar el cumplimiento de la normativa laboral vigente. Aprende a gestionar con rigor legal las incorporaciones, modificaciones contractuales y salidas de empleados. Evita las contingencias laborales más costosas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado laboralista con experiencia en relaciones laborales empresariales y cumplimiento normativo de RRHH. Guíame para gestionar la documentación laboral y contractual de mi empresa de forma que minimice el riesgo legal, cumpla la normativa vigente y proteja los intereses de la organización.

**Contexto:**
Soy responsable de RRHH o director de personas en una empresa española. Gestiono el ciclo completo del empleado: contratación, modificaciones durante la relación laboral y extinción del contrato. Quiero asegurar que toda nuestra documentación es legalmente sólida y que actuamos con rigor en cada etapa.

**Área 1 — Contratos laborales: tipos y cláusulas esenciales**
Guíame sobre los tipos de contrato y sus requisitos:
- Contrato indefinido ordinario: qué debe incluir según el ET, período de prueba máximo por categoría (6 meses directivos, 2 meses resto), obligación de registro en el SEPE
- Contratos temporales tras la reforma laboral 2022: por circunstancias de la producción (máximo 6 meses, ampliable a 1 año por convenio) y de sustitución; qué causas siguen siendo válidas y cuáles han desaparecido
- Contrato a tiempo parcial: obligación de pactar el horario en el contrato, distribución de horas y registro diario
- Cláusulas recomendadas adicionales más allá del mínimo legal: categoría y funciones detalladas, centro de trabajo habitual, salario base y complementos, beneficios extrasalariales, derechos sobre propiedad intelectual generada en el desempeño del cargo

**Área 2 — Pactos de no competencia, exclusividad y confidencialidad**
Diseña las cláusulas de protección para situaciones críticas:
- Pacto de no competencia post-contractual: requisitos de validez (duración máxima 2 años directivos/6 meses resto, compensación económica adecuada, interés industrial/comercial del empresario); cómo redactarlo para que sea ejecutable
- Pacto de permanencia: cuando la empresa invierte en formación específica del empleado; límites legales (máximo 2 años) y consecuencias del incumplimiento
- Acuerdo de confidencialidad (NDA): qué información debe considerarse confidencial, duración de la obligación post-contractual, excepciones (información ya pública, requerimiento legal)
- Cesión de derechos de propiedad intelectual: qué creaciones del empleado pertenecen a la empresa (las realizadas en el ejercicio de sus funciones) y cuáles no; cómo documentar la cesión

**Área 3 — Modificaciones de la relación laboral**
Gestiona los cambios durante la vida del contrato:
- Modificación sustancial de condiciones de trabajo (artículo 41 ET): qué cambios requieren notificación de 15 días y derecho a rescisión indemnizada (jornada, horario, funciones, salario, sistema de trabajo, movilidad funcional fuera de grupo)
- Movilidad geográfica (artículo 40 ET): plazos de notificación, derecho del empleado a rechazarla con indemnización, prioridades para empleados con conciliación familiar
- Cómo documentar acuerdos de modificación: necesidad de acuerdo escrito firmado por ambas partes para cualquier cambio de condiciones
- Cambios salariales: diferencia entre reducción de salario (requiere proceso del art. 41) y actualización del complemento variable (según lo pactado originalmente)

**Área 4 — Documentación de cumplimiento normativo en RRHH**
Gestiona el compliance laboral con rigor:
- Registro horario obligatorio: qué debe registrar el sistema (hora de inicio y fin, sin excepciones), durante cuánto tiempo conservar los registros (4 años), qué sanciones acarrea el incumplimiento
- Protocolo de acoso laboral y sexual: qué debe incluir el protocolo según el artículo 48 LOI y el RD 901/2020 para las medianas y grandes empresas, canal de denuncias, plazos de investigación
- Plan de igualdad: empresas obligadas (más de 50 empleados), qué debe contener, proceso de negociación con la RLT, registro y depósito oficial
- Registro retributivo: obligación de tener un registro de todos los salarios por sexo y categoría, y auditoría retributiva para empresas con plan de igualdad
- Canal de denuncias (Ley Whistleblowing 2/2023): empresas obligadas (más de 50 empleados), requisitos del canal, plazo de acuse de recibo (7 días) y de resolución (3 meses)

**Área 5 — Extinción del contrato y documentación de la salida**
Gestiona las salidas con rigor legal:
- Tipos de extinción y documentación requerida: mutuo acuerdo (acta de extinción firmada), dimisión (carta de preaviso con el período del convenio), despido disciplinario (carta de despido con hechos concretos y fechas), despido objetivo (carta + indemnización de 20 días/año + preaviso de 15 días)
- Qué debe contener una carta de despido para ser válida: hechos imputados con fecha y descripción detallada, calificación de los hechos, fecha de efectos; errores que convierten el despido en improcedente
- Finiquito: qué conceptos debe incluir (salario pendiente, vacaciones no disfrutadas, parte proporcional de pagas extraordinarias, indemnización si corresponde); quién calcula el finiquito y cuándo se entrega
- El acto de conciliación: proceso, plazos, qué acuerdos son posibles, cómo documentar un acuerdo de conciliación

**Formato de salida:**
Organiza la respuesta en cinco áreas numeradas. Incluye referencias específicas a artículos del Estatuto de los Trabajadores y normativa aplicable. Proporciona ejemplos de redacción de cláusulas contractuales para los pactos más importantes. Añade una checklist de documentación mínima requerida para una incorporación, una modificación contractual y una extinción.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestión legal del ciclo de vida del empleado',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Contratos financieros: términos clave, garantías y gestión de riesgos',
                'description'      => 'Aprende a leer y negociar contratos de financiación, préstamos, líneas de crédito y acuerdos de inversión para proteger la posición financiera de tu empresa. Identifica las cláusulas de covenant, aceleración y garantías que más condicionan la operativa del negocio. Negocia con entidades financieras e inversores desde una posición informada.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO con experiencia en estructuración de deuda corporativa y relaciones con entidades financieras. Guíame para entender, negociar y gestionar los contratos financieros más relevantes para una empresa: préstamos bancarios, líneas de crédito, factoring y acuerdos de inversión.

**Contexto:**
Soy director financiero, controller o responsable de finanzas en una empresa. Negocio o superviso contratos con bancos, fondos de inversión o inversores privados. Quiero entender en profundidad los términos que firmo y negociar desde una posición informada para proteger la operativa y la solvencia de mi empresa.

**Bloque 1 — Estructura de un contrato de préstamo bancario**
Explícame la anatomía de un contrato de financiación:
- Partes y objeto: quién presta, quién recibe, importe, finalidad y estructura (préstamo vs crédito/línea de financiación)
- Tipo de interés: fijo vs variable (Euribor + spread), períodos de revisión, suelos (cláusula floor) y techos (cap); implicaciones de cada estructura para la planificación financiera
- Calendario de amortización: bullet (capital al vencimiento), lineal (cuotas iguales) o personalizado según flujos de caja del proyecto; cómo negociar el amortización que mejor encaje con el cash flow real
- Comisiones: de apertura, de disponibilidad (sobre el importe no dispuesto), de cancelación anticipada, de agencia (en operaciones sindicadas); cómo calcular el coste total efectivo (TAE)
- Garantías personales y reales: quién avala, qué activos se hipotecan o pignonan, implicaciones para el balance y para la capacidad de obtener financiación adicional

**Bloque 2 — Financial covenants: los guardianes del contrato**
Los covenants son las cláusulas más condicionantes:
- Qué son los financial covenants: compromisos de mantener ciertos ratios financieros durante toda la vida del préstamo
- Tipos más comunes: Deuda Neta / EBITDA (apalancamiento), EBITDA / Gastos Financieros (cobertura de intereses), Fondos Propios / Activo Total (solvencia)
- Cómo se miden y cuándo: normalmente al cierre de cada semestre o año fiscal, con referencia a estados financieros auditados o de gestión
- Qué pasa si incumplo un covenant (breach): notificación, período de cure (plazo para corregirlo), waivers, aceleración como consecuencia final
- Cómo negociar los niveles de los covenants: headroom razonable sobre los ratios actuales, ajustes por adquisiciones o inversiones no recurrentes, definiciones de EBITDA ajustado

**Bloque 3 — Cláusulas de control y restricciones operativas**
Más allá de los covenants financieros, el contrato puede limitar la gestión:
- Negative covenants (restricciones): qué no puedo hacer sin autorización del banco (endeudamiento adicional, ventas de activos materiales, cambios de accionariado, reparto de dividendos)
- Affirmative covenants (obligaciones): qué debo hacer periódicamente (reportar estados financieros, notificar litigios relevantes, mantener seguros)
- Cláusula de cambio de control (change of control): qué pasa si vendo la empresa o cambia el accionista de referencia; típicamente activa la aceleración del préstamo
- Cross-default: si incumplo otro contrato financiero, este también entra en default automáticamente; cómo negociar umbrales mínimos para evitar efectos dominó por incumplimientos menores
- Material Adverse Change (MAC): definición vaga que permite al banco declarar el incumplimiento ante un cambio significativo en la situación de la empresa; cómo negociar una definición más precisa

**Bloque 4 — Factoring, confirming y otras líneas de circulante**
Contratos de financiación del capital circulante:
- Factoring con recurso vs sin recurso: diferencia en riesgo de crédito, impacto contable (si va a balance o fuera de balance) y coste
- Confirming: cómo funciona desde la perspectiva del comprador; qué obliga a los proveedores y qué ventajas y riesgos tiene para ellos
- Póliza de crédito: diferencia con el préstamo, liquidación de intereses sobre saldo medio dispuesto, renovación y cancelación
- Avales y garantías bancarias: cuándo exigirlos a proveedores o clientes, impacto en las líneas de riesgo con el banco, coste

**Bloque 5 — Acuerdos de inversión: term sheets y shareholders agreement**
Para empresas que reciben inversión externa:
- Term sheet de inversión: qué términos son negociables y cuáles son estándar; pre-money vs post-money valuation; liquidation preference (participación preferente en la liquidación)
- Shareholders agreement (pacto de socios): derechos de arrastre (drag along), derechos de acompañamiento (tag along), derechos de tanteo y retracto, cláusulas antidilución
- Board rights: qué cuota de consejo se cede al inversor y qué decisiones requieren su aprobación o veto
- Milestones y financiación por tramos: cómo funciona una ronda en tramos condicionada a objetivos y qué pasa si no se alcanzan

**Formato de salida:**
Organiza la respuesta en cinco bloques numerados. Incluye fórmulas de cálculo de cada ratio financiero mencionado. Proporciona una tabla de comparación de tipos de financiación (préstamo, crédito, factoring, leasing) con sus características clave. Añade un glosario de 15 términos financieros en inglés que suelen aparecer en contratos con entidades internacionales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Negociación de financiación bancaria y contratos de inversión',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Sistemas CLM y gestión del ciclo de vida de contratos en despachos',
                'description'      => 'Aprende a implementar un sistema de gestión del ciclo de vida de contratos (CLM) en tu despacho o departamento legal que automatice alertas, centralice el repositorio y aporte visibilidad sobre compromisos y vencimientos. Reduce el riesgo de contractual por falta de seguimiento y demuestra el valor del equipo legal con datos de gestión contractual.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director jurídico con experiencia en transformación digital de departamentos legales y gestión de contratos a escala. Guíame para diseñar e implementar un sistema de gestión del ciclo de vida de contratos (CLM - Contract Lifecycle Management) que mejore la eficiencia, reduzca riesgos y aporte visibilidad estratégica sobre los compromisos contractuales de la organización.

**Contexto:**
Dirijo o formo parte de un departamento legal o despacho de abogados. Gestionamos un volumen considerable de contratos (de 50 a varios miles) con distintos proveedores, clientes y socios. Actualmente sufrimos de contratos dispersos en carpetas locales, renovaciones automáticas que pasan desapercibidas, falta de visibilidad sobre los compromisos y dificultad para responder rápidamente a solicitudes de información contractual.

**Pilar 1 — Diagnóstico y auditoría del estado actual de contratos**
Guíame para evaluar el punto de partida:
- Cómo realizar un inventario de contratos existentes: fuentes a revisar (email, repositorios locales, servidor, papel escaneado, sistemas de negocio)
- Datos mínimos a capturar en el inventario: número único de contrato, partes, tipo, fecha de firma, fecha de inicio, fecha de vencimiento, valor, estado (activo/vencido/en negociación), responsable jurídico, responsable de negocio
- Cómo priorizar el inventario: comenzar por contratos de mayor valor económico, mayor riesgo operativo o próximos a vencer
- Indicadores del nivel de madurez de gestión contractual: desde nivel 0 (sin inventario) hasta nivel 4 (CLM integrado con sistemas de negocio con análisis predictivo)
- Cómo presentar el diagnóstico a dirección para justificar la inversión en un CLM

**Pilar 2 — Diseño del repositorio central de contratos**
Define la arquitectura de información del sistema:
- Taxonomía de contratos: categorías principales (compras, ventas, empleo, financiación, propiedad intelectual, acuerdos de colaboración) y subcategorías
- Metadatos estándar por contrato: campos obligatorios para que el contrato sea buscable, filtrable y útil para análisis
- Gestión de documentos y versiones: cómo manejar borradores, versiones negociadas, contrato final firmado y adendas
- Jerarquía de acceso: quién puede ver, editar o aprobar cada tipo de contrato (departamento legal, negocio, dirección)
- Integración con sistemas existentes: cómo vincular el repositorio CLM con el ERP (SAP, Oracle), el CRM (Salesforce) y el gestor documental (SharePoint)

**Pilar 3 — Automatización de alertas y flujos de trabajo**
El núcleo del valor del CLM es la automatización:
- Alertas de vencimiento y renovación: configuración de notificaciones a 180, 90, 60 y 30 días antes del vencimiento, con el responsable de negocio como receptor primario y el departamento legal como copia
- Alertas de obligaciones contractuales: hitos de entrega, revisiones de precio, auditorías comprometidas, opciones de compra
- Flujo de aprobación de contratos nuevos: desde la solicitud de negocio → revisión legal → negociación → aprobación por poderes → firma → archivo
- Firma electrónica integrada: cómo configurar la firma cualificada (DocuSign, Adobe Sign, Signaturit) dentro del flujo del CLM
- Automatización de contratos estándar: plantillas con campos variables para contratos repetitivos (NDAs, órdenes de compra, contratos de servicio básicos) que el negocio puede generar sin intervención legal

**Pilar 4 — Análisis e inteligencia contractual**
El CLM como fuente de inteligencia de negocio:
- Reporting de cartera de contratos: valor total comprometido, distribución por tipo y departamento, contratos próximos a vencer por mes
- Análisis de riesgos contractuales: identificación de contratos con cláusulas de responsabilidad ilimitada, sin SLA definido o sin cláusula de resolución
- IA para análisis de contratos: cómo usar herramientas de contract review con IA (LawGeex, Kira, Luminance o Claude directamente) para identificar desviaciones de la posición estándar en contratos recibidos de terceros
- Métricas del proceso contractual: tiempo medio de ciclo de aprobación, contratos aprobados por mes, desviaciones del playbook estándar
- Informe trimestral de gestión contractual para el comité de dirección

**Pilar 5 — Implementación y gestión del cambio**
Cómo implantar el CLM con éxito en la organización:
- Selección de herramienta CLM: criterios de evaluación (volumen de contratos, necesidad de integración, presupuesto, complejidad del flujo de aprobación); herramientas por segmento (Ironclad, ContractPodAi, Juro para medianas empresas; SAP CLM, Icertis para grandes corporaciones; Notion/Airtable como solución mínima viable)
- Plan de implantación en 90 días: fases de migración de contratos existentes, configuración del sistema, formación del equipo legal y de negocio
- Gestión del cambio: cómo conseguir adopción del CLM por parte de las áreas de negocio que antes enviaban contratos por email
- Mantenimiento del sistema: proceso de revisión periódica de plantillas, actualización de la taxonomía y auditoría de calidad del repositorio

**Formato de salida:**
Organiza la respuesta en cinco pilares numerados con subsecciones claras. Proporciona una tabla comparativa de herramientas CLM por segmento de empresa (tamaño y necesidades). Incluye una lista de los 10 campos de metadatos imprescindibles para cualquier contrato. Añade un plan de implementación de CLM en formato de hitos por semana (semanas 1-12).
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementación de CLM y digitalización del área legal',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Contratos de SLA y acuerdos de servicio para Customer Success',
                'description'      => 'Aprende a redactar, negociar y gestionar acuerdos de nivel de servicio (SLA) y contratos de servicio al cliente que fijen expectativas claras, protejan a tu empresa de compromisos inalcanzables y construyan relaciones de confianza a largo plazo. Diseña SLAs que sean un activo comercial, no solo un requisito contractual.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Success con experiencia en negociación de contratos de servicio y diseño de acuerdos de nivel de servicio. Guíame para redactar, negociar y gestionar SLAs y contratos de servicio que protejan a mi empresa, cumplan las expectativas del cliente y sean ejecutables en la práctica.

**Contexto:**
Trabajo en Customer Success o en la dirección de operaciones de una empresa que presta servicios a clientes empresariales (SaaS, servicios gestionados, consultoría o soporte técnico). Necesito SLAs que sean comercialmente competitivos, operativamente alcanzables y jurídicamente defendibles.

**Sección 1 — Qué es un SLA y qué no es**
Establece las bases conceptuales:
- Diferencia entre MSA (Master Service Agreement), Order Form y SLA: cada documento tiene su función y no deben mezclarse
- SLA como compromiso bilateral: el cliente también tiene obligaciones (proporcionar información, responder en plazo, dar acceso) cuyo incumplimiento suspende los SLAs del proveedor
- Tipos de SLA: basados en disponibilidad del servicio, en tiempos de respuesta/resolución de incidencias, en calidad de entrega de proyectos, en métricas de negocio (adoption, outcomes)
- Por qué los SLAs genéricos son un riesgo: compromisos que aplican igualmente a todos los clientes sin considerar el contexto real suelen derivar en incumplimientos sistemáticos
- SLA interno vs externo: cómo alinear los compromisos externos con clientes con los acuerdos operativos internos entre equipos (OLAs - Operational Level Agreements)

**Sección 2 — Diseño de SLAs de soporte técnico**
El tipo de SLA más frecuente en entornos SaaS y servicios:
- Definición de niveles de prioridad de incidencias: cómo definir P1/P2/P3/P4 de forma objetiva (criterios basados en impacto en negocio, número de usuarios afectados, existencia de workaround)
- Métricas de SLA de soporte: tiempo de primera respuesta vs tiempo de resolución vs tiempo hasta workaround disponible; diferencias y cuándo comprometerse con cada una
- Tiempos realistas por nivel de prioridad: qué compromisos son sostenibles para un equipo de soporte de tamaño medio
- Horario de servicio: cobertura 24/7 vs horario de oficina vs "follow the sun"; cómo reflejarlo en el SLA de forma que no haya ambigüedad
- Exclusiones de SLA: qué situaciones suspenden el reloj del SLA (maintenimiento programado, incidencias causadas por el cliente, fuerza mayor, incidencias en componentes de terceros)

**Sección 3 — SLA de disponibilidad del servicio**
Para empresas que ofrecen plataformas o servicios gestionados:
- Cómo expresar la disponibilidad: 99,9% = 8,7h de caída/año; 99,5% = 43,8h; 99% = 87,6h; cuál es realista para tu arquitectura
- Método de medición: cómo calcular la disponibilidad (tiempo total del período - tiempo de caída) / tiempo total, excluyendo mantenimientos programados
- Mantenimiento programado: obligación de notificación anticipada (48-72h), ventanas de mantenimiento preferidas (madrugada o fin de semana), no computable en el SLA
- Degradación de servicio: qué pasa cuando el servicio está disponible pero lento o con funcionalidades degradadas; cómo incluirlo en el SLA
- Créditos de SLA por incumplimiento: estructura típica (% del fee mensual por cada hora de caída por encima del umbral), cómo calcular y acreditar automáticamente

**Sección 4 — Negociación de SLAs con clientes corporativos**
Estrategia para negociar compromisos equilibrados:
- Cómo responder a un cliente que pide un SLA más estricto del que puedes ofrecer: alternativas (SLA diferenciado por plan, servicio premium con precio adicional, redefinición de la métrica)
- Cómo presentar los límites de tu SLA de forma positiva: enfatizar el track record real, la arquitectura de alta disponibilidad y el proceso de respuesta
- Cláusula de remedio exclusivo: el crédito de SLA es la única indemnización por el incumplimiento del SLA; cómo redactarla para excluir reclamaciones de daños y perjuicios adicionales
- SLA as a commercial tool: cómo usar SLAs más generosos como argumento de venta y diferenciador frente a la competencia en el proceso de negociación

**Sección 5 — Gestión operativa del cumplimiento del SLA**
Cierra el ciclo entre el compromiso y la ejecución:
- Dashboard de cumplimiento de SLA: cómo monitorizar en tiempo real el estado de cada ticket vs el SLA comprometido
- Proceso de escalada cuando un ticket está en riesgo de superar el SLA: alertas automáticas, escalada al manager, comunicación proactiva al cliente
- Revisión mensual de cumplimiento: cómo calcular el SLA achievement del mes y comunicarlo al cliente antes de que lo pida
- Quarterly Business Review (QBR) orientado al SLA: cómo presentar las métricas de servicio, explicar las incidencias relevantes y planificar mejoras
- Proceso de mejora continua: cómo usar los datos de incumplimientos de SLA para identificar problemas de proceso o capacidad y justificar inversión en mejoras

**Formato de salida:**
Organiza la respuesta en cinco secciones numeradas. Proporciona una tabla de referencia de tiempos de SLA por nivel de prioridad (P1-P4) con rangos mínimo, típico y premium. Incluye ejemplos de redacción contractual para las cláusulas más críticas del SLA. Añade una checklist de "10 cosas que debo verificar antes de comprometer un SLA con un nuevo cliente".
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseño y negociación de SLAs con clientes empresariales',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Contratos freelance: protección legal, gestión de cobros y resolución de disputas',
                'description'      => 'Aprende a redactar contratos de servicios freelance que protejan tu trabajo, garanticen el cobro y definan un proceso claro para resolver disputas. Evita los errores contractuales más comunes que llevan a trabajar sin cobrar. Construye relaciones profesionales duraderas sobre bases jurídicas sólidas desde el primer proyecto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en contratos de servicios profesionales independientes con experiencia asesorando a freelancers y trabajadores autónomos. Guíame para redactar, personalizar y gestionar mis contratos de servicios de forma que protejan mi trabajo, aseguren mis ingresos y establezcan relaciones profesionales sobre bases sólidas.

**Contexto:**
Soy freelancer o autónomo que presta servicios profesionales (diseño, desarrollo, consultoría, redacción, fotografía, marketing u otros). Quiero dejar de trabajar con acuerdos verbales o emails informales y empezar a operar con contratos que me protejan legalmente sin crear una barrera de entrada innecesaria con mis clientes.

**Parte 1 — Estructura del contrato de servicios freelance**
Explícame qué debe incluir mi contrato base:
- Identificación de las partes: datos completos del autónomo (nombre, DNI/NIF, domicilio, número de autónomo o empresa si es SL) y del cliente (persona física o jurídica, representante con facultades de contratar)
- Objeto del contrato: descripción del servicio, qué se entrega (entregables concretos), en qué formato y a través de qué canal
- Alcance y exclusiones: qué NO incluye el contrato es tan importante como lo que sí incluye; cómo delimitar el número de revisiones, los cambios de dirección y el soporte post-entrega
- Plazos: fecha de inicio, hitos intermedios si aplica, fecha de entrega del trabajo final; qué pasa si el cliente retrasa sus responsabilidades (briefing, aprobaciones, materiales) y cómo eso afecta al plazo
- Propiedad intelectual: quién es dueño del trabajo hasta el pago completo; cuándo y bajo qué condiciones se transfieren los derechos al cliente

**Parte 2 — Condiciones de pago y mecanismos de protección**
Diseña las cláusulas económicas que me protegen:
- Estructura de pagos: por qué el anticipo es innegociable (entre el 30% y el 50% según el tipo de servicio y duración del proyecto) y cómo presentarlo al cliente sin generar fricción
- Hitos de pago vinculados a entregables: cómo definir un calendario de pagos que avance en paralelo al trabajo y no deje todo el riesgo al final
- Retención de entregables: derecho del freelancer a no entregar los archivos definitivos, el código final o el acceso a los activos hasta recibir el último pago
- Kill fee o tarifa de cancelación: cómo compensar el trabajo realizado y el bloqueo de agenda si el cliente cancela el proyecto a mitad; estructura típica (25-50% del total pendiente)
- Intereses por retraso en el pago: cómo incluir una cláusula de interés de demora (referencia al tipo oficial del BCE más un diferencial) y por qué es disuasoria aunque rara vez se aplique
- Plazos de pago máximos y consecuencias: qué ocurre si el cliente no paga en el plazo acordado (suspensión del trabajo, resolución del contrato)

**Parte 3 — Gestión del proceso de trabajo y revisiones**
Evita el scope creep contractualmente:
- Definición de "revisión": qué es una revisión (ajuste dentro del concepto aprobado) vs qué es un cambio de dirección (nueva propuesta que se factura aparte); cómo redactarlo de forma que el cliente lo entienda antes de firmar
- Número de rondas de revisión incluidas: cómo determinarlo según el tipo de proyecto (diseño: 2-3 rondas; redacción: 1-2; consultoría: reunión de validación)
- Proceso de aprobación: qué se considera aprobado (aprobación expresa por escrito, silencio positivo tras X días hábiles); importancia de obtener aprobaciones por email aunque el contrato esté en papel
- Gestión de peticiones fuera del alcance: lenguaje profesional para responder a solicitudes adicionales, cómo emitir un "mini-presupuesto" de cambio de alcance y cómo documentarlo como adenda al contrato original

**Parte 4 — Cláusulas de protección adicional para el freelancer**
Añade estas cláusulas que marcan la diferencia:
- Confidencialidad mutua: protege tanto los datos del cliente como tus métodos, herramientas y tarifa (el cliente no debe compartir tu precio con otros proveedores)
- Derecho de portfolio: usar el trabajo finalizado para mostrar en tu web, redes y propuestas futuras; qué hacer si el cliente quiere NDA total sobre el proyecto
- No competencia del cliente: protección frente al cliente que, tras conocer tu proceso, quiere hacer el trabajo internamente o contratar a alguien más barato con tu metodología
- Crédito de autoría: si el trabajo se publica públicamente, mencionarte como autor o proveedor
- Resolución del contrato por incumplimiento del cliente: qué constituye incumplimiento (impago, falta de materiales, comunicación interrumpida) y qué consecuencias tiene

**Parte 5 — Resolución de disputas y cobro de impagados**
Qué hacer cuando las cosas van mal:
- Escala de reclamación amistosa: recordatorio informal → recordatorio formal por email → burofax de requerimiento de pago → mediación
- Burofax de requerimiento: cuándo enviarlo, qué debe incluir (importe exacto, plazo para pagar, reserva de acciones legales), y por qué es el paso clave antes de cualquier acción judicial
- Mediación civil como alternativa al juzgado: cómo funciona, cuánto cuesta, cuándo es la mejor opción para un freelancer (cuando el importe no justifica un abogado pero supera el umbral del juicio verbal)
- Juicio monitorio: proceso judicial simplificado para reclamar deudas líquidas documentadas; sin abogado obligatorio hasta 2.000€, con él por encima; plazos aproximados; qué documentos necesitas (contrato, facturas, emails de aprobación)
- Prevención es mejor que cura: señales de alerta de clientes morosos (resistencia al anticipo, contratos verbales, prisa extrema para empezar, referencias dudosas) y cómo gestionarlas antes de comprometerse

**Formato de salida:**
Organiza la respuesta en cinco partes numeradas. Proporciona redacciones modelo de las cláusulas más importantes en español claro. Incluye una versión "cliente" (cómo presentar cada cláusula al cliente de forma no intimidante) para las cláusulas más sensibles. Añade una checklist de 12 puntos "antes de firmar cualquier proyecto freelance".
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Protección legal y gestión de cobros para freelancers',
                'vote_score'       => 45,
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
