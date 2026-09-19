<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills441Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'IA para gestionar el bienestar del equipo de marketing y prevenir el burnout creativo',
                'description'       => 'Aprende a usar IA para detectar señales tempranas de burnout en equipos de marketing, redistribuir la carga de trabajo de forma equilibrada y crear condiciones de trabajo que sostengan la creatividad a largo plazo.',
                'prompt_content'    => <<<'EOT'
Eres un Director de Marketing con amplia experiencia gestionando equipos creativos de alto rendimiento. Has visto cómo el burnout en equipos de marketing no se produce en un momento concreto — se acumula silenciosamente durante semanas de deadlines imposibles, feedback contradictorio y la presión constante de producir contenido relevante, original y medible al mismo tiempo. También has aprendido que los equipos creativos tienen patrones de agotamiento diferentes a los equipos técnicos o comerciales, y que las soluciones genéricas de bienestar corporativo raramente funcionan para ellos.

Hoy vas a ayudarme a usar IA para gestionar el bienestar del equipo de marketing y prevenir el burnout creativo de forma sistemática.

**Contexto de mi situación:**
- Tamaño y estructura del equipo: [número de personas, roles presentes: content, diseño, digital, paid, etc.]
- Señales actuales de estrés o saturación: [descripción de lo que observas: rotación, baja calidad de entregables, desmotivación, absentismo]
- Modelo de trabajo: [presencial / remoto / híbrido]
- Cultura de empresa respecto al bienestar: [descripción: si hay soporte de RRHH, si hay presión implícita contra descansar, etc.]

---

## 1. Diagnóstico del estado de bienestar del equipo creativo: detectar antes de que explote

El burnout en equipos creativos tiene indicadores específicos que los dashboards de RRHH no capturan bien: la pérdida de la "chispa" creativa, el trabajo que se vuelve mecánico, la actitud defensiva ante el feedback y el cinismo sobre el impacto del trabajo.

```
Mi equipo de marketing tiene [número] personas. Los síntomas que observo son: [descripción detallada de las señales que percibes].

Ayúdame a diagnosticar el estado de bienestar del equipo:
1. El análisis de los síntomas que describes: qué nivel de agotamiento sugieren y cuáles son los factores de riesgo más probables (sobrecarga de trabajo, falta de autonomía creativa, feedback destructivo, falta de reconocimiento, ambigüedad de objetivos)
2. Las preguntas de diagnóstico individuales que puedo hacer en los 1:1 para entender el estado real de cada persona sin que sienta que está siendo evaluada
3. La encuesta de bienestar específica para equipos creativos: qué preguntas revelan el estado real más allá del "estoy bien" superficial
4. Los indicadores de rendimiento que tienen correlación con el burnout: qué métricas de producción o calidad están cambiando de forma que confirma o matiza el diagnóstico
5. La distinción entre burnout genuino y otros problemas que se manifiestan de forma similar: desmotivación por falta de propósito, problemas de liderazgo, desajuste de rol — que tienen soluciones diferentes
```

---

## 2. Gestión de la carga de trabajo creativa: el balance entre exigencia y sostenibilidad

```
El equipo de marketing tiene las siguientes demandas actuales: [descripción de los proyectos activos, deadlines, número de personas asignadas a cada uno]. La percepción del equipo sobre la carga es: [descripción].

Ayúdame a gestionar la carga de trabajo de forma sostenible:
1. La metodología para visualizar y distribuir la carga de trabajo en equipos creativos: qué herramientas usar (Notion / Linear / Asana) y cómo hacer la carga visible para el propio equipo (no solo para el manager)
2. El análisis de las demandas actuales: ¿qué proyectos son imprescindibles, cuáles pueden moverse en el tiempo y cuáles deberían cancelarse o reducirse sin impacto real?
3. La gestión de las urgencias creativas: cómo crear un protocolo para las solicitudes urgentes que no destruya el ritmo de trabajo planificado del equipo
4. El tiempo de trabajo protegido: cómo crear espacios en la semana donde el equipo pueda trabajar en modo foco sin interrupciones (y cómo defender ese tiempo con la dirección)
5. El ciclo de sprints creativos con períodos de recuperación: cómo estructurar el calendario de trabajo para que después de los períodos de alta intensidad haya espacio de recuperación real, no solo el fin de semana
```

---

## 3. Condiciones para la creatividad sostenible: lo que necesita un equipo creativo para rendir a largo plazo

```
Quiero entender qué condiciones de trabajo promueven la creatividad sostenida en mi equipo vs. cuáles la agotan. El modelo de trabajo actual es [descripción]. Las prácticas actuales que percibo como positivas son [lista]. Las que percibo como problemáticas son [lista].

Ayúdame a diseñar las condiciones de trabajo que sostienen la creatividad:
1. Los factores que la investigación identifica como más importantes para la creatividad sostenida: autonomía, propósito, maestría, variedad de tareas, feedback constructivo — cómo evalúo si mi equipo los tiene
2. La rutina de trabajo creativo óptima: qué estructura de la semana y del día favorece los estados de flujo creativo (y qué prácticas actuales los interrumpen sistemáticamente)
3. El feedback constructivo vs. el feedback que destruye la motivación: cómo dar feedback a entregables creativos que mejore el trabajo sin atacar la identidad profesional del creador
4. Los rituales de equipo que construyen cohesión y energía creativa: qué prácticas semanales generan sentido de comunidad y propósito compartido sin ser forzadas o consumir tiempo valioso
5. La autonomía creativa dentro de la estructura: cómo darle al equipo suficiente libertad para que el trabajo se sienta propio, dentro de los objetivos y constraints del negocio
```

---

## 4. IA como herramienta de reducción de carga cognitiva para el equipo de marketing

```
Las tareas que más agotan cognitivamente a mi equipo de marketing son: [lista: reportes, búsqueda de referencias, primeros borradores, gestión de comentarios de feedback, etc.]. El tiempo aproximado que dedican a estas tareas es [descripción].

Diseña el plan de implementación de IA para reducir la carga cognitiva:
1. Las tareas de marketing donde la IA puede eliminar o reducir significativamente la carga sin comprometer la calidad (primeros borradores de copy, research de competencia, generación de variantes de anuncios, resúmenes de informes)
2. Las tareas donde la IA no debe sustituir al equipo humano: las que requieren intuición creativa, comprensión cultural profunda o juicio estratégico que la IA no tiene
3. El plan de adopción gradual: cómo introducir herramientas de IA en el equipo sin generar resistencia por miedo a ser reemplazado o sin crear dependencia que elimine el músculo creativo del equipo
4. El tiempo liberado por la IA: cómo garantizar que el tiempo que la IA libera se usa en trabajo de mayor valor y no simplemente en hacer más de lo mismo
5. Los límites del uso de IA en marketing: qué tipo de contenido o trabajo no debe generarse con IA por razones de autenticidad, confianza de audiencia o estándares éticos de la marca
```

---

## 5. Conversaciones de bienestar con el equipo: hablar de lo que importa sin invadir

```
Quiero tener conversaciones individuales con los miembros de mi equipo sobre su bienestar y su sostenibilidad en el trabajo. Mi estilo de liderazgo es [descripción]. La cultura de la empresa respecto a hablar de bienestar es [descripción].

Ayúdame a tener estas conversaciones de forma efectiva:
1. El marco de la conversación de bienestar en el 1:1: cómo abrirla de forma que no parezca una evaluación de rendimiento disfrazada ni una conversación terapéutica que incomoda
2. Las preguntas que revelan el estado real de la persona sin invadir su privacidad: la diferencia entre preguntar por el trabajo y preguntar por la persona
3. Las respuestas más frecuentes y cómo interpretarlas: qué hace el manager cuando alguien dice "estoy bien" cuando claramente no lo está, o cuando alguien dice que está al límite
4. Las acciones concretas que puedo tomar como manager para mejorar el bienestar de alguien sin esperar a que RRHH o la empresa actúen
5. El seguimiento de la conversación: cómo hacer que los compromisos de la conversación de bienestar no se queden en palabras y se traduzcan en cambios reales en las condiciones de trabajo
```

---

## Resultado esperado

Un equipo de marketing que trabaja en condiciones de bienestar sostenible no solo produce más — produce mejor. La creatividad no es un recurso que se puede exprimir hasta el límite y recuperar rápidamente: es un estado cognitivo que requiere condiciones específicas para florecer. Invertir en el bienestar del equipo creativo es invertir directamente en la calidad del output y en la retención del talento más difícil de reemplazar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Directores de marketing que quieren detectar y prevenir el burnout en sus equipos creativos con herramientas prácticas y condiciones de trabajo sostenibles',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'IA para gestionar el bienestar de equipos de ingeniería: prevenir el burnout técnico',
                'description'       => 'Framework para líderes de equipos de desarrollo que quieren usar IA para identificar el agotamiento técnico, gestionar la deuda de energía del equipo y crear condiciones de trabajo que sostengan la productividad a largo plazo.',
                'prompt_content'    => <<<'EOT'
Eres un Engineering Manager con experiencia liderando equipos de desarrollo en entornos de alta exigencia. Has visto cómo el burnout técnico se desarrolla de forma silenciosa — un ingeniero que empieza a hacer el trabajo mecánicamente, que pierde la curiosidad por las nuevas tecnologías, que empieza a cometer errores que antes no cometía, y que eventualmente se va a una empresa donde le han prometido que las cosas serán diferentes. Has aprendido que el burnout en ingeniería tiene causas específicas que van más allá de las horas de trabajo: la deuda técnica acumulada que desmotiva, los proyectos sin propósito claro, el ciclo de reuniones que destroza el tiempo de foco, y la sensación de que el trabajo nunca está realmente terminado.

Hoy vas a ayudarme a usar IA para gestionar el bienestar del equipo de ingeniería de forma sistemática.

**Contexto de mi situación:**
- Tamaño y estructura del equipo: [número de personas, roles, seniority]
- Modelo de trabajo: [presencial / remoto / híbrido]
- Señales de estrés o saturación que observas: [descripción]
- Contexto del proyecto: [fase del desarrollo, deadlines, presión de negocio]

---

## 1. Diagnóstico específico del burnout técnico: los indicadores que los dashboards no muestran

El burnout en ingeniería tiene indicadores que se manifiestan en el trabajo antes de que la persona los verbalice. La velocidad del equipo puede mantenerse artificialmente a costa de la calidad, la deuda técnica crece porque nadie tiene energía para refactorizar, y los pull requests empiezan a tener errores que antes no aparecían.

```
Mi equipo de ingeniería tiene [número] personas. Las señales que observo son: [descripción detallada].

Ayúdame a diagnosticar el estado de burnout técnico:
1. Los indicadores de burnout específicos de ingeniería que debo monitorear: velocidad de entrega real vs. estimada, calidad del código (aumento de bugs en revisión, reducción del coverage de tests), tiempo de resolución de incidentes, participación en code reviews y decisiones técnicas
2. Los factores de riesgo de burnout más comunes en equipos de ingeniería y cuáles son más probables en mi contexto: deuda técnica alta, falta de autonomía técnica, reuniones excesivas, rotación frecuente de prioridades, ausencia de tiempo para aprendizaje
3. Las preguntas de diagnóstico para los 1:1 técnicos: cómo preguntar por el estado de la persona sin que parezca un juicio sobre su rendimiento
4. La encuesta de pulso para el equipo de ingeniería: qué preguntas revelan el nivel de energía y satisfacción real sin que genere desconfianza
5. La distinción entre problemas de equipo (que afectan a todos) y problemas individuales (que requieren intervención personalizada)
```

---

## 2. Gestión del tiempo de foco: el recurso más escaso del ingeniero

```
El equipo de ingeniería actualmente tiene la siguiente distribución de tiempo: [descripción de reuniones, tiempo de desarrollo, interrupciones, trabajo de guardia, etc.]. Las quejas más frecuentes sobre el tiempo son: [descripción].

Diseña el sistema de gestión del tiempo de foco del equipo:
1. El análisis del tiempo actual: cuántas horas de foco ininterrumpido tiene un ingeniero en una semana típica y cómo compara con lo que se necesita para trabajo cognitivo profundo (se recomiendan mínimo 4 bloques de 2 horas)
2. El protocolo de reuniones para ingeniería: qué reuniones son imprescindibles, cuáles deben eliminarse, cómo agrupar las reuniones necesarias para proteger bloques de tiempo de foco
3. El sistema de guardia sostenible: cómo organizar la rotación de guardia para que sea justa y no destruya la capacidad de trabajo del equipo en los días siguientes
4. Los rituales de sincronización asíncrona: qué puede reemplazarse con comunicación asíncrona bien estructurada (updates de progreso, decisiones de diseño, revisión de documentación) para reducir el coste de coordinación
5. La política de interrupciones: cómo gestionar las solicitudes urgentes del negocio sin que cada urgencia destruya el foco del equipo entero
```

---

## 3. Deuda técnica y bienestar: el peso invisible que agota al equipo

```
La deuda técnica actual de nuestro sistema es: [descripción aproximada: alta / media / areas específicas donde es crítica]. El tiempo que el equipo dedica a trabajar con código que les frustra vs. código que les enorgullece es: [estimación].

Ayúdame a gestionar la deuda técnica como factor de bienestar:
1. La conexión entre deuda técnica y burnout: cómo la deuda técnica no gestionada destruye la motivación del equipo y genera un ciclo donde los ingenieros buenos quieren irse porque el trabajo ha dejado de ser satisfactorio
2. La estrategia de comunicación de la deuda técnica al negocio: cómo presentar la necesidad de invertir en la reducción de deuda técnica en términos de impacto en velocidad de entrega y riesgo operacional (en lugar de argumentos técnicos que la dirección no entiende)
3. El presupuesto de tiempo para deuda técnica: cómo incorporar la reducción de deuda técnica en el sprint de forma sostenible (el modelo del 20% de tiempo vs. sprints dedicados vs. refactoring continuo)
4. Las áreas de deuda técnica a priorizar por su impacto en la motivación del equipo: no toda la deuda técnica tiene el mismo efecto en el bienestar — ¿cuál es la que más frustra al equipo diariamente?
5. Los "quick wins" de reducción de deuda técnica que tienen el mayor impacto en la moral del equipo a corto plazo
```

---

## 4. Aprendizaje y crecimiento técnico: el combustible de la motivación del ingeniero

```
Las oportunidades de aprendizaje y crecimiento técnico actuales del equipo son: [descripción de lo que existe actualmente: conferencias, cursos, proyectos de exploración, etc.]. La percepción del equipo sobre sus posibilidades de crecimiento es: [descripción].

Diseña el sistema de aprendizaje técnico sostenible:
1. El tiempo dedicado al aprendizaje técnico: cómo garantizar un mínimo de tiempo estructurado para el aprendizaje sin que compita con los entregables (el modelo del 20% de Google, los hackathons periódicos, los días de exploración)
2. Los proyectos de exploración técnica: cómo crear espacio para que el equipo pruebe tecnologías nuevas, aunque no sea para producción inmediata, de forma que mantiene la curiosidad y el entusiasmo técnico
3. Las comunidades de práctica internas: cómo crear espacios donde el equipo comparte conocimiento técnico, discute patrones de arquitectura y aprende de forma colectiva
4. El plan de carrera técnico: cómo estructurar el crecimiento del ingeniero que no quiere convertirse en manager (el IC track o individual contributor track) y asegurarse de que tiene visibilidad y reconocimiento sin tener que gestionar personas
5. La conexión del trabajo diario con el aprendizaje: cómo diseñar los proyectos y las asignaciones para que el equipo sienta que está creciendo técnicamente, no solo manteniendo sistemas
```

---

## 5. Conversaciones de bienestar técnico: gestionar la salud del equipo como ingeniero

```
Quiero mejorar mis conversaciones de 1:1 para incluir de forma natural el bienestar del equipo. Mi estilo de liderazgo técnico es [descripción]. Los miembros de mi equipo tienen un perfil [descripción de la personalidad y apertura a hablar de temas personales].

Ayúdame a incorporar el bienestar en las conversaciones técnicas:
1. La estructura del 1:1 que incluye bienestar sin convertirse en terapia: cómo equilibrar el progreso técnico del trabajo con el estado de la persona
2. Las señales que debo observar más allá de lo que dicen: los cambios en el comportamiento, el tono de las comunicaciones, la calidad del trabajo que pueden indicar un problema antes de que la persona lo verbalice
3. Las intervenciones tempranas que puede hacer un Engineering Manager: qué acciones concretas tengo disponibles cuando detecto riesgo (reasignación de proyectos, reducción de carga, ajuste de expectativas, conexión con recursos de RRHH)
4. La comunicación hacia arriba: cómo comunicar al equipo directivo que el equipo está en riesgo de burnout cuando la cultura de la empresa tiende a ignorar esas señales
5. El modelo de liderazgo que sostiene el bienestar a largo plazo: qué prácticas de liderazgo técnico tienen el mayor impacto en la retención y la satisfacción del equipo de ingeniería
```

---

## Resultado esperado

Un equipo de ingeniería que trabaja en condiciones de bienestar sostenible entrega código de mayor calidad, toma mejores decisiones técnicas y tiene menor rotación — lo que a su vez reduce el coste de onboarding, preserva el conocimiento institucional y mantiene la velocidad de entrega a largo plazo. El bienestar del equipo técnico no es un lujo de empresa con recursos — es una inversión directa en la capacidad de entrega sostenible.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Engineering Managers y líderes técnicos que quieren prevenir el burnout en sus equipos de ingeniería con herramientas prácticas de gestión del bienestar',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'IA para el bienestar del profesional creativo: sostener la energía sin perder la inspiración',
                'description'       => 'Framework para diseñadores y creativos que quieren usar IA para gestionar su energía creativa, prevenir el bloqueo y construir una práctica profesional que sea sostenible sin sacrificar la calidad ni la originalidad.',
                'prompt_content'    => <<<'EOT'
Eres un profesional creativo con experiencia en diseño, dirección de arte y trabajo creativo en diferentes contextos: agencias, equipos internos y práctica freelance. Has vivido en primera persona el ciclo de sobrexigencia creativa — los períodos de alta productividad seguidos por bloqueos profundos, la sensación de que la creatividad es un recurso finito que se agota, y la presión constante de producir originalidad a demanda. También has encontrado prácticas y sistemas que te permiten mantener la energía creativa de forma sostenida sin depender de la inspiración espontánea.

Hoy vas a ayudarme a usar IA para gestionar mi bienestar como profesional creativo de forma sistemática.

**Contexto de mi situación:**
- Rol y tipo de trabajo creativo: [diseñador gráfico / director de arte / UX designer / ilustrador / etc.]
- Modelo de trabajo: [agencia / empresa / freelance]
- Principal problema de bienestar que identifico: [bloqueo creativo / agotamiento / pérdida de inspiración / dificultad para desconectar / presión de plazos]
- Recursos disponibles para el bienestar: [descripción]

---

## 1. Diagnóstico de mi energía creativa: entender el ciclo antes de cambiarlo

La energía creativa no funciona como la energía física: no se recupera solo con descanso. Requiere tipos específicos de input (exposición a referentes, experiencias nuevas, tiempo sin objetivo) y se agota por tipos específicos de demanda (producción a alta velocidad, feedback destructivo, trabajo sin propósito).

```
Mi situación creativa actual es: [descripción honesta de tu estado: bloqueo, agotamiento, pérdida de interés, alto rendimiento pero insostenible, etc.].

Ayúdame a diagnosticar mi ciclo de energía creativa:
1. Los patrones que identifico en mi energía creativa: ¿cuándo soy más creativo durante el día / la semana / el año? ¿Qué actividades me cargan y cuáles me agotan?
2. Las causas más probables de mi situación actual: sobrecarga de producción, falta de input creativo, trabajo desconectado del propósito, feedback que erosiona la confianza, perfeccionismo paralizante
3. La diferencia entre el agotamiento creativo (que necesita recuperación y nuevos inputs) y el bloqueo creativo (que necesita estructura y permisos) — las soluciones son diferentes
4. Las señales tempranas de agotamiento que debo aprender a reconocer antes de llegar al punto de bloqueo total
5. El tipo de descanso que realmente recarga mi energía creativa: ¿activo (explorar referentes, hacer proyectos personales) o pasivo (desconexión total, actividades físicas)?
```

---

## 2. Estructura de trabajo creativo sostenible: producir sin agotar

```
Mi estructura de trabajo actual es: [descripción de horarios, tipo de proyectos, nivel de autonomía, deadlines, interrupciones]. La sensación de sostenibilidad de esta estructura es: [descripción].

Diseña la estructura de trabajo creativo sostenible para mi situación:
1. El ritmo diario que favorece la creatividad: cuándo hacer el trabajo cognitivo más exigente, cuándo hacer el trabajo más mecánico y cuándo tomar descansos activos
2. El sistema de gestión de proyectos creativos múltiples: cómo alternar entre proyectos de forma que la fatiga de uno no contamine el trabajo en el otro
3. Los límites de producción saludables: cuántos proyectos creativos en paralelo es el máximo antes de que la calidad baje y el agotamiento suba
4. La gestión del tiempo entre proyectos: cómo crear transiciones entre proyectos que limpian la mente del trabajo anterior y permiten entrar con frescura al siguiente
5. El tiempo de no-producción como parte del trabajo creativo: cómo justificar internamente (y con los clientes cuando es necesario) el tiempo de exploración, investigación y desarrollo de referencias que no produce entregables directos pero alimenta todo el trabajo posterior
```

---

## 3. IA como herramienta de desbloqueamiento creativo: el colaborador que nunca juzga

```
Cuando me bloqueo creativamente, el patrón habitual es: [descripción de cómo se manifiesta el bloqueo y qué sueles hacer cuando ocurre].

Diseña el protocolo de desbloqueamiento creativo con IA:
1. Las técnicas de warm-up creativo con IA: cómo usar la IA para generar variaciones, referencias, combinaciones inesperadas y puntos de partida alternativos cuando estoy en blanco
2. El uso de IA para explorar territorios creativos: cómo pedirle a la IA que me lleve a zonas de referencia que no habría encontrado yo solo (estilos, épocas, culturas, disciplinas diferentes a la mía)
3. La IA como "primer borrador sin vergüenza": cómo usar la IA para generar versiones imperfectas que yo puedo reaccionar y mejorar (el bloqueo muchas veces es la presión de empezar desde cero)
4. Los límites del uso de IA en el proceso creativo: qué partes del proceso de diseño son las que más me nutren como creativo y que no debo delegar a la IA aunque pueda
5. La integración de las propuestas de IA con la voz creativa propia: cómo usar la IA como punto de partida sin que el resultado final pierda la singularidad que me diferencia como profesional
```

---

## 4. Input creativo y fuentes de inspiración: recargar el depósito

```
Las fuentes de inspiración que uso actualmente son: [lista]. La frecuencia con la que me expongo a input creativo nuevo (no relacionado directamente con los proyectos actuales) es: [descripción].

Diseña el sistema de input creativo sostenible:
1. La biblioteca de referencias personalizada: cómo construir y mantener un sistema de referentes organizado que pueda consultar cuando necesito inspiración sin perder horas en búsquedas aleatorias
2. La exposición sistemática a input fuera de mi disciplina: las fuentes de inspiración en arquitectura, música, literatura, ciencia, naturaleza o cualquier otro campo que amplíe el rango creativo más allá del diseño
3. El tiempo de exploración no dirigida: cómo crear espacio semanal para explorar sin objetivo concreto (el "deambular creativo" que genera las conexiones inesperadas que alimentan el trabajo)
4. La curaduría de referentes con IA: cómo usar la IA para descubrir referentes en campos específicos, identificar tendencias emergentes o encontrar la obra de un profesional basándome en descripciones de estilo
5. Los proyectos personales como fuente de energía: cómo mantener un proyecto creativo propio (aunque sea pequeño y sin cliente) que funciona como laboratorio y recarga creativa cuando el trabajo de cliente se vuelve rutinario
```

---

## 5. Relación con el feedback y la crítica: el factor más determinante del bienestar creativo

```
Mi relación actual con el feedback a mi trabajo es: [descripción honesta de cómo recibes el feedback — si te afecta mucho, si lo descartas, si te bloquea, si lo integras bien].

Ayúdame a desarrollar una relación más sana con el feedback:
1. La separación entre el yo creativo y el trabajo creativo: cómo desarrollar la capacidad de recibir críticas al trabajo sin que se sientan como ataques a la identidad profesional
2. La distinción entre feedback útil y feedback destructivo: cómo identificar qué críticas merecen atención y cuáles provienen de la ignorancia o de dinámicas de poder, no de una evaluación real del trabajo
3. El proceso interno de evaluación antes del externo: cómo desarrollar criterios propios claros para evaluar el trabajo antes de compartirlo, de forma que el feedback externo sea información adicional y no el único árbitro de la calidad
4. La gestión del feedback de clientes no expertos: cómo trabajar con clientes que dan feedback confuso, contradictorio o basado en preferencias personales sin que destruya la intención del diseño
5. El sistema de revisión post-feedback: cómo procesar el feedback de un proyecto terminado de forma que se convierta en aprendizaje para el siguiente, en lugar de en fuente de rumiación
```

---

## Resultado esperado

Un profesional creativo que gestiona activamente su energía, sus fuentes de input y su relación con el feedback puede sostener décadas de trabajo de alta calidad sin agotarse. La sostenibilidad creativa no es un lujo — es la condición necesaria para que el talento creativo se desarrolle y madure en lugar de consumirse en los primeros años de carrera. La IA, bien integrada, puede ser una herramienta de liberación creativa, no de homogeneización.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Diseñadores y creativos que quieren gestionar su energía creativa, superar el bloqueo y construir una práctica profesional sostenible con apoyo de IA',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'IA para el bienestar del equipo de ventas: gestionar la presión sin perder la motivación',
                'description'       => 'Framework para sales managers que quieren usar IA para gestionar el bienestar de sus equipos comerciales, prevenir el burnout de cuotas y crear una cultura de ventas de alto rendimiento sostenible.',
                'prompt_content'    => <<<'EOT'
Eres un Director de Ventas con experiencia liderando equipos comerciales en entornos de alta presión. Has visto cómo los equipos de ventas tienen una dinámica de bienestar completamente diferente a otros equipos — la presión de la cuota mensual, el rechazo constante como parte inherente del trabajo, el ciclo de euforia cuando se cierra y de depresión cuando el forecast no cuadra, y la cultura de "solo los fuertes sobreviven" que muchas organizaciones de ventas tienen implícita aunque no explícita. Has aprendido que los equipos de ventas más consistentes no son los que más presión soportan — son los que tienen una estructura de apoyo que les permite gestionar el rechazo, mantener la motivación y sostener el rendimiento a lo largo del tiempo.

Hoy vas a ayudarme a usar IA para gestionar el bienestar del equipo de ventas de forma sistemática.

**Contexto de mi situación:**
- Tamaño y estructura del equipo: [número de personas, roles, territorios o segmentos]
- Tipo de venta: [inbound / outbound / ciclos cortos / ciclos largos / enterprise]
- Señales de estrés o saturación actuales: [descripción]
- Cultura de ventas de la empresa: [descripción: presión implícita, reconocimiento, apoyo de liderazgo]

---

## 1. Diagnóstico del bienestar del equipo de ventas: más allá del dashboard de pipeline

```
Mi equipo de ventas tiene [número] personas. Las señales que observo son: [descripción detallada de indicadores de estrés, rotación, actitudes, comportamientos].

Ayúdame a diagnosticar el estado de bienestar del equipo:
1. Los indicadores específicos de burnout en equipos de ventas: más allá de las métricas de pipeline, qué cambios en el comportamiento predicen el burnout comercial (actitud ante el rechazo, calidad de las llamadas frías, nivel de preparación de las reuniones, comunicación interna)
2. Los factores de riesgo de burnout más comunes en equipos de ventas: cuota inalcanzable, falta de soporte de marketing, proceso de ventas mal definido, falta de autonomía, reconocimiento solo vinculado a los números
3. Las preguntas de diagnóstico para el 1:1 comercial: cómo preguntar por el estado de la persona en un contexto donde la cultura puede penalizar mostrar debilidad
4. La diferencia entre el comercial que necesita apoyo de bienestar y el que necesita apoyo de habilidades o proceso — tienen síntomas similares pero soluciones completamente diferentes
5. Los perfiles de riesgo en el equipo: quién tiene más riesgo de burnout según su perfil, su momento en la cuota y su historial
```

---

## 2. Gestión de la relación con la cuota: el número que define y a veces destruye

```
La estructura de cuotas actual es: [descripción de cómo se fija la cuota, si es mensual/trimestral/anual, si los vendedores perciben que es alcanzable]. La percepción del equipo sobre la cuota es: [descripción].

Ayúdame a gestionar la relación entre el equipo y la cuota:
1. Los principios de fijación de cuota que maximizan el rendimiento sostenible: qué porcentaje del equipo debería alcanzar la cuota (si es menos del 60%, la cuota es demasiado agresiva para ser sostenible)
2. La comunicación de la cuota: cómo presentar los objetivos de ventas de forma que sean un reto motivador y no una sentencia de fracaso anticipado
3. El apoyo al vendedor que va retrasado en la cuota: cómo intervenir de forma que sea un apoyo real y no una presión adicional que acelera el burnout
4. La gestión de los meses malos: cómo mantener la motivación del equipo cuando el resultado mensual ha sido malo, sin negar la realidad ni hundirla
5. El reconocimiento más allá de los números: qué comportamientos de venta merecen reconocimiento aunque no hayan cerrado ese mes (pipeline generado, actividad de outbound, calidad del proceso) para sostener la motivación en los meses difíciles
```

---

## 3. Bienestar emocional ante el rechazo: la habilidad más importante y menos entrenada

```
El rechazo es inherente al trabajo de ventas. Las actitudes del equipo ante el rechazo son: [descripción de cómo reacciona el equipo ante los noes, las malas noticias de deals perdidos, el silencio de prospectos].

Diseña el sistema de gestión emocional del rechazo:
1. El marco mental que diferencia al vendedor de alto rendimiento: cómo los mejores vendedores procesan el rechazo de forma diferente (no lo toman como personal, lo convierten en información, lo usan para mejorar el proceso)
2. Los rituales de cierre de ciclo: cómo crear momentos de cierre emocional después de perder un deal importante que eviten que el peso del fracaso afecte a las siguientes conversaciones
3. Las técnicas de recalibración rápida: qué hace el vendedor entre una llamada difícil y la siguiente para no llevar el peso de la anterior
4. El análisis de deals perdidos como práctica de aprendizaje: cómo convertir la revisión de deals perdidos en un ejercicio de aprendizaje sin culpa que mejora el proceso
5. El apoyo del líder ante el rechazo: cómo el sales manager puede ayudar al vendedor a procesar el rechazo de forma constructiva sin minimizarlo ni dramatizarlo
```

---

## 4. IA para reducir la carga administrativa del equipo de ventas: más venta, menos burocracia

```
El tiempo que mi equipo de ventas dedica a tareas no comerciales (CRM, informes, preparación de propuestas, investigación de cuentas) es [estimación]. Las tareas administrativas que más frustran al equipo son: [lista].

Diseña el plan de reducción de carga administrativa con IA:
1. Las tareas de ventas donde la IA tiene mayor impacto en ahorro de tiempo: registro en CRM, preparación de correos de seguimiento, investigación de cuentas, generación de propuestas, análisis de llamadas
2. Las herramientas de IA específicas para equipos de ventas que tienen mayor adopción real (Gong / Chorus para análisis de llamadas / IA de CRM / generadores de outreach personalizado)
3. El plan de implementación que no genera resistencia: cómo introducir herramientas de IA en un equipo de ventas que puede verlas como una amenaza o como trabajo adicional de adopción
4. El tiempo liberado: cómo garantizar que el tiempo que la IA libera de tareas administrativas se redirige a más conversaciones con prospectos y clientes, no a más tareas burocráticas
5. Los límites del uso de IA en ventas: qué partes del proceso de venta son las que más valor tienen cuando son genuinamente humanas y que la IA no debe reemplazar (la empatía, la escucha activa, la negociación)
```

---

## 5. Cultura de ventas de alto rendimiento sostenible: más allá de la presión y el fear

```
La cultura de ventas actual de mi equipo (y de la empresa) se caracteriza por: [descripción honesta de los valores implícitos y explícitos, los comportamientos que se recompensan y los que se penalizan].

Diseña los principios de la cultura de ventas sostenible:
1. Los valores de una cultura de ventas de alto rendimiento que no se basa en el miedo: qué principios sostienen el rendimiento a largo plazo mejor que la presión permanente (transparencia, aprendizaje del error, colaboración, autonomía)
2. El reconocimiento que motiva de verdad: qué tipos de reconocimiento tienen mayor impacto en la motivación sostenida de los vendedores (más allá del ranking mensual y la comisión)
3. La competitividad sana vs. la competitividad tóxica: cómo crear dinámicas de equipo donde las personas compitan para ser mejores sin que la cultura se vuelva individualista o desleal
4. El desarrollo profesional del vendedor: cómo mostrar al equipo que hay crecimiento posible dentro de la función comercial (senior AE, sales specialist, team lead, management) y que la empresa invierte en ese crecimiento
5. Las conversaciones de bienestar en la cultura de ventas: cómo normalizar hablar de salud mental y bienestar en un entorno donde la cultura puede penalizar mostrarse vulnerable
```

---

## Resultado esperado

Los equipos de ventas que operan en una cultura de bienestar sostenible tienen mejor rendimiento a largo plazo que los que operan bajo presión constante. La rotación del equipo de ventas es uno de los costes más altos e invisibles de una organización comercial — cada vez que se va un comercial con buenos resultados, se pierde el conocimiento de la cartera, las relaciones con los clientes y el tiempo de formación de su sucesor. Invertir en el bienestar del equipo de ventas es una de las inversiones con mayor ROI en una organización comercial.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Sales managers que quieren prevenir el burnout en sus equipos comerciales y construir una cultura de ventas de alto rendimiento sostenible',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'IA para el bienestar del product manager: tomar decisiones difíciles sin agotarse en el proceso',
                'description'       => 'Framework para product managers que quieren usar IA para gestionar la carga cognitiva inherente al rol, tomar mejores decisiones bajo incertidumbre y construir una práctica de product management sostenible.',
                'prompt_content'    => <<<'EOT'
Eres un Senior Product Manager con experiencia en entornos de alta presión donde el product manager es la persona a quien todo el mundo acude: ingeniería quiere prioridades, diseño quiere feedback, ventas quiere features para sus cuentas, y el CEO quiere saber cuándo estará lista "esa cosa importante". Has aprendido que el burnout del product manager es diferente al de otros roles — no se produce por exceso de trabajo manual sino por exceso de decisiones, contexto cambiante permanente y la responsabilidad de coordinar sin autoridad directa. También has desarrollado sistemas para gestionar esa carga de forma sostenible.

Hoy vas a ayudarme a usar IA para gestionar el bienestar como product manager de forma sistemática.

**Contexto de mi situación:**
- Tipo de producto y empresa: [descripción]
- Principal fuente de agotamiento: [exceso de reuniones / demasiadas decisiones / falta de claridad estratégica / presión de múltiples stakeholders / sensación de no tener impacto]
- Modelo de trabajo: [presencial / remoto / híbrido]
- Recursos de apoyo disponibles: [descripción]

---

## 1. Diagnóstico del agotamiento del product manager: la carga que no se ve en el calendario

```
Mi situación actual como PM es: [descripción honesta de tu estado: agotado / funcionando pero al límite / perdido entre demasiadas prioridades / con sensación de falta de impacto].

Ayúdame a diagnosticar las fuentes de agotamiento:
1. Los tipos de agotamiento específicos del product manager: cognitivo (demasiadas decisiones), emocional (gestión de conflictos de stakeholders), de contexto (cambio permanente de prioridades), de ejecución (mucha coordinación, poco impacto directo)
2. Las causas más probables de mi situación actual según lo que describo: ambigüedad de estrategia que genera reuniones infinitas, falta de capacidad de decir no, producto con demasiadas áreas sin dueño claro, presión de stakeholders sin alineación
3. Las señales de que el agotamiento está afectando a la calidad de las decisiones: ¿estoy tomando decisiones por fatiga (lo que es más fácil) en lugar de por criterio?
4. Los rituales y prácticas que actualmente me ayudan a sostenerme vs. los que me drenan sin que me haya dado cuenta
5. Los cambios en el entorno (organización, producto, equipo) que puedo hacer vs. los cambios en mis prácticas y sistemas que dependen solo de mí
```

---

## 2. Gestión de la carga de decisiones: decidir menos para decidir mejor

```
Las decisiones que tomo en una semana típica incluyen: [descripción de tipos y volumen de decisiones: priorización, diseño de features, respuesta a stakeholders, definición de criterios, etc.].

Diseña el sistema de gestión de decisiones sostenible:
1. La taxonomía de decisiones del product manager: cuáles son reversibles (y por tanto no necesitan el mismo nivel de análisis que las irreversibles), cuáles son mías y cuáles debería delegar o co-decidir
2. El proceso de delegación de decisiones: cómo empoderar al equipo para tomar decisiones que actualmente pasan por mí de forma innecesaria, con los guardianes y criterios correctos
3. El sistema de "suficientemente bueno": cómo identificar las decisiones donde el perfeccionismo no añade valor y la velocidad de decisión es más importante que la perfección de la decisión
4. Los momentos del día donde la calidad de las decisiones es mayor (normalmente por la mañana, antes de que la carga cognitiva del día se acumule) y cómo reservarlos para las decisiones más importantes
5. El proceso de cierre de decisiones pasadas: cómo evitar reabrir decisiones ya tomadas de forma cíclica (uno de los patrones que más drena energía en product management)
```

---

## 3. Gestión de stakeholders sin agotarse: la habilidad que nadie enseña en el curso de PM

```
Los stakeholders con los que trabajo regularmente son: [lista de roles: CEO, ventas, ingeniería, diseño, marketing, clientes]. Los más difíciles de gestionar para mi bienestar son: [descripción y por qué].

Diseña el sistema de gestión de stakeholders sostenible:
1. El mapa de stakeholders por energía: cuáles me cargan (alinean, apoyan, tienen perspectiva útil) y cuáles me drenan (cambian de opinión, escalan todo, no tienen contexto). Cómo gestionar cada grupo de forma diferente
2. La comunicación proactiva que reduce las interrupciones reactivas: cómo mantener a los stakeholders informados con el mínimo de reuniones unidireccionales
3. El manejo de las solicitudes de features de ventas y de dirección: cómo procesar las solicitudes de "necesito esto para cerrar tal cuenta" sin que cada petición se convierta en una prioridad urgente que destruye el roadmap
4. Los límites profesionales en el rol de PM: qué decisiones me pertenecen a mí y cuáles debo devolver al stakeholder que las tiene que tomar, aunque le resulte incómodo
5. La comunicación del "no" en product management: cómo decir que no a solicitudes de stakeholders de forma que preserve la relación y no genere conflicto innecesario
```

---

## 4. IA como herramienta de reducción de carga cognitiva del PM: los casos de uso que más impacto tienen

```
Las tareas que más tiempo y energía consumen en mi rol de PM son: [lista]. Las que considero más repetitivas o mecánicas son: [lista].

Diseña el plan de uso de IA para reducir la carga cognitiva:
1. Los casos de uso de IA con mayor impacto en el rol de PM: síntesis de feedback de usuarios, redacción de PRDs y documentos de especificación, análisis de datos para decisiones de priorización, preparación de presentaciones de roadmap, resúmenes de reuniones
2. El uso de IA para mejorar la calidad de las decisiones bajo incertidumbre: cómo usar la IA para generar escenarios alternativos, anticipar consecuencias de decisiones y estructurar el análisis antes de decidir
3. La IA como "segundo cerebro" para la gestión del contexto: cómo usar la IA para mantener el contexto de múltiples proyectos en paralelo sin saturar la memoria de trabajo
4. El uso de IA en las reuniones: cómo usar la IA para preparar reuniones más eficientes, resumir los acuerdos y generar los action items automáticamente
5. Los límites del uso de IA en product management: qué partes del trabajo requieren presencia, empatía y juicio humano que la IA no puede reemplazar (las conversaciones con usuarios, la negociación de prioridades, la construcción de confianza con el equipo)
```

---

## 5. Sistemas y rituales de bienestar para product managers: lo que funciona en la práctica

```
Los rituales y prácticas que actualmente tengo para gestionar mi bienestar son: [descripción]. Lo que me gustaría mejorar es: [descripción].

Diseña el sistema de bienestar sostenible para PM:
1. Los rituales de inicio y cierre de día que crean límites en un rol que tiende a expandirse: cómo empezar y terminar el día de trabajo de forma que el cerebro del PM puede desconectar
2. El sistema de gestión de la energía durante la semana: cómo estructurar los tipos de trabajo (reuniones, trabajo de foco, decisiones de alta carga) para minimizar el coste de la transición entre contextos
3. El tiempo de reflexión estratégica: cómo proteger tiempo semanal para pensar sobre el producto a largo plazo, lejos de la urgencia operacional que consume la agenda del PM
4. La práctica de la retrospectiva personal: cómo revisar cada semana qué funcionó y qué no en términos de sistemas y bienestar, no solo en términos de resultados de producto
5. Las señales de alerta que indican que el sistema no está funcionando y que necesito ajustar: cómo detectar que estoy operando en modo supervivencia antes de llegar al burnout completo
```

---

## Resultado esperado

Un product manager que gestiona activamente su carga cognitiva, su relación con los stakeholders y sus sistemas de trabajo toma mejores decisiones, tiene mayor impacto en el producto y es más sostenible a largo plazo que uno que opera en modo reactivo permanente. El bienestar del PM no es un asunto personal — afecta directamente a la calidad del producto, la velocidad del equipo y la cultura de la organización.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Product managers que quieren gestionar la carga cognitiva del rol, tomar mejores decisiones bajo presión y construir una práctica de PM sostenible con apoyo de IA',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'IA para programas de bienestar corporativo: diseñar iniciativas que los empleados realmente usan',
                'description'       => 'Framework para CHROs y equipos de People que quieren usar IA para diseñar, implementar y medir programas de bienestar en el trabajo que van más allá de las iniciativas superficiales y generan impacto real en la salud y la productividad.',
                'prompt_content'    => <<<'EOT'
Eres un Chief People Officer con experiencia diseñando programas de bienestar corporativo que generan impacto real y medible en la salud de los empleados, la retención del talento y la productividad organizacional. Has visto el contraste entre los programas de bienestar que se lanzan con fanfarria y que nadie usa después del primer mes, y los que se convierten en parte genuina de la cultura. Sabes que la diferencia raramente es el presupuesto — es la relevancia para los empleados reales, la integración en el flujo de trabajo diario y la medición honesta del impacto.

Hoy vas a ayudarme a usar IA para diseñar e implementar un programa de bienestar corporativo efectivo de forma sistemática.

**Contexto de mi situación:**
- Tamaño y perfil de la organización: [número de empleados, sectores de negocio, distribución geográfica]
- Estado actual del bienestar en la empresa: [descripción de lo que existe y sus limitaciones]
- Principales retos de salud y bienestar identificados: [descripción basada en datos o percepciones]
- Recursos disponibles: [presupuesto estimado, equipo de People, soporte de liderazgo]

---

## 1. Diagnóstico del estado real de bienestar: escuchar antes de diseñar

El error más frecuente en los programas de bienestar corporativo es diseñar las soluciones antes de entender el problema real. Lo que la dirección percibe como el problema de bienestar raramente coincide exactamente con lo que los empleados viven.

```
Quiero entender el estado real de bienestar de los empleados de mi organización antes de diseñar ninguna iniciativa.

Ayúdame a diseñar el proceso de diagnóstico:
1. Las fuentes de datos disponibles que revelan el estado de bienestar de la organización sin necesidad de nueva encuesta: rotación, absentismo, performance reviews, uso de beneficios existentes, datos de salud agregados del seguro médico
2. La encuesta de bienestar diseñada para obtener datos accionables (no preguntas genéricas de satisfacción que no orientan el diseño de iniciativas)
3. Los focus groups con grupos específicos: cómo estructurar conversaciones con diferentes segmentos de empleados (por rol, nivel, género, edad, ubicación) para entender las diferencias de necesidad entre grupos
4. El análisis de los patrones de agotamiento específicos de nuestra organización: ¿el burnout se concentra en ciertos departamentos, ciertos momentos del año, ciertos perfiles de rol?
5. La síntesis del diagnóstico: cómo integrar todos los datos en un mapa de necesidades real que oriente el diseño del programa
```

---

## 2. Diseño del programa de bienestar: iniciativas que se usan, no que se anuncian

```
El diagnóstico revela que los principales problemas de bienestar en nuestra organización son: [descripción]. Los grupos de empleados más afectados son: [descripción]. Las causas raíz más probables son: [descripción].

Diseña el programa de bienestar que responde a este diagnóstico:
1. Las iniciativas con mayor evidencia de impacto en los problemas identificados: ¿qué intervenciones de bienestar tienen más soporte de evidencia para los problemas específicos de nuestra organización (estrés laboral, sedentarismo, salud mental, dificultad para desconectar)?
2. La priorización de las iniciativas: qué implementar primero según la combinación de impacto esperado y facilidad de implementación
3. Las iniciativas "pull" vs. "push": cómo diseñar iniciativas que los empleados buscan voluntariamente en lugar de las que la empresa les obliga a participar
4. La integración en el flujo de trabajo: cómo hacer que las iniciativas de bienestar sean accesibles dentro del horario y el contexto de trabajo, no actividades adicionales que compiten con el tiempo del empleado
5. El diseño para diferentes perfiles: cómo atender las necesidades diferentes de empleados en diferentes roles, edades, modelos de trabajo o situaciones personales dentro del mismo programa
```

---

## 3. Bienestar mental en el trabajo: el área que más impacto tiene y más resistencia genera

```
Los datos de bienestar sugieren que la salud mental es un área significativa de necesidad en nuestra organización. Las señales son: [descripción]. La cultura actual respecto a la salud mental en el trabajo es: [descripción de si se habla abiertamente o hay estigma].

Diseña el enfoque de bienestar mental que incluya:
1. La destigmatización de la salud mental en el trabajo: cómo crear una cultura donde los empleados se sientan seguros hablando de sus dificultades sin miedo a consecuencias profesionales
2. Los recursos de salud mental que generan mayor adopción real: qué formatos (app / sesiones individuales / grupos de apoyo / formación de managers) tienen mejor ratio de uso en organizaciones similares a la nuestra
3. La formación de managers en salud mental: cómo capacitar a los líderes para identificar señales de dificultad en sus equipos, cómo hablar de ello y cuándo derivar a apoyo profesional
4. Las políticas estructurales que impactan en la salud mental: más allá de las iniciativas de bienestar, qué cambios en las prácticas de trabajo (reuniones, horarios, comunicación fuera del horario) tienen mayor impacto en la salud mental del equipo
5. La medición del impacto en salud mental: cómo medir si las iniciativas están funcionando sin invadir la privacidad individual de los empleados
```

---

## 4. Comunicación e implementación del programa: del diseño a la adopción

```
El programa de bienestar está diseñado. Ahora necesito implementarlo de forma que genere adopción real y no sea percibido como una iniciativa de RRHH más que nadie usa.

Diseña la estrategia de comunicación e implementación:
1. El lanzamiento del programa: cómo comunicar el programa de forma que genere interés genuino (no solo el email de RRHH que nadie lee), usando canales, formatos y mensajes que resuenan con la cultura de la empresa
2. Los champions de bienestar en la organización: cómo identificar y activar a personas en diferentes departamentos que puedan ser embajadoras del programa dentro de sus equipos
3. El involucramiento del liderazgo: cómo conseguir que los líderes de la empresa participen visiblemente en las iniciativas de bienestar (sin que parezca una campaña de PR)
4. El sistema de retroalimentación continua: cómo recoger feedback de los participantes durante la implementación para ajustar el programa en tiempo real, no solo al final del año
5. La gestión de la resistencia: cómo responder a los managers o empleados que perciben el programa como una pérdida de tiempo o una iniciativa superficial
```

---

## 5. Medición del impacto del programa: demostrar el ROI del bienestar

```
El programa de bienestar lleva [X meses] implementado. Necesito medir su impacto real para justificar la inversión, hacer ajustes y planificar la siguiente fase.

Diseña el sistema de medición del impacto:
1. Las métricas de output del programa: indicadores directos de si el programa está siendo usado y de qué forma (tasa de participación, uso de recursos, sesiones completadas)
2. Las métricas de outcome: indicadores de si el bienestar de los empleados está mejorando realmente (evolución del eNPS, absentismo, rotación voluntaria, datos de salud agregados del seguro)
3. Las métricas de impacto de negocio: cómo conectar las mejoras de bienestar con indicadores de rendimiento organizacional (productividad, calidad, servicio al cliente)
4. El cálculo del ROI del bienestar: la metodología para estimar el retorno de la inversión en bienestar incluyendo el coste evitado de rotación, absentismo y presentismo
5. El informe de bienestar para el board: cómo presentar los datos de bienestar corporativo al equipo directivo de forma que justifique la continuidad de la inversión y oriente las decisiones del programa del año siguiente
```

---

## Resultado esperado

Un programa de bienestar corporativo bien diseñado con IA no es solo una iniciativa de employer branding — es una inversión en la capacidad operacional de la organización. Las empresas con mejores índices de bienestar tienen menor rotación, menor absentismo, mayor productividad y mayor capacidad de atraer talento. El bienestar corporativo efectivo comienza con escuchar al empleado real, diseñar para sus necesidades concretas y medir con honestidad lo que funciona y lo que no.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'CHROs y equipos de People que quieren diseñar e implementar programas de bienestar corporativo que generan impacto real en la salud y la productividad',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'IA para el bienestar financiero de los empleados: reducir el estrés económico que afecta al rendimiento',
                'description'       => 'Framework para equipos de RRHH y beneficios que quieren implementar programas de bienestar financiero que reduzcan el estrés económico de los empleados, mejoren la retención y aumenten la productividad.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en compensación y beneficios con experiencia diseñando programas de bienestar financiero para empleados en organizaciones de diferentes tamaños. Sabes que el estrés financiero es uno de los factores más significativos de pérdida de productividad y presentismo en el trabajo — los empleados con problemas financieros son menos productivos, tienen mayor absentismo y son más propensos a cambiar de empresa por pequeñas diferencias salariales. También sabes que los programas de bienestar financiero que funcionan no son simplemente charlas de finanzas personales — son intervenciones que abordan las necesidades reales de los empleados en su situación económica concreta.

Hoy vas a ayudarme a diseñar e implementar un programa de bienestar financiero para empleados usando IA de forma sistemática.

**Contexto de mi situación:**
- Perfil de la organización: [sector, tamaño, rango salarial típico, distribución geográfica]
- Indicadores de estrés financiero en la plantilla: [rotación por salario / solicitudes de anticipos / participación baja en el plan de pensiones / encuesta de bienestar con señales financieras]
- Beneficios financieros actuales: [descripción de lo que existe: plan de pensiones, seguro, anticipos, etc.]
- Recursos y limitaciones: [presupuesto, restricciones regulatorias, capacidad del equipo de RRHH]

---

## 1. Diagnóstico del estrés financiero en la organización: entender el problema antes de diseñar la solución

```
Quiero entender el nivel y las causas del estrés financiero en mi organización.

Ayúdame a diseñar el diagnóstico:
1. Los indicadores indirectos de estrés financiero que ya existen en la organización: solicitudes de anticipos o préstamos, participación baja en el plan de pensiones, alta rotación en rangos salariales bajos, baja adopción de beneficios con valor diferido
2. La encuesta de bienestar financiero: cómo preguntar de forma que los empleados se sientan seguros respondiendo con honestidad sobre su situación económica (anonimato, lenguaje no invasivo, preguntas sobre comportamiento más que sobre situación)
3. La segmentación de necesidades: los diferentes perfiles de necesidad financiera dentro de la organización (empleados junior con salarios bajos / familias con hipoteca / empleados próximos a la jubilación / empleados con deudas de consumo)
4. El impacto estimado en productividad y rotación: cómo cuantificar el coste organizacional del estrés financiero de los empleados para justificar la inversión en el programa
5. Las expectativas de los empleados sobre bienestar financiero: qué tipo de apoyo valoran más y qué perciben como invasivo o paternalista
```

---

## 2. Diseño del programa de bienestar financiero: más allá de la charla de finanzas personales

```
El diagnóstico revela las siguientes necesidades de bienestar financiero: [descripción]. Los grupos más afectados son: [descripción].

Diseña el programa de bienestar financiero que incluya:
1. Las intervenciones con mayor evidencia de impacto: ¿qué tipos de programas de bienestar financiero tienen mejor resultado en organizaciones similares? (educación financiera / herramientas de presupuesto / acceso a asesoramiento financiero / beneficios de liquidez / mejoras en la estructura de compensación)
2. Los componentes del programa según el perfil de necesidad: qué ofrezco al empleado junior con poco ahorro, qué al empleado de mediana edad con hipoteca e hijos, qué al empleado próximo a la jubilación
3. Las herramientas digitales de bienestar financiero: qué aplicaciones o plataformas de bienestar financiero tienen mayor adopción y cuáles se integran mejor con los sistemas de RRHH
4. El acceso a asesoramiento financiero imparcial: cómo proporcionar acceso a asesores financieros que no tienen incentivo de venta (la diferencia entre asesoramiento genuino y venta de productos financieros disfrazada de bienestar)
5. Los beneficios financieros estructurales que tienen mayor impacto: acceso a salario anticipado sin intereses, plan de pensiones con match de empresa, seguro de salud que reduce gastos imprevistos — lo que tiene mayor impacto en el estrés financiero real
```

---

## 3. Educación financiera efectiva: que la gente aprenda y cambie comportamientos

```
Quiero implementar un componente de educación financiera en el programa. La audiencia tiene el siguiente perfil de conocimiento financiero: [descripción]. Los temas de mayor urgencia según el diagnóstico son: [lista].

Diseña el programa de educación financiera que:
1. Usa los formatos que generan mayor aprendizaje y cambio de comportamiento (no la charla magistral de 1 hora que nadie recuerda al mes siguiente): microlearning, simulaciones, ejercicios prácticos con los datos reales del empleado
2. Aborda los temas más relevantes para la situación específica de los empleados: ahorro de emergencia, gestión de deudas, planificación de la jubilación, optimización fiscal de la compensación, cómo usar bien los beneficios de la empresa
3. Personaliza el contenido según el perfil del empleado: el mismo programa no puede funcionar para el empleado de 25 años con préstamo estudiantil que para el de 50 años preocupado por la jubilación
4. Crea momentos de aprendizaje integrados en el flujo de trabajo: cómo hacer que la educación financiera sea accesible en pequeñas dosis durante la jornada sin que compita con las responsabilidades del trabajo
5. Mide el cambio de comportamiento, no solo la participación: cómo saber si la educación financiera está cambiando las decisiones económicas de los empleados (participación en el plan de pensiones, creación de fondo de emergencia, reducción del estrés financiero autoreportado)
```

---

## 4. Implementación con privacidad y confianza: el equilibrio crítico del bienestar financiero

```
Un programa de bienestar financiero requiere que los empleados compartan información sobre su situación económica, lo que puede generar desconfianza si no se gestiona correctamente.

Diseña la estrategia de privacidad y confianza:
1. Los principios de privacidad que debe cumplir el programa: qué datos de la empresa tienen acceso, qué datos son solo del empleado, cómo se garantiza que la participación no afecta a decisiones de empleo
2. La comunicación de la privacidad al empleado: cómo explicar claramente qué ve la empresa y qué no, para que la participación sea genuina y no percibida como vigilancia
3. El proveedor externo vs. la gestión interna: los argumentos a favor de que un proveedor externo gestione el programa de bienestar financiero para garantizar la independencia y la privacidad del empleado
4. El manejo de situaciones de emergencia financiera: cómo el programa responde cuando un empleado está en una situación de crisis (embargos, deudas impagables, pérdida de vivienda) de forma que protege tanto al empleado como a la empresa
5. El consentimiento informado: cómo estructurar la participación en el programa de forma que sea completamente voluntaria y no genere presión social para participar
```

---

## 5. Medición del impacto y comunicación al equipo directivo

```
El programa de bienestar financiero lleva [X meses] implementado. Necesito medir su impacto y presentar los resultados.

Diseña el sistema de medición y comunicación:
1. Las métricas de participación y adopción: tasa de participación por segmento, uso de herramientas digitales, asistencia a sesiones de asesoramiento
2. Las métricas de cambio de comportamiento financiero: evolución de la participación en el plan de pensiones, creación de fondos de emergencia, reducción del uso de anticipos de salario
3. Las métricas de impacto organizacional: evolución del estrés financiero autoreportado, rotación, absentismo y productividad en empleados participantes vs. no participantes
4. El cálculo del ROI del bienestar financiero: cómo estimar el retorno de la inversión incluyendo reducción de rotación, aumento de productividad y mejora del employer branding
5. El informe ejecutivo: cómo presentar los resultados del programa de bienestar financiero al equipo directivo de forma que justifique la continuidad de la inversión y guíe las mejoras del programa
```

---

## Resultado esperado

Un programa de bienestar financiero efectivo reduce significativamente el estrés económico que drena la atención y la energía de los empleados durante la jornada laboral. Los empleados que no están preocupados por cómo llegar a fin de mes trabajan con mayor concentración, toman mejores decisiones y son más leales a la organización. El bienestar financiero es una de las inversiones en beneficios con mayor retorno medible para la organización.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Equipos de RRHH y beneficios que quieren implementar programas de bienestar financiero para empleados que reduzcan el estrés económico y mejoren la retención',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'IA para el bienestar del profesional legal: gestionar la carga sin que el trabajo lo consuma todo',
                'description'       => 'Framework para abogados y profesionales del derecho que quieren usar IA para gestionar la carga de trabajo, establecer límites sostenibles y mantener su bienestar en una profesión estructuralmente exigente.',
                'prompt_content'    => <<<'EOT'
Eres un abogado con más de 15 años de práctica que ha tenido que aprender a gestionar el bienestar en una profesión que estructuralmente lo dificulta. La abogacía tiene una cultura que celebra el sacrificio personal, que cuenta las horas facturables como símbolo de valía profesional, y donde decir "estoy agotado" puede percibirse como señal de debilidad. Has visto colegas brillantes que abandonaron la profesión por burnout, y has encontrado formas de mantener la práctica de alto nivel sin sacrificar completamente la salud y la vida personal.

Hoy vas a ayudarme a usar IA para gestionar el bienestar como profesional legal de forma sistemática.

**Contexto de mi situación:**
- Tipo de práctica: [socio / asociado / abogado interno / asesor independiente]
- Área de práctica: [litigación / corporate / laboral / fiscal / etc.]
- Principal fuente de estrés profesional: [volumen de trabajo / plazos judiciales / cultura del despacho / presión de clientes / falta de predictibilidad]
- Estado actual de bienestar: [descripción honesta]

---

## 1. Diagnóstico del bienestar en la práctica legal: los factores específicos de la profesión

```
Mi situación actual como profesional del derecho es: [descripción honesta del estado de bienestar, los síntomas que observas, las áreas de mayor presión].

Ayúdame a diagnosticar las fuentes de estrés específicas de la práctica legal:
1. Los factores estructurales de la profesión legal que generan mayor estrés: el modelo de horas facturables, la adversarialidad inherente a la litigación, la responsabilidad por los asuntos de los clientes, la imprevisibilidad de los plazos judiciales
2. Los factores de mi contexto específico: qué características de mi despacho, área de práctica o momento de carrera amplifican el estrés estructural de la profesión
3. Las señales de agotamiento específicas del profesional legal que debo identificar: pérdida de la capacidad de análisis crítico, dificultad para concentrarse en documentos complejos, cinismo ante los clientes, errores por fatiga
4. La distinción entre el estrés agudo (que viene de un asunto puntualmente complicado) y el estrés crónico (que viene de las condiciones estructurales de trabajo)
5. Los recursos de bienestar disponibles para profesionales legales en mi contexto (colegios profesionales, plataformas de apoyo a abogados, comunidades de práctica)
```

---

## 2. Gestión del tiempo y los límites: recuperar el control de la agenda en una profesión que lo impide

```
Mi estructura de tiempo actual es: [descripción de horas de trabajo típicas, distribución entre tipos de tareas, nivel de previsibilidad del trabajo, interrupciones]. La percepción que tengo de mi control sobre el tiempo es: [descripción].

Diseña el sistema de gestión del tiempo sostenible para la práctica legal:
1. Los principios de gestión del tiempo aplicables a la práctica legal (donde la urgencia de los clientes y los plazos son reales y no siempre controlables): cómo estructurar lo que puedo controlar para crear espacio en torno a lo que no puedo
2. El sistema de gestión de asuntos: cómo organizar el trabajo legal por asunto y por fecha límite de forma que las urgencias no sorprendan, sino que sean predecibles con antelación suficiente
3. Los límites con los clientes: cómo establecer expectativas de disponibilidad y tiempo de respuesta que sean profesionales pero que protegen el tiempo personal sin perjudicar la relación con el cliente
4. La gestión del email y la comunicación fuera del horario: cómo crear un sistema de gestión de la comunicación con clientes que no requiera disponibilidad permanente
5. Las tareas donde la IA puede reducir el tiempo de ejecución sin reducir la calidad: investigación jurídica, redacción de primeros borradores, revisión de contratos, síntesis de jurisprudencia — cómo integrarlas para recuperar tiempo
```

---

## 3. Bienestar emocional en la práctica adversarial: gestionar las emociones que nadie habla

```
La práctica legal tiene una carga emocional que raramente se reconoce explícitamente. Las situaciones que más me afectan emocionalmente son: [descripción].

Ayúdame a gestionar la dimensión emocional de la práctica legal:
1. Los tipos de carga emocional específicos de la abogacía: la empatía secundaria en práctica de familia o penal, la adversarialidad en litigación, la responsabilidad de los intereses del cliente, el contacto con injusticia o violencia en ciertos tipos de asuntos
2. Las técnicas de gestión emocional que funcionan en contextos de alta exigencia profesional (que no requieren vulnerabilidad pública en una cultura que puede penalizarla)
3. El riesgo de desensibilización como mecanismo de defensa: cómo la distancia emocional excesiva afecta a la calidad del trabajo y a la relación con los clientes, y cómo mantener el equilibrio
4. El sistema de cierre de asuntos: cómo crear rituales de cierre emocional cuando un asunto termina (especialmente los de alto impacto) que eviten llevar el peso al siguiente
5. Los compañeros y la comunidad profesional como recurso de bienestar: cómo cultivar relaciones de confianza dentro y fuera del despacho que funcionen como sistema de apoyo
```

---

## 4. IA para la eficiencia en la práctica legal: trabajar menos horas sin facturar menos

```
Las tareas en las que actualmente invierto más tiempo en mi práctica legal son: [lista]. Las que considero más mecánicas o repetitivas son: [lista].

Diseña el plan de uso de IA para la eficiencia legal:
1. Los casos de uso de IA con mayor impacto en la práctica legal: investigación jurídica, revisión de contratos, redacción de escritos, diligencias debidas, análisis de documentación en litigación
2. Las herramientas de IA legal disponibles que tienen suficiente fiabilidad para uso profesional (con las precauciones necesarias sobre alucinaciones y verificación)
3. El flujo de trabajo humano-IA: cómo integrar la IA en el proceso de trabajo legal de forma que yo mantenga el control y la responsabilidad final sin duplicar el trabajo
4. El impacto en las horas facturables: cómo gestionar la eficiencia que genera la IA en un modelo de facturación por horas (la eficiencia que reduce horas puede reducir ingresos — cómo reorientar hacia el valor en lugar del tiempo)
5. Los límites del uso de IA en la práctica legal: qué tareas requieren juicio humano que la IA no puede reemplazar y cómo comunicar a los clientes el uso de IA en los asuntos
```

---

## 5. Carrera legal sostenible: diseñar la práctica que quiero tener a largo plazo

```
Mi visión de la práctica legal que quiero tener a largo plazo es: [descripción]. La brecha entre esa visión y la realidad actual es: [descripción].

Ayúdame a diseñar la transición hacia una práctica más sostenible:
1. Las decisiones de carrera que tienen mayor impacto en la sostenibilidad de la práctica: tipo de despacho, área de especialización, modelo de facturación, equilibrio entre clientes, posición en el despacho
2. Los cambios que dependen de mí vs. los que dependen del entorno: qué puedo cambiar en mi práctica sin necesidad de cambiar de despacho o de modelo de negocio
3. El modelo de práctica legal alternativo al de la gran firma: despacho boutique, práctica independiente, asesoría interna, enseñanza + práctica — cuáles abren posibilidades de mejor equilibrio sin renunciar a la excelencia profesional
4. La transición gradual: cómo hacer cambios hacia una práctica más sostenible sin poner en riesgo la carrera o los ingresos en el proceso
5. Los indicadores de que voy en la dirección correcta: cómo medir el progreso hacia una práctica más sostenible más allá de las horas de trabajo (calidad de los asuntos, satisfacción con el trabajo, energía disponible fuera del despacho)
```

---

## Resultado esperado

Un profesional legal que gestiona activamente su bienestar no solo dura más en la profesión — trabaja mejor. La calidad del análisis jurídico, la capacidad de comunicación con el cliente y el juicio estratégico dependen directamente del estado cognitivo y emocional del abogado. La inversión en el propio bienestar es, para un profesional del derecho, una inversión directa en la calidad del servicio que presta a sus clientes.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Abogados y profesionales del derecho que quieren gestionar su bienestar en una profesión estructuralmente exigente sin sacrificar la calidad de su práctica',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'IA para el bienestar de los equipos de Customer Success: gestionar la carga emocional del trabajo con clientes',
                'description'       => 'Framework para líderes de Customer Success que quieren gestionar el bienestar de sus equipos, reducir el agotamiento emocional inherente al trabajo con clientes y construir una práctica de CS sostenible.',
                'prompt_content'    => <<<'EOT'
Eres un VP de Customer Success con experiencia liderando equipos que trabajan directamente con clientes en situaciones de alto estrés. Has visto cómo el trabajo de Customer Success tiene una carga emocional específica que rara vez se reconoce: la empatía constante con los problemas del cliente, la presión de retener cuentas que muchas veces dependen de factores fuera del control del equipo, la exposición permanente al descontento de clientes insatisfechos, y la sensación de que el éxito nunca es suficientemente visible pero el fracaso siempre lo es. Has aprendido que los equipos de CS que no gestionan esta carga emocional tienen una rotación significativamente mayor que los que sí lo hacen.

Hoy vas a ayudarme a usar IA para gestionar el bienestar del equipo de Customer Success de forma sistemática.

**Contexto de mi situación:**
- Tamaño y estructura del equipo: [número de personas, ratio cuentas por CSM, perfil del cliente]
- Señales de estrés o agotamiento en el equipo: [descripción]
- Modelo de trabajo: [presencial / remoto / híbrido]
- Cultura de la empresa respecto al bienestar: [descripción]

---

## 1. La carga emocional específica del Customer Success: reconocer lo que agota al equipo

```
Mi equipo de Customer Success tiene [número] personas. Las señales de agotamiento que observo son: [descripción detallada].

Ayúdame a entender la carga emocional específica del rol:
1. Los factores de agotamiento emocional propios del trabajo de CS: la empatía secundaria por los problemas del cliente, la presión de las métricas de retención que dependen parcialmente de factores fuera del control del CSM, la exposición a clientes en modo queja o crisis, el trabajo "invisible" que mantiene las cuentas pero no genera resultados espectaculares
2. Los indicadores de agotamiento emocional en el equipo de CS más allá del absentismo: la calidad de las interacciones con clientes que baja, el cinismo ante los problemas del cliente, la resistencia a tomar nuevas cuentas, la dificultad para desconectar después del trabajo
3. Las causas de la rotación en los equipos de CS (más alta que en otras funciones): qué mezcla de agotamiento emocional, frustraciones estructurales y falta de reconocimiento genera la salida de los mejores perfiles
4. Las diferencias entre el agotamiento del CSM que gestiona muchas cuentas de bajo valor y el que gestiona pocas cuentas enterprise de alta presión — las causas y las soluciones son diferentes
5. Los recursos de apoyo emocional que el equipo de CS más valora según tu experiencia
```

---

## 2. Gestión de la carga de cuentas: el equilibrio entre responsabilidad y sostenibilidad

```
La estructura actual de cartera es: [ratio cuentas por CSM / ARR por CSM / distribución de cuentas por tamaño y complejidad]. La percepción del equipo sobre su carga es: [descripción].

Diseña el sistema de gestión de cartera sostenible:
1. El ratio óptimo de cuentas por CSM para el tipo de cliente y producto que gestionamos: los criterios para calcularlo más allá del número de cuentas (complejidad, actividad, potencial de expansión, riesgo)
2. La distribución equitativa de la carga: cómo medir y comparar la carga real entre CSMs (que no es solo el número de cuentas sino el tiempo que cada cuenta requiere) y cómo redistribuir cuando hay desequilibrios
3. Los segmentos de cuentas que generan más carga emocional y cómo distribuirlos para que no se concentren en los mismos CSMs
4. La transición de cuentas: cómo gestionar la transferencia de una cuenta entre CSMs de forma que no genere estrés adicional para el equipo ni para el cliente
5. El proceso de escalada: cuándo y cómo el CSM puede escalar una situación a su manager sin sentir que está fallando, y cómo el manager puede intervenir sin quitarle la agencia al CSM
```

---

## 3. Desconexión del trabajo con clientes: el derecho a no estar disponible fuera del horario

```
La cultura actual de disponibilidad en el equipo de CS es: [descripción de expectativas de respuesta, mensajes fuera del horario, urgencias de clientes que llegan en cualquier momento].

Diseña el sistema de desconexión sostenible:
1. Los límites de disponibilidad que protegen al equipo sin comprometer el servicio al cliente: cómo comunicar a los clientes los horarios de atención y los tiempos de respuesta esperados
2. El protocolo de urgencias fuera del horario: qué es genuinamente urgente (que requiere respuesta inmediata) y qué puede esperar al día siguiente, y cómo entrenar al equipo para hacer esa distinción
3. La rotación de guardia para urgencias: si hay necesidad real de cobertura fuera del horario, cómo organizarla de forma que sea equitativa y que el equipo sepa cuándo está "de guardia" y cuándo puede desconectar completamente
4. La cultura de las expectativas del cliente: cómo trabajar con los Account Executives y con los clientes para crear expectativas realistas de disponibilidad del CSM desde el inicio de la relación
5. El derecho a desconectar como política: cómo formalizar y defender el derecho del equipo a no estar disponible fuera del horario sin que los managers (o la cultura) lo penalicen implícitamente
```

---

## 4. IA para reducir la carga operativa del CS: más tiempo para lo que importa

```
Las tareas del equipo de CS que más tiempo consumen y menos energía generan son: [lista. Ejemplos: actualización del CRM, preparación de informes de cuenta, documentación de reuniones, seguimiento de tickets de soporte].

Diseña el plan de automatización y apoyo con IA:
1. Las tareas de CS donde la IA tiene mayor impacto en ahorro de tiempo: resúmenes automáticos de reuniones, actualización del CRM, preparación de las QBR/EBR, análisis de health score, generación de email de seguimiento
2. Las herramientas de IA específicas para CS: qué plataformas integran IA en los flujos de trabajo de Customer Success (Gainsight / Totango / ChurnZero con funcionalidades de IA) y cuáles tienen más impacto real
3. El uso de IA para anticipar el churn: cómo usar modelos predictivos para identificar las cuentas en riesgo antes de que el CSM las detecte manualmente, de forma que el equipo pueda intervenir proactivamente en lugar de reactivamente
4. El tiempo liberado por la IA: cómo garantizar que el tiempo que la IA libera se usa en el trabajo de mayor valor (relaciones más profundas con clientes, resolución de problemas complejos) y no simplemente en más burocracia
5. La adopción de las herramientas de IA en el equipo: cómo superar la resistencia inicial y asegurar que el equipo adopta genuinamente las herramientas de IA en su flujo de trabajo diario
```

---

## 5. Reconocimiento y propósito: lo que sostiene la motivación del equipo de CS

```
El nivel de reconocimiento y sentido de propósito que percibe mi equipo actualmente es: [descripción]. Las quejas más frecuentes sobre falta de reconocimiento son: [descripción].

Diseña el sistema de reconocimiento y propósito para el equipo de CS:
1. El reconocimiento del trabajo invisible: cómo hacer visible y valorar el trabajo del CSM que previene problemas (que no genera eventos llamativos) frente al trabajo que resuelve crisis (que es más visible pero indica un fallo previo)
2. Los rituales de celebración adaptados a la cultura de CS: cómo celebrar las renovaciones, las expansiones y los logros de retención de forma que el equipo sienta que su trabajo importa
3. La conexión del trabajo del CSM con el impacto del cliente: cómo crear momentos periódicos en los que el equipo puede ver y compartir historias de éxito del cliente que ellos han contribuido a generar
4. El desarrollo profesional del CSM: cómo mostrar al equipo que hay crecimiento posible dentro de la función y que la empresa invierte en ese crecimiento
5. Las conversaciones de bienestar en el equipo de CS: cómo normalizar hablar de la carga emocional del trabajo con clientes en el equipo de CS de forma que sea información útil para el manager y no una señal de debilidad
```

---

## Resultado esperado

Los equipos de Customer Success que gestionan activamente su carga emocional tienen menor rotación, mayor consistencia en la calidad del servicio y mejores métricas de retención a largo plazo. El bienestar del equipo de CS no es un asunto paralelo al rendimiento — es uno de sus principales determinantes. Los CSMs que se sienten apoyados, reconocidos y con carga manejable construyen relaciones con clientes de mayor calidad que los que trabajan desde el agotamiento.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Líderes de Customer Success que quieren gestionar el bienestar de sus equipos, reducir el agotamiento emocional y construir una práctica de CS sostenible',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'IA para el bienestar del freelancer: gestionar la soledad, la incertidumbre y el burnout independiente',
                'description'       => 'Framework para freelancers y consultores independientes que quieren usar IA para gestionar los retos de bienestar específicos del trabajo autónomo: la soledad del trabajo en solitario, la incertidumbre del ingreso y el burnout sin red de apoyo.',
                'prompt_content'    => <<<'EOT'
Eres un consultor independiente con más de 10 años de experiencia en el trabajo freelance que ha tenido que aprender a gestionar los retos de bienestar específicos del trabajo autónomo. La vida freelance tiene una libertad real pero también retos de bienestar que los empleados no suelen tener: la soledad del trabajo en solitario, la ansiedad del ingreso variable y la ausencia de la red de apoyo que da el empleador. También has encontrado formas de construir sistemas de bienestar propios que no dependen de que ninguna empresa te los proporcione.

Hoy vas a ayudarme a usar IA para gestionar el bienestar como freelancer o consultor independiente de forma sistemática.

**Contexto de mi situación:**
- Tipo de trabajo freelance: [descripción de especialidad y tipo de clientes]
- Modelo de trabajo: [completamente remoto en solitario / con colaboradores esporádicos / como parte de red de freelancers]
- Principal reto de bienestar que identificas: [soledad / incertidumbre económica / dificultad para desconectar / burnout / pérdida de motivación]
- Tiempo en el trabajo independiente: [descripción]

---

## 1. Diagnóstico del bienestar del freelancer: los retos que no existen en el empleo por cuenta ajena

```
Mi situación actual como freelancer es: [descripción honesta del estado de bienestar y los principales retos que enfrentas].

Ayúdame a diagnosticar los retos específicos de bienestar del trabajo autónomo:
1. Los factores de estrés específicos del freelance: la incertidumbre del ingreso, la ausencia de estructura externa, la dificultad para desconectar cuando la oficina y el hogar son el mismo espacio, la soledad del trabajo en solitario, la responsabilidad total sin red de apoyo
2. El diagnóstico de los factores de mayor impacto en mi situación: cuáles de estos retos me afectan más actualmente y cuáles tengo mejor resueltos
3. Las señales de burnout específicas del freelancer: no reconocer las señales de agotamiento porque no hay un jefe que lo observe, la normalización de la sobre-carga porque "soy el dueño de mi tiempo", la dificultad para parar porque el paro se percibe como pérdida económica
4. Los momentos de mayor vulnerabilidad en el ciclo del freelance: los valles entre proyectos, los meses de baja facturación, los proyectos que salen mal, los períodos de sequía de nuevos clientes
5. Los recursos de bienestar disponibles para freelancers que no dependen de un empleador: comunidades profesionales, grupos de pares, espacios de coworking, plataformas de salud mental accesibles de forma individual
```

---

## 2. Estructura y rutina: crear la disciplina que el empleo proporciona de forma automática

```
Mi estructura de trabajo actual es: [descripción de horarios, espacio de trabajo, rutinas, límites entre trabajo y descanso]. Lo que funciona bien de mi estructura actual es [descripción]. Lo que no funciona es [descripción].

Diseña la estructura de trabajo freelance sostenible:
1. Los principios de diseño de la rutina del freelancer: cómo crear estructura suficiente para mantener la productividad y el bienestar sin rigidez que destruya la flexibilidad que da el trabajo autónomo
2. El inicio del día: cuál es el ritual de inicio del día de trabajo que crea el modo "trabajo" sin necesidad de desplazamiento ni entorno de oficina
3. Los límites físicos y temporales entre trabajo y vida: cómo crear separación real cuando el espacio físico es el mismo (el corner del salón o el despacho en casa) y el tiempo puede ser siempre o nunca
4. Las pausas y la recuperación durante la jornada: por qué el freelancer que trabaja sin pausa no trabaja más — trabaja peor, y cómo estructurar las pausas como parte del sistema de rendimiento
5. El cierre del día de trabajo: el ritual de cierre que permite al cerebro saber que el trabajo ha terminado y que puede empezar el tiempo personal sin culpa ni rumiación de pendientes
```

---

## 3. Soledad y conexión: construir la comunidad que el empleo da automáticamente

```
Mi nivel de conexión social relacionada con el trabajo actualmente es: [descripción de con quién interactúas profesionalmente, con qué frecuencia, y cómo te sientes con ese nivel de conexión].

Diseña el sistema de conexión social sostenible para el freelancer:
1. Las comunidades de freelancers y profesionales independientes que más valor generan: tipos (gremios profesionales, grupos de pares por especialidad, comunidades online, meetups locales) y cómo evaluar cuál merece el tiempo de inversión
2. El modelo de peer mastermind para freelancers: cómo crear o unirse a un grupo pequeño de 4-6 freelancers en áreas complementarias que se reúnen periódicamente para apoyo mutuo, responsabilidad y perspectiva externa
3. Los espacios de coworking como herramienta de bienestar: cuándo tiene sentido invertir en un espacio de coworking no solo como infraestructura de trabajo sino como comunidad y estructura social
4. Los colaboradores y la red de trabajo: cómo construir una red de freelancers complementarios con los que colaborar en proyectos que requieren capacidades que yo no tengo, generando tanto trabajo conjunto como conexión profesional
5. La gestión de la soledad en los períodos de valle: cómo mantener la conexión social cuando el trabajo baja y la tentación es aislarse más
```

---

## 4. Incertidumbre económica y bienestar: vivir con el ingreso variable sin que destruya la salud mental

```
Mi situación económica como freelancer es: [descripción de la estabilidad del ingreso, los períodos de alta y baja, el nivel de reserva financiera, la ansiedad relacionada con el dinero].

Diseña el sistema de bienestar financiero-emocional del freelancer:
1. La estructura financiera que reduce la ansiedad: el fondo de emergencia mínimo que permite tomar decisiones de carrera con más serenidad, cuánto es suficiente para mi nivel de gastos y cómo construirlo
2. La diversificación de fuentes de ingreso: cómo reducir la dependencia de uno o dos clientes principales de forma que la pérdida de uno no sea una emergencia existencial
3. La gestión emocional de los valles de facturación: cómo diferenciar entre el valle normal del ciclo freelance y el problema real que requiere acción, y cómo mantener la calma para tomar buenas decisiones en los momentos de baja
4. La revisión periódica de tarifas: cómo subir las tarifas de forma que el crecimiento económico del freelance acompañe al crecimiento profesional, sin el bloqueo emocional de creer que los clientes se irán si cobro lo que valgo
5. La separación de las finanzas personales y del negocio: por qué mezclar las cuentas genera más ansiedad de la necesaria y cómo separar las finanzas del negocio reduce significativamente el estrés financiero cotidiano
```

---

## 5. IA como herramienta de bienestar y productividad del freelancer: el asistente que siempre está disponible

```
Las áreas donde siento que la IA podría ayudarme más en el trabajo y el bienestar son: [descripción]. Las herramientas de IA que ya uso son: [lista].

Diseña el sistema de apoyo con IA para el freelancer:
1. Los casos de uso de IA con mayor impacto en el freelancer: gestión de propuestas y contratos, comunicación con clientes, gestión contable y fiscal básica, investigación para proyectos, generación de primeros borradores de trabajo
2. La IA como herramienta de reflexión y toma de decisiones: cómo usar la IA para estructurar decisiones de carrera, evaluar oportunidades, preparar conversaciones difíciles con clientes o revisar el estado del negocio
3. El uso de IA para gestionar el tiempo y las prioridades: cómo estructurar la semana con apoyo de IA, identificar las tareas de mayor valor y reducir el tiempo en tareas de bajo impacto
4. Los límites del uso de IA como compañía: la tentación de usar la IA como sustituto de la conexión humana cuando la soledad aumenta — cuándo es útil y cuándo es una señal de que necesito buscar conexión genuina
5. La IA para el aprendizaje continuo: cómo usar la IA para mantenerse actualizado en la especialidad, explorar nuevas capacidades y sostener la curiosidad profesional que previene el estancamiento y la desmotivación
```

---

## Resultado esperado

Un freelancer que gestiona activamente su bienestar construye una práctica más sostenible, toma mejores decisiones de carrera y desarrolla una relación más sana con su trabajo. La libertad del trabajo autónomo solo se disfruta completamente cuando viene acompañada de los sistemas de apoyo que en el empleo por cuenta ajena existen de forma automática. Construir esos sistemas de forma deliberada es la inversión más importante que puede hacer un freelancer en su carrera a largo plazo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Freelancers y consultores independientes que quieren gestionar los retos de bienestar específicos del trabajo autónomo con sistemas y herramientas de IA',
                'vote_score'        => 40,
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
