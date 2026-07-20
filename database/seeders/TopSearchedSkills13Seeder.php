<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills13Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Copywriting para Meta Ads: anuncios que convierten en frío con la estructura que escala',
                'description'       => 'Escribe anuncios de Facebook e Instagram que convierten a audiencias frías. Con las estructuras de copy que funcionan por objetivo (conversión, generación de leads, video), los ganchos que detienen el scroll y el proceso de testing creativo.',
                'prompt_content'    => <<<'PROMPT'
Eres un Performance Copywriter especializado en Meta Ads con experiencia gestionando presupuestos de 10k a 500k€/mes en campañas de conversión B2C y B2B.

Mi contexto:
- Producto / servicio que anuncio: [describe]
- Objetivo del anuncio: [conversión / leads / awareness / tráfico]
- Público objetivo (audiencia fría): [perfil demográfico e intereses]
- Precio del producto: [€]
- Presupuesto de testing mensual: [€]
- Mayor problema con los anuncios actuales: [CTR bajo / muchos clics pero pocas conversiones / ads fatigued / no sé qué probar]

## Sistema de Copywriting para Meta Ads — [Producto]

### 🎣 Los 5 tipos de gancho que detienen el scroll

El gancho son las primeras 2-3 líneas del texto y los primeros 3 segundos del video. Si no enganchan, el resto del ad no importa.

**Gancho 1 — La pregunta que señala el dolor:**
"¿Cuántas veces has [problema recurrente que tu ICP odia]?"
"¿Sigues [comportamiento ineficiente] en [año]?"

**Gancho 2 — El resultado contraintuitivo:**
"Cómo [resultado deseado] sin [esfuerzo/coste que todos esperan]"
"[Resultado específico] en [tiempo] — sin [sacrificio común]"

**Gancho 3 — La prueba social específica:**
"[N] empresas de [sector] ya han [resultado] con [producto]"
"[Nombre del cliente] pasó de [situación A] a [situación B] en [tiempo]"

**Gancho 4 — El miedo a perderse algo:**
"Solo hasta el [fecha]: [oferta]"
"[Recurso gratuito] que el [X% de] tu competencia ya está usando"

**Gancho 5 — La declaración atrevida:**
"[Afirmación contraintuitiva sobre el sector]"
"El [método convencional] está muerto. Aquí está lo que funciona en [año]"

### 📐 Estructura del ad de conversión (formato texto largo)

```
[GANCHO — 2 líneas que paran el scroll]

[AGITACIÓN DEL PROBLEMA — 2-3 frases que hacen sentir el dolor]
Describes la situación actual del prospect tan bien que piensa que lo conoces personalmente.

[PRESENTACIÓN DE LA SOLUCIÓN — 1 frase]
"Por eso creamos [producto]: [descripción en lenguaje del beneficio, no de la feature]"

[3 BULLETS DE BENEFICIO — concretos y medibles]
✅ [Beneficio 1 con cifra]
✅ [Beneficio 2 con tiempo o resultado]
✅ [Beneficio 3 con diferenciador]

[PRUEBA SOCIAL]
"[Cita de cliente o dato de usuarios]"

[CTA — uno solo, urgente y específico]
"[Botón] → [Lo que ocurre al hacer clic, no 'saber más']"
```

### 🎬 Copy para el hook de video (los primeros 3 segundos)

**Formato de video hook que para el scroll:**
- Texto en pantalla con la pregunta o declaración del gancho
- Elemento visual sorprendente o del problema reconocible
- La voz dice lo mismo que el texto (para who tiene el audio apagado)

**Guión del primer video ad (30 segundos):**
[Estructura completa con timing por sección]

### 🧪 Sistema de testing creativo

**Qué testear primero (mayor impacto):**
1. El gancho (3 versiones distintas — mismo cuerpo)
2. El visual (imagen vs. video vs. carrusel)
3. La CTA / oferta

**Cómo interpretar los resultados:**
- CTR < 1%: el gancho no funciona → cambiar lo primero
- CTR > 2% pero conversiones bajas: problema en la landing, no en el ad
- CPM alto: el algoritmo no entiende a quién mostrar el ad → revisar segmentación

### 📊 Las métricas que miran los media buyers
CPC, CTR, CPM, ROAS, CPL — cuál priorizar según tu objetivo de campaña.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Meta Ads, copywriting, performance marketing, conversión',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Diseño de APIs RESTful: convenciones, versionado y documentación con OpenAPI/Swagger',
                'description'       => 'Diseña una API REST que los developers disfruten consumir. Con las convenciones de naming, la estructura de respuestas, el manejo de errores, la estrategia de versionado y la documentación OpenAPI generada automáticamente.',
                'prompt_content'    => <<<'PROMPT'
Eres un API Design Engineer con experiencia diseñando APIs públicas y privadas consumidas por miles de developers.

Mi contexto:
- Tipo de API: [pública / interna / para partners / para apps móviles]
- Stack backend: [Node.js / Python / PHP Laravel / Go / Ruby / otro]
- Estado actual: [API nueva / refactorizando una existente con inconsistencias]
- Consumidores de la API: [frontend propio / apps móviles / terceros / otros servicios internos]

## Guía de Diseño de API RESTful — [Proyecto]

### 📐 Convenciones de nomenclatura y URLs

**Recursos en plural, sustantivos, lowercase con guiones:**
```
✅ GET  /api/v1/users
✅ GET  /api/v1/users/{id}
✅ GET  /api/v1/users/{id}/orders
✅ POST /api/v1/users/{id}/activate   (acción como sub-recurso)

❌ GET /api/v1/getUser
❌ GET /api/v1/Users/{Id}
❌ POST /api/v1/user/doActivate
```

**Métodos HTTP según la semántica:**
| Método | Uso | Idempotente | Body |
|--------|-----|------------|------|
| GET | Leer recurso | Sí | No |
| POST | Crear recurso | No | Sí |
| PUT | Reemplazar recurso completo | Sí | Sí |
| PATCH | Actualizar parcialmente | No | Sí (solo campos a cambiar) |
| DELETE | Eliminar recurso | Sí | No |

### 📦 Estructura de respuestas consistente

**Respuesta exitosa (envelope pattern):**
```json
{
  "data": {
    "id": "usr_01h3x5k7p9q2r4",
    "email": "ana@empresa.com",
    "name": "Ana García",
    "created_at": "2025-01-15T10:30:00Z"
  },
  "meta": {
    "request_id": "req_abc123"
  }
}
```

**Respuesta de lista con paginación:**
```json
{
  "data": [...],
  "meta": {
    "total": 1247,
    "per_page": 20,
    "current_page": 3,
    "last_page": 63
  },
  "links": {
    "prev": "/api/v1/users?page=2",
    "next": "/api/v1/users?page=4"
  }
}
```

**Manejo de errores (siempre consistente):**
```json
{
  "error": {
    "code": "VALIDATION_ERROR",
    "message": "Los datos proporcionados no son válidos",
    "details": [
      { "field": "email", "message": "El email no tiene un formato válido" },
      { "field": "password", "message": "Mínimo 8 caracteres" }
    ]
  }
}
```

**HTTP status codes correctos:**
- 200 OK: GET exitoso
- 201 Created: POST exitoso (con Location header apuntando al nuevo recurso)
- 204 No Content: DELETE exitoso
- 400 Bad Request: error de validación
- 401 Unauthorized: no autenticado
- 403 Forbidden: autenticado pero sin permisos
- 404 Not Found: recurso no existe
- 422 Unprocessable Entity: entidad correcta pero no procesable por reglas de negocio
- 429 Too Many Requests: rate limit alcanzado
- 500 Internal Server Error: error del servidor (no expongas detalles)

### 🔄 Estrategia de versionado

**En la URL (la más clara para los consumidores):**
`/api/v1/users` → `/api/v2/users`

**Cuándo crear una nueva versión:**
- Breaking changes en los contratos de respuesta
- Cambios en la autenticación
- Eliminación de campos o endpoints

**Política de deprecación:**
- Anunciar con 6 meses de antelación
- Header de deprecación en respuestas: `Deprecation: Sun, 01 Jan 2026 00:00:00 GMT`
- Mantener v1 funcionando durante el período de transición

### 📚 Documentación OpenAPI (Swagger)

**Ejemplo de spec básica:**
```yaml
openapi: 3.1.0
info:
  title: [API Name]
  version: 1.0.0

paths:
  /users/{id}:
    get:
      summary: Obtener usuario por ID
      parameters:
        - name: id
          in: path
          required: true
          schema: { type: string }
      responses:
        '200':
          description: Usuario encontrado
          content:
            application/json:
              schema: { $ref: '#/components/schemas/User' }
        '404':
          description: Usuario no encontrado
```

**Herramientas de generación automática:**
- Laravel: `darkaonline/l5-swagger`
- Express: `swagger-jsdoc`
- FastAPI: generación automática nativa
- Go: `swaggo/swag`
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'API design, REST, OpenAPI, documentación, versionado',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Mapa de empatía y journey map: las herramientas de UX que conectan equipo y usuario',
                'description'       => 'Crea el mapa de empatía y el customer journey map de tu usuario objetivo. Con el proceso de investigación, el formato de los entregables y cómo usar estos artefactos para alinear al equipo de producto en torno a las necesidades reales del usuario.',
                'prompt_content'    => <<<'PROMPT'
Eres un UX Researcher con experiencia facilitando talleres de design thinking y convirtiendo investigación de usuarios en artefactos que cambian las decisiones de producto.

Mi contexto:
- Producto o servicio: [describe]
- Perfil del usuario a mapear: [describe el segmento — no todos los usuarios, uno específico]
- Datos disponibles: [entrevistas / encuestas / datos de analytics / soporte / combinación]
- Objetivo del ejercicio: [alinear al equipo / descubrir oportunidades / priorizar features / otro]
- Audiencia del entregable: [equipo de producto / dirección / equipo de diseño / todos]

## Mapa de Empatía y Journey Map — [Perfil de usuario]

### 👤 Paso 1 — Define el proto-persona

Antes de hacer los mapas, necesitas un perfil concreto:

**Nombre ficticio:** [ej: "Ana, Marketing Manager"]
**Cargo y empresa:** [describe]
**Contexto:** un día normal en su vida profesional relacionado con tu producto
**Objetivo principal:** qué quiere conseguir en relación con tu producto o área
**Situación actual:** cómo resuelve el problema hoy (con o sin tu producto)

### 🧠 Mapa de Empatía (qué piensa, siente, hace y oye)

**Cuadrante 1 — DICE Y HACE (observable):**
- Qué dice en conversaciones sobre [tu área]: frases literales de entrevistas
- Cómo actúa en [situación]: comportamientos observables
- Qué hace en su rutina diaria relacionado con [tu área]

**Cuadrante 2 — PIENSA Y SIENTE (interno):**
- Qué le importa de verdad (más allá de lo que dice)
- Qué le preocupa aunque no lo exprese
- Qué ambiciones tiene en su trabajo / vida

**Cuadrante 3 — OYE (influencias):**
- Qué dicen sus colegas / jefe / red profesional sobre [tu área]
- Qué medios o comunidades consumen
- Quién influye en sus decisiones

**Cuadrante 4 — VE (entorno):**
- Qué ve en el mercado / competencia
- Cómo es su entorno de trabajo
- Qué herramientas ve usar a otros

**FRUSTRACIONES:** las cosas que le irritan, le dan miedo o son obstáculos
**ASPIRACIONES:** qué quiere lograr, qué mide el éxito para ella

### 🗺️ Customer Journey Map (el viaje completo)

**Las etapas del journey de [usuario] con [tu producto/servicio]:**

| Etapa | Descubrimiento | Evaluación | Primera compra/uso | Uso regular | Recomendación |
|-------|--------------|-----------|-------------------|------------|--------------|
| **Qué hace** | [acciones] | [acciones] | [acciones] | [acciones] | [acciones] |
| **Qué piensa** | [pensamientos] | [pensamientos] | [pensamientos] | [pensamientos] | [pensamientos] |
| **Qué siente** | [emociones 😤😐😊] | [emociones] | [emociones] | [emociones] | [emociones] |
| **Touchpoints** | [canales] | [canales] | [canales] | [canales] | [canales] |
| **Oportunidades** | [mejoras] | [mejoras] | [mejoras] | [mejoras] | [mejoras] |

**Gráfica de emoción a lo largo del journey:**
Cómo representar los picos de frustración y satisfacción en un diagrama sencillo.

### 💡 De los mapas a las oportunidades de diseño

**Cómo facilitar el taller de síntesis (60 min):**
Ejercicio de "How Might We" para convertir frustraciones en preguntas de oportunidad.

"Ana se siente frustrada cuando [fricción]"
→ "¿Cómo podríamos [intervención que alivia la fricción]?"

**Priorizar las oportunidades:**
Matriz Impacto × Viabilidad para elegir qué construir primero.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'UX research, mapa de empatía, customer journey, design thinking',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Sales playbook: el manual que convierte a un junior en vendedor productivo en 30 días',
                'description'       => 'Crea el sales playbook de tu empresa: los mensajes clave, los flujos de prospección, el manejo de objeciones y los procesos que permiten a cualquier vendedor nuevo replicar los resultados de los mejores en el equipo.',
                'prompt_content'    => <<<'PROMPT'
Eres un VP of Sales con experiencia construyendo equipos de ventas desde 0 a 30 personas y escalando procesos que no dependan de héroes individuales.

Mi contexto:
- Producto / servicio: [describe]
- Ticket medio: [€]
- Ciclo de venta: [X días/semanas/meses]
- Tamaño del equipo comercial: [N personas]
- Mayor problema ahora: [los nuevos tardan 4+ meses en ser productivos / los resultados dependen de quién llama / no hay proceso documentado / el mejor vendedor se va y nos llevamos un susto]

## Sales Playbook — [Empresa]

### 📖 Módulo 1 — Conocimiento del producto y el mercado

**El problema que resolvemos (en palabras del cliente, no del producto):**
[3 problemas por orden de frecuencia + cómo los describe el cliente]

**Nuestros clientes ideales (ICP):**
| Segmento | Cargo comprador | Trigger de compra | Mensaje principal |
|---------|----------------|-----------------|-----------------|
| [Segmento A] | [Cargo] | [Evento que los hace buscar] | [Mensaje] |
| [Segmento B] | [Cargo] | [Evento] | [Mensaje] |

**Lo que hace que un cliente NO sea para nosotros:**
Las señales en los primeros 10 minutos de que no deberías perder tiempo.

**Competitive intelligence:**
Los 3 competidores principales y el argumentario honesto de por qué elegir a cada uno (incluyéndonos).

### 📋 Módulo 2 — Proceso de prospección

**Perfil de cliente a buscar (señales de compra activa):**
- Trigger 1: [evento de negocio que genera necesidad]
- Trigger 2: [señal en LinkedIn / noticias / financiación]
- Trigger 3: [comportamiento en web o en producto]

**Secuencia de prospección multi-touch:**
| Día | Canal | Acción | Template |
|-----|-------|--------|---------|
| 1 | Email | Primer contacto | [link al template] |
| 3 | LinkedIn | Conexión + nota | [link al template] |
| 5 | Email | Follow-up #1 | [link al template] |
| 8 | Teléfono | Llamada de introducción | [guión] |
| 11 | Email | Follow-up #2 con valor | [link al template] |
| 15 | Email | Breakup email | [link al template] |

**Templates completos para cada paso:**
[Cada mensaje listo para personalizar — con las variables entre corchetes]

### 💬 Módulo 3 — Discovery call

**Objetivo de la call:** entender si hay fit y hacer que el prospect articule sus problemas.

**Agenda (45 min):**
- 0-5: Contexto y agenda
- 5-20: Preguntas de discovery (ver SPIN Selling)
- 20-35: Presentación de la solución adaptada a lo que dijeron
- 35-45: Siguientes pasos

**Las 10 preguntas de discovery que no pueden faltar:**
[Adaptadas a tu producto — con el tipo SPIN de cada una]

### 🛡️ Módulo 4 — Manejo de objeciones

Para cada objeción, la respuesta en 3 partes: reconocer + redirigir + preguntar
```
"El precio es muy alto"
→ Reconocer: "Entiendo que el presupuesto es una variable importante."
→ Redirigir: "Cuando comparamos el coste vs. [valor que genera], muchos clientes ven el ROI en [X meses]."
→ Preguntar: "¿Qué retorno esperarías ver para que tuviera sentido la inversión?"
```

Las 8 objeciones más frecuentes y su respuesta exacta.

### 🎓 Módulo 5 — Onboarding del nuevo vendedor (30 días)
- Semana 1: Inmersión (producto, ICP, competencia)
- Semana 2: Shadowing (escuchar al senior en calls)
- Semana 3: Primeras calls propias con acompañamiento
- Semana 4: Autonomía con revisión diaria

Objetivos medibles al final de cada semana.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Sales playbook, onboarding de ventas, proceso comercial',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Discovery continuo: entrevistas semanales con usuarios integradas en el ritmo del equipo',
                'description'       => 'Implementa el hábito de investigación de usuarios continua que Teresa Torres llama "continuous discovery". Con el proceso de reclutamiento siempre abierto, la guía de entrevista que funciona y cómo sintetizar aprendizajes en decisiones de producto.',
                'prompt_content'    => <<<'PROMPT'
Eres un Product Manager con experiencia implementando prácticas de Continuous Discovery en equipos ágiles que antes no tenían cultura de investigación de usuarios.

Mi contexto:
- Tipo de producto: [SaaS / app móvil / marketplace / otro]
- Acceso a usuarios: [fácil / difícil — requiere incentivos / no tenemos datos de contacto]
- Frecuencia de entrevistas actuales: [nunca / esporádicas / mensual / ninguna]
- Metodología del equipo: [Scrum / Shape Up / Kanban]
- Resistencia interna: [el equipo cree que "ya sabemos lo que quieren los usuarios" / no hay tiempo / otro]

## Programa de Continuous Discovery — [Producto]

### 🎯 El objetivo: 1 entrevista por semana, mínimo

No necesitas grandes proyectos de investigación. Necesitas un hábito pequeño y consistente.

**Por qué 1 entrevista/semana:**
- En 4 semanas tienes 4 entrevistas → patrones empiezan a emerger
- En 12 semanas tienes 12 entrevistas → modelo mental sólido del usuario
- Sin el hábito: tomas decisiones de producto basadas en hipótesis que nunca validas

### 🔄 El sistema de reclutamiento siempre encendido

**No puedes esperar a necesitar usuarios para buscarlos.**

**Fuentes de reclutamiento permanente:**
1. **In-app recruiting:** banner discreto que aparece tras cierta acción ("¿Te gustaría hablar con el equipo de producto? 20 minutos, un regalo de [€X] de recompensa")
2. **Email a usuarios activos:** segmento de usuarios que usa el producto frecuentemente
3. **Slack / comunidades:** si tienes comunidad de usuarios
4. **Usuarios que cancelaron:** la perspectiva más valiosa y más olvidada

**La landing de reclutamiento:**
Formulario con 3 preguntas para calificar si el usuario es representativo del segmento que quieres estudiar. Automatiza la agenda con Calendly.

**Incentivo:** Amazon voucher / PayPal / descuento en el producto — €20-40 para B2C, innecesario muchas veces para B2B (los decisores valoran el acceso directo al equipo de producto).

### 🗣️ La guía de entrevista (que no guía, sino escucha)

**El error más frecuente en entrevistas de usuario:**
Preguntar lo que quieren para el futuro ("¿qué features te gustarían?") en lugar de explorar el comportamiento presente ("cuéntame la última vez que...").

**Estructura de la entrevista de 45 minutos:**

**Apertura (5 min):**
- "Gracias por tu tiempo. Esta sesión es para aprender de ti, no para venderte nada."
- "Voy a grabar la sesión para no tomar notas — ¿está bien?"
- "No hay respuestas correctas ni incorrectas. Me interesa tu experiencia real."

**Contexto del usuario (10 min):**
- "¿Puedes contarme un poco sobre tu rol y lo que haces en el día a día?"
- "¿Cómo encaja [área relacionada con tu producto] en tu trabajo?"

**El trabajo a realizar (20 min) — la zona de oro:**
- "Cuéntame la última vez que necesitaste [resultado que tu producto promete]."
- "¿Qué pasó primero? ¿Y luego?"
- "¿Qué herramientas o procesos usaste?"
- "¿Qué fue lo más frustrante de esa experiencia?"
- "¿Qué hubiera hecho que esa experiencia fuera perfecta?"

**Cierre (10 min):**
- "¿Hay algo que crees que debería saber y no te he preguntado?"
- "¿Hay alguien más que debería hablar?"

### 📊 Síntesis: de las notas al aprendizaje accionable

**El opportunity solution tree (OST) de Teresa Torres:**
Conecta los outcomes de negocio → las oportunidades descubiertas en entrevistas → las soluciones potenciales → los experimentos para validarlas.

**Reunión de síntesis semanal (30 min):**
El PM comparte los 3 insights más importantes de las entrevistas de la semana + las oportunidades que abren.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Continuous discovery, entrevistas de usuario, investigación de producto',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Onboarding de nuevos empleados: el plan de 90 días que acelera la productividad y retiene',
                'description'       => 'Diseña el programa de onboarding estructurado que hace que un nuevo empleado sea productivo en 30 días y fiel a la empresa a los 90. Con el plan semana a semana, los recursos, los rituales y las métricas para saber si funciona.',
                'prompt_content'    => <<<'PROMPT'
Eres un People Operations Manager con experiencia diseñando onboardings que reducen el tiempo hasta la productividad un 40% y el abandono en los primeros 6 meses un 30%.

Contexto:
- Tipo de empresa: [startup / scale-up / PYME / empresa mediana]
- Rol para el que diseñas el onboarding: [generalista / específico para un equipo]
- Modalidad de trabajo: [presencial / remoto / híbrido]
- Problema actual con el onboarding: [el nuevo se siente perdido / tardamos meses en que sean productivos / alta rotación en los primeros 3 meses / no hay proceso definido]
- Herramientas disponibles: [Notion / Confluence / Google Workspace / otra]

## Plan de Onboarding — [Empresa] / [Rol]

### 🎯 El objetivo de cada fase

**Días 1-30:** El nuevo se orienta y entiende el contexto
**Días 31-60:** El nuevo contribuye con ayuda
**Días 61-90:** El nuevo contribuye de forma autónoma

### 📋 Antes del primer día (preboarding)

**La semana antes del primer día:**
- [ ] Email de bienvenida del manager con: agenda del primer día, qué traer, cómo llegar o conectarse
- [ ] Equipamiento configurado y esperando (laptop, accesos, cuentas)
- [ ] Buddy asignado (compañero, no el manager, que le ayuda a navegar la empresa)
- [ ] Carta de bienvenida del CEO si la empresa es < 100 personas
- [ ] Agenda de las primeras 2 semanas bloqueada en el calendario

### 📅 Plan semana a semana

**Semana 1 — Orientación:**
| Día | Actividad | Duración | Con quién |
|-----|----------|---------|----------|
| 1 mañana | Bienvenida, tour, presentaciones | 2h | Manager + buddy |
| 1 tarde | Accesos, herramientas, lectura de cultura | 2h | Solo |
| 2 | Reunión con los miembros del equipo (1:1 de 20 min cada uno) | 3h | Equipo |
| 3 | Inmersión en el producto / servicio | Full day | CS o producto |
| 4 | Historia de la empresa + estrategia | 2h | CEO o manager |
| 5 | Primer 1:1 con el manager (30 días — objetivos y expectativas) | 1h | Manager |

**Semana 2-4 — Inmersión:**
- Reuniones con cada área clave para entender qué hacen y cómo interactúan con su rol
- Primer proyecto pequeño con un entregable concreto (visible + factible)
- Daily check-in de 15 min con el buddy

**Semana 5-8 — Primera contribución:**
- El nuevo asume responsabilidades reales con supervisión del manager
- Proyectos de dificultad creciente
- Feedback semanal estructurado (no solo "¿cómo vas?")

**Semana 9-12 — Autonomía:**
- El nuevo trabaja de forma autónoma con check-ins quincenales
- Review de 90 días: logros, dificultades, objetivos del siguiente trimestre

### 📄 Los recursos que el nuevo debe tener en el día 1

1. Guía de bienvenida (cultura, valores, cómo funciona la empresa)
2. Glosario interno (siglas, nombres de productos, jerga del equipo)
3. Organigrama con fotos y roles
4. Mapa de herramientas (qué se usa para qué)
5. FAQ de las preguntas más frecuentes del primer mes

### 📊 Cómo saber si el onboarding funciona
Encuesta de 5 preguntas al día 30, al día 60 y al día 90 para medir la experiencia del nuevo.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Onboarding de empleados, incorporación, retención temprana',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis de rentabilidad por cliente, producto o canal: saber dónde ganas de verdad',
                'description'       => 'Calcula la rentabilidad real de cada cliente, línea de producto o canal de venta más allá de los ingresos. Con la imputación de costes, el margen de contribución y la matriz de decisión para enfocarte en lo que realmente te hace ganar dinero.',
                'prompt_content'    => <<<'PROMPT'
Eres un Controller financiero con experiencia ayudando a PYMEs y scale-ups a descubrir que el 20% de sus clientes o productos genera el 80% de sus beneficios (o pérdidas).

Mi situación:
- Tipo de negocio: [servicios / productos físicos / SaaS / mixto]
- Número de clientes activos: [N] o líneas de producto: [N]
- Estructura de costes aproximada: [% de personal / % de materiales / % de estructura]
- Problema principal: [no sé cuáles son mis clientes más rentables / tengo muchos clientes pequeños que consumen mucho tiempo / no sé si una línea de producto es rentable / otro]

## Análisis de Rentabilidad — [Empresa]

### 📐 El modelo de Margen de Contribución por cliente/producto

**Paso 1 — Identifica los ingresos reales por cliente:**
No solo la facturación, también: descuentos, devoluciones, ajustes de precio.

**Paso 2 — Costes directos por cliente (COGS):**
- Materiales / licencias directamente imputables al cliente
- Tiempo del equipo: [horas dedicadas × coste/hora del empleado]
- Subcontratistas directos
- Viajes y gastos de cliente

**Paso 3 — Margen de contribución (MC):**
```
MC = Ingresos netos - Costes directos
MC% = MC / Ingresos netos
```

**Paso 4 — Costes indirectos prorrateados:**
Costes de estructura (oficina, herramientas, managers, administración) prorrateados por cliente según un criterio razonable (horas / facturación / número de proyectos).

**Paso 5 — Rentabilidad neta por cliente:**
```
Resultado por cliente = MC - Costes indirectos imputados
```

### 📊 La Matriz de Rentabilidad

Clasifica a todos los clientes/productos en 4 cuadrantes:

| | Alta facturación | Baja facturación |
|--|-----------------|-----------------|
| **Alto margen** | 🌟 Estrellas — proteger y crecer | 💎 Joyas — subir precio o escalar |
| **Bajo margen** | ⚠️ Vacas flacas — revisar costes o precio | 💀 Lastres — eliminar o transformar |

**Lo que harás con cada cuadrante:**
- Estrellas: máxima atención, referencia para captación
- Joyas: subir precio, vender más (son más rentables que los grandes)
- Vacas flacas: renegociar contratos, reducir costes de servicio o aceptar menor dedicación
- Lastres: plan de salida, reconversión o eliminación

### 🔍 Por qué los clientes grandes no siempre son los más rentables

**El efecto "cliente difícil":**
Un cliente que factura €100k pero genera 3x más soporte, reuniones y cambios de scope que los demás puede ser menos rentable que uno de €30k con buena comunicación.

**Métricas de coste de relación a calcular:**
- Horas de gestión de cuenta / facturación
- Número de revisiones o cambios fuera de scope
- Tiempo de cobro (clientes que pagan tarde tienen un coste financiero)

### 📋 Plantilla de análisis en Google Sheets / Excel
Estructura de la hoja de cálculo con las fórmulas necesarias para hacer el análisis tú mismo.

### 🚀 Las 3 decisiones que cambian el negocio
Lo que hace el 80% de las empresas después de hacer este análisis por primera vez.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Análisis de rentabilidad, margen de contribución, gestión financiera',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Contrato de prestación de servicios profesionales B2B con protecciones reales',
                'description'       => 'Redacta el contrato de servicios profesionales que protege tu trabajo, garantiza el pago y define el alcance con precisión. Con las cláusulas de scope, propiedad intelectual, confidencialidad y resolución de conflictos que realmente se ejecutan.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado mercantilista especializado en contratos de servicios profesionales para consultoras, agencias, freelancers y proveedores tecnológicos en España.

Contexto del contrato:
- Quién presta el servicio: [autónomo / SL / agencia]
- Tipo de servicio: [consultoría / desarrollo software / diseño / marketing / auditoría / formación / otro]
- Cliente: [empresa española / empresa extranjera / administración pública]
- Duración: [proyecto puntual / contrato indefinido / retainer mensual]
- Importe: [€ / €/mes]
- Forma de pago: [X% inicial / por hitos / mensual / al finalizar]

## CONTRATO DE PRESTACIÓN DE SERVICIOS PROFESIONALES

**Entre:**
[Tu nombre/razón social], con NIF [X], domicilio en [dirección], (en adelante, "el Prestador")

**Y:**
[Nombre del cliente], con CIF [X], domicilio en [dirección], (en adelante, "el Cliente")

---

### CLÁUSULA 1 — OBJETO DEL CONTRATO

**Descripción detallada de los servicios:**
[Qué harás exactamente — en términos concretos y verificables, no genéricos]

**Entregables específicos:**
[Lista de entregables con formato, cantidad y estándar de calidad]

**Lo que NO incluye este contrato (out of scope):**
[Lista explícita de lo que no está incluido — el 80% de los conflictos viene de scope no definido]

---

### CLÁUSULA 2 — DURACIÓN Y PLAZOS

**Fecha de inicio:** [fecha]
**Fecha de finalización o duración:** [fecha o "indefinido con preaviso de X días"]
**Hitos y fechas de entrega intermedias:**
[Tabla con hito → fecha → entregable]

---

### CLÁUSULA 3 — PRECIO Y CONDICIONES DE PAGO

**Precio total / Tarifa mensual:** [€ + IVA aplicable]

**Forma de pago:**
- [X%] al firmar el contrato: [€]
- [X%] al alcanzar el hito Y: [€]
- [X%] a la entrega final: [€]

**Intereses de demora:** según Ley 3/2004 (tipo BCE + 8 puntos) desde el primer día de impago.

**Revisión de precios en contratos indefinidos:**
[Cláusula de actualización anual — IPC o porcentaje fijo]

---

### CLÁUSULA 4 — PROPIEDAD INTELECTUAL

**Titularidad durante el contrato:**
Todos los entregables son propiedad del Prestador hasta el pago total.

**Transmisión de derechos:**
Tras el pago completo, el Cliente adquiere [licencia de uso / cesión de todos los derechos / otros].

**El Prestador se reserva el derecho de:**
[Usar el trabajo en portfolio / mencionar al cliente como referencia — o eliminarlo si el cliente lo requiere]

---

### CLÁUSULA 5 — CONFIDENCIALIDAD
[NDA bilateral — protege la información de ambas partes durante y después del contrato]

---

### CLÁUSULA 6 — CAMBIOS DE ALCANCE (Change Management)
Todo cambio de scope debe solicitarse por escrito y ser aprobado por ambas partes.
El Prestador proporcionará presupuesto del impacto (tiempo + coste) en [X días hábiles].
[Esta cláusula es la que te salva del "es solo un pequeño cambio"]

---

### CLÁUSULA 7 — RESOLUCIÓN Y PENALIZACIONES
Causas de resolución anticipada por cada parte y consecuencias económicas.

### CLÁUSULA 8 — JURISDICCIÓN
Juzgados y Tribunales de [ciudad], con renuncia expresa a cualquier otro fuero.

---

### ⚠️ Las 5 cláusulas que nunca debes firmar como prestador
Y cómo renegociarlas si el cliente las incluye en su contrato estándar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Contrato de servicios, derecho mercantil, protección del prestador',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Voice of Customer (VOC): captura y actúa sobre el feedback del cliente de forma sistemática',
                'description'       => 'Implementa el programa de Voz del Cliente que convierte el feedback disperso en insights accionables. Con las fuentes de captura, el proceso de síntesis, la priorización de insights y el loop de cierre que hace que los clientes sientan que les escuchas.',
                'prompt_content'    => <<<'PROMPT'
Eres un Head of Customer Experience con experiencia implementando programas VOC que conectan el feedback del cliente con las decisiones de producto, ventas y soporte.

Contexto:
- Tipo de empresa: [SaaS / e-commerce / servicios / otro]
- Fuentes de feedback actuales: [lista lo que ya tienes: encuestas / tickets / NPS / reviews / redes / otro]
- Lo que pasa hoy con el feedback: [se recoge pero nadie actúa / no se recoge de forma sistemática / hay demasiado y no sabemos qué priorizar]
- Stakeholders que necesitan el VOC: [producto / marketing / ventas / dirección / todos]

## Programa Voice of Customer — [Empresa]

### 📡 Paso 1 — Sistema de captura multi-fuente

**Fuentes de VOC y cómo estructurarlas:**

| Fuente | Tipo de insight | Frecuencia | Herramienta |
|--------|----------------|-----------|-----------|
| NPS (promotores y detractores) | Lealtad + razón | Trimestral / post-evento | Delighted / Typeform |
| CSAT post-soporte | Calidad de experiencia | Inmediato post-ticket | Intercom / Zendesk |
| Entrevistas de usuario | Profundidad cualitativa | Mensual | Calendly + grabación |
| Reviews en G2/Capterra/TrustPilot | Percepción de mercado | Continuo | Monitorización |
| Tickets de soporte (clasificados) | Problemas frecuentes | Continuo | Dashboard |
| Conversaciones de ventas perdidas | Por qué NO compraron | Post-deal | CRM + Gong |
| Churn interviews | Por qué se van | Post-cancelación | Llamada 1:1 |

**La fuente más olvidada y más valiosa:** el churn interview. El 20% de los que se van te dirán exactamente lo que el producto no resuelve si les llamas a los 3 días de cancelar.

### 🔍 Paso 2 — Síntesis de insights

**El problema del feedback sin procesar:**
100 tickets diciendo cosas distintas no son 100 insights. Son ruido hasta que los agrupas.

**Proceso de síntesis mensual (2 horas):**
1. Recopilar todo el feedback del mes en un solo documento
2. Etiquetar cada piece de feedback por tema / área del producto
3. Contar frecuencia por etiqueta → Pareto de temas
4. Para los 5 temas más frecuentes: ¿qué dice exactamente el cliente? (verbatims)
5. Redactar el "insight resumen" en formato: "Los usuarios de [segmento] sienten que [problema] cuando [situación], lo que les hace [consecuencia]"

### 📊 Paso 3 — Priorización de insights

**Matriz de prioridad:**
| Insight | Frecuencia | Impacto en retención | Impacto en conversión | Prioridad |
|---------|-----------|---------------------|----------------------|---------|
| [Insight 1] | Alta | Alto | Medio | 🔴 |
| [Insight 2] | Media | Alto | Bajo | 🟡 |

### 🔁 Paso 4 — El closed-loop feedback (lo que hace que el cliente sienta que le escuchas)

**Cuando el feedback genera una acción:**
Notificar al cliente que lo que dijo cambió algo:
"El mes pasado nos dijiste que [problema]. Hoy lanzamos [solución]. Fue directo gracias a tu feedback."

**Porcentaje de clientes que reciben este cierre:**
El benchmark es > 20% — las empresas que lo hacen tienen NPS 15+ puntos más alto.

### 📢 Distribución interna del VOC
Cómo compartir el VOC mensual con producto, ventas y marketing en un formato de 1 página que todos leen.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Voice of Customer, feedback de clientes, CX, NPS',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Marca personal como freelance: de invisible a referente en tu nicho en 6 meses',
                'description'       => 'Construye la marca personal que hace que los clientes te busquen a ti, no al revés. Con la estrategia de contenido, los canales donde estar, la frecuencia sostenible y la forma de medir que la marca personal está generando oportunidades reales.',
                'prompt_content'    => <<<'PROMPT'
Eres un brand strategist especializado en marca personal para freelancers y consultores que quieren atraer clientes inbound sin depender de plataformas como Upwork o referidos.

Mi situación:
- Especialidad: [tu nicho]
- Presencia online actual: [LinkedIn con X conexiones / sin presencia / blog / otro]
- Tiempo disponible para crear contenido: [X horas/semana]
- Objetivo de la marca personal: [atraer clientes / hablar en eventos / escribir un libro / conseguir un empleo / otro]
- El tipo de contenido que disfruto creando: [escribir / hablar en vídeo / podcasting / diseñar / algo distinto]

## Plan de Marca Personal — [Tu nombre]

### 🎯 Tu posicionamiento único (sin él, eres uno más)

**La fórmula de posicionamiento:**
[Nombre] ayuda a [tipo de cliente específico] a [resultado medible] mediante [tu método o perspectiva única].

**Lo que te hace diferente de los otros [X] [tu profesión] en LinkedIn:**
No es tu experiencia (todos tienen experiencia). Es:
- Tu perspectiva única sobre un problema del sector
- El tipo de cliente con el que consigues mejores resultados
- Tu método o proceso que nadie más tiene documentado
- Tu historia personal que conecta con el ICP

### 📢 El canal principal (uno, no todos)

**Por qué uno solo (al menos al principio):**
Estar "en todos lados" sin presupuesto = no estar en ninguno. Domina un canal hasta que genere resultados, luego expande.

**Elige según lo que disfrutas:**
- Escribes bien → LinkedIn o newsletter (Substack / Beehiiv)
- Cómodo en cámara → YouTube o TikTok / Reels
- Prefieres hablar → Podcast o Twitter Spaces
- Diseñas bien → Instagram / Behance

**Recomendación para la mayoría de freelancers B2B:** LinkedIn + newsletter

### 📅 Sistema de contenido sostenible (para 6 meses)

**Los 3 tipos de post para LinkedIn:**

**1. Post educativo (3 de 4 semanas):**
Enseña algo que sabes que el 80% de tu ICP no sabe. El que educa, posiciona.
- Formato: lista de consejos / framework de 3 pasos / mito desmontado
- Longitud: 150-300 palabras
- Sin enlace externo en el post (LinkedIn penaliza el alcance)

**2. Post de opinión contraintuitiva (1 de 4 semanas):**
Una afirmación que va contra la sabiduría convencional de tu sector.
- Genera debate, comentarios y engagement de calidad
- Requiere valentía y base sólida para defenderla

**3. Post de caso real (1 vez al mes):**
Un resultado concreto que conseguiste para un cliente (con permiso).
- Es la prueba social más poderosa
- Formato: problema → proceso → resultado

**Calendario de contenido (las primeras 12 semanas):**
[Lista de 12 temas de post educativo + 3 temas de opinión + 3 casos reales]

### 📈 Métricas de marca personal que realmente importan
No los likes. Lo que indica que la marca genera oportunidades:
- Solicitudes de conexión de tu ICP por semana
- DMs con preguntas sobre tus servicios por mes
- Veces mencionado o compartido por otros referentes
- Leads inbound atribuibles al contenido

### 🚀 Los primeros 3 posts que debes publicar esta semana
El mejor momento para empezar fue hace 6 meses. El segundo mejor, ahora.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 15,
                'use_case'          => 'Marca personal, LinkedIn, contenido para freelancers, inbound',
                'vote_score'        => 50,
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
