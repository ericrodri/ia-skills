<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills68Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Vídeo corto como estrategia — TikTok, Reels y YouTube Shorts integrados',
                'description'      => 'TikTok, Reels e YouTube Shorts como ecosistema integrado de adquisición, con estrategia de contenido, repurposing y métricas de conversión.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un estratega de marketing de contenidos especializado en vídeo corto y formatos verticales. Necesito construir una estrategia integrada de vídeo corto en TikTok, Instagram Reels y YouTube Shorts que funcione como canal de adquisición real, no solo como canal de visibilidad.

## POR QUÉ EL VÍDEO CORTO ES EL CANAL DE ADQUISICIÓN MÁS EFICIENTE EN 2025

El coste de adquisición de clientes (CAC) a través de contenido orgánico en vídeo corto es entre 5 y 20 veces menor que a través de publicidad de pago. Las razones:
- Los algoritmos de TikTok, Reels y Shorts distribuyen el contenido a audiencias que no te siguen (descubrimiento puro)
- El formato vertical corto tiene la menor fricción de consumo de cualquier medio
- El coste de producción ha bajado drásticamente: un smartphone y buena iluminación son suficientes

**El error más común:** tratar cada plataforma como un canal separado y crear contenido distinto para cada una. La estrategia eficiente es crear una vez y adaptar.

## LAS 3 PLATAFORMAS: DIFERENCIAS CLAVE

| Plataforma | Audiencia dominante | Duración óptima | Algoritmo | Fuerza |
|------------|--------------------|-----------------|-----------|---------|
| TikTok | 18-34 años, global | 15-60 seg | Descubrimiento puro (FYP) | Máximo alcance orgánico |
| Instagram Reels | 25-44 años, lifestyle/B2B | 15-30 seg | Mix seguidores + descubrimiento | Integración con marca visual |
| YouTube Shorts | 18-45 años, intención de aprendizaje | 30-60 seg | Favorece canales con largo historial | Mayor intención de búsqueda |

## EL FRAMEWORK CREAR UNA VEZ, PUBLICAR EN TRES

### Flujo de producción eficiente

**Paso 1 — Graba en formato nativo vertical (9:16)**
Graba directamente en vertical desde el inicio. No adaptes contenido horizontal: se nota y el algoritmo lo penaliza.

**Paso 2 — Edita en la versión "master"**
Crea una versión de entre 30 y 45 segundos sin texto superpuesto ni stickers específicos de plataforma. Este es tu vídeo base.

**Paso 3 — Adapta para cada plataforma**

| Plataforma | Adaptación necesaria | Tiempo extra |
|------------|---------------------|-------------|
| TikTok | Añade subtítulos con CapCut/TikTok native, usa sonido trending | 10-15 min |
| Reels | Añade música de la biblioteca de Meta, ajusta el hook al estilo de Instagram | 10 min |
| YouTube Shorts | Añade card de llamada a acción al final, descripción con palabras clave | 5 min |

**Paso 4 — Publica en cada plataforma de forma nativa**
No uses herramientas de publicación automática en múltiples plataformas simultáneamente. Los algoritmos detectan los vídeos subidos con herramientas de terceros y los penalizan. Sube manualmente o con las herramientas oficiales de cada plataforma.

## LOS 4 FORMATOS DE VÍDEO CORTO QUE GENERAN CONVERSIÓN

### Formato 1 — El "Tutorial Relámpago"
Estructura: "Cómo hacer X en Y segundos / pasos."
Duración: 20-45 seg.
Por qué funciona: alta utilidad percibida en poco tiempo. Muy guardado y compartido.

Ejemplo: "Cómo crear un brief de contenido para tu equipo en 3 pasos [antes de que termine este vídeo]"

### Formato 2 — El "Mito que destruyo"
Estructura: "Todo el mundo hace X. Está mal. La razón es Y. Lo correcto es Z."
Duración: 30-60 seg.
Por qué funciona: genera disenso y comentarios, lo que amplifica el alcance.

Ejemplo: "Dejar de publicar en redes porque 'no convierte' es el mayor error de marketing. Te explico por qué."

### Formato 3 — El "Antes y después"
Estructura: Muestra el estado inicial → aplica el proceso → muestra el resultado.
Duración: 30-45 seg.
Por qué funciona: prueba visual del valor sin necesidad de texto extenso.

Mejor para: diseñadores, copywriters, consultores con resultados medibles.

### Formato 4 — La "Pregunta incómoda"
Estructura: Hace una pregunta que el sector evita. La responde honestamente.
Duración: 20-40 seg.
Por qué funciona: crea identidad ("este creador dice lo que los demás no dicen") y genera seguidores comprometidos.

## DE VÍDEO A CLIENTE: EL EMBUDO DE CONVERSIÓN

El vídeo corto es el tope del funnel. La conversión ocurre fuera de la plataforma. El camino típico es:

```
Vídeo corto (descubrimiento)
    ↓
Perfil del creador/marca (interés)
    ↓
Link en bio / Linktree (clic)
    ↓
Landing page, newsletter o DM (captura de lead)
    ↓
Secuencia de nutrición (conversión)
```

**Optimizar el link en bio:** Usa solo 1 o 2 destinos máximo. Más opciones = menos clics. El destino más efectivo para B2B es una newsletter o un lead magnet; para B2C, la tienda o una oferta específica.

**Llamadas a la acción que funcionan en vídeo corto:**
- "Sigue para ver la parte 2 esta semana"
- "Guárdalo para cuando lo necesites"
- "Comenta X si quieres que profundice en esto"
- "El recurso gratuito está en el enlace de la bio"

Evita: "Visita nuestra web para más información" (demasiado genérico, baja conversión).

## CALENDARIO EDITORIAL: CADENCIA MÍNIMA VIABLE

Para construir presencia en vídeo corto, la frecuencia mínima es **4 vídeos por semana** durante las primeras 8 semanas (período de "despegue" del algoritmo).

| Día | TikTok | Reels | Shorts |
|-----|--------|-------|--------|
| Lunes | ✓ | ✓ | — |
| Miércoles | ✓ | — | ✓ |
| Jueves | ✓ | ✓ | — |
| Sábado | — | ✓ | ✓ |

**Batching de producción:** Graba 8-12 vídeos en un solo día de producción (3-4 horas). Edita durante la semana y publica de forma escalonada. Esto hace la estrategia sostenible sin dedicar tiempo diario.

## MÉTRICAS DE VÍDEO CORTO POR FASE

| Fase | Métrica principal | Objetivo |
|------|------------------|----------|
| Descubrimiento | Alcance fuera de seguidores | > 60% del alcance total |
| Engagement | Tasa de finalización del vídeo | > 40% |
| Comunidad | Ratio comentarios / vistas | > 0,5% |
| Conversión | CTR del link en bio | > 1% de los visitantes del perfil |
| Negocio | Leads atribuidos al canal | Variable por industria |

¿En qué sector está tu negocio y cuál es tu buyer persona? Con esa información te propongo los primeros 8 temas de vídeo y el formato para cada uno.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir una estrategia de vídeo corto integrada en TikTok, Reels y YouTube Shorts con un único flujo de producción y embudo de conversión.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Empty states y estados especiales de UI — mensajes que guían al usuario',
                'description'      => 'Cómo diseñar e implementar mensajes de estado vacío, carga y error que orientan al usuario en lugar de confundirle o abandonarle.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un frontend developer senior con experiencia en experiencia de usuario y diseño de interfaces. Necesito una guía completa para diseñar e implementar los estados especiales de UI (empty states, loading states, error states) que transformen la confusión del usuario en orientación clara.

## POR QUÉ LOS ESTADOS ESPECIALES SON CRUCIALES

Los estados especiales son los momentos donde más usuarios abandonan un producto. Un botón que no responde, una lista vacía sin explicación o un error técnico sin contexto generan desconfianza y churn. Sin embargo, la mayoría de los equipos los dejan para el final del desarrollo y los tratan como casos secundarios.

**Estadística clave:** El 52% de los usuarios abandona una aplicación si encuentra un error y no entiende qué hacer (Forrester). Los empty states bien diseñados aumentan la activación en hasta un 30% (datos de Intercom sobre su propio onboarding).

## LOS 5 ESTADOS ESPECIALES QUE DEBES DISEÑAR

### 1. Empty State (Estado vacío)

El estado vacío aparece cuando una lista, tabla, búsqueda o sección no tiene contenido todavía.

**Los 3 tipos de empty state:**

| Tipo | Cuándo aparece | Objetivo |
|------|---------------|----------|
| First-run | Primera vez que el usuario accede a una sección | Orientar y motivar para crear el primer ítem |
| User-cleared | El usuario ha borrado todo el contenido | Confirmar la acción y ofrecer siguiente paso |
| No-results | Una búsqueda o filtro no devuelve resultados | Explicar por qué y ofrecer alternativas |

**Anatomía de un empty state efectivo:**

```
┌─────────────────────────────────────┐
│  [Ilustración contextual]            │
│                                      │
│  Título: Qué está pasando            │
│  (claro, sin tecnicismos)            │
│                                      │
│  Subtítulo: Por qué está vacío y    │
│  qué puede hacer el usuario          │
│                                      │
│  [Botón de acción principal]         │
│  [Enlace secundario opcional]        │
└─────────────────────────────────────┘
```

**Ejemplos concretos:**

❌ Mal empty state: "No hay datos disponibles."
✅ Bien: "Todavía no tienes proyectos. Crea tu primer proyecto para empezar a colaborar con tu equipo."

❌ Mal: "Sin resultados."
✅ Bien: "No encontramos resultados para 'marketing digital'. Prueba con términos más generales o revisa los filtros activos."

### 2. Loading State (Estado de carga)

El estado de carga gestiona la percepción del tiempo de espera. El objetivo no es solo informar de que algo está cargando, sino hacer que la espera se sienta más corta.

**Tipos de loading por contexto:**

| Patrón | Cuándo usar | Implementación |
|--------|-------------|----------------|
| Skeleton screen | Listas, cards, feeds | Reemplaza el layout con versiones grises del contenido |
| Spinner centrado | Acciones puntuales, navegación entre páginas | CSS animation o librería |
| Progress bar | Uploads, procesos largos con progreso medible | Barra de progreso con porcentaje |
| Optimistic UI | Acciones con alta tasa de éxito (like, toggle) | Actualiza la UI inmediatamente, revierte si falla |
| Inline loading | Botones, formularios | Spinner dentro del botón, texto cambia a "Guardando..." |

**Skeleton screen en React (ejemplo):**
```jsx
const SkeletonCard = () => (
  <div className="skeleton-card">
    <div className="skeleton-avatar animate-pulse" />
    <div className="skeleton-lines">
      <div className="skeleton-line w-3/4 animate-pulse" />
      <div className="skeleton-line w-1/2 animate-pulse" />
    </div>
  </div>
);

// Uso:
{isLoading ? <SkeletonCard /> : <UserCard data={user} />}
```

### 3. Error State (Estado de error)

Los errores son inevitables. La diferencia entre una mala y una buena experiencia de error está en cómo los comunicamos.

**Jerarquía de errores por gravedad:**

| Nivel | Tipo | Ejemplo | Tratamiento UI |
|-------|------|---------|----------------|
| Crítico | La app no puede continuar | Servidor caído | Página de error completa |
| Error de acción | La acción falló | Error al guardar | Toast + posibilidad de reintentar |
| Error de validación | Datos incorrectos | Email inválido | Inline, junto al campo |
| Warning | Situación anómala pero manejable | Sesión próxima a expirar | Banner o modal |

**Anatomía de un error message efectivo:**

1. **Qué pasó** (claro, sin jerga técnica): "No hemos podido guardar los cambios."
2. **Por qué** (si es relevante para el usuario): "Tu conexión a internet se ha interrumpido."
3. **Qué puede hacer** (siempre): "Comprueba tu conexión y vuelve a intentarlo."
4. **Opción de acción directa** (cuando es posible): Botón "Reintentar"

❌ Error message malo: "Error 503: Service temporarily unavailable. Please contact support."
✅ Error message bueno: "No podemos conectar con nuestros servidores ahora mismo. Estamos trabajando para resolverlo. Puedes intentarlo de nuevo en unos minutos o ver el estado del servicio en status.tuproducto.com."

### 4. Success State (Estado de éxito)

El éxito también necesita confirmación explícita. Los usuarios necesitan saber que su acción tuvo efecto.

**Regla del feedback inmediato:**
Toda acción del usuario (clic en un botón, envío de formulario, eliminación) debe recibir feedback visual en menos de 100ms. Si la operación tarda más, muestra un loading state.

**Tipos de confirmación de éxito:**

| Patrón | Cuándo | Ejemplo |
|--------|--------|---------|
| Toast notification | Acciones puntuales no críticas | "Cambios guardados" (3 seg, desaparece solo) |
| Inline checkmark | Campos o ítems individuales | Toggle que cambia a verde con ✓ |
| Página de confirmación | Flujos completados (compra, registro) | Página dedicada con resumen y siguiente paso |
| Animación optimista | Acciones frecuentes (like, favorito) | Animación del icono al hacer clic |

### 5. Offline State (Estado sin conexión)

Cada vez más relevante con PWAs y apps móviles.

```jsx
// Hook para detectar estado de conexión
const useOnlineStatus = () => {
  const [isOnline, setIsOnline] = useState(navigator.onLine);

  useEffect(() => {
    const handleOnline = () => setIsOnline(true);
    const handleOffline = () => setIsOnline(false);

    window.addEventListener('online', handleOnline);
    window.addEventListener('offline', handleOffline);

    return () => {
      window.removeEventListener('online', handleOnline);
      window.removeEventListener('offline', handleOffline);
    };
  }, []);

  return isOnline;
};
```

## CHECKLIST DE ESTADOS ESPECIALES POR FEATURE

Para cada nueva feature, verifica que has diseñado e implementado:

```
□ Empty state (first-run)
□ Empty state (no results)
□ Loading state inicial (skeleton o spinner)
□ Loading state en botones y formularios
□ Error de red (sin conexión / servidor caído)
□ Error de validación (formularios)
□ Error de autorización (acceso denegado)
□ Estado de éxito (confirmación de acción)
□ Estado offline (si aplica)
```

¿Quieres que profundice en la implementación de algún estado específico o en un tipo de componente concreto (formularios, tablas, dashboards)?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar e implementar los 5 estados especiales de UI (vacío, carga, error, éxito, offline) con ejemplos de código y checklists por feature.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de emails transaccionales — confirmaciones que construyen confianza',
                'description'      => 'Cómo diseñar los emails de confirmación, recibo y notificación que construyen confianza con el usuario y reducen los tickets de soporte.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en diseño de comunicación digital con experiencia en emails transaccionales y experiencia de usuario. Necesito una guía completa para diseñar emails transaccionales (confirmaciones, recibos, notificaciones) que construyan confianza y reduzcan los tickets de soporte.

## POR QUÉ LOS EMAILS TRANSACCIONALES IMPORTAN MÁS QUE LOS DE MARKETING

Los emails transaccionales tienen tasas de apertura del 40-60% (vs. 20-25% de los emails de marketing). El usuario los busca activamente porque confirman una acción que acaba de hacer. Son el momento de mayor atención y disposición positiva hacia tu marca.

Sin embargo, la mayoría de los productos los delegan a un template genérico del sistema de email y los olvidan. El resultado: emails que confunden al usuario, generan desconfianza o crean tickets innecesarios de soporte.

## LOS 7 TIPOS DE EMAIL TRANSACCIONAL CLAVE

| Tipo | Cuándo se envía | Objetivo principal |
|------|----------------|-------------------|
| Confirmación de registro | Al crear cuenta | Verificar email y dar primer paso |
| Bienvenida | Tras verificar email | Activar y orientar al nuevo usuario |
| Confirmación de compra | Tras completar pago | Tranquilizar y dar información de seguimiento |
| Recibo / factura | Tras pago | Documento formal para el usuario |
| Restablecimiento de contraseña | Solicitud de reset | Seguridad y recuperación de acceso |
| Notificación de actividad | Eventos relevantes en la cuenta | Mantener informado sin saturar |
| Confirmación de cancelación | Al dar de baja | Cerrar el ciclo con dignidad |

## PRINCIPIOS DE DISEÑO PARA EMAILS TRANSACCIONALES

### 1. El email como extensión del producto, no como comunicación externa

El email transaccional debe sentirse como una pantalla más del producto, no como un correo corporativo genérico. Usa los mismos colores, tipografía (web-safe o con fallbacks correctos), tono de voz e iconografía.

### 2. Jerarquía de información clara

La información más importante debe estar visible sin hacer scroll:
- **Lo que pasó** (confirmación de la acción)
- **Los detalles esenciales** (número de pedido, importe, fecha)
- **El siguiente paso** (si lo hay)

### 3. Un solo CTA por email

Los emails transaccionales no son newsletters. Evita incluir múltiples llamadas a la acción. Si el email de confirmación de compra también incluye upsells, descuentos cruzados y botones de redes sociales, la confianza que generaste con la confirmación desaparece.

## PLANTILLAS POR TIPO DE EMAIL

### Plantilla: Confirmación de compra

```
ASUNTO: Tu pedido #[NÚMERO] está confirmado ✓
PREHEADER: Recibirás [producto] el [fecha estimada]

---

[LOGO DE MARCA]

Tu pedido está confirmado

Hola [nombre],

Hemos recibido tu pedido y lo estamos procesando.
Te avisaremos cuando esté en camino.

RESUMEN DEL PEDIDO
──────────────────
[Producto] × [cantidad]     [precio]
──────────────────
Subtotal:                   €XX,XX
IVA (21%):                  €XX,XX
Envío:                      €XX,XX
──────────────────
TOTAL:                      €XX,XX

Enviado a: [dirección completa]
Método de pago: [tarjeta terminada en XXXX]
Número de pedido: #[NÚMERO]

[BOTÓN: Ver estado del pedido]

¿Tienes alguna pregunta? Escríbenos a soporte@tutienda.com

[PIE: enlace a política de devoluciones | enlace de ayuda]
```

### Plantilla: Restablecimiento de contraseña

```
ASUNTO: Solicitud de restablecimiento de contraseña
PREHEADER: Si no fuiste tú, ignora este email

---

[LOGO DE MARCA]

Restablece tu contraseña

Hemos recibido una solicitud para restablecer la contraseña
de tu cuenta ([email del usuario]).

[BOTÓN: Crear nueva contraseña]

Este enlace caduca en 24 horas.

Si no solicitaste este cambio, puedes ignorar este email.
Tu contraseña actual no cambiará.

Por tu seguridad: nunca te pediremos tu contraseña por email.

---
Hora de la solicitud: [timestamp]
IP desde la que se solicitó: [IP]
```

Incluir la IP y el timestamp en los emails de seguridad reduce tickets de soporte porque permite que el usuario identifique si fue él quien hizo la solicitud.

### Plantilla: Confirmación de cancelación

```
ASUNTO: Has cancelado tu suscripción a [Producto]
PREHEADER: Tu acceso continúa hasta el [fecha]

---

Hemos procesado tu cancelación.

Tu suscripción permanece activa hasta el [fecha de fin del período].
A partir de esa fecha, perderás acceso a [funcionalidades premium].

Si cancelaste por error:
[BOTÓN: Reactivar mi suscripción]

¿Nos puedes decir por qué cancelaste?
(Nos ayuda a mejorar)

○ Era demasiado caro
○ No usaba el producto suficiente
○ Me falta una función que necesito
○ Me paso a otro producto
○ Otro motivo

[ENLACE: Enviar mi respuesta]
```

La encuesta de cancelación dentro del propio email (sin redirigir a ninguna página) multiplica la tasa de respuesta por 3.

## REDUCIR TICKETS DE SOPORTE CON EMAILS BIEN DISEÑADOS

Los emails transaccionales mal diseñados son la primera causa de tickets evitables. Análisis de los más comunes y cómo eliminarlos:

| Ticket frecuente | Causa en el email | Solución |
|-----------------|-------------------|----------|
| "¿He completado el pago?" | Email de confirmación no llegó o no era claro | Email inmediato con número de pedido prominente |
| "¿Cómo cancelo mi suscripción?" | No hay instrucciones de cancelación en los emails | Incluir enlace de gestión de cuenta en el pie de TODOS los emails |
| "No reconozco este cargo" | Nombre del cargo en tarjeta diferente al nombre del producto | Incluir qué nombre aparecerá en el extracto bancario |
| "¿Cuándo llega mi pedido?" | No se comunicó fecha estimada | Fecha estimada en la primera línea visible del email |
| "¿Dónde está mi factura?" | Factura no adjunta o no disponible | Adjuntar PDF y enlace de descarga en el email de compra |

## TÉCNICAS TÉCNICAS: ENTREGABILIDAD Y RENDERIZADO

Un email bien diseñado que llega a spam o se ve roto pierde todo su valor.

**Checklist de entregabilidad:**
- SPF, DKIM y DMARC configurados correctamente en el dominio
- Ratio texto/imagen > 60% texto (los emails solo de imágenes van a spam)
- Enlace de baja visible en todos los emails (obligatorio legal)
- Envío desde dominio de email dedicado (no el mismo que el marketing)

**Checklist de renderizado:**
- Ancho máximo de 600px (funciona en todos los clientes de email)
- Fuentes web-safe como fallback (Arial, Georgia, no Montserrat directamente)
- Botones como HTML, no como imágenes (las imágenes se bloquean por defecto)
- Modo oscuro: prueba en Apple Mail y Gmail en modo oscuro

¿Tienes ya un sistema de emails transaccionales o partes de cero? ¿Con qué herramienta los envías (Postmark, SendGrid, Resend, Brevo)? Te doy las plantillas adaptadas a tu stack.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar emails transaccionales que construyen confianza con plantillas de confirmación, reset de contraseña y cancelación que reducen tickets de soporte.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Gestión del canal de distribución — incentivos y resolución de conflictos',
                'description'      => 'Cómo gestionar incentivos, comunicación y resolución del conflicto de canal con distribuidores y resellers para maximizar el rendimiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas con experiencia en gestión de canales indirectos, distribuidores y redes de resellers B2B. Necesito un sistema completo para gestionar mi canal de distribución: incentivos que funcionan, comunicación efectiva y resolución del conflicto de canal antes de que destruya las relaciones.

## POR QUÉ EL CANAL INDIRECTO ES TAN DIFÍCIL DE GESTIONAR

El canal de distribución te da escala sin escalar tu equipo de ventas directas. Un solo partner bien motivado puede generar el mismo volumen que tres vendedores directos. Pero tiene un coste invisible: los canales no son tu equipo. Son negocios independientes con sus propios objetivos, que venden múltiples productos (incluidos los de tu competencia) y que eligen dónde poner el foco según dónde vean más negocio.

**El reto central:** Hacer que tu producto sea la prioridad del partner sin ser su único producto.

## LOS 3 TIPOS DE CONFLICTO DE CANAL MÁS FRECUENTES

### 1. Conflicto vertical (manufacturer vs. distribuidor)

Aparece cuando el fabricante/proveedor vende directamente al mismo cliente que el distribuidor está trabajando. El distribuidor siente que compite con su propio proveedor.

**Señales de alarma:**
- El partner te llama enfadado porque "has robado" a su cliente
- Los partners dejan de reportar oportunidades porque temen que los saltes
- La velocidad de cierre del canal baja sin motivo aparente

### 2. Conflicto horizontal (distribuidor vs. distribuidor)

Dos distribuidores que trabajan el mismo territorio o el mismo cliente compiten entre sí con tu producto, lo que genera guerras de precios que erosionan el margen de todos.

### 3. Conflicto de canal online vs. offline

Tu tienda online o tu equipo de ventas directas compiten con los distribuidores físicos o de cuenta. El distribuidor siente que tu canal online lo canibaliza.

## ESTRUCTURA DE UN PROGRAMA DE CANAL EFECTIVO

### Niveles de partner y beneficios diferenciados

| Nivel | Criterio de entrada | Descuento/margen | Beneficios exclusivos |
|-------|--------------------|-----------------|-----------------------|
| Silver | > X€ en ventas/año | Base (p.ej. 15%) | Materiales de ventas, portal de partner |
| Gold | > Y€ en ventas/año | +5% sobre Silver | MDF (fondo de marketing), leads asignados |
| Platinum | > Z€ en ventas/año | +10% sobre Silver | Acceso anticipado a producto, soporte dedicado, co-branding |

Los niveles deben ser aspiracionales pero alcanzables. Si el 80% de tus partners están en el nivel Silver y nadie sube, los niveles no incentivan nada.

### El MDF (Market Development Fund): el incentivo más poderoso

El MDF es un fondo económico que das a los partners para que financien actividades de marketing que generen ventas de tu producto. Es más efectivo que el descuento porque está ligado a actividad, no solo a volumen histórico.

**Cómo estructurarlo:**
- Asignación: % del volumen de ventas del partner en el período anterior (típicamente 1-3%)
- Elegibilidad: solo se activa si el partner alcanza su objetivo de ventas
- Uso aprobado: eventos, publicidad digital, ferias, material de punto de venta
- Liquidación: el partner presenta las facturas y recibe el reembolso (no el dinero por adelantado)

### El programa de registro de oportunidades (Deal Registration)

El Deal Registration resuelve el conflicto horizontal: cuando un partner registra una oportunidad en tu sistema, los otros partners (y tu equipo directo) no pueden competir con esa oportunidad.

**Beneficios del Deal Registration para el partner:**
- Margen adicional del 5-10% en la oportunidad registrada
- Soporte técnico prioritario en la oportunidad
- Protección ante el equipo directo

**Reglas del Deal Registration:**
- El registro expira si no hay progreso en X días (típicamente 90)
- El partner debe demostrar contacto activo con el cliente
- Primera llegada, primera servida: quien registra primero, gana la protección

## COMUNICACIÓN EFECTIVA CON EL CANAL

### La regla de la comunicación pull vs. push

**Push (tú comunicas):** Newsletters de canal, actualizaciones de producto, cambios de precios. Útil para información operativa.
**Pull (el partner busca):** Portal de partner, base de conocimiento, biblioteca de materiales de ventas. Útil para soporte en el momento de la venta.

El error más común es inundar a los partners con comunicaciones push y no tener un portal pull que resuelva las dudas del día a día.

### Cadencia de comunicación por nivel de partner

| Touchpoint | Platinum | Gold | Silver |
|-----------|---------|------|--------|
| QBR (business review) | Trimestral, presencial | Semestral, videoconferencia | Anual |
| Newsletter de canal | Mensual | Mensual | Mensual |
| Partner Account Manager asignado | Sí, dedicado | Sí, compartido | No (self-service) |
| Formación en producto | Trimestral | Semestral | On-demand |
| Early access a nuevas features | Sí | No | No |

### Cómo hacer un QBR de canal que genere compromiso

```
Estructura del QBR de Canal (90 minutos):

1. REVISIÓN DE RESULTADOS (20 min)
   - Pipeline y ventas del trimestre vs. objetivo
   - Top oportunidades ganadas y perdidas (y por qué)
   - Posición relativa en el programa de canal

2. NOVEDADES DE PRODUCTO Y MERCADO (20 min)
   - Qué hay nuevo en el producto (demos)
   - Movimientos de la competencia
   - Casos de éxito del trimestre (historia de cliente)

3. PLAN PARA EL PRÓXIMO TRIMESTRE (30 min)
   - Objetivo de ventas acordado (co-construido con el partner)
   - Oportunidades del pipeline en las que trabajar juntos
   - Actividades de MDF planificadas

4. RESOLUCIÓN DE ISSUES (20 min)
   - Problemas operativos pendientes
   - Conflictos de canal activos
   - Solicitudes al fabricante/proveedor
```

## RESOLUCIÓN DE CONFLICTOS: EL PROTOCOLO EN 4 PASOS

Cuando un partner reporta un conflicto, seguir este protocolo evita que escale:

**Paso 1 — Escucha activa y documentación (24-48h)**
El Channel Manager llama al partner, escucha su versión completa y la documenta. No defiende al fabricante ni al otro partner en esta fase.

**Paso 2 — Investigación interna (48-72h)**
Verifica los hechos: ¿hubo contacto previo del partner con el cliente? ¿Hay Deal Registration activo? ¿Hay una política clara que aplique?

**Paso 3 — Resolución y comunicación (72-96h)**
Aplica la política de canal con consistencia. Si hay ambigüedad, resuelve a favor del partner que actuó de buena fe. Comunica la decisión a ambas partes por escrito.

**Paso 4 — Prevención (inmediato)**
¿La política existente habría evitado este conflicto? Si no, actualiza las reglas del programa de canal para cubrir el caso nuevo.

**La regla de oro:** Los conflictos de canal que no se resuelven en 96 horas se convierten en problemas de relación que duran años. La velocidad de respuesta es parte de la solución.

¿Cuántos partners tienes actualmente y cuál es el conflicto más frecuente que estás experimentando? Con ese contexto diseñamos el plan de acción específico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Gestionar el canal de distribución con programas de incentivos (MDF, Deal Registration), comunicación por nivel de partner y protocolo de resolución de conflictos.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Roadmap técnico desde producto — priorizar ingeniería sin perder stakeholders',
                'description'      => 'Cómo el product manager prioriza el trabajo de ingeniería (incluyendo deuda técnica) y lo comunica a stakeholders no técnicos de forma que genere alineación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager senior con experiencia en la interfaz entre producto e ingeniería. Necesito un framework práctico para construir y comunicar el roadmap técnico de forma que el trabajo de ingeniería (incluyendo la deuda técnica) reciba la priorización que merece sin que los stakeholders no técnicos lo bloqueen por "no generar valor para el cliente".

## EL PROBLEMA CENTRAL: LA DEUDA TÉCNICA INVISIBLE

La deuda técnica es la diferencia entre cómo está hecho el código ahora y cómo debería estar hecho para que el producto sea mantenible y escalable. Igual que la deuda financiera, acumula intereses: cada nueva feature cuesta más cuando la base técnica es deficiente.

**El ciclo destructivo:**
Hay presión para lanzar features → el equipo toma atajos técnicos → la base de código se degrada → las features futuras tardan más → hay más presión para lanzar → se toman más atajos.

El rol del PM es romper este ciclo siendo el traductor entre el lenguaje técnico y el lenguaje de negocio.

## FRAMEWORK: CLASIFICACIÓN DEL TRABAJO DE INGENIERÍA

Antes de priorizar, necesitas clasificar todo el trabajo de ingeniería en 4 tipos:

| Tipo | Descripción | Ejemplo | Urgencia visible |
|------|-------------|---------|-----------------|
| Features | Nueva funcionalidad visible para el usuario | "Añadir filtros al buscador" | Alta (stakeholders la piden) |
| Bugs | Comportamiento incorrecto existente | "El botón de pago falla en iOS" | Alta si afecta conversión |
| Deuda técnica | Mejoras de arquitectura sin impacto visual | "Migrar a microservicios" | Baja (no se ve) |
| Infraestructura | Escalabilidad, seguridad, DevOps | "Implementar CI/CD pipeline" | Baja (no se ve) |

El PM debe asegurarse de que los tipos 3 y 4 no desaparezcan del roadmap.

## LA REGLA DEL 20% TÉCNICO

La regla más práctica para gestionar la deuda técnica: reservar el 20% de la capacidad del equipo (equivalente a 1 día de la semana o 1 sprint de 5) exclusivamente para trabajo técnico.

**Cómo venderlo a los stakeholders:**
No lo presentes como "20% de tiempo para deuda técnica" (nadie aprueba eso). Preséntalo como:

- "Inversión en velocidad futura: este 20% nos permite entregar el resto de features un 30% más rápido a partir del Q3."
- "Reducción de riesgo: sin este trabajo, la probabilidad de una incidencia mayor de producción en los próximos 6 meses es alta."
- "Coste de oportunidad: si no lo hacemos ahora, costará el doble hacerlo en 6 meses."

## CÓMO TRADUCIR LA DEUDA TÉCNICA AL LENGUAJE DE NEGOCIO

Esta es la habilidad más crítica del PM técnico. Cada pieza de deuda técnica debe traducirse a impacto de negocio:

### Plantilla de traducción

```
Trabajo técnico: [descripción técnica]
Impacto actual (coste de NO hacerlo):
→ Tiempo adicional por feature: +X horas/semana
→ Riesgo de incidencia: [alta/media/baja] con impacto de €X
→ Capacidad de escalar: limitada a X usuarios simultáneos

Impacto de hacerlo:
→ Reducción de tiempo por feature: -X% a partir de [fecha]
→ Reducción del riesgo de incidencia: de alta a baja
→ Capacidad de escalar: hasta X usuarios (+X%)

Esfuerzo: [sprint points o semanas-developer]
```

Ejemplo real:
```
Trabajo técnico: Refactorizar el módulo de autenticación
Impacto actual:
→ Añadir un nuevo proveedor OAuth cuesta 3 semanas (debería ser 3 días)
→ Alta probabilidad de vulnerabilidad de seguridad (última auditoría lo señaló)
→ Bug de sincronización de sesiones afecta al 3% de los usuarios

Impacto de hacerlo:
→ Nuevos proveedores OAuth: de 3 semanas a 3 días
→ Eliminación del riesgo de seguridad identificado
→ Eliminación del bug de sesión (↓ tickets de soporte un 15%)

Esfuerzo: 2 sprints
```

## PRIORIZACIÓN DEL TRABAJO TÉCNICO CON WSJF

El WSJF (Weighted Shortest Job First) del framework SAFe es la herramienta más robusta para priorizar trabajo técnico junto con features.

**Fórmula:** WSJF = Coste de retraso / Duración del trabajo

**Coste de retraso** = Valor para el negocio + Urgencia temporal + Reducción de riesgo/oportunidad

| Trabajo | Valor negocio (1-10) | Urgencia (1-10) | Reducción riesgo (1-10) | Coste retraso | Duración (1-10) | WSJF |
|---------|---------------------|-----------------|------------------------|---------------|-----------------|------|
| Feature A | 8 | 7 | 2 | 17 | 5 | 3,4 |
| Deuda técnica B | 3 | 5 | 9 | 17 | 2 | 8,5 |
| Bug crítico C | 5 | 10 | 8 | 23 | 1 | 23 |

En este ejemplo, el bug crítico es la prioridad máxima, pero la deuda técnica B tiene mayor WSJF que la feature A porque tiene menor duración de trabajo.

## EL ROADMAP TÉCNICO: ESTRUCTURA Y COMUNICACIÓN

### Horizonte temporal del roadmap técnico

| Horizonte | Nivel de detalle | Audiencia |
|-----------|-----------------|----------|
| Sprint actual (2 semanas) | Tareas detalladas | Equipo de ingeniería |
| Próximo trimestre | Iniciativas y objetivos técnicos | Tech Lead + PM |
| Próximos 6-12 meses | Dirección arquitectural | CTO + VP Engineering |
| > 12 meses | Visión de plataforma | C-Suite (cuando aplique) |

### Cómo presentar el roadmap técnico al board o a stakeholders no técnicos

**Lo que NO presentar:** Diagramas de arquitectura, nombres de librerías, conceptos técnicos sin traducción.

**Lo que SÍ presentar:**

```
INICIATIVA TÉCNICA: Migración a arquitectura de microservicios

SITUACIÓN ACTUAL
Nuestro sistema monolítico actual tiene un límite de X usuarios
simultáneos. Con el crecimiento proyectado, lo alcanzaremos en Q3.

OBJETIVO
Arquitectura que soporte 10x el volumen actual sin degradación de rendimiento.

INVERSIÓN NECESARIA
4 sprints (8 semanas) del equipo de backend.
Sin lanzamiento de features nuevas durante este período.

RESULTADO ESPERADO
- Capacidad de soportar el pico de demanda del Q4 (campaña navideña)
- Reducción del tiempo de despliegue de 2 horas a 15 minutos
- Base para internacionalización en Q1 del año siguiente

RIESGO DE NO HACERLO
Con el crecimiento actual, estimamos una incidencia mayor de producción
antes de Q4 con impacto en ingresos de €X.
```

¿Cuál es el mayor obstáculo que encuentras actualmente para que el trabajo técnico reciba priorización en tu organización?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 35,
                'use_case'         => 'Priorizar el trabajo de ingeniería y deuda técnica con WSJF, traducir el impacto al lenguaje de negocio y comunicarlo a stakeholders no técnicos.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Equipos multiculturales — comunicación efectiva y diversidad como ventaja',
                'description'      => 'Cómo gestionar equipos con diversidad cultural: expectativas implícitas, estilos de comunicación y cómo hacer que las diferencias culturales sean una ventaja competitiva.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en gestión de equipos multiculturales y comunicación intercultural en entornos de trabajo profesional. Necesito un framework práctico para gestionar la diversidad cultural en mi equipo, superar las fricciones de comunicación y convertir las diferencias culturales en una ventaja real, no en un eslogan de employer branding.

## POR QUÉ LA DIVERSIDAD CULTURAL SIN GESTIÓN ES UN RIESGO

Los equipos multiculturales tienen un potencial de innovación y creatividad mayor que los equipos homogéneos (McKinsey, 2023). Pero ese potencial solo se realiza cuando la diversidad está gestionada activamente. Sin gestión, la diversidad cultural genera:

- Malentendidos de comunicación que escalan a conflictos interpersonales
- Dinámicas de poder implícitas donde las personas de culturas dominantes acaparan la agenda
- Exclusión involuntaria de quienes no dominan los códigos culturales del grupo mayoritario
- Burnout de adaptación en personas de culturas minoritarias que siempre deben ajustarse

## LOS MODELOS CULTURALES QUE NECESITAS CONOCER

### El modelo de Hofstede: 6 dimensiones culturales

Hofstede identificó 6 dimensiones en las que las culturas difieren y que impactan directamente en el comportamiento en el trabajo:

| Dimensión | Extremo bajo | Extremo alto | Impacto en el equipo |
|-----------|-------------|-------------|---------------------|
| Distancia al poder | Igualitario (Escandinavia) | Jerárquico (India, Arabia) | Cómo se relacionan con el manager |
| Individualismo vs. colectivismo | Colectivo (China, Japón) | Individual (EE.UU., Australia) | Cómo se atribuyen logros y responsabilidades |
| Evitación de la incertidumbre | Alta tolerancia (Singapur) | Baja tolerancia (Grecia, Japón) | Cómo reaccionan ante ambigüedad y cambio |
| Masculinidad vs. feminidad | Orientado a relaciones (Países Bajos) | Orientado a logro (Alemania, Japón) | Qué motiva y qué genera estrés |
| Orientación temporal | Corto plazo (Nigeria) | Largo plazo (China) | Cómo planifican y toman decisiones |
| Indulgencia vs. restricción | Restrictivo (Rusia) | Indulgente (México, Colombia) | Expresión emocional y disfrute del trabajo |

### El modelo de Erin Meyer: "The Culture Map"

Meyer añade 8 escalas específicas para el entorno profesional:

| Escala | Low context | High context |
|--------|-------------|-------------|
| Comunicación | Explícita, directa (Alemania, EE.UU.) | Implícita, entre líneas (Japón, Arabia Saudí) |
| Feedback negativo | Directo (Países Bajos, Rusia) | Indirecto, en privado (Japón, India) |
| Persuasión | Primero los hechos (Alemania) | Primero el contexto y la relación (Francia, Italia) |
| Liderazgo | Igualitario (Dinamarca) | Jerárquico (China, Nigeria) |
| Decisiones | Por consenso (Japón) | Por el líder (Francia, Rusia) |
| Confianza | Basada en tareas (EE.UU.) | Basada en relaciones (China, Brasil) |
| Desacuerdo | Confrontación directa (Francia) | Evitar el conflicto abierto (México) |
| Tiempo | Puntualidad absoluta (Suiza) | Tiempo flexible (Oriente Medio) |

## EXPECTATIVAS IMPLÍCITAS: EL MAYOR GENERADOR DE CONFLICTOS

Las expectativas implícitas son los comportamientos que cada cultura da por obvios sin decirlos explícitamente. En un equipo monocultural, las expectativas implícitas están alineadas y funcionan sin problemas. En un equipo multicultural, generan malentendidos constantes.

**Ejemplos comunes:**

| Expectativa implícita | Cultura A asume | Cultura B asume | Conflicto resultante |
|----------------------|----------------|-----------------|---------------------|
| Puntualidad en reuniones | 5 minutos de margen máximo | 15-20 minutos es normal | A percibe a B como irrespetuoso |
| Cómo discrepar con el manager | En la reunión, directamente | En privado, nunca en público | A cree que B no tiene opinión; B se siente humillado |
| Respuesta al email | Mismo día hábil | 48-72 horas es razonable | A percibe a B como poco comprometido |
| Celebración de logros | Individual, public recognition | Colectivo, el equipo | A se incomoda; B se siente excluido |

**Solución:** Hacer explícitas las expectativas del equipo desde el onboarding. No asumir que "son obviamente las normas".

## PROTOCOLO DE COMUNICACIÓN EXPLÍCITA PARA EQUIPOS MULTICULTURALES

### Team Operating Principles: el documento que lo cambia todo

Al inicio de un proyecto o al incorporar nuevas personas de culturas distintas, dedica una sesión de 90 minutos a co-crear vuestras normas explícitas de funcionamiento:

```
TEAM OPERATING PRINCIPLES — [Nombre del equipo]
Versión: [fecha]

COMUNICACIÓN
- Idioma de trabajo: [idioma principal] + [reglas de idioma en llamadas]
- Reuniones: comenzamos a la hora acordada. Un retraso de hasta X min es aceptable.
  Más tarde: avisamos por [canal] con antelación.
- Emails y mensajes: tiempo de respuesta esperado dentro de [horas hábiles: X horas]
- Fuera de horas: nadie está obligado a responder. Las urgencias van por [canal/método].

REUNIONES Y TOMA DE DECISIONES
- Las decisiones importantes se anuncian con [X días] de antelación para que todos puedan prepararse.
- Desacuerdo: animamos a expresarlo en la reunión. No hay preguntas tontas.
- Síntesis y acuerdos: siempre en el chat/minuta tras la reunión.

FEEDBACK
- El feedback positivo: abierto en el equipo.
- El feedback de mejora: primero en privado con la persona.
- Revisión del trabajo: usamos [herramienta] y los comentarios son sobre el trabajo, no sobre la persona.

CELEBRACIÓN
- Logros del equipo: mencionados en [reunión X] por el manager.
- Logros individuales: la persona decide si quiere que sea público o no.
```

## CONVERSACIONES CULTURALES: CÓMO HABLAR DE DIFERENCIAS SIN GENERALIZAR

El mayor riesgo al hablar de diferencias culturales es caer en estereotipos. Las dimensiones de Hofstede y Meyer son distribuciones estadísticas, no etiquetas individuales. Cada persona es un individuo que puede diferir significativamente de la media cultural de su país.

**Cómo abordarlo en 1:1 con personas de culturas distintas:**
- "¿Cómo prefieres recibir feedback? Hay personas que prefieren que sea en la reunión y otras en privado."
- "¿Qué significa para ti una reunión bien aprovechada?"
- "¿Hay algo en la forma en que trabajamos que te resulta difícil de adaptarte o que te gustaría que cambiáramos?"

Este tipo de pregunta individualiza la conversación y evita la generalización cultural.

## PLAN DE ACCIÓN EN 60 DÍAS

**Semanas 1-2:** Mapea las culturas de tu equipo actual con el modelo de Hofstede. Identifica las dimensiones con mayor distancia entre los miembros.
**Semanas 3-4:** Facilita una sesión para co-crear vuestros Team Operating Principles. Haz explícitas las expectativas implícitas más frecuentes.
**Semanas 5-6:** Revisa el proceso de onboarding. ¿Qué expectativas culturales del equipo están documentadas para los nuevos?
**Semanas 7-8:** Primera revisión de los Operating Principles. ¿Qué está funcionando? ¿Qué hay que ajustar?

¿Cuántas nacionalidades hay en tu equipo y cuál es la dimensión cultural donde percibes más fricción?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestionar equipos multiculturales con los modelos de Hofstede y Meyer, hacer explícitas las expectativas implícitas y crear Team Operating Principles.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Due diligence desde el vendedor — preparar la empresa para ser auditada',
                'description'      => 'Cómo preparar tu empresa para la due diligence de un potencial comprador, maximizando la valoración y evitando las sorpresas que derrumban el precio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor de fusiones y adquisiciones (M&A) con experiencia en operaciones de venta de empresas medianas. Necesito preparar mi empresa para ser auditada por un potencial comprador, maximizar la valoración y evitar que las sorpresas en la due diligence reduzcan el precio o rompan la operación.

## QUÉ ES LA DUE DILIGENCE Y POR QUÉ MUCHAS VENTAS FALLAN EN ESTE MOMENTO

La due diligence (DD) es el proceso de auditoría exhaustiva que realiza el comprador antes de cerrar una adquisición. Cubre áreas financieras, legales, fiscales, operativas, comerciales y de RRHH.

El 25-40% de las operaciones que llegan a la fase de DD se rompen o sufren una reducción significativa del precio porque el comprador descubre información que no conocía. La mayor parte de estas sorpresas son evitables con una preparación adecuada.

**La ventaja del vendedor preparado:**
- Proceso de DD más corto (menos tiempo de incertidumbre para el equipo)
- Mayor confianza del comprador (menos descontado el precio por riesgo)
- Poder de negociación mayor al demostrar transparencia y control
- Menor probabilidad de ajustes de precio post-firma

## LAS 6 ÁREAS DE DUE DILIGENCE Y QUÉ BUSCA EL COMPRADOR

### 1. Financiera (la más importante)

El comprador busca entender la sostenibilidad y calidad de los ingresos.

**Lo que analizan:**
- Cuentas auditadas de los últimos 3-5 años
- Calidad del EBITDA: ¿es recurrente y normalizado?
- Ajustes extraordinarios: gastos o ingresos no recurrentes
- Working capital histórico y estacionalidad
- Deuda existente (incluyendo contingente)
- Concentración de clientes: ¿depende el 30%+ de ingresos de un solo cliente?

**Lo que debes preparar:**
- Cuentas auditadas (si no las tienes, contrata una auditoría ahora)
- Puente de EBITDA: de EBITDA contable a EBITDA normalizado con todos los ajustes justificados
- Modelo de proyecciones financieras a 3 años con supuestos documentados
- Lista completa de deudas financieras con vencimientos y tipos

### 2. Legal y corporativa

**Lo que analizan:**
- Estructura accionarial y libro de accionistas
- Estatutos y acuerdos de socios
- Contratos con clientes (¿hay cláusulas de change of control?)
- Contratos con proveedores clave
- Propiedad intelectual (¿quién es el titular real?)
- Litigios pendientes o potenciales

**Lo que debes preparar:**
- Data room con todos los contratos importantes indexados y firmados
- Revisión de las cláusulas de change of control en contratos de clientes (¡antes de que lo haga el comprador!)
- Limpieza de la estructura societaria: elimina entidades sin actividad
- Registro de propiedad intelectual actualizado

### 3. Fiscal

**Lo que analizan:**
- Declaraciones de impuestos de los últimos 4 años
- Inspecciones fiscales pendientes o pasadas
- Pasivos fiscales contingentes
- Operaciones con partes vinculadas (precios de transferencia)

**Lo que debes preparar:**
- Informe de tax compliance con tus asesores fiscales
- Resolución de cualquier contingencia fiscal pendiente si es posible
- Documentación de operaciones con partes vinculadas

### 4. Comercial y clientes

**Lo que analizan:**
- Concentración de clientes (Pareto de ingresos)
- Tasas de retención y churn histórico
- Contratos con cláusulas de renovación
- Pipeline de ventas y calidad de las proyecciones

**Lo que debes preparar:**
- CRM actualizado y limpio con el pipeline documentado
- Cohort analysis de clientes mostrando retención histórica
- Contratos de clientes con duración y términos de renovación claros

### 5. Operativa y RRHH

**Lo que analizan:**
- Dependencia de personas clave (¿qué pasa si el fundador se va?)
- Contratos de empleados y pasivos laborales
- Estructura de compensación y costes de RRHH
- Procesos documentados vs. en la cabeza de alguien

**Lo que debes preparar:**
- Organigramas actualizados
- Contratos de trabajo firmados (¡muchas pymes tienen empleados sin contrato actualizado!)
- Acuerdos de confidencialidad y no competencia con empleados clave
- Documentación de procesos críticos

### 6. Tecnología e IT (especialmente relevante en empresas digitales)

**Lo que analizan:**
- Propiedad del código fuente (¿está todo a nombre de la empresa?)
- Licencias de software usadas y su cumplimiento
- Seguridad y posibles vulnerabilidades
- Deuda técnica que el comprador heredará

## EL DATA ROOM: TU HERRAMIENTA PRINCIPAL

El data room es el repositorio digital donde organizas todos los documentos de la DD. Un data room bien organizado acelera el proceso y comunica profesionalidad.

### Estructura recomendada del data room

```
DATA ROOM — [Nombre de la empresa]

01_CORPORATIVO
   - Escritura de constitución y estatutos vigentes
   - Actas de juntas (últimos 3 años)
   - Libro de accionistas
   - Organigrama corporativo

02_FINANCIERO
   - Cuentas anuales auditadas (últimos 3 años)
   - Informes de gestión
   - Proyecciones financieras
   - Deuda y préstamos vigentes

03_FISCAL
   - Declaraciones de impuestos (últimos 4 años)
   - Comunicaciones con la AEAT

04_LEGAL Y CONTRATOS
   - Contratos con clientes (top 20)
   - Contratos con proveedores clave
   - Contratos de arrendamiento
   - Propiedad intelectual

05_RRHH
   - Contratos de trabajo
   - Estructura salarial (anonimizada inicialmente)
   - Acuerdos de no competencia

06_OPERACIONES
   - Procesos documentados
   - Infraestructura IT
   - Activos relevantes

07_COMERCIAL
   - Lista de clientes con ingresos
   - Análisis de retención
   - Pipeline de ventas
```

## VALORACIÓN: CÓMO NO DEJAR DINERO SOBRE LA MESA

Los factores que maximizan la valoración más allá del EBITDA:

| Factor | Impacto en múltiplo | Cómo mejorarlo |
|--------|--------------------|-----------------|
| Ingresos recurrentes vs. puntuales | +1-2x | Convierte proyectos en suscripciones |
| Retención de clientes > 90% | +0,5-1x | Documenta y demuestra con datos |
| Equipipo directivo independiente del fundador | +1-2x | Refuerza el equipo antes del proceso |
| Diversificación de clientes | +0,5-1x | Ningún cliente > 15% de ingresos |
| Contratos de larga duración | +0,5x | Renueva contratos antes del proceso |

**El principio de la venta preparada:** Empieza a preparar la empresa para la venta 18-24 meses antes de que quieras cerrar. Las mejoras que hoy tomas llevarán ese tiempo en reflejarse en las métricas que verá el comprador.

¿En qué fase del proceso de venta estás? ¿Tienes ya interesados o estás preparando la empresa para un proceso de venta en los próximos 1-2 años?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Preparar una empresa para la due diligence de comprador con data room estructurado, auditoría de las 6 áreas clave y estrategias para maximizar la valoración.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Despidos disciplinarios en España — procedimiento correcto y errores frecuentes',
                'description'      => 'Causas legales reconocidas para el despido disciplinario, procedimiento correcto según el ET y las demandas más frecuentes que el trabajador gana y por qué.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado laboralista especializado en derecho del trabajo español. Necesito entender el despido disciplinario en España: qué causas son legalmente reconocidas, qué procedimiento debo seguir exactamente y cuáles son los errores más frecuentes que hacen que la empresa pierda en el juzgado.

## QUÉ ES EL DESPIDO DISCIPLINARIO Y EN QUÉ SE DIFERENCIA

El despido disciplinario está regulado en los artículos 54 a 56 del Estatuto de los Trabajadores (ET). Es la extinción del contrato por incumplimiento grave y culpable del trabajador. A diferencia del despido objetivo (causas económicas, técnicas, organizativas o de producción), el disciplinario no genera derecho a indemnización si se declara procedente.

**La clave:** "Grave y culpable". Ambos requisitos deben concurrir. Un incumplimiento leve no justifica el despido disciplinario; un error sin intención puede no ser culpable.

## LAS CAUSAS LEGALES DEL DESPIDO DISCIPLINARIO (ART. 54 ET)

| Causa | Descripción | Ejemplos |
|-------|-------------|---------|
| Faltas repetidas e injustificadas de asistencia o puntualidad | Reiteradas, no puntuales | 3 ausencias sin justificar en 2 meses |
| Indisciplina o desobediencia | Negativa a cumplir órdenes legítimas | No cumplir una instrucción directa de trabajo |
| Ofensas verbales o físicas | Al empresario, compañeros o familiares | Insultos, agresiones |
| Transgresión de la buena fe contractual y abuso de confianza | Fraude, engaño, deslealtad | Robo, falsificación de documentos, cobro de comisiones prohibidas |
| Disminución continuada y voluntaria del rendimiento | Deliberada, no por causas ajenas | Rendimiento muy por debajo de lo habitual sin causa justificada |
| Embriaguez o toxicomanía habitual | Con repercusión negativa en el trabajo | Estado habitual, no puntual |
| Acoso por razón de origen racial, religión, discapacidad, edad, orientación sexual, o acoso sexual | — | Conductas de acoso documentadas |

**Importante:** El convenio colectivo aplicable puede tipificar faltas adicionales como muy graves, lo que amplia las causas válidas para el despido disciplinario. Siempre revisa el convenio.

## EL PROCEDIMIENTO: LO QUE DEBES HACER EXACTAMENTE

### Paso 1 — Investigación previa y recogida de pruebas

Antes de tomar ninguna decisión, documenta los hechos con el máximo detalle:
- Informes de los superiores directos por escrito
- Capturas de pantalla, emails, registros de acceso, cámaras de seguridad (si los hay y son legales)
- Testimonios de compañeros (con precaución, pueden usarse en tu contra si no se gestionan bien)
- Registros de incidencias previas (si el despido es por causa reiterada)

### Paso 2 — Verificar si aplica el expediente contradictorio

El artículo 55.1 ET exige que, antes de despedir a un representante de los trabajadores (delegado sindical, miembro del comité de empresa), se tramite un **expediente contradictorio** en el que se da audiencia al interesado y a los demás integrantes de la representación.

Si el trabajador tiene esta condición y no haces el expediente, el despido es nulo (no improcedente: nulo, con readmisión obligatoria).

### Paso 3 — Redacción de la carta de despido

La carta de despido es el documento más crítico del proceso. Los jueces la analizan con lupa. Debe incluir:

**Elementos obligatorios:**
- Hechos que motivan el despido, descritos de forma **concreta y detallada** (fechas, lugares, comportamientos específicos)
- Causa legal que ampara el despido (referencia al artículo 54 ET y al convenio si aplica)
- Fecha de efectos del despido
- Liquidación de haberes o indicación de que se practicará en el momento de la comunicación

**Lo que NO debe incluir:**
- Hechos que no puedas probar
- Calificaciones genéricas sin hechos concretos ("su actitud ha sido inapropiada")
- Hechos anteriores que ya fueron sancionados (non bis in idem)

### Paso 4 — Entrega y acreditación de la comunicación

El despido debe comunicarse **por escrito** (art. 55.1 ET). La entrega debe ser acreditada:
- Entrega presencial con firma del trabajador en la copia (o indicación de su negativa a firmar, con testigo)
- Burofax con acuse de recibo y certificación del contenido (si el trabajador no está disponible)

**No vale:** comunicación verbal, email sin acuse de recibo, whatsapp.

### Paso 5 — Liquidación de haberes

En el momento del despido, se debe liquidar: salarios pendientes, vacaciones no disfrutadas, pagas prorrateadas. Si el despido se declara improcedente, la indemnización será de 33 días por año trabajado (con límite de 24 mensualidades para contratos posteriores a la reforma de 2012).

## LOS 10 ERRORES MÁS FRECUENTES QUE HACEN PERDER AL EMPRESARIO

| Error | Consecuencia | Consecuencia legal |
|-------|-------------|-------------------|
| Carta genérica sin hechos concretos | El juez no puede valorar si hay causa | Improcedente |
| Hechos no probados incluidos en la carta | El trabajador los refuta fácilmente | Improcedente |
| No respetar el plazo de prescripción | Las faltas muy graves prescriben a los 60 días desde que la empresa las conoce | El despido decae |
| Olvidar el expediente contradictorio | Si el trabajador es representante sindical | Nulo (readmisión obligatoria) |
| Despedir durante baja médica | Presunción de nulidad si la causa real es la baja | Nulo |
| Despedir por causa discriminatoria | Orientación sexual, embarazo, sindicación... | Nulo con posible indemnización adicional |
| No sancionar antes para causas reiteradas | El juez considera que la empresa "toleró" la conducta | Improcedente |
| Liquidación incorrecta | Nómina errónea | Sanción administrativa |
| Comunicación verbal sin carta escrita | Incumplimiento formal del art. 55.1 ET | Improcedente automático |
| Hechos ya sancionados usados de nuevo | Non bis in idem: no puedes sancionar dos veces lo mismo | Improcedente |

## LO QUE EL TRABAJADOR PROBARÁ EN EL JUZGADO

El proceso de despido en España sigue el principio de que **la carga de la prueba recae en el empresario**: es la empresa quien debe probar que los hechos ocurrieron y que justifican el despido. El trabajador no tiene que probar que no hizo nada malo; es la empresa quien debe probar que sí lo hizo.

Por eso, antes de firmar la carta, pregúntate: ¿puedo probar cada hecho que incluyo en esta carta con documentación, testigos o registros objetivos?

## RECOMENDACIÓN FINAL

El despido disciplinario en España es uno de los actos jurídicos con más consecuencias si se ejecuta mal. Antes de firmar cualquier carta de despido:
1. Consulta con un abogado laboralista
2. Revisa el convenio colectivo aplicable
3. Verifica que tienes prueba documental de cada hecho
4. Comprueba que el trabajador no tiene protección especial (baja, embarazo, representación sindical)

¿Tienes un caso concreto que quieras analizar? Descríbelo con los hechos relevantes y te doy una valoración inicial de la fortaleza jurídica de la posible causa de despido.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Ejecutar un despido disciplinario en España: causas legales, procedimiento obligatorio, errores que generan nulidad o improcedencia y cómo documentar los hechos.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión de reseñas negativas online — protocolo de respuesta que genera credibilidad',
                'description'      => 'Protocolo para responder críticas en Google, Trustpilot y G2 que convierte problemas en credibilidad y demuestra al mercado cómo gestiona tu empresa las quejas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en reputación online y customer experience. Necesito un protocolo completo para gestionar las reseñas negativas en Google, Trustpilot y G2 que transforme los problemas en credibilidad pública y demuestre cómo mi empresa gestiona las quejas.

## POR QUÉ LAS RESEÑAS NEGATIVAS SON UNA OPORTUNIDAD, NO SOLO UN PROBLEMA

El 89% de los consumidores lee las respuestas de las empresas a las reseñas antes de tomar una decisión de compra (BrightLocal, 2024). Lo que buscan no es solo la puntuación: buscan cómo responde la empresa cuando algo va mal. Una empresa con 4,8 estrellas y sin reseñas negativas parece sospechosa. Una empresa con 4,3 y respuestas profesionales a las críticas parece madura y confiable.

**La paradoja de las reseñas negativas:**
Una reseña negativa bien gestionada genera más confianza que diez positivas sin respuesta.

## EL PROTOCOLO DE RESPUESTA EN 5 PASOS

### Paso 1 — Detectar en menos de 24 horas

Las reseñas no atendidas en más de 72 horas generan la percepción de que a la empresa no le importa. Configura alertas:

- **Google Business Profile:** notificaciones por email activadas en el panel
- **Trustpilot:** alertas de email por cada nueva reseña
- **G2:** notificaciones del panel de vendor
- **Herramientas de monitorización:** Mention, Brand24, Google Alerts con el nombre de tu empresa

**Objetivo:** respuesta pública en menos de 24 horas laborables.

### Paso 2 — Investigación interna antes de responder

Antes de escribir una sola palabra en público, investiga:
- ¿Quién es el cliente? ¿Está activo? ¿Cuál fue su experiencia real?
- ¿Los hechos que describe son ciertos? ¿En qué parte?
- ¿Hay contexto relevante que ayude a entender qué pasó?
- ¿Ya se intentó resolver este problema por otro canal?

Esta investigación te prepara para responder con precisión y evitar contradicciones.

### Paso 3 — Redacción de la respuesta pública

La respuesta pública es para DOS audiencias, no para una:
1. El cliente que escribió la reseña (a quien quieres recuperar o al menos no empeorar la relación)
2. Los potenciales clientes que leerán la reseña y la respuesta antes de comprar

**Estructura de respuesta:**

```
1. AGRADECIMIENTO (no defensivo)
   "Gracias por tomarte el tiempo de compartir tu experiencia."

2. RECONOCIMIENTO (sin excesivas disculpas si no hay causa)
   "Entiendo que [describe el problema concreto que mencionan]
   no fue la experiencia que esperabas."

3. EXPLICACIÓN BREVE (si procede y es honesta)
   "En este caso, lo que ocurrió fue [contexto relevante].
   Reconocemos que [parte que falló]."

4. ACCIÓN TOMADA O COMPROMETIDA
   "Hemos [acción ya tomada] / Vamos a [acción comprometida]."

5. INVITACIÓN AL CONTACTO DIRECTO
   "Me gustaría hablar contigo directamente para resolver esto.
   Puedes contactarme en [email/teléfono]."
```

### Paso 4 — Contacto privado con el cliente

Simultáneamente a la respuesta pública, intenta contactar al cliente por un canal privado (email, teléfono) para resolver el problema real. El objetivo es transformar la experiencia, no solo gestionar la imagen pública.

Si el problema tiene solución, ofrecela concretamente. Si el cliente recibe una solución real, en el 30-40% de los casos actualiza o elimina la reseña negativa.

### Paso 5 — Seguimiento y cierre

Si el cliente responde a tu contacto privado y el problema se resuelve, escribe una respuesta de seguimiento en la plataforma:

"Actualización: Me alegra que hayamos podido resolver esto directamente. Quedamos a tu disposición para cualquier otra consulta."

## EJEMPLOS DE RESPUESTAS POR TIPO DE RESEÑA

### Reseña con queja legítima

❌ Respuesta incorrecta:
"Sentimos mucho lo ocurrido. Nuestro equipo siempre intenta hacerlo lo mejor posible. Esperamos poder volver a servirle."

✅ Respuesta correcta:
"Hola [nombre], gracias por explicar lo que ocurrió con [servicio concreto]. Tienes razón en que el tiempo de respuesta que recibiste no fue el que prometemos: tardamos X días y nuestro compromiso es Y. Esto no es aceptable y lo hemos revisado internamente. Nos pondremos en contacto contigo directamente esta semana para compensarte por el inconveniente. — [Nombre, cargo]"

### Reseña exagerada o parcialmente incorrecta

❌ Respuesta incorrecta:
"Esta reseña no refleja la realidad. El cliente está equivocado sobre..."

✅ Respuesta correcta:
"Hola [nombre], lamentamos que tu experiencia no fuera positiva. Nos gustaría entender mejor lo que ocurrió, porque algunos detalles no coinciden con nuestros registros. Puedes contactarme directamente en [email] para revisar juntos el caso. — [Nombre]"

*Nota: no señales los errores en público. Invita a la conversación privada.*

### Reseña de cliente que claramente confunde tu empresa con otra

"Hola [nombre], revisando tu reseña, creemos que puede haber una confusión: no encontramos en nuestro sistema ningún cliente con tu nombre en las fechas que menciones. ¿Podrías contactarnos en [email] para verificarlo? Si la experiencia que describes fue con nosotros, queremos resolverlo."

### Reseña de alguien que nunca fue cliente (sospecha de reseña falsa)

"Hola, hemos revisado nuestros registros y no encontramos ninguna compra o interacción asociada a tu nombre en nuestra plataforma. Si crees que puede haber un error, contáctanos en [email]. Si esta reseña no corresponde a una experiencia real con nuestra empresa, la reportaremos a la plataforma."

*En Google: usa el botón "Reportar" para reseñas que violan las políticas (sin interacción real con el negocio).*

## DIFERENCIAS DE GESTIÓN POR PLATAFORMA

| Plataforma | Audiencia | Contexto de compra | Prioridad |
|------------|-----------|--------------------|-----------|
| Google Reviews | Búsqueda local, decisión de visita | Muy alta: aparece en Maps y búsqueda | Máxima |
| Trustpilot | Validación post-búsqueda | Alta: comparación de proveedores B2C | Alta |
| G2 / Capterra | Decisión de compra B2B SaaS | Muy alta: proceso de evaluación formal | Máxima para SaaS |
| App Store / Google Play | Decisión de descarga | Alta para apps de consumo | Alta |
| Glassdoor | Decisión de candidatos | Alta para employer branding | Media |

## SISTEMA DE GESTIÓN: EVITAR QUE SE ACUMULE EL TRABAJO

| Tarea | Frecuencia | Responsable |
|-------|-----------|-------------|
| Revisar alertas y nuevas reseñas | Diario | CS o marketing |
| Responder reseñas negativas | < 24h desde publicación | CS lead |
| Contacto privado con cliente | < 48h desde reseña | CS lead |
| Revisión mensual de puntuaciones y tendencias | Mensual | Manager |
| Solicitar reseñas a clientes satisfechos | Trimestral | CS / Account managers |

¿En qué plataforma tienes más reseñas negativas ahora mismo y cuál es el tipo de queja más frecuente? Con esa información te redacto las respuestas tipo para tu caso concreto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Gestionar reseñas negativas en Google, Trustpilot y G2 con protocolo de respuesta pública de 5 pasos, ejemplos por tipo de queja y sistema de seguimiento.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestión de la carga de trabajo variable como freelance — meses llenos y meses secos',
                'description'      => 'Qué hacer en los meses con demasiado trabajo y cómo sobrevivir y aprovechar los meses secos siendo freelance sin perder estabilidad financiera ni mental.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de negocio especializado en profesionales independientes y freelances con experiencia. Necesito un sistema completo para gestionar la variabilidad de carga de trabajo: qué hacer cuando tengo demasiados proyectos simultáneos y cómo aprovechar (y sobrevivir) los meses secos sin que afecte a mi negocio ni a mi bienestar.

## EL PROBLEMA ESTRUCTURAL DE LA VARIABILIDAD FREELANCE

La carga de trabajo variable es la característica más estresante del trabajo freelance. La mayoría de los freelances oscilan entre dos estados igualmente problemáticos:
- **Sobrecarga:** demasiados proyectos, calidad que baja, clientes insatisfechos, burnout
- **Sequía:** sin proyectos, angustia financiera, pérdida de confianza

El objetivo no es eliminar la variabilidad (es inherente al modelo), sino construir sistemas que hagan la variabilidad manejable.

## PARTE 1: GESTIONAR LOS MESES CON DEMASIADO TRABAJO

### Diagnóstico: ¿tienes realmente demasiado trabajo o tienes un problema de gestión del tiempo?

Antes de aceptar que estás sobrecargado, calcula tu capacidad real:

```
Horas hábiles al mes:
- Días laborables × horas/día = X horas brutas
- Menos: reuniones de seguimiento (Y horas)
- Menos: tareas administrativas (Z horas)
- Menos: marketing y desarrollo de negocio (W horas)
= Horas de trabajo productivo disponibles: X - Y - Z - W

Horas de trabajo comprometidas:
- Proyecto A: X horas estimadas
- Proyecto B: Y horas estimadas
- Proyecto C: Z horas estimadas
= Total comprometido: X+Y+Z horas

Ratio de ocupación: comprometido / disponible
> 85%: estás en zona de riesgo
> 100%: estás sobrecargado
```

### Las 4 opciones cuando tienes más trabajo del que puedes asumir

**Opción 1 — Aumentar la tarifa**
Si la demanda supera tu oferta de tiempo, el mercado te está diciendo que estás cobrando por debajo de tu valor. Cada nueva solicitud que llega cuando estás lleno es una oportunidad para subir el precio al próximo proyecto.

Táctica concreta: la próxima vez que un cliente te contacte estando lleno, da una fecha de disponibilidad real y una tarifa un 20-30% más alta que tu tarifa habitual. Si el cliente acepta, obtuviste un aumento. Si no acepta, obtuviste tiempo libre.

**Opción 2 — Derivar a otro freelance de confianza**
Construye una red de 3-5 freelances complementarios con los que puedas derivarse trabajo mutuamente. Cuando estés lleno, derivas con una recomendación personal. Cuando ellos estén llenos, ellos te derivan. Muchos profesionales añaden una comisión del 10-15% al derivar.

**Opción 3 — Postponer el inicio**
Negociar el inicio del proyecto para cuando tengas capacidad. "Puedo empezar en 6 semanas. Si el timing encaja, con mucho gusto." Muchos clientes esperan si el profesional les da confianza.

**Opción 4 — Decir no con dignidad**
"Ahora mismo estoy al 100% de capacidad y no podría darte la atención que merece tu proyecto. Si en [mes] sigues buscando ayuda, me encantaría hablar entonces."

Decir no con dignidad construye reputación. Los clientes que respetan tu tiempo son mejores clientes que los que presionan para entrar cuando no tienes hueco.

### Gestión de la sobrecarga cuando ya estás dentro

Si ya aceptaste demasiado y estás en crisis de tiempo:

**Regla de la semana más estrecha:**
Haz la lista de todo lo que tienes pendiente. Para cada tarea, pregúntate: "¿Qué pasa si esto no se hace esta semana?" Las tareas que no tienen consecuencias concretas si se retrasan una semana, se retrasan. Las que sí las tienen, van primero.

**Comunicación proactiva con los clientes:**
Cuando sabes que vas a retrasarte, comunícalo TÚ antes de que el cliente te pregunte. "Quería avisarte de que el entregable del martes estará listo el jueves. He tenido una semana con más urgencias de lo esperado y prefiero comunicarlo con antelación." Los clientes perdonan los retrasos anunciados. No perdonan los retrasos sin comunicación.

## PARTE 2: SOBREVIVIR Y APROVECHAR LOS MESES SECOS

### El fondo de emergencia freelance: la base de todo

Sin fondo de emergencia, cada mes seco es una crisis existencial. Con él, es un período de oportunidad.

**Objetivo:** 3-6 meses de gastos fijos cubiertos en una cuenta separada, solo para emergencias de negocio.

**Cómo llegar ahí:** En los meses buenos, separa el 15-20% de cada cobro en esa cuenta. No la toques hasta que la sequía llegue.

### El calendario de actividades para los meses secos

Un mes seco no es un mes muerto. Es un mes con diferente tipo de trabajo. Usa este menú:

| Actividad | Impacto a corto plazo | Impacto a largo plazo |
|-----------|----------------------|-----------------------|
| Contactar a clientes anteriores | Alto | — |
| Actualizar el portfolio | Bajo directo | Alto (próximos proyectos) |
| Crear contenido de demostración de expertise | Bajo directo | Alto (posicionamiento) |
| Formación en skill complementaria | Bajo directo | Medio (tarifa más alta) |
| Proyectos personales | Bajo económico | Alto (portfolio, visibilidad) |
| Explorar nuevos nichos o servicios | Medio | Alto |
| Mejorar los procesos internos | Nulo directo | Alto (eficiencia futura) |

### Cómo reactivar el pipeline en un mes seco: el contacto de valor

El error es escribir a exclientes diciendo "estoy libre si tienes trabajo". Eso transmite escasez y desperation.

El enfoque correcto: el contacto de valor.

```
Asunto: [Algo que puede interesarte] — [Nombre]

Hola [nombre],

He pensado en vosotros al leer [artículo/tendencia/caso de uso relevante para su negocio].
Creo que podría aplicarse directamente a [problema o objetivo que conoces de ese cliente].

¿Tienes 20 minutos esta semana para comentarlo? Tengo algunas ideas concretas.

Un abrazo,
[Tu nombre]
```

Este mensaje aporta valor antes de pedir nada y abre conversación sin la presión de "estoy buscando trabajo".

### El sistema de prevención: suavizar la variabilidad

Las tres palancas para reducir la amplitud de los ciclos:

**1. Retainers mensuales**
Acuerda con 1-3 clientes estables una tarifa mensual fija por un número definido de horas o entregas. Esto te garantiza una base de ingresos independientemente del mes.

**2. Anticipo para proyectos nuevos**
Cobra el 30-50% del proyecto al inicio. Esto suaviza el cash flow y compromete al cliente.

**3. Facturación con hitos intermedios**
En proyectos largos, divide la facturación en 3 partes: inicio, entrega intermedia, entrega final. Evita tener un mes de trabajo sin ingresos y el siguiente con un pago grande.

## HERRAMIENTAS DE SEGUIMIENTO PARA FREELANCES

| Herramienta | Para qué | Coste |
|-------------|----------|-------|
| Toggl Track | Registrar horas por proyecto | Gratis (básico) |
| HoneyBook / Bonsai | Contratos, facturas, CRM | 20-40€/mes |
| Notion / Trello | Gestión de proyectos personal | Gratis |
| Spreadsheet mensual | Cash flow y previsión de ingresos | Gratis |

¿En qué fase estás ahora mismo: en un período de sobrecarga o en uno de sequía? Con ese contexto te doy el plan de acción específico para los próximos 30 días.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Gestionar la variabilidad de carga de trabajo freelance: sistema para meses de sobrecarga, plan de actividades para meses secos y estrategias de estabilización con retainers.',
                'vote_score'       => 40,
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
