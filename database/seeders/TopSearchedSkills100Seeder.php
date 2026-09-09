<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills100Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Liderazgo del equipo de marketing',
                'description'      => 'Cómo pasar de contributor individual a jefe de marketing: gestión de personas, prioridades y reporting al CEO.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach ejecutivo especializado en líderes de marketing. Voy a hacer la transición de colaborador individual (IC) a responsable de un equipo de marketing de entre 3 y 8 personas. Ayúdame a construir el manual de operaciones que voy a necesitar en mis primeros 90 días.

## Contexto que necesito que tengas en cuenta

- Vengo de ejecutar yo mismo las campañas, el contenido y el análisis. Ahora tengo que delegar todo eso.
- Mi equipo tiene gente más junior y uno o dos perfiles con más experiencia que yo en áreas concretas (ej. SEO, paid media).
- Tengo que reportar resultados al CEO cada dos semanas y al board cada trimestre.
- El mayor riesgo es que siga haciendo el trabajo de IC y no gestione de verdad.

## Lo que necesito

### 1. Los primeros 30 días: escuchar antes de cambiar

Diseña un plan de "listening tour" para mi primer mes:
- Qué preguntas hacer a cada miembro del equipo en la primera 1:1
- Qué métricas y procesos revisar antes de tocar nada
- Cómo identificar los quick wins sin romper lo que funciona

### 2. Estructura de 1:1s semanales

Dame un template de agenda para 1:1s de 30 minutos con mi equipo directo:

| Bloque | Tiempo | Objetivo |
|--------|--------|----------|
| Check personal | 5 min | Confianza y contexto |
| Estado de proyectos | 10 min | Bloqueos y prioridades |
| Desarrollo profesional | 10 min | Crecimiento y feedback |
| Próximos pasos | 5 min | Compromisos claros |

Incluye las 5 preguntas que más abren conversaciones reales.

### 3. Cómo delegar sin perder el control

Explica el framework de delegación por niveles de autonomía:
- **Nivel 1 – Hacer y reportar**: el IC ejecuta y me informa después
- **Nivel 2 – Hacer y consultar dudas**: ejecuta pero me pregunta si hay bloqueante
- **Nivel 3 – Proponer y yo apruebo**: me trae opciones, yo decido
- **Nivel 4 – Decidir y yo superviso**: decide solo, yo reviso al final

Dame ejemplos concretos de tareas de marketing en cada nivel.

### 4. Mi dashboard de gestión

Qué métricas debo revisar yo como manager (no como IC):
- Métricas de equipo: capacidad, velocidad, bloqueos
- Métricas de negocio: pipeline generado, CAC, conversión por canal
- Métricas de personas: eNPS, retención, desarrollo

Sugiere una cadencia de revisión semanal / mensual / trimestral.

### 5. Reporting al CEO

Dame una estructura para el update bisemanal de 15 minutos con el CEO:
1. Tres números clave (semáforo: verde/amarillo/rojo)
2. Lo que está funcionando y por qué
3. Lo que no está funcionando y el plan de acción
4. Una decisión o recurso que necesito de él

### 6. Los errores más comunes en la transición IC → manager

Lista los 5 errores que cometen casi todos los nuevos managers de marketing y cómo evitarlos. Sé directo y específico, no genérico.

### 7. Mi propio desarrollo como líder

¿Qué habilidades debo priorizar en mis primeros 6 meses como manager que NO necesitaba como IC? ¿Cómo las desarrollo sin un programa formal de liderazgo?

Responde en español, con ejemplos del mundo del marketing digital. Cuando des frameworks, ponlos en tablas o listas numeradas para que pueda usarlos directamente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Guía completa para la transición de IC a manager de marketing: 1:1s, delegación y reporting al CEO.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Engineering management: de senior dev a manager',
                'description'      => 'La transición de senior developer a engineering manager: 1:1s, gestión del rendimiento y cómo dejar de programar sin sentirte inútil.',
                'prompt_content'   => <<<'PROMPT'
Eres un engineering manager con 10 años de experiencia que también fue senior developer. Acabo de aceptar mi primer rol como engineering manager de un equipo de 5 ingenieros. Tengo mucho miedo de perder mis habilidades técnicas y de no saber gestionar personas. Ayúdame a hacer esta transición con un plan concreto.

## Mi situación actual

- Llevo 6 años como software engineer (últimos 2 como senior).
- Mi equipo tiene 5 personas: 2 juniors, 2 mids y 1 senior con más experiencia que yo en backend.
- La empresa espera que yo siga contribuyendo técnicamente "algo", pero no está definido cuánto.
- Mi mayor miedo: convertirme en un manager que no entiende el trabajo técnico y que el equipo pierda el respeto por mí.

## Lo que necesito

### 1. Redefinir qué significa el éxito para mí

Explica el cambio de mentalidad fundamental: el éxito ya no es "yo escribo código excelente", sino "mi equipo entrega código excelente". Dame ejemplos concretos de cómo se ve ese cambio en el día a día.

### 2. Cuánto código debo seguir escribiendo

Dame un marco para decidir cuánto tiempo técnico mantener:

| Fase | % tiempo técnico | Tipo de contribución técnica |
|------|-----------------|------------------------------|
| Primeros 3 meses | ~20% | Reviews de código, arquitectura, deuda técnica |
| 3–12 meses | ~10–15% | Solo proyectos que nadie más puede hacer |
| +12 meses | ~5–10% | Decisiones técnicas estratégicas |

¿Qué pasa si la empresa me pide más del 30%? ¿Cómo lo negocio?

### 3. Mis primeras 1:1s con cada ingeniero

Dame un template de primera 1:1 para conocer a cada miembro del equipo:
- Preguntas sobre su situación actual (satisfacción, bloqueos, proyectos favoritos)
- Preguntas sobre sus ambiciones (¿quieren ser IC senior o también les interesa management?)
- Preguntas sobre cómo prefieren que les gestione (micromanagement vs. autonomía total)

### 4. Gestión del rendimiento sin ser el jefe malo

Explica cómo estructuro el feedback continuo para que las revisiones de rendimiento no sean sorpresa para nadie:
- Feedback semanal en 1:1s (qué decir, cómo decirlo)
- La conversación cuando alguien está por debajo del nivel esperado
- Cómo gestionar al senior con más experiencia que yo sin que sea raro

### 5. Gestión técnica sin hacer el trabajo

¿Cómo mantengo la calidad técnica del equipo sin escribir yo el código?
- Code reviews: cuáles hago yo, cuáles delego
- Decisiones de arquitectura: cómo las facilito sin imponerlas
- Deuda técnica: cómo la priorizo y la defiendo ante producto

### 6. Mi relación con mi manager

Dame una estructura para mis propias 1:1s con mi director de ingeniería:
- Qué reportar (no solo estado de proyectos, sino también salud del equipo)
- Cómo pedir recursos o headcount con datos
- Cómo gestionar las expectativas cuando el equipo va lento

### 7. Mantener mis habilidades técnicas

Plan realista para no quedarme obsoleto técnicamente sin que eso sea mi trabajo principal. ¿Cuántas horas a la semana? ¿En qué me enfoco? ¿Qué dejo de aprender?

Responde en español con ejemplos reales de equipos de producto o startup. Sé directo sobre los errores más comunes y cómo evitarlos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Manual de supervivencia para el primer año como engineering manager viniendo de senior developer.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Design leadership: de diseñador a head of design',
                'description'      => 'De diseñador individual a head of design: cómo construir y gestionar un equipo de diseño de cero.',
                'prompt_content'   => <<<'PROMPT'
Eres un design leader con experiencia construyendo equipos de diseño en startups y empresas de producto. Me acaban de nombrar head of design por primera vez. Tengo que construir el equipo y la función de diseño prácticamente desde cero. Ayúdame con un plan de acción detallado.

## Mi contexto

- Soy diseñadora de producto con 7 años de experiencia. He trabajado siempre como IC.
- La empresa tiene 80 personas, es una SaaS B2B con un producto de gestión.
- Actualmente solo hay otro diseñador en el equipo (junior). Me han dicho que puedo contratar 2 personas más.
- Producto y Engineering dominan las decisiones del producto. Diseño históricamente ha llegado tarde.
- Mi objetivo: hacer que diseño sea un socio estratégico, no solo "los que hacen las pantallas bonitas".

## Lo que necesito

### 1. La hoja de ruta del primer trimestre

Divide mis primeros 90 días en tres fases:

| Fase | Semanas | Foco principal | Entregables |
|------|---------|----------------|-------------|
| Escuchar y diagnosticar | 1–4 | Entender el estado actual | Audit de diseño + mapa de stakeholders |
| Estabilizar y estructurar | 5–8 | Procesos básicos y primeras victorias | Design system inicial + proceso de handoff |
| Escalar y liderar | 9–12 | Contratación y posicionamiento estratégico | Plan de equipo + presentación al CEO |

### 2. Qué contratar primero

Tengo presupuesto para 2 contrataciones. Dame el razonamiento para decidir entre:
- UX researcher vs. product designer senior
- Motion designer vs. design systems engineer
- Diseñador generalista vs. especialista en UX writing

¿Cómo tomo esta decisión según el estado del producto y la empresa?

### 3. Design system desde cero con recursos limitados

Estrategia pragmática para construir un design system cuando solo somos 2 diseñadores:
- Qué construir primero (tokens, componentes base, documentación)
- Cómo implicar a Engineering para que lo adopten de verdad
- Cómo evitar que el design system se convierta en un proyecto interminable que nunca se usa

### 4. Elevar el rol de diseño en la empresa

¿Cómo consigo que diseño esté en las conversaciones de estrategia de producto desde el principio y no al final?
- A quién me alío primero (CPO, CEO, CTO)
- Cómo demuestro el valor de diseño con métricas (usabilidad, reducción de soporte, conversión)
- Cómo gestiono la fricción con Product Managers que sienten que diseño "les ralentiza"

### 5. Proceso de diseño reproducible para el equipo

Dame un proceso de diseño ligero que pueda funcionar en sprints de 2 semanas:
1. Discovery (cuándo y cómo)
2. Ideación y exploración
3. Prototipado y validación
4. Handoff a Engineering
5. QA de diseño

### 6. Feedback y desarrollo del equipo

Cómo doy feedback de diseño que mejore a la gente en lugar de desmotivarla. Template de critique session que puedo usar semanalmente con el equipo.

### 7. Mi propia productividad como diseñadora que ahora también gestiona

¿Cuánto tiempo dedico a diseñar yo directamente vs. revisar y facilitar? ¿Cómo gestiono mi propio trabajo cuando las interrupciones son constantes?

Responde en español con ejemplos concretos de equipos de diseño de producto. Incluye tablas y frameworks que pueda usar directamente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Plan de 90 días para construir y liderar un equipo de diseño desde cero como primera head of design.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'VP de ventas: métricas y decisiones que marcan la diferencia',
                'description'      => 'Las responsabilidades, métricas y decisiones del VP de ventas que marcan la diferencia entre escalar y estancarse.',
                'prompt_content'   => <<<'PROMPT'
Eres un VP de ventas con experiencia en empresas SaaS B2B de 10 a 200 personas. Acabo de ser promovido a VP de ventas de una empresa de software con 15M€ de ARR y un equipo de 12 personas en ventas (8 AEs, 3 SDRs y 1 Sales Ops). El CEO espera que lleguemos a 30M€ de ARR en 18 meses. Ayúdame a construir el playbook del VP de ventas.

## Mi situación

- Venía de ser el mejor AE de la empresa durante 3 años. Nunca he gestionado un equipo de ventas.
- El pipeline actual está bien en cantidad pero la tasa de cierre es baja (18%, cuando el benchmark es 25–30%).
- El ciclo de ventas medio es de 4 meses para deals enterprise y 3 semanas para SMB.
- Tenemos dos segmentos: SMB (ticket medio 8.000€/año) y Mid-Market (ticket medio 45.000€/año).

## Lo que necesito

### 1. Las métricas que un VP de ventas debe monitorizar

Dame el dashboard de KPIs que debo revisar cada semana, cada mes y cada trimestre:

| Métrica | Frecuencia | Benchmark | Señal de alerta |
|---------|-----------|-----------|-----------------|
| Pipeline coverage | Semanal | 3x el objetivo | < 2.5x |
| Tasa de conversión por etapa | Semanal | Varía por etapa | Caída > 5% MoM |
| Ramp time de nuevos AEs | Mensual | 3–4 meses | > 5 meses |
| Churn de equipo de ventas | Mensual | < 15% anual | > 20% |

Completa la tabla y añade 5 métricas más que yo debería tener en mi dashboard.

### 2. Diagnóstico de la tasa de conversión baja

Tenemos un 18% de tasa de cierre. Dame un proceso de diagnóstico estructurado:
- Cómo identifico si el problema es el ICP (estamos hablando con los clientes equivocados)
- Cómo identifico si el problema es el proceso de ventas (mal cualificados, demos malas, propuestas flojas)
- Cómo identifico si el problema es el producto o el precio
- Las 3 acciones de mayor impacto para mejorar la tasa en los próximos 90 días

### 3. Estructura del equipo para escalar de 15M a 30M

¿Cómo estructuro el equipo de ventas para doblar el ARR en 18 meses?
- ¿Cuándo contrato más SDRs vs. más AEs?
- ¿Separo los equipos de SMB y Mid-Market o los mantengo juntos?
- ¿Cuándo creo el rol de Sales Manager para no gestionar yo a 12 personas directamente?

### 4. Coaching del equipo de AEs

No todos mis AEs son iguales. Dame un framework de coaching por segmento:
- **Top performers (top 20%)**: cómo retenerlos y desarrollarlos sin que se aburran
- **Middle performers (60%)**: cómo subirlos al siguiente nivel
- **Under performers (bottom 20%)**: cuándo trabajarlos y cuándo hacer el movimiento difícil

### 5. Mi relación con el CEO y el board

¿Qué comunico en el board sobre ventas? ¿Qué métricas presento y cómo gestiono las expectativas cuando el pipeline está flojo?

### 6. Forecasting sin mentirme ni mentir al CEO

Dame un proceso de forecasting mensual y trimestral que sea honesto y defendible. ¿Cómo califico los deals en pipeline? ¿Qué metodología uso (MEDDIC, SPIN, Challenger)?

Responde en español con ejemplos de empresas SaaS B2B de tamaño similar. Usa tablas y frameworks cuando sea útil.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Playbook completo para VP de ventas de SaaS B2B: métricas, equipo, coaching y forecasting.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Chief Product Officer (CPO): rol y estrategia en empresas de 50–500 personas',
                'description'      => 'El rol del CPO en empresas de 50–500 personas: estrategia, equipo, relación con el CEO y el board.',
                'prompt_content'   => <<<'PROMPT'
Eres un Chief Product Officer con experiencia en empresas de producto de entre 50 y 500 personas. Me acaban de contratar como primer CPO de una empresa SaaS de 120 personas con 8M€ de ARR. Hay 6 PMs, 3 diseñadores y 40 ingenieros bajo mi responsabilidad. El CEO viene del mundo técnico y tiene opiniones muy fuertes sobre el producto. Ayúdame a definir y ejecutar el rol de CPO de forma efectiva.

## Mi contexto específico

- La empresa tiene 8 años. Hasta ahora el CEO hacía de CPO informalmente.
- El producto es funcional pero desordenado: demasiadas features para demasiados clientes distintos.
- El equipo de producto está frustrado porque no hay visión clara ni proceso de priorización consistente.
- Los clientes empresariales piden cosas que los clientes SMB no necesitan, y viceversa.
- El board presiona para mejorar la retención (NRR actual: 97%, objetivo: >110%).

## Lo que necesito

### 1. Qué hace un CPO que no hace un director de producto

Explica la diferencia real entre un director de producto senior y un CPO. ¿Qué trabajo es solo mío? ¿Qué es únicamente estratégico y no táctico?

| Trabajo de director de producto | Trabajo de CPO |
|--------------------------------|----------------|
| Priorizar el backlog del equipo | Definir la visión de producto a 3 años |
| Gestionar a los PMs | Alinear producto con estrategia de empresa |
| ... | ... |

### 2. Los primeros 60 días: diagnóstico sin destruir la confianza

Dame un plan de discovery que me permita entender el estado del producto y el equipo sin que parezca que estoy cuestionando todo lo que se ha hecho:
- Qué conversaciones tener con quién (CEO, PMs, ingenieros, clientes, CS, ventas)
- Qué documentos revisar
- Cómo hacer el diagnóstico sin comprometer el roadmap en curso

### 3. Visión de producto y estrategia

Proceso para construir una visión de producto a 3 años que el equipo compre y que el board entienda:
- Cómo recojo los inputs (datos, clientes, mercado, competidores)
- Cómo sintetizo en una visión que no sea un párrafo vacío de buzzwords
- Cómo la presento al CEO, al board y al equipo

### 4. Priorización cuando todo es urgente

Framework de priorización para una empresa donde ventas pide features, CS tiene tickets pendientes y el equipo quiere reducir deuda técnica:

1. **Impacto en retención** (NRR) — peso: 40%
2. **Impacto en adquisición** (nuevos clientes) — peso: 30%
3. **Deuda técnica y escalabilidad** — peso: 20%
4. **Peticiones puntuales de clientes** — peso: 10%

¿Cómo comunico este framework a ventas cuando les digo que no a su petición más urgente?

### 5. Mi relación con el CEO que fue CPO

¿Cómo trabajo con un CEO que tiene opiniones fuertes sobre el producto sin que sea una lucha de poder constante? Dame tácticas concretas para alinear sin perder mi autoridad como CPO.

### 6. Métricas del CPO

¿Qué métricas son responsabilidad del CPO frente a las que son del CEO o del CCO?
- NRR y churn de producto
- Feature adoption rate
- Time to value para nuevos clientes
- Ratio de features usadas vs. features construidas

### 7. Equipo de producto: cómo levantarlo

El equipo de PMs está frustrado y los diseñadores se sienten infravalorados. ¿Cuál es mi plan de los primeros 90 días para cambiar la cultura de trabajo del equipo de producto?

Responde en español con ejemplos concretos de empresas SaaS en fase de crecimiento. Incluye frameworks y tablas que pueda usar en presentaciones al board.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Guía ejecutiva para el primer CPO de una empresa SaaS: visión, priorización, equipo y relación con el CEO.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Director de personas (Chief People Officer)',
                'description'      => 'Construye la función de RRHH que atrae, retiene y desarrolla al mejor talento a escala.',
                'prompt_content'   => <<<'PROMPT'
Eres un Chief People Officer con experiencia construyendo funciones de RRHH en empresas tecnológicas de rápido crecimiento. Me han contratado como primer CPO (Chief People Officer) de una empresa de tecnología de 180 personas que quiere llegar a 300 en 18 meses. Actualmente no hay función de RRHH estructurada: hay una persona de administración de personal y el resto lo hacen los managers solos. Ayúdame a construir la función de personas desde cero.

## Mi contexto

- La empresa tiene buena cultura pero no está documentada ni escalable.
- La retención es alta (12% de turnover anual) pero empezamos a perder talento senior a empresas más grandes.
- El proceso de contratación tarda una media de 75 días (muy lento para el mercado tech).
- No hay bandas salariales formales ni proceso de performance review estructurado.
- El CEO cree en la cultura pero no quiere "burocracia de RRHH".

## Lo que necesito

### 1. Las prioridades del primer trimestre

Qué construyo primero con recursos limitados (yo y una persona de apoyo):

| Prioridad | Por qué primero | Impacto si no lo hago |
|-----------|----------------|----------------------|
| Proceso de contratación | 30 contrataciones en 18 meses | Crecimiento bloqueado |
| Bandas salariales | Retención de senior | Perderé a los mejores en 6 meses |
| Onboarding estructurado | Productividad temprana | 90 días perdidos por cada nueva persona |
| Performance framework | Desarrollo y retención | Managers sin herramientas para dar feedback |

¿Es este el orden correcto? Razona tu respuesta y ajusta si es necesario.

### 2. Proceso de contratación de 75 a 30 días

¿Cómo reduzco el tiempo de contratación sin bajar la barra de calidad?
- Dónde están los cuellos de botella típicos (calibración de hiring manager, loops de entrevistas, aprobaciones)
- Template de proceso de contratación estandarizado por nivel (IC junior, IC senior, manager)
- Cómo formo a los hiring managers para que sean buenos entrevistadores

### 3. Bandas salariales sin un equipo de compensation

Cómo construyo bandas salariales con datos de mercado siendo una empresa sin presupuesto para consultoras de compensation:
- Fuentes de datos gratuitas o baratas (Glassdoor, LinkedIn Salary, Radford público, Comptryx)
- Cómo estructuro los niveles (L1 a L6 o equivalente)
- Cómo comunico las bandas a los managers y cuándo las comparto con los empleados

### 4. Performance reviews que no sean una pérdida de tiempo

Dame un proceso de evaluación del rendimiento que sea útil, no burocrático:
- Frecuencia y formato (¿anual, semestral, trimestral?)
- Cómo estructuro la autoevaluación y el feedback de peers
- Cómo separo la conversación de rendimiento de la conversación salarial
- Cómo gestiono a los managers que no dan feedback honesto

### 5. Cultura documentada y escalable

La cultura es buena pero está en la cabeza del CEO. ¿Cómo la documento sin que parezca un folleto corporativo vacío?
- Proceso para extraer los valores reales (no los aspiracionales)
- Cómo los operacionalizo en procesos (contratación, performance, promociones)
- Cómo mido si la cultura se mantiene mientras crecemos

### 6. Employer branding con presupuesto mínimo

Cómo posiciono a la empresa como gran lugar para trabajar para atraer talento tech sin el presupuesto de una gran empresa:
- Qué contenido genero y dónde
- Cómo activo a los empleados como embajadores
- Glassdoor y LinkedIn: cómo los gestiono

### 7. Mi relación con el CEO que quiere cultura pero no burocracia

¿Cómo le convenzo de que los procesos de personas no son burocracia sino infraestructura de crecimiento? Dame el argumento con datos y ejemplos.

Responde en español con ejemplos de empresas tecnológicas en fase de crecimiento. Frameworks prácticos que pueda usar desde el primer día.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Guía para construir la función de RRHH desde cero en una empresa tecnológica en crecimiento.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'CFO en startups y pymes: más allá de los números',
                'description'      => 'Las responsabilidades reales del CFO más allá de los números: relación con inversores, fundraising y toma de decisiones estratégicas.',
                'prompt_content'   => <<<'PROMPT'
Eres un CFO con experiencia en startups y pymes en fase de crecimiento. Acabo de ser nombrado CFO de una startup tecnológica con 6M€ de ARR, 45 empleados y 3M€ en caja (runway de 18 meses). Hemos levantado una Serie A hace 8 meses. Los inversores esperan que lleguemos a Series B en 12–15 meses. Venía del mundo de la consultoría financiera y nunca he sido CFO. Ayúdame a entender el rol completo.

## Mi contexto

- La empresa quema 165K€ al mes (burn rate).
- El CEO es técnico y brillante pero evita las conversaciones financieras difíciles.
- Hay un board con 3 inversores que piden actualizaciones mensuales.
- Los procesos financieros son básicos: usamos Excel para casi todo.
- Necesito levantar la próxima ronda en unos 12 meses.

## Lo que necesito

### 1. Las responsabilidades reales del CFO en una startup

Explica qué hace el CFO de una startup que no hace un director financiero de una empresa tradicional:
- Fundraising y relación con inversores (no solo reporting)
- Estrategia de capital y estructura del cap table
- Decisiones de hire/fire junto al CEO
- Ser el "adulto en la sala" que dice no cuando hace falta

### 2. El dashboard financiero del CEO y el board

Dame el conjunto mínimo de métricas que debo reportar mensualmente al board:

| Métrica | Fórmula | Por qué le importa al board |
|---------|---------|----------------------------|
| ARR y crecimiento MoM | ARR actual vs. mes anterior | Velocidad de crecimiento |
| Burn rate neto | Salidas - Entradas de caja | Cuánto quemamos de verdad |
| Runway | Caja / Burn mensual | Tiempo que nos queda |
| CAC payback period | CAC / MRR por cliente | Eficiencia de la máquina de ventas |
| LTV:CAC ratio | LTV / CAC | Salud del modelo de negocio |

Añade 4 métricas más que un inversor de Serie B va a mirar sí o sí.

### 3. Preparar la Serie B en 12 meses

¿Cuáles son los hitos financieros que tengo que demostrar para que una ronda Serie B sea creíble?
- ARR mínimo y tasa de crecimiento esperada
- NRR que necesito (y cómo mejorarlo)
- Ratio de eficiencia que los inversores de Serie B valoran
- Qué historia cuento en el pitch sobre los números

### 4. Gestionar el burn y extender el runway

Con 18 meses de runway, ¿cuándo tengo que empezar a preocuparme de verdad? Dame un marco de decisión:
- Con >18 meses de runway: ¿qué hago?
- Con 12–18 meses: ¿cuándo activo el Plan B?
- Con 6–12 meses: ¿qué decisiones difíciles tengo que tomar con el CEO?
- Con <6 meses: plan de emergencia

### 5. Digitalizar los procesos financieros

Venimos de Excel. ¿Qué herramientas implemento primero con un equipo pequeño?
- Contabilidad y ERP (opciones para startups)
- FP&A y modelado financiero
- Gestión de gastos y aprobaciones
- Reporting automatizado para el board

### 6. Mi relación con el CEO

¿Cómo trabajo con un CEO técnico que evita las conversaciones financieras difíciles? Especialmente cuando hay que decir que no a contrataciones o proyectos que el CEO quiere.

### 7. Relación con los inversores del board

¿Qué expectativas tienen los inversores del CFO vs. del CEO? ¿Cómo gestiono las conversaciones difíciles con ellos (cuando vamos por debajo del plan, cuando hay que cambiar la estrategia)?

Responde en español con ejemplos concretos de startups tecnológicas en fase de crecimiento. Incluye tablas y frameworks para comunicar con el board.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Manual del primer CFO en una startup: métricas, fundraising, gestión del burn y relación con el board.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'General counsel en empresa tecnológica',
                'description'      => 'Cómo construir y gestionar la función legal interna: cuándo contratar, qué externalizar y cómo trabajar con el negocio.',
                'prompt_content'   => <<<'PROMPT'
Eres un general counsel con experiencia en empresas tecnológicas de rápido crecimiento. Me acaban de contratar como primer abogado interno (general counsel) de una empresa SaaS B2B con 150 empleados y operaciones en España y Alemania. Hasta ahora todo el trabajo legal lo hacía un despacho externo. Ayúdame a construir la función legal interna de forma eficiente.

## Mi contexto

- La empresa opera en España y Alemania, con clientes en 12 países de la UE.
- El gasto en despacho externo es de ~120K€/año, que es la principal justificación de mi contratación.
- Los mayores riesgos legales identificados: contratos con clientes (términos inconsistentes), privacidad de datos (el RGPD nunca se ha auditado correctamente), y la expansión internacional que está planificada para el año que viene.
- El CEO quiere que el departamento legal sea un "habilitador del negocio", no un bloqueante.

## Lo que necesito

### 1. La función legal interna: qué hago yo vs. qué externalizo

Dame un framework para decidir qué trabajo legal manejo internamente y qué sigo delegando en despachos externos:

| Tipo de trabajo | Yo internamente | Despacho externo | Criterio de decisión |
|----------------|-----------------|------------------|----------------------|
| Contratos comerciales estándar | Sí | No | Volumen alto, bajo riesgo |
| Litigios y arbitrajes | No | Sí | Requiere especialización |
| M&A y due diligence | Parcialmente | Sí para la ejecución | Demasiado esporádico |
| RGPD y privacidad | Sí | Solo auditorías puntuales | Riesgo alto, trabajo continuo |

Completa la tabla con todos los tipos de trabajo legal relevantes para un SaaS B2B.

### 2. Los primeros 90 días: qué audito y qué arreglo primero

¿Por dónde empiezo? Dame una lista priorizada de los riesgos legales más comunes en un SaaS B2B que lleva 5 años sin abogado interno:
- Contratos con clientes y proveedores (¿hay versiones obsoletas en circulación?)
- Privacidad (RGPD y transferencias internacionales)
- Propiedad intelectual (¿quién es dueño del código?)
- Laboral (contratos de trabajo, cláusulas de no competencia)
- Regulación específica del sector

### 3. Contratos comerciales: crear eficiencia

La empresa firma unos 80 contratos nuevos al año con clientes. ¿Cómo creo un proceso que no me convierta en el cuello de botella?
- Playbook de negociación para el equipo de ventas (qué pueden aceptar sin consultarme)
- Plantillas estándar de contrato por tipo de cliente (SMB, Mid-Market, Enterprise)
- Umbrales: cuándo meto yo la mano vs. cuándo lo firma ventas directamente

### 4. RGPD en una empresa que nunca lo ha auditado

Proceso de auditoría RGPD desde cero para una empresa SaaS que procesa datos de clientes en varios países de la UE:
- Registro de actividades de tratamiento (RAT)
- Contratos con encargados del tratamiento (DPAs con proveedores)
- Evaluaciones de impacto (PIA/DPIA) para los tratamientos de mayor riesgo
- Plan de respuesta ante brechas de seguridad

¿Necesito un DPO? ¿Cuándo es obligatorio y cuándo es recomendable?

### 5. Trabajar con el negocio sin ser el bloqueante

¿Cómo me posiciono como habilitador y no como el departamento que dice "no"?
- Cómo respondo a peticiones urgentes del equipo de ventas
- Cómo educo a los managers sobre riesgos legales sin que sea un sermón
- SLAs internos para responder peticiones legales

### 6. Gestión del gasto en despachos externos

Con 120K€/año en externos, ¿cómo decido qué relaciones mantener y cuáles cortar? ¿Cómo negocio tarifas y cómo mido si el despacho externo me da valor?

Responde en español con ejemplos concretos del entorno legal europeo (especialmente España y RGPD). Incluye checklists y frameworks que pueda usar desde el primer día.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Guía para construir la función legal interna en un SaaS B2B: prioridades, RGPD, contratos y relación con el negocio.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'VP de Customer Success: construir y escalar el equipo',
                'description'      => 'Construye y escala el equipo de CS: estructura, métricas, playbooks y cómo demostrar el ROI al CEO.',
                'prompt_content'   => <<<'PROMPT'
Eres un VP de Customer Success con experiencia en empresas SaaS B2B en fase de crecimiento. Acabo de ser promovida a VP de Customer Success de una empresa con 9M€ de ARR, 180 clientes activos y un NRR del 98%. El CEO quiere llegar a un NRR del 115% en los próximos 18 meses. Mi equipo actual es de 4 CSMs que llevan entre 40 y 50 cuentas cada uno. Ayúdame a construir el playbook del VP de CS.

## Mi contexto

- El 80% de los clientes son SMB (ticket < 10K€/año), el 20% son Mid-Market o Enterprise (ticket 25K–150K€/año).
- El churn actual es del 8% anual (principalmente SMB).
- Los expansions son casi inexistentes: vendemos el precio máximo inicial y no hay cultura de upsell.
- No hay segmentación formal de cuentas ni playbooks escritos.
- CS se creó para "resolver problemas", no para generar ingresos.

## Lo que necesito

### 1. La transformación de CS: de soporte a ingresos

¿Cómo cambio la mentalidad del equipo (y la mía) de "CS arregla problemas" a "CS genera ingresos"? ¿Qué cambia en el trabajo diario, las métricas y la conversación con el CEO?

### 2. Segmentación de cuentas

Con 180 clientes y 4 CSMs, ¿cómo segmento las cuentas para dar un nivel de servicio diferenciado?

| Segmento | Criterio | Nivel de servicio | CSM por cuenta |
|----------|---------|-------------------|----------------|
| Enterprise | ARR > 50K€ | High-touch: QBRs, CSM dedicado | 1 CSM: 10–15 cuentas |
| Mid-Market | ARR 10–50K€ | Mid-touch: check-ins mensuales | 1 CSM: 30–40 cuentas |
| SMB | ARR < 10K€ | Low-touch: digital + escalados | 1 CSM: 80+ cuentas |

¿Cómo implemento el modelo low-touch para SMB sin perder clientes? ¿Qué automatizo?

### 3. Playbooks por momento del ciclo de vida del cliente

Dame la estructura básica de 4 playbooks que todo equipo de CS necesita:
1. **Onboarding** (primeros 90 días): hitos de activación, check-ins, criterios de éxito
2. **Health check proactivo** (clientes en riesgo): señales de alerta, protocolo de rescate
3. **QBR** (revisión trimestral con clientes Enterprise): agenda, métricas que presentamos, próximos pasos
4. **Renovación y expansión** (60 días antes del vencimiento): cómo abordo la conversación de renovación y cómo identifico oportunidades de upsell

### 4. Las métricas del VP de CS

¿Qué KPIs son responsabilidad del VP de CS?

| Métrica | Definición | Benchmark SaaS B2B | Mi objetivo |
|---------|-----------|-------------------|-------------|
| NRR | (MRR inicio + expansions - contracciones - churn) / MRR inicio | 100–120% | 115% |
| Gross Retention Rate | 1 - churn de ingresos | > 85% | > 90% |
| Time to Value (TTV) | Días hasta primer valor medible | < 30 días | < 21 días |
| Health score medio | Score ponderado por ARR | > 70/100 | > 75/100 |

Añade 3 métricas más que debo incluir en mi dashboard semanal.

### 5. Cómo demuestro el ROI del equipo de CS al CEO

El CEO ve CS como un coste, no como una inversión. ¿Cómo le demuestro que cada euro invertido en CS genera retorno?
- Cálculo del coste de churn vs. coste de retención
- El impacto del NRR en la valoración de la empresa
- Los expansions generados por CS vs. los generados por ventas

### 6. Contratar y escalar el equipo

Para pasar de 4 a 8 CSMs en 12 meses: ¿qué perfil busco? ¿Qué cambia si contrato para high-touch vs. low-touch? ¿Cuándo necesito un Sales/CS Manager que me libere de gestionar a todos directamente?

### 7. Mi relación con ventas

La fricción CS–Ventas es el problema número uno de muchas empresas SaaS. ¿Cómo construyo una relación productiva con el VP de Ventas donde CS no sea el que "recoge los desastres" de cuentas mal cualificadas?

Responde en español con ejemplos concretos de SaaS B2B. Frameworks, tablas y playbooks que pueda implementar en los próximos 90 días.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Playbook del VP de CS para escalar de NRR 98% a 115%: segmentación, playbooks y ROI para el CEO.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelance a 100€/hora: el camino para triplicar tu tarifa',
                'description'      => 'El camino para triplicar la tarifa: especialización, posicionamiento y los cambios de mentalidad que lo hacen posible.',
                'prompt_content'   => <<<'PROMPT'
Eres un coach de negocios especializado en profesionales independientes de servicios digitales. Llevo 4 años como freelance de diseño UX. Cobro 35€/hora de media y tengo trabajo constante pero no avanzo económicamente. Quiero llegar a 100€/hora en los próximos 12 meses. Ayúdame a construir el plan concreto para triplicar mi tarifa.

## Mi situación actual

- Clientes actuales: agencias de diseño (me subcontratan), startups pequeñas y alguna pyme.
- Trabajo 45 horas semanales, 40 de las cuales son facturables. Pero solo 35 son de media (hay semanas flacas).
- Ingresos anuales: ~55.000€ brutos.
- Mis habilidades: UX research, prototipado en Figma, diseño de flujos y sistemas de diseño básicos.
- Lo que me frena: siento que hay mucho freelance de UX en el mercado y no sé cómo diferenciarme.

## Lo que necesito

### 1. Por qué 100€/hora es posible (y la mentalidad que lo bloquea)

Explica el cambio de mentalidad que separa al freelance de 35€/hora del de 100€/hora. No es solo experiencia o calidad: ¿qué es lo que realmente cambia?

### 2. El posicionamiento: de "diseñador UX generalista" a "especialista"

Dame un proceso para elegir mi especialización de la forma más inteligente posible:

| Criterio de especialización | Opciones para mí | Score (1–5) |
|----------------------------|------------------|-------------|
| Sectores donde tengo experiencia previa | Fintech, EdTech, ecommerce | ? |
| Tipos de proyecto que más disfruto | Research, sistemas de diseño, flujos complejos | ? |
| Donde hay más disposición a pagar alto | Enterprise B2B, SaaS, Fintech | ? |
| Competencia (menos es mejor) | Generalista = mucha, especialista = menos | ? |

¿Cómo elijo? Dame el framework de decisión.

### 3. El posicionamiento en palabras: cómo me presento

Dame 3 versiones de mi presentación profesional (pitch de 30 segundos, bio de LinkedIn, propuesta de proyecto) que comuniquen especialización y valor, no horas:
- Ejemplo de lo que tengo ahora: "Soy diseñador UX freelance con 4 años de experiencia"
- Lo que debería decir según mi especialización elegida

### 4. La estrategia de pricing para subir sin perder clientes

¿Cómo subo la tarifa sin que mis clientes actuales se vayan todos?
- ¿Cuándo y cómo comunico la subida a mis clientes actuales?
- ¿Cómo gestiono a los clientes que no pueden pagar más?
- ¿Qué hago con los proyectos que ya empecé a precio bajo?

Estrategia de subida progresiva:

| Trimestre | Tarifa objetivo | Acción clave |
|-----------|-----------------|--------------|
| Q1 | 45€/h | Nuevos clientes a 45€, actuales se mantienen |
| Q2 | 60€/h | Clientes actuales notificados con 60 días de antelación |
| Q3 | 75€/h | Solo acepto proyectos con este mínimo |
| Q4 | 100€/h | Cartera reformada, posicionamiento establecido |

¿Es realista este calendario? ¿Qué podría acelerarlo o retrasarlo?

### 5. Cómo encuentro clientes que pagan 100€/hora

Los clientes de 35€/hora no son los mismos que los de 100€/hora. ¿Dónde encuentro a los que pagan más y cómo llego a ellos?
- Canales (LinkedIn, referencias, comunidades, contenido)
- El tipo de empresa y de interlocutor que debo buscar
- Cómo convierto una referencia de un cliente de 35€/hora en una oportunidad de 100€/hora

### 6. Mis propuestas: de presupuesto de horas a propuesta de valor

¿Cómo cambio el formato de mis propuestas para que el cliente no compre "mis horas" sino "el resultado que consigue"?
Dame un antes/después de una propuesta de proyecto de diseño UX:
- **Antes**: "40 horas de diseño UX a 35€/hora = 1.400€"
- **Después**: [ayúdame a construir esto]

### 7. Los 3 errores que mantienen a los freelancers en 35€/hora

¿Cuáles son los errores de mentalidad y de negocio más comunes que impiden subir la tarifa? Sé directo y concreto, sin suavizar.

Responde en español con ejemplos del mercado freelance en España y LATAM. Frameworks prácticos que pueda empezar a aplicar esta semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Plan de 12 meses para triplicar la tarifa como freelance UX: especialización, pricing y posicionamiento.',
                'vote_score'       => 49,
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
