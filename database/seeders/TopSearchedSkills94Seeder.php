<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills94Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de contenido con IA: producción escalable',
                'description'      => 'Sistema para crear más contenido sin sacrificar autenticidad: el flujo de producción escalable con IA que mantiene la voz de marca y multiplica el output del equipo de marketing.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de contenido que ha implementado procesos de producción con IA en equipos de marketing de empresas B2B y B2C. Ayúdame a construir el sistema de producción de contenido que escala sin que el contenido parezca generado por máquinas.

**Mi contexto:**
- Tipo de empresa y sector: [describe tu empresa]
- Audiencia objetivo: [a quién va dirigido el contenido]
- Canales principales: [blog / LinkedIn / newsletter / redes sociales / YouTube / podcast]
- Volumen de contenido actual: [piezas/mes por canal]
- Objetivo de volumen: [cuánto quieres producir]
- Tamaño del equipo de contenido: [número de personas]
- Herramientas actuales: [qué usas ahora para crear contenido]
- Principal miedo al usar IA para contenido: [que suene robótico / que pierda autenticidad / que no rankee / que el equipo lo use mal]

---

**Parte 1 – El sistema de pilares y clusters de contenido**

Antes de hablar de IA, el sistema que hace que la producción escale con calidad:
- Qué son los pilares de contenido y por qué son la base del sistema: 3-5 temas en los que tu marca puede ser referente
- Clusters de contenido: cómo un pilar genera 10-20 piezas de contenido relacionadas sin repetirse
- La matriz de contenido: formatos × canales × audiencia para identificar qué piezas producir primero

**Crea la matriz de contenido para mi negocio:**

| Pilar | Formato | Canal | Audiencia | Objetivo | Frecuencia |
|---|---|---|---|---|---|
| [Pilar 1] | Artículo largo | Blog | Decision makers | SEO | 2/mes |
| [Pilar 1] | Post corto | LinkedIn | Profesionales del sector | Alcance | 3/semana |
| ... | ... | ... | ... | ... | ... |

---

**Parte 2 – Dónde entra la IA en el proceso de producción**

La distinción crítica: qué hace la IA y qué hace el humano:

**IA para:** (alto volumen, bajo riesgo de pérdida de autenticidad)
- Research y síntesis de información: compilar datos, tendencias y fuentes en minutos
- Generación de ángulos y enfoques alternativos para el mismo tema
- Adaptación de un contenido a múltiples formatos (artículo → LinkedIn → newsletter → hilo de Twitter)
- Primer borrador de contenido templado (estructuras predefinidas)
- SEO: research de keywords, sugerencias de H2s, meta descriptions

**Humano para:** (baja tolerancia a la pérdida de autenticidad)
- La opinión real y el punto de vista diferenciador
- Los ejemplos propios y los casos de la empresa
- La edición final que inyecta la voz de marca
- La historia personal o de cliente que hace el contenido memorable
- La decisión estratégica sobre qué publicar y cuándo

---

**Parte 3 – Construir la voz de marca para la IA**

El problema no es usar IA; el problema es no haberle enseñado cómo habla tu marca:
- Cómo crear un "Brand Voice Document" que los modelos de IA puedan usar
  - Tono y registro (formal / cercano / técnico / inspiracional)
  - Palabras y expresiones que usamos y que NO usamos
  - Longitud de frases característica
  - Tipo de ejemplos que ponemos (datos / historias / analogías)
  - Qué evitamos (el clickbait, las listas vacías, el lenguaje corporativo)
- Cómo incluir este documento en los prompts para que la IA lo respete
- Prueba: dame el brand voice document inicial para mi marca basándote en el contexto que te he dado

---

**Parte 4 – El flujo de producción semana a semana**

El proceso semanal del equipo de contenido con IA:

**Lunes – Planificación:**
- Revisar el calendario editorial y seleccionar los temas de la semana
- Usar IA para hacer el research inicial de cada tema (fuentes, datos, ángulos posibles)
- Asignar piezas al equipo con el brief ya semi-preparado por la IA

**Martes-Miércoles – Producción:**
- El redactor humano revisa el research de IA y añade su perspectiva
- Usa IA para el primer borrador (con el brand voice document en el prompt)
- El humano edita: añade ejemplos propios, ajusta el tono, añade la opinión

**Jueves – Adaptación de formatos:**
- IA adapta el contenido principal a los formatos secundarios (LinkedIn, newsletter, hilo)
- Revisión rápida de cada adaptación

**Viernes – Revisión y programación:**
- Revisión final de todas las piezas de la semana
- Programación en las herramientas de distribución

---

**Parte 5 – Métricas y optimización del sistema**

Cómo medir si el sistema está funcionando:
- Métricas de producción: piezas por persona por semana antes y después de implementar IA
- Métricas de calidad: engagement rate, tiempo en página, CTR — para asegurar que la calidad no cae
- Métricas de autenticidad: comentarios que mencionan "parecía un bot" o similar (una señal de alerta)
- El proceso de aprendizaje: cómo los prompts mejoran con el tiempo basándose en qué contenido funciona mejor

Termina con los 5 errores más frecuentes cuando los equipos de marketing empiezan a usar IA para contenido y cómo evitarlos desde el principio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir el sistema de producción de contenido con IA que multiplica el output sin perder la autenticidad de la voz de marca.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Feature flags y continuous delivery',
                'description'      => 'Implementa feature flags con LaunchDarkly o Unleash para separar deployment de release, gestionar experimentos y hacer rollouts seguros: la práctica que transforma el proceso de entrega de software.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un platform engineer con experiencia en implementar sistemas de feature flags en startups y scale-ups que necesitan aumentar su cadencia de deployment sin aumentar el riesgo. Ayúdame a diseñar e implementar la estrategia de feature flags para nuestro producto.

**Mi contexto:**
- Stack tecnológico: [lenguaje(s), framework(s), arquitectura]
- Infraestructura de deployment: [monolito / microservicios / serverless / contenedores]
- Tamaño del equipo de ingeniería: [número de devs]
- Cadencia de deployment actual: [cuántas veces al día/semana desplegáis]
- Problema principal que quiero resolver con feature flags: [reducir riesgo de releases / hacer A/B testing / gestionar acceso a features beta / separar frontend de backend releases]
- Herramientas de CI/CD actuales: [GitHub Actions / GitLab CI / Jenkins / etc.]

---

**Parte 1 – Los tres tipos de feature flags que todo equipo necesita**

No todos los flags son iguales. Explica los tres tipos y cuándo usar cada uno:

**1. Release flags (los más comunes)**
- Propósito: desplegar código desactivado para activarlo cuando esté listo
- Ciclo de vida: se crean para un feature y se eliminan cuando el feature está estable
- Quién los controla: el equipo de ingeniería o el PM
- Ejemplo de uso: nuevo flujo de checkout desplegado pero solo visible al 0% de usuarios hasta QA aprobado

**2. Experiment flags (A/B testing)**
- Propósito: probar hipótesis con tráfico dividido y medir resultados estadísticamente
- Ciclo de vida: viven mientras dura el experimento (días o semanas)
- Quién los controla: el equipo de producto o de growth
- Ejemplo de uso: variante A vs. variante B del CTA en la landing con medición de conversión

**3. Permission flags (acceso a features)**
- Propósito: controlar qué usuarios o grupos tienen acceso a qué funcionalidades
- Ciclo de vida: indefinido, son parte de la lógica de negocio (planes, betas, etc.)
- Quién los controla: el negocio (CS, ventas, producto)
- Ejemplo de uso: feature X solo para clientes del plan Enterprise o beta testers

**Tabla de selección rápida:**

| Necesidad | Tipo de flag | Herramienta recomendada | Duración |
|---|---|---|---|
| Lanzar sin riesgo | Release | Cualquiera | Días-semanas |
| Medir qué versión convierte más | Experiment | Statsig, Growthbook | Semanas |
| Dar acceso a Enterprise | Permission | LaunchDarkly, Unleash | Indefinida |
| Kill switch de emergencia | Ops | Cualquiera | Permanente |

---

**Parte 2 – Elegir la herramienta correcta**

Comparativa honesta de las herramientas más usadas:

**LaunchDarkly:**
- Para quién: empresas con presupuesto, que necesitan feature flags como parte crítica del negocio
- Ventajas: SDKs para cualquier lenguaje, evaluación en cliente, targeting avanzado, analytics integrado
- Precio: caro para startups (desde ~300€/mes para uso serio)
- Cuándo elegirlo: si tienes más de 20 devs y los flags son parte central de la estrategia

**Unleash (open source):**
- Para quién: equipos técnicos que prefieren autoalojamiento y control total
- Ventajas: completamente open source, sin límites de flags, deploy propio
- Coste: hosting (puede ser gratis en tu propia infra)
- Cuándo elegirlo: equipo técnico, presupuesto ajustado, control de datos importante

**Growthbook:**
- Para quién: equipos que principalmente quieren hacer A/B testing con datos propios
- Ventajas: se integra con tu warehouse (BigQuery, Snowflake, Redshift) para análisis estadístico real
- Precio: tier gratuito generoso
- Cuándo elegirlo: si el A/B testing con datos propios es la prioridad

**Opción DIY (Redis + base de datos):**
- Para quién: equipos muy pequeños que solo necesitan on/off simple
- Ventajas: coste cero, control total
- Desventajas: no hay UI, no hay targeting avanzado, hay que construirlo
- Cuándo elegirlo: MVP, startup muy temprana, solo necesitas toggles simples

---

**Parte 3 – Implementación técnica**

Implementa feature flags en mi stack:
- Cómo instalar y configurar el SDK en [mi lenguaje/framework]
- El patrón de código correcto para evaluar un flag (síncrono vs. asíncrono, caching, fallback)
- Cómo pasar contexto de usuario para targeting (userId, plan, país, etc.)
- El antipatrón que más problemas causa: anidar flags dentro de flags
- Cómo gestionar los flags en tests automatizados sin que contaminen los resultados

**Ejemplo de código comentado para mi stack:**
```
// Muéstrame el patrón correcto de evaluación de flag en [mi lenguaje]
// con manejo de error, fallback al valor por defecto y logging
```

---

**Parte 4 – Proceso de rollout con feature flags**

El proceso de lanzamiento gradual que minimiza el riesgo:

**La secuencia estándar de rollout:**
1. 0% – Feature desplegada, flag off. Solo equipo de dev puede verla (targeting por userId)
2. 5% – Internal beta: empleados de la empresa
3. 10% – Beta pública: clientes que se han apuntado voluntariamente
4. 25% – Rollout gradual: usuarios aleatorios
5. 50% – Mitad del tráfico. Momento de revisar métricas antes de continuar
6. 100% – Release completo
7. Flag eliminada – Limpiar el código una vez estabilizado

**Métricas a monitorizar en cada fase:**
- Error rate por variante del flag
- Latencia (algunos features afectan el rendimiento)
- Métricas de negocio relevantes para el feature (conversión, engagement, etc.)
- Feedback cualitativo de la beta

**Cuándo pausar o hacer rollback:**
- Error rate sube más de 2x respecto al baseline
- Latencia p99 sube más de 20%
- Métrica de negocio cae de forma estadísticamente significativa

---

**Parte 5 – Gobernanza y ciclo de vida de los flags**

El problema de la deuda técnica de flags: cómo evitar que los flags se acumulen y el código se vuelva inmantenible:
- La política de "fecha de expiración" para cada flag: cómo asignarla y hacerla cumplir
- El proceso de limpieza mensual: cómo identificar y eliminar los flags obsoletos
- Documentación de flags: qué información capturar en el momento de creación (propósito, dueño, fecha de expiración, comportamiento cuando se elimine)
- Cómo incluir la limpieza de flags en el ciclo de sprint

Termina con los 5 errores más frecuentes al implementar feature flags por primera vez y cómo evitar cada uno desde el inicio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar feature flags para separar deployment de release, hacer rollouts graduales y gestionar experimentos de forma segura.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño para conversión (CRO): principios que aumentan ventas',
                'description'      => 'Los principios de diseño que realmente aumentan la conversión: jerarquía visual, CTA irresistibles, trust signals y reducción de fricción con ejemplos aplicados a landing pages, formularios y checkouts.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador especializado en Conversion Rate Optimization (CRO) que ha trabajado en el rediseño de landing pages, formularios y checkouts para startups y ecommerces. Ayúdame a aplicar los principios de diseño para conversión a mi producto.

**Mi contexto:**
- Tipo de página / flujo que quiero optimizar: [landing page / formulario de lead / checkout / página de pricing / onboarding]
- Tipo de negocio: [SaaS / ecommerce / servicios / marketplace]
- Conversión objetivo: [registro / compra / demo request / descarga]
- Tasa de conversión actual (si la conoces): [%]
- Principal hipótesis de por qué no convierte bien: [el CTA no es claro / hay demasiada fricción / no genera confianza / el mensaje no conecta]
- Herramientas de análisis disponibles: [Google Analytics / Hotjar / Clarity / FullStory / ninguna]

---

**Parte 1 – Jerarquía visual: lo primero que el usuario lee**

Explica cómo la jerarquía visual afecta directamente a la conversión:
- El patrón F y el patrón Z: cómo los usuarios leen una página web y cómo diseñar para que lo más importante esté en el camino visual correcto
- Tamaño y peso tipográfico como guía de atención: el orden de prioridad que el ojo del usuario sigue
- Contraste como herramienta de conversión: cómo el contraste guía al usuario hacia la acción deseada
- El principio de "una página, una acción": por qué las páginas con múltiples CTAs suelen convertir menos

**Auditoría de jerarquía visual para mi página:**
Basándote en mi tipo de página y objetivo, dame:
- Los 3 elementos que deben estar "above the fold" (antes del scroll) y en qué orden de prioridad visual
- Qué elementos suelen entorpecer la jerarquía en este tipo de página
- Cómo verificar que la jerarquía funciona: la prueba del "squint test" y otras técnicas

---

**Parte 2 – CTAs que generan clics**

La anatomía de un CTA que convierte:
- Texto del CTA: el impacto de verbos de acción específicos vs. genéricos

| Texto genérico | Texto específico | Impacto típico en conversión |
|---|---|---|
| "Enviar" | "Quiero empezar gratis" | +40-80% |
| "Más información" | "Ver cómo funciona en 2 min" | +25-50% |
| "Registrarse" | "Crear mi cuenta gratis" | +30-60% |
| "Comprar" | "Añadir al carrito · 27,99€" | +10-25% |

- Diseño del botón: tamaño, color, forma y espaciado que maximizan la tasa de clic
  - Por qué el color del CTA debe contrastar con el fondo, no con los colores de la marca
  - El "borde respirable": cuánto espacio en blanco alrededor del botón es suficiente
  - Qué señales visuales alrededor del CTA aumentan la tasa de clic (flechas, miradas, aislamiento)
- Posicionamiento: cuántos CTAs poner en una landing page y dónde
- El microcopy bajo el CTA: la línea de texto que elimina la objeción final (privacidad, cancelación, etc.)

---

**Parte 3 – Trust signals: generar confianza que convierte**

Los elementos que eliminan el miedo a convertir, por orden de efectividad:
1. **Prueba social cuantificada**: "Más de 5.000 equipos confían en [producto]" con logo wall
2. **Testimonios específicos**: no "genial producto" sino "[resultado concreto] en [tiempo concreto]"
3. **Casos de estudio**: el formato que funciona y los datos que deben incluir
4. **Sellos y certificaciones**: cuáles importan en B2B (SOC2, ISO) y cuáles en B2C (SSL, sellos de pago)
5. **Garantías**: la "garantía de devolución" y su impacto en la conversión de ecommerce
6. **Medios y reconocimientos**: "como se ha visto en" y cuándo incluirlo

Para mi tipo de negocio, diseña la estrategia de trust signals:
- Cuáles son más relevantes para mi audiencia
- Dónde colocarlos en el flujo de conversión (antes del CTA, junto al CTA, durante el checkout)
- El trust signal que más se olvida y que tiene mayor impacto en mi tipo de página

---

**Parte 4 – Reducción de fricción en formularios**

Los formularios son el mayor asesino de conversión. Cómo optimizarlos:
- La regla del mínimo campo viable: cuántos campos pedir y cuándo pedir el resto
- El orden de los campos: por qué empezar por los campos fáciles aumenta la tasa de completado
- Validación inline vs. al enviar: cuál genera menos abandono
- Autocompletado y microinteracciones que facilitan el rellenado
- Mensajes de error que no frustran y cómo redactarlos
- El impacto del "paso a paso" vs. el formulario en una sola página según la longitud

**Checklist de formulario optimizado:**
- [ ] Solo los campos estrictamente necesarios para el objetivo
- [ ] Labels encima del campo, nunca solo placeholder
- [ ] Botón de envío con texto específico y de color contrastante
- [ ] Microcopy de privacidad junto al email
- [ ] Validación inline con mensajes de error específicos
- [ ] Autofocus en el primer campo
- [ ] Funcionamiento correcto en mobile

---

**Parte 5 – Testing y mejora continua**

Cómo implementar la mejora de conversión como proceso:
- Cómo priorizar qué elementos testear primero: el framework ICE (Impacto / Confianza / Esfuerzo)
- Cómo diseñar un A/B test que produce resultados estadísticamente válidos:
  - Calculadora de tamaño de muestra necesario
  - Duración mínima del test (por qué "tengo suficientes datos en 3 días" suele ser falso)
  - Cómo interpretar los resultados sin cometer errores estadísticos
- Las herramientas de testing asequibles para equipos pequeños
- El proceso de documentación de tests: qué aprendimos y cómo aplicarlo

Termina con el plan de auditoría de mi página específica: los 5 cambios que implementaría primero basándome en los principios de CRO con mayor impacto potencial y menor esfuerzo de implementación.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Aplicar principios de CRO al diseño de landing pages, formularios y checkouts para aumentar la tasa de conversión.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Revenue Operations (RevOps): alinear ventas, marketing y CS',
                'description'      => 'Implementa RevOps para eliminar los silos entre marketing, ventas y customer success: datos compartidos, procesos alineados y las métricas que revelan dónde se pierde revenue en el embudo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP of Revenue Operations con experiencia en startups B2B SaaS que han escalado de 1M a 10M ARR. Ayúdame a diseñar e implementar la función de RevOps en mi empresa.

**Mi contexto:**
- Etapa y tamaño: [ARR actual, número de empleados en ventas, marketing y CS]
- CRM actual: [Salesforce / HubSpot / Pipedrive / otro]
- Problema principal que quiero resolver: [los datos de marketing y ventas no cuadran / no sabemos dónde se pierde el pipeline / CS y ventas no hablan / proceso de venta sin sistematizar]
- Herramientas del stack actual: [lista tus herramientas de ventas, marketing y CS]
- ¿Tienes alguien dedicado a operaciones ahora mismo?: [sí/no]

---

**Parte 1 – Qué es RevOps y por qué importa más que nunca**

Explica con precisión el concepto:
- La diferencia entre SalesOps, MarketingOps y RevOps: cuándo tiene sentido tener cada uno y cuándo integrarlos bajo RevOps
- El costo real de los silos entre marketing, ventas y CS: con ejemplos concretos de revenue perdido
- El modelo de RevOps: tres áreas (personas / procesos / tecnología) y cómo se relacionan
- Cuándo es demasiado pronto para tener RevOps y cuándo ya es tarde

---

**Parte 2 – El stack tecnológico integrado**

El objetivo de RevOps en tecnología es una única fuente de verdad para los datos de revenue:
- Cómo diseñar la arquitectura del stack para que los datos fluyan sin silos:
  - CRM como sistema de registro central
  - Integración con herramientas de marketing automation (HubSpot, Marketo, etc.)
  - Integración con herramientas de CS (Gainsight, ChurnZero, Intercom)
  - Data warehouse para análisis avanzado (cuando tiene sentido añadirlo)

**Mapa del flujo de datos:**

| Fuente | Dato clave | Destino | Frecuencia | Propósito |
|---|---|---|---|---|
| Marketing Automation | Lead creado, fuente | CRM | Tiempo real | Atribución |
| CRM | Deal stage, valor | Analytics | Diario | Forecasting |
| CS Tool | Health score, NPS | CRM | Semanal | Expansion pipeline |
| Billing | MRR, churn | Dashboard | Diario | Revenue metrics |

- Auditoría de mi stack actual: identifica las integraciones que faltan y su impacto
- Cómo limpiar los datos del CRM: el proceso de deduplicación, normalización y enriquecimiento

---

**Parte 3 – Los procesos que RevOps define**

Las definiciones y acuerdos que eliminan la fricción entre equipos:

**La definición de MQL y SQL (Marketing Qualified Lead / Sales Qualified Lead):**
- Por qué la falta de definición compartida es la principal fuente de conflicto entre marketing y ventas
- Cómo crear una definición de MQL/SQL basada en comportamiento y fit que todos acepten
- El SLA (Service Level Agreement) entre marketing y ventas: tiempos de respuesta a MQLs y consecuencias

**El proceso de handoff entre ventas y CS:**
- Qué información debe transferir ventas a CS en el momento del cierre
- La "customer success handoff checklist" que evita el churn en los primeros 90 días
- Cómo CS alimenta información de expansión a ventas

**El proceso de forecasting:**
- Cómo construir un modelo de forecasting fiable en el CRM
- Las categorías de forecast (Commit / Most Likely / Pipeline) y sus definiciones
- Cadencia de revisión de forecast: weekly por los reps, monthly por el VP Sales, quarterly para el board

---

**Parte 4 – Las métricas de RevOps**

El dashboard de RevOps que todos en la empresa deben ver:

**Métricas de top-of-funnel (Marketing):**
- Leads generados por canal con CAC por canal
- MQL to SQL conversion rate (si es < 20%, hay problema)
- Time to MQL: cuánto tarda un lead en cualificarse

**Métricas de mid-funnel (Ventas):**
- Win rate por etapa del pipeline
- Average Sales Cycle: cuántos días de lead a cierre
- Average Contract Value (ACV) por segmento
- Pipeline coverage: cuánto pipeline necesitas para tu objetivo de ingresos (regla del 3x)

**Métricas de post-venta (Customer Success):**
- Net Revenue Retention (NRR): la métrica que muestra si el negocio es saludable
- Time to Value: cuánto tarda el cliente en conseguir el primer resultado
- Customer Health Score promedio de la base

**Cómo crear el dashboard unificado para mi empresa con las herramientas que tengo**

---

**Parte 5 – Implementar RevOps en 90 días**

El plan de acción para construir la función de RevOps:

**Mes 1 – Diagnóstico y fundaciones:**
- Auditoría del stack tecnológico: integraciones que funcionan, datos que no cuadran
- Entrevistas con los tres equipos (marketing, ventas, CS) para identificar los principales puntos de fricción
- Definir las métricas clave y asegurarse de que se miden correctamente

**Mes 2 – Quick wins:**
- Los 3 problemas de proceso que generan más fricción: resolverlos primero para ganar confianza interna
- Construir el dashboard de revenue unificado
- Implementar el SLA de MQL y el proceso de handoff

**Mes 3 – Sistematización:**
- Documentar todos los procesos en un manual de RevOps
- Calendario de revisiones: qué métricas se revisan cuándo y con quién
- Roadmap de mejoras para el trimestre siguiente

Termina con las 3 conversaciones que hay que tener con el CEO antes de empezar a implementar RevOps para asegurar el apoyo ejecutivo que necesita la función.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Implementar Revenue Operations para alinear marketing, ventas y CS bajo datos y procesos compartidos que eliminan la pérdida de revenue.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'PM con IA: research, PRDs y decisiones más rápidas',
                'description'      => 'Cómo los product managers usan IA para hacer research de usuario más rápido, escribir PRDs más completos, priorizar con más datos y liberar tiempo para el trabajo estratégico que no puede delegar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager senior que ha integrado la IA en todas las partes del trabajo de producto y ha desarrollado un sistema que le permite hacer el doble de trabajo con la misma calidad. Ayúdame a construir mi propio sistema de trabajo de PM con IA.

**Mi contexto:**
- Etapa del producto: [MVP / PMF / escala / madurez]
- Tipo de producto: [SaaS B2B / app móvil / marketplace / plataforma de datos / etc.]
- Tamaño del equipo: [número de devs, diseñadores, otros PMs]
- Cadencia de trabajo: [metodología: scrum / kanban / shape up / otro]
- Las tareas de PM en las que pierdo más tiempo: [research / documentación / reuniones / priorización / stakeholders]
- Herramientas actuales: [Notion / Jira / Linear / ProductBoard / otro]

---

**Parte 1 – User research con IA: 10x la velocidad**

Cómo la IA transforma las diferentes partes del proceso de research:

**Antes de las entrevistas:**
- Cómo usar IA para analizar el feedback histórico (tickets de soporte, reseñas de appstores, NPS verbatims) y encontrar los patrones antes de diseñar las preguntas
- El prompt para generar una guía de entrevista de usuario en 10 minutos para cualquier hipótesis
- Cómo usar IA para crear las screener questions que filtran a los usuarios correctos para la entrevista

**Durante el análisis:**
- Cómo transcribir y analizar entrevistas con IA: herramientas (Otter.ai, Fathom, Grain) y el prompt para extraer los jobs to be done, pain points y citas clave de una transcripción
- Síntesis de múltiples entrevistas: el prompt que genera un informe de research a partir de 10 transcripciones en minutos
- Análisis de datos cuantitativos: cómo describir tus métricas a Claude y pedir interpretaciones que no ves

**Validación:**
- Cómo usar IA para generar hipótesis alternativas que refuten tu interpretación (el "abogado del diablo" para el research)
- El prompt de "desafía mi conclusión": cómo asegurarte de que no estás viendo solo los datos que confirman lo que ya crees

---

**Parte 2 – PRDs y documentación de producto**

El PRD es el documento que más tiempo tarda en escribir. Cómo acelerarlo:
- La estructura del PRD que los devs y diseñadores realmente leen (y la parte que nadie lee y se puede eliminar)
- El prompt para generar el borrador inicial de un PRD a partir de la descripción del problema y los user stories
- Cómo usar IA para completar las secciones más tediosas:
  - Casos extremos (edge cases) y escenarios que se olvidan
  - Dependencias técnicas y riesgos
  - Métricas de éxito del feature
  - Criterios de aceptación

**Plantilla de prompt para PRD:**
Proporcióname el prompt exacto que puedo usar para generar el primer borrador de cualquier PRD a partir de:
- La descripción del problema que resuelve
- El usuario objetivo y el job to be done
- La solución propuesta (a nivel alto)
- Las restricciones técnicas conocidas

---

**Parte 3 – Priorización con más datos**

Cómo la IA mejora el proceso de priorización:
- Análisis de impacto vs. esfuerzo: cómo describir tu backlog a Claude y pedir una primera ordenación con justificación
- Frameworks de priorización con IA:
  - RICE (Reach, Impact, Confidence, Effort): cómo usar IA para estimar los valores y su razonamiento
  - Jobs to be Done como criterio de priorización: cómo la IA puede ayudar a mapear features a jobs
  - Priorización por segmento: cómo usar IA para identificar qué features mueven más el NRR de los clientes más valiosos

- El contrapeso: por qué la priorización final siempre es una decisión humana y qué variables la IA no puede evaluar (política interna, apuestas estratégicas, intuición de usuario)

---

**Parte 4 – Comunicación con stakeholders**

La parte del trabajo de PM que más energía consume:
- Preparar el weekly status update en 5 minutos: el prompt que convierte tus notas en un resumen claro para el CEO y el equipo
- Cómo usar IA para preparar las preguntas difíciles de un board o una revisión de producto: el "modo abogado del diablo" para preparar las objeciones
- Slides de producto: el prompt para generar el guion de una presentación de producto a partir del PRD
- El followup de reuniones: cómo pasar transcripciones o notas a Claude y obtener un resumen con decisiones, action items y dueños

---

**Parte 5 – El sistema de trabajo semanal del PM con IA**

Diseña la rutina semanal ideal para un PM como yo:

| Tarea | Tiempo sin IA | Tiempo con IA | Herramienta / Prompt |
|---|---|---|---|
| Analizar feedback semanal | 3h | 45 min | Claude + datos de soporte |
| Escribir un PRD | 4h | 1.5h | Claude con plantilla |
| Preparar reunión de roadmap | 2h | 30 min | Claude + Notion |
| Weekly update para CEO | 1h | 15 min | Claude |
| Priorización de backlog | 3h | 1h | Claude + Linear |

- Las 5 tareas de PM que la IA NO puede hacer bien todavía (y por qué no delegar en ella)
- Cómo mantenerse al día con las capacidades de IA que más afectan al trabajo de producto

Termina con los 5 prompts más útiles para PMs que deberías guardar como templates permanentes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Integrar la IA en el trabajo diario del product manager para hacer research más rápido, PRDs mejores y decisiones más informadas.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Employee engagement: medir y actuar antes de perder talento',
                'description'      => 'El sistema para medir el engagement de verdad, interpretar los resultados y actuar a tiempo: encuestas de clima que generan datos accionables y no simples reportes que nadie lee.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en People Analytics y employee engagement con experiencia en diseñar y gestionar programas de escucha en empresas de tecnología. Ayúdame a construir el sistema de medición y acción sobre el engagement de mi equipo.

**Mi contexto:**
- Tamaño del equipo: [número de empleados]
- Distribución: [presencial / remoto / híbrido] y [una sola oficina / varias ciudades / internacional]
- Sector y cultura: [startup ágil / empresa consolidada / etc.]
- Situación actual de engagement: [no medimos nada / hacemos una encuesta anual / hacemos pulse surveys / tenemos eNPS]
- Principal síntoma que me preocupa: [alta rotación / desconexión del equipo / bajo rendimiento / mucho absentismo / dificultad para retener]
- Herramientas de RRHH actuales: [Workday / BambooHR / Personio / Excel / etc.]

---

**Parte 1 – Por qué las encuestas tradicionales no funcionan**

El diagnóstico honesto del estado del arte:
- Por qué las encuestas anuales son inútiles para prevenir el churn (la persona ya decidió irse cuando contestas)
- El problema del "encuesta sin acción": por qué hacer encuestas y no actuar destruye la confianza más que no hacer ninguna
- El sesgo de deseabilidad social: por qué los empleados no dicen lo que realmente piensan y cómo reducirlo
- Cómo distinguir entre "satisfacción" y "engagement": son conceptos diferentes y se miden diferente

---

**Parte 2 – Diseñar el sistema de escucha**

El modelo de escucha de tres capas:

**Capa 1 – Pulse survey mensual (5 preguntas, 3 minutos)**
- Las 5 preguntas que mejor predicen el riesgo de fuga con una sola encuesta mensual
- Por qué 5 preguntas es el máximo antes de que la tasa de respuesta se desplome
- Cómo rotar las preguntas para cubrir diferentes dimensiones sin agotamiento
- Timing: cuándo enviar la encuesta para maximizar la tasa de respuesta
- Benchmark de tasa de respuesta: si es < 70%, hay un problema de confianza antes de analizar los datos

**Capa 2 – Encuesta trimestral de clima (15-20 preguntas)**
Las dimensiones que hay que medir en una encuesta de clima completa:

| Dimensión | Qué mide | Preguntas tipo |
|---|---|---|
| Claridad del rol | El empleado sabe qué se espera de él | "Tengo claro cómo se mide mi éxito en este puesto" |
| Reconocimiento | Se siente valorado | "Mi trabajo es reconocido cuando lo hago bien" |
| Desarrollo | Ve futuro profesional aquí | "Esta empresa me da oportunidades para crecer" |
| Relación con el manager | La calidad del liderazgo directo | "Mi manager me da feedback útil y a tiempo" |
| Colaboración | Dinámica del equipo | "El equipo con el que trabajo colabora bien" |
| Pertenencia | Inclusión y seguridad psicológica | "Me siento libre de expresar opiniones sin miedo" |
| Carga de trabajo | Sostenibilidad | "Mi carga de trabajo es manejable" |
| Propósito | Conexión con la misión | "Entiendo cómo mi trabajo contribuye a los objetivos de la empresa" |

**Capa 3 – Conversación 1-a-1 estructurada (mensual con cada manager)**
- Las preguntas de 1-a-1 que detectan señales de riesgo que la encuesta no captura
- Cómo registrar los insights de las 1-a-1 sin crear una sensación de vigilancia
- Qué hace el manager con lo que escucha: el protocolo de escalado

---

**Parte 3 – Analizar los datos de forma accionable**

Los datos sin interpretación son ruido. Cómo convertirlos en acción:
- Cómo calcular el eNPS y por qué es útil como métrica de tendencia pero no como métrica de acción
- Segmentación de resultados: los cortes que revelan problemas que la media esconde
  - Por manager / equipo: ¿hay equipos con engagement significativamente más bajo?
  - Por antigüedad: ¿el engagement cae en los primeros 6 meses? ¿o después de 3 años?
  - Por nivel: ¿los seniors están más desenganchados que los juniors?
- La correlación engagement-performance: cómo identificar si el bajo engagement precede a la caída de rendimiento
- Los indicadores de alerta temprana de fuga: las combinaciones de respuestas que predicen la salida en 3-6 meses

---

**Parte 4 – Cerrar el ciclo: actuar sobre los datos**

El paso que distingue a las empresas que hacen encuestas útiles de las que no:
- El informe de resultados que comparte con el equipo en las primeras 2 semanas tras la encuesta
- Cómo priorizar qué problemas abordar: no puedes resolver todo a la vez
- El "action planning" en cascada: qué decide RRHH, qué decide el manager, qué decide el equipo
- Cómo comunicar los cambios que se van a hacer (y los que no se van a poder hacer y por qué)
- El check de seguimiento: cómo medir si las acciones tomadas han mejorado el dato

---

**Parte 5 – Implementación para mi empresa**

Dado mi contexto, dame:
- El diseño de encuesta específico para empezar (las primeras 5-8 preguntas para mi situación)
- La cadencia recomendada de encuestas para mi tamaño y situación
- Herramientas recomendadas según mi presupuesto y tamaño de equipo:
  - Sin presupuesto: Google Forms + análisis manual
  - Presupuesto bajo (< 3€/empleado/mes): Typeform, SurveyMonkey
  - Presupuesto medio (3-8€/empleado/mes): Leapsome, Lattice, Personio Engagement
  - Presupuesto alto: Glint, Qualtrics
- Los 3 primeros pasos para esta semana

Termina con las 5 razones por las que los programas de engagement fracasan y cómo evitar cada una desde el diseño.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar el sistema de medición de engagement que detecta el riesgo de fuga antes de que sea tarde y genera datos accionables.',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Estrategia de precios: pricing power y cómo subir precios',
                'description'      => 'Fundamentos de pricing estratégico para empresas: elasticidad de la demanda, modelos de precio por valor, cómo identificar el precio óptimo y cómo subir precios sin perder clientes ni posicionamiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de estrategia especializado en pricing con experiencia en empresas de tecnología, SaaS y servicios B2B. Ayúdame a revisar y mejorar la estrategia de precios de mi empresa.

**Mi contexto:**
- Producto / servicio: [describe qué vendes]
- Modelo de negocio actual: [SaaS mensual / anual / por uso / servicio de suscripción / venta unitaria]
- Precio actual: [precio(s) actuales por plan o servicio]
- Clientes actuales: [número aproximado, segmentos principales]
- Ticket medio (ACV si es B2B): [€]
- Tasa de churn actual: [% mensual o anual]
- Última vez que subiste precios: [cuándo y cuánto]
- Problema principal con la estrategia de precios actual: [precio demasiado bajo vs. competencia / dificultad para subir / demasiados descuentos / no sé si estoy dejando dinero sobre la mesa]

---

**Parte 1 – Los fundamentos del pricing por valor**

Por qué el cost-plus pricing destruye el margen y el potencial de la empresa:
- El error del 90%: "pongo precio basado en mis costes + margen" vs. el precio basado en el valor que percibe el cliente
- Value-based pricing: cómo calcular el valor económico que tu producto entrega al cliente y usarlo como ancla del precio
  - El valor tangible: ahorro de tiempo, reducción de costes, aumento de ingresos — cómo cuantificarlo
  - El valor intangible: tranquilidad, estatus, reducción de riesgo — cómo aproximarlo
- Willingness to pay (WTP): qué es, por qué importa y cómo medirlo sin una encuesta de $50k

**Métodos para estimar la disposición a pagar:**
| Método | Coste | Precisión | Cuándo usarlo |
|---|---|---|---|
| Van Westendorp Price Sensitivity Meter | Bajo | Media | Early stage, productos nuevos |
| Conjoint Analysis | Alto | Alta | Cuando hay múltiples atributos |
| Entrevistas de pricing con clientes | Bajo | Media-alta | Siempre, como complemento |
| Análisis de conversión por cohorte de precio | Bajo (datos propios) | Alta | Cuando tienes datos históricos |
| Experimentos de precio A/B | Medio | Muy alta | Cuando tienes volumen suficiente |

---

**Parte 2 – Elasticidad y cómo usarla**

Explica la elasticidad-precio de la demanda de forma práctica:
- Qué es y cómo calcularla con datos reales de tu empresa
- Productos elásticos vs. inelásticos: ¿en qué categoría está el mío?
- Por qué los productos con alta diferenciación tienen menor elasticidad (y por qué eso es el objetivo)
- Cómo los descuentos frecuentes destruyen la inelasticidad que has construido con la marca

**El cálculo de elasticidad para mi negocio:**
Si tengo datos históricos de precio y demanda, ayúdame a calcular la elasticidad y a interpretar si tengo margen para subir sin impacto significativo en volumen.

---

**Parte 3 – Modelos de pricing para SaaS y servicios**

Los modelos de pricing más efectivos y cuándo usar cada uno:

**Pricing por usuario / por asiento:**
- Ventajas e inconvenientes reales
- Cuándo rompe: cuando el cliente usa workarounds para compartir cuentas

**Pricing por uso (usage-based pricing):**
- La tendencia que más crece en SaaS B2B: por qué alinea incentivos entre proveedor y cliente
- Cómo diseñarlo para que sea predecible para el cliente y proteja tu margen
- Ejemplos: Stripe (% de transacción), Twilio (por mensaje), AWS (por recurso)

**Pricing por resultado (outcome-based):**
- El modelo más avanzado: cobrar en función del valor entregado
- Cuándo tiene sentido y cómo estructurarlo contractualmente

**Pricing de paquetes (bundling):**
- Cómo estructurar los planes para que el del medio sea el más elegido
- El efecto ancla: por qué incluir un plan caro hace que el resto parezca razonable

---

**Parte 4 – Cómo subir precios sin perder clientes**

La parte más delicada. El proceso paso a paso:
- Cuándo hay señales de que el precio está demasiado bajo:
  - Win rate demasiado alto (> 70%: probablemente estás dejando dinero)
  - Clientes que no piden descuento
  - Comparas favorablemente con alternativas más caras sin hacer mucho esfuerzo
  - Márgenes bajo presión por el crecimiento del equipo

**El proceso de subida de precio:**
1. Segmentación: qué clientes son los más inelásticos (los que más valor reciben)
2. Comunicación: cómo anunciar la subida con suficiente antelación y el mensaje correcto
3. Grandfathering: cuándo mantener el precio a los clientes actuales y cuándo no
4. Nuevos clientes primero: por qué la estrategia más segura es subir primero para los nuevos
5. Testing: si tienes volumen, cómo testear la subida antes de aplicarla a todos

**La comunicación de la subida de precio:**
- El email que anuncia una subida de precio que minimiza el churn: estructura y ejemplos
- Lo que nunca hay que decir al anunciar una subida de precio
- Cómo preparar al equipo de CS y ventas para las objeciones

---

**Parte 5 – Evaluación y recomendaciones para mi situación**

Dado mi contexto específico:
- ¿Hay señales de que el precio está demasiado bajo?
- ¿Cuánto margen de subida estimo sin riesgo significativo?
- ¿Qué modelo de pricing se adapta mejor a mi producto y mercado?
- ¿Cuál sería el plan de acción de los próximos 6 meses para optimizar el pricing?

Termina con los 5 recursos que debería estudiar para profundizar en pricing estratégico: libros, frameworks y herramientas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Revisar y optimizar la estrategia de precios para capturar más valor sin perder clientes: desde los fundamentos hasta la ejecución de una subida de precios.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'RGPD para empresas: datos de empleados y cumplimiento',
                'description'      => 'Marco práctico de cumplimiento del RGPD en el ámbito laboral: qué datos puede tratar el empleador, por cuánto tiempo, qué consentimientos son válidos y cómo evitar las multas más frecuentes de la AEPD.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en protección de datos con experiencia en el ámbito laboral y en la gestión de relaciones con la AEPD (Agencia Española de Protección de Datos). Ayúdame a establecer el marco de cumplimiento de RGPD para el tratamiento de datos de mis empleados.

**Mi contexto:**
- Tipo y tamaño de empresa: [startup / PYME / empresa mediana, número de empleados]
- Sector: [tecnología / retail / servicios / healthcare / etc.]
- Tipos de datos de empleados que tratas actualmente: [nóminas / expediente personal / control de presencia / videovigilancia / uso de dispositivos corporativos / geolocalización / salud]
- Herramientas de RRHH y sistemas que usas: [Personio / BambooHR / ADP / otro]
- Situación actual de cumplimiento: [no hemos revisado nada / tenemos política básica / DPO designado / cumplimiento parcial]
- Incidente o motivo que ha generado esta revisión: [nueva contratación masiva / expansión a Europa / auditoría interna / incidente de datos / ninguno, es preventivo]

---

**Parte 1 – Bases legales para el tratamiento de datos de empleados**

Explica cuáles son las bases legales disponibles bajo el RGPD para tratar datos de empleados y cuándo aplica cada una:

**1. Ejecución del contrato (Art. 6.1.b RGPD)**
- Qué cubre: los datos necesarios para gestionar la relación laboral
- Ejemplos: datos bancarios para la nómina, datos de contacto, historial de permisos, evaluaciones de desempeño
- Límite importante: solo cubre lo estrictamente necesario para ejecutar el contrato

**2. Obligación legal (Art. 6.1.c RGPD)**
- Qué cubre: el tratamiento que la ley laboral, tributaria o de SS obliga a hacer
- Ejemplos: retenciones IRPF, cotizaciones a la Seguridad Social, registro de jornada (obligatorio desde 2019), PRL
- Por qué esta base no requiere consentimiento del empleado

**3. Interés legítimo (Art. 6.1.f RGPD)**
- Qué cubre: tratamientos justificados por intereses legítimos del empleador que no prevalezcan sobre los derechos del trabajador
- Ejemplos: videovigilancia de seguridad en instalaciones, monitorización de uso de dispositivos corporativos (con matices)
- El test de ponderación de intereses: cómo documentarlo correctamente
- Por qué el interés legítimo es la base más controvertida en el ámbito laboral

**4. Consentimiento (Art. 6.1.a RGPD) — y por qué rara vez es válido en la relación laboral**
- El problema del consentimiento entre empleador y empleado: la asimetría de poder hace que el consentimiento raramente sea libre
- Cuándo SÍ puede ser la base correcta (datos de fotografía para el directorio interno, por ejemplo)
- Por qué nunca hay que pedir consentimiento cuando existe otra base legal

---

**Parte 2 – Categorías especiales y datos de salud**

Los datos que requieren protección reforzada:
- Qué son los datos de categoría especial en el ámbito laboral: salud, afiliación sindical, origen racial o étnico, vida sexual
- La base legal adicional requerida: Art. 9 RGPD y el Art. 9.2.b (ejecución de obligaciones en el ámbito laboral)
- Casos habituales:
  - Bajas médicas: qué información puede pedir el empleador al médico de empresa vs. al médico de cabecera
  - Discapacidad y adaptaciones razonables: qué datos son necesarios y cuáles exceden lo permitido
  - Pruebas de alcohol/drogas: bajo qué condiciones son legales
  - Cámaras en el lugar de trabajo: las condiciones para que sean conformes al RGPD y a la LOPD-GDD

---

**Parte 3 – Plazos de conservación de datos de empleados**

Uno de los incumplimientos más frecuentes detectados por la AEPD:

| Tipo de dato | Plazo de conservación | Base legal del plazo |
|---|---|---|
| Expediente personal completo | 4 años desde la extinción del contrato | Prescripción de obligaciones laborales (Art. 59 ET) |
| Nóminas y documentos SS | 4 años | Plazos TGSS |
| Documentos tributarios (IRPF) | 4 años | Ley General Tributaria |
| Registro de jornada | 4 años | Real Decreto 1561/1995 |
| Videovigilancia | 30 días máximo (salvo incidente) | Art. 22 LOPD-GDD |
| Datos de candidatos no contratados | 1 año máximo recomendado por AEPD | Finalidad del tratamiento |

Explica cómo implementar una política de retención y eliminación de datos:
- Cómo catalogar los datos por plazo de conservación
- Procedimiento técnico de eliminación (no solo "borrar del servidor")
- Documentación del proceso de eliminación para demostrar cumplimiento

---

**Parte 4 – Obligaciones de información y derechos de los empleados**

Lo que la empresa debe cumplir en materia de transparencia:
- La cláusula informativa en el contrato de trabajo: qué debe incluir y en qué formato
- Derechos que tienen los empleados sobre sus datos: ARSLOP (Acceso, Rectificación, Supresión, Limitación, Oposición, Portabilidad)
- Cómo gestionar una solicitud de ejercicio de derechos: plazos, formato de respuesta y qué hacer cuando la solicitud complica la relación laboral
- La videovigilancia: la "zona informada" — el cartel que muchas empresas olviden poner correctamente

---

**Parte 5 – Las multas más frecuentes de la AEPD en el ámbito laboral y cómo evitarlas**

Los 5 incumplimientos más sancionados en el ámbito laboral:
1. Videovigilancia sin informar a los trabajadores ni a la representación legal
2. Acceso a correo electrónico corporativo de ex-empleados sin protocolo previo
3. Plazos de conservación excesivos (guardar datos de ex-empleados indefinidamente)
4. Uso de cámaras orientadas a controlar el rendimiento (no permitido sin negociación previa)
5. Transferencia de datos a RRHH externalizado sin contrato DPA firmado

Para cada incumplimiento:
- La sanción típica que impone la AEPD (cuantía aproximada)
- La acción correctora que elimina el riesgo

Termina con el plan de cumplimiento para los próximos 90 días adaptado a mi situación, priorizando por nivel de riesgo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Establecer el marco de cumplimiento del RGPD para el tratamiento de datos de empleados con las bases legales correctas y los plazos de conservación adecuados.',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Segmentación de clientes para dar el soporte correcto a cada uno',
                'description'      => 'Usa los datos de tu base de clientes para diseñar niveles de soporte diferenciados que maximizan el impacto con los recursos disponibles y priorizan el tiempo del equipo donde más valor genera.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Head of Customer Success especializado en el diseño de modelos de cobertura y segmentación de clientes para empresas SaaS B2B. Ayúdame a construir el modelo de segmentación que permite dar el nivel de atención correcto a cada cliente.

**Mi contexto:**
- Tipo de producto: [SaaS B2B / plataforma / herramienta / servicio con componente tech]
- Número de clientes actuales: [número]
- ARR total y distribución aproximada: [total ARR, si el 20% de clientes genera el 80% del ARR]
- Tamaño del equipo de CS: [número de CSMs]
- Ratio actual clientes/CSM: [número de clientes por CSM]
- Modelo de soporte actual: [todos reciben lo mismo / hay algo de diferenciación / modelo estructurado]
- Herramientas disponibles: [CRM, tool de CS, datos de uso del producto]
- Problema principal: [el equipo está saturado / clientes pequeños consumen tiempo desproporcionado / los grandes no reciben suficiente atención / no tenemos datos para priorizar]

---

**Parte 1 – Por qué la segmentación es la decisión más importante de CS**

El argumento para convencer a la dirección de invertir en segmentación:
- El efecto Pareto en CS: la distribución habitual de revenue por segmento de cliente y sus implicaciones
- El coste de oportunidad de no segmentar: qué pasa cuando un CSM dedica el mismo tiempo a un cliente de €500/año que a uno de €50.000/año
- Segmentación no es discriminación: cómo comunicar internamente que clientes pequeños recibirán diferente atención (no necesariamente peor)
- La relación entre segmentación, NRR y capacidad de escala del equipo de CS

---

**Parte 2 – Los criterios de segmentación**

Los mejores modelos de segmentación no usan solo ARR. Los criterios relevantes:

**Criterios de valor (lo que el cliente vale para la empresa):**
- ARR o MRR actual
- Potencial de expansión (tamaño de empresa, número de licencias no utilizadas, departamentos no implementados)
- Riesgo de churn (antigüedad, engagement con el producto, señales de insatisfacción)
- Strategic value (clientes que son referencia, que generan referrals, que tienen influencia en el mercado)

**Criterios de complejidad (lo que el cliente requiere del equipo):**
- Número de usuarios o departamentos a gestionar
- Complejidad de la implementación o integración
- Historial de tickets de soporte (clientes que generan más tickets que otros del mismo tamaño)
- Número de stakeholders internos

**Criterios de engagement con el producto (señal de salud):**
- Daily/Monthly Active Users vs. licencias contratadas
- Features activos (los que usan más features tienen más valor percibido y menor churn)
- Tiempo desde la última sesión (señal de riesgo)

---

**Parte 3 – Los tres segmentos estándar y qué incluye cada uno**

El modelo de tres segmentos que funciona para la mayoría de empresas SaaS B2B:

**Segmento 1 – Enterprise / Strategic (Top 10-20% por ARR)**
- Criterio de entrada: [define el umbral de ARR o criterio compuesto para mi empresa]
- Lo que reciben:
  - CSM dedicado con < 20 cuentas
  - QBRs trimestrales (Quarterly Business Reviews) presenciales o por videoconferencia
  - Executive sponsor de la empresa vendedora
  - Acceso prioritario a soporte técnico y a product management
  - Early access a nuevas funcionalidades

**Segmento 2 – Mid-Market / Growth (30-40% por ARR)**
- Criterio de entrada: [ARR intermedio o combinación de criterios]
- Lo que reciben:
  - CSM con 50-100 cuentas (táctil pero no dedicado)
  - Reviews semestrales (EBRs)
  - Acceso a soporte técnico en horario normal con SLA definido
  - Comunicaciones de producto y webinars

**Segmento 3 – SMB / Tech-touch / Self-serve (50%+ de clientes, 20% del ARR)**
- Criterio de entrada: los clientes que no cumplen los criterios anteriores
- Lo que reciben:
  - Soporte por ticket / email con SLAs estándar
  - Onboarding automatizado (secuencias de email, in-app guides, video tutoriales)
  - Community / foro de usuarios
  - Documentación y base de conocimiento

---

**Parte 4 – Implementar el modelo de segmentación**

El proceso de transición al nuevo modelo:
- Cómo hacer la clasificación inicial de toda la base de clientes con los criterios definidos
- Cómo comunicar el nuevo modelo al equipo de CS (el "esto no significa que olvidemos a los pequeños")
- Cómo comunicar a los clientes del segmento SMB que van a tener menos atención directa sin que genere churn
- El proceso de revisión trimestral de segmentos: clientes que suben (expansión) y bajan (contracción)

**Tabla de transición por segmento:**

| Acción | Enterprise | Mid-Market | SMB |
|---|---|---|---|
| Comunicación del cambio | Llamada personal del VP CS | Email personalizado del CSM | Email de producto |
| Plazo de transición | 3 meses | 2 meses | 1 mes |
| Riesgo de churn esperado | Bajo (mejoran) | Bajo-medio | Medio (los que esperaban más atención) |
| Mitigación | Presentar el nuevo CSM dedicado | Presentar el plan del año | Activar onboarding automático |

---

**Parte 5 – Métricas de éxito del modelo de segmentación**

Cómo saber si el modelo está funcionando:
- Ratio de CSM por segmento: objetivo por tamaño de empresa
- NRR por segmento: el indicador de si cada segmento está siendo bien atendido
- Churn rate por segmento antes y después de la implementación
- Customer Health Score promedio por segmento
- Tiempo de respuesta de soporte por segmento (¿se están cumpliendo los SLAs diferenciados?)

Dado mi contexto, dame:
- La propuesta de criterios de segmentación específica para mi empresa
- El ratio cliente/CSM objetivo por segmento para mi tamaño de equipo
- Los 3 primeros pasos para implementar el modelo esta semana
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar el modelo de segmentación de clientes que permite dar el nivel de atención correcto a cada uno y maximizar el impacto del equipo de CS.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Productividad extrema para freelancers: el sistema completo',
                'description'      => 'Los sistemas, rutinas y herramientas de los freelancers que facturan el doble trabajando las mismas horas: gestión de proyectos, tiempo, energía y la eliminación del trabajo que no genera ingresos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance sénior que ha construido un negocio unipersonal altamente productivo y rentable, y que ha estudiado los sistemas de productividad que funcionan para freelancers (no para empleados de empresa, que son muy diferentes). Ayúdame a construir mi sistema de productividad.

**Mi perfil:**
- Especialidad: [tipo de trabajo freelance]
- Horas que trabajo actualmente a la semana: [número]
- Facturación mensual actual: [€/mes]
- Distribución del tiempo aproximada: [% trabajo para clientes / % gestión y admin / % captación / % formación]
- Principal problema de productividad: [procrastinación / distracciones / scope creep con clientes / dificultad para desconectar / trabajo en horas pico pero flojo en valles / gestión del tiempo entre múltiples proyectos]
- Herramientas que ya uso: [lista tus herramientas]
- Qué has probado que no ha funcionado: [GTD / Pomodoro / bloques de tiempo / etc.]

---

**Parte 1 – La diferencia entre productividad de freelance y productividad de empleado**

Por qué el 90% del consejo de productividad no aplica a freelancers:
- El freelance tiene control total sobre su tiempo: esto es un regalo y una trampa a la vez
- Los 4 problemas únicos de productividad del freelance:
  1. No hay separación entre "trabajo" y "vida": el trabajo se expande para llenar todo el tiempo disponible
  2. El trabajo irregular: semanas de mucho y semanas de poco, con el estrés que genera en ambas
  3. El trabajo no facturable consume más tiempo que el trabajo facturable: el mayor ladrón del ingreso
  4. La soledad y la falta de accountability: sin equipo que te vea trabajar, la disciplina viene solo de dentro
- Por qué el objetivo no es "trabajar más" sino "facturar más con las mismas horas"

---

**Parte 2 – La auditoría de tiempo: dónde se va el dinero**

Antes de optimizar, medir:
- Cómo hacer la auditoría de tiempo de una semana: qué registrar y cómo (Toggl, Clockify, o papel)
- Las 5 categorías de tiempo del freelance y el porcentaje objetivo de cada una:

| Categoría | Descripción | % actual (a calcular) | % objetivo |
|---|---|---|---|
| Trabajo facturable | Lo que cobras directamente | ? | > 60% |
| Prospección | Buscar clientes nuevos | ? | 10-15% |
| Admin | Facturas, emails, contabilidad | ? | < 10% |
| Formación / mejora | Aprender y mejorar | ? | 10% |
| Marketing y visibilidad | Contenido, networking | ? | 10% |

- Cómo identificar las actividades que consumen tiempo sin generar ingresos y que podrían eliminarse, automatizarse o subcontratarse
- El cálculo del coste real del trabajo no facturable: lo que te cuesta en ingresos perdidos cada hora de admin

---

**Parte 3 – El sistema de gestión de proyectos para freelancers**

El sistema mínimo que evita el caos cuando tienes varios proyectos simultáneos:
- La estructura de proyectos que funciona: cada proyecto tiene un espacio, cada tarea tiene un dueño y una fecha
- Cómo gestionar las expectativas del cliente desde el primer día para evitar el scope creep que destroza la productividad
- El ritual de inicio de proyecto: el checklist de onboarding del cliente que aclara expectativas desde el día 1
- Cómo estructurar las entregas para que el cliente no te interrumpa entre hitos

**Herramientas por nivel de complejidad:**
- Freelance simple (1-3 proyectos simultáneos): Notion o Trello con plantilla básica
- Freelance complejo (4+ proyectos): Linear, ClickUp o Asana con automatizaciones
- Con equipo subcontratado: añadir un canal de comunicación dedicado (Slack o Teams)

---

**Parte 4 – Diseñar la semana ideal para mi perfil**

La semana ideal del freelance no es la misma cada semana: hay semanas de producción y semanas de mantenimiento. Cómo diseñar ambas:

**La semana de producción (cuando tienes plazos):**
- Bloques de trabajo profundo (Deep Work): cuántos por semana, cuánto duran, cuándo ponerlos
- Los rituales de entrada y salida que separan el modo trabajo del modo vida sin oficina
- Cómo manejar las interrupciones de clientes durante los bloques de deep work
- El "email en dos veces al día": por qué revisar el email dos veces al día multiplica la productividad

**La semana de mantenimiento (cuando no hay plazos urgentes):**
- Qué hacer con el tiempo cuando no hay trabajo urgente: prospección, formación, mejora del sistema
- Cómo evitar la parálisis productiva de "no sé en qué trabajar hoy"
- El "proyecto de semana lenta": siempre tener un proyecto de mejora listo para estas semanas

---

**Parte 5 – Automatizar y eliminar el trabajo no facturable**

Las automatizaciones con más ROI para freelancers:

**Facturación y gestión financiera:**
- Herramientas de facturación automática con recordatorios de pago (Holded, Billin, FreshBooks)
- Cómo configurar el proceso de onboarding de cliente con firma de contrato y primer pago automático (PandaDoc, DocuSign + Stripe)

**Comunicación con clientes:**
- Plantillas de email para las situaciones repetitivas (presupuesto, revisiones, entregas, retrasos)
- Portal de cliente: cómo centralizar todo en un lugar para eliminar el caos de emails

**Captación:**
- El sistema de seguimiento de propuestas que no requiere memoria: CRM simple (Notion, Pipedrive)
- Cómo reutilizar el 80% de cada propuesta: la estructura modular que tarda 30 minutos en vez de 3 horas

**El plan de acción para mi perfil:**
Dado mi perfil y mis problemas principales, dame:
- Las 3 herramientas que más ROI tienen para mí en los próximos 30 días
- Las 3 rutinas que debo implementar esta semana
- Los 3 procesos que debo automatizar o delegar en los próximos 3 meses

Termina con el cálculo de cuántas horas adicionales al mes podría recuperar implementando estas mejoras y en qué convertirlas: más ingresos, más descanso o ambos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir el sistema de productividad completo para freelancers que maximiza los ingresos facturables y elimina el trabajo que no genera dinero.',
                'vote_score'       => 46,
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
