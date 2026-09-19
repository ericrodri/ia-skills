<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills584Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de facilities: cómo comunicar servicios de gestión de infraestructuras a grandes empresas',
                'description'      => 'Diseña una estrategia de marketing B2B para empresas de facilities management y gestión de infraestructuras: propuesta de valor diferenciada, generación de leads en grandes cuentas y comunicación de servicios técnicos complejos.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing B2B para el sector de facilities management, gestión de infraestructuras, mantenimiento de edificios y servicios generales, con experiencia ayudando a empresas de servicios técnicos complejos a comunicar su propuesta de valor a tomadores de decisión en grandes corporaciones, administraciones públicas y promotoras inmobiliarias.

Contexto de mi empresa:
- Tipo de servicios: [mantenimiento de instalaciones / limpieza industrial / seguridad / gestión energética / facility management integral / consultoría de infraestructuras / otro]
- Segmento de clientes objetivo: [grandes corporaciones, pymes, administración pública, sector salud, sector educativo, inmobiliario, data centers]
- Ticket medio de contrato: [cifra aproximada anual o "variable"]
- Ciclo de venta típico: [semanas / meses / más de un año en concursos públicos]
- Canal de ventas actual: [red comercial directa / licitaciones / relaciones / sin canal definido]
- Principal obstáculo para crecer: [diferenciarnos de competidores similares / llegar a los decisores correctos / comunicar el valor de la prevención vs el precio / otro]

---

## Estrategia de marketing B2B para facilities management

### El reto único del marketing en facilities

El facilities management tiene un problema de marketing estructural: es invisible cuando funciona bien y solo visible cuando algo falla. Tu cliente no piensa en ti cuando el aire acondicionado funciona perfectamente; te llama cuando se estropea en pleno agosto con 40 grados.

Este contexto define todo el enfoque de marketing:

El marketing de facilities debe hacer visible el valor del mantenimiento preventivo, no solo el reactivo. Debe posicionarte como socio estratégico, no como proveedor de servicios. Y debe hablar el idioma del CFO (costes, ROI, riesgo) más que el idioma del Director de Instalaciones (técnico y operativo).

### Mapa de decisores en una organización grande

Entender quién toma la decisión de contratar facilities es el primer paso del marketing:

Decisor económico (CEO/CFO/Director General):
- Le importa: coste total de propiedad, riesgo operacional, continuidad del negocio, cumplimiento regulatorio
- Mensaje: "Nuestros contratos de mantenimiento preventivo reducen el coste total de gestión de instalaciones entre un 15% y un 25% frente a la gestión reactiva"
- Canal: eventos de directivos, LinkedIn, propuestas ejecutivas, casos de éxito con ROI cuantificado

Director de Recursos Humanos o Bienestar:
- Le importa: calidad del entorno de trabajo, satisfacción de empleados, productividad
- Mensaje: "Un edificio bien mantenido mejora el bienestar y la productividad del equipo"
- Canal: eventos de RRHH, publicaciones de people analytics, certificaciones de bienestar laboral

Director de Instalaciones o Infraestructuras (influenciador técnico):
- Le importa: fiabilidad de los sistemas, tiempo de respuesta, documentación técnica, cumplimiento normativo
- Mensaje: "Equipo especializado, tiempos de respuesta garantizados por SLA, reporting técnico mensual"
- Canal: visitas de obra, demostraciones técnicas, referencias de otros directores de instalaciones

Dirección de Compras (aprobador del proceso):
- Le importa: precio, garantías, solvencia del proveedor, condiciones contractuales
- Mensaje: precio competitivo, solidez financiera, historial de contratos cumplidos
- Canal: procesos de licitación, catálogos de servicios, certificaciones de calidad

### Contenidos de marketing B2B para facilities

Tipos de contenido que generan leads cualificados en este sector:

Casos de éxito con métricas concretas:
No "mejoramos las instalaciones de una empresa farmacéutica". Sino: "Reducimos los cortes de suministro eléctrico de 12 a 0 al año en planta de producción, evitando pérdidas estimadas en 1,2M€ anuales y cumpliendo requisitos GMP de la industria farmacéutica".

Los números que más impactan en facilities:
- Ahorro en costes de mantenimiento correctivo vs preventivo
- Reducción de averías o incidencias respecto al periodo anterior
- Tiempo medio de respuesta y resolución de incidencias
- Ahorro energético conseguido
- Cumplimiento normativo: certificaciones obtenidas, inspecciones superadas

Guías técnicas para directores de instalaciones:
- "Guía de mantenimiento preventivo obligatorio en edificios de oficinas según normativa española"
- "Checklist de auditoría de instalaciones antes de la inspección técnica"
- "Cómo calcular el ROI de un contrato de facility management integral"
- "Gestión de la eficiencia energética: obligaciones legales para edificios de más de 1.000m²"

Webinars para tomadores de decisión:
- "Continuidad de negocio: cómo el facilities management previene pérdidas millonarias"
- "Criterios ESG en la gestión de infraestructuras: qué piden los inversores y cómo cumplirlo"
- "Tendencias en smart building: tecnología aplicada a la gestión de instalaciones"

### Estrategia LinkedIn para facilities management

LinkedIn es el canal de captación B2B más efectivo en este sector:

Perfil corporativo de empresa:
- Titulares específicos: "Facility Management para corporaciones | +200 edificios gestionados | SLA garantizado"
- Contenido semanal: mix de casos de éxito, artículos técnicos y noticias del sector
- Employer branding: mostrar al equipo técnico, certificaciones, proyectos en marcha

Perfil personal del director comercial o CEO:
- Posicionamiento como experto en el sector: artículos técnicos, opiniones sobre regulación, comentarios en conversaciones del sector
- Conexiones estratégicas: directores de instalaciones, CFOs, directores de compras de las empresas objetivo
- Outreach personalizado: mensajes específicos basados en noticias de la empresa objetivo (nueva sede, expansión, problema publicado)

### Diferenciación cuando el servicio parece commodity

El principal problema del facilities: todos los proveedores dicen lo mismo (calidad, profesionalidad, precio competitivo). Para diferenciarte necesitas:

Especialización sectorial:
En lugar de "facilities para cualquier empresa", ser "el especialista en facilities para data centers" o "el referente en mantenimiento de edificios singulares en Madrid" o "los expertos en gestión de infraestructuras para el sector farma".

Tecnología y digitalización:
- GMAO (Sistema de Gestión de Mantenimiento Asistido por Ordenador) con reporting en tiempo real para el cliente
- App móvil para gestión de incidencias y seguimiento
- Sensores IoT para mantenimiento predictivo
- Dashboard de KPIs de instalaciones disponible para el cliente en tiempo real

Garantías de servicio específicas y medibles:
En lugar de "excelente servicio al cliente": "Tiempo de respuesta garantizado: 2 horas para incidencias críticas, 24 horas para no críticas. Penalización económica si no se cumple."

### Instrucciones para generar

Con el contexto de mi empresa, genera:

1. Propuesta de valor diferenciada por segmento: mensaje principal para cada decisor clave (económico, técnico, compras) con las métricas y argumentos más relevantes para mi tipo de servicio y sector de clientes objetivo.

2. Plan de contenidos para 3 meses: calendario con 12 contenidos (un mínimo de 4 mensuales) específicos para mi sector, con formato, canal de distribución, objetivo de cada contenido (awareness, consideración o decisión) y métricas de éxito.

3. Guión de propuesta ejecutiva: estructura de una presentación de 20 minutos para directivos (CEO/CFO), con los 5 apartados que no pueden faltar, las preguntas que probablemente harán y las respuestas preparadas para cada objeción típica.

4. Estrategia de LinkedIn a 90 días: plan de publicaciones personales para el director comercial (frecuencia, temas, formatos), estrategia de conexiones (perfil del contacto objetivo, mensaje de conexión tipo, secuencia de follow-up), y KPIs para evaluar si está generando leads cualificados.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estrategia de marketing B2B para empresas de facilities management',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Software de gestión de mantenimiento: arquitectura de un GMAO moderno con IA predictiva',
                'description'      => 'Diseña la arquitectura técnica de un sistema GMAO (Gestión de Mantenimiento Asistido por Ordenador) con capacidades de mantenimiento predictivo, IoT y analítica avanzada para gestión de infraestructuras.',
                'prompt_content'   => <<<'EOT'
Eres un arquitecto de software especializado en sistemas de gestión de infraestructuras, IoT industrial y mantenimiento predictivo, con experiencia diseñando plataformas GMAO modernas que combinan gestión operacional clásica con capacidades de analítica avanzada, machine learning para predicción de fallos y integración con sensores y dispositivos de campo.

Contexto del proyecto:
- Tipo de sistema: [GMAO nuevo desde cero / modernización de sistema legacy / módulo de mantenimiento predictivo para GMAO existente]
- Escala: [edificio único / campus multi-edificio / empresa multi-sede nacional / empresa multi-sede internacional]
- Tipos de activos a gestionar: [climatización HVAC / instalaciones eléctricas / ascensores / fontanería / sistemas contra incendios / generadores / todo tipo]
- Stack tecnológico preferido: [Node.js, Python, Java, .NET, otro / no definido]
- Capacidades IoT: [sin sensores / sensores básicos existentes / infraestructura IoT avanzada / quiero diseñarla desde cero]
- Integraciones necesarias: [ERP (SAP, Oracle), BMS (Building Management System), herramientas de ticketing, sistemas de RRHH]

---

## Arquitectura de un GMAO moderno

### Evolución del GMAO: del mantenimiento reactivo al predictivo

**Generación 1 — GMAO básico (registro de averías):**
Sistema de tickets y órdenes de trabajo. Solo registra lo que ya ha fallado. Cero prevención.

**Generación 2 — GMAO con mantenimiento preventivo:**
Calendario de mantenimientos programados. Reduce averías pero no las elimina. Muchos mantenimientos se hacen cuando no son necesarios (desperdicio) o no cuando son necesarios (fallo).

**Generación 3 — GMAO con mantenimiento predictivo (el objetivo actual):**
Sensores IoT monitorean el estado real de los activos en tiempo real. Algoritmos de ML detectan anomalías y predicen fallos antes de que ocurran. Los mantenimientos se realizan cuando el activo realmente los necesita, no por calendario.

### Entidades del dominio GMAO

**Asset (Activo):**
- id, name, asset_code (único), category, subcategory
- location_id (FK), building, floor, zone
- manufacturer, model, serial_number, installation_date
- criticality_level: critical/high/medium/low (determina la prioridad de mantenimiento)
- status: operational/degraded/failed/under_maintenance/decommissioned
- expected_lifespan_years, warranty_expires_at
- parent_asset_id (para jerarquías: chiller → compresor → motor)

**MaintenanceOrder (Orden de trabajo):**
- id, order_number (único, autoincremental con prefijo año)
- asset_id, type: preventive/corrective/predictive/inspection
- priority: critical/high/medium/low
- status: pending/assigned/in_progress/waiting_parts/completed/cancelled
- created_by, assigned_to (técnico), supervisor_id
- scheduled_at, started_at, completed_at
- estimated_hours, actual_hours
- description, diagnosis, work_performed
- parts_used (JSON: [{part_id, quantity, cost}])
- total_cost

**MaintenancePlan (Plan de mantenimiento):**
- id, asset_id, name, description
- frequency_type: calendar_days / operating_hours / cycles / on_condition
- frequency_value (e.g., 90 para cada 90 días)
- estimated_duration_hours
- required_skills, required_tools, spare_parts (JSON)
- last_executed_at, next_due_at (calculado automáticamente)
- is_regulatory (boolean: mantenimientos obligatorios por normativa)

**SensorReading (Lectura de sensor IoT):**
- id, asset_id, sensor_id, sensor_type
- timestamp, value, unit
- is_anomaly (boolean, marcado por el algoritmo de detección)
- anomaly_score (0-1, confidence del algoritmo)

**Alert (Alerta):**
- id, asset_id, alert_type: threshold_exceeded / anomaly_detected / maintenance_overdue / warranty_expiring
- severity: critical/warning/info
- title, description
- triggered_at, acknowledged_at, resolved_at
- acknowledged_by, resolution_notes
- auto_created_work_order_id (si se creó OT automáticamente)

### Arquitectura de sistema para mantenimiento predictivo

**Capa de ingesta IoT:**
- MQTT broker (Mosquitto o HiveMQ) para recibir datos de sensores en tiempo real
- Apache Kafka para buffering y procesamiento de streams de alta frecuencia
- Normalización de datos: conversión a unidades estándar, detección de lecturas inválidas o fuera de rango

**Capa de procesamiento en tiempo real:**
- Apache Flink o Spark Streaming para procesamiento de series temporales
- Detección de anomalías en tiempo real: algoritmos Isolation Forest, LSTM autoencoder
- Evaluación de reglas de umbral: temperatura > X, vibración > Y, consumo > Z
- Publicación de alertas en tiempo real vía WebSocket al frontend

**Capa de analítica y ML:**
- Pipeline de entrenamiento de modelos: datos históricos de sensores + histórico de fallos
- Modelos de predicción de RUL (Remaining Useful Life) por tipo de activo
- Re-entrenamiento periódico con nuevos datos (MLflow para gestión de modelos)
- API de predicción: dado un activo y sus lecturas recientes, probabilidad de fallo en N días

**Capa de API y backend:**
- REST API para operaciones CRUD del GMAO
- GraphQL para consultas complejas del dashboard (órdenes de trabajo con sus activos, costes, etc.)
- WebSocket para alertas en tiempo real y actualizaciones de estado
- Job scheduler para generación automática de órdenes de mantenimiento preventivo

**Capa de frontend:**
- Dashboard de KPIs: disponibilidad de activos, MTBF (tiempo medio entre fallos), MTTR (tiempo medio de reparación), coste de mantenimiento por activo
- Mapa interactivo de instalaciones: estado en tiempo real de cada activo por zona y planta
- Mobile app para técnicos: recibir órdenes de trabajo, registrar intervenciones, escanear QR de activos, fotografías de evidencia
- Panel de predicciones: activos con mayor probabilidad de fallo en próximas 2-4 semanas

### Diseño de API para órdenes de trabajo

Endpoints críticos del módulo de OT:

Creación y asignación:
- POST /work-orders — crear OT manual o automática desde alerta predictiva
- GET /work-orders — listado con filtros: estado, prioridad, técnico, activo, fecha
- PATCH /work-orders/{id}/assign — asignar técnico con validación de disponibilidad y skills
- PATCH /work-orders/{id}/status — transiciones de estado con validación de flujo

Ejecución en campo (API móvil):
- GET /work-orders/{id}/checklist — lista de tareas del plan de mantenimiento
- POST /work-orders/{id}/checklist-items/{item}/complete — completar tarea con notas y foto
- POST /work-orders/{id}/parts — registrar piezas utilizadas (integrado con almacén)
- POST /work-orders/{id}/complete — cerrar OT con resumen, horas reales, próximas acciones

Analítica y reporting:
- GET /assets/{id}/maintenance-history — historial completo con coste acumulado
- GET /reports/mtbf — MTBF por activo, categoría, ubicación y periodo
- GET /reports/cost-analysis — coste de mantenimiento por activo, planta, tipo
- GET /predictions/upcoming-failures — activos con alta probabilidad de fallo próxima

### Instrucciones para generar

Con el contexto de mi proyecto, genera:

1. Diagrama de arquitectura de componentes: descripción estructurada de todos los componentes del sistema (servicios, bases de datos, brokers, motores de ML), sus responsabilidades y cómo se comunican entre sí, con recomendaciones tecnológicas concretas para mi stack.

2. Modelo de datos completo: todas las entidades del dominio adaptadas a mi escala y tipos de activos, con los campos más importantes, tipos de datos, relaciones e índices recomendados para las consultas más frecuentes.

3. Especificación del pipeline IoT: desde la lectura del sensor hasta la creación automática de una orden de trabajo predictiva, describiendo cada paso, las tecnologías recomendadas, los algoritmos de detección de anomalías más adecuados para mis tipos de activos, y cómo gestionar datos missing o sensores con fallos.

4. Plan de implementación por fases: cómo llegar al GMAO predictivo completo en 4 fases, qué entrega cada fase, qué valor aporta al cliente antes de completar el sistema, y qué recursos técnicos se necesitan en cada fase.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 70,
                'use_case'         => 'Diseño de arquitectura técnica para sistemas GMAO con mantenimiento predictivo',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de señalética para edificios corporativos: sistemas de wayfinding con IA',
                'description'      => 'Crea un sistema de señalética y wayfinding coherente para edificios de oficinas, hospitales, centros comerciales o campus universitarios, desde la estrategia visual hasta las especificaciones de producción.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador especializado en señalética, wayfinding y diseño de entornos corporativos, con experiencia creando sistemas de orientación para edificios complejos — oficinas corporativas, hospitales, campus universitarios, centros comerciales, aeropuertos, museos y espacios públicos — donde la navegación intuitiva impacta directamente en la experiencia del usuario y en la operación del espacio.

Contexto del proyecto:
- Tipo de edificio: [oficinas corporativas / hospital / campus universitario / centro comercial / hotel / espacio público / otro]
- Tamaño y complejidad: [edificio único con N plantas / campus multi-edificio / complejo con exterior e interior]
- Número de usuarios diarios: [estimación]
- Perfil de usuarios: [empleados internos / visitantes externos frecuentes / visitantes esporádicos / mezcla / personas con diversidad funcional como caso relevante]
- Estado actual: [edificio nuevo sin señalética / edificio existente con señalética obsoleta / reforma parcial]
- Identidad corporativa existente: [colores, tipografías, logotipo definidos / sin guía de marca / quiero proponer una nueva marca]
- Presupuesto aproximado: [bajo (<10k€) / medio (10-50k€) / alto (>50k€)]

---

## Sistema de wayfinding y señalética corporativa

### Fundamentos del diseño de wayfinding

El wayfinding no es poner carteles. Es diseñar la experiencia de navegación de un espacio: entender cómo las personas toman decisiones de movimiento, dónde necesitan información y en qué formato la pueden procesar mejor.

Los tres principios del buen wayfinding:

1. Información en el momento correcto, no en exceso:
Una persona no necesita saber cómo llegar a la planta 8 cuando está entrando al edificio. Necesita saber dónde está la recepción. La información excesiva en un punto crea parálisis de decisión.

2. Coherencia del sistema, no perfección de cada pieza:
Un sistema de señalética debe funcionar como un todo: el mismo código de color en toda la planta, la misma posición del cartel en cada intersección, la misma jerarquía tipográfica en cada señal. La coherencia reduce la carga cognitiva del usuario.

3. Redundancia calculada en puntos de decisión:
En los puntos donde el usuario puede equivocarse (intersecciones, ascensores, entradas), la señalética debe aparecer antes de la decisión (para anticiparla), en el punto de decisión (para confirmarla) y después de tomarla (para confirmar que se eligió correctamente).

### Tipos de señales y su función

Señales de identificación:
- Identifican un lugar: "Sala de Reuniones A-203", "Urgencias", "Cafetería"
- Características: deben ser legibles a corta distancia (1-3 metros), nombre claro, número o código
- Materiales típicos: placa en pared junto a puerta, letrero en puerta

Señales de orientación:
- Dan contexto de dónde está el usuario: mapas de planta, leyendas de zonas
- Características: visión de conjunto, escala comprensible, punto "usted está aquí" prominente
- Posición: entradas del edificio, vestíbulos de planta, puntos de llegada de ascensores

Señales de dirección:
- Indican hacia dónde ir: "Salida →", "Salas A1-A20 ↑", "Parking ←"
- Características: flecha clara, texto conciso (máximo 3 destinos por señal), alta legibilidad a distancia
- Posición: intersecciones, cambios de dirección, puntos de decisión

Señales regulatorias:
- Normas y restricciones: "Zona de silencio", "Prohibido el paso", "Aforo máximo: 50 personas"
- Características: color de alta visibilidad (rojo/amarillo), texto directo, pictograma si aplica
- Posición: entrada al espacio que regulan

Señales de emergencia y seguridad:
- Rigen por normativa específica (EN ISO 7010 en Europa): colores, pictogramas y tamaños no son una decisión de diseño
- Deben integrarse en el sistema visual sin competir con él
- Siempre en coordinación con el técnico de prevención de riesgos del edificio

### Sistema tipográfico para wayfinding

La tipografía en señalética tiene requisitos distintos a la tipografía editorial:

Criterios de selección:
- Legibilidad a distancia: letras con apertura clara (a, e, c abiertas), diferenciación entre caracteres similares (I, l, 1)
- Funciona en negativo (texto claro sobre fondo oscuro) y positivo (texto oscuro sobre fondo claro)
- Incluye caracteres especiales del castellano (ñ, tildes, ü) y del catalán/euskera si aplica
- Disponible para uso comercial en producción física (licencia adecuada)

Tipografías que funcionan bien en wayfinding:
- Frutiger y sus derivados (la tipografía más usada en hospitales y aeropuertos del mundo)
- Helvetica Neue: clásico y universal, excelente legibilidad
- Johnston (Transport): diseñada para el metro de Londres, referente en wayfinding de transporte
- Unibody 8: diseñada específicamente para señalética, excelente a tamaños pequeños

Jerarquía tipográfica en una señal:
- Destino principal: 36-72px equivalente, negrita o semibold
- Destino secundario o código: 24-36px equivalente, regular
- Información adicional: 18-24px equivalente, light o regular
- Pictogramas: misma altura visual que el texto principal

### Sistema de color en wayfinding

Estrategia de codificación por color:

Opción 1 — Color funcional (por tipo de información):
- Un color para todas las señales de dirección
- Otro para identificación de salas
- Otro para servicios (baños, ascensores, salidas)
- Ventaja: coherente con la identidad corporativa, profesional

Opción 2 — Color por zona o planta:
- Cada planta o ala del edificio tiene un color propio
- Ventaja: muy intuitivo en edificios grandes con muchas plantas o alas similares
- Desventaja: puede entrar en conflicto con identidad corporativa

Opción 3 — Sistema mixto (el más común en edificios complejos):
- Color corporativo para el sistema base
- Colores secundarios para identificación de zonas dentro del sistema

Consideraciones de accesibilidad en el color:
- Contraste mínimo WCAG AA: 4,5:1 para texto normal, 3:1 para texto grande
- No basar la información únicamente en el color: siempre acompañar con texto o forma
- Considerar daltonismo: evitar combinaciones rojo-verde como único diferenciador

### Especificaciones de producción

Materiales más comunes en señalética corporativa:

Dibond (aluminio composite):
- Ligero, rígido, excelente para impresión digital
- Ideal para: placas de pared, señales colgantes
- Acabado: mate suele ser más elegante que brillante, menos reflejos

Acero inoxidable:
- Premium, durabilidad alta, aspecto sofisticado
- Ideal para: recepción, zonas de representación
- Más caro que Dibond pero mayor durabilidad

Acrílico (metracrilato):
- Versatilidad de formas y colores, permite retroiluminación
- Ideal para: señales con iluminación interior, zonas modernas
- Cuidado con rayones en zonas de alto tráfico

Vinilo sobre pared:
- Bajo coste, fácil de cambiar
- Ideal para: directorios, información temporal, edificios con mucho cambio de ocupantes
- No válido como solución permanente en zonas premium

### Instrucciones para generar

Con el contexto de mi proyecto, genera:

1. Estrategia de wayfinding: análisis de los flujos de movimiento principales en mi tipo de edificio, identificación de los puntos de decisión críticos donde la señalética es más necesaria, y jerarquía de destinos (qué debe señalizarse siempre, qué es secundario).

2. Sistema de señales necesarias: inventario de todos los tipos de señales que necesita mi edificio (identificación, orientación, dirección, regulatoria, emergencia), con descripción de cada tipo, cantidad estimada y posición recomendada.

3. Brief de identidad visual del sistema: recomendación de tipografía principal y secundaria para señalética, sistema de color (primario + zona + funcional), tamaños mínimos recomendados para cada tipo de señal, y ejemplos de jerarquía tipográfica en cada formato.

4. Guía de especificaciones de producción: materiales recomendados para cada tipo de señal según mi presupuesto y tipo de edificio, métodos de fijación, consideraciones de mantenimiento y reposición, y checklist de accesibilidad que debe cumplir el sistema final.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseño de sistemas de señalética y wayfinding para edificios corporativos',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta de servicios de facilities management: cómo ganar contratos de gran cuenta',
                'description'      => 'Desarrolla la estrategia comercial para ganar contratos de facility management en grandes empresas: identificación de oportunidades, gestión del proceso de compra y presentación de propuestas que justifiquen el valor sobre el precio.',
                'prompt_content'   => <<<'EOT'
Eres un director comercial experto en venta de servicios B2B complejos en el sector de facilities management, mantenimiento de instalaciones y gestión de infraestructuras, con experiencia ganando contratos de gran cuenta en corporaciones donde el ciclo de venta es largo, los decisores son múltiples y la diferenciación por precio es una trampa que debes evitar.

Contexto de mi empresa comercial:
- Tipo de servicios que vendo: [FM integral / mantenimiento de instalaciones / limpieza industrial / seguridad / gestión energética / otro]
- Tamaño típico de los contratos que buscas: [menos de 50k€ anuales / 50-200k€ / más de 200k€ / contratos de varios millones]
- Proceso de compra del cliente: [decisión directa / proceso de licitación privada / concurso público / mixto]
- Equipo comercial actual: [solo yo / equipo pequeño 2-5 / equipo con back-office de ofertas]
- Principal obstáculo actual: [llegar a los decisores / diferenciarse del competidor que tiene el contrato actual / ganar sin bajar precio / gestionar el tiempo largo de los ciclos]
- Sector de clientes objetivo: [industria / inmobiliario / sector público / salud / retail / mixto]

---

## Estrategia comercial para contratos de facilities de gran cuenta

### La realidad del proceso de compra en facilities de gran cuenta

Antes de hablar de cómo vender, necesitas entender cómo compran:

El proceso de compra típico en una gran corporación tiene 4 fases:

Fase 1 — Reconocimiento del problema (6-18 meses antes de la decisión):
El cliente empieza a tener insatisfacción con el proveedor actual o anticipa una necesidad. Puede que ni siquiera lo verbalice aún. Las empresas que ganaron el contrato suelen haber iniciado la relación en esta fase.

Fase 2 — Definición de criterios (3-6 meses antes):
El cliente define internamente qué busca. Aquí es donde puedes influir en los criterios si tienes acceso. Si te llaman por primera vez en esta fase, estás llegando tarde pero no demasiado.

Fase 3 — Proceso formal de selección (1-3 meses):
RFP, visitas, negociación, propuestas económicas. Si solo entras aquí, eres uno más. Ganar en esta fase requiere haber hecho los deberes antes.

Fase 4 — Negociación y cierre:
Selección del finalista, negociación de condiciones, formalización del contrato.

La implicación estratégica: el trabajo comercial en facilities no es "buscar RFPs abiertas". Es cultivar relaciones con 12-24 meses de antelación para estar presente cuando surge la oportunidad.

### Identificación y priorización de cuentas objetivo

No todos los prospectos merecen el mismo tiempo. Criterios para priorizar:

Criterio 1 — Potencial económico:
- ¿Cuántos metros cuadrados de instalaciones tienen?
- ¿Cuántos empleados? (correlaciona con servicios de limpieza, restauración, seguridad)
- ¿Cuántos activos técnicos? (climatización, instalaciones eléctricas)
- ¿Tienen múltiples sedes? (potencial de contrato marco)

Criterio 2 — Receptividad al cambio:
- ¿Cuánto tiempo llevan con el proveedor actual? (más de 5 años = alta resistencia al cambio, pero también posible saturación)
- ¿Ha habido incidentes públicos con el proveedor actual? (queja en redes, accidente reportado)
- ¿La empresa está en proceso de transformación? (nueva sede, fusión, reorganización = ventana de oportunidad)
- ¿Han anunciado proyectos de sostenibilidad o ESG? (oportunidad para propuestas de gestión energética)

Criterio 3 — Acceso a decisores:
- ¿Tienes contacto en la empresa? ¿A qué nivel?
- ¿Hay conexión a través de tu red de contactos?
- ¿Tienen eventos donde puedas aparecer?

Criterio 4 — Adecuación a tu propuesta de valor:
- ¿El cliente valora lo que tú ofreces bien? (tecnología, especialización, sostenibilidad)
- ¿Tienes referencias similares en el mismo sector?

### El sistema de cultivo de relaciones de largo plazo

Las empresas de facilities que sistemáticamente ganan grandes contratos tienen un proceso para cultivar relaciones antes de que haya RFP:

Paso 1 — Mapeo del comité de compra:
Identifica todos los decisores e influenciadores: Director de Instalaciones, CFO, Director de Compras, Director de RRHH si afecta al bienestar. Para cada uno: ¿qué le preocupa? ¿cuáles son sus KPIs? ¿qué le haría quedar bien con su jefe?

Paso 2 — Aportación de valor antes de vender:
- Compartir un informe del sector que le sea útil: "He visto que están inaugurando nueva sede — aquí hay una guía de los errores más comunes en la puesta en marcha de instalaciones en edificios nuevos"
- Invitar a eventos sectoriales donde estarán otros directivos de referencia
- Presentarle a alguien de su interés de tu red

Paso 3 — Conversaciones de discovery (no ventas):
- "¿Cómo estáis gestionando X actualmente? ¿Qué desafíos tenéis?"
- "¿Qué es lo que os gustaría mejorar en la gestión de vuestras instalaciones si pudierais?"
- Escucha. No vendas. Tu objetivo es entender el problema real, no presentar tu catálogo.

Paso 4 — Propuesta de valor personalizada cuando el momento llega:
Cuando surge la oportunidad, ya sabes exactamente qué le duele y puedes proponer la solución específica para su problema real, no una propuesta genérica de catálogo.

### Cómo ganar en procesos de licitación

Cuando el proceso ya es formal, aquí están las palancas para ganar:

Antes de presentar la propuesta:
- Visita las instalaciones en persona antes de enviar el precio: te da información diferencial sobre el estado real y muestra seriedad
- Haz preguntas inteligentes durante el periodo de consultas de la RFP: demuestra que entiendes el negocio más allá del pliego
- Intenta reunirte con el Director de Instalaciones informalmente: quien tiene que vivir con el proveedor tiene más influencia de la que parece en papel

La propuesta que diferencia:
- Sección de "Entendimiento de vuestras necesidades": demuestra que escuchaste en las visitas, identifica los 3 retos principales que has observado
- Propuesta de solución específica a esos retos, no catálogo genérico
- Casos de éxito en el mismo sector o con instalaciones similares: con métricas concretas
- SLA con penalizaciones reales: los clientes sofisticados quieren saber que confías en tu servicio
- Plan de transición detallado: el mayor miedo en el cambio de proveedor es la disrupción operacional — elimínalo

El precio: cómo no perder por precio sin tirar el margen:
- Nunca presentes solo precio/hora o precio/m²: presenta el coste total de propiedad frente a tu propuesta
- Desglosa qué incluye y qué no incluye: transparencia que el competidor más barato no tiene
- Si te piden bajar: ofrece reducir alcance, no margen. "Puedo llegar a ese precio si sacamos X del alcance, pero entonces el riesgo de Y recae en vuestro equipo"
- Última oferta: si quieres ganar y debes bajar, hazlo una vez y deja claro que es tu oferta final

### Instrucciones para generar

Con el contexto de mi situación comercial, genera:

1. Mapa de cuentas objetivo: criterios de scoring específicos para mi tipo de servicio y sector, con una plantilla para evaluar cada cuenta potencial, y un proceso para identificar señales de compra inminente en mis cuentas prioritarias.

2. Guión de primera llamada a decisor frío: estructura de 5-7 minutos para conseguir una primera reunión con un Director de Instalaciones o CFO que no me conoce, con el gancho de apertura, las preguntas que abren la conversación y el cierre para la reunión.

3. Propuesta ganadora: estructura completa de una propuesta de servicios para un contrato de facilites de mediana cuenta (3-5 páginas de propuesta técnica + propuesta económica), con los apartados en el orden correcto, qué incluir en cada uno y los errores más comunes que hacen perder licitaciones.

4. Protocolo de seguimiento post-propuesta: qué hacer cuando el cliente dice "lo estudiaremos", cuándo y cómo hacer seguimiento sin resultar agresivo, cómo gestionar un "no" para mantener la relación de cara al futuro, y cómo pedir feedback para mejorar tu tasa de conversión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Estrategia comercial para ganar contratos de facilities management en gran cuenta',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management de software para gestión de edificios: roadmap y priorización con IA',
                'description'      => 'Diseña el roadmap de un producto de software para gestión de infraestructuras o edificios inteligentes: priorización de features, gestión de stakeholders técnicos y empresariales, y métricas de éxito en B2B.',
                'prompt_content'   => <<<'EOT'
Eres un product manager con experiencia en software B2B para el sector de infraestructuras, smart building, facility management y gestión energética, donde los clientes son empresas con procesos operacionales críticos, los stakeholders son múltiples (técnicos y directivos), y el precio del error es alto porque el software gestiona instalaciones de las que depende la operación del negocio.

Contexto del producto:
- Tipo de producto: [GMAO / BMS/BAS (Building Management System) / plataforma de gestión energética / software de tickets e incidencias / app para técnicos de campo / SaaS multi-sede / otro]
- Etapa del producto: [idea / MVP con primeros clientes / producto maduro con base instalada / scaling]
- Segmento de clientes: [edificios de oficinas / industria / sector público / hospitales / centros comerciales / mixto]
- Tamaño del equipo de producto y desarrollo: [solo yo (PM + dev) / equipo pequeño 3-7 / equipo mediano 8-20]
- Principal reto de producto ahora: [no sé qué construir primero / los clientes piden todo y no puedo priorizar / tenemos deuda técnica enorme / necesito crecer la base de clientes sin perder a los actuales]
- Métrica de negocio más importante: [retención de clientes (NRR) / nuevas licencias / expansión dentro de cuentas existentes / reducción del churn]

---

## Product management para software de gestión de infraestructuras

### Las particularidades del B2B de infraestructuras

El PM de software para infraestructuras trabaja en un contexto con restricciones únicas que hacen que las metodologías estándar de producto requieran adaptación:

Consecuencias operacionales del bug o downtime:
Un bug en una app de consumo hace que el usuario se frustre. Un bug en un software que controla la climatización de un hospital puede hacer que la temperatura de una UCI salga de rango. Esto cambia radicalmente los procesos de calidad, el diseño de rollbacks y la comunicación de incidencias.

El usuario no es el comprador:
El técnico de mantenimiento que usa el software en campo tiene necesidades completamente distintas al CFO que decidió comprarlo. El Director de Instalaciones que ve los informes tiene prioridades distintas a ambos. El PM debe diseñar para todos y comunicar el valor a cada uno.

Los contratos son largos y la migración es cara:
Los clientes de este software no cambian de proveedor fácilmente: tienen años de datos, integraciones con ERP, y procesos operacionales construidos alrededor del software. Esto significa que la retención es la métrica más importante y que el onboarding de nuevos clientes es largo y costoso.

El discovery es difícil porque el cliente no puede parar la operación:
No puedes hacer un "test en producción" con un cliente cuando el sistema gestiona instalaciones críticas. El discovery debe hacerse de forma que no interfiera con la operación del cliente.

### Framework de priorización para producto B2B de infraestructuras

En este tipo de producto, el modelo RICE estándar necesita matices:

**R — Reach (Alcance):**
¿A cuántos clientes (no usuarios finales) impacta esta feature? En B2B de infraestructuras, "100 técnicos de un cliente" pesa diferente a "10 clientes distintos".

**I — Impact (Impacto):**
¿Cuánto impacta en la métrica de negocio clave? En este sector:
- Reduce churn: muy alto impacto (el costo de perder un cliente es enorme)
- Permite upsell dentro de cuenta: alto impacto
- Acelera onboarding de nuevos clientes: medio-alto
- Mejora experiencia del técnico de campo: medio (reduce fricción, pero no retiene clientes directamente)

**C — Confidence (Confianza):**
¿Qué evidencia tienes de que esta feature realmente importa?
- Validado en múltiples entrevistas de cliente: alta confianza
- Pedido por el cliente más grande: media confianza (puede ser un outlier)
- Intuición del equipo: baja confianza
- Feature de un competidor que nos quita clientes: alta confianza

**E — Effort (Esfuerzo):**
En software para infraestructuras, el esfuerzo no es solo desarrollo:
- ¿Requiere integración con sistemas del cliente? (SAP, BMS, sensores IoT): multiplica por 3
- ¿Requiere certificación o cumplimiento normativo?: multiplica por 2
- ¿Requiere cambio de proceso en el cliente?: añade coste de implementación

**Factor adicional — Riesgo operacional:**
Features que impactan en la gestión de instalaciones críticas tienen un factor de riesgo que debe ralentizar el desarrollo (más testing, más rollout gradual) aunque tengan alto RICE.

### Gestión del backlog en B2B con múltiples stakeholders

El reto más común: el cliente A pide X, el cliente B pide Y, el equipo de ventas quiere Z para cerrar un nuevo contrato, y el equipo técnico dice que antes hay que pagar deuda técnica.

Framework de categorización del backlog:

Categoría 1 — Compromisos contractuales (hacer sí o sí):
Features prometidas al firmar el contrato, requisitos regulatorios que entran en vigor, SLAs de soporte. Estas entran en el sprint sin debate.

Categoría 2 — Retención de clientes en riesgo (hacer pronto):
Features cuya ausencia está causando insatisfacción en clientes con alto NPS negativo o que han pedido reunión de seguimiento inusual. Estas tienen prioridad sobre el crecimiento.

Categoría 3 — Crecimiento (hacer cuando puedas):
Features que aceleran la venta a nuevos clientes o la expansión en cuentas existentes. Importan, pero perder un cliente existente cuesta más que tardar un mes más en cerrar uno nuevo.

Categoría 4 — Deuda técnica e infraestructura (hacer con disciplina):
Reservar el 20-30% de la capacidad del equipo para deuda técnica. No negociar este porcentaje con negocio. Documentar el coste del no hacerla.

Categoría 5 — Exploración e innovación (hacer con criterio):
Features nuevas no pedidas por nadie pero que el equipo cree que son el futuro. Solo cuando las categorías 1-3 están cubiertas o de forma deliberada como bet estratégico.

### Métricas de producto para software B2B de infraestructuras

Las métricas que más importan:

Salud del negocio:
- NRR (Net Revenue Retention): la métrica más importante. >100% significa que los clientes actuales generan más ingresos que el año pasado. Objetivo mínimo: 95%.
- Churn de contratos: cuántos clientes no renuevan. Cada renovación perdida es costosísima.
- Time to Value: cuánto tarda un cliente nuevo en ver el primer valor real del software

Salud del producto:
- DAU/MAU por perfil de usuario (técnico, supervisor, directivo): ¿quién usa el producto y cuánto?
- Feature adoption: ¿qué % de clientes usa las features más importantes?
- Tickets de soporte por cliente: proxy de usabilidad y estabilidad

Señales tempranas de churn:
- Reducción de logins en los últimos 30 días
- Aumento de tickets de soporte sin resolución satisfactoria
- Pedido de reunión por parte del cliente sin iniciativa previa
- Cambio de interlocutor principal en el cliente (nuevo Director de Instalaciones que no tiene vínculo con el producto)

### Instrucciones para generar

Con el contexto de mi producto y equipo, genera:

1. Framework de priorización personalizado: adaptación del modelo RICE a mi tipo de producto y segmento de clientes, con los criterios de puntuación específicos para mi contexto, y una plantilla para evaluar el backlog actual con ejemplos.

2. Proceso de discovery B2B sin interrumpir al cliente: cómo hacer entrevistas de usuario con técnicos de campo sin parar su trabajo, cómo conseguir acceso a instalaciones para observación contextual, cómo estructurar los comités de clientes (CAB - Customer Advisory Board) para capturar inputs de alto valor.

3. Roadmap de los próximos 6 meses: dado mi reto principal de producto y mi métrica clave, propón una estructura de roadmap trimestral con los temas de producto (no features específicas) que deberían dominar cada trimestre, y cómo comunicar ese roadmap a clientes, al equipo de ventas y al equipo de desarrollo de forma diferenciada.

4. Plan de gestión del churn: cómo identificar clientes en riesgo 90 días antes de la renovación, qué acciones tomar en cada fase (120 días antes, 90, 60, 30), cómo involucrar al equipo de producto en las renovaciones en riesgo, y qué features tienen mayor correlación con la retención según lo que describes de tu producto.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Product management y roadmap para software B2B de gestión de infraestructuras',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'RRHH en empresas de mantenimiento e infraestructuras: gestión de técnicos de campo con IA',
                'description'      => 'Diseña procesos de recursos humanos adaptados a empresas de mantenimiento e infraestructuras: selección de técnicos especializados, gestión de turnos y guardias, formación continua y retención en un mercado de alta demanda.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en recursos humanos para empresas de servicios técnicos, mantenimiento de instalaciones y facility management, con experiencia gestionando equipos de técnicos de campo donde la selección es difícil por escasez de perfiles especializados, la gestión de turnos es compleja, y la retención compite con un mercado de alta demanda donde los buenos técnicos tienen múltiples ofertas.

Contexto de mi empresa:
- Tipo de empresa: [empresa de mantenimiento eléctrico / climatización / FM integral / limpieza industrial / seguridad / otro]
- Tamaño de la plantilla técnica: [menos de 20 técnicos / 20-100 / más de 100]
- Perfil de técnicos más demandado: [electricistas, técnicos de climatización, fontaneros, técnicos de BMS, técnicos polivalentes]
- Principal reto de RRHH: [no encontramos técnicos cualificados / alta rotación / costes salariales escalando / gestión de guardias y disponibilidad / accidentes laborales]
- Modalidad de trabajo: [técnicos de campo 100% / mixto campo y taller / itinerante nacional / otro]
- Sistema de turnos actual: [estándar 8h / turnos rotativos / guardias 24/7 / flexible]

---

## Gestión de recursos humanos en empresas de servicios técnicos

### El contexto único del RRHH para técnicos de campo

El técnico de mantenimiento trabaja en condiciones que ningún otro perfil experimenta: solo, en instalaciones del cliente (no las propias), con equipos que deben mantener que cambian en cada servicio, con presión de tiempo alta (el cliente quiere el aire acondicionado funcionando ya), y con la responsabilidad de no cometer errores que pueden tener consecuencias físicas (riesgo eléctrico, gases refrigerantes, alturas).

Esto crea un perfil de empleado con necesidades específicas:
- Alta autonomía y capacidad de toma de decisiones en campo sin supervisión directa
- Necesidad de sentirse respaldado por la empresa cuando algo sale mal en el cliente
- Valoración de la organización logística (herramientas, vehículo, repuestos) porque afecta directamente a su trabajo diario
- Alta sensibilidad a la percepción de trato injusto (especialmente en asignación de guardias y de trabajos difíciles)

### Selección y atracción de técnicos especializados en mercado escaso

El problema de encontrar técnicos cualificados:
El mercado de técnicos de mantenimiento especializados en España tiene más demanda que oferta, especialmente en electricidad industrial, climatización (RITE), BMS y automatización. Las empresas compiten no solo con otras empresas de mantenimiento sino con el propio cliente final que prefiere internalizar el mantenimiento.

Canales de selección que funcionan en este sector:

Canal 1 — Escuelas y formación profesional:
- Establecer convenios con centros de FP de electricidad, climatización y automatización
- Programas de prácticas que se convierten en contratación directa: el técnico conoce la empresa antes de decidir
- Presencia en ferias de empleo de centros de FP: un banner y un técnico de tu empresa que explique cómo es el trabajo tiene más impacto que un anuncio online

Canal 2 — Red de empleados (referidos):
- Los mejores técnicos conocen a otros buenos técnicos
- Programa de referidos con bonus real (300-600€ al cabo de 6 meses del referido) tiene retorno enormemente positivo
- El técnico que refiere también actúa como embajador: el candidato llega con información real sobre la empresa

Canal 3 — Presencia en comunidades profesionales:
- Grupos de WhatsApp y Telegram de técnicos especializados (existen y son activos)
- Foros especializados: electricidad industrial, climatización, automatización
- LinkedIn para técnicos senior o con aspiraciones de supervisión

Canal 4 — Búsqueda activa de candidatos pasivos:
- Técnicos en empresas competidoras o en clientes que internalizan mantenimiento
- Mensaje de apertura: no "tenemos una oferta", sino "¿estarías abierto a conocer un proyecto interesante?"

Qué buscar en la selección más allá del certificado:
- Actitud ante el trabajo en condiciones adversas: pregunta sobre situaciones reales pasadas
- Capacidad de comunicación con el cliente: el técnico representa a tu empresa en el cliente
- Autonomía y resolución de problemas: cómo ha resuelto una avería atípica sin manual
- Actitud ante la formación continua: la tecnología evoluciona, necesitas técnicos que quieran aprender

### Gestión de guardias y disponibilidad: el mayor punto de tensión

Las guardias son el principal generador de conflicto laboral en empresas de FM y mantenimiento:

Principios para una gestión justa de guardias:

Transparencia absoluta en la asignación:
- Calendario de guardias publicado con 4-6 semanas de antelación como mínimo
- Rotación documentada y visible para todos: nadie debería tener dudas de que el sistema es justo
- Sistema de intercambio de guardias entre técnicos: transparente y registrado

Compensación que compense de verdad:
- Distinguir entre guardia de disponibilidad (teléfono encendido fuera de horario) y guardia de activación (llamada atendida)
- La disponibilidad se paga aunque no haya llamada: el técnico no puede beber vino tranquilo el sábado
- La activación se paga además, con diferencial para nocturnas y festivos
- Descanso compensatorio obligatorio: no puede haber guardia el viernes noche y jornada normal el sábado

Límites que protegen la salud:
- Máximo de guardias por semana por técnico
- Nunca dos guardias nocturnas seguidas sin descanso intermedio
- Protocolo de renuncia de guardia por emergencia personal: qué hacer, a quién llamar

### Formación continua y certificaciones técnicas

El técnico de mantenimiento necesita formación continua por dos razones:
1. La tecnología evoluciona: nuevos sistemas de climatización, nuevas normativas eléctricas, nuevos protocolos de seguridad
2. Las certificaciones son obligatorias y tienen caducidad: RITE para climatización, habilitación eléctrica, manipulación de gases fluorados (F-Gas)

Sistema de formación para técnicos de campo:

Formación obligatoria y de cumplimiento:
- Calendario de renovación de certificaciones con 6 meses de antelación
- La empresa paga siempre la formación obligatoria (no puede ser a cargo del técnico)
- Registro centralizado de certificaciones y fechas de caducidad
- Comunicación proactiva: el técnico no debe preocuparse de recordar sus fechas de renovación

Formación de desarrollo profesional:
- Presupuesto de formación por técnico (500-1.000€ anuales como referencia)
- Catálogo de formaciones disponibles: el técnico elige según sus intereses dentro del catálogo
- Reconocimiento de la formación en el plan de carrera: más formación = más opciones de crecimiento
- Formación entre compañeros: los técnicos senior forman a los junior en aspectos prácticos que no se aprenden en escuela

### Prevención de riesgos laborales en empresas de mantenimiento

El sector de mantenimiento e infraestructuras tiene una de las tasas de accidentalidad más altas de la economía española. La PRL no es solo obligación legal: es un elemento de RRHH que impacta en la atracción y retención de talento.

Elementos clave de una cultura de seguridad real:
- El responsable de PRL tiene poder real para detener trabajos inseguros sin consecuencias para él
- Los accidentes se investigan para aprender, no para buscar culpables (el técnico que tuvo el accidente no debería tener miedo de reportarlo)
- Los EPIs son adecuados para el trabajo real, no los más baratos que cumplen el mínimo legal
- La seguridad es tema de reunión mensual del equipo, no solo de la formación anual obligatoria

### Instrucciones para generar

Con el contexto de mi empresa, genera:

1. Plan de captación de técnicos para los próximos 6 meses: canales prioritarios para mi tipo de perfil y zona geográfica, mensaje de oferta de empleo diferenciado (qué decir para atraer a los mejores sobre las empresas competidoras), proceso de selección simplificado (máximo 2 fases para no perder candidatos en el camino).

2. Sistema de gestión de guardias: modelo de rotación y compensación adaptado a mi tamaño de equipo y tipos de guardia, plantilla de calendario de publicación, protocolo de intercambios y gestión de renuncias de guardia por causa mayor.

3. Plan de formación y certificaciones a 12 meses: inventario de certificaciones necesarias por perfil técnico, calendario de renovaciones para el próximo año, presupuesto estimado por técnico, y sistema de seguimiento para que ninguna certificación caduque sin renovar.

4. Protocolo de onboarding para técnicos: plan de los primeros 90 días de un nuevo técnico en campo, con qué aprende en cada semana (seguridad, sistemas del cliente, procesos de la empresa), quién le acompaña, cómo se evalúa si está listo para ir solo, y cómo pedirle feedback sobre el proceso.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestión de personas y técnicos de campo en empresas de mantenimiento e infraestructuras',
                'vote_score'       => 26,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Control financiero en empresas de facilities: rentabilidad por contrato y gestión de costes',
                'description'      => 'Diseña el sistema de control financiero para empresas de facilities management: análisis de rentabilidad por contrato, control de costes de materiales y mano de obra, y previsión financiera para un negocio con contratos de larga duración.',
                'prompt_content'   => <<<'EOT'
Eres un consultor financiero especializado en empresas de servicios B2B con contratos de larga duración, con experiencia ayudando a empresas de facility management, mantenimiento de instalaciones, limpieza industrial y servicios generales a construir sistemas de control financiero que les permitan saber con exactitud si cada contrato es rentable, identificar desviaciones antes de que se vuelvan pérdidas y tomar decisiones de precios con datos reales.

Contexto financiero de mi empresa:
- Tipo de empresa: [FM integral / mantenimiento eléctrico / climatización / limpieza / seguridad / polivalente]
- Número de contratos activos: [menos de 10 / 10-50 / más de 50 / más de 200]
- Duración típica de los contratos: [1 año / 2-3 años / más de 3 años]
- Facturación anual: [menos de 500k€ / 500k-2M€ / 2-10M€ / más de 10M€]
- Principal problema financiero: [no sé si cada contrato gana o pierde dinero / los costes de mano de obra se disparan / no tengo visibilidad de la tesorería futura / pierdo contratos por precio pero no sé si tengo razón en perderlos]
- Herramientas actuales: [Excel / ERP (cuál) / software de gestión de mantenimiento con módulo financiero / nada]

---

## Control financiero para empresas de facilities management

### Por qué el control financiero en facilities es diferente

Las empresas de facilities tienen un modelo de negocio con características financieras únicas que hacen que los modelos de control financiero estándar sean insuficientes:

Ingresos predecibles, costes variables:
Los contratos de FM tienen ingresos fijos mensuales (cuota de mantenimiento) o cuasi-fijos. Pero los costes son altamente variables: una avería grave en un contrato puede convertir un mes rentable en pérdidas. El control financiero debe separar los costes de contrato base (predecibles) de los correctivos (variables e impredecibles).

Contratos con margen que se erosiona con el tiempo:
Un contrato firmado hace 3 años a un precio que era rentable puede ser deficitario hoy por:
- Subida del coste de la mano de obra (convenio colectivo)
- Envejecimiento de las instalaciones (más averías)
- Inflación de materiales sin cláusula de revisión de precios en el contrato
- Aumento del alcance sin aumento de precio

La supervisión financiera de contratos en vigor es tan importante como el control de los nuevos.

Tesorería con cobro periódico y pago irregular:
Cobras la cuota mensual el día 30 de cada mes. Pero pagas nóminas el 25, materiales cuando llegan facturas y al proveedor externo cuando le pagas. Gestionar el timing de la tesorería es crítico.

### Análisis de rentabilidad por contrato: el modelo que funciona

El único modelo útil para un negocio de FM es analizar la rentabilidad contrato a contrato, no solo el negocio en su conjunto.

Estructura del P&L por contrato:

Ingresos del contrato:
+ Cuota mensual de mantenimiento preventivo
+ Facturación de correctivos (si está pactado como adicional)
+ Proyectos adicionales realizados en el año
= Ingresos totales del contrato

Costes directos:
- Coste de mano de obra directa: horas reales de técnicos dedicados × coste/hora empresa
- Materiales consumidos: piezas, fungibles, herramientas específicas del contrato
- Subcontrataciones: trabajos que externalizas a otros proveedores para ese contrato
- Desplazamientos: km y dietas de técnicos en ese contrato
= Margen bruto del contrato

Costes indirectos asignados:
- Proporción de la estructura: coordinador, director técnico, administración
- Proporción de seguros, vehículos, EPIs
- Amortización de herramientas compartidas
= Margen neto del contrato (EBITDA del contrato)

El coste hora real de un técnico:
El error más común es usar el salario bruto del técnico como coste de referencia. El coste real incluye:
- Salario bruto: 1.800€/mes
- Seguridad Social empresa (aprox. 30%): 540€/mes
- Vacaciones y festivos: el técnico trabaja ~220 días al año de 220 posibles hábiles
- Permisos, bajas, formación: rest del tiempo disponible
- Coste hora real: (1.800 + 540) × 12 meses / (220 días × 8 horas) = 15,9€/hora

Pero el técnico no está el 100% del tiempo productivo en contratos de cliente:
- Desplazamientos: 20-30% del tiempo
- Reuniones internas, formación: 5-10%
- Tiempo productivo facturable: 60-70% del total
- Coste hora facturable real: 15,9€ / 0,65 = 24,5€/hora facturable

Este cálculo es fundamental para fijar precios de nuevos contratos y para evaluar los contratos en vigor.

### Sistema de alerta de contratos en riesgo

No puedes revisar la rentabilidad de todos los contratos cada mes. Necesitas un sistema de alertas que identifique los que requieren atención:

Indicadores de contrato en riesgo:

Alerta roja — Actuar esta semana:
- Margen bruto del contrato < 10% en el mes
- Horas reales de técnico > 120% de horas presupuestadas acumuladas en el año
- Facturación de correctivos en el mes > 50% de la cuota mensual sin estar contemplado
- Cliente con pagos vencidos > 60 días

Alerta naranja — Revisar este mes:
- Margen bruto trending negativo: 3 meses consecutivos por debajo del objetivo
- Incremento de horas de desplazamiento: posible cambio en la operativa
- Aumento de subcontrataciones no planificadas
- Contrato con precio no revisado en más de 18 meses

Alerta amarilla — Monitorizar:
- Contrato cercano a la fecha de renovación sin negociación iniciada
- Instalaciones envejeciendo: aumenta previsiblemente la tasa de averías
- Cambio de interlocutor en el cliente: riesgo de relicitación

### Control de tesorería en negocios de FM

Proyección de tesorería a 90 días:

Entradas previsibles:
+ Cuotas mensuales de contratos (por su fecha de cobro pactada, no de facturación)
+ Proyectos en ejecución: estimación de cobro por avance de obra
+ Pendiente de cobro de correctivos

Salidas previsibles:
- Nóminas (fecha exacta conocida)
- Seguridad Social (fecha conocida, días 20-22 de cada mes para el mes anterior)
- Proveedores de materiales (plazos de pago pactados por proveedor)
- Subcontratistas (plazos de pago pactados)
- Arrendamientos (fecha exacta)
- Impuestos periódicos (IVA trimestral, retenciones IRPF)

Posición de tesorería neta proyectada a 30, 60 y 90 días.

El ratio de salud de tesorería: días de cobertura = (saldo bancario + cobros previstos 30 días) / (gastos operativos promedio mensual). Por debajo de 45 días: zona de vigilancia. Por debajo de 30 días: emergencia.

### Revisión de precios en contratos renovables

Cláusula de revisión de precios: incluirla en todos los contratos nuevos como estándar.

Índice de referencia recomendado para FM:
- Coste de la mano de obra: indexado al convenio colectivo aplicable (publicado anualmente)
- Coste de materiales: IPC general o índice de precios industriales

Formula de revisión: precio nuevo = precio actual × (1 + % incremento convenio × peso mano de obra + % IPC × peso materiales)

Ejemplo: si mano de obra es el 60% del coste y el convenio sube un 3%, y materiales son 25% del coste y el IPC sube un 2%, la revisión mínima justificada es: 3% × 0,60 + 2% × 0,25 = 2,3% de incremento de precio.

Gestión de la comunicación al cliente de la revisión de precios:
- Comunicar con al menos 60-90 días de antelación a la fecha efectiva
- Acompañar con la justificación documentada (publicación del convenio, IPC oficial)
- Encuadrarlo como "actualización de precios", no "subida de precios"
- Aprovechar para reforzar el valor entregado en el año

### Instrucciones para generar

Con el contexto financiero de mi empresa, genera:

1. Plantilla de P&L por contrato: hoja de cálculo estructurada con todas las líneas de ingresos y costes para mi tipo de negocio, fórmulas para calcular el coste hora real de mi equipo técnico, y rangos de margen objetivo por tipo de contrato (preventivo puro, correctivo ilimitado, contrato mixto).

2. Sistema de alertas de contratos en riesgo: definición exacta de los 5-6 indicadores más relevantes para mi tipo de negocio, umbrales de alerta adaptados a mi escala, y proceso mensual de revisión del portfolio de contratos (quién lo hace, cuándo, qué decisiones se toman).

3. Modelo de pricing para nuevos contratos: método para calcular el precio mínimo de un contrato nuevo (break-even), el precio objetivo (margen sostenible) y el precio competitivo (qué puede asumir el mercado), con los inputs que necesito recoger durante la visita de las instalaciones para calcular el precio correctamente.

4. Plantilla de revisión de precios: documento para comunicar la revisión de precios a clientes existentes, con la argumentación, los índices de referencia y las alternativas que puedes ofrecer si el cliente presiona para no subir el precio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Control financiero y análisis de rentabilidad por contrato en empresas de facilities',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contratos de mantenimiento: cláusulas esenciales y gestión del riesgo legal en FM',
                'description'      => 'Diseña los contratos de servicios de facility management y mantenimiento de instalaciones con las cláusulas que protegen a tu empresa: SLAs, limitación de responsabilidad, revisión de precios y gestión de penalizaciones.',
                'prompt_content'   => <<<'EOT'
Eres un asesor legal especializado en contratos de servicios B2B y facility management en España, con experiencia redactando y negociando contratos de prestación de servicios de mantenimiento, limpieza industrial, seguridad y FM integral donde la asignación de riesgos entre el prestador de servicios y el cliente es la diferencia entre un contrato rentable y uno que puede arruinar a la empresa si ocurre un incidente.

Contexto de mi empresa:
- Tipo de servicios contratados: [mantenimiento eléctrico / climatización / FM integral / limpieza / seguridad / polivalente]
- Clientes típicos: [grandes corporaciones / administración pública / pymes / promotoras / hospitales / centros comerciales]
- Tipo de contratos: [contrato anual renovable / contrato plurianual / contrato de proyecto / mixto]
- Situación actual: [sin contratos escritos / contratos básicos del cliente que firmamos sin negociar / quiero revisar y mejorar mis contratos]
- Principal riesgo legal que te preocupa: [responsabilidad por daños en instalaciones del cliente / impagos / incumplimiento de SLAs con penalizaciones / contrato que no cubre nuestra subida de costes]

---

## Marco contractual para empresas de facility management

### Los riesgos contractuales específicos del FM

Las empresas de facilities asumen riesgos legales únicos por la naturaleza de su trabajo:

**Riesgo 1 — Responsabilidad por daños en instalaciones del cliente:**
El técnico trabaja en instalaciones ajenas. Un error puede causar desde un incendio hasta un corte de suministro que paralice la producción del cliente. La pregunta legal crítica: ¿hasta dónde llega tu responsabilidad y desde dónde empieza la del cliente?

**Riesgo 2 — SLAs imposibles de cumplir que generan penalizaciones:**
El cliente propone un SLA de "2 horas para cualquier avería". Tú lo firmas. Luego hay una avería en una instalación a 150km un domingo por la noche. No puedes llegar en 2 horas. Penalización. Un contrato bien negociado tiene SLAs diferentes según la criticidad y el momento.

**Riesgo 3 — Precios sin revisión en contratos plurianuales:**
Firmas un contrato a 3 años. El convenio colectivo sube un 5% el primer año. Los materiales suben un 15% por la inflación. Sin cláusula de revisión de precios, el contrato que era rentable en el año 1 es deficitario en el año 3.

**Riesgo 4 — Alcance del servicio mal definido:**
El cliente llama para una avería que tú consideras que está fuera del alcance del contrato. El cliente considera que está dentro. Sin una definición precisa del alcance, cualquiera puede tener razón y el conflicto se resuelve quien tiene más poder en la relación.

**Riesgo 5 — Subcontratación sin respaldo contractual:**
Subcontratas trabajos especializados. El subcontratista causa un daño en las instalaciones del cliente. ¿Eres responsable tú frente al cliente? Sí. ¿Tienes respaldo contractual del subcontratista? Si no tienes contrato con él, probablemente no.

### Estructura del contrato de servicios de FM

**Apartado 1 — Identificación de las partes y objeto del contrato:**

Elementos imprescindibles:
- Identificación completa de prestador y cliente (CIF, dirección, representantes legales)
- Descripción precisa de los servicios: qué se incluye, qué no se incluye, en qué instalaciones
- Descripción de las instalaciones: qué equipos, en qué estado inicial (acta de inicio de contrato firmada por ambas partes)

El acta de inicio de contrato es una de las protecciones más importantes:
- Antes de iniciar servicios, hacer una inspección de las instalaciones y documentar su estado
- Fotografías y descripción escrita del estado de cada equipo principal
- Firma del cliente confirmando el estado inicial
- Esto evita reclamaciones por "el equipo ya estaba así antes de que llegaran"

**Apartado 2 — Alcance del servicio:**

Define con precisión qué incluye el mantenimiento preventivo:
- Lista de equipos incluidos (con marca, modelo, número de serie si es posible)
- Frecuencia de las revisiones de cada equipo
- Qué acciones se realizan en cada revisión (checklist adjunto como anexo)
- Qué materiales de consumo proporciona el cliente y cuáles el prestador

Define qué es mantenimiento correctivo y cómo se gestiona:
- ¿El correctivo está incluido en la cuota o se factura aparte?
- Si se factura aparte: tarifa de mano de obra, tarifa de materiales, tarifa de desplazamiento
- Límite de importe de correctivo que puedes ejecutar sin autorización previa del cliente
- Por encima del límite: proceso de aprobación de presupuesto (plazos, formato)

Lo que NO incluye el contrato (tan importante como lo que incluye):
- Obras de albañilería o pintura derivadas del mantenimiento
- Sustitución de equipos por obsolescencia o agotamiento de vida útil (solo mantenimiento de los existentes)
- Daños causados por terceros, fenómenos meteorológicos, vandalismo
- Instalaciones o equipos no listados en el contrato

**Apartado 3 — SLA y niveles de servicio:**

Categorización de incidencias (imprescindible para SLAs distintos):

Nivel 1 — Crítica (afecta a operaciones o seguridad):
- Definición: corte total de suministro eléctrico, fallo de sistema anti-incendios, avería de climatización en sala de servidores, etc.
- SLA objetivo: tiempo de respuesta 2-4h, tiempo de resolución 8-24h
- Disponibilidad: 24/7/365

Nivel 2 — Urgente (afecta parcialmente a operaciones):
- Definición: fallo parcial de climatización en zona de trabajo, avería de ascensor (no el único)
- SLA objetivo: tiempo de respuesta 4-8h en horario laboral, 12-24h fuera de horario
- Disponibilidad: horario laboral + guardia de urgencias

Nivel 3 — Rutinaria (no afecta a operaciones):
- Definición: incidencias menores que no impiden el trabajo
- SLA objetivo: tiempo de respuesta 24-48h laborables
- Disponibilidad: horario laboral

**Las penalizaciones deben ser proporcionales y tener un tope:**
- Penalización máxima acumulable al año: proponer un límite razonable (por ejemplo, máximo 5-10% de la cuota anual)
- Exenciones de penalización: causa de fuerza mayor, necesidad de piezas con plazo de entrega largo, acceso a instalaciones no proporcionado por el cliente

**Apartado 4 — Revisión de precios:**

Cláusula de revisión anual:
"El precio de los servicios objeto del presente contrato será revisado anualmente, con efectividad el [fecha], de acuerdo con la variación del Índice de Costes del Sector de la Construcción / del convenio colectivo aplicable, publicado por [organismo], en el periodo de los 12 meses anteriores."

Si el cliente rechaza cláusula de revisión automática:
- Negociar revisión manual anual con preaviso de 60 días
- Incluir cláusula de "revisión extraordinaria" si el coste de mano de obra o materiales sube más de X% en un año

**Apartado 5 — Responsabilidad y seguros:**

Limitación de responsabilidad:
- Proponer límite de responsabilidad total: "La responsabilidad máxima del prestador de servicios por cualquier daño directo no excederá de [X€] o del importe equivalente a [N meses] de facturación del contrato"
- Excluir daños indirectos, lucro cesante, pérdida de producción: "En ningún caso el prestador será responsable de daños indirectos, pérdida de negocio, lucro cesante o pérdida de datos del cliente"

Seguro de responsabilidad civil:
- El prestador debe tener RC con cobertura mínima adecuada (proponer en el contrato el mínimo que se exige)
- Cliente debe dar acceso a trabajar en sus instalaciones con todas las medidas de seguridad (responsabilidad del cliente en lo que no controla)
- Subcontratistas: exigir que los subcontratistas tengan RC propia y documentarla

**Apartado 6 — Condiciones económicas y pago:**

Condiciones de pago que protegen el flujo de caja:
- Facturación mensual por adelantado o al inicio del periodo, no a mes vencido
- Plazo de pago máximo: 30 días (Ley de Morosidad en operaciones comerciales en España)
- Intereses de demora: tipo legal + 8 puntos porcentuales (Ley 3/2004 de medidas contra la morosidad)
- Suspensión del servicio por impago: "El prestador se reserva el derecho a suspender el servicio si el cliente no abona las facturas en los plazos establecidos, previo preaviso de [X días]"

### Instrucciones para generar

Con el contexto de mi empresa, genera:

1. Borrador del contrato tipo: estructura completa de los apartados del contrato de servicios para mi tipo de servicio principal, con las cláusulas más críticas redactadas (alcance, SLA, revisión de precios, responsabilidad, pago) y comentarios explicando por qué cada cláusula es importante.

2. Matriz de SLAs: tabla con los niveles de servicio recomendados para mi tipo de servicio (tiempos de respuesta, tiempos de resolución, disponibilidad), con las condiciones de exención de penalización y el límite de penalización total anual recomendado.

3. Acta de inicio de contrato: plantilla del documento que debes hacer firmar al cliente antes de iniciar cualquier servicio, con los campos de estado de instalaciones, equipos incluidos y confirmación del estado inicial.

4. Checklist de revisión de contratos del cliente: cuando el cliente te presenta su propio contrato para que lo firmes, lista de las 10-15 cláusulas que debes revisar obligatoriamente, qué buscar en cada una y qué proponer como alternativa si la cláusula es inaceptable para tu empresa.

Nota: todos los documentos son borradores orientativos. Consulta con un abogado especializado antes de usarlos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 65,
                'use_case'         => 'Contratos de servicios de FM y mantenimiento: cláusulas esenciales y gestión del riesgo',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente en facilities: gestión de incidencias y comunicación con usuarios del edificio',
                'description'      => 'Diseña los protocolos de comunicación y gestión de incidencias para empresas de facilities management: cómo comunicar con los usuarios del edificio, gestionar quejas y mantener la satisfacción en contratos de larga duración.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en experiencia de cliente y comunicación en el sector de facility management y gestión de infraestructuras, con experiencia diseñando protocolos de atención a usuarios para empresas que gestionan edificios de oficinas, hospitales, centros comerciales y campus universitarios, donde el cliente que paga el contrato (la empresa o institución) y el usuario final del edificio (el empleado o paciente) son personas distintas con necesidades distintas.

Contexto de mi empresa:
- Tipo de servicios: [mantenimiento / limpieza / seguridad / FM integral / otro]
- Tipo de edificio gestionado: [oficinas corporativas / hospital / centro comercial / campus universitario / edificio público / parque industrial]
- Canales de comunicación con usuarios actuales: [teléfono / email / app / papel / ninguno formal]
- Principal problema de satisfacción: [usuarios no saben cómo reportar incidencias / tiempo de respuesta percibido como lento / falta de comunicación sobre el estado de las incidencias / percepción de servicio deficiente aunque los SLAs se cumplan]
- Equipo de atención: [gestión directa por técnicos / coordinador de FM dedicado / call center / sin responsable definido]

---

## Gestión de la experiencia del usuario en facility management

### El problema de los dos clientes en FM

Una empresa de FM tiene siempre dos clientes distintos con necesidades distintas:

**Cliente A — La organización que paga el contrato:**
- Le interesa: cumplimiento de SLAs, costes controlados, informes de gestión, ningún problema con sus propios clientes o empleados
- Mide el servicio a través de: KPIs del contrato, quejas escaladas, renovación del contrato
- Comunicación: formal, datos, informes mensuales, reuniones de seguimiento

**Cliente B — Los usuarios del edificio:**
- Le interesa: que las cosas funcionen cuando las necesita, que cuando hay un problema alguien lo resuelva rápido y le mantenga informado
- Mide el servicio a través de: su experiencia cotidiana, si le resolvieron el problema, si se sintió atendido
- Comunicación: rápida, sencilla, en su canal habitual, sin tecnicismos

El error más común en FM: gestionar solo al cliente A y olvidarse del cliente B. El resultado es que el cliente A recibe informes perfectos de SLAs cumplidos pero sus empleados están insatisfechos con el servicio. Esta insatisfacción acaba llegando al cliente A en forma de quejas internas y, eventualmente, en la decisión de cambiar de proveedor.

### Sistema de gestión de incidencias orientado al usuario

**Principio de diseño: el usuario no gestiona una incidencia, experimenta un problema resuelto**

El flujo de experiencia correcto desde el punto de vista del usuario:

1. El usuario tiene un problema (la luz de su sala no funciona, hay una fuga, el ascensor está averiado)
2. Reporta el problema de forma simple: con el menor número de pasos posible, en el canal más natural para él
3. Recibe confirmación inmediata de que su reporte fue recibido (y un número de referencia)
4. Recibe una comunicación sobre cuándo se resolverá su problema (o que ya se está atendiendo)
5. El problema se resuelve
6. Recibe confirmación de que el problema fue resuelto, con posibilidad de dar feedback

Lo que destroza la experiencia del usuario:
- No saber a quién llamar cuando hay un problema
- Llamar y que el teléfono no tenga respuesta
- Reportar el problema y no recibir ninguna confirmación
- No saber qué está pasando con su incidencia después de reportarla
- Resolver el problema sin comunicárselo al usuario que lo reportó

### Canales de comunicación de incidencias

**Canal 1 — App móvil de gestión de incidencias (solución ideal):**
- El usuario reporta desde su móvil: categoría del problema, foto, ubicación
- Recibe el número de referencia inmediatamente
- Puede hacer seguimiento del estado de su incidencia en tiempo real
- Recibe notificación push cuando se resuelve
- Puede valorar la resolución con 1-5 estrellas y comentario
- Ventaja: datos estructurados, trazabilidad total, feedback automático
- Requisito: el usuario debe descargarse e instalar la app (puede ser una barrera)

**Canal 2 — QR code en el punto de incidencia (solución práctica sin app):**
- Carteles con QR en zonas del edificio (cada planta, cada sala técnica, ascensores)
- El usuario escanea el QR con su cámara: abre un formulario web sin instalación
- El formulario precumplimenta la ubicación (planta, zona) desde el QR
- El usuario solo necesita describir el problema y añadir foto opcional
- Ventaja: sin fricción de instalación, funciona en cualquier smartphone
- Ideal para: edificios con usuarios externos frecuentes, visitantes

**Canal 3 — WhatsApp Business (solución de alta adopción):**
- Número de WhatsApp dedicado a incidencias del edificio
- Bot simple de WhatsApp para categorizar el reporte
- Respuesta automática de confirmación con número de referencia
- Ventaja: los usuarios ya tienen WhatsApp, cero fricción de adopción
- Desventaja: los datos son menos estructurados, integración con GMAO más compleja

**Canal 4 — Teléfono centralizado (imprescindible como fallback):**
- Siempre debe existir un teléfono de contacto como canal de respaldo
- El tiempo de respuesta al teléfono debe ser un SLA interno: máximo 3 rings en horario laboral
- Protocolo de llamadas fuera de horario: buzón de voz con respuesta garantizada o desvío a coordinador de guardia

### Comunicación proactiva: antes de que el usuario pregunte

La satisfacción del usuario no depende solo de resolver el problema, sino de comunicar:

Comunicación de trabajos planificados:
- Aviso con 24-48h de antelación de cualquier trabajo que afecte a los usuarios (corte de suministro, ruidos, zona cerrada)
- Canal: email masivo a usuarios afectados + cartel físico en la zona + mensaje en app si existe
- Contenido mínimo: qué va a pasar, cuándo, cuánto tiempo dura, qué alternativa tienen durante ese tiempo
- No basta con avisar al responsable del cliente: avisar directamente a los usuarios afectados

Actualización de incidencias de larga resolución:
- Si una incidencia no se resuelve en el tiempo previsto inicialmente, comunicar proactivamente la nueva estimación
- El silencio es lo peor: el usuario no sabe si se ha olvidado de su problema o si hay un motivo para la demora

Comunicación de incidencias que afectan a todos:
- Avería del ascensor: cartel inmediato en la puerta del ascensor + comunicación al responsable del edificio
- Corte de agua planificado: aviso con 48h + cartel + comunicación digital
- Sistema de climatización averiado: comunicación inmediata + estimación de resolución + disculpa

### Gestión de quejas y escalados

Un usuario insatisfecho que se queja es una oportunidad, no un problema. La empresa que gestiona bien las quejas retiene contratos; la que las ignora los pierde.

Protocolo de gestión de quejas de usuario:

Recepción (mismo día):
- Registrar la queja en el sistema: no puede haber quejas "de pasillo" sin registro
- Acuse de recibo al usuario con número de referencia y persona responsable
- Clasificar: ¿es una queja de gestión de la incidencia (proceso) o del resultado técnico (calidad)?

Investigación (máximo 48h):
- Revisar el historial de la incidencia: tiempos reales vs comprometidos, comunicaciones enviadas
- Identificar si el SLA se cumplió o no
- Preparar la respuesta con los hechos

Respuesta al usuario:
- Siempre personalmente (no respuesta genérica plantilla)
- Reconocer si hubo un fallo: no defensividad
- Explicar qué pasó y qué medidas se han tomado para que no vuelva a ocurrir
- No prometer lo que no puedes garantizar

Escalado al responsable del contrato:
- Las quejas de usuarios se reportan mensualmente al responsable del cliente
- Las quejas graves (que pueden afectar a la renovación) se escalan inmediatamente

### Métricas de satisfacción del usuario

KPIs que debes medir mensualmente:

Operacionales:
- Tiempo medio de primera respuesta (desde que se reporta la incidencia hasta el primer contacto del técnico)
- Tiempo medio de resolución por categoría de incidencia
- % de incidencias resueltas en el SLA comprometido
- % de incidencias reabiertas (el problema volvió a ocurrir)

Percepción del usuario:
- CSAT (Customer Satisfaction Score) post-resolución: pregunta simple de 1-5 sobre la gestión de la incidencia
- Net Promoter Score semestral: ¿recomendarías el servicio de facility management de tu empresa?
- Número de quejas formales por mes y evolución

### Instrucciones para generar

Con el contexto de mi empresa y tipo de edificio, genera:

1. Diseño del sistema de gestión de incidencias: recomendación del canal o combinación de canales más adecuada para mi tipo de edificio y perfil de usuarios, con el flujo de experiencia completo desde el reporte hasta la resolución, y los mensajes automáticos que el usuario recibirá en cada fase.

2. Protocolo de comunicación proactiva: qué tipos de trabajos o incidencias requieren comunicación proactiva en mi tipo de edificio, con qué antelación, a través de qué canal, con qué mensaje tipo, y quién es responsable de enviarla.

3. Plantillas de comunicación: mensajes tipo para los 5 escenarios más frecuentes en mi tipo de servicio (confirmación de reporte, actualización de estado, resolución, aviso de trabajo planificado, respuesta a queja), adaptados al tono apropiado para el tipo de edificio que gestiono.

4. Plan de medición de satisfacción: métricas a implementar, cómo recogerlas con los recursos actuales de mi empresa, frecuencia de revisión, y cómo incluir los resultados en el informe mensual al cliente para demostrar el valor del servicio más allá de los SLAs técnicos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestión de incidencias y experiencia del usuario en facilities management',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Freelance en facility management: cómo ofrecer consultoría independiente a propietarios de edificios',
                'description'      => 'Construye tu propuesta de valor como consultor independiente de facility management: nichos de especialización, servicios, tarifas y captación de clientes en el mercado de gestión de infraestructuras.',
                'prompt_content'   => <<<'EOT'
Eres un consultor estratégico para profesionales independientes del sector de facility management, gestión de infraestructuras y mantenimiento de edificios, con experiencia ayudando a técnicos, ingenieros y gestores con años de experiencia en empresas a crear su propia propuesta de valor como consultores independientes y captar sus primeros clientes en un mercado donde los propietarios de edificios tienen necesidades reales que las grandes empresas de FM no siempre pueden cubrir de forma personalizada.

Contexto de mi situación:
- Experiencia previa: [técnico de mantenimiento / coordinador de FM / director de instalaciones / director de ingeniería / consultor en empresa grande / otro]
- Años de experiencia en el sector: [menos de 5 / 5-10 / más de 10 / más de 20]
- Especialización técnica: [climatización/HVAC / instalaciones eléctricas / eficiencia energética / BMS/automatización / seguridad / FM generalista / otro]
- Tipo de clientes que quiero atender: [propietarios de edificios de oficinas / comunidades de propietarios / pymes con instalaciones / sector público / sector salud / inmobiliario / otro]
- Objetivo: [ingresos complementarios a empleo actual / sustituir salario / construir empresa de consultoría]
- Mayor inseguridad: [cómo poner precio a mi trabajo / cómo encontrar clientes / qué servicios ofrecer / aspectos legales de ser autónomo]

---

## Hoja de ruta para consultor independiente de facility management

### Por qué el FM independiente es una oportunidad real

El mercado de gestión de infraestructuras tiene una brecha clara que el consultor independiente puede cubrir:

**Las grandes empresas de FM:**
- Tienen estructura para contratos grandes (>200k€ anuales)
- No son rentables en contratos pequeños y medianos
- Ofrecen servicio estandarizado que no siempre se adapta a las necesidades específicas de cada edificio
- Sus técnicos rotan y el cliente no tiene un interlocutor estable que conozca sus instalaciones

**Lo que el propietario de un edificio mediano realmente necesita:**
- Alguien de confianza que conozca a fondo sus instalaciones
- Un interlocutor estable que le diga con honestidad qué necesita y qué no
- Ayuda para gestionar a los proveedores de mantenimiento que ya tiene
- Asesoramiento independiente sin conflicto de interés (sin vender los servicios que recomienda)

**El consultor independiente puede ser exactamente eso.**

### Los 6 nichos de mayor oportunidad para el FM independiente

**Nicho 1 — Auditoría técnica de instalaciones:**
- Qué ofreces: inspección técnica independiente del estado de las instalaciones de un edificio, con informe de deficiencias, prioridades de intervención y presupuesto de referencia
- Para qué clientes: compradores de edificios (due diligence), propietarios que quieren saber el estado real, gestores que quieren un segundo opinión sobre lo que les dice su empresa de mantenimiento
- Tarifa típica: 1.000-5.000€ por auditoría según tamaño del edificio
- Barrera de entrada: conocimiento técnico + capacidad de documentar y redactar informe profesional

**Nicho 2 — Redacción de pliegos y licitaciones de mantenimiento:**
- Qué ofreces: ayudar al propietario del edificio a redactar el pliego de condiciones para contratar a una empresa de mantenimiento, evaluar las ofertas recibidas y recomendar la selección
- Para qué clientes: comunidades de propietarios, pymes, administraciones pequeñas sin técnico interno
- Tarifa típica: 1.500-6.000€ por proceso según complejidad
- Barrera de entrada: experiencia en el lado del proveedor de FM (conoces desde dentro cómo funcionan los contratos)

**Nicho 3 — Gestión de mantenimiento externalizada para propietario:**
- Qué ofreces: actuar como "director de instalaciones externo": coordinar a los proveedores de mantenimiento del cliente, gestionar las incidencias, hacer el seguimiento de los contratos
- Para qué clientes: propietarios de edificios medianos que no tienen técnico interno pero necesitan alguien que controle al proveedor de mantenimiento
- Tarifa típica: retención mensual de 500-2.000€/mes según el tamaño del edificio y las horas dedicadas
- Barrera de entrada: capacidad de gestión + conocimiento técnico suficiente para supervisar

**Nicho 4 — Consultoría de eficiencia energética:**
- Qué ofreces: auditoría energética del edificio, plan de mejoras con ROI calculado, acompañamiento en la ejecución
- Para qué clientes: propietarios de edificios con facturas de energía altas, edificios con obligación de certificación energética, empresas con compromisos ESG
- Tarifa típica: 2.000-8.000€ por auditoría energética, más % de ahorro conseguido si se pacta
- Barrera de entrada: formación específica en eficiencia energética (certificación de auditor energético de edificios en España)

**Nicho 5 — Implantación de GMAO en pymes:**
- Qué ofreces: ayudar a empresas con mantenimiento propio a implantar un software GMAO, configurarlo, formar al equipo y hacer el seguimiento inicial
- Para qué clientes: industria con mantenimiento propio, hospitales medianos, empresas con gestión de flota de vehículos
- Tarifa típica: 3.000-15.000€ por proyecto de implantación según alcance
- Barrera de entrada: conocimiento de herramientas GMAO específicas + experiencia en procesos de mantenimiento

**Nicho 6 — Formación técnica para equipos de mantenimiento:**
- Qué ofreces: cursos y talleres para técnicos de mantenimiento en habilidades específicas: diagnóstico de averías, mantenimiento predictivo, uso de herramientas digitales, PRL específica del sector
- Para qué clientes: empresas de FM que forman a su equipo, centros de FP, asociaciones del sector
- Tarifa típica: 600-1.500€/día de formación, paquetes de varios días
- Barrera de entrada: expertise técnico demostrable + capacidad de comunicarlo a otros

### Estructura de servicios y precios

Cómo pensar en tus precios como consultor independiente:

**El error del precio/hora:**
Muchos consultores independientes cobran por hora porque es lo que conocen del mundo laboral. El problema: el cliente percibe el precio como "caro" y tú estás incentivado a trabajar lento. La alternativa es cobrar por proyecto o por valor entregado.

**Precio por proyecto:**
Defines el entregable, el plazo y el precio fijo. El cliente sabe exactamente cuánto va a pagar. Tú tienes incentivo para ser eficiente. Si estimaste bien, ganas más cuanto más rápido eres.

**Retención mensual:**
Para servicios de coordinación continua (nicho 3). Precio fijo mensual por un número de horas o de servicios acordados. Predecible para ambas partes.

**Fijación de precios basada en valor:**
¿Cuánto vale para el cliente lo que ofreces? Si tu auditoría energética identifica un ahorro de 20.000€ anuales, cobrar 3.000€ por la auditoría es barato para el cliente aunque sea mucho más de lo que cobrarías por horas.

**Tarifa diaria de referencia:**
Para tener un punto de referencia: consultor de FM con experiencia en España puede aspirar a 400-800€/día en el mercado. Un especialista muy reconocido puede llegar a 1.000-1.500€/día.

### Captación de los primeros clientes

Cuando empiezas como independiente, el mayor reto es el primer cliente. Estrategias que funcionan en FM:

**Tu red de contactos del sector:**
- Tus ex-empleadores: pueden ser clientes (si no hay conflicto de interés) o pueden recomendarte
- Clientes con los que trabajaste cuando eras empleado: conocen tu trabajo de primera mano
- Colegas del sector: pueden derivarte proyectos que no pueden atender ellos o que están fuera de su ámbito

**Asociaciones y colegios profesionales:**
- Colegio de Ingenieros Industriales, COFIB (Colegio Oficial de Instaladores de la Comunidad de Madrid), AGEFMA (Asociación de Gestores de Facility Management)
- Participar activamente: ponencias, grupos de trabajo, comisiones técnicas
- El reconocimiento como experto en el sector llega más rápido que con el marketing tradicional

**LinkedIn como canal de autoridad:**
- Publicar regularmente sobre tu especialización: análisis de normativas, consejos técnicos, casos de estudio (anonimizados)
- El objetivo no es que te contraten de LinkedIn sino que cuando alguien de tu red te recomiende, el cliente potencial busque tu perfil y encuentre a un experto reconocido
- Frecuencia: 2-3 publicaciones semanales durante 6 meses construye autoridad suficiente

**Primer proyecto a precio especial:**
- Identifica un cliente potencial con el que tienes relación y que claramente necesita tu servicio
- Ofrece hacer el primer proyecto a precio reducido a cambio de un testimonio y el derecho a usar el caso como referencia
- El objetivo es el caso de éxito, no el dinero: con un buen caso de estudio los siguientes clientes llegan a precio completo

### Instrucciones para generar

Con mi contexto y perfil, genera:

1. Propuesta de valor y posicionamiento: en qué nicho o combinación de nichos tengo más ventaja competitiva dados mi experiencia y especialización, qué me diferencia de las grandes empresas de FM y de otros consultores independientes, y cómo describir mi propuesta en 3 frases para la web y en 30 segundos verbalmente.

2. Estructura de servicios y tarifas: para los 2-3 servicios que mejor encajan con mi perfil, descripción detallada de qué incluye cada uno, qué entregable recibe el cliente, plazo típico de ejecución, rango de precio recomendado y cómo justificar ese precio ante el cliente.

3. Plan de captación de los primeros 3 clientes en 90 días: acciones concretas semana a semana para los primeros 3 meses, empezando por mi red de contactos existente y añadiendo progresivamente nuevos canales, con criterios de éxito para cada mes y qué hacer si no funciona.

4. Kit de inicio como autónomo: los 5 elementos que necesito tener en marcha antes de facturar el primer euro (alta de autónomo, seguro de RC profesional, contrato tipo, herramientas básicas, factura tipo), con recomendaciones concretas para cada uno en el contexto español.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 45,
                'use_case'         => 'Estrategia para construir una consultoría independiente de facility management',
                'vote_score'       => 31,
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
