<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills88Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de lanzamiento de producto — el plan Go-to-Market desde cero',
                'description'      => 'Diseña el plan de lanzamiento de producto completo: coordinación de PR, comunidad, paid y contenido, con el calendario de activación y las métricas de éxito del Go-to-Market.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Head of Marketing con experiencia en lanzamientos de producto en startups B2B y B2C que han pasado de cero a miles de usuarios en los primeros 90 días. Necesito diseñar el plan de Go-to-Market completo para el lanzamiento de nuestro producto o de una nueva funcionalidad significativa.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Qué es exactamente lo que se lanza? (nuevo producto, nueva funcionalidad, nuevo mercado, rebrand)
2. ¿Cuál es la fecha de lanzamiento objetivo y cuántas semanas de preparación tienes?
3. ¿Cuál es el público objetivo y qué problema resuelve el producto para ellos?
4. ¿Cuál es el modelo de negocio y el precio? (freemium, suscripción, one-time, marketplace)
5. ¿Qué canales y audiencias propias tienes ya? (email list, seguidores, comunidad, relaciones con medios)

## La Estructura del Go-to-Market en 3 Fases

Un lanzamiento exitoso no ocurre en el día de lanzamiento: se construye durante semanas antes y se mantiene durante semanas después.

**Fase Pre-lanzamiento (semanas -8 a -1): Construir expectativa**
**Fase Lanzamiento (días 0 a 7): Maximizar el impacto inicial**
**Fase Post-lanzamiento (semanas +2 a +8): Sostener el momentum**

## Fase 1: Pre-lanzamiento — Construir la Base

### Semanas -8 a -6: Preparación y Posicionamiento

**Definir el mensaje central del lanzamiento:**
El mensaje de lanzamiento no es el listado de features. Es la transformación que el producto promete al usuario.

Template de mensaje de lanzamiento:
- Para: [quién es el usuario objetivo]
- Que: [problema o necesidad]
- [Nombre del producto] es: [categoría del producto]
- Que: [beneficio principal]
- A diferencia de: [alternativa actual]
- Nuestro producto: [diferenciador principal]

**Preparar los activos del lanzamiento:**
- Landing page de lanzamiento con CTA principal
- Kit de prensa (one-pager, screenshots, vídeo de producto de 60-90 seg)
- Mensajes adaptados para cada canal (no el mismo texto para todos)
- FAQs para el equipo de soporte

### Semanas -6 a -4: Construir Audiencia Pre-lanzamiento

**Lista de espera:**
Una lista de espera antes del lanzamiento cumple tres funciones: valida la demanda, construye anticipación y te da un activo para activar el día del lanzamiento.

Landing de lista de espera efectiva:
- Propuesta de valor clara en una frase
- Una sola acción: dejar el email
- Opcionalmente: mecánica de referidos (sube en la lista invitando amigos — modelo Robinhood/Superhuman)

**Early access y beta cerrada:**
Selecciona 20-50 usuarios de beta que sean representativos de tu ICP. Sus testimonios, su feedback y su historia son el contenido más poderoso del lanzamiento.

### Semanas -4 a -2: Activar los Canales

**PR y medios:**
Contacta a periodistas y newsletters relevantes de tu sector con un embargo: "Te doy la exclusiva antes del lanzamiento público si publicas el día X". Las publicaciones con embargo coordinado amplifican el impacto del día de lanzamiento.

Lista de medios por prioridad:
1. Newsletters de nicho que lee tu ICP exacto (mayor conversión)
2. Publicaciones de sector con audiencia cualificada
3. Medios generalistas de tecnología o negocio (mayor alcance, menor conversión)

**Comunidad y early adopters:**
Activa tu comunidad existente (si tienes): anuncia el lanzamiento próximo, crea un hilo de "estamos construyendo X", haz partícipes a los más activos.

Comunidades de terceros: Product Hunt, IndieHackers, comunidades de Slack o Discord de tu sector.

## Fase 2: Lanzamiento — El Día D y la Primera Semana

### El Día de Lanzamiento: La Secuencia

| Hora | Acción | Canal |
|---|---|---|
| 00:01 | Publicación en Product Hunt (si aplica) | Product Hunt |
| 8:00 | Email a la lista de espera | Email |
| 9:00 | Post de lanzamiento en LinkedIn del fundador | LinkedIn |
| 10:00 | Publicación coordinada de early adopters y beta testers | LinkedIn/Twitter |
| 12:00 | Publicación de artículos de medios con embargo | PR |
| 14:00 | Newsletter interna a toda la base de contactos | Email |
| 16:00 | Stories e interacción en redes sociales | Social |
| 18:00 | Primera revisión de métricas: ¿qué está funcionando? | Interno |

**La regla del momentum de Product Hunt:**
Si vas a Product Hunt, necesitas 200+ upvotes en las primeras 4 horas para aparecer en la lista principal. Prepara una lista de 100+ personas que van a upvotear coordinadamente desde las primeras horas.

### Los Canales de Paid para el Lanzamiento

El paid en lanzamiento sirve para amplificar lo que ya está funcionando orgánicamente, no para sustituirlo.

**Presupuesto de lanzamiento sugerido por canal:**

| Canal | Cuándo activarlo | Para qué |
|---|---|---|
| Google Search (branded) | Día 0 | Capturar la demanda que genera el PR |
| LinkedIn Ads (B2B) | Semana 1-2 | Llegar al ICP exacto con el mensaje de lanzamiento |
| Meta/Instagram (B2C) | Semana 1-2 | Escalar el alcance de la audiencia objetivo |
| Retargeting | Semana 2+ | Reconvertir visitantes que no se registraron |

## Fase 3: Post-lanzamiento — Mantener el Momentum

El lanzamiento genera una ola de atención que dura 7-14 días. Tu trabajo es convertir esa atención en usuarios activos y en contenido que siga generando tráfico.

**Contenido de post-lanzamiento:**
- "El making-of del lanzamiento": transparencia sobre el proceso genera engagement
- Métricas del lanzamiento (las que puedas compartir): "500 usuarios en 48 horas"
- Primeros casos de éxito de usuarios: el contenido más poderoso
- Respuestas a preguntas frecuentes que surgieron en el lanzamiento

**Métricas del Go-to-Market**

| Métrica | Cuándo medirla | Objetivo |
|---|---|---|
| Registros en lista de espera | Pre-lanzamiento | Define el techo de la demanda inicial |
| Registros día 1 | Día 0 | KPI principal del lanzamiento |
| Activación (primer valor obtenido) | Semana 1-2 | > 40% de los registros |
| Retención a 7 días | Semana 2 | > 30% de los registros activos |
| NPS del lanzamiento | Semana 3 | > 40 |
| CAC del lanzamiento | Mes 1 | Comparar con LTV objetivo |

## Entregables

Con el contexto que me des, produce:
1. Mensaje central de lanzamiento: propuesta de valor, tagline y mensajes adaptados por canal
2. Calendario de lanzamiento semana a semana desde -8 hasta +4 con todas las acciones
3. Plan de PR: lista de medios objetivo, pitch template y secuencia de contacto
4. Secuencia de emails de lanzamiento: lista de espera → día de lanzamiento → seguimiento semana 1
5. Dashboard de métricas del lanzamiento: KPIs, herramientas de tracking y criterios de éxito
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar el plan de Go-to-Market completo para el lanzamiento de un producto o funcionalidad, coordinando PR, comunidad, paid y contenido en un calendario de activación',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Analytics en el producto — event tracking, funnels y decisiones con datos de uso',
                'description'      => 'Instrumenta tu producto para recoger eventos de uso, construir funnels de activación y retención, e interpretar los datos para tomar decisiones de producto con evidencia real.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Product Analyst y engineer de datos de producto con experiencia instrumentando productos SaaS y apps móviles para la toma de decisiones basada en datos. Necesito diseñar e implementar el sistema de analytics del producto: qué eventos trackear, cómo estructurar los datos y cómo construir los análisis que realmente guían las decisiones.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es el tipo de producto? (SaaS B2B, app móvil, plataforma de contenido, e-commerce)
2. ¿Tienes ya algún sistema de analytics o empezamos desde cero? (Mixpanel, Amplitude, PostHog, GA4, custom)
3. ¿Cuál es la pregunta de negocio más crítica que no puedes responder con los datos actuales?
4. ¿Quién consumirá los datos? (solo producto, también marketing y negocio, stakeholders ejecutivos)
5. ¿Cuál es el tech stack del producto? (React, Next.js, React Native, Flutter, backend en Node/Rails/Laravel)

## El Principio de Analytics de Producto: La Taxonomía de Eventos

El error más común es empezar a trackear cosas sin un plan: el resultado es una acumulación de eventos sin coherencia que nadie sabe cómo interpretar.

**La taxonomía estándar de eventos (Object-Action):**

Cada evento tiene dos componentes: el objeto sobre el que ocurre la acción y la acción en sí.

Formato: `[objeto]_[accion]`

Ejemplos:
- `project_created`
- `report_exported`
- `subscription_upgraded`
- `onboarding_step_completed`
- `feature_x_first_used`

**Las 4 categorías de eventos que todo producto debe trackear:**

| Categoría | Qué son | Ejemplos |
|---|---|---|
| Eventos de activación | Acciones que indican que el usuario llegó al primer valor | `project_created`, `first_report_generated`, `team_member_invited` |
| Eventos de engagement | Acciones de uso regular que indican hábito | `dashboard_viewed`, `report_viewed`, `search_performed` |
| Eventos de conversión | Acciones de alto valor de negocio | `trial_started`, `subscription_upgraded`, `plan_downgraded` |
| Eventos de fricción | Acciones que indican problemas | `error_encountered`, `help_doc_opened`, `support_ticket_created` |

## El Plan de Tracking: Qué Trackear y Cómo

### El Documento de Tracking Plan

Antes de escribir una línea de código, documenta cada evento en un Tracking Plan:

```
TRACKING PLAN — [Nombre del producto]
Última actualización: [fecha]

Evento: project_created
Descripción: El usuario ha creado su primer proyecto
Cuándo se dispara: Al hacer clic en "Confirmar" en el modal de creación de proyecto
Propiedades:
  - project_type (string): tipo de proyecto seleccionado
  - template_used (boolean): si usó una plantilla o empezó desde cero
  - onboarding_step (integer): paso del onboarding en el que estaba, si aplica
Owner: Equipo de Producto
```

### Implementación en JavaScript con Segment

Segment es el estándar para enviar eventos a múltiples destinos (Mixpanel, Amplitude, BigQuery) desde una sola integración:

```javascript
// Inicialización
analytics.identify(userId, {
    email: user.email,
    name: user.name,
    plan: user.subscription.plan,
    created_at: user.created_at,
    company: {
        id: user.company.id,
        name: user.company.name,
        employees: user.company.size,
    }
});

// Evento de activación
analytics.track('project_created', {
    project_type: project.type,
    template_used: project.from_template,
    onboarding_step: user.onboarding.current_step,
});

// Evento de página
analytics.page('Dashboard', {
    section: 'Projects',
});
```

### Implementación con PostHog (alternativa open source)

```javascript
// En tu archivo de inicialización
import posthog from 'posthog-js';
posthog.init('<tu-api-key>', { api_host: 'https://app.posthog.com' });

// Identificar usuario
posthog.identify(userId, {
    email: user.email,
    plan: user.plan,
});

// Evento
posthog.capture('project_created', {
    project_type: project.type,
    template_used: project.from_template,
});
```

## Los Funnels de Producto: Los Análisis Más Importantes

### Funnel de Activación

El funnel de activación mide cuántos usuarios llegan al "aha moment" del producto — el momento en que por primera vez obtienen el valor prometido.

**Estructura del funnel de activación:**

```
Registro
    │ [tasa esperada: 100%]
    ▼
Completa onboarding paso 1
    │ [típico: 70-80%]
    ▼
Completa la acción de setup clave
    │ [típico: 40-60%]
    ▼
AHA MOMENT — Primera vez que obtiene valor
    │ [típico: 20-40%]
    ▼
Uso en el día 7 post-registro
    │ [típico: 10-30%]
```

Cada paso donde la tasa de conversión cae más de lo esperado es un punto de fricción a investigar.

### Funnel de Conversión Free → Paid

```
Registros en plan gratuito
    │ [baseline: 100%]
    ▼
Completa activación (aha moment)
    │ [objetivo: > 40%]
    ▼
Alcanza límite del plan gratuito
    │ [depende del diseño freemium]
    ▼
Hace clic en "Upgrade"
    │ [objetivo: > 15% de los activados]
    ▼
Completa el pago
    │ [objetivo: > 70% de los que hacen clic]
    ▼
Usuario de pago activo
```

## Heat Maps y Session Recordings

Para entender el comportamiento dentro de una página o flujo específico:

**Hotjar o Microsoft Clarity (gratuito):**
- Heat maps de clics: qué clica la gente, en qué orden
- Scroll maps: hasta dónde llega la gente en páginas largas
- Session recordings: grabaciones de sesiones individuales para ver cómo navega un usuario real

**Cuándo usar session recordings:**
- Cuando el funnel de activación muestra una caída inesperada en un paso
- Cuando el NPS es bajo pero no sabes qué está causando la insatisfacción
- Cuando hay una feature nueva con baja adopción y quieres entender por qué

## Métricas Clave por Tipo de Producto

| Métrica | SaaS B2B | App móvil | E-commerce |
|---|---|---|---|
| Activación | % que completa onboarding | DAU/MAU ratio | % que completa primera compra |
| Engagement | Features activas por cuenta | Sesiones por usuario por semana | Frecuencia de compra |
| Retención | Net Revenue Retention | D7/D30 retention | Repeat purchase rate |
| Expansión | % de upgrades / expansión de licencias | In-app purchases | AOV, cross-sell rate |

## Entregables

Con el contexto que me des, produce:
1. Tracking Plan completo: los 20-30 eventos más importantes con sus propiedades y condición de disparo
2. Implementación en código del SDK de tu herramienta (Segment, PostHog o Mixpanel) con los primeros 5 eventos
3. Definición del AHA moment de tu producto y el funnel de activación con las etapas y tasas objetivo
4. Dashboard de product analytics: las 10 métricas que todo el equipo debe revisar semanalmente
5. Plan de análisis para el primer mes: qué preguntas responder en qué orden con los nuevos datos
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Instrumentar el producto con event tracking, construir funnels de activación y usar los datos de uso para tomar decisiones de producto con evidencia real',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencias de realidad aumentada (AR) — UX para filtros, overlays y objetos 3D',
                'description'      => 'Aprende los principios de UX para diseñar experiencias de realidad aumentada en móvil: filtros, overlays informativos, objetos 3D en el mundo real y los patrones de interacción específicos de AR.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de experiencias de realidad aumentada (AR) con experiencia en apps móviles para iOS (ARKit) y Android (ARCore), así como en filtros para redes sociales (Instagram, Snapchat, TikTok). Necesito entender los principios de UX específicos de AR y cómo aplicarlos para diseñar experiencias que funcionen de verdad en el mundo real.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Qué tipo de experiencia AR quieres diseñar? (filtro social, overlay informativo, objeto 3D en el espacio, try-on virtual, navegación AR)
2. ¿Cuál es la plataforma objetivo? (iOS, Android, filtros de Instagram/TikTok, WebAR)
3. ¿Cuál es el contexto de uso? (¿dónde y cuándo lo usará el usuario: interior, exterior, sentado, caminando?)
4. ¿Tienes ya una identidad de marca o sistema de diseño base?
5. ¿Has diseñado para AR antes o es tu primera experiencia?

## Por Qué el UX de AR es Diferente

El diseño AR no es diseño de pantalla trasladado al mundo real. Las reglas cambian porque el contexto cambia radicalmente:

**Lo que cambia en AR respecto al diseño de pantalla:**
- El entorno es dinámico e impredecible: la cámara ve luz, sombras, texturas y movimiento
- El usuario tiene las manos ocupadas sosteniendo el dispositivo o interactuando con objetos reales
- La atención está dividida entre la pantalla y el mundo físico
- La ergonomía de uso (ángulo de cámara, postura, distancia) varía constantemente
- La fatiga es mayor: los ojos y el brazo se cansan antes que en uso de pantalla convencional

## Los 5 Tipos de Experiencias AR y Sus Principios

### Tipo 1: Filtros Faciales (Face Tracking)

Detectan la cara del usuario y superponen elementos visuales: maquillaje virtual, accesorios, efectos, transformaciones.

**Principios de diseño:**
- Alineación precisa: el filtro debe seguir los movimientos de la cara sin lag perceptible (< 50ms)
- Escala coherente: los elementos deben escalarse con la distancia de la cara a la cámara
- Luz y sombra: los elementos deben responder a la iluminación del entorno para parecer reales
- Interacción por gestos o expresiones: abrir la boca, levantar las cejas, guiñar → trigger de animación

**El modelo de capas de un filtro facial:**
```
Capa 4: Efectos de partículas (confeti, estrellas, lluvia)
Capa 3: Elementos flotantes (texto, iconos, coronas)
Capa 2: Superpuestos sobre la cara (maquillaje, gafas, sombrero)
Capa 1: Fondo/sustitución de fondo
```

### Tipo 2: Objetos 3D en el Espacio (Surface Detection)

Detectan superficies horizontales o verticales y colocan objetos 3D sobre ellas (muebles, productos, personajes).

**El flujo de interacción estándar:**
1. Detección de superficie → indicador visual de "escaneando" (anillo animado)
2. Superficie detectada → indicador de posición disponible (punto o cuadrícula)
3. Tap para colocar → objeto aparece con animación de entrada
4. Gestos para manipular → pinch para escalar, rotate para girar, drag para mover
5. Acción final → guardar foto/vídeo o comprar el producto

**Patrones de feedback durante la detección:**
| Estado | Feedback visual | Feedback háptico |
|---|---|---|
| Buscando superficie | Anillo pulsante en el centro de la pantalla | No |
| Superficie parcial | Cuadrícula punteada con transparencia | Vibración suave |
| Superficie confirmada | Cuadrícula sólida, icono de "tap para colocar" | Vibración corta |
| Objeto colocado | Sombra en el suelo, animación de entrada | Vibración de confirmación |

### Tipo 3: Overlays Informativos (World Tracking + Reconocimiento)

Superponen información sobre objetos del mundo real: reconocimiento de producto, traducción en tiempo real, información de puntos de interés.

**Principios de legibilidad en AR:**
- El texto en AR nunca flota libremente: siempre tiene un fondo semitransparente que garantiza el contraste
- Tamaño mínimo de texto: 18sp/pt (mayor que en pantalla normal) porque el usuario está mirando a través de la cámara
- Las etiquetas de información se anclan al objeto con una línea de conexión (leader line)
- La información más importante está más cerca del centro de la pantalla

### Tipo 4: Try-On Virtual (Wearables y Moda)

Permiten al usuario "probarse" gafas, ropa, accesorios o maquillaje en tiempo real.

**Los retos de UX específicos:**
- La precisión del ajuste es crítica: si el producto no se ve bien en AR, el usuario desconfía
- El usuario necesita comparar opciones rápidamente: la navegación entre variantes debe ser inmediata
- La captura de foto/vídeo para compartir es parte del flujo, no un extra
- Mostrar el precio y el CTA de compra sin bloquear la vista del producto

### Tipo 5: Navegación AR (Wayfinding)

Superponen flechas, rutas y señales sobre el mundo real para guiar al usuario en interiores o exteriores.

**Principios específicos:**
- Las flechas de navegación deben estar ancladas al suelo, no flotando en el aire
- La información de distancia y tiempo se actualiza en tiempo real
- El diseño debe funcionar con luz solar directa: contraste máximo, nunca solo basado en color

## Patrones de Interacción Específicos de AR

| Patrón | Gesto | Cuándo usarlo |
|---|---|---|
| Colocar objeto | Tap sobre superficie detectada | Primera acción en Surface AR |
| Escalar | Pinch (dos dedos) | Ajustar tamaño de objeto colocado |
| Rotar | Rotate (dos dedos) | Girar objeto sobre su eje Y |
| Mover | Drag (un dedo) | Reubicar objeto en la superficie |
| Activar efecto | Expresión facial | Filtros faciales con trigger |
| Capturar | Botón dedicado visible | Siempre accesible sin mover el dispositivo |

## La UI de AR: Lo Que Va en Pantalla

En AR, la pantalla es el visor del mundo real. La UI debe ser mínima:

**Elementos de UI que sí deben estar en pantalla:**
- Botón de captura (foto/vídeo): prominente, accesible con el pulgar
- Navegación entre variantes/efectos: carrusel horizontal en la parte inferior
- Botón de salida/cerrar: siempre visible en la esquina superior
- Indicadores de estado del tracking: solo cuando el usuario necesita actuar (mover el dispositivo)
- CTA de acción (comprar, compartir): solo cuando el objeto está colocado y el usuario ha terminado

**Lo que NO debe estar en pantalla:**
- Menús complejos que requieran múltiples taps mientras se usa la cámara
- Texto largo que haya que leer mientras se mueve el dispositivo
- Notificaciones del sistema que interrumpan la experiencia

## Entregables

Con el contexto que me des, produce:
1. Flujo de experiencia AR completo: estados, transiciones y feedback para cada paso
2. Especificación de gestos: tabla de interacciones, triggers y feedback háptico y visual
3. Guía de UI de AR: qué elementos van en pantalla, dónde y con qué especificaciones de contraste
4. Definición de los estados de tracking: cómo comunicar al usuario que escanee, espere o actúe
5. Checklist de pruebas de usabilidad AR: qué validar en condiciones reales (luz, espacio, distancia)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar experiencias de realidad aumentada para móvil con principios de UX específicos de AR: gestos, feedback, UI mínima y flujos adaptados al contexto del mundo real',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Prospección en LinkedIn Sales Navigator — búsquedas avanzadas y outreach que no parece automatizado',
                'description'      => 'Domina LinkedIn Sales Navigator para construir listas de cuentas y contactos de alta calidad, y diseña secuencias de outreach que generen respuesta sin parecer mensajes masivos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en prospección B2B en LinkedIn con experiencia en equipos de ventas que usan LinkedIn Sales Navigator para generar pipeline cualificado. Necesito aprender a usar Sales Navigator de forma avanzada y a construir secuencias de outreach que generen respuestas reales, no las ignoradas porque parecen automatizadas.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es tu ICP exacto? (industria, tamaño de empresa, cargo del decisor, geografía)
2. ¿Tienes ya Sales Navigator o estás evaluando si vale la pena?
3. ¿Cuáles son tus métricas actuales de outreach? (tasa de aceptación, tasa de respuesta, meetings generados)
4. ¿Cuántos prospectos nuevos necesitas contactar por semana para alcanzar tu objetivo de pipeline?
5. ¿Qué herramientas de automatización usas actualmente o has considerado? (Lemlist, Outreach, Salesloft, Apollo)

## Por Qué el Outreach en LinkedIn Tiene Tan Baja Tasa de Respuesta

La mayoría de los mensajes de LinkedIn se ignoran por las mismas razones:
- Son claramente automáticos (mismo template, sin personalización real)
- Hablan del producto antes de entender si el prospecto tiene el problema
- El primer mensaje ya pide una reunión (demasiado pronto)
- No hay relación previa ni punto de conexión genuino

La paradoja del outreach en LinkedIn: cuanto más escala (automatización, volumen), menos funciona porque el prospecto ya reconoce el patrón.

## LinkedIn Sales Navigator: Las Búsquedas que Importan

### Filtros Avanzados de Leads (para encontrar personas)

**Los filtros más potentes para calificar prospectos:**

| Filtro | Cómo usarlo |
|---|---|
| Cargo | Usa variantes: "VP Sales", "Head of Sales", "Director of Revenue". Evita "Sales Manager" si buscas decisores |
| Seniority Level | Director, VP, C-Level para decisores. Manager para influenciadores |
| Años en el cargo | 1-2 años = nuevo en el cargo, más receptivo a cambios |
| Años en la empresa | < 1 año = nueva en la empresa, posiblemente con mandato de cambio |
| Actividad en LinkedIn | Publicó en los últimos 30 días = prospecto activo en la plataforma |
| Conexiones en común | Conexiones de 2º grado con conexiones mutuas relevantes |
| Cambio de cargo reciente | Trigger de compra: acaba de asumir el cargo |

**La búsqueda de los "trigger events" (los prospectos más receptivos):**

Los mejores prospectos son los que acaban de vivir un evento que genera urgencia de compra:
- Cambio de cargo en los últimos 90 días (nuevo VP que quiere mostrar resultados)
- La empresa acaba de cerrar una ronda de financiación (tienen presupuesto y mandato de crecer)
- La empresa acaba de anunciar expansión a un nuevo mercado
- Han publicado una oferta de empleo para el rol que tu solución apoya (tienen el problema)

**Cómo detectar rondas de financiación:** Filtro "Company Headcount Growth" > 10% + búsqueda en Crunchbase de financiación reciente.

### Filtros Avanzados de Cuentas (Account-Level)

| Filtro | Para qué |
|---|---|
| Headcount | Define el tamaño de empresa que buscas |
| Headcount Growth | > 10% = empresa en crecimiento activo |
| Department headcount | Cuántos en el departamento objetivo (muestra la madurez del área) |
| Technologies Used | Qué stack tecnológico tienen (compatibilidad con tu solución) |
| News Mentions | Empresas que han aparecido en prensa recientemente |

## El Sistema de Listas en Sales Navigator

No trabajes con búsquedas sueltas: crea listas organizadas.

**Estructura de listas recomendada:**
```
CUENTAS
├── Tier 1 — Cuentas prioritarias (50-100 cuentas)
├── Tier 2 — Cuentas secundarias (200-500 cuentas)
└── En investigación (para calificar)

LEADS
├── Decision makers activos (publicaron en LinkedIn recientemente)
├── Champions potenciales (usuario del producto, no comprador)
└── Por conectar — secuencia activa
```

**Alerts de Sales Navigator (tu radar de compra):**
Activa alertas para tus cuentas Tier 1 para recibir notificaciones cuando:
- Hay un cambio de cargo relevante en la cuenta
- La empresa aparece en noticias
- Alguien de la cuenta publica en LinkedIn

## El Outreach que Genera Respuesta: La Secuencia de 3 Pasos

### Paso 1: El Calentamiento (antes del primer mensaje)

Antes de enviar ningún mensaje, crea un punto de conexión:
- Sigue la empresa en LinkedIn
- Dale like o comenta un post reciente de la persona (algo genuino, no "¡Gran contenido!")
- Conecta con alguien de su red que te sea común

### Paso 2: La Solicitud de Conexión (sin nota, o con nota corta)

Enviar solicitud sin nota tiene mayor tasa de aceptación que con nota en la mayoría de sectores. Si envías nota, que sea de 1 línea: el motivo de conexión genuino.

"Hola [Nombre], he leído tu post sobre [tema] y me pareció muy relevante dado el trabajo que hacemos en [área]. Me gustaría conectar."

### Paso 3: El Primer Mensaje Post-Conexión

El primer mensaje tras aceptar la conexión no es de venta. Es el inicio de una conversación.

**Template que genera respuesta:**
```
Hola [Nombre],

Gracias por conectar. Vi que [empresa] está [expansión/lanzamiento/cambio reciente]
— enhorabuena, parece un momento interesante.

Trabajo con [tipo de empresa similar] en [área] y suelo ver que en fases como la
vuestra el principal reto es [problema específico]. ¿Estáis notando algo así
o vuestro contexto es diferente?

[Tu nombre]
```

Lo que hace diferente a este mensaje:
- Demuestra que has investigado la empresa (trigger event)
- No habla del producto
- Termina con una pregunta abierta sobre su contexto, no con un pitch

## Métricas del Outreach en LinkedIn Sales Navigator

| Métrica | Benchmark | Cómo mejorarla |
|---|---|---|
| Tasa de aceptación de conexión | 30-45% | Mejor targeting, nota personalizada |
| Tasa de respuesta al primer mensaje | 15-25% | Trigger events, preguntas abiertas |
| Tasa de conversión a meeting | 5-10% de los contactados | Propuesta de valor clara, seguimiento |
| Pipeline generado por LinkedIn | Variable | Tracking de la fuente en el CRM |

## Entregables

Con el contexto que me des, produce:
1. Configuración de búsqueda guardada en Sales Navigator: filtros exactos para tu ICP con variantes de cargo
2. Lista de trigger events relevantes para tu mercado y cómo detectarlos en Sales Navigator
3. Secuencia de outreach de 5 toques con templates adaptados a tu propuesta de valor
4. Estructura de listas de cuentas y leads con el proceso de calificación para mover entre listas
5. Proceso semanal de prospección: cuánto tiempo, en qué actividades y métricas de seguimiento
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Usar LinkedIn Sales Navigator de forma avanzada para construir listas de prospectos cualificados y diseñar secuencias de outreach que generen respuesta real',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'OKRs para equipos de producto — define, alinea y revisa objetivos sin burocracia',
                'description'      => 'Aprende a implementar OKRs en el equipo de producto de forma que generen foco real, alineación con la estrategia de empresa y no se conviertan en otro ejercicio de burocracia trimestral.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de product management con experiencia implementando OKRs en equipos de producto de startups y scaleups. Necesito diseñar o mejorar el proceso de OKRs de mi equipo para que sean útiles en la práctica: que generen foco, que la gente los recuerde a mitad de trimestre y que no sean un ejercicio burocrático que nadie mira después del kick-off.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Has implementado OKRs antes? Si es así, ¿qué no funcionó en el intento anterior?
2. ¿Cuántas personas hay en el equipo de producto y cómo está estructurado?
3. ¿Hay OKRs de empresa ya definidos o el equipo de producto los define de forma independiente?
4. ¿Cuál es el ciclo de planificación actual? (trimestral, semestral, anual)
5. ¿Cuál es el problema más urgente que quieres resolver con los OKRs? (falta de foco, desalineación con empresa, falta de visibilidad de progreso)

## Por Qué los OKRs Fracasan en los Equipos de Producto

Los OKRs son una de las metodologías más mal implementadas en producto. Los problemas más comunes:

- **OKRs como lista de features:** "KR: lanzar la feature X" — esto no es un OKR, es un task list con mejor presentación
- **Demasiados OKRs:** 5 objetivos × 4 KRs = 20 métricas que nadie controla
- **OKRs sin conexión con el trabajo diario:** El backlog sigue siendo igual y los OKRs flotan en un documento que nadie lee
- **Revisión solo al final del trimestre:** El OKR solo tiene valor si genera conversaciones en el camino, no en el post-mortem
- **KRs binarios (hecho / no hecho):** Sin gradiente de progreso, el OKR no informa ni guía

## La Diferencia entre un OKR Malo y uno Bueno

**El test de la "lagging vs. leading metric":**
Un KR correcto mide el resultado deseado (lagging), no la actividad que esperamos que lo genere (leading).

| OKR Malo | OKR Bueno |
|---|---|
| KR: Lanzar la feature de onboarding mejorada | KR: Aumentar la tasa de activación del 28% al 40% |
| KR: Realizar 20 entrevistas de usuario | KR: Identificar y validar el insight de usuario que explique el bajo NRR |
| KR: Publicar 10 releases en el trimestre | KR: Reducir el tiempo de onboarding de 14 a 7 días |

La pregunta para cada KR: "¿Si logramos esto, podría ser porque no hicimos lo correcto o solo porque fuimos muy productivos?" Si la respuesta es sí, el KR es una actividad, no un resultado.

## La Estructura Correcta de OKRs para Producto

**Un equipo de producto bien focalizado tiene:**
- 1-2 Objetivos por trimestre (máximo 3 si el equipo es grande y tiene áreas distintas)
- 2-4 Key Results por Objetivo
- Cada KR es medible numéricamente con una línea de base y un objetivo
- Los OKRs de equipo derivan de los OKRs de empresa (alineación de arriba a abajo)

**Estructura de un Objetivo:**
```
Objetivo: [Verbo + resultado aspiracional + contexto]
"Convertirnos en el producto más rápido de onboarding de nuestra categoría"
"Demostrar que los usuarios encuentran valor en la nueva área de producto"
"Estabilizar la retención para poder acelerar la adquisición con confianza"
```

**Estructura de un Key Result:**
```
KR: [Métrica] de [valor actual] a [valor objetivo]

KR: Tasa de activación de nuevos usuarios del 28% al 42%
KR: D30 retention del 35% al 48%
KR: Tiempo hasta primer valor (TTFV) de 14 días a 6 días
KR: NPS de los usuarios del plan Pro de 32 a 48
```

## El Proceso de Definición: Bottom-Up + Top-Down

El error más común: los OKRs los define la dirección y se comunican hacia abajo. El resultado es que el equipo no los siente suyos.

El proceso que funciona:

**Semana -3 (antes del inicio del trimestre):**
- La dirección comparte los OKRs de empresa y la estrategia del trimestre (contexto)
- Los PMs del equipo hacen una sesión de brainstorming independiente: "Si este trimestre solo pudiéramos mover 2-3 métricas, ¿cuáles serían?"

**Semana -2:**
- Workshop conjunto de OKRs: los PMs presentan sus propuestas, se debaten y se alinean con los OKRs de empresa
- Se definen las métricas de línea de base (los datos de partida para cada KR)

**Semana -1:**
- Revisión final con la dirección y otros equipos para detectar dependencias o conflictos
- Publicación de los OKRs finales en la herramienta compartida del equipo

## Check-ins Semanales: El Hábito que Hace que los OKRs Funcionen

Los OKRs sin revisión semanal son documentos de planificación, no herramientas de gestión.

**El check-in de OKRs de 10 minutos:**

Cada semana, en la reunión del equipo o en el canal de producto:
1. Estado de cada KR: número actual vs. objetivo (en rojo/amarillo/verde)
2. ¿Qué trabajo de esta semana impacta directamente en algún KR?
3. ¿Hay algún KR en riesgo que requiera replantear prioridades?

**El semáforo de OKRs:**
- Verde: en camino de alcanzar el objetivo al ritmo actual
- Amarillo: en riesgo, requiere atención o ajuste
- Rojo: sin avance o retroceso, requiere decisión de replanteo

## La Revisión de Final de Trimestre: Aprender, No Juzgar

El OKR no es un instrumento de performance review individual. Es una herramienta de aprendizaje de equipo.

**Las preguntas de la retrospectiva de OKRs:**
1. ¿Cuánto avanzamos en cada KR? (con datos)
2. ¿Por qué avanzamos más en unos que en otros?
3. ¿Qué aprendimos sobre el problema que atacábamos?
4. ¿Cambió algo en el contexto que hace que el objetivo original ya no sea el correcto?
5. ¿Cómo informan estos resultados a los OKRs del próximo trimestre?

**El score de OKRs en Google:**
Google puntúa los OKRs del 0.0 al 1.0. Un 0.7 es el objetivo ideal: si alcanzas 1.0 todos los trimestres, tus OKRs eran demasiado fáciles.

## Entregables

Con el contexto que me des, produce:
1. Propuesta de OKRs del próximo trimestre para el equipo de producto (máximo 2 objetivos, 3 KRs cada uno)
2. Plantilla de tracking semanal de OKRs con semáforo y campo de notas de contexto
3. Agenda de la sesión de definición de OKRs trimestrales (workshop de 2-3 horas)
4. Mapa de alineación: cómo cada KR del equipo contribuye a los OKRs de empresa
5. Plantilla de retrospectiva de fin de trimestre con las 5 preguntas de aprendizaje
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Implementar OKRs en el equipo de producto con un proceso de definición, alineación y revisión que genere foco real sin convertirse en burocracia trimestral',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Plan de acogida para nuevos empleados — onboarding de 90 días que acelera la integración',
                'description'      => 'Diseña un plan de onboarding de 90 días para nuevos empleados que reduzca el time-to-productivity, mejore la retención en el primer año y cree una experiencia de incorporación memorable.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de personas (People Director) con experiencia diseñando programas de onboarding que reducen el time-to-productivity y mejoran la retención en el primer año. Necesito diseñar o rediseñar el proceso de acogida de nuevos empleados para que sea efectivo, escalable y que cree una primera impresión que refuerce la cultura de la empresa.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuántos empleados nuevos incorporáis al mes y de qué perfiles?
2. ¿Tenéis ya algún proceso de onboarding o empezamos desde cero?
3. ¿Cuál es el problema principal que quieres resolver? (alta rotación en el primer año, bajo rendimiento inicial, mala experiencia del nuevo empleado, inconsistencia entre departamentos)
4. ¿Tienes un HRIS o sistema de gestión de RRHH? (BambooHR, Personio, Workday, etc.)
5. ¿Qué formato de trabajo tienen los nuevos empleados? (presencial, remoto, híbrido)

## El Coste Real del Onboarding Deficiente

Un onboarding pobre no es solo una mala experiencia: tiene un coste económico directo.

**Datos del impacto del onboarding:**
- El 20% de la rotación laboral ocurre en los primeros 45 días de empleo
- Reemplazar a un empleado cuesta entre el 50% y el 200% de su salario anual
- Los empleados con un onboarding estructurado alcanzan la productividad plena un 60% más rápido
- Las empresas con onboarding fuerte tienen un 82% más de retención al año

## Los 4 Errores Más Comunes en el Onboarding

1. **El día 1 de papeleo:** El nuevo empleado pasa su primer día firmando contratos, configurando el portátil y esperando. La primera impresión importa y este modelo la destruye.

2. **Onboarding de producto sin onboarding de cultura:** Se explica qué hacer pero no cómo se hace en esta empresa ni por qué importa.

3. **Sin plan más allá de la primera semana:** El nuevo empleado recibe mucha atención el día 1 y luego queda a la deriva.

4. **Sin métricas de éxito:** Nadie sabe si el onboarding está funcionando porque no hay indicadores definidos.

## El Plan de 90 Días: Estructura Semana a Semana

### Pre-boarding (Antes del Día 1)

El onboarding empieza antes de que el empleado entre por la puerta.

**Acciones de pre-boarding:**
- Enviar email de bienvenida del manager directo el día que se firma el contrato
- Preparar el puesto de trabajo / accesos antes del día 1
- Enviar el "Kit de Bienvenida": manual de cultura, contexto de la empresa, agenda del primer día
- Asignar el buddy (compañero de onboarding) y presentarlos por email antes del primer día
- Tareas opcionales de pre-incorporación: leer documentos clave, ver vídeo de cultura, instalar herramientas

**El email de bienvenida del manager:**
No es una bienvenida corporativa fría. Es un mensaje personal que responde a las 3 preguntas que el nuevo empleado tiene en la cabeza: ¿Estaré bien recibido? ¿Sabré qué hacer? ¿Importaré aquí?

### Semana 1: Orientación y Pertenencia

El objetivo de la primera semana no es productividad: es que el empleado se sienta bienvenido, entienda el contexto y sepa cómo funciona la empresa.

| Día | Foco | Actividades |
|---|---|---|
| Día 1 | Bienvenida y pertenencia | Desayuno con el equipo, setup técnico asistido, reunión 1:1 con el manager, tour de la oficina/herramientas |
| Día 2 | Cultura y propósito | Sesión de cultura: misión, valores, cómo se toman las decisiones aquí |
| Día 3 | Contexto de negocio | Presentaciones de otros equipos (ventas, producto, marketing, operaciones) |
| Día 4 | Rol y expectativas | 1:1 con el manager: expectativas del primer mes, primeras tareas, preguntas abiertas |
| Día 5 | Reflexión y red interna | Tiempo libre con el buddy, primera retrospectiva de la semana |

### Mes 1: Aprendizaje y Primeras Contribuciones

**Objetivos del mes 1:**
- Conocer a las personas clave con las que trabajará
- Entender el producto/servicio en profundidad
- Completar las primeras tareas reales (de baja complejidad)
- Sentirse parte del equipo

**Estructura de las reuniones del mes 1:**
- 1:1 con el manager: semanal (30 min)
- Check-in con el buddy: 2 veces por semana (informal)
- Reunión con stakeholders clave: 1 sesión por semana con perfiles diferentes

**Primera revisión formal al día 30:**
El manager y el nuevo empleado se reúnen para revisar:
- ¿Está el nuevo empleado cómodo con el rol y las expectativas?
- ¿Hay algo que necesita y no tiene?
- ¿Cuáles son las primeras áreas de contribución identificadas?

### Mes 2: Creciente Autonomía

**Objetivos del mes 2:**
- Trabajar con mayor autonomía en proyectos reales
- Construir relaciones con pares de otros equipos
- Identificar oportunidades de mejora en los procesos propios del rol

**Revisión del día 60:**
- ¿Está contribuyendo como se esperaba?
- ¿Entiende la estrategia del equipo y cómo su trabajo contribuye?
- ¿Necesita formación adicional en alguna área?

### Mes 3: Plena Integración

**Objetivos del mes 3:**
- Trabajar de forma autónoma en responsabilidades completas del rol
- Poder ayudar a los siguientes nuevos empleados (buddy informal)
- Primera evaluación de desempeño informal

**Revisión del día 90:**
- ¿Ha alcanzado los objetivos del plan de 90 días?
- ¿Cuáles son los objetivos para el próximo trimestre?
- ¿Cómo ha sido la experiencia de onboarding? (NPS interno)

## El Buddy: El Rol Más Infrautilizado del Onboarding

El buddy no es el compañero de trabajo genérico. Es un rol formal con responsabilidades específicas.

**Quién debe ser el buddy:**
- No el manager directo (el nuevo empleado no debe tener miedo de hacer preguntas tontas)
- Alguien del mismo equipo o equipo adyacente
- Con entre 1 y 3 años en la empresa (conoce bien pero todavía recuerda cómo fue entrar)
- Voluntario, nunca obligado

**Las responsabilidades del buddy durante los 90 días:**
- Primera semana: contacto diario (desayuno, café, almuerzo)
- Meses 2 y 3: check-in semanal informal
- Responder preguntas que el nuevo empleado no quiere hacer al manager
- Presentarle a personas que le serán útiles

## Entregables

Con el contexto que me des, produce:
1. Plan de 90 días completo semana a semana con actividades, responsables y objetivos de cada fase
2. Checklist de pre-boarding: todo lo que debe estar listo antes del día 1
3. Agenda detallada del día 1: hora a hora, responsable de cada bloque
4. Guía del buddy: rol, responsabilidades, preguntas recomendadas para cada semana
5. Encuesta de experiencia de onboarding (para el día 30 y el día 90) con las métricas de éxito
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar un plan de onboarding de 90 días que reduzca el time-to-productivity, mejore la retención en el primer año y cree una experiencia de incorporación memorable',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de rentabilidad del cliente (CLV) — calcula el valor del ciclo de vida con datos reales',
                'description'      => 'Aprende a calcular el Customer Lifetime Value (CLV) de tus segmentos de clientes y usa ese dato para tomar decisiones de adquisición, retención y segmentación con evidencia financiera.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero y analista de negocio con experiencia en modelos de CLV para empresas de suscripción, e-commerce y servicios. Necesito entender y calcular el valor del ciclo de vida de mis clientes para tomar decisiones de negocio más inteligentes: cuánto gastar en adquirir un cliente, cuándo retener y cuándo dejar ir, y cómo segmentar el portafolio.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es el modelo de negocio? (suscripción mensual/anual, e-commerce recurrente, servicios profesionales, marketplace)
2. ¿Tienes datos históricos de clientes? (cuánto llevan, cuánto pagan, cuándo se han ido)
3. ¿Cuál es el margen bruto del negocio o el coste de entrega del servicio?
4. ¿Tienes segmentos de clientes diferenciados o todos pagan lo mismo?
5. ¿Cuál es el CAC actual (coste de adquisición por cliente)?

## Las Dos Formas de Calcular el CLV

### Fórmula Simplificada (para empezar)

```
CLV = ARPU × Margen Bruto × (1 / Churn Rate)

Donde:
- ARPU = ingreso medio mensual por cliente
- Margen bruto = % de los ingresos que no son coste directo
- 1 / Churn Rate = vida media del cliente en meses
```

**Ejemplo:**
- ARPU: 150€/mes
- Margen bruto: 70%
- Churn mensual: 3% → vida media = 1/0.03 = 33 meses

```
CLV = 150€ × 70% × 33 = 3.465€
```

**El ratio CLV/CAC:**
- CLV/CAC > 3: el modelo de adquisición es rentable
- CLV/CAC < 1: estás perdiendo dinero adquiriendo clientes
- Objetivo típico en SaaS B2B: CLV/CAC entre 3 y 5

### Fórmula Avanzada con Descuento Temporal

El dinero que recibirás en el futuro vale menos que el dinero de hoy. El CLV con tasa de descuento corrige esto:

```
CLV = Σ [Margen_t / (1 + r)^t]

Donde:
- Margen_t = margen generado en el período t
- r = tasa de descuento (coste de capital, típicamente 10-15% anual)
- Σ = suma de todos los períodos hasta el churn esperado
```

Para modelos de suscripción con churn constante:

```
CLV = (ARPU × Margen) / (Churn Rate + Tasa de Descuento mensual)
```

**Ejemplo con descuento:**
- ARPU: 150€/mes
- Margen: 70% → 105€/mes de margen
- Churn mensual: 3% = 0.03
- Tasa de descuento mensual: 10% anual / 12 = 0.0083

```
CLV = 105 / (0.03 + 0.0083) = 105 / 0.0383 = 2.741€
```

## CLV por Segmento: Donde Está el Valor Real

El CLV promedio oculta diferencias enormes entre segmentos. Los insights más valiosos están en el CLV segmentado.

**Dimensiones de segmentación más útiles:**

| Dimensión | Por qué importa |
|---|---|
| Plan / tier de precio | ¿Los clientes de plan alto tienen más CLV o más churn? |
| Canal de adquisición | ¿Los clientes de orgánico tienen mejor retención que los de paid? |
| Industria o segmento | ¿Hay industrias donde el CLV es el doble de la media? |
| Tamaño de empresa | ¿Las pymes duran menos que las medianas empresas? |
| Cohorte de entrada | ¿Los clientes que entraron en el año del producto estrella tienen mejor LTV? |

**El análisis de cohorte: la forma más rigurosa**

Una cohorte es un grupo de clientes que empezaron en el mismo período. El análisis de cohorte te permite ver cómo evoluciona la retención y los ingresos de cada grupo a lo largo del tiempo.

```
Ejemplo de análisis de cohorte mensual:

Cohorte Enero 2024:
  Mes 0: 100 clientes, 15.000€ MRR
  Mes 3: 88 clientes (88% retención), 13.200€ MRR
  Mes 6: 76 clientes, 12.160€ MRR (expansión compensa churn)
  Mes 12: 65 clientes, 13.650€ MRR (NRR > 100%)
```

Si el MRR de la cohorte crece con el tiempo a pesar del churn en número de clientes, tienes NRR > 100%: señal de un negocio muy sano.

## Usar el CLV para Tomar Decisiones

### Decisión 1: ¿Cuánto Gastar en Adquirir un Cliente?

El CAC máximo justificado es una fracción del CLV. El ratio depende del período de recuperación aceptable:

```
CAC máximo para recuperación en 12 meses = CLV × (12 meses / vida media del cliente)
CAC máximo para ratio CLV/CAC = 3: CLV / 3
```

Si tu CLV es 3.000€ y quieres ratio 3, el CAC máximo es 1.000€. Si pagas más, el canal no es rentable.

### Decisión 2: ¿Cuándo Invertir en Retener a un Cliente en Riesgo?

El coste de retención justificado es el CLV residual del cliente (el valor que le queda de vida).

```
Coste máximo de retención = CLV residual × Probabilidad de retención con la acción

Ejemplo:
CLV residual del cliente en riesgo: 2.000€
Probabilidad de retener si hacemos una llamada de 1h + descuento del 20%: 40%
Coste de la acción: 150€ (hora de CSM) + 400€ (descuento × meses restantes)
Beneficio esperado: 2.000€ × 40% = 800€
Coste total: 550€
ROI: positivo — merece la pena intervenir
```

### Decisión 3: Segmentar el Portafolio por CLV para Asignar Recursos

No todos los clientes merecen el mismo nivel de atención. El CLV ayuda a definir la segmentación de servicio:

| Segmento CLV | Nivel de servicio | Recursos asignados |
|---|---|---|
| Top 20% del portafolio (mayor CLV) | High touch | CSM dedicado, QBRs, acceso a dirección |
| 60% intermedio | Mid touch | CSM compartido, check-ins periódicos |
| Bottom 20% (menor CLV) | Low touch / self-serve | Comunidad, knowledge base, email automático |

## Entregables

Con el contexto que me des, produce:
1. Modelo de cálculo de CLV adaptado a tu modelo de negocio con los datos que tienes disponibles
2. Segmentación del portafolio por CLV: los 3-4 segmentos con sus características y tamaño
3. Cálculo del CAC máximo justificado por canal de adquisición
4. Modelo de análisis de cohorte para los últimos 4-6 trimestres
5. Framework de decisión: en qué clientes invertir recursos de retención y con qué umbral de CLV residual
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Calcular el CLV segmentado de los clientes y usar ese dato para tomar decisiones de adquisición, retención y asignación de recursos con evidencia financiera',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'GDPR avanzado para startups — registro de tratamiento, DPO, EIPD y multas frecuentes',
                'description'      => 'Implementa el GDPR de forma real en tu startup: registro de actividades de tratamiento, cuándo necesitas un DPO, cómo hacer una evaluación de impacto y las infracciones más comunes que generan multas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en protección de datos y compliance digital con experiencia asesorando a startups y empresas tecnológicas en la implementación del Reglamento General de Protección de Datos (RGPD/GDPR). Necesito implementar el GDPR de forma efectiva en mi empresa, más allá de los textos legales genéricos del aviso de privacidad.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿En qué países opera tu empresa y dónde están establecidos tus usuarios o clientes?
2. ¿Qué tipos de datos personales tratas? (datos de clientes B2B, datos de consumidores B2C, datos de empleados, datos de salud, datos de menores)
3. ¿Usas proveedores de cloud o SaaS que procesan datos de tus usuarios? (AWS, GCP, Azure, Hubspot, Salesforce, etc.)
4. ¿Has recibido ya alguna reclamación de usuario o inspección de la AEPD?
5. ¿Cuántas personas tiene la empresa y hay alguien dedicado a compliance o privacidad?

## El GDPR en Realidad: Lo que la Mayoría Ignora

La mayoría de las startups cumplen con el GDPR de forma superficial: añaden el aviso de privacidad en la web y la política de cookies y consideran el trabajo hecho. Esto no es cumplimiento: es una fachada que no protegería a la empresa ante una inspección o una multa.

**Las 5 obligaciones del GDPR que más se incumplen:**
1. Registro de actividades de tratamiento (Art. 30): nadie lo mantiene actualizado
2. Acuerdos de encargado de tratamiento con proveedores SaaS (Art. 28): faltan la mitad
3. Evaluaciones de impacto para tratamientos de alto riesgo (Art. 35): raramente se realizan
4. Protocolo de brechas de seguridad (Art. 33): sin proceso definido hasta que ocurre
5. Gestión real de los derechos de los interesados: sin proceso para responder en 30 días

## El Registro de Actividades de Tratamiento (RAT)

El RAT es el inventario de todos los tratamientos de datos personales que realiza tu empresa. Obligatorio para empresas de más de 250 empleados y para cualquier empresa que trate datos de forma habitual.

**Estructura del RAT por actividad de tratamiento:**

```
ACTIVIDAD: Gestión de clientes (CRM)
Responsable: [Nombre de tu empresa]
Finalidad: Gestión de la relación comercial con clientes
Base jurídica: Ejecución de contrato (Art. 6.1.b RGPD)
Categorías de datos: Nombre, email, teléfono, empresa, cargo, historial de compras
Categorías de interesados: Clientes y contactos comerciales
Destinatarios: Salesforce/HubSpot (encargado), equipo de ventas y CS
Transferencias internacionales: Salesforce LLC (USA) — Cláusulas Contractuales Tipo
Plazo de conservación: Durante la relación comercial + 6 años (obligación legal)
Medidas de seguridad: Acceso con autenticación, cifrado en tránsito y reposo, logs de acceso
```

**Las actividades de tratamiento más comunes en una startup SaaS:**
- Gestión de clientes (CRM)
- Análisis de uso del producto (analytics)
- Marketing y comunicaciones comerciales (email marketing)
- Gestión de empleados y candidatos (RRHH)
- Soporte al cliente (ticketing)
- Logs y seguridad del sistema

## Cuándo Necesitas un DPO (Delegado de Protección de Datos)

El DPO es obligatorio en 3 supuestos (Art. 37 RGPD):

| Supuesto | Ejemplo |
|---|---|
| Autoridad u organismo público | No aplica a startups privadas |
| Tratamiento a gran escala que requiere observación sistemática de interesados | Plataformas publicitarias, apps de seguimiento, sistemas de scoring crediticio |
| Tratamiento a gran escala de categorías especiales o datos penales | Datos de salud, datos biométricos, datos sindicales, datos de menores |

**Para la mayoría de startups SaaS, el DPO no es obligatorio**, pero sí recomendable tener un responsable interno de privacidad o un asesor externo de privacidad.

**La figura del Privacy Officer voluntario:**
Nombrar a alguien de la empresa (puede ser el CTO, el responsable legal o el COO) como responsable de privacidad, con formación básica y acceso a asesoramiento externo cuando sea necesario.

## Evaluación de Impacto en Protección de Datos (EIPD / DPIA)

La EIPD es obligatoria cuando el tratamiento conlleva un alto riesgo para los derechos y libertades de las personas (Art. 35 RGPD).

**Cuándo es obligatoria:**
- Perfilado a gran escala con efectos significativos (scoring, targeting automatizado)
- Tratamiento a gran escala de categorías especiales (salud, orientación sexual, biometría)
- Monitorización sistemática de zonas de acceso público a gran escala

**La EIPD mínima viable:**

```
EVALUACIÓN DE IMPACTO — [Nombre del tratamiento]
Fecha: [fecha]

1. DESCRIPCIÓN DEL TRATAMIENTO
   - Qué datos se tratan
   - Con qué finalidad
   - Quiénes son los interesados

2. EVALUACIÓN DE LA NECESIDAD Y PROPORCIONALIDAD
   - ¿Es necesario para la finalidad? (¿hay alternativa menos intrusiva?)
   - ¿La finalidad justifica el tratamiento?
   - Base jurídica y medidas de minimización

3. EVALUACIÓN DE RIESGOS
   | Riesgo | Probabilidad | Impacto | Riesgo residual |
   |---|---|---|---|
   | Acceso no autorizado | Media | Alto | Medio |
   | Brecha de confidencialidad | Baja | Alto | Bajo |
   | Uso para finalidad distinta | Baja | Medio | Bajo |

4. MEDIDAS PARA MITIGAR LOS RIESGOS
   - Cifrado de datos
   - Control de acceso basado en roles
   - Pseudonimización donde sea posible
   - Retención mínima necesaria
```

## Las Multas Más Frecuentes y Cómo Evitarlas

| Infracción | Multa máxima | Casos reales |
|---|---|---|
| Falta de base jurídica para el tratamiento | 20M€ o 4% facturación global | Meta: 1.200M€ por transferencias a USA |
| Cookies sin consentimiento válido | 10M€ o 2% facturación | Múltiples multas a publishers europeos |
| Falta de acuerdo con encargado | 10M€ o 2% | Frecuente en startups |
| No atender derechos en plazo | 10M€ o 2% | Amazon, Google: multas por ignorar solicitudes |
| Brecha de seguridad no notificada | 10M€ o 2% | Uber: multa por ocultar brecha de 2016 |

## Entregables

Con el contexto que me des, produce:
1. Registro de Actividades de Tratamiento (RAT) completo para las actividades principales de tu empresa
2. Lista de encargados de tratamiento con los que necesitas firmar acuerdo (DPA) y plantilla de DPA básica
3. Evaluación de si necesitas DPO y, si no, propuesta de estructura de privacy governance
4. Checklist de cumplimiento GDPR: las 20 obligaciones más importantes en orden de prioridad
5. Protocolo de respuesta a brechas de seguridad: qué hacer en las 72 horas siguientes al descubrimiento
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Implementar el GDPR de forma real en una startup con registro de tratamientos, acuerdos con encargados, evaluaciones de impacto y protocolo de brechas',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Community management para CS — usa la comunidad de usuarios como canal de soporte escalable',
                'description'      => 'Aprende a construir y gestionar una comunidad de usuarios que funcione como canal de soporte que escala: respuestas entre pares, deflexión de tickets y advocates que ayudan a otros clientes.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Community Manager especializado en comunidades de producto B2B con experiencia construyendo comunidades de usuarios que sirven simultáneamente como canal de soporte, fuente de feedback de producto y motor de retención. Necesito diseñar una estrategia de comunidad que permita a mi equipo de customer success escalar sin crecer proporcionalmente el equipo.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuántos clientes o usuarios activos tienes y cuál es el volumen de tickets de soporte mensual?
2. ¿Tienes ya algún tipo de comunidad (Slack, Discord, foro propio, grupo de LinkedIn) o empezamos desde cero?
3. ¿Cuál es el perfil de tus usuarios? (¿hablan entre ellos en algún espacio hoy?)
4. ¿Cuál es el objetivo principal de la comunidad? (deflexión de tickets, retención, feedback de producto, advocacy)
5. ¿Cuántas personas del equipo pueden dedicar tiempo a la comunidad?

## El Problema que la Comunidad Resuelve

El soporte tradicional escala linealmente con el número de clientes: más clientes = más tickets = más agentes. La comunidad rompe esa ecuación:

**El modelo de comunidad como soporte:**
- Una pregunta respondida en la comunidad ayuda a todos los que la busquen en el futuro
- Los usuarios más avanzados responden a los usuarios menos avanzados (deflexión)
- El equipo de CS actúa de moderador y experto, no de primera línea para todo
- El conocimiento se acumula y mejora en lugar de repetirse en tickets privados

**Benchmarks de deflexión en comunidades de producto:**
- Comunidades B2B bien gestionadas: 20-40% de deflexión de tickets
- Productos con comunidades activas: ratio de tickets por usuario 50% menor que sin comunidad

## La Elección de la Plataforma

| Plataforma | Mejor para | Ventajas | Inconvenientes |
|---|---|---|---|
| Slack | Empresas B2B tech, usuarios técnicos | Familiar, tiempo real, integra con el stack | Difícil de buscar historial, pago por usuarios |
| Discord | Productos más jóvenes, comunidades mixtas | Gratuito, canales flexibles, voz/vídeo | Menos profesional para B2B enterprise |
| Circle | Comunidades de producto dedicadas | Diseñado para comunidades, cursos integrados | Coste, adopción de nueva plataforma |
| Foro propio (Discourse) | Comunidades grandes, SEO de soporte | El contenido es tuyo, indexado por Google | Hosting y mantenimiento, curva de adopción |
| LinkedIn Groups | Comunidades de profesionales | Donde ya están los usuarios B2B | Alcance limitado por el algoritmo |

**La recomendación por fase:**
- Early stage (< 500 usuarios): Slack o Discord, facilidad de adopción
- Growth stage (500-5.000 usuarios): Circle o Slack con estructura
- Scale stage (> 5.000 usuarios): Foro propio (Discourse) + Slack para usuarios core

## La Estructura de la Comunidad: Los Canales que Importan

**Canales fundamentales para una comunidad de soporte:**

| Canal | Propósito | Quién modera |
|---|---|---|
| #bienvenida | Presentaciones de nuevos miembros | Comunidad + CS |
| #soporte-general | Preguntas de uso del producto | CS + Advocates |
| #best-practices | Usuarios compartiendo cómo usan el producto | Usuarios + CS |
| #feedback-producto | Ideas y solicitudes de feature | CS → traslado a Producto |
| #anuncios | Updates del producto, eventos | Solo el equipo |
| #off-topic | Conversación informal | Comunidad |

**Los canales por integración o caso de uso (para productos complejos):**
Cuando el producto tiene módulos distintos o integraciones, crear canales específicos (#integracion-salesforce, #api, #mobile) aumenta la calidad de las respuestas porque la audiencia es más experta.

## El Programa de Advocates: Los Embajadores del Soporte

Los Community Advocates son usuarios que responden activamente a preguntas de otros usuarios. Son el multiplicador de impacto de la comunidad.

**Cómo identificar potenciales advocates:**
- Los usuarios que ya responden sin que se les pida
- Los que tienen NPS altos y mencionan la comunidad
- Los "power users" con uso intensivo del producto

**El programa de advocates:**

| Beneficio | Descripción |
|---|---|
| Acceso anticipado | Los advocates son los primeros en ver las nuevas features |
| Badge o estatus visible | Identificación como "Community Expert" en la plataforma |
| Acceso directo al equipo de producto | Reuniones trimestrales con el PM |
| Contenido co-creado | Participan en webinars, casos de éxito, blog posts |
| Descuento o créditos | Reconocimiento económico si el programa lo justifica |

**La regla del programa de advocates:**
El reconocimiento debe ser genuino y proporcional a la contribución. Un programa de advocates que solo existe para obtener respuestas gratuitas sin cuidar realmente a los advocates se rompe en 6-12 meses.

## La Métrica de Éxito: El Deflection Rate

La métrica principal de una comunidad de soporte es el deflection rate: qué porcentaje de preguntas que habrían ido al equipo de soporte se resuelven en la comunidad.

**Cómo medir el deflection rate:**
1. Mide el volumen de posts de soporte en la comunidad por semana
2. De esos posts, cuántos tienen respuesta aceptada sin intervención del equipo de CS
3. Deflection rate = (posts resueltos por la comunidad) / (total de posts de soporte)

**Otras métricas de comunidad:**

| Métrica | Definición | Objetivo |
|---|---|---|
| Time to first response | Tiempo desde la pregunta hasta la primera respuesta | < 4 horas |
| % de preguntas resueltas | Posts con respuesta marcada como útil | > 70% |
| Monthly active members | Usuarios que participan al menos 1 vez al mes | > 15% del total de miembros |
| NPS de la comunidad | Satisfacción de los miembros con la comunidad | > 50 |
| Retención de usuarios activos en comunidad | Comparar churn rate: comunidad vs. no comunidad | Comunidad > 20% mejor retención |

## El Ritual de la Comunidad: Qué Hacer Cada Semana

**Lunes:** Revisar los posts sin respuesta del fin de semana y dar visibilidad a los no resueltos.
**Miércoles:** Destacar una conversación de best practices interesante para aumentar la visibilidad.
**Viernes:** Compartir el update semanal del producto (qué se ha lanzado, qué está en camino).
**Mensual:** Reunión de advocates (30 min), informe de métricas a dirección, compilación de feedback para producto.

## Entregables

Con el contexto que me des, produce:
1. Elección de plataforma y estructura de canales para tu comunidad con justificación
2. Plan de lanzamiento de la comunidad: las primeras 8 semanas con actividades y objetivos
3. Programa de advocates: criterios de selección, beneficios y proceso de onboarding
4. Proceso de integración comunidad-soporte: cómo derivar tickets hacia la comunidad y viceversa
5. Dashboard de métricas: deflection rate, actividad y satisfacción con definición y herramienta de tracking
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir una comunidad de usuarios que funcione como canal de soporte escalable con deflexión de tickets, advocates y métricas de impacto',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Venta de servicios de consultoría estratégica — posiciónate como consultor, no como ejecutor',
                'description'      => 'Aprende a posicionarte y vender servicios de consultoría estratégica de alto valor en lugar de ejecución por horas: cómo fijar el precio por el resultado, no por el tiempo, y cómo atraer a los clientes correctos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de negocio especializado en la transición de freelancer ejecutor a consultor estratégico de alto valor. Necesito aprender a posicionar mis servicios como consultoría de alto nivel, fijar precios basados en el valor del resultado y atraer clientes que buscan estrategia, no solo ejecución barata.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es tu especialidad actual y en qué tipo de trabajo pasas la mayor parte de tu tiempo?
2. ¿Cuál es tu tarifa por hora actual y cuántas horas facturas al mes?
3. ¿Qué tipo de resultados han obtenido tus mejores clientes trabajando contigo?
4. ¿Cuál es el perfil del cliente ideal al que quieres llegar? (¿a quién puedes aportar más valor?)
5. ¿Qué te detiene ahora mismo de cobrar el doble o el triple de lo que cobras?

## La Diferencia Entre Ejecutor y Consultor

El freelancer ejecutor vende tiempo y habilidades: "Te hago X durante Y horas por Z euros". El consultor vende resultados y criterio: "Te ayudo a resolver el problema P, que tiene un valor económico de Q para tu empresa".

**La comparación que cambia la perspectiva:**

| Ejecutor | Consultor Estratégico |
|---|---|
| Precio por hora | Precio por resultado o por proyecto |
| El cliente define qué hacer | El consultor define qué hacer |
| El éxito es entregar el trabajo | El éxito es que el cliente logre el resultado |
| Compite por precio con otros ejecutores | Compite por criterio con pocos pares |
| Escalabilidad limitada al tiempo | Puede escalar con metodologías, frameworks, cursos |
| Se reemplaza con alguien más barato | Difícil de reemplazar porque el criterio es único |

## El Posicionamiento de Consultor: Hacerse Reconocible en un Nicho

Los mejores consultores no son generalistas: son la referencia en un problema muy específico para un perfil de cliente muy concreto.

**El test del nicho de consultoría:**
Completa esta frase: "Soy el consultor al que van las empresas de [perfil exacto] cuando tienen el problema de [problema específico y costoso]."

Ejemplos de posicionamientos de consultor con alta demanda:
- "Soy el consultor al que van las empresas industriales de entre 50 y 200 empleados cuando necesitan digitalizar sus operaciones sin depender de consultoras grandes."
- "Soy la consultora a la que van las scale-ups SaaS cuando su ARR no crece como el equipo de ventas que tienen debería permitir."
- "Soy el consultor al que van los bufetes de abogados medianos cuando necesitan una estrategia de marketing que no les haga parecer iguales que todos los demás."

**La señal de que el posicionamiento funciona:** Los clientes te dicen "necesitaba hablar con alguien exactamente como tú". Si no dices eso, el posicionamiento es demasiado genérico.

## El Pricing Basado en Valor: Cómo Calcularlo

El precio de la consultoría estratégica no se calcula desde el coste (tus horas × tu tarifa). Se calcula desde el valor del resultado para el cliente.

**El método de pricing por valor:**

1. **Define el resultado que va a obtener el cliente:**
   No "haré una auditoría de ventas". Sí: "Identificaré las 3 palancas de crecimiento de ARR más accionables en los próximos 90 días."

2. **Cuantifica el valor económico del resultado:**
   Si el cliente implementa tus recomendaciones y aumenta el ARR un 20%, y su ARR actual es de 2M€, el valor del resultado es 400.000€ al año.

3. **Fija el precio como una fracción del valor:**
   Un precio de 15.000-30.000€ por un proyecto de 6-8 semanas que genera 400.000€ de valor incremental tiene un ROI de 10-25x para el cliente. Es fácil de justificar.

**El precio por hora tiene un techo. El precio por valor no.**

## Los Formatos de Consultoría de Alto Valor

| Formato | Duración | Precio típico | Mejor para |
|---|---|---|---|
| Sprint de diagnóstico | 2-4 semanas | 5.000-15.000€ | Primera relación, validar el fit |
| Proyecto estratégico | 6-12 semanas | 15.000-50.000€ | Resolver un problema concreto de alto impacto |
| Asesoría mensual retainer | Continuo | 2.000-8.000€/mes | Acompañamiento de la implementación |
| Fractional (rol ejecutivo parcial) | Continuo (X días/mes) | 5.000-15.000€/mes | Startups que necesitan un CxO sin contratarlo a tiempo completo |

## Cómo Atraer Clientes de Consultoría de Alto Valor

Los clientes de consultoría estratégica no compran en Google Ads ni en fría outreach. Llegan por:

**1. Contenido de autoridad:**
Escribe artículos, posts o un newsletter sobre el problema específico que resuelves. No casos generales: tu perspectiva, tu criterio, tus marcos de trabajo. El cliente que tiene el problema reconocerá en tu contenido que eres la persona que lo entiende.

**2. Conferencias y eventos del sector:**
Una charla de 20 minutos en el evento donde se reúnen tus clientes ideales vale más que 6 meses de outreach en frío. Prepara una charla que demuestre tu criterio sobre el problema más urgente de tu audiencia.

**3. Red y referidos:**
Los clientes de consultoría estratégica confían en las referencias de pares más que en ningún otro canal. Cada cliente satisfecho debería conocer a 3-5 empresas con el mismo problema. Pide explícitamente las referencias.

**4. Partnerships:**
Otros consultores o firmas que atienden al mismo perfil de cliente pero sin solaparse contigo. Un abogado de M&A que trabaja con empresas donde tú eres el consultor de estrategia de integración.

## La Conversación de Venta de Consultoría

La venta de consultoría estratégica no es un pitch de 30 minutos. Es un diagnóstico:

**La estructura de la primera reunión:**
1. Entender el contexto del cliente (15 min): qué está pasando, qué han intentado, qué les frustra
2. Hacer las preguntas que un buen médico haría: las que revelan la causa raíz, no los síntomas
3. Compartir tu perspectiva inicial: "Basándome en lo que me cuentas, creo que el problema real es..."
4. Proponer el siguiente paso: un sprint de diagnóstico o una propuesta concreta

**Lo que no debe hacer la primera reunión:** Hablar de ti, de tus servicios ni de tu metodología. El cliente contrasta el criterio antes de contratar.

## Entregables

Con el contexto que me des, produce:
1. Posicionamiento de consultor: la frase que describe exactamente quién eres y qué problema resuelves
2. Carta de servicios: los 2-3 formatos de consultoría que ofrecerás con precio, duración y entregables
3. Cálculo de precio basado en valor para el próximo cliente potencial
4. Plan de contenido de autoridad para los próximos 60 días: 8 temas con el enfoque de cada pieza
5. Script de la primera reunión de consultoría: las preguntas de diagnóstico y el marco de la propuesta
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Transicionar de freelancer ejecutor a consultor estratégico de alto valor con posicionamiento de nicho, pricing por resultado y estrategias de atracción de clientes correctos',
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
