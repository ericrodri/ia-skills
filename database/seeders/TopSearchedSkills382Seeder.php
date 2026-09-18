<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills382Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Automatización de campañas de marketing con IA',
                'description'      => 'Aprende a diseñar flujos de trabajo automatizados para campañas de marketing utilizando herramientas de IA. Desde la generación de copies hasta la segmentación de audiencias y el análisis de resultados, la IA puede reducir drásticamente el tiempo invertido en tareas repetitivas.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en marketing digital y automatización con IA con más de 10 años de experiencia diseñando flujos de trabajo eficientes para equipos de marketing de alto rendimiento.

Tu objetivo es ayudarme a construir un sistema de automatización completo para mis campañas de marketing usando herramientas de IA disponibles hoy en día.

**Contexto del proyecto:**
Soy responsable de marketing en una empresa [describe tu empresa: sector, tamaño, producto principal]. Actualmente dedico entre 15 y 20 horas semanales a tareas que podrían automatizarse: generación de copies, programación de publicaciones, segmentación de listas, análisis de métricas y creación de reportes.

**Fase 1 — Diagnóstico de procesos actuales:**
Primero, ayúdame a identificar qué tareas de mi flujo de marketing son candidatas ideales para la automatización con IA. Evalúa las siguientes categorías y dime cuáles tienen mayor potencial de ROI:
- Creación de contenido (blogs, redes sociales, email marketing, anuncios)
- Segmentación y personalización de audiencias
- Análisis de rendimiento y generación de reportes
- Atención a leads y nurturing automatizado
- SEO y optimización de contenido
- A/B testing y experimentación

**Fase 2 — Diseño del stack de herramientas:**
Recomiéndame un stack concreto de herramientas de IA para automatizar mi flujo de trabajo de marketing. Para cada herramienta incluye:
- Nombre y función principal
- Caso de uso específico en marketing
- Nivel de dificultad de implementación (1-5)
- Coste aproximado mensual
- Integración con otras herramientas del stack

**Fase 3 — Construcción de flujos de trabajo:**
Diseña para mí tres flujos de trabajo automatizados prioritarios:

Flujo 1 — Producción de contenido semanal:
Describe paso a paso cómo usar IA para pasar de una idea o keyword a un artículo de blog publicado, incluyendo briefing, redacción, revisión SEO, imágenes y publicación.

Flujo 2 — Campaña de email marketing:
Detalla cómo automatizar la segmentación, personalización del copy, programación y análisis de una campaña de email usando IA.

Flujo 3 — Análisis y reporte mensual:
Explica cómo usar IA para recopilar datos de múltiples fuentes, interpretarlos y generar un reporte ejecutivo listo para presentar.

**Fase 4 — Plan de implementación:**
Crea un plan de implementación de 8 semanas para adoptar estas automatizaciones, con hitos concretos, métricas de éxito y posibles obstáculos a anticipar.

**Formato de la respuesta:**
- Usa encabezados claros para cada fase
- Incluye ejemplos concretos y plantillas donde sea posible
- Proporciona estimaciones de tiempo ahorrado por semana
- Añade una tabla resumen de herramientas al final
- Incluye 3 advertencias sobre errores comunes al automatizar marketing con IA
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar flujos de automatización de marketing con IA',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Construcción de pipelines de desarrollo asistidos por IA',
                'description'      => 'Integra herramientas de IA en tu pipeline de desarrollo para acelerar la revisión de código, la generación de tests y la documentación automática. Este enfoque permite a los equipos de software reducir la deuda técnica mientras mantienen alta velocidad de entrega.',
                'prompt_content'   => <<<'EOT'
Actúa como un ingeniero de software senior especializado en DevOps y productividad de equipos de desarrollo, con experiencia integrando herramientas de IA en pipelines de CI/CD modernos.

Ayúdame a diseñar e implementar un pipeline de desarrollo potenciado por IA que mejore la calidad del código y la velocidad de entrega de mi equipo.

**Mi contexto actual:**
- Lenguaje principal: [especifica: Python, JavaScript, TypeScript, Go, Java, etc.]
- Framework: [especifica]
- Sistema de control de versiones: Git + [GitHub / GitLab / Bitbucket]
- Pipeline CI/CD actual: [especifica o indica si no tienes]
- Tamaño del equipo: [número de desarrolladores]
- Principales dolores: [revisiones de código lentas / tests insuficientes / documentación desactualizada / bugs en producción]

**Área 1 — Asistencia en escritura de código:**
Explica cómo configurar y aprovechar al máximo los asistentes de código IA (GitHub Copilot, Cursor, Continue, Tabnine) en mi stack. Incluye:
- Configuración recomendada para mi lenguaje
- Mejores prácticas para escribir prompts efectivos al codificar
- Cómo evitar que el asistente genere código inseguro o con deuda técnica
- Atajos de teclado y flujos de trabajo que maximizan la productividad

**Área 2 — Revisión de código automatizada con IA:**
Diseña un sistema de revisión de código asistida por IA que funcione como pre-check antes de que el código llegue a revisión humana. Incluye:
- Herramientas de revisión automática (CodeRabbit, Sourcery, etc.)
- Configuración de reglas personalizadas para mi proyecto
- Integración con pull requests y comentarios automáticos
- Métricas para medir la mejora en calidad

**Área 3 — Generación automática de tests:**
Muéstrame cómo usar IA para generar tests unitarios, de integración y end-to-end automáticamente. Explica:
- Qué herramientas usar para mi stack
- Cómo revisar y completar los tests generados por IA
- Estrategia para alcanzar cobertura mínima del 80% sin escribir cada test a mano
- Ejemplos de prompts para generar tests de casos límite

**Área 4 — Documentación automática:**
Crea un flujo de trabajo para mantener la documentación técnica actualizada automáticamente usando IA:
- Generación de JSDoc / docstrings desde código existente
- Actualización automática de READMEs
- Generación de diagramas de arquitectura desde el código
- Sincronización de changelogs con commits

**Área 5 — Detección de vulnerabilidades:**
Explica cómo incorporar análisis de seguridad con IA en el pipeline para detectar vulnerabilidades antes de que lleguen a producción.

**Entregable final:**
Proporciona un plan de implementación de 6 semanas con tareas concretas para cada área, métricas de éxito esperadas y estimación de horas de desarrollo ahorradas por sprint.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Integrar IA en el pipeline de desarrollo de software',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Flujo de trabajo de diseño acelerado con IA generativa',
                'description'      => 'Transforma tu proceso creativo integrando herramientas de IA generativa en cada etapa del diseño: desde la investigación de referencias hasta la entrega de assets finales. Aprende a usar la IA como co-creadora sin sacrificar tu visión artística.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de arte y diseñador UX/UI senior con amplia experiencia integrando herramientas de IA generativa en procesos creativos profesionales para agencias y startups.

Necesito diseñar un flujo de trabajo de diseño completo que incorpore IA generativa de forma estratégica, manteniendo la calidad y el criterio creativo.

**Mi perfil como diseñador:**
- Especialidad: [UX/UI / Gráfico / Motion / Branding / Ilustración]
- Herramientas actuales: [Figma / Adobe CC / Sketch / etc.]
- Tipos de proyectos: [apps / webs / branding / campañas / etc.]
- Nivel con IA generativa: [principiante / tengo algo de experiencia]

**Módulo 1 — Investigación y brief:**
Diseña un flujo para usar IA en la fase de investigación:
- Cómo usar Claude o ChatGPT para analizar briefs de clientes y extraer requisitos implícitos
- Prompt para generar moodboards conceptuales basados en descripción verbal
- Cómo usar Perplexity o similares para investigar competencia y tendencias de diseño
- Generación de personas de usuario usando IA a partir de datos de negocio

**Módulo 2 — Ideación y conceptualización:**
Explica cómo acelerar la fase de ideación con IA:
- Técnicas de prompting para Midjourney, Stable Diffusion y DALL-E orientadas a conceptos de diseño
- Cómo refinar y variar conceptos visuales iterativamente con IA
- Uso de IA para generar variaciones de paletas de color y tipografías
- Creación de storyboards y wireframes con asistencia de IA

**Módulo 3 — Producción y assets:**
Detalla cómo usar IA en la producción de materiales:
- Generación y retoque de imágenes para proyectos comerciales (Adobe Firefly, Generative Fill)
- Creación de ilustraciones estilo consistente usando IA
- Automatización de variantes para diferentes formatos y tamaños
- Eliminación de fondos, extensión de imágenes y composición asistida

**Módulo 4 — Texto y microcopy:**
Muéstrame cómo colaborar con IA para el contenido textual en diseños:
- Generación de microcopy UX (labels, botones, mensajes de error)
- Redacción de textos de placeholder realistas para mockups
- Localización y adaptación cultural de contenido con IA

**Módulo 5 — Presentación y entrega al cliente:**
Explica cómo usar IA para mejorar las presentaciones:
- Generación de narrativas para defender decisiones de diseño
- Creación de documentación de sistemas de diseño con IA
- Automatización de exports y preparación de assets de entrega

**Entregable:**
Crea una guía visual (en texto estructurado) del flujo de trabajo completo, con herramientas específicas para cada etapa, tiempo estimado ahorrado y advertencias sobre los límites éticos del uso de IA en diseño comercial.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Integrar IA generativa en el flujo creativo de diseño',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Automatización de prospección y seguimiento de ventas con IA',
                'description'      => 'Diseña un sistema de prospección inteligente que use IA para identificar leads de calidad, personalizar mensajes de contacto y automatizar los seguimientos. Reduce el tiempo de prospección manual hasta en un 60% sin perder el toque humano que cierra ventas.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en ventas B2B y automatización comercial con experiencia construyendo sistemas de prospección escalables para equipos de ventas en empresas de tecnología y servicios profesionales.

Quiero construir un sistema completo de prospección y seguimiento de ventas potenciado por IA que me permita aumentar el volumen de leads cualificados sin incrementar proporcionalmente el tiempo dedicado.

**Mi situación actual:**
- Tipo de ventas: [B2B / B2C / SaaS / Servicios profesionales / E-commerce]
- Ticket promedio: [rango en euros o dólares]
- Ciclo de venta promedio: [días/semanas/meses]
- CRM que uso: [Salesforce / HubSpot / Pipedrive / otro / ninguno]
- Principal problema: [falta de leads / bajo ratio de conversión / seguimientos inconsistentes / mensajes genéricos]

**Bloque 1 — Identificación y calificación de leads con IA:**
Diseña un sistema para encontrar y calificar leads automáticamente:
- Cómo usar LinkedIn Sales Navigator + IA para identificar el perfil de cliente ideal (ICP)
- Herramientas de enriquecimiento de datos (Apollo, Clay, Hunter) y cómo integrarlas con IA
- Creación de un scoring automático de leads basado en señales de intención de compra
- Prompt para que la IA analice un perfil de LinkedIn y determine si es un lead cualificado

**Bloque 2 — Personalización de mensajes a escala:**
Explica cómo generar mensajes de outreach genuinamente personalizados con IA:
- Framework para crear mensajes que no parezcan automatizados
- Técnica de "trigger-based messaging": cómo la IA detecta eventos (financiación, expansión, contrataciones) y los usa para personalizar
- Plantillas de mensajes para LinkedIn, email frío y seguimientos, con variables de personalización que la IA completa automáticamente
- Cómo evitar que los mensajes suenen robóticos o genéricos

**Bloque 3 — Secuencias de seguimiento automático:**
Diseña secuencias de seguimiento inteligentes:
- Estructura de una secuencia de 7 touchpoints que usa IA para adaptar el tono según la respuesta del lead
- Cuándo escalar de automatización a intervención humana
- Cómo usar IA para analizar las respuestas de leads y priorizar los que requieren atención inmediata
- Integración de las secuencias con el CRM para mantener el registro actualizado

**Bloque 4 — Preparación de reuniones con IA:**
Explica cómo usar IA antes de cada llamada o reunión de ventas:
- Investigación automatizada del prospecto (empresa, noticias recientes, competidores)
- Generación de agenda personalizada y preguntas de descubrimiento
- Anticipación de objeciones basada en el perfil del lead
- Resumen post-reunión automático con próximos pasos

**Bloque 5 — Análisis y optimización:**
Diseña un sistema de mejora continua basado en datos:
- Métricas clave a rastrear (tasa de apertura, respuesta, reuniones conseguidas, cierre)
- Cómo usar IA para analizar qué mensajes y secuencias convierten mejor
- Cadencia de revisión y optimización del sistema

**Entregable final:**
Proporciona un plan de implementación de 4 semanas con pasos concretos, herramientas específicas con sus costes aproximados y proyección de mejora en métricas de ventas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Automatizar prospección y seguimiento comercial con IA',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Uso de IA para acelerar la investigación de usuarios y síntesis de insights',
                'description'      => 'Integra herramientas de IA en tu proceso de investigación de usuarios para analizar entrevistas, identificar patrones y generar insights accionables en una fracción del tiempo. Pasa de semanas de análisis cualitativo a horas sin perder profundidad.',
                'prompt_content'   => <<<'EOT'
Actúa como un Product Manager senior especializado en investigación de usuarios y síntesis de datos cualitativos, con experiencia usando IA para acelerar procesos de discovery en equipos de producto ágiles.

Necesito construir un flujo de trabajo completo para realizar investigación de usuarios más rápida y profunda usando IA como herramienta de síntesis y análisis.

**Contexto de mi equipo:**
- Tipo de producto: [app móvil / plataforma web / SaaS / producto físico]
- Frecuencia de investigación: [semanal / mensual / por sprint / ad hoc]
- Volumen típico: [número de entrevistas o encuestas por ciclo]
- Herramientas actuales: [Notion / Dovetail / Airtable / Google Docs]
- Principal cuello de botella: [transcripción / síntesis / comunicación de insights / acceso a usuarios]

**Fase 1 — Diseño de la investigación con IA:**
Muéstrame cómo usar IA para diseñar mejor la investigación desde el inicio:
- Cómo usar Claude para refinar preguntas de investigación y asegurar que son abiertas y no sesgadas
- Generación de guiones de entrevista personalizados según el objetivo del estudio
- Creación de screeners de reclutamiento efectivos
- Diseño de encuestas con escalas y preguntas bien balanceadas

**Fase 2 — Procesamiento de entrevistas:**
Explica el flujo completo para procesar entrevistas con IA:
- Herramientas de transcripción automática (Otter.ai, Fathom, Fireflies) y configuración óptima
- Prompt para analizar una transcripción completa y extraer: citas clave, pain points, necesidades, comportamientos y emociones
- Cómo usar IA para identificar contradicciones entre lo que los usuarios dicen y lo que hacen
- Técnicas para preservar la voz del usuario al sintetizar con IA

**Fase 3 — Síntesis y affinity mapping:**
Diseña un proceso de síntesis asistida por IA:
- Cómo usar IA para agrupar observaciones de múltiples entrevistas por temas emergentes
- Generación automática de un affinity diagram en texto estructurado
- Identificación de patrones estadísticamente relevantes vs. casos aislados
- Prompt para comparar segmentos de usuarios y encontrar diferencias clave

**Fase 4 — Generación de insights y oportunidades:**
Explica cómo convertir datos en insights accionables con IA:
- Framework "Job to be Done" aplicado con IA a los datos de entrevistas
- Generación de hipótesis de producto a partir de los insights
- Priorización de oportunidades usando IA basada en frecuencia e impacto
- Creación de personas basadas en datos reales de entrevistas

**Fase 5 — Comunicación de resultados:**
Muéstrame cómo usar IA para comunicar hallazgos efectivamente:
- Generación de reportes ejecutivos de investigación en 15 minutos
- Creación de presentaciones de insights para stakeholders técnicos y no técnicos
- Documentación de hallazgos en formato consultable para el equipo

**Entregable:**
Un playbook completo del proceso con prompts específicos para cada etapa, estimación de tiempo ahorrado y ejemplos de output esperado en cada fase.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Acelerar investigación de usuarios con IA',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Automatización de procesos de RRHH con IA: selección y onboarding',
                'description'      => 'Optimiza los procesos más intensivos en tiempo de Recursos Humanos usando IA: cribado de CVs, generación de descripciones de puestos, automatización de comunicaciones con candidatos y diseño de planes de onboarding personalizados. Ahorra hasta 15 horas semanales en tareas administrativas.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en Recursos Humanos digitales y automatización de procesos de talento, con experiencia implementando soluciones de IA en departamentos de HR de empresas medianas y grandes.

Quiero diseñar un sistema de automatización integral para los procesos de selección y onboarding de mi departamento de RRHH usando herramientas de IA disponibles hoy.

**Contexto de mi departamento:**
- Tamaño de la empresa: [número de empleados]
- Volumen de contrataciones: [posiciones abiertas simultáneamente]
- Herramientas actuales de RRHH: [ATS: Workday / Greenhouse / BambooHR / otro]
- Procesos más costosos en tiempo: [cribado CVs / comunicación candidatos / entrevistas / onboarding / documentación]
- Sector: [tecnología / retail / servicios / industria / etc.]

**Módulo 1 — Atracción de talento con IA:**
Diseña un sistema para crear mejores ofertas de empleo más rápido:
- Prompt para generar descripciones de puesto inclusivas, atractivas y optimizadas para SEO en portales de empleo
- Cómo usar IA para analizar descripciones de empleo de competidores y mejorar las propias
- Generación de mensajes personalizados de outreach para candidatos pasivos en LinkedIn
- Creación de contenido employer branding con IA (posts, testimoniales, casos de éxito)

**Módulo 2 — Cribado y evaluación de candidatos:**
Explica cómo usar IA para cribar CVs de forma eficiente y objetiva:
- Configuración de criterios de evaluación objetivos antes de usar IA para cribar
- Prompt para analizar un CV y determinar su adecuación a una posición con justificación detallada
- Cómo evitar sesgos algorítmicos en el cribado con IA
- Sistema de scoring automático de candidatos con banderas rojas y verdes
- Generación de preguntas de screening personalizadas por candidato

**Módulo 3 — Gestión de comunicaciones con candidatos:**
Automatiza la comunicación manteniendo la calidez humana:
- Plantillas de emails personalizados para cada etapa del proceso (confirmación, rechazo, avance, oferta)
- Cómo usar IA para personalizar los rechazos con feedback constructivo y específico
- Chatbot de preguntas frecuentes para candidatos en proceso
- Recordatorios y preparación automática de candidatos para entrevistas

**Módulo 4 — Automatización del onboarding:**
Diseña un plan de onboarding personalizado con IA:
- Generación de planes de onboarding de 30-60-90 días adaptados al rol y nivel de experiencia
- Creación automática de guías de bienvenida personalizadas
- Sistema de seguimiento del progreso del onboarding con check-ins automatizados
- Generación de materiales de formación iniciales con IA

**Módulo 5 — Análisis y mejora continua:**
Explica cómo usar IA para mejorar continuamente los procesos:
- Análisis de datos de proceso (tiempo por etapa, ratio de conversión, origen de candidatos)
- Identificación de cuellos de botella y propuestas de mejora con IA
- Encuestas de experiencia de candidato y análisis automático de respuestas

**Entregable:**
Plan de implementación de 8 semanas, herramientas específicas recomendadas con costes, y estimación de horas ahorradas mensualmente por proceso automatizado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Automatizar selección y onboarding de empleados con IA',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'IA para análisis financiero y generación de reportes automatizados',
                'description'      => 'Aprende a usar herramientas de IA para acelerar el análisis de estados financieros, automatizar la generación de reportes de gestión y construir dashboards narrativos que expliquen los números de forma clara a la dirección. Transforma semanas de trabajo en horas.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director Financiero con experiencia en análisis cuantitativo y como experto en la integración de herramientas de IA en procesos de finanzas corporativas y reporting de gestión.

Necesito diseñar un flujo de trabajo completo para automatizar y mejorar mi análisis financiero y los reportes que presento mensualmente a dirección y consejo.

**Mi contexto financiero:**
- Rol: [CFO / Controller / Analista financiero / FP&A / Contabilidad]
- Empresa: [sector, tamaño, si es pública o privada]
- Herramientas actuales: [Excel / Power BI / Tableau / SAP / Oracle / otro]
- Tipos de reportes: [P&L mensual / forecast / presupuesto / análisis de variaciones / KPIs]
- Mayor pain point: [recopilar datos de múltiples fuentes / interpretar variaciones / escribir el análisis narrativo / presentar a stakeholders no financieros]

**Área 1 — Análisis de estados financieros con IA:**
Diseña un flujo para analizar estados financieros rápidamente:
- Cómo usar Claude para analizar un balance, P&L o estado de flujos de caja y extraer las 10 conclusiones más importantes
- Prompt para comparar resultados reales vs. presupuesto e identificar las variaciones más significativas con explicaciones posibles
- Análisis de ratios financieros automático: liquidez, endeudamiento, rentabilidad, eficiencia operativa
- Benchmark automático contra promedios del sector usando datos disponibles públicamente

**Área 2 — Automatización de reportes narrativos:**
Explica cómo generar el texto analítico de los reportes con IA:
- Cómo estructurar los datos para que la IA genere una narrativa financiera coherente y precisa
- Plantillas de reportes mensuales con secciones que la IA completa automáticamente
- Generación de comentarios de variaciones que explican el por qué, no solo el qué
- Adaptación del lenguaje según la audiencia (técnica para controllers, ejecutiva para CEO, estratégica para consejo)

**Área 3 — Previsiones y escenarios:**
Muéstrame cómo usar IA en la elaboración de forecasts:
- Técnicas para que la IA identifique patrones y estacionalidades en datos históricos
- Generación de escenarios optimista, base y pesimista con supuestos explícitos
- Análisis de sensibilidad: cómo la IA puede simular el impacto de cambios en variables clave
- Revisión crítica de forecasts: que la IA identifique supuestos poco realistas

**Área 4 — Comunicación financiera efectiva:**
Diseña un sistema para presentar los números de forma más impactante:
- Cómo usar IA para traducir análisis financiero complejo a lenguaje ejecutivo
- Generación de mensajes clave (3-5 puntos) para cada reporte
- Creación de guiones para presentaciones al consejo de administración
- Anticipación de preguntas difíciles y preparación de respuestas con datos

**Área 5 — Automatización de tareas repetitivas:**
Lista las tareas financieras más susceptibles de automatización con IA y cómo hacerlo:
- Conciliaciones automáticas
- Categorización de transacciones
- Generación de asientos contables desde documentos
- Extracción de datos de facturas y contratos

**Entregable:**
Guía práctica con prompts específicos para cada área, herramientas recomendadas (distinguiendo las que requieren acceso a datos propietarios de las que no), y estimación del tiempo ahorrado mensualmente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Automatizar análisis financiero y reportes de gestión',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Automatización de revisión documental y research legal con IA',
                'description'      => 'Optimiza las tareas más intensivas en tiempo del trabajo legal usando IA: revisión de contratos, investigación jurisprudencial, análisis de documentos y generación de borradores. Mantén el rigor jurídico necesario mientras reduces drásticamente el tiempo dedicado a tareas repetitivas.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado senior con experiencia en innovación legal (LegalTech) y en la implementación responsable de herramientas de IA en despachos de abogados y departamentos jurídicos internos.

Quiero diseñar un flujo de trabajo legal que incorpore IA de forma responsable y efectiva para aumentar mi productividad sin comprometer la calidad ni la ética profesional.

**Mi contexto profesional:**
- Tipo de práctica: [despacho independiente / gran firma / departamento jurídico interno / consultoría legal]
- Áreas de práctica: [mercantil / laboral / fiscal / civil / penal / propiedad intelectual / etc.]
- Volumen de trabajo: [número aproximado de asuntos simultáneos]
- Herramientas actuales: [Word / Westlaw / LexisNexis / otro]
- Tareas más costosas en tiempo: [revisión contratos / investigación / borradores / comunicaciones cliente / due diligence]

**Área 1 — Revisión y análisis de contratos:**
Diseña un proceso de revisión de contratos asistido por IA:
- Cómo usar IA para identificar cláusulas problemáticas, ambiguas o no estándar en contratos
- Comparación automática entre versiones de un contrato con marcado de cambios relevantes
- Extracción de términos clave: plazos, condiciones de resolución, limitaciones de responsabilidad, penalizaciones
- Generación de un memo de revisión estructurado con riesgos priorizados
- Límites importantes: qué no debe delegar a la IA en la revisión de contratos

**Área 2 — Investigación jurídica:**
Explica cómo acelerar la investigación legal con IA:
- Técnicas de prompting para investigar doctrina y jurisprudencia con IA (con las advertencias necesarias de verificación)
- Cómo estructurar una consulta legal compleja para obtener análisis útil de la IA
- Síntesis de múltiples fuentes legales en un análisis coherente
- Identificación de cambios legislativos recientes relevantes para un asunto

**Área 3 — Redacción de documentos legales:**
Muéstrame cómo usar IA para generar borradores iniciales:
- Tipos de documentos legales que la IA puede borradorear eficientemente (demandas, contratos estándar, memos legales, dictámenes)
- Framework para revisar y corregir documentos generados por IA antes de usarlos
- Adaptación de templates legales a casos específicos con IA
- Generación de cláusulas específicas con variables personalizadas

**Área 4 — Due diligence y análisis documental masivo:**
Diseña un proceso de due diligence asistido por IA:
- Cómo organizar y procesar grandes volúmenes de documentos con IA
- Extracción sistemática de información clave de contratos en due diligence
- Generación de matrices de hallazgos y reportes de riesgo
- Priorización de documentos para revisión humana detallada

**Área 5 — Comunicación con clientes:**
Explica cómo usar IA para mejorar la comunicación jurídica:
- Traducción de lenguaje jurídico a lenguaje comprensible para el cliente
- Generación de actualizaciones de estado de asuntos
- Preparación de clientes para declaraciones o reuniones con IA
- Respuesta a preguntas frecuentes de clientes con IA

**Consideraciones éticas y de confidencialidad:**
Incluye una sección específica sobre cómo usar IA en el trabajo legal de forma éticamente responsable, protegiendo la confidencialidad del cliente y manteniendo los estándares deontológicos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Optimizar procesos legales con IA de forma responsable',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Automatización de Customer Success con IA: health scores y playbooks',
                'description'      => 'Construye un sistema de Customer Success proactivo usando IA para calcular health scores, identificar clientes en riesgo de churn, generar playbooks de intervención personalizados y automatizar comunicaciones de alto valor. Escala la atención sin escalar el equipo.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP de Customer Success con experiencia construyendo sistemas escalables de gestión de clientes en empresas SaaS B2B, con conocimiento profundo de la aplicación de IA en procesos de retención y expansión.

Necesito diseñar un sistema completo de Customer Success potenciado por IA que me permita gestionar una cartera más grande de cuentas con mayor proactividad y personalización.

**Mi contexto de CS:**
- Tipo de producto: [SaaS / plataforma / servicio gestionado]
- Segmento de clientes: [Enterprise / Mid-market / SMB / mixto]
- Tamaño de cartera: [número de cuentas por CSM]
- ARR promedio por cuenta: [rango]
- Herramientas actuales: [Gainsight / ChurnZero / Salesforce / HubSpot / Intercom / otro]
- Mayor reto: [identificar churn temprano / expansión / onboarding / engagement bajo / NPS]

**Bloque 1 — Health scoring inteligente:**
Diseña un sistema de health score con IA:
- Variables a incluir en un health score robusto (uso del producto, soporte, engagement, NPS, adopción de features, pagos)
- Cómo usar IA para identificar correlaciones entre comportamientos y probabilidad de churn o expansión
- Modelo de segmentación de cuentas por estado de salud: verde, amarillo, rojo, con umbrales claros
- Alertas automáticas basadas en cambios repentinos en el health score

**Bloque 2 — Detección proactiva de riesgo:**
Explica cómo usar IA para identificar clientes en riesgo antes de que noten problemas:
- Señales de alerta temprana que la IA debe monitorear (caída de uso, tickets sin resolver, cambios en el equipo del cliente, noticias negativas de la empresa)
- Prompt para analizar el perfil completo de una cuenta e identificar riesgos ocultos
- Técnicas de análisis de sentimiento en comunicaciones con clientes
- Cómo priorizar cuentas en riesgo para intervención humana

**Bloque 3 — Playbooks de intervención personalizados:**
Diseña playbooks de CS generados por IA:
- Generación automática de un plan de acción personalizado para cada cuenta en riesgo
- Playbooks por tipo de riesgo (bajo uso, problema técnico recurrente, campeón interno que se fue, presupuesto reducido)
- Secuencias de comunicación recomendadas con mensajes personalizados al contexto de la cuenta
- Criterios de escalada a Management o Executive Sponsor

**Bloque 4 — Automatización de comunicaciones de valor:**
Explica cómo generar comunicaciones de alto valor de forma automatizada:
- Business Reviews (QBR) generados con IA a partir de datos de uso del cliente
- Reportes de ROI personalizados que muestran el valor que el cliente está obteniendo
- Newsletters de mejores prácticas adaptadas al perfil de uso de cada cuenta
- Mensajes de seguimiento post-onboarding personalizados

**Bloque 5 — Identificación de oportunidades de expansión:**
Diseña un sistema para detectar y actuar sobre oportunidades de upsell y cross-sell:
- Señales de expansión que la IA puede detectar (crecimiento del equipo, nuevos casos de uso, alto engagement con features premium)
- Generación de propuestas de expansión personalizadas basadas en el uso actual
- Timing óptimo para conversaciones de expansión según el ciclo de vida del cliente

**Entregable:**
Arquitectura completa del sistema con herramientas específicas, flujo de datos, métricas de éxito (reducción de churn, mejora de NPS, expansión ARR) y plan de implementación de 10 semanas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir sistema proactivo de CS con IA',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Sistema de productividad personal con IA para freelancers',
                'description'      => 'Diseña tu propio sistema de productividad personal con IA como asistente central: gestión de proyectos, comunicación con clientes, facturación, aprendizaje continuo y control del tiempo. Trabaja como un equipo de tres siendo una sola persona.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach de productividad especializado en freelancers y trabajadores independientes, con experiencia profunda en la construcción de sistemas personales de trabajo eficientes potenciados por IA.

Quiero construir un sistema completo de productividad personal usando IA que me permita gestionar todos los aspectos de mi negocio freelance de forma más eficiente y con menos estrés.

**Mi perfil como freelancer:**
- Servicio principal: [diseño / desarrollo / consultoría / redacción / marketing / fotografía / otro]
- Número de clientes simultáneos: [rango habitual]
- Horas facturables objetivo por semana: [horas]
- Principales problemas de productividad: [distracción / gestión del tiempo / comunicaciones / administración / marketing propio / aprendizaje]
- Herramientas que ya uso: [Notion / Todoist / Toggl / FreshBooks / Slack / otro]

**Pilar 1 — Gestión de proyectos y tiempo con IA:**
Diseña mi sistema de gestión diaria y semanal:
- Rutina de planificación semanal con IA: cómo usar Claude para revisar proyectos activos, priorizar tareas y distribuir el tiempo de forma realista
- Sistema de time blocking asistido por IA que respete mis picos de energía y deadlines de clientes
- Proceso de revisión diaria de 15 minutos con IA para ajustar el plan según imprevistos
- Método para gestionar múltiples proyectos con diferentes prioridades sin perder el hilo

**Pilar 2 — Comunicación con clientes:**
Automatiza y mejora la comunicación con clientes:
- Plantillas de emails para situaciones recurrentes (actualizaciones de proyecto, solicitudes de revisión, extensión de plazo, presentación de entregables)
- Cómo usar IA para redactar respuestas profesionales a peticiones difíciles o inesperadas
- Sistema para documentar y dar seguimiento a acuerdos verbales con clientes
- Preparación de reuniones de cliente con IA: agenda, objetivos, anticipación de feedback

**Pilar 3 — Administración y facturación:**
Simplifica las tareas administrativas:
- Generación de propuestas de proyecto profesionales con IA a partir de una descripción del trabajo
- Cómo usar IA para revisar contratos de cliente antes de firmar
- Sistema de seguimiento de tiempo y generación de reportes de horas facturables
- Automatización de recordatorios de facturas y seguimiento de pagos

**Pilar 4 — Marketing personal y captación de clientes:**
Diseña un sistema de marketing propio sostenible:
- Plan de contenido mensual generado con IA para LinkedIn, portfolio o newsletter
- Proceso para convertir proyectos terminados en casos de éxito publicables con IA
- Sistema para responder a RFPs y oportunidades de forma rápida y personalizada
- Networking digital: cómo usar IA para mantener relaciones con contactos de forma consistente

**Pilar 5 — Aprendizaje continuo y desarrollo de habilidades:**
Incorpora el aprendizaje como parte del sistema:
- Cómo usar IA para identificar las habilidades que más impacto tendrán en mis tarifas y diferenciación
- Sistema de aprendizaje en microformatos: 30 minutos diarios guiados por IA
- Curación de recursos de aprendizaje personalizados con IA según mis objetivos
- Proceso de reflexión mensual con IA sobre crecimiento profesional y ajuste de estrategia

**Pilar 6 — Bienestar y sostenibilidad del negocio:**
Incluye cómo usar IA para mantener el equilibrio:
- Monitoreo del balance carga-capacidad para evitar el burnout
- Sistema de revisión trimestral del negocio: qué clientes son más rentables, qué servicios eliminar, qué subir de precio

**Entregable:**
Un manual personal de productividad de una página (en formato estructurado) con mis rituales diarios, semanales y mensuales, las herramientas de IA para cada momento y las métricas que definen si el sistema funciona.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir sistema de productividad personal con IA',
                'vote_score'       => 44,
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
