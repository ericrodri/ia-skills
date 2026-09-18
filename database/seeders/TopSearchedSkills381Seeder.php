<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills381Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Gestión de riesgos de reputación en campañas de marketing',
                'description'      => 'Aprende a identificar, evaluar y mitigar los riesgos reputacionales antes, durante y después de campañas de marketing. Cubre crisis de marca en redes sociales, errores de comunicación y estrategias de respuesta ante controversias públicas.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de comunicación de crisis con experiencia en gestión de riesgos reputacionales para marcas de consumo, startups y empresas cotizadas. Voy a diseñar o revisar una campaña de marketing y necesito un proceso sistemático para identificar y mitigar los riesgos reputacionales asociados.

CONTEXTO
Las campañas de marketing viven en un entorno de hipersensibilidad: cualquier imagen, eslogan o mecánica mal concebida puede convertirse en tendencia negativa en cuestión de horas. La gestión de riesgos reputacionales en marketing no es una tarea de comunicación de crisis (reactiva), sino un proceso preventivo que debe ocurrir antes del lanzamiento.

FASE 1 — AUDITORÍA DE RIESGOS DE LA CAMPAÑA
Antes de aprobar cualquier campaña:
- Análisis de contenido: qué mensajes, imágenes, referencias culturales o mecánicas de la campaña podrían ser malinterpretados o considerados ofensivos por algún segmento de la audiencia
- Mapa de partes interesadas sensibles: qué colectivos, comunidades o grupos de interés podrían ver la campaña de manera negativa aunque no sea el público objetivo
- Test de "titulares negativos": cómo aparecería esta campaña en un artículo crítico en un medio de comunicación — qué titular escribiría un periodista hostil
- Revisión de antecedentes: campañas similares de otras marcas que generaron controversia y qué lecciones se pueden extraer
- Análisis cultural por mercado: si la campaña es internacional, qué elementos pueden funcionar en un mercado y ser problemáticos en otro

FASE 2 — MATRIZ DE RIESGOS REPUTACIONALES
Construye una matriz de riesgos específica para marketing:
- Dimensiones de evaluación: probabilidad de ocurrencia del riesgo (1-5) × impacto reputacional (1-5) = nivel de riesgo
- Categorías de riesgo: apropiación cultural, representación estereotipada, contenido sexista o discriminatorio, doble lectura de mensajes, asociación con temas sensibles, riesgo legal (copyright, comparativa desleal), riesgo operativo (promesas que no se pueden cumplir)
- Para cada riesgo identificado: descripción, probabilidad, impacto, plan de mitigación preventiva, plan de respuesta si se materializa
- Criterios para bloquear el lanzamiento vs. ajustar la campaña vs. proceder con monitorización reforzada

FASE 3 — PLAN DE MONITORIZACIÓN DURANTE LA CAMPAÑA
- Herramientas de escucha social: cómo configurar alertas en tiempo real para menciones de la marca, el hashtag de la campaña y palabras clave relacionadas
- Indicadores de alarma temprana: qué señales en las primeras 24-48 horas indican que un riesgo se está materializando
- Protocolo de escalada: quién recibe la alerta, en qué tiempo, y quién toma la decisión de intervenir
- Umbrales de actuación: cuándo una mención negativa es ruido normal y cuándo indica una crisis emergente

FASE 4 — GESTIÓN DE CRISIS REPUTACIONAL EN MARKETING
Si a pesar de la prevención se desencadena una crisis:
- El protocolo de las primeras 2 horas: qué hacer antes de emitir ninguna declaración pública
- Las tres opciones de respuesta: ignorar (raramente recomendable), responder con humor, disculparse y retirar — cuándo aplicar cada una
- Redacción del comunicado de crisis: estructura, tono, qué admitir y qué no, cómo no empeorar la situación
- Decisión de retirar la campaña: cuándo la retirada es la respuesta correcta y cómo comunicarla
- Gestión en redes sociales durante la crisis: qué publicar, qué no publicar, cómo manejar los comentarios

FASE 5 — POST-CRISIS Y APRENDIZAJE
- Análisis de impacto reputacional: cómo medir el daño a la marca después de una crisis
- Reconstrucción de la reputación: qué acciones de comunicación y marketing ayudan a recuperar la confianza
- Actualización de los procesos de revisión: cómo incorporar los aprendizajes de la crisis en el proceso de aprobación de futuras campañas
- Documentación interna: cómo registrar la crisis para que sea un recurso de formación, no una vergüenza que se olvida

FORMATO DE RESPUESTA
Estructura la respuesta en las cinco fases. Incluye una plantilla de matriz de riesgos reputacionales en formato de tabla, un checklist de 30 preguntas para la revisión previa al lanzamiento de una campaña, y un template de comunicado de crisis para marketing.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Identificar y mitigar riesgos reputacionales en campañas de marketing',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Gestión de riesgos técnicos en proyectos de desarrollo de software',
                'description'      => 'Aprende a identificar, cuantificar y mitigar los riesgos técnicos en proyectos de software: deuda técnica, dependencias críticas, seguridad, escalabilidad y riesgo de entrega. Cubre frameworks de gestión de riesgos adaptados al ciclo de desarrollo ágil.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software senior y experto en gestión de riesgos técnicos en proyectos de desarrollo de software, con experiencia en equipos ágiles, proyectos enterprise y startups en fase de escalado. Voy a implementar o mejorar un proceso de gestión de riesgos técnicos para un proyecto de desarrollo y necesito un framework completo.

CONTEXTO
Los proyectos de software fallan frecuentemente por riesgos que eran identificables pero no se gestionaron: dependencias externas que se vuelven inestables, deuda técnica que paraliza la velocidad de entrega, vulnerabilidades de seguridad que se detectan tarde, o estimaciones incorrectas que provocan retrasos en cascada. Este framework convierte la gestión de riesgos técnicos en un proceso sistemático integrado en el ciclo de desarrollo.

COMPONENTE 1 — TAXONOMÍA DE RIESGOS TÉCNICOS
Organiza los riesgos técnicos en categorías manejables:

Riesgos de arquitectura y diseño:
- Elecciones tecnológicas que dificultan la escalabilidad futura
- Acoplamiento excesivo entre componentes
- Ausencia de separación de responsabilidades
- Dependencias circulares o antipatrones de diseño

Riesgos de dependencias:
- Librerías de terceros sin mantenimiento activo (proyectos abandonados en npm, PyPI, Maven)
- Dependencia de APIs externas sin SLA garantizado
- Vendor lock-in en servicios cloud o bases de datos propietarias
- Versiones de lenguaje o framework próximas al end-of-life

Riesgos de seguridad:
- Vulnerabilidades conocidas en dependencias (CVE tracking)
- Manejo incorrecto de datos sensibles
- Superficies de ataque no consideradas en el diseño
- Ausencia de plan de respuesta ante brecha de seguridad

Riesgos de entrega y operaciones:
- Estimaciones incorrectas por complejidad no evaluada
- Ausencia de pruebas automatizadas en áreas críticas
- Procesos de despliegue frágiles o manuales
- Ausencia de observabilidad (monitoring, alertas, trazabilidad)

Para cada categoría: cómo identificar los riesgos en el contexto de un sprint planning o una revisión de arquitectura.

COMPONENTE 2 — PROCESO DE IDENTIFICACIÓN CONTINUA
La gestión de riesgos no es un evento de inicio de proyecto:
- Riesgos en el Sprint Planning: cómo identificar riesgos técnicos en cada historia de usuario antes de comprometerse con ella
- Riesgos en las retrospectivas: cómo extraer riesgos de los impedimentos y problemas surgidos en el sprint anterior
- Riesgos en la revisión de PR: qué señales en un pull request indican un riesgo técnico que debe ser registrado y gestionado
- Técnicas de identificación proactiva: Architecture Decision Records (ADRs), análisis de puntos de fallo únicos (SPOF), threat modeling

COMPONENTE 3 — CUANTIFICACIÓN Y PRIORIZACIÓN
No todos los riesgos merecen la misma atención:
- Probabilidad de ocurrencia: cómo estimarla objetivamente para riesgos técnicos (datos históricos del equipo, complejidad del dominio, madurez de la tecnología)
- Impacto técnico y de negocio: cómo traducir un riesgo técnico (ej: "la base de datos no escala") en impacto de negocio (ej: "el sistema no puede soportar el crecimiento proyectado para Q3")
- Risk score: probabilidad × impacto — cómo usarlo para priorizar el backlog de riesgos
- El registro de riesgos técnicos: estructura del documento, responsable, estado, acciones de mitigación y fecha de revisión

COMPONENTE 4 — ESTRATEGIAS DE MITIGACIÓN POR CATEGORÍA
Para cada categoría de riesgo, estrategias específicas:
- Deuda técnica: técnica de "deuda documentada" — cómo registrar la deuda intencional y programar su amortización
- Dependencias externas: circuit breakers, feature flags, estrategias de fallback
- Seguridad: software composition analysis (SCA) automatizado, penetration testing programado, threat modeling en el diseño
- Estimaciones: técnica de "planning poker con riesgo explícito", buffers basados en datos históricos del equipo
- Disponibilidad: chaos engineering, runbooks, ensayos de recuperación ante desastres (game days)

COMPONENTE 5 — INTEGRACIÓN EN EL CICLO ÁGIL
Cómo integrar la gestión de riesgos en el día a día del equipo sin convertirla en burocracia:
- Riesgos como user stories técnicas: cómo añadir al backlog las acciones de mitigación de riesgos
- Risk review mensual: agenda y dinámica de una sesión de revisión de riesgos de 60 minutos con el equipo
- Reportes de riesgos para stakeholders no técnicos: cómo comunicar riesgos técnicos al product owner, al CTO o a la dirección
- Métricas de salud técnica relacionadas con riesgos: cobertura de tests, tiempo de ciclo de despliegue, MTTR (Mean Time To Recovery), deuda técnica medida

FORMATO DE RESPUESTA
Desarrolla los cinco componentes con profundidad técnica. Incluye una plantilla de registro de riesgos técnicos en formato de tabla con todos los campos recomendados, y un checklist de riesgos técnicos para revisar al inicio de cualquier nuevo proyecto o al incorporarse a un equipo existente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar gestión de riesgos técnicos en proyectos de desarrollo ágil',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Gestión de riesgos en proyectos creativos y de diseño',
                'description'      => 'Aprende a identificar y gestionar los riesgos específicos de proyectos creativos: cambios de dirección de cliente, derechos de propiedad intelectual, plazos de producción, revisiones infinitas y riesgos de entrega en proyectos de diseño, branding y producción audiovisual.',
                'prompt_content'   => <<<'EOT'
Actúa como un director creativo con amplia experiencia en gestión de proyectos creativos complejos: desde identidades corporativas hasta campañas integrales, producción audiovisual y proyectos de diseño de producto. Voy a implementar un proceso de gestión de riesgos en mis proyectos creativos y necesito un framework adaptado a la naturaleza subjetiva e iterativa del trabajo creativo.

CONTEXTO
Los proyectos creativos tienen riesgos únicos que los frameworks estándar de gestión de proyectos no contemplan: la subjetividad del resultado, la dependencia de la aprobación del cliente en cada hito, la gestión de la inspiración y los bloqueos creativos, y la propiedad intelectual de los elementos creados. Este framework adapta la gestión de riesgos a la realidad del profesional creativo.

DIMENSIÓN 1 — RIESGOS DE CLIENTE Y RELACIÓN
La mayoría de los proyectos creativos fracasan por problemas con el cliente, no por problemas técnicos:
- Riesgo de cambio de brief: el cliente modifica la dirección del proyecto después de haber aprobado la estrategia inicial — cómo identificar la señal de alerta antes de que ocurra
- Riesgo de "muerte por revisiones": ciclos infinitos de cambios sin avance hacia la aprobación final — cómo prevenirlo contractualmente y cómo gestionarlo cuando ya ocurre
- Riesgo de interlocutor múltiple: diferentes personas del cliente tienen visiones contradictorias — cómo identificar y trabajar con el decisor real
- Riesgo de expectativas no alineadas: el cliente tiene en mente algo que no coincide con lo acordado — técnicas de validación de expectativas antes de empezar a crear
- Riesgo de abandono de proyecto: el cliente desaparece durante semanas y luego quiere entregas inmediatas — cómo gestionar esto contractualmente

DIMENSIÓN 2 — RIESGOS DE PROPIEDAD INTELECTUAL
Los riesgos de PI son especialmente relevantes en proyectos creativos:
- Uso de imágenes, tipografías o música sin licencia adecuada: cómo implementar un proceso de verificación de licencias en el flujo de producción
- Riesgo de similitud involuntaria con obras existentes: cómo documentar el proceso creativo para demostrar originalidad
- Propiedad del trabajo hasta el pago: qué ocurre legalmente con el trabajo entregado si el cliente no paga — cómo protegerse
- Uso del trabajo más allá del alcance acordado: el cliente usa una pieza diseñada para un medio en otros canales — cómo incluir cláusulas de uso en el contrato
- Atribución: el cliente elimina el crédito al creador — cuándo importa y cómo gestionarlo

DIMENSIÓN 3 — RIESGOS DE PRODUCCIÓN Y PLAZOS
- Riesgo de dependencias externas: imprenta, proveedor de fotografía, músico, programador que no entrega a tiempo y afecta la entrega final
- Riesgo de revisión técnica tardía: el diseño final no funciona en la implementación (web, impresión, aplicación) por razones técnicas que no se consideraron en el diseño
- Riesgo de bloqueo creativo: cómo incluir tiempo de exploración en la planificación sin comprometer el plazo
- Riesgo de archivo y versiones: trabajar sobre la versión incorrecta de un archivo — sistemas de nomenclatura y versionado recomendados
- Riesgo de pérdida de datos: backup y almacenamiento de proyectos creativos — frecuencia, ubicación y verificación

DIMENSIÓN 4 — RIESGOS DE NEGOCIO Y FINANCIEROS EN PROYECTOS CREATIVOS
- Riesgo de subestimación de alcance: el proyecto resulta mucho más complejo de lo estimado — técnicas para estimar proyectos creativos con márgenes realistas
- Riesgo de impago: el cliente no paga la factura final después de recibir el trabajo — estructura de pagos por hitos y retención de derechos
- Riesgo de dependencia de un cliente: cuando un solo cliente representa más del 30-40% de los ingresos — señales de alerta y estrategia de diversificación
- Riesgo de reputación: el cliente usa el trabajo de una manera que daña la reputación del creativo — cláusulas de asociación de marca y derecho de retirada

DIMENSIÓN 5 — PROCESO DE GESTIÓN DE RIESGOS EN PROYECTOS CREATIVOS
Cómo implementar un proceso liviano y no burocrático:
- Checklist de riesgos en el kick-off: 15 preguntas para identificar los principales riesgos antes de empezar a crear
- El acta de proyecto como herramienta de gestión de riesgos: qué debe incluir para prevenir los riesgos más frecuentes
- Hitos de validación temprana: por qué mostrar trabajo en proceso (WIP) reduce el riesgo de cambio de dirección tardío
- Plantilla de gestión de cambios: cómo documentar formalmente cada cambio de scope y su impacto en plazo y precio

FORMATO DE RESPUESTA
Desarrolla las cinco dimensiones. Incluye un checklist de riesgos para el kick-off de proyectos creativos con las 20 preguntas más críticas, una plantilla de gestión de cambios de scope y una guía de verificación de licencias de activos creativos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar riesgos en proyectos de diseño, branding y producción creativa',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Gestión de riesgos en el pipeline de ventas y previsiones comerciales',
                'description'      => 'Aprende a identificar y gestionar los riesgos que afectan al pipeline de ventas: oportunidades sobre-estimadas, dependencias de un solo decisor, riesgos de concentración de cartera y señales de alerta que predicen el cierre de una oportunidad.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP de Ventas con experiencia en la gestión de pipelines comerciales en empresas SaaS B2B, servicios profesionales y venta consultiva de ciclo largo. Voy a implementar un proceso de gestión de riesgos en mi pipeline de ventas y necesito un framework que mejore la precisión de las previsiones y reduzca las sorpresas al cierre de trimestre.

CONTEXTO
El mayor riesgo en ventas no es perder oportunidades que parecían ganadas — eso ocurre. El verdadero riesgo es no saber que una oportunidad está en riesgo hasta que es demasiado tarde para intervenir. La gestión de riesgos en el pipeline transforma las previsiones de ventas de un ejercicio de wishful thinking a un proceso basado en señales objetivas.

MÓDULO 1 — SEÑALES DE RIESGO EN OPORTUNIDADES DE VENTA
Identifica las señales que predicen que una oportunidad está en riesgo:

Señales de riesgo en el decisor:
- El champion interno ha cambiado de posición o ha dejado la empresa
- El decisor económico nunca ha participado directamente en el proceso
- El interlocutor evita hablar de presupuesto o de fechas de decisión
- Largos períodos sin contacto sin explicación del cliente

Señales de riesgo en el proceso:
- La oportunidad lleva más tiempo en una etapa que el promedio histórico del equipo
- No hay una fecha de decisión clara o la fecha se ha movido más de dos veces
- El cliente no ha completado los pasos acordados (reunión técnica, piloto, revisión legal)
- Solo hay un interlocutor en el cliente y no se ha conseguido ampliar el acceso

Señales de riesgo en la competencia:
- El cliente ha pedido una segunda demostración después de un silencio
- El proceso de decisión se ha ampliado o complicado sin razón aparente
- El cliente hace preguntas muy específicas sobre características que no son prioritarias para él

MÓDULO 2 — CATEGORIZACIÓN DEL RIESGO DE PIPELINE
- El sistema de semáforo: cómo categorizar cada oportunidad en riesgo bajo (verde), medio (amarillo) y alto (rojo) de manera objetiva
- Variables objetivas vs. intuición del vendedor: cómo combinar datos del CRM con la experiencia del comercial para una evaluación equilibrada
- Ajuste del pipeline ponderado: cómo aplicar factores de riesgo a las probabilidades de cierre declaradas para obtener una previsión más realista
- Riesgo de concentración: cuándo una sola oportunidad grande representa un riesgo excesivo para el objetivo trimestral y cómo gestionarlo

MÓDULO 3 — INTERVENCIÓN EN OPORTUNIDADES EN RIESGO
Cuando se identifica una oportunidad en riesgo:
- El plan de recuperación: en qué orden actuar cuando una oportunidad grande está en riesgo a 30 días del cierre de trimestre
- Estrategias de re-engagement: cómo retomar el contacto con un prospecto que ha dejado de responder sin parecer desesperado
- Escalada ejecutiva: cuándo y cómo involucrar a un directivo de la empresa para reforzar una oportunidad en riesgo
- La concesión estratégica: cuándo ofrecer una condición especial para desbloquear una oportunidad y cómo justificarlo internamente

MÓDULO 4 — RIESGOS DE CONCENTRACIÓN Y DEPENDENCIA EN CARTERA
- Riesgo de concentración de cliente: cuando un cliente representa más del 20% de los ingresos recurrentes — plan de contingencia y diversificación
- Riesgo de concentración de sector: cuando la mayoría del pipeline proviene de un solo sector que puede entrar en crisis
- Riesgo de concentración de vendedor: cuando el conocimiento de las relaciones con clientes clave está en una sola persona del equipo
- Riesgo de concentración geográfica: dependencia de un mercado o región que puede verse afectada por factores externos

MÓDULO 5 — PROCESO DE REVISIÓN DE PIPELINE CON GESTIÓN DE RIESGOS
- Cadencia de revisión: cómo estructurar las reuniones semanales de pipeline para que sean una herramienta de detección de riesgos, no solo de actualización de estado
- Preguntas de gestión de riesgo para el one-on-one de ventas: las 10 preguntas que un director comercial debe hacer a cada vendedor sobre sus oportunidades en riesgo
- Dashboard de riesgos de pipeline: qué métricas incluir en un dashboard de gestión de riesgos de ventas
- Integración con el CRM: cómo capturar y trackear los indicadores de riesgo de manera que los datos sean útiles para la analítica

FORMATO DE RESPUESTA
Estructura la respuesta en los cinco módulos. Incluye una scorecard de riesgo de oportunidad con todos los criterios y pesos, una agenda de reunión de revisión de pipeline orientada a riesgos y un dashboard de métricas de riesgo de ventas con las fórmulas de cálculo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar riesgos del pipeline de ventas y mejorar la precisión de previsiones',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de riesgos en el desarrollo de producto digital',
                'description'      => 'Aprende a identificar, priorizar y mitigar los riesgos en el desarrollo de producto: riesgos de mercado, técnicos, de usabilidad, de regulación y de negocio. Integra la gestión de riesgos en el ciclo de descubrimiento y entrega de producto.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP of Product con experiencia en product management de productos digitales B2B y B2C en empresas desde early stage hasta scale-up. Voy a implementar un proceso sistemático de gestión de riesgos en el desarrollo de producto y necesito un framework integrado con el ciclo de descubrimiento y entrega.

CONTEXTO
En product management, los riesgos no gestionados se convierten en las historias de fracaso más frecuentes: el producto que nadie usó, la funcionalidad técnicamente imposible que se prometió, el lanzamiento que violó una regulación, o la apuesta estratégica que el mercado rechazó. Este framework convierte la gestión de riesgos en una capacidad core del equipo de producto.

CAPA 1 — TAXONOMÍA DE RIESGOS DE PRODUCTO
Los cuatro tipos de riesgo de producto de Marty Cagan adaptados:

Riesgo de valor (Value Risk):
- ¿El usuario quiere realmente esto? — Cómo identificar señales de riesgo de demanda antes de construir
- Diferencia entre lo que el usuario dice que quiere y lo que realmente hace — Risk de sesgo de deseabilidad en la investigación
- Riesgo de timing: el mercado no está listo para la solución

Riesgo de usabilidad (Usability Risk):
- ¿Puede el usuario encontrar y usar esta funcionalidad sin fricción?
- Riesgos de onboarding: la primera experiencia determina la retención
- Accesibilidad como riesgo: exclusión involuntaria de usuarios por barreras de usabilidad

Riesgo de viabilidad técnica (Feasibility Risk):
- ¿Puede el equipo de ingeniería construir esto en el tiempo estimado?
- Riesgos de dependencias técnicas externas
- Riesgo de performance y escalabilidad bajo carga real

Riesgo de negocio (Business Viability Risk):
- ¿Esta funcionalidad viola alguna regulación? — GDPR, CCPA, PSD2, normativa sectorial
- ¿Es compatible con el modelo de negocio y el pricing actual?
- ¿Impacta en acuerdos existentes con partners o clientes enterprise?

CAPA 2 — GESTIÓN DE RIESGOS EN EL DISCOVERY
La gestión de riesgos comienza en el descubrimiento, no en la entrega:
- Assumptions mapping: cómo identificar todos los supuestos de un bet de producto y evaluarlos por riesgo e incertidumbre
- Orden de validación: por qué validar primero el riesgo de valor y después el técnico
- Experimentos de bajo coste: cómo diseñar experimentos que reducen el riesgo sin construir el producto completo (prototipos de papel, landing pages, concierge MVP)
- Kill criteria: cómo definir por adelantado qué resultado de un experimento llevaría a abandonar o pivotar la apuesta

CAPA 3 — GESTIÓN DE RIESGOS EN LA ENTREGA
- Risk review en el sprint planning: cómo evaluar los riesgos de las historias de usuario antes de comprometerse con ellas
- Feature flags como herramienta de gestión de riesgos: cómo reducir el riesgo del lanzamiento con despliegues graduales
- Métricas de guardia (guardrail metrics): cómo definir las métricas que, si empeoran durante el lanzamiento, deben activar el rollback
- Post-mortems de producto: cómo analizar funcionalidades que no tuvieron el impacto esperado para extraer aprendizajes sistémicos

CAPA 4 — RIESGOS ESTRATÉGICOS DE PRODUCTO
Más allá de los riesgos de funcionalidades individuales:
- Riesgo de roadmap: apostarlo todo a una iniciativa que puede fracasar — cómo diversificar el roadmap con bets de diferentes horizontes temporales
- Riesgo de plataforma: dependencia excesiva de una plataforma de distribución (App Store, Google, una API) que puede cambiar las reglas
- Riesgo competitivo: un competidor lanza una funcionalidad similar mientras se está desarrollando — protocolo de respuesta
- Riesgo de talento: dependencia de personas clave del equipo de producto — plan de continuidad y transferencia de conocimiento

CAPA 5 — MARCO DE DECISIÓN BAJO INCERTIDUMBRE
El producto manager toma decisiones con información incompleta — cómo estructurar esas decisiones:
- Expected Value vs. Expected Learning: cuándo priorizar el aprendizaje sobre el valor a corto plazo
- Reversibilidad como criterio: cómo la posibilidad de deshacer una decisión afecta al nivel de riesgo aceptable
- RICE con ajuste de riesgo: cómo incorporar el riesgo como factor explícito en el framework de priorización
- Comunicación de riesgos a stakeholders: cómo presentar los riesgos del roadmap sin generar alarma innecesaria ni ocultar información relevante

FORMATO DE RESPUESTA
Desarrolla las cinco capas. Incluye una plantilla de assumptions mapping para un bet de producto nuevo, una checklist de riesgos para el sprint planning y un template de post-mortem de funcionalidad con todas las secciones recomendadas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar riesgos en el ciclo de descubrimiento y entrega de producto digital',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de riesgos laborales y de cumplimiento normativo en RRHH',
                'description'      => 'Aprende a identificar y mitigar los principales riesgos laborales en la gestión de personas: riesgos de cumplimiento normativo, diversidad e inclusión, salud y seguridad, gestión del talento clave y riesgos reputacionales en el ámbito laboral.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Recursos Humanos con especialización en compliance laboral, gestión de riesgos de personas y transformación organizacional en empresas de 100 a 2.000 empleados. Voy a diseñar o fortalecer el proceso de gestión de riesgos de RRHH en mi organización y necesito un framework integral.

CONTEXTO
Los riesgos de RRHH son particularmente costosos: los conflictos laborales no gestionados se convierten en litigios, el incumplimiento normativo genera sanciones, la pérdida de talento clave impacta en los proyectos estratégicos, y los problemas de cultura organizacional dañan la reputación como empleador. La gestión proactiva de estos riesgos es más rentable que cualquier intervención reactiva.

ÁREA 1 — RIESGOS DE CUMPLIMIENTO NORMATIVO LABORAL
- Marco normativo: principales obligaciones laborales en España (ET, LRJS, LPRL, RGPD aplicado a empleados, Ley de Igualdad, Ley de Trabajo a Distancia, Registro Horario) — cómo auditar el cumplimiento actual
- Riesgos de contratación: clasificación incorrecta de contratos, uso indebido de contratos temporales, incumplimiento de periodos de prueba
- Riesgos de terminación: despidos con procedimiento incorrecto, cálculo erróneo de indemnizaciones, acosos previos no documentados que invalidarían un despido disciplinario
- Riesgos de compensación: brechas de género no identificadas, horas extra no pagadas, complementos variables mal estructurados
- Planes de igualdad y protocolos de acoso: obligaciones según tamaño de empresa y riesgos de no tener los documentos actualizados
- Proceso de auditoría interna de cumplimiento: frecuencia, alcance y documentación recomendada

ÁREA 2 — RIESGOS DE TALENTO CLAVE Y DEPENDENCIA
- Identificación del talento crítico: cómo mapear las posiciones y personas cuya salida tendría impacto desproporcionado en la organización
- Matriz de riesgo de fuga: probabilidad de salida × impacto en negocio — cómo construirla y actualizarla
- Planes de retención diferenciada: qué intervenciones tienen mayor impacto en la retención de talento crítico
- Planes de sucesión: cómo desarrollar sustitutos internos para posiciones clave antes de que la vacante sea urgente
- Documentación del conocimiento: cómo capturar el conocimiento implícito de personas clave para que no se vaya con ellas
- Riesgo de jubilación y planificación generacional: cómo gestionar el relevo generacional en posiciones técnicas especializadas

ÁREA 3 — RIESGOS DE SALUD, SEGURIDAD Y BIENESTAR
- Evaluación de riesgos psicosociales: burnout, estrés laboral, conflictos de equipo — cómo identificarlos antes de que generen bajas o demandas
- Protocolo de actuación ante situaciones de acoso laboral o sexual: proceso de denuncia, investigación y resolución
- Riesgos del trabajo remoto: desconexión digital, aislamiento, ergonomía, accidentes en el domicilio — obligaciones del empleador
- Gestión de ausencias: absentismo como señal de riesgo organizacional — cuándo es un síntoma de un problema mayor y cómo diagnosticarlo
- Bienestar mental en el trabajo: programas de EAP (Employee Assistance Programs), señales de alarma en el equipo

ÁREA 4 — RIESGOS CULTURALES Y REPUTACIONALES
- Riesgo de clima organizacional tóxico: cómo detectar mediante encuestas de clima, análisis de rotación y feedback 360 los indicadores de una cultura en deterioro
- Riesgo de Glassdoor y employer branding: cómo las reseñas negativas de empleados afectan la captación de talento y qué hacer al respecto
- Riesgo de diversidad e inclusión: prácticas de selección que generan sesgos inconscientes, ausencia de representación en posiciones de liderazgo
- Riesgo de comunicación interna: cómo una comunicación de cambio organizacional mal gestionada puede generar desconfianza masiva
- Gestión de conflictos interpersonales: proceso de mediación interna para resolver conflictos antes de que escalen a denuncia formal

ÁREA 5 — PROCESO DE GESTIÓN DE RIESGOS DE RRHH
Cómo implementar un proceso formal y sostenible:
- El mapa de riesgos de RRHH: formato, responsables, frecuencia de actualización
- Indicadores de alerta temprana: qué métricas de RRHH actúan como indicadores adelantados de riesgos que materializarán en meses
- Reporte de riesgos de RRHH al Comité de Dirección: cómo presentar los riesgos de personas de manera que sean tomados en serio por la dirección financiera
- Integración con el ERM (Enterprise Risk Management) corporativo: cómo los riesgos de RRHH se conectan con los riesgos estratégicos de la organización

FORMATO DE RESPUESTA
Estructura la respuesta en las cinco áreas. Incluye una matriz de riesgos de RRHH con los 20 riesgos más comunes y las estrategias de mitigación para cada uno, un checklist de cumplimiento normativo laboral para 2024-2025 y un template de plan de sucesión para posiciones críticas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar riesgos laborales, de cumplimiento y de talento en organizaciones',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Marco ERM y construcción de la matriz de riesgos financieros corporativos',
                'description'      => 'Aprende a implementar un marco de Enterprise Risk Management (ERM) financiero: identificación de riesgos corporativos, construcción de la matriz de riesgos, cuantificación del impacto económico y comunicación al Consejo de Administración.',
                'prompt_content'   => <<<'EOT'
Actúa como un Chief Risk Officer (CRO) con experiencia en la implementación de marcos de Enterprise Risk Management en empresas medianas y grandes, con conocimiento de estándares internacionales como COSO ERM, ISO 31000 y FERMA. Voy a implementar o mejorar el marco ERM financiero de mi organización y necesito una guía práctica completa.

CONTEXTO
El Enterprise Risk Management financiero ha evolucionado desde el modelo de "lista de riesgos" hacia un marco integrado que conecta los riesgos con la estrategia de negocio, el apetito de riesgo de la dirección y el valor para el accionista. Este ejercicio diseña un marco ERM práctico y escalable, no un ejercicio burocrático de compliance.

PILAR 1 — FUNDAMENTOS DEL MARCO ERM FINANCIERO
- Los cinco componentes del COSO ERM 2017 aplicados al entorno financiero: gobierno y cultura, estrategia y establecimiento de objetivos, desempeño, revisión y control, e información y comunicación
- ISO 31000 como marco alternativo o complementario: diferencias con COSO y cuándo usar cada uno
- Definición del apetito de riesgo: cómo traducir la tolerancia al riesgo de la dirección en parámetros cuantitativos (pérdida máxima aceptable, ratio de cobertura mínimo, VaR máximo)
- La diferencia entre riesgo inherente (antes de controles) y riesgo residual (después de controles): importancia para la toma de decisiones

PILAR 2 — TAXONOMÍA DE RIESGOS FINANCIEROS CORPORATIVOS
Clasifica y define los riesgos financieros de la organización:

Riesgos de mercado:
- Riesgo de tipo de interés: impacto de variaciones de los tipos en el coste de la deuda y en la valoración de activos financieros
- Riesgo de tipo de cambio: exposición de transacciones, traducción y económica para empresas con operaciones internacionales
- Riesgo de precio de materias primas: impacto en el coste de ventas y en los márgenes

Riesgos de crédito y contraparte:
- Riesgo de cliente: probabilidad de impago y pérdida esperada por la cartera de deudores comerciales
- Riesgo de contraparte financiera: exposición a entidades bancarias y contrapartes de instrumentos financieros
- Riesgo de concentración: dependencia excesiva de pocos clientes o proveedores

Riesgos de liquidez:
- Riesgo de liquidez de financiación: capacidad de cumplir con los compromisos de pago a corto plazo
- Riesgo de liquidez de mercado: posibilidad de vender activos sin impactar significativamente en su precio

Riesgos operacionales con impacto financiero:
- Fraude interno y externo
- Errores de proceso en la cadena de cobros y pagos
- Fallo de sistemas de información financiera

PILAR 3 — CONSTRUCCIÓN DE LA MATRIZ DE RIESGOS
El proceso paso a paso para construir una matriz de riesgos financieros:
- Fase 1 — Identificación: talleres con las áreas de negocio, análisis de histórico de pérdidas, benchmarking sectorial
- Fase 2 — Evaluación cualitativa: escalas de probabilidad e impacto, criterios para definir cada nivel
- Fase 3 — Cuantificación: métodos para traducir el impacto a euros — análisis de escenarios, VaR paramétrico, simulación Monte Carlo (nivel básico)
- Fase 4 — Control: identificación de los controles existentes y evaluación de su efectividad
- Fase 5 — Tratamiento: decisión para cada riesgo — aceptar, mitigar, transferir (seguros, derivados) o evitar
- Mantenimiento: con qué frecuencia actualizar la matriz y cómo integrar nuevos riesgos emergentes

PILAR 4 — INSTRUMENTOS DE MITIGACIÓN DE RIESGOS FINANCIEROS
- Cobertura de tipo de cambio: forwards, opciones y swaps — cuándo usar cada instrumento y cómo decidir el porcentaje a cubrir
- Cobertura de tipo de interés: IRS (Interest Rate Swaps) y caps — cómo estructurar la cobertura según el perfil de deuda
- Seguro de crédito: cobertura del riesgo de impago de clientes — coste vs. beneficio y cuándo contratarlo
- Líneas de crédito comprometidas: por qué una línea de crédito no dispuesta es una herramienta de gestión del riesgo de liquidez
- Diversificación: de entidades bancarias, de monedas, de geografías como mitigación de riesgos de concentración

PILAR 5 — GOBERNANZA Y REPORTE AL CONSEJO
- Estructura de gobernanza del ERM: roles del CFO, CRO (si existe), Comité de Auditoría y Consejo de Administración
- El reporte de riesgos al Consejo: qué incluir, qué nivel de detalle, con qué frecuencia y en qué formato
- Risk dashboard ejecutivo: los 10 indicadores de riesgo financiero que deben estar en el cuadro de mando de la dirección
- Integración del ERM con la planificación estratégica: cómo los riesgos identificados deben influir en el plan de negocio y en el presupuesto

FORMATO DE RESPUESTA
Desarrolla los cinco pilares. Incluye una plantilla de matriz de riesgos financieros con todos los campos recomendados y ejemplos de 15 riesgos financieros comunes con su evaluación, y un template de reporte de riesgos al Consejo de Administración.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Implementar un marco ERM y construir la matriz de riesgos financieros',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Gestión de riesgos legales y de cumplimiento corporativo',
                'description'      => 'Aprende a identificar, evaluar y gestionar los riesgos legales y de compliance en organizaciones: mapeo normativo, programas de cumplimiento, gestión de riesgos de corrupción y fraude, y gobernanza del riesgo legal.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Asesoría Jurídica y Compliance con experiencia en el diseño e implementación de programas de cumplimiento normativo en empresas de diferentes sectores y tamaños. Voy a diseñar o fortalecer el programa de gestión de riesgos legales y compliance de mi organización y necesito un framework integral.

CONTEXTO
La gestión de riesgos legales ha evolucionado de ser una función reactiva (gestionar litigios cuando surgen) a una función preventiva que forma parte del gobierno corporativo. Un programa de compliance efectivo no solo protege a la empresa de sanciones, sino que construye una ventaja competitiva al generar confianza en clientes, inversores y reguladores.

MÓDULO 1 — MAPEO Y DIAGNÓSTICO NORMATIVO
El primer paso es entender el universo normativo aplicable:
- Metodología de mapeo normativo: cómo identificar todas las normas aplicables a la empresa según su sector, tamaño, estructura y geografía de operaciones
- Priorización normativa: no todas las normas tienen el mismo riesgo de incumplimiento o la misma severidad de sanción — cómo priorizar con criterios objetivos
- Herramientas de seguimiento de cambios normativos: cómo monitorizar las modificaciones legislativas y regulatorias que afectan al negocio
- El gap analysis de compliance: cómo comparar el estado actual de cumplimiento con los requisitos normativos y documentar las brechas
- Principales normativas de alto riesgo en España y Europa: RGPD, Ley de Transparencia, normativa anticorrupción (Ley 10/2010, FCPA para empresas con presencia en EEUU), normativa sectorial (financiero, salud, energía)

MÓDULO 2 — DISEÑO DEL PROGRAMA DE COMPLIANCE
- Los siete elementos de un programa de compliance efectivo (basado en los criterios de la OCDE y la Fiscalía española):
  1. Código de conducta y políticas internas
  2. Órgano de compliance con independencia real
  3. Canal de denuncias (whistleblowing) y protección del denunciante
  4. Due diligence de terceros (proveedores, intermediarios, socios)
  5. Formación y comunicación continua
  6. Controles internos y monitorización
  7. Respuesta ante incidentes y mejora continua
- Proporcionalidad del programa: cómo adaptar el programa al tamaño y complejidad de la organización
- Responsabilidad penal de la persona jurídica: cómo un programa de compliance eficaz puede exonerar a la empresa de responsabilidad penal en España

MÓDULO 3 — GESTIÓN DE RIESGOS DE CORRUPCIÓN Y FRAUDE
- Mapa de riesgos de corrupción: cómo identificar los procesos y relaciones donde existe mayor riesgo de corrupción activa o pasiva
- Due diligence de terceros: proceso de verificación de intermediarios, agentes comerciales y socios de negocio antes de establecer la relación
- Riesgos en contratación pública: controles específicos para empresas que contratan con el sector público
- Gestión de regalos, hospitalidad y patrocinios: política y límites razonables para relaciones con clientes, proveedores y funcionarios
- Fraude interno: indicadores de alerta, controles preventivos y proceso de investigación interna

MÓDULO 4 — GOBERNANZA DEL RIESGO LEGAL
- Estructura de reporte del Compliance Officer: relación con el Consejo de Administración, el CEO y el Director Jurídico
- El Comité de Ética y Compliance: composición, funciones y frecuencia de reunión
- Reporte al Consejo de Administración: formato y contenido del informe de riesgos legales para el Consejo — cómo hacer que tome decisiones informadas
- Integración con el ERM corporativo: cómo los riesgos legales se conectan con el mapa de riesgos empresariales
- La relación con los reguladores: cómo gestionar las relaciones con supervisores y reguladores de manera que sean un activo de la empresa

MÓDULO 5 — GESTIÓN DE INCIDENTES DE COMPLIANCE
Cuando se produce un incumplimiento o una denuncia:
- El protocolo de investigación interna: pasos, plazos, confidencialidad, documentación
- Decisión de auto-denuncia: cuándo y cómo comunicar proactivamente a los reguladores una infracción detectada internamente
- Gestión del canal de denuncias: obligaciones de la Directiva Whistleblowing implementada en España, plazos de respuesta, protecciones al denunciante
- Remediación y mejora del programa: cómo documentar la respuesta al incidente de manera que demuestre la efectividad del programa de compliance
- Comunicación de la crisis de compliance: cómo gestionar la comunicación interna y externa cuando se hace público un incidente

FORMATO DE RESPUESTA
Desarrolla los cinco módulos. Incluye un template de mapa de riesgos de compliance con los 25 riesgos más frecuentes en empresas españolas, un modelo de código de conducta con las secciones mínimas recomendadas y una guía de respuesta ante incidentes de compliance con el protocolo paso a paso.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar programas de compliance y gestionar riesgos legales corporativos',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de riesgos de churn y satisfacción del cliente en Customer Success',
                'description'      => 'Aprende a identificar, evaluar y mitigar los riesgos de churn en la cartera de clientes: construcción de health scores, señales de alerta temprana, planes de intervención y construcción de una cultura de éxito del cliente orientada a la retención.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP of Customer Success con experiencia en la construcción de programas de retención en empresas SaaS B2B con contratos anuales o plurianuales. Voy a implementar un framework de gestión de riesgos de churn en mi equipo y necesito un proceso sistemático que permita detectar y actuar sobre el riesgo antes de que se materialice en la cancelación.

CONTEXTO
En Customer Success, la gestión de riesgos de churn es la competencia más crítica. La diferencia entre un equipo de CS reactivo y uno proactivo es que el reactivo descubre el riesgo cuando el cliente ya ha decidido no renovar; el proactivo lo detecta semanas o meses antes y tiene tiempo para intervenir. Este framework convierte la gestión del churn en un proceso sistemático y predecible.

CAPA 1 — HEALTH SCORE: EL TERMÓMETRO DEL RIESGO
El health score es el indicador agregado del riesgo de churn de un cliente:
- Variables que componen un health score robusto:
  * Uso del producto: frecuencia, breadth (cuántos usuarios activos), depth (cuántas funcionalidades clave se usan), tendencia
  * Resultados de negocio: ¿ha alcanzado el cliente los outcomes prometidos en la venta?
  * Relación: NPS, CSAT, número de contactos positivos vs. escalaciones, participación en QBRs
  * Finanzas: renovaciones a tiempo, facturas en disputa, comportamiento histórico de pago
  * Señales de expansión vs. contracción: ha comprado más o ha reducido el scope
- Ponderación de variables: cómo asignar pesos relativos según el impacto predictivo de cada variable en el churn
- Actualización del health score: frecuencia, responsabilidad y qué hacer cuando cae de manera significativa
- Limitaciones del health score: por qué el health score no lo predice todo y qué señales cualitativas hay que complementar con él

CAPA 2 — SEÑALES DE ALERTA TEMPRANA DE CHURN
Más allá del health score, señales específicas que predicen el churn:
- Señales de uso: caída del login activo en las últimas 2 semanas, desactivación de integraciones, exportación masiva de datos
- Señales de relación: el champion ya no asiste a las reuniones, el cliente cancela o aplaza reiteradamente el QBR, respuestas cada vez más cortas o negativas
- Señales organizacionales: el champion ha cambiado de rol o ha dejado la empresa, la empresa está en proceso de fusión o adquisición, hay noticias de reducción de presupuesto en su sector
- Señales de competidor: el cliente pregunta sobre funcionalidades específicas de un competidor, menciona haber asistido a una demo de otro proveedor, hay un proceso de RFP en marcha
- Señales del proceso de renovación: el cliente no inicia la conversación de renovación cuando históricamente lo hacía con antelación, involucra a compras o legal antes de lo habitual

CAPA 3 — SEGMENTACIÓN DEL RIESGO Y PRIORIZACIÓN DE INTERVENCIONES
No todos los clientes en riesgo merecen la misma intervención:
- Matriz riesgo × valor: cómo cruzar el nivel de riesgo de churn con el valor del cliente (ARR, potencial de expansión, valor estratégico) para priorizar dónde invertir el tiempo del equipo de CS
- Los tres escenarios de intervención: riesgo alto/valor alto (máxima intervención), riesgo alto/valor bajo (intervención digital), riesgo bajo/valor alto (monitorización reforzada), riesgo bajo/valor bajo (gestión estándar)
- Capacidad del equipo: cuántos clientes en riesgo puede gestionar un CSM de manera simultánea sin perder calidad
- Escalada a ejecutivos: cuándo involucrar al VP of CS, al CEO o a otros directivos en la gestión del riesgo de un cliente

CAPA 4 — PLANES DE INTERVENCIÓN POR TIPO DE RIESGO
Cada tipo de riesgo requiere una intervención diferente:
- Riesgo de bajo uso: plan de re-engagement con formación, sesiones de optimización, redesign del onboarding
- Riesgo de resultados no alcanzados: success plan revisado con nuevos hitos, escalada técnica para resolver bloqueos, ajuste de expectativas
- Riesgo de cambio de decisor: estrategia de expansión de relaciones — cómo conocer al nuevo decisor y reconstruir el vínculo
- Riesgo de competidor: cómo gestionar una evaluación competitiva activa sin entrar en pánico ni en una guerra de precios
- Riesgo de presupuesto: opciones de reestructuración contractual que preserven la relación y el ARR

CAPA 5 — CULTURA Y PROCESOS DE CS ORIENTADOS A LA RETENCIÓN
- Estructura del QBR (Quarterly Business Review) orientada a demostrar valor y detectar riesgos
- Proceso de handoff de ventas a CS: qué información es crítica para que el CSM pueda gestionar el riesgo desde el primer día
- Métricas de equipo orientadas a retención: Net Revenue Retention (NRR), Gross Revenue Retention (GRR), churn rate por CSM, tiempo de detección de riesgo
- Incentivos del equipo de CS: cómo alinear la compensación del CSM con la retención y la expansión, no solo con la satisfacción del cliente

FORMATO DE RESPUESTA
Desarrolla las cinco capas. Incluye un modelo de health score con 15 variables y su ponderación recomendada, un playbook de intervención de churn con los pasos para cada tipo de riesgo y un template de QBR orientado a la detección proactiva de riesgos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir un sistema de gestión de riesgos de churn en Customer Success',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestión de riesgos para profesionales independientes: protección del negocio y la estabilidad financiera',
                'description'      => 'Aprende a identificar y mitigar los principales riesgos del trabajo independiente: dependencia de pocos clientes, flujo de caja irregular, riesgos legales, pérdida de capacidad de trabajo y ausencia de red de seguridad institucional.',
                'prompt_content'   => <<<'EOT'
Actúa como un asesor de negocio especializado en profesionales independientes, freelancers y consultores autónomos, con experiencia en la construcción de negocios independientes resilientes y sostenibles. Voy a diseñar un plan de gestión de riesgos para mi actividad como independiente y necesito un framework adaptado a mi realidad como persona que trabaja sin la red de seguridad de una empresa.

CONTEXTO
El profesional independiente enfrenta riesgos que no existen cuando se trabaja por cuenta ajena: no hay salario garantizado, no hay seguros de empresa, no hay compañeros que cubran cuando uno enferma, y no hay departamento jurídico que gestione los conflictos con clientes. Este framework convierte la gestión de riesgos en una rutina sostenible que permite trabajar con más tranquilidad y resiliencia.

RIESGO 1 — CONCENTRACIÓN DE CLIENTES Y DEPENDENCIA DE INGRESOS
El riesgo número uno del independiente:
- Cómo evaluar el nivel de concentración actual: si un cliente representa más del 30% de los ingresos, hay un riesgo sistémico
- Regla del 30-30-30: no más del 30% de los ingresos en un solo cliente, sector o tipo de proyecto
- Plan de diversificación de cartera: cómo añadir nuevos clientes sin sacrificar la calidad del servicio a los existentes
- Señales de alerta de dependencia peligrosa: cuando el cliente empieza a tratarte como un empleado (horarios fijos, reuniones diarias, exclusividad informal)
- La transición planificada: cómo prepararse para la posible pérdida de un cliente principal antes de que ocurra

RIESGO 2 — FLUJO DE CAJA Y ESTABILIDAD FINANCIERA
La irregularidad del flujo de caja es el mayor estresante del trabajo independiente:
- Fondo de reserva mínimo: cuántos meses de gastos fijos debes tener en liquidez (mínimo 3-6 meses, ideal 6-12) y cómo construirlo
- Planificación del flujo de caja mensual: ingresos esperados vs. comprometidos vs. ideales — cómo planificar con incertidumbre
- Estructura de pagos en proyectos: anticipo obligatorio, pagos por hitos, pago final mínimo — cómo proteger el flujo de caja en el diseño del contrato
- Gestión de la estacionalidad: cómo prever y prepararse para los meses de menor actividad (agosto, navidades, etc.)
- Separación de cuentas: cuenta personal vs. cuenta de negocio — por qué esta separación es fundamental para la gestión del riesgo financiero

RIESGO 3 — RIESGOS LEGALES Y CONTRACTUALES
Sin departamento jurídico, el independiente es su propio abogado de primera línea:
- Los contratos imprescindibles: por qué ningún proyecto debe comenzar sin contrato firmado, aunque sea un contrato simple
- Cláusulas de protección mínimas: alcance definido, revisiones incluidas, condiciones de pago, propiedad intelectual, confidencialidad, cláusula de cancelación
- Riesgo de impago: proceso escalado de gestión del impago y límite de exposición máxima con un solo cliente sin garantías
- Riesgo de reclamación del cliente: cómo el contrato y la documentación del proceso de trabajo te protegen ante reclamaciones
- Seguros profesionales: seguro de responsabilidad civil profesional (cuándo es necesario, cuánto cuesta, qué cubre) y otros seguros relevantes

RIESGO 4 — PÉRDIDA DE CAPACIDAD DE TRABAJO
El independiente no puede enfermarse sin consecuencias económicas:
- Seguro de incapacidad: opciones disponibles para autónomos en España, coste y cobertura
- Fondo de emergencia de salud: cuánto reservar específicamente para cubrir períodos de baja
- Diversificación de actividades: cómo tener ingresos que no dependan de tu presencia activa (productos digitales, afiliación, contenido)
- Plan de contingencia de proyecto: a quién puedes llamar si no puedes entregar un proyecto por motivos de salud
- Cuidado proactivo de la salud como gestión de riesgos: por qué invertir en salud física y mental es la mejor gestión de riesgos para un independiente

RIESGO 5 — OBSOLESCENCIA Y RIESGO DE MERCADO
Las habilidades que son valiosas hoy pueden dejar de serlo:
- Monitorización del mercado: cómo estar al tanto de los cambios en la demanda de tus servicios antes de que impacten en tus ingresos
- Actualización continua como gestión de riesgos: presupuesto anual mínimo para formación y su retorno esperado
- Diversificación de competencias: cómo añadir habilidades complementarias que amplíen el perfil sin perder el foco
- Red profesional como red de seguridad: cómo una red sólida reduce el tiempo de recolocación en caso de crisis de demanda
- Reconversión planificada: cómo planificar con antelación una transición hacia un nuevo nicho o especialidad

FORMATO DE RESPUESTA
Desarrolla los cinco riesgos con profundidad. Incluye un checklist mensual de revisión de riesgos para el independiente, una tabla con los seguros y coberturas recomendadas con coste orientativo para autónomos en España, y un template de plan de contingencia financiera para los tres primeros meses sin ingresos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Proteger el negocio independiente con un plan de gestión de riesgos',
                'vote_score'       => 42,
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
