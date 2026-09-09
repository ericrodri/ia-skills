<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills119Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing omnicanal integrado',
                'description'      => 'Coordina la experiencia de marca en todos los touchpoints — digital, físico, email, paid y orgánico — de forma que el cliente reciba un mensaje coherente independientemente del canal.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de marketing omnicanal con experiencia en retail, ecommerce y marcas de consumo que han integrado con éxito los canales digitales y físicos. Necesito tu ayuda para diseñar una estrategia omnicanal real, no solo en el papel.

**Contexto de mi empresa:**
- Sector y producto: [describe qué vendes y a quién]
- Canales online actuales: [web, app, email, redes sociales, paid media, marketplaces]
- Canales offline si los hay: [tiendas propias, distribución, eventos, pop-ups]
- Herramientas tecnológicas: [CRM, ecommerce platform, herramienta de email, CDP si la hay]
- Principal problema de experiencia del cliente hoy: [mensajes contradictorios, datos fragmentados, experiencia inconsistente, etc.]

**Bloque 1 – Diagnóstico omnicanal:**
Antes de diseñar nada, ayúdame a entender dónde estoy:
1. Cómo mapear el customer journey actual incluyendo todos los touchpoints (template de mapa de viaje del cliente)
2. Dónde hay fricción: los puntos de contacto donde la experiencia se rompe o contradice otro canal
3. Qué datos de cliente tengo en cada canal y cómo están o no conectados
4. Qué métricas usar para medir la fragmentación actual (customer confusion score, attribution gaps, etc.)

**Bloque 2 – Estrategia de contenidos omnicanal:**
El mensaje debe ser coherente, no idéntico:
1. Cómo crear un framework de mensajes que se adapte a cada canal manteniendo la misma narrativa de marca
2. Cuándo el mismo contenido debe aparecer en todos los canales vs. cuándo debe ser exclusivo de un canal
3. Cómo gestionar las promociones para que no haya contradicciones de precio o disponibilidad entre canales
4. Cómo coordinar el calendario de contenidos entre equipos que gestionan distintos canales

**Bloque 3 – Tecnología y datos:**
La omnicanalidad real requiere datos conectados:
1. Qué es un CDP y cuándo tiene sentido invertir en uno vs. arreglárselas con integraciones más simples
2. Cómo unificar los perfiles de cliente de distintos canales con los datos que ya tienes
3. Cómo usar los datos de comportamiento online para mejorar la experiencia offline y viceversa
4. Atribución en omnicanal: modelos de atribución que funcionan cuando el cliente pasa por varios canales antes de comprar

**Bloque 4 – Coordinación de equipo y procesos:**
La omnicanalidad falla más por silos de equipo que por tecnología:
1. Cómo estructurar el equipo para que nadie "posea" un canal en exclusiva
2. Qué reuniones y procesos de coordinación necesitas entre los equipos de cada canal
3. Cómo gestionar los conflictos entre canales cuando los objetivos son distintos (ej: ecommerce vs. retail físico)
4. Indicadores de éxito del programa omnicanal que todos los equipos compartan

**Entregable:**
Genera un plan de implementación omnicanal en 90 días con fases, acciones prioritarias, herramientas recomendadas y los 5 KPIs que debo reportar a dirección para demostrar el progreso.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar e implementar una estrategia de marketing omnicanal que unifique la experiencia del cliente en todos los puntos de contacto',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Integración omnicanal de sistemas',
                'description'      => 'Diseña la arquitectura de APIs, event buses y sincronización en tiempo real que conecta inventario, pedidos y datos de cliente entre canales online y offline.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de software especializado en sistemas de comercio omnicanal. Necesito diseñar la arquitectura técnica que sincroniza en tiempo real los sistemas de una empresa que vende tanto en canales online como offline, garantizando consistencia de datos sin importar el canal.

**Contexto técnico:**
- Canales a integrar: [ecommerce web, app móvil, TPV en tienda física, marketplaces como Amazon/El Corte Inglés, etc.]
- Estado actual: [sistemas separados / integraciones punto a punto / caos con datos duplicados]
- Stack tecnológico: [backend language, bases de datos, infraestructura cloud]
- Volumen aproximado: [pedidos/día, SKUs en catálogo, tiendas físicas si las hay]
- Principal problema técnico hoy: [stock desincronizado, pedidos duplicados, datos de cliente fragmentados]

**Parte 1 – Arquitectura de referencia para omnicanal:**
Explícame los patrones arquitectónicos más usados:
1. Event-driven architecture con un event bus central: cómo funciona, ventajas y cuándo es la solución correcta
2. API Gateway centralizada: cómo un gateway puede orquestar la comunicación entre sistemas de canal
3. CQRS y Event Sourcing aplicados a pedidos y stock: cuándo justifica la complejidad
4. Patrón Saga para transacciones distribuidas entre canales (reserva de stock + creación de pedido + pago)
5. Cuándo usar sincronización en tiempo real vs. near-real-time vs. batch según el dominio (stock vs. pedidos vs. datos de cliente)

**Parte 2 – Gestión de inventario omnicanal:**
El stock es el dominio más crítico:
1. Modelo de datos para un inventario omnicanal: cómo representar el stock disponible por canal, por almacén y por tienda
2. Overselling prevention: cómo evitar vender lo que no hay sin bloquear ventas legítimas
3. Estrategias de buffer de stock por canal: cuándo reservar stock exclusivo para el canal online vs. compartirlo
4. Ship from store: cómo la tienda física se convierte en punto de expedición del ecommerce
5. Click & collect: el flujo técnico completo desde la reserva online hasta la recogida en tienda

**Parte 3 – Gestión de pedidos (OMS):**
El Order Management System como cerebro del omnicanal:
1. Qué funcionalidades debe tener un OMS omnicanal: routing de pedidos, gestión de devoluciones cross-canal, split shipments
2. Build vs. buy: cuándo construir tu propio OMS y cuándo usar una solución como Fluent Commerce, Ordoro o Manhattan
3. Flujo de estados del pedido en omnicanal: cómo los estados se comunican a todos los canales en tiempo real
4. Gestión de devoluciones: devolver online en tienda y viceversa — el flujo técnico y de datos completo

**Parte 4 – Unificación del perfil de cliente:**
Customer Data Platform o CDP propio:
1. Cómo identificar al mismo cliente en diferentes canales (email, cookie, cuenta, tarjeta de fidelización, número de teléfono)
2. Modelo de datos para el perfil unificado de cliente: qué entidades, qué eventos capturar
3. Identity resolution: algoritmos y enfoques para fusionar perfiles duplicados
4. Privacy by design en el contexto omnicanal: RGPD, consentimiento por canal, retención de datos

**Entregable:**
Genera un diagrama de arquitectura en texto estructurado (pseudocódigo de componentes y sus conexiones) para el sistema omnicanal, con las tecnologías recomendadas para cada capa y las decisiones de diseño clave justificadas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar la arquitectura técnica de integración omnicanal para sincronizar stock, pedidos y datos de cliente en tiempo real',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencia en tienda física',
                'description'      => 'Diseña espacios de retail que guían al cliente, comunican la marca y maximizan la conversión usando principios de retail experience design.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un retail experience designer con experiencia en proyectos de tienda física para marcas de moda, electrónica, alimentación y lifestyle. Necesito tu ayuda para diseñar o rediseñar un espacio de tienda que mejore la experiencia del cliente y el rendimiento comercial.

**Contexto del proyecto:**
- Tipo de tienda: [flagship / tienda de barrio / pop-up / corner en gran almacén / outlet]
- Producto o categoría: [qué se vende]
- Superficie aproximada: [metros cuadrados]
- Perfil del cliente: [quién viene, qué busca, cuánto tiempo pasa en tienda]
- Objetivo principal del rediseño: [aumentar ticket medio / mejorar tiempo en tienda / reducir fricción en el proceso de compra / comunicar mejor la marca]
- Presupuesto de reforma: [alto / medio / bajo — o importe aproximado]

**Parte 1 – Principios de retail experience design:**
Explícame los principios que deben guiar el diseño de la tienda:
1. Decompression zone: por qué los primeros metros de la tienda no deben tener producto y qué poner ahí
2. Flujo y circuito de cliente: cómo diseñar el recorrido natural para maximizar exposición al producto
3. La regla del lado derecho: por qué la mayoría de los clientes giran a la derecha al entrar y cómo aprovecharlo
4. Zonas calientes y frías: cómo identificarlas y cómo activar las zonas muertas
5. Categorías de producto: cómo organizar el surtido espacialmente para facilitar la compra por necesidad

**Parte 2 – Diseño sensorial:**
La experiencia en tienda es multisensorial:
1. Iluminación: diferencias entre iluminación de ambiente, de acento y de producto; temperatura de color recomendada por categoría
2. Música y sonido: cómo el tempo afecta al tiempo en tienda y al ticket; cómo mantener coherencia con la identidad de marca
3. Olfato: cuándo y cómo usar aromas de marca (scent marketing) sin resultar intrusivo
4. Temperatura y confort: impacto en el tiempo de permanencia
5. Cómo hacer que estos elementos sean coherentes con la experiencia digital de la marca

**Parte 3 – Puntos de fricción habituales:**
Los problemas más comunes que reducen la conversión y cómo resolverlos:
1. Probadores: diseño que reduce la fricción de la prueba y aumenta la conversión
2. Colas en caja: cómo el diseño del área de caja reduce la percepción de espera
3. Señalética: cómo el sistema de señalética guía sin necesitar a un empleado
4. Zona de espera cuando el cliente viene acompañado: cómo retener al acompañante

**Parte 4 – Integración digital-físico:**
La tienda como touchpoint omnicanal:
1. Cómo integrar pantallas digitales en el espacio sin que parezcan añadidos
2. QR codes en tienda: cuándo funcionan y cuándo frustran al cliente
3. Self-checkout y quioscos: cuándo tienen sentido y cuándo dañan la experiencia
4. Cómo la tienda puede capturar datos del cliente físico para alimentar el CRM (sin ser invasivo)

**Entregable:**
Genera un brief de experiencia de tienda de una página con los principios de diseño, las prioridades de reforma y los KPIs que usaremos para medir el éxito del nuevo diseño (tiempo en tienda, tasa de conversión, ticket medio, NPS en tienda).
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar la experiencia de tienda física para mejorar la conversión y la percepción de marca',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta en retail y punto de venta',
                'description'      => 'Domina las técnicas de merchandising, formación del equipo de tienda y gestión de la experiencia de compra para maximizar las ventas en el canal físico.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director comercial de retail con experiencia en la gestión de equipos de tienda y la optimización del punto de venta para marcas de gran consumo y moda. Necesito mejorar el rendimiento de ventas en el canal físico.

**Mi situación:**
- Tipo de negocio: [tienda propia / franquicia / presencia en grandes almacenes / canal horeca]
- Producto: [qué vendes, precio medio, margen aproximado]
- Número de tiendas o puntos de venta: [cantidad]
- Equipo de tienda: [número de personas, perfil, rotación habitual]
- Principal problema de ventas hoy: [bajo ticket medio / baja conversión de visitantes / ventas cruzadas insuficientes / equipo poco motivado]

**Parte 1 – Merchandising que vende:**
El visual es la primera herramienta de venta:
1. Los principios del planograma: cómo colocar el producto para que se venda solo
2. Colocación a altura de ojos vs. altura de manos vs. altura de suelo: qué poner en cada nivel
3. Cross-merchandising: cómo colocar productos complementarios juntos para aumentar el ticket medio
4. Gestión del lineal: cómo decidir el facing de cada producto según su rotación y margen
5. Puntos calientes del punto de venta: cajas, cabeceras de góndola, zonas de entrada — cómo aprovecharlos

**Parte 2 – Formación del equipo de tienda:**
El equipo es la mayor palanca de ventas:
1. Las técnicas de venta consultiva adaptadas al retail: escucha activa, identificación de necesidades, presentación de soluciones
2. Cómo entrenar el upselling y el cross-selling sin que el cliente se sienta presionado
3. Manejo de objeciones en retail: las 5 más frecuentes y cómo responderlas
4. Programa de formación continua: cómo mantener al equipo actualizado en producto y técnicas sin formaciones eternas
5. Motivación e incentivos: qué sistemas de comisiones e incentivos funcionan realmente en retail

**Parte 3 – Gestión de la experiencia de compra:**
De la entrada a la salida:
1. El saludo de entrada: cómo el primer contacto define la venta (y cómo no asustar al cliente con agresividad)
2. Lectura del cliente: cómo saber si el cliente quiere ayuda o quiere navegar solo
3. El momento de la decisión: cómo acompañar al cliente sin presionar en el momento de elegir
4. El cierre en retail: técnicas de cierre naturales que no dan miedo
5. La despedida: cómo transformar el último momento en fidelización

**Parte 4 – KPIs del punto de venta:**
Qué medir para mejorar:
1. Las métricas esenciales: conversión de visitantes, ticket medio, unidades por transacción, margen por metro cuadrado
2. Cómo medir el tráfico en tienda sin inversión en sensores caros
3. Mystery shopping: cómo diseñar un programa de cliente misterioso que dé información útil
4. Cómo usar los datos de TPV para tomar decisiones de merchandising y stock

**Entregable:**
Genera un manual de ventas de tienda de dos páginas que pueda dar al nuevo empleado el primer día y que cubra el proceso de venta de principio a fin con las técnicas clave de tu sector.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Optimizar el rendimiento de ventas en tienda física mediante merchandising, formación del equipo y mejora de la experiencia de compra',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de producto para retail y commerce',
                'description'      => 'Gestiona el producto digital de una plataforma de comercio: catálogo, inventario, precios y las funcionalidades que impactan directamente en la conversión y el ticket medio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Product Manager de ecommerce o retail tech con experiencia en plataformas de comercio que han crecido de 1M€ a 50M€+ en GMV. Necesito diseñar la hoja de ruta del producto para maximizar conversión, ticket medio y retención de compradores.

**Contexto:**
- Plataforma: [ecommerce propio / marketplace / SaaS de commerce / app de retail]
- GMV o revenue actuales: [rango aproximado]
- Número de SKUs activos: [cantidad]
- Perfil de comprador: [frecuencia de compra, ticket medio, canales preferidos]
- Principal problema de producto hoy: [baja conversión / abandono de carrito / experiencia de búsqueda deficiente / app con peor rendimiento que web]

**Parte 1 – Fundamentos del producto de commerce:**
Los problemas del producto de comercio más comunes y sus soluciones:
1. Catálogo y PDP (Product Detail Page): qué elementos de la ficha de producto tienen más impacto en la conversión y cómo priorizarlos
2. Búsqueda y discovery: cómo la calidad del motor de búsqueda impacta en la conversión; cuándo construir vs. comprar (Algolia, Elasticsearch, Solr)
3. Filtros y navegación por facetas: cómo diseñarlos para que el cliente encuentre antes, no para que el sistema los sirva cómodamente
4. Carrito y checkout: los puntos de abandono más frecuentes y cómo reducirlos
5. Gestión de precios y promociones: arquitectura de precios que permita flexibilidad sin crear inconsistencias

**Parte 2 – Funcionalidades de alto impacto en conversión:**
Qué construir primero para mover la aguja:
1. Recomendaciones de producto: algoritmos de "también te puede gustar" y "comprados juntos" — cuándo construir y cuándo comprar
2. Reviews y contenido generado por usuarios: impacto en conversión, cómo gestionarlos y moderar
3. Wishlist y listas: funcionalidades de retención que traen al cliente de vuelta
4. Stock y urgencia: cómo mostrar disponibilidad de forma honesta sin caer en dark patterns
5. Guest checkout vs. registro: el eterno debate — datos reales de conversión y cuándo forzar el registro

**Parte 3 – App móvil vs. web:**
El dilema del canal en retail digital:
1. Cuándo tiene sentido invertir en app nativa vs. optimizar la web responsiva
2. Las funcionalidades que la app puede ofrecer que la web no puede (notificaciones push, scanner de producto, AR)
3. Cómo medir la calidad de la experiencia móvil más allá del tiempo de carga (Core Web Vitals en commerce)
4. App clips / instant apps: cuándo tienen sentido en retail

**Parte 4 – Datos y experimentación:**
El product manager de commerce vive de los datos:
1. Cómo montar un programa de A/B testing para commerce sin matar la experiencia de los usuarios de control
2. Las métricas de producto que más correlacionan con el GMV: cómo priorizarlas y comunicarlas
3. Cómo usar los datos de comportamiento (heat maps, session recordings, funnel analysis) para encontrar oportunidades de producto
4. Personalización: cuándo la personalización es una palanca real de crecimiento y cuándo es una distracción cara

**Entregable:**
Genera un PRD de una funcionalidad de alto impacto para mi plataforma según el contexto que te he dado, con el problema que resuelve, las métricas de éxito, los criterios de aceptación y las dependencias principales.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Definir y priorizar la hoja de ruta de producto para una plataforma de commerce orientada a maximizar conversión y GMV',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de equipos en retail',
                'description'      => 'Gestiona turnos, retención y motivación del personal de tienda: las particularidades del RRHH en un sector con alta rotación y trabajo por turnos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de RRHH especializado en retail con experiencia gestionando equipos de tienda en cadenas con alta rotación. Necesito un enfoque práctico para los retos específicos de la gestión de personas en el sector retail.

**Contexto:**
- Tipo de negocio retail: [moda / alimentación / electrónica / restauración / otro]
- Número de tiendas y empleados: [cantidad aproximada]
- Perfil del equipo: [edades, jornadas parciales vs. completas, porcentaje de estudiantes]
- Principal problema de RRHH hoy: [rotación alta / dificultad para contratar / conflictos de turno / bajo rendimiento de ventas / motivación baja]
- Temporada de mayor carga: [navidades / verano / otro]

**Parte 1 – Gestión de turnos y planificación:**
La planificación del turno es la base de todo lo demás:
1. Modelos de turno en retail: partido, continuo, turno abierto — ventajas y desventajas de cada uno para el negocio y para el empleado
2. Cómo calcular las necesidades de personal por franja horaria usando datos de tráfico de tienda
3. Herramientas de planificación de turnos: cuándo Excel es suficiente y cuándo necesitas software de WFM (Workforce Management)
4. Cómo gestionar las peticiones de cambio de turno sin que el responsable de tienda pase la mitad del día resolviendo conflictos
5. Cómo preparar la planificación de campañas (Navidad, Black Friday, rebajas) sin saturar al equipo

**Parte 2 – Contratación en retail:**
Contratar bien en un sector con alta competencia por el talento:
1. Cómo redactar una oferta de empleo para retail que atraiga candidatos que realmente quieran estar en tienda
2. La entrevista en retail: qué evaluar más allá de la simpatía (orientación al cliente, tolerancia a la frustración, trabajo en equipo en entornos de ritmo alto)
3. Onboarding de empleados de tienda: los primeros 30 días que determinan si el empleado se queda o se va
4. Cómo gestionar los contratos por campaña de forma que los mejores quieran volver

**Parte 3 – Retención y motivación:**
El gran reto del retail es mantener al equipo:
1. Por qué se va la gente realmente en retail (más allá del salario): los factores que más correlacionan con la salida voluntaria
2. Qué pueden hacer los responsables de tienda para mejorar la retención sin subir sueldos
3. Sistemas de reconocimiento e incentivos que funcionan en retail: cuáles son efectivos y cuáles solo cuestan dinero
4. Desarrollo profesional en retail: cómo construir una escalera de carrera que motive a quedarse
5. Cómo gestionar la conciliación en un sector con horarios de fin de semana y festivos

**Parte 4 – Desempeño y conflictos:**
La gestión del día a día difícil:
1. Cómo dar feedback de desempeño a empleados de tienda de forma constructiva y frecuente
2. Gestión de conflictos entre compañeros de turno: las situaciones más habituales y cómo resolverlas
3. Ausencias e impuntualidades: cómo gestionar el absentismo sin dañar el clima laboral
4. El proceso disciplinario en retail: cuándo amonestar, cuándo suspender, cuándo despedir — y cómo documentarlo correctamente

**Entregable:**
Diseña un plan de acción de 30 días para reducir la rotación en tienda, con las 5 iniciativas más impactantes, el responsable de cada una y la métrica que usaremos para medir si ha funcionado.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Gestionar los retos específicos de RRHH en retail: turnos, rotación, motivación y desempeño del equipo de tienda',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Finanzas del retail y el comercio',
                'description'      => 'Domina la gestión financiera específica del retail: control de inventario, working capital, márgenes por producto y las métricas que distinguen un negocio rentable de uno que parece crecer pero pierde dinero.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO especializado en retail y comercio con experiencia en empresas de distribución, moda y gran consumo. Necesito entender las métricas financieras específicas del retail y cómo usarlas para tomar mejores decisiones.

**Mi negocio:**
- Tipo de retail: [tienda física / ecommerce / omnicanal / distribución]
- Categoría de producto: [moda / electrónica / alimentación / hogar / otro]
- Revenue anual aproximado: [rango]
- Número de SKUs: [cantidad aproximada]
- Principal dolor financiero: [márgenes decrecientes / stock inmovilizado / cash flow negativo en campaña / no sé cuáles son mis productos más rentables]

**Parte 1 – Métricas financieras esenciales del retail:**
Las métricas que todo responsable de un negocio de retail debe conocer:
1. **Gross Margin y Gross Margin Return on Investment (GMROI)**: cómo calcularlo por producto, categoría y tienda; qué rango es saludable en tu sector
2. **Sell-through rate**: cómo medir la velocidad de rotación del stock y por qué es la métrica más importante para evitar liquidaciones
3. **Margen sobre coste vs. margen sobre precio de venta**: por qué muchos retailers los confunden y el error que cometen al fijar precios
4. **Revenue per Square Foot / Revenue por metro cuadrado**: cómo calcularlo y usarlo para comparar tiendas y optimizar el mix de espacio
5. **Average Transaction Value y Units per Transaction**: cómo moverse la aguja en cada uno

**Parte 2 – Gestión del inventario financiero:**
El inventario es el mayor activo y el mayor riesgo:
1. OTB (Open to Buy): qué es, cómo calcularlo y por qué define si ganarás o perderás dinero esta temporada
2. Gestión de las rebajas: cuándo marcar down, cuánto y cómo minimizar las pérdidas en producto que no ha rotado
3. Provisiones por obsolescencia: cómo contabilizarlas y cuándo es demasiado tarde para provisionarlas
4. FIFO vs. LIFO vs. precio medio ponderado en la valoración del inventario: implicaciones fiscales y de gestión

**Parte 3 – Working capital en retail:**
El retail tiene un ciclo de cash muy específico:
1. Por qué el retail puede ser muy rentable y al mismo tiempo quedarse sin cash (la trampa del crecimiento en retail)
2. Cómo calcular el ciclo de conversión del cash en tu negocio
3. Gestión de proveedores: cómo negociar plazos de pago que mejoren tu posición de capital circulante
4. Financiación del stock de campaña: opciones (línea de crédito, factoring, confirming de proveedores) y cuándo usar cada una
5. Gestión del cash flow en temporadas: cómo preparar el flujo de caja para sobrevivir a los valles entre campañas

**Parte 4 – Pricing y rentabilidad por producto:**
No todos los productos son igual de rentables:
1. Cómo construir una matriz de rentabilidad por producto o categoría (margen × volumen)
2. El coste real de un producto: cómo incluir el coste de stock inmovilizado, devoluciones y mermas
3. Estrategias de pricing dinámico en retail: cuándo bajar precio para rotar y cuándo mantenerlo para preservar margen
4. Loss leaders: cuándo tiene sentido vender a pérdida para generar tráfico o fidelización

**Entregable:**
Genera un dashboard financiero de retail de una página con las 10 métricas que debo revisar semanalmente, cómo calcularlas con los datos que normalmente tengo disponibles y qué acción tomar cuando cada métrica está fuera de rango.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Controlar la salud financiera de un negocio retail con las métricas correctas de margen, inventario y cash flow',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Derecho del comercio y retail en España',
                'description'      => 'Entiende las franquicias, contratos de distribución, arrendamientos de local comercial y la regulación específica que afecta al sector retail en España.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado mercantil especializado en derecho del comercio y retail en España. Necesito entender el marco legal específico del sector comercial para tomar decisiones informadas en mi negocio.

**Mi situación:**
- Tipo de negocio: [tienda propia / franquiciado / franquiciador / distribuidor / ecommerce con tienda física]
- Forma jurídica: [SL / SA / autónomo / cooperativa]
- Número de establecimientos: [cantidad, si aplica]
- Principal pregunta legal: [arrendamiento de local / contrato de franquicia / contrato de distribución / regulación de rebajas y promociones / otro]

**Parte 1 – Contratos de arrendamiento de local comercial:**
El contrato de local es el contrato más importante del retail:
1. Régimen legal en España: Ley de Arrendamientos Urbanos (LAU) vs. libre pacto en arrendamientos de uso distinto al de vivienda
2. Cláusulas esenciales a negociar: duración mínima, renta variable sobre ventas, revisión de renta, obras a cargo de quién
3. Cláusulas peligrosas a evitar: rentas variables mal diseñadas, cláusulas de arrendamiento forzoso, limitaciones de cesión
4. Derecho de tanteo y retracto: cuándo aplica y cómo protegerse si el propietario vende el inmueble
5. Resolución anticipada: qué indemnizaciones son habituales y cómo limitar el riesgo en un local que no funciona

**Parte 2 – Contratos de distribución y suministro:**
Cómo funciona la relación legal con proveedores y distribuidores:
1. Diferencias entre distribuidor exclusivo, agente comercial y comisionista: implicaciones laborales, fiscales y de responsabilidad
2. Contrato de distribución exclusiva: cláusulas de territorio, mínimos de compra, duración y terminación
3. Derecho de la competencia en distribución: qué cláusulas de exclusividad pueden ser ilegales en España y la UE
4. Gestión de la terminación de un contrato de distribución: indemnizaciones, stocks, garantías

**Parte 3 – Franquicias:**
Tanto si soy franquiciador como franquiciado:
1. Obligaciones pre-contractuales: el documento de información precontractual (DIP) obligatorio en España — qué debe contener
2. El contrato de franquicia: elementos esenciales, duración habitual, canon de entrada y royalties
3. Obligaciones del franquiciador: soporte, formación, protección de territorio, actualización de manuales
4. Obligaciones del franquiciado: estándares operativos, compras exclusivas, confidencialidad, no competencia post-contrato
5. Resolución del contrato: causas, preaviso, qué pasa con el local, el stock y el know-how

**Parte 4 – Regulación comercial específica:**
El retail tiene una regulación especial:
1. Ley de Ordenación del Comercio Minorista: qué regula, licencias de apertura, horarios comerciales
2. Rebajas, liquidaciones y ventas especiales: qué está permitido y qué no según la ley española
3. Pagos a proveedores: Ley de medidas de lucha contra la morosidad — plazos máximos de pago en el sector retail
4. Ecommerce con tienda física: obligaciones legales adicionales (LSSI, RGPD, consumidores online)
5. Regulación de grandes superficies: qué restricciones existen para la apertura de grandes establecimientos en España

**Entregable:**
Genera un checklist legal para la apertura de una tienda física en España con los pasos obligatorios, los documentos necesarios y los riesgos legales más frecuentes que debo evitar desde el primer día.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Entender el marco legal del retail en España: arrendamientos, distribución, franquicias y regulación comercial',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente en retail omnicanal',
                'description'      => 'Gestiona devoluciones, reclamaciones y la experiencia de atención de forma consistente tanto online como en tienda física.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Experience especializado en retail omnicanal. Necesito diseñar un sistema de atención al cliente que funcione igual de bien — y con la misma información — cuando el cliente llama, escribe por chat, viene a tienda o contacta por redes sociales.

**Contexto:**
- Tipo de negocio: [moda / electrónica / hogar / alimentación / otro]
- Canales de atención actuales: [teléfono, email, chat web, WhatsApp, tienda física, redes sociales]
- Volumen de contactos: [por semana o mes]
- Principales motivos de contacto: [devoluciones, retrasos de envío, productos defectuosos, dudas de talla/producto, reclamaciones de precio]
- Principal problema: [tiempos de respuesta largos / información inconsistente entre canales / devoluciones complicadas / el equipo de tienda no ve el historial online del cliente]

**Parte 1 – Arquitectura de la atención omnicanal:**
El cliente no debe contar su problema dos veces:
1. Cómo unificar la información del cliente y su historial de contactos en todos los canales (helpdesk omnicanal: Zendesk, Freshdesk, Gorgias para ecommerce)
2. Single customer view en el equipo de atención: qué datos necesita ver el agente en los primeros 3 segundos
3. Cómo conectar el CRM de atención con el sistema de pedidos para que el agente pueda actuar (refundir, cambiar dirección, parar envío) sin salir del ticket
4. Cómo gestionar el contexto cuando el cliente pasa de un canal a otro (empieza por chat, continúa por teléfono)

**Parte 2 – Gestión de devoluciones:**
Las devoluciones son el momento de la verdad en retail:
1. Política de devoluciones: cómo diseñar una política clara, justa y que convierta la devolución en fidelización
2. Devolución online en tienda (y viceversa): el flujo operativo y de datos completo
3. Etiquetas de devolución prepagadas: cuándo ofrecerlas y cuándo no, impacto en el coste y en la satisfacción
4. Gestión del producto devuelto: qué pasa con el stock, cómo recuperar el valor del artículo devuelto
5. Fraude en devoluciones: señales de alerta y cómo protegerse sin tratar mal al cliente honesto

**Parte 3 – Gestión de reclamaciones:**
Cómo convertir un cliente enfadado en un promotor:
1. El protocolo de reclamación en retail: escucha, empatía, solución, compensación — cuándo aplicar cada nivel
2. Cómo manejar las reclamaciones en redes sociales sin que escalen (respuesta pública + gestión privada)
3. Autorización de agente: qué margen de decisión debe tener cada agente para resolver sin escalar (descuentos, compensaciones, excepciones a la política)
4. Registro y análisis de reclamaciones: cómo convertir los datos de atención en mejoras de producto y operaciones

**Parte 4 – Métricas de CX en retail:**
Qué medir y cómo mejorar:
1. NPS en retail: cuándo medirlo (post-compra, post-devolución, post-atención) y cómo actuar sobre el resultado
2. CSAT y CES (Customer Effort Score): cuál es más relevante para retail y cuándo usarlos
3. Tiempo de primera respuesta y tiempo de resolución por canal: benchmarks del sector
4. Tasa de recontacto: por qué es la métrica más honesta de calidad de atención y cómo reducirla

**Entregable:**
Genera una guía de respuesta de atención al cliente para los 5 motivos de contacto más frecuentes en tu sector, con el mensaje tipo para cada situación, el tono adecuado y los pasos de resolución que el agente debe seguir.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseñar la atención al cliente omnicanal en retail para gestionar devoluciones y reclamaciones con coherencia en todos los canales',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelance en el sector retail y ecommerce',
                'description'      => 'Descubre las oportunidades para diseñadores, consultores y especialistas en ecommerce que trabajan para marcas de producto: dónde están los clientes y cómo posicionarte.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance senior con más de 8 años de experiencia trabajando para marcas de retail y ecommerce. Necesito entender el mercado freelance en este sector y diseñar mi posicionamiento para conseguir clientes de calidad.

**Mi perfil:**
- Especialidad: [diseño de tienda / ecommerce management / UX para commerce / email marketing / SEO para retail / fotografía de producto / consultoría de operaciones / otro]
- Años de experiencia: [en retail/ecommerce específicamente]
- Portfolio actual: [proyectos relevantes si los hay]
- Tipo de cliente que busco: [marcas DTC / retailers tradicionales en transformación digital / agencias / startups de producto]
- Objetivo: [más clientes / mejores clientes / tarifas más altas / nicho más definido]

**Parte 1 – El mercado freelance en retail y ecommerce:**
Dónde están las oportunidades reales:
1. Qué servicios freelance demanda más el sector retail en este momento (y cuáles están empezando a saturarse)
2. Los tres tipos de cliente en retail: marcas DTC (direct to consumer) digitales, retailers tradicionales que digitalizan, y agencias que trabajan para ellos — diferencias en cómo contratan, cuánto pagan y qué valoran
3. El ciclo de compra del cliente retail: cuándo contratan (lanzamientos de temporada, picos de Black Friday, rebrands) y cómo prepararte para captarlos en ese momento
4. Oportunidades estacionales: cuándo hay más presupuesto y demanda en el sector

**Parte 2 – Posicionamiento en el sector retail:**
Cómo diferenciarte de los generalistas:
1. El poder del nicho en retail: por qué "especialista en ecommerce de moda sostenible" gana más que "diseñador web"
2. Cómo construir autoridad en el sector sin tener un blog: portfolio, casos de estudio, presencia en comunidades
3. Las certificaciones y conocimientos técnicos que más valoran los clientes de retail (Shopify, Klaviyo, Google Merchant Center, etc.)
4. Cómo usar el lenguaje del cliente retail en tu comunicación: hablar de GMV, conversión, ticket medio en lugar de "páginas bonitas"

**Parte 3 – Cómo conseguir los primeros clientes en retail:**
Canales y tácticas que funcionan en este sector:
1. Dónde se encuentran los decision makers de retail: eventos, comunidades de ecommerce, LinkedIn, grupos de WhatsApp de sector
2. Cold outreach para marcas de retail: cómo hacer un primer contacto que demuestre que entiendes su negocio
3. Cómo convertir un proyecto pequeño (auditoría, consultoría de 1 día) en un cliente recurrente
4. El poder de los estudios de caso con métricas: cómo documentar resultados que hablen el idioma del cliente (conversión, revenue, ROAS)

**Parte 4 – Gestión del negocio freelance en retail:**
Las particularidades de trabajar en este sector:
1. Propuestas para clientes de retail: qué incluir, cómo estructurar honorarios (por proyecto vs. retainer vs. éxito)
2. Estacionalidad y planificación financiera: cómo sobrevivir el enero de retail sin haber planificado en octubre
3. Subcontratación y red de freelancers complementarios: cuándo montar un equipo para un proyecto grande de retail
4. Propiedad intelectual con clientes de retail: a quién pertenecen las creatividades, qué puede reutilizarse en el portfolio

**Entregable:**
Redacta una propuesta de servicios de una página adaptada al sector retail que pueda usar como base para presentarme a nuevos clientes, con mi propuesta de valor, servicios principales y resultados tipo que consigo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Posicionarse como freelance especializado en retail y ecommerce para conseguir mejores clientes y proyectos más rentables',
                'vote_score'       => 27,
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
