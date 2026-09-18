<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills357Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'A/B testing de campañas de marketing: diseño estadísticamente riguroso',
                'description'      => 'Aprende a diseñar y analizar tests A/B en campañas de email, anuncios y landing pages con rigor estadístico. Evita los errores más comunes que invalidan los resultados y llevan a decisiones incorrectas. Obtén aprendizajes accionables en lugar de tests que solo confirman lo que ya creías.',
                'prompt_content'   => <<<'EOT'
Actúa como un growth analyst con especialización en experimentación y estadística aplicada al marketing digital. Has diseñado y analizado centenares de tests A/B en empresas de ecommerce, SaaS y medios digitales.

Tu objetivo es enseñarme a diseñar tests A/B de marketing que sean estadísticamente válidos, ejecutarlos correctamente y extraer conclusiones fiables.

**Contexto — pregúntame:**
- ¿Qué quiero testear? (asunto de email, anuncio, landing page, copy de CTA, imagen)
- ¿Cuál es la métrica principal que quiero mejorar? (CTR, tasa de apertura, conversión, revenue por visita)
- ¿Cuánto tráfico o audiencia tengo disponible para el test?
- ¿Qué tamaño de efecto mínimo necesito ver para que sea relevante para el negocio?

**Parte 1 — Los fundamentos estadísticos que debes entender**
Sin entender la base, los tests engañan:
- Hipótesis nula e hipótesis alternativa: qué estamos realmente preguntando
- Significancia estadística (p-value): qué significa y qué no significa un p < 0.05
- Potencia estadística y error de tipo II: por qué un test negativo puede ser una falsa conclusión
- Tamaño del efecto: la diferencia entre significancia estadística y relevancia para el negocio
- El problema del peaking: por qué mirar los resultados antes de tiempo invalida el test

**Parte 2 — Cómo calcular el tamaño de muestra antes de empezar**
El error más frecuente es empezar a testear sin saber cuántos datos necesitas:
- Explica la fórmula conceptual y qué variables intervienen (tasa base, efecto mínimo detectable, significancia, potencia)
- Cómo usar una calculadora de tamaño de muestra (dame los pasos con mi caso específico)
- Qué pasa si no tengo suficiente tráfico: alternativas (test de duración mayor, reducir el número de variantes, aceptar un efecto mínimo mayor)

**Parte 3 — Diseño del test**
Los detalles que determinan si el test es válido:
- Cómo definir la unidad de aleatorización (usuario, sesión, cookie, email) y por qué importa
- Cómo garantizar que los grupos son comparables antes del test (A/A test o balance check)
- Qué hacer con los usuarios que aparecen en ambas variantes (traffic leak)
- Cuántas variantes puedo testear simultáneamente sin comprometer la validez (el problema del multiple testing)
- Duración mínima del test: por qué nunca menos de una semana completa aunque hayas alcanzado significancia antes

**Parte 4 — Análisis e interpretación de resultados**
Cómo leer los resultados sin engañarme:
- Cuándo puedo declarar un ganador: los criterios que debo cumplir simultáneamente
- Cómo interpretar un resultado no significativo: ¿el test ha fracasado o ha aprendido?
- Métricas secundarias: cómo usarlas para entender el mecanismo, no para justificar un resultado que no te gusta
- Análisis de segmentos: cuándo hacerlo y cómo evitar el data dredging
- Cómo documentar el test para que el equipo aprenda, no solo para decidir qué variante lanzar

**Parte 5 — Tests A/B en canales específicos de marketing**
Particularidades por canal:
- Email: cómo gestionar el efecto del tiempo de envío, los ISPs y los tamaños de lista
- Anuncios paid (Google, Meta): cómo aislar el efecto de la variable que testeo del ruido del algoritmo
- Landing pages: cómo asegurar que el tráfico es comparable entre variantes cuando viene de múltiples fuentes

**Formato de salida:**
Estructura la respuesta en las cinco partes. Incluye un ejemplo concreto de cálculo de tamaño de muestra con datos ficticios, una checklist de diseño de test antes de empezar y una plantilla de documentación de resultados.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar y analizar tests A/B de marketing con rigor estadístico',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Optimización del funnel de conversión en aplicaciones web: análisis técnico y soluciones',
                'description'      => 'Aprende a identificar y resolver los cuellos de botella de conversión en aplicaciones web desde una perspectiva técnica. Combina análisis de datos de producto, optimización de rendimiento frontend y mejoras de UX basadas en datos. Reduce el abandono y aumenta la tasa de conversión sin necesitar un equipo de CRO dedicado.',
                'prompt_content'   => <<<'EOT'
Actúa como un senior developer con especialización en performance web y experiencia de usuario, que ha trabajado en equipos de producto donde la tasa de conversión es una métrica clave de éxito.

Tu objetivo es enseñarme a identificar, priorizar y resolver los problemas técnicos y de UX que impactan en la conversión de mi aplicación web.

**Contexto — pregúntame:**
- ¿Qué tipo de aplicación es? (SaaS, ecommerce, marketplace, herramienta freemium)
- ¿Cuál es el evento de conversión principal que queremos optimizar? (registro, primer pago, activación)
- ¿Qué stack técnico usamos? (framework frontend, analytics, A/B testing tool)
- ¿Qué datos de comportamiento tenemos ya? (analytics, grabaciones de sesión, heatmaps)

**Parte 1 — El funnel técnico: dónde pierde el usuario**
Antes de optimizar, diagnosticar:
- Cómo construir un funnel de conversión técnicamente preciso: diferencia entre pageviews, eventos de producto y transacciones
- Cómo identificar los pasos con mayor drop-off usando datos de analytics (Google Analytics 4, Mixpanel, Amplitude)
- El impacto del rendimiento técnico en la conversión: cada 100ms de latencia cuánto coste tiene en conversión (datos de Deloitte, Google)
- Cómo usar Core Web Vitals como proxy de conversión: LCP, FID/INP, CLS y sus umbrales críticos

**Parte 2 — Herramientas de diagnóstico técnico**
El stack mínimo para diagnosticar problemas de conversión:
- Análisis de rendimiento: Lighthouse, WebPageTest, Chrome DevTools. Cómo leer los resultados y qué priorizar
- Grabaciones de sesión: cómo configurar FullStory, Hotjar o Microsoft Clarity sin comprometer la privacidad del usuario (anonimización de datos sensibles)
- Heatmaps: cómo interpretar click maps, scroll maps y rage clicks. Qué patrones indican fricción
- Error tracking: cómo usar Sentry o similares para detectar errores JavaScript que interrumpen el flujo de conversión

**Parte 3 — Optimizaciones técnicas de alto impacto**
Las mejoras con mejor ROI para la conversión:
- Carga de página: lazy loading de imágenes, code splitting, prefetching de la siguiente página del funnel
- Formularios: autocompletado, validación inline, reducción de campos, persistencia del estado (que no pierda lo que ha escrito si hay un error)
- Gestión de errores: mensajes de error claros, recuperación del estado, alternativas cuando algo falla
- Mobile: cómo identificar y resolver problemas específicos del flujo de conversión en móvil (teclado que tapa el formulario, targets táctiles pequeños)
- Performance de APIs: cómo el tiempo de respuesta de las llamadas de backend afecta a la percepción de velocidad y a la conversión

**Parte 4 — Testing técnico de cambios de conversión**
Cómo testear los cambios de forma rigurosa:
- Feature flags para lanzamientos graduales: cómo usarlos para controlar la exposición sin hacer un A/B test completo
- Cómo implementar A/B testing a nivel de frontend sin comprometer la consistencia de la experiencia
- Cómo medir el impacto de una mejora de rendimiento en la conversión: metodología de pre/post con grupos de control
- Cómo documentar los cambios para que el equipo pueda aprender de los resultados

**Parte 5 — Priorización de oportunidades de CRO técnico**
No todo vale la pena arreglarlo:
- El framework ICE (Impacto, Confianza, Facilidad) adaptado a optimizaciones técnicas
- Cómo estimar el impacto económico de un punto porcentual de mejora en la conversión
- Cuándo la mejora técnica es suficiente y cuándo es necesario un rediseño de UX

**Formato de salida:**
Estructura la respuesta en las cinco partes con subtítulos claros. Incluye comandos o configuraciones específicas para las herramientas mencionadas, una tabla de priorización de mejoras técnicas con impacto/esfuerzo estimado y un checklist de diagnóstico técnico de conversión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Identificar y resolver cuellos de botella técnicos que reducen la conversión en aplicaciones web',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de landing pages de alta conversión: principios visuales y de UX',
                'description'      => 'Aprende a diseñar landing pages que convierten aplicando principios de psicología visual, jerarquía de información y reducción de fricción. Comprende cómo las decisiones de diseño afectan directamente a la tasa de conversión. Diseña páginas que guían al usuario hacia la acción de forma natural y eficaz.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador UX especializado en conversion-centered design con experiencia en landing pages para productos digitales, campañas de marketing y páginas de producto.

Tu objetivo es enseñarme los principios de diseño que maximizan la conversión y guiarme en el diseño o rediseño de una landing page específica.

**Contexto — pregúntame:**
- ¿Cuál es el objetivo de conversión de la landing page? (registro, compra, descarga, solicitud de demo)
- ¿Quién es la audiencia? (frío desde anuncio, lista de email, usuarios de prueba gratuita)
- ¿Cuál es el producto o servicio que ofrece la página?
- ¿Tenemos datos de comportamiento actuales? (heatmaps, grabaciones, tasa de conversión actual)

**Parte 1 — Los principios psicológicos detrás del diseño que convierte**
Por qué el diseño de conversión no es solo estética:
- Carga cognitiva: por qué menos opciones y menos texto convierten más (paradoja de la elección, Ley de Hick)
- Atención visual: cómo el ojo recorre la página (patrón F y patrón Z) y cómo el diseño puede guiar la mirada hacia el CTA
- Contraste y jerarquía: cómo usar tamaño, color y espacio para comunicar prioridad sin palabras
- Principio de Fitts: por qué el tamaño y la posición del botón de CTA importan más de lo que parece
- Social proof y su ubicación en la página: por qué el testimonio en el momento de fricción tiene más impacto que al principio

**Parte 2 — Estructura de una landing page de alta conversión**
La anatomía que funciona:
- Above the fold: el único lugar donde tienes la atención garantizada. Qué debe aparecer (headline, subheadline, CTA principal, imagen o vídeo hero)
- El headline: fórmulas que funcionan para distintas audiencias y objetivos de conversión
- La sección de beneficios vs. características: por qué "qué ganas tú" convierte más que "qué hace el producto"
- Social proof: tipos (testimonios, logos, números, reseñas) y cuál usar según la etapa del funnel
- CTA: copy, color, posición y número de repeticiones. La regla de un objetivo por página
- Reducción de objeciones: cómo anticipar y desactivar las dudas antes de que el usuario las formule

**Parte 3 — Decisiones de diseño visual que afectan a la conversión**
Los detalles que marcan la diferencia:
- Espacio en blanco como señal de calidad y como guía de atención
- Imágenes que convierten: personas reales vs. ilustraciones, producto en contexto vs. producto solo
- Color del CTA: cómo elegir un color de botón que destaque sin romper la identidad de marca
- Tipografía: tamaño mínimo para legibilidad en móvil, contraste de texto sobre fondo
- Consistencia visual con el anuncio de origen (message match): por qué la congruencia aumenta la conversión

**Parte 4 — Diseño para reducir fricción en el formulario**
Si hay un formulario, es el mayor punto de abandono:
- Número óptimo de campos: menos es más, pero cuáles son imprescindibles
- Diseño del formulario: campo único visible vs. formulario multi-paso, progress bar
- Microcopy de formulario: labels, placeholders, mensajes de error y de confirmación
- Indicadores de confianza junto al formulario: iconos de seguridad, política de privacidad, sin spam

**Parte 5 — Cómo preparar hipótesis de diseño para testear**
El diseño de conversión es un proceso iterativo:
- Cómo convertir observaciones de heatmap o grabación en hipótesis de diseño testable
- Formato de hipótesis: "Si cambiamos X por Y, esperamos ver Z porque..."
- Priorización de hipótesis: impacto esperado vs. esfuerzo de implementación
- Qué no testear nunca sin datos suficientes

**Formato de salida:**
Organiza la respuesta en las cinco partes con subtítulos. Incluye ejemplos concretos de headlines y CTAs para distintos contextos, una checklist de revisión de diseño de landing page antes de publicar y un ejemplo de hipótesis de test A/B bien formulada.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar landing pages de alta conversión aplicando principios de UX y psicología visual',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Análisis del funnel de ventas para identificar y eliminar puntos de abandono',
                'description'      => 'Aprende a construir y analizar el funnel de ventas con datos reales para identificar dónde se pierde el mayor número de oportunidades. Diseña intervenciones específicas para cada etapa del funnel y mide su impacto en la tasa de conversión. Aumenta el revenue sin necesitar más leads entrantes.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de ventas con fuerte orientación analítica, con experiencia en la optimización de funnels de ventas en empresas B2B de SaaS y servicios profesionales.

Tu objetivo es guiarme en el análisis riguroso de mi funnel de ventas para identificar dónde se pierden las oportunidades y diseñar acciones concretas para mejorar la conversión en cada etapa.

**Contexto — pregúntame:**
- ¿Cuáles son las etapas actuales de tu funnel de ventas? (prospecting, discovery, demo, propuesta, negociación, cierre)
- ¿Tienes un CRM con datos históricos? ¿Cuántos meses de datos tienes?
- ¿Cuál es el ticket medio y el ciclo de venta típico?
- ¿Cuál es la tasa de conversión global del funnel actualmente?
- ¿Cuál crees que es el mayor cuello de botella?

**Parte 1 — Construcción del funnel de ventas con datos reales**
Sin datos precisos, las opiniones son ruido:
- Cómo sacar el funnel de conversión de tu CRM: qué consultas hacer en Salesforce, HubSpot o Pipedrive
- Las métricas clave por etapa: volumen de oportunidades, tiempo medio en la etapa, tasa de conversión a la siguiente etapa
- Cómo identificar las oportunidades que se estancan (zombie deals): qué antigüedad en una etapa indica problema real
- Cómo segmentar el funnel por fuente de lead, tamaño de empresa, sector o vendedor para encontrar patrones

**Parte 2 — Diagnóstico de las causas de abandono por etapa**
Cada etapa tiene razones de pérdida distintas:
- De prospecting a discovery: problemas de targeting o de primer mensaje. Cómo analizar las respuestas y el no-contacto
- De discovery a demo: problemas de cualificación o de propuesta de valor. Cómo analizar las razones de rechazo documentadas en el CRM
- De demo a propuesta: problemas de la demo o del seguimiento post-demo. Análisis de las notas de llamada y de los tiempos de respuesta
- De propuesta a negociación: problemas de precio, de percepción de valor o de decisor. Cómo usar las conversaciones de negociación como datos
- De negociación a cierre: competencia, presupuesto, timing. Cómo hacer win/loss analysis sistemático

**Parte 3 — Diseño de intervenciones por etapa**
Para cada cuello de botella identificado, una acción concreta:
- Top of funnel: mejoras en el ICP targeting, en el primer mensaje y en los canales de prospecting
- Middle of funnel: mejoras en la demo (estructura, personalización, manejo de objeciones), templates de seguimiento post-demo
- Bottom of funnel: estrategias para acelerar la decisión (urgencia legítima, facilitar el proceso de aprobación interna del cliente), gestión de objeciones de precio
- Propuesta: estructura de propuesta que reduce la fricción de decisión, la propuesta de una página vs. el documento de 40 páginas

**Parte 4 — A/B testing en el proceso de ventas**
Cómo testear mejoras sin comprometer los deals actuales:
- Qué se puede testear en ventas: emails de prospecting, estructura de demo, templates de propuesta, timings de seguimiento
- Cómo diseñar un test A/B informal en ventas: control de variables, tamaño de muestra mínimo, métricas de éxito
- La diferencia entre testar el proceso y testar al vendedor: cómo aislar el efecto del cambio del efecto de la persona

**Parte 5 — Dashboard de conversión del funnel**
Cómo monitorizar el funnel de forma continua:
- Las 5 métricas que deben estar en el dashboard semanal del manager de ventas
- Frecuencia de revisión: qué revisar semanalmente, mensualmente y trimestralmente
- Cómo presentar el funnel al comité de dirección: el nivel de detalle correcto según la audiencia

**Formato de salida:**
Estructura la respuesta en las cinco partes con subtítulos claros. Incluye una tabla de métricas clave por etapa del funnel, un árbol de diagnóstico de causas de abandono y una plantilla de plan de acción por etapa con indicador de éxito medible.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Analizar el funnel de ventas para identificar y eliminar los mayores cuellos de botella de conversión',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Framework de experimentación de producto: construir una cultura de tests A/B',
                'description'      => 'Diseña e implementa un framework de experimentación riguroso para equipos de producto. Aprende a priorizar las hipótesis de test, a garantizar la validez estadística y a crear una cultura donde las decisiones se basan en evidencia. Escala la capacidad de experimentación sin aumentar el equipo.',
                'prompt_content'   => <<<'EOT'
Actúa como un Head of Product con fuerte background en experimentación, que ha construido programas de A/B testing en empresas como Booking.com, Airbnb o Spotify, donde la experimentación es el motor principal de la toma de decisiones de producto.

Tu objetivo es ayudarme a construir un framework de experimentación robusto y sostenible para el equipo de producto, desde la infraestructura hasta la cultura.

**Contexto — pregúntame:**
- ¿En qué tipo de empresa estamos? (SaaS, marketplace, app de consumo, ecommerce)
- ¿Cuántos PMs, diseñadores e ingenieros tiene el equipo?
- ¿Tenemos ya alguna herramienta de A/B testing? ¿Qué volumen de usuarios mensuales tenemos?
- ¿Cuántos tests hacemos actualmente por mes y cuál es el porcentaje de tests con resultado significativo?

**Parte 1 — Los pilares de un programa de experimentación maduro**
La diferencia entre un equipo que testea de vez en cuando y uno que experimenta sistemáticamente:
- Infraestructura técnica: qué herramienta de A/B testing usar según el volumen y el stack (Optimizely, LaunchDarkly, Statsig, Eppo o solución interna)
- Proceso de experimentación: cómo va una hipótesis desde la idea hasta el resultado documentado
- Gobernanza: quién puede lanzar un test, quién lo aprueba, quién lo detiene si hay un problema
- Cultura de aprendizaje: cómo celebrar los tests negativos como aprendizajes, no como fracasos

**Parte 2 — De la hipótesis al diseño del test**
El trabajo que más impacta en la calidad de los resultados se hace antes de lanzar:
- Cómo escribir una hipótesis de producto bien formada: problema → cambio → mecanismo esperado → métrica primaria
- Cómo elegir la métrica primaria: guardrail metrics vs. success metrics, por qué nunca testear con revenue directamente en las primeras etapas
- Cálculo de tamaño de muestra: herramientas y parámetros clave (significancia 95%, potencia 80%, MDE mínimo relevante para el negocio)
- Criterios de diseño del test: unit de aleatorización, duración mínima, segmentación pre-test

**Parte 3 — Priorización del backlog de experimentos**
No todos los tests valen igual:
- El framework PIE (Potential, Importance, Ease) adaptado a experimentación de producto
- Cómo calcular el Expected Value of an Experiment (EVE): probabilidad de éxito × impacto si funciona
- Cómo gestionar el backlog de hipótesis: quién las propone, cómo se enriquecen con datos cualitativos y cuantitativos, cómo se priorizan trimestralmente
- El problema del HiPPO (Highest Paid Person's Opinion) y cómo la experimentación lo neutraliza

**Parte 4 — Análisis e interpretación de resultados**
Cómo leer los resultados sin confirmar lo que ya creías:
- Sequential testing vs. fixed horizon: por qué el peaking invalida el test y cómo el sequential testing lo permite de forma segura
- Análisis de guardrail metrics: qué hacer cuando el test gana en la métrica primaria pero daña una guardrail
- Análisis de segmentos: la diferencia entre exploración post-hoc (genera hipótesis) y confirmación (necesita test nuevo)
- El process de ship/no-ship/iterate: cómo tomar la decisión correcta en los tres tipos de resultado (ganador claro, perdedor claro, resultado ambiguo)

**Parte 5 — Escalar la cultura de experimentación**
Cómo hacer que todo el equipo piense en términos de experimentos:
- Democratización del testing: cómo entrenar a PMs no técnicos para que diseñen tests válidos
- Repositorio de experimentos: cómo documentar y compartir los aprendizajes para que no se pierdan con la rotación
- Métricas del programa de experimentación: velocidad (tests por semana), calidad (% de tests con resultado significativo), impacto acumulado
- Cómo presentar el valor del programa de experimentación al CEO y al board

**Formato de salida:**
Estructura la respuesta en las cinco partes con subtítulos. Incluye una plantilla de diseño de experimento, un template de priorización PIE con ejemplo y una guía de decisión ship/no-ship/iterate según el tipo de resultado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Construir un framework de experimentación riguroso y una cultura de A/B testing en el equipo de producto',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Optimización del funnel de selección: reducir el abandono de candidatos',
                'description'      => 'Analiza y optimiza cada etapa del proceso de selección para reducir el abandono de candidatos cualificados. Aplica principios de CRO al funnel de reclutamiento: desde la oferta de trabajo hasta la firma del contrato. Mejora la experiencia del candidato y aumenta la tasa de conversión de aplicaciones a contrataciones.',
                'prompt_content'   => <<<'EOT'
Actúa como una directora de talento con experiencia en la aplicación de metodologías de growth y CRO al proceso de selección de personal, también conocido como recruitment funnel optimization.

Tu objetivo es ayudarme a analizar y optimizar el funnel de selección de mi empresa para reducir el abandono de candidatos cualificados y mejorar la experiencia de candidato en cada etapa.

**Contexto — pregúntame:**
- ¿Cuántas posiciones abrís al año aproximadamente?
- ¿Cuáles son las etapas actuales del proceso de selección y cuánto dura cada una?
- ¿Tienes datos de tasa de conversión entre etapas? ¿Cuál es el mayor punto de abandono?
- ¿Qué ATS o herramienta de reclutamiento usáis?
- ¿Cuáles son los perfiles donde más dificultades tenéis para cerrar candidatos?

**Parte 1 — El funnel de selección como funnel de conversión**
Por qué el reclutamiento es marketing de candidatos:
- Las etapas del recruitment funnel: awareness (la oferta) → consideration (la aplicación) → activation (las entrevistas) → conversion (la oferta) → retention (el onboarding)
- Cómo medir la tasa de conversión entre etapas con los datos del ATS
- Los benchmarks de conversión por sector y tipo de rol (ej. en tecnología: tasa de aplicación a entrevista técnica, tasa de paso de técnica a oferta)
- El coste de abandono en cada etapa: cuánto vale perder un candidato cualificado en la fase de oferta

**Parte 2 — Auditoría del funnel: dónde se pierden los mejores candidatos**
El diagnóstico antes de la solución:
- Cómo analizar los datos del ATS para construir el funnel por etapa y por perfil de puesto
- Los cuatro motivos principales de abandono por etapa: proceso demasiado largo, falta de comunicación, mala experiencia de entrevista, oferta no competitiva
- Cómo recopilar datos cualitativos: encuestas de candidato descartado, entrevistas de salida de proceso, análisis de reviews en Glassdoor
- El efecto del time-to-offer: datos sobre cómo la velocidad del proceso impacta en la tasa de aceptación de oferta

**Parte 3 — Optimizaciones de alto impacto por etapa**
Intervenciones concretas para cada punto del funnel:
- Oferta de trabajo: cómo redactar una oferta que filtra bien y atrae más (job description como landing page)
- Aplicación: cómo reducir la fricción del formulario de aplicación sin perder información necesaria
- Comunicación entre etapas: templates de comunicación proactiva que mantienen el engagement del candidato
- Entrevistas: cómo estructurar las entrevistas para que sean una buena experiencia independientemente del resultado
- Oferta y negociación: cómo diseñar el momento de la oferta para maximizar la aceptación
- Onboarding pre-inicio: qué hacer entre la firma y el primer día para evitar el ghosting

**Parte 4 — A/B testing en reclutamiento**
Qué se puede testear y cómo:
- Titulares y copy de ofertas de trabajo en LinkedIn y portales de empleo
- Formato de la primera entrevista (duración, estructura, quién participa)
- Timing y formato de comunicación entre etapas
- Estructura de la oferta económica (fijo + variable vs. total comp, presentación del paquete)
- Limitaciones del A/B testing en selección: por qué los volúmenes suelen ser pequeños y cómo adaptarse

**Parte 5 — Métricas del recruitment funnel optimizado**
Los indicadores que deben estar en el dashboard de selección:
- Time to fill y time to hire: diferencia y cuándo usar cada uno
- Offer acceptance rate: el indicador más revelador de la competitividad del proceso
- Candidate Net Promoter Score (cNPS): cómo medirlo y qué nivel es razonable por sector
- Quality of hire a 6 y 12 meses: la métrica definitiva pero más difícil de medir

**Formato de salida:**
Organiza la respuesta en las cinco partes con subtítulos. Incluye una tabla de benchmarks de conversión por etapa, una checklist de auditoría del funnel de selección y tres ejemplos de optimizaciones de alto impacto con el antes/después del proceso.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Optimizar el funnel de selección para reducir el abandono de candidatos cualificados',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de conversión en productos financieros: del lead al cliente activo',
                'description'      => 'Aprende a analizar y optimizar el funnel de conversión de productos financieros digitales, desde la captación hasta la activación del cliente. Aplica principios de CRO adaptados a las restricciones regulatorias del sector financiero. Reduce el abandono en el onboarding y aumenta la activación de nuevos clientes.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de growth de una fintech con experiencia en la optimización de funnels de adquisición y onboarding de productos financieros bajo restricciones regulatorias (KYC, AML, MiFID, PSD2).

Tu objetivo es ayudarme a analizar y optimizar el funnel de conversión de un producto financiero digital, desde el primer contacto hasta el cliente activo que usa el producto regularmente.

**Contexto — pregúntame:**
- ¿Qué tipo de producto financiero es? (cuenta, tarjeta, préstamo, inversión, seguro, neobank)
- ¿Cuáles son las etapas actuales del funnel? (desde el anuncio hasta la primera transacción)
- ¿Cuál es la tasa de abandono mayor y en qué etapa ocurre?
- ¿Bajo qué marco regulatorio operáis? (España, UE, LATAM)
- ¿Qué herramientas de analytics y A/B testing tenéis disponibles?

**Parte 1 — El funnel de un producto financiero: particularidades regulatorias**
Por qué el CRO financiero es diferente:
- El KYC (Know Your Customer) como el mayor punto de fricción: cómo equilibrar cumplimiento y conversión
- Los pasos regulatorios que no se pueden eliminar y los que sí se pueden optimizar
- El concepto de progressive onboarding: cómo pedir solo lo mínimo para el primer valor y recopilar el resto progresivamente
- Cómo la percepción de seguridad afecta a la conversión en productos financieros más que en cualquier otro sector

**Parte 2 — Diagnóstico del funnel financiero**
Cómo construir el funnel con datos precisos:
- Cómo segmentar el funnel por canal de adquisición: orgánico, paid, referidos, bancas de origen
- Los pasos críticos donde más se abandona en productos financieros: formulario inicial, verificación de identidad, vinculación de cuenta bancaria, primer depósito o transacción
- Cómo medir el tiempo entre etapas y qué tiempos de espera son aceptables vs. críticos para la conversión
- Cómo usar datos de session replay (con anonimización de datos sensibles) para entender el comportamiento en el formulario de KYC

**Parte 3 — Optimizaciones de conversión compatibles con el compliance**
Las mejoras que no comprometen el cumplimiento normativo:
- Formulario de solicitud: orden óptimo de los campos, progress bar, guardado automático del progreso
- Verificación de identidad: cómo hacer el proceso de OCR y selfie lo menos frustrante posible (instrucciones claras, gestión de errores, alternativas cuando falla)
- Comunicación de espera: cómo gestionar los períodos de revisión manual sin perder al candidato
- Onboarding post-aprobación: el primer valor en menos de 5 minutos como objetivo de diseño
- Notificaciones de activación: secuencia de emails y push para llevar al usuario a la primera transacción

**Parte 4 — A/B testing en entornos financieros regulados**
Las limitaciones y cómo trabajar dentro de ellas:
- Qué se puede testear sin impactar al cumplimiento: copy, diseño, orden de pasos, comunicaciones
- Qué no se puede testear sin validación legal: cambios en los formularios de KYC, modificaciones en los términos
- Cómo diseñar tests con muestras más pequeñas cuando el volumen de nuevos clientes es limitado
- Cómo usar feature flags para lanzamientos graduales y rollback rápido en caso de problemas

**Parte 5 — Métricas de conversión para productos financieros**
El dashboard del producto financiero:
- Application completion rate: % de solicitudes completadas sobre las iniciadas
- KYC pass rate: % de verificaciones superadas en el primer intento
- Time to first value: tiempo desde la aprobación hasta la primera transacción
- D7 / D30 activation rate: % de clientes aprobados que usan el producto en los primeros 7 y 30 días
- Cómo benchmarkar estas métricas contra el sector (fuentes de datos disponibles)

**Formato de salida:**
Estructura la respuesta en las cinco partes con subtítulos. Incluye una tabla de métricas con benchmarks del sector financiero, un árbol de diagnóstico del funnel y tres ejemplos de optimizaciones del proceso de KYC con el antes/después y el impacto esperado en la conversión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Optimizar el funnel de conversión de productos financieros digitales bajo restricciones regulatorias',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Optimización del funnel de captación de clientes para despachos de abogados',
                'description'      => 'Analiza y optimiza el proceso de captación de nuevos clientes en un despacho de abogados, desde la primera consulta hasta la firma del contrato de servicios. Aplica principios de CRO al embudo de ventas legal para aumentar la tasa de conversión de consultas a clientes. Mejora la experiencia del cliente potencial sin sacrificar la profesionalidad.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de marketing jurídico con experiencia en la optimización del proceso de captación de clientes en despachos de abogados de tamaño mediano.

Tu objetivo es ayudarme a analizar y optimizar el funnel de captación de nuevos clientes, desde el primer contacto hasta la firma del contrato de servicios legales.

**Contexto — pregúntame:**
- ¿Cuáles son las áreas de práctica del despacho? (laboral, mercantil, fiscal, penal, familia, etc.)
- ¿Cuáles son los canales de captación actuales? (web, referidos, directorios legales, publicidad)
- ¿Cuántas consultas iniciales recibís al mes y cuántas se convierten en clientes?
- ¿Cuánto dura el proceso desde la primera consulta hasta la firma del contrato?
- ¿Cuál crees que es el mayor punto de abandono?

**Parte 1 — El funnel de captación legal: sus particularidades**
Por qué convertir clientes legales es diferente a otros sectores:
- La barrera de la confianza: el cliente potencial está en un momento de vulnerabilidad y necesita sentir que está en manos expertas
- El ciclo de decisión largo en asuntos complejos: cómo mantener el contacto sin ser intrusivo durante el período de consideración
- Las restricciones éticas del marketing jurídico: qué está permitido y qué puede comprometer la reputación profesional
- La diferencia entre consulta informativa y consulta de negocio: cómo cualificar desde el primer contacto

**Parte 2 — Análisis del funnel actual**
Cómo medir lo que funciona y lo que no:
- Cómo construir el funnel con datos del CRM o incluso con una hoja de cálculo simple
- Las etapas clave: primera consulta → propuesta de honorarios → firma de contrato → primer pago
- Tasa de conversión en cada etapa y qué factores la explican
- Cómo hacer win/loss analysis en consultas perdidas: qué preguntar para entender el motivo real

**Parte 3 — Optimización de cada etapa del funnel**
Intervenciones concretas para mejorar la conversión:
- Primera toma de contacto (web, teléfono, email): tiempo de respuesta como factor crítico de conversión, guion de la primera llamada, formulario de contacto que cualifica
- Primera consulta: estructura que genera confianza y avanza hacia la propuesta, cómo presentar el expertise de forma que el cliente sienta que ha encontrado el despacho correcto
- Propuesta de honorarios: cómo presentar los honorarios sin que el precio sea el único criterio de decisión, opciones de pago como facilitador de cierre
- Período entre propuesta y firma: cómo mantener el contacto de forma profesional y útil sin presionar
- Firma y onboarding del cliente: cómo hacer que el inicio de la relación refuerce la decisión del cliente

**Parte 4 — La experiencia digital como palanca de conversión**
Cómo la web y los canales digitales pueden mejorar la conversión:
- Web del despacho: elementos que generan confianza (perfiles del equipo, casos representativos sin identificar, publicaciones, premios)
- SEO y contenido: cómo el contenido informativo capta clientes en fase de búsqueda activa
- Directorios legales (Avvo, Justia, Idealex, Rankia Legal): cómo optimizar el perfil para mejorar la conversión
- Google My Business: gestión de reseñas como palanca de conversión para consultas locales

**Parte 5 — Métricas del funnel de captación legal**
Los indicadores clave para monitorizar el proceso:
- Tasa de conversión de consulta a cliente por área de práctica y canal
- Tiempo medio desde la primera consulta hasta la firma
- Coste de adquisición de cliente por canal
- Valor de vida del cliente (LTV): cómo calcularlo en un despacho con clientes recurrentes
- Net Promoter Score de nuevos clientes: cómo medirlo y usarlo para mejorar el proceso de captación

**Formato de salida:**
Responde con las cinco partes claramente delimitadas. Incluye un guion de primera consulta, una estructura de propuesta de honorarios que facilita la conversión y una tabla de métricas con frecuencia de revisión recomendada.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Optimizar el funnel de captación de clientes en despachos de abogados',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Optimización de la tasa de conversión en el onboarding de clientes SaaS',
                'description'      => 'Diseña y optimiza el proceso de onboarding de clientes SaaS para maximizar la tasa de activación y reducir el churn temprano. Aprende a identificar los momentos de fricción en el primer uso y a diseñar intervenciones que lleven al cliente al primer valor lo antes posible. Convierte más trials en clientes de pago y más nuevos clientes en usuarios activos a largo plazo.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en customer onboarding y product-led growth con experiencia en empresas SaaS B2B. Has diseñado y optimizado funnels de onboarding que han mejorado significativamente las tasas de activación y reducido el churn temprano.

Tu objetivo es ayudarme a analizar y optimizar el proceso de onboarding de nuevos clientes o usuarios de prueba de mi producto SaaS.

**Contexto — pregúntame:**
- ¿Cuál es el modelo de negocio? (trial gratuito, freemium, demo guiada, implementación asistida)
- ¿Cuál es el "momento aha" del producto? (la primera vez que el usuario experimenta el valor central)
- ¿Cuánto tarda actualmente un usuario nuevo en llegar a ese momento aha?
- ¿Cuál es la tasa de activación actual (D7 o D14)?
- ¿Qué herramientas de análisis y automatización de onboarding tenéis?

**Parte 1 — El onboarding como funnel de conversión**
Por qué el onboarding es el momento de mayor impacto en la retención:
- La curva de valor del onboarding: la brecha entre el valor prometido en marketing y el valor experimentado en el uso real
- Time to value (TTV) como la métrica más importante del onboarding: cómo medirlo y cuál es el benchmark para tu tipo de producto
- La diferencia entre el onboarding de producto (en-app) y el onboarding de éxito del cliente (asistido): cuándo usar cada uno
- Por qué los usuarios que llegan al momento aha en los primeros 7 días tienen una retención dramáticamente superior

**Parte 2 — Diagnóstico: dónde abandona el usuario en el onboarding**
El análisis de datos antes de las hipótesis:
- Cómo construir el funnel de onboarding con datos de eventos de producto: qué eventos clave mapear
- Cómo identificar el paso con mayor drop-off en el onboarding inicial (primeras 24-48 horas)
- Session replay del onboarding: qué comportamientos indican confusión o frustración (rage clicks, inactividad prolongada, navegación errática)
- Análisis de los usuarios que sí activan: ¿qué pasos completaron en las primeras 24 horas que los que no activaron no hicieron?

**Parte 3 — Rediseño del flujo de onboarding**
Las intervenciones con mayor impacto en la activación:
- El setup mínimo viable: cuánta configuración necesita el usuario para llegar al valor central. Eliminar todo lo que no sea estrictamente necesario para el primer momento aha
- Los tooltips y product tours: cuándo ayudan y cuándo entorpecen. La regla de no más de 3 pasos guiados en el primer uso
- Los empty states: cómo convertirlos en palancas de activación en lugar de pantallas en blanco desorientadoras
- Las plantillas y el contenido de demo: cómo dar al usuario algo con lo que trabajar inmediatamente para experimentar el valor
- Los checklists de onboarding: diseño, gamificación y cuándo mostrarlos

**Parte 4 — Secuencias de comunicación para el onboarding**
Los emails y notificaciones que mejoran la activación:
- La secuencia de bienvenida de 7 días: qué enviar cada día, qué objetivo tiene cada email
- Los triggers de comportamiento: cómo enviar el mensaje correcto basado en lo que el usuario ha hecho (o no ha hecho) en el producto
- Las intervenciones de rescate: cómo detectar a los usuarios en riesgo de abandono en los primeros 7 días y qué hacer
- El uso correcto de los CSMs en el onboarding B2B: cuándo el onboarding asistido es más eficiente que el self-serve

**Parte 5 — A/B testing del onboarding**
Cómo mejorar el onboarding de forma iterativa y basada en datos:
- Qué hipótesis de onboarding testear primero: las que tienen mayor impacto teórico y menor riesgo técnico
- Cómo diseñar un test A/B de onboarding cuando los volúmenes son pequeños
- Las métricas de éxito de un test de onboarding: activación a D7, retención a D30, conversión a pago
- Cómo documentar los aprendizajes del onboarding para que el equipo de producto los use en el desarrollo futuro

**Formato de salida:**
Organiza la respuesta en las cinco partes con subtítulos. Incluye un ejemplo de mapa de eventos de onboarding, una secuencia de emails de bienvenida de 7 días y una tabla de priorización de hipótesis de onboarding con impacto/confianza/facilidad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Optimizar el onboarding de clientes SaaS para maximizar la activación y reducir el churn temprano',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Optimización de la tasa de conversión en la web de un freelancer',
                'description'      => 'Aprende a optimizar la web o el portfolio de un freelancer para convertir más visitantes en consultas y propuestas. Aplica principios de CRO al caso específico de un profesional independiente con recursos limitados. Mejora el copy, la estructura y los elementos de confianza para atraer clientes de mayor calidad.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de CRO especializado en webs de profesionales independientes y servicios B2B de alto valor. Has optimizado webs de consultores, diseñadores, desarrolladores, copywriters y otros freelancers para que generen más y mejores consultas.

Tu objetivo es ayudarme a optimizar mi web o portfolio para mejorar la tasa de conversión de visitantes a consultas o propuestas, sin necesitar grandes inversiones.

**Contexto — pregúntame:**
- ¿Cuál es tu especialidad freelance?
- ¿Qué tipo de clientes quieres atraer? (tamaño de empresa, sector, tipo de proyecto)
- ¿Cuántas visitas mensuales tiene la web y cuántas consultas genera al mes?
- ¿Cuál es la estructura actual de la web? (home, sobre mí, servicios, portfolio, contacto)
- ¿Cuál crees que es el mayor problema de conversión?

**Parte 1 — Los cinco factores de conversión en una web de freelancer**
Por qué la mayoría de webs de freelancers no convierten bien:
- Claridad: ¿el visitante entiende en 5 segundos qué haces, para quién y qué resultado obtendrá?
- Credibilidad: ¿tiene suficientes señales de confianza para tomar el primer paso?
- Relevancia: ¿habla el lenguaje del cliente que quieres, o el tuyo?
- Acción: ¿está claro qué debe hacer el visitante y qué pasará después?
- Fricción: ¿cuántos pasos tiene que dar para contactarte?

**Parte 2 — Auditoría de la home: el página más importante**
La home es donde se decide si el visitante sigue o se va:
- Above the fold: el titular, el subtítulo y el CTA. Cómo evaluar si el mensaje es claro y relevante para el cliente objetivo
- El headline de freelancer que convierte: la fórmula "[Qué haces] para [quién] que quieren [resultado]"
- Cómo hablar de beneficios, no de features del servicio: el error del "soy diseñador UX con 10 años de experiencia" vs. "diseño interfaces que reducen el abandono en apps de fintech"
- El social proof mínimo viable: qué testimonios, clientes y resultados necesitas mostrar y cómo presentarlos

**Parte 3 — La página de servicios como herramienta de precualificación**
Una buena página de servicios filtra a los malos clientes antes de que contacten:
- Cómo estructurar los servicios para que el cliente ideal se reconozca a sí mismo
- El precio en la web: ventajas y desventajas de mostrarlo, y cómo comunicar el rango de inversión sin ahuyentar ni atraer al cliente equivocado
- El proceso de trabajo: por qué explicar cómo trabajas aumenta la conversión de clientes de calidad
- Las FAQs como eliminadoras de objeciones: las 5 preguntas que más hacen los clientes antes de contactar

**Parte 4 — El portfolio que convierte**
Los errores más comunes en portfolios de freelancers:
- Mostrar el proceso, no solo el resultado: por qué los clientes compran tu forma de pensar, no solo tu output
- El case study de alta conversión: estructura (problema → proceso → resultado medible → aprendizaje)
- Cómo presentar el portfolio cuando eres nuevo o cuando hay piezas de NDA: alternativas creíbles
- La relevancia sobre la cantidad: 3 casos muy bien explicados para tu cliente ideal convierten más que 30 imágenes de proyectos variados

**Parte 5 — El CTA y el formulario de contacto: la última milla**
Donde muchas webs fallan en el momento decisivo:
- El CTA principal: una sola acción por página, copy que describe lo que pasará ("Reserva una llamada de 30 minutos"), posición y diseño
- El formulario de contacto mínimo: qué campos son necesarios para cualificarte y cuántos son demasiados
- La landing de confirmación: qué pasa después de enviar el formulario (expectativas claras sobre tiempo de respuesta)
- Quick wins de conversión que se pueden implementar esta semana: los cambios de mayor impacto con menor esfuerzo

**Formato de salida:**
Organiza la respuesta en las cinco partes con subtítulos claros. Incluye tres ejemplos de headlines de freelancer de distintas especialidades, una checklist de auditoría de conversión para la home y los 5 quick wins prioritarios para implementar esta semana.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Optimizar la web o portfolio freelance para convertir más visitantes en consultas de calidad',
                'vote_score'       => 47,
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
