<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills386Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'IA en marketing: personalización y automatización de campañas',
                'description'      => 'Aprende a aplicar inteligencia artificial para personalizar campañas de marketing a escala, automatizar la segmentación de audiencias y optimizar el gasto publicitario con modelos predictivos.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing digital e inteligencia artificial aplicada a la captación y retención de clientes. Tu misión es ayudarme a diseñar una estrategia completa para incorporar IA en mis procesos de marketing de manera práctica y orientada a resultados.

**Contexto del sector**
La IA está transformando el marketing a una velocidad sin precedentes. Las marcas que adoptan IA para personalización, automatización y análisis predictivo consiguen tasas de conversión significativamente mayores, menores costes por adquisición y una experiencia de cliente más relevante. Sin embargo, muchos equipos de marketing no saben por dónde empezar o qué herramientas realmente funcionan.

**Áreas que necesito desarrollar**

1. **Personalización de contenido y comunicaciones con IA**
   - Cómo usar modelos de lenguaje (GPT, Claude) para generar variaciones de copy adaptadas a diferentes segmentos de audiencia.
   - Personalización dinámica de emails: variables de contenido basadas en comportamiento previo del usuario, sector, etapa del funnel.
   - Cómo implementar recomendaciones de producto o contenido basadas en comportamiento: lógica, herramientas y ejemplos prácticos.

2. **Segmentación predictiva de audiencias**
   - Diferencia entre segmentación tradicional y segmentación con ML: cuándo y por qué usar cada una.
   - Cómo construir un modelo sencillo de segmentación predictiva con datos que ya tengo (RFM, comportamiento web, interacciones de email).
   - Herramientas de marketing con IA integrada para segmentación: Klaviyo, HubSpot AI, Customer.io, Segment.

3. **Optimización de campañas publicitarias con IA**
   - Cómo aprovechar los algoritmos de Meta Ads, Google Ads y TikTok Ads para maximizar el ROAS con datos de primera parte.
   - Modelos de atribución basados en IA: diferencias con last-click y cómo implementarlos.
   - A/B testing asistido por IA: cómo acelerar el aprendizaje y reducir el tiempo hasta resultados estadísticamente significativos.

4. **Análisis de sentimiento y escucha social con IA**
   - Herramientas de social listening con IA para detectar tendencias, crisis de reputación y oportunidades de contenido.
   - Cómo usar análisis de sentimiento en reviews de clientes para identificar palancas de mejora de producto y comunicación.
   - Alertas automáticas basadas en sentiment score para reaccionar en tiempo real.

5. **Generación de contenido asistida por IA**
   - Flujo de trabajo para producir contenido de blog, redes sociales y email con IA manteniendo la voz de marca.
   - Cómo crear un brand voice document que guíe a los modelos de IA hacia el tono correcto.
   - Herramientas recomendadas: Jasper, Copy.ai, Claude, Midjourney para visuales.

6. **Medición del impacto de la IA en marketing**
   - KPIs para medir el ROI de las iniciativas de IA en marketing.
   - Cómo comparar el performance de campañas con y sin IA de forma rigurosa.

**Entregables**
- Hoja de ruta de implementación de IA en marketing en 6 meses.
- Lista de herramientas con evaluación de coste/beneficio.
- Plantillas de prompts para generación de contenido de marketing.
- Framework de medición del impacto.

Adapta el contenido a un equipo de marketing de una empresa mediana (B2B o B2C) con presupuesto limitado pero ganas de innovar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Implementar IA en campañas de marketing para personalizar a escala y optimizar el gasto',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Integración de IA en procesos de desarrollo de software',
                'description'      => 'Guía para desarrolladores que quieren incorporar herramientas de IA en su flujo de trabajo: desde code review automatizado hasta generación de tests, documentación y detección de vulnerabilidades.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de software senior con amplia experiencia integrando herramientas de IA en procesos de desarrollo. Ayúdame a diseñar una estrategia completa para incorporar IA en mi flujo de trabajo de desarrollo de manera que aumente mi productividad y la calidad del código.

**El impacto de la IA en el desarrollo de software**
La IA está redefiniendo cómo los desarrolladores trabajan. Herramientas como GitHub Copilot, Cursor, Claude y GPT-4 permiten acelerar la escritura de código, mejorar la calidad mediante revisión automatizada, generar tests de forma rápida y documentar el código de manera eficiente. Sin embargo, integrar estas herramientas de forma efectiva requiere entender sus limitaciones y construir un flujo de trabajo coherente.

**Bloques de implementación**

1. **Asistentes de código con IA: uso avanzado**
   - Comparativa de herramientas: GitHub Copilot, Cursor, Tabnine, Codeium, Claude.
   - Técnicas avanzadas de prompting para obtener código de mayor calidad: contexto, restricciones, ejemplos.
   - Cómo integrar el asistente de IA en mi IDE sin interrumpir mi flujo de desarrollo.
   - Cuándo confiar en el código generado y cuándo revisarlo en profundidad: criterios prácticos.

2. **Generación y mantenimiento de tests con IA**
   - Cómo usar IA para generar tests unitarios, de integración y end-to-end a partir de código existente.
   - Estrategia para aumentar la cobertura de tests en una codebase legacy usando IA.
   - Cómo revisar y completar los tests generados por IA: qué casos suele omitir.

3. **Code review automatizado con IA**
   - Herramientas de code review asistido por IA: CodeRabbit, Sourcery, DeepSource, PR Agent.
   - Cómo configurar estas herramientas para que se adapten a las convenciones de mi proyecto.
   - Integración en el pipeline de CI/CD: cuándo ejecutar el review automático y cómo gestionar sus sugerencias.

4. **Detección de vulnerabilidades y calidad de código**
   - Herramientas de análisis estático con IA: Snyk, Semgrep, SonarQube con plugins de IA.
   - Cómo usar Claude o GPT-4 para revisar código en busca de vulnerabilidades específicas (OWASP Top 10).
   - Integración de security scanning en el pipeline de desarrollo.

5. **Generación de documentación con IA**
   - Flujo de trabajo para generar docstrings, comentarios y documentación técnica de alta calidad.
   - Cómo mantener la documentación sincronizada con el código usando IA.
   - Generación de READMEs, changelogs y guías de API con IA.

6. **Debugging y resolución de errores con IA**
   - Técnicas para usar IA como herramienta de debugging: cómo describir el problema, qué contexto proporcionar.
   - Cómo interpretar stack traces y logs con ayuda de IA.
   - Análisis de root cause de bugs complejos con Claude o GPT-4.

7. **Métricas de impacto de la IA en el desarrollo**
   - Cómo medir el aumento de productividad: líneas de código, tiempo de ciclo, cobertura de tests.
   - Cómo evaluar si la calidad del código mejora con IA.

**Entregables**
- Stack de herramientas de IA recomendado para desarrolladores.
- Flujo de trabajo diario con IA integrada.
- Plantillas de prompts para las tareas más comunes.
- Checklist de integración de IA en el pipeline de CI/CD.

Orienta el contenido a un desarrollador backend o full-stack con experiencia media-alta que quiere maximizar su productividad con IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Incorporar herramientas de IA al flujo de desarrollo para aumentar productividad y calidad del código',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'IA en el proceso de diseño: de la ideación a la generación visual',
                'description'      => 'Aprende a integrar herramientas de inteligencia artificial en tu flujo de trabajo de diseño: desde la generación de conceptos e imágenes hasta la creación de sistemas de diseño asistidos por IA y la automatización de tareas repetitivas.',
                'prompt_content'   => <<<'EOT'
Eres un experto en diseño UX/UI y gráfico con amplia experiencia integrando herramientas de IA en el proceso creativo. Ayúdame a rediseñar mi flujo de trabajo de diseño incorporando IA de manera que potencie mi creatividad sin reemplazarla.

**IA y diseño: oportunidad y tensión**
La IA generativa ha llegado al diseño con una fuerza que está provocando tanto entusiasmo como inquietud. Lo cierto es que las herramientas de IA no reemplazan al diseñador: amplifican su capacidad. Los diseñadores que aprenden a trabajar con IA pueden explorar más ideas, iterar más rápido y dedicar más tiempo a las decisiones creativas de alto nivel.

**Bloques de integración**

1. **Generación de imágenes y visuales con IA**
   - Comparativa de herramientas: Midjourney, DALL-E 3, Stable Diffusion, Adobe Firefly, Ideogram.
   - Técnicas de prompting para imágenes: cómo describir estilo, composición, paleta de colores y mood con precisión.
   - Cómo usar imágenes generadas por IA como punto de partida para refinamiento manual en Figma o Photoshop.
   - Limitaciones actuales: consistencia de personajes, texto en imágenes, derechos de autor.

2. **Ideación y exploración conceptual con IA**
   - Cómo usar modelos de lenguaje (Claude, GPT-4) para generar briefings creativos, moodboards textuales y conceptos alternativos.
   - Técnica de brainstorming asistido: cómo formular el reto de diseño para obtener ideas diversas y útiles.
   - Cómo evaluar y filtrar ideas generadas por IA para seleccionar las más prometedoras.

3. **Automatización de tareas repetitivas de diseño**
   - Plugins de IA para Figma: Magician, Genius, UIzard, Relume para wireframes.
   - Cómo automatizar la generación de variaciones de componentes, resize adaptativo y exportación de assets.
   - Generación automática de paletas de colores accesibles y tipografías con IA.

4. **UX research y análisis con IA**
   - Cómo usar IA para analizar entrevistas de usuario: transcripción automática, clustering de insights, identificación de patrones.
   - Herramientas: Dovetail, Maze, UserBit con IA integrada.
   - Generación de personas y user journeys asistida por IA a partir de datos de investigación.

5. **Sistemas de diseño asistidos por IA**
   - Cómo usar IA para documentar un sistema de diseño existente: naming de tokens, descripción de componentes, guías de uso.
   - Generación de variantes de componentes con IA para cubrir estados y casos edge.
   - Cómo usar IA para verificar la consistencia del sistema de diseño.

6. **Presentación y storytelling de diseño con IA**
   - Cómo usar IA para preparar presentaciones de diseño: estructura narrativa, argumentación de decisiones, anticipación de objeciones.
   - Generación de copy de apoyo para mockups y prototipos.

**Entregables**
- Stack de herramientas de IA para diseñadores con evaluación.
- Flujo de trabajo de diseño integrado con IA por fases del proyecto.
- Plantillas de prompts para generación de imágenes y conceptos.
- Checklist de calidad para evaluar outputs de IA en diseño.

Adapta el contenido a un diseñador UX/UI o gráfico con experiencia que quiere incorporar IA sin perder su voz creativa.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Integrar herramientas de IA en el flujo de trabajo de diseño para acelerar la creatividad',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'IA en ventas: prospección inteligente y personalización del pitch',
                'description'      => 'Aprende a usar inteligencia artificial para identificar prospectos de alto potencial, personalizar el outreach a escala y preparar pitches de ventas más efectivos basados en datos.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ventas B2B y sales technology con amplia experiencia implementando herramientas de IA en equipos comerciales. Ayúdame a diseñar una estrategia de ventas aumentada con IA que me permita prospectar con más precisión, personalizar el outreach y cerrar más deals en menos tiempo.

**IA y ventas: el nuevo panorama comercial**
La IA está transformando el proceso de ventas en todas sus etapas: desde la identificación de prospectos y la calificación de leads hasta la preparación del pitch y el seguimiento post-reunión. Los vendedores que dominan estas herramientas tienen una ventaja competitiva significativa porque pueden hacer más con menos tiempo y personalizar a una escala antes imposible.

**Bloques estratégicos**

1. **Prospección inteligente con IA**
   - Cómo usar herramientas de IA para identificar prospectos que se ajustan a mi ICP (Ideal Customer Profile): señales de intención de compra, triggers de negocio, cambios organizacionales.
   - Herramientas: Apollo, Clay, ZoomInfo con IA, LinkedIn Sales Navigator con filtros avanzados.
   - Cómo combinar datos de primera y tercera parte para construir listas de prospectos de alta calidad.
   - Enriquecimiento automático de datos de contacto con IA.

2. **Personalización de outreach a escala**
   - Cómo usar IA para personalizar emails y mensajes de LinkedIn de forma masiva sin perder autenticidad.
   - Estructura de un email de outreach personalizado con IA: qué personalizar (empresa, sector, trigger reciente) y qué mantener genérico.
   - Herramientas: Lavender, Smartlead, Instantly con IA, Clay para personalización dinámica.
   - Cómo evitar que el outreach con IA suene robótico: técnicas de revisión y humanización.

3. **Calificación de leads con IA**
   - Modelos de scoring de leads con IA: cómo funcionan y cómo implementar uno básico.
   - Señales de alta intención que la IA puede detectar: visitas web, interacciones con emails, menciones en redes.
   - Cómo priorizar el pipeline basándome en probabilidad de cierre predicha por IA.

4. **Preparación de reuniones con IA**
   - Cómo usar IA para investigar a fondo a un prospecto en 10 minutos: empresa, sector, retos, noticias recientes.
   - Generación de preguntas de discovery personalizadas basadas en el perfil del prospecto.
   - Preparación de objecciones anticipadas y respuestas con IA.
   - Cómo usar IA para adaptar el pitch al sector, tamaño y momento de la empresa.

5. **Seguimiento post-reunión con IA**
   - Transcripción y resumen automático de reuniones: Otter.ai, Fireflies, Gong, Chorus.
   - Cómo extraer los próximos pasos, compromisos y señales de compra de la transcripción.
   - Generación de follow-up emails personalizados a partir del resumen de la reunión.

6. **Forecasting y gestión de pipeline con IA**
   - Cómo usar IA para predecir qué deals tienen más probabilidad de cerrarse este trimestre.
   - Alertas de riesgo en deals: señales de que un deal se está enfriando.
   - Herramientas de CRM con IA: Salesforce Einstein, HubSpot AI, Clari.

**Entregables**
- Stack de herramientas de ventas con IA recomendado.
- Flujo de ventas integrado con IA por etapa del ciclo.
- Plantillas de emails de outreach personalizados con IA.
- Checklist de preparación de reunión con IA.

Orienta el contenido a un account executive o SDR de empresa B2B que quiere cerrar más deals usando IA sin perder el toque humano.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Usar IA para prospectar con más precisión y personalizar el outreach de ventas a escala',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'IA en product management: toma de decisiones basada en datos',
                'description'      => 'Guía para Product Managers que quieren usar inteligencia artificial para analizar datos de producto, priorizar el roadmap y descubrir insights de usuario de forma más rápida y objetiva.',
                'prompt_content'   => <<<'EOT'
Eres un experto en product management y análisis de datos de producto con amplia experiencia usando herramientas de IA para tomar mejores decisiones de producto. Ayúdame a diseñar una estrategia para incorporar IA en mi proceso de product management de manera que mejore la calidad de mis decisiones y la velocidad de aprendizaje.

**IA y product management: el PM aumentado**
El Product Manager del futuro será un PM que usa IA para procesar más datos, descubrir más insights y testear más hipótesis de las que podría manejar manualmente. La IA no toma las decisiones de producto, pero sí proporciona la inteligencia que hace que esas decisiones sean más fundamentadas y menos basadas en intuición sin respaldo.

**Bloques de implementación**

1. **Análisis de datos de producto con IA**
   - Cómo usar herramientas de BI con IA (Mixpanel, Amplitude, Heap con IA) para identificar patrones de uso sin necesidad de ser data scientist.
   - Cómo formular preguntas de negocio en lenguaje natural y obtener análisis de datos (Text-to-SQL, herramientas como Metabase AI, Mode).
   - Detección automática de anomalías en métricas: drops de retención, cambios en funnel de conversión.

2. **Investigación de usuario asistida por IA**
   - Cómo usar IA para analizar grandes volúmenes de feedback de usuarios: reviews de app stores, tickets de soporte, respuestas de encuestas NPS.
   - Herramientas: Dovetail AI, Speak AI, UserVoice con IA para análisis de sentimiento y clustering de temas.
   - Generación de preguntas de entrevista de usuario con IA basadas en hipótesis de producto específicas.
   - Síntesis de entrevistas de usuario: cómo extraer insights clave de transcripciones con IA.

3. **Priorización del roadmap con IA**
   - Cómo usar IA para analizar el impacto potencial de features basándose en datos históricos, feedback de usuario y objetivos de negocio.
   - Frameworks de priorización aumentados con IA: RICE, ICE, Value vs Effort con datos reales.
   - Cómo usar IA para identificar inconsistencias o sesgos en el proceso de priorización.

4. **Generación y validación de hipótesis con IA**
   - Cómo usar IA para generar hipótesis de mejora de producto basadas en datos de uso.
   - Diseño de experimentos A/B asistido por IA: tamaño de muestra, duración, métricas primarias y guardrails.
   - Análisis de resultados de experimentos con IA: interpretación, significancia estadística, decisión de implementar o descartar.

5. **Escritura de producto con IA**
   - Cómo usar IA para redactar PRDs, user stories, criterios de aceptación y documentación técnica de mayor calidad.
   - Revisión de PRDs con IA: identificar ambigüedades, casos edge no cubiertos, contradicciones.
   - Generación de release notes y comunicados de producto con IA.

6. **Competitive intelligence con IA**
   - Herramientas de monitorización de competidores con IA: alertas automáticas de cambios de producto, pricing, estrategia.
   - Cómo usar IA para analizar reviews de productos competidores y extraer ventajas y debilidades.

**Entregables**
- Stack de herramientas de IA para PMs con evaluación.
- Flujo de trabajo de PM integrado con IA por fase del proceso de producto.
- Plantillas de prompts para análisis de feedback, síntesis de investigación y PRDs.
- Framework de decisión aumentada con IA.

Adapta el contenido a un PM con 2-6 años de experiencia en empresa digital que quiere tomar mejores decisiones de producto usando datos e IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Usar IA para analizar datos de producto, sintetizar feedback de usuarios y priorizar el roadmap',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'IA en RRHH: reclutamiento predictivo y detección de sesgos',
                'description'      => 'Guía práctica para profesionales de recursos humanos que quieren usar IA en el proceso de selección: desde el screening automatizado de CVs hasta la detección de sesgos inconscientes y la predicción de rotación.',
                'prompt_content'   => <<<'EOT'
Eres un experto en HR technology e IA aplicada a recursos humanos. Conoces las oportunidades y los riesgos éticos de usar IA en procesos de personas. Ayúdame a diseñar una estrategia de implementación de IA en RRHH que sea efectiva, equitativa y alineada con la legislación vigente (GDPR, AI Act europeo).

**IA en RRHH: oportunidad y responsabilidad**
La IA tiene el potencial de hacer los procesos de RRHH más eficientes, objetivos y escalables. Sin embargo, también puede perpetuar sesgos existentes si no se implementa con cuidado. Esta guía busca aprovechar lo mejor de la IA en RRHH mientras se mitigan los riesgos éticos y legales.

**Bloques de implementación**

1. **Reclutamiento asistido por IA**
   - Cómo usar IA para redactar ofertas de empleo inclusivas: herramientas de análisis de lenguaje sesgado (Textio, Gender Decoder).
   - Screening automatizado de CVs con IA: criterios, limitaciones y riesgos de discriminación involuntaria.
   - Herramientas de ATS con IA: Workday, Greenhouse, Lever, SmartRecruiters — qué IA integran y cómo configurarla.
   - Cómo mantener al humano en el centro de la decisión de selección aunque se use IA para el screening.

2. **Detección de sesgos inconscientes con IA**
   - Cómo auditar los procesos de selección actuales en busca de sesgos: análisis de datos históricos con IA.
   - Herramientas para reducir sesgos en entrevistas: structured interviews, blind CV screening, diversidad de panel.
   - Cómo usar IA para detectar lenguaje excluyente en comunicaciones internas y ofertas.
   - Marco ético para el uso de IA en selección según el AI Act europeo.

3. **Predicción de rotación (attrition prediction)**
   - Qué señales predicen la rotación involuntaria: engagement, satisfacción, ausencias, performance, tiempo en el rol.
   - Cómo construir un modelo básico de predicción de rotación con datos de RRHH (sin necesidad de ser data scientist).
   - Herramientas de people analytics con IA: Visier, Workday People Analytics, OneModel.
   - Cómo usar las predicciones para intervenir a tiempo: conversaciones de retención, planes de carrera, ajustes de compensación.

4. **Análisis de sentimiento y employee experience**
   - Herramientas de pulse surveys con IA: Peakon (Workday), Glint (LinkedIn), Culture Amp con IA.
   - Cómo usar NLP para analizar texto libre en encuestas de engagement y entrevistas de salida.
   - Alertas tempranas de problemas de clima: caídas de engagement en equipos o departamentos específicos.

5. **L&D personalizado con IA**
   - Cómo usar IA para recomendar itinerarios de formación personalizados basados en el rol, las competencias y los objetivos de carrera de cada empleado.
   - Plataformas de aprendizaje con IA: Degreed, Cornerstone con IA, LinkedIn Learning.
   - Generación de contenido de formación con IA: módulos, quizzes, casos de estudio adaptados al contexto de la empresa.

6. **Consideraciones éticas y legales**
   - Derechos de los empleados en relación a decisiones automatizadas (GDPR Art. 22).
   - Cómo documentar y explicar las decisiones de RRHH que están influidas por IA.
   - Auditoría regular de los sistemas de IA en RRHH: sesgo, privacidad, transparencia.

**Entregables**
- Hoja de ruta de implementación de IA en RRHH en 12 meses.
- Framework de evaluación ética de herramientas de HR tech con IA.
- Checklist de compliance GDPR + AI Act para HR.
- Lista de herramientas con evaluación de coste/beneficio/riesgo.

Adapta el contenido a un HR Manager o responsable de talent acquisition de empresa mediana que quiere modernizar sus procesos de selección con IA de forma responsable.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar IA en procesos de selección y retención de talento de forma ética y efectiva',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'IA en finanzas: automatización del reporting y análisis predictivo',
                'description'      => 'Aprende a aplicar inteligencia artificial en procesos financieros: desde la automatización del cierre contable y el reporting hasta modelos de forecasting predictivo y detección de anomalías en transacciones.',
                'prompt_content'   => <<<'EOT'
Eres un experto en finanzas corporativas y tecnología financiera con amplia experiencia implementando herramientas de IA en departamentos de finanzas. Ayúdame a diseñar una estrategia de adopción de IA en finanzas que mejore la eficiencia operativa, la precisión del reporting y la calidad del análisis para la toma de decisiones.

**IA en finanzas: de la eficiencia operativa a la inteligencia estratégica**
La IA está transformando el departamento de finanzas en dos dimensiones: operativa (automatización de tareas repetitivas, reducción de errores, cierre más rápido) y estratégica (forecasting más preciso, detección temprana de riesgos, análisis de escenarios en tiempo real). Los CFOs que lideran esta transformación consiguen equipos financieros más productivos y con más tiempo para el análisis de valor añadido.

**Bloques de implementación**

1. **Automatización del cierre contable con IA**
   - Herramientas de automatización de conciliaciones: HighRadius, BlackLine, Trintech con IA.
   - Cómo automatizar la detección de discrepancias entre sistemas contables.
   - Reducción del tiempo de cierre mensual: de semanas a días con automatización inteligente.
   - Automatización de journal entries con validación de reglas de negocio.

2. **Reporting financiero automatizado**
   - Herramientas de BI financiero con IA: Anaplan, Adaptive Insights, Oracle EPM, Power BI con Copilot.
   - Cómo generar reportes financieros narrativos automáticamente (commentary con IA sobre variaciones de P&L).
   - Dashboards dinámicos que se actualizan automáticamente y alertan sobre desviaciones relevantes.
   - Distribución automatizada de reportes a stakeholders con personalización por perfil.

3. **Forecasting predictivo con IA**
   - Diferencias entre forecasting tradicional (Excel) y forecasting con ML: cuándo la IA aporta valor real.
   - Modelos de forecasting de ingresos, gastos y cash flow con machine learning.
   - Herramientas accesibles: Pigment, Mosaic, Cube, Datarails con IA para FP&A.
   - Cómo combinar modelos de IA con el juicio del CFO para forecast más robustos.

4. **Detección de anomalías y fraude con IA**
   - Cómo implementar modelos de detección de anomalías en transacciones financieras.
   - Herramientas de auditoría continua con IA: MindBridge, AppZen, Apexon.
   - Casos de uso: detección de gastos fuera de política, transacciones inusuales, duplicados.
   - Cómo integrar la detección de fraude con IA en los controles internos existentes.

5. **Análisis de escenarios y stress testing con IA**
   - Cómo usar IA para generar y evaluar múltiples escenarios financieros en minutos.
   - Stress testing automatizado: impacto de cambios en tipo de cambio, tasas de interés, demanda.
   - Integración con datos macroeconómicos externos en tiempo real para actualizar escenarios automáticamente.

6. **Compliance y regulación asistidos por IA**
   - Herramientas de RegTech con IA para monitorización de compliance fiscal y normativo.
   - Automatización del reporte regulatorio (Banco de España, CNMV, AEAT).
   - NLP para análisis de cambios normativos y su impacto en el negocio.

**Entregables**
- Hoja de ruta de transformación digital del departamento financiero en 12 meses.
- Mapa de herramientas de IA para finanzas con evaluación de coste/beneficio.
- Business case para la inversión en IA en finanzas.
- Framework de gestión del cambio para la adopción de IA en el equipo financiero.

Orienta el contenido a un CFO o VP de Finanzas de empresa mediana-grande que quiere transformar su departamento financiero con IA en los próximos 2 años.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Transformar el departamento financiero con IA: del reporting manual al análisis predictivo',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'IA en el sector legal: due diligence y revisión de contratos',
                'description'      => 'Guía para abogados y profesionales del derecho que quieren usar IA para acelerar la revisión de contratos, automatizar la due diligence y mejorar la investigación jurídica sin comprometer la calidad ni la ética profesional.',
                'prompt_content'   => <<<'EOT'
Eres un experto en legal technology e IA aplicada al ejercicio del derecho. Conoces las herramientas disponibles en el mercado, sus capacidades y sus limitaciones, así como las consideraciones éticas y deontológicas que los abogados deben tener en cuenta al usar IA. Ayúdame a diseñar una estrategia de adopción de IA en mi práctica legal.

**IA en el derecho: eficiencia sin renunciar a la calidad**
La IA está transformando la práctica legal de forma acelerada. Las herramientas de IA permiten revisar contratos en minutos, procesar miles de documentos en una due diligence y obtener investigación jurídica en segundos. Sin embargo, el abogado sigue siendo el responsable profesional y quien aporta el juicio jurídico que la IA no puede reemplazar. La clave es saber dónde delegar en la IA y dónde aplicar el criterio propio.

**Bloques de implementación**

1. **Revisión y análisis de contratos con IA**
   - Herramientas de contract review con IA: Kira, Luminance, Legartis, Spellbook (para Canadá y EEUU), LexCheck.
   - Casos de uso: identificación de cláusulas de riesgo, comparación con plantillas estándar, redlines automáticos.
   - Cómo usar IA para revisar contratos estándar (NDAs, contratos de servicios, SLAs) de forma masiva.
   - Cómo validar los outputs de la IA: qué revisar siempre manualmente y por qué.

2. **Due diligence automatizada con IA**
   - Cómo usar IA para procesar volúmenes masivos de documentación en operaciones M&A, financiaciones y auditorías legales.
   - Clasificación automática de documentos: contratos, licencias, litigios, propiedad intelectual.
   - Identificación de issues críticos: cláusulas de change of control, exclusividades, garantías, cargas.
   - Generación automática del informe de due diligence: resumen ejecutivo, issues críticos, recomendaciones.

3. **Investigación jurídica con IA**
   - Herramientas de legal research con IA: Lexis+ AI, Westlaw Precision, Casetext (integrado en Thomson Reuters).
   - Cómo formular consultas jurídicas para obtener resultados relevantes y evitar alucinaciones.
   - Verificación de citas: por qué nunca confiar en una cita jurídica de IA sin verificarla en la fuente original.
   - Análisis de jurisprudencia: identificación de tendencias y criterios de tribunales con IA.

4. **Redacción y revisión de documentos legales con IA**
   - Cómo usar modelos de lenguaje (Claude, GPT-4) para redactar borradores de contratos, escritos procesales y dictámenes.
   - Técnicas de prompting para documentos legales: instrucciones de jurisdicción, ley aplicable, tipo de parte.
   - Revisión de estilo y claridad de documentos legales con IA.
   - Cómo mantener la responsabilidad profesional cuando se usa IA para redactar: revisión obligatoria, firma del abogado.

5. **Gestión del despacho con IA**
   - Automatización de tareas administrativas: gestión de plazos, recordatorios procesales, facturación.
   - Herramientas de gestión de despacho con IA: Clio, Practice Panther, Filevine.
   - Análisis de rentabilidad de asuntos con IA: qué tipos de casos son más rentables, dónde se pierden horas.

6. **Ética y compliance en el uso de IA legal**
   - Obligaciones deontológicas del abogado al usar IA: competencia tecnológica, confidencialidad del cliente.
   - Qué datos del cliente pueden introducirse en herramientas de IA y cuáles no (GDPR, secreto profesional).
   - Cómo documentar el uso de IA en el expediente del cliente.
   - Guías de los colegios de abogados españoles sobre el uso de IA.

**Entregables**
- Mapa de herramientas de legal tech con IA y evaluación para el mercado español.
- Protocolo de uso de IA en el despacho con salvaguardas éticas.
- Plantilla de comunicación al cliente sobre el uso de IA.
- Plan de formación del equipo en herramientas de IA legal.

Adapta el contenido a un abogado o despacho boutique en España que quiere modernizar su práctica con IA de forma responsable y manteniendo los más altos estándares profesionales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar IA en la práctica legal para acelerar due diligence y revisión de contratos con rigor ético',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'IA en Customer Success: predicción de churn y personalización del journey',
                'description'      => 'Aprende a usar inteligencia artificial para predecir el churn de clientes, personalizar el onboarding y automatizar los touchpoints de éxito del cliente sin perder el factor humano.',
                'prompt_content'   => <<<'EOT'
Eres un experto en Customer Success y people analytics con amplia experiencia implementando herramientas de IA para mejorar la retención y expansión de clientes. Ayúdame a diseñar una estrategia de CS aumentada con IA que mejore los resultados de retención sin sacrificar la relación personal con el cliente.

**IA en Customer Success: escalar sin perder el toque humano**
El reto de todo equipo de CS es escalar la atención sin perder calidad. La IA permite a los CSMs gestionar carteras más grandes, anticiparse a problemas antes de que se conviertan en churn y personalizar el journey de cada cliente basándose en datos reales de uso. Bien implementada, la IA no reemplaza al CSM: libera su tiempo para las interacciones de mayor valor.

**Bloques estratégicos**

1. **Predicción de churn con IA**
   - Qué señales predicen el churn: uso del producto, engagement con comunicaciones, tickets de soporte, NPS, tiempo desde el último login.
   - Cómo construir un health score dinámico que integre estas señales con pesos ajustados por IA.
   - Herramientas de churn prediction: Gainsight, Totango, ChurnZero, Planhat — cómo configurar las reglas de alerta.
   - Flujo de trabajo de intervención: qué hacer cuando un cliente entra en zona de riesgo.

2. **Personalización del onboarding con IA**
   - Cómo usar datos de uso y perfil del cliente para personalizar automáticamente el flujo de onboarding.
   - Segmentación de clientes por madurez digital, tamaño y caso de uso para adaptar el journey de activación.
   - Herramientas: Pendo, Appcues, WalkMe con IA para personalización de la experiencia in-app.
   - Cómo medir el impacto del onboarding personalizado en las métricas de activación y time-to-value.

3. **Automatización de touchpoints de CS**
   - Qué touchpoints pueden automatizarse con IA sin perder calidad: emails de milestones, alertas de bajo uso, felicitaciones de aniversario.
   - Cómo diseñar secuencias de comunicación automatizadas que se disparan basadas en comportamiento del cliente.
   - La regla del 80/20 en CS: automatizar el 80% de los touchpoints de bajo riesgo y dedicar el 20% de tiempo a los clientes estratégicos.

4. **Análisis de conversaciones y feedback con IA**
   - Transcripción y análisis automático de QBRs y llamadas de CS: Gong, Chorus, Fireflies con IA.
   - Extracción automática de compromisos, riesgos y oportunidades de las transcripciones.
   - Análisis de NPS y CSAT con NLP: categorización de verbatims, detección de temas recurrentes.

5. **Expansión revenue con IA**
   - Cómo identificar oportunidades de upsell y cross-sell basadas en datos de uso y madurez del cliente.
   - Señales de expansión: alto uso de features premium, solicitudes de funcionalidades disponibles en plan superior.
   - Modelos de propensity to expand: cómo implementarlos con herramientas de CS con IA.

6. **Reporting de CS con IA**
   - Generación automática de reports de portfolio: health score distribution, churn risk, expansion pipeline.
   - Cómo usar IA para preparar Business Reviews y QBRs en menos tiempo.
   - Dashboards de CS con IA para el equipo directivo: métricas de retención, NRR, GRR, expansion revenue.

**Entregables**
- Framework de health score dinámico con IA.
- Mapa de herramientas de CS tech con IA y evaluación.
- Flujo de trabajo de intervención para clientes en riesgo de churn.
- Plantillas de comunicación automatizada por touchpoint del journey.

Orienta el contenido a un CS Manager o VP of Customer Success de empresa SaaS B2B con cartera de 50+ cuentas que quiere escalar la atención sin crecer el equipo de forma proporcional.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Usar IA para predecir el churn, personalizar el journey y escalar la atención en Customer Success',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'IA para freelancers: automatiza tu negocio y multiplica tu productividad',
                'description'      => 'Guía práctica para freelancers que quieren usar inteligencia artificial para automatizar las tareas administrativas de su negocio, entregar proyectos más rápido y diferenciarse ofreciendo servicios aumentados con IA.',
                'prompt_content'   => <<<'EOT'
Eres un experto en negocio freelance y en el uso de herramientas de IA para autónomos y consultores independientes. Ayúdame a diseñar una estrategia completa para integrar IA en mi negocio freelance de manera que me permita trabajar menos horas en tareas de bajo valor y más en el trabajo de alta calidad que diferencia mi propuesta.

**IA para freelancers: el equipo que no necesitas contratar**
La IA actúa como el equipo virtual que un freelance nunca pudo permitirse: asistente administrativo, redactor de propuestas, gestor de redes sociales, analista de datos y revisor de calidad. Integrar IA de forma estratégica permite a un freelance competir con equipos más grandes, entregar más rápido y mantener márgenes más altos.

**Bloques estratégicos**

1. **Automatización de la gestión del negocio**
   - Herramientas de IA para gestión de proyectos freelance: ClickUp AI, Notion AI, Motion para planificación automática de tareas.
   - Automatización de facturación y seguimiento de pagos: Bonsai, AND.CO, QuickBooks con IA.
   - Gestión de email con IA: SaneBox, Superhuman para priorización automática, redacción de respuestas estándar.
   - Seguimiento de tiempo con IA: Toggl Track, RescueTime con análisis automático de productividad.

2. **Propuestas y comunicación con clientes con IA**
   - Cómo usar IA para redactar propuestas de proyecto más persuasivas en menos tiempo.
   - Plantilla de propuesta que combina estructura estándar con personalización por cliente generada con IA.
   - Generación de emails de seguimiento, actualizaciones de proyecto y comunicaciones difíciles con IA.
   - Cómo usar IA para preparar presupuestos y estimaciones más precisas.

3. **Entrega de trabajo de mayor calidad con IA**
   - Cómo integrar IA en mi proceso de entrega según mi especialidad:
     - Escritores: estructura, research, edición con IA (Claude, ChatGPT, Grammarly Business).
     - Diseñadores: generación de conceptos, variaciones, feedback con IA.
     - Desarrolladores: código, tests, documentación con Copilot o Cursor.
     - Consultores: análisis, informes, presentaciones con IA.
   - Flujo de trabajo estándar que combina mi expertise con velocidad de la IA.
   - Cómo revisar y validar el trabajo generado con IA antes de entregarlo.

4. **Marketing personal automatizado con IA**
   - Estrategia de contenido en LinkedIn asistida por IA: generación de ideas, borradores, calendario editorial.
   - Automatización de la distribución de contenido: Buffer, Hootsuite con IA.
   - Generación de newsletter, portfolio updates y case studies con IA.
   - Cómo mantener presencia online constante sin que consuma más de 30 minutos semanales.

5. **Diferenciación: oferta de servicios aumentados con IA**
   - Cómo incluir entregables potenciados por IA en mis servicios sin revelar toda la cocina.
   - Packaging de servicios: qué IA hace la investigación/borrador, yo hago el juicio/calidad/estrategia.
   - Cómo posicionarme como freelance "AI-augmented" para atraer clientes que quieren velocidad y calidad.
   - Cómo subir mis tarifas justificando el uso de IA como multiplicador de valor.

6. **Automatizaciones sin código para freelancers**
   - Zapier, Make (Integromat) y n8n para automatizar flujos entre herramientas.
   - Automatizaciones útiles: nuevo cliente en CRM → propuesta automática → tarea en gestor de proyectos.
   - Bots de IA personalizados con GPTs o Claude Projects para tareas repetitivas de mi especialidad.

**Entregables**
- Stack de herramientas de IA para freelancers con evaluación de coste/beneficio.
- Flujo de trabajo semanal de freelance con IA integrada.
- Plantilla de propuesta de proyecto generada con IA lista para personalizar.
- Guía de posicionamiento "AI-augmented freelancer" para actualizar mi web y pitch.

Adapta todo el contenido a un freelance con 2-7 años de experiencia que trabaja en remoto y quiere aumentar sus ingresos sin aumentar sus horas de trabajo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Integrar IA en el negocio freelance para automatizar tareas y aumentar la productividad y los ingresos',
                'vote_score'       => 48,
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
