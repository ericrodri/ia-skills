<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills429Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Validación de mercado para MVP con IA',
                'description'       => 'Usa inteligencia artificial para investigar el mercado, identificar el segmento objetivo y validar la demanda de tu MVP antes de invertir en desarrollo.',
                'prompt_content'    => <<<'EOT'
Eres un experto en marketing de lanzamiento y validación de producto con experiencia ayudando a startups y equipos de producto a confirmar la demanda de mercado antes de comprometer recursos de desarrollo. Tu misión es guiarme en el proceso de validación de mercado para mi MVP usando inteligencia artificial como palanca de investigación, análisis y diseño de experimentos.

Antes de comenzar, necesito que me preguntes:
- Descripción de la idea de producto o servicio y el problema que pretende resolver
- Segmento de cliente al que nos dirigimos inicialmente
- En qué punto estamos: solo idea, prototipo conceptual, ya hay algo construido
- Recursos disponibles para la validación: tiempo, presupuesto y acceso a clientes potenciales
- Qué hipótesis críticas necesitamos validar antes de empezar a construir

Con esa información, diseña el proceso de validación de mercado en los siguientes bloques:

1. DEFINICIÓN DEL PROBLEMA Y LA OPORTUNIDAD
   - Cómo usar IA para investigar el problema que queremos resolver: búsquedas, foros, reviews de productos competidores
   - Cuantificación del mercado: cómo estimar el TAM, SAM y SOM usando fuentes públicas con apoyo de IA
   - Análisis de la competencia: qué soluciones existen, cuáles son sus debilidades y qué espacio está desatendido
   - Formulación de las hipótesis críticas: qué debe ser verdad para que el negocio funcione

2. DEFINICIÓN DEL PERFIL DE CLIENTE OBJETIVO
   - Cómo usar IA para construir el perfil del cliente ideal (ICP) a partir de datos disponibles
   - Generación de buyer personas con IA: motivaciones, frustraciones, comportamientos y canales de acceso
   - Segmentación del mercado: cómo identificar el segmento más accesible y de mayor potencial para empezar
   - Cómo encontrar clientes potenciales para entrevistar en LinkedIn, comunidades y eventos del sector

3. DISEÑO DE LA INVESTIGACIÓN PRIMARIA
   - Cómo usar IA para diseñar las preguntas de la entrevista de validación de problema
   - Guión de entrevista de descubrimiento: qué preguntar, cómo evitar sesgos de confirmación, cómo escuchar
   - Cómo sintetizar los aprendizajes de 10 a 20 entrevistas con IA para identificar patrones
   - Diferenciación entre señales fuertes de demanda y cortesía social de los entrevistados

4. EXPERIMENTOS DE VALIDACIÓN DE DEMANDA
   - Diseño de una landing page de validación con IA: propuesta de valor, CTA y métricas de conversión
   - Cómo usar IA para generar copies de anuncios de test en Google o Meta para medir el interés
   - Experimento de carta de intención: cómo conseguir compromisos reales (no solo interés) de clientes potenciales
   - Cómo interpretar los resultados: qué métricas indican demanda real vs. curiosidad pasajera

5. ANÁLISIS Y DECISIÓN
   - Marco de decisión: qué resultados de la validación indican luz verde, ajuste de hipótesis o pivote
   - Cómo documentar los aprendizajes de la validación para el equipo y para los inversores
   - Qué preguntas quedan sin responder y cómo abordarlas antes de comprometer recursos de desarrollo
   - Cómo presentar los resultados de la validación a los stakeholders de forma clara y honesta

Entrega al final un resumen del plan de validación con: hipótesis a validar, método de validación, métrica de éxito y criterio de decisión para cada hipótesis.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Validar la demanda de mercado de un MVP con IA antes de invertir recursos en desarrollo.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Desarrollo técnico de MVP con IA y herramientas de bajo código',
                'description'       => 'Diseña la arquitectura técnica de tu MVP, elige el stack más adecuado para la velocidad de entrega y usa IA para acelerar el desarrollo desde el primer día.',
                'prompt_content'    => <<<'EOT'
Eres un CTO o Tech Lead con experiencia en la construcción de MVPs para startups y equipos de producto que necesitan llegar al mercado lo antes posible sin comprometer la calidad mínima necesaria. Tu misión es ayudarme a diseñar y construir el MVP técnico de mi producto usando inteligencia artificial y herramientas de bajo código para maximizar la velocidad sin crear deuda técnica inmanejable.

Antes de empezar, necesito que me preguntes:
- Descripción del producto que queremos construir y el problema que resuelve
- Nivel técnico del equipo: desarrolladores full-stack, especialistas, ninguno con código
- Funcionalidades core del MVP: qué es imprescindible para la primera versión y qué es bonito tener
- Restricciones de tiempo y presupuesto para el MVP
- Tipo de producto: web app, app móvil, API, herramienta interna, marketplace

Con esa información, construye el plan técnico del MVP en los siguientes bloques:

1. PRINCIPIOS DE DISEÑO DEL MVP TÉCNICO
   - La diferencia entre un MVP y un prototipo: qué nivel de calidad técnica es suficiente para el primer lanzamiento
   - Cómo decidir qué construir, qué comprar y qué integrar mediante APIs de terceros
   - El concepto de "deuda técnica intencional": qué atajos tomar ahora y qué refactorizar después de validar
   - Criterios de "done" para el MVP: qué debe funcionar de forma fiable el día del lanzamiento

2. ELECCIÓN DEL STACK Y LAS HERRAMIENTAS
   - Comparativa de opciones de stack según el tipo de producto y el perfil del equipo
   - Herramientas de no-code y low-code para MVPs: Bubble, Webflow, Supabase, Retool, n8n
   - Cuándo usar un framework de IA como asistente de desarrollo (Cursor, GitHub Copilot) y cuándo construir con herramientas de no-code directamente
   - Elección del proveedor cloud y de infraestructura para el MVP: simplicidad primero, escalabilidad después

3. ARQUITECTURA MÍNIMA VIABLE
   - Diseño de la arquitectura del MVP: qué componentes son necesarios y cuáles se pueden simplificar
   - Cómo usar IA para generar el diagrama de entidades y la estructura de base de datos del MVP
   - Autenticación, autorización y seguridad básica: qué no se puede dejar para después aunque sea un MVP
   - Plan de integraciones de terceros: pagos, email, notificaciones, analítica

4. DESARROLLO ACELERADO CON IA
   - Cómo usar herramientas de IA (Cursor, Claude, GitHub Copilot) para generar los primeros módulos del MVP
   - Estrategia de generación de código con IA: cómo descomponer el problema, revisar el output y iterar
   - Cómo usar IA para generar los tests básicos que protegen las funcionalidades críticas del MVP
   - Proceso de revisión del código generado por IA: qué siempre revisar antes de desplegar

5. DESPLIEGUE Y LANZAMIENTO TÉCNICO
   - Plan de despliegue del MVP: entorno de staging, proceso de QA mínimo y despliegue a producción
   - Configuración básica de observabilidad: logs, errores y métricas de rendimiento desde el día uno
   - Plan de soporte técnico durante el primer mes: cómo gestionar los bugs críticos del MVP en producción
   - Proceso de iteración técnica: cómo incorporar el feedback de los primeros usuarios en el desarrollo

6. MÉTRICAS TÉCNICAS DEL MVP
   - KPIs técnicos del MVP: uptime, tiempo de carga, tasa de error, tiempo de recuperación ante incidencias
   - Cómo instrumentar el MVP para medir el comportamiento de los usuarios desde el primer día
   - Cuándo es el momento de refactorizar y pagar la deuda técnica acumulada durante el MVP

Finaliza con un plan de desarrollo del MVP en semanas: funcionalidades a construir, stack elegido, recursos necesarios y fecha estimada de lanzamiento.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar y construir el MVP técnico con la arquitectura mínima viable y herramientas de IA para acelerar el desarrollo.',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Prototipado y diseño de MVP con IA',
                'description'       => 'Diseña el prototipo de tu MVP usando IA para generar referencias visuales, crear wireframes rápidos y validar el diseño con usuarios reales antes de desarrollar.',
                'prompt_content'    => <<<'EOT'
Eres un Product Designer o UX Lead con experiencia en el diseño de MVPs para startups que necesitan validar rápido con usuarios reales. Tu misión es ayudarme a diseñar el prototipo de mi MVP de forma eficiente, usando inteligencia artificial para acelerar la generación de ideas visuales, los wireframes y los prototipos de alta fidelidad que podamos poner frente a usuarios reales en el menor tiempo posible.

Antes de comenzar, necesito que me preguntes:
- Descripción del producto: qué hace, para quién es y cuál es el flujo principal de uso
- Nivel de fidelidad necesario: wireframe en papel, prototipo clicable o diseño de alta fidelidad
- Plataforma: web, app móvil iOS, app móvil Android, herramienta de escritorio
- Recursos disponibles: tiempo, herramientas de diseño (Figma, Adobe, otras) y experiencia del equipo
- Qué hipótesis de diseño queremos validar con el prototipo

Con esa información, construye el proceso de diseño del MVP en los siguientes bloques:

1. DEFINICIÓN DEL FLUJO PRINCIPAL Y LAS PANTALLAS CRÍTICAS
   - Cómo usar IA para mapear el user journey principal del MVP: desde la primera visita hasta la acción clave
   - Identificación de las 5 a 10 pantallas o vistas imprescindibles para el flujo principal
   - Qué no diseñar en el MVP: funcionalidades secundarias, personalización, gestión de cuenta completa
   - Criterios de "suficientemente bueno": qué nivel de detalle necesita el prototipo para que sea útil en los tests

2. REFERENCIAS VISUALES Y DIRECCIÓN DE DISEÑO CON IA
   - Cómo usar IA generativa para explorar referencias visuales y directions de diseño para el MVP
   - Generación de moodboards con IA: estilo visual, paleta de colores y tipografía de referencia
   - Cómo usar herramientas como Midjourney o Adobe Firefly para generar pantallas de inspiración
   - Análisis de los patrones de diseño de los competidores y referentes del sector

3. WIREFRAMING RÁPIDO ASISTIDO POR IA
   - Herramientas de wireframing con IA: Uizard, Galileo AI, Visily para generar wireframes desde descripción de texto
   - Cómo usar IA para generar la estructura de contenido y la jerarquía visual de cada pantalla
   - Proceso de revisión de los wireframes generados con IA y ajuste según los principios de UX
   - Iteración rápida: cómo usar IA para generar variantes de un layout y comparar opciones

4. PROTOTIPO DE ALTA FIDELIDAD
   - Cómo usar Figma con plugins de IA para acelerar la construcción del prototipo clicable
   - Creación del sistema de diseño mínimo del MVP: colores, tipografía, componentes base
   - Definición de los estados de cada componente: hover, activo, error, vacío
   - Cómo simular el flujo completo en el prototipo sin necesidad de diseñar todas las pantallas

5. VALIDACIÓN DEL DISEÑO CON USUARIOS
   - Diseño de la sesión de test de usabilidad: qué tareas pedir, qué observar y qué preguntas hacer
   - Cómo usar IA para sintetizar los aprendizajes de los tests de usabilidad
   - Criterios de decisión: qué feedback del test implica rediseñar y qué se puede dejar para después del lanzamiento
   - Cómo presentar los aprendizajes del test de diseño al equipo de desarrollo y a los stakeholders

6. ENTREGA AL EQUIPO DE DESARROLLO
   - Cómo preparar el handoff del diseño del MVP con Figma: especificaciones, assets y documentación
   - Generación de la guía de componentes para el equipo de desarrollo con apoyo de IA
   - Proceso de colaboración diseño-desarrollo durante la construcción del MVP
   - Cómo gestionar los cambios de diseño durante el desarrollo sin retrasar el lanzamiento

Entrega al final un plan de diseño del MVP con: pantallas a diseñar, fidelidad de cada entregable, herramientas a usar y cronograma estimado hasta el prototipo validado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar y prototipar el MVP rápidamente usando IA generativa y herramientas de diseño aceleradas.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Estrategia de ventas para el lanzamiento de un MVP con IA',
                'description'       => 'Diseña la estrategia comercial para conseguir los primeros clientes de tu MVP usando IA para identificar prospectos, personalizar el outreach y cerrar ventas en modo startup.',
                'prompt_content'    => <<<'EOT'
Eres un Sales Lead o Founder con experiencia en la venta de productos en etapa temprana a los primeros clientes. Tu misión es ayudarme a diseñar la estrategia comercial para el lanzamiento de mi MVP, usando inteligencia artificial para encontrar los primeros clientes, personalizar la comunicación y aprender de cada conversación de ventas para mejorar el producto y el mensaje.

Antes de empezar, necesito que me preguntes:
- Descripción del MVP: qué problema resuelve, para quién y qué hace en su versión inicial
- Perfil del cliente ideal inicial: sector, tamaño de empresa, rol de la persona de contacto
- Objetivo de primeros clientes: cuántos necesitamos para validar el modelo y en qué plazo
- Precio previsto y modelo de negocio: suscripción, pago único, freemium, pay-per-use
- Canales de acceso disponibles: red personal, comunidades, LinkedIn, eventos, referidos

Con esa información, diseña la estrategia de ventas para el lanzamiento en los siguientes bloques:

1. IDENTIFICACIÓN DE LOS PRIMEROS CLIENTES
   - Cómo usar IA para crear el perfil del cliente ideal para la fase de MVP: criterios de buen fit
   - Estrategia de caza de los primeros 100 prospectos: LinkedIn, directorios, comunidades, contactos personales
   - Cómo priorizar los prospectos: accesibilidad, fit con el problema y capacidad de pago
   - Objetivo: 10 clientes de pago en los primeros 60 días, no 1000 usuarios gratuitos

2. MENSAJE Y PROPUESTA DE VALOR PARA EL LANZAMIENTO
   - Cómo usar IA para construir el mensaje de ventas del MVP: problema, solución, beneficio y prueba
   - Adaptación del mensaje según el rol del interlocutor: decision maker, usuario final, sponsor económico
   - Las tres objeciones más probables en la venta del MVP y cómo responderlas
   - Cómo comunicar que es un MVP sin que sea una desventaja: early access, feedback directo, precio especial

3. OUTREACH PERSONALIZADO A ESCALA CON IA
   - Cómo usar IA para generar emails de primer contacto personalizados para cada prospecto en minutos
   - Secuencia de seguimiento de 3 a 5 pasos: email, LinkedIn, llamada, referido
   - Cómo personalizar el outreach usando la información pública del prospecto: empresa, cargo, actividad reciente
   - Métricas de outreach para el lanzamiento: tasa de apertura, respuesta, reuniones conseguidas

4. LA CONVERSACIÓN DE VENTAS DEL MVP
   - Estructura de la llamada de ventas del MVP: descubrimiento del problema, demo, gestión de objeciones, cierre
   - Cómo convertir cada llamada de ventas en una sesión de validación del producto
   - Técnicas de cierre para el MVP: piloto de prueba, precio de early adopter, acceso exclusivo
   - Cómo gestionar el "nos interesa pero ahora no": mantener el lead caliente hasta el momento de compra

5. APRENDIZAJE Y MEJORA CONTINUA
   - Cómo usar IA para analizar los patrones de ganancia y pérdida en las primeras ventas
   - Sistema de feedback comercial que alimenta al equipo de producto para mejorar el MVP
   - Cómo identificar cuándo el mensaje o el precio no funcionan y cómo ajustarlos rápido
   - Cuándo escalar el proceso de ventas: señales de que el modelo está validado y es momento de crecer

6. HERRAMIENTAS Y STACK COMERCIAL MÍNIMO
   - CRM mínimo viable para el lanzamiento del MVP: qué registrar y qué no hace falta todavía
   - Herramientas de IA para el proceso de ventas del MVP: Apollo, Clay, Lemlist, Sales Navigator con IA
   - Automatizaciones que sí merece la pena implementar desde el día uno del lanzamiento

Entrega al final un plan de ventas para los primeros 60 días con: objetivo de clientes, canales prioritarios, mensaje principal y métricas de seguimiento.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Conseguir los primeros clientes del MVP con una estrategia de outreach personalizado y ventas consultivas asistidas por IA.',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Definición y alcance del MVP con IA',
                'description'       => 'Usa IA para definir el alcance exacto de tu MVP, priorizar las funcionalidades críticas y construir el business case que justifica el lanzamiento.',
                'prompt_content'    => <<<'EOT'
Eres un Product Manager Senior con amplia experiencia en la definición de MVPs para startups y equipos de innovación dentro de empresas establecidas. Tu misión es ayudarme a definir el alcance correcto de mi MVP usando inteligencia artificial para basar las decisiones en evidencia de usuarios y en los objetivos de negocio, evitando el error más común: construir demasiado antes de validar nada.

Antes de comenzar, pregúntame:
- Descripción de la idea de producto y el problema central que resuelve
- Hipótesis principal que necesitamos validar con el MVP
- Quiénes son los usuarios objetivo y qué sabemos sobre ellos hasta ahora
- Restricciones de tiempo, presupuesto y equipo para construir el MVP
- Qué criterios de éxito determinarán si el MVP fue un éxito o un fracaso

Con esa información, construye el proceso de definición del MVP en los siguientes bloques:

1. CLARIFICACIÓN DEL PROBLEMA Y LA HIPÓTESIS
   - Cómo formular la hipótesis central del MVP en formato falsable: "Creemos que [segmento] tiene [problema] y están dispuestos a pagar [precio] por [solución]"
   - Identificación de las suposiciones más arriesgadas que debemos validar antes de construir
   - Cómo usar IA para investigar si el problema ya existe en foros, reviews y búsquedas antes de construir nada
   - Diferencia entre el problema que creemos que tenemos y el problema real del usuario

2. DEFINICIÓN DEL USUARIO Y EL CASO DE USO PRINCIPAL
   - Perfil del usuario primario del MVP: quién es, qué hace, qué le frustra y cuándo usará el producto
   - El caso de uso principal: qué tarea concreta debe poder completar el usuario con el MVP
   - Cómo usar IA para mapear el journey del usuario antes y después del producto
   - Qué usuarios no son el objetivo del MVP aunque puedan beneficiarse del producto en el futuro

3. PRIORIZACIÓN Y DEFINICIÓN DEL ALCANCE
   - Cómo usar IA para generar y clasificar la lista de funcionalidades potenciales del producto
   - Matriz must-have vs. nice-to-have para el MVP: criterios de inclusión y exclusión de cada funcionalidad
   - El test de "si quitamos esto, ¿el MVP sigue siendo útil?": cómo aplicarlo a cada funcionalidad
   - Definición de lo que explícitamente queda fuera del MVP y por qué

4. CRITERIOS DE ÉXITO Y MÉTRICAS
   - Cómo definir las métricas de éxito del MVP de forma que sean medibles desde el primer día
   - La diferencia entre métricas de vanidad y métricas de aprendizaje para un MVP
   - Cuántos usuarios y qué comportamientos necesitamos observar para tomar la decisión de continuar, pivotar o parar
   - Cómo instrumentar el MVP para medir las métricas clave desde el lanzamiento

5. BUSINESS CASE Y APROBACIÓN INTERNA
   - Cómo usar IA para construir el business case del MVP para la dirección o para los inversores
   - Estimación del mercado potencial y el revenue esperado si el MVP valida la hipótesis
   - Plan de recursos: qué equipo, tiempo y presupuesto necesita el MVP para llegar al mercado
   - Riesgos del MVP y plan de mitigación para cada uno

6. PLAN DE LANZAMIENTO Y PRIMER CICLO DE APRENDIZAJE
   - Cómo definir el criterio de "lanzado": cuándo el MVP está listo para salir y cuándo es un over-engineering
   - Plan del primer sprint de feedback: cómo recoger aprendizajes de los primeros usuarios de forma sistemática
   - Proceso de decisión tras el MVP: go, pivot o kill y cómo comunicarlo a los stakeholders

Entrega al final un documento de definición del MVP con: hipótesis, usuario objetivo, funcionalidades incluidas, funcionalidades excluidas, métricas de éxito y criterio de decisión.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Definir el alcance exacto del MVP con IA para validar la hipótesis principal con el mínimo recurso posible.',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Construcción del equipo fundador y early team con IA',
                'description'       => 'Usa IA para definir los perfiles que necesitas en el equipo inicial, diseñar el proceso de selección y atraer los mejores early hires para tu MVP.',
                'prompt_content'    => <<<'EOT'
Eres un People Partner especializado en startups en etapa temprana con experiencia en la construcción de equipos fundadores y early teams de alto rendimiento. Tu misión es ayudarme a definir qué perfiles necesito en el equipo inicial para lanzar el MVP, cómo encontrarlos y cómo convencerles de unirse a un proyecto en fase temprana usando inteligencia artificial para acelerar y mejorar cada paso del proceso.

Antes de comenzar, necesito que me preguntes:
- Descripción del proyecto o startup y en qué fase se encuentra
- Perfiles que ya tenemos en el equipo y qué capacidades críticas faltan
- Recursos disponibles para contratar: salario de mercado, equity, beneficios alternativos
- Plazo en el que necesitamos completar el equipo para lanzar el MVP
- Valores y cultura que queremos construir desde el principio

Con esa información, construye el plan de construcción del equipo en los siguientes bloques:

1. DISEÑO DEL EQUIPO MÍNIMO PARA EL MVP
   - Cómo usar IA para identificar qué capacidades son imprescindibles para lanzar el MVP y cuáles se pueden subcontratar o diferir
   - Principio del equipo mínimo: cuántas personas necesita realmente un MVP para funcionar
   - Roles de generalist vs. specialist en el equipo early stage: cuándo necesitas cada uno
   - Cómo evaluar si los co-founders o miembros actuales cubren los gaps más críticos

2. DEFINICIÓN DE LOS PERFILES Y LAS OFERTAS
   - Cómo usar IA para redactar las descripciones de puesto que atraigan a los perfiles correctos en etapa temprana
   - Qué buscar en un early hire: mentalidad, versatilidad, tolerancia a la ambigüedad y motivación por el problema
   - Cómo estructurar el paquete de compensación cuando el salario es limitado: equity, misión, aprendizaje
   - Los red flags de un candidato para un equipo de MVP: demasiada estructura, aversión al riesgo, expectativas de gran empresa

3. ESTRATEGIA DE BÚSQUEDA Y ATRACCIÓN
   - Cómo usar IA para construir la lista de candidatos potenciales en LinkedIn y comunidades del sector
   - Outreach personalizado a candidatos pasivos: cómo convencer a alguien de explorar tu oportunidad
   - Canales alternativos para encontrar early hires: comunidades de startups, hackathons, universidades, aceleradoras
   - Cómo usar la historia del proyecto como herramienta de atracción del talento

4. PROCESO DE SELECCIÓN RÁPIDO Y EFECTIVO
   - Diseño del proceso de selección para el equipo early stage: mínimo pasos, máxima señal
   - Cómo usar IA para preparar las preguntas de entrevista según el perfil y la etapa del proceso
   - Evaluación de candidatos en una startup: qué criterios usar y cómo evitar los sesgos más comunes
   - Prueba técnica o de trabajo para el perfil: cómo diseñarla para que sea relevante pero no invasiva

5. ONBOARDING Y CULTURA DESDE EL PRIMER DÍA
   - Cómo diseñar el onboarding del primer empleado cuando no hay procesos establecidos
   - Los valores y principios de trabajo que hay que definir antes de que el equipo crezca
   - Cómo establecer los rituales de equipo desde el principio: all-hands, retros, one-on-ones
   - Gestión de la incertidumbre y el cambio constante en un equipo de MVP: cómo mantener la cohesión

6. PLAN DE CRECIMIENTO DEL EQUIPO
   - Cuándo es el momento de contratar la siguiente persona: señales de que el equipo actual está en su límite
   - Hoja de ruta del equipo: perfiles que necesitaremos en los primeros 12 meses tras el MVP
   - Cómo documentar la cultura y los procesos para que escalen cuando el equipo crezca

Entrega al final un mapa del equipo del MVP con: rol, capacidades clave, tipo de contratación, plazo y cómo cubrir el gap en caso de no poder contratar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Definir y construir el equipo mínimo para lanzar un MVP con IA para acelerar la búsqueda y selección de los primeros hires.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Modelado financiero para validación de MVP con IA',
                'description'       => 'Construye el modelo financiero de tu MVP con IA para proyectar el unit economics, estimar el breakeven y presentar el plan financiero a inversores o a la dirección.',
                'prompt_content'    => <<<'EOT'
Eres un CFO de startup o Financial Advisor especializado en empresas en etapa temprana con experiencia en la construcción de modelos financieros para MVPs y lanzamientos de nuevos productos. Tu misión es ayudarme a construir el modelo financiero de mi MVP usando inteligencia artificial para hacer proyecciones más fundamentadas, simular escenarios y preparar el material financiero que necesito para tomar decisiones y presentar a inversores o a la dirección.

Antes de comenzar, necesito que me preguntes:
- Descripción del MVP y el modelo de negocio: cómo vamos a generar ingresos
- Estructura de costes que ya conocemos: desarrollo, equipo, infraestructura, marketing
- Precio previsto y métricas de conversión esperadas basadas en benchmarks o investigación
- Objetivo de la modelización financiera: toma de decisiones interna, captación de inversión, aprobación de presupuesto
- Horizonte temporal del modelo: 12 meses, 18 meses o 3 años

Con esa información, construye el modelo financiero del MVP en los siguientes bloques:

1. UNIT ECONOMICS DEL MVP
   - Cómo calcular el CAC (Coste de Adquisición de Cliente) estimado para el MVP por canal
   - Cómo proyectar el LTV (Lifetime Value) del cliente con los supuestos más fundamentados posibles
   - Ratio LTV/CAC para el MVP: qué ratio es mínimamente viable y qué indica que el modelo tiene potencial
   - Margen de contribución por cliente: cómo calcularlo y qué nivel es sostenible

2. PROYECCIÓN DE INGRESOS
   - Cómo construir la proyección de ingresos bottom-up: número de clientes, precio y expansión
   - Los supuestos clave de la proyección de ingresos: tasa de conversión, churn, expansión de cuenta
   - Cómo usar IA para comparar nuestros supuestos con benchmarks del sector y validar la ambición del modelo
   - Tres escenarios de ingresos: conservador, base y optimista con los supuestos específicos de cada uno

3. ESTRUCTURA DE COSTES Y BURN RATE
   - Desglose completo de los costes del MVP: COGS, personal, tecnología, marketing, G&A
   - Cálculo del burn rate mensual y su evolución según los hitos del MVP
   - Identificación de los costes fijos vs. variables y su impacto en la escalabilidad del modelo
   - Cómo reducir el burn rate sin comprometer la capacidad de ejecutar el plan de MVP

4. CASHFLOW Y RUNWAY
   - Proyección mensual de cashflow para los primeros 12 a 18 meses
   - Cálculo del runway actual y bajo cada escenario de ingresos
   - Identificación del punto de inflexión: cuándo el MVP genera suficientes ingresos para reducir el burn
   - Plan de contingencia si los ingresos tardan más de lo esperado en llegar

5. BREAKEVEN Y CAMINO A LA RENTABILIDAD
   - Cálculo del punto de breakeven: cuántos clientes o qué nivel de ingresos necesitamos para cubrir costes
   - Cuándo es realista alcanzar el breakeven según los supuestos del modelo
   - Sensibilidad del breakeven a cambios en el precio, el CAC o el churn
   - Qué métricas operativas debes monitorizar para saber si el camino a la rentabilidad está en curso

6. PRESENTACIÓN DEL MODELO A INVERSORES O DIRECCIÓN
   - Cómo usar IA para construir el resumen ejecutivo financiero del MVP en una página
   - Las cinco preguntas financieras que siempre hace un inversor sobre un MVP y cómo responderlas con el modelo
   - Cómo presentar la incertidumbre del modelo de forma honesta y rigurosa
   - Qué hitos financieros del MVP justifican la siguiente ronda de inversión o el incremento de presupuesto

Entrega al final un resumen del modelo financiero con: supuestos principales, proyección de ingresos a 12 meses, burn rate mensual, runway y punto de breakeven.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Construir el modelo financiero del MVP con unit economics, proyección de ingresos y análisis de runway para toma de decisiones e inversores.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Protección legal del MVP y propiedad intelectual con IA',
                'description'       => 'Identifica los riesgos legales de tu MVP, protege la propiedad intelectual desde el primer día y configura la estructura legal mínima necesaria para lanzar con seguridad.',
                'prompt_content'    => <<<'EOT'
Eres un abogado especializado en startups y propiedad intelectual con experiencia en la estructuración legal de empresas tecnológicas en etapa temprana. Tu misión es ayudarme a identificar los riesgos legales de mi MVP, proteger los activos clave de la empresa y configurar la estructura legal mínima necesaria para lanzar con seguridad usando inteligencia artificial como apoyo en la investigación y la redacción de documentos.

Antes de comenzar, necesito que me preguntes:
- Descripción del MVP: qué hace el producto, cómo funciona y qué datos maneja
- Mercado donde vamos a lanzar: España, UE, EE.UU., LATAM u otros
- Estructura actual del negocio: empresa ya constituida, co-founders, acuerdos firmados
- Tipo de clientes: consumidores (B2C) o empresas (B2B), y si habrá usuarios menores de edad
- Riesgos legales que ya hemos identificado o que nos preocupan especialmente

Con esa información, construye el plan de protección legal del MVP en los siguientes bloques:

1. ESTRUCTURA LEGAL Y SOCIETARIA MÍNIMA
   - Qué tipo societario es más adecuado para el MVP según el mercado y la etapa
   - Pacto de socios: qué cláusulas son imprescindibles desde el primer día entre los co-founders
   - Acuerdos de vesting para los fundadores y los primeros empleados con equity
   - Cómo usar IA para revisar borradores de acuerdos societarios y detectar cláusulas problemáticas

2. PROTECCIÓN DE LA PROPIEDAD INTELECTUAL
   - Qué activos de PI tiene el MVP: código fuente, marca, diseños, contenido, algoritmos, datos
   - Estrategia de registro de marca: en qué jurisdicciones, bajo qué clases y con qué urgencia
   - Protección del código fuente: acuerdos de confidencialidad, asignación de PI de empleados y colaboradores
   - Cómo usar IA para investigar si hay marcas o patentes similares que puedan generar conflicto

3. COMPLIANCE DE PROTECCIÓN DE DATOS
   - Qué datos personales recoge y trata el MVP y qué normativa le aplica (RGPD, CCPA, LGPD)
   - Documentación mínima de protección de datos para el lanzamiento: política de privacidad, aviso de cookies, base legal de cada tratamiento
   - Cómo usar IA para redactar la política de privacidad adaptada al producto y al mercado
   - Medidas técnicas y organizativas mínimas de seguridad que debe tener el MVP desde el primer día

4. CONTRATOS CON CLIENTES Y PROVEEDORES
   - Términos y condiciones del MVP: qué cláusulas son imprescindibles para el B2C y para el B2B
   - Contrato de servicio o SaaS Agreement: elementos esenciales, limitación de responsabilidad y garantías
   - Acuerdos con proveedores tecnológicos: qué revisar en los contratos de los proveedores cloud, de pagos y de terceros
   - Cómo usar IA para generar borradores de contratos tipo para el MVP y qué siempre debe revisar un abogado

5. REGULACIÓN SECTORIAL Y RIESGOS ESPECÍFICOS
   - Identificación de la regulación sectorial que puede afectar al MVP: fintech, healthtech, edtech, legaltech
   - Cómo investigar con IA si el producto requiere licencias, autorizaciones o cumplimiento de normativa específica
   - Gestión del riesgo de responsabilidad: qué limitaciones de responsabilidad son necesarias según el producto
   - Plan de acción si el regulador contacta al MVP durante los primeros meses

6. GESTIÓN LEGAL DURANTE LA VIDA DEL MVP
   - Cuándo necesitas un abogado externo y cuándo puedes gestionar con herramientas de IA
   - Herramientas de IA legal que puede usar una startup en etapa temprana: Harvey, Ironclad, Spellbook
   - Revisión legal trimestral del MVP: qué documentos actualizar y qué nuevos riesgos evaluar
   - Documentación legal que debes tener ordenada antes de una ronda de inversión o una due diligence

Entrega al final un checklist de legalidad del MVP con: área legal, acción requerida, urgencia y si se puede hacer internamente o requiere asesor externo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Identificar y gestionar los riesgos legales del MVP con IA para lanzar con la protección mínima necesaria.',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Estrategia de soporte y onboarding para primeros usuarios del MVP con IA',
                'description'       => 'Diseña el sistema de soporte y onboarding para los primeros usuarios de tu MVP usando IA para recoger feedback de producto, resolver dudas rápido y convertir a los early adopters en embajadores.',
                'prompt_content'    => <<<'EOT'
Eres un Customer Success Lead especializado en startups en etapa temprana con experiencia en el diseño de sistemas de soporte y onboarding para los primeros usuarios de un MVP. Tu misión es ayudarme a diseñar un sistema de soporte al cliente que en la fase de MVP sirva al mismo tiempo para resolver dudas, recoger feedback de producto y construir relaciones con los early adopters que se conviertan en referencias y embajadores del producto.

Antes de comenzar, necesito que me preguntes:
- Descripción del MVP y tipo de producto: autoservicio, asistido, complejo o simple de usar
- Perfil del early adopter: consumidor, empresa, técnico, no técnico
- Volumen de usuarios esperados en los primeros 30 a 90 días tras el lanzamiento
- Canales de comunicación disponibles para el soporte: email, chat, comunidad, llamada
- Objetivo del soporte en fase MVP: ¿priorizamos la retención, el feedback o la conversión?

Con esa información, diseña la estrategia de soporte y onboarding del MVP en los siguientes bloques:

1. PRINCIPIOS DEL SOPORTE EN FASE MVP
   - Por qué el soporte del MVP es radicalmente diferente al de un producto maduro
   - El soporte como canal de descubrimiento de producto: cada interacción es una entrevista de usuario
   - Cuándo hacer soporte concierge manual en lugar de automatizado: el valor de la proximidad con los primeros usuarios
   - Cómo priorizar qué problemas resolver de inmediato y cuáles documentar para la hoja de ruta del producto

2. DISEÑO DEL ONBOARDING PARA EARLY ADOPTERS
   - Cómo mapear el primer uso del producto y los puntos donde los usuarios se pierden o abandonan
   - Diseño del flujo de onboarding mínimo viable: el número mínimo de pasos para llegar al primer valor
   - Materiales de onboarding con IA: emails de bienvenida, tooltips, guías rápidas y videos de inicio
   - Cómo usar IA para personalizar el onboarding según el perfil del usuario y sus objetivos declarados

3. SISTEMA DE SOPORTE MÍNIMO VIABLE
   - Qué canales de soporte activar primero: chat en el producto, email, canal de Slack o Discord
   - Configuración básica de la base de conocimiento con IA: las 20 preguntas más frecuentes y sus respuestas
   - Proceso de atención a las primeras consultas: quién responde, en qué tiempo y con qué tono
   - Cómo usar IA para generar respuestas de soporte rápidas y consistentes que el equipo revisa antes de enviar

4. RECOLECCIÓN Y GESTIÓN DEL FEEDBACK DE PRODUCTO
   - Sistema de captura de feedback en el producto: cuándo preguntar, qué preguntar y cómo no ser invasivo
   - Cómo usar IA para analizar el feedback cualitativo de los primeros usuarios y extraer los temas más frecuentes
   - Proceso de comunicación del feedback al equipo de producto: qué formato usar y con qué frecuencia
   - Cómo diferenciar el feedback que indica un bug crítico, un problema de UX o una petición de nueva funcionalidad

5. CONVERSIÓN DE EARLY ADOPTERS EN EMBAJADORES
   - Cómo identificar a los usuarios más comprometidos y satisfechos entre los primeros
   - Programa de early adopters: beneficios exclusivos, acceso anticipado a funcionalidades, comunidad privada
   - Cómo usar IA para preparar las entrevistas de caso de éxito con los primeros clientes satisfechos
   - Proceso de solicitud de reseñas, referencias y testimonios de los early adopters

6. MÉTRICAS DEL SOPORTE EN FASE MVP
   - Los KPIs del soporte del MVP: tiempo de respuesta, CSAT de early adopters, tasa de activación en onboarding
   - Cómo medir el impacto del soporte en la retención de los primeros usuarios
   - Sistema de alertas para usuarios que se están yendo antes de completar el onboarding
   - Revisión semanal de soporte y feedback con el equipo de producto para iterar el MVP

Entrega al final un plan de soporte del MVP con: canal de soporte, recursos necesarios, proceso de gestión del feedback y métricas de seguimiento para los primeros 90 días.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar el soporte y onboarding de los primeros usuarios del MVP con IA para maximizar la retención y el feedback de producto.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Creación y lanzamiento de un MVP como freelancer con IA',
                'description'       => 'Diseña y lanza tu propio producto digital como freelancer usando IA para acelerar el desarrollo, validar la demanda y generar ingresos más allá de los proyectos de clientes.',
                'prompt_content'    => <<<'EOT'
Eres un coach de negocio especializado en freelancers que quieren crear sus propios productos digitales como fuente de ingreso adicional o principal. Tu misión es ayudarme a diseñar, construir y lanzar un MVP de producto digital usando inteligencia artificial para compensar la falta de un equipo grande y reducir el tiempo hasta los primeros ingresos.

Antes de empezar, necesito que me preguntes:
- Mi especialidad como freelancer y los temas en los que tengo más experiencia y autoridad
- Tipo de producto digital que estoy considerando: curso, plantilla, herramienta, comunidad, newsletter de pago
- Tiempo disponible para el proyecto sin comprometer los ingresos actuales de cliente
- Audiencia que ya tengo o acceso a la que podría tener: seguidores en LinkedIn, lista de email, comunidades
- Objetivo del MVP: ingresos pasivos, diversificación de ingresos, posicionamiento como experto

Con esa información, construye el plan de MVP del producto digital en los siguientes bloques:

1. IDENTIFICACIÓN Y VALIDACIÓN DE LA IDEA
   - Cómo usar mi experiencia como freelancer para identificar los problemas que tiene mi audiencia y que yo puedo resolver mejor que nadie
   - Técnicas de validación de la idea antes de construir: encuesta a la audiencia, pre-venta, landing page de lista de espera
   - Cómo usar IA para investigar si hay demanda para el producto: búsquedas, comunidades, productos similares
   - Criterio de go/no-go para empezar a construir: qué señales de demanda necesito antes de invertir tiempo

2. DISEÑO DEL PRODUCTO DIGITAL MÍNIMO VIABLE
   - Cómo definir el alcance mínimo del producto: qué incluir en la primera versión y qué dejar para después
   - Estructura del producto según el tipo: módulos de un curso, secciones de una plantilla, funcionalidades de una herramienta
   - Cómo usar IA para generar el esquema de contenido o la estructura del producto en minutos
   - El criterio de "suficientemente bueno": qué nivel de calidad necesita el MVP para que los primeros compradores queden satisfechos

3. CREACIÓN DEL PRODUCTO CON IA
   - Herramientas de IA para crear el contenido del producto: guiones, materiales escritos, plantillas, código
   - Flujo de trabajo de creación con IA: generar borrador, revisar y enriquecer con mi experiencia, pulir
   - Cómo usar IA para crear los materiales de apoyo: workbooks, checklists, ejemplos, casos de uso
   - Herramientas de producción: Notion, Gumroad, Teachable, Lemon Squeezy, herramientas de grabación

4. PRECIO Y MODELO DE NEGOCIO
   - Cómo fijar el precio del MVP: benchmarking de productos similares, valor percibido, disposición a pagar de la audiencia
   - Modelos de precio para un producto digital de freelancer: pago único, suscripción, acceso de por vida, tiers
   - Estrategia de precio de lanzamiento: precio especial para los primeros compradores vs. precio definitivo
   - Cómo usar IA para construir el argumento de valor que justifica el precio ante la audiencia

5. LANZAMIENTO Y VENTA DEL MVP
   - Plan de lanzamiento en 4 semanas: construcción de expectativa, apertura, urgencia y cierre
   - Cómo usar IA para redactar la secuencia de emails de lanzamiento, los posts de redes sociales y la página de ventas
   - Estrategia de distribución: lista de email propia, LinkedIn, comunidades del sector, alianzas con otros creadores
   - Cómo gestionar el soporte y el feedback de los primeros compradores para mejorar el producto

6. ITERACIÓN Y CRECIMIENTO DEL PRODUCTO
   - Cómo usar el feedback de los primeros compradores para mejorar el MVP antes de escalar la distribución
   - Plan de marketing a largo plazo: SEO, contenido, afiliados, partnerships
   - Cuándo invertir más tiempo en el producto vs. cuándo es momento de crear el siguiente
   - Cómo integrar el ingreso del producto digital en el modelo de negocio global del freelancer

Entrega al final un plan de lanzamiento del MVP del producto digital con: tipo de producto, fecha de lanzamiento, precio, canal de distribución principal y objetivo de ventas en los primeros 30 días.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseñar y lanzar un producto digital propio como freelancer usando IA para acelerar la creación y validar la demanda rápidamente.',
                'vote_score'        => 46,
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
