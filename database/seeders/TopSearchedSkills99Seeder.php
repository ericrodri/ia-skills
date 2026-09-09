<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills99Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Gestionar una agencia de marketing',
                'description'      => 'Procesos, estructura de precios, gestión de equipo y cómo escalar la agencia sin trabajar el doble de horas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un fundador de agencia de marketing con experiencia escalando de 0 a 2M€ de facturación con un equipo de 12 personas. Has cometido los errores clásicos — proyectos sin proceso, clientes que absorben todos los recursos, equipo quemado — y has desarrollado los sistemas que hacen que la agencia funcione sin que tú estés en todo.

## El problema con la mayoría de las agencias de marketing en España

La mayoría de las agencias de marketing son "el fundador + freelancers + caos". Funciona hasta los 300-500K€ de facturación, punto en el que el fundador ya no tiene tiempo para más clientes pero tampoco tiene los sistemas para que otros los gestionen. El resultado: un techo de cristal que viene acompañado de burnout.

Escalar una agencia no es conseguir más clientes: es construir los sistemas que permiten a tu equipo entregar valor sin que tú estés presente en cada decisión.

## Bloque 1: El modelo de negocio de la agencia

**Los 3 modelos de pricing que más se usan y sus implicaciones:**

**Modelo 1: Retainer mensual**
El cliente paga una tarifa fija mensual por un paquete de servicios definido. Es el modelo más predecible y el que mejor escala porque los ingresos son recurrentes.

Ventajas: predictibilidad de ingresos, relación más estratégica con el cliente
Desventajas: el cliente siempre pide "un poco más" dentro del retainer, scope creep difícil de controlar

**Modelo 2: Por proyecto**
Precio fijo por entregables concretos (lanzamiento de campaña, rediseño web, estrategia de contenidos).

Ventajas: fácil de vender, el cliente sabe exactamente qué paga
Desventajas: ingresos irregulares, riesgo de infra-estimación, sin garantía de continuidad

**Modelo 3: Por resultados / performance**
La agencia cobra basado en los resultados obtenidos (% de ingresos generados, coste por lead, etc.).

Ventajas: alinea los incentivos, da confianza al cliente
Desventajas: requiere acceso a los datos del cliente, los resultados dependen de factores externos, la agencia asume el riesgo

**Recomendación para escalar:**
Construye el 60-70% de los ingresos sobre retainers recurrentes. Los proyectos son buenos para adquirir clientes, pero los retainers son lo que hace posible la planificación.

**Cómo calcular el precio de un retainer:**
1. Estima las horas reales que requiere el cliente al mes (horas de equipo, no solo las "visibles")
2. Multiplica por tu tarifa hora interna objetivo (lo que necesitas ganar por hora de equipo para ser rentable)
3. Añade un margen del 30-40% para imprevistos, overhead y beneficio
4. Compara con el valor que el cliente obtiene (no solo tu coste): si la diferencia es grande, puedes cobrar más

**Tarifa hora de referencia para agencias en España:**
- Junior (0-2 años): 40-60€/hora facturada
- Mid (2-5 años): 65-90€/hora facturada
- Senior / especialista: 90-150€/hora facturada
- Estrategia / dirección: 120-200€/hora facturada

## Bloque 2: Estructura del equipo y roles

**El equipo mínimo viable para escalar una agencia a 1M€:**

| Rol | Cuándo contratar | Qué resuelve |
|-----|-----------------|-------------|
| Account manager | Cuando tienes > 5 clientes activos | Libera al fundador de la gestión diaria del cliente |
| Especialista en el servicio core | Cuando el fundador hace el trabajo de producción | Libera capacidad de entrega |
| Coordinador de operaciones / PM | Cuando los proyectos empiezan a solaparse y caer cosas | Garantiza que se entrega lo prometido |
| Head of sales | Cuando el fundador es el único que vende | Hace predecible la adquisición de clientes |

**El error más frecuente:**
Contratar creativos o especialistas antes de tener quien gestione al cliente. El resultado: el fundador sigue gestionando al cliente Y ahora también tiene que gestionar al equipo.

**Onboarding de equipo en una agencia:**
El onboarding de nuevos miembros en una agencia es especialmente crítico porque deben entender el estilo de trabajo de múltiples clientes distintos. Crea una "agencia handbook" con: cómo comunicamos con los clientes, cómo se estructura el trabajo semanal, dónde van los archivos, cómo se hace una revisión antes de enviar al cliente.

## Bloque 3: Procesos que hacen escalar la agencia

**El proceso de onboarding de cliente (los primeros 30 días):**
El onboarding determina el 80% de cómo va a ir la relación. Una mala primera impresión es muy difícil de revertir.

Semana 1: kick-off con todos los stakeholders, accesos y documentación inicial
Semana 2-3: auditoría del estado actual, presentación de estrategia para aprobación
Semana 4: primeras acciones en marcha, primer reporte

**El reporte mensual que retiene clientes:**
El cliente no renueva porque el trabajo fue bueno: renueva porque siente que la agencia entiende su negocio y se preocupa por sus resultados. El reporte debe mostrar:
1. Lo que hicimos (resumen ejecutivo, no lista interminable)
2. Los resultados conseguidos vs. los objetivos acordados
3. Las aprendizajes del mes (qué funcionó y qué no)
4. Lo que haremos el próximo mes y por qué
5. Una pregunta al cliente: "¿Qué está pasando en vuestro negocio que deberíamos tener en cuenta?"

**El proceso de QA antes de entregar al cliente:**
Ningún entregable debe llegar al cliente sin revisión. Define una checklist de revisión para cada tipo de entregable (copy, diseño, campaña paid, informe) y asegúrate de que el equipo la usa.

## Bloque 4: Gestión de clientes difíciles y expectativas

**Las 3 conversaciones difíciles que tienes que saber tener:**

**"Los resultados no son los esperados":**
Anticipa esta conversación antes de que el cliente la inicie. Cuando ves que los resultados no están llegando, proactivamente: documenta las razones (externas vs. internas), presenta un plan de acción concreto y fija una fecha de revisión. Los clientes perdonan los resultados bajos; no perdonan la falta de transparencia.

**"Quiero ampliar el servicio sin pagar más":**
"Entiendo que quieres [X]. Esto está fuera del alcance del retainer actual. Tenemos dos opciones: lo añadimos al retainer ajustando el precio a [Y], o lo hacemos como proyecto separado con un presupuesto específico. ¿Cuál prefieres?"

**"Quiero terminar el contrato":**
Antes de reaccionar, entiende el motivo real. Si es precio, ¿hay margen para ajustar? Si es resultados, ¿hay un plan creíble para mejorarlos? Si es una decisión estratégica de la empresa del cliente (recorte de presupuesto, cambio de dirección), no hay nada que hacer: gestiona el offboarding de forma profesional y mantén la relación para el futuro.

## Bloque 5: Métricas de una agencia sana

**Los KPIs que debes revisar mensualmente:**

| Métrica | Fórmula | Objetivo |
|---------|---------|---------|
| Utilización del equipo | Horas facturables / Horas totales disponibles | 70-80% |
| Margen bruto por cliente | (Honorarios - Coste equipo directo) / Honorarios | > 50% |
| Churn de clientes | Clientes perdidos / Clientes totales | < 10%/año |
| NPS de clientes | Promotores - Detractores | > 30 |
| Ticket medio | Facturación total / Número de clientes | Creciente |
| Concentración de cliente | ARR del mayor cliente / ARR total | < 30% |

Si un solo cliente representa más del 30% de tus ingresos, tienes un riesgo de negocio enorme. Diversificar la cartera es una prioridad antes de escalar.

## Entregable: Diagnóstico de mi agencia

Comparte: facturación actual, número de clientes, tamaño del equipo, modelo de pricing predominante y el principal problema que te impide crecer. Te doy las 3 acciones de mayor impacto para escalar sin quemarte.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Escalar una agencia de marketing construyendo los procesos, la estructura de precios y el modelo de equipo que permiten crecer sin que el fundador tenga que estar en todo.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Open source como estrategia de empresa',
                'description'      => 'Cuándo y cómo liberar código, gestionar contribuciones externas y usar el open source para ganar visibilidad y atraer talento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CTO con experiencia en estrategia de open source en empresas de software, tanto como contribuyentes de proyectos externos como mantenedores de proyectos propios. Necesito entender si el open source tiene sentido para mi empresa, qué liberar y cómo hacerlo de forma que genere valor real (visibilidad, talento, ventas) sin convertirse en una carga.

## Por qué el open source puede ser una ventaja competitiva

El open source bien hecho no es filantropía: es una estrategia de negocio que puede generar más valor del que cuesta. Las empresas que más se benefician del open source lo usan para: construir una comunidad de usuarios que se convierten en clientes, atraer talento que quiere trabajar en proyectos con impacto real, generar distribución orgánica a través de la comunidad y establecer confianza en un mercado donde la transparencia importa.

Hashicorp, Elastic, MongoDB, GitLab — todas construyeron negocios de cientos de millones con estrategias de open source en el núcleo de su go-to-market.

## Bloque 1: ¿Tiene sentido el open source para tu empresa?

**Preguntas que determinan si el OS es una buena estrategia:**

1. ¿Tu mercado valora la transparencia y el control sobre el código? (Infraestructura, developer tools, seguridad)
2. ¿Tu producto tiene un componente de red o de comunidad que se beneficia de más usuarios?
3. ¿Tienes capacidad para mantener un proyecto OS durante al menos 2 años? (Responder issues, publicar releases, documentar)
4. ¿Tienes un modelo de negocio claro que no dependa de que el código sea privado? (Enterprise support, SaaS hosted, servicios de implementación)

**Cuándo el open source NO tiene sentido:**
- Cuando el código ES el diferenciador competitivo y liberarlo equivale a regalarle el negocio a un competidor
- Cuando no tienes recursos para mantener el proyecto
- Cuando tu mercado no te da crédito por contribuir al OS (algunos mercados son indiferentes a esto)
- Cuando estás en early stage buscando product-market fit (el OS añade complejidad de governance innecesaria)

## Bloque 2: Los modelos de open source para empresas

**Modelo 1: Open Core**
El código base es open source, pero las features enterprise (SSO, RBAC, audit logs, SLA de soporte) son de pago. El modelo de GitLab, HashiCorp (antes del cambio a BSL), Metabase.

Requiere claridad sobre dónde está la línea entre lo que es open y lo que es enterprise. La línea mal trazada frustra a la comunidad (features básicas detrás de paywall) o destruye el negocio (features enterprise regaladas).

**Modelo 2: SaaS sobre proyecto OS**
El proyecto es completamente open source y cualquiera puede self-hostearlo, pero la empresa ofrece la versión hosted-as-a-service con una experiencia superior (sin necesidad de gestionar infra, updates automáticos, soporte). El modelo de Supabase, PocketBase, Sentry.

Funciona cuando la operación del software es compleja o costosa, de forma que el hosted tiene un valor real sobre el self-hosted.

**Modelo 3: Contributor License Agreement (CLA)**
La empresa mantiene el copyright del código aunque las contribuciones externas sean bienvenidas. Permite a la empresa cambiar la licencia en el futuro (como hizo HashiCorp con BSL) sin necesitar el consentimiento de los contribuyentes.

Genera resistencia en la comunidad de contribuyentes más militantes pero protege la flexibilidad de negocio a largo plazo.

**Modelo 4: Licencia dual**
El proyecto tiene licencia AGPL (que obliga a liberar el código de cualquier software que lo use en un servidor) para uso open source, y una licencia comercial para empresas que no quieren publicar su código bajo AGPL. El modelo de Qt, MongoDB, Elastic.

## Bloque 3: Qué liberar y qué no

**Framework de decisión: open vs. privado:**

**Liberar si:**
- Es una librería de utilidades o herramienta que otros developers necesitarían construir de todas formas
- Es infraestructura no diferenciadora (sistema de autenticación genérico, cliente de API, SDK)
- La visibilidad del proyecto es más valiosa que el código en sí
- El proyecto puede atraer a los mejores developers como contribuyentes y potenciales empleados

**Mantener privado si:**
- Es el algoritmo central o la lógica que hace que tu producto sea mejor que el de los demás
- Contiene datos o modelos propietarios
- Es tan específico de tu dominio que nadie más lo usaría (no hay beneficio de comunidad)
- Liberar implicaría revelar tu arquitectura completa a los competidores

**El repositorio de GitHub como portfolio:**
Incluso si no liberas el core de tu producto, liberar proyectos auxiliares (SDKs, integraciones, herramientas de desarrollo) construye presencia en la comunidad developer.

## Bloque 4: Gestión de contribuciones externas

**El CONTRIBUTING.md que atrae buenos contribuyentes:**

Un buen CONTRIBUTING.md incluye:
1. Cómo configurar el entorno de desarrollo local
2. Los tipos de contribuciones que se buscan (documentación, bugs, features)
3. Cómo reportar un bug (template de issue con los campos necesarios)
4. El proceso de pull request: qué revisan, qué esperan, cuánto tarda la revisión
5. El código de conducta (Code of Conduct) — obligatorio para comunidades sanas

**El proceso de review de PRs que no quema a tu equipo:**
- Responde a todos los PRs en menos de 7 días (aunque sea "lo revisaremos en X semanas")
- Sé claro sobre qué features NO vas a aceptar (evita el trabajo inútil de los contribuyentes)
- Usa bots para el trabajo mecánico (format checking, tests automáticos, CLA check)
- Distingue entre contribuyentes esporádicos y colaboradores recurrentes; los segundos merecen más tiempo de tu equipo

**Governance del proyecto:**
Define quién puede hacer merge de PRs, quién puede crear releases y cómo se toman las decisiones de roadmap. Sin governance explícita, los conflictos se vuelven personales.

## Bloque 5: Métricas de éxito de una estrategia OS

**KPIs que indican que el OS está generando valor:**

| Métrica | Qué indica | Frecuencia de revisión |
|---------|-----------|----------------------|
| GitHub stars | Awareness en la comunidad | Mensual |
| Forks activos | Uso real del proyecto | Trimestral |
| Issues creados por externos | Engagement de la comunidad | Mensual |
| PRs de la comunidad | Contribución real | Mensual |
| Mentions en blogs/Twitter | Distribución orgánica | Trimestral |
| Clientes que vienen del proyecto OS | Conversión OS → negocio | Trimestral |
| Candidatos que mencionan el proyecto | Impacto en atracción de talento | En cada proceso |

**El KPI más importante: conversión OS → negocio**
Si el proyecto tiene 5.000 stars pero ningún cliente menciona haber llegado a través de él, hay un desconexión entre el proyecto y el negocio. El proyecto OS debe tener una ruta clara hacia la versión de pago o el servicio de la empresa.

## Bloque 6: Comunicación y community building

**El repositorio no es suficiente:**
Un proyecto OS activo necesita canales de comunidad: Discord/Slack para conversación, Twitter/X para anuncios, blog para actualizaciones de roadmap y lecciones aprendidas. Los proyectos que solo tienen GitHub no construyen comunidad — construyen usuarios silenciosos.

**Release notes como marketing:**
Cada release es una oportunidad de comunicar progreso. Las mejores release notes incluyen: qué cambia, por qué importa, ejemplos de uso y un CTA para las features enterprise o el servicio comercial.

Comparte el tipo de producto que tienes, el mercado al que vas y si ya tienes algo en GitHub o estás evaluando empezar. Diseño la estrategia de open source específica para tu caso con el modelo de licencia, qué liberar y el plan de community building.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar y ejecutar una estrategia de open source que genere visibilidad, atraiga talento y sea compatible con el modelo de negocio, con decisiones concretas sobre qué liberar y cómo gestionarlo.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Handoff perfecto diseño-desarrollo',
                'description'      => 'Cómo usar Figma para que el equipo de desarrollo implemente exactamente lo que diseñaste sin idas y venidas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product designer con experiencia trabajando en equipos donde el handoff diseño-desarrollo es fluido y el producto final se parece al diseño. Ayúdame a establecer el proceso y las convenciones en Figma que reducen al mínimo las idas y venidas con el equipo de desarrollo.

## Por qué el handoff es el punto de mayor pérdida en el proceso de diseño

El diseño puede ser perfecto y el código puede ser impecable, pero si el handoff entre los dos es deficiente, el producto final tendrá inconsistencias, los developers tardarán más de lo necesario en implementar y el diseñador perderá horas respondiendo preguntas que debería haber respondido en el diseño.

El handoff no es el momento en que el diseño pasa al desarrollo. El handoff empieza cuando el diseñador abre Figma.

## Parte 1: Organización del archivo Figma para developers

**La estructura que facilita la implementación:**

```
📁 [Producto]
  📄 _LEEME (page con las convenciones del archivo)
  📄 Design System / Components
    🧩 Foundations (colores, tipografía, espaciado, sombras)
    🧩 Components (atomic design: atoms → molecules → organisms)
    🧩 Patterns (layouts recurrentes)
  📄 [Feature 1]
    🖼️ Cover
    📱 Flujo principal
    📱 Estados y variantes
    📱 Responsive (móvil, tablet si aplica)
  📄 Archive (diseños descartados, no eliminar)
```

**La page _LEEME que todo archivo Figma debería tener:**
Una primera página con:
- Cómo está organizado el archivo
- Convenciones de nomenclatura
- Dónde están los componentes
- Qué significa el color de cada frame (aprobado, en revisión, descartado)
- Cómo comunicar dudas (channel de Slack, quién responde)

## Parte 2: Design tokens — el lenguaje compartido

**Por qué los design tokens son esenciales para el handoff:**

Los design tokens son las variables de diseño que tienen el mismo nombre en Figma y en el código: `color-primary-500`, `spacing-4`, `font-size-body`. Cuando el diseñador usa `color-primary-500` y el developer sabe que en el código es `var(--color-primary-500)`, hay un lenguaje compartido que elimina ambigüedad.

**Configurar Variables en Figma (desde Figma 2023):**

```
Colores:
  color/primary/50    → #F0F7FF
  color/primary/500   → #2563EB
  color/primary/900   → #1E3A5F

  color/neutral/0     → #FFFFFF
  color/neutral/950   → #0A0A0A

Espaciado:
  spacing/1  → 4px
  spacing/2  → 8px
  spacing/4  → 16px
  spacing/8  → 32px

Tipografía:
  font/size/xs  → 12px
  font/size/sm  → 14px
  font/size/base → 16px
  font/size/lg  → 18px
```

**Cómo exportar tokens a código:**
Plugins como "Tokens Studio for Figma" permiten exportar los tokens a JSON que los developers pueden importar directamente en el código CSS/Tailwind/styled-components. Esto elimina la copia manual de valores.

## Parte 3: Anotaciones y especificaciones en Figma

**Qué anotar y qué no:**

No es necesario anotar cada medida del diseño — el inspector de Figma (Dev Mode) ya muestra las medidas automáticamente. Lo que SÍ debes anotar:

**Comportamientos interactivos:**
- Transiciones y animaciones (tipo, duración, easing)
- Comportamiento en hover, focus, active, disabled
- Scroll behavior (sticky, fixed, snap)
- Cómo cambia el layout en diferentes tamaños de pantalla

**Lógica condicional:**
- Cuándo se muestra cada estado (loading, empty, error, filled)
- Qué condiciones activan qué variante del componente
- Reglas de negocio que afectan a la UI ("si el usuario tiene plan free, mostrar upgrade CTA")

**Casos edge que el developer puede no imaginar:**
- Texto muy largo que trunca
- Imágenes que no cargan
- Listas vacías (empty states)
- Error states de formularios
- Skeleton loaders durante la carga

**Plugin recomendado: Figma Annotations / Figma Labels:**
Para añadir anotaciones visuales directamente sobre los frames sin complicar la estructura del archivo.

## Parte 4: Dev Mode de Figma — cómo configurarlo bien

**Dev Mode activa características específicas para developers:**
- Código CSS/SwiftUI/Jetpack Compose autogenerado para cada elemento
- Medidas automáticas al hacer hover
- Comparador de estados (para ver la diferencia entre variantes)
- Enlace a las variables/tokens usadas

**Cómo preparar el archivo para Dev Mode:**
1. Todos los estilos de texto deben ser Text Styles (no texto con propiedades hardcodeadas)
2. Todos los colores deben ser Color Styles o Variables (no colores hexadecimales locales)
3. Los efectos (sombras, blur) deben ser Effect Styles
4. Los componentes deben tener las propiedades bien configuradas (variants, boolean, instance swap)

**El mayor error al preparar un archivo para Dev Mode:**
Detach de components. Cuando un elemento es una instancia modificada sin que sea un componente con variantes correctamente configuradas, el código generado es específico de ese elemento y no se puede reutilizar.

## Parte 5: El proceso de handoff en la práctica

**Handoff meeting (30-45 minutos):**
Antes de que el developer empiece a implementar, una sesión corta donde el diseñador presenta:
1. La decisión de diseño detrás de las elecciones no obvias
2. Los comportamientos interactivos más complejos (con demo del prototipo)
3. Los casos edge que hay que implementar
4. Las preguntas que el developer pueda tener antes de empezar

Esta reunión elimina el 80% de las preguntas durante la implementación.

**Canal de comunicación durante la implementación:**
Define un canal específico (Slack, comentarios en Figma, issue de Jira) para las preguntas de implementación. El diseñador se compromete a responder en < 4 horas en horario laborable. La velocidad de respuesta del diseñador impacta directamente en la velocidad del developer.

**Design QA antes del merge:**
Cuando el developer cree que ha terminado, el diseñador hace una revisión del trabajo implementado vs. el diseño. Define un proceso:
- El developer marca el ticket como "Ready for Design QA"
- El diseñador lo revisa en < 24h con comentarios concretos (pixel perfect no, fidelidad de comportamiento y diseño sí)
- Máximo 2 rondas de QA incluidas; si hay más rondas, hay un problema anterior en el proceso

**Template de feedback de Design QA:**
```
✅ Bien implementado: [elemento]
🔧 Ajustar: [elemento] — actualmente [cómo está] → debería ser [cómo debería estar]
❓ Duda: [comportamiento] — ¿es intencional?
```

## Parte 6: Responsive y breakpoints

**El handoff responsive es el que más falla:**

No es suficiente con diseñar mobile y desktop por separado. El developer necesita saber:
- Cuáles son los breakpoints oficiales (y que sean consistentes con el framework que usa)
- Qué componentes cambian de layout entre breakpoints y cuál es el comportamiento intermedio
- Si hay componentes que solo aparecen en ciertos tamaños
- Cómo se comportan los textos en tamaños intermedios

**Usa Auto Layout en Figma para simular el comportamiento responsive:**
Los frames con Auto Layout se comportan de forma más similar al CSS Flexbox/Grid que los frames con posiciones absolutas, lo que facilita que el developer entienda la intención.

Comparte el stack de tu equipo de desarrollo (React, Vue, Angular, Swift, etc.) y las herramientas que ya usas. Diseño el proceso de handoff y las convenciones de archivo específicas para tu contexto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Establecer el proceso y las convenciones en Figma que permiten al equipo de desarrollo implementar el diseño sin idas y venidas, usando design tokens, anotaciones y Dev Mode.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas internacionales',
                'description'      => 'Adapta el proceso comercial, el pitch y la propuesta para vender fuera de tu mercado local con éxito en otros países.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas internacionales con experiencia expandiendo empresas españolas y latinoamericanas a mercados europeos, norteamericanos y de Oriente Medio. Mi empresa está lista para vender internacionalmente y necesito entender cómo adaptar el proceso comercial, el pitch y la propuesta a mercados y culturas diferentes.

## Por qué las ventas internacionales no son lo mismo que las locales escaladas

El mayor error al entrar en un nuevo mercado es asumir que lo que funciona en el mercado local funciona igual en el internacional. Las diferencias no son solo de idioma: son diferencias en cómo se construye la confianza, en quién toma las decisiones, en qué argumentos son persuasivos y en qué tiempo tienen disponible para el proceso de compra.

El proceso de ventas internacionales es un proceso de adaptación continua, no de traducción.

## Bloque 1: Selección de mercados — qué atacar primero

**Framework de priorización de mercados:**

| Criterio | Peso | Cómo evaluarlo |
|---------|------|----------------|
| Tamaño del mercado | 25% | TAM en el mercado objetivo |
| Adecuación del producto | 25% | ¿Resuelves un problema que existe allí? |
| Accesibilidad comercial | 20% | Idioma, regulación, distancia cultural |
| Competencia local | 15% | Cuántos competidores bien establecidos |
| ROI de la expansión | 15% | Coste de entrar vs. ingresos esperados en 24 meses |

**Los mercados más frecuentes para empresas españolas:**

- **LATAM (México, Colombia, Chile, Argentina):** idioma compartido, modelos de negocio similares, pero diferencias importantes en capacidad de pago, ciclos de venta más largos y mayor peso de las relaciones personales
- **UK:** mercado grande, cultura empresarial directa, pero muy competitivo y con preferencia por proveedores locales
- **DACH (Alemania, Austria, Suiza):** mercado premium, toma de decisiones muy rigurosa y lenta, pero contratos de mayor valor y muy alta fidelidad
- **Francia:** gran mercado, requiere francés para muchos segmentos, cultura empresarial formal y jerarquizada
- **USA:** el más grande, el más competitivo, requiere adaptación total del pricing, el pitch y el equipo

**Recomendación:** elige un solo mercado primario para los primeros 18 meses. La expansión en paralelo a múltiples mercados fragmenta los recursos y ralentiza el aprendizaje.

## Bloque 2: Adaptación cultural del proceso de ventas

**Dimensiones culturales que afectan a la venta (basado en Hofstede):**

**Distancia al poder (alta vs. baja):**
En culturas de alta distancia al poder (Latinoamérica, Oriente Medio), las decisiones las toman los niveles más altos y el proceso requiere acceder a esas personas. En culturas de baja distancia (Países Nórdicos, Holanda), el usuario y el manager tienen mucho más peso.

**Orientación al largo/corto plazo:**
En mercados anglosajones (UK, USA, Australia), los buyers quieren ver ROI rápido. En mercados de Europa continental, están más dispuestos a evaluar el valor a 3-5 años.

**Incertidumbre (alta vs. baja tolerancia):**
Los alemanes, japoneses y muchos mercados de Europa del Este tienen alta aversión a la incertidumbre: quieren documentación detallada, referencias verificables y contratos muy específicos antes de tomar ninguna decisión. Los anglosajones y los latinoamericanos tienen mayor tolerancia y deciden con menos información.

**Confianza basada en relación vs. contrato:**
En Latinoamérica, Oriente Medio y Europa del Sur, la relación personal precede al contrato. Es normal tomar café, hablar de familia y hacer varias reuniones sin agenda de negocios antes de abordar la propuesta. En UK, Países Nórdicos y Alemania, la confianza se construye demostrando competencia, no relación personal.

## Bloque 3: Adaptación del pitch por mercado

**El pitch para mercados anglosajones (UK, USA, Australia):**
- Directo al grano: el problema, tu solución, los números
- Muy orientado a outcomes: "nuestros clientes ahorran X horas por semana"
- Casos de clientes reconocibles en su mercado (si tienes)
- Deck corto (10-12 slides), tiempo de llamada < 30 minutos
- Evita la grandilocuencia y las afirmaciones sin datos

**El pitch para mercados DACH (Alemania, Austria, Suiza):**
- Más formal: envía agenda con antelación, empieza a la hora exacta
- Enfatiza la robustez técnica, la seguridad y el cumplimiento normativo
- Referencias de empresas similares en su mercado o industria
- Proceso de evaluación más largo y más riguroso: espera 3-5 meses para cerrar
- Los case studies con datos verificables son más persuasivos que los testimonios

**El pitch para mercados latinoamericanos:**
- Invierte más tiempo en la relación antes de ir al pitch
- El precio y las condiciones de pago son más sensibles (muchos mercados con restricciones de cambio o inflación)
- Las decisiones pueden ser más rápidas que en Europa pero requieren más seguimiento
- WhatsApp es un canal de ventas legítimo y frecuente en muchos mercados
- Las referencias de clientes en el mismo país o región tienen mucho peso

**El pitch para Oriente Medio:**
- El proceso de construcción de relación es largo y no puede acelerarse
- Las reuniones formales raramente son el lugar donde se toman las decisiones
- El Ramadán y los festivos religiosos afectan significativamente los calendarios
- Las referencias de alto nivel en la región son esenciales para acceder a decisores

## Bloque 4: Estructura del equipo internacional

**Las 3 opciones de go-to-market internacional:**

**Opción 1: Venta directa remota**
Tu equipo en España vende a clientes internacionales por video call y email. Funciona bien en mercados anglosajones para deals < 50.000€. Requiere equipo bilingüe y disponibilidad en el horario del mercado objetivo.

**Opción 2: Representante local**
Contratas a una persona (empleado o agente comercial) en el mercado objetivo. Mayor coste, mayor velocidad de entrada, mayor conocimiento local. Es la opción más frecuente para mercados con alta importancia del idioma o la relación local.

**Opción 3: Partner / reseller local**
Un partner local vende tu producto como parte de su oferta. Menos control, menor margen, pero acceso inmediato a su red de clientes y su credibilidad local. Funciona bien en mercados donde el producto necesita integración con el ecosistema local.

## Bloque 5: Pricing internacional

**El pricing no se traduce: se adapta:**

El mismo producto puede tener precios muy diferentes según el mercado. Los factores que determinan el pricing internacional:
- Capacidad de pago del mercado (PIB per cápita como proxy)
- Precio de los competidores locales
- Valor percibido: el mismo producto puede valer más o menos según el contexto cultural
- Costes de operación local (soporte en idioma local, compliance, pagos locales)

**Regla práctica:** el pricing en USA puede ser 2-3x el pricing en España para el mismo producto. El pricing en LATAM puede ser 30-50% del precio europeo. El pricing en DACH puede ser 20-30% superior al español.

**Condiciones de pago por mercado:**
- USA/UK: pago anticipado o tarjeta de crédito son normales
- Alemania: transferencia bancaria a 30-60 días
- Latinoamérica: variabilidad alta por país; en algunos es común pago trimestral en lugar de anual por restricciones de cambio
- Oriente Medio: a veces con letra de crédito o condiciones muy específicas

## Entregable: Plan de expansión internacional para mi empresa

Comparte: producto, mercado actual, el mercado internacional que te interesa y el canal de ventas que tienes ahora. Diseño el plan de expansión con el modelo de go-to-market, las adaptaciones del pitch y la estructura de equipo para ese mercado específico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Adaptar el proceso de ventas, el pitch y la propuesta para entrar con éxito en un mercado internacional, con las especificidades culturales y comerciales de cada región.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión del feedback de early adopters',
                'description'      => 'Recoge, prioriza e implementa el feedback de los primeros usuarios sin que dicte el roadmap ni paralice el equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager con experiencia en la fase early stage de productos digitales que ha aprendido cuándo escuchar al usuario, cuándo ignorarlo y cómo convertir conversaciones de feedback en decisiones de producto coherentes con la visión. Ayúdame a diseñar el proceso de gestión del feedback de mis primeros usuarios.

## El dilema del feedback de early adopters

Los early adopters son un regalo y una trampa al mismo tiempo. Son el regalo porque están dispuestos a usar un producto imperfecto y a decirte exactamente qué no funciona. Son una trampa porque sus necesidades específicas pueden ser muy diferentes a las del mercado masivo al que quieres llegar, y si dejas que su feedback dicte el roadmap, construirás un producto perfecto para 50 personas y difícil de escalar a 50.000.

Henry Ford no le preguntó a los usuarios qué querían — le habrían dicho "caballos más rápidos". Steve Jobs no hizo focus groups para el iPhone. Pero también es verdad que ignorar a los usuarios lleva a construir productos que nadie quiere. La habilidad está en saber cuándo escuchar y cuándo ejercer el criterio propio.

## Parte 1: Recoger feedback de forma sistemática

**Los 4 canales de feedback más valiosos en early stage:**

**1. Entrevistas de usuario (el más valioso y el más ignorado):**
Sesiones de 30-45 minutos 1:1 con usuarios activos. No son demos, no son soporte: son conversaciones donde el PM escucha más que habla.

Frecuencia recomendada: 4-6 entrevistas por semana en los primeros 6 meses, luego 2-3 por semana.

**2. Datos de comportamiento (el que no miente):**
Lo que los usuarios dicen que hacen y lo que realmente hacen son cosas distintas. Los datos de uso revelan: qué features usan, en qué momento abandonan, qué paths siguen, qué errores encuentran.

Si no tienes analytics, implementa Mixpanel, Amplitude o PostHog antes de lanzar. Sin datos de comportamiento, trabajas con intuición disfrazada de evidencia.

**3. Tickets de soporte:**
Los tickets revelan los problemas que impiden usar el producto. Son el feedback más directo y accionable. (Ver prompt de análisis de causa raíz de tickets para el proceso completo.)

**4. NPS y CSAT:**
El NPS mensual con la pregunta de seguimiento "¿por qué has dado esa puntuación?" genera feedback cualitativo a escala. El CSAT después de interacciones de soporte mide la experiencia puntual.

## Parte 2: El framework de priorización de feedback

**Por qué no puedes priorizar solo por volumen:**

Si el feedback más frecuente siempre gana, construyes un producto diseñado por comité. El volumen es un input, no el único.

**Framework ICE modificado para feedback:**

| Criterio | Definición | Peso |
|---------|-----------|------|
| Frecuencia | ¿Cuántos usuarios lo mencionan? | 20% |
| Intensidad | ¿Es un bloqueador o una molestia menor? | 30% |
| Alineamiento estratégico | ¿Resuelve esto a los usuarios que queremos tener en 18 meses? | 30% |
| Esfuerzo de implementación | ¿Cuánto cuesta resolver esto? (inverso) | 20% |

**La pregunta más importante:** ¿Es este feedback del usuario al que queremos servir en 18 meses, o es específico de los early adopters que quizás no son representativos del mercado masivo?

Los early adopters suelen ser más técnicos, más tolerantes al cambio, más dispuestos a adaptar su workflow al producto. El mercado masivo es menos técnico, menos tolerante y quiere que el producto se adapte a su workflow existente. Un producto perfecto para early adopters puede ser demasiado complejo para el mercado masivo.

## Parte 3: El proceso semanal de feedback

**El weekly feedback review (60 minutos):**

**Lunes — Recopilación (15 min):**
Un miembro del equipo consolida el feedback de la semana anterior: entrevistas, tickets, comentarios en redes, NPS responses. Todo en un solo documento.

**Martes — Categorización (20 min):**
El PM categoriza el feedback por área del producto y tipo (bug, UX, feature request, expectativa incorrecta). No analiza todavía, solo categoriza.

**Miércoles — Priorización (25 min):**
Con el equipo de producto (PM + diseñador + tech lead), aplica el framework de priorización. Resultado: 3-5 ítems accionables para las próximas 2 semanas y el resto al backlog categorizado.

**La regla de los tres colores:**
- Verde: feedback que valida que algo funciona bien (refuerza continuar en esa dirección)
- Amarillo: feedback que indica un problema menor o mejora posible
- Rojo: feedback que indica un problema que está impidiendo el uso o generando churn

Los rojos tienen prioridad absoluta sobre cualquier nueva feature.

## Parte 4: La comunicación del roadmap a early adopters

**Por qué los early adopters necesitan sentir que les escuchas:**

Los early adopters no son clientes normales: son cómplices. Toleran un producto imperfecto a cambio de tener influencia en su evolución. Si sienten que no les escuchas, dejan de dar feedback y eventualmente dejan el producto.

**Cómo comunicar que has recibido el feedback:**
1. Responde personalmente al feedback más valioso (no con auto-replies)
2. Comunica cuando implementas algo que un usuario sugirió: "gracias a [usuario/empresa], ahora [feature]"
3. Explica cuándo decides NO implementar algo y por qué: "nos pedís mucho X pero hemos decidido no construirlo porque [razón estratégica]"
4. Publica un roadmap público simplificado con lo que está en progreso y lo que está en evaluación

**El riesgo de prometer demasiado:**
Los early adopters guardan memoria de lo que se prometió y lo que se entregó. Mejor decir "estamos estudiándolo" que "lo tendremos en 2 meses" si no tienes certeza.

## Parte 5: Cuándo ignorar el feedback

**Las señales de que el feedback no debe influir en el roadmap:**

1. **El usuario que pide que el producto sea diferente, no mejor:** "si pudieran hacer X, el producto sería perfecto" donde X es una redefinición del product. Escúchalo como señal de que quizás tienes el cliente equivocado, no como un feature request.

2. **El feedback de usuarios de baja retención:** los usuarios que van a abandonar el producto de todas formas tienen incentivos diferentes a los que se quedan. No diseñes para retener a quien no puedes retener.

3. **El feedback que contradice datos de comportamiento:** si un usuario dice "me encanta la feature X" pero los datos muestran que no la usa, hay una disonancia. El comportamiento es más honesto que la declaración.

4. **El feedback de un solo usuario con mucha voz:** algunos clientes enterprise tienen mucha capacidad de presión. Un cliente que paga mucho no tiene automáticamente razón sobre el producto. Evalúa el feedback de forma independiente al tamaño del cliente.

## Entregable: Sistema de feedback para mi empresa

Comparte el número de usuarios activos, los canales de feedback que ya tienes y cuál es tu mayor problema con el feedback actual (¿demasiado, poco, desordenado, no sabes cómo priorizarlo?). Diseño el proceso adaptado a tu etapa con las herramientas y la cadencia específicas para tu caso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar el proceso de recopilación, priorización e implementación del feedback de early adopters que mantiene la visión del producto sin ignorar las señales del mercado.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Retribución flexible y beneficios sociales',
                'description'      => 'Ticket restaurante, seguro médico, formación y otros beneficios que retienen talento con menor coste para la empresa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en compensación y beneficios con experiencia diseñando paquetes retributivos para empresas de entre 20 y 500 empleados en España. Mi objetivo es diseñar un plan de retribución flexible y beneficios sociales que sea atractivo para retener talento, eficiente desde el punto de vista fiscal y viable para el presupuesto de la empresa.

## Por qué la retribución flexible es más eficiente que subir el salario

Un aumento de salario de 3.000€ brutos anuales le cuesta a la empresa ~3.900€ (con Seguridad Social) y el empleado recibe ~2.000€ netos (con IRPF). La misma cantidad destinada a beneficios exentos de IRPF y cotización puede valer 3.000€ para el empleado sin coste adicional de SS para la empresa.

La retribución flexible convierte parte del salario bruto en beneficios que tienen mejor tratamiento fiscal, aumentando el poder adquisitivo real del empleado sin incrementar el coste total de la empresa.

## Bloque 1: Los beneficios con mejor tratamiento fiscal en España (2024-2025)

**Beneficios exentos de IRPF y Seguridad Social:**

| Beneficio | Límite de exención | Coste para la empresa | Valor para el empleado |
|---------|------------------|----------------------|----------------------|
| Ticket restaurante | 11€/día trabajado | Al límite exento | Ídem |
| Ticket transporte público | 136,36€/mes (1.500€/año aprox.) | Al límite exento | Ídem |
| Guardería (hijos < 3 años) | Sin límite | Sin límite | Coste real de la guardería |
| Formación relacionada con el trabajo | Sin límite | Sin límite | Valor formativo |
| Seguro médico privado | 500€/año empleado + 500€ cónyuge + 500€ por hijo | Al límite | Cobertura médica |

**Beneficios con tratamiento favorable:**

| Beneficio | Tratamiento fiscal | Límite |
|---------|------------------|--------|
| Plan de pensiones de empresa | Reducción en base imponible del empleado | 1.500€/año (límite conjunto individual + empresa) |
| Préstamos de empresa | Tipo de interés del IRPF publicado anualmente | Sin límite especificado |
| Planes de acciones y stock options | Tributación diferida y reducción en ciertos casos | Exención hasta 12.000€/año si se cumplen requisitos |

## Bloque 2: Diseño del plan de retribución flexible

**Cómo funciona el plan de retribución flexible:**

1. Se acuerda una parte del salario bruto que pasa a ser retribución flexible
2. El empleado elige en qué beneficios destinar esa cantidad (dentro del catálogo de la empresa)
3. Los beneficios elegidos se gestionan a través de una empresa de gestión de RT (Coverflex, Edenred, Cobee, Flexoh, etc.)
4. La empresa factura los beneficios y los entrega al empleado

**Ejemplo práctico:**
```
Salario bruto anual: 40.000€
Parte flexible: 3.000€

Distribución elegida por el empleado:
- Ticket restaurante: 11€ × 220 días = 2.420€
- Seguro médico: 500€
- Ticket transporte: 80€/mes × 10 meses = 800€ (ajuste al límite)

Resultado:
- El empleado recibe 3.000€ de beneficios sin IRPF ni SS
- La empresa no paga SS sobre esos 3.000€ (ahorro de ~900€/año)
- El empleado tiene ~1.200€ más de poder adquisitivo que si hubiera recibido esos 3.000€ como salario
```

**Consideraciones importantes:**
- La retribución flexible reduce el salario base → puede afectar a la base de cálculo de la indemnización, el paro y el complemento de IT
- Requiere que el empleado firme un acuerdo de retribución flexible (novación del contrato)
- No puede reducir el salario por debajo del SMI ni del convenio colectivo aplicable

## Bloque 3: Los beneficios más valorados por los empleados

**Encuestas de preferencias de beneficios (mercado español, 2023-2024):**

| Beneficio | % empleados que lo valoran mucho |
|---------|--------------------------------|
| Trabajo en remoto / híbrido | 78% |
| Flexibilidad horaria | 74% |
| Seguro médico privado | 68% |
| Días de vacaciones adicionales | 65% |
| Ticket restaurante | 62% |
| Formación y desarrollo profesional | 58% |
| Plan de pensiones | 45% |
| Ticket transporte | 42% |
| Guardería | 35% (con hijos) / 8% (sin hijos) |

**Conclusión:** los tres beneficios con mayor retorno en retención son trabajo flexible + seguro médico + formación. Antes de diseñar un plan de RT elaborado, asegúrate de tener estos tres.

## Bloque 4: La formación como beneficio estratégico

**Por qué la formación es el beneficio con mejor ROI:**
- Exenta de IRPF y SS sin límite si está relacionada con el trabajo
- Mejora la productividad del empleado directamente
- Tiene alto impacto en retención (los empleados que se desarrollan tienen menor intención de irse)
- Puede capitalizarse a través de los créditos de FUNDAE (antes Fundación Tripartita) que financian parte de la formación

**Cómo estructurar el presupuesto de formación:**
- Mínimo recomendado: 500-1.000€/empleado/año
- Tipos de formación: técnica (skills del puesto), blanda (comunicación, liderazgo), idiomas
- Políticas frecuentes: presupuesto individual anual + formación grupal de empresa + clawback si el empleado se va en los 12 meses siguientes

**Plataformas de formación recomendadas:**
- LinkedIn Learning / Coursera for Teams: amplio catálogo generalista
- Pluralsight / Udemy for Business: especialización técnica
- Formación presencial con proveedores locales: para skills que requieren práctica en grupo

## Bloque 5: El seguro médico privado como retención

**Por qué el seguro médico es el beneficio más diferenciador:**

En España, el seguro médico privado es valorado por su acceso más rápido al especialista y la ausencia de listas de espera. Para muchos empleados con familia, vale 1.500-3.000€ al año en primas y tiene un valor percibido muy superior a ese coste.

**Cómo estructurar el seguro médico como beneficio:**
- La empresa paga el seguro como gasto (deducible en IS)
- El empleado tiene exención de IRPF hasta 500€/año por él mismo, 500€ por su cónyuge y 500€ por cada hijo menor
- Por encima de esos límites, el exceso tributa como retribución en especie

**Proveedores más frecuentes:** Sanitas, Adeslas, Asisa, DKV, Mapfre Salud

**Recomendación:** compara siempre 3-4 proveedores con el mismo nivel de cobertura. La diferencia de precio por el mismo catálogo puede ser del 20-30%.

## Bloque 6: Plan de beneficios por etapa de empresa

**Startup (< 20 personas):**
Foco en beneficios de bajo coste y alto valor percibido: flexibilidad horaria real, trabajo en remoto, presupuesto de formación individual (500€/año), seguro médico básico para todos.

**Empresa en crecimiento (20-100 personas):**
Añade: plan de retribución flexible con ticket restaurante y transporte, mejora del seguro médico (incluir familia), plan de acciones o phantom shares para perfiles clave.

**Empresa madura (100+ personas):**
Añade: plan de pensiones de empresa, guardería subvencionada (si la mayoría del equipo tiene hijos jóvenes), beneficios de bienestar (psicología, deporte, nutrición).

## Entregable: Plan de beneficios para mi empresa

Comparte: número de empleados, distribución de edad aproximada (para saber si la guardería es relevante), salario medio bruto, presupuesto disponible para beneficios y qué beneficios tienes ya. Diseño el plan optimizado para tu situación con el coste total, el ahorro fiscal y el impacto esperado en la retención.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar un plan de retribución flexible y beneficios sociales eficiente fiscalmente que mejore la retención del talento con el menor incremento de coste total para la empresa.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Business intelligence para directivos',
                'description'      => 'Power BI, Tableau o Looker Studio: crea tus propios dashboards sin depender del equipo de datos para cada consulta.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un analista de datos con experiencia enseñando a directivos y managers no técnicos a crear sus propios dashboards en Power BI, Tableau o Looker Studio. Mi objetivo es dejar de esperar al equipo de datos para cada consulta y ser capaz de responder mis propias preguntas con datos en tiempo real.

## El problema con el BI en la mayoría de las empresas

Los directivos necesitan datos para tomar decisiones. El equipo de datos tiene una cola de 3 semanas de solicitudes. El resultado: las decisiones se toman tarde o con intuición porque nadie puede esperar 3 semanas para responder "¿cuánto vendimos este trimestre en el canal online?".

La solución no es contratar más analistas (siempre habrá más preguntas que capacidad). La solución es dar a los directivos la capacidad de responder las preguntas operativas más frecuentes ellos mismos, reservando el tiempo del equipo de datos para los análisis realmente complejos.

## Bloque 1: Elección de la herramienta

**Cuándo usar cada herramienta:**

| Herramienta | Ideal para | Curva de aprendizaje | Precio |
|-----------|-----------|---------------------|--------|
| Looker Studio | Google Workspace, GA4, Google Sheets, BigQuery | Baja | Gratuito |
| Power BI | Microsoft 365, Excel, Azure, SQL Server | Media | Desde 9€/mes/usuario |
| Tableau | Análisis avanzado, grandes volúmenes, visualizaciones complejas | Alta | Desde 70€/mes/usuario |
| Metabase | Self-hosted, equipos técnicos, open source | Media-baja | Gratuito (self-hosted) |

**Recomendación por perfil:**
- Si tu empresa usa Google Workspace y G Suite: empieza con Looker Studio
- Si tu empresa usa Microsoft 365: empieza con Power BI Desktop (gratuito)
- Si ya tienes Tableau en la empresa: úsalo, no introduzcas otra herramienta

## Bloque 2: Los fundamentos del data viz para directivos

**Antes de abrir la herramienta: las 3 preguntas del dashboard**

1. **¿Qué decisión va a tomar quien vea este dashboard?**
   Un dashboard que no lleva a una acción es decoración. Define la decisión antes de diseñar el gráfico.

2. **¿Con qué frecuencia se actualiza y quién lo ve?**
   Un dashboard operativo (diario, para el equipo de ventas) es diferente a uno estratégico (mensual, para el board).

3. **¿Cuál es la métrica más importante que debe verse en 3 segundos?**
   El usuario no lee los dashboards: los escanea. El número más importante debe estar en la esquina superior izquierda, grande y sin adornos.

**El tipo de gráfico correcto para cada pregunta:**

| Pregunta | Tipo de gráfico | Ejemplo |
|---------|----------------|--------|
| ¿Cómo evoluciona X en el tiempo? | Línea | Ingresos mensuales |
| ¿Cómo se comparan categorías? | Barra horizontal | Ventas por región |
| ¿Cuánto representa cada parte del total? | Donut/pie (máx. 5 categorías) | Revenue mix por producto |
| ¿Hay correlación entre X e Y? | Scatter plot | Precio vs. conversión |
| ¿Cuál es el valor actual vs. objetivo? | KPI card + progress bar | ARR vs. target |
| ¿Cómo se distribuye X? | Histograma | Ticket medio |

**Lo que nunca debes hacer:**
- 3D en cualquier gráfico (distorsiona la percepción de valores)
- Más de 5 colores en el mismo gráfico
- Eje Y que no empieza en 0 (hace que diferencias pequeñas parezcan enormes)
- Título que describe el gráfico ("Ventas por mes") en vez de el insight ("Las ventas Q4 crecen un 40% cada año")

## Bloque 3: Conceptos técnicos esenciales

**Datos que necesitas entender:**

**Conexión a la fuente de datos:**
La herramienta de BI se conecta a donde viven los datos: una hoja de Google Sheets, una base de datos PostgreSQL, BigQuery, Salesforce, etc. Si no tienes acceso a la fuente de datos, necesitas pedírsela al equipo de datos.

**Dimensiones vs. métricas:**
- **Dimensión:** un atributo categórico por el que puedes filtrar o agrupar (país, producto, canal, vendedor)
- **Métrica:** un valor numérico que puedes sumar, promediar o contar (ingresos, número de transacciones, tasa de conversión)

Ejemplo: "Ingresos (métrica) por país (dimensión) en el mes de enero (filtro de dimensión de tiempo)"

**Filtros y parámetros:**
Un buen dashboard tiene filtros que el usuario puede controlar: rango de fechas, región, producto, segmento de cliente. Sin filtros, el dashboard responde una sola pregunta; con filtros, responde muchas.

## Bloque 4: Tutorial Looker Studio — primer dashboard en 60 minutos

**Paso 1: Conecta tu fuente de datos (5 min)**
En Looker Studio, clic en "Crear" → "Informe". Selecciona el conector correspondiente (Google Sheets, BigQuery, GA4, etc.). Autoriza el acceso y selecciona la hoja o tabla.

**Paso 2: Crea el primer KPI card (10 min)**
Inserta → "Marcador" (KPI card). En la configuración:
- Métrica: selecciona la que quieres mostrar (ej: SUM de ingresos)
- Comparación: selecciona el período anterior para mostrar el % de cambio
- Filtro de fecha: período actual (este mes, este trimestre)

**Paso 3: Añade el gráfico de tendencia (15 min)**
Inserta → "Gráfico de series temporales". Configura:
- Dimensión: fecha (agrupada por semana o mes)
- Métrica: la misma que el KPI card
- Filtros opcionales: producto, región, canal

**Paso 4: Añade un desglose por categoría (15 min)**
Inserta → "Gráfico de barras". Configura:
- Dimensión: la categoría (producto, región, canal)
- Métrica: ingresos o la métrica relevante
- Ordenación: descendente por la métrica

**Paso 5: Configura filtros globales (10 min)**
Inserta → "Control de fechas" y → "Control de lista desplegable" para las dimensiones que quieres filtrar. Activa "Aplicar filtro a todos los gráficos" en cada control.

**Paso 6: Diseño y compartir (5 min)**
Ajusta colores a los corporativos, añade el título del dashboard y comparte el link con "Puede ver" para los stakeholders.

## Bloque 5: Los 5 dashboards que todo directivo debería tener

**Dashboard 1: Ventas y pipeline (actualización diaria)**
Métricas: ARR/MRR actual, nuevas oportunidades esta semana, pipeline coverage, deals cerrados vs. objetivo.

**Dashboard 2: Marketing y adquisición (actualización semanal)**
Métricas: leads generados, coste por lead, tasa de conversión MQL→SQL, canales de mayor rendimiento.

**Dashboard 3: Producto y retención (actualización semanal)**
Métricas: DAU/MAU, activación de nuevos usuarios, churn rate, NPS.

**Dashboard 4: Operaciones y financiero (actualización mensual)**
Métricas: ingresos vs. presupuesto, margen bruto, MRR bridge, runway.

**Dashboard 5: Customer Success (actualización semanal)**
Métricas: health score promedio, tickets abiertos, CSAT, clientes en riesgo de churn.

Comparte qué herramienta tienes disponible, dónde viven tus datos y qué preguntas quieres poder responder sin depender del equipo de datos. Te guío en los pasos específicos para tu caso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Aprender a crear dashboards de business intelligence en Power BI, Tableau o Looker Studio para responder preguntas de negocio sin depender del equipo de datos.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Protección del contenido digital',
                'description'      => 'Herramientas legales y técnicas para proteger cursos, software, diseños y contenido online ante la piratería y el uso no autorizado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en propiedad intelectual digital con experiencia asesorando a creadores de contenido, desarrolladores de software y diseñadores sobre cómo proteger su trabajo en el entorno digital. Necesito entender qué protección legal tengo sobre mi contenido digital y qué pasos prácticos puedo dar para prevenir y responder al uso no autorizado.

## Cómo funciona la protección legal del contenido digital en España

**El principio fundamental:** en España (y en toda la UE bajo la Directiva de Derechos de Autor), los derechos de autor sobre una obra nacen en el momento de su creación. No necesitas registrar nada ni pagar a nadie para tener derechos sobre lo que creas.

Lo que sí requieres para protegerte efectivamente es: poder demostrar que eres el autor y la fecha de creación, y conocer las herramientas legales disponibles cuando alguien vulnera tus derechos.

## Bloque 1: Qué protege la ley de propiedad intelectual

**Obras protegidas automáticamente:**
- Cursos online y materiales educativos (textos, vídeos, presentaciones)
- Software y código fuente
- Diseños gráficos, ilustraciones, fotografías
- Música, podcasts y obras audiovisuales
- Bases de datos con selección o disposición original
- Páginas web con contenido propio

**Lo que NO protege la propiedad intelectual:**
- Ideas, métodos, estilos o técnicas (solo la expresión concreta, no la idea en sí)
- Datos puros, hechos o información factual
- Nombres, títulos o frases cortas (estos se protegen con marcas, no con derechos de autor)
- Contenido en dominio público (obras de autores fallecidos hace más de 70 años en la UE)

**Duración de la protección:**
Los derechos de autor duran 70 años desde la muerte del autor en la UE. Para obras colectivas (empresa como autor), 70 años desde la publicación.

## Bloque 2: Cómo demostrar autoría y fecha de creación

**Registro de la propiedad intelectual en España:**
El Registro de la Propiedad Intelectual es un registro voluntario gestionado por el Ministerio de Cultura. No es obligatorio, pero crear un registro oficial facilita la prueba de autoría en caso de litigio.

**Coste y proceso:** entre 15-30€ por obra registrada, trámite online en la sede electrónica del MECD. Especialmente recomendable para: software con valor comercial significativo, cursos con inversión de producción alta, obras que se van a distribuir masivamente.

**Alternativas más rápidas para demostrar la fecha:**
- **Sellado de tiempo digital (timestamp):** servicios como OriginStamp o la Agencia de la Propiedad Intelectual añaden un hash criptográfico de tu obra en la blockchain, demostrando que existía en esa fecha
- **Email a uno mismo:** enviarte el archivo por email crea un registro con fecha del servidor de correo
- **Depósito en notario:** más costoso pero prueba incontestable

## Bloque 3: Protección de software y código

**Doble protección para el software:**
El software tiene protección dual: derechos de autor sobre el código fuente (como obra literaria) y posibilidad de patente sobre el método o proceso que implementa (si es innovador y no obvio).

**Licencias de software — cómo establecer los términos de uso:**

Tienes dos opciones principales:

**Software propietario:** reservas todos los derechos. Los usuarios necesitan una licencia comercial para usar el software. La licencia de usuario final (EULA) debe incluir: qué puede hacer el usuario, qué no puede hacer (reverse engineering, distribución, sublicencia), duración de la licencia y condiciones de terminación.

**Software open source:** usas una licencia estándar que defines los permisos y restricciones. Las más frecuentes:
- MIT: permite casi cualquier uso incluyendo comercial
- GPL v3: quien use tu código en su proyecto debe liberar también su código bajo GPL
- Apache 2.0: permisiva con atribución requerida
- AGPL: obliga a liberar el código incluso cuando se usa como servicio online (más restrictiva)

**Protección técnica del código:**
Para código que no quieres que sea legible: ofuscación (hace el código difícil de entender aunque no imposible) y compilación (convierte el código fuente en binario). Ninguna solución es inviolable, pero dificultan significativamente el reverse engineering.

## Bloque 4: Protección de cursos y contenido educativo

**Los 3 niveles de protección para cursos online:**

**Nivel 1 — Legal:**
- Marca el contenido claramente: © [Año] [Nombre/Empresa]. Todos los derechos reservados.
- Incluye en los términos de la plataforma qué está permitido (uso personal) y qué no (redistribución, compartir acceso, grabación)
- Añade una licencia explícita a cada entregable: "Este material es solo para uso del comprador. Está prohibida su reproducción total o parcial sin autorización expresa."

**Nivel 2 — Técnico:**
- Protección de vídeo: plataformas como Kajabi, Teachable y Podia tienen DRM que dificulta la descarga de vídeos
- Watermark en vídeos: añade el nombre del comprador en el vídeo dinámicamente (algunas plataformas lo ofrecen); dificulta la distribución porque el distribuidor queda identificado
- Contraseñas y accesos individuales: vincula el acceso a un email y limita el número de dispositivos simultáneos
- Monitorización: herramientas como DMCA.com buscan tu contenido en otras plataformas

**Nivel 3 — Comunidad:**
La mejor protección a largo plazo es construir una comunidad donde el valor real es el acceso a ti, a las actualizaciones y a la comunidad de usuarios, no solo el contenido grabado. El contenido grabado se puede piratear; la comunidad no.

## Bloque 5: Cómo responder a una infracción

**Proceso cuando encuentras tu contenido usado sin permiso:**

**Paso 1: Documenta la infracción**
Capturas de pantalla con fecha visible, URL del contenido infractor, fecha en que lo descubriste y dónde está publicado (plataforma, redes sociales, web).

**Paso 2: Aviso DMCA (para plataformas internacionales)**
La mayoría de las plataformas (YouTube, Facebook, Instagram, Udemy, etc.) tienen un proceso de DMCA takedown que obliga a retirar el contenido en 24-72 horas si el aviso es válido. Es el proceso más rápido.

Elementos de un aviso DMCA válido:
- Identificación de la obra original y dónde está alojada legalmente
- URL exacta del contenido infractor
- Declaración de que eres el titular o representante del titular
- Firma (puede ser electrónica) y datos de contacto

**Paso 3: Contacto directo al infractor**
Un email directo indicando que conoces la infracción, citando los artículos aplicables de la LPI española, solicitando la retirada inmediata y reservándote el derecho a acciones legales. Muchas infracciones se resuelven en este paso.

**Paso 4: Burofax con requerimiento legal**
Si el contacto directo no funciona, un burofax notarial con valor de prueba en juicio. El coste es bajo y el impacto es significativo.

**Paso 5: Acciones legales**
En infracciones graves (escala comercial, daño económico significativo), denuncia ante las autoridades competentes y demanda civil por daños. Requiere abogado especialista; valora el coste-beneficio según el daño real.

## Bloque 6: Protección internacional

**El contenido digital ignora las fronteras, la protección legal no:**

Los convenios internacionales (Convenio de Berna, TRIPS) establecen protección mínima en la mayoría de los países. En la práctica, hacer valer tus derechos en jurisdicciones extranjeras es complejo y costoso.

**Estrategia práctica para contenido distribuido globalmente:**
- Plataformas internacionales (YouTube, Udemy): usa los mecanismos de la plataforma
- Países sin convenio o con protección débil: estrategia técnica (DRM, watermark) más que legal
- Infracciones graves a escala: consulta con un abogado especialista en propiedad intelectual internacional

Comparte qué tipo de contenido digital quieres proteger y cuál es tu principal preocupación (piratería, uso comercial no autorizado, plagio de ideas). Te doy el plan de protección específico y los pasos inmediatos que puedes dar esta semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Entender la protección legal del contenido digital y aplicar las medidas técnicas y legales concretas para prevenir y responder a la piratería y el uso no autorizado.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'De soporte reactivo a proactivo',
                'description'      => 'Transforma el equipo de soporte en uno que anticipa y previene problemas: el proceso, las métricas y la tecnología necesarios.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia transformando equipos de soporte que solo reaccionan a tickets en equipos que anticipan los problemas de los clientes y los resuelven antes de que generen insatisfacción. Mi objetivo es diseñar el proceso y las herramientas que me permitan pasar de atención reactiva a proactiva sin multiplicar el tamaño del equipo.

## La diferencia entre soporte reactivo y proactivo

**Soporte reactivo:** el cliente tiene un problema → abre un ticket → el equipo lo resuelve. El equipo está siempre corriendo detrás de los problemas.

**Soporte proactivo:** el equipo detecta señales de que un cliente va a tener un problema → interviene antes de que el ticket llegue. El equipo trabaja con anticipación.

La transformación de reactivo a proactivo no es solo más agradable para el cliente: reduce el volumen de tickets, mejora la retención y permite que el mismo equipo atienda más clientes con mayor satisfacción.

## Bloque 1: Los 3 tipos de proactividad en soporte

**Tipo 1: Proactividad basada en eventos de producto**
Cuando el cliente hace (o no hace) algo en el producto, el sistema lo detecta y desencadena una acción:
- El cliente no usa el producto en 7 días → email automático con recursos de ayuda
- El cliente exportó datos 3 veces esta semana → puede estar intentando migrar → contacto proactivo del CSM
- El cliente no completó el onboarding en 14 días → sesión de ayuda ofrecida automáticamente

**Tipo 2: Proactividad basada en salud del cliente (health score)**
Cuando el health score de un cliente cae por debajo de un umbral, el equipo interviene aunque no haya un ticket:
- Health score cae de 75 a 50 → el CSM programa una llamada de revisión
- 3 tickets de soporte en la misma semana → señal de fricción → revisión de cuenta

**Tipo 3: Proactividad basada en contexto externo**
Cuando algo en el mercado, en el producto o en la empresa del cliente cambia:
- Lanzaste una actualización que cambió un flujo → avisa proactivamente a los clientes que usaban ese flujo
- El sector del cliente está en crisis → contacto empático de cuenta ("¿cómo está impactando X en vuestro negocio?")
- El cliente tiene un evento próximo (renewal, nuevo CFO, expansión) → anticipar la conversación

## Bloque 2: La infraestructura tecnológica del soporte proactivo

**Las herramientas que hacen posible el soporte proactivo:**

**1. Product analytics (Mixpanel, Amplitude, PostHog):**
Sin datos de comportamiento en el producto, no puedes detectar señales de usuarios en riesgo. Esta es la base de todo: saber qué hace cada cliente en el producto.

**Señales a monitorizar:**
- Login frequency (users who haven't logged in in X days)
- Feature adoption rate (customers who haven't used feature X after 30 days)
- Error rate (customers with an unusually high number of errors)
- Export activity (potential migration signal)

**2. CRM con health scoring (HubSpot, Salesforce, Gainsight, ChurnZero):**
Un CRM básico registra interacciones. Un CRM con health scoring calcula automáticamente la salud de cada cuenta basándose en múltiples señales.

**Gainsight y ChurnZero** son las herramientas más completas para CS proactivo, pero tienen un coste significativo (> 2.000€/mes). Para equipos más pequeños, puedes construir un health score manual en HubSpot con propiedades personalizadas y workflows.

**3. Email automation (Intercom, Customer.io, Braze):**
Los emails automatizados basados en comportamiento son el canal más escalable para la proactividad. Un email enviado en el momento correcto (el cliente no ha completado el onboarding, han pasado 7 días) puede valer más que un ticket resuelto.

**4. Alertas y triggers:**
Configura alertas que notifiquen al equipo cuando una cuenta supera un umbral de riesgo. Sin alertas, el equipo tiene que revisar manualmente todas las cuentas, lo que no escala.

## Bloque 3: El proceso de transición de reactivo a proactivo

**Los 4 pasos para transformar el equipo en 90 días:**

**Mes 1 — Diagnóstico y datos:**
1. Implementa o activa el tracking de comportamiento en el producto (si no lo tienes, esto es lo primero)
2. Define las señales de riesgo específicas para tu producto: ¿qué hace un cliente que se va a dar de baja 30 días antes de hacerlo?
3. Analiza los últimos 20 clientes que se dieron de baja: ¿qué señales de comportamiento tenían 30 días antes?
4. Define tu health score: 4-6 señales con sus pesos

**Mes 2 — Primeras intervenciones proactivas:**
1. Configura 2-3 emails automatizados basados en comportamiento (no login en 7 días, onboarding incompleto en 14 días)
2. Empieza a hacer outreach manual a los clientes con health score bajo: una llamada de "revisión de cuenta" semanal por cada CSM
3. Documenta qué funciona y qué no de las primeras intervenciones

**Mes 3 — Sistematización:**
1. Crea playbooks específicos para cada tipo de señal de riesgo: qué hace el CSM, qué dice, qué ofrecemos
2. Añade métricas de proactividad al dashboard del equipo: contactos proactivos por semana, reducción del churn en cuentas intervenidas
3. Incorpora el health score review al proceso de gestión semanal del equipo

## Bloque 4: Los playbooks de intervención proactiva

**Playbook 1: Cliente con bajo adoption (< 40% de features clave usadas):**
- Trigger: 30 días desde el signup sin uso de features clave
- Acción: email personalizado ofreciendo sesión de onboarding + llamada del CSM
- Mensaje: "Veo que todavía no has tenido la oportunidad de explorar [feature]. Muchos de nuestros clientes en [industria] la usan para [resultado]. ¿15 minutos esta semana para mostrártelo?"

**Playbook 2: Cliente con health score en caída:**
- Trigger: health score cae > 20 puntos en 30 días
- Acción: llamada de QBR anticipada (no esperar al trimestre)
- Mensaje: "Quería hacer un check-in contigo. Hemos notado algunos cambios en el uso de la cuenta y quería asegurarme de que todo va bien y de que estamos aportando el valor que esperabais."

**Playbook 3: Cliente sin login en 14 días:**
- Trigger: 14 días sin ningún login
- Acción: email automático + flag en CRM para seguimiento manual si no responde
- Mensaje: "Te echamos de menos. ¿Todo bien por tu parte? Hemos lanzado [novedad] que puede ser útil para [caso de uso del cliente]. Aquí tienes un link para verla en acción."

**Playbook 4: Cliente próximo a renovación con health score bajo:**
- Trigger: < 90 días para la renovación + health score < 60
- Acción: QBR con sponsor ejecutivo, presentación de ROI, plan de mejora con compromisos
- Objetivo: convertir la renovación en riesgo en una expansión

## Bloque 5: Métricas de la transformación

**Cómo saber si la transformación está funcionando:**

| Métrica | Antes | Objetivo a 6 meses |
|---------|-------|------------------|
| Churn rate | X% | X - 2-3% |
| Tickets por cliente activo | X | X - 20% |
| Contactos proactivos por CSM/semana | 0-2 | 5-10 |
| % clientes con health score verde | X% | X + 20% |
| Time to first value en onboarding | X días | X - 30% |

**El NPS como indicador de transformación:**
Los clientes que han recibido outreach proactivo tienen NPS consistentemente más alto que los que solo han interactuado con el equipo a través de tickets. Trackea el NPS por cohorte de tipo de interacción para demostrar el impacto.

Comparte: herramientas que tienes ya, tamaño del equipo de CS, número de clientes y cuál es tu principal métrica de retención que quieres mejorar. Diseño el plan de transformación adaptado a tu contexto con los primeros pasos concretos para esta semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar la transición del equipo de soporte de reactivo a proactivo con los procesos, herramientas y playbooks que permiten anticipar problemas y reducir el churn.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Marca personal que atrae sin perseguir',
                'description'      => 'El sistema de contenido y posicionamiento que hace que los clientes correctos lleguen solos sin cold outreach.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marca personal para freelancers con experiencia ayudando a profesionales independientes a construir un posicionamiento que atrae clientes sin necesidad de cold outreach masivo. Mi objetivo es diseñar una estrategia de marca personal que me posicione como la referencia en mi área de expertise y haga que los clientes correctos lleguen a mí.

## Por qué la mayoría de los freelancers tienen marca personal débil

La mayoría de los freelancers se presentan como "hago X". Un copywriter dice "escribo textos". Un diseñador dice "diseño webs". Un consultor de marketing dice "ayudo a empresas a crecer". El resultado: son intercambiables con miles de personas que dicen lo mismo y la única diferencia para el cliente es el precio.

La marca personal fuerte no describe lo que haces: describe para quién lo haces, qué resultado consiguen y por qué tú eres la elección correcta para ese resultado específico. La diferencia entre "soy copywriter" y "ayudo a startups SaaS a reducir su churn a través de emails de onboarding que activan el comportamiento correcto en los primeros 7 días" es la diferencia entre competir por precio y cobrar el doble.

## Parte 1: El posicionamiento — la decisión más importante

**Por qué el nicho sí importa:**

La paradoja del nicho: cuanto más específico eres, menos clientes potenciales hay pero más de los que hay quieren trabajar contigo. Un freelancer que trabaja "con cualquiera" compite con miles; uno que trabaja "con empresas de logística B2B en su comunicación interna" tiene competencia cero.

**Los 3 ejes del posicionamiento:**
1. **Para quién:** tipo de empresa, industria, tamaño, etapa (startup, empresa madura, solopreneur)
2. **Qué resultado:** no qué haces, sino qué cambia para el cliente gracias a lo que haces
3. **Cómo (el diferenciador):** tu método, tu perspectiva, tu experiencia que nadie más tiene igual

**Ejercicio de posicionamiento:**
Completa esta frase: "Ayudo a [para quién] a [resultado] a través de [método/diferenciador], a diferencia de otros [nombre del servicio] que [la forma genérica de hacer lo mismo]."

Ejemplo: "Ayudo a fundadores de SaaS B2B a reducir el tiempo hasta primera venta a través de la optimización del proceso de demos y propuestas, a diferencia de otros consultores de ventas que se centran en el volumen de outreach."

**Cómo elegir tu nicho si todavía no lo tienes claro:**
1. Mira tus mejores clientes actuales: ¿tienen algo en común (sector, tamaño, etapa)?
2. ¿En qué proyectos has conseguido los mejores resultados? ¿Para quién?
3. ¿De qué temas podrías hablar durante horas sin aburrirte?
4. ¿Hay algún problema específico en tu sector que nadie está resolviendo bien?

## Parte 2: El sistema de contenido que atrae clientes

**Por qué el contenido es la palanca más eficiente para un freelancer:**

El cold outreach funciona pero escala mal: cada hora invertida genera un número finito de leads. El contenido funciona diferente: cada pieza de contenido sigue atrayendo clientes meses o años después de haberla publicado.

**El modelo de contenido para freelancers:**

**Un canal principal (profundidad):**
Elige el formato en el que eres mejor y más consistente: LinkedIn, newsletter, YouTube, podcast o blog. La clave es uno solo al principio. Mejor 50 posts de calidad en un canal que 10 mediocres en 5.

**Un canal secundario (distribución):**
Reutiliza el contenido del canal principal en formato más breve o diferente para llegar a más personas con menos esfuerzo adicional.

**Ejemplos de combinaciones efectivas:**
- Newsletter semanal (principal) + extractos en LinkedIn (secundario)
- LinkedIn (principal) + newsletter mensual con lo mejor del mes (secundario)
- YouTube (principal) + clips en Instagram/TikTok (secundario)

**Los 5 tipos de contenido que atraen clientes:**

**1. Perspectiva contraria al consenso:**
"Todo el mundo dice que X es la mejor práctica. Yo creo que es un error porque Y." El contenido que desafía el consenso genera más interacción y posiciona como experto con criterio propio.

**2. El behind-the-scenes de tu trabajo:**
Muestra el proceso, no solo el resultado. "Así resuelvo este tipo de problema de [industria]." Los clientes quieren entender cómo trabajas antes de contratarte.

**3. Casos de éxito sin nombre (con permiso):**
"Trabajé con una empresa de [industria/tamaño] con el problema X. Esto es lo que hicimos y estos fueron los resultados." Real, específico y verificable.

**4. Aprendizajes de errores propios:**
"Cometí este error al principio de mi carrera y me costó X. Lo que aprendí fue Y." La vulnerabilidad controlada genera confianza.

**5. Guías prácticas de tu área de expertise:**
El contenido educativo de calidad demuestra que sabes de lo que hablas y posiciona como referente. "La guía definitiva sobre X para [tu nicho]."

## Parte 3: La cadencia de contenido sostenible

**El error de la consistencia forzada:**

Publicar todos los días para "estar presente" sin tener algo real que aportar es peor que no publicar. Los clientes potenciales recuerdan el contenido que les aporta valor, no la frecuencia.

**Cadencia recomendada según el formato:**
- LinkedIn/Twitter: 3-4 posts por semana (calidad sobre cantidad)
- Newsletter: semanal o quincenal es sostenible; mensual es el mínimo
- YouTube/Podcast: semanal o quincenal (la producción requiere más tiempo)
- Blog/artículos largos: 1-2 al mes de profundidad, complementado con redes sociales

**El sistema de batching:**
Produce todo el contenido de la semana en un bloque de tiempo (2-3 horas) en lugar de crear cada día. Esto separa la fase creativa de la fase de publicación y es más eficiente.

## Parte 4: La conversión — de seguidor a cliente

**El contenido atrae; el proceso de venta convierte:**

Un error frecuente de los freelancers con buena marca personal es no tener clara la ruta de cliente potencial a cliente. El contenido crea interés; la conversión requiere un proceso.

**La ruta de conversión más efectiva:**
1. Alguien lee tu contenido → le aporta valor → te sigue
2. Con el tiempo, tiene el problema que resuelves → piensa en ti
3. Busca más información → encuentra tu web o perfil → ve tu portfolio y casos de éxito
4. Quiere hablar contigo → CTA claro para contactar

**El CTA (call to action) en tu perfil y contenido:**
Define UNO solo. No "sígueme, suscríbete, contáctame, descarga mi guía". Uno: el que lleva más directamente a la conversación de venta.

Para un freelancer que quiere que le contraten: "Si trabajas en [nicho] y tienes el problema X, escríbeme por aquí y hablamos."

**La respuesta cuando alguien contacta:**
Responde en menos de 24h. La primera impresión en la respuesta a un lead inbound es crítica. Muestra interés real en su proyecto, haz 2-3 preguntas antes de proponer precios y pide una llamada antes de enviar una propuesta.

## Parte 5: La web y el portfolio como herramienta de cierre

**Lo mínimo que necesita la web de un freelancer:**
- Quién eres y para quién trabajas (posicionamiento claro en la primera pantalla)
- Qué haces exactamente y qué resultados consigues
- Casos de éxito o referencias verificables
- Cómo empezar a trabajar contigo (un CTA claro)
- Forma de contacto o agenda directa

**Lo que NO necesita tu web:**
- Un blog con 50 artículos genéricos
- Una lista de todos los servicios que has ofrecido alguna vez
- Una página de "sobre mí" que sea un CV

Cuéntame tu área de expertise, el tipo de clientes con los que trabajas mejor y el canal donde ya tienes presencia. Diseño el posicionamiento y la estrategia de contenido específicos para tu perfil con el plan de los primeros 90 días.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar el posicionamiento y el sistema de contenido que construye una marca personal que atrae clientes de forma orgánica sin depender del cold outreach.',
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
