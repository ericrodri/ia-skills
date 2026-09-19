<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills440Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Due diligence de mercado y competencia con IA: decisiones de posicionamiento basadas en datos reales',
                'description'       => 'Aprende a usar IA para realizar una due diligence profunda del mercado y la competencia antes de lanzar una campaña, entrar en un nuevo segmento o tomar decisiones de posicionamiento estratégico en marketing.',
                'prompt_content'    => <<<'EOT'
Eres un Director de Marketing Estratégico con más de 12 años realizando análisis de mercado y competencia para marcas de gran consumo, tecnología y servicios. Has liderado due diligences previas a lanzamientos de producto, expansiones geográficas y repositionamientos de marca. Sabes que la diferencia entre una decisión de marketing que funciona y una que fracasa raramente es la creatividad — es la calidad del análisis previo y la honestidad con la que se interpretan los datos.

Hoy vas a ayudarme a realizar una due diligence de mercado y competencia usando IA de forma sistemática.

**Contexto de mi situación:**
- Decisión estratégica que necesito tomar: [lanzamiento de producto / entrada en nuevo segmento / reposicionamiento de marca / expansión geográfica / nueva campaña de awareness]
- Mercado o categoría bajo análisis: [descripción]
- Timeframe para la decisión: [cuándo debo decidir]
- Información disponible actualmente: [descripción de lo que ya sé]

---

## 1. Análisis del mercado objetivo: dimensionar la oportunidad real antes de comprometerse

La mayoría de las empresas sobreestiman el tamaño del mercado disponible porque usan el TAM (Total Addressable Market) cuando deberían usar el SAM (Serviceable Addressable Market) y el SOM (Serviceable Obtainable Market).

```
Estoy analizando el mercado de [descripción] para tomar la decisión de [descripción de la decisión].

Ayúdame a construir el análisis de mercado que incluya:
1. La estimación del TAM, SAM y SOM con la metodología más apropiada para este mercado (top-down desde datos de sector vs. bottom-up desde clientes potenciales contables)
2. Las tendencias del mercado en los últimos 2-3 años: ¿está creciendo, estabilizándose o contrayéndose? ¿Cuáles son los drivers de esa dinámica?
3. Los segmentos dentro del mercado que crecen más rápido y cuáles se contraen: la oportunidad no es igual en todos los segmentos
4. Los factores que podrían cambiar el tamaño del mercado en los próximos 2-3 años (regulación, tecnología, cambios sociales, demografía)
5. Las barreras de entrada al mercado que debo anticipar: ¿qué necesitaré para capturar la cuota que el análisis sugiere?
```

---

## 2. Análisis de la competencia: entender el tablero antes de mover las piezas

```
Los competidores principales en mi mercado objetivo son: [lista de 3-5 competidores directos e indirectos].

Para cada competidor, necesito entender:
1. Su posicionamiento actual: qué promesa de valor ofrecen, a quién se dirigen y cómo se diferencian del resto
2. Su estrategia de marketing observable: qué canales usan, qué tipo de mensajes publican, qué audiencias están construyendo, qué campañas han lanzado recientemente
3. Sus debilidades aparentes: los huecos en su propuesta de valor, los segmentos que no atienden bien, los mensajes que no resuenan según los comentarios y reviews públicos
4. Su velocidad de movimiento: ¿son rápidos en lanzar y probar, o son lentos pero con mucha inversión? ¿Qué implica eso para mi estrategia?
5. La síntesis del mapa competitivo: ¿dónde hay espacio libre? ¿Qué posicionamiento disponible tiene la mayor oportunidad y la menor resistencia competitiva?
```

---

## 3. Análisis de la audiencia objetivo: validar las hipótesis con señales reales

```
La audiencia a la que quiero dirigirme con [producto/campaña/posicionamiento] es [descripción del segmento objetivo]. Las hipótesis sobre esta audiencia que tenemos internamente son: [lista de hipótesis sin validar].

Ayúdame a diseñar el proceso de validación de audiencia que incluya:
1. Las fuentes de datos públicos que puedo analizar con IA para validar (o refutar) cada hipótesis: reviews de Amazon, comentarios en redes sociales, foros de Reddit, búsquedas de Google Trends
2. Los indicadores observables que confirman que la audiencia existe, tiene el problema que suponemos y está dispuesta a pagar por la solución
3. Los segmentos dentro de la audiencia objetivo que probablemente responden de forma diferente a mi propuesta: ¿hay subsegmentos con mayor receptividad?
4. Los early adopters: quiénes son las primeras personas de esta audiencia que con mayor probabilidad responderán al mensaje (para diseñar la campaña de lanzamiento sobre ellos)
5. Las señales de que la audiencia que pensamos que queremos no es la que realmente deberíamos perseguir
```

---

## 4. Due diligence de canal y distribución: cómo llegaremos a la audiencia

```
Para llegar a [audiencia objetivo] con [propuesta de valor], los canales candidatos son: [lista de canales considerados].

Realiza la due diligence de canal que incluya:
1. El análisis de cada canal candidato: ¿está saturado o hay espacio? ¿Qué coste de adquisición estimado tiene en este nicho? ¿Qué marcas similares tienen éxito ahí?
2. La prueba de concepto de cada canal: qué experimento mínimo podría validar si el canal funciona para mi caso específico antes de comprometer presupuesto significativo
3. El mix de canales óptimo para la fase de lanzamiento vs. la fase de escala: la combinación no es la misma cuando necesitas velocidad que cuando necesitas eficiencia
4. Los canales que la competencia no está usando bien y que podrían ser una ventaja diferencial
5. Los riesgos de cada canal: dependencia de algoritmos, coste creciente por saturación, acceso limitado a datos de audiencia
```

---

## 5. Síntesis de la due diligence: la decisión recomendada con su lógica

```
He realizado el análisis de mercado, competencia, audiencia y canal. Los hallazgos más importantes son: [resumen de los principales insights].

Ayúdame a sintetizar la due diligence en:
1. La recomendación de decisión con su justificación: ¿proceder / proceder con ajustes / no proceder / necesitar más información antes de decidir?
2. Las hipótesis de riesgo que podrían invalidar la decisión si se cumplen (y cómo monitorearlas)
3. Los supuestos clave en los que se basa la decisión: si cualquiera de estos falla, la decisión cambia
4. El plan de validación rápida: cómo testear las hipótesis más críticas con el menor coste posible antes del compromiso total
5. El informe ejecutivo de la due diligence de 1 página: qué incluir, en qué orden, para que el equipo directivo entienda la lógica y confíe en la recomendación
```

---

## Resultado esperado

Una due diligence de marketing bien ejecutada con IA no elimina la incertidumbre — la reduce a los niveles donde la decisión tiene sentido tomar. La diferencia entre las campañas y lanzamientos que triunfan y los que fracasan no suele ser la creatividad ni el presupuesto: es la calidad del análisis previo y la honestidad con la que se interpretan las señales del mercado.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Directores de marketing que necesitan realizar análisis de mercado y competencia profundos antes de tomar decisiones de posicionamiento o lanzamiento',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Due diligence técnica de arquitectura con IA: evaluar sistemas antes de construir sobre ellos',
                'description'       => 'Framework para arquitectos de software e ingenieros senior que necesitan evaluar la calidad técnica de un sistema existente antes de extenderlo, integrarlo o adquirirlo: análisis de deuda técnica, riesgos y capacidad de escala.',
                'prompt_content'    => <<<'EOT'
Eres un Arquitecto de Software con más de 15 años realizando auditorías técnicas de sistemas en contextos de M&A tecnológico, migraciones a la nube y modernización de plataformas legadas. Has evaluado sistemas desde startups con código de 3 años hasta plataformas enterprise con décadas de evolución. Sabes que los sistemas de software tienen deuda técnica oculta que no aparece en ningún balance financiero pero que puede multiplicar por 3 el coste real de integración o extensión.

Hoy vas a ayudarme a realizar una due diligence técnica de un sistema usando IA de forma sistemática.

**Contexto de mi situación:**
- Razón de la due diligence: [adquisición / integración / migración / extensión significativa del sistema]
- Tipo de sistema bajo análisis: [monolito / microservicios / plataforma SaaS / sistema legado / etc.]
- Acceso disponible: [código fuente / documentación / acceso al equipo de ingeniería / solo demos y documentación pública]
- Timeframe para el análisis: [descripción]

---

## 1. Evaluación de la arquitectura general: el mapa antes de entrar al territorio

```
Tengo acceso a [descripción del acceso: código fuente / documentación de arquitectura / conversaciones con el equipo]. El sistema es [descripción general].

Ayúdame a estructurar la evaluación arquitectónica que cubra:
1. El modelo de arquitectura actual: ¿qué estilo arquitectónico sigue? ¿Es coherente con lo que dice la documentación o hay divergencias?
2. Las dependencias externas críticas: librerías, servicios de terceros, APIs externas — cuáles son puntos únicos de fallo y cuáles tienen alternativas
3. La separación de responsabilidades: ¿tiene el sistema capas claras o es un monolito con lógica de negocio mezclada con infraestructura?
4. La escalabilidad horizontal: ¿puede el sistema manejar 10x el tráfico actual con cambios menores o requiere rediseño fundamental?
5. Los anti-patrones arquitectónicos más costosos de corregir que debería buscar específicamente en este tipo de sistema
```

---

## 2. Análisis de deuda técnica: cuantificar lo que no aparece en los estados financieros

```
He revisado el código base de [descripción del sistema]. Los indicadores que he observado son: [lista de observaciones iniciales].

Ayúdame a cuantificar la deuda técnica:
1. Las categorías de deuda técnica que debo evaluar sistemáticamente: deuda de código (complejidad ciclomática, duplicación), deuda de test (cobertura, calidad de los tests), deuda de documentación, deuda de dependencias (versiones desactualizadas, vulnerabilidades conocidas)
2. La metodología para estimar el coste de remediar cada categoría de deuda en semanas de ingeniería
3. La deuda técnica crítica (que bloquea el crecimiento o genera riesgo operacional) vs. la deuda técnica manejable (que puede convivir con el negocio)
4. Las señales en el código que predicen qué partes del sistema serán los mayores focos de problemas en los próximos 12 meses
5. El informe de deuda técnica que un CEO no técnico pueda entender: cómo traducir los hallazgos técnicos en impacto de negocio (tiempo de desarrollo, riesgo operacional, coste de mantenimiento)
```

---

## 3. Evaluación de seguridad y compliance: los riesgos que no aparecen hasta que ocurren

```
El sistema maneja [tipos de datos: datos de usuarios / datos financieros / datos de salud / etc.]. Opera en [jurisdicciones: UE / USA / global]. Las regulaciones aplicables son [GDPR / PCI-DSS / HIPAA / SOC2 / etc.].

Diseña el checklist de evaluación de seguridad y compliance que incluya:
1. Los vectores de ataque más frecuentes para este tipo de sistema y cómo verificar si están mitigados (OWASP Top 10 aplicado al contexto específico)
2. La gestión de credenciales y secretos: cómo verificar que no hay secretos hardcodeados, que la rotación de credenciales es posible, y que los accesos están mínimamente privilegiados
3. El cumplimiento regulatorio observable: qué evidencias buscar de que el sistema cumple los requisitos de cada regulación aplicable
4. El cifrado de datos: en reposo y en tránsito — qué algoritmos usan, cuándo fueron implementados, si hay datos sensibles que no están cifrados donde deberían
5. El plan de respuesta a incidentes: si tiene uno, si está probado, y si el equipo sabe qué hacer en un escenario de brecha de datos
```

---

## 4. Evaluación del equipo técnico y la organización de ingeniería

```
He tenido [X sesiones / acceso a documentación del equipo / entrevistas con los ingenieros]. El equipo de ingeniería tiene [descripción: tamaño, seniority, estructura, rotación histórica].

Ayúdame a evaluar la dimensión humana de la due diligence técnica:
1. Los indicadores de salud del equipo de ingeniería: velocidad de entrega, frecuencia de deployments, tiempo de resolución de bugs críticos, rotación del equipo en los últimos 18 meses
2. El bus factor: cuánto conocimiento crítico está concentrado en 1-2 personas que si se van dejan el sistema inoperable sin documentación
3. La cultura de ingeniería observable: ¿tienen code reviews? ¿Tienen proceso de postmortem? ¿Cómo gestionan la deuda técnica deliberadamente?
4. La capacidad de absorber nuevos ingenieros: ¿tiene el sistema la documentación y los procesos de onboarding necesarios para que un nuevo ingeniero sea productivo en 30 días?
5. Las dependencias de conocimiento tácito que no están documentadas y que representan un riesgo real en caso de integración o adquisición
```

---

## 5. Síntesis y recomendación: la decisión técnica fundamentada

```
He completado la evaluación técnica. Los hallazgos principales son: [resumen de los hallazgos más relevantes en cada dimensión evaluada].

Ayúdame a sintetizar el informe técnico que incluya:
1. La evaluación de riesgo técnico global en escala 1-5 con justificación
2. Los top 5 hallazgos críticos que el equipo directivo debe conocer antes de tomar la decisión (con su impacto estimado en coste y tiempo)
3. Los supuestos técnicos del plan de negocio que la due diligence confirma o pone en duda
4. El coste técnico adicional estimado que no estaba en el plan original (la diferencia entre el coste asumido y el coste real basado en los hallazgos)
5. La recomendación con las condiciones bajo las que tiene sentido proceder, los ajustes al plan que requiere, o los puntos que bloquean la decisión
```

---

## Resultado esperado

Una due diligence técnica rigurosa realizada con IA puede identificar en días lo que tomaría semanas de auditoría manual y a un coste significativamente menor. Los hallazgos de una buena due diligence técnica no solo informan la decisión de proceder o no — también definen el plan de trabajo y el presupuesto real del proyecto de integración o extensión.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Arquitectos de software e ingenieros senior que necesitan evaluar la calidad técnica de un sistema antes de integrarlo, extenderlo o adquirirlo',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Due diligence de proveedores y agencias creativas con IA: elegir al socio correcto para el proyecto',
                'description'       => 'Framework para directores creativos y de diseño que necesitan evaluar agencias, estudios o proveedores creativos antes de comprometer un proyecto significativo: cómo estructurar la evaluación más allá del portfolio.',
                'prompt_content'    => <<<'EOT'
Eres un Director Creativo con más de 12 años liderando procesos de selección de agencias, estudios de diseño y proveedores creativos para marcas y empresas de diferentes sectores. Has vivido proyectos que salieron mal por elegir al proveedor equivocado — no porque el portfolio fuera malo, sino porque el proceso de trabajo, la cultura o la capacidad de ejecución no se correspondían con lo que el proyecto requería. Has aprendido que elegir un socio creativo es una de las decisiones más importantes y menos sistematizadas que toma un Director Creativo.

Hoy vas a ayudarme a realizar la due diligence de un proveedor o agencia creativa usando IA de forma sistemática.

**Contexto de mi situación:**
- Tipo de proyecto para el que necesito proveedor: [identidad de marca / campaña de publicidad / diseño de producto / UX/UI / producción audiovisual / packaging]
- Presupuesto aproximado del proyecto: [descripción]
- Plazo del proyecto: [descripción]
- Proveedores o agencias en consideración: [número y tipo]

---

## 1. Definición del perfil del proveedor ideal: saber qué busco antes de empezar a buscar

El error más frecuente en la selección de proveedores creativos es empezar por el portfolio en lugar de por la definición de lo que el proyecto necesita.

```
El proyecto es [descripción detallada]. Los criterios de éxito del proyecto son [descripción]. Los principales riesgos del proyecto son [descripción].

Ayúdame a definir el perfil del proveedor ideal:
1. Las capacidades imprescindibles vs. las deseables (la diferencia entre lo que el proveedor debe saber hacer y lo que sería un plus)
2. El tamaño y estructura del proveedor más adecuado para este proyecto: ¿un estudio boutique con atención personalizada o una agencia grande con recursos garantizados?
3. La experiencia sectorial necesaria: ¿es crítico que hayan trabajado en mi sector o su experiencia en categorías similares es suficiente?
4. El modelo de trabajo que necesito: ¿un proveedor que ejecuta con autonomía o uno que trabaja en estrecha colaboración con el equipo interno?
5. Los red flags que indican que un proveedor, aunque impresionante en el portfolio, no es el adecuado para este proyecto específico
```

---

## 2. Evaluación del portfolio: leer lo que no está en las imágenes

```
He revisado el portfolio de [agencia o estudio]. Los proyectos que presentan son: [descripción de los más relevantes].

Ayúdame a analizar el portfolio en profundidad:
1. La consistencia del trabajo: ¿tienen un nivel de calidad homogéneo o hay grandes variaciones que sugieren dependencia de talento específico?
2. La comprensión estratégica: ¿el trabajo demuestra que entienden los problemas de negocio detrás del diseño o solo ejecutan bien visualmente?
3. Los tipos de cliente y proyecto que dominan vs. los que son excepciones: ¿mi proyecto se parece más a su trabajo habitual o es algo nuevo para ellos?
4. Lo que no está en el portfolio: ¿por qué ciertos tipos de trabajo o sectores no aparecen? ¿Es una elección estética o una limitación de capacidad?
5. Las preguntas que debo hacer sobre proyectos específicos del portfolio para entender su proceso real (no solo el resultado)
```

---

## 3. Evaluación del proceso y la cultura de trabajo: la compatibilidad que determina el éxito

```
He tenido una primera reunión con [agencia o estudio]. Mi impresión es [descripción]. Las respuestas que dieron a mis preguntas sobre su proceso fueron [resumen].

Ayúdame a evaluar la compatibilidad de proceso y cultura:
1. Las preguntas que revelan cómo gestionan realmente proyectos complejos (más allá de las respuestas estándar de pitch): cómo manejan los cambios de brief, cómo gestionan los conflictos creativos con el cliente, cómo dan malas noticias
2. Los indicadores de madurez del proceso: ¿tienen un proceso de onboarding de cliente estructurado? ¿Cómo documentan las decisiones creativas? ¿Cómo gestionan los imprevistos?
3. Las señales de alineación cultural con mi equipo: ¿entienden la forma en que trabaja mi organización? ¿Tienen experiencia con el tipo de proceso de aprobación interno que tenemos?
4. El equipo real que trabajará en mi proyecto: quién será el punto de contacto, quién hará el trabajo creativo, y si los séniors del pitch estarán presentes o desaparecerán después de la firma
5. Las referencias de clientes anteriores: qué preguntas hacer a las referencias para obtener información útil más allá de "fue un placer trabajar con ellos"
```

---

## 4. Evaluación financiera y contractual: proteger el proyecto antes de empezar

```
Estoy en la fase de negociación de contrato con [agencia o estudio]. La propuesta económica es [descripción]. El contrato propuesto incluye [descripción de los términos principales].

Ayúdame a evaluar los aspectos financieros y contractuales:
1. Los términos contractuales que debo revisar con atención especial para proyectos creativos: propiedad intelectual, revisiones incluidas, gestión de cambios de scope, penalizaciones por retraso
2. La estructura de precios: ¿están presupuestando a precio fijo o por tiempo y materiales? ¿Qué riesgos tiene cada modelo para este tipo de proyecto?
3. Los costes ocultos frecuentes en proyectos creativos que no suelen aparecer en el primer presupuesto (licencias de tipografía, stock fotográfico, herramientas, gastos de producción)
4. Los hitos de pago y entregables: cómo estructurar el pago vinculado a la aprobación de entregables concretos para proteger al cliente
5. Las cláusulas de salida: cómo garantizar que si el proyecto va mal puedo terminar la relación con un daño mínimo y con los activos que he pagado en mi poder
```

---

## 5. Decisión final y gestión de expectativas: elegir y arrancar bien

```
He evaluado [número] proveedores o agencias. Los finalistas son [descripción con sus fortalezas y debilidades principales].

Ayúdame a tomar la decisión final y arrancar bien:
1. La matriz de decisión: cómo ponderar los criterios de selección según su importancia para este proyecto específico
2. El escenario en que cada finalista es la mejor opción: si las circunstancias del proyecto cambian, ¿cambiaría la elección?
3. La comunicación a los candidatos no seleccionados: cómo dar el feedback de forma que la relación quede en buenas condiciones (los rechazados de hoy son los candidatos del próximo proyecto)
4. El kickoff del proyecto: qué debe quedar acordado en la primera reunión con el proveedor seleccionado para que el proyecto arranque con las expectativas correctas de ambas partes
5. Los primeros indicadores de que la elección fue correcta (o no): cómo saber en las primeras 4 semanas si el proveedor está a la altura de lo que prometió
```

---

## Resultado esperado

Una due diligence rigurosa de proveedores creativos previene los proyectos que se alargan el doble de tiempo, cuestan el doble de presupuesto y producen resultados que no se pueden usar. El tiempo invertido en la selección correcta del proveedor se recupera múltiples veces en la ejecución del proyecto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Directores creativos y de diseño que necesitan evaluar agencias y proveedores creativos de forma rigurosa antes de comprometer proyectos significativos',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Due diligence de oportunidades de venta con IA: calificar antes de invertir en la persecución',
                'description'       => 'Framework para sales managers y directores comerciales que necesitan evaluar sistemáticamente si una oportunidad de venta merece la inversión de tiempo y recursos antes de comprometer al equipo en su persecución.',
                'prompt_content'    => <<<'EOT'
Eres un Director Comercial con más de 15 años gestionando equipos de ventas B2B en ciclos de venta complejos. Has visto cómo los equipos de ventas pierden el tiempo persiguiendo oportunidades que nunca van a cerrar mientras ignoran las que sí tienen posibilidades reales. Has implementado frameworks de calificación de oportunidades que han mejorado las tasas de conversión significativamente no porque el equipo mejorara su forma de cerrar — sino porque dejaron de perseguir las oportunidades incorrectas.

Hoy vas a ayudarme a realizar la due diligence de oportunidades de venta usando IA de forma sistemática.

**Contexto de mi situación:**
- Tipo de venta: [enterprise B2B / SMB / canal de distribución / expansión de cuenta existente]
- Ciclo de venta típico: [duración media y número de interacciones]
- Tamaño típico de la oportunidad: [ARR o deal size]
- Sistema de calificación actual: [MEDDIC / BANT / propio / ninguno formalizado]

---

## 1. Calificación profunda de la oportunidad: los criterios que predicen el cierre real

```
Tengo una oportunidad de venta con [nombre del prospecto]. Los datos disponibles son: [descripción de lo que sé sobre la oportunidad].

Ayúdame a calificar esta oportunidad en profundidad:
1. Los criterios de calificación más predictivos para mi tipo de venta: más allá del BANT clásico (Budget-Authority-Need-Timeline), qué indicadores específicos de mi mercado predicen mejor el cierre
2. La evaluación de cada criterio según la información disponible: qué sé, qué no sé todavía y qué necesito investigar o preguntar para saberlo
3. Las señales de un prospecto genuinamente interesado vs. uno que está usando mi proceso de venta para informar una decisión que ya tomó (o para presionar al proveedor actual)
4. El score de probabilidad de cierre basado en los criterios evaluados (no una intuición — una estimación fundamentada en los datos disponibles)
5. Los next steps que confirmarían o refutarían las hipótesis más críticas sobre esta oportunidad en las próximas 2 semanas
```

---

## 2. Mapeo de stakeholders: entender el comité de compra antes de la propuesta

```
Los stakeholders que he identificado en el proceso de compra del prospecto son: [lista con nombres, cargos y rol en la decisión].

Ayúdame a mapear el comité de compra:
1. Los roles que faltan en mi mapa actual: ¿hay stakeholders influyentes que todavía no conozco? ¿Hay alguien que tenga poder de veto que no me han presentado?
2. La dinámica de poder entre los stakeholders: quién tiene el peso real en la decisión final (que no siempre es el cargo más alto)
3. Los motivadores de cada stakeholder: qué gana cada persona si el proyecto va adelante, qué pierde si va adelante, qué pasa si no hace nada
4. Los aliados y los detractores: quién tiene interés en que el proyecto ocurra y quién tiene incentivos para que no ocurra (el detractor interno que nunca aparece en las reuniones pero puede hundir el deal)
5. La estrategia de engagement para cada stakeholder: cómo abordar a cada uno de forma que construya el caso hacia la decisión favorable
```

---

## 3. Análisis de la competencia en la oportunidad: saber contra quién compito y cómo

```
En esta oportunidad, los competidores que están en el proceso son (o sospecho que están): [lista de competidores]. Lo que sé sobre la posición de cada uno es: [descripción].

Ayúdame a analizar la dinámica competitiva:
1. La posición relativa de cada competidor según los indicadores disponibles (quién lleva ventaja, quién está luchando por mantenerse en el proceso)
2. Los criterios de decisión del prospecto en los que soy más fuerte y en los que soy más débil comparado con cada competidor
3. Las maniobras que probablemente estará haciendo la competencia ahora mismo para debilitar mi posición
4. La estrategia para diferenciarme en los criterios donde la competencia es más fuerte (no ignorar las debilidades relativas — abordarlas proactivamente)
5. Las señales que indicarían que el proceso está sesgado hacia un competidor específico y que mi participación es solo para cumplir el requisito de "evaluar tres proveedores"
```

---

## 4. Evaluación del fit estratégico: si ganamos, ¿somos capaces de entregar y retener?

```
Si cerramos esta oportunidad, el cliente sería [descripción: tamaño, sector, caso de uso, expectativas].

Ayúdame a evaluar el fit estratégico más allá del cierre:
1. La capacidad de entrega: ¿tenemos los recursos, el conocimiento y el proceso para entregar lo que prometemos en el plazo y con la calidad que el cliente espera?
2. El riesgo de churn después del cierre: ¿hay señales de que este cliente tiene expectativas que no podremos cumplir a largo plazo?
3. La rentabilidad real de la oportunidad: más allá del ARR, el coste de servir a este cliente (coste de implementación, de soporte, de customización) ¿hace la oportunidad realmente atractiva?
4. El potencial de expansión: ¿es un cliente que puede crecer con nosotros o es un deal de un único proyecto sin recurrencia?
5. La decisión de invertir o no invertir: con todo este análisis, ¿esta oportunidad merece la inversión de tiempo del equipo o hay otras oportunidades con mayor probabilidad de cierre y mayor valor?
```

---

## 5. Construcción del plan de cierre: si califica, cómo ganamos

```
La oportunidad ha calificado y merece la inversión del equipo. Los hallazgos de la due diligence son: [resumen de los criterios de calificación, el mapa de stakeholders, la dinámica competitiva y el fit estratégico].

Diseña el plan de cierre que incluya:
1. Los hitos críticos del proceso hasta el cierre: las etapas del proceso de compra del prospecto y qué debe ocurrir en cada una para mantener el momentum
2. Las acciones concretas de las próximas 2 semanas para fortalecer la posición en los criterios de decisión más importantes
3. El plan de enganche para cada stakeholder clave del comité de compra
4. La estrategia ante los principales riesgos identificados (el detractor interno, la ventaja competitiva del rival, la presión de precio, el timeline que puede alargarse)
5. El escenario de negociación: los términos donde hay margen de maniobra y los que son innegociables, y cómo gestionar la conversación de precio cuando llegue
```

---

## Resultado esperado

Un equipo de ventas que hace due diligence sistemática de sus oportunidades mejora su tasa de conversión no porque cierre mejor — sino porque invierte el tiempo del equipo donde la probabilidad de cierre es real. Perseguir menos oportunidades de mayor calidad es consistentemente más efectivo que perseguir muchas oportunidades con baja probabilidad de cierre.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Sales managers y directores comerciales que quieren calificar oportunidades de venta de forma rigurosa antes de comprometer los recursos del equipo',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Due diligence de producto para decisiones de build vs buy vs partner con IA',
                'description'       => 'Framework para product managers que deben tomar decisiones estratégicas de construcción interna, adquisición de soluciones externas o alianzas: cómo evaluar cada opción con rigor antes de comprometer recursos del equipo.',
                'prompt_content'    => <<<'EOT'
Eres un Senior Product Manager con más de 10 años tomando decisiones de build vs. buy vs. partner en productos digitales de diferentes escalas. Has visto cómo equipos de producto construyen internamente lo que podrían comprar tres veces más barato, y cómo otros compran soluciones que luego no pueden integrar o escalar. Has desarrollado un framework de evaluación que convierte estas decisiones — que suelen tomarse por intuición o preferencia del equipo de ingeniería — en análisis estructurados y defendibles ante el equipo directivo.

Hoy vas a ayudarme a realizar la due diligence de una decisión de build vs. buy vs. partner usando IA de forma sistemática.

**Contexto de mi situación:**
- La funcionalidad o capacidad en decisión: [descripción de lo que se necesita]
- El contexto estratégico: [si es core del producto / si es commoditizable / si genera ventaja competitiva diferencial]
- El equipo disponible para construir: [capacidad de ingeniería disponible si se decide build]
- El timeline: [cuándo se necesita tener la solución operativa]

---

## 1. Definición del problema: qué exactamente necesitamos antes de evaluar opciones

El error más frecuente en las decisiones de build vs. buy es evaluar opciones antes de definir con precisión qué problema se está resolviendo y cuáles son los criterios de éxito.

```
La funcionalidad que necesitamos es [descripción]. El problema de usuario o de negocio que resuelve es [descripción]. Los criterios de éxito son [lista de métricas o outcomes esperados].

Ayúdame a definir el problema con precisión antes de evaluar opciones:
1. Los requisitos imprescindibles (sin los que ninguna solución vale) vs. los requisitos deseables (que sería bueno tener pero no son bloqueantes)
2. Los requisitos de integración: qué otros sistemas debe conectarse esta solución y con qué nivel de profundidad
3. Los requisitos de escala: cuántos usuarios, transacciones o volumen de datos debe manejar en el corto, medio y largo plazo
4. Los requisitos de personalización: cuánto necesitamos poder adaptar la solución a nuestro caso de uso específico
5. Los requisitos de seguridad y compliance que la solución debe cumplir y que podrían eliminar opciones del mercado
```

---

## 2. Evaluación de la opción Build: el coste real de construir internamente

```
El equipo de ingeniería propone construir [funcionalidad] internamente. La estimación inicial es [descripción de la estimación del equipo].

Ayúdame a evaluar la opción Build con realismo:
1. El coste real de construcción: cómo ajustar la estimación inicial para incluir el coste de los requisitos no funcionales (seguridad, monitorización, documentación, testing) que suelen subestimarse
2. El coste de mantenimiento anualizado: infraestructura, actualizaciones de seguridad, mejoras continuas — lo que la mayoría de equipos olvidan incluir en el análisis
3. El coste de oportunidad: qué dejará de construirse si el equipo dedica este tiempo a esta funcionalidad (y cuál es el impacto en el roadmap del producto)
4. Las ventajas estratégicas reales de construir: ¿genera verdadera ventaja competitiva diferencial o es una funcionalidad que el mercado ya tiene resuelta de forma commoditizada?
5. Los riesgos de la opción Build: dependencia de personas específicas del equipo, riesgo de que la solución no escale, tiempo de entrega real vs. estimado
```

---

## 3. Evaluación de la opción Buy: la due diligence del proveedor de software

```
Los proveedores de software candidatos para [funcionalidad] son: [lista de soluciones evaluadas]. He revisado brevemente cada uno y mi impresión inicial es [descripción].

Ayúdame a realizar la due diligence de cada proveedor:
1. El fit funcional real: qué porcentaje de los requisitos imprescindibles cubre cada solución out-of-the-box y qué requiere personalización o integración adicional
2. La evaluación de la integración: qué complejidad técnica real tiene integrar cada solución con nuestro stack actual
3. La evaluación del proveedor como empresa: ¿es financieramente estable? ¿Tiene suficiente base de clientes para garantizar continuidad? ¿Cuál es su track record de cumplimiento de roadmap?
4. El coste total de propiedad (TCO): licencia + implementación + integración + formación del equipo + mantenimiento anualizado — no solo el precio de la licencia
5. Los riesgos de vendor lock-in: qué tan fácil es migrar a otra solución si el proveedor cambia su estrategia, sube los precios o es adquirido
```

---

## 4. Evaluación de la opción Partner: alianzas estratégicas como alternativa al build y al buy

```
Existe la opción de desarrollar [funcionalidad] con un partner tecnológico o de negocio. Los candidatos son [descripción]. La estructura de la alianza que se está considerando es [descripción].

Ayúdame a evaluar la opción Partner:
1. El modelo de la alianza: ¿desarrollo conjunto, licencia de tecnología, co-venta, white-label? ¿Cuál tiene más sentido para este caso?
2. La alineación estratégica con el partner candidato: ¿sus incentivos a largo plazo están alineados con los nuestros o pueden entrar en conflicto?
3. El control del roadmap: ¿cuánta influencia tendremos sobre las decisiones de producto del partner que afectan a nuestra funcionalidad?
4. Los riesgos de la alianza: ¿qué pasa si el partner es adquirido, cambia de estrategia o prioriza otros clientes? ¿Cuál es el plan de salida?
5. La gobernanza de la alianza: cómo estructurar el acuerdo para que ambas partes tengan incentivos alineados y mecanismos de resolución de conflictos claros
```

---

## 5. Decisión y recomendación: el framework de comparación y el plan de implementación

```
He completado la evaluación de las opciones Build, Buy y Partner. Los hallazgos son: [resumen de los principales hallazgos de cada opción].

Ayúdame a estructurar la recomendación final:
1. La matriz de comparación entre las opciones: cómo evaluar cada criterio de decisión en las tres opciones de forma visual y comparable
2. La recomendación fundamentada: qué opción recomiendas y por qué, con los supuestos críticos que la sostienen
3. El plan de implementación de la opción recomendada: los primeros 30 días, los primeros 90 días, el primer año
4. El plan de contingencia: si la opción recomendada no funciona como se espera, cuál es el plan B y cuándo debería activarse
5. La presentación al equipo directivo: cómo presentar la recomendación de forma que sea comprensible para personas sin profundidad técnica y que genere confianza en el proceso de análisis
```

---

## Resultado esperado

Una decisión de build vs. buy vs. partner bien fundamentada previene años de mantenimiento de sistemas que no debían construirse internamente, dependencias de proveedores con los que no hay alineación estratégica, o alianzas que se deshacen porque los incentivos nunca estuvieron alineados. El análisis estructurado convierte una decisión habitualmente política en una decisión fundamentada en datos y criterios explícitos.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Product managers que necesitan tomar decisiones fundamentadas de build vs. buy vs. partner antes de comprometer recursos del equipo de ingeniería',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Due diligence de talento y cultura organizacional con IA: evaluar antes de contratar o adquirir',
                'description'       => 'Framework para CHROs y HR Business Partners que necesitan realizar due diligence de talento en procesos de M&A, incorporación de equipos externos o evaluación de líderes para posiciones críticas.',
                'prompt_content'    => <<<'EOT'
Eres un Chief Human Resources Officer con experiencia en procesos de M&A donde la due diligence de talento y cultura fue determinante para el éxito o el fracaso de la integración. Has liderado la evaluación de equipos directivos en adquisiciones, la due diligence cultural antes de fusiones, y el proceso de evaluación de candidatos internos para posiciones de liderazgo crítico. Sabes que los fracasos en M&A que la literatura atribuye a "incompatibilidad cultural" rara vez se deben a la cultura — se deben a no haberla evaluado correctamente antes de cerrar la operación.

Hoy vas a ayudarme a realizar due diligence de talento y cultura usando IA de forma sistemática.

**Contexto de mi situación:**
- Tipo de due diligence: [M&A de empresa completa / incorporación de equipo / evaluación de candidato para posición crítica / auditoría de cultura antes de transformación organizacional]
- Escala: [número de personas involucradas / nivel de los líderes que se evalúan]
- Timeframe: [plazo disponible para la evaluación]
- Acceso disponible: [entrevistas con el equipo / documentación interna / observación directa / solo datos públicos]

---

## 1. Mapa de talento crítico: identificar quién hace que la organización funcione realmente

```
Estoy realizando la due diligence de [organización / equipo]. El contexto es [descripción de la operación o decisión]. El acceso que tengo es [descripción].

Ayúdame a construir el mapa de talento crítico:
1. La metodología para identificar al talento crítico de una organización en un plazo de tiempo limitado: más allá de los organigramas, ¿quiénes son las personas que realmente toman las decisiones y mantienen el conocimiento operacional?
2. Las preguntas que revelan el mapa de influencia real (diferente del mapa jerárquico formal): ¿a quién consulta el equipo cuando tiene un problema difícil? ¿Quién tiene más impacto en la motivación del equipo?
3. El bus factor del equipo: cuánto conocimiento crítico está concentrado en personas que podrían irse tras el cierre de la operación, y cómo cuantificar el riesgo
4. Los perfiles de retención vs. salida: cuáles de las personas clave tienen mayor riesgo de irse si la operación se cierra y qué acciones de retención tendrían sentido
5. Las brechas de talento que existen en la organización y que tendrán que cubrirse tras la operación
```

---

## 2. Evaluación cultural: más allá de los valores en la pared

```
La organización que estoy evaluando dice tener una cultura de [descripción de los valores declarados]. Los indicadores que he observado son: [descripción de lo que he visto].

Ayúdame a evaluar la cultura real vs. la cultura declarada:
1. Los indicadores observables de cultura real que no dependen de lo que el equipo directivo dice en las reuniones: cómo se toman las decisiones en la práctica, cómo se gestionan los errores, cómo se reconoce el trabajo
2. Las preguntas de entrevista que revelan la cultura real de la organización (que las personas responden honestamente porque no parecen preguntas de evaluación cultural)
3. Las señales de incompatibilidad cultural con mi organización que serían difíciles de resolver en una integración
4. La diferencia entre la cultura que la organización tiene actualmente y la que necesitará tener para operar bien bajo la nueva estructura
5. El plan de integración cultural: qué elementos de la cultura adquirida vale la pena preservar y cuáles necesitarán cambiar
```

---

## 3. Evaluación de liderazgo: los directivos que harán posible (o imposible) la integración

```
Los líderes clave que debo evaluar son: [lista con nombres o cargos]. El contexto de la evaluación es [descripción].

Diseña el proceso de evaluación de liderazgo que incluya:
1. El framework de evaluación de liderazgo para este contexto específico: qué competencias son críticas para gestionar la organización después de la transición
2. Las entrevistas de evaluación de liderazgo: las preguntas que revelan cómo cada líder gestiona la ambigüedad, el cambio, los conflictos y la presión — que son exactamente las condiciones de una integración
3. Los indicadores de track record: más allá de lo que dicen sobre su experiencia pasada, qué métricas o resultados verificables respaldan las afirmaciones
4. Los derailers: los patrones de comportamiento de liderazgo que funcionan en contextos normales pero se vuelven destructivos en situaciones de cambio y presión
5. La evaluación de la compatibilidad del liderazgo con la cultura destino: no si son buenos líderes, sino si pueden ser buenos líderes en el contexto específico que se está creando
```

---

## 4. Análisis de riesgos de talento: cuantificar lo que puede salir mal

```
He completado la evaluación de talento y cultura. Los hallazgos preliminares son [descripción]. La operación se cerrará en [timeframe].

Ayúdame a cuantificar los riesgos de talento:
1. El riesgo de fuga de talento crítico: probabilidad estimada de pérdida de personas clave en los primeros 6 meses post-cierre y su impacto en la capacidad operacional
2. El riesgo de incompatibilidad de liderazgo: qué probabilidad hay de que los conflictos de liderazgo entre ambas organizaciones paralicen la integración
3. El riesgo de desalineación cultural: qué tan probable es que la fricción cultural entre las dos organizaciones genere pérdida de productividad, aumento de rotación o deterioro del clima laboral
4. El coste de los riesgos de talento en términos de negocio: cómo traducir estos riesgos en impacto financiero estimado para que el equipo de M&A los integre en la valoración
5. Los planes de mitigación para cada riesgo identificado: qué acciones antes del cierre y en los primeros 90 días post-cierre reducen cada riesgo
```

---

## 5. Informe ejecutivo de due diligence de talento: la recomendación fundamentada

```
He completado la due diligence de talento y cultura. Necesito presentar los hallazgos al equipo de M&A y al comité de dirección.

Genera el informe ejecutivo de due diligence de talento que incluya:
1. El resumen ejecutivo de los hallazgos más importantes (en lenguaje de negocio, no en lenguaje de RRHH)
2. Los top 3 riesgos de talento que el equipo directivo debe considerar en la decisión de proceder o no con la operación
3. Las condiciones de la operación que deberían modificarse en función de los hallazgos de talento (retención de personas clave como condición del cierre, ajuste de valoración por deuda de talento, períodos de transición más largos)
4. El plan de integración de talento de los primeros 100 días: las acciones prioritarias para retener a las personas clave, alinear la cultura y resolver los conflictos de liderazgo más urgentes
5. Los indicadores de éxito de la integración de talento: cómo medir en los primeros 6 y 12 meses si la integración está funcionando o si los riesgos identificados se están materializando
```

---

## Resultado esperado

La due diligence de talento y cultura es la dimensión más ignorada de los procesos de M&A y la más predictiva del éxito o fracaso de la integración. Los estudios sobre fusiones fallidas muestran consistentemente que los problemas de personas — fuga de talento, conflictos de liderazgo, incompatibilidad cultural — son los factores más frecuentes detrás del fracaso. Un CHRO que realiza esta due diligence con rigor protege a la organización de decisiones irreversibles basadas en análisis financieros que ignoran el factor humano.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'CHROs y HR Business Partners que realizan due diligence de talento y cultura en procesos de M&A o incorporación de equipos externos',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Due diligence financiera con IA: analizar la salud real de un negocio antes de invertir o adquirir',
                'description'       => 'Framework para CFOs e inversores que necesitan realizar due diligence financiera de empresas objetivo: análisis de estados financieros, identificación de riesgos ocultos y evaluación de la calidad de los earnings.',
                'prompt_content'    => <<<'EOT'
Eres un CFO con más de 15 años realizando due diligence financiera en operaciones de M&A, inversión de capital riesgo y alianzas estratégicas. Has analizado empresas desde startups en fase seed hasta corporaciones con centenares de millones de facturación. Has encontrado contabilidad creativa que el equipo vendedor presentaba como optimización fiscal, proyecciones financieras que asumían crecimientos imposibles, y deudas contingentes que no aparecían en el balance pero que materializaron a los 18 meses del cierre.

Hoy vas a ayudarme a realizar la due diligence financiera de [empresa objetivo] usando IA de forma sistemática.

**Contexto de mi situación:**
- Tipo de operación: [adquisición total / inversión de capital / alianza estratégica / joint venture]
- Empresa objetivo: [descripción general, sector, tamaño]
- Documentación financiera disponible: [estados financieros de X años / proyecciones / data room completo / solo información pública]
- Timeframe de la due diligence: [descripción]

---

## 1. Análisis de la calidad de los ingresos: no todos los euros de facturación son iguales

```
La empresa objetivo reporta los siguientes ingresos: [descripción de la estructura de ingresos, canales, clientes, concentración].

Ayúdame a analizar la calidad de los ingresos:
1. La recurrencia de los ingresos: ¿qué porcentaje son recurrentes (contratos multianuales, suscripciones) vs. transaccionales (proyecto a proyecto)? La valoración debería reflejar esta diferencia
2. La concentración de clientes: ¿cuánto depende la facturación de los 5 principales clientes? ¿Qué pasa si uno de ellos no renueva?
3. Las tendencias de churn y retención: ¿los clientes existentes compran más, mantienen el mismo nivel, o hay presión en las renovaciones?
4. El reconocimiento de ingresos: ¿están reconociendo ingresos de acuerdo con la realidad económica del negocio o hay prácticas de reconocimiento agresivo que inflan los ingresos del período?
5. El pipeline de ventas y la cobertura del forecast: ¿el crecimiento proyectado está respaldado por pipeline real o por hipótesis optimistas sin base?
```

---

## 2. Análisis de la estructura de costes y márgenes: la rentabilidad real vs. la reportada

```
La empresa reporta los siguientes márgenes: [descripción de márgenes brutos, EBITDA, márgenes netos por línea de negocio si están disponibles].

Ayúdame a analizar la sostenibilidad de los márgenes:
1. Las normalizaciones del EBITDA que el vendedor presenta y cuáles son cuestionables: ¿qué ajustes hacen al EBITDA reportado y cuáles tienen justificación real vs. cuáles son cosmética financiera?
2. La estructura de costes fijos vs. variables: ¿cómo escalan los costes con el crecimiento de ingresos? ¿El modelo tiene apalancamiento operativo real?
3. Los costes "por debajo del EBITDA" que impactan en el free cash flow real: capex recurrente, amortizaciones, cambios en capital circulante, servicio de deuda
4. Las partidas de gasto que aparecen "por debajo de la línea" y deberían contarse como operacionales: costes de restructuración recurrentes, compensación en acciones que tiene coste económico real
5. El free cash flow conversion: qué porcentaje del EBITDA se convierte realmente en caja disponible y cuáles son los factores que generan la diferencia
```

---

## 3. Análisis del balance y la deuda: lo que debe la empresa más allá de la deuda financiera

```
El balance de la empresa objetivo muestra: [descripción de los principales activos, pasivos y deuda].

Ayúdame a analizar el balance en profundidad:
1. La deuda financiera neta real: incluyendo deuda fuera de balance (arrendamientos operativos capitalizados bajo IFRS 16, compromisos de compra, deuda contingente de earn-outs)
2. La calidad de los activos del balance: ¿hay activos que están en el balance por su valor histórico pero valen significativamente menos hoy (goodwill de adquisiciones antiguas, inventario obsoleto, cuentas por cobrar de dudoso cobro)?
3. Las obligaciones contingentes: garantías otorgadas, litigios en curso, compromisos de pensiones, pasivos medioambientales — lo que no aparece en el balance pero puede materializarse
4. El capital circulante: ¿el ciclo de conversión de efectivo de la empresa es normal para su sector o hay señales de tensión en el capital circulante (clientes que tardan más en pagar, proveedores que acortan sus plazos)?
5. La deuda de mantenimiento: ¿qué inversión en capex es necesaria para mantener el negocio en su estado actual? ¿Está siendo realizada o se está difiriendo para mejorar el EBITDA en el corto plazo?
```

---

## 4. Evaluación de las proyecciones: distinguir la ambición de la alucinación financiera

```
El equipo vendedor presenta las siguientes proyecciones financieras: [descripción de las proyecciones para los próximos 3-5 años — crecimiento de ingresos, evolución de márgenes, inversiones].

Ayúdame a evaluar la credibilidad de las proyecciones:
1. Los supuestos de crecimiento de ingresos: ¿son consistentes con el crecimiento histórico, la dinámica del mercado y la posición competitiva? ¿Cuántos años consecutivos de crecimiento acelerado se asumen?
2. Los supuestos de expansión de márgenes: ¿en qué se basan? ¿Han logrado alguna vez esos márgenes o son completamente hipotéticos?
3. El análisis de sensibilidad: cómo cambia la valoración si el crecimiento es un 20% menor del proyectado, o si los márgenes se estabilizan en lugar de expandirse
4. Los escenarios de downside: ¿cuánto vale el negocio si el crecimiento se estanca? ¿Cómo afecta a la estructura de capital de la operación?
5. El track record de projections: ¿cómo de precisas han sido las proyecciones del equipo en el pasado? ¿Hay historial de sobre-promesas sistemáticas?
```

---

## 5. Síntesis financiera: la valoración ajustada y la recomendación de inversión

```
He completado el análisis financiero. Los hallazgos más importantes son: [resumen de los hallazgos de calidad de ingresos, márgenes, balance y proyecciones].

Ayúdame a sintetizar la due diligence financiera:
1. Los ajustes a la valoración que derivan de los hallazgos: cómo cada hallazgo modifica el precio o las condiciones de la transacción
2. Los riesgos financieros que requieren representaciones y garantías específicas en el contrato de compraventa
3. El precio máximo que tiene sentido pagar con el escenario base y el escenario de downside razonablemente probable
4. Las condiciones precedentes financieras que deben cumplirse antes del cierre (representaciones que deben verificarse, elementos que deben resolverse)
5. La recomendación de inversión: proceder a la valoración del vendedor / proceder con ajuste de precio / proceder con condiciones específicas / no proceder — con la justificación financiera de cada recomendación
```

---

## Resultado esperado

Una due diligence financiera rigurosa con IA como herramienta de análisis permite identificar en días los riesgos ocultos que tomarían semanas de auditoría tradicional. El objetivo no es encontrar razones para no hacer la operación — es hacer la operación al precio correcto y con las protecciones contractuales adecuadas para los riesgos identificados.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'CFOs e inversores que realizan due diligence financiera de empresas objetivo en operaciones de M&A o inversión de capital',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Due diligence legal en M&A con IA: identificar los riesgos jurídicos antes de firmar',
                'description'       => 'Framework para General Counsel y asesores legales que realizan due diligence jurídica en operaciones de M&A: cómo organizar el proceso, identificar los riesgos más críticos y traducir los hallazgos en condiciones de la transacción.',
                'prompt_content'    => <<<'EOT'
Eres un General Counsel con más de 15 años liderando due diligence legales en operaciones de M&A de diferente escala y complejidad. Has revisado data rooms con miles de documentos, coordinado equipos de asesores externos en múltiples jurisdicciones y traducido los hallazgos jurídicos en condiciones concretas de la transacción. Sabes que la due diligence legal no es un ejercicio burocrático — es la herramienta que determina si pagas el precio correcto, si el vendedor puede entregar lo que promete y si la empresa que compras tiene pasivos ocultos que materializarán después del cierre.

Hoy vas a ayudarme a realizar la due diligence legal de una operación de M&A usando IA de forma sistemática.

**Contexto de mi situación:**
- Tipo de operación: [compraventa de acciones / compraventa de activos / fusión / inversión de capital]
- Empresa objetivo: [descripción general, sector, jurisdicciones donde opera]
- Estado del data room: [documentación completa / parcial / en proceso de carga]
- Timeframe: [plazo para completar la due diligence]

---

## 1. Organización del proceso de due diligence legal: el plan de trabajo antes de abrir el data room

```
La operación es [descripción]. El data room contiene [descripción del volumen y tipo de documentación disponible]. El plazo es [descripción]. Los asesores externos involucrados son [descripción].

Ayúdame a organizar el proceso de due diligence legal:
1. El plan de trabajo estructurado por áreas de revisión: corporativa, contratos materiales, propiedad intelectual, laboral, real estate, litigios, protección de datos, regulatorio — con la priorización según el tipo de negocio
2. La asignación de responsabilidades entre el equipo legal interno y los asesores externos: qué hace cada uno, con qué plazo y bajo qué proceso de escalada cuando encuentren algo relevante
3. La request list inicial: el listado de documentos y preguntas que debe proporcionar el vendedor antes de empezar la revisión (y las señales de alerta si no los proporcionan)
4. El proceso de seguimiento de hallazgos: cómo documentar los riesgos identificados de forma que el equipo de M&A pueda usarlos en la negociación
5. El informe de due diligence legal: la estructura del informe final que facilita la toma de decisiones por parte del equipo directivo y del board
```

---

## 2. Revisión corporativa y de gobierno: la estructura que se está comprando

```
La estructura corporativa de la empresa objetivo es: [descripción de la estructura de filiales, participaciones, jurisdicciones]. Los documentos corporativos disponibles incluyen: [descripción].

Ayúdame a revisar la estructura corporativa:
1. La verificación de la titularidad y la transmisibilidad de las acciones o participaciones: ¿el vendedor puede vender lo que dice vender? ¿Hay restricciones, pre-empciones o derechos de arrastre/acompañamiento?
2. Los derechos de los socios minoritarios: ¿hay socios con derechos especiales que bloqueen la operación o que deban recibir compensación específica?
3. Los poderes y autorizaciones corporativas: ¿tiene el representante del vendedor las autorizaciones corporativas necesarias para firmar? ¿Qué aprobaciones de órganos de gobierno requiere la operación?
4. Los pactos parasociales y acuerdos de accionistas: ¿hay acuerdos privados entre accionistas que afecten a la operación o a la gobernanza post-cierre?
5. Las irregularidades corporativas históricas: repartos de dividendos no conformes, acuerdos de junta no documentados correctamente, operaciones vinculadas no aprobadas — lo que puede generar responsabilidad para el comprador
```

---

## 3. Revisión de contratos materiales: las obligaciones que heredamos

```
Los contratos materiales de la empresa objetivo incluyen: [descripción de los tipos principales: clientes, proveedores, financiación, arrendamientos, licencias].

Ayúdame a revisar los contratos materiales:
1. Las cláusulas de cambio de control: ¿qué contratos tienen cláusulas que dan derecho a resolver o modificar el contrato en caso de cambio de accionista? ¿Qué impacto tiene en el negocio si se ejercen?
2. Los contratos con condiciones fuera de mercado: acuerdos con partes vinculadas a precios anormales, contratos de exclusividad que limitan el negocio, compromisos de compra o venta que generan obligaciones financieras significativas
3. Los contratos de financiación: covenants que podrían incumplirse con el cambio de control, deuda que vence anticipadamente en caso de la operación, garantías cruzadas entre entidades del grupo
4. Los acuerdos de propiedad intelectual: licencias entrantes críticas para el negocio que son intransferibles, acuerdos de desarrollo con IP compartida, cesiones de IP de empleados o contratistas que no se han formalizado correctamente
5. Los contratos laborales de personas clave: cláusulas de no competencia, acuerdos de retención, change of control triggers en la remuneración variable
```

---

## 4. Pasivos contingentes y litigios: lo que no aparece en el balance

```
Los litigios activos y contingencias conocidas de la empresa objetivo son: [descripción]. Las áreas de riesgo regulatorio son: [descripción].

Ayúdame a analizar los pasivos contingentes:
1. La evaluación de cada litigio activo: probabilidad de condena, impacto económico estimado, estado procesal y plazo de resolución esperado
2. Los litigios latentes: áreas del negocio donde hay riesgo de reclamación aunque todavía no haya procedimiento iniciado (reclamaciones de empleados, reclamaciones de consumidores, investigaciones regulatorias en curso)
3. El cumplimiento regulatorio: ¿opera la empresa en sectores con autorización administrativa? ¿Está al corriente de todas sus obligaciones regulatorias en cada jurisdicción?
4. La exposición fiscal contingente: ¿hay operaciones o estructuras fiscales que podrían ser cuestionadas por las autoridades tributarias? ¿Cuál es la exposición estimada?
5. La protección contractual que debemos negociar: representaciones y garantías específicas, retenciones del precio (escrow), mecanismos de ajuste de precio post-cierre — según los riesgos identificados
```

---

## 5. Síntesis jurídica: la recomendación legal y las condiciones de la transacción

```
He completado la due diligence legal. Los hallazgos más relevantes son: [resumen de los hallazgos de estructura corporativa, contratos, pasivos contingentes y compliance].

Ayúdame a sintetizar los hallazgos en:
1. El resumen ejecutivo de riesgos legales para el equipo directivo: los 5-7 hallazgos que pueden tener impacto material en la decisión o en el precio
2. Los riesgos que deberían traducirse en condiciones de la transacción: precios de ajuste, retenciones, obligaciones de saneamiento, representaciones específicas con períodos de garantía extendidos
3. Los riesgos que deberían bloquear la operación si no se resuelven satisfactoriamente antes del cierre
4. El plan de trabajo post-cierre: las acciones jurídicas prioritarias en los primeros 90 días (regularizaciones societarias, novaciones de contratos, cambios de titularidad de licencias)
5. Las representaciones y garantías (reps and warranties) que deben incluirse en el contrato para proteger al comprador de los riesgos identificados
```

---

## Resultado esperado

Una due diligence legal rigurosa con IA permite al equipo legal analizar volúmenes de documentación mayores con mayor velocidad y sistematización que la revisión manual tradicional. El resultado no es un informe exhaustivo para demostrar el trabajo realizado — es una guía práctica para tomar la decisión correcta y estructurar la operación de forma que el comprador esté protegido de los riesgos identificados.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'General Counsel y asesores legales que realizan due diligence jurídica en operaciones de M&A y necesitan identificar los riesgos más críticos de forma sistemática',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Due diligence de cliente en Customer Success: evaluar la salud real antes de renovar',
                'description'       => 'Framework para equipos de Customer Success que necesitan realizar una evaluación profunda de la salud de una cuenta antes de la renovación, identificando riesgos ocultos de churn y oportunidades de expansión que no aparecen en los dashboards.',
                'prompt_content'    => <<<'EOT'
Eres un VP de Customer Success con experiencia en equipos que han pasado de gestionar renovaciones de forma reactiva a predecirlas y gestionarlas con tres meses de antelación. Has implementado procesos de evaluación profunda de la salud del cliente que van más allá de los health scores automáticos — que frecuentemente dan señal verde en cuentas que se pierden a los 30 días de la renovación. Sabes que la due diligence de un cliente antes de la renovación no es un proceso burocrático: es la diferencia entre retener la cuenta y perderla.

Hoy vas a ayudarme a realizar la due diligence de salud de cliente antes de la renovación usando IA de forma sistemática.

**Contexto de mi situación:**
- Tipo de cliente: [enterprise / mid-market / SMB]
- ARR de la cuenta: [descripción]
- Fecha de renovación: [cuándo renueva]
- Señales actuales: [descripción de los indicadores que tenemos: health score, NPS, uso del producto, interacciones recientes]

---

## 1. Análisis de uso del producto: lo que los datos dicen que los dashboards no muestran

```
Los datos de uso del producto de este cliente son: [descripción de las métricas disponibles: DAU, WAU, features usadas, funciones no usadas, evolución del uso en los últimos 6 meses].

Ayúdame a interpretar los datos de uso en profundidad:
1. Las tendencias de uso que predicen churn con mayor fiabilidad en el tipo de producto que gestiono: ¿reducción de DAU, abandono de features core, disminución de usuarios activos, aumento de errores sin resolución?
2. La diferencia entre el uso reportado en el health score y el uso real que revelan los datos granulares (el health score suele agregar de formas que ocultan problemas específicos)
3. Las features que el cliente usa intensivamente vs. las que compró y nunca adoptó: el gap de adopción es tanto un riesgo (insatisfacción por ROI no realizado) como una oportunidad (ayudarles a activarlas)
4. La distribución del uso entre los usuarios del cliente: ¿es un producto adoptado por todo el equipo o depende de 2-3 usuarios power? La concentración de uso es un riesgo de churn significativo
5. Los cambios de comportamiento en los últimos 90 días: ¿hay señales de que el uso está cambiando de forma que predice una decisión de renovación negativa?
```

---

## 2. Evaluación de la relación: más allá del NPS trimestral

```
El historial de interacciones con este cliente incluye: [descripción de las reuniones, emails, tickets de soporte, EBRs realizados en los últimos 12 meses]. El NPS o CSAT más reciente es [descripción].

Ayúdame a evaluar la salud real de la relación:
1. La calidad de las interacciones recientes: ¿se están reuniendo con los interlocutores correctos o solo con el usuario operativo? ¿Cuándo fue la última vez que hablamos con el Economic Buyer?
2. Los cambios de interlocutor en el cliente: ¿ha habido rotación en el equipo que usa el producto? ¿Hay un nuevo directivo que no tiene historia con el producto y no tiene los mismos incentivos para renovar?
3. La reciprocidad de la relación: ¿el cliente responde a las comunicaciones proactivamente o hay que perseguirlos para cada interacción? (La falta de reciprocidad es una de las señales más claras de churn próximo)
4. Los temas que el cliente ha planteado repetidamente y que no han sido resueltos: el churn raramente es una sorpresa — suele estar anunciado por quejas recurrentes que el equipo no ha resuelto
5. La percepción del valor: ¿el cliente articula claramente el valor que obtiene del producto cuando se le pregunta, o da respuestas vagas que sugieren que no tiene claro por qué lo usa?
```

---

## 3. Análisis del contexto del cliente: los factores externos que afectan la renovación

```
Lo que sé sobre el contexto actual del cliente es: [descripción de la situación de la empresa, sector, posibles cambios organizacionales, presupuestos, competidores del cliente].

Ayúdame a analizar el contexto externo:
1. Los cambios organizacionales del cliente que afectan a la decisión de renovación: ¿hay una reestructuración, un cambio de CEO, una fusión o adquisición que cambia las prioridades o el presupuesto?
2. La situación financiera observable del cliente: ¿hay señales de presión financiera (recortes de personal, reducción de presupuesto publicitario, noticias negativas del sector) que van a generar presión en la renovación?
3. La dinámica competitiva: ¿qué competidores están activos en esta cuenta? ¿Ha habido demos con la competencia? ¿Qué señales tenemos de que están siendo tentados?
4. Los cambios estratégicos del cliente que podrían hacer nuestro producto más o menos relevante: si cambian su forma de operar, ¿nuestro producto sigue siendo la herramienta correcta para lo que necesitan?
5. Los proyectos estratégicos del cliente donde nuestro producto podría tener mayor relevancia y que el CS debería conectar con el valor del producto
```

---

## 4. Evaluación del ROI: cuantificar el valor entregado antes de la conversación de renovación

```
La propuesta de valor original con la que se vendió este cliente fue [descripción]. Los datos disponibles sobre el uso y los outcomes del cliente son [descripción].

Ayúdame a cuantificar el ROI entregado:
1. La metodología para calcular el ROI de este cliente basándome en los datos disponibles (uso, outcomes directamente medibles, benchmarks del sector)
2. Los argumentos de ROI que son defensibles con datos vs. los que son hipotéticos (el cliente puede cuestionar los argumentos sin evidencia)
3. El ROI que el cliente esperaba cuando compró vs. el ROI que ha obtenido realmente: si hay un gap, cómo abordarlo antes de la conversación de renovación
4. La forma de presentar el ROI en la conversación de renovación: qué formato, qué nivel de detalle y qué lenguaje resuena mejor con el Economic Buyer de este cliente específico
5. Los pasos que podemos dar en los próximos 60 días para mejorar el ROI demostrable antes de la renovación (activación de features, implementación de mejores prácticas, casos de uso adicionales)
```

---

## 5. Plan de acción de renovación: de la evaluación a la estrategia de cierre

```
He completado la due diligence de salud del cliente. El perfil de riesgo es [descripción]. La renovación es en [fecha]. Los hallazgos más importantes son [resumen].

Diseña el plan de acción de renovación que incluya:
1. La estrategia de engagement de las próximas 8 semanas: con quién debemos reunirnos, cuándo y con qué objetivo en cada interacción
2. Los problemas críticos que deben resolverse antes de la conversación de renovación (si los hay)
3. La propuesta de renovación: qué incluir, qué precio tiene sentido pedir, si hay expansión posible y cómo secuenciar la conversación de retención + expansión
4. El plan de contingencia: si la renovación está en riesgo serio, cuándo es el momento correcto de involucrar a dirección, qué concesiones estamos dispuestos a hacer y cuáles son los límites
5. Las lecciones de esta cuenta para el equipo de CS: qué podría haberse detectado y gestionado antes, y cómo incorporar ese aprendizaje al proceso de gestión de otras cuentas en situación similar
```

---

## Resultado esperado

Los equipos de Customer Success que realizan due diligence sistemática de sus cuentas antes de la renovación tienen tasas de retención significativamente más altas que los que gestionan renovaciones de forma reactiva. La due diligence de cliente no es trabajo adicional — es trabajo mejor dirigido hacia los factores que realmente predicen la retención en lugar de los indicadores que son fáciles de medir pero poco predictivos.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Equipos de Customer Success que quieren evaluar la salud real de sus cuentas antes de la renovación para mejorar la retención y detectar oportunidades de expansión',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Due diligence de clientes freelance con IA: evaluar antes de comprometerse',
                'description'       => 'Framework para freelancers y consultores independientes que quieren evaluar sistemáticamente a un cliente potencial antes de aceptar el proyecto: cómo identificar los clientes que pagan mal, cambian el scope o no respetan el trabajo.',
                'prompt_content'    => <<<'EOT'
Eres un consultor independiente con más de 10 años de experiencia trabajando con clientes de diferentes tamaños y sectores. Has aceptado proyectos que terminaron siendo pesadillas — clientes que cambian el brief cinco veces, que no pagan en los plazos acordados, que tratan el trabajo del freelancer como si fuera de su propiedad desde el primer borrador, o que esperan disponibilidad 24/7 por un precio de hora de estudiante. También has aprendido a detectar las señales de estos clientes en las primeras interacciones, mucho antes de firmar nada.

Hoy vas a ayudarme a realizar la due diligence de un cliente potencial antes de aceptar el proyecto usando IA de forma sistemática.

**Contexto de mi situación:**
- Tipo de proyecto que me ofrecen: [descripción del proyecto, duración, presupuesto]
- Tipo de cliente: [startup / empresa grande / agencia / particular / PYME]
- Estado de la conversación: [primer contacto / ya hemos hablado / están comparando propuestas]
- Mi situación actual: [tengo capacidad disponible / estoy casi al límite / podría rechazar proyectos actuales por este]

---

## 1. Evaluación inicial: las señales que aparecen antes de la primera reunión

Las señales más reveladoras sobre cómo va a ser un cliente aparecen en las primeras comunicaciones — antes de que ninguna de las dos partes esté en modo "negociación".

```
El cliente potencial me contactó de la siguiente manera: [descripción del primer contacto: cómo encontraron mi trabajo, el mensaje inicial, lo que pedían y cómo lo pedían].

Ayúdame a interpretar las señales del primer contacto:
1. Las señales positivas que indican un cliente con el que vale la pena trabajar: respeto por el tiempo, claridad en lo que piden, información sobre el presupuesto, referencia a mi trabajo específico
2. Las señales de alerta en el primer contacto: urgencia injustificada, vaguedad deliberada sobre el presupuesto, solicitud de trabajo gratuito de prueba, comparación explícita con otros proveedores más baratos
3. Los red flags que deberían llevarme a declinar sin ni siquiera reunirme: solicitud de trabajo sin contrato, propuesta de pago en visibilidad o a resultado, tono que no respeta los límites profesionales
4. La investigación básica que debo hacer antes de la reunión: qué puedo averiguar sobre esta empresa o persona en internet (LinkedIn, Glassdoor, opiniones de otros freelancers, presencia digital general)
5. Las preguntas que debo hacerme antes de la reunión: ¿quiero realmente este proyecto o solo estoy considerándolo por presión económica?
```

---

## 2. La primera reunión como due diligence: las preguntas que revelan el cliente real

```
Tengo una primera reunión con el cliente potencial. El proyecto es [descripción]. Mi objetivo en esta reunión no es solo vender — es también evaluar si este cliente merece mi tiempo.

Diseña el plan de primera reunión que incluya:
1. Las preguntas sobre el proyecto que revelan si el cliente tiene claridad o si el brief va a cambiar permanentemente (señal de futuro scope creep): "¿Qué define el éxito de este proyecto para ti?" / "¿Qué pasa si el resultado no cumple las expectativas?"
2. Las preguntas sobre el proceso de trabajo que revelan la dinámica que tendrá el proyecto: cómo han trabajado con freelancers antes, qué salió bien y qué salió mal, cómo toman decisiones de aprobación
3. Las preguntas sobre el presupuesto y los plazos que revelan si la expectativa es realista o no: "¿Cuánto han presupuestado para este tipo de trabajo?" / "¿Qué flexibilidad hay en el plazo si aparecen complejidades?"
4. Las señales de comportamiento durante la reunión que predicen cómo será la relación: ¿escuchan o solo hablan? ¿Respetan el tiempo de la reunión? ¿Tienen claridad sobre quién toma las decisiones?
5. La pregunta que siempre hago al final: "¿Hay algo que no he preguntado y que sería relevante que supiera antes de presentar la propuesta?"
```

---

## 3. Evaluación de la empresa o persona cliente: lo que puedo averiguar externamente

```
El cliente potencial es [descripción: empresa / persona / agencia]. El nombre o información disponible es [descripción].

Ayúdame a realizar la investigación externa:
1. Las fuentes donde puedo encontrar información sobre cómo trata este cliente a sus proveedores: LinkedIn (comentarios de exempleados, perfiles de freelancers que trabajaron con ellos), Glassdoor, foros de freelancers, grupos profesionales del sector
2. Las señales positivas y negativas que busco en la presencia digital de la empresa: ¿pagan sus facturas en Google? ¿Tienen reputación de respetar la propiedad intelectual de los creativos?
3. La evaluación de la estabilidad financiera del cliente: ¿hay señales de que podrían tener problemas para pagar (noticias de reestructuración, búsquedas masivas de personal, reducción de actividad)?
4. La verificación de la legitimidad del proyecto: ¿el proyecto que me describen es coherente con la actividad real de la empresa? ¿Tiene sentido lo que me están pidiendo para el tipo de empresa que son?
5. El contacto con la red profesional: ¿conozco a alguien que haya trabajado con este cliente y al que pueda preguntar directamente?
```

---

## 4. Evaluación del contrato y las condiciones: protegerme antes de empezar

```
El cliente ha enviado su propuesta de contrato o ha aceptado que prepare yo el contrato. Las condiciones que proponen son: [descripción].

Ayúdame a evaluar las condiciones del contrato:
1. Las cláusulas de propiedad intelectual: ¿me ceden la PI cuando han pagado íntegramente o desde el primer entregable? ¿Hay cesión de derechos más amplia de lo que el proyecto requiere?
2. Las condiciones de pago: ¿cuándo pagan, cómo verifico que es un plazo razonable para mi flujo de caja, qué pasa si se retrasan?
3. La gestión del scope: ¿hay un proceso claro para gestionar los cambios al brief inicial? ¿O las "pequeñas modificaciones" que siempre terminan siendo trabajo significativo no remunerado?
4. Las cláusulas de confidencialidad y no competencia: ¿son razonables para el tipo de trabajo o son tan amplias que limitan mi capacidad de trabajar en mi especialidad?
5. Las condiciones de terminación: ¿puedo terminar el contrato si el cliente no cumple? ¿Qué pasa con el trabajo realizado y los pagos pendientes si el proyecto se cancela a mitad?
```

---

## 5. Decisión final: aceptar, negociar o declinar con criterio

```
He completado la evaluación del cliente potencial. Los hallazgos son: [resumen de las señales positivas y negativas encontradas en cada dimensión].

Ayúdame a tomar la decisión final:
1. La evaluación ponderada: cómo comparar las señales positivas y negativas para llegar a una decisión que no se base solo en la necesidad económica del momento
2. Los escenarios de decisión: cuándo tiene sentido aceptar aunque haya señales amarillas (y qué condiciones adicionales exigir), cuándo tiene sentido negociar antes de decidir, cuándo tiene sentido declinar sin más
3. La negociación de condiciones si decido aceptar con ajustes: qué cambiar en el contrato, en el proceso de trabajo o en el precio para compensar los riesgos identificados
4. El mensaje de declive profesional: cómo rechazar un proyecto de forma que la relación quede bien y deje la puerta abierta (porque el cliente que hoy no es el correcto puede serlo en otro momento o puede referirte a alguien que sí lo sea)
5. Las lecciones de esta evaluación: qué he aprendido sobre los tipos de cliente con los que funciono mejor y cuáles son las señales que voy a priorizar en futuras evaluaciones
```

---

## Resultado esperado

Los freelancers que hacen due diligence sistemática de sus clientes potenciales ganan más — no porque cobren más por proyecto, sino porque dedican su tiempo a proyectos con clientes que pagan en plazo, respetan el brief y valoran el trabajo. El tiempo invertido en evaluar a un cliente antes de empezar se recupera múltiples veces en la calidad de la experiencia de trabajo y en la ausencia de las conversaciones difíciles que drenan energía y tiempo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 30,
                'use_case'          => 'Freelancers y consultores independientes que quieren evaluar sistemáticamente a sus clientes potenciales antes de aceptar proyectos para evitar relaciones problemáticas',
                'vote_score'        => 42,
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
