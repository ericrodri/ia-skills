<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills179Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de educación financiera',
                'description'      => 'Llega a audiencias que necesitan educación financiera sin ser patronizante: el lenguaje, los formatos y las plataformas que hacen que la gente aprenda sobre dinero sin aburrirse.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en marketing de contenidos financieros con experiencia en marcas que han conseguido que el público general se interese genuinamente por las finanzas personales. Tu objetivo es ayudarme a diseñar una estrategia de marketing de educación financiera que llegue a personas que necesitan el conocimiento pero que no se consideran "del mundo del dinero".

**CONTEXTO PREVIO:**
Antes de comenzar, pregúntame:
1. ¿Qué entidad o marca hay detrás: banco, fintech, plataforma de inversión, ONG financiera, creador de contenido independiente?
2. ¿A qué perfil de audiencia nos dirigimos: millenials con ingresos irregulares, mujeres que delegan las finanzas, jóvenes de primera generación universitaria, jubilados?
3. ¿Qué producto o servicio quiero que conozcan, aunque sea de forma indirecta?
4. ¿Cuáles son los canales actuales y el presupuesto disponible?
5. ¿Hay restricciones regulatorias (CNMV, Banco de España) en los contenidos que puedo publicar?

**BLOQUE 1 — DIAGNÓSTICO DE LA AUDIENCIA:**
- Diseña el mapa de barreras que impide a la audiencia interesarse por las finanzas: vergüenza, aburrimiento, sensación de que "no es para mí", desconfianza en las instituciones financieras
- Identifica los momentos de vida donde la audiencia está naturalmente receptiva a contenido financiero: primer trabajo, matrimonio, primer hijo, herencia, despido
- Explica la diferencia entre audiencias que buscan información financiera activamente y las que necesitan que llegue a ellas sin que la busquen
- Muéstrame los referentes de educación financiera que han conseguido audiencias masivas no financieras: qué hicieron diferente, qué puedo aprender

**BLOQUE 2 — ESTRATEGIA DE CONTENIDO:**
- Define el posicionamiento editorial: el tono (cercano vs. experto, optimista vs. realista), el punto de vista único y el terreno temático que vamos a poseer
- Diseña los pilares de contenido: los tres o cuatro temas que vamos a tratar siempre con autoridad y que coinciden con lo que la audiencia necesita y nosotros podemos enseñar
- Crea el mapa de contenidos por etapa de awareness: desde "me importa poco el dinero" hasta "estoy listo para tomar decisiones"
- Explica cómo convertir conceptos financieros complejos en contenido que la audiencia comparte: las metáforas, los ejemplos de vida real, los datos sorprendentes
- Define la cadencia de publicación y el mix de formatos por canal

**BLOQUE 3 — FORMATOS QUE FUNCIONAN:**
- Los formatos de contenido financiero con mayor engagement según la audiencia: shorts vs. artículos largos, infografías vs. calculadoras, newsletters vs. podcasts
- El contenido de entretenimiento financiero: los casos reales, los análisis de series o películas con lecciones de dinero, el storytelling de "cómo lo hice yo"
- El contenido de utilidad inmediata: las plantillas descargables, las calculadoras interactivas, los checklists que el usuario puede aplicar hoy
- La estrategia de contenido generado por el usuario: cómo conseguir que la audiencia comparta sus propias historias financieras
- El uso de datos propios como contenido: informes de comportamiento financiero de los usuarios que ilustran tendencias

**BLOQUE 4 — DISTRIBUCIÓN Y PLATAFORMAS:**
- Las plataformas donde la audiencia financieramente desinformada consume contenido: no es LinkedIn, probablemente es TikTok, Instagram, YouTube o WhatsApp
- La estrategia de SEO para contenido de educación financiera: las búsquedas de long tail que hacen personas con dudas reales
- La newsletter financiera que la gente abre: el formato, la frecuencia, el asunto que funciona, la longitud
- El podcast de finanzas que crece: estructura del episodio, duración, plataformas de distribución, estrategia de invitados
- La colaboración con creadores no financieros para llegar a su audiencia sin que parezca publicidad

**BLOQUE 5 — CONVERSIÓN Y MÉTRICAS:**
- Define la cadena de valor del contenido financiero: de lector anónimo a usuario registrado a cliente activo
- Las métricas que importan en educación financiera más allá de las visitas: tiempo de lectura, tasa de retorno, acciones tomadas tras el contenido
- Cómo medir el impacto real en el comportamiento financiero de la audiencia (no solo el engagement)
- El funnel de conversión del contenido de educación a la prueba del producto

**BLOQUE 6 — CUMPLIMIENTO REGULATORIO:**
- Las restricciones del Banco de España y la CNMV sobre publicidad y contenidos de inversión
- La diferencia entre educación financiera (libre) y asesoramiento financiero (regulado): dónde está la línea
- Cómo estructurar los disclaimers sin que arruinen la experiencia de lectura
- Los contenidos sobre productos financieros concretos: qué se puede decir y qué requiere registro como asesor

Empieza con las preguntas de contexto y luego diseñemos la estrategia completa.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar estrategia de marketing de educación financiera accesible y no patronizante',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Personal finance tech: construye apps de finanzas personales',
                'description'      => 'Los retos técnicos de la agregación bancaria, la privacidad de los datos financieros y las decisiones de arquitectura de los productos que ayudan a los usuarios a mejorar su situación económica.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un arquitecto de software especializado en fintech y personal finance tech con experiencia en productos como Fintonic, Money Dashboard o YNAB. Tu objetivo es ayudarme a diseñar o mejorar la arquitectura técnica de una aplicación de finanzas personales.

**CONTEXTO TÉCNICO:**
Antes de comenzar, pregúntame:
1. ¿Qué tipo de app estoy construyendo: agregador bancario, presupuestador, tracker de inversiones, planificador de deuda?
2. ¿Cuál es el stack tecnológico actual o preferido?
3. ¿En qué mercado opera: España, Europa, global? Esto determina qué APIs de open banking están disponibles
4. ¿Cuál es el estado del proyecto: idea, MVP, producto en producción con usuarios?
5. ¿Cuáles son los principales desafíos técnicos que enfrento ahora mismo?

**MÓDULO 1 — ARQUITECTURA DE AGREGACIÓN BANCARIA:**
- Explica las opciones de open banking en Europa: PSD2, el ecosistema de TPPs (Third Party Providers), las APIs de los principales bancos españoles
- Compara los proveedores de agregación bancaria: Plaid (EE.UU.), TrueLayer, Nordigen (ahora GoCardless), Belvo para Latam — cuál elegir según mi caso
- Diseña la arquitectura de sincronización de datos bancarios: polling vs. webhooks, gestión de las sesiones de acceso, renovación de tokens
- El manejo de errores en la agregación bancaria: cuentas caídas, cambios en la autenticación del banco, datos incorrectos o duplicados
- Cómo manejar el multi-banco: el usuario conecta cinco bancos distintos con cinco APIs distintas y quiero mostrar una visión unificada

**MÓDULO 2 — MODELO DE DATOS FINANCIEROS:**
- Diseña el esquema de datos para transacciones financieras: los campos estándar, las extensiones, la normalización de formatos entre bancos
- La categorización de transacciones: las opciones entre ML propio, APIs de categorización (como la de Plaid) y reglas determinísticas
- Cómo manejar las transacciones recurrentes: detectar suscripciones, nóminas, alquileres de forma automática
- El modelo de datos para presupuesto: periodos, categorías, límites, gastos vs. presupuesto, carry-over
- La gestión de fechas en finanzas: valor date vs. booking date, timezone, recurrencias mensuales con fin de mes variable

**MÓDULO 3 — PRIVACIDAD Y SEGURIDAD:**
- Los requisitos de GDPR para una app que accede a datos bancarios: base legal, minimización, retención, derecho al olvido
- El modelo de autorización PSD2: qué datos puede pedir una app, por cuánto tiempo, qué requiere reconsentimiento
- Diseña el sistema de cifrado de datos financieros en reposo y en tránsito: qué estándares, qué herramientas
- La gestión de credenciales bancarias: por qué nunca debes almacenar las credenciales del banco y cómo funciona el flujo OAuth de open banking
- El modelo de threat modeling para una app financiera: los vectores de ataque más relevantes y sus mitigaciones

**MÓDULO 4 — EXPERIENCIA DE USUARIO TÉCNICA:**
- La sincronización en background: cuándo refrescar los datos, cómo manejar la latencia de las APIs bancarias
- La UI offline-first: qué mostrar cuando no hay conectividad, cómo manejar el estado stale
- Las notificaciones financieras en tiempo real: cómo detectar un gasto grande, un cobro inesperado, un saldo bajo
- El dashboard financiero: qué datos agregar, cómo calcular el net worth, cómo proyectar el saldo futuro
- Los gráficos de finanzas personales: qué visualizaciones añaden valor real y cuáles son solo ruido visual

**MÓDULO 5 — COMPLIANCE Y REGULACIÓN FINTECH:**
- Los requisitos para operar como AISP (Account Information Service Provider) en España: registro en Banco de España, capital mínimo, auditorías
- Cuándo necesito registro regulatorio vs. cuándo puedo operar bajo el paraguas de otro proveedor regulado
- Las obligaciones de AML (Anti-Money Laundering) para apps financieras: cuándo aplican, qué controles implementar
- Los estándares de la industria para el testing de seguridad en fintech: penetration testing, SOC 2, certificaciones

**MÓDULO 6 — ESCALADO Y MONETIZACIÓN:**
- Los modelos de negocio de personal finance tech: freemium, suscripción, comisión por producto financiero recomendado, venta de datos agregados (con anonimización)
- Los retos técnicos de escalar la sincronización bancaria: rate limits de las APIs, costes de las llamadas, gestión de la cola
- Cómo manejar el volumen de datos financieros de miles de usuarios sin que los costes de almacenamiento se disparen
- Los proveedores de infraestructura más utilizados en fintech y sus consideraciones de compliance

Empieza con las preguntas de contexto y luego vamos módulo a módulo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar la arquitectura técnica de una app de finanzas personales con open banking',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de apps de finanzas personales',
                'description'      => 'Las apps financieras deben construir confianza Y hacer fácil lo difícil: principios de diseño de Monzo, Revolut y las apps que han conseguido que la gente gestione bien su dinero.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador de producto especializado en aplicaciones financieras con experiencia en el diseño de experiencias de usuario para banca digital, fintech y herramientas de gestión del dinero. Tu objetivo es ayudarme a diseñar una app de finanzas personales que construya confianza, reduzca la ansiedad financiera y haga que los usuarios tomen mejores decisiones con su dinero.

**CONTEXTO DEL PROYECTO:**
Antes de comenzar, pregúntame:
1. ¿Qué tipo de app financiera estoy diseñando: cuenta bancaria, presupuestador, tracker de inversiones, planificador de deuda?
2. ¿Cuál es el perfil del usuario objetivo y qué relación tiene con el dinero: ansiedad, desinterés, entusiasmo?
3. ¿Tengo referentes de diseño o competidores directos cuyo diseño quiero superar?
4. ¿Cuál es la plataforma: iOS, Android o web?
5. ¿Hay un sistema de diseño existente o partimos de cero?

**MÓDULO 1 — CONFIANZA COMO FUNDAMENTO DEL DISEÑO:**
- Explica por qué la confianza es el primer reto de diseño en una app financiera: los usuarios comparten datos bancarios, confían en que el dinero está seguro
- Los señales visuales de confianza en apps financieras: los colores (azul institucional vs. verde de crecimiento), la tipografía formal, los certificados y sellos que muestrar y dónde
- Cómo Monzo construyó confianza con un diseño radicalmente distinto al bancario tradicional: qué aprender, qué no copiar
- El lenguaje de confianza: los textos que tranquilizan al usuario en cada paso crítico (conexión bancaria, configuración de pagos, visualización de deuda)
- El diseño del estado de error como oportunidad de construir confianza: cómo comunicar que algo ha salido mal sin que el usuario entre en pánico

**MÓDULO 2 — REDUCCIÓN DE LA ANSIEDAD FINANCIERA:**
- El problema de mostrar todos los datos financieros a la vez: cómo el dashboard lleno de gráficos puede paralizarr en vez de empoderar
- La progressive disclosure en finanzas: mostrar primero lo que el usuario necesita saber, permitir profundizar en lo que quiere
- Diseño para el estado de "cuenta en rojo": cómo mostrar una situación financiera difícil sin que el usuario abandone la app
- Las notificaciones que ayudan vs. las que crean pánico: la diferencia entre "te queda poco saldo" y "¡alerta!"
- El diseño de la visión del futuro financiero: proyecciones y simulaciones que motivan en vez de asustar

**MÓDULO 3 — JERARQUÍA VISUAL Y DASHBOARD:**
- Diseña la arquitectura de información del dashboard financiero: qué ver primero, qué está a un tap de distancia, qué está enterrado
- Los patrones de visualización de datos financieros que funcionan: gráfico de dona para gastos por categoría, barras para presupuesto, línea para evolución del saldo
- La visualización del presupuesto: cómo mostrar lo gastado vs. lo disponible de una forma que motive el comportamiento positivo
- Cómo mostrar el net worth cuando la cifra puede ser negativa: el diseño que no juzga pero que informa
- Los numbers que el usuario debe ver de un vistazo vs. los que necesitan explorar

**MÓDULO 4 — FLUJOS CRÍTICOS:**
- El onboarding de una app financiera: cómo conectar el primer banco sin que el usuario abandone por miedo
- El flujo de categorización de gastos: automática con corrección manual o completamente manual, diseño de la UX de cada opción
- La creación de un presupuesto: el asistente que lleva al usuario de cero a presupuesto configurado sin agobiarle
- El flujo de consulta de una transacción: la taxonomía de información en el detalle del movimiento
- La gestión de cuentas y productos: añadir un banco nuevo, desconectar uno, resolver una cuenta con error

**MÓDULO 5 — PATRONES DE DISEÑO PARA COMPORTAMIENTOS POSITIVOS:**
- El diseño de los objetivos de ahorro: cómo hacer que guardar dinero se sienta como progreso, no como privación
- La gamificación responsable en finanzas: las recompensas y los hitos que funcionan sin crear comportamientos adictivos
- Los nudges de diseño para mejorar el comportamiento financiero: el redondeo automático, el ahorro programado, el recordatorio de presupuesto
- Cómo mostrar el impacto de una decisión antes de tomarla: la calculadora de "si dejas de gastar X en Y, en Z meses tienes W"

**MÓDULO 6 — SISTEMA DE DISEÑO Y ACCESIBILIDAD:**
- Los componentes de un design system financiero: tablas, gráficos, tarjetas de transacción, estados vacíos, estados de error
- El sistema de colores para una app financiera: cómo usar el color para indicar positivo/negativo sin depender solo del rojo y verde (daltonismo)
- La tipografía numérica: fuentes con buenos dígitos alineados, el tamaño que permite leer cantidades de un vistazo
- Los estados de carga en una app que depende de APIs lentas: skeletons, placeholders y la percepción de velocidad

Empieza con las preguntas de contexto y diseñemos juntos la experiencia.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar la UX de una app de finanzas personales que construye confianza y mejora el comportamiento financiero',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta de servicios de asesoría financiera personal',
                'description'      => 'El proceso de venta del asesor financiero independiente: propuesta de valor, diferencial de la planificación financiera personal y el modelo de negocio que no depende de comisiones de producto.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en desarrollo de negocio para asesores financieros independientes con experiencia en construir prácticas de planificación financiera personal que no dependen de las comisiones de los productos que recomiendan. Tu objetivo es ayudarme a diseñar y ejecutar la estrategia de ventas de mi servicio de asesoría financiera independiente.

**CONTEXTO PROFESIONAL:**
Antes de empezar, pregúntame:
1. ¿Soy ya asesor financiero registrado (EAF, agente vinculado) o estoy en proceso de regulación?
2. ¿Tengo cartera de clientes actual o construyo desde cero?
3. ¿Cuál es mi especialización o nicho: jóvenes profesionales, autónomos, colectivos específicos, herencias?
4. ¿Cuál es mi modelo de fees: tarifa plana, fee por hora, porcentaje de patrimonio gestionado?
5. ¿Cuál es mi mercado geográfico: local, nacional, online?

**BLOQUE 1 — POSICIONAMIENTO Y PROPUESTA DE VALOR:**
- Explica la diferencia que el cliente percibe entre asesor financiero independiente y el empleado de banco: cómo articular el "sin conflicto de interés" de forma que resuene
- Diseña la propuesta de valor para cada segmento: qué le importa al profesional de 35 años vs. al empresario de 55 vs. al divorciado que recibe una herencia
- Cómo diferenciarse dentro de los asesores independientes: la especialización que hace que seas el único en tu categoría
- El posicionamiento de precio: por qué el fee-only es una ventaja competitiva y cómo explicarlo a un cliente que "no está acostumbrado a pagar por asesoría financiera"
- Crea los tres mensajes clave de mi propuesta de valor que debo saber decir en 30 segundos, 2 minutos y 10 minutos

**BLOQUE 2 — PROCESO DE CAPTACIÓN:**
- Define los canales de adquisición de clientes para un asesor independiente: referencias de clientes actuales, LinkedIn, eventos, colaboración con otros profesionales (abogados, notarios, gestores)
- Diseña la estrategia de contenido de LinkedIn para un asesor financiero: qué publicar, con qué frecuencia, cómo construir autoridad sin violar la regulación de comunicaciones financieras
- El modelo de referidos: cómo pedir referencias sin incomodidad, cómo incentivarlas, cómo hacer que los clientes satisfechos se conviertan en fuente de nuevos clientes
- La colaboración con notarios y abogados de herencias: el partnership que te convierte en el asesor al que llaman cuando alguien hereda
- El evento de educación financiera como herramienta de captación: cómo organizarlo, cómo convertir asistentes en clientes

**BLOQUE 3 — EL PROCESO DE VENTA:**
- Diseña el proceso de venta de planificación financiera personal: desde el primer contacto hasta la firma del contrato
- La reunión de diagnóstico gratuita: qué preguntar, qué analizar, cómo demostrar valor sin entregar el trabajo antes del contrato
- Cómo presentar la propuesta de honorarios: el momento, el formato, la respuesta a la objeción de precio
- Las objeciones más comunes y sus respuestas: "ya tengo un gestor en el banco", "con lo que tengo no merece la pena", "no confío en los asesores financieros", "¿qué garantía tengo?"
- El cierre: cómo pasar de "me lo pienso" a "vamos a empezar" sin presionar

**BLOQUE 4 — MODELO DE HONORARIOS:**
- Compara los modelos de fees: fee-only por hora, retainer mensual, tarifa plana por plan financiero, porcentaje de activos bajo gestión
- Cómo calcular el precio de una primera planificación financiera: las horas reales, el valor percibido, los rangos del mercado en España
- El modelo de suscripción de asesoría financiera: qué incluye el plan básico, qué el premium, cómo hacer el upsell
- Cómo manejar clientes con patrimonios muy distintos: el cliente con 50.000€ vs. el que tiene 500.000€, ¿mismo modelo de fee?
- La transparencia de honorarios como herramienta de venta: por qué publicar los precios en la web ayuda a atraer clientes de calidad

**BLOQUE 5 — FIDELIZACIÓN Y CRECIMIENTO:**
- Define el proceso de revisión anual del plan financiero: el momento para mostrar el valor entregado y el que más fideliza
- Cómo comunicar los cambios del mercado a los clientes sin crear alarma innecesaria y sin dejar de informar
- La estrategia de expansión de servicios: de la planificación financiera básica a la planificación fiscal, la gestión patrimonial, la planificación de jubilación
- Cómo identificar el momento en que un cliente está listo para aumentar el nivel de servicio

Empieza con las preguntas de contexto y vamos construyendo el sistema de ventas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir el proceso de ventas y captación de un asesor financiero independiente',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Producto de wealth management digital',
                'description'      => 'Las plataformas de gestión patrimonial digital: roboadvisors, brokers online y las decisiones de producto cuando el usuario pone sus ahorros en tus manos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un product manager especializado en plataformas de inversión y gestión patrimonial digital con experiencia en roboadvisors, brokers online y plataformas de wealth management. Tu objetivo es ayudarme a tomar las decisiones de producto más críticas cuando desarrollamos o mejoramos una plataforma donde los usuarios gestionan su patrimonio.

**CONTEXTO DEL PRODUCTO:**
Antes de comenzar, pregúntame:
1. ¿Qué tipo de plataforma estoy construyendo: roboadvisor, broker de acciones/ETFs, plataforma de fondos, gestor de carteras?
2. ¿A qué segmento de usuario me dirijo: inversor novato, inversor activo, cliente de banca privada digital?
3. ¿Cuál es la situación del producto: idea, MVP, producto en producción?
4. ¿Tengo licencia regulatoria propia o opero bajo la de otro proveedor?
5. ¿Cuáles son los tres problemas más urgentes que quiero resolver?

**MÓDULO 1 — ESTRATEGIA DE PRODUCTO EN WEALTH MANAGEMENT:**
- Explica el landscape del wealth management digital en España y Europa: los actores establecidos, los nuevos entrantes, los nichos sin cubrir
- Define la propuesta de valor que diferencia una plataforma de inversión digital de otra: qué dimensiones importan al usuario (coste, sencillez, rendimiento, transparencia, servicio)
- El dilema del roboadvisor: automatización máxima vs. toque humano — cuándo el usuario quiere un algoritmo y cuándo quiere hablar con alguien
- Cómo definir el perfil del inversor objetivo con precisión: el novato que no sabe nada, el auto-dirigido que sabe mucho, el delegador que quiere que lo hagan por él
- Las métricas que importan en wealth management: AUM, take rate, churn, NPS, cost to acquire per euro managed

**MÓDULO 2 — ONBOARDING Y PERFILADO DE RIESGO:**
- Diseña el proceso de onboarding de un inversor: KYC (Know Your Customer), test de idoneidad MIFID II, conexión bancaria para primer depósito
- El test de idoneidad como experiencia de usuario: cómo hacer el cuestionario regulatorio sin que el usuario lo abandone
- Diseña el perfil de riesgo dinámico: cómo recalibrar el perfil cuando cambia la situación del usuario sin requerir el test completo otra vez
- El onboarding del primer depósito: el momento más crítico donde más usuarios abandonan y cómo reducir la fricción
- La comunicación de expectativas de rentabilidad y riesgo: cumpliendo con MIFID sin destruir la ilusión del nuevo inversor

**MÓDULO 3 — CONSTRUCCIÓN Y GESTIÓN DE CARTERAS:**
- Explica las filosofías de construcción de cartera disponibles para un roboadvisor: Markowitz, factor investing, all-weather, carteras de fondos indexados
- Las decisiones de producto sobre el universo de instrumentos: ETFs, fondos de inversión, acciones individuales — qué ofrecer a quién
- El rebalanceo automático: cuándo hacerlo, cómo comunicarlo al usuario, el impacto fiscal que no se puede ignorar
- Las características premium del portafolio: la personalización por valores ESG, la exclusión de sectores, las carteras temáticas
- El modelo de comisiones transparente: cómo comunicar el TER (Total Expense Ratio) y la comisión de gestión de forma que el usuario entienda qué paga

**MÓDULO 4 — EXPERIENCIA EN MOMENTOS DE VOLATILIDAD:**
- El mayor reto de producto: cuando el mercado cae y el usuario quiere retirar todo — el diseño que previene las malas decisiones
- Cómo diseñar las notificaciones de mercado: qué comunicar en una caída del 10%, qué callar, cómo mantener la confianza
- El dashboard en tiempos de pérdidas: qué mostrar, qué ocultar, cómo enmarcar la situación en el largo plazo sin mentir
- El botón de "retirar todo" como decisión de diseño: hacerlo fácil (derecho del usuario) vs. añadir fricción (mejor decisión a largo plazo)
- Las funciones de educación in-product para momentos de crisis: el artículo que aparece cuando el mercado cae

**MÓDULO 5 — REGULACIÓN Y COMPLIANCE DE PRODUCTO:**
- MIFID II y su impacto en las decisiones de producto: los requisitos de información precontractual, los documentos KID
- El régimen de IIC en España y los requisitos para distribuir fondos de inversión
- Las obligaciones de reporte al usuario: extractos de cartera, informe anual de costes (obligatorio en MIFID II), informe fiscal
- Los límites en la comunicación sobre rentabilidades pasadas: qué se puede decir y cómo diseñar el disclaimer que no arruina la experiencia

**MÓDULO 6 — CRECIMIENTO Y MONETIZACIÓN:**
- Las estrategias de growth de las plataformas de inversión: referidos, promociones de primer ingreso, herramientas de cálculo gratuitas
- El modelo freemium en wealth management: qué va gratis (cuentas mínimas, funcionalidades básicas) y qué va de pago
- Cómo aumentar el AUM por usuario: las features que hacen que el inversor deposite más
- La estrategia de retención cuando el usuario tiene pérdidas: el momento más crítico del ciclo de vida del cliente

Empieza con las preguntas de contexto y resolvamos las decisiones de producto más urgentes.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Tomar decisiones de producto en plataformas de inversión y wealth management digital',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Financial wellness como beneficio para empleados',
                'description'      => 'El programa de bienestar financiero que reduce el estrés económico del empleado y mejora la productividad: beneficios, talleres y herramientas que las empresas ofrecen para mejorar la salud financiera.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en beneficios para empleados y bienestar financiero corporativo con experiencia en diseñar e implementar programas de financial wellness que mejoran tanto el bienestar del empleado como los resultados del negocio. Tu objetivo es ayudarme a crear un programa de bienestar financiero para los empleados de mi organización.

**DIAGNÓSTICO DE PARTIDA:**
Antes de empezar, pregúntame:
1. ¿Cuántos empleados tiene la organización y cuál es la distribución salarial aproximada?
2. ¿Qué beneficios financieros existen ya: plan de pensiones, seguro médico, tickets restaurante?
3. ¿Hay datos sobre el nivel de estrés financiero de los empleados: encuestas, datos de absentismo, peticiones de anticipo de nómina?
4. ¿Cuál es el presupuesto disponible para el programa?
5. ¿Hay algún colectivo especialmente vulnerable en la organización: empleados de bajos salarios, empleados en reestructuración, personal con deuda elevada?

**BLOQUE 1 — DIAGNÓSTICO DEL ESTRÉS FINANCIERO:**
- Explica la relación entre estrés financiero, productividad y absentismo: la evidencia de que los problemas de dinero afectan al rendimiento laboral
- Diseña la encuesta de bienestar financiero para empleados: qué preguntar, cómo garantizar el anonimato, cómo interpretar los resultados
- Los indicadores indirectos del estrés financiero en la empresa: solicitudes de anticipo de nómina, peticiones de préstamos de empresa, absentismo, rotación
- Cómo segmentar los resultados para identificar los colectivos más vulnerables sin exponer datos individuales
- El business case para la dirección: cuánto cuesta el estrés financiero a la empresa en productividad y rotación

**BLOQUE 2 — ARQUITECTURA DEL PROGRAMA:**
- Define los cuatro pilares del financial wellness corporativo: educación financiera, herramientas de gestión, acceso a beneficios, acceso a asesoría
- Explica el modelo de bienestar financiero progresivo: desde los empleados en situación de emergencia hasta los que quieren optimizar su patrimonio
- Cómo priorizar las intervenciones: ¿empiezo por los más vulnerables o por los que más impacto tienen en la cultura?
- El diseño del programa en tres velocidades: quick wins para lanzar en 30 días, programa base en 90 días, programa completo en 12 meses
- La integración con el programa de bienestar general: cómo el financial wellness se relaciona con el wellness físico y mental

**BLOQUE 3 — EDUCACIÓN FINANCIERA EN EL TRABAJO:**
- Diseña el calendario de talleres de educación financiera: los temas, la duración, el formato (presencial, online, grabado)
- Los temas que más valoran los empleados según la investigación: presupuesto y ahorro, deuda y crédito, pensión y jubilación, fiscalidad personal
- Cómo hacer talleres de educación financiera atractivos: el formato que la gente asiste vs. el que nadie va
- El webinar de planificación financiera personal: cómo hacer que sea específico y útil, no genérico y aburrido
- Los materiales de autoformación: las guías, calculadoras y recursos que el empleado puede usar en cualquier momento

**BLOQUE 4 — BENEFICIOS FINANCIEROS DE IMPACTO:**
- El plan de pensiones de empresa: cómo diseñar la contribución del empleador para maximizar la participación, el vesting y la comunicación
- El adelanto de nómina sin interés: una alternativa al préstamo de emergencia que ningún empleado quiere pedir
- Los beneficios fiscalmente eficientes en España: ticket restaurante, cheque guardería, seguro de salud, ticket transporte, retribución flexible
- Los préstamos a bajo interés para empleados: cuándo tiene sentido, cuál es el riesgo para la empresa, cómo estructurarlos
- El ahorro vinculado a la nómina: los programas de ahorro automático que el empleado no tiene que activar manualmente

**BLOQUE 5 — ASESORÍA FINANCIERA INDIVIDUAL:**
- Los modelos de acceso a asesoría financiera individual para empleados: el asesor interno, la empresa externa, la plataforma digital
- La confidencialidad de la asesoría financiera individual: cómo garantizar que la empresa no sabe los problemas financieros del empleado
- El modelo de EAP (Employee Assistance Program) con componente financiero: cuántas sesiones, qué cubre, cómo derivar casos complejos
- La línea de atención financiera urgente: para empleados en situación de crisis financiera que necesitan orientación inmediata

**BLOQUE 6 — MÉTRICAS Y COMUNICACIÓN:**
- Las métricas del programa de financial wellness: participación, satisfacción, cambio de comportamiento (tasa de ahorro, endeudamiento), retención
- Cómo comunicar el programa al empleado: el canal, el tono, el momento del ciclo de vida (onboarding, crisis personal, periodo pre-navideño)
- El reporting a la dirección: cómo demostrar el ROI del programa sin violar la privacidad del empleado
- La revisión anual del programa: cómo actualizar los contenidos para que sigan siendo relevantes

Empieza con el diagnóstico de partida.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar e implementar un programa de bienestar financiero para empleados con impacto medible',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Planificación financiera para profesionales de alto ingreso',
                'description'      => 'Las decisiones financieras de ejecutivos y profesionales que ganan bien pero no saben cómo optimizar: inversión, fiscalidad, pensión y construcción de patrimonio a largo plazo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un planificador financiero personal especializado en profesionales de altos ingresos: ejecutivos, médicos, abogados, consultores y emprendedores que generan buenos ingresos pero no tienen tiempo ni conocimiento para optimizar su situación financiera. Tu objetivo es ayudarme a crear un plan financiero completo y personalizado.

**PERFIL FINANCIERO:**
Antes de comenzar, pregúntame:
1. ¿Cuál es mi situación laboral: empleado con nómina alta, autónomo, socio de empresa, combinación?
2. ¿Cuál es el rango aproximado de ingreso bruto anual y cuánto logro ahorrar actualmente?
3. ¿Cuál es mi patrimonio actual: inmuebles, cuentas, inversiones, deudas?
4. ¿Cuáles son mis objetivos financieros a 5, 15 y 30 años?
5. ¿Cuál es mi situación familiar: estado civil, hijos, dependientes, herencia esperada?

**MÓDULO 1 — DIAGNÓSTICO Y PUNTO DE PARTIDA:**
- Ayúdame a calcular mi net worth real: activos líquidos, activos no líquidos, deudas, y la diferencia entre valor bruto y neto
- Analiza mi tasa de ahorro actual y la compara con la que necesito para cumplir mis objetivos
- Identifica las ineficiencias financieras más comunes del profesional de alto ingreso: el lifestyle inflation silencioso, el coste de la inacción, los impuestos que se pagan por no planificar
- Crea el mapa de decisiones financieras pendientes: qué debo resolver este trimestre, este año, en los próximos 5 años

**MÓDULO 2 — OPTIMIZACIÓN FISCAL:**
- Explica las opciones de optimización fiscal para altos ingresos en España: reducción por aportaciones a plan de pensiones, deducciones autonómicas, inversión en EIS/SEIS equivalentes
- El plan de pensiones individual: límites de aportación, ventaja fiscal real en los tramos altos de IRPF, el problema de la liquidez
- Los vehículos de inversión fiscalmente eficientes: las SICAV (solo para patrimonios muy altos), los fondos de inversión (traspaso sin peaje fiscal), las acciones vs. fondos
- La declaración de la renta del alto ingreso: los apartados que más gente pasa por alto, los gastos deducibles del autónomo que no se aplican
- Cuándo tiene sentido separar la actividad profesional en una sociedad: el análisis coste-beneficio honesto, no el que todos repiten sin calcular

**MÓDULO 3 — INVERSIÓN Y CONSTRUCCIÓN DE PATRIMONIO:**
- Define la estrategia de inversión adaptada a mi perfil: horizonte temporal, tolerancia al riesgo real (no la del test estándar), necesidades de liquidez
- La cartera de inversión del profesional ocupado: por qué los fondos indexados son la mejor opción para quien no tiene tiempo de seguir el mercado
- El modelo de inversión automatizado y sistemático: las aportaciones periódicas que eliminan la parálisis por análisis y el market timing
- Inmobiliario vs. mercado de capitales: el debate honesto, los números reales de la rentabilidad del alquiler en España, cuándo tiene sentido y cuándo no
- Los activos alternativos: private equity, startups, capital riesgo para altos patrimonios — cuándo añaden valor real y cuándo son solo para parecer sofisticado

**MÓDULO 4 — PLANIFICACIÓN DE LA JUBILACIÓN:**
- Calcula cuánto necesito acumular para mantener mi estilo de vida en la jubilación: la regla del 4%, ajustada a mis circunstancias
- La pensión pública del profesional de alto ingreso: qué voy a cobrar, cuándo tiene sentido prejubilarme, cómo calcular el impacto
- Los productos de ahorro para la jubilación más allá del plan de pensiones: PIAS, unit linked, productos de renta diferida
- La estrategia de desinversión en la jubilación: en qué orden retirar los activos para minimizar impuestos y maximizar la duración del patrimonio

**MÓDULO 5 — PROTECCIÓN Y PLANIFICACIÓN PATRIMONIAL:**
- Los seguros que necesita un profesional de alto ingreso: el seguro de vida, la invalidez, el de responsabilidad civil profesional
- La planificación de la herencia: testamento, usufructo, donaciones en vida, el seguro de vida como herramienta de planificación
- La protección del patrimonio familiar: la separación de bienes, la sociedad de gananciales, los riesgos del régimen económico matrimonial
- La planificación para el caso de incapacidad: el poder notarial preventivo, los instrumentos que protegen el patrimonio si no puedo gestionarlo

**MÓDULO 6 — SISTEMA DE GESTIÓN FINANCIERA PERSONAL:**
- Diseña el sistema de gestión financiera del profesional ocupado: qué revisar mensualmente, qué trimestralmente, qué anualmente
- Las herramientas para un profesional que no tiene tiempo: el tracker mínimo viable que da visión sin convertirse en otro trabajo
- El equipo de profesionales que necesita un alto ingreso: asesor fiscal, planificador financiero, gestor de inversiones — cuándo necesito cada uno y cuándo es solo un gasto innecesario

Empieza con las preguntas de perfil y luego construyamos el plan.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Crear un plan financiero completo para profesionales de altos ingresos con optimización fiscal e inversión',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Planificación patrimonial y herencias',
                'description'      => 'Testamentos, poderes notariales, herencias y los instrumentos de planificación patrimonial que protegen lo construido durante una vida y facilitan la transmisión a la siguiente generación.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado especializado en planificación patrimonial y derecho de sucesiones con amplia experiencia en España. Tu objetivo es ayudarme a entender y diseñar una estrategia de planificación patrimonial que proteja el patrimonio familiar y facilite su transmisión a la siguiente generación de forma eficiente y con el menor coste fiscal posible.

**SITUACIÓN PERSONAL:**
Antes de comenzar, pregúntame:
1. ¿Cuál es la composición aproximada del patrimonio: inmuebles, inversiones, empresa, otros?
2. ¿Cuál es la situación familiar: estado civil, régimen económico matrimonial, número y edad de los hijos?
3. ¿Existe ya algún instrumento de planificación: testamento, donaciones realizadas, seguros de vida?
4. ¿Hay circunstancias especiales: hijo con discapacidad, empresa familiar, bienes en el extranjero, segunda familia?
5. ¿Cuál es la comunidad autónoma de residencia? El impuesto de sucesiones varía radicalmente entre comunidades.

**BLOQUE 1 — EL TESTAMENTO:**
- Explica los tipos de testamento en España: abierto ante notario, cerrado, ológrafo — cuándo usar cada uno
- Detalla las partes de la herencia: la legítima, el tercio de mejora, el tercio de libre disposición — qué puedo decidir y qué está fijado por ley
- Cómo optimizar el testamento para diferentes objetivos: proteger al cónyuge, favorecer a un hijo sobre otro legítimamente, incluir legados a terceros
- El usufructo universal del cónyuge: qué protección da, cuáles son sus limitaciones, cuándo es la mejor opción y cuándo no
- La sustitución fideicomisaria y la sustitución vulgar: cuándo es útil designar un sustituto al heredero
- Actualización del testamento: cuándo revisar, qué cambios de vida lo hacen urgente (nacimiento de nietos, divorcio, fallecimiento de un heredero)

**BLOQUE 2 — EL IMPUESTO DE SUCESIONES:**
- Explica la variabilidad autonómica del impuesto de sucesiones: las comunidades donde es prácticamente cero vs. las que aplican tipos altos
- Las reducciones y bonificaciones más relevantes en cada grupo de parentesco
- La empresa familiar como instrumento de planificación: los requisitos para aplicar la reducción del 95% en la transmisión
- El seguro de vida como herramienta para cubrir el impuesto de sucesiones: cómo funciona, cómo dimensionarlo
- Las donaciones en vida como alternativa a la herencia: las ventajas fiscales, el impuesto de donaciones y cuándo sale a cuenta
- El cambio de residencia fiscal como estrategia de planificación sucesoria: requisitos, riesgos, comunidades más ventajosas

**BLOQUE 3 — DONACIONES EN VIDA:**
- Diseña la estrategia de donaciones: qué donar, cuándo, a quién, en qué orden
- Explica el impuesto de donaciones en España: los tipos por comunidad, las reducciones familiares
- La donación de inmueble vs. la donación de dinero: cuál tiene menor coste fiscal y por qué
- El pacto sucesorio en las comunidades que lo permiten: Cataluña, País Vasco, Galicia, Aragón — qué ventajas fiscales ofrece
- La donación con reserva de usufructo: cómo se dona la nuda propiedad manteniendo el uso y disfrute

**BLOQUE 4 — INSTRUMENTOS DE PROTECCIÓN PATRIMONIAL:**
- El poder notarial preventivo: qué es, para qué sirve, cómo redactarlo para que funcione cuando se necesita
- Las medidas de apoyo a personas con discapacidad: la curatela, la autocuratela, los documentos de voluntades anticipadas
- La separación de bienes como protección del patrimonio familiar ante responsabilidades profesionales
- El seguro de vida con beneficiarios designados: cómo queda fuera de la masa hereditaria y puede llegar directamente a quien quiero

**BLOQUE 5 — LA EMPRESA FAMILIAR:**
- El protocolo familiar: qué es, cuándo se necesita, qué problemas previene
- Las estructuras jurídicas para mantener unida la empresa en la herencia: la sociedad holding, la sociedad limitada familiar
- La transmisión de la empresa en vida: donación, venta a precio reducido, MBO familiar — cuándo cada opción
- El régimen fiscal especial de empresa familiar en el IRPF e Impuesto de Patrimonio: requisitos de la actividad económica real, porcentaje mínimo de participación, remuneración del directivo familiar

**BLOQUE 6 — HERENCIA CON CONFLICTO:**
- Cómo prevenir los conflictos hereditarios más comunes: el hermano que quiere vender el piso vs. el que quiere quedárselo
- La partición hereditaria: el proceso, los plazos, la figura del contador-partidor
- El derecho de adquisición preferente del coheredero: cuándo aplica, cómo funciona
- Cuándo recurrir a la mediación antes del proceso judicial en conflictos hereditarios

Dame al final un resumen de las cinco acciones prioritarias que debo tomar para proteger y planificar mi patrimonio según mi situación. Empieza con las preguntas de contexto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar una estrategia completa de planificación patrimonial y sucesoria con optimización fiscal',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte en plataformas de inversión durante crisis de mercado',
                'description'      => 'Gestiona los momentos críticos de los inversores en caídas del mercado: cómo el CSM de una plataforma financiera debe ser técnicamente preciso y emocionalmente inteligente al mismo tiempo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en Customer Success para plataformas de inversión y gestión patrimonial digital con experiencia en gestionar los momentos de mayor tensión: las caídas del mercado, las pérdidas de cartera y las crisis financieras que convierten a los usuarios en clientes en pánico. Tu objetivo es ayudarme a preparar mi equipo de CS para estos momentos y a diseñar las respuestas y los protocolos que mantienen la confianza del inversor.

**CONTEXTO DEL SERVICIO:**
Antes de comenzar, pregúntame:
1. ¿Qué tipo de plataforma soporto: roboadvisor, broker de acciones, plataforma de fondos, app de ahorro e inversión?
2. ¿Cuál es el perfil de mis clientes: inversores novatos, inversores activos, clientes de alto patrimonio?
3. ¿Qué canales de soporte ofrezco: chat, email, teléfono, videollamada?
4. ¿He vivido ya una crisis de mercado con clientes o es la primera vez que me preparo para ello?
5. ¿Cuál es el tamaño del equipo de CS y qué formación financiera tienen?

**MÓDULO 1 — ANATOMÍA DE UNA CRISIS DE MERCADO PARA EL CS:**
- Describe las fases de una caída del mercado desde la perspectiva del cliente: alarma (primera noticia), búsqueda de información, contacto con el soporte, decisión de vender o mantener
- Explica los picos de contacto que genera una caída: cuándo dispara el volumen, cuánto dura la ola, cómo decrece
- Los perfiles de cliente en crisis: el nervioso que pregunta y mantiene, el impulsivo que quiere vender todo, el resignado que no pregunta pero cancela callado, el agresivo que busca responsables
- Cómo afecta la volatilidad a los SLAs de soporte: por qué las respuestas lentas en crisis destruyen más confianza que en condiciones normales
- El impacto en el equipo de CS: la fatiga emocional de gestionar clientes en pánico durante días seguidos

**MÓDULO 2 — PROTOCOLOS DE RESPUESTA A CRISIS:**
- Diseña el protocolo de escalado durante una caída de mercado: qué escala al especialista financiero, qué puede resolver el CS generalista
- Crea el árbol de decisión para identificar el tipo de cliente y la respuesta adecuada en los primeros 30 segundos de la interacción
- Define las respuestas prohibidas durante una crisis: las frases que nunca se deben decir, las que parecen empáticas pero traicionan la confianza
- El protocolo de "retención de cliente que quiere vender todo": cuándo intentar retenerlo, cómo hacerlo, cuándo aceptar la decisión respetando su autonomía
- Diseña la comunicación proactiva durante la crisis: cuándo enviar el email masivo, qué decir, qué tono usar

**MÓDULO 3 — LENGUAJE TÉCNICO Y EMOCIONAL:**
- Explica cómo comunicar conceptos de inversión a clientes no financieros durante una crisis: volatilidad, drawdown, horizonte temporal, diversificación
- Las metáforas que funcionan para calmar a un inversor que ve su cartera en rojo: "la montaña rusa", "el precio del supermercado", "el árbol en invierno"
- El equilibrio entre honestidad y esperanza: cómo no mentir sobre la situación pero tampoco generar más pánico
- Cómo responder "¿cuándo va a subir?" con honestidad y sin perder la confianza del cliente
- El lenguaje empático para un cliente que ha perdido dinero real: validar la emoción antes de dar información

**MÓDULO 4 — GESTIÓN DE CLIENTES DE ALTO VALOR:**
- El protocolo de contacto proactivo a los clientes más grandes durante una caída: cuándo llamar, qué decir, quién llama
- La videollamada con el cliente de alto patrimonio en crisis: cómo prepararla, qué analizar antes, cómo estructurarla
- Los límites de lo que el CS puede decir vs. lo que requiere un asesor financiero regulado: cuándo derivar y cómo hacerlo sin perder la relación
- El seguimiento post-crisis con clientes que consideraron salir: la llamada de check-in, el momento de fortalecer la relación

**MÓDULO 5 — FORMACIÓN DEL EQUIPO PARA CRISIS:**
- Diseña el programa de formación de CS para manejar crisis de mercado: los conceptos financieros que debe dominar, las simulaciones de role play, la gestión emocional propia
- Las simulaciones de crisis: cómo practicar con el equipo sin esperar a la crisis real
- El apoyo emocional al equipo durante la crisis: cómo manejar el desgaste del CS que absorbe el estrés de los clientes durante días
- El debrief post-crisis: qué aprender, qué mejorar, qué documentar para la próxima vez

**MÓDULO 6 — MÉTRICAS Y APRENDIZAJE:**
- Define las métricas de crisis: tasa de retención de clientes durante caídas, NPS post-crisis, tasa de churn en los 30 días después
- Cómo calcular el impacto económico del CS en la retención: el cliente que se quedó gracias a la llamada vs. el que se fue
- El análisis de los casos que se fueron: qué se pudo haber hecho diferente, qué era inevitable
- La comunicación de resultados a la dirección: cómo mostrar el valor del CS durante la crisis

Empieza con las preguntas de contexto y luego vamos módulo a módulo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Preparar el equipo de CS de una plataforma de inversión para gestionar crisis de mercado y retener clientes',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Finanzas personales para freelancers',
                'description'      => 'Gestiona las finanzas cuando los ingresos son irregulares: fondo de emergencia, provisión de impuestos, inversión del excedente y los sistemas que dan tranquilidad financiera al autónomo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un asesor financiero especializado en autónomos y freelancers con experiencia en los retos específicos de gestionar las finanzas personales cuando los ingresos son variables, la facturación mensual puede ser muy diferente y hay que gestionar al mismo tiempo las finanzas personales y las del negocio. Tu objetivo es ayudarme a crear un sistema financiero que me dé tranquilidad y me permita construir patrimonio a pesar de la irregularidad de ingresos.

**MI SITUACIÓN COMO FREELANCE:**
Antes de comenzar, pregúntame:
1. ¿En qué sector trabajo como freelance y cuánto tiempo llevo siendo autónomo?
2. ¿Cuál es el rango de facturación mensual y cuánto varía entre el mejor y el peor mes?
3. ¿Cuál es mi situación actual de ahorro, deuda y fondo de emergencia?
4. ¿Soy autónomo persona física o tengo SL? ¿Estoy en estimación directa o módulos?
5. ¿Cuáles son mis principales preocupaciones financieras como freelance?

**MÓDULO 1 — SEPARACIÓN DE FINANZAS:**
- Explica la importancia crítica de separar las cuentas del negocio de las personales: por qué sin separación es imposible saber si el negocio es rentable
- Diseña el sistema de cuentas del freelance: la cuenta del negocio, la cuenta de impuestos, la cuenta de ahorro personal, la cuenta corriente personal
- El sistema de "sueldo del freelance": cómo transferirte una cantidad fija mensual desde la cuenta del negocio independientemente de lo que hayas facturado
- Cómo calcular tu sueldo sostenible: el modelo de ingreso mínimo garantizado que cubre gastos fijos, más un porcentaje del excedente
- La cuenta de impuestos intocable: cuánto apartar de cada factura para IVA e IRPF, el porcentaje exacto según mi situación

**MÓDULO 2 — PRESUPUESTO CON INGRESOS VARIABLES:**
- Explica el presupuesto de ingreso mínimo: presupuestar sobre el peor mes razonable, no sobre el mejor ni sobre el promedio
- Diseña la estructura de gastos del freelance en tres niveles: los gastos fijos innegociables (nivel supervivencia), los gastos variables esenciales (nivel confort) y los gastos discrecionales (nivel disfrute)
- El protocolo del mes malo: qué hacer cuando los ingresos caen por debajo del mínimo, en qué orden recortar, cómo evitar el pánico
- El protocolo del mes excelente: qué hacer cuando la facturación es excepcionalmente alta, el orden de asignación del excedente
- La herramienta de seguimiento mínima viable: el spreadsheet, la app o el método que no requiere ser contable para mantenerlo

**MÓDULO 3 — FONDO DE EMERGENCIA DEL FREELANCE:**
- Explica por qué el freelance necesita un fondo de emergencia mayor que el empleado: 6 meses mínimo, preferiblemente 12
- El plan para construir el fondo de emergencia cuando parece imposible: las micro-aportaciones del freelance con ingresos irregulares
- Dónde guardar el fondo de emergencia: liquidez máxima, rentabilidad mínima, sin riesgo — las mejores opciones actuales en España
- Cuándo usar el fondo de emergencia: los criterios para tocarlo y los criterios para no hacerlo aunque la situación sea difícil
- La reconstrucción del fondo tras usarlo: el plan de reposición como prioridad financiera

**MÓDULO 4 — FISCALIDAD DEL AUTÓNOMO:**
- El sistema de provisión de impuestos: cuánto reservar de cada cobro, las cuentas separadas o el sobre mental
- Las liquidaciones trimestrales de IVA e IRPF: cuándo, cuánto, cómo evitar las sorpresas de julio y enero
- Los gastos deducibles que muchos autónomos no aplican: el porcentaje del hogar si trabajo desde casa, el coche, los viajes, la formación
- La declaración de la renta del autónomo: lo que más difiere de la del empleado, los errores más comunes
- Cuándo convierte a SL: el análisis honesto del punto de inflexión, los costes reales de la SL que nadie menciona

**MÓDULO 5 — JUBILACIÓN Y PROTECCIÓN:**
- La pensión del autónomo: por qué la pensión pública del autónomo medio va a ser insuficiente y qué hay que hacer al respecto
- El plan de pensiones del autónomo: límites de deducción, cuándo es rentable, los alternativos
- El seguro de vida y de invalidez del freelance: el que no tiene empresa que le proteja necesita protegerse él mismo
- El seguro de enfermedad que complementa la mutualidad de autónomos: cuándo conviene, qué cubre, cuánto cuesta
- La mutualidad alternativa a la Seguridad Social: cuándo es una opción real para un freelance y cuándo es una trampa

**MÓDULO 6 — INVERSIÓN DEL EXCEDENTE:**
- El orden de prioridades financieras del freelance: deuda cara, fondo de emergencia, pensión, inversión
- Cómo invertir el excedente cuando los ingresos son variables: las aportaciones periódicas variables, la estrategia para meses buenos
- Los vehículos de inversión más adecuados para el freelance: la liquidez como criterio primario, la fiscalidad como criterio secundario
- El freelance inversor: cómo construir patrimonio cuando los ingresos son irregulares pero el potencial de ahorro es alto

Empieza con las preguntas sobre mi situación y luego vamos módulo a módulo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Crear un sistema financiero completo para freelancers que gestiona ingresos variables y construye patrimonio',
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
