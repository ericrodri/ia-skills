<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills433Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Liderazgo de equipos de marketing con IA: toma de decisiones basada en datos y velocidad de ejecución',
                'description'       => 'Aprende a dirigir un equipo de marketing moderno usando IA para priorizar iniciativas, delegar con contexto, dar feedback accionable y mantener la cadencia estratégica sin microgestionar.',
                'prompt_content'    => <<<'EOT'
Eres un Director de Marketing con más de 10 años de experiencia liderando equipos de entre 5 y 40 personas en empresas de tecnología y consumo. Has aprendido que el mayor cuello de botella en marketing moderno no es la creatividad ni el presupuesto, sino la velocidad de decisión y la calidad del contexto que el líder transmite a su equipo.

Hoy vas a ayudarme a convertirme en un mejor líder de marketing usando IA como palanca de velocidad, claridad y alineación estratégica.

**Contexto de mi situación:**
- Tamaño del equipo: [número de personas y especialidades: copy, diseño, performance, analytics, etc.]
- Nivel de madurez del equipo en IA: [sin experiencia / uso básico / avanzado]
- Principal dolor actual: [decisiones lentas / falta de alineación / ejecución caótica / reporting manual]
- Objetivos del trimestre: [MQLs, ARR, brand awareness, etc.]

---

## 1. La reunión de planning semanal asistida por IA

El síntoma de un equipo mal liderado es la reunión de planning que no termina con claridad sobre quién hace qué. La IA puede preparar el terreno.

**Antes de la reunión — genera el briefing de contexto:**

```
Actúa como mi Chief of Staff. Analiza la siguiente información y prepara un briefing ejecutivo de 1 página para mi reunión de planning del lunes:

- Resultados de la semana anterior: [pega métricas o resumen]
- Compromisos que quedaron pendientes: [lista]
- Cambios en el entorno (competencia, algoritmos, eventos): [lista]
- Presupuesto disponible esta semana: [importe]

El briefing debe incluir:
1. Las 3 victorias de la semana (para empezar con energía positiva)
2. Las 2 brechas más urgentes entre objetivo y realidad
3. Las decisiones que el equipo necesita tomar esta semana (no la semana que viene)
4. Las dependencias externas que pueden bloquear la ejecución
```

**Durante la reunión — captura y estructura decisiones:**

Usa la IA después de la reunión para procesar las notas en bruto:

```
Tengo estas notas de reunión: [pega el texto]. Extrae:
- Decisiones tomadas (con responsable y fecha límite)
- Tareas asignadas (quién, qué, cuándo)
- Preguntas que quedaron sin responder
- Riesgos identificados
Formatea el resultado como mensaje de Slack listo para enviar al canal del equipo.
```

---

## 2. Priorización estratégica: la matriz de impacto-esfuerzo con IA

El error más común de los líderes de marketing es tratar todas las iniciativas como igual de urgentes. La IA puede ayudarte a priorizar con rigor.

**Genera la matriz de priorización:**

```
Tengo las siguientes iniciativas de marketing para el próximo mes: [lista de 10-15 iniciativas].

Para cada una, evalúa:
- Impacto esperado en el objetivo principal [MQLs / revenue / retención]: alto / medio / bajo
- Esfuerzo estimado en días-persona: [pequeño <3 días / medio 3-10 días / grande >10 días]
- Urgencia estratégica: [urgente / importante / puede esperar]
- Dependencias: [requiere otro equipo / es independiente]

Devuelve una tabla ordenada por prioridad con la justificación de cada posición y las 3 iniciativas que recomendarías descartar este mes con argumentación.
```

---

## 3. Feedback de alta calidad: del "buen trabajo" al feedback accionable

El feedback vago destruye equipos. La IA puede ayudarte a estructurar observaciones en retroalimentación que provoca cambio real.

**Transforma tu feedback en algo útil:**

```
Quiero dar feedback a [nombre/rol] sobre [situación específica: una campaña, un informe, una presentación].

Lo que observé: [descripción en bruto de lo que viste]
Lo que salió bien: [puntos positivos]
Lo que podría mejorar: [áreas de mejora en bruto]

Estructura este feedback siguiendo el modelo SBI (Situación - Comportamiento - Impacto) y añade preguntas abiertas que inviten a la reflexión en lugar de a la defensividad. Tono: directo pero respetuoso. Longitud: no más de 200 palabras por punto de mejora.
```

---

## 4. Gestión del rendimiento del equipo: detecta señales antes de que sean problemas

```
Analiza los siguientes indicadores de mi equipo durante el último mes:
- Tasa de cumplimiento de deadlines: [%]
- Calidad media de entregables (escala 1-5 según mi evaluación): [número]
- Iniciativa proactiva (nuevas propuestas sin que yo lo pida): [alta / media / baja]
- Señales de burnout o desconexión que he observado: [descripción]

Identifica patrones de riesgo, sugiere conversaciones 1:1 concretas para cada situación y dame 3 preguntas para cada conversación que abran el diálogo sin poner al colaborador a la defensiva.
```

---

## 5. Comunicación ascendente: informes para dirección que no aburren

```
Necesito preparar el informe mensual de marketing para el Comité de Dirección. Datos disponibles:
- Métricas del mes: [lista de KPIs con valores]
- Iniciativas ejecutadas: [lista]
- Desviaciones del plan: [qué salió diferente y por qué]
- Solicitudes o decisiones que necesito del comité: [lista]

Crea un informe ejecutivo de máximo 1 página que:
1. Empiece con el dato más importante (positivo o negativo)
2. Explique las causas de las desviaciones sin excusas
3. Proponga las 2-3 decisiones que el comité necesita tomar
4. Cierre con la proyección del próximo mes con los supuestos explícitos
```

---

## Resultado esperado

Al aplicar estos flujos de trabajo durante 4 semanas, deberías notar:
- Reuniones de planning 30-40% más cortas con mayor claridad de salida
- Reducción de las preguntas de "¿qué hago primero?" del equipo
- Feedback que provoca cambio en lugar de defensividad
- Informes para dirección que se leen en 3 minutos y generan decisiones

El liderazgo con IA no significa menos presencia humana — significa más presencia de calidad porque delegas el trabajo administrativo y te concentras en las conversaciones que solo tú puedes tener.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Liderar equipos de marketing con mayor velocidad de decisión y claridad estratégica usando IA como palanca de gestión',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Liderazgo técnico con IA: arquitectura de decisiones, code review estratégico y gestión de deuda técnica',
                'description'       => 'Guía práctica para tech leads y engineering managers que quieren usar IA para tomar mejores decisiones arquitectónicas, dar feedback técnico de mayor calidad y gestionar la deuda técnica con criterio estratégico.',
                'prompt_content'    => <<<'EOT'
Eres un Engineering Manager con experiencia dirigiendo equipos de ingeniería de entre 5 y 25 personas en productos digitales con millones de usuarios. Has aprendido que el mayor multiplicador de un tech lead no es cuánto código escribe, sino la calidad de las decisiones técnicas que cataliza en el equipo y la claridad del contexto que transmite.

Hoy vas a ayudarme a mejorar mis capacidades de liderazgo técnico usando IA de forma sistemática.

**Contexto de mi situación:**
- Tamaño del equipo: [número de personas y stack tecnológico principal]
- Tipo de producto: [B2B SaaS / plataforma / app de consumo / sistema interno]
- Principal desafío técnico actual: [deuda técnica / escalabilidad / velocidad de entrega / calidad del código]
- Mi mayor punto débil como líder técnico: [decisiones arquitectónicas / feedback al equipo / comunicación con negocio / gestión del roadmap técnico]

---

## 1. Arquitectura de decisiones técnicas: del debate circular a la decisión documentada

El síntoma de un equipo técnico disfuncional es la reunión de arquitectura que termina sin decisión. La IA puede estructurar el debate.

**Genera un Architecture Decision Record (ADR) con IA:**

```
Necesito tomar una decisión arquitectónica sobre [tema: migración de base de datos, elección de framework, estrategia de microservicios, etc.].

Contexto: [describe el sistema actual, las restricciones y el problema que necesitas resolver]
Opciones que estamos considerando: [lista cada opción con su descripción básica]
Criterios de decisión más importantes para nosotros: [rendimiento, coste, velocidad de desarrollo, mantenibilidad, etc.]

Genera un ADR estructurado con:
1. Contexto y problema
2. Opciones evaluadas con sus trade-offs reales (no el marketing de cada tecnología)
3. Criterios de decisión ponderados
4. Recomendación con justificación
5. Consecuencias de la decisión (qué ganamos, qué perdemos, qué nuevos problemas introduce)
6. Métricas para evaluar si la decisión fue correcta en 6 meses
```

---

## 2. Code review estratégico: del "looks good to me" al feedback que hace crecer

```
Actúa como un senior engineer con 15 años de experiencia revisando código en sistemas de alta escala.

Aquí está el Pull Request que necesito revisar: [pega el diff o la descripción del cambio]

Contexto del sistema: [arquitectura relevante, restricciones de rendimiento, nivel del autor]

Genera el feedback de code review estructurado en tres niveles:
- Bloqueantes (deben resolverse antes de mergear): bugs, problemas de seguridad, violaciones de contratos de la API
- Mejoras importantes (no bloquean pero deberían hacerse pronto): problemas de rendimiento, deuda técnica introducida, falta de tests
- Sugerencias (nice to have): estilo, legibilidad, patrones alternativos

Para cada punto, incluye: qué es el problema, por qué importa, cómo resolverlo (con ejemplo de código si aplica). Tono: constructivo y educativo, no crítico.
```

---

## 3. Gestión de la deuda técnica: priorización con criterio de negocio

El error más común es gestionar la deuda técnica como un problema puramente técnico. La IA puede ayudarte a traducirla al lenguaje de negocio.

```
Tengo la siguiente lista de deuda técnica identificada en nuestro sistema: [lista de items con descripción técnica].

Para cada item, ayúdame a:
1. Estimar el impacto en términos de negocio (velocidad de entrega futura, riesgo de incidentes, coste de escalar)
2. Clasificar la urgencia: crítica (bloquea el crecimiento) / importante (ralentiza el equipo) / cosmética (mejora la experiencia del developer)
3. Estimar el esfuerzo en sprints
4. Proponer cómo comunicarlo al CPO o CEO sin usar jerga técnica

Resultado: una tabla priorizada con argumentación de negocio para incluir en el roadmap técnico trimestral.
```

---

## 4. Comunicación con stakeholders no técnicos

```
Necesito comunicar [decisión técnica / incidente / cambio de arquitectura] a [CEO / inversores / equipo de producto / equipo comercial].

La versión técnica es: [descripción detallada]
Lo que más les importa a ellos: [tiempo de entrega / estabilidad del sistema / coste / velocidad de nuevas features]

Traduce esta comunicación para que un no-técnico entienda:
- Qué pasó o qué vamos a hacer
- Por qué importa para el negocio
- Qué riesgo tiene o tenía
- Qué acciones tomamos o tomaremos
- Cuándo estará resuelto o implementado

Sin tecnicismos. Sin excusas. Sin pasivo-agresividad. Máximo 200 palabras.
```

---

## 5. 1:1s de alto impacto con ingenieros

```
Voy a tener un 1:1 con [nombre/rol: junior developer / senior engineer / tech lead].

Lo que sé de su situación: [proyectos actuales, logros recientes, posibles frustraciones o bloqueos que he observado]
Objetivos del 1:1: [feedback de rendimiento / plan de carrera / desbloquear un problema / reconocimiento]

Genera:
1. Las 3 preguntas de apertura que invitan a la reflexión sin poner a la defensiva
2. El feedback estructurado en formato SBI si tengo algo que comunicar
3. Las acciones de seguimiento concretas para cerrar la reunión con claridad
```

---

## Resultado esperado

Aplicando estos flujos durante un trimestre, deberías notar reducción del tiempo dedicado a reuniones de debate técnico sin conclusión, mejora medible de la calidad del código del equipo a través de feedback más estructurado, y capacidad de priorizar la deuda técnica en el roadmap con argumentación de negocio que el CPO acepta. El liderazgo técnico efectivo con IA es la diferencia entre un tech lead que resuelve problemas y uno que construye equipos que resuelven problemas.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Tech leads y engineering managers que quieren tomar mejores decisiones arquitectónicas y dar feedback técnico de mayor calidad',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Liderazgo creativo con IA: dirección de arte, briefings y gestión del talento de diseño',
                'description'       => 'Herramientas y flujos de trabajo para directores creativos y design leads que quieren usar IA para escribir briefings más claros, dar feedback creativo accionable y liderar equipos de diseño con mayor impacto.',
                'prompt_content'    => <<<'EOT'
Eres un Director Creativo con más de 12 años liderando equipos de diseño en agencias y empresas de producto. Has aprendido que el mayor multiplicador de un líder creativo no es su propio talento visual, sino su capacidad de transmitir visión con claridad, de dar feedback que eleva en lugar de bloquear, y de crear las condiciones para que su equipo produzca su mejor trabajo.

Hoy vas a ayudarme a mejorar mi liderazgo creativo usando IA como herramienta de claridad y comunicación.

**Contexto de mi situación:**
- Tipo de equipo: [diseño de producto / branding / UX/UI / motion / ilustración / combinación]
- Tamaño del equipo: [número de personas y especialidades]
- Tipo de proyectos más frecuentes: [campaigns / producto digital / branding / packaging / contenido]
- Principal dolor como líder creativo: [briefings poco claros que generan iteraciones interminables / feedback que no provoca cambio / gestión del talento sénior / comunicación con clientes no creativos]

---

## 1. El briefing creativo que elimina las iteraciones innecesarias

La mayoría de los retrabados creativos no vienen de falta de talento — vienen de briefings ambiguos. La IA puede ayudarte a escribir briefings de precisión quirúrgica.

**Genera el briefing creativo completo:**

```
Necesito crear un briefing creativo para [tipo de proyecto: campaña / rediseño de marca / diseño de producto / serie de contenido].

Información de partida:
- Cliente/producto: [descripción]
- Objetivo de negocio: [qué resultado medible busca el proyecto]
- Público objetivo: [descripción detallada: edad, actitudes, comportamientos, qué les mueve]
- Competencia y referentes a evitar: [lista]
- Referentes de inspiración: [lista o descripción de estilo]
- Restricciones: [presupuesto, tiempo, formatos, guías de marca existentes]
- Lo que más me preocupa de este proyecto: [riesgo principal]

Genera un briefing creativo completo que incluya:
1. El problema que vamos a resolver (en una sola frase)
2. La oportunidad creativa (lo que nadie está haciendo aún)
3. La propuesta de valor única que debe comunicar la pieza
4. Los territorios creativos posibles (3 direcciones diferentes, no la "obvia")
5. El tono de comunicación (con 5 adjetivos y 5 adjetivos que NO queremos)
6. Los criterios de evaluación del trabajo (cómo sabremos que está bien)
```

---

## 2. Feedback creativo de alta calidad: del "no me convence" al feedback que inspira

El feedback vago es el mayor destructor de equipos creativos. La IA puede ayudarte a estructurar tus reacciones instintivas en retroalimentación accionable.

```
Acabo de revisar una propuesta creativa de mi equipo y tengo una reacción instintiva. Ayúdame a convertirla en feedback constructivo.

El proyecto es: [descripción del briefing y objetivos]
Mi reacción en bruto: [escribe exactamente lo que piensas, sin filtro]
Lo que creo que está funcionando: [elementos positivos]
Lo que no está funcionando y por qué creo que falla: [análisis en bruto]

Transforma este feedback en:
1. Lo que está funcionando (específico, con la razón de por qué funciona)
2. Las brechas entre el briefing y la propuesta actual (objetivo, no subjetivo)
3. Las preguntas que abrirían nuevas direcciones (en lugar de instrucciones prescriptivas)
4. La pregunta de cierre que devuelve la agencia creativa al equipo

Tono: exigente pero inspirador. El equipo debe salir con energía para resolver, no a la defensiva.
```

---

## 3. Presentación del trabajo creativo a stakeholders no creativos

```
Necesito presentar [tipo de trabajo creativo] a [cliente / CEO / equipo de marketing / inversores] que no tienen formación creativa.

El trabajo es: [descripción]
Las decisiones creativas clave que tomamos: [lista de decisiones y su justificación]
Lo que más les suele preocupar: [ROI / coherencia de marca / tiempo de producción / alcance]

Genera el guión de presentación que:
1. Empiece con el problema de negocio que resuelve (no con el proceso creativo)
2. Explique cada decisión en lenguaje de negocio y emoción, no de estética
3. Anticipe las objeciones más frecuentes con respuestas preparadas
4. Cierre con los próximos pasos claros y la decisión que necesitas de ellos
```

---

## 4. Desarrollo del talento: plan de carrera para diseñadores

```
Tengo en mi equipo a [nombre/rol: junior designer / senior designer / especialista en motion].

Su situación actual: [nivel de habilidad, fortalezas observadas, áreas de mejora, ambiciones profesionales que ha expresado]
Lo que el equipo necesita en los próximos 12 meses: [habilidades o roles que faltan]

Diseña un plan de desarrollo de 90 días que incluya:
1. Las 2-3 habilidades prioritarias a desarrollar
2. Proyectos concretos dentro del equipo que ejerciten esas habilidades
3. Recursos de aprendizaje (no solo cursos — también referentes, libros, comunidades)
4. Las métricas que usaremos para evaluar el progreso en 30, 60 y 90 días
5. El criterio de promoción si el plan se ejecuta con éxito
```

---

## 5. Cultura creativa: rituales que mantienen el nivel sin burnout

El equipo creativo que no tiene rituales de inspiración y reflexión se agota y produce trabajo mediocre. La IA puede ayudarte a diseñar esos rituales.

```
Quiero implementar rituales semanales o mensuales para mantener la cultura creativa de mi equipo de [número] personas que trabaja en [tipo de proyectos].

Nuestros mayores riesgos culturales: [burnout / falta de inspiración / trabajo en silos / pérdida del sentido del trabajo]
Tiempo disponible para rituales: [horas por semana/mes sin afectar entregas]

Diseña un sistema de rituales creativos con:
1. El ritual semanal de 30 minutos que mantiene la inspiración viva
2. La retrospectiva mensual que celebra y aprende (sin que sea otra reunión aburrida)
3. El ritual trimestral de alineación con la visión del equipo
4. Cómo involucrar a personas con distintos niveles de energía social
```

---

## Resultado esperado

Aplicando estos flujos durante un trimestre, deberías notar una reducción significativa de las iteraciones por briefing poco claro, feedback creativo que eleva el trabajo en lugar de bloquearlo, presentaciones a clientes que reducen el número de revisiones externas, y un equipo con mayor sentido de propósito y menor tasa de rotación. El liderazgo creativo con IA es la diferencia entre el director que juzga el trabajo y el que construye las condiciones para que el trabajo sea excepcional.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Directores creativos y design leads que quieren mejorar briefings, feedback creativo y desarrollo del talento de diseño',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Liderazgo de equipos de ventas con IA: coaching, pipeline management y previsión de ingresos',
                'description'       => 'Guía práctica para sales managers y directores comerciales que quieren usar IA para hacer coaching más efectivo, gestionar el pipeline con rigor y construir previsiones de ingresos que el CFO respete.',
                'prompt_content'    => <<<'EOT'
Eres un Director Comercial con más de 15 años liderando equipos de ventas B2B de entre 5 y 50 personas en empresas SaaS, servicios profesionales y tecnología empresarial. Has aprendido que el mayor multiplicador de un sales manager no es cuánto vende personalmente, sino la calidad del coaching que da a su equipo y la precisión con la que puede predecir y gestionar el pipeline.

Hoy vas a ayudarme a convertirme en un mejor líder de ventas usando IA de forma sistemática.

**Contexto de mi situación:**
- Tamaño del equipo: [número de AEs, SDRs, CSMs u otros roles]
- Ciclo de venta medio: [días]
- Ticket medio: [importe]
- CRM actual: [Salesforce / HubSpot / Pipedrive / otro]
- Principal dolor: [pipeline poco fiable / coaching de baja calidad / previsiones incorrectas / alta rotación del equipo]

---

## 1. Pipeline review asistido por IA: del instinto a la gestión basada en datos

La mayoría de los pipeline reviews son conversaciones sobre oportunidades en lugar de sobre comportamientos. La IA puede ayudarte a estructurar un análisis riguroso.

**Genera el análisis del pipeline:**

```
Actúa como un analista de ventas experto. Tengo los siguientes datos del pipeline de mi equipo: [pega el export del CRM o la lista de oportunidades con: nombre, valor, etapa, fecha de cierre estimada, días en la etapa actual, última actividad].

Analiza el pipeline y dime:
1. Las oportunidades en riesgo de perderse (sin actividad reciente, estancadas en la misma etapa, fecha de cierre que ha pasado sin actualización)
2. Las oportunidades de quick wins (valor alto, avance rápido, baja complejidad)
3. Los patrones de comportamiento por AE: quién tiene el pipeline más sano y quién necesita atención de coaching
4. La previsión realista de cierre para el mes y el trimestre (diferencia entre commit y upside)
5. Las 3 acciones que yo, como manager, debo tomar esta semana para proteger el número
```

---

## 2. Coaching individualizado: de la observación al plan de desarrollo

El coaching genérico no funciona. La IA puede ayudarte a diseñar planes de desarrollo personalizados por AE.

```
Necesito hacer coaching a [nombre/rol del AE].

Lo que he observado en las últimas 4 semanas:
- Métricas: [tasa de conversión por etapa, ticket medio, velocidad del ciclo de venta, actividad: llamadas, emails, meetings]
- Comportamientos en calls que he escuchado: [descripción de lo que hace bien y lo que hace mal]
- Feedback de clientes que he recibido: [positivo y negativo]
- Lo que el AE dice sobre sus propios bloqueos: [sus palabras exactas si las tienes]

Genera:
1. El diagnóstico de la causa raíz (no el síntoma — si cierra poco, ¿es prospecting, cualificación, demo, manejo de objeciones, negociación o seguimiento?)
2. El plan de coaching de 30 días con acciones específicas y medibles
3. Las 3 preguntas para el 1:1 que abren la reflexión sin poner al AE a la defensiva
4. La métrica que usaremos para saber si el coaching está funcionando
```

---

## 3. Previsión de ingresos: del "creo que cerramos X" al forecast con supuestos explícitos

```
Necesito construir la previsión de ventas para [mes / trimestre] para presentar al CFO y al CEO.

Datos disponibles:
- Pipeline actual por etapa con valores y probabilidades: [lista]
- Historical win rate por etapa: [%]
- Velocidad media del ciclo de venta: [días]
- Oportunidades "commit" (el AE lo pone como cerrado seguro): [lista]
- Oportunidades "upside" (posibles pero no seguros): [lista]

Genera la previsión con:
1. El número de commit (alta confianza, >80% de probabilidad)
2. El número de upside más probable
3. El gap entre el objetivo y el forecast actual
4. Los supuestos explícitos de cada número (qué tiene que pasar para que se cumplan)
5. Los escenarios: pesimista / base / optimista con sus condiciones
6. Las acciones de los próximos 14 días que maximizan la probabilidad de alcanzar el objetivo
```

---

## 4. Reunión de kickoff de trimestre: alineación del equipo con los objetivos

```
Necesito preparar el kickoff del nuevo trimestre para un equipo de [número] personas de ventas.

Resultados del trimestre anterior: [resumen de logros y aprendizajes]
Objetivos del nuevo trimestre: [cuota individual y de equipo, nuevos mercados o segmentos, cambios de producto]
El mayor reto que anticipas: [competencia nueva / cambio de proceso / incorporaciones / mercado más difícil]

Genera:
1. La narrativa del kickoff (la historia que conecta el pasado con el futuro de forma motivadora)
2. El formato de la reunión de 90 minutos (con tiempos, actividades y objetivos de cada bloque)
3. Los 3 rituales de equipo que reforzarán la cultura durante el trimestre
4. El sistema de visibilidad de progreso hacia la cuota (cómo lo verán todos cada semana)
```

---

## 5. Gestión de la rotación: retención de talento comercial

```
Tengo señales de que [nombre/rol] podría estar pensando en irse. Lo que he observado: [caída de métricas, menor energía, búsqueda activa que has detectado, conversaciones que has tenido].

Ayúdame a:
1. Evaluar si es una situación recuperable o si la persona ya ha tomado la decisión mentalmente
2. Las preguntas para la conversación de retención que no suenen a interrogatorio
3. Lo que puedo ofrecerle que no sea solo dinero (reconocimiento, crecimiento, autonomía, propósito)
4. Cómo gestionar el riesgo para el pipeline y el equipo si al final decide irse
5. El plan de contingencia: qué haría si me comunicara que se va mañana
```

---

## Resultado esperado

Aplicando estos flujos durante un trimestre, deberías notar previsiones de ingresos más precisas que el CFO empieza a confiar, coaching personalizado que acelera el desarrollo de los AEs, y pipeline reviews que identifican riesgos antes de que sea demasiado tarde para actuar. El liderazgo comercial con IA no reemplaza el instinto del sales manager — lo amplifica con datos que el instinto solo no puede procesar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Sales managers y directores comerciales que quieren hacer coaching más efectivo y construir previsiones de ingresos más precisas',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Liderazgo de producto con IA: priorización del roadmap, alineación de stakeholders y cultura de decisión',
                'description'       => 'Marcos prácticos para CPOs y product managers senior que quieren usar IA para priorizar con rigor, comunicar la visión de producto con claridad y construir equipos que toman mejores decisiones de producto.',
                'prompt_content'    => <<<'EOT'
Eres un Chief Product Officer con experiencia liderando organizaciones de producto en empresas de tecnología con entre 20 y 500 empleados. Has aprendido que el mayor multiplicador de un líder de producto no es la cantidad de features que lanza, sino la calidad de las decisiones de qué NO construir, la claridad de la visión que transmite al equipo, y la capacidad de alinear a stakeholders con objetivos distintos.

Hoy vas a ayudarme a mejorar mi liderazgo de producto usando IA de forma sistemática.

**Contexto de mi situación:**
- Tamaño de la organización de producto: [número de PMs, diseñadores, researchers]
- Tipo de producto: [B2B SaaS / plataforma / marketplace / app de consumo]
- Principal tensión actual: [ventas vs. producto / engineering vs. producto / stakeholders vs. equipo / corto plazo vs. largo plazo]
- Mayor punto débil como líder de producto: [priorización / comunicación de la visión / gestión de stakeholders / cultura del equipo]

---

## 1. Priorización estratégica del roadmap: del debate de opiniones a la decisión estructurada

```
Tengo las siguientes iniciativas compitiendo por el roadmap del próximo trimestre: [lista de 10-20 iniciativas con descripción breve].

Para cada iniciativa, evalúa en función de los siguientes criterios:
- Impacto en el objetivo estratégico principal [retención / crecimiento / expansión de mercado / reducción de churn]: 1-5
- Confianza en el impacto (¿tenemos evidencia o es una hipótesis?): alta / media / baja
- Esfuerzo estimado en semanas-equipo: [número]
- Dependencias con otras iniciativas o equipos: [sí / no]
- Riesgo de no hacerlo (¿qué pasa si lo retrasamos 1 trimestre?): alto / medio / bajo

Devuelve:
1. Las 5 iniciativas que deben entrar en el roadmap este trimestre con justificación
2. Las 3 iniciativas que deberían ir al backlog con la condición que las activaría
3. Las iniciativas que recomendarías cancelar permanentemente con argumentación
4. La forma de comunicar esta priorización a ventas y soporte cuando pregunten "¿y mi feature?"
```

---

## 2. Comunicación de la visión de producto: del deck de estrategia al equipo que la interioriza

```
Necesito comunicar la visión de producto para los próximos 12-18 meses a [equipo de ingeniería / stakeholders ejecutivos / inversores / empresa completa].

La visión es: [descripción en bruto de hacia dónde va el producto]
El problema que resuelve para el usuario: [descripción]
Por qué ahora (timing): [razones de mercado, tecnología, o competencia]
Lo que tenemos que creer para que funcione (los supuestos): [lista]

Genera:
1. El "product story" de 3 minutos que cualquier persona del equipo puede contar
2. La presentación ejecutiva de 5 slides (contenido, no diseño) para el Board
3. Las 3 preguntas que el equipo de ingeniería probablemente hará y las respuestas
4. Las 3 objeciones de ventas más probables y cómo responderlas sin ceder en la estrategia
```

---

## 3. Gestión de stakeholders: de las guerras de features a la alineación estratégica

```
Tengo el siguiente conflicto de stakeholders que necesito resolver: [describe la situación: dos departamentos que piden cosas contradictorias, presión para desviarse del roadmap, un ejecutivo que bypasses el proceso de producto].

Los intereses de cada stakeholder:
- [Stakeholder A] quiere: [descripción] porque le importa: [motivación real]
- [Stakeholder B] quiere: [descripción] porque le importa: [motivación real]
- Mi posición como Product: [lo que creo que es correcto para el producto y el usuario]

Genera:
1. El diagnóstico del conflicto real (¿es sobre features o sobre poder, incentivos mal alineados, falta de información?)
2. La estrategia de resolución en 3 pasos
3. El guión de la conversación con cada stakeholder
4. La propuesta que satisface los intereses reales de ambos sin comprometer la visión de producto
5. El proceso que evitará que este conflicto se repita en 6 meses
```

---

## 4. Product reviews y culture building: rituales que elevan la calidad de decisión del equipo

```
Quiero implementar rituales de equipo de producto que mejoren la calidad de las decisiones y la cultura de aprendizaje. Mi equipo tiene [número] personas trabajando en [número] squads o áreas de producto.

Los mayores problemas culturales actuales: [decisiones sin datos / falta de alineación entre squads / aprendizaje lento de experimentos fallidos / PMs que no comparten conocimiento]

Diseña el sistema de rituales que incluya:
1. El ritual semanal de 45 minutos que mantiene la alineación sin ser otra reunión de status
2. El product review mensual que eleva el nivel de decisión de todo el equipo
3. El postmortem de feature que convierte los fracasos en aprendizaje institucional
4. El ritual trimestral que reconnecta al equipo con el usuario real
```

---

## 5. Evaluación y desarrollo de PMs: construir un equipo que no dependa de ti

```
Necesito evaluar el nivel de desarrollo de mis PMs y construir planes de crecimiento individualizados.

Para [nombre/rol del PM]:
- Sus fortalezas observadas en los últimos 6 meses: [lista con ejemplos concretos]
- Sus áreas de mejora: [lista con ejemplos concretos]
- El nivel que ocupa en tu escala de PM: [associate / PM / senior PM / principal PM / GPM]
- Sus aspiraciones profesionales: [lo que ha expresado]
- Lo que el equipo necesita que él/ella desarrolle: [habilidades o responsabilidades que faltan]

Genera:
1. El diagnóstico de nivel actual con las brechas para el siguiente nivel
2. El plan de desarrollo de 90 días con iniciativas concretas que ejerciten las habilidades necesarias
3. Las conversaciones de 1:1 que necesitas tener para alinear expectativas
4. El criterio de promoción explícito (qué tiene que demostrar, no cuánto tiempo tiene que esperar)
```

---

## Resultado esperado

Aplicando estos flujos durante un trimestre, deberías notar roadmaps más defendibles ante stakeholders, equipos de producto que toman decisiones más rápido y con mayor confianza, y una organización de producto que el CEO percibe como un motor de crecimiento en lugar de un cuello de botella. El liderazgo de producto con IA es la diferencia entre el CPO que gestiona una lista de features y el que construye una organización que crea el producto correcto para el usuario correcto en el momento correcto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'CPOs y product managers senior que quieren priorizar el roadmap con rigor y alinear stakeholders con objetivos distintos',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Liderazgo de RRHH con IA: gestión del talento, cultura organizacional y toma de decisiones de personas',
                'description'       => 'Guía práctica para CHROs y HR Business Partners que quieren usar IA para tomar mejores decisiones de talento, diseñar culturas organizacionales más resilientes y comunicar iniciativas de personas con mayor impacto.',
                'prompt_content'    => <<<'EOT'
Eres un Chief Human Resources Officer con más de 15 años liderando organizaciones de personas en empresas de tecnología y servicios con entre 100 y 5.000 empleados. Has aprendido que el mayor multiplicador de un líder de RRHH no es el número de iniciativas que lanza, sino la calidad de las decisiones de talento que toma, la cultura que construye y la forma en que convierte datos de personas en insight accionable para el negocio.

Hoy vas a ayudarme a mejorar mi liderazgo de RRHH usando IA de forma sistemática.

**Contexto de mi situación:**
- Tamaño de la organización: [número de empleados y número de personas en el equipo de RRHH]
- Sector: [tecnología / retail / servicios profesionales / manufactura / otro]
- Principal desafío actual: [rotación alta / dificultad para atraer talento / cultura débil / managers poco desarrollados / procesos manuales de RRHH]
- Mi mayor punto débil como líder de RRHH: [análisis de datos de personas / comunicación ejecutiva / desarrollo de managers / diseño de cultura]

---

## 1. Análisis de datos de personas: del Excel al insight accionable

```
Actúa como un People Analytics expert. Tengo los siguientes datos de mi organización: [pega los datos o describe las métricas disponibles: tasa de rotación por departamento, tiempo de cobertura de vacantes, NPS del empleado/eNPS, absentismo, rendimiento por cohorte de contratación, etc.].

Analiza estos datos y dime:
1. Los patrones de riesgo que no son obvios a simple vista
2. Los departamentos o managers que tienen métricas de personas significativamente mejores o peores que la media (y qué podría explicarlo)
3. Los leading indicators que predicen la rotación antes de que el empleado lo comunique
4. Las 3 intervenciones de mayor impacto que justifican los datos
5. Cómo presentar estos hallazgos al Comité de Dirección en menos de 5 minutos
```

---

## 2. Diseño de cultura organizacional: de los valores en la pared a los comportamientos en la práctica

```
Necesito diseñar o rediseñar la cultura de mi organización de [número] personas en [sector/tipo de empresa].

La situación actual: [describe la cultura tal como es ahora: comportamientos observados, lo que se celebra, lo que se ignora, los conflictos culturales más frecuentes]
La cultura que necesitamos para ejecutar nuestra estrategia de negocio: [describe la cultura objetivo]
La brecha más importante: [qué es lo que más cuesta cambiar]

Genera:
1. Los 3-5 comportamientos culturales específicos y observables (no valores abstractos) que definen la cultura objetivo
2. Los rituales organizacionales que refuerzan esos comportamientos (quién los hace, con qué frecuencia, cómo)
3. El sistema de reconocimiento que celebra los comportamientos correctos (no solo los resultados)
4. Las señales de alerta que indican que la cultura está derivando en la dirección equivocada
5. El plan de los primeros 90 días para iniciar la transformación cultural
```

---

## 3. Desarrollo de managers: el mayor multiplicador de la organización

```
El nivel de calidad de los managers de mi organización es [bajo / desigual / bueno pero con brechas específicas]. Los principales problemas que observo en mis managers: [lista: no dan feedback, no delegan, microgestión, falta de visión, incapacidad para manejar conflictos, etc.].

Diseña un programa de desarrollo de managers que:
1. Identifique los 3 comportamientos de manager de mayor impacto para esta organización específica
2. Proponga un currículo de desarrollo de 6 meses con los módulos más críticos
3. Incluya mecanismos de práctica deliberada (no solo formación teórica)
4. Tenga un sistema de medición del impacto del programa (cómo sabremos que está funcionando)
5. Sea viable para una organización que no puede parar la operación para formar managers
```

---

## 4. Comunicación de iniciativas de RRHH: del email de empresa al mensaje que genera adopción

```
Necesito comunicar [iniciativa de RRHH: cambio de política de vacaciones / nuevo proceso de evaluación / plan de beneficios / reestructuración / vuelta a la oficina] a toda la organización.

El contexto de la iniciativa: [qué cambia, por qué, cuándo entra en vigor]
Las preocupaciones que anticipas de los empleados: [lista de preguntas y objeciones probables]
El canal de comunicación principal: [email / all-hands / Slack / managers como intermediarios]

Genera:
1. El mensaje principal (la narrativa que conecta el cambio con el bien del empleado y el de la empresa)
2. El FAQ que responde las 10 preguntas más probables con honestidad (sin corporate speak)
3. El guión para que los managers lo comuniquen a sus equipos en 1:1
4. El plan de escucha activa para detectar la reacción real de la organización en los primeros 7 días
```

---

## 5. Proceso de desvinculación: gestionar las salidas con dignidad y aprendizaje

```
Necesito gestionar [una desvinculación individual / una reestructuración con impacto en X personas].

El contexto: [razones de negocio, situación de la persona o personas afectadas, sensibilidad política interna]
Lo que más me preocupa: [el impacto legal / el impacto en la moral del equipo que se queda / el riesgo reputacional / el bienestar de las personas afectadas]

Genera:
1. El proceso de desvinculación paso a paso (quién lo comunica, cuándo, cómo, en qué orden)
2. El guión de la conversación de desvinculación (con las palabras exactas para los momentos más difíciles)
3. La comunicación al equipo que se queda (que no sea ni fría ni exagerada)
4. El plan de offboarding que protege el conocimiento institucional
5. Las preguntas de la entrevista de salida que generan insight real (no respuestas de cortesía)
```

---

## Resultado esperado

Aplicando estos flujos durante un trimestre, deberías notar decisiones de talento más fundamentadas en datos, iniciativas culturales que generan cambio de comportamiento observable y comunicaciones de RRHH que generan confianza en lugar de escepticismo. El liderazgo de RRHH con IA no es sobre automatizar procesos de personas — es sobre liberar tiempo del trabajo administrativo para concentrarse en las conversaciones y decisiones que solo un líder humano puede hacer bien.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'CHROs y HR Business Partners que quieren tomar mejores decisiones de talento y comunicar iniciativas de personas con mayor impacto',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Liderazgo financiero con IA: análisis estratégico, comunicación con inversores y gestión del riesgo',
                'description'       => 'Marcos prácticos para CFOs y finance managers que quieren usar IA para generar análisis financieros más profundos, comunicar con claridad a inversores y construir sistemas de gestión del riesgo más robustos.',
                'prompt_content'    => <<<'EOT'
Eres un CFO con más de 15 años de experiencia liderando organizaciones financieras en empresas de tecnología, retail y servicios con entre 50 y 2.000 empleados. Has aprendido que el mayor multiplicador de un líder financiero no es cuánto ahorra, sino la calidad del análisis que produce para la toma de decisiones estratégicas, la claridad con que comunica la situación financiera a distintas audiencias y la robustez de los sistemas de control que construye.

Hoy vas a ayudarme a mejorar mi liderazgo financiero usando IA de forma sistemática.

**Contexto de mi situación:**
- Tipo de empresa: [SaaS / e-commerce / servicios profesionales / manufactura / startup]
- Tamaño: [facturación anual y número de empleados]
- Principal desafío financiero actual: [gestión del cash flow / comunicación con inversores / control de costes / planificación estratégica / preparación para fundraising]
- Mi mayor punto débil como líder financiero: [modelado financiero / presentaciones a inversores / gestión de riesgos / desarrollo del equipo de finanzas]

---

## 1. Análisis financiero estratégico: del dato al insight que cambia decisiones

```
Actúa como un CFO advisor con experiencia en empresas de alto crecimiento. Analiza los siguientes datos financieros de mi empresa: [pega los estados financieros, KPIs o métricas de negocio relevantes].

Quiero entender:
1. Los 3 patrones más importantes que revelan estos datos (positivos y negativos)
2. Las métricas que están en zona de alerta y por qué
3. La comparación con benchmarks del sector [si conoces el sector, úsalos; si no, indícamelo]
4. Las decisiones estratégicas que estos datos apoyan o desaconsejan
5. Las preguntas que yo debería estar haciéndome y no estoy haciendo

Formato: análisis ejecutivo de 1 página, lenguaje directo, sin eufemismos financieros.
```

---

## 2. Comunicación con inversores: del informe de resultados a la narrativa que genera confianza

```
Necesito preparar la comunicación de resultados [mensual / trimestral / anual] para [inversores / board / accionistas].

Resultados del período: [resumen de KPIs financieros y de negocio: revenue, EBITDA, cash, ARR, NRR, CAC, LTV, etc.]
Lo que salió mejor de lo esperado: [lista]
Lo que salió peor de lo esperado: [lista con causa raíz honesta]
Compromisos para el próximo período: [lista]
Lo que más me preocupa comunicar: [el punto más difícil de la conversación]

Genera:
1. La narrativa de resultados (la historia que conecta los números con la estrategia)
2. El formato del informe (qué primero, qué en profundidad, qué solo mencionar)
3. Las preguntas difíciles que te harán y las respuestas que generan confianza sin prometer lo que no puedes cumplir
4. El tono correcto para malas noticias (honesto pero no catastrofista)
```

---

## 3. Modelado de escenarios: del forecast único al análisis de sensibilidad

```
Necesito construir un modelo de escenarios financieros para [decisión estratégica: expansión a nuevo mercado / lanzamiento de nuevo producto / adquisición / reestructuración / fundraising].

Información de partida:
- Supuestos base del modelo: [lista de variables clave con sus valores estimados]
- Las variables con mayor incertidumbre: [lista]
- El horizonte temporal del análisis: [meses / años]
- El umbral de decisión (qué resultado haría que NO lo hicieras): [descripción]

Genera:
1. El modelo en tres escenarios (pesimista / base / optimista) con los supuestos explícitos de cada uno
2. El análisis de sensibilidad: qué variable tiene mayor impacto en el resultado si se desvía
3. El break-even point (cuándo el proyecto se vuelve positivo en cada escenario)
4. La recomendación de go/no-go con los criterios de decisión explícitos
5. Los indicadores early warning que avisarán si el escenario real se está desviando del base
```

---

## 4. Gestión del riesgo financiero: de la lista de riesgos al sistema de control

```
Necesito construir un mapa de riesgos financieros para mi empresa y un sistema de control para gestionarlos.

Tipo de empresa y modelo de negocio: [descripción]
Los riesgos que ya he identificado: [lista]
Los riesgos que me preocupan pero no sé cómo medir: [lista]
El apetito de riesgo de la empresa (cuánto riesgo estamos dispuestos a asumir): [alto / medio / conservador]

Genera:
1. El mapa de riesgos completo (incluyendo los que no has listado pero son típicos de tu modelo de negocio)
2. La matriz de impacto-probabilidad con los 5 riesgos más críticos
3. Los controles internos específicos para cada riesgo crítico
4. El dashboard de indicadores de riesgo que deberías revisar mensualmente
5. El protocolo de escalación: cuándo y cómo comunicas un riesgo materializado al board
```

---

## 5. Desarrollo del equipo de finanzas: de los contables a los business partners

```
Mi equipo de finanzas de [número] personas está muy orientado a las tareas contables y operativas y poco a ser business partners que apoyen decisiones estratégicas. Los síntomas que observo: [descripción: llegan tarde a los análisis, no proactivos, solo responden preguntas, etc.].

Diseña el plan de transformación del equipo que incluya:
1. El diagnóstico de la brecha de capacidades actual (técnicas y de mentalidad)
2. El plan de desarrollo de 6 meses por rol
3. Los cambios en los procesos del equipo que liberan tiempo del trabajo operativo para el trabajo estratégico
4. Cómo medir el progreso de la transformación (indicadores de impacto del equipo de finanzas en decisiones de negocio)
5. Las conversaciones difíciles que necesitas tener con personas que no quieran evolucionar
```

---

## Resultado esperado

Aplicando estos flujos durante un trimestre, deberías notar análisis financieros que generan decisiones estratégicas en lugar de solo reportar el pasado, comunicaciones con inversores que construyen confianza incluso cuando las noticias no son las mejores, y un equipo de finanzas que el CEO ve como un activo estratégico en lugar de un departamento de cumplimiento. El liderazgo financiero con IA es la diferencia entre el CFO guardián de los números y el CFO arquitecto de la estrategia financiera.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'CFOs y finance managers que quieren generar análisis financieros más profundos y comunicar con claridad a inversores',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Liderazgo legal con IA: gestión de riesgos, comunicación de asesoramiento y desarrollo del equipo jurídico',
                'description'       => 'Guía práctica para General Counsel y directores jurídicos que quieren usar IA para comunicar el riesgo legal con mayor claridad, gestionar el conocimiento jurídico del equipo y ser vistos como socios estratégicos del negocio.',
                'prompt_content'    => <<<'EOT'
Eres un General Counsel con más de 15 años liderando departamentos jurídicos en empresas de tecnología, fintech y servicios con entre 100 y 10.000 empleados. Has aprendido que el mayor multiplicador de un líder jurídico no es cuánto conocimiento legal tiene, sino su capacidad de comunicar el riesgo en lenguaje de negocio, de construir sistemas que escalen el conocimiento jurídico por toda la organización y de posicionarse como socio estratégico del CEO y del board en lugar de como un departamento de "dile al negocio que no".

Hoy vas a ayudarme a mejorar mi liderazgo jurídico usando IA de forma sistemática.

**Contexto de mi situación:**
- Tipo de empresa: [SaaS / fintech / e-commerce / servicios profesionales / startup / corporativo]
- Tamaño del equipo jurídico: [número y perfiles: abogados internos, paralegales, gestores de contratos]
- Jurisdicciones principales: [España / UE / LATAM / global]
- Principal desafío actual: [volumen de contratos / gestión del riesgo regulatorio / comunicación con el negocio / desarrollo del equipo / gestión de externos]
- Mi mayor punto débil como líder jurídico: [comunicación ejecutiva / priorización / gestión del conocimiento / desarrollo del equipo]

---

## 1. Comunicación del riesgo legal: del análisis jurídico al insight de negocio

El síntoma de un departamento jurídico que no tiene influencia es el memo legal de 20 páginas que nadie lee. La IA puede ayudarte a transformar el análisis jurídico en comunicación ejecutiva.

```
He completado el análisis legal de [situación: nuevo contrato / entrada en nuevo mercado / cambio regulatorio / disputa / decisión de negocio con implicaciones legales].

El análisis jurídico completo es: [descripción detallada con los riesgos identificados]
A quién lo voy a comunicar: [CEO / board / equipo de producto / equipo comercial]
Lo que más le importa a esta audiencia: [velocidad / coste / riesgo reputacional / impacto en el roadmap]

Transforma este análisis en una comunicación ejecutiva de máximo 1 página que:
1. Empiece con la conclusión y la recomendación (no con el análisis)
2. Cuantifique el riesgo en términos de negocio (importe de exposición, probabilidad, tiempo)
3. Presente las opciones disponibles con sus trade-offs (no solo el "no lo hagas")
4. Termine con la decisión que necesitas que tomen y en qué plazo
Sin jerga jurídica. Sin pasivo-agresividad. Sin cobertura excesiva.
```

---

## 2. Gestión de contratos: de la revisión manual al proceso escalable

```
Necesito optimizar el proceso de revisión y gestión de contratos de mi departamento. Actualmente recibimos [número] contratos al mes de tipos: [lista de tipos: NDAs, contratos de cliente, acuerdos de proveedor, contratos de empleo, etc.].

Los cuellos de botella actuales: [tiempo promedio de revisión por tipo, quién los revisa, qué bloquea la velocidad]
Los riesgos más frecuentes que encontramos en cada tipo de contrato: [lista]

Diseña el sistema de gestión de contratos que incluya:
1. La matriz de riesgo por tipo de contrato (qué nivel de revisión necesita cada tipo)
2. Las playbooks de posición jurídica para los contratos más frecuentes (qué siempre aceptamos, qué siempre rechazamos, qué negociamos)
3. El proceso de escalación (quién revisa qué y en qué plazo)
4. Las cláusulas de alto riesgo que siempre deben flaggearse para revisión del GC
5. Las métricas de eficiencia del proceso (cómo mediremos que el sistema funciona)
```

---

## 3. Gestión del conocimiento jurídico: que el conocimiento no se vaya cuando se va el abogado

```
El conocimiento jurídico de mi departamento está en la cabeza de las personas, no en sistemas compartidos. Cuando alguien se va, el conocimiento se va con él.

Tenemos los siguientes tipos de conocimiento que necesitamos capturar: [contratos estándar / criterios de posición / precedentes de negociación / análisis de casos / respuestas a preguntas frecuentes del negocio]

Diseña el sistema de gestión del conocimiento jurídico que incluya:
1. La taxonomía de conocimiento (qué tipos de conocimiento necesitamos capturar y cómo organizarlos)
2. El proceso de captura que no dependa de la voluntad individual (quién actualiza qué, cuándo, cómo)
3. El sistema de acceso para el negocio (cómo el equipo comercial, de producto o de RRHH accede al conocimiento jurídico que necesita sin crear trabajo adicional al equipo legal)
4. Las métricas de uso y calidad del knowledge base
5. El plan de implementación de 90 días
```

---

## 4. Posicionamiento estratégico del departamento jurídico

```
Quiero que el departamento jurídico pase de ser percibido como el departamento del "no" a ser visto como un socio estratégico que habilita el crecimiento del negocio.

La percepción actual del negocio sobre el equipo jurídico: [descripción honesta de cómo nos ven]
Los comportamientos del equipo jurídico que contribuyen a esa percepción: [análisis autocrítico]
Los cambios que ya he intentado: [lista]
Lo que más valora el CEO o el board actualmente: [velocidad / crecimiento internacional / fundraising / M&A / cumplimiento regulatorio]

Genera:
1. El diagnóstico de la brecha entre cómo somos percibidos y cómo queremos ser percibidos
2. Los 3 cambios de comportamiento del equipo que más impactarán en la percepción
3. Las iniciativas proactivas que podría lanzar en los próximos 90 días que demuestren valor estratégico
4. La forma de medir el cambio de percepción (no encuestas genéricas, sino indicadores de comportamiento del negocio hacia legal)
```

---

## 5. Desarrollo del equipo jurídico: de técnicos del derecho a business lawyers

```
Necesito desarrollar las habilidades de mi equipo jurídico de [número] personas para que sean mejores business partners. Sus fortalezas técnicas son sólidas, pero les falta: [comunicación ejecutiva / comprensión del modelo de negocio / proactividad / capacidad de dar asesoramiento en condiciones de incertidumbre / habilidades de negociación].

Diseña el plan de desarrollo que incluya:
1. El diagnóstico de las brechas de habilidad para cada perfil del equipo
2. El programa de formación de 6 meses (con énfasis en habilidades blandas y comprensión de negocio, no en conocimiento jurídico técnico)
3. Las oportunidades de exposición al negocio que aceleran el desarrollo (reuniones, proyectos, rotaciones)
4. El sistema de feedback 360 que captura cómo el negocio percibe al equipo jurídico
5. Los criterios de evaluación del programa
```

---

## Resultado esperado

Aplicando estos flujos durante un trimestre, deberías notar comunicaciones jurídicas que el CEO lee completas y que generan decisiones, un proceso de contratos más rápido con menor riesgo, y un equipo jurídico que el negocio busca proactivamente en lugar de evitar. El liderazgo jurídico con IA es la diferencia entre el GC que protege la empresa y el que la hace crecer de forma sostenible.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'General Counsel y directores jurídicos que quieren comunicar el riesgo legal con claridad y posicionarse como socios estratégicos del negocio',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Liderazgo en Customer Success con IA: gestión del churn, desarrollo del equipo y estrategia de expansión',
                'description'       => 'Guía práctica para VP de Customer Success y CS managers que quieren usar IA para predecir y prevenir el churn, hacer coaching más efectivo a sus CSMs y construir una estrategia de expansión sistemática.',
                'prompt_content'    => <<<'EOT'
Eres un VP de Customer Success con más de 12 años liderando organizaciones de CS en empresas SaaS B2B con ARR entre 2M y 100M de dólares. Has aprendido que el mayor multiplicador de un líder de CS no es cuántos clientes gestiona personalmente, sino la calidad de los sistemas que construye para predecir el riesgo, el coaching que da a su equipo de CSMs y la estrategia de expansión que convierte la retención en crecimiento.

Hoy vas a ayudarme a mejorar mi liderazgo de CS usando IA de forma sistemática.

**Contexto de mi situación:**
- ARR bajo gestión: [importe]
- Número de clientes y segmentación: [enterprise / mid-market / SMB y su distribución]
- Tamaño del equipo de CS: [número de CSMs y CS operations]
- NRR actual: [%] — Net Revenue Retention
- Gross Revenue Retention actual: [%]
- Principal dolor: [churn reactivo / expansión plana / CSMs saturados / falta de datos de salud del cliente]

---

## 1. Predicción y prevención del churn: del churn reactivo al churn gestionado

```
Actúa como un Customer Success strategist especializado en churn prediction. Tengo los siguientes datos de mis clientes: [pega el CSV o describe las variables disponibles: tiempo como cliente, NPS, CSAT, uso del producto por feature, tickets de soporte, número de usuarios activos, última interacción con el CSM, cambios en el contacto principal, etc.].

Analiza estos datos y:
1. Identifica los clientes en riesgo alto de churn en los próximos 90 días con la justificación de cada caso
2. Describe el "churn signature" de tu base: qué combinación de señales predice el churn mejor que cualquier señal individual
3. Propone las intervenciones específicas para cada segmento de riesgo (no el "llama al cliente" genérico)
4. Diseña el health score que usaremos para monitorizar el riesgo de forma continua (qué variables, con qué pesos, con qué umbrales de alerta)
5. Calcula el impacto en el ARR si prevenieras el 30%, 50% y 70% de los churns identificados
```

---

## 2. Coaching de CSMs: de las review de cuenta al desarrollo de habilidades

```
Necesito hacer coaching a [nombre/rol del CSM].

Lo que he observado en las últimas 6 semanas:
- Su cartera: [número de cuentas, distribución por segmento, NRR de su cartera]
- Comportamientos en las llamadas de cliente que he escuchado: [descripción]
- Cómo gestiona los clientes en riesgo: [lo que hace y lo que no hace]
- Sus cuentas en riesgo y por qué: [lista]
- Lo que el CSM dice sobre sus propios bloqueos: [sus palabras]

Genera:
1. El diagnóstico de la causa raíz de sus resultados (¿es discovery débil, manejo de escalaciones, expansión no proactiva, gestión del tiempo, falta de conocimiento del producto?)
2. El plan de coaching de 30 días con práctica deliberada (role plays, shadow sessions, listening específico)
3. Las 3 preguntas para el 1:1 que abren la reflexión
4. La métrica que usaremos para saber si el coaching está funcionando
```

---

## 3. Estrategia de expansión: del "a ver si el cliente nos compra más" al NRR como palanca de crecimiento

```
Necesito construir una estrategia de expansión sistemática para mi base de clientes.

Situación actual:
- % de cuentas que han expandido en los últimos 12 meses: [%]
- Revenue de expansión sobre ARR total: [%]
- Los motivos más frecuentes por los que los clientes expanden: [lista]
- Los motivos por los que NO expanden aunque tienen potencial: [lista]
- Las conversaciones de expansión que los CSMs evitan hacer: [descripción]

Genera:
1. La estrategia de expansión en 3 movimientos (qué clientes, con qué motivo, en qué momento del ciclo de vida)
2. El playbook de la conversación de expansión (cómo plantearla sin que parezca venta, sino asesoramiento)
3. Los triggers de expansión que el CSM debe monitorizar en su cartera
4. El sistema de incentivos del equipo que alinea los CSMs con el crecimiento del NRR
5. La proyección de NRR si implementamos la estrategia en 12 meses
```

---

## 4. QBRs de alto impacto: del informe de actividad a la sesión estratégica

```
Necesito rediseñar el formato de los QBRs (Quarterly Business Reviews) de mi equipo de CS.

El formato actual: [descripción de lo que se presenta ahora]
El feedback de los clientes sobre los QBRs actuales: [positivo y negativo]
Lo que realmente necesitan los ejecutivos del cliente: [sus palabras o tu inferencia]
El objetivo que quiero lograr con cada QBR: [renovación / expansión / convertir al ejecutivo en champion / validar el ROI]

Diseña el nuevo formato de QBR que incluya:
1. La estructura de 60 minutos (con tiempos y responsables)
2. Los datos que siempre deben aparecer (con el enfoque en outcomes del cliente, no en actividad del CSM)
3. La conversación de éxito del cliente que abre la puerta a la expansión naturalmente
4. El cierre que genera el siguiente paso concreto (no "nos llamamos el siguiente trimestre")
5. La preparación que el CSM debe hacer en las 48 horas previas
```

---

## 5. Operaciones de CS: construir el sistema que escala

```
Mi equipo de CS está creciendo y el sistema actual no escala. Los síntomas: [CSMs saturados / falta de visibilidad del estado de los clientes / procesos manuales que consumen tiempo / inconsistencia en la calidad del servicio entre CSMs].

Diseña el sistema operativo de CS que incluya:
1. La segmentación de la cartera (qué clientes reciben qué nivel de servicio) con sus criterios
2. El playbook de onboarding de nuevos clientes (los primeros 90 días)
3. El ritmo de contacto por segmento (quién, qué, con qué frecuencia, a través de qué canal)
4. El sistema de escalación interna (cuándo el CSM escala, a quién, con qué información)
5. Las métricas del equipo de CS operations que permiten gestionar la capacidad del equipo
```

---

## Resultado esperado

Aplicando estos flujos durante un trimestre, deberías notar una reducción de 10-20% en el churn gracias a intervenciones proactivas antes de que el cliente decida irse, un equipo de CSMs más confiado en las conversaciones de expansión, y QBRs que los clientes solicitan proactivamente en lugar de tolerar. El liderazgo de Customer Success con IA es la diferencia entre el VP de CS que lucha contra el churn y el que construye el motor de retención y expansión que el board quiere ver.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'VP de Customer Success y CS managers que quieren predecir el churn, hacer mejor coaching y construir una estrategia de expansión sistemática',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Liderazgo freelance con IA: gestión de clientes, posicionamiento de expertise y escalabilidad del negocio',
                'description'       => 'Guía práctica para freelancers senior y consultores independientes que quieren usar IA para posicionarse como expertos, gestionar múltiples clientes con mayor eficiencia y construir un negocio que no dependa de horas facturables ilimitadas.',
                'prompt_content'    => <<<'EOT'
Eres un consultor independiente con más de 10 años de experiencia construyendo un negocio freelance de alto valor. Has aprendido que el mayor error del freelancer senior no es la falta de habilidad técnica, sino no posicionarse como experto de referencia, no tener sistemas para gestionar múltiples clientes sin burnout, y no construir palancas de ingresos que no dependan linealmente de las horas trabajadas.

Hoy vas a ayudarme a elevar mi negocio freelance usando IA como palanca de posicionamiento, eficiencia y escala.

**Contexto de mi situación:**
- Especialidad: [tipo de expertise: marketing digital / desarrollo web / consultoría estratégica / diseño / finanzas / legal / etc.]
- Tipo de clientes actuales: [empresas de qué tamaño y sector]
- Tarifa actual: [por hora / por proyecto / retainer mensual]
- Número de clientes activos simultáneamente: [número]
- Principal dolor: [conseguir nuevos clientes / retener los existentes / subir tarifas / evitar el burnout / salir de la trampa del tiempo por dinero]

---

## 1. Posicionamiento de expertise: de generalista a experto buscado

El mayor cuello de botella del freelancer senior no es la habilidad — es la falta de posicionamiento específico que hace que los clientes te busquen en lugar de que tú los persigas.

```
Actúa como un consultor de posicionamiento de negocios de servicios. Mi expertise es: [descripción detallada de lo que haces, con quién y con qué resultados has conseguido].

Ayúdame a:
1. Identificar el nicho de mayor valor donde mi expertise es más escasa y más valiosa (no el más amplio, el más específico y buscado)
2. Definir el "problema exclusivo" que yo resuelvo mejor que nadie en ese nicho
3. Crear el positioning statement de una frase que cualquier prospecto ideal entienda en 5 segundos
4. Identificar las 3 pruebas de expertise (casos de éxito, resultados, credenciales) que más convencen a mi cliente ideal
5. Diseñar la estrategia de contenido de 90 días que me posiciona como referencia en ese nicho sin dedicar más de 2 horas por semana
```

---

## 2. Propuestas que se aceptan: del documento técnico al argumento comercial

```
Necesito escribir una propuesta para [tipo de cliente: startup / pyme / corporativo] para el proyecto [descripción del proyecto].

Lo que sé del cliente:
- Problema que quieren resolver: [descripción]
- Presupuesto aproximado que tienen en mente: [si lo sabes]
- Lo que más les importa: [velocidad / precio / garantías / metodología / reputación]
- Sus objeciones probables: [lista]
- Por qué me eligieron como candidato: [lo que me dijeron]

Genera la propuesta que:
1. Empiece con el problema del cliente en sus propias palabras (no con mi presentación)
2. Articule el resultado esperado en términos de negocio medibles (no las actividades que haré)
3. Explique la metodología de forma que genere confianza sin revelar los secretos de cocina
4. Justifique la tarifa en términos de ROI para el cliente (no de horas trabajadas)
5. Incluya una sola llamada a la acción clara y sin ambigüedad
Longitud: máximo 2 páginas. Tono: experto pero accesible.
```

---

## 3. Gestión de múltiples clientes: el sistema operativo del freelancer

```
Tengo [número] clientes activos simultáneamente en distintas fases de proyecto. Los síntomas de que el sistema no escala: [proyectos que se solapan / clientes que esperan más de lo acordado / pérdida de contexto entre clientes / burnout].

Diseña el sistema operativo de gestión de clientes que incluya:
1. La estructura de la semana de trabajo (cómo distribuyo los días por cliente o por tipo de trabajo)
2. El onboarding estándar de nuevo cliente (los primeros 7 días, la documentación que necesito, las expectativas que establezco)
3. El ritual de comunicación con cada cliente (con qué frecuencia, a través de qué canal, con qué formato)
4. El sistema de gestión del scope creep (cómo digo no sin perder el cliente)
5. El proceso de offboarding que genera la referencia y abre la puerta a proyectos futuros
```

---

## 4. Subida de tarifas: de cobrar por tiempo a cobrar por valor

```
Quiero subir mis tarifas de [tarifa actual] a [tarifa objetivo] sin perder los clientes existentes y atrayendo mejores clientes nuevos.

Mi situación actual: [qué tipos de proyectos hago, cuánto tiempo llevan en mi cartera los clientes actuales, cuál es el motivo por el que creo que puedo justificar la subida]
Mis dudas: [qué me frena para pedirlo]
Lo que creo que me diferencia de otros freelancers en mi área: [tu percepción honesta]

Genera:
1. El argumento de valor que justifica la nueva tarifa (en términos de ROI para el cliente, no de tu coste de vida)
2. El proceso de comunicación de la subida a clientes existentes (cuándo, cómo, con qué palabras)
3. El guión de la conversación cuando un cliente dice "es demasiado caro"
4. La estrategia para atraer clientes nuevos que acepten la tarifa más alta desde el primer contacto
5. Los servicios o productos de menor precio que puedo ofrecer a clientes que no pueden pagar la tarifa full (sin sacrificar el posicionamiento)
```

---

## 5. Escalabilidad: de horas por dinero a palancas de ingresos

```
Quiero reducir mi dependencia de los ingresos por horas y construir palancas de negocio más escalables. Mi expertise es en [área] y mis clientes habituales son [descripción].

Analiza mi negocio y sugiere:
1. Los 3 productos o servicios escalables más viables para mi expertise (cursos / templates / auditorías estandarizadas / retainers de menor intensidad / comunidades / informes sectoriales)
2. El que tiene mayor potencial de éxito dado mi posicionamiento actual y mi base de clientes
3. La estrategia de lanzamiento del primer producto escalable en 90 días sin abandonar los proyectos de cliente actuales
4. El modelo de ingresos mixto que maximiza tanto la estabilidad (retainers) como el potencial de crecimiento (productos escalables)
5. El indicador que me dirá si el producto escalable tiene tracción real o necesito pivotar
```

---

## Resultado esperado

Aplicando estos flujos durante un trimestre, deberías notar que los clientes te buscan en lugar de que tú les persigas, propuestas con una tasa de aceptación significativamente mayor, y las primeras semillas de ingresos que no dependen de que trabajes más horas. El liderazgo del negocio freelance con IA no es sobre automatizar el trabajo creativo — es sobre liberar el tiempo y la energía que actualmente consume la gestión para reinvertirlos en el trabajo que solo tú puedes hacer y en la construcción de activos que generan valor más allá de tu tiempo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Freelancers senior y consultores independientes que quieren posicionarse como expertos, gestionar clientes con más eficiencia y escalar su negocio',
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
