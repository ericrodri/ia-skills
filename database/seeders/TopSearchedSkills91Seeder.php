<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills91Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 — Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Newsletter de pago con Substack',
                'description'      => 'Modelo editorial, monetización y el proceso para llegar a los primeros 1000 suscriptores de pago desde cero.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un editor digital con experiencia en construir newsletters de pago exitosas. Tu misión es ayudarme a diseñar una newsletter que tenga un modelo editorial sólido, una propuesta de valor diferenciada y un camino realista hacia los primeros 1000 suscriptores de pago.

## Mi punto de partida

- Tema o nicho de la newsletter: [TEMA]
- Audiencia objetivo: [AUDIENCIA]
- Mi experiencia y autoridad en el tema: [BACKGROUND]
- Frecuencia que puedo mantener de forma sostenible: [diaria / semanal / quincenal]
- Precio mensual que estoy considerando cobrar: [PRECIO]
- Audiencia actual (si existe): [seguidores en redes, lista de email, etc.]

---

## 1. Modelo editorial: el sistema de contenido

Define la estructura exacta de mi newsletter para que sea diferenciada, valiosa y producible de forma sostenible:

**Propuesta de valor única**
- En una frase: qué recibe el suscriptor de pago que no puede encontrar en ningún otro sitio.
- Por qué alguien pagaría [PRECIO]€/mes por esto y no buscaría la información gratis.
- Cómo diferenciarse de las newsletters gratuitas del mismo nicho.

**Formato y secciones recurrentes**
Diseña el formato estándar de cada edición:
- Número de secciones y función de cada una (análisis profundo / curación comentada / herramientas / recursos exclusivos).
- Longitud aproximada por sección.
- El gancho de apertura que hace que la gente abra el email aunque llegue en el peor momento.

**Calendario editorial**
- Cómo planificar las ediciones con 4 semanas de antelación sin perder espontaneidad.
- Qué mezcla de temas recurrentes vs. temas de actualidad mantiene el interés a largo plazo.
- Cómo gestionar las semanas con poco tiempo sin perder calidad.

---

## 2. Modelo de monetización

**Freemium vs. todo de pago**
- Análisis de cuándo usar el modelo freemium (parte gratis + parte de pago) y cuándo ir directamente a pago total.
- Qué contenido va al nivel gratuito (para captar suscriptores) y qué al de pago (para retenerlos).

**Estructura de precios**
- Precio mensual vs. anual: cómo incentivar el anual sin desincentivar el mensual.
- Cómo hacer el lanzamiento con precio de fundador que crea urgencia real.
- Cuándo y cuánto subir el precio a medida que crece la audiencia.

**Fuentes de ingresos adicionales**
- Patrocinios: cuándo activarlos, cómo valorarlos y cómo que no contaminen la experiencia del suscriptor de pago.
- Productos derivados: curso, comunidad, consultoría — cuándo tiene sentido añadirlos.

---

## 3. Hoja de ruta hacia los primeros 1000 suscriptores de pago

**Fase 1 (0-100 suscriptores de pago): validación**
- Lanzamiento con lista de espera: cómo construir expectativa antes de publicar el primer número.
- Primeras 50 suscripciones: de dónde vendrán y cómo conseguirlas en las primeras 2 semanas.
- Qué métricas vigilar en esta fase (open rate, tasa de conversión free-to-paid, churn).

**Fase 2 (100-500 suscriptores): crecimiento orgánico**
- Estrategia de cross-promotion con otras newsletters del nicho.
- Cómo convertir cada edición en contenido de marketing sin hacer spam.
- El efecto del boca a boca: cómo diseñar la newsletter para que la gente la recomiende.

**Fase 3 (500-1000 suscriptores): escala**
- Cuándo y cómo invertir en paid acquisition (newsletters, anuncios, patrocinios).
- Cómo usar los testimonios y el social proof para acelerar la conversión.
- Automatizaciones para que el onboarding de nuevos suscriptores se haga solo.

---

## 4. Retención: el KPI que más importa

Un suscriptor de pago que cancela es más caro que uno que no se suscribió nunca. Diseña la estrategia de retención:
- Email de bienvenida al suscriptor de pago: qué debe incluir para maximizar el LTV.
- Cómo detectar suscriptores en riesgo de cancelación antes de que cancelen.
- Campaña de win-back para quienes cancelen.
- Cuándo ofrecer pausa (en lugar de cancelación) y cómo configurarla en Substack.

---

## 5. Prompt de escritura para cada edición

Crea el prompt que uso con Claude para escribir o mejorar cada edición de la newsletter:
- Cómo mantener mi voz aunque use IA para acelerar la producción.
- Prompt para el gancho de apertura basado en el tema de esa semana.
- Prompt para transformar mis notas brutas en un análisis estructurado y legible.
- Checklist de calidad antes de publicar.

---

Empieza con mi punto de partida. Luego dame el modelo editorial completo y la hoja de ruta hacia los primeros 1000 suscriptores de pago adaptados a mi nicho.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar y lanzar una newsletter de pago en Substack con modelo editorial sólido y camino a los primeros 1000 suscriptores.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            // 2 — Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Indie hacking: construye tu SaaS en solitario',
                'description'      => 'El stack técnico, las decisiones de arquitectura y las herramientas del indie developer en 2025.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un indie hacker con experiencia en construir y monetizar SaaS de forma independiente. No me des un tutorial genérico de programación; ayúdame a tomar las decisiones técnicas y de producto que me permitan llegar al primer euro facturado lo más rápido posible sin acumular deuda técnica que me frene después.

## Mi situación actual

- Idea o problema que quiero resolver: [IDEA]
- Audiencia objetivo: [AUDIENCIA]
- Mi experiencia técnica: [lenguajes, frameworks, años de experiencia]
- Tiempo disponible por semana: [N horas]
- Presupuesto para infraestructura y herramientas: [N€/mes]
- Mi mayor miedo: [no terminar / no encontrar clientes / problemas técnicos / competencia]

---

## 1. Stack técnico para indie hackers en 2025

Recomienda el stack óptimo para un solo developer que quiere ir rápido y mantener los costes bajos:

**Frontend**
- Cuándo usar Next.js vs. Remix vs. SvelteKit vs. una SPA simple.
- Component libraries que aceleran el desarrollo sin bloquear la personalización.
- Cómo evitar el over-engineering en el frontend cuando eres el único developer.

**Backend**
- Cuándo usar un framework completo (Laravel, Rails, Django) vs. un BFF ligero.
- API REST vs. tRPC vs. GraphQL para un SaaS en early stage.
- Autenticación: Clerk, Auth.js, Supabase Auth — criterios de elección.

**Base de datos**
- PostgreSQL + Supabase vs. PlanetScale vs. SQLite + Turso: cuándo usar cada uno.
- Cómo diseñar el esquema para que escale sin una reescritura completa.

**Infraestructura y deploy**
- Vercel / Railway / Render / Fly.io: comparación honesta de costes y limitaciones.
- Cómo configurar el CI/CD básico desde el primer día sin perder tiempo.

**Pagos y billing**
- Stripe: la configuración mínima para cobrar suscripciones y one-time payments.
- Cómo manejar upgrades, downgrades y cancelaciones sin que sea un infierno.

---

## 2. Decisiones de arquitectura críticas en early stage

Las decisiones que más penalizan si las tomas mal:

**Multitenancy desde el día 1**
- Cómo implementar el aislamiento de datos entre clientes sin over-engineering inicial.
- Cuándo usar row-level security (RLS) y cuándo una columna tenant_id es suficiente.

**Soft deletes y auditoría**
- Por qué siempre deberías hacer soft deletes desde el primer modelo.
- Qué nivel de auditoría es necesario en early stage.

**Feature flags**
- Cómo implementar un sistema básico de feature flags sin una librería externa.
- Cómo usarlos para hacer beta privada con primeros clientes antes del lanzamiento público.

---

## 3. El proceso de construcción del MVP

Define las reglas para construir el MVP más pequeño que alguien pagaría:

**Scope mínimo**
- Cómo identificar la feature mínima que resuelve el problema suficientemente bien.
- Las 3 señales de que estás construyendo más de lo necesario.
- Qué posponer sin remordimientos para la versión 2.

**Velocidad de iteración**
- Estructura de carpetas y convenciones que permiten iterar sin reuniones de arquitectura.
- Cómo hacer pair programming con Claude para avanzar el doble de rápido.
- Cuándo parar de construir y salir a hablar con usuarios.

---

## 4. Lanzamiento y primeros clientes

El código es lo fácil. La distribución es lo difícil:
- Dónde anunciar el lanzamiento para conseguir los primeros 100 usuarios (Product Hunt, Hacker News, Reddit, Twitter/X, comunidades de nicho).
- Cómo escribir el mensaje de lanzamiento para cada canal.
- Cómo pasar de usuarios gratuitos a clientes de pago en las primeras semanas.

---

## 5. Métricas que importan en cada fase

- Fase pre-lanzamiento: waitlist, interviews, pre-sales.
- Fase de lanzamiento: sign-ups, activación (primera acción de valor), conversión a pago.
- Fase de crecimiento: MRR, churn mensual, NPS, tiempo hasta el primer valor.

---

Empieza con mi situación. Luego dame el stack técnico recomendado para mi caso específico y el proceso de construcción del MVP con scope definido.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir un SaaS en solitario eligiendo el stack correcto y llegando al primer cliente de pago lo antes posible.',
                'vote_score'       => 49,
                'resource_type'    => 'prompt',
            ],
            // 3 — Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Diseño mínimo para founders',
                'description'      => 'El mínimo diseño necesario para validar una idea sin diseñador a jornada completa: templates, herramientas y criterios.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de producto con experiencia trabajando con founders en etapas de validación. No necesito que me hagas un design system completo; necesito el mínimo diseño que haga mi producto creíble, usable y vendible sin bloquearme durante semanas.

## Mi situación

- Tipo de producto: [landing page / SaaS web / app móvil / marketplace / otro]
- Estadio: [idea / wireframes / MVP en desarrollo / ya funciona pero es feo]
- Habilidades de diseño actuales: [ninguna / básica (Canva) / intermedia (Figma)]
- Herramientas disponibles: [Figma / Webflow / Framer / Canva / código puro]
- Tiempo máximo que puedo dedicar al diseño sin descuidar el producto: [N horas/semana]
- Referencia visual de lo que me gusta: [URLS o descripción]

---

## 1. La regla del diseño mínimo viable

Define qué es el "diseño mínimo viable" para mi tipo de producto:

**Lo que no puedes saltarte (aunque seas developer)**
- Por qué la tipografía es la decisión de diseño más importante y cómo elegirla en 5 minutos.
- El sistema de colores mínimo: color primario, neutros y un color de alerta — nada más.
- Espaciado consistente: por qué usar una escala de 4px o 8px resuelve el 80% de los problemas visuales.
- Jerarquía visual: las 3 reglas que hacen que cualquier pantalla sea legible.

**Lo que puedes posponer**
- Ilustraciones custom.
- Animaciones y microinteracciones.
- Dark mode.
- Design system completo.
- Responsive perfecto en todos los dispositivos (empieza por el más usado por tu audiencia).

---

## 2. Stack de herramientas para no diseñadores

**Para landing pages**
- Framer vs. Webflow vs. Carrd vs. código: cuándo usar cada uno según mis habilidades.
- Los mejores templates de pago que parecen diseño custom (con criterios de selección).
- Cómo personalizar un template sin romper el diseño original.

**Para el producto (UI)**
- shadcn/ui vs. Radix vs. MUI: qué component library elegir según mi stack.
- Cómo usar Figma de forma mínima: solo para wireframes y pantallas clave.
- Herramientas de generación de UI con IA que realmente ahorran tiempo.

**Para assets visuales**
- Cómo crear una identidad visual básica en 2 horas con las herramientas correctas.
- Fuentes gratuitas que parecen de pago y cómo combinarlas.
- Iconos, ilustraciones y fotografía de stock que no gritan "startup barata".

---

## 3. La landing page que convierte

La landing page es el diseño más importante en early stage. Diseña la estructura:

**Above the fold (lo primero que ve el usuario)**
- Headline: la fórmula que convierte mejor para mi tipo de producto.
- Subheadline: qué añade y qué no debe repetir.
- CTA primario: texto, color, posición — los 3 factores que más impactan la conversión.
- Visual de soporte: screenshot del producto vs. ilustración vs. vídeo corto.

**Estructura completa de la landing**
1. Hero (propuesta de valor en 5 segundos).
2. Problema que resuelvo (para que el visitante se identifique).
3. Solución (cómo lo resuelvo).
4. Prueba social (aunque sea de 3 usuarios beta).
5. Pricing (incluso en beta, con precio "fundador" si aplica).
6. FAQ (las 5 objeciones más comunes).
7. CTA final.

---

## 4. Cómo usar la IA para diseñar más rápido

- Prompt para generar wireframes textuales de una pantalla nueva antes de abrir Figma.
- Cómo usar Claude para escribir el copy de la landing page que luego adapto.
- Herramientas de IA para generar variantes visuales y elegir la mejor.
- Cómo hacer un test de usabilidad básico con IA antes de lanzar.

---

## 5. Criterios para saber cuándo contratar a un diseñador

Lista los 5 indicadores de que has llegado al límite del "diseño mínimo viable" y necesitas ayuda profesional:
- Cuándo el diseño se convierte en un freno para la conversión o la retención.
- Qué tipo de diseñador contratar primero (producto vs. branding vs. motion).
- Cómo hacer un buen briefing para que el diseñador no pierda tiempo y tú tampoco.

---

Empieza con mi situación. Luego dame el plan de diseño mínimo viable para mi tipo de producto con las herramientas específicas que debería usar dado mi nivel de habilidad.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Crear el diseño mínimo necesario para validar y lanzar un producto sin bloquear el desarrollo ni gastar en un diseñador antes de tiempo.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            // 4 — Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Founder-led sales',
                'description'      => 'Cómo hacer las primeras ventas cuando eres el CEO y no tienes equipo de ventas: el proceso que valida el modelo antes de contratar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un advisor de ventas especializado en ayudar a founders técnicos o de producto a hacer sus primeras ventas sin experiencia comercial previa. Tu objetivo es darme un proceso concreto y repetible que me permita cerrar los primeros 10-20 clientes yo solo, aprender lo que necesita el mercado y construir el playbook de ventas antes de contratar al primer comercial.

## Mi situación como founder

- Producto / servicio: [PRODUCTO]
- Precio / modelo de ingresos: [precio mensual o anual, ticket promedio]
- ICP (Ideal Customer Profile) inicial: [quién compra, sector, tamaño de empresa, puesto del decisor]
- Canales de captación actuales: [inbound / outbound / referidos / comunidades / eventos]
- Mi mayor incomodidad con las ventas: [pedir dinero / manejar objeciones / hacer seguimiento / no saber cuándo presionar]
- Clientes actuales: [0 / 1-5 / 5-20]

---

## 1. Por qué el founder debe hacer las primeras ventas personalmente

Explica los 5 motivos por los que contratar un comercial antes de tener el proceso validado es un error costoso, y qué aprendo vendiendo yo mismo que no puedo aprender de otra forma.

---

## 2. El proceso de founder-led sales en 6 pasos

**Paso 1: Identificar los 50 prospectos ideales**
- Cómo construir mi lista de prospectos usando LinkedIn, comunidades, eventos y mi red.
- Criterios exactos para incluir o excluir a alguien de la lista.
- Cómo priorizar los prospectos según probabilidad de cierre y aprendizaje potencial.

**Paso 2: El primer contacto que abre conversación**
- Por qué los mensajes de venta genéricos no funcionan y cómo hacer lo contrario.
- Script de primer mensaje por canal (LinkedIn / email / introducción de tercero).
- Cómo personalizar en 5 minutos por prospecto sin hacerlo a escala.

**Paso 3: La llamada de discovery**
- Objetivo de la primera llamada: entender el problema, no vender el producto.
- Las 10 preguntas de discovery que revelan si hay fit real.
- Cómo escuchar activamente y tomar notas que alimenten el producto.
- Cuándo decir "esto no es para ti ahora mismo" y por qué eso construye credibilidad.

**Paso 4: La demo que no parece demo**
- Cómo mostrar el producto conectando cada funcionalidad al dolor específico que me contó en la llamada anterior.
- Cómo manejar cuando el producto no tiene la feature que piden.
- La pregunta de cierre que no presiona pero sí avanza.

**Paso 5: El seguimiento que no molesta**
- Cadencia de seguimiento recomendada por tipo de prospecto.
- Qué contenido enviar en cada touchpoint que aporte valor real.
- Cuándo dar por cerrada la oportunidad y pasar al siguiente.

**Paso 6: El cierre**
- Cómo pedir el dinero sin que sea incómodo.
- Cómo manejar las 5 objeciones más frecuentes de los primeros clientes.
- Qué condiciones ofrecer en early stage (precio de fundador, implementación asistida, garantía).

---

## 3. Aprender del proceso: el CRM mínimo del founder

No necesitas Salesforce. Necesitas un sistema que te haga aprender:
- Qué registrar de cada conversación para mejorar el pitch.
- Cómo identificar patrones de objeción y actualizar las respuestas.
- Cuándo y cómo pasar el conocimiento al primer comercial que contrates.

---

## 4. Las señales de que estás listo para contratar tu primer comercial

- Tienes un proceso documentado y repetible que produce resultados predecibles.
- Tienes materiales de ventas (deck, demo grabada, battle cards, FAQs).
- Tienes casos de éxito con datos de clientes reales.
- Tu tiempo como founder está mejor invertido en producto o empresa que en ventas.
- Puedes enseñar el proceso a alguien en menos de 2 semanas.

---

Empieza con mi situación. Luego dame el proceso completo de founder-led sales adaptado a mi ICP, producto y precio, con los scripts y templates listos para usar esta semana.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir el proceso de founder-led sales para cerrar los primeros clientes y validar el modelo antes de contratar un comercial.',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            // 5 — Product
            [
                'profession_id'    => 5,
                'title'            => 'Zero-to-one: de la idea al primer cliente de pago',
                'description'      => 'De la idea al primer cliente de pago: el proceso completo de discovery, MVP y go-to-market que usan los mejores product builders.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product builder con experiencia en llevar ideas de cero a producto con clientes de pago reales. Tu misión es guiarme por el proceso completo de discovery, definición del MVP y go-to-market de forma que minimice el tiempo y el dinero invertido antes de obtener validación real del mercado.

## Mi situación de partida

- Idea inicial: [IDEA]
- Problema que creo que resuelve: [PROBLEMA]
- Para quién: [AUDIENCIA HIPOTÉTICA]
- Qué tengo ya: [solo la idea / conversaciones con potenciales usuarios / prototipo / código / primeros usuarios]
- Tiempo disponible: [N horas/semana]
- Recursos: [solo / con cofundador / con presupuesto de N€]

---

## 1. Discovery: validar el problema antes de escribir una línea de código

**Por qué el 70% de los startups fracasan por construir algo que nadie quería**
- La diferencia entre un problema que la gente tiene y un problema que la gente paga para resolver.
- Cómo distinguir feedback educado ("¡buena idea!") de señales reales de demanda.

**El proceso de discovery en 2 semanas**
- Cómo identificar las 20 personas más indicadas para entrevistar.
- El script de entrevista de usuario que no te da las respuestas que quieres oír sino las que necesitas.
- Qué preguntas hacer y cuáles no hacer nunca en una entrevista de discovery.
- Cómo sintetizar 20 entrevistas en un mapa de problemas accionable.

**Las señales de que hay un problema real**
- El cliente describe el problema en términos de coste (tiempo, dinero, frustración).
- Ya tienen una solución imperfecta (spreadsheet, proceso manual, competidor inferior).
- Están dispuestos a hablar contigo más de 30 minutos sin que les pagues.
- Preguntan cuándo estará disponible el producto antes de que lo menciones.

---

## 2. Definición del MVP: el mínimo que alguien pagaría

**El error de construir demasiado**
- Por qué el MVP que los developers imaginan siempre es 5x más grande de lo necesario.
- La técnica del "concierge MVP": cómo hacer manualmente lo que luego automatizarás.
- Cómo usar Notion, Airtable o Google Sheets como backend del MVP antes de construir.

**Proceso de definición del scope mínimo**
1. Lista todas las features que crees que necesitas.
2. Para cada una: ¿el cliente puede resolver su problema sin esta feature?
3. Si la respuesta es sí, elimínala del MVP.
4. El MVP es lo que queda.

**Cómo validar el MVP antes de construirlo**
- Landing page con waitlist: cómo medir el interés real antes de construir.
- Pre-venta: cómo conseguir dinero antes de tener el producto.
- Prototipo clickeable: cómo validar el flujo sin una sola línea de código.

---

## 3. Go-to-market: los primeros 100 clientes

**Canal de distribución primario**
- Por qué necesitas apostar por un solo canal en early stage en lugar de estar en todos.
- Cómo elegir el canal según tu ICP: ¿dónde viven online tus primeros clientes?
- Los canales con menor fricción para llegar a los primeros 100 usuarios.

**El lanzamiento mínimo viable**
- Cómo hacer un lanzamiento en Product Hunt que no sea un fracaso.
- Hacker News: cómo escribir el "Show HN" que consigue tracción.
- Comunidades de nicho: cómo participar durante semanas antes del lanzamiento para que no parezca spam.

**De usuario gratuito a cliente de pago**
- Cuándo activar el paywall: el riesgo de esperar demasiado y el riesgo de hacerlo demasiado pronto.
- Cómo fijar el precio inicial cuando no tienes datos de mercado.
- El email de conversión que convierte usuarios gratuitos en clientes de pago.

---

## 4. Las métricas que importan en zero-to-one

Olvida las vanity metrics. Estas son las que importan:

- **Cualitativas**: ¿habla el cliente del producto sin que se lo preguntes?
- **Activación**: ¿llega el usuario al momento "aha" en la primera sesión?
- **Retención**: ¿vuelve al producto 7 y 30 días después?
- **Ingresos**: ¿alguien paga sin que se lo hayas pedido personalmente?
- **Referidos**: ¿te llegan usuarios por recomendación orgánica?

---

## 5. Los errores más comunes en zero-to-one

Lista los 8 errores que cometen casi todos los founders en esta fase y cómo evitarlos.

---

Empieza con mi situación. Guíame primero por el proceso de discovery: dame el script de entrevista y las señales de validación adaptados a mi idea.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Llevar una idea desde el paper hasta el primer cliente de pago con el mínimo tiempo y recursos posibles.',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            // 6 — RRHH
            [
                'profession_id'    => 6,
                'title'            => 'HR para startups en early stage',
                'description'      => 'Las políticas, contratos y procesos mínimos que necesitas al contratar los primeros 10 empleados sin cometer errores costosos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de People con experiencia en construir el área de RRHH en startups desde cero. Tu misión es ayudarme a establecer los procesos, documentos y políticas mínimos que necesito para contratar legalmente, retener talento y evitar los errores que arruinan la cultura y crean problemas legales costosos.

## Contexto de mi startup

- País / jurisdicción principal: [España / México / Argentina / otro]
- Número de empleados actuales: [N]
- Próximas contrataciones previstas: [N en los próximos 6 meses]
- Perfiles que voy a contratar: [técnicos / comerciales / operaciones / marketing]
- ¿Tenemos gestoría o asesor laboral? [sí / no]
- Mayor preocupación de RRHH ahora mismo: [contratos / cultura / compensación / retención / proceso de selección]

---

## 1. La documentación mínima para contratar legalmente

Define los documentos que no pueden faltar antes de firmar el primer contrato:

**Contrato de trabajo**
- Tipos de contrato más usados en startups (indefinido vs. temporal vs. freelance — cuándo usar cada uno).
- Cláusulas críticas que no pueden faltar: confidencialidad, propiedad intelectual, exclusividad, periodo de prueba.
- Las cláusulas que los abogados añaden por defecto pero que no me convienen como startup.

**Pacto de socios (para cofundadores)**
- Por qué el pacto de socios es más importante que el contrato de trabajo de los empleados.
- Las cláusulas de vesting que protegen a todos: cliff, vesting schedule, good leaver / bad leaver.
- Qué pasa con las participaciones si un cofundador se va al año de montar la empresa.

**Políticas básicas**
- Política de vacaciones y días libres: cuántos días, cómo gestionarlos, qué pasa con los no usados.
- Política de trabajo remoto/híbrido: expectativas, herramientas, disponibilidad.
- Política de gastos: qué se puede pagar con tarjeta de empresa y cómo se justifica.

---

## 2. Compensación y equity en early stage

La compensación en startups tiene dos patas: cash y equity. Diseña el modelo:

**Bandas salariales**
- Cómo definir bandas salariales sin datos de mercado exhaustivos.
- Cuánto puedo bajar del salario de mercado a cambio de equity antes de que el candidato se vaya con la competencia.
- Cómo comunicar la compensación sin crear tensiones entre empleados.

**Stock options y ESOP**
- Qué es un ESOP, cuántas participaciones reservar y cómo explicárselo a los empleados.
- El plan de vesting estándar en España y en Latam: diferencias y consideraciones.
- Cómo comunicar el valor del equity a alguien que nunca ha trabajado en una startup.

---

## 3. Proceso de onboarding que retiene

El 20% de los empleados decide si se queda en la empresa durante la primera semana. Diseña el onboarding:

**Semana 1**
- Checklist de bienvenida: accesos, herramientas, documentación, reuniones clave.
- El "buddy" de onboarding: por qué asignar un compañero aumenta la retención en un 50%.
- La primera conversación 1:1 con el manager: qué preguntas hacer y qué información dar.

**Primer mes**
- Los 30-60-90 days plan: cómo definir expectativas claras sin abrumar al nuevo empleado.
- Cómo integrar al nuevo empleado en la cultura sin que suene a charla corporativa.
- La reunión de fin del período de prueba: cómo darla bien tanto si el resultado es positivo como negativo.

---

## 4. Cultura y gestión en early stage

En startups de menos de 15 personas, la cultura la hacen las decisiones diarias, no los valores en la pared:

- Los 5 comportamientos del founder que más impactan la cultura (para bien o para mal).
- Cómo dar feedback difícil sin destruir la motivación ni crear tensión permanente.
- Cómo gestionar el conflicto entre cofundadores antes de que afecte al equipo.
- Cuándo y cómo hacer la primera desvinculación sin que sea un trauma para todos.

---

## 5. Lo que no puedes improvisar: los errores que salen caros

Lista los 7 errores de RRHH en early stage que acaban en demandas, fuga de talento o problemas con Hacienda:
1. Contratar como freelance a alguien que trabaja como empleado (falso autónomo).
2. No tener cláusula de propiedad intelectual en el contrato del CTO.
[...continúa con los 7]

---

Empieza con mi contexto. Luego dame la lista de documentación mínima y el modelo de compensación + equity adaptado a mi jurisdicción y estadio de la startup.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Establecer los procesos, contratos y políticas mínimas de RRHH para contratar con seguridad en una startup early stage.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            // 7 — Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Finanzas para founders no financieros',
                'description'      => 'Comprende el P&L, el cash flow y el cap table sin tener formación financiera: lo que todo CEO debe saber.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO fraccionado con experiencia en ayudar a founders técnicos o de producto a entender las finanzas de su empresa sin necesidad de un MBA. Tu objetivo es enseñarme los conceptos clave de forma práctica y aplicada a mi situación real, no con teoría académica.

## Mi situación

- Tipo de empresa: [SaaS / ecommerce / marketplace / agencia / otro]
- Estadio: [pre-revenue / < 50K€ ARR / 50-500K€ ARR / > 500K€ ARR]
- ¿Tengo inversión externa? [sí — [ronda y cuantía] / no / estoy buscando]
- Principal preocupación financiera ahora mismo: [no entiendo el P&L / me estoy quedando sin cash / no sé si soy rentable / necesito levantar ronda]
- ¿Tengo contable o gestoría? [sí / no]

---

## 1. Los tres estados financieros que todo CEO debe entender

**P&L (Cuenta de resultados)**
Explícame el P&L de una empresa como la mía con un ejemplo numérico realista:
- La diferencia entre ingresos, margen bruto y EBITDA — y por qué cada uno importa.
- Cuáles son las partidas de coste más comunes para mi tipo de negocio.
- Cómo leer el P&L en 5 minutos y saber si el negocio va bien o mal.
- La diferencia entre beneficio contable y cash generado (spoiler: no son lo mismo).

**Cash flow**
- Por qué una empresa rentable puede quedarse sin cash (el problema del capital circulante).
- La diferencia entre cash flow operativo, de inversión y de financiación.
- Cómo construir una proyección de cash flow a 12 meses sin ser contable.
- La regla del "runway": cómo calcular cuántos meses de vida tiene mi empresa con el cash actual.

**Balance**
- Los 5 conceptos del balance que un founder necesita entender.
- Activos vs. pasivos: qué tengo y qué debo.
- Por qué el cap table es parte del balance y cómo afecta a las decisiones estratégicas.

---

## 2. Las métricas financieras de un SaaS / negocio recurrente

Si mi negocio tiene ingresos recurrentes, estas son las métricas que importan:

- **MRR / ARR**: cómo calcularlo correctamente (new, expansion, churn, reactivation).
- **Churn**: la diferencia entre logo churn y revenue churn, y cuál vigilar más.
- **LTV**: cómo calcular el valor de vida de un cliente con datos reales.
- **CAC**: el coste de adquisición de cliente, incluyendo los costes que la mayoría olvida.
- **LTV/CAC ratio**: el indicador más importante de la salud del negocio.
- **Payback period**: cuántos meses tardo en recuperar lo que me cuesta conseguir un cliente.

Genera una plantilla en formato tabla que pueda rellenar con mis datos reales.

---

## 3. El presupuesto anual para founders

Cómo construir un presupuesto anual que sirva para gestionar el negocio, no solo para cumplir el trámite:

- La diferencia entre un presupuesto "wishful thinking" y uno conservador con escenarios.
- Cómo modelar tres escenarios: base, optimista y pesimista.
- Cómo usar el presupuesto para tomar decisiones de contratación y gasto.
- Cuándo revisar el presupuesto y cómo gestionar las desviaciones.

---

## 4. Cap table y dilución: lo que debes entender antes de levantar dinero

- Qué es el cap table y cómo leerlo.
- Cómo funciona la dilución en cada ronda de inversión.
- La diferencia entre pre-money y post-money valuation.
- Cómo el ESOP de los empleados afecta la dilución de los fundadores.
- Qué preguntar a un inversor antes de firmar un term sheet.

---

## 5. Señales de alerta financiera que ningún founder debería ignorar

Lista las 8 señales que indican que las finanzas de la empresa necesitan atención urgente:
- Runway por debajo de 6 meses sin plan claro de financiación.
- Margen bruto que se deteriora mes a mes.
[...continúa con las 8]

---

Empieza con mi situación. Luego explícame el P&L aplicado a mi tipo de negocio con números de ejemplo y dame la plantilla de métricas financieras que debería estar mirando cada mes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Entender las finanzas de la propia empresa sin formación financiera: P&L, cash flow, métricas SaaS y cap table.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            // 8 — Legal
            [
                'profession_id'    => 8,
                'title'            => 'Legal toolkit para startups',
                'description'      => 'Los 5 documentos que no pueden faltar: pacto de socios, ESOP, NDA, términos y condiciones y política de privacidad.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en startups con experiencia en ayudar a founders a construir su base legal mínima de forma eficiente y sin gastar en asesoría jurídica más de lo necesario en early stage. Tu objetivo es explicarme qué necesito, cuándo lo necesito y qué puedo hacer yo mismo vs. cuándo necesito un abogado.

## Mi situación legal actual

- Tipo de empresa y forma jurídica: [SL / SAS / SA / LLC / otra]
- País de constitución: [España / México / EE.UU. (Delaware) / otro]
- Número de cofundadores: [N]
- ¿Tenemos pacto de socios?: [sí / no / en proceso]
- Clientes actuales: [0 / < 10 / > 10]
- ¿Tenemos empleados?: [sí / no]
- Mayor preocupación legal ahora mismo: [relación entre cofundadores / proteger la IP / cumplimiento GDPR / contratos con clientes]

---

## 1. El pacto de socios: el documento más importante que la mayoría ignora

El pacto de socios es el seguro del que nadie habla hasta que lo necesita. Explica:

**Qué debe incluir un pacto de socios para una startup**
- Reparto de participaciones y justificación de cada porcentaje.
- Vesting de fundadores: cliff de 1 año, vesting a 4 años — por qué es estándar y por qué protege a todos.
- Good leaver / bad leaver: qué pasa con las participaciones si un socio se va voluntariamente vs. forzado.
- Drag-along y tag-along: derechos de arrastre y acompañamiento en una venta.
- Derecho de tanteo: cómo gestionar que un socio quiera vender a un tercero.
- Toma de decisiones: qué decisiones requieren unanimidad y cuáles mayoría simple.
- Cláusula de no competencia post-salida.

**Las 3 situaciones que el pacto debe resolver explícitamente**
1. ¿Qué pasa si un cofundador se va a los 6 meses?
2. ¿Qué pasa si un socio quiere vender y los demás no?
3. ¿Qué pasa en caso de muerte o incapacidad de un socio?

---

## 2. El ESOP: cómo retener talento con equity

- Qué es un ESOP (Employee Stock Option Plan) y por qué las mejores startups lo implementan desde el principio.
- Cuánto pool reservar: el estándar del sector (10-20%) y cómo argumentarlo ante futuros inversores.
- Cómo explicar las opciones a un empleado que nunca ha trabajado en una startup.
- El cliff y el vesting para empleados: igual que para fundadores pero con matices.
- Fiscalidad de las opciones en España y en Latam: lo que puede sorprender al empleado el día que ejerce.

---

## 3. El NDA: cuándo usarlo y cuándo no

Los founders firman demasiados NDAs que no necesitan y se olvidan de firmarlos cuando sí son críticos:

**Cuándo sí necesitas un NDA**
- Conversaciones con potenciales socios tecnológicos que ven tu arquitectura.
- Compartir información financiera con potenciales inversores en due diligence avanzada.
- Contratistas externos que acceden a código, datos de clientes o modelos de negocio.

**Cuándo no necesitas un NDA (y firmarlo es una mala señal)**
- Con inversores en las primeras conversaciones: ningún inversor serio firma NDAs en este punto.
- Con potenciales clientes en demos: ralentiza el proceso y genera desconfianza.

**Elementos clave de un NDA para startups**
- Definición de información confidencial: ni demasiado amplia ni demasiado estrecha.
- Plazo de vigencia: 2-3 años es el estándar.
- Excepciones: qué información nunca puede ser confidencial por definición.

---

## 4. Términos y condiciones + Política de privacidad

Sin estos dos documentos no deberías tener ni un solo usuario de pago:

**Términos y condiciones**
- Las cláusulas mínimas que todo SaaS necesita: limitación de responsabilidad, propiedad intelectual, suspensión de cuenta, ley aplicable.
- Cómo adaptarlos a un modelo B2B vs. B2C (las diferencias son significativas).
- Por qué no usar los T&C de la competencia directamente (y qué hacer en su lugar).

**Política de privacidad (GDPR y equivalentes)**
- Qué datos recogemos, por qué y con qué base legal.
- Los 8 derechos del usuario que debes facilitar.
- Cómo gestionar los sub-procesadores (Stripe, AWS, Intercom, etc.).
- El registro de actividades de tratamiento: qué es y por qué debes tenerlo.
- Las cookies: qué necesitas y qué es sobrería regulatoria.

---

## 5. Los contratos con clientes y proveedores

- Cuándo es suficiente con los T&C aceptados online y cuándo necesitas un contrato firmado.
- Las cláusulas de SLA que puedes comprometerte a cumplir y las que no.
- Cómo gestionar la propiedad intelectual cuando desarrollas algo a medida para un cliente.

---

Empieza con mi situación legal. Dame primero la lista de lo que me falta y las prioridades, y luego profundiza en el documento más urgente para mi caso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir la base legal mínima de una startup: pacto de socios, ESOP, NDA, T&C y política de privacidad.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            // 9 — CS
            [
                'profession_id'    => 9,
                'title'            => 'Customer success como founder',
                'description'      => 'Cómo hacer CS de alto impacto tú mismo cuando eres developer, PM y soporte a la vez en los primeros meses.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un advisor de Customer Success con experiencia en startups en early stage donde el founder hace de todo. Tu objetivo es ayudarme a diseñar un sistema de CS mínimo y de alto impacto que me permita retener clientes, reducir el churn y aprender del mercado sin necesitar un equipo dedicado.

## Mi situación actual

- Tipo de producto: [SaaS / marketplace / servicio / otro]
- Número de clientes activos: [N]
- Churn mensual actual: [N%]
- Cómo contactan los clientes ahora mismo: [email / chat / soporte / sin sistema definido]
- Tiempo que dedico a CS por semana: [N horas]
- Mayor problema de retención: [los clientes no activan / no ven valor / cancelan sin avisar / piden features que no tenemos]

---

## 1. Por qué el founder es el mejor agente de CS en early stage

Explica los 5 beneficios únicos de que el founder haga CS personalmente en los primeros meses:
- Cada conversación con un cliente es un input de producto invaluable.
- La velocidad de respuesta de un founder genera una lealtad imposible de comprar.
- El founder detecta patrones que un agente de CS nunca vería.
- Las relaciones de cliente que construyes en early stage duran años.
- El churn que evitas en esta fase es el que más duele eliminar después.

---

## 2. El sistema de CS mínimo para un founder solo

**El onboarding que activa al cliente**
El mayor problema de churn en SaaS es que el cliente nunca llega al momento "aha". Diseña el onboarding:
- El email de bienvenida que no parece de marketing: qué decir, qué preguntar, qué ofrecer.
- La llamada de onboarding de 30 minutos: cuándo hacerla, con quién y qué cubrir.
- El check-in de la semana 1: señales de que el cliente está activando vs. señales de alerta.
- Cómo definir el "momento aha" de tu producto y medir cuántos clientes lo alcanzan.

**Los touchpoints proactivos**
No esperes a que el cliente tenga un problema. Diseña los puntos de contacto proactivos:
- Día 1: email de bienvenida personalizado.
- Día 7: check-in de activación.
- Día 30: revisión del primer mes.
- Día 60: QBR ligero (Quarterly Business Review simplificado).
- Cada renovación: llamada de renovación proactiva.

**Cómo detectar el churn antes de que ocurra**
- Señales de alerta de baja actividad: login frequency, feature adoption, soporte silencioso.
- Cómo configurar alertas básicas sin un sistema de CS sofisticado.
- El email de rescate que funciona: cuándo enviarlo y qué decir.

---

## 3. Convertir el CS en producto

Cada conversación con un cliente es oro para el roadmap:

**Sistema de captura de feedback**
- Cómo tomar notas de cliente durante las llamadas que el equipo de producto puede usar.
- El formato de bug report / feature request que captura contexto real, no solo la petición.
- Cómo diferenciar el feedback de un cliente ruidoso del feedback que representa a muchos.

**El weekly CS review**
- Qué revisar cada semana: tickets abiertos, clientes en riesgo, feedback nuevo.
- Cómo priorizar el roadmap usando el feedback de CS de forma sistemática.
- Cómo comunicar al cliente que su feedback ha llevado a un cambio en el producto.

---

## 4. Métricas de CS para early stage

Define el dashboard mínimo de CS para un founder:
- **Activación**: % de clientes que llegan al momento "aha" en los primeros 7 días.
- **Engagement semanal**: % de clientes activos en la última semana.
- **Churn mensual**: por segmento si es posible.
- **NPS mensual**: con seguimiento de los detractores.
- **Time to first value**: tiempo desde el registro hasta el primer valor obtenido.

---

## 5. Cuándo contratar el primer agente de CS

Lista los 5 indicadores de que estás listo para contratar tu primer agente de CS:
- Pasas más de 15 horas semanales en CS y eso impide hacer producto o ventas.
- Tienes un playbook documentado de onboarding, escalado y renovaciones.
- Tienes más de 50 clientes activos con necesidades heterogéneas.
- El churn está controlado y quieres enfocarte en expansion revenue.
- Puedes enseñar el proceso a alguien en menos de 2 semanas.

---

Empieza con mi situación. Luego dame el sistema de onboarding completo y los touchpoints proactivos adaptados a mi tipo de producto y número de clientes actuales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar un sistema de customer success de alto impacto que un founder puede gestionar solo en los primeros meses.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 10 — Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'De proveedor de servicios a creador de productos',
                'description'      => 'Lanza tu primer curso, plantilla o SaaS para pasar de facturar tiempo a facturar valor.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un advisor especializado en ayudar a freelancers y consultores a crear su primer producto digital. Tu misión es ayudarme a identificar el producto más fácil de lanzar dado mi expertise actual, diseñar el proceso de creación mínimo y montar la estrategia para las primeras ventas.

## Mi situación actual como freelance

- Servicio principal que ofrezco: [SERVICIO]
- Sector o nicho: [NICHO]
- Audiencia que ya tengo (si la hay): [seguidores, lista de email, comunidad]
- Ingresos mensuales actuales como freelance: [N€/mes]
- Horas que trabajo a la semana: [N]
- Tiempo que podría dedicar a crear un producto sin afectar los clientes actuales: [N horas/semana]
- Mayor bloqueo para crear un producto: [no sé qué crear / no tengo audiencia / me da miedo que no compre nadie / no sé el precio / no tengo tiempo]

---

## 1. Por qué pasar de tiempo a productos

El modelo de freelance tiene un techo: solo puedes trabajar N horas. Los productos no. Explica:
- La diferencia entre ingresos activos (intercambias tiempo por dinero) e ingresos palancados (vendes algo una vez, cobras muchas).
- Por qué tu expertise de freelance es exactamente lo que alguien pagaría por aprender o tener.
- Los tres modelos de producto más adecuados para freelancers: curso online, plantillas/recursos y SaaS/herramienta.
- Cuál tiene la mayor probabilidad de éxito en tu caso según tu nicho y audiencia.

---

## 2. Elegir el producto correcto: la matriz de decisión

Para cada tipo de producto, evalúa:

**Curso online**
- Tiempo de creación: 40-200 horas dependiendo de la profundidad.
- Precio típico: 97-997€ por curso.
- Mejor para: quien tiene audiencia y puede enseñar un proceso claro.
- Riesgo: nadie lo compra si no tienes audiencia o autoridad demostrada.

**Plantillas, recursos y toolkits**
- Tiempo de creación: 5-40 horas.
- Precio típico: 19-197€.
- Mejor para: quien tiene procesos internos eficientes que otros querrían copiar.
- Riesgo: precio bajo, necesitas volumen.

**SaaS / herramienta**
- Tiempo de creación: 80-300+ horas (o contratar desarrollo).
- Precio típico: 9-99€/mes.
- Mejor para: quien tiene habilidades técnicas o puede pagar a un developer.
- Riesgo: el más alto de los tres, pero el mayor potencial de escala.

Genera la recomendación específica para mi caso con justificación.

---

## 3. El proceso de creación mínima (primero vender, luego crear)

El error más común: crear el producto durante meses y descubrir que nadie lo quiere.

**Validación antes de crear**
- Cómo pre-vender el producto antes de tenerlo listo.
- La landing page de pre-venta: qué incluir para convencer sin tener el producto.
- Cómo hacer el pitch en tu comunidad o red sin que parezca spam.
- La meta mínima de pre-ventas para confirmar que vale la pena continuar.

**Creación del MVP del producto**
- Curso: el mínimo es 3-5 módulos con el proceso central, sin producción perfecta.
- Plantillas: el mínimo es la plantilla que usas tú mismo, documentada y empaquetada.
- SaaS: el mínimo es el flujo principal que resuelve el problema, sin features secundarias.

**Herramientas para crear sin gastar demasiado**
- Curso: Podia, Gumroad, Teachable, Notion + Stripe.
- Plantillas: Gumroad, Lemonsqueezy, Payhip.
- SaaS: el stack de indie hacker (ver skill de indie hacking).

---

## 4. Distribución: cómo vender el producto

**Canal 1: Tu lista de clientes actuales**
- Por qué tus clientes de servicio son los primeros compradores naturales de tu producto.
- Cómo hacer el pitch sin parecer que estás vendiendo un sustituto de tus servicios.

**Canal 2: Tu presencia online existente**
- Cómo convertir el contenido que ya produces en marketing del producto.
- LinkedIn, Twitter/X, newsletters: qué canal tiene más ROI para tu nicho.

**Canal 3: Plataformas de descubrimiento**
- Gumroad Discover, Product Hunt, AppSumo: cómo aprovechar el tráfico orgánico de cada plataforma.
- Cómo escribir la página de producto que convierte en Gumroad.

---

## 5. El modelo híbrido: producto + servicio

No tienes que elegir entre uno y otro. El modelo óptimo para un freelance que crea su primer producto:
- Usa el producto como lead magnet para servicios de mayor valor.
- Usa el servicio para aprender qué añadir al producto.
- Migra progresivamente hacia más producto y menos servicio a medida que crece el revenue pasivo.

Define las métricas que me dirán cuándo he llegado al punto en que puedo reducir el trabajo de servicio.

---

Empieza con mi situación. Dame primero la recomendación de qué tipo de producto crear y la estrategia de pre-venta para validarlo antes de dedicarle tiempo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear el primer producto digital como freelance para pasar de vender tiempo a generar ingresos escalables.',
                'vote_score'       => 46,
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
