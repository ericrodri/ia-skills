<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills479Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Prospección hiperpersonalizada con IA para campañas de marketing B2B',
                'description'      => 'Usa IA para identificar señales de compra, personalizar mensajes a escala y construir listas de prospectos de alta conversión en marketing B2B.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en account-based marketing y generación de demanda B2B, con especialización en el uso de IA para la prospección hiperpersonalizada a escala.

**tarea principal:**
Necesito construir un sistema de prospección basado en IA que permita al equipo de marketing identificar los cuentas correctas, detectar el momento óptimo para contactar y personalizar los mensajes de manera que resuenen con cada prospecto de forma individual.

**instrucción: Fase 1 — Construcción del perfil de cliente ideal (ICP) con IA**
Ayúdame a definir mi ICP con una precisión quirúrgica usando datos e IA:
- Lista los 15 atributos de empresa más predictivos de conversión (firmographics + technographics + behavioral signals)
- ¿Cómo puedo usar herramientas de IA para enriquecer una lista de empresas con estos atributos automáticamente?
- ¿Qué señales de intención (intent data) debo monitorear para identificar prospectos en modo de compra activa?
- Define los criterios de puntuación para crear un lead score de cuenta (account score de 0 a 100)

Con esta información, crea una hoja de puntuación de ICP que el equipo de marketing pueda usar para priorizar sus esfuerzos.

**instrucción: Fase 2 — Detección de señales de compra con IA**
Crea un sistema de alertas de señales de compra. Para cada señal, dame:
- Cómo detectarla (qué herramienta o fuente de datos)
- Qué indica sobre el momento de compra del prospecto
- Qué acción de marketing debe dispararse como respuesta
- Un ejemplo de mensaje de seguimiento personalizado

Señales a monitorear:
1. Visitas repetidas al sitio web de precio o demo
2. Descarga de contenido de fondo de embudo
3. Búsquedas de palabras clave de competidores
4. Cambio de liderazgo en la empresa objetivo
5. Ronda de financiación reciente
6. Expansión geográfica o de headcount
7. Publicación de ofertas de trabajo en roles relevantes
8. Menciones en redes sociales de problemas que mi solución resuelve

**instrucción: Fase 3 — Personalización a escala con IA**
Construye un sistema de personalización masiva para campañas outbound:
- Estructura de mensaje base con variables de personalización (empresa, industria, cargo, trigger event)
- Flujo de trabajo para enriquecer cada contacto con datos relevantes antes de escribir el mensaje
- Plantilla de prompt para generar el primer párrafo hiperpersonalizado usando IA (máximo 3 oraciones)
- Sistema de variantes A/B por segmento de industria y tamaño de empresa

Crea un ejemplo completo de secuencia de 5 contactos hiperpersonalizados para un prospecto específico que hayas identificado como de alto potencial.

**instrucción: Fase 4 — Métricas y optimización**
Define el sistema de medición del programa de prospección con IA:
- KPIs por etapa: tasa de apertura, respuesta, reunión, oportunidad calificada
- Cómo usar IA para analizar los patrones de los mensajes con mejor rendimiento
- Frecuencia y criterios de revisión y ajuste del sistema
- Dashboard de métricas recomendado para presentar al liderazgo

**objetivo final:** Tener un sistema de prospección de marketing B2B que combine inteligencia de datos con personalización basada en IA para generar el doble de leads calificados con el mismo presupuesto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir sistema de prospección B2B hiperpersonalizada con IA para marketing',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Automatizar pipeline de ventas con scripts de IA para equipos de desarrollo',
                'description'      => 'Integra IA en el proceso de ventas de servicios técnicos: desde la calificación automática hasta el análisis de propuestas y el forecast predictivo.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en ventas técnicas y automatización de procesos comerciales para empresas de software y servicios de desarrollo. Tu especialidad es combinar el conocimiento técnico con estrategias de venta efectivas potenciadas por IA.

**tarea:**
Soy líder de un equipo de desarrollo o de una empresa de software y quiero implementar IA en todo el ciclo de ventas, desde la generación de leads hasta el cierre de contratos, sin perder el toque humano que requieren las ventas de servicios técnicos.

**instrucción: Módulo 1 — Calificación técnica automatizada con IA**
Diseña un sistema de calificación de leads para proyectos técnicos:
- Lista de 10 preguntas de descubrimiento técnico que debe responder cada lead
- Cómo usar IA para analizar las respuestas y calcular la complejidad y viabilidad del proyecto
- Sistema de scoring técnico: puntuación de 1 a 10 en cinco dimensiones (viabilidad técnica, presupuesto, urgencia, fit de equipo, potencial de expansión)
- Criterios de descalificación automática: ¿cuándo debe un lead salir del pipeline sin invertir tiempo?

Crea el prompt que usará tu equipo de preventa para calificar técnicamente cada oportunidad en 15 minutos.

**instrucción: Módulo 2 — Generación de propuestas técnicas con IA**
Construye el sistema de propuestas automatizadas:
- Estructura óptima de propuesta técnica para proyectos de desarrollo
- Prompt para generar la sección de alcance técnico basándose en el brief del cliente
- Plantilla de desglose de estimación de tiempo y coste por fase y por rol
- Cómo usar IA para identificar riesgos técnicos y documentarlos en la propuesta
- Sistema de revisión automática: checklist de calidad que la IA aplica antes de enviar

**instrucción: Módulo 3 — Seguimiento automatizado inteligente**
Diseña el sistema de nurturing post-propuesta:
- Secuencia de seguimiento de 5 puntos de contacto con timing y canal recomendados
- Cómo usar IA para personalizar cada mensaje de seguimiento según el comportamiento del prospecto
- Señales de alerta temprana de que el deal está en riesgo y cómo responder
- Sistema de "rescue" para oportunidades que llevan más de 14 días sin respuesta

**instrucción: Módulo 4 — Forecast predictivo con IA**
Implementa un sistema de previsión de ventas basado en IA:
- Variables que mejor predicen el cierre de un proyecto técnico (tamaño, industria, ciclo, interlocutores)
- Cómo entrenar a la IA con datos históricos para mejorar la precisión del forecast
- Dashboard de pipeline con probabilidades de cierre ponderadas por IA
- Alertas automáticas de oportunidades que se desvían del patrón de cierre histórico

**objetivo final:** Reducir el ciclo de venta promedio en un 30% y aumentar la tasa de conversión de propuesta a contrato mediante la automatización inteligente de los puntos de fricción más costosos del proceso comercial técnico.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Automatizar pipeline de ventas técnico con IA para equipos de desarrollo de software',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Vender servicios de diseño con IA: prospección y propuestas ganadoras',
                'description'      => 'Usa IA para prospectar clientes potenciales, personalizar tu pitch creativo y cerrar proyectos de diseño con propuestas visuales irresistibles.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de negocio para diseñadores freelance y agencias creativas, especializado en estrategias de ventas para servicios de diseño. Combinas el entendimiento del mundo creativo con técnicas probadas de venta consultiva.

**tarea:**
Como diseñador o líder de una agencia creativa, vender es la parte más difícil del negocio. Voy a usar IA para hacer que mi proceso de ventas sea más sistemático, eficiente y efectivo, sin perder la autenticidad y el toque creativo que define mi trabajo.

**instrucción: Sección 1 — Prospección creativa con IA**
Diseña mi sistema de prospección para clientes de diseño:
- ¿Cómo identificar empresas que necesitan diseño urgentemente? (señales: rebrandings, lanzamientos de producto, expansión a nuevos mercados, materiales visuales desactualizados)
- Lista de fuentes de leads para diseñadores: plataformas, eventos, comunidades y foros donde buscan diseño
- Plantilla de análisis de prospecto: cómo evaluar el potencial creativo y comercial de un cliente antes de contactar
- Cómo usar IA para investigar el contexto y la historia de una empresa en 5 minutos antes de cada outreach

Crea el proceso de investigación previa que debo hacer para cada prospecto de alto valor.

**instrucción: Sección 2 — El pitch creativo perfecto**
Estructura mi pitch para servicios de diseño:
- Cómo presentar mi propuesta de valor en función del ROI del diseño (no solo de la estética)
- Guión de primera llamada de 20 minutos: preguntas de descubrimiento creativo y de negocio
- Cómo usar IA para crear un "diagnóstico visual rápido" del prospecto antes de la reunión
- Técnica de presentación de portafolio: cómo seleccionar y narrar casos de estudio relevantes para cada cliente

Escribe un guión de pitch de 5 minutos para presentar mis servicios de diseño a un director de marketing de una empresa de retail.

**instrucción: Sección 3 — Propuestas visuales ganadoras**
Construye el sistema de propuestas con IA:
- Estructura de propuesta de diseño que cierra: problema → visión → proceso → entregables → inversión → siguiente paso
- Cómo usar IA para personalizar cada propuesta con referencias al lenguaje y los objetivos del cliente
- Presentación del pricing: cómo estructurar paquetes que maximicen el valor percibido
- Cómo incluir moodboards y primeras referencias visuales en la propuesta para generar emoción

**instrucción: Sección 4 — Negociación y cierre**
Técnicas de negociación para creativos:
- Cómo responder a "es muy caro" sin bajar el precio
- Argumentos de valor del diseño basados en datos (conversión, reconocimiento de marca, percepción de precio)
- Técnica de "opciones": cómo presentar tres paquetes para guiar al cliente al que más te conviene
- Script de seguimiento post-propuesta para los primeros 7 días

**objetivo final:** Tener un proceso de ventas documentado que me permita cerrar un proyecto nuevo de diseño al mes con un ticket medio 40% más alto que el actual.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Sistema de ventas para diseñadores con prospección IA y propuestas creativas ganadoras',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Sistema de ventas con IA: de la prospección al cierre en 30 días',
                'description'      => 'Construye un proceso de ventas completo potenciado por IA: prospección hiperpersonalizada, análisis de señales de compra, seguimiento automatizado y cierre predictivo.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de ventas con más de 15 años de experiencia en ventas B2B de ciclo complejo y como experto en la implementación de IA en procesos comerciales. Tu enfoque combina la psicología de la venta con la eficiencia que aporta la tecnología.

**tarea central:**
Quiero construir un sistema de ventas moderno y potenciado por IA que me permita prospectar mejor, personalizar más y cerrar más rápido. Este sistema debe funcionar tanto para un vendedor individual como para un equipo de ventas.

**instrucción: Bloque 1 — Inteligencia de prospección**
Construye el sistema de inteligencia para encontrar y priorizar los mejores prospectos:

Definición del ICP con precisión de láser:
- Los 10 atributos de empresa que mejor predicen la conversión en mi sector
- Los 5 perfiles de contacto (buyer personas) con sus motivaciones, miedos y criterios de decisión
- La "señal de compra perfecta": qué eventos o comportamientos indican que un prospecto está listo para comprar ahora

Sistema de priorización:
- Cómo crear un lead score dinámico que se actualice con cada interacción
- Reglas de priorización: ¿cuándo escalar un lead del equipo de marketing al equipo de ventas?
- Proceso de enriquecimiento de datos: qué información buscar y cómo usar IA para obtenerla en minutos

Genera el prompt que usaré para investigar a un prospecto nuevo antes de cualquier contacto.

**instrucción: Bloque 2 — Outreach hiperpersonalizado**
Construye el sistema de primer contacto:
- Marco de mensaje frío perfecto: gancho de valor → relevancia personal → propuesta de valor → CTA específico
- Cómo usar IA para personalizar el primer párrafo de cada mensaje con información del prospecto
- Estrategia multicanal: secuencia y timing óptimo por email, LinkedIn y teléfono
- Reglas de follow-up: cuántos intentos, con qué cadencia y cuándo parar

Escribe una secuencia de 5 mensajes completos (email + LinkedIn) para contactar a un Director de Operaciones de una empresa de logística de 200 empleados que recientemente levantó 5M€ de financiación.

**instrucción: Bloque 3 — Gestión del ciclo de venta**
Optimiza cada etapa del pipeline:
- Primera reunión: script de descubrimiento de 45 minutos con las 10 preguntas que debes hacer sí o sí
- Demo o presentación: cómo usar IA para personalizar la demo en función del perfil del buyer
- Propuesta: estructura, pricing y argumentación que maximizan la conversión
- Negociación: técnicas de manejo de objeciones y cómo usar IA para prepararlas

**instrucción: Bloque 4 — Cierre y forecast predictivo**
Implementa inteligencia predictiva en el pipeline:
- Señales de alerta temprana de un deal en riesgo (y cómo recuperarlo)
- Técnicas de cierre consultivo para ventas de ciclo largo
- Cómo calcular la probabilidad de cierre de cada oportunidad con IA
- Dashboard de forecast semanal para el manager: métricas clave y alertas

**instrucción: Bloque 5 — Optimización continua**
Construye el ciclo de mejora continua:
- Análisis de win/loss con IA: qué patrones distinguen los deals ganados de los perdidos
- Revisión semanal de pipeline: proceso de 30 minutos para identificar bloqueos y oportunidades
- Entrenamiento del equipo: cómo usar grabaciones de llamadas y análisis de IA para mejorar habilidades

**objetivo final:** Un sistema de ventas documentado, reproducible y potenciado por IA que aumente la tasa de cierre un 25% y reduzca el ciclo de venta un 20% en los próximos 90 días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir sistema completo de ventas B2B con IA desde prospección hasta cierre predictivo',
                'vote_score'       => 62,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Validar y vender la visión de producto con IA antes de construir',
                'description'      => 'Usa IA para investigar el mercado, construir el business case, identificar early adopters y vender internamente tu roadmap de producto.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager senior con experiencia en lanzamiento de productos B2B y B2C, y como experto en el uso de IA para validación de mercado y venta interna de la visión de producto.

**tarea:**
Tengo una idea de producto o una nueva feature importante y necesito dos cosas: validar que el mercado la quiere y venderla internamente a stakeholders (liderazgo, ingeniería, ventas, marketing). Voy a usar IA para hacer ambas cosas de manera más rápida y efectiva.

**instrucción: Módulo 1 — Investigación de mercado con IA**
Construye mi proceso de validación de mercado acelerado:
- Cómo usar IA para analizar conversaciones de usuarios en comunidades, foros y redes sociales y extraer los trabajos por hacer (jobs to be done) más frecuentes
- Análisis de competidores: marco de evaluación de 5 competidores directos e indirectos usando solo información pública
- Entrevistas de usuario: guión de 30 minutos para entrevistas de descubrimiento y cómo usar IA para analizar los patrones de 10+ entrevistas en minutos
- Tamaño de mercado: metodología bottom-up para calcular TAM/SAM/SOM con datos accesibles

Ayúdame a diseñar el proceso de validación de mi idea en 2 semanas sin presupuesto de investigación.

**instrucción: Módulo 2 — Identificar y vender a early adopters**
Construye el sistema para encontrar y convencer a los primeros usuarios:
- Perfil del early adopter ideal: ¿quién tiene el problema más agudo y mayor disposición a probar algo nuevo?
- Dónde encontrarlos: canales, comunidades y eventos donde viven
- Pitch a early adopters: cómo presentar un producto que aún no existe de manera que genere compromiso real
- Programa beta: estructura de un programa de beta testers que genere feedback accionable y casos de éxito tempranos

Escribe el email de outreach para invitar a 20 potenciales early adopters a unirse al beta privado de mi producto.

**instrucción: Módulo 3 — Venta interna de la visión de producto**
Diseña el proceso de influencia interna para conseguir recursos y aprobación:
- Business case de una página: estructura que convence a un CFO en 5 minutos
- Narrativa de producto: cómo contar la historia del producto usando el framework "present → future → bridge"
- Presentación de roadmap: cómo presentar el plan a 12 meses de manera que genere entusiasmo en ingeniería y ventas
- Gestión de objeciones internas: las 10 objeciones más comunes ("ya tenemos demasiado trabajo", "el mercado es pequeño", "¿y si no funciona?") y cómo responderlas

**instrucción: Módulo 4 — Métricas de éxito para la validación**
Define los criterios objetivos de validación:
- North Star Metric del proceso de validación: ¿cuándo sabes que tienes suficiente evidencia para construir?
- OKRs de la fase de descubrimiento: qué debo lograr en 30 días para justificar continuar
- Umbrales de decisión: go/no-go basado en datos, no en opiniones

**objetivo final:** Llegar a la reunión de planificación del siguiente trimestre con un business case basado en evidencia que consiga los recursos necesarios para construir el producto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Validar mercado y vender internamente la visión de producto con IA antes de construir',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Vender programas de RRHH internamente con IA y datos de impacto',
                'description'      => 'Usa IA para construir el business case de iniciativas de talento, personalizar la comunicación con stakeholders y conseguir presupuesto para programas de RRHH.',
                'prompt_content'   => <<<'EOT'
Actúa como un Chief People Officer y consultor de estrategia de RRHH con especialización en la venta interna de programas de talento a liderazgo ejecutivo y en el uso de IA para construir argumentos basados en datos.

**tarea:**
Los profesionales de RRHH enfrentan el reto constante de conseguir presupuesto y apoyo para iniciativas de talento que tienen un impacto real pero que son difíciles de cuantificar. Voy a usar IA para construir argumentos más sólidos, personalizar mi comunicación con cada stakeholder y cerrar más aprobaciones.

**instrucción: Sección 1 — Diagnóstico de necesidades del negocio**
Antes de vender cualquier programa, ayúdame a conectarlo con los objetivos del negocio:
- Framework de alineación: cómo mapear cada iniciativa de RRHH a un objetivo estratégico de la empresa
- Las 5 preguntas que debes hacerle al CEO antes de proponer un programa de talento
- Cómo usar IA para analizar los informes de resultados y la comunicación del liderazgo para identificar los temas que más preocupan (rotación, productividad, cultura, talento escaso)
- Traducción de RRHH a lenguaje de negocio: glosario de traducción de términos de talento a impacto financiero

**instrucción: Sección 2 — Business case con datos e IA**
Construye el argumento económico de tus iniciativas:
- Cómo calcular el coste real de la rotación (fórmula con datos internos)
- ROI del employer branding: impacto en coste por contratación y tiempo de cobertura de vacantes
- Impacto de la formación en productividad: metodología para cuantificar el retorno de programas de desarrollo
- Cómo usar IA para benchmarking externo: comparar tus métricas con datos del sector

Ayúdame a construir el business case para un programa de mentoring interno para retener a los top performers, con datos hipotéticos que pueda reemplazar con los reales de mi empresa.

**instrucción: Sección 3 — Personalización por stakeholder**
Adapta tu pitch a cada audiencia interna:
- CFO: qué datos financieros le importan y cómo presentarlos
- CEO: qué narrativa estratégica le resuena más
- Managers de área: qué beneficios operativos les mueven a apoyar
- Comité de dirección: cómo presentar el plan en 10 minutos que genere aprobación

Para cada stakeholder, crea el gancho de comunicación de una sola frase y los 3 argumentos clave.

**instrucción: Sección 4 — Seguimiento y demostración de impacto**
Construye el sistema de accountability del programa:
- Dashboard de métricas de impacto para actualizar trimestralmente al liderazgo
- Cómo usar IA para analizar encuestas de empleados y extraer insights accionables en minutos
- Estrategia de comunicación de victorias tempranas para mantener el apoyo durante la implementación
- Plan de revisión anual: cómo presentar resultados y conseguir renovación de presupuesto

**objetivo final:** Conseguir la aprobación del 80% de las iniciativas de RRHH propuestas al liderazgo en el próximo año fiscal, con el apoyo explícito del CFO y el CEO.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir business case y vender programas de RRHH internamente con IA y datos de impacto',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Vender servicios financieros con IA: prospección y cierre en banca y fintech',
                'description'      => 'Usa IA para personalizar el pitch financiero, identificar oportunidades de cross-selling y cerrar servicios de alto valor con análisis predictivo.',
                'prompt_content'   => <<<'EOT'
Actúa como un director comercial de servicios financieros con experiencia en banca privada, banca corporativa y fintech, especializado en el uso de IA para optimizar el proceso de ventas en un sector altamente regulado y relacional.

**tarea:**
Los servicios financieros se venden sobre la base de confianza, expertise y timing. Voy a usar IA para ser más preciso en la identificación de oportunidades, más relevante en mi comunicación y más efectivo en el cierre, todo dentro de los límites normativos del sector.

**instrucción: Bloque 1 — Inteligencia de clientes y prospectos**
Construye el sistema de inteligencia comercial para servicios financieros:
- Señales de compra en el sector financiero: ¿qué eventos de vida o de negocio indican que un cliente necesita un servicio específico?
- Modelos de propensión: cómo segmentar la cartera de clientes por probabilidad de contratar cada producto
- Análisis de cartera: cómo usar IA para identificar oportunidades de cross-selling y up-selling en clientes existentes
- Prospección: dónde encontrar empresas o individuos que encajan con el perfil de cliente ideal

Crea el proceso de análisis de cartera mensual que haría un asesor financiero usando IA para identificar las 10 mejores oportunidades.

**instrucción: Bloque 2 — Personalización del pitch financiero**
Adapta la propuesta de valor a cada perfil:
- Cómo usar IA para personalizar la presentación de productos financieros según el perfil de riesgo, etapa de vida y objetivos del cliente
- Argumentos de venta por segmento: empresas en crecimiento vs. empresas consolidadas, inversores conservadores vs. agresivos, emprendedores vs. directivos corporativos
- Cómo presentar rentabilidades y comparativas de manera que el cliente tome decisiones informadas y se sienta confiado
- Gestión de objeciones financieras más comunes: "no es el momento", "lo tengo en otro banco", "los tipos están mal", "necesito pensarlo"

**instrucción: Bloque 3 — Proceso de venta consultiva financiera**
Diseña el ciclo de venta adaptado a servicios financieros:
- Primera reunión: preguntas de descubrimiento financiero que crean rapport y revelan necesidades reales
- Propuesta personalizada: cómo estructurar una propuesta financiera que compare escenarios y cuantifique el beneficio
- Seguimiento normativo: cómo hacer un seguimiento efectivo respetando las restricciones de comunicación del sector
- Cierre: técnicas adaptadas a la toma de decisión financiera (que suele ser más lenta y reflexiva)

**instrucción: Bloque 4 — Forecast y gestión del pipeline financiero**
Implementa inteligencia predictiva en el pipeline:
- Cómo estimar la probabilidad de cierre considerando factores específicos del sector (estacionalidad, ciclos de auditoría, periodos de renovación)
- Dashboard de pipeline para el director comercial: métricas de actividad, pipeline ponderado y forecast trimestral
- Análisis de rentabilidad: no solo del volumen vendido, sino del margen y el valor de vida del cliente

**objetivo final:** Aumentar el ratio de cross-selling de la cartera de clientes existente en un 30% y reducir el ciclo de venta promedio de nuevos productos en un 25% mediante el uso estratégico de IA en el proceso comercial.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Optimizar ventas de servicios financieros con IA: prospección, pitch personalizado y cierre',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Captar clientes para despacho legal con IA: prospección y pitch jurídico',
                'description'      => 'Usa IA para identificar clientes potenciales para tu despacho, personalizar el pitch de servicios legales y construir relaciones comerciales en el sector jurídico.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de desarrollo de negocio para despachos de abogados y juristas independientes, con experiencia en el uso de IA para la captación y retención de clientes en un sector donde la relación personal y la reputación son el activo más valioso.

**tarea:**
Desarrollar negocio en el sector legal tiene particularidades únicas: la publicidad es limitada, el boca a boca es el canal principal y los clientes necesitan tiempo para confiar. Voy a usar IA para hacer más eficiente y efectivo mi proceso de desarrollo de negocio respetando las normas deontológicas de la profesión.

**instrucción: Sección 1 — Estrategia de captación legal**
Define mi sistema de desarrollo de negocio:
- Los 5 canales de captación más efectivos para despachos en mi especialidad (señala las diferencias entre litigación, corporate, laboral, fiscal, etc.)
- Cómo usar IA para identificar empresas en mi zona geográfica que tienen necesidades legales no cubiertas (cambios regulatorios, fusiones, expansión, litigios públicos)
- Red de referidos: cómo sistematizar las referencias de otros profesionales (notarios, asesores fiscales, banqueros) usando IA para el seguimiento
- Thought leadership: plan de contenido jurídico con IA que genere autoridad y atraiga clientes inbound

Crea un plan de desarrollo de negocio de 90 días para un abogado mercantilista que quiere aumentar su cartera de clientes corporativos.

**instrucción: Sección 2 — Primera reunión con prospecto legal**
Diseña el proceso de la primera reunión:
- Investigación previa: cómo usar IA para investigar a la empresa prospecto (estructura societaria, litigios pasados, regulaciones aplicables, directivos) en 30 minutos
- Guión de reunión: preguntas de descubrimiento que identifican las necesidades legales reales sin que parezca un interrogatorio
- Cómo presentar la propuesta de valor del despacho de manera diferencial cuando el prospecto habla también con otros despachos
- Seguimiento post-reunión: email de resumen y propuesta en 48 horas

**instrucción: Sección 3 — Propuesta de servicios legales**
Construye el sistema de propuestas:
- Estructura de propuesta legal que comunica valor (no solo honorarios)
- Cómo usar IA para personalizar cada propuesta con referencias al caso o necesidad específica del cliente
- Modelos de honorarios: fijo, por hora, de éxito, cuota mensual — cuándo proponer cada uno y cómo
- Cómo responder a "sus honorarios son muy altos" con argumentos de valor concretos

**instrucción: Sección 4 — Gestión y fidelización de clientes**
Maximiza el valor de los clientes existentes:
- Sistema de revisión anual de las necesidades legales del cliente con IA
- Cómo usar IA para identificar oportunidades de servicios adicionales basadas en cambios en la situación de la empresa
- Newsletter legal mensual: proceso con IA para crear contenido relevante que mantenga el contacto sin ser invasivo
- Gestión de referencias: cómo pedirlas, cuándo y cómo sistematizar el proceso

**objetivo final:** Generar 3 nuevos clientes corporativos por trimestre y aumentar el valor medio de la relación con clientes existentes en un 20% a través de un proceso de desarrollo de negocio estructurado y potenciado por IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Desarrollar negocio para despacho legal con IA: captación, pitch jurídico y fidelización',
                'vote_score'       => 24,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Vender renovaciones y upsells con IA en customer success',
                'description'      => 'Usa IA para identificar señales de expansión, personalizar el pitch de renovación y convertir el health score en una estrategia de cierre efectiva.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP de Customer Success con experiencia en SaaS B2B y con especialización en el uso de IA para convertir el customer success en un motor de ingresos, no solo de retención.

**tarea:**
En el modelo de suscripción moderno, el CS es responsable de una parte creciente de los ingresos: renovaciones, upsells, expansión de licencias y nuevos módulos. Voy a usar IA para convertir cada conversación de éxito en una oportunidad de crecimiento de ingresos.

**instrucción: Módulo 1 — Inteligencia de expansión**
Construye el sistema de identificación de oportunidades de crecimiento:
- Las 8 señales de expansión más fiables en un cliente SaaS (uso intensivo, nuevos usuarios, tickets de feature request, preguntas sobre módulos premium, crecimiento del equipo del cliente, etc.)
- Cómo usar IA para analizar los datos de uso del producto y generar una "expansion score" por cliente
- Matriz de oportunidades: cómo cruzar el health score con la propensión a expandir para priorizar
- Alertas automáticas: qué señales deben disparar una conversación de expansión inmediata

Crea el proceso de revisión mensual de cartera que un CSM debe hacer usando IA para identificar los 5 mejores candidatos a upsell.

**instrucción: Módulo 2 — El pitch de renovación basado en valor**
Diseña el proceso de renovación proactiva:
- Timing: cuándo iniciar la conversación de renovación (90 días, 60 días, 30 días antes del vencimiento) y por qué
- Business review de renovación: estructura de la reunión de 45 minutos que cierra la renovación y abre la conversación de expansión
- Cómo usar IA para preparar el "value story" de cada cliente: qué resultados han conseguido, qué problemas han resuelto, cuánto tiempo/dinero han ahorrado
- Técnicas de cierre de renovación: cómo convertir una renovación transaccional en una conversación de asociación estratégica

**instrucción: Módulo 3 — Upsell y cross-sell consultivo**
Construye el sistema de ventas de expansión:
- Marco de upsell consultivo: cómo identificar el problema o ambición del cliente que justifica el upgrade
- Presentación de valor incremental: cómo mostrar el ROI de pasar al plan superior o añadir módulos
- Negociación de expansión: cómo manejar "ya pagamos mucho" y "necesitamos aprobación del CFO"
- Cierre de upsell: técnicas adaptadas al contexto de una relación existente (diferente al cierre de new business)

**instrucción: Módulo 4 — Forecast de expansión con IA**
Implementa la previsión de ingresos de expansión:
- Cómo calcular el Net Revenue Retention (NRR) y qué factores lo afectan
- Modelo de forecast de renovaciones: qué variables considerar para estimar el churn y la expansión del trimestre
- Dashboard de CS para el CRO: métricas de renovación, expansion revenue, NRR y at-risk accounts
- Análisis de win/loss de renovación: qué patrones distinguen a los clientes que expanden de los que no renuevan

**objetivo final:** Alcanzar un NRR superior al 120% en 12 meses convirtiendo el equipo de CS en un verdadero motor de crecimiento de ingresos potenciado por IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Convertir CS en motor de ingresos con IA: renovaciones, upsells y expansion revenue',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Sistema de ventas freelance con IA: de la propuesta al cierre',
                'description'      => 'Construye tu proceso de ventas como freelancer con IA: califica clientes, personaliza propuestas, negocia con confianza y cierra proyectos de mayor valor.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach de negocio para freelancers de alto rendimiento, especializado en ayudar a profesionales independientes a construir sistemas de ventas que les permitan trabajar menos horas, con mejores clientes y a tarifas más altas.

**tarea:**
Como freelancer, vender es una de las actividades más incómodas pero más críticas de tu negocio. Voy a usar IA para hacer que mi proceso de ventas sea más sistemático, menos dependiente de la improvisación y más efectivo en la conversión de prospectos en clientes bien pagados.

**instrucción: Paso 1 — Calificación de clientes con IA**
Define mis criterios de cliente ideal y el proceso de calificación:
- Los 7 atributos del cliente perfecto para un freelancer (presupuesto, respeto, claridad, potencial de relación larga, tipo de proyecto, etc.)
- Las 5 señales de alerta de un cliente problemático y cómo detectarlas en el primer contacto
- Proceso de descubrimiento: las 10 preguntas que debes hacer antes de enviar cualquier propuesta
- Sistema de puntuación: cómo evaluar a cada prospecto del 1 al 10 y decidir si vale la pena el esfuerzo de proponer

Ayúdame a crear mi "cliente ideal scorecard" personalizada para mi especialidad.

**instrucción: Paso 2 — El pitch freelance perfecto**
Estructura mi proceso de primer contacto:
- Cómo responder a una petición de información de manera que posicione el valor antes de hablar de precio
- Primera llamada de 30 minutos: guión de preguntas de descubrimiento que crean confianza y revelan el dolor real
- Cómo usar IA para personalizar cada propuesta con referencias específicas a los objetivos y la situación del cliente
- Técnica de "espejo": cómo usar el lenguaje del propio cliente en tu comunicación para crear resonancia

**instrucción: Paso 3 — Propuestas que cierran**
Diseña el sistema de propuestas de alto impacto:
- Estructura de propuesta freelance de 5 páginas que convierte (problema → visión → proceso → entregables → inversión)
- Cómo presentar el precio de manera que no sea el centro de la conversación
- Paquetes y opciones: cómo estructurar 2-3 opciones para guiar al cliente a la que más te conviene
- Garantías y reducción de riesgo: qué puedes ofrecer para que decir que sí sea una decisión fácil

Crea una plantilla de propuesta completa adaptable a tu especialidad con todos los elementos que deben aparecer.

**instrucción: Paso 4 — Negociación con confianza**
Construye tu arsenal de negociación:
- Cómo responder a "es muy caro" sin bajar el precio (5 respuestas alternativas)
- Técnica de "el silencio": cuándo callarte y dejar que el prospecto tome la iniciativa
- Negociación de alcance vs. precio: cómo reducir el proyecto en vez de bajar la tarifa
- Cuándo y cómo declinar un proyecto de manera profesional que deje la puerta abierta

**instrucción: Paso 5 — Seguimiento y cierre**
Implementa el sistema de cierre:
- Proceso de seguimiento post-propuesta: cuándo escribir, qué decir y cuándo parar
- Técnicas de cierre suave adaptadas a la venta de servicios profesionales
- Cómo usar la urgencia legítima (agenda disponible, inicio de proyecto) para acelerar la decisión
- Onboarding de nuevo cliente: cómo el proceso de bienvenida puede prevenir problemas futuros y fidelizar

**objetivo final:** Duplicar tu tasa de cierre de propuestas y aumentar el ticket medio de tus proyectos en un 40% en los próximos 6 meses mediante un proceso de ventas documentado, reproducible y potenciado por IA.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Sistema de ventas freelance con IA: calificación de clientes, propuestas ganadoras y cierre',
                'vote_score'       => 52,
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
