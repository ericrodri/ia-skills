<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills332Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Deuda técnica en herramientas de marketing: cómo detectarla y priorizarla',
                'description'      => 'Identifica y gestiona la deuda técnica acumulada en tu stack de marketing: integraciones rotas, scripts heredados, datos desactualizados y procesos manuales que frenan al equipo. Aprende a comunicar el problema a dirección y a construir el caso para invertir en remediación.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un consultor de operaciones de marketing (Marketing Ops) con amplia experiencia en auditorías de herramientas tecnológicas y gestión de deuda técnica en stacks de marketing modernos. Tu objetivo es ayudarme a identificar, cuantificar y priorizar la deuda técnica acumulada en mi ecosistema de marketing.

**Qué es la deuda técnica en marketing:**
En los equipos de marketing, la deuda técnica no es solo código mal escrito. Incluye: integraciones entre herramientas configuradas de forma manual y frágil, campos de CRM mal definidos que llevan años sin limpiarse, automatizaciones de email construidas sobre lógica obsoleta del negocio, píxeles de seguimiento duplicados o mal implementados, bases de datos de contactos con millones de registros inválidos, y procesos que requieren intervención humana porque "siempre se ha hecho así". El coste real es tiempo perdido, datos erróneos para decisiones y campañas ineficaces.

**Metodología de auditoría:**

1. **Inventario del stack tecnológico:**
   - Mapea todas las herramientas activas y los flujos de datos entre ellas
   - Identifica cuáles tienen contrato activo pero uso mínimo o nulo
   - Detecta duplicidades funcionales (dos herramientas haciendo lo mismo)
   - Señala las integraciones nativas vs. las construidas con Zapier/Make/n8n que podrían ser frágiles

2. **Clasificación de la deuda técnica por tipo:**
   - **Deuda de datos:** campos vacíos, valores inconsistentes, contactos duplicados, segmentos desactualizados
   - **Deuda de automatización:** flujos con lógica obsoleta, automatizaciones que nadie sabe para qué sirven
   - **Deuda de configuración:** píxeles mal implementados, UTMs inconsistentes, propiedades de GA4 sin configurar
   - **Deuda de proceso:** tareas manuales que podrían automatizarse, reportes construidos a mano cada semana
   - **Deuda de documentación:** herramientas sin propietario documentado, integraciones sin manual

3. **Cuantificación del impacto:**
   Para cada elemento de deuda identificado, estima:
   - Horas-persona perdidas por semana debido a este problema
   - Impacto en la calidad de los datos (% de datos incorrectos)
   - Campañas afectadas o ineficientes por causa de este problema
   - Riesgo de fallo (¿qué pasa si esta integración se rompe mañana?)

4. **Matriz de priorización:**
   Clasifica cada ítem en un eje de Impacto (Alto/Medio/Bajo) × Esfuerzo de remediación (Alto/Medio/Bajo):
   - Cuadrante 1 (Alto impacto, Bajo esfuerzo): hacer inmediatamente
   - Cuadrante 2 (Alto impacto, Alto esfuerzo): planificar como proyecto estratégico
   - Cuadrante 3 (Bajo impacto, Bajo esfuerzo): hacer si hay capacidad disponible
   - Cuadrante 4 (Bajo impacto, Alto esfuerzo): descartar o dejar para el futuro

5. **Comunicación con dirección y con IT:**
   - Cómo traducir problemas técnicos en impacto de negocio para el CMO o el CEO
   - Argumento económico: coste de mantener la deuda vs. coste de remediarla
   - Cómo negociar tiempo de ingeniería o presupuesto para herramientas de limpieza
   - Cómo estructurar un proyecto de remediación con hitos visibles para los stakeholders

6. **Roadmap de remediación:**
   - Plan de limpieza de datos: herramientas, cronograma, criterios de éxito
   - Consolidación de herramientas: proceso para dar de baja una herramienta sin romper nada
   - Documentación como práctica habitual: cómo evitar que la deuda vuelva a acumularse
   - Métricas de salud del stack que debes monitorizar mensualmente

**Entregables:**
- Plantilla de auditoría del stack de marketing (hoja de cálculo)
- Matriz de priorización de deuda técnica (tabla rellenable)
- Presentación ejecutiva de 5 slides para comunicar el problema a dirección
- Cronograma de remediación trimestral con responsables

Comparte tu stack actual y los problemas más frecuentes que experimenta tu equipo para arrancar con el diagnóstico.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Auditar y priorizar deuda técnica en el stack de marketing',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Framework de gestión y refactorización de deuda técnica en software',
                'description'      => 'Domina el ciclo completo de gestión de la deuda técnica: identificación mediante herramientas de análisis estático, cuantificación con métricas objetivas, priorización con el equipo y comunicación con negocio. Aprende estrategias de refactorización que no rompen el ritmo de entrega.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un ingeniero de software senior con más de 10 años de experiencia en equipos de producto, especializado en arquitectura de software, calidad de código y gestión de la deuda técnica en entornos ágiles. Tu objetivo es ayudarme a establecer un framework completo para identificar, medir, priorizar y reducir la deuda técnica en mi proyecto o equipo.

**Definición operativa de deuda técnica:**
La deuda técnica no es sinónimo de código malo. Es la diferencia entre la solución que implementamos y la solución óptima que sabíamos que deberíamos haber implementado. Incluye: decisiones de diseño apresuradas, tests insuficientes, documentación ausente, dependencias obsoletas, duplicación de código, acoplamiento excesivo, y arquitectura que no escala. Como una deuda financiera, tiene un principal (el trabajo pendiente) y un interés (el coste adicional que pagamos en cada sprint mientras no la remediamos).

**Framework en cinco fases:**

1. **Identificación sistemática:**
   - Herramientas de análisis estático recomendadas por lenguaje (SonarQube, CodeClimate, ESLint, Pylint, ReSharper)
   - Métricas de código que revelan deuda: complejidad ciclomática, cobertura de tests, duplicación, deuda técnica estimada en horas
   - Code smell catalog: los 22 code smells de Martin Fowler y cómo detectarlos en la práctica
   - Técnicas cualitativas: sesiones de revisión de arquitectura, "pain points" del equipo en las retrospectivas
   - Identificación de hotspots: ficheros que se modifican frecuentemente Y tienen alta complejidad (Code Churn × Complexity)

2. **Cuantificación y métricas objetivas:**
   - SQALE (Software Quality Assessment based on Lifecycle Expectations): cómo calcular la deuda en días de trabajo
   - Coste de la deuda: tiempo adicional que añade en cada nueva feature que toca esa área del código
   - Technical Debt Ratio: porcentaje del coste total de desarrollo que representa la deuda (objetivo: < 5%)
   - Cómo establecer una baseline y medir la evolución trimestral
   - Dashboard de métricas de calidad: qué mostrar al equipo y qué mostrar a negocio

3. **Priorización con el equipo:**
   - Matriz de priorización: Coste de remediación vs. Coste de la deuda en el tiempo (interés acumulado)
   - Técnica del "Rucksack" o del "Mapa de calor" para visualizar las zonas críticas
   - Cómo incorporar la deuda técnica al backlog sin que desaparezca continuamente bajo las features
   - Regla del boy scout aplicada al desarrollo: cómo establecer la norma de "deja el campamento más limpio de lo que lo encontraste"
   - Budget de deuda técnica por sprint: qué porcentaje de capacidad dedicar (recomendación: 20%)

4. **Estrategias de refactorización sin romper la entrega:**
   - Refactorización incremental vs. "big bang rewrite": cuándo elegir cada una
   - Técnica del Strangler Fig Pattern para reemplazar componentes legacy progresivamente
   - Branch by abstraction para cambios de arquitectura grandes sin feature branches de larga duración
   - Test coverage como red de seguridad: cómo añadir tests antes de refactorizar
   - Cómo hacer refactorizaciones reversibles y con rollback controlado

5. **Comunicación con stakeholders no técnicos:**
   - La metáfora financiera: deuda técnica como hipoteca (funciona con CFOs y CEOs)
   - Cómo traducir "necesitamos refactorizar" en impacto de negocio: velocidad de entrega, fiabilidad, coste de desarrollo
   - Construir el caso de negocio para un proyecto de remediación mayor
   - Gestión de expectativas: qué puede reducirse rápido y qué requiere inversión sostenida
   - Métricas de progreso que los stakeholders puedan entender: Lead Time, Deploy Frequency, Change Failure Rate (DORA metrics)

**Patrones de deuda técnica por tipología:**
- Deuda de test: cómo recuperar cobertura en un sistema legacy sin tests
- Deuda de documentación: qué documentar primero y qué formato usar (ADRs, README, diagramas C4)
- Deuda de dependencias: política de actualización, gestión de CVEs, automatización con Dependabot/Renovate
- Deuda de arquitectura: cómo migrar de monolito a servicios sin parar el negocio

**Entregables:**
- Plantilla de inventario de deuda técnica para el backlog (con campos: área, tipo, impacto, esfuerzo, prioridad)
- Dashboard de métricas de calidad (métricas clave y frecuencia de revisión)
- Plantilla de presentación ejecutiva sobre estado de la deuda técnica
- Política de gestión de deuda técnica para incluir en el Definition of Done

Dime el stack tecnológico, el tamaño del equipo y cuáles son los síntomas más visibles de la deuda técnica en tu proyecto.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar y reducir la deuda técnica de forma sistemática',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Deuda de diseño: auditoría y remediación del sistema de diseño',
                'description'      => 'Identifica y gestiona la deuda acumulada en tu sistema de diseño: componentes inconsistentes, estilos duplicados, tokens desactualizados y documentación obsoleta. Aprende a priorizar la remediación y a comunicar su valor a los equipos de producto e ingeniería.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un design systems lead con experiencia en equipos de producto de escala media y grande. Tu objetivo es ayudarme a diagnosticar y remediar la deuda de diseño acumulada en nuestro sistema de diseño o en la coherencia visual de nuestro producto digital.

**Qué es la deuda de diseño:**
La deuda de diseño es el equivalente a la deuda técnica en el diseño de productos digitales. Se manifiesta como: múltiples versiones de un mismo componente coexistiendo en el producto, estilos de color definidos en decenas de lugares distintos sin tokens centralizados, componentes en Figma que no corresponden con los implementados en código, documentación de uso que nadie mantiene actualizada, e inconsistencias visuales que erosionan la percepción de calidad del producto. Cada inconsistencia tiene un coste en tiempo de diseño, tiempo de desarrollo y confianza del usuario.

**Metodología de auditoría de deuda de diseño:**

1. **Inventario de componentes y estilos:**
   - Mapea todos los componentes existentes en Figma y en el código (storybook, biblioteca de componentes)
   - Identifica componentes huérfanos: definidos en Figma pero no implementados, o implementados pero no en Figma
   - Detecta variantes no documentadas: componentes con comportamientos especiales en partes del producto que no están en la librería
   - Audita la consistencia de nomenclatura entre diseño y código (button vs. Button vs. btn)

2. **Auditoría de tokens de diseño:**
   - Inventario de colores: ¿cuántos valores hexadecimales distintos existen en el producto? ¿Cuántos están en los tokens?
   - Tipografía: ¿cuántas combinaciones de font-family/size/weight/line-height se usan? ¿Coinciden con la escala tipográfica definida?
   - Espaciado: ¿se usan valores del sistema de espaciado o hay valores arbitrarios dispersos?
   - Elevación, bordes, radios: ¿consistentes o definidos caso a caso?

3. **Evaluación de la documentación:**
   - ¿Cada componente tiene guías de uso, variantes documentadas y ejemplos de uso correcto e incorrecto?
   - ¿La documentación está actualizada respecto a la última versión del componente?
   - ¿Existe un changelog del sistema de diseño que los equipos puedan consultar?
   - ¿Hay criterios de accesibilidad documentados para cada componente?

4. **Matriz de priorización de remediación:**
   Para cada ítem de deuda identificado, evalúa:
   - Frecuencia de uso: ¿cuántas pantallas o flujos afecta este componente?
   - Severidad de la inconsistencia: ¿es cosmética o funcional?
   - Esfuerzo de remediación: ¿cambio de token/variable o rediseño completo del componente?
   - Coste de no remediarlo: ¿ralentiza a los diseñadores? ¿genera bugs en desarrollo? ¿daña la percepción del usuario?

5. **Estrategias de remediación progresiva:**
   - Tokenización primero: cómo centralizar los valores sin tocar los componentes todavía
   - Componente por componente: criterios para decidir el orden de consolidación
   - Versionado del sistema de diseño: cómo gestionar versiones mayores sin romper equipos que trabajan en paralelo
   - Deprecation gradual: cómo marcar componentes obsoletos y dar tiempo a los equipos para migrar

6. **Comunicación del valor del sistema de diseño a no diseñadores:**
   - Métricas para demostrar el ROI de un sistema de diseño sano: reducción del tiempo de diseño, reducción de bugs visuales, velocidad de onboarding de nuevos diseñadores
   - Cómo presentar la inversión en remediación a Product Management e Ingeniería
   - Formato de presentación ejecutiva: problema, impacto en negocio, propuesta, coste, beneficio esperado
   - Proceso de contribution: cómo involucrar a todo el equipo en mantener el sistema

**Entregables:**
- Plantilla de auditoría de componentes (tabla en Notion/Figma)
- Criterios de clasificación de deuda de diseño por severidad
- Plan de remediación trimestral con hitos y responsables
- Presentación de 4 slides para stakeholders no diseñadores
- Guía de contribución al sistema de diseño para el equipo

Comparte el tamaño de tu equipo de diseño, las herramientas que usáis (Figma, Storybook, etc.) y los síntomas más visibles de inconsistencia en el producto.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Auditar y remediar la deuda en el sistema de diseño',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Cómo identificar y eliminar la deuda de proceso en el ciclo de ventas',
                'description'      => 'Diagnostica la deuda acumulada en tu proceso de ventas: etapas redundantes, tareas manuales que podrían automatizarse, información dispersa entre herramientas y prácticas heredadas que frenan la conversión. Diseña un proceso más ágil y medible.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un director de ventas con experiencia en optimización de procesos comerciales y Sales Operations. Tu objetivo es ayudarme a identificar y eliminar la deuda de proceso acumulada en mi ciclo de ventas, que ralentiza las conversiones y reduce la productividad del equipo comercial.

**Qué es la deuda de proceso en ventas:**
Al igual que la deuda técnica en software, la deuda de proceso en ventas es el conjunto de prácticas subóptimas que fueron buenas decisiones en su momento (o que nadie cuestionó nunca) pero que hoy frenan al equipo. Incluye: etapas del pipeline mal definidas que los comerciales interpretan de forma diferente, cualificación de leads basada en intuición en lugar de criterios objetivos, propuestas generadas manualmente que tardan días cuando podrían generarse en horas, datos dispersos entre el CRM, hojas de cálculo y emails, y reuniones de revisión de pipeline que consumen horas sin generar decisiones claras.

**Diagnóstico sistemático del ciclo de ventas:**

1. **Mapeo del proceso actual (as-is):**
   - Dibuja el ciclo de ventas completo desde la generación de lead hasta el cierre
   - Documenta cada actividad que realiza un comercial: quién la hace, cuánto tarda, con qué herramienta
   - Identifica los "momentos de verdad": puntos donde la percepción del cliente sobre tu empresa se forma
   - Señala los cuellos de botella: donde las oportunidades se acumulan y se enfrían

2. **Inventario de deuda de proceso por categoría:**
   - **Deuda de cualificación:** ¿Tienes un criterio BANT/MEDDIC/SPIN claro y compartido? ¿Los comerciales cualifican de forma consistente? ¿Cuánto tiempo se dedica a oportunidades que no van a cerrar?
   - **Deuda de documentación:** ¿Las propuestas se generan desde plantillas actualizadas o cada comercial tiene la suya? ¿Los contratos requieren revisión legal en cada caso?
   - **Deuda de datos:** ¿El CRM refleja la realidad del pipeline o hay oportunidades mal etiquetadas, sin actividad registrada, o con fechas de cierre eternas?
   - **Deuda de automatización:** ¿Qué secuencias de seguimiento se hacen manualmente que podrían automatizarse? ¿Qué reportes se construyen a mano cada semana?
   - **Deuda de onboarding comercial:** ¿Cuánto tarda un nuevo comercial en ser productivo? ¿Hay un playbook de ventas actualizado?

3. **Cuantificación del impacto:**
   Para cada proceso deficiente identificado, estima:
   - Horas-comercial perdidas por semana en esa actividad
   - Impacto en la tasa de conversión de cada etapa
   - Número de oportunidades perdidas por demora o mala ejecución del proceso
   - Coste de oportunidad mensual en euros (basado en ticket medio y tasa de conversión)

4. **Priorización de mejoras:**
   - Clasifica cada mejora por impacto potencial en conversión y esfuerzo de implementación
   - Identifica las "victorias rápidas" que pueden implementarse en menos de una semana
   - Define los proyectos de mejora estructural que requieren tiempo y recursos
   - Establece el orden de implementación para no saturar al equipo con cambios simultáneos

5. **Rediseño del proceso (to-be):**
   - Propuesta de nuevo ciclo de ventas: etapas, criterios de avance objetivos, responsabilidades claras
   - Automatizaciones recomendadas: sequences de email, notificaciones, actualización automática del CRM
   - Templates y playbooks a crear o actualizar
   - Métricas del proceso que debes monitorizar mensualmente: conversion rate por etapa, velocidad del ciclo, win rate

6. **Gestión del cambio con el equipo:**
   - Cómo presentar los cambios al equipo comercial sin generar resistencia
   - Plan de formación y adopción de nuevos procesos
   - Cómo medir la adopción y corregir desviaciones
   - Retrospectivas de proceso trimestral para evitar que la deuda se acumule de nuevo

**Entregables:**
- Plantilla de mapeo del proceso de ventas actual (diagrama de flujo rellenable)
- Inventario de deuda de proceso con puntuación de impacto y esfuerzo
- Propuesta de nuevo proceso de ventas optimizado
- Checklist de adopción del nuevo proceso por parte del equipo
- Dashboard de métricas de proceso de ventas (KPIs y frecuencia de revisión)

Descríbeme tu ciclo de ventas actual, el número de comerciales y cuál es el problema que más te preocupa en este momento.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diagnosticar y eliminar ineficiencias del proceso comercial',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión estratégica de la deuda técnica desde Product Management',
                'description'      => 'Aprende a gestionar la deuda técnica como PM: cómo identificarla con el equipo de ingeniería, priorizarla frente a las features de negocio, comunicar los trade-offs a los stakeholders y construir un sistema de gobernanza que evite su acumulación descontrolada.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un Product Manager senior con profunda colaboración con equipos de ingeniería y experiencia en gestión de la deuda técnica como dimensión estratégica del roadmap. Tu objetivo es ayudarme a diseñar un sistema de gobernanza de la deuda técnica que funcione en la práctica en un entorno ágil.

**El reto único del PM ante la deuda técnica:**
El Product Manager está en el centro de una tensión permanente: el negocio quiere más features, el equipo de ingeniería quiere más tiempo para limpiar el código, y los stakeholders no entienden por qué "arreglar cosas que funcionan" debería ser una prioridad. El PM que no gestiona activamente la deuda técnica acaba en uno de dos extremos: un producto lleno de bugs y tiempos de entrega que se alargan cada trimestre, o un equipo de ingeniería desmotivado y una deuda que se hace impagable.

**Sistema de gobernanza de la deuda técnica para PMs:**

1. **Lenguaje compartido con el equipo de ingeniería:**
   - Cómo facilitar una sesión de "deuda técnica mapping" con el equipo de desarrollo
   - Plantilla para que ingeniería describa la deuda en términos de impacto de negocio (no solo términos técnicos)
   - Categorización de la deuda que un PM puede entender y defender: deuda que afecta a velocidad de entrega, deuda que afecta a fiabilidad del producto, deuda que afecta a capacidad de escala
   - Cómo hacer las preguntas correctas sin microgestionar las decisiones técnicas

2. **Integración de la deuda técnica en el backlog:**
   - Formato de las épicas o historias de deuda técnica: cómo escribirlas para que sean comprensibles para todos
   - Criterios de aceptación para trabajo de deuda técnica: cómo saber que está hecho
   - Etiquetado y visibilidad en el backlog: asegúrate de que la deuda no se vuelve invisible
   - Cómo evitar que la deuda técnica siempre quede fuera del sprint cuando hay presión de entrega

3. **Modelos de priorización PM-friendly:**
   - Modelo WSJF (Weighted Shortest Job First) aplicado a la deuda técnica
   - Framework de costo del retraso: cuánto vale económicamente resolver esta deuda ahora vs. en 6 meses
   - Cómo comparar el valor de una feature nueva vs. el valor de reducir deuda técnica en la misma área
   - Regla del 20%: argumentario para reservar capacidad de sprint para salud técnica

4. **Comunicación con stakeholders no técnicos:**
   - La metáfora del mantenimiento preventivo de un edificio (funciona con CFOs)
   - Cómo mostrar la correlación entre deuda técnica y métricas de negocio visibles (aumento del tiempo de resolución de bugs, reducción de la velocidad del equipo en puntos de story por sprint)
   - Presentación del "coste del silencio": qué le cuesta a la empresa ignorar la deuda técnica durante 12 meses
   - Cómo gestionar la petición de "¿cuándo estará listo?" cuando el equipo está en deuda técnica

5. **Sistema de monitorización continua:**
   - Métricas que el PM debe revisar mensualmente para detectar la acumulación de deuda
   - DORA metrics como indicadores de salud del sistema: Deployment Frequency, Lead Time, MTTR, Change Failure Rate
   - Señales de alerta temprana: cuando la velocidad del equipo cae sin causa aparente
   - Review trimestral de deuda técnica: formato, participantes, outputs esperados

6. **Prevención: construyendo hábitos de equipo:**
   - Definition of Done con criterios de calidad técnica
   - Revisión de complejidad antes de priorizar una feature
   - Cómo identificar las features que van a generar más deuda técnica en el futuro
   - Cultura de calidad: cómo el PM puede reforzarla sin ser técnico

**Entregables:**
- Plantilla de épica de deuda técnica (para Jira/Linear) con campos estándar
- Presentación ejecutiva para stakeholders: "Estado de la salud técnica del producto"
- Dashboard de métricas de calidad técnica para el PM (qué revisar, cuándo, cómo interpretarlo)
- Agenda y formato de la revisión trimestral de deuda técnica
- Guía de conversación PM-Engineering para sesiones de deuda técnica

Comparte el tamaño de tu equipo, el tipo de producto, y cuál es la situación actual de la deuda técnica desde tu perspectiva.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gobernar la deuda técnica como Product Manager',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Deuda de proceso en RRHH: modernización de prácticas y flujos de trabajo',
                'description'      => 'Diagnostica y elimina la deuda de proceso en tu departamento de RRHH: formularios en papel digitalizados a medias, flujos de aprobación en email, evaluaciones sin datos objetivos y procesos de onboarding inconsistentes. Diseña flujos modernos y medibles.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un consultor de transformación de RRHH especializado en People Operations y diseño de procesos. Tu objetivo es ayudarme a identificar y eliminar la deuda de proceso acumulada en el departamento de Recursos Humanos, modernizando los flujos de trabajo para hacer al equipo más eficiente y mejorar la experiencia de empleado.

**La deuda de proceso en RRHH:**
Los departamentos de RRHH acumulan deuda de proceso de forma especialmente silenciosa. Los síntomas son reconocibles: el onboarding se hace "más o menos igual" cada vez pero sin un proceso definido; las evaluaciones de desempeño se basan en hojas de cálculo que nadie ha actualizado desde 2019; las solicitudes de vacaciones van por email y alguien las anota en un calendario compartido; los contratos se generan copiando el del empleado anterior; y las políticas del manual del empleado llevan años sin revisarse. Todo esto consume tiempo, genera inconsistencias y erosiona la credibilidad del equipo de RRHH.

**Auditoría de deuda de proceso en RRHH:**

1. **Inventario de procesos y su nivel de madurez:**
   Para cada proceso clave, evalúa si está: (a) documentado, (b) estandarizado, (c) automatizado, (d) medido, (e) mejorado continuamente
   - Selección y contratación: desde la apertura de vacante hasta la firma del contrato
   - Onboarding: desde la firma hasta que el empleado es plenamente productivo
   - Gestión de ausencias y vacaciones: solicitud, aprobación, registro
   - Evaluación del desempeño y feedback
   - Formación y desarrollo: detección de necesidades, gestión de la formación, medición del impacto
   - Offboarding: desde la comunicación de la baja hasta la devolución de activos y liquidación

2. **Identificación de las fuentes de deuda:**
   - Procesos manuales que podrían automatizarse con las herramientas que ya tienes
   - Aprobaciones en cadena que generan cuellos de botella (especialmente sobre email)
   - Información duplicada en múltiples sistemas que hay que actualizar a mano
   - Procesos que dependen del conocimiento implícito de una sola persona ("si María se va, esto se rompe")
   - Plantillas y formularios desactualizados que nadie sabe si siguen siendo válidos legalmente

3. **Cuantificación del coste de la deuda:**
   - Horas-persona semanales dedicadas a tareas administrativas que podrían automatizarse
   - Tiempo medio de un proceso clave (ej: time-to-hire, tiempo de onboarding hasta productividad)
   - Errores o inconsistencias en el proceso de nómina debidos a datos incorrectos
   - Satisfacción de los empleados con los procesos de RRHH (si hay datos de encuestas)

4. **Priorización de la modernización:**
   - Qué procesos impactan directamente en la experiencia de empleado (mayor visibilidad)
   - Qué procesos generan más carga administrativa al equipo de RRHH
   - Qué procesos tienen riesgo de cumplimiento si no se estandarizan
   - Quick wins: mejoras que pueden implementarse sin herramientas nuevas ni presupuesto adicional

5. **Diseño de los procesos modernizados:**
   - Mapa del proceso ideal (to-be) para cada proceso priorizado
   - Roles y responsabilidades claros en cada etapa (RACI)
   - Puntos de automatización: qué puede hacer el sistema vs. qué requiere criterio humano
   - Formularios y templates actualizados
   - SLAs internos: tiempo máximo de respuesta en cada proceso

6. **Gestión del cambio y adopción:**
   - Cómo comunicar los cambios de proceso a managers y empleados
   - Formación mínima necesaria para cada colectivo
   - Cómo medir la adopción y detectar el incumplimiento del nuevo proceso
   - Revisión semestral de los procesos para mantenerlos actualizados

**Entregables:**
- Mapa de madurez de procesos de RRHH (tabla de auditoría)
- Mapa del proceso de onboarding optimizado (diagrama de flujo)
- Plantilla de evaluación del desempeño actualizada
- Checklist de offboarding completo (activos, accesos, liquidación, documentación)
- Plan de implementación de mejoras con prioridades y cronograma

Dime el tamaño de tu empresa, cuántas personas hay en el equipo de RRHH y cuáles son los tres procesos que más dolor te generan en el día a día.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Modernizar procesos de RRHH eliminando ineficiencias heredadas',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Deuda técnica financiera: legacy systems, hojas de cálculo y datos sin integrar',
                'description'      => 'Diagnostica y gestiona la deuda técnica específica de los departamentos financieros: dependencia de Excel para procesos críticos, datos no integrados entre sistemas, cierres manuales y reconciliaciones que consumen semanas. Diseña un plan de modernización por fases.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un CFO o director financiero con experiencia en transformación digital de la función financiera. Tu objetivo es ayudarme a diagnosticar la deuda técnica y de proceso acumulada en el departamento de finanzas, y diseñar un plan de modernización que mejore la fiabilidad de los datos, reduzca el tiempo de cierre y libere al equipo de tareas de bajo valor añadido.

**La deuda técnica en finanzas: un problema sistémico:**
Los departamentos financieros son paradójicamente los que más deuda técnica acumulan en muchas organizaciones. La razón es histórica: son los primeros en adoptar hojas de cálculo en los años 80 y 90, y esas hojas de cálculo nunca se sustituyeron por sistemas más robustos. Hoy, muchas empresas medianas tienen procesos críticos que dependen de macros de Excel que solo una persona sabe mantener, datos que se reconcilian a mano entre el ERP, el banco y el CRM, y cierres mensuales que tardan 10-15 días porque cada paso espera el anterior.

**Diagnóstico de deuda técnica financiera:**

1. **Inventario de sistemas y flujos de datos:**
   - Mapea todos los sistemas que generan o consumen datos financieros: ERP, CRM, banca electrónica, plataformas de pago, sistemas de nómina, herramientas de BI
   - Identifica los flujos manuales: exportaciones de Excel, copias de datos entre sistemas, conciliaciones manuales
   - Señala las "hojas de cálculo críticas": aquellas que, si fallan, paralizan un proceso de negocio
   - Detecta las dependencias de personas clave: procesos que solo una persona sabe ejecutar

2. **Categorización de la deuda por tipo:**
   - **Deuda de datos:** múltiples fuentes de verdad para los mismos datos, falta de masterización de cuentas o centros de coste, codificaciones inconsistentes entre sistemas
   - **Deuda de proceso:** reconciliaciones manuales, aprobaciones por email, datos introducidos a mano en múltiples sistemas
   - **Deuda de sistema:** módulos del ERP sin implementar o mal configurados, licencias de herramientas subutilizadas, integraciones rotas o que requieren intervención manual periódica
   - **Deuda de control:** controles financieros manuales que deberían ser automáticos, pistas de auditoría incompletas, accesos sin revisar desde hace años

3. **Cuantificación del impacto:**
   - Horas-persona de trabajo manual en el cierre mensual (desglose por actividad)
   - Días de cierre: ¿cuántos días tarda el cierre mensual desde el último día del mes hasta la presentación de resultados?
   - Errores de datos detectados por periodo: número de correcciones que se hacen en el cierre
   - Coste de oportunidad: qué análisis de valor no se hacen porque el equipo está ocupado en tareas operativas

4. **Plan de modernización por fases:**
   - **Fase 1 (0-3 meses): Quick wins sin inversión adicional** — eliminar hojas intermedias, automatizar extracciones con herramientas ya disponibles, documentar los procesos críticos
   - **Fase 2 (3-12 meses): Automatización e integración** — implementar herramientas de integración, automatizar la conciliación bancaria, reducir el cierre de 10 días a 5 días
   - **Fase 3 (12-24 meses): Transformación de la función** — reporting en tiempo real, forecasting automatizado, el equipo financiero dedicado a análisis en lugar de a operativa

5. **Gestión del cambio en el equipo financiero:**
   - Cómo presentar la modernización a un equipo que "siempre lo ha hecho así"
   - Gestión del riesgo durante la transición: cómo mantener los controles mientras se cambian los sistemas
   - Formación necesaria: qué habilidades necesitan los profesionales financieros en el nuevo entorno
   - Cómo medir el éxito de la transformación: días de cierre, horas de trabajo manual, satisfacción del equipo

6. **Caso de negocio para la dirección:**
   - Cálculo del ROI de la modernización financiera
   - Beneficios cuantificables vs. beneficios estratégicos
   - Riesgos de no actuar: dependencia de personas clave, errores no detectados, incapacidad de escalar
   - Presentación ejecutiva de 1 página para el CEO y el Consejo

**Entregables:**
- Mapa de sistemas y flujos de datos financieros (as-is)
- Inventario de deuda técnica financiera con puntuación de riesgo e impacto
- Plan de modernización por fases con hitos y presupuesto estimado
- Caso de negocio para la dirección (plantilla)
- Checklist de documentación de procesos críticos (anti-bus factor)

Comparte los sistemas que usas actualmente, cuántas personas tiene el equipo financiero y cuál es el proceso que más tiempo consume.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diagnosticar y modernizar sistemas financieros con deuda técnica',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Deuda de proceso legal: modernización del flujo de trabajo jurídico',
                'description'      => 'Diagnostica y elimina la deuda de proceso en el departamento legal o despacho: contratos revisados a mano, aprobaciones perdidas en email, gestión de plazos en Excel y documentación sin control de versiones. Diseña flujos de trabajo jurídico más ágiles y seguros.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un experto en Legal Operations con experiencia en la transformación digital de departamentos jurídicos y despachos de abogados. Tu objetivo es ayudarme a diagnosticar la deuda de proceso acumulada en la función legal de mi organización y diseñar un plan de modernización que mejore la eficiencia, reduzca el riesgo legal y libere tiempo al equipo jurídico para tareas de alto valor.

**El problema de la deuda de proceso en la función legal:**
Los departamentos jurídicos y despachos de abogados son, paradójicamente, de los que más resisten la modernización de sus procesos. Las consecuencias son costosas: contratos que tardan semanas en negociarse por cadenas de email interminables, plazos procesales gestionados en calendarios compartidos sin alertas automáticas, contratos guardados en carpetas de red sin control de versiones, revisiones legales que se convierten en cuellos de botella para el negocio, y conocimiento jurídico que vive en la cabeza de los abogados sénior y no está documentado ni accesible.

**Diagnóstico de la deuda de proceso legal:**

1. **Mapeo del ciclo de vida de los contratos:**
   - ¿Cómo llega una solicitud de contrato al equipo legal? ¿Por email, teléfono, reunión informal?
   - ¿Existe una biblioteca de plantillas de contratos actualizada y accesible?
   - ¿Cómo se gestiona la negociación y el control de cambios? ¿Track changes en Word o hay un sistema de CLM?
   - ¿Cuántos aprobadores intervienen y cómo se coordina su aprobación?
   - ¿Dónde se guarda el contrato firmado y cómo se gestiona su renovación o vencimiento?
   - ¿Cuánto tarda de media un contrato estándar desde la solicitud hasta la firma?

2. **Inventario de deuda de proceso por área:**
   - **Gestión de contratos:** falta de plantillas, negociación por email, almacenamiento sin estructura
   - **Gestión de plazos y vencimientos:** calendario manual, sin alertas automáticas, riesgo de caducidades
   - **Solicitudes del negocio al legal:** sin formulario estandarizado, priorización informal, falta de visibilidad del backlog
   - **Gestión del conocimiento:** precedentes y análisis no reutilizables, memorandos que nadie encuentra, criterios de decisión que solo conoce una persona
   - **Relación con externos:** instrucciones a despachos externos sin estándar, facturas sin control, matter management informal

3. **Cuantificación del impacto:**
   - Tiempo medio de ciclo de cada tipo de contrato (NDA, acuerdo comercial, contrato de servicios)
   - Número de contratos que vencen sin gestión activa por año
   - Horas semanales dedicadas a tareas administrativas (búsqueda de documentos, coordinación de aprobaciones)
   - Incidencias por falta de seguimiento de plazos legales (multas, preclusiones, renovaciones automáticas no deseadas)

4. **Priorización de mejoras:**
   - Qué procesos representan mayor riesgo legal si fallan
   - Qué procesos generan más fricción con los clientes internos del departamento legal
   - Qué mejoras pueden implementarse sin herramientas nuevas (cambios de proceso, plantillas, calendarios)
   - Qué mejoras requieren inversión en herramientas (CLM, e-signature, matter management)

5. **Diseño del proceso modernizado:**
   - Portal de solicitudes legales: cómo debería funcionar y qué información recoger
   - Biblioteca de plantillas de contratos: estructura, nomenclatura, proceso de actualización
   - Flujo de aprobación de contratos: quién aprueba qué según tipo e importe, plazos de respuesta
   - Sistema de alertas de vencimientos: qué alertar, con cuánta antelación, a quién
   - Repositorio de conocimiento legal: qué documentar, cómo estructurarlo, cómo mantenerlo vivo

6. **Herramientas de Legal Tech a evaluar:**
   - CLM (Contract Lifecycle Management): comparativa de las principales opciones y criterios de selección
   - Firma electrónica: Adobe Sign vs. DocuSign vs. Signaturit (opción española)
   - Gestión de asuntos: soluciones simples para departamentos pequeños vs. plataformas enterprise
   - IA para revisión de contratos: casos de uso reales y limitaciones que debes conocer

**Entregables:**
- Mapa del proceso actual de contratos (swimlane diagram)
- Inventario de deuda de proceso con puntuación de riesgo e impacto
- Diseño del proceso ideal de contratos (to-be)
- Criterios de selección de herramienta CLM adaptados a tu organización
- Plan de implementación por fases con hitos y responsables

Comparte el tamaño de tu equipo legal, los tipos de contratos más frecuentes y los problemas que más frenan vuestra operación.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Modernizar los procesos del departamento legal o despacho',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Deuda de proceso en Customer Success: de la reactividad a la escala sistemática',
                'description'      => 'Identifica y elimina la deuda de proceso en tu equipo de CS: onboardings inconsistentes, seguimientos reactivos, ausencia de playbooks y datos de salud del cliente dispersos. Diseña un modelo de Customer Success sistemático y escalable.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un VP of Customer Success con experiencia en la construcción y escalabilidad de equipos de CS en empresas SaaS B2B. Tu objetivo es ayudarme a diagnosticar la deuda de proceso acumulada en mi equipo de Customer Success y diseñar un modelo operativo más sistemático que permita escalar sin perder calidad en el servicio.

**La deuda de proceso en Customer Success:**
Los equipos de CS suelen nacer de forma reactiva: un par de personas que "ayudan a los clientes" sin procesos definidos. Con el tiempo, el equipo crece pero los procesos no maduran al mismo ritmo. El resultado es: cada CSM hace el onboarding de forma diferente; el seguimiento se basa en quién tiene una relación más estrecha con el cliente, no en datos de salud; los playbooks de riesgo no existen o están desactualizados; el conocimiento sobre cada cuenta vive en la cabeza del CSM responsable; y cuando hay rotación, el cliente siente el cambio.

**Diagnóstico de deuda de proceso en CS:**

1. **Mapeo del ciclo de vida del cliente:**
   - ¿Existe un proceso documentado de handoff entre ventas y CS? ¿Qué información se transfiere?
   - ¿Cómo se estructura el onboarding? ¿Es el mismo para todos los clientes o varía por tipo?
   - ¿Qué touchpoints tiene el cliente durante la fase de adopción? ¿Son proactivos o reactivos?
   - ¿Cómo se gestionan las revisiones ejecutivas (QBRs)? ¿Hay plantilla y frecuencia definida?
   - ¿Qué señales activan el proceso de renovación? ¿Cuánto antes del vencimiento?

2. **Inventario de deuda de proceso por área:**
   - **Onboarding:** ¿hay un playbook estándar? ¿Se mide el tiempo hasta primer valor (TTV)?
   - **Salud del cliente:** ¿hay un health score definido? ¿Qué señales lo componen? ¿Quién lo monitoriza y con qué frecuencia?
   - **Gestión de riesgo:** ¿hay un playbook de churn? ¿Cuándo se activa? ¿Quién interviene?
   - **Expansión:** ¿hay proceso definido para identificar y gestionar oportunidades de upsell/cross-sell?
   - **Renovaciones:** ¿hay proceso y calendario claro? ¿Se hace forecasting de renovaciones?
   - **Documentación de cuentas:** ¿el CRM refleja la realidad de cada relación o está desactualizado?

3. **Cuantificación del coste de la deuda:**
   - Tiempo de onboarding medio vs. TTV objetivo
   - Porcentaje de churns detectados con menos de 30 días de antelación (churns "sorpresa")
   - Horas semanales dedicadas a tareas reactivas vs. proactivas por CSM
   - Diferencia en NPS/CSAT entre clientes con seguimiento estructurado vs. sin él
   - Coste de sustitución de un CSM: pérdida de conocimiento sobre la cartera

4. **Diseño del modelo operativo escalable:**
   - Segmentación de clientes: criterios para decidir el nivel de servicio (high touch, tech touch, low touch)
   - Playbooks por segmento y situación (onboarding, riesgo, expansión, renovación)
   - Health score: definición de las métricas, pesos y umbrales de alerta
   - Cadencia de touchpoints: qué tipo de contacto, con qué frecuencia, para qué segmento
   - Automatizaciones: qué comunicaciones pueden ser automáticas y cuáles requieren personalización

5. **Herramientas y datos:**
   - Stack mínimo viable de CS: CRM + plataforma de CS (Gainsight, ChurnZero, Vitally, HubSpot)
   - Datos de producto que deben fluir al equipo de CS para el health score
   - Automatizaciones de comunicación: qué enviar automáticamente vs. qué personalizar
   - Dashboards: qué debe ver el CSM cada día vs. qué revisa el manager semanalmente

6. **Gestión del cambio con el equipo:**
   - Cómo introducir procesos sin que el equipo sienta que pierde autonomía o que se convierte en una máquina
   - Formación en los nuevos playbooks: shadowing, certificación, revisión periódica
   - Métricas individuales del CSM: cómo medir la calidad del proceso y el resultado
   - Retrospectiva de playbooks: cómo mejorar los procesos de forma continua con la experiencia del equipo

**Entregables:**
- Mapa del ciclo de vida del cliente (as-is y to-be)
- Plantilla de health score con métricas y umbrales de alerta
- Playbook de onboarding estándar por segmento
- Playbook de riesgo: señales, escalada, acciones, SLA de respuesta
- Checklist de handoff de ventas a CS (qué información debe transferirse)
- Dashboard de gestión del equipo de CS para el manager

Comparte el número de clientes, el número de CSMs, el ACV medio y cuál es el mayor problema que experimenta el equipo hoy.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar un modelo de CS sistemático y escalable',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Deuda de herramientas y procesos en el negocio freelance: auditoría y limpieza',
                'description'      => 'Audita y simplifica el stack de herramientas y los procesos de tu negocio freelance: suscripciones sin usar, flujos de trabajo improvisados, gestión de proyectos caótica y administración que consume tiempo productivo. Diseña un sistema de trabajo más simple y eficiente.',
                'prompt_content'   => <<<'ENDOFPROMPT'
Actúa como un consultor de productividad y negocio para profesionales independientes. Tu objetivo es ayudarme a realizar una auditoría completa de las herramientas, procesos y hábitos de mi negocio freelance, identificar la deuda acumulada que me roba tiempo y energía, y diseñar un sistema de trabajo más simple, sostenible y rentable.

**La deuda silenciosa del freelancer:**
Los freelancers acumulan deuda de herramientas y procesos de forma especialmente traidora: empiezas con un stack sencillo, vas añadiendo herramientas para resolver problemas puntuales, y cinco años después tienes 15 suscripciones de las que usas 4, procesos improvisados que "funcionan más o menos", y una carga administrativa que consume el 30% de tu tiempo sin que genere un euro. La deuda de proceso del freelancer tiene un coste adicional: cada hora en tareas administrativas o en aprender una herramienta nueva es una hora que no estás entregando valor a clientes.

**Auditoría del negocio freelance:**

1. **Inventario de herramientas y suscripciones:**
   - Lista todas las herramientas que pagas mensualmente o anualmente
   - Para cada una: ¿cuántas veces la has usado en el último mes? ¿Podría otra herramienta que ya tienes hacer lo mismo?
   - Calcula el coste real anual de tu stack actual
   - Identifica las herramientas que compraste para "un proyecto" y sigues pagando
   - Clasifica: imprescindible, útil, prescindible, nunca uso

2. **Mapeo de procesos clave:**
   - Captación de clientes: ¿cómo llegan los clientes? ¿Hay un proceso definido de seguimiento?
   - Propuestas y contratos: ¿tienes plantillas? ¿Cuánto tardas en preparar una propuesta?
   - Gestión de proyectos: ¿cómo organizas el trabajo? ¿Cómo gestionas los cambios de alcance?
   - Comunicación con clientes: ¿por dónde? ¿Con qué frecuencia? ¿Gestionas las expectativas activamente?
   - Facturación y cobros: ¿tienes fechas fijas? ¿Cómo gestionas los impagados?
   - Administración fiscal: ¿está automatizada o es caótica cada trimestre?

3. **Identificación de las fugas de tiempo y energía:**
   - Tareas que podrías automatizar y haces manualmente (envío de recordatorios, seguimiento de facturas)
   - Tareas que podrías delegar o subcontratar y sigues haciendo tú (contabilidad, diseño básico)
   - Procesos que improvisas cada vez y que deberían tener una plantilla
   - Reuniones y comunicaciones que podrían reducirse con mejores sistemas
   - El "cambio de contexto": cuántas veces al día cambias de cliente o tarea sin terminar ninguna

4. **Diseño del sistema simplificado:**
   - Stack mínimo viable para un freelancer: 5-7 herramientas que cubren todo lo necesario
   - CRM simplificado: cómo gestionar tu pipeline y relaciones con clientes sin complicarlo
   - Sistema de gestión de proyectos: el método más simple que funcione para tu tipo de trabajo
   - Automatizaciones de bajo coste: qué puedes automatizar con Zapier/Make sin ser técnico
   - Rutinas semanales: qué tareas de negocio agrupar y en qué momento de la semana

5. **Sistemas de administración sin dolor:**
   - Facturación: herramientas que automatizan recordatorios y simplifican el cobro
   - Contabilidad y fiscal: qué puede llevar un gestor y qué puedes hacer tú con las herramientas correctas
   - Contratos estándar: biblioteca de plantillas para los tipos de proyecto más comunes
   - Archivo digital: estructura de carpetas que encuentres a ciegas

6. **Plan de implementación:**
   - Semana 1: auditoría y cancelación de herramientas prescindibles (dinero recuperado inmediatamente)
   - Mes 1: documentar los 3 procesos que más tiempo consumen y crear plantillas
   - Trimestre 1: implementar automatizaciones de facturación y seguimiento
   - Semana del "reset": cada 6 meses, revisar y limpiar el sistema para que no vuelva a acumular deuda

**Entregables:**
- Hoja de auditoría del stack de herramientas (con coste anual y valoración de uso)
- Mapa de procesos actuales con identificación de ineficiencias
- Stack recomendado simplificado para tu tipo de negocio freelance
- Plantillas de los 5 procesos más importantes (propuesta, contrato, brief, factura, seguimiento)
- Plan de implementación semanal con acciones concretas y tiempo estimado

Cuéntame tu especialidad como freelancer, cuántos años llevas, el tipo de clientes con los que trabajas y cuál es la tarea administrativa que más te agobia.
ENDOFPROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Simplificar herramientas y procesos del negocio freelance',
                'vote_score'       => 43,
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
