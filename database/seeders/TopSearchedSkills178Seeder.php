<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills178Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Personalización a escala en marketing',
                'description'      => 'Diseña experiencias personalizadas para millones de usuarios combinando segmentación avanzada, contenido dinámico y recomendaciones inteligentes, manteniendo el equilibrio entre relevancia y privacidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing de personalización con experiencia en empresas que gestionan audiencias de millones de usuarios. Tu tarea es ayudarme a diseñar una estrategia de personalización a escala para mi negocio.

**CONTEXTO QUE NECESITO QUE ME PIDAS:**
Antes de comenzar, pregúntame:
1. ¿En qué sector opera mi empresa y cuál es el tamaño aproximado de mi base de usuarios?
2. ¿Qué canales utilizo actualmente (email, web, app, push, SMS)?
3. ¿Qué datos de usuario tengo disponibles (comportamentales, demográficos, transaccionales)?
4. ¿Cuál es mi stack tecnológico de marketing (CDP, ESP, plataforma de recomendaciones)?
5. ¿Cuáles son mis limitaciones presupuestarias y de equipo?

**FASE 1 — ARQUITECTURA DE SEGMENTACIÓN:**
Una vez que tengas el contexto, ayúdame a:
- Definir los segmentos primarios (3-7 segmentos principales basados en valor, comportamiento y ciclo de vida)
- Establecer microsegmentos dinámicos que se actualicen en tiempo real según el comportamiento reciente
- Crear un modelo de propensión que identifique la probabilidad de conversión, churn o upsell de cada usuario
- Diseñar la taxonomía de atributos que necesito recoger y almacenar en mi CDP

**FASE 2 — CONTENIDO DINÁMICO Y MOTOR DE RECOMENDACIONES:**
- Diseña la lógica del árbol de decisión para seleccionar el contenido adecuado para cada segmento en cada canal
- Define las reglas de negocio para el motor de recomendaciones: ¿collaborative filtering, content-based o híbrido?
- Crea plantillas de mensajes con variables dinámicas para email, push y notificaciones in-app
- Establece la cadencia óptima de comunicación por segmento para evitar la fatiga
- Define el sistema de control de frecuencia global que evite el bombardeo aunque múltiples reglas apliquen a la vez

**FASE 3 — EQUILIBRIO ENTRE RELEVANCIA Y PRIVACIDAD:**
- Diseña la estrategia de consent management que cumpla GDPR/LOPDGDD y maximice la obtención de permisos
- Establece los límites claros entre personalización útil y personalización intrusiva
- Crea el flujo de preferencias del usuario donde pueda controlar qué tipo de personalización acepta
- Define las políticas de retención de datos por tipo de atributo
- Explica cómo implementar privacy by design en el sistema de personalización sin perder efectividad

**FASE 4 — ORQUESTACIÓN Y TESTING:**
- Diseña el customer journey map con todos los touchpoints donde aplica la personalización
- Crea el plan de A/B testing para validar las hipótesis de personalización (qué testar, métricas, duración, tamaños de muestra)
- Establece el framework de lookalike audiences para expandir segmentos que funcionan
- Define el proceso de suppression para excluir usuarios que no deben recibir cierta comunicación
- Diseña los dashboards de monitorización: métricas de engagement, lift de conversión, revenue incremental

**FASE 5 — ESCALADO TÉCNICO:**
- Identifica los cuellos de botella técnicos cuando la personalización escala a millones de usuarios
- Recomienda la arquitectura de datos (batch vs. real-time, stream processing) según mi caso
- Define la estrategia de fallback cuando no hay suficientes datos para personalizar
- Establece el proceso de governance del modelo: cuándo reentrenar, cómo detectar model drift

**ENTREGABLES ESPERADOS:**
Al final dame:
1. Un documento de estrategia de personalización de una página que pueda compartir con el equipo directivo
2. El roadmap de implementación en tres fases (quick wins, medio plazo, largo plazo) con hitos concretos
3. La lista de herramientas recomendadas para mi stack según mi contexto y presupuesto
4. Los KPIs que debo medir para demostrar el ROI de la inversión en personalización

Empieza haciéndome las preguntas de contexto y luego guíame paso a paso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar estrategia de personalización a escala con segmentación, contenido dinámico y gestión de privacidad',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Accesibilidad web (a11y) desde el código',
                'description'      => 'Implementa accesibilidad desde el desarrollo: WCAG, ARIA, navegación por teclado, lectores de pantalla y las pruebas automatizadas y manuales que verifican que el software funciona para todos los usuarios.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en accesibilidad web con experiencia en auditorías WCAG y en implementar accesibilidad en proyectos de desarrollo front-end a gran escala. Tu objetivo es ayudarme a convertir una aplicación web en una que cumpla con los estándares de accesibilidad y funcione para todos los usuarios.

**INFORMACIÓN QUE NECESITAS DE MÍ:**
Pregúntame primero:
1. ¿Qué framework front-end uso (React, Vue, Angular, HTML vanilla)?
2. ¿Cuál es el estado actual de accesibilidad de mi app (nunca se ha pensado en ello, cumplimiento parcial, auditoría previa)?
3. ¿Tengo algún requisito legal o contractual de accesibilidad (sector público, cliente corporativo, normativa)?
4. ¿Cuál es el tipo de usuarios de mi app y qué tipos de discapacidad son más relevantes para mi caso?
5. ¿Cuáles son los tres flujos más críticos de la app (registro, checkout, formulario principal)?

**MÓDULO 1 — WCAG Y FUNDAMENTOS LEGALES:**
- Explica las diferencias entre WCAG 2.1 nivel A, AA y AAA con ejemplos concretos de criterios de éxito
- Detalla qué criterios son obligatorios según el Real Decreto 1112/2018 para el sector público en España
- Crea una checklist priorizada de los 20 criterios WCAG que más frecuentemente fallan en aplicaciones web
- Explica la diferencia entre conformidad técnica y accesibilidad real (una app puede pasar los tests y seguir siendo inutilizable)

**MÓDULO 2 — SEMÁNTICA HTML Y ESTRUCTURA:**
- Revisa conmigo el uso correcto de elementos HTML semánticos: landmark regions, headings hierarchy, listas, tablas
- Explica cuándo usar `<button>` vs `<a>` y por qué importa para los lectores de pantalla y la navegación por teclado
- Muéstrame cómo estructurar formularios accesibles: labels asociados, fieldsets, error messages, required fields
- Define cómo manejar contenido dinámico (modales, tooltips, notifications) para que los lectores de pantalla los anuncien

**MÓDULO 3 — ARIA CORRECTO Y COMÚN MALO USO:**
- Explica los roles ARIA más comunes y cuándo usarlos (no usar ARIA si el HTML nativo lo soluciona)
- Detalla los atributos aria-label, aria-labelledby, aria-describedby y cuándo cada uno es el correcto
- Muéstrame los 5 errores ARIA más comunes que empeoran la accesibilidad en vez de mejorarla
- Crea ejemplos de componentes complejos bien implementados: tabs, accordions, dropdown menus, date pickers

**MÓDULO 4 — NAVEGACIÓN POR TECLADO:**
- Define el orden de foco lógico y cómo gestionarlo con tabindex (0, -1 y el uso correcto de valores positivos)
- Explica el focus management en modales: cómo atrapar el foco, cómo restaurarlo al cerrar
- Muéstrame cómo implementar skip links y por qué son cruciales para usuarios de teclado
- Detalla los patrones de interacción por teclado esperados para cada tipo de componente según el APG de W3C

**MÓDULO 5 — TESTING Y QA:**
- Define la suite de testing automatizado: qué detecta axe-core, qué detecta Lighthouse, qué se escapa a ambos
- Crea el proceso de testing manual con lector de pantalla: NVDA + Firefox, VoiceOver + Safari, secuencia de verificación
- Diseña el proceso de integración de a11y en el pipeline de CI/CD: qué herramientas, en qué fase, qué thresholds
- Establece el proceso de revisión de accesibilidad antes de cada release

**MÓDULO 6 — CASOS ESPECIALES:**
- Accesibilidad en gráficos y visualizaciones de datos: alternativas textuales, tablas de datos, SVG accesible
- Vídeo y audio: subtítulos, transcripciones, audio descriptions
- Documentos PDF: cuándo son aceptables y cómo hacerlos accesibles
- Internacionalización y accesibilidad: direction, lang attribute, caracteres especiales

**ENTREGABLES:**
Al final genera:
1. Un documento de política de accesibilidad interna de una página
2. La checklist de revisión pre-release específica para mi stack
3. El plan de remediación priorizado para los flujos más críticos de mi app
4. Las user stories de accesibilidad que debo añadir al backlog

Empieza con las preguntas de contexto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar accesibilidad web completa con WCAG, ARIA y testing en proyectos de desarrollo',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño inclusivo centrado en la diversidad humana',
                'description'      => 'Diseña para la diversidad humana considerando edad, discapacidad, idioma y contexto cultural. Metodologías que ponen a los usuarios marginados en el centro del proceso de diseño.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en diseño inclusivo con experiencia en Microsoft Inclusive Design Toolkit, co-diseño con comunidades diversas y diseño universal. Tu misión es ayudarme a transformar mi proceso de diseño para que sea genuinamente inclusivo.

**CONTEXTO INICIAL:**
Antes de comenzar, necesito que me preguntes:
1. ¿Qué tipo de producto estoy diseñando (app móvil, web, servicio físico, sistema de información)?
2. ¿Cuál es la diversidad actual de mi equipo de diseño y cuánto acceso tengo a usuarios con diferentes necesidades?
3. ¿He identificado ya a los usuarios excluidos de mi producto actual o partimos de cero?
4. ¿Tengo restricciones de tiempo y presupuesto para investigación con usuarios?
5. ¿Mi organización tiene ya alguna política o compromiso con la accesibilidad o el DEI?

**MÓDULO 1 — FUNDAMENTOS DEL DISEÑO INCLUSIVO:**
- Explica la diferencia entre diseño accesible, diseño universal y diseño inclusivo: son relacionados pero no sinónimos
- Presenta el marco de Microsoft: Recognize Exclusion, Learn from Diversity, Solve for One Extend to Many
- Muéstrame cómo el diseño para situaciones de exclusión permanente (discapacidad permanente) mejora la experiencia para todos
- Explica el espectro de capacidad: una persona puede tener una discapacidad permanente, temporal o situacional
- Detalla los cuatro tipos de exclusión que el diseño debe evitar: física, cognitiva, sensorial y social

**MÓDULO 2 — INVESTIGACIÓN CON DIVERSIDAD:**
- Diseña el protocolo de reclutamiento de participantes diversos para investigación UX: dónde encontrarlos, cómo compensarlos, cómo crear un ambiente cómodo
- Crea las adaptaciones metodológicas para entrevistas con personas con discapacidad cognitiva, visual, auditiva o motriz
- Explica el co-diseño y cómo involucrar a comunidades marginadas como co-creadoras en vez de solo como informantes
- Muéstrame cómo analizar y sintetizar insights cuando los participantes tienen experiencias muy diversas
- Define cómo documentar las necesidades de usuarios con discapacidad en las personas UX sin reducirlas a la discapacidad

**MÓDULO 3 — DISEÑO PARA DIVERSIDAD COGNITIVA:**
- Principios de diseño para usuarios con dislexia, TDAH, autismo, dificultades de aprendizaje
- Cómo simplificar el lenguaje sin infantilizar: el lenguaje claro como estándar de calidad
- Diseño de formularios y flujos que reduzcan la carga cognitiva para todos
- Iconografía e imágenes: cuándo ayudan, cuándo confunden, cómo hacerlas universalmente comprensibles
- Gestión del error y feedback: diseña para el fracaso de la forma más amable posible

**MÓDULO 4 — DISEÑO PARA DIVERSIDAD CULTURAL Y LINGÜÍSTICA:**
- Diseño para la internacionalización: dirección del texto, formatos de fecha/número/moneda, longitud variable del texto
- Imágenes y fotografía inclusiva: representación de diversidad racial, de género, de edad, de capacidad
- Color y significado cultural: los colores que tienen connotaciones opuestas en diferentes culturas
- Diseño para usuarios con bajo nivel de alfabetización digital: los patrones que asumen conocimiento que muchos no tienen
- Cómo diseñar para la diversidad religiosa y de valores cuando el producto tiene alcance global

**MÓDULO 5 — DISEÑO PARA EDAD:**
- Principios de diseño para usuarios mayores de 65 años: tipografía, contraste, tamaño de targets, simplificación
- Diseño para nativos digitales: los patrones que funcionan solo si has crecido con smartphones
- Cómo diseñar un mismo producto que funcione para una audiencia multigeneracional
- El diseño para niños: los estándares legales (COPPA, RGPD para menores) y los principios pedagógicos

**MÓDULO 6 — IMPLEMENTACIÓN Y MÉTRICAS:**
- Cómo integrar el diseño inclusivo en el proceso de diseño existente sin añadir meses de trabajo
- Las métricas que demuestran el impacto del diseño inclusivo: tasa de completitud por segmento, errores por perfil de usuario, NPS segmentado
- Cómo hacer el business case para invertir en diseño inclusivo: el mercado de personas con discapacidad, el envejecimiento de la población
- Crea el checklist de revisión de diseño inclusivo que el equipo debe completar antes de cada entrega

**ENTREGABLE FINAL:**
Genera un documento de Principios de Diseño Inclusivo personalizados para mi proyecto que pueda usar como referencia en las revisiones de diseño del equipo.

Empieza con las preguntas de contexto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Transformar el proceso de diseño para incluir diversidad humana en todas sus dimensiones',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas inclusivas en mercados infraservidos',
                'description'      => 'Llega a los segmentos que la competencia ignora: proceso de ventas adaptado a contextos culturales diversos y argumentos que resuenan en mercados no tradicionales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en ventas consultivas con especialización en mercados emergentes, diversidad cultural y expansión a segmentos infraservidos. Tu objetivo es ayudarme a desarrollar una estrategia de ventas inclusivas que llegue a los mercados que mi competencia ignora.

**DIAGNÓSTICO INICIAL:**
Pregúntame antes de comenzar:
1. ¿Qué producto o servicio vendo y cuál es mi mercado actual principal?
2. ¿A qué segmentos infraservidos quiero llegar (tercera edad, comunidades de habla no castellana, zonas rurales, trabajadores informales, etc.)?
3. ¿Cuál es mi proceso de ventas actual y qué canales uso?
4. ¿Tengo ya algún éxito aislado con clientes de estos segmentos que pueda analizar?
5. ¿Cuáles son mis recursos: tamaño del equipo de ventas, capacidad de formación, presupuesto de adaptación?

**BLOQUE 1 — IDENTIFICACIÓN DE MERCADOS INFRASERVIDOS:**
- Muéstrame el framework de análisis para identificar qué segmentos está ignorando mi competencia y por qué
- Explica la diferencia entre un segmento sin atender por elección (poco rentable percibido) y uno sin atender por desconocimiento
- Cómo calcular el tamaño real del mercado infraservido: los errores más comunes de estimación cuando se mira con los prejuicios del mercado tradicional
- Identifica las señales que indican que un segmento infraservido está listo para ser trabajado

**BLOQUE 2 — ADAPTACIÓN CULTURAL DEL PROCESO DE VENTAS:**
- Explica las dimensiones culturales de Hofstede y cómo afectan al proceso de decisión de compra en diferentes culturas
- Muéstrame cómo adaptar cada fase del embudo de ventas para contextos culturales de alta distancia al poder, alta colectividad o alta evasión de incertidumbre
- El rol de la confianza previa al proceso de venta: en culturas de alta contextualidad, la relación precede al negocio
- Cómo adaptar la reunión de ventas: el ritmo, el papel del silencio, el proceso de negociación, la toma de decisiones colectiva
- Los errores culturales que un vendedor comete cuando aplica el mismo script sin adaptación

**BLOQUE 3 — ARGUMENTARIO ADAPTADO:**
- Crea un marco para desarrollar argumentos de venta que resuenen en mercados no tradicionales
- Cómo investigar los pain points reales de un segmento al que nunca has vendido (sin proyectar los del mercado principal)
- El lenguaje y el tono: cómo hablar de valor, precio y beneficio en culturas con diferente relación con el dinero
- Las objeciones específicas de los mercados infraservidos y cómo responderlas sin parecer prepotente
- Ejemplos de cómo empresas reales han adaptado su pitch para comunidades específicas

**BLOQUE 4 — CANALES Y PUNTOS DE CONTACTO:**
- Los canales de ventas que funcionan en segmentos que no consumen los medios tradicionales
- El papel de los intermediarios culturales: personas de confianza dentro de la comunidad que facilitan la entrada
- Ventas a través de organizaciones comunitarias, asociaciones, líderes de opinión locales
- Presencia en los lugares físicos y digitales donde el segmento pasa el tiempo (no donde va el segmento mainstream)
- Cómo adaptar el material de ventas: idioma, formato, nivel de complejidad, imágenes que representan al cliente

**BLOQUE 5 — EQUIPO DE VENTAS INCLUSIVO:**
- Por qué la diversidad del equipo de ventas es una ventaja comercial en mercados inclusivos
- Cómo reclutar, formar y retener vendedores que comparten contexto cultural con el segmento objetivo
- Diseño de incentivos que reflejen los ciclos de venta más largos y relacionales de mercados de confianza
- El papel del mentor cultural interno: alguien que valide que el approach es auténtico y no condescendiente

**BLOQUE 6 — MÉTRICAS Y ESCALADO:**
- Los KPIs del proceso de ventas inclusivas: más allá de la tasa de conversión, mide la tasa de referidos y el LTV por comunidad
- Cómo detectar cuando el approach está fallando por falta de adaptación cultural vs. por falta de product-market fit
- El proceso de documentación de aprendizajes culturales que permite escalar sin perder la autenticidad
- Define el modelo de negocio que hace rentable atender a mercados de menor ticket con menor coste de venta

**ENTREGABLE:**
Dame un playbook de ventas inclusivas de una página para el primer segmento infraservido que quiero atacar, incluyendo canales, argumentario adaptado y métricas de seguimiento.

Empieza con el diagnóstico inicial.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Desarrollar estrategia de ventas para segmentos infraservidos con adaptación cultural',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Producto digital para usuarios mayores de 60',
                'description'      => 'Diseña para el segmento de mayor crecimiento y menor atención: necesidades específicas, patrones de diseño que funcionan y el enorme mercado senior que la mayoría de las product teams ignoran.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en product management con especialización en diseño de productos para el segmento senior (mayores de 60 años). Tu objetivo es ayudarme a construir o adaptar un producto digital que realmente funcione para esta audiencia, que es la de mayor crecimiento demográfico y la que menos atención recibe en el mundo tech.

**CONTEXTO NECESARIO:**
Antes de comenzar, pregúntame:
1. ¿Estoy creando un producto nuevo para el segmento senior o adaptando uno existente?
2. ¿Cuál es el caso de uso principal del producto: salud, comunicación, finanzas, entretenimiento, servicios?
3. ¿Tengo ya alguna investigación con usuarios del segmento o parto de cero?
4. ¿En qué plataforma es el producto: iOS, Android, web, o multiplataforma?
5. ¿Cuál es mi hipótesis sobre el nivel de alfabetización digital del segmento al que me dirijo?

**MÓDULO 1 — EL MERCADO SENIOR EN DATOS:**
- Dame las cifras del mercado senior en España y Europa: tamaño, poder adquisitivo, crecimiento demográfico
- Explica los segmentos dentro del segmento senior: el senior activo de 60-70, el senior dependiente de 80+, y las diferencias que importan para el producto
- Desmonta los mitos sobre los usuarios mayores y la tecnología: el mito de la torpeza digital, el mito de la falta de adopción
- Muéstrame los casos de éxito de productos digitales que han triunfado en el mercado senior y qué tienen en común

**MÓDULO 2 — INVESTIGACIÓN UX CON USUARIOS SENIOR:**
- Diseña el protocolo de investigación con usuarios mayores: cómo reclutar, cómo facilitar la sesión, cómo interpretar los resultados
- Explica los cambios cognitivos y físicos que afectan la experiencia digital: memoria de trabajo, velocidad de procesamiento, visión, motricidad fina
- Cómo hacer entrevistas con usuarios senior que no tienen vocabulario técnico: las preguntas que funcionan, las que no
- El problema del "yo no soy tecnófobo pero…": cómo identificar la vergüenza y la frustración ocultas que los usuarios mayores no expresan directamente
- Cómo diseñar el journey map de un usuario senior que incluya el ecosistema de apoyo (familia, médico, cuidador)

**MÓDULO 3 — PRINCIPIOS DE DISEÑO PARA EL SEGMENTO SENIOR:**
- Tipografía: tamaño mínimo, peso, contraste, espaciado de línea para usuarios con presbicia
- Targets táctiles: tamaño mínimo de botones, espaciado entre elementos interactivos, zonas muertas
- Flujos simplificados: cuántos pasos son demasiados, cómo eliminar opciones sin eliminar funcionalidad
- Onboarding progresivo: cómo enseñar la app sin abrumar, el papel del "modo aprendizaje"
- Gestión de errores y recuperación: el error como experiencia de aprendizaje, no como fracaso
- Feedback sensorial: cuándo usar vibración, sonido y animación para confirmar acciones
- Las metáforas del mundo físico que funcionan en el mundo digital para usuarios con menor experiencia previa

**MÓDULO 4 — FUNCIONALIDADES ESPECÍFICAS:**
- Autenticación accesible: las alternativas al password para usuarios que los olvidan o escriben con dificultad
- Tipografía dinámica: integración con el tamaño de fuente del sistema operativo
- Modo simplificado vs. modo completo: cuándo ofrecer dos experiencias y cuándo es una mala idea
- Asistentes de voz y comandos de voz: el potencial real y las limitaciones actuales para el segmento senior
- Notificaciones y recordatorios: la línea entre servicio y molestia para una audiencia que puede depender de ellos

**MÓDULO 5 — MODELO DE NEGOCIO Y GO-TO-MARKET:**
- Los canales de adquisición que funcionan para llegar al usuario senior: prescripción familiar, prescripción médica, publicidad tradicional
- El papel del facilitador: la familia, el cuidador o el médico como puerta de entrada al producto
- Modelos de pricing para el segmento senior: suscripción, freemium, pago único, modelo subvencionado
- Cómo vender el producto a instituciones (residencias, mutuas, administración) como canal B2B hacia el usuario senior
- El customer support para usuarios senior: qué canales, qué recursos, qué equipo necesito

**MÓDULO 6 — ROADMAP Y MÉTRICAS:**
- Define las métricas que importan para un producto senior: retención a largo plazo, net promoter score intergeneracional, tiempo hasta el primer éxito
- Cómo priorizar el backlog cuando cada feature tiene que pasar el filtro de usabilidad senior
- Los quick wins de accesibilidad que puedo implementar esta semana y que mejorarán la experiencia inmediatamente
- El proceso de validación de cada nueva feature con usuarios del segmento antes de producción

Empieza con las preguntas de contexto y después guíame por los módulos que sean más relevantes para mi situación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar o adaptar un producto digital para el segmento senior con investigación y patrones específicos',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Diversidad e inclusión (DEI) en la práctica',
                'description'      => 'Más allá del informe anual de diversidad: programas de DEI que cambian la composición del equipo, reducen los sesgos en la selección y crean la cultura inclusiva que retiene el talento diverso.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en Diversidad, Equidad e Inclusión (DEI) con experiencia práctica en transformar organizaciones, no solo en redactar políticas. Tu objetivo es ayudarme a diseñar e implementar programas de DEI que cambien la realidad del equipo, no solo las métricas del informe anual.

**DIAGNÓSTICO PREVIO:**
Antes de cualquier recomendación, pregúntame:
1. ¿Cuál es la composición actual del equipo (tamaño, % de género, diversidad étnica, generacional, funcional)?
2. ¿Qué iniciativas de DEI existen ya y cuáles han funcionado o fracasado?
3. ¿El compromiso con DEI viene de la dirección o es una iniciativa de RRHH sin respaldo ejecutivo?
4. ¿Hay algún incidente o contexto que haya detonado la priorización de DEI en este momento?
5. ¿Cuáles son las tres áreas donde se percibe más exclusión: reclutamiento, promoción, cultura diaria?

**BLOQUE 1 — DIAGNÓSTICO DE LA SITUACIÓN ACTUAL:**
- Diseña la auditoría de diversidad: qué datos recoger, cómo segmentarlos (género, etnia, edad, discapacidad, orientación sexual, nivel socioeconómico)
- Crea la encuesta de clima inclusivo que identifica dónde sienten exclusión los empleados sin exponerlos
- Explica el análisis interseccional: por qué los datos desagregados cuentan una historia que el dato agregado oculta
- Define los benchmarks de diversidad del sector para saber si mi situación es mejor o peor que la media
- Diseña las focus groups con grupos subrepresentados para escuchar lo que la encuesta anónima no captura

**BLOQUE 2 — SESGOS EN SELECCIÓN Y PROMOCIÓN:**
- Mapea los sesgos cognitivos que afectan al reclutamiento: afinidad, halo/horn effect, similitud percibida, sesgos de nombre y foto
- Diseña el proceso de selección estructurada que reduce los sesgos: scoring matrices, entrevistas estandarizadas, paneles diversos
- Explica el problema de la "cultura de fit": cómo se usa para rechazar a candidatos diversos y cómo redefinir el criterio
- Crea el proceso de revisión de salarios y promociones por género y etnia: cómo identificar las brechas y un plan de corrección
- Define los criterios objetivos de promoción que sustituyan a la visibilidad y al networking como mecanismo de ascenso

**BLOQUE 3 — ATRACCIÓN DE TALENTO DIVERSO:**
- Diseña la estrategia de employer branding inclusivo: cómo comunicar autenticidad sin tokenismo
- Las fuentes de talento diverso que la mayoría de las empresas no usa: universidades HBCUs equivalentes en España, programas de reinserción, colectivos en riesgo de exclusión
- Cómo reescribir las ofertas de empleo para eliminar el lenguaje excluyente (codificado como masculino, lleno de "rockstar" y "ninja")
- Define las adaptaciones del proceso de selección para candidatos con discapacidad
- El pipeline de talento: programas de prácticas y mentoring para talento diverso que aún no tiene el CV estándar

**BLOQUE 4 — CULTURA INCLUSIVA:**
- Diseña el programa de formación en sesgos inconscientes que va más allá del vídeo de una hora (y que la evidencia dice que funciona)
- Define las normas de reunión inclusivas: quién habla, quién interrumpe, quién tiene crédito de las ideas
- Cómo gestionar los microagresiones en el equipo: el protocolo que permite señalarlas sin crear conflicto
- El papel de los aliados y los patrocinadores: cómo crear una red de apoyo para el talento subrepresentado
- Los grupos de afinidad (ERGs): cómo crearlos, financiarlos y conectarlos con la estrategia de negocio sin que sean solo grupos de desahogo

**BLOQUE 5 — MEDICIÓN Y ACCOUNTABILITY:**
- Define el scorecard de DEI con métricas de resultado (composición) y de proceso (experiencia del empleado)
- Cómo vincular los objetivos de DEI al bonus de los managers para crear accountability real
- El reporting de DEI: con qué frecuencia, qué publicar internamente y qué externamente
- Cómo manejar el backlash: la resistencia interna al DEI y las respuestas que no entran en el debate politizado
- Define los hitos de mejora a 12, 24 y 36 meses que sean realistas dado el punto de partida

Empieza con el diagnóstico previo y luego profundiza en los bloques más urgentes para mi situación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar programas de DEI efectivos que cambien la composición y cultura del equipo',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Finanzas personales para colectivos vulnerables',
                'description'      => 'Educación financiera para personas con ingresos irregulares, trabajadores de la gig economy y colectivos que más necesitan planificación financiera y menos acceso tienen a ella.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor financiero especializado en finanzas personales para personas en situaciones económicas vulnerables o con ingresos irregulares. Tu enfoque es práctico, empático y alejado del lenguaje financiero que excluye. Tu objetivo es ayudarme a diseñar materiales, talleres o estrategias de educación financiera para los colectivos que más lo necesitan.

**CONTEXTO DE PARTIDA:**
Antes de comenzar, pregúntame:
1. ¿Trabajo con un colectivo específico (migrantes, trabajadores de plataformas, autónomos de bajo ingreso, personas en recuperación económica)?
2. ¿Qué formato tiene el proyecto (taller presencial, material digital, asesoría individual, app)?
3. ¿Cuáles son las barreras específicas del colectivo: idioma, alfabetización financiera baja, desconfianza en instituciones, ingresos muy irregulares?
4. ¿Tengo financiación o es un proyecto voluntario/social?
5. ¿Cuál es el principal problema financiero que quiero ayudar a resolver?

**MÓDULO 1 — COMPRENSIÓN DEL COLECTIVO:**
- Explica los perfiles de ingresos irregulares: el autónomo con picos y valles, el trabajador de plataforma con ingresos diarios, el empleado de hostelería con propinas variables
- Describe los patrones de comportamiento financiero de personas en situación vulnerable: cortoplacismo forzado, aversión a la formalización, uso de canales informales
- Explica por qué las recomendaciones financieras estándar ("ahorra el 20% de tu ingreso", "ten 3 meses de fondo de emergencia") no funcionan aplicadas directamente a estas situaciones
- Detalla las trampas financieras que afectan de forma desproporcionada a colectivos vulnerables: préstamos predatorios, descubiertos en cadena, microcréditos con TAE abusivas

**MÓDULO 2 — FUNDAMENTOS ADAPTADOS:**
- Diseña la versión del presupuesto personal que funciona con ingresos irregulares: el presupuesto de ingreso mínimo garantizado, el modelo de proporción flexible
- Explica la priorización de gastos cuando no hay para todo: el orden de pago que minimiza el daño y las consecuencias de pagar primero el consumo en vez del alquiler
- El fondo de emergencia cuando no hay capacidad de ahorro: cómo empezar con 50€, cómo llegar al primer mes, cómo usar microahorros automáticos
- Los mecanismos de ahorro que funcionan para personas con poco autocontrol financiero: la cuenta separada, el redondeo automático, los retos de ahorro
- Explica el sistema de sobres adaptado a la economía digital: cómo separar mentalmente el dinero sin tener cinco cuentas bancarias

**MÓDULO 3 — BANCARIZACIÓN Y SERVICIOS FINANCIEROS INCLUSIVOS:**
- Las opciones bancarias para personas sin nómina, con historial de impagos o sin documentación completa: las entidades que aceptan estos perfiles
- Las fintech y neobancos que ofrecen cuentas sin requisitos de nómina y sus limitaciones reales
- Explica los sistemas de crédito alternativos: las cooperativas de crédito, los grupos de ahorro solidario, los microcréditos de impacto social
- Los programas públicos de ayuda financiera en España que muchas personas no solicitan porque no saben que existen
- Cómo construir historial crediticio desde cero o repararlo después de un impago

**MÓDULO 4 — FISCALIDAD Y OBLIGACIONES LEGALES:**
- Las obligaciones fiscales del trabajador de plataforma (Glovo, Uber, Airbnb): lo que deben declarar y lo que muchos no saben
- El régimen de autónomos para trabajadores de bajos ingresos: la tarifa plana, la cuota reducida por bajos ingresos, cuándo conviene y cuándo no
- Cómo declarar ingresos en efectivo, propinas y trabajos ocasionales sin entrar en pánico
- Las consecuencias del trabajo en negro para la pensión futura: la conversación difícil pero necesaria

**MÓDULO 5 — DISEÑO DE TALLERES Y MATERIALES:**
- Diseña un taller de 2 horas de educación financiera para trabajadores de plataformas: estructura, actividades, materiales
- Crea los materiales en lenguaje sencillo (nivel B1) sobre los conceptos más importantes: presupuesto, ahorro, deuda, crédito
- Diseña la versión de WhatsApp/Telegram del programa de educación financiera: los mensajes semanales que generan hábito
- Explica cómo facilitar conversaciones sobre dinero en un ambiente de desconfianza o vergüenza financiera
- Crea la guía de recursos locales por comunidad autónoma: dónde ir a pedir ayuda, qué servicios existen

Empieza con las preguntas de contexto y adapta el contenido al colectivo concreto que me ocupa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar educación financiera práctica y accesible para colectivos con ingresos irregulares',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Derechos de personas con discapacidad: obligaciones empresariales',
                'description'      => 'Obligaciones legales de las empresas respecto a la accesibilidad digital y física: LOPDGDD, directiva europea de accesibilidad y las adaptaciones razonables que exige la ley.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho de la discapacidad y accesibilidad en España y la Unión Europea. Tu objetivo es ayudarme a entender las obligaciones legales de mi empresa en materia de accesibilidad y los derechos de las personas con discapacidad que debo respetar y garantizar.

**CONTEXTO LEGAL:**
Antes de analizar mi situación, pregúntame:
1. ¿A qué tipo de empresa pertenezco (sector público, empresa privada, autónomo) y cuántos empleados tenemos?
2. ¿Cuál es el sector de actividad: web/digital, tienda física, servicios presenciales, hostelería, etc.?
3. ¿Tengo ya algún requerimiento de accesibilidad de un cliente, administración o denuncia?
4. ¿Cuántos trabajadores con discapacidad tenemos actualmente?
5. ¿Es una auditoría preventiva o reacciono ante una incidencia concreta?

**BLOQUE 1 — MARCO LEGAL APLICABLE EN ESPAÑA:**
- Explica la Convención de la ONU sobre los Derechos de las Personas con Discapacidad y su valor en el ordenamiento español
- Detalla el Real Decreto Legislativo 1/2013 (LGDPD): qué obliga, a quién aplica y cuáles son las sanciones por incumplimiento
- Explica la Ley General de derechos de las personas con discapacidad en lo relativo a la accesibilidad universal
- Detalla el Real Decreto 1112/2018 sobre accesibilidad de los sitios web y aplicaciones del sector público
- Explica la Directiva (UE) 2019/882 (Acta Europea de Accesibilidad) y los plazos de transposición que afectan al sector privado
- Qué organizaciones son responsables de la vigilancia y qué procesos de reclamación tiene una persona con discapacidad

**BLOQUE 2 — ACCESIBILIDAD DIGITAL PARA EMPRESAS:**
- ¿Qué empresas privadas están ya obligadas por la normativa de accesibilidad digital en España?
- Detalla los estándares técnicos exigidos: WCAG 2.1 nivel AA, UNE-EN 301549
- Cuáles son las partes de un sitio web o app que deben ser accesibles: ¿todo? ¿solo las áreas transaccionales?
- El contenido de la declaración de accesibilidad obligatoria: qué debe decir, dónde publicarla, con qué frecuencia actualizarla
- Las sanciones aplicables y los expedientes sancionadores más relevantes en España
- Cómo prepararse para una auditoría de accesibilidad digital: documentación, procesos, histórico de mejoras

**BLOQUE 3 — ACCESIBILIDAD FÍSICA Y EN SERVICIOS:**
- Las obligaciones de accesibilidad en locales comerciales: Código Técnico de la Edificación, normativas autonómicas
- Qué se entiende por "ajuste razonable" en el acceso a bienes y servicios y cuándo la empresa puede alegar carga excesiva
- Las adaptaciones en la atención al cliente: canales alternativos, personal formado, protocolos para atender diversas discapacidades
- La responsabilidad del empresario cuando sus instalaciones físicas tienen barreras arquitectónicas preexistentes

**BLOQUE 4 — DERECHOS LABORALES DE PERSONAS CON DISCAPACIDAD:**
- La obligación de reserva del 2% para empresas de más de 50 trabajadores y las medidas alternativas
- El concepto de ajuste razonable en el empleo: qué adaptaciones debe facilitar el empleador, cuándo puede negarse
- El proceso de acreditación de discapacidad y los beneficios fiscales para la empresa que contrata
- Las bonificaciones en cuotas de la Seguridad Social por contratación de personas con discapacidad
- Cómo gestionar la incapacidad sobrevenida de un trabajador: el protocolo legal y los derechos del empleado

**BLOQUE 5 — RESPONSABILIDAD Y GESTIÓN DEL RIESGO:**
- ¿Qué ocurre si una persona con discapacidad no puede acceder a mi servicio y presenta una reclamación?
- El proceso de denuncia ante el CERMI, Defensor del Pueblo y organismos de supervisión
- Cómo documentar las medidas de accesibilidad implementadas para acreditar diligencia en caso de reclamación
- El papel del Plan de Accesibilidad como documento estratégico y de gestión del riesgo legal
- Cuándo la empresa puede alegar "carga desproporcionada" y qué debe demostrar para que sea aceptada

**BLOQUE 6 — PLAN DE ACCIÓN:**
Basándote en mi contexto, ayúdame a crear:
1. La lista priorizada de obligaciones legales que aplican a mi empresa con sus plazos
2. El diagnóstico de cumplimiento actual con las áreas de mayor riesgo
3. El plan de acción de 6 meses para alcanzar el cumplimiento básico
4. Los recursos y servicios especializados a los que debo acudir

Empieza con las preguntas de contexto y luego dime cuáles son mis obligaciones prioritarias.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Auditar y planificar el cumplimiento legal de accesibilidad para empresas en España',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte accesible para todos los usuarios',
                'description'      => 'Diseña un servicio de soporte que funcione para todos: canales alternativos, ajustes para usuarios con discapacidad y formación del equipo de CS para atender la diversidad de necesidades.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en Customer Success y diseño de servicios accesibles con experiencia en transformar equipos de soporte para que atiendan a todos los usuarios, independientemente de sus capacidades o contexto. Tu objetivo es ayudarme a construir un servicio de soporte genuinamente inclusivo.

**DIAGNÓSTICO INICIAL:**
Pregúntame primero:
1. ¿Cómo es el equipo actual de CS: tamaño, canales disponibles (email, chat, teléfono, videollamada)?
2. ¿Cuál es el producto o servicio que soporto y qué tipos de usuarios tenemos identificados con necesidades especiales?
3. ¿He recibido ya quejas relacionadas con la falta de accesibilidad del soporte?
4. ¿Cuáles son los mayores retos actuales del equipo: tiempo de respuesta, calidad, satisfacción?
5. ¿Tengo budget para herramientas o formación adicional?

**BLOQUE 1 — AUDITORÍA DE ACCESIBILIDAD DEL SOPORTE ACTUAL:**
- Diseña la evaluación del servicio de soporte desde la perspectiva de cada tipo de discapacidad: visual, auditiva, motriz, cognitiva, del habla
- Identifica los cuellos de botella en cada canal para cada perfil de usuario: ¿el chat requiere mecanografía rápida? ¿el teléfono asume capacidad auditiva? ¿el formulario tiene campos obligatorios que algunos no pueden completar?
- Evalúa la accesibilidad de los canales de autoservicio: base de conocimientos, FAQs, chatbot
- Define las brechas críticas que impiden a ciertos usuarios acceder a soporte básico

**BLOQUE 2 — DISEÑO DE CANALES ALTERNATIVOS:**
- Explica el modelo de canales de soporte inclusivo: cada usuario debe poder resolver su problema por al menos un canal accesible para él
- Diseña el canal de soporte por videollamada con intérprete de lengua de signos: cuándo ofrecerlo, cómo gestionarlo, proveedores en España
- El soporte por email y formulario accesible: tiempos de respuesta extendidos para usuarios que necesitan más tiempo para comunicarse
- El soporte asíncrono de vídeo (Loom, herramientas similares): cuándo permite explicar problemas que el texto no captura
- Diseña el protocolo de soporte proactivo para usuarios con discapacidad conocida: anticipar necesidades antes de que contacten

**BLOQUE 3 — HERRAMIENTAS Y ADAPTACIONES TÉCNICAS:**
- Las herramientas que permiten a usuarios con discapacidad visual usar el chat de soporte: lectores de pantalla compatibles con los principales CRMs
- Las adaptaciones de la interfaz del agente para gestionar tickets de usuarios con necesidades especiales: etiquetas, notas internas, escalado rápido
- La integración de subtítulos y transcripciones automáticas en videollamadas de soporte
- El chatbot accesible: las reglas de diseño conversacional que funciona para usuarios con discapacidad cognitiva
- Los sistemas de autenticación alternativos para usuarios que no pueden usar 2FA por SMS o app

**BLOQUE 4 — FORMACIÓN DEL EQUIPO:**
- Diseña el programa de sensibilización en discapacidad para el equipo de CS: qué aprender, cómo aprenderlo, cuánto tiempo
- Crea los protocolos de atención por tipo de discapacidad: cómo comunicarse con un cliente sordo por chat, cómo ayudar a alguien con dificultades cognitivas
- Explica el lenguaje apropiado: los términos que se usan, los que se evitan, el enfoque person-first vs. identity-first
- Diseña los casos de práctica para el entrenamiento: escenarios reales donde el agente aplica los protocolos de accesibilidad
- Cómo gestionar las situaciones de crisis donde un usuario vulnerable está en apuros: el escalado emocional y de competencias

**BLOQUE 5 — MÉTRICAS Y MEJORA CONTINUA:**
- Define las métricas de accesibilidad del soporte: CSAT por perfil de usuario, tiempo de resolución segmentado, tasa de abandono por canal
- Diseña la encuesta de satisfacción accesible: formulario que funcione para usuarios con diferentes capacidades
- Crea el proceso de feedback de usuarios con discapacidad: cómo recabar su experiencia regularmente
- Establece el comité de mejora de accesibilidad en soporte: quién participa, con qué frecuencia, qué decisiones toma
- Define los KPIs que demuestran mejora y que puedo reportar a la dirección

**ENTREGABLES:**
Dame al final:
1. El playbook de atención accesible de una página para el equipo
2. La priorización de mejoras según impacto y coste de implementación
3. El plan de formación de 3 meses para el equipo actual

Empieza con el diagnóstico inicial.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar y mejorar un servicio de soporte accesible para usuarios con diversas capacidades',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Auditoría de accesibilidad digital como servicio freelance',
                'description'      => 'El nicho del consultor independiente de accesibilidad digital: demanda creciente por regulación, herramientas, proceso de auditoría y cómo generar valor diferencial para el cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor freelance senior especializado en accesibilidad digital con una cartera de clientes establecida. Tu objetivo es ayudarme a lanzar o escalar un servicio de auditoría de accesibilidad digital como freelance, aprovechando la demanda creciente que genera la nueva regulación europea.

**CONTEXTO PERSONAL:**
Antes de empezar, pregúntame:
1. ¿Tengo ya experiencia en accesibilidad web o parto de perfil técnico (frontend) o de diseño sin especialización en a11y?
2. ¿Ya tengo clientes o estoy construyendo el servicio desde cero?
3. ¿Qué tipo de clientes objetivo tengo en mente: agencias, administración pública, empresas medianas?
4. ¿Cuál es mi situación actual: autónomo activo, empleado que quiere salir, estudiante?
5. ¿Cuánto tiempo puedo dedicar al desarrollo del servicio en paralelo con mi situación actual?

**MÓDULO 1 — CONTEXTO DE MERCADO Y OPORTUNIDAD:**
- Explica la demanda de accesibilidad creada por el Acta Europea de Accesibilidad (EAA) y sus plazos: junio 2025 para el sector privado
- Detalla los sectores más afectados y por tanto con mayor demanda de auditorías: banca, seguros, telecomunicaciones, comercio electrónico, transporte
- Explica la diferencia entre auditoría de accesibilidad puntual, consultoría continua y testing embebido en el equipo de desarrollo
- Muéstrame el tamaño del mercado de accesibilidad digital en España y los perfiles de proveedores actuales (quién es la competencia)
- Los nichos dentro del nicho: la accesibilidad en PDF, en documentos Word, en vídeo, en apps nativas tiene poca competencia y demanda creciente

**MÓDULO 2 — FORMACIÓN Y CERTIFICACIÓN:**
- Las certificaciones de accesibilidad reconocidas: WAS (Web Accessibility Specialist) del IAAP, CPWA, y sus equivalentes en España
- El plan de estudio para preparar la certificación WAS: materiales, tiempo estimado, coste
- Las comunidades y eventos de referencia en accesibilidad: A11ySpain, GAAD, recursos online
- Cómo construir un portfolio de accesibilidad sin clientes previos: auditar proyectos open source, crear case studies propios, contribuir a proyectos de ONG
- Los recursos de formación gratuitos y de pago más efectivos para alcanzar nivel de auditor en 6 meses

**MÓDULO 3 — PROCESO DE AUDITORÍA:**
- Define el proceso completo de auditoría WCAG 2.1 AA: discovery, evaluación automatizada, evaluación manual, testing con tecnología de apoyo, informe
- Las herramientas de auditoría automatizada que debe dominar todo auditor: axe DevTools, WAVE, Lighthouse, Siteimprove
- El proceso de evaluación manual: el recorrido de teclado, el testing con NVDA + Firefox, VoiceOver + Safari, la revisión del código HTML y ARIA
- Cómo documentar los hallazgos: el formato del issue (criterio WCAG, impacto, reproducción, recomendación de fix, prioridad)
- El informe de accesibilidad que el cliente puede entender y usar: el ejecutivo, el técnico y la declaración de conformidad

**MÓDULO 4 — PROPUESTA DE VALOR Y PRICING:**
- Define los tres productos de accesibilidad que debe tener un freelance: auditoría puntual, revisión de nuevas features, formación para equipos
- El pricing de una auditoría WCAG: los rangos del mercado según el tamaño del sitio, la profundidad del análisis y el tipo de cliente
- El argumento de venta de la accesibilidad para el cliente que no le ve valor: ROI de accesibilidad, riesgo legal, mercado adicional
- Cómo posicionarme entre un perfil técnico (que solo da código) y una consultoría cara: la propuesta de valor del freelance especialista
- El modelo de retainer mensual de accesibilidad: qué incluye, cómo venderse, cómo evitar el scope creep

**MÓDULO 5 — CAPTACIÓN Y CRECIMIENTO:**
- Los canales de captación que funcionan para servicios de accesibilidad: SEO local, LinkedIn, presentaciones en eventos, partners de agencias
- Cómo hacer el cold outreach para accesibilidad aprovechando la regulación como detonador
- El partnership con agencias de desarrollo y diseño: por qué te quieren como subcontratista especialista
- La estrategia de contenido que demuestra expertise: qué escribir, dónde publicar, cómo hacer que los clientes lleguen solos
- Cómo escalar de auditorías únicas a contratos de accesibilidad continuos

**MÓDULO 6 — OPERACIONES Y HERRAMIENTAS:**
- El stack de herramientas del auditor freelance: qué licencias necesito, cuáles son gratuitas, cuáles imprescindibles
- El template de contrato para servicios de auditoría: qué debe incluir, cómo protegerse de clientes que no implementan y luego culpan al auditor
- La gestión del tiempo en una auditoría: cuántas horas requiere un sitio de 50 páginas, cómo evitar que se alargue
- Los asistentes de lectores de pantalla y dispositivos AT que necesitas para auditorías completas

Empieza con las preguntas de contexto y guíame por los módulos más relevantes para mi punto de partida.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Lanzar y escalar un servicio freelance de auditoría de accesibilidad digital aprovechando la regulación europea',
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
