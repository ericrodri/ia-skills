<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills527Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Employer branding con IA para atraer talento',
                'description'      => 'Estrategia de employer branding potenciada con inteligencia artificial para construir una marca empleadora auténtica, medir la percepción cultural externa y atraer talento alineado con los valores organizacionales.',
                'prompt_content'   => <<<'EOT'
Eres un experto en employer branding y marketing de recursos humanos con especialización en el uso de inteligencia artificial para construir y proyectar marcas empleadoras. Tu trabajo combina el análisis de datos de percepción, la creación de contenido estratégico y la medición del impacto en la atracción de talento. Necesito tu ayuda para desarrollar una estrategia completa de employer branding con IA.

**Situación de partida:**
- Empresa: [NOMBRE_EMPRESA], sector [SECTOR], entre 100 y 500 empleados
- Desafío: dificultad para atraer perfiles técnicos y la alta competencia por talento en el mercado
- Percepción actual: calificación media de 3,2 sobre 5 en Glassdoor y LinkedIn
- Presupuesto para employer branding: €30.000 anuales
- Objetivo: convertirse en referente como empleador en su sector en 18 meses

**tarea central:**
Diseña una estrategia de employer branding de 12 meses que use inteligencia artificial para medir la cultura organizacional, crear contenido auténtico y posicionar a la empresa como un lugar deseable para trabajar entre los perfiles de talento más buscados.

**Componentes de la estrategia:**

1. **Diagnóstico de la marca empleadora con IA**
   - Cómo usar IA para analizar las reseñas de Glassdoor, LinkedIn y foros de empleo y extraer los temas más recurrentes (positivos y negativos)
   - Análisis de sentimiento de las menciones de la empresa en redes sociales
   - Encuesta interna de percepción cultural: 10 preguntas y cómo analizar los resultados con IA
   - Qué hace la empresa bien y qué debe mejorar antes de comunicar hacia afuera

2. **Definición del Employee Value Proposition (EVP)**
   - Proceso para construir el EVP a partir de los datos de la encuesta interna y las entrevistas con empleados
   - Cómo usar IA para identificar los atributos más diferenciadores para cada perfil de talento objetivo
   - Ejemplo de EVP completo para una empresa tecnológica de tamaño medio
   - Cómo validar el EVP con empleados actuales antes de publicarlo

3. **Estrategia de contenidos con IA**
   - Plan de contenidos trimestral para LinkedIn, Instagram y el blog de empleo de la empresa
   - Tipos de contenido que mejor funcionan para employer branding: testimonios, días en la vida, cultura en acción y datos de bienestar
   - Cómo usar IA para generar borradores de contenido a partir de entrevistas con empleados reales
   - Frecuencia de publicación, formatos y voces (empresa vs. empleados individuales)

4. **Campañas de atracción de talento con IA**
   - Cómo personalizar los anuncios de empleo según el perfil del candidato usando IA
   - Análisis de las descripciones de puestos de trabajo: qué lenguaje atrae y qué ahuyenta al talento
   - Segmentación de audiencias para campañas de employer branding en LinkedIn Ads
   - Métricas de atracción: número de candidaturas espontáneas, tiempo de cobertura de vacantes y calidad del candidato

5. **Medición del impacto del employer branding**
   - KPIs de employer branding: eNPS, tasa de aceptación de ofertas, coste por contratación y calificación en plataformas de empleo
   - Dashboard de seguimiento mensual de la marca empleadora
   - Cómo usar IA para detectar cambios en la percepción de la marca antes de que se conviertan en un problema

6. **Embajadores de marca internos**
   - Programa de employee advocacy: cómo identificar y activar a los embajadores internos
   - Formación para que los empleados compartan contenido auténtico sin comprometer su privacidad
   - Incentivos y reconocimiento para los embajadores más activos

Finaliza con un plan de acción de los primeros 30 días: qué hacer primero, en qué orden y con qué recursos para arrancar la estrategia de employer branding con IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Estrategia de employer branding con IA para atraer y retener talento',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Plataformas digitales de cultura organizacional con IA',
                'description'      => 'Guía técnica para desarrollar o integrar plataformas digitales que miden y refuerzan la cultura organizacional usando inteligencia artificial, incluyendo encuestas de pulso inteligentes, reconocimiento entre pares y análisis de clima laboral.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en plataformas de people analytics y experiencia del empleado con inteligencia artificial. Tienes experiencia construyendo sistemas que miden la cultura organizacional, facilitan el reconocimiento entre pares y proporcionan insights accionables a los equipos de RRHH. Necesito tu guía técnica completa para desarrollar una plataforma de cultura organizacional con IA.

**Descripción del sistema a construir:**
- Plataforma web y móvil para empresas de entre 100 y 2.000 empleados
- Módulos principales: encuestas de pulso inteligentes, reconocimiento entre pares, medición de cultura y alertas de riesgo de rotación
- Stack tecnológico: [TU_STACK_PREFERIDO, por ejemplo Laravel + Vue.js + Python para el módulo de IA]
- Integración: debe conectarse con Slack, Microsoft Teams y los principales HRIS del mercado
- Modelo de negocio: SaaS B2B, €8 por empleado/mes

**objetivo técnico:**
Diseña la arquitectura completa de la plataforma y proporciona guía de implementación para cada módulo, con especial atención a los algoritmos de IA que generan valor diferencial frente a las encuestas tradicionales.

**Módulos técnicos a diseñar:**

1. **Módulo de encuestas de pulso inteligentes**
   - Arquitectura del sistema de preguntas adaptativas: cómo la IA selecciona qué preguntas hacer a cada empleado según su historial y los objetivos de la empresa
   - Algoritmo de frecuencia óptima: cómo determinar cuándo encuestar a cada empleado para maximizar la tasa de respuesta sin generar fatiga
   - Análisis de sentimiento de las respuestas abiertas con modelos de lenguaje
   - Detección de patrones de respuesta que indican deshonestidad o desengagement

2. **Motor de análisis de cultura con IA**
   - Modelo de cultura organizacional: qué dimensiones medir y cómo cuantificarlas
   - Algoritmo de benchmarking: cómo comparar la cultura de una empresa con la de su sector (con datos anonimizados de la base de clientes)
   - Sistema de detección de subculturas dentro de la organización: departamentos o equipos con cultura divergente
   - Generación automática de insights narrativos a partir de los datos cuantitativos

3. **Sistema de reconocimiento entre pares**
   - Diseño de la base de datos de reconocimientos y su relación con los valores organizacionales
   - IA para detectar sesgos en el reconocimiento: empleados que nunca dan reconocimiento, empleados que nunca lo reciben y sesgos de género o antigüedad
   - Algoritmo de gamificación responsable: cómo incentivar el reconocimiento sin crear dinámicas artificiales
   - Integración con Slack y Teams para el reconocimiento en el flujo de trabajo diario

4. **Modelo predictivo de rotación de talento**
   - Features del modelo: qué señales correlacionan con la intención de abandono (frecuencia de respuesta, sentimiento de las respuestas, patrones de reconocimiento)
   - Arquitectura del modelo: tipo de algoritmo recomendado y justificación
   - Sistema de alertas: cómo notificar a RRHH sin revelar información individual de los empleados
   - Evaluación del modelo: métricas de precisión, recall y cómo minimizar los falsos positivos

5. **Dashboard y reporting para RRHH**
   - Diseño del panel de control: qué métricas mostrar en la vista principal para el director de RRHH
   - Reportes automatizados: cómo generar narrativas en lenguaje natural a partir de los datos de cultura
   - Drill-down sin comprometer la privacidad: hasta qué nivel de granularidad pueden ver los datos los managers
   - Exportación de datos y cumplimiento del RGPD

6. **Seguridad, privacidad y confianza**
   - Diseño del modelo de anonimización: cómo garantizar que los resultados de menos de 5 personas no sean identificables
   - Política de acceso a datos: quién puede ver qué en la plataforma
   - Infraestructura de seguridad necesaria para datos sensibles de empleados
   - Certificaciones de seguridad recomendadas para vender a grandes empresas (ISO 27001, SOC 2)

Finaliza con un roadmap técnico de 16 semanas para el MVP, indicando las dependencias entre módulos y los hitos de entrega.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Arquitectura técnica de plataforma de cultura organizacional con IA',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencias del empleado con IA',
                'description'      => 'Metodología de diseño centrado en el empleado para crear experiencias laborales digitales y presenciales que integran IA, mejorando la satisfacción, el compromiso y la productividad en cada etapa del ciclo de vida del empleado.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de experiencias especializado en Employee Experience (EX) y en la aplicación de metodologías de diseño centrado en el humano al entorno laboral. Tu trabajo combina las técnicas de UX/UI con la comprensión profunda de los momentos que importan en el ciclo de vida del empleado, usando inteligencia artificial para personalizar y mejorar cada interacción. Necesito tu guía completa para diseñar la experiencia del empleado con IA.

**Contexto organizacional:**
- Empresa: [NOMBRE_EMPRESA], sector [SECTOR], trabajo híbrido o remoto, entre 150 y 800 empleados
- Desafío principal: los empleados se sienten desconectados de la cultura y la misión de la empresa, especialmente los que trabajan en remoto
- Recursos de diseño disponibles: [describe tu equipo y herramientas]
- Objetivo: aumentar el eNPS en 20 puntos en 12 meses y reducir la rotación voluntaria en un 15%

**tarea central:**
Diseña un mapa completo de la experiencia del empleado y define cómo la IA puede mejorar los momentos más críticos del ciclo de vida laboral, desde la atracción hasta la salida.

**Fases del diseño:**

1. **Research y mapeo de la experiencia actual**
   - Protocolo de entrevistas con empleados para mapear su experiencia real (no la que la empresa cree que tienen)
   - Cómo crear un mapa de viaje del empleado (Employee Journey Map) que cubra todos los momentos críticos
   - Análisis de los puntos de dolor más frecuentes por etapa: atracción, onboarding, desarrollo, reconocimiento y salida
   - Cómo usar IA para analizar datos de encuestas anteriores, correos de salida y reseñas de Glassdoor

2. **Identificación de los momentos que importan**
   - Define los 8 momentos más críticos en el ciclo de vida del empleado de esta organización
   - Cómo priorizar qué momentos diseñar primero basándose en el impacto en el eNPS y la facilidad de implementación
   - Matriz de impacto vs. esfuerzo para la priorización de iniciativas de EX

3. **Diseño de la experiencia de onboarding con IA**
   - Mapa detallado de la experiencia de los primeros 90 días: qué pasa cada día, semana y mes
   - Cómo un asistente de IA puede personalizar el onboarding según el rol, la ubicación y el perfil del nuevo empleado
   - Diseño del kit de bienvenida digital: qué materiales, en qué formato y en qué secuencia
   - Sistema de feedback continuo durante el onboarding: cómo capturarlo y actuar sobre él rápidamente

4. **Diseño de la experiencia de desarrollo y crecimiento**
   - Cómo usar IA para crear planes de desarrollo individualizados basados en las habilidades actuales y los objetivos de carrera
   - Diseño del feedback continuo: sustitución de la evaluación anual por conversaciones frecuentes apoyadas en IA
   - Sistema de visibilidad de oportunidades internas: cómo la IA puede recomendar proyectos, mentores y movimientos laterales
   - Diseño de los rituales de reconocimiento: momentos, formatos y frecuencia

5. **Diseño del entorno digital de trabajo**
   - Principios de diseño para el intranet o hub digital del empleado
   - Cómo aplicar los principios de UX a las herramientas internas para reducir la fricción y el estrés digital
   - Diseño de notificaciones y comunicaciones internas: cuándo, cómo y en qué canal
   - Integración de asistentes de IA en las herramientas de trabajo diario (Slack, Teams, correo)

6. **Medición de la experiencia del empleado**
   - Sistema de escucha continua: combinación de encuestas de pulso, feedback puntual y señales pasivas
   - Cómo usar IA para convertir datos cualitativos (respuestas abiertas, comentarios) en insights cuantitativos
   - Dashboard de EX para el equipo de RRHH: qué métricas mostrar y cómo presentarlas
   - Proceso de cierre del bucle: cómo comunicar a los empleados que sus comentarios han generado cambios

Finaliza con una lista de los 5 proyectos de mejora de experiencia del empleado con mayor ROI que puedes implementar en los próximos 6 meses con recursos limitados.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseño centrado en el empleado con IA para mejorar el ciclo de vida laboral',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Cultura de ventas y reconocimiento con IA',
                'description'      => 'Estrategia para construir una cultura de alto rendimiento en equipos de ventas usando inteligencia artificial, combinando sistemas de reconocimiento, coaching personalizado y medición del clima del equipo.',
                'prompt_content'   => <<<'EOT'
Eres un director de ventas y experto en cultura de equipos comerciales con experiencia en el uso de inteligencia artificial para elevar el rendimiento y el bienestar de los equipos de ventas. Tu enfoque combina la gestión del rendimiento con la cultura del reconocimiento y el desarrollo continuo. Necesito tu ayuda para construir una cultura de ventas de alto rendimiento con IA.

**Contexto del equipo:**
- Equipo comercial: 25 vendedores, 4 team leaders y 1 director de ventas
- Sector: SaaS B2B, ciclo de venta de 4 a 8 semanas, ticket medio de €8.000
- Desafío actual: alta varianza entre los mejores y peores vendedores, baja moral en el equipo de vendedores junior y 35% de rotación anual
- Herramientas actuales: Salesforce CRM, Slack y reuniones semanales de equipo
- Objetivo: reducir la rotación al 15% y aumentar el revenue por vendedor en un 20% en 12 meses

**instrucción central:**
Diseña un programa completo de cultura de ventas que use IA para el reconocimiento, el coaching, la medición del clima y el desarrollo de habilidades, manteniendo la motivación y la cohesión en un equipo bajo presión de resultados.

**Componentes del programa:**

1. **Diagnóstico de la cultura actual del equipo**
   - Cómo usar IA para analizar los datos del CRM y detectar patrones de comportamiento correlacionados con la motivación y el rendimiento
   - Encuesta de clima de ventas: 12 preguntas específicas para equipos comerciales y cómo interpretar los resultados
   - Señales de alerta temprana de desmotivación: indicadores en el CRM, Slack y la asistencia a reuniones
   - Mapa de perfiles motivacionales: qué mueve a cada tipo de vendedor (logro, reconocimiento, autonomía, seguridad)

2. **Sistema de reconocimiento con IA**
   - Diseño del programa de reconocimiento: tipos de logros, formatos de reconocimiento y frecuencia
   - Cómo usar IA para detectar automáticamente hitos merecedores de reconocimiento en el CRM (primera venta grande, racha de cierres, recuperación tras una racha negativa)
   - Reconocimiento personalizado: cómo adaptar el tipo y el canal de reconocimiento al perfil de cada vendedor
   - Rituales de reconocimiento en el equipo: la reunión semanal como espacio de celebración

3. **Coaching personalizado con IA**
   - Sistema de análisis de llamadas de ventas con IA: qué métricas extraer y cómo usarlas para el coaching individual
   - Plan de desarrollo personalizado para cada vendedor basado en sus datos de rendimiento y sus áreas de mejora
   - Cómo los team leaders pueden usar los insights de IA para preparar sesiones de coaching más efectivas
   - Programa de mentoring entre pares: cómo emparejar a los mejores vendedores con los junior usando IA

4. **Gamificación responsable del rendimiento**
   - Diseño de un sistema de gamificación que incentive los comportamientos correctos (no solo el revenue)
   - Métricas de actividad a gamificar: llamadas de calidad, demos realizadas, seguimientos y velocidad de respuesta
   - Cómo evitar las dinámicas tóxicas de la gamificación de ventas (comparaciones humillantes, presión excesiva)
   - Tabla de clasificación: cuándo mostrarla, a quién y con qué diseño para que motive sin desmoralizar

5. **Gestión del bienestar en un equipo de alta presión**
   - Indicadores de burnout en equipos de ventas y cómo detectarlos con IA antes de que el vendedor decida irse
   - Política de "días de carga cero": cómo integrar el bienestar en una cultura de ventas sin perder foco en resultados
   - Cómo hablar de salud mental con un equipo comercial que ve el bienestar como debilidad
   - Recursos de apoyo que el equipo debe conocer y cómo comunicarlos sin estigma

6. **Métricas de cultura de ventas**
   - KPIs de cultura del equipo: eNPS del equipo comercial, tasa de retención de vendedores junior, NPS del manager
   - Cómo correlacionar las métricas de cultura con las de rendimiento comercial para presentar el ROI a dirección
   - Reunión mensual de revisión de cultura: agenda, datos y decisiones que tomar

Finaliza con un plan de los primeros 60 días para transformar la cultura del equipo sin interrumpir el ciclo de ventas actual.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construcción de cultura de alto rendimiento en equipos de ventas con IA',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product thinking para plataformas de employee experience',
                'description'      => 'Framework de product management aplicado al diseño y evolución de plataformas internas de experiencia del empleado con IA, cubriendo discovery, priorización, métricas de adopción y gestión de stakeholders internos.',
                'prompt_content'   => <<<'EOT'
Eres un product manager con experiencia en productos internos y plataformas de experiencia del empleado (employee experience platforms). Tu especialidad es aplicar el pensamiento de producto a los retos de RRHH, tratando a los empleados como usuarios y a los directivos como clientes internos. Trabajas habitualmente con herramientas de IA para mejorar la personalización y el impacto de estas plataformas. Necesito tu guía para gestionar una plataforma interna de employee experience con mentalidad de producto.

**Contexto del proyecto:**
- Plataforma interna de experiencia del empleado que incluye: onboarding digital, reconocimiento entre pares, encuestas de pulso y directorio de talento
- Usuarios: 400 empleados (80% usuarios finales, 20% managers y RRHH que usan el panel de administración)
- Equipo de producto: 1 PM (yo), 2 desarrolladores y 1 diseñadora
- Stakeholders: directora de RRHH (sponsor principal), CFO (controla el presupuesto) y líderes de equipo
- Desafío: la tasa de adopción activa es del 35% y necesitamos llegar al 70% en 6 meses

**objetivo del ejercicio:**
Desarrolla un framework de product management adaptado a las particularidades de los productos internos de employee experience, con procesos de discovery, priorización y medición que tengan en cuenta que el "cliente" es también empleado de la empresa.

**Bloques del framework:**

1. **Discovery para productos internos**
   - Por qué el discovery en productos internos es diferente (y más difícil) que en productos externos
   - Protocolo de entrevistas con empleados que evita el sesgo de deseabilidad social
   - Cómo analizar los datos de uso actuales de la plataforma con IA para identificar fricciones sin necesidad de entrevistar a nadie
   - Cómo involucrar a los managers en el discovery sin que dominen la agenda de producto

2. **Diagnóstico de la baja adopción**
   - Análisis de los datos de uso: qué módulos tienen mayor y menor adopción, qué usuarios son los más activos y por qué
   - Identificación de las barreras de adopción: accesibilidad, percepción de valor, fricción técnica y resistencia cultural
   - Cómo usar IA para segmentar a los usuarios por perfil de uso y diseñar intervenciones específicas para cada segmento
   - Las 5 causas más frecuentes de baja adopción en plataformas internas y cómo diagnosticar cuál aplica en este caso

3. **Priorización con múltiples stakeholders internos**
   - Framework de priorización adaptado a productos internos: cómo equilibrar las necesidades de RRHH, los managers y los empleados
   - Cómo gestionar las peticiones de la directora de RRHH que no son las más urgentes para los usuarios finales
   - Proceso de revisión del roadmap con stakeholders: frecuencia, formato y cómo presentar las decisiones de no hacer
   - Criterios para decidir si construir una feature nueva o mejorar la adopción de las existentes

4. **Estrategia de adopción con IA**
   - Segmentación de empleados por perfil de adopción: early adopters, resistentes y pasivos
   - Plan de intervención específico para cada segmento usando comunicaciones personalizadas con IA
   - Diseño de los momentos de descubrimiento: cómo hacer que los empleados encuentren valor en la plataforma en su primer uso
   - Programa de champions internos: cómo identificarlos, activarlos y mantenerlos motivados

5. **Métricas de producto y éxito**
   - Norte estrella de la plataforma interna de EX: cómo definirla de forma que refleje el valor real para el empleado
   - Árbol de métricas: de la norte estrella a las métricas de equipo y las métricas de adopción por módulo
   - Cómo presentar el valor de la plataforma al CFO en términos de ROI financiero (retención, productividad, ahorro en tiempo de RRHH)
   - Sistema de escucha continua: cómo capturar el feedback de los usuarios internos de forma sistemática

6. **Roadmap y comunicación interna**
   - Formato del roadmap para una plataforma interna: cómo presentarlo a diferentes audiencias
   - Comunicación de cambios a los empleados: cómo lanzar nuevas features sin interrumpir el trabajo diario
   - Gestión de la deuda técnica en un contexto donde el presupuesto siempre compite con las iniciativas de negocio
   - Cómo defender el presupuesto de producto interno cuando el CFO pregunta "¿y para qué sirve esto?"

Termina con un plan de 90 días para aumentar la tasa de adopción del 35% al 60%, con acciones concretas, responsables y métricas de seguimiento semanal.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Product management para plataformas internas de employee experience con IA',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Medición de cultura organizacional con IA',
                'description'      => 'Metodología completa para medir, analizar y actuar sobre la cultura organizacional usando inteligencia artificial, desde el diseño de encuestas de pulso hasta el análisis de sentimiento y la generación de planes de acción.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en people analytics y cultura organizacional con experiencia en el uso de inteligencia artificial para medir y transformar culturas empresariales. Tu enfoque combina el rigor metodológico de las ciencias del comportamiento con las capacidades analíticas de la IA para generar insights accionables. Necesito tu ayuda para diseñar un sistema completo de medición de cultura organizacional con IA.

**Contexto de la organización:**
- Empresa: [NOMBRE_EMPRESA], entre 200 y 1.000 empleados, sector [SECTOR]
- Situación actual: la empresa realiza una encuesta de satisfacción anual con una tasa de respuesta del 55% y sin un proceso estructurado de seguimiento
- Desafío: los datos de la encuesta no se traducen en cambios, lo que ha generado escepticismo entre los empleados
- Objetivo: construir un sistema de escucha continua que genere confianza y cambios reales en la cultura

**instrucción central:**
Diseña un sistema integral de medición de cultura organizacional con IA que supere las limitaciones de la encuesta anual, genere insights en tiempo real y cierre el bucle entre los datos y las acciones de mejora.

**Componentes del sistema:**

1. **Marco conceptual de cultura organizacional**
   - Define qué es la cultura organizacional y cómo medirla de forma rigurosa (más allá de los valores declarados en la web)
   - Las 6 dimensiones de cultura que más correlacionan con el rendimiento organizacional y la retención de talento
   - Diferencia entre la cultura aspiracional (la que la empresa quiere tener) y la cultura real (la que los empleados experimentan)
   - Cómo la IA puede detectar brechas entre cultura declarada y cultura vivida

2. **Diseño del sistema de escucha continua**
   - Arquitectura del sistema: combinación de encuestas de pulso, feedback puntual y señales pasivas
   - Encuesta de pulso semanal: 2-3 preguntas rotativas, algoritmo de selección y cómo evitar la fatiga de encuestas
   - Preguntas abiertas y cómo usar IA para analizar el texto libre y extraer temas emergentes
   - Señales pasivas que pueden indicar cambios en la cultura: participación en actividades, uso de herramientas colaborativas y datos del CRM de personas

3. **Análisis de sentimiento y detección de tendencias con IA**
   - Cómo entrenar o usar modelos de IA para analizar el sentimiento en respuestas abiertas de empleados
   - Detección de temas emergentes: qué temas están ganando o perdiendo relevancia en las conversaciones de los empleados
   - Análisis de subculturas: cómo identificar departamentos o equipos con dinámicas culturales diferentes
   - Sistema de alertas tempranas: qué señales deben activar una revisión urgente del plan de cultura

4. **Reporting y comunicación de resultados**
   - Diseño del dashboard de cultura para la directora de RRHH: qué métricas mostrar, con qué frecuencia y en qué formato
   - Cómo presentar los resultados de cultura al equipo directivo sin que se conviertan en un ejercicio de gestión de imagen
   - Informe de cultura para los managers: qué datos necesitan y qué no deben ver por razones de privacidad
   - Comunicación de resultados a toda la organización: transparencia sin alarmar

5. **Del dato a la acción: cierre del bucle**
   - Proceso de priorización de iniciativas de cultura a partir de los datos
   - Cómo usar IA para generar borradores de planes de acción personalizados por departamento
   - Sistema de seguimiento de compromisos: cómo asegurarse de que las acciones prometidas se ejecutan
   - Comunicación del cambio a los empleados: cómo demostrar que sus respuestas han generado mejoras reales

6. **Implementación y gestión del cambio**
   - Plan de lanzamiento del nuevo sistema de escucha: comunicación, formación de managers y gestión de expectativas
   - Cómo superar el escepticismo de los empleados que no creen que sus respuestas cambiarán nada
   - Gestión de la privacidad: garantías que debes ofrecer para maximizar la honestidad en las respuestas
   - Gobernanza del sistema: quién tiene acceso a qué datos y cómo se toman las decisiones a partir de ellos

Finaliza con un cronograma de implementación de 6 meses para pasar de la encuesta anual al sistema de escucha continua con IA, incluyendo los hitos de comunicación interna en cada fase.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Sistema integral de medición de cultura organizacional con IA',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'ROI de programas de cultura y bienestar con IA',
                'description'      => 'Metodología financiera para cuantificar el retorno de la inversión de los programas de cultura organizacional y bienestar laboral, usando modelos de análisis con IA que conectan las métricas de personas con los resultados de negocio.',
                'prompt_content'   => <<<'EOT'
Eres un analista financiero especializado en people analytics y en la cuantificación del impacto financiero de las iniciativas de recursos humanos. Tu expertise combina el análisis de datos de personas con la modelización financiera, y usas inteligencia artificial para identificar correlaciones entre la cultura organizacional y los resultados de negocio. Necesito tu ayuda para construir un modelo de ROI completo para los programas de cultura y bienestar.

**Contexto de la organización:**
- Empresa: [NOMBRE_EMPRESA], entre 300 y 1.500 empleados, sector [SECTOR]
- Inversión actual en cultura y bienestar: €85.000 anuales (plataforma de encuestas, programas de bienestar, eventos de equipo y formación en cultura)
- El CFO ha pedido justificar financieramente esta inversión para el presupuesto del próximo año
- Datos disponibles: tasa de rotación, absentismo, productividad por departamento, NPS de empleados y satisfacción de clientes

**objetivo del análisis:**
Construye un modelo completo de ROI de los programas de cultura y bienestar que sea riguroso, basado en datos reales y comprensible para un CFO que no tiene experiencia en RRHH.

**Bloques del modelo financiero:**

1. **El coste de la mala cultura: cálculo de la línea base**
   - Cómo calcular el coste real de la rotación: coste de reclutamiento, formación, productividad perdida durante la vacante y curva de aprendizaje del nuevo empleado
   - Cálculo del coste del absentismo por estrés y desengagement: días perdidos × coste diario por empleado + impacto en el equipo
   - Coste del presentismo: empleados que están pero no rinden al 100% y cómo estimarlo
   - Impacto de la cultura en la satisfacción de cliente: correlación entre eNPS y NPS de cliente en tu sector

2. **Modelo de ROI de los programas de cultura**
   - Fórmula de ROI adaptada a iniciativas de personas: cómo medir el numerador (beneficio) y el denominador (inversión)
   - Atribución causal: cómo separar el impacto del programa de cultura de otros factores que también afectan a la rotación
   - Casos de estudio con datos reales: empresas similares que han publicado el ROI de sus programas de cultura
   - Limitaciones del modelo y cómo comunicarlas honestamente al CFO

3. **Modelo predictivo con IA**
   - Cómo usar IA para identificar las métricas de cultura que mejor predicen la rotación en tu organización específica
   - Simulación de escenarios: ¿cuánto dinero ahorraría la empresa si la rotación bajara del 22% al 14%?
   - Correlación entre el índice de bienestar y la productividad medida: qué datos necesitas y cómo construir el modelo
   - Modelo de propensión al abandono: predicción del riesgo individual de rotación y su valor preventivo

4. **Métricas financieras de los programas de bienestar**
   - KPIs financieros del programa de bienestar: coste por empleado, ahorro en días de baja, mejora de productividad
   - Cómo calcular el valor de la reducción del absentismo en términos de euros ahorrados
   - Impacto del bienestar en el rendimiento: revisión de la literatura científica disponible y sus datos cuantificables
   - Benchmark del sector: cuánto invierten empresas similares en bienestar y qué resultados obtienen

5. **Presentación del ROI al comité de dirección**
   - Estructura de la presentación de 15 minutos al CFO: qué datos poner en cada slide
   - Cómo hablar de correlaciones sin afirmar causalidades que no puedes probar
   - Las 3 objeciones más frecuentes del CFO a las inversiones en cultura y cómo responderlas con datos
   - Propuesta de presupuesto: cómo justificar un aumento o mantenimiento de la inversión para el próximo año

6. **Sistema de seguimiento financiero del impacto**
   - Dashboard financiero de RRHH: las 8 métricas que un director de finanzas necesita ver sobre las personas
   - Proceso de revisión trimestral del ROI: cómo actualizar el modelo con los datos más recientes
   - Cómo usar IA para automatizar la generación del informe de ROI mensual
   - Plan de mejora continua: cómo usar los datos de ROI para optimizar la asignación del presupuesto de cultura

Termina con una plantilla de una página del informe de ROI de cultura y bienestar que puedas presentar al consejo de administración trimestralmente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Modelo financiero de ROI para programas de cultura organizacional y bienestar con IA',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Compliance y cultura organizacional con IA',
                'description'      => 'Marco jurídico para integrar los requisitos de compliance, ética empresarial y diversidad e inclusión en la cultura organizacional, usando inteligencia artificial para detectar riesgos, monitorizar el cumplimiento y gestionar incidentes.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en compliance corporativo, derecho laboral y ética empresarial con experiencia en el uso de inteligencia artificial para sistemas de cumplimiento normativo. Tu trabajo ayuda a las empresas a integrar los requisitos legales de compliance y diversidad en la cultura organizacional de forma práctica y no meramente burocrática. Necesito tu guía completa para desarrollar un programa de compliance culturalmente integrado con IA.

**Contexto de la organización:**
- Empresa: [NOMBRE_EMPRESA], entre 200 y 1.000 empleados, actividad en España con presencia en otros países de la UE
- Situación actual: el compliance se percibe como un trámite burocrático, hay baja participación en las formaciones obligatorias y el canal de denuncias apenas se usa
- Riesgos identificados: posibles brechas en el plan de igualdad, comunicaciones internas con lenguaje inapropiado detectadas por RRHH, y un proceso de selección que no garantiza la objetividad
- Objetivo: convertir el compliance en un activo cultural y reducir la exposición legal de la empresa

**instrucción principal:**
Diseña un programa de compliance culturalmente integrado que use IA para detectar riesgos antes de que se conviertan en problemas legales, y que transforme la percepción del cumplimiento normativo de carga burocrática a ventaja competitiva.

**Bloques del programa:**

1. **Marco legal aplicable a la cultura organizacional**
   - Obligaciones legales específicas relacionadas con la cultura: plan de igualdad (Ley Orgánica 3/2007), protocolo de acoso (Real Decreto 901/2020) y canal de denuncias (Ley 2/2023)
   - Cómo el Reglamento de IA de la UE afecta al uso de IA en procesos de RRHH (selección, evaluación del desempeño y decisiones de promoción)
   - Responsabilidades legales del director de RRHH y del consejo de administración en materia de cultura y compliance
   - Sanciones y jurisprudencia reciente: casos reales de empresas sancionadas por problemas de cultura tóxica

2. **IA para la detección temprana de riesgos culturales**
   - Cómo usar IA para analizar comunicaciones internas (con las garantías legales adecuadas) y detectar lenguaje inapropiado o patrones de acoso
   - Análisis de los datos de RRHH para identificar sesgos sistémicos: diferencias de género en promociones, en evaluaciones del desempeño o en la asignación de proyectos
   - Sistema de alertas tempranas: qué señales deben activar una revisión por parte del equipo de compliance
   - Límites legales del uso de IA para monitorizar a los empleados: qué está permitido y qué no según el RGPD y el ET

3. **Canal de denuncias efectivo**
   - Requisitos legales del canal de denuncias bajo la Ley 2/2023: quién debe tener uno y qué debe incluir
   - Por qué los empleados no usan el canal y cómo cambiar esa dinámica sin cambiar la ley
   - Cómo usar IA para gestionar las denuncias recibidas: categorización, priorización y anonimización
   - Proceso de investigación interna: plazos, responsables y garantías de confidencialidad para el denunciante

4. **Plan de igualdad y diversidad e inclusión con IA**
   - Auditoría retributiva con IA: cómo detectar brechas salariales de género en datos complejos con muchas variables
   - Proceso de selección no discriminatorio: cómo diseñar el proceso para que la IA ayude y no perpetúe sesgos
   - Métricas de diversidad e inclusión que la empresa debe medir y publicar según la normativa
   - Cómo comunicar los resultados del plan de igualdad internamente sin crear división

5. **Formación en compliance integrada en la cultura**
   - Por qué las formaciones obligatorias de compliance no funcionan y cómo rediseñarlas con IA
   - Formación adaptativa: cómo usar IA para personalizar el contenido de compliance según el rol y los riesgos específicos de cada empleado
   - Integración del compliance en los procesos del día a día: cómo hacer que el cumplimiento sea automático y no un esfuerzo adicional
   - Indicadores de efectividad de la formación: más allá del "completado por el 95% de la plantilla"

6. **Gobernanza del compliance cultural**
   - Estructura del comité de ética y cumplimiento: composición, frecuencia de reuniones y decisiones que toma
   - Informe anual de compliance para el consejo de administración: qué incluir y en qué formato
   - Cómo usar IA para automatizar la generación de informes de cumplimiento normativo
   - Plan de respuesta ante incidentes de cultura: qué hacer en las primeras 48 horas cuando sale a la luz un problema de cultura tóxica

Finaliza con una lista de verificación de compliance cultural de 25 puntos que el director de RRHH puede usar para auditar el estado de cumplimiento de su organización.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Programa de compliance cultural con IA para organizaciones en España y la UE',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Cultura customer-centric con IA en equipos de soporte',
                'description'      => 'Guía para construir una cultura centrada en el cliente dentro de los equipos de customer success y soporte, usando inteligencia artificial para medir el compromiso del equipo, personalizar el coaching y alinear los valores internos con la experiencia del cliente.',
                'prompt_content'   => <<<'EOT'
Eres un director de customer success con experiencia en la construcción de culturas centradas en el cliente en equipos de soporte y servicio. Tu enfoque combina la gestión de la experiencia del cliente con el desarrollo del equipo interno, usando inteligencia artificial para medir el alineamiento cultural y personalizar el desarrollo de cada agente. Necesito tu guía completa para construir una cultura customer-centric con IA en mi equipo de customer success.

**Contexto del equipo:**
- Equipo de CS: 18 agentes de soporte, 3 customer success managers y 1 director
- Empresa: plataforma SaaS B2B con 1.200 clientes activos
- Métricas actuales: CSAT del 3,8/5, NPS del equipo de -12, tiempo de resolución medio de 48 horas y tasa de retención del 78%
- Desafío principal: los agentes resuelven tickets pero no se sienten conectados con el impacto que tienen en el éxito de los clientes
- Objetivo: subir el CSAT a 4,3 y la tasa de retención al 88% en 12 meses

**tarea principal:**
Diseña un programa completo de construcción de cultura customer-centric para el equipo de CS, que use IA para medir el compromiso del equipo, personalizar el desarrollo y conectar a cada agente con el impacto de su trabajo en el cliente.

**Componentes del programa:**

1. **Diagnóstico de la cultura actual del equipo**
   - Cómo evaluar el nivel actual de orientación al cliente en el equipo: encuesta interna de 10 preguntas y análisis de comportamientos observables
   - Correlación entre la cultura interna y las métricas de cliente: cómo usar IA para encontrar qué comportamientos del equipo predicen el CSAT y la retención
   - Identificación de las barreras para la cultura customer-centric: procesos, incentivos y creencias limitantes
   - Mapa de los agentes según su nivel de compromiso con la experiencia del cliente

2. **Definición de los valores y comportamientos customer-centric**
   - Cómo co-crear los valores del equipo de CS con los propios agentes (no impuestos desde arriba)
   - Traducción de los valores en comportamientos concretos y observables en el día a día del soporte
   - Cómo usar IA para analizar las interacciones de los agentes más valorados por los clientes y extraer sus patrones de comportamiento
   - Sistema de observación y feedback de comportamientos: cómo medir si los agentes están viviendo los valores

3. **Coaching personalizado con IA**
   - Sistema de análisis de tickets e interacciones con IA: qué métricas extraer para el coaching individual
   - Cómo usar IA para identificar las áreas de mejora específicas de cada agente y generar recomendaciones de desarrollo
   - Sesiones de coaching semanales: estructura, duración y cómo usar los datos de IA para hacerlas más efectivas
   - Programa de autoaprendizaje: recursos y actividades que cada agente puede completar a su ritmo

4. **Rituales de cultura customer-centric**
   - Reunión semanal del equipo: cómo incluir historias de impacto en el cliente y aprendizajes colectivos
   - Cierre del bucle con el cliente: cómo hacer que los agentes vean el impacto de su trabajo (llamadas de agradecimiento, casos de éxito)
   - Sistema de reconocimiento: cómo celebrar los comportamientos customer-centric, no solo las métricas
   - Rotación de roles: cómo hacer que los agentes de soporte participen en llamadas de ventas o demos para entender mejor al cliente

5. **Métricas de cultura y rendimiento alineadas**
   - Cómo diseñar el sistema de incentivos para que premia los comportamientos customer-centric, no solo el volumen de tickets
   - Métricas de equipo que reflejan la cultura: calidad de las interacciones, proactividad con el cliente y colaboración interna
   - Dashboard de cultura del equipo de CS: qué métricas internas correlacionan mejor con el NPS del cliente
   - Revisión mensual: cómo combinar datos de cultura del equipo con datos de experiencia del cliente

6. **Programa de voz del cliente dentro del equipo**
   - Cómo llevar la voz del cliente al interior del equipo: compartir verbatims, ver grabaciones de llamadas y analizar las reseñas con IA
   - Proceso de mejora continua de los procesos de soporte a partir del feedback del cliente
   - Sesiones trimestrales de "un día en la vida del cliente": cómo hacer que los agentes experimenten el producto como un usuario real
   - Cómo involucrar al equipo de CS en el diseño de nuevas funcionalidades del producto

Finaliza con un plan de los primeros 90 días para transformar la cultura del equipo, con acciones concretas para cada semana y métricas de seguimiento del progreso.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construcción de cultura customer-centric con IA en equipos de soporte y customer success',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría de cultura organizacional con IA para freelancers',
                'description'      => 'Guía para profesionales independientes que quieren ofrecer servicios de consultoría de cultura organizacional y experiencia del empleado potenciados con IA, desde la definición del servicio hasta la entrega de proyectos de transformación cultural.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de negocios especializado en ayudar a profesionales independientes a construir prácticas de consultoría de alto valor en el área de cultura organizacional y experiencia del empleado. Tu expertise incluye el posicionamiento diferenciado, el diseño de metodologías propias y el uso de inteligencia artificial para multiplicar la capacidad de entrega de un consultor independiente. Necesito tu ayuda para construir mi práctica de consultoría de cultura organizacional con IA.

**Mi situación de partida:**
- Experiencia profesional: [TU EXPERIENCIA, por ejemplo RRHH, psicología organizacional, coaching ejecutivo o management consulting]
- Conocimiento de IA: nivel [básico/intermedio/avanzado]
- Red de contactos: [describe tu red actual]
- Tiempo disponible: [número de horas semanales]
- Objetivo de ingresos: €[OBJETIVO] mensuales en 12 meses

**instrucción principal:**
Ayúdame a construir desde cero una práctica de consultoría independiente especializada en cultura organizacional y experiencia del empleado, usando IA para diferenciarse de los consultores tradicionales y multiplicar el impacto y la rentabilidad de mi trabajo.

**Plan de negocio para desarrollar:**

1. **Nicho y posicionamiento diferenciado**
   - Cómo encontrar el nicho más rentable y menos saturado dentro de la consultoría de cultura: ¿cultura de startups en hipercrecimiento, cultura inclusiva en corporaciones, cultura de ventas, cultura de equipos remotos?
   - Propuesta de valor que integra la IA como diferencial: qué puedo ofrecer con IA que un consultor tradicional no puede
   - Análisis de la competencia: quién más está ofreciendo consultoría de cultura con IA y cómo me diferencio
   - Mensaje de posicionamiento: cómo explicar lo que hago en una frase que resuene con un director de RRHH

2. **Portafolio de servicios y precios**
   - Diseña un portafolio de 3 niveles de servicio: diagnóstico rápido (€1.500-€3.000), programa de transformación (€8.000-€20.000) y retainer de cultura (€2.500/mes)
   - Qué incluye cada servicio, cuántas horas requiere y qué entregables proporciona
   - Cómo usar IA para reducir el tiempo de entrega sin reducir la calidad percibida
   - Estrategia de productización: cómo convertir mi conocimiento en frameworks y herramientas reutilizables que escalen

3. **Metodología propia de consultoría con IA**
   - Diseña una metodología de diagnóstico de cultura de 30 días que combine encuestas inteligentes con análisis de IA y entrevistas
   - Cómo usar Claude para analizar los resultados de las encuestas, generar insights narrativos y proponer planes de acción
   - Plantillas y frameworks que puedo construir una vez y reutilizar en múltiples proyectos (encuesta de cultura, guía de entrevistas, plantilla de plan de acción)
   - Qué herramientas de IA usar en cada fase del proyecto: análisis de datos, generación de contenido y automatización de reportes

4. **Captación de los primeros clientes**
   - Plan de 90 días para conseguir los primeros 3 clientes de pago
   - Estrategia de LinkedIn: qué publicar, con qué frecuencia y cómo posicionarme como experto en cultura con IA
   - Cómo convertir mi red actual en primeras oportunidades de negocio sin hacer pitches agresivos
   - Propuesta de proyecto inicial: cómo estructurar una propuesta de diagnóstico de cultura que sea fácil de aprobar

5. **Entrega de proyectos de transformación cultural**
   - Estructura típica de un proyecto de transformación cultural de 6 meses: fases, entregables y hitos
   - Cómo gestionar la resistencia al cambio dentro de la organización cliente
   - Cómo medir el impacto del proyecto y demostrar el ROI al cliente para conseguir la renovación o la referencia
   - Gestión de situaciones difíciles: qué hacer cuando el proyecto no avanza por falta de apoyo de dirección

6. **Escalabilidad de la práctica**
   - Cuándo y cómo contratar a un primer asociado o colaborador que complementa mis capacidades
   - Creación de productos digitales: curso online de cultura organizacional con IA, guías y plantillas de venta
   - Construcción de autoridad: cómo usar el contenido, los casos de estudio y las conferencias para generar negocio inbound
   - Hoja de ruta de 3 años: de consultor independiente a boutique de consultoría de cultura con IA

Termina con un plan de acción de las primeras 4 semanas con tareas diarias concretas para arrancar la práctica de consultoría, incluyendo qué crear, a quién contactar y qué publicar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construcción de práctica freelance de consultoría de cultura organizacional con IA',
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
