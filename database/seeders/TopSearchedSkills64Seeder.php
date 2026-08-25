<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills64Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de ciclo de vida del cliente',
                'description'      => 'Personaliza la comunicación según si el contacto es lead, nuevo cliente, activo, en riesgo de churn o ya ha cancelado. Cada fase requiere un mensaje, canal y cadencia diferente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en CRM y marketing de ciclo de vida con 10 años de experiencia en SaaS y ecommerce.

Voy a describir el contexto de mi negocio y necesito que me ayudes a construir una estrategia completa de marketing de ciclo de vida del cliente, segmentada por etapa del funnel.

**Contexto de mi negocio:**
[Describe brevemente tu producto/servicio, ticket medio, canal principal de adquisición y si es B2B o B2C]

---

## FASE 1 — DIAGNÓSTICO DEL ESTADO ACTUAL

Antes de proponer acciones, hazme las preguntas necesarias para entender en qué estado se encuentran mis métricas de ciclo de vida. Quiero que identifiques:

1. ¿Tengo definidas las etapas del ciclo de vida? ¿Cuáles son mis criterios para pasar un contacto de Lead a Cliente Activo, y de Activo a En Riesgo?
2. ¿Qué tasa de apertura, CTR y conversión tengo en cada etapa?
3. ¿En qué etapa pierdo más clientes?
4. ¿Cuánto tardo en identificar que un cliente está en riesgo?

---

## FASE 2 — DEFINICIÓN DE LAS 5 ETAPAS

Para cada etapa, define:

| Etapa | Criterio de entrada | Objetivo principal | KPI clave |
|---|---|---|---|
| Lead | Ha dejado un email o interactuado | Convertir a primera compra | Tasa de conversión lead→cliente |
| Cliente nuevo | Primera compra en los últimos 30 días | Activar y generar segunda compra | Time to second purchase |
| Cliente activo | Ha comprado en los últimos 90 días | Maximizar LTV y frecuencia | Frecuencia de compra, AOV |
| En riesgo | Sin actividad 60-90 días | Retener antes de que cancele | Churn rate, tasa de reactivación |
| Churned | Sin actividad +90 días o cancelación | Recuperar o aprender | Tasa de recuperación, NPS post-churn |

Adapta estos criterios a mi negocio específico.

---

## FASE 3 — ESTRATEGIA DE COMUNICACIÓN POR ETAPA

Para cada una de las 5 etapas diseña:

### Lead
- Secuencia de bienvenida: cuántos emails, con qué cadencia, qué contenido en cada uno
- Qué oferta o gancho usar para la primera conversión
- Cuándo y cómo hacer lead scoring para priorizar

### Cliente nuevo (onboarding)
- Email de bienvenida: qué debe decir exactamente (dame una plantilla)
- Secuencia de activación: los 3 hitos que debe alcanzar en los primeros 14 días
- Cuándo llamar o hacer un check-in proactivo si es B2B

### Cliente activo
- Programa de fidelización: ¿puntos, recompensas, acceso exclusivo?
- Cadencia de newsletters: frecuencia, ratio contenido/promoción (sugerencia: 80/20)
- Upsell y cross-sell: qué señales comportamentales usan para activarlos

### En riesgo
- Señal de alerta: qué comportamiento activa la secuencia de retención
- Secuencia de win-back: 3 emails con escalada de incentivo (primero valor, luego descuento mínimo, luego oferta fuerte)
- Cuándo escalar a una llamada del equipo de CS o ventas

### Churned
- Email de salida: qué preguntar, cómo hacerlo sin ser intrusivo
- Campaña de recuperación a los 30, 60 y 90 días
- Qué aprendizajes sistematizar para reducir el churn futuro

---

## FASE 4 — PLANTILLAS DE EMAIL

Escríbeme una plantilla de email completa para cada una de estas situaciones:

1. **Bienvenida al lead** (asunto + cuerpo de 150 palabras máximo, sin ser genérico)
2. **Onboarding día 3** (recordatorio del primer hito que debe alcanzar)
3. **Reactivación semana 1** (cliente en riesgo, tono empático, sin descuento todavía)
4. **Win-back con oferta** (cliente churned a los 60 días, incentivo claro)

Cada plantilla debe tener: asunto principal + asunto alternativo (A/B test), personalización con variables [NOMBRE], [PRODUCTO], [ACCIÓN_PENDIENTE], y un CTA único y claro.

---

## FASE 5 — AUTOMATIZACIÓN Y HERRAMIENTAS

Recomiéndame:
- Qué herramienta usar según mi presupuesto (opción gratuita, opción media, opción premium)
- Qué eventos debo trackear en mi CRM o ESP para que las automatizaciones funcionen
- Cómo estructuro los segmentos dinámicos para que un cliente cambie de etapa automáticamente
- Qué informe semanal debo revisar para detectar problemas antes de que escalen

---

## FASE 6 — PLAN DE IMPLEMENTACIÓN

Dame un plan de 8 semanas para implementar esta estrategia desde cero:

- Semanas 1-2: auditoría y configuración de segmentos
- Semanas 3-4: creación y activación de secuencias de lead y onboarding
- Semanas 5-6: secuencias de retención y win-back
- Semanas 7-8: primeras métricas, ajustes y optimización del copy

Al final, dame los 3 errores más comunes que cometen las empresas al implementar lifecycle marketing y cómo evitarlos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Diseñar una estrategia de marketing por etapa del ciclo de vida del cliente con plantillas de email y plan de automatización.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Clean architecture y arquitectura hexagonal',
                'description'      => 'Separa el dominio de la infraestructura para escribir código mantenible a largo plazo. Aprende a aplicar puertos, adaptadores y reglas de dependencia en proyectos reales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de software senior especializado en Domain-Driven Design, Clean Architecture y arquitectura hexagonal (Ports & Adapters).

Voy a describir mi proyecto actual y necesito que me ayudes a refactorizarlo o diseñarlo siguiendo estos principios de forma práctica, no solo teórica.

**Contexto de mi proyecto:**
[Describe tu stack: lenguaje, framework, tamaño del equipo, tipo de aplicación y el problema principal que tienes hoy: código acoplado, difícil de testear, difícil de escalar, etc.]

---

## PARTE 1 — FUNDAMENTOS PRÁCTICOS

Explícame de forma concisa (sin teoría abstracta) los tres conceptos clave que necesito entender antes de empezar:

1. **La Regla de Dependencia**: qué significa que las dependencias solo pueden apuntar hacia adentro, con un ejemplo concreto en mi stack
2. **La diferencia entre dominio, aplicación e infraestructura**: qué va en cada capa y qué NO puede entrar ahí
3. **Puertos y Adaptadores**: qué es un puerto (interfaz), qué es un adaptador (implementación), y cómo se conectan

---

## PARTE 2 — ESTRUCTURA DE CARPETAS

Dame la estructura de carpetas recomendada para mi proyecto. Quiero ver:

```
src/
├── Domain/
│   ├── Entities/
│   ├── ValueObjects/
│   ├── Repositories/       ← interfaces (puertos)
│   ├── Services/
│   └── Events/
├── Application/
│   ├── UseCases/
│   ├── DTOs/
│   └── Ports/              ← interfaces de servicios externos
└── Infrastructure/
    ├── Persistence/        ← adaptadores de repositorio
    ├── Http/
    ├── Queue/
    └── ExternalServices/   ← adaptadores de servicios externos
```

Adapta esta estructura a mi stack específico y explica por qué cada carpeta existe.

---

## PARTE 3 — EJEMPLO PRÁCTICO COMPLETO

Usando el caso de uso "Registrar un nuevo usuario", muéstrame el código completo para cada capa:

1. **Entidad de dominio** `User` con sus invariantes y validaciones de negocio
2. **Value Object** `Email` que encapsula la validación del email
3. **Puerto (interfaz)** `UserRepository` con los métodos necesarios
4. **Use Case** `RegisterUserUseCase` que orquesta el proceso
5. **DTO** `RegisterUserRequest` y `RegisterUserResponse`
6. **Adaptador de repositorio** `EloquentUserRepository` (o el ORM de mi stack)
7. **Controlador HTTP** que solo delega al use case, sin lógica de negocio

Para cada archivo, indica el namespace, las importaciones y añade comentarios en las líneas donde el principio es más importante de entender.

---

## PARTE 4 — CÓMO TESTEAR CADA CAPA

| Capa | Tipo de test | Qué mockear | Herramienta sugerida |
|---|---|---|---|
| Dominio | Unit test puro | Nada (sin dependencias) | PHPUnit / Jest |
| Aplicación | Unit test | Repositorios y servicios externos | Mockery / Jest |
| Infraestructura | Integration test | Base de datos real (en memoria) | TestContainers |
| HTTP | Feature/E2E test | Nada (prueba el flujo completo) | Supertest / Pest |

Muéstrame un test unitario completo para el `RegisterUserUseCase` con un repositorio mockeado.

---

## PARTE 5 — ERRORES COMUNES Y CÓMO EVITARLOS

Lista los 5 antipatrones más frecuentes cuando equipos intentan aplicar clean architecture:

1. Anemic Domain Model: entidades sin comportamiento, solo getters/setters
2. Use cases que hablan directamente con la base de datos
3. Lógica de negocio en los controladores
4. Value Objects que se saltan sus invariantes
5. Importar clases de infraestructura desde el dominio

Para cada uno: qué síntoma lo delata en el código, por qué es problemático y cómo corregirlo.

---

## PARTE 6 — PLAN DE MIGRACIÓN INCREMENTAL

Si mi proyecto ya existe y está acoplado, dame un plan para migrarlo sin reescribir todo desde cero:

- **Paso 1**: Identificar los bounded contexts
- **Paso 2**: Extraer las entidades de dominio más críticas
- **Paso 3**: Introducir repositorios como interfaces
- **Paso 4**: Crear use cases para la funcionalidad nueva (strangler fig pattern)
- **Paso 5**: Mover la lógica existente a use cases gradualmente

¿Cuánto tiempo estimarías para cada paso en un proyecto de tamaño mediano (50k líneas)?

Al final, dame los 3 libros o recursos que más recomiendas para profundizar en este tema.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 60,
                'use_case'         => 'Diseñar o refactorizar un proyecto siguiendo clean architecture y arquitectura hexagonal con ejemplos de código completos.',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de estados de carga',
                'description'      => 'Skeletons, spinners y feedback visual que reducen la percepción de lentitud en la interfaz. Aprende cuándo usar cada patrón y cómo implementarlos correctamente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de UX/UI especializado en performance percibida y diseño de microinteracciones con experiencia en productos digitales de alta escala.

Voy a describir mi producto y necesito que me ayudes a diseñar los estados de carga de forma que los usuarios perciban la interfaz como rápida, incluso cuando los tiempos de respuesta no son perfectos.

**Contexto de mi producto:**
[Describe tu tipo de app: web, móvil o ambas; los componentes que más tardan en cargar; tu stack de frontend; y el perfil de tu usuario]

---

## BLOQUE 1 — DIAGNÓSTICO: ¿QUÉ ESTADOS DE CARGA NECESITO?

Primero identifica conmigo qué tipos de carga existen en mi producto:

| Tipo de carga | Duración típica | Patrón recomendado | Cuándo NO usarlo |
|---|---|---|---|
| Carga inicial de página | +1s | Skeleton screen | No si el contenido es estático |
| Carga de sección/componente | 200ms - 2s | Skeleton localizado | No para acciones puntuales |
| Acción del usuario (botón) | 100ms - 500ms | Spinner en el botón | No para navegaciones |
| Carga progresiva (lista larga) | Variable | Skeleton + lazy load | No para datos críticos |
| Proceso en background | +5s | Progress bar + mensaje | No para cargas instantáneas |
| Estado de error tras timeout | Cualquiera | Error state con retry | Siempre que haya fallo |

Analiza mi caso y dime qué tipos de carga tengo y qué patrón aplicar en cada uno.

---

## BLOQUE 2 — SKELETON SCREENS

Explícame los principios de diseño de un buen skeleton screen:

1. **Proporciones reales**: por qué el skeleton debe replicar exactamente la proporción del contenido real
2. **Animación shimmer vs pulse**: cuándo usar el efecto de barrido lateral (shimmer) versus el parpadeo suave (pulse), con criterios concretos
3. **Número de elementos**: cuántos ítems skeleton mostrar en una lista cuando no sé cuántos hay realmente
4. **Color y contraste**: cómo definir los colores del skeleton en light mode y dark mode
5. **Duración máxima**: qué hacer si el skeleton lleva más de 3 segundos visible

Dame el código CSS/Tailwind para un skeleton card con:
- Imagen rectangular (16:9)
- Dos líneas de texto de ancho diferente
- Un avatar circular con nombre al lado
- Animación shimmer incluida

---

## BLOQUE 3 — SPINNERS Y ESTADOS DE BOTÓN

Reglas para estados de carga en botones de acción:

1. **El botón debe desactivarse** mientras la acción está en proceso (evitar doble submit)
2. **Sustituir el label** por un spinner + texto descriptivo ("Guardando…", "Enviando…", no solo "Cargando…")
3. **Tamaño del spinner**: proporcional al botón, nunca mayor que el texto original
4. **Feedback de éxito**: durante 1.5 segundos mostrar confirmación visual antes de cambiar de estado

Muéstrame el flujo de estados de un botón de formulario: idle → loading → success → error, con los estilos visuales para cada estado.

---

## BLOQUE 4 — PROGRESS BARS Y PROCESOS LARGOS

Para procesos que duran más de 5 segundos (subida de archivos, exportaciones, procesamiento):

1. **Progress bar determinista**: cuándo es posible mostrar el % real y cuándo es mejor evitarlo
2. **Progress bar indeterminista**: el patrón de barra que se mueve de izquierda a derecha en bucle
3. **Mensajes de contexto**: qué textos mostrar mientras el proceso avanza ("Analizando tu documento…", "Casi listo…", "Guardando los últimos cambios…")
4. **Cancelación**: cuándo ofrecer un botón de cancelar y cómo gestionar la cancelación sin dejar datos corruptos
5. **Notificación tras proceso en background**: cómo notificar al usuario cuando un proceso largo termina mientras estaba en otra sección

---

## BLOQUE 5 — OPTIMISTIC UI

Explícame el patrón de Optimistic UI y cuándo aplicarlo:

- Qué es: actualizar la UI como si la acción ya hubiera tenido éxito antes de recibir confirmación del servidor
- Cuándo usarlo: acciones de alta confianza (like, guardar en favoritos, reordenar una lista)
- Cuándo NO usarlo: acciones con consecuencias financieras, eliminación permanente, envío de mensajes críticos
- Cómo gestionar el rollback cuando la acción falla: animación de reversión, mensaje de error, qué hacer con el estado
- Ejemplo de código en React con useState y manejo de error con rollback

---

## BLOQUE 6 — CHECKLIST DE REVISIÓN

Dame un checklist de 15 puntos para auditar los estados de carga de cualquier producto digital, agrupado en tres categorías:

**Correctitud técnica** (5 puntos)
**Experiencia percibida** (5 puntos)
**Accesibilidad** (5 puntos): aria-live, aria-busy, anuncios para lectores de pantalla

Al final, dame los 3 errores de diseño de loading states que más daño hacen a la percepción de velocidad y cómo solucionarlos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'         => 'Diseñar estados de carga (skeletons, spinners, progress bars) que mejoran la percepción de velocidad de la interfaz.',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Negociación de contratos B2B',
                'description'      => 'Cómo negociar términos, SLAs, limitaciones de responsabilidad y condiciones de pago en contratos empresariales. Estrategias para cerrar acuerdos sin ceder en lo que más importa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director comercial senior con 15 años de experiencia cerrando contratos B2B de alto valor en sectores de software, servicios profesionales y tecnología.

Voy a describir la negociación que tengo por delante y necesito que me prepares una estrategia completa para cerrar en las mejores condiciones posibles.

**Contexto de la negociación:**
[Describe: tipo de contrato, valor aproximado del acuerdo, el poder relativo de ambas partes, los puntos que más me importan proteger y los que estoy dispuesto a ceder]

---

## MÓDULO 1 — PREPARACIÓN ANTES DE SENTARTE A NEGOCIAR

Antes de cualquier conversación, necesito que me ayudes a preparar:

### 1.1 Mapa de intereses
Para cada parte (yo y el cliente/proveedor), identifica:
- **Posición declarada**: lo que dicen que quieren
- **Interés real**: por qué lo quieren
- **Alternativa BATNA**: qué pasa si no llegamos a un acuerdo

### 1.2 Zonas de posible acuerdo
Crea una tabla con los 5-8 puntos más importantes del contrato y para cada uno:

| Punto | Mi posición ideal | Mi límite rojo | Su posición declarada | Zona de acuerdo probable |
|---|---|---|---|---|
| Precio | X | Y | Z | Entre Y y Z |
| Pago | Net 30 | Net 60 | Net 90 | Net 60 |
| SLA uptime | 99.9% | 99.5% | 99% | 99.5% |
| Penalización SLA | 15% MRR | 5% MRR | Sin penalización | 5-8% MRR |

### 1.3 Concesiones planificadas
Qué puedo ofrecer sin que me cueste margen real pero que tenga valor percibido para ellos (formación adicional, soporte prioritario, revisiones trimestrales, etc.)

---

## MÓDULO 2 — LOS 4 PUNTOS MÁS DUROS EN CONTRATOS B2B

### 2.1 SLAs y penalizaciones
- Cómo definir el uptime de forma que sea medible y no manipulable (ventanas de mantenimiento, cómo se calculan las horas del mes)
- Penalizaciones proporcionales al impacto real, no al capricho del cliente
- Límite máximo de penalización mensual (cláusula cap) para no destruir el margen
- Exclusiones razonables: ataques DDoS, fuerza mayor, problemas en infraestructura de terceros

### 2.2 Limitación de responsabilidad
- Por qué el límite de responsabilidad debe ser como máximo el valor del contrato anual
- Cómo redactar la cláusula para excluir daños indirectos, lucro cesante y pérdida de datos
- Casos en que el cliente intentará eliminar estas limitaciones y cómo responder
- Ejemplos de redacción que han pasado el filtro de grandes empresas

### 2.3 Condiciones de pago
- Estructura de pagos que protege mi flujo de caja: anticipo, hitos, cierre
- Cómo negociar con los departamentos de compras que tienen políticas de Net 90 sin moverte a Net 90
- Intereses de demora: cómo incluirlos sin que parezca agresivo
- Qué pasa si el cliente no paga: proceso, notificación, suspensión del servicio, resolución

### 2.4 Propiedad intelectual y datos
- Quién es propietario del trabajo entregado en un contrato de servicios profesionales
- Cómo proteger mi IP preexistente cuando desarrollo sobre ella para el cliente
- Cláusula de datos: qué datos del cliente manejo yo, durante cuánto tiempo y cómo los elimino al finalizar

---

## MÓDULO 3 — TÁCTICAS DE NEGOCIACIÓN

Dame las 5 tácticas más efectivas para este tipo de negociación:

1. **Anclaje**: quién debería hacer la primera oferta y por qué
2. **Bundling**: cómo agrupar concesiones para que parezcan un intercambio justo
3. **Tiempo**: cómo usar los plazos a tu favor sin parecer desesperado
4. **Escalada al superior**: cómo usar el "tengo que consultarlo con mi CEO" estratégicamente
5. **Framing de pérdida**: cómo presentar una propuesta en términos de lo que pierden si no la aceptan

---

## MÓDULO 4 — RESPUESTAS A LAS OBJECIONES MÁS COMUNES

Prepárame respuestas cortas, directas y no defensivas para:

- "Vuestro precio está un 30% por encima del mercado"
- "Necesitamos Net 90, es política de empresa"
- "No podemos aceptar penalizaciones por SLA, nuestro proveedor anterior tampoco las tenía"
- "Necesitamos que incluyáis responsabilidad ilimitada"
- "No podemos comprometernos a más de 6 meses de contrato"

---

## MÓDULO 5 — CIERRE Y POST-NEGOCIACIÓN

- Señales de que el cliente está listo para cerrar (verbales y no verbales en videollamada)
- Cómo hacer el resumen de acuerdos por escrito sin que parezca que estás desconfiando
- Qué hacer si la negociación se atasca: técnicas de desbloqueo
- Cómo gestionar la relación una vez firmado para que los puntos duramente negociados no generen fricción en la ejecución

Al final, dame las 3 cláusulas que nunca deberías firmar sin que tu abogado las revise y por qué.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 50,
                'use_case'         => 'Preparar y ejecutar negociaciones de contratos B2B: SLAs, responsabilidad, pagos y propiedad intelectual.',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de productos marketplace',
                'description'      => 'El chicken-and-egg problem en marketplaces: cómo construir oferta y demanda simultáneamente, qué lado atacar primero y cómo mantener el balance al crecer.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Product Manager especializado en marketplaces con experiencia en productos de doble cara (two-sided platforms). Has trabajado en compañías donde la dificultad principal era construir oferta y demanda simultáneamente sin que ninguno de los dos lados abandone por falta del otro.

Voy a describir mi marketplace y necesito ayuda para diseñar la estrategia de crecimiento y las decisiones de producto más importantes.

**Contexto de mi marketplace:**
[Describe: qué conectas (compradores con vendedores, empleadores con candidatos, etc.), en qué estado estás (idea, MVP, primeras transacciones, crecimiento), y cuál es el problema más urgente ahora mismo]

---

## PARTE 1 — DIAGNÓSTICO DEL CHICKEN-AND-EGG PROBLEM

Primero, ayúdame a entender exactamente en qué tipo de marketplace estoy y cuál de los dos lados es el cuello de botella real:

### 1.1 Clasificación de mi marketplace

| Dimensión | Opción A | Opción B | ¿Cuál es la mía? |
|---|---|---|---|
| Densidad geográfica | Local (necesita masa crítica por ciudad) | Global (cualquiera sirve a cualquiera) | |
| Fragmentación de oferta | Muchos pequeños proveedores | Pocos grandes proveedores | |
| Frecuencia de transacción | Baja (compra de casa) | Alta (taxi, delivery) | |
| Estandarización | Productos/servicios iguales | Altamente variables | |

### 1.2 Identificar el lado constrained
¿Qué lado es más difícil de conseguir y más difícil de reemplazar? Ese es el lado que debo atacar primero. Ayúdame a determinarlo con las preguntas correctas.

---

## PARTE 2 — ESTRATEGIAS PARA RESOLVER EL COLD START

Para mi caso concreto, recomiéndame cuál de estas estrategias usar y cómo ejecutarla:

### Estrategia 1: Subsidiar el lado constrained
- Pagar o incentivan fuertemente a la oferta para que esté disponible antes de tener demanda
- Cómo hacerlo sin quemar todo el runway antes de encontrar el product-market fit
- Cuándo dejar de subsidiar y cómo hacer esa transición

### Estrategia 2: Standalone value (valor sin el otro lado)
- Crear valor para un lado del mercado aunque el otro lado no exista todavía
- Ejemplo: una plataforma de freelancers que empieza siendo un directorio de perfiles antes de tener clientes
- Cómo diseño esto en mi producto

### Estrategia 3: Constrained launch (lanzamiento geográfico o de nicho)
- Concentrar toda la oferta y demanda en una ciudad, categoría o segmento concreto
- Criterios para elegir dónde concentrarme primero
- Plan para expandirse al siguiente mercado una vez el primero funciona

### Estrategia 4: Supply-first en modo B2B
- Conseguir proveedores/vendedores como clientes B2B antes de tener demanda orgánica
- Darles herramientas de gestión aunque no genere transacciones todavía
- Cómo convertir esa relación en marketplace cuando la demanda llegue

---

## PARTE 3 — MÉTRICAS CLAVE DE UN MARKETPLACE

Define para mí las métricas que importan en cada fase:

**Fase 0 — Validación**
- Número de transacciones facilitadas (aunque sea manualmente)
- NPS de compradores y vendedores por separado
- Repeat rate a 30 días

**Fase 1 — Tracción**
- Liquidity ratio: % de búsquedas que terminan en una transacción
- Time to first transaction: cuánto tarda un nuevo vendedor en su primera venta
- Concentration risk: % de GMV que viene de los top 10 proveedores

**Fase 2 — Escala**
- Take rate: comisión efectiva sobre GMV
- CAC split: coste de adquirir oferta vs. demanda por separado
- Cohort GMV: cuánto genera por mes cada cohorte de proveedores/compradores

Crea una tabla con las métricas, la fórmula de cálculo, el benchmark de referencia y qué palanca mueve cada una.

---

## PARTE 4 — DECISIONES DE PRODUCTO QUE DIFERENCIAN A UN MARKETPLACE

### 4.1 Estructura de comisiones
- Cobrar a la oferta, a la demanda o a los dos: cuál es mejor en mi caso y por qué
- Riesgo de desintermediación: cómo prevenirlo con producto (y no solo con contrato)
- Comisiones variables vs. fijas: cuándo conviene cada modelo

### 4.2 Confianza y calidad
- Sistema de reviews: cómo diseñarlo para que sea útil y no sea manipulado
- Verificación de identidad y credenciales: cuándo es necesario y cómo hacerlo sin fricción
- Garantías y política de disputas: qué cubre el marketplace y qué no

### 4.3 Matching y descubrimiento
- Cuándo usar un algoritmo de matching vs. búsqueda directa
- Cómo diseño la primera experiencia de un nuevo comprador que no sabe qué buscar
- Cómo evito que los compradores siempre elijan al mismo proveedor (concentración)

---

## PARTE 5 — ROADMAP DE LOS PRIMEROS 6 MESES

Dame un roadmap priorizado con:
- Las 3 features que debo construir primero (y por qué)
- Las 3 features que parecen urgentes pero en realidad son prematuras
- Cómo sé cuándo he superado el cold start y puedo pasar al modo de escala

Al final, dame los 2 marketplaces cuya historia de crecimiento más se parece a la mía y qué lección concreta puedo extraer de cada uno.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 55,
                'use_case'         => 'Diseñar la estrategia de producto y crecimiento para superar el cold start de un marketplace de dos lados.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Entrevistas conductuales STAR',
                'description'      => 'Diseña y conduce entrevistas conductuales basadas en la metodología STAR que predicen el desempeño real mejor que las preguntas técnicas o de personalidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en selección de talento y psicología organizacional con certificación en entrevistas conductuales estructuradas. Has diseñado procesos de selección para empresas tecnológicas, consultoras y startups en fase de escala.

Voy a describir el rol que estoy contratando y necesito que me ayudes a diseñar el proceso de entrevista conductual más efectivo posible para predecir el desempeño real.

**Contexto del rol:**
[Describe el puesto, nivel de senioridad, las 3 competencias más críticas para el éxito en ese rol y los principales retos que tendrá que afrontar]

---

## MÓDULO 1 — POR QUÉ LAS ENTREVISTAS CONDUCTUALES PREDICEN MEJOR EL DESEMPEÑO

Explícame brevemente (sin teoría innecesaria) las bases científicas:
- Por qué el comportamiento pasado en contextos similares predice el comportamiento futuro mejor que las hipotéticas ("¿qué harías si…?")
- Qué sesgos cognitivos eliminan las entrevistas estructuradas que las no estructuradas amplifican
- Qué dice la investigación sobre la validez predictiva comparada con tests de personalidad, GPA y entrevistas no estructuradas

---

## MÓDULO 2 — IDENTIFICAR LAS COMPETENCIAS CLAVE

Para el rol que estoy contratando, ayúdame a:

### 2.1 Definir 5 competencias críticas
Para cada competencia define:
- Nombre de la competencia
- Definición conductual observable (qué hace alguien que la tiene en alto nivel)
- Por qué es crítica para este rol específico
- Señales de que alguien tiene esta competencia en nivel bajo, medio y alto

Ejemplo de formato:
| Competencia | Definición observable | Por qué crítica | Señales nivel bajo | Señales nivel alto |
|---|---|---|---|---|
| Gestión de ambigüedad | Toma decisiones con información incompleta | El rol requiere definir procesos inexistentes | Espera instrucciones claras | Crea estructura donde no la hay |

### 2.2 Priorizar qué competencias evaluar en cada etapa
Si tenemos 3 fases de entrevista (screening, competencial, encaje cultural), cuáles evalúo en cada fase y con qué profundidad.

---

## MÓDULO 3 — BANCO DE PREGUNTAS STAR

Para cada una de las 5 competencias, escríbeme:
- **Pregunta principal** (abierta, que active un recuerdo específico)
- **3 preguntas de profundización** (para extraer el S, T, A y R completo cuando la respuesta es vaga)
- **Pregunta de contraste** (para verificar que la historia es auténtica y no ensayada)

Ejemplo de estructura:
- Principal: "Cuéntame una situación en la que tuviste que tomar una decisión importante con poca información disponible."
- Profundización: "¿Cuánta información tenías en ese momento? ¿Qué opciones barajaste? ¿Qué criterio usaste para decidir?"
- Contraste: "Si pudieras volver atrás, ¿cambiarías algo de cómo lo gestionaste?"

---

## MÓDULO 4 — GUÍA DE EVALUACIÓN

### 4.1 Rúbrica de puntuación
Para cada competencia, crea una rúbrica de 1 a 4:
- **1 — No cumple**: descripción de la respuesta tipo
- **2 — Cumple parcialmente**: descripción
- **3 — Cumple**: descripción
- **4 — Supera**: descripción

### 4.2 Señales de alerta en las respuestas
Lista las 8 señales de que una respuesta STAR está inflada, ensayada o no refleja la realidad:
- Usa "nosotros" en lugar de "yo" sin especificar su contribución
- El resultado fue siempre positivo y nunca describe fallos
- No puede dar detalles específicos cuando se profundiza
- [Continúa la lista]

### 4.3 Calibración entre entrevistadores
Cómo asegurar que dos personas que entrevistan al mismo candidato llegan a valoraciones comparables: proceso de calibración, plantilla de notas y cómo resolver discrepancias.

---

## MÓDULO 5 — ESTRUCTURA DE LA ENTREVISTA

Dame el guión completo de una entrevista conductual de 60 minutos:

- **0-5 min**: apertura (cómo explicar el formato al candidato sin spoilear)
- **5-45 min**: preguntas (cómo distribuir el tiempo entre 3-4 competencias)
- **45-55 min**: preguntas del candidato (qué preguntas revelan también información sobre él)
- **55-60 min**: cierre y próximos pasos

---

## MÓDULO 6 — DIVERSIDAD E INCLUSIÓN EN ENTREVISTAS CONDUCTUALES

Cómo asegurar que el proceso no discrimina:
- Preguntas que hay que evitar (aunque parezcan inocentes) y por qué en cada legislación
- Cómo hacer que los candidatos con menos experiencia laboral (recién graduados, cambios de sector) puedan demostrar competencias con ejemplos no laborales
- Cómo detectar y contrarrestar el sesgo de afinidad en la evaluación

Al final, dame una plantilla en formato tabla lista para usar como scorecard de evaluación de candidatos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'         => 'Diseñar entrevistas conductuales STAR efectivas con bancos de preguntas, rúbricas y guión estructurado.',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Contabilidad de costes por proyecto',
                'description'      => 'Imputa los costes correctamente para saber qué proyectos son rentables y cuáles no. Metodología práctica de contabilidad analítica para empresas de servicios y agencias.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un controller financiero especializado en contabilidad analítica y rentabilidad por proyecto para empresas de servicios, agencias, consultoras y estudios de diseño.

Voy a describir mi empresa y necesito que me ayudes a montar un sistema de contabilidad de costes por proyecto que funcione en la práctica, no solo en teoría.

**Contexto de mi empresa:**
[Describe: tipo de negocio, número de proyectos activos simultáneos, tamaño del equipo, principales tipos de coste y la herramienta que usas ahora (Excel, Holded, Sage, etc.)]

---

## BLOQUE 1 — TIPOS DE COSTES Y CÓMO CLASIFICARLOS

Explícame la clasificación que usaremos:

| Tipo de coste | Definición | Ejemplo concreto | ¿Directo o indirecto? |
|---|---|---|---|
| Coste directo de personal | Horas trabajadas en el proyecto | Horas del diseñador en el proyecto X | Directo |
| Coste directo de materiales | Compras específicas del proyecto | Licencia de stock photos para campaña | Directo |
| Coste de subcontratación | Freelancers o proveedores específicos | Fotógrafo para sesión del cliente | Directo |
| Gastos generales directos | Gastos asignables al proyecto | Viajes para reuniones del proyecto | Directo |
| Coste indirecto de personal | Gestión, administración, dirección | Horas del CEO en reunión interna | Indirecto |
| Gastos de estructura | Alquiler, suministros, software base | Oficina, Slack, Google Workspace | Indirecto |

Para mi empresa específica, ¿hay algún coste que sea difícil de clasificar? ¿Cómo lo trato?

---

## BLOQUE 2 — IMPUTACIÓN DE COSTES INDIRECTOS

El mayor problema en contabilidad por proyecto es cómo repartir los costes indirectos. Explícame los tres métodos y cuál me recomiendas:

### Método 1: Por horas facturadas
- Fórmula: Coste indirecto total / Horas facturables totales = Overhead por hora
- Cuándo funciona bien y cuándo distorsiona
- Cómo calcular la tasa de overhead para mi empresa

### Método 2: Por ingresos
- Fórmula: Coste indirecto total / Ingresos totales = % overhead sobre ingresos
- Aplicación: cada proyecto absorbe su % según los ingresos que genera
- Problema: los proyectos de menor precio absorben menos overhead pero consumen los mismos recursos

### Método 3: ABC (Activity-Based Costing simplificado)
- Identificar las actividades que consumen recursos indirectos (reuniones de gestión, soporte posventa, facturación)
- Asignar un cost driver a cada actividad
- Distribuir según consumo real de actividades
- Cuándo compensa este nivel de complejidad vs. la precisión que aporta

---

## BLOQUE 3 — COSTE DE PERSONAL: EL ERROR MÁS COMÚN

El error más frecuente es calcular mal el coste real de una persona. Ayúdame a calcular correctamente:

### Coste empleado por hora
Fórmula completa:
```
Coste anual empleado =
  Salario bruto
+ Seguridad Social empresa (~30%)
+ Beneficios (seguro médico, formación, dietas)
+ Equipamiento amortizado (portátil, software)
÷ Horas productivas reales al año
```

**Horas productivas reales:**
```
Horas totales anuales:                2.000h
- Vacaciones (22 días × 8h):          -176h
- Festivos (12 días × 8h):             -96h
- Bajas estimadas (5 días × 8h):       -40h
- Formación y reuniones internas:     -120h
- Gestión administrativa:             -100h
= Horas facturables reales:         ~1.468h
```

Calcula para mí la tasa horaria real de cada perfil de mi equipo y por qué usar el salario bruto mensual dividido entre 160h es un error grave.

---

## BLOQUE 4 — ESTRUCTURA DEL P&L POR PROYECTO

Diseñame una plantilla de cuenta de resultados por proyecto:

```
INGRESOS DEL PROYECTO:                     [€ / %]
  Ingresos facturados                       100%

COSTES DIRECTOS:
  Personal directo (horas × tasa)
  Subcontratación
  Materiales y compras
  Gastos directos del proyecto
TOTAL COSTES DIRECTOS:

MARGEN BRUTO DEL PROYECTO:                 [€ / %]
  (objetivo: >50% en servicios)

COSTES INDIRECTOS IMPUTADOS:
  Overhead de estructura (método elegido)
  Coste de ventas y marketing imputable

MARGEN NETO DEL PROYECTO:                  [€ / %]
  (objetivo: >20% en servicios)
```

Explícame qué umbral de margen bruto me debe preocupar y qué acciones tomar.

---

## BLOQUE 5 — IMPLEMENTACIÓN PRÁCTICA

### Seguimiento de horas
- Por qué es imprescindible aunque "el equipo odie los timesheets"
- Qué herramientas usar (Toggl, Harvest, Clockify) y cómo configurarlas
- Frecuencia de registro: diario es el único que funciona, semanal distorsiona

### Cierre mensual por proyecto
- Qué revisar el día 5 de cada mes para cada proyecto activo
- Señal de alerta temprana: cuándo el coste real supera el 60% del presupuesto y aún queda el 40% del trabajo

### Rentabilidad acumulada de cliente
- Cómo calcular si un cliente es rentable sumando todos sus proyectos históricos
- Cuándo tiene sentido un proyecto deficitario en el contexto de la relación global

Al final, dame una plantilla en formato tabla para hacer el seguimiento semanal de la rentabilidad de 5 proyectos activos simultáneamente.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Montar un sistema de contabilidad de costes por proyecto para saber qué clientes y proyectos son rentables.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Protección de datos en marketing digital',
                'description'      => 'Cookies, retargeting, consentimiento y compliance RGPD en campañas de performance marketing. Cómo seguir siendo efectivo sin incumplir la normativa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en protección de datos y un experto en marketing digital que trabajan conjuntamente. Tu objetivo es ayudarme a diseñar campañas de marketing digital que sean efectivas Y legalmente conformes con el RGPD y la normativa española (LOPDGDD).

**Contexto de mi empresa:**
[Describe tu modelo de negocio, los canales de marketing que usas (Meta Ads, Google Ads, email marketing, etc.), si tu audiencia es solo española o europea, y si ya tienes un DPO o asesor legal]

---

## ÁREA 1 — FUNDAMENTOS LEGALES QUE TODO MARKETER DEBE CONOCER

Explícame de forma práctica (sin jerga legal innecesaria):

### 1.1 Las bases legales para el tratamiento de datos en marketing
| Base legal | Cuándo aplica | Ejemplo concreto | Ventaja | Riesgo |
|---|---|---|---|---|
| Consentimiento | Cookies, email marketing | Banner de cookies, formulario de suscripción | Flexible | Puede retirarse en cualquier momento |
| Interés legítimo | Retargeting a clientes actuales | Mostrar anuncios a quien ya compró | No necesita consentimiento previo | Requiere test de ponderación |
| Ejecución de contrato | Comunicaciones transaccionales | Email de confirmación de pedido | Obligatorio facilitar | No permite marketing adicional |

¿Cuál puedo usar en cada situación concreta de mi negocio?

### 1.2 El consentimiento válido según el RGPD
Qué debe cumplir para ser válido:
- Libre, específico, informado e inequívoco
- Granular: por cada finalidad por separado
- Documentado: tienes que poder probar que lo obtuviste
- Revocable: igual de fácil retirar que dar

Dame ejemplos de consentimiento válido vs. inválido con capturas de pantalla descritas.

---

## ÁREA 2 — COOKIES Y RASTREO

### 2.1 Clasificación de cookies que debo conocer
| Tipo | Descripción | ¿Requiere consentimiento? | Ejemplos |
|---|---|---|---|
| Técnicas/necesarias | Funcionamiento del sitio | No | Sesión, CSRF token |
| Analíticas | Medición de visitas | Sí (o anonimización) | GA4, Hotjar |
| Marketing/publicidad | Retargeting y conversiones | Sí, explícito | Meta Pixel, Google Ads |
| Personalización | UX basada en comportamiento | Sí | Recomendaciones |

### 2.2 El banner de cookies: lo que la ley exige y lo que muchas empresas hacen mal
- Por qué el "continuar navegando implica aceptación" es ilegal
- Por qué el botón de rechazar debe ser tan visible y fácil como el de aceptar
- Qué información debe aparecer en el primer nivel vs. el segundo nivel (política completa)
- Cuándo necesitas un Consent Management Platform (CMP) y cuáles son conformes con el IAB TCF 2.2

### 2.3 Server-side tracking: la solución técnica para seguir midiendo con privacidad
- Qué es el server-side tagging y por qué reduce la dependencia de cookies de terceros
- Cómo implementar con Google Tag Manager server-side o Stape
- Qué datos puedes enviar a Meta Conversions API y Google Enhanced Conversions sin violar el RGPD
- Diferencia entre hashing (SHA-256) y anonimización y por qué importa legalmente

---

## ÁREA 3 — EMAIL MARKETING Y RGPD

### 3.1 La lista de email: cómo construirla de forma legal
- Double opt-in: por qué es la mejor práctica aunque no sea obligatorio
- Qué información debo incluir en el formulario de suscripción (finalidad, responsable, derechos)
- Cómo gestionar las listas antiguas obtenidas sin consentimiento explícito claro
- Listas compradas: por qué es una práctica de riesgo alto y qué consecuencias tiene

### 3.2 Derechos de los usuarios que debo poder satisfacer
| Derecho | Plazo de respuesta | Cómo lo gestiono |
|---|---|---|
| Acceso | 1 mes | Exportar todos sus datos |
| Rectificación | 1 mes | Corregir datos incorrectos |
| Supresión (derecho al olvido) | 1 mes | Borrar y documentar |
| Oposición | Inmediato | Dar de baja de comunicaciones |
| Portabilidad | 1 mes | Formato estructurado y legible |

¿Qué sistema técnico necesito para gestionar estos derechos sin morir en el intento?

---

## ÁREA 4 — RETARGETING Y AUDIENCIAS PERSONALIZADAS

### 4.1 Custom Audiences en Meta y Google
- Qué datos puedo subir (emails de clientes) y bajo qué base legal
- Cómo documentar el consentimiento de esa lista antes de subirla
- Lookalike Audiences: implicaciones legales al crear audiencias similares
- Customer Match en Google: requisitos específicos

### 4.2 Retargeting con píxel
- Qué base legal usar: ¿consentimiento o interés legítimo?
- Si uso interés legítimo, cómo hago el test de ponderación y lo documento
- Ventanas de retargeting recomendadas desde el punto de vista legal y de efectividad

---

## ÁREA 5 — PLAN DE COMPLIANCE PARA MARKETING

Dame una lista de verificación de 20 puntos para auditar el compliance de mis campañas de marketing digital, agrupados en:
- Sitio web y cookies (7 puntos)
- Email marketing (5 puntos)
- Publicidad pagada (5 puntos)
- Documentación y procesos (3 puntos)

Al final, dame los 3 casos de sanción de la AEPD relacionados con marketing digital que más debería conocer y qué enseñanza práctica extraer de cada uno.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'         => 'Hacer compliance RGPD en marketing digital: cookies, consentimiento, retargeting y email marketing.',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Rol del soporte en incidencias críticas',
                'description'      => 'Cómo gestiona el equipo de CS la comunicación con clientes durante un P0 o P1 cuando el producto está caído. Procesos, plantillas y coordinación con el equipo técnico.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Director de Customer Success con experiencia en SaaS empresarial que ha gestionado múltiples incidencias P0 y P1. Conoces tanto el lado técnico como el de comunicación con clientes durante una crisis.

Voy a describir mi empresa y necesito que me ayudes a diseñar el protocolo completo de gestión de incidencias críticas desde el punto de vista del equipo de Customer Success.

**Contexto de mi empresa:**
[Describe: tipo de producto SaaS, tamaño de la base de clientes, si tienes clientes enterprise con SLAs contractuales, y qué herramienta de soporte usas (Intercom, Zendesk, etc.)]

---

## PARTE 1 — CLASIFICACIÓN DE INCIDENCIAS

Primero, define el sistema de severidades que usará el equipo:

| Severidad | Definición | Ejemplos | Tiempo de primera respuesta | Tiempo de resolución objetivo |
|---|---|---|---|---|
| P0 — Crítica | El producto está completamente caído para todos los usuarios | Login no funciona, datos inaccesibles | 5 minutos | 2 horas |
| P1 — Alta | Funcionalidad core no disponible para un segmento | Pagos fallan, exportaciones rotas | 15 minutos | 4 horas |
| P2 — Media | Funcionalidad secundaria degradada | Notificaciones lentas, búsqueda intermitente | 1 hora | 24 horas |
| P3 — Baja | Incidencia menor o cosmética | Bug visual, texto incorrecto | 4 horas | 72 horas |

¿Cómo adapto estas definiciones a mi producto específico?

---

## PARTE 2 — ROLES DURANTE UNA INCIDENCIA P0/P1

Define claramente quién hace qué desde el momento en que se detecta la incidencia:

### Incident Commander (IC)
- Quién asume este rol (¿siempre el mismo? ¿rotación?)
- Sus responsabilidades exclusivas: coordinar, no ejecutar
- Cómo declara oficialmente el inicio de la incidencia y cómo la cierra

### Rol del equipo de CS durante la incidencia
- CS Lead de guardia: primera persona en recibir el escalado de clientes
- Comunicador externo: quién escribe los updates públicos (status page, emails)
- Gestor de stakeholders: quién llama a los clientes enterprise afectados
- Cómo coordina CS con Engineering sin bloquear el trabajo técnico

### Escalado
- En qué momento CS escala al CTO o CEO
- En qué momento se activa el war room (sala de crisis con todos los leads)

---

## PARTE 3 — COMUNICACIÓN EXTERNA DURANTE LA INCIDENCIA

### 3.1 Status page
- Qué información publicar en cada momento: ¿qué sabemos, qué no sabemos, qué estamos haciendo?
- Frecuencia de actualizaciones: cada 30 minutos mientras está activa la P0
- El error más común: decir "estamos investigando" durante 3 horas sin más información

### 3.2 Plantillas de comunicación por canal

**Primer update (incidencia confirmada, causa desconocida):**
```
Asunto: [Incidencia] Problemas con [nombre del producto] - [HH:MM]

Estamos al tanto de que algunos usuarios están experimentando
dificultades con [descripción breve del problema].
Nuestro equipo técnico ya está trabajando en ello.
Actualizaremos esta comunicación en 30 minutos o antes.
```

**Update intermedio (causa identificada, trabajando en solución):**
```
Actualización [HH:MM]:
Hemos identificado la causa raíz del problema: [descripción
técnica simplificada]. Estamos implementando la solución.
Estimamos que el servicio estará restaurado en [tiempo].
```

**Resolución confirmada:**
```
El problema ha sido resuelto a las [HH:MM].
Todos los servicios están operativos con normalidad.
[Opcional: breve explicación de la causa]
Pedimos disculpas por las molestias ocasionadas.
```

Escríbeme versiones más largas de estas plantillas para email a clientes enterprise afectados, con tono apropiado para una comunicación formal.

### 3.3 Gestión de clientes enterprise durante la incidencia
- A quién llamar primero (ordena por impacto: MRR en riesgo, SLA contractual, contrato en renovación)
- Qué decir exactamente en la primera llamada (guión de 2 minutos)
- Cómo gestionar al cliente que está muy enfadado sin prometer cosas que no puedes garantizar
- Cuándo ofrecer compensación y cuándo no hacerlo todavía

---

## PARTE 4 — POST-INCIDENCIA

### 4.1 El post-mortem (desde el punto de vista de CS)
- Qué información aporta CS al post-mortem técnico
- Cuántos clientes se vieron afectados, cuánto tiempo, cuántos contactaron con soporte
- Qué promesas de seguimiento se hicieron y a quién

### 4.2 Comunicación de seguimiento (48h después)
- Email de seguimiento a todos los afectados: reconocimiento, explicación sin excusas, medidas preventivas
- Reunión de revisión con los clientes enterprise más afectados: cómo prepararla
- Cuándo y cómo ofrecer compensación (crédito de servicio, extensión de contrato)

### 4.3 Actualización de procesos
- Cómo documentar lo aprendido para mejorar la respuesta la próxima vez
- Qué runbook actualizar o crear
- Cómo hacer el drill (simulacro) trimestral para que el equipo no improvise cuando pasa de verdad

---

## PARTE 5 — HERRAMIENTAS Y PREPARACIÓN

Dame una lista de las herramientas que debe tener configuradas el equipo de CS antes de que ocurra una incidencia:
- Alertas: cómo CS se entera de una incidencia antes que los clientes
- Canal de comunicación interna durante la crisis (Slack #incident, PagerDuty)
- Status page: opciones (Statuspage.io, BetterUptime) y qué configurar en frío
- Runbook de CS: qué debe contener y dónde alojarlo

Al final, dame las 3 lecciones más importantes que CS aprende después de su primera incidencia crítica mal gestionada.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'         => 'Diseñar el protocolo de CS para gestionar incidencias críticas P0/P1 con plantillas de comunicación y roles.',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Value-based pricing en la práctica',
                'description'      => 'Cómo cobrar por el resultado que produces para el cliente y no por el tiempo invertido. Metodología para calcular el precio basado en valor y defenderlo ante el cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un coach de negocio especializado en estrategia de precios para freelancers y consultores independientes. Has ayudado a más de 200 freelancers a duplicar sus ingresos sin trabajar más horas, principalmente mediante la transición de precio por hora a precio por valor.

Voy a describir mi situación actual y necesito que me guíes en el proceso de implementar value-based pricing de forma práctica, empezando desde esta semana.

**Contexto actual:**
[Describe: tu especialidad (diseño, desarrollo, marketing, etc.), tu tarifa actual (por hora o por proyecto), el tipo de cliente con el que trabajas y el resultado más tangible que produces para ellos]

---

## MÓDULO 1 — POR QUÉ EL PRECIO POR HORA TE PENALIZA

Explícame los problemas estructurales del modelo hora/proyecto para que pueda argumentarlo internamente y también con clientes que me pregunten por qué "no cobras por horas":

1. **El techo de ingresos**: si cobras por hora, la única forma de ganar más es trabajar más horas
2. **El incentivo perverso**: el precio por hora penaliza la eficiencia (cuanto más rápido eres, menos ganas)
3. **El problema de la comparación**: el cliente compara tu hora con la de otro proveedor, no el resultado
4. **El coste de visibilidad**: mostrar cuántas horas tardas en algo revela información que el cliente no necesita saber
5. **La desconexión con el valor**: 10 horas pueden crear 10.000€ de valor o 100€ de valor, y el precio por hora trata ambos igual

---

## MÓDULO 2 — QUÉ ES EL VALOR Y CÓMO SE CALCULA

### 2.1 Los tres tipos de valor que puedes crear

| Tipo de valor | Descripción | Ejemplo en mi especialidad | Cómo se cuantifica |
|---|---|---|---|
| Económico directo | Ingresos adicionales o ahorro de costes | Rediseño de landing que aumenta conversiones | €/mes de incremento de ingresos |
| Económico indirecto | Reducción de riesgo, tiempo ahorrado | Automatización que elimina trabajo manual | Coste del tiempo ahorrado × horas/mes |
| Estratégico | Ventaja competitiva, posicionamiento | Identidad de marca diferenciadora | Más difícil de cuantificar, pero existe |

### 2.2 La conversación de descubrimiento de valor

Escríbeme las 7 preguntas que debo hacer al cliente ANTES de dar ningún precio, para entender qué valor tiene el proyecto para ellos:

1. "¿Cuál es el resultado ideal de este proyecto para ti en los próximos 12 meses?"
2. [Dame las 6 siguientes, ordenadas de menor a mayor incomodidad para el cliente, con el propósito de cada pregunta]

Esta conversación es fundamental: si el cliente no te cuenta el valor, no puedes calcularlo. Ayúdame también a cómo presentar estas preguntas sin que el cliente sienta que lo estoy interrogando.

### 2.3 La fórmula de cálculo

```
Valor total del proyecto para el cliente:          [€ X]
× Tu contribución estimada al resultado:           [% Y]  (¿qué % del resultado depende de ti?)
= Valor atribuible a tu trabajo:                   [€ Z]
× Tasa de captura recomendada (10-20%):            [% W]
= Precio mínimo orientativo:                       [€]
```

Muéstrame este cálculo con un ejemplo concreto de mi especialidad.

---

## MÓDULO 3 — ESTRUCTURA DE PRECIOS

### 3.1 El sistema de 3 opciones (Good, Better, Best)

Por qué ofrecer tres opciones en lugar de un precio único aumenta el ticket medio:
- La opción del medio es donde va el 60-70% de los clientes (efecto anclaje)
- La opción alta hace que la media parezca razonable
- La opción baja delimita el mínimo con el que trabajas

Diseña para mí tres opciones (Essential, Standard, Premium) para mi servicio principal con:
- Qué incluye cada una (lista de entregables)
- El precio de cada una
- El argumento para subir de Essential a Standard

### 3.2 Precios por proyecto vs. por retainer
- Cuándo conviene cobrar por proyecto: cuando el alcance está claro y acotado
- Cuándo conviene un retainer mensual: cuando el cliente necesita disponibilidad continuada
- Cómo calcular el precio del retainer para que sea justo para los dos
- Cómo proponer el paso de proyecto puntual a retainer cuando la relación va bien

---

## MÓDULO 4 — CÓMO DEFENDER EL PRECIO

### 4.1 Respuestas a las objeciones más comunes

"Otro proveedor me ha dado el mismo servicio por la mitad del precio"
→ [Respuesta que no es defensiva ni agresiva, que redirige al valor]

"¿Cuántas horas te va a llevar esto?"
→ [Respuesta que reencuadra la pregunta sin ser evasivo]

"Tenemos un presupuesto limitado de X€, ¿puedes ajustarte?"
→ [Respuesta que no baja el precio sin cambiar el alcance]

"Necesito pensármelo" (cuando en realidad el precio le parece alto)
→ [Cómo detectarlo y qué hacer]

### 4.2 El silencio estratégico
- Por qué después de decir el precio debes callarte
- Qué ocurre en la mente del cliente en esos 5-10 segundos de silencio
- Cómo reaccionar si la primera respuesta del cliente es "uf"

---

## MÓDULO 5 — TRANSICIÓN GRADUAL

Si tengo clientes actuales que me pagan por hora, cómo hago la transición sin perderlos:

1. **Con los clientes nuevos**: implementar value-based pricing desde la primera conversación
2. **Con los clientes actuales**: cuándo y cómo comunicar el cambio de modelo
3. **El cliente que no acepta el nuevo modelo**: cómo gestionar esa conversación y cuándo es correcto dejar de trabajar con él

Dame un plan de 90 días para implementar este modelo empezando desde cero, con hitos claros para cada mes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 40,
                'use_case'         => 'Implementar value-based pricing como freelance: cómo calcular, estructurar y defender un precio basado en el valor que produces.',
                'vote_score'       => 44,
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
