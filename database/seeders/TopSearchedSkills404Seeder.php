<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills404Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Generación y optimización de variantes de landing page con IA para A/B testing',
                'description'       => 'Usa IA para crear múltiples variantes de landing pages de marketing, analizar qué elementos funcionan mejor y acelerar el ciclo de experimentación con datos.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en conversion rate optimization (CRO) y diseño de landing pages. Tu tarea es ayudarme a usar IA para crear, variar y optimizar landing pages de marketing de forma sistemática, reduciendo el tiempo de diseño y aumentando la tasa de conversión.

Contexto:
Soy responsable de marketing en una empresa de software. Lanzamos entre 3 y 5 campañas al mes y cada una requiere una landing page dedicada. El proceso actual tarda una semana por landing y los resultados son inconsistentes.

Instrucción principal:
Guíame en el uso de IA para acelerar el diseño y la optimización de landing pages, desde la generación de variantes hasta el análisis de resultados.

Área 1 — Anatomía de una landing page de alta conversión:
Explícame los elementos obligatorios de una landing page B2C y B2B de alto rendimiento:
- Estructura above the fold: headline, subheadline, hero, CTA primario
- Elementos de confianza: testimonios, logos, garantías, métricas
- Sección de beneficios vs. features: cómo estructurarla correctamente
- CTA secundario y gestión del scroll
- Diseño de formularios que no asustan al usuario

Área 2 — Prompt para generar variantes de copy:
Escribe el prompt completo para que la IA genere 3 variantes del copy principal de una landing page:
- Variante A: orientada al beneficio emocional
- Variante B: orientada a datos y prueba social
- Variante C: orientada a la urgencia y la escasez

Para cada variante incluye: headline principal, subheadline, 3 bullets de beneficios y CTA.

Área 3 — Framework de A/B testing con IA:
Diseña un framework para priorizar qué elementos testear primero:
- Qué elementos tienen mayor impacto en la conversión (headline, CTA, imagen, formulario)
- Cómo generar hipótesis de test con IA basadas en datos de heatmaps y analytics
- Cuánto tráfico necesito para que un test sea estadísticamente significativo
- Cómo analizar los resultados con IA y extraer el aprendizaje para la siguiente iteración

Área 4 — Adaptación de la landing por audiencia:
Crea el prompt para adaptar una landing page base a 3 audiencias distintas:
- Audiencia 1: empresas pequeñas (menos de 50 empleados)
- Audiencia 2: medianas empresas (50-500 empleados)
- Audiencia 3: grandes cuentas (enterprise)

Cada adaptación debe ajustar: tono, ejemplos, objecciones que rebate y prueba social.

Área 5 — Checklist de calidad pre-publicación:
Crea un checklist de revisión que un modelo de IA pueda ejecutar sobre el copy de cualquier landing para verificar:
- Claridad del mensaje principal en menos de 5 segundos
- Coherencia entre el anuncio que trajo al usuario y el contenido de la landing
- Presencia de todos los elementos de confianza obligatorios
- Legibilidad y escaneabilidad del contenido
- Optimización del formulario y del CTA

Formato de entrega:
Prompts listos para usar, framework de A/B testing en formato tabla y checklist de calidad.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Acelerar la creación y optimización de landing pages con IA para marketing de conversión',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Implementación de componentes UI generados con IA en proyectos React y Vue',
                'description'       => 'Aprende a usar herramientas de IA como v0, Copilot y Claude para generar, refinar e integrar componentes UI en aplicaciones React o Vue de producción.',
                'prompt_content'    => <<<'EOT'
Eres un desarrollador frontend senior especializado en React y Vue con experiencia en el uso de IA para acelerar el desarrollo de interfaces de usuario. Tu tarea es ayudarme a integrar herramientas de IA en mi flujo de trabajo de desarrollo de componentes UI.

Contexto:
Soy desarrollador frontend en un equipo de 4 personas. Construimos interfaces complejas para aplicaciones SaaS. Actualmente pasamos mucho tiempo construyendo componentes UI desde cero. Quiero usar IA para reducir ese tiempo en un 50% sin sacrificar la calidad ni la consistencia del código.

Instrucción principal:
Guíame en el uso de herramientas de IA para generar, refinar e integrar componentes UI en proyectos React y Vue de producción.

Parte 1 — Herramientas disponibles y cuándo usar cada una:
Compara las herramientas de IA para generación de UI más relevantes:
- v0 by Vercel: casos de uso ideales, limitaciones, output típico
- GitHub Copilot: cómo usarlo para componentes, no solo autocompletado
- Claude / ChatGPT: cuándo son superiores a herramientas especializadas
- Figma AI: generación de diseño que luego se convierte en código

Para cada herramienta: pros, contras, tipo de tarea donde brilla y ejemplo de prompt óptimo.

Parte 2 — Prompt engineering para componentes UI:
Escribe los prompts especializados para generar los componentes UI más comunes en React con Tailwind:
- Componente de tabla de datos con sorting, filtrado y paginación
- Modal de confirmación reutilizable con variantes (error, éxito, advertencia)
- Formulario multi-step con validación y persistencia entre pasos
- Dashboard card con gráfico sparkline y tendencia

Para cada componente: el prompt completo, las props que debe aceptar y los casos edge a considerar.

Parte 3 — Proceso de revisión y refinamiento:
Diseña el flujo para revisar y refinar código UI generado por IA antes de integrarlo:
- Checklist de revisión de código: accesibilidad, rendimiento, TypeScript correctness
- Cómo usar IA para revisar el propio código que generó (iteración asistida)
- Cómo detectar patrones anti-performance generados por IA (re-renders innecesarios, useEffect incorrectos)
- Proceso de adaptación al design system del proyecto

Parte 4 — Integración con el design system:
Crea el prompt para que la IA genere componentes que respeten el design system existente:
- Cómo proporcionar el contexto del design system al modelo (tokens, variantes, convenciones)
- Prompt para refactorizar un componente genérico y adaptarlo a las convenciones del proyecto
- Cómo mantener la consistencia cuando varios developers usan IA en el mismo proyecto

Parte 5 — Testing de componentes generados con IA:
Proporciona el prompt para que la IA genere los tests unitarios del componente que acaba de crear:
- Tests de renderizado básico
- Tests de interacción de usuario (clicks, inputs, submit)
- Tests de accesibilidad con jest-axe
- Tests de las props opcionales y estados edge

Formato de entrega:
Prompts completos y listos para copiar, checklist de revisión y comparativa de herramientas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Generar e integrar componentes UI con IA en proyectos React/Vue manteniendo calidad de producción',
                'vote_score'        => 55,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Flujos de user journey y arquitectura de información asistidos por IA en Figma',
                'description'       => 'Usa IA para mapear user journeys, detectar puntos de fricción, proponer arquitecturas de información y generar wireframes de baja fidelidad en Figma de forma acelerada.',
                'prompt_content'    => <<<'EOT'
Eres un diseñador UX senior especializado en research, arquitectura de información y diseño de flujos de usuario. Tu tarea es ayudarme a usar IA para acelerar las fases más analíticas del proceso de diseño UX, desde el mapeo de journeys hasta la generación de wireframes iniciales.

Contexto:
Soy diseñador UX/UI en una agencia digital. Trabajo en proyectos de aplicaciones web y móvil para clientes de distintos sectores. La fase de research y arquitectura es la más valorada pero también la más lenta. Quiero usar IA para hacer más en menos tiempo sin perder rigor metodológico.

Instrucción principal:
Guíame en el uso de IA para las fases de research, arquitectura de información y diseño de flujos de usuario, con aplicación directa en Figma.

Fase 1 — Research con IA:
Diseña el proceso de research asistido por IA para un proyecto UX:
- Prompt para sintetizar entrevistas de usuario y extraer necesidades, frustraciones y jobs to be done
- Prompt para analizar reseñas de la App Store o Google Play y convertirlas en insights de UX
- Prompt para crear user personas a partir de datos de investigación cualitativa
- Cómo validar los insights con el cliente antes de avanzar al diseño

Fase 2 — Mapeo de user journeys con IA:
Crea los prompts para mapear user journeys completos:
- Prompt para generar el journey actual (as-is) de un usuario en un proceso específico
- Prompt para identificar puntos de fricción, momentos de duda y abandonos
- Prompt para generar el journey futuro (to-be) con mejoras propuestas
- Formato de salida: tabla con fases, acciones, emociones, puntos de dolor y oportunidades

Fase 3 — Arquitectura de información:
Diseña el proceso para definir la arquitectura de información con IA:
- Prompt para proponer la estructura de navegación de una aplicación web basándose en los user goals identificados
- Cómo usar card sorting virtual asistido por IA para validar la taxonomía
- Prompt para detectar inconsistencias en la nomenclatura de secciones y proponer alternativas más intuitivas
- Generación del sitemap en formato texto estructurado que puedo importar a Figma

Fase 4 — Wireframes de baja fidelidad:
Explica cómo usar IA para generar wireframes iniciales rápidamente:
- Herramientas de IA que generan wireframes directamente (Uizard, Galileo, Framer AI)
- Cómo describir en texto la pantalla que quiero para obtener el mejor output
- Prompt para que Claude genere la descripción estructural de cada pantalla (secciones, elementos, jerarquía) que luego construyo en Figma
- Cómo iterar sobre wireframes con IA hasta llegar a una versión validable

Fase 5 — Documentación de diseño con IA:
Genera los prompts para crear la documentación UX del proyecto:
- Anotaciones de diseño para el equipo de desarrollo
- Especificaciones de interacción (estados, transiciones, comportamientos)
- Guía de uso del componente para el design system
- Documento de decisiones de diseño (design rationale) para el cliente

Formato de entrega:
Prompts listos para usar, plantillas de journey map y proceso de trabajo paso a paso.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Acelerar las fases de research, arquitectura y wireframing en proyectos UX con IA',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Diseño de presentaciones de ventas visualmente impactantes con herramientas de IA',
                'description'       => 'Crea decks de ventas profesionales y memorables usando IA para estructurar el argumento comercial, generar el contenido visual y personalizar cada presentación para el cliente.',
                'prompt_content'    => <<<'EOT'
Eres un experto en comunicación visual y storytelling comercial que ayuda a equipos de ventas a crear presentaciones memorables. Tu tarea es ayudarme a usar IA para diseñar decks de ventas que ganen deals, desde la estructura narrativa hasta los detalles visuales.

Contexto:
Soy Account Executive en una empresa de servicios B2B. Necesito presentaciones personalizadas para cada cliente potencial. Actualmente adapto una plantilla genérica que no impresiona a nadie y me toma 2-3 horas. Quiero reducirlo a 45 minutos y mejorar el impacto visual y narrativo.

Instrucción principal:
Guíame en el uso de IA para crear decks de ventas de alto impacto, personalizados y visualmente memorables.

Módulo 1 — Estructura narrativa del deck de ventas:
Diseña la estructura narrativa ideal para una presentación de ventas B2B de 15-20 diapositivas:
- Diapositiva 1-2: Apertura que genera rapport (personalización al cliente)
- Diapositiva 3-4: El problema — hacer que el cliente se reconozca
- Diapositiva 5-6: El coste de no resolver el problema (urgencia)
- Diapositiva 7-9: Nuestra solución — sin features, con transformaciones
- Diapositiva 10-12: Prueba social — casos de éxito del mismo sector
- Diapositiva 13-15: Cómo funciona el proceso de trabajo con nosotros
- Diapositiva 16-17: Inversión y ROI esperado
- Diapositiva 18-20: Próximos pasos y CTA

Para cada sección: propósito, qué debe transmitir emocionalmente y qué debe evitar.

Módulo 2 — Prompts para generar el contenido de cada sección:
Escribe el prompt específico para que la IA genere el contenido de cada sección clave:
- Prompt para la apertura personalizada (basada en el research del cliente)
- Prompt para describir el problema de forma que el cliente lo sienta propio
- Prompt para transformar features en beneficios y resultados tangibles
- Prompt para adaptar un caso de éxito al sector del cliente actual

Módulo 3 — Diseño visual con herramientas de IA:
Explica cómo usar herramientas de IA para el diseño visual del deck:
- Gamma.app: cómo generar un deck completo desde un outline de texto
- Beautiful.ai: cómo usar sus layouts inteligentes para mantener coherencia visual
- Canva Magic Design: cuándo usarlo y cuándo sus limitaciones son un problema
- Generación de imágenes para ilustrar conceptos abstractos (Midjourney, DALL-E)

Módulo 4 — Personalización por industria:
Crea el prompt para adaptar un deck base a 3 sectores distintos en menos de 10 minutos:
- Sector tecnológico: qué ejemplos, términos y métricas espera ver
- Sector retail: qué dolores son más resonantes y qué pruebas sociales funcionan
- Sector manufacturero: qué objeciones tienen y cómo estructurar el ROI

Módulo 5 — Práctica de la presentación con IA:
Diseña el protocolo de práctica y preparación usando IA:
- Prompt para generar las 10 preguntas más probables que hará el cliente
- Cómo simular un role play de la presentación con IA como cliente escéptico
- Cómo usar IA para revisar el deck y detectar slides que frenan el ritmo narrativo
- Checklist de preparación 24 horas antes de la reunión

Formato de entrega:
Estructura narrativa completa, prompts por sección y comparativa de herramientas de diseño IA.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Crear decks de ventas personalizados y de alto impacto en menos de 45 minutos con IA',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Síntesis de investigación de usuarios con IA para decisiones de product design',
                'description'       => 'Transforma grandes volúmenes de datos de user research en insights accionables para el diseño de producto usando IA para sintetizar, categorizar y priorizar hallazgos.',
                'prompt_content'    => <<<'EOT'
Eres un Product Manager con experiencia en research de usuarios y diseño centrado en el cliente. Tu tarea es ayudarme a usar IA para sintetizar grandes volúmenes de datos de user research y convertirlos en insights de diseño accionables que informen las decisiones de producto.

Contexto:
Soy PM en un equipo de producto que lanza actualizaciones mensuales. Hacemos entre 10 y 15 entrevistas de usuario al mes, tenemos datos de usabilidad de Hotjar y encuestas NPS. El problema es que el análisis manual toma más de una semana y para cuando terminamos, el equipo ya tomó decisiones sin los datos.

Instrucción principal:
Guíame en la construcción de un sistema de síntesis de research con IA que nos permita ir de datos crudos a insights accionables en 48 horas.

Componente 1 — Procesamiento de entrevistas con IA:
Diseña el proceso para analizar transcripciones de entrevistas de usuario:
- Prompt para extraer de una transcripción: jobs to be done, frustraciones, comportamientos y necesidades latentes
- Prompt para comparar múltiples transcripciones y encontrar patrones comunes
- Cómo etiquetar y categorizar automáticamente los fragmentos más relevantes
- Cómo identificar citas textuales de alto impacto para usar en presentaciones al equipo

Componente 2 — Análisis de datos de comportamiento:
Crea los prompts para analizar datos cuantitativos de uso del producto:
- Prompt para interpretar un informe de Hotjar (heatmaps, recordings, funnels) y extraer insights de UX
- Prompt para analizar datos de analytics y detectar dónde los usuarios abandonan y por qué
- Cómo combinar datos cualitativos y cuantitativos en un insight integrado más sólido

Componente 3 — Síntesis de NPS y feedback de usuarios:
Diseña el proceso para extraer insights de los comentarios de NPS:
- Prompt para categorizar comentarios de NPS por tema y sentimiento
- Prompt para identificar los 5 problemas más mencionados por los detractores
- Prompt para identificar los 5 elementos más valorados por los promotores
- Cómo cruzar el feedback de NPS con el segmento de usuario para personalizar la respuesta de producto

Componente 4 — De insights a oportunidades de diseño:
Crea el framework para convertir insights en oportunidades de diseño accionables:
- Prompt para transformar un problema de usuario en una "How might we" (HMW) question
- Cómo priorizar las oportunidades usando el framework RICE con datos de research
- Plantilla de insight card: problema, evidencia, magnitud, oportunidad propuesta
- Proceso para presentar los insights al equipo de diseño y desarrollo en 30 minutos

Componente 5 — Sistema de research continuo:
Define cómo mantener el research actualizado con IA de forma continua:
- Proceso de síntesis mensual: qué entra, qué sale, quién lo consume
- Cómo crear un repositorio de insights consultable (Notion + IA o similar)
- Prompt para que la IA responda preguntas de diseño consultando el repositorio de research
- Métricas para saber si el research está impactando realmente las decisiones de producto

Formato de entrega:
Prompts, framework de síntesis y plantillas listas para implementar en el proceso de research.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Reducir el tiempo de síntesis de user research de una semana a 48 horas con IA',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Diseño de portales de onboarding para empleados con experiencia de usuario optimizada por IA',
                'description'       => 'Crea portales de onboarding de nuevos empleados centrados en el usuario usando IA para diseñar la experiencia, personalizar el contenido por rol y medir la efectividad del proceso.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en employee experience y diseño de procesos de onboarding para empresas en crecimiento. Tu tarea es ayudarme a usar IA para diseñar un portal de onboarding para nuevos empleados que sea intuitivo, personalizado por rol y medible en su efectividad.

Contexto:
Soy HR Manager en una empresa tecnológica de 150 empleados que contrata entre 5 y 10 personas al mes. El proceso de onboarding actual es caótico: los nuevos empleados no saben qué hacer el primer día, hay información duplicada en tres herramientas distintas y el 30% de las renuncias ocurren en los primeros 3 meses.

Instrucción principal:
Guíame en el diseño de un portal de onboarding UX optimizado con IA, desde la arquitectura de información hasta la personalización por perfil de empleado.

Etapa 1 — Diagnóstico de la experiencia actual:
Crea el protocolo de investigación para entender los problemas del onboarding actual:
- Preguntas de entrevista para empleados que llevan menos de 3 meses (qué les costó, qué echaron de menos)
- Preguntas para managers sobre los primeros 30 días de sus reportes
- Prompt de IA para analizar las respuestas y encontrar los 5 principales puntos de fricción
- Cómo priorizar qué problemas resolver primero basándose en impacto en retención

Etapa 2 — Arquitectura del portal de onboarding:
Diseña la estructura del portal con IA:
- Navegación principal: qué secciones debe tener y por qué
- Experiencia del primer día, primera semana y primer mes (estructura de contenido progresivo)
- Personalización por rol: qué cambia para un desarrollador vs. un comercial vs. un diseñador
- Integración con las herramientas existentes (Slack, Notion, HRIS)

Etapa 3 — Contenido personalizado con IA:
Escribe los prompts para generar el contenido del portal adaptado a cada perfil:
- Prompt para generar el plan de onboarding de 90 días personalizado por rol y departamento
- Prompt para crear los FAQs más relevantes para cada perfil de empleado
- Prompt para adaptar el mensaje de bienvenida del CEO a cada equipo
- Cómo mantener el contenido actualizado sin que se convierta en una carga para RRHH

Etapa 4 — Diseño de la experiencia interactiva:
Proporciona las pautas de UX para el diseño visual del portal:
- Principios de diseño para portales de onboarding (claridad sobre estética, progreso visible, celebración de hitos)
- Gamificación ligera: checklist de actividades con progreso visual
- Notificaciones y recordatorios: cuándo y cómo comunicar sin saturar
- Accesibilidad: qué garantizar para empleados con discapacidades visuales o cognitivas

Etapa 5 — Medición de la efectividad:
Define el sistema de métricas para el portal de onboarding:
- KPIs de engagement con el portal (tiempo en el portal, módulos completados, preguntas respondidas)
- Relación entre uso del portal y métricas de retención a 3 y 12 meses
- Encuesta de 5 preguntas al final del mes 1 para medir la satisfacción con el onboarding
- Proceso de mejora continua: cómo incorporar el feedback para actualizar el portal

Formato de entrega:
Arquitectura del portal, prompts de contenido y framework de medición.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseñar un portal de onboarding UX para empleados que reduzca la rotación en los primeros 3 meses',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Diseño de dashboards financieros accesibles y accionables con asistencia de IA',
                'description'       => 'Usa IA para diseñar dashboards financieros que comunican los datos correctos a la audiencia correcta, siguiendo principios de data visualization y accesibilidad.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en data visualization financiera y diseño de dashboards para equipos de finanzas y dirección. Tu tarea es ayudarme a usar IA para diseñar dashboards financieros que sean claros, accionables y accesibles, tanto para el equipo de finanzas como para ejecutivos no financieros.

Contexto:
Soy analista financiero en una empresa de 300 empleados. Genero informes mensuales para el CFO y el equipo directivo. Los dashboards actuales están en Excel, son difíciles de interpretar y nadie los lee hasta el viernes antes de la reunión de dirección. Quiero rediseñarlos para que sean consultados proactivamente.

Instrucción principal:
Guíame en el diseño de dashboards financieros de alto impacto usando IA, desde la selección de métricas hasta los principios de visualización.

Sección 1 — Definición de la audiencia y sus necesidades:
Diseña el proceso de discovery para entender qué necesita ver cada tipo de usuario:
- Preguntas para el CEO: qué 3 números necesita ver para tomar decisiones esta semana
- Preguntas para el CFO: qué métricas de control necesita monitorizar diariamente
- Preguntas para managers de área: qué información financiera necesitan para gestionar su equipo
- Cómo usar IA para sintetizar estas respuestas y definir el contenido mínimo de cada dashboard

Sección 2 — Jerarquía de métricas financieras:
Ayúdame a definir la jerarquía de métricas para cada dashboard:
- Dashboard ejecutivo: las 6-8 métricas de C-level más importantes (P&L simplificado, cash, NRR, burn rate)
- Dashboard operativo de CFO: métricas detalladas de control presupuestario, cuentas por cobrar y pagar
- Dashboard de área: presupuesto vs. real, forecast de gasto, ratios de eficiencia del departamento
- Para cada métrica: cómo calcularla, cómo visualizarla y qué acción debería disparar

Sección 3 — Principios de diseño visual con IA:
Crea el prompt para que IA sugiera el mejor tipo de visualización para cada métrica:
- Cuándo usar un KPI card vs. un gráfico de líneas vs. una tabla
- Cómo elegir colores para métricas financieras (rojo/verde sin ambigüedad, accesibilidad para daltonismo)
- Jerarquía visual: qué debe destacar en el primer vistazo y qué está en segundo plano
- Cómo reducir el ruido visual: cuántos elementos son demasiados en una pantalla

Sección 4 — Generación de narrativa automática:
Diseña el prompt para que la IA genere automáticamente el comentario narrativo del dashboard:
- Explicación de las variaciones significativas respecto al mes anterior
- Identificación de los 3 factores más relevantes que explican el resultado
- Alerta sobre métricas que se desvían del presupuesto más del umbral acordado
- Recomendación de acción concreta para la reunión de dirección

Sección 5 — Implementación y adopción:
Define la estrategia para que el dashboard sea realmente adoptado:
- Herramientas recomendadas según el presupuesto: Power BI, Tableau, Looker Studio, Metabase
- Cómo automatizar la actualización de datos para reducir el trabajo manual
- Proceso de distribución: quién recibe qué y cuándo
- Cómo medir si el dashboard está siendo utilizado y tiene impacto en las decisiones

Formato de entrega:
Framework de diseño de dashboards, prompts de narrativa automática y guía de implementación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Rediseñar dashboards financieros para que sean consultados proactivamente por el equipo directivo',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Diseño de interfaces legales centradas en el usuario con IA para portales jurídicos',
                'description'       => 'Aplica principios de UX y IA para diseñar portales jurídicos, formularios legales y herramientas de autoservicio que sean comprensibles para usuarios no expertos en derecho.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en UX legal (Legal Design) y diseño de servicios jurídicos centrados en el usuario. Tu tarea es ayudarme a usar IA para diseñar interfaces y formularios legales que sean comprensibles, accesibles y efectivos para usuarios que no tienen formación jurídica.

Contexto:
Soy responsable de transformación digital en un despacho de abogados de tamaño medio. Queremos lanzar un portal de autoservicio jurídico para clientes, donde puedan iniciar procedimientos, firmar documentos y consultar el estado de sus casos. El reto es hacer la experiencia comprensible para personas sin conocimientos legales.

Instrucción principal:
Guíame en el diseño de un portal jurídico UX-optimizado con IA, desde los principios de plain language hasta la arquitectura de la experiencia de autoservicio.

Módulo 1 — Plain Language Legal con IA:
Diseña el proceso para transformar el lenguaje jurídico complejo en comunicación comprensible:
- Prompt para reescribir una cláusula contractual en lenguaje simple sin perder precisión jurídica
- Prompt para explicar un concepto legal (prescripción, recurso, aval) en 3 frases para un cliente sin formación
- Principios de plain language aplicados al contexto jurídico español
- Cómo validar que la simplificación no cambia el significado legal

Módulo 2 — Diseño de formularios legales:
Crea las pautas para diseñar formularios jurídicos que la gente complete correctamente:
- Estructura progresiva: cómo dividir un formulario complejo en pasos manejables
- Ayudas contextuales: tooltips, ejemplos y explicaciones en el momento justo
- Mensajes de error que explican qué falta y cómo corregirlo (sin "campo requerido")
- Validación inteligente: cómo usar IA para detectar posibles errores antes del envío

Módulo 3 — Arquitectura del portal de autoservicio:
Diseña la estructura del portal jurídico con IA:
- Secciones principales del portal: mis casos, documentos, facturas, comunicación
- Journey del usuario para el proceso más común del despacho (consulta inicial a resolución)
- Notificaciones: cuándo y cómo comunicar actualizaciones sin generar ansiedad
- Estado del caso: cómo visualizar el progreso de un expediente de forma comprensible

Módulo 4 — Chatbot jurídico de primer nivel:
Diseña el sistema de asistente virtual para el portal:
- Prompt de sistema para un chatbot que responde preguntas de clientes sobre sus casos
- Límites claros del chatbot: qué puede responder y cuándo debe escalar al abogado
- Cómo manejar preguntas fuera de alcance sin frustrar al usuario
- Integración con el CRM del despacho para que el chatbot tenga contexto del caso específico

Módulo 5 — Accesibilidad y cumplimiento:
Define los requisitos de accesibilidad y legales del portal:
- Requisitos WCAG 2.1 nivel AA para un portal jurídico
- Consideraciones para usuarios mayores (tipografía, contraste, simplicidad de navegación)
- Cumplimiento RGPD en el diseño: consentimientos, retención de datos, derechos del usuario
- Cómo documentar las decisiones de diseño para auditorías de accesibilidad

Formato de entrega:
Framework de Legal Design, prompts de plain language, arquitectura del portal y checklist de accesibilidad.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseñar portales jurídicos comprensibles para usuarios no expertos usando IA y Legal Design',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Optimización de flujos de autoservicio UX en portales de soporte con IA',
                'description'       => 'Rediseña la experiencia de autoservicio en tu portal de soporte usando IA para identificar fricciones, mejorar la base de conocimiento y reducir el volumen de tickets con mejor UX.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en customer experience y diseño de portales de autoservicio para equipos de soporte. Tu tarea es ayudarme a usar IA para optimizar la experiencia de autoservicio, reducir el volumen de tickets evitables y mejorar la satisfacción del cliente sin aumentar el equipo de soporte.

Contexto:
Soy Director de Customer Success en una empresa SaaS con 800 clientes activos. El equipo de soporte recibe 400 tickets al mes, el 60% de los cuales son preguntas que ya están respondidas en la documentación. El CSAT actual es del 78% y quiero llegar al 90% reduciendo los tickets repetitivos.

Instrucción principal:
Guíame en la optimización del portal de autoservicio usando IA, desde el análisis de tickets hasta el rediseño de la experiencia de búsqueda de respuestas.

Bloque 1 — Análisis de tickets con IA:
Diseña el proceso para analizar el volumen de tickets con IA:
- Prompt para categorizar automáticamente los tickets por tema, tipo de error y nivel de urgencia
- Prompt para identificar los 20 problemas más frecuentes que generan tickets evitables
- Cómo detectar patrones de fricción: qué parte del producto genera más confusión
- Prompt para priorizar qué documentación crear o mejorar basándose en la frecuencia de tickets

Bloque 2 — Mejora de la base de conocimiento:
Crea el proceso para mejorar la documentación con IA:
- Prompt para reescribir un artículo de help center y hacerlo más escaneable y comprensible
- Prompt para generar un artículo de help center desde la transcripción de un ticket resuelto
- Cómo estructurar los artículos para que el cliente encuentre la respuesta en menos de 30 segundos
- Checklist de calidad para artículos de help center

Bloque 3 — Optimización de la búsqueda en el portal:
Diseña la estrategia de búsqueda inteligente para el portal:
- Cómo implementar búsqueda semántica en la base de conocimiento (herramientas recomendadas)
- Prompt para generar sinónimos y variantes de los términos más buscados sin resultado
- Cómo conectar las búsquedas sin resultado con alertas para el equipo de contenido
- Diseño de la página de "sin resultados" que no frustra al usuario

Bloque 4 — Chatbot de autoservicio inteligente:
Define la arquitectura de un chatbot de soporte basado en IA:
- Prompt de sistema para un chatbot de soporte que usa la base de conocimiento existente
- Flujo de escalación: cuándo y cómo pasar al agente humano sin fricción
- Tono del chatbot: profesional, empático y eficiente (cómo programarlo)
- Métricas de éxito del chatbot: containment rate, CSAT del bot, escalaciones

Bloque 5 — Medición del impacto y mejora continua:
Define el sistema de métricas para el portal de autoservicio:
- KPIs principales: deflection rate, time-to-resolution, CSAT del portal, artículos más leídos
- Proceso mensual de revisión: qué analizar, qué mejorar y quién es el responsable
- Cómo usar la IA para generar el informe mensual de rendimiento del portal
- Roadmap de mejoras a 6 meses basado en los datos de uso

Formato de entrega:
Framework de análisis de tickets, prompts de mejora de documentación y sistema de métricas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Reducir tickets de soporte evitables mejorando el autoservicio UX con IA',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Sistema de diseño freelance acelerado con IA para proyectos de clientes recurrentes',
                'description'       => 'Construye un sistema de diseño reutilizable para tus clientes freelance usando IA para generar tokens de diseño, componentes y documentación que reducen el tiempo de cada proyecto.',
                'prompt_content'    => <<<'EOT'
Eres un diseñador UX/UI freelance con experiencia en construir sistemas de diseño eficientes para múltiples clientes. Tu tarea es ayudarme a construir un sistema de trabajo basado en IA que me permita crear sistemas de diseño reutilizables para mis clientes, reducir el tiempo de entrega y aumentar mi margen por proyecto.

Contexto:
Soy freelancer de diseño UX/UI con 5 clientes recurrentes y 2-3 proyectos nuevos al mes. Cada vez que empiezo un proyecto nuevo, casi empiezo desde cero: nuevo sistema de colores, nuevos componentes, nueva documentación. Quiero un proceso que me permita reutilizar el 60% del trabajo y personalizar el 40% para cada cliente.

Instrucción principal:
Ayúdame a construir un sistema de diseño freelance reutilizable potenciado por IA, que pueda adaptar rápidamente a cada nuevo cliente.

Componente 1 — Toolkit de diseño base:
Define los elementos que formarán parte de mi toolkit de diseño reutilizable:
- Color tokens: cómo estructurar una paleta de colores que sea fácil de tematizar por cliente
- Tipografía: sistema de escala tipográfica que funcione para distintos sectores
- Espaciado y grid: sistema de espaciado en 8pt que se adapte a mobile y desktop
- Iconografía: cómo seleccionar y usar librerías de iconos que sean neutras y adaptables

Componente 2 — Prompts para generar la identidad visual del cliente:
Crea los prompts para que la IA me ayude a definir la identidad visual de un nuevo cliente rápidamente:
- Prompt para proponer una paleta de colores basada en el sector, los valores y el público del cliente
- Prompt para seleccionar la combinación de tipografías más adecuada para la marca
- Prompt para definir el tono visual del sistema (minimalista, expresivo, corporativo, amigable)
- Cómo validar estas propuestas con el cliente en una sesión de 30 minutos

Componente 3 — Biblioteca de componentes adaptables:
Define la biblioteca de componentes que debo tener lista para customizar:
- Componentes de navegación: header, sidebar, bottom nav mobile
- Formularios: inputs, selects, checkboxes, toggles con sus estados (default, hover, focus, error)
- Feedback: modales, toasts, alertas, estados vacíos
- Cards, tablas y listados de datos

Para cada componente: qué variables de diseño permiten su customización rápida.

Componente 4 — Documentación automática con IA:
Crea el proceso para generar documentación de diseño usando IA:
- Prompt para generar las especificaciones de un componente (uso correcto, variantes, cuándo no usar)
- Prompt para crear la guía de estilo del cliente en formato Notion o Confluence
- Cómo generar el handoff de desarrollo con las especificaciones técnicas del sistema
- Plantilla de "release notes" de diseño para comunicar cambios al equipo de desarrollo

Componente 5 — Proceso de onboarding de nuevo cliente:
Diseña el proceso de onboarding que me permite tener el sistema de diseño del cliente listo en 1 semana:
- Sesión de discovery de 90 minutos: qué preguntar y cómo usar IA para sintetizar las respuestas
- Día 1: generación de identidad visual con IA + validación con cliente
- Día 2-3: customización del toolkit base con los tokens del cliente
- Día 4: construcción de los 5 componentes más críticos del proyecto
- Día 5: documentación y entrega del sistema

Formato de entrega:
Framework completo con prompts, checklist de componentes y proceso de onboarding de 5 días.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Construir sistemas de diseño reutilizables para clientes freelance con IA para aumentar el margen',
                'vote_score'        => 51,
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
