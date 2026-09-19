<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills591Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing digital para industria papelera y artes gráficas con IA',
                'description'      => 'Desarrolla una estrategia de marketing B2B para empresas del sector papelero y de artes gráficas, diferenciando la oferta y generando leads cualificados en un mercado en transformación digital.',
                'prompt_content'   => <<<'EOT'
Actúa como consultor de marketing B2B especializado en industrias tradicionales en proceso de transformación digital, con experiencia en el sector papelero, de impresión y artes gráficas. Necesito desarrollar una estrategia de marketing completa para una empresa del sector que quiere modernizar su imagen, captar nuevos clientes y diferenciarse en un mercado con fuerte presión de precio y digitalización del consumo de papel.

Contexto de la empresa:
- Tipo de empresa: [fabricante de papel / imprenta offset y digital / empresa de packaging / distribuidor de materiales gráficos / estudio de diseño e impresión]
- Productos o servicios principales: [DESCRIBIR]
- Mercado objetivo: [editoriales / agencias de publicidad / empresas de packaging / administración pública / sector sanitario / mixto]
- Principal reto de negocio: [caída de la demanda de papel impreso / competencia de plataformas online de impresión / dificultad para captar nuevos clientes / posicionarse en packaging sostenible]
- Presupuesto de marketing disponible: [IMPORTE]
- Canales de marketing actuales: [cuáles usa ya]

Desarrolla la estrategia con los siguientes componentes:

1. ANÁLISIS Y POSICIONAMIENTO
- Analiza las principales tendencias del sector: caída del papel de impresión vs crecimiento del packaging, auge del papel reciclado y sostenible, impresión digital personalizada, demanda de pequeños tirajes
- Define el posicionamiento diferencial de la empresa: qué la hace única frente a imprentas online low-cost y frente a grandes grupos de impresión
- Redacta la propuesta de valor para cada segmento de cliente objetivo: agencia de publicidad que busca calidad y rapidez, empresa que necesita packaging sostenible, editorial que busca tirajes cortos con alta calidad
- Identifica los argumentos anti-digitalización: por qué el papel físico sigue siendo relevante en determinados contextos (lujo, farmacia, alimentación, eventos, libros)

2. ESTRATEGIA DE CONTENIDO Y SEO
- Propón un plan de contenido anual con 40 piezas: artículos sobre tendencias de impresión, casos de éxito con clientes (packaging premiado, libro publicado, catálogo exitoso), guías técnicas (cómo preparar un archivo para imprenta, diferencias entre papeles para packaging), noticias del sector
- Define las palabras clave prioritarias para SEO: "imprenta offset Barcelona", "packaging sostenible personalizado", "impresión digital tirajes cortos", "papel reciclado para embalaje"
- Diseña la estrategia de LinkedIn para empresa B2B: tipo de contenido, frecuencia, cómo mostrar el proceso de producción y los acabados especiales como diferenciador
- Propón la estrategia en Instagram para mostrar el trabajo gráfico de la empresa: qué publicar, cómo mostrar la calidad impresa en formato digital, hashtags del sector

3. GENERACIÓN DE LEADS B2B
- Diseña el funnel de captación de clientes: desde búsqueda en Google o LinkedIn hasta solicitud de presupuesto y primer pedido
- Propón una estrategia de Account-Based Marketing para los 30 clientes objetivo más relevantes: cómo identificarlos, cómo contactarlos, qué contenido personalizado crear
- Crea un lead magnet para captar contactos: guía descargable "Cómo elegir el papel adecuado para tu packaging", calculador online de coste de impresión, muestra física enviada a domicilio para clientes cualificados
- Define la estrategia de email marketing: secuencia de nurturing para leads que han descargado el lead magnet, newsletter mensual con novedades del sector y de la empresa

4. FERIAS Y PRESENCIA EN EL SECTOR
- Propón las ferias y eventos del sector más relevantes: Graphispag, Drupa, Packaging Innovations, IPEX, ferias de artes gráficas locales
- Diseña la estrategia de presencia en feria: qué mostrar en el stand (muestras táctiles de acabados especiales, demo de proceso de impresión, portfolio de trabajos), cómo cualificar leads en feria, cómo hacer seguimiento post-feria
- Define la estrategia de relaciones con prescriptores: diseñadores gráficos (que recomiendan la imprenta a sus clientes), agencias de publicidad, consultores de packaging
- Propón cómo participar en premios del sector para ganar visibilidad y credibilidad

5. SOSTENIBILIDAD COMO DIFERENCIADOR
- Diseña la estrategia de comunicación de sostenibilidad: certificaciones relevantes (FSC, PEFC, ISO 14001), uso de tintas vegetales, papel reciclado, reducción de residuos en proceso
- Propón cómo comunicar el compromiso sostenible sin greenwashing: qué afirmaciones son verificables, cómo documentar el impacto ambiental real
- Define la línea de productos sostenibles como categoría específica con comunicación y precio diferenciados
- Crea el argumento de venta de la sostenibilidad para empresas que necesitan cumplir con objetivos de responsabilidad corporativa

6. MÉTRICAS Y ROI
- Define los KPIs de marketing del sector gráfico: leads generados, coste por lead, tasa de conversión, ticket medio por tipo de producto, retención de clientes (porcentaje que repite pedido)
- Diseña el presupuesto de marketing detallado con distribución recomendada por canal
- Propón cómo medir el impacto del contenido: visualizaciones, descargas, solicitudes de presupuesto atribuidas a cada pieza de contenido
- Crea el informe mensual de marketing adaptado a la realidad de una empresa industrial

Entrega el plan de marketing completo con el calendario editorial del primer trimestre, el plan de captación de los primeros 10 clientes objetivo y los KPIs con valores de referencia realistas para el sector.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Estrategia de marketing B2B para empresas del sector papelero y de artes gráficas',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Automatización de procesos en artes gráficas con IA',
                'description'      => 'Implementa soluciones de automatización para preimpresión, gestión de pedidos y control de calidad en empresas de artes gráficas, reduciendo tiempos y errores en la producción.',
                'prompt_content'   => <<<'EOT'
Actúa como ingeniero de software y consultor de transformación digital especializado en la industria de las artes gráficas y la impresión. Necesito diseñar e implementar un sistema de automatización que cubra los procesos más críticos de una empresa de artes gráficas: recepción y validación de archivos de cliente, gestión de pedidos, preimpresión automatizada y control de calidad de salida.

Contexto de la empresa:
- Tipo de empresa: [imprenta offset / imprenta digital / empresa de packaging / estudio de reprografía]
- Volumen de pedidos diarios: [NÚMERO]
- Procesos actuales más lentos o con más errores: [validación de archivos / presupuestación / imposición y preimpresión / control de color / gestión de entregas]
- Software actual: [ERP de gestión, software de preimpresión como Enfocus Switch, Agfa Apogee, Prinect, o ninguno específico]
- Integraciones necesarias: [tienda online, sistema de facturación, maquinaria CTP, flujo JDF/JMF]
- Equipo técnico disponible: [informático interno / proveedor externo / solo operarios de preimpresión]

Desarrolla el plan de automatización con los siguientes módulos:

1. PORTAL DE RECEPCIÓN Y VALIDACIÓN DE ARCHIVOS
- Diseña el flujo de recepción de archivos del cliente: portal web de upload, validación automática de especificaciones técnicas (resolución mínima, espacio de color, sangrado, zona de seguridad, fuentes incrustadas, tipo de PDF)
- Propón el sistema de preflight automatizado: herramientas recomendadas (Enfocus PitStop, Acrobat Preflight, PDF Checkpoint), qué verificaciones ejecutar, cómo clasificar errores en bloqueantes vs advertencias
- Diseña el informe de preflight al cliente: qué información incluir, cómo comunicar los errores de forma comprensible para un diseñador no técnico, cómo guiar la corrección
- Define el flujo de reenvío de archivo corregido: cómo vincular la nueva versión al pedido existente, cómo registrar la versión aceptada

2. SISTEMA DE GESTIÓN DE PEDIDOS Y PRESUPUESTACIÓN AUTOMÁTICA
- Diseña el sistema de presupuestación automática online: calculador basado en parámetros (formato, gramaje, tirada, número de páginas, acabados, plazo), integración con tarifas de papel actualizadas y costes de producción
- Propón la arquitectura del ERP de producción gráfica: gestión de pedidos, estados del pedido (recibido, en preflight, aprobado, en producción, terminado, enviado), asignación a máquina, control de tiempos
- Define la integración con el flujo JDF/JMF: cómo enviar automáticamente los parámetros del trabajo a la maquinaria, cómo recibir el estado de producción en tiempo real
- Diseña el sistema de notificaciones al cliente: confirmación de pedido, aceptación del archivo, entrada en producción, envío con número de seguimiento

3. PREIMPRESIÓN Y PREPARACIÓN DE ARCHIVOS AUTOMATIZADA
- Describe cómo automatizar la imposición de páginas: software recomendado (Preps, Imposition Publisher, Quite Imposing), plantillas de imposición por tipo de trabajo (folleto, libro, packaging plano troquel)
- Propón la automatización del paso de color: gestión de perfiles ICC, conversión automática de RGB a CMYK según el perfil de prensa, verificación de tintas planas Pantone y su equivalente CMYK
- Diseña la generación automática de pruebas digitales para aprobación del cliente: formato PDF con marcas de impresión, visualización de páginas individuales y del pliego completo, proceso de aprobación online con firma electrónica
- Define el flujo de salida a CTP: generación automática de planchas, verificación de la resolución de salida, registro de planchas en el sistema de trazabilidad

4. CONTROL DE CALIDAD Y MEDICIÓN DE COLOR
- Diseña el sistema de control de calidad en prensa: frecuencia de medición de densidades, uso de espectrofotómetro integrado en prensa, comparación con perfil de color aprobado
- Propón el registro automatizado de datos de color: guardado de lecturas por pedido, alerta al operario cuando la desviación supera el ΔE permitido, informe de calidad de color por tirada
- Define el sistema de inspección de defectos en línea: uso de cámaras de inspección en la línea de acabado, detección de manchas, roturas, mala guillotina
- Crea el informe de calidad post-producción: datos de color alcanzados, incidencias detectadas y resueltas, aprobación o rechazo de la tirada

5. INTEGRACIÓN CON TIENDA ONLINE Y LOGÍSTICA
- Propón la arquitectura de integración entre la tienda online de la imprenta y el sistema de producción: qué plataforma de ecommerce usar (WooCommerce con plugins de impresión, Printess, PrintShop, o desarrollo a medida), cómo sincronizar pedidos, estados y tracking
- Diseña el módulo de gestión de envíos: integración con transportistas (MRW, GLS, DHL), generación automática de etiqueta de envío al marcar el pedido como terminado, notificación automática al cliente con el enlace de seguimiento
- Define el sistema de gestión de entregas urgentes: cómo identificar y priorizar pedidos exprés en el flujo de producción, cómo comunicar la disponibilidad de entrega urgente en la tienda
- Propón el proceso de gestión de devoluciones e incidencias de entrega: cuándo reimprimir, cuándo reembolsar, cómo registrar la incidencia para análisis de calidad

6. ANALÍTICA Y MEJORA CONTINUA
- Define el cuadro de mando de producción: pedidos en cada estado, tiempos medios por fase, tasa de errores de archivo por cliente, tiempo medio de aprobación de prueba, OEE (Overall Equipment Effectiveness) de cada máquina
- Propón el análisis de rentabilidad por tipo de trabajo: qué trabajos generan más margen, cuáles consumen más tiempo de preimpresión, cuáles generan más incidencias
- Diseña el sistema de mejora continua: cómo analizar las causas de los errores más frecuentes, cómo actualizar las plantillas de preflight en consecuencia, cómo reducir el tiempo de presupuestación

Incluye diagramas de flujo en texto para los procesos principales y una estimación del ahorro de tiempo esperado por cada automatización implementada.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Automatización de preimpresión, pedidos y control de calidad en artes gráficas',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño gráfico asistido por IA para imprenta y packaging',
                'description'      => 'Optimiza el proceso de diseño para producción impresa y packaging usando IA: desde el briefing del cliente hasta la preparación de archivos listos para imprenta con especificaciones técnicas correctas.',
                'prompt_content'   => <<<'EOT'
Actúa como director de arte y diseñador gráfico senior especializado en diseño para producción impresa, packaging y artes gráficas. Necesito optimizar el flujo de trabajo de diseño en un estudio o imprenta para reducir el tiempo desde el briefing del cliente hasta la entrega de archivos listos para imprenta, usando IA y herramientas modernas para acelerar las fases de conceptualización, generación de variantes y preparación técnica.

Contexto del estudio o imprenta:
- Tipo de producción: [etiquetas y packaging / catálogos y folletos corporativos / libros y publicaciones / señalética / mixto]
- Volumen de proyectos activos simultáneos: [NÚMERO]
- Software actual: [Adobe Illustrator, InDesign, Photoshop, Affinity Publisher, Figma u otro]
- Principal problema de tiempo: [briefing poco definido / revisiones excesivas / preparación técnica de archivos / comunicación con el cliente]
- Equipo de diseño: [número de diseñadores, nivel de experiencia]
- Tipo de cliente más frecuente: [empresa con departamento de marketing / pequeño negocio sin diseñador propio / agencia de publicidad]

Desarrolla el flujo de trabajo optimizado con los siguientes componentes:

1. OPTIMIZACIÓN DEL BRIEFING Y CONCEPTUALIZACIÓN
- Diseña un formulario de briefing creativo exhaustivo para proyectos de diseño impreso: objetivo de la pieza, público objetivo, mensaje principal, tono y estilo visual deseado, referencias que le gustan al cliente, restricciones (colores corporativos, elementos obligatorios), formato final, tirada y acabados previstos
- Propón cómo usar IA generativa (Midjourney, Adobe Firefly, DALL-E) en la fase de conceptualización: para generar moodboards visuales rápidos, para explorar estilos alternativos antes de invertir tiempo en el diseño real, para comunicar al cliente el concepto antes de desarrollarlo
- Define el proceso de validación de concepto con el cliente: qué presentar, en qué formato, cómo recoger feedback estructurado que facilite la iteración
- Diseña el proceso de generación de variantes: cuántas opciones presentar, cómo diferenciadas entre sí, cómo guiar al cliente hacia la decisión

2. SISTEMA DE DISEÑO Y PLANTILLAS REUTILIZABLES
- Propón la arquitectura de un sistema de plantillas reutilizables para los formatos más frecuentes: folleto A4 plegado a 3, catálogo A5 8 páginas, etiqueta de packaging cilíndrico, packaging plano con troquel, flyer A6, roll-up
- Define cómo estructurar las plantillas en Adobe InDesign o Affinity Publisher para máxima reutilización: estilos de párrafo y carácter, estilos de objeto, capas organizadas, guías de sangrado y zona de seguridad ya configuradas
- Diseña el sistema de gestión de activos del cliente: dónde almacenar logos, fotos, tipografías y colores de cada cliente para encontrarlos rápidamente en proyectos futuros
- Propón cómo usar la IA de Adobe Sensei o similares para: generar variaciones de layout automáticamente, rellenar texto de maqueta con contenido temático relevante, escalar imágenes sin pérdida de calidad

3. FLUJO DE TRABAJO DE PRODUCCIÓN IMPRESA
- Diseña el flujo completo de un proyecto de diseño para imprenta: briefing → concepto → primer boceto → revisión cliente → refinamiento → revisión final → preparación técnica → envío a imprenta
- Define los entregables en cada fase: qué formato entrega el diseñador al cliente en cada etapa, qué feedback se espera, qué aprobación se necesita para avanzar
- Propón el proceso de gestión de revisiones: sistema de numeración de versiones, cómo marcar los cambios entre versiones, cómo evitar confusión entre versiones del cliente
- Define el proceso de aprobación final del cliente antes de ir a imprenta: qué incluye el documento de aprobación (PDF de prueba con marcas de impresión, declaración de que el cliente asume responsabilidad del contenido aprobado)

4. ESPECIFICACIONES TÉCNICAS Y PREPARACIÓN DE ARCHIVOS
- Diseña una guía de especificaciones técnicas estándar para los formatos más comunes: tamaño con sangrado, resolución de imágenes (300 dpi mínimo para CMYK, 72 dpi para pantalla), espacio de color (CMYK o RGB según destino), tintas planas vs proceso, tipo de PDF de entrega (PDF/X-1a, PDF/X-3, PDF/X-4)
- Propón un checklist de preflight que el diseñador ejecuta antes de enviar el archivo: resolución de imágenes enlazadas, fuentes incrustadas, zona de sangrado correcta, elementos en zona de seguridad, overprint configurado correctamente, tintas usadas (sin colores RGB si es para offset)
- Define el proceso de compresión y preparación del paquete final: estructura de carpetas, archivos incluidos (PDF de impresión, fuentes, imágenes enlazadas, muestra de color), nombre de archivo estándar
- Crea la guía de acabados especiales para diseñadores: cómo preparar el archivo para barniz UV, plastificado, troquelado, gofrado, hot stamping, para que la imprenta pueda procesarlo correctamente

5. COMUNICACIÓN CON EL CLIENTE Y PRESENTACIÓN DE DISEÑO
- Diseña el proceso de presentación de diseño al cliente: cómo crear mockups fotorrealistas del producto final (embalaje en 3D, folleto sobre mesa, revista en mano) usando herramientas de mockup o IA
- Propón la plantilla de presentación de diseño: portada con nombre del proyecto, contexto del briefing, propuesta creativa con argumentación, visualización del resultado final, próximos pasos y plazos
- Define cómo comunicar decisiones técnicas de diseño al cliente de forma comprensible: por qué se usa una tipografía en lugar de otra, por qué un formato en lugar de otro, cómo afectan los acabados al coste y al impacto visual
- Crea el protocolo de gestión de cliente difícil: cómo manejar peticiones contrarias a las buenas prácticas de diseño o que comprometan la calidad de impresión

6. MÉTRICAS DE PRODUCTIVIDAD Y CALIDAD
- Define los KPIs del estudio de diseño: horas por proyecto por tipo de trabajo, número de rondas de revisión promedio, tasa de errores de archivo en preflight, satisfacción del cliente (NPS)
- Propón cómo reducir las rondas de revisión: qué cambiar en el proceso de briefing y presentación para alinear expectativas antes de diseñar
- Diseña el informe mensual de productividad del estudio: proyectos completados, ingresos, horas por proyecto, proyectos con más revisiones de lo esperado
- Crea el proceso de onboarding de nuevos diseñadores al sistema de trabajo del estudio: cómo transmitir los estándares técnicos, las plantillas y el proceso de trabajo

Entrega los checklists, plantillas de briefing y guías técnicas listos para usar, con ejemplos concretos para cada tipo de trabajo gráfico más frecuente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Optimización del flujo de diseño gráfico para producción impresa y packaging',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas B2B en industria papelera y de impresión con IA',
                'description'      => 'Desarrolla un proceso de venta consultiva para comercializar papel, materiales de impresión y servicios gráficos a clientes corporativos, con scripts y estrategias de fidelización.',
                'prompt_content'   => <<<'EOT'
Actúa como director comercial con experiencia en ventas B2B en el sector papelero, de impresión y artes gráficas. Necesito desarrollar un proceso de venta consultiva completo para comercializar papel, materiales gráficos o servicios de impresión a empresas de mediana y gran dimensión, diferenciándose de la competencia low-cost online y generando relaciones comerciales duraderas.

Contexto del equipo comercial:
- Empresa: [fabricante de papel / distribuidor de materiales gráficos / imprenta que vende servicios / empresa de packaging]
- Productos o servicios a vender: [papel de impresión / cartón para packaging / servicios de impresión personalizados / consumibles para impresoras de gran formato]
- Tipo de cliente objetivo: [agencias de publicidad / editoriales / empresas de packaging / distribuidores / empresas corporativas con necesidad propia de impresión]
- Ticket medio por cliente: [IMPORTE anual]
- Principal reto comercial: [precio bajo de competencia online / clientes que compran por precio sin valorar calidad / dificultad para acceder a grandes cuentas]
- Equipo comercial: [número de comerciales, zona geográfica]

Desarrolla el proceso de venta con los siguientes componentes:

1. SEGMENTACIÓN Y CUALIFICACIÓN DE CLIENTES
- Define el perfil de cliente ideal (ICP) para cada tipo de producto: qué sectores industriales, qué tamaño de empresa, qué volumen de consumo, qué criterios de compra (calidad, precio, plazo, sostenibilidad)
- Propón la segmentación de la cartera actual: clientes A (alta facturación y alta rentabilidad), B (alto potencial de crecimiento), C (bajo potencial, precio muy sensible), y estrategia diferente para cada segmento
- Diseña el sistema de detección de clientes potenciales: cómo identificar empresas con alto consumo de materiales impresos, cómo detectar las que están descontentas con su proveedor actual
- Define los criterios de descualificación: qué tipo de clientes no son rentables (volumen demasiado pequeño, sensibilidad extrema al precio, sector en declive)

2. PRIMER CONTACTO Y REUNIÓN DE DESCUBRIMIENTO
- Diseña el script de llamada de prospección fría a un responsable de compras de impresos: cómo atraer su atención en los primeros 30 segundos, qué argumento diferencial mencionar, cómo conseguir una reunión
- Propón el email de presentación que se envía antes de la primera reunión: qué incluir, qué extensión, qué argumento de valor usar
- Crea el guión de la reunión de descubrimiento de 45 minutos: preguntas para entender el proceso de compra actual, volúmenes, problemas con el proveedor actual, criterios de decisión, quién influye en la compra
- Define cómo identificar el "dolor" del cliente: ¿le ha fallado un proveedor en plazo? ¿tiene problemas de calidad de color? ¿necesita más variedad de papeles? ¿busca un proveedor sostenible?

3. PROPUESTA Y DEMOSTRACIÓN DE PRODUCTO
- Diseña el proceso de presentación de muestras: cómo preparar un kit de muestras personalizadas según el negocio del cliente, cómo hacer una demostración de calidad de impresión en las instalaciones del cliente
- Propón la estructura de la propuesta comercial para un cliente de packaging: comprensión de necesidades, solución propuesta (materiales, especificaciones técnicas, gramajes), comparativa de opciones, precio, condiciones de servicio, credenciales de la empresa
- Define el argumento de valor de la sostenibilidad: cómo presentar el papel certificado FSC/PEFC como diferenciador para empresas con compromisos ESG, cómo calcular el impacto de usar papel reciclado
- Diseña la propuesta de prueba piloto: cómo conseguir que un nuevo cliente pruebe con un primer pedido pequeño sin riesgo, cómo garantizar el resultado para generar confianza

4. GESTIÓN DE OBJECIONES DE PRECIO
- Diseña respuestas para las 8 objeciones de precio más frecuentes en el sector: "en internet lo encuentro más barato", "mi proveedor actual me da mejor precio", "tengo que reducir costes de impresos", "necesito pedidos mínimos menores", "no sé si merece la pena la diferencia de calidad"
- Propón la estrategia de defensa del precio: cómo argumentar el coste total (calidad + servicio + plazo + garantía + sostenibilidad) frente al precio por kilo o por hoja
- Define cuándo ceder en precio y cuándo no: qué concesiones son posibles sin destruir el margen, cómo contrarrestar un descuento con compromiso de volumen o plazo de pago
- Diseña la propuesta de coste total de propiedad: cómo demostrar que un papel de mayor calidad puede reducir el coste final por reducción de mermas o de incidencias de impresión

5. FIDELIZACIÓN Y CRECIMIENTO DE CUENTA
- Diseña el plan de account management para los clientes A: frecuencia de visita, revisión anual de necesidades, propuesta de nuevos productos, invitaciones a eventos del sector
- Propón el programa de fidelización para clientes recurrentes: descuentos por volumen anual, acceso a muestras anticipadas de nuevos productos, formación en nuevos materiales, servicio prioritario de atención
- Define el proceso de detección temprana de riesgo de pérdida de cliente: señales de alerta (reducción de pedidos, retrasos en el pago, menos contacto), cómo actuar ante estas señales
- Crea el plan de upselling y cross-selling: cómo detectar oportunidades para ampliar el negocio con cada cliente, qué nuevos productos o servicios ofrecerles según su perfil de compra

6. HERRAMIENTAS Y MÉTRICAS COMERCIALES
- Propón el CRM y las herramientas de seguimiento para el equipo comercial del sector gráfico: cómo registrar visitas, propuestas, pedidos y seguimientos, qué campos son esenciales en la ficha de cliente
- Define los KPIs del equipo comercial: número de visitas semanales, propuestas presentadas, tasa de conversión, ticket medio, crecimiento de cuenta, tasa de retención
- Diseña el informe semanal del comercial: qué informar, cómo evaluar el desempeño, cómo identificar necesidades de apoyo o formación
- Propón el plan de formación continua del equipo comercial: actualización en nuevos papeles y acabados, formación técnica básica de impresión, técnicas de venta consultiva, tendencias de sostenibilidad en el sector

Entrega todos los scripts y plantillas listos para usar, con variantes según el tipo de producto y el perfil del interlocutor en la empresa cliente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Proceso de venta consultiva B2B para sector papelero y de artes gráficas',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de catálogos de productos papeleros con IA',
                'description'      => 'Diseña un sistema de gestión de catálogos de productos para distribuidores de papel y materiales gráficos, automatizando la actualización de fichas, precios y disponibilidad en múltiples canales.',
                'prompt_content'   => <<<'EOT'
Actúa como product manager especializado en gestión de catálogos de productos y comercio B2B para distribuidores de materiales industriales y gráficos. Necesito diseñar un sistema completo de gestión de catálogo de productos para una empresa distribuidora de papel, cartón y materiales para artes gráficas que vende a través de múltiples canales: tienda online B2B, fuerza de ventas directa, y distribuidores de zona.

Contexto de la empresa:
- Número de referencias en catálogo: [NÚMERO de SKUs activos]
- Tipos de productos: [papel de impresión / cartón ondulado / materiales para gran formato / consumibles de impresión / papel especial para packaging]
- Canales de venta: [tienda online B2B / pedido por email o teléfono / comerciales de campo / distribuidores regionales]
- Principal problema del catálogo actual: [dificultad para mantener precios actualizados / fichas de producto incompletas o desactualizadas / clientes que no encuentran lo que buscan / sincronización entre canales]
- Sistema actual: [ERP, plataforma de ecommerce B2B, PIM si existe]
- Mercado: [España / internacional con varios idiomas]

Desarrolla el sistema de gestión de catálogo con los siguientes componentes:

1. ARQUITECTURA DEL CATÁLOGO Y TAXONOMÍA
- Diseña la estructura jerárquica del catálogo: familias de productos (papel de impresión, papel especial, cartón, materiales de gran formato), subfamilias, categorías específicas
- Define los atributos de ficha de producto para cada tipo: para papel de impresión (gramaje, formato, tipo de acabado superficial, opacidad, blancura, certificaciones), para cartón de packaging (calidad, ondulado, resistencia a la compresión, recubrimiento), para gran formato (base, gramaje, compatibilidad con tintas)
- Propón el sistema de codificación de referencias: estructura del código de producto que permita identificar familia, subfamilia, gramaje y formato con solo leer el código
- Define la estrategia de gestión de variantes: cómo modelar un papel que existe en 5 gramajes y 3 formatos sin crear fichas independientes para cada combinación

2. SISTEMA PIM (PRODUCT INFORMATION MANAGEMENT)
- Propón la arquitectura de un PIM adaptado al sector de distribución papelera: qué atributos gestionar, cómo estructurar el flujo de enriquecimiento de fichas, qué herramienta usar (Akeneo, Pimcore, Plytix o desarrollo propio)
- Diseña el flujo de alta de nuevos productos: desde la recepción de la ficha técnica del fabricante hasta la publicación en todos los canales de venta
- Define el proceso de enriquecimiento de fichas: quién es responsable de completar cada tipo de atributo (técnico de producto para especificaciones, marketing para textos de venta, logística para pesos y embalajes)
- Propón el sistema de control de calidad del catálogo: qué porcentaje de fichas tienen todos los atributos obligatorios completos, alertas para fichas incompletas, revisión periódica de fichas desactualizadas

3. GESTIÓN DE PRECIOS Y CONDICIONES COMERCIALES
- Diseña el modelo de precios B2B del distribuidor papelero: precio de tarifa, descuento por volumen de pedido, descuento por cliente (según nivel de acuerdo comercial), precio especial para proyectos puntuales, precio de urgencia
- Propón el sistema de actualización de precios ante cambios del fabricante: cómo recibir la nueva tarifa del proveedor, cómo calcular el impacto en los precios de venta, cómo comunicar el cambio a los clientes con suficiente antelación
- Define la gestión de precios por canal: precio web B2B (acceso con login para ver precios de cliente), precio tarifa del comercial de campo, precio de distribuidor de zona
- Diseña el proceso de aprobación de precios especiales fuera de tarifa: quién puede aprobar un descuento adicional, cuánto puede ceder cada nivel de la organización comercial

4. DISPONIBILIDAD Y GESTIÓN DE STOCK
- Diseña el sistema de visibilidad de stock en tiempo real para el equipo de ventas y para los clientes en el portal online: qué información mostrar (disponible en almacén propio / en tránsito de proveedor / bajo pedido con X semanas de plazo)
- Propón el sistema de alertas de rotura de stock: cuándo alertar al equipo comercial, cómo comunicar al cliente la indisponibilidad y ofrecer alternativas equivalentes (mismo gramaje en otro formato, papel similar de otro fabricante)
- Define la gestión de productos obsoletos o descatalogados: cómo identificarlos, cómo gestionar el stock restante (oferta especial de liquidación, venta a distribuidores), cómo retirarlos del catálogo activo
- Diseña el sistema de sustitutos: para cada producto, qué alternativa equivalente ofrecer si no hay stock o si el cliente busca una opción de menor coste

5. PUBLICACIÓN MULTICANAL Y SINCRONIZACIÓN
- Define la estrategia de publicación del catálogo en múltiples canales: web B2B, catálogo digital descargable en PDF, ficheros para importación en sistemas de compra de clientes grandes (EDI, catálogo en formato cXML o BMEcat)
- Diseña el proceso de sincronización de precios y stock entre el ERP y la tienda B2B online: qué sincronizar en tiempo real (stock), qué sincronizar periódicamente (precios, fichas), cómo gestionar los errores de sincronización
- Propón el catálogo digital interactivo para el equipo comercial: acceso offline desde tablet para consultar especificaciones y precios en visita al cliente, posibilidad de generar una selección de productos para el cliente y enviarla por email
- Define el proceso de exportación de catálogo a fichas para ferias y presentaciones: generación automática de dossier de producto en PDF a partir de los datos del PIM

6. MEJORA CONTINUA DEL CATÁLOGO
- Diseña las métricas de rendimiento del catálogo: productos más vendidos, productos con mayor tasa de búsqueda sin resultados (búsquedas que no encuentran nada), fichas con mayor tasa de abandono, productos vistos pero no añadidos al pedido
- Propón el proceso de revisión anual del catálogo: eliminación de referencias sin ventas en 12 meses, incorporación de nuevas tendencias (papeles sostenibles, materiales para impresión digital avanzada, packaging biodegradable)
- Define cómo usar los datos del catálogo para mejorar las recomendaciones de producto: "los clientes que compraron este papel también compran...", "para este tipo de impresora recomendamos..."
- Diseña el proceso de recogida de feedback de producto: cómo recibir y gestionar comentarios de clientes sobre la calidad del papel, cómo trasladar reclamaciones técnicas al fabricante

Entrega la arquitectura del catálogo en formato tabla con todos los atributos por tipo de producto, el flujo de trabajo de alta y actualización de fichas, y las métricas del catálogo con umbrales de alerta definidos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Sistema PIM y gestión de catálogos para distribuidoras de papel y materiales gráficos',
                'vote_score'       => 24,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del talento en industria papelera y artes gráficas con IA',
                'description'      => 'Desarrolla estrategias de atracción, formación y retención de talento técnico especializado para empresas de la industria papelera, impresión y artes gráficas en un contexto de digitalización.',
                'prompt_content'   => <<<'EOT'
Actúa como director de recursos humanos con experiencia en industrias de fabricación y en la gestión del talento técnico especializado en un sector en transformación. Necesito desarrollar un sistema completo de gestión del talento para una empresa de la industria papelera o de artes gráficas que afronta el reto de digitalizar sus procesos mientras mantiene y desarrolla el conocimiento técnico especializado de sus operarios y técnicos.

Contexto de la empresa:
- Tipo de empresa: [fábrica de papel / imprenta industrial / empresa de packaging / distribuidora de materiales gráficos]
- Número de empleados: [NÚMERO], distribución entre: operarios de producción, técnicos de preimpresión/mantenimiento, comerciales, administración
- Principal reto de RRHH: [dificultad para encontrar operarios de impresión cualificados / envejecimiento de plantilla con riesgo de pérdida de conocimiento / resistencia al cambio tecnológico / alta rotación en determinados roles]
- Nivel de digitalización actual: [maquinaria analógica / mixta / ya muy digitalizada]
- Convenio colectivo aplicable: [Artes Gráficas o similar]
- Objetivos de negocio que afectan a RRHH: [aumento de producción / incorporación de nueva maquinaria digital / apertura de nuevo turno / expansión internacional]

Desarrolla el sistema de gestión del talento con los siguientes módulos:

1. DIAGNÓSTICO Y MAPA DE COMPETENCIAS
- Diseña la matriz de competencias para los roles técnicos clave: operario de offset (conocimiento de maquinaria, gestión de color, puesta a punto), técnico de preimpresión (software, gestión de archivos, flujos de trabajo digitales), responsable de mantenimiento (electrónica, mecánica, diagnóstico de averías en maquinaria especializada)
- Define los niveles de competencia (1 = básico, 2 = con supervisión, 3 = autónomo, 4 = experto) y los criterios para evaluar cada nivel
- Propón el proceso de diagnóstico de la plantilla actual: cómo evaluar el nivel de competencia de cada persona, cómo identificar las brechas de conocimiento críticas
- Identifica el conocimiento en riesgo de perderse: qué saben las personas de mayor antigüedad que no está documentado en ningún sitio y que sería difícil de recuperar si se marchan

2. ATRACCIÓN Y SELECCIÓN DE PERFILES TÉCNICOS
- Define la estrategia de atracción de operarios de impresión: qué formación reglada existe (ciclos formativos de Artes Gráficas, escuelas de impresión), cómo colaborar con centros de formación profesional para detectar talento joven
- Propón el proceso de selección de un técnico de preimpresión digital: prueba técnica práctica (preparación de un archivo de imprenta real), entrevista técnica con el responsable de preimpresión, evaluación de adaptabilidad tecnológica
- Diseña la propuesta de valor como empleador (EVP) para el sector de artes gráficas: cómo atraer a perfiles jóvenes con conocimiento digital hacia una industria que a veces perciben como antigua, qué ofrecer (estabilidad, especialización, proyección tecnológica)
- Define las fuentes de reclutamiento más efectivas: bolsas de empleo sectoriales, LinkedIn para perfiles técnicos intermedios, colaboración con FEIGRAF (Federación Empresarial de Industrias Gráficas de España), ETTs especializadas en industria

3. ONBOARDING Y FORMACIÓN TÉCNICA
- Diseña el plan de incorporación de un nuevo operario de impresión: semana 1 (seguridad industrial, presentación de procesos, acompañamiento a máquina), mes 1 (operación básica supervisada), mes 3 (autonomía creciente con seguimiento)
- Propón el plan de formación técnica continua: actualización en nuevas maquinarias incorporadas, formación en gestión del color y estándares ISO de impresión, manejo de software de preimpresión, formación en materiales sostenibles y nuevos sustratos
- Define cómo gestionar la transferencia de conocimiento de los operarios más experimentados a los más jóvenes: programas de mentoring interno, documentación de procedimientos operativos estándar (SOPs), grabación de vídeos de procedimientos técnicos complejos
- Diseña el plan de reskilling para operarios de maquinaria analógica que deben adaptarse a procesos digitales: qué competencias deben adquirir, en qué plazos, con qué apoyo de la empresa

4. GESTIÓN DEL DESEMPEÑO Y PRODUCTIVIDAD
- Diseña el sistema de evaluación de desempeño para operarios de producción: indicadores objetivos (producción por turno, tasa de merma, incidencias de calidad), indicadores de comportamiento (puntualidad, trabajo en equipo, iniciativa en la resolución de problemas)
- Propón el proceso de evaluación: frecuencia (semestral), quién evalúa (responsable de turno + RRHH), cómo dar feedback constructivo, qué pasa si el desempeño es insatisfactorio
- Define el sistema de incentivos ligado al desempeño: prima por eficiencia de producción, prima por ausencia de incidencias de calidad, reconocimiento de ideas de mejora implementadas
- Diseña el proceso de gestión del absentismo: cómo distinguir entre absentismo puntual y estructural, cuándo actuar, cómo hacerlo respetando la normativa laboral y con enfoque de bienestar

5. RETENCIÓN Y BIENESTAR
- Propón la estrategia de retención del talento técnico especializado difícil de reemplazar: plan de carrera claro (de operario a jefe de turno, de técnico de preimpresión a responsable del departamento), retribución flexible, formación financiada
- Diseña la encuesta de clima laboral para entornos industriales: preguntas adaptadas a la realidad del trabajo en turno, en planta, con ruido y con exposición a tintas y disolventes
- Define las medidas de bienestar laboral para entornos de producción gráfica: ergonomía en la maquinaria, protocolos de seguridad con las tintas UV, gestión de la fatiga en turnos nocturnos, sala de descanso adecuada
- Propón cómo comunicar internamente los cambios tecnológicos para reducir la resistencia: cómo explicar que la nueva máquina digital no sustituye al operario sino que cambia su rol, cómo involucrar al equipo en el proceso de cambio

6. GESTIÓN DEL CONOCIMIENTO Y PLAN DE SUCESIÓN
- Diseña el sistema de documentación del conocimiento técnico: SOPs por tipo de máquina y proceso, vídeos de procedimientos complejos, base de conocimiento de resolución de averías frecuentes
- Define el plan de sucesión para los roles críticos: quién puede sustituir a cada persona clave si se marcha o causa baja, cómo preparar al sustituto
- Propón la estrategia de gestión de la salida de personas con conocimiento clave: qué período de preaviso negociar, qué proceso de transferencia de conocimiento ejecutar en ese período
- Diseña la oferta de jubilación parcial como herramienta de retención de conocimiento: cómo mantener al operario experto como consultor o formador interno durante la transición

Entrega la matriz de competencias completa en formato tabla, el plan de formación anual y el sistema de evaluación del desempeño con plantillas listas para usar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestión del talento técnico en empresas de industria papelera y artes gráficas',
                'vote_score'       => 22,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Control de costes en producción papelera con IA',
                'description'      => 'Implementa un sistema de control de costes de producción para empresas papeleras o de impresión industrial, identificando desviaciones, optimizando el consumo de materias primas y mejorando el margen.',
                'prompt_content'   => <<<'EOT'
Actúa como controller de producción con experiencia en industrias de proceso y fabricación, específicamente en el sector papelero y de impresión industrial. Necesito diseñar e implementar un sistema de control de costes de producción completo que permita identificar desviaciones en tiempo real, optimizar el consumo de materias primas, reducir las mermas y mejorar el margen por trabajo.

Contexto de la empresa:
- Tipo de empresa: [fábrica de papel / imprenta industrial offset / empresa de packaging de cartón ondulado / imprenta de etiquetas]
- Principales materias primas: [celulosa, papel bobina, tintas, barnices, cartón, adhesivos, planchas CTP]
- Volumen de producción mensual: [toneladas de papel / número de trabajos de impresión / metros lineales]
- Principal problema de costes: [alto porcentaje de merma de material / coste de energía elevado / tiempos de cambio de trabajo excesivos / despilfarro de tinta o barniz]
- Sistema de gestión actual: [ERP, MES, Excel, ninguno específico]
- Equipo que usará el sistema: [controller financiero / responsable de producción / director general]

Desarrolla el sistema de control de costes con los siguientes componentes:

1. ESTRUCTURA DE COSTES DE PRODUCCIÓN
- Define la estructura completa de costes por tipo de proceso: materias primas directas (papel, tinta, cartón), materiales auxiliares (planchas, barniz, pegamento), energía (electricidad, gas, agua), mano de obra directa (operarios de producción), mano de obra indirecta (mantenimiento, preimpresión, logística interna), amortización de maquinaria, costes generales de fábrica
- Propón la clasificación de costes: fijos vs variables, directos vs indirectos, por centro de coste (cada línea de maquinaria), por orden de producción (cada trabajo específico)
- Diseña el modelo de coste estándar: cuál es el coste teórico por tonelada de papel producida o por 1.000 pliegos impresos, calculado a partir del consumo estándar de cada material y los tiempos de producción estándar
- Define el proceso de actualización del coste estándar: con qué frecuencia revisar (mensual o trimestral), cómo incorporar los cambios de precio de materias primas

2. CONTROL DE MERMAS Y DESPILFARROS
- Diseña el sistema de seguimiento de merma de papel: registro de la bobina o pila de papel al inicio del trabajo, pesaje al final de la tirada, cálculo de merma real vs merma estándar por tipo de trabajo
- Propón el análisis de las causas de merma por encima del estándar: errores de registro en impresión, ajuste de máquina excesivo, incidencias técnicas, mala calidad del papel
- Define el sistema de control de consumo de tinta: registro del consumo real por trabajo y por color, comparativa con el consumo estándar basado en la cobertura teórica, alerta cuando el consumo supera el umbral
- Diseña el indicador de despilfarros de energía: consumo energético por tonelada producida, comparativa entre turnos, identificación de equipos con consumo anómalo

3. SISTEMA DE ÓRDENES DE PRODUCCIÓN Y TRAZABILIDAD DE COSTES
- Diseña el modelo de orden de producción: qué datos recoge al inicio (materiales asignados, tiempo estimado, maquinaria), durante (consumos reales, incidencias, paradas) y al cierre (materiales reales, tiempo real, merma, resultado de calidad)
- Propón el flujo de recogida de datos en planta: si es posible automatizar (básculas conectadas, lectores de código de barras, conexión con maquinaria JDF) o si es manual con formulario digital simple para el operario
- Define la trazabilidad de materias primas: cómo vincular cada bobina de papel o lote de tinta al trabajo en el que se usó, para poder analizar incidencias de calidad por lote de material
- Diseña el proceso de cierre de la orden de producción: validación de los consumos por el responsable de producción, cálculo automático del coste real vs estándar, alerta de desviación significativa

4. ANÁLISIS DE RENTABILIDAD POR TRABAJO Y CLIENTE
- Diseña el sistema de cálculo de rentabilidad por trabajo: ingresos del trabajo (precio de venta) menos costes directos de producción (materiales y mano de obra directa) = margen de contribución bruto; menos costes indirectos asignados = margen neto por trabajo
- Propón el análisis de rentabilidad por tipo de trabajo: tirajes cortos vs tirajes largos (¿cuál es más rentable por la relación entre tiempo de preparación y tiempo de producción?), offset vs digital, monocromía vs cuatricromía, acabados estándar vs acabados especiales
- Define el análisis de rentabilidad por cliente: cuánto factura cada cliente, cuál es su margen real (algunos clientes con alta facturación pueden ser poco rentables si sus trabajos son complejos o tienen muchas revisiones)
- Diseña la herramienta de simulación de precio: cuánto costar un trabajo antes de presentar oferta, con qué nivel de confianza, qué variables afectan más al precio final

5. CUADRO DE MANDO DE PRODUCCIÓN
- Define los KPIs de producción y costes: OEE (Overall Equipment Effectiveness) por máquina, merma por tipo de trabajo, consumo de tinta por 1.000 pliegos, margen de contribución promedio del mes, coste de energía por tonelada, productividad por turno
- Diseña el dashboard de producción en tiempo real: qué información debe ver el responsable de producción en una pantalla durante su turno, qué ve el controller financiero en su cuadro de mando semanal, qué ve el director general en su informe mensual de 1 página
- Propón las alertas automáticas: si la merma supera el X% en un trabajo, si el consumo de tinta supera el Y% del estándar, si el tiempo de trabajo supera el estimado en más de un Z%
- Define el análisis de tendencias mensual: evolución del margen de contribución en los últimos 12 meses, evolución de la merma, evolución del OEE por máquina

6. MEJORA CONTINUA Y REDUCCIÓN DE COSTES
- Propón un proceso de análisis de desviaciones mensual: reunión de producción y finanzas para revisar los trabajos con mayor desviación de coste, identificar causas raíz, definir acciones correctoras
- Diseña el plan de reducción de merma: objetivo de reducción anual en porcentaje, acciones concretas (estandarización de puestas a punto, mejora del proceso de ajuste de color, formación del operario), seguimiento mensual del indicador
- Define el proyecto de optimización energética: análisis del consumo por máquina y por turno, identificación de los equipos más ineficientes, proyecto de sustitución o mejora
- Propón el sistema de ideas de mejora del operario: cómo recoger sugerencias del equipo de producción para reducir costes, cómo evaluar las ideas, cómo reconocer e incentivar las que se implementan

Entrega todas las plantillas de orden de producción, el cuadro de mando en formato tabla y el modelo de coste estándar con las fórmulas clave indicadas para implementar en una hoja de cálculo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Control de costes de producción y análisis de rentabilidad en industrias papeleras y de impresión',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cumplimiento ambiental en industria papelera con IA',
                'description'      => 'Navega el marco normativo ambiental aplicable a empresas papeleras y de impresión industrial, con protocolos de cumplimiento, gestión de certificaciones y respuesta ante inspecciones.',
                'prompt_content'   => <<<'EOT'
Actúa como abogado especializado en derecho ambiental y cumplimiento normativo para la industria manufacturera, con experiencia específica en el sector papelero y de impresión. Necesito desarrollar un sistema completo de gestión del cumplimiento ambiental para una empresa del sector que debe cumplir con la normativa europea y española en materia de emisiones, residuos, uso de sustancias peligrosas y certificaciones de cadena de custodia forestal.

Contexto de la empresa:
- Tipo de empresa: [fábrica de papel / imprenta que usa tintas y disolventes / empresa de packaging / distribuidora de materiales con almacén propio]
- Tamaño y actividad: [número de empleados, volumen de producción, tipo de proceso]
- Principales riesgos ambientales de la actividad: [emisiones de COVs de tintas y barnices / aguas residuales con tinta / residuos de papel y plástico / ruido de maquinaria / consumo energético elevado]
- Certificaciones actuales: [ninguna / ISO 14001 / FSC / PEFC / EMAS]
- Historial de inspecciones o sanciones: [ninguno / inspecciones periódicas / alguna advertencia o sanción previa]
- Objetivo de cumplimiento: [evitar sanciones / obtener certificación para acceder a clientes que la exigen / mejorar la reputación ambiental de la empresa]

Desarrolla el sistema de cumplimiento ambiental con los siguientes componentes:

1. MARCO NORMATIVO APLICABLE
- Identifica la normativa ambiental aplicable a la empresa según su actividad: Ley 34/2007 de calidad del aire y protección de la atmósfera, Real Decreto 117/2003 sobre limitación de emisiones de COVs en el uso de disolventes orgánicos, Ley 22/2011 de residuos, Reglamento REACH para sustancias químicas, normativa autonómica aplicable según la comunidad
- Define si la empresa está sujeta a autorización ambiental integrada (AAI) o a comunicación ambiental, en función del umbral de producción y del tipo de sustancias usadas
- Explica las obligaciones del Registro Estatal de Emisiones y Fuentes Contaminantes (PRTR): si aplica, qué datos reportar, con qué frecuencia, en qué formato
- Propón el calendario de obligaciones: qué reportes ambientales presentar y cuándo (declaración anual de residuos, informe de emisiones, renovación de permisos)

2. GESTIÓN DE EMISIONES DE COVs
- Explica el marco regulatorio de emisiones de compuestos orgánicos volátiles (COVs) para imprentas: umbrales de consumo de disolventes que determinan las obligaciones, cómo calcular el consumo anual de disolventes, cómo calcular las emisiones reales vs el límite autorizado
- Diseña el plan de reducción de emisiones: sustitución de tintas de base disolvente por tintas de base agua o tintas UV, instalación de sistemas de captación y destrucción de COVs, optimización del proceso para reducir el consumo de limpieza
- Define el sistema de registro y documentación de COVs: registro de compras de disolventes, inventario de productos con contenido VOC, cálculo mensual de emisiones, informe anual
- Propón el plan de respuesta ante inspección de emisiones: qué documentación tener preparada, cómo responder a las preguntas de los inspectores, qué hacer si se detecta una desviación

3. GESTIÓN DE RESIDUOS
- Clasifica los residuos generados por una imprenta: residuos peligrosos (tintas residuales, disolventes de limpieza, trapos impregnados, planchas de impresión con tinta), residuos no peligrosos (papel y cartón de merma, plásticos de embalaje, residuos de catering)
- Diseña el plan de gestión de residuos: identificación y etiquetado correcto de envases de residuos peligrosos, zona de almacenamiento con cubeto de retención, tiempo máximo de almacenamiento según tipo, contrato con gestor autorizado
- Define la documentación obligatoria de residuos: libro de registro de residuos, documentos de aceptación de residuos (DAR/DCS), comunicación a la comunidad autónoma según umbrales
- Propón el plan de minimización de residuos: cómo reducir la generación de merma de papel (mejor planificación de tiradas, optimización de formatos de corte), cómo recuperar y reciclar disolventes de limpieza

4. GESTIÓN DE AGUAS Y EFLUENTES
- Define las obligaciones de gestión de aguas residuales para procesos de impresión: si la empresa vierte a alcantarillado municipal o a cauce público, qué límites de vertido aplican, qué parámetros analizar
- Diseña el sistema de control de efluentes: instalación de decantador de tintas antes del vertido, análisis periódicos del efluente, registro de resultados, comunicación a la empresa gestora del agua
- Propón el plan de ahorro de agua en el proceso: circuito cerrado de agua de refrigeración, reutilización de aguas de lavado, control de fugas

5. CERTIFICACIONES AMBIENTALES
- Explica el proceso de obtención de la certificación FSC y PEFC de cadena de custodia: qué significa cada una, qué implica para la empresa (auditoría externa, declaración de origen del papel comprado), cuánto suele costar, cuánto tarda
- Diseña el sistema de gestión de la cadena de custodia FSC: registro de compras de papel certificado, segregación o porcentaje de mezcla, cálculo del porcentaje certificado en cada trabajo impreso, declaración en la factura al cliente
- Propón el proceso de certificación ISO 14001: fases de implementación del sistema de gestión ambiental, auditoría interna, certificación por entidad externa, mantenimiento anual
- Define el valor comercial de las certificaciones: cómo comunicarlas a clientes que las exigen (editoriales, marcas de lujo, empresas con políticas de compra sostenible), cómo diferenciar la oferta frente a competidores sin certificar

6. PLAN DE RESPUESTA ANTE EMERGENCIAS AMBIENTALES
- Diseña el plan de respuesta ante un derrame de tinta o disolvente: cómo actuar en los primeros 10 minutos, qué materiales de contención tener disponibles, a quién notificar internamente y externamente (autoridad ambiental competente)
- Propón el plan de respuesta ante incendio en zona de almacenamiento de productos peligrosos: coordinación con bomberos, información sobre sustancias presentes, actuaciones de post-incendio para gestionar los residuos generados
- Define el registro de incidentes ambientales: qué registrar, cómo investigar la causa raíz, qué acciones correctoras implementar, cómo documentar para la auditoría de ISO 14001
- Crea el simulacro de emergencia ambiental anual: cómo organizarlo, quién participa, cómo evaluarlo y mejorar el plan

Entrega el calendario de obligaciones ambientales en formato tabla por meses, los registros de residuos y COVs con las columnas requeridas por la normativa, y el checklist de preparación para auditoría FSC.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Cumplimiento normativo ambiental y certificaciones en industria papelera e impresión',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente en empresas de artes gráficas con IA',
                'description'      => 'Diseña los protocolos de atención al cliente para empresas de artes gráficas e impresión, gestionando solicitudes de presupuesto, seguimiento de pedidos, reclamaciones de calidad y fidelización.',
                'prompt_content'   => <<<'EOT'
Actúa como responsable de experiencia del cliente y servicio postventa en una empresa de artes gráficas o imprenta industrial. Necesito diseñar un sistema completo de atención al cliente que cubra desde la primera solicitud de presupuesto hasta la gestión de reclamaciones de calidad y la fidelización de clientes, adaptado a la realidad técnica y operativa de una empresa de impresión.

Contexto de la empresa:
- Tipo de empresa: [imprenta offset / imprenta digital / empresa de packaging / imprenta de gran formato]
- Perfil del cliente: [agencias de publicidad / empresas con departamento de marketing / pequeños negocios / distribuidores]
- Principal queja o incidencia más frecuente: [retrasos en la entrega / problemas de color / archivos rechazados en preflight / cambios de precio no comunicados / calidad por debajo de lo esperado]
- Canales de comunicación actuales: [email / teléfono / portal online de pedidos / WhatsApp / presencial]
- Equipo de atención al cliente: [número de personas dedicadas a este rol]
- Objetivo de mejora: [reducir incidencias de calidad / mejorar el tiempo de respuesta / aumentar la fidelización / reducir las reclamaciones]

Desarrolla el sistema de atención con los siguientes componentes:

1. PROCESO DE SOLICITUD DE PRESUPUESTO Y BRIEFING TÉCNICO
- Diseña el formulario de solicitud de presupuesto online: qué información técnica pedir (formato final, número de páginas, tirada, papel/gramaje preferido, acabados, plazo de entrega, uso final), cómo guiar al cliente no técnico para que complete correctamente los campos
- Propón el tiempo de respuesta estándar para presupuestos: qué tipo de trabajos pueden presupuestarse automáticamente (formulario con calculador de precio), cuáles requieren revisión manual y en cuánto tiempo
- Crea el script de llamada de aclaración de briefing: cómo contactar al cliente cuando el briefing es incompleto, qué preguntas hacer, cómo confirmar que se ha entendido lo que necesita
- Define el proceso de aprobación del presupuesto: confirmación por email con los parámetros del trabajo, firma del pedido si el importe supera un umbral, anticipo para trabajos grandes

2. GESTIÓN DEL PEDIDO Y COMUNICACIÓN DE ESTADO
- Diseña el sistema de notificaciones automáticas al cliente durante el proceso: confirmación de recepción del pedido, confirmación de aceptación del archivo (o solicitud de correcciones), entrada en producción, aviso de envío con número de seguimiento, confirmación de entrega
- Propón el portal online del cliente: acceso a sus pedidos históricos, estado de pedidos en curso, descarga de facturas, repetición de pedidos anteriores, envío de archivos nuevos para un pedido en curso
- Define el proceso de gestión de cambios de última hora del cliente: cómo decidir si es posible incorporar un cambio según el estado del trabajo, cómo comunicar el impacto en el plazo o el precio, cómo documentar la aprobación del cambio
- Crea el protocolo de comunicación de retrasos: cuándo comunicar, quién lo comunica, cómo explicar la causa sin comprometer la confianza del cliente, qué compensación ofrecer si el retraso supera un umbral

3. GESTIÓN DE ARCHIVOS Y COMUNICACIÓN TÉCNICA CON EL CLIENTE
- Diseña el proceso de recepción y validación de archivos: portal de envío de archivos con aviso automático al cliente del resultado del preflight, informe de errores en lenguaje comprensible para un diseñador, instrucciones claras para la corrección
- Propón la guía de especificaciones técnicas para clientes: documento descargable que explica cómo preparar el archivo para imprenta (resolución, espacio de color, sangrado, PDF correcto), en lenguaje no técnico con ejemplos visuales
- Define el proceso de aprobación de prueba de color digital: envío de PDF con marcas de impresión, plazo para aprobación del cliente, qué pasa si el cliente no responde a tiempo, cómo documentar la aprobación
- Crea el protocolo de gestión del cliente que envía archivos incorrectos repetidamente: cómo ofrecer ayuda sin generar conflicto, cómo facturar el servicio de corrección de archivos si es habitual

4. GESTIÓN DE RECLAMACIONES DE CALIDAD
- Diseña el proceso de gestión de reclamaciones: cómo recibirlas (formulario online, email, llamada), cómo clasificarlas por tipo (color fuera de especificación, mal troquelado, texto ilegible, fallo de encuadernación) y por severidad (problema estético leve / problema funcional / trabajo inutilizable)
- Define el árbol de decisión para resolver reclamaciones: cuándo ofrecer descuento en próximo pedido, cuándo reimprimir, cuándo reembolsar, quién toma cada decisión
- Propón el proceso de investigación de causa raíz: cómo determinar si la responsabilidad es de la imprenta (proceso de producción), del material (papel o tinta), del archivo del cliente, o de las instrucciones del pedido
- Crea el protocolo de comunicación al cliente en una reclamación: cómo pedir la muestra de la incidencia, cómo reconocer el problema sin admitir culpa prematuramente, cómo comprometerse a un plazo de respuesta y cumplirlo

5. FIDELIZACIÓN Y DESARROLLO DE CUENTA
- Diseña el programa de fidelización para clientes habituales: descuento por volumen anual, acceso a nuevos papeles en prueba antes del lanzamiento general, servicio de entrega urgente sin recargo para clientes fidelizados, gestor de cuenta asignado para cuentas por encima de un umbral de facturación
- Propón la revisión anual de cuenta con clientes estratégicos: reunión presencial o por videoconferencia, análisis de los trabajos del año, identificación de necesidades futuras, propuesta de nuevos servicios o materiales
- Define el proceso de recuperación de clientes perdidos: cómo detectar que un cliente ha dejado de pedir (sin pedido en 6 meses), cómo contactarle, qué oferta reactivadora hacer
- Crea el sistema de referidos: cómo pedir recomendaciones a clientes satisfechos, qué incentivo ofrecer por un nuevo cliente recomendado, cómo hacer seguimiento

6. MÉTRICAS DE ATENCIÓN AL CLIENTE
- Define los KPIs del servicio de atención: tiempo medio de respuesta a presupuesto, tasa de conversión presupuesto-pedido, incidencias de calidad por cada 100 pedidos, NPS trimestral, tasa de retención de clientes anual
- Propón la encuesta de satisfacción post-entrega: 5 preguntas máximo, pregunta NPS, campo abierto de comentarios, cuándo enviarla y por qué canal
- Diseña el proceso de análisis mensual de incidencias: tipo de incidencias más frecuentes, trabajos o máquinas con más reclamaciones, clientes que más reclaman (¿expectativas mal gestionadas?), tendencia de mejora o empeoramiento
- Crea el informe mensual del servicio de atención al cliente que se presenta a dirección: datos clave, evolución de incidencias, acciones tomadas, propuestas de mejora

Entrega todos los scripts de comunicación, plantillas de email y protocolos de gestión de incidencias listos para usar, adaptados al contexto técnico de una empresa de artes gráficas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Sistema de atención al cliente y gestión de reclamaciones en empresas de artes gráficas',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Diseño freelance para artes gráficas e imprenta con IA',
                'description'      => 'Define una propuesta de servicios freelance de diseño gráfico orientado a producción impresa, con tarifas, proceso de trabajo con clientes, preparación de archivos y estrategia de captación.',
                'prompt_content'   => <<<'EOT'
Actúa como consultor de negocio especializado en el lanzamiento y gestión de estudios de diseño gráfico freelance con foco en producción impresa y artes gráficas. Necesito estructurar una propuesta de servicios freelance de diseño orientado a impresión, definiendo el modelo de negocio, las tarifas, el proceso de trabajo con clientes e imprentas, y la estrategia de captación de proyectos.

Contexto del freelance:
- Experiencia previa: [años como diseñador gráfico en estudio o en empresa]
- Especialidad: [diseño editorial / packaging / identidad corporativa / señalética / gran formato / mixto con orientación a impresión]
- Software dominado: [Adobe Illustrator, InDesign, Photoshop, Affinity, Figma u otro]
- Conocimiento técnico de impresión: [nivel alto con experiencia en preparación de archivos / nivel medio / nivel básico]
- Red de imprentas y proveedores de confianza: [tienes proveedores ya establecidos / necesitas construir esa red]
- Objetivo de facturación anual: [IMPORTE]
- Ubicación y área de trabajo: [presencial local / remoto nacional / internacional]

Desarrolla la propuesta de negocio freelance con los siguientes componentes:

1. ESPECIALIZACIÓN Y POSICIONAMIENTO
- Define tu nicho de especialización como diseñador gráfico para impresión: tipo de trabajos que haces mejor (packaging de producto, catálogos corporativos, libros y publicaciones, señalética de espacio), tipo de cliente que mejor te entiende (agencias de publicidad que subcontratan, marcas que trabajan directamente con el diseñador, imprentas que buscan diseñador asociado)
- Redacta tu propuesta de valor para cada tipo de cliente: para la agencia de publicidad que subcontrata (rapidez, calidad técnica, precio sin gastos de estructura), para la marca directa (comprensión del proyecto, asesoramiento técnico, coordinación con imprenta incluida), para la imprenta que busca diseñador (conocimiento técnico, disponibilidad, integración en su flujo de trabajo)
- Define tu diferenciador frente a otros freelances: ¿el conocimiento técnico de impresión? ¿la especialización en packaging sostenible? ¿el dominio de tipografía editorial? ¿la rapidez de entrega?
- Diseña tu identidad como profesional freelance: nombre, tagline, paleta de colores de tu marca personal, cómo presentarte en LinkedIn y en tu web

2. CATÁLOGO DE SERVICIOS Y TARIFAS
- Define el catálogo de servicios: diseño de identidad corporativa (logo + manual de marca), diseño editorial (catálogo, revista, libro), diseño de packaging (etiqueta, caja, envase), adaptación y retoque de materiales existentes, preparación de archivos para imprenta (preflight y producción), supervisión de impresión in situ
- Propón el modelo de tarifas: tarifa por proyecto a precio cerrado (más confianza para el cliente), tarifa por hora (más flexible para trabajos de alcance incierto), tarifa de retainer mensual (para clientes con necesidades recurrentes)
- Diseña los rangos de precio por tipo de proyecto: logotipo completo, catálogo de 24 páginas, etiqueta de producto, cartel de gran formato, adaptación de manual de marca; con variantes según complejidad y urgencia
- Define los servicios de valor añadido que justifican un precio superior: coordinación con imprenta incluida, visita de supervisión de impresión, gestión del proceso de certificación FSC del trabajo, entrega de archivos en múltiples formatos y versiones

3. PROCESO DE TRABAJO Y GESTIÓN DE PROYECTOS
- Diseña el flujo de trabajo estándar para un proyecto de diseño editorial: briefing → propuesta de honorarios → contrato → investigación y moodboard → primeros bocetos → revisión cliente → refinamiento → revisión final → producción técnica → entrega de archivos → supervisión de impresión si aplica → cierre
- Propón las herramientas de gestión de proyectos y comunicación con el cliente: plataforma de gestión de proyectos para compartir avances (Notion, Trello, Basecamp), herramienta de presentación y aprobación de diseño (InVision, Marvel, PDF compartido por Dropbox), comunicación por email para documentar decisiones
- Define los hitos y entregables de cada fase: qué formato entregas en cada momento, cuántas versiones están incluidas en el precio, qué pasa si el cliente pide más revisiones de las incluidas
- Diseña el proceso de gestión de cambios de alcance: cómo documentar cualquier petición fuera del alcance inicial, cómo presupuestar el coste adicional, cómo aprobar el gasto antes de ejecutarlo

4. RELACIÓN CON IMPRENTAS Y PROVEEDORES
- Define la estrategia de construcción de una red de imprentas de confianza: cómo seleccionar imprentas por tipo de especialidad (offset de calidad, digital de tirajes cortos, packaging, gran formato), cómo establecer una relación de colaboración estable
- Diseña el proceso de coordinación con imprenta en nombre del cliente: cómo enviar el archivo correctamente, cómo gestionar el preflight, cómo coordinar la prueba de color, cómo supervisar la entrega
- Propón el modelo de gestión de proveedores como servicio ofrecido al cliente: cuándo incluirlo en el precio del diseño, cuándo facturarlo por separado como coordinación de producción, qué margen aplicar sobre el coste de imprenta si lo gestionas tú
- Define el proceso de selección de materiales con el cliente: cómo asesorar en la elección de papel, gramaje, acabados y su impacto en el coste final, cómo conseguir muestras de material antes de decidir

5. CAPTACIÓN DE CLIENTES Y CONSTRUCCIÓN DE CARTERA
- Diseña la estrategia de captación de los primeros 5 clientes como freelance: cómo aprovechar la red de contactos del trabajo anterior, cómo posicionarte con los estudios y agencias como diseñador asociado disponible para desbordes
- Propón el portfolio online: qué proyectos incluir, cómo presentar cada caso (problema del cliente, proceso de diseño, resultado, impacto), qué plataforma usar (web propia, Behance, Are.na)
- Define la estrategia de contenido para atraer clientes: qué publicar en LinkedIn (process shots, tips de preparación de archivos, comentario de tendencias en packaging, educación del cliente sobre el valor del diseño técnico)
- Diseña el proceso de colaboración con imprentas como canal de captación: cómo proponer a imprentas que te recomienden a sus clientes cuando necesiten diseñador, qué acuerdo de colaboración establecer

6. GESTIÓN FINANCIERA Y CRECIMIENTO
- Diseña el modelo de previsión de ingresos mensual: cuántos proyectos activos simultáneamente es sostenible sin perder calidad, qué mezcla de proyectos grandes y pequeños es más estable
- Propón el proceso de gestión de cobros: cuándo y cómo facturar (50% al inicio, 50% al entregar archivos finales), cómo gestionar los impagos, qué condiciones de pago incluir en el contrato
- Define la estrategia fiscal del freelance: elección entre autónomo persona física o sociedad, gestión del IVA en servicios de diseño, deducciones habituales del diseñador freelance (software, formación, equipamiento, parte proporcional del espacio de trabajo en casa)
- Crea el plan de crecimiento a 3 años: mantenerse como freelance individual pero aumentando el ticket medio, asociarse con otro freelance complementario (uno más conceptual, otro más técnico), o crear un estudio pequeño con un empleado

Entrega el catálogo de servicios y tarifas en formato tabla, el modelo de contrato estándar resumido, el proceso de trabajo en formato de diagrama de flujo y el plan de captación de clientes para los primeros 6 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 45,
                'use_case'         => 'Modelo de negocio y captación de clientes para diseñador gráfico freelance de impresión',
                'vote_score'       => 26,
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
