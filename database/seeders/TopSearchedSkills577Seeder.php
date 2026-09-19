<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills577Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Crear contenidos de formación corporativa con IA para campañas internas de marketing',
                'description'      => 'Diseña materiales de aprendizaje atractivos para equipos de marketing usando IA: guías, presentaciones, quizzes y microlearning adaptados a cada nivel.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en diseño instruccional y formación corporativa con más de 15 años de experiencia creando programas de aprendizaje para equipos de marketing en empresas medianas y grandes.

Contexto: Necesito crear un módulo de formación corporativa completo para el equipo de marketing de mi empresa. El equipo tiene perfiles mixtos: algunos miembros llevan años en la empresa y otros son incorporaciones recientes. Necesito que el material sea atractivo, práctico y que fomente la retención del conocimiento.

Objetivo: Diseñar un módulo de formación sobre [TEMA DEL MÓDULO] que incluya todos los elementos necesarios para una experiencia de aprendizaje efectiva y memorable.

instrucción principal:
Crea un módulo de formación corporativa completo que incluya los siguientes elementos:

1. FICHA TÉCNICA DEL MÓDULO
- Título atractivo y memorable del módulo
- Duración estimada (total y por sección)
- Modalidad recomendada (presencial/online/blended)
- Perfil del alumno objetivo
- Prerrequisitos necesarios
- Objetivos de aprendizaje SMART (al menos 5)
- Competencias que desarrolla

2. ESTRUCTURA DE CONTENIDOS
Organiza el módulo en al menos 4 unidades temáticas. Para cada unidad incluye:
- Título y descripción breve
- Conceptos clave a desarrollar
- Actividades prácticas (mínimo 2 por unidad)
- Recursos adicionales recomendados
- Tiempo estimado de dedicación

3. MATERIALES DE APRENDIZAJE
Desarrolla los siguientes elementos:
- Guía del participante: estructura, resúmenes y espacios para notas personales
- Presentación ejecutiva: esquema de diapositivas con mensajes clave por slide
- Glosario de términos esenciales del tema (mínimo 15 términos)
- Infografía resumen del módulo completo

4. ACTIVIDADES Y EJERCICIOS
Diseña al menos 6 actividades prácticas variadas:
- 2 ejercicios individuales de aplicación
- 2 dinámicas grupales (debate, role-play o resolución de casos)
- 1 caso de estudio real del sector con preguntas de análisis
- 1 proyecto final integrador con rúbrica de evaluación

5. EVALUACIÓN DEL APRENDIZAJE
Elabora los siguientes instrumentos de evaluación:
- Evaluación diagnóstica inicial (10 preguntas)
- Quiz de verificación de comprensión por unidad (5 preguntas cada uno)
- Evaluación final: 20 preguntas tipo test con retroalimentación para cada opción
- Escala de valoración del desempeño en actividades prácticas

6. MICROLEARNING
Crea 5 píldoras de microlearning de máximo 3 minutos cada una:
- Formato: guión de vídeo o podcast
- Un concepto clave por píldora
- Ejemplo práctico incluido
- Pregunta de reflexión final

7. PLAN DE SEGUIMIENTO
Diseña un plan de refuerzo post-formación de 30 días:
- Recordatorios semanales con contenido de repaso
- Desafíos prácticos progresivos
- Sistema de verificación de aplicación en el puesto
- Encuesta de satisfacción y transferencia del aprendizaje

Adapta todo el contenido al sector específico de la empresa y al nivel actual del equipo. Usa un lenguaje cercano, ejemplos reales y un tono que equilibre rigor profesional con dinamismo. El objetivo es que los participantes salgan con conocimientos aplicables desde el primer día tras la formación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Formación de equipos de marketing',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Documentar bases de conocimiento técnico con IA para equipos de desarrollo',
                'description'      => 'Genera documentación técnica estructurada, wikis internas y guías de onboarding para desarrolladores usando IA como asistente de escritura técnica.',
                'prompt_content'   => <<<'EOT'
Actúa como un Technical Writer senior especializado en documentación de software y gestión del conocimiento en equipos de desarrollo ágil. Tienes experiencia diseñando sistemas de documentación que escalan con equipos desde 5 hasta 200 personas.

Contexto: Mi equipo de desarrollo necesita un sistema de documentación del conocimiento técnico que sea fácil de mantener, fácil de buscar y que realmente usen los desarrolladores (no solo los tech leads). El mayor problema es que el conocimiento crítico vive en las cabezas de pocas personas y cuando alguien se va o está de vacaciones, el equipo se paraliza.

Objetivo: Crear una base de conocimiento técnico completa y un sistema de documentación sostenible que democratice el acceso al conocimiento en el equipo.

instrucción principal:
Desarrolla un sistema de documentación técnica completo con los siguientes componentes:

1. ARQUITECTURA DE LA BASE DE CONOCIMIENTO
Define la estructura de carpetas y categorías:
- Taxonomía de documentos (tipos, niveles, audiencias)
- Sistema de etiquetado y metadatos
- Convenciones de nomenclatura de archivos
- Flujo de creación, revisión y publicación de documentos
- Política de actualización y deprecación de contenidos
- Responsables por área de conocimiento (DACI/RACI matrix)

2. PLANTILLAS DE DOCUMENTACIÓN
Crea plantillas listas para usar para:
- ADR (Architecture Decision Record): captura decisiones técnicas con contexto y consecuencias
- Runbook operacional: procedimientos paso a paso para incidencias
- Guía de onboarding técnico: primeras 4 semanas del nuevo desarrollador
- README de repositorio: estructura estándar para todos los repos del equipo
- Post-mortem de incidencia: sin culpas, orientado a aprendizaje
- Guía de contribución al proyecto (CONTRIBUTING.md)
- RFC (Request for Comments) para proponer cambios significativos

3. SISTEMA DE ONBOARDING TÉCNICO
Diseña un programa de incorporación de 30 días:
- Semana 1: entorno de desarrollo, herramientas y accesos
- Semana 2: arquitectura del sistema y flujos principales
- Semana 3: primera contribución guiada al código
- Semana 4: proyecto de integración autónomo con revisión
Incluye checklists detallados, recursos y criterios de éxito para cada fase.

4. DOCUMENTACIÓN DE ARQUITECTURA
Estructura la documentación del sistema técnico:
- Diagrama de contexto del sistema (nivel C4)
- Descripción de componentes principales
- Flujos de datos críticos
- Dependencias externas e internas
- Decisiones de diseño y sus justificaciones
- Mapa de la deuda técnica existente

5. GUÍAS DE PROCESOS DE DESARROLLO
Documenta los procesos estándar del equipo:
- Flujo de trabajo con Git (branching strategy)
- Proceso de code review: qué revisar y cómo dar feedback
- Pipeline de CI/CD: etapas, criterios y responsabilidades
- Gestión de releases y versionado semántico
- Proceso de gestión de incidencias en producción

6. KNOWLEDGE TRANSFER SESSIONS
Diseña un programa de transferencia de conocimiento:
- Formato de sesiones "brown bag" o "tech talks" internas
- Plantilla para documentar sesiones (grabación, resumen, Q&A)
- Calendario sugerido de temas según prioridad
- Sistema de valoración y mejora continua de las sesiones

7. MÉTRICAS DE SALUD DE LA DOCUMENTACIÓN
Define KPIs para medir la efectividad:
- Porcentaje de coverage de documentación por módulo
- Tiempo promedio para responder preguntas de onboarding
- NPS de los nuevos miembros tras el onboarding
- Frecuencia de actualización de documentos críticos
- Número de preguntas repetidas en canales de comunicación

Incluye ejemplos concretos de cada sección adaptados a un equipo de desarrollo web con stack moderno. El objetivo final es que el conocimiento deje de ser un cuello de botella y se convierta en una ventaja competitiva del equipo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Documentación técnica y gestión del conocimiento',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseñar experiencias de aprendizaje visual y corporativo con IA',
                'description'      => 'Usa IA para conceptualizar y crear sistemas visuales de formación corporativa: infografías, mapas de aprendizaje, journey maps y materiales didácticos.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador instruccional especializado en experiencias de aprendizaje visual (Learning Experience Designer) con formación en UX y comunicación visual aplicada a la formación corporativa.

Contexto: Necesito diseñar materiales visuales de alta calidad para un programa de formación corporativa. Los materiales deben ser atractivos, funcionales y consistentes con la identidad de marca de la empresa. El objetivo es mejorar la retención del conocimiento y aumentar el engagement de los participantes.

Objetivo: Crear un sistema visual de aprendizaje completo que sirva como guía de diseño y contenido para todos los materiales del programa formativo.

instrucción principal:
Desarrolla un sistema completo de diseño para materiales de aprendizaje corporativo:

1. SISTEMA DE DISEÑO PARA FORMACIÓN
Define la identidad visual del programa:
- Paleta de colores con propósito pedagógico (colores para conceptos, alertas, ejemplos, ejercicios)
- Tipografía: fuentes para títulos, cuerpo, destacados y código
- Iconografía: conjunto de iconos estándar para tipos de contenido
- Sistema de grids y espaciado para materiales impresos y digitales
- Tokens de diseño reutilizables en todas las piezas

2. INFOGRAFÍAS DE APRENDIZAJE
Crea guiones detallados para 5 infografías:
- Infografía de proceso: pasos secuenciales con iconos explicativos
- Infografía comparativa: ventajas y diferencias entre conceptos
- Infografía estadística: datos clave con visualizaciones
- Mapa conceptual: relaciones entre conceptos del módulo
- Timeline de implementación o historia del tema
Para cada una incluye: estructura visual propuesta, textos, datos y jerarquía de información.

3. MAPAS DE APRENDIZAJE
Diseña los siguientes mapas visuales:
- Learning Journey Map: ruta completa del participante desde onboarding hasta certificación
- Mapa de competencias: árbol de habilidades por nivel
- Mapa de contenidos interactivo: navegación visual por módulos
- Mapa de recursos: ecosistema de herramientas y materiales disponibles

4. MATERIALES DIDÁCTICOS VISUALES
Desarrolla guiones de diseño para:
- Fichas de referencia rápida (cheat sheets) laminadas
- Pósters motivacionales con conceptos clave para espacios de trabajo
- Tarjetas de estudio (flashcards) digitales e impresas
- Diagramas de proceso para procedimientos críticos
- Tableros Kanban visuales para seguimiento del aprendizaje

5. PRESENTACIONES CORPORATIVAS
Estructura un sistema de plantillas para:
- Deck de apertura de programa formativo
- Plantilla estándar para sesiones formativas (20+ layouts)
- Deck de cierre y certificación
- Presentación de resultados para stakeholders
Define el storytelling visual y la narrativa gráfica de cada tipo.

6. DISEÑO DE EVALUACIONES VISUALES
Crea formatos visuales atractivos para:
- Cuestionarios con ilustraciones de apoyo
- Rúbricas visuales de evaluación de competencias
- Dashboards de progreso individual y grupal
- Certificados y badges de completación

7. GUÍA DE PRODUCCIÓN DE CONTENIDOS
Documenta el proceso de creación:
- Brief creativo estándar para encargar piezas
- Flujo de revisión y aprobación de materiales
- Especificaciones técnicas por tipo de pieza (formatos, resoluciones, pesos)
- Banco de recursos: fuentes de imágenes, iconos e ilustraciones libres
- Checklist de accesibilidad para todos los materiales

Incluye referencias visuales concretas (descripciones detalladas de cada pieza) y criterios de calidad para cada elemento. El objetivo es que cualquier diseñador del equipo pueda crear materiales consistentes siguiendo este sistema.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseño de materiales educativos corporativos',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Programa de formación y onboarding de ventas con IA',
                'description'      => 'Diseña un programa completo de training para nuevos vendedores usando IA: desde el onboarding hasta la certificación de competencias de venta.',
                'prompt_content'   => <<<'EOT'
Actúa como un Sales Enablement Manager con más de 12 años de experiencia diseñando programas de formación para equipos comerciales en sectores B2B y B2C. Has reducido el tiempo de ramp-up de vendedores nuevos en un 40% implementando programas estructurados.

Contexto: Necesito diseñar un programa completo de formación y onboarding para nuevos miembros del equipo de ventas. El tiempo desde la incorporación hasta que el vendedor logra sus primeras ventas autónomas (ramp-up time) es actualmente demasiado largo, y necesito acortarlo sin comprometer la calidad.

Objetivo: Crear un programa de Sales Training completo que acelere el ramp-up, estandarice las mejores prácticas de venta y construya una cultura de aprendizaje continuo en el equipo comercial.

instrucción principal:
Desarrolla un programa de formación comercial completo:

1. PROGRAMA DE ONBOARDING COMERCIAL (90 DÍAS)
Diseña el plan día a día para los primeros 90 días:
- Primeros 30 días: conocimiento de producto, empresa y procesos
  * Semana 1: cultura, valores y estructura organizativa
  * Semana 2: portfolio de productos/servicios en profundidad
  * Semana 3: procesos de venta, CRM y herramientas
  * Semana 4: acompañamiento en visitas reales con el mentor
- Días 31-60: aplicación supervisada
  * Primeras llamadas y visitas con supervisión
  * Roleplay diario de situaciones de venta
  * Revisión semanal de pipeline con el manager
- Días 61-90: autonomía guiada
  * Gestión autónoma de cartera de prueba
  * Objetivos de aprendizaje progresivos
  * Preparación para certificación interna

2. CURRÍCULO DE FORMACIÓN EN VENTAS
Estructura los módulos de aprendizaje:
- Módulo 1: Fundamentos de la venta consultiva (20h)
- Módulo 2: Conocimiento profundo del cliente ideal (ICP) (10h)
- Módulo 3: Prospección y generación de oportunidades (15h)
- Módulo 4: Discovery y diagnóstico de necesidades (12h)
- Módulo 5: Presentación y demo de valor (10h)
- Módulo 6: Manejo de objeciones y negociación (15h)
- Módulo 7: Cierre y gestión de contratos (8h)
- Módulo 8: Customer success y expansión de cuenta (10h)

3. SALES PLAYBOOK
Desarrolla el manual de ventas del equipo:
- Perfil del cliente ideal (ICP) detallado por segmento
- Mapa de pain points por tipo de cliente
- Propuesta de valor diferencial y elevator pitch
- Secuencias de contacto y cadencias de prospección
- Scripts de llamada para cada etapa del funnel
- Guía de manejo de las 20 objeciones más frecuentes
- Plantillas de emails para cada situación
- Proceso de demo y presentación de solución

4. SISTEMA DE ROLEPLAY Y PRÁCTICA
Diseña ejercicios de práctica intensiva:
- 10 escenarios de roleplay graduados por dificultad
- Guía de feedback estructurado para managers
- Biblioteca de grabaciones de mejores prácticas
- Simulaciones de negociaciones complejas
- Casos reales anonimizados para análisis grupal

5. CERTIFICACIÓN DE COMPETENCIAS
Crea el sistema de certificación interno:
- Niveles de certificación: Junior, Senior, Expert
- Competencias evaluadas por nivel
- Exámenes de conocimiento por módulo
- Evaluación de habilidades en simulaciones prácticas
- Portfolio de logros y evidencias

6. FORMACIÓN CONTINUA
Diseña el programa de desarrollo continuo:
- Reuniones de enablement semanales (30 min)
- Biblioteca de recursos autogestionada
- Programa de coaching individual mensual
- Análisis de wins y losses para aprendizaje colectivo
- Plan de desarrollo individual por vendedor

Incluye métricas para medir el éxito del programa: tiempo de ramp-up, tasa de cumplimiento de objetivos, score de conocimiento en evaluaciones y NPS del proceso de onboarding.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Onboarding y training de equipos de ventas',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión del conocimiento de producto con IA para equipos de Product',
                'description'      => 'Centraliza y estructura todo el conocimiento de producto: PRDs, decisiones de roadmap, aprendizajes de usuarios y documentación estratégica con ayuda de IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un Head of Product con experiencia en scale-ups tecnológicas, especializado en construir sistemas de gestión del conocimiento de producto que escalan con el equipo y el negocio.

Contexto: Mi equipo de producto está creciendo y el conocimiento sobre el producto, las decisiones tomadas y los aprendizajes de usuarios está disperso en múltiples herramientas, documentos y conversaciones informales. Necesito un sistema que centralice este conocimiento y lo haga accesible para tomar mejores decisiones más rápido.

Objetivo: Diseñar un sistema de gestión del conocimiento de producto completo que sirva como fuente única de verdad para todo el equipo.

instrucción principal:
Crea un sistema integral de gestión del conocimiento de producto:

1. ARQUITECTURA DEL KNOWLEDGE BASE DE PRODUCTO
Define la estructura del repositorio de conocimiento:
- Taxonomía de documentos de producto (tipo, estado, audiencia)
- Jerarquía: Estrategia > Iniciativas > Features > Experimentos
- Sistema de versionado para documentos vivos
- Proceso de lifecycle de documentos (borrador, revisión, aprobado, archivado)
- Owners y revisores por tipo de documento
- Política de acceso por nivel (público, equipo, liderazgo)

2. PLANTILLAS ESTÁNDAR DE PRODUCTO
Crea plantillas completas para:
- PRD (Product Requirements Document): estructura completa con secciones de contexto, problema, solución, métricas y riesgos
- Ficha de iniciativa estratégica: vinculación a OKRs, estimación de impacto y recursos
- Nota de decisión: contexto, alternativas evaluadas, decisión tomada y revisión futura
- Resumen de investigación de usuario: metodología, hallazgos, insights y recomendaciones
- Retrospectiva de feature: métricas alcanzadas vs. esperadas, aprendizajes y próximos pasos
- Brief de experimento A/B: hipótesis, diseño, criterios de éxito y plan de análisis

3. SISTEMA DE GESTIÓN DEL ROADMAP
Estructura la documentación del roadmap:
- Now/Next/Later: formato y criterios de priorización
- Comunicación del roadmap por audiencia (equipo, stakeholders, clientes)
- Registro de cambios en el roadmap con justificaciones
- Proceso de solicitudes de features y cómo se evalúan
- OKRs y su vinculación a items del roadmap

4. REPOSITORIO DE CONOCIMIENTO DEL CLIENTE
Organiza el conocimiento sobre los usuarios:
- Perfiles de buyer persona y user persona actualizados
- Mapa de customer journey por segmento
- Jobs to be done (JTBD) documentados
- Base de datos de entrevistas de usuario (anonimizadas)
- Síntesis de insights cualitativos y cuantitativos
- Mapa de pain points por etapa del ciclo de vida

5. GESTIÓN DE APRENDIZAJES Y EXPERIMENTOS
Crea el sistema de aprendizaje continuo:
- Registro de hipótesis testadas y resultados
- Biblioteca de experimentos: éxitos, fracasos y aprendizajes
- Proceso de difusión de insights al resto del equipo
- Sesiones de product review y cómo se documenta
- Newsletter interno de producto con learnings periódicos

6. ONBOARDING DE NUEVOS PMs
Diseña el programa de incorporación:
- Ruta de aprendizaje para PMs junior, mid y senior
- Documentos clave que deben leer en las primeras 2 semanas
- Sesiones de contexto con cada área de la empresa
- Primer proyecto asignado y criterios de éxito
- Sistema de buddy/mentor y frecuencia de check-ins

7. MÉTRICAS DE SALUD DEL KNOWLEDGE BASE
Define indicadores de gestión del conocimiento:
- Porcentaje de features con PRD aprobado
- Tiempo medio desde decisión hasta documentación
- Tasa de consulta de documentos por tipo
- Satisfacción del equipo con la documentación disponible

El sistema debe ser tan fácil de mantener como de consultar, con el menor overhead posible para el equipo de producto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Documentación y gestión del conocimiento de producto',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Diseñar programas de formación y desarrollo del talento con IA',
                'description'      => 'Crea planes de desarrollo profesional, matrices de competencias y programas de formación personalizados para cada rol usando IA como co-diseñadora.',
                'prompt_content'   => <<<'EOT'
Actúa como un Chief Learning Officer (CLO) con experiencia en organizaciones de 500 a 5.000 empleados, especializado en diseñar ecosistemas de aprendizaje que impulsan tanto el desarrollo individual como los resultados de negocio.

Contexto: El departamento de RRHH necesita modernizar su enfoque de formación y desarrollo. Actualmente la formación es reactiva (se forma cuando hay un problema), poco personalizada y sin medición del impacto en el negocio. Necesito transformar esto en un sistema estratégico de gestión del talento y el aprendizaje.

Objetivo: Diseñar un ecosistema de aprendizaje corporativo completo que desarrolle talento de forma proactiva, personalizada y medible.

instrucción principal:
Desarrolla un sistema integral de formación y desarrollo del talento:

1. MARCO ESTRATÉGICO DE LEARNING & DEVELOPMENT
Define la estrategia de aprendizaje:
- Visión y misión del área de L&D
- Vinculación de competencias a objetivos estratégicos de la empresa
- Modelo de madurez del aprendizaje organizacional (niveles 1-5)
- Roles y responsabilidades en el ecosistema de aprendizaje
- Presupuesto de formación y criterios de asignación
- Política de formación: quién accede a qué y cuándo

2. MATRIZ DE COMPETENCIAS POR ROL
Construye el framework de competencias:
- Competencias corporativas (para toda la organización)
- Competencias por familia de puestos
- Competencias técnicas por rol específico
- Niveles de dominio: inicial, desarrollando, competente, experto
- Indicadores observables por competencia y nivel
- Proceso de evaluación de competencias (autoevaluación + manager)

3. PLANES DE DESARROLLO INDIVIDUALES (IDP)
Diseña la metodología de planes personales:
- Plantilla de IDP: situación actual, objetivos 12 meses, acciones y recursos
- Proceso de conversación de desarrollo manager-empleado
- Frecuencia de revisión y actualización del IDP
- Tipos de experiencias de desarrollo: 70-20-10 model aplicado
- Conexión del IDP con la evaluación del desempeño
- Catálogo de recursos de aprendizaje disponibles

4. CATÁLOGO DE PROGRAMAS FORMATIVOS
Estructura el portfolio de formación:
- Programas de onboarding por nivel (individual contributor, manager, director)
- Academia de liderazgo: niveles y contenidos por etapa
- Formación técnica por área: desarrollo, datos, finanzas, operaciones
- Habilidades blandas: comunicación, gestión del tiempo, trabajo en equipo
- Formación obligatoria: compliance, seguridad, código de conducta
- Programas de alto potencial (HiPo)

5. EXPERIENCIAS DE APRENDIZAJE VARIADAS
Diseña un mix de modalidades de aprendizaje:
- e-Learning: criterios de selección de plataforma y contenidos
- Mentoring y coaching: estructura del programa y selección de mentores
- Job rotation y stretch assignments: proceso y criterios
- Comunidades de práctica: cómo crear y sostenerlas
- Learning sprints: formato intensivo de 2 semanas por competencia
- Peer learning: aprendizaje entre iguales con estructura

6. MEDICIÓN DEL IMPACTO
Implementa el modelo de evaluación Kirkpatrick:
- Nivel 1 (Reacción): encuestas de satisfacción post-formación
- Nivel 2 (Aprendizaje): evaluaciones de conocimiento y habilidad
- Nivel 3 (Comportamiento): observación de transferencia al puesto
- Nivel 4 (Resultados): impacto en KPIs de negocio
- ROI de formación: cálculo y comunicación a dirección

7. TECNOLOGÍA Y HERRAMIENTAS
Define el stack tecnológico de L&D:
- LMS: criterios de selección y funcionalidades necesarias
- Herramientas de autoría de contenidos
- Plataformas de microlearning y mobile learning
- Sistema de gestión de competencias y IDPs
- Analytics de aprendizaje y reporting

Incluye un roadmap de implementación de 18 meses con prioridades y quick wins para los primeros 90 días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Desarrollo del talento y formación corporativa en RRHH',
                'vote_score'       => 52,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Formación en cumplimiento normativo y finanzas corporativas con IA',
                'description'      => 'Diseña programas de formación obligatoria en compliance financiero, normativas contables y buenas prácticas fiscales adaptados a cada nivel organizativo.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en formación financiera y compliance corporativo con experiencia en diseñar programas de capacitación regulatoria para empresas del sector financiero, industrial y servicios. Conoces la normativa NIIF/IFRS, SOX, GDPR aplicado a datos financieros y regulaciones locales.

Contexto: El departamento financiero necesita un programa de formación en cumplimiento normativo que garantice que todos los empleados con responsabilidades financieras conocen y aplican correctamente las normativas vigentes. Los perfiles van desde auxiliares contables hasta el CFO.

Objetivo: Crear un programa integral de formación en compliance financiero que sea eficaz, actualizable y medible.

instrucción principal:
Desarrolla un programa completo de formación en cumplimiento normativo financiero:

1. MAPA DE RIESGOS DE COMPLIANCE FINANCIERO
Analiza los riesgos de conocimiento:
- Inventario de normativas aplicables a la empresa
- Mapa de puestos con responsabilidades normativas
- Clasificación de riesgos por probabilidad e impacto
- Gaps de conocimiento por área y nivel jerárquico
- Priorización de temas formativos por criticidad regulatoria

2. ARQUITECTURA DEL PROGRAMA POR NIVEL
Diseña rutas formativas diferenciadas:
- Nivel Básico (toda la plantilla): conceptos fundamentales de compliance
- Nivel Operativo (auxiliares y técnicos): procedimientos y registros diarios
- Nivel Supervisor (mandos intermedios): supervisión, control y reporte
- Nivel Directivo (managers y directores): gobierno, estrategia y responsabilidad
- Nivel Ejecutivo (C-Suite): reporte regulatorio y responsabilidad fiduciaria

3. MÓDULOS DE FORMACIÓN OBLIGATORIA
Desarrolla contenido para cada módulo:
- Módulo 1: Marco normativo financiero aplicable (NIIF, PGC, normativa local)
- Módulo 2: Control interno y gestión de riesgos financieros
- Módulo 3: Prevención del blanqueo de capitales y financiación del terrorismo
- Módulo 4: Protección de datos financieros y ciberseguridad
- Módulo 5: Ética financiera y código de conducta corporativo
- Módulo 6: Fiscalidad: IVA, IS, retenciones y obligaciones declarativas
- Módulo 7: Reporte financiero: estados financieros y notas

4. MATERIALES DE FORMACIÓN
Crea los siguientes recursos:
- Guías de bolsillo (quick reference cards) por normativa
- Casos prácticos reales (anonimizados) con resolución guiada
- Simulaciones de situaciones de riesgo compliance
- Glosario financiero-normativo con más de 80 términos
- FAQs por área: las preguntas más frecuentes del equipo

5. SISTEMA DE EVALUACIÓN Y CERTIFICACIÓN
Diseña el proceso de certificación:
- Evaluación inicial de conocimientos por rol
- Exámenes por módulo con umbral mínimo de aprobación
- Evaluación práctica: resolución de casos reales
- Certificación interna renovable anualmente
- Registro de certificaciones por empleado
- Plan de acción para no certificados

6. FORMACIÓN CONTINUA Y ACTUALIZACIÓN NORMATIVA
Establece el proceso de actualización:
- Sistema de alerta de cambios normativos
- Píldoras formativas de urgencia para cambios críticos
- Newsletter mensual de novedades regulatorias
- Sesiones de Q&A trimestrales con el equipo legal
- Proceso de actualización del material formativo

7. MEDICIÓN Y REPORTE A DIRECCIÓN
Define los KPIs del programa:
- Tasa de certificación por área y nivel
- Tiempo medio de completación de formación obligatoria
- Resultados de auditorías internas y externas post-formación
- Incidencias de compliance antes y después del programa
- ROI de la formación: coste vs. multas evitadas

Incluye un calendario de formación anual con las obligaciones mínimas por puesto y un sistema de recordatorios automáticos para renovaciones.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Compliance financiero y formación normativa',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión del conocimiento jurídico y formación legal corporativa con IA',
                'description'      => 'Organiza el conocimiento jurídico del departamento legal, crea programas de formación en compliance legal para toda la empresa y diseña sistemas de actualización normativa.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director Legal con experiencia en Legal Operations y gestión del conocimiento jurídico en departamentos legales in-house de empresas medianas y grandes. Conoces las mejores prácticas de Legal Knowledge Management y has implementado sistemas de formación legal para audiencias no juristas.

Contexto: El departamento legal de la empresa necesita dos cosas simultáneas: primero, organizar y sistematizar el conocimiento jurídico interno para no depender de personas concretas; segundo, diseñar programas de formación legal para el resto de la empresa (RRHH, Finanzas, Comercial) que les permitan actuar con autonomía en cuestiones legales habituales y escalar solo lo crítico.

Objetivo: Crear un sistema de gestión del conocimiento jurídico y un programa de formación legal corporativa eficaces y sostenibles.

instrucción principal:
Desarrolla un sistema integral de Legal Knowledge Management y formación legal:

1. ARQUITECTURA DEL CONOCIMIENTO JURÍDICO
Define la estructura del repositorio legal:
- Taxonomía jurídica por área: contratos, laboral, propiedad intelectual, protección de datos, societario
- Sistema de clasificación de documentos (tipo, materia, fecha, estado)
- Plantillas de documentos jurídicos estándar por tipo
- Base de datos de jurisprudencia relevante para el negocio
- Registro de precedentes: decisiones y criterios adoptados
- Proceso de actualización normativa y alertas legales

2. BIBLIOTECA DE PLANTILLAS JURÍDICAS
Crea un catálogo de documentos estándar:
- Contratos tipo: servicios, suministro, distribución, NDA, colaboración
- Documentos laborales: contratos, anexos, políticas, actas
- Documentos societarios: actas de consejo, poderes, certificados
- Documentos de protección de datos: registros de actividades, DPIAs, cláusulas
- Documentos de propiedad intelectual: cesiones, licencias, acuerdos
Para cada plantilla: guía de uso, campos a personalizar y advertencias legales.

3. PROGRAMA DE FORMACIÓN LEGAL PARA NO JURISTAS
Diseña la formación legal por departamento:
- Para RRHH: derecho laboral básico, despidos, contratación y brechas de datos
- Para Comercial: fundamentos contractuales, negociación y responsabilidad
- Para Finanzas: cumplimiento fiscal, blanqueo de capitales y reporting
- Para IT: protección de datos, ciberseguridad legal y licencias de software
- Para dirección: responsabilidad corporativa, gobierno y conflictos de interés
- Para toda la empresa: código de conducta, ética y canal de denuncias

4. SISTEMA DE CONSULTAS LEGALES INTERNAS
Estructura el proceso de soporte legal:
- Portal de consultas: formulario de solicitud con datos necesarios
- SLA de respuesta por tipo de consulta y urgencia
- FAQ legal: las 50 preguntas más frecuentes respondidas
- Árbol de decisión: ¿puedo decidir yo solo o necesito al equipo legal?
- Escalada: cuándo y cómo involucrar al departamento legal
- Sistema de seguimiento y cierre de consultas

5. GESTIÓN DE CONTRATOS Y COMPROMISOS
Diseña el sistema de gestión contractual:
- Inventario de contratos: categorías, vigencias y responsables
- Proceso de revisión de contratos recibidos de terceros
- Flujo de negociación y aprobación de contratos
- Sistema de alertas de vencimientos y renovaciones
- Proceso de firma electrónica e integración con el repositorio

6. COMPLIANCE LEGAL TRANSVERSAL
Estructura el programa de cumplimiento:
- Mapa de obligaciones legales por área y periodicidad
- Calendario de obligaciones: declaraciones, renovaciones, auditorías
- Plan de respuesta a inspecciones y requerimientos administrativos
- Gestión de sanciones y reclamaciones
- Programa de revisión interna periódica

7. MÉTRICAS DEL DEPARTAMENTO LEGAL
Define KPIs de gestión del conocimiento:
- Tiempo de respuesta a consultas internas
- Tasa de reutilización de plantillas y precedentes
- Reducción de consultas repetitivas tras formación
- Porcentaje de contratos gestionados sin intervención del equipo legal
- Satisfacción de los clientes internos con el soporte legal

Incluye ejemplos concretos de cómo implementar el sistema con herramientas accesibles y un plan de adopción para los primeros 6 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Legal knowledge management y formación legal corporativa',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Formación y base de conocimiento para equipos de Customer Support con IA',
                'description'      => 'Crea programas de formación para agentes de soporte, bases de conocimiento de autoservicio y sistemas de gestión del aprendizaje continuo en equipos de CS.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Customer Success con experiencia en construir y escalar equipos de soporte al cliente en empresas SaaS y e-commerce. Has diseñado programas de formación para agentes que han reducido el tiempo de resolución en un 35% y aumentado el CSAT en 15 puntos.

Contexto: El equipo de Customer Support está creciendo rápidamente y la calidad del servicio varía mucho entre agentes. El conocimiento crítico para resolver las consultas más frecuentes está en la cabeza de los agentes senior, y los nuevos tardan semanas en ser autosuficientes. Necesito sistematizar el conocimiento y la formación.

Objetivo: Crear un ecosistema de formación y gestión del conocimiento que estandarice la calidad del servicio y acelere el tiempo de onboarding de nuevos agentes.

instrucción principal:
Desarrolla un sistema completo de formación y gestión del conocimiento para Customer Support:

1. BASE DE CONOCIMIENTO INTERNA (AGENT HUB)
Diseña la arquitectura del repositorio interno:
- Árbol de categorías por tipo de consulta o producto
- Plantilla estándar para artículos internos: problema, solución, escalada, recursos
- Proceso de creación y aprobación de nuevo contenido
- Sistema de revisión periódica: artículos con fecha de revisión
- Marcado de artículos obsoletos o en revisión
- Búsqueda optimizada: tags, palabras clave y sinónimos

2. BASE DE CONOCIMIENTO EXTERNA (HELP CENTER)
Estructura la documentación de autoservicio:
- Arquitectura de categorías desde el punto de vista del cliente
- Guías de usuario paso a paso con screenshots
- Vídeos tutoriales: guión y estructura para los 10 temas más consultados
- FAQs dinámicas: las preguntas más frecuentes actualizadas semanalmente
- Chatbot de primer nivel: árbol de conversación para consultas habituales
- Métricas de autoservicio: deflection rate y artículos más útiles

3. PROGRAMA DE ONBOARDING DE AGENTES (30-60-90 DÍAS)
Diseña la ruta de incorporación:
- Semana 1-2: conocimiento de producto y empresa (shadowing)
- Semana 3-4: herramientas (CRM, helpdesk, chat) y procesos internos
- Mes 2: gestión supervisada de tickets con revisión diaria
- Mes 3: autonomía plena con objetivos de calidad progresivos
Incluye checklists de competencias por fase y criterios de progresión.

4. CURRÍCULO DE FORMACIÓN CONTINUA
Estructura los módulos de desarrollo:
- Comunicación escrita: empatía, claridad y tono de marca
- Resolución de conflictos y gestión de clientes difíciles
- Conocimiento de producto: sesiones mensuales de actualización
- Eficiencia: atajos, macros y gestión del tiempo en soporte
- Escalada: cuándo, cómo y a quién escalar
- Análisis de datos: lectura e interpretación de métricas propias

5. SISTEMA DE CALIDAD Y APRENDIZAJE
Diseña el proceso de QA y mejora:
- Rúbrica de evaluación de tickets: criterios y puntuación
- Proceso de calibración: sesiones de alineación entre revisores
- Feedback loop: cómo dar feedback constructivo post-revisión
- Biblioteca de tickets ejemplares: positivos y negativos con análisis
- Sesiones semanales de casos: revisión colectiva de situaciones complejas

6. GESTIÓN DEL CONOCIMIENTO EN TIEMPO REAL
Establece procesos de actualización dinámica:
- Proceso para que los agentes propongan nuevo contenido
- Bug bounty de conocimiento: incentivo por detectar artículos desactualizados
- Sincronización con el equipo de producto para cambios de features
- Canal de actualizaciones urgentes para el equipo (incidencias, bugs conocidos)
- Proceso de documentación post-escalada

7. MÉTRICAS DE FORMACIÓN Y CONOCIMIENTO
Define los KPIs del ecosistema:
- Tiempo de ramp-up: semanas hasta ticket score objetivo
- CSAT por agente y relación con formación recibida
- Tasa de uso de la base de conocimiento por agente
- Deflection rate del Help Center externo
- Porcentaje de resoluciones en primer contacto (FCR)
- Reducción de tickets repetidos tras actualización de KB

Incluye ejemplos de estructura de artículos y plantillas de feedback para que el sistema sea implementable desde el primer día.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Formación y knowledge management en Customer Support',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Sistema de gestión del conocimiento personal para freelancers con IA',
                'description'      => 'Diseña tu propio sistema de conocimiento como freelancer: captura aprendizajes de proyectos, organiza recursos y construye tu biblioteca profesional con ayuda de IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de productividad especializado en freelancers y trabajadores del conocimiento independientes. Conoces metodologías como Building a Second Brain (BASB), Zettelkasten, GTD aplicado al trabajo freelance y sistemas PKM (Personal Knowledge Management).

Contexto: Soy freelancer y llevo tiempo sintiendo que cada proyecto empiezo desde cero: repito procesos, pierdo tiempo buscando recursos que sé que tengo guardados en algún lugar, y no consigo capitalizar los aprendizajes de proyectos anteriores. Necesito un sistema de gestión del conocimiento personal que sea práctico y que realmente use.

Objetivo: Diseñar un sistema PKM (Personal Knowledge Management) adaptado a la realidad del freelancer que me permita trabajar más rápido, con mayor calidad y construir ventaja competitiva acumulativa.

instrucción principal:
Crea un sistema completo de gestión del conocimiento personal para freelancers:

1. FILOSOFÍA Y PRINCIPIOS DEL SISTEMA
Define la base conceptual:
- Por qué un PKM es una inversión, no un gasto de tiempo
- Principios de captura: qué guardar y qué descartar
- Principio de JUST IN TIME vs JUST IN CASE
- Regla del mínimo viable: el sistema más simple que funcione
- Hábitos de mantenimiento: frecuencia y tiempo invertido
- Cómo evolucionar el sistema sin que colapse

2. ARQUITECTURA DEL SISTEMA (ESTRUCTURA)
Diseña la organización del conocimiento:
- Sistema de carpetas o áreas: proyectos, áreas, recursos, archivo (PARA method)
- Taxonomía de etiquetas: cuántas, cuáles y cómo usarlas
- Convenciones de nomenclatura de notas y archivos
- Jerarquía: notas atómicas → MOC (Maps of Content) → proyectos
- Conexiones entre notas: cómo y cuándo enlazar ideas
- Inbox como zona de procesamiento: regla de bandeja vacía semanal

3. SISTEMA DE CAPTURA
Define cómo capturar conocimiento en el día a día:
- Herramientas de captura rápida (móvil, web, email)
- Plantillas de captura por tipo: artículo, libro, podcast, reunión, idea propia
- Proceso de procesamiento semanal del inbox
- Cómo convertir capturas crudas en notas permanentes
- Integración con tu flujo de trabajo habitual (sin fricción)

4. BIBLIOTECA PROFESIONAL POR PROYECTO
Estructura el conocimiento por proyecto:
- Plantilla de nota de proyecto: objetivo, contexto, recursos, aprendizajes
- Retrospectiva de proyecto: qué funcionó, qué no y qué llevarías al siguiente
- Sistemas de plantillas reutilizables (propuestas, informes, entregables)
- Banco de fragmentos de código, textos o diseños reutilizables
- Registro de clientes: preferencias, historial y contexto de comunicación

5. SISTEMA DE DESARROLLO PROFESIONAL
Gestiona tu aprendizaje continuo:
- Mapa de competencias: dónde estás y adónde quieres ir
- Plan de aprendizaje trimestral con recursos seleccionados
- Notas de libros: cómo resumir y conectar con tu práctica
- Seguimiento de cursos: notas, proyectos prácticos y aplicaciones
- Reflexiones profesionales periódicas: diario de carrera

6. MONETIZACIÓN DEL CONOCIMIENTO ACUMULADO
Convierte tu PKM en ventaja competitiva:
- Cómo crear contenido (posts, newsletters, vídeos) desde tus notas
- Reutilización de materiales entre proyectos similares
- Construcción de un portfolio de casos de estudio
- Creación de productos digitales basados en tu conocimiento
- Posicionamiento como experto a partir de tus aprendizajes documentados

7. MANTENIMIENTO Y EVOLUCIÓN
Establece rutinas de mantenimiento:
- Revisión diaria: 10 minutos de procesamiento y captura
- Revisión semanal: limpieza del inbox y organización
- Revisión mensual: actualización de proyectos activos y áreas
- Revisión trimestral: revisión de objetivos y sistema en general
- Señales de que el sistema necesita simplificarse o restructurarse

Adapta las recomendaciones a herramientas accesibles (Notion, Obsidian, Roam o incluso carpetas y archivos de texto) y enfócate en que el sistema sea sostenible en solitario, sin equipo de soporte.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Productividad y gestión del conocimiento para freelancers',
                'vote_score'       => 58,
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
