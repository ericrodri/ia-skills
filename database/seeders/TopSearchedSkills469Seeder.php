<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills469Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Base de conocimiento de marketing con IA',
                'description'      => 'Crea y gestiona una base de conocimiento inteligente para tu equipo de marketing, usando IA para organizar campañas, aprendizajes y mejores prácticas.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión del conocimiento aplicada al marketing. Tu objetivo es ayudarme a construir una base de conocimiento inteligente para el equipo de marketing de mi empresa.

**Contexto de la tarea:**
Necesito organizar todo el aprendizaje acumulado de nuestras campañas de marketing: qué funcionó, qué falló, qué audiencias respondieron mejor, qué mensajes tuvieron mayor conversión y qué lecciones aprendidas debemos trasladar a futuros proyectos.

**Fase 1 — Auditoría del conocimiento existente:**
Actúa como consultor de knowledge management. Hazme las siguientes preguntas de forma conversacional para entender qué conocimiento tenemos disperso:
- ¿Dónde guardamos actualmente los reportes de campañas anteriores?
- ¿Tenemos documentados los buyer personas y sus actualizaciones?
- ¿Existe algún repositorio de copies, creatividades o mensajes que funcionaron?
- ¿Cómo onboardeamos a nuevos miembros del equipo de marketing?
- ¿Qué conocimiento se pierde cuando alguien sale del equipo?

**Fase 2 — Diseño de la estructura de la base de conocimiento:**
Con la información que me proporciones, diseña una arquitectura de base de conocimiento con las siguientes secciones:
1. Biblioteca de campañas (con plantillas de documentación estandarizada)
2. Repositorio de audiencias y segmentación
3. Banco de mensajes y copies de alto rendimiento
4. Lecciones aprendidas por canal (email, redes sociales, SEM, contenido)
5. Guías de onboarding para nuevos marketers
6. Calendario de revisión del conocimiento (knowledge review)

**Fase 3 — Generación de contenido wiki:**
Para cada sección, genera:
- Una plantilla de documentación estructurada
- Un ejemplo completo relleno con datos ficticios pero realistas
- Un checklist de calidad para validar que el conocimiento está bien documentado
- Etiquetas y metadatos recomendados para facilitar la búsqueda

**Fase 4 — Sistema de transferencia de conocimiento:**
Diseña un protocolo de transferencia de conocimiento que incluya:
- Proceso de offboarding: cómo capturar el conocimiento cuando alguien deja el equipo
- Proceso de onboarding: cómo acelerar el aprendizaje de nuevos miembros
- Revisiones trimestrales: cómo mantener el conocimiento actualizado y relevante
- Mecanismos de contribución: cómo incentivar al equipo a documentar aprendizajes

**Fase 5 — Implementación con IA generativa:**
Propón cómo usar Claude u otras herramientas de IA para:
- Responder preguntas del equipo consultando la base de conocimiento
- Generar resúmenes automáticos de campañas pasadas
- Sugerir aprendizajes relevantes cuando se planifica una nueva campaña
- Identificar gaps en el conocimiento documentado

**Entregables esperados:**
Al finalizar, quiero tener:
1. Un mapa completo de la estructura de la base de conocimiento
2. Al menos 3 plantillas de documentación listas para usar
3. Un plan de implementación en 90 días
4. Un conjunto de prompts reutilizables para consultar y enriquecer la base de conocimiento con IA

Comienza con la Fase 1 y guíame de forma interactiva a través del proceso completo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Organizar el conocimiento acumulado de campañas de marketing y crear un sistema de aprendizaje organizacional escalable.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Wiki técnica generativa para equipos de desarrollo',
                'description'      => 'Automatiza la creación y mantenimiento de documentación técnica usando IA, desde decisiones de arquitectura hasta guías de onboarding para nuevos desarrolladores.',
                'prompt_content'   => <<<'EOT'
Eres un experto en documentación técnica y gestión del conocimiento en equipos de ingeniería de software. Tu misión es ayudarme a construir una wiki técnica viva y generativa para mi equipo de desarrollo.

**El problema que quiero resolver:**
La documentación técnica de nuestro equipo está desactualizada, dispersa entre Confluence, comentarios en código, Slack y en la cabeza de las personas con más antigüedad. Los nuevos desarrolladores tardan semanas en ser productivos y constantemente interrumpen a seniors con preguntas repetitivas.

**Paso 1 — Diagnóstico de deuda de conocimiento:**
Analiza el estado actual de nuestra documentación haciéndome preguntas sobre:
- Stack tecnológico y decisiones de arquitectura documentadas (ADRs)
- Proceso de setup del entorno de desarrollo local
- Convenciones de código, naming y estructura de proyectos
- Procesos de code review, merge y despliegue
- Runbooks para incidencias comunes
- Onboarding técnico actual (¿cuántos días tarda un desarrollador en hacer su primer commit en producción?)

**Paso 2 — Arquitectura de la wiki técnica:**
Basándote en mis respuestas, diseña una estructura jerárquica para la wiki con estas categorías:
1. Getting Started (setup local, primer día, primeras dos semanas)
2. Arquitectura del sistema (diagramas, decisiones, trade-offs)
3. Guías de desarrollo (convenciones, patrones, anti-patrones)
4. Operaciones y DevOps (despliegues, monitoreo, alertas, rollbacks)
5. Base de datos (modelos, migraciones, consultas frecuentes)
6. APIs e integraciones (contratos, autenticación, límites, errores)
7. Troubleshooting (errores comunes y sus soluciones)
8. Decisiones técnicas (ADR archive con contexto histórico)

**Paso 3 — Generación automática de documentación:**
Para cada sección, genera:
- Una plantilla markdown lista para rellenar
- Un ejemplo completo con contenido técnico realista
- Un conjunto de preguntas que debe responder la documentación
- Criterios de "documentación suficiente" para validación

**Paso 4 — Protocolo de mantenimiento vivo:**
Diseña un sistema para mantener la wiki actualizada:
- Reglas de Git hooks para recordar actualizar docs con cada PR
- Proceso de revisión de documentación en sprint review
- Responsables por sección (documentation owners)
- Métricas para medir la calidad y uso de la documentación (searches, page views, thumbs up/down)
- Proceso de deprecación de documentación obsoleta

**Paso 5 — IA como asistente de documentación:**
Propón flujos concretos donde la IA ayude a:
- Generar el borrador de un ADR a partir de una conversación en Slack
- Actualizar documentación cuando cambia código (análisis de diff)
- Responder preguntas técnicas citando la documentación existente
- Identificar documentación desactualizada comparando código y docs
- Generar guías de onboarding personalizadas por rol (frontend, backend, fullstack, DevOps)

**Paso 6 — Plan de implementación:**
Crea un roadmap de 12 semanas para implementar la wiki técnica, con:
- Semanas 1-2: auditoría y priorización de gaps críticos
- Semanas 3-6: creación del contenido fundacional
- Semanas 7-10: automatización y herramientas de mantenimiento
- Semanas 11-12: métricas de adopción y iteración

Al final, quiero tener una wiki que un desarrollador nuevo pueda usar para ser autónomo en 5 días en lugar de 3 semanas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Crear una documentación técnica viva que reduzca el tiempo de onboarding y la dependencia de conocimiento tácito en el equipo de desarrollo.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Sistema de conocimiento de diseño y brand assets con IA',
                'description'      => 'Organiza el conocimiento de diseño de tu equipo: decisiones de sistemas de diseño, principios de marca, lecciones de proyectos y guías de onboarding para diseñadores.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión del conocimiento aplicado a equipos de diseño. Tu objetivo es ayudarme a crear un sistema centralizado de conocimiento de diseño que preserve las decisiones, principios y aprendizajes del equipo.

**Contexto:**
En mi equipo de diseño, cada proyecto genera aprendizajes valiosos sobre la marca, los usuarios y las soluciones que funcionan. Pero ese conocimiento se pierde entre presentaciones antiguas, Figma sin organizar, Notion disperso y la memoria de diseñadores que luego se van. Necesito un sistema que capture y haga accesible ese conocimiento.

**Diagnóstico inicial:**
Responde a estas preguntas primero para entender mi situación actual:
- ¿Tenemos un sistema de diseño documentado o es una colección de componentes sin reglas claras?
- ¿Dónde guardamos las decisiones de diseño y sus justificaciones (design rationale)?
- ¿Cómo documentamos los hallazgos de investigación de usuarios?
- ¿Los principios de marca están documentados de forma que un nuevo diseñador los entienda en un día?
- ¿Qué pasa cuando un diseñador senior deja el equipo?

**Estructura del repositorio de conocimiento de diseño:**
Diseña una wiki de diseño con estas secciones:

1. **Fundamentos de Marca**
   - Principios de identidad visual (con ejemplos de uso correcto e incorrecto)
   - Tono y voz visual
   - Decisiones de diseño fundacionales y su porqué

2. **Sistema de Diseño**
   - Documentación de componentes (cuándo usar cada uno y por qué)
   - Patrones de interacción aprobados
   - Anti-patrones: qué no hacer y por qué no funciona

3. **Investigación de Usuarios**
   - Repositorio de insights por segmento
   - Síntesis de entrevistas y tests de usabilidad
   - Evolución de los user personas

4. **Decisiones de Diseño (Design Decisions Log)**
   - Plantilla para documentar: problema, opciones consideradas, decisión tomada, criterios usados, resultado medido

5. **Proyectos y Post-Mortems**
   - Plantilla de retrospectiva de diseño por proyecto
   - Lecciones aprendidas organizadas por tipo de proyecto

6. **Onboarding de Diseñadores**
   - Plan de 30 días para nuevos diseñadores
   - Lecturas obligatorias y recursos de contexto
   - Proyectos de rampa de entrada

**Generación de contenido con IA:**
Para cada sección, crea:
- Plantilla estructurada lista para usar
- Ejemplo completo con contenido de diseño realista
- Checklist de validación de calidad

**Flujos de IA para mantener el conocimiento vivo:**
Diseña prompts específicos para:
- Generar el resumen de decisiones de diseño de una reunión
- Extraer insights de un informe de investigación de usuarios
- Crear el onboarding personalizado para un nuevo diseñador especializado en producto móvil
- Identificar inconsistencias entre decisiones antiguas y estándares actuales
- Generar una guía de uso de un componente del sistema de diseño a partir de sus especificaciones en Figma

**Plan de mantenimiento:**
Establece un ritual de gestión del conocimiento de diseño:
- Design knowledge review mensual (qué añadir, qué actualizar, qué archivar)
- Responsable de documentation cada sprint
- Proceso para capturar decisiones en tiempo real (no post-hoc)
- Métricas de uso y calidad de la documentación

Entrega al final un plan de implementación de 8 semanas y un conjunto de 10 prompts reutilizables para el equipo de diseño.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Preservar el conocimiento de diseño del equipo y acelerar el onboarding de nuevos diseñadores mediante una wiki generativa.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Base de conocimiento de ventas y mejores prácticas con IA',
                'description'      => 'Crea un repositorio inteligente de técnicas de ventas, objeciones frecuentes, casos de éxito y playbooks para acelerar el rendimiento de todo el equipo comercial.',
                'prompt_content'   => <<<'EOT'
Eres un experto en enablement de ventas y gestión del conocimiento comercial. Tu objetivo es ayudarme a construir una base de conocimiento de ventas que capture las mejores prácticas del equipo y las haga accesibles a todos.

**El problema que resolvemos:**
El conocimiento de ventas en la mayoría de las empresas vive en la cabeza del top performer. Cuando ese vendedor se va, el conocimiento desaparece. Los nuevos comerciales tardan meses en alcanzar la productividad de sus compañeros más experimentados. Las objeciones se responden de forma inconsistente y los casos de éxito no se documentan para ser replicados.

**Fase 1 — Auditoría del conocimiento de ventas:**
Hazme preguntas estructuradas para entender qué tenemos:
- ¿Tenemos un playbook de ventas documentado? ¿Está actualizado?
- ¿Cómo documentamos las objeciones más frecuentes y las respuestas que funcionan?
- ¿Guardamos los casos de éxito con suficiente detalle para que otros los repliquen?
- ¿Cómo onboardeamos a nuevos vendedores? ¿Cuánto tarda el primer cierre?
- ¿Qué herramientas usamos y dónde vive la información (CRM, email, hojas de cálculo)?

**Fase 2 — Estructura de la base de conocimiento de ventas:**

1. **Playbook de Ventas**
   - Metodología de venta adoptada (SPIN, Challenger, MEDDIC, etc.)
   - Proceso de venta paso a paso con gates de calificación
   - Scripts de prospección por canal (email, teléfono, LinkedIn, referidos)

2. **Banco de Objeciones**
   - Las 20 objeciones más frecuentes con respuestas validadas
   - Objeciones por etapa del proceso (prospección, demo, negociación, cierre)
   - Señales de compra ocultas detrás de objeciones comunes

3. **Biblioteca de Casos de Éxito**
   - Plantilla: cliente, problema, solución, resultado medido, cita del cliente
   - Casos organizados por industria, tamaño de empresa y caso de uso
   - Stories de venta listas para usar en conversaciones

4. **Inteligencia Competitiva**
   - Comparativas por competidor (nosotros vs. ellos)
   - Cómo ganar cuando el cliente menciona al competidor X
   - Precios y posicionamiento actualizado

5. **Onboarding Comercial**
   - Plan de rampa de 90 días para nuevos vendedores
   - Simulaciones de llamadas y roleplay de escenarios clave
   - Criterios de graduación por etapa del onboarding

6. **Lecciones de Deals Perdidos**
   - Plantilla de post-mortem de deals perdidos
   - Patrones comunes de pérdida y cómo evitarlos
   - Señales tempranas de deals en riesgo

**Fase 3 — Generación de contenido con IA:**
Crea para cada sección:
- Plantilla de documentación lista para rellenar
- Ejemplo completo con un caso de venta B2B SaaS realista
- Instrucciones para que un vendedor pueda contribuir en menos de 10 minutos

**Fase 4 — IA como coach de ventas:**
Diseña flujos donde Claude actúe como:
- Coach de objeciones: el vendedor comparte una objeción y Claude sugiere la mejor respuesta de la base de conocimiento
- Preparador de cuentas: antes de una demo, Claude genera un briefing del cliente y las preguntas más relevantes
- Analizador de llamadas: el vendedor comparte el resumen de una llamada y Claude extrae los aprendizajes clave
- Generador de follow-ups: Claude propone el email de seguimiento personalizado según el estado del deal

**Plan de implementación:**
Crea un roadmap de 60 días para implementar la base de conocimiento de ventas, con responsables, hitos y métricas de adopción.

Al finalizar, quiero 5 prompts reutilizables para que los vendedores usen Claude como asistente de ventas en su día a día.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Capturar y escalar el conocimiento de los mejores vendedores para acelerar el rendimiento de todo el equipo comercial.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión del conocimiento de producto con IA',
                'description'      => 'Construye un sistema de conocimiento de producto que centralice decisiones, aprendizajes de usuarios, roadmap histórico y contexto estratégico para todo el equipo de producto.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión del conocimiento aplicado a equipos de producto. Tu objetivo es ayudarme a crear un repositorio de conocimiento de producto que preserve el contexto de todas las decisiones tomadas, los experimentos realizados y los aprendizajes obtenidos.

**El problema central:**
Los equipos de producto toman cientos de decisiones cada trimestre. El contexto de por qué se tomó cada decisión —las métricas que lo motivaron, las alternativas descartadas, los riesgos considerados— rara vez se documenta. Cuando el equipo cambia, el nuevo equipo repite los mismos errores o revierte decisiones sin entender por qué se tomaron.

**Diagnóstico inicial:**
Para entender tu situación, responde:
- ¿Dónde documentamos los PRDs y cuánto tiempo viven después de que la feature se lanza?
- ¿Tenemos un archivo de experimentos y sus resultados (A/B tests, feature flags, betas)?
- ¿Cómo guardamos los hallazgos de investigación de usuarios (entrevistas, encuestas, análisis de comportamiento)?
- ¿Los PMs tienen acceso al contexto histórico cuando revisan un área del producto?
- ¿Cómo onboardeamos a nuevos PMs? ¿Cuánto tiempo tardan en tener contexto suficiente?

**Arquitectura del conocimiento de producto:**

1. **Decisiones de Producto (Product Decision Log)**
   - Plantilla: problema, métricas que lo evidencian, opciones evaluadas, decisión tomada, criterios de éxito, resultado real
   - Organizado por área de producto y trimestre

2. **Repositorio de Experimentos**
   - Todos los A/B tests con hipótesis, resultados y conclusiones
   - Feature flags históricos y su impacto medido
   - Aprendizajes contraintuitivos (qué funcionó diferente a lo esperado)

3. **Investigación de Usuarios**
   - Síntesis de entrevistas por segmento y trimestre
   - Evolución de los pain points del usuario a lo largo del tiempo
   - Jobs-to-be-done documentados con evidencia

4. **Evolución del Roadmap**
   - Por qué se priorizó lo que se priorizó en cada ciclo
   - Items que se descartaron y por qué
   - Cambios de estrategia y su justificación

5. **Métricas e Indicadores**
   - Definición acordada de cada métrica clave
   - Evolución histórica de métricas por área
   - Contexto de anomalías (por qué subió o bajó algo en un período)

6. **Onboarding de Product Managers**
   - Guía de 60 días para nuevos PMs
   - Lecturas obligatorias por área de producto
   - Preguntas que el PM debe ser capaz de responder al mes de incorporarse

**Generación de conocimiento con IA:**
Para cada sección, genera:
- Plantilla lista para usar en Notion o Confluence
- Ejemplo completo con un caso de producto SaaS realista
- Ritual de captura: cuándo y cómo se documenta (durante el sprint, en el launch, en la retrospectiva)

**IA como copiloto de producto:**
Diseña flujos donde Claude:
- Genera el Product Decision Record después de una reunión de alineación
- Resume todos los experimentos de una área del producto en una síntesis ejecutiva
- Propone preguntas de investigación basándose en gaps detectados en el conocimiento
- Onboarda a un nuevo PM con un briefing de contexto del área que va a gestionar
- Identifica decisiones contradictorias entre diferentes períodos del producto

**Plan de 90 días:**
Diseña un plan de implementación con milestones semanales y métricas de éxito (tiempo de onboarding de PM, preguntas repetitivas en Slack reducidas, etc.).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Preservar el contexto histórico de decisiones de producto y acelerar el onboarding de nuevos PMs mediante un repositorio de conocimiento estructurado.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Sistema de conocimiento de RRHH y onboarding inteligente',
                'description'      => 'Crea una base de conocimiento de RRHH que automatice el onboarding, centralice políticas y procesos, y facilite el acceso a información para empleados y managers.',
                'prompt_content'   => <<<'EOT'
Eres un experto en People Operations y gestión del conocimiento organizacional. Tu objetivo es ayudarme a construir un sistema de conocimiento de RRHH que automatice el onboarding, centralice las políticas y permita a empleados y managers acceder a la información que necesitan de forma autónoma.

**El problema que abordamos:**
Los equipos de RRHH pasan entre el 30% y el 40% de su tiempo respondiendo las mismas preguntas repetitivas: ¿Cómo pido vacaciones? ¿Cuál es la política de gastos? ¿Qué beneficios tengo? Este tiempo podría dedicarse a iniciativas estratégicas si existiera una base de conocimiento inteligente y accesible.

**Diagnóstico de la situación actual:**
Para ayudarte mejor, dime:
- ¿Dónde viven actualmente las políticas de la empresa? ¿Están actualizadas?
- ¿Tenemos un proceso de onboarding documentado o cada HR generalista lo hace a su manera?
- ¿Cuántas preguntas repetitivas recibe el equipo de RRHH por semana (estimación)?
- ¿Qué herramientas usamos (HRIS, Slack, Notion, Confluence, intranet)?
- ¿Cuánto tiempo tarda un empleado nuevo en sentirse integrado y productivo?

**Estructura de la base de conocimiento de RRHH:**

1. **Políticas y Procedimientos**
   - Vacaciones, permisos y ausencias (con ejemplos de casos borde)
   - Política de gastos y reembolsos
   - Política de trabajo remoto e híbrido
   - Código de conducta y valores
   - Política de privacidad y uso de datos

2. **Onboarding por Rol**
   - Plan de 30-60-90 días por departamento
   - Checklist de setup técnico (herramientas, accesos, cuentas)
   - Personas clave que conocer en las primeras semanas
   - Primeras tareas y proyectos de rampa

3. **Ciclos de Desempeño**
   - Proceso de evaluación de desempeño documentado
   - Plantillas de feedback y one-on-ones
   - Criterios de promoción por nivel y departamento
   - Guía para managers: cómo gestionar conversaciones difíciles

4. **Beneficios y Compensación**
   - Catálogo completo de beneficios con instrucciones de uso
   - FAQ de compensación (sin datos privados)
   - Guía de beneficios para empleados nuevos

5. **Formación y Desarrollo**
   - Catálogo de formaciones disponibles
   - Proceso de solicitud de formación externa
   - Planes de carrera por área

6. **Offboarding**
   - Proceso de salida documentado
   - Entrevistas de salida y análisis de patrones
   - Transferencia de conocimiento del empleado saliente

**Automatización del onboarding con IA:**
Diseña un sistema de onboarding inteligente donde Claude:
- Genera el plan de onboarding personalizado según el rol, departamento y nivel del nuevo empleado
- Responde preguntas frecuentes de empleados citando la política correspondiente
- Crea el primer día de bienvenida (agenda, materiales, presentaciones)
- Genera el checklist de offboarding personalizado según el departamento y rol

**Flujos de IA para RRHH:**
Crea prompts para:
- Redactar actualizaciones de política de forma clara y sin ambigüedades
- Sintetizar resultados de encuestas de clima laboral
- Preparar el plan de acción después de una encuesta de engagement
- Generar la guía de beneficios personalizada por perfil de empleado

**Plan de implementación:**
Roadmap de 8 semanas para lanzar la base de conocimiento con métricas de éxito: reducción de preguntas repetitivas al equipo de RRHH, tiempo de respuesta de nuevos empleados en encuesta de 30 días, NPS de onboarding.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Automatizar el onboarding y centralizar el conocimiento de RRHH para liberar tiempo del equipo y mejorar la experiencia del empleado.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Repositorio de conocimiento financiero y procedimientos con IA',
                'description'      => 'Crea una base de conocimiento financiero que documente procedimientos contables, criterios de decisión, contexto regulatorio y lecciones aprendidas de cierres y auditorías.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión del conocimiento aplicado a departamentos financieros y de contabilidad. Tu objetivo es ayudarme a construir un repositorio de conocimiento financiero que preserve los procedimientos, criterios de decisión y aprendizajes institucionales del departamento.

**El reto específico del conocimiento financiero:**
El conocimiento financiero tiene características únicas: es altamente regulado, cambia con las normativas, requiere precisión absoluta y muchas veces reside en personas clave que conocen el contexto histórico de las cuentas. Cuando esa persona se va, los errores en cierres y auditorías se multiplican.

**Diagnóstico inicial:**
Para entender tu contexto, responde:
- ¿Tenemos manuales de procedimientos contables actualizados?
- ¿Cómo documentamos los criterios de clasificación contable en casos complejos?
- ¿Tenemos un registro de ajustes de auditorías anteriores y su justificación?
- ¿Cómo onboardeamos a nuevos miembros del equipo financiero?
- ¿Dónde guardamos el contexto de decisiones contables del pasado (provisiones, periodificaciones, tratamientos especiales)?

**Arquitectura del repositorio de conocimiento financiero:**

1. **Manual de Procedimientos Contables**
   - Proceso de cierre mensual, trimestral y anual (paso a paso con responsables)
   - Criterios de clasificación contable para casos frecuentes
   - Checklist de cierre con tiempos estimados por tarea

2. **Criterios de Decisión y Políticas Contables**
   - Política de capitalización vs. gasto
   - Criterios de provisión y estimaciones
   - Tratamiento de moneda extranjera
   - Política de valoración de activos

3. **Registro de Decisiones Contables Complejas**
   - Plantilla: situación, normativa aplicable, opciones, criterio adoptado, justificación, auditor consultado
   - Organizado por área contable y ejercicio fiscal

4. **Base de Conocimiento Regulatorio**
   - Cambios normativos recientes y su impacto en nuestros procedimientos
   - Interpretaciones específicas adoptadas por el departamento
   - Fechas clave regulatorias y sus implicaciones

5. **Lecciones de Auditorías**
   - Hallazgos de auditorías anteriores y acciones correctivas tomadas
   - Áreas de riesgo identificadas y controles implantados
   - Preguntas frecuentes de auditores y respuestas documentadas

6. **Onboarding Financiero**
   - Plan de incorporación de 60 días para nuevos analistas y controllers
   - Sistemas y herramientas con guías de uso
   - Cuentas contables clave y su lógica de uso

**Generación de contenido con IA:**
Para cada sección, genera:
- Plantilla estructurada con los campos mínimos necesarios
- Ejemplo completo con un caso realista (empresa mediana, sector servicios)
- Guía de uso para que el equipo financiero contribuya sin formación adicional

**IA como asistente financiero:**
Diseña flujos donde Claude ayude a:
- Redactar el criterio contable adoptado para una situación compleja, citando la normativa aplicable
- Generar el checklist de cierre personalizado para el mes siguiente
- Preparar el briefing de auditoría (resumen de cambios, riesgos identificados, documentación lista)
- Onboarding de un nuevo controller: generación del plan de incorporación personalizado

**Plan de implementación:**
Roadmap de 10 semanas para implementar el repositorio con criterios de éxito: tiempo de cierre reducido, número de errores en cierres, tiempo de onboarding de nuevos miembros del departamento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Preservar el conocimiento contable y financiero del departamento para reducir errores en cierres, facilitar auditorías y acelerar el onboarding.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Base de conocimiento legal y gestión de precedentes con IA',
                'description'      => 'Crea un sistema de gestión del conocimiento legal que centralice precedentes, criterios de interpretación, plantillas de contratos y lecciones de casos anteriores.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión del conocimiento aplicado a departamentos legales y despachos de abogados. Tu objetivo es ayudarme a construir un sistema de conocimiento legal que preserve los criterios de interpretación, los precedentes relevantes y las lecciones de casos anteriores.

**El reto del conocimiento legal:**
El conocimiento legal es acumulativo y contextual. Un criterio interpretativo adoptado en un contrato hace dos años puede ser contradictorio con uno adoptado el año pasado. Los nuevos abogados del equipo no tienen acceso al razonamiento detrás de las cláusulas y cometen errores que ya se cometieron antes. El tiempo de un abogado sénior se consume explicando contexto que debería estar documentado.

**Diagnóstico inicial:**
Para entender tu situación, responde:
- ¿Tenemos una biblioteca de contratos tipo con las cláusulas más habituales y sus variantes?
- ¿Documentamos los criterios de interpretación adoptados en negociaciones pasadas?
- ¿Guardamos el análisis legal de casos o solo los documentos finales?
- ¿Cómo onboardeamos a nuevos abogados o asesores del equipo?
- ¿Qué sistemas usamos para guardar contratos y documentos legales?

**Arquitectura del repositorio de conocimiento legal:**

1. **Biblioteca de Contratos y Cláusulas**
   - Contratos tipo por categoría (NDA, prestación de servicios, laboral, licencias, etc.)
   - Biblioteca de cláusulas con variantes por contexto (favorable, equilibrada, desfavorable)
   - Cláusulas que nunca aceptamos y su justificación
   - Cláusulas que siempre exigimos y su justificación

2. **Criterios de Interpretación Jurídica**
   - Posiciones adoptadas por el departamento en áreas grises
   - Criterios de interpretación para situaciones recurrentes
   - Evolución de posiciones ante cambios normativos

3. **Precedentes y Jurisprudencia Relevante**
   - Resoluciones judiciales y administrativas que afectan a nuestra actividad
   - Interpretaciones de autoridades regulatorias
   - Posición propia vs. precedente externo

4. **Registro de Casos y Asuntos**
   - Plantilla de case brief: hechos, normativa aplicable, análisis, resolución, lecciones
   - Casos perdidos y aprendizajes para no repetir
   - Estrategias que funcionaron en negociaciones o litigios

5. **Compliance y Regulación**
   - Obligaciones regulatorias por área de negocio
   - Calendario de cumplimiento (renovaciones, declaraciones, registros)
   - Cambios normativos recientes y su impacto

6. **Onboarding Legal**
   - Plan de incorporación para nuevos abogados o asesores
   - Mapa de las áreas legales de la empresa y su complejidad
   - Lecturas obligatorias de contexto

**Generación de contenido con IA:**
Para cada sección, genera:
- Plantilla estandarizada con los campos mínimos necesarios
- Ejemplo completo con un caso de empresa tecnológica B2B
- Protocolo de contribución: cuándo y cómo se documenta el conocimiento nuevo

**IA como asistente legal:**
Diseña flujos donde Claude ayude a:
- Revisar un contrato identificando cláusulas que difieren del estándar del departamento
- Generar el análisis inicial de un asunto legal citando precedentes del repositorio
- Redactar el post-mortem legal de un caso cerrado extrayendo las lecciones clave
- Preparar el briefing para un nuevo abogado que asume un área de la empresa

**Plan de implementación:**
Roadmap de 12 semanas con hitos de adopción y métricas de éxito: tiempo de revisión de contratos reducido, inconsistencias de criterio detectadas, tiempo de onboarding legal.

Nota importante: todo el conocimiento generado debe ser revisado por un abogado cualificado. Este sistema es un apoyo a la gestión del conocimiento, no un sustituto del criterio legal profesional.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Preservar el conocimiento legal del equipo, estandarizar criterios de interpretación y acelerar el trabajo con contratos y análisis jurídicos.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Base de conocimiento de soporte al cliente con IA',
                'description'      => 'Construye un sistema de conocimiento de Customer Success que centralice soluciones a problemas frecuentes, playbooks de gestión de cuentas y aprendizajes de churns y expansiones.',
                'prompt_content'   => <<<'EOT'
Eres un experto en Customer Success Operations y gestión del conocimiento en equipos de atención al cliente. Tu objetivo es ayudarme a crear una base de conocimiento de soporte que permita a todo el equipo resolver problemas con la calidad del agente más experto.

**El problema del conocimiento disperso en soporte:**
El equipo de soporte y Customer Success acumula un conocimiento enorme sobre los problemas de los clientes, las soluciones que funcionan y los patrones de churn. Pero ese conocimiento vive en conversaciones de Zendesk, en la cabeza de los agentes más veteranos o en emails que nadie vuelve a leer. El resultado: tiempo de resolución elevado, respuestas inconsistentes y errores repetidos.

**Diagnóstico inicial:**
Para entender tu situación, responde:
- ¿Tenemos una base de conocimiento de soporte actualizada o está desactualizada?
- ¿Cómo documentamos las soluciones a problemas nuevos que aparecen?
- ¿Los CSMs tienen playbooks para gestionar expansiones, renovaciones y riesgo de churn?
- ¿Documentamos por qué se van los clientes que hacen churn?
- ¿Cuánto tiempo tarda un agente nuevo en alcanzar la productividad de uno experimentado?

**Arquitectura de la base de conocimiento de CS:**

1. **Centro de Ayuda Interno (Knowledge Base)**
   - Soluciones a problemas técnicos frecuentes (con screenshots y pasos)
   - FAQs por segmento de cliente y tipo de producto
   - Escalados: cuándo y cómo escalar a producto, técnico o management
   - Plantilla de artículo de conocimiento con campos obligatorios

2. **Playbooks de Customer Success**
   - Playbook de onboarding de nuevo cliente (por segmento: SMB, mid-market, enterprise)
   - Playbook de QBR (Quarterly Business Review)
   - Playbook de gestión de riesgo de churn (señales, acciones, escalados)
   - Playbook de expansión y upsell
   - Playbook de renovación

3. **Inteligencia de Churn**
   - Análisis de churns: razones documentadas, señales previas, qué se intentó
   - Patrones de churn por segmento, industria y antigüedad
   - Acciones que funcionaron para recuperar clientes en riesgo

4. **Casos de Éxito y Expansiones**
   - Plantilla de caso de éxito: cliente, reto, solución, resultados medidos
   - Cómo se gestionó la expansión más reciente de cada tipo
   - Lecciones de QBRs que derivaron en expansión

5. **Gestión de Escalados**
   - Matriz de escalados: problema → responsable → SLA
   - Plantillas de comunicación para situaciones de crisis
   - Post-mortems de incidencias con impacto en clientes

6. **Onboarding de Agentes y CSMs**
   - Plan de 45 días para nuevos agentes de soporte
   - Plan de 60 días para nuevos CSMs
   - Simulaciones de conversaciones difíciles con clientes
   - Criterios de calidad de respuesta

**Generación de contenido con IA:**
Para cada sección, genera:
- Plantilla estructurada lista para usar en tu herramienta (Notion, Confluence, Zendesk Guide)
- Ejemplo completo con un caso realista de SaaS B2B
- Protocolo de actualización: quién actualiza, cuándo y cómo

**IA como copiloto de soporte:**
Diseña flujos donde Claude ayude a:
- Sugerir la solución más probable para un ticket dado el historial del cliente
- Generar el borrador de respuesta al cliente para que el agente revise y personalice
- Preparar el QBR con el resumen de la cuenta, métricas de uso y riesgos detectados
- Onboarding de un nuevo agente: generación de casos de práctica personalizados
- Análisis de churns del trimestre: extracción de patrones y recomendaciones

**Plan de implementación:**
Roadmap de 8 semanas con métricas de éxito: tiempo de resolución de tickets, CSAT, tiempo de onboarding de nuevos agentes, NPS de clientes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Centralizar el conocimiento de soporte y CS para resolver tickets más rápido, reducir el churn y acelerar el onboarding de nuevos agentes.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Sistema de conocimiento personal para freelancers con IA',
                'description'      => 'Crea tu propio segundo cerebro como freelancer: documenta procesos de trabajo, aprendizajes de proyectos, propuestas que funcionaron y conocimiento especializado acumulado.',
                'prompt_content'   => <<<'EOT'
Eres un experto en productividad personal y gestión del conocimiento para profesionales independientes. Tu objetivo es ayudarme a construir mi sistema de conocimiento personal como freelancer: un segundo cerebro que capture mi experiencia acumulada y me haga más eficiente en cada proyecto.

**El reto del freelancer:**
Como freelancer, soy mi propio equipo de una persona. Todo el conocimiento que acumulo —procesos de trabajo, propuestas que funcionaron, lecciones de cada cliente, especialización en mi área— vive únicamente en mi cabeza. Cuando termina un proyecto, esos aprendizajes se dispersan. Cuando aparece un cliente nuevo, empiezo desde cero en lugar de aprovechar lo aprendido antes.

**Diagnóstico de mi situación actual:**
Para ayudarte mejor, responde:
- ¿En qué área te especializas como freelancer (diseño, desarrollo, consultoría, marketing, redacción, etc.)?
- ¿Cuántos proyectos has completado aproximadamente en los últimos 2 años?
- ¿Guardas las propuestas y contratos que ganaste de forma organizada?
- ¿Documentas los procesos de trabajo que usas en cada proyecto?
- ¿Tienes un repositorio de entregables anteriores que puedas reutilizar?

**Arquitectura del sistema de conocimiento personal:**

1. **Portafolio y Casos de Estudio**
   - Plantilla de caso de estudio: cliente, reto, proceso, resultado, aprendizaje
   - Métricas de impacto documentadas por proyecto
   - Testimonios y referencias organizadas

2. **Biblioteca de Propuestas y Contratos**
   - Propuestas exitosas por tipo de proyecto y cliente
   - Análisis de por qué ganaste o perdiste cada propuesta
   - Plantilla de contrato con cláusulas estándar y variantes
   - Política de precios y criterios de pricing

3. **Procesos de Trabajo**
   - Proceso documentado para cada tipo de proyecto que haces frecuentemente
   - Checklists de entrega por tipo de proyecto
   - Herramientas y plantillas reutilizables
   - Onboarding de cliente: proceso estándar para iniciar un proyecto

4. **Conocimiento Especializado**
   - Resúmenes de libros, cursos y recursos consumidos
   - Aprendizajes técnicos organizados por tema
   - Referencias y fuentes de calidad por área
   - Notas de tendencias del sector

5. **Aprendizajes de Clientes y Proyectos**
   - Post-mortem de cada proyecto: qué salió bien, qué salió mal, qué haría diferente
   - Tipos de clientes: cuáles son más rentables y satisfactorios, cuáles evitar
   - Lecciones sobre gestión de expectativas y comunicación

6. **Red y Relaciones**
   - Contactos clave con contexto de la relación
   - Colaboradores frecuentes y sus especialidades
   - Oportunidades de referidos y alianzas

**Generación del sistema con IA:**
Para cada sección, crea:
- Plantilla lista para usar en Notion, Obsidian o tu herramienta preferida
- Ejemplo completo para un freelancer de tu especialidad
- Ritual de captura: cuándo y cómo añadir conocimiento (no más de 15 minutos por proyecto)

**IA como asistente personal:**
Diseña flujos donde Claude te ayude a:
- Escribir el post-mortem de un proyecto terminado a partir de tus notas
- Generar una propuesta nueva basándose en propuestas anteriores exitosas
- Preparar el briefing de cliente para el kick-off de un nuevo proyecto
- Extraer los puntos clave de un libro o curso para tu base de conocimiento
- Identificar qué tipo de clientes y proyectos te generan más valor (análisis de tu portafolio)

**Ritual de mantenimiento del segundo cerebro:**
Diseña una rutina sostenible:
- Revisión semanal: 20 minutos para capturar aprendizajes de la semana
- Revisión mensual: 45 minutos para organizar y conectar el conocimiento
- Revisión trimestral: 2 horas para actualizar la estrategia y portafolio

**Plan de implementación:**
Guíame paso a paso para tener el sistema operativo en 2 semanas, con los elementos más importantes primero y una curva de adopción sostenible para una persona.

Al final, entrégame 8 prompts reutilizables que pueda usar con Claude en mi día a día como freelancer para aprovechar mi base de conocimiento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir un segundo cerebro como freelancer para reutilizar conocimiento acumulado, acelerar propuestas y mejorar la rentabilidad de cada proyecto.',
                'vote_score'       => 41,
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
