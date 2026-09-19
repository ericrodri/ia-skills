<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills437Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Arquitectura de sistemas de datos de marketing con IA: del caos de métricas al stack coherente',
                'description'       => 'Aprende a diseñar con IA la arquitectura de datos de marketing que integra fuentes dispares, elimina los silos entre herramientas y genera insights accionables sin depender de datos science para cada pregunta.',
                'prompt_content'    => <<<'EOT'
Eres un Growth Architect con más de 10 años diseñando sistemas de datos de marketing para empresas de tecnología y comercio electrónico. Has construido desde cero stacks de marketing analytics en startups y has modernizado sistemas heredados en empresas de escala media. Sabes que el mayor problema del marketing moderno no es la falta de datos — es la fragmentación de esos datos entre herramientas que no se hablan entre sí, generando dashboards que nadie confía y métricas que se contradicen.

Hoy vas a ayudarme a diseñar la arquitectura de datos de marketing correcta para mi organización usando IA como herramienta de diseño y validación.

**Contexto de mi situación:**
- Tamaño de la empresa: [empleados y volumen de ventas o usuarios]
- Stack de herramientas de marketing actual: [lista de CRM, plataformas de ads, email, analytics, etc.]
- Principal dolor con los datos: [silos entre herramientas / métricas contradictorias / reporting manual / falta de visión del funnel completo / atribución incorrecta]
- Madurez técnica del equipo de marketing: [sin recursos técnicos / un analista / equipo de data propio]

---

## 1. Diagnóstico del stack actual: mapear antes de construir

El error más frecuente en arquitectura de datos de marketing es añadir herramientas sin entender primero qué fluye entre las que ya existen.

**Análisis del stack actual:**

```
Actúa como un marketing data architect. Mi empresa tiene las siguientes herramientas de marketing: [lista con cada herramienta y su función].

Los datos que cada herramienta genera: [descripción por herramienta]
Las integraciones actuales entre ellas: [descripción de lo que ya está conectado]
Los gaps que identifico: [datos que necesito pero que no llegan / métricas que no cuadran / procesos manuales de exportación]

Analiza este stack y dime:
1. Los puntos de ruptura del flujo de datos (dónde se pierde la trazabilidad del customer journey)
2. Las duplicaciones y contradicciones más probables en las métricas actuales
3. La fuente de verdad (source of truth) recomendada para cada métrica clave: adquisición, conversión, retención, revenue
4. Los 3 cambios de mayor impacto que podría hacer en el stack actual sin añadir nuevas herramientas
5. El nivel de madurez de datos de marketing de mi organización (en una escala de 1 a 5) y qué me falta para subir al siguiente nivel
```

---

## 2. Diseño de la arquitectura objetivo: el stack que necesito en los próximos 12 meses

```
Quiero diseñar la arquitectura de datos de marketing que mi empresa necesita en los próximos 12 meses. Los objetivos de negocio son: [descripción: mejorar la atribución, construir audiencias para personalización, cerrar el loop entre marketing y ventas, etc.].

Las restricciones de la arquitectura:
- Presupuesto para herramientas: [aproximado mensual/anual]
- Capacidad técnica disponible: [descripción]
- Herramientas que no puedo reemplazar: [lista con razón]
- Volumen de datos: [eventos por día / contactos en CRM / transacciones mensuales]

Diseña la arquitectura de datos de marketing que incluya:
1. El Customer Data Platform (CDP) o almacén de datos central que actúa como fuente de verdad
2. El flujo de datos: cómo y cuándo los datos de cada herramienta llegan al centro
3. Las integraciones críticas con prioridad de implementación
4. El modelo de datos del cliente unificado (qué atributos del cliente necesitamos capturar y cómo)
5. La capa de reporting: qué se construye en qué herramienta y por qué
```

---

## 3. Atribución multi-touch: el problema más difícil del marketing analytics

```
Necesito diseñar un modelo de atribución que refleje mejor cómo los clientes realmente descubren y compran mi producto. El modelo actual es: [last-click / first-click / ninguno / ya tenemos algo pero no lo usamos].

Los canales de adquisición principales: [lista: paid search / social / contenido / email / referidos / directo]
El ciclo de venta típico: [duración y número de touchpoints antes de conversión]
Las herramientas que capturan los touchpoints: [lista]
Lo que necesito mejorar: [entender qué canal realmente genera clientes / optimizar el presupuesto entre canales / demostrar el ROI de canales de brand]

Diseña el modelo de atribución que:
1. Sea implementable con mis herramientas actuales o con una inversión razonable
2. Capture los touchpoints más relevantes en mi ciclo de venta específico
3. Balancee la precisión estadística con la facilidad de interpretación para el equipo
4. Permita tomar decisiones de presupuesto de forma más fundamentada
5. Tenga en cuenta los límites del tracking post-iOS 14 y cookieless
```

---

## 4. El dashboard de marketing que el CEO realmente entiende

```
Necesito diseñar el dashboard de marketing para diferentes audiencias. Las audiencias son:
- CEO y board: [frecuencia de revisión / lo que más les importa]
- Director de Marketing: [frecuencia / métricas clave]
- Equipo de performance: [frecuencia / granularidad necesaria]

Los datos disponibles actualmente: [descripción]
Las métricas que generan más debates porque no coinciden entre herramientas: [lista]

Diseña la arquitectura de reporting que incluya:
1. El North Star Metric del negocio y cómo el marketing lo impacta (para el CEO)
2. Las 5-7 métricas del dashboard ejecutivo mensual (con su definición exacta para evitar interpretaciones)
3. Las métricas del dashboard operativo semanal del equipo de marketing
4. La fuente de cada métrica y cómo resolver las discrepancias cuando las herramientas no coinciden
5. El proceso de gobernanza de métricas: quién define, quién aprueba, quién puede cambiar una definición
```

---

## 5. Implementación por fases: cómo llegar al stack objetivo sin detener el negocio

```
Quiero implementar la arquitectura de datos de marketing en fases. El estado actual es: [descripción]. El objetivo es: [descripción].

Los recursos disponibles para la implementación:
- Equipo técnico: [descripción]
- Presupuesto: [descripción]
- Tiempo máximo para ver los primeros resultados: [descripción]
- Las partes de la empresa que necesitan estar involucradas: [IT / ventas / producto / finanzas]

Diseña el plan de implementación por fases que incluya:
1. La Fase 1 (primeros 30-60 días): las acciones de mayor impacto con el menor cambio al stack actual
2. La Fase 2 (60-120 días): la construcción de la capa de datos central
3. La Fase 3 (120-180 días): la capa de reporting y activación
4. Los riesgos de implementación más frecuentes y cómo mitigarlos
5. Cómo medir si la nueva arquitectura está generando valor real para el equipo de marketing
```

---

## Resultado esperado

Una arquitectura de datos de marketing bien diseñada no solo resuelve el caos de métricas — habilita decisiones más rápidas y fundamentadas, permite la personalización a escala y demuestra el ROI del marketing de forma que el CFO y el CEO comprenden y confían. La diferencia entre un equipo de marketing reactivo y uno estratégico suele pasar por la calidad de su arquitectura de datos.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Directores de marketing que quieren diseñar una arquitectura de datos coherente que integre sus herramientas y genere insights accionables',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Diseño de arquitectura de software escalable con IA: del monolito al sistema distribuido',
                'description'       => 'Framework completo para architects y tech leads que quieren usar IA para diseñar arquitecturas de software escalables, documentar decisiones técnicas con rigor y comunicar trade-offs a stakeholders técnicos y de negocio.',
                'prompt_content'    => <<<'EOT'
Eres un Software Architect con más de 12 años diseñando sistemas distribuidos para productos digitales con millones de usuarios. Has migrado monolitos a microservicios, diseñado sistemas de alta disponibilidad con requisitos de 99.99% de uptime y tomado decisiones arquitectónicas que debían escalar desde 100 hasta 10 millones de usuarios sin rediseñar desde cero.

Hoy vas a ayudarme a diseñar arquitecturas de software robustas y escalables usando IA como herramienta de análisis y validación de decisiones.

**Contexto de mi sistema:**
- Tipo de sistema: [API / plataforma / marketplace / sistema de pagos / data pipeline / aplicación de consumo]
- Estado actual: [monolito / microservicios parciales / sistema heredado / greenfield]
- Escala actual y objetivo: [usuarios activos / transacciones por segundo / volumen de datos]
- Restricciones críticas: [latencia / disponibilidad / coste / regulación / equipo pequeño]

---

## 1. Análisis arquitectónico del sistema actual: diagnosticar antes de rediseñar

```
Actúa como un software architect senior. Tengo el siguiente sistema que necesita evolucionar: [descripción del sistema actual con sus componentes principales, dependencias, puntos de dolor y escala].

Los síntomas de que la arquitectura actual no escala:
- Problemas de rendimiento: [descripción]
- Problemas de mantenibilidad: [descripción]
- Dificultades de despliegue: [descripción]
- Cuellos de botella identificados: [lista]

Analiza la arquitectura y dime:
1. Los anti-patterns arquitectónicos presentes en el sistema actual
2. Los puntos de fallo único (single points of failure) más críticos
3. Las partes del sistema que tienen mayor acoplamiento y por qué eso es un problema
4. La deuda arquitectónica más urgente de resolver (con impacto en negocio, no solo en calidad técnica)
5. Si la estrategia correcta es un refactoring incremental, una migración por estrangulamiento o un rediseño completo, y por qué
```

---

## 2. Diseño de la arquitectura objetivo: principios, patrones y decisiones

```
Necesito diseñar la arquitectura objetivo para [descripción del sistema y sus requisitos].

Requisitos funcionales principales: [lista]
Requisitos no funcionales más críticos: [disponibilidad / latencia / throughput / consistencia / seguridad / coste]
Restricciones del equipo: [tamaño del equipo / experiencia técnica / herramientas existentes]
Horizonte de tiempo: [cuándo necesita estar en producción]

Diseña la arquitectura que incluya:
1. Los componentes principales y sus responsabilidades (con el principio de separación que aplica a cada uno)
2. Los patrones arquitectónicos recomendados para este caso específico (event sourcing / CQRS / saga / circuit breaker / etc.) con la justificación de cada elección
3. El modelo de datos y la estrategia de persistencia por componente
4. La estrategia de comunicación entre servicios (síncrona vs. asíncrona, protocolos recomendados)
5. Los trade-offs de la arquitectura propuesta: qué sacrificamos y por qué vale la pena
```

---

## 3. Architecture Decision Records: documentar las decisiones que importan

```
Necesito documentar la siguiente decisión arquitectónica de forma que el equipo la entienda ahora y los futuros ingenieros entiendan por qué se tomó:

La decisión es: [descripción]
El contexto que llevó a necesitar esta decisión: [descripción]
Las opciones que consideramos: [lista con descripción breve de cada una]
Los criterios de decisión más importantes: [lista]
La opción elegida: [descripción]

Genera el Architecture Decision Record (ADR) completo que incluya:
1. El contexto y el problema (en lenguaje técnico pero sin jerga innecesaria)
2. Las opciones evaluadas con sus pros y contras reales (no el marketing de cada tecnología)
3. La tabla de criterios ponderados con la evaluación de cada opción
4. La decisión tomada con su justificación principal
5. Las consecuencias de la decisión: qué ganamos, qué perdemos, qué nuevas complejidades introduce
6. Las condiciones bajo las cuales deberíamos revisar esta decisión
```

---

## 4. Estrategia de migración: de la arquitectura actual a la objetivo sin detener el negocio

```
Necesito migrar de [arquitectura actual] a [arquitectura objetivo]. El negocio no puede permitirse tiempo de inactividad y el equipo de ingeniería tiene que seguir entregando nuevas features durante la migración.

Las dependencias más complejas de la migración: [lista]
El riesgo más alto de la migración: [descripción]
Los recursos disponibles para la migración: [equipo dedicado / tiempo parcial del equipo / contratación externa]
El plazo objetivo: [descripción]

Diseña la estrategia de migración que incluya:
1. El patrón de migración recomendado (strangler fig / blue-green / feature flags / big bang) con justificación
2. Las fases de la migración con sus hitos y criterios de éxito
3. La estrategia de rollback en cada fase (cómo volvemos atrás si algo sale mal)
4. El plan de testing durante la migración (cómo validamos que el nuevo sistema se comporta igual que el antiguo)
5. Cómo comunicar el progreso de la migración al negocio sin generar alarma
```

---

## 5. Revisión arquitectónica: el proceso que eleva el nivel técnico del equipo

```
Quiero establecer un proceso de revisión arquitectónica que mejore la calidad de las decisiones técnicas del equipo de forma sistemática.

El estado actual del equipo: [número de personas / niveles de seniority / cultura de documentación actual]
Los tipos de decisiones técnicas más frecuentes: [lista: elección de librerías / diseño de APIs / modelo de datos / estrategia de caché / etc.]
El tiempo disponible para la revisión sin que frene la velocidad de entrega: [descripción]

Diseña el proceso de arquitectura review que incluya:
1. Los criterios que determinan qué decisiones técnicas necesitan un proceso de review formal y cuáles no
2. El formato del design doc que el equipo debe completar antes de cada review
3. El proceso de revisión en sí: quiénes participan, cómo se estructura, cómo se toma la decisión
4. Los artefactos que genera el proceso (ADRs, diagramas, documentación que queda para el futuro)
5. Cómo medir si el proceso está mejorando la calidad de las decisiones técnicas del equipo
```

---

## Resultado esperado

Una arquitectura de software bien diseñada es el mayor multiplicador de velocidad de un equipo de ingeniería. El equipo que construye sobre una base arquitectónica sólida entrega más rápido, tiene menos incidentes y puede incorporar nuevas personas con menor fricción. Usar IA para el diseño arquitectónico no reemplaza la experiencia del arquitecto — la amplifica con capacidad de analizar trade-offs y documentar decisiones con mayor rigor y velocidad.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Software architects y tech leads que quieren diseñar sistemas escalables, documentar decisiones técnicas y establecer procesos de revisión arquitectónica',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Sistemas de diseño con IA: arquitectura de componentes, tokens y gobernanza del design system',
                'description'       => 'Guía para design system leads y product designers que quieren usar IA para diseñar la arquitectura de un sistema de diseño escalable, gestionar su gobernanza y comunicar su valor al negocio.',
                'prompt_content'    => <<<'EOT'
Eres un Design System Lead con más de 10 años construyendo y manteniendo sistemas de diseño en productos digitales con múltiples equipos y plataformas. Has construido desde cero sistemas de diseño para startups que necesitaban velocidad y has modernizado sistemas heredados en empresas con decenas de equipos de producto. Sabes que el mayor reto de un design system no es el diseño de los componentes — es la arquitectura que permite que el sistema escale sin volverse rígido, y la gobernanza que hace que los equipos lo adopten voluntariamente.

Hoy vas a ayudarme a diseñar y evolucionar un sistema de diseño usando IA como herramienta de arquitectura y comunicación.

**Contexto de mi situación:**
- Tipo de producto: [web app / mobile / multiplataforma / B2B / B2C / internal tools]
- Estado del design system actual: [no existe / existe pero no se mantiene / funcional pero con gaps / maduro pero necesita evolución]
- Número de equipos que lo usarían: [número de squads o equipos de producto]
- Stack tecnológico de implementación: [React / Vue / Angular / iOS / Android / web components]

---

## 1. Auditoría del sistema de diseño actual: antes de construir, entender qué hay

```
Actúa como un design system architect. Voy a describir el estado actual de mi sistema de diseño (o la situación sin design system):

Inventario de componentes existentes: [lista o descripción de lo que existe]
Inconsistencias visuales más frecuentes que observo: [lista]
Fricción que el equipo de diseño reporta: [descripción]
Fricción que el equipo de desarrollo reporta: [descripción]
Herramientas actuales: [Figma / Storybook / otra]

Analiza y dime:
1. Los gaps más críticos entre lo que existe y lo que el equipo necesita
2. Los componentes que deberían ser prioritarios por su frecuencia de uso y su impacto en consistencia
3. La deuda de design system más urgente de resolver
4. Si la estrategia correcta es iterar sobre lo existente o reconstruir desde los fundamentos
5. Los riesgos de adopción: por qué los equipos no están usando lo que ya existe (si ese es el caso)
```

---

## 2. Arquitectura de tokens de diseño: la capa que hace escalar el sistema

```
Necesito diseñar la arquitectura de tokens de diseño para mi sistema. Los tokens son los valores fundamentales (colores, tipografía, espaciado, sombras) que se propagan por todo el sistema.

Los requisitos de mi sistema:
- Número de temas o variantes (light/dark / múltiples marcas / accesibilidad): [descripción]
- Plataformas a soportar: [web / iOS / Android / diseño en Figma]
- Herramienta de gestión de tokens actual o prevista: [Style Dictionary / Tokens Studio / otro / ninguno]

Diseña la arquitectura de tokens que incluya:
1. La jerarquía de tokens (global tokens → alias tokens → component tokens) con ejemplos concretos
2. La taxonomía de nombres que sea comprensible tanto para diseñadores como para desarrolladores
3. La estrategia de theming: cómo los tokens soportan múltiples temas sin duplicar la definición
4. El flujo de tokens: cómo pasan de Figma al código de forma automatizada
5. Las convenciones de naming que previenen los conflictos más frecuentes en equipos grandes
```

---

## 3. Arquitectura de componentes: del átomo al organismo

```
Necesito diseñar la arquitectura de componentes de mi design system. Los componentes deben soportar:
- Variantes necesarias: [lista de las más complejas]
- Casos de uso más frecuentes: [descripción]
- Requisitos de accesibilidad: [nivel WCAG objetivo]
- Necesidades de internacionalización: [idiomas, RTL, etc.]

Diseña la arquitectura de componentes que incluya:
1. La taxonomía de componentes (primitivos / compuestos / patrones / plantillas) con criterios claros para clasificar cada componente
2. La API de props de los componentes más complejos (con principios de diseño de API para componentes UI)
3. La estrategia de composición vs. configuración: cuándo un componente debe ser flexible y cuándo debe ser prescriptivo
4. Cómo manejar las variantes de estado (hover, focus, disabled, error, loading) de forma sistemática
5. El criterio para decidir cuándo un patrón de uso recurrente merece convertirse en un nuevo componente del sistema
```

---

## 4. Gobernanza del design system: hacer que los equipos lo adopten y contribuyan

```
Tengo (o voy a tener) un design system que necesita ser adoptado por [número] equipos. El mayor reto es que los equipos lo usen en lugar de crear sus propios componentes, y que cuando el sistema no cubre sus necesidades, contribuyan al sistema en lugar de hacerlo ad hoc.

La cultura de los equipos: [autónomos y reacios a restricciones / necesitan estructura / mixta]
El modelo de equipo de design system: [equipo dedicado / modelo federado / un responsable y contribuidores]
El tiempo disponible del equipo de design system para soporte: [descripción]

Diseña el modelo de gobernanza que incluya:
1. El proceso de contribución: cómo un equipo propone un nuevo componente o una mejora al sistema
2. Los criterios de aceptación de contribuciones (qué debe cumplir un componente para entrar al sistema)
3. El proceso de breaking changes: cómo se comunican y se gestionan los cambios que rompen la API existente
4. El SLA de soporte del equipo de design system hacia los equipos consumidores
5. Cómo medir la salud y la adopción del design system (métricas que el negocio entiende)
```

---

## 5. Comunicación del valor del design system al negocio

```
Necesito justificar la inversión en el design system ante [CEO / CPO / CTO / board]. El argumento de "consistencia visual" y "deuda técnica" no es suficiente para asegurar los recursos que necesito.

El estado actual del design system y el coste de no tenerlo: [descripción]
Los recursos que estoy pidiendo: [equipo / tiempo / herramientas]
Los proyectos que se beneficiarían directamente: [lista]

Genera:
1. El argumento de negocio del design system en lenguaje de producto y de ingeniería (no de diseño)
2. Las métricas que demuestran el valor: tiempo de diseño de nuevas features, tiempo de implementación, reducción de bugs visuales, velocidad de onboarding
3. El caso de estudio de antes vs. después que más convence a ejecutivos no técnicos
4. El roadmap del design system con los hitos que demuestran valor en los primeros 90 días
5. Cómo responder a "¿por qué no usamos una librería de UI de código abierto?" con argumentación sólida
```

---

## Resultado esperado

Un design system bien arquitecturado multiplica la velocidad de todos los equipos de producto: los diseñadores pasan menos tiempo en decisiones repetitivas y más tiempo en los problemas complejos; los desarrolladores implementan con mayor velocidad y consistencia; el producto tiene menos inconsistencias que afectan a la experiencia del usuario. La arquitectura correcta del design system es lo que permite que escale de 2 equipos a 20 sin convertirse en un cuello de botella.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Design system leads y product designers que quieren diseñar la arquitectura de tokens y componentes y comunicar el valor del sistema al negocio',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Arquitectura del proceso de ventas y stack tecnológico con IA: diseñar el motor comercial que escala',
                'description'       => 'Guía para sales operations y directores comerciales que quieren usar IA para diseñar un proceso de ventas que escala, seleccionar el stack tecnológico correcto y eliminar la fricción que frena a los AEs.',
                'prompt_content'    => <<<'EOT'
Eres un Head de Sales Operations con más de 10 años diseñando procesos de ventas y arquitecturas de CRM para equipos comerciales B2B. Has construido desde cero el proceso de ventas de startups que pasaron de 0 a 10M de ARR y has reingeniería procesos comerciales en empresas con equipos de 100+ AEs. Sabes que el proceso de ventas correcto multiplica al equipo; el proceso incorrecto lo frena aunque tengas a los mejores vendedores del sector.

Hoy vas a ayudarme a diseñar la arquitectura del proceso de ventas usando IA como herramienta de análisis y diseño.

**Contexto de mi situación:**
- Modelo de ventas: [self-serve / inside sales / field sales / PLG + sales / enterprise]
- Tamaño del equipo: [SDRs / AEs / SEs / CSMs]
- CRM actual: [Salesforce / HubSpot / Pipedrive / Dynamics / otro / ninguno]
- Principal ineficiencia del proceso actual: [pipeline sucio / ciclo de venta demasiado largo / AEs dedicando tiempo a tareas administrativas / falta de visibilidad del management / conversión baja en una etapa específica]

---

## 1. Diagnóstico del proceso de ventas actual: mapear las fricciones antes de optimizar

```
Actúa como un sales operations architect. El proceso de ventas actual de mi empresa es: [descripción de las etapas, los criterios de avance entre etapas y los actores involucrados].

Los síntomas de ineficiencia que observo:
- Tiempo promedio en cada etapa: [datos si los tienes]
- Etapa donde más oportunidades se pierden: [descripción]
- Tiempo de los AEs dedicado a tareas no de venta: [% estimado]
- Calidad de los datos en el CRM: [descripción honesta]

Analiza y dime:
1. Los cuellos de botella del proceso actual ordenados por impacto en el revenue
2. Las fricciones artificiales que el proceso introduce (pasos que no añaden valor al comprador)
3. Las etapas del funnel que necesitan criterios de entrada y salida más claros
4. El tiempo perdido en actividades administrativas que la automatización podría eliminar
5. La salud real del pipeline vs. la salud aparente (cómo el pipeline sucio distorsiona el forecast)
```

---

## 2. Diseño del proceso de ventas objetivo: el proceso que escala

```
Quiero rediseñar el proceso de ventas para soportar el crecimiento de [descripción del objetivo: de X a Y AEs / de X a Y de ARR / expansión a nuevos segmentos].

Los principios que quiero que guíen el nuevo proceso:
- [Velocidad del ciclo de venta / calidad del pipeline / consistencia entre AEs / visibilidad del management / experiencia del comprador]

Las restricciones:
- CRM y herramientas que no puedo cambiar: [lista]
- Tiempo de implementación disponible: [descripción]
- Resistencia al cambio del equipo: [descripción]

Diseña el proceso de ventas que incluya:
1. Las etapas del pipeline con sus definiciones precisas (criterios de entrada y salida verificables, no subjetivos)
2. Las actividades obligatorias en cada etapa (qué debe haber ocurrido para mover una oportunidad)
3. Los handoffs entre SDR y AE, y entre AE y CSM: qué información se transfiere y cómo
4. Los criterios de descalificación en cada etapa (cuándo sacar una oportunidad del pipeline con velocidad)
5. El ritmo comercial: la cadencia de reuniones, reviews y reportes que mantiene el proceso vivo
```

---

## 3. Arquitectura del stack tecnológico de ventas: del CRM al ecosistema completo

```
Necesito diseñar el stack tecnológico de ventas para mi equipo. El objetivo es: [eliminar trabajo manual / mejorar la visibilidad del pipeline / acelerar el ciclo de venta / mejorar el coaching / etc.].

El presupuesto disponible para el stack: [importe mensual/anual]
El tamaño del equipo que usará las herramientas: [número]
La madurez técnica del equipo de sales: [muy técnico / intermedio / necesita herramientas muy simples]
Las integraciones críticas: [con qué sistemas debe conectarse el stack de ventas]

Diseña el stack que incluya:
1. El CRM como núcleo y los criterios para elegir entre las opciones del mercado para mi caso
2. Las herramientas de sales engagement (secuencias, outreach) y cómo se integran con el CRM
3. Las herramientas de inteligencia de ventas y enriquecimiento de datos
4. Las herramientas de conversation intelligence para coaching
5. La capa de reporting y forecasting
6. Los criterios para decidir cuándo una nueva herramienta vale su coste (el test de ROI del stack de ventas)
```

---

## 4. Diseño del CRM: la estructura de datos que soporta el proceso

```
Necesito diseñar (o rediseñar) la estructura del CRM para que soporte el proceso de ventas correcto. El CRM es [nombre].

El modelo de datos actual y sus problemas: [descripción]
Lo que el equipo de ventas necesita ver para gestionar su pipeline: [descripción]
Lo que el management necesita ver para el forecast y el coaching: [descripción]
Las integraciones que alimentan el CRM: [lista: marketing automation / billing / producto / soporte]

Diseña la arquitectura del CRM que incluya:
1. El modelo de datos: objetos principales, sus atributos clave y las relaciones entre ellos
2. Las etapas del pipeline con sus criterios de entrada verificables en el CRM
3. Los campos obligatorios vs. opcionales por etapa (menos es más en adopción del CRM)
4. Las automatizaciones de mayor impacto para reducir el trabajo manual del AE
5. El dashboard de gestión para el sales manager que permite el coaching basado en datos
```

---

## 5. Medición de la salud del proceso: las métricas que importan

```
Quiero construir el sistema de métricas del proceso de ventas que me permita identificar problemas antes de que impacten en el revenue.

El objetivo del sistema de métricas: [identificar dónde pierdo oportunidades / medir la eficiencia del proceso / coaching individual de AEs / forecast más preciso]
Los datos disponibles actualmente: [descripción]
La audiencia de los dashboards: [sales manager / VP de ventas / CEO / equipo de AEs]

Diseña el sistema de métricas que incluya:
1. Las métricas de actividad que predicen el pipeline (leading indicators)
2. Las métricas de pipeline que predicen el revenue (lagging indicators)
3. Las conversion rates por etapa y cómo interpretarlas (cuándo una conversión baja es un problema vs. una señal de mejor cualificación)
4. El velocity del pipeline: la fórmula de pipeline velocity y cómo usarla para el forecast
5. Las métricas de calidad del proceso (limpieza del CRM, adopción de las etapas, cobertura de los campos obligatorios)
```

---

## Resultado esperado

Un proceso de ventas bien diseñado y soportado por el stack tecnológico correcto puede aumentar la productividad de los AEs en un 20-40% sin contratar a nadie nuevo. La diferencia entre un equipo comercial que alcanza el número y uno que siempre se queda corto suele estar en la claridad del proceso, la calidad de los datos y la visibilidad que tiene el management para intervenir en el momento correcto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Sales operations y directores comerciales que quieren diseñar el proceso de ventas y el stack tecnológico que escalan con el equipo',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Arquitectura de producto y sistemas de toma de decisiones con IA: del backlog al sistema que aprende',
                'description'       => 'Framework para product managers y CPOs que quieren diseñar la arquitectura de decisión del producto: cómo estructurar el discovery, el roadmap y los sistemas de experimentación que convierten el aprendizaje en ventaja competitiva.',
                'prompt_content'    => <<<'EOT'
Eres un Chief Product Officer con más de 12 años liderando organizaciones de producto en empresas de tecnología de rápido crecimiento. Has construido sistemas de discovery, roadmap y experimentación que transformaron organizaciones de producto lentas y orientadas a features en organizaciones de producto rápidas y orientadas a outcomes. Sabes que la mayoría de los problemas de producto no son de creatividad ni de talento — son de arquitectura del sistema de decisión.

Hoy vas a ayudarme a diseñar la arquitectura de decisión del producto usando IA como herramienta de diseño y validación.

**Contexto de mi situación:**
- Etapa del producto: [0-to-1 / crecimiento / madurez / pivote]
- Tamaño de la organización de producto: [PMs, diseñadores, researchers, data analysts]
- Principal disfunción actual: [el roadmap lo dictan las ventas / no tenemos evidencia para decidir / demasiados proyectos, ninguno terminado / no aprendemos de los experimentos / el discovery no informa el roadmap]
- Stack de herramientas actual: [Jira / Linear / Notion / Amplitude / Mixpanel / etc.]

---

## 1. Diagnóstico del sistema de decisión actual: dónde se rompe la cadena

```
Actúa como un product systems architect. El proceso de toma de decisiones de producto en mi organización funciona así: [descripción del proceso actual desde la identificación de un problema hasta que se convierte en código en producción].

Los síntomas de que el sistema no funciona bien:
- Lo que decide el roadmap en realidad: [ventas / CEO / intuición del PM / HiPPO / datos reales]
- Tiempo promedio desde identificar un problema de usuario hasta tener algo en producción: [semanas/meses]
- Tasa de experimentos que aprenden algo útil (vs. que no concluyen nada): [estimación]
- Nivel de confianza del equipo en las decisiones de priorización: [muy bajo / bajo / medio / alto]

Analiza y dime:
1. Los puntos de rotura del sistema de decisión actual (dónde la evidencia se pierde o se ignora)
2. Los sesgos cognitivos más frecuentes que afectan las decisiones de priorización en organizaciones como la mía
3. Las fricciones que hacen que el equipo evite el discovery riguroso (porque tarda demasiado, porque no se percibe su valor, etc.)
4. Si el problema principal es de proceso, de cultura, de herramientas o de liderazgo
5. El cambio de mayor impacto que podría hacer en los próximos 30 días para mejorar la calidad de las decisiones
```

---

## 2. Diseño del sistema de discovery: evidencia que informa el roadmap

```
Quiero diseñar un sistema de discovery que genere evidencia real para las decisiones de producto, no que sea un ritual que consume tiempo sin impactar el roadmap.

Los tipos de preguntas que el discovery debe responder: [¿qué problemas tienen los usuarios? / ¿esta solución funciona? / ¿por qué los usuarios abandonan? / ¿qué segmento tiene más potencial?]
Los recursos disponibles para discovery: [número de researchers / UX designers / PMs / data analysts]
El tiempo que puedo dedicar a discovery sin frenar la entrega: [descripción]
La evidencia que actualmente ignoramos porque no tenemos sistema para capturarla: [descripción]

Diseña el sistema de discovery que incluya:
1. El ritmo de discovery continuo (cómo el equipo mantiene un flujo constante de evidencia sin proyectos de research de 3 meses)
2. Los métodos de research por tipo de pregunta (cuándo usar entrevistas, surveys, análisis de datos, experimentos)
3. El sistema de gestión del conocimiento de usuario (cómo el aprendizaje de hoy informa las decisiones de mañana)
4. El proceso de síntesis: cómo los hallazgos de discovery se convierten en decisiones de roadmap (no en informes que nadie lee)
5. Cómo involucrar al equipo de ingeniería en el discovery para que la solución sea más implementable
```

---

## 3. Arquitectura del roadmap: de la lista de features al sistema de aprendizaje

```
Quiero diseñar la arquitectura del roadmap que balancee el corto plazo (lo que el negocio necesita ahora) con el largo plazo (la visión del producto) y que sea transparente y comprensible para todos los stakeholders.

Los horizontes de tiempo que necesito gestionar: [próximos 30 días / próximo trimestre / próximos 12 meses]
Los stakeholders que ejercen más presión sobre el roadmap: [ventas / CEO / clientes específicos / ingeniería]
El nivel de certeza de las iniciativas a largo plazo: [muy bajo, son hipótesis / medio, tenemos evidencia parcial / alto, estamos seguros]

Diseña la arquitectura del roadmap que incluya:
1. El modelo de roadmap por outcomes (no por features) con ejemplos concretos para mi tipo de producto
2. Los diferentes niveles de detalle y certeza según el horizonte temporal
3. El proceso de revisión del roadmap: con qué frecuencia, con quién y qué puede hacer que una iniciativa entre, salga o cambie de prioridad
4. Cómo comunicar el roadmap a diferentes audiencias (equipo de ingeniería / stakeholders de negocio / clientes / inversores)
5. Las reglas de priorización explícitas que el equipo puede usar cuando yo no estoy
```

---

## 4. Sistema de experimentación: el motor de aprendizaje del producto

```
Quiero construir el sistema de experimentación que convierta cada lanzamiento en una oportunidad de aprendizaje y que mejore la velocidad de toma de decisiones basadas en datos.

El estado actual de la experimentación: [no hacemos experimentos / hacemos A/B tests básicos / tenemos infraestructura pero no cultura / tenemos un equipo de experimentación pero el resto no participa]
Las restricciones técnicas para experimentar: [descripción del sistema de feature flags, analytics, etc.]
El volumen de tráfico o usuarios que permite estadística significativa: [descripción]

Diseña el sistema de experimentación que incluya:
1. El framework de diseño de experimentos (hipótesis / métrica primaria / métricas guardianas / tamaño de muestra / duración)
2. El proceso de priorización de qué experimentos hacer (no todos los experimentos merecen el mismo esfuerzo)
3. La infraestructura mínima necesaria para empezar a experimentar de forma válida estadísticamente
4. El proceso de aprendizaje compartido: cómo los resultados de los experimentos se convierten en conocimiento del equipo
5. Cómo construir la cultura de experimentación cuando el equipo tiene miedo de los resultados negativos
```

---

## 5. Métricas del sistema de producto: medir la salud del sistema de decisión

```
Quiero medir la salud del sistema de producto, no solo los resultados del producto. Necesito saber si el sistema que hemos construido está generando mejores decisiones.

Las métricas del producto que ya monitorizamos: [lista]
Lo que queremos aprender pero no sabemos cómo medir: [descripción]

Diseña el sistema de métricas del proceso de producto que incluya:
1. La velocidad del discovery: tiempo desde que identificamos un problema hasta que tenemos suficiente evidencia para decidir
2. La calidad de las hipótesis: % de experimentos que validan la hipótesis vs. que la refutan (y cómo interpretar cada ratio)
3. La alineación estratégica del roadmap: % de la capacidad invertida en iniciativas estratégicas vs. mantenimiento vs. requests puntuales
4. El impacto del equipo de producto en las métricas de negocio (más allá de las métricas de producto)
5. La velocidad de aprendizaje del equipo: cuánto más rápido tomamos decisiones ahora vs. hace 6 meses
```

---

## Resultado esperado

Una organización de producto con un sistema de decisión bien diseñado aprende más rápido que la competencia. No se trata de tener el mejor talento o el mayor presupuesto — se trata de construir el sistema que convierte la incertidumbre en aprendizaje de forma más eficiente que nadie. El producto ganador en la mayoría de los mercados no es el que tuvo la mejor idea inicial, sino el que aprendió más rápido a qué idea apostar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'CPOs y product managers que quieren diseñar el sistema de discovery, roadmap y experimentación que convierte el aprendizaje en ventaja competitiva',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Arquitectura de sistemas de personas y HR tech con IA: el stack tecnológico de RRHH que escala',
                'description'       => 'Framework para CHROs y People Operations que quieren usar IA para diseñar la arquitectura de sistemas de personas: desde el ATS hasta el HRIS, construyendo el stack que elimina fricciones y genera datos accionables.',
                'prompt_content'    => <<<'EOT'
Eres un Chief People Officer con amplia experiencia diseñando sistemas de HR tech para empresas de tecnología en fase de crecimiento. Has construido stacks de personas desde cero y has modernizado sistemas heredados que eran más un obstáculo que una herramienta. Sabes que el mayor problema de la mayoría de los departamentos de RRHH no es la falta de herramientas — es tener demasiadas herramientas que no se hablan entre sí, generando trabajo manual, datos inconsistentes y una experiencia del empleado fragmentada.

Hoy vas a ayudarme a diseñar la arquitectura de sistemas de personas usando IA como herramienta de diseño y validación.

**Contexto de mi situación:**
- Tamaño de la empresa: [empleados actuales y proyección a 12-18 meses]
- Número de personas en el equipo de HR: [personas y sus roles]
- Stack de HR tech actual: [lista de herramientas: ATS / HRIS / nómina / onboarding / performance / L&D / etc.]
- Principal dolor con los sistemas actuales: [trabajo manual / datos inconsistentes entre herramientas / mala experiencia del empleado / falta de datos para decisiones / coste elevado]

---

## 1. Auditoría del stack de HR tech actual: mapear antes de añadir o cambiar

```
Actúa como un HR systems architect. El stack de HR tech actual de mi empresa es: [lista de herramientas con su función y número de usuarios].

El mapa de cómo fluye la información entre herramientas: [descripción de las integraciones actuales o su ausencia]
Las fricciones más frecuentes que reporta el equipo de RRHH: [lista]
Las fricciones más frecuentes que reportan los empleados: [lista]
El tiempo de trabajo manual dedicado a tareas que deberían ser automatizables: [descripción]

Analiza y dime:
1. Los silos de datos más críticos (dónde la información existe pero no fluye a donde se necesita)
2. Las duplicaciones de datos entre herramientas (y el riesgo de inconsistencia que generan)
3. Los procesos de HR que generan más fricción y que el stack actual no resuelve
4. Si el problema principal es de herramientas, de integraciones o de procesos mal definidos
5. Las 3 mejoras de mayor impacto que podría hacer en el stack sin cambiar las herramientas principales
```

---

## 2. Diseño del HRIS como núcleo del sistema de personas

```
El HRIS (Human Resources Information System) es el centro del stack de personas. Todo lo demás debe conectarse a él como fuente de verdad del dato de empleado.

El HRIS actual (o el que estoy considerando): [nombre o "estamos evaluando opciones"]
Los datos del empleado que necesito gestionar: [contratación / posición / compensación / desempeño / formación / offboarding]
Las jurisdicciones y regulaciones que aplican: [España / UE / LATAM / global]
Las integraciones críticas: [nómina / beneficios / IT provisioning / Active Directory / herramientas de productiivdad]

Diseña la arquitectura del HRIS que incluya:
1. El modelo de datos del empleado: qué atributos son críticos, cuáles son opcionales y cuáles son sensibles
2. Las integraciones core que el HRIS debe tener desde el día 1
3. El flujo de datos del ciclo de vida del empleado (desde la oferta aceptada hasta el offboarding)
4. Los criterios para elegir entre los principales HRIS del mercado según mi contexto específico
5. La estrategia de migración de datos si vengo de un sistema anterior o de hojas de cálculo
```

---

## 3. Arquitectura del proceso de hiring: del ATS a la experiencia del candidato

```
Quiero diseñar la arquitectura del proceso de hiring que soporte el volumen de contrataciones de los próximos 12 meses: [número y tipos de posiciones].

El ATS actual o en evaluación: [nombre]
El proceso de entrevistas actual: [descripción de las etapas]
Las fricciones que generan abandono de candidatos: [descripción]
Las ineficiencias del proceso para el equipo interno: [descripción]

Diseña la arquitectura de hiring que incluya:
1. Las etapas del proceso con sus criterios de avance verificables (no subjetivos)
2. El scorecard de evaluación estandarizado por rol que hace comparable la evaluación entre entrevistadores
3. Las automatizaciones del ATS que mejoran la experiencia del candidato sin perder el toque humano
4. Las integraciones entre el ATS y el HRIS (para que el dato de contratación fluya sin fricción)
5. Las métricas del proceso de hiring: time-to-fill, quality of hire, candidate NPS, source efficiency
```

---

## 4. People analytics: del dato de RRHH al insight de negocio

```
Quiero construir la capacidad de people analytics que permita tomar decisiones de personas fundamentadas en datos.

Los datos de personas disponibles actualmente: [descripción]
Las preguntas de negocio que no puedo responder porque no tengo los datos o el análisis: [lista]
La madurez analítica del equipo de RRHH: [sin experiencia analítica / un analista / equipo de people analytics]
Las herramientas de BI disponibles: [Tableau / Looker / Power BI / Google Data Studio / etc.]

Diseña el sistema de people analytics que incluya:
1. El modelo de datos de personas unificado (cómo consolidar datos de múltiples fuentes en un data warehouse o data lake)
2. Los dashboards de people analytics para diferentes audiencias (CHRO / CEO / hiring managers / empleados)
3. Los análisis de mayor valor para el negocio: predicción de rotación, análisis de compensación, efectividad de contratación
4. El proceso de governance de datos de personas (privacidad, acceso, retención según GDPR y regulaciones locales)
5. El roadmap de madurez analítica: de los informes básicos a los modelos predictivos
```

---

## 5. Employee experience: diseñar los momentos que importan desde los sistemas

```
La arquitectura de sistemas de personas debe soportar una experiencia del empleado coherente en los momentos más críticos del ciclo de vida: el primer día, las revisiones de desempeño, los ascensos, el offboarding.

Los momentos del ciclo de vida del empleado que generan más fricción actualmente: [lista]
Los sistemas involucrados en cada momento crítico: [descripción]
Lo que queremos que sienta el empleado en cada momento: [descripción]

Diseña la arquitectura de employee experience que incluya:
1. El journey del empleado mapeado con los sistemas que tocan en cada etapa
2. Los momentos de mayor impacto en la experiencia y cómo los sistemas actuales los habilitan o los sabotean
3. Las automatizaciones y notificaciones que mejoran la experiencia sin aumentar el trabajo del equipo de RRHH
4. Cómo medir la calidad de la experiencia del empleado en los momentos críticos
5. El plan de mejora priorizado por impacto y viabilidad técnica
```

---

## Resultado esperado

Un stack de HR tech bien diseñado convierte al equipo de RRHH de gestores de procesos manuales en arquitectos de la experiencia del empleado y asesores estratégicos del negocio. Cuando los sistemas fluyen correctamente, el equipo de personas puede dedicar su tiempo a las conversaciones y decisiones que solo los humanos pueden hacer bien, en lugar de a la administración que los sistemas deberían hacer solos.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'CHROs y People Operations que quieren diseñar el stack de HR tech que elimina fricciones, genera datos accionables y mejora la experiencia del empleado',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Arquitectura de sistemas financieros y data pipelines con IA: del dato contable al insight estratégico',
                'description'       => 'Framework para CFOs y finance ops que quieren usar IA para diseñar la arquitectura de datos financieros: integración de fuentes, automatización del closing y construcción de la capa analítica que informa decisiones de negocio.',
                'prompt_content'    => <<<'EOT'
Eres un VP de Finance Operations con más de 12 años diseñando sistemas financieros para empresas de tecnología y servicios con entre 50 y 2.000 empleados. Has construido arquitecturas financieras desde hojas de cálculo hasta sistemas ERP de nivel enterprise, has migrado datos contables sin perder un solo asiento y has diseñado pipelines de datos que convirtieron el reporting financiero de un proceso de 10 días a uno de 2 días.

Hoy vas a ayudarme a diseñar la arquitectura de sistemas financieros usando IA como herramienta de diseño y validación.

**Contexto de mi situación:**
- Tipo de empresa: [SaaS / e-commerce / servicios profesionales / manufactura]
- Volumen de transacciones: [facturación anual / número de facturas al mes / número de asientos contables]
- Stack financiero actual: [ERP / contabilidad / facturación / expenses / treasury / BI]
- Principal dolor: [cierre mensual lento / datos financieros en silos / forecast manual e impreciso / falta de visibilidad del cash en tiempo real / reporting para inversores consume demasiado tiempo]

---

## 1. Diagnóstico del stack financiero actual: mapear los flujos de datos

```
Actúa como un finance systems architect. El stack financiero de mi empresa incluye: [lista de herramientas con su función: ERP / facturación / gastos / nómina / banca / BI].

El flujo de datos entre herramientas: [descripción de las integraciones y los procesos manuales entre ellas]
Los pasos del cierre mensual con su duración: [descripción del proceso actual con tiempos]
Las conciliaciones manuales más frecuentes: [lista]
Los datos financieros que existen pero que no están disponibles cuando se necesitan: [descripción]

Analiza y dime:
1. Los cuellos de botella del proceso de cierre ordenados por impacto en el tiempo total
2. Los riesgos de error más frecuentes en el flujo de datos actual
3. Los procesos manuales que son prioritarios para automatizar
4. La calidad de los datos financieros como base para el análisis estratégico (¿se puede confiar en ellos?)
5. El nivel de madurez del sistema financiero y qué requeriría subir al siguiente nivel
```

---

## 2. Diseño de la arquitectura de datos financieros: del ERP al data warehouse

```
Quiero diseñar la arquitectura de datos financieros que permita tanto la contabilidad precisa como el análisis estratégico en tiempo real.

Las fuentes de datos financieros que necesito integrar: [lista: ERP / facturación / pagos / nómina / banca / CRM para revenue / plataformas de suscripción]
Los consumidores de los datos financieros: [equipo de finanzas / CEO / inversores / board / equipos de negocio]
Los casos de uso analíticos más importantes: [forecast / cash flow / análisis de unit economics / reporting para inversores]

Diseña la arquitectura que incluya:
1. La capa de ingesta: cómo los datos de cada fuente llegan al sistema central (integración en tiempo real vs. batch, frecuencia de actualización)
2. La capa de transformación: cómo los datos crudos se convierten en métricas financieras confiables
3. El modelo de datos financiero: el esquema que soporta tanto el reporting GAAP como el análisis de negocio
4. La capa de análisis: qué herramienta de BI para qué audiencia y por qué
5. La governance de datos financieros: quién puede ver qué y cómo se asegura la integridad de los datos
```

---

## 3. Automatización del cierre mensual: reducir de 10 días a 3

```
El cierre mensual actual tarda [X días] y consume [descripción de los recursos del equipo]. Quiero reducirlo significativamente sin aumentar el riesgo de error.

El proceso de cierre actual paso a paso: [descripción detallada]
Los pasos que más tiempo consumen: [lista con tiempos estimados]
Los pasos donde el riesgo de error es más alto: [lista]
Las herramientas disponibles para la automatización: [descripción]

Diseña el plan de automatización del cierre que incluya:
1. Los pasos que se pueden automatizar completamente (sin revisión humana una vez validados)
2. Los pasos que se pueden semi-automatizar (la máquina hace el trabajo, el humano revisa)
3. Los pasos que siempre requieren juicio humano y por qué
4. La implementación por fases: qué automatizar primero para el mayor impacto con el menor riesgo
5. Las métricas del cierre: cómo medir si el nuevo proceso es más rápido y más preciso
```

---

## 4. Sistema de forecasting financiero: del Excel al modelo que el negocio confía

```
Quiero construir el sistema de forecasting financiero que reemplace el Excel de 50 pestañas que nadie mantiene correctamente. El forecast debe soportar:
- Frecuencia de actualización: [mensual / semanal / en tiempo real]
- Horizontes: [mes actual / trimestre / año / 3 años]
- Granularidad: [por departamento / por línea de producto / por geografía / por canal]

Los drivers del negocio que deben alimentar el modelo: [lista: headcount / pipeline de ventas / churn / precios / costes variables]
Las herramientas disponibles para construir el modelo: [descripción]

Diseña el sistema de forecasting que incluya:
1. La arquitectura del modelo financiero: qué es un input, qué es un driver, qué es un output
2. Cómo conectar los datos operativos del negocio (pipeline de CRM, headcount de HRIS) al modelo financiero
3. El proceso de actualización del forecast (quién actualiza qué, con qué frecuencia, con qué nivel de revisión)
4. Cómo presentar el forecast a diferentes audiencias (CEO, board, inversores)
5. Las señales de alerta temprana: cuándo el modelo indica que el forecast se está desviando
```

---

## 5. Reporting para inversores: el sistema que hace el fundraising más rápido

```
Necesito construir el sistema de reporting para inversores que haga más eficiente el proceso de fundraising y la gestión de inversores actuales.

Los inversores que reporto: [número, tipo: VC / PE / angels / deuda]
La frecuencia y formato de reporting actual: [descripción]
El tiempo que consume preparar el reporting: [horas por mes]
Las métricas que los inversores siempre piden y que tardo en calcular: [lista]

Diseña el sistema de reporting para inversores que incluya:
1. El data room estructurado: qué documentos, con qué formato y actualización
2. El informe mensual para inversores: estructura, métricas obligatorias y formato
3. Cómo automatizar la extracción de métricas del stack financiero al informe
4. El proceso de preparación para due diligence: cómo estar siempre listo en menos de 2 semanas
5. Las métricas que los inversores de tu sector valoran más y cómo calcularlas de forma reproducible
```

---

## Resultado esperado

Una arquitectura financiera bien diseñada transforma al equipo de finanzas de guardián de los números a arquitecto del crecimiento. Cuando los datos fluyen correctamente desde las operaciones hasta el análisis estratégico, el CFO puede dedicar su tiempo a las decisiones que importan en lugar de a perseguir datos y reconciliar hojas de cálculo. La calidad de la arquitectura financiera suele ser la diferencia entre el CFO que el board ve como un reportero y el que ve como un socio estratégico.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'CFOs y finance ops que quieren diseñar la arquitectura de datos financieros que automatiza el cierre y genera insights estratégicos en tiempo real',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Arquitectura de sistemas de gestión jurídica con IA: del caos de documentos al departamento legal que escala',
                'description'       => 'Framework para General Counsel y legal ops que quieren usar IA para diseñar la arquitectura de los sistemas jurídicos: gestión de contratos, knowledge management y automatización que multiplica la capacidad del equipo sin crecer en headcount.',
                'prompt_content'    => <<<'EOT'
Eres un Head of Legal Operations con más de 10 años diseñando sistemas jurídicos para departamentos legales de empresas de tecnología, fintech y servicios globales. Has transformado equipos legales reactivos que vivían en su bandeja de entrada en departamentos proactivos con sistemas que escalan. Sabes que la mayoría de los departamentos legales no tienen un problema de talento — tienen un problema de arquitectura de sistemas que hace que el trabajo de alto valor quede enterrado bajo el volumen de trabajo operativo.

Hoy vas a ayudarme a diseñar la arquitectura de sistemas jurídicos usando IA como herramienta de diseño y análisis.

**Contexto de mi situación:**
- Tamaño del equipo jurídico: [abogados internos / paralegales / legal ops]
- Volumen de trabajo: [contratos al mes / jurisdicciones / tipos de asuntos principales]
- Stack jurídico actual: [CLM / gestión documental / e-signature / matter management / herramientas de productividad]
- Principal dolor: [volumen de contratos inmanejable / conocimiento jurídico en silos / tiempo del GC en tareas operativas / falta de visibilidad del portfolio de contratos / mala experiencia de los clientes internos]

---

## 1. Diagnóstico del sistema jurídico actual: mapear el flujo de trabajo legal

```
Actúa como un legal systems architect. El flujo de trabajo jurídico de mi departamento es: [descripción del proceso desde que llega una solicitud hasta que se resuelve, con los actores y herramientas involucrados].

Los tipos de trabajo más frecuentes: [contratos comerciales / revisión de NDAs / asesoramiento regulatorio / litigación / compliance / M&A]
Las fricciones más frecuentes: [descripción de los cuellos de botella, el trabajo duplicado, la búsqueda de precedentes, etc.]
Cómo los clientes internos (negocio) perciben al departamento jurídico: [descripción honesta]
El tiempo del equipo distribuido por tipo de trabajo: [% estimado en trabajo de alto valor vs. trabajo operativo]

Analiza y dime:
1. Los procesos que consumen más tiempo del equipo con menor valor añadido
2. Los puntos de rotura donde el conocimiento jurídico se pierde o se duplica
3. Las solicitudes del negocio que el equipo jurídico podría resolver con self-service si existiera el sistema
4. La arquitectura de sistemas mínima viable que transformaría la eficiencia del departamento
5. El orden de prioridad de las mejoras con el mayor impacto en la capacidad del equipo
```

---

## 2. Sistema de gestión de contratos (CLM): de la carpeta de SharePoint al sistema que funciona

```
Quiero diseñar o mejorar el sistema de gestión del ciclo de vida de contratos (CLM). Los requisitos son:

Tipos de contratos que gestiono: [lista con volumen aproximado mensual]
El proceso actual de cada tipo de contrato (desde la solicitud hasta la firma y archivo): [descripción]
Las integraciones necesarias: [CRM / firma electrónica / ERP / sistemas de gestión de proyectos]
Los requisitos de compliance y retención: [descripción por jurisdicción si aplica]

Diseña el sistema CLM que incluya:
1. El modelo de datos del contrato: qué metadatos capturar para que el portfolio sea gestionable
2. El workflow de aprobación por tipo de contrato (con los niveles de delegación de autoridad)
3. Las plantillas y playbooks de posición para los contratos más frecuentes (qué siempre aceptamos, qué siempre rechazamos, qué negociamos)
4. Las automatizaciones de mayor impacto: alertas de vencimiento, renovaciones automáticas, dashboards de portfolio
5. El proceso de onboarding al sistema para el equipo jurídico y los clientes internos
```

---

## 3. Knowledge management jurídico: el sistema que captura lo que sabe el equipo

```
El conocimiento jurídico de mi departamento está en la cabeza de las personas y en emails que nadie puede encontrar. Quiero diseñar un sistema que capture ese conocimiento y lo haga accesible.

Los tipos de conocimiento que necesito capturar: [precedentes de negociación / análisis de regulaciones / respuestas a preguntas frecuentes del negocio / criterios de posición / casos resueltos]
Las herramientas disponibles para el knowledge base: [Notion / Confluence / SharePoint / plataforma especializada]
El número de personas que crearán y usarán el knowledge base: [descripción]
El obstáculo principal para que el equipo documente: [tiempo / cultura / no saben qué documentar]

Diseña el sistema de knowledge management que incluya:
1. La taxonomía del conocimiento jurídico: cómo organizar para que se pueda encontrar (no para que parezca ordenado)
2. El proceso de captura que no depende de la voluntad individual: cuándo y cómo se documenta como parte del proceso, no como tarea adicional
3. El sistema de acceso diferenciado: qué pueden ver los clientes internos vs. qué es solo para el equipo jurídico
4. El proceso de mantenimiento: cómo el knowledge base se mantiene actualizado sin una tarea de mantenimiento masiva
5. Cómo medir si el knowledge base está siendo usado y si está siendo útil
```

---

## 4. Self-service jurídico para el negocio: descongestionar el equipo legal

```
Quiero diseñar un sistema de self-service que permita a los clientes internos (negocio, ventas, RRHH, producto) resolver sus necesidades jurídicas más frecuentes sin necesitar al equipo legal directamente.

Los tipos de solicitudes más frecuentes del negocio: [lista con volumen aproximado]
Las solicitudes que podría resolver el negocio solo con el sistema correcto: [descripción]
Las solicitudes que siempre requieren revisión del equipo jurídico: [lista]
El riesgo de dar demasiado self-service: [descripción de los errores que podrían cometer sin supervisión]

Diseña el sistema de self-service que incluya:
1. El árbol de decisión para clasificar solicitudes: self-service / asistido / revisión completa
2. Los formularios de solicitud que capturan el contexto correcto desde el primer momento
3. Las plantillas de contratos de bajo riesgo que el negocio puede usar directamente (con las salvaguardas correctas)
4. El sistema de escalación: cómo el negocio sabe cuándo necesita al equipo jurídico
5. Las métricas del self-service: volumen de solicitudes desviadas, tiempo de resolución, errores detectados
```

---

## 5. Métricas del departamento jurídico: demostrar el valor en lenguaje de negocio

```
Quiero construir el sistema de métricas del departamento jurídico que demuestre el valor del equipo al CEO y al board, más allá de "estamos ocupados".

El tipo de reportes que actualmente genera el equipo jurídico: [descripción]
Las métricas que el CEO o el CFO ya piden: [lista]
Lo que el equipo jurídico hace que impacta en el negocio pero que no se mide: [descripción]

Diseña el sistema de métricas que incluya:
1. Las métricas de eficiencia operativa: tiempo de ciclo por tipo de contrato, capacidad del equipo, backlog
2. Las métricas de riesgo gestionado: exposición legal evitada, incumplimientos prevenidos, ahorro en costes de litigación
3. Las métricas de impacto en el negocio: velocidad de cierre de contratos, tiempo de go-to-market no jurídico, satisfacción del cliente interno
4. El dashboard ejecutivo mensual para el GC que presentar al CEO
5. Cómo construir la narrativa de valor del departamento jurídico con datos
```

---

## Resultado esperado

Un departamento jurídico con una arquitectura de sistemas correcta puede duplicar su capacidad sin doblar el headcount. Cuando el conocimiento fluye, los contratos se gestionan sistemáticamente y el negocio puede resolver por sí solo las cuestiones jurídicas de bajo riesgo, el equipo legal puede concentrarse en el trabajo de alto valor: las decisiones estratégicas, las negociaciones complejas y la gestión del riesgo que solo los abogados experimentados pueden hacer bien.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'General Counsel y legal ops que quieren diseñar los sistemas de gestión de contratos y conocimiento jurídico que multiplican la capacidad del equipo',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Arquitectura de sistemas de Customer Success con IA: del caos de cuentas al motor de retención que escala',
                'description'       => 'Framework para VP de Customer Success que quieren usar IA para diseñar la arquitectura del sistema de CS: tech stack, health scoring, playbooks y procesos que escalan con el crecimiento del equipo y del ARR.',
                'prompt_content'    => <<<'EOT'
Eres un VP de Customer Success Operations con más de 10 años diseñando sistemas de CS para empresas SaaS B2B con ARR entre 5M y 200M. Has construido desde cero el stack tecnológico de CS de startups en hipercrecimiento y has reingeniería sistemas de CS en empresas con cientos de CSMs. Sabes que el mayor cuello de botella del CS en crecimiento no es la falta de talento — es la falta de sistemas que permitan escalar sin que la calidad del servicio caiga con cada nueva contratación.

Hoy vas a ayudarme a diseñar la arquitectura del sistema de Customer Success usando IA como herramienta de diseño y validación.

**Contexto de mi situación:**
- ARR gestionado: [importe y número de clientes]
- Segmentación de clientes: [enterprise / mid-market / SMB y su distribución]
- Tamaño del equipo de CS: [CSMs, CS ops, support]
- Stack tecnológico de CS actual: [CRM / plataforma de CS / herramienta de adoption analytics / herramienta de comunicación con cliente]
- Principal dolor: [CSMs sin visibilidad del estado real de sus cuentas / health scoring manual / playbooks que nadie sigue / escaladas reactivas / falta de datos de uso del producto]

---

## 1. Diagnóstico del sistema de CS actual: mapear los flujos de datos y trabajo

```
Actúa como un CS systems architect. El sistema de CS actual funciona así: [descripción de cómo los CSMs gestionan sus cuentas, qué herramientas usan, qué datos tienen disponibles y qué hacen manualmente].

Los datos del cliente que tengo disponibles: [uso del producto / tickets de soporte / NPS/CSAT / interacciones del CSM / datos de contrato y facturación]
Los datos que necesito pero no tengo: [descripción]
El tiempo del CSM distribuido por tipo de actividad: [% en tareas administrativas vs. conversaciones de valor con clientes]
Los síntomas de que el sistema no escala: [descripción]

Analiza y dime:
1. Los datos más críticos que faltan para gestionar el riesgo de churn de forma proactiva
2. Las tareas del CSM que son automatizables sin perder el valor de la relación humana
3. Los playbooks que existen informalmente (en la cabeza de los mejores CSMs) pero que no están documentados
4. La calidad del health scoring actual y qué lo haría más predictivo
5. El sistema mínimo viable que transformaría la eficiencia del equipo de CS
```

---

## 2. Diseño del health scoring: el modelo que predice el churn antes de que el cliente lo sepa

```
Quiero diseñar el modelo de health scoring de cliente que sea predictivo, accionable y confiable.

Los datos disponibles para el health score: [lista de variables con su fuente: uso del producto por feature / tickets de soporte / NPS / interacciones del CSM / datos de contrato / cambios en el contacto principal]
Los patrones de churn que he observado: [descripción de las señales que preceden a la cancelación]
Los segmentos de cliente: [descripción]
El CRM o plataforma de CS que implementará el health score: [nombre]

Diseña el modelo de health scoring que incluya:
1. Las variables del health score con su peso relativo y la justificación de cada peso
2. Los thresholds de cada variable que determinan si contribuye positiva o negativamente al score
3. La fórmula de aggregación del score (ponderada, condicional, basada en percentiles)
4. Los umbrales de alerta (verde / amarillo / rojo) con el protocolo de acción para cada nivel
5. El proceso de validación y calibración del modelo: cómo sabremos si el health score es predictivo
```

---

## 3. Arquitectura del playbook de CS: sistematizar lo que hacen los mejores CSMs

```
Quiero construir el sistema de playbooks de CS que permita que un CSM nuevo produzca resultados similares a los mejores CSMs del equipo en menos tiempo.

Los tipos de situaciones que los playbooks deben cubrir: [onboarding / expansión / renovación / churn prevention / escalada / QBR / EBR]
Lo que los mejores CSMs hacen en cada situación que los demás no hacen: [descripción]
Las herramientas disponibles para documentar y activar los playbooks: [CRM / plataforma de CS / otro]
El nivel de detalle que los CSMs aceptarán seguir: [muy prescriptivo vs. solo directrices]

Diseña la arquitectura de playbooks que incluya:
1. La estructura de cada playbook: triggers de activación, objetivo, pasos, recursos, métricas de éxito
2. Los playbooks de mayor impacto que hay que construir primero
3. Cómo los playbooks se activan automáticamente desde el health score o el CRM
4. El proceso de actualización de los playbooks (cómo incorporan el aprendizaje de los CSMs)
5. Las métricas de efectividad de cada playbook
```

---

## 4. Tech stack de CS: las herramientas correctas para cada etapa de crecimiento

```
Quiero evaluar y optimizar el tech stack de CS para soportar el crecimiento de [descripción del objetivo: de X a Y cuentas / de X a Y ARR / expansión a enterprise].

Las herramientas de CS que estoy evaluando o ya tengo: [lista]
Las integraciones críticas: [con producto para datos de uso / con CRM de ventas / con soporte / con finanzas para datos de contrato]
El presupuesto disponible para el stack de CS: [importe mensual/anual por CSM]
Las capacidades que me faltan con el stack actual: [descripción]

Diseña el stack de CS que incluya:
1. La plataforma de CS core y los criterios para elegir entre las opciones del mercado
2. La capa de datos de uso del producto: cómo los datos de adopción llegan al CSM en tiempo real
3. Las herramientas de comunicación con el cliente que automatizan sin perder el toque personal
4. La capa de reporting: qué dashboard para el CSM, para el CS manager y para el VP
5. El roadmap de implementación del stack: en qué orden implementar las herramientas para el mayor impacto con el menor disruption
```

---

## 5. Operaciones de CS: el ritmo operativo que mantiene el sistema vivo

```
El mejor sistema de CS falla si no existe el ritmo operativo que lo mantiene vivo. Quiero diseñar el sistema de operaciones de CS que asegure que los playbooks se siguen, el health scoring se revisa y las escaladas se gestionan.

El tamaño y estructura actual del equipo: [descripción]
Los rituales operativos que ya tenemos: [descripción]
Las decisiones que actualmente se toman de forma inconsistente entre CSMs: [lista]
El reporting interno de CS que genera el equipo: [descripción]

Diseña el sistema de operaciones de CS que incluya:
1. La cadencia operativa semanal del equipo de CS (qué reuniones, con qué objetivo, quién debe estar)
2. El proceso de revisión de portfolio: cómo cada CSM revisa sistemáticamente el estado de sus cuentas
3. El proceso de escalada interna: cuándo y cómo un CSM escala una cuenta al manager o al VCS
4. El QBR interno de CS: cómo el equipo revisa el rendimiento del sistema mensual y trimestralmente
5. Las métricas operativas del equipo de CS que el VP debe revisar semanalmente
```

---

## Resultado esperado

Un sistema de Customer Success bien diseñado es la diferencia entre el equipo de CS que corre detrás del churn y el que lo previene antes de que ocurra. Cuando el health scoring es predictivo, los playbooks son accionables y el stack tecnológico fluye correctamente, los CSMs pueden gestionar más cuentas con mayor calidad y el VP de CS puede gestionar el equipo con datos en lugar de intuición.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'VP de Customer Success que quieren diseñar el health scoring, el stack tecnológico y los playbooks que convierten el CS en un motor de retención escalable',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Diseño de sistemas de negocio freelance con IA: arquitectura operativa del negocio independiente que escala',
                'description'       => 'Framework para freelancers senior que quieren usar IA para diseñar los sistemas operativos de su negocio: gestión de clientes, delivery de proyectos, facturación y marketing que funcionen sin depender de su atención constante.',
                'prompt_content'    => <<<'EOT'
Eres un consultor independiente con más de 10 años construyendo un negocio freelance de alto valor. Has aprendido la diferencia entre trabajar en el negocio (hacer el trabajo del cliente) y trabajar en el negocio (construir los sistemas que lo hacen funcionar). Sin sistemas, el freelancer senior que gana bien sigue siendo un esclavo de su agenda; con sistemas, puede tener más clientes, mejor calidad de vida y un negocio que genera valor incluso cuando no está trabajando activamente.

Hoy vas a ayudarme a diseñar la arquitectura operativa del negocio freelance usando IA como herramienta de diseño y validación.

**Contexto de mi situación:**
- Especialidad: [tipo de expertise y servicios que ofreces]
- Tipo de clientes: [tamaño, sector, cómo te encuentran actualmente]
- Número de proyectos activos simultáneamente: [número]
- Principal problema operativo: [gestión del tiempo / comunicación con clientes / facturación y cobro / marketing y captación / calidad inconsistente de los entregables]
- Objetivo del rediseño: [tener más clientes / trabajar menos horas / mejorar los márgenes / preparar para escalar con un equipo]

---

## 1. Diagnóstico del sistema operativo actual: mapear cómo funciona el negocio realmente

```
Actúa como un business systems architect especializado en negocios de servicios independientes. Voy a describir cómo funciona mi negocio ahora mismo:

Proceso de captación de clientes: [descripción desde el primer contacto hasta la firma del contrato]
Proceso de entrega de proyectos: [descripción de cómo gestiono cada proyecto desde el kickoff hasta la entrega final]
Proceso de facturación y cobro: [descripción de cuándo y cómo facturo, cómo gestiono los retrasos de pago]
Proceso de marketing y posicionamiento: [descripción de cómo genero visibilidad y oportunidades]

Herramientas que uso actualmente: [lista]

Analiza y dime:
1. Los sistemas que funcionan bien y que no debo cambiar
2. Los cuellos de botella que más limitan mi capacidad de crecimiento o mi calidad de vida
3. Las áreas donde dependo demasiado de mi atención directa y que podrían sistematizarse
4. Los riesgos operativos más altos de mi negocio actual (qué pasa si me pongo enfermo, si un cliente no paga, si termino todos los proyectos a la vez)
5. El sistema de mayor impacto que debería construir primero
```

---

## 2. Sistema de gestión de clientes: del caos de emails al proceso replicable

```
Quiero diseñar el sistema de gestión de clientes que haga consistente la experiencia del cliente sin que yo tenga que reinventar el proceso en cada nuevo proyecto.

El ciclo de vida del cliente en mi negocio: [desde el primer contacto hasta el cierre del proyecto y la posible renovación]
Los momentos del proceso donde pierdo más tiempo o donde la experiencia del cliente es más inconsistente: [descripción]
Las herramientas disponibles: [CRM / herramienta de proyectos / email / etc.]

Diseña el sistema de gestión de clientes que incluya:
1. El proceso de onboarding estandarizado: los primeros 7 días de cualquier proyecto nuevo (qué documentación recogen, qué expectativas establezco, qué entregables tienen en la primera semana)
2. El ritmo de comunicación durante el proyecto: con qué frecuencia, en qué formato, quién inicia
3. El sistema de gestión de solicitudes adicionales (scope creep): cómo las capturo, cómo las evalúo, cómo las comunico al cliente
4. El proceso de cierre de proyecto: qué entrego, cómo cierro la relación, cómo solicito testimonios y referencias
5. El sistema de seguimiento post-proyecto para mantener la relación y generar proyectos futuros
```

---

## 3. Sistema de delivery: replicar la calidad sin reinventar cada proyecto

```
Quiero diseñar el sistema de delivery que asegure una calidad consistente en todos mis proyectos sin empezar desde cero cada vez.

Los tipos de proyectos más frecuentes: [lista con descripción]
Los entregables estándar de cada tipo: [descripción]
Las partes del proceso que más varían entre proyectos: [descripción]
Lo que los clientes más valoran de mi trabajo: [descripción]

Diseña el sistema de delivery que incluya:
1. Las plantillas de entregables para cada tipo de proyecto (no para que el trabajo sea genérico — para que la estructura sea consistente)
2. El proceso de control de calidad interno: cómo reviso mi propio trabajo antes de entregarlo al cliente
3. El sistema de documentación del proyecto: qué queda registrado, dónde y cómo se organiza
4. Las checklists de cierre de proyecto para asegurar que no olvido nada crítico
5. Cómo reutilizar el aprendizaje de cada proyecto para mejorar el siguiente (sin violar la confidencialidad del cliente)
```

---

## 4. Sistema de marketing personal: la máquina de visibilidad que funciona sin atención constante

```
Quiero diseñar el sistema de marketing que genera visibilidad y oportunidades sin que sea mi ocupación a tiempo completo. Mi especialidad es [descripción] y mi cliente ideal es [descripción].

El tiempo disponible para marketing: [horas por semana / mes]
Los canales que ya he probado o que tienen más potencial para mi nicho: [lista]
Lo que me diferencia de otros profesionales en mi área: [descripción]
Los tipos de contenido que mejor me resultan crear: [artículos / posts / videos / podcasts / newsletters / talleres]

Diseña el sistema de marketing que incluya:
1. La estrategia de contenido de 90 días que establece autoridad en el nicho con el mínimo esfuerzo
2. El proceso de creación de contenido que convierte una idea en múltiples formatos (un artículo largo → posts de LinkedIn → newsletter → posiblemente un webinar)
3. El sistema de gestión de la red de contactos: cómo mantengo vivas las relaciones con potenciales clientes y fuentes de referidos
4. El proceso de seguimiento de oportunidades: desde el primer contacto hasta la propuesta enviada
5. Las métricas del sistema de marketing que me dicen si está funcionando sin obsesionarme con los números
```

---

## 5. Sistema financiero del freelance: facturar, cobrar y planificar sin estrés

```
Quiero diseñar el sistema financiero del negocio freelance que asegure que cobro en tiempo, tengo visibilidad del flujo de caja y puedo planificar el negocio con datos.

La estructura de precios actual: [por hora / por proyecto / retainer / mixta]
El proceso de facturación actual: [descripción, herramientas, frecuencia]
Los problemas de cobro más frecuentes: [retrasos / disputas / clientes que no pagan]
El nivel de planificación financiera del negocio: [vivo al día / tengo algo de visibilidad / tengo un sistema]

Diseña el sistema financiero que incluya:
1. La estructura de propuestas y contratos que protege el flujo de caja (anticipos, hitos, condiciones de pago)
2. El proceso de facturación automatizado: cuándo se genera, cómo se envía, cómo se hace el seguimiento
3. El sistema de planificación del pipeline de ingresos: cómo sé cuántos ingresos tengo asegurados para los próximos 3 meses
4. El proceso de gestión de impagos: los pasos, las herramientas y los límites que nunca cruzaré por mantener una relación
5. La planificación fiscal básica del freelance: provisiones, ahorro, timing de gastos para optimizar la carga fiscal
```

---

## Resultado esperado

Un negocio freelance con sistemas operativos bien diseñados puede doblar su capacidad de facturación sin doblar las horas trabajadas. La diferencia entre el freelancer que trabaja para sobrevivir y el que trabaja para crecer es que el segundo ha invertido tiempo en construir los sistemas que hacen que el negocio funcione incluso cuando él no está. La arquitectura operativa del negocio freelance es el activo más importante que un independiente puede construir.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Freelancers senior que quieren diseñar los sistemas operativos de su negocio para escalar sin sacrificar calidad ni calidad de vida',
                'vote_score'        => 41,
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
