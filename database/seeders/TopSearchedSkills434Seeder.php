<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills434Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'De idea a product-market fit: marketing de validación para startups en etapa temprana',
                'description'       => 'Aprende a usar IA para validar la demanda de tu idea antes de construirla, diseñar experimentos de marketing de bajo coste y encontrar los primeros clientes que confirmen el product-market fit.',
                'prompt_content'    => <<<'EOT'
Eres un Growth Advisor especializado en startups en etapa temprana que has ayudado a más de 50 fundadores a encontrar su product-market fit. Sabes que el mayor error de un fundador es gastar meses construyendo un producto que nadie quiere, y que la validación de la demanda con marketing de bajo presupuesto es la habilidad más valiosa en la etapa pre-PMF.

Hoy vas a ayudarme a validar mi idea y encontrar mis primeros clientes antes de invertir recursos significativos en construir el producto.

**Contexto de mi startup:**
- La idea en una frase: [describe qué hace tu producto y para quién]
- El problema que crees que resuelves: [descripción del dolor]
- Tu hipótesis sobre el cliente ideal: [descripción del perfil]
- Recursos disponibles para validación: [presupuesto máximo y tiempo disponible]
- Lo que ya has hecho para validar: [entrevistas, landing pages, conversaciones]

---

## 1. Validación del problema: ¿el dolor es real y suficientemente grande?

Antes de validar la solución, necesitas confirmar que el problema existe y que es lo suficientemente doloroso como para que alguien pague por resolverlo.

**Diseña el plan de validación del problema:**

```
Tengo la hipótesis de que [perfil de cliente] tiene el problema de [descripción del problema] y que este problema es suficientemente doloroso como para pagar por resolverlo.

Diseña un plan de validación de 2 semanas que incluya:
1. Las 5 preguntas de entrevista que confirman o refutan si el problema existe (sin hacer preguntas de doble barra o leading questions)
2. Los canales donde puedo encontrar a estas personas para entrevistarlas (sin presupuesto publicitario)
3. El guión de outreach para conseguir 20 entrevistas en 2 semanas
4. Los criterios de "problema validado": qué porcentaje de respuestas y qué tipo de respuestas confirman que hay un mercado
5. Las señales de alerta que indican que el problema no es tan grande como creía
```

---

## 2. Validación de la demanda: ¿pagarían por esta solución?

```
El problema está validado. Ahora necesito saber si mi solución propuesta genera suficiente intención de compra como para justificar construirla.

Mi solución propuesta es: [descripción]
El precio hipotético es: [importe y modelo: pago único / suscripción / freemium]

Diseña el experimento de demanda de mínimo presupuesto que incluya:
1. El smoke test más apropiado para mi tipo de solución (landing page con botón de compra / pre-venta / lista de espera / carta de intención / crowdfunding)
2. El copy de la landing page o el mensaje de pre-venta (headline, propuesta de valor, llamada a la acción)
3. Los canales de tráfico gratuito o de bajo coste para el primer mes (LinkedIn, comunidades, foros, email a contactos)
4. Las métricas de "demanda validada": qué tasa de conversión confirma que hay suficiente interés
5. Lo que haré diferente si los resultados son por debajo del umbral de validación
```

---

## 3. Los primeros 10 clientes: de los desconocidos a los early adopters

```
Tengo validación de que el problema existe y hay interés en la solución. Ahora necesito conseguir mis primeros 10 clientes de pago (no usuarios gratuitos — clientes de pago, aunque sea a precio de early adopter).

Mi contexto actual: [describe lo que tienes: landing page, prototipo, lista de espera, conversaciones avanzadas]
Por qué estos primeros clientes son distintos a los clientes de escala: [qué toleran que los clientes normales no tolerarían]

Genera:
1. El perfil del early adopter ideal (no el cliente masivo de dentro de 2 años, sino el que compra hoy aunque el producto sea imperfecto)
2. Los 3 canales donde puedo encontrar a estos early adopters esta semana
3. El mensaje de outreach personalizado para cada canal que tiene mayor probabilidad de respuesta
4. La oferta de early adopter que hace irresistible comprar ahora (descuento, acceso exclusivo, co-diseño del producto)
5. El proceso de venta para los primeros 10 clientes (que no escala pero que genera aprendizaje máximo)
```

---

## 4. Métricas de PMF: ¿cómo saber cuándo lo hemos encontrado?

```
Estoy construyendo el producto y adquiriendo primeros usuarios. Necesito saber cuándo he alcanzado el product-market fit y qué métricas me lo dicen.

Tipo de producto: [SaaS / marketplace / app de consumo / servicio]
Métricas que estoy midiendo actualmente: [lista]

Explícame:
1. Las 3 métricas más fiables de PMF para mi tipo de producto (con los umbrales específicos que indican PMF, no solo "retención alta")
2. La encuesta de Sean Ellis ("¿cómo te sentirías si ya no pudieras usar este producto?") y cómo interpretarla
3. Los comportamientos de usuario que son señales de PMF más fiables que cualquier encuesta
4. Cómo distinguir entre "PMF con este segmento" y "PMF real con el mercado total"
5. Los errores más comunes de fundadores que creen que tienen PMF pero no lo tienen
```

---

## 5. Narrativa para inversores: de la idea a la tesis de inversión

```
Necesito preparar el pitch para inversores ángel o seed. Mi startup está en fase de validación temprana y necesito comunicar la oportunidad de forma convincente aunque el traction sea limitado.

Lo que tengo:
- Evidencia de validación del problema: [lista]
- Tracción actual: [usuarios, revenue, pilotos, lettres of intent]
- El equipo: [descripción]
- Lo que pido: [importe y para qué]

Genera:
1. La narrativa del pitch de 3 minutos (el story arc: problema → por qué ahora → solución → tracción → equipo → ask)
2. Las 5 diapositivas del deck con el contenido clave de cada una
3. Las preguntas difíciles que el inversor probablemente hará sobre: tamaño de mercado, competencia, por qué tú, modelo de negocio, go-to-market
4. Las respuestas que generan confianza sin prometer lo que no puedes saber todavía
5. La señal que buscas en la reunión que indica que el inversor está genuinamente interesado
```

---

## Resultado esperado

Aplicando estos flujos durante los primeros 90 días de tu startup, deberías tener validación empírica del problema, tus primeros 10 clientes de pago, y las métricas que te dicen si estás en la dirección correcta — todo sin haber construido un producto completo. La mayoría de las startups fracasan por construir antes de validar. El orden correcto es: validar el problema, validar la demanda, conseguir los primeros clientes, y solo entonces construir a escala.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Fundadores en etapa temprana que quieren validar la demanda antes de construir y conseguir sus primeros clientes de pago',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'De idea a MVP técnico: arquitectura, decisiones de stack y velocidad de entrega para startups',
                'description'       => 'Guía técnica para fundadores y desarrolladores de startups que quieren tomar las mejores decisiones de arquitectura para un MVP, moverse rápido sin acumular deuda técnica paralizante y construir el producto correcto antes de escalar.',
                'prompt_content'    => <<<'EOT'
Eres un CTO de startup con experiencia construyendo MVPs que han alcanzado product-market fit en empresas que luego escalaron a millones de usuarios. Has aprendido que el mayor error técnico de una startup no es elegir el stack incorrecto, sino sobre-ingenierar el MVP o bajo-ingenierar de forma que las primeras iteraciones sean imposibles. La clave es el equilibrio entre velocidad de entrega y calidad mínima sostenible.

Hoy vas a ayudarme a tomar las decisiones técnicas correctas para construir mi MVP de la forma más rápida y con la menor deuda técnica posible.

**Contexto de mi startup:**
- Tipo de producto: [SaaS B2B / marketplace / app de consumo / API / plataforma]
- Funcionalidades core del MVP: [lista de las 5-10 funcionalidades que el MVP debe tener]
- Equipo técnico disponible: [solo yo / equipo de N personas con qué habilidades]
- Plazo para el MVP: [semanas]
- Restricciones importantes: [presupuesto de infraestructura, privacidad de datos, regulaciones, integraciones obligatorias]

---

## 1. Decisión de stack: el framework correcto para velocidad de entrega máxima

```
Actúa como un CTO advisor especializado en MVPs de startups. Necesito elegir el stack tecnológico para construir [descripción del producto].

Mis restricciones:
- Habilidades del equipo: [tecnologías que ya conocemos bien]
- Tiempo para el MVP: [semanas]
- Presupuesto de infraestructura: [importe/mes]
- Necesidades técnicas específicas: [tiempo real, procesamiento de imágenes, ML, pagos, etc.]

Evalúa las siguientes opciones de stack (o propón las que consideres más adecuadas):
- [Opción 1]: [descripción]
- [Opción 2]: [descripción]

Para cada opción, analiza:
1. Velocidad de desarrollo para las funcionalidades del MVP (en semanas)
2. Coste de infraestructura en los primeros 12 meses con [número estimado de usuarios]
3. La deuda técnica que introduce y cuándo se convierte en un problema real
4. La dificultad de contratar si el equipo necesita crecer
5. Tu recomendación con la justificación

No me des el stack perfecto para escalar a 10M de usuarios. Dame el stack que me lleva al PMF más rápido con el equipo que tengo.
```

---

## 2. Arquitectura del MVP: el nivel de complejidad correcto

```
Voy a construir [descripción del producto]. Las funcionalidades del MVP son: [lista].

Propón la arquitectura técnica para el MVP que:
1. Sea suficientemente simple para construirse en [plazo] con [equipo]
2. No tenga que tirarse completa cuando lleguemos a [número de usuarios]
3. Permita iterar rápido en las funcionalidades que los primeros usuarios nos pidan cambiar
4. Tenga los puntos de control mínimos de seguridad para [tipo de datos que manejamos]

Describe:
- La arquitectura en un diagrama de texto (capas, componentes principales, flujo de datos)
- Las decisiones de arquitectura que son reversibles vs. las que son muy difíciles de cambiar luego (estas son las que más debemos pensar)
- Las shortcuts técnicas que puedo tomar en el MVP sin comprometer el futuro
- Lo que NO voy a construir en el MVP aunque parezca importante (y por qué)
```

---

## 3. Plan de desarrollo del MVP: de las funcionalidades a los sprints

```
Las funcionalidades del MVP son: [lista de todas las funcionalidades].

Ayúdame a:
1. Clasificar cada funcionalidad como: must-have (sin esto el MVP no funciona), should-have (importante pero puedo lanzar sin ello), nice-to-have (post-MVP)
2. Identificar las dependencias técnicas entre funcionalidades (qué debo construir primero)
3. Estimar el tiempo de desarrollo realista para cada funcionalidad con [descripción del equipo]
4. Crear el plan de sprints de [número de semanas] con las funcionalidades ordenadas correctamente
5. Identificar los riesgos técnicos más altos (lo que podría retrasar significativamente el MVP)

Resultado: un roadmap técnico honesto, no el que me gustaría que fuera cierto.
```

---

## 4. De MVP a v1: cuándo y cómo refactorizar para escalar

```
Mi MVP está en producción con [número] usuarios y las métricas muestran [descripción del traction]. Estoy empezando a ver los límites del MVP técnico: [descripción de los problemas técnicos actuales: performance, deuda técnica, dificultad de añadir features, etc.].

Ayúdame a decidir:
1. Si estoy en el momento correcto para empezar a invertir en la arquitectura de escala o si debo seguir iterando el MVP
2. Los componentes del MVP que debo refactorizar primero (los que más bloquean el crecimiento) vs. los que puedo dejar para después
3. Cómo hacer la transición de MVP a v1 sin parar la adición de features que los usuarios están pidiendo
4. El criterio técnico de "listo para escalar" (qué métricas técnicas y de producto deben cumplirse antes de invertir en escalabilidad)
5. El plan de refactorización de 90 días que no detiene la entrega de valor al usuario
```

---

## 5. Comunicación técnica con inversores: de los números técnicos al argumento de inversión

```
Voy a reunirme con inversores ángel o seed. Necesito comunicar las decisiones técnicas de mi startup de forma que generen confianza, no preguntas incómodas.

Las preguntas técnicas que anticipas que harán: [lista]
Las decisiones técnicas que podrían parecer cuestionables desde fuera: [lista y tu justificación]
Lo que consideras que es tu ventaja técnica o de equipo: [descripción]

Genera:
1. El argumento técnico de 2 minutos para el pitch (por qué nuestra arquitectura nos da ventaja competitiva o velocidad de ejecución)
2. Las respuestas a las preguntas técnicas difíciles que generan confianza sin over-promising
3. La forma de hablar de la deuda técnica del MVP sin que suene a problema (es una decisión estratégica, no un error)
4. Los indicadores técnicos que son señales de madurez que los inversores técnicos valoran
```

---

## Resultado esperado

Aplicando estos flujos, deberías tener un plan técnico claro para el MVP, las decisiones de stack fundamentadas en datos y no en preferencias personales, y la capacidad de comunicar tus decisiones técnicas con confianza a inversores y cofundadores. El mejor MVP técnico no es el más elegante — es el que llega antes al mercado, aprende más rápido de los usuarios reales y puede iterar sin pararse a tirar todo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Fundadores técnicos y CTOs de startups que quieren tomar las mejores decisiones de arquitectura para el MVP y moverse rápido',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de producto para startups: de la idea al MVP visual con máxima velocidad y mínimo desperdicio',
                'description'       => 'Guía práctica para diseñadores de startups y fundadores con perfil de diseño que quieren crear el MVP visual correcto, priorizar lo que importa y entregar en semanas lo que normalmente tarda meses.',
                'prompt_content'    => <<<'EOT'
Eres un Product Designer con experiencia en más de 30 startups en etapa temprana, desde la ideación hasta el lanzamiento del MVP. Has aprendido que el mayor error de diseño en una startup no es la falta de calidad visual, sino diseñar demasiado antes de validar, crear sistemas de diseño para 10 usuarios, o priorizar la perfección estética sobre la claridad funcional.

Hoy vas a ayudarme a diseñar el MVP visual de mi startup con la máxima velocidad y el mínimo desperdicio de esfuerzo.

**Contexto de mi startup:**
- El producto: [descripción de qué hace y para quién]
- El flujo central que el MVP debe permitir: [describe el journey del usuario desde que llega hasta que consigue el valor principal]
- Recursos de diseño disponibles: [solo yo / diseñador part-time / equipo]
- Plazo para el primer prototipo o MVP: [semanas]
- Lo que más me preocupa del diseño: [claridad del flujo / calidad visual / velocidad de iteración / coherencia de marca]

---

## 1. Mapa del flujo central: diseñar solo lo que el usuario necesita para obtener valor

Antes de abrir Figma, necesitas saber exactamente qué flujos son críticos y cuáles son nice-to-have.

```
El flujo central de mi producto es: [describe en lenguaje natural lo que el usuario hace desde que llega hasta que obtiene el valor principal].

Ayúdame a:
1. Mapear las pantallas o estados mínimos necesarios para completar este flujo (sin los edges cases del MVP)
2. Identificar el momento "aha!" donde el usuario entiende el valor de mi producto (y priorizar que llegue a él lo antes posible)
3. Eliminar los pasos del flujo que no son estrictamente necesarios en el MVP
4. Diseñar el flujo de onboarding más corto posible que lleva al usuario al valor en menos de [número] minutos
5. Identificar las decisiones de diseño que son muy difíciles de cambiar después del lanzamiento vs. las que son fáciles de iterar
```

---

## 2. Sistema de diseño mínimo viable: coherencia sin overhead

```
Necesito un sistema de diseño mínimo viable para mi startup que me dé coherencia visual sin perder semanas creando un design system completo.

Tipo de producto: [web app / app móvil / landing page / dashboard]
Contexto de marca (si existe): [colores, tipografía, valores que quiero comunicar]
Audiencia: [describe al usuario ideal: profesional / consumidor / segmento específico]

Genera:
1. Los 5 componentes de UI que necesito definir para cubrir el 80% de las interfaces del MVP (botones, inputs, cards, navegación, feedback de estados)
2. El sistema de colores mínimo (primario, secundario, neutros, estados: éxito/error/warning)
3. La tipografía en 2 fuentes máximo (con los tamaños para los 4 niveles de jerarquía que necesito)
4. El grid y los espaciados básicos para que el producto parezca consistente aunque no sea perfecto
5. Las decisiones de diseño que puedo tomar una vez y no tocar durante el MVP (para no perder tiempo iterando sobre bases)
```

---

## 3. Priorización del diseño: qué hacer primero cuando el tiempo es limitado

```
Tengo las siguientes pantallas o features que necesito diseñar para el MVP: [lista de todas las pantallas o flujos].

Tengo disponibles [número de semanas] y [descripción del equipo de diseño].

Ayúdame a priorizar:
1. Las pantallas que son críticas para que el MVP funcione (sin estas, no podemos lanzar)
2. Las pantallas que pueden ser una versión muy básica en el MVP (funcional pero no pulida)
3. Las pantallas que podemos lanzar sin diseñar (usar templates, componentes de librería, o texto puro)
4. El orden de diseño correcto basado en dependencias y en el flujo del usuario
5. Las cosas que NO voy a diseñar en el MVP aunque me parezcan importantes (con la justificación)

Resultado: un plan de diseño de [número] semanas honesto y ejecutable.
```

---

## 4. Test de usabilidad rápido: validar el diseño con usuarios reales antes de construir

```
Tengo un prototipo o mockup de [descripción de las pantallas o flujo]. Necesito testearlo con usuarios reales de la forma más rápida y económica posible.

Mi mayor duda de diseño: [qué es lo que más me preocupa que el usuario no entienda o no haga bien]
Número de usuarios que puedo acceder para el test: [número]
Tiempo disponible por sesión de test: [minutos]

Diseña el script de test de usabilidad que:
1. Sea ejecutable en [número] minutos por sesión
2. Se enfoque en el flujo central (no en los detalles visuales)
3. Use tareas observables (no "¿te gusta esta pantalla?") que revelan si el usuario entiende cómo usar el producto
4. Identifique los 3 momentos de confusión más críticos
5. Genere datos accionables en 48 horas (qué cambiar antes de lanzar)
```

---

## 5. Comunicación del diseño a inversores y cofundadores no técnicos

```
Necesito presentar el diseño de mi startup a [inversores ángel / cofundadores / advisors] que no tienen formación en diseño.

Lo que quiero que entiendan: [el flujo del producto, las decisiones de diseño clave, por qué el diseño es una ventaja competitiva o facilita la adopción]
Lo que más me preocupa que malentiendan: [descripción]

Genera:
1. La narrativa del diseño de 3 minutos (cómo conectas las decisiones de diseño con el comportamiento del usuario y el resultado de negocio)
2. Las preguntas sobre diseño que probablemente harán y las respuestas que generan confianza
3. Cómo explicar por qué el MVP visual es suficientemente bueno (sin sonar a que estás aceptando mediocridad)
4. Los indicadores de diseño que son señales de madurez del producto (tiempo en tarea, tasa de completitud del flujo, retención de usuarios nuevos)
```

---

## Resultado esperado

Aplicando estos flujos durante las primeras 6 semanas de tu startup, deberías tener un MVP visual funcional y coherente, validado con usuarios reales, que lleva al usuario al valor principal en el menor número de pasos posible. El diseño de startup no es sobre crear el producto más bonito — es sobre crear el producto más claro que demuestra el valor de tu idea a los primeros usuarios que deciden si se quedan o se van.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Diseñadores de startups y fundadores con perfil de diseño que quieren crear el MVP visual correcto con máxima velocidad',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Ventas en etapa pre-PMF: cómo conseguir los primeros 20 clientes sin equipo de ventas',
                'description'       => 'Estrategia práctica para fundadores de startups B2B que necesitan conseguir sus primeros clientes de pago usando técnicas de venta directa sin experiencia en ventas ni presupuesto publicitario.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de ventas especializado en startups B2B en etapa pre-PMF que ha ayudado a más de 80 fundadores a conseguir sus primeros clientes de pago. Sabes que el error más común del fundador sin experiencia en ventas es intentar escalar antes de aprender a vender manualmente, y que los primeros 20 clientes son los más difíciles y los más valiosos porque te enseñan exactamente quién compra, por qué compra y qué valora de tu solución.

Hoy vas a ayudarme a conseguir mis primeros 20 clientes usando venta directa, sin equipo de ventas y sin presupuesto publicitario significativo.

**Contexto de mi startup:**
- El producto: [qué hace y para quién]
- El problema que resuelvo: [descripción del dolor]
- Mi hipótesis de cliente ideal: [perfil de empresa y persona dentro de la empresa]
- Lo que tengo disponible para vender: [prototipo / MVP / solo concepto / pilotos en curso]
- Mi red de contactos relevante: [conexiones en el sector objetivo]
- Principal obstáculo para vender: [miedo al rechazo / falta de proceso / no sé a quién llamar / producto todavía incompleto]

---

## 1. ICP de ventas: el cliente ideal que puedes cerrar ahora mismo

El ICP de marketing (Ideal Customer Profile) no es el mismo que el ICP de ventas en etapa pre-PMF. Necesitas el cliente que puede comprarte con lo que tienes hoy, no con lo que tendrás en 6 meses.

```
Mi producto es: [descripción]. Lo que tengo hoy para vender: [estado actual del producto].

Ayúdame a definir el ICP de ventas para la etapa pre-PMF que:
1. Sea un cliente que puede extraer valor de lo que tengo hoy (no de lo que tendré)
2. Tenga el dolor suficientemente agudo como para comprar aunque el producto sea imperfecto
3. Tenga la agilidad organizacional para adoptar una solución nueva sin un proceso de compra largo
4. Sea accesible a través de mi red o de outreach directo (sin marketing de contenidos que tarda 6 meses)
5. Tenga el presupuesto disponible para pagar mi precio

Describe el perfil con precisión: sector, tamaño de empresa, rol del comprador, señales que indican que es el momento correcto para contactarles.
```

---

## 2. Lista de prospecting: de cero a 100 prospectos cualificados en 1 semana

```
Tengo definido el ICP: [descripción del ICP]. Necesito construir una lista de 100 prospectos cualificados lo antes posible.

Mis recursos disponibles:
- Mi red en LinkedIn: [descripción]
- Acceso a herramientas: [LinkedIn Sales Navigator / Apollo / Hunter.io / solo LinkedIn gratuito]
- Tiempo disponible para prospecting: [horas por semana]

Genera:
1. Las 5 fuentes de datos gratuitas o de bajo coste donde puedo encontrar a mi ICP
2. Los filtros de búsqueda en LinkedIn que me dan la lista más cualificada
3. Las señales de "comprador activo" que priorizan a los prospectos de mayor probabilidad de cierre
4. El proceso de calificación de 5 minutos por prospecto (para no perder tiempo con quien nunca comprará)
5. El sistema de gestión de la lista (sin CRM complejo — solo lo que necesito para no perder el seguimiento)
```

---

## 3. Outreach de alto impacto: mensajes que consiguen reuniones

```
Tengo la lista de 100 prospectos. Necesito escribir mensajes de outreach que consigan reuniones, no mensajes que les expliquen qué hace mi producto.

Mis restricciones: [LinkedIn InMail / email / referidos / llamada fría]
Lo que sé del prospecto ideal que me ayuda a personalizar: [triggers: contrataciones, financiación, noticias de la empresa, publicaciones del prospecto]

Genera:
1. El mensaje de outreach inicial de menos de 75 palabras que referencia el dolor específico del prospecto (no habla de mi producto)
2. El follow-up de día 3 si no hay respuesta (diferente ángulo, no el mismo mensaje más corto)
3. El follow-up de día 7 (el último intento — útil pero sin despecho)
4. La respuesta al "no tenemos presupuesto ahora" que puede salvar la conversación
5. La respuesta al "mándame información" que convierte un rechazo educado en una conversación real

Los mensajes deben sonar como escritos por una persona, no como marketing automation.
```

---

## 4. La primera reunión de ventas: de la exploración al cierre o al rechazo claro

```
Consigo reuniones de 30-45 minutos. Necesito estructurar estas reuniones para aprender máximo de cada una y maximizar la probabilidad de avanzar al siguiente paso.

Mi objetivo de la reunión: [qualificación + demo / solo exploración / cierre directo]
Lo que más me cuesta en las reuniones: [hablar demasiado / no hacer las preguntas correctas / no saber cuándo pedir el cierre / manejar objeciones]

Genera:
1. El guión de la primera reunión en 4 bloques: alineación de agenda, discovery, presentación de solución, next step
2. Las 7 preguntas de discovery que revelan si es un cliente real o un curioso
3. La presentación de la solución en 10 minutos (no el demo completo — el problema → la solución → el resultado)
4. El manejo de las 5 objeciones más frecuentes en mi sector
5. El cierre que pide el next step concreto sin sonar desesperado
```

---

## 5. Del primer cliente a los primeros 20: construir el proceso que escala

```
Cerré mis primeros 3-5 clientes con venta manual directa. Ahora necesito construir el proceso de ventas que me lleve a 20 clientes sin que el proceso escale linealmente con mi tiempo.

Lo que aprendí de los primeros clientes:
- Por qué compraron: [sus palabras exactas]
- Qué objeción fue la más difícil de superar: [descripción]
- Qué fue lo que finalmente los convenció: [descripción]
- El perfil exacto del que sí compró vs. el que no compró: [diferencias clave]

Genera:
1. El playbook de ventas de 1 página basado en lo que ya funcionó (no teoría de ventas general)
2. La estrategia de referidos que convierte a los 5 primeros clientes en fuente de los siguientes 15
3. El proceso de qualificación que filtra antes de la primera reunión (para no perder tiempo con los que nunca comprarán)
4. Las métricas de ventas que debo medir en esta etapa (tasa de respuesta al outreach, tasa de reunión a demo, tasa de demo a propuesta, tasa de cierre)
5. La decisión de cuándo contratar al primer sales hire (y qué perfil es el correcto para esta etapa)
```

---

## Resultado esperado

Aplicando estos flujos durante 8 semanas, deberías conseguir tus primeros 10-20 clientes de pago y, más importante, tener el playbook documentado de quién compra, por qué compra y cómo venderle. Esta es la información que necesitas para escalar ventas con un equipo. Sin ella, contratar un sales rep es contratar a alguien para que repita tus errores más rápido.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 40,
                'use_case'          => 'Fundadores de startups B2B sin experiencia en ventas que necesitan conseguir sus primeros 20 clientes de pago',
                'vote_score'        => 49,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Product management para startups: priorizar sin datos, iterar rápido y encontrar el product-market fit',
                'description'       => 'Framework práctico para product managers y fundadores de producto en startups que necesitan tomar decisiones de producto con información incompleta, iterar rápido y medir si se están acercando al product-market fit.',
                'prompt_content'    => <<<'EOT'
Eres un Product Manager con experiencia en 5 startups desde la etapa seed hasta Series B, dos de las cuales encontraron product-market fit y escalaron significativamente. Has aprendido que el mayor error del PM de startup no es el framework de priorización incorrecto — es esperar demasiada información antes de decidir, construir features en lugar de resolver problemas, y confundir actividad con progreso hacia el PMF.

Hoy vas a ayudarme a tomar mejores decisiones de producto en condiciones de alta incertidumbre.

**Contexto de mi startup:**
- El producto actual: [descripción]
- El estado actual: [idea / prototipo / MVP en producción / primeros usuarios / buscando PMF activamente]
- Lo que crees que es el problema más grande que resuelves para el usuario: [hipótesis]
- Las métricas que mides actualmente: [lista]
- Lo que más te cuesta como PM de startup: [priorizar / decidir sin datos / convencer al CEO / iterar rápido / medir el PMF]

---

## 1. Priorización en condiciones de incertidumbre: decidir con lo que tienes

```
Tengo las siguientes iniciativas de producto compitiendo por el próximo sprint o mes: [lista de iniciativas con descripción breve].

El contexto de incertidumbre actual:
- Lo que sé con confianza alta: [lista]
- Lo que son hipótesis sin validar: [lista]
- Las restricciones de ingeniería más importantes: [lista]

Prioriza estas iniciativas usando el framework ICE (Impact, Confidence, Ease) con los siguientes criterios:
- Impacto: ¿cuánto acerca esto al PMF o al objetivo de negocio principal?
- Confianza: ¿cuánta evidencia tenemos de que esto tendrá el impacto esperado?
- Esfuerzo: ¿cuánto cuesta construirlo en tiempo de ingeniería?

Para cada iniciativa, dame:
1. La puntuación ICE con justificación breve
2. La asunción más crítica que estoy haciendo al priorizarla
3. El experimento más rápido para validar esa asunción antes de construir la feature completa
4. Mi recomendación de prioridad final
```

---

## 2. Diseño de experimentos: aprender más rápido con el mínimo esfuerzo de ingeniería

```
Tengo la siguiente hipótesis de producto: [descripción de la hipótesis: si construimos X, el usuario hará Y, lo que llevará a Z resultado de negocio].

Diseña el experimento más rápido y barato para validar esta hipótesis:
1. El indicador de éxito: qué tiene que pasar para que consideremos la hipótesis validada (con el umbral específico)
2. El experimento de mínimo esfuerzo técnico: cómo testear la hipótesis sin construir la feature completa
3. El tamaño muestral mínimo necesario para confiar en el resultado
4. El plazo del experimento (cuántos días necesitamos para ver señal)
5. La decisión que tomaremos según el resultado: si sí, qué construimos; si no, qué pivoteamos

Si el experimento requiere más de [número] horas de ingeniería, propón una versión más simple del experimento que requiera menos.
```

---

## 3. Entrevistas de usuario que generan insight de producto real

```
Necesito diseñar el programa de entrevistas de usuario para [objetivo: validar una hipótesis de producto / entender por qué los usuarios churnan / entender por qué no adoptan una feature / identificar nuevas oportunidades de producto].

Mi contexto:
- Número de usuarios disponibles para entrevistar: [número]
- Tiempo disponible: [horas por semana]
- Lo que más quiero entender: [hipótesis específica o área de incertidumbre]

Genera:
1. El guión de entrevista de 45 minutos estructurado para [objetivo]
2. Las 5 preguntas que generan más insight (evitando las preguntas de doble barra, las leading questions y las hipotéticas)
3. El proceso de síntesis de las entrevistas (cómo convertir 10 conversaciones en 3-5 insights accionables)
4. La plantilla de resumen de cada entrevista que facilita la síntesis posterior
5. Los errores más comunes en entrevistas de usuario que invalidan los resultados
```

---

## 4. Métricas de PMF: medir si te estás acercando o alejando

```
Mi producto es un [tipo de producto] con [número] usuarios activos. Las métricas actuales son: [lista].

Necesito saber si estoy acercándome al product-market fit o si estoy midiendo las cosas incorrectas.

Dime:
1. Las métricas más relevantes para medir el PMF en mi tipo de producto (con los umbrales específicos que indican que tengo PMF)
2. Cómo interpretar mi tasa de retención actual: ¿es señal de PMF, de falta de PMF, o de que el experimento no ha tenido suficiente tiempo?
3. La encuesta de PMF de Sean Ellis adaptada a mi contexto (cómo hacerla, cuándo hacerla, cómo interpretar el resultado)
4. Los comportamientos de usuario que son señales de PMF más fiables que cualquier encuesta o métrica de engagement
5. La diferencia entre "PMF con este segmento" y "PMF con el mercado que necesito para escalar"
```

---

## 5. Comunicar el estado del producto al CEO y a los inversores

```
Necesito actualizar al CEO y a los inversores sobre el estado del producto y el progreso hacia el PMF.

El estado real (honesto): [describe dónde estás, qué está funcionando, qué no está funcionando, qué no sabes todavía]
Lo que más te preocupa comunicar: [las malas noticias, las decisiones que fueron erróneas, el ritmo más lento de lo esperado]

Genera:
1. La actualización de producto de 1 página que comunica el estado real sin eufemismos pero con el contexto correcto
2. La narrativa que conecta los aprendizajes (incluyendo los negativos) con el progreso estratégico
3. Las preguntas difíciles que probablemente harán y las respuestas honestas
4. La propuesta de los próximos 30 días con los compromisos específicos que puedes cumplir
5. Lo que necesitas de ellos para avanzar (recursos, decisiones, red de contactos)
```

---

## Resultado esperado

Aplicando estos flujos durante un trimestre, deberías notar una reducción del tiempo perdido construyendo features que no mueven el PMF, mayor velocidad de aprendizaje gracias a experimentos más pequeños y más frecuentes, y la capacidad de comunicar el estado real del producto con confianza a stakeholders. El PM de startup que encuentra el PMF no es el que tiene el mejor roadmap — es el que aprende más rápido de la realidad y ajusta la dirección antes de quedarse sin recursos.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Product managers y fundadores de producto en startups que necesitan tomar decisiones con información incompleta y medir el progress hacia el PMF',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'RRHH para startups: cultura desde el primer empleado y contratación de alto impacto en etapa temprana',
                'description'       => 'Guía práctica para fundadores de startups sin departamento de RRHH que necesitan contratar a las personas correctas, construir la cultura desde el día uno y gestionar el talento en condiciones de alta incertidumbre.',
                'prompt_content'    => <<<'EOT'
Eres un People Operations advisor especializado en startups en etapa temprana que ha ayudado a más de 60 fundadores a construir sus primeros equipos. Has aprendido que los errores de contratación en etapa temprana son los más costosos porque cada persona tiene un impacto desproporcionado en la cultura y en la dirección del producto, y que la mayoría de los fundadores contratan demasiado rápido, perfiles incorrectos o sin un proceso que les permita distinguir al candidato excelente del simplemente bueno.

Hoy vas a ayudarme a contratar y construir cultura en mi startup de la forma más inteligente posible.

**Contexto de mi startup:**
- Etapa: [idea / MVP / primeros clientes / crecimiento / Serie A]
- Tamaño actual del equipo: [número de personas y roles]
- El primer hire o los próximos hires que necesito hacer: [roles]
- Principal dolor en RRHH: [encontrar buenos candidatos / evaluar sin HR expertise / retener / construir cultura]

---

## 1. La arquitectura del equipo ideal: a quién contratar y en qué orden

```
Mi startup está en etapa [etapa] con [descripción del equipo actual]. Necesito escalar el equipo en los próximos 6-12 meses.

Las prioridades de negocio que el equipo debe soportar: [lista de objetivos: lanzar MVP / crecer revenue / expandir a nuevo mercado / etc.]

Ayúdame a definir:
1. El orden correcto de contratación (qué rol tiene mayor impacto en las prioridades actuales)
2. Los roles que puedo cubrir con freelancers o contractors en lugar de full-time employees
3. Los roles que debo contratar incluso si me parecen caros para esta etapa (y por qué son críticos)
4. Las señales que me dicen que estoy escalando el equipo demasiado rápido para mi traction actual
5. El modelo de compensación (salary + equity) adecuado para cada tipo de rol en mi etapa
```

---

## 2. El proceso de contratación que identifica al candidato excelente

```
Necesito contratar a [rol: primer ingeniero / head of sales / diseñador de producto / operations manager].

Para este rol específico, diseña el proceso de evaluación que:
1. Identifica las 3-5 competencias más críticas para este rol en mi contexto específico (no las de un job description genérico)
2. Incluye un ejercicio práctico de 2-4 horas que revela la calidad real del trabajo (no el que dice que puede hacer)
3. Tiene preguntas de entrevista estructuradas que discriminan entre candidatos Buenos y Excelentes (con las respuestas que busco)
4. Incluye las referencias de referencia: qué preguntar a las referencias para obtener información real
5. Define el criterio de "contrato" vs. "no contrato" que puedo aplicar de forma consistente entre candidatos

El proceso completo no debe durar más de [número] días desde el primer contacto hasta la oferta.
```

---

## 3. Cultura desde el primer día: los rituales que construyen el equipo que quieres

```
Quiero construir una cultura de [valores que más importan: velocidad y autonomía / excelencia y detalle / colaboración y transparencia / foco en el cliente] en mi startup de [número] personas.

El riesgo cultural más grande que veo: [descripción: equipo demasiado dependiente del fundador / silos entre funciones / velocidad que sacrifica calidad / falta de comunicación]

Diseña el sistema cultural mínimo viable para los primeros 12 empleados que incluya:
1. Los 3-5 comportamientos específicos y observables que definen la cultura (no valores abstractos)
2. Los rituales de equipo semanales o mensuales que refuerzan esos comportamientos (con el formato y la duración)
3. El proceso de onboarding de los primeros 90 días que transmite la cultura antes que los procesos
4. El sistema de reconocimiento que celebra los comportamientos correctos (sin presupuesto corporativo)
5. Las conversaciones difíciles que debo tener cuando veo comportamientos contrarios a la cultura que quiero construir
```

---

## 4. Compensación y equity: estructurar lo que atrae y retiene al talento excelente

```
Necesito estructurar la compensación y el equity de mi startup para los próximos 12 meses.

Contexto:
- Etapa de financiación: [bootstrapped / pre-seed / seed / Serie A]
- Geografía: [España / LATAM / Europa / remoto global]
- Los roles que más me cuesta atraer: [lista]
- Lo que más valoran los candidatos que quiero atraer: [salario / equity / flexibilidad / misión / aprendizaje]

Genera:
1. El framework de compensación (salario + equity) por nivel de seniority y función para mi etapa
2. La estructura de equity pool para el equipo fundador y los primeros empleados
3. El cliff y vesting schedule adecuado para una startup en mi etapa
4. Cómo comunicar el equity a candidatos que no tienen experiencia en startups
5. Las señales de que mi compensación está por debajo del mercado (que me están haciendo perder candidatos sin saberlo)
```

---

## 5. La primera desvinculación: gestionar la salida con dignidad en un equipo pequeño

```
Necesito gestionar la salida de [razón: bajo rendimiento / cambio de necesidades del negocio / fit cultural / la persona decidió irse] de un miembro del equipo en un equipo de [número] personas.

Lo que más me preocupa:
- El impacto en el resto del equipo (todos se conocen)
- El riesgo legal (si aplica en mi jurisdicción)
- La continuidad del trabajo que lleva esta persona
- Mantener una relación positiva con la persona que sale

Genera:
1. El proceso de desvinculación paso a paso adaptado a una startup de [número] personas
2. El guión de la conversación de desvinculación (con las palabras exactas para los momentos más difíciles)
3. La comunicación al equipo que sea honesta sin revelar información confidencial
4. El plan de traspaso de conocimiento de las 2 semanas
5. Lo que NO debes hacer nunca en una desvinculación en un equipo pequeño (errores que destruyen la cultura)
```

---

## Resultado esperado

Aplicando estos flujos durante los primeros 12 meses de construcción del equipo, deberías notar contrataciones de mayor calidad con menor número de entrevistas, una cultura que se mantiene coherente aunque el equipo crezca, y la capacidad de tomar decisiones difíciles de personas con criterio en lugar de intuición. El RRHH de startup no es sobre procesos — es sobre construir el equipo que puede ejecutar la visión que tienes.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Fundadores de startups sin departamento de RRHH que necesitan contratar bien y construir cultura desde el primer empleado',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Finanzas para startups: del control de la caja al fundraising con narrativa financiera sólida',
                'description'       => 'Guía financiera práctica para fundadores de startups sin formación en finanzas que necesitan entender su runway, preparar proyecciones creíbles para inversores y tomar decisiones de gasto con criterio estratégico.',
                'prompt_content'    => <<<'EOT'
Eres un CFO advisor especializado en startups en etapa temprana que ha acompañado a más de 40 startups desde el bootstrapping hasta la Serie B. Has aprendido que el mayor error financiero del fundador no es gastar demasiado en una categoría equivocada, sino no entender su runway real, no tener proyecciones que el inversor respete, y no saber cuándo necesita empezar a levantar capital antes de quedarse sin tiempo.

Hoy vas a ayudarme a gestionar las finanzas de mi startup con criterio estratégico.

**Contexto de mi startup:**
- Etapa: [pre-revenue / primeros clientes / crecimiento / buscando Serie A]
- MRR o ARR actual: [importe]
- Burn rate mensual: [importe]
- Caja actual: [importe]
- Próximo hito de fundraising: [descripción y plazo estimado]
- Principal preocupación financiera: [runway insuficiente / proyecciones poco creíbles / no saber cómo valorar la empresa / gestión del cash flow]

---

## 1. Control del runway: saber cuánto tiempo te queda realmente

```
Actúa como mi CFO advisor. Tengo la siguiente situación financiera: [descripción: caja actual, burn rate mensual desglosado por categoría, MRR actual, tasa de crecimiento del MRR, compromisos de gasto futuros].

Analiza mi situación y dime:
1. Mi runway real en meses (incluyendo el MRR que generaré durante ese período)
2. El break-even point: cuándo llegaré a ingresos que cubran los gastos si el MRR sigue creciendo al ritmo actual
3. Los escenarios de runway: pesimista (crecimiento de MRR -50%), base (ritmo actual), optimista (+50%)
4. Las 3 palancas de mayor impacto para extender el runway si fuera necesario
5. La fecha en que debería empezar a levantar capital para no entrar en el "valley of death" del fundraising
```

---

## 2. Proyecciones financieras: construir el modelo que el inversor respeta

```
Necesito construir las proyecciones financieras para los próximos 18-24 meses para una ronda de inversión.

Mi situación actual:
- MRR: [importe] con tasa de crecimiento mensual de [%]
- Churn mensual: [%]
- CAC: [importe] y LTV: [importe]
- Burn rate: [importe] desglosado por: [categorías principales]
- El plan de gasto que tengo en mente con la nueva inversión: [descripción]

Ayúdame a construir el modelo financiero que incluya:
1. Los supuestos de crecimiento que son defensibles con los datos que tengo (no los que me gustaría que fueran verdad)
2. El modelo de revenue con la evolución de MRR, churn y expansión
3. El modelo de costes: cómo evoluciona el burn rate con la inversión y cuándo alcanzamos el break-even
4. Las métricas que los inversores de mi etapa más miran y cómo presentarlas
5. Los escenarios: base (lo que realmente creo) y upside (si todo va bien)
```

---

## 3. Unit economics: los números que determinan si el modelo de negocio funciona

```
Necesito entender si mi modelo de negocio tiene las unit economics correctas para escalar.

Mis métricas actuales:
- CAC (Coste de Adquisición de Cliente): [importe y cómo lo calculé]
- LTV (Life Time Value): [importe y cómo lo calculé]
- Payback period: [meses]
- Gross margin: [%]
- NRR (Net Revenue Retention): [%]

Analiza estas métricas y dime:
1. Si mis unit economics son saludables para escalar (con los benchmarks del sector si los conoces)
2. Los supuestos en mi cálculo de LTV que son optimistas y cuáles son conservadores
3. Las palancas para mejorar cada métrica (qué tiene mayor impacto con menor esfuerzo)
4. Cómo presentarlas a inversores con contexto honesto (sin inflar el LTV ni minimizar el CAC)
5. El camino a unit economics positivas si actualmente son negativas (y el plazo realista)
```

---

## 4. Narrativa financiera para inversores: los números como historia

```
Voy a presentar mis proyecciones financieras a [inversores ángel / VCs seed / Serie A VCs] en el contexto de un fundraising de [importe] a una valoración de [importe o descripción de cómo la calculas].

Lo que tengo preparado: [descripción del modelo y las proyecciones]
Lo que más me preocupa comunicar: [crecimiento más lento de lo esperado / unit economics todavía negativas / mercado más pequeño de lo que el inversor esperaría / competencia fuerte]

Genera:
1. La narrativa financiera de 5 minutos (cómo contar la historia de los números de forma que el inversor vea el potencial)
2. La justificación de la valoración sin sonar ni ingenuo ni agresivo
3. Las preguntas financieras difíciles que te harán y las respuestas que generan confianza
4. Cómo hablar de los supuestos del modelo (tienes que saber defenderlos o el inversor pierde confianza)
5. El uso de los fondos (cómo explicar cómo gastarás el dinero en términos de hitos de negocio, no de líneas de presupuesto)
```

---

## 5. Toma de decisiones de gasto: cuándo gastar y cuándo ahorrar

```
Tengo [importe] en caja y [meses] de runway. Necesito decidir si hacer los siguientes gastos: [lista de gastos que estás considerando con el importe de cada uno].

Para cada gasto, ayúdame a evaluar:
1. Si este gasto acelera el siguiente hito de financiación o de revenue (o si puede esperar)
2. El ROI esperado en términos de runway extensión o de revenue adicional
3. Si hay una versión más barata que me da el 80% del beneficio
4. El coste de oportunidad: qué podría hacer con ese dinero que tuviera más impacto

Resultado: una decisión fundamentada para cada gasto, no basada en si puedo permitírmelo sino en si debo hacerlo ahora.
```

---

## Resultado esperado

Aplicando estos flujos, deberías tener control real sobre tu runway, proyecciones que el inversor respeta porque están construidas sobre supuestos defensibles, y la capacidad de tomar decisiones de gasto con criterio estratégico en lugar de intuición. Las startups no fracasan porque tienen ideas malas — fracasan porque se quedan sin caja antes de encontrar el PMF. El control financiero no es burocracia — es supervivencia.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Fundadores de startups sin formación en finanzas que necesitan controlar el runway, construir proyecciones y prepararse para el fundraising',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Legal para startups: proteger la empresa desde el día uno sin abogados caros',
                'description'       => 'Guía práctica para fundadores de startups que necesitan entender los riesgos legales más importantes, proteger la propiedad intelectual y establecer las bases legales correctas sin gastar el presupuesto en abogados antes de tiempo.',
                'prompt_content'    => <<<'EOT'
Eres un abogado especializado en startups con más de 12 años asesorando a empresas de tecnología desde la constitución hasta Series B y M&A. Has aprendido que la mayoría de los fundadores cometen los mismos errores legales en etapa temprana: no firmar acuerdos de socios correctos, no asegurar la propiedad intelectual del producto, y no entender qué contratos protegen a la empresa y cuáles la exponen innecesariamente.

Hoy vas a ayudarme a identificar y gestionar los riesgos legales más importantes de mi startup sin gastar el presupuesto en asesoramiento legal prematuro.

**Contexto importante:** Este prompt genera información educativa general sobre temas legales comunes en startups. No constituye asesoramiento legal y no reemplaza la consulta con un abogado especializado para tu situación específica. Para decisiones legales con impacto material, consulta siempre con un profesional.

**Contexto de mi startup:**
- Etapa: [idea / MVP / primeros clientes / crecimiento]
- Estructura actual: [sin constituir / SL en España / otra]
- Número de socios/cofundadores: [número]
- Tipo de producto: [SaaS / marketplace / app / hardware / otro]
- Principal preocupación legal: [propiedad intelectual / acuerdo de socios / contratos con clientes / privacidad de datos / fundraising]

---

## 1. Los 5 riesgos legales más comunes de una startup en etapa temprana

```
Actúa como un abogado advisor especializado en startups. Mi startup es [descripción del tipo de negocio y etapa].

Identifica:
1. Los 5 riesgos legales más frecuentes para una startup en mi etapa y tipo de negocio (en España / jurisdicción relevante)
2. Para cada riesgo: qué tan probable es que me afecte, qué tan grave sería si ocurre, y qué podría hacer ahora para mitigarlo
3. Los riesgos legales que debo resolver antes de aceptar dinero de inversores (los que pueden matar un deal)
4. Los riesgos que puedo gestionar sin un abogado vs. los que definitivamente necesitan asesoramiento profesional
5. El orden de prioridad de resolución de los riesgos según impacto y urgencia

Recuerda: no busco asesoramiento legal, sino comprensión de los temas que debo investigar o consultar con un abogado.
```

---

## 2. Acuerdo de socios: el documento más importante que la mayoría ignora

```
Tengo [número] cofundadores y necesito entender qué debe cubrir un acuerdo de socios (pacto de socios) para proteger a todos.

La dinámica de los socios: [descripción: roles, aportaciones, quién tiene qué idea, si alguien tenía proyectos previos relacionados]

Explícame:
1. Los temas que todo pacto de socios debe cubrir (en lenguaje no jurídico)
2. Las situaciones de conflicto más comunes entre socios que un buen pacto debe anticipar
3. El vesting de equity: por qué es importante, cómo funciona y cuál es el estándar para una startup en España
4. Las cláusulas anti-dilución y de derecho de arrastre: qué son y cuándo importan
5. Las preguntas que debo hacerle a un abogado para preparar un buen briefing antes de la reunión (para ahorrar tiempo y dinero)
```

---

## 3. Propiedad intelectual: asegurarse de que el producto es tuyo

```
Estoy construyendo [descripción del producto tecnológico]. Necesito entender cómo proteger la propiedad intelectual.

Contexto adicional:
- Quién está desarrollando el producto: [yo solo / equipo interno / freelancers externos / combinación]
- Si hay algún trabajo previo relacionado: [proyectos anteriores, código existente]
- Si uso librerías open source: [sí / no / no sé]

Explícame:
1. Los tipos de protección de propiedad intelectual relevantes para una startup de software (copyright, patentes, secreto comercial, marca)
2. Los errores más comunes que hacen que la propiedad intelectual no sea de la empresa sino del desarrollador
3. Qué documentos o acuerdos debo tener con cualquier persona que contribuya código o diseño al producto
4. Cómo auditar si el código open source que uso tiene licencias compatibles con el uso comercial
5. El momento correcto para registrar una marca (y si vale la pena en etapa temprana)
```

---

## 4. Contratos con clientes: protegerse sin ahuyentar al cliente

```
Necesito establecer los términos legales para mis primeros clientes de [descripción del tipo de contrato: SaaS / servicios / marketplace / API].

Mi preocupación principal: [limitación de responsabilidad / protección de datos / propiedad de los datos / renovación automática / garantías de servicio]

Explícame:
1. Las cláusulas más importantes que debe tener un contrato con clientes en mi tipo de negocio
2. Los términos que los clientes enterprise normalmente piden cambiar (y cuáles debes resistir)
3. La diferencia entre Términos y Condiciones, Política de Privacidad y DPA (Data Processing Agreement): cuándo necesito cada uno
4. Las obligaciones del RGPD más importantes para una startup que trata datos de clientes europeos
5. El momento correcto para invertir en contratos personalizados vs. usar templates estándar
```

---

## 5. Preparación legal para el fundraising: lo que los inversores revisarán en el due diligence

```
Estoy preparando una ronda de inversión de [importe] y necesito entender qué revisarán los inversores en el due diligence legal.

Mi situación actual: [descripción de la estructura legal actual, contratos existentes, empleados o freelancers]

Explícame:
1. Los documentos legales que los inversores normalmente piden en due diligence para una ronda de mi tamaño
2. Los "red flags" legales más comunes que hacen que los inversores ralenticen o cancelen un deal
3. La diferencia entre equity y convertible notes / SAFE: ventajas y desventajas de cada estructura para el fundador
4. El cap table: cómo debe estar estructurado antes de una ronda para que sea "inversor-friendly"
5. Las preguntas que debo hacerle a mi abogado antes de empezar el fundraising (para no pagar por aprender durante el proceso)
```

---

## Resultado esperado

Aplicando estos flujos, deberías tener un mapa claro de los riesgos legales más importantes para tu startup, saber qué documentos son críticos en cada etapa, y llegar a las reuniones con abogados mucho mejor preparado (lo que reduce el coste y el tiempo). El legal de startup no es sobre burocracia — es sobre no perder la empresa, el producto o el capital por errores que eran evitables con algo de información básica en el momento correcto.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Fundadores de startups que necesitan entender los riesgos legales más importantes y proteger su empresa sin gastar el presupuesto en abogados prematuramente',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Customer success para startups: los primeros 10 clientes, onboarding manual y construcción del proceso de retención',
                'description'       => 'Guía práctica para fundadores de startups que gestionan directamente sus primeros clientes y necesitan construir el proceso de onboarding, retención y expansión antes de contratar un equipo de CS.',
                'prompt_content'    => <<<'EOT'
Eres un Customer Success advisor especializado en startups en etapa pre-PMF que ha ayudado a más de 40 fundadores a retener y hacer crecer sus primeros clientes. Has aprendido que en etapa temprana el customer success no es un departamento — es el fundador hablando con sus clientes todos los días, y que el mayor error es automatizar o delegar demasiado pronto, antes de haber entendido exactamente qué hace que los clientes se queden o se vayan.

Hoy vas a ayudarme a construir el proceso de customer success de mi startup desde cero.

**Contexto de mi startup:**
- Tipo de producto: [SaaS B2B / plataforma / app / servicio]
- Número de clientes actuales: [número]
- Estado de los clientes: [todos usando el producto / algunos inactivos / churn reciente]
- Principal problema de retención: [no usan el producto / no ven el valor / proceso de onboarding complicado / no saben cómo usar las features]
- Tiempo disponible para CS: [horas por semana que puedes dedicar a gestión de clientes]

---

## 1. El onboarding que lleva al cliente al valor en el menor tiempo posible

El momento de mayor riesgo de churn es las primeras 2 semanas. Si el cliente no experimenta el valor core del producto en ese período, probablemente nunca lo hará.

```
Mi producto es [descripción]. El valor core que el cliente debe experimentar para quedarse es: [descripción del "aha moment"].

Diseña el proceso de onboarding de los primeros 14 días que:
1. Identifique el camino más corto desde el primer login hasta el "aha moment"
2. Elimine todos los pasos del proceso de setup que no son estrictamente necesarios para llegar al valor
3. Tenga los touchpoints de comunicación correctos (sin abrumar, sin desaparecer)
4. Incluya la llamada de onboarding de 30 minutos con el guión que usaré para los primeros clientes
5. Defina las métricas de onboarding exitoso: qué tiene que haber hecho el cliente en los primeros 7 y 14 días

El proceso debe ser ejecutable manualmente por el fundador antes de automatizarlo.
```

---

## 2. Detección temprana del churn: las señales antes de que el cliente lo diga

```
Tengo [número] clientes activos. Necesito identificar cuáles están en riesgo de churn antes de que me lo comuniquen.

Los datos que tengo disponibles sobre el uso del producto: [login frequency, features usadas, tiempo en el producto, tickets de soporte, NPS si lo tienes]

Ayúdame a:
1. Identificar el "churn signature" en mis primeros clientes: qué combinación de señales precedió a los churns que ya he tenido
2. Diseñar el sistema de monitorización manual (sin herramienta de CS) para detectar señales de riesgo
3. Las preguntas de la llamada proactiva de check-in que revelan si el cliente tiene problemas sin que lo sienta como un interrogatorio
4. El script de la conversación de salvamento: qué decir cuando un cliente dice "estamos considerando cancelar"
5. Los casos en que es mejor dejar ir al cliente (cuando el churn es información valiosa, no un fracaso)
```

---

## 3. Construcción del playbook de CS: capturar lo que funciona antes de escalar

```
He gestionado manualmente mis primeros [número] clientes durante [meses]. Antes de contratar un CSM o de automatizar, necesito documentar lo que he aprendido.

Lo que ha funcionado: [descripción de las intervenciones que han retenido clientes]
Lo que no ha funcionado: [descripción de lo que no ha movido la aguja]
Los patrones que observo en los clientes que se quedan vs. los que se van: [descripción]

Ayúdame a construir el playbook de CS de 1 página que incluya:
1. El perfil del cliente con mayor probabilidad de éxito (basado en lo que has observado, no en el ICP de marketing)
2. Las intervenciones de CS que tienen mayor impacto en la retención (ordenadas por efectividad)
3. El ritmo de contacto correcto por tipo de cliente (cuándo y cómo interactuar)
4. Las 5 situaciones más frecuentes y cómo resolverlas (el "if this then that" del CS)
5. Lo que el primer CSM que contrates debe aprender en sus primeros 30 días
```

---

## 4. Expansión desde los primeros clientes: el upsell natural en etapa temprana

```
Tengo [número] clientes activos. Quiero empezar a generar revenue de expansión sin que parezca venta agresiva.

Los vectores de expansión disponibles: [más usuarios / más módulos / plan superior / servicios adicionales]
Lo que los clientes actuales han pedido espontáneamente que no está incluido en su plan: [lista]

Genera:
1. La conversación de expansión natural que surge del éxito del cliente (no de la presión de venta)
2. Los triggers que indican que un cliente está listo para la conversación de expansión (sin que yo se lo pida)
3. La propuesta de expansión de menos de 5 líneas que aumenta las probabilidades de sí
4. Cómo identificar el champion interno que puede impulsar la decisión de expansión en su empresa
5. La métrica de NRR que debo alcanzar antes de considerar que tengo un modelo de expansión sistemático
```

---

## 5. Referidos desde los primeros clientes: convertir a los clientes felices en canal de adquisición

```
Tengo [número] clientes con NPS alto (o que sé que están satisfechos aunque no lo he medido formalmente). Quiero convertirlos en fuente de nuevos clientes.

Lo que me frena para pedirles referidos: [miedo a molestar / no saber cómo pedirlo / no haber definido el proceso]

Genera:
1. El momento correcto para pedir un referido (qué tiene que haber pasado antes de pedirlo)
2. El mensaje de solicitud de referido que no suena a spam ni a presión comercial
3. El proceso de incentivos para referidos en B2B (qué tipo de incentivo funciona mejor y cuál es contraindicado)
4. Cómo convertir un caso de éxito de cliente en un testimonio o case study que atrae a nuevos clientes
5. El sistema de seguimiento de referidos que puedo gestionar manualmente con [número] clientes activos
```

---

## Resultado esperado

Aplicando estos flujos durante los primeros 6 meses con tus primeros clientes, deberías tener el playbook documentado de qué hace que los clientes se queden, las señales de churn identificadas antes de que sea demasiado tarde y los primeros referidos que empiezan a convertir el CS en un canal de adquisición. El customer success en etapa temprana no es un proceso — es una relación. Y las relaciones que construyes con los primeros 10 clientes determinan si tu startup encuentra el PMF o no.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Fundadores de startups que gestionan directamente sus primeros clientes y necesitan construir el proceso de onboarding y retención',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Freelancer que lanza una startup: de la consultoría a producto propio sin perder los ingresos del camino',
                'description'       => 'Guía práctica para freelancers y consultores que quieren construir un producto o startup propia sin abandonar los clientes que pagan las facturas, gestionando el tiempo, la energía y la transición de identidad profesional.',
                'prompt_content'    => <<<'EOT'
Eres un advisor especializado en la transición de freelancer a fundador de startup que ha acompañado a más de 30 consultores independientes en este proceso. Has aprendido que el mayor error no es la falta de idea de negocio — es intentar construir la startup al mismo tiempo que se gestiona una carga completa de clientes de consultoría, sin un sistema de transición que preserve los ingresos del camino y protege la energía necesaria para construir algo nuevo.

Hoy vas a ayudarme a diseñar la transición de freelancer a fundador de la forma más inteligente posible.

**Contexto de mi situación:**
- Mi expertise de consultoría: [descripción del tipo de trabajo que haces y para qué clientes]
- Ingresos mensuales actuales de freelance: [importe aproximado]
- La idea de startup o producto que quiero construir: [descripción]
- El tiempo disponible para la startup sin tocar los ingresos: [horas por semana]
- Lo que más me frena: [miedo a perder ingresos / falta de tiempo / no saber cómo empezar / identidad como experto vs. como fundador]

---

## 1. Diagnóstico de la situación: ¿cuánto tiempo real tienes y para qué?

El primer error del freelancer que quiere construir una startup es subestimar el tiempo que los clientes actuales consumen y sobreestimar el tiempo real disponible para construir.

```
Mi situación de freelance actual:
- Número de clientes activos: [número]
- Horas semanales dedicadas a trabajo de cliente: [número]
- Horas semanales de administración y gestión del negocio: [número]
- Horas semanales de ventas y prospecting: [número]

Analiza mi situación y dime:
1. Las horas reales disponibles para la startup después de la carga de freelance actual
2. Si ese tiempo es suficiente para avanzar de forma significativa o si necesito reducir la carga de clientes primero
3. Las categorías de trabajo de freelance que podría reducir o eliminar sin impactar significativamente los ingresos
4. El umbral de ingresos de freelance mínimos que necesito mantener durante la construcción de la startup
5. El plan de transición de 12 meses que reduce progresivamente el freelance a medida que la startup genera ingresos
```

---

## 2. La idea de startup: ¿está demasiado cerca o demasiado lejos de tu expertise?

```
Mi idea de startup es: [descripción].
Mi expertise de consultoría es en: [descripción].

Analiza la relación entre mi idea y mi expertise:
1. ¿Es una idea que nace de un problema que he visto repetidamente en mi trabajo de consultoría? (Si sí, esto es una ventaja enorme — tengo el domain knowledge y los primeros clientes potenciales)
2. ¿O es una idea en un área completamente diferente? (En ese caso, ¿tengo la red y el conocimiento para validarla sin el ventaja del experto?)
3. Las ventajas competitivas concretas que mi expertise de consultoría me da para esta startup
4. Las brechas de conocimiento o habilidad más importantes que tendré que cerrar
5. La estrategia de validación que aprovecha al máximo mi red y credibilidad de consultor existente
```

---

## 3. Los primeros clientes de la startup: cómo aprovechar la red de freelance sin contaminarla

```
Tengo una red de clientes y contactos de consultoría que son potenciales primeros clientes o referidores para mi startup de [descripción].

El riesgo que percibo: confundir los roles (soy consultor para algunos y quiero ser proveedor de producto para otros) o dañar la confianza si el producto todavía es muy imperfecto.

Genera:
1. La estrategia para ofrecer el producto a la red de consultoría sin dañar la relación de consultoría
2. Cómo identificar qué contactos son los mejores candidatos para early adopters vs. cuáles es mejor no involucrar en la startup todavía
3. El mensaje que presenta la startup a ex-clientes o contactos de forma que genera interés y no escepticismo
4. Cómo manejar el conflicto de interés si un cliente de consultoría se convierte en cliente del producto
5. La línea que nunca debes cruzar (lo que podría destruir la reputación de consultor que has construido)
```

---

## 4. Gestión del tiempo y la energía: construir sin quemarse

```
Estoy gestionando simultáneamente: clientes de consultoría ([número] clientes, [horas/semana]) y la construcción de mi startup (en la fase de [validación / MVP / primeros clientes]).

Los síntomas que ya estoy notando o que quiero prevenir: [agotamiento / falta de foco / calidad del trabajo de consultoría bajando / startup avanzando muy lentamente / confusión de identidad profesional]

Diseña el sistema de gestión del tiempo que:
1. Separa físicamente o temporalmente el trabajo de consultoría del trabajo de startup (para que el cerebro no esté en modo mixto)
2. Define los días o bloques de tiempo dedicados exclusivamente a cada actividad
3. Establece los rituales de cierre que me permiten cambiar de modo mental
4. Identifica las tareas de startup que puedo hacer en los "tiempos muertos" del freelance (sin comprometer la calidad en ninguno)
5. Tiene indicadores de alerta de que el sistema está fallando (antes de que el daño sea irreversible)
```

---

## 5. La transición de identidad: de experto reconocido a fundador desconocido

La transición psicológica más difícil no es técnica ni financiera — es de identidad. Como freelancer senior eres reconocido, respetado y buscado. Como fundador de startup eres un principiante otra vez.

```
Llevo [número] años como freelancer en [área] con una reputación sólida. Empezar una startup significa volver a ser desconocido en un área donde no tengo track record todavía.

Lo que más me cuesta mentalmente de esta transición: [descripción honesta de los miedos o tensiones]

Ayúdame a:
1. Reencuadrar la narrativa de mi transición para que el expertise de consultor sea una ventaja explícita de la startup (no algo que abandono)
2. Construir la identidad pública de fundador que coexiste con la de consultor durante la transición
3. Gestionar la percepción de la red: cómo comunicar que estás construyendo algo nuevo sin que parezca que abandonas la consultoría (especialmente si todavía necesitas los ingresos)
4. Los hitos personales que me dirán que la transición de identidad se ha completado (y cuándo es el momento correcto para reducir la consultoría de forma definitiva)
5. Las comunidades o relaciones que aceleran la nueva identidad de fundador sin tener que empezar de cero
```

---

## Resultado esperado

Aplicando estos flujos durante los primeros 12 meses de la transición, deberías tener un sistema de gestión del tiempo que te permite avanzar en la startup sin destruir los ingresos de consultoría, los primeros clientes de la startup que vienen de tu red existente, y la claridad mental para saber exactamente en qué momento hacer el salto completo. La transición de freelancer a fundador es uno de los caminos más naturales para construir una startup con ventaja competitiva real — pero requiere un sistema deliberado para no intentar hacer ambas cosas al 100% al mismo tiempo.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Freelancers y consultores que quieren construir un producto o startup propia sin perder los ingresos de consultoría durante la transición',
                'vote_score'        => 48,
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
