<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills105Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Automatización de marketing sin código',
                'description'      => 'Zapier, Make (Integromat) y n8n para automatizar campañas, reportes y flujos de lead nurturing sin programar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en marketing automation y herramientas no-code con experiencia en equipos de marketing de 1 a 20 personas. Ayúdame a diseñar y construir flujos de automatización que ahorren horas semanales y aumenten la efectividad de las campañas sin necesidad de un equipo de desarrollo.

## Por qué la automatización de marketing es un multiplicador de fuerza

Un equipo de marketing de 3 personas con buena automatización puede tener el alcance operativo de un equipo de 10. Las tareas que más tiempo consumen — reportes, seguimiento de leads, publicación en redes, emails de nurturing — son también las más repetibles y por tanto las más automatizables.

La clave no es automatizar por automatizar: es identificar los procesos que ocurren más de una vez por semana y que siguen siempre el mismo patrón.

## Las 3 herramientas principales: cuándo usar cada una

| Herramienta | Cuándo usarla | Precio | Curva de aprendizaje |
|---|---|---|---|
| **Zapier** | Automatizaciones simples entre apps populares, ya tienes datos en herramientas como HubSpot, Gmail, Slack | 20-100 €/mes | Baja (1-2 días) |
| **Make (Integromat)** | Flujos más complejos con lógica condicional, transformaciones de datos, múltiples ramas | 10-59 €/mes | Media (1 semana) |
| **n8n** | Control total, datos sensibles que no deben salir de tu infraestructura, volumen alto de operaciones | Gratuito (self-hosted) o 20 €/mes | Alta (2-3 semanas) |

## Los 10 flujos de automatización de mayor impacto

### Categoría 1 — Captación y nurturing de leads

**Flujo 1: Lead magnet → CRM → email de bienvenida (15 minutos de configuración)**
- Trigger: nuevo envío en Typeform / Google Forms
- Acción 1: crea o actualiza el contacto en HubSpot / Pipedrive
- Acción 2: envía email de bienvenida personalizado desde Gmail / Mailchimp
- Acción 3: notifica al equipo en Slack con los datos del lead

**Flujo 2: Lead scoring automático**
- Cada vez que un lead abre un email, visita la página de precios o descarga un recurso: suma puntos en el CRM
- Cuando supera 50 puntos: notifica al comercial para contacto directo
- Herramienta: HubSpot Workflows (incluido en versión gratuita con límites)

**Flujo 3: Secuencia de nurturing post-demo**
- Trigger: demo completada (marcada en CRM)
- Email D+1: resumen de la demo con los puntos clave discutidos
- Email D+3: caso de éxito de empresa similar
- Email D+7: respuesta a la objeción más común de ese perfil
- Email D+14: oferta limitada o invitación a siguiente paso

### Categoría 2 — Publicación y gestión de contenido

**Flujo 4: Repurposing automático de contenido**
- Trigger: nuevo artículo publicado en el blog (via RSS o webhook)
- Make extrae título, resumen y URL
- Claude API genera 3 variaciones de post para LinkedIn, Twitter e Instagram
- Los borradores aparecen en Buffer / Hootsuite para revisión y publicación programada

**Flujo 5: Newsletter semanal semi-automática**
- Cada lunes a las 9h: n8n recopila los 5 artículos más leídos del blog (via Google Analytics API)
- Genera el borrador de la newsletter en Notion con los links y resúmenes
- El marketer revisa, ajusta y envía — el 80% ya está hecho

### Categoría 3 — Reportes y análisis

**Flujo 6: Dashboard semanal automático**
- Cada lunes: Zapier extrae datos de Google Analytics, Meta Ads y el CRM
- Los consolida en una hoja de Google Sheets
- Envía email con el resumen ejecutivo y link al dashboard al equipo directivo
- Tiempo ahorrado: 2-3 horas semanales de compilación manual

**Flujo 7: Alerta de anomalías en métricas**
- Make monitoriza el CPC diario en Google Ads
- Si sube más del 30% respecto al día anterior: envía alerta a Slack con el detalle del campaign
- Evita que una campaña con problema drene el presupuesto durante el fin de semana

### Categoría 4 — Reseñas y reputación

**Flujo 8: Solicitud automática de reseña post-compra**
- Trigger: pedido marcado como entregado en Shopify / WooCommerce
- D+3: email con petición de reseña en Google My Business o Trustpilot
- D+10 (si no hay respuesta): seguimiento con un incentivo pequeño

## Cómo priorizar qué automatizar primero

Usa esta matriz de priorización:

| Proceso | Frecuencia (veces/semana) | Tiempo actual (min) | Repetibilidad (1-5) | Score |
|---|---|---|---|---|
| Informe semanal de métricas | 1 | 120 | 5 | Alto |
| Email de bienvenida a nuevos leads | 5-20 | 10 | 5 | Alto |
| Publicar en redes sociales | 5 | 30 | 3 | Medio |

Empieza por los procesos con mayor frecuencia, mayor tiempo y mayor repetibilidad. Son los que recuperan la inversión de tiempo en configurar la automatización más rápido.

## Tu primer flujo en 30 minutos

Cuéntame:
1. ¿Cuál es el proceso manual que más tiempo te consume a la semana?
2. ¿Qué herramientas usas ya (CRM, email, redes, analytics)?
3. ¿Tienes cuenta en Zapier, Make o prefieres empezar por una?

Te diseño el flujo paso a paso con las instrucciones exactas de configuración.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 35,
                'use_case'         => 'Diseñar y construir automatizaciones de marketing con Zapier, Make o n8n para ahorrar horas semanales en tareas repetitivas sin saber programar.',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Low-code y no-code para developers',
                'description'      => 'Cuándo usar Bubble, Retool, Webflow o Airtable en lugar de código: decisión estratégica, no rendición técnica.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de software senior con experiencia en startups que han pasado de prototipos no-code a productos escalables en código. Ayúdame a tomar decisiones informadas sobre cuándo usar herramientas low-code/no-code y cuándo escribir código desde cero, sin caer en el dogmatismo de ninguno de los dos lados.

## El debate falso: "¿código o no-code?"

Los dogmáticos del código dicen: "No-code no escala, vas a reescribirlo todo en 6 meses." Los evangelistas del no-code dicen: "No necesitas developers para construir productos." Ambos están equivocados en la mayoría de los contextos reales.

La pregunta correcta no es "¿código o no-code?" sino "¿qué herramienta resuelve este problema específico en el menor tiempo posible sin comprometer lo que necesitamos en 12 meses?"

## El framework de decisión

Antes de elegir una herramienta, responde estas 4 preguntas:

| Pregunta | Si la respuesta es SÍ | Si la respuesta es NO |
|---|---|---|
| ¿Necesito esto en menos de 2 semanas? | No-code primero | Evalúa el coste real de código |
| ¿Esto va a procesar datos sensibles o regular? | Código o solución enterprise | No-code puede funcionar |
| ¿Necesito customización que no ofrece la plataforma? | Código inevitablemente | No-code suficiente |
| ¿Esto tiene que escalar a >100K usuarios en 12 meses? | Investiga los límites de la plataforma | No-code probablemente suficiente |

## El mapa de herramientas por caso de uso

### Aplicaciones internas (admin panels, dashboards operativos)

**Retool** — La herramienta favorita de los developers que no quieren serlo para esto:
- Conecta directamente a tu base de datos (PostgreSQL, MySQL, MongoDB), APIs REST y GraphQL
- Construyes interfaces de admin en horas, no semanas
- Escribes JavaScript cuando la lógica lo requiere
- Ideal para: panel de operaciones, gestión de pedidos, moderación de contenido, herramientas internas de CS
- Límite real: no es para productos orientados al cliente externo

**Airtable** — Cuando necesitas una base de datos flexible sin esquema rígido:
- Ideal para: gestión de contenido editorial, tracking de proyectos, CRM sencillo, inventario
- Límite real: con más de 50.000 registros o queries complejas, mejor migrar a Postgres + Retool

### Sitios web y landing pages

**Webflow** — El estándar para webs de marketing de calidad sin código:
- Control de diseño pixel-perfect con animaciones complejas
- CMS integrado para blogs y contenido dinámico
- SEO nativo mejor que la mayoría de los CMS tradicionales
- Ideal para: webs corporativas, landing pages de campaña, portfolios de agencia
- Límite real: interactividad compleja (calculadoras, configuradores, apps) requiere JavaScript custom o herramientas adicionales

### Aplicaciones con base de datos

**Bubble** — El más potente del ecosistema no-code para apps reales:
- Lógica de negocio compleja con workflows visuales
- Base de datos propia, autenticación, roles de usuario
- Marketplace de plugins para integrar servicios externos
- Ideal para: MVP de SaaS, marketplaces, apps B2B con flujos complejos
- Límite real: rendimiento con alto volumen de usuarios concurrentes, vendor lock-in significativo

**Glide / Softr** — Para transformar una hoja de cálculo o Airtable en una app móvil en un día:
- Ideal para: apps internas de campo, directorios de miembros, portales de cliente sencillos
- Límite real: personalización muy limitada

## Cuándo el código es inevitablemente la respuesta correcta

1. **Procesamiento de datos a escala**: más de 100K operaciones diarias o lógica de transformación compleja
2. **Latencia crítica**: aplicaciones en tiempo real (trading, gaming, comunicaciones)
3. **Requisitos de seguridad estrictos**: datos médicos (HIPAA), financieros regulados, defensa
4. **Diferenciación técnica como ventaja competitiva**: si el algoritmo ES el producto
5. **Integraciones profundas**: cuando necesitas acceso a APIs que las plataformas no soportan o con lógica condicional compleja

## El workflow híbrido que usan los mejores equipos

Los equipos más eficientes no eligen entre código y no-code — usan ambos estratégicamente:

- **Frontend de marketing**: Webflow (el developer no toca esto)
- **Panel de administración interno**: Retool conectado a la base de datos de producción
- **Automatizaciones entre servicios**: n8n self-hosted
- **Core del producto**: código propio en el stack elegido
- **Prototipado rápido**: Bubble para validar antes de construir

Con este enfoque, el equipo de engineering se concentra en lo que solo ellos pueden hacer bien y delega el resto a herramientas especializadas.

## Tu decisión concreta

Cuéntame qué estás construyendo o qué problema estás intentando resolver:
- ¿Es un producto para usuarios externos o una herramienta interna?
- ¿En qué plazo necesitas tenerlo funcionando?
- ¿Tienes developers disponibles y cuántas horas/semana?
- ¿Cuáles son tus restricciones de presupuesto?

Te recomiendo la combinación exacta de herramientas con el razonamiento técnico detrás de cada elección.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'         => 'Tomar decisiones fundamentadas sobre cuándo usar herramientas low-code/no-code y cuándo escribir código, para maximizar la velocidad sin comprometer la escalabilidad.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Webflow para diseñadores',
                'description'      => 'Construye webs con diseño pixel-perfect y animaciones complejas sin escribir código: el workflow del diseñador web moderno.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador web senior especializado en Webflow con experiencia en proyectos para startups, agencias y marcas de consumo. Ayúdame a dominar Webflow como herramienta principal de producción web para diseñadores que quieren implementar sus diseños con control total sin depender de un developer.

## Por qué Webflow cambió las reglas para los diseñadores web

Antes de Webflow, el flujo era: diseñas en Figma → se lo das al developer → esperas → el resultado no es lo que diseñaste → negocias cambios → repites. Webflow rompe ese ciclo porque el diseñador controla todo el proceso, desde el diseño hasta la publicación.

El resultado: ciclos de iteración 5-10 veces más rápidos, menos fricción con el cliente y un producto final fiel al diseño original.

## Los conceptos fundamentales que todo diseñador debe dominar

### 1. El modelo de caja y la lógica de layout
Webflow usa el mismo modelo de caja de CSS que usan los browsers. Entender esto es la diferencia entre luchar con Webflow y dominarlo.

- Todo elemento es una caja con: contenido, padding, borde y margin
- Los contenedores se apilan verticalmente por defecto (block)
- Flexbox: cuando los hijos deben alinearse en fila o columna con control de distribución
- Grid: cuando necesitas layouts de 2 dimensiones (filas y columnas simultáneamente)

**Regla práctica**: usa Flexbox para la mayoría de los layouts de componentes. Usa Grid para los layouts de página y sistemas de cards complejos.

### 2. El sistema de clases y el estilo global

El error más común del diseñador nuevo en Webflow: añadir estilos directamente a cada elemento en lugar de crear un sistema de clases reutilizable.

**La convención de nomenclatura recomendada (BEM simplificado)**:
- Bloque: `hero`, `nav`, `card`, `footer`
- Elemento: `hero__title`, `nav__link`, `card__image`
- Modificador: `card--featured`, `btn--primary`, `btn--secondary`

**Global styles primero**: antes de diseñar cualquier sección, configura:
- Tipografía: H1 a H6, párrafo, pequeño — tamaños, pesos, line-height para desktop y móvil
- Colores: variables de color con nombres semánticos (primary, secondary, text, background, border)
- Espaciado: una escala de 4px (4, 8, 12, 16, 24, 32, 48, 64, 96) aplicada como clases de utilidad

### 3. Breakpoints y diseño responsive

Webflow tiene 6 breakpoints (de mayor a menor):
- Desktop (1440px+)
- Laptop (1280px)
- Tablet (991px)
- Mobile landscape (767px)
- Mobile portrait (479px)

**La regla crítica**: los estilos se heredan hacia abajo (de desktop a móvil), nunca hacia arriba. Diseña desktop first y sobrescribe en los breakpoints pequeños solo lo que necesita cambiar.

### 4. El CMS de Webflow

Para webs con contenido dinámico (blogs, portfolios, directorios, catálogos), el CMS de Webflow es una herramienta poderosa que muchos diseñadores no aprovechan.

**Cómo funciona**:
1. Defines la estructura de la colección (campos: texto, imagen, referencia, fecha, etc.)
2. Diseñas el template de cada elemento de la colección
3. El CMS genera automáticamente todas las páginas individuales con el mismo template
4. El cliente puede gestionar el contenido sin tocarte el diseño

**Casos de uso perfectos para el CMS**:
- Blog con categorías y autores
- Portfolio de proyectos con filtros
- Directorio de equipo con páginas individuales
- Catálogo de productos sin lógica de carrito (para eso necesitarías integrar Shopify)

### 5. Animaciones e interacciones

Las interacciones de Webflow son su diferencial más poderoso. Sin código puedes construir:
- Animaciones de scroll (parallax, fade-in al entrar en viewport, counters)
- Hover effects complejos (transiciones multi-propiedad, cambios de imagen)
- Menús móviles con animación
- Tabs y acordeones con transición
- Sliders personalizados

**La lógica de las interacciones de Webflow**:
- Trigger: qué evento inicia la animación (scroll, hover, click, carga de página)
- Action: qué cambia (opacidad, posición, escala, color, cualquier propiedad CSS)
- Easing y duración: cómo se mueve (linear, ease-in-out, spring)

## El workflow de proyecto recomendado

**Fase 1 — Configuración (2-4h)**:
1. Crea las variables de color y fuentes en Global Settings
2. Construye el sistema de tipografía global
3. Define las clases de espaciado y utilidades
4. Importa el favicon y las imágenes de marca

**Fase 2 — Componentes (4-8h)**:
Construye los componentes reutilizables antes de montar las páginas:
- Navbar (con menú móvil)
- Footer
- Botones (todas las variantes)
- Cards (contenido, blog, equipo, etc.)
- Secciones de hero

**Fase 3 — Páginas (variable)**:
Ensambla las páginas usando los componentes. El 80% del trabajo ya está hecho.

**Fase 4 — Responsive (3-6h)**:
Revisa y ajusta cada breakpoint de mayor a menor.

**Fase 5 — Interacciones y SEO (2-4h)**:
Añade las animaciones y completa los metadatos SEO de cada página.

## Cuéntame tu nivel actual

¿Has usado Webflow antes o estás empezando desde cero? ¿Qué tipo de proyecto quieres construir? Con esa información te doy el plan de aprendizaje específico y los recursos más directos para llegar al resultado.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Aprender y aplicar Webflow para diseñar e implementar webs profesionales con control total sobre el diseño sin necesitar un developer.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'CRM sin código para equipos de ventas',
                'description'      => 'Configura y automatiza HubSpot, Pipedrive o Notion CRM para que el equipo de ventas adopte el sistema sin fricción.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de operaciones de ventas (Sales Ops) con experiencia en la implementación de CRMs en equipos de 2 a 30 comerciales. Ayúdame a seleccionar, configurar y adoptar el CRM adecuado para mi equipo de ventas de forma que sea una herramienta que el equipo quiera usar, no una carga administrativa más.

## El problema número uno de los CRMs: el abandono

El 60-70% de las implementaciones de CRM fallan. No por falta de funcionalidades — por exceso de ellas. El comercial que tiene que rellenar 15 campos para registrar una llamada prefiere usar su Excel. Y tiene razón.

El CRM que funciona no es el más potente: es el que el equipo adopta porque le ahorra tiempo en lugar de añadírselo.

## Cómo elegir el CRM correcto para tu equipo

| Herramienta | Ideal para | Precio | Automatización |
|---|---|---|---|
| **HubSpot** (gratuito) | Equipos de 1-10 que quieren empezar sin coste y pueden convivir con las limitaciones del plan free | Gratis hasta límites | Media |
| **HubSpot** (Starter/Pro) | Equipos que necesitan secuencias de email, reportes avanzados y automatizaciones | 45-900 €/mes | Alta |
| **Pipedrive** | Equipos orientados al pipeline visual, ciclo de ventas estándar, menos foco en marketing | 15-99 €/usuario/mes | Media-Alta |
| **Notion CRM** | Equipos muy pequeños (1-3 personas) que ya usan Notion y no necesitan automatizaciones avanzadas | Incluido en Notion | Baja |
| **Salesforce** | Empresas medianas-grandes con procesos complejos, integraciones enterprise y equipo de admin dedicado | 75-300 €/usuario/mes | Muy alta |

**Regla práctica**: el CRM correcto es el menos potente que cubre tus necesidades reales de hoy. Siempre puedes migrar cuando lo necesites. No puedes recuperar los meses que el equipo ha estado no usándolo.

## Configuración mínima viable en HubSpot gratuito

### Paso 1: Define el pipeline (30 minutos)
El pipeline es el corazón del CRM. Defínelo con máximo 5-7 etapas que reflejen tu proceso real, no el ideal:

Ejemplo de pipeline típico B2B:
1. Lead nuevo (sin cualificar)
2. Contactado (primera conversación)
3. Cualificado (problema confirmado, presupuesto, decisor identificado)
4. Propuesta enviada
5. Negociación
6. Cerrado ganado / Cerrado perdido

**Regla**: si el comercial no puede mover un deal de etapa en 10 segundos desde el móvil, el pipeline tiene demasiados pasos.

### Paso 2: Define los campos obligatorios (mínimos)
Solo los campos que el equipo realmente necesita:
- Para el contacto: nombre, email, teléfono, empresa, cargo
- Para el deal: nombre del deal, valor estimado, fecha de cierre esperada, etapa
- Custom: 1-3 campos específicos de tu negocio (sector, origen del lead, producto de interés)

**Regla de oro**: si un campo no cambia la forma en que el comercial gestiona el deal, no es un campo obligatorio.

### Paso 3: Automatizaciones básicas sin tocar código
En HubSpot gratuito puedes configurar:
- Tarea automática cuando un deal pasa a "Propuesta enviada": recordatorio para seguimiento en 3 días
- Email de bienvenida automático cuando un contacto se convierte en lead
- Notificación al manager cuando un deal llega a "Negociación"

En HubSpot Starter y Pipedrive además puedes:
- Secuencias de email de nurturing automáticas
- Rotación automática de leads entre comerciales
- Alertas cuando un deal lleva más de X días sin actividad

### Paso 4: La integración con el email

El motivo número uno por el que los comerciales no usan el CRM: tienen que registrar cada email manualmente. La solución es la integración nativa con Gmail o Outlook que sincroniza automáticamente los emails con el contacto correspondiente.

Con HubSpot: instala la extensión de Chrome de HubSpot para Gmail — todos los emails quedan registrados automáticamente y puedes ver el historial del contacto directamente desde el email.

## Cómo conseguir que el equipo adopte el CRM

La tecnología es fácil. El cambio de comportamiento es difícil. Las 4 palancas de adopción:

### 1. El CRM como fuente de verdad del pipeline review
Si el manager hace el pipeline review semanal mirando el CRM (no el Excel del comercial), el equipo actualiza el CRM o no puede participar en la conversación.

### 2. Eliminar la entrada manual de datos donde sea posible
- Integración de email bidireccional
- Captura automática de leads desde formularios web
- Enriquecimiento de datos con herramientas como Clearbit o Apollo
- Escáner de tarjetas de visita en la app móvil

### 3. Hacer que el CRM les ayude a ellos, no solo al manager
El comercial adopta el CRM cuando ve que le ayuda a ganar más: recordatorios de seguimiento, visibilidad de deals "calientes", plantillas de email que se personalizan con datos del contacto.

### 4. Formación breve y práctica (no videos de 2 horas)
Una sesión de 45 minutos con el equipo donde configuran su primer deal real y envían su primer email desde el CRM. El resto se aprende haciendo.

## Tu plan de implementación

Cuéntame:
- ¿Cuántas personas tiene tu equipo de ventas?
- ¿Qué CRM tienes ahora (aunque sea un Excel)?
- ¿Cuál es el mayor problema con vuestro proceso actual de seguimiento?

Con eso diseño la configuración específica y el plan de rollout para que el equipo esté usando el CRM en menos de 2 semanas.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 40,
                'use_case'         => 'Seleccionar, configurar y conseguir la adopción de un CRM para equipos de ventas pequeños y medianos sin necesidad de un equipo técnico.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Herramientas no-code en el stack de producto',
                'description'      => 'Airtable, Notion, Coda y cómo los equipos de producto gestionan roadmaps, sprints y documentación sin código.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Product Manager con experiencia en equipos de producto ágiles de 3 a 15 personas. Ayúdame a construir el stack de herramientas no-code que optimiza los procesos de un equipo de producto: desde la gestión del roadmap hasta la documentación de decisiones y el seguimiento de sprints.

## El problema del equipo de producto con demasiadas herramientas

El equipo de producto promedio usa: Jira para el backlog, Confluence para la documentación, Slack para la comunicación, Miro para los workshops, Google Sheets para el roadmap, y Notion para los specs. El resultado: la información vive en 6 lugares distintos y nadie sabe dónde buscar qué.

El stack ideal no es el que tiene más funcionalidades — es el que tiene menos herramientas, cada una con un propósito claro, bien integradas entre sí.

## Las opciones por caso de uso

### Para el roadmap estratégico

**Notion** — El favorito de los equipos que valoran la flexibilidad:
- Una base de datos con los items del roadmap (iniciativas, no tareas)
- Vistas múltiples: tabla para el PM, galería para el CEO, Kanban para el equipo
- Propiedades: quarter, objetivo de negocio, estado, equipo responsable, métrica de éxito
- Ventaja: todo el mundo puede ver el roadmap sin permisos especiales
- Límite: no tiene gestión de dependencias nativa

**Productboard** — Cuando el volumen de feedback de usuarios es alto:
- Conecta el feedback de usuarios (de Intercom, Zendesk, surveys) directamente a las features del roadmap
- Priorización automática basada en votos y segmentos de clientes
- Ideal para equipos de producto maduros con muchos stakeholders
- Precio: 20-80 €/usuario/mes

**Linear** — Para equipos que quieren la potencia de Jira sin la complejidad:
- Roadmap integrado con el backlog y los sprints
- Velocidad de navegación nativa (atajos de teclado para todo)
- Favorito de los equipos de ingeniería que también gestionan el producto en la misma herramienta
- Precio: 8-16 €/usuario/mes

### Para el backlog y los sprints

**Jira** — El estándar enterprise con toda su complejidad:
- Personalización total de workflows
- Integraciones con cualquier herramienta del ecosistema
- Reportes de velocity y sprint detallados
- Cuándo usarlo: cuando tienes un equipo grande, procesos definidos y alguien que lo administre
- Cuándo no usarlo: equipo pequeño, proceso en evolución, PM sin ganas de configurar epics, sub-tasks y campos personalizados durante 3 días

**Notion como gestor de backlog** — Para equipos de 2-5 personas:
- Base de datos de features con propiedades: estado, prioridad, tipo, sprint asignado
- Vista de Kanban para el sprint actual
- Vista de tabla para la priorización del backlog
- Ventaja: el spec de la feature vive en el mismo lugar que el ticket
- Límite: no tiene estimación de story points ni métricas de sprint nativas

**Linear** — El mejor equilibrio entre potencia y simplicidad:
- Ciclos (sprints) con fecha de inicio y fin
- Estimaciones en puntos integradas
- Backlog infinito con prioridades visuales
- Vistas de equipo y vistas individuales
- Recomendación personal: si tu equipo está entre Notion-too-simple y Jira-too-complex, prueba Linear

### Para la documentación de producto

**Notion** — La wiki de producto más popular:
- Product Requirements Documents (PRDs) con templates reutilizables
- Decision logs: las decisiones importantes con el contexto y las alternativas consideradas
- Onboarding de nuevos miembros del equipo
- Estructura recomendada:
  - `/producto/estrategia/` — visión, métricas, personas
  - `/producto/roadmap/` — iniciativas por quarter
  - `/producto/specs/` — PRDs de cada feature
  - `/producto/research/` — estudios de usuario y hallazgos
  - `/producto/decisiones/` — decision log

**Coda** — Cuando necesitas que la documentación sea más dinámica (con datos en tiempo real):
- Puedes conectar Coda a Google Sheets, Jira o APIs externas
- Las tablas pueden tener fórmulas y automatizaciones
- Mejor que Notion cuando el documento necesita actuar más como una app que como un wiki

## Las integraciones que más valor generan

### Slack + Linear/Jira
- Notificación cuando un issue cambia de estado
- Crear un ticket desde un mensaje de Slack (con /linear o /jira)
- Daily digest del progreso del sprint en el canal del equipo

### Figma + Notion/Linear
- Embed de Figma dentro del PRD de Notion para tener diseño y spec juntos
- Enlace del issue de Linear directamente al frame de Figma correspondiente

### GitHub + Linear
- Los commits y pull requests se vinculan automáticamente al issue de Linear
- Cuando el PR se mergea, el issue se mueve automáticamente a Done

## La estructura de reuniones que más tiempo ahorra

Con el stack no-code bien configurado, estas son las únicas reuniones que necesitas:

| Reunión | Frecuencia | Duración | Herramienta que prepara |
|---|---|---|---|
| Sprint planning | Quincenal | 90 min | Backlog priorizado en Linear/Notion |
| Daily standup | Diario | 15 min | Estado del sprint en Linear |
| Sprint review | Quincenal | 60 min | Tickets completados + demo |
| Retrospectiva | Quincenal | 45 min | Template en Notion |
| Roadmap review | Mensual | 60 min | Roadmap en Notion/Productboard |

## Tu stack en 30 minutos

Cuéntame el tamaño de tu equipo, las herramientas que usáis ahora y el mayor problema de proceso que tenéis, y te recomiendo el stack exacto con los templates y la configuración inicial para empezar esta semana.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 35,
                'use_case'         => 'Seleccionar y configurar el stack de herramientas no-code para gestionar el roadmap, el backlog y la documentación de un equipo de producto.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Automatización de procesos de RRHH',
                'description'      => 'Automatiza onboarding, encuestas, seguimiento de vacaciones y evaluaciones con herramientas no-code y sin equipo técnico.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de HR Tech y operaciones de personas con experiencia en empresas de 20 a 200 empleados. Ayúdame a identificar y automatizar los procesos de RRHH que más tiempo consumen, usando herramientas no-code accesibles para un equipo de People sin formación técnica.

## Los procesos de RRHH que más tiempo consumen y más se pueden automatizar

Basado en estudios de HR Tech, los equipos de People dedican entre el 40% y el 60% de su tiempo a tareas administrativas repetitivas. Estas son las que más impacto tienen cuando se automatizan:

| Proceso | Tiempo medio semanal | Potencial de automatización | Herramienta recomendada |
|---|---|---|---|
| Onboarding de nuevos empleados | 4-8 horas | Muy alto (70-80%) | Notion + Make/Zapier |
| Gestión de vacaciones y ausencias | 2-4 horas | Alto (60-70%) | Factorial, BambooHR, o Google Sheets + Zapier |
| Encuestas de clima y engagement | 1-2 horas | Alto (80%) | Typeform + Zapier + Sheets |
| Evaluaciones de desempeño | 3-6 horas | Medio (40-50%) | Lattice, 15Five o Notion |
| Recopilación de documentación | 2-4 horas | Muy alto (80%) | DocuSign + Airtable |
| Reportes de headcount y métricas | 2-3 horas | Alto (70%) | Google Sheets + Zapier |

## Automatización del onboarding: el proceso con mayor impacto

### El problema actual
El onboarding manual es una lista de tareas que el responsable de RRHH tiene que hacer para cada nueva incorporación: crear cuentas, enviar documentos, asignar el buddy, programar reuniones, enviar el kit de bienvenida... Con 2-3 incorporaciones al mes, esto consume 8-15 horas mensuales.

### La solución con Notion + Make

**Estructura en Notion**:
- Base de datos "Onboarding" con una fila por incorporación
- Propiedades: nombre, fecha de inicio, cargo, manager, buddy asignado, estado
- Template de página de onboarding con todo lo que el nuevo empleado necesita saber

**Automatización con Make (Integromat)**:
1. Cuando se añade una fila nueva en la base de datos de Notion con estado "Aceptado":
   - Envía email de bienvenida al nuevo empleado con el link a su página de onboarding
   - Crea las tareas de preparación en el Notion del manager (ordenador, accesos, etc.)
   - Programa el evento de "Primer día" en Google Calendar con el manager y el buddy
   - Notifica al equipo en Slack: "¡La semana que viene se une [nombre] como [cargo]!"
   - Crea ticket en IT para provisionar las cuentas necesarias

**Coste en tiempo de configuración**: 4-6 horas la primera vez.
**Tiempo ahorrado**: 3-4 horas por incorporación a partir de ese momento.

## Automatización de la gestión de vacaciones

### Opción A — Con herramienta dedicada (recomendado para +30 personas)
**Factorial** (española, GDPR-compliant) o **BambooHR**:
- El empleado solicita vacaciones en la app
- El manager recibe notificación y aprueba/rechaza con un click
- El calendario de equipo se actualiza automáticamente
- RRHH tiene el informe de días pendientes en tiempo real
- Precio: 4-8 €/empleado/mes

### Opción B — Con Google Sheets + Zapier (para equipos pequeños, <30 personas)
1. Formulario de Google Forms: empleado envía la solicitud
2. Zapier crea una fila en el Google Sheet de vacaciones
3. Zapier envía email de aprobación al manager con dos botones (Aprobar/Rechazar) via Typeform o Airtable con automatización
4. Cuando se aprueba: se añade automáticamente al Google Calendar compartido del equipo

## Automatización de encuestas de clima

### La encuesta trimestral con análisis automático

**Configuración en Typeform + Google Sheets + Zapier**:
1. Typeform con 5-8 preguntas (incluyendo eNPS)
2. Cada respuesta se vuelca automáticamente en Google Sheets
3. El Sheet tiene fórmulas pre-configuradas que calculan:
   - eNPS general y por equipo
   - Puntuaciones medias por dimensión
   - Comparativa con trimestre anterior
4. Zapier envía el dashboard a dirección cada lunes del mes siguiente al cierre de la encuesta

**Coste en tiempo de configuración**: 3-4 horas.
**Tiempo ahorrado**: 4-6 horas por encuesta trimestral.

### Pulse surveys semanales automatizadas
Una sola pregunta cada semana, rotando entre 5 dimensiones clave. Typeform + Slack bot que la envía automáticamente cada lunes a las 10h. El nivel de respuesta con este formato supera el 60%.

## Automatización de la recopilación de documentos

**DocuSign + Airtable + Zapier**:
1. Cuando se crea un nuevo empleado en Airtable: Zapier envía los documentos de contrato a DocuSign para firma
2. Cuando DocuSign confirma la firma: Zapier actualiza el estado en Airtable y archiva el documento firmado en Google Drive en la carpeta del empleado
3. RRHH recibe una notificación con el link al documento firmado

**Sin DocuSign**: Adobe Sign, HelloSign o PandaDoc tienen el mismo flujo y precios similares.

## Tu plan de automatización

Cuéntame:
- ¿Cuántas personas tiene tu empresa?
- ¿Cuántas incorporaciones tenéis al mes de media?
- ¿Cuál es el proceso manual que más te frustra hoy?
- ¿Qué herramientas usáis ya (Google Workspace, Microsoft 365, Slack, etc.)?

Con eso te diseño el flujo de automatización más impactante con instrucciones paso a paso.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 40,
                'use_case'         => 'Automatizar los procesos administrativos de RRHH (onboarding, vacaciones, encuestas, documentación) con herramientas no-code para liberar tiempo del equipo de People.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Automatización del reporting financiero',
                'description'      => 'Construye dashboards automáticos en Google Sheets, Notion o Power BI que se actualizan solos cada semana.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un analista financiero especializado en automatización de reporting para empresas de tamaño medio. Ayúdame a construir el sistema de reporting financiero automático que elimina las horas semanales de compilación manual de datos y que llega a los stakeholders correctos en el momento correcto, sin intervención humana.

## El problema del reporting manual

El CFO o el analista financiero típico dedica entre 4 y 8 horas semanales a extraer datos de distintos sistemas, pegarlos en Excel, formatearlos y enviarlos. Este tiempo es un coste directo que se repite cada semana durante años. Y lo peor: los datos llegan tarde, con errores de consolidación, y nadie sabe si son los más actualizados.

## Los tres niveles de automatización del reporting

### Nivel 1 — Google Sheets conectado a fuentes de datos (sin código, 2-4 horas de configuración)

**Para qué**: dashboards de KPIs operativos que se actualizan automáticamente.

**Las conexiones más útiles**:
- **Google Analytics → Sheets** via Google Analytics API (add-on gratuito de Google): tráfico web, conversiones, canales actualizado diariamente
- **Stripe → Sheets** via Zapier o el add-on de Stripe for Sheets: ingresos, MRR, nuevas suscripciones, cancelaciones
- **Google Ads / Meta Ads → Sheets** via Supermetrics (99 €/mes) o la API nativa: gasto, impresiones, CPC, conversiones por campaña
- **QuickBooks / Xero → Sheets** via Zapier: facturas emitidas, gastos, P&L simplificado

**El dashboard mínimo viable** (una hoja de cálculo con 4 pestañas):
1. **Resumen ejecutivo**: 6-8 KPIs en grande con comparativa vs. mes anterior y vs. objetivo
2. **Revenue**: desglose de ingresos por producto, canal o cliente
3. **Gastos**: categorías principales con variación vs. presupuesto
4. **Cashflow**: saldo de caja proyectado a 90 días

**La automatización de distribución**: con Zapier, programa el envío del link al dashboard cada lunes a las 8h a la lista de distribución definida.

### Nivel 2 — Power BI o Looker Studio con conexiones directas (bajo/sin código, 1-2 días de configuración)

**Google Looker Studio (gratuito)**:
- Conecta directamente a Google Sheets, Google Analytics, BigQuery, MySQL, PostgreSQL y docenas de conectores más
- Los dashboards se actualizan en tiempo real o en el intervalo que configures
- Puedes compartir el dashboard con un link que siempre muestra los datos más recientes
- Ideal para: equipos que ya usan Google Workspace y quieren visualizaciones más ricas que Sheets

**Microsoft Power BI (10 €/usuario/mes para Pro)**:
- La solución más potente para empresas en ecosistema Microsoft
- Conecta a Excel, SQL Server, Azure, Dynamics 365 y cientos de conectores
- Power Query transforma y limpia los datos sin código
- Los informes se publican en la nube y se actualizan automáticamente (diario o en tiempo real según el plan)

### Nivel 3 — Automatización con Python o SQL + n8n (requiere conocimiento técnico básico)

Para equipos con acceso a un developer o un analista con Python básico:
- Consultas SQL que extraen datos directamente de la base de datos de producción
- Scripts de Python (pandas + openpyxl) que consolidan y formatean el report
- n8n ejecuta el script automáticamente cada noche y envía el resultado por email o lo sube a Google Drive

## El P&L automático mensual: el template más valioso

**Estructura del P&L automatizado en Google Sheets**:

```
Hoja "Datos brutos" → conectada via Zapier a Xero/QuickBooks
Hoja "P&L" → fórmulas que agregan por categoría de la hoja de datos
Hoja "Dashboard" → gráficos y KPIs calculados desde P&L
```

**Las fórmulas clave** (Google Sheets):
- Revenue del mes: `=SUMPRODUCT((MES(datos_brutos!A:A)=MES(HOY()))*(datos_brutos!B:B="Ingreso")*datos_brutos!C:C)`
- Variación vs. mes anterior: `=(B2-B3)/ABS(B3)` con formato de porcentaje y color condicional
- Runway en meses: `=saldo_caja/gastos_mensuales_medios`

## Las 5 alertas automáticas que todo CFO necesita

Con Zapier o Make, configura estas alertas que se activan automáticamente:

1. **Alerta de runway**: si el saldo de caja cae por debajo de 3 meses de gastos → email a CEO y CFO
2. **Alerta de churn**: si el MRR cae más del 5% respecto al mes anterior → Slack al equipo de CS y producto
3. **Alerta de gasto**: si cualquier categoría de gasto supera el 110% del presupuesto del mes → email al responsable de la categoría
4. **Alerta de deuda**: si hay facturas vencidas con más de 30 días → email automático al cliente y al responsable de cobros
5. **Alerta de días de caja**: si la proyección de cashflow a 60 días es negativa → reunión de emergencia programada automáticamente

## Tu sistema en 2 semanas

**Semana 1**: Mapea las fuentes de datos que necesitas (ERP, CRM, banco, ads) y configura las primeras conexiones a Google Sheets o Looker Studio.
**Semana 2**: Construye el dashboard con las 4 pestañas mínimas y configura la distribución automática semanal.

Cuéntame:
- ¿Qué sistemas de contabilidad y negocio usas? (Xero, QuickBooks, Holded, SAP, etc.)
- ¿Qué métricas son las que el management necesita ver cada semana?
- ¿Tienes algún informe actual que sea el punto de partida?

Con esa información diseño el sistema de reporting específico para tu empresa.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Eliminar el reporting financiero manual construyendo dashboards automáticos que se actualizan solos y se distribuyen a los stakeholders sin intervención humana.',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Automatización de contratos',
                'description'      => 'DocuSign, PandaDoc y las herramientas de contract automation que reducen el tiempo de firma de semanas a horas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de legal operations (LegalOps) con experiencia en la digitalización de procesos contractuales para empresas de 10 a 200 personas. Ayúdame a automatizar el ciclo de vida de los contratos: desde la generación hasta la firma y el archivo, reduciendo el tiempo promedio de firma de días a horas y eliminando los errores de versiones y campos mal rellenados.

## El ciclo de vida del contrato y sus cuellos de botella típicos

El proceso contractual tradicional tiene 6 pasos y cuellos de botella en cada uno:

| Paso | Proceso actual | Tiempo típico | Problema |
|---|---|---|---|
| 1. Solicitud | Email con texto libre al abogado/admin | 1-2 días | No hay plantilla, cada contrato se escribe desde cero |
| 2. Redacción | Abrir el último contrato similar y modificarlo | 1-4 horas | Errores al copiar, campos obsoletos que se olvidan cambiar |
| 3. Revisión interna | Email de ida y vuelta con cambios en Track Changes | 1-3 días | Pérdida de historial de versiones, quién aprobó qué |
| 4. Envío al cliente | Email con PDF adjunto | Inmediato | El cliente no lo firma, hay que perseguirle |
| 5. Firma | Imprime, firma, escanea, envía | 1-5 días (o semanas) | Fricción total, especialmente en contratos internacionales |
| 6. Archivo | Guardar el PDF en una carpeta de Dropbox | 5 minutos | Nadie sabe dónde están los contratos vigentes ni cuándo vencen |

## Las herramientas de contract automation

### Para la firma electrónica

| Herramienta | Mejor para | Precio | Legalidad en España |
|---|---|---|---|
| **DocuSign** | Empresas que necesitan el estándar de mercado enterprise | 10-40 €/usuario/mes | Firma electrónica avanzada, válida en toda la UE |
| **PandaDoc** | Contratos comerciales con propuesta + firma en el mismo documento | 19-49 €/usuario/mes | eIDAS compliant |
| **Adobe Acrobat Sign** | Empresas ya en ecosistema Adobe | 15-30 €/usuario/mes | eIDAS compliant |
| **Signaturit** | Empresa española, orientada a PYMES, soporte en español | 29-89 €/mes | eIDAS, LSSI-CE compliant |
| **Docuten** | Facturas y contratos con factura electrónica integrada | 29-89 €/mes | eIDAS, Facturae |

### Para la generación automática de contratos

**PandaDoc** tiene la generación de documentos integrada:
- Templates con variables: `{{nombre_cliente}}`, `{{precio}}`, `{{fecha_inicio}}`
- Cuando el comercial rellena un formulario → PandaDoc genera el contrato completo → lo envía al cliente para firma → el archivo queda en la plataforma

**Docupilot** — Para empresas con volumen alto de contratos similares:
- Templates en Word con variables
- Se integra con Airtable, Salesforce, HubSpot: cuando se cierra un deal, se genera el contrato automáticamente
- Precio: 29-149 €/mes

**HubSpot CPQ** (si ya tienes HubSpot Sales Pro):
- Genera propuestas y contratos directamente desde el CRM
- Flujo completo: lead cualificado → propuesta → contrato → firma electrónica → todo en un solo sistema

## El flujo de automatización completo con PandaDoc + HubSpot

**Configuración (4-6 horas de trabajo inicial)**:

1. **Crea el template de contrato en PandaDoc** con las variables de los campos que cambian en cada contrato
2. **Conecta PandaDoc con HubSpot** (integración nativa, sin código)
3. **Configura el flujo**:
   - Trigger: deal pasa a etapa "Contrato" en HubSpot
   - Acción: PandaDoc genera el contrato con los datos del deal (nombre del cliente, valor, fechas) y lo envía al email del contacto para firma
   - Cuando se firma: PandaDoc notifica a HubSpot → deal pasa a "Cerrado ganado" → PDF archivado automáticamente en Google Drive y en HubSpot

**Resultado**: el comercial marca un deal como "Contrato" y 5 minutos después el cliente recibe el contrato para firmar. El contrato se archiva solo cuando está firmado.

## El repositorio de contratos: evitar el caos del archivo

El mayor riesgo legal no es la firma — es perder los contratos después de firmarlos. Las consecuencias:
- Contratos que se renuevan automáticamente sin que nadie lo recuerde
- Compromisos de confidencialidad o exclusividad que se olvidan
- Disputas donde no puedes encontrar la versión firmada del contrato

### La solución mínima viable: Airtable como CLM (Contract Lifecycle Management)

Base de datos de Airtable con estos campos para cada contrato:
- Nombre del contrato / contraparte
- Tipo (proveedor, cliente, NDA, laboral, etc.)
- Fecha de firma
- Fecha de vencimiento / renovación
- Valor económico
- Estado (vigente, vencido, en negociación, cancelado)
- Link al PDF firmado (en Google Drive o DocuSign)
- Notas relevantes (obligaciones especiales, penalizaciones)

**Automatización de alertas con Zapier**:
- 90 días antes del vencimiento: email al responsable con un resumen del contrato y la pregunta "¿renovamos o no?"
- 30 días antes: recordatorio de urgencia
- Día del vencimiento: notificación si no se ha marcado como renovado o cancelado

## Cuál es tu punto de partida

Cuéntame:
- ¿Qué tipo de contratos gestionas con más frecuencia? (clientes, proveedores, NDAs, laborales)
- ¿Cuántos contratos firmáis al mes de media?
- ¿Qué herramientas usáis ya para la gestión comercial?

Con eso diseño el flujo de automatización de contratos más adecuado para vuestro volumen y presupuesto, con instrucciones paso a paso para configurarlo esta semana.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 35,
                'use_case'         => 'Automatizar la generación, firma electrónica y archivo de contratos para reducir el tiempo de firma de días a horas y eliminar la gestión manual.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Stack de soporte sin código',
                'description'      => 'Intercom, Crisp, Freshdesk y cómo configurar el stack completo de soporte para una startup en un día sin tocar código.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Customer Success con experiencia en startups SaaS que están construyendo su stack de soporte desde cero. Ayúdame a seleccionar, configurar y conectar las herramientas de soporte que mejor se adaptan a una startup en sus primeras etapas, sin necesitar un equipo técnico para la implementación.

## El error más común al elegir las herramientas de soporte

Muchas startups instalan Zendesk o Salesforce Service Cloud desde el principio porque "es lo que usan las empresas grandes". El resultado: pagan por funcionalidades que no usan, el equipo no adopta una herramienta diseñada para cientos de agentes, y la configuración inicial tarda semanas.

La regla del stack de soporte para startups: empieza con lo mínimo que resuelve el problema de hoy, con capacidad de migrar cuando crezcas.

## El stack por etapa de empresa

### Etapa 1 — Pre-product market fit (0-50 clientes)

**Herramienta**: Crisp o Intercom (plan básico)
**Por qué**: necesitas hablar con los clientes directamente, no gestionar tickets. El chat en vivo es la herramienta más valiosa en esta etapa.

**Crisp (6-25 €/mes)**:
- Chat en vivo en la web y en la app
- Bandeja de entrada compartida para el equipo (aunque sean 2 personas)
- Chatbot básico para respuestas fuera de horario
- CRM sencillo con historial de conversaciones
- App móvil para responder desde cualquier lugar

**Intercom (74-374 €/mes)**:
- Todo lo de Crisp, pero con automatizaciones más potentes desde el principio
- Mensajes proactivos basados en comportamiento del usuario (si lleva 3 días sin completar el onboarding, le enviamos un mensaje)
- Mejor integración con HubSpot y Stripe

### Etapa 2 — Post-PMF, crecimiento (50-500 clientes)

**Herramienta**: Intercom (plan completo) o Freshdesk
**Por qué**: el volumen de tickets empieza a requerir priorización, asignación y métricas.

**Freshdesk (0-79 €/agente/mes)**:
- El plan gratuito aguanta hasta 10 agentes con funcionalidades sorprendentemente completas
- Sistema de tickets con prioridades, etiquetas y SLAs
- Base de conocimiento incluida (la FAQ que resuelve el 30% de los tickets antes de que se creen)
- Automatizaciones de asignación: los tickets de un tipo van siempre al agente especializado
- Freshchat integrado para el chat en vivo

**Intercom (plan pro)**:
- Mejor experiencia para el cliente final
- IA integrada para sugerencias al agente en tiempo real
- Mejor para productos con ciclos de vida de cliente largos y complejos

### Etapa 3 — Escala (500+ clientes, equipo de soporte >5 personas)

**Herramienta**: Zendesk Suite o Intercom Enterprise
**Por qué**: necesitas routing avanzado, skills-based assignment, reportes de rendimiento por agente y SLAs configurables por segmento de cliente.

## Configuración del stack en un día: Freshdesk + Crisp

### Mañana (3-4 horas): Configuración de Freshdesk

**Paso 1 — Cuenta y equipo (30 min)**:
- Crea la cuenta en freshdesk.com
- Invita a los agentes con sus roles
- Configura el email de soporte (support@tudominio.com) para que los emails lleguen como tickets automáticamente

**Paso 2 — Categorías y etiquetas (30 min)**:
Define las categorías de soporte que reflejan los tipos de consulta más frecuentes:
- Onboarding / primeros pasos
- Facturación y pagos
- Bug o error técnico
- Solicitud de funcionalidad
- Cancelación o baja

**Paso 3 — Automatizaciones de asignación (45 min)**:
Configura las reglas automáticas:
- Tickets con asunto que incluye "factur" o "pago" → asignados al agente de billing
- Tickets de clientes en plan Enterprise → prioridad alta + asignados al CS senior
- Tickets sin respuesta en 4 horas → escalan automáticamente al manager

**Paso 4 — SLAs por plan de cliente (30 min)**:
- Plan gratuito: primera respuesta en 24h hábiles
- Plan básico: primera respuesta en 8h hábiles
- Plan pro: primera respuesta en 4h hábiles, resolución en 24h

**Paso 5 — Base de conocimiento (1h)**:
Las 10 preguntas más frecuentes en formato artículo. El objetivo: que el 20-30% de los usuarios encuentren la respuesta aquí antes de abrir un ticket.

### Tarde (2-3 horas): Integración y automatización con Zapier

**Integración 1 — Freshdesk + Slack**:
- Ticket nuevo con prioridad urgente → notificación en #soporte
- Ticket sin respuesta en 2h durante horario laboral → ping al agente asignado

**Integración 2 — Freshdesk + Stripe**:
- Cuando un cliente abre un ticket, Freshdesk muestra automáticamente su plan, MRR y fecha de incorporación → el agente tiene contexto antes de responder

**Integración 3 — Freshdesk + Notion**:
- Cuando se cierra un ticket con tag "bug" → se crea automáticamente un issue en el backlog de Notion/Linear para que producto lo evalúe

## Las métricas que debes revisar cada semana

| Métrica | Definición | Benchmark bueno |
|---|---|---|
| CSAT | Satisfacción post-ticket (1-5) | >4.2 |
| First Reply Time | Tiempo hasta la primera respuesta | <4h en horario laboral |
| Resolution Time | Tiempo total hasta cierre | <24h para consultas generales |
| First Contact Resolution | % de tickets resueltos sin volver a contactar | >70% |
| Ticket deflection | % de usuarios que usaron la KB antes del ticket | >25% |

## Tu stack en un día

Cuéntame:
- ¿Cuántos clientes tienes y cuántos tickets recibes a la semana de media?
- ¿Cuántas personas gestionan el soporte ahora mismo?
- ¿Qué herramientas de negocio usas ya (CRM, facturación, comunicación)?

Con eso elijo la herramienta exacta y te doy el plan de configuración paso a paso para que el stack esté operativo en 8 horas.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 40,
                'use_case'         => 'Seleccionar y configurar el stack de soporte al cliente para una startup (Intercom, Crisp, Freshdesk) sin necesidad de un equipo técnico.',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Automatización del negocio freelance',
                'description'      => 'Automatiza propuestas, seguimiento de clientes, facturación y cobros para recuperar 5 horas semanales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de productividad y operaciones para freelancers y consultores independientes. Ayúdame a identificar y automatizar las partes del negocio freelance que consumen tiempo administrativo sin generar valor: propuestas repetitivas, seguimiento de clientes, facturación, cobros y reportes de tiempo.

## El tiempo administrativo del freelance: el impuesto oculto

Un freelance que factura 50.000 € al año suele dedicar entre 8 y 12 horas semanales a tareas administrativas: responder emails de seguimiento, preparar facturas, perseguir pagos atrasados, actualizar el CRM, enviar propuestas similares a las anteriores. Eso es entre el 20% y el 30% de su tiempo laboral.

Si ese tiempo se recupera con automatizaciones, puede invertirse en trabajo facturable o en marketing que genere más clientes.

## Los 5 procesos más automatizables del negocio freelance

### 1. La propuesta comercial automática

**El problema**: cada propuesta empieza desde cero o copiando la anterior, con el riesgo de que queden campos del cliente anterior o información desactualizada.

**La solución con PandaDoc o Notion + Make**:
- Template de propuesta con variables: `{{nombre_cliente}}`, `{{proyecto}}`, `{{precio}}`, `{{fecha_entrega}}`
- Cuando decides enviar una propuesta, rellenas un formulario simple con los datos del cliente y el proyecto
- Make genera el documento con el template y lo envía al cliente para firma electrónica
- Cuando el cliente firma: Make crea el proyecto en tu Notion/Trello, envía email de confirmación y crea el primer hito de facturación

**Coste en tiempo de configuración**: 3-4 horas.
**Tiempo ahorrado**: 45-90 minutos por propuesta.

### 2. El seguimiento automático de leads

**El problema**: en el caos del trabajo, los potenciales clientes que no responden inmediatamente se pierden. El seguimiento manual es incómodo y se olvida.

**La solución con un CRM sencillo + Zapier**:
- Usa HubSpot gratuito o Notion como CRM mínimo
- Cuando envías una propuesta, creates una tarea de seguimiento automática para 3 días después
- Si el cliente no ha respondido en 3 días: Zapier envía un email de seguimiento automático personalizado ("¿tuviste oportunidad de revisar la propuesta?")
- Si no hay respuesta en 7 días: segundo seguimiento con una pregunta diferente ("¿hay algo que haya quedado poco claro?")
- Regla: máximo 2 seguimientos automáticos. El tercero lo envías tú de forma manual si realmente quieres el proyecto.

### 3. La facturación automática recurrente

**El problema**: los clientes con retainer mensual requieren crear la misma factura todos los meses, enviarla, recordar si ha sido pagada y gestionar los impagados.

**La solución con Holded, Wave o Stripe**:

**Holded (para freelancers españoles)**:
- Crea la factura recurrente una vez con la frecuencia que quieras (mensual, trimestral)
- Se genera y se envía automáticamente el día que configures
- El cliente puede pagar online directamente desde la factura
- Holded hace la remisión a la contabilidad automáticamente (si tu gestor usa Holded también, ahorra horas de comunicación)
- Precio: 25-50 €/mes

**Wave (para freelancers internacionales)**:
- Gratuito para facturación y contabilidad básica
- Facturación recurrente incluida
- Cobros con tarjeta integrados (3% de comisión)

**Stripe (para servicios digitales)**:
- Si tus clientes son empresas digitales, puedes cobrar por tarjeta con autorización recurrente
- Ideal para servicios de suscripción mensual
- Gestión de impagos automática (reintentos de cobro, notificaciones, suspensión de servicio)

### 4. Los recordatorios de pago automáticos

**El problema**: perseguir facturas impagadas es la tarea más incómoda del trabajo freelance. Se evita, se retrasa, y el resultado es que el cash flow se resiente.

**La solución con Holded o con Zapier + tu herramienta de email**:
- 3 días antes del vencimiento: email recordatorio amable ("tu factura vence en 3 días")
- Día del vencimiento (si no ha pagado): email de recordatorio con el link de pago
- 7 días después del vencimiento: email más firme con mención al acuerdo de pago y las consecuencias de la demora
- 15 días: llamada o email personal (este sí lo haces tú)

**Dato importante**: el 80% de los pagos atrasados se resuelven con el primer recordatorio automático. El cliente no ha pagado porque se ha olvidado, no porque no quiera.

### 5. El tracking de tiempo y el reporte de horas

**Problema**: si cobras por horas o necesitas demostrar el tiempo invertido a tus clientes, el tracking manual siempre tiene lagunas.

**La solución con Toggl + Google Sheets + Zapier**:
- Toggl es la herramienta de tracking de tiempo más sencilla (gratuita para freelancers)
- Al final de cada mes: Zapier extrae el resumen de horas de Toggl y lo vuelca en una hoja de Google Sheets
- La hoja genera automáticamente el informe de horas por cliente y por proyecto
- Puedes incluir ese informe como PDF adjunto en la factura mensual automáticamente

## Tu sistema en 2 semanas

**Semana 1 — Los cimientos**:
- Elige la herramienta de facturación (Holded si eres español, Wave si facturas internacionalmente)
- Configura la facturación recurrente para todos los retainers actuales
- Activa los recordatorios automáticos de pago

**Semana 2 — El pipeline**:
- Crea el template de propuesta en PandaDoc o Notion
- Configura el CRM mínimo con el seguimiento automático de leads
- Instala Toggl y empieza a medir el tiempo (aunque no lo uses para facturar, los datos te sorprenderán)

**Tiempo ahorrado estimado después de las 2 semanas**: 3-5 horas semanales.
**Coste de las herramientas**: 30-80 €/mes (lo recuperas en la primera hora de trabajo facturable liberada).

Cuéntame cuántos clientes tienes, si facturas por proyecto o por horas, y cuál es la tarea administrativa que más te frustra. Te diseño el flujo de automatización exacto para tu caso.
PROMPT
,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 30,
                'use_case'         => 'Automatizar la gestión administrativa del negocio freelance (propuestas, facturación, cobros, seguimiento) para recuperar horas semanales de trabajo facturable.',
                'vote_score'       => 50,
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
