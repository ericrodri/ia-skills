<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills71Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Neuromarketing aplicado a campañas que venden más',
                'description'      => 'Usa los principios de psicología del comportamiento (escasez, reciprocidad, anclaje) para diseñar campañas que generan más conversiones.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en neuromarketing y psicología del consumidor con más de 10 años diseñando campañas para marcas B2C y B2B. Voy a darte información sobre mi producto, audiencia y canal, y tú me vas a ayudar a aplicar los principios de psicología del comportamiento para maximizar conversiones.

**Contexto que necesito que analices:**
- Producto/servicio: [DESCRIBE TU PRODUCTO]
- Canal principal: [email / landing page / anuncio / tienda física]
- Audiencia: [describe buyer persona]
- Objetivo de conversión: [compra / registro / llamada]

---

## MARCO TEÓRICO: LOS 7 PRINCIPIOS APLICADOS AL MARKETING

### 1. Principio de Escasez (Scarcity)
El cerebro primitivo percibe lo escaso como valioso. Cuando algo puede desaparecer, la urgencia activa el sistema límbico y acelera la decisión.

**Aplicaciones concretas:**
- Stock limitado visible: "Solo quedan 3 unidades"
- Tiempo limitado con cuenta regresiva real (no falsa)
- Acceso exclusivo: "Solo para los primeros 50 clientes"

**Template de copy para escasez:**
"[NOMBRE DEL PRODUCTO] está disponible hasta el [FECHA] o hasta agotar existencias. [X] personas están viendo esto ahora mismo."

**Advertencia:** La escasez falsa destruye la confianza. Usa solo escasez real o basa el mensaje en la realidad de tu oferta.

---

### 2. Principio de Reciprocidad (Reciprocity)
Cialdini demostró que las personas se sienten obligadas a devolver favores. Dar primero crea una deuda psicológica positiva.

**Secuencia de reciprocidad para email marketing:**
1. Email 1: Contenido de valor gratuito sin pedir nada
2. Email 2: Más valor + soft mention de tu producto
3. Email 3: Oferta con el "porque te hemos dado tanto..."

**Ejemplos por sector:**
| Sector | Regalo de valor | Conversión esperada |
|--------|----------------|---------------------|
| SaaS   | Plantilla o auditoría gratis | Trial o demo |
| E-commerce | Guía de uso | Primera compra |
| Consultoría | Diagnóstico exprés | Propuesta pagada |
| Formación | Mini-clase gratuita | Curso completo |

---

### 3. Principio de Anclaje (Anchoring)
El primer número que ve el cerebro se convierte en referencia para evaluar todo lo que viene después.

**Técnica del anclaje en pricing:**
- Muestra primero el precio más alto (plan Enterprise)
- Luego el precio objetivo parece más razonable
- Añade un "precio tachado" que represente el valor real

**Template de página de precios con anclaje:**
```
❌ ~~Valor real: 497€~~
✅ HOY SOLO: 197€
(Ahorro de 300€ — solo hasta el domingo)
```

---

### 4. Prueba Social (Social Proof)
El cerebro en incertidumbre mira qué hacen los demás. La prueba social reduce el riesgo percibido.

**Jerarquía de poder de la prueba social:**
1. Testimonios en vídeo de clientes reales (más potente)
2. Casos de éxito con métricas concretas
3. Logos de empresas clientes conocidas
4. Número de clientes o usuarios
5. Valoraciones con estrellas (menos potente)

**Template para testimonio de alta conversión:**
"[Situación inicial negativa]. Usé [PRODUCTO] durante [TIEMPO]. Resultado: [MÉTRICA CONCRETA]. Lo recomendaría a cualquier [PERFIL DE BUYER PERSONA]."
— [Nombre], [Cargo], [Empresa]

---

### 5. Autoridad (Authority)
Las personas siguen a quien perciben como experto. La autoridad reduce el esfuerzo cognitivo de decidir.

**Señales de autoridad que puedes añadir hoy:**
- Menciones en medios conocidos ("Como se ha visto en...")
- Certificaciones y credenciales visibles
- Números de experiencia: "10 años", "500 clientes", "4.8/5 en Google"
- Asociaciones con marcas conocidas

---

### 6. Compromiso y Coherencia (Commitment & Consistency)
Una vez que alguien dice sí a algo pequeño, tiende a mantener coherencia con esa postura.

**Técnica del pie en la puerta:**
1. Micro-compromiso: "Descarga gratis la guía" (clic fácil)
2. Compromiso medio: "Regístrate para el webinar"
3. Compromiso mayor: "Habla con ventas"
4. Compra

**Aplicación en formularios:** Empieza con preguntas fáciles y no comprometedoras antes de pedir datos de contacto.

---

### 7. Aversión a la Pérdida (Loss Aversion)
Kahneman demostró que perder 100€ duele el doble que el placer de ganar 100€. Reenfocar el mensaje hacia lo que el cliente PIERDE si no actúa es más motivador que lo que gana.

**Fórmula de copy basado en pérdida:**
❌ Versión orientada a ganancia: "Gana más clientes con nuestra herramienta"
✅ Versión orientada a pérdida: "Cada día que no usas [PRODUCTO] estás dejando escapar clientes a tu competencia"

---

## TAREA PARA CLAUDE

Con la información de mi producto que te he dado arriba, por favor:

1. **Diagnóstico inicial:** Identifica qué 3 principios de neuromarketing son más relevantes para mi caso específico y por qué.

2. **Plan de campaña en 3 etapas:** Diseña una secuencia de comunicación (puede ser email, anuncio o landing) aplicando los principios seleccionados con copy real, no genérico.

3. **Headlines para test A/B:** Escribe 5 titulares alternativos para mi principal call to action, cada uno aplicando un principio distinto.

4. **Tabla de priorización:** Ordena las 7 técnicas según su impacto estimado para mi caso, con justificación breve.

5. **Lista de quick wins:** Dame 5 cambios que puedo hacer esta semana sin recursos adicionales para aplicar neuromarketing a mis materiales actuales.

Sé específico, usa copy real en español adaptado a mi producto, y evita las respuestas genéricas. Quiero poder copiar y pegar al menos el 60% de lo que me des.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseñar campañas de marketing aplicando psicología del comportamiento para aumentar conversiones',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Redis avanzado para producción: caché, Pub/Sub y Cluster',
                'description'      => 'Implementa caché distribuido, Pub/Sub, streams y Redis Cluster en aplicaciones de alta disponibilidad con patrones probados en producción.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero de infraestructura senior especializado en Redis con experiencia en sistemas que manejan millones de operaciones por segundo. Voy a describir mi stack y caso de uso, y necesito que me guíes por las decisiones de arquitectura de Redis para producción.

**Mi contexto actual:**
- Lenguaje/framework: [ej. Laravel/PHP, Node.js, Python/Django]
- Carga aproximada: [peticiones/segundo o usuarios concurrentes]
- Caso de uso principal de Redis: [caché / sesiones / colas / real-time]
- Infraestructura: [AWS / GCP / Azure / VPS propio]
- ¿Tienes Redis ahora?: [Sí versión X / No, partiendo de cero]

---

## GUÍA COMPLETA: REDIS EN PRODUCCIÓN

### PARTE 1 — DECISIONES DE ARQUITECTURA

#### ¿Standalone, Sentinel o Cluster?

| Modo | Cuándo usarlo | Límite práctico | Failover automático |
|------|--------------|-----------------|---------------------|
| Standalone | Dev, staging, apps pequeñas | ~50k ops/s | No |
| Sentinel | Alta disponibilidad, 1 shard | ~200k ops/s | Sí (~30s) |
| Cluster | Escalado horizontal, sharding | Ilimitado (horizontal) | Sí (~10s) |

**Regla práctica:** Si tu dataset Redis supera los 10 GB o necesitas más de 100k escrituras/segundo sostenidas, evalúa Cluster. Si solo necesitas HA sin tanto volumen, Sentinel es más simple de operar.

---

### PARTE 2 — PATRONES DE CACHÉ DISTRIBUIDO

#### Cache-Aside (Lazy Loading) — el más común
```
1. App busca en Redis → miss
2. App consulta DB
3. App escribe resultado en Redis con TTL
4. Siguientes requests → hit en Redis
```

**Problema:** Cache stampede cuando expira una clave muy solicitada simultáneamente. **Solución:** Probabilistic Early Recomputation o mutex lock.

#### Write-Through
```
1. App escribe en Redis Y en DB de forma síncrona
2. Redis siempre está actualizado
3. Penalización: latencia de escritura x2
```

**Cuándo usarlo:** Datos que se leen muy frecuentemente y cuya inconsistencia tiene coste alto (precio de producto, saldo de cuenta).

#### TTL Strategy por tipo de dato:
| Tipo de dato | TTL recomendado | Estrategia de invalidación |
|--------------|----------------|---------------------------|
| Sesión de usuario | 24h - 7 días | Renovar en cada request activo |
| Catálogo de productos | 15-60 min | Invalidar en evento de actualización |
| Resultado de query pesada | 5-30 min | Cache-aside con jitter |
| Rate limiting counter | 1 min - 1h | Fijo, no renovar |
| Config global | 6-24h | Invalidar con deploy |

**Jitter para evitar thundering herd:**
```php
$ttl = 3600 + rand(-300, 300); // ±5 min de variación
```

---

### PARTE 3 — PUB/SUB Y REDIS STREAMS

#### ¿Cuándo Pub/Sub vs Streams?

| Característica | Pub/Sub | Streams |
|----------------|---------|---------|
| Mensajes persistentes | ❌ No | ✅ Sí |
| Consumer groups | ❌ No | ✅ Sí |
| Replay de mensajes | ❌ No | ✅ Sí |
| Latencia | Muy baja | Baja |
| Caso ideal | Notificaciones en tiempo real efímeras | Event sourcing, procesamiento confiable |

**Template Pub/Sub en Node.js:**
```javascript
// Publisher
const pub = redis.duplicate();
await pub.publish('channel:orders', JSON.stringify({ orderId: 123 }));

// Subscriber
const sub = redis.duplicate();
await sub.subscribe('channel:orders');
sub.on('message', (channel, message) => {
    const event = JSON.parse(message);
    processOrder(event.orderId);
});
```

**Template Streams con consumer group (PHP/Laravel):**
```php
// Crear stream y grupo
Redis::xgroup('CREATE', 'orders:stream', 'workers', '$', 'MKSTREAM');

// Publicar evento
Redis::xadd('orders:stream', '*', ['order_id' => 123, 'status' => 'created']);

// Consumir con acknowledgment
$messages = Redis::xreadgroup('workers', 'worker-1', ['orders:stream' => '>'], 10);
// Procesar...
Redis::xack('orders:stream', 'workers', $messageId);
```

---

### PARTE 4 — REDIS CLUSTER: CONFIGURACIÓN Y GOTCHAS

#### Reglas de slots y sharding:
- Redis Cluster divide el keyspace en 16.384 slots
- Cada nodo master es responsable de un rango de slots
- Mínimo 3 masters (idealmente 3 masters + 3 replicas = 6 nodos)

#### Gotcha crítico: operaciones multi-key
Las operaciones como `MGET`, `MSET`, transacciones y Lua scripts solo funcionan si todas las claves están en el mismo slot.

**Solución — Hash Tags:**
```
# Fuerza que estas claves vayan al mismo slot:
{user:123}:profile
{user:123}:settings
{user:123}:permissions
```

---

### PARTE 5 — MONITORIZACIÓN Y ALERTAS EN PRODUCCIÓN

**Métricas clave a monitorizar:**
```bash
redis-cli INFO stats | grep -E "keyspace_hits|keyspace_misses|evicted_keys"
redis-cli INFO memory | grep -E "used_memory_human|mem_fragmentation_ratio"
redis-cli INFO clients | grep connected_clients
```

**Alertas recomendadas:**
| Métrica | Umbral de alerta | Acción |
|---------|-----------------|--------|
| Hit rate | < 85% | Revisar estrategia de caché |
| Memoria usada | > 80% maxmemory | Escalar o revisar eviction policy |
| Connected clients | > 500 | Implementar connection pooling |
| Latencia p99 | > 2ms | Revisar comandos O(N) |
| Evicted keys | > 0/min | Aumentar memoria o revisar TTLs |

---

## TAREA PARA CLAUDE

Con mi contexto descrito arriba:

1. **Arquitectura recomendada:** ¿Standalone, Sentinel o Cluster? Justifica con números concretos basados en mi carga.

2. **Patrones de caché:** ¿Qué patrón me recomiendas para cada tipo de dato en mi aplicación? Dame el código de implementación real.

3. **Diseño de estructura de claves:** Propón una convención de naming para mis claves Redis que sea descriptiva, evite colisiones y sea compatible con Cluster si lo necesito.

4. **Plan de migración:** Si ya tengo Redis, ¿cómo migro a la arquitectura recomendada sin downtime? Si empiezo de cero, ¿qué configuro primero?

5. **Configuración de redis.conf:** Dame los parámetros clave que debo ajustar para producción con mis especificaciones.

6. **Runbook de incidentes:** Lista los 5 problemas más comunes en Redis de producción y cómo diagnosticarlos y resolverlos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar e implementar Redis para producción con alta disponibilidad y alto rendimiento',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'UX para productos infantiles: diseño seguro y divertido 4-12 años',
                'description'      => 'Diseña experiencias digitales accesibles, seguras y motivadoras para niños, aplicando principios de desarrollo cognitivo y normativa COPPA/GDPR-K.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en UX para audiencias infantiles con experiencia en productos educativos y de entretenimiento para niños de 4 a 12 años. Voy a describir mi producto y mi audiencia objetivo, y necesito que me ayudes a diseñar una experiencia que sea segura, apropiada para la edad, accesible y que mantenga el engagement de los niños.

**Mi producto:**
- Tipo de producto: [app educativa / juego / plataforma de contenido / herramienta creativa]
- Rango de edad objetivo: [4-6 / 7-9 / 10-12 / mixto]
- Dispositivo principal: [tablet / móvil / web en ordenador]
- Contexto de uso: [supervisado por adultos / uso autónomo del niño]
- Objetivo principal: [aprendizaje / entretenimiento / creatividad / comunicación]

---

## MARCO DE DISEÑO: DESARROLLO COGNITIVO POR ETAPAS

### Etapa 1: Preescolar (4-6 años) — Pensamiento Preoperacional
**Capacidades cognitivas:**
- Pensamiento simbólico emergente
- Vocabulario de 2.000-5.000 palabras
- Atención sostenida: 5-10 minutos
- No entienden la reversibilidad de acciones

**Implicaciones de diseño:**
| Característica | Recomendación |
|----------------|---------------|
| Texto | Mínimo o acompañado de audio y pictogramas |
| Navegación | Máximo 2 niveles de profundidad |
| CTAs | Grandes (mínimo 44x44pt), iconos reconocibles |
| Feedback | Inmediato, visual y auditivo simultáneamente |
| Errores | Nunca mensajes de error textuales — animación amigable |

---

### Etapa 2: Primaria Temprana (7-9 años) — Operaciones Concretas
**Capacidades cognitivas:**
- Pensamiento lógico concreto
- Comprensión de causa-efecto
- Atención sostenida: 15-20 minutos
- Motivados por el progreso medible y los logros

**Implicaciones de diseño:**
| Característica | Recomendación |
|----------------|---------------|
| Texto | Frases cortas, máximo 8 palabras por línea |
| Progreso | Barras de progreso, colecciones, insignias |
| Retos | Dificultad progresiva con checkpoints claros |
| Social | Colaboración simple, no competencia directa agresiva |

---

### Etapa 3: Primaria Tardía (10-12 años) — Inicio del Pensamiento Abstracto
**Capacidades cognitivas:**
- Inicio del pensamiento hipotético-deductivo
- Autoconciencia y comparación social intensa
- Atención sostenida: 20-30 minutos
- Sensibles a la percepción de sus pares

**Implicaciones de diseño:**
| Característica | Recomendación |
|----------------|---------------|
| Autonomía | Opciones de personalización y control |
| Social | Features sociales con privacidad robusta |
| Desafío | Modo difícil, rankings opt-in |
| Identidad | Avatares y personalización de perfil |

---

## PRINCIPIOS DE DISEÑO VISUAL PARA NIÑOS

### Paleta de colores
- Preferencia por colores saturados y brillantes (no pasteles apagados)
- Contraste mínimo 4.5:1 para texto sobre fondo
- Evitar combinaciones rojo/verde (daltonismo frecuente en niños)
- Usar color como refuerzo, no como único indicador de estado

### Tipografía
| Edad | Tamaño mínimo | Fuente recomendada | Interlineado |
|------|--------------|-------------------|-------------|
| 4-6  | 18pt         | Redondeada, sin serif | 1.6 |
| 7-9  | 16pt         | Semi-redondeada | 1.5 |
| 10-12 | 14pt        | Puede ser serif simple | 1.4 |

### Iconografía
- Iconos de al menos 48x48dp
- Siempre acompañar iconos con etiqueta de texto (o audio en edades bajas)
- Evitar iconos abstractos — preferir pictogramas literales
- Animaciones de iconos para confirmar acciones

---

## SEGURIDAD Y NORMATIVA

### COPPA (Children's Online Privacy Protection Act) — EEUU
- No recopilar datos personales de menores de 13 años sin consentimiento parental verificable
- No geolocalización persistente
- No publicidad conductual

### GDPR + Age Appropriate Design Code (UK/EU)
- Privacidad por defecto para menores
- No "nudge techniques" para que los niños compartan más datos
- Configuraciones de privacidad en el nivel más alto por defecto

**Checklist de seguridad para tu producto:**
- [ ] ¿Tienes un flujo de consentimiento parental?
- [ ] ¿Los chats o mensajes son moderados o están desactivados?
- [ ] ¿Las compras in-app requieren autenticación de adulto?
- [ ] ¿Los perfiles de niños son privados por defecto?
- [ ] ¿Los anuncios están completamente eliminados o son solo de primera parte?

---

## ENGAGEMENT Y MOTIVACIÓN INTRÍNSECA

### El modelo SAPS (Status, Access, Power, Stuff)
Adaptado para niños:
1. **Status:** Insignias visibles, niveles con nombres atractivos ("Explorer", "Master")
2. **Access:** Desbloquear contenido nuevo al completar logros
3. **Power:** Dar control sobre el entorno (decorar, personalizar)
4. **Stuff:** Coleccionables digitales, personajes, elementos

### Loop de engagement ideal:
```
Acción del niño → Feedback inmediato y positivo → Recompensa pequeña
→ Progreso visible → Anticipación del siguiente logro → Acción
```

---

## TAREA PARA CLAUDE

Con la información de mi producto:

1. **Perfil cognitivo:** Describe las capacidades y limitaciones del grupo de edad que he seleccionado y sus 5 implicaciones más importantes para el diseño de mi producto específico.

2. **Flujo de navegación:** Propón la arquitectura de información ideal para mi tipo de producto con máximos de profundidad de navegación, nombres de secciones y flujos principales.

3. **Microinteracciones:** Describe 8 microinteracciones específicas que debo implementar (con qué acción del niño las activa y qué feedback producen).

4. **Checklist de safety:** Adapta el checklist de seguridad a mi contexto específico con las regulaciones aplicables según el mercado que me interesa.

5. **Test con usuarios:** Diseña un protocolo de prueba de usabilidad con niños de mi rango de edad: qué observar, qué preguntar (y cómo), y cómo involucrar a los padres.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar productos digitales seguros, accesibles y motivadores para audiencias infantiles de 4 a 12 años',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Navigating procurement: convierte al equipo de compras en tu aliado',
                'description'      => 'Aprende a navegar el proceso de compras corporativo, identificar a los stakeholders clave y cerrar ventas B2B cuando procurement parece un obstáculo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas enterprise con más de 15 años cerrando contratos en empresas Fortune 500, especializado en navegar procesos de procurement complejos. Tengo una oportunidad de venta donde el equipo de compras está involucrado y necesito tu ayuda para convertirlo en un aliado en lugar de un obstáculo.

**Mi situación actual:**
- Empresa a la que vendo: [tamaño, sector]
- Mi solución: [producto/servicio y precio aproximado]
- Stakeholders identificados hasta ahora: [lista de personas y roles]
- Fase actual: [primer contacto / propuesta enviada / en proceso de evaluación / negociando]
- Principales objeciones o fricciones: [describe]

---

## GUÍA COMPLETA: NAVEGANDO PROCUREMENT

### ¿POR QUÉ PROCUREMENT ES UN "OBSTÁCULO"?

El equipo de procurement no tiene como objetivo complicarte la vida. Tiene 4 objetivos claros:
1. **Reducir el coste total de adquisición** (no solo el precio)
2. **Gestionar el riesgo del proveedor**
3. **Garantizar el cumplimiento normativo** (contratos, datos, SLAs)
4. **Standardizar proveedores** (menos complejidad operativa)

Cuando entiendes sus objetivos, dejas de verlos como adversarios y empiezas a hablar su idioma.

---

### MAPA DEL PROCESO DE PROCUREMENT POR TAMAÑO DE EMPRESA

#### Empresa mediana (50-500 empleados):
```
Necesidad identificada por usuario → Aprobación de manager
→ Solicitud de 2-3 presupuestos → Decisión informal → Contrato básico
Duración media: 2-8 semanas
```

#### Empresa grande (500-5.000 empleados):
```
Business case interno → RFP/RFI formal → Evaluación técnica
→ Evaluación legal y seguridad → Negociación de contrato
→ Aprobación de CPO/CFO → Firma
Duración media: 2-6 meses
```

#### Enterprise (5.000+ empleados):
```
Strategic sourcing → RFP con scoring matrix → POC técnico
→ Auditoría de proveedor → Negociación multi-ronda
→ Comité de aprobación → Legal → Procurement central → Firma
Duración media: 6-18 meses
```

---

### LOS 5 ROLES EN PROCUREMENT Y CÓMO HABLAR CON CADA UNO

| Rol | Motivación principal | Tu mensaje clave | Error a evitar |
|-----|---------------------|-----------------|----------------|
| Comprador operativo | Simplificar su trabajo | "Tenemos proceso de onboarding estándar, integramos con vuestro ERP" | Hablar de beneficios de negocio |
| Category Manager | Mejores condiciones globales | "Podemos negociar acuerdo marco si crecéis con nosotros" | Ir directo a precio |
| CPO/Director Compras | Estrategia y riesgo | "Somos proveedores de empresas como X, Y, Z del sector" | Obviar la gestión de riesgo |
| Legal/Compliance | Protección de la empresa | "Tenemos DPA, SOC 2, ISO 27001 disponibles de inmediato" | Retrasar la entrega de documentación |
| Usuario final / Champion | Resolver su problema | "Ellos os lo han pedido — apoyad su decisión" | Saltártelos una vez involucrado procurement |

---

### ESTRATEGIA: EL MÉTODO CHAMPION + COACH

**Champion:** El usuario interno que quiere tu solución y tiene algo que ganar si se aprueba.
**Coach:** Un aliado en procurement (puede ser el comprador junior) que te explica el proceso desde dentro.

**Cómo activar tu Champion:**
1. Dale el business case completo que pueda presentar internamente
2. Prepara con él las objeciones que van a surgir y las respuestas
3. Involúcrale en el proceso de RFP para que tus fortalezas queden en el scoring
4. Mantenle informado de cada paso para que no pierda credibilidad

**Template de email para activar al Champion:**
```
Asunto: Materiales para el comité interno — [Nombre de tu empresa]

Hola [CHAMPION],

Como hablamos, te adjunto:
✅ Business case con ROI calculado para vuestro caso
✅ One-pager ejecutivo para el CPO (sin tecnicismos)
✅ Tabla comparativa vs. alternativas (basada en criterios que tú me diste)
✅ Respuestas a las 5 objeciones más frecuentes de procurement

¿Hay algún formato adicional que necesites para presentarlo al equipo?
```

---

### CÓMO RESPONDER A UNA RFP SIN PERDER EL ALMA

**Los 3 errores más comunes en RFPs:**
1. Responder literalmente sin leer entre líneas lo que realmente valoran
2. No hablar con el usuario antes de responder para entender el criterio real
3. Competir solo en precio cuando los criterios cualitativos pesan más

**Framework para priorizar secciones de una RFP:**
- Lee el criterio de evaluación y pon pesos a cada sección
- Identifica dónde puedes ganar (diferenciación real) y dónde solo "cumples"
- Dedica el 80% del esfuerzo al 20% de secciones con mayor peso
- Incluye prueba social específica del sector del cliente

---

### NEGOCIACIÓN CON PROCUREMENT: LAS PALANCAS QUE PUEDES USAR

| Concesión tuya | Lo que pides a cambio |
|----------------|----------------------|
| Descuento por volumen | Compromiso de 3 años en vez de 1 |
| Mejores condiciones de pago | Referencia o caso de éxito publicable |
| Onboarding gratuito | Expansión a más departamentos en 6 meses |
| Licencias adicionales | Acceso a su red de contactos o evento |
| SLA mejorado | Pago por adelantado del año completo |

---

## TAREA PARA CLAUDE

Con mi situación descrita arriba:

1. **Mapa de stakeholders:** Basándote en lo que me has dado, identifica los roles que faltan en mi mapa y cómo encontrarlos dentro de la empresa.

2. **Plan de acción semana a semana:** Dame un plan de 6 semanas con acciones concretas para avanzar el deal a través de procurement.

3. **Emails y mensajes clave:** Escribe 3 emails que necesito enviar esta semana: al Champion, al comprador operativo, y un email de seguimiento si llevan 2 semanas en silencio.

4. **Simulación de objeciones:** Juega el rol del director de procurement y lánzame las 5 objeciones más duras que vas a ponerme. Luego dame las mejores respuestas.

5. **Checklist de documentación:** ¿Qué documentos debo tener preparados antes de que procurement me los pida? Dame la lista con nivel de urgencia.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Navegar procesos de compras corporativos y cerrar ventas B2B enterprise con procurement involucrado',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Lanzar productos en sectores regulados: fintech, healthtech y legaltech',
                'description'      => 'Estrategias para lanzar y escalar productos digitales cuando el regulador es un stakeholder crítico: cronogramas, sandbox, y gestión de compliance.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager con experiencia lanzando productos en entornos regulados, incluyendo fintech (pagos y crédito), healthtech (datos de salud) y legaltech (automatización jurídica). Voy a describir mi producto y el sector en el que opero, y necesito tu ayuda para diseñar una estrategia de lanzamiento que no ignore la regulación sino que la convierta en una ventaja competitiva.

**Mi producto:**
- Sector: [fintech / healthtech / legaltech / otro sector regulado]
- País o mercado objetivo: [España / UE / EEUU / global]
- Tipo de producto: [describe brevemente]
- Estado actual: [idea / MVP / beta / ya lanzado]
- Principal regulación que me afecta: [GDPR / PSD2 / HIPAA / MiFID / otro / no lo sé aún]

---

## MAPA REGULATORIO POR SECTOR

### FINTECH en España/UE
| Tipo de servicio | Regulación principal | Organismo supervisor | Tiempo de licencia |
|-----------------|---------------------|---------------------|-------------------|
| Pagos y transferencias | PSD2 / EMD2 | Banco de España | 6-18 meses |
| Crédito al consumidor | Ley 16/2011 + Regulación UE | CNMV / BdE | 3-12 meses |
| Inversión y gestión de activos | MiFID II | CNMV | 12-24 meses |
| Criptoactivos | MiCA (desde 2024) | CNMV | En desarrollo |
| Seguros | Solvencia II / IDD | DGSFP | 6-18 meses |

**Sandbox Financiero de España:**
El Banco de España y CNMV ofrecen un sandbox regulatorio. Permite testar productos con clientes reales bajo supervisión reducida. Cohortes anuales. **Ideal para MVPs que necesitan validar sin licencia completa.**

### HEALTHTECH en España/UE
| Tipo de dato/servicio | Regulación | Implicación clave |
|----------------------|------------|------------------|
| Historiales clínicos | RGPD + Ley LSSI | Consentimiento explícito, DPO obligatorio |
| Dispositivos médicos | MDR (EU 2017/745) | Marcado CE, clasificación de riesgo |
| Telemedicina | Ley de Ordenación Sanitaria | Solo médicos colegiados pueden prescribir |
| Apps de salud (wellness) | RGPD si recopilas datos de salud | Categoría especial de datos |
| IA en diagnóstico | AI Act (desde 2025) | Alto riesgo — requisitos estrictos de transparencia |

### LEGALTECH en España
| Servicio | Límite regulatorio | ¿Necesitas abogado colegiado? |
|----------|-------------------|------------------------------|
| Generación de documentos | Automatización sí, asesoramiento no | No (con disclaimer) |
| Asesoramiento jurídico | Reservado a abogados | Sí, siempre |
| Arbitraje y mediación | Regulado por Ley 5/2012 | Según modalidad |
| Due diligence automática | Automatización sí | No (si no hay recomendación) |

---

## EL REGULADOR COMO STAKEHOLDER: CÓMO GESTIONARLO

### Framework de relacionamiento regulatorio

**Fase 1 — Mapeo (antes de construir)**
- Identifica qué regulaciones aplican (usa la tabla anterior como punto de partida)
- Determina si necesitas licencia previa o puedes operar y regularizar
- Analiza cómo lo están haciendo los competidores
- Contacta con el regulador en fase exploratoria — la mayoría tienen unidades de innovación

**Fase 2 — Diseño compliance-first**
- Incorpora el DPO (o asesor legal) al equipo de producto desde el primer día
- Documenta cada decisión de diseño que toca datos o dinero
- Diseña con privacy by design y security by design desde el wireframe

**Fase 3 — Lanzamiento progresivo**
```
Beta cerrada (usuarios testers) → Sandbox regulatorio (si aplica)
→ Lanzamiento limitado (geografía o segmento) → Scale-up
```

---

## COMPLIANCE COMO VENTAJA COMPETITIVA

**El argumento que muchos ignoran:** En sectores regulados, el compliance no es un coste — es una barrera de entrada que, una vez superada, protege tu negocio.

**Cómo usar el compliance en ventas y marketing:**
- "Somos la única plataforma de [sector] con [certificación] en España"
- Publica tu política de privacidad, términos y certificaciones de forma prominente
- Consigue certificaciones de terceros (ISO 27001, SOC 2, ENS) aunque no sean obligatorias
- Participa en grupos de trabajo del regulador — visibilidad y acceso a borradores de normas

---

## HOJA DE RUTA DE COMPLIANCE PARA MVP

### 90 días antes del lanzamiento:
| Semana | Acción | Responsable |
|--------|--------|-------------|
| 1-2 | Mapeado regulatorio completo | Fundador + Legal |
| 3-4 | Registro RGPD y nombramiento DPO (si aplica) | Legal |
| 5-8 | Privacy policy, T&Cs, cookie banner | Legal + Producto |
| 9-10 | Auditoría de seguridad básica | CTO + externo |
| 11-12 | Contacto con regulador (si procede) | CEO |

---

## TAREA PARA CLAUDE

Con mi contexto descrito:

1. **Mapa regulatorio personalizado:** Lista todas las regulaciones que aplican a mi producto con nivel de urgencia (bloqueante / importante / nice-to-have) y si son necesarias antes o después del lanzamiento.

2. **Estrategia sandbox:** ¿Puedo usar un sandbox regulatorio? ¿Cuál, cómo aplico y qué puedo validar mientras espero licencias?

3. **Hoja de ruta de compliance:** Dame un roadmap de 6 meses con hitos regulatorios, en qué orden abordarlos y qué puedo delegar vs. qué debe hacer el equipo fundador.

4. **Discurso para inversores:** Escribe el párrafo sobre regulación para mi pitch deck que convierta el compliance en ventaja competitiva y no en factor de miedo.

5. **Preguntas para el abogado:** ¿Qué 10 preguntas debería hacerle a mi asesor legal especializado en mi sector para no desperdiciar su tiempo y el mío?
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar la estrategia de lanzamiento y compliance de productos digitales en sectores regulados',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Equity para empleados: stock options, phantom shares y RSUs sin perder al equipo',
                'description'      => 'Diseña y comunica un plan de equity para empleados que retenga talento, alinee incentivos y sea comprensible para todo el equipo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en compensación y equity en startups con experiencia asesorando a empresas desde seed hasta Serie C. Mi empresa necesita diseñar o revisar un plan de equity para empleados y quiero que me ayudes a entender las opciones disponibles, diseñar la estructura y comunicarla correctamente al equipo.

**Mi situación:**
- Etapa de la empresa: [pre-seed / seed / Serie A / Serie B+]
- País de constitución: [España / UK / Delaware / otro]
- Número de empleados: [X]
- ¿Ya tenéis un pool de equity?: [Sí, X% / No]
- Objetivo principal del plan: [retención / atracción / alineación de incentivos]

---

## GUÍA COMPLETA: TIPOS DE EQUITY PARA EMPLEADOS

### 1. Stock Options (Opciones sobre acciones)
El modelo más común en startups. Das al empleado el derecho (no la obligación) de comprar acciones a un precio fijo (strike price) en el futuro.

**Cómo funciona:**
```
Grant date: Se conceden las opciones al precio de mercado actual
Vesting period: El empleado gana el derecho progresivamente (típico: 4 años)
Cliff: Periodo mínimo de permanencia para ejercitar (típico: 1 año)
Exercise: El empleado paga el strike price y recibe acciones
Liquidity event: El empleado puede vender en una venta, IPO, etc.
```

**Fiscalidad en España (ESOP):**
| Momento | Evento fiscal | Tipo |
|---------|--------------|------|
| Grant | No tributa | — |
| Vesting | No tributa | — |
| Exercise | Rendimiento del trabajo (si > strike) | IRPF hasta 47% |
| Venta | Ganancia patrimonial | 19-28% |

**Exención de 12.000€ (art. 42.3 LIRPF):** Bajo condiciones (empresa < 6 años, startup acreditada MINECO), la ganancia al ejercitar está exenta hasta 50.000€ con la Ley de Startups de 2022. Esto es un game-changer para startups españolas.

---

### 2. Phantom Shares (Acciones Fantasma)
No son acciones reales. Son derechos económicos que simulan tener acciones sin implicar propiedad real.

**Cuándo usarlas:**
- Empresa con cap table complejo donde no quieres más socios
- Empleados que no necesitan derechos políticos (voto)
- Startups que aún no quieren abrir el cap table
- Empresas que operan con estructura de SL donde las opciones son más complejas

**Cómo funcionan:**
```
1. Empresa define el "valor virtual" de una unidad phantom
2. Empleado acumula unidades según vesting
3. En el liquidity event, recibe el equivalente en cash al valor de sus phantom shares
4. Tributa como rendimiento del trabajo (menos favorable que options)
```

**Ventaja vs Stock Options:** Sin cap table dilution, más simple legalmente.
**Desventaja:** Tributación peor y el empleado no tiene "propiedad" real de nada.

---

### 3. RSUs (Restricted Stock Units)
Comunes en empresas cotizadas o pre-IPO. Son acciones reales pero restringidas hasta que se cumple el vesting.

| Característica | Stock Options | RSUs | Phantom Shares |
|----------------|--------------|------|----------------|
| Propiedad real | Solo al ejercitar | Sí, al vest | No |
| Strike price | Sí | No | No |
| Valor si empresa cae | Pueden valer 0 | Mantienen valor proporcional | Depende del contrato |
| Complejidad administrativa | Media | Alta | Baja |
| Ideal para | Startups early-stage | Late-stage / pre-IPO | SLs con cap table cerrado |

---

## DISEÑO DEL PLAN: DECISIONES CLAVE

### 1. Tamaño del pool
| Etapa | Pool típico sobre cap table |
|-------|---------------------------|
| Pre-seed | 10-15% |
| Seed | 10-12% |
| Serie A | 8-10% |
| Serie B | 5-8% |

**Regla:** Reserva suficiente para los próximos 18-24 meses de contrataciones clave.

### 2. Asignación por nivel
| Nivel | Rango típico (% del pool) | Rango típico (% de empresa) |
|-------|--------------------------|---------------------------|
| C-Suite (primer año) | 15-25% del pool | 1.5-4% empresa |
| VP / Director | 5-10% del pool | 0.5-1.5% empresa |
| Senior IC | 2-5% del pool | 0.2-0.5% empresa |
| Mid-level | 0.5-2% del pool | 0.05-0.2% empresa |

### 3. Vesting estándar
- **4 años con 1 año de cliff:** El estándar global. Al año 1 el empleado obtiene el 25%, luego mensualmente.
- **Accelerated vesting:** En caso de adquisición, ¿se acelera el vesting? (Single trigger vs Double trigger)

---

## CÓMO EXPLICAR EL EQUITY AL EQUIPO

El mayor problema no es diseñar el plan — es explicarlo de forma que el equipo lo entienda y lo valore.

**Template de carta de concesión para el empleado:**
```
Se te conceden [X] opciones sobre acciones de [Empresa] al precio de ejercicio de [€X/acción],
representando aproximadamente un [X%] de la empresa en el momento de esta concesión.

Tu plan de vesting es de 4 años con 1 año de cliff:
- A los 12 meses: 25% de tus opciones (X opciones)
- De los meses 13 a 48: el resto mensualmente (X opciones/mes)

Escenario ilustrativo: Si la empresa alcanza una valoración de [€Xm] en una futura ronda
o venta, el valor estimado de tus opciones sería de [€X]. Esto es solo un escenario
ilustrativo y no una promesa de rendimiento.
```

---

## TAREA PARA CLAUDE

Con mi contexto:

1. **Recomendación de instrumento:** ¿Stock options, RSUs o phantom shares para mi caso? Dame los 3 argumentos principales y los 2 riesgos de cada opción aplicados a mi situación concreta.

2. **Diseño del plan:** Propón el tamaño del pool, la distribución por niveles y las condiciones de vesting recomendadas para mi etapa y mercado.

3. **Simulación de escenarios:** Calcula el valor teórico del equity para 3 perfiles de empleado en 3 escenarios de salida (valoración conservadora, objetivo y optimista).

4. **Guión de comunicación:** Dame un guión para la conversación con un candidato donde le explico el equity sin que le suene a "te estoy pagando menos con promesas".

5. **FAQ para el equipo:** Escribe las 10 preguntas más frecuentes que me va a hacer el equipo sobre el plan y las respuestas claras a cada una.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar planes de equity para empleados que retengan talento y sean comprensibles para todo el equipo',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Cash pooling y tesorería internacional: optimiza los flujos entre filiales',
                'description'      => 'Implementa estructuras de cash pooling, gestiona exposición a divisa y minimiza los costes financieros entre entidades del grupo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero con experiencia en tesorería corporativa internacional y gestión de grupos empresariales multidivisa. Tengo una empresa con operaciones en varios países y necesito optimizar la gestión de la liquidez del grupo para reducir costes financieros y mejorar el control de caja.

**Mi contexto:**
- Número de entidades en el grupo: [X filiales]
- Países/divisas involucrados: [lista]
- Volumen aproximado de caja consolidada: [€X]
- Banco(s) principal(es): [nombre o "no decidido"]
- Principal problema actual: [exceso de caja en filiales / falta de liquidez central / costes de financiación intercompany / exposición a divisa]

---

## ESTRUCTURAS DE CASH POOLING

### Tipo 1: Notional Cash Pooling (Pool Nocional)
Los saldos de cada entidad se mantienen en sus propias cuentas pero el banco calcula intereses sobre el saldo neto consolidado.

**Cómo funciona:**
```
Filial A: +500k€ (interés acreedor normal: 0.5%)
Filial B: -300k€ (interés deudor normal: 3%)
Con notional pooling:
→ Saldo neto: +200k€
→ El grupo paga/cobra intereses solo sobre 200k€
→ Ahorro: intereses sobre 300k€ que "se compensan"
```

**Ventajas:**
- No hay movimiento real de fondos
- Autonomía legal de cada filial
- Menos fricción administrativa

**Desventajas:**
- No todos los países lo permiten (USA, China: restricciones)
- Requiere acuerdo especial con banco

---

### Tipo 2: Physical (Zero Balance) Cash Pooling
Al final de cada día, los saldos de las cuentas de las filiales se transfieren físicamente a una cuenta central (header account).

```
09:00 — Filial A opera con saldo local disponible
17:00 — Sweep automático: saldo de Filial A → Header Account
         + Filial B → Header Account
         + Filial C → Header Account
         → Tesorería central gestiona el saldo consolidado
```

**Ventajas:**
- Control centralizado total
- Optimización de intereses más efectiva
- Visible y simple de auditar

**Desventajas:**
- Movimiento real de fondos (implicaciones fiscales intercompany)
- Necesita precios de transferencia documentados
- Filiales deben tener líneas de crédito intraday si necesitan liquidez temporal

---

### Comparativa de estructuras:

| Criterio | Notional | Physical ZBA | Hibrido |
|----------|----------|-------------|---------|
| Movimiento de fondos | No | Sí (diario) | Parcial |
| Ahorro en intereses | Medio | Alto | Alto |
| Complejidad fiscal | Baja | Media-Alta | Alta |
| Restricciones geográficas | Importantes | Menores | Variables |
| Control central | Medio | Total | Alto |
| Coste de implementación | Bajo | Medio | Alto |

---

## PRECIOS DE TRANSFERENCIA EN TESORERÍA INTERCOMPANY

Cuando el dinero fluye entre entidades del grupo, el regulador fiscal exige que los préstamos intercompany sean a precios de mercado (arm's length).

**Tasa de referencia recomendada (2024):**
- Euribor a 3M + spread (0.5-2% según rating crediticio del grupo)
- Documentar la metodología en el Masterfile y Local File de precios de transferencia
- Revisar anualmente

**Documentación mínima:**
1. Acuerdo marco de cash pooling entre entidades
2. Política de precios de transferencia para tesorería
3. Registro de las transacciones y saldos intercompany
4. Informe de comparabilidad con tasas de mercado

---

## GESTIÓN DE EXPOSICIÓN A DIVISA

### Identificación de exposición:
| Tipo de exposición | Descripción | Ejemplo |
|-------------------|-------------|---------|
| Transaccional | Cobros/pagos en divisa extranjera contratados | Facturas a cobrar en USD |
| Traslacional | Conversión de balances de filiales extranjeras | Filial en UK, libras → euros |
| Económica | Impacto en competitividad a largo plazo | Competidores con coste en otra divisa |

### Instrumentos de cobertura:

**Forward de divisa:**
```
Hoy: acuerdo para vender 1M USD a 1.10 EUR/USD en 90 días
Resultado: tipo de cambio garantizado independientemente del mercado
Coste: spread del banco (normalmente 0.1-0.5%)
```

**Política de cobertura recomendada:**
| Horizonte | % de exposición a cubrir | Instrumento |
|-----------|--------------------------|-------------|
| 0-3 meses | 100% | Forward |
| 3-12 meses | 60-80% | Forward + opciones |
| 12+ meses | 30-50% | Opciones |

**Regla práctica:** Solo cubre lo que puedes predecir. La sobrecobertura puede generar pérdidas mayores que la exposición original.

---

## KPIs DE TESORERÍA INTERNACIONAL

| KPI | Fórmula | Objetivo |
|-----|---------|----------|
| Cash conversion cycle | DIO + DSO - DPO | Minimizar |
| Intercompany netting efficiency | 1 - (pagos reales / bruto) | > 70% |
| Cobertura de divisa | Exposición cubierta / total | 60-90% según política |
| Coste de financiación grupo | Intereses netos / deuda media | < coste mercado |
| Días de liquidez disponible | Caja / gasto diario medio | > 90 días |

---

## TAREA PARA CLAUDE

Con mi situación descrita:

1. **Diagnóstico de estructura actual:** ¿Qué ineficiencias típicas tiene mi configuración actual? ¿Cuánto dinero podría estar "durmiendo" en saldos descoordinados?

2. **Recomendación de estructura:** ¿Notional, physical o híbrido para mi caso? ¿En qué países implementar primero?

3. **Plan de implementación:** Dame un plan de 90 días para implementar cash pooling con el banco que elija, incluyendo los pasos legales, fiscales y operativos.

4. **Política de cobertura de divisa:** Diseña la política de cobertura para mis divisas específicas con los instrumentos recomendados y los umbrales de decisión.

5. **Presentación al board:** Dame los 5 slides clave para presentar la propuesta de optimización de tesorería al consejo de administración con el impacto financiero estimado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Implementar cash pooling y optimizar la tesorería en grupos empresariales internacionales',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Licencias de software en España: SaaS vs on-premise vs open source',
                'description'      => 'Analiza las diferencias críticas entre modelos de licenciamiento de software para proteger tanto al cliente como al proveedor en contratos tecnológicos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho tecnológico y contratos de software con experiencia en el mercado español y europeo. Necesito entender las diferencias jurídicas y contractuales clave entre los modelos de licenciamiento SaaS, on-premise y open source para proteger correctamente a mi empresa, ya sea como proveedor o como cliente.

**Mi situación:**
- Mi rol: [proveedor de software / cliente que contrata software]
- Modelo de software que uso/vendo: [SaaS / on-premise / open source / mixto]
- Sector: [especifica si aplica — fintech, salud, administración pública, etc.]
- Principal preocupación: [propiedad intelectual / continuidad del servicio / responsabilidad / datos / precio]

---

## ANÁLISIS COMPARATIVO DE MODELOS DE LICENCIAMIENTO

### 1. SOFTWARE AS A SERVICE (SaaS)

**Naturaleza jurídica:** No es una licencia de software en sentido estricto — es un contrato de prestación de servicios. El cliente accede al software pero nunca lo "posee".

**Elementos críticos del contrato SaaS:**

| Cláusula | Perspectiva Cliente | Perspectiva Proveedor |
|----------|--------------------|-----------------------|
| SLA y disponibilidad | Exigir 99.9%+ con penalizaciones reales | Definir "disponibilidad" excluyendo mantenimientos programados |
| Datos del cliente | Propietario absoluto, derecho a exportar y borrar | Uso solo para prestar el servicio, nunca para entrenar modelos sin consentimiento |
| Escrow de código | Pedir depósito en notaría si proveedor quiebra | Negociar condiciones de activación del escrow |
| Precio y escalado | Cap anual de aumento de precio | Indexación a CPI o métricas de uso |
| Portabilidad de datos | Formato estándar exportable en 30 días | Define formato y limitaciones técnicas |
| Baja y migración | Periodo de gracia mínimo 90 días | Limitar acceso post-baja pero permitir exportación |

**RGPD en SaaS:**
- El proveedor SaaS es **encargado del tratamiento**
- El cliente es **responsable del tratamiento**
- El DPA (Data Processing Agreement) es **obligatorio**
- Transferencias fuera de la UE: verificar que el proveedor usa SCCs o está en país adecuado

---

### 2. SOFTWARE ON-PREMISE

**Naturaleza jurídica:** Contrato de licencia de uso del software. El cliente instala el software en su infraestructura. La propiedad intelectual siempre queda en el proveedor.

**Tipos de licencias on-premise:**
| Tipo | Descripción | Uso típico |
|------|-------------|-----------|
| Perpetua | Pago único, uso indefinido de esa versión | ERP, software crítico |
| Anual / Suscripción | Pago periódico, acceso a updates | Seguridad, antivirus |
| Por usuario | Precio por número de usuarios activos | Herramientas de colaboración |
| Por servidor/CPU | Precio por capacidad de hardware | Bases de datos, middleware |
| Enterprise License Agreement | Precio global para toda la empresa | Microsoft, Oracle |

**Cláusulas críticas para contratos on-premise:**

**Para el CLIENTE:**
- **Derecho de auditoría inversa:** ¿Puede el proveedor auditar tu uso? ¿Con qué preaviso?
- **Escrow de código fuente:** Si el proveedor desaparece, ¿puedes mantener el software?
- **Versiones y soporte:** ¿Hasta cuándo da soporte a la versión que compro?
- **Portabilidad:** ¿Puedo migrar a entorno cloud propio en el futuro?

**Para el PROVEEDOR:**
- **Anti-copia y DRM:** ¿Cómo proteges el software de duplicación?
- **Limitaciones de uso:** Define claramente qué está permitido y qué no
- **Reverse engineering:** Prohibición expresa conforme al art. 100 LPI
- **Auditoría de licencias:** Derecho a verificar el cumplimiento

---

### 3. OPEN SOURCE

**Naturaleza jurídica:** El código es público pero la licencia determina qué puedes hacer con él. No significa "sin restricciones".

**Las licencias más importantes:**

| Licencia | Tipo | ¿Puedes usarlo en software comercial? | ¿Debes publicar tu código? | Compatible con SaaS |
|----------|------|--------------------------------------|--------------------------|---------------------|
| MIT | Permisiva | ✅ Sí | ❌ No obligatorio | ✅ Sí |
| Apache 2.0 | Permisiva | ✅ Sí | ❌ No obligatorio | ✅ Sí |
| GPL v2 | Copyleft fuerte | ⚠️ Solo si publicas el tuyo | ✅ Obligatorio | ❌ No (según interpretación) |
| GPL v3 | Copyleft fuerte | ⚠️ Solo si publicas el tuyo | ✅ Obligatorio | ❌ No (tiloskar) |
| LGPL | Copyleft débil | ✅ Si usas como librería | Solo el código LGPL | ✅ Sí |
| AGPL | Copyleft de red | ⚠️ Solo si publicas el tuyo | ✅ Incluye uso en red/SaaS | ❌ No |
| BSL / SSPL | Source available | ⚠️ Restricciones específicas | ✅ | Depende |

**Riesgo legal crítico:** MongoDB, Redis, Elastic y HashiCorp han cambiado sus licencias de MIT/Apache a BSL o SSPL en los últimos años. Si tu infraestructura depende de estos proyectos, debes revisar si sigues en cumplimiento.

**Checklist de due diligence de open source:**
- [ ] ¿Has listado todas las dependencias de terceros y sus licencias?
- [ ] ¿Usas algún componente GPL que contamine tu software propietario?
- [ ] ¿Tienes un proceso de aprobación para añadir nuevas dependencias?
- [ ] ¿Contribuyes código a proyectos OSS? ¿Tienes CLA firmado?

---

## ESCENARIOS ESPECIALES EN ESPAÑA

### Software para Administración Pública
- La LAECSP y el Real Decreto 4/2010 favorecen el uso de estándares abiertos
- El Esquema Nacional de Seguridad (ENS) impone requisitos específicos
- Contratación pública: la LCSP limita los contratos de mantenimiento ligados a un solo proveedor

### Software en sectores críticos (salud, energía, banca)
- NIS2 (Directiva de Ciberseguridad): obliga a gestionar la cadena de suministro de software
- Auditorías de código pueden ser requeridas por el regulador

---

## TAREA PARA CLAUDE

Con mi rol y contexto descritos:

1. **Análisis de mi situación:** ¿Qué modelo de licenciamiento tengo actualmente y cuáles son los 3 riesgos jurídicos principales que no estoy gestionando?

2. **Cláusulas prioritarias:** Dame las 10 cláusulas que debo negociar o incluir en mi próximo contrato de software, ordenadas por importancia para mi caso específico.

3. **Template de DPA:** Esboza los puntos obligatorios de un Data Processing Agreement conforme al RGPD para mi relación proveedor-cliente.

4. **Gestión de open source:** Si uso componentes open source, dame el proceso que debo implementar para mantener el cumplimiento de licencias en mi ciclo de desarrollo.

5. **Red flags en contratos:** ¿Qué cláusulas abusivas o desequilibradas debo identificar en contratos de software que me presenten? Dame 8 ejemplos concretos con el texto habitual y la alternativa que debo pedir.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Analizar y negociar contratos de licenciamiento de software para proteger los intereses de cliente o proveedor',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte en fintech: KYC, compliance, disputas y particularidades financieras',
                'description'      => 'Gestiona las complejidades del soporte al cliente en productos financieros: verificación de identidad, reclamaciones reguladas, disputas de cargo y comunicación bajo normativa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en customer success y soporte en empresas fintech con experiencia en productos de pagos, banca digital y crédito. Necesito ayuda para profesionalizar el equipo de soporte de mi empresa fintech, incluyendo los procesos específicos que exige el sector: KYC, disputas, reclamaciones reguladas y comunicación con clientes en temas sensibles de dinero.

**Mi contexto:**
- Tipo de producto fintech: [neobank / pagos / crédito / inversión / seguros / cripto]
- País de operación y licencia: [España / UE / Reino Unido]
- Tamaño del equipo de soporte: [X agentes]
- Principal problema actual: [tiempos de resolución / disputas / KYC fallido / quejas regulatorias]

---

## PARTE 1: KYC Y ONBOARDING — EL PRIMER PUNTO DE FRICCIÓN

### ¿Qué es KYC y por qué el soporte debe entenderlo?
KYC (Know Your Customer) es la obligación regulatoria de verificar la identidad de los clientes antes de prestar servicios financieros. La Directiva AML5/6 y la Ley 10/2010 en España lo exigen.

**Las 3 capas del KYC:**
1. **Verificación de identidad (IDV):** Documento de identidad + selfie biométrico
2. **Prueba de domicilio (PoA):** Factura de servicios, extracto bancario
3. **Origen de fondos (SoW):** Para montos altos o perfiles de riesgo

### Tipología de casos KYC que llegan a soporte:

| Caso | Causa frecuente | Tiempo de resolución | Escalación necesaria |
|------|----------------|---------------------|---------------------|
| Documento rechazado | Foto borrosa, documento caducado | < 24h | No |
| Nombre no coincide | Transliteración de nombres extranjeros | 24-72h | Sí → Compliance |
| Selfie no válido | Gafas, sombra, baja resolución | < 24h | No |
| PEP detectado | Persona políticamente expuesta | 3-10 días | Sí → Compliance + Legal |
| Cuenta bloqueada por AML | Patrón de transacciones sospechoso | Variable | Sí → Compliance |
| Límites de cuenta no aumentan | Nivel KYC insuficiente | 24-72h | No (proceso guiado) |

### Template de email KYC rechazado (tono empático y claro):
```
Asunto: Información adicional necesaria para activar tu cuenta

Hola [NOMBRE],

Hemos revisado tu solicitud de verificación y necesitamos un documento adicional para poder completar el proceso:

❌ Lo que hemos recibido: [describe el problema de forma neutra]
✅ Lo que necesitamos: [describe exactamente lo que hay que enviar]

Puedes enviarlo directamente desde la app en Configuración > Verificación > Subir documento.

Si tienes cualquier duda sobre este proceso, estoy aquí para ayudarte.

Un saludo,
[NOMBRE AGENTE]
Equipo de Verificación | [EMPRESA]

Nota: Este proceso es obligatorio por la normativa de prevención del blanqueo de capitales (Ley 10/2010). La información que nos proporcionas está protegida por nuestra política de privacidad.
```

---

## PARTE 2: DISPUTAS Y CONTRACARGOS (CHARGEBACKS)

### El proceso de disputa en pagos con tarjeta:

```
Cliente contacta → Agente recoge evidencia → Análisis interno (24-48h)
→ Decisión: reembolso directo O disputa formal con emisor/acquirer
→ Si formal: plazo de respuesta 30-45 días → Resolución
```

### Criterios para reembolso directo vs disputa formal:

| Criterio | Reembolso directo | Disputa formal |
|----------|------------------|---------------|
| Importe | < €30-50 | > €50 |
| Historial del cliente | Sin incidencias previas | Historial de disputas |
| Evidencia clara de error | Sí | No o ambigua |
| Tiempo transcurrido | < 7 días | 7-120 días |
| Tipo de comercio | Bajo riesgo | Alto riesgo o sospechoso |

### Script para disputas — primeras 3 preguntas del agente:
1. "¿Reconoces haber realizado tú esta transacción o crees que puede ser un uso no autorizado?"
2. "¿Has intentado contactar con el comercio para resolver esto directamente?"
3. "¿Tienes alguna evidencia de que el servicio/producto no fue entregado como prometido?"

---

## PARTE 3: RECLAMACIONES REGULADAS

En España, los clientes de servicios financieros tienen derecho a reclamar ante:
- **Servicio de Atención al Cliente (SAC) interno** (obligatorio, plazo máximo: 15 días hábiles para pagos, 1 mes para inversión)
- **Banco de España / CNMV / DGSFP** (si el SAC no resuelve o resuelve en contra)

### Obligaciones del SAC en fintech española:
1. Acuse de recibo en 24h
2. Resolución motivada por escrito en plazos legales
3. Informar al cliente de su derecho a reclamar ante el supervisor
4. Registro de todas las reclamaciones (auditado por el regulador)

**Template de acuse de recibo de reclamación formal:**
```
Estimado/a [NOMBRE],

Hemos recibido correctamente su reclamación con número de referencia [REF-XXXX] presentada el [FECHA].

De acuerdo con el Reglamento para la Defensa del Cliente de [EMPRESA], su reclamación será
analizada y resuelta en un plazo máximo de [15 días hábiles / 1 mes] desde esta fecha.

Si no estuviera satisfecho/a con nuestra resolución, podrá dirigirse al [Banco de España /
CNMV / DGSFP] en [dirección/web del organismo supervisor].

[NOMBRE SAC]
Servicio de Atención al Cliente | [EMPRESA]
[Número de registro en el organismo supervisor]
```

---

## PARTE 4: MÉTRICAS ESPECÍFICAS DE SOPORTE FINTECH

| Métrica | KPI típico fintech | Por qué importa más que en otros sectores |
|---------|-------------------|------------------------------------------|
| Time to resolve KYC | < 48h | Impacto directo en activación y revenue |
| Disputa resolution rate | > 85% a favor del cliente | Satisfacción + riesgo regulatorio |
| SAC compliance rate | 100% en plazo | Multas del regulador si no se cumple |
| False positive rate (AML) | < 2% | Fricción innecesaria en clientes legítimos |
| CSAT post-disputa | > 4.0/5 | Disputas son el mayor driver de churn |

---

## TAREA PARA CLAUDE

Con mi contexto:

1. **Mapa de procesos críticos:** Para mi tipo de producto fintech, ¿cuáles son los 5 tipos de casos que deben tener procedimientos documentados de forma obligatoria? Descríbelos brevemente.

2. **Árbol de decisión KYC:** Diseña un árbol de decisión para mi equipo de soporte sobre cómo manejar los casos KYC más frecuentes: cuándo resolver, cuándo escalar y a quién.

3. **Templates de comunicación:** Escribe 3 templates de respuesta para: (a) cuenta bloqueada por AML, (b) disputa de cargo aprobada, (c) reclamación formal recibida.

4. **Plan de formación:** ¿Qué debe saber un agente de soporte fintech que no necesita saber un agente de soporte regular? Dame el temario de onboarding de 2 semanas.

5. **Matriz de escalación:** Define la matriz de escalación para mi equipo: qué casos van a compliance, cuáles a legal, cuáles al SAC formal y cuáles se resuelven en primera línea.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Profesionalizar el soporte al cliente en empresas fintech con procesos de KYC, disputas y cumplimiento regulatorio',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Primeros clientes sin portfolio: estrategias para freelancers que empiezan desde cero',
                'description'      => 'Consigue tus primeros proyectos freelance cuando no tienes trabajos previos que mostrar, usando estrategias probadas de prospección, credibilidad y propuesta de valor.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un mentor de freelancers con experiencia ayudando a decenas de profesionales a construir sus primeros ingresos independientes desde cero. Estoy empezando como freelance y mi mayor obstáculo es el círculo vicioso de "necesito proyectos para tener portfolio, pero necesito portfolio para conseguir proyectos". Ayúdame a romperlo.

**Mi situación:**
- Mi especialidad o servicio: [ej. diseño web, redacción, desarrollo, consultoría de marketing, SEO]
- Experiencia previa (aunque sea en empleo): [años y en qué]
- Mercado objetivo: [tipo de clientes y sector]
- Situación actual: [tengo trabajo y quiero hacer el salto / ya estoy a tiempo completo]
- Principal obstáculo: [no tengo portfolio / no sé cómo fijar precios / no sé dónde encontrar clientes / todo lo anterior]

---

## EL CÍRCULO VICIOSO Y CÓMO ROMPERLO

El error más común del freelancer nuevo: esperar a tener un portfolio perfecto antes de salir al mercado.

**La verdad:** El portfolio se construye mientras consigues clientes, no antes.

**Las 4 palancas para conseguir los primeros clientes sin portfolio:**

### Palanca 1: Tu Red Personal (la más subestimada)

Estadística real: el 60-80% de los primeros clientes de freelancers vienen de su red de contactos personal o profesional.

**Protocolo de activación de red:**

**Paso 1 — Inventario de contactos:**
Haz una lista de 50 personas que conoces personalmente: excompañeros, jefes anteriores, amigos de la universidad, contactos de LinkedIn. No filmes aún.

**Paso 2 — Mensaje de lanzamiento (no pidas trabajo directamente):**
```
Asunto: Novedad personal — [Tu nombre]

Hola [NOMBRE],

Espero que todo vaya bien. Te escribo porque acabo de lanzarme como freelance
especializado en [TU ESPECIALIDAD].

Mi propuesta de valor es [DESCRIBE EN 1 FRASE EL BENEFICIO CONCRETO QUE APORTAS].

No te pido trabajo — te pido que, si conoces a alguien que pueda necesitar este
tipo de ayuda, me tengas en mente. Una presentación vale más para mí que cualquier
campaña de marketing.

¿Hay alguien en tu entorno con quien creas que debería hablar?

Gracias de antemano,
[TU NOMBRE]
```

**Resultado típico:** De 50 emails, 2-5 referencias activas. Con 1 cliente cerrado tienes el inicio del portfolio.

---

### Palanca 2: Trabajo de Muestra (Spec Work estratégico)

No esperes que alguien te contrate para hacer el trabajo — haz el trabajo primero y muéstralo.

**Cómo hacerlo sin perder el tiempo:**

| Tipo de especialidad | Trabajo de muestra | Dónde publicar |
|---------------------|-------------------|---------------|
| Diseño web/gráfico | Rediseña la web de una empresa real que esté mal diseñada | Behance, Dribbble, LinkedIn |
| Copywriting/redacción | Escribe un artículo de blog para una empresa del sector | Medium, LinkedIn Articles |
| SEO | Auditoría pública de una web conocida | PDF en LinkedIn |
| Desarrollo | Construye un mini-proyecto open source relevante | GitHub |
| Consultoría de marketing | Análisis gratuito de la estrategia de una marca pública | LinkedIn |
| Video/fotografía | Proyecto personal temático | Instagram, YouTube |

**El truco:** Publica el trabajo, etiqueta a la empresa (opcional) y contacta con ellos directamente:

```
Hola [NOMBRE],

Me fijé en vuestra web y vi una oportunidad de mejora en [ÁREA ESPECÍFICA].
Me tomé la libertad de hacer un concepto rápido / análisis inicial — puedes
verlo aquí: [ENLACE].

No te pido nada a cambio. Si te parece útil y quieres explorar cómo podría
ayudaros a implementarlo, con mucho gusto hablamos.

[TU NOMBRE]
```

---

### Palanca 3: Plataformas de Freelance con Estrategia

Las plataformas (Fiverr, Upwork, Malt, Workana) funcionan, pero tienes que saber usarlas.

**Los errores más comunes:**
- Precio demasiado alto en el inicio (sin reseñas que lo justifiquen)
- Perfil genérico sin especialización clara
- Propuestas copy-paste sin personalización

**Estrategia de lanzamiento en plataformas:**

**Fase 1 (primeros 60 días):** Precio 30-40% por debajo del mercado, acepta proyectos pequeños, consigue 5-10 reseñas de 5 estrellas.
**Fase 2 (60-120 días):** Sube precios 20%, filtra proyectos más alineados con tu especialidad.
**Fase 3 (120+ días):** Precio de mercado, rechaza proyectos que no encajan, construyes reputación en un nicho.

---

### Palanca 4: Contenido + Prospección Directa

**El sistema de contenido mínimo viable para conseguir clientes:**
- 1 post de LinkedIn por semana sobre un problema real de tu cliente ideal
- No hablar de ti — hablar de los problemas que resuelves
- Al final de cada mes: 10 mensajes directos a personas que han interactuado con tu contenido

**Estructura del post de LinkedIn que genera leads:**
```
[PROBLEMA del cliente en primera línea — el gancho]

[HISTORIA breve o dato que amplifica el problema]

[TU INSIGHT o forma de verlo diferente]

[SOLUCIÓN o marco de pensamiento]

[LLAMADA A LA ACCIÓN suave: "¿Te ha pasado esto? Cuéntame en comentarios"]
```

---

## FIJACIÓN DE PRECIOS CUANDO EMPIEZAS

**El error del precio de subsistencia:** Fijar el precio según lo que necesitas ganar, no según el valor que aportas.

**Framework de pricing para freelancers nuevos:**

1. **Precio de mercado:** Investiga en Glassdoor, Malt, Linkedin lo que cobra alguien con 2-3 años de experiencia en tu especialidad en tu mercado.
2. **Tu precio inicial:** 60-70% de ese precio (justificado por falta de cartera, no por falta de habilidad).
3. **Tu precio de salida:** Después de 5 proyectos exitosos, vuelve al precio de mercado.

**Cómo presentar el precio bajo sin devaluarte:**
"Mis tarifas actuales están por debajo del mercado porque estoy construyendo mi cartera de proyectos. A cambio, necesito que el proyecto sea real y publicable, y que puedas dejarme una recomendación al finalizar."

---

## TAREA PARA CLAUDE

Con mi especialidad y contexto descritos:

1. **Plan de 30 días:** Dame un plan de acción día a día (no semana a semana) para los primeros 30 días como freelance para conseguir mi primer cliente pagado.

2. **Script de conversación:** Escribe el guión de la llamada de ventas con mi primer cliente potencial: cómo presento mi propuesta, qué preguntas hago y cómo cierro o propongo siguiente paso.

3. **Perfil de LinkedIn optimizado:** Dame la estructura y el texto de mi titular, resumen y sección "Destacado" en LinkedIn para atraer a mi cliente ideal aunque no tenga portfolio.

4. **Propuesta de trabajo de muestra:** Para mi especialidad concreta, dime exactamente qué trabajo de muestra hacer, para qué tipo de empresa y cómo presentarlo para maximizar las posibilidades de que me contraten.

5. **Plan de precios:** Sugiere mi estructura de tarifas inicial con al menos 3 paquetes o modalidades, con los argumentos para justificar el precio con un cliente nuevo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Conseguir los primeros clientes freelance sin portfolio con estrategias de prospección y credibilidad',
                'vote_score'       => 48,
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
