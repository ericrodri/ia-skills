<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills389Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Adopción de herramientas de marketing automation en equipos',
                'description'      => 'Gestiona la transición de tu equipo de marketing hacia nuevas plataformas de automatización superando la resistencia al cambio, diseñando planes de formación efectivos y asegurando la adopción sostenida de las nuevas herramientas.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en gestión del cambio tecnológico aplicado a equipos de marketing, con experiencia en la implementación de plataformas como HubSpot, Marketo, Salesforce Marketing Cloud y herramientas similares. Conoces tanto la parte técnica de las herramientas como la psicología organizacional del cambio.

**CONTEXTO DEL PROYECTO**

La adopción de nuevas herramientas de marketing automation es uno de los proyectos de cambio tecnológico más complejos en el departamento de marketing. Implica cambios en los flujos de trabajo, en las métricas que se miden, en la forma de colaborar con ventas y en las competencias que necesitan los miembros del equipo. Una implementación mal gestionada resulta en baja adopción, retorno a herramientas antiguas y pérdida de la inversión.

**INFORMACIÓN PREVIA**

Antes de diseñar el plan, necesito saber:
1. ¿Qué herramienta estás implementando y cuál reemplaza?
2. ¿Cuántas personas componen el equipo de marketing y qué roles tienen?
3. ¿Cuáles son las principales funcionalidades que quieres activar primero?
4. ¿Qué nivel de competencia digital tiene el equipo en general?
5. ¿Tienes un plazo específico para la migración completa?

**PLAN DE GESTIÓN DEL CAMBIO**

Desarrolla los siguientes elementos:

1. **Diagnóstico de resistencias**: Identifica los 5 tipos de resistencia más comunes al cambiar de herramienta de marketing automation (miedo a quedar obsoleto, pérdida de flujos de trabajo conocidos, curva de aprendizaje, dudas sobre la migración de datos) y proporciona estrategias específicas para abordar cada una.

2. **Plan de comunicación del cambio**: Diseña la estrategia de comunicación interna en tres fases:
   - Fase de anuncio: cómo comunicar el cambio, por qué se hace y qué implica para cada rol
   - Fase de implementación: actualizaciones de progreso, victorias tempranas, resolución de dudas
   - Fase de consolidación: celebración de logros, sharing de mejores prácticas, métricas de adopción
   Incluye el texto de los emails o mensajes clave para cada fase.

3. **Programa de formación por roles**: Crea un plan de formación diferenciado:
   - Para el director de marketing: visión estratégica y métricas del dashboard
   - Para los especialistas en campañas: operativa diaria y flujos de trabajo
   - Para el equipo de contenidos: integración con el CMS y gestión de assets
   Incluye formato (taller presencial, video, autoaprendizaje), duración y materiales sugeridos.

4. **Champions del cambio**: Define el perfil del "champion" o embajador de la nueva herramienta dentro del equipo, cómo seleccionarlo, qué formación adicional recibe y qué rol juega durante la implementación para influir positivamente en sus compañeros.

5. **Plan de migración por fases**: Diseña la transición en 4 fases de 2-4 semanas cada una, especificando qué funcionalidades se activan en cada fase, qué datos se migran y cuándo se desconecta la herramienta anterior.

6. **Métricas de adopción**: Define los indicadores para medir si la adopción está siendo exitosa: porcentaje de usuarios que han completado la formación, número de campañas creadas en la nueva herramienta, reducción de uso de la herramienta antigua y satisfacción del equipo medida con encuesta rápida.

7. **Plan de contingencia**: Qué hacer si la adopción está por debajo del 50% a las 6 semanas, cómo detectar usuarios bloqueados y qué soporte adicional activar.

**TONO Y ENFOQUE**

El cambio tecnológico exitoso requiere equilibrar la urgencia del proyecto con la empatía hacia las personas que deben cambiar sus hábitos. Diseña todo con este equilibrio en mente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar la implementación de nuevas herramientas de marketing automation',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Plan de migración de sistemas legacy sin interrumpir el negocio',
                'description'      => 'Diseña una estrategia de migración de sistemas heredados a arquitecturas modernas que minimice el riesgo operativo, gestione la resistencia interna y garantice la continuidad del negocio durante la transición.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software senior especializado en modernización de sistemas legacy, con experiencia en proyectos de migración de mainframe, monolitos PHP o Java hacia arquitecturas de microservicios, cloud-native y APIs modernas. Conoces tanto los aspectos técnicos de la migración como la gestión del cambio en organizaciones con cultura tecnológica conservadora.

**CONTEXTO**

La migración de sistemas legacy es uno de los proyectos más complejos y de mayor riesgo en la ingeniería de software empresarial. El fracaso de estos proyectos rara vez es técnico; generalmente es organizacional: resistencia de los equipos que conocen el sistema antiguo, falta de documentación, presión para mantener el negocio funcionando y subestimación de la deuda técnica oculta.

**INFORMACIÓN DE PARTIDA**

Antes de crear el plan, necesito saber:
1. ¿Qué sistema legacy está en cuestión (lenguaje, edad, criticidad para el negocio)?
2. ¿Cuántos desarrolladores trabajan con el sistema actualmente?
3. ¿Cuál es la razón principal para migrar (costes, escalabilidad, seguridad, talento)?
4. ¿Existe documentación del sistema actual? ¿Hay tests automatizados?
5. ¿Cuál es el presupuesto y el plazo aproximado del proyecto?

**PLAN TÉCNICO Y ORGANIZACIONAL**

1. **Auditoría del sistema actual**: Define el proceso para mapear el sistema legacy antes de migrar: cómo documentar funcionalidades sin documentación previa, cómo identificar dependencias ocultas, cómo catalogar integraciones con sistemas externos y cómo evaluar el riesgo de cada componente.

2. **Estrategia de migración**: Describe las tres estrategias principales (Big Bang, Strangler Fig, Parallel Run) con sus ventajas, riesgos y cuándo usar cada una. Recomienda la más adecuada para mi situación y justifícalo.

3. **Plan por fases**: Diseña la migración en sprints de 4 semanas con:
   - Criterios para priorizar qué migrar primero (menor riesgo vs. mayor valor de negocio)
   - Gates de validación entre fases (criterios que deben cumplirse para avanzar)
   - Estrategia de rollback para cada fase
   - Mecanismos de coexistencia del sistema viejo y el nuevo durante la transición

4. **Gestión del conocimiento**: El mayor riesgo de un legacy es el conocimiento tácito en las mentes de pocos desarrolladores. Diseña un plan para:
   - Entrevistar y documentar el conocimiento de los expertos del sistema actual
   - Crear un glosario de negocio que traduzca la lógica de negocio al nuevo sistema
   - Transferencia de conocimiento al equipo que construirá el nuevo sistema

5. **Gestión de la resistencia técnica**: Los desarrolladores que conocen el sistema legacy a menudo se resisten a migrarlo (pérdida de expertise, miedo a quedar desplazados, apego al trabajo propio). Diseña estrategias para convertirlos en aliados del proceso.

6. **Testing y validación**: Estrategia de pruebas para garantizar que el nuevo sistema tiene paridad funcional con el legacy: shadow mode, pruebas de regresión automatizadas, validación de datos migrados y pruebas de carga.

7. **Comunicación a stakeholders de negocio**: Cómo comunicar el progreso, los riesgos y el impacto potencial en el negocio a directivos no técnicos, con un dashboard semanal de estado del proyecto.

**PRINCIPIO FUNDAMENTAL**

La migración más exitosa es la que el negocio no nota. Diseña el plan con esta premisa como guía principal.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Planificar migraciones de sistemas legacy con mínimo riesgo operativo',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Transición del equipo de diseño a nuevas herramientas colaborativas',
                'description'      => 'Gestiona el cambio de herramienta de diseño en tu equipo (de Sketch a Figma, de Adobe a alternativas, de herramientas independientes a plataformas colaborativas) minimizando la interrupción de proyectos en curso y maximizando la adopción.',
                'prompt_content'   => <<<'EOT'
Actúa como un design operations manager y experto en gestión del cambio tecnológico para equipos de diseño, con experiencia en transiciones de Sketch a Figma, de Photoshop a herramientas de diseño de interfaz modernas, y de flujos de trabajo en silos a plataformas colaborativas en tiempo real.

**CONTEXTO**

El cambio de herramienta de diseño afecta profundamente al flujo de trabajo, a la colaboración con desarrollo, a la gestión de assets y a la experiencia diaria de diseñadores que han construido durante años su forma de trabajar. Una transición mal gestionada puede bajar la productividad durante meses, generar archivos inconsistentes y crear tensiones entre quienes adoptan rápido y quienes se resisten.

**INFORMACIÓN DE PARTIDA**

Antes de comenzar, cuéntame:
1. ¿De qué herramienta vienes y a cuál vas?
2. ¿Cuántos diseñadores tiene el equipo y qué roles (UI, UX, motion, branding)?
3. ¿Tienes proyectos activos que no pueden interrumpirse durante la transición?
4. ¿Cómo es el nivel de competencia técnica general del equipo?
5. ¿Quién tomó la decisión del cambio y por qué razones?

**PLAN DE TRANSICIÓN**

Desarrolla los siguientes componentes:

1. **Mapa de impacto por rol**: Para cada rol del equipo de diseño, describe qué cambia específicamente en su día a día, qué habilidades existentes se transfieren y qué nuevas habilidades necesita desarrollar. Identifica quién tiene más que perder con el cambio y quién más que ganar.

2. **Programa de formación escalonado**: Diseña un plan de 8 semanas con:
   - Semanas 1-2: Formación básica, familiarización con la interfaz
   - Semanas 3-4: Recreación de un proyecto existente en la nueva herramienta
   - Semanas 5-6: Proyecto nuevo completamente en la nueva herramienta
   - Semanas 7-8: Flujos avanzados, plugins y automatizaciones
   Incluye recursos de aprendizaje (cursos, tutoriales, comunidades) para cada etapa.

3. **Migración de assets y design system**: Plan detallado para migrar la librería de componentes, iconos, tokens de diseño y plantillas existentes a la nueva herramienta sin perder consistencia ni calidad.

4. **Protocolo de coexistencia**: Durante las primeras semanas habrá proyectos en ambas herramientas. Define las reglas para gestionar esta coexistencia: qué proyectos nuevos van a la nueva herramienta, cómo se mantienen actualizados los proyectos legacy en la herramienta anterior y cuándo se produce el corte final.

5. **Gestión de la resistencia emocional**: Los diseñadores tienen una relación emocional con sus herramientas. Diseña estrategias para el diseñador que "odia la nueva herramienta desde el principio", para el que tiene miedo de quedar atrás y para el que adopta demasiado rápido y genera caos en el equipo.

6. **Integración con el flujo de desarrollo**: Cómo gestionar el cambio en la relación con el equipo de desarrollo (handoff, design tokens, inspección de diseño) y la comunicación del nuevo proceso para que no genere fricciones con ingeniería.

7. **Métricas de éxito**: Define cómo medir que la transición fue exitosa a los 3 meses: porcentaje de proyectos en la nueva herramienta, tiempo de entrega comparado con el anterior, satisfacción del equipo y calidad percibida por los stakeholders.

**CONSEJO CLAVE**

Celebra los hitos del aprendizaje, no solo la migración completa. El reconocimiento de los pequeños progresos es lo que mantiene la motivación durante un cambio que, inevitablemente, hace sentir a todos menos competentes durante un tiempo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar la transición de herramientas de diseño con mínima fricción en el equipo',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Implementación de nuevo CRM sin perder datos ni momentum de ventas',
                'description'      => 'Gestiona el cambio de CRM en el equipo de ventas con un plan que proteja los datos históricos, minimice la interrupción del pipeline activo y asegure que los comerciales adopten el nuevo sistema en semanas, no en meses.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en RevOps (Revenue Operations) y gestión del cambio tecnológico para equipos de ventas, con experiencia en migraciones de Salesforce, HubSpot CRM, Pipedrive, Zoho y herramientas similares. Conoces el impacto que tiene un cambio de CRM en el pipeline, las cuotas y la moral del equipo comercial.

**CONTEXTO**

Un cambio de CRM en un equipo de ventas activo es uno de los proyectos de gestión del cambio más delicados en una organización. Los comerciales tienen su flujo de trabajo perfectamente adaptado al CRM anterior y cualquier fricción en el nuevo sistema impacta directamente en los ingresos. Además, el CRM contiene el historial de relaciones con los clientes, los datos del pipeline y las previsiones de ventas: información crítica que debe migrar sin pérdidas.

**INFORMACIÓN NECESARIA**

Antes de diseñar el plan:
1. ¿De qué CRM vienes y a cuál vas? ¿Por qué se hace el cambio?
2. ¿Cuántos comerciales y managers de ventas hay en el equipo?
3. ¿Cuántos contactos, cuentas y oportunidades contiene el CRM actual?
4. ¿Hay integraciones con otras herramientas (email, LinkedIn, ERP, facturación)?
5. ¿Cuál es el ciclo de ventas promedio y cuántas oportunidades activas hay ahora mismo?

**PLAN DE IMPLEMENTACIÓN**

Diseña los siguientes elementos:

1. **Auditoría del CRM actual**: Metodología para catalogar todos los datos, campos personalizados, flujos de trabajo, automatizaciones e integraciones del CRM actual, identificando qué migrar con prioridad alta y qué puede perderse o reconstruirse.

2. **Estrategia de migración de datos**: Plan técnico para la migración incluyendo:
   - Limpieza de datos antes de migrar (deduplicación, actualización de campos vacíos)
   - Mapeo de campos entre el CRM anterior y el nuevo
   - Orden de migración (contactos, cuentas, oportunidades, actividades, documentos)
   - Validación post-migración y protocolo de corrección de errores

3. **Protección del pipeline activo**: Plan específico para las oportunidades en fase de cierre o negociación activa, con doble entrada temporal en ambos sistemas si es necesario y asignación de un responsable por cada oportunidad crítica durante la transición.

4. **Formación por perfil**:
   - Director de ventas: configuración de dashboards, previsiones y reporting
   - Sales manager: gestión del pipeline del equipo, asignación de leads
   - Comercial individual: registro de actividad diaria, seguimiento de oportunidades
   Incluye el tiempo necesario y el formato más efectivo para cada perfil.

5. **Gestión de la resistencia comercial**: Los comerciales tienden a resistirse a los cambios de CRM porque sienten que pierden productividad durante la curva de aprendizaje. Diseña incentivos (no solo negativos) para adopción temprana, un buddy system entre early adopters y rezagados, y cómo manejar al comercial que sigue usando hojas de cálculo.

6. **Go-live y primeras semanas**: Plan detallado de la primera semana con el nuevo CRM activado: quién es el punto de contacto para dudas, cómo se registran las incidencias, qué reuniones de seguimiento se hacen y cuándo se considera que la transición es estable.

7. **Métricas de adopción y negocio**: Indicadores que confirman que la implementación fue exitosa: porcentaje de actividad registrada en el nuevo CRM, velocidad del pipeline comparada con el período anterior y feedback del equipo en encuesta de satisfacción.

**REGLA DE ORO**

Nunca lances el nuevo CRM en la última semana del trimestre. Elige siempre el inicio de un período de ventas para minimizar el impacto en los resultados y dar al equipo tiempo suficiente para adaptarse antes de que los números importen.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Migrar el CRM del equipo de ventas sin perder datos ni interrumpir el pipeline',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión del cambio tecnológico en el roadmap de producto',
                'description'      => 'Aprende a incorporar y comunicar cambios tecnológicos mayores en el roadmap de producto (cambio de stack, refactorización de arquitectura, nueva plataforma) de forma que los stakeholders entiendan el valor y el equipo mantenga el foco.',
                'prompt_content'   => <<<'EOT'
Actúa como un Product Manager senior con experiencia en gestionar proyectos de deuda técnica, cambios de arquitectura y migraciones tecnológicas dentro del contexto de un roadmap de producto orientado a negocio. Sabes cómo traducir decisiones técnicas a lenguaje de negocio y cómo mantener la alineación entre engineering, producto y stakeholders durante proyectos de cambio tecnológico.

**CONTEXTO**

Los cambios tecnológicos mayores (reescritura de una parte del producto, migración a una nueva infraestructura, adopción de un nuevo framework) son inevitables en el ciclo de vida de un producto pero difíciles de gestionar en el contexto del roadmap. Los stakeholders quieren features, el equipo técnico quiere tiempo para mejorar la base, y el Product Manager debe gestionar esas tensiones mientras mantiene el producto evolucionando.

**INFORMACIÓN DE PARTIDA**

Cuéntame antes de comenzar:
1. ¿Qué cambio tecnológico estás planificando (migración de base de datos, cambio de frontend, nuevo sistema de autenticación, etc.)?
2. ¿Cuánto tiempo de engineering va a consumir aproximadamente?
3. ¿Tienes stakeholders de negocio con expectativas de features durante ese período?
4. ¿Hay un driver externo (fecha límite de soporte, problema de rendimiento, cumplimiento normativo)?
5. ¿El cambio es visible para el usuario final o es completamente interno?

**FRAMEWORK DE GESTIÓN**

1. **Business case del cambio tecnológico**: Ayúdame a articular el valor del cambio tecnológico en términos de negocio, no técnicos. Para cada posible cambio tecnológico, proporciona un template de business case con: problema actual en métricas de negocio (no técnicas), coste de no hacer el cambio, beneficio esperado una vez completado y riesgo de hacerlo ahora versus esperar.

2. **Estrategia de roadmap durante el cambio**: Diseña cómo presentar el roadmap cuando una parte significativa de la capacidad del equipo está dedicada al cambio tecnológico:
   - Cómo priorizar las pocas features que sí se pueden entregar durante el período
   - Cómo gestionar las expectativas de stakeholders sobre la cadencia de entregas
   - Cómo decidir qué features pausar, cuáles renegociar y cuáles no pueden esperar

3. **Comunicación a stakeholders**: Diseña la estrategia de comunicación con diferentes audiencias:
   - CEO o dirección: por qué este cambio es una inversión, no un gasto
   - Equipo de ventas: qué decir a clientes que preguntan por features prometidas
   - Clientes directos: si el cambio implica downtimes o cambios en la interfaz
   - Equipo de ingeniería: cómo mantener la motivación durante un proyecto que nadie "ve"

4. **Gestión del riesgo durante la transición**: Identifica los principales riesgos del cambio tecnológico en el contexto del producto (pérdida de features durante la migración, bugs de regresión, retrasos que afectan al roadmap de negocio) y diseña planes de contingencia para cada uno.

5. **Métricas de éxito del cambio tecnológico**: Define cómo medir si el cambio valió la pena después de completarlo: reducción de tiempo de desarrollo de features, reducción de incidencias, mejora de rendimiento, satisfacción del equipo de ingeniería.

6. **Proceso de decisión para el futuro**: Basándote en este proyecto, diseña un framework de decisión para evaluar futuros cambios tecnológicos: criterios de priorización, proceso de aprobación y cómo incorporarlos de forma sistemática en la planificación del roadmap.

**PRINCIPIO CLAVE**

El cambio tecnológico no debe competir con el producto; debe ser parte de la estrategia de producto. El PM que sabe comunicar el valor de la deuda técnica tiene una ventaja competitiva significativa sobre el que solo habla de features.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Incorporar cambios tecnológicos en el roadmap sin perder la alineación con stakeholders',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Superar la resistencia digital en la organización',
                'description'      => 'Diseña programas de gestión del cambio que aborden la resistencia a la digitalización en empleados de diferentes generaciones y perfiles, convirtiendo a los más escépticos en embajadores de la transformación tecnológica.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de transformación digital y especialista en comportamiento organizacional con experiencia en programas de gestión del cambio en empresas con alta resistencia a la digitalización. Conoces la psicología de la resistencia al cambio, las diferencias generacionales en la adopción tecnológica y las técnicas de influencia organizacional.

**CONTEXTO**

La resistencia digital es uno de los principales obstáculos de la transformación tecnológica en las organizaciones. No es únicamente un problema de generaciones; también afecta a empleados técnicamente capaces que sienten que la nueva herramienta amenaza su posición, su autonomía o su identidad profesional. Una estrategia de gestión del cambio que ignora la dimensión emocional fracasa, independientemente de la calidad de la herramienta implementada.

**DATOS DE PARTIDA**

Responde primero:
1. ¿Qué tipo de digitalización o herramienta está generando resistencia?
2. ¿Qué perfil de empleados muestra más resistencia (edad, rol, antigüedad, departamento)?
3. ¿Cuál es la razón declarada de la resistencia por parte de los empleados?
4. ¿Cuál es la razón real que sospechas que está detrás?
5. ¿Cuánto tiempo tiene la organización para completar la transición?

**ESTRATEGIA COMPLETA**

1. **Diagnóstico de la resistencia**: Define las 6 fuentes más frecuentes de resistencia digital en organizaciones (miedo a la obsolescencia, pérdida de control, sobrecarga de trabajo durante la transición, desconfianza en la empresa, experiencias negativas previas, falta de sentido de la urgencia) y cómo diagnosticar cuál o cuáles están presentes en tu organización mediante una encuesta de 10 preguntas.

2. **Segmentación de la resistencia**: Clasifica a los empleados en 4 grupos según su disposición al cambio (innovadores, adoptantes tempranos, mayoría tardía, rezagados) con estrategias diferenciadas para moverse de un grupo al siguiente.

3. **Programa de cambio por fases**: Diseña un programa de 12 semanas con:
   - Fase 1 (semanas 1-3): Sensibilización y creación de urgencia
   - Fase 2 (semanas 4-7): Formación y primeras experiencias de éxito
   - Fase 3 (semanas 8-10): Consolidación y peer support
   - Fase 4 (semanas 11-12): Celebración, reconocimiento y normalización
   Incluye actividades concretas para cada semana.

4. **Red de champions**: Define cómo identificar, reclutar y empoderar a los champions del cambio en cada departamento, cuál es su rol, qué apoyo reciben y cómo reconocer su contribución.

5. **Conversaciones difíciles**: Scripts para las conversaciones más frecuentes de gestión del cambio:
   - Con el empleado que dice "esto no me va a funcionar a mí"
   - Con el manager que no apoya el cambio delante de su equipo
   - Con el empleado con 20 años de antigüedad que se siente amenazado
   - Con el sindicato o representantes que bloquean la implementación

6. **Métricas de progreso**: Define indicadores semanales y mensuales para medir el avance de la adopción y detectar grupos que necesitan soporte adicional antes de que la resistencia se solidifique.

7. **Plan de comunicación interna**: Diseña los mensajes clave para cada etapa del cambio, los canales más efectivos para cada perfil de empleado y cómo responder a los rumores negativos sobre la nueva tecnología.

**PRINCIPIO ÉTICO**

La gestión del cambio exitosa no manipula ni coacciona: informa, involucra y da agencia a los empleados dentro de los límites de la decisión ya tomada. La diferencia entre un empleado que adopta por presión y uno que adopta por convicción es enorme en términos de calidad de uso y sostenibilidad a largo plazo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Reducir la resistencia digital y acelerar la adopción tecnológica en la organización',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Migración de sistemas contables y ERP financiero',
                'description'      => 'Planifica y ejecuta la migración de sistemas contables o ERP financiero con rigor metodológico, garantizando la integridad de los datos históricos, el cumplimiento normativo y la continuidad de los procesos de cierre contable.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de finanzas y sistemas ERP con experiencia en migraciones de SAP, Oracle Financials, Microsoft Dynamics, Sage y otros sistemas contables empresariales. Conoces tanto la dimensión técnica de la migración como los requisitos contables, fiscales y de auditoría que deben cumplirse durante la transición.

**CONTEXTO**

La migración de un sistema ERP financiero es uno de los proyectos de mayor riesgo en una organización porque afecta directamente a la operativa contable, a la generación de informes financieros regulatorios y a los procesos de cierre mensual y anual. Un error en la migración de datos puede generar descuadres contables que requieran meses de corrección y pueden tener implicaciones fiscales y de auditoría.

**INFORMACIÓN DE PARTIDA**

Necesito que me cuentes:
1. ¿De qué sistema vienes y a cuál vas? ¿Cuántos años de historia contable tiene el sistema actual?
2. ¿Cuántos usuarios del sistema hay (contables, controllers, directores financieros)?
3. ¿Cuáles son los módulos principales que usa tu empresa (contabilidad general, cuentas a pagar/cobrar, activos fijos, tesorería, consolidación)?
4. ¿Tienes fechas críticas que no puedes interrumpir (cierre fiscal, auditoría externa, declaraciones de impuestos)?
5. ¿Has hecho migraciones de ERP anteriormente en la organización?

**PLAN DE MIGRACIÓN FINANCIERA**

1. **Auditoría del sistema actual**: Metodología para inventariar todos los datos del sistema: plan de cuentas, libro diario, mayores, activos fijos, saldos de cuentas a pagar y cobrar, centros de coste, presupuestos y conciliaciones pendientes. Identifica los datos que deben migrar con exactitud matemática y los que pueden reconvertirse.

2. **Estrategia de migración de datos contables**: Plan detallado que incluya:
   - Apertura de saldos en el nuevo sistema (balance de apertura)
   - Tratamiento del histórico (cuántos años migrar como transacciones vs. como saldos de apertura)
   - Mapeo del plan de cuentas del sistema anterior al nuevo
   - Validaciones de cuadre (el balance en el sistema nuevo debe igualar el del anterior a fecha de corte)

3. **Ventana de migración y cierre contable**: Diseña la estrategia para elegir el momento óptimo de la migración, coordinando con el calendario de cierres contables. Incluye el proceso de "congelación" del sistema anterior, el período de doble introducción si es necesario y el go-live del nuevo sistema.

4. **Plan de formación financiera**: Programa de formación específico para contables y controllers en el nuevo sistema, con énfasis en los procesos de cierre mensual, generación de informes regulatorios y conciliaciones automáticas del nuevo sistema versus el anterior.

5. **Protocolo de validación contable**: Check-list detallado para validar que la migración fue correcta: suma de saldos deudores = suma de saldos acreedores, balances de apertura correctos, histórico accesible para consulta, integraciones con bancos y proveedores funcionando.

6. **Gestión de auditoría durante la transición**: Cómo documentar la migración para una eventual revisión de auditoría externa, qué evidencias conservar del proceso y cómo justificar los ajustes de apertura si los hubiera.

7. **Plan de contingencia financiera**: Qué hacer si se detectan errores de migración en la primera semana: cómo identificar el alcance, cómo comunicarlo a la dirección y qué proceso de corrección seguir sin interrumpir las operaciones.

**ADVERTENCIA CRÍTICA**

Nunca migres un ERP financiero en enero (inicio de ejercicio fiscal) ni en diciembre (cierre del ejercicio). Los meses de menor actividad contable y mayor margen de maniobra son los ideales para este tipo de proyecto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Migrar sistemas contables y ERP con integridad de datos y continuidad operativa',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Adopción de legaltech en despachos de abogados',
                'description'      => 'Diseña un plan de adopción de herramientas legaltech (gestión documental, contratos inteligentes, automatización de due diligence, software de gestión del despacho) que respete la cultura profesional jurídica y garantice la confidencialidad de los clientes.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor especializado en transformación digital de despachos de abogados y departamentos jurídicos, con experiencia en la implementación de herramientas legaltech como software de gestión de asuntos, plataformas de revisión de contratos con IA, herramientas de due diligence automatizada y sistemas de gestión documental.

**CONTEXTO**

La profesión jurídica tiene características únicas que hacen de la adopción tecnológica un proceso especialmente delicado: el deber de confidencialidad con los clientes, la cultura de excelencia y cautela, la estructura jerárquica del despacho (socios, asociados, paralegales), y la resistencia de muchos abogados a delegar en herramientas lo que consideran el núcleo de su expertise. Sin embargo, los despachos que no adoptan legaltech pierden competitividad en precio, velocidad y calidad frente a los que sí lo hacen.

**INFORMACIÓN DE PARTIDA**

Necesito saber:
1. ¿Qué tipo de despacho o departamento jurídico tienes (boutique, full service, in-house corporativo)?
2. ¿Qué herramienta o categoría de legaltech quieres implementar?
3. ¿Cuántos abogados y personal de apoyo hay en el equipo?
4. ¿Cuáles son las áreas de práctica principales (M&A, litigación, laboral, inmobiliario)?
5. ¿Hay alguna normativa de colegios de abogados o regulador que afecte al uso de IA en tu jurisdicción?

**PLAN DE ADOPCIÓN LEGALTECH**

1. **Caso de negocio para el despacho**: Diseña el argumentario para convencer a los socios de invertir en legaltech, usando métricas relevantes para abogados: reducción de horas facturables en tareas de bajo valor añadido, reducción del tiempo en due diligence, comparativa de tarifas con despachos competidores y reducción del riesgo de error humano.

2. **Evaluación de herramientas**: Framework para evaluar y comparar herramientas legaltech con criterios específicos del sector: seguridad de datos y confidencialidad, cumplimiento GDPR y normativa local, integración con el software de gestión actual, soporte en el idioma local y referencias en el mismo tipo de despacho.

3. **Piloto controlado**: Diseña un piloto de 4-6 semanas con un grupo reducido de usuarios, con los criterios de selección de los usuarios piloto, los casos de uso a testar, las métricas de éxito del piloto y el proceso de feedback para decidir si se extiende la implementación.

4. **Formación para abogados**: Programa de formación que respete la cultura jurídica, con énfasis en:
   - Qué hace la herramienta y qué NO hace (el abogado sigue siendo responsable del criterio jurídico)
   - Cómo integrarla en el flujo de trabajo del asunto
   - Cómo explicar al cliente el uso de tecnología en su asunto
   - Protocolos de verificación del output de la herramienta

5. **Política de uso de IA en el despacho**: Ayúdame a redactar una política interna de uso de herramientas de IA para abogados que cubra: qué herramientas están autorizadas, qué datos pueden introducirse en ellas, cómo documentar el uso y qué verificación humana es obligatoria antes de usar el output.

6. **Comunicación a clientes**: Diseña la comunicación para informar a clientes sobre el uso de tecnología en su asunto, incluyendo las garantías de confidencialidad y el valor añadido que reciben.

7. **Métricas de ROI jurídico**: Define cómo medir el retorno de la inversión en legaltech con métricas significativas para el despacho: horas ahorradas en due diligence, tiempo de revisión de contratos, reducción de errores detectados en auditoría interna, satisfacción del cliente y capacidad de asumir más asuntos sin aumentar plantilla.

**NOTA REGULATORIA**

La responsabilidad del abogado no puede delegarse en ninguna herramienta de IA. Toda política de adopción legaltech debe garantizar que el criterio profesional del abogado está presente en cada decisión, independientemente de las herramientas usadas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Implementar herramientas legaltech respetando la cultura y ética de la profesión jurídica',
                'vote_score'       => 26,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Cambio de plataforma de soporte al cliente sin perder la experiencia',
                'description'      => 'Gestiona la migración de tu herramienta de Customer Success o soporte (de Zendesk a Intercom, de Freshdesk a Salesforce Service Cloud, etc.) garantizando la continuidad de la experiencia del cliente y la adopción rápida del equipo.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en Customer Success Operations y gestión del cambio tecnológico, con experiencia en la migración de plataformas de soporte y CS como Zendesk, Intercom, Freshdesk, Salesforce Service Cloud, HubSpot Service Hub y herramientas similares. Entiendes cómo afecta un cambio de plataforma a la experiencia del cliente, al equipo de soporte y a las métricas de servicio.

**CONTEXTO**

Cambiar la plataforma de soporte al cliente es un proyecto de alto impacto porque toca directamente la experiencia del cliente final. Un ticket perdido, un SLA incumplido o una respuesta que no considera el historial previo del cliente puede dañar la relación y aumentar el churn. Al mismo tiempo, el equipo de soporte trabaja bajo presión constante y no puede permitirse una curva de aprendizaje que reduzca su velocidad de respuesta.

**INFORMACIÓN DE PARTIDA**

Cuéntame:
1. ¿De qué plataforma vienes y a cuál vas? ¿Por qué se hace el cambio?
2. ¿Cuántos agentes de soporte hay y qué tipo de soporte ofrecen (chat, email, teléfono, self-service)?
3. ¿Cuántos tickets activos hay en el sistema actual en este momento?
4. ¿Tienes SLAs comprometidos con clientes que no pueden romperse durante la migración?
5. ¿Qué canales de comunicación con el cliente están integrados actualmente?

**PLAN DE MIGRACIÓN DE PLATAFORMA CS**

1. **Auditoría del sistema actual**: Proceso para documentar todo lo que existe en la plataforma actual: categorías de tickets, macros y respuestas enlatadas, flujos de trabajo automatizados, reglas de asignación, integraciones activas (CRM, facturación, producto), base de conocimiento y reportes existentes.

2. **Estrategia de migración de datos**: Plan para migrar sin perder la historia de cada cliente:
   - Historial de conversaciones y tickets por cliente
   - Notas internas y contexto acumulado sobre cada cuenta
   - Configuración de automatizaciones recreada en el nuevo sistema
   - SLAs activos y tickets en curso durante el go-live

3. **Periodo de transición sin impacto en el cliente**: Diseña una estrategia para que los clientes no noten el cambio, incluyendo: comunicación o no comunicación del cambio al cliente, protocolo para tickets abiertos en el momento del go-live, forma de acceder al historial antiguo en los primeros meses post-migración.

4. **Formación urgente del equipo**: Plan de formación intensiva de 5 días para que el equipo de soporte sea operativo en la nueva plataforma el día del go-live, con los flujos de trabajo más frecuentes, los atajos de teclado más importantes y las situaciones de emergencia que pueden ocurrir.

5. **Configuración del nuevo sistema**: Checklist de configuración pre-go-live de la nueva plataforma: canales de comunicación conectados, flujos de trabajo básicos recreados, SLAs configurados, equipo de agentes creado con sus roles y permisos, y prueba end-to-end de un ticket de principio a fin.

6. **Plan de contingencia de soporte**: Protocolo de emergencia para las primeras 48 horas post-go-live: quién es el responsable técnico de guardia, cómo escalar si hay pérdida de tickets, backup del sistema anterior activo durante 30 días y comunicación a clientes si hay retraso en las respuestas.

7. **Métricas de impacto en el cliente**: KPIs que confirman que la migración no ha dañado la experiencia: tiempo de primera respuesta, CSAT/NPS del período post-migración comparado con el anterior, volumen de escalaciones y churn atribuible a problemas de soporte.

**PRIORIDAD ABSOLUTA**

En un cambio de plataforma de soporte, el cliente siempre es la prioridad. Ante cualquier dilema entre la comodidad del equipo y la experiencia del cliente durante la transición, elige al cliente. El equipo se adapta; el cliente se va.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Migrar la plataforma de soporte sin interrumpir la experiencia del cliente',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Actualizar tu stack tecnológico como profesional independiente',
                'description'      => 'Evalúa y actualiza las herramientas de tu práctica freelance con un proceso estructurado que minimice la interrupción de proyectos activos, reduzca costes de suscripciones y mejore tu productividad y la calidad del trabajo entregado.',
                'prompt_content'   => <<<'EOT'
Actúa como un mentor de negocio para profesionales independientes especializado en optimización de procesos y stack tecnológico para freelancers. Conoces las herramientas más efectivas por categoría (gestión de proyectos, comunicación con clientes, facturación, productividad, entrega de trabajo) y sabes cómo ayudar a un freelancer a hacer una transición ordenada sin perder clientes ni ingresos.

**CONTEXTO**

El stack tecnológico del freelancer es tan importante como sus habilidades técnicas. Las herramientas correctas le permiten trabajar con más clientes al mismo tiempo, ofrecer una experiencia más profesional, automatizar tareas repetitivas y escalar sus ingresos sin aumentar proporcionalmente sus horas de trabajo. Sin embargo, cambiar de herramientas cuando tienes proyectos activos es un riesgo que muchos freelancers evitan, acumulando herramientas obsoletas o procesos ineficientes por miedo a la interrupción.

**INFORMACIÓN DE PARTIDA**

Antes de comenzar, dime:
1. ¿Cuál es tu especialidad freelance y cómo entregas tu trabajo a los clientes?
2. ¿Qué herramientas usas actualmente para: comunicación, gestión de proyectos, facturación, almacenamiento y entrega de archivos?
3. ¿Cuánto pagas mensualmente en suscripciones de herramientas?
4. ¿Cuál es el mayor problema o fricción en tu flujo de trabajo actual?
5. ¿Tienes proyectos activos ahora mismo que no pueden interrumpirse?

**PROCESO DE ACTUALIZACIÓN DEL STACK**

1. **Auditoría del stack actual**: Crea un inventario de todas las herramientas que uso, organizadas por categoría. Para cada herramienta evalúa: coste mensual, frecuencia de uso real, alternativa gratuita o más barata disponible, herramientas que se solapan en funcionalidad. Calcula el coste total anual del stack y el coste por cliente servido.

2. **Identificación de ineficiencias**: Define los 5 tipos de ineficiencias más frecuentes en el stack del freelancer: duplicación de herramientas que hacen lo mismo, herramientas de pago con funcionalidades que no se usan, flujos manuales que podrían automatizarse, herramientas no integradas entre sí, y herramientas que los clientes no pueden usar cómodamente.

3. **Stack ideal por categoría**: Para mi especialidad, recomienda la mejor herramienta por categoría con criterios claros de selección:
   - Comunicación con clientes: email profesional, videollamadas, mensajería
   - Gestión de proyectos y tareas: seguimiento del trabajo, entrega de assets
   - Contratos y facturación: contratos digitales, facturación, cobro online
   - Almacenamiento y entrega: nube, intercambio de archivos grandes
   - Productividad personal: gestión del tiempo, bloqueo de distracciones
   - IA y automatización: herramientas que multiplican tu capacidad de entrega

4. **Plan de transición por prioridad**: No todas las herramientas deben cambiarse al mismo tiempo. Diseña un plan de 3 meses con:
   - Mes 1: Cambiar las herramientas de menor riesgo (las que no usan los clientes)
   - Mes 2: Actualizar las herramientas de entrega y comunicación con clientes
   - Mes 3: Migrar facturación, contratos y flujo de pago
   Para cada cambio, incluye el protocolo para notificar a los clientes actuales si es necesario.

5. **Protocolo de cambio de herramienta**: Define el proceso estándar para cambiar cualquier herramienta del stack sin interrumpir el trabajo: período de prueba paralelo, migración de datos o proyectos activos, comunicación a clientes si aplica, y criterio de decisión para confirmar el cambio o revertirlo.

6. **Automatizaciones prioritarias**: Las 5 automatizaciones que más tiempo ahorran a un freelancer en mi especialidad, con las herramientas que las permiten y el tiempo de configuración estimado.

7. **Revisión trimestral del stack**: Diseña una revisión de 30 minutos que puedo hacer cada 3 meses para mantener el stack actualizado, eliminar herramientas que ya no uso y evaluar nuevas herramientas que hayan surgido.

**CONSEJO PRAGMÁTICO**

El mejor stack no es el más sofisticado, sino el que mejor se adapta a cómo trabajas tú y cómo trabajan tus clientes. Una herramienta que tú dominas a la perfección es siempre mejor que una más avanzada que usas a medias.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Optimizar el stack tecnológico freelance sin interrumpir proyectos activos',
                'vote_score'       => 40,
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
