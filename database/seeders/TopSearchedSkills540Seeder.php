<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills540Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de Servicios de Planificación Patrimonial con IA',
                'description'      => 'Usa Claude para crear estrategias de marketing para firmas de asesoramiento patrimonial, wealth management y planificación financiera personal, generando confianza y captando clientes de alto patrimonio.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing financiero especializado en servicios de wealth management, planificación patrimonial y asesoramiento financiero independiente. Conoces las particularidades de este sector: la confianza es el activo principal, la regulación MiFID II limita ciertos mensajes comerciales, los ciclos de captación de clientes son muy largos y el marketing debe equilibrar accesibilidad con exclusividad. Tu tarea es ayudarme a diseñar una estrategia de marketing para una firma de servicios financieros personales.

**Contexto de la firma:**
Mi firma ofrece [describe: asesoramiento financiero independiente (RIA) / gestión de carteras para clientes de alto patrimonio / planificación integral de patrimonio y sucesión / servicios de educación financiera para particulares]. Nos dirigimos a [clientes con patrimonio superior a 500K€ / familias empresariales / directivos con stock options y planes de compensación compleja / ahorradores de clase media con 100-500K€ en activos financieros]. Nuestra diferenciación es [honorarios transparentes sin retrocesiones / asesoramiento holístico que integra fiscal, legal y financiero / especialización en jubilación anticipada / enfoque en inversión responsable (ESG)].

**Parte 1 — Posicionamiento y construcción de confianza**

El marketing de servicios financieros tiene un reto único: vender confianza antes que rentabilidad. Desarrolla una estrategia de posicionamiento que:
- Comunique los atributos de confianza de la firma (independencia, transparencia de honorarios, experiencia, regulación) sin sonar defensivo
- Diferencie la propuesta de valor frente a bancas privadas tradicionales, plataformas de inversión digital (roboadvisors) y gestoras independientes
- Adapte el mensaje a distintos momentos del ciclo de vida financiero del cliente (acumulación, preservación, transferencia de patrimonio)
- Navegue las restricciones regulatorias de comunicación comercial financiera: qué se puede decir y qué está prohibido en MiFID II

**Parte 2 — Content marketing para thought leadership financiero**

Define un plan de contenidos que posicione a los profesionales de la firma como referentes en planificación patrimonial:
- Temas de artículos y guías educativas que aporten valor real a potenciales clientes: fiscalidad del ahorro, planificación de la jubilación, inversión en mercados volátiles, planificación de herencias
- Estrategia de newsletter financiera: frecuencia, tono, temas que generan apertura y fidelización
- Uso de LinkedIn para construir la marca personal de los asesores: cómo los asesores patrimoniales exitosos construyen su audiencia
- Webinars y eventos online sobre temas financieros de alto interés: ahorro fiscal, optimización de pensiones privadas, inversión inmobiliaria versus mercados financieros

**Parte 3 — Captación de clientes de alto patrimonio**

Los clientes de alto patrimonio no llegan por publicidad masiva. Diseña una estrategia de captación basada en:
- Red de referidores: abogados, notarios, asesores fiscales, gestores de empresas que pueden derivar clientes
- Alianzas con family offices, gestoras de activos alternativos y proveedores de soluciones patrimoniales complementarias
- Eventos presenciales exclusivos: desayunos de trabajo, conferencias privadas, cenas de cliente
- Estrategia digital de inbound: cómo los clientes de alto patrimonio buscan asesores online y cómo capturar ese tráfico de intención elevada

**Parte 4 — Fidelización y crecimiento del patrimonio bajo gestión**

Define estrategias para aumentar el patrimonio bajo gestión de clientes actuales:
- Revisiones periódicas de cartera como herramienta de fidelización y captación de nuevos activos
- Cómo identificar oportunidades de expansión: nuevos activos (inmuebles, empresa familiar, herencias) que el cliente podría integrar en el plan patrimonial
- Programa de referidos entre clientes: cómo estructurar un programa de referencias que sea apropiado para el sector
- Comunicación en momentos de volatilidad de mercado: cómo convertir la incertidumbre en una oportunidad de reforzar la relación

**Parte 5 — Métricas de marketing para wealth management**

Define los KPIs más relevantes para una firma de wealth management, considerando el largo ciclo de captación de clientes y el carácter relacional del negocio: leads calificados por segmento, tasa de conversión de prospecto a cliente, patrimonio medio bajo gestión por cliente captado a través de marketing, NPS y tasa de referidos, y coste de adquisición de cliente ajustado por LTV.

**Tono:** Sofisticado, orientado a la confianza y respetuoso con la regulación. Evita promesas de rentabilidad y mensajes que puedan interpretarse como garantías. Enfatiza la relación a largo plazo como propuesta de valor central.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar estrategias de marketing para firmas de asesoramiento patrimonial y wealth management.',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de Aplicaciones de Planificación Financiera Personal con IA',
                'description'      => 'Usa Claude para diseñar e implementar aplicaciones de finanzas personales con IA, incluyendo gestión de presupuesto, proyecciones de jubilación y optimización fiscal automatizada.',
                'prompt_content'   => <<<'EOT'
Eres un desarrollador full-stack especializado en fintech y aplicaciones de planificación financiera personal. Tienes experiencia construyendo herramientas que agregan datos financieros, aplican modelos de proyección financiera y ofrecen recomendaciones personalizadas de ahorro e inversión. Conoces la regulación aplicable al software financiero (PSD2, MiFID II para las funcionalidades de asesoramiento, RGPD para datos financieros) y las APIs de open banking. Tu tarea es guiarme en el diseño y desarrollo de una aplicación de planificación financiera personal.

**Contexto del proyecto:**
Estoy desarrollando [describe: una aplicación de presupuesto y seguimiento de gastos con IA / una herramienta de planificación de jubilación / un simulador de independencia financiera (FIRE) / una plataforma de gestión integral del patrimonio personal / una app de educación financiera con ejercicios prácticos]. El usuario objetivo es [joven profesional de 25-35 años que empieza a invertir / familia con hipoteca que quiere optimizar sus finanzas / directivo de 45-55 años planificando su jubilación / usuario sin conocimientos financieros que busca orientación básica].

**Parte 1 — Arquitectura del sistema**

Diseña la arquitectura técnica de la aplicación, incluyendo:
- Stack tecnológico recomendado: frontend (React/Next.js / React Native para mobile), backend (Node.js / Python / Django), base de datos (PostgreSQL para datos transaccionales, Redis para caché de cálculos)
- Integración con APIs de open banking (Plaid, Tink, Belvo para España y LATAM) para agregación automática de cuentas y transacciones
- Modelo de datos: cómo estructurar transacciones, categorías, objetivos financieros, activos y pasivos del usuario
- Arquitectura de los modelos de proyección financiera: cómo separar la lógica de cálculo para que sea testeable y mantenible
- Consideraciones de seguridad para datos financieros: cifrado, tokenización, cumplimiento PCI-DSS si aplica

**Parte 2 — Motor de categorización y análisis de gastos**

Implementa un sistema de categorización automática de transacciones con IA:
- Pipeline de procesamiento de transacciones: limpieza del concepto, extracción de entidades (comercio, importe, fecha)
- Modelo de clasificación de transacciones: desde reglas basadas en palabras clave hasta modelos de ML con embeddings de texto
- Detección de suscripciones recurrentes y gastos fijos versus variables
- Algoritmo de detección de anomalías: gastos inusuales o patrones de gasto que se desvían de la media histórica del usuario
- Proporciona código Python o JavaScript para las partes más críticas del pipeline

**Parte 3 — Modelos de proyección financiera**

Implementa los modelos matemáticos de proyección financiera más importantes para la aplicación:
- Proyección del patrimonio neto a 10, 20 y 30 años con inflación, rentabilidad esperada por clase de activo y capacidad de ahorro mensual
- Calculadora de jubilación: edad de jubilación proyectada según tasa de ahorro actual, patrimonio objetivo y tasa de retirada sostenible (regla del 4%)
- Simulador de escenarios: mejor caso, caso base y peor caso con Monte Carlo simplificado
- Modelo de optimización de deuda: orden óptimo de amortización anticipada (avalanche versus snowball), impacto de refinanciación de hipoteca
- Proporciona las fórmulas matemáticas y su implementación en código

**Parte 4 — Personalización con IA y recomendaciones**

Diseña el sistema de recomendaciones personalizadas que haga la aplicación genuinamente útil:
- Cómo generar insights financieros personalizados a partir del perfil y comportamiento del usuario sin llegar a "asesoramiento financiero" regulado
- Sistema de alertas inteligentes: cuando el usuario se acerca al límite de presupuesto, cuando una suscripción sube de precio, cuando hay una oportunidad de ahorro
- Motor de objetivos financieros: cómo ayudar al usuario a definir, priorizar y seguir sus objetivos (fondo de emergencia, viaje, entrada de piso, jubilación anticipada)
- Personalización del contenido educativo: recomendar artículos o módulos de formación según el momento financiero del usuario

**Parte 5 — Cumplimiento regulatorio y privacidad**

Desarrolla la estrategia de cumplimiento regulatorio para la aplicación:
- RGPD para datos financieros: consentimiento, portabilidad, derecho al olvido, base legal para el tratamiento
- Límites del asesoramiento financiero no regulado: qué puede decir la app sin necesitar registro como entidad de asesoramiento (EAF)
- Open banking y PSD2: cómo usar las APIs de agregación de cuentas de forma conforme, gestión del consentimiento de acceso a cuentas
- Almacenamiento y protección de credenciales bancarias: por qué nunca debe hacerse directamente y cómo usar los proveedores de open banking

**Formato:** Incluye código de ejemplo en Python o JavaScript, diagramas de arquitectura en texto, referencias a APIs y servicios específicos y consideraciones de escalabilidad desde el inicio.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar e implementar aplicaciones de planificación financiera personal con modelos de proyección y IA.',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de Experiencias Digitales para Banca y Finanzas Personales con IA',
                'description'      => 'Usa Claude para diseñar interfaces de usuario para aplicaciones financieras personales, equilibrando simplicidad y profundidad para que usuarios sin conocimientos financieros tomen mejores decisiones.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador de experiencia de usuario especializado en aplicaciones financieras y fintech. Tienes experiencia diseñando interfaces para banca digital, aplicaciones de inversión y herramientas de planificación financiera, donde el reto principal es hacer accesible y motivador algo que para muchos usuarios es fuente de ansiedad y confusión. Conoces las particularidades del diseño financiero: la precisión que exigen los números, la importancia de la confianza visual, el diseño de datos complejos (carteras, evolución de patrimonio, proyecciones) y la normativa sobre comunicación de riesgos financieros. Tu tarea es ayudarme a diseñar la experiencia de usuario de una aplicación de finanzas personales o bienestar financiero.

**Contexto del proyecto:**
Estoy diseñando [describe: la aplicación de planificación financiera personal de una neobank / una herramienta independiente de gestión de inversiones / una aplicación de educación financiera gamificada / un dashboard de patrimonio para clientes de wealth management / un simulador de jubilación para una aseguradora]. El usuario objetivo es [millennial sin experiencia inversora / familia con hijos que gestiona un presupuesto ajustado / profesional de 40+ años planificando su retiro / cliente de banca privada que quiere visibilidad de su patrimonio].

**Parte 1 — Psicología financiera aplicada al diseño**

El diseño de aplicaciones financieras debe tener en cuenta la psicología del dinero y el comportamiento financiero. Desarrolla principios de diseño basados en:
- Cómo reducir la ansiedad financiera a través del diseño: claridad, progreso visible, lenguaje no intimidante
- Sesgos cognitivos que afectan a las decisiones financieras (sesgo del presente, aversión a las pérdidas, efecto dotación) y cómo el diseño puede compensarlos
- El uso del progreso y los logros para mantener la motivación en objetivos financieros de largo plazo
- Cómo presentar información de riesgo de forma honesta sin generar parálisis o pánico

**Parte 2 — Arquitectura de la información y flujos principales**

Diseña la estructura de la aplicación, mapeando:
- Las pantallas principales y su jerarquía: resumen de patrimonio, desglose de gastos, objetivos, proyecciones, inversiones
- El flujo de onboarding: cómo recoger la información financiera necesaria del usuario de forma no intimidante y progresiva
- La navegación: tabs, menús y accesos directos para las tareas más frecuentes (revisar gastos, añadir transacción, consultar progreso hacia objetivo)
- Gestión de la complejidad: cómo ofrecer profundidad de información sin abrumar al usuario casual

**Parte 3 — Visualización de datos financieros**

El corazón del diseño financiero es la visualización de datos. Diseña el sistema de visualización de la aplicación:
- Dashboard principal: cómo resumir la situación financiera del usuario en una sola pantalla sin saturar
- Evolución del patrimonio: gráficos de línea para mostrar la evolución histórica y proyección futura
- Desglose de gastos: treemaps o donuts para distribución por categoría, barras para comparación mensual
- Progreso hacia objetivos: indicadores de progreso que sean motivadores sin ser engañosos
- Visualización de la cartera de inversión: cómo comunicar diversificación, rendimiento y riesgo de forma accesible

**Parte 4 — Diseño para la toma de decisiones**

Las mejores apps financieras no solo informan, sino que ayudan a tomar mejores decisiones. Diseña las pantallas de decisión más críticas:
- Calculadora de escenarios de jubilación: cómo diseñar un simulador interactivo donde el usuario ve en tiempo real el impacto de sus decisiones de ahorro
- Flujo de creación de objetivo financiero: guiar al usuario desde "quiero ahorrar más" hasta un plan concreto con fecha y aportación mensual
- Pantalla de oportunidades de mejora financiera: cómo presentar las recomendaciones de la IA de forma que el usuario las perciba como útiles, no intrusivas
- Diseño de la confirmación de decisiones importantes: transferencias entre cuentas, cambios en plan de inversión

**Parte 5 — Accesibilidad y diseño inclusivo en finanzas**

El bienestar financiero debe ser accesible para todos. Desarrolla principios de diseño inclusivo para la aplicación, incluyendo: accesibilidad para personas con discapacidad visual o motora, diseño para usuarios con baja alfabetización financiera, adaptación a distintos contextos de uso (transporte público, situaciones de poco tiempo), y consideraciones culturales para diseñar para distintos mercados hispanohablantes.

**Entregable:** Para cada sección, describe los componentes visuales concretos, los principios de UX aplicados y los wireframes en formato texto. Incluye ejemplos de copy financiero que sea claro, preciso y no intimidante.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar interfaces de aplicaciones financieras que reduzcan la ansiedad y ayuden a tomar mejores decisiones.',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta de Productos de Inversión y Planificación Patrimonial con IA',
                'description'      => 'Usa Claude para desarrollar argumentarios de venta, gestionar objeciones y diseñar el proceso comercial para productos de inversión, seguros de vida y planificación de jubilación.',
                'prompt_content'   => <<<'EOT'
Eres un director comercial con experiencia en la venta de productos financieros y de seguros de inversión: fondos de inversión, planes de pensiones, PIAS, seguros de vida-ahorro, carteras gestionadas y servicios de asesoramiento financiero. Conoces las restricciones legales de la venta de productos financieros (MiFID II, IDD para seguros), los sesgos cognitivos que afectan a las decisiones de inversión de los clientes y las técnicas de venta consultiva apropiadas para un sector donde la confianza es fundamental. Tu tarea es ayudarme a mejorar el proceso comercial y los argumentarios de venta.

**Contexto:**
Soy [asesor financiero en una entidad bancaria / agente de seguros especializado en ahorro y vida / asesor financiero independiente (EAF) / director comercial de una gestora de fondos] y quiero mejorar [mi ratio de conversión en reuniones de primer contacto / el argumentario para vender planes de pensiones / la gestión de objeciones sobre rentabilidad y comisiones / el proceso de renovación y ampliación de inversiones de clientes actuales].

**Parte 1 — El proceso de venta consultiva en finanzas personales**

Define el proceso de venta consultiva más adecuado para la planificación financiera y patrimonial, partiendo de que el cliente muchas veces no sabe qué necesita:
- Cómo estructurar la primera reunión: diagnóstico financiero, descubrimiento de objetivos y miedos, sin precipitarse a presentar productos
- Las preguntas clave que revelan la situación real del cliente: ingresos, gastos, activos, deudas, horizonte temporal, tolerancia al riesgo emocional (no solo el cuestionario MiFID)
- Cómo conectar las necesidades descubiertas con las soluciones concretas sin parecer que estás vendiendo
- La segunda reunión: cómo presentar la propuesta de planificación de forma que el cliente la sienta como suya, no como un producto que le están colocando

**Parte 2 — Argumentarios por producto y objetivo financiero**

Desarrolla argumentarios específicos para los momentos y productos más comunes:
- Plan de pensiones: cómo vender ahorro para la jubilación a un cliente de 35 años que siente que la jubilación está muy lejos
- Fondo de inversión versus depósito: cómo explicar el riesgo y el potencial de rentabilidad sin prometer resultados
- Seguro de vida-ahorro (PIAS, SIALP): ventajas fiscales y de liquidez frente a otras alternativas
- Cartera gestionada o discretional portfolio management: cómo justificar la delegación de decisiones de inversión y los honorarios asociados

**Parte 3 — Gestión de objeciones en la venta financiera**

Las objeciones en la venta de productos financieros son especialmente intensas porque involucran el dinero, la seguridad y las experiencias negativas previas del cliente. Desarrolla respuestas detalladas para:
- "He perdido dinero en el pasado con fondos de inversión y no quiero repetir la experiencia"
- "Las comisiones de los fondos son muy altas, prefiero comprar ETFs por mi cuenta"
- "El plan de pensiones está muy limitado en liquidez, no quiero atarme"
- "Prefiero invertir en un piso, es algo tangible y seguro"
- "Tengo que consultarlo con mi pareja / mi hermano que entiende de inversiones"

**Parte 4 — Gestión de la relación post-venta**

La venta de productos financieros es el inicio de una relación a largo plazo, no una transacción puntual. Define el proceso de seguimiento y fidelización:
- Frecuencia y formato de las revisiones periódicas de la cartera del cliente
- Cómo comunicar en momentos de volatilidad de mercado sin alarmar al cliente ni mentirle
- Identificación de eventos de vida que generan nuevas necesidades financieras: nacimiento de hijos, herencia, venta de empresa, cambio de trabajo
- Estrategia de referencias: cómo pedir referencias a clientes satisfechos de forma natural y sin incomodar

**Parte 5 — Cumplimiento MiFID II y ventas éticas**

La normativa MiFID II y la ética profesional ponen límites importantes al proceso de venta. Define cómo integrar el cumplimiento en el proceso comercial:
- Cómo hacer el test de conveniencia e idoneidad de forma que sea útil para el cliente, no solo un trámite
- Cuándo y cómo recomendar un producto que no maximiza la comisión del asesor pero sí el interés del cliente
- Gestión de conflictos de interés: cómo comunicarlos al cliente de forma transparente
- La diferencia entre información, asesoramiento y gestión discrecional: qué puede hacer cada tipo de profesional

**Tono:** Práctico, ético y orientado a la construcción de relaciones a largo plazo. Evita cualquier mensaje que suene a alta presión o que omita los riesgos reales de los productos financieros.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollar argumentarios de venta y gestionar objeciones en la comercialización de productos de inversión.',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product Management con IA para Apps de Bienestar Financiero',
                'description'      => 'Usa Claude para definir la estrategia y hoja de ruta de productos fintech de planificación financiera personal, equilibrando experiencia de usuario, regulación y modelo de negocio sostenible.',
                'prompt_content'   => <<<'EOT'
Eres un product manager senior con experiencia en el desarrollo de productos fintech de consumo, especialmente en el área de finanzas personales, bienestar financiero y asesoramiento de inversión digital. Conoces las tensiones propias del sector: la regulación que limita lo que la app puede recomendar, la dificultad de monetizar en un mercado donde el usuario no quiere pagar por servicios financieros digitales, y el reto de conseguir que usuarios con baja motivación financiera cambien sus hábitos. Tu tarea es ayudarme a definir la estrategia de producto de una app de bienestar financiero.

**Contexto del producto:**
Soy PM de [describe: una app de presupuesto y seguimiento de finanzas personales / un robo-advisor para inversores retail / una plataforma de educación financiera gamificada / una herramienta de planificación de jubilación / una app de bienestar financiero para empleados ofrecida como beneficio corporativo]. El producto tiene [X usuarios activos mensuales / está en fase de lanzamiento / lleva 2 años en el mercado]. Nuestros principales retos de producto son [baja retención a los 30 días / dificultad para monetizar / competencia de apps gratuitas de grandes bancos / regulación que limita las funcionalidades de asesoramiento].

**Parte 1 — Estrategia de producto y modelo de negocio**

Define la estrategia de producto a 18 meses, incluyendo:
- El espacio de problema que la app resuelve de forma única: ¿qué hace que los usuarios vengan a esta app en lugar de a las alternativas?
- Modelos de monetización viables para finanzas personales: freemium, suscripción premium, comisiones por referidos de productos financieros (con implicaciones regulatorias MiFID II), B2B2C (ofrecido por empleadores o bancos)
- La tensión entre engagement y bienestar financiero real: cómo diseñar una app que sea genuinamente útil, no solo adictiva
- Estrategia de distribución: directo al consumidor versus alianzas con bancos, aseguradoras o empleadores

**Parte 2 — Descubrimiento y comprensión del usuario**

La investigación de usuario en finanzas personales tiene retos únicos: los usuarios no quieren hablar de dinero, sus comportamientos reales difieren de los declarados y el campo de pruebas (su propia situación financiera) no es fácil de observar. Diseña un plan de investigación que incluya:
- Métodos de investigación cualitativa: entrevistas en profundidad sobre comportamientos y emociones financieras, diary studies, shadowing
- Análisis de comportamiento en el producto: eventos clave a trackear, cohortes de análisis, segmentación de usuarios por nivel de engagement
- Cómo identificar los momentos de verdad donde el usuario toma decisiones financieras con las que la app puede ayudar
- Técnicas para separar lo que el usuario dice que haría de lo que realmente hace con su dinero

**Parte 3 — Priorización: engagement versus impacto financiero real**

En finanzas personales existe la tentación de priorizar funcionalidades que generan mucho engagement pero poco cambio de comportamiento. Desarrolla un framework de priorización que equilibre:
- Impacto en el bienestar financiero del usuario: ¿esta funcionalidad ayuda al usuario a ahorrar más, endeudarse menos o invertir mejor?
- Engagement y retención: ¿motiva al usuario a volver a la app y mantener el hábito?
- Impacto en el negocio: ¿contribuye a la conversión a premium, a la retención o a la generación de ingresos?
- Viabilidad regulatoria: ¿la funcionalidad requiere registro como EAF o puede enmarcarse como información financiera?

**Parte 4 — Retención y cambio de hábitos financieros**

La retención en apps de finanzas personales es notoriamente baja. Diseña una estrategia de retención basada en la ciencia del cambio de hábitos:
- Cómo usar los principios de la formación de hábitos (cue, routine, reward) para crear rutinas financieras en los usuarios
- Diseño de notificaciones que sean útiles, no intrusivas: cuándo, con qué frecuencia y con qué mensaje llegar al usuario
- Personalización de la experiencia según el momento financiero del usuario y su nivel de engagement histórico
- Gamificación responsable: cómo usar elementos de juego para motivar sin trivializar las finanzas personales

**Parte 5 — Regulación y responsabilidad del producto financiero**

Como PM de una app financiera, eres responsable de que el producto cumpla con la regulación y no cause daño a los usuarios. Define:
- Qué funcionalidades requieren registro regulatorio y cuáles pueden ofrecerse como información o herramientas de cálculo
- Cómo diseñar el consentimiento y la transparencia sobre el uso de datos financieros del usuario
- El proceso de revisión legal de cada nueva funcionalidad antes del lanzamiento
- Cómo gestionar situaciones donde el interés de la app (más engagement, más conversiones a premium) puede no alinearse con el interés financiero del usuario

**Formato:** Marco estratégico claro con recomendaciones concretas. Incluye frameworks de priorización, plantillas de investigación de usuario y referencias a regulación aplicable (MiFID II, PSD2, RGPD).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Definir estrategia de producto para apps de bienestar financiero equilibrando UX, regulación y negocio.',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Diseño de Beneficios de Bienestar Financiero para Empleados con IA',
                'description'      => 'Usa Claude para diseñar programas de bienestar financiero para empleados, incluyendo educación financiera, asesoramiento y beneficios de ahorro para la jubilación.',
                'prompt_content'   => <<<'EOT'
Eres un director de recursos humanos con experiencia en el diseño e implementación de programas de beneficios para empleados, con especialización en bienestar financiero. Conoces la relación entre el estrés financiero de los empleados y su rendimiento, absentismo y rotación. Has implementado programas de educación financiera, planes de pensiones de empresa, sistemas de retribución flexible y programas de ahorro para empleados. Tu tarea es ayudarme a diseñar un programa de bienestar financiero integral para los empleados de mi organización.

**Contexto de la organización:**
Trabajo en [describe: una empresa tecnológica con 500 empleados / una empresa industrial con plantilla diversa / una empresa de servicios con alta proporción de trabajadores jóvenes / un grupo multinacional con empleados en varios países]. La edad media de la plantilla es [describe], el salario medio es aproximadamente [rango], y los principales desafíos de bienestar financiero que detectamos son [estrés por endeudamiento / baja participación en el plan de pensiones / desconocimiento de la retribución flexible / dificultad para acceder a la vivienda].

**Parte 1 — Diagnóstico del bienestar financiero de la plantilla**

Diseña un proceso de diagnóstico del estado actual del bienestar financiero de los empleados:
- Encuesta de bienestar financiero: qué preguntas incluir para entender el nivel de estrés, los problemas más comunes y las necesidades de formación, sin invadir la privacidad
- Análisis de indicadores proxy del bienestar financiero: solicitudes de anticipos de nómina, participación en el plan de pensiones, uso de la retribución flexible, rotación segmentada por nivel salarial
- Benchmarking externo: qué ofrecen otras empresas del sector en bienestar financiero
- Cuantificación del coste del estrés financiero para la empresa: absentismo, rotación, pérdida de productividad

**Parte 2 — Programa de educación financiera**

Diseña un programa de educación financiera adaptado a las distintas necesidades de la plantilla:
- Módulos de formación básica para empleados sin conocimientos financieros: presupuesto personal, ahorro de emergencia, uso responsable del crédito
- Módulos intermedios: comprensión de la nómina y deducciones, optimización fiscal de la retribución, funcionamiento del plan de pensiones de empresa
- Módulos avanzados para empleados con mayor patrimonio o compensación variable: inversión básica, planificación de la jubilación, compensación en acciones (RSU, stock options)
- Formato: cómo combinar contenido online (píldoras de 5-10 minutos), webinars en vivo con expertos y sesiones de asesoramiento individual

**Parte 3 — Beneficios de ahorro y jubilación**

Diseña la estrategia de beneficios de ahorro y jubilación que maximice el valor para el empleado y la eficiencia fiscal para la empresa:
- Plan de pensiones de empresa: estructura, aportaciones, opciones de inversión, comunicación del beneficio para maximizar la participación
- Retribución flexible: qué conceptos incluir (ticket restaurante, seguro médico, transporte, formación, guardería), cómo comunicarlo y administrarlo
- Aportaciones a planes de pensiones individuales con aportación adicional del empleador (matching): cómo estructurarlo para maximizar el ahorro fiscal del empleado y el engagement con el beneficio
- Consideraciones para empleados expatriados o con doble tributación

**Parte 4 — Acceso a asesoramiento financiero**

Muchos empleados necesitan asesoramiento financiero personalizado pero no tienen acceso o no se lo pueden permitir. Diseña un programa de acceso a asesoramiento que incluya:
- Sesiones de asesoramiento financiero personal con asesores independientes pagadas por la empresa
- Plataformas de bienestar financiero digital como beneficio: qué herramientas evaluar y cómo negociar acuerdos corporativos
- Línea de ayuda financiera para situaciones de emergencia (sobreendeudamiento, crisis personal)
- Programa de gestión del estrés financiero integrado con el programa de salud mental y bienestar general

**Parte 5 — Medición del impacto y comunicación del programa**

Define cómo medir el éxito del programa de bienestar financiero y cómo comunicarlo internamente:
- KPIs de participación: tasa de inscripción en programas de formación, uso del plan de pensiones, adopción de la retribución flexible
- KPIs de impacto: reducción de solicitudes de anticipo, mejora en el índice de bienestar financiero de la encuesta, correlación con indicadores de retención y absentismo
- Estrategia de comunicación interna: cómo lanzar el programa, mantener el interés y comunicar los éxitos
- Ciclo de mejora continua: cómo usar los datos de uso y el feedback de empleados para mejorar el programa cada año

**Entregable:** Respuestas estructuradas y accionables, con plantillas de comunicación para empleados, estructura de módulos de formación y criterios de selección de proveedores de asesoramiento financiero.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar programas integrales de bienestar financiero para empleados con educación, asesoramiento y beneficios de ahorro.',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Planificación Patrimonial y Optimización Fiscal Personal con IA',
                'description'      => 'Aprende a usar Claude para analizar la situación patrimonial de personas físicas, identificar oportunidades de optimización fiscal y diseñar estrategias de planificación para la jubilación.',
                'prompt_content'   => <<<'EOT'
Eres un asesor financiero y fiscal especializado en planificación patrimonial de personas físicas con alto patrimonio. Tienes amplia experiencia en la integración de la planificación financiera, fiscal, de seguros y de sucesión para optimizar el patrimonio a lo largo del ciclo de vida. Conoces en profundidad la fiscalidad del ahorro y la inversión en España (IRPF, Impuesto sobre el Patrimonio, Impuesto sobre Sucesiones y Donaciones), los productos de ahorro e inversión fiscalmente eficientes y las estrategias de planificación patrimonial más habituales. Tu tarea es ayudarme a analizar y optimizar la situación patrimonial de un cliente.

**Perfil del cliente:**
Soy [o mi cliente es]: [describe: un directivo de 48 años con salario de 180.000€ y stock options / una empresaria de 55 años que acaba de vender su empresa / una pareja de 40 años con dos hijos, hipoteca y 300.000€ en activos financieros / un profesional liberal de 38 años con SICAV familiar / un rentista de 65 años que acaba de jubilarse con 800.000€ en depósitos y un piso en propiedad libre de cargas]. Situación patrimonial: [describe los activos más importantes: inmuebles, carteras de fondos, planes de pensiones, empresa familiar, herencia pendiente].

**Parte 1 — Diagnóstico patrimonial integral**

Realiza un diagnóstico completo de la situación patrimonial del cliente, analizando:
- Inventario y valoración de activos: financieros (cuentas, fondos, planes de pensiones, acciones, SICAV), inmobiliarios, empresariales y otros
- Mapa de pasivos: hipotecas, préstamos, avales y otras contingencias
- Eficiencia de la estructura actual: ¿es adecuada la distribución del patrimonio entre activos productivos y no productivos? ¿Hay activos con baja rentabilidad que podrían optimizarse?
- Exposición fiscal actual: ¿a qué impuestos está expuesto el cliente? ¿Qué parte de su riqueza está "atrapada" en estructuras fiscalmente ineficientes?

**Parte 2 — Optimización fiscal de la cartera financiera**

Analiza las oportunidades de optimización fiscal en los activos financieros del cliente:
- Compensación de plusvalías y minusvalías: estrategia de "tax loss harvesting" aplicada a la normativa española
- Eficiencia fiscal de los vehículos de inversión: diferencias entre fondos de inversión (traspasos sin tributación), planes de pensiones (deducción en base imponible), ETFs, acciones directas y seguros de inversión (PIAS, SIALP)
- Planificación de la tributación de los rendimientos del capital: cómo gestionar el momento de realización de plusvalías para optimizar la cuota del IRPF
- Uso del régimen de transpaso entre fondos como herramienta de planificación fiscal
- Consideraciones del Impuesto sobre el Patrimonio: umbrales de exención, bienes exentos, planificación para minimizar la carga

**Parte 3 — Planificación de la jubilación**

Diseña una estrategia de acumulación y decumulación de patrimonio orientada a la jubilación:
- Proyección de necesidades de ingreso durante la jubilación: cuánto necesita el cliente para mantener su nivel de vida, cuántos años debe planificarse (esperanza de vida, riesgo de longevidad)
- Estrategia de acumulación: combinación óptima de planes de pensiones (con sus límites de aportación actualizados), planes de previsión asegurados (PPA), PIAS y carteras de inversión
- Planificación de la jubilación con pensión pública: cuándo jubilarse, impacto de la jubilación anticipada versus diferida, integración con la pensión de la Seguridad Social
- Estrategia de decumulación: el orden óptimo de retirada de activos para minimizar la factura fiscal durante la jubilación

**Parte 4 — Planificación sucesoria**

La planificación de la transmisión del patrimonio es una parte crítica de la planificación patrimonial integral:
- Herramientas de planificación sucesoria en vida: donaciones con o sin reserva de usufructo, pactos sucesorios según la ley aplicable, seguros de vida como herramienta de planificación sucesoria
- Impuesto sobre Sucesiones y Donaciones: diferencias entre comunidades autónomas, estrategias para minimizar la carga fiscal de la herencia
- Planificación de la empresa familiar: régimen de empresa familiar en el Impuesto sobre el Patrimonio y el ISD, protocolos familiares, planificación de la sucesión empresarial
- Estructuras patrimoniales para la transmisión: SL familiar, trust extranjero versus fundación privada española

**Parte 5 — Plan de acción y revisión periódica**

Sintetiza el análisis en un plan de acción priorizado que incluya:
- Las tres o cinco acciones de mayor impacto que el cliente debería implementar en los próximos 12 meses
- Cronograma de implementación: qué se hace primero y por qué
- Coordinación con otros asesores del cliente: abogado, notario, gestor de la empresa familiar
- Calendario de revisiones periódicas y eventos que deben disparar una revisión del plan (cambio de legislación fiscal, cambio de situación familiar, venta de activos importantes)

**Formato:** Estructurado como un informe de planificación patrimonial real, con secciones claras, análisis cuantificado cuando sea posible y recomendaciones específicas con justificación. Señala claramente la necesidad de asesoramiento especializado para la implementación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Analizar situaciones patrimoniales y diseñar estrategias de optimización fiscal y planificación para la jubilación.',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Asesoramiento Legal en Planificación Sucesoria y Herencias con IA',
                'description'      => 'Usa Claude para asesorar en materia de derecho sucesorio, planificación de herencias, protocolos familiares y estructuras legales para la transmisión del patrimonio.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho sucesorio, derecho de familia y planificación patrimonial con más de 15 años de experiencia asesorando a familias con patrimonio significativo. Conoces en profundidad el derecho de sucesiones español, las diferencias entre derechos civiles autonómicos (Cataluña, País Vasco, Aragón, Galicia, Baleares, Navarra), el Impuesto sobre Sucesiones y Donaciones en sus distintas configuraciones autonómicas, y las herramientas legales de planificación sucesoria. Tu tarea es ayudarme a asesorar en un asunto de planificación sucesoria.

**Contexto del caso:**
Necesito asesoramiento para [describe: redactar o revisar un testamento / planificar la transmisión de una empresa familiar / gestionar una herencia complicada con múltiples herederos / estructurar donaciones en vida para reducir la carga del ISD / resolver un conflicto sucesorio entre herederos / planificar la sucesión de un no residente con patrimonio en España].

La situación familiar es [describe: matrimonio con tres hijos, uno de ellos con discapacidad / pareja de hecho con hijos de relaciones anteriores / empresario soltero con sobrinos como únicos familiares / familia con miembros residentes en distintas comunidades autónomas y en el extranjero].

**Parte 1 — El testamento como herramienta de planificación**

Analiza las opciones testamentarias disponibles y sus implicaciones:
- Tipos de testamento en España: notarial abierto, ológrafo, cerrado, y sus ventajas e inconvenientes prácticos
- Cuota legal en el derecho común versus en los derechos forales: ¿cuánta libertad de testar existe realmente?
- Cómo utilizar el testamento para proteger a herederos vulnerables (menores, personas con discapacidad): sustituciones fideicomisarias, heredero de confianza, cautela socini
- Legados específicos versus herencia global: cuándo y cómo usar legados para evitar conflictos entre herederos
- La legítima colectiva en el derecho foral: ventajas para la planificación de la empresa familiar en Cataluña, País Vasco y Aragón

**Parte 2 — Donaciones y transmisiones en vida**

Analiza las estrategias de transmisión de patrimonio en vida:
- Donaciones directas: implicaciones en el IRPF del donante (ganancia patrimonial por la diferencia entre valor de mercado y coste de adquisición) y en el ISD del donatario
- Donaciones con reserva de usufructo: cómo mantener el control y los rendimientos del bien donado mientras se transmite la nuda propiedad
- Pactos sucesorios en derechos forales: ventajas de los pactos de definición mallorquines, las heredades catalanas o el apartamento balear
- Seguros de vida como instrumento de transmisión: cómo la designación de beneficiarios permite una transmisión eficiente al margen de la herencia

**Parte 3 — Planificación de la empresa familiar**

La transmisión de la empresa familiar es uno de los asuntos más complejos del derecho sucesorio. Desarrolla un análisis de:
- El régimen especial de empresa familiar en el Impuesto sobre el Patrimonio y en el ISD: requisitos para aplicar la reducción del 95% y cómo no perderla
- El protocolo familiar como instrumento de organización y planificación de la sucesión empresarial
- Herramientas societarias para la planificación sucesoria: holding familiar, acciones sin voto, pactos parasociales, acuerdos de socios entre herederos
- Cuándo es necesario separar la planificación sucesoria de la empresa de la planificación del patrimonio personal de los socios

**Parte 4 — Gestión de herencias con conflicto**

Los conflictos entre herederos son frecuentes, especialmente en herencias complejas. Proporciona orientación sobre:
- La partición de herencia: proceso notarial versus judicial, cuándo conviene cada vía
- Gestión del período de comunidad hereditaria: cómo administrar los bienes comunes mientras se negocia la partición
- Las acciones disponibles cuando hay herederos que no colaboran: declaración de herederos, acción de división, impugnación del testamento
- Mediación familiar como alternativa a la vía judicial en conflictos sucesorios: ventajas, proceso y resultados habituales

**Parte 5 — Aspectos internacionales y de no residentes**

En un mundo globalizado, muchos asuntos sucesorios tienen dimensión internacional. Analiza:
- El Reglamento Europeo de Sucesiones (650/2012): cuándo se aplica, qué ley rige la sucesión y la opción de ley
- Sucesión de no residentes con patrimonio en España: qué impuesto pagan, qué ley sucesoria les aplica y qué diferencias existen respecto a los residentes
- Patrimonio en el extranjero de residentes españoles: obligación de declarar bienes en el extranjero (Modelo 720), implicaciones sucesorias del activo extranjero
- Doble imposición en sucesiones internacionales y los convenios de la OCDE aplicables

**Formato:** Respuesta estructurada como un memo de asesoramiento legal, con análisis claro de las opciones disponibles, sus ventajas e inconvenientes y recomendaciones específicas. Señala los aspectos que requieren análisis caso a caso con información adicional.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Asesorar en planificación sucesoria, herencias y transmisión de patrimonio familiar con optimización fiscal.',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte al Cliente con IA en Servicios de Inversión y Banca Personal',
                'description'      => 'Usa Claude para optimizar el soporte al cliente en servicios financieros personales, gestionando consultas de inversión, reclamaciones y onboarding digital de nuevos inversores.',
                'prompt_content'   => <<<'EOT'
Eres un director de experiencia de cliente con experiencia en servicios financieros de banca de particulares, gestión de activos y plataformas de inversión digital. Conoces los desafíos específicos del soporte en servicios financieros: la regulación que limita qué puede decir un agente de soporte (no puede dar asesoramiento de inversión si no está habilitado), la alta carga emocional cuando hay pérdidas en la cartera del cliente, los procesos de cumplimiento (KYC, prevención de blanqueo) que generan fricción en el onboarding, y la diversidad de canales y perfiles de cliente. Tu tarea es ayudarme a optimizar los procesos de soporte en servicios financieros personales.

**Contexto del equipo:**
Dirijo el equipo de soporte de [describe: una plataforma de inversión digital con 50.000 usuarios / una banca privada con clientes de alto patrimonio / una aseguradora con productos de vida-ahorro / una EAF independiente con 200 clientes / una app de finanzas personales con usuarios masivos]. Los principales problemas que recibimos son [consultas sobre pérdidas en cartera en momentos de volatilidad / dificultades en el proceso de onboarding y KYC / reclamaciones por comisiones o rendimientos no entendidos / dudas sobre fiscalidad de las inversiones / problemas de acceso a la plataforma digital].

**Parte 1 — Soporte en momentos de volatilidad de mercado**

Los momentos de caída de mercados son los más críticos para el soporte de servicios financieros. Diseña un protocolo específico para estos episodios:
- Cómo anticipar el incremento de contactos cuando hay una caída significativa del mercado
- Scripts de comunicación para gestionar clientes angustiados por pérdidas: qué se puede decir, qué está prohibido decir (no se puede dar asesoramiento específico sin habilitación), cómo calmar sin mentir
- Criterios para escalar a un asesor financiero habilitado cuando el cliente necesita orientación específica
- Comunicación proactiva en momentos de crisis: qué enviar, cuándo y por qué canal para reducir el volumen de contactos entrantes

**Parte 2 — Onboarding digital y proceso KYC**

El onboarding digital en servicios financieros tiene altas tasas de abandono debido a los procesos de KYC y cumplimiento normativo. Optimiza este proceso:
- Mapa del journey de onboarding actual con identificación de los puntos de mayor abandono
- Cómo comunicar los requisitos de KYC (DNI, selfie, origen de fondos) de forma que el usuario los entienda como necesarios y no como intrusivos
- Manejo de casos especiales que ralentizan el KYC: documentación extranjera, personas expuestas políticamente (PEPs), patrimonios con origen complejo
- Soporte en tiempo real durante el onboarding: cuándo ofrecer ayuda activa versus dejar que el proceso sea autoservicio

**Parte 3 — Gestión de reclamaciones financieras**

Las reclamaciones en servicios financieros tienen implicaciones regulatorias importantes. Define el proceso de gestión de reclamaciones:
- Proceso conforme a la regulación: plazos de respuesta obligatorios según la LMVSI y la normativa de conducta de mercado
- Tipos de reclamaciones más frecuentes y cómo gestionarlas: comisiones no informadas, rendimientos por debajo de expectativas, problemas de ejecución de órdenes, discrepancias en liquidaciones
- Cuándo derivar al Defensor del Partícipe, al Servicio de Reclamaciones de la CNMV o al Banco de España
- Cómo convertir una reclamación bien gestionada en una oportunidad de fidelización

**Parte 4 — Educación financiera como soporte proactivo**

Muchas consultas de soporte son consecuencia de la falta de educación financiera del cliente. Diseña una estrategia de soporte proactivo y educación que reduzca el volumen de contactos:
- Identificación de las consultas más frecuentes que pueden resolverse con mejor información previa
- Plan de comunicaciones educativas: cuándo y cómo enviar contenido formativo sobre fiscalidad de fondos, funcionamiento de los mercados, cómo leer el extracto de cartera
- Centro de ayuda y FAQs que realmente resuelvan las dudas más frecuentes sin necesidad de contactar con soporte
- Formación financiera básica en el proceso de onboarding: cómo asegurarse de que el cliente entiende lo que está contratando antes de firmar

**Parte 5 — Métricas y mejora continua del soporte financiero**

Define el sistema de métricas más adecuado para el soporte en servicios financieros, considerando las particularidades regulatorias del sector:
- KPIs de calidad: CSAT, FCR, tiempo de resolución, tasa de reclamación formal post-soporte
- KPIs regulatorios: cumplimiento de plazos de respuesta a reclamaciones, tasa de escalado al regulador, calidad de la documentación de compliance
- Análisis de causas raíz de los contactos de soporte: cómo usar los datos del soporte para mejorar el producto, la comunicación y los procesos de compliance
- Cómo usar IA en el soporte financiero de forma conforme: qué puede automatizarse y qué requiere siempre la intervención humana habilitada

**Formato:** Práctico y orientado a la implementación. Incluye scripts de comunicación, protocolos de escalado y referencias a la normativa de protección al inversor aplicable en España.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Optimizar el soporte al cliente en servicios de inversión gestionando volatilidad, reclamaciones y onboarding.',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'IA para Freelancers de Asesoramiento Financiero y Planificación Patrimonial',
                'description'      => 'Usa Claude para construir y escalar una práctica freelance de asesoramiento financiero independiente, desde la estructura legal hasta la captación de clientes de alto patrimonio.',
                'prompt_content'   => <<<'EOT'
Eres un asesor financiero independiente con experiencia construyendo una práctica de asesoramiento financiero y planificación patrimonial de forma autónoma. Has navegado los requisitos regulatorios de registro como Empresa de Asesoramiento Financiero (EAF) o asesor vinculado, has construido una cartera de clientes de alto patrimonio y has desarrollado modelos de servicio y honorarios que son sostenibles y competitivos. Tu tarea es ayudarme a construir o escalar una práctica independiente de asesoramiento financiero.

**Contexto personal:**
Soy [describe tu perfil: un gestor de banca privada con 12 años de experiencia que quiere independizarse / un analista financiero con certificación CFA que quiere pasar al asesoramiento / un planificador financiero certificado CFP que tiene algunos clientes privados y quiere formalizarlo / un experto fiscal que quiere ampliar su práctica hacia la planificación financiera integral]. Mi objetivo es [conseguir las primeras 10 familias como clientes / construir una práctica que genere 150.000€ anuales de ingresos / desarrollar un modelo de servicio escalable / especializarme en un nicho concreto de patrimonio].

**Parte 1 — Marco regulatorio del asesoramiento financiero independiente**

Explica el marco regulatorio que debo conocer y cumplir para operar como asesor financiero independiente en España:
- Las opciones de estructura para operar legalmente: EAF propia (registro en CNMV, requisitos de capital, seguro de responsabilidad civil, plan de negocio), asesor vinculado de una EAF existente, asesor de clientes profesionales sin registro
- Requisitos de cualificación: qué certificaciones reconoce la CNMV (CFA, CFP, EFA, EFP, EFPA) y cuál se adapta mejor a mi perfil
- Obligaciones MiFID II: test de idoneidad y conveniencia, política de conflictos de interés, política de honorarios, transparencia sobre remuneración
- Qué puedo y no puedo hacer sin registro: la diferencia entre asesoramiento de inversión regulado e información financiera no personalizada

**Parte 2 — Modelo de negocio y estructura de honorarios**

Define el modelo de negocio más adecuado para una práctica independiente de planificación financiera:
- Modelos de honorarios: fee-only (solo honorarios del cliente, sin retrocesiones), fee-based (honorarios más comisiones de productos), comisión sobre patrimonio (AUM fee), tarifa plana anual, por proyecto o por hora
- Argumentario a favor del modelo fee-only: cómo explicar al cliente que pagar honorarios directos le da mayor objetividad y alineación de intereses que el modelo de comisiones ocultas
- Tarifas de referencia para el mercado español de asesoramiento financiero independiente: por servicio (plan financiero completo, revisión de cartera, consulta específica) y por patrimonio gestionado
- Propuesta de valor del asesor independiente versus banca privada: qué argumentos realmente resuenan con el cliente potencial

**Parte 3 — Captación de clientes de alto patrimonio**

Construir una cartera de clientes de alto patrimonio como independiente es el mayor reto. Diseña una estrategia de captación que incluya:
- La red profesional como fuente principal de clientes: abogados de familia, notarios, asesores fiscales, auditores, gestores de empresa
- Cómo construir reputación de experto: publicaciones en medios especializados, participación en eventos de finanzas personales, presencia en LinkedIn como autoridad en planificación patrimonial
- El primer cliente referido: cómo convertirlo en el punto de partida de un flujo continuo de referencias
- Eventos y encuentros para el mercado de alto patrimonio: dónde se reúnen los potenciales clientes y cómo estar presente de forma apropiada

**Parte 4 — Modelo de servicio y entrega**

Define el modelo de servicio que estructure la relación con el cliente a lo largo del tiempo:
- El plan financiero inicial: qué incluye, cómo se entrega, cuánto tiempo lleva y cómo se cobra
- El servicio recurrente: frecuencia y formato de las revisiones, qué se revisa en cada sesión y cómo documentarlo
- Coordinación con otros asesores del cliente: cómo posicionarte como asesor de cabecera que coordina al equipo de abogado, gestor y otros especialistas
- Tecnología para la práctica independiente: herramientas de planificación financiera (MoneyGuidePro, eMoney, NaviPlan o alternativas europeas), CRM, generación de informes y firma digital de documentos

**Parte 5 — Escalabilidad y desarrollo profesional**

Define el camino de crecimiento de la práctica independiente a 5 años:
- Cómo pasar de vender tiempo a tener un modelo más escalable: grupos de clientes con menor patrimonio atendidos digitalmente, productos de conocimiento (cursos, guías), modelos de suscripción para clientes más jóvenes
- Cuándo y cómo asociarse o incorporar a otro asesor para crecer sin perder la calidad del servicio
- Formación continua obligatoria y voluntaria: qué certificaciones añadir, en qué nichos especializarse (ESG, empresa familiar, expatriados, colectivos profesionales específicos)
- Estrategia de salida a largo plazo: cómo valorar y vender una práctica de asesoramiento financiero cuando llegue el momento

**Tono:** Honesto sobre los desafíos (construir la cartera inicial lleva 2-4 años de trabajo intenso), práctico en las recomendaciones y riguroso en los aspectos regulatorios. Incluye cifras de referencia del mercado español cuando sea posible.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir una práctica freelance de asesoramiento financiero independiente, desde la regulación hasta la captación de clientes.',
                'vote_score'       => 37,
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
