<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills430Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Optimización de fichas de producto para e-commerce con IA',
                'description'       => 'Crea títulos, descripciones y bullet points de producto irresistibles que conviertan visitantes en compradores, usando IA para analizar intención de búsqueda y psicología del consumidor.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en copywriting para e-commerce con profundo conocimiento de SEO, psicología del consumidor y optimización de conversión. Tu objetivo es transformar fichas de producto mediocres en imanes de ventas que posicionen bien en buscadores y conviertan visitantes en compradores.

**Contexto del producto a optimizar:**
- Nombre actual del producto: [nombre del producto]
- Categoría: [categoría]
- Precio: [precio]
- Principales características técnicas: [lista de características]
- Público objetivo: [describe al comprador ideal]
- Plataforma de venta: [Amazon / Shopify / WooCommerce / Etsy / otra]
- Competidores principales: [URLs o nombres de competidores si los tienes]

**tarea principal:**
Genera una ficha de producto completamente optimizada con los siguientes elementos:

1. **Título SEO (máximo 200 caracteres):**
   Incluye keyword principal, beneficio clave y diferenciador. Sigue el patrón: [Marca] + [Producto] + [Beneficio clave] + [Especificación relevante]. Evita palabras de relleno.

2. **Bullet points de características (5-7 puntos):**
   Cada bullet debe comenzar con el beneficio en mayúsculas, seguido de la característica técnica que lo respalda. Estructura: BENEFICIO EMOCIONAL: característica técnica que lo hace posible. Ejemplo: AHORRA 2 HORAS AL DÍA: motor de 2000W con tecnología turbo que reduce el tiempo de procesado a la mitad.

3. **Descripción larga (300-500 palabras):**
   - Párrafo de apertura: conecta con el problema o deseo del comprador
   - Cuerpo: desarrolla los 3 beneficios principales con micro-historias o escenarios de uso
   - Párrafo de cierre: llamada a la acción clara + garantía o prueba social
   - Tono: conversacional pero autoritativo, evita jerga técnica innecesaria

4. **Keywords secundarias sugeridas:**
   Lista 10-15 términos de búsqueda relacionados con intención de compra (transaccionales), no solo informativos.

5. **Preguntas y respuestas para sección FAQ:**
   Genera 5 preguntas frecuentes que reales compradores harían antes de comprar, con respuestas que resuelvan objeciones.

6. **Meta description (155 caracteres):**
   Para la URL del producto en tu tienda propia. Incluye keyword + beneficio + llamada a la acción suave.

**instrucciones de estilo:**
- Usa "tú" o "usted" según el tono de la marca indicado
- Evita superlativos vacíos como "mejor", "increíble", "fantástico" sin respaldo
- Cada afirmación debe estar respaldada por una característica concreta
- Prioriza beneficios emocionales sobre especificaciones técnicas en los primeros párrafos
- Incluye números y datos específicos cuando sea posible (tiempo ahorrado, porcentaje de mejora, años de garantía)

**objetivo de conversión:**
El texto debe mover al visitante por las etapas: Atención → Interés → Deseo → Acción. Identifica en qué etapa podría abandonar el visitante según el producto y refuerza ese punto específicamente.

**Entrega final:**
Presenta cada sección claramente etiquetada y lista para copiar y pegar en la plataforma indicada. Incluye notas de implementación donde sea relevante (por ejemplo, qué parte debe ser imagen y cuál texto).
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 25,
                'use_case'          => 'Redactar fichas de producto que posicionen en buscadores y aumenten la tasa de conversión de la tienda online.',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Motor de recomendaciones de producto para e-commerce con IA',
                'description'       => 'Diseña e implementa la lógica de un sistema de recomendaciones personalizado para tu tienda online, desde el algoritmo hasta la integración con tu stack tecnológico.',
                'prompt_content'    => <<<'EOT'
Eres un ingeniero de software especializado en sistemas de recomendación y machine learning aplicado a e-commerce. Ayudarás a diseñar e implementar un motor de recomendaciones adaptado al tamaño y tecnología de una tienda online.

**Perfil de la tienda:**
- Stack tecnológico: [PHP/Laravel / Node.js / Python / otro]
- Base de datos: [MySQL / PostgreSQL / MongoDB / otro]
- Número aproximado de productos en catálogo: [número]
- Número aproximado de usuarios registrados: [número]
- Volumen de pedidos mensuales: [número]
- ¿Tienes datos históricos de comportamiento? [sí/no, cuántos meses]
- Presupuesto para infraestructura adicional: [ninguno / bajo (<50€/mes) / medio (50-200€/mes) / alto]

**objetivo del sistema:**
Recomendar productos relevantes en: [página de inicio / página de producto / carrito / email post-compra / todas]

**tarea de diseño:**

1. **Análisis de viabilidad:**
   Evalúa qué tipo de recomendación es factible dado el perfil descrito:
   - Filtrado colaborativo (requiere historial de usuarios)
   - Filtrado basado en contenido (funciona con pocas interacciones)
   - Híbrido
   - Reglas de negocio simples (para catálogos pequeños)
   Recomienda el enfoque más adecuado y explica por qué.

2. **Arquitectura de datos:**
   Define el esquema de tablas o colecciones necesario para registrar:
   - Eventos de comportamiento (vistas, clics, añadir al carrito, compras)
   - Vectores de productos si aplica
   - Cache de recomendaciones precalculadas
   Proporciona el DDL o esquema en el formato de base de datos indicado.

3. **Algoritmo central:**
   Escribe el pseudocódigo o código real del algoritmo principal en el lenguaje indicado. Incluye:
   - Función de similitud entre productos
   - Ponderación por recencia de interacciones
   - Mecanismo de fallback para usuarios sin historial (cold start)
   - Filtro para excluir productos ya comprados

4. **API endpoint:**
   Diseña el endpoint REST que el frontend consumirá:
   - URL, método HTTP, parámetros de entrada
   - Estructura del JSON de respuesta
   - Estrategia de caché (TTL recomendado, invalidación)
   - Rate limiting sugerido

5. **Métricas de éxito:**
   Define los KPIs que medirán el rendimiento del sistema:
   - Click-through rate (CTR) de recomendaciones
   - Tasa de conversión influenciada
   - Cobertura del catálogo
   - Diversidad de recomendaciones
   Proporciona las queries SQL para calcular cada métrica.

6. **Plan de implementación por fases:**
   Divide el trabajo en 3 fases con estimación de horas:
   - Fase 1: MVP con reglas simples (semana 1-2)
   - Fase 2: Algoritmo colaborativo básico (semana 3-4)
   - Fase 3: Personalización en tiempo real y A/B testing (mes 2)

**instrucción de código:**
Todo el código debe incluir comentarios explicativos, manejo de errores y ser production-ready. Prioriza la legibilidad sobre la optimización prematura.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Implementar un sistema de recomendaciones de producto que aumente el ticket medio y la tasa de cross-selling en la tienda.',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Brief creativo para fotografía e imágenes de producto con IA',
                'description'       => 'Genera briefs visuales detallados y prompts para herramientas de IA de imagen que produzcan fotografías de producto profesionales sin sesión fotográfica tradicional.',
                'prompt_content'    => <<<'EOT'
Eres un director de arte especializado en fotografía de producto para e-commerce y conoces en profundidad las mejores herramientas de generación de imagen con IA (Midjourney, DALL-E, Stable Diffusion, Firefly). Tu objetivo es crear briefs visuales y prompts precisos que produzcan imágenes de producto de calidad profesional.

**Producto a fotografiar:**
- Tipo de producto: [describe el producto]
- Colores disponibles o variantes: [lista]
- Material o textura principal: [describe]
- Tamaño aproximado: [pequeño / mediano / grande]
- Precio de venta (orientativo): [rango de precio — ayuda a calibrar el nivel de lujo del contexto]
- Plataforma donde se publicará: [Amazon / Instagram / web propia / catálogo impreso]
- Referentes visuales de marcas que admiras: [nombres de marcas o URLs]

**tarea creativa:**

1. **Concepto visual principal:**
   Define en 2-3 frases la narrativa visual del producto: qué historia cuenta, qué emoción evoca, qué momento de uso representa. Este concepto debe guiar todas las decisiones visuales siguientes.

2. **Set de 6 tipos de imagen por producto:**
   Para cada tipo, proporciona el prompt completo listo para usar en Midjourney o DALL-E 3:
   - Imagen hero (fondo blanco puro, iluminación de estudio perfecta)
   - Lifestyle (producto en contexto de uso real, ambiente aspiracional)
   - Detalle / textura (macro que muestre la calidad del material)
   - Comparativa de escala (producto junto a objeto cotidiano para referencia de tamaño)
   - Flat lay (disposición cenital con elementos complementarios)
   - Imagen emocional (persona usando el producto, sin que la cara sea el foco)

3. **Especificaciones técnicas por imagen:**
   Para cada tipo: relación de aspecto óptima, resolución mínima aceptable, formato de archivo recomendado y si necesita fondo eliminable (PNG con transparencia).

4. **Paleta de colores de fondo y props:**
   Sugiere 3 opciones de paleta de ambientación (fondos, superficies, elementos decorativos) que complementen los colores del producto sin competir con él. Incluye los códigos HEX sugeridos.

5. **Checklist de calidad antes de publicar:**
   Lista 10 puntos que revisar en cada imagen generada: sombras realistas, proporciones correctas, ausencia de distorsiones en texto o logotipos, coherencia de iluminación, etc.

6. **Alternativas con fotografía real:**
   Si el presupuesto permite una sesión real, describe el setup de iluminación (número y tipo de luces), el tipo de cámara y objetivo recomendados, y cómo replicar el concepto visual definido.

**instrucción de entrega:**
Cada prompt de IA debe estar listo para copiar y pegar, con todos los parámetros de calidad (--ar, --q, --style para Midjourney; instrucciones de detalle para DALL-E). Incluye también la versión negativa del prompt (elementos a excluir) para Midjourney.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Producir imágenes de producto profesionales para e-commerce usando herramientas de IA, reduciendo costes de sesión fotográfica.',
                'vote_score'        => 45,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Scripts de ventas y seguimiento para tiendas online con IA',
                'description'       => 'Diseña secuencias de mensajes de ventas multicanal (WhatsApp, email, chat) para recuperar carritos abandonados, hacer upselling y reactivar clientes inactivos en tu e-commerce.',
                'prompt_content'    => <<<'EOT'
Eres un experto en ventas digitales y psicología del comportamiento del consumidor online. Crearás secuencias de comunicación persuasiva para los momentos clave del ciclo de vida del cliente en e-commerce, respetando siempre las buenas prácticas anti-spam y la normativa GDPR.

**Perfil de la tienda:**
- Tipo de productos que vende: [describe brevemente]
- Ticket medio de pedido: [importe en euros]
- Plataformas de comunicación disponibles: [email / WhatsApp Business / SMS / chat en vivo / todas]
- Tono de la marca: [formal / cercano / divertido / premium / otro]
- Nombre de la tienda o marca: [nombre]

**objetivo de ventas:**
Aumentar la recuperación de carritos y el valor de vida del cliente mediante comunicaciones oportunas y relevantes.

**secuencias a crear:**

1. **Recuperación de carrito abandonado (3 mensajes):**
   - Mensaje 1 (1 hora después del abandono): recordatorio suave, sin presión
   - Mensaje 2 (24 horas después): añade elemento de urgencia o escasez real
   - Mensaje 3 (72 horas después): oferta de rescate con descuento o beneficio adicional
   Para cada mensaje: asunto/primera línea, cuerpo completo, llamada a la acción, nota de tono.

2. **Upselling post-compra (2 mensajes):**
   - Mensaje 1 (inmediatamente tras la compra): confirmación de pedido + recomendación complementaria natural
   - Mensaje 2 (7 días después de la entrega): solicitud de reseña + oferta de producto de nivel superior
   Incluye variables de personalización con el nombre del producto comprado.

3. **Reactivación de clientes inactivos (+90 días sin compra) (2 mensajes):**
   - Mensaje 1: "te echamos de menos" + novedad del catálogo relevante para su historial
   - Mensaje 2 (7 días después si no reacciona): incentivo de regreso (descuento, regalo, envío gratis)

4. **Respuestas a objeciones frecuentes:**
   Escribe respuestas cortas y eficaces para las 5 objeciones más comunes en e-commerce:
   - "Es demasiado caro"
   - "No sé si me quedará / servirá"
   - "Quiero pensármelo"
   - "¿Cómo sé que es de calidad?"
   - "¿Y si tengo que devolverlo?"

5. **Scripts de chat en vivo para cierre:**
   3 guiones cortos para operadores de chat cuando el cliente está en la página de producto o en el carrito y necesita ese último empujón para comprar. Máximo 4 intercambios por guión.

**instrucción de tono:**
Todos los mensajes deben sonar humanos y genuinos, nunca como spam automatizado. Usa el nombre del cliente cuando sea posible. Incluye siempre una opción de baja fácil en los emails. Evita la urgencia falsa (no pongas "¡Solo quedan 2 unidades!" si no es real).
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Crear secuencias de comunicación que recuperen carritos abandonados, aumenten el ticket medio y reactiven clientes dormidos.',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Roadmap de funcionalidades e-commerce priorizado con IA',
                'description'       => 'Construye un roadmap trimestral de mejoras para tu tienda online usando IA para priorizar funcionalidades según impacto en conversión, esfuerzo técnico y datos de comportamiento de usuarios.',
                'prompt_content'    => <<<'EOT'
Eres un Product Manager especializado en e-commerce con experiencia en frameworks de priorización como RICE, ICE y Jobs-to-be-Done. Ayudarás a construir un roadmap trimestral fundamentado en datos y alineado con los objetivos de negocio de la tienda.

**Estado actual de la tienda:**
- Plataforma: [Shopify / WooCommerce / Prestashop / desarrollo propio / otra]
- Métricas actuales: tasa de conversión [X%], ticket medio [X€], tasa de abandono de carrito [X%]
- Número de pedidos mensuales: [número]
- Equipo técnico disponible: [solo yo / 1 desarrollador / equipo de 3-5 / agencia externa]
- Objetivo de negocio para los próximos 6 meses: [describe el objetivo principal]
- Presupuesto estimado para desarrollo: [€/mes aproximado]

**backlog inicial de ideas (lista todo lo que tienes en mente o lo que tus clientes han pedido):**
[pega aquí tu lista de ideas, problemas reportados, funcionalidades de competidores que quieres implementar, etc.]

**tarea de product management:**

1. **Auditoría del backlog:**
   Clasifica cada idea del backlog en una de estas categorías:
   - Mejora de conversión (impacto directo en tasa de compra)
   - Mejora de retención (impacto en repetición de compra)
   - Mejora operacional (eficiencia interna)
   - Funcionalidad diferenciadora (ventaja competitiva)
   - Deuda técnica o UX debt

2. **Puntuación RICE para cada ítem:**
   Calcula la puntuación RICE (Reach × Impact × Confidence / Effort) para los 10 ítems más relevantes:
   - Reach: cuántos usuarios afecta por trimestre
   - Impact: escala 0.25 / 0.5 / 1 / 2 / 3
   - Confidence: porcentaje de certeza en las estimaciones
   - Effort: personas-mes de trabajo
   Muestra la tabla ordenada de mayor a menor puntuación.

3. **Roadmap trimestral (Q1, Q2, Q3):**
   Distribuye los ítems de mayor puntuación en tres trimestres, respetando la capacidad del equipo indicada. Para cada ítem del roadmap incluye:
   - Descripción de la funcionalidad (1-2 frases)
   - Criterios de éxito medibles (qué métrica mejorará y en cuánto)
   - Dependencias técnicas
   - Estimación de tiempo de desarrollo

4. **Quick wins (primeras 2 semanas):**
   Identifica 3-5 mejoras que puedas implementar en menos de 4 horas de trabajo y que tengan impacto inmediato en conversión (optimizaciones de página de pago, mejoras de velocidad, textos de CTA, etc.).

5. **Decisiones de "no hacer ahora":**
   Lista las ideas que quedan fuera del roadmap con una explicación breve de por qué (baja prioridad, dependencia de crecimiento previo, fuera del foco actual). Esta claridad evita que el equipo pierda tiempo debatiendo.

6. **Plantilla de user story para el desarrollador:**
   Crea una plantilla de user story en el formato "Como [rol], quiero [acción], para [beneficio]" con criterios de aceptación en formato Gherkin (Given/When/Then) lista para usar con el primer ítem del roadmap.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 40,
                'use_case'          => 'Priorizar el desarrollo de funcionalidades en la tienda online con criterios objetivos y construir un roadmap trimestral accionable.',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Onboarding y formación del equipo de e-commerce con IA',
                'description'       => 'Diseña un plan de onboarding estructurado y materiales de formación para nuevos miembros de un equipo de e-commerce, desde operaciones hasta atención al cliente.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en desarrollo organizacional y formación de equipos digitales. Crearás un programa de onboarding completo para que los nuevos miembros de un equipo de e-commerce sean productivos y autónomos lo antes posible.

**Contexto del equipo:**
- Tamaño actual del equipo: [número de personas]
- Puesto del nuevo miembro: [operaciones / atención al cliente / marketing / logística / gestión de catálogo / otro]
- Plataforma de e-commerce en uso: [Shopify / WooCommerce / otra]
- Herramientas principales del equipo: [lista: ERP, CRM, herramientas de email, etc.]
- Formato de trabajo: [presencial / remoto / híbrido]
- Tiempo disponible para onboarding antes de trabajar de forma independiente: [1 semana / 2 semanas / 1 mes]

**objetivo del onboarding:**
Que el nuevo miembro comprenda el negocio, domine las herramientas esenciales y sepa cómo tomar decisiones autónomas en su área en el menor tiempo posible.

**plan de formación a crear:**

1. **Semana 1 — Comprensión del negocio:**
   Día a día detallado con actividades de máximo 2 horas cada una:
   - Visión general del negocio (qué vendemos, a quién, por qué)
   - Recorrido por el proceso completo de un pedido (de la compra a la entrega)
   - Presentación de herramientas con credenciales de práctica
   - Reuniones de presentación con cada área del equipo (agenda sugerida)

2. **Semana 2 — Dominio operacional:**
   Checklist de tareas prácticas supervisadas que el nuevo miembro debe completar:
   - Lista de tareas con descripción, recurso de apoyo y criterio de validación
   - Al menos 10 tareas específicas para el puesto indicado

3. **Guía de preguntas frecuentes del puesto:**
   Las 15 dudas más comunes que tiene alguien nuevo en ese rol, con respuestas claras y referencias a dónde encontrar más información.

4. **Mapa de decisiones autónomas:**
   Define qué decisiones puede tomar el nuevo miembro solo desde el primer día, cuáles requieren consultar a alguien y cuáles requieren aprobación formal. Preséntalo en formato de tabla de tres columnas.

5. **KPIs de onboarding:**
   Define 5 indicadores para medir si el onboarding está siendo efectivo a los 30, 60 y 90 días. Incluye el método de medición para cada uno.

6. **Plantilla de reunión de seguimiento semanal:**
   Una agenda de 30 minutos para la reunión de seguimiento entre el nuevo miembro y su responsable durante el primer mes. Con preguntas específicas para detectar bloqueos y acelerar la integración.

**instrucción de tono:**
Los materiales deben ser amigables y motivadores. El nuevo miembro debe sentir que tiene todo lo necesario para tener éxito, no abrumarse con información excesiva el primer día.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Incorporar nuevos miembros al equipo de e-commerce de forma eficiente, reduciendo el tiempo hasta la productividad plena.',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis de rentabilidad y métricas financieras para e-commerce con IA',
                'description'       => 'Construye un dashboard financiero y modelo de rentabilidad por producto, canal y temporada para tomar decisiones de negocio fundamentadas en tu tienda online.',
                'prompt_content'    => <<<'EOT'
Eres un analista financiero especializado en e-commerce con dominio de unit economics, métricas de rentabilidad por canal y gestión de flujo de caja para tiendas online. Ayudarás a construir un modelo financiero sólido y accionable.

**Datos de partida de la tienda:**
- Facturación mensual actual: [importe en €]
- Número de pedidos mensuales: [número]
- Ticket medio: [importe en €]
- Coste de mercancía vendida (COGS) promedio: [% sobre precio de venta]
- Coste de logística por pedido (fulfillment + envío): [importe en €]
- Presupuesto de publicidad mensual (Google Ads, Meta, etc.): [importe en €]
- Coste fijo mensual de la plataforma y herramientas: [importe en €]
- Canales de venta: [tienda propia / Amazon / marketplaces / todos]
- ¿Tienes datos exportados de los últimos 12 meses? [sí/no]

**análisis financiero a realizar:**

1. **Unit economics por pedido:**
   Calcula para un pedido promedio:
   - Margen bruto (precio de venta - COGS)
   - Contribución neta (margen bruto - costes variables de logística y payment gateway)
   - Coste de adquisición del cliente (CAC) por canal
   - Beneficio real por pedido nuevo vs. pedido recurrente
   Muestra el resultado en una tabla con columnas para cada canal de venta.

2. **Análisis ABC de productos:**
   Explica cómo realizar un análisis ABC del catálogo:
   - Categoría A: 20% de productos que generan el 80% del margen
   - Categoría B: productos de margen medio con potencial
   - Categoría C: productos que consumen recursos sin rentabilidad suficiente
   Incluye la fórmula de margen de contribución por SKU y la query SQL si la base de datos lo permite.

3. **Métricas de rentabilidad clave (KPIs financieros):**
   Define y explica cómo calcular:
   - ROAS (Return on Ad Spend) por canal
   - LTV (Lifetime Value) del cliente
   - Ratio LTV/CAC (benchmark: debe ser >3)
   - Tasa de recompra
   - Margen EBITDA de la tienda
   Proporciona las fórmulas exactas y los valores de referencia para cada métrica según el tipo de negocio.

4. **Proyección de flujo de caja a 6 meses:**
   Crea una plantilla de proyección mensual que incluya:
   - Ingresos esperados por canal
   - Costes variables (COGS + logística + publicidad)
   - Costes fijos (plataforma + herramientas + personal)
   - Necesidades de inversión en stock
   - Saldo de caja proyectado
   Indica qué variables son las más sensibles (análisis de sensibilidad básico).

5. **Alertas financieras tempranas:**
   Define 5 ratios o métricas que, si se desvían más de un X% de la media, deben activar una revisión inmediata del negocio. Incluye los umbrales de alerta recomendados.

6. **Decisiones financieras frecuentes y cómo tomarlas:**
   Para cada decisión, proporciona el criterio financiero de aprobación:
   - ¿Cuándo escalar el presupuesto de publicidad?
   - ¿Cuándo hacer descuentos y con qué margen mínimo?
   - ¿Cuándo es rentable activar un nuevo marketplace?
   - ¿Cuándo contratar a la primera persona del equipo?
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Construir un modelo financiero completo para la tienda online y tomar decisiones de inversión y pricing basadas en datos reales de rentabilidad.',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Textos legales y políticas de tienda online conformes a normativa con IA',
                'description'       => 'Genera términos y condiciones, política de privacidad, política de cookies y política de devoluciones adaptados a tu e-commerce y conformes al RGPD y la normativa española.',
                'prompt_content'    => <<<'EOT'
Eres un abogado especializado en derecho digital, comercio electrónico y protección de datos con conocimiento profundo del RGPD (Reglamento General de Protección de Datos), la LSSI (Ley de Servicios de la Sociedad de la Información) y la Directiva Europea de Derechos de los Consumidores. Redactarás los textos legales necesarios para una tienda online que opera en España o con clientes en la Unión Europea.

**Nota importante:** Los textos generados son un punto de partida y deben ser revisados por un abogado colegiado antes de publicarse. Este proceso reduce significativamente el coste y el tiempo de ese proceso.

**Datos de la tienda:**
- Nombre comercial y razón social: [nombre]
- CIF/NIF: [número]
- Dirección fiscal: [dirección]
- Email de contacto y DPO (si existe): [email]
- Tipo de productos: [físicos / digitales / ambos]
- ¿Vendes a consumidores finales (B2C), empresas (B2B) o ambos?: [respuesta]
- Plataforma de pago: [Stripe / PayPal / Redsys / otra]
- Proveedores externos con acceso a datos de usuarios: [lista: Google Analytics, Meta Pixel, newsletter tool, etc.]
- País donde está alojado el servidor: [país]
- ¿Gestionas datos de menores de 14 años?: [sí/no]

**documentos legales a redactar:**

1. **Aviso Legal (art. 10 LSSI):**
   Identificación del titular, objeto de la web, condiciones de uso, propiedad intelectual, limitación de responsabilidad, legislación aplicable y jurisdicción. Tono formal pero legible.

2. **Términos y Condiciones de Compra:**
   - Proceso de compra y formación del contrato
   - Precios, impuestos e IVA
   - Formas de pago
   - Plazos y condiciones de entrega
   - Derecho de desistimiento (14 días naturales para B2C)
   - Política de garantías (2 años para productos físicos)
   - Exclusiones y limitaciones de responsabilidad
   - Resolución de conflictos (ODR europeo para B2C)

3. **Política de Privacidad (RGPD):**
   - Responsable del tratamiento e identidad completa
   - Finalidades del tratamiento con base legal para cada una
   - Datos recogidos y plazo de conservación
   - Derechos del interesado (ARCO+) y cómo ejercerlos
   - Transferencias internacionales si existen
   - Cada proveedor externo que trata datos como encargado del tratamiento

4. **Política de Cookies:**
   - Tabla de cookies con: nombre, finalidad, proveedor, duración, tipo (técnica / analítica / marketing)
   - Instrucciones de configuración o rechazo por navegador
   - Cómo revocar el consentimiento

5. **Política de Devoluciones y Cambios:**
   - Plazos para devolución (mínimo legal + política propia si es más favorable)
   - Condiciones del producto para devolución
   - Proceso paso a paso para solicitar devolución
   - Quién asume los gastos de devolución
   - Plazos de reembolso
   - Excepciones (productos personalizados, digitales descargados, etc.)

**instrucción de formato:**
Cada documento debe estar estructurado con numeración clara de artículos o secciones, en español formal, con fecha de última actualización en el encabezado y una nota de revisión recomendada.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Redactar los textos legales completos de una tienda online cumpliendo con el RGPD y la normativa española de comercio electrónico.',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Sistema de atención al cliente omnicanal para e-commerce con IA',
                'description'       => 'Diseña un sistema de soporte al cliente eficiente para tu tienda online con respuestas automáticas, escalado inteligente y métricas de satisfacción, usando IA para gestionar el volumen.',
                'prompt_content'    => <<<'EOT'
Eres un experto en Customer Experience (CX) y diseño de sistemas de soporte para e-commerce. Crearás un sistema de atención al cliente que combine automatización con intervención humana de forma fluida, mejorando la satisfacción del cliente y reduciendo el tiempo de resolución.

**Perfil de la operación:**
- Volumen actual de tickets/consultas mensuales: [número]
- Canales donde recibes consultas actualmente: [email / WhatsApp / chat web / redes sociales / teléfono]
- Tiempo de respuesta actual: [horas o días]
- Equipo de CS disponible: [solo yo / 1 agente / 2-5 agentes]
- Herramienta de soporte en uso: [Zendesk / Freshdesk / Gorgias / email manual / ninguna]
- Los 5 motivos de contacto más frecuentes: [lista]
- Horario de atención humana: [horario actual]

**sistema de CS a diseñar:**

1. **Árbol de decisión para clasificación de tickets:**
   Crea un diagrama de flujo textual que clasifique cada consulta entrante en:
   - Resolución automática inmediata (bot o respuesta canned)
   - Resolución humana en <2 horas (urgente)
   - Resolución humana en <24 horas (normal)
   - Escalado a dirección (reclamaciones, devoluciones costosas, prensa)
   Incluye los criterios de clasificación para cada ruta.

2. **Biblioteca de respuestas (50 templates):**
   Organizada por categoría. Para cada template:
   - Nombre interno del template
   - Situación en que se usa
   - Texto completo de la respuesta (personalizable con variables)
   Cubre las categorías: estado del pedido, retrasos de envío, devoluciones y cambios, problemas con el producto, facturación, preguntas pre-venta, reclamaciones y disculpas.

3. **Protocolo de gestión de reseñas negativas:**
   Respuestas modelo para reseñas negativas en Google, Trustpilot y redes sociales:
   - Reseña de 1 estrella con queja real (respuesta pública)
   - Reseña de 1 estrella injusta o falsa (respuesta pública + proceso de reclamación)
   - Comentario negativo en Instagram o Facebook (respuesta pública + gestión privada)
   En cada caso: respuesta pública de máximo 3 frases + protocolo de seguimiento privado.

4. **Métricas de satisfacción (CSAT, NPS, FRT):**
   Define el sistema de medición de satisfacción:
   - Encuesta CSAT: cuándo enviarla, qué preguntas hacer, cómo analizar resultados
   - NPS trimestral: segmentación de promotores, pasivos y detractores
   - FRT (First Response Time) y MTTR (Mean Time to Resolution): objetivos y alertas
   - Dashboard de métricas: qué visualizar, con qué frecuencia revisar

5. **Plan de mejora continua:**
   Define el proceso mensual para mejorar el sistema:
   - Revisión de tickets resueltos para identificar patrones
   - Actualización de templates según nuevas consultas
   - Formación del equipo basada en errores detectados
   - Reunión mensual de voz del cliente: cómo estructurarla

6. **Checklist de implementación por semanas:**
   Plan de 4 semanas para implantar el sistema desde cero, con tareas diarias específicas y herramientas necesarias.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Crear un sistema de atención al cliente eficiente para e-commerce que reduzca el tiempo de respuesta y aumente la satisfacción del comprador.',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Auditoría express de tienda online para freelancers con IA',
                'description'       => 'Realiza una auditoría completa de un e-commerce cliente en 2 horas: UX, SEO, velocidad, conversión y estrategia, con un informe profesional listo para entregar.',
                'prompt_content'    => <<<'EOT'
Eres un consultor especializado en optimización de e-commerce con capacidad para evaluar rápidamente una tienda online desde múltiples perspectivas: técnica, de negocio, de usuario y de marketing. Crearás una metodología de auditoría express y el informe resultante para entregar a un cliente.

**Datos de la tienda a auditar:**
- URL de la tienda: [URL]
- Plataforma: [Shopify / WooCommerce / Prestashop / otra]
- Tiempo en el mercado: [meses o años]
- Número de SKUs en catálogo: [número]
- Tráfico mensual aproximado: [visitas]
- Tasa de conversión actual (si la conoce el cliente): [porcentaje o "desconocida"]
- Principales canales de adquisición de tráfico: [orgánico / paid / redes sociales / email / todos]
- El mayor problema percibido por el cliente: [describe lo que te ha dicho]

**metodología de auditoría (2 horas):**

**Bloque 1 — Análisis técnico (30 min):**
Checklist de 20 puntos técnicos a revisar con herramientas gratuitas:
- Velocidad de carga (PageSpeed Insights): puntuación mínima aceptable y factores críticos
- Mobile-first: navegación, botones, formularios en móvil
- SSL, errores 404, redireccionamientos innecesarios
- Estructura de URLs y breadcrumbs
- Sitemap XML y robots.txt
Para cada punto: cómo verificarlo (herramienta + URL), qué significa el resultado y severidad del problema (crítico / importante / mejora).

**Bloque 2 — Auditoría SEO (30 min):**
Checklist de 15 puntos de SEO on-page:
- Title tags y meta descriptions (duplicados, longitud, keywords)
- Heading structure (H1 único, jerarquía H2-H3)
- Imágenes: alt text, tamaño, formato
- Schema markup para productos (rich snippets)
- Contenido duplicado entre fichas de producto
- Canonical tags
Herramientas recomendadas para cada punto (Screaming Frog free, Google Search Console, Ahrefs free).

**Bloque 3 — Experiencia de usuario y conversión (30 min):**
Evaluación heurística de 20 puntos:
- Claridad de la propuesta de valor en home (primeros 5 segundos)
- Navegación y arquitectura de categorías
- Buscador interno: ¿existe y funciona bien?
- Página de producto: trust signals, imágenes, descripción, CTA
- Proceso de checkout: número de pasos, campos requeridos, opciones de pago
- Gestión de errores y validación de formularios
- Mensajes de confirmación y emails transaccionales
Cada punto con: descripción del problema si existe, impacto estimado en conversión y solución recomendada.

**Bloque 4 — Análisis de marketing y negocio (30 min):**
Evaluación de la estrategia de adquisición y retención:
- ¿Existe una estrategia clara de captación de emails?
- ¿Hay social proof (reseñas, testimonios, número de ventas)?
- ¿Están activos los canales de publicidad correctos para este negocio?
- ¿Hay estrategia de contenidos o blog?
- ¿Existe programa de fidelización o repetición de compra?

**Informe ejecutivo para el cliente:**
Plantilla de informe de 2-3 páginas con:
- Resumen ejecutivo (3-4 frases sobre el estado general)
- Tabla de hallazgos: problema / impacto / prioridad / solución / esfuerzo estimado
- Top 5 acciones inmediatas (quick wins de alto impacto)
- Roadmap de mejoras a 90 días
- Metodología utilizada (para dar credibilidad al informe)

**Pricing sugerido para este servicio:**
Recomendaciones sobre cómo fijar precio, presentar y vender este servicio de auditoría como producto independiente o como entrada a un proyecto mayor.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 30,
                'use_case'          => 'Realizar auditorías completas de e-commerce para clientes en 2 horas y entregar informes profesionales que generen propuestas de consultoría.',
                'vote_score'        => 44,
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
