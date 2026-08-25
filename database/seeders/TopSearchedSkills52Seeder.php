<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills52Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 — Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Secuencia de emails de bienvenida',
                'description'      => 'El flujo de onboarding por email que activa y fideliza suscriptores desde el día 1, con estructura, copy y automatización.',
                'prompt_content'   => <<<'PROMPT'
Actúa como especialista en email marketing y automatización con experiencia en secuencias de bienvenida para SaaS, e-commerce y negocios de contenido. Necesito diseñar o mejorar la secuencia de emails de bienvenida para mis nuevos suscriptores.

**MI CONTEXTO**
- Tipo de negocio: [SaaS / e-commerce / newsletter / infoproductos / servicio profesional]
- Qué ofreces a cambio de la suscripción (lead magnet): [ebook / descuento / acceso gratuito / newsletter / webinar]
- Herramienta de email marketing: [Mailchimp / ActiveCampaign / Klaviyo / ConvertKit / Brevo / otra]
- Longitud de secuencia deseada: [3 / 5 / 7 emails — o no lo sé]
- Principal objetivo de la secuencia: [activación de cuenta / primera compra / educación / comunidad]

---

## MÓDULO 1 — ESTRATEGIA DE LA SECUENCIA

### 1.1 Los 3 errores más frecuentes en bienvenidas
Antes de diseñar, enumera los errores que hay que evitar:
1. Enviar el lead magnet y desaparecer
2. Hablar solo del producto en lugar de resolver problemas
3. No tener un CTA claro en cada email

### 1.2 El arco narrativo de una secuencia ganadora

| Email | Momento de envío | Objetivo emocional | CTA principal |
|-------|-----------------|-------------------|---------------|
| 1 | Inmediato | Cumplir la promesa + primera impresión | Descargar / acceder al lead magnet |
| 2 | Día 1 | Validar la decisión de suscribirse | Leer caso de éxito / ver vídeo corto |
| 3 | Día 3 | Resolver la objeción principal | Responder con su mayor problema |
| 4 | Día 5 | Mostrar el camino posible | Explorar el producto / recurso clave |
| 5 | Día 7 | Invitar a dar el siguiente paso | Prueba gratuita / primera compra / webinar |

---

## MÓDULO 2 — PLANTILLAS DE CADA EMAIL

Escribe el borrador completo de los 5 emails con esta estructura para cada uno:

**[Número de email] — [Nombre del email]**
- **Asunto A**: [opción principal]
- **Asunto B**: [variante para A/B test]
- **Preview text**: [los primeros 90 caracteres que se ven en el inbox antes de abrir]
- **Cuerpo del email**: escrito en tono [conversacional / profesional] con los elementos: gancho de apertura, cuerpo principal, CTA claro

---

## MÓDULO 3 — PERSONALIZACIÓN Y SEGMENTACIÓN

### 3.1 Personalización más allá del nombre
Explica qué campos de personalización tiene sentido recoger en el formulario de suscripción para poder adaptar la secuencia:

| Campo opcional | Cómo usarlo en la secuencia | Impacto estimado en conversión |
|----------------|----------------------------|-------------------------------|
| Rol o cargo | | |
| Tamaño de empresa / tipo de negocio | | |
| Principal objetivo / problema | | |
| Cómo te conocieron | | |

### 3.2 Bifurcación de la secuencia según el comportamiento
Define las reglas de automatización para segmentar la secuencia:

| Comportamiento | Acción automática | Rama alternativa |
|----------------|------------------|-----------------|
| Abrió el email 1 pero no hizo clic | | |
| Hizo clic en el CTA del email 3 | | |
| No abrió ningún email en 7 días | | |
| Respondió al email 3 con su problema | | |

---

## MÓDULO 4 — MÉTRICAS DE UNA BUENA SECUENCIA DE BIENVENIDA

Define los benchmarks y los KPIs a monitorizar:

| KPI | Benchmark industria | Mi objetivo | Señal de problema |
|-----|--------------------|-----------|--------------------|
| Open rate email 1 | 50-70% | | |
| Open rate emails 2-5 | 30-50% | | |
| Click-through rate (CTR) | 3-8% | | |
| Tasa de respuesta (email 3) | 5-15% | | |
| Conversión global de la secuencia | según negocio | | |
| Tasa de baja (unsubscribe) | <1% por email | | |

---

## MÓDULO 5 — CONFIGURACIÓN TÉCNICA EN LA HERRAMIENTA DE EMAIL

Lista los pasos técnicos para configurar correctamente la secuencia en cualquier herramienta de automatización:

1. Crear el trigger de entrada (formulario, etiqueta, webhook)
2. Configurar los delays correctamente (diferencia entre "X días después de suscribirse" vs. "X días después del email anterior")
3. Definir los criterios de salida de la secuencia (primera compra, respuesta recibida)
4. Configurar el seguimiento de conversiones
5. Configurar el test A/B en los asuntos del email 1 y 2

---

**Formato de respuesta**: incluye los 5 emails completos con asuntos y preview text listos para copiar. Usa [PERSONALIZAR] para los campos que dependen de mi negocio concreto. Señala en cada email el elemento más importante de optimizar si solo pudiera mejorar una cosa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'         => 'Diseñar una secuencia de 5 emails de bienvenida con plantillas de copy completas y reglas de automatización',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            // 2 — Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Comunicación en tiempo real',
                'description'      => 'WebSockets, SSE y polling: cuándo usar cada tecnología para chat, notificaciones y dashboards en vivo, con implementación práctica.',
                'prompt_content'   => <<<'PROMPT'
Actúa como ingeniero backend senior con experiencia en sistemas de comunicación en tiempo real para aplicaciones web y móvil. Necesito elegir e implementar la tecnología correcta para añadir funcionalidad en tiempo real a mi aplicación.

**MI CONTEXTO**
- Stack tecnológico: [lenguaje backend / framework / lenguaje frontend]
- Caso de uso específico: [chat / notificaciones push / dashboard en vivo / colaboración multiusuario / actualizaciones de estado / streaming de datos]
- Número estimado de usuarios concurrentes: [aproximado]
- Infraestructura actual: [servidor único / varios servidores / serverless / cloud managed]
- Restricciones conocidas: [firewall corporativo / proxies / soporte de navegadores legacy]

---

## PARTE 1 — COMPARATIVA DE TECNOLOGÍAS

### 1.1 Tabla de decisión principal

| Criterio | WebSockets | Server-Sent Events (SSE) | Long Polling | Short Polling |
|----------|-----------|--------------------------|-------------|--------------|
| Dirección de datos | Bidireccional | Servidor → Cliente | Servidor → Cliente | Servidor → Cliente |
| Protocolo | ws:// / wss:// | HTTP estándar | HTTP estándar | HTTP estándar |
| Soporte de proxies y firewalls | Problemático | Excelente | Excelente | Excelente |
| Reconexión automática | Manual | Nativa | Manual | N/A |
| Overhead por conexión | Bajo tras handshake | Muy bajo | Moderado | Alto |
| Escalado horizontal | Complejo (sticky sessions o pub/sub) | Más sencillo | Más sencillo | Sencillo |
| Latencia | Muy baja | Baja | Media | Alta |
| Casos de uso ideales | | | | |
| Cuándo NO usarlo | | | | |

### 1.2 Árbol de decisión
Guíame paso a paso para elegir la tecnología correcta según mis respuestas:

1. ¿El cliente necesita enviar datos al servidor en tiempo real? → Si Sí: WebSockets / Si No: continuar
2. ¿Puedo garantizar que no hay proxies o firewalls que bloqueen WebSockets? → ...
3. ¿El número de eventos por segundo es muy alto (>100/s por usuario)? → ...
4. ¿Necesito soporte en entornos serverless o edge? → ...

Resultado: recomendación argumentada para mi caso de uso específico.

---

## PARTE 2 — IMPLEMENTACIÓN DE WEBSOCKETS

### 2.1 Arquitectura de WebSocket con múltiples servidores
El mayor desafío en producción es el escalado. Explica el patrón pub/sub con Redis para sincronizar mensajes entre servidores:

```
Cliente A → Servidor 1 → Redis Pub/Sub → Servidor 2 → Cliente B
```

Indica las librerías recomendadas según el stack (Socket.io, ws, uWebSockets, Pusher Channels, Ably).

### 2.2 Código de ejemplo: chat básico
Proporciona un ejemplo mínimo funcional en [el lenguaje del usuario] con:
- Servidor: conexión, manejo de mensajes, rooms o canales, desconexión
- Cliente: conexión, envío, recepción, reconexión con backoff exponencial
- Gestión de errores: qué hacer cuando la conexión se pierde

### 2.3 Gestión de autenticación en WebSockets
Explica las dos estrategias principales:
- Token en query string al conectar (sencillo pero el token queda en logs del servidor)
- Handshake HTTP autenticado antes de upgrade a WS (más seguro)

---

## PARTE 3 — IMPLEMENTACIÓN DE SERVER-SENT EVENTS (SSE)

### 3.1 Por qué SSE está infrautilizado
Explica los casos donde SSE supera a WebSockets y es injustamente ignorado.

### 3.2 Código de ejemplo: notificaciones en tiempo real con SSE
Proporciona un ejemplo en [el lenguaje del usuario]:
- Endpoint del servidor: headers correctos (`Content-Type: text/event-stream`), envío de eventos con id, tipo y data
- Cliente: `EventSource`, manejo de eventos, reconexión automática, `Last-Event-ID`

### 3.3 Limitación de conexiones por dominio
El navegador limita las conexiones SSE por dominio. Cómo gestionarlo:
- HTTP/2 multiplexación (solución preferida)
- Alternativa: un solo canal SSE con eventos tipados

---

## PARTE 4 — LONG POLLING CORRECTO

Muchas implementaciones de long polling tienen bugs. Explica el patrón correcto:

1. El cliente envía una petición HTTP normal
2. El servidor la mantiene abierta hasta que hay datos o expira el timeout
3. El cliente recibe la respuesta y lanza inmediatamente una nueva petición
4. Gestión de errores: si el servidor devuelve error, el cliente espera con backoff antes de reintentar

Diferencia entre long polling implementado correctamente y el "polling disfrazado" que no aporta nada.

---

## PARTE 5 — OBSERVABILIDAD Y DEBUGGING

### 5.1 Métricas a monitorizar en tiempo real
| Métrica | Herramienta | Umbral de alerta |
|---------|------------|-----------------|
| Conexiones WebSocket activas | | |
| Tasa de mensajes por segundo | | |
| Latencia mensaje → recepción | | |
| Tasa de reconexiones | | |
| Memoria por conexión | | |

### 5.2 Debugging en el navegador
Cómo usar las DevTools para inspeccionar WebSockets y SSE: dónde ver los frames, filtrar por tipo de mensaje y medir el timing.

---

## PARTE 6 — CHECKLIST DE PRODUCCIÓN

Antes de desplegar la funcionalidad en tiempo real, verifica:

**Seguridad**
- [ ] Autenticación obligatoria antes de establecer la conexión
- [ ] Validación de mensajes del cliente en el servidor (nunca confiar en el cliente)
- [ ] Rate limiting por usuario para evitar floods
- [ ] Uso de wss:// (WebSocket seguro) en producción

**Escalado**
- [ ] Pub/sub configurado si hay más de un servidor
- [ ] Límite máximo de conexiones por servidor definido y monitorizado
- [ ] Estrategia de reconexión implementada en el cliente

**Resiliencia**
- [ ] Heartbeat / ping-pong configurado para detectar conexiones zombie
- [ ] Timeout de conexión inactiva definido
- [ ] Cola de mensajes perdidos durante desconexión temporal

---

**Formato de respuesta**: incluye código funcional en el lenguaje de mi stack. Usa tablas comparativas. Señala explícitamente los errores más comunes en producción y cómo evitarlos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 60,
                'use_case'         => 'Elegir entre WebSockets, SSE y polling para un caso de uso específico e implementarlo correctamente en producción',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            // 3 — Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Onboarding de apps móviles',
                'description'      => 'Las primeras 3-5 pantallas que determinan si el usuario se queda o desinstala: patrones, copy y métricas para un onboarding que activa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como diseñador de producto especializado en móvil con experiencia en onboarding de aplicaciones iOS y Android. Necesito diseñar o rediseñar el flujo de onboarding de mi app para aumentar la activación y reducir el churn en los primeros 7 días.

**MI APP**
- Nombre de la app: [nombre]
- Categoría: [productividad / fitness / finanzas / social / educación / e-commerce / otra]
- Plataformas: [iOS / Android / ambas]
- Acción de activación clave (el momento AHA): [la acción concreta que convierte a un visitante en usuario activo]
- Principal abandono observado: [¿en qué pantalla o momento pierde más usuarios?]

---

## PARTE 1 — FUNDAMENTOS DEL ONBOARDING EFECTIVO

### 1.1 Los 3 tipos de onboarding y cuándo usar cada uno

| Tipo | Descripción | Mejor para | Riesgo principal |
|------|-------------|-----------|-----------------|
| Benefits-oriented | Muestra qué puede hacer la app (value prop) | Apps con UX compleja | Demasiado largo, el usuario no llega al producto |
| Function-oriented | Explica cómo usar funciones clave | Apps con mecánicas únicas | Instrucciones sin contexto de valor |
| Progressive | Enseña mientras el usuario usa la app | Apps con UX intuitiva | El usuario no descubre funciones avanzadas |

### 1.2 El principio fundamental: llegar al momento AHA lo antes posible
Explica la curva de valor-tiempo y por qué cada pantalla de onboarding debe justificarse por lo que contribuye a alcanzar el momento AHA más rápido.

---

## PARTE 2 — ANATOMÍA DE CADA PANTALLA

### 2.1 Pantalla 1 — Propuesta de valor principal
Esta pantalla define la primera impresión. Debe responder: ¿qué hace esta app por mí?

Elementos obligatorios:
- Headline: promesa concreta, no genérica (máximo 6-8 palabras)
- Subheadline: amplía la promesa con el beneficio principal (máximo 15-20 palabras)
- Visual: ilustración o screenshot real que refuerza la promesa (no foto de stock)
- CTA: botón de acción primaria (texto del botón: verbo de acción, no "Siguiente")
- Enlace de acceso: "Ya tengo cuenta" discreto pero visible

Proporciona 3 versiones de headline y subheadline para mi app.

### 2.2 Pantallas de beneficios (si aplican)
Si el onboarding tiene 3-4 pantallas de benefits, cada una debe:
- Enfocarse en UN solo beneficio
- Usar el patrón: titula el beneficio + explica cómo lo conseguirás + visual que lo demuestra
- Ser deslizable (no obligar a leer antes de avanzar)
- Incluir indicador de progreso (puntos) para gestionar las expectativas

### 2.3 Pantalla de permisos
El mayor error es pedir permisos sin contexto. Diseña el "permission priming":
- Mostrar una pantalla interna ANTES del diálogo nativo del sistema
- En esa pantalla: explicar POR QUÉ necesitas el permiso + QUÉ consigue el usuario al concederlo
- Botón: "[Conceder permiso para...]" — cuando el usuario hace clic, ya has ganado la microdecisión

Aplica este patrón a los permisos más frecuentes: notificaciones, localización, cámara, contactos.

### 2.4 Pantalla de registro / inicio de sesión
- Prioridad de opciones: SSO social (Apple, Google) primero, email después
- Friction audit: cuántos campos pides y por qué cada uno es imprescindible ahora
- Progressive profiling: qué información puedes recoger más tarde (no en el registro)
- Estrategia de contraseña: ¿magic link vs. contraseña? Impacto en conversión

### 2.5 Pantalla de personalización (si aplica)
Si pides información para personalizar la experiencia, sigue estas reglas:
- Máximo 3 preguntas en el onboarding
- Mostrar inmediatamente cómo influye la respuesta en la experiencia
- Opción "saltar" siempre disponible
- Formato visual: chips o tarjetas seleccionables en lugar de dropdowns

---

## PARTE 3 — COPY PARA CADA PANTALLA

Genera el copy completo para un flujo de 4 pantallas adaptado a mi app:

**Pantalla 1**
- Headline: ...
- Subheadline: ...
- Botón CTA: ...

**Pantalla 2**
- Título del beneficio: ...
- Descripción: ...

**Pantalla 3**
- Título del beneficio: ...
- Descripción: ...

**Pantalla de registro**
- Headline: ...
- Microcopy de privacidad / términos: ...
- Placeholder de campos: ...
- Botón principal: ...

---

## PARTE 4 — PATRONES DE ONBOARDING A EVITAR

Explica por qué cada uno de estos patrones falla y qué usar en su lugar:

1. **El tutorial de 8 pantallas con flechas**: el usuario no recuerda nada al llegar al producto real
2. **El formulario de registro con 6 campos**: cada campo reduce la conversión un 10-15%
3. **El permiso de notificaciones en la pantalla 1**: aún no has generado suficiente valor para que el usuario diga sí
4. **El "skip" diminuto e invisible**: crea fricciones, el usuario se frustra y desinstala
5. **El onboarding sin personalización percibida**: el usuario siente que usa una app genérica

---

## PARTE 5 — MÉTRICAS Y TEST A/B

### 5.1 Embudo de onboarding

| Paso | Métrica | Benchmark | Señal de que hay que optimizar |
|------|---------|-----------|-------------------------------|
| Impresiones de la pantalla 1 | Vistas | 100% base | — |
| Completaron onboarding | % de usuarios | 60-80% | <50% → revisar longitud o valor percibido |
| Registro completado | % | 40-60% | <30% → revisar fricción del formulario |
| Completaron acción AHA (día 0) | % | 20-40% | <15% → revisar claridad del siguiente paso |
| Retención D1 | % | 25-40% | <20% → revisar la promesa del onboarding |
| Retención D7 | % | 10-25% | <10% → onboarding no alineado con el producto real |

### 5.2 Prioridad de tests A/B
Ordena los elementos a testear de mayor a menor impacto esperado:
1. Longitud del onboarding (3 vs. 5 pantallas)
2. Tipo de CTA en pantalla 1
3. Posición del permiso de notificaciones
4. Orden de registro (antes vs. después del onboarding)
5. Pantalla de personalización (sí vs. no)

---

**Formato de respuesta**: incluye el copy completo listo para usar. Describe cada pantalla con suficiente detalle para que un diseñador pueda crear el wireframe sin tener que hacer preguntas adicionales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Diseñar o rediseñar el onboarding de una app móvil para aumentar la activación y la retención en los primeros 7 días',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            // 4 — Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Elevator pitch y propuesta de valor verbal',
                'description'      => 'Cómo construir el pitch de 60 segundos que abre puertas: estructura, ensayo y variantes para cada audiencia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como coach de ventas y comunicación ejecutiva especializado en formación de pitches para fundadores, comerciales y profesionales independientes. Necesito construir y pulir mi pitch de presentación personal y de empresa para diferentes contextos.

**MI CONTEXTO**
- Mi nombre y cargo: [nombre y rol]
- Mi empresa o proyecto: [nombre]
- Qué hace en una frase: [descripción breve]
- A quién va dirigido habitualmente el pitch: [inversores / clientes potenciales / networking / reclutadores / otro]
- Contexto habitual donde lo uso: [evento de networking / llamada en frío / feria / reunión / LinkedIn]
- Mayor dificultad actual con el pitch: [demasiado largo / no capta atención / no genera preguntas / suena a guion / no sé adaptarlo]

---

## MÓDULO 1 — ANATOMÍA DEL PITCH PERFECTO DE 60 SEGUNDOS

### 1.1 La estructura en 5 elementos

| Elemento | Duración | Función | Error frecuente |
|----------|----------|---------|----------------|
| Hook (gancho) | 5-10 seg | Capturar la atención de inmediato | Empezar con "Somos una empresa que..." |
| Problema | 10-15 seg | Crear resonancia con el dolor del oyente | Describir el problema de forma técnica, no humana |
| Solución | 10-15 seg | Mostrar cómo lo resuelves de forma diferente | Enumerar funcionalidades en lugar de beneficios |
| Prueba / credibilidad | 10 seg | Añadir confianza con un dato o cliente real | Inventarse el dato o no tener ninguno todavía |
| Llamada a la acción | 5-10 seg | Definir el siguiente paso concreto | Acabar sin pedir nada o pedir demasiado |

### 1.2 La regla del "¿y qué?" (So what?)
Después de cada frase de tu pitch actual, pregúntate: ¿y qué le importa eso a mi interlocutor? Si no puedes contestar de inmediato, esa frase sobra o necesita reencuadrarse en términos de beneficio para la otra persona.

---

## MÓDULO 2 — CONSTRUCCIÓN DEL PITCH BASE

A partir de mi contexto, escribe el borrador del pitch base de 60 segundos (aproximadamente 120-140 palabras en español) siguiendo la estructura de los 5 elementos. Luego analiza cada frase indicando qué función cumple y si podría mejorarse.

**Pitch base (primer borrador):**
> [escribir aquí el draft]

**Análisis frase a frase:**
| Frase | Elemento que cubre | Fortaleza | Mejora propuesta |
|-------|-------------------|-----------|-----------------|

---

## MÓDULO 3 — VARIANTES PARA CADA CONTEXTO

El mismo pitch no funciona en todos los contextos. Adapta el pitch base a:

### Variante 1: Evento de networking (60 segundos, tono informal)
Contexto: charla de pie con un desconocido. El objetivo es que quiera saber más, no cerrar nada.

### Variante 2: Primera llamada de ventas (90 segundos, tono consultivo)
Contexto: el prospecto sabe de qué va la llamada. El objetivo es generar confianza y pasar a preguntas.

### Variante 3: Respuesta a "¿A qué te dedicas?" en una cena o evento social (20-30 segundos)
Contexto: la persona no es un comprador potencial directo, pero podría referirte. Tono natural, nada comercial.

### Variante 4: Mensaje de LinkedIn (versión escrita, 3 frases)
Contexto: cold outreach. El objetivo es conseguir una respuesta, no vender. Máximo 50 palabras.

---

## MÓDULO 4 — LAS OBJECIONES QUE GENERA EL PITCH Y CÓMO GESTIONARLAS

Después de un buen pitch, el interlocutor puede responder de estas formas:

| Respuesta del interlocutor | Qué significa realmente | Respuesta recomendada |
|---------------------------|------------------------|----------------------|
| "Ah, interesante, ¿y cómo funciona exactamente?" | Curiosidad genuina | |
| "¿Y en qué os diferenciáis de [competidor]?" | Está comparando opciones | |
| "No creo que sea para nosotros ahora mismo" | Timing o no es el decision maker | |
| "Mándame información y ya te digo" | Cortesía para salir de la conversación | |
| Silencio incómodo | El pitch no enganchó | |

---

## MÓDULO 5 — TÉCNICA DE PRÁCTICA (LOS 10 MINUTOS DIARIOS)

El pitch se mejora con la repetición deliberada, no solo con el estudio. Diseña un plan de práctica de 2 semanas:

**Semana 1: Dominar el pitch base**
- Día 1-2: leer en voz alta 5 veces cronometrando
- Día 3-4: grabarse en vídeo y revisar lenguaje corporal, cadencia y pausas
- Día 5-7: practicar con alguien de confianza y pedir feedback sobre: claridad del problema, credibilidad de la solución, si genera preguntas

**Semana 2: Adaptar a contextos reales**
- Usar la variante de networking en al menos 3 conversaciones reales
- Registrar las preguntas que genera (feedback del mercado)
- Iterar el pitch en función de las preguntas y objeciones recibidas

**Señales de que el pitch funciona:**
- El interlocutor hace preguntas sin que tú las induzcas
- Repite de vuelta alguna frase tuya como si fuera suya
- Pide una reunión o te presenta a alguien

---

**Formato de respuesta**: escribe los pitches completos y listos para leer en voz alta. Usa negritas para las frases gancho. Señala con [ADAPTAR] los elementos que deben personalizarse con información real.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 35,
                'use_case'         => 'Construir y pulir el pitch de 60 segundos con variantes para cada contexto y gestión de objeciones',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 5 — Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Analítica de producto con herramientas modernas',
                'description'      => 'Instrumenta tu producto con PostHog, Mixpanel o Amplitude y diseña el sistema de métricas que te permite tomar decisiones con datos reales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como Product Manager senior con experiencia en instrumentación de productos digitales y análisis de datos de comportamiento de usuarios. Necesito diseñar e implementar el sistema de analítica de mi producto para tomar mejores decisiones.

**MI PRODUCTO**
- Tipo: [web app / app móvil / SaaS / marketplace / e-commerce]
- Stack tecnológico: [React / Vue / iOS nativo / Android / Next.js / otro]
- Herramienta de analítica actual (si la hay): [GA4 / Mixpanel / Amplitude / PostHog / ninguna]
- Herramienta que quiero implementar o mejorar: [PostHog / Mixpanel / Amplitude / no lo he decidido]
- Tamaño del producto: [usuarios activos mensuales aproximados]
- Principal pregunta que quiero responder con datos: [ej: por qué los usuarios abandonan en el paso 3 del checkout]

---

## PARTE 1 — COMPARATIVA DE HERRAMIENTAS DE PRODUCT ANALYTICS

### 1.1 Tabla comparativa

| Criterio | PostHog | Mixpanel | Amplitude |
|----------|---------|----------|-----------|
| Modelo de precios | Open source + Cloud | Basado en eventos | Basado en usuarios/eventos |
| Self-hosting disponible | Sí | No | No |
| Session recording / replay | Sí (nativo) | No (add-on tercero) | No |
| Feature flags integrados | Sí | No | No |
| SQL directo a datos | Sí (ClickHouse) | Limitado | Limitado |
| Funnels y retención | Sí | Muy potente | Muy potente |
| Curva de aprendizaje | Media | Media-alta | Alta |
| Mejor para | Startups que quieren privacidad de datos y todo en uno | Growth teams B2C con mucho volumen | Grandes equipos de producto B2B |

### 1.2 Recomendación para mi caso
Con base en mi contexto, recomienda la herramienta más adecuada con argumentación.

---

## PARTE 2 — PLAN DE INSTRUMENTACIÓN (TAXONOMY DE EVENTOS)

### 2.1 Principios de una buena taxonomía de eventos

| Principio | Descripción | Ejemplo correcto | Ejemplo incorrecto |
|-----------|-------------|-----------------|-------------------|
| Consistencia | Mismo formato en todos los eventos | `user_signed_up` | `userSignedUp` / `User Signed Up` / `signup` |
| Especificidad | El nombre describe la acción exacta | `checkout_step_3_completed` | `button_clicked` |
| Propiedad sobre deducción | Enviar datos crudos, no calcular en cliente | Enviar `price: 29.99` y `currency: EUR` | Enviar `total_with_tax: 35.29` |
| Volumen controlado | Solo eventos que tienen una pregunta de negocio asociada | Evento por CTA importante | Cada hover y cada scroll |

### 2.2 Taxonomía recomendada para mi producto

Diseña el mapa de eventos que debo instrumentar, organizado por área funcional:

**Autenticación y registro**
| Evento | Propiedades | Pregunta que responde |
|--------|------------|----------------------|

**Onboarding**
| Evento | Propiedades | Pregunta que responde |
|--------|------------|----------------------|

**Funcionalidad core**
| Evento | Propiedades | Pregunta que responde |
|--------|------------|----------------------|

**Monetización**
| Evento | Propiedades | Pregunta que responde |
|--------|------------|----------------------|

**Retención y engagement**
| Evento | Propiedades | Pregunta que responde |
|--------|------------|----------------------|

---

## PARTE 3 — LAS MÉTRICAS CLAVE (NORTH STAR Y ÁRBOL DE MÉTRICAS)

### 3.1 North Star Metric
Explica el concepto y propón 3 opciones de North Star Metric para mi tipo de producto, con pros y contras de cada una.

### 3.2 Árbol de métricas (Input / Output)
Construye el árbol de métricas con este formato:

**North Star: [nombre]**

├── **Palanca 1**: [nombre] → medida por: [evento o cálculo]
│   ├── Input 1.1: [acción que el equipo puede influir]
│   └── Input 1.2: ...
├── **Palanca 2**: ...
└── **Palanca 3**: ...

### 3.3 Métricas de guarda (guardrail metrics)
Define 2-3 métricas que no pueden empeorar mientras mejoras la North Star (ej: si aumentas la frecuencia de emails para mejorar retención, el unsubscribe rate es una guardrail).

---

## PARTE 4 — DASHBOARDS Y CADENCIA DE REVISIÓN

### 4.1 Dashboard diario (operacional)
Qué métricas revisar cada día para detectar anomalías:

| Métrica | Visualización | Señal de alerta |
|---------|--------------|-----------------|
| Nuevos registros | Línea vs. semana anterior | Caída >20% |
| Eventos de error crítico | Count | >0 en 1h |
| Tiempo de carga p95 | Línea | >3 segundos |

### 4.2 Dashboard semanal (product review)
Métricas para la reunión semanal de producto:

| Métrica | Granularidad | Comparativa |
|---------|-------------|------------|
| DAU / WAU / MAU | Diaria | vs. 4 semanas anteriores |
| Funnel de activación | Por cohorte | vs. cohorte anterior |
| Retención D1 / D7 / D30 | Por cohorte | vs. cohorte anterior |

---

## PARTE 5 — PRIMEROS 30 DÍAS DE IMPLEMENTACIÓN

**Semana 1**: instalar el SDK, identificar usuarios autenticados, capturar los 5 eventos más críticos
**Semana 2**: completar la taxonomía de eventos de onboarding y funcionalidad core
**Semana 3**: construir los dashboards diario y semanal, configurar alertas
**Semana 4**: primera revisión de los datos, identificar los mayores gaps o sorpresas

---

**Formato de respuesta**: incluye ejemplos de código de instrumentación en JavaScript/TypeScript para los eventos más importantes. Usa tablas para la taxonomía. Recomienda la herramienta antes de asumir que he elegido una.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'         => 'Diseñar el sistema de analítica de producto con taxonomía de eventos, North Star metric y dashboards de seguimiento',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            // 6 — RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Política de trabajo flexible y remoto',
                'description'      => 'Diseña la política de flexibilidad laboral que equilibra las necesidades de la empresa y de los empleados, con estructura legal y operativa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como directora de Personas con experiencia en diseño de políticas de trabajo flexible y remoto para empresas de 20 a 500 empleados. Necesito diseñar o actualizar la política de trabajo flexible de mi empresa.

**MI EMPRESA**
- Sector: [tecnología / servicios / industria / educación / salud / otro]
- Tamaño: [número de empleados]
- Roles que existen: [ejemplos: developers, comerciales, operaciones, atención al cliente, dirección]
- Modelo actual: [100% presencial / híbrido informal / híbrido con normas / 100% remoto]
- País/es donde opera: [España / México / Colombia / otro]
- Principales preocupaciones de la dirección: [cultura / coordinación / productividad / retención / costes de oficina]

---

## MÓDULO 1 — MARCO CONCEPTUAL: LOS 3 MODELOS DE TRABAJO

### 1.1 Comparativa de modelos

| Modelo | Descripción | Ventajas | Riesgos | Mejor para |
|--------|-------------|---------|--------|-----------|
| 100% presencial | Todos en oficina todos los días | Colaboración espontánea, cultura fuerte | Talent pool limitado, costes inmuebles, posible fuga de talento | Roles que requieren presencia física, etapas iniciales de empresa |
| Híbrido estructurado | X días en oficina fijos por semana/mes | Equilibrio colaboración-flexibilidad | Complejidad logística, desigualdad entre roles | La mayoría de empresas de conocimiento |
| Híbrido flexible | Presencia según necesidad, no por calendario | Máxima autonomía | Difícil coordinar, riesgo de "los que van" vs. "los que no van" | Equipos maduros con alta confianza |
| Full remote | Sin oficina física fija | Talent pool global, costes bajos | Cultura, onboarding, colaboración asíncrona | Empresas tech nativas o distribuidas |

### 1.2 Recomendación para mi empresa
Con base en mi contexto, ¿qué modelo encaja mejor y por qué? ¿Puede haber modelos diferentes por departamento?

---

## MÓDULO 2 — ESTRUCTURA DE LA POLÍTICA

Redacta la plantilla completa de la política con las siguientes secciones:

**Sección 1 — Propósito y principios**
Explica el por qué de la política: qué valores de empresa refleja y qué equilibrio busca.

**Sección 2 — Ámbito de aplicación**
A quién aplica la política, con qué excepciones y desde qué fecha.

**Sección 3 — Modalidades de trabajo disponibles**
Define con precisión las opciones disponibles:

| Modalidad | Descripción | Elegibilidad | Proceso de solicitud | Revisión |
|-----------|-------------|-------------|---------------------|---------|
| Teletrabajo parcial | | | | |
| Teletrabajo total | | | | |
| Horario flexible | | | | |
| Semana comprimida (4 días) | | | | |
| Trabajo desde el extranjero (workation) | | | | |

**Sección 4 — Días de presencia mínima (si aplica)**
Especificar cuántos días en oficina, si son fijos o flexibles, si se registran y cómo se gestiona el incumplimiento.

**Sección 5 — Espacio de trabajo remoto**
Qué responsabilidades tiene la empresa (equipamiento, subsidio de internet) y qué responsabilidades tiene el empleado (conexión adecuada, espacio adecuado, disponibilidad).

**Sección 6 — Disponibilidad y comunicación**
Definición de horario "core" de disponibilidad, tiempos de respuesta esperados por canal, protocolo para urgencias fuera de horario.

**Sección 7 — Evaluación del desempeño**
Cómo se evalúa a los trabajadores en remoto: basado en resultados, OKRs o KPIs, no en presencia ni en horas visibles.

**Sección 8 — Revisión de la política**
Con qué frecuencia se revisa, quién la revisa y cómo se recoge feedback de los empleados.

---

## MÓDULO 3 — CONSIDERACIONES LEGALES (ESPAÑA)

Para empresas en España, resume los requisitos legales del trabajo a distancia según la Ley 10/2021:

| Requisito | Contenido | Obligatorio |
|-----------|----------|------------|
| Porcentaje mínimo para considerarse teletrabajo | >30% de la jornada en 3 meses | Sí |
| Acuerdo de teletrabajo por escrito | Debe formalizarse en documento firmado | Sí |
| Registro en la empresa | Copia al comité de empresa o delegados de personal | Sí |
| Compensación de gastos | Empresa debe compensar los costes del teletrabajo | Sí |
| Derecho a la desconexión digital | Regulación de comunicaciones fuera de horario | Sí |
| Reversibilidad | El empleado puede solicitar volver a presencial | Sí |

---

## MÓDULO 4 — PLAN DE COMUNICACIÓN E IMPLEMENTACIÓN

Define cómo comunicar y implementar la política:

**Fase 1 — Consulta interna (2-4 semanas antes)**
- Compartir el borrador con el comité de empresa o representantes de empleados
- Sesiones de feedback por equipo o departamento
- Ajustes basados en el feedback recibido

**Fase 2 — Comunicación oficial**
- Email de dirección explicando el racional y los beneficios
- FAQ anticipando las preguntas más frecuentes
- Sesión de preguntas y respuestas en all-hands

**Fase 3 — Implementación**
- Firma de acuerdos individuales de teletrabajo
- Formación a managers sobre gestión de equipos en remoto
- Activación de herramientas de soporte (VPN, equipamiento, gestión de gastos)

---

## MÓDULO 5 — MÉTRICAS PARA EVALUAR SI LA POLÍTICA FUNCIONA

| Métrica | Cómo medirla | Frecuencia | Umbral de revisión |
|---------|-------------|-----------|-------------------|
| Satisfacción con el modelo de trabajo (eNPS) | Encuesta trimestral | Trimestral | <30 puntos |
| Retención de empleados | % bajas voluntarias | Mensual | >15% anualizado |
| Productividad por equipo | OKRs / output | Trimestral | Caída vs. trimestre anterior |
| Cumplimiento de días de presencia | Registro de asistencia | Mensual | <80% del objetivo |
| Incidencias de desconexión digital | Reportadas a RRHH | Mensual | >0 por mes |

---

**Formato de respuesta**: escribe la política en formato documento listo para compartir, con lenguaje claro y no legalista. Señala con [ADAPTAR] los elementos que deben ajustarse al contexto específico. Añade una sección de FAQ al final de la política.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Redactar la política de trabajo flexible y remoto con estructura legal, operativa y plan de implementación',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            // 7 — Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de escenarios financieros',
                'description'      => 'Modela los escenarios optimista, base y pesimista para tomar decisiones de negocio bajo incertidumbre con datos y criterio financiero.',
                'prompt_content'   => <<<'PROMPT'
Actúa como director financiero con experiencia en modelización financiera y planificación estratégica para pymes y startups. Necesito construir un análisis de escenarios para tomar una decisión clave de negocio bajo incertidumbre.

**MI CONTEXTO**
- Decisión o proyecto a analizar: [ej: lanzar un nuevo producto / abrir una nueva sede / contratar 5 personas / invertir en una campaña de marketing / firmar un contrato de arrendamiento]
- Horizonte temporal del análisis: [6 meses / 1 año / 3 años]
- Principales variables inciertas: [ej: precio de venta, tasa de conversión, coste de adquisición, tipo de cambio, coste de materias primas]
- Información financiera actual disponible: [ingresos, costes fijos, margen bruto, caja disponible — lo que tengas]

---

## MÓDULO 1 — FUNDAMENTOS DEL ANÁLISIS DE ESCENARIOS

### 1.1 Diferencia entre análisis de escenarios, análisis de sensibilidad y simulación Monte Carlo

| Técnica | Qué hace | Cuándo usarla | Complejidad |
|---------|----------|--------------|------------|
| Análisis de escenarios | Define 3 futuros posibles coherentes entre sí | Decisiones estratégicas con pocas variables clave | Baja-media |
| Análisis de sensibilidad | Cambia UNA variable a la vez, mantiene las demás fijas | Identificar las variables más críticas | Baja |
| Simulación Monte Carlo | Genera miles de combinaciones aleatorias de variables | Decisiones con muchas variables interdependientes | Alta |

Para la mayoría de decisiones de pyme: empieza con análisis de sensibilidad para identificar los drivers clave, luego construye 3 escenarios coherentes.

### 1.2 Principio de escenarios coherentes
Un escenario no es "todo va bien" vs. "todo va mal". Cada escenario debe contar una historia interna coherente: ¿qué contexto externo e interno llevaría a ese resultado? Las variables deben ser consistentes entre sí.

---

## MÓDULO 2 — IDENTIFICACIÓN DE LAS VARIABLES CLAVE

### 2.1 Análisis de sensibilidad previo
Para cada variable incierta principal, calcula el impacto en el resultado financiero si cambia un 10%:

| Variable | Valor base | -10% | +10% | Impacto en beneficio/flujo de caja | Ranking de criticidad |
|----------|-----------|------|------|-----------------------------------|----------------------|
| [Variable 1] | | | | | |
| [Variable 2] | | | | | |
| [Variable 3] | | | | | |

Las 2-3 variables con mayor impacto son las que deben variar entre escenarios.

### 2.2 Supuestos del caso base
Define el caso base con todos los supuestos explícitos:

| Supuesto | Valor | Fuente o justificación |
|----------|-------|----------------------|
| | | |

---

## MÓDULO 3 — LOS TRES ESCENARIOS

Para cada escenario, describe: el contexto narrativo que lo genera, los valores de las variables clave, el resultado financiero principal (EBITDA, flujo de caja, ROI, punto de equilibrio) y el mensaje para la toma de decisiones.

### Escenario Base (probabilidad estimada: 50-60%)
**Contexto**: las condiciones del mercado evolucionan según lo esperado, sin sorpresas significativas.

| Variable clave | Valor en escenario base |
|----------------|------------------------|

**Resultado financiero:**
- Ingresos: [cifra]
- Costes: [cifra]
- EBITDA / Flujo de caja: [cifra]
- Punto de equilibrio: [fecha o unidades]
- ROI: [%]
- Payback: [meses]

### Escenario Optimista (probabilidad estimada: 20-25%)
**Contexto**: qué tendría que ocurrir para que las variables fueran favorables. Debe ser ambicioso pero plausible.

[misma estructura]

### Escenario Pesimista (probabilidad estimada: 20-25%)
**Contexto**: qué podría salir mal y por qué. Este escenario es el que define el riesgo máximo aceptable.

[misma estructura]

---

## MÓDULO 4 — TABLA DE RESUMEN Y DECISIÓN

| Métrica | Pesimista | Base | Optimista |
|---------|----------|------|----------|
| Ingresos | | | |
| Costes totales | | | |
| EBITDA | | | |
| Flujo de caja acumulado (fin del período) | | | |
| Punto de equilibrio | | | |
| ROI | | | |
| ¿Sobrevive la empresa? | | | |

**Valor esperado ponderado por probabilidad:**
= 0.25 × Pesimista + 0.55 × Base + 0.20 × Optimista = [resultado]

---

## MÓDULO 5 — UMBRALES DE DECISIÓN Y SEÑALES DE ALERTA

### 5.1 Criterios de go / no-go
Define los criterios mínimos que debe cumplir el escenario pesimista para aceptar el riesgo:

- El flujo de caja acumulado no cae por debajo de [X euros / meses de runway]
- El ROI en escenario base supera el [X%] en [X meses]
- La decisión puede revertirse si en [X meses] no se alcanzan [Y métricas]

### 5.2 Indicadores de alerta temprana
Define los KPIs que, si se observan en los primeros 30-60 días, indican que el escenario real se parece más al pesimista:

| Indicador | Valor esperado (base) | Valor de alerta | Acción si se activa |
|-----------|----------------------|----------------|---------------------|
| | | | |

### 5.3 Plan de contingencia para el escenario pesimista
Si el escenario pesimista se materializa, ¿cuáles son las 3 palancas de respuesta?
1. [Palanca de reducción de costes]
2. [Palanca de aceleración de ingresos]
3. [Palanca de financiación de emergencia]

---

**Formato de respuesta**: usa tablas para todos los datos financieros. Escribe los valores numéricos con mis datos reales cuando los tenga, y con [INTRODUCIR] cuando falten. Al final, dame una recomendación clara: ¿proceder, proceder con condiciones o no proceder? Argumentada en los números, no en la intuición.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'         => 'Construir el modelo de los 3 escenarios financieros para una decisión de negocio con umbrales de go/no-go',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            // 8 — Legal
            [
                'profession_id'    => 8,
                'title'            => 'Cláusulas de limitación de responsabilidad',
                'description'      => 'Cómo protegerte de reclamaciones desproporcionadas en tus contratos con cláusulas de limitación efectivas y legalmente válidas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como abogado mercantilista especializado en contratación B2B con experiencia en redacción de contratos de servicios, SaaS, consultoría y distribución. Necesito entender cómo proteger mi empresa de reclamaciones desproporcionadas mediante cláusulas de limitación de responsabilidad.

**MI CONTEXTO**
- Tipo de empresa: [agencia / consultora / SaaS / desarrollador freelance / proveedor de servicios]
- País donde opera: [España / México / otro]
- Tipo de contratos habituales: [contratos de servicios / SaaS / consultoría / distribución]
- Tipo de clientes: [empresas (B2B) / consumidores (B2C) / ambos]
- Preocupación concreta: [reclamaciones por daños indirectos / incumplimiento de plazos / fallos técnicos / pérdida de datos / asesoramiento incorrecto]

---

## PARTE 1 — TIPOS DE RESPONSABILIDAD QUE PUEDES LIMITAR

### 1.1 Taxonomía de daños

| Tipo de daño | Descripción | Ejemplo concreto | ¿Limitable en España? |
|-------------|-------------|-----------------|----------------------|
| Daños directos | Pérdida directamente causada por el incumplimiento | El proveedor no entrega el software, el cliente pierde la inversión | Sí, con condiciones |
| Daños indirectos o consecuenciales | Daños que derivan del daño directo | Pérdida de clientes propios por el fallo del proveedor | Sí, habitualmente |
| Lucro cesante | Beneficio que el cliente hubiera obtenido | El fallo de la plataforma evita ventas durante X horas | Sí, con condiciones |
| Daño emergente | Gastos adicionales incurridos para paliar el problema | Contratar a otro proveedor de urgencia | Más difícil de limitar |
| Daños punitivos | Sanción adicional más allá de la compensación | No existe en Derecho español | No aplica en España |

### 1.2 Qué responsabilidad NUNCA puedes excluir en España (art. 1102 CC)
La responsabilidad por dolo (engaño intencionado) no puede ser excluida ni limitada. Explica qué implica esto en la práctica para la redacción de contratos.

---

## PARTE 2 — LAS CLÁUSULAS DE LIMITACIÓN MÁS USADAS

### 2.1 Limitación por cuantía máxima

Esta es la cláusula más común: fijar un importe máximo de indemnización posible.

**Plantilla de cláusula:**
> "La responsabilidad total acumulada de [PROVEEDOR] frente a [CLIENTE] por cualquier concepto derivado del presente contrato, ya sea por incumplimiento contractual, negligencia o cualquier otra causa, no podrá exceder en ningún caso de [la cantidad equivalente a los honorarios o fees pagados por el CLIENTE durante los últimos [3/6/12] meses anteriores al hecho generador de la responsabilidad]."

Explica cómo fijar el importe correcto: demasiado bajo puede no ser válido; demasiado alto puede anular el propósito.

### 2.2 Exclusión de daños indirectos

**Plantilla de cláusula:**
> "En ningún caso [PROVEEDOR] será responsable por daños indirectos, consecuenciales, incidentales, especiales o punitivos, incluyendo sin limitación la pérdida de beneficios, la pérdida de datos, la interrupción del negocio o el daño reputacional del CLIENTE, aunque [PROVEEDOR] hubiera sido advertido de la posibilidad de tales daños."

Requisito de validez: esta cláusula debe ser aceptada expresamente por el cliente (no vale solo el genérico "acepto los términos").

### 2.3 Limitación por tipo de daño

**Plantilla de cláusula:**
> "[PROVEEDOR] no será responsable por: (i) pérdida de datos del CLIENTE si este no ha realizado las copias de seguridad recomendadas en la documentación del servicio; (ii) incumplimientos causados por terceros proveedores de infraestructura (AWS, Google Cloud, operadores de telecomunicaciones); (iii) daños derivados del uso indebido de la plataforma por parte del CLIENTE o sus usuarios."

### 2.4 Limitación temporal para reclamar

**Plantilla de cláusula:**
> "Cualquier reclamación del CLIENTE derivada del presente contrato deberá formularse en el plazo máximo de [12/24] meses desde el conocimiento del hecho generador, transcurrido el cual prescribirá cualquier acción al respecto."

---

## PARTE 3 — VALIDEZ DE LAS CLÁUSULAS EN CONTRATOS B2B VS. B2C

Esta distinción es crítica. El régimen es radicalmente diferente:

| Aspecto | B2B (entre empresas) | B2C (con consumidores) |
|---------|---------------------|----------------------|
| Ley aplicable | Código Civil y Código de Comercio | TRLGDCU (Texto Refundido Ley General para la Defensa de los Consumidores) |
| Libertad de pacto | Alta: casi cualquier limitación es válida si se negocia | Muy baja: muchas limitaciones son nulas de pleno derecho |
| Cláusulas abusivas | Solo si hay dolo o abuso de posición dominante | Amplio catálogo de cláusulas abusivas prohibidas |
| Requisito de transparencia | Recomendable pero menos exigente | Muy alto: letra clara, posición prominente, aceptación expresa |

---

## PARTE 4 — CÓMO HACER QUE LAS CLÁUSULAS SEAN VÁLIDAS

Una cláusula bien redactada puede ser inválida si no se incorpora correctamente al contrato. Requisitos de validez:

1. **Negociación individualizada vs. condiciones generales**: las CGC están sujetas a mayor control de contenido
2. **Aceptación específica**: las cláusulas limitativas deben ser aceptadas expresamente, no solo el contrato general
3. **Claridad y legibilidad**: fuente legible, lenguaje comprensible, posición destacada
4. **No sorpresivas**: el cliente no puede ser sorprendido por una limitación que no podía esperar razonablemente
5. **Registro**: en contratos importantes, el proceso de negociación debe quedar documentado

---

## PARTE 5 — CLÁUSULAS COMPLEMENTARIAS QUE REFUERZAN LA PROTECCIÓN

### 5.1 Cláusula de fuerza mayor
Qué debe incluir para ser efectiva: lista ejemplificativa de eventos, obligación de notificación, suspensión de obligaciones, no extinción automática del contrato.

### 5.2 Cláusula de mitigación de daños
Obliga al cliente a minimizar activamente los daños cuando ocurre un incidente, evitando que deje que el daño se acumule para reclamar más.

### 5.3 Cláusula de SLA con remedios predeterminados
En contratos de servicios tecnológicos: cuando el SLA no se cumple, el único remedio disponible son créditos de servicio (no indemnización por daños). Esto pre-define y limita la consecuencia económica de los fallos de servicio.

---

**AVISO LEGAL**: Este prompt genera información jurídica general con fines educativos. Las cláusulas proporcionadas son plantillas de referencia que deben ser revisadas y adaptadas por un abogado con conocimiento de tu situación concreta y del ordenamiento jurídico aplicable. No constituye asesoramiento legal profesional.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 50,
                'use_case'         => 'Entender, redactar e implementar correctamente cláusulas de limitación de responsabilidad en contratos B2B',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            // 9 — Customer Support
            [
                'profession_id'    => 9,
                'title'            => 'Gestión del cliente VIP y enterprise',
                'description'      => 'El trato diferenciado para cuentas de alto valor que no puedes perder: protocolo de escalado, comunicación y éxito del cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como directora de Customer Success con experiencia en cuentas enterprise y programas VIP para empresas SaaS y de servicios. Necesito diseñar o mejorar el programa de gestión de clientes de alto valor de mi empresa.

**MI CONTEXTO**
- Tipo de empresa: [SaaS / servicios profesionales / e-commerce premium / otro]
- Definición actual de cliente VIP/enterprise: [ej: contratos >X€ anuales / top 10% por revenue / tiene un CSM dedicado]
- Número aproximado de clientes en esta categoría: [número]
- Herramienta de CRM/CS: [Salesforce / HubSpot / Gainsight / ChurnZero / Zendesk / otra]
- Principal problema actual con estas cuentas: [tiempo de respuesta / falta de protocolo de escalado / no detectamos el churn a tiempo / el cliente siente que no recibe trato diferenciado]

---

## MÓDULO 1 — DEFINICIÓN Y SEGMENTACIÓN DEL PROGRAMA VIP

### 1.1 Criterios de clasificación
Define los criterios objetivos para acceder al programa VIP. Usa una combinación de factores:

| Criterio | Peso | Umbral para VIP |
|----------|------|----------------|
| ARR o revenue anual | 40% | >X€ |
| Potencial de expansión | 20% | Whitespace identificado >Y€ |
| Influencia en el mercado (efecto halo) | 20% | Empresa reconocida / referenciable |
| Nivel de uso y adopción | 20% | >Z% de funcionalidades activadas |

Scoring: cliente VIP = puntuación ponderada >7/10

### 1.2 Niveles del programa (si aplica)

| Nivel | Nombre sugerido | Criterio | Beneficios exclusivos |
|-------|----------------|----------|----------------------|
| Tier 1 (Enterprise) | | | CSM dedicado, SLA prioritario, acceso a roadmap |
| Tier 2 (Premium) | | | CSM compartido, SLA mejorado, QBR trimestral |
| Tier 3 (Growth) | | | Soporte estándar mejorado, acceso a comunidad |

---

## MÓDULO 2 — PROTOCOLO DE ATENCIÓN DIFERENCIADA

### 2.1 SLAs exclusivos para clientes VIP

| Canal | SLA Estándar | SLA VIP Tier 1 | SLA VIP Tier 2 |
|-------|-------------|----------------|----------------|
| Email / ticket crítico | 4-8 horas | 1 hora | 2 horas |
| Email / ticket normal | 24 horas | 4 horas | 8 horas |
| Teléfono / canal urgente | No disponible | Sí, número directo | Sí, escalado rápido |
| Chat en vivo | Cola estándar | Cola prioritaria | Cola prioritaria |
| Tiempo de resolución P1 | 48-72 horas | 4 horas | 8 horas |

### 2.2 Canal de comunicación dedicado
Define el canal exclusivo para clientes VIP (Slack Connect, canal de WhatsApp, email directo del CSM) y las reglas de uso:
- Qué tipo de consultas van por el canal VIP vs. por el helpdesk estándar
- Horario de cobertura del canal directo
- Sustitución del CSM en caso de ausencia

### 2.3 Protocolo de escalado VIP
Cuando un cliente VIP eleva una queja, el proceso debe activarse de forma diferente al estándar:

**Nivel 1**: CSM resuelve en <1 hora o escala automáticamente
**Nivel 2 (Cliente en riesgo)**: Director de CS notificado, respuesta en <2 horas, plan de acción en 24 horas
**Nivel 3 (Riesgo de churn inminente)**: Escalado a dirección, reunión de crisis en <24 horas, oferta de retention definida

---

## MÓDULO 3 — PROGRAMA DE ÉXITO DEL CLIENTE (PROACTIVO)

### 3.1 El QBR (Quarterly Business Review)
El QBR no es una reunión de soporte: es una revisión estratégica. Estructura del QBR ideal:

| Sección | Duración | Quién habla | Contenido |
|---------|----------|------------|----------|
| Resultados del trimestre | 15 min | CSM | Métricas de uso, resultados obtenidos, comparativa vs. objetivos del cliente |
| Retos del cliente (escucha) | 20 min | Cliente | Qué está cambiando en su negocio, qué les preocupa |
| Propuesta de valor del próximo trimestre | 15 min | CSM + Producto | Nuevas funcionalidades, casos de uso sugeridos, plan de adopción |
| Oportunidades de expansión | 10 min | CSM + Ventas | Propuesta de upsell o cross-sell si el momento es adecuado |
| Próximos pasos | 10 min | Ambos | Acciones, responsables y fechas |

### 3.2 Cadencia de contacto proactivo

| Frecuencia | Tipo de contacto | Objetivo | Responsable |
|-----------|-----------------|---------|------------|
| Semanal | Check-in breve (2-3 min, asíncrono) | Detectar fricciones antes de que escalen | CSM |
| Mensual | Revisión de métricas de uso | Asegurar adopción y ROI percibido | CSM |
| Trimestral | QBR completo | Alineación estratégica y expansión | CSM + Dirección |
| Anual | Executive Business Review | Relación con el C-Level del cliente | CEO / VP CS |

---

## MÓDULO 4 — DETECCIÓN TEMPRANA DEL CHURN (HEALTH SCORE VIP)

Define el health score específico para cuentas VIP con mayor granularidad que el estándar:

| Indicador | Peso | Señal de alerta (score <4) |
|-----------|------|---------------------------|
| Adopción: % de usuarios activos / licencias contratadas | 25% | <50% de usuarios activos |
| Profundidad: % de funcionalidades core activadas | 20% | <40% de features relevantes |
| Engagement del champion | 20% | No responde en >2 semanas |
| Tendencia: crecimiento o caída de uso MoM | 15% | Caída >15% en 2 meses consecutivos |
| Soporte: número de tickets urgentes recientes | 10% | >3 tickets P1 en 30 días |
| NPS individual | 10% | Detractor (0-6) |

**Protocolo de actuación por score:**
- Score 7-10: seguimiento estándar
- Score 4-6: reunión de check-in adelantada, identificar el motivo
- Score <4: protocolo de cuenta en riesgo, escalado inmediato

---

## MÓDULO 5 — PLAN DE RETENTION PARA CUENTAS EN RIESGO

Cuando una cuenta VIP está en riesgo de churn, activa el plan de retención:

**Semana 1 — Diagnóstico**
- Reunión de urgencia con el champion y si es posible con el economic buyer
- Identificar la causa raíz: ¿es de producto? ¿presupuesto? ¿cambio de interlocutor? ¿competidor?

**Semana 2 — Propuesta de solución**
- Según la causa raíz, activar la palanca correcta:
  - Producto: escalado prioritario al equipo de ingeniería, roadmap session
  - Precio: oferta de retention comercial con autorización de dirección
  - Adopción: sesión intensiva de formación, nuevo plan de onboarding
  - Relacional: reunión del CEO con el C-Level del cliente

**Semana 3-4 — Seguimiento y cierre**
- Confirmación del compromiso de renovación o de las condiciones acordadas
- Post-mortem interno: ¿qué señal temprana nos perdimos?

---

**Formato de respuesta**: usa tablas para todos los SLAs, criterios y cadencias. Incluye plantillas de mensajes para los principales momentos del programa (bienvenida VIP, invitación a QBR, activación del protocolo de riesgo). Adapta las recomendaciones a mi tipo de negocio cuando sea posible.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 55,
                'use_case'         => 'Diseñar el programa completo de gestión de clientes VIP y enterprise con SLAs, QBRs y protocolo de retención',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            // 10 — Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Storytelling profesional como freelance',
                'description'      => 'Cómo contar tu historia y tus casos de éxito para convertir más clientes: la narrativa que diferencia a los freelancers que consiguen proyectos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como consultor de personal branding y comunicación para profesionales independientes con experiencia en ayudar a freelancers a construir una narrativa convincente que atrae a los clientes correctos. Necesito construir la historia profesional que me posicione y me ayude a conseguir más y mejores clientes.

**MI CONTEXTO**
- Mi especialidad como freelance: [diseño / desarrollo / marketing / consultoría / redacción / fotografía / otro]
- Años de experiencia: [número]
- Tipo de clientes que busco: [startups / pymes / grandes empresas / agencias / consumidores finales]
- Lo que más me cuesta comunicar de mi trabajo: [el valor que aporto / diferenciarme / los resultados concretos / mis precios / por qué deberían elegirme a mí]
- Canales donde busco clientes: [LinkedIn / web propia / referidos / marketplaces / networking]

---

## MÓDULO 1 — POR QUÉ EL STORYTELLING CONVIERTE MÁS QUE UN PORTAFOLIO

Explica la psicología del storytelling en la toma de decisiones de compra B2B y B2C:

1. **La brecha cognitiva**: los clientes no compran habilidades, compran la reducción de un riesgo o la obtención de un resultado. El portafolio muestra habilidades; la historia muestra resultados.
2. **Efecto de transporte narrativo**: cuando alguien se identifica con una historia, su escepticismo disminuye.
3. **El cliente como héroe**: en una buena historia de freelance, el cliente es el protagonista que resuelve su problema gracias a tu ayuda. Tú eres el guía, no el héroe.

---

## MÓDULO 2 — TU HISTORIA PROFESIONAL (THE ORIGIN STORY)

### 2.1 La estructura de la historia de origen
La historia de origen responde a "¿por qué haces lo que haces?" de una manera que resuena emocionalmente. No es un CV cronológico.

Estructura de 4 partes:
1. **El momento de inflexión**: ¿cuándo decidiste ser freelance o especializarte en lo que haces? ¿Qué te llevó ahí?
2. **El problema que resolviste primero en ti mismo**: ¿qué problema personal o profesional te impulsó a desarrollar esta habilidad?
3. **La transformación**: cómo cambiaste tú al desarrollar esta especialidad
4. **Para quién haces esto ahora**: quién es el cliente que tiene el mismo problema que tú resolviste

A partir de mis respuestas, ayúdame a construir mi historia de origen en 150-200 palabras para la sección "Sobre mí" de mi web.

---

## MÓDULO 3 — EL CASO DE ÉXITO COMO HERRAMIENTA DE VENTA

### 3.1 La estructura del caso de éxito que convierte

Un caso de éxito no es: "Hice el diseño de la web de X empresa y quedó muy bien."

Es: "La empresa X tenía [problema concreto] que le estaba costando [consecuencia medible]. En [plazo], [acción que tomé], y el resultado fue [métrica concreta]. Hoy, [situación mejorada]."

Estructura del caso de éxito en formato Story:

| Sección | Contenido | Extensión sugerida |
|---------|----------|-------------------|
| Contexto del cliente | Quién es, sector, tamaño, situación antes de trabajar contigo | 2-3 frases |
| El problema (el dolor) | Qué problema concreto tenían, con cifras si es posible | 3-4 frases |
| Mi solución (el proceso) | Qué hice, cómo lo enfoqué, qué decisiones clave tomé | 4-5 frases |
| Los resultados | Qué mejoró, con números, porcentajes o tiempos | 2-3 frases |
| Cita del cliente | Opcional pero muy potente | 1 frase |

### 3.2 Caso de éxito: versión larga (para web/portafolio) y versión corta (para LinkedIn/email)
Con la estructura anterior, muéstrame cómo escribir el mismo caso en:
- Versión larga (300-400 palabras): para la página de portafolio
- Versión corta (80-100 palabras): para un post de LinkedIn o para mencionar en un email de prospección

### 3.3 Qué hacer si no tienes casos de éxito medibles
Estrategias para freelancers que empiezan o que trabajan en proyectos donde los resultados no son cuantificables:
- Cómo obtener testimonios descriptivos y específicos de los clientes
- Proyectos propios y pro bono como casos de referencia
- Hablar del proceso y la metodología cuando no hay métricas de resultado

---

## MÓDULO 4 — LA BIO PROFESIONAL PARA CADA CANAL

### 4.1 Bio de LinkedIn (Titular y Sección "Acerca de")
El titular de LinkedIn es el copy más visto de tu perfil. Estructura recomendada:

**Fórmula**: [Qué haces] + [Para quién] + [Resultado diferencial]

Escribe 3 versiones de mi titular de LinkedIn adaptadas a mi especialidad.

**Sección "Acerca de"** (1.500-2.000 caracteres):
- Párrafo 1: quién eres y para quién trabajas (no empieces con "Soy...")
- Párrafo 2: qué problema resuelves y cómo lo abordas de forma diferente
- Párrafo 3: evidencia (caso de éxito resumido o resultado representativo)
- Párrafo 4: CTA claro (cómo contactarte y para qué tipo de proyectos)

### 4.2 Bio de web propia (Sección "Sobre mí")
Más extensa y personal que LinkedIn. Puede incluir la historia de origen y conectar con los valores del cliente objetivo.

### 4.3 Bio de marketplace (Upwork, Freelancer.com, Malt, Toptal)
Más directa y orientada al trabajo concreto. Primeras 3 líneas son clave porque se truncan. Incluir especializaciones, tecnologías o herramientas clave para el SEO interno de la plataforma.

---

## MÓDULO 5 — EL EMAIL DE PROSPECCIÓN CON STORYTELLING

El email de prospección frío que funciona NO habla de ti primero. Habla del cliente.

**Estructura de 5 líneas:**
1. **Apertura personalizada**: algo específico sobre el destinatario o su empresa (no genérico)
2. **Puente**: cómo lo que viste conecta con un problema que tú resuelves
3. **Credibilidad en una frase**: resultado conseguido para alguien similar a ellos
4. **La pregunta**: una pregunta abierta que invita a reflexionar, no a comprar
5. **CTA mínimo**: 10-15 minutos de llamada, no una propuesta completa

Escribe un ejemplo de este email adaptado a mi especialidad y tipo de cliente objetivo.

---

**Formato de respuesta**: escribe todos los textos completos y listos para usar o adaptar. Usa [ADAPTAR] donde necesito introducir información concreta de mi experiencia. Prioriza la especificidad sobre la generalidad: un texto con detalles concretos siempre convierte más que uno genérico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 35,
                'use_case'         => 'Construir la narrativa profesional completa como freelance: historia de origen, casos de éxito, bio para cada canal y email de prospección',
                'vote_score'       => 37,
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
