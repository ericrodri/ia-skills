<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills611Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de construcción sostenible y certificaciones LEED con IA',
                'description'      => 'Diseña estrategias de marketing para promotoras y constructoras que trabajan con certificaciones LEED y BREEAM usando inteligencia artificial.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de marketing especializado en el sector de la construcción sostenible y la arquitectura verde, con experiencia en la comunicación de certificaciones medioambientales como LEED, BREEAM y VERDE a promotoras, inversores y compradores finales.

Objetivo: Crear una estrategia de marketing completa para una empresa constructora o promotora que quiere posicionar sus proyectos de construcción sostenible en el mercado residencial, de oficinas o logístico.

Contexto del negocio:
- Tipo de empresa: [constructora / promotora / desarrolladora de activos]
- Tipo de proyectos: [residencial / oficinas / industrial / hoteles / mixto]
- Certificación obtenida o en proceso: [LEED Gold / LEED Platinum / BREEAM Excellent / VERDE]
- Mercado objetivo: [comprador particular / inversor institucional / empresa inquilina / fondo inmobiliario]
- Zona geográfica: [ciudad / región]
- Presupuesto de marketing por proyecto: [importe]

instrucción 1 — Análisis del comprador de inmueble sostenible:
Define 3 perfiles de comprador o inquilino de un inmueble con certificación sostenible (particular, empresa compradora de oficinas, fondo de inversión ESG). Para cada perfil: motivaciones de compra o alquiler relacionadas con la sostenibilidad, objeciones típicas sobre el sobrecoste y los mensajes que mejor funcionan para convertirlos.

instrucción 2 — Propuesta de valor y mensajes clave:
Redacta la propuesta de valor diferencial del proyecto certificado frente a un inmueble convencional. Incluye: ahorro energético estimado en euros/año, mejora del bienestar y productividad de los ocupantes, valor de reventa superior, acceso a financiación verde (hipotecas/créditos ESG) y impacto en huella de carbono. Traduce cada dato técnico a un beneficio tangible para el comprador no técnico.

instrucción 3 — Plan de contenidos para el lanzamiento:
Diseña el plan de contenidos para los 60 días previos al lanzamiento comercial de un proyecto LEED, con: landing page de captación de leads (estructura y copy), 4 artículos de blog sobre construcción sostenible, 10 publicaciones de Instagram/LinkedIn, 2 vídeos explicativos (guión de 90 segundos cada uno) y 3 emails de nurturing para la base de datos de interesados.

instrucción 4 — PR y relaciones con medios:
Escribe una nota de prensa de lanzamiento del proyecto certificado (600 palabras), una lista de 15 medios especializados en construcción, sostenibilidad e inversión inmobiliaria donde distribuirla, y 3 ángulos periodísticos alternativos para conseguir cobertura editorial.

instrucción 5 — Métricas y KPIs de marketing sostenible:
Define los 10 KPIs para medir el éxito de la campaña de marketing del proyecto certificado, diferenciando entre métricas de awareness (reconocimiento de la certificación), generación de leads cualificados y conversión a reservas o contratos.

Formato de entrega: Plan de marketing estructurado por fases (pre-lanzamiento, lanzamiento, mantenimiento), con todos los textos y guiones listos para usar y un cronograma semanal de acciones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear estrategias de marketing para proyectos de construcción sostenible con certificaciones LEED y BREEAM.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Análisis de datos BIM para construcción sostenible con IA',
                'description'      => 'Usa IA para extraer, analizar y visualizar datos de modelos BIM orientados a la obtención de certificaciones de sostenibilidad en proyectos de construcción.',
                'prompt_content'   => <<<'EOT'
Actúa como un BIM Manager especializado en edificación sostenible, con experiencia en la integración de análisis energético, de materiales y de ciclo de vida en modelos BIM para la consecución de certificaciones LEED, BREEAM y VERDE.

Objetivo: Diseñar un flujo de trabajo basado en datos BIM que permita a un equipo de proyecto tomar decisiones informadas para maximizar la puntuación en certificaciones de sostenibilidad.

Contexto técnico del proyecto:
- Software BIM utilizado: [Revit / ArchiCAD / Allplan / IFC]
- Software de análisis energético: [EnergyPlus / IES VE / DesignBuilder / Cypetherm]
- Tipo de edificio: [residencial plurifamiliar / oficinas / hotel / nave industrial]
- Certificación objetivo: [LEED v4.1 / BREEAM International 2016 / VERDE GBC España]
- Fase del proyecto: [anteproyecto / proyecto básico / proyecto de ejecución / obra]
- Herramientas de programación del equipo: [Python / Dynamo / Grasshopper / ninguna]

instrucción 1 — Estructura del modelo BIM para sostenibilidad:
Define los requisitos de modelado BIM necesarios para soportar el proceso de certificación, incluyendo: nivel de detalle (LOD) mínimo por elemento, parámetros de materiales necesarios (EPD, conductividad, transmitancia), configuración de espacios y zonas térmicas, y datos de ocupación y uso. Incluye una plantilla de Revit/IFC con los parámetros compartidos necesarios.

instrucción 2 — Flujo de análisis energético automatizado:
Describe el proceso de exportación del modelo BIM a software de análisis energético y los pasos para: calibrar el modelo con datos climáticos locales, simular el consumo energético en escenarios de referencia y propuesto, calcular el ahorro porcentual respecto a la línea base ASHRAE 90.1 (LEED) o NCM (BREEAM) y generar el informe de cumplimiento.

instrucción 3 — Cálculo de créditos con Python y Dynamo:
Escribe un script en Python o Dynamo que lea los datos del modelo BIM y calcule automáticamente el cumplimiento de los siguientes créditos: a) porcentaje de materiales con EPD declarada, b) contenido reciclado ponderado de los materiales principales, c) distancia de origen de los materiales (crédito de materiales regionales), d) porcentaje de superficie de cubierta con vegetación o alta reflectancia.

instrucción 4 — Dashboard de seguimiento de puntuación:
Define la estructura de un dashboard de Power BI o Google Data Studio que muestre en tiempo real: puntuación acumulada por categoría LEED/BREEAM, créditos conseguidos vs. objetivo, tareas pendientes por categoría y responsable, y fecha estimada de presentación de documentación.

instrucción 5 — Integración con el proceso constructivo:
Explica cómo conectar el modelo BIM con el seguimiento de obra para verificar que los materiales instalados corresponden a los especificados en proyecto (trazabilidad de EPDs), cómo gestionar los cambios de proyecto que afectan a la puntuación y cómo preparar la documentación digital para la auditoría del organismo de certificación.

Formato de respuesta: Flujo de trabajo paso a paso con diagramas descritos en texto, código Python/Dynamo comentado y plantilla de seguimiento de créditos en formato tabla.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Integrar análisis BIM y datos de sostenibilidad para certificaciones LEED y BREEAM en proyectos de construcción.',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño arquitectónico sostenible con IA para certificaciones BREEAM',
                'description'      => 'Aplica estrategias de diseño bioclimático y sostenible desde las fases iniciales del proyecto arquitectónico para maximizar la puntuación BREEAM o LEED.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto especialista en diseño sostenible y bioclimático, con experiencia en la obtención de certificaciones BREEAM Excellent y LEED Gold en proyectos de edificación residencial y terciaria en clima mediterráneo y continental.

Objetivo: Guiarme en la toma de decisiones de diseño arquitectónico desde la fase de anteproyecto para maximizar la puntuación en la certificación elegida sin incrementar significativamente el coste de construcción.

Datos del proyecto:
- Tipo de edificio: [plurifamiliar / unifamiliar / oficinas / mixto]
- Localización (clima): [ciudad / zona climática CTE]
- Parcela: [orientación principal / superficie / condicionantes urbanísticos]
- Certificación objetivo: [BREEAM Excellent / LEED Gold / VERDE Plata]
- Presupuesto de construcción estimado: [€/m²]
- Particularidades del proyecto: [rehabilitación / obra nueva / ampliación]

instrucción 1 — Estrategia bioclimática y pasiva:
Analiza las condiciones climáticas del emplazamiento y propón las estrategias pasivas más efectivas para este clima: orientación óptima del edificio, relación de aspecto, protecciones solares (dimensionado de voladizos y lamas), ventilación natural cruzada, inercia térmica de fachadas y cubiertas, y gestión del agua de lluvia. Para cada estrategia indica el impacto estimado en la demanda energética y los créditos BREEAM/LEED que contribuye a conseguir.

instrucción 2 — Selección de sistemas y materiales:
Propón la combinación óptima de sistemas activos (climatización, ACS, ventilación, iluminación) y materiales de construcción para este proyecto, priorizando: reducción del consumo energético, contenido reciclado y EPD declarada, procedencia local o regional (máximo 800 km), baja emisión de COVs para calidad del aire interior y circularidad al final de vida útil.

instrucción 3 — Estrategia de agua:
Diseña el sistema de gestión del agua del edificio para conseguir el máximo de créditos en la categoría de agua: caudales reducidos en grifería y sanitarios, recuperación de aguas grises para inodoros, captación y uso de agua de lluvia para riego, sistema de detección de fugas y medición por circuito. Calcula el ahorro porcentual respecto al edificio de referencia.

instrucción 4 — Bienestar y calidad del ambiente interior:
Define las especificaciones de diseño para conseguir los créditos de confort interior: niveles de iluminación natural (FLD mínimo), control visual y deslumbramiento, acústica (tiempos de reverberación y aislamiento), ventilación y calidad del aire (caudales mínimos por persona, filtración, CO2), y vistas al exterior desde los puestos de trabajo o dormitorios.

instrucción 5 — Checklist de diseño por fases:
Crea un checklist de decisiones de diseño sostenible organizado por fases del proyecto (anteproyecto, proyecto básico, proyecto de ejecución, obra) que el arquitecto debe verificar en cada hito, con indicación del crédito BREEAM/LEED al que contribuye cada decisión.

Formato de respuesta: Recomendaciones de diseño ordenadas por impacto en puntuación y coste de implementación, con estimación de créditos conseguibles y checklist listo para usar en reuniones de proyecto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Tomar decisiones de diseño arquitectónico sostenible para maximizar la puntuación en certificaciones BREEAM y LEED.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta de proyectos LEED y BREEAM a inversores con IA',
                'description'      => 'Desarrolla argumentarios y materiales comerciales para vender proyectos de construcción certificada a inversores institucionales y compradores corporativos.',
                'prompt_content'   => <<<'EOT'
Actúa como un director comercial especializado en la venta de activos inmobiliarios sostenibles a inversores institucionales, fondos de inversión ESG, empresas con compromisos de neutralidad de carbono y organismos públicos con criterios de compra verde.

Objetivo: Crear un argumentario de ventas y un conjunto de materiales comerciales para una promotora o gestora de activos que quiere vender o arrendar edificios con certificación LEED o BREEAM a compradores sofisticados.

Contexto comercial:
- Tipo de activo: [oficinas / logístico / residencial en alquiler / hotel]
- Certificación del activo: [LEED Gold / LEED Platinum / BREEAM Excellent / BREEAM Outstanding]
- Precio de venta o renta esperada: [importe / m²]
- Prima verde estimada respecto a mercado convencional: [porcentaje]
- Tipo de comprador objetivo: [fondo de inversión / empresa ocupante / SOCIMI / administración pública]
- Fase del proceso de venta: [prospección / presentación / negociación]

instrucción 1 — El caso de negocio de la sostenibilidad:
Construye el business case financiero completo para justificar la prima verde del activo certificado frente a uno convencional comparable. Cuantifica: reducción de costes operativos (energía, agua, mantenimiento) para el inquilino, mayor tasa de ocupación y menor vacancia histórica, mejor posición en rankings ESG de los inversores, acceso a financiación verde con spreads más bajos y valor de reventa superior a 10 años.

instrucción 2 — Argumentario por perfil de comprador:
Desarrolla un argumentario de ventas específico para 3 perfiles:
a) Fondo de inversión con mandato ESG: énfasis en cumplimiento de taxonomía europea, alineación con ODS, rating GRESB y reducción de riesgo stranded asset
b) Empresa multinacional buscando sede sostenible: énfasis en productividad de empleados, marca empleadora, cumplimiento de compromisos Science Based Targets y bienestar laboral
c) Administración pública: énfasis en normativa de compra verde (GPP), coste total de propiedad y responsabilidad social

instrucción 3 — Materiales de presentación:
Redacta el contenido completo de un dossier comercial de 8 páginas para el activo, con: ficha técnica del edificio, resumen ejecutivo de las certificaciones obtenidas, gráfico de ahorro energético vs. referencia, testimonios de inquilinos, hoja de condiciones comerciales y siguiente paso propuesto.

instrucción 4 — Gestión del proceso de due diligence sostenible:
Prepara una guía de respuesta a las preguntas técnicas y ESG que el comprador institucional formulará durante la due diligence: datos de consumo real en operación, comparativa con el certificado inicial, plan de mantenimiento de las instalaciones eficientes, estrategia de electrificación y descarbonización progresiva del activo.

instrucción 5 — Cierre y negociación:
Diseña una estrategia de cierre para negociaciones con inversores ESG, con: cláusulas green lease recomendadas para el contrato de arrendamiento, cómo estructurar los datos de rendimiento sostenible en el contrato de compraventa y cómo gestionar las objeciones sobre la prima de precio.

Formato de respuesta: Argumentario listo para presentaciones, dossier comercial estructurado y guía de due diligence con respuestas a las preguntas más habituales de inversores institucionales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Vender activos inmobiliarios con certificación LEED o BREEAM a inversores institucionales y compradores corporativos.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de proyectos de construcción sostenible con IA',
                'description'      => 'Aplica metodologías de gestión de proyectos adaptadas a la complejidad de las certificaciones LEED y BREEAM para mantener coste, plazo y puntuación bajo control.',
                'prompt_content'   => <<<'EOT'
Actúa como un project manager especializado en proyectos de construcción sostenible, con certificación PMP y experiencia como LEED AP BD+C y BREEAM AP, habituado a gestionar la complejidad adicional que introducen las certificaciones de sostenibilidad en el ciclo de vida de un proyecto constructivo.

Objetivo: Diseñar el sistema de gestión integral de un proyecto de construcción que debe cumplir el programa de necesidades, el presupuesto, el plazo y los requisitos de la certificación de sostenibilidad elegida.

Datos del proyecto:
- Tipo y superficie: [tipología / m² de construcción]
- Presupuesto de ejecución material: [importe]
- Plazo de ejecución de obra: [meses]
- Certificación objetivo y nivel: [LEED Gold / BREEAM Excellent / VERDE Plata]
- Fase actual: [diseño / licitación / inicio de obra / obra en curso]
- Equipo de proyecto: [promotor / constructora / arquitecto / dirección de obra / LEED/BREEAM AP]
- Retos principales: [plazo ajustado / presupuesto limitado / equipo sin experiencia en certificaciones]

instrucción 1 — Estructura de desglose del trabajo (WBS) para proyecto sostenible:
Crea la WBS completa del proyecto diferenciando el trabajo convencional de construcción del trabajo adicional específico de la certificación (documentación, ensayos, comisionado, comunicación con el organismo certificador). Para cada paquete de trabajo de certificación indica: responsable, entregable, fecha límite y coste estimado.

instrucción 2 — Gestión de riesgos de certificación:
Identifica los 10 riesgos más comunes que pueden hacer perder créditos o retrasar la certificación (cambio de materiales en obra sin validación, subcontratistas sin formación en sostenibilidad, retrasos en la entrega de EPDs, etc.) y diseña el plan de respuesta para cada uno, con acciones preventivas y de contingencia.

instrucción 3 — Plan de comisionado (Commissioning):
Diseña el plan de comisionado de sistemas del edificio (HVAC, iluminación, envolvente, renovables) requerido por LEED Fundamental y Enhanced Commissioning. Incluye: alcance del agente comisionador, actividades en fase de diseño, construcción y post-ocupación, y documentación requerida para el organismo certificador.

instrucción 4 — Gestión de la cadena de suministro sostenible:
Crea el proceso de selección, seguimiento y documentación de proveedores y materiales durante la obra para cumplir los créditos de materiales de LEED/BREEAM. Incluye: formulario de solicitud de EPDs y certificados, sistema de verificación de procedencia regional, registro de residuos de construcción por categoría y destino final.

instrucción 5 — Reporting y comunicación con stakeholders:
Define el sistema de reporting mensual del proyecto para los tres stakeholders principales (promotor, organismo certificador, futuros ocupantes), con los indicadores de avance de certificación, presupuesto sostenibilidad ejecutado y próximos hitos de documentación.

Formato de respuesta: WBS descrita en formato jerárquico, matriz de riesgos con probabilidad e impacto, plan de comisionado con cronograma y plantillas de seguimiento de materiales y residuos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar proyectos de construcción sostenible integrando los requisitos de certificación LEED y BREEAM en el plan de proyecto.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Formación en construcción sostenible para equipos con IA',
                'description'      => 'Diseña programas de formación y desarrollo para equipos de construcción en materia de sostenibilidad, certificaciones LEED/BREEAM y economía circular.',
                'prompt_content'   => <<<'EOT'
Actúa como un responsable de formación y desarrollo especializado en el sector de la construcción, con experiencia en el diseño de programas de capacitación en sostenibilidad para perfiles técnicos (arquitectos, ingenieros, jefes de obra, encargados) y no técnicos (comerciales, gestores de activos).

Objetivo: Diseñar un plan de formación en construcción sostenible y certificaciones medioambientales para una empresa constructora, promotora o consultora que quiere elevar las competencias de su equipo en esta materia.

Contexto de la organización:
- Tipo de empresa: [constructora / promotora / consultoría de sostenibilidad / gestora de activos]
- Número de empleados a formar: [número]
- Perfiles a formar: [arquitectos / ingenieros / jefes de obra / comerciales / directivos]
- Nivel de conocimiento actual del equipo: [nulo / básico / medio]
- Certificaciones objetivo de la empresa: [LEED AP / BREEAM AP / GBC España / todas]
- Presupuesto de formación anual: [importe o rango]
- Modalidad preferida: [presencial / online / mixta]

instrucción 1 — Diagnóstico de necesidades formativas:
Diseña un cuestionario de diagnóstico de 15 preguntas para evaluar el nivel actual de conocimiento del equipo en: conceptos de sostenibilidad en edificación, sistemas de certificación (LEED/BREEAM/VERDE), normativa energética (CTE HE, directiva EPBD), materiales sostenibles y proceso de comisionado. Incluye la escala de evaluación y cómo interpretar los resultados.

instrucción 2 — Itinerarios formativos por perfil:
Define el itinerario formativo específico para 4 perfiles: a) Arquitecto/Ingeniero proyectista, b) Jefe de obra, c) Gestor de activos/Asset manager, d) Director comercial. Para cada perfil: módulos obligatorios, duración, recursos recomendados (cursos GBC, materiales USGBC, libros de referencia) y certificación a obtener.

instrucción 3 — Programa de preparación para examen LEED AP o BREEAM AP:
Diseña un programa de preparación de 8 semanas para el examen LEED AP BD+C o BREEAM AP, con: plan de estudio semanal, recursos de estudio prioritarios, simulacros de examen y estrategias para los tipos de preguntas más difíciles.

instrucción 4 — Taller práctico de sostenibilidad en obra:
Diseña un taller presencial de 4 horas para jefes de obra y encargados que cubra: cómo identificar materiales con EPD en obra, gestión de residuos de construcción por categoría, protocolo de calidad del aire interior durante la obra y documentación fotográfica para la certificación. Incluye el guión del formador y los ejercicios prácticos.

instrucción 5 — Medición del impacto de la formación:
Define el sistema de evaluación del impacto de los programas formativos, con indicadores a medir antes, durante y 6 meses después de la formación. Incluye cómo calcular el ROI de la formación en sostenibilidad (mayor puntuación en certificaciones, reducción de no conformidades, mejora en el ratio de proyectos certificados).

Formato de respuesta: Itinerarios formativos por perfil en formato tabla, programa de preparación al examen semana a semana y guión del taller práctico listo para usar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar programas de formación en construcción sostenible y certificaciones LEED/BREEAM para equipos técnicos y comerciales.',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero de certificaciones LEED y BREEAM con IA',
                'description'      => 'Evalúa el retorno de inversión de certificaciones sostenibles en proyectos de construcción con modelos financieros y análisis coste-beneficio generados con IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista financiero especializado en inversiones inmobiliarias sostenibles, con experiencia en la evaluación económica de certificaciones de edificación verde y en la estructuración de financiación ESG para proyectos de construcción.

Objetivo: Construir el modelo financiero completo para evaluar la viabilidad y el retorno de inversión de obtener una certificación LEED o BREEAM en un proyecto de construcción nuevo o en rehabilitación.

Datos del proyecto financiero:
- Tipo y superficie del edificio: [tipología / m²]
- Coste de construcción convencional estimado (€/m²): [importe]
- Sobrecoste estimado de la certificación (% sobre convencional): [porcentaje]
- Nivel de certificación objetivo: [LEED Gold / LEED Platinum / BREEAM Excellent / BREEAM Outstanding]
- Uso previsto: [venta / alquiler / uso propio]
- Precio de venta o renta del mercado convencional: [€/m² o €/m²/año]
- Prima verde estimada en el mercado local: [porcentaje]
- Horizonte de inversión: [años]

instrucción 1 — Desglose del sobrecoste de certificación:
Detalla el sobrecoste típico de cada nivel de certificación LEED y BREEAM desglosado por categoría: honorarios del consultor de sostenibilidad, tasas del organismo certificador, medidas pasivas adicionales de diseño (% sobre PEM), sistemas activos de mayor eficiencia, comisionado y documentación. Proporciona rangos de referencia del mercado español y europeo.

instrucción 2 — Cuantificación de beneficios económicos:
Calcula los beneficios económicos cuantificables de la certificación a lo largo del ciclo de vida del activo:
a) Ahorro en costes operativos anuales (energía, agua, mantenimiento) en € y en % sobre costes totales
b) Prima en precio de venta o en renta mensual respecto a inmueble no certificado equivalente
c) Menor tasa de vacancia y mayor retención de inquilinos (datos de mercado europeo)
d) Acceso a financiación verde: spread diferencial en préstamos hipotecarios o corporativos verdes
e) Beneficios fiscales aplicables (deducciones por eficiencia energética, bonificaciones IBI en algunos municipios)

instrucción 3 — Modelo de flujo de caja a 10 y 20 años:
Construye la estructura de un modelo de flujo de caja libre del activo certificado a 10 y 20 años, con: ingresos por alquiler o venta (con prima verde), costes operativos reducidos, valor residual del activo al final del periodo y cálculo del VAN, TIR y payback diferencial frente al escenario convencional. Muestra el modelo con sensibilidad a los principales drivers (prima verde, ahorro energético, sobrecoste inicial).

instrucción 4 — Estructuración de financiación verde:
Explica cómo acceder a los principales instrumentos de financiación verde disponibles para este proyecto en España y Europa: préstamos ICO verdes, bonos verdes, financiación BEI/FEDER para eficiencia energética, hipotecas verdes para compradores de vivienda certificada y fondos de capital privado con mandato ESG. Para cada instrumento: requisito mínimo de certificación, plazo, coste y proceso de solicitud.

instrucción 5 — Informe ejecutivo para comité de inversión:
Redacta el resumen ejecutivo de 1 página que presentarías a un comité de inversión para justificar el incremento de presupuesto necesario para certificar el proyecto, con: recomendación clara, cifras clave del análisis coste-beneficio y gestión de los principales riesgos financieros.

Formato de respuesta: Modelo financiero descrito con estructura de celdas y fórmulas, tabla de sensibilidad, resumen ejecutivo listo para presentar y guía de acceso a financiación verde.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Evaluar el retorno de inversión y estructurar la financiación de proyectos de construcción con certificaciones LEED y BREEAM.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Normativa de construcción sostenible y compliance LEED con IA',
                'description'      => 'Navega el marco normativo de la construcción sostenible en España y la UE, y gestiona el cumplimiento legal de las certificaciones LEED y BREEAM con ayuda de IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho urbanístico y normativa de construcción sostenible, con experiencia en el análisis del marco regulatorio de la eficiencia energética en edificios en España y la Unión Europea, y en el asesoramiento jurídico a promotoras y constructoras en procesos de certificación LEED y BREEAM.

Objetivo: Proporcionar una guía jurídica y de compliance para una empresa del sector de la construcción que quiere asegurarse de que sus proyectos cumplen tanto la normativa obligatoria de sostenibilidad como los requisitos voluntarios de las certificaciones elegidas.

Contexto legal del proyecto:
- Tipo de proyecto: [obra nueva / gran rehabilitación / cambio de uso]
- Uso del edificio: [residencial / terciario / industrial / mixto]
- Comunidad autónoma: [localización]
- Certificación objetivo: [LEED / BREEAM / VERDE / todas]
- Fase de tramitación: [licencia de obra / durante la obra / certificado final]
- Retos normativos identificados: [si los hay]

instrucción 1 — Marco normativo obligatorio de eficiencia energética:
Describe el marco normativo vigente de obligado cumplimiento en España para edificios nuevos y grandes rehabilitaciones, incluyendo: Código Técnico de la Edificación (CTE DB HE 2019 y actualizaciones), Certificación Energética de Edificios (RD 390/2021), transposición de la Directiva EPBD (2018/844/UE y la nueva EPBD 2024), Plan de Recuperación PRTR en eficiencia energética y normativa autonómica aplicable. Señala los puntos de convergencia y divergencia con los requisitos de LEED/BREEAM.

instrucción 2 — Requisitos previos (prerequisites) de LEED con base normativa:
Analiza los prerequisitos obligatorios de LEED v4.1 BD+C que tienen una base normativa directa (energía mínima, calidad del agua, calidad del aire interior, gestión de residuos) y explica cómo demostrar el cumplimiento simultáneo de la normativa española y del sistema LEED, identificando los casos en que la normativa española es más exigente y los casos en que LEED va más allá.

instrucción 3 — Contratación pública verde (GPP):
Explica los requisitos de la normativa de compra pública verde en España (Ley 9/2017 de Contratos del Sector Público y criterios GPP de la Comisión Europea) para edificios públicos, y cómo una empresa constructora o promotora puede posicionarse para ganar licitaciones de edificios públicos sostenibles certificados.

instrucción 4 — Responsabilidad por incumplimiento:
Describe el régimen de responsabilidades (civil, administrativa y penal) que puede derivarse de: a) falsificación o manipulación de documentación para la certificación, b) incumplimiento de los compromisos de eficiencia energética declarados en la licencia, c) publicidad engañosa sobre las prestaciones sostenibles del edificio (greenwashing).

instrucción 5 — Protocolo de due diligence legal sostenible:
Crea un protocolo de due diligence legal para la adquisición de un activo inmobiliario certificado LEED o BREEAM, con la lista de documentos a revisar, las declaraciones y garantías que debe dar el vendedor sobre el mantenimiento de la certificación y las cláusulas de ajuste de precio en caso de pérdida de la certificación tras la transmisión.

Nota: Esta guía tiene carácter informativo. Consúltese con un abogado especializado para casos concretos.

Formato de respuesta: Guía normativa estructurada por temas, tabla comparativa normativa española vs. requisitos LEED/BREEAM y protocolo de due diligence en formato checklist.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar el cumplimiento legal de la normativa de construcción sostenible y las certificaciones LEED y BREEAM.',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte a clientes en proyectos de construcción sostenible con IA',
                'description'      => 'Crea guiones y respuestas para gestionar consultas de clientes sobre certificaciones LEED, BREEAM y sostenibilidad en proyectos de construcción y promoción inmobiliaria.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en experiencia de cliente para el sector de la construcción sostenible, con habilidad para explicar conceptos técnicos complejos de eficiencia energética y certificaciones medioambientales a compradores, inversores y usuarios finales sin formación técnica.

Objetivo: Diseñar un sistema completo de atención al cliente para una promotora o constructora que vende o arrienda edificios con certificaciones LEED o BREEAM, que permita resolver dudas técnicas, gestionar expectativas y convertir el conocimiento de la certificación en argumento de fidelización.

Contexto del equipo de soporte:
- Tipo de empresa: [promotora residencial / promotora de oficinas / constructora con venta directa]
- Tipo de cliente habitual: [comprador particular / empresa inquilina / inversor]
- Canales de atención: [call center / email / chat en web / visitas a la obra]
- Volumen de consultas mensuales sobre sostenibilidad: [número aproximado]
- Nivel técnico del equipo de atención: [sin formación técnica / formación básica / técnicos]
- Dudas más frecuentes: [qué significa LEED / cuánto ahorro en electricidad / si la certificación caduca]

instrucción 1 — Guía de producto para el equipo de atención:
Redacta una guía de referencia rápida para el equipo de atención al cliente que explique, en lenguaje sin tecnicismos: qué es LEED/BREEAM y por qué importa, las 5 preguntas más frecuentes sobre las certificaciones con respuesta lista para usar, cómo traducir cada característica técnica a un beneficio tangible para el cliente y cuándo escalar la consulta a un técnico especialista.

instrucción 2 — Guiones de atención para situaciones habituales:
Desarrolla guiones completos para 6 situaciones frecuentes:
a) Comprador que pregunta si realmente ahorrará en la factura de la luz
b) Empresa que quiere saber si el edificio cumple con su política ESG corporativa
c) Cliente que descubre que la certificación tiene un coste de mantenimiento anual
d) Inquilino que quiere saber qué comportamientos suyos afectan a la certificación del edificio
e) Cliente que compara el precio con un edificio no certificado y pregunta si "vale la pena"
f) Inversor que pregunta si la certificación caduca o puede perderse

instrucción 3 — Comunicaciones proactivas durante la obra y postventa:
Diseña la secuencia de comunicaciones proactivas al cliente desde la firma del contrato hasta 1 año después de la entrega de llaves: emails de avance de obra con hitos de certificación, notificación de obtención del certificado, guía de bienvenida al edificio sostenible (cómo aprovechar las instalaciones eficientes) y comunicación anual de ahorro energético obtenido.

instrucción 4 — Gestión de quejas sobre rendimiento energético:
Crea el protocolo de gestión de quejas cuando un cliente afirma que el ahorro energético real es inferior al prometido, con: proceso de verificación, respuesta estándar, cuándo se acepta una compensación o revisión técnica y cómo documentar el caso para mejorar futuras comunicaciones comerciales.

instrucción 5 — Contenido para la comunidad y post-venta:
Diseña un plan de contenido anual de 12 piezas (una por mes) para mantener la relación con los clientes post-venta, con temas como: consejos para maximizar el ahorro energético según la estación, novedades en normativa de sostenibilidad, invitación a participar en la medición del desempeño del edificio y actualizaciones de la certificación.

Formato de respuesta: Guiones listos para usar, guía de producto en formato fichas rápidas y calendario de comunicaciones post-venta con asuntos y estructura de cada email.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestionar la atención al cliente y la comunicación post-venta en proyectos de construcción con certificaciones LEED y BREEAM.',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría LEED y BREEAM freelance con IA',
                'description'      => 'Estructura tu negocio de consultoría independiente en certificaciones de construcción sostenible LEED y BREEAM usando inteligencia artificial para diferenciarte y escalar.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de negocio especializado en profesionales independientes del sector de la construcción sostenible, con experiencia en ayudar a LEED AP, BREEAM AP y técnicos de eficiencia energética a construir negocios de consultoría rentables y escalables.

Objetivo: Diseñar un modelo de negocio completo para un profesional con acreditación LEED AP o BREEAM AP que quiere ofrecer sus servicios de consultoría de forma independiente a promotoras, constructoras y gestoras de activos.

Perfil del freelance:
- Acreditación principal: [LEED AP BD+C / BREEAM AP / ambas / en proceso]
- Experiencia previa: [años en empresa del sector]
- Especialización técnica: [eficiencia energética / diseño bioclimático / gestión de proyectos / auditorías / formación]
- Red de contactos actual en el sector: [amplia / media / limitada]
- Objetivo de ingresos anuales: [importe]
- Capacidad de atención simultánea: [número de proyectos]

instrucción 1 — Propuesta de valor y posicionamiento:
Ayúdame a definir mi posicionamiento como consultor independiente de certificaciones sostenibles. Desarrolla: mi nicho de especialización óptimo (tipo de edificio, fase de proyecto, tipo de cliente), mi propuesta de valor única frente a consultoras generalistas y frente a otros freelances, y mi declaración de posicionamiento en 2 frases para usar en LinkedIn, propuestas y presentaciones.

instrucción 2 — Catálogo de servicios y tarifas:
Diseña un catálogo de 7 servicios de consultoría con alto potencial de demanda en el mercado español:
a) Gestión de la certificación LEED/BREEAM de principio a fin (LEED AP/BREEAM AP)
b) Auditoría de proyecto en fase de diseño (gap analysis de créditos)
c) Formación in-company para equipos de obra
d) Due diligence sostenible para compraventa de activos
e) Redacción de pliegos de condiciones sostenibles para licitaciones
f) Consultoría de eficiencia energética (RITE, CTE HE)
g) Auditoría energética según ISO 50002

Para cada servicio: descripción, cliente tipo, duración, tarifa recomendada (por horas o por proyecto) y margen estimado.

instrucción 3 — Captación de primeros proyectos:
Diseña una estrategia de captación de los primeros 3 clientes sin presupuesto publicitario. Incluye: los 10 eventos y ferias del sector donde debo estar presente (Greenbuild, Rebuild, Expo Real, etc.), guión de contacto inicial con directores técnicos de promotoras, propuesta de colaboración con estudios de arquitectura como consultor externo de sostenibilidad y cómo estructurar un proyecto piloto a tarifa reducida para conseguir el primer caso de éxito.

instrucción 4 — Propuesta comercial tipo:
Redacta una propuesta comercial completa para gestionar la certificación LEED Gold de un edificio de oficinas de 5.000 m². Incluye: alcance detallado del servicio (entregables por fase de proyecto), metodología de trabajo, equipo propuesto, cronograma, honorarios desglosados, condiciones de pago y garantías de servicio.

instrucción 5 — Escalabilidad y automatización:
Describe cómo escalar el negocio más allá de la capacidad individual del freelance, con: desarrollo de plantillas y herramientas propias (checklist LEED, scripts de cálculo, plantillas de documentación) que reducen el tiempo por proyecto, modelo de subcontratación de tareas especializadas, creación de curso online de preparación para examen LEED AP como fuente de ingresos pasivos y construcción de un blog/newsletter especializado para posicionarse como referente del sector.

Formato de respuesta: Catálogo de servicios con tarifas en tabla, propuesta comercial lista para adaptar y usar, y plan de escalabilidad con cronograma de implementación a 12 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir y escalar un negocio de consultoría freelance en certificaciones LEED y BREEAM para el sector de la construcción sostenible.',
                'vote_score'       => 36,
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
