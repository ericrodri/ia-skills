<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills112Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Modelo de negocio freemium: cuándo y cómo monetizar',
                'description'      => 'Decide qué funcionalidades van en el plan gratuito, cuáles en el de pago y cómo diseñar la conversión sin alienar a los usuarios gratuitos.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en estrategia de producto y monetización con amplia experiencia ayudando a startups y empresas SaaS a diseñar modelos freemium que convierten sin alienar a su base de usuarios gratuitos.

Voy a darte información sobre mi producto o servicio y necesito que me ayudes a diseñar o evaluar mi modelo freemium completo.

**Información de mi producto:**
- Producto / servicio: [describe brevemente qué hace tu producto]
- Tipo de usuario objetivo: [perfil del usuario final]
- Coste marginal por usuario gratuito: [coste de infraestructura o soporte por usuario mensual]
- Competidores principales y sus modelos de precios: [lista brevemente]
- Métrica de valor clave (ej: proyectos creados, mensajes enviados, documentos procesados): [cuál es]
- Tasa de conversión actual o esperada: [si tienes datos]

Con esa información, desarrolla el análisis completo siguiendo estos pasos:

**1. Diagnóstico del valor percibido**
Analiza qué es lo que más valora el usuario en el producto y qué le haría imposible vivir sin la versión de pago. Identifica el momento "aha" que convierte usuarios gratuitos en fans y el momento de fricción que debería empujar hacia el upgrade.

**2. Diseño de la línea gratuita**
Define con precisión qué debe incluir el plan Free:
- Límites cuantitativos razonables (no tan restrictivos que frustren, no tan generosos que eliminen la necesidad de pagar)
- Funcionalidades completas que demuestran el valor del producto
- Qué debe quedar fuera para proteger el modelo de negocio
Justifica cada decisión con lógica de producto, no solo con lógica de monetización.

**3. Diseño del plan de pago**
Define qué funcionalidades o capacidades deben estar detrás del muro de pago y por qué. Explica la diferencia de valor percibido entre Free y Pro de forma que el usuario lo entienda inmediatamente sin necesidad de una tabla comparativa de 20 filas.

**4. Puntos de conversión y friction points**
Enumera los momentos clave del journey en que el usuario debería sentir la necesidad de hacer upgrade. Describe cómo diseñar esos momentos para que sean invitaciones naturales, no bloqueos frustrantes. Incluye ejemplos de microcopy y UX patterns que funcionan bien en contextos similares.

**5. Riesgos y trampas del freemium**
Señala los tres errores más comunes en modelos freemium para este tipo de producto y cómo evitarlos. Incluye el riesgo de over-giving (demasiado gratis), under-giving (demasiado restrictivo) y la trampa de los usuarios gratuitos que consumen soporte sin intención de pagar.

**6. Métricas para validar el modelo**
Qué KPIs deberías seguir mensualmente para saber si el modelo freemium está funcionando: tasa de activación, time-to-convert, revenue per user, churn diferencial entre Free y Pro, y NPS segmentado.

**7. Recomendación final**
Resume en un párrafo ejecutivo la estructura freemium recomendada para mi caso concreto, con los límites específicos del plan gratuito, el precio sugerido del plan de pago y la propuesta de valor diferencial entre ambos.

Sé directo, usa ejemplos reales de productos conocidos cuando sea útil y no te limites a principios generales: quiero recomendaciones accionables para mi contexto específico.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Diseño de modelo freemium y estrategia de monetización',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Modelos de monetización para developers: API, SaaS, licencias y open core',
                'description'      => 'Elige el modelo de monetización correcto para tu producto técnico entre pricing por uso, SaaS, licencias perpetuas u open core.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en estrategia de producto técnico y monetización para developers y empresas de software. Tienes experiencia real ayudando a equipos de ingeniería a convertir proyectos técnicos en negocios sostenibles con el modelo de monetización correcto.

Voy a darte información sobre lo que estoy construyendo y necesito que me ayudes a elegir el modelo de monetización más adecuado y a diseñarlo correctamente.

**Información de mi producto:**
- Descripción del producto técnico: [qué hace, qué problema resuelve]
- Usuario objetivo: [developers individuales, equipos de ingeniería, empresas, startups...]
- Cómo se integra / usa: [API, librería, CLI, plataforma web, plugin...]
- Competencia y alternativas existentes: [menciona las principales]
- Tamaño de mercado objetivo: [amplio o nicho especializado]
- Estado actual: [idea, MVP, primeros usuarios, product-market fit]
- Coste técnico de operación mensual estimado: [si lo tienes]

Con esa base, desarrolla el análisis completo:

**1. Evaluación de los modelos disponibles**
Analiza cada uno de los siguientes modelos aplicado a mi caso específico:
- **Usage-based / pay-as-you-go**: cobrar por API calls, tokens, minutos de procesamiento o unidad de consumo relevante. Ventajas, riesgos y cuándo es el modelo ideal.
- **SaaS por suscripción**: tarifa mensual por acceso a la plataforma, con distintos tiers. Cuándo funciona y cuándo no.
- **Licencia perpetua**: pago único con o sin mantenimiento anual. Todavía relevante para ciertos mercados.
- **Open core**: la librería o herramienta base es open source y se monetiza con funcionalidades enterprise o soporte. Estrategia, riesgos y ejemplos.
- **Marketplace o plataforma de plugins**: crear el ecosistema y cobrar comisión o listing fee.

**2. Modelo recomendado para mi caso**
Recomienda el modelo principal y, si aplica, una combinación de dos modelos. Justifica la elección con argumentos concretos basados en el tipo de usuario, la naturaleza técnica del producto y la competencia.

**3. Diseño del pricing**
Define con detalle cómo estructurar el precio: tiers, límites, métricas de facturación y precio de entrada. Incluye una tabla de ejemplo con al menos tres planes (Free/Pro/Enterprise o equivalente) con sus características.

**4. Go-to-market para productos técnicos**
Estrategia específica para llegar a developers: documentation-led growth, open source como canal de distribución, communities, Product Hunt, hackathons, developer relations y partnerships de integración.

**5. Señales de que elegiste el modelo equivocado**
Enumera las señales de alarma tempranas (en los primeros 6 meses) que indican que el modelo de monetización no está funcionando y es momento de pivotar.

**6. Casos de referencia**
Menciona dos o tres productos técnicos reales que usen un modelo similar y qué podemos aprender de cómo lo han implementado.

**7. Próximos pasos accionables**
Qué deberías hacer en las próximas dos semanas para validar que el modelo elegido tiene tracción antes de construir toda la infraestructura de facturación.

Dame respuestas concretas, no principios genéricos. Si hay decisiones que dependen de variables que no te he dado, dímelo y explícame qué información necesitarías para responder con más precisión.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Elección y diseño de modelo de monetización para productos técnicos',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Vender diseño como producto: templates, UI kits y sistemas de diseño',
                'description'      => 'Diseña y vende templates, UI kits, sistemas de diseño o componentes de Figma en Gumroad, Creative Market o tu propia tienda.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en monetización del diseño digital y en la venta de productos de diseño en marketplaces y canales propios. Has ayudado a diseñadores a convertir su trabajo en ingresos pasivos vendiendo templates, UI kits, sistemas de diseño, componentes de Figma y recursos similares.

Quiero lanzar o mejorar mi negocio de productos de diseño digital y necesito tu ayuda para construir una estrategia completa.

**Mi situación actual:**
- Tipo de producto que quiero vender o ya vendo: [templates web, UI kit, sistema de diseño, componentes Figma, iconos, ilustraciones, decks de presentación...]
- Herramientas en las que están hechos: [Figma, Adobe XD, Sketch, Canva, otro...]
- Nivel de experiencia vendiendo productos digitales: [nunca he vendido / tengo algún producto / ya vendo regularmente]
- Canales actuales o previstos: [Gumroad, Creative Market, Figma Community, propia web, otro]
- Precio actual o que tenías en mente: [indicar]
- Nicho o tipo de cliente al que apuntas: [agencias, startups, diseñadores junior, empresas SaaS...]

Con esa información, desarrolla una estrategia completa:

**1. Validación del producto**
Antes de invertir semanas en producción, cómo validar rápido que hay demanda para el tipo de producto que quiero crear. Qué señales buscar en Twitter/X, Reddit, comunidades de Figma y foros de diseño para confirmar que hay un problema que resolver.

**2. Diferenciación del producto**
El mercado de templates y UI kits está saturado. Explica cómo encontrar el ángulo diferencial: verticales con menos competencia, formatos o calidades de documentación que otros no ofrecen, o combinaciones de herramientas poco explotadas.

**3. Producción y calidad profesional**
Qué estándares de calidad, documentación y organización debe cumplir un producto de diseño para justificar su precio y reducir el soporte postventa. Cómo organizar los archivos de Figma (o la herramienta elegida) para que el comprador tenga una experiencia profesional desde el primer momento.

**4. Pricing y estrategia de precios**
Cómo fijar el precio correcto: comparación con competidores, precio de lanzamiento vs precio establecido, bundles, licencias para uso comercial vs personal, y cuándo y cómo subir precios sin perder ventas.

**5. Canales de distribución**
Comparativa honesta de Gumroad vs Creative Market vs Figma Community vs tienda propia. Cuánto se lleva cada plataforma, qué tipo de audiencia tiene y cuál recomiendas para mi caso concreto.

**6. Marketing para diseñadores vendedores**
Estrategia de contenido específica para promocionar productos de diseño: qué publicar en Twitter/X, LinkedIn y Dribbble o Behance, cómo usar videos de proceso en YouTube o TikTok, y cómo construir una lista de email con compradores potenciales.

**7. Automatización y pasividad real**
Cómo minimizar el soporte postventa mediante documentación, FAQs y videos tutoriales. Cómo automatizar las entregas y los pagos. Qué nivel de ingresos es realista en los primeros 3, 6 y 12 meses con dedicación parcial.

**8. Plan de acción para los próximos 30 días**
Dame un plan concreto semana a semana para lanzar el primer producto o mejorar el que ya tengo, con acciones específicas en cada etapa.

Sé práctico y honesto sobre lo que funciona y lo que no. Incluye ejemplos de diseñadores que venden productos digitales con éxito cuando sea útil para ilustrar una estrategia.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Estrategia para vender productos de diseño digital',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Modelos de comisión y compensación variable en ventas',
                'description'      => 'Diseña el plan de incentivos de ventas que motiva sin destruir el margen ni generar comportamientos tóxicos en el equipo.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en compensación de equipos de ventas y diseño de planes de incentivos con amplia experiencia en empresas B2B, SaaS y sectores con ciclos de venta complejos. Conoces los efectos secundarios indeseados de los planes mal diseñados y cómo evitarlos.

Necesito que me ayudes a diseñar o auditar el plan de compensación variable de mi equipo de ventas.

**Contexto de mi equipo y negocio:**
- Tipo de ventas: [B2B, B2C, enterprise, transaccional, ciclo largo/corto...]
- Ticket medio por operación: [indicar]
- Ciclo de venta promedio: [días o semanas]
- Tamaño del equipo de ventas: [número de personas]
- Roles existentes: [SDR, AE, Account Manager, Inside Sales, Field Sales...]
- Plan de comisiones actual (si existe): [describir brevemente]
- Principales problemas actuales: [desmotivación, comportamientos tóxicos, rotación, falta de foco...]
- Objetivo de ingresos del equipo para este año: [indicar]
- Margen bruto aproximado del producto o servicio: [porcentaje o descripción]

Con esa información, desarrolla el análisis y el diseño completo:

**1. Auditoría del plan actual**
Si tengo un plan existente, identifica los problemas estructurales: qué comportamientos incentiva de forma no intencionada, si hay problemas de equidad percibida, si los targets son alcanzables y qué está desmotivando al equipo.

**2. Principios de diseño de un buen plan de comisiones**
Explica los principios fundamentales que debe cumplir cualquier plan de incentivos: alineación con objetivos de negocio, transparencia, alcanzabilidad, simplicidad y predictibilidad. Por qué la complejidad excesiva destruye la motivación.

**3. Estructura de compensación recomendada**
Define el mix de compensación ideal para mi contexto (base vs variable), la estructura de comisiones (porcentaje plano, acelerador por tramos, multiplicadores de cuota), y si aplica, los bonos por objetivos cualitativos o de actividad.

**4. Protección del margen**
Cómo estructurar el plan para que los incentivos estén alineados con la rentabilidad real del negocio: comisiones por margen en lugar de por revenue bruto, clawbacks para contratos cancelados, y umbrales mínimos de rentabilidad por deal.

**5. Prevención de comportamientos tóxicos**
Describe los comportamientos tóxicos más comunes que generan los planes mal diseñados (sandbagging, cherry-picking, final-of-quarter dump, descuentos agresivos para cerrar) y cómo el diseño del plan los puede prevenir estructuralmente.

**6. Comunicación e implementación**
Cómo comunicar el nuevo plan al equipo de forma que lo entiendan, lo perciban como justo y se motiven. Cómo gestionar la transición desde un plan anterior y qué hacer con los casos especiales o los veteranos que tenían condiciones históricas.

**7. Revisión y ajuste periódico**
Cada cuánto revisar el plan, qué métricas monitorizar para detectar problemas antes de que se vuelvan crisis, y cómo hacer ajustes a mitad de año sin destruir la confianza del equipo.

**8. Propuesta concreta para mi caso**
Resume la propuesta específica para mi contexto: estructura de compensación, porcentajes, aceleradores y métricas objetivo recomendados, con una calculadora de ejemplo para un vendedor que alcanza el 80%, el 100% y el 120% de cuota.

Dame respuestas directas y aplicables. Si necesito información adicional para ser más preciso en algún punto, dímelo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseño de planes de comisiones y compensación variable',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Monetización de producto: elige el modelo correcto y cuándo cambiarlo',
                'description'      => 'Evalúa freemium, trial, usage-based, per-seat y enterprise para tu producto y decide cuándo y cómo cambiar de modelo si el actual no funciona.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en estrategia de producto y monetización con experiencia trabajando con equipos de producto en startups y empresas en crecimiento. Has visto cómo el modelo de monetización equivocado puede bloquear el crecimiento de un gran producto y cómo el correcto puede desbloquearlo.

Necesito tu ayuda para analizar, elegir o cambiar el modelo de monetización de mi producto.

**Contexto del producto:**
- Qué hace el producto y para quién: [descripción breve]
- Estado actual de monetización: [sin monetizar / freemium / trial / suscripción / otro]
- Métricas de uso actuales: [DAU, MAU, retención, NRR, churn o lo que tengas]
- Modelo de negocio objetivo: [B2C, B2SMB, B2B mid-market, enterprise]
- Principal métrica de valor para el usuario: [qué hace el usuario con el producto que le genera valor real]
- Ticket medio actual o esperado: [indicar]
- Principal problema de monetización actual: [baja conversión, churn alto, pricing confuso, expansión lenta...]

Con esa información, desarrolla el análisis completo:

**1. Mapa de los modelos de monetización**
Explica cada modelo relevante para software y productos digitales con sus características, casos de uso ideales y señales de que NO es el modelo adecuado:
- **Freemium**: cuándo la capa gratuita es un activo, cuándo es un pasivo
- **Free trial con o sin tarjeta**: diferencias en conversión, fricción y calidad del lead
- **Usage-based pricing**: lo que Twilio, Stripe y AWS hicieron bien y los riesgos de revenue predecible
- **Per-seat / per-user**: cuándo alinea incentivos y cuándo genera compresión de licencias
- **Flat-rate**: simplicidad vs pérdida de captura de valor
- **Enterprise / custom**: cuándo tiene sentido y cuándo retrasa el crecimiento

**2. Diagnóstico de mi modelo actual**
Analiza el modelo que estoy usando (o planeando usar) y señala sus puntos fuertes y débiles aplicados a mi contexto específico. Identifica si hay un desajuste entre el modelo y la métrica de valor del usuario.

**3. Modelo o combinación recomendada**
Recomienda el modelo o la combinación de modelos que mejor se adapta a mi caso. Justifica la recomendación con argumentos de alineación de valor, coste de adquisición, expansión de ingresos y complejidad operativa.

**4. Diseño del pricing concreto**
Propón una estructura de precios concreta: tiers, límites, precios de referencia y lógica de expansión (cómo el cliente naturalmente gasta más a medida que obtiene más valor).

**5. Señales de que hay que cambiar de modelo**
Cuáles son las señales (en métricas y en conversaciones con usuarios) que indican que el modelo actual no está funcionando y es momento de pivotar a otro. Cómo distinguir un problema de modelo de un problema de producto o de go-to-market.

**6. Cómo cambiar de modelo sin destruir el negocio**
Estrategia para transicionar de un modelo a otro: grandfathering de usuarios existentes, comunicación del cambio, período de adaptación y cómo minimizar el churn durante la transición.

**7. Experimentos para validar antes de comprometerse**
Qué experimentos concretos puedo hacer en las próximas 4 semanas para validar que el modelo elegido va a funcionar antes de rehacer toda la infraestructura de facturación y los flujos de onboarding.

Quiero respuestas aplicables a mi situación, no un repaso teórico de modelos de negocio. Si necesitas más contexto para dar una recomendación más precisa, dímelo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Selección y diseño del modelo de monetización para productos digitales',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Retribución variable y bonus: diseña el sistema que motiva y es sostenible',
                'description'      => 'Diseña el sistema de bonus que motiva a tu equipo, es percibido como justo y la empresa se puede permitir en diferentes escenarios económicos.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en compensación y retribución total con experiencia diseñando sistemas de bonus e incentivos variables para empresas de distintos tamaños y sectores. Entiendes tanto la dimensión financiera como la psicología motivacional detrás de los sistemas de compensación.

Necesito diseñar o revisar el sistema de retribución variable y bonus de mi empresa.

**Contexto de la empresa y el equipo:**
- Tamaño de la empresa: [número de empleados]
- Sectores y perfiles del equipo: [ingeniería, ventas, marketing, operaciones, soporte...]
- Cultura de la empresa: [startup ágil, empresa consolidada, cultura de alto rendimiento, cultura colaborativa...]
- Sistema de bonus actual (si existe): [describir brevemente]
- Principal problema o motivación para este análisis: [inequidad percibida, falta de motivación, presupuesto no controlado, dificultad para retener talento...]
- Presupuesto disponible aproximado para bonus: [porcentaje del salario base o importe total]
- Resultados del año pasado: [buenos, mixtos, malos: contexto breve]

Con esa base, desarrolla el análisis y diseño completo:

**1. Fundamentos psicológicos de la motivación y el bonus**
Explica qué dice la evidencia sobre cuándo los bonos económicos aumentan la motivación y cuándo la destruyen (efecto crowding out). Qué tipos de tareas y perfiles responden mejor a incentivos económicos variables y cuándo es mejor apostar por compensación fija más alta.

**2. Tipos de sistemas de bonus y cuándo usar cada uno**
Analiza los modelos principales:
- Bonus discrecional del manager: ventajas, riesgos de percepción de favoritismo
- Bonus por objetivos individuales (MBO): cómo fijar OKRs o KPIs que sean justos y medibles
- Bonus por resultados de equipo o departamento: colaboración vs responsabilidad individual
- Bonus de empresa (profit-sharing): alineación con resultados globales, adecuado para qué perfiles
- Combinaciones de los anteriores

**3. Diseño del sistema para mi caso**
Propón la estructura concreta del sistema de bonus para mi empresa: qué porcentaje del salario debería representar el bonus objetivo, cómo dividir entre objetivos individuales, de equipo y de empresa, y con qué frecuencia pagarlo (mensual, trimestral, anual).

**4. Fijación de objetivos justa y medible**
Cómo fijar los objetivos vinculados al bonus de forma que sean ambiciosos pero alcanzables, medibles sin ambigüedad y que no generen comportamientos indeseados al final del período. Cómo manejar objetivos que dependen parcialmente de factores fuera del control del empleado.

**5. Equidad y transparencia**
Cómo comunicar el sistema para que sea percibido como justo, incluso cuando hay diferencias entre perfiles. Cuánta transparencia es recomendable sobre cómo se calcula el bonus de cada persona.

**6. Escenarios de empresa**
Cómo diseñar el sistema para que sea sostenible en distintos escenarios: año excelente (evitar crear expectativas insostenibles), año plano (cómo gestionar expectativas) y año malo (cómo reducir el bonus sin destruir la moral).

**7. Implementación y comunicación**
Plan de comunicación al equipo del nuevo sistema o de los cambios al sistema actual. Cómo gestionar las preguntas difíciles y los casos especiales.

Dame una propuesta concreta y aplicable, no principios abstractos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseño de sistemas de bonus y retribución variable',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'LTV/CAC y unit economics: calcula si tu modelo de negocio es sostenible',
                'description'      => 'Calcula y optimiza las métricas que determinan si tu modelo de negocio es viable y cuánto puedes gastar en adquisición de clientes.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en finanzas de startups y análisis de unit economics con experiencia ayudando a fundadores y directores financieros a entender si sus modelos de negocio son sostenibles y cómo optimizarlos.

Necesito que me ayudes a calcular, interpretar y mejorar las unit economics de mi negocio.

**Información financiera del negocio:**
- Modelo de negocio: [SaaS, marketplace, e-commerce, servicio, otro]
- Ingresos recurrentes mensuales (MRR) o anuales (ARR): [indicar o aproximar]
- Ticket medio por cliente (MRR o valor de compra): [indicar]
- Tasa de churn mensual o anual: [porcentaje]
- Coste de adquisición de cliente (CAC) total: [si lo tienes, suma de marketing + ventas / nuevos clientes]
- Margen bruto: [porcentaje de los ingresos que queda después de los costes directos]
- Tiempo promedio que un cliente permanece (si lo tienes): [meses o años]
- Canales de adquisición principales: [SEO, paid, referral, outbound, partnerships...]

Con esa información, desarrolla el análisis completo:

**1. Cálculo de las métricas fundamentales**
Calcula o ayúdame a calcular:
- **LTV (Customer Lifetime Value)**: con la fórmula básica (ARPU × Margen Bruto / Churn) y con la versión ajustada por tasa de descuento
- **CAC (Customer Acquisition Cost)**: blended y por canal si tengo datos
- **Ratio LTV:CAC**: interpretación del resultado y benchmarks por tipo de negocio
- **Payback period**: cuántos meses tarda el negocio en recuperar lo que invirtió en adquirir un cliente
- **Magic Number**: eficiencia del gasto en ventas y marketing

**2. Interpretación de los resultados**
Explica qué significan los números que obtenemos. Benchmarks realistas para distintos tipos de negocio: cuándo un ratio LTV:CAC de 3:1 es bueno y cuándo es insuficiente, qué payback period es aceptable según la etapa y el modelo de negocio.

**3. Los tres palancas de mejora**
Cómo mejorar las unit economics actuando sobre cada una de las palancas:
- **Reducir el CAC**: optimización de canales, mejora de la tasa de conversión, referral programs, eficiencia del equipo de ventas
- **Aumentar el LTV**: reducción del churn, expansión de ingresos (upsell/cross-sell), aumento del ARPU
- **Mejorar el margen bruto**: optimización de costes de infraestructura, automatización, pricing por valor

**4. Análisis por cohorte**
Por qué el análisis de unit economics debe hacerse por cohorte y no en agregado. Cómo leer una tabla de cohortes y qué señales buscar para detectar mejoras o deterioro en la calidad del negocio a lo largo del tiempo.

**5. Cuánto puedes gastar en adquisición**
Dado mi LTV y mi situación financiera actual, cuánto puedo invertir en adquisición de clientes sin destruir el negocio. Cómo calcular el presupuesto de marketing y ventas de forma que sea sostenible y agresivo a la vez.

**6. Señales de alerta**
Qué números debo monitorizar mensualmente y qué umbrales deberían disparar una alarma: churn que sube, CAC que crece más rápido que el LTV, payback que se alarga, margen que se comprime.

**7. Presentación a inversores**
Cómo presentar las unit economics a un inversor de forma clara y creíble, qué preguntas te van a hacer y cómo responderlas con datos.

Dame el análisis concreto para mi caso con los números que te he dado y recomendaciones específicas, no solo metodología general.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Análisis y optimización de LTV, CAC y unit economics',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Modelos de licencia de software: GPL, MIT, Apache, propietario',
                'description'      => 'Entiende las implicaciones legales de cada modelo de licencia de software para tu producto, tu negocio y tus clientes.',
                'prompt_content'   => <<<'PROMPT'
Eres un abogado especializado en propiedad intelectual y derecho tecnológico con amplia experiencia asesorando a empresas de software sobre estrategias de licenciamiento. Conoces las implicaciones legales, comerciales y estratégicas de cada modelo de licencia.

Necesito entender qué modelo de licencia es más adecuado para mi software y cuáles son las implicaciones de cada opción.

**Contexto de mi proyecto:**
- Tipo de software: [librería, framework, aplicación web, herramienta CLI, SDK, plugin...]
- Modelo de negocio previsto: [open source con servicios, SaaS, licencia comercial, open core, dual licensing...]
- Audiencia principal: [developers individuales, empresas, gobiernos, startups...]
- Dependencias externas del proyecto: [menciona las principales librerías o frameworks que usas y sus licencias]
- Preocupación principal: [que competidores usen mi código, maximizar adopción, cumplimiento corporativo, atraer contribuidores...]

Con esa información, desarrolla el análisis completo:

**1. Las licencias open source más relevantes**
Explica las características fundamentales, las obligaciones que impone y los casos de uso ideales de cada licencia:
- **MIT**: máxima permisividad, por qué es la más popular y cuándo no es la correcta
- **Apache 2.0**: parecida a MIT pero con cláusula de patentes, qué añade y para quién importa
- **GPL v2 y v3**: copyleft fuerte, qué significa que el código derivado deba ser open source, efecto en proyectos que usan la librería
- **LGPL**: copyleft débil para librerías, cómo permite uso en proyectos propietarios bajo ciertas condiciones
- **AGPL**: cierra el "SaaS loophole" del GPL, implicaciones para servicios en la nube
- **MPL (Mozilla Public License)**: copyleft a nivel de archivo, el término medio

**2. Licencias propietarias y comerciales**
Cuándo tiene sentido una licencia completamente propietaria, qué debe incluir un contrato de licencia de software básico y las diferencias entre licencia por usuario, por servidor, por instancia y por site.

**3. Dual licensing y open core**
Estrategia de publicar bajo una licencia open source para la comunidad y una licencia comercial para uso empresarial. Ejemplos de empresas que lo hacen bien (MySQL, MongoDB antes del cambio, Qt) y las implicaciones para gestionar contribuciones externas (CLA).

**4. Implicaciones de las dependencias**
Cómo afectan las licencias de las librerías que uso a mi propio proyecto. El "GPL contagion" y cuándo es un problema real. Herramientas para auditar las licencias de mis dependencias.

**5. Licencias para el entorno corporativo**
Por qué algunas empresas tienen política de no usar código bajo AGPL o GPL. Cómo la elección de licencia afecta la adopción corporativa y cuándo esto importa para mi modelo de negocio.

**6. Recomendación para mi caso**
Basándome en mi contexto, recomienda la licencia o la combinación de licencias más adecuada. Justifica la recomendación con argumentos legales, comerciales y estratégicos.

**7. Cambiar de licencia**
Cuándo y cómo se puede cambiar la licencia de un proyecto open source, qué complicaciones aparecen con las contribuciones de terceros y cómo gestionarlo correctamente.

Necesito un análisis aplicado a mi situación, no solo un resumen de licencias. Señala también los errores más comunes que cometen los equipos técnicos al elegir una licencia.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Elección de modelo de licencia de software y estrategia de licenciamiento',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Monetización del éxito del cliente: upsell, expansión y CS como centro de beneficios',
                'description'      => 'Convierte tu equipo de CS en un generador de ingresos: expansión, upsell y las métricas que transforman el éxito del cliente en un centro de beneficios.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en customer success estratégico y monetización de la relación con el cliente con experiencia transformando equipos de CS de centros de coste en centros de beneficios. Has trabajado con empresas SaaS B2B en distintas etapas de crecimiento.

Quiero que me ayudes a diseñar o mejorar la estrategia de expansión de ingresos de mi equipo de customer success.

**Contexto de mi empresa y equipo:**
- Tipo de producto: [SaaS, plataforma, servicio, otro]
- Modelo de precios: [per-seat, usage-based, flat-rate, otro]
- Tamaño del equipo de CS: [número de CSMs]
- Ratio de clientes por CSM: [indicar]
- NRR (Net Revenue Retention) actual: [porcentaje, si lo tienes]
- Gross Revenue Retention (GRR): [si lo tienes]
- Productos o planes adicionales disponibles para upsell: [lista brevemente]
- Principal barrera para el upsell actual: [falta de proceso, resistencia del equipo, momento incorrecto, falta de datos...]

Con esa información, desarrolla la estrategia completa:

**1. El cambio de mentalidad: de soporte a socio estratégico**
Cómo transformar la mentalidad del equipo de CS de "resolvemos problemas" a "generamos valor y crecimiento". Qué significa ser un socio estratégico del cliente y cómo se traduce en conversaciones diferentes.

**2. Identificación de oportunidades de expansión**
Cómo identificar de forma sistemática qué clientes tienen potencial de expansión y en qué momento: señales de uso, adopción de funcionalidades clave, growth del propio cliente, cambios organizativos. Cómo usar los datos del producto para crear listas de oportunidades calientes.

**3. Diseño del proceso de upsell y cross-sell desde CS**
Define el proceso paso a paso: cómo introducir la conversación de expansión de forma natural, cómo presentar el valor adicional sin que parezca venta agresiva, cómo manejar las objeciones más comunes y cuándo involucrar al equipo de ventas versus cerrarlo directamente desde CS.

**4. Playbooks de expansión**
Diseña los playbooks concretos para los escenarios más comunes de expansión en mi tipo de producto: añadir licencias, upgrade de plan, venta de módulos adicionales, expansión a otros departamentos del mismo cliente.

**5. Métricas del equipo de CS orientado a revenue**
Qué KPIs debe tener el equipo: NRR, expansión MRR, GRR, tiempo hasta el primer upsell, tasa de conversión de oportunidades de expansión. Cómo establecer objetivos de ingresos para CS sin destruir la confianza del cliente.

**6. Compensación e incentivos del equipo de CS**
Cómo estructurar los incentivos del equipo para que estén alineados con el revenue de expansión sin crear conflictos de interés con la satisfacción del cliente. El debate sobre comisionar o no al CS por las renovaciones y expansiones.

**7. Herramientas y datos necesarios**
Qué herramientas de CS (Gainsight, ChurnZero, Totango, HubSpot, otro) y qué datos del producto necesito para ejecutar esta estrategia de forma eficiente y a escala.

**8. Hoja de ruta para los próximos 90 días**
Qué deberías implementar primero para ver resultados en el corto plazo, antes de construir el sistema completo.

Dame recomendaciones concretas y aplicables, con ejemplos de cómo se ve en la práctica cada parte de la estrategia.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseño de estrategia de expansión de ingresos desde customer success',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Modelos de negocio para freelancers: más allá de la tarifa por hora',
                'description'      => 'Explora retainers, servicios productizados, licencias y comisiones para maximizar tus ingresos como freelance sin trabajar más horas.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en estrategia de negocio para freelancers y consultores independientes con experiencia ayudando a profesionales a salir de la trampa de la tarifa por hora y construir modelos de negocio más escalables y predecibles.

Quiero revisar o transformar mi modelo de negocio como freelance para aumentar mis ingresos sin simplemente trabajar más horas.

**Mi situación actual:**
- Especialidad o tipo de trabajo: [diseño, desarrollo, consultoría, copywriting, marketing, otro]
- Ingresos mensuales aproximados actuales: [indicar o rango]
- Modelo actual: [por hora, por proyecto, retainer, otro]
- Número de clientes activos: [indicar]
- Horas trabajadas a la semana aproximadamente: [indicar]
- Principal frustración con el modelo actual: [ingresos irregulares, límite de horas, dependencia de pocos clientes, dificultad para subir precios...]
- Servicios que ofreces actualmente: [lista breve]
- Tipo de clientes con los que trabajas: [empresas, startups, agencias, autónomos...]

Con esa información, desarrolla el análisis y la estrategia completa:

**1. El problema de la tarifa por hora**
Por qué cobrar por hora limita tus ingresos de forma estructural: el techo del tiempo disponible, la penalización por ser más eficiente y el problema de la percepción del cliente. Qué alternativas existen y cuándo tiene sentido mantener la tarifa horaria.

**2. El modelo de retainer**
Cómo transformar proyectos puntuales en relaciones de retainer: qué incluir en el retainer, cómo fijar el precio, cómo gestionar el scope y los límites, y cómo proponer la transición a un cliente que ya te conoce. Qué tipo de trabajo encaja bien en retainer y qué no.

**3. El servicio productizado**
Qué es un servicio productizado, cómo diseñarlo: definir el entregable exacto, el precio fijo, el proceso estandarizado y el tiempo de entrega. Cómo venderlo sin negociaciones eternas. Ejemplos de servicios productizados para tu tipo de trabajo.

**4. Licencias y propiedad intelectual**
Cómo retener la propiedad de tu trabajo y licenciarlo en lugar de venderlo: cuándo aplica, cómo estructurar los contratos, y cómo aumentar significativamente el valor percibido y el precio. Especialmente relevante para diseñadores y desarrolladores.

**5. Modelos de comisión e ingresos pasivos**
Ingresos por afiliación, comisiones por referidos, productos digitales (templates, cursos, herramientas) y otros modelos que generan ingresos sin intercambio directo de tiempo. Cómo combinarlos con el trabajo de cliente sin que se conviertan en otro trabajo a tiempo completo.

**6. Pricing basado en valor**
Cómo dejar de cobrar por tu tiempo y cobrar por el valor que generas al cliente. Cómo tener la conversación de pricing basado en valor, cómo cuantificar el impacto de tu trabajo y cómo usar esa información para justificar precios más altos.

**7. Plan de transición**
Estrategia paso a paso para transformar tu modelo actual sin perder ingresos en el proceso. Cómo hacer la transición gradualmente, qué comunicar a los clientes actuales y cómo conseguir nuevos clientes con el nuevo modelo.

**8. Recomendación personalizada para mi caso**
Basándome en tu situación, qué modelo o combinación de modelos te recomendaría, con los próximos tres pasos concretos para empezar la transformación esta semana.

Sé directo y práctico. Quiero entender qué funciona de verdad, no solo teoría sobre modelos de negocio.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Transformación del modelo de negocio freelance para aumentar ingresos',
                'vote_score'       => 45,
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
