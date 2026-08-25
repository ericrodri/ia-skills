<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills51Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 — Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Posicionamiento de marca',
                'description'      => 'Define y comunica qué hace diferente a tu empresa frente a la competencia usando frameworks estratégicos probados.',
                'prompt_content'   => <<<'PROMPT'
Actúa como consultor senior de estrategia de marca con experiencia en posicionamiento competitivo para empresas B2B y B2C. Voy a darte información sobre mi empresa y necesito que me ayudes a construir un posicionamiento sólido y diferenciado.

**CONTEXTO DE MI EMPRESA**
- Nombre: [nombre de tu empresa]
- Sector: [sector o industria]
- Producto o servicio principal: [descripción breve]
- Público objetivo: [a quién va dirigido]
- Principales competidores: [lista 2-4 competidores]
- Diferencial que percibo (aunque no sé comunicarlo bien): [escribe aquí lo que crees que te diferencia]

---

## PASO 1 — AUDITORÍA DE POSICIONAMIENTO ACTUAL

Analiza la información que te he dado y determina:

1. **Categoría mental**: ¿En qué categoría del mercado compite la empresa? ¿Hay solapamiento con otras categorías?
2. **Percepción probable del cliente**: Con lo que sabes, ¿cómo crees que los clientes actuales describirían la empresa a un amigo?
3. **Brecha de posicionamiento**: ¿Existe diferencia entre cómo nos vemos internamente y cómo probablemente nos percibe el mercado?

---

## PASO 2 — ANÁLISIS COMPETITIVO CON MATRIZ DE POSICIONAMIENTO

Construye una tabla comparativa con los competidores indicados. Evalúa los siguientes atributos en escala 1-5:

| Atributo | Mi empresa | Competidor A | Competidor B | Competidor C |
|----------|-----------|-------------|-------------|-------------|
| Precio percibido (1=económico, 5=premium) | | | | |
| Especialización vertical | | | | |
| Facilidad de uso / experiencia cliente | | | | |
| Velocidad de entrega / time-to-value | | | | |
| Confianza y reputación de marca | | | | |
| Soporte y acompañamiento | | | | |

Identifica los **espacios en blanco**: combinaciones de atributos donde ningún competidor tiene puntuación alta.

---

## PASO 3 — DEFINICIÓN DEL POSICIONAMIENTO CON EL FRAMEWORK "FOR / WHO / UNLIKE / OUR BRAND IS"

Usa la plantilla clásica de posicionamiento estratégico y rellénala con tres variantes:

**Variante A (orientada a beneficio funcional)**
> Para [segmento de cliente] que [necesidad o problema], [nombre de marca] es la [categoría de producto] que [beneficio diferencial principal] a diferencia de [competidor o alternativa], porque [razón creíble o prueba].

**Variante B (orientada a resultado de negocio)**
> [repetir estructura con foco en ROI o resultado medible]

**Variante C (orientada a valores o identidad del cliente)**
> [repetir estructura con foco en quién es el cliente, no solo qué necesita]

---

## PASO 4 — TEST DE LOS 3 FILTROS DE POSICIONAMIENTO

Evalúa las tres variantes según:

1. **¿Es creíble?** ¿Tenemos evidencia, casos de uso o características que respalden esta afirmación?
2. **¿Es relevante?** ¿Le importa realmente a nuestro segmento objetivo?
3. **¿Es diferenciador?** ¿Podría algún competidor decir exactamente lo mismo sin mentir?

Descarta las variantes que no superen los tres filtros y quédate con la más sólida.

---

## PASO 5 — MENSAJES DERIVADOS PARA CADA CANAL

A partir del posicionamiento elegido, genera los siguientes bloques de copy listos para usar:

**Tagline (menos de 8 palabras)**
Propón 5 opciones con estilo diferente: racional, emocional, provocador, aspiracional y minimalista.

**Headline para web (H1)**
Escribe 3 versiones del encabezado principal de la homepage. Debe comunicar el posicionamiento sin que parezca genérico.

**Bio de LinkedIn (empresa, 300 caracteres)**
Descripción de empresa que refleje el posicionamiento y termine con un CTA implícito.

**Pitch de presentación (30 segundos, ~80 palabras)**
Texto para que cualquier miembro del equipo presente la empresa de forma consistente en un evento o reunión.

---

## PASO 6 — HOJA DE RUTA DE IMPLEMENTACIÓN

Crea un plan de activación del posicionamiento a 90 días con estas columnas:

| Semana | Acción | Responsable sugerido | Indicador de éxito |
|--------|--------|---------------------|-------------------|
| 1-2 | | | |
| 3-4 | | | |
| 5-8 | | | |
| 9-12 | | | |

Incluye acciones en: web, redes sociales, materiales de ventas, onboarding de nuevos empleados y comunicación interna.

---

**Formato de respuesta**: Usa los encabezados del prompt, tablas donde se indiquen, y devuelve los bloques de copy listos para copiar y pegar. Señala con [PERSONALIZAR] los campos que dependen de información adicional que no te he proporcionado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Definir el posicionamiento estratégico de una empresa y traducirlo en mensajes accionables para cada canal',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            // 2 — Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura de microservicios',
                'description'      => 'Decide cuándo tiene sentido migrar desde un monolito, cómo planificar la transición y los errores críticos que debes evitar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como arquitecto de software senior con más de diez años de experiencia diseñando sistemas distribuidos y migraciones de monolito a microservicios. He de tomar una decisión importante sobre la arquitectura de mi sistema y necesito que me guíes con rigor técnico y pragmatismo.

**MI CONTEXTO ACTUAL**
- Stack actual: [lenguaje, framework, base de datos]
- Tipo de aplicación: [web app / API / plataforma / SaaS / etc.]
- Número de desarrolladores en el equipo: [número]
- Número de usuarios activos / volumen de tráfico: [datos aproximados]
- Problema principal que me ha llevado a considerar microservicios: [describe el pain point: velocidad de deploy, escalado, coupling, etc.]

---

## PASO 1 — ¿REALMENTE NECESITAS MICROSERVICIOS? EL TEST HONEST

Antes de cualquier recomendación de arquitectura, responde con honestidad basándote en mi contexto:

Aplica el framework de decisión con las siguientes preguntas y califica cada respuesta (Sí / No / Parcial):

| Criterio | Mi situación | Peso |
|----------|-------------|------|
| ¿El equipo supera las 15-20 personas activas en el mismo repo? | | Alto |
| ¿Existen dominios de negocio claramente separados con equipos distintos? | | Alto |
| ¿Hay partes del sistema con requisitos de escala radicalmente diferentes? | | Medio |
| ¿El time-to-deploy supera los 30 minutos por cambio pequeño? | | Medio |
| ¿El equipo tiene experiencia en sistemas distribuidos, observabilidad y redes? | | Alto |
| ¿Existe infraestructura de contenedores/orquestación (Kubernetes, ECS)? | | Medio |
| ¿Puedes asumir latencia adicional entre servicios sin romper la UX? | | Alto |

Veredicto con tres niveles posibles:
- **Monolito modulado**: la solución correcta ahora mismo
- **Modular monolith como paso previo**: preparar el terreno sin el coste operacional aún
- **Microservicios justificados**: condiciones dadas, planificar migración

---

## PASO 2 — DESCOMPOSICIÓN POR DOMINIOS (DDD SIMPLIFICADO)

Si la decisión apunta hacia microservicios (ahora o en el futuro), identifica los bounded contexts de mi aplicación:

1. Pídeme que describa las entidades principales del dominio y las acciones clave.
2. Propón una agrupación inicial de servicios basada en cohesión funcional y autonomía de datos.
3. Crea una tabla:

| Servicio propuesto | Responsabilidad | Base de datos propia | Dependencias externas | Prioridad de extracción |
|-------------------|----------------|---------------------|----------------------|------------------------|
| | | | | |

---

## PASO 3 — ESTRATEGIA DE MIGRACIÓN: EL PATRÓN STRANGLER FIG

Explica cómo aplicar el Strangler Fig Pattern a mi caso concreto:

1. **Fase de identificación**: qué módulo o funcionalidad extraer primero y por qué (bajo riesgo + alta autonomía)
2. **Fase de coexistencia**: cómo hacer que el monolito y el nuevo servicio convivan con un API Gateway o proxy intermedio
3. **Fase de redirección**: cuándo y cómo cortar el tráfico hacia el nuevo servicio
4. **Fase de eliminación**: limpieza del código legado en el monolito

Incluye un diagrama ASCII del estado Before / During / After para las dos primeras extracciones.

---

## PASO 4 — LOS 7 ERRORES MÁS COSTOSOS (Y CÓMO EVITARLOS)

Para cada error, indica: descripción del error, señal de alerta temprana y la solución o patrón correcto.

1. Microservicios distribuidos sin autonomía de datos (base de datos compartida)
2. Comunicación síncrona donde debería ser asíncrona
3. Ausencia de circuit breakers y timeouts definidos
4. Falta de observabilidad: sin trazas distribuidas, métricas por servicio y logs correlacionados
5. Servicios demasiado granulares ("nanoservicios")
6. No versionar las APIs internas desde el primer día
7. Subestimar el coste operacional en infraestructura y DevOps

---

## PASO 5 — CHECKLIST DE PREPARACIÓN ANTES DEL PRIMER SERVICIO

Genera un checklist categorizado que mi equipo debe completar antes de extraer el primer microservicio:

**Infraestructura**
- [ ] ...

**Observabilidad**
- [ ] ...

**Comunicación entre servicios**
- [ ] ...

**CI/CD**
- [ ] ...

**Documentación**
- [ ] ...

---

**Formato de respuesta**: técnico pero explicativo. Usa tablas, diagramas ASCII y listas numeradas. Cuando haya trade-offs importantes, preséntalo en formato "Ventaja / Desventaja / Cuándo elegirlo".
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 60,
                'use_case'         => 'Evaluar si migrar a microservicios, diseñar la estrategia de extracción y evitar los errores más costosos',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            // 3 — Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Diseño accesible WCAG',
                'description'      => 'Auditoría técnica de accesibilidad digital y guía para corregir los problemas más frecuentes en interfaces web y móvil.',
                'prompt_content'   => <<<'PROMPT'
Actúa como especialista en accesibilidad digital con certificación CPACC y experiencia auditando productos digitales bajo los estándares WCAG 2.1 y 2.2. Necesito que me ayudes a auditar y mejorar la accesibilidad de mi producto.

**MI PRODUCTO**
- Tipo: [web app / sitio corporativo / e-commerce / app móvil / dashboard]
- Stack tecnológico: [React / Vue / WordPress / nativo iOS/Android / otro]
- Nivel de conformidad objetivo: [A / AA / AAA] — si no lo sabes, el estándar habitual es AA
- Contexto de uso: [B2B / B2C / sector público / educación / salud]

---

## PASO 1 — LOS 4 PRINCIPIOS WCAG Y SU APLICACIÓN PRÁCTICA

Explica los principios POUR (Perceivable, Operable, Understandable, Robust) en términos concretos para un equipo de diseño y desarrollo, con un ejemplo de fallo común y su solución para cada uno:

| Principio | Descripción en lenguaje sencillo | Error típico en interfaces modernas | Corrección concreta |
|-----------|----------------------------------|-------------------------------------|---------------------|
| Perceptible | | | |
| Operable | | | |
| Comprensible | | | |
| Robusto | | | |

---

## PASO 2 — AUDITORÍA POR COMPONENTE

Para cada componente de interfaz listado, indica los criterios WCAG relevantes, el error más frecuente y la solución en código o diseño:

**Navegación y estructura**
- Menús de navegación
- Breadcrumbs
- Skip links (saltar al contenido principal)
- Jerarquía de headings (H1-H6)

**Formularios**
- Labels asociados a inputs
- Mensajes de error descriptivos
- Campos obligatorios
- Autocompletado semántico

**Multimedia y contenido visual**
- Imágenes con texto alternativo
- Vídeos con subtítulos y descripción de audio
- Infografías y gráficos de datos
- Iconos interactivos sin etiqueta

**Color y contraste**
- Texto normal vs. fondo (ratio mínimo 4.5:1)
- Texto grande vs. fondo (ratio mínimo 3:1)
- Elementos interactivos (botones, enlaces, inputs activos)
- Uso del color como único indicador de estado

**Interacción y teclado**
- Foco visible en todos los elementos interactivos
- Orden lógico del foco (Tab order)
- Atajos de teclado documentados
- Modales y drawers: gestión del foco atrapado

---

## PASO 3 — HERRAMIENTAS DE AUDITORÍA RECOMENDADAS

Crea una tabla de herramientas por categoría con su caso de uso y limitación principal:

| Herramienta | Categoría | Qué detecta | Qué NO detecta | Gratuita |
|-------------|-----------|-------------|----------------|---------|
| axe DevTools | | | | |
| Lighthouse | | | | |
| NVDA + Firefox | | | | |
| VoiceOver + Safari | | | | |
| Color Contrast Analyser | | | | |
| Accessibility Insights | | | | |

Nota importante: las herramientas automáticas detectan aproximadamente el 30-40% de los problemas. Explica qué tipos de errores solo se pueden detectar con evaluación manual o tests con usuarios.

---

## PASO 4 — PLANTILLA DE INFORME DE ACCESIBILIDAD

Genera una plantilla de informe de auditoría con:

**Cabecera del informe**
- Fecha de auditoría, URL/versión auditada, nivel WCAG objetivo, método de evaluación

**Tabla de hallazgos** (una fila por issue):

| ID | Criterio WCAG | Nivel | Componente afectado | Descripción del problema | Impacto usuario | Prioridad (Alta/Media/Baja) | Solución recomendada | Estado |
|----|--------------|-------|--------------------|--------------------------|-----------------|-----------------------------|----------------------|--------|

**Resumen ejecutivo**
- Número de issues por nivel (A, AA, AAA) y por prioridad
- Score de conformidad estimado
- Las 3 acciones prioritarias antes del próximo sprint

---

## PASO 5 — GUÍA DE DISEÑO ACCESIBLE DESDE CERO

Si el proyecto está en etapa de diseño, proporciona:

1. **Paleta de colores accesible**: cómo generar una paleta que cumpla contraste AA en todas las combinaciones texto/fondo
2. **Sistema tipográfico**: tamaños mínimos, interlineado y familias tipográficas favorables para dislexia y baja visión
3. **Estados de interacción accesibles**: hover, focus, active, disabled, error — qué debe cambiar visualmente en cada uno
4. **Checklist de handoff diseñador → desarrollador**: qué anotaciones incluir en Figma para garantizar implementación accesible

---

**Formato de respuesta**: incluye ejemplos de código HTML/CSS cuando sea relevante. Prioriza la practicidad sobre la teoría. Usa el formato [WCAG X.X.X] para referenciar criterios específicos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Auditar la accesibilidad de un producto digital y obtener un plan de corrección priorizado',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 4 — Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Account planning anual',
                'description'      => 'Planificación estratégica de cuentas clave para maximizar el revenue en 12 meses con un framework estructurado y accionable.',
                'prompt_content'   => <<<'PROMPT'
Actúa como director de ventas estratégicas con experiencia en gestión de cuentas enterprise y metodologías como MEDDIC, Challenger Sale y Strategic Selling. Necesito que me ayudes a construir el account plan anual para una de mis cuentas clave.

**DATOS DE LA CUENTA**
- Nombre de la empresa: [nombre del cliente]
- Sector: [sector]
- Facturación actual con esta cuenta (ARR): [cifra]
- Productos o servicios contratados actualmente: [lista]
- Tiempo de relación: [años/meses]
- Contacto principal: [cargo del interlocutor habitual]
- Fecha de próxima renovación: [mes/año]

---

## SECCIÓN 1 — ANÁLISIS DE LA CUENTA (ESTADO ACTUAL)

### 1.1 Mapa de stakeholders
Crea una tabla con los stakeholders identificados o probables:

| Nombre / Cargo | Rol en decisión (Económico / Técnico / Usuario / Coach) | Nivel de relación (1-5) | Postura hacia nosotros (Promotor/Neutral/Detractor) | Motivación principal |
|----------------|--------------------------------------------------------|------------------------|-----------------------------------------------------|---------------------|

### 1.2 Análisis SWOT de la cuenta
- **Fortalezas**: qué tenemos bien establecido en esta cuenta
- **Debilidades**: gaps de relación, competidores instalados, dependencias de un solo contacto
- **Oportunidades**: proyectos en pipeline, áreas sin penetrar, cambios organizativos favorables
- **Amenazas**: cambios de interlocutor, presión de competidores, restricción presupuestaria

### 1.3 Health Score actual
Evalúa la salud de la cuenta en los siguientes indicadores (1-5):

| Indicador | Puntuación | Señales observadas |
|-----------|-----------|-------------------|
| Uso del producto (adoption) | | |
| Engagement del equipo del cliente | | |
| NPS o satisfacción percibida | | |
| Pago y comportamiento comercial | | |
| Profundidad de la relación (varios contactos) | | |

---

## SECCIÓN 2 — OBJETIVOS ANUALES Y POTENCIAL DE CUENTA

### 2.1 Objetivos de revenue
- ARR objetivo al cierre del año: [cifra]
- Crecimiento esperado en %: [%]
- Vías de crecimiento priorizadas:

| Vía | Producto/servicio | Revenue potencial | Probabilidad | Timing estimado |
|-----|------------------|-------------------|-------------|----------------|
| Upsell | | | | |
| Cross-sell | | | | |
| Expansión de usuarios/licencias | | | | |
| Nuevo departamento o filial | | | | |
| Renovación con mejora de tier | | | | |

### 2.2 Potencial total de la cuenta (TAM interno)
Calcula el potencial máximo que esta cuenta podría generar si adoptara toda tu oferta. Compara con el ARR actual para definir el "whitespace" sin explotar.

---

## SECCIÓN 3 — PLAN DE ACCIÓN POR TRIMESTRE

Para cada trimestre, define:

**Q1**
- Objetivo principal (relacional / comercial / técnico)
- Actividades clave (reuniones, workshops, QBR, demos, propuestas)
- Milestones a alcanzar
- KPI de progreso

**Q2 / Q3 / Q4** [mismo formato]

---

## SECCIÓN 4 — ESTRATEGIA DE MULTITHREADING

Una cuenta es vulnerable si solo tienes un contacto. Diseña la estrategia para ampliar relaciones:

1. ¿Qué otros departamentos o perfiles podrían beneficiarse de nuestra solución?
2. ¿Qué excusa o valor tenemos para iniciar esa conversación?
3. ¿Quién de nuestro equipo (técnico, éxito, dirección) puede ser el puente?

Genera un plan de contacto de 90 días para establecer al menos 2 relaciones nuevas dentro de la cuenta.

---

## SECCIÓN 5 — RESUMEN EJECUTIVO DEL ACCOUNT PLAN

Genera un resumen de máximo una página (para compartir internamente en el equipo de ventas) que incluya:
- Estado de la cuenta en 3 líneas
- Objetivo anual y potencial
- Top 3 oportunidades priorizadas
- Top 3 riesgos y su mitigación
- Próximos 3 pasos con fecha y responsable

---

**Formato de respuesta**: usa tablas para toda la información estructurada. El resumen ejecutivo en texto limpio. Señala con [PENDIENTE] cualquier dato que deba completarse con información real de la cuenta.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 60,
                'use_case'         => 'Construir el account plan anual de una cuenta clave con objetivos, mapa de stakeholders y plan de acción trimestral',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            // 5 — Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Go-to-market de producto',
                'description'      => 'El plan de lanzamiento que maximiza la adopción desde el día 1, con todos los elementos estratégicos y operativos coordinados.',
                'prompt_content'   => <<<'PROMPT'
Actúa como Head of Product con experiencia en lanzamientos B2B y B2C, y con conocimiento profundo de frameworks GTM como el de April Dunford, Crossing the Chasm y los playbooks de Product-Led Growth. Necesito construir el plan de go-to-market para mi próximo lanzamiento.

**MI PRODUCTO**
- Nombre del producto / feature: [nombre]
- Descripción en una frase: [qué hace y para quién]
- Tipo de lanzamiento: [nuevo producto / feature mayor / nueva vertical / expansión geográfica]
- Fecha de lanzamiento prevista: [fecha o trimestre]
- Presupuesto disponible para lanzamiento: [aproximado o "bootstrapped"]
- Modelo de negocio: [freemium / suscripción / one-time / PLG / sales-led]

---

## MÓDULO 1 — FUNDAMENTOS DEL LANZAMIENTO

### 1.1 Definición del ICP (Ideal Customer Profile)
Crea dos o tres perfiles de cliente ideal con esta estructura:

| Campo | ICP Primario | ICP Secundario |
|-------|-------------|----------------|
| Sector / industria | | |
| Tamaño de empresa | | |
| Cargo del comprador | | |
| Cargo del usuario final | | |
| Problema principal que resuelve | | |
| Alternativas que usa hoy | | |
| Criterio de decisión principal | | |
| Señal de que está listo para comprar | | |

### 1.2 Propuesta de valor diferenciada
Usando el framework de April Dunford, define:
- **Contexto competitivo**: ¿con qué alternativas nos comparan los clientes?
- **Atributos únicos**: ¿qué hacemos que las alternativas no hacen, o hacemos mejor?
- **Valor para el cliente**: ¿qué resultado obtiene el cliente gracias a esos atributos?
- **Segmento que más lo valora**: ¿quién aprecia más ese valor?

### 1.3 Categoría de mercado
¿Creamos una nueva categoría, entramos en una existente o la redefinimos? Implicaciones en el messaging y en el esfuerzo educativo necesario.

---

## MÓDULO 2 — ESTRATEGIA DE LANZAMIENTO

### 2.1 Tipo de lanzamiento por audiencia

| Fase | Audiencia | Objetivo | Métricas de éxito |
|------|----------|----------|------------------|
| Alpha / beta privada | | | |
| Lanzamiento interno (equipo + early adopters) | | | |
| Soft launch (segmento acotado) | | | |
| Lanzamiento general | | | |

### 2.2 Canales de adquisición prioritarios
Para cada canal, indica el objetivo (awareness / activación / conversión), el formato de contenido, el presupuesto estimado y el KPI principal:

| Canal | Objetivo | Formato | Presupuesto | KPI |
|-------|----------|---------|------------|-----|
| Email a base existente | | | | |
| Redes sociales orgánico | | | | |
| PR / notas de prensa | | | | |
| Product Hunt / directorios | | | | |
| Partnerships | | | | |
| Paid (si aplica) | | | | |

---

## MÓDULO 3 — ASSETS DE LANZAMIENTO

Lista todos los materiales que hay que preparar antes del día D, con responsable sugerido y fecha límite:

**Web y producto**
- [ ] Landing page de producto con propuesta de valor clara
- [ ] Demo interactiva o video walkthrough (máx. 2 min)
- [ ] Pricing page actualizada
- [ ] Onboarding flow revisado

**Marketing y contenido**
- [ ] Email de anuncio a base de usuarios (plantilla incluida abajo)
- [ ] Posts de redes sociales (3 versiones: día -1, día 0, día +7)
- [ ] Blog post de lanzamiento (estructura sugerida abajo)
- [ ] Nota de prensa si aplica

**Ventas y soporte**
- [ ] Battle card actualizada
- [ ] FAQ interna para el equipo de soporte
- [ ] Demo deck para ventas
- [ ] Casos de uso y testimonios de beta testers

---

## MÓDULO 4 — PLANTILLAS DE COPY

**Email de lanzamiento a usuarios existentes (estructura)**
- Asunto: 3 opciones A/B/C
- Cuerpo: hook + problema + solución + CTA principal + CTA secundario

**Post de LinkedIn día 0**
- Formato: historia + insight + producto + CTA (máx. 1.300 caracteres)

**Headline de landing page**
- 5 opciones con diferentes ángulos (beneficio, curiosidad, prueba social, urgencia, claridad)

---

## MÓDULO 5 — MÉTRICAS Y REVISIÓN POST-LANZAMIENTO

Define el dashboard de seguimiento del lanzamiento:

| Métrica | Definición | Objetivo semana 1 | Objetivo mes 1 | Fuente de datos |
|---------|-----------|------------------|---------------|----------------|
| Nuevos usuarios registrados | | | | |
| Activación (completaron acción clave) | | | | |
| Retención a 7 días | | | | |
| NPS o CSAT inicial | | | | |
| Revenue / MRR generado | | | | |

Incluye el formato de la revisión post-mortem a los 30 días: qué salió bien, qué salió mal, qué haríamos diferente.

---

**Formato de respuesta**: organizado por módulos, con tablas y plantillas de copy directamente copiables. Añade recomendaciones proactivas cuando veas riesgos o gaps en la información que te he dado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 55,
                'use_case'         => 'Construir el plan completo de go-to-market para un lanzamiento de producto, desde el ICP hasta el dashboard de métricas',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            // 6 — RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Diversidad generacional en equipos',
                'description'      => 'Gestiona equipos con Baby Boomers, Millennials y Gen Z trabajando juntos: expectativas, conflictos y cómo sacar lo mejor de cada generación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como consultora de desarrollo organizacional especializada en cultura de empresa y gestión de equipos multigeneracionales. Tengo un equipo con perfiles de diferentes generaciones y necesito entender cómo gestionarlo con eficacia.

**MI CONTEXTO**
- Tamaño del equipo: [número de personas]
- Composición generacional aproximada: [ej: 2 Baby Boomers, 5 Millennials, 3 Gen Z]
- Sector: [sector]
- Modalidad de trabajo: [presencial / híbrido / remoto]
- Principal desafío actual: [describe el conflicto o dificultad concreta]

---

## PARTE 1 — GUÍA RÁPIDA DE CADA GENERACIÓN

Para cada generación, resume los rasgos relevantes para el contexto laboral. Evita los estereotipos; enfócate en tendencias estadísticas y sus implicaciones de gestión:

| Aspecto | Baby Boomers (1946-1964) | Gen X (1965-1980) | Millennials (1981-1996) | Gen Z (1997-2012) |
|---------|-------------------------|-------------------|------------------------|-------------------|
| Relación con la autoridad | | | | |
| Motivación principal | | | | |
| Comunicación preferida | | | | |
| Actitud ante el cambio | | | | |
| Expectativas de feedback | | | | |
| Relación con la tecnología | | | | |
| Definición de éxito profesional | | | | |
| Posibles fricciones con otras generaciones | | | | |

---

## PARTE 2 — LOS 5 CONFLICTOS GENERACIONALES MÁS FRECUENTES

Para cada conflicto, describe: qué lo provoca, cómo suele manifestarse y cómo gestionarlo como líder:

1. **Velocidad vs. profundidad**: la Gen Z quiere resultados rápidos; los Boomers valoran la reflexión y la experiencia
2. **Feedback instantáneo vs. evaluación periódica**: diferentes expectativas de frecuencia y formato
3. **Autonomía vs. estructura**: quién necesita dirección y quién necesita espacio
4. **Presencialismo vs. flexibilidad radical**: diferentes concepciones del trabajo "serio"
5. **Jerarquía vs. horizontalidad**: respeto a la autoridad basada en cargo vs. autoridad basada en conocimiento

---

## PARTE 3 — PRÁCTICAS DE GESTIÓN MULTIGENERACIONAL

### 3.1 Comunicación adaptada
Proporciona una guía para comunicar la misma información de forma efectiva a cada generación. Ejemplo: comunicar un cambio de proceso:

| Generación | Canal preferido | Tono | Qué incluir | Qué evitar |
|-----------|----------------|------|------------|-----------|

### 3.2 Feedback y reconocimiento diferenciado
Crea una guía de cómo dar feedback positivo y correctivo a cada generación, con ejemplos de frases concretas para cada caso.

### 3.3 Aprendizaje y desarrollo
Cada generación aprende de forma diferente. Diseña un menú de opciones de desarrollo profesional que sea atractivo para cada perfil:

| Formato | Baby Boomers | Gen X | Millennials | Gen Z |
|---------|-------------|-------|------------|-------|
| Mentoring | | | | |
| Formación online | | | | |
| Job rotation | | | | |
| Proyectos transversales | | | | |
| Conferencias externas | | | | |

---

## PARTE 4 — REVERSE MENTORING Y APRENDIZAJE BIDIRECCIONAL

El reverse mentoring (junior enseña a senior) es una de las herramientas más potentes para equipos multigeneracionales. Diseña un programa de 3 meses:

- **Estructura de las sesiones**: frecuencia, duración, formato
- **Temas recomendados**: qué puede enseñar cada generación a las otras
- **Cómo lanzarlo sin que parezca condescendiente para ninguna parte**
- **Métricas de éxito del programa**

---

## PARTE 5 — DIAGNÓSTICO DEL EQUIPO Y PLAN DE ACCIÓN

Con la información que me has dado sobre mi equipo, proporciona:

1. **Diagnóstico rápido**: principales tensiones probables dado mi contexto específico
2. **Quick wins (primeras 2 semanas)**: 3 acciones inmediatas de bajo coste y alto impacto
3. **Plan a 90 días**: iniciativas estructuradas para mejorar la cohesión generacional

---

**Formato de respuesta**: usa tablas y ejemplos de frases concretas. Evita la generalización sin matices; indica cuándo algo es tendencia estadística vs. comportamiento universal.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'         => 'Entender las dinámicas generacionales en el equipo y diseñar prácticas de gestión adaptadas a cada perfil',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            // 7 — Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Gestión de inventario y capital circulante',
                'description'      => 'Optimiza el stock y el ciclo de conversión de efectivo para empresas con producto físico y mejora tu liquidez sin sacrificar ventas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como director financiero con experiencia en empresas de producto físico, e-commerce y distribución. Necesito optimizar la gestión de mi inventario y mi capital circulante para mejorar la liquidez sin penalizar las ventas.

**MI EMPRESA**
- Sector: [sector: e-commerce / manufactura / distribución / retail]
- Número de referencias de producto: [aproximado]
- Coste del inventario actual en balance: [cifra aproximada]
- Plazo medio de cobro a clientes (DSO): [días]
- Plazo medio de pago a proveedores (DPO): [días]
- Días de inventario en almacén (DIO): [días, o si no lo sabes, indica el volumen de stock]
- Principal problema actual: [exceso de stock / roturas de stock / financiación de inventario / negociación con proveedores]

---

## MÓDULO 1 — EL CICLO DE CONVERSIÓN DE EFECTIVO (CCC)

### 1.1 Fórmula y diagnóstico
Explica el Ciclo de Conversión de Efectivo con la fórmula:

**CCC = DIO + DSO − DPO**

Con mis datos, calcula mi CCC actual e interpreta el resultado:
- ¿Cuántos días tarda mi empresa en convertir la inversión en inventario en efectivo?
- ¿Es alto o bajo para mi sector?
- ¿Cuánto capital queda "atrapado" en el ciclo operativo?

### 1.2 Simulación de mejora
Crea una tabla que muestre el impacto en el CCC y en el capital liberado si mejoro cada variable en 5, 10 y 15 días:

| Mejora | CCC resultante | Capital liberado estimado |
|--------|---------------|--------------------------|
| Reducir DIO 5 días | | |
| Reducir DIO 10 días | | |
| Reducir DSO 5 días | | |
| Ampliar DPO 5 días | | |
| Mejora combinada óptima | | |

---

## MÓDULO 2 — CLASIFICACIÓN ABC Y GESTIÓN DIFERENCIADA DEL STOCK

### 2.1 Análisis ABC
Explica cómo aplicar la clasificación ABC al inventario y por qué es el primer paso para una gestión eficiente:

| Categoría | % de referencias | % del valor / ventas | Política de gestión recomendada |
|-----------|-----------------|---------------------|--------------------------------|
| A (crítico) | ~20% | ~80% | |
| B (importante) | ~30% | ~15% | |
| C (secundario) | ~50% | ~5% | |

### 2.2 Stock mínimo y punto de reorden
Para cada categoría, explica cómo calcular:
- **Stock de seguridad**: fórmula con variables (demanda media, desviación, lead time, nivel de servicio objetivo)
- **Punto de reorden (ROP)**: cuándo lanzar el pedido
- **Cantidad económica de pedido (EOQ)**: el lote óptimo que minimiza costes de pedido + almacenamiento

Incluye las fórmulas y un ejemplo numérico sencillo para cada una.

---

## MÓDULO 3 — ESTRATEGIAS PARA REDUCIR EL EXCESO DE STOCK

Si el problema es exceso de inventario, proporciona un plan de acción estructurado:

1. **Identificación del stock muerto**: criterios para clasificar un artículo como slow-mover o dead stock
2. **Opciones de liquidación por impacto en margen**:

| Estrategia | Impacto en margen | Velocidad | Riesgo de canibalización |
|-----------|------------------|----------|--------------------------|
| Descuento flash en canal propio | | | |
| Venta a liquidadores / outlets | | | |
| Bundle con producto estrella | | | |
| Donación (impacto fiscal) | | | |
| Destrucción documentada | | | |

3. **Cómo evitar que se repita**: mejoras en el proceso de compra y previsión de demanda

---

## MÓDULO 4 — NEGOCIACIÓN CON PROVEEDORES PARA MEJORAR EL DPO

Proporciona tácticas concretas para ampliar los plazos de pago sin dañar la relación con el proveedor:

1. **Argumentos negociadores según el perfil del proveedor** (estratégico vs. commodity vs. pyme local)
2. **Estructuras alternativas**: confirming, pronto pago con descuento, consignación, VMI (Vendor Managed Inventory)
3. **Plantilla de email de solicitud de ampliación de plazo** (tono profesional, no agresivo)

---

## MÓDULO 5 — DASHBOARD DE CONTROL DE CAPITAL CIRCULANTE

Define los KPIs que deberías monitorizar semanalmente o mensualmente:

| KPI | Fórmula | Frecuencia | Señal de alerta |
|-----|---------|-----------|----------------|
| CCC | | | |
| Rotación de inventario | | | |
| Cobertura de stock (días) | | | |
| DSO por segmento de cliente | | | |
| DPO por proveedor | | | |
| Ratio de stock muerto / total inventario | | | |

---

**Formato de respuesta**: incluye fórmulas con variables explicadas, ejemplos numéricos concretos y recomendaciones priorizadas según el impacto en liquidez. Señala qué se puede implementar en menos de 30 días vs. qué requiere cambios de proceso más profundos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes' => 55,
                'use_case'         => 'Calcular el ciclo de conversión de efectivo, clasificar el inventario y diseñar un plan para liberar capital circulante',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            // 8 — Legal
            [
                'profession_id'    => 8,
                'title'            => 'Derecho de autor para creadores de contenido',
                'description'      => 'YouTube, fotografía, música: qué puedes usar, cómo proteger tu obra y cómo responder si alguien usa tu contenido sin permiso.',
                'prompt_content'   => <<<'PROMPT'
Actúa como abogado especializado en propiedad intelectual con experiencia en derecho de autor para creadores digitales, youtubers, fotógrafos y músicos. Necesito entender qué puedo usar en mis contenidos, cómo protejo mi obra y qué hago si alguien me la copia.

**MI CONTEXTO**
- Tipo de contenido que creo: [YouTube / fotografía / música / podcasts / diseño / escritura]
- País donde resides: [España / México / Argentina / otro]
- Plataformas donde publicas: [YouTube / Instagram / Spotify / propio web / Twitch]
- Situación concreta (si la hay): [describe si tienes un problema específico o si es consulta general]

---

## PARTE 1 — FUNDAMENTOS DEL DERECHO DE AUTOR

### 1.1 Qué protege el copyright y qué no

| Protegido por derecho de autor | NO protegido |
|-------------------------------|--------------|
| Obras originales con mínima creatividad | Ideas, conceptos, estilos |
| Textos, imágenes, música, vídeo, código | Hechos, datos, noticias |
| Desde el momento de la creación | Nombres, títulos, frases cortas |

### 1.2 Duración de la protección
Explica cuánto dura el copyright en España y en México (los dos principales países hispanos), y qué significa que una obra sea de "dominio público".

### 1.3 Los dos tipos de derechos
- **Derechos morales**: irrenunciables e intransferibles (paternidad, integridad, divulgación)
- **Derechos patrimoniales o de explotación**: reproducción, distribución, comunicación pública, transformación — estos sí se pueden licenciar o ceder

---

## PARTE 2 — QUÉ PUEDES USAR EN TUS CONTENIDOS

### 2.1 Música en YouTube: la guía definitiva
Explica con detalle:

| Situación | ¿Puedes usarla? | Riesgo / consecuencia |
|-----------|----------------|----------------------|
| Música comercial sin permiso | | |
| Música con licencia Creative Commons CC BY | | |
| Música libre de derechos (royalty-free) | | |
| Música de la librería de YouTube | | |
| Cantar una canción popular en directo | | |
| Cover de una canción con melodía original | | |

### 2.2 Imágenes y fotografías
- Diferencia entre imágenes "royalty-free" e imágenes en dominio público
- Bancos de imágenes gratuitos con licencias seguras (Unsplash, Pexels, Pixabay, Wikimedia Commons) y sus restricciones
- Uso de imágenes de Google Images: por qué es peligroso aunque aparezcan en el buscador
- Fotografías de personas: derechos de imagen vs. derechos de autor — son conceptos distintos

### 2.3 Fragmentos de vídeo, películas y noticias
Cuándo puedes incluir fragmentos de otras obras y el riesgo real en cada caso.

### 2.4 Citas y referencias
¿Cuánto texto ajeno puedes citar sin permiso? El derecho de cita en España (art. 32 LPI): condiciones y límites.

---

## PARTE 3 — USO JUSTO Y EXCEPCIONES (FAIR USE / USO HONRADO)

Explica la diferencia entre el Fair Use estadounidense y las excepciones del derecho español:

**En Estados Unidos (Fair Use, para quienes publican en plataformas globales):**
Los 4 factores que determinan si un uso es fair use:
1. Propósito y carácter del uso (comercial vs. educativo)
2. Naturaleza de la obra original
3. Cantidad y sustancialidad del fragmento usado
4. Efecto sobre el mercado de la obra original

**En España (uso honrado y excepciones LPI):**
- Excepción de cita (art. 32)
- Excepción educativa (art. 32.2)
- Excepción de parodia (art. 39)
- Excepción de obras en vía pública (art. 35)

Mito frecuente a desmontar: el porcentaje mágico del 10% o los 30 segundos de música no existe en ninguna ley.

---

## PARTE 4 — CÓMO PROTEGER TU PROPIA OBRA

1. **Protección automática**: no necesitas registrar para tener derechos — pero el registro ayuda como prueba
2. **Cómo demostrar autoría**: metadatos de archivos, historial de cloud, borradores con fecha, correos propios
3. **Registro voluntario en España**: Registro de la Propiedad Intelectual, coste y proceso
4. **Licencias Creative Commons**: los 6 tipos de licencia CC explicados con sus combinaciones y cuándo usar cada una
5. **Marca de agua y metadatos EXIF** para fotografías: protección técnica como complemento a la legal

---

## PARTE 5 — QUÉ HACER SI USAN TU CONTENIDO SIN PERMISO

Guía de respuesta escalonada:

**Paso 1 — Documentar antes de actuar**
Capturas con fecha, URL, herramientas de detección de plagio o imágenes inversas.

**Paso 2 — Contacto directo**
Plantilla de email de cease and desist (retirada del contenido) amistosa pero firme.

**Paso 3 — Reclamación DMCA en plataformas**
Cómo presentar un takedown en YouTube, Instagram y otras plataformas: formularios, plazos y resultado esperado.

**Paso 4 — Vía legal si persiste**
Cuándo tiene sentido acudir a un abogado, cuánto puede costar y qué puede reclamarse (indemnización por daños, lucro cesante).

---

**AVISO LEGAL**: Este prompt genera información jurídica general con fines educativos. No constituye asesoramiento legal profesional. Para situaciones específicas o conflictos reales, consulta con un abogado especializado en propiedad intelectual en tu jurisdicción.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 35,
                'use_case'         => 'Entender qué contenido puedes usar sin permiso, cómo proteger tu obra y cómo actuar ante una infracción de copyright',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            // 9 — Customer Support
            [
                'profession_id'    => 9,
                'title'            => 'Soporte omnicanal',
                'description'      => 'Gestiona email, chat en vivo, teléfono y redes sociales desde una única operación coherente que garantiza la misma experiencia en todos los canales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como director de operaciones de Customer Support con experiencia en equipos omnicanal de entre 5 y 100 agentes. Necesito diseñar o mejorar nuestra operación de soporte para que funcione de forma coherente en todos los canales de contacto.

**MI OPERACIÓN ACTUAL**
- Canales activos: [email / chat en vivo / teléfono / WhatsApp / Twitter/X / Instagram / otro]
- Tamaño del equipo de soporte: [número de agentes]
- Herramienta de helpdesk actual: [Zendesk / Freshdesk / Intercom / HubSpot / ninguna / otra]
- Volumen de tickets mensual aproximado: [número]
- Principal problema actual: [tiempo de respuesta / calidad inconsistente / agentes especializados por canal pero sin visión 360 / saturación en un canal]

---

## MÓDULO 1 — DIFERENCIA ENTRE MULTICANAL Y OMNICANAL

Explica la diferencia conceptual y operativa:

| Aspecto | Multicanal | Omnicanal |
|---------|-----------|----------|
| Visión del cliente | Por canal (silos) | Unificada (360°) |
| Transferencia de información | El cliente repite su problema | El agente ve el historial completo |
| Consistencia de respuesta | Variable según canal | Uniforme en tono, SLAs y soluciones |
| Complejidad operativa | Menor | Mayor (requiere integración) |
| Experiencia del cliente | Frustrante si escala | Fluida |

---

## MÓDULO 2 — ARQUITECTURA DE LA OPERACIÓN OMNICANAL

### 2.1 Diseño del flujo de contacto
Para cada canal, define:

| Canal | Tiempo de primera respuesta (SLA) | Horario de atención | Perfil de agente ideal | Tipo de consultas más frecuentes |
|-------|----------------------------------|---------------------|----------------------|----------------------------------|
| Email | | | | |
| Chat en vivo | | | | |
| Teléfono | | | | |
| WhatsApp | | | | |
| Redes sociales | | | | |

### 2.2 Reglas de escalado cross-canal
Cuando una conversación que empezó por chat necesita pasar a teléfono, o un DM de Instagram requiere resolución en email, ¿cómo se gestiona sin perder contexto? Define las reglas de escalado y la plantilla de transferencia interna.

### 2.3 Gestión de la bandeja única (unified inbox)
Explica cómo configurar correctamente un helpdesk para que todos los canales lleguen a una bandeja única con:
- Priorización automática por urgencia y canal
- Asignación inteligente al agente correcto
- Etiquetado automático por tipo de consulta
- Visión del historial completo del cliente

---

## MÓDULO 3 — SLAs POR CANAL Y CÓMO COMUNICARLOS

### 3.1 SLAs recomendados según el tipo de empresa
Proporciona benchmarks de industria para cada canal:

| Canal | B2C e-commerce | B2B SaaS | Servicios financieros | Salud |
|-------|---------------|----------|----------------------|-------|
| Email (primera respuesta) | | | | |
| Chat en vivo (primera respuesta) | | | | |
| Teléfono (tiempo de espera) | | | | |
| Redes sociales | | | | |

### 3.2 Cómo comunicar los SLAs a los clientes
Mensajes automáticos de confirmación para cada canal: qué incluir (número de ticket, plazo esperado, horario, canal alternativo urgente).

---

## MÓDULO 4 — GESTIÓN DEL TONO Y LA VOZ DE MARCA EN TODOS LOS CANALES

El mayor riesgo del omnicanal es la inconsistencia. Crea una guía de tono por canal:

| Canal | Formalidad | Longitud de respuesta | Emojis | Tiempo verbal | Ejemplo de apertura |
|-------|-----------|----------------------|--------|--------------|---------------------|
| Email | | | | | |
| Chat | | | | | |
| Teléfono (script) | | | | | |
| Twitter/X | | | | | |
| Instagram | | | | | |

---

## MÓDULO 5 — MÉTRICAS DE UNA OPERACIÓN OMNICANAL SANA

Define el dashboard de KPIs con fórmula, frecuencia de medición y umbral de alerta:

| KPI | Fórmula | Frecuencia | Umbral de alerta |
|-----|---------|-----------|-----------------|
| First Response Time (FRT) por canal | | | |
| First Contact Resolution (FCR) | | | |
| CSAT post-resolución | | | |
| Ticket deflection rate (autoservicio) | | | |
| Backlog pendiente por canal | | | |
| Coste por ticket por canal | | | |

---

## MÓDULO 6 — PLAN DE IMPLEMENTACIÓN POR FASES

Si estás migrando de multicanal a omnicanal, define las fases:

**Fase 1 (mes 1-2): Integración técnica**
- Unificar todos los canales en un helpdesk con historial de cliente
- Definir taxonomía de etiquetas y categorías

**Fase 2 (mes 2-3): Procesos y formación**
- Playbooks por tipo de consulta
- Formación del equipo en la herramienta y en los flujos cross-canal

**Fase 3 (mes 4-6): Optimización**
- Implementar triaje automático
- Medir FCR y actuar sobre las causas de escalado más frecuentes

---

**Formato de respuesta**: usa tablas para comparativas y SLAs. Incluye ejemplos de mensajes automáticos y scripts de apertura. Cuando propongas configuraciones técnicas, indícalas como recomendaciones genéricas (no atadas a una herramienta específica salvo que la indique el usuario).
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'         => 'Diseñar o mejorar una operación de soporte omnicanal con SLAs definidos, flujos de escalado y métricas de control',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            // 10 — Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Deep work para freelancers',
                'description'      => 'El sistema de trabajo de máxima concentración que multiplica la productividad de un freelance: bloques de tiempo, entorno y rituales.',
                'prompt_content'   => <<<'PROMPT'
Actúa como coach de productividad especializado en trabajo autónomo y freelance, con conocimiento profundo de las metodologías de Cal Newport (Deep Work), el sistema GTD de David Allen y técnicas de diseño de entornos de trabajo. Necesito construir mi sistema personal de deep work.

**MI CONTEXTO**
- Tipo de trabajo freelance: [diseño / programación / redacción / consultoría / marketing / otro]
- Horas de trabajo habituales al día: [número]
- Principal distracción o interrupción: [clientes que llaman / redes sociales / hogar / notificaciones / reuniones excesivas]
- Horario más productivo que has identificado: [mañana / tarde / noche / no lo sé]
- Herramientas que usas actualmente para gestionar el trabajo: [lista]

---

## PARTE 1 — QUÉ ES EL DEEP WORK Y POR QUÉ LOS FREELANCERS LO NECESITAN MÁS QUE NADIE

Explica el concepto de deep work de Cal Newport y por qué es especialmente relevante para un freelance:

- La diferencia entre **trabajo profundo** (deep work) y **trabajo superficial** (shallow work)
- Por qué los freelancers son especialmente vulnerables a la trampa del shallow work
- El coste oculto del cambio de tarea (task switching cost): qué dice la investigación sobre el tiempo de reconexión
- La ecuación de la productividad del conocimiento: **Resultado de alta calidad = Tiempo × Intensidad de enfoque**

---

## PARTE 2 — LOS 4 MODELOS DE DEEP WORK (Y CUÁL ENCAJA CON EL FREELANCE)

Explica los cuatro modelos de Cal Newport y evalúa cuál es el más realista para un freelance:

| Modelo | Descripción | Pros | Contras | ¿Viable para freelance? |
|--------|-------------|------|---------|------------------------|
| Monástico | Aislamiento casi total | | | |
| Bimodal | Bloques largos de días dedicados | | | |
| Rítmico | Bloques diarios a la misma hora | | | |
| Periodístico | Deep work cuando se puede | | | |

Recomendación argumentada para un freelance con clientes activos.

---

## PARTE 3 — DISEÑO DEL SISTEMA PERSONAL DE DEEP WORK

### 3.1 Auditoría del tiempo actual
Antes de rediseñar, hay que medir. Proporciona una plantilla de registro de tiempo de 3 días:

Para cada bloque de 30 minutos, registrar:
- Tarea realizada
- Tipo: deep / shallow / admin / comunicación / descanso
- Nivel de concentración logrado (1-5)
- Interrupción externa (sí/no)

Al final de los 3 días, calcular el porcentaje de tiempo en deep work real.

### 3.2 Diseño de los bloques de deep work
Define la arquitectura de una jornada ideal para un freelance:

| Bloque horario | Actividad | Tipo de trabajo | Regla de no interrupción |
|----------------|----------|----------------|--------------------------|
| [hora inicio - fin] | | Deep work | |
| [hora inicio - fin] | | Comunicación | |
| [hora inicio - fin] | | Admin / gestión | |
| [hora inicio - fin] | | Deep work | |

Regla de oro: las respuestas a clientes no deben ocurrir de forma reactiva sino en ventanas programadas.

### 3.3 Rituales de entrada y salida
El ritual de inicio (startup ritual) es lo que activa el modo concentración. Diseña uno personalizado:

**Ritual de inicio (10-15 minutos)**
1. Revisión del objetivo del día (no la lista de tareas)
2. [Elemento personalizado según el tipo de freelance]
3. Cierre de todas las pestañas no relacionadas con la tarea
4. Activación del bloqueador de distracciones
5. Arranque con la tarea más difícil (not the easiest)

**Ritual de cierre (10 minutos)**
1. Registro de lo completado
2. Lista de pendientes para mañana (para vaciar la mente)
3. Frase de cierre simbólico: "Shutdown complete"

---

## PARTE 4 — GESTIÓN DE LAS INTERRUPCIONES DE CLIENTES

El mayor enemigo del deep work para un freelance es la expectativa de disponibilidad inmediata. Estrategias:

1. **Política de comunicación explícita**: cómo comunicar a los clientes tus horarios de respuesta sin que se ofendan
2. **Respuesta asíncrona por defecto**: qué plataformas usar y cómo estructurar las actualizaciones proactivas para que los clientes no necesiten escribirte
3. **El mensaje automático de "estoy en bloque de trabajo"**: plantilla de autorespuesta para email y WhatsApp
4. **Cuándo sí vale la pena interrumpir el bloque** (urgencias reales vs. urgencias percibidas)

---

## PARTE 5 — ENTORNO FÍSICO Y DIGITAL PARA EL DEEP WORK

### Entorno físico
- Principios de diseño del espacio de trabajo para maximizar la concentración
- Señales visuales que le indican a tu cerebro (y a quienes te rodean) que estás en modo trabajo
- La trampa de la "oficina en casa perfecta": por qué el orden excesivo puede ser otra forma de procrastinación

### Entorno digital
Crea un checklist de configuración del entorno digital antes de cada bloque:

- [ ] Modo avión o DND activado
- [ ] Bloqueador de sitios: Freedom / Cold Turkey / [herramienta según el sistema operativo]
- [ ] Notificaciones de email desactivadas
- [ ] Una sola pestaña abierta
- [ ] Música o ruido blanco si ayuda (opciones: Brain.fm, música sin letra, ruido de cafetería)
- [ ] Temporizador visible: Pomodoro o bloque largo según la tarea

---

## PARTE 6 — PLAN DE IMPLEMENTACIÓN A 21 DÍAS

Semana 1: Medir y observar (sin cambiar nada todavía)
Semana 2: Implementar un solo bloque de deep work de 90 minutos al día
Semana 3: Añadir el segundo bloque y los rituales de inicio y cierre

Para cada semana: qué hacer, qué medir y cómo saber si está funcionando.

---

**Formato de respuesta**: práctico y directo. Incluye plantillas copiables (registro de tiempo, ritual de inicio, autorespuesta para clientes). Evita la teoría sin aplicación. Adapta las recomendaciones a mi tipo de trabajo freelance cuando sea relevante.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes' => 30,
                'use_case'         => 'Diseñar un sistema de deep work personalizado para multiplicar la productividad como freelance',
                'vote_score'       => 39,
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
