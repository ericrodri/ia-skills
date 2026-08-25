<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills75Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de producto (PMM) — positioning, messaging y go-to-market',
                'description'      => 'Domina el rol de Product Marketing Manager: cómo construir el positioning de una feature, redactar el messaging y coordinar el lanzamiento con ventas, producto y comunicación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Product Marketing Manager (PMM) senior con experiencia en empresas SaaS B2B. Voy a lanzar una nueva feature y necesito tu ayuda para construir el positioning, el messaging y el plan de go-to-market (GTM) completo.

## Contexto que debes pedirme

Antes de empezar, hazme estas preguntas una por una:
1. ¿Cuál es la feature o producto que vamos a lanzar?
2. ¿Cuál es el segmento de cliente objetivo (ICP)?
3. ¿Cuáles son los 2-3 competidores más relevantes?
4. ¿Cuál es la fecha de lanzamiento objetivo?
5. ¿Qué canales de distribución tenemos disponibles (blog, email, redes, sales, paid)?

## Framework de Positioning (April Dunford)

Una vez que tengas el contexto, completa este ejercicio de positioning siguiendo el método de April Dunford de "Obviously Awesome":

| Componente | Descripción | Nuestra respuesta |
|---|---|---|
| Competitive alternatives | ¿Con qué comparan los clientes nuestra solución? | [a completar] |
| Unique attributes | ¿Qué hacemos diferente o mejor? | [a completar] |
| Value (outcomes) | ¿Qué valor concreto obtiene el cliente? | [a completar] |
| Target customers | ¿Quién se beneficia más y por qué? | [a completar] |
| Market frame of reference | ¿En qué categoría competimos? | [a completar] |

## Messaging House

Construye el messaging siguiendo la estructura de casa de mensajes:

**Tagline (≤10 palabras):** _____

**Propuesta de valor principal (1 párrafo):**
[Para [segmento], [producto] es la única [categoría] que [beneficio único], a diferencia de [alternativa], que [limitación del competidor].]

**Tres pilares de mensajes con prueba:**
1. Pilar 1: [Afirmación] → Evidencia: [dato o ejemplo]
2. Pilar 2: [Afirmación] → Evidencia: [dato o ejemplo]
3. Pilar 3: [Afirmación] → Evidencia: [dato o ejemplo]

**Mensajes por persona:**
- Para el comprador económico (CFO/CEO): enfócate en ROI, riesgo y escala
- Para el usuario final: enfócate en productividad, experiencia y adopción
- Para el comprador técnico (CTO/IT): enfócate en seguridad, integración y mantenimiento

## Plan GTM en 4 semanas

Genera un plan de lanzamiento semana a semana:

**Semana -2 (Preparación interna):**
- Sales enablement: one-pager, battle card, FAQ de objeciones
- Formación al equipo de CS: demo interna, guía de preguntas frecuentes
- Preparación de activos: landing page, email sequences, blog post

**Semana -1 (Soft launch):**
- Early access a clientes beta seleccionados
- Recogida de testimonios y casos de uso reales
- Ajuste de mensajes según feedback inicial

**Semana 0 (Launch day):**
- Email a base de clientes existentes
- Publicación del blog post con SEO optimizado
- Post en redes sociales con secuencia de 3 días
- Outreach de PR si aplica

**Semana +1 (Amplificación):**
- Seguimiento de métricas: adopción, activación, NPS de feature
- Campaña de paid si el CAC lo justifica
- Sales push con deck actualizado

## Battle Card vs. Competidores

Para cada competidor clave, completa esta tabla:

| Aspecto | Nosotros | Competidor A | Competidor B |
|---|---|---|---|
| Precio | | | |
| Fortaleza clave | | | |
| Debilidad clave | | | |
| Cuándo ganamos | | | |
| Cuándo perdemos | | | |

## Métricas de éxito del lanzamiento

Define los KPIs del GTM agrupados en tres horizontes:

**Semana 1 (Awareness):** Impresiones del blog post, aperturas de email, tráfico a landing page
**Mes 1 (Adoption):** % de clientes existentes que activan la feature, trial starts si aplica
**Trimestre 1 (Revenue impact):** Pipeline generado por la feature, deals where feature influenced close, expansión de MRR

## Entregables que debes producirme

1. Documento de positioning completo (tabla rellena)
2. Messaging house con tagline, propuesta de valor y tres pilares
3. Calendario GTM semana a semana con responsables
4. Battle card de una página
5. Draft del email de lanzamiento a clientes (asunto + cuerpo en 200 palabras)
6. Checklist de lanzamiento de 20 puntos

Empieza por hacerme las preguntas de contexto y luego construye todos los entregables paso a paso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir el positioning, messaging y plan de go-to-market para el lanzamiento de una nueva feature o producto',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'GraphQL en producción — schema design, resolvers y N+1',
                'description'      => 'Aprende a diseñar esquemas GraphQL escalables, resolver el problema N+1 con DataLoader, implementar subscriptions y decidir cuándo GraphQL supera a REST.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un ingeniero backend senior especializado en GraphQL con experiencia en producción a escala. Necesito tu ayuda para diseñar, implementar y optimizar una API GraphQL para un sistema real.

## Diagnóstico inicial

Primero hazme estas preguntas:
1. ¿Cuál es el stack tecnológico? (Node/Apollo, Python/Strawberry, Go, Java, etc.)
2. ¿Tienes ya una API REST que quieres migrar o empezamos desde cero?
3. ¿Cuáles son las entidades principales del dominio?
4. ¿Cuántos clientes consumirán la API? (web, mobile, third-party)
5. ¿Tienes requisitos de tiempo real (subscriptions)?

## Principios de Schema Design

Guíame en el diseño del schema siguiendo estos principios:

**1. Schema-first development**
Define el contrato antes de implementar. El schema es la fuente de verdad compartida entre frontend y backend.

**2. Reglas de naming**
| Elemento | Convención | Ejemplo |
|---|---|---|
| Types | PascalCase | `UserProfile` |
| Fields | camelCase | `firstName` |
| Queries | camelCase, verbo opcional | `users`, `userById` |
| Mutations | camelCase, imperativo | `createUser`, `updateEmail` |
| Enums | SCREAMING_SNAKE_CASE | `ORDER_STATUS` |

**3. Tipos de conexión (Relay Cursor Pagination)**
```graphql
type UserConnection {
  edges: [UserEdge!]!
  pageInfo: PageInfo!
  totalCount: Int!
}
type UserEdge {
  node: User!
  cursor: String!
}
type PageInfo {
  hasNextPage: Boolean!
  hasPreviousPage: Boolean!
  startCursor: String
  endCursor: String
}
```

## El Problema N+1 y DataLoader

Explícame el problema N+1 en GraphQL y muéstrame la solución con DataLoader:

**Problema:**
Cuando resolvemos `posts { author { name } }`, por cada post hacemos una query a la BD para obtener el autor → N queries adicionales.

**Solución con DataLoader (Node.js):**
```javascript
const userLoader = new DataLoader(async (userIds) => {
  const users = await db.users.findMany({ where: { id: { in: userIds } } });
  return userIds.map(id => users.find(u => u.id === id));
});

// En el resolver de Post.author:
author: (post, _, { loaders }) => loaders.user.load(post.authorId)
```

Genera el código DataLoader adaptado a mi stack tecnológico para las entidades principales de mi dominio.

## Resolvers: Estructura y Buenas Prácticas

Muéstrame la anatomía de un resolver bien estructurado:

| Capa | Responsabilidad |
|---|---|
| Resolver | Solo traduce entre GraphQL y el servicio de dominio |
| Service | Lógica de negocio, validaciones, autorización |
| Repository | Acceso a datos, queries optimizadas |

**Anti-patrón:**
```javascript
// MAL: lógica de negocio en el resolver
const resolver = async (_, { userId }) => {
  const user = await db.query(`SELECT * FROM users WHERE id = ${userId}`);
  if (user.role !== 'ADMIN') throw new Error('...');
  return user;
};
```

**Patrón correcto:**
```javascript
// BIEN: resolver delgado
const resolver = async (_, { userId }, { services }) => {
  return services.user.getById(userId);
};
```

## Autorización en GraphQL

Compara las estrategias de autorización:

| Estrategia | Cuándo usarla | Pros | Contras |
|---|---|---|---|
| En el resolver | Lógica simple, pocos tipos | Fácil de entender | Difícil de mantener a escala |
| Directivas (`@auth`) | Control declarativo | Schema autodocumentado | Requiere implementación custom |
| Shield (graphql-shield) | Reglas complejas por rol | Centralizado, testeable | Dependencia adicional |
| En la capa de servicio | Arquitectura limpia | Reutilizable fuera de GraphQL | El schema no lo refleja |

## Subscriptions

Implementa subscriptions para notificaciones en tiempo real:

```graphql
type Subscription {
  orderUpdated(orderId: ID!): Order!
  newMessage(channelId: ID!): Message!
}
```

Muéstrame la implementación con WebSockets y cómo escalar con Redis PubSub en entornos multi-instancia.

## GraphQL vs REST: Tabla de Decisión

| Criterio | Elige GraphQL | Elige REST |
|---|---|---|
| Clientes con necesidades distintas | ✅ Múltiples (web, mobile, partners) | ❌ Solo uno |
| Over/under-fetching | ✅ Problema frecuente | ❌ No es problema |
| Relaciones entre entidades | ✅ Grafo complejo | ❌ Entidades simples |
| Caché HTTP | ❌ Complejo con POST | ✅ Nativo con GET |
| Curva de aprendizaje del equipo | ❌ Alta | ✅ Baja |
| Streaming / file upload | ❌ No nativo | ✅ Sencillo |

## Entregables

1. Schema GraphQL completo para mi dominio con tipos, queries, mutations y subscriptions
2. Implementación de DataLoader para las relaciones N-a-1 detectadas
3. Estrategia de autorización recomendada con código ejemplo
4. Configuración de persisted queries para producción
5. Checklist de seguridad GraphQL (depth limiting, complexity, introspection en prod)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar e implementar una API GraphQL en producción con schema design, DataLoader y estrategia de autorización',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de aplicaciones de salud — UX para healthtech',
                'description'      => 'Aprende a diseñar apps de salud considerando regulación, privacidad, accesibilidad y cómo comunicar información médica de forma clara y empática.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador UX/UI especializado en healthtech con experiencia en aplicaciones médicas reguladas. Necesito ayuda para diseñar una aplicación de salud que sea usable, accesible, segura y que cumpla con los marcos regulatorios aplicables.

## Contexto inicial

Antes de empezar, pregúntame:
1. ¿Qué tipo de aplicación es? (seguimiento crónico, urgencias, bienestar, gestión de medicación, telemedicina, etc.)
2. ¿Cuál es el usuario principal? (paciente, médico, cuidador, administrador)
3. ¿En qué mercado opera? (España/UE, LATAM, EEUU)
4. ¿La app accede a datos de salud clínicos o solo de bienestar?
5. ¿Existe alguna certificación CE marcada o FDA 510(k) en el roadmap?

## Marco Regulatorio por Mercado

| Regulación | Aplica en | Impacto en diseño |
|---|---|---|
| MDR 2017/745 (UE) | Dispositivos médicos Europa | Trazabilidad, IFU, etiquetado |
| RGPD / LOPDGDD | España/UE | Consentimiento explícito, derecho al olvido |
| HIPAA | EEUU | Datos PHI, audit logs, cifrado |
| Ley 41/2002 | España | Autonomía del paciente, consentimiento informado |
| ISO 62366 | Internacional | Usabilidad de software médico |

## Principios de Diseño para Healthtech

**1. Seguridad psicológica primero**
Los usuarios en situaciones de salud pueden estar ansiosos o asustados. El diseño debe transmitir calma y confianza.
- Usa paletas de colores suaves: azules, verdes, blancos. Evita rojos agresivos para estados normales.
- Lenguaje empático: "Tus resultados están listos" en lugar de "Alerta: nuevos datos".

**2. Comunicación de información médica**
| Tipo de dato | Cómo presentarlo | Error común |
|---|---|---|
| Valores de laboratorio | Rango normal visible, indicador contextual | Mostrar solo el número crudo |
| Tendencias temporales | Gráfico de líneas con anotaciones de eventos | Gráfica sin contexto clínico |
| Medicación | Nombre comercial + genérico, dosis clara | Solo nombre técnico |
| Alertas críticas | Modal bloqueante, lenguaje de acción clara | Toast que desaparece |

**3. Health Literacy Design**
El 50% de los pacientes tiene dificultad para comprender información médica técnica. Diseña para nivel de lectura de 6º grado:
- Usa lenguaje sencillo: "azúcar en sangre" en lugar de "glucemia"
- Añade iconos de apoyo al texto
- Ofrece opción de escuchar el contenido (text-to-speech)

## Accesibilidad en Healthtech

Sigue WCAG 2.1 nivel AA como mínimo. En salud, considera:

**Contraste:** Mínimo 4.5:1 para texto normal, 3:1 para texto grande. Los usuarios mayores necesitan mayor contraste.

**Tamaño de tipografía:** Mínimo 16px para body. Ofrece siempre opción de aumentar tamaño.

**Touch targets:** Mínimo 44×44px para cualquier elemento interactivo. Pacientes con Parkinson o artritis necesitan áreas generosas.

**Modo de alto contraste y daltonismo:**
- Nunca uses color como único indicador de estado (usa también icono + texto)
- Ofrece tema de alto contraste nativo
- Valida con Sim Daltonism o Stark

**Accesibilidad cognitiva:**
- Reducción de opciones: máximo 3-4 acciones en cualquier pantalla
- Confirmación de acciones críticas (administrar medicación, cancelar cita)
- Modo de emergencia con un solo toque visible siempre

## Flujos Críticos en Healthtech

Diseña estos flujos con especial cuidado:

**1. Onboarding con consentimiento RGPD**
- Pantalla de bienvenida clara sobre qué hace la app
- Consentimiento granular (no todo o nada)
- Opción de "empezar sin cuenta" donde sea posible
- Estimación honesta del tiempo de setup

**2. Entrada de síntomas o datos de salud**
- Usa scales visuales (sliders, emojis de dolor) en lugar de campos numéricos libres
- Valida rangos y advierte sin alarmar
- Guarda borradores automáticamente

**3. Resultados y reportes**
- Resumen en lenguaje sencillo primero, detalle técnico colapsado después
- Acción clara siempre disponible: "¿Qué hago con esto?" → CTA a médico o recurso
- Comparte con médico con un clic (PDF o integración HL7/FHIR)

## Privacidad por Diseño (Privacy by Design)

| Principio | Implementación en UI |
|---|---|
| Proactivo no reactivo | Solicita solo los datos necesarios en el momento necesario |
| Privacidad como default | La configuración más restrictiva debe ser la predeterminada |
| Funcionalidad completa | Privacidad no implica peor experiencia |
| Visibilidad y transparencia | Panel de privacidad claro: qué datos, con quién se comparten |
| Respeto por el usuario | Fácil acceso a exportar y eliminar datos |

## Entregables

Con el contexto que me des, produce:
1. Mapa de flujos críticos (user flow diagram en texto o mermaid)
2. Guía de componentes de UI adaptados a healthtech (paleta, tipografía, iconografía)
3. Checklist de accesibilidad WCAG 2.1 AA para las 5 pantallas principales
4. Plantilla de pantalla de consentimiento RGPD
5. Recomendaciones de pruebas de usabilidad con usuarios reales (incluyendo usuarios mayores y con diversidad funcional)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar una aplicación de salud accesible, regulatoriamente correcta y con una comunicación médica empática',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de canal (channel sales) — recluta, forma y activa partners',
                'description'      => 'Aprende a construir un programa de canal: cómo seleccionar, reclutar, habilitar y activar a partners que vendan tu producto en tu nombre.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de channel sales con experiencia en programas de canal para software B2B. Necesito construir o mejorar nuestro programa de ventas indirectas a través de partners.

## Contexto inicial

Hazme estas preguntas antes de empezar:
1. ¿Qué tipo de producto vendes y cuál es el ACV (Annual Contract Value) promedio?
2. ¿Ya tienes partners o empezamos desde cero?
3. ¿Qué tipos de partners quieres reclutar? (revendedores, integradores, agentes, OEM)
4. ¿En qué mercados geográficos operas?
5. ¿Tienes un PRM (Partner Relationship Management) o CRM donde gestionar el canal?

## Tipos de Partners y Cuándo Usar Cada Uno

| Tipo de partner | Qué hacen | Mejor para | Complejidad de gestión |
|---|---|---|---|
| Referral / Agente | Generan lead y cobran comisión | ACVs bajos, escala rápida | Baja |
| Reseller (VAR) | Compran y revenden con margen | Mercados maduros, distribución local | Media |
| SI / Integrador | Implementan + venden | Software complejo, enterprise | Alta |
| OEM / Tecnológico | Integran tu producto en el suyo | Distribución masiva, acceso a su base | Alta |
| Distribuidores | Agregan a múltiples resellers | Mercados donde no tienes presencia | Media |

## Framework de Reclutamiento de Partners

**Paso 1: Perfil de partner ideal (IPP — Ideal Partner Profile)**
Define estos criterios antes de salir a reclutar:
- Tamaño del partner: ¿cuántos comerciales tiene?
- Cartera de clientes complementaria a tu ICP
- Tecnologías que ya venden (¿complementarias o competidoras?)
- Presencia geográfica
- Capacidad financiera (si van a comprar y revender)

**Paso 2: Fuentes de reclutamiento**
1. Marketplaces tecnológicos (AWS Marketplace, HubSpot App Partners, Salesforce AppExchange)
2. Eventos de canal: partner days, eventos del ecosistema
3. Tu propia lista de influencers y consultores que ya recomiendan tu producto
4. Partners de competidores descontentos
5. Outbound directo a integradores verticales de tu industria

**Paso 3: Proceso de evaluación (Partner Due Diligence)**

| Criterio | Peso | Puntuación (1-5) |
|---|---|---|
| Alineación de mercado objetivo | 30% | |
| Capacidad técnica del equipo | 25% | |
| Recursos comerciales disponibles | 20% | |
| Reputación y referencias de clientes | 15% | |
| Compromiso financiero inicial | 10% | |

## Habilitación (Partner Enablement)

Un partner que no puede vender tu producto es una fuente de frustración, no de ingresos.

**Programa de certificación en 3 niveles:**

| Nivel | Requisito | Beneficio |
|---|---|---|
| Registered | Firmar acuerdo + 1 persona certificada | Acceso a materiales de venta |
| Silver | 2 cierres + 2 personas certificadas | MDF (co-marketing funds), descuento adicional |
| Gold | 5 cierres + 4 personas certificadas + business plan | SDR compartido, acceso a deal registration prioritario |

**Contenido de la certificación:**
- Módulo 1 (2h): Pitch de producto, discovery y demo
- Módulo 2 (3h): Objeciones, competencia y casos de éxito
- Módulo 3 (2h): Proceso de implementación y handoff a CS
- Módulo 4 (1h): Uso del PRM y deal registration

## Activación: Del Partner Certificado al Primer Deal

El 80% de los partners nunca generan ingresos. La activación requiere:

**Plan de 90 días del nuevo partner:**
- Días 1-30: Certificación, onboarding al PRM, primer webinar conjunto a su base de clientes
- Días 31-60: Co-call con tu equipo en los primeros 3 leads, feedback loop semanal
- Días 61-90: Deal registration del primer deal, análisis de qué funciona y qué no

**Señales de un partner activado (lead indicators):**
- Ha hecho al menos 1 demo sin tu equipo
- Tiene al menos 3 oportunidades en su CRM
- Ha completado las 4 certificaciones

## Estructura de Comisiones y Márgenes

| Modelo | Cómo funciona | Cuándo usar |
|---|---|---|
| Comisión sobre deal | % sobre ACV cerrado (8-20%) | Referral y agentes |
| Margen de reventa | Partner compra a precio canal (30-40% de descuento) | VARs y resellers |
| MDF (Market Development Funds) | Budget co-marketing por cumplir hitos | Todos los tiers Silver+ |
| Spiffs | Bono por cerrar producto específico en periodo | Activaciones puntuales |

## Métricas del Programa de Canal

KPIs que debes reportar mensualmente:

| Métrica | Definición | Objetivo año 1 |
|---|---|---|
| Partners activos | Partners con ≥1 deal en los últimos 90 días | 20% del total |
| CAC canal vs. directo | Coste de adquisición comparado | Canal ≤ 70% del directo |
| Ingresos indirectos / Total | % de revenue generado por canal | 25-30% |
| Time to first deal | Días desde firma hasta primer cierre | < 90 días |
| Partner satisfaction (PSAT) | NPS de partners trimestralmente | > 40 |

## Entregables

Con el contexto que me des, produce:
1. Ideal Partner Profile (IPP) para tu mercado
2. Plantilla de acuerdo de partner (Term Sheet, no legal) con los puntos clave
3. Plan de enablement de 90 días para nuevos partners
4. Scorecard mensual del programa de canal
5. Guía de co-selling: cómo tu equipo y el partner venden juntos sin pisarse
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar y activar un programa de ventas de canal con partners que generen ingresos indirectos de forma sostenible',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de la deuda técnica desde producto — priorización y comunicación',
                'description'      => 'Aprende a identificar, cuantificar y priorizar la deuda técnica desde el rol de producto, y cómo comunicarla al negocio sin tecnicismos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Product Manager con sólida colaboración con equipos de ingeniería. Necesito ayuda para gestionar la deuda técnica de forma estratégica: identificarla, priorizarla junto a ingeniería y comunicarla al negocio de manera que se convierta en trabajo planificado, no en deuda oculta.

## Diagnóstico inicial

Primero hazme estas preguntas:
1. ¿Qué tipo de producto gestionas y cuál es el tamaño del equipo de ingeniería?
2. ¿Tenéis ya un inventario de deuda técnica o está en la cabeza de los ingenieros?
3. ¿Qué metodología de desarrollo usáis? (scrum, kanban, shape up)
4. ¿Cuál es la proporción actual de tiempo dedicado a deuda técnica vs. features nuevas?
5. ¿Cuál es el mayor problema que te causa la deuda técnica ahora mismo? (velocidad, estabilidad, retención de talento)

## Tipos de Deuda Técnica y su Impacto en Producto

Categoriza la deuda técnica para poder comunicarla mejor:

| Tipo | Descripción | Impacto en producto | Urgencia típica |
|---|---|---|---|
| Deuda de arquitectura | Decisiones de diseño que ya no escalan | Velocidad de desarrollo, nuevas features bloqueadas | Alta |
| Deuda de código | Código duplicado, sin tests, difícil de modificar | Bugs frecuentes, tiempo de onboarding alto | Media |
| Deuda de datos | Esquemas de BD inconsistentes, datos sucios | Dificultad de analytics, integridad de datos | Alta |
| Deuda de infraestructura | Tecnología obsoleta, sin monitoreo | Incidentes, indisponibilidad | Alta si afecta SLA |
| Deuda de documentación | Sin runbooks, sin ADRs, conocimiento en silos | Rotación de equipo devastadora | Media-baja |

## Framework de Inventario de Deuda Técnica

Crea un inventario compartido entre producto e ingeniería con estos campos:

| Campo | Descripción |
|---|---|
| ID | Identificador único |
| Área | Frontend / Backend / BD / Infra / Proceso |
| Descripción técnica | ¿Qué está mal? |
| Impacto en usuario | ¿Qué experimenta el usuario cuando esta deuda falla? |
| Impacto en velocidad | ¿Cuánto tiempo adicional cuesta por sprint? (horas) |
| Coste de resolución | Estimación en días de ingeniería |
| Riesgo si no se resuelve | Alto / Medio / Bajo |
| Dependencia de negocio | ¿Bloquea algún objetivo OKR? |

## Cómo Priorizar Deuda Técnica con Ingeniería

Usa este modelo de puntuación para priorizar con objetividad:

**Score = (Impacto en velocidad × 2) + (Riesgo × 3) + (Coste de no hacer) − (Esfuerzo)**

Escala cada variable de 1 a 5. Los ítems con mayor score van primero.

**Regla del 20%:**
Protege el 20% de la capacidad de cada sprint para deuda técnica. No lo negocies. En ciclos de alta presión, baja al 15% pero nunca a 0%. Los equipos que ignoraron esta regla duplican su tiempo de ciclo en 18-24 meses.

**Técnica del "Boy Scout Rule" + OKRs:**
Antes de cerrar cualquier feature, deja el código un poco mejor de como lo encontraste (regla de Boy Scout). Y vincula la deuda técnica a los OKRs: si el objetivo es "reducir el time-to-market de nuevas features en un 30%", la deuda de arquitectura que bloquea eso se convierte en prioridad estratégica.

## Comunicación al Negocio Sin Tecnicismos

El CEO no entiende "refactorizar el módulo de autenticación". Sí entiende estas traducciones:

| Lenguaje técnico | Lenguaje de negocio |
|---|---|
| Refactorizar el monolito | Reducir el coste de añadir nuevas integraciones de 3 semanas a 3 días |
| Mejorar cobertura de tests | Reducir el número de bugs en producción en un 40% |
| Migrar a microservicios | Poder escalar solo los componentes con más demanda sin escalar todo |
| Resolver deuda de datos | Tener datos fiables para las decisiones de negocio |
| Actualizar dependencias legacy | Eliminar el riesgo de vulnerabilidades de seguridad que pueden causar una brecha |

**Template de comunicación para stakeholders:**

> "Vamos a dedicar X sprints a trabajo de ingeniería que no produce features visibles. El resultado esperado es [beneficio concreto en lenguaje de negocio]. Si no lo hacemos ahora, el coste será [consecuencia]. Lo mediremos con [métrica]."

## Hoja de Ruta de Deuda Técnica

Integra la deuda técnica en el roadmap de producto con este formato de horizonte:

**Ahora (este trimestre):** Deuda que bloquea OKRs actuales o causa incidentes recurrentes
**Próximo (siguiente trimestre):** Deuda que reducirá el coste de features planificadas
**Después (H2 o año próximo):** Deuda que importa estratégicamente pero no es urgente

## Métricas para Medir el Impacto de Reducir Deuda

| Métrica | Cómo medirla | Objetivo |
|---|---|---|
| Cycle time | Tiempo desde inicio de tarea hasta despliegue | Reducción del 20% en 2 trimestres |
| Bug rate | Bugs por sprint en producción | Reducción del 30% |
| Deployment frequency | Despliegues por semana | Aumento del 50% |
| Developer happiness (eNPS) | Encuesta trimestral al equipo | Mejora de 10 puntos |

## Entregables

Con el contexto que me des, produce:
1. Plantilla de inventario de deuda técnica lista para usar en Notion o Jira
2. Modelo de scoring para priorización con fórmula aplicada a 3 ejemplos
3. Traducción de las 5 deudas técnicas más comunes a lenguaje de negocio
4. Template de slide para presentar la deuda técnica al CEO o board
5. Política de gestión de deuda técnica (1 página) para incluir en el way of working del equipo
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear un sistema de priorización y comunicación de deuda técnica que integre ingeniería y negocio en una hoja de ruta compartida',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Diseño de espacios de trabajo híbridos — oficina para presencia y colaboración',
                'description'      => 'Aprende a diseñar o rediseñar la oficina híbrida para maximizar la colaboración en los días de presencia y garantizar que el espacio justifique el desplazamiento.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en workplace design y gestión de espacios de trabajo con experiencia en entornos híbridos. Necesito ayuda para diseñar o rediseñar nuestra oficina para que sea el tipo de espacio que las personas eligen venir, no al que se ven obligadas.

## Diagnóstico inicial

Antes de empezar, hazme estas preguntas:
1. ¿Cuántas personas tiene el equipo y cuántos días de presencia por semana están acordados?
2. ¿De qué metros cuadrados dispones?
3. ¿Cuál es la distribución actual? (open space, cubículos, despachos privados, salas)
4. ¿Cuáles son los tipos de trabajo que se realizan mayoritariamente? (focus work, meetings, colaboración creativa, llamadas)
5. ¿Tienes presupuesto para rediseño o trabajamos con lo que hay?

## Principios del Diseño de Espacio Híbrido

**El espacio ya no es para trabajar individualmente.** Para eso está el hogar. El espacio de oficina en el modelo híbrido tiene un único propósito: hacer cosas que no se pueden hacer igual de bien en remoto.

| Actividad que justifica ir a la oficina | Cómo el espacio debe apoyarla |
|---|---|
| Onboarding de nuevas personas | Zonas de mentorización, espacios informales |
| Sesiones de ideación y diseño | Paredes de escritura, espacios modulares amplios |
| Reuniones de equipo con ritual | Sala con configuración para el equipo completo |
| Trabajo enfocado en entorno nuevo | Zonas silenciosas tipo biblioteca |
| Conexión social y cultura | Kitchen/lounge como corazón del espacio |

## Los 5 Tipos de Espacios que Debe Tener una Oficina Híbrida

**1. Zonas de colaboración activa (40% del espacio)**
Mesas modulares que se reconfiguran, pizarras grandes, acceso fácil a material de facilitación. Sin sillas fijas. Máximo 6 personas por zona.

**2. Zonas de trabajo enfocado (20% del espacio)**
Cabinas acústicas individuales o zonas de silencio estricto. Sin llamadas. Para las personas que vienen a la oficina a tener un entorno distinto al hogar.

**3. Salas de reunión híbridas (20% del espacio)**
Equipadas para videoconferencia de calidad: cámara que captura toda la sala, micrófono omnidireccional, pantalla grande. Estas salas nivelean la experiencia entre quien está en sala y quien está en remoto.

**4. Espacio social (15% del espacio)**
Cocina, lounge, zona de estar. Es el motor de la cultura. Las mejores conversaciones de trabajo ocurren aquí. No lo sacrifiques por más salas de reunión.

**5. Zona flexible / proyecto (5% del espacio)**
Espacio que puede convertirse en sala de proyecto durante semanas, con paredes para colgar artefactos, timeline del proyecto, post-its. Permite trabajo de proyecto inmersivo.

## Distribución de Escritorios en Hot-Desking

Si tienes más personas que puestos fijos (ratio recomendado 0.6-0.7 escritorios por persona en modelos híbridos de 2-3 días):

| Ratio escritorios/persona | Cuándo aplica |
|---|---|
| 1:1 | Presencia alta (+4 días/semana) |
| 0.8:1 | Presencia 3-4 días/semana |
| 0.6:1 | Presencia 2-3 días/semana |
| 0.5:1 | Presencia 1-2 días/semana |

**Gestión del hot-desking:**
- Usa un sistema de reserva de escritorios (Skedda, Robin, Microsoft Places)
- Crea "vecindarios" de equipo: cada equipo tiene su zona, pero dentro de ella es hot-desking
- Establece reglas claras de limpieza (clean desk policy)

## Acústica y Privacidad

El mayor problema de los open spaces. Soluciones por presupuesto:

| Presupuesto | Solución |
|---|---|
| Bajo (<5.000€) | Paneles acústicos en paredes, alfombras, plantas como barrera visual |
| Medio (5.000-20.000€) | Cabinas acústicas modulares (BuzziSpace, FrameFour), sistema de sonido enmascaramiento |
| Alto (>20.000€) | Rediseño de distribución con materiales absorbentes, techos acústicos |

## El Ritual del Día de Presencia

El espacio solo funciona si los días de presencia tienen un propósito. Ayuda a diseñar el ritual de equipo:

**Ejemplo de estructura de día de presencia de equipo:**
- 9:30h: Llegada y desayuno social (no obligatorio, pero disponible)
- 10:00h: Stand-up presencial (máx 15 min)
- 10:15h-13:00h: Bloque de colaboración activa (workshops, diseño, decisiones)
- 13:00h-14:00h: Comida conjunta (presupuesto de empresa)
- 14:00h-17:00h: Trabajo individual o en duplas
- 17:00h: Retrospectiva informal o cierre del día

## Métricas de Ocupación y Experiencia

| Métrica | Cómo medirla |
|---|---|
| Tasa de ocupación real | Sensores de presencia o datos del sistema de reservas |
| NPS del espacio | Encuesta mensual de 1 pregunta: "¿Recomendarías venir a la oficina esta semana?" |
| Uso por tipo de espacio | % de tiempo que cada zona está ocupada |
| Eficiencia de reuniones híbridas | Post-meeting survey de calidad de la experiencia remota vs. presencial |

## Entregables

Con el contexto que me des, produce:
1. Distribución sugerida del espacio con porcentajes por tipo de zona
2. Lista de equipamiento prioritario para salas de reunión híbridas (con precio orientativo)
3. Política de uso del espacio (clean desk, reserva de sala, normas de convivencia)
4. Diseño del ritual de día de presencia para tu equipo
5. Encuesta de diagnóstico del espacio actual (10 preguntas para pasar al equipo)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Rediseñar la oficina híbrida para maximizar la colaboración en los días de presencia y mejorar la experiencia del equipo',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Lease accounting bajo NIIF 16 — impacto en balance y P&L',
                'description'      => 'Comprende el impacto de NIIF 16 en los estados financieros: reconocimiento del activo por derecho de uso, pasivo del arrendamiento y cómo gestionar la cartera de contratos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en contabilidad bajo normas internacionales (NIIF/IFRS) con especialización en NIIF 16 / IFRS 16 Arrendamientos. Necesito entender y aplicar correctamente esta norma en mi empresa.

## Diagnóstico inicial

Antes de empezar, pregúntame:
1. ¿Cuántos contratos de arrendamiento tiene la empresa y de qué tipo? (inmuebles, vehículos, maquinaria, tecnología)
2. ¿Aplicas NIIF completas o NIIF para PYMES?
3. ¿Cuál es la moneda funcional y si hay arrendamientos en moneda extranjera?
4. ¿Tienes contratos con opciones de extensión o compra?
5. ¿Usas algún software de gestión de arrendamientos (Lease accounting tool)?

## Los Cambios Clave que Introduce NIIF 16

Antes de NIIF 16, los arrendamientos operativos no aparecían en el balance. Ahora todos los arrendamientos (con excepciones) deben reconocerse:

| Concepto | Antes (NIC 17) | Después (NIIF 16) |
|---|---|---|
| Arrendamiento operativo en balance | No | Sí (activo + pasivo) |
| Activo reconocido | Solo en finance lease | Activo por derecho de uso (ROU) |
| Pasivo reconocido | Solo en finance lease | Pasivo de arrendamiento |
| Gasto en P&L | Gasto operativo lineal | Amortización + intereses |
| EBITDA | Menor (gasto operativo incluido) | Mayor (se saca del EBITDA) |

## Excepciones: Cuándo NO Reconocer en Balance

| Excepción | Criterio | Tratamiento |
|---|---|---|
| Arrendamientos a corto plazo | Plazo ≤ 12 meses (sin opción de extensión) | Gasto lineal en P&L |
| Activos de bajo valor | Valor intrínseco del activo ≤ USD 5.000 | Gasto lineal en P&L |

## Cálculo del Pasivo de Arrendamiento

El pasivo se calcula como el valor presente de los pagos futuros del arrendamiento:

**Fórmula:**
```
Pasivo = Σ (Pago mensual / (1 + TIA)^n)
```
Donde TIA = Tasa de Interés del Arrendamiento (o tasa incremental de endeudamiento si la TIA no está disponible)

**Ejemplo:**
- Contrato de oficina: 5 años, 3.000€/mes
- Tasa incremental de endeudamiento: 5% anual (0,4167% mensual)
- Pagos: 60 meses × 3.000€

El valor presente de esta anualidad = 3.000 × [1 - (1+0,004167)^(-60)] / 0,004167 ≈ **157.800€**

Este es el pasivo que entra en balance el primer día.

## El Activo por Derecho de Uso (ROU Asset)

El activo por derecho de uso en el momento inicial se calcula:

```
ROU Asset = Pasivo de arrendamiento
           + Pagos anticipados de arrendamiento
           + Costes directos iniciales
           - Incentivos de arrendamiento recibidos
```

El activo se amortiza linealmente (normalmente) durante el plazo del arrendamiento o la vida útil del activo subyacente, lo que sea menor.

## Impacto en los Estados Financieros

**Balance:**
- ↑ Activos no corrientes: Activo ROU
- ↑ Pasivos: Pasivo de arrendamiento (corriente y no corriente)
- Ratio de endeudamiento (D/E) empeora

**P&L:**
- En los primeros años: mayor gasto total (interés alto + amortización)
- En los últimos años: menor gasto total (interés bajo + misma amortización)
- El efecto es front-loaded frente al modelo lineal anterior
- EBITDA mejora: el gasto operativo de arrendamiento desaparece; lo que queda es EBIT (amortización del ROU)

**Cash Flow:**
- Actividades operativas: mejoran (ya no contiene el pago del arrendamiento operativo)
- Actividades de financiación: empeoran (amortización del pasivo va aquí)
- El cash flow total no cambia; solo se reclasifica

## Gestión de la Cartera de Contratos

Para una cartera de contratos, necesitas un sistema de seguimiento:

| Campo requerido por contrato | Por qué importa |
|---|---|
| Fecha inicio y plazo original | Determina el período de amortización |
| Opciones de extensión | Pueden cambiar el plazo del arrendamiento reconocido |
| Opción de compra | Afecta al cálculo del pasivo |
| Tasa de interés implícita o incremental | Determina el valor presente |
| Moneda del contrato | Riesgo de tipo de cambio |
| Pagos variables (indexados a IPC) | Requieren re-medición periódica |

## Revelaciones Requeridas en Memoria/Notas

NIIF 16 exige revelar:
1. Naturaleza de los arrendamientos y restricciones impuestas
2. Tabla de vencimientos del pasivo (menos de 1 año, 1-5 años, más de 5 años)
3. Valor en libros del ROU por categoría de activo subyacente
4. Gastos del período: amortización, interés, arrendamientos a corto plazo y bajo valor
5. Adiciones al activo por derecho de uso en el período

## Herramientas de Software

| Herramienta | Tipo | Para quién |
|---|---|---|
| LeaseQuery | SaaS especializado | Empresas con muchos contratos |
| CoStar Real Estate Manager | SaaS inmobiliario | Empresas con muchos inmuebles |
| SAP RE-FX / Oracle RMCS | ERP module | Grandes corporaciones |
| Excel + plantilla NIIF 16 | Manual | PYMES con pocos contratos |

## Entregables

Con el contexto que me des, produce:
1. Tabla de reconocimiento inicial para los 3 contratos principales (pasivo, ROU, tabla de amortización del año 1)
2. Asientos contables del primer día de adopción y de un mes tipo
3. Impacto estimado en EBITDA y ratio de deuda neta
4. Checklist de información a recopilar por cada contrato
5. Plantilla de revelaciones en notas a los estados financieros
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Aplicar correctamente NIIF 16 a la cartera de arrendamientos de la empresa y entender su impacto en los estados financieros',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Derecho de la competencia para startups — prácticas anticompetitivas',
                'description'      => 'Aprende cuándo las prácticas comerciales de una startup pueden ser anticompetitivas y cómo construir una estrategia de precios, distribución y acuerdos que cumplan la normativa.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especialista en derecho de la competencia con experiencia asesorando a startups y scale-ups. Necesito entender cuándo las prácticas comerciales de mi empresa pueden violar las normas de competencia, incluso sin tener posición dominante.

## Diagnóstico inicial

Hazme estas preguntas antes de empezar:
1. ¿En qué mercado opera tu empresa y cuál es tu cuota de mercado estimada?
2. ¿Tienes acuerdos con distribuidores, resellers o partners de canal?
3. ¿Cuál es tu modelo de precios? ¿Ofreces descuentos por volumen o fidelidad?
4. ¿Has considerado o tienes acuerdos de exclusividad con proveedores o clientes?
5. ¿Hay acuerdos con competidores (incluso informales) sobre precios, zonas o clientes?

## Marco Normativo Aplicable

| Normativa | Ámbito | Artículos clave |
|---|---|---|
| Tratado de Funcionamiento de la UE (TFUE) | Unión Europea | Art. 101 (acuerdos) y Art. 102 (abuso de posición dominante) |
| Ley 15/2007 de Defensa de la Competencia | España | Art. 1 (prácticas colusorias) y Art. 2 (abuso) |
| Reglamento de exención por categorías (VBER) | UE, acuerdos verticales | Establece el puerto seguro para acuerdos de distribución |
| Ley de Mercados Digitales (DMA) | UE, gatekeepers digitales | Obligaciones específicas para plataformas muy grandes |

## Las Dos Infracciones Principales

### 1. Acuerdos Anticompetitivos (Art. 101 TFUE / Art. 1 LDC)

Afectan a **cualquier empresa**, independientemente de su tamaño. La startup que no tiene posición dominante puede igualmente infringir el Art. 101.

**Restricciones horizontales (entre competidores) — SIEMPRE PROHIBIDAS:**
- Fijación de precios entre competidores
- Reparto de mercados ("tú te quedas clientes grandes, yo los pequeños")
- Limitación de capacidad de producción coordinada
- Coordinación en licitaciones (bid rigging)

**Restricciones verticales (entre proveedor y distribuidor):**

| Práctica | ¿Permitida? | Condición |
|---|---|---|
| Precios mínimos de reventa (RPM) | ❌ Prohibida | Siempre es restricción hardcore |
| Exclusividad territorial al distribuidor | ✅ Permitida con límites | Cuota ≤ 30% de cada parte + no restricciones hardcore |
| Cláusulas de no competencia | ✅ Permitida con límites | Máximo 5 años, cuota ≤ 30% |
| Precios máximos de reventa (precio recomendado) | ✅ Permitida | No debe funcionar como precio mínimo de facto |
| Exclusividad de cliente | ✅ Permitida con límites | Cuota ≤ 30% de cada parte |

### 2. Abuso de Posición Dominante (Art. 102 TFUE / Art. 2 LDC)

Solo aplica si tienes **posición dominante** (≥ 40% cuota de mercado relevante como presunción, aunque es un análisis más amplio).

**Abusos exclusionarios:**
- Precios predatorios (vender por debajo del coste para eliminar competidores)
- Negativa de suministro sin justificación objetiva
- Descuentos de fidelidad condicionados a compra exclusiva
- Tying y bundling anticompetitivo

**Abusos explotativos:**
- Precios excesivos
- Condiciones comerciales no equitativas

## Áreas de Riesgo Específicas para Startups

**1. El problema del exchange de información**
Los encuentros en eventos del sector, grupos de Slack o asociaciones de industria donde se comentan precios o estrategias pueden constituir infracción, aunque sean informales.
Regla práctica: si no lo pondrías en un comunicado de prensa, no lo digas a un competidor.

**2. Algoritmos de precios**
Si usas software de pricing dinámico que ajusta precios en función de los de la competencia en tiempo real, revisa si coordina implícitamente precios con otros usuarios del mismo software (hub-and-spoke theory).

**3. Cláusulas de "most favoured nation" (MFN)**
Las cláusulas por las que el partner se compromete a no ofrecer mejor precio a otros canales pueden ser anticompetitivas en mercados con alta concentración de plataformas.

**4. Acuerdos de exclusividad en distribución**
Permitidos bajo VBER si cuota < 30%, pero pueden ser problemáticos si cierran el mercado a competidores de forma significativa.

## Exenciones y Puertos Seguros

**Regla de mínimis (acuerdos horizontales):** si la cuota de mercado combinada de las partes es inferior al 10%, el acuerdo generalmente no tiene efecto apreciable.

**VBER (acuerdos verticales):** puerto seguro si cada parte tiene cuota ≤ 30% y el acuerdo no contiene restricciones hardcore (RPM, exclusividades absolutas de territorio activo/pasivo).

**Eficiencias del Art. 101(3):** un acuerdo restrictivo puede estar exento si produce eficiencias (innovación, mejora de producto), beneficia a los consumidores, y las restricciones son proporcionales.

## Compliance Básico para una Startup

| Medida | Por qué | Cuándo implementarla |
|---|---|---|
| Política de competencia (1 página) | Define qué está prohibido en contacto con competidores | Al contratar los primeros comerciales |
| Revisión legal de contratos con distribuidores | Verificar que no contienen restricciones hardcore | Antes de firmar cualquier acuerdo de canal |
| Formación al equipo comercial | El riesgo de carteles suele surgir en ventas | Anual |
| Revisión de cláusulas de pricing con partners | MFN y exclusividades bajo escrutinio regulatorio | Al escalar el canal |

## Entregables

Con el contexto que me des, produce:
1. Análisis de riesgo de tus contratos de distribución actuales bajo VBER
2. Checklist de comportamientos prohibidos para el equipo de ventas
3. Draft de política de competencia interna (1 página)
4. Mapa de las 3 prácticas de mayor riesgo en tu modelo de negocio con recomendación de mitigación
5. Guía de qué hacer si recibes una inspección de la CNMC o la Comisión Europea
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Identificar y mitigar riesgos de derecho de la competencia en los acuerdos comerciales y estrategia de precios de una startup',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Gestión del knowledge base — base de conocimiento que reduce tickets',
                'description'      => 'Aprende a construir y mantener una base de conocimiento que reduzca el volumen de tickets, mejore la experiencia del cliente y empodere al equipo de soporte.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un especialista en Customer Success y Knowledge Management con experiencia en plataformas de soporte a escala. Necesito ayuda para construir o mejorar nuestra base de conocimiento de forma que reduzca el volumen de tickets repetitivos y empodere tanto a clientes como al equipo de soporte.

## Diagnóstico inicial

Primero hazme estas preguntas:
1. ¿Qué herramienta de ticketing y knowledge base usáis? (Zendesk, Intercom, Freshdesk, Notion, Confluence)
2. ¿Cuántos tickets gestionáis al mes y cuál es el volumen de tickets repetitivos?
3. ¿Tenéis ya una knowledge base existente? ¿Cuándo fue la última actualización masiva?
4. ¿Cuántas personas hay en el equipo de soporte?
5. ¿Qué tipo de clientes tenéis? (B2B técnicos, B2C no técnicos, mezcla)

## Los Tres Pilares de una Knowledge Base Efectiva

**1. Encontrabilidad (Findability)**
El mejor artículo es inútil si el cliente no lo encuentra. Prioriza:
- Búsqueda semántica potente (Zendesk Guide, Intercom Articles o Algolia)
- Estructura de categorías plana (máximo 2 niveles de profundidad)
- Títulos en lenguaje del cliente, no en jerga interna
- URL amigables y SEO-optimizadas para que Google indexe correctamente

**2. Claridad (Clarity)**
El cliente en modo problema tiene poca paciencia. Cada artículo debe seguir esta estructura:

| Sección | Qué incluye |
|---|---|
| Título | Pregunta o acción concreta ("¿Cómo cancelo mi suscripción?") |
| Resumen (1 párrafo) | Qué resuelve el artículo y cuándo aplica |
| Pasos / solución | Numbered list, screenshots si aplica |
| ¿Sigue sin funcionar? | Enlace a ticket o chat para escalar |
| Artículos relacionados | 2-3 links a artículos complementarios |

**3. Actualidad (Freshness)**
Una knowledge base desactualizada es peor que no tener una: genera desconfianza.
- Auditoría trimestral de los 50 artículos más visitados
- Sistema de caducidad: cada artículo tiene una fecha de revisión asignada
- Proceso de actualización vinculado a cada release del producto

## Taxonomía y Arquitectura de Contenidos

Diseña la estructura de categorías siguiendo los jobs-to-be-done del cliente:

**Estructura recomendada para SaaS B2B:**
```
├── Primeros pasos
│   ├── Cómo crear tu cuenta
│   ├── Configuración inicial
│   └── Guía de onboarding rápido
├── Funcionalidades principales
│   ├── [Feature 1]
│   ├── [Feature 2]
│   └── [Feature 3]
├── Integraciones
│   └── [Por herramienta integrada]
├── Facturación y suscripción
├── Seguridad y privacidad
└── Solución de problemas
    ├── Errores comunes
    └── Rendimiento
```

## El Flujo de Creación de Artículos desde Tickets

El mejor contenido para tu knowledge base ya existe: está en los tickets. Implementa este flujo:

**1. Detección de temas recurrentes (semanal)**
Analiza los tickets de la semana y agrupa los repetitivos. Cualquier tema que aparezca 3+ veces en una semana se convierte en candidato a artículo.

**2. Priorización de artículos nuevos**
| Criterio | Puntos |
|---|---|
| Volumen (tickets/semana) | 1 punto por cada 5 tickets |
| Tiempo de resolución alto (>10 min) | +2 puntos |
| Impacto en NPS (clientes frustrados) | +3 puntos |
| Facilidad de documentar | +1 punto |

Los artículos con mayor puntuación se crean primero.

**3. Ciclo de creación: draft → revisión → publicación**
- Agente de soporte: draft del artículo en 15 min usando la plantilla
- Tech writer o lead de soporte: revisión de claridad y precisión (30 min)
- Publicación y enlace desde el macros del ticket

## Self-Service y Deflexión de Tickets

El objetivo final es que el cliente resuelva solo. Mide y mejora:

| Métrica | Definición | Objetivo |
|---|---|---|
| Self-service rate | % de sesiones en KB que no terminan en ticket | > 70% |
| Article effectiveness | % de lectores que votan "fue útil" | > 80% |
| Deflection rate | Tickets evitados por la KB / Tickets totales | > 25% |
| Search with no results | Búsquedas que no devuelven resultados | < 10% → crear artículo |

**Técnica de deflexión en el formulario de tickets:**
Antes de enviar el ticket, muestra automáticamente los 3 artículos más relevantes para la consulta del cliente. Esta sola técnica puede deflectar el 15-20% de los tickets.

## Knowledge Base Interna para el Equipo de Soporte

Además de la pública, el equipo necesita su propia knowledge base interna:

| Contenido | Dónde documentarlo |
|---|---|
| Procedimientos de escalado | Wiki interna (Notion/Confluence) |
| Guía de productos por versión | Vinculada al changelog de producto |
| Respuestas a situaciones delicadas (refunds, data breaches) | Solo accesible a seniors |
| Directorio de quién sabe qué | FAQ de "a quién preguntar" |

## Gobierno de la Knowledge Base

Asigna responsabilidades claras:

| Rol | Responsabilidad |
|---|---|
| Knowledge Base Owner (KBO) | Arquitectura, métricas, auditorías |
| Content Contributors (agentes) | Crear drafts desde tickets |
| Reviewers | Aprobar antes de publicar |
| Product liaison | Notificar cambios de producto que requieren actualización |

## Entregables

Con el contexto que me des, produce:
1. Arquitectura de categorías adaptada a tu producto
2. Plantilla de artículo de knowledge base lista para usar
3. Proceso de creación de contenido desde tickets (flujo en 5 pasos)
4. Dashboard de métricas de KB (qué medir y con qué frecuencia)
5. Plan de auditoría trimestral de la knowledge base existente
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir una base de conocimiento que reduzca el volumen de tickets en un 25% y mejore la experiencia de autoservicio del cliente',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Tarifa hora vs. tarifa proyecto — calcula la tarifa que garantiza tu rentabilidad',
                'description'      => 'Aprende a decidir cuándo cobrar por hora y cuándo por proyecto, y cómo calcular la tarifa mínima que cubre tus costes y objetivos de ingresos como freelance.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor de negocio especializado en freelancers y profesionales independientes. Necesito ayuda para establecer mis tarifas de forma que garanticen mi rentabilidad, reflejen el valor que aporto y me permitan crecer como negocio unipersonal.

## Contexto inicial

Hazme estas preguntas antes de empezar:
1. ¿Cuál es tu disciplina y especialización? (diseño, desarrollo, consultoría, marketing, etc.)
2. ¿Cuántos años de experiencia tienes y en qué sectores?
3. ¿Cuál es tu objetivo de ingresos anuales netos?
4. ¿Cuántas horas quieres trabajar por semana como máximo?
5. ¿Trabajas principalmente con clientes nacionales o también internacionales?

## El Error Más Común: No Calcular la Tarifa Mínima

Muchos freelancers fijan su tarifa mirando lo que cobran los demás. El punto de partida debe ser tu coste real.

**Paso 1: Calcula tus horas facturables reales al año**

| Concepto | Cálculo |
|---|---|
| Semanas laborables al año | 52 semanas |
| Menos vacaciones (4 semanas) | -4 semanas = 48 semanas |
| Menos formación y admin (2 semanas) | -2 semanas = 46 semanas |
| Horas por semana que quieres trabajar | 40h |
| Total horas disponibles | 46 × 40 = 1.840h |
| Factor de facturabilidad (solo el 60-70% son facturables) | × 0,65 |
| **Horas facturables reales al año** | **≈ 1.196h** |

**Paso 2: Calcula tus costes anuales totales**

| Categoría | Importe anual estimado |
|---|---|
| Cuota autónomos / seguridad social | [según tramo] |
| IRPF estimado (retenciones + declaración) | [según ingresos objetivo] |
| Software y herramientas | [tus herramientas] |
| Formación y libros | [tu objetivo] |
| Marketing y web | [presupuesto] |
| Coworking o espacio de trabajo | [si aplica] |
| Seguro de responsabilidad civil | [si aplica] |
| Colchón de imprevistos (10-15% de ingresos) | [calculado] |
| **Total costes** | **Σ** |

**Paso 3: Tarifa hora mínima**

```
Tarifa hora mínima = (Objetivo ingresos netos + Total costes) / Horas facturables
```

Añade un margen de beneficio del 20-30% sobre esa base. Esa es tu tarifa hora de mercado objetivo.

## Tarifa Hora vs. Tarifa Proyecto: Cuándo Usar Cada Una

| Modelo | Cuándo funciona | Riesgo principal |
|---|---|---|
| Tarifa hora | Proyectos con alcance incierto, cambios frecuentes, trabajo de auditoría | El cliente controla tu rentabilidad |
| Tarifa proyecto | Alcance definido y claro, tu experiencia te da ventaja en velocidad | Scope creep que no está en el precio |
| Retainer mensual | Trabajo recurrente, relación a largo plazo | Que el retainer se rellene con trabajo de bajo valor |
| Value-based pricing | Proyectos de alto impacto para el cliente | Difícil de cuantificar el valor si eres junior |

**La ventaja oculta de la tarifa proyecto para el freelance experimentado:**
Si un proyecto que cotizas a 3.000€ lo terminas en 15h, tu tarifa efectiva es 200€/h aunque hayas cotizado a precio cerrado. La experiencia es tu ventaja competitiva real.

## Cómo Calcular una Tarifa de Proyecto Sin Sorpresas

**Plantilla de estimación:**

| Fase | Horas estimadas | Buffer (20%) | Horas totales |
|---|---|---|---|
| Briefing y discovery | 3h | 0,6h | 3,6h |
| Propuesta / estrategia | 4h | 0,8h | 4,8h |
| Ejecución principal | 20h | 4h | 24h |
| Revisiones (máx. 2 rondas) | 6h | 1,2h | 7,2h |
| Entrega y presentación | 2h | 0,4h | 2,4h |
| **Total** | **35h** | **7h** | **42h** |

```
Precio proyecto = 42h × tarifa hora objetivo + costes externos (ilustradores, stock, etc.)
```

**Cláusulas que debes incluir siempre en proyectos de precio cerrado:**
1. Definición clara de entregables y qué NO está incluido
2. Número máximo de rondas de revisión (normalmente 2)
3. Precio por hora del trabajo adicional fuera de alcance
4. Condición de suspensión si el cliente tarda en dar feedback

## Retainer: El Santo Grial del Freelance

Un retainer mensual te da predecibilidad de ingresos. Cómo estructurarlo:

| Tipo de retainer | Cómo funciona | Ventaja |
|---|---|---|
| Por horas comprometidas | X horas/mes a tarifa reducida (10-15% descuento) | Simple, fácil de gestionar |
| Por disponibilidad | Cliente tiene prioridad y acceso directo, paga por estar disponible | Rentable si el cliente no usa todo |
| Por resultados | Fee ligado a métricas (leads generados, traffic, etc.) | Escalable, alinea incentivos |

**Regla del retainer:** No aceptes un retainer que te deje sin capacidad para otros clientes a menos que la compensación lo justifique completamente.

## Negociación de Tarifa: Guión para No Bajar

Cuando el cliente dice "es caro":
1. No bajes la tarifa inmediatamente → reduce el alcance primero
2. "Podemos hacer eso dentro de tu presupuesto si empezamos solo con [parte del proyecto]"
3. Si insiste en precio completo a menor coste: "Mi tarifa refleja X años de experiencia y el resultado que buscas. Puedo conectarte con alguien junior si el presupuesto es el factor decisivo."
4. Siempre ten en mente tu número mínimo y no lo cruces.

## Métricas de Salud Financiera del Freelance

| Métrica | Definición | Objetivo |
|---|---|---|
| Utilización | Horas facturadas / horas disponibles | 65-75% |
| Ingresos por hora real | Ingresos mensuales / horas trabajadas totales | > tarifa mínima calculada |
| Concentración de clientes | % de ingresos del cliente más grande | < 40% (riesgo si > 50%) |
| Días de cobro medio | Tiempo entre factura y cobro | < 30 días |
| Colchón de liquidez | Meses de costes cubiertos en cuenta | ≥ 3 meses |

## Entregables

Con el contexto que me des, produce:
1. Cálculo personalizado de tu tarifa hora mínima y tarifa objetivo
2. Comparativa de tus tres modelos de tarifa (hora, proyecto, retainer) con ejemplos concretos
3. Plantilla de estimación de proyecto para usar con clientes
4. Guión de respuesta cuando el cliente dice "es caro"
5. Dashboard personal de métricas financieras mensuales (tabla para copiar en Notion o Excel)
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Calcular la tarifa hora y proyecto correcta como freelance y decidir qué modelo de pricing usar en cada situación',
                'vote_score'       => 38,
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
