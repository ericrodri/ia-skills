<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills628Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id' => 1,
                'title' => 'Marketing inclusivo para centros de educación especial con IA',
                'description' => 'Crea estrategias de marketing sensibles y efectivas para centros de educación especial y atención a la diversidad funcional usando inteligencia artificial.',
                'prompt_content' => <<<'EOT'
Actúa como un especialista en marketing con experiencia en el sector de la educación especial y la atención a la diversidad funcional. Tu misión es ayudarme a desarrollar una estrategia de marketing inclusivo, ético y efectivo para un centro educativo que atiende a personas con necesidades educativas especiales (NEE), diversidad funcional o discapacidad.

contexto del centro:
- Nombre del centro: [nombre del centro]
- Tipo de servicios: [especificar: TEA, TDAH, discapacidad motora, parálisis cerebral, síndrome de Down, etc.]
- Público objetivo: familias con hijos en edad escolar, adultos con diversidad funcional, instituciones públicas
- Zona geográfica: [ciudad o región]
- Presupuesto estimado de marketing: [bajo/medio/alto]

tarea principal:
Desarrolla un plan de marketing inclusivo completo que incluya los siguientes apartados:

1. ANÁLISIS DE AUDIENCIA Y SEGMENTACIÓN
Define los perfiles de familias y cuidadores que buscan servicios de educación especial. Incluye sus preocupaciones emocionales, sus fuentes de información habituales, los términos de búsqueda que utilizan en Google y las redes sociales que frecuentan. Considera también a los prescriptores clave: pediatras, psicólogos clínicos, trabajadores sociales, asociaciones de familias y administraciones educativas.

2. PROPUESTA DE VALOR Y MENSAJES CLAVE
Redacta 5 mensajes de marketing que transmitan confianza, profesionalidad y calidez humana. Evita términos que puedan resultar estigmatizantes o paternalistas. Los mensajes deben enfocarse en las capacidades y el desarrollo de los alumnos, no en sus limitaciones. Incluye variantes adaptadas para familias de niños pequeños, adolescentes y adultos con diversidad funcional.

3. ESTRATEGIA DE CONTENIDOS
Diseña un calendario editorial de 4 semanas para redes sociales (Instagram, Facebook y LinkedIn) con los siguientes tipos de contenido:
- Casos de éxito (con consentimiento y respeto a la privacidad)
- Explicaciones de metodologías terapéuticas y pedagógicas
- Consejos para familias
- Noticias del centro y del sector
- Contenido educativo sobre diversidad funcional
Para cada publicación indica el formato recomendado, el copy y el hashtag principal.

4. SEO Y PRESENCIA DIGITAL
Proporciona una lista de 15 palabras clave long-tail en español que las familias usan al buscar centros de educación especial. Incluye sugerencias para estructurar las páginas del sitio web, los metadescriptions y los títulos H1 de las páginas principales: inicio, servicios, quiénes somos, recursos para familias y contacto.

5. ACCESIBILIDAD DIGITAL
Describe qué estándares de accesibilidad web (WCAG 2.1) debe cumplir el sitio del centro y cómo comunicar este compromiso como parte de la identidad de marca. Sugiere herramientas gratuitas para auditar la accesibilidad del sitio web actual.

6. ALIANZAS ESTRATÉGICAS Y RELACIONES PÚBLICAS
Identifica 10 tipos de organizaciones con las que el centro podría establecer acuerdos de colaboración para aumentar su visibilidad: asociaciones de familias, colegios ordinarios con aulas TEA, servicios sociales municipales, fundaciones, etc. Proporciona un modelo de correo de presentación para iniciar el contacto.

7. MÉTRICAS Y KPIs
Define 8 indicadores clave para medir el rendimiento del plan de marketing: tasa de consultas entrantes, coste por lead cualificado, tasa de conversión de consulta a matriculación, alcance en redes sociales, posicionamiento SEO de palabras clave prioritarias, puntuación NPS de las familias actuales, y tasa de renovación de plazas.

Al finalizar, dame 3 recomendaciones prioritarias para los primeros 30 días y un checklist de acciones rápidas que no requieran presupuesto adicional.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 35,
                'use_case' => 'Estrategia de marketing para centros de educación especial',
                'vote_score' => 38,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 2,
                'title' => 'Desarrollar apps accesibles para alumnos con NEE con IA',
                'description' => 'Diseña y desarrolla aplicaciones educativas accesibles para alumnos con necesidades educativas especiales, siguiendo estándares de accesibilidad y pedagogía adaptada.',
                'prompt_content' => <<<'EOT'
Actúa como un desarrollador de software especializado en tecnología asistiva y aplicaciones educativas accesibles para personas con necesidades educativas especiales (NEE) y diversidad funcional. Necesito tu ayuda para diseñar y construir una aplicación que mejore la experiencia de aprendizaje de este colectivo.

contexto del proyecto:
- Tipo de app: [web / móvil iOS / móvil Android / multiplataforma]
- Colectivo objetivo: [TEA (Trastorno del Espectro Autista) / TDAH / dislexia / discapacidad visual / discapacidad auditiva / parálisis cerebral / combinación]
- Edad del usuario final: [infantil 4-8 años / primaria 8-12 / secundaria 12-18 / adultos]
- Objetivo pedagógico: [lectoescritura / matemáticas / comunicación aumentativa / habilidades sociales / autonomía personal]
- Stack tecnológico preferido: [React Native / Flutter / Vue.js / otro]

objetivo principal:
Desarrolla una guía técnica completa y el código base inicial para una aplicación educativa accesible. Incluye los siguientes apartados:

1. ARQUITECTURA DE ACCESIBILIDAD
Explica los principios WCAG 2.1 nivel AA y cómo implementarlos en el stack tecnológico elegido. Detalla el uso correcto de: atributos ARIA, roles semánticos, contraste de colores (ratio mínimo 4.5:1 para texto normal), tamaños de fuente mínimos, áreas táctiles (mínimo 44x44px), navegación por teclado y compatibilidad con lectores de pantalla (VoiceOver en iOS, TalkBack en Android, NVDA/JAWS en web).

2. COMPONENTES UI ACCESIBLES
Proporciona el código comentado de los siguientes componentes adaptados para NEE:
- Botón accesible con feedback háptico y auditivo
- Tarjeta de actividad con pictogramas ARASAAC o similares
- Selector de respuesta de opción múltiple con tamaño ampliado
- Barra de progreso con descripción textual
- Pantalla de inicio con opciones de personalización de tipografía y color

3. ADAPTACIONES ESPECÍFICAS POR COLECTIVO
Para cada tipo de NEE indicado, describe las adaptaciones específicas necesarias:
- TEA: reducción de estímulos, estructura predecible, uso de pictogramas, anticipación de transiciones
- TDAH: sesiones cortas, gamificación, recordatorios frecuentes, minimización de distracciones
- Dislexia: fuente OpenDyslexic, interlineado ampliado, texto a voz, síntesis de voz integrada
- Discapacidad visual: compatibilidad total con lectores de pantalla, audio descripción
- Discapacidad auditiva: subtítulos, alertas visuales, lengua de signos integrada (vídeo)

4. SISTEMA DE COMUNICACIÓN AUMENTATIVA Y ALTERNATIVA (CAA)
Diseña la lógica de un módulo CAA básico que permita al alumno comunicarse mediante pictogramas. Incluye: estructura de datos para el tablero de comunicación, lógica de síntesis de voz a partir de la selección de pictogramas, sistema de personalización del tablero por el terapeuta, y almacenamiento local para uso sin conexión.

5. PANEL DE SEGUIMIENTO PARA EDUCADORES
Describe la arquitectura del módulo para docentes y terapeutas que incluya: registro de sesiones de uso, métricas de rendimiento por actividad, exportación de informes en PDF, y sistema de ajuste de dificultad basado en el rendimiento del alumno.

6. PRUEBAS DE ACCESIBILIDAD
Proporciona un plan de pruebas de accesibilidad que incluya: herramientas automatizadas (axe, Lighthouse, WAVE), metodología de pruebas con usuarios reales con discapacidad, lista de verificación manual de accesibilidad, y criterios de aceptación mínimos antes del lanzamiento.

Termina con una hoja de ruta de desarrollo de 12 semanas y las 5 bibliotecas de código abierto más recomendadas para este tipo de proyecto.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 50,
                'use_case' => 'Desarrollo de apps educativas accesibles para diversidad funcional',
                'vote_score' => 42,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 3,
                'title' => 'Diseñar materiales didácticos adaptados para diversidad funcional con IA',
                'description' => 'Crea materiales didácticos visuales, accesibles y adaptados para alumnos con diversidad funcional usando principios de diseño universal para el aprendizaje.',
                'prompt_content' => <<<'EOT'
Actúa como un diseñador gráfico especializado en diseño universal para el aprendizaje (DUA) y materiales educativos inclusivos para personas con diversidad funcional. Necesito desarrollar recursos visuales didácticos adaptados para diferentes necesidades educativas especiales.

contexto del proyecto:
- Materia o área de aprendizaje: [lectoescritura / matemáticas / habilidades sociales / autonomía / otra]
- Colectivo destinatario: [TEA / TDAH / dislexia / discapacidad intelectual / combinación]
- Rango de edad: [infantil / primaria / secundaria / adultos]
- Formato de salida: [fichas imprimibles / presentación digital / tarjetas laminadas / tablero interactivo]
- Herramientas disponibles: [Canva / Adobe Illustrator / Figma / PowerPoint]

objetivo:
Diseña un sistema completo de materiales didácticos adaptados que incluya los siguientes elementos:

1. PRINCIPIOS DE DISEÑO UNIVERSAL PARA EL APRENDIZAJE (DUA)
Explica cómo los tres principios del DUA (múltiples medios de representación, múltiples medios de acción y expresión, y múltiples medios de implicación) deben reflejarse en el diseño gráfico de los materiales. Proporciona ejemplos visuales descriptivos de cómo implementar cada principio.

2. SISTEMA DE PICTOGRAMAS Y APOYOS VISUALES
Describe un sistema de pictogramas coherente para apoyar la comprensión del contenido:
- Fuentes de pictogramas gratuitas y sus licencias (ARASAAC, Mulberry, OpenSymbols)
- Criterios para seleccionar pictogramas: claridad, universalidad, ausencia de ambigüedad
- Cómo combinar texto y pictograma en el mismo material
- Reglas de consistencia visual: mismo estilo en toda la colección
- Adaptación de los pictogramas para distintas edades

3. TIPOGRAFÍA Y LEGIBILIDAD
Define las especificaciones tipográficas para materiales accesibles:
- Fuentes recomendadas para dislexia: OpenDyslexic, Dyslexie, Arial, Verdana
- Tamaños mínimos según el soporte (impresión A4 vs pantalla)
- Interlineado y espaciado entre letras óptimos
- Contraste de color entre texto y fondo (con valores hexadecimales concretos)
- Alternativas para alumnos con baja visión

4. PALETA DE COLORES Y SEMÁNTICA DEL COLOR
Diseña una paleta de colores accesible que cumpla con los estándares WCAG:
- Proporciona 8 colores con sus códigos HEX y RGB
- Verifica que todos superan ratio de contraste 4.5:1 sobre blanco y negro
- Asigna significados consistentes a los colores (verde = correcto, rojo = error, azul = información, etc.)
- Versión alternativa en escala de grises para impresión sin color
- Consideraciones para personas con daltonismo (evitar combinaciones rojo-verde)

5. LAYOUTS Y PLANTILLAS
Proporciona las especificaciones de layout para 4 tipos de materiales:
- Ficha de actividad individual (A4): zonas de trabajo, instrucción visual, espacio de respuesta
- Tarjeta de aprendizaje (A6): anverso con concepto, reverso con explicación visual
- Tablero de comunicación (A3): cuadrícula de pictogramas con tamaño mínimo de celda
- Presentación de secuencia (16:9): estructura de pasos con apoyo visual en cada diapositiva

6. ADAPTACIONES POR COLECTIVO
Describe las adaptaciones específicas de diseño para cada NEE:
- TEA: fondos neutros, sin elementos decorativos que distraigan, secuencias visuales claras, anticipación de cambios
- TDAH: fragmentación en pasos cortos, uso de flechas y marcadores de progreso, colores motivadores
- Dislexia: fuente especializada, interlineado ampliado, no justificar texto, columna única
- Baja visión: fuente mínima 18pt, alto contraste, sin filigranas de fondo

7. GUÍA DE PRODUCCIÓN
Detalla el flujo de trabajo para producir los materiales: dimensiones de los archivos, resolución mínima para impresión (300 ppp), formatos de exportación recomendados, y lista de verificación de accesibilidad antes de entregar el material al centro educativo.

Finaliza con 5 recursos gratuitos en línea donde encontrar pictogramas, iconos e ilustraciones libres de derechos para este tipo de proyectos.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 40,
                'use_case' => 'Diseño de materiales educativos inclusivos y accesibles',
                'vote_score' => 36,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 4,
                'title' => 'Estrategias de venta de servicios de apoyo educativo especializado con IA',
                'description' => 'Desarrolla argumentarios y estrategias de ventas para ofrecer servicios de apoyo educativo especializado a familias de personas con diversidad funcional.',
                'prompt_content' => <<<'EOT'
Actúa como un consultor de ventas especializado en el sector de los servicios educativos y terapéuticos para personas con diversidad funcional y necesidades educativas especiales. Ayúdame a construir una estrategia de ventas ética, empática y efectiva para un servicio de apoyo educativo especializado.

contexto del servicio:
- Tipo de servicio: [logopedia / psicología / pedagogía terapéutica / fisioterapia / terapia ocupacional / centro de día / apoyo escolar especializado]
- Modalidad: [presencial / online / domicilio / mixta]
- Precio aproximado por sesión o mensualidad: [importe]
- Zona de actuación: [ciudad o región]
- Principal competidor o alternativa pública: [lista de centros o servicios públicos equivalentes]

objetivo:
Desarrolla un sistema completo de ventas y captación de familias que incluya:

1. MAPA DEL PROCESO DE DECISIÓN DE COMPRA
Describe el recorrido emocional y racional que sigue una familia desde que detecta que su hijo necesita apoyo especializado hasta que contrата un servicio privado. Identifica los puntos de dolor, las dudas más frecuentes, las objeciones típicas y los momentos de mayor receptividad a la oferta. Ten en cuenta que muchas familias llegan tras años de búsqueda y frustración con el sistema público.

2. ARGUMENTARIO DE VENTAS EMPÁTICO
Redacta un guion de conversación para la primera llamada o reunión con una familia interesada. El guion debe:
- Comenzar con escucha activa genuina, no con presentación del servicio
- Hacer las 5 preguntas clave para entender la situación del alumno
- Presentar el servicio como solución a sus necesidades concretas, no como catálogo genérico
- Usar lenguaje positivo y centrado en las capacidades del alumno
- Anticipar y responder las 8 objeciones más frecuentes (precio, distancia, lista de espera del sistema público, duda sobre la eficacia, etc.)

3. PROPUESTA PERSONALIZADA
Diseña la estructura de una propuesta escrita personalizada para una familia. Incluye: resumen de la situación del alumno tal como la entienden, plan de intervención propuesto, metodología de trabajo, equipo profesional implicado, indicadores de progreso que se monitorearán, calendario orientativo, y desglose de tarifas con opciones de pago flexible.

4. GESTIÓN DE OBJECIONES ESPECÍFICAS DEL SECTOR
Desarrolla respuestas detalladas para estas objeciones típicas del sector:
- "El AMPA ya ofrece apoyo gratuito" / "El colegio ya tiene PT y AL"
- "Es muy caro para lo que dura cada sesión"
- "Ya lo llevamos a un sitio y no vimos resultados"
- "El médico dijo que ya se le pasará"
- "Queremos esperar a ver qué dice el equipo de orientación"
- "Vamos a pensarlo y te llamamos"

5. SEGUIMIENTO POST-REUNIÓN
Crea una secuencia de 4 mensajes de seguimiento (email o WhatsApp) para enviar en los 15 días posteriores a la primera reunión cuando la familia no ha tomado una decisión. Los mensajes deben aportar valor real (artículo útil, testimonio de otra familia, invitación a una sesión de prueba gratuita) sin resultar intrusivos o presionadores.

6. INDICADORES DE VENTAS Y RATIOS OBJETIVO
Define los 6 KPIs de ventas más relevantes para este negocio: tasa de conversión de consulta a primera sesión, tasa de conversión de primera sesión a baja, churn mensual, valor de vida del cliente (LTV), coste de adquisición por familia, y NPS de familias activas. Proporciona benchmarks orientativos del sector.

Finaliza con una lista de 10 acciones de bajo coste para generar consultas entrantes de familias sin depender de publicidad pagada.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 35,
                'use_case' => 'Ventas y captación de familias para servicios educativos especializados',
                'vote_score' => 33,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 5,
                'title' => 'Diseño de producto educativo para alumnos con TEA y TDAH con IA',
                'description' => 'Define y diseña productos educativos digitales centrados en las necesidades de alumnos con Trastorno del Espectro Autista (TEA) y TDAH usando metodologías de product management.',
                'prompt_content' => <<<'EOT'
Actúa como un Product Manager especializado en EdTech y tecnología asistiva para personas con TEA (Trastorno del Espectro Autista) y TDAH. Necesito desarrollar un producto educativo digital que responda a las necesidades reales de estos alumnos y de los profesionales que trabajan con ellos.

contexto del producto:
- Tipo de producto: [app móvil / plataforma web / dispositivo físico + software / combinación]
- Usuarios finales directos: [alumnos / docentes y terapeutas / familias / los tres]
- Rango de edad de los alumnos: [infantil / primaria / secundaria]
- Objetivo terapéutico-educativo principal: [comunicación / autonomía / habilidades sociales / aprendizaje académico / regulación emocional]
- Modelo de negocio: [SaaS para centros / freemium para familias / venta a administraciones / B2B2C]

objetivo:
Desarrolla un plan de producto completo que incluya los siguientes bloques:

1. INVESTIGACIÓN DE USUARIO Y DEFINICIÓN DE NECESIDADES
Diseña un plan de investigación UX para entender las necesidades de los tres tipos de usuarios (alumnos, profesionales, familias). Incluye:
- 10 preguntas para entrevistas con docentes y terapeutas de TEA y TDAH
- 8 preguntas para entrevistas con familias
- Protocolo de observación de sesiones terapéuticas (consideraciones éticas incluidas)
- Cómo realizar pruebas de usabilidad con usuarios con TEA sin generar estrés
- Plantilla de user persona para cada tipo de usuario

2. ESPECIFICACIÓN DE NECESIDADES ESPECÍFICAS POR COLECTIVO
Detalla los requerimientos funcionales que surgen de las características cognitivas de cada colectivo:
- TEA: necesidad de rutinas predecibles, anticipación de cambios, mínima ambigüedad en instrucciones, comunicación aumentativa, ajuste sensorial (sonidos, colores, animaciones)
- TDAH: sesiones cortas con objetivos claros, gamificación sin sobreestimulación, recordatorios y temporizadores visuales, seguimiento del progreso en tiempo real, recompensas inmediatas

3. ROADMAP DE PRODUCTO (12 MESES)
Define el roadmap trimestral con los siguientes hitos:
- Q1: MVP con funcionalidades mínimas validadas con 3 centros piloto
- Q2: incorporación de feedback, mejoras de accesibilidad y primer módulo de analítica para terapeutas
- Q3: expansión de funcionalidades según datos de uso, lanzamiento comercial
- Q4: integraciones con otras herramientas (Google Classroom, plataformas SEIS, etc.) y modelo de escalado

4. MÉTRICAS DE PRODUCTO Y CRITERIOS DE ÉXITO
Define 10 métricas de producto adaptadas a este contexto:
- Métricas de engagement del alumno: tiempo por sesión, actividades completadas, racha de uso diario
- Métricas de efectividad terapéutica: progreso hacia objetivos IEP/DIAC, reducción de conductas disruptivas
- Métricas de satisfacción del profesional: tiempo ahorrado en planificación, facilidad de ajuste de dificultad
- Métricas de negocio: activación, retención a 30/60/90 días, expansión por centro

5. PROCESO DE VALIDACIÓN CON CENTROS PILOTO
Describe el proceso para validar el producto con 3-5 centros de educación especial o AULAS TEA:
- Criterios de selección de centros piloto
- Estructura del acuerdo de piloto (qué ofrece el producto, qué aporta el centro)
- Protocolo de onboarding de docentes y terapeutas
- Recogida de datos cualitativos y cuantitativos durante el piloto
- Proceso de análisis y priorización de feedback

6. CONSIDERACIONES ÉTICAS Y PROTECCIÓN DE DATOS
Identifica los aspectos éticos y legales específicos de este tipo de producto:
- Tratamiento de datos de menores con discapacidad (RGPD + LOPD-GDD)
- Consentimiento informado de familias y centros
- Minimización de datos recogidos de los alumnos
- Transparencia sobre el uso de IA en la adaptación del contenido
- Proceso de desactivación y eliminación de datos al salir del piloto

Finaliza con una comparativa de los 5 principales competidores o productos similares existentes en el mercado español y europeo, señalando sus fortalezas y las oportunidades de diferenciación.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 55,
                'use_case' => 'Product management para EdTech de diversidad funcional',
                'vote_score' => 44,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 6,
                'title' => 'Gestión de equipos multidisciplinares en centros de educación especial con IA',
                'description' => 'Optimiza la gestión de equipos formados por pedagogos, psicólogos, logopedas y terapeutas en centros de educación especial usando inteligencia artificial.',
                'prompt_content' => <<<'EOT'
Actúa como un director de recursos humanos con experiencia en la gestión de equipos multidisciplinares en centros de educación especial, atención temprana y servicios de apoyo a la diversidad funcional. Necesito tu ayuda para estructurar y optimizar la gestión de personas en este tipo de organizaciones.

contexto del centro:
- Tipo de organización: [colegio de educación especial / centro de atención temprana / asociación de familias con servicios propios / empresa de servicios terapéuticos]
- Tamaño del equipo: [número de profesionales]
- Perfiles profesionales presentes: [pedagogos terapéuticos, psicólogos, logopedas, fisioterapeutas, terapeutas ocupacionales, auxiliares, trabajadores sociales]
- Situación actual: [crecimiento / reestructuración / mejora de la coordinación / alta rotación]

objetivo:
Desarrolla un sistema completo de gestión de equipos multidisciplinares que incluya:

1. ESTRUCTURA ORGANIZATIVA Y ROLES
Define la estructura organizativa óptima para un equipo multidisciplinar en un centro de educación especial de entre 15 y 40 profesionales. Incluye:
- Organigrama con líneas de reporte y coordinación
- Descripción de roles y responsabilidades para cada perfil profesional
- Mecanismos de coordinación entre perfiles (reuniones de caso, protocolos de derivación interna, sistemas de registro compartido)
- Figura del coordinador de caso y sus responsabilidades

2. SELECCIÓN Y ONBOARDING DE PROFESIONALES ESPECIALIZADOS
Diseña el proceso de selección para los perfiles más difíciles de encontrar en el sector:
- Criterios de selección para cada perfil (logopeda especializada en CAA, terapeuta ocupacional de integración sensorial, PT con experiencia en TEA severo)
- Entrevista por competencias: 10 preguntas clave y qué evalúa cada una
- Prueba práctica de evaluación: cómo diseñar una situación de trabajo real
- Plan de onboarding de 30-60-90 días para nuevos profesionales
- Mentoring con un profesional sénior durante los primeros 3 meses

3. GESTIÓN DEL DESGASTE EMOCIONAL Y BURNOUT
El sector de la educación especial tiene tasas elevadas de burnout. Diseña un plan de prevención que incluya:
- Señales de alerta de desgaste emocional específicas de este colectivo profesional
- Protocolo de supervisión clínica grupal (frecuencia, formato, confidencialidad)
- Política de autocuidado y bienestar del equipo
- Rotación de casos para evitar la sobrecarga emocional por vinculación prolongada
- Recursos de apoyo psicológico para el equipo

4. EVALUACIÓN DEL DESEMPEÑO EN CONTEXTOS ESPECIALIZADOS
Diseña un sistema de evaluación del desempeño adaptado a profesionales de la educación especial:
- Criterios de evaluación que integren: calidad de la intervención, coordinación con el equipo, comunicación con familias, actualización formativa y contribución al proyecto educativo
- Formato de la reunión de evaluación anual y las revisiones trimestrales
- Plantilla de evaluación para cada perfil profesional
- Proceso de gestión del bajo rendimiento con enfoque constructivo

5. FORMACIÓN CONTINUA Y DESARROLLO PROFESIONAL
Elabora un plan de formación anual para el equipo que incluya:
- Formación interna: sesiones de intercambio de conocimiento entre perfiles, estudio de casos, revisión de literatura científica
- Formación externa: congresos, cursos especializados, supervisión externa
- Presupuesto formativo orientativo por profesional y año
- Sistema de transferencia del aprendizaje: cómo el conocimiento adquirido externamente se comparte con el equipo

6. COMUNICACIÓN Y COORDINACIÓN CON FAMILIAS
Define el protocolo de comunicación del equipo con las familias de los alumnos:
- Asignación de interlocutor principal por familia (tutor de caso)
- Frecuencia y formato de las reuniones de seguimiento (informes trimestrales, reuniones presenciales, comunicación cotidiana)
- Manejo de conflictos con familias: protocolo de mediación interna
- Formación del equipo en comunicación empática y gestión de expectativas familiares

Finaliza con una lista de 8 herramientas digitales (software de gestión de centros, plataformas de trabajo social, aplicaciones de registro de sesiones) que pueden mejorar la coordinación del equipo multidisciplinar.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 45,
                'use_case' => 'Gestión de RRHH en centros de educación especial',
                'vote_score' => 37,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 7,
                'title' => 'Gestión financiera de centros de atención a la diversidad funcional con IA',
                'description' => 'Analiza y optimiza la viabilidad financiera de centros y servicios de atención a personas con diversidad funcional, incluyendo subvenciones públicas y modelos de financiación mixta.',
                'prompt_content' => <<<'EOT'
Actúa como un consultor financiero especializado en organizaciones del tercer sector y empresas de servicios sociales y educativos para personas con diversidad funcional. Necesito analizar la viabilidad financiera de un centro de atención especializada y optimizar su modelo de financiación.

contexto de la organización:
- Tipo de entidad: [fundación / asociación sin ánimo de lucro / empresa privada / cooperativa]
- Servicios prestados: [centro de día / atención temprana / colegio de educación especial / servicios de apoyo en el domicilio / combinación]
- Número de usuarios atendidos: [número]
- Personal en plantilla: [número de profesionales]
- Fuentes de ingresos actuales: [cuotas de familias / concierto educativo / subvenciones / convenio con administración / prestación de servicios a entidades]
- Déficit o superávit actual estimado: [situación]

objetivo:
Desarrolla un análisis financiero completo y un plan de optimización que incluya los siguientes bloques:

1. ANÁLISIS DEL MODELO DE FINANCIACIÓN
Explica los cuatro modelos de financiación más habituales en este sector en España y sus implicaciones financieras:
- Concierto educativo con la Administración autonómica: cómo funciona el módulo económico, cómo negociarlo y actualizarlo
- Convenio de colaboración con servicios sociales municipales o autonómicos: tipología, plazos y condiciones
- Financiación mixta (cuotas familiares + subvenciones + concierto): cómo equilibrar las fuentes para reducir la dependencia de cada una
- Prestación económica de la Ley de Dependencia (SAAD): cómo capturar esta fuente de financiación para los usuarios que tienen reconocida la dependencia

2. ESTRUCTURA DE COSTES Y PUNTO DE EQUILIBRIO
Analiza la estructura de costes típica de un centro de atención a la diversidad funcional:
- Costes de personal (habitualmente el 70-80% del total): ratio de profesionales por usuario según el tipo de servicio
- Costes de instalaciones: alquiler, mantenimiento, adaptaciones de accesibilidad
- Costes de material terapéutico y pedagógico
- Costes de gestión, administración y dirección
- Calcula el punto de equilibrio para distintos escenarios de ocupación y tarifa media por usuario

3. ANÁLISIS DE SUBVENCIONES Y FINANCIACIÓN PÚBLICA
Mapea las principales fuentes de financiación pública disponibles en España para este tipo de entidades:
- Subvenciones de Ministerio de Derechos Sociales (Plan Estratégico del Tercer Sector)
- Subvenciones autonómicas de servicios sociales y educación
- Convocatorias de fundaciones privadas (La Caixa, ONCE, Telefónica, etc.)
- Fondos europeos: FSE+ para inclusión social y educación, FEADER en zonas rurales
- Cuota de reserva del 2% del IRPF para entidades declaradas de utilidad pública
Para cada fuente indica: cuantía habitual, plazos de convocatoria, requisitos mínimos y documentación necesaria.

4. OPTIMIZACIÓN DE LA RATIO COSTE-CALIDAD
Identifica 8 áreas de optimización de costes que no comprometan la calidad asistencial:
- Agrupamiento de servicios y economías de escala
- Gestión compartida de servicios administrativos entre entidades del sector
- Compra agrupada de material terapéutico
- Optimización de turnos y ratios de personal según ocupación real
- Digitalización de la gestión documental y clínica
- Voluntariado corporativo como complemento al equipo profesional

5. CUADRO DE MANDO FINANCIERO
Define 12 indicadores financieros específicos para este tipo de organización:
- Coste por usuario atendido y por hora de servicio
- Grado de cobertura de los costes de personal por ingresos garantizados
- Ratio de dependencia de la financiación pública (riesgo de concentración)
- Fondo de maniobra y liquidez a 90 días
- Tasa de impago de cuotas familiares
- Coste de captación de subvenciones (horas de gestión por euro obtenido)

6. PLANIFICACIÓN FINANCIERA A 3 AÑOS
Elabora una estructura de planificación financiera trianual que permita:
- Proyectar ingresos bajo tres escenarios (optimista, base, pesimista)
- Anticipar necesidades de financiación temporal durante los meses de espera de subvenciones
- Construir un fondo de reserva equivalente a 3 meses de costes fijos
- Evaluar la viabilidad de la apertura de nuevas plazas o servicios

Finaliza con una recomendación sobre la forma jurídica más adecuada en función del modelo de negocio y las fuentes de financiación predominantes.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 50,
                'use_case' => 'Viabilidad financiera de centros de diversidad funcional',
                'vote_score' => 40,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 8,
                'title' => 'Marco legal de la educación especial y derechos de la diversidad funcional con IA',
                'description' => 'Analiza el marco normativo de la educación especial en España y los derechos de las personas con diversidad funcional para asesorar a centros, familias y profesionales.',
                'prompt_content' => <<<'EOT'
Actúa como un abogado especializado en derecho educativo, discapacidad y diversidad funcional en España. Necesito un análisis jurídico completo del marco normativo aplicable a la educación especial y los derechos de las personas con diversidad funcional, así como orientación práctica para familias, centros educativos y profesionales del sector.

contexto de la consulta:
- Perfil del consultante: [familia de alumno con NEE / centro educativo especial / centro de atención temprana / asociación de personas con discapacidad / profesional del sector]
- Comunidad Autónoma: [indicar CA, ya que hay competencias transferidas]
- Situación específica: [escolarización / valoración de necesidades / recursos de apoyo / acceso a prestaciones / discriminación / conflicto con la administración]

objetivo:
Elabora un análisis jurídico y una guía práctica que incluya:

1. MARCO NORMATIVO ESTATAL VIGENTE
Describe la legislación principal que rige la educación especial y los derechos de la diversidad funcional en España:
- Constitución Española: artículos 27 (derecho a la educación) y 49 (protección de personas con discapacidad, reformado en 2021)
- Ley Orgánica 3/2020 (LOMLOE): cambios respecto a la educación especial y el modelo de educación inclusiva
- Real Decreto Legislativo 1/2013: Ley General de derechos de las personas con discapacidad y de su inclusión social
- Convención de la ONU sobre los derechos de las personas con discapacidad (2006, ratificada por España en 2008): alcance jurídico y aplicabilidad directa
- Ley 39/2006 de Dependencia (LAPAD): prestaciones relacionadas con la atención educativa y personal de apoyo

2. DERECHOS DE LOS ALUMNOS CON NEE EN EL SISTEMA EDUCATIVO
Detalla los derechos reconocidos legalmente a los alumnos con necesidades específicas de apoyo educativo (NEAE):
- Derecho a la evaluación psicopedagógica y al dictamen de escolarización
- Derecho a la adaptación curricular individualizada (ACI)
- Derecho a los recursos de apoyo: PT, AL, fisioterapeuta, auxiliar técnico educativo
- Derecho a la escolarización en el centro más próximo al domicilio con los apoyos necesarios
- Derecho a la información y participación de la familia en el proceso educativo
- Plazos legales que la Administración debe cumplir en cada fase del proceso

3. CONFLICTOS MÁS FRECUENTES Y VÍA DE RESOLUCIÓN
Describe los conflictos jurídicos más habituales entre familias y la Administración educativa, con el procedimiento de reclamación recomendado en cada caso:
- Denegación o retraso en la valoración psicopedagógica
- Escolarización en un centro inadecuado para las necesidades del alumno
- Insuficiencia de apoyos y recursos asignados
- Negativa a elaborar o revisar la ACI
- Acoso escolar de alumnos con discapacidad
- Expulsión o cambio de centro sin procedimiento adecuado

Para cada conflicto indica: recurso administrativo aplicable, plazo para interponerlo, órgano ante el que se dirige y probabilidad de éxito según jurisprudencia reciente.

4. ACCESO A PRESTACIONES DE LA LEY DE DEPENDENCIA
Explica el proceso para que un alumno con diversidad funcional acceda a las prestaciones del Sistema para la Autonomía y Atención a la Dependencia:
- Requisitos para solicitar la valoración de dependencia en menores
- Grados de dependencia y servicios asociados a cada grado
- Prestaciones más relevantes para el entorno educativo: servicio de atención temprana, asistencia personal, centros de día
- Reclamación ante denegación o valoración insuficiente

5. MARCO NORMATIVO DE LOS CENTROS PRIVADOS Y CONCERTADOS
Analiza las obligaciones legales de los centros de educación especial privados y concertados:
- Requisitos para obtener el concierto educativo en cada Comunidad Autónoma
- Obligaciones en materia de accesibilidad (RD 1/2013 y normativa de edificación)
- Protección de datos de menores con discapacidad: requisitos específicos del RGPD y la LOPD-GDD
- Responsabilidad civil del centro ante incidentes con alumnos con NEE
- Convenio colectivo aplicable al personal de centros de educación especial

6. NOVEDADES LEGISLATIVAS Y TENDENCIAS
Resume las principales reformas en curso y las sentencias del Tribunal Supremo y el TEDH más relevantes de los últimos 3 años en materia de educación inclusiva y derechos de la diversidad funcional.

Finaliza con una lista de 8 organismos, asociaciones y servicios de asesoramiento jurídico gratuito a los que pueden acudir las familias en España.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 45,
                'use_case' => 'Asesoramiento legal en educación especial y diversidad funcional',
                'vote_score' => 41,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 9,
                'title' => 'Atención y soporte a familias de alumnos con necesidades especiales con IA',
                'description' => 'Desarrolla protocolos de atención empática y efectiva para dar soporte a familias de personas con diversidad funcional desde un centro educativo o de servicios.',
                'prompt_content' => <<<'EOT'
Actúa como un especialista en atención al cliente y comunicación con familias en el sector de la educación especial y los servicios de apoyo a la diversidad funcional. Tu rol es ayudarme a desarrollar protocolos de atención que combinen empatía genuina, información clara y gestión efectiva de situaciones difíciles.

contexto del servicio:
- Tipo de organización: [centro de educación especial / asociación de familias / servicio de atención temprana / empresa de servicios terapéuticos]
- Canal principal de atención: [presencial / teléfono / email / WhatsApp / combinación]
- Volumen aproximado de familias atendidas: [número]
- Principales motivos de contacto: [información sobre el servicio / seguimiento del alumno / quejas / gestión administrativa / crisis emocional]

objetivo:
Diseña un sistema completo de atención a familias que incluya:

1. PROTOCOLO DE PRIMERA LLAMADA O VISITA
Redacta el guion completo para la primera toma de contacto con una familia que busca ayuda para su hijo con diversidad funcional. El protocolo debe contemplar:
- Saludo y presentación que transmita calidez y profesionalidad
- Las 7 preguntas iniciales para entender la situación (sin que parezca un cuestionario)
- Cómo gestionar el momento emocional de la familia (muchos llegan después de años de lucha y frustración)
- Cómo dar información clara sobre los servicios sin abrumar
- Cierre de la llamada con compromisos concretos y próximos pasos
- Qué anotar en el registro interno tras la llamada

2. GESTIÓN DE FAMILIAS EN SITUACIÓN DE CRISIS EMOCIONAL
Describe el protocolo de atención cuando una familia contacta en estado de angustia, agotamiento extremo o crisis:
- Señales que indican que la familia está en crisis (más allá de las palabras)
- Técnica de escucha activa y validación emocional en 5 pasos
- Qué NO decir nunca a una familia en crisis (frases que minimizan o infantilizan)
- Cuándo y cómo derivar a recursos de apoyo psicológico para cuidadores
- Seguimiento post-crisis en los 3 días siguientes

3. COMUNICACIÓN DE INFORMACIÓN DIFÍCIL
Desarrolla un protocolo para comunicar noticias o situaciones complejas a las familias:
- Comunicación de un diagnóstico nuevo o agravado
- Comunicación de un incidente ocurrido en el centro con el alumno
- Comunicación de que el servicio no puede atender las necesidades del alumno y debe derivarse
- Comunicación de un aumento de tarifas o cambio en las condiciones del servicio
Para cada situación: preparación previa, estructura de la conversación, palabras clave y cómo gestionar la reacción de la familia.

4. GESTIÓN DE QUEJAS Y RECLAMACIONES
Define el procedimiento interno para gestionar quejas de familias con un enfoque de mejora continua:
- Tipología de quejas más frecuentes en este sector
- Protocolo de recepción, registro y acuse de recibo (máximo 24h)
- Proceso de investigación interna y respuesta en 5 días hábiles
- Propuesta de solución o compensación cuando la queja es fundada
- Cómo convertir una queja gestionada bien en un vínculo de confianza más sólido

5. COMUNICACIÓN ORDINARIA Y SEGUIMIENTO
Diseña el sistema de comunicación regular con las familias:
- Informe trimestral de progreso del alumno: estructura, tono y longitud recomendada
- Modelo de mensaje de WhatsApp para comunicar pequeños avances cotidianos
- Modelo de email para convocar reuniones de seguimiento
- Política de tiempos de respuesta según el canal y la urgencia del mensaje
- Límites saludables de la comunicación fuera del horario laboral

6. FORMACIÓN DEL EQUIPO EN ATENCIÓN A FAMILIAS
Proporciona el contenido de un taller de 2 horas para formar al equipo en atención empática a familias:
- Módulo 1 (30 min): el mundo emocional de las familias de personas con diversidad funcional
- Módulo 2 (30 min): comunicación no violenta aplicada a este contexto
- Módulo 3 (30 min): role-playing de situaciones difíciles con feedback
- Módulo 4 (30 min): autocuidado del profesional que trabaja con familias en crisis

Finaliza con 10 frases que el equipo debería memorizar y usar habitualmente, y 10 frases que nunca deben decir a las familias.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 35,
                'use_case' => 'Protocolo de atención a familias en servicios de educación especial',
                'vote_score' => 39,
                'resource_type' => 'prompt',
            ],
            [
                'profession_id' => 10,
                'title' => 'Freelance especializado en recursos educativos para diversidad funcional con IA',
                'description' => 'Construye una carrera freelance sostenible creando y vendiendo recursos educativos especializados para la atención a la diversidad funcional usando IA.',
                'prompt_content' => <<<'EOT'
Actúa como un mentor de negocio freelance especializado en el sector educativo y la atención a la diversidad funcional. Ayúdame a construir una carrera freelance rentable y con propósito creando recursos, formaciones y servicios de consultoría para centros educativos, terapeutas y familias de personas con diversidad funcional.

contexto personal:
- Formación de base: [pedagogía terapéutica / logopedia / psicología / educación social / terapia ocupacional / diseño / desarrollo / otro]
- Años de experiencia en el sector: [número]
- Productos o servicios que me interesa ofrecer: [recursos descargables / formación online / consultoría a centros / materiales terapéuticos / desarrollo de apps / otro]
- Disponibilidad semanal para el negocio freelance: [horas por semana]
- Ingresos mínimos mensuales necesarios: [cifra]

objetivo:
Diseña un plan de negocio freelance completo para especializarse en el sector de la diversidad funcional que incluya:

1. DEFINICIÓN DEL NICHO Y POSICIONAMIENTO
Ayúdame a encontrar el nicho más rentable y diferenciado dentro del sector de la diversidad funcional para ofrecer mis servicios como freelance. Para ello:
- Analiza las 10 subcategorías de la diversidad funcional más demandadas actualmente (TEA, TDAH, dislexia, parálisis cerebral, síndrome de Down, discapacidad visual, discapacidad auditiva, altas capacidades, etc.)
- Evalúa cuál tiene mayor demanda insatisfecha de recursos y formación de calidad
- Identifica el perfil de cliente ideal para cada nicho (docentes, terapeutas privados, centros públicos, familias, editoriales)
- Propón 3 posicionamientos posibles con su mensaje de valor diferencial

2. CATÁLOGO DE PRODUCTOS Y SERVICIOS
Diseña un catálogo de 8 productos o servicios que pueda ofrecer como freelance especializado en diversidad funcional, con su precio orientativo de mercado y el tiempo estimado de creación:
- Recursos descargables (fichas, unidades didácticas, materiales terapéuticos en PDF)
- Cursos online (plataforma Teachable, Hotmart, Udemy)
- Formación in-company para centros educativos o equipos de orientación
- Mentoría a otros profesionales del sector
- Consultoría de accesibilidad a empresas
- Diseño de programas de intervención personalizados
- Contenido educativo para plataformas y editoriales
- Asesoramiento a familias (sesiones individuales)

3. CANALES DE VENTA Y VISIBILIDAD
Define la estrategia de marketing digital para un freelance con recursos limitados:
- Presencia en redes sociales: qué plataformas priorizar (Instagram, TikTok educativo, LinkedIn, Pinterest para recursos) y con qué tipo de contenido
- Blog o podcast sobre diversidad funcional como herramienta de SEO y autoridad
- Marketplace de recursos educativos: Orientación Andújar, Teachers Pay Teachers, Etsy
- Comunidades online donde están los clientes ideales (grupos de Facebook, foros, asociaciones profesionales)
- Email marketing: cómo construir una lista de correo de 1.000 suscriptores en 6 meses

4. ESTRUCTURA FINANCIERA Y ESCALABILIDAD
Analiza la viabilidad financiera del negocio freelance con los siguientes modelos:
- Modelo de servicios 1 a 1: ingresos por hora, techo de ingresos y agotamiento
- Modelo de productos digitales (recursos descargables): ingresos pasivos, curva de crecimiento
- Modelo híbrido: cómo combinar servicios y productos para estabilizar ingresos
- Proyección de ingresos para los primeros 12 meses bajo el modelo híbrido
- Cuándo y cómo subcontratar para escalar sin perder calidad

5. ASPECTOS LEGALES Y FISCALES DEL FREELANCE EN ESPAÑA
Describe los aspectos prácticos de darse de alta como autónomo para ejercer esta actividad:
- Epígrafe del IAE más adecuado según los servicios ofrecidos
- Régimen fiscal: módulos vs. estimación directa simplificada
- IVA en servicios educativos: exenciones aplicables a la formación y los servicios de apoyo educativo
- Facturación a particulares (familias) vs. empresas (centros)
- Protección de los materiales creados: registro de propiedad intelectual, licencias Creative Commons

6. HOJA DE RUTA PARA LOS PRIMEROS 6 MESES
Define las acciones concretas para los primeros 6 meses de actividad freelance, semana a semana:
- Mes 1: validación del nicho y primeros productos mínimos viables
- Mes 2: lanzamiento de la presencia digital y primeras ventas
- Mes 3: primer curso o formación grupal
- Mes 4-6: optimización, feedback y escala

Finaliza con 10 referentes internacionales del sector de la educación especial y la diversidad funcional que tienen negocios freelance o digitales exitosos y de los que puedo aprender.
EOT,
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 40,
                'use_case' => 'Plan de negocio freelance en educación especial y diversidad funcional',
                'vote_score' => 43,
                'resource_type' => 'prompt',
            ],
        ];
        foreach ($skills as $data) {
            $slug = Str::slug($data['title']);
            if (Skill::where('slug', $slug)->exists()) {
                $this->command->info("Skipping: {$data['title']}");

                continue;
            }
            Skill::create(array_merge($data, [
                'user_id' => $admin->id,
                'slug' => $slug,
                'status' => 'published',
                'version' => 1,
                'views_count' => rand(80, 400),
                'saves_count' => rand(5, 30),
            ]));
            $this->command->info("Created: {$data['title']}");
        }
    }
}
