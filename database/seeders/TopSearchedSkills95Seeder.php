<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills95Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'User Generated Content (UGC): diseñar campañas que escalan',
                'description'      => 'Diseña las mecánicas y campañas que incentivan a los usuarios a crear contenido sobre tu marca de forma orgánica: frameworks de activación, incentivos que funcionan y cómo amplificar el UGC sin perder autenticidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de marketing de comunidad con experiencia en lanzar y escalar programas de UGC para marcas de consumo, ecommerce y SaaS. Ayúdame a diseñar la estrategia de User Generated Content para mi marca.

**Mi contexto:**
- Tipo de empresa y producto: [ecommerce / app / SaaS / marca de consumo / otro]
- Audiencia objetivo: [edad, intereses, redes que más usa]
- Canales actuales más activos: [Instagram / TikTok / LinkedIn / YouTube / Twitter/X]
- Situación actual de UGC: [nada / hay contenido espontáneo que no amplificamos / tenemos programa básico / queremos escalar lo que ya funciona]
- Objetivo del programa UGC: [alcance y awareness / conversión / prueba social para ads / community building]
- Presupuesto disponible para el programa: [€/mes]
- Ejemplo de marca cuyo UGC admiro: [nombre de marca de referencia]

---

**Parte 1 – Por qué el UGC supera al contenido de marca**

El caso de negocio para el UGC con datos:
- Por qué el contenido creado por usuarios convierte entre 2x y 5x más que el contenido de marca (las investigaciones y estudios que lo demuestran)
- El efecto de la prueba social real: la diferencia entre "una marca dice que es buena" y "una persona real como tú dice que es buena"
- El coste de adquisición de contenido: UGC vs. producción propia vs. influencers pagados
- Por qué el UGC funciona especialmente bien para determinados sectores (belleza, fitness, tecnología, viajes) y menos en otros (B2B técnico, healthcare)
- Cuándo NO es el momento de lanzar un programa de UGC: si el producto no está en el punto de "love" de los usuarios, el UGC malo daña más que ayuda

---

**Parte 2 – Los tres tipos de UGC y cómo activar cada uno**

**Tipo 1 – UGC espontáneo (orgánico)**
- Los usuarios que ya hablan de tu marca sin que les hayas pedido nada
- Cómo detectarlo: herramientas de social listening (Mention, Brand24, la búsqueda nativa de cada red)
- Cómo amplificarlo: el protocolo de "share y agradece" que construye comunidad
- Cómo incentivar más UGC espontáneo sin pedirlo explícitamente: experiencia de producto excepcional, packaging share-worthy, momentos de deleite

**Tipo 2 – UGC activado (solicitado)**
- Tú pides activamente a los usuarios que creen contenido
- Formatos de activación con mejor ROI:
  - Review y unboxing (especialmente en ecommerce)
  - Before/After o resultado tangible (fitness, software, educación)
  - Tutorial o "cómo yo uso [producto]"
  - Challenge o hashtag de marca
- Cómo pedir UGC sin que suene a "haznos publicidad gratis"

**Tipo 3 – UGC de creadores (semi-profesional)**
- La diferencia entre influencer marketing tradicional y UGC de creadores: los creadores de UGC hacen el contenido para que tú lo uses como ad, no para publicarlo en su perfil
- Por qué el UGC de creadores está sustituyendo a los anuncios produccionalmente caros en Meta y TikTok
- Cómo encontrar creadores de UGC para tu categoría: plataformas (Billo, Insense, Cohley) y outreach directo

---

**Parte 3 – Diseñar el programa de incentivos**

Los incentivos que generan UGC real (y los que solo generan contenido de mala calidad):

**Incentivos que funcionan:**
- Descuentos y créditos: cómo estructurarlos para que el incentivo sea proporcional al esfuerzo del creador
- Reconocimiento y visibilidad: el poder de "republicar" en la cuenta de la marca para audiencias pequeñas
- Acceso exclusivo: early access a productos, eventos, comunidades privadas
- Programa de embajadores con beneficios acumulativos

**Incentivos que no funcionan (o que generan contenido malo):**
- Premios al azar (baja motivación, no selecciona a los más comprometidos)
- Incentivos demasiado pequeños vs. el esfuerzo requerido
- Concursos mal diseñados que generan contenido masivo de baja calidad

**El programa de UGC por niveles:**
Diseña un programa de tres niveles para mi marca:
| Nivel | Criterio de entrada | Beneficio | Contenido esperado |
|---|---|---|---|
| Fan | Publicar 1 pieza / mes | 10% descuento | Review o foto de producto |
| Embajador | 3 piezas / mes, > 1.000 seguidores | 25% + productos | Tutorial, before/after |
| Partner | 5+ piezas / mes, comunidad activa | Comisión + productos | Contenido exclusivo |

---

**Parte 4 – Legalidad y permisos del UGC**

Lo que muchas marcas ignoran y les crea problemas legales:
- Por qué necesitas permiso explícito del creador para usar su contenido en anuncios pagados
- Diferencia entre republicar en redes sociales (más permisivo) y usar en ads de Meta / TikTok (requiere permiso escrito)
- El proceso de solicitud de permisos: cómo pedirlo de forma que casi todos digan sí
- Qué incluir en los terms del programa de embajadores para tener los permisos necesarios
- La normativa española de publicidad encubierta: cuándo el creador tiene que declarar que el contenido es publicidad (#publi, #ad)

---

**Parte 5 – Amplificar y medir el UGC**

Cómo convertir el UGC en un activo estratégico de marketing:
- El flujo de UGC como creatividad de anuncios: el proceso para pasar de contenido de usuario a anuncio activo en Meta / TikTok en menos de 48 horas
- Cómo integrar el UGC en la web: página de reviews, galería de Instagram en el producto, testimonios en la ficha de producto
- Cómo usar el UGC en el email marketing: el email de "mira lo que dicen sobre nosotros" que genera re-engagement

**Métricas del programa de UGC:**
- Volumen: piezas de UGC generadas por mes
- Calidad: tasa de UGC que supera el umbral mínimo de calidad para ser amplificado
- Alcance generado por UGC vs. alcance de contenido propio
- Conversión: tasa de conversión de las páginas de producto con UGC vs. sin UGC
- ROAS de anuncios con creatividades UGC vs. creatividades de producción propia

Dado mi contexto, dame el plan de los primeros 90 días para lanzar el programa de UGC desde cero:
- Semana 1-2: activar el UGC espontáneo que ya existe
- Semana 3-6: lanzar la primera campaña de UGC activado
- Mes 2: construir el programa de embajadores básico
- Mes 3: integrar UGC como creatividad de anuncios pagados
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar y lanzar un programa de UGC que genera contenido auténtico de usuarios y lo convierte en activo de marketing y conversión.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Monitorización y alertas en producción: el stack completo',
                'description'      => 'Construye el stack de observabilidad con Datadog, Grafana o Prometheus que detecta problemas antes que el cliente: métricas, logs, trazas y alertas que despiertan al equipo solo cuando es necesario.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Site Reliability Engineer (SRE) con experiencia en construir sistemas de observabilidad para startups y scale-ups que necesitan operar con equipos pequeños sin sacrificar la fiabilidad. Ayúdame a diseñar e implementar el stack de monitorización para mi producto.

**Mi contexto:**
- Stack tecnológico: [lenguajes, framework, base de datos, infraestructura]
- Infraestructura de deployment: [AWS / GCP / Azure / VPS / Kubernetes / serverless]
- Número de servicios / microservicios: [1 monolito / X microservicios]
- Tráfico y escala: [usuarios activos, requests/día]
- Situación actual de monitorización: [ninguna / solo uptime check / CloudWatch / Datadog básico]
- Presupuesto disponible: [€/mes para herramientas de monitorización]
- El incidente más reciente que no detectamos a tiempo: [describe el tipo de problema]
- Tamaño del equipo de ingeniería: [número de devs que podrían recibir alertas]

---

**Parte 1 – Los tres pilares de la observabilidad**

Explica los conceptos fundacionales que definen un sistema de observabilidad completo:

**1. Métricas (el qué está pasando)**
- Qué son las métricas y para qué sirven: valores numéricos agregados en el tiempo
- Los cuatro tipos de señales doradas (Google SRE Book):
  - Latencia: cuánto tarda en responder el sistema
  - Tráfico: cuántas peticiones procesa por segundo
  - Errores: tasa de peticiones que fallan
  - Saturación: qué tan "lleno" está el sistema (CPU, memoria, disco, cola)
- Por qué empezar por las señales doradas antes de añadir métricas de aplicación más específicas

**2. Logs (el por qué está pasando)**
- Qué son y cuándo son la herramienta correcta vs. cuándo las métricas son suficientes
- El principio de logs estructurados: por qué `{"level":"error","user_id":"123","action":"payment"}` es infinitamente más útil que `"Error al procesar el pago del usuario 123"`
- Los niveles de log y cuándo usar cada uno: DEBUG / INFO / WARN / ERROR / FATAL
- Cómo evitar el problema del "log spam": demasiados logs que hacen imposible encontrar el problema real

**3. Trazas distribuidas (el camino del request)**
- Qué son las distributed traces y cuándo son necesarias (principalmente en arquitecturas de microservicios)
- OpenTelemetry: el estándar abierto que evita el vendor lock-in
- Cómo implementar tracing básico en [mi stack] con OpenTelemetry

---

**Parte 2 – Elegir las herramientas correctas**

Comparativa de las opciones más usadas según presupuesto y contexto:

**Para equipos sin presupuesto (open source self-hosted):**
- Prometheus + Grafana: el stack estándar de facto para métricas y dashboards
  - Cómo instalar y configurar en mi infraestructura
  - Los exporters más importantes para mi stack
  - Alertmanager: cómo configurar las alertas
- Loki: logs con la misma interfaz de Grafana (el "Prometheus de los logs")
- Tempo: trazas distribuidas en el ecosistema Grafana

**Para equipos con presupuesto (SaaS):**
- Datadog: la opción más completa pero más cara — cuándo vale la pena el precio
- New Relic: buena opción de precio con modelo de usuario (no de datos)
- Grafana Cloud: el ecosistema open source como SaaS con tier gratuito generoso

**Para AWS específicamente:**
- CloudWatch como base + cuándo completarlo con Datadog o Grafana

**Mi recomendación para tu presupuesto y contexto:**
Basándome en mi situación, dame la recomendación concreta de herramientas con el coste estimado.

---

**Parte 3 – Los dashboards que necesitas**

Diseña los dashboards que el equipo debe tener antes de cualquier lanzamiento:

**Dashboard 1 – System Overview (para todos en el equipo)**
- Las 4 señales doradas en tiempo real
- Uptime de los servicios críticos
- Número de errores por minuto en las últimas 24h
- Latencia p50, p95, p99 de los endpoints más importantes

**Dashboard 2 – Business Metrics (para el equipo de producto)**
- Usuarios activos en tiempo real
- Tasa de conversión de los flujos críticos (registro, pago, activación)
- Revenue metrics en tiempo real (cuando es posible)

**Dashboard 3 – Infrastructure (para el equipo de ops)**
- CPU y memoria de los servidores
- Estado de la base de datos (conexiones, queries lentas, tamaño)
- Estado de las colas (longitud, tiempo de procesamiento)
- Estado de las APIs externas de las que dependemos

---

**Parte 4 – Alertas que funcionan**

El problema del alert fatigue: cuando hay demasiadas alertas, el equipo deja de hacerles caso. Cómo diseñar alertas que solo interrumpen cuando es necesario:

**Los principios del diseño de alertas:**
- Una alerta solo tiene sentido si requiere acción inmediata por parte de una persona
- Alertas basadas en síntomas (lo que experimenta el usuario) vs. causas (lo que pasa internamente): las de síntomas son más útiles
- Alerta vs. ticket vs. log: cómo elegir el canal correcto según la urgencia

**Las alertas mínimas que necesitas antes de salir a producción:**

| Alerta | Condición | Urgencia | Canal |
|---|---|---|---|
| Site down | Uptime < 99% durante 2 min | Crítica | PagerDuty / SMS |
| Error rate alto | > 5% de requests dan error 5xx | Alta | Slack + PagerDuty |
| Latencia alta | p99 > 3 segundos durante 5 min | Alta | Slack |
| Disco casi lleno | > 85% de uso | Media | Slack |
| Cola acumulada | > 1000 mensajes sin procesar | Media | Slack |
| Queries lentas | > 10 queries > 2 segundos / min | Baja | Ticket |

**Cómo configurar on-call sin destruir al equipo:**
- Rotación semanal de on-call: cómo organizarla con equipos pequeños
- La política de silencio nocturno: qué alertas pueden esperar hasta mañana
- Post-mortems sin culpa: el proceso que convierte los incidentes en aprendizaje

---

**Parte 5 – Plan de implementación progresivo**

No intentes implementar todo a la vez. El plan en cuatro fases:

**Fase 1 (esta semana): Uptime y errores básicos**
- Implementar un uptime check externo (Better Uptime, UptimeRobot — gratuito)
- Configurar alertas de error rate desde los logs existentes
- Objetivo: saber antes que el cliente cuando el sitio está caído

**Fase 2 (semana 2-3): Métricas de aplicación**
- Instalar el agente de la herramienta elegida
- Configurar las 4 señales doradas
- Crear el primer dashboard de System Overview

**Fase 3 (mes 2): Logs estructurados**
- Migrar los logs a formato estructurado (JSON)
- Centralizar los logs en la herramienta de observabilidad
- Crear las primeras queries de log para detectar patrones de error

**Fase 4 (mes 3+): Madurez**
- Añadir tracing distribuido si la arquitectura lo necesita
- SLOs (Service Level Objectives): definir los objetivos de fiabilidad del servicio
- Error budgets: cuánto margen de error puede consumir el equipo antes de que sea prioritario mejorar la fiabilidad

Termina con los 5 comandos / queries más útiles en [herramienta elegida] para diagnosticar un incidente en producción en los primeros 5 minutos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar e implementar el stack de observabilidad completo para detectar problemas en producción antes que el cliente y resolver incidentes rápidamente.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Tipografía como herramienta de diseño: guía completa',
                'description'      => 'Domina los principios tipográficos que comunican personalidad de marca: type pairing, escala tipográfica, legibilidad en pantalla y los criterios para tomar decisiones tipográficas que el equipo pueda seguir.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador tipográfico con experiencia en el diseño de sistemas tipográficos para marcas digitales y productos web. Ayúdame a tomar las decisiones tipográficas correctas para mi proyecto y a documentarlas como parte del design system.

**Mi contexto:**
- Tipo de proyecto: [web app / sitio web de empresa / ecommerce / app móvil / marca personal]
- Personalidad de la marca que quiero comunicar: [moderna y técnica / cálida y cercana / premium y sofisticada / juguetona y creativa / otro]
- Audiencia principal: [profesionales B2B / consumidores / jóvenes / senior / global]
- Idiomas que debe soportar: [español / inglés / otros con caracteres especiales]
- Fuentes actuales (si las hay): [fuentes que usas ahora o que te han gustado]
- Restricciones: [solo fuentes de Google Fonts / presupuesto para licencias de fuentes / fuentes de la marca ya definidas]
- Contextos de uso principalmente: [app web en pantalla / mobile-first / también materiales impresos]

---

**Parte 1 – Cómo la tipografía comunica antes de que el usuario lea**

El impacto emocional de la tipografía antes de la lectura:
- Por qué la tipografía es el primer elemento que comunica la personalidad de la marca (incluso antes del color)
- La diferencia de percepción entre las categorías tipográficas:
  - Serif: tradición, autoridad, sofisticación, confianza (The New York Times, Vogue, Harvard)
  - Sans-serif: modernidad, claridad, accesibilidad, tecnología (Apple, Google, Airbnb)
  - Display / Script: personalidad, creatividad, calidez, artesanía
  - Monospace: técnica, precisión, código, honestidad (GitHub, Linear)

- El test de la percepción: cómo evaluar si una fuente comunica los valores de mi marca antes de usarla
- Los errores tipográficos más comunes que dañan la percepción de marca:
  - Demasiadas fuentes (el máximo recomendado y por qué)
  - Fuentes que contradicen el posicionamiento (Comic Sans en una app de finanzas)
  - Tamaños demasiado pequeños para la audiencia objetivo

---

**Parte 2 – Type pairing: combinar fuentes que funcionan juntas**

La ciencia y el arte de combinar fuentes:

**Los tres enfoques de type pairing:**

1. **Contraste máximo**: Serif para títulos + Sans-serif para cuerpo (o viceversa)
   - Por qué funciona: el contraste crea jerarquía visual clara
   - Ejemplos clásicos que puedo estudiar
   - Cómo evaluar si el contraste es suficiente pero no discordante

2. **Superfamilia tipográfica**: dos variantes de la misma familia (ej. Roboto + Roboto Slab)
   - Ventajas: coherencia garantizada, menos decisiones
   - Cuándo elegir este enfoque

3. **Misma categoría, personalidades diferentes**: dos sans-serifs con carácter diferente
   - El mayor riesgo: que las fuentes sean demasiado similares para distinguirlas
   - Cómo crear contraste dentro de la misma categoría

**Para mi proyecto, recomiéndame:**
- 3 combinaciones de fuentes ordenadas de mayor a menor adecuación a mi personalidad de marca
- Para cada combinación: qué usar para títulos, subtítulos, cuerpo y texto de interfaz
- Dónde encontrar cada fuente y si es gratuita o de pago

---

**Parte 3 – Escala tipográfica: el sistema que crea armonía**

La escala tipográfica es el conjunto de tamaños de fuente que usa el diseño. Sin escala definida, los tamaños son arbitrarios y el diseño pierde armonía:

**Escalas matemáticas más usadas:**

| Escala | Ratio | Tamaños resultantes (base 16px) | Cuándo usar |
|---|---|---|---|
| Minor Second | 1.067 | 12, 13, 14, 15, 16, 17, 18... | Diseños muy compactos |
| Major Second | 1.125 | 12, 13.5, 15, 17, 19, 21... | UI compacta |
| Minor Third | 1.2 | 11, 13, 16, 19, 23, 28... | La más usada en web |
| Major Third | 1.25 | 10, 13, 16, 20, 25, 31... | Buen contraste |
| Perfect Fourth | 1.333 | 9, 12, 16, 21, 28, 37... | Alto contraste, pocos niveles |
| Golden Ratio | 1.618 | 10, 16, 26, 42... | Solo para landing pages o marketing |

- Cómo definir la escala para mi proyecto: tamaño base, ratio y cuántos niveles
- Cómo nombrar los tamaños en el design system: body-sm, body-md, heading-sm, heading-md, display
- Cómo implementar la escala en Figma con variables de tipografía

---

**Parte 4 – Legibilidad en pantalla**

Los factores técnicos que afectan a la legibilidad del texto en interfaces digitales:

**Tamaño mínimo legible:**
- Para cuerpo de texto en web desktop: 16px (14px es el mínimo absoluto)
- Para cuerpo en móvil: 16px (el sistema iOS/Android escala a partir de aquí)
- Para labels e información secundaria: 12-13px (pero nunca información crítica a este tamaño)

**Longitud de línea (measure):**
- La regla de los 45-75 caracteres por línea para lectura cómoda
- Cómo calcularla y cómo aplicarla con `max-width` en CSS
- En móvil: entre 30-40 caracteres por línea es suficiente

**Interlineado (line-height):**
- Cuerpo de texto: 1.5-1.6x el tamaño de fuente
- Títulos: 1.1-1.3x (los títulos grandes necesitan menos interlineado)
- Por qué usar valores relativos (1.5) en lugar de valores fijos (24px) en CSS

**Contraste de color:**
- WCAG 2.1: contraste mínimo 4.5:1 para texto normal, 3:1 para texto grande
- Cómo verificar el contraste: herramientas y el plug-in de Figma
- Por qué el gris claro sobre blanco que tanto se usa puede ser problemático para la accesibilidad

---

**Parte 5 – Documentar el sistema tipográfico**

La documentación que hace que el equipo siga el sistema:
- Qué debe incluir la documentación tipográfica del design system:
  - Las fuentes elegidas con justificación y dónde descargarlas
  - La escala tipográfica con nombres y valores en px y rem
  - Interlineado y espaciado para cada nivel
  - Casos de uso de cada nivel tipográfico (H1 solo para el título principal de la página, nunca para subheadings)
  - Combinaciones prohibidas (texto blanco sobre fondo amarillo, sans-serif en un bloque de texto largo bajo WCAG)

- Cómo crear los estilos de texto en Figma y cómo sincronizarlos con el código
- El handoff de tipografía a desarrollo: las variables CSS que deben definirse

Dame como resultado el sistema tipográfico inicial para mi proyecto con:
- Las fuentes recomendadas con alternativas gratuitas si la primera opción es de pago
- La escala tipográfica completa con los 6-8 niveles que necesito
- Los valores de interlineado y espaciado para cada nivel
- Las instrucciones para implementarlo en CSS con variables personalizadas
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar el sistema tipográfico completo para un proyecto digital: selección de fuentes, escala, legibilidad y documentación para el design system.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Propuesta de ventas que se vende sola',
                'description'      => 'Diseña el documento de propuesta que el cliente abre, lee y firma sin necesitar más reuniones: estructura narrativa, contenido que elimina objeciones, diseño que comunica profesionalismo y el proceso de seguimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de ventas B2B especializado en propuestas de alto valor que ha analizado cientos de propuestas ganadoras y perdedoras. Ayúdame a crear una propuesta de ventas que cierra más oportunidades con menos reuniones de seguimiento.

**Mi contexto:**
- Tipo de venta: [SaaS / servicios de consultoría / agencia / servicios profesionales / otro]
- Ticket medio de la propuesta: [€]
- Ciclo de venta típico: [semanas desde el primer contacto hasta la decisión]
- Decisores habituales: [CEO / CTO / CMO / comité de compras / otro]
- Situación actual: [no tenemos plantilla / usamos PowerPoint sin estructura definida / tenemos propuesta pero el cierre es bajo / queremos mejorar el proceso]
- Principal objeción que recibimos después de enviar la propuesta: [el precio / no hay urgencia / necesitan aprobación interna / comparan con competidores]
- Herramientas disponibles: [Google Docs / Notion / PandaDoc / Proposify / PowerPoint]

---

**Parte 1 – Por qué la mayoría de propuestas no cierran**

Los errores más frecuentes antes de hablar de estructura:
- El error de "catálogo de servicios": la propuesta que habla de lo que haces, no de lo que el cliente consigue
- El error de "lista de precios sin contexto": el precio que aparece sin haber establecido antes el valor
- La propuesta que llega demasiado pronto: cuándo enviar una propuesta antes de tiempo destruye el deal
- La propuesta que llega demasiado tarde: el momentum se pierde si tardas más de 48h desde la reunión de discovery
- El documento de 30 páginas que nadie lee: por qué las propuestas largas cierran peor que las cortas

---

**Parte 2 – La estructura narrativa que cierra**

La propuesta que cierra tiene una narrativa, no un índice. Esta es la estructura:

**Sección 1 – El problema (2-3 párrafos)**
- No empieces hablando de tu empresa. Empieza hablando del problema del cliente
- El resumen del problema tal como lo articuló el cliente en la reunión de discovery
- Las consecuencias del problema si no se resuelve: el coste de no actuar
- Cómo hacer que el cliente sienta que "esto me han entendido perfectamente"

**Sección 2 – La visión del éxito (1-2 párrafos)**
- Cómo se ve el mundo del cliente cuando el problema está resuelto
- Los indicadores de éxito concretos: qué métrica mejora, en cuánto, en qué plazo
- La frase que hace que el cliente piense "sí, eso es exactamente lo que quiero"

**Sección 3 – Tu solución (el cuerpo de la propuesta)**
- Qué vas a hacer (no qué eres o qué ofreces en general)
- Las fases del proyecto con entregables concretos por fase
- Qué NO incluye la propuesta: fundamental para evitar malentendidos post-firma
- El "¿por qué nosotros?": solo aquí hablas de tu empresa, y solo lo que es relevante para este cliente

**Sección 4 – La prueba social relevante**
- Un caso de éxito de un cliente similar (no el más impresionante, sino el más parecido al cliente objetivo)
- Los resultados concretos: no "mejoramos el rendimiento" sino "redujimos el CAC un 34% en 90 días"
- 2-3 testimonios cortos y específicos

**Sección 5 – Inversión y condiciones**
- El precio presentado como "inversión", no como "coste"
- Contexto de valor antes del precio: el ROI esperado que justifica la inversión
- Opciones de precio (si aplica): máximo 3 opciones, con el del medio como la recomendada
- Condiciones de pago y proceso de contratación
- La garantía o compromiso de resultado si tienes uno

**Sección 6 – Próximos pasos**
- Una sola acción clara para el cliente: firma aquí, reserva una llamada, o responde este email
- La fecha límite de validez de la propuesta (crea urgencia sin ser presionante)
- Lo que pasa después de que el cliente dice sí

---

**Parte 3 – El diseño que comunica profesionalismo**

Una propuesta bien diseñada gana sobre una mejor escrita pero mal presentada:
- Portada: qué incluir (logo del cliente, nombre del contacto, fecha, título del proyecto)
- La regla del "una idea por página": por qué las páginas con mucho texto pierden al lector
- Jerarquía visual: cómo usar tamaños, colores y espacio en blanco para guiar la lectura
- Los elementos visuales que añaden valor: tablas comparativas, cronogramas, diagrama del proceso
- Los elementos que restan profesionalismo: stock photos genéricas, tablas de Excel pegadas, texto justificado con espacios irregulares

---

**Parte 4 – El proceso de envío y seguimiento**

La propuesta es solo el documento. El proceso alrededor determina el cierre:
- El email de envío: las 3 líneas que aumentan la tasa de apertura y el engagement
- El tracking: cómo saber cuándo el cliente ha abierto la propuesta y cuánto tiempo ha pasado en cada sección (PandaDoc, Proposify, DocSend)
- El seguimiento después de abrir: el timing correcto y el mensaje que reabre la conversación
- Cómo gestionar el silencio: el protocolo de seguimiento cuando el cliente desaparece
- La negociación del precio: cómo responder a "está un poco caro" sin bajar el precio inmediatamente

---

**Parte 5 – La propuesta para mi tipo de venta**

Dado mi contexto específico, dame:
- La estructura adaptada para mi tipo de venta y ticket (una propuesta de servicios de consultoría de €50k no tiene la misma estructura que una de software de €5k/año)
- Las 3 secciones más críticas para mi ciclo de venta y por qué
- Las 2-3 objeciones más frecuentes que recibo y cómo abordarlas dentro del documento antes de que el cliente las haga
- La herramienta recomendada para crear y enviar propuestas según mi presupuesto y volumen

Escríbeme también un borrador de la Sección 1 (el problema) y la Sección 2 (visión del éxito) para mi contexto como ejemplo aplicado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear la propuesta de ventas que maximiza la tasa de cierre: estructura narrativa, contenido que elimina objeciones y proceso de seguimiento que mantiene el momentum.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'NRR y expansión de revenue: la métrica que predice el éxito SaaS',
                'description'      => 'Entiende y gestiona el Net Revenue Retention desde producto: qué lo impulsa, cómo medir la expansión de revenue, los modelos de pricing que la facilitan y las palancas de producto que mueven el NRR hacia arriba.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product leader con experiencia en SaaS B2B que ha gestionado el NRR como métrica de producto y ha diseñado las estrategias de expansión de revenue que impulsaron el crecimiento de la empresa. Ayúdame a entender y gestionar el NRR desde mi rol de producto.

**Mi contexto:**
- Tipo de producto SaaS: [herramienta de productividad / plataforma de datos / solución vertical / herramienta de marketing / etc.]
- Modelo de pricing actual: [por usuario / por uso / por feature / freemium / flat rate]
- ARR actual y distribución de clientes: [total, segmentación principal]
- NRR actual (si lo sabes): [%]
- Churn rate actual: [%]
- Expansión revenue como % del ARR: [si lo mides]
- Principal fuente de expansión actual: [upsell a plan superior / cross-sell / más usuarios / más uso]

---

**Parte 1 – NRR: la métrica que los inversores miran primero**

Explica el NRR con precisión:
- Definición exacta: Net Revenue Retention = (MRR inicio del período + Expansión - Contracción - Churn) / MRR inicio del período × 100
- Por qué el NRR > 100% es el indicador de que un SaaS puede crecer sin adquirir nuevos clientes
- El impacto del NRR en la valoración de la empresa: los múltiplos de ARR que consiguen empresas con NRR > 120% vs. < 100%
- Los benchmarks de NRR por segmento de mercado:

| Segmento | NRR excelente | NRR bueno | NRR preocupante |
|---|---|---|---|
| SMB (< 50 empleados) | > 95% | 85-95% | < 85% |
| Mid-Market | > 105% | 95-105% | < 95% |
| Enterprise | > 115% | 105-115% | < 105% |
| PLG / Bottom-up | > 110% | 100-110% | < 100% |

- La diferencia entre NRR bruto (sin nuevos clientes de expansión inorgánica) y NRR neto: cuál reportar y por qué

---

**Parte 2 – Descomponer el NRR: identificar dónde mejorar**

El NRR es un resultado. Para mejorarlo, hay que entender sus componentes:

**Churn:** la destrucción de revenue
- Logo churn vs. revenue churn: cuál es más importante y por qué
- Las causas principales de churn en SaaS y cómo el equipo de producto puede reducirlas:
  - Falta de adopción: el cliente pagó pero no usó el producto suficiente para percibir valor
  - Competidor con mejor precio-valor: cuándo el churn por competidores es una señal de producto, no solo de pricing
  - Cambio de prioridades en el cliente: el churn que no puedes evitar y en el que no vale la pena invertir

**Contracción:** revenue que se reduce sin perder al cliente
- Downgrade a plan inferior: señal de que el cliente no percibe suficiente valor para justificar el precio actual
- Reducción de usuarios o uso: señal de abandono parcial que hay que detectar a tiempo

**Expansión:** el motor del NRR > 100%
- Las tres vías de expansión y cómo el producto las habilita o bloquea:
  1. Upsell (plan superior): el cliente sube de plan porque necesita más funcionalidades o capacidad
  2. Cross-sell (producto adicional): el cliente compra un segundo producto o módulo
  3. Seat expansion: el cliente añade más usuarios o licencias

---

**Parte 3 – Los modelos de pricing que impulsan la expansión natural**

El pricing es la palanca de producto con mayor impacto en el NRR:

**Usage-based pricing (UBP):** el más poderoso para NRR
- Por qué el UBP crea expansión natural: el cliente que crece también te paga más
- Cómo diseñar el UBP para que no genere fricción en el crecimiento del cliente
- Las métricas de uso que mejor correlacionan con el valor entregado (y son las mejores para cobrar)
- Los riesgos del UBP: predictibilidad de ingresos para el cliente y para ti

**Seat-based pricing:**
- Cómo diseñar el pricing por usuario para que la expansión sea natural (precio por usuario que baja en escala)
- El "champion effect": cómo un usuario interno convencido de tu producto convierte a más usuarios

**Feature-gating:**
- Cómo diseñar el mapa de features por plan para que el upgrade sea el camino natural del cliente que crece
- El error de bloquear features de uso frecuente en planes bajos: daña la adopción sin impulsar el upgrade

---

**Parte 4 – Las palancas de producto que mueven el NRR**

Lo que puede hacer el equipo de producto para mejorar el NRR:

**Reducir el churn desde producto:**
- El Time to Value: cuánto tarda el cliente en conseguir su primer resultado con el producto
- El "sticky feature": la funcionalidad que hace que el cliente no pueda imaginarse sin el producto
- El proceso de adopción de features: cómo diseñar la introducción de nuevas funcionalidades para que los clientes existentes las adopten
- Early warning system: las señales de producto que predicen el churn (caída de uso, reducción de sesiones, abandono de features clave)

**Impulsar la expansión desde producto:**
- In-app upgrade prompts: cuándo mostrarlos, cómo diseñarlos para que conviertan sin irritar
- Feature discovery para clientes actuales: cómo asegurarse de que los clientes conocen las funcionalidades de los planes superiores
- Data stories: los informes dentro del producto que muestran al cliente el valor que obtiene y le hacen querer más

---

**Parte 5 – El dashboard de NRR para el equipo de producto**

Las métricas que el equipo de producto debe monitorizar para gestionar el NRR:
- Monthly Active Accounts (no usuarios individuales) por cohort: cuándo empiezan a caer
- Feature adoption rate por plan: señal de qué features no están entregando valor suficiente
- Time to Value por segmento de cliente: dónde está el cuello de botella en el onboarding
- Expansion rate por tipo de expansión: qué palanca (upsell, cross-sell, seats) funciona mejor

**El roadmap orientado al NRR:**
Dado mi contexto, ayúdame a identificar:
- Las 3 iniciativas de producto con mayor impacto potencial en el NRR en los próximos 6 meses
- Cómo presentar el roadmap de NRR al CEO y al equipo de inversores con el lenguaje correcto
- Las métricas de producto que hay que mejorar primero: ¿reducir el churn o aumentar la expansión?

Termina con el modelo de forecasting de NRR simplificado que puedo usar en una hoja de cálculo para proyectar el impacto de diferentes iniciativas antes de priorizarlas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Entender y mejorar el NRR desde el equipo de producto: modelos de pricing, palancas de adopción y expansión de revenue que llevan el NRR por encima del 110%.',
                'vote_score'       => 50,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'MBO vs OKR: gestión por objetivos que la gente acepta',
                'description'      => 'Diferencias reales entre Management by Objectives y OKRs, cuándo usar cada sistema y cómo implementar la gestión por resultados sin crear burocracia que el equipo rechaza.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en organizaciones y sistemas de gestión del rendimiento con experiencia en implementar OKRs en startups y MBOs en empresas más maduras. Ayúdame a elegir e implementar el sistema correcto para mi empresa.

**Mi contexto:**
- Tipo y tamaño de empresa: [startup / scale-up / empresa mediana / grande, número de empleados]
- Etapa de crecimiento: [0-10 empleados / 10-50 / 50-200 / 200+]
- Cultura actual: [muy jerárquica / colaborativa / anárquica / en proceso de cambio]
- Sistema actual: [ninguno / evaluación anual de rendimiento / OKRs que no funcionan / MBOs formales]
- Principal dolor con la gestión actual: [el equipo no sabe en qué enfocarse / los objetivos no se revisan / nadie sabe si están cumpliendo / demasiada burocracia / desconexión entre objetivos individuales y empresa]
- Liderazgo disponible para implementar el sistema: [RRHH dedicado / founders directamente / managers de equipo]

---

**Parte 1 – La historia y las diferencias reales entre MBO y OKR**

Explica la evolución y diferencias con precisión:

**Management by Objectives (MBO) — Peter Drucker, 1954:**
- Origen y filosofía: la idea de que los objetivos deben ser acordados entre el manager y el empleado, no impuestos
- Cómo funciona un ciclo MBO típico: objetivos anuales → revisión semestral → evaluación anual
- La vinculación con la compensación: por qué MBO siempre se vinculó con los bonus y qué problema crea
- Por qué MBO degeneró en "marcar la casilla": los incentivos perversos de los objetivos vinculados a dinero

**Objectives and Key Results (OKR) — Andy Grove / Intel / Google:**
- Origen: cómo Intel y luego Google adaptaron los MBOs para entornos más dinámicos
- La estructura: Objective (dirección, cualitativa, aspiracional) + Key Results (medibles, verificables, con número)
- La regla del 60-70%: por qué un OKR que siempre se cumple al 100% está mal establecido
- La NO vinculación con compensación: el principio más contraintuitivo y por qué es esencial

**La tabla de diferencias:**

| Criterio | MBO | OKR |
|---|---|---|
| Temporalidad | Anual | Trimestral (principalmente) |
| Vínculo con compensación | Sí (habitual) | No (recomendado) |
| Nivel de ambición | Realista y alcanzable | Aspiracional (stretch goals) |
| Quién define los objetivos | Top-down + negociación | Top-down + bottom-up |
| Transparencia | Variable | Alta (todos ven los OKRs de todos) |
| Complejidad de implementación | Alta | Media-alta |
| Para qué tipo de trabajo | Trabajo predecible, roles estables | Trabajo creativo, cambio rápido |

---

**Parte 2 – Cuándo usar MBO y cuándo usar OKRs**

El error más frecuente es implementar OKRs en un contexto que necesita MBOs (o viceversa):

**Usa MBO cuando:**
- Los roles son estables y el trabajo es predecible (manufacturing, operaciones, ventas con proceso definido)
- Quieres vincular los objetivos directamente a la compensación (aunque con cuidado)
- El ciclo de negocio es anual y tiene sentido planificar a 12 meses
- La empresa es grande y necesita alineación jerárquica clara

**Usa OKRs cuando:**
- El trabajo es creativo e innovador (producto, marketing, ingeniería)
- El entorno cambia rápido y los objetivos necesitan revisarse trimestralmente
- Quieres separar la conversación de objetivos de la conversación de compensación
- Buscas alineación bottom-up además de top-down

**La opción híbrida:**
- Por qué muchas empresas usan OKRs para la estrategia y algo similar a MBOs para los roles operativos
- Cómo estructurar el híbrido sin crear confusión

---

**Parte 3 – Implementar OKRs correctamente**

El proceso que funciona vs. el que fracasa:

**Cómo escribir buenos OKRs:**
- El Objective: una frase inspiradora que describe una dirección, no un número. Ejemplos de buenos y malos objectives
- Los Key Results: de 2 a 5 por objective, cada uno con un número verificable. Ejemplos de KRs que funcionan y KRs que son tareas disfrazadas
- La prueba del "¿cómo lo voy a medir?": si no puedes responder esta pregunta, el KR no es un KR

**La cadencia de OKRs que funciona:**
- Trimestral para los OKRs operativos
- Anual para los OKRs estratégicos (que dan dirección a los trimestrales)
- La revisión semanal de OKRs en el 1-a-1: 10 minutos, no una reunión formal
- El check-in mensual: actualizar el progreso y re-evaluar si el objetivo sigue siendo prioritario
- El retrospectivo trimestral: qué funcionó, qué no, qué aprendimos

**Los errores de implementación más frecuentes:**
- Demasiados OKRs: el máximo recomendado es 3-5 objectives con 2-5 KRs cada uno
- OKRs que son listas de tareas, no resultados
- OKRs que nadie revisa hasta el final del trimestre
- Vincular los OKRs a los bonus "para que la gente se los tome en serio"

---

**Parte 4 – Conseguir que el equipo acepte el sistema**

El mayor reto no es el framework, es la adopción:
- Por qué la mayoría de implementaciones de OKRs fallan en el segundo ciclo
- La resistencia más frecuente: "esto es más trabajo burocrático" y cómo responderla
- Cómo involucrar al equipo en la definición de objetivos para que los sienta suyos
- El rol del manager: facilitador de OKRs, no auditor
- Cómo celebrar el progreso sin castigar el no cumplimiento

---

**Parte 5 – Plan de implementación para mi empresa**

Dado mi contexto, dame:
- Mi recomendación: MBO, OKR o híbrido, con la justificación
- El plan de implementación en fases:
  - Fase 1 (mes 1): formación y primeros OKRs de empresa
  - Fase 2 (mes 2-3): cascada a equipos, primer ciclo completo
  - Fase 3 (mes 4-6): ajuste basado en la retrospectiva del primer ciclo
- Las 5 preguntas que debo responder antes de lanzar el primer ciclo de OKRs
- Plantilla de OKR inicial para mi empresa con un ejemplo aplicado a mi contexto

Termina con los 3 libros o recursos que más recomiendo para profundizar en el tema antes de hacer el lanzamiento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Elegir e implementar el sistema de gestión por objetivos correcto para la etapa y cultura de la empresa, y conseguir que el equipo lo adopte.',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Gestión del circulante: liberar caja sin financiación bancaria',
                'description'      => 'Optimiza los días de cobro, pago y rotación de stock para liberar caja de forma permanente: las palancas financieras que mejoran el capital de trabajo sin recurrir a deuda bancaria.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO con experiencia en la optimización del capital de trabajo en empresas de tamaño medio con ciclos de cobro y pago complejos. Ayúdame a diagnosticar y mejorar la gestión del circulante de mi empresa.

**Mi contexto:**
- Tipo de empresa y sector: [manufactura / distribución / servicios B2B / retail / SaaS / otro]
- Facturación anual aproximada: [€/año]
- Margen bruto aproximado: [%]
- Días de cobro actuales (DSO): [número de días de media desde la factura hasta el cobro]
- Días de pago actuales (DPO): [número de días de media desde la recepción de factura hasta el pago a proveedores]
- Días de stock (si aplica): [número de días de stock medio en el almacén]
- Situación de caja actual: [cómoda / ajustada / en tensión / crisis de liquidez]
- Línea de crédito con el banco: [€ de límite, si la tienes y en qué porcentaje la usas]
- Principal problema de circulante: [los clientes pagan tarde / los proveedores cobran rápido / demasiado stock / todo lo anterior]

---

**Parte 1 – El ciclo de conversión de efectivo: el diagnóstico**

Explica el concepto central de la gestión del circulante:
- El Cash Conversion Cycle (CCC) = DSO + DIO (días de inventario) - DPO
- Por qué un CCC positivo significa que la empresa financia a sus clientes y proveedores con su propia caja
- Por qué algunas empresas tienen CCC negativo (Amazon, Mercadona) y qué significa para su modelo de negocio
- El cálculo del CCC para mi empresa con los datos que he dado

**Impacto de mejorar cada palanca en la caja:**
Calcula para mí:
- Cuánta caja se libera si reduzco los DSO en 10 días (con mi facturación)
- Cuánta caja se libera si aumento los DPO en 10 días
- Cuánta caja se libera si reduzco el DIO en 10 días (si aplica a mi negocio)

---

**Parte 2 – Reducir los días de cobro (DSO)**

Las palancas para cobrar antes sin dañar las relaciones con los clientes:

**Antes de facturar:**
- Condiciones de pago en el contrato: por qué negociar las condiciones de pago ANTES de firmar el cliente es la palanca más efectiva
- Anticipos y pagos en hitos: cuándo y cómo pedirlos sin perder el deal
- El análisis de crédito del cliente: por qué evaluar la solvencia antes de darle crédito ahorra más problemas que encontrarlos después

**En la facturación:**
- La factura perfecta: los errores que retrasan el pago (fecha de vencimiento incorrecta, banco equivocado, falta de PO del cliente)
- Facturación inmediata vs. facturación a fin de mes: el impacto de facturar el mismo día que se entrega
- La referencia de compra del cliente: por qué sin el número de orden de compra muchas facturas se retrasan semanas

**En el seguimiento:**
- El proceso de cobro proactivo: contactar antes del vencimiento, no después
- Secuencia de recordatorios: 3 días antes del vencimiento / en el vencimiento / 3 días después / 7 días después
- Cuándo parar de suministrar a un cliente que no paga: el protocolo de escalado
- Las herramientas de gestión de cobros que automatizan el seguimiento

**Incentivos para cobrar antes:**
- Descuento por pronto pago: la fórmula para calcular si el coste del descuento es menor que el coste financiero del retraso
- Domiciliación bancaria (SEPA): para clientes recurrentes, la domiciliación elimina el DSO por completo

---

**Parte 3 – Alargar los días de pago (DPO)**

Cómo optimizar el plazo de pago a proveedores sin dañar las relaciones:
- Por qué alargar el DPO no es lo mismo que pagar tarde: la diferencia entre negociar condiciones y incumplirlas
- Cómo negociar condiciones de pago más largas con proveedores estratégicos: el argumento correcto (no es "no tengo dinero", es "queremos trabajar juntos a largo plazo")
- Proveedores estratégicos vs. proveedores commoditizados: diferente estrategia de pago
- Los programas de Confirming: cómo funcionan y cuándo tienen sentido para el proveedor y para ti

---

**Parte 4 – Optimizar el inventario (DIO) — si aplica**

Para empresas con stock físico:
- Los métodos de valoración de inventario y su impacto en la caja: FIFO vs. LIFO vs. coste medio
- El ABC de proveedores y productos: cómo identificar el 20% del stock que representa el 80% del valor inmovilizado
- Just-in-time vs. buffer de seguridad: el equilibrio entre riesgo de rotura de stock y coste financiero del exceso
- Los productos que hay que liquidar: el análisis de rotación lenta y el coste de mantenerlos vs. liquidarlos con descuento

---

**Parte 5 – El plan de mejora para los próximos 90 días**

Dado mi diagnóstico inicial, dame:
- Las 3 iniciativas con mayor impacto en la caja en los próximos 30 días
- El objetivo de CCC al que debo aspirar en 90 días (comparado con benchmarks de mi sector)
- El impacto esperado en caja de las mejoras propuestas (en €)
- Cuándo tiene sentido hablar con el banco para aumentar la línea de crédito vs. cuándo es mejor mejorar la gestión del circulante primero
- El cuadro de mando semanal que debo revisar para monitorizar el circulante:
  - Saldo de caja disponible
  - Saldo de deudores por antigüedad
  - Saldo de acreedores por vencimiento
  - Previsión de caja a 4 semanas (el modelo de forecasting mínimo viable)

Termina con el análisis de si mi situación actual de caja requiere acción inmediata o si la mejora puede ser gradual.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diagnosticar y mejorar la gestión del circulante para liberar caja permanente: reducir DSO, alargar DPO y optimizar el inventario.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Política de uso aceptable (AUP) para tu SaaS',
                'description'      => 'Redacta las condiciones de uso que protegen al proveedor SaaS frente a abusos sin ahuyentar a los clientes legítimos: qué cubrir, cómo redactarlo en lenguaje claro y cómo hacer cumplirlo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho tecnológico y en la redacción de contratos para plataformas SaaS. Ayúdame a redactar o revisar la Política de Uso Aceptable (AUP) de mi plataforma.

**Mi contexto:**
- Tipo de SaaS: [describe brevemente qué hace tu plataforma]
- Modelo de negocio: [B2B / B2C / marketplace / API as a service]
- Usuarios típicos: [empresas grandes / PYMES / particulares / developers]
- Geografía principal de usuarios: [España / Europa / global]
- Riesgos principales que quiero cubrir: [spam / contenido ilegal / abuso de los recursos / competencia / scraping / uso no autorizado de la API]
- ¿Tienes ya un AUP o Terms of Service?: [sí, quiero revisarlo / no, necesito empezar desde cero]
- Incidente que ha motivado esta revisión: [si hay alguno]

---

**Parte 1 – Por qué el AUP es diferente de los Términos de Servicio**

Aclara la estructura legal correcta de la documentación de una plataforma SaaS:

- **Terms of Service (ToS) / Contrato de Servicio:** el contrato principal que regula la relación comercial (precio, pago, duración, propiedad intelectual, limitación de responsabilidad)
- **Acceptable Use Policy (AUP) / Política de Uso Aceptable:** las reglas sobre cómo se puede (y no se puede) usar el servicio
- **Privacy Policy:** cómo se tratan los datos personales (obligatoria bajo RGPD)
- **SLA (Service Level Agreement):** compromisos de disponibilidad y soporte

Por qué mantenerlos separados:
- Actualizaciones más sencillas (el AUP cambia más frecuentemente que el contrato base)
- Referencia más clara en los incidentes de abuso
- El AUP puede incorporarse por referencia al contrato principal

---

**Parte 2 – Las secciones esenciales del AUP**

Diseña la estructura completa del AUP para mi plataforma:

**Sección 1 – Introducción y ámbito**
- A quién aplica: el usuario, los usuarios de su cuenta (sus empleados o clientes)
- Cómo se incorpora al contrato principal
- Qué pasa cuando el AUP se actualiza: obligación de notificación y de aceptación

**Sección 2 – Usos prohibidos**
Redacta la lista de usos prohibidos adaptada a mi tipo de plataforma, cubriendo:
- Contenido ilegal bajo la ley española y europea (CSAM, contenido que incita a la violencia, material protegido por derechos de autor)
- Spam y comunicaciones comerciales no solicitadas (con referencia a la LSSICE española)
- Phishing, fraude y suplantación de identidad
- Vulneración de sistemas de terceros (hacking, DDoS) usando la plataforma como vector
- Violaciones de privacidad: recopilación de datos personales sin consentimiento, raspado de datos de usuarios
- Abuso de los recursos de la plataforma: consumo desproporcionado de API, comportamiento que degrada el servicio para otros
- Scraping del contenido o base de datos de la plataforma
- Uso para entrenar modelos de IA sin autorización expresa (cláusula creciente relevancia)
- Resale no autorizado o sublicenciamiento del servicio

**Sección 3 – Usos restringidos que requieren autorización**
- Los usos legítimos pero que requieren aprobación previa (volúmenes de API muy altos, integraciones de terceros, uso gubernamental)
- Cómo solicitar la autorización

**Sección 4 – Responsabilidades del usuario**
- Responsabilidad por los actos de sus usuarios (si el cliente es una empresa, es responsable de lo que hacen sus empleados en la plataforma)
- Obligación de reportar usos indebidos que detecten
- Mantenimiento de credenciales y seguridad de la cuenta

---

**Parte 3 – Las consecuencias del incumplimiento**

La parte más importante para que el AUP sea ejecutable:
- La escala de respuestas al incumplimiento:
  1. Aviso con plazo para corregir
  2. Suspensión temporal de la cuenta
  3. Terminación del servicio sin reembolso
  4. Reporte a autoridades competentes si el uso es ilegal

- Cuándo puedes suspender sin previo aviso: los supuestos de urgencia (contenido CSAM, DDoS activo, compromiso de seguridad)
- La retención de datos tras la terminación por AUP: cuánto tiempo y para qué propósito (investigación legal, protección de otros usuarios)
- La limitación de tu responsabilidad si el usuario incumple el AUP y causa daño a terceros

---

**Parte 4 – Redactar el AUP en lenguaje claro**

El AUP que nadie lee es el AUP que no sirve:
- Los principios de "plain language" aplicados a documentos legales:
  - Oraciones cortas (máximo 25 palabras)
  - Voz activa en lugar de voz pasiva
  - Sin latinismos innecesarios
  - Ejemplos concretos para los usos prohibidos ambiguos
- Por qué un AUP comprensible también reduce los litigios: el cliente no puede decir que no lo entendía
- El tono correcto: profesional y claro, sin ser amenazante para el usuario legítimo

---

**Parte 5 – Hacer cumplir el AUP**

El AUP más completo del mundo no sirve si no hay proceso para ejecutarlo:
- El proceso de denuncia interna: cómo el equipo reporta posibles incumplimientos
- El proceso de denuncia externa: dónde los usuarios reportan el abuso de otros usuarios
- El proceso de investigación: quién investiga, qué evidencia se recoge, quién decide la acción
- La comunicación al usuario infractor: el email de suspensión que cumple con los requisitos legales y deja un registro
- Cómo gestionar las apelaciones

Dado mi contexto, dame:
- El borrador de las secciones 1 y 2 del AUP adaptadas específicamente a mi plataforma
- Las 3 cláusulas más críticas para mi tipo de riesgo específico y por qué
- Los 2-3 recursos o abogados especializados en SaaS legal que recomendarías para la revisión final

NOTA: Este análisis tiene carácter informativo y no sustituye al asesoramiento jurídico. El AUP definitivo debe revisarlo un abogado especializado antes de publicarlo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Redactar la Política de Uso Aceptable de un SaaS que protege frente a abusos y es comprensible para los usuarios legítimos.',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer Health Score: predecir el churn con 60-90 días de antelación',
                'description'      => 'Diseña el modelo de customer health score que identifica el riesgo de churn con suficiente antelación para actuar: qué señales incluir, cómo ponderarlas y cómo integrar el score en los flujos de trabajo del equipo de CS.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Head of Customer Success con experiencia en el diseño e implementación de modelos de customer health en empresas SaaS B2B. Ayúdame a construir el health score que predice el churn con suficiente antelación para actuar.

**Mi contexto:**
- Tipo de producto SaaS: [herramienta de productividad / plataforma de datos / solución vertical / etc.]
- Segmento de clientes principal: [SMB / Mid-Market / Enterprise]
- Número de clientes actuales: [número]
- Churn rate actual: [% mensual o anual]
- Cuántos días de antelación necesitas detectar el riesgo: [30 / 60 / 90 / 120 días antes del renewal]
- Datos de producto disponibles: [tienes datos de uso / logs de acceso / datos de features usadas / no tienes datos]
- Herramientas de CS actuales: [Gainsight / ChurnZero / Planhat / Totango / solo CRM / nada]
- Recursos para construirlo: [tenemos analista de datos / solo el equipo de CS / somos pequeños y necesitamos algo simple]

---

**Parte 1 – Por qué el health score que tienes probablemente no funciona**

La crítica honesta de los health scores típicos:
- El health score "semáforo" que solo dice verde/amarillo/rojo sin explicar por qué: útil para mirar, inútil para actuar
- El error de usar solo datos de uso: un cliente que usa mucho el producto puede seguir queriendo irse si no consigue los resultados que esperaba
- El health score estático: calculado una vez al mes en lugar de en tiempo real
- El problema del "viernes por la tarde": el CSM revisa el health score cuando tiene tiempo, no cuando el cliente está en riesgo
- Por qué la mayoría de health scores predicen el churn cuando ya es demasiado tarde

---

**Parte 2 – Las señales que más predicen el churn**

No todas las señales tienen el mismo poder predictivo. Las de mayor correlación con el churn, ordenadas por categoría:

**Señales de uso del producto (las más accesibles):**
- Frecuencia de login: caída sostenida del número de sesiones por semana en las últimas 4 semanas
- Breadth of use: el cliente usa cada vez menos features (simplificación = señal de salida)
- Depth of use: el número de usuarios activos cae aunque los licenciados son los mismos
- Time in product: el tiempo promedio por sesión cae
- Feature adoption: no han adoptado las features lanzadas en los últimos 3 meses

**Señales de relación y engagement:**
- No responde a emails del CSM en las últimas 2 semanas
- Canceló la última QBR y no reprogramó
- El champion interno dejó la empresa (señal de riesgo muy alta)
- No ha participado en el último webinar o evento de usuario

**Señales de soporte:**
- Aumento súbito de tickets (el cliente tiene problemas)
- Ticket abierto sin resolver durante más de 5 días
- CSAT negativo en los últimos 2 tickets

**Señales de negocio:**
- La empresa está en proceso de reestructuración o layoffs
- El cliente ha mencionado que están evaluando alternativas (en cualquier conversación)
- Reducción del uso cerca del período de renewal (la señal más fuerte de todas)

---

**Parte 3 – Diseñar el modelo: qué señales incluir y cómo ponderarlas**

No puedes incluir 50 señales desde el día uno. El proceso para construir un health score que funciona:

**Paso 1 – Análisis retrospectivo de cuentas churneadas**
- Revisa las últimas 20-30 cuentas que hicieron churn y busca los patrones: qué tenían en común 60-90 días antes de cancelar
- Este análisis te dice qué señales son predictivas para TU producto y TUS clientes (no los benchmarks del sector)

**Paso 2 – Seleccionar las 5-8 señales con mayor poder predictivo**
- Para cada señal candidata: ¿qué % de los clientes que churnearon mostraron esta señal 60 días antes?
- Elimina las señales que no están disponibles o son difíciles de obtener: un health score que requiere actualizaciones manuales no se mantiene

**Paso 3 – Asignar pesos a cada señal**

Ejemplo de modelo básico para SaaS B2B:

| Señal | Peso | Puntuación máxima | Cómo medirla |
|---|---|---|---|
| Login frecuencia (vs. mes anterior) | 25% | 25 puntos | Datos de producto |
| Número de usuarios activos / licencias | 20% | 20 puntos | Datos de producto |
| Features adoptadas (últimos 30 días) | 15% | 15 puntos | Datos de producto |
| Respuesta a comunicaciones del CSM | 15% | 15 puntos | CRM / email |
| CSAT de los últimos 3 tickets | 10% | 10 puntos | Helpdesk |
| Tickets sin resolver > 5 días | 10% | 10 puntos | Helpdesk |
| Cambios en el champion interno | 5% | 5 puntos | CRM / LinkedIn |

**Paso 4 – Definir los umbrales de alerta**
- Verde (70-100 puntos): bajo riesgo, gestión estándar
- Amarillo (50-69 puntos): riesgo moderado, check-in proactivo del CSM
- Rojo (< 50 puntos): riesgo alto, plan de intervención inmediato

---

**Parte 4 – Integrar el health score en el flujo de trabajo**

Un health score que el equipo no usa no sirve de nada:
- Cómo hacer que el health score llegue al CSM sin que tenga que ir a buscarlo
  - Alertas automáticas cuando una cuenta baja de umbral
  - Resumen semanal de cuentas que han cambiado de segmento
  - Integración del health score en el CRM como campo visible en la vista de cuenta
- El playbook de intervención por nivel de riesgo:
  - Rojo: el CSM contacta en 24 horas, con el manager en copia, para un executive review
  - Amarillo: el CSM contacta en la siguiente semana con un check-in de valor
  - Verde: gestión estándar, revisión de salud en el QBR
- Cómo usar el health score para priorizar el tiempo del CSM: si tienes 80 cuentas, el health score te dice en cuáles enfocarte esta semana

---

**Parte 5 – Construir el health score con mis recursos**

Dado mi contexto específico, dame:
- El nivel de sofisticación recomendado para empezar (no hagas complejo lo que puede ser simple)
- Las 5 señales con las que empezar si solo puedo instrumentar 5
- Cómo construirlo si no tenemos una herramienta de CS dedicada (opciones con CRM + hoja de cálculo)
- Cómo validar que el modelo funciona: el test retrospectivo con las cuentas churneadas del año anterior
- El roadmap para los primeros 6 meses:
  - Mes 1: construir el modelo básico con las primeras 5 señales
  - Mes 2-3: validar y ajustar pesos basándose en los primeros datos
  - Mes 4-6: añadir más señales e integrar con las herramientas del equipo

Termina con los 3 errores más frecuentes al implementar un health score por primera vez y cómo evitar cada uno.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar e implementar el customer health score que predice el churn con 60-90 días de antelación para que el equipo de CS pueda actuar a tiempo.',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'LinkedIn para freelancers: de invisible a referente',
                'description'      => 'El sistema de contenido en LinkedIn que genera inbounds sin pagar publicidad: cómo optimizar el perfil, qué publicar, con qué frecuencia y cómo convertir la visibilidad en consultas de clientes reales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de personal branding especializado en LinkedIn para profesionales independientes que han pasado de publicar aleatoriamente a generar un flujo constante de contactos entrantes de calidad. Ayúdame a construir mi sistema de LinkedIn como freelance.

**Mi perfil:**
- Especialidad como freelance: [desarrollo / diseño / marketing / consultoría / copywriting / otro]
- Años de experiencia en el sector: [número]
- Perfil de cliente ideal: [tipo de empresa, cargo del contacto, sector]
- Situación actual en LinkedIn: [no tengo perfil activo / perfil pero sin publicar / publico pero sin sistema / tengo seguidores pero no me genera leads]
- Número de seguidores actuales: [número]
- Tiempo disponible para LinkedIn: [horas/semana]
- Objetivo principal: [visibilidad / contactos directos de clientes / posicionarme como experto / conseguir colaboraciones con otros freelancers]

---

**Parte 1 – El perfil que convierte visitas en contactos**

El perfil de LinkedIn del freelance debe funcionar como una landing page, no como un CV:

**La foto de perfil:**
- Los criterios de una foto de perfil que genera confianza: fondo, ropa, expresión, resolución
- Por qué la foto importa más de lo que crees: estudios de impacto en la tasa de conexión aceptada

**El banner (imagen de fondo):**
- Qué debe comunicar el banner: tu propuesta de valor en una sola imagen
- Los elementos que nunca faltan en un banner eficaz: quién eres, a quién ayudas, qué resultado consiguen

**El headline (el titular):**
- Error más frecuente: "Desarrollador web freelance" — quién eres, no qué haces ni para quién
- La fórmula del headline que convierte: [resultado que consigues] para [tipo de cliente]
- Ejemplos concretos para mi especialidad

**El About (la sección acerca de):**
- La estructura correcta para un freelance: el problema que resuelves (no tu historia), a quién, cómo te contactan
- La longitud óptima y por qué no hay que escribir novelas
- El CTA al final: qué pedirle al visitante que haga

**La sección de Featured (Destacados):**
- Qué poner aquí: el contenido que más convierte (casos de éxito, muestras de trabajo, artículo del que estás más orgulloso)

**La sección de experiencia:**
- Cómo describir el trabajo freelance en la sección de experiencia sin que parezca que estás entre trabajos
- La descripción de cada proyecto que comunica resultados, no tareas

---

**Parte 2 – La estrategia de contenido para freelancers**

Qué publicar para atraer el tipo correcto de cliente:

**Los tres tipos de contenido que funcionan para freelancers:**

1. **Contenido de autoridad** (el que te posiciona como experto)
   - Qué es: tu punto de vista sobre tendencias del sector, análisis de casos, opiniones contrarianas fundamentadas
   - Por qué funciona: los clientes contratan a expertos, no a generalistas
   - Ejemplo de formato: "3 errores que veo cada semana en [tu área]"

2. **Contenido de prueba social** (el que genera confianza)
   - Qué es: resultados de proyectos (con permiso del cliente), testimonios, transformaciones
   - Por qué funciona: el cliente potencial se ve a sí mismo en el caso de éxito
   - Ejemplo de formato: "Ayudé a [tipo de empresa] a conseguir [resultado concreto]. Aquí cómo lo hicimos:"

3. **Contenido de proceso** (el que humaniza y construye relación)
   - Qué es: cómo trabajas, qué herramientas usas, cómo tomas decisiones, tu día a día
   - Por qué funciona: el cliente quiere saber cómo es trabajar contigo antes de contratarte
   - Ejemplo de formato: "Mi proceso para [tarea que haces] cuando el cliente no sabe exactamente qué quiere"

**La mezcla recomendada:**
- 50% contenido de autoridad
- 30% contenido de prueba social
- 20% contenido de proceso

---

**Parte 3 – El sistema de publicación**

La clave no es publicar mucho, es publicar con sistema:

**Frecuencia recomendada según tu objetivo:**
- Si estás empezando: 2-3 veces por semana
- Si quieres crecer rápido: 5 veces por semana
- Si buscas mantenimiento: 1-2 veces por semana

**El banco de contenido:**
- Cómo generar 30 ideas de contenido en una sesión de 30 minutos: el ejercicio de las preguntas de clientes
- Cómo escribir posts en batch: 5 posts en 2 horas en lugar de un post al día (mucho más eficiente)
- La herramienta de programación: Buffer, Hootsuite, Taplio o las funciones nativas de LinkedIn

**El formato de post que genera más alcance:**
- El hook en la primera línea: la frase que hace que el usuario haga clic en "ver más"
- La estructura de los posts que el algoritmo de LinkedIn amplifica (spoiler: no son los más bonitos)
- Por qué el post sin enlace externo tiene más alcance que el post con enlace

---

**Parte 4 – Convertir la visibilidad en clientes**

La visibilidad sin conversión es vanity. El sistema para convertir:
- Los comentarios estratégicos: cómo comentar en los posts de tu cliente ideal para que te descubran
- Las solicitudes de conexión con mensaje: la fórmula del mensaje de conexión que acepta el 50%+ de los destinatarios
- El DM que abre conversaciones: el mensaje que no suena a venta y que genera respuesta
- Cómo responder a los comentarios de tu propio contenido para convertir visitantes en contactos
- El follow-up cuando alguien visita tu perfil varias veces sin contactar

---

**Parte 5 – El plan para los primeros 90 días**

Dado mi perfil y situación, dame el plan de 90 días:

**Semana 1-2 – Fundaciones:**
- Optimización del perfil con la información que te he dado
- Los primeros 5 posts que publicar para establecer el territorio temático

**Semana 3-8 – Construcción:**
- Cadencia de publicación y batch de contenido semanal
- Estrategia de comentarios en posts de clientes potenciales
- Primeras solicitudes de conexión estratégicas

**Mes 3 – Conversión:**
- Cuándo empezar a generar conversaciones de negocio activamente
- Cómo medir si el sistema está funcionando (leading indicators antes de que lleguen los inbounds)

**Métricas de éxito para mi objetivo:**
- Seguidores ganados por mes
- Impresiones por post (señal del algoritmo)
- Visitas al perfil por semana
- Conexiones de ICP aceptadas por semana
- Conversaciones de negocio iniciadas por mes

Termina con los 3 errores que cometen los freelancers cuando llevan 3 meses en LinkedIn y todavía no les genera leads (y cómo corregirlos).
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir el sistema de LinkedIn que posiciona al freelance como referente y genera inbounds de clientes de forma orgánica.',
                'vote_score'       => 45,
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
