<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills8Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Plan de contenidos para YouTube: de cero a 10.000 suscriptores con contenido educativo',
                'description'       => 'Diseña la estrategia de canal, la mezcla de formatos y el calendario editorial de YouTube para construir audiencia cualificada. Con análisis de competidores, optimización de títulos y thumbnails que generan clicks.',
                'prompt_content'    => <<<'PROMPT'
Eres un YouTube strategist con experiencia en canales B2B y educativos que han superado las 10.000 suscripciones en su primer año.

Mi contexto:
- Temática del canal: [describe el nicho]
- Objetivo: [audiencia / leads / autoridad de marca / monetización AdSense]
- Recursos: [solo yo / equipo de N personas / presupuesto mensual de €X]
- Experiencia previa en cámara: [ninguna / poca / cómodo]
- Canal de referencia (al que aspiramos a parecernos): [URL o nombre]

## Estrategia de Canal de YouTube — [Nombre del canal]

### 🎯 Posicionamiento del canal
Propuesta de valor en una frase: "El canal de [temática] para [audiencia específica] que [resultado principal]"

**Por qué alguien se suscribiría:** Las 3 razones que diferencian este canal de los 200 canales similares en español.

### 📊 Análisis de la competencia (top 5 canales)
| Canal | Suscriptores | Tipo de contenido | Frecuencia | Tu diferenciación |
|-------|-------------|------------------|-----------|------------------|
| ... | ... | ... | ... | ... |

**Palabras clave con volumen y competencia baja** donde el canal puede rankear rápido:
[lista de 10 topics con potencial]

### 🗓️ Mix de formatos (la mezcla que hace crecer un canal)

**60% — Videos de búsqueda (SEO):**
- Formato: tutoriales, guías paso a paso, explicaciones
- Duración: 8-15 min
- Frecuencia: 1 por semana
- Objetivo: tráfico orgánico de YouTube Search y Google

**30% — Videos virales (alcance):**
- Formato: listas top, controversias, comparativas
- Duración: 5-10 min
- Frecuencia: 2 por mes
- Objetivo: Suggested Videos, algoritmo

**10% — Videos de marca (fidelización):**
- Formato: behind the scenes, Q&A, actualizaciones del canal
- Duración: 3-8 min
- Frecuencia: 1 por mes
- Objetivo: comunidad y retención

### 📅 Calendario editorial — Primeros 3 meses
| Semana | Título del video | Tipo | Keyword principal | Hook de los primeros 30s |
|--------|----------------|------|-----------------|------------------------|
| 1 | ... | SEO | ... | ... |

### 🖼️ Fórmula de títulos y thumbnails que generan clicks
- Plantillas de títulos con CTR alto para tu nicho
- Los elementos visuales del thumbnail que funcionan en tu temática
- A/B testing de thumbnails: cómo hacerlo y qué medir

### 📈 Métricas para los primeros 90 días
Qué mirar en YouTube Studio, qué ignorar, y cuándo pivotar la estrategia.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'YouTube, content strategy, brand awareness',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Arquitectura de microservicios: del monolito al sistema distribuido sin romper producción',
                'description'       => 'Diseña la estrategia de migración de monolito a microservicios con el Strangler Fig Pattern, define los límites de los servicios con DDD, y establece el plan de rollout incremental sin downtime.',
                'prompt_content'    => <<<'PROMPT'
Eres un Software Architect con experiencia migrando aplicaciones monolíticas a microservicios en entornos de producción con millones de usuarios.

Estado actual del sistema:
- Descripción del monolito: [stack, antigüedad, líneas de código aprox.]
- Dominios de negocio principales: [lista los bounded contexts que identificas]
- Problema principal que motiva la migración: [escalabilidad / velocidad de deploy / equipos independientes / otro]
- Tamaño del equipo de desarrollo: [N personas]
- Infraestructura actual: [AWS / GCP / Azure / on-prem / otro]
- Tráfico actual: [requests/día, pico máximo]

## Plan de Migración a Microservicios — [Sistema]

### 🗺️ Event Storming: mapa de dominios

**Bounded Contexts identificados:**
| Dominio | Responsabilidad | Dependencias | Candidato a extraer |
|---------|----------------|-------------|-------------------|
| [Nombre] | [qué hace] | [depende de] | [Sí/No — razón] |

**Criterio de priorización de extracción:**
1. Alta independencia (pocas dependencias con otros módulos)
2. Alto valor de negocio (cuello de botella actual)
3. Equipo dedicado disponible para hacerse cargo

### 🌱 Strangler Fig Pattern — Plan incremental

**Fase 1 — Preparación del monolito (semanas 1-4):**
- Aislar el módulo objetivo detrás de una interfaz interna
- Añadir API Gateway (Kong / AWS API Gateway / NGINX) delante del monolito
- Implementar feature flags para poder cambiar el router sin deploy

**Fase 2 — Primer microservicio (semanas 5-10):**
- Servicio a extraer: [nombre — el menos acoplado]
- Estrategia de datos: [DB propia / vista de la DB del monolito / sincronización por eventos]
- Patrón de comunicación: [REST / gRPC / mensajes asíncronos — cuándo usar cada uno]
- Cómo mover el 5% del tráfico, luego 20%, luego 100%

**Fase N — Servicios posteriores:**
Criterios para decidir el orden y el ritmo de extracción.

### 🔧 Decisiones de infraestructura

**Service Mesh:** ¿Istio / Linkerd / ninguno? Cuándo es necesario.

**Event Bus:** Kafka vs. RabbitMQ vs. SQS — cuándo elegir cada uno.

**API Gateway:** Funcionalidades mínimas que necesitas desde el día 1.

**Observabilidad distribuida (obligatoria antes del primer servicio):**
- Distributed tracing: OpenTelemetry + Jaeger / Tempo
- Logs centralizados: formato, agregación, búsqueda
- Métricas: dashboards de latencia p50/p95/p99 por servicio

### ⚠️ Los 5 errores que retrasan la migración 6 meses
Y cómo evitarlos antes de empezar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 35,
                'use_case'          => 'Arquitectura de software, microservicios, migración sin downtime',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Identidad visual para startups: del naming al brand book completo en 2 semanas',
                'description'       => 'Crea la identidad visual de una startup desde cero: naming validado, logo con sistema de variantes, paleta de colores semántica, tipografía y brand book que el equipo puede usar sin pedirte permiso.',
                'prompt_content'    => <<<'PROMPT'
Eres un brand designer con 10+ años creando identidades visuales para startups que han escalado a Series A y más.

Información sobre la startup:
- Nombre actual o candidatos: [nombre(s) que estáis considerando]
- Sector y tipo de producto: [describe]
- Valores de marca (máximo 4): [ej: honestidad, innovación, cercanía, eficiencia]
- Público objetivo: [perfil detallado]
- Competidores principales (con URL): [lista]
- Adjetivos que describe la startup: [ej: moderno, confiable, disruptivo, humano]
- Adjetivos que NO debe transmitir: [ej: corporativo, frío, complejo]
- Referencia visual (marcas que os gustan estéticamente, no competidores): [marcas]

## Identidad Visual — [Nombre de la Startup]

### 1. 🔤 Estrategia de naming
Evaluación del nombre actual o propuesta de alternativas:
- Test de fonética (¿suena bien en el idioma objetivo?)
- Test de ortografía (¿se escribe como suena?)
- Disponibilidad de dominio: [.com / .io / .es]
- Disponibilidad en redes: @nombrestartup
- Conflictos de marca registrada: cómo verificarlo en OEPM / EUIPO

### 2. 🎨 Paleta de colores

**Color primario:** #XXXXXX
- Por qué este color para este sector y estos valores
- Psicología del color y expectativas del usuario

**Colores secundarios:** #XXXXXX + #XXXXXX
- Cómo usarlos: fondos, textos, CTAs

**Colores semánticos:**
- Éxito: #XXXXXX (verde accesible)
- Error: #XXXXXX (rojo accesible)
- Advertencia: #XXXXXX (ámbar)
- Info: #XXXXXX (azul)

**Contraste:** ratios WCAG AA para todas las combinaciones

### 3. 🔠 Sistema tipográfico
- Tipografía de display (titulares): [nombre — Google Fonts / Adobe Fonts / comercial]
- Tipografía de texto: [nombre — legibilidad en pantalla]
- Fallback stack CSS: `font-family: '[nombre]', [alternativa], sans-serif;`
- Escala tipográfica: xs/sm/base/lg/xl/2xl/3xl en px o rem

### 4. 📐 Logo — Brief para diseño o prompt para Figma/AI
- Concepto visual recomendado con 3 opciones de dirección
- Sistema de variantes: principal / horizontal / ícono / monocromo / negativo
- Zonas de exclusión mínimas
- Tamaños mínimos de uso

### 5. 📚 Brand Book (estructura del documento)
Los capítulos que debe tener y el contenido de cada uno para que el equipo sea autónomo.

### 6. ✅ Checklist de aplicación del brand
Los 20 puntos de consistencia que debes verificar antes de publicar cualquier pieza.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Brand design, identidad visual, startups',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Propuesta comercial que cierra sin necesidad de reunión de seguimiento',
                'description'       => 'Escribe la propuesta comercial que el prospect puede aprobar sin que tengas que agendar 3 reuniones más. Con estructura de storytelling, manejo de objeciones integrado y CTA que elimina la fricción de decisión.',
                'prompt_content'    => <<<'PROMPT'
Eres un Sales Consultant especializado en propuestas comerciales de alto ticket (>5.000€) que se cierran sin negociaciones eternas.

Situación de esta propuesta:
- Cliente (empresa y persona): [nombre y cargo]
- Problema que tienen y que nosotros resolvemos: [describe en detalle — usa sus palabras si las tienes]
- Solución que proponemos: [descripción]
- Precio de la propuesta: [€]
- Competidores en consideración: [si los conoces]
- Objeciones que anticipas: [precio / timing / quién toma la decisión / otro]
- Fecha límite para la decisión (si hay): [fecha]

## PROPUESTA COMERCIAL
### [Nombre del cliente] × [Tu empresa]

---

### La situación actual (el espejo que hace que lean)
2 párrafos que demuestran que entiendes su problema mejor de lo que ellos lo expresarían. Sin jerga. Con los datos y contexto específico de su empresa.

### Lo que pasa si no hacen nada
El coste de la inacción en €, tiempo perdido o riesgo. Sin alarmismo, con datos.

### La solución: qué hacemos y cómo
Descripción de la solución en el lenguaje de negocio del cliente, no en lenguaje técnico de proveedor.

**Entregables concretos:**
- [Lista de lo que incluye exactamente]
- [Plazos por fase]
- [Quién hace qué — responsabilidades del cliente]

### Por qué nosotros (y no otra opción)
3 razones específicas que conectan con SU situación. No genérico.

### Casos similares (prueba social relevante)
2 clientes parecidos, con resultados numéricos.

### Inversión y opciones

| Opción | Qué incluye | Precio | Plazo |
|--------|------------|--------|-------|
| Básica | ... | €X | X semanas |
| Recomendada ⭐ | ... | €X | X semanas |
| Completa | ... | €X | X semanas |

**ROI esperado:** Cómo calcular el retorno de la inversión para este cliente.

### El siguiente paso (CTA de fricción cero)
Una sola acción. Sin opciones múltiples. Sin "llámanos cuando quieras".

### Preguntas frecuentes (objeciones disueltas)
Las 3-5 objeciones más comunes en forma de FAQ para que no haya excusa para no decidir.

---

### 📋 Versión de email de seguimiento (si no responden en 3 días)
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Ventas B2B, propuestas comerciales, cierre de ventas',
                'vote_score'        => 49,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Estrategia de internacionalización del producto: de un mercado a tres sin triplicar el equipo',
                'description'       => 'Define el plan de expansión internacional del producto: selección de mercados, análisis de product-market fit local, estrategia de localización y roadmap de lanzamiento que no destruye el foco del equipo actual.',
                'prompt_content'    => <<<'PROMPT'
Eres un Head of Product con experiencia llevando productos SaaS a mercados internacionales en fases de Series A a Series C.

Estado actual:
- Producto y mercado principal: [describe]
- ARR actual y % internacional (si lo hay): [€ / X%]
- Mercados que estáis considerando expandir: [lista]
- Tamaño del equipo de producto: [N personas]
- Razón para expandir ahora: [saturación del mercado local / demanda orgánica / mandato inversores / otro]

## Estrategia de Internacionalización — [Producto]

### 🌍 Framework de selección de mercado

**Matriz de atractivo por mercado:**
| Mercado | TAM | Competencia | Product-Market Fit potencial | Complejidad legal | Score |
|---------|-----|-------------|------------------------------|------------------|-------|
| [País 1] | ... | ... | ... | ... | /10 |
| [País 2] | ... | ... | ... | ... | /10 |

**Mercado recomendado para primera expansión:** [País + justificación]

**Señales de que hay PMF latente (validar antes de invertir):**
- Tráfico orgánico desde ese mercado sin publicidad
- Señups espontáneos que pagan
- Competidores locales con Product similar pero peor ejecutado

### 🔍 Análisis de product-market fit local

**Lo que probablemente funcione igual** (no tocar):
- [Features core que resuelven el mismo problema]

**Lo que necesita adaptación** (diferencias culturales/regulatorias):
- Flujo de onboarding: [qué cambiar]
- Pricing: [moneda, modelo, sensibilidad al precio]
- Integraciones locales: [ej: facturación electrónica obligatoria, pago local]
- Idioma: [profundidad de localización necesaria]

**Lo que probablemente NO funcione** (validar antes de construir):
- [Asunciones del producto que podrían no aplicar]

### 🗺️ Roadmap de localización (no es solo traducción)

**Nivel 1 — MVP internacional (mes 1-2):**
- Traducción de UI a [idioma] con i18n framework
- Formato de fechas, números y moneda
- Zona horaria del usuario
- Dominio/subdominio local: strategy

**Nivel 2 — Adaptación al mercado (mes 3-6):**
- Integraciones con herramientas locales imprescindibles
- Método de pago local (Bizum/Klarna/Pix/etc.)
- Compliance local: GDPR / LGPD / CCPA — diferencias clave

**Nivel 3 — Go-to-market local (mes 6-12):**
- ¿Partner local o equipo directo?
- Canal de adquisición adaptado al mercado

### 📊 Métricas de éxito de la internacionalización
Cómo saber en 90 días si el mercado tiene potencial o hay que pivotar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'Internacionalización, expansión de producto, go-to-market',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Plan de employer branding para atraer talento tech sin competir por salario',
                'description'       => 'Construye la propuesta de valor al empleado (EVP) de tu empresa y el plan de employer branding que atrae talento técnico cualificado cuando no puedes pagar como Google o Meta.',
                'prompt_content'    => <<<'PROMPT'
Eres un Employer Branding specialist con experiencia en empresas de 50-500 empleados del sector tech que compiten por el mismo talento que las grandes.

Contexto de la empresa:
- Sector y tipo de empresa: [startup / scale-up / consultora / PYME tech]
- Número de empleados: [N]
- Roles técnicos más difíciles de cubrir: [Frontend / Backend / Data / DevOps / otros]
- Salario medio que podéis ofrecer vs. mercado: [por debajo / en mercado / por encima]
- Tasa de rotación actual: [X%]
- Tiempo medio de contratación: [X días]

## Plan de Employer Branding — [Empresa]

### 💎 Employee Value Proposition (EVP)

**Tu EVP en una frase:**
"En [empresa] encontrarás [diferenciador 1] + [diferenciador 2] + [diferenciador 3] que no encontrarás en las grandes empresas."

**Los 5 pilares de tu EVP:**
1. **Impacto real:** [qué puede hacer en esta empresa que no haría en una grande]
2. **Crecimiento:** [plan de carrera, formación, proyectos desafiantes]
3. **Cultura:** [qué hace único el ambiente, la autonomía, la transparencia]
4. **Flexibilidad:** [teletrabajo, horarios, conciliación]
5. **Compensación total:** [salario + equity + beneficios no monetarios]

**Lo que NO debes prometer (y luego no cumplir):**
Las 3 mentiras de employer branding más comunes que generan malas reseñas en Glassdoor.

### 📢 Canal de employer branding por audiencia

**LinkedIn (decisores senior):**
- Tipo de contenido: detrás de las cámaras, cultura, proyectos técnicos, logros del equipo
- Frecuencia: 2-3 posts/semana
- Quién debe publicar: CEO + tech leads (no solo RRHH)

**GitHub / Dev.to / Medium (desarrolladores):**
- Contenido técnico: open source, artículos de ingeniería, casos técnicos reales
- Frecuencia: 1 artículo técnico/mes

**Comunidades locales:**
- Eventos, meetups, sponsors de conferencias técnicas

### 📝 Plan de contenidos para los próximos 3 meses
| Semana | Contenido | Canal | Protagonista | Objetivo |
|--------|---------|-------|-------------|---------|
| 1 | [Un día en la vida de un developer] | LinkedIn + Instagram | [Nombre dev] | Autenticidad |

### 🎯 Métricas de employer branding
Cómo medir si el employer branding está funcionando antes de que se refleje en tiempo de contratación.

### ⭐ Gestión de Glassdoor y reseñas
Cómo obtener reseñas auténticas de empleados satisfechos y cómo responder a las críticas.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Employer branding, atracción de talento tech, EVP',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Due diligence financiero para compra de una PYME o negocio digital',
                'description'       => 'Realiza el análisis financiero completo de un negocio que estás considerando adquirir: normalización del P&L, cálculo del EBITDA ajustado, identificación de riesgos ocultos y valoración con múltiplos del sector.',
                'prompt_content'    => <<<'PROMPT'
Eres un M&A advisor especializado en adquisiciones de PYMEs y negocios digitales de 100k a 5M€ de precio de compra.

Información del negocio:
- Tipo de negocio: [e-commerce / SaaS / negocio de servicios / negocio físico / infoproducto]
- Facturación últimos 3 años: [€ año1 / €año2 / €año3]
- Precio de venta solicitado: [€]
- Información disponible: [CCAA / P&L interno / extractos bancarios / solo lo que dice el vendedor]
- Razón declarada de la venta: [jubilación / cambio de vida / nuevos proyectos / problemas — cuál]

## Due Diligence Financiero — [Negocio]

### 📊 P&L Normalizado (3 años)

**Proceso de normalización:**
¿Por qué el P&L del vendedor puede mentir? Qué ajustes hacer:
- Salario del propietario (add-back si es superior al mercado)
- Gastos personales pasados por la empresa
- One-offs: gastos o ingresos no recurrentes
- Gastos de D&A (depreciation & amortization)
- Pagos a familiares a precios no de mercado

**P&L normalizado:**
| | Año 1 | Año 2 | Año 3 |
|--|-------|-------|-------|
| Ingresos | €X | €X | €X |
| COGS | €X | €X | €X |
| Margen bruto | X% | X% | X% |
| Gastos operativos | €X | €X | €X |
| EBITDA reportado | €X | €X | €X |
| Ajustes | +€X | +€X | +€X |
| **SDE / EBITDA ajustado** | **€X** | **€X** | **€X** |

### 🔍 Red Flags que debes buscar

**Concentración de ingresos:**
- Si el top 3 clientes representan >40% → riesgo de churn post-compra
- Si depende de un canal único (SEO, un marketplace) → riesgo de plataforma

**Calidad de los ingresos:**
- Recurrente (MRR/ARR) vs. transaccional: múltiplos diferentes
- Contratos firmados vs. handshakes: ¿qué se va con el vendedor?

**Dependencia del propietario:**
- ¿El negocio funciona 30 días sin él? → Si no, el múltiplo baja

**Pasivos ocultos:**
- Deuda fiscal (sanciones pendientes)
- Litigios laborales
- Deudas con proveedores fuera de balance

### 💰 Valoración y múltiplos

**Múltiplos típicos por tipo de negocio:**
| Tipo | Múltiplo EBITDA | Múltiplo SDE | Notas |
|------|----------------|-------------|-------|
| SaaS MRR | 3-8x ARR | — | Depende de churn y crecimiento |
| E-commerce | 2-4x EBITDA | 2-3x SDE | Mayor si tiene marca propia |
| Servicios | 1-3x EBITDA | 1.5-2.5x SDE | Mayor si tiene contratos |

**Valoración de este negocio:**
- EBITDA ajustado promedio: €X
- Múltiplo apropiado: Xx — [justificación]
- Valor calculado: €X
- Precio pedido: €X → ¿Caro / Justo / Barato?

### 📋 Checklist de documentos a pedir
Los 15 documentos que debes solicitar antes de hacer una oferta.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 30,
                'use_case'          => 'M&A, valoración de empresas, due diligence',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Política de privacidad y aviso legal conformes con el RGPD para tu web o app',
                'description'       => 'Genera la política de privacidad, el aviso legal y la política de cookies adaptados a tu negocio digital, conformes con el RGPD y la LSSI, en un lenguaje que el usuario realmente entienda.',
                'prompt_content'    => <<<'PROMPT'
Actúa como abogado especializado en derecho digital y protección de datos con experiencia redactando documentación legal para startups y negocios online en España y la UE.

Información sobre mi negocio:
- Tipo de web/app: [e-commerce / SaaS / blog con formulario de contacto / app móvil / marketplace]
- Empresa: [nombre legal y CIF]
- Domicilio: [dirección]
- Email de contacto / DPO: [email]
- Datos que recopilas de usuarios: [email / teléfono / dirección de envío / datos de pago / datos de uso / localización / otro]
- Herramientas de terceros usadas: [Google Analytics / Meta Pixel / Stripe / Mailchimp / HubSpot / otro]
- ¿Vendes en la UE fuera de España? [sí/no — qué países]
- ¿Tienes usuarios menores de 14 años? [sí/no]
- ¿Usas IA que toma decisiones automatizadas? [sí/no]

## DOCUMENTACIÓN LEGAL — [Nombre de la empresa]

---

### 1. AVISO LEGAL

**Titular y datos identificativos:**
[Texto completo según Art. 10 LSSI]

**Condiciones de uso del sitio:**
[Texto adaptado al tipo de web]

**Propiedad intelectual:**
[Cláusula estándar con tus especificidades]

**Limitación de responsabilidad:**
[Cláusula proporcional al riesgo de tu negocio]

---

### 2. POLÍTICA DE PRIVACIDAD

**¿Quién es el responsable del tratamiento?**
[Texto con tus datos completos]

**¿Qué datos tratamos y para qué?**

| Finalidad | Datos | Base jurídica | Plazo de conservación |
|-----------|-------|--------------|----------------------|
| Gestión de pedidos | Nombre, dirección, email, pago | Ejecución de contrato | 5 años (fiscal) |
| Newsletter | Email | Consentimiento | Hasta baja |
| Analytics | Datos de uso anonimizados | Interés legítimo | 14 meses |
| ... | ... | ... | ... |

**¿A quién cedemos tus datos?**
[Lista de encargados del tratamiento: Stripe, Mailchimp, Google, etc. — con sus políticas de privacidad]

**¿Transferencias internacionales?**
[Si usas herramientas de EEUU: cómo lo justificas — SCCs, Privacy Shield sucesor, etc.]

**Tus derechos:**
[ARCOPOL — acceso, rectificación, cancelación, oposición, portabilidad, limitación]

---

### 3. POLÍTICA DE COOKIES

**Categorías y cookies específicas:**
| Cookie | Proveedor | Finalidad | Duración | Tipo |
|--------|----------|-----------|---------|------|
| _ga | Google Analytics | Análisis | 2 años | Analítica |
| _fbp | Meta | Publicidad | 90 días | Marketing |

**Cómo configurar o retirar el consentimiento:**
[Instrucciones para el banner + enlace al panel de preferencias]

---

### ⚠️ Obligaciones adicionales según tu caso
- Si tienes e-commerce: derechos de desistimiento (14 días), garantías legales
- Si tienes app: privacidad en los stores (App Store Connect / Google Play Console)
- Si usas IA: información sobre decisiones automatizadas (Art. 22 RGPD)

### ✅ Checklist de compliance RGPD
Los 20 puntos que la AEPD verifica en una inspección.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Compliance legal, RGPD, protección de datos, negocios digitales',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Análisis de causa raíz de un aumento de tickets: del síntoma al problema sistémico',
                'description'       => 'Diagnostica por qué han subido los tickets de soporte con el método de los 5 Porqués y el análisis de Pareto. Con plan de acción para eliminar las causas raíz y prevenir que el problema se repita.',
                'prompt_content'    => <<<'PROMPT'
Eres un Head of Customer Support con experiencia en análisis de calidad y mejora continua de operaciones de soporte.

Situación actual:
- Producto / servicio afectado: [describe]
- Periodo de análisis: [últimas X semanas / desde fecha Y]
- Volumen de tickets normal: [N tickets/semana]
- Volumen actual: [N tickets/semana] (+X%)
- Categorías de tickets con más aumento: [las que sabes]
- Cambios recientes en el producto o en los procesos: [lista todo — releases, cambios de precios, campañas, nuevos clientes]
- Muestra de tickets representativos: [pega 5-10 resúmenes o asuntos de tickets]

## Análisis de Causa Raíz — Spike de tickets en [Producto/Empresa]

### 📊 Análisis de Pareto (80/20)

**Distribución de tickets por categoría:**
| Categoría | N tickets | % del total | % acumulado |
|-----------|----------|-------------|-------------|
| [Categoría 1] | N | X% | X% |
| [Categoría 2] | N | X% | X% |

**Conclusión del Pareto:** Las X categorías que representan el 80% del volumen son: [lista]

**Priorización:** Resolver estas categorías en este orden elimina el mayor volumen con el menor esfuerzo.

### 🔍 Análisis de los 5 Porqués — por categoría principal

**Categoría 1: [Nombre]**

El problema: [descripción del ticket típico]
→ ¿Por qué? [primera causa]
→ ¿Por qué? [segunda causa]
→ ¿Por qué? [tercera causa]
→ ¿Por qué? [cuarta causa]
→ ¿Por qué? [causa raíz]

**Causa raíz identificada:** [descripción]
**Tipo de causa:** [bug de producto / comunicación deficiente / proceso roto / expectativa no alineada / cambio externo]

### 🛠️ Plan de acción por causa raíz

| Causa raíz | Solución | Propietario | Plazo | Impacto esperado |
|-----------|---------|------------|-------|-----------------|
| [Causa 1] | [Acción] | [Equipo] | [Fecha] | -X% en categoría |

### 📉 Métricas de seguimiento
- Cómo saber en 7 días que las acciones están funcionando
- El dashboard de tickets que debes revisar diariamente durante la crisis
- Cuándo declarar que el problema está resuelto

### 🔁 Plan de prevención (para que no vuelva a pasar)
Los procesos y alertas que deberías tener instalados para detectar spikes antes de que se conviertan en crisis.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 20,
                'use_case'          => 'Customer support operations, análisis de calidad, mejora continua',
                'vote_score'        => 27,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Facturación internacional como autónomo español: IVA, retenciones e impuestos en cada país',
                'description'       => 'Emite facturas correctas a clientes de la UE, Reino Unido, EEUU y LATAM como autónomo español. Con el tratamiento fiscal correcto del IVA, retenciones por país y cómo declararlo en la Agencia Tributaria.',
                'prompt_content'    => <<<'PROMPT'
Actúa como asesor fiscal especializado en autónomos españoles con clientes internacionales.

Mi situación:
- Soy autónomo en España (régimen general / RETA)
- Tipo de servicio que facturo: [diseño / desarrollo / consultoría / formación / otro — especifica]
- País del cliente: [UE / Reino Unido / EEUU / LATAM — especifica país]
- ¿El cliente tiene NIF-IVA europeo (para UE)? [sí / no / no lo sé]
- ¿El cliente es empresa o particular? [empresa / particular]
- Importe de la factura: [€ o moneda]

## Guía de Facturación Internacional — [País del cliente]

### 🧾 Cómo emitir la factura

**Datos obligatorios:**
- Número de factura: [tu serie — ej: INT-2025-001]
- Tu nombre/razón social y NIF
- Dirección completa
- Datos del cliente (nombre, país, NIF o número fiscal local)
- Fecha de emisión y fecha de operación
- Descripción detallada del servicio
- Importe base
- **Tratamiento del IVA:** [ver abajo]
- **Retención:** [ver abajo]
- Importe total

### 💶 Tratamiento del IVA

**Si el cliente está en la UE y tiene NIF-IVA:**
- NO aplicas IVA español (inversión del sujeto pasivo / reverse charge)
- Obligatorio incluir: "Operación exenta de IVA — Inversión del sujeto pasivo (Art. 69 LIVA)"
- Debes verificar el NIF-IVA en VIES antes de emitir: [cómo hacerlo]
- Debes declarar: Modelo 349 (resumen recapitulativo)

**Si el cliente está en la UE pero es particular (B2C):**
- SÍ aplicas IVA español si tu volumen de ventas transfronterizas < 10.000€/año
- Si superas ese umbral: OSS (One Stop Shop) — cómo registrarte

**Si el cliente está fuera de la UE (UK, EEUU, LATAM):**
- NO aplicas IVA español (exportación de servicios — exenta Art. 69 LIVA)
- Indica: "Servicio no sujeto a IVA por aplicación del artículo 69 LIVA"
- No debes declarar en Modelo 349

### 🔒 Retenciones en origen (withholding tax)

**EEUU:** Formulario W-8BEN para acreditar que eres no residente → exención o reducción de retención según convenio
**LATAM:** Depende del país — tabla de convenios de doble imposición España-LATAM con retenciones efectivas
**Reino Unido (post-Brexit):** Tratamiento de servicios digitales

### 📋 Obligaciones fiscales en España
- Cómo declarar estos ingresos: Modelo 303 (trimestral) + Modelo 390 (anual)
- Si no aplicas IVA: ¿lo declaras igualmente? Cómo
- IRPF sobre estos ingresos: cómo tributan
- Modelo 100 anual: cómo incluir ingresos en moneda extranjera

### 💱 Facturación en moneda extranjera (USD, GBP, etc.)
- Tipo de cambio a usar en la factura
- Cómo convertir a EUR para la declaración
- Dónde registrar el tipo de cambio utilizado
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 15,
                'use_case'          => 'Fiscalidad autónomos, facturación internacional, IVA',
                'vote_score'        => 51,
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
