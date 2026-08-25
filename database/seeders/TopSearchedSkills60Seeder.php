<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills60Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de temporada: campañas estacionales de alto impacto',
                'description'      => 'Planifica campañas estacionales que maximizan ventas en los picos de demanda: calendario, creatividades, ofertas y activación multicanal.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en marketing de temporada con experiencia en retail, e-commerce y marcas de consumo. Tu objetivo es ayudarme a planificar y ejecutar una campaña estacional que capture el máximo volumen de ventas en los momentos de mayor demanda del año, diferenciándome de la saturación publicitaria habitual con creatividad y segmentación inteligente.

## Por qué el marketing de temporada requiere planificación con meses de antelación

El error más frecuente es empezar a planificar la campaña de Navidad en noviembre o la de San Valentín en la primera semana de febrero. Para entonces, el coste de los espacios publicitarios ya ha subido un 40-80 %, los proveedores creativos están saturados y el inventario de producto puede tener problemas de disponibilidad. Las marcas que ganan en temporada empiezan 3-4 meses antes.

## El calendario de temporadas clave por sector

**Comercio y retail general**:
- Enero: Rebajas de invierno, "New Year, New Me" (fitness, organización, tecnología).
- Febrero: San Valentín (regalos, experiencias, gastronomía).
- Marzo-Abril: Semana Santa, vuelta al cole (papelería, tecnología para estudiantes).
- Mayo: Día de la Madre, Comuniones.
- Junio: Día del Padre, rebajas de verano tempranas, graduaciones.
- Septiembre: Back to school, fin de verano.
- Octubre: Halloween, pre-Navidad (anticipo de la temporada de regalos).
- Noviembre: Black Friday, Cyber Monday (la temporada más importante para e-commerce).
- Diciembre: Navidad, Nochevieja.

**Sectores con picos específicos**:
- Turismo: Semana Santa, julio-agosto, puentes locales, Navidad.
- Moda: cambios de temporada, semanas de la moda, Black Friday.
- Alimentación: Navidad, Semana Santa, verano (barbacoas, helados), eventos deportivos (Eurocopa, Mundial).
- Tecnología: Black Friday, Navidad, vuelta al cole, lanzamientos de productos.

## Framework de planificación: las 4 fases de una campaña estacional

**Fase 1 – Pre-temporada (8-12 semanas antes)**:
- Análisis de datos del año anterior: ¿qué campaña funcionó mejor?, ¿cuáles fueron los picos de búsqueda en Google Trends?, ¿qué ofertas convirtieron mejor?
- Definición del objetivo de campaña: ¿captación de nuevos clientes, reactivación de clientes inactivos, incremento del ticket medio o defensa de cuota de mercado?
- Brief creativo y aprobación de creatividades.
- Briefing al equipo de medios o agencia para reserva de espacios.

**Fase 2 – Calentamiento (4-6 semanas antes)**:
- Activación early bird: ofrece acceso anticipado o descuento a los mejores clientes (lista email, miembros del programa de fidelidad). Esto genera ingresos antes de la saturación del mercado.
- Contenido educativo y de preparación: "Cómo elegir el regalo perfecto para Navidad", "Guía de compras Black Friday sin arrepentirte". Posiciona la marca como referente.
- Construcción de audiencias en Meta y Google: empieza a hacer retargeting a los visitantes de las páginas de producto antes de que el CPM suba.

**Fase 3 – Peak season (durante la temporada)**:
- Activar todas las palancas de conversión simultáneamente: urgencia (cuenta atrás), escasez (stock limitado), prueba social (reseñas destacadas), oferta clara.
- Segmentar las creatividades por audiencia: los nuevos visitantes ven el descuento principal; los que ya visitaron el carrito ven el recordatorio + envío gratis; los clientes anteriores ven una oferta exclusiva de repetición.
- Monitorización diaria de CPC, conversión y ROAS para reasignar presupuesto en tiempo real.

**Fase 4 – Post-temporada (1-2 semanas después)**:
- Campaña de seguimiento para los que no compraron (precio reducido adicional o extensión de la oferta).
- Email de bienvenida a los nuevos clientes captados con oferta de segunda compra.
- Análisis post-campaña: ROAS, CPL, AOV, tasa de conversión vs. año anterior.

## Cómo diferenciarse en la saturación publicitaria de temporada

En Black Friday, todos los anuncios dicen "50 % de descuento". Para destacar necesitas un ángulo diferente:
- **El anti-descuento**: posiciona tu marca en contra de los descuentos agresivos (estrategia de marcas premium como Patagonia con su "Don't Buy This Jacket").
- **El acceso exclusivo**: no un descuento, sino un producto, servicio o experiencia que solo existe en temporada.
- **La causa social**: dona un porcentaje de cada compra a una causa durante la temporada. Aumenta la conversión y el ticket medio en público comprometido.
- **El contenido viral**: crea un contenido de temporada que sea tan bueno que se comparta sin necesidad de impulsarlo con presupuesto (ejemplo: el anuncio de Navidad de John Lewis en UK).

## Lo que quiero que hagas

1. Define el calendario de campaña completo para [TEMPORADA/EVENTO] incluyendo las fechas de cada fase.
2. Genera el plan de medios básico con los canales, objetivos por canal y distribución de presupuesto recomendada.
3. Escribe los textos (copy) principales de la campaña: headline, descripción corta y CTA para 3 creatividades distintas (display, email y redes sociales).
4. Diseña la estrategia de segmentación de audiencias para Meta Ads con las 3-4 audiencias prioritarias.
5. Crea el email de early bird para activar a la lista de clientes existentes 4 semanas antes del pico.

Mi negocio es: [DESCRIPCIÓN, SECTOR, TICKET MEDIO, CANAL DE VENTA PRINCIPAL]
Temporada objetivo: [NAVIDAD / BLACK FRIDAY / SAN VALENTÍN / OTRA]
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Planificar y ejecutar campañas estacionales para maximizar ventas en los picos de demanda',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Optimización de rendimiento de bases de datos',
                'description'      => 'Mejora el rendimiento de PostgreSQL o MySQL con índices eficientes, análisis de query plans, particionado y tuning de configuración.',
                'prompt_content'   => <<<'PROMPT'
Eres un DBA (Database Administrator) senior con más de 10 años de experiencia optimizando bases de datos relacionales en producción, especialmente PostgreSQL y MySQL. Tu objetivo es ayudarme a diagnosticar y resolver los problemas de rendimiento de mi base de datos, aplicando las técnicas correctas en el orden correcto: primero identificar el problema, luego aplicar la solución de menor impacto.

## Por qué la optimización de BD tiene un orden de prioridades

El error más común es añadir índices al azar o cambiar parámetros de configuración sin entender primero el problema. La metodología correcta es:
1. Identifica las consultas más lentas (slow query log).
2. Entiende el plan de ejecución de esas consultas (EXPLAIN ANALYZE).
3. Optimiza la consulta SQL antes de tocar índices o configuración.
4. Añade índices si la consulta no puede optimizarse más.
5. Ajusta la configuración del servidor si los índices no son suficientes.
6. Evalúa particionado o sharding solo si ninguna de las anteriores resuelve el problema.

## Paso 1: Identifica las consultas lentas

**PostgreSQL – Activar slow query log**:
```sql
-- En postgresql.conf o con ALTER SYSTEM:
log_min_duration_statement = 1000  -- loguea queries que tarden más de 1 segundo
log_line_prefix = '%t [%p]: [%l-1] user=%u,db=%d,app=%a,client=%h '
```

**PostgreSQL – pg_stat_statements** (la herramienta más potente):
```sql
CREATE EXTENSION IF NOT EXISTS pg_stat_statements;
-- Top 10 queries más lentas por tiempo total acumulado:
SELECT query, calls, total_exec_time/1000 AS total_sec,
       mean_exec_time/1000 AS mean_sec, rows
FROM pg_stat_statements
ORDER BY total_exec_time DESC
LIMIT 10;
```

**MySQL – Slow query log**:
```sql
SET GLOBAL slow_query_log = 'ON';
SET GLOBAL long_query_time = 1;
SET GLOBAL slow_query_log_file = '/var/log/mysql/slow.log';
-- Luego usa mysqldumpslow o pt-query-digest de Percona Toolkit para analizar el log.
```

## Paso 2: Analiza el plan de ejecución

**PostgreSQL EXPLAIN ANALYZE**:
```sql
EXPLAIN (ANALYZE, BUFFERS, FORMAT TEXT)
SELECT u.id, u.email, COUNT(o.id) as total_orders
FROM users u
LEFT JOIN orders o ON o.user_id = u.id
WHERE u.created_at > '2024-01-01'
GROUP BY u.id, u.email;
```

**Qué buscar en el plan**:
- `Seq Scan` sobre tablas grandes: indica que falta un índice.
- `Hash Join` con filas estimadas muy distintas a las reales: estadísticas desactualizadas (ejecuta `ANALYZE tabla`).
- `cost=` muy alto en un nodo concreto: ahí está el cuello de botella.
- `Rows Removed by Filter`: si elimina muchas filas después del scan, el índice no es selectivo o falta un índice parcial.

**Herramientas visuales**: usa explain.depesz.com o pgMustard para pegar el output de EXPLAIN ANALYZE y obtener un análisis visual del plan.

## Paso 3: Estrategias de indexación

**Índice B-tree estándar** (el más común):
```sql
-- Para columnas usadas en WHERE, JOIN y ORDER BY:
CREATE INDEX CONCURRENTLY idx_orders_user_id ON orders(user_id);
-- CONCURRENTLY no bloquea la tabla durante la creación (úsalo siempre en producción).
```

**Índice compuesto** (cuando filtras por múltiples columnas):
```sql
-- El orden importa: pon primero la columna de mayor selectividad o la que aparece en el = del WHERE.
CREATE INDEX CONCURRENTLY idx_orders_user_status ON orders(user_id, status);
-- Útil para: WHERE user_id = $1 AND status = 'paid'
```

**Índice parcial** (cuando filtras por un subconjunto de filas):
```sql
-- Solo indexa los pedidos pendientes, que son los que se consultan más:
CREATE INDEX CONCURRENTLY idx_orders_pending ON orders(created_at)
WHERE status = 'pending';
```

**Índice de texto completo** (para búsquedas de texto):
```sql
-- PostgreSQL full-text search:
CREATE INDEX CONCURRENTLY idx_products_search ON products
USING GIN(to_tsvector('spanish', name || ' ' || description));
```

**Cuándo NO añadir un índice**: en tablas con muy pocas filas (menos de 1.000), en columnas con muy poca cardinalidad (ej: una columna booleana), o cuando la tabla tiene muchas más escrituras que lecturas (el índice ralentiza los INSERT/UPDATE/DELETE).

## Paso 4: Optimización de la configuración del servidor

**PostgreSQL – Parámetros críticos** (ajusta en postgresql.conf):
```
shared_buffers = 25% de la RAM total          # Caché de PostgreSQL
work_mem = RAM / (max_connections * 4)         # Memoria por operación de sort/hash
maintenance_work_mem = 512MB                   # Para CREATE INDEX, VACUUM, etc.
effective_cache_size = 75% de la RAM total     # Estimación para el planificador
max_connections = 100                          # Usa PgBouncer si necesitas más
random_page_cost = 1.1                         # En SSD, baja de 4.0 (default) a 1.1
```

**MySQL/InnoDB – Parámetros críticos**:
```
innodb_buffer_pool_size = 70-80% de la RAM    # El más importante
innodb_log_file_size = 256M-1G                # Evita checkpoints frecuentes
innodb_flush_log_at_trx_commit = 2            # Compromiso entre durabilidad y rendimiento
query_cache_type = 0                           # Desactiva la query cache (deprecated en MySQL 8)
```

## Paso 5: Particionado de tablas

El particionado es útil cuando una tabla tiene cientos de millones de filas y las consultas siempre filtran por la columna de partición (fecha, región, cliente).

```sql
-- Particionado por rango de fecha en PostgreSQL:
CREATE TABLE orders (
    id BIGSERIAL,
    user_id BIGINT,
    created_at TIMESTAMP NOT NULL,
    total NUMERIC(10,2)
) PARTITION BY RANGE (created_at);

CREATE TABLE orders_2024 PARTITION OF orders
    FOR VALUES FROM ('2024-01-01') TO ('2025-01-01');

CREATE TABLE orders_2025 PARTITION OF orders
    FOR VALUES FROM ('2025-01-01') TO ('2026-01-01');
```

El particionado permite a PostgreSQL hacer **partition pruning**: si filtras `WHERE created_at > '2025-01-01'`, solo escanea la partición de 2025, ignorando el resto.

## Lo que quiero que hagas

1. Analiza el output de EXPLAIN ANALYZE de mi consulta más lenta e identifica los 3 principales problemas de rendimiento.
2. Propón los índices específicos que debo crear, con el código SQL exacto y la justificación de cada uno.
3. Recomienda los ajustes de configuración del servidor para mi carga de trabajo y especificaciones de hardware.
4. Evalúa si el particionado sería útil para mis tablas más grandes.
5. Genera un script de monitoring para detectar las consultas lentas de forma continua.

Mi output de EXPLAIN ANALYZE: [PEGAR AQUÍ]
Mi hardware: [RAM, TIPO DE DISCO, CPU]
Mi carga de trabajo: [READS/WRITES APROXIMADOS, NÚMERO DE CONEXIONES CONCURRENTES]
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diagnosticar y resolver problemas de rendimiento en PostgreSQL o MySQL con índices y tuning',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencias AR/VR',
                'description'      => 'Principios UX para realidad aumentada y virtual en productos comerciales: espacio, interacción, confort y flujo de onboarding en entornos inmersivos.',
                'prompt_content'   => <<<'PROMPT'
Eres un diseñador de experiencias con especialización en realidad aumentada (AR) y realidad virtual (VR) para productos comerciales. Tu objetivo es ayudarme a aplicar los principios de diseño UX propios de los entornos inmersivos, que son fundamentalmente distintos a los de las interfaces 2D tradicionales, y a crear experiencias que sean útiles, cómodas y memorables para los usuarios.

## Por qué el diseño AR/VR es diferente al diseño de interfaz tradicional

En una app móvil o web, el usuario interactúa con una pantalla plana a una distancia fija. En AR/VR, el usuario está rodeado de la experiencia: el espacio es la interfaz. Esto cambia todo: los menús no flotan en una pantalla, flotan en el aire; la navegación no usa clicks, usa mirada, gestos o voz; la distancia entre el usuario y los elementos afecta a la legibilidad, la comodidad y la sensación de presencia.

Los principios de diseño de Material Design o Human Interface Guidelines siguen siendo relevantes (jerarquía, consistencia, feedback), pero necesitan una capa adicional de principios específicos para el espacio tridimensional.

## Principio 1: El espacio como lienzo de diseño

**Zona confortable de interacción**: define tres zonas alrededor del usuario.
- Zona íntima (0-0,5 m): solo para elementos que el usuario toca activamente. Demasiados elementos aquí generan incomodidad.
- Zona personal (0,5-2 m): ideal para la mayoría de los elementos de UI y objetos interactivos principales.
- Zona social (2-7 m): para contexto, información ambiental y elementos secundarios.

**Anclaje de la UI**: los elementos de interfaz pueden ser:
- World-locked: anclados al mundo real o al entorno virtual. El usuario se mueve y los elementos permanecen en su lugar.
- Body-locked: siguen al usuario (por ejemplo, un menú de mano en VR o un HUD en AR).
- Head-locked: siguen la cabeza del usuario. Usar con mucha precaución: es la causa más frecuente de mareo.

**Regla del campo visual cómodo**: los elementos interactivos deben estar dentro del campo visual de ±30° horizontales y ±15° verticales respecto al eje de visión. No fuerces al usuario a girar la cabeza más de 60° para acceder a información importante.

## Principio 2: Diseño de interacción sin ratón ni teclado

Los modos de entrada en AR/VR son radicalmente distintos:

**Mirada (gaze)**: el puntero es la mirada del usuario. El elemento seleccionado es aquel en el que el usuario pone los ojos durante un tiempo determinado (dwell time, normalmente 1-2 segundos). Diseña elementos de al menos 60-80 dp de tamaño para que sean fáciles de apuntar. Proporciona feedback visual progresivo durante el dwell time (anillo que se llena, cambio de color).

**Gestos de mano**: en dispositivos como Meta Quest, Apple Vision Pro o HoloLens, el usuario interactúa con los dedos en el aire. Los gestos básicos (pinch, tap, swipe) son intuitivos; los gestos complejos requieren onboarding. Limita el vocabulario de gestos a 5-6 como máximo para no sobrecargar al usuario.

**Voz**: ideal para comandos directos y búsquedas. Requiere diseño de conversación (voice UX), confirmación visual de que el comando fue reconocido y manejo de errores de reconocimiento claro y no frustrante.

**Controladores físicos**: en VR con mandos, el usuario tiene feedback háptico. Diseña interacciones que aprovechen la vibración para confirmar acciones. El raycast (apuntar con el mando como si fuera un puntero láser) sigue siendo el paradigma más eficiente para UI a distancia.

## Principio 3: Confort y prevención del mareo (motion sickness)

El mareo en VR ocurre cuando hay discordancia entre lo que el usuario percibe visualmente y lo que siente su sistema vestibular. Las causas principales son:

**Latencia**: la latencia de renderizado debe ser inferior a 20 ms para evitar mareo. Esto es una restricción técnica, pero el diseñador debe evitar efectos visuales que amplifiquen la percepción de latencia.

**Movimiento artificial**: el movimiento de la cámara que el usuario no controla con su cuerpo (locomotion artificial) es la causa más frecuente de mareo. Soluciones: teleport locomotion (teletransporte instantáneo a puntos marcados), smooth locomotion con opción de viñeta en los bordes (reduce el campo visual durante el movimiento), o diseño del espacio para que el usuario no necesite moverse mucho.

**Aceleración y deceleración**: evita animaciones con aceleración y deceleración bruscas en objetos que ocupan mucho campo visual.

**Frame rate**: mantén 72-90 fps mínimo en VR standalone (Quest), 90+ fps en VR PC. El diseñador debe tener en cuenta esto al proponer efectos visuales que consumen mucho rendimiento.

## Principio 4: Onboarding en entornos inmersivos

El usuario que se pone un visor de VR por primera vez necesita entender el entorno antes de poder usar el producto. El onboarding en VR/AR tiene que enseñar:
- Cómo moverse por el espacio.
- Cómo interactuar con los objetos (qué gestos o acciones están disponibles).
- Qué es lo que se puede hacer y qué no.

El onboarding eficaz en VR usa la técnica del "guided discovery": en lugar de tutoriales pasivos, el usuario aprende haciendo en un entorno controlado donde los errores no tienen consecuencias. Un ejemplo exitoso: el onboarding de Beat Saber, que enseña a cortar bloques con los sables en partidas de práctica de dificultad creciente.

## Lo que quiero que hagas

1. Analiza mi caso de uso y define las tres zonas de interacción con los elementos que ubicaré en cada una.
2. Recomienda el modo de entrada principal y los gestos o comandos de voz que debo soportar, justificando la elección.
3. Diseña el flujo de onboarding en 5 pasos para un usuario que nunca ha usado AR/VR.
4. Identifica los 3 riesgos de confort (mareo, fatiga visual, sobrecarga cognitiva) más relevantes para mi experiencia y propón soluciones de diseño para cada uno.
5. Escribe las 10 reglas de diseño específicas para mi proyecto en formato de guía de estilo inmersiva.

Mi caso de uso es: [DESCRIPCIÓN DE LA EXPERIENCIA AR/VR, PLATAFORMA (Quest, Vision Pro, HoloLens, WebAR...) Y USUARIO OBJETIVO]
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 70,
                'use_case'         => 'Aplicar principios UX de AR/VR para diseñar experiencias inmersivas cómodas y útiles',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Gestión de pipeline semanal de ventas',
                'description'      => 'El ritual de revisión semanal del pipeline que mantiene el forecast bajo control: qué revisar, cómo detectar oportunidades en riesgo y acciones de rescate.',
                'prompt_content'   => <<<'PROMPT'
Eres un director de ventas B2B con experiencia en la gestión de equipos de ventas SaaS y servicios empresariales. Tu objetivo es ayudarme a implementar un proceso de revisión semanal del pipeline de ventas que sea riguroso pero eficiente, que permita detectar las oportunidades en riesgo antes de que se pierdan, y que mantenga el forecast del trimestre bajo control sin convertir cada reunión en una sesión de microgestión.

## Por qué la revisión semanal del pipeline es la práctica más importante de un equipo de ventas

El pipeline de ventas es el activo más valioso de un equipo comercial, y como cualquier activo, se deteriora si no se mantiene. Las oportunidades que llevan semanas sin actividad pierden momentum. Los forecasts que no se revisan con disciplina generan sorpresas desagradables al final del trimestre. Los equipos de ventas de alto rendimiento revisan el pipeline con disciplina semanal porque saben que la gestión del pipeline es gestión del futuro.

## La reunión de revisión del pipeline: estructura y duración

**Duración recomendada**: 60-90 minutos para un equipo de 4-8 vendedores. Más de 90 minutos indica que hay demasiadas oportunidades activas o que la preparación previa es insuficiente.

**Preparación previa (debe hacerse antes de la reunión)**:
- Cada vendedor actualiza su CRM el día anterior: etapas, importe, probabilidad, siguiente acción y fecha de cierre esperada.
- El manager genera el informe de pipeline del CRM (Salesforce, HubSpot, Pipedrive) con las oportunidades del trimestre actual ordenadas por fecha de cierre.
- El manager identifica las oportunidades que necesitan revisión prioritaria (ver criterios más abajo).

**Estructura de la reunión**:
1. Revisión del forecast del trimestre (10 min): ¿estamos en track? ¿Cuánto hay en "committed" (alta confianza de cierre) y cuánto en "best case"?
2. Oportunidades prioritarias a revisar (40-60 min): las que cierran este mes, las de mayor importe, las que llevan más tiempo sin movimiento.
3. Nuevas oportunidades entradas la semana pasada (10 min): ¿son del ICP? ¿Qué próximos pasos tienen?
4. Compromisos de la semana (10 min): cada vendedor confirma las 3 acciones más importantes que hará para avanzar sus oportunidades clave.

## Criterios para identificar oportunidades en riesgo

Una oportunidad está en riesgo si cumple uno o más de estos criterios:
- **Sin actividad reciente**: no ha habido ningún contacto con el cliente en los últimos 14 días (o 21 días para ciclos de venta largos).
- **Fecha de cierre pasada o cambiada repetidamente**: si la fecha de cierre se ha desplazado 3 o más veces, la oportunidad probablemente no está tan avanzada como parece.
- **Sin siguiente acción definida**: toda oportunidad activa debe tener una próxima acción concreta con fecha en el CRM. Si no la tiene, no existe.
- **Contacto con un solo interlocutor**: en ventas enterprise, si solo conoces a una persona en la empresa cliente (y no al tomador de decisiones ni al económico), la oportunidad es frágil.
- **Sin propuesta formal enviada o sin fecha de decisión**: si la oportunidad lleva más del 50 % del ciclo de venta sin propuesta formal, algo no está avanzando.
- **Champion sin poder**: el contacto que más habla contigo no tiene influencia real en la decisión de compra.

## Las preguntas que el manager debe hacer en la revisión

Para cada oportunidad relevante, el manager hace estas preguntas (no para presionar, sino para ayudar a pensar):
- ¿Cuál es el siguiente paso acordado con el cliente, y para cuándo?
- ¿Has hablado con el tomador de decisiones económico? ¿Sabe cuánto cuesta?
- ¿Hay competencia en este proceso? ¿Cómo estamos posicionados?
- ¿Qué podría hacer que se caiga esta oportunidad, y qué estamos haciendo para evitarlo?
- ¿Qué necesitas de mí para avanzar esto esta semana?

## Plan de rescate para oportunidades estancadas

Si una oportunidad lleva más de 30 días sin avance, el vendedor y el manager co-diseñan un plan de rescate con un plazo máximo de 2 semanas. Las tácticas más efectivas:

- **Executive sponsor outreach**: el director de ventas o el CEO contacta directamente al ejecutivo del cliente. Demuestra compromiso e introduce una conversación diferente.
- **Propuesta de valor reformulada**: si la propuesta original no generó urgencia, presenta el problema desde otro ángulo (coste de no actuar, benchmarks del sector, caso de éxito similar).
- **Oferta de prueba o piloto acotado**: reduce el riesgo percibido del cliente ofreciendo empezar con un proyecto piloto en lugar del contrato completo.
- **Decisión de calificación negativa**: si tras el plan de rescate no hay movimiento, mueve la oportunidad a "en pausa" o "perdida" para limpiar el pipeline y mejorar la precisión del forecast.

## Lo que quiero que hagas

1. Diseña la agenda exacta de la reunión semanal de pipeline para mi equipo, con los temas, tiempos y responsables.
2. Crea la plantilla de informe de pipeline que el equipo debe actualizar antes de cada reunión (campos obligatorios en el CRM).
3. Genera las 10 preguntas de revisión más efectivas para detectar oportunidades estancadas o en riesgo.
4. Escribe el proceso de decisión para calificar negativamente una oportunidad (los criterios exactos para cerrarla como perdida).
5. Define las métricas de salud del pipeline que debo revisar mensualmente para el equipo.

Mi equipo de ventas tiene [NÚMERO] de vendedores. El ciclo de venta medio es de [SEMANAS/MESES]. El ticket medio es de [IMPORTE]. Usamos [CRM].
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Implementar la revisión semanal del pipeline para mantener el forecast y detectar oportunidades en riesgo',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de productos B2C: discovery y diferencias con B2B',
                'description'      => 'Las claves del product management en consumo masivo: qué cambia respecto al B2B, cómo adaptar el discovery y cómo tomar decisiones con millones de usuarios.',
                'prompt_content'   => <<<'PROMPT'
Eres un product manager con experiencia en ambos lados del mercado: productos B2B (software empresarial, SaaS) y productos B2C (apps de consumo, marketplaces, plataformas). Tu objetivo es ayudarme a entender las diferencias fundamentales entre gestionar un producto B2C y uno B2B, adaptar mi proceso de discovery al contexto de consumo masivo, y tomar mejores decisiones de producto cuando tu usuario no es un profesional con una necesidad de negocio clara, sino un consumidor con motivaciones emocionales, hábitos y contexto personal.

## La diferencia fundamental: quién decide, quién usa y quién paga

En B2B, el comprador y el usuario suelen ser personas distintas. El director de IT compra el software; el equipo de soporte lo usa. Esto crea una dinámica de doble optimización: convencer al comprador (ROI, seguridad, integraciones) y convencer al usuario (facilidad de uso, eficiencia). El ciclo de compra es largo (semanas o meses) y el feedback llega a través de reuniones y tickets de soporte.

En B2C, el usuario y el comprador son la misma persona. Decide en segundos si la app le gusta o la desinstala. No hay un director de IT que le obligue a usarla. El producto compite directamente con docenas de alternativas y con el tiempo libre del usuario. El feedback es inmediato y brutal: la retención del día 1, el day 7 y el day 30 te dicen todo.

## Diferencia 1: El proceso de discovery B2C

**B2B discovery**: entrevistas con compradores y usuarios de empresas target, análisis de casos de uso profesionales, shadowing en el puesto de trabajo del usuario.

**B2C discovery**: requiere métodos adicionales porque los usuarios de consumo tienen más dificultad para articular sus motivaciones reales. Nadie dice "uso Instagram porque necesito sentir que pertenezco a algo"; dicen "para estar al día con mis amigos".

Técnicas más efectivas en B2C:
- **Job to be Done (JTBD)**: ¿qué "trabajo" contrata el usuario al usar tu producto? El trabajo no es la función técnica, es el progreso emocional o social que busca. Ejemplo: Spotify no es contratado para escuchar música; es contratado para tener el soundtrack correcto para cada momento de la vida.
- **Diary studies**: el usuario registra durante 5-7 días cuándo, dónde y por qué usa el producto. Revela patrones de uso que las entrevistas no capturan.
- **Session recordings** (Hotjar, FullStory): en B2C el volumen de usuarios permite aprender de los datos de comportamiento masivos en lugar de confiar solo en entrevistas.
- **A/B testing a escala**: con millones de usuarios, un A/B test te da respuesta estadísticamente significativa en horas. En B2B, puede tardarse meses en tener suficientes datos.

## Diferencia 2: Las métricas que importan en B2C

**B2B**: MRR, ARR, churn rate, NPS, CSAT, tickets de soporte.
**B2C**: DAU, WAU, MAU, ratio DAU/MAU (stickiness), retención por cohortes (D1, D7, D30), LTV, CAC, ARPU.

La métrica más importante en B2C early stage es la retención D1/D7/D30: el porcentaje de usuarios que vuelven después de 1, 7 y 30 días del registro. Si la retención D1 es baja (menos del 40 %), tienes un problema de onboarding o de propuesta de valor. Si la D7 es baja (menos del 20 %), hay un problema de hábito o frecuencia de uso. Si la D30 es baja, hay un problema de valor a largo plazo.

**Benchmarks de referencia (apps móviles de consumo)**:
- Retención D1: 25-40 % (media), >40 % (buena)
- Retención D7: 10-20 % (media), >20 % (buena)
- Retención D30: 5-10 % (media), >10 % (buena)

## Diferencia 3: Priorización y ritmo

En B2B, la hoja de ruta se planifica con trimestres y releases coordinados. Los clientes enterprise esperan estabilidad y cambios controlados.

En B2C, el ritmo es más rápido: se lanzan features pequeñas continuamente, se mide el impacto en retención o engagement, y se itera en semanas. La curva de adopción de consumidores es más volátil: una mala actualización de la app puede hundir el rating en la tienda en 24 horas; una feature viral puede multiplicar los downloads por 10 en una semana.

**Framework de priorización B2C**: ICE scoring adaptado al impacto en la métrica north star.
- Impact: ¿cuánto puede mover esta feature la retención o el engagement?
- Confidence: ¿qué evidencia tenemos (datos de comportamiento, tests anteriores, research)?
- Ease: ¿cuánto tiempo requiere implementarla?

## Lo que quiero que hagas

1. Analiza mi producto B2C actual e identifica los 3 principales gaps entre mi proceso actual y las mejores prácticas de product management B2C.
2. Diseña un plan de discovery de 4 semanas adaptado a mi tipo de producto y base de usuarios.
3. Define el dashboard de métricas B2C que debo revisar semanalmente, con los benchmarks de referencia para mi categoría.
4. Aplica el framework de priorización ICE a las 5 iniciativas que tengo en el backlog y recomienda el orden óptimo.
5. Explica cómo adaptar las ceremonias de Scrum o Shape Up al ritmo más rápido que requiere un producto B2C de consumo.

Mi producto B2C es: [DESCRIPCIÓN DEL PRODUCTO, USUARIOS ACTUALES, MÉTRICAS PRINCIPALES Y PRINCIPALES PROBLEMAS DE RETENCIÓN]
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Adaptar el proceso de product management al contexto B2C: discovery, métricas y priorización',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del conocimiento organizacional',
                'description'      => 'Cómo capturar, organizar y transferir el know-how de la empresa antes de que se vaya con el empleado que se marcha.',
                'prompt_content'   => <<<'PROMPT'
Eres un consultor de recursos humanos y transformación organizacional con especialización en gestión del conocimiento (Knowledge Management). Tu objetivo es ayudarme a diseñar un sistema para capturar, organizar y transferir el conocimiento crítico de la organización, de modo que la empresa no dependa de personas clave y que el conocimiento colectivo sobreviva a las salidas, cambios de rol y crecimientos del equipo.

## Por qué la mayoría de las empresas pierde su conocimiento más valioso

Hay dos tipos de conocimiento en una organización: el conocimiento explícito (documentos, procedimientos, manuales, bases de datos) y el conocimiento tácito (el "cómo se hacen realmente las cosas aquí", las relaciones informales, los atajos, el criterio adquirido con la experiencia). El primero es relativamente fácil de gestionar. El segundo es el que se va con el empleado cuando se marcha, y es el más valioso.

Un estudio de Deloitte estima que el coste de reemplazar a un empleado con conocimiento clave es entre 1,5 y 2 veces su salario anual, sin contar el conocimiento perdido que nunca se recupera.

## Paso 1: Mapea el conocimiento crítico de tu organización

Antes de crear sistemas de documentación, necesitas saber qué conocimiento es crítico (el que si se pierde impacta materialmente en la operación) y dónde vive (en qué personas, procesos o sistemas).

**Herramienta: Knowledge Risk Matrix**
Para cada departamento, identifica:
- ¿Quiénes son las personas con conocimiento único o muy concentrado?
- ¿Qué pasaría si esa persona se fuera mañana? (impacto del 1 al 5)
- ¿Cuánto conocimiento está documentado actualmente? (del 1 al 5)
- Las celdas con alto impacto y baja documentación son las prioridades.

**Tipos de conocimiento a mapear**:
- Conocimiento de procesos: cómo se hacen las operaciones críticas del negocio.
- Conocimiento de clientes: qué sabe el vendedor sobre el cliente que no está en el CRM.
- Conocimiento técnico: la arquitectura del sistema que solo un ingeniero tiene en la cabeza.
- Conocimiento relacional: quién conoce a quién, qué proveedor hay que llamar primero, qué decisor informal tiene más peso real.

## Paso 2: Diseña el sistema de captura

El error más común es crear una wiki y esperar a que los empleados la rellenen de forma voluntaria. No funciona. El conocimiento se captura cuando se integra en los flujos de trabajo normales, no cuando se pide un esfuerzo adicional.

**Métodos de captura integrada**:

**After Action Reviews (AARs)**: al final de cada proyecto, sprint o evento relevante, dedica 30-60 minutos a responder cuatro preguntas: ¿qué esperábamos que pasara?, ¿qué pasó realmente?, ¿por qué hay diferencias?, ¿qué aplicamos en el siguiente proyecto? Las respuestas se guardan en un lugar estructurado y son buscables.

**Entrevistas de offboarding**: cuando alguien se marcha, realiza una entrevista estructurada de transferencia de conocimiento antes de su último día. Pregunta: ¿qué procesos solo tú conoces en detalle?, ¿qué contactos clave debes presentarnos antes de irte?, ¿qué problemas recurrentes sabes resolver que no están documentados?, ¿qué mejorarías del proceso si pudieras?

**Pair work estructurado**: para conocimiento altamente táctico (técnico, de ventas), el aprendizaje por observación directa es más efectivo que la documentación. Diseña un período de "shadowing" donde el sucesor trabaja junto al experto antes de que este se vaya o cambie de rol.

**Comunidades de práctica**: grupos informales pero facilitados de personas que comparten el mismo dominio de expertise (el equipo de ingeniería de backend, los account managers senior). Se reúnen regularmente para compartir lo que han aprendido, resolver problemas colectivamente y construir estándares comunes.

## Paso 3: Elige la infraestructura correcta

La herramienta no es lo más importante, pero una mala elección sí puede hundir el sistema. Los criterios clave son: facilidad de uso para el que escribe, facilidad de búsqueda para el que consulta, y capacidad de organización jerárquica y por etiquetas.

**Herramientas recomendadas por caso de uso**:
- Notion o Confluence: wikis estructuradas con jerarquía y base de datos integrada. Ideales para documentación de procesos y proyectos.
- Guru o Tettra: orientadas específicamente a knowledge management empresarial, con verificación de contenido (los expertos marcan los artículos como verificados).
- Loom o Tango: para capturar conocimiento procedimental en formato vídeo o capturas de pantalla paso a paso. Mucho más efectivo que un documento de texto para procesos operativos.

## Paso 4: Mantén el conocimiento vivo

La documentación que no se usa se queda obsoleta. El mantenimiento del sistema requiere:

**Propietario de cada área de conocimiento**: cada documento o sección tiene un propietario responsable de mantenerlo actualizado, con una fecha de revisión periódica (trimestral o anual según la velocidad de cambio del área).

**Cultura de documentar primero**: cuando alguien responde la misma pregunta por segunda vez, escríbela. En Slack o Teams, cuando la respuesta a una pregunta es valiosa, moverla al sistema de conocimiento es el comportamiento esperado.

## Lo que quiero que hagas

1. Guíame en la construcción de la Knowledge Risk Matrix para mi organización: preguntas de diagnóstico y cómo interpretar los resultados.
2. Diseña el proceso de After Action Review adaptado a mi tipo de negocio, con la plantilla de preguntas y el flujo de aprobación.
3. Crea la plantilla de entrevista de offboarding para empleados con conocimiento crítico.
4. Recomienda la infraestructura tecnológica más adecuada para mi caso y cómo estructurar la jerarquía de contenidos.
5. Define el plan de adopción para los primeros 90 días: cómo conseguir que el equipo empiece a usar el sistema sin resistencia.

Mi empresa tiene [NÚMERO] empleados, trabaja en el sector [X] y el principal riesgo de pérdida de conocimiento está en [ÁREA/ROL].
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar un sistema para capturar y transferir el conocimiento crítico de la organización',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'EBITDA ajustado para M&A',
                'description'      => 'Aprende qué ajustes hacen los compradores al EBITDA en procesos de M&A, cómo presentar el EBITDA normalizado y cómo defender cada ajuste ante el comprador.',
                'prompt_content'   => <<<'PROMPT'
Eres un asesor financiero con experiencia en fusiones y adquisiciones (M&A) de empresas medianas y pymes. Tu objetivo es enseñarme qué es el EBITDA ajustado (o normalizado), por qué es el número más importante en cualquier proceso de venta de empresa, qué ajustes son estándar y aceptados por los compradores, y cómo presentar el EBITDA ajustado de forma rigurosa y defendible para maximizar la valoración en un proceso de M&A.

## Por qué el EBITDA ajustado es el número que define la valoración

En una transacción de M&A, el precio que paga el comprador se calcula en la mayoría de los casos como un múltiplo del EBITDA: Valor empresa = EBITDA ajustado × múltiplo. Si el EBITDA ajustado sube, el precio sube en proporción al múltiplo. En empresas de mercado medio (2-20 M€ de EBITDA), los múltiplos oscilan entre 5× y 10×. Esto significa que cada 100.000 € adicionales de EBITDA ajustado pueden representar 500.000 € a 1 millón de € adicionales en el precio de venta.

El EBITDA reportado (el que aparece en las cuentas anuales) no siempre refleja la capacidad de generación de caja normalizada del negocio. Los ajustes permiten mostrar al comprador el EBITDA "run-rate" que un nuevo propietario experimentaría.

## Categoría 1: Ajustes por gastos personales del propietario (los más comunes en pymes)

En empresas familiares y pymes, es habitual que el propietario incluya como gasto de empresa costes que tienen un componente personal. Estos gastos deben ajustarse hacia arriba (sumarse al EBITDA) porque el comprador no los incurrirá.

**Ajustes típicos**:
- Salario del propietario superior al mercado: si el CEO-propietario cobra 400.000 € anuales y el salario de mercado para ese puesto en una empresa de ese tamaño es 150.000 €, el ajuste es +250.000 €.
- Salarios de familiares que no trabajan en la empresa (o trabajan parcialmente): ajuste por el exceso sobre el salario de mercado.
- Vehículos de empresa de uso personal: el gasto total del vehículo que no tiene uso operativo claro.
- Seguros de vida o planes de pensiones del propietario pagados por la empresa.
- Gastos de representación o viajes con componente personal no relacionado con el negocio.

**Cómo documentarlos**: para cada ajuste, el vendedor debe proporcionar la factura o el contrato que justifica el gasto y una explicación escrita de por qué el comprador no incurrirá en él.

## Categoría 2: Ajustes por partidas no recurrentes

Son gastos o ingresos que ocurrieron en el período analizado pero que no son representativos de la operación normal del negocio.

**Gastos no recurrentes** (se suman al EBITDA):
- Costes de reestructuración: indemnizaciones por despidos que se realizaron puntualmente.
- Litigios y sanciones: gastos legales de un litigio ya resuelto.
- Costes de consultoría para proyectos puntuales (transformación digital, auditorías especiales).
- Daños por un evento extraordinario (incendio, inundación, pandemia).
- Gastos de apertura de una nueva línea de negocio que ya está operativa.

**Ingresos no recurrentes** (se restan del EBITDA):
- Venta de activos no corrientes.
- Subvenciones no recurrentes.
- Ingresos de un cliente puntual con bajo potencial de repetición.

## Categoría 3: Ajustes de normalización operativa

Ajustes que reflejan cambios en la estructura de costes que ya se han producido o que el comprador no asumirá.

- **Alquiler de mercado**: si la empresa opera en un inmueble propiedad del dueño y paga un alquiler por debajo del mercado, el ajuste es negativo (el comprador tendrá que pagar el precio de mercado). Si no paga alquiler, se descuenta el alquiler de mercado.
- **Intereses de deuda que se cancela en el cierre**: en la mayoría de las transacciones de M&A, la deuda financiera se cancela en el cierre. Los intereses de esa deuda son un ajuste al EBITDA.
- **Run-rate de contratos firmados recientemente**: si la empresa firmó un contrato importante 3 meses antes del cierre, el EBITDA trailing twelve months no refleja el impacto anual completo. El ajuste pro-forma incorpora el ingreso anualizado del contrato.

## Cómo presentar el EBITDA ajustado en el data room

El documento de EBITDA ajustado (llamado también "Quality of Earnings" o QoE) debe incluir:
1. EBITDA reportado de los últimos 3 años y LTM (Last Twelve Months).
2. Tabla de ajustes con: nombre del ajuste, importe por año, categoría (propietario / no recurrente / normalización) y justificación en una línea.
3. EBITDA ajustado total por año.
4. Nota sobre cada ajuste con la documentación de soporte.

La regla de oro: solo incluye ajustes que puedas defender con documentación y lógica ante un due diligence riguroso. Los ajustes agresivos sin soporte dañan la credibilidad del vendedor y pueden reducir el múltiplo que el comprador está dispuesto a pagar.

## Lo que quiero que hagas

1. Analiza mis cuentas de los últimos 3 años e identifica los ajustes potenciales clasificados por categoría.
2. Calcula el EBITDA ajustado para cada año y el LTM, con la tabla de ajustes en formato de presentación.
3. Prioriza los ajustes de mayor impacto en la valoración y explica cómo justificar cada uno ante el comprador.
4. Identifica los ajustes negativos que el comprador probablemente querrá incorporar y cómo neutralizarlos.
5. Estima el rango de valoración esperado aplicando múltiplos de mercado al EBITDA ajustado.

Mis datos financieros: [PEGAR CUENTAS RESUMIDAS O DESCRIBIR SITUACIÓN FINANCIERA]
Mi sector y tamaño: [SECTOR, EMPLEADOS, INGRESOS APROXIMADOS]
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Calcular y presentar el EBITDA ajustado para maximizar la valoración en un proceso de M&A',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Derecho de autor en la era de la IA',
                'description'      => 'Quién es el autor del contenido generado con IA, qué protección tiene en España, y cómo registrar y proteger tus obras asistidas por inteligencia artificial.',
                'prompt_content'   => <<<'PROMPT'
Eres un abogado especializado en propiedad intelectual con experiencia en el análisis del marco jurídico de la inteligencia artificial y los derechos de autor en España y la Unión Europea. Tu objetivo es explicarme el estado actual del derecho de autor aplicado al contenido generado con IA, qué protección tienen realmente mis obras cuando las creo con ayuda de herramientas de IA, y qué estrategias prácticas puedo aplicar para proteger mis creaciones y reducir el riesgo legal.

## El problema central: la autoría en las obras generadas con IA

El derecho de autor en España (regulado por el Real Decreto Legislativo 1/1996, Texto Refundido de la Ley de Propiedad Intelectual, TRLPI) establece que el autor de una obra es la persona natural que la crea. Las personas jurídicas pueden ser titulares de derechos pero no autores en sentido estricto. Las IAs no son personas naturales, por lo tanto no pueden ser autoras.

Esto crea una tensión jurídica: si una IA genera un texto, una imagen o una música, ¿quién tiene los derechos? Las posiciones actuales son:

**Posición 1 – La obra generada íntegramente por IA no tiene autor y cae en dominio público**: si el ser humano no aporta una "creación intelectual propia" (el estándar europeo tras la sentencia Painer del TJUE), la obra no es protegible. El prompt "haz una foto de un perro en el parque" no requiere suficiente creatividad humana para proteger el resultado como obra propia.

**Posición 2 – La obra asistida por IA sí puede protegerse si hay contribución creativa humana significativa**: si el ser humano toma decisiones creativas relevantes (selecciona, ordena, edita, combina, corrige), puede ser considerado autor del resultado final. Esta es la posición más extendida en la doctrina española y europea.

**La línea que separa ambas posiciones**: la aportación de creatividad humana. Cuanto más control creativo ejerza el ser humano sobre el proceso y el resultado, más sólida es la protección. Cuanto más automatizada es la generación, más débil.

## El marco europeo: el Reglamento de IA (AI Act) y la propiedad intelectual

El Reglamento UE 2024/1689 (AI Act) no resuelve directamente la cuestión de la autoría, pero impone obligaciones a los proveedores de sistemas de IA generativa (como OpenAI, Anthropic, Midjourney) en relación con el respeto de los derechos de autor en los datos de entrenamiento. Esto no afecta directamente a quien usa la IA para crear, pero sí puede generar responsabilidad para el proveedor del sistema si los datos de entrenamiento incluían obras protegidas sin licencia.

La Directiva de Derecho de Autor en el Mercado Único Digital (DSM, 2019/790) incluye una excepción de text and data mining que permite en ciertos casos usar obras protegidas para entrenar IAs, pero con límites y solo si el titular de la obra no se ha reservado expresamente ese derecho.

## Estrategias prácticas para proteger el contenido creado con IA

**Estrategia 1 – Documenta tu proceso creativo**:
Guarda los prompts que utilizaste, los borradores intermedios, las versiones editadas y las decisiones creativas que tomaste. Este registro demuestra que el resultado final no es la primera salida automática de la IA, sino el producto de un proceso creativo humano iterativo. Un cuaderno de trabajo digital (Notion, Google Docs) con fechas y capturas de pantalla es suficiente.

**Estrategia 2 – Añade contribución creativa significativa**:
No uses el output de la IA directamente. Edita, selecciona, combina con otros elementos, adapta el estilo, añade elementos propios. Cuanto más diferente sea el resultado final del output inicial de la IA, más sólida es tu posición como autor.

**Estrategia 3 – Registra tus obras**:
Aunque en España el registro en el Registro de la Propiedad Intelectual no es constitutivo (la obra está protegida desde su creación), el registro crea una presunción de autoría y fecha cierta muy útil en litigios. El coste es mínimo (tasas de 14-30 €) y el proceso es online a través de SafeCreative o el registro autonómico o nacional.

**Estrategia 4 – Usa licencias claras en tu contrato de encargo**:
Si creas contenido con IA para un cliente, el contrato debe especificar explícitamente: quién es el titular de los derechos sobre el resultado (tú o el cliente), si el cliente puede usar el contenido sin restricciones o con limitaciones, y si el contenido fue creado con IA (algunos clientes tienen políticas internas al respecto o el uso de IA puede ser relevante para la responsabilidad de ambas partes).

**Estrategia 5 – Revisa las condiciones de uso de la herramienta de IA**:
Los proveedores de IA tienen políticas distintas sobre quién tiene los derechos del output. OpenAI (ChatGPT) cede los derechos del output al usuario. Midjourney tiene condiciones más restrictivas en el plan gratuito. Adobe Firefly garantiza que el contenido es seguro desde el punto de vista de los derechos de autor para uso comercial. Lee las condiciones actualizadas de cada herramienta antes de usar el output comercialmente.

## Casos prácticos más frecuentes

**Texto generado con IA para marketing**: si editas y adaptas el texto de forma significativa, tienes protección. Si lo publicas directamente sin cambios, la protección es más débil pero el riesgo práctico es bajo (es difícil que alguien impugne la autoría de un texto de marketing).

**Imagen generada con IA**: es el área de mayor riesgo legal actualmente. Varios tribunales en EE.UU. han negado la protección a imágenes generadas íntegramente con IA (caso Thaler vs. Vidal). En España, la doctrina más cautelosa recomienda que la imagen IA sea solo una base que el diseñador modifica sustancialmente.

**Código generado con IA** (GitHub Copilot, etc.): el código es una obra literaria protegible. Si el programador revisa, adapta y combina el código generado con el suyo propio, la posición de autoría es sólida.

## Lo que quiero que hagas

1. Analiza mi caso de uso específico (tipo de contenido, herramienta de IA usada, uso final) y determina el nivel de protección que tiene el resultado.
2. Proporciona una lista de comprobación para maximizar la protección de mis obras asistidas por IA.
3. Redacta una cláusula de propiedad intelectual para incluir en mis contratos de prestación de servicios cuando el trabajo implica uso de IA.
4. Explica el proceso de registro de la obra y qué documentación debo incluir para que el registro sea eficaz.
5. Identifica los 3 principales riesgos legales de mi actividad y cómo mitigarlos.

Mi caso de uso: [TIPO DE CONTENIDO QUE CREO, HERRAMIENTA DE IA QUE USO, USO FINAL (personal, comercial, para clientes)]
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Proteger legalmente el contenido creado con IA en España: autoría, registro y contratos',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte de producto freemium',
                'description'      => 'Estrategia de soporte cuando tienes miles de usuarios gratuitos y pocos de pago: cómo segmentar, escalar el soporte self-service y convertir tickets en upgrades.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en Customer Success y operaciones de soporte con experiencia en productos freemium SaaS. Tu objetivo es ayudarme a diseñar una estrategia de soporte que sea sostenible cuando la base de usuarios gratuitos es masiva y los recursos del equipo son limitados, maximizando la satisfacción de los usuarios de pago y convirtiendo los contactos de soporte de los usuarios gratuitos en oportunidades de upgrade.

## El reto específico del freemium: volumen vs. valor

En un modelo freemium, la distribución de usuarios es drásticamente asimétrica: el 90-95 % de los usuarios son gratuitos y el 5-10 % son de pago, pero estos últimos generan el 100 % de los ingresos. Si aplicas el mismo nivel de soporte a todos los usuarios, estarás dedicando la mayor parte de los recursos al segmento que no paga, y el coste de soporte por usuario pagante se dispara.

La solución no es ignorar a los usuarios gratuitos: muchos de ellos son futuros clientes de pago, y un mal soporte es la segunda causa más frecuente de que un usuario gratuito nunca convierta (la primera es no activarse). La solución es escalar el soporte de forma inteligente: self-service para la mayoría, soporte humano para los que tienen más valor.

## Pilar 1: Segmentación del soporte por nivel de plan

Define de forma explícita qué canales y SLAs (acuerdos de nivel de servicio) tiene cada segmento:

**Usuarios gratuitos (free tier)**:
- Canal principal: self-service (base de conocimiento, chatbot, comunidad).
- Sin soporte humano directo en horario de trabajo (o con respuesta en 72-96 horas como máximo).
- Chatbot que filtra las preguntas frecuentes antes de generar un ticket humano.
- Email de soporte con respuesta automatizada que dirige a la base de conocimiento y al foro de comunidad.

**Usuarios de plan básico/starter**:
- Email y chat con respuesta en 24-48 horas en días laborables.
- Acceso a la base de conocimiento completa.
- Sin onboarding personalizado.

**Usuarios de plan pro o business**:
- Email y chat con respuesta en 4-8 horas.
- Acceso prioritario a la cola de soporte.
- Sesión de onboarding incluida.
- CSM asignado si superan un umbral de ARR (por ejemplo, >500 €/año).

**Usuarios enterprise**:
- Canal dedicado (Slack Connect, email directo al CSM).
- SLA de respuesta en 1-2 horas.
- Revisiones de cuenta trimestrales.
- Support engineer dedicado para integraciones.

## Pilar 2: Self-service que realmente resuelve problemas

El self-service mal ejecutado no reduce el volumen de tickets: lo aumenta, porque el usuario no encuentra la respuesta y acaba contactando igualmente, frustrado. El self-service efectivo requiere:

**Base de conocimiento estructurada por necesidad del usuario**, no por estructura interna del producto. En lugar de "Configuración > Sección 3 > Subsección B", el artículo se llama "Cómo conectar mi cuenta de Google Workspace" o "Por qué mi email no se envía".

**Artículos que funcionan**: un artículo efectivo tiene un título con la pregunta exacta que el usuario teclearía en Google o en el buscador del help center, el paso a paso numerado con capturas de pantalla o vídeo corto, y la respuesta a las 2-3 variaciones del problema más frecuentes. Analiza las búsquedas sin resultado en tu help center: son los artículos que faltan.

**Chatbot entrenado con el contenido de la base de conocimiento**: usa Intercom, Crisp, Tidio o Zendesk con el componente de IA para que el chatbot sugiera artículos relevantes antes de transferir al agente humano. El objetivo es que el 60-70 % de las conversaciones del chatbot se resuelvan sin intervención humana.

**Comunidad de usuarios**: un foro o comunidad (Discourse, Circle, Slack) donde los usuarios más avanzados responden a los básicos reduce el volumen de soporte y crea engagement. Programa un "Community Champion" entre tus usuarios más activos con beneficios (plan gratuito extendido, acceso anticipado a features).

## Pilar 3: Convierte los tickets de freemium en oportunidades de upgrade

Cada ticket de un usuario gratuito es un punto de contacto donde el usuario está usando el producto, tiene un problema y está enganchado. La mayoría de los equipos de soporte responden, cierran el ticket y no hacen nada más. Los equipos que convierten bien hacen algo diferente:

**Identifica el pain point del ticket con el plan actual**: si un usuario gratuito pregunta "¿cómo puedo añadir más de 3 usuarios a mi cuenta?", el límite de 3 usuarios es un límite del plan gratuito. La respuesta correcta no es solo "el plan gratuito solo permite 3 usuarios". Es: "el plan gratuito tiene un límite de 3 usuarios; si necesitas más, el plan Starter a 29 €/mes incluye hasta 15 usuarios. ¿Te gustaría probarlo gratis 14 días?" y un link directo al upgrade.

**Crea un tag "upgrade opportunity" en el CRM de soporte**: cada ticket que identifica un límite del plan o una funcionalidad de pago se etiqueta. El equipo de ventas o growth revisa estos tickets semanalmente para hacer outreach personalizado.

**Email de seguimiento automático**: 3 días después de cerrar un ticket de un usuario gratuito que preguntó por una feature de pago, envía un email automático con un trail del plan superior.

## Pilar 4: Métricas de soporte freemium

- **Ticket deflection rate**: porcentaje de usuarios que encontraron la respuesta en el self-service sin generar ticket. Objetivo: >60 %.
- **First response time (FRT)** por segmento: cumplimiento del SLA prometido en cada plan.
- **CSAT** (Customer Satisfaction): encuesta de 1 pregunta al cerrar cada ticket. Objetivo: >85 % satisfechos.
- **Conversion rate desde ticket**: % de usuarios gratuitos que abren un ticket y hacen upgrade en los 30 días siguientes. Benchmark: 3-7 %.
- **Cost per ticket**: coste total del equipo de soporte dividido entre el número de tickets. En freemium el objetivo es reducir el coste por ticket, no el número de tickets.

## Lo que quiero que hagas

1. Diseña la matriz de segmentación de soporte para mi producto freemium con los canales, SLAs y exclusiones por plan.
2. Crea el árbol de decisión del chatbot para los 5 problemas más frecuentes de mis usuarios gratuitos.
3. Escribe la plantilla de respuesta para los 3 tipos más comunes de "upgrade opportunity tickets".
4. Define el proceso de revisión semanal de tickets para identificar oportunidades de conversión.
5. Proporciona el plan de los primeros 90 días para implementar el self-service desde cero.

Mi producto es: [DESCRIPCIÓN DEL PRODUCTO FREEMIUM, NÚMERO DE USUARIOS GRATUITOS Y DE PAGO, LÍMITES DEL PLAN GRATUITO]
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar la estrategia de soporte para un producto freemium que convierte tickets en upgrades',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Escalabilidad como freelance: de solo a agencia unipersonal',
                'description'      => 'Cómo pasar de freelance individual a agencia unipersonal: cuándo y cómo subcontratar, qué delegar, cómo mantener calidad y margen.',
                'prompt_content'   => <<<'PROMPT'
Eres un consultor de negocio especializado en el crecimiento de freelancers y microempresas de servicios profesionales. Tu objetivo es ayudarme a hacer la transición de trabajar solo a operar como una agencia unipersonal: cómo saber cuándo es el momento de subcontratar, qué delegar y a quién, cómo mantener la calidad sin estar en todo, y cómo proteger el margen cuando empiezas a pagar a terceros.

## Por qué esta transición es el paso más difícil y más valioso para un freelance

La paradoja del freelance exitoso: cuando tienes más trabajo del que puedes asumir solo, tienes dos opciones. Subir tarifas (lo más fácil y lo primero que deberías hacer) o subcontratar para poder aceptar más volumen. Muchos freelancers rechazan proyectos durante años porque no saben cómo escalar sin perder el control. El resultado: dejan dinero encima de la mesa y se limitan artificialmente.

La agencia unipersonal no es tener empleados a jornada completa. Es tener una red de colaboradores de confianza que trabajas de forma coordinada bajo tu dirección y con tu marca, entregando un producto o servicio que el cliente percibe como tuyo.

## Señal 1: Cuándo es el momento de empezar a subcontratar

**Señal económica**: llevas 3 meses consecutivos rechazando proyectos por falta de capacidad, o tu tasa de utilización supera el 85 % de tu tiempo facturable. En este punto, cada hora que no puedes facturar es ingresos que se van a la competencia.

**Señal de tarifa**: antes de subcontratar, has subido tus tarifas al menos una vez. Si todavía no has subido tarifas y tienes más trabajo del que puedes asumir, el primer paso es subir un 20-30 % y ver si el volumen se ajusta. La subcontratación sin tarifa suficiente destruye el margen.

**Señal de madurez de proceso**: tienes procesos documentados y sabes exactamente cómo haces tu trabajo. Si no puedes explicar tu proceso en un documento de una página, todavía no estás listo para que alguien más lo ejecute.

## Paso 1: Decide qué delegar y qué retener

El modelo de agencia unipersonal sostenible delega la ejecución y retiene la estrategia, el cliente y la calidad.

**Qué retener**:
- La relación con el cliente: tú eres quien vende, quien reporta y quien responde ante el cliente.
- La dirección creativa o estratégica: la visión del trabajo es tuya.
- El control de calidad final: tú revisas antes de entregar.
- El desarrollo de negocio: captación y gestión de cuentas.

**Qué delegar**:
- La ejecución técnica o creativa repetible: redacción de contenido bajo briefing, diseño de piezas específicas, desarrollo de módulos de código, gestión de redes sociales, investigación.
- Las tareas administrativas: facturación, gestión del calendario, seguimiento de proyectos.
- Los trabajos fuera de tu especialidad principal que los clientes te piden: si eres copywriter y un cliente quiere también el diseño, lo subcontratas.

## Paso 2: Construye tu red de colaboradores

**Perfil de colaborador ideal**: no busques a alguien "bueno en general"; busca a alguien que sea excelente en la tarea específica que quieres delegar, que trabaje bien en remoto con briefings escritos, que tenga disponibilidad en los plazos que necesitas y que comparta tu nivel de exigencia en calidad.

**Dónde encontrarlos**: referidos de tu red profesional (la fuente de mayor calidad), LinkedIn filtrando por especialidad y freelance, comunidades específicas de profesionales (Slack de diseñadores, grupos de desarrolladores freelance), plataformas como Toptal para perfiles técnicos de alto nivel o Workana/Guru para perfiles de precio medio.

**El proceso de onboarding de un colaborador**:
1. Encargo de prueba: un proyecto pequeño y de bajo riesgo para evaluar la calidad, la comunicación y el cumplimiento de plazos antes de integrarlo en proyectos de clientes reales.
2. Briefing detallado: documento con el perfil del cliente, el tono, los objetivos, los entregables exactos, los formatos y los criterios de calidad. Cuanto más completo el briefing, menos revisiones necesitarás.
3. Revisión estructurada: define el proceso de revisión antes de empezar. ¿Cuántas rondas de cambios están incluidas? ¿En qué plazo esperas los entregables para tener tiempo de revisar?

## Paso 3: Gestiona el margen en la subcontratación

**La regla del 3 × para servicios profesionales**: si subcontratas algo por 1.000 €, deberías cobrar al cliente al menos 2.500-3.000 € por esa parte del trabajo. El diferencial cubre: tu tiempo de briefing, coordinación y revisión (que es trabajo real), el riesgo y la responsabilidad ante el cliente, y tu margen de negocio.

**Errores de margen más frecuentes**:
- Subcontratar al mismo precio que cobras al cliente: trabajas gratis.
- No incluir tu tiempo de gestión en el precio: el tiempo de coordinar, revisar y reportar al cliente es facturable.
- Subcontratar sin contrato: si el colaborador falla, la responsabilidad ante el cliente es tuya. Firma siempre un acuerdo de colaboración que incluya plazos, calidad, confidencialidad y penalizaciones.

## Paso 4: Mantén la calidad sin estar en todo

**Sistema de calidad en dos capas**:
- Briefing de entrada: si el briefing es completo y claro, el 80 % de los problemas de calidad se evitan antes de empezar.
- Revisión de salida: checklist de calidad para cada tipo de entregable que el colaborador completa antes de entregarte el trabajo y que tú usas para la revisión final.

**Señal de que la calidad está bajo control**: cuando revisas el trabajo del colaborador y haces menos de 3 correcciones de contenido por entrega (solo detalles menores), el proceso está maduro.

## Lo que quiero que hagas

1. Evalúa si estoy en el momento adecuado para empezar a subcontratar basándote en mis datos actuales.
2. Define el mapa de subcontratación: qué tareas delegar primero, qué perfil de colaborador buscar y cuánto debería pagar.
3. Calcula la estructura de precios que necesito para mantener un margen mínimo del 40 % con subcontratación.
4. Crea la plantilla de briefing que usaré con mis colaboradores.
5. Diseña el proceso de onboarding del primer colaborador paso a paso.

Mis datos actuales: [TIPO DE SERVICIO, TARIFA ACTUAL, HORAS FACTURABLES ACTUALES, TIPO DE PROYECTOS QUE RECHAZAS]
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Pasar de freelance individual a agencia unipersonal: subcontratación, margen y gestión de calidad',
                'vote_score'       => 47,
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
