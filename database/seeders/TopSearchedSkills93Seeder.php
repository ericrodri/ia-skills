<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills93Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'TikTok Ads: campañas de pago que convierten',
                'description'      => 'Configura, lanza y optimiza campañas de TikTok Ads para ecommerce y apps: estructura de cuenta, formatos creativos que funcionan y las palancas de optimización que reducen el CPM.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un media buyer especializado en TikTok Ads con experiencia en ecommerce y generación de leads. Voy a darte el contexto de mi negocio y quiero que me ayudes a crear una estrategia completa de campañas de pago en TikTok.

**Mi contexto:**
- Producto / servicio: [describe tu producto, precio y margen]
- Objetivo principal: [ventas directas / leads / app installs / reconocimiento]
- Presupuesto mensual disponible: [€/mes]
- Audiencia objetivo: [edad, intereses, comportamientos, geografía]
- Resultados actuales en otros canales: [Meta Ads, Google, etc. con sus métricas]

---

**Parte 1 – Estructura de cuenta recomendada**

Diseña la arquitectura de campañas para mi caso:
- Cuántas campañas y con qué objetivo de campaña (Conversiones, Alcance, Tráfico, Generación de leads)
- Segmentación de grupos de anuncios: intereses vs. comportamientos vs. lookalike vs. broad
- Presupuesto sugerido por grupo de anuncios y reglas de escalado
- Tabla comparativa: cuándo usar Presupuesto de campaña (CBO) vs. presupuesto por grupo de anuncios (ABO)

| Tipo de presupuesto | Cuándo usarlo | Ventaja principal | Riesgo |
|---|---|---|---|
| CBO | ... | ... | ... |
| ABO | ... | ... | ... |

---

**Parte 2 – Creatividades que funcionan en TikTok**

Explica los 5 formatos creativos con mayor tasa de conversión actualmente en TikTok Ads y para cada uno:
1. Nombre del formato
2. Duración ideal
3. Estructura de guion (gancho 0-3s / desarrollo / CTA)
4. Para qué tipo de producto o servicio funciona mejor
5. KPI de referencia (CTR, CVR) que indica que el creativo está funcionando

Incluye además:
- Las 3 razones principales por las que los creativos fallan en TikTok (y cómo evitarlas)
- Cómo adaptar contenido de UGC y creatividades de Meta para TikTok sin que parezcan anuncios de otra plataforma
- Checklist de producción: qué debe tener un vídeo TikTok Ads antes de publicarlo

---

**Parte 3 – Configuración técnica y píxel**

Dame el paso a paso para:
- Instalar y verificar el píxel de TikTok en un sitio web (Shopify / WooCommerce / custom)
- Configurar eventos de conversión prioritarios (ViewContent, AddToCart, Purchase) con valores de evento
- Activar el Advanced Matching para mejorar la atribución
- Integrar la API de Conversiones de TikTok (CAPI) y por qué es crítica post-iOS 14

---

**Parte 4 – Optimización y escala**

Crea un framework de decisiones para los primeros 30 días de campaña:

Semana 1 – Fase de aprendizaje:
- Qué métricas mirar y cuáles ignorar durante el learning
- Cuándo pausar un grupo de anuncios por bajo rendimiento (con umbrales numéricos)
- Errores de novato que rompen el período de aprendizaje

Semana 2-3 – Optimización inicial:
- Cómo identificar el segmento ganador y cómo duplicarlo
- A/B testing de creatividades: metodología correcta en TikTok
- Cuándo y cómo subir presupuesto sin romper el algoritmo

Semana 4+ – Escala:
- Señales de que una campaña está lista para escalar
- Técnicas de escala horizontal (duplicar grupos) vs. vertical (subir presupuesto)
- Cómo combatir la fatiga creativa: cadencia de renovación de creativos recomendada

---

**Parte 5 – Métricas y reporte**

Define las métricas clave para mi objetivo de campaña y crea una plantilla de reporte semanal con:
- Métricas de embudo (Impresiones → Clics → Conversiones)
- ROAS objetivo y ROAS de corte (por debajo del cual pausar)
- Comparativa semana a semana con porcentaje de variación
- Sección de "insights creativos": qué formatos y ganchos están ganando

Termina con las 5 preguntas que debo hacerme cada semana para mantener las campañas en crecimiento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear y optimizar campañas de TikTok Ads para ecommerce y apps con estructura profesional.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Cursor y AI coding assistants: multiplica tu productividad',
                'description'      => 'Domina Cursor, GitHub Copilot y Claude para programar más rápido sin perder el control del código: configuración óptima, workflows y las reglas que evitan que la IA introduzca bugs silenciosos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un senior software engineer que lleva más de un año usando AI coding assistants en producción y ha desarrollado un sistema de trabajo que maximiza la velocidad sin comprometer la calidad del código. Ayúdame a construir mi propio sistema.

**Mi perfil:**
- Lenguajes principales: [Python / TypeScript / Go / Rust / etc.]
- Stack: [frontend / backend / full-stack / data / DevOps]
- Editor actual: [VS Code / JetBrains / Neovim]
- Experiencia con AI assistants: [ninguna / básica / uso Copilot pero sin sistema]
- Tipo de proyectos: [SaaS / apps móviles / APIs / data pipelines / etc.]

---

**Parte 1 – Cursor: configuración y uso avanzado**

Explica la diferencia real entre los modos de Cursor:
- Tab completion vs. Cmd+K (inline edit) vs. Chat vs. Composer vs. Agent
- Cuándo usar cada modo para maximizar la velocidad y minimizar las correcciones
- Configuración del `.cursorrules` (ahora `cursor.rules`): qué reglas debo añadir para mi stack específico

Crea un `.cursorrules` base para mi stack con reglas sobre:
- Convenciones de código (naming, estructura de archivos)
- Qué hacer y qué no hacer con los tipos/interfaces
- Cómo manejar errores en este stack
- Patrones prohibidos que generan bugs frecuentes

---

**Parte 2 – GitHub Copilot: lo que la mayoría no usa**

Más allá del autocomplete básico, explica:
- Copilot Chat en el editor vs. Copilot en el navegador vs. CLI
- Cómo escribir comentarios que guíen a Copilot hacia el código que realmente quieres
- Copilot para escribir tests: el workflow que genera tests útiles en lugar de tests triviales
- Copilot Workspace (cuando esté disponible): qué cambia y cómo prepararse

---

**Parte 3 – Claude como pair programmer**

Estrategias para usar Claude en tareas de programación complejas:
- Cómo dar contexto de codebase grande sin pegar miles de líneas (Project Knowledge, context files)
- El prompt de "revisión de código senior": cómo pedirle a Claude que encuentre bugs reales
- Cómo usar Claude para entender código legado que nadie entiende
- Generación de documentación técnica desde el código: el prompt que produce docs que el equipo realmente lee

Incluye 5 prompts listos para usar para tareas de dev habituales:
1. Refactorizar función compleja
2. Escribir tests unitarios para una función dada
3. Explicar un error de compilación / runtime oscuro
4. Diseñar el schema de base de datos para un nuevo feature
5. Revisar una PR buscando bugs de seguridad o rendimiento

---

**Parte 4 – Control de calidad: evitar que la IA rompa tu código**

Este es el punto crítico. Explica:
- Los 5 tipos de bugs más comunes que introducen los AI assistants (y cómo detectarlos)
- El checklist de revisión antes de hacer commit con código generado por IA
- Cómo configurar linters y type checkers para que atrapen los errores que la IA no ve
- La regla de "superficie mínima de generación": por qué generar funciones enteras es más arriesgado que completar líneas

**Tabla: nivel de confianza por tipo de tarea de IA**

| Tarea | Confianza | Revisión necesaria |
|---|---|---|
| Completar boilerplate | Alta | Superficial |
| Escribir lógica de negocio | Media | Profunda |
| Manejo de concurrencia | Baja | Exhaustiva |
| Consultas SQL complejas | Media | Con EXPLAIN |
| Código de seguridad (auth, crypto) | Muy baja | Auditoría manual |

---

**Parte 5 – Sistema de trabajo semanal**

Diseña una rutina de trabajo con AI assistants para mi perfil:
- Qué tareas delegar primero a la IA (las de mayor ROI en tiempo ahorrado)
- Qué tareas nunca delegar o delegar con revisión exhaustiva
- Cómo medir si realmente estoy siendo más productivo (métricas de output, no de velocidad de escritura)
- Los recursos que debo consultar cada mes para mantenerme al día con las mejoras de estas herramientas
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Configurar un sistema de trabajo con Cursor, Copilot y Claude que multiplique la productividad sin perder el control del código.',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Figma avanzado: variables, componentes y auto-layout',
                'description'      => 'Domina las funciones avanzadas de Figma que hacen al equipo de diseño más rápido y coherente: variables de diseño, componentes complejos, auto-layout anidado y los workflows que eliminan el trabajo manual.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un design systems lead con experiencia en equipos de producto de alto rendimiento. Voy a contarte el estado actual de nuestro Figma y quiero que me ayudes a llevar el equipo al siguiente nivel con las funciones avanzadas que más impacto tienen.

**Contexto del equipo:**
- Tamaño del equipo de diseño: [número de diseñadores]
- Tipo de producto: [SaaS / app móvil / ecommerce / plataforma B2B]
- Madurez del design system actual: [ninguno / básico con estilos / componentes pero inconsistentes / sistema maduro]
- Principal dolor: [inconsistencia / velocidad de entrega / handoff con dev / mantenimiento]
- Versión de Figma: [Free / Professional / Organization / Enterprise]

---

**Parte 1 – Variables de diseño: el cambio más grande de los últimos años**

Explica el sistema de variables de Figma desde cero:
- Diferencia entre Variables y Estilos: cuándo usar cada uno y cuándo no usar variables
- Tipos de variables: Color, Number, String, Boolean — casos de uso para cada tipo
- Estructura de colecciones recomendada para un design system:
  - Colección primitiva (raw tokens: todas las tonalidades de cada color)
  - Colección semántica (roles: background, text, border, interactive)
  - Colección de modo (light/dark, brand A/brand B)

Crea el esquema de variables recomendado para mi tipo de producto con ejemplos de nombres de variables en formato `{category}/{role}/{variant}`.

**Cómo implementar dark mode con variables:**
- Paso a paso para configurar dos modos (light/dark) en una colección
- Cómo aplicar las variables a los componentes para que el cambio de modo sea instantáneo
- Los errores más comunes al implementar dark mode con variables (y cómo evitarlos)

---

**Parte 2 – Componentes complejos: variantes, propiedades y slots**

Ve más allá de las variantes básicas:
- Component Properties: Boolean, Text, Instance Swap — cómo reducir el número de variantes a la mitad
- Cuándo crear una variante vs. cuándo usar una propiedad de componente
- Nested components: cómo anidar componentes sin que el sistema se vuelva inmanejable
- Slots e Instance Swap: construir componentes tan flexibles que el equipo nunca salga del sistema

Ejemplo práctico: diseña la arquitectura de un componente Button complejo que soporte:
- Tamaños (sm, md, lg)
- Variantes visuales (primary, secondary, ghost, danger)
- Estados (default, hover, pressed, disabled, loading)
- Iconos opcionales (izquierda, derecha, solo icono)
- Sin crear 200 variantes manuales

---

**Parte 3 – Auto-layout avanzado**

Los usos de auto-layout que la mayoría no conoce:
- Auto-layout anidado: cómo construir layouts complejos que se adaptan solos al contenido
- Wrap: el modo que simula un grid CSS flexbox y cuándo es la solución correcta
- Absolute position dentro de auto-layout: cuándo y cómo usarlo sin romper el frame
- Gap entre ítems avanzado: spacing manual vs. "space between"

Crea el esquema de un card de producto complejo (imagen, título, precio, badge, CTA) usando auto-layout anidado que:
- Se adapte al texto variable
- Funcione en versión horizontal y vertical cambiando una propiedad
- Mantenga el spacing correcto en todos los breakpoints

---

**Parte 4 – Workflows que multiplican la velocidad del equipo**

Los procesos concretos que más tiempo ahorran:
- Templates de páginas en Figma: estructura de un archivo de diseño bien organizado
- Cómo usar Branching para trabajar en features sin romper el archivo principal
- Dev Mode: qué preparan los diseñadores antes de entregar para reducir las preguntas de los devs a cero
- Prototyping avanzado: variables en prototipos para simular interacciones reales (formularios, estados)

**Tabla: antes vs. después de implementar estas prácticas**

| Tarea | Sin sistema | Con sistema | Reducción |
|---|---|---|---|
| Cambiar color de marca en todo el producto | Horas | Segundos | 99% |
| Añadir modo oscuro | Semanas | Días | 80% |
| Actualizar un componente en todos sus usos | Horas | Minutos | 90% |
| Generar specs para un nuevo componente | 30 min | 5 min | 83% |

---

**Parte 5 – Plan de migración**

Dado el estado actual de nuestro Figma, dame un plan de migración en fases para llegar al sistema descrito:
- Fase 1 (semana 1-2): qué hacer primero para tener impacto inmediato
- Fase 2 (semana 3-6): construcción del sistema base
- Fase 3 (mes 2-3): componentes complejos y variables avanzadas
- Cómo convencer al equipo de que vale la pena la inversión inicial
- Recursos de formación recomendados (oficiales y de comunidad) para cada fase
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Implementar variables de diseño, componentes avanzados y auto-layout en Figma para que el equipo diseñe más rápido y con más coherencia.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Outreach automatizado con Clay y Apollo',
                'description'      => 'Diseña secuencias multicanal con Clay y Apollo que generan pipeline a escala sin perder la personalización que convierte: enrichment, segmentación y copy que no parece automatizado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un growth engineer especializado en outbound B2B que ha construido sistemas de outreach automatizado para startups en fase de crecimiento. Ayúdame a construir mi propio sistema de generación de pipeline con Clay y Apollo.

**Mi contexto:**
- Producto / servicio: [describe qué vendes y a quién]
- ICP (Ideal Customer Profile): [industria, tamaño de empresa, cargo del decisor]
- Ticket medio: [€/año o €/venta]
- Objetivo de pipeline mensual: [número de oportunidades o € de pipeline]
- Stack actual: [CRM que usas, herramientas de email, etc.]
- Experiencia con herramientas: [nunca he usado Clay / uso Apollo básico / tengo sistema parcial]

---

**Parte 1 – Construir la lista con Clay**

Explica cómo usar Clay para construir listas de prospectos de alta calidad:
- Fuentes de datos: cuáles conectar primero para mi ICP (LinkedIn, Apollo, Hunter, Clearbit, etc.)
- Enrichment waterfall: cómo configurar la cascada de proveedores de datos para maximizar el fill rate y minimizar el coste de créditos
- Señales de compra que puedo capturar en Clay:
  - Contrataciones recientes (señal de crecimiento o nuevo budget)
  - Tecnologías usadas (tech stack del prospecto)
  - Noticias y press releases recientes
  - Engagement con mi contenido

**Tabla: señales de compra y cómo interpretarlas**

| Señal | Qué indica | Acción recomendada |
|---|---|---|
| Contratan un Head of [área relacionada] | Budget nuevo, problema que resolver | Outreach inmediato con ángulo de onboarding |
| Usan tecnología X (competidor) | Pain point conocido | Mensaje de switching con comparativa |
| Ronda de financiación reciente | Crecimiento, gasto en herramientas | Propuesta de escala |
| Publicaron contenido sobre [tema] | Problema activo en la agenda | Responder al contenido + conectar |

---

**Parte 2 – Apollo: configurar las secuencias**

Paso a paso para construir una secuencia de outreach en Apollo:
- Configuración inicial: dominio de envío, warm-up, límites diarios recomendados
- Estructura de secuencia óptima para cold outreach B2B:
  - Número de touchpoints y canales (email + LinkedIn + llamada)
  - Timing entre pasos (días entre cada contacto)
  - Cuándo parar de contactar a alguien que no responde

**La secuencia de 7 pasos que convierte:**
1. Email 1 (Día 1): [estructura y enfoque]
2. LinkedIn connection request (Día 2): [mensaje o sin mensaje]
3. Email 2 (Día 4): [enfoque diferente]
4. LinkedIn message (Día 6): [formato]
5. Email 3 (Día 9): [el de "romper el hielo" o el de valor]
6. Llamada en frío (Día 12): [guion de 30 segundos]
7. Email de ruptura (Día 15): [el que más respuestas genera]

---

**Parte 3 – Copy que parece manual**

El problema del outreach automatizado es que parece automatizado. Cómo resolverlo:
- La fórmula del email en frío de alto rendimiento:
  - Asunto: [reglas para sujetos que se abren]
  - Línea 1 (personalización real): cómo usar las señales de Clay para el opening
  - Propuesta de valor: una frase, no un párrafo
  - CTA único y sin fricción
  - Total: 5 líneas máximo

Escríbeme 3 variantes del email inicial para mi ICP usando variables de Clay como `{{primera_linea_personalizada}}`, `{{señal_de_compra}}` y `{{caso_de_uso_relevante}}`.

- Cómo escribir la primera línea personalizada con IA usando columnas de Clay + Claude/GPT
- Los asuntos que más abren actualmente (con benchmarks de open rate)
- Qué personalización importa (la que menciona algo específico del prospecto) vs. la falsa personalización (poner el nombre de la empresa no es personalización)

---

**Parte 4 – Operaciones y métricas**

Cómo gestionar el sistema una vez que está en marcha:
- KPIs de outreach y benchmarks de industria para comparar:

| Métrica | Benchmark frío | Benchmark con señales | Alerta roja |
|---|---|---|---|
| Open rate | 35-45% | 55-65% | < 25% |
| Reply rate | 2-5% | 8-15% | < 1.5% |
| Positive reply rate | 0.5-1% | 2-4% | < 0.3% |
| Meeting booked rate | 0.3-0.8% | 1-3% | < 0.2% |

- Cómo A/B testar sujetos y mensajes en Apollo sin contaminar los datos
- Cuándo limpiar la lista y cómo manejar los bounces para proteger la reputación del dominio
- Integración con el CRM: qué datos pasar y en qué momento

---

**Parte 5 – Escalar sin perder calidad**

Cuando el sistema funciona, cómo escalar:
- Añadir canales: cuándo tiene sentido añadir LinkedIn automation (con sus riesgos)
- Segmentar por señal: crear workflows específicos para cada señal de compra
- El equipo mínimo viable para gestionar un sistema de outbound a escala
- Errores que destruyen la reputación del dominio y cómo evitarlos
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir un sistema de outreach B2B automatizado con Clay y Apollo que genera pipeline a escala con personalización real.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Ship fast: lanzar cada semana sin romper nada',
                'description'      => 'El proceso, las herramientas y la cultura que permiten a los mejores equipos de producto lanzar features cada semana de forma sostenible: desde la planificación hasta el rollout controlado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP of Product de una startup B2B SaaS que ha conseguido pasar de lanzar cada mes a lanzar múltiples veces por semana sin aumentar el número de incidentes en producción. Ayúdame a transformar la cadencia de entrega de mi equipo.

**Mi contexto:**
- Etapa del producto: [MVP / PMF / escala]
- Tamaño del equipo de desarrollo: [número de ingenieros, diseñadores, PMs]
- Cadencia de lanzamiento actual: [cada cuánto lanzáis y cómo]
- Principal obstáculo para lanzar más rápido: [miedo a bugs / QA lento / procesos de aprobación / deuda técnica]
- Stack tecnológico relevante: [monolito / microservicios / serverless / mobile]

---

**Parte 1 – El mindset que hace posible el ship fast**

Antes del proceso, el mindset:
- La diferencia entre equipos que "lanzan rápido" y equipos que "lanzan a menudo y bien": la clave está en el tamaño del cambio, no en la velocidad
- Por qué los lanzamientos grandes son más arriesgados que los pequeños (matemática del riesgo compuesto)
- La cultura de la reversibilidad: diseñar cada cambio para que sea deshacible en menos de 5 minutos
- Cómo vender "ship fast" internamente: los argumentos para el CEO, el CTO y el equipo de CS que tiene que gestionar los bugs

---

**Parte 2 – El proceso de planificación que habilita la velocidad**

El proceso semanal que hace posible entregar features cada semana:

**Lunes – Planning:**
- Cómo descomponer cualquier feature en partes que se puedan lanzar independientemente
- La regla del "lanzamiento vertical vs. horizontal": nunca lanzar capas de infraestructura sin funcionalidad visible
- Cómo escribir tickets que tienen todo lo que el dev necesita sin crear documentación infinita

**Miércoles – Sync de mitad de semana:**
- El check rápido de 20 minutos para detectar blockers antes de que sean emergencias
- Cómo gestionar el scope creep que aparece durante la implementación

**Viernes – Lanzamiento:**
- El ritual de deploy: el checklist que tarda 10 minutos y evita el 90% de los incidentes
- Cómo hacer rollout gradual (1% → 10% → 50% → 100%) y cuándo acelerarlo o pararlo

---

**Parte 3 – Las herramientas que habilitan la entrega continua**

**Feature flags: el habilitador más importante**
- Cómo usar feature flags para separar el deployment del release
- Cuándo usar flags de lanzamiento gradual vs. flags de experimento vs. flags de kill switch
- Las herramientas: LaunchDarkly, Unleash, Growthbook, Statsig — cuál para cada etapa

**CI/CD pipeline para ship fast:**
- La configuración mínima de pipeline que garantiza calidad sin ralentizar
- Tests que correr en cada PR vs. tests que correr solo en el deployment a producción
- Cómo gestionar la deuda técnica que se acumula cuando priorizas velocidad

**Monitorización y alertas:**
- Los 5 monitores que hay que tener antes de cualquier lanzamiento
- Cómo configurar alertas que despiertan al equipo solo cuando algo realmente importa
- El proceso de rollback: cómo ensayarlo para que cuando haga falta tarde menos de 2 minutos

---

**Parte 4 – Gestionar la calidad sin QA manual**

Cómo mantener la calidad cuando no hay tiempo para testing manual extensivo:
- Testing automatizado: qué tests escribir siempre, qué tests escribir cuando hay tiempo y qué tests nunca valen la pena
- La estrategia de "dogfooding" para detectar bugs antes que los usuarios
- Canary deployments y cómo leer las señales de que algo está mal antes de que el 100% de usuarios sea impactado

**Tabla: coste del bug según cuándo se detecta**

| Cuándo se detecta | Coste relativo | Tiempo de resolución |
|---|---|---|
| Durante desarrollo | 1x | Minutos |
| En code review | 5x | Horas |
| En QA / staging | 10x | Horas-días |
| En producción (< 1h) | 50x | Horas |
| En producción (> 24h) | 100x | Días + reputación |

---

**Parte 5 – La transformación: de lanzar cada mes a lanzar cada semana**

Plan de transformación para mi equipo en 90 días:
- Mes 1: fundaciones (CI/CD básico, feature flags, monitoring)
- Mes 2: proceso (planning semanal, tickets pequeños, cultura de reversibilidad)
- Mes 3: optimización (métricas de entrega, retrospectivas de velocidad, escala)

Métricas DORA para medir el progreso:
- Deployment Frequency: objetivo por etapa de madurez
- Lead Time for Changes: cómo medirlo y mejorarlo
- Change Failure Rate: el equilibrio entre velocidad y estabilidad
- Time to Recovery: más importante que el MTBF

Termina con los 3 cambios que mayor impacto tienen en los primeros 30 días para un equipo como el mío.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Transformar la cadencia de entrega del equipo de producto para lanzar features cada semana de forma segura y sostenible.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Offboarding: el proceso de salida que protege y preserva',
                'description'      => 'Diseña el proceso de offboarding que protege la propiedad intelectual, preserva el conocimiento crítico y mantiene la relación post-salida para convertir ex-empleados en embajadores.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en People Operations con experiencia en el diseño de procesos de offboarding en empresas de tecnología y startups en crecimiento. Ayúdame a crear o mejorar nuestro proceso de salida de empleados.

**Mi contexto:**
- Tipo de empresa: [startup / scale-up / empresa mediana / empresa grande]
- Sector: [tecnología / servicios / retail / etc.]
- Motivo de salida habitual: [mayoritariamente voluntaria / ERE / fin de proyecto / diverso]
- Proceso actual: [no existe / improvisado / hay checklist pero no se sigue / proceso parcial]
- Promedio de empleados que salen al mes: [número]
- Principal riesgo o dolor con las salidas actuales: [fuga de conocimiento / accesos no revocados / mala experiencia / demandas]

---

**Parte 1 – Por qué el offboarding es tan importante como el onboarding**

Explica el caso de negocio para invertir en un buen proceso de salida:
- El coste real de un mal offboarding (accesos no revocados, conocimiento perdido, daño reputacional en Glassdoor/LinkedIn)
- El valor del alumni network: datos sobre contrataciones de ex-empleados y clientes referidos
- Cómo el offboarding afecta al equipo que se queda (el "survivor syndrome" y cómo prevenirlo)
- El riesgo legal más frecuente en los procesos de salida y cómo mitigarlo desde RRHH

---

**Parte 2 – El proceso de offboarding en 4 fases**

Diseña el proceso completo adaptado a nuestra realidad:

**Fase 1 – Notificación y planificación (Día 1-2):**
- La reunión inicial de offboarding: quién participa, qué se trata, qué documentar
- Comunicación al equipo: cómo, cuándo y qué decir (y qué no decir)
- Acuerdo sobre el período de transición: qué se espera del empleado saliente
- Inicio del proceso de revocación de accesos: el inventario que hay que hacer

**Fase 2 – Transferencia de conocimiento (Días 3-14):**
- El mapa de conocimiento crítico: cómo identificar qué sabe este empleado que nadie más sabe
- Formatos de traspaso: documentación, sesiones grabadas, pair work con el sucesor
- Handover de relaciones: clientes, proveedores, stakeholders internos
- La guía de "cómo funciona mi trabajo" que el empleado saliente debe dejar

**Fase 3 – Cierre administrativo y técnico (Última semana):**
- Checklist de revocación de accesos: todos los sistemas, ordenados por criticidad

| Sistema | Criticidad | Responsable de revocar | Plazo |
|---|---|---|---|
| SSO / Google Workspace | Crítica | IT | Día de salida |
| CRM (Salesforce, HubSpot) | Alta | RevOps | Día de salida |
| Repositorios de código | Alta | CTO | Día de salida |
| Herramientas de marketing | Media | Marketing | 24h después |
| Slack / Teams | Media | IT | Día de salida |
| Suscripciones personales en nombre de empresa | Variable | RRHH | Semana previa |

- Devolución de material y liquidación económica: qué documentar y cuándo
- La entrevista de salida: las preguntas que obtienen feedback real y útil

**Fase 4 – Post-salida y alumni (Primeras 4 semanas):**
- El check-in a las 2 semanas: por qué hacerlo y qué preguntar
- Programa de alumni: cómo mantener la relación activa sin ser intrusivo
- LinkedIn y referencias: la política que protege a la empresa y al empleado

---

**Parte 3 – Gestión del conocimiento crítico**

El punto más frágil del offboarding es la pérdida de conocimiento implícito:
- Cómo identificar el conocimiento crítico vs. el conocimiento recuperable
- La entrevista de conocimiento: las preguntas que extraen lo que el empleado sabe pero nunca ha documentado
- Herramientas para documentar: cuándo usar Notion, cuándo grabar en Loom, cuándo hacer sesiones en vivo
- Cómo crear el hábito de documentación continua para que el offboarding futuro sea menos traumático

---

**Parte 4 – Casos especiales**

Cómo adaptar el proceso para:
- Salida conflictiva o despido disciplinario: qué cambia en el proceso y qué precauciones adicionales tomar
- Empleado con acceso a información muy sensible (datos de clientes, código propietario): protocolo reforzado
- Salida de un fundador o directivo: las particularidades del offboarding ejecutivo
- Salida de alguien del equipo de ingeniería: checklist específico de seguridad técnica

---

**Parte 5 – Implementación y métricas**

Dame el plan para implementar este proceso en mi empresa:
- Los tres primeros pasos para esta semana
- Cómo conseguir que los managers sigan el proceso sin que RRHH tenga que perseguirlos
- Métricas de éxito del offboarding:
  - Tiempo hasta revocación total de accesos (objetivo: mismo día)
  - % de transferencias de conocimiento completadas
  - NPS de ex-empleados (el indicador del alumni network)
  - Reducción de incidentes de seguridad relacionados con accesos de ex-empleados

Termina con una plantilla de comunicación para anunciar la salida al equipo que sea honesta, respetuosa y cierre el capítulo de forma positiva.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Crear un proceso de offboarding completo que proteja la propiedad intelectual, preserve el conocimiento y mantenga la relación con ex-empleados.',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Crypto y blockchain para empresas: qué implementar ya',
                'description'      => 'Guía práctica de blockchain empresarial: pagos en crypto, contratos inteligentes, tokenización de activos y los casos de uso reales que tienen ROI positivo para empresas fuera del sector cripto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de innovación financiera especializado en blockchain empresarial que separa los casos de uso reales con ROI demostrado del ruido especulativo. Ayúdame a entender qué tiene sentido implementar en mi empresa.

**Mi contexto:**
- Sector de la empresa: [fintech / retail / logística / servicios profesionales / manufactura / otro]
- Tamaño: [empleados o facturación aproximada]
- Geografía de operaciones: [nacional / Europa / global]
- Objetivo principal: [reducir costes de transacción / acceder a nuevos mercados / financiación alternativa / eficiencia operativa / todo lo anterior]
- Nivel de conocimiento del equipo sobre blockchain: [nulo / básico / medio / hay un equipo técnico]
- Restricciones: [sector regulado / sin apetito de riesgo en finanzas / presupuesto limitado para innovación]

---

**Parte 1 – Desmitificar blockchain para directivos**

Explica con claridad sin jerga técnica innecesaria:
- Qué es blockchain realmente y qué problema resuelve (la respuesta de 2 minutos para un consejo de administración)
- La diferencia entre blockchain pública (Bitcoin, Ethereum), privada (Hyperledger) y consorcio (R3 Corda): cuál aplica a empresas
- Por qué "blockchain sí, crypto no" puede ser una posición válida para muchas empresas
- Los 3 problemas reales que blockchain resuelve mejor que las alternativas tradicionales (y los 5 en los que no es la mejor solución)

**Tabla de honestidad: blockchain vs. base de datos tradicional**

| Criterio | Blockchain | Base de datos | Cuándo blockchain gana |
|---|---|---|---|
| Velocidad de transacción | Lenta (TPS limitadas) | Muy rápida | Nunca en velocidad pura |
| Coste de operación | Alto | Bajo | Cuando el coste de confianza es mayor |
| Inmutabilidad | Alta | Baja | Auditorías, trazabilidad |
| Necesidad de intermediario | Sin intermediario | Necesita gestión central | Múltiples partes sin confianza mutua |
| Regulación | Incierta en evolución | Clara y estable | Depende del país |

---

**Parte 2 – Pagos en crypto: el caso más maduro**

Los casos de uso de pagos en crypto que ya tienen sentido para empresas:
- Pagos internacionales: cómo los stablecoins (USDC, USDT, EURC) reducen el coste y el tiempo de transferencias B2B internacionales
- Paso a paso para aceptar pagos en stablecoins: los procesadores (Stripe Crypto, Coinbase Commerce, Bitpay), la configuración contable y la gestión del riesgo cambiario
- Nóminas en crypto para empleados internacionales: cuándo tiene sentido, cómo hacerlo legalmente y qué proveedores lo gestionan (Deel, Remote)
- Treasuries en crypto: cómo empresas como MicroStrategy o Tesla han añadido BTC como reserva — el análisis de riesgo/beneficio honesto

---

**Parte 3 – Contratos inteligentes (Smart Contracts)**

Casos de uso empresariales reales de smart contracts:
- Definición sin tecnicismos: qué es y qué no es un smart contract
- Los 4 casos de uso con mayor adopción empresarial:
  1. Pagos condicionados (escrow automático en transacciones B2B)
  2. Supply chain: trazabilidad y liberación automática de pagos al confirmar entrega
  3. Seguros paramétricos (pago automático cuando se cumple una condición verificable)
  4. Tokenización de equity en startups (SAFEs en blockchain)
- Limitaciones reales: el problema del "oráculo" (cómo entran datos del mundo real a la blockchain) y por qué es importante
- Redes recomendadas para empresas: Ethereum, Polygon, Solana — cuándo usar cada una

---

**Parte 4 – Tokenización de activos reales (RWA)**

La tendencia más relevante del blockchain empresarial en 2024-2025:
- Qué es la tokenización de activos reales: inmuebles, arte, deuda, materias primas
- Casos de uso para mi sector: cómo empresas de mi industria están usando tokenización
- El proceso de tokenización: de activo físico a token en blockchain (simplificado)
- Marco regulatorio en España y Europa: MiCA y cómo afecta a las empresas que quieren tokenizar activos
- Plataformas de tokenización que operan en Europa y su perfil de cliente

---

**Parte 5 – Plan de adopción para mi empresa**

Dado mi contexto, dame una evaluación honesta:
- El caso de uso de blockchain más relevante para mi empresa en los próximos 12 meses
- El caso que más promete pero que todavía no es el momento (y cuándo revisarlo)
- Los casos que definitivamente no aplican y por qué
- Los tres primeros pasos para explorar blockchain sin comprometer presupuesto significativo:
  1. Educación: qué formación necesita el equipo y cuánto cuesta
  2. Piloto: el piloto más pequeño posible que valide el caso de uso
  3. Proveedores: con quién hablar primero (consultoras, proveedores de infraestructura, startups del sector)

Termina con las 5 preguntas que hay que hacer a cualquier proveedor que venga a vender una "solución blockchain" para distinguir los proyectos serios de los que solo están usando la palabra blockchain como marketing.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Evaluar y priorizar casos de uso de blockchain y crypto para una empresa no nativa del sector con ROI real.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contrato de colaboración mercantil: cuándo es válido',
                'description'      => 'Análisis legal completo del contrato de colaboración mercantil como alternativa al contrato laboral: requisitos de validez, cláusulas esenciales y cómo evitar la zona gris que genera reclamaciones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado laboralista español especializado en relaciones mercantiles y en la defensa de empresas ante la Inspección de Trabajo. Ayúdame a entender cuándo es válido un contrato de colaboración mercantil y cómo redactarlo correctamente.

**Mi situación:**
- Tipo de empresa: [startup / empresa mediana / agencia / consultora]
- Número de colaboradores mercantiles actuales: [número]
- Actividad de los colaboradores: [describe qué hacen: desarrollo de software / diseño / ventas / consultoría / etc.]
- Forma de trabajo: [remoto / presencial / mixto]
- Medios de trabajo: [usa equipos propios / equipos de la empresa / mixto]
- Exclusividad: [trabaja solo para nosotros / tiene otros clientes]
- Facturación: [factura con IVA como autónomo / empresa]

---

**Parte 1 – El test de la laboralidad: los criterios reales**

Explica con precisión jurídica los criterios que usa la Inspección de Trabajo y los tribunales para determinar si una relación es laboral o mercantil:

**Los indicios de laboralidad (que hacen peligrosa la relación mercantil):**
- Ajenidad en los frutos: el colaborador entrega su trabajo y la empresa se queda con el resultado
- Ajenidad en los medios de producción: la empresa proporciona las herramientas
- Dependencia organizativa: el colaborador cumple horarios, órdenes directas, reporta a un superior
- Exclusividad: trabajo exclusivamente para esta empresa
- Integración en la organización: tiene dirección de email de la empresa, aparece en el org chart, asiste a reuniones de equipo
- Remuneración fija y periódica: cobra igual todos los meses independientemente del trabajo realizado

**Los indicios de mercantilidad (que protegen la relación):**
- El colaborador organiza su propio trabajo y tiempo
- Usa sus propios medios de producción
- Tiene varios clientes simultáneos
- Asume riesgo económico (cobra por resultado, puede tener pérdidas)
- Tiene su propia estructura empresarial (aunque sea unipersonal)
- No está integrado en la organización de la empresa

**Tabla resumen:**

| Indicio | Laboral | Mercantil |
|---|---|---|
| Horario | Fijo establecido por empresa | Libre |
| Medios de trabajo | Proporcionados por empresa | Propios |
| Exclusividad | Sí | No (o parcial documentada) |
| Integración organizativa | Alta | Baja |
| Remuneración | Fija mensual | Variable / por resultado |
| Riesgo económico | Ninguno | Propio |

---

**Parte 2 – Las cláusulas que debe tener el contrato**

Redacta o revisa el contrato de colaboración mercantil con estas cláusulas esenciales:

1. **Objeto del contrato**: cómo describir los servicios de forma que quede clara la naturaleza mercantil y la autonomía del colaborador

2. **Autonomía e independencia**: la cláusula que explicita que el colaborador organiza su propio trabajo, horarios y metodología

3. **Medios de producción**: declaración de que el colaborador usa sus propios medios y asume sus propios gastos profesionales

4. **Pluriactividad**: cláusula que permite (o en caso de exclusividad, cómo documentarla mercantilmente) trabajar con otros clientes

5. **Retribución por resultado / precio por servicio**: cómo estructurar la remuneración para que no parezca un salario (facturación por hitos, por proyecto, con variabilidad)

6. **Ausencia de integración organizativa**: qué no debe aparecer en el contrato (ni en la práctica)

7. **Confidencialidad y propiedad intelectual**: las cláusulas específicas para servicios de software, diseño o contenido

8. **Resolución**: plazos y causas de resolución acordes con la naturaleza mercantil

---

**Parte 3 – Situaciones de riesgo más frecuentes**

Los errores que convierten un contrato mercantil válido en una relación laboral encubierta:
- Dar email corporativo al colaborador
- Incluirle en las reuniones de equipo como si fuera un empleado
- Fijarle un horario de disponibilidad o exigir conectividad en franjas concretas
- Pagarle una cantidad fija mensual sin relación con el trabajo entregado
- Que trabaje en exclusiva durante más de 6-12 meses
- Que la empresa le proporcione el ordenador, móvil o software que necesita para trabajar

Para cada error, explica el riesgo concreto (reclamación del colaborador, acta de Inspección, sanciones) y cómo reconducir la situación.

---

**Parte 4 – Consecuencias de una relación encubierta**

Qué pasa si la Inspección de Trabajo detecta un falso autónomo:
- Regularización retroactiva de cotizaciones a la Seguridad Social (hasta 4 años hacia atrás)
- Recargo de prestaciones por accidente o enfermedad durante el período
- Sanciones económicas: cuantías y criterios de graduación
- Reclamación laboral del colaborador: salarios de tramitación, indemnización por despido, vacaciones no disfrutadas
- El impacto en la imagen y en futuras contrataciones

---

**Parte 5 – Evaluación de mi situación actual**

Dado el contexto que te he dado al inicio:
- Identifica los indicios de laboralidad que existen en mi situación actual
- Clasifica el riesgo: bajo / medio / alto / muy alto
- Dame las 3-5 acciones concretas que debo tomar para reducir el riesgo
- Dime si hay colaboradores para los que la relación mercantil no es sostenible y es mejor regularizar como contrato laboral

Termina con un recordatorio claro: este análisis no sustituye al asesoramiento jurídico personalizado y recomienda consultar a un abogado laboralista para revisar los contratos concretos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Analizar la validez de contratos de colaboración mercantil y redactar cláusulas que eviten el riesgo de recalificación como contrato laboral.',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte multilingüe sin equipo nativo en cada idioma',
                'description'      => 'Sistema para gestionar el soporte al cliente en múltiples idiomas sin contratar equipos nativos en cada mercado: herramientas, flujos de calidad y estándares que mantienen la satisfacción del cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Head of Customer Support con experiencia en la expansión internacional de startups SaaS europeas. Ayúdame a diseñar el sistema de soporte multilingüe que nos permita atender bien a los clientes en nuevos mercados sin duplicar el equipo de soporte.

**Mi contexto:**
- Idiomas que necesitamos soportar actualmente: [lista de idiomas]
- Idiomas del equipo de soporte actual: [idiomas que domina el equipo]
- Volumen aproximado de tickets por idioma: [tickets/mes por idioma si lo sabes]
- Herramienta de helpdesk actual: [Zendesk / Intercom / Freshdesk / HubSpot / otra]
- Tipo de soporte: [solo texto / video calls / teléfono]
- CSAT / NPS actual: [si lo sabes]
- Principal miedo al expandir el soporte: [calidad de la traducción / tiempo de respuesta / pérdida de contexto cultural]

---

**Parte 1 – La estrategia: qué automatizar y qué humanizar**

El error más frecuente es automatizar todo o humanizar todo. La estrategia correcta:

**Clasificación de tickets por complejidad:**

| Tier | Tipo de consulta | Volumen típico | Estrategia |
|---|---|---|---|
| Tier 0 | FAQ, consultas básicas | 40-60% | Self-service en idioma nativo |
| Tier 1 | Problemas conocidos, configuración | 25-35% | Automatización con revisión |
| Tier 2 | Problemas complejos, reclamaciones | 10-20% | Humano con herramientas de traducción |
| Tier 3 | Escalados, churn risk, VIPs | 5-10% | Nativo o videollamada con intérprete |

Para cada tier, explica qué herramientas usar y cómo configurar el routing automático para que el ticket llegue al flujo correcto.

---

**Parte 2 – Self-service multilingüe: la base que más escala**

El 40-60% de los tickets se pueden resolver sin agente si el self-service está bien construido:
- Cómo priorizar qué artículos del centro de ayuda traducir primero (por volumen de tickets que generan esa duda)
- Herramientas de traducción de bases de conocimiento: Zendesk Content Cues, Intercom Articles en múltiples idiomas, DeepL API para traducciones automáticas con revisión
- La estrategia de "traducir-revisar-publicar": el flujo que garantiza calidad sin coste de traducción profesional para cada artículo
- Chatbots multilingüe: cuándo tiene sentido implementarlos y cuándo no (los criterios honestos)
- Cómo medir el self-service containment rate por idioma y qué hacer cuando uno está por debajo del objetivo

---

**Parte 3 – Traducción asistida para agentes humanos**

Para los tickets que llegan al equipo de soporte en idiomas que el agente no domina:
- Integración de DeepL o Google Translate en el helpdesk: cómo configurarlo para que el agente vea el ticket traducido y pueda responder en su idioma con traducción automática al idioma del cliente
- El flujo de trabajo recomendado:
  1. Ticket entra en idioma extranjero
  2. Se detecta el idioma automáticamente
  3. Se traduce para el agente
  4. El agente responde en [idioma del equipo]
  5. La respuesta se traduce al idioma del cliente antes de enviar
  6. Sistema de revisión de calidad aleatorio

- Cómo gestionar las respuestas para que no parezcan traducciones automáticas:
  - Variables que no se traducen (nombres de producto, tecnicismos)
  - Tonalidad y formalidad por idioma: los matices culturales más importantes
  - El bloqueo de expresiones idiomáticas que las máquinas no traducen bien

---

**Parte 4 – Control de calidad y métricas**

Cómo asegurar que la calidad no cae al escalar idiomas:
- QA de traducciones: muestra aleatoria, criterios de evaluación y quién revisa
- KPIs por idioma:
  - CSAT por idioma (el indicador clave de si la calidad de soporte es aceptable)
  - FRT (First Response Time) por idioma
  - FCR (First Contact Resolution) por idioma
  - Re-open rate por idioma (señal de que la respuesta no fue útil)
- Cómo detectar cuando un idioma tiene un problema sistémico de calidad vs. un agente concreto con dificultades

---

**Parte 5 – Cuándo contratar un nativo y cómo hacerlo**

Los criterios para decidir que hay que contratar soporte nativo en un idioma:
- Volumen de tickets: el umbral a partir del cual tiene sentido (considera coste de agente vs. coste de herramientas de traducción)
- Mercado estratégico: si el idioma corresponde a un mercado clave aunque el volumen sea bajo
- Tipo de soporte: si el producto o el mercado requieren llamadas telefónicas, la traducción automática no funciona

Cuando sea el momento de contratar:
- Dónde encontrar soporte nativo sin oficina local (contratistas en el país vía Deel, Remote, Workmotion)
- Cómo hacer el onboarding de un agente remoto en un idioma que nadie del equipo habla
- El primer mes: cómo supervisar la calidad cuando no puedes leer las conversaciones

Termina con las 5 preguntas que hay que hacer a cualquier proveedor de traducción / chatbot multilingüe para distinguir los que realmente funcionan para soporte técnico de los que funcionan para texto genérico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar el sistema de soporte multilingüe que escala a nuevos mercados sin duplicar el equipo de soporte.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Construir equipo como freelance: cuándo y cómo subcontratar',
                'description'      => 'La guía para escalar el negocio freelance subcontratando sin perder el control de la calidad, el margen y la relación con el cliente: cuándo hacerlo, a quién y cómo gestionarlo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance senior que ha pasado de trabajar solo a liderar un equipo de 3-8 colaboradores manteniendo la rentabilidad y la calidad. Ayúdame a dar el salto de freelance individual a freelance con equipo.

**Mi perfil actual:**
- Especialidad: [desarrollo web / diseño / copywriting / marketing digital / consultoría / etc.]
- Facturación mensual actual: [€/mes]
- Horas de trabajo actuales: [horas/semana]
- Límite de capacidad: [cuántas horas o proyectos puedes asumir solo]
- Razón para escalar: [hay más demanda de la que puedo cubrir / quiero proyectos más grandes / quiero trabajar menos horas / quiero más ingresos]
- Experiencia gestionando personas: [ninguna / he coordinado a alguien puntualmente / tengo experiencia de empresa]

---

**Parte 1 – ¿Es el momento de subcontratar? El test de madurez**

Antes de subcontratar, valida que estás en el momento adecuado:
- Las 5 señales de que es el momento de subcontratar (y no antes):
  1. Tienes proyectos rechazados por falta de capacidad de forma consistente (no puntual)
  2. Tu tarifa es claramente superior a la del perfil que subcontratas
  3. Tienes flujo de trabajo lo suficientemente estable para mantener al colaborador ocupado
  4. Tienes procesos documentados mínimamente replicables
  5. Tienes tiempo para gestionar a alguien (la gestión cuesta tiempo, no lo ahorra)

- Las 3 señales de que todavía no es el momento:
  1. Estás subcontratando para resolver un pico puntual sin previsión de continuidad
  2. No tienes margen suficiente después de pagar al colaborador
  3. No tienes tiempo para revisar el trabajo de otro antes de entregarlo al cliente

**Análisis de viabilidad financiera:**
Dame la fórmula para calcular si la subcontratación tiene sentido en mi caso:
- Mi tarifa actual al cliente: [€/hora o €/proyecto]
- Tarifa que pagaría al colaborador: [€/hora o €/proyecto]
- Tiempo de gestión que requiere: [horas/semana]
- Margen bruto resultante: ¿es sostenible?

---

**Parte 2 – A quién subcontratar y cómo encontrarle**

Perfiles de colaboradores para freelances según la especialidad:
- El colaborador "junior desarrollado": alguien con menos experiencia que tú en quien puedes delegar tareas específicas con supervisión
- El colaborador "especialista complementario": alguien con habilidades que tú no tienes (si eres diseñador, un copywriter; si eres dev, un diseñador)
- El colaborador "clone": alguien con tu mismo perfil pero diferente nivel o disponibilidad

**Dónde encontrar colaboradores fiables:**
- Red propia: cómo activar tu red de contactos profesionales para encontrar colaboradores de confianza
- Comunidades profesionales: las más relevantes para mi especialidad
- Plataformas: cuándo tiene sentido usar Workana, Malt, Upwork para colaboradores y cuándo no

**El proceso de selección:**
- El proyecto de prueba: cómo diseñarlo para evaluar calidad, comunicación y plazos
- Las preguntas que revelan si alguien va a ser un buen colaborador (más allá del portfolio)
- Red flags en la primera conversación que predicen problemas futuros

---

**Parte 3 – Estructura legal y financiera de la colaboración**

Cómo estructurar la relación de forma profesional:
- Contrato de colaboración mercantil entre freelances: qué cláusulas son esenciales
  - Descripción del servicio y entregables específicos
  - Plazos y penalizaciones
  - Propiedad intelectual: quién es dueño del trabajo entregado
  - Confidencialidad respecto al cliente final
  - Exclusividad del proyecto (el cliente no puede contratarle directamente)
  - Forma y condiciones de pago

- Modelo de facturación recomendado: cuándo pago al colaborador antes de cobrar al cliente y cuándo después
- Modelo de precios para el cliente final: precio fijo vs. tarifa ajustada vs. markup transparente

---

**Parte 4 – Gestión de proyectos y calidad**

El sistema mínimo para gestionar un equipo pequeño de freelances:
- Herramientas: qué necesitas realmente para coordinar 1-5 colaboradores (sin complejidad innecesaria)
- El briefing perfecto: cómo documentar el trabajo para que el colaborador lo pueda hacer sin preguntarte cada 5 minutos
- Checkpoints de revisión: cuándo revisar el trabajo en proceso para corregir a tiempo en lugar de al final
- Gestión de expectativas del cliente: cómo posicionarte como "estudio" o "agencia pequeña" sin que el cliente piense que está pagando a alguien sin experiencia

---

**Parte 5 – Proteger el margen y la relación con el cliente**

Los riesgos de subcontratar que hay que gestionar desde el principio:
- El riesgo de bypass: cómo prevenir que el cliente contrate directamente al colaborador
- El riesgo de calidad: qué hacer cuando el colaborador entrega algo que no puedes entregar al cliente
- El riesgo de dependencia: qué pasa si tu colaborador estrella desaparece de un día para otro
- El riesgo de margen: cómo mantener el margen cuando el cliente pide descuentos y tú tienes costes fijos de colaboradores

Termina con el plan de los primeros 90 días para pasar de freelance individual a freelance con primer colaborador:
- Semana 1-2: preparación (documentar procesos, calcular margen, buscar perfil)
- Semana 3-4: selección y prueba
- Mes 2: primer proyecto real juntos
- Mes 3: evaluación y decisión sobre si continuar y cómo
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Planificar y ejecutar la transición de freelance individual a freelance con equipo subcontratado de forma rentable y sostenible.',
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
