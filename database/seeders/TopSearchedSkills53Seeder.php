<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills53Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 — Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Lanzamiento en Product Hunt',
                'description'      => 'Cómo preparar y ejecutar un launch exitoso en Product Hunt que genera tráfico real, primeros clientes y tracción en medios.',
                'prompt_content'   => <<<'PROMPT'
Actúa como experto en growth y lanzamientos de productos digitales con experiencia en campañas exitosas en Product Hunt. He de lanzar mi producto en Product Hunt y quiero maximizar el impacto del día del lanzamiento.

**MI PRODUCTO**
- Nombre: [nombre]
- Descripción en una frase: [qué hace y para quién]
- URL: [url del producto]
- Fecha objetivo de lanzamiento: [fecha o "aún no decidida"]
- Comunidad actual: [newsletter, seguidores en redes, usuarios beta — y número de cada uno]
- Mayor objetivo del lanzamiento: [tráfico / sign-ups / prensa / validación / financiación]

---

## FASE 1 — PREPARACIÓN (2-4 SEMANAS ANTES)

### 1.1 Decisiones previas al lanzamiento

**¿Cuándo lanzar?**
- Día de la semana: martes o miércoles son históricamente los más activos en PH
- Hora de inicio: medianoche PT (hora de San Francisco) para maximizar el período de votación
- ¿Lanzamiento con Hunter externo o como Maker directo? Diferencias y cuándo importa realmente tener un Hunter con reputación

**¿Qué lanzar exactamente?**
- El producto completo vs. un feature específico vs. una nueva versión
- Los lanzamientos más exitosos son los más focalizados: un problema, una solución, una propuesta de valor

### 1.2 Página del producto: los elementos que marcan la diferencia

Genera el texto completo para cada campo de la página del producto:

**Tagline (máximo 60 caracteres)**
Escribe 5 opciones con diferentes ángulos: beneficio, curiosidad, audiencia, acción, contraste.

**Descripción (máximo 260 caracteres)**
Amplía el tagline con el valor diferencial principal y la audiencia objetivo.

**Primer comentario del Maker (el más importante)**
Este comentario aparece destacado. Estructura recomendada:
- Por qué construí esto (historia personal o problema propio)
- A quién va dirigido y qué problema resuelve
- Qué tiene de diferente
- Cómo pueden probarlo hoy
- Invitación genuina a dar feedback

Escribe el borrador completo del primer comentario (400-600 palabras).

**Media assets necesarios**
- Thumbnail: qué debe comunicar visualmente en 240x240px
- Gallery de imágenes: orden y mensaje de cada screenshot
- Demo video (opcional pero recomendado): estructura de 60-90 segundos

---

## FASE 2 — CONSTRUCCIÓN DE LA AUDIENCIA PRE-LANZAMIENTO

### 2.1 La estrategia de "coming soon"
Product Hunt permite crear una página "coming soon" antes del lanzamiento. Explica cómo usarla para construir una lista de seguidores que serán notificados el día del launch.

### 2.2 Secuencia de activación de la comunidad
Diseña el calendario de comunicaciones pre-lanzamiento:

| Días antes | Canal | Mensaje | Objetivo |
|-----------|-------|---------|---------|
| -14 días | Newsletter | | |
| -7 días | LinkedIn / Twitter | | |
| -3 días | Comunidades Slack/Discord de nicho | | |
| -1 día | Email personal a early adopters | | |
| Día 0 (medianoche) | Todos los canales | | |

### 2.3 Plantilla del email de activación (día antes)
Escribe el email que enviar a tu lista de early supporters con:
- Asunto: 3 opciones
- Cuerpo: por qué les pides el apoyo, exactamente qué hacer (link, qué hora), por qué importa
- Recordatorio de que votar en PH no requiere crear cuenta (desde 2023 se puede votar sin cuenta)

---

## FASE 3 — EL DÍA DEL LANZAMIENTO

### 3.1 Checklist del día D

**Medianoche PT**
- [ ] Verificar que el listing está publicado correctamente
- [ ] Publicar el primer comentario del Maker
- [ ] Activar la notificación a la newsletter

**Primeras 2 horas (críticas)**
- [ ] Compartir en LinkedIn con el post personal (no solo compartir el link, contar la historia)
- [ ] Twitter/X con hilo explicativo
- [ ] Mensaje en grupos de Slack y Discord relevantes (con permiso del administrador)
- [ ] Pedir a cofundadores, advisors y early users que comenten en PH (los comentarios pesan más que los votos)

**Durante el día**
- [ ] Responder a cada comentario en PH en menos de 30 minutos
- [ ] Actualizar el estado en redes cada 2-3 horas con el ranking actual
- [ ] Monitorizar el tráfico en tiempo real y detectar de dónde viene

### 3.2 Cómo responder los comentarios para generar más engagement
Los comentarios de calidad de los Makers aumentan el posicionamiento en PH. Guía:
- Responder siempre con algo adicional (contexto, roadmap, agradecimiento genuino con detalle)
- Si alguien señala un bug o un gap: agradecerlo públicamente y dar fecha de solución
- Si alguien pregunta por pricing: explicar el racional, no solo el número

---

## FASE 4 — POST-LANZAMIENTO (SEMANA SIGUIENTE)

### 4.1 Métricas a medir

| Métrica | Herramienta | Período |
|---------|------------|--------|
| Ranking final en PH (posición del día) | PH nativo | Día del lanzamiento |
| Visitas desde PH | GA4 / Plausible | Semana del lanzamiento |
| Nuevos registros o sign-ups | CRM / producto | Día 0 y semana 1 |
| Conversión visita → registro | Producto | Semana 1 |
| Menciones en medios / blogs | Google Alerts | 30 días |

### 4.2 El follow-up post-lanzamiento
El 80% de los lanzamientos en PH se olvida de hacer seguimiento. Diseña la secuencia de follow-up:

- Email de "resultados del lanzamiento" a la comunidad (comparte el ranking, los aprendizajes, el enlace al producto)
- Post de "lo que aprendimos del lanzamiento" en LinkedIn (contenido muy compartido en la comunidad builder)
- Email a los nuevos usuarios captados el día del lanzamiento con el mensaje de bienvenida especial

---

## FASE 5 — SI EL LANZAMIENTO NO SALE COMO ESPERABAS

Qué hacer si quedas fuera del top 5 del día:

1. El tráfico residual de PH sigue llegando durante semanas: asegúrate de que la página de PH está optimizada para las búsquedas internas
2. El listing queda indexado en Google: optimiza la descripción con keywords relevantes
3. Opportunity: los productos que no ganan el día pueden relanzarse pasados 6 meses en una categoría diferente o con una nueva versión
4. Diagnóstico honesto: ¿fue el producto, el timing, la falta de comunidad previa o la ejecución del día?

---

**Formato de respuesta**: escribe el primer comentario del Maker completo, las 5 opciones de tagline, el email de activación completo y el checklist del día D listo para usar. Señala con [PERSONALIZAR] lo que necesita información específica de mi producto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Planificar y ejecutar un lanzamiento en Product Hunt con los assets, la secuencia de activación y el plan del día completos',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            // 2 — Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Patrones de diseño de software',
                'description'      => 'Factory, Observer, Strategy, Repository: cuándo y cómo usar los patrones más importantes con ejemplos reales y casos de uso prácticos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como ingeniero de software senior con experiencia en arquitectura de aplicaciones y mentoría de equipos de desarrollo. Necesito entender y aplicar correctamente los patrones de diseño de software más relevantes en mi día a día.

**MI CONTEXTO**
- Lenguaje principal: [PHP / JavaScript / TypeScript / Python / Java / C# / otro]
- Framework: [Laravel / Symfony / NestJS / Django / Spring / otro]
- Nivel de experiencia: [junior (0-2 años) / mid (2-5 años) / senior (5+ años)]
- Contexto de aplicación: [backend API / frontend / full-stack / microservicios / monolito]
- Patrón que más me cuesta entender o aplicar: [indicar si hay alguno concreto]

---

## PARTE 1 — INTRODUCCIÓN: QUÉ SON LOS PATRONES Y CUÁNDO USARLOS

### 1.1 La definición que importa
Los patrones de diseño son soluciones probadas a problemas recurrentes en el diseño de software. No son librerías que importas ni código que copias: son vocabulario y estructuras de pensamiento.

### 1.2 El anti-pattern del "pattern hunter"
El error más común de los developers que aprenden patrones: intentar aplicar el patrón que acaban de aprender a todo, aunque no sea el problema correcto. Explica cuándo NO usar un patrón es la decisión correcta.

### 1.3 Las 3 categorías de patrones (GoF)

| Categoría | Qué resuelven | Ejemplos |
|-----------|--------------|---------|
| Creacionales | Cómo se crean los objetos | Factory, Abstract Factory, Builder, Singleton, Prototype |
| Estructurales | Cómo se componen los objetos | Adapter, Decorator, Facade, Proxy, Composite |
| Comportamentales | Cómo se comunican los objetos | Observer, Strategy, Command, Iterator, Template Method |

---

## PARTE 2 — LOS 6 PATRONES MÁS ÚTILES EN APLICACIONES MODERNAS

Para cada patrón, proporciona: problema que resuelve, cuándo usarlo, cuándo NO usarlo, diagrama simplificado y ejemplo de código en [el lenguaje del usuario].

---

### Patrón 1 — FACTORY METHOD

**Problema que resuelve**: necesitas crear objetos de diferentes tipos sin que el código cliente dependa de las clases concretas.

**Cuándo usarlo**:
- Cuando no sabes de antemano el tipo exacto de objeto a crear
- Cuando quieres que las subclases decidan qué objeto crear
- Cuando quieres encapsular la lógica de creación

**Ejemplo real**: sistema de notificaciones que puede enviar por email, SMS o push. El cliente llama a `NotificationFactory::create('email')` y no necesita saber nada de `EmailNotification`.

**Código de ejemplo**: [en el lenguaje del usuario]

---

### Patrón 2 — OBSERVER (o Event/Listener)

**Problema que resuelve**: cuando un objeto cambia de estado y necesitas notificar a múltiples objetos sin crear acoplamiento fuerte entre ellos.

**Cuándo usarlo**:
- Cuando un evento en una parte del sistema debe desencadenar acciones en otras partes
- Cuando no sabes de antemano cuántos objetos deben reaccionar
- Implementaciones modernas: event bus, pub/sub, reactive streams

**Ejemplo real**: cuando un usuario se registra, disparar simultáneamente: enviar email de bienvenida, crear el registro en el CRM, asignar el plan gratuito, notificar al equipo de ventas.

**Código de ejemplo con Events y Listeners** en [el lenguaje/framework del usuario]

---

### Patrón 3 — STRATEGY

**Problema que resuelve**: tienes un comportamiento que puede variar (un algoritmo, una estrategia de cálculo, un método de pago) y quieres poder intercambiarlo sin modificar el código que lo usa.

**Cuándo usarlo**:
- Cuando tienes condicionales (if/switch) que seleccionan entre diferentes variantes de un algoritmo
- Cuando quieres poder cambiar el comportamiento en tiempo de ejecución
- Regla de oro: si ves un `switch` con tipos de objeto, probablemente necesitas Strategy

**Ejemplo real**: cálculo de descuentos según el tipo de cliente (nuevo, recurrente, VIP). En lugar de un `switch`, cada tipo de cliente tiene su propia clase `DiscountStrategy`.

**Código de ejemplo**

---

### Patrón 4 — REPOSITORY

**Problema que resuelve**: desacoplar la lógica de negocio del acceso a datos, permitiendo intercambiar la fuente de datos (BD, API, caché) sin tocar el negocio.

**Cuándo usarlo**:
- En arquitecturas que quieren testear la lógica de negocio sin base de datos real
- Cuando la misma entidad de negocio puede venir de fuentes diferentes
- En aplicaciones con DDD o Clean Architecture

**Cuándo NO usarlo**:
- En aplicaciones CRUD simples donde la capa de repositorio no añade valor real y sí complejidad

**Diferencia entre Repository pattern puro y el ActiveRecord de Eloquent/Django ORM**

**Código de ejemplo** en [framework del usuario]

---

### Patrón 5 — DECORATOR

**Problema que resuelve**: añadir responsabilidades a un objeto dinámicamente sin modificar su clase ni usar herencia.

**Cuándo usarlo**:
- Cuando necesitas añadir funcionalidad a objetos individuales sin afectar a los demás
- Cuando la herencia generaría una explosión de subclases
- Ejemplo clásico: middleware HTTP (cada capa añade comportamiento sin modificar la anterior)

**Ejemplo real**: sistema de logging que envuelve cualquier servicio para añadir trazas sin modificar el servicio original.

**Código de ejemplo**

---

### Patrón 6 — COMMAND

**Problema que resuelve**: encapsular una solicitud como un objeto, permitiendo deshacer operaciones, hacer colas de comandos o registrar el historial de acciones.

**Cuándo usarlo**:
- Cuando necesitas undo/redo
- Cuando quieres hacer colas o diferir la ejecución (jobs en background)
- Cuando quieres registrar un log de auditoría de todas las acciones

**Ejemplo real**: sistema de edición colaborativa donde cada cambio es un Command que puede deshacerse.

---

## PARTE 3 — CÓMO IDENTIFICAR QUÉ PATRÓN NECESITAS

### 3.1 Señales en el código que indican que necesitas un patrón

| Señal en el código | Patrón probable |
|-------------------|----------------|
| Muchos `if/switch` según el tipo | Strategy o Factory |
| Un cambio en un objeto necesita actualizar muchos otros | Observer |
| Quieres testear la BD sin BD real | Repository |
| Añadir funcionalidad sin tocar la clase original | Decorator |
| Necesitas historial o undo | Command |
| Múltiples formas de construir un objeto complejo | Builder |

### 3.2 El principio YAGNI aplicado a patrones
"You Ain't Gonna Need It": no implementes un patrón porque "podría ser útil". Impleméntalo cuando el problema que resuelve ya existe en tu código.

---

## PARTE 4 — REFACTORING: DE CÓDIGO PROCEDURAL A PATRÓN

Toma un ejemplo de código procedural con el anti-patrón más común (el switch gigante o el if-else en cadena) y muestra cómo refactorizarlo paso a paso al patrón Strategy o Factory. Con el código antes/después completo.

---

**Formato de respuesta**: para cada patrón incluye código funcional en [el lenguaje del usuario], no pseudocódigo. Los ejemplos deben ser de contextos reales de aplicaciones web, no los ejemplos académicos de formas geométricas o cafeteras.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'         => 'Entender y aplicar los 6 patrones de diseño más útiles en aplicaciones modernas con ejemplos de código reales',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            // 3 — Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Visualización de datos y dashboards',
                'description'      => 'Diseña gráficos, tablas e infografías que comunican insights sin confundir: principios, selección del tipo de gráfico correcto y estética.',
                'prompt_content'   => <<<'PROMPT'
Actúa como diseñador de experiencia de datos con experiencia en dashboards de negocio, informes ejecutivos y visualizaciones interactivas. Necesito diseñar visualizaciones de datos que comuniquen insights de forma clara y que guíen la toma de decisiones.

**MI CONTEXTO**
- Tipo de visualización: [dashboard de negocio / informe ejecutivo / infografía / presentación / visualización interactiva web]
- Herramienta que usaré: [Figma / Tableau / Power BI / Looker / Metabase / Recharts / D3.js / Canva / otra]
- Audiencia principal: [CEO/directivos no técnicos / analistas / clientes externos / equipo de operaciones]
- Tipo de datos que tengo: [ventas / tráfico web / métricas de producto / datos financieros / RRHH / otro]
- Principal problema actual: [no sé qué tipo de gráfico usar / el dashboard tiene demasiada información / los colores no funcionan / no comunica el insight clave]

---

## MÓDULO 1 — PRINCIPIOS FUNDAMENTALES DE VISUALIZACIÓN DE DATOS

### 1.1 Los 5 principios de Edward Tufte aplicados al diseño moderno

| Principio | Descripción | Aplicación práctica |
|-----------|-------------|---------------------|
| Data-ink ratio | Maximizar la tinta dedicada a datos, eliminar decoración innecesaria | Eliminar fondos de gráficos, bordes de celdas, líneas de cuadrícula excesivas |
| Chartjunk | Todo elemento visual que no añade información es ruido | Gradientes en barras, sombras 3D, iconos decorativos |
| Small multiples | Comparar variaciones del mismo gráfico en paralelo | Mejor que animaciones o gráficos interactivos para comparativas |
| Contexto y comparación | Un dato solo no significa nada; necesita referencia | Mostrar siempre vs. período anterior, vs. objetivo, vs. promedio |
| Lie factor | La representación visual no debe distorsionar la magnitud real | Ejes que empiezan en cero, proporciones correctas en gráficos de área |

### 1.2 El insight primero, la visualización después
El error más frecuente: elegir el tipo de gráfico antes de tener claro qué quieres comunicar. El proceso correcto:
1. ¿Cuál es el insight o la pregunta que este gráfico debe responder?
2. ¿Qué relación entre variables muestra ese insight (comparación, evolución, distribución, parte-todo, correlación)?
3. ¿Qué tipo de gráfico representa mejor esa relación?
4. ¿Cuál es la acción que debería tomar quien lo ve?

---

## MÓDULO 2 — GUÍA DE SELECCIÓN DEL TIPO DE GRÁFICO

### 2.1 Árbol de decisión: qué gráfico usar

**¿Qué quieres mostrar?**

**Comparación entre categorías**
- Pocas categorías (2-7): gráfico de barras horizontales
- Muchas categorías: tabla ordenada o heatmap
- A lo largo del tiempo: barras agrupadas o líneas

**Evolución temporal**
- Tendencia general: gráfico de líneas
- Comparar volúmenes en el tiempo: área apilada
- Cambios mes a mes: barras verticales con línea de tendencia

**Parte de un todo / composición**
- Pocas partes (2-5): gráfico de donut (no de pizza / pie)
- Muchas partes: treemap o gráfico de barras apiladas al 100%
- Flujo entre categorías: Sankey diagram

**Distribución**
- Una variable: histograma o box plot
- Dos variables: scatter plot (diagrama de dispersión)
- Múltiples variables: parallel coordinates o matrix scatter

**Correlación entre variables**
- Dos variables continuas: scatter plot con línea de regresión
- Dos variables categóricas: heatmap de correlación

---

## MÓDULO 3 — SISTEMA DE COLOR PARA DASHBOARDS

### 3.1 Los 3 tipos de paleta de color y cuándo usar cada una

| Tipo de paleta | Cuándo usar | Ejemplo de dato |
|----------------|------------|----------------|
| Secuencial (un color, variando luminosidad) | Cuando el dato tiene gradación de más a menos | Temperatura, volumen de ventas por región |
| Divergente (dos colores con neutro en el centro) | Cuando hay un punto medio significativo (0, objetivo) | Rentabilidad (+/-), NPS, variación vs. objetivo |
| Categórica (colores distintos) | Cuando las categorías son independientes | Líneas de producto, canales de marketing, países |

### 3.2 Reglas de color en dashboards de negocio

1. **Máximo 5-6 colores distintos**: más colores crean confusión, no claridad
2. **El color debe codificar significado, no decorar**: si el verde siempre significa "bien", no uses verde para categorías neutras
3. **Paleta semántica estándar en negocios**:
   - Verde: positivo, cumplimiento, crecimiento
   - Rojo: negativo, alerta, caída
   - Amarillo/ámbar: atención, en progreso, riesgo
   - Azul: neutro, informativo, comparativa
   - Gris: contexto, histórico, inactivo
4. **Accesibilidad para daltonismo**: evitar la combinación rojo-verde sin un indicador adicional (icono, forma)
5. **Modo oscuro**: si el dashboard puede verse en modo oscuro, las paletas claras necesitan versiones alternativas

### 3.3 Jerarquía visual mediante el color
En un dashboard, el color más llamativo debe estar en el dato más importante. El resto debe ser más sutil para no competir.

---

## MÓDULO 4 — DISEÑO DE DASHBOARDS DE NEGOCIO

### 4.1 Anatomía de un dashboard bien diseñado

**Zona superior (el F-pattern, lo que se lee primero)**
- KPIs hero: 3-5 métricas clave con su variación vs. referencia
- Estos números deben responder: ¿estamos bien o mal hoy?

**Zona media (el contexto)**
- Evolución temporal de los KPIs principales
- Comparativas por segmento o categoría

**Zona inferior (el detalle)**
- Tablas con drill-down posible
- Gráficos secundarios de apoyo

### 4.2 Los stat tiles (KPI cards): diseño correcto

Cada tarjeta de KPI debe incluir:
- La métrica: grande y legible, con unidad clara (€, %, usuarios)
- La referencia: vs. período anterior (↑ +12% vs. mes ant.) o vs. objetivo
- El color de referencia: verde/rojo/amarillo según el estado
- El mini gráfico (sparkline): evolución de los últimos 7-30 días en un trazo simple
- El label: nombre de la métrica, claro y sin jerga interna

Diseña una plantilla de stat tile para mis datos.

### 4.3 Errores de diseño más frecuentes en dashboards

| Error | Por qué pasa | Cómo corregirlo |
|-------|-------------|----------------|
| Dashboard con 30 gráficos | El equipo quiere "ver todo" | Priorizar: ¿qué decisión toma quien lo ve? Solo los datos que informan esa decisión |
| Gráficos de tarta con 12 segmentos | Herramienta genera el chart automáticamente | Convertir en tabla ordenada o barras horizontales |
| Ejes Y que no empiezan en cero | El software lo hace por defecto | Siempre empezar en cero para barras; para líneas puede aceptarse con contexto |
| Datos sin referencia | Se muestra el número absoluto sin comparativa | Añadir siempre vs. objetivo o vs. período anterior |
| Colores inconsistentes entre gráficos | Paleta no definida | Crear un sistema de color documentado y aplicarlo en toda la herramienta |

---

## MÓDULO 5 — PLANTILLA DE REVISIÓN DE UN DASHBOARD EXISTENTE

Usa este checklist para auditar cualquier dashboard que ya tengas:

**Claridad del propósito**
- [ ] ¿Hay una pregunta de negocio clara que este dashboard responde?
- [ ] ¿La persona que lo ve sabe qué acción tomar después de verlo?

**Selección de gráficos**
- [ ] ¿Cada gráfico usa el tipo correcto para los datos que muestra?
- [ ] ¿Se pueden eliminar gráficos sin perder información crítica?

**Sistema de color**
- [ ] ¿El sistema de color es consistente en todo el dashboard?
- [ ] ¿Los colores tienen significado semántico coherente?
- [ ] ¿Es accesible para personas con daltonismo?

**Jerarquía visual**
- [ ] ¿Lo más importante visualmente es lo más importante de negocio?
- [ ] ¿Hay suficiente espacio en blanco para que la vista descanse?

**Datos y contexto**
- [ ] ¿Cada métrica tiene una referencia para interpretarla (objetivo, período anterior)?
- [ ] ¿Los ejes y etiquetas son claros sin necesidad de explicación?

---

**Formato de respuesta**: incluye recomendaciones específicas para mi herramienta y tipo de dato. Cuando el caso sea ambiguo, presenta dos opciones con su argumento. Prioriza la legibilidad y la toma de decisiones sobre la estética.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Diseñar dashboards y visualizaciones de datos que comunican insights claros con el tipo de gráfico correcto y un sistema de color consistente',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            // 4 — Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Handoff de ventas a Customer Success',
                'description'      => 'La transición que no pierde al cliente ni la información crítica del deal: proceso, plantilla de handoff y primeras 90 horas del cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como directora de Revenue Operations con experiencia en diseño de procesos go-to-market para empresas B2B SaaS y de servicios. Necesito diseñar o mejorar el proceso de handoff desde el equipo de ventas al equipo de Customer Success para que ningún cliente se pierda en la transición.

**MI CONTEXTO**
- Tipo de empresa: [SaaS / servicios / consultoría / otro]
- Tiempo medio de ciclo de venta: [días/semanas/meses]
- Tamaño del deal promedio: [ticket medio o ACV]
- Tienes equipo de CS dedicado: [Sí / No — lo hace el mismo comercial]
- Principal problema actual en el handoff: [el cliente repite toda la información / el CS no conoce el contexto del deal / el cliente siente abandono después de firmar / tensión entre ventas y CS]

---

## PARTE 1 — POR QUÉ EL HANDOFF ES EL MOMENTO MÁS CRÍTICO

### 1.1 El coste del handoff mal ejecutado

| Consecuencia | Impacto medible |
|-------------|----------------|
| El cliente repite el contexto al CS | Percepción de desorganización, primer riesgo de churn |
| El CS desconoce los compromisos de ventas | Promesas incumplidas, escalada en semana 1 |
| El comercial cierra y desaparece | El cliente siente que le "vendieron" y le "abandonaron" |
| CS descubre objeciones no resueltas tarde | Churn en los primeros 90 días |
| Falta de objetivos claros de éxito | CS no puede medir el ROI del cliente, riesgo de renovación |

### 1.2 El principio de "no handoff sorpresa"
El cliente debe ser informado del proceso de transición antes de firmar. El commercials debe presentar al CSM antes del cierre, no después.

---

## PARTE 2 — LA PLANTILLA DE HANDOFF INTERNO

Esta es la información que ventas debe transferir a CS antes de la llamada de kickoff con el cliente. Diseña la plantilla completa:

**FICHA DE HANDOFF — [Nombre del cliente]**

**Información del cliente**
- Empresa, sector, tamaño
- Interlocutor principal (nombre, cargo, estilo de comunicación preferido)
- Economic buyer (quién aprobó el presupuesto — puede ser diferente del champion)
- Otros stakeholders clave

**Contexto del deal**
- Problema principal que llevó al cliente a buscar solución
- Alternativas que evaluaron (competidores considerados y por qué nos eligieron)
- Objeciones que surgieron durante el proceso (y cómo se resolvieron)
- Compromisos explícitos o implícitos realizados por ventas [campo crítico]

**Objetivos y expectativas**
- Qué quiere conseguir el cliente en los próximos 90 días
- Qué quiere conseguir en los próximos 12 meses
- Cómo medirá el cliente el éxito del proyecto
- Timeline de implementación que espera

**Información comercial**
- Producto(s) / plan contratado
- Precio y condiciones
- Fecha de renovación
- Upsell o expansión identificada durante la venta [oportunidades que CS debe nutrir]

**Alertas y puntos de riesgo**
- Cualquier señal de riesgo detectada durante el proceso
- Plazos críticos o presiones externas del cliente
- Sensibilidades del interlocutor (qué temas evitar, qué le importa especialmente)

---

## PARTE 3 — PROCESO DE HANDOFF EN 3 MOMENTOS

### Momento 1 — Presentación del CSM antes del cierre (T-7 días del cierre)
El commercials presenta brevemente al CSM en una reunión o por email antes de que se firme el contrato. El cliente siente continuidad desde el primer momento.

Plantilla de email de presentación:
> Asunto: Te presento a [nombre del CSM], quien acompañará tu implementación en [empresa]
> [cuerpo del email con presentación del CSM, siguiente paso y contacto]

### Momento 2 — Reunión interna de handoff (T+0 a T+2 días tras la firma)
El commercials y el CSM se reúnen (sin cliente) para revisar la ficha de handoff. El commercials responde preguntas del CSM. Se define quién liderará el kickoff y cuál será el role del commercial en los primeros 30 días.

Agenda tipo (30 minutos):
1. Revisión de la ficha de handoff (15 min)
2. Preguntas del CSM (10 min)
3. Decisión sobre implicación del commercial en el onboarding (5 min)

### Momento 3 — Kickoff con el cliente (T+3 a T+7 días tras la firma)
Primera reunión formal del cliente con el CSM. El commercial puede estar presente en la primera parte para hacer la transición y luego dejar al CSM.

Agenda tipo del kickoff (60-90 minutos):
1. Bienvenida y presentaciones (5 min)
2. Revisión de objetivos: "Queríamos asegurarnos de entender bien lo que os ha traído aquí..." (15 min)
3. Plan de implementación: timelines, responsables, hitos (20 min)
4. Herramientas y accesos necesarios (10 min)
5. Cadencia de comunicación y canal principal (5 min)
6. Preguntas y próximos pasos (15 min)

---

## PARTE 4 — LAS PRIMERAS 90 HORAS DEL CLIENTE

Las 90 horas (aproximadamente los primeros 4 días laborables) determinan si el cliente percibe que tomó la decisión correcta. Diseña el playbook:

| Hora | Acción | Responsable | Objetivo |
|------|--------|------------|---------|
| 0 (firma) | Email de bienvenida automático con accesos y siguientes pasos | Automático + CS | Primera impresión positiva |
| 2-4 | Llamada de bienvenida del CSM (15 min) | CSM | Confirmar acceso, responder dudas iniciales, agendar kickoff |
| 24 | Email con recursos de onboarding personalizados | CSM | Dar autonomía para empezar |
| 48 | Kickoff call completo | CSM (+ commercial) | Alinear objetivos y plan |
| 72 | Check-in rápido: ¿lograste el primer hito? | CSM | Detectar bloqueos temprano |
| 96 | Resumen de la semana 1 por email | CSM | Documentar progreso, reforzar la decisión de compra |

---

## PARTE 5 — MÉTRICAS DEL HANDOFF

| Métrica | Cómo medirla | Objetivo | Señal de problema |
|---------|-------------|---------|------------------|
| Tiempo entre firma y kickoff | CRM / CS tool | <7 días laborables | >14 días |
| Ratio de clientes que completan el kickoff | CS tool | >90% | <70% |
| CSAT del kickoff | Encuesta post-kickoff | >8/10 | <7/10 |
| Churn en los primeros 90 días | CRM | <5% | >10% |
| Tiempo hasta el primer "momento valor" del cliente | Producto | Según el tipo de producto | Más del doble del objetivo |

---

**Formato de respuesta**: incluye la plantilla de handoff lista para copiar y adaptar en Notion, CRM o Google Docs. Redacta el email de presentación del CSM y el de bienvenida automático completos. Adapta las recomendaciones a si tengo o no equipo de CS dedicado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'         => 'Diseñar el proceso de handoff de ventas a Customer Success con plantilla, agenda de kickoff y playbook de las primeras 90 horas',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 5 — Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Alineación de stakeholders internos',
                'description'      => 'Cómo conseguir que CEO, engineering, sales y marketing se alineen detrás del producto: frameworks, comunicación y gestión del conflicto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como VP of Product con experiencia en gestión de stakeholders y alineación organizativa en empresas de rápido crecimiento. Necesito mejorar mi capacidad para conseguir que los diferentes equipos de la empresa se alineen detrás del producto y de las prioridades de roadmap.

**MI CONTEXTO**
- Mi cargo: [PM / Head of Product / CPO / otro]
- Tamaño de la empresa: [startup <20p / scale-up 20-100p / empresa >100p]
- Principal fuente de desalineación: [el CEO cambia las prioridades frecuentemente / ventas pide features sin proceso / engineering empuja back al roadmap / marketing no sabe qué comunicar del producto]
- Tengo un roadmap formal: [Sí / No / Tenemos algo pero no lo usan]

---

## MÓDULO 1 — POR QUÉ LA ALINEACIÓN ES EL TRABAJO REAL DEL PM

### 1.1 El PM como "CEO sin autoridad"
El PM no tiene reports directos en la mayoría de las organizaciones. Su superpoder es la influencia, no la autoridad. Explica la implicación práctica: cómo funciona la toma de decisiones cuando no puedes ordenar sino convencer.

### 1.2 El mapa de stakeholders del producto

| Stakeholder | Qué quiere del producto | Qué le da miedo | Lenguaje que lo mueve |
|-------------|------------------------|----------------|----------------------|
| CEO | | | |
| CTO / VP Engineering | | | |
| VP Sales | | | |
| VP Marketing | | | |
| CS / Support | | | |
| Board / Inversores | | | |

La clave: cada stakeholder habla un idioma diferente. El PM debe traducir el roadmap al idioma de cada uno.

---

## MÓDULO 2 — EL ROADMAP COMO HERRAMIENTA DE COMUNICACIÓN

### 2.1 El error del roadmap como lista de features
Un roadmap de features con fechas exactas genera dos problemas: compromete fechas que no se cumplirán y comunica "qué" pero no "por qué", lo que genera debates sobre las prioridades.

### 2.2 El roadmap basado en problemas (outcome-based roadmap)

| Período | Outcome (resultado de negocio objetivo) | Problema del usuario que resolvemos | Métricas de éxito | Iniciativas probables (no comprometidas) |
|---------|----------------------------------------|------------------------------------|--------------------|------------------------------------------|
| Q1 | | | | |
| Q2 | | | | |
| Q3-Q4 | | | | |
| Más adelante | | | | |

Este formato comunica la estrategia sin comprometer fechas de features individuales.

### 2.3 Las 3 versiones del roadmap

| Versión | Audiencia | Nivel de detalle | Formato |
|---------|----------|-----------------|--------|
| Ejecutiva (1 página) | CEO, Board | Outcomes y trimestres | Slide o doc de 1 página |
| Operativa | Engineering, Design, Marketing | Iniciativas y prioridades relativas | Herramienta de PM (Linear, Jira, Notion) |
| Comercial | Sales, CS | Qué llega para sus clientes y cuándo | Versión simplificada sin fechas exactas |

---

## MÓDULO 3 — PROCESO DE PRIORIZACIÓN CON MÚLTIPLES STAKEHOLDERS

### 3.1 El problema de las "peticiones de feature" de ventas
El proceso correcto cuando ventas trae una petición de feature:
1. Capturar el problema del cliente, no la solución que el comercial propone
2. Cuantificar el impacto: ¿cuántos deals se bloquean por esto? ¿Cuánto ARR en riesgo?
3. Distinguir entre "el cliente lo pide" y "el cliente lo necesita para tener éxito"
4. Trasladar el problema (no la feature) al proceso de priorización normal

Diseña un formulario de solicitud de feature para el equipo de ventas que capture la información correcta.

### 3.2 Framework de priorización transparente (RICE o similar)

| Criterio | Descripción | Peso |
|----------|------------|------|
| Reach (impacto en usuarios) | ¿A cuántos usuarios afecta en X meses? | |
| Impact (impacto individual) | ¿Cuánto cambia la métrica clave por usuario? | |
| Confidence (confianza) | ¿Qué evidencia tenemos de que esto funcionará? | |
| Effort (esfuerzo) | ¿Cuántas person-weeks requiere? | |

Score RICE = (Reach × Impact × Confidence) / Effort

Muestra cómo usar este framework en una reunión de priorización con múltiples stakeholders para objetivizar el debate.

### 3.3 La "reunión de priorización" trimestral
Define el proceso de la reunión donde los stakeholders se alinean en las prioridades del trimestre:

- **Antes**: PM prepara los candidatos con scores RICE, los stakeholders los revisan solos
- **Durante**: 90 minutos, sin interrupciones, con decisiones documentadas
- **Después**: comunicación de las prioridades acordadas y los criterios usados

---

## MÓDULO 4 — GESTIÓN DEL CONFLICTO DE PRIORIDADES

### 4.1 Cuando el CEO cambia las prioridades constantemente
Estrategias para gestionar el "bright shiny object syndrome" ejecutivo:
1. El coste de oportunidad explicitado: "Si movemos X a Q2, Y no entra hasta Q3 — ¿confirmas?"
2. La regla de los 30 días: nuevas ideas entran al proceso normal, no al sprint actual
3. El "sí, y...": cómo decir sí al input del CEO mientras mantienes el proceso

### 4.2 Cuando engineering empuja back continuamente
Señales de un problema de relación producto-engineering vs. señales de feedback técnico legítimo. Cómo distinguirlos y actuar en cada caso.

### 4.3 El "no" como herramienta de alineación
El PM que dice sí a todo no es útil para nadie. Cómo decir no de forma que el stakeholder sienta que ha sido escuchado y que la decisión es razonada:

Plantilla de respuesta al "no":
> "Entiendo por qué [nombre de la feature/idea] tiene sentido para [objetivo del stakeholder]. El problema que resuelve para [persona] es [resumen]. Lo que nos impediría priorizarlo ahora es [razón objetiva: coste de oportunidad, evidencia insuficiente, timing]. Lo que propongo es [alternativa: añadirlo al proceso de discovery, posponer a Q3, resolver con un workaround mientras tanto]."

---

## MÓDULO 5 — COMUNICACIÓN DEL ROADMAP Y ESTADO DEL PRODUCTO

### 5.1 Cadencia de comunicación recomendada

| Comunicación | Frecuencia | Formato | Audiencia |
|-------------|-----------|--------|----------|
| Sprint review / demo | Cada 2 semanas | Demo en vivo | Engineering, Design, PM, stakeholders interesados |
| Update de roadmap | Mensual | Doc asíncrono | Toda la empresa |
| Revisión de OKRs de producto | Trimestral | Reunión 60 min | CEO, VPs |
| Roadmap público (si aplica) | Trimestral | Portal de roadmap | Clientes y comunidad |

### 5.2 Plantilla de update mensual de producto (asíncrono)

Sección 1: Lo que lanzamos este mes (2-3 bullets con impacto)
Sección 2: El estado de los OKRs de producto (semáforo: verde / amarillo / rojo)
Sección 3: Las principales decisiones de priorización tomadas (y el razonamiento)
Sección 4: Lo que viene el próximo mes

---

**Formato de respuesta**: incluye el formulario de solicitud de feature para ventas completo, la plantilla de roadmap ejecutivo en tabla y el template del update mensual listos para adaptar. Prioriza el pragmatismo: qué hacer la semana que viene, no en 6 meses.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 55,
                'use_case'         => 'Construir el proceso y las herramientas para alinear CEO, engineering, sales y marketing detrás del roadmap del producto',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            // 6 — RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Bandas salariales y estructura de compensación',
                'description'      => 'Diseña un sistema retributivo justo, transparente y competitivo: bandas por nivel, benchmark de mercado y política de revisiones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como directora de Compensación y Beneficios con experiencia en diseño de estructuras retributivas para empresas tecnológicas y de servicios de entre 20 y 500 empleados. Necesito diseñar o revisar el sistema de bandas salariales de mi empresa.

**MI EMPRESA**
- Sector: [tecnología / servicios / industria / salud / educación / otro]
- Tamaño: [número de empleados]
- País/es donde opera: [España / México / Colombia / otro]
- Situación actual: [sin estructura formal / bandas informales / queremos revisar la estructura existente]
- Principal problema que quiero resolver: [inequidad interna / competitividad con el mercado / falta de transparencia / no saber cómo gestionar las subidas / retención de talento clave]

---

## MÓDULO 1 — POR QUÉ IMPORTA TENER UNA ESTRUCTURA DE COMPENSACIÓN

### 1.1 El coste de NO tener bandas salariales
Explica con datos o argumentos concretos los problemas que genera la falta de estructura:
- Inequidad interna: personas con el mismo rol y nivel ganan cantidades muy diferentes por haber negociado mejor
- Decisiones reactivas: las subidas se producen cuando alguien amenaza con irse
- Ineficiencia en contratación: cada proceso parte de cero en la negociación salarial
- Pérdida de confianza: cuando los empleados comparan salarios (y siempre lo hacen), la falta de lógica destruye el compromiso

### 1.2 Tendencias de transparencia salarial en España y Europa
La Directiva europea 2023/970 obliga a las empresas a la transparencia salarial progresiva. ¿Qué implica? ¿A qué empresas y cuándo afecta?

---

## MÓDULO 2 — DISEÑO DE LOS NIVELES DE LA ORGANIZACIÓN

### 2.1 Arquitectura de niveles
Antes de definir bandas, hay que definir los niveles. Propón una arquitectura para una empresa de entre 30 y 200 personas:

| Nivel | Nombre estándar | Descripción del perfil | Ejemplo de roles |
|-------|----------------|----------------------|-----------------|
| 1 | Junior / Associate | | |
| 2 | Mid / Profesional | | |
| 3 | Senior | | |
| 4 | Staff / Lead | | |
| 5 | Principal / Manager | | |
| 6 | Director | | |
| 7 | VP / C-Level | | |

### 2.2 Criterios de nivel
Para cada salto de nivel, define qué criterios objetivos determinan que alguien está en ese nivel y no en el anterior:

| Dimensión | Cómo evaluar | Peso |
|-----------|-------------|------|
| Impacto y scope (alcance de las decisiones) | | |
| Autonomía (supervisión necesaria) | | |
| Habilidades técnicas o funcionales | | |
| Liderazgo e influencia | | |
| Mentoring y desarrollo de otros | | |

---

## MÓDULO 3 — BENCHMARK DE MERCADO

### 3.1 Fuentes de datos de mercado
Explica las fuentes de benchmark salarial disponibles en España y LATAM:

| Fuente | Cobertura | Coste | Actualización | Mejor para |
|--------|----------|-------|--------------|-----------|
| Glassdoor | Global | Gratuita | Continua | Referencia general |
| Infojobs / Infoempleo (España) | España | Gratuita | Anual | Sectores generalistas |
| Radford / Mercer | Global | De pago | Anual | Empresas tech, precisión alta |
| Kenjo / Factorial Benchmark | España | Plataformas HR | Continua | Pymes españolas |
| Comparably | Global tech | Gratuita | Continua | Startups y tech |
| LinkedIn Salary Insights | Global | LinkedIn Premium | Continua | Roles digitales |

### 3.2 Cómo usar los datos de benchmark
Los percentiles son la clave. Explica qué significa cada uno y cuándo usar cada posición:

| Percentil | Significado | Estrategia empresarial que lo justifica |
|-----------|------------|----------------------------------------|
| P25 (cuartil inferior) | 75% del mercado paga más | Startups tempranas con mucho equity o proyectos con alto propósito |
| P50 (mediana) | Mitad del mercado paga más, mitad menos | Empresas consolidadas que compiten con otros factores |
| P75 (cuartil superior) | Solo el 25% paga más | Empresas que quieren atraer el mejor talento competitivamente |
| P90 (top decil) | El 10% paga más | Empresas que hacen del salario el argumento principal de atracción |

---

## MÓDULO 4 — DISEÑO DE LAS BANDAS SALARIALES

### 4.1 La estructura de cada banda

Cada banda salarial tiene tres puntos:
- **Mínimo (entry)**: salario de entrada para alguien recién llegado al nivel, aún en desarrollo
- **Punto medio (midpoint)**: el salario objetivo para alguien completamente competente en ese nivel
- **Máximo (ceiling)**: el techo de ese nivel; alguien aquí debería estar pensando en el siguiente nivel

**Spread recomendado**: la diferencia entre mínimo y máximo suele ser del 40-60% para roles de contribuidor individual y del 50-70% para roles de gestión.

### 4.2 Tabla de bandas salariales (plantilla)

Construye una tabla ejemplo para los principales roles de una empresa tecnológica en España:

| Nivel | Familia: Engineering | Familia: Product | Familia: Sales | Familia: Ops |
|-------|---------------------|-----------------|----------------|--------------|
| L1 (Junior) | [min] - [mid] - [max] | | | |
| L2 (Mid) | | | | |
| L3 (Senior) | | | | |
| L4 (Staff/Lead) | | | | |
| L5 (Manager) | | | | |

Nota: usa rangos orientativos basados en benchmarks de mercado español 2024-2025.

---

## MÓDULO 5 — POLÍTICA DE REVISIONES SALARIALES

### 5.1 Tipos de revisión salarial

| Tipo | Cuándo | Criterio | Aprobación |
|------|--------|---------|-----------|
| Revisión anual | 1 vez al año, fecha fija | Desempeño + inflación + posición en la banda | Manager + RRHH + presupuesto |
| Promoción | Cambio de nivel | Cumplimiento de criterios del nuevo nivel | Manager + RRHH + dirección |
| Retención (off-cycle) | Si hay oferta externa | Análisis del mercado + valor del empleado | RRHH + dirección |
| Ajuste de equidad | Auditoría interna | Gap vs. banda o vs. pares del mismo nivel | RRHH + dirección |

### 5.2 Cómo comunicar las decisiones salariales
El proceso de comunicación es tan importante como la decisión. Plantilla de conversación para el manager:

- Antes de la conversación: preparar el contexto (desempeño, posición en la banda, presupuesto)
- Durante: explicar el razonamiento, no solo el número
- Si la subida es menor de lo esperado: explicar los criterios y el camino para mejorarla
- Si no hay subida: contexto de mercado, situación de la empresa, o áreas de mejora claras

---

**Formato de respuesta**: incluye la tabla de niveles completa y la tabla de bandas con rangos orientativos para España. Proporciona los criterios de nivel en formato de rúbrica que se pueda compartir con los empleados. Añade una sección de FAQ que anticipe las preguntas más frecuentes cuando se presenta el sistema al equipo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 60,
                'use_case'         => 'Diseñar la estructura de niveles, bandas salariales y política de revisiones para una empresa de 30-200 personas',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            // 7 — Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Optimización fiscal para empresas en España',
                'description'      => 'Deducciones habituales, estructuras eficientes y planificación del Impuesto de Sociedades para pymes y autónomos en España.',
                'prompt_content'   => <<<'PROMPT'
Actúa como asesor fiscal especializado en pymes y empresas de nueva creación en España, con conocimiento profundo del Impuesto de Sociedades, deducciones fiscales y planificación tributaria legal. Necesito optimizar la carga fiscal de mi empresa dentro del marco legal vigente.

**MI EMPRESA**
- Forma jurídica: [SL / SA / autónomo / cooperativa / otro]
- Sector: [tecnología / servicios / comercio / industria / otro]
- Facturación anual aproximada: [rango o cifra]
- Resultado antes de impuestos estimado: [cifra aproximada]
- Número de empleados: [número]
- Situación especial: [empresa de nueva creación / con I+D+i / con inversión en activos / exportadora / startup]
- Comunidad Autónoma: [especificar, ya que algunas tienen deducciones propias]

---

**AVISO IMPORTANTE**: Este prompt genera información educativa y orientativa sobre fiscalidad. La normativa fiscal cambia frecuentemente y su aplicación depende de cada situación concreta. Consulta siempre con un asesor fiscal o gestor colegiado antes de tomar decisiones fiscales.

---

## MÓDULO 1 — IMPUESTO DE SOCIEDADES: TIPOS Y REGÍMENES ESPECIALES

### 1.1 Tipos impositivos aplicables

| Tipo de empresa | Tipo general IS | Condiciones |
|----------------|----------------|------------|
| Tipo general | 25% | Base imponible estándar |
| Empresa de nueva creación (primeros 2 ejercicios con beneficio) | 15% | Empresa de nueva constitución, primer ejercicio con BI positiva |
| Micropymes (facturación <1M€) | 23% | Introducido en 2023 |
| Entidades sin fines lucrativos (régimen especial) | 10% | Fundaciones, asociaciones con condiciones |
| Cooperativas fiscalmente protegidas | 20% | Régimen especial cooperativas |

### 1.2 Base imponible: de resultado contable a base imponible
Explica los ajustes extracontables más frecuentes que transforman el resultado contable en la base imponible del IS:

| Ajuste | Tipo (aumenta / reduce BI) | Ejemplo |
|--------|--------------------------|---------|
| Amortizaciones libres o aceleradas | Reduce | Inversiones en activos nuevos en pymes |
| Reserva de capitalización | Reduce | Incremento de fondos propios |
| Reserva de nivelación (pymes) | Difiere | Permite compensar pérdidas futuras |
| Gastos no deducibles | Aumenta | Multas, donativos fuera de ley, retribuciones de socios sin contrato |
| Corrección monetaria en venta de inmuebles | Reduce | Actualización por inflación |

---

## MÓDULO 2 — DEDUCCIONES EN CUOTA DEL IS

Las deducciones reducen directamente la cuota del IS (no la base imponible), por lo que su impacto es mayor. Lista las más relevantes:

### 2.1 Deducción por I+D+i (arts. 35 LIS)

| Concepto | Porcentaje de deducción |
|----------|------------------------|
| Investigación y Desarrollo básica | 25% del gasto |
| I+D superior al promedio de los 2 años anteriores (exceso) | 42% del exceso |
| Innovación Tecnológica | 12% del gasto |

Qué actividades califican como I+D+i: desarrollo de software nuevo, proyectos de mejora de procesos, certificación CTI por ENAC.
Limite de cuota: estas deducciones tienen límite del 25% de la cuota íntegra (50% si la deducción por I+D supera el 10% de la cuota).

### 2.2 Deducción por inversión en producciones audiovisuales y espectáculos en vivo
Para empresas del sector cultural o que financien producciones.

### 2.3 Deducción por internacionalización
Para empresas que participen en el capital de entidades extranjeras o abran establecimientos en el exterior.

### 2.4 Deducciones por creación de empleo

| Concepto | Deducción |
|----------|----------|
| Trabajador con discapacidad ≥33% (jornada completa) | 9.000€/persona/año |
| Trabajador con discapacidad ≥65% (jornada completa) | 12.000€/persona/año |

---

## MÓDULO 3 — DEDUCCIONES EN CUOTA DEL IRPF / GASTOS DEDUCIBLES PARA AUTÓNOMOS

Si eres autónomo o si tu empresa paga IRPF por rendimientos profesionales:

### 3.1 Gastos deducibles más habituales (y sus condiciones)

| Gasto | Deducible | Condición clave |
|-------|---------|----------------|
| Cuotas de autónomos | 100% | Siempre que esté en la actividad |
| Local afecto a la actividad | 100% | Destinado exclusivamente a la actividad |
| Parte del hogar como despacho | Proporcional | Porcentaje de m² afectos + suministros al 30% de ese % |
| Vehículo | 50% en IRPF / 100% en IS si uso exclusivo | Difícil de justificar el uso exclusivo salvo actividades específicas |
| Teléfono y conexión | 50% si uso mixto | Proporcional al uso profesional |
| Formación | 100% | Relacionada con la actividad |
| Gestoría y asesoramiento | 100% | Sin condición adicional |
| Seguros profesionales | 100% | Relacionado con la actividad |
| Publicidad y marketing | 100% | Documentado con facturas |

### 3.2 El error más costoso: gastos sin factura o con factura incorrecta
Requisitos formales que se deben cumplir para que un gasto sea deducible en una inspección: NIF completo, descripción del servicio, numeración.

---

## MÓDULO 4 — PLANIFICACIÓN FISCAL LEGAL ANTES DEL CIERRE DEL EJERCICIO

Acciones que se pueden tomar antes del 31 de diciembre para reducir la base imponible del año:

### 4.1 Reserva de capitalización (empresas)
Permite reducir la BI hasta en un 10% del incremento de fondos propios del ejercicio (art. 25 LIS). Condiciones: no repartir dividendos durante 5 años del importe capitalizado.

### 4.2 Reserva de nivelación (solo para pymes)
Permite reducir la BI hasta en un 10% (máximo 1M€) de forma anticipada, compensando futuras pérdidas o tributando a los 5 años si no hay pérdidas. Es una herramienta de diferimiento fiscal (art. 105 LIS).

### 4.3 Acelerar gastos o diferir ingresos dentro del ejercicio
Estrategias de timing legales:
- Adelantar la adquisición de activos amortizables antes del cierre
- Diferir el reconocimiento de ingresos si los criterios contables lo permiten
- Pagar facturas pendientes antes del 31 de diciembre

### 4.4 Amortización acelerada para pymes (art. 103 LIS)
Las pymes pueden amortizar libremente los activos nuevos de hasta 25.000€ y amortizar al doble del coeficiente máximo de las tablas para los demás activos nuevos.

---

## MÓDULO 5 — CALENDARIO FISCAL DEL IS Y PAGOS FRACCIONADOS

| Obligación | Período | Plazo | Modelo |
|-----------|---------|-------|--------|
| Primer pago fraccionado | Abril | 1-20 de abril | Modelo 202 |
| Segundo pago fraccionado | Octubre | 1-20 de octubre | Modelo 202 |
| Tercer pago fraccionado | Diciembre | 1-20 de diciembre | Modelo 202 |
| Declaración anual del IS | Cierre del ejercicio + 6 meses | Julio (para cierres en diciembre) | Modelo 200 |

---

**Formato de respuesta**: usa tablas para todos los tipos impositivos, porcentajes de deducción y plazos. Señala claramente cuándo una deducción tiene condiciones adicionales relevantes. Añade al final las 5 acciones más impactantes que puedo tomar antes del cierre del ejercicio dado mi contexto. Recuerda en cada sección que la aplicación concreta requiere asesor fiscal.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 50,
                'use_case'         => 'Identificar las principales deducciones del IS, los regímenes especiales y las acciones de planificación fiscal legal antes del cierre del ejercicio en España',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            // 8 — Legal
            [
                'profession_id'    => 8,
                'title'            => 'Contratos de agencia y representación comercial en España',
                'description'      => 'Comisiones, exclusividad, territorio y terminación: todo lo que debe recoger un contrato de representación comercial para proteger a ambas partes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como abogado mercantilista especializado en contratos de distribución y representación comercial en España con experiencia en la Ley del Contrato de Agencia (LCA) de 1992. Necesito entender y redactar un contrato de agencia o representación comercial que proteja los intereses de mi empresa.

**MI CONTEXTO**
- Mi posición en el contrato: [soy el empresario (principal) / soy el agente (representante comercial)]
- Tipo de producto o servicio a comercializar: [descripción]
- Territorio de actuación del agente: [España completa / Comunidades concretas / Europa / otro]
- Duración prevista: [indefinido / plazo fijo de X años]
- Exclusividad: [quiero/acepto exclusividad para el agente / será no exclusivo]
- Principal preocupación: [la indemnización al terminar / el cálculo de las comisiones / la competencia del agente tras el contrato / la exclusividad del territorio]

---

**AVISO LEGAL**: Este prompt genera información jurídica general con fines educativos. La LCA tiene normas de derecho imperativo que no pueden modificarse en perjuicio del agente. Para redactar o revisar un contrato real, consulta con un abogado especializado.

---

## PARTE 1 — LA LEY DEL CONTRATO DE AGENCIA: FUNDAMENTOS

### 1.1 Qué es y qué no es un contrato de agencia

| Contrato de agencia | Lo que NO es un contrato de agencia |
|--------------------|-------------------------------------|
| El agente actúa de forma independiente (autónomo) | Trabajador por cuenta ajena (eso es contrato laboral) |
| Promueve actos u operaciones de comercio por cuenta del empresario | Quien compra para revender por su cuenta (eso es distribución) |
| Percibe una remuneración (comisión principalmente) | Intermediario ocasional sin continuidad |
| Actuación continuada o estable | Una sola operación |

### 1.2 El marco legal imperativo (lo que no se puede pactar en contra del agente)
La LCA protege especialmente al agente. Enumera las normas que no pueden modificarse en perjuicio del agente aunque así se pacte en el contrato:
- Derecho a la remuneración durante el preaviso
- Derecho a la indemnización por clientela
- Derecho a indemnización por daños en ciertos supuestos de resolución
- Duración mínima de los preavisos en contratos indefinidos

---

## PARTE 2 — CLÁUSULAS ESENCIALES DEL CONTRATO DE AGENCIA

### 2.1 Identificación de las partes y capacidad
Qué debe comprobarse antes de firmar: capacidad de obrar, representación legal, poderes suficientes, condición de autónomo del agente (alta en el RETA o equivalente).

### 2.2 Objeto del contrato — La cláusula más importante
Define exactamente qué debe promover el agente:
- Descripción precisa de los productos o servicios
- Los clientes o segmentos de mercado que puede atender
- Las actividades concretas que incluye (solo captación de pedidos / también gestión postventa / cobro de deudas — esto último requiere poderes expresos)

**Plantilla de cláusula de objeto:**
> "[Agente] se compromete a promover, en el territorio definido en el artículo X, la contratación de los productos/servicios descritos en el Anexo I, actuando por cuenta de [Empresario] y bajo sus instrucciones, de forma continuada y estable, mediante la captación de pedidos de clientes potenciales, que deberán ser aprobados por [Empresario] para producir efecto."

### 2.3 Territorio y exclusividad

**Exclusividad a favor del agente** (el empresario no puede actuar ni nombrar otro agente en esa zona):

**Plantilla de cláusula:**
> "[Empresario] se compromete a no nombrar otro agente para el territorio definido en el Anexo II ni a actuar directamente en dicho territorio durante la vigencia del contrato, salvo para las cuentas estratégicas expresamente excluidas que se detallan en el Anexo III."

**Sin exclusividad**: el agente puede competir con otros agentes o con el propio empresario en el mismo territorio. Qué implica esto para la comisión por operaciones cerradas directamente por el empresario.

### 2.4 Remuneración y comisiones

Esta es la cláusula que genera más disputas. Define con precisión:

| Elemento | Qué debe especificarse |
|----------|----------------------|
| Tipo de remuneración | Comisión porcentual / fija / mixta |
| Base de cálculo | ¿Sobre precio neto? ¿Incluye IVA? ¿Incluye descuentos? ¿Sobre cobrado o sobre facturado? |
| Cuándo se devenga la comisión | Cuando el empresario ejecuta la operación / cuando el cliente paga / cuando se acepta el pedido |
| Cuándo se pierde la comisión | Si el cliente no paga (con límites legales) / si el pedido se cancela |
| Liquidación | Mes vencido / trimestral / con extracto detallado |

**Comisiones por operaciones directas del empresario en el territorio del agente**: ¿tiene derecho el agente a comisión aunque no haya intervenido? (Sí, si tiene exclusividad de zona o de clientes)

### 2.5 Duración y extinción

**Contrato indefinido**: la extinción requiere preaviso. Plazos mínimos por ley:
- 1 mes por cada año de vigencia (mínimo 1 mes, máximo 6 meses)
- Si el contrato lleva más de 1 año: mínimo 2 meses; más de 2 años: mínimo 3 meses

**Contrato de duración determinada**: expira automáticamente. Si continúa por ambas partes tras la expiración, se convierte en indefinido.

**Causas de resolución sin preaviso** (incumplimiento grave): cuáles son y cómo documentarlas correctamente.

---

## PARTE 3 — LA INDEMNIZACIÓN POR CLIENTELA: EL DEBATE MÁS FRECUENTE

### 3.1 Qué es y cuándo se genera
Al extinguirse el contrato (por cualquier causa salvo incumplimiento grave del agente), el agente tiene derecho a una indemnización por la clientela aportada si:
1. Ha aportado nuevos clientes o ha incrementado sensiblemente las operaciones con clientes preexistentes
2. El empresario puede seguir beneficiándose de esa clientela
3. El pago de la indemnización resulta equitativo

### 3.2 Cómo se calcula
La indemnización máxima es la media anual de las remuneraciones percibidas durante los últimos 5 años (o todo el período si el contrato duró menos).

Ejemplo numérico: si el agente ganó 120.000€ en 5 años, la indemnización máxima es 24.000€.

### 3.3 Cuándo NO hay derecho a indemnización por clientela
- Cuando el contrato se resuelve por incumplimiento grave del agente
- Cuando el agente cede el contrato a un tercero con acuerdo del empresario

### 3.4 La indemnización por daños: adicional y diferente
Si el empresario resuelve el contrato sin preaviso o sin causa justificada, puede haber además una indemnización por daños (pérdida de comisiones futuras, gastos no amortizados).

---

## PARTE 4 — PACTO DE NO COMPETENCIA POST-CONTRACTUAL

El empresario puede pactar que el agente no compita durante un máximo de 2 años tras la extinción del contrato, con estas condiciones:
- Debe constar por escrito
- Debe limitarse a la zona o clientela asignada
- Debe referirse al mismo tipo de bienes o servicios

¿El pacto de no competencia requiere contraprestación económica en España? Análisis de la posición doctrinal y jurisprudencial.

---

## PARTE 5 — CHECKLIST DEL CONTRATO DE AGENCIA

Lista de verificación antes de firmar:

**Elementos básicos**
- [ ] Identificación completa de ambas partes (NIF, domicilio, representante)
- [ ] Objeto del contrato descrito con precisión (productos, actividades incluidas y excluidas)
- [ ] Territorio de actuación definido geográficamente
- [ ] Cláusula de exclusividad o no exclusividad explícita

**Remuneración**
- [ ] Porcentaje de comisión y base de cálculo exacta
- [ ] Momento de devengo definido
- [ ] Causas de pérdida de comisión acotadas a las permitidas por la LCA
- [ ] Periodicidad de liquidación y obligación de extracto

**Duración y extinción**
- [ ] Duración definida (determinada o indefinida)
- [ ] Preavisos conformes a la LCA
- [ ] Causas de resolución justificada descritas

**Otros**
- [ ] Pacto de no competencia (si se desea) con sus límites correctos
- [ ] Ley aplicable (España) y fuero competente
- [ ] Referencia a la LCA como ley supletoria

---

**Formato de respuesta**: incluye las plantillas de cláusulas más importantes con notas explicativas entre corchetes. Señala qué disposiciones son imperativas (no negociables) y cuáles son dispositivas (se pueden pactar de forma diferente). Añade una tabla resumen de los derechos del agente que no se pueden eliminar contractualmente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 55,
                'use_case'         => 'Entender la Ley del Contrato de Agencia en España y redactar las cláusulas esenciales de un contrato de representación comercial',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            // 9 — Customer Support
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de renovaciones',
                'description'      => 'El proceso que maximiza la tasa de renovación, detecta oportunidades de expansión y convierte la renovación en un momento estratégico.',
                'prompt_content'   => <<<'PROMPT'
Actúa como directora de Customer Success con experiencia en maximizar las tasas de renovación (Net Revenue Retention) en empresas B2B SaaS y de servicios por suscripción. Necesito diseñar o mejorar el proceso de renovaciones de mi empresa.

**MI CONTEXTO**
- Tipo de empresa: [SaaS / servicios / plataforma / otro]
- Ciclo de renovación habitual: [anual / semestral / mensual]
- Número de cuentas en renovación este trimestre: [aproximado]
- Tasa de renovación actual (si la conoces): [% de ARR renovado]
- Herramienta de CS: [Gainsight / ChurnZero / HubSpot / Salesforce / otra / ninguna]
- Principal problema: [nos enteramos de la no renovación muy tarde / el cliente negocia en el último momento / no sabemos detectar el churn antes de la conversación de renovación]

---

## MÓDULO 1 — FUNDAMENTOS DE UN PROCESO DE RENOVACIONES

### 1.1 Las 3 métricas que definen la salud del revenue

| Métrica | Fórmula | Qué mide | Benchmark SaaS |
|---------|---------|---------|---------------|
| Gross Revenue Retention (GRR) | ARR renovado / ARR inicial (sin expansión) | Churn de revenue puro | >85-90% |
| Net Revenue Retention (NRR) | (ARR renovado + expansión - churn) / ARR inicial | Crecimiento desde la base existente | >100-110% es excelente |
| Logo Retention | Clientes que renuevan / clientes totales al inicio | Churn de cuentas | >90% |

### 1.2 El principio fundamental: la renovación se gana el día 1, no el día -30
La conversación de renovación no es donde se decide si el cliente renueva. Se decide en cada interacción, cada QBR, cada vez que el cliente percibe valor. Si llegas a la negociación de renovación sin haber construido valor, es demasiado tarde para la mayoría de los casos.

---

## MÓDULO 2 — EL TIMELINE DE RENOVACIÓN

Define el proceso proactivo con los hitos clave antes de la fecha de renovación:

| Tiempo antes del vencimiento | Acción | Responsable | Objetivo |
|------------------------------|--------|------------|---------|
| T-180 días (6 meses) | Revisión interna del health score. Clasificar: verde / amarillo / rojo | CSM | Identificar cuentas en riesgo con tiempo suficiente para actuar |
| T-120 días (4 meses) | EBR (Executive Business Review) si es cuenta enterprise | CSM + Dirección | Alinear con el C-level del cliente sobre el valor recibido y los objetivos del próximo año |
| T-90 días (3 meses) | Conversación de renovación: presentar propuesta de valor y condiciones | CSM | Abrir el proceso formal. Detectar objeciones temprano |
| T-60 días | Envío de propuesta formal. Negociación si la hay | CSM + Ventas | Tener un borrador de acuerdo |
| T-30 días | Cierre del acuerdo. Firma o escalado si hay riesgo | CSM + Manager | Renovación confirmada |
| T-7 días | Seguimiento si no se ha firmado | CS Manager | Evitar que llegue al día 0 sin confirmar |
| T+0 (fecha de renovación) | Confirmación de renovación + comunicación de bienvenida al nuevo período | CSM | Inicio del nuevo ciclo con energía positiva |

---

## MÓDULO 3 — LA CONVERSACIÓN DE RENOVACIÓN

### 3.1 Estructura de la reunión de renovación (45-60 minutos)

| Sección | Tiempo | Quién lidera | Contenido |
|---------|--------|-------------|----------|
| Revisión del año (value realization) | 15-20 min | CSM | ROI obtenido, métricas de uso, casos de éxito internos del cliente, logros frente a los objetivos del año anterior |
| Retos del próximo período | 10 min | Cliente habla | ¿Qué cambios vienen en el negocio? ¿Qué necesitan diferente? |
| Propuesta para el siguiente año | 15 min | CSM | Cómo la plataforma/servicio apoya los nuevos objetivos, nuevas funcionalidades relevantes, oportunidades de expansión |
| Condiciones de renovación | 10 min | CSM | Propuesta de renovación y timing |
| Próximos pasos | 5 min | CSM | Fecha de firma, proceso de aprobación interno del cliente |

### 3.2 El deck de renovación
Estructura del documento que lleva el CSM a la reunión de renovación:

Slide 1: Resumen ejecutivo (para el economic buyer)
Slide 2: Los objetivos que el cliente tenía al inicio del año
Slide 3: Métricas de uso y adopción (datos concretos del producto)
Slide 4: Resultados de negocio obtenidos (en los términos del cliente, no en los nuestros)
Slide 5: Testimonios internos del equipo del cliente (si los tienes)
Slide 6: Lo que viene: roadmap del próximo año relevante para este cliente
Slide 7: Propuesta de renovación

---

## MÓDULO 4 — GESTIÓN DE OBJECIONES EN LA RENOVACIÓN

### 4.1 Las 5 objeciones más frecuentes y cómo responderlas

| Objeción | Lo que realmente significa | Estrategia de respuesta |
|----------|--------------------------|------------------------|
| "Es demasiado caro" | Percepción de bajo ROI o presión presupuestaria | Conectar el precio con el valor medido. Si el ROI es real, hacerlo explícito con números |
| "No hemos usado suficiente el producto" | Bajo adoption, posible problema interno del cliente | Proponer un plan de adopción para el siguiente período. Ofrecer sesión de formación gratuita |
| "Estamos evaluando alternativas" | Han empezado a hablar con competidores | Entender el driver real (precio, funcionalidad, relación). Construir un caso de switching cost |
| "Necesitamos tiempo para decidir" | No hay consensus interno para renovar | Identificar quién más participa en la decisión y hablar con ellos |
| "Vamos a reducir el volumen" | Downsell como retención. Es mejor que perder la cuenta | Aceptar el downsell, documentar el acuerdo, mantener la relación y buscar la expansión más adelante |

### 4.2 El "no" como información
Cuando un cliente no renueva, la entrevista de salida es una herramienta de aprendizaje valiosa. Diseña el guion de la llamada de churn:
- Qué preguntas hacer (sin presionar para que vuelvan)
- Cómo documentar los motivos en el CRM
- Cómo convertir este aprendizaje en mejoras del proceso o del producto

---

## MÓDULO 5 — OPORTUNIDADES DE EXPANSIÓN EN LA RENOVACIÓN

La renovación es el mejor momento para plantear la expansión porque el cliente ya ha tomado la decisión de quedarse.

### 5.1 Tipos de expansión a plantear en la renovación

| Tipo de expansión | Cuándo plantearla | Cómo presentarla |
|------------------|------------------|-----------------|
| Upsell (tier superior) | Si el cliente ha usado el 80%+ de los límites del plan | "Dado el uso que habéis tenido este año, el plan siguiente os ahorraría [fricción] y os daría [beneficio]" |
| Nuevos usuarios o licencias | Si hay departamentos sin acceso | "Veo que el equipo de [área] todavía no usa la plataforma — ¿tiene sentido incluirles este año?" |
| Módulos adicionales | Si hay un caso de uso no cubierto | "Para vuestro objetivo de [X], el módulo de [Y] resolvería directamente [problema]" |
| Nuevo departamento o filial | Si hay estructura corporativa | "¿Cómo están haciendo esto en [otra filial o país]?" |

### 5.2 La regla de oro de la expansión en la renovación
Si el cliente está en modo "en riesgo", no plantees upsell. Primero asegura la renovación al nivel actual. La expansión es para cuentas verdes o para resolver un problema concreto, no para compensar churn.

---

## MÓDULO 6 — MÉTRICAS Y DASHBOARD DE RENOVACIONES

| Métrica | Fórmula | Frecuencia de revisión | Objetivo |
|---------|---------|----------------------|---------|
| Pipeline de renovaciones (30/60/90 días) | ARR a renovar por período | Semanal | Visibilidad del forecast |
| Early renewal rate | % renovados >30 días antes del vencimiento | Mensual | >40% |
| On-time renewal rate | % renovados en la fecha | Mensual | >70% |
| Churn rate de ARR | ARR perdido / ARR inicial del período | Mensual | <10% anual |
| Expansion rate en renovación | ARR adicional en renovaciones / ARR total renovado | Trimestral | >10-15% |

---

**Formato de respuesta**: incluye la agenda de la reunión de renovación en formato copiable, el deck de renovación en formato de lista de slides con el contenido de cada una y las respuestas a las 5 objeciones listas para que el CSM las use directamente. Adapta los plazos del timeline si mi ciclo de renovación es diferente al anual.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'         => 'Diseñar el proceso completo de renovaciones con timeline, agenda de reunión, gestión de objeciones y oportunidades de expansión',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            // 10 — Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Lista de email propia como freelance',
                'description'      => 'Cómo construir y monetizar una newsletter que genera clientes recurrentes: sistema, contenido y estrategia de captación desde cero.',
                'prompt_content'   => <<<'PROMPT'
Actúa como estratega de contenidos y marketing de newsletter con experiencia ayudando a freelancers y solopreneurs a construir audiencias de email que generan oportunidades de negocio recurrentes. Necesito construir mi propia lista de email y convertirla en un canal de captación de clientes.

**MI CONTEXTO**
- Mi especialidad: [diseño / desarrollo / marketing / consultoría / copywriting / fotografía / otra]
- Mi cliente ideal: [tipo de empresa o perfil de persona]
- Lista de email actual: [número de suscriptores o "cero, empezamos desde cero"]
- Herramienta de email que uso o quiero usar: [Substack / ConvertKit / Beehiiv / Mailchimp / otro]
- Tiempo disponible para crear contenido: [horas por semana]
- Principal duda: [no sé de qué escribir / no tengo audiencia inicial / no sé cómo monetizar / no sé si vale la pena]

---

## MÓDULO 1 — POR QUÉ LA LISTA DE EMAIL ES EL ACTIVO MÁS VALIOSO DE UN FREELANCE

### 1.1 La diferencia entre audiencia prestada y audiencia propia

| Canal | Alcance orgánico | Propiedad de los datos | Riesgo de plataforma | Conversión |
|-------|-----------------|----------------------|---------------------|-----------|
| LinkedIn | 5-15% de seguidores | No (datos de LinkedIn) | Alto (cambio de algoritmo, suspensión) | Bajo |
| Instagram | 2-8% de seguidores | No | Alto | Bajo |
| Twitter/X | 3-10% | No | Alto | Bajo-medio |
| Email / newsletter | 25-50% de open rate | Sí (puedes exportar la lista) | Muy bajo (tú controlas el canal) | Alto |

### 1.2 Los 3 tipos de suscriptor que generan negocio
No todos los suscriptores tienen el mismo valor. Explica la pirámide:
1. **Clientes activos**: ya trabajan o han trabajado contigo, te siguen por la relación
2. **Leads calientes**: podrían contratarte, están evaluando
3. **Referentes**: no te contratan pero te recomiendan a quienes sí lo hacen

---

## MÓDULO 2 — DEFINE TU NEWSLETTER: EL POSICIONAMIENTO

### 2.1 La pregunta fundamental antes de empezar
¿Qué aprende o gana alguien al suscribirse a tu newsletter que no puede conseguir fácilmente en otro lugar?

Rellena esta frase: "[Nombre de la newsletter] es para [tipo de persona] que quiere [beneficio concreto] sin [fricción o coste que normalmente tiene]."

### 2.2 Los 5 formatos de newsletter para freelancers

| Formato | Descripción | Frecuencia ideal | Mejor para |
|---------|-------------|-----------------|-----------|
| Curación con perspectiva | Seleccionas contenido del sector y añades tu opinión | Semanal | Freelancers con poco tiempo de creación |
| Case study propia | Analizas un proyecto tuyo con resultados reales | Quincenal | Freelancers con proyectos documentables |
| Tutorial o guía práctica | Enseñas un proceso o habilidad paso a paso | Semanal o quincenal | Freelancers que venden conocimiento |
| Behind the scenes | Muestras tu proceso de trabajo, reflexiones, aprendizajes | Semanal | Freelancers que quieren mostrar personalidad |
| Mixto | Combina formato educativo con contenido personal | Semanal | La mayoría de newsletters exitosas |

### 2.3 La frecuencia correcta para empezar
Recomendación para quien empieza desde cero: quincenal durante los primeros 3 meses (para no saturar ni agotarse), luego evaluar si pasar a semanal. La consistencia importa más que la frecuencia.

---

## MÓDULO 3 — CAPTACIÓN: CÓMO CRECER LA LISTA SIN AUDIENCIA INICIAL

### 3.1 Estrategias de crecimiento orgánico

**Estrategia 1: el lead magnet de alta percepción**
Crea un recurso gratuito que resuelva un problema específico de tu cliente ideal. No un PDF genérico: algo que alguien compartiría con un colega porque es genuinamente útil.

Ideas según especialidad:
- Diseñador: kit de componentes gratuito + tutorial de uso
- Developer: script o herramienta open source + guía de instalación
- Marketing: plantilla de auditoría o calendar editorial
- Consultor: framework de diagnóstico o checklist de decisión

**Estrategia 2: capitalizar cada proyecto**
Al terminar un proyecto, pide permiso al cliente para compartir un caso de éxito (anonimizado si es necesario). Ese caso de estudio en la newsletter atrae a clientes con problemas similares.

**Estrategia 3: repropósito en LinkedIn**
Toma el punto más interesante de cada email y conviértelo en un post de LinkedIn que termine con: "Si quieres el análisis completo, está en mi newsletter [link]." Cada post de LinkedIn puede traer 10-50 suscriptores nuevos.

**Estrategia 4: menciones y colaboraciones**
Pedir mención en newsletters de personas con audiencias complementarias (no competidoras). El formato más sencillo: te mencionan en su "herramientas que uso" o "personas que sigo", tú haces lo mismo.

### 3.2 Crecimiento pagado (cuando ya tienes algo que funciona)
- Boletines de referidos (SparkLoop / Beehiiv Boosts): pagas por suscriptor cualificado
- Newsletter Ads: anunciate en newsletters de tu nicho
- Regla: no inviertas en growth pagado hasta tener al menos un 30% de open rate estable

---

## MÓDULO 4 — ESTRUCTURA DE UN EMAIL QUE CONVIERTE LECTORES EN CLIENTES

### 4.1 El arco narrativo de cada email
El mejor email de newsletter no vende directamente. Enseña algo valioso y deja que la demostración de competencia genere la demanda.

Estructura de un email de 400-600 palabras que funciona:
1. **Asunto y preview text**: hook de curiosidad o de problema (no "mi newsletter #23")
2. **Apertura**: una pregunta, un dato sorprendente o una situación que el lector reconoce
3. **El insight**: lo que aprendiste, lo que hiciste o lo que observas en tu trabajo — con especificidad
4. **Aplicación práctica**: cómo el lector puede usar esto. Un paso concreto, no una lista de 10 cosas
5. **Cierre natural**: una reflexión, una pregunta al lector o el contexto del próximo email
6. **CTA sutil (si aplica)**: no en cada email. Cuando lo hay: "Si estás en esta situación, esto es lo que hago con mis clientes: [link a servicios o a agendar]"

### 4.2 Plantilla de email #1 (el de bienvenida)

Escribe el email de bienvenida completo adaptado a mi especialidad con:
- Asunto: 3 opciones
- Cuerpo completo: quién soy, qué van a recibir, por qué me escriben
- CTA de respuesta: invitar al lector a presentarse o a compartir su mayor desafío actual

### 4.3 Plantilla de email de caso de estudio
Estructura del email más poderoso para un freelance: el análisis de un proyecto real con resultados.

---

## MÓDULO 5 — MONETIZACIÓN: CÓMO LA NEWSLETTER GENERA CLIENTES

### 5.1 Los 3 mecanismos de conversión en newsletters de freelance

| Mecanismo | Cómo funciona | Cuándo activarlo |
|-----------|--------------|-----------------|
| Conversión orgánica directa | El lector te contacta tras leer el email | Desde el primer email. No hace falta hacer nada especial: tu newsletter es la prueba de tu competencia |
| CTA de servicios en cada 3-4 emails | Un párrafo al final que recuerda que puedes ayudarles con [X] | Cuando tienes >100 suscriptores y capacidad de absorber clientes |
| Oferta exclusiva para suscriptores | Descuento o servicio reservado para la lista | Cuando quieres convertir en un período concreto o llenar la agenda |

### 5.2 El lanzamiento de servicios a tu lista
Cuando quieres anunciar la disponibilidad de tu servicio o abrir plazas, diseña una secuencia de 3 emails:
- Email 1 (lunes): el problema que resuelves — contenido puro
- Email 2 (miércoles): cómo lo resuelves — caso de estudio o proceso
- Email 3 (viernes): la oferta — plazas disponibles, cómo contactarte, cuándo cierra

---

## MÓDULO 6 — LOS PRIMEROS 90 DÍAS: PLAN SEMANAL

**Semanas 1-2**: elegir la herramienta, definir el posicionamiento, crear el lead magnet, configurar la landing page

**Semanas 3-4**: primeros 3 emails de contenido, compartir en LinkedIn, invitar a clientes actuales y pasados a suscribirse

**Semana 5-8**: publicar con consistencia, analizar qué emails tienen mejor open rate y CTR, iterar el tema

**Semana 9-12**: primer CTA de servicios en la newsletter, medir la respuesta, ajustar la propuesta

**Objetivo a los 90 días**: 100 suscriptores + 1 proyecto o conversación de venta generada directamente desde la newsletter

---

**Formato de respuesta**: escribe el email de bienvenida completo con las 3 opciones de asunto. Proporciona las 5 ideas de lead magnet más concretas para mi especialidad. Incluye el plan de las primeras 4 semanas en formato de tareas semanales accionables.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 35,
                'use_case'         => 'Construir desde cero la estrategia de newsletter freelance con posicionamiento, captación, contenido y monetización',
                'vote_score'       => 36,
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
