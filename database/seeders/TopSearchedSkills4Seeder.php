<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills4Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Plan de lanzamiento de producto en redes sociales: de 0 a trending en 7 días',
                'description'       => 'Orquesta el lanzamiento de cualquier producto o feature en redes sociales con un plan de 7 días, calendario de posts por plataforma, activos de contenido y sistema de amplificación con embajadores.',
                'prompt_content'    => <<<'PROMPT'
Eres un growth marketer especializado en lanzamientos virales en redes sociales con experiencia en Product Hunt, Twitter/X y LinkedIn.

Mi lanzamiento:
- Producto o feature que lanzo: [descripción]
- Fecha de lanzamiento: [fecha]
- Audiencia objetivo: [perfil]
- Plataformas principales: [Twitter/X / LinkedIn / Instagram / TikTok / todas]
- Presupuesto para paid (si hay): [€ o "orgánico puro"]
- Embajadores o influencers disponibles: [sí/no — quiénes]
- Mayor competidor que ya existe: [nombre]

Genera el plan completo:

## Plan de Lanzamiento — [Producto] — [Fecha]

### 📅 Calendario de 7 días (día a día)

**D-7 — Teaser:**
- Twitter/X: [post exacto]
- LinkedIn: [post exacto]
- Instagram/TikTok: [idea de contenido]

**D-3 — Build-up:**
- [posts exactos por plataforma]
- Email a waiting list: [subject + cuerpo]

**D-1 — Cuenta atrás:**
- [posts exactos]
- DMs de activación a embajadores: [mensaje]

**D-DAY — Lanzamiento:**
- Primera hora: [secuencia exacta de acciones]
- Posts programados: [textos completos]
- Respuestas tipo para comentarios: [templates]

**D+1 a D+7 — Momentum:**
- [posts de social proof, behind the scenes, métricas]

### 🎨 Activos de contenido necesarios
Lista de imágenes, vídeos y copy que necesitas crear antes del lanzamiento.

### 🔁 Sistema de amplificación
Cómo activar a tu red, embajadores y empleados para el máximo alcance en las primeras 2 horas.

### 📊 Métricas a seguir hora a hora el día del lanzamiento
KPIs clave y cuándo considerar que el lanzamiento es un éxito.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Product launch, social media marketing, growth',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Arquitectura de microservicios: decide cuándo usarlos y cómo diseñarlos',
                'description'       => 'Evalúa si microservicios son la solución correcta para tu problema, diseña la arquitectura con los bounded contexts correctos y documenta las decisiones técnicas en Architecture Decision Records.',
                'prompt_content'    => <<<'PROMPT'
Eres un software architect con 15 años de experiencia migrando monolitos a microservicios (y también decidiendo cuándo NO hacerlo).

Contexto de mi sistema:
- Descripción del sistema actual: [monolito / servicios / greenfield]
- Lenguajes y stack: [tech stack]
- Número de desarrolladores en el equipo: [N]
- Dominio de negocio: [e-commerce / fintech / SaaS / marketplace / otro]
- Problema que quieres resolver con microservicios: [escalabilidad / deploy independiente / equipos / otro]
- Tráfico actual: [RPM o usuarios concurrentes]

## Evaluación: ¿Microservicios o no?

### ✅ Criterios a favor en tu caso
### ❌ Criterios en contra (costes ocultos que no estás viendo)
### 🎯 Recomendación: [Microservicios / Modular monolith / Monolito + event bus]

---

## Diseño de Arquitectura (si decides ir a microservicios)

### 🗺️ Bounded Contexts (Domain-Driven Design)
Identificación de los servicios según el dominio de negocio, no según la base de datos:

```
Servicio: [Nombre]
  Responsabilidad: [qué gestiona]
  API: [endpoints principales]
  DB propia: [sí/no — tipo]
  Publica eventos: [lista]
  Consume eventos: [lista]
  Team owner: [equipo responsable]
```

### 🔌 Comunicación entre servicios
- Síncrona (REST/gRPC): cuándo y entre qué servicios
- Asíncrona (events/mensajes): cuándo y con qué broker
- Saga pattern para transacciones distribuidas: cómo implementarlo

### 📋 Architecture Decision Records (ADRs)
Para las 3 decisiones más importantes, genera el ADR completo:
```
# ADR-001: [Título]
## Estado: Aceptado
## Contexto: ...
## Decisión: ...
## Consecuencias: ...
```

### 🚀 Plan de migración (strangler fig pattern)
Cómo extraer servicios del monolito sin big bang y sin downtime.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Arquitectura de software, diseño de sistemas distribuidos',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Test de usabilidad: diseña el protocolo, recluta participantes y analiza resultados',
                'description'       => 'Planifica y ejecuta un test de usabilidad completo: guía de moderación, tareas de prueba, métricas de éxito y análisis de resultados en un informe accionable para el equipo de producto.',
                'prompt_content'    => <<<'PROMPT'
Eres un UX researcher con experiencia en tests de usabilidad moderados y no moderados en startups y empresas medianas.

Mi estudio:
- Producto a testar: [nombre y tipo — web / app / prototipo Figma]
- Flujo o área concreta a testar: [ej: proceso de onboarding / checkout / dashboard]
- Hipótesis o problema que quieres validar: [qué sospechas que no funciona]
- Número de participantes disponibles: [N o "debo reclutar"]
- Formato: [moderado presencial / moderado remoto / no moderado asíncrono]
- Perfil del participante ideal: [descripción]
- Herramienta disponible: [Maze / UserTesting / Lookback / Zoom + grabación / otra]

## Plan de Test de Usabilidad — [Producto]

### 🎯 Objetivos del estudio y preguntas de investigación
Qué quieres saber exactamente y cómo medirás el éxito.

### 👥 Perfil de participante y screening
Criterios de inclusión/exclusión y las 5 preguntas de screening para reclutar correctamente.

### 📋 Guía de moderación completa

**Introducción (5 min):**
Script exacto para hacer al participante sentir cómodo y explicar las reglas.

**Tareas (20-30 min):**
Para cada tarea:
- Escenario de contexto (sin revelar cómo hacerlo)
- Criterio de éxito/fracaso
- Métricas: tiempo en tarea, tasa de completación, errores

**Cierre (5 min):**
Preguntas finales de satisfacción (SUS, SEQ) y debrief.

### 📊 Sistema de análisis de resultados
- Cómo codificar observaciones en tiempo real
- Template de affinity map para agrupar hallazgos
- Cómo calcular la tasa de éxito por tarea
- Cómo priorizar issues por severidad (1-4)

### 📄 Template de informe de resultados
Estructura del documento que compartirás con el equipo de producto y diseño.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'UX research, validación de diseño, product discovery',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Propuesta económica con ROI calculado que justifica sola el precio',
                'description'       => 'Construye una propuesta donde el precio desaparece porque el retorno es obvio. Con cálculo de ROI personalizado, comparativa de coste de no-acción y estructura visual que guía al decisor hacia el sí.',
                'prompt_content'    => <<<'PROMPT'
Eres un consultor de ventas B2B especializado en propuestas de alto valor donde el precio nunca es el problema porque el ROI está calculado.

Mi oportunidad:
- Empresa cliente: [nombre y sector]
- Contacto decisor: [nombre, cargo]
- Producto o servicio que ofrezco: [descripción]
- Precio de mi propuesta: [€]
- Problema del cliente que resuelvo: [descripción detallada]
- Datos del cliente que conozco: [métricas, situación actual, objetivos]
- Competidores con quien me comparan: [si lo sabes]
- Fecha límite de decisión: [si la hay]

## Propuesta Económica — [Cliente] — [Fecha]

### 💰 Cálculo de ROI (la pieza central)

**Situación actual (coste del problema):**
- [Métrica 1]: €X/mes en [ineficiencia/pérdida]
- [Métrica 2]: X horas/semana × €Y/hora = €Z/mes
- **Coste total del problema: €X/año**

**Con nuestra solución:**
- [Beneficio 1]: ahorro de €X/mes
- [Beneficio 2]: incremento de €X en [métrica de negocio]
- **Beneficio total estimado: €X/año**

**ROI:**
- Inversión: €X
- Retorno año 1: €X
- ROI: X% | Payback period: X meses

### 📋 La propuesta completa

**Resumen ejecutivo (para el decisor que no lee todo):**
3 puntos. El problema, la solución y el ROI en 5 líneas.

**Diagnóstico de la situación actual:**
Lo que entendemos del problema del cliente (valida que escuchaste).

**Nuestra solución:**
Qué hacemos exactamente, cómo y en qué plazo. Sin jerga técnica innecesaria.

**Plan de implementación:**
Timeline con hitos claros y qué necesitamos del cliente.

**Inversión:**
Precio presentado en el contexto del ROI, no como coste aislado.

**Garantías y gestión del riesgo:**
Cómo reducimos el riesgo percibido del cliente.

**Próximos pasos:**
CTA claro con fecha concreta.

### ❓ Cómo manejar las objeciones más probables de este cliente
3 objeciones específicas con respuesta argumentada en ROI.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'B2B sales, propuestas comerciales, cierre de ventas',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Análisis de cohortes: entiende la retención real de tu producto y actúa',
                'description'       => 'Construye el análisis de cohortes que revela cuándo y por qué se van tus usuarios, identifica los patrones de los usuarios que se quedan y diseña las intervenciones concretas para mejorar la retención.',
                'prompt_content'    => <<<'PROMPT'
Eres un product analyst especializado en retención y análisis de cohortes para productos digitales.

Datos disponibles:
[PEGA TUS DATOS — tabla de cohortes, datos de retention por mes, o describe lo que tienes]

Si no tienes datos aún, describe tu situación:
- Tipo de producto: [SaaS / app / marketplace]
- Retención D1/D7/D30 actual (si la conoces): [X%]
- Herramienta de analytics: [Mixpanel / Amplitude / GA4 / Metabase / Excel]
- Evento que defines como "retención": [login / uso de feature clave / otra acción]

## Análisis de Cohortes — [Producto] — [Período]

### 📊 Lectura del análisis (cómo interpretar los números)
Explicación visual de qué significa cada celda y qué patrones buscar.

### 🔍 Hallazgos clave
- **Retención por cohorte**: ¿mejora o empeora con el tiempo? ¿Qué cohortes son mejores?
- **Cliff de retención**: ¿en qué momento se va la mayoría de usuarios? (D1, D7, D30...)
- **Long-tail retention**: ¿hay usuarios que se quedan para siempre? ¿Qué porcentaje?
- **Diferencias entre cohortes**: ¿qué cambió entre la cohorte buena y la mala?

### 🎯 Segmentación de usuarios por comportamiento
- **Usuarios que se quedan**: ¿qué hacen diferente en los primeros 7 días?
- **Usuarios que se van**: ¿dónde se atoran? ¿Qué no llegan a hacer?
- **El "aha moment"**: qué acción predice que el usuario se quedará (correlación)

### 💡 Intervenciones recomendadas por momento del funnel

**Para mejorar retención D1 (primeras 24h):**
- Intervención 1: [qué cambiar en el onboarding]
- Experimento: [cómo testar que funciona]

**Para mejorar retención D7:**
- Intervención: [email / push / in-app message / feature gate]

**Para mejorar retención D30:**
- Intervención: [habit loop, notificaciones, valor progresivo]

### 📋 Template de seguimiento mensual
Dashboard de retención que el PM debe revisar cada mes con las métricas exactas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Product analytics, retención de usuarios, growth',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Política de trabajo remoto e híbrido: reglas claras que funcionan en la práctica',
                'description'       => 'Diseña la política de trabajo remoto e híbrido de tu empresa con las reglas de disponibilidad, herramientas, reuniones, evaluación de rendimiento y cultura que evitan los problemas típicos del trabajo distribuido.',
                'prompt_content'    => <<<'PROMPT'
Eres una HR Director especializada en diseñar políticas de trabajo remoto que realmente se cumplen y que atraen talento en lugar de espantarlo.

Contexto de mi empresa:
- Tamaño: [N empleados]
- Sector: [tech / consultoría / marketing / otro]
- Modelo actual: [100% presencial / híbrido / 100% remoto]
- Modelo objetivo: [describe]
- Países/zonas horarias del equipo: [lista]
- Herramientas actuales de comunicación: [Slack / Teams / otro]
- Mayor problema con el modelo actual: [describe]

## Política de Trabajo Remoto e Híbrido — [Empresa]

### 🏗️ Modelo de trabajo
Descripción exacta del modelo (días en oficina, flexibilidad, excepciones por rol).

### ⏰ Reglas de disponibilidad y comunicación

**Horas núcleo (todos disponibles):** [franja horaria]
**Comunicación asíncrona:** cuándo usarla y cómo (canales, plazos de respuesta)
**Comunicación síncrona:** cuándo una reunión es necesaria vs. un mensaje
**Tiempo de respuesta esperado:** por canal y por urgencia

### 🤝 Reuniones: menos y mejores
- Tipos de reunión que existen y su formato (duración, frecuencia, quién asiste)
- Reglas de "no meeting time" para trabajo profundo
- Cómo hacer reuniones híbridas donde nadie queda excluido
- Template de agenda y notas para reuniones recurrentes

### 🖥️ Setup y equipamiento
Qué provee la empresa, qué corre por cuenta del empleado y el proceso de solicitud.

### 📊 Evaluación de rendimiento en remoto
Cómo medir el rendimiento por output (no por presencia) con métricas concretas por rol.

### 🌍 Trabajo desde el extranjero (workation)
Si se permite, las reglas exactas: duración máxima, países permitidos, implicaciones fiscales a considerar.

### 🎉 Cultura en remoto: rituales que funcionan
5 rituales concretos para mantener la conexión del equipo distribuido sin que sean forzados.

### ⚠️ Las 5 reglas que nunca deben romperse
Los límites no negociables y las consecuencias de no respetarlos.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Remote work policy, cultura organizacional, atracción de talento',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis de viabilidad financiera de una inversión (VAN, TIR y Payback)',
                'description'       => 'Evalúa cualquier inversión empresarial con los tres indicadores financieros clave: Valor Actual Neto, Tasa Interna de Retorno y Período de Recuperación. Con análisis de sensibilidad y narrativa para el comité.',
                'prompt_content'    => <<<'PROMPT'
Eres un analista financiero senior especializado en evaluación de inversiones y proyectos de capital.

Datos de la inversión a evaluar:
- Tipo de inversión: [maquinaria / software / expansión / adquisición / nuevo producto / otro]
- Inversión inicial requerida: [€]
- Vida útil del proyecto: [X años]
- Flujos de caja esperados por año:
  - Año 1: €X
  - Año 2: €X
  - [continúa hasta el año final]
- Valor residual al final (si aplica): [€]
- Tasa de descuento (WACC o coste de oportunidad): [X% — si no la conoces, escribe "calcúlala"]
- Impuesto sobre beneficios: [X%]
- Inflación esperada: [X%]

Genera el análisis completo:

## Análisis de Viabilidad — [Nombre inversión] — [Fecha]

### 📊 Flujos de caja proyectados
| Año | Ingresos | Costes | EBITDA | Impuestos | FCL | FCL descontado |
|-----|---------|--------|--------|-----------|-----|----------------|
| 0   | -       | -      | -      | -         | -€X| -€X            |
| 1   | €X      | €X     | €X     | €X        | €X | €X             |

### 💡 Indicadores clave
- **VAN (Valor Actual Neto):** €X → [Aceptar / Rechazar si VAN < 0]
- **TIR (Tasa Interna de Retorno):** X% → [vs. tasa de descuento X%]
- **Payback period:** X años y X meses
- **Payback descontado:** X años y X meses
- **Índice de rentabilidad (PI):** X

### 🎯 Recomendación
Aceptar / Rechazar / Condicional — con justificación.

### 🔬 Análisis de sensibilidad
Cómo cambia el VAN si varían las variables clave:
| Escenario | Cambio | VAN resultante | TIR | Decisión |
|-----------|--------|---------------|-----|---------|
| Optimista | Ingresos +20% | €X | X% | Aceptar |
| Base | - | €X | X% | Aceptar |
| Pesimista | Ingresos -20% | €X | X% | Rechazar |

### 💬 Narrativa para el comité de inversión
Cómo presentar esta inversión en 5 minutos al comité, destacando el upside y siendo honesto con los riesgos.

### ⚠️ Riesgos principales y cómo mitigarlos
Los 3 supuestos que, si fallan, hacen que la inversión no sea viable.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 25,
                'use_case'          => 'Evaluación de inversiones, finanzas corporativas, análisis de proyectos',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Términos y condiciones de uso para plataforma digital o marketplace',
                'description'       => 'Genera los términos y condiciones completos para cualquier plataforma digital: marketplace, SaaS, app de servicios o red de contenido. Con cláusulas de responsabilidad, propiedad intelectual y resolución de conflictos.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en derecho digital y contratos de plataformas digitales en España y la UE.

Tipo de plataforma:
- Descripción: [marketplace / SaaS B2B / app de servicios / red social / plataforma de contenido]
- Partes que intervienen: [usuarios / vendedores / compradores / creadores / empresas]
- Transacciones económicas: [sí/no — tipo: pagos directos / comisiones / suscripciones]
- Contenido generado por usuarios (UGC): [sí/no]
- Datos personales tratados: [tipos]
- Jurisdicción: [España / UE / internacional]
- Nombre de la plataforma y empresa titular: [nombres]

## TÉRMINOS Y CONDICIONES DE USO
**[Nombre plataforma]** | Versión 1.0 | [Fecha]

### 1. Partes e identificación del titular
Datos del titular de la plataforma y cómo contactar.

### 2. Objeto y descripción del servicio
Qué ofrece la plataforma y a quién va dirigida.

### 3. Registro y cuenta de usuario
- Requisitos de edad y elegibilidad
- Obligaciones del usuario con sus credenciales
- Causas de suspensión o cierre de cuenta

### 4. Condiciones de uso del servicio
Derechos y obligaciones de cada tipo de usuario. Lo que pueden y no pueden hacer.

### 5. Contenido generado por usuarios (si aplica)
- Licencia que el usuario otorga a la plataforma
- Lo que está prohibido publicar (con lista específica)
- Proceso de moderación y eliminación de contenido

### 6. Transacciones económicas (si aplica)
- Cómo funcionan los pagos
- Política de reembolsos y devoluciones
- Comisiones y tarifas aplicables
- Impuestos y responsabilidades fiscales

### 7. Propiedad intelectual
Titularidad de la plataforma y contenidos. Respeto a derechos de terceros.

### 8. Limitación de responsabilidad
Hasta dónde responde la plataforma y qué queda excluido.

### 9. Privacidad y protección de datos
Referencia a la Política de Privacidad (documento separado).

### 10. Modificaciones de los T&C
Cómo y con qué preaviso se actualizan.

### 11. Resolución de conflictos y ley aplicable
Mediación, arbitraje, jurisdicción competente.

---
*[AVISO: Revisar con abogado antes de publicar.]*
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Legal digital, plataformas, marketplace, SaaS',
                'vote_score'        => 29,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Script de retención: recupera clientes que quieren cancelar antes de que se vayan',
                'description'       => 'Diseña el flujo de conversación para recuperar suscriptores en el momento de cancelación. Con preguntas de diagnóstico, ofertas de retención por motivo y guión para llamada o chat en tiempo real.',
                'prompt_content'    => <<<'PROMPT'
Eres un Customer Success Manager especializado en retención y cancel flows con tasas de recuperación del 30-40%.

Contexto de mi servicio:
- Tipo de producto: [SaaS / suscripción / servicio recurrente]
- Precio del plan que intenta cancelar: [€/mes]
- Canal de cancelación: [llamada / chat / email / formulario]
- Motivos de cancelación más frecuentes que ya conoces: [lista si los tienes]
- Margen para hacer ofertas: [descuento máximo / pausa de cuenta / otros beneficios]

## Sistema de Retención — [Producto]

### 🔍 Flujo de diagnóstico (primeros 3 minutos)
Las preguntas exactas para entender el verdadero motivo de cancelación (a menudo no es el que dicen):

**Apertura:**
[Script exacto — empático, sin presión]

**Preguntas de diagnóstico (max 3):**
1. ...
2. ...
3. ...

### 🎯 Respuesta por motivo de cancelación

**Motivo: "Es muy caro"**
- ¿Es realmente precio o es percepción de poco valor?
- Oferta de retención: [descuento X% / plan inferior / pausa]
- Script exacto: [palabras textuales]
- Si no acepta: [oferta final]

**Motivo: "No lo uso suficiente"**
- Oferta de retención: [onboarding personalizado / pausa de cuenta / downgrade]
- Script exacto: [palabras textuales]

**Motivo: "Me paso a la competencia"**
- Cómo preguntar sin ponerse defensivo
- Argumentos de diferenciación preparados
- Script exacto: [palabras textuales]

**Motivo: "No resuelve mi problema"**
- Cómo investigar qué problema tenían sin resolver
- Script exacto: [palabras textuales]

**Motivo: "Problemas técnicos recurrentes"**
- Escalado inmediato + compensación
- Script exacto: [palabras textuales]

### 💬 Cierre si no se puede retener
Cómo terminar la conversación manteniendo la puerta abierta para que vuelvan en el futuro.

### 📊 Métricas del cancel flow
Qué medir para mejorar la tasa de retención mes a mes.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Retención de clientes, customer success, churn reduction',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Estrategia de subida de tarifas anuales sin perder a tus mejores clientes',
                'description'       => 'Planifica y ejecuta la subida de precios anual con el email correcto, el timing adecuado y las respuestas preparadas para cada objeción. Para freelancers y consultores que cobran por proyecto o retainer.',
                'prompt_content'    => <<<'PROMPT'
Eres un coach de negocio para freelancers y consultores con experiencia ayudando a profesionales a subir tarifas sin perder clientes.

Mi situación:
- Tipo de servicio: [diseño / desarrollo / copy / consultoría / fotografía / otro]
- Tarifa actual: [€/hora o €/proyecto o €/mes retainer]
- Nueva tarifa objetivo: [€]
- Incremento: [X%]
- Tiempo que llevas con estos clientes: [meses/años]
- Clientes con quien tienes más miedo de perder: [perfil o nombre si quieres]
- Fecha en la que quieres que entre en vigor: [mes/año]

## Estrategia de Subida de Tarifas

### 📅 Timeline recomendado
- Cuándo comunicarlo (preaviso mínimo según tipo de servicio)
- Cuándo entra en vigor
- Qué hacer en el período de transición

### 💬 El email de subida de tarifas

**Para clientes de larga trayectoria (>1 año):**
```
Asunto: Actualización de mis tarifas para [año] — [Tu nombre]

[Email completo, cálido, que justifica sin pedir disculpas]
```

**Para clientes más recientes (<6 meses):**
```
Asunto: [versión más directa]

[Email completo]
```

**Para proyectos en curso (cómo aplicar sin romper la confianza):**
```
[Email específico para este caso delicado]
```

### ❓ Respuestas preparadas para objeciones

**"No esperaba esto, es mucho aumento":**
[Respuesta exacta que no cede pero tampoco rompe la relación]

**"Necesito pensarlo / consultarlo con mi jefe":**
[Cómo seguir sin presionar]

**"No podemos permitírnoslo, ¿puedes hacer una excepción?":**
[Cuándo ceder y cuándo no, y cómo decir no sin perder al cliente]

**"Entonces buscaré a alguien más barato":**
[La respuesta que te libera sin quemarlo todo]

### 🧮 Cómo calcular la tarifa correcta
Fórmula para saber si tu nueva tarifa es sostenible y competitiva para tu mercado.

### 🎯 Qué hacer si un cliente se va
El proceso mental y práctico para cerrar bien esa relación y cubrir ese hueco rápido.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 10,
                'use_case'          => 'Pricing freelance, negociación, gestión de clientes',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
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
