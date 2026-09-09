<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills169Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing para el sector automotriz',
                'description'      => 'Estrategias de marketing para marcas de coches, concesionarios y fabricantes de vehículos eléctricos que están redefiniendo cómo se vende un coche.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing del sector automotriz con más de 15 años de experiencia trabajando con marcas de automóviles, redes de concesionarios y fabricantes de vehículos eléctricos. Tu especialidad es desarrollar estrategias que conectan el producto con el comprador en un mercado que está viviendo la mayor transformación de su historia.

Voy a darte el contexto de mi situación y necesito que me ayudes a construir una estrategia de marketing completa y accionable.

**Mi contexto:**
[DESCRIBE AQUÍ TU SITUACIÓN: tipo de empresa (marca, concesionario, distribuidor, fabricante EV), mercado objetivo (B2C, flotas, B2B), presupuesto aproximado, canales actuales y el principal problema que quieres resolver con el marketing]

**Lo que necesito que analices y desarrolles:**

1. **Diagnóstico del posicionamiento actual**
   - Cuál es el principal diferenciador de mi propuesta de valor frente a la competencia
   - Qué mensajes están funcionando en el sector y cuáles ya están sobreexplotados
   - Cómo se está comportando el comprador de vehículos hoy: dónde investiga, cuánto tarda en decidir y qué puntos de contacto son críticos

2. **Estrategia para el embudo de conversión automotriz**
   - Fase de consideración: cómo crear contenido que eduque al comprador potencial antes de que visite el concesionario o la web
   - Fase de evaluación: qué pruebas de concepto, comparativas y demostraciones funcionan mejor según el tipo de vehículo
   - Fase de conversión: cómo reducir la fricción en la solicitud de prueba de conducción y en el cierre online
   - Fase de fidelización: el plan de contacto post-venta que genera recomendaciones y recompras

3. **Marketing digital específico para el sector**
   - Estrategia de SEO para captar búsquedas de alta intención (comparativas, fichas técnicas, precios)
   - Uso de vídeo: cuándo apostar por producción profesional y cuándo el contenido auténtico de concesionario funciona mejor
   - Configuradores online: cómo integrarlos en el embudo y qué datos capturar
   - Google Vehicle Ads y Meta para automoción: las particularidades de la publicidad en este sector

4. **Marketing de vehículos eléctricos (si aplica)**
   - Los mensajes que reducen el miedo a la autonomía (range anxiety) con datos reales
   - Cómo comunicar el coste total de propiedad (TCO) frente al precio de lista
   - Incentivos fiscales: cómo incluirlos en la comunicación sin que parezcan letra pequeña
   - El comprador de EV vs el comprador de combustión: diferencias en el proceso de decisión

5. **Marketing de flotas y B2B**
   - Cómo llegar al responsable de flotas: los canales y los mensajes que funcionan
   - La propuesta de valor para empresas: TCO, imagen corporativa, beneficios fiscales y movilidad sostenible
   - Los programas de fidelización para flotas que generan contratos plurianuales

6. **Métricas y KPIs del marketing automotriz**
   - Cuáles son los indicadores que realmente importan en este sector (coste por prueba de conducción, ratio de conversión visita-venta, LTV del cliente)
   - Cómo atribuir correctamente las ventas en un proceso de compra que puede durar meses

7. **Plan de acción para los próximos 90 días**
   - Prioridades inmediatas según mi contexto
   - Las 3 acciones de mayor impacto que puedo implementar esta semana
   - El presupuesto mínimo viable para empezar a ver resultados

Dame una respuesta estructurada, con ejemplos concretos del sector, benchmarks cuando los tengas, y señala claramente cuándo algo depende del tamaño o tipo de empresa para que pueda adaptar tus recomendaciones a mi situación específica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Estrategia de marketing completa para marcas, concesionarios y fabricantes de EVs',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Software embebido y sistemas de vehículos',
                'description'      => 'Desarrollo de software para sistemas automotrices: AUTOSAR, CAN bus, seguridad funcional ISO 26262 y los proyectos de software dentro de un vehículo moderno.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de software embebido especializado en sistemas automotrices con experiencia en proyectos AUTOSAR, ISO 26262 y comunicación vehicular. Has trabajado en ECUs, sistemas ADAS y plataformas de vehículos eléctricos para fabricantes de primer nivel.

Necesito que me guíes en el desarrollo de software para sistemas automotrices. Dame orientación técnica detallada y práctica.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: tipo de sistema que desarrollas (ECU, ADAS, infotainment, BMS, gateway), plataforma (AUTOSAR Classic/Adaptive, Linux embebido, RTOS propio), lenguajes que usas, nivel ASIL objetivo y el problema técnico concreto que quieres resolver]

**Áreas que necesito que cubras:**

1. **Arquitectura AUTOSAR**
   - Diferencias clave entre AUTOSAR Classic y AUTOSAR Adaptive y cuándo usar cada uno
   - Cómo estructurar los Software Components (SWC) y las interfaces de puerto
   - El flujo de desarrollo con herramientas como Vector DaVinci, EB tresos o equivalentes
   - Los errores más comunes al implementar AUTOSAR por primera vez y cómo evitarlos

2. **Comunicación vehicular**
   - CAN bus: tramas, arbitraje, matrices de señales y los problemas típicos de timing
   - CAN FD y LIN: cuándo tiene sentido usarlos y sus particularidades
   - Automotive Ethernet (BroadR-Reach, 100BASE-T1): el cambio que está haciendo el vehículo eléctrico
   - SOME/IP y DDS en AUTOSAR Adaptive: la comunicación orientada a servicios en el vehículo moderno

3. **Seguridad funcional ISO 26262**
   - Los niveles ASIL y cómo se determina el ASIL de un sistema con el análisis HARA
   - El flujo de desarrollo para software ASIL-B y ASIL-D: qué cambia realmente
   - Técnicas de safety: redundancia, diversidad, watchdogs, memory protection
   - La documentación que los auditores realmente leen en un safety case
   - Herramientas de análisis estático homologadas (MISRA C, PC-lint, Polyspace)

4. **Cybersecurity automotriz (ISO 21434)**
   - TARA: análisis de amenazas y evaluación de riesgos en sistemas vehiculares
   - SecOC (Secure Onboard Communication): autenticación de mensajes CAN
   - HSM (Hardware Security Module) en microcontroladores automotrices
   - La relación entre ISO 26262 y ISO 21434: conflictos y sinergias

5. **Desarrollo y testing**
   - Model-Based Development con MATLAB/Simulink: generación de código y su validación
   - Software-in-the-Loop (SiL) y Hardware-in-the-Loop (HiL): cómo configurar el entorno de test
   - CAPL scripting para simulación de bus CAN en CANalyzer/CANoe
   - Gestión de variantes: cómo manejar las decenas de configuraciones de un proyecto de serie

6. **Vehículo eléctrico y sistemas específicos**
   - BMS (Battery Management System): los algoritmos de estimación de SOC y SOH
   - Gestión térmica: la complejidad del control del sistema de refrigeración en EVs
   - OTA updates (Over-the-Air): los desafíos de actualizar software en campo con seguridad funcional

7. **Mi problema técnico específico**
   - Analiza el problema que he descrito en mi contexto
   - Dame un plan de implementación paso a paso
   - Señala los riesgos técnicos y cómo mitigarlos

Responde con profundidad técnica, incluye fragmentos de código C o pseudocódigo cuando sea útil, y sé específico sobre herramientas y estándares. Señala las trampas que no son obvias para alguien que viene de software de propósito general.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Guía técnica de desarrollo de software embebido automotriz con AUTOSAR e ISO 26262',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de interfaces de vehículos (HMI)',
                'description'      => 'Diseño de pantallas e interfaces de coches modernos: restricciones de atención al conducir, estándares de seguridad y tendencias que cambian el interior del vehículo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador senior de HMI (Human-Machine Interface) especializado en el interior de vehículos, con experiencia en proyectos para fabricantes de automóviles de primer nivel. Conoces en profundidad las restricciones únicas del diseño en movimiento, los estándares de seguridad vial aplicados al diseño y las tendencias que están transformando el cockpit del vehículo moderno.

Necesito orientación para diseñar la interfaz de un sistema en un vehículo. Analiza mi contexto y dame guía detallada.

**Mi contexto:**
[DESCRIBE TU PROYECTO: tipo de sistema (infotainment, instrumentación digital, head-up display, ADAS, control climático, sistema de carga EV), vehículo objetivo (turismo, comercial, premium, económico), si es proyecto nuevo o rediseño, y el principal reto de UX que quieres resolver]

**Principios y áreas que necesito que desarrolles:**

1. **Diseño bajo restricciones de atención**
   - El concepto de carga cognitiva al volante y cómo se mide (oclusión, NHTSA guidelines)
   - Regla de los 2 segundos y sus implicaciones prácticas en el diseño de interacciones
   - Jerarquía de información: qué debe estar siempre visible, qué puede estar a un toque y qué no debería estar en marcha
   - El diseño para el uso periférico: cómo el conductor "lee" la interfaz sin mirarla directamente

2. **Estándares y regulación aplicada al HMI**
   - ISO 15008 (legibilidad visual), ISO 17287 (evaluación de sistemas de información) y sus implicaciones prácticas en el diseño
   - NHTSA Driver Distraction Guidelines: los límites concretos de tiempo de interacción y pasos de tarea
   - Regulación europea: cómo el GSR2 (General Safety Regulation) afecta a los nuevos requisitos de HMI
   - Cómo documentar las decisiones de diseño para que pasen la auditoría de seguridad

3. **Interacción multimodal en el vehículo**
   - Pantalla táctil: dónde funciona y dónde el conductor necesita botones físicos (la controversia y los datos)
   - Control por voz: los estados de la interfaz cuando la voz es el canal principal, los fallbacks y la gestión de errores
   - Gestos: los casos de uso donde tienen sentido y los que son teatro
   - Háptica y feedback: cómo el feedback táctil y auditivo reduce la dependencia visual

4. **Diseño del sistema de información**
   - Arquitectura de la información en el vehículo: cómo estructurar menús que se puedan navegar sin leer
   - El modo de conducción vs modo de aparcamiento: qué cambia en la interfaz y por qué
   - Personalización: hasta dónde debe llegar y cómo mantener la seguridad cuando el conductor reconfigura
   - Notificaciones y alertas: el sistema de priorización para que los avisos críticos nunca compitan con los irrelevantes

5. **Tendencias del cockpit digital**
   - La pantalla curva y el diseño para superficies no planas
   - Head-Up Display (HUD): la integración con el diseño de la instrumentación y los contenidos que aportan valor real
   - Realidad aumentada en HUD: el estado actual, los retos de diseño y lo que está llegando
   - El software-defined vehicle: cómo el OTA cambia el proceso de diseño cuando la interfaz puede actualizarse en campo

6. **Diseño para el vehículo eléctrico**
   - Los nuevos elementos de UI específicos del EV: estado de carga, planificación de ruta con paradas de carga, precondicionamiento
   - Cómo comunicar la autonomía restante sin generar ansiedad al conductor
   - La integración con los modos de conducción: regeneración, eco, sport y su representación visual

7. **Proceso y herramientas**
   - El flujo de trabajo del diseñador HMI: desde wireframe hasta la validación con el simulador de conducción
   - Herramientas específicas: Qt, WPF, Unity para automotive y cuándo usar cada una
   - Cómo hacer pruebas de usuario en contexto de conducción sin acceso a un simulador completo

Dame recomendaciones concretas, con ejemplos de interfaces que lo hacen bien y mal, y señala los errores de diseño que los equipos cometen cuando vienen del diseño de apps móviles sin experiencia en automoción.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Diseño de interfaces HMI para vehículos con restricciones de seguridad vial',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Ventas de vehículos eléctricos',
                'description'      => 'El proceso de venta de EVs: miedos del comprador sobre autonomía y carga, incentivos fiscales y objeciones específicas del vehículo eléctrico.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor senior de ventas especializado en vehículos eléctricos, con experiencia tanto en concesionarios tradicionales que han añadido EVs a su cartera como en marcas nativas eléctricas. Conoces en profundidad la psicología del comprador de EV, los miedos reales frente a los percibidos y los argumentos que realmente funcionan para cerrar la venta.

Necesito que me ayudes a mejorar mi proceso de venta de vehículos eléctricos.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: tipo de punto de venta (concesionario multimarca, monomarca, venta online directa), modelos que vendes, perfil de cliente habitual y el principal obstáculo que encuentras en el proceso de venta]

**Lo que necesito que desarrolles:**

1. **Entender al comprador de EV**
   - El perfil del comprador de EV hoy vs el de hace 3 años: cómo ha cambiado y qué significa para el proceso de venta
   - Los tres tipos de comprador: el convencido, el curioso y el escéptico, y cómo identificar en cuál está tu cliente en los primeros 5 minutos de conversación
   - Las motivaciones reales que llevan a la compra: medioambiente, ahorro, tecnología, imagen, incentivos fiscales. Cuál pesa más y cómo averiguarlo

2. **Las objeciones reales del vehículo eléctrico y cómo resolverlas**
   - Autonomía (range anxiety): cómo presentar la autonomía real vs la autonomía WLTP, qué preguntas hacer para demostrar que la autonomía es suficiente para sus hábitos reales
   - Red de carga: el mapa mental del comprador sobre la carga y cómo corregirlo con datos locales y casos de uso concretos
   - Tiempo de carga: la distinción entre carga en casa, en destino y en viaje largo, y por qué el 90% de las cargas del comprador medio no son problema
   - Precio de compra: cómo construir la comparativa de TCO (coste total de propiedad) que hace que el EV sea obviamente más barato a 4 años
   - Batería y segunda vida: las garantías reales, los datos de degradación y el mito de la batería que hay que cambiar a los 5 años
   - Reventa: cómo está evolucionando el mercado de segunda mano de EVs y qué argumentos son sólidos hoy

3. **Incentivos fiscales y ayudas**
   - El mapa de incentivos actuales en España: MOVES III, bonificaciones autonómicas y ayudas municipales
   - Cómo incluir los incentivos en la conversación de precio sin que parezca un descuento disfrazado
   - Beneficios fiscales para autónomos y empresas: la deducción del IVA, el renting de EVs y el impuesto de matriculación
   - Las combinaciones de incentivos que maximizan el ahorro del comprador y cómo presentarlas

4. **La demo y la prueba de conducción**
   - Los puntos de la demo que generan el "efecto wow" y que no debes saltarte nunca
   - La prueba de conducción del EV: por qué es diferente a la del combustión y cómo orientarla para que el cliente experimente lo que le convierte
   - Cómo hacer la demo de la aplicación de carga y la planificación de ruta durante la presentación del vehículo

5. **El cierre y la gestión de los tiempos**
   - El problema de los plazos de entrega largos: cómo gestionar la espera sin perder al cliente
   - La reserva: cuándo pedirla, cómo justificarla y qué hacer para que el cliente no se eche atrás durante la espera
   - El seguimiento post-demo: el protocolo de contacto que mantiene el interés sin resultar invasivo

6. **Venta a empresas y flotas**
   - Los argumentos específicos para la venta de EVs a empresas: imagen ESG, beneficio en especie, deducción fiscal y coste operativo
   - El proceso de decisión en flotas: quién decide, cuánto tarda y qué documentación necesitan

Dame un guión de ventas adaptable a mi situación, con respuestas específicas a cada objeción y los datos actuales que debo manejar para ser creíble ante cualquier pregunta técnica del comprador.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Proceso de venta de EVs con manejo de objeciones y argumentario de incentivos',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Movilidad como servicio (MaaS)',
                'description'      => 'Productos que cambian cómo nos movemos: ride-hailing, car sharing, micro-movilidad y decisiones de producto cuando el hardware es parte del servicio.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager senior especializado en plataformas de movilidad, con experiencia en ride-hailing, car sharing, micro-movilidad y plataformas MaaS multimodales. Has trabajado en productos donde el hardware (vehículo, patinete, bici) es parte integral del servicio y entiendes los desafíos únicos de este tipo de productos.

Necesito orientación para tomar decisiones de producto en mi plataforma de movilidad.

**Mi contexto:**
[DESCRIBE TU PRODUCTO: tipo de servicio (ride-hailing, car sharing, micro-movilidad, MaaS multimodal), mercado, fase (MVP, crecimiento, escala), el principal problema de producto que quieres resolver y las métricas actuales más relevantes]

**Lo que necesito que analices:**

1. **Las particularidades del producto de movilidad**
   - Por qué el producto de movilidad es diferente a un SaaS: la dependencia del hardware, las operaciones físicas y cómo impactan en las decisiones de producto
   - El triángulo imposible de la movilidad: disponibilidad, precio y rentabilidad, y cómo las grandes plataformas lo han resuelto (o no)
   - El efecto de red en movilidad: cómo funciona en cada tipo de servicio y qué hace que sea más difícil de construir que en marketplaces digitales

2. **Métricas clave de los productos de movilidad**
   - Las métricas que importan según el tipo de servicio: utilización del vehículo, tiempo hasta el primer viaje, rides per vehicle per day, take rate
   - Cómo medir la experiencia de usuario en un contexto físico: NPS no es suficiente
   - Las métricas de operaciones que el PM debe entender aunque no gestione: tiempo de reposición, vandalismo, mantenimiento y cómo afectan al producto

3. **Decisiones de producto cuando el hardware es el servicio**
   - Cómo especificar los requisitos de hardware desde producto: qué puede pedir el PM y qué debe aceptar de las restricciones de ingeniería
   - El despliegue geográfico como decisión de producto: la densidad mínima viable, las zonas de operación y la política de geofencing
   - Pricing dinámico: los modelos, los algoritmos y los efectos secundarios que destruyen la confianza del usuario si no se gestionan bien
   - Suscripciones vs pay-per-use: cuándo tiene sentido cada modelo y cómo afecta a los patrones de uso

4. **La experiencia de usuario en la movilidad compartida**
   - El mapa de experiencia del usuario de movilidad: desde la necesidad de desplazamiento hasta el final del viaje, dónde ocurren los abandonos y cómo reducirlos
   - El proceso de onboarding con verificación de identidad: cómo hacerlo rápido y seguro a la vez
   - La gestión de incidencias en tiempo real: las particularidades de cuando el problema ocurre en la vía pública
   - Los estados del vehículo en la app: cómo representar disponibilidad, reserva y en curso sin generar frustración

5. **Regulación como restricción de producto**
   - Cómo construir el roadmap cuando la regulación puede cambiar las reglas del servicio de un día para otro
   - Los permisos y licencias como gate de lanzamiento en nuevas ciudades: cómo hacer product discovery mientras se tramita la autorización
   - Los límites de velocidad y zonas de aparcamiento obligatorio: cómo el cumplimiento regulatorio se convierte en feature del producto

6. **Crecimiento y expansión**
   - La estrategia de lanzamiento en una nueva ciudad: el orden de las decisiones de producto para alcanzar el punto de masa crítica
   - Las alianzas con operadores de transporte público: la integración MaaS y los desafíos técnicos y comerciales
   - Cómo segmentar usuarios para personalizar la oferta: el usuario de commuting vs el turista vs el usuario ocasional

7. **Mi problema específico**
   - Analiza el reto que he descrito y dame un plan de decisiones de producto priorizado
   - Señala los riesgos de cada opción y los criterios que usarías para elegir

Basa tu análisis en casos reales de plataformas conocidas cuando sea posible, señala qué funciona en Europa vs en otros mercados, y dame marcos de decisión concretos que pueda usar en mi siguiente reunión de producto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Decisiones de producto para plataformas MaaS con hardware integrado',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Talento en la transición al vehículo eléctrico',
                'description'      => 'La industria automotriz reconvierte ingenieros de combustión en ingenieros de software y electrónica: programas de upskilling y los perfiles más demandados.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de RRHH especializado en la industria automotriz con experiencia gestionando la transición de plantillas en fabricantes de componentes, OEMs y empresas de la cadena de suministro del automóvil. Has diseñado programas de reskilling para trabajadores de motores de combustión y conoces los perfiles técnicos que demanda la electromovilidad.

Necesito diseñar una estrategia de gestión de talento para la transición hacia el vehículo eléctrico en mi organización.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: tipo de empresa (fabricante, tier 1, tier 2, concesionario, empresa de carga), tamaño de plantilla, perfiles técnicos actuales más afectados por la transición y el horizonte temporal en el que necesitas el cambio]

**Lo que necesito que desarrolles:**

1. **Diagnóstico del impacto en la plantilla**
   - Qué perfiles de la industria del combustión tienen transferibilidad alta al EV (mecánicos de alta tensión, técnicos de electrónica) y cuáles tienen poca (especialistas en motor térmico, transmisiones)
   - Cómo hacer un mapa de competencias de la plantilla actual para identificar el gap real con el vehículo eléctrico
   - El ritmo real de la transición: qué plazos son realistas según el segmento de la empresa y cómo evitar el pánico que genera la comunicación precipitada

2. **Programas de reskilling para perfiles técnicos**
   - Formación en alta tensión: la certificación HV (alta tensión) para técnicos de taller, qué cubre, cuánto dura y dónde se puede homologar
   - Electrónica de potencia e inversores: los conceptos que un técnico mecánico necesita aprender y el tiempo realista para llegar a un nivel operativo
   - Software embebido y sistemas vehiculares: cómo introducir a perfiles de hardware en el desarrollo de software automotriz
   - Baterías y BMS: los fundamentos que todo el equipo técnico debe conocer, desde operaciones hasta ingeniería

3. **Nuevos perfiles que necesitas contratar**
   - Los perfiles más demandados en el sector EV que no existen en una empresa de combustión: ingenieros de batería, arquitectos de software embebido, especialistas en ciberseguridad automotriz
   - Dónde encontrarlos: universidades con programas específicos, empresas de las que provienen y el perfil de LinkedIn que indica competencia real vs moda
   - Los perfiles que vienen de fuera del sector automotriz y cómo evaluar si su conocimiento es transferible

4. **Gestión del cambio y la resistencia**
   - Cómo comunicar la transición a los trabajadores más expuestos sin generar parálisis o fuga de talento clave
   - Los sindicatos y la transición ecológica: cómo los acuerdos de "transición justa" están funcionando en los grandes fabricantes europeos
   - El ERE como último recurso: cuándo reconvertir ya no es viable económicamente y cómo gestionar el proceso respetando el conocimiento acumulado

5. **Employer branding para atraer talento EV**
   - Por qué las startups de movilidad y las marcas de EV nativas son más atractivas para el talento joven y cómo competir con ellas desde una empresa tradicional
   - El mensaje de employer branding que conecta con los ingenieros de software y electrónica que nunca pensaron trabajar en automoción
   - Las condiciones que realmente importan a los ingenieros de software: trabajo remoto, stack tecnológico, velocidad de decisión

6. **KPIs de la gestión del talento en la transición**
   - Cómo medir el progreso del reskilling más allá de horas de formación completadas
   - El ratio de retención de talento crítico durante la transición: qué señales de riesgo detectar antes de que el técnico clave se vaya
   - La brecha de competencias como métrica estratégica: cómo reportarla al comité de dirección de forma que genere acción

7. **Plan de acción para los próximos 12 meses**
   - Las prioridades de talento según mi contexto específico
   - El presupuesto de formación que es razonable invertir y cómo justificarlo
   - Los aliados externos: centros de formación, asociaciones sectoriales y programas públicos de apoyo a la transición

Dame un plan concreto con cronograma orientativo, señala las fuentes de financiación pública disponibles en España para formación en electromovilidad y los errores más frecuentes que cometen las empresas automotrices al gestionar esta transición.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Plan de reskilling y gestión del talento en la transición al vehículo eléctrico',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Finanzas de la electromovilidad',
                'description'      => 'Modelos de negocio de fabricantes de EVs, valoración de activos de carga y los instrumentos financieros que financian la transición al vehículo eléctrico.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un analista financiero especializado en el sector de la electromovilidad con experiencia en la valoración de fabricantes de vehículos eléctricos, operadores de infraestructura de carga y fondos de inversión en movilidad sostenible. Conoces tanto los modelos financieros como el sector técnico suficiente para entender las hipótesis que hay detrás de los números.

Necesito un análisis financiero riguroso del negocio de electromovilidad que me interesa.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: tipo de análisis que necesitas (valoración de empresa, análisis de inversión en carga, modelo de negocio de renting EV, análisis de proyecto de flota, evaluación de startup de movilidad), tu posición (inversor, analista interno, CFO, consultor financiero) y las preguntas concretas que quieres responder]

**Lo que necesito que analices:**

1. **Los modelos de negocio de la electromovilidad**
   - La diferencia estructural entre el modelo financiero de un fabricante de EV vs uno de combustión: márgenes de batería, software revenue, eficiencia de capex
   - El modelo de Tesla como referencia: qué partes son replicables y qué es específico de su posición
   - Los fabricantes europeos en transición: por qué el legacy de combustión es activo y pasivo a la vez, y cómo leerlo en las cuentas
   - Las marcas chinas de EV: sus ventajas de coste estructurales y qué significa para la valoración de los fabricantes europeos

2. **Valoración de empresas de electromovilidad**
   - Por qué los múltiplos tradicionales de automoción (EV/EBITDA de 4-6x) no funcionan para los pure-plays de EV
   - Los múltiplos alternativos que usa el mercado: price/deliveries, EV/gross profit, y sus limitaciones
   - El DCF en empresas de EV en pérdidas: cómo construir las hipótesis de margen a largo plazo cuando no hay historia
   - Los ajustes que hay que hacer al EBITDA de un fabricante de EV: los créditos regulatorios, las inversiones en batería y el software revenue

3. **Infraestructura de carga: el modelo financiero**
   - Los modelos de negocio del CPO (Charge Point Operator): propiedad de estaciones vs modelo de red
   - El unit economics de un cargador rápido: capex de instalación, coste de la energía, utilización necesaria para el break-even
   - Cómo valorar un operador de carga: el activo regulado vs el activo competitivo
   - Los contratos con retailers y parking (el modelo hub de carga): cómo se reparte el ingreso y quién asume el riesgo

4. **Instrumentos financieros de la transición energética**
   - Los bonos verdes y de sostenibilidad en el sector automotriz: cuándo un fabricante puede emitirlos y a qué coste
   - El leasing de baterías vs propiedad: el impacto en el balance del fabricante y del comprador
   - Los fondos de infraestructura en movilidad sostenible: qué buscan, qué TIR exigen y cómo estructuran sus inversiones
   - NextGenerationEU y los fondos de la transición ecológica: el mapa de financiación pública para proyectos de electromovilidad en España

5. **Análisis de riesgo específico del sector**
   - El riesgo de batería: precio del litio, cobalto y los efectos en el margen del fabricante
   - El riesgo regulatorio: cómo el calendario de prohibición de combustión afecta a la valoración de los activos legacy
   - El riesgo tecnológico: qué pasa con la inversión en carga si la tecnología de batería cambia radicalmente los hábitos de carga
   - Riesgo geopolítico: la dependencia de la cadena de suministro de baterías de China y sus implicaciones financieras

6. **TCO (Coste Total de Propiedad) para decisiones de flota**
   - El modelo de TCO para la comparación EV vs diésel en flotas de empresa: todos los componentes que hay que incluir
   - Las hipótesis que más mueven el TCO: precio de la energía, kilometraje anual, valor residual
   - Cómo presentar el análisis de TCO a un comité de dirección que sigue pensando en precio de compra

7. **Mi análisis específico**
   - Construye el esquema del modelo financiero que necesito para mi situación
   - Dame las hipótesis de mercado que usarías como punto de partida y sus fuentes
   - Señala los errores más frecuentes en el análisis financiero de proyectos de electromovilidad

Sé riguroso con los números, señala cuándo las hipótesis son muy inciertas y dame referencias de donde obtener datos sectoriales actualizados para calibrar el modelo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Análisis financiero de fabricantes de EVs, infraestructura de carga e inversión en movilidad',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Regulación del vehículo autónomo y conectado',
                'description'      => 'Marco legal emergente de los coches autónomos: responsabilidad civil, homologación, datos del vehículo y las regulaciones que determinarán quién manda en el mercado.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en derecho de la movilidad autónoma y conectada, con expertise en regulación europea de homologación vehicular, responsabilidad civil del vehículo autónomo y protección de datos generados por los vehículos. Conoces tanto el estado actual de la regulación como el debate legislativo en curso.

Necesito orientación jurídica sobre el marco regulatorio aplicable a mi proyecto de vehículo autónomo o conectado.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: tipo de proyecto (vehículo autónomo de nivel 3-4, sistema ADAS, plataforma de datos vehiculares, ride-hailing autónomo, vehículo conectado, componente de software automotriz), tu rol (fabricante, proveedor de software, operador, inversor) y las preguntas legales concretas que necesitas resolver]

**Lo que necesito que analices:**

1. **Niveles de autonomía y su tratamiento legal**
   - La clasificación SAE (niveles 0 a 5) y por qué el nivel 3 es el más problemático desde el punto de vista de la responsabilidad
   - El nivel 3 en Europa: el Reglamento UN-R157 y las condiciones bajo las que el sistema puede asumir el control (ODD: Operational Design Domain)
   - La diferencia entre conducción autónoma comercial y los pilotos y pruebas en vía pública: qué autoriza cada marco

2. **Responsabilidad civil del vehículo autónomo**
   - El modelo actual de responsabilidad por accidente de tráfico y cómo cambia cuando el sistema conduce
   - La Directiva de Responsabilidad Civil sobre IA (AILD): su estado de tramitación y lo que cambia respecto a la responsabilidad objetiva actual
   - El problema de la caja negra: cómo se accede a los datos del vehículo para determinar la responsabilidad y quién tiene ese derecho
   - Los seguros de responsabilidad civil del vehículo autónomo: el debate sobre si el seguro tradicional de conductor aplica y qué proponen los reguladores

3. **Homologación europea del vehículo autónomo**
   - El Reglamento (UE) 2018/858 y los actos delegados que añaden requisitos para sistemas automatizados
   - El papel de la UNECE (Geneva Regulations) en la homologación internacional: por qué los reglamentos UN-R son la base del tipo de aprobación europeo
   - El proceso de homologación de un ADAS nivel 2+ vs un sistema nivel 3: qué pruebas, qué documentación y qué plazos reales hay que esperar
   - Los requisitos de ciberseguridad (UN-R155) y actualización de software (UN-R156) que ya son obligatorios en los nuevos vehículos

4. **Datos del vehículo conectado**
   - Qué datos genera un vehículo conectado moderno y quién tiene derecho a acceder a ellos: conductor, fabricante, taller, asegurador, autoridades
   - El Reglamento de Datos (Data Act): cómo afecta a los fabricantes de vehículos y la apertura de datos vehiculares a terceros
   - GDPR y datos de conducción: cuándo los datos del vehículo son datos personales, cuál es la base legal del tratamiento y los derechos del conductor
   - El Data Space de Movilidad europeo (EUCARIS, MDS): qué es y qué obligaciones genera para los operadores de flotas conectadas

5. **Operación de pruebas en vía pública en España**
   - El Real Decreto de pruebas de vehículos autónomos: el régimen de autorizaciones, las zonas habilitadas y los requisitos de seguridad
   - El protocolo con la DGT: cómo tramitar la autorización para pruebas en vías convencionales
   - Los seguros específicos para pruebas: qué coberturas son obligatorias y qué riesgos cubre el fabricante directamente

6. **Competencia y posición de mercado**
   - Cómo la regulación europea está diseñando el mercado: las ventajas para los fabricantes europeos y las barreras de entrada para los actores chinos y americanos
   - El acceso a los datos de reparación y diagnóstico (Reglamento de acceso a datos vehiculares): por qué es estratégico para talleres independientes e insurtech
   - Las licencias de operación para robotaxis: el estado actual en las ciudades que ya los autorizan y el camino para una ciudad española

7. **Mi situación legal específica**
   - Analiza los riesgos legales de mi proyecto tal como lo he descrito
   - Dame el mapa de cumplimiento que necesito: qué regulaciones aplican, en qué plazos y qué acciones son prioritarias
   - Señala las zonas grises donde la regulación es ambigua y qué postura defensiva recomendarías

Sé claro sobre el estado actual de la regulación vs lo que está en tramitación, y señala cuándo la respuesta depende de la jurisdicción específica dentro de la UE.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 25,
                'use_case'         => 'Marco legal del vehículo autónomo: responsabilidad, homologación y datos vehiculares',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte en plataformas de movilidad',
                'description'      => 'Gestión de incidentes de usuarios de apps de transporte compartido: accidentes, objetos perdidos, disputas de tarifa y protocolos que resuelven sin escalar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un manager de operaciones de soporte especializado en plataformas de movilidad compartida (ride-hailing, car sharing, micro-movilidad). Conoces los tipos de incidencia únicos de este sector, los protocolos de resolución y cómo equilibrar la satisfacción del usuario con la protección de la empresa y sus conductores o vehículos.

Necesito que me ayudes a gestionar un incidente de soporte o a diseñar los protocolos para los casos más frecuentes de mi plataforma.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: tipo de plataforma (ride-hailing, car sharing, bici/patinete compartido), el incidente o tipo de incidencia concreta que quieres resolver, y si buscas resolver un caso específico o diseñar un protocolo general]

**Los tipos de incidencia más comunes que necesitas cubrir:**

1. **Accidentes e incidentes de seguridad**
   - El protocolo de primeras 24 horas cuando un usuario reporta un accidente: qué información recopilar, a quién notificar internamente y externamente
   - La comunicación con el usuario afectado: el equilibrio entre empatía genuina y no asumir responsabilidad prematuramente
   - Coordinación con seguros: el proceso de reporte al seguro del vehículo y la documentación que necesitas tener lista
   - Qué hacer cuando el incidente es grave (heridos, daños significativos): el árbol de escalado y los tiempos máximos de respuesta en cada nivel
   - La documentación del incidente para proteger a la empresa en caso de reclamación posterior

2. **Objetos perdidos**
   - El proceso para objetos perdidos en un vehículo compartido: cómo coordinar entre usuario, conductor o flota, y el equipo de operaciones
   - La política de responsabilidad: hasta dónde llega la obligación de la plataforma y cómo comunicarlo sin generar conflicto
   - La gestión de objetos de alto valor (documentos, electrónica, medicamentos): el protocolo diferenciado y los tiempos de respuesta más estrictos
   - Cuándo y cómo cerrar un caso de objeto perdido sin éxito: la comunicación que cierra sin generar reseña negativa

3. **Disputas de tarifa y cobros incorrectos**
   - Los casos más frecuentes: tarifa superior a la estimada, cobro duplicado, cancelación con cargo, tarifa dinámica no informada
   - El criterio de devolución: qué casos se devuelven siempre, cuáles se evalúan y cuáles no tienen lugar a reembolso, y cómo documentar cada decisión
   - La comunicación del rechazo: cómo decir que no sin que el usuario escale a su banco o a redes sociales
   - Gestión de disputas de tarjeta (chargebacks): el protocolo para responder y la documentación que necesitas para ganar la disputa

4. **Incidentes con conductor o vehículo**
   - Reportes de mala conducta del conductor: el proceso de investigación, la suspensión cautelar y la comunicación con el usuario mientras se investiga
   - Vehículos en mal estado: cuando el usuario reporta un problema con el estado del vehículo después del viaje y exige compensación
   - No-shows y cancelaciones tardías: las políticas que son justas para conductor y usuario y cómo aplicarlas consistentemente
   - Acusaciones graves (agresión, acoso): el protocolo diferenciado que protege al usuario y activa el equipo de safety

5. **Incidencias propias de la micro-movilidad**
   - Patinetes y bicis con avería en medio del trayecto: el proceso de compensación y recogida
   - Multas de tráfico al usuario por aparcamiento incorrecto: la política de responsabilidad y cómo comunicarla
   - Zonas de aparcamiento conflictivas: el tratamiento de usuarios que reclaman que no había zona disponible cerca

6. **Gestión del escalado y usuarios difíciles**
   - Los criterios objetivos para escalar al nivel 2 y al equipo legal: qué señales en el primer contacto indican que el caso se va a complicar
   - El usuario que amenaza con redes sociales o con acudir a la prensa: el protocolo que defusa sin ceder sin criterio
   - El usuario recurrente en disputas: cómo gestionar patrones de abuso sin acusar al usuario directamente

7. **Protocolos que necesito para mi situación**
   - Desarrolla el protocolo específico para el caso o tipo de incidencia que he descrito
   - Dame los scripts de comunicación (chat y email) para cada punto de contacto del proceso
   - Define los tiempos de respuesta objetivo y los criterios de compensación económica cuando aplique

Basa las respuestas en las mejores prácticas del sector (Uber, Cabify, Bolt, Tier, Lime), adapta a la regulación española cuando sea relevante y dame respuestas que pueda usar directamente con el equipo de soporte.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 15,
                'use_case'         => 'Protocolos de soporte para accidentes, objetos perdidos y disputas de tarifa en movilidad compartida',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultor de movilidad sostenible',
                'description'      => 'El nicho del consultor independiente en electromovilidad, infraestructura de carga y la transformación del sector del transporte.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor senior de movilidad sostenible con experiencia como freelance en proyectos de electromovilidad, infraestructura de carga, planificación de flotas EV y transformación del sector del transporte. Has trabajado tanto con empresas privadas como con administraciones públicas y conoces el negocio del consulting independiente en este nicho.

Necesito orientación para establecerme o crecer como consultor independiente en movilidad sostenible.

**Mi contexto:**
[DESCRIBE TU SITUACIÓN: experiencia previa (sector del que vienes, años de experiencia, especialización técnica), si ya eres freelance o estás en transición desde un puesto de empresa, el tipo de proyectos que te interesan y el mercado geográfico al que apuntas]

**Lo que necesito que desarrolles:**

1. **Definir tu nicho y propuesta de valor**
   - Los sub-nichos de la consultoría de movilidad sostenible donde hay demanda real y pocos consultores especializados: carga rápida, gestión de flotas EV, movilidad urbana sostenible, planning de rutas con EV, ESG en transporte
   - Cómo diferenciarte del consultor generalista de sostenibilidad que también "hace algo de movilidad"
   - La propuesta de valor específica según tu experiencia previa: cómo conectar lo que sabes con lo que el cliente necesita
   - Los clientes objetivo según el nicho: consultoras de ingeniería, operadores de transporte, ayuntamientos, promotores inmobiliarios, flotas de empresa, utilities con proyectos de carga

2. **Los tipos de proyectos y cómo conseguirlos**
   - Los proyectos más frecuentes en consultoría de electromovilidad en España: estudios de viabilidad de infraestructura de carga, planes de electrificación de flota, asesoría en financiación pública, homologación de instalaciones
   - Los proyectos de administración pública: cómo acceder a licitaciones del sector, los requisitos de solvencia técnica y los pliegos donde un consultor individual puede competir
   - Los proyectos privados: cómo construir una red de referidos en el sector y por qué la mayoría de los proyectos no se publican en ningún portal
   - El modelo de colaboración con consultoras grandes: cuándo subcontratar o colaborar es mejor que competir

3. **Tarifas y estructura de servicios**
   - El rango de tarifas razonables para consultoría de movilidad en España según el tipo de proyecto y el cliente
   - Los formatos de proyecto que funcionan mejor: retainer mensual, proyecto cerrado, precio por entregable, formación y workshops
   - Cómo presupuestar un proyecto de consultoría técnica: los costes ocultos que los consultores nuevos no incluyen (desplazamientos, visitas a campo, subcontratistas técnicos)
   - La negociación de tarifas con administraciones públicas: las particularidades del presupuesto público y los plazos de pago

4. **Posicionamiento y visibilidad en el sector**
   - El contenido que posiciona a un consultor de movilidad como referente: los formatos y canales que funcionan en este nicho específico (LinkedIn, informes sectoriales, ponencias)
   - Las asociaciones y redes del sector que vale la pena integrar: ANFAC, Aedive, ASEPA, clústeres de automoción y movilidad de las comunidades autónomas
   - La participación en eventos sectoriales como fuente de negocio: cuáles son los eventos clave en España y cómo sacarles rentabilidad
   - El SEO del consultor independiente: qué buscan los clientes cuando buscan a alguien como tú y cómo aparecer

5. **Gestión del negocio de consultoría**
   - La estructura jurídica más eficiente para un consultor de este nicho: autónomo, SL, o colaboración con una estructura existente
   - Los seguros profesionales que necesitas en consultoría técnica: RC profesional, cobertura para informes y recomendaciones que se implementan
   - La gestión de la pipeline de proyectos: cómo evitar el ciclo boom-bust donde o estás saturado o no tienes proyectos
   - El contrato de consultoría: las cláusulas que te protegen en proyectos de movilidad (responsabilidad por recomendaciones, propiedad intelectual de los informes, confidencialidad)

6. **Formación continua y credibilidad técnica**
   - Las certificaciones y formaciones que añaden credibilidad en este nicho: instalaciones de recarga (BT y AT), gestión energética, planificación de movilidad urbana
   - Cómo mantenerse actualizado en un sector que cambia rápido: las fuentes de información que un consultor de movilidad no puede ignorar
   - La línea entre generalista y especialista: cuándo es mejor decir que no a un proyecto que está fuera de tu expertise

7. **Plan de lanzamiento o crecimiento para mi situación**
   - Los primeros 6 meses: cómo conseguir los primeros proyectos cuando aún no tienes cartera de proyectos como freelance
   - Las métricas del negocio de consultoría que debes medir: facturación por hora efectiva, ratio de conversión de propuestas, tiempo de cierre
   - El plan de crecimiento a 2 años: cuándo tiene sentido asociarse con otro consultor, contratar o construir un equipo pequeño

Dame un plan concreto adaptado a mi situación, con ejemplos de cómo otros consultores han construido su negocio en este nicho y los errores más frecuentes que cometen en los primeros dos años.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 20,
                'use_case'         => 'Construcción del negocio de consultoría freelance en electromovilidad y movilidad sostenible',
                'vote_score'       => 33,
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
