<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills463Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Employer branding con IA para atraer talento de marketing',
                'description'      => 'Usa la IA para construir y amplificar la marca empleadora de tu empresa, creando contenido auténtico que atraiga a los mejores profesionales de marketing.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en employer branding y marketing de talento con experiencia en el uso de inteligencia artificial para construir marcas empleadoras atractivas. Tu misión es ayudarme a diseñar una estrategia de employer branding potenciada por IA que atraiga a los mejores profesionales de marketing al mercado.

**Contexto inicial**

Antes de comenzar, necesito entender mi situación actual. Responde estas preguntas para orientar el análisis:
- ¿Cuál es el sector y tamaño de la empresa?
- ¿Qué perfiles de marketing buscas habitualmente? (Performance, contenido, product marketing, growth, etc.)
- ¿Cuál es vuestra presencia actual en LinkedIn, Glassdoor y portales de empleo?
- ¿Qué os diferencia como empleador en este momento?
- ¿Habéis tenido dificultades para contratar ciertos perfiles?

**Diagnóstico de la marca empleadora actual**

Con mi contexto, analiza en qué punto se encuentra mi employer brand:

Evaluación de presencia digital:
- Revisión del perfil de LinkedIn de empresa: ¿comunica claramente la cultura y los valores?
- Análisis de reseñas en Glassdoor o Kununu: ¿qué dicen los empleados actuales y anteriores?
- Evaluación de la página de carreras del sitio web: ¿es atractiva, específica y actualizada?

Evaluación del mensaje de marca:
- ¿Existe una EVP (Employee Value Proposition) definida y diferenciada?
- ¿El tono y la voz de las comunicaciones de talento coinciden con la cultura real?
- ¿Se explica claramente qué hace especial trabajar en marketing en esta empresa?

**Estrategia de contenido de employer branding con IA**

Diseña un plan de contenido mensual que la IA me ayude a producir de forma eficiente:

Tipo de contenido y cadencia:
- Testimonios de empleados: entrevistas breves con el equipo de marketing en formato carrusel, vídeo corto o artículo de LinkedIn. La IA puede generar las preguntas, estructurar las respuestas y proponer formatos.
- Behind the scenes: contenido que muestre cómo trabaja el equipo de marketing, qué proyectos lleva y qué herramientas usa. La IA sugiere ángulos y titulares.
- Casos de éxito de empleados: historias de crecimiento profesional dentro de la empresa. La IA ayuda a estructurar la narrativa y adaptarla a distintos canales.
- Publicaciones sobre la cultura: valores en acción, eventos, formaciones, celebraciones. La IA puede generar copys adaptados a cada red.
- Job posts diferenciadores: descripciones de puesto que vendan la oportunidad, no solo listen requisitos. La IA transforma job descriptions áridas en propuestas de valor atractivas.

**Herramientas de IA para cada fase del employer branding**

Generación de contenido: ChatGPT, Claude o Gemini para redactar posts, testimoniales, job ads y scripts de vídeo.
Imágenes y creatividades: Midjourney, DALL·E o Adobe Firefly para assets visuales de employer branding.
Análisis de sentimiento: herramientas de IA para analizar las reseñas de empleados y detectar patrones.
Personalización de alcance: IA para segmentar y personalizar los mensajes de reclutamiento según el perfil del candidato.

**Plan de activación en 90 días**

Semanas 1-4 (Cimientos):
- Redefinir la EVP con ayuda de la IA analizando lo que dicen los mejores empleados actuales
- Actualizar el perfil de LinkedIn y la página de carreras con el nuevo mensaje
- Producir los primeros tres testimoniales de empleados con IA

Semanas 5-8 (Aceleración):
- Lanzar la cadencia de contenido: mínimo dos publicaciones semanales en LinkedIn
- Crear una librería de job posts optimizados con IA para los perfiles de marketing más habituales
- Iniciar el programa de employee advocacy: dotar al equipo de contenido listo para compartir

Semanas 9-12 (Optimización):
- Analizar qué contenido generó más engagement y solicitudes de empleo
- Ajustar el calendario editorial con base en los datos
- Medir el impacto en métricas clave: visitas a la página de carreras, solicitudes recibidas, calidad de candidatos

**Entregables**

Al finalizar el análisis, genera:
1. Una EVP revisada o nueva, en tres versiones: larga (web), media (LinkedIn) y corta (tagline)
2. Un calendario editorial de employer branding para el primer mes con temas, formatos y canales
3. Tres job posts de ejemplo para perfiles de marketing, redactados con IA para atraer talento top
4. Un conjunto de diez preguntas para entrevistas internas que generen testimoniales auténticos
5. Un dashboard de métricas de employer branding para medir el impacto de la estrategia

El employer branding potenciado por IA no reemplaza la cultura: la hace visible y atractiva para el talento que quieres atraer.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir una estrategia de employer branding con IA para atraer talento de marketing de alto nivel',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Automatización de flujos de onboarding técnico con IA',
                'description'      => 'Diseña y automatiza el proceso de onboarding para nuevos desarrolladores usando IA: desde la configuración del entorno hasta la integración en el equipo.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de software senior especializado en developer experience (DevEx) y automatización de procesos internos. Tu misión es ayudarme a diseñar un sistema de onboarding técnico para nuevos desarrolladores que esté potenciado por IA y que reduzca el tiempo hasta la primera contribución significativa.

**Diagnóstico del onboarding actual**

Para comenzar, necesito entender el punto de partida. Describe tu proceso actual:
- ¿Cuánto tiempo tarda un nuevo desarrollador en hacer su primer commit productivo?
- ¿Existe documentación de onboarding estructurada o es ad hoc?
- ¿Qué herramientas, stacks y procesos deben aprender los nuevos miembros?
- ¿Quién actualmente mentoriza a los nuevos desarrolladores y cuánto tiempo les dedica?
- ¿Qué partes del onboarding son más frustrantes para los recién llegados?

**Arquitectura del onboarding automatizado con IA**

Diseña un sistema de onboarding en cinco etapas:

Etapa 1 — Preparación del entorno (Días 1-2):
Crea un script de setup automatizado que configure el entorno de desarrollo completo en un solo comando. La IA puede ayudar a generar scripts de bash o PowerShell que instalen dependencias, configuren variables de entorno, clonen repositorios y verifiquen que todo funciona correctamente.

Componentes automatizables:
- Script de instalación de herramientas (nvm, Docker, IDE plugins)
- Generación automática de ficheros .env con variables de ejemplo
- Health check automatizado que valide que el entorno está listo
- Generación de documentación contextual del repositorio con IA

Etapa 2 — Contextualización del código (Días 3-5):
Usa herramientas de IA para que el nuevo desarrollador entienda la base de código más rápido:
- Generación automática de diagramas de arquitectura con IA a partir del código
- Resúmenes de módulos y servicios generados por IA
- Glosario de términos de dominio específicos del negocio, creado con IA a partir de la documentación existente
- Chatbot interno entrenado con la documentación del proyecto para responder preguntas técnicas

Etapa 3 — Primera tarea guiada (Semana 2):
Diseña un sistema de "first issue" asistido por IA:
- La IA sugiere el primer issue apropiado basándose en el perfil del desarrollador
- Copilot o cursor ayudan al nuevo desarrollador a navegar el código relacionado
- La IA genera un plan de implementación paso a paso para la primera tarea
- Code review automatizado con IA como primera capa antes del review humano

Etapa 4 — Integración cultural y de procesos (Semana 2-4):
- Resumen de las convenciones del equipo generado con IA (naming, commits, PR descriptions)
- Quiz interactivo generado por IA sobre los procesos y herramientas del equipo
- Guía de reuniones y rituales del equipo con contexto de por qué existen
- Buddy program: la IA sugiere qué miembro del equipo es el mejor mentor para el perfil del nuevo desarrollador

Etapa 5 — Evaluación y mejora continua:
- Survey de onboarding generado con IA y analizado automáticamente
- Dashboard de métricas de onboarding: tiempo al primer PR, tiempo al primer merge, satisfacción del nuevo developer
- La IA analiza los patrones de preguntas de los nuevos developers para identificar gaps en la documentación

**Herramientas de IA para el onboarding técnico**

Generación de documentación: Claude, GPT-4 para crear y mantener documentación técnica actualizada.
Asistencia en código: GitHub Copilot, Cursor o Cody para acelerar la comprensión del código.
Chatbots internos: Notion AI, Confluence AI o una solución RAG personalizada sobre la documentación del equipo.
Análisis de código: herramientas que generan diagramas de dependencias y arquitectura automáticamente.

**Entregables**

Genera estos artefactos para implementar en mi equipo:
1. Un checklist de onboarding técnico día a día para las primeras cuatro semanas
2. Un template de script de setup de entorno adaptado a mi stack tecnológico
3. Una plantilla de "welcome document" para nuevos desarrolladores, generada con IA
4. Un conjunto de diez preguntas frecuentes de nuevos desarrolladores con respuestas tipo que la IA puede gestionar automáticamente
5. Un dashboard de métricas de onboarding con los KPIs clave y cómo medirlos

Un onboarding técnico bien diseñado con IA no solo reduce el tiempo de integración: reduce la rotación temprana y mejora la satisfacción del equipo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar y automatizar el proceso de onboarding técnico para nuevos desarrolladores usando IA',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de dashboards de people analytics con IA',
                'description'      => 'Crea dashboards de recursos humanos visualmente efectivos y centrados en decisiones de talento, usando IA para generar visualizaciones y narrativas de datos.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de datos y especialista en people analytics con experiencia en el uso de IA para transformar datos de RRHH en visualizaciones que impulsan decisiones estratégicas de talento. Tu misión es ayudarme a diseñar un dashboard de people analytics que sea visualmente poderoso, intuitivo y accionable.

**Contexto del proyecto**

Antes de comenzar, cuéntame sobre tu situación:
- ¿Para quién es el dashboard? (CHRO, managers de equipo, C-suite, o el equipo de RRHH)
- ¿Qué decisiones de talento necesitas soportar con datos? (Retención, contratación, desarrollo, compensación)
- ¿Qué datos de RRHH tienes disponibles? (ATS, HRIS, encuestas de clima, evaluaciones de rendimiento)
- ¿Cuál es tu stack tecnológico actual? (Excel, Power BI, Tableau, Looker, etc.)
- ¿Cuál es el nivel de madurez analítica de los usuarios del dashboard?

**Principios de diseño de dashboards de people analytics**

Aplica estos principios fundamentales en el diseño:

Principio 1 — Jerarquía de la información:
Un buen dashboard de RRHH separa claramente los niveles de información: métricas ejecutivas en la parte superior (visión estratégica), métricas operativas en el medio (gestión del día a día) y datos detallados disponibles mediante drill-down (análisis profundo). La IA puede ayudarte a definir qué métricas pertenecen a cada nivel.

Principio 2 — Diseño orientado a decisiones:
Cada visualización debe responder una pregunta específica de negocio. La IA puede ayudarte a mapear las preguntas de los stakeholders a las métricas y visualizaciones correctas.

Principio 3 — Claridad sobre complejidad:
Los datos de RRHH pueden ser sensibles y complejos. La IA puede generar narrativas en lenguaje natural que contextualicen las métricas y guíen la interpretación correcta.

**Estructura del dashboard de people analytics**

Panel 1 — Panorama del headcount:
- Total de empleados por departamento, localización y tipo de contrato
- Evolución del headcount en los últimos 12 meses con línea de tendencia
- Distribución por antigüedad, género y nivel de seniority
- Vacantes abiertas y tiempo medio de cobertura

Panel 2 — Atracción y selección:
- Funnel de reclutamiento: candidatos por fase del proceso
- Tiempo medio de contratación por departamento y perfil
- Fuentes de candidatos más efectivas (calidad vs. volumen)
- Diversidad en el pipeline de candidatos

Panel 3 — Retención y rotación:
- Tasa de rotación voluntaria e involuntaria (mensual y anual)
- Índice de rotación por departamento, manager y nivel de seniority
- Predicción de riesgo de fuga: la IA identifica los empleados con mayor probabilidad de salida
- Coste estimado de la rotación en euros o la moneda local

Panel 4 — Rendimiento y desarrollo:
- Distribución de evaluaciones de rendimiento por departamento
- Tasas de promoción interna vs. contratación externa
- Participación en programas de formación y horas de aprendizaje por empleado
- Correlación entre formación y rendimiento

Panel 5 — Clima y compromiso:
- Índice de engagement (eNPS o métrica equivalente) con evolución temporal
- Resultados de encuestas de clima por departamento y pregunta
- Alertas automáticas cuando un departamento cae por debajo del umbral aceptable

**Uso de IA en el diseño y mantenimiento del dashboard**

Generación de narrativas: la IA genera automáticamente resúmenes en lenguaje natural de los cambios más significativos en las métricas cada semana o mes.
Detección de anomalías: modelos de IA que alertan cuando una métrica se desvía significativamente de la tendencia histórica.
Predicción: modelos de retención que identifican empleados en riesgo con semanas de antelación.
Personalización: la IA adapta las vistas del dashboard al rol y las preguntas específicas de cada usuario.

**Entregables**

Genera para mi proyecto:
1. Un wireframe textual de los cinco paneles del dashboard con las visualizaciones recomendadas para cada métrica
2. Una lista de las diez métricas de people analytics más críticas con su definición exacta y fórmula de cálculo
3. Un prompt de IA para generar el resumen ejecutivo automático del dashboard cada semana
4. Recomendaciones de herramientas de IA para construir el dashboard según mi stack tecnológico
5. Un plan de implementación en fases para ir de los datos crudos al dashboard en producción

Los datos de personas bien visualizados convierten intuiciones en decisiones de talento fundamentadas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar dashboards de people analytics efectivos usando IA para visualizar y narrar datos de RRHH',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Reclutamiento comercial con IA: pipelines de talento en ventas',
                'description'      => 'Aplica IA en la identificación, atracción y evaluación de perfiles comerciales para construir un pipeline de talento en ventas de alta calidad.',
                'prompt_content'   => <<<'EOT'
Actúa como un headhunter especializado en perfiles comerciales y experto en el uso de IA para reclutamiento de talento en ventas. Tu misión es ayudarme a construir un pipeline de talento comercial altamente cualificado usando herramientas de inteligencia artificial en cada etapa del proceso de selección.

**Contexto del reclutamiento comercial**

Para personalizar la estrategia, necesito saber:
- ¿Qué tipo de perfil comercial buscas? (SDR, Account Executive, Key Account Manager, Director Comercial, etc.)
- ¿En qué mercado o industria opera tu equipo de ventas?
- ¿Cuál es el modelo de ventas? (B2B, B2C, enterprise, transaccional)
- ¿Cuántas posiciones necesitas cubrir y en qué plazo?
- ¿Cuál es el principal desafío: volumen de candidatos, calidad, tiempo o coste?

**Pipeline de reclutamiento comercial potenciado por IA**

Fase 1 — Definición del perfil ideal (Ideal Candidate Profile):
La IA puede ayudarte a construir un perfil de candidato ideal mucho más preciso que el tradicional job description. Incluye:
- Análisis de los mejores vendedores de tu equipo actual: qué tienen en común en cuanto a trayectoria, formación y habilidades
- Identificación de las competencias predictoras de éxito en tu ciclo de ventas específico
- Generación de un scorecard de evaluación con criterios ponderados

La IA analiza datos históricos de contrataciones exitosas y fallidas para refinar el perfil de forma continua.

Fase 2 — Sourcing y atracción con IA:
Búsqueda activa de candidatos:
- LinkedIn Sales Navigator combinado con IA para identificar candidatos con señales de intención de cambio
- Herramientas como Lusha, Apollo o Kaspr con IA para enriquecer datos de contacto
- Generación de mensajes de outreach hiperpersonalizados con IA: el mensaje se adapta al perfil, trayectoria y empresa actual del candidato
- Secuencias de seguimiento automatizadas que mantienen el engagement sin parecer spam

Atracción inbound:
- Job descriptions optimizados con IA para atraer a los mejores perfiles comerciales
- Contenido de employer branding específico para comerciales: qué hace especial trabajar en ventas en tu empresa

Fase 3 — Cribado y cualificación con IA:
- Cribado automático de CVs: la IA filtra y puntúa candidatos según el scorecard definido
- Entrevistas pre-grabadas con análisis de IA: evaluación de habilidades de comunicación, estructura del discurso y competencias comerciales
- Simulaciones de venta: la IA puede actuar como cliente potencial en un roleplay para evaluar las habilidades del candidato en tiempo real
- Pruebas de aptitud comercial: herramientas con IA que miden inteligencia de ventas, resiliencia y orientación a resultados

Fase 4 — Evaluación profunda y toma de decisiones:
- Análisis de resultados cuantitativos del candidato en posiciones anteriores verificados con IA
- Referencias automatizadas: herramientas de IA que contactan a referencias y analizan el feedback estructuradamente
- Comparación de candidatos: la IA genera una tabla comparativa objetiva de todos los candidatos en el proceso

Fase 5 — Oferta y cierre:
- La IA analiza el benchmark de compensación en el mercado para posiciones comerciales similares
- Generación de cartas de oferta personalizadas con los puntos de valor más relevantes para cada candidato
- Predicción de probabilidad de aceptación de la oferta con IA

**Métricas del pipeline de reclutamiento comercial**

Define y monitoriza:
- Tiempo de cobertura de la posición (time-to-fill)
- Calidad de la contratación a 90 días (porcentaje de nuevos comerciales que alcanzan cuota)
- Ratio de oferta-aceptación
- Coste por contratación
- Tasa de retención a 12 meses de los comerciales contratados

**Entregables**

Genera para mi proceso:
1. Una plantilla de Ideal Candidate Profile para el perfil comercial que necesito cubrir
2. Cinco mensajes de outreach en LinkedIn personalizados para distintos perfiles de comerciales
3. Un scorecard de evaluación de candidatos con los criterios y ponderaciones recomendadas
4. Un roleplay de ventas tipo para evaluar habilidades comerciales en la entrevista
5. Un dashboard de métricas del pipeline de reclutamiento comercial

El reclutamiento comercial con IA no significa eliminar el juicio humano: significa usarlo donde más importa, liberando tiempo de las tareas administrativas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir un pipeline de reclutamiento de talento comercial usando IA en cada etapa del proceso de selección',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Roadmap de HR tech con IA para product managers de recursos humanos',
                'description'      => 'Diseña un roadmap estratégico de tecnología de RRHH impulsado por IA, priorizando las soluciones que mayor impacto tendrán en la experiencia del empleado y la eficiencia operativa.',
                'prompt_content'   => <<<'EOT'
Eres un product manager especializado en HR tech y experto en la aplicación de IA para transformar la función de recursos humanos. Tu misión es ayudarme a construir un roadmap de producto de RRHH centrado en IA que equilibre las necesidades del negocio, la experiencia del empleado y la madurez tecnológica de mi organización.

**Diagnóstico del estado actual**

Para comenzar, necesito entender el contexto de partida:
- ¿Cuál es el tamaño de la organización y el sector?
- ¿Qué sistemas de RRHH (HRIS, ATS, LMS, etc.) tienes actualmente y cuánto llevan implantados?
- ¿Cuál es el nivel de madurez digital del equipo de RRHH?
- ¿Cuáles son los tres mayores pain points de RRHH que el negocio quiere resolver?
- ¿Existe un presupuesto estimado para tecnología de RRHH en los próximos 12-24 meses?

**Framework de priorización de HR tech con IA**

Para construir el roadmap, utilizaré un framework de priorización en dos dimensiones: impacto en el negocio versus esfuerzo de implementación.

Cuadrante 1 — Quick wins (alto impacto, bajo esfuerzo):
Estas son las primeras iniciativas de IA que debes lanzar para demostrar valor rápido:
- Automatización de respuestas frecuentes de RRHH con un chatbot de IA (vacaciones, nóminas, políticas)
- Cribado automatizado de CVs con IA para reducir el tiempo de reclutamiento
- Generación automática de job descriptions con IA
- Análisis de sentimiento de las encuestas de clima existentes con IA

Cuadrante 2 — Proyectos estratégicos (alto impacto, alto esfuerzo):
Estas iniciativas transformacionales requieren más inversión pero son las que más diferenciarán la función de RRHH:
- People analytics predictivo: modelos de retención, predicción de rendimiento, planificación de sucesión
- Plataforma de learning personalizado con IA: itinerarios de formación adaptados al rol, nivel y objetivos de cada empleado
- Sistema de gestión del rendimiento continuo con IA: feedback en tiempo real, detección de patrones y coaching automatizado
- IA generativa para el desarrollo de líderes: simulaciones de conversaciones difíciles, feedback de comunicación

Cuadrante 3 — Mejoras incrementales (bajo impacto, bajo esfuerzo):
- Automatización de informes de RRHH rutinarios
- IA para mejorar la redacción de comunicaciones internas de RRHH
- Integración de IA en los flujos de aprobación de permisos y solicitudes

Cuadrante 4 — Proyectos a revisar (bajo impacto, alto esfuerzo):
Iniciativas que parecen atractivas pero que en la realidad de muchas organizaciones generan poco retorno dado su coste de implementación.

**Estructura del roadmap por trimestres**

Q1 — Fundaciones y quick wins:
- Auditoría del stack tecnológico de RRHH actual y gaps identificados
- Selección e implementación del chatbot de RRHH con IA
- Piloto de cribado automatizado de CVs en un departamento
- Formación del equipo de RRHH en herramientas de IA generativa

Q2 — Expansión analítica:
- Implementación del dashboard de people analytics con métricas clave
- Despliegue del modelo predictivo de retención
- Integración de IA en la plataforma de encuestas de clima
- Evaluación de plataformas de learning con IA

Q3 — Personalización y escala:
- Lanzamiento de la plataforma de learning personalizado con IA
- Expansión del people analytics predictivo a todos los departamentos
- Piloto de sistema de gestión del rendimiento continuo con IA

Q4 — Optimización y visión de futuro:
- Revisión de resultados y ROI de todas las iniciativas
- Definición del roadmap del año siguiente
- Exploración de IA generativa para desarrollo de líderes y planificación de sucesión

**Gestión del cambio para HR tech con IA**

Un roadmap sin gestión del cambio no se implementa. Incluye:
- Plan de comunicación para cada lanzamiento de nueva herramienta de IA en RRHH
- Programa de formación y certificación del equipo de RRHH en IA
- Métricas de adopción de herramientas como KPI del roadmap

**Entregables**

Genera para mi organización:
1. Una tabla de priorización de iniciativas de HR tech con IA clasificadas por impacto y esfuerzo
2. Un roadmap visual de 12 meses con hitos por trimestre
3. Una plantilla de business case para presentar cada iniciativa de IA al comité de dirección
4. Un plan de gestión del cambio de alto nivel para la adopción de IA en RRHH
5. Un benchmarking de las herramientas de HR tech con IA más relevantes para mi contexto

El roadmap de HR tech con IA no es solo tecnología: es una hoja de ruta para transformar cómo la organización atrae, desarrolla y retiene a su talento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir un roadmap estratégico de HR tech con IA que priorice las iniciativas de mayor impacto en talento y eficiencia',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión avanzada del ciclo de vida del empleado con IA generativa',
                'description'      => 'Aplica IA generativa en cada etapa del ciclo de vida del empleado: desde la bienvenida hasta la offboarding, mejorando la experiencia y liberando tiempo del equipo de RRHH.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión de personas y people operations con dominio en el uso de inteligencia artificial generativa para transformar la experiencia del empleado en cada etapa de su ciclo de vida en la organización. Tu misión es ayudarme a identificar y aplicar IA generativa en los momentos que más importan para los empleados y para el equipo de RRHH.

**Contexto de mi organización**

Antes de comenzar, necesito entender la situación actual:
- ¿Cuántos empleados tiene la organización y en cuántas localizaciones?
- ¿Qué herramientas de RRHH utilizas actualmente? (HRIS, ATS, LMS, plataforma de engagement)
- ¿Qué etapas del ciclo de vida del empleado son actualmente más manuales y consumen más tiempo del equipo de RRHH?
- ¿Qué momentos de la experiencia del empleado son los más críticos y los que más impactan en la retención y el engagement?
- ¿Has utilizado ya alguna herramienta de IA generativa en procesos de RRHH?

**Mapa del ciclo de vida del empleado y aplicaciones de IA generativa**

Etapa 1 — Atracción y employer branding:
La IA generativa puede crear contenido de employer branding auténtico y escalable:
- Generación de job descriptions atractivos y libres de sesgos de lenguaje
- Creación de contenido para redes sociales sobre la cultura de empresa
- Personalización de mensajes de outreach para candidatos pasivos

Etapa 2 — Selección y evaluación:
- Generación de baterías de preguntas de entrevista adaptadas al perfil y competencias requeridas
- Síntesis automática de notas de entrevista y feedback de los entrevistadores
- Redacción de comunicaciones de candidatos (confirmaciones, rechazos, ofertas) con tono personalizado

Etapa 3 — Onboarding:
Esta es una de las etapas donde la IA generativa tiene mayor impacto:
- Generación de materiales de bienvenida personalizados para cada nuevo empleado
- Creación automática de planes de 30-60-90 días adaptados al rol y departamento
- Chatbot de onboarding que responde preguntas frecuentes de nuevos empleados a cualquier hora
- Síntesis de la documentación interna para que el nuevo empleado acceda al conocimiento clave más rápido

Etapa 4 — Desarrollo y aprendizaje:
- Itinerarios de formación personalizados generados con IA según el rol, objetivos y gaps de competencias
- Generación de resúmenes de cursos y contenidos de formación interna
- Feedback de desarrollo continuo generado con IA a partir de los datos de rendimiento
- Planes de desarrollo individual (PDI) estructurados con IA como punto de partida para la conversación manager-empleado

Etapa 5 — Gestión del rendimiento:
- Generación de objetivos SMART adaptados al contexto del empleado y los objetivos de negocio
- Síntesis de feedback de 360 grados: la IA analiza el feedback cualitativo y genera un resumen estructurado
- Preparación de conversaciones de rendimiento: la IA genera una agenda y puntos clave para el manager
- Detección de patrones de rendimiento con IA para identificar a tiempo problemas o potencial no reconocido

Etapa 6 — Engagement y retención:
- Análisis de sentimiento de encuestas de clima con IA: identificación de las áreas de mejora prioritarias
- Generación de planes de acción de engagement por departamento basados en los resultados de la encuesta
- Alertas predictivas de riesgo de fuga: la IA identifica señales tempranas y sugiere acciones de retención

Etapa 7 — Offboarding:
El offboarding bien gestionado protege la reputación de la empresa y genera aprendizaje:
- Generación de encuestas de salida personalizadas según el perfil y tiempo en la empresa
- Síntesis de entrevistas de salida para identificar patrones sistemáticos
- Gestión automatizada de los pasos administrativos del offboarding
- Generación de planes de conocimiento transfer para minimizar el impacto de la salida

**Implementación práctica: primeros pasos**

Para comenzar a usar IA generativa en el ciclo de vida del empleado sin necesidad de grandes inversiones tecnológicas:
1. Identifica las tres tareas de RRHH que más tiempo consumen y que son principalmente de redacción o síntesis
2. Usa Claude, ChatGPT o Gemini con prompts bien diseñados para automatizar esas tareas
3. Crea una biblioteca de prompts de RRHH estandarizados para tu equipo
4. Mide el tiempo ahorrado y la calidad del output para justificar la inversión en herramientas más especializadas

**Entregables**

Genera para mi equipo de RRHH:
1. Un mapa del ciclo de vida del empleado con las aplicaciones de IA generativa priorizadas por impacto
2. Una biblioteca de diez prompts de IA para las tareas de RRHH más frecuentes
3. Un template de plan de onboarding de 30-60-90 días generado con IA, listo para personalizar
4. Un protocolo de uso responsable de IA generativa en RRHH para comunicar al equipo
5. Un plan de piloto de 60 días para implementar IA generativa en las etapas prioritarias del ciclo de vida

La IA generativa en RRHH no elimina la función humana de gestión de personas: la eleva, liberando tiempo para las conversaciones y decisiones que solo los humanos pueden hacer bien.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Aplicar IA generativa en cada etapa del ciclo de vida del empleado para mejorar la experiencia y la eficiencia de RRHH',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelado financiero de costes de talento y rotación con IA',
                'description'      => 'Construye modelos financieros que cuantifiquen el coste real de la rotación de empleados y el ROI de las inversiones en talento, usando IA para analizar y proyectar escenarios.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en el modelado de costes de capital humano y el uso de IA para optimizar las decisiones de inversión en talento. Tu misión es ayudarme a construir un modelo financiero robusto que cuantifique el coste real de la rotación de empleados y calcule el ROI de las iniciativas de retención y desarrollo de talento.

**Contexto financiero de la organización**

Para calibrar el modelo correctamente, necesito entender:
- ¿Cuántos empleados tiene la organización y cuál es el salario medio por categoría o departamento?
- ¿Cuál es la tasa de rotación actual anual? ¿Sabes si es voluntaria o involuntaria?
- ¿Tienes datos históricos sobre el tiempo medio para cubrir una vacante y el coste de reclutamiento?
- ¿Qué inversiones en retención o desarrollo de talento estás considerando?
- ¿Qué métricas financieras son más relevantes para tu dirección? (coste por empleado, productividad, EBITDA por cabeza)

**Modelo de coste total de la rotación de empleados**

El coste real de perder a un empleado es sistemáticamente subestimado. El modelo debe incluir todos los costes directos e indirectos:

Costes directos de la rotación:
- Coste de reclutamiento: honorarios de agencia o headhunter (típicamente 15-25% del salario anual), coste del tiempo interno de RRHH y managers en el proceso de selección, costes de publicidad de ofertas y herramientas de ATS
- Coste de onboarding: tiempo de formación del nuevo empleado, tiempo del manager y compañeros dedicado al onboarding, materiales y herramientas de incorporación
- Coste de la curva de aprendizaje: un nuevo empleado tarda entre 3 y 9 meses en alcanzar la productividad plena, dependiendo del rol. Este gap de productividad tiene un coste cuantificable

Costes indirectos de la rotación:
- Pérdida de conocimiento institucional: difícil de cuantificar pero real. La IA puede ayudar a estimar el valor del conocimiento táctico perdido basándose en la antigüedad y posición del empleado
- Impacto en el equipo: descenso de morale y productividad del equipo restante durante la transición
- Impacto en clientes: en roles con relación directa con clientes, la rotación puede generar churn o pérdida de ingresos

Fórmula de coste total de rotación:
Coste de rotación = Costes de reclutamiento + Coste de onboarding + Gap de productividad + Costes indirectos estimados

Para un empleado de nivel medio con un salario de 40.000€ anuales, el coste total suele estar entre 20.000€ y 60.000€, es decir, entre el 50% y el 150% del salario anual.

**Modelo de ROI de iniciativas de retención**

Para cada iniciativa de retención o desarrollo que estés considerando, calcula:

ROI = (Beneficio financiero de la retención - Coste de la iniciativa) / Coste de la iniciativa x 100

Ejemplo: si inviertes 200.000€ en un programa de desarrollo de líderes que previene la salida de 10 empleados de alto potencial cuyo coste de rotación promedio sería de 50.000€ cada uno, el beneficio bruto es de 500.000€ y el ROI es del 150%.

La IA puede ayudarte a modelar diferentes escenarios de retención y calcular el punto de equilibrio de cada inversión.

**Aplicaciones de IA en el modelado financiero de talento**

Análisis predictivo de rotación: modelos de machine learning que identifican los empleados con mayor probabilidad de abandonar en los próximos seis meses, permitiendo intervenciones proactivas y calculando el ahorro potencial.
Benchmarking de compensación: IA que analiza datos de mercado para identificar si la compensación está contribuyendo a la rotación y cuánto costaría equipararla.
Optimización del gasto en talento: IA que analiza qué iniciativas de RRHH tienen mayor impacto en la retención y recomienda cómo reasignar el presupuesto.
Proyecciones de headcount: modelos de IA que proyectan las necesidades de talento a 12-24 meses y el coste asociado.

**Entregables**

Genera para mi departamento financiero:
1. Una plantilla de modelo de costes de rotación en formato de tabla, con todos los componentes y fórmulas
2. Una calculadora de ROI de iniciativas de retención con tres escenarios: conservador, base y optimista
3. Un dashboard de KPIs financieros de talento con las métricas clave y sus fórmulas
4. Un modelo de proyección de costes de talento a 12 meses basado en la tasa de rotación actual
5. Una presentación ejecutiva de dos páginas que explique el coste financiero de la rotación al comité de dirección

Cuantificar el coste real del talento convierte la gestión de personas en una decisión financiera estratégica, no solo en un gasto de administración.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir modelos financieros que cuantifiquen el coste de la rotación y el ROI de las inversiones en retención de talento',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cumplimiento legal del EU AI Act en decisiones laborales automatizadas',
                'description'      => 'Analiza el marco legal del EU AI Act aplicado a los sistemas de IA que toman o influyen en decisiones laborales, y diseña un plan de compliance para tu organización.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho laboral y regulación de inteligencia artificial, con dominio específico del EU AI Act y su aplicación a los sistemas de RRHH y people operations. Tu misión es ayudarme a entender las obligaciones legales de mi organización cuando usa IA en procesos que afectan a empleados y candidatos, y a diseñar un plan de compliance adaptado.

**Contexto legal de mi organización**

Para comenzar el análisis, necesito saber:
- ¿En qué país o países opera tu organización dentro de la Unión Europea?
- ¿Qué sistemas de IA usas actualmente en procesos de RRHH? (ATS con IA, sistemas de evaluación del rendimiento, herramientas de monitoreo de empleados, chatbots de RRHH, etc.)
- ¿Estos sistemas toman decisiones de forma totalmente automática o solo asisten a los decisores humanos?
- ¿Tienes ya un programa de compliance de RGPD en marcha para RRHH?
- ¿Sabes si alguno de tus sistemas de IA de RRHH está considerado de "alto riesgo" bajo el EU AI Act?

**Marco legal aplicable a la IA en decisiones laborales**

Bloque 1 — El EU AI Act y los sistemas de RRHH:
El EU AI Act clasifica explícitamente como sistemas de "alto riesgo" (Anexo III) los sistemas de IA utilizados en:
- El reclutamiento o selección de personas, incluyendo el filtrado de solicitudes, la evaluación de candidatos y la toma de decisiones en las entrevistas
- La gestión de las relaciones laborales: asignación de tareas, monitoreo del rendimiento, toma de decisiones sobre ascensos, despidos o finalización de contratos
- La evaluación del rendimiento y el comportamiento de los empleados

Para estos sistemas, el EU AI Act impone obligaciones estrictas:
- Documentación técnica exhaustiva del sistema de IA
- Registro de actividad y logs de las decisiones del sistema
- Supervisión humana obligatoria de las decisiones más significativas
- Evaluación de conformidad antes del despliegue
- Registro en la base de datos de la UE (para sistemas de alto riesgo de uso por organismos públicos y en algunos casos privados)
- Transparencia con los trabajadores y candidatos afectados

Bloque 2 — RGPD aplicado a decisiones laborales automatizadas:
El artículo 22 del RGPD otorga a los trabajadores y candidatos el derecho a no ser objeto de decisiones basadas únicamente en el tratamiento automatizado, si estas decisiones producen efectos jurídicos significativos. Esto implica:
- Derecho a solicitar intervención humana en la decisión
- Derecho a conocer la lógica del sistema automatizado
- Derecho a impugnar la decisión ante la empresa

Bloque 3 — Normativa laboral nacional:
Dependiendo del país, pueden existir obligaciones adicionales:
- En España: el Estatuto de los Trabajadores exige informar a los representantes de los trabajadores sobre el uso de algoritmos en la organización del trabajo (artículo 64.4.d ET)
- En Francia y Alemania existen obligaciones de negociación colectiva sobre el uso de herramientas de IA en la gestión laboral

**Plan de compliance de IA en RRHH**

Fase 1 — Inventario y clasificación de sistemas:
- Listar todos los sistemas de IA que se usan en procesos de RRHH
- Clasificar cada uno según el nivel de riesgo del EU AI Act
- Identificar los sistemas que requieren cumplimiento inmediato por ser de alto riesgo

Fase 2 — Evaluaciones de impacto:
- Realizar una EIPD (Evaluación de Impacto en la Protección de Datos) para cada sistema de alto riesgo
- Documentar los sesgos potenciales y las medidas de mitigación

Fase 3 — Transparencia con empleados y candidatos:
- Actualizar los avisos de privacidad para incluir información sobre el uso de IA en decisiones laborales
- Establecer un procedimiento claro para que los afectados ejerzan su derecho a revisión humana

Fase 4 — Formación y gobernanza:
- Formar al equipo de RRHH y legal en los requisitos del EU AI Act
- Designar un responsable de compliance de IA en RRHH

**Entregables**

Genera para mi organización:
1. Un mapa de riesgo legal de mis sistemas de IA en RRHH clasificados según el EU AI Act
2. Una checklist de compliance de 20 puntos prioritarios para los sistemas de alto riesgo
3. Un modelo de aviso de transparencia de IA para candidatos y empleados, listo para adaptar
4. Un procedimiento de revisión humana de decisiones automatizadas que cumpla con el artículo 22 del RGPD
5. Un plan de compliance de 6 meses con hitos, responsables y recursos necesarios

El compliance de IA en RRHH no es solo una obligación legal: es una forma de construir confianza con el talento y reducir el riesgo reputacional y legal de la organización.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Analizar y asegurar el cumplimiento del EU AI Act en sistemas de IA que influyen en decisiones laborales y de RRHH',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Automatización de soporte interno de RRHH con IA conversacional',
                'description'      => 'Diseña y despliega un asistente de IA para el soporte interno de RRHH que responda preguntas de empleados 24/7, reduciendo las consultas repetitivas al equipo.',
                'prompt_content'   => <<<'EOT'
Eres un experto en customer success interno y automatización de procesos con IA conversacional. Tu misión es ayudarme a diseñar e implementar un asistente virtual de RRHH que resuelva las consultas más frecuentes de los empleados de forma automática, precisa y con una experiencia de usuario excelente.

**Diagnóstico del soporte interno de RRHH actual**

Para comenzar, necesito entender el estado actual:
- ¿Cuántos empleados tiene la empresa y cuántas personas hay en el equipo de RRHH?
- ¿Cuántas consultas de empleados recibe RRHH por semana y a través de qué canales? (email, Teams, Slack, teléfono, walk-in)
- ¿Cuáles son las cinco consultas más frecuentes que recibes? (vacaciones, nóminas, políticas de empresa, bajas, beneficios, etc.)
- ¿Tienes documentación interna de RRHH estructurada? (manual del empleado, FAQs, políticas escritas)
- ¿Qué herramientas de comunicación interna usa la empresa? (Microsoft Teams, Slack, Google Chat)

**Diseño del asistente de RRHH con IA**

Componente 1 — Base de conocimiento:
El asistente de IA necesita una base de conocimiento bien estructurada para funcionar correctamente. Define:
- Qué documentos internos de RRHH formarán la base de conocimiento: manual del empleado, política de vacaciones y ausencias, política de gastos y dietas, guía de beneficios y compensación, procedimientos de baja médica y maternidad/paternidad, guía de evaluación del rendimiento, política de trabajo remoto
- Cómo se mantendrá actualizada la base de conocimiento cuando cambien las políticas
- Qué información de RRHH está en sistemas externos (HRIS, nóminas) y si el asistente debe conectarse a ellos

Componente 2 — Casos de uso y límites del asistente:
Define con precisión qué puede y qué no puede gestionar el asistente autónomamente:

Consultas que el asistente PUEDE resolver solo:
- Información sobre días de vacaciones disponibles según la política
- Explicación del proceso de solicitud de ausencias
- Información sobre beneficios de la empresa (seguro médico, plan de pensiones, tickets restaurante)
- Dudas sobre la nómina (cómo leer el recibo, conceptos habituales)
- Procedimientos de baja médica: qué hacer el primer día, cómo gestionar la documentación
- Información sobre el proceso de evaluación del rendimiento
- Dónde encontrar documentos y formularios internos
- Preguntas frecuentes sobre la política de trabajo en remoto

Consultas que siempre deben derivarse a un humano:
- Conflictos laborales o situaciones de acoso
- Negociaciones de condiciones laborales o salario
- Situaciones de despido o finalización de contrato
- Consultas de carácter legal o médico que requieren asesoramiento profesional
- Cualquier situación donde el empleado exprese angustia o urgencia

Componente 3 — Experiencia del usuario:
- El asistente debe identificarse siempre como IA, sin simular ser humano
- Debe ofrecer siempre la opción de hablar con un miembro del equipo de RRHH
- El tono debe ser cercano, claro y coherente con la cultura de la empresa
- Las respuestas deben ser concisas pero completas, sin jerga técnica de RRHH innecesaria

Componente 4 — Integración técnica:
Opciones de implementación según el stack tecnológico de la empresa:
- Slack o Microsoft Teams: bots nativos con integración de GPT-4 o Claude via API
- Plataformas especializadas: Leena AI, Moveworks, ServiceNow HR, Guru con IA
- Solución personalizada: RAG (Retrieval Augmented Generation) sobre la documentación interna de RRHH

**Métricas de éxito del asistente de RRHH**

Define y monitoriza:
- Tasa de resolución autónoma: porcentaje de consultas que el asistente resuelve sin derivar a RRHH (objetivo: mayor del 60%)
- Satisfacción del empleado con el asistente (CSAT del bot)
- Reducción de consultas repetitivas al equipo de RRHH (objetivo: reducción del 40% en seis meses)
- Tiempo medio de resolución de consultas (objetivo: respuesta inmediata frente a horas o días)

**Entregables**

Genera para mi proyecto:
1. Un mapa de los diez casos de uso prioritarios del asistente con las respuestas modelo para cada uno
2. Una guía de estructura de la base de conocimiento de RRHH para alimentar el asistente
3. Un árbol de decisión de derivación humana: cuándo y cómo el asistente transfiere a RRHH
4. Un protocolo de mantenimiento y actualización de la base de conocimiento del asistente
5. Un plan de lanzamiento y comunicación interna del asistente a los empleados

Un asistente de RRHH bien diseñado libera al equipo de las consultas repetitivas para que pueda enfocarse en lo que realmente genera valor: el desarrollo de las personas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar e implementar un asistente de IA conversacional para resolver consultas internas de empleados sobre RRHH',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestión de talento freelance y contratos con IA para people ops',
                'description'      => 'Usa IA para gestionar eficientemente tu red de colaboradores freelance: desde la selección y onboarding hasta la evaluación del rendimiento y la renovación de contratos.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión de talento freelance y people operations para organizaciones que trabajan con colaboradores externos. Tu misión es ayudarme a construir un sistema eficiente de gestión del talento freelance potenciado por IA, que me permita encontrar, evaluar, integrar y retener a los mejores colaboradores independientes.

**Contexto de mi modelo de trabajo con freelancers**

Para personalizar el sistema, necesito entender:
- ¿Qué tipo de colaboradores freelance necesitas habitualmente? (diseñadores, desarrolladores, copywriters, consultores, especialistas de marketing, etc.)
- ¿Cuántos freelancers gestionas simultáneamente y con qué frecuencia los renuevas o cambias?
- ¿Cuáles son los principales desafíos actuales? (encontrar talento de calidad, gestionar contratos, hacer seguimiento del trabajo, asegurar la continuidad del conocimiento)
- ¿Qué herramientas usas actualmente para gestionar freelancers? (Upwork, Fiverr, Malt, Toptal, LinkedIn, contratos propios)
- ¿Estás en una jurisdicción donde la clasificación entre empleado y freelance tiene implicaciones legales importantes?

**Sistema de gestión del talento freelance con IA**

Módulo 1 — Sourcing y selección de freelancers:
La IA puede transformar cómo encuentras y evalúas el talento freelance:
- Generación de brief de proyecto detallado con IA: describe el proyecto, requisitos, entregables y criterios de éxito de forma clara y atractiva para atraer a los mejores freelancers
- Evaluación de propuestas con IA: cuando recibes propuestas de múltiples freelancers, la IA puede analizarlas y compararlas según criterios predefinidos
- Análisis de portfolios con IA: herramientas que evalúan la relevancia y calidad del portfolio de un freelancer en relación con tu proyecto específico
- Due diligence automatizada: verificación de referencias, revisión de reseñas en plataformas y análisis de la trayectoria profesional con IA

Módulo 2 — Contratos y onboarding:
- Generación de contratos de prestación de servicios con IA: contratos adaptados al tipo de proyecto, con cláusulas de confidencialidad, propiedad intelectual, plazos y condiciones de pago
- Checklist de onboarding freelance automatizado: accesos a herramientas, briefings de proyecto, introducción al equipo y contexto de la empresa
- Documentación de proyecto: la IA genera la documentación inicial del proyecto (scope, plazos, entregables, métricas de éxito) lista para compartir con el freelancer

Módulo 3 — Seguimiento del trabajo y comunicación:
- Seguimiento de hitos con IA: herramientas que monitorean el avance del proyecto y alertan cuando hay riesgo de retraso
- Resúmenes automáticos de actualizaciones del freelancer: la IA sintetiza las actualizaciones semanales en un resumen ejecutivo para el manager
- Evaluación de entregables con IA: revisión inicial automatizada de los entregables del freelancer según los criterios acordados, antes de la revisión humana

Módulo 4 — Evaluación del rendimiento y feedback:
- Scorecard de evaluación de freelancers: la IA genera un template de evaluación adaptado al tipo de proyecto y perfil del freelancer
- Generación de feedback constructivo: la IA ayuda a redactar feedback específico, accionable y respetuoso al final de cada proyecto
- Base de datos de talento freelance: registro de la evaluación de cada colaborador para facilitar la decisión de renovación

Módulo 5 — Gestión financiera y cumplimiento:
- Automatización de facturas y pagos: IA que procesa y verifica facturas de freelancers contra los hitos acordados
- Alertas de clasificación laboral: la IA monitorea si la relación con un freelancer podría estar cruzando la línea hacia una relación de dependencia (riesgo de falsa autonomía)
- Reporting de gasto en talento freelance: dashboards de IA que muestran el coste por proyecto, por tipo de perfil y por plataforma

Módulo 6 — Retención del mejor talento freelance:
- Sistema de bench de talento: base de datos de freelancers de confianza que la IA mantiene actualizada y sugiere para nuevos proyectos similares
- Comunicación de mantenimiento de la relación: la IA sugiere cuándo y cómo mantener el contacto con freelancers de alto valor entre proyectos
- Propuestas de marco de colaboración preferente: la IA ayuda a estructurar acuerdos de colaboración recurrente con los mejores freelancers

**Entregables**

Genera para mi operativa de gestión freelance:
1. Una plantilla de brief de proyecto para freelancers optimizada con IA, lista para personalizar por tipo de proyecto
2. Un contrato de prestación de servicios freelance base con las cláusulas esenciales, generado con IA
3. Un scorecard de evaluación de freelancers adaptado a los tres perfiles que más utilizas
4. Un sistema de clasificación de tu pool de freelancers (A, B, C) con criterios claros para cada nivel
5. Una checklist de onboarding de freelancers de diez pasos que puedas automatizar con herramientas de IA

Gestionar freelancers con IA te permite escalar tu capacidad operativa sin perder la calidad ni el control sobre los proyectos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir un sistema de gestión eficiente de talento freelance usando IA en selección, contratos, seguimiento y evaluación',
                'vote_score'       => 37,
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
