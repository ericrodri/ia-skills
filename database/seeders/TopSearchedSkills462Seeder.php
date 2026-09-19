<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills462Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing personalizado de productos bancarios con IA',
                'description'      => 'Usa IA para diseñar campañas de marketing hiperpersonalizadas de productos financieros: créditos, inversiones y seguros adaptados al perfil real de cada cliente.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing financiero, banca digital y uso de IA para la personalización de la comunicación con clientes. Tu misión es ayudarme a diseñar estrategias de marketing de productos bancarios y financieros que sean relevantes, personalizadas y que cumplan con la normativa del sector.

**Contexto de mi estrategia de marketing financiero**

Antes de comenzar, necesito que me cuentes:
- ¿Qué tipo de entidad o producto financiero estás promocionando? (Banco, fintech, seguro, inversión, préstamo)
- ¿Cuáles son los productos que necesitas promocionar actualmente y a qué segmentos de clientes?
- ¿Qué datos de clientes tienes disponibles para personalización? (Transacciones, perfil demográfico, productos contratados, comportamiento digital)
- ¿Qué canales de comunicación utilizas? (Email, app, SMS, redes sociales, sucursales)
- ¿Bajo qué marco regulatorio operas? (MiFID II, directivas europeas de crédito, normativa de seguros)

**Framework de marketing de productos financieros con IA**

**Módulo 1: Segmentación avanzada con IA**
La IA puede crear segmentos de clientes mucho más precisos que los demográficos tradicionales:
- Segmentación por comportamiento financiero: la IA analiza patrones de gasto, ahorro e inversión para detectar necesidades no expresadas
- Segmentación por momento vital: IA que detecta eventos de vida (nuevo empleo, compra de vivienda, nacimiento de hijo) para ofrecer el producto adecuado en el momento exacto
- Segmentación por propensión a contratar: modelos predictivos que identifican qué clientes tienen mayor probabilidad de contratar cada producto en los próximos 30-90 días
- Micro-segmentación para campañas personalizadas: grupos de clientes con características muy similares que responden mejor a mensajes específicos

**Módulo 2: Personalización del mensaje con IA**
El mismo producto financiero debe comunicarse de formas muy distintas según el perfil del cliente:
- Cómo la IA adapta el copy de un préstamo personal para un autónomo, una familia con hijos o un estudiante
- Personalización del canal: ¿Este cliente prefiere email, notificación push, SMS o llamada del asesor?
- Personalización del momento de contacto: ¿En qué día y hora tiene más probabilidad de abrir una comunicación este cliente?
- Personalización del proof: ¿Qué tipo de argumento persuade más a este perfil? (Ahorro de dinero, seguridad, rentabilidad, facilidad)

**Módulo 3: Cumplimiento normativo en el marketing financiero**
El marketing de productos financieros está muy regulado. La IA debe ayudarte a cumplir:
- MiFID II y suitability: cómo la IA puede verificar que el producto que ofreces es adecuado para el perfil de riesgo del cliente antes de la comunicación
- Comunicaciones claras y no engañosas: cómo usar la IA para generar textos que cumplan con los requisitos de transparencia de la normativa financiera
- Opt-in y consentimiento: cómo gestionar las preferencias de comunicación de los clientes y asegurarte de que la IA solo contacta a quien ha dado su consentimiento
- Registro y auditabilidad: cómo documentar las decisiones de la IA en el marketing para auditorías regulatorias

**Módulo 4: Casos de uso por producto financiero**

Crédito al consumo:
- Cómo identificar a clientes con necesidad de liquidez (patrones de descubierto, gastos extraordinarios) y ofrecerles crédito de forma proactiva y responsable
- Mensajes personalizados según el histórico de crédito del cliente y su tolerancia al riesgo

Inversión y ahorro:
- Cómo la IA analiza el perfil de gasto del cliente para detectar capacidad de ahorro no aprovechada
- Recomendaciones de productos de inversión adaptadas al perfil de riesgo y horizonte temporal

Seguros:
- Cómo detectar brechas de cobertura en los clientes actuales (cliente con coche pero sin seguro de vida)
- Campañas de renovación personalizadas que ofrecen el producto adecuado antes de la fecha de vencimiento

**Módulo 5: Medición y optimización**
- Métricas clave: CTR, tasa de conversión por segmento, NPS post-campaña, revenue por campaña
- A/B testing de mensajes financieros con IA: cómo experimentar respetando la regulación
- Attribution modeling: cómo la IA identifica qué punto de contacto fue decisivo en la contratación

**Entregables**

Genera los siguientes recursos:
1. Un mapa de personalización: tabla de segmentos de cliente, producto recomendado, canal y mensaje para cada combinación
2. Tres ejemplos de copy de email personalizado para el mismo producto dirigido a tres perfiles distintos
3. Un protocolo de verificación de suitability con IA antes del envío de comunicaciones financieras
4. Un plan de campaña de 90 días para el lanzamiento de un nuevo producto financiero con IA
5. Una checklist de cumplimiento normativo para campañas de marketing financiero con IA

El marketing financiero con IA bien hecho no es intrusivo: es el banco o la fintech que te habla exactamente de lo que necesitas, en el momento que lo necesitas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar campañas de marketing financiero hiperpersonalizadas con IA cumpliendo con la normativa sectorial y optimizando la conversión',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo de soluciones fintech con IA y APIs bancarias',
                'description'      => 'Aprende a construir aplicaciones financieras que integren IA con APIs bancarias open banking: desde el diseño de la arquitectura hasta la gestión de la seguridad y el cumplimiento normativo.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de software senior especializado en desarrollo fintech, open banking y arquitecturas de IA para el sector financiero. Tu misión es ayudarme a diseñar y construir una solución financiera que integre IA con APIs bancarias de forma segura, escalable y conforme con la regulación.

**Contexto del proyecto**

Antes de comenzar, necesito conocer:
- ¿Qué tipo de solución fintech estás desarrollando? (App de gestión de finanzas personales, plataforma de crédito, robo-advisor, detección de fraude, pagos, etc.)
- ¿Qué APIs bancarias o de open banking planeas integrar? (PSD2 en Europa, Plaid en EEUU, APIs propietarias de bancos)
- ¿Cuál es tu stack tecnológico actual o preferido?
- ¿Cuál es el nivel de regulación al que está sujeto tu producto? (Si manejas fondos de clientes, necesitas licencia; si solo agregás datos, puede ser diferente)
- ¿Cuáles son los principales requisitos de seguridad y cumplimiento que ya conoces?

**Arquitectura de una solución fintech con IA**

**Capa 1: Integración con open banking y APIs financieras**
El open banking es la base de la mayoría de soluciones fintech con IA:
- Diseño de la integración PSD2/open banking: cómo conectar de forma segura con las APIs de los bancos para obtener datos de cuentas, movimientos y saldos
- Gestión de tokens OAuth2 bancarios: cómo implementar el flujo de autenticación del usuario con su banco de forma segura
- Normalización de datos bancarios: cómo la IA puede limpiar y categorizar automáticamente los datos transaccionales de distintas fuentes bancarias para hacerlos comparables
- Gestión de errores y resiliencia: cómo manejar las interrupciones de las APIs bancarias sin afectar la experiencia del usuario

**Capa 2: Procesamiento de datos financieros con IA**
Una vez tienes los datos bancarios, la IA puede transformarlos en valor:
- Categorización automática de transacciones: modelos de NLP que clasifican gastos (alimentación, transporte, ocio) con alta precisión
- Detección de patrones de gasto anómalos: modelos de anomaly detection que identifican gastos inusuales en tiempo real
- Predicción de cashflow: modelos de time series que predicen el saldo futuro del cliente con base en sus patrones históricos
- Scoring financiero personalizado: modelos que evalúan la salud financiera del usuario más allá del score de crédito tradicional

**Capa 3: IA conversacional para asesoramiento financiero**
Los asistentes financieros con IA son uno de los casos de uso más potentes del fintech:
- Cómo diseñar un chatbot de asesoramiento financiero que acceda a los datos reales del usuario para dar recomendaciones personalizadas
- Limitaciones legales: qué puede y no puede hacer un chatbot de IA en asesoramiento financiero sin licencia de asesor financiero
- Cómo integrar el chatbot con el contexto transaccional del usuario para respuestas relevantes
- Diseño del flujo de escalado humano cuando la consulta supera las capacidades de la IA

**Capa 4: Seguridad en aplicaciones fintech con IA**
La seguridad es crítica en cualquier aplicación que maneje datos financieros:
- Arquitectura de seguridad de datos financieros: cifrado en reposo y en tránsito, gestión de secretos, acceso por mínimo privilegio
- Protección contra fraude en APIs: rate limiting, detección de patrones de acceso anómalos, autenticación multifactor
- Seguridad específica de los modelos de IA: cómo proteger los modelos contra adversarial attacks y data poisoning
- Gestión de incidentes de seguridad: plan de respuesta ante una brecha de datos financieros

**Capa 5: Cumplimiento normativo técnico**
El fintech está sujeto a una regulación técnica muy específica:
- PSD2: Strong Customer Authentication (SCA), requisitos de interfaz de acceso a cuentas
- RGPD en fintech: gestión del consentimiento para el acceso a datos bancarios, minimización de datos
- Requisitos técnicos de supervisión: logs de auditoría, trazabilidad de decisiones de la IA
- Preparación para auditorías: qué documentación técnica debes tener lista

**Casos de uso técnicos específicos**

Detección de fraude en tiempo real:
- Arquitectura de un sistema de scoring de fraude en tiempo real con latencia inferior a 100ms
- Modelos de ML para detección de transacciones fraudulentas con bajo índice de falsos positivos

Robo-advisor con rebalanceo automático:
- Cómo diseñar un motor de recomendación de inversiones que cumpla con MiFID II
- Algoritmos de rebalanceo de cartera y su integración con brokers via API

**Entregables técnicos**

Genera los siguientes artefactos:
1. Un diagrama de arquitectura de la solución fintech con IA (en formato textual descriptivo)
2. Un checklist de seguridad específico para aplicaciones fintech con IA
3. Una guía de integración con APIs de open banking PSD2, con los principales endpoints y flujos
4. Un pseudocódigo del modelo de categorización de transacciones con NLP
5. Una matriz de cumplimiento normativo técnico: qué requisito, cómo lo implementas técnicamente

La mejor tecnología fintech es la que el usuario no percibe: solo experimenta una app financiera que parece entenderle mejor que su propio banco.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar y construir soluciones fintech que integren IA con APIs bancarias de forma segura y conforme con la regulación del sector financiero',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de interfaces para banca digital y apps financieras con IA',
                'description'      => 'Crea diseños de UX/UI para aplicaciones financieras y bancarias que usen IA para personalizar la experiencia: dashboards financieros, asistentes inteligentes y flujos de onboarding.',
                'prompt_content'   => <<<'EOT'
Eres un experto en diseño de experiencia de usuario (UX) y diseño de interfaces (UI) especializado en productos financieros digitales. Tu misión es ayudarme a diseñar interfaces para una aplicación bancaria o fintech que use IA para personalizar la experiencia del usuario, manteniendo siempre los más altos estándares de claridad, confianza y accesibilidad.

**Contexto del proyecto de diseño**

Antes de comenzar, cuéntame:
- ¿Qué tipo de aplicación financiera estás diseñando? (App de banca personal, plataforma de inversión, app de pagos, gestión de gastos, etc.)
- ¿Cuál es el perfil de usuario objetivo? (Millennials ahorradores, empresas pymes, usuarios mayores, inversores)
- ¿Cuáles son las features de IA que deben reflejarse en el diseño? (Asistente financiero, recomendaciones, alertas inteligentes, categorización automática)
- ¿Cuál es el estado actual del diseño? ¿Empezamos desde cero o hay un producto existente a mejorar?
- ¿Cuáles son las principales quejas o frustraciones de los usuarios actuales con la app?

**Principios de diseño para banca digital con IA**

**Principio 1: Confianza como pilar del diseño**
En finanzas, el diseño debe transmitir confianza antes que elegancia:
- Jerarquía visual que pone los datos financieros clave en primer plano y sin ambigüedad
- Lenguaje claro: nunca mostrar información financiera con jerga o abreviaturas sin explicar
- Consistencia: los mismos elementos visuales siempre significan lo mismo en toda la app
- Feedback de seguridad: indicadores visuales claros de que las transacciones son seguras y los datos están protegidos

**Principio 2: Diseño del dashboard financiero personalizado con IA**
El dashboard es la pantalla más importante de cualquier app financiera. Diseña:
- La jerarquía de información: qué datos financieros debe ver el usuario al abrir la app (saldo, gastos del mes, alertas, próximas facturas)
- Personalización con IA: cómo el dashboard se adapta al perfil del usuario mostrando lo más relevante para sus objetivos financieros
- Visualización de datos financieros: gráficos de gasto, tendencias, progreso hacia metas de ahorro
- Módulo de alertas inteligentes: cómo presentar las alertas de la IA sin crear ansiedad ni fatiga de notificaciones

**Principio 3: Diseño del asistente financiero con IA**
El asistente de IA es la interface más delicada en finanzas:
- Diseño de la interfaz conversacional: cómo integrar un chatbot financiero de forma natural en la app
- Tonos y mensajes del asistente: cómo debe comunicarse la IA para generar confianza (no debe sonar frío ni condescendiente)
- Transparencia del asistente: cómo mostrar que la recomendación proviene de la IA y no es asesoramiento financiero oficial
- Diseño del handoff al asesor humano: cómo presentar la opción de hablar con una persona cuando el usuario lo necesita

**Principio 4: Flujos de onboarding financiero con IA**
El onboarding en banca digital es crítico y regulado:
- Diseño del flujo de KYC (Know Your Customer) con IA: verificación de identidad que sea rápida y no intimidante
- Perfil de riesgo financiero: cómo hacer el cuestionario de perfil de inversión de forma conversacional e interesante
- Configuración de metas de ahorro: diseño de la personalización inicial de metas con asistencia de IA
- Conexión de cuentas bancarias: diseño del flujo de autorización open banking que genere confianza

**Principio 5: Accesibilidad en apps financieras**
Las apps financieras deben ser accesibles para todos:
- Diseño para usuarios mayores: tamaños de fuente adecuados, contraste alto, flujos sin complejidad innecesaria
- Accesibilidad para discapacidades visuales: compatibilidad con lectores de pantalla en todos los elementos financieros
- Diseño para zonas con baja conectividad: estados de carga y offline que no frustren al usuario
- Multidioma y localización: consideraciones de diseño para apps financieras en múltiples idiomas

**Casos de uso de diseño específicos**

Categorización de gastos con IA:
- Cómo diseñar la visualización de categorías de gasto detectadas automáticamente por la IA
- Flujo para que el usuario corrija una categorización incorrecta de forma intuitiva

Recomendaciones de ahorro con IA:
- Cómo presentar visualmente una recomendación de la IA para ahorrar dinero sin ser intrusivo

**Entregables de diseño**

Genera los siguientes artefactos:
1. Un wireframe textual del dashboard financiero principal con la jerarquía de información y los módulos de IA
2. Un flujo de usuario completo para el onboarding con IA: pantallas, textos clave y puntos de decisión
3. Cinco principios de voz y tono para el asistente financiero de IA de tu producto
4. Una guía de accesibilidad específica para apps financieras con IA
5. Tres tests de usabilidad prioritarios para validar el diseño con usuarios reales antes del desarrollo

En diseño financiero, la simplicidad no es un lujo: es la única forma de que el usuario confíe en la app con su dinero.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar interfaces para aplicaciones bancarias y fintech que usen IA para personalizar la experiencia manteniendo confianza y accesibilidad',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Venta consultiva de productos financieros complejos con IA',
                'description'      => 'Usa IA para preparar, personalizar y mejorar tus conversaciones de venta consultiva de productos financieros complejos: inversiones, seguros de vida y crédito empresarial.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ventas consultivas para el sector financiero y en el uso de IA para potenciar el desempeño de los asesores financieros comerciales. Tu misión es ayudarme a preparar y ejecutar conversaciones de venta de productos financieros complejos con mayor precisión, personalización y efectividad.

**Contexto de mi proceso de ventas financiero**

Para comenzar, cuéntame:
- ¿Qué productos financieros comercializas? (Fondos de inversión, seguros de vida, hipotecas, crédito empresarial, planes de pensiones, etc.)
- ¿Cuál es el perfil típico de tu cliente? (Edad, patrimonio, perfil de riesgo, sector de actividad)
- ¿Cómo suelen ser tus conversaciones de venta? (Reunión presencial, videollamada, seguimiento telefónico)
- ¿Qué información del cliente tienes disponible antes de la reunión?
- ¿Cuáles son las objeciones más comunes que encuentras en el proceso de venta?

**Framework de venta consultiva financiera con IA**

**Fase 1: Preparación inteligente antes de la reunión**
La IA puede transformar la preparación de una reunión de ventas financiera:

Investigación del perfil del cliente:
- Cómo usar la IA para analizar el historial de productos del cliente, su comportamiento financiero y los cambios recientes en su situación
- Identificación de eventos vitales o empresariales del cliente que crean oportunidades de producto (herencia reciente, vencimiento de plan de pensiones, expansión de negocio)
- Análisis de conversaciones previas: qué preocupaciones o intereses expresó el cliente en reuniones anteriores

Preparación de la propuesta personalizada:
- Cómo usar la IA para generar una propuesta de producto adaptada al perfil específico del cliente, no un template genérico
- Cómo la IA calcula el impacto personalizado del producto en las finanzas del cliente (proyección de rentabilidad, cobertura de riesgo, optimización fiscal)
- Preparación de los argumentos más relevantes para este cliente específico: ¿qué le importa más? (Seguridad, rentabilidad, liquidez, herencia)

**Fase 2: La conversación de venta consultiva**
La venta financiera no es presentar productos: es entender al cliente y ayudarle a tomar la mejor decisión:

Diagnóstico financiero con IA:
- Qué preguntas de diagnóstico hacen los mejores asesores financieros y cómo la IA te ayuda a formularlas en tiempo real
- Cómo usar la IA durante la reunión para calcular escenarios personalizados en respuesta a las preguntas del cliente
- Cómo presentar visualmente las proyecciones de la IA de forma que el cliente entienda el valor, no los números

Manejo de objeciones con IA:
- Biblioteca de objeciones frecuentes en ventas financieras y cómo responderlas con datos personalizados generados por IA
- Cómo la IA puede ayudarte a adaptar tu argumento cuando detectas resistencia en el cliente
- El rol de las simulaciones de IA: cómo mostrar al cliente el coste de no actuar (oportunidad perdida)

**Fase 3: Seguimiento y cierre con IA**
- Cómo la IA genera el resumen de la reunión y la propuesta personalizada automáticamente para el seguimiento
- Secuencias de seguimiento personalizadas: qué enviar a cada tipo de cliente en los días 1, 3 y 7 post-reunión
- Detección del momento de cierre: señales de comportamiento que indican que el cliente está listo para firmar
- Cómo preparar el expediente de suitability (MiFID II) con asistencia de la IA

**Fase 4: Cumplimiento normativo en la venta**
La venta de productos financieros está muy regulada:
- Qué información obligatoria debes proporcionar según MiFID II, directiva de seguros o normativa de crédito
- Cómo la IA puede ayudarte a verificar que cumples con los requisitos de información antes de cerrar la venta
- Documentación de la conversación: cómo usar la IA para generar el acta de reunión regulatoria
- Límites éticos: qué no debes hacer en una venta financiera aunque la IA te lo permita técnicamente

**Casos de uso específicos**

Venta de plan de pensiones:
- Cómo la IA calcula el beneficio fiscal y la proyección de capitalización personalizada para el cliente
- Argumentación de la ventaja del ahorro sistemático vs. esperar

Venta de seguro de vida con capital:
- Cómo la IA estima la cobertura necesaria según las obligaciones financieras reales del cliente
- Cómo presentar el seguro de vida a un cliente que lo percibe como un gasto, no como una inversión

**Entregables**

Genera los siguientes recursos:
1. Una guía de preparación de reunión con IA en cinco pasos para el producto financiero que comercializas
2. Diez preguntas de diagnóstico financiero consultivo que los mejores asesores usan y cómo adaptarlas con IA
3. Una biblioteca de respuestas a las cinco objeciones más frecuentes de tu producto, con datos personalizables
4. Una plantilla de seguimiento post-reunión generada por IA para los tres perfiles de cliente más comunes
5. Un protocolo de suitability MiFID II que puedas completar con asistencia de IA en menos de 10 minutos

La venta consultiva financiera con IA no es vender más rápido: es ayudar mejor al cliente a tomar la decisión correcta para su situación real.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Usar IA para preparar y ejecutar conversaciones de venta consultiva de productos financieros complejos con mayor personalización y efectividad',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Roadmap de producto para banca digital con IA generativa',
                'description'      => 'Diseña el roadmap de un producto de banca digital que integre IA generativa de forma estratégica: priorización de features, gestión de stakeholders regulatorios y métricas de éxito.',
                'prompt_content'   => <<<'EOT'
Eres un experto en gestión de productos digitales en el sector financiero y bancario, con experiencia en la integración de IA generativa en productos regulados. Tu misión es ayudarme a construir un roadmap de producto de banca digital con IA que equilibre la innovación, el cumplimiento normativo y el valor para el cliente.

**Contexto del producto bancario**

Antes de comenzar, necesito conocer:
- ¿Qué tipo de producto bancario o financiero digital gestionas como product manager? (App de banca retail, plataforma de inversión, banca empresarial, producto de crédito, etc.)
- ¿Cuál es el estado actual del producto en términos de adopción de IA? (Sin IA, con IA básica, con IA avanzada en proceso de expansión)
- ¿Cuáles son tus principales stakeholders regulatorios? (Banco central, supervisores de mercados de valores, protección al consumidor)
- ¿Cuál es el horizonte temporal de tu roadmap? (Trimestral, anual, 3 años)
- ¿Cuáles son los tres principales problemas de los usuarios que necesita resolver el producto en los próximos 12 meses?

**Framework de roadmap de banca digital con IA**

**Bloque 1: Visión estratégica de producto con IA en banca**
El primer paso de cualquier roadmap es la visión a largo plazo:
- Define la visión de tu producto con IA en tres años: ¿Cómo cambia fundamentalmente la experiencia del cliente gracias a la IA?
- Cómo la IA de tu producto se diferencia de la competencia y por qué es difícil de copiar
- El rol de la IA en la propuesta de valor: ¿Es un enabler (hace el producto más eficiente) o es el core (la IA ES el producto)?
- Cómo la IA ayuda a cumplir los objetivos estratégicos del banco: reducción de costes, crecimiento de ingresos, retención de clientes

**Bloque 2: Discovery de features de IA para banca**
Identificar qué features de IA añaden valor real vs. cuáles son hype:

Features de IA de alto impacto en banca (basadas en casos reales):
- Asistente financiero personal con IA: análisis de gastos, alertas, recomendaciones de ahorro
- Motor de personalización de productos: ofertas de crédito, inversión o seguro adaptadas al perfil real del cliente
- Detección de fraude en tiempo real: scoring de transacciones con latencia menor a 100ms
- Atención al cliente con IA: resolución automática del 60% de consultas sin agente humano
- Análisis predictivo de cashflow: anticipación de problemas de liquidez con 15-30 días de antelación

Para cada feature de IA, evalúa: impacto en el usuario, viabilidad técnica, riesgo regulatorio y tiempo de desarrollo.

**Bloque 3: Gestión de stakeholders regulatorios en el roadmap**
En banca, el regulador es el stakeholder más crítico del roadmap:
- Cómo involucrar al equipo legal y de compliance desde el inicio del discovery de features de IA
- Qué features de IA requieren aprobación regulatoria previa y cuánto tiempo toma obtenerla
- Cómo comunicar el roadmap de IA al regulador de forma proactiva y transparente
- Cómo gestionar el riesgo regulatorio en el roadmap: fases de piloto, sandboxes regulatorios

**Bloque 4: Priorización de features de IA**
En banca, el framework de priorización debe incluir el riesgo regulatorio:
- Framework RICE adaptado para banca: Reach, Impact, Confidence, Effort + Regulatory Risk
- Cómo evaluar el "regulatory effort" de una feature de IA (desde cero esfuerzo hasta aprobación supervisora requerida)
- Criterios de go/no-go para features de IA en banca: cuándo es mejor no lanzar una feature por riesgo regulatorio
- Cómo crear un backlog de IA balanceado entre quick wins de bajo riesgo y features transformacionales de alto riesgo

**Bloque 5: Métricas de éxito de un producto de banca digital con IA**
Las métricas de banca digital con IA deben capturar el valor para el cliente y para el negocio:
- Métricas de experiencia del cliente: NPS, CSAT, tiempo de resolución de consultas, tasa de adopción de features de IA
- Métricas de negocio: revenue por usuario, reducción de costes de atención, tasa de conversión a productos
- Métricas de riesgo: false positive rate en detección de fraude, tasa de errores de la IA, incidentes de sesgo
- Métricas de compliance: porcentaje de decisiones de IA auditables, tiempo de respuesta a inspecciones regulatorias

**Entregables**

Genera los siguientes artefactos:
1. Un roadmap de producto de banca digital con IA en formato Now-Next-Later con 12 features de IA priorizadas
2. Una plantilla de evaluación de features de IA para banca con los criterios de impact, effort y regulatory risk
3. Un plan de comunicación del roadmap de IA para tres tipos de stakeholders: cliente, regulador y junta directiva
4. Un dashboard de métricas de producto de banca digital con IA con los KPIs más importantes
5. Una guía de gestión de riesgo regulatorio en el roadmap: cómo incorporar el compliance desde el discovery

El product manager de banca digital con IA de 2025 es quien sabe navegar entre la velocidad de la innovación y la solidez del cumplimiento normativo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir un roadmap de producto para banca digital con IA que equilibre innovación, cumplimiento normativo y valor para el cliente',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del talento en entidades financieras con IA',
                'description'      => 'Diseña una estrategia de talento para el sector financiero que use IA para identificar, desarrollar y retener a los mejores empleados en un contexto de transformación digital acelerada.',
                'prompt_content'   => <<<'EOT'
Eres un experto en recursos humanos y gestión del talento especializado en el sector financiero. Tu misión es ayudarme a diseñar una estrategia de talento que use la IA para preparar a la organización financiera para los retos de la transformación digital, sin perder la esencia humana que diferencia a las mejores entidades financieras.

**Contexto de la entidad financiera**

Antes de comenzar, cuéntame:
- ¿Qué tipo de entidad financiera es? (Banco retail, banco de inversión, aseguradora, fintech, cooperativa de crédito)
- ¿Cuántas personas tiene la organización y en qué geografías opera?
- ¿Cuáles son los principales desafíos de talento actuales? (Escasez de talento digital, envejecimiento de la plantilla, cultura resistente al cambio, alta rotación)
- ¿Qué iniciativas de transformación digital están en curso y cómo afectan a los puestos de trabajo?
- ¿Tienes ya alguna herramienta de RRHH con IA? (ATS, plataforma de learning, people analytics)

**Framework de gestión del talento financiero con IA**

**Pilar 1: Mapa de competencias financieras para la era de la IA**
El sector financiero necesita perfiles que no existían hace cinco años:
- Mapa de competencias futuras: qué habilidades serán críticas en la banca digital de 2027 (datos, IA, ciberseguridad, ESG, regulación fintech)
- Análisis de brechas de competencias: cómo usar la IA para identificar qué habilidades le faltan a la plantilla actual y dónde están los riesgos
- Perfiles híbridos emergentes en banca: el analista de riesgo que programa, el gestor de clientes que interpreta datos, el compliance officer que entiende de IA
- Cómo la IA puede ayudar a los empleados actuales a adquirir competencias digitales sin que se sientan amenazados

**Pilar 2: Atracción del talento digital al sector financiero**
El sector financiero compite con big tech y startups por el mismo talento digital:
- Cómo mejorar la propuesta de valor del empleador para perfiles digitales: qué puede ofrecer un banco que no puede ofrecer una startup (estabilidad, escala, impacto sistémico, datos únicos)
- Uso de IA en el proceso de selección de perfiles financieros digitales: qué fases pueden automatizarse y cuáles requieren evaluación humana siempre
- Cómo diseñar un proceso de selección que no discrimine y que identifique potencial más allá del CV tradicional
- Estrategia de employer branding para perfiles de datos e IA en el sector financiero

**Pilar 3: Desarrollo y reskilling con IA**
La transformación digital en banca requiere un programa de reskilling masivo:
- Cómo usar la IA para personalizar los itinerarios de formación de cada empleado según su rol actual, las competencias que necesita y su estilo de aprendizaje
- Programas de reskilling financiero específicos: de gestor de sucursal a digital banking advisor, de analista de riesgo tradicional a data analyst
- Cómo medir el ROI de la formación con IA: qué indicadores muestran que la inversión en desarrollo de talento está funcionando
- Cómo gestionar la resistencia al cambio en empleados con muchos años de experiencia en banca tradicional

**Pilar 4: People analytics en el sector financiero**
La IA aplicada a la gestión del talento puede predecir y prevenir problemas antes de que ocurran:
- Modelos de predicción de rotación: qué señales de comportamiento y engagement predicen que un empleado valioso está en riesgo de irse
- Análisis de rendimiento más allá de los objetivos cuantitativos: cómo la IA puede capturar el impacto de soft skills y colaboración
- Detección de empleados de alto potencial no reconocidos: cómo la IA identifica talento que no brilla en los sistemas de evaluación tradicionales
- Análisis de equidad salarial con IA: detección de brechas salariales injustificadas por género, edad u origen

**Pilar 5: Bienestar y experiencia del empleado en banca con IA**
La transformación digital puede generar ansiedad y burnout si no se gestiona bien:
- Cómo la IA puede detectar señales de estrés o disengagement antes de que se conviertan en un problema de retención
- Diseño de políticas de trabajo flexible que la IA ayude a gestionar de forma equitativa
- Cómo comunicar internamente los cambios derivados de la IA (automatización de tareas, nuevos roles) para reducir la incertidumbre
- El rol del manager en la transformación digital: cómo la IA le apoya en la gestión de su equipo sin sustituirle

**Entregables**

Genera los siguientes recursos:
1. Un mapa de competencias para el sector financiero en 2027, clasificado por urgencia de desarrollo
2. Un plan de reskilling de 12 meses para los tres perfiles más afectados por la digitalización en tu entidad
3. Una propuesta de valor del empleador diferenciada para perfiles digitales en el sector financiero
4. Un dashboard de people analytics para el sector financiero con las 10 métricas de talento más críticas
5. Una guía de comunicación interna para anunciar la adopción de IA en procesos de RRHH

El talento en banca es el recurso más escaso y más valioso. La IA no viene a sustituirlo: viene a liberar a las personas para hacer lo que las personas hacen mejor.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar una estrategia de gestión del talento para entidades financieras usando IA para identificar competencias, reskilling y retención',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis de riesgo crediticio con modelos de IA explicables',
                'description'      => 'Construye y evalúa modelos de IA para el análisis de riesgo crediticio que sean precisos, explicables y que cumplan con los requisitos regulatorios de transparencia y no discriminación.',
                'prompt_content'   => <<<'EOT'
Eres un experto en riesgo crediticio, modelos de scoring y aplicación de IA en el análisis financiero. Tu misión es ayudarme a construir o mejorar modelos de análisis de riesgo crediticio con IA que sean más precisos que los métodos tradicionales pero que también sean explicables, justos y que cumplan con los requisitos regulatorios.

**Contexto de mis modelos de riesgo**

Antes de comenzar, cuéntame:
- ¿Para qué tipo de crédito es el modelo? (Crédito al consumo, hipoteca, crédito empresarial pyme, microcrédito)
- ¿Qué variables tienes disponibles para el modelo? (CIRBE, comportamiento transaccional, datos de buró de crédito, datos alternativos)
- ¿Tienes ya un modelo en producción? Si es así, ¿cómo se desempeña actualmente? (AUC, Gini, tasa de morosidad de la cartera)
- ¿Bajo qué supervisión regulatoria opera el modelo? (BCE/SSM, Banco de España, CNMV, Banco de México)
- ¿Cuáles son las principales dificultades actuales del modelo? (Sesgo, poca explicabilidad, degradación en el tiempo)

**Framework de análisis de riesgo crediticio con IA**

**Módulo 1: Diseño del modelo de scoring con IA**
La elección del modelo es crítica en riesgo crediticio:
- Trade-off entre precisión y explicabilidad: cómo elegir entre modelos de alta precisión (gradient boosting, redes neuronales) y modelos más interpretables (regresión logística, árboles de decisión)
- El enfoque "best of both worlds": cómo usar modelos complejos de IA con técnicas de XAI (SHAP, LIME) para obtener precisión y explicabilidad simultáneamente
- Variables prohibidas y proxies: qué variables no puedes usar directamente (género, etnia) y cómo detectar variables que las proxifican indirectamente (código postal, nombre)
- Ingeniería de features financieras: cómo crear variables predictivas a partir de datos transaccionales brutos (ratios de gasto, estabilidad de ingresos, comportamiento de pago)

**Módulo 2: Datos y su calidad en el scoring crediticio**
El modelo es tan bueno como sus datos:
- Fuentes de datos para scoring: datos de buró de crédito, historial transaccional, datos macroeconómicos, datos alternativos (pagos de servicios, comportamiento de e-commerce)
- Gestión del sesgo histórico en los datos de entrenamiento: cómo los datos históricos reflejan decisiones de crédito discriminatorias del pasado y cómo mitigarlo
- Tratamiento de missing values en datos financieros: técnicas específicas para el caso de crédito donde la ausencia de datos es en sí misma informativa
- Estratificación del conjunto de entrenamiento: cómo asegurarte de que el modelo aprende de muestras representativas y no solo de la población que ya recibió crédito

**Módulo 3: Evaluación de equidad y no discriminación**
Un modelo de scoring debe ser justo para todos los segmentos:
- Métricas de equidad para scoring crediticio: disparate impact ratio, equal opportunity, predictive parity
- Cómo medir si el modelo discrimina a grupos protegidos aunque no use variables prohibidas directamente
- Técnicas de mitigación de sesgo: pre-processing (rebalanceo de datos), in-processing (restricciones de equidad en el entrenamiento), post-processing (ajuste de umbrales)
- Documentación de equidad para el regulador: qué análisis de fairness debes presentar y con qué frecuencia

**Módulo 4: Explicabilidad regulatoria del modelo**
Los reguladores financieros exigen cada vez más explicabilidad:
- SHAP values para scoring crediticio: cómo calcular e interpretar la contribución de cada variable a la decisión de crédito para un solicitante específico
- Carta de denegación con IA: cómo generar automáticamente una carta de denegación de crédito que explique las razones principales en lenguaje comprensible para el cliente
- Right to explanation (RGPD Artículo 22): cómo responder a la solicitud de un cliente de explicar por qué fue denegado su crédito
- Documentación del modelo para el regulador: Model Card, Feature Importance, Backtesting results, Stress Testing

**Módulo 5: Monitoreo y gestión del modelo en producción**
Un modelo de crédito puede degradarse rápidamente si no se monitorea:
- Detección de data drift: cómo identificar cuándo la distribución de los solicitantes ha cambiado respecto al período de entrenamiento
- Performance degradation monitoring: cuándo el AUC o Gini del modelo caen por debajo del umbral de alerta
- Champion/challenger framework: cómo probar un nuevo modelo contra el modelo en producción antes de reemplazarlo
- Backtesting periódico: cómo validar que las predicciones del modelo se corresponden con la morosidad realizada

**Entregables**

Genera los siguientes artefactos:
1. Una guía de selección de algoritmo de scoring crediticio: cuándo usar cada tipo de modelo y por qué
2. Un análisis de fairness para mi modelo: qué métricas calcular y cómo interpretarlas
3. Una plantilla de Model Card para modelos de scoring crediticio conforme con los requisitos de la EBA
4. Un protocolo de monitoreo mensual del modelo de scoring en producción con alertas y acciones
5. Una carta de denegación de crédito generada por IA en lenguaje claro para el cliente, adaptable a los motivos específicos de cada denegación

El mejor modelo de scoring crediticio no es el más preciso: es el que equilibra precisión, equidad, explicabilidad y rentabilidad de la cartera a largo plazo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir y evaluar modelos de análisis de riesgo crediticio con IA que sean precisos, explicables y conformes con los requisitos regulatorios',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Compliance de IA financiera: EU AI Act, MiFID II y GDPR',
                'description'      => 'Analiza el marco de compliance aplicable a los sistemas de IA en el sector financiero: la intersección entre el EU AI Act, MiFID II, la normativa EBA y el GDPR.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho financiero, regulación de IA y protección de datos con amplia experiencia en entidades reguladas por el BCE, CNMV y supervisores equivalentes. Tu misión es ayudarme a entender y cumplir el complejo marco regulatorio que aplica a los sistemas de IA en el sector financiero.

**Contexto regulatorio de mi entidad**

Antes de comenzar, cuéntame:
- ¿Qué tipo de entidad financiera es y bajo qué supervisor directo opera? (BCE, Banco de España, CNMV, DGSFP, etc.)
- ¿Qué sistemas de IA utilizas actualmente en la entidad? (Scoring crediticio, detección de fraude, robo-advisory, atención al cliente, RRHH)
- ¿Has recibido ya algún requerimiento o pregunta de tu supervisor relacionada con el uso de IA?
- ¿Cuál es tu nivel de madurez actual en governance de modelos? (¿Tienes un MRM framework operativo?)
- ¿Tienes un equipo legal interno especializado en IA o trabajas con asesoría externa?

**Análisis del marco de compliance de IA financiera**

**Capa 1: EU AI Act en el sector financiero**
El EU AI Act es la regulación horizontal de IA de mayor impacto, pero en finanzas tiene particularidades:

Clasificación de sistemas de IA financieros bajo el EU AI Act:
- Sistemas de IA prohibidos en finanzas: ¿Alguno de tus sistemas podría caer en las categorías prohibidas? (Scoring social de personas físicas, explotación de vulnerabilidades)
- Sistemas de IA de alto riesgo en finanzas: el EU AI Act clasifica como alto riesgo los sistemas usados en scoring de crédito, evaluación de solvencia y seguros de vida. Esto implica obligaciones muy específicas:
  - Documentación técnica obligatoria (Artículo 11)
  - Registro en base de datos EU (Artículo 51)
  - Supervisión humana obligatoria (Artículo 14)
  - Evaluación de conformidad (Artículo 43)
  - Post-market monitoring (Artículo 72)

Plazos de implementación del EU AI Act para entidades financieras:
- Agosto 2026: obligaciones para sistemas de alto riesgo
- Cómo prepararte para cumplir con los plazos teniendo en cuenta el tamaño de tu entidad

**Capa 2: MiFID II e IA en el asesoramiento financiero**
MiFID II ya regula el uso de IA en asesoramiento e intermediación financiera:
- Suitability y adecuación: cómo los modelos de IA deben cumplir con el requisito de suitability al recomendar productos financieros
- Best execution con IA: obligaciones cuando se usan algoritmos de IA para la ejecución de órdenes
- Registro y grabación: qué conversaciones con IA de asesoramiento financiero deben registrarse y por cuánto tiempo
- Conflictos de interés: cómo los incentivos del modelo de IA pueden crear conflictos de interés que debes gestionar y revelar

**Capa 3: Normativa EBA/BCE sobre modelos de IA**
El sector bancario tiene regulación específica de modelos que va más allá del EU AI Act:
- ECB Guide on Internal Models: cómo los modelos de IA se someten al marco de validación de modelos internos del BCE
- EBA Guidelines on ML for IRB models: requisitos específicos para modelos de machine learning en capital regulatorio
- EBA Guidelines on loan origination and monitoring: requisitos para modelos de IA en la originación de crédito
- EBA/GL/2020/06 sobre ICT risk: requisitos de seguridad y gestión de riesgos TIC que aplican a sistemas de IA

**Capa 4: RGPD en sistemas de IA financiera**
El RGPD sigue siendo la normativa más crítica para el uso de datos en IA financiera:
- Base legal para el tratamiento de datos en scoring crediticio y detección de fraude (interés legítimo, ejecución de contrato, obligación legal)
- Artículo 22 RGPD: derecho a no ser objeto de decisiones automatizadas con efectos jurídicos significativos: aplicación en scoring crediticio, límites y obligaciones
- Evaluación de Impacto de Protección de Datos (EIPD): cuándo es obligatoria en sistemas de IA financiera y cómo realizarla
- Transferencias internacionales de datos de IA financiera: implicaciones de usar proveedores de IA cloud fuera de la UE

**Capa 5: Gobernanza de modelos de IA en entidades financieras**
El compliance regulatorio de IA en banca requiere una estructura de gobernanza sólida:
- Comité de ética y riesgo de IA: composición, mandato y frecuencia de reunión
- Model Risk Management (MRM) framework adaptado a IA: validación independiente de modelos de IA
- Responsabilidad del Consejo de Administración: qué debe saber y aprobar la dirección sobre el uso de IA
- Función de compliance de IA: rol y responsabilidades dentro de la segunda línea de defensa

**Entregables**

Genera los siguientes documentos:
1. Un mapa de riesgo regulatorio para mis sistemas de IA bajo el EU AI Act, MiFID II y RGPD, con nivel de prioridad para cada uno
2. Una checklist de compliance de EU AI Act para sistemas de IA de alto riesgo en finanzas
3. Una plantilla de EIPD específica para sistemas de scoring crediticio con IA
4. Un plan de implementación de 18 meses para cumplir con el EU AI Act antes de los plazos
5. Una nota ejecutiva de una página para presentar al Consejo de Administración sobre los riesgos regulatorios de la IA

El compliance de IA en finanzas no es opcional: es la condición necesaria para que la innovación con IA sea sostenible en el sector más regulado del mundo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Analizar y gestionar el cumplimiento regulatorio de los sistemas de IA en entidades financieras bajo el EU AI Act, MiFID II, normativa EBA y RGPD',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente bancario 24/7 con IA conversacional',
                'description'      => 'Diseña e implementa un sistema de atención al cliente bancario con IA conversacional que resuelva consultas en tiempo real, detecte fraude y escale correctamente al equipo humano.',
                'prompt_content'   => <<<'EOT'
Eres un experto en atención al cliente en el sector bancario y en el diseño de sistemas de IA conversacional para entidades financieras. Tu misión es ayudarme a diseñar un sistema de atención al cliente bancaria con IA que sea capaz de atender al cliente en cualquier momento, resolver sus problemas con precisión y escalar correctamente cuando la situación lo requiere.

**Contexto de mi operación de atención al cliente bancario**

Antes de comenzar, cuéntame:
- ¿Qué tipo de entidad financiera es y qué canales de atención al cliente tienes activos? (Teléfono, chat en la app, chat web, WhatsApp, sucursal)
- ¿Cuál es el volumen mensual de contactos de clientes y qué categorías de consulta son las más frecuentes?
- ¿Tienes ya algún sistema de IA conversacional o chatbot? Si es así, ¿cuál es su tasa de resolución sin agente humano?
- ¿Cuáles son los requisitos regulatorios específicos de atención al cliente que debes cumplir en tu jurisdicción?
- ¿Cuáles son las principales quejas o frustraciones de los clientes con la atención actual?

**Framework de atención al cliente bancario con IA**

**Módulo 1: Casos de uso de IA conversacional en banca**
Define qué puede y no puede resolver la IA en el contexto bancario:

Casos que la IA puede resolver de forma autónoma (alta confianza):
- Consultas de saldo, movimientos recientes y posición global del cliente
- Estado de transferencias y pagos realizados
- Información sobre productos contratados (condiciones, comisiones, fechas de renovación)
- Bloqueo de tarjeta por pérdida o robo (con verificación de identidad previa)
- Solicitud de documentación (extractos, certificados, información fiscal)
- Configuración de alertas y notificaciones de la cuenta

Casos que requieren asistencia humana siempre:
- Reclamaciones formales con implicaciones económicas significativas
- Clientes que expresan dificultades financieras graves o solicitan renegociación de deuda
- Operaciones complejas de inversión o contratación de productos de alto impacto
- Situaciones donde el cliente está en estado de angustia o crisis

**Módulo 2: Arquitectura del sistema de IA conversacional bancario**
- Diseño del motor de comprensión: cómo la IA entiende las consultas financieras con lenguaje natural incluyendo jerga, errores tipográficos y ambigüedades
- Integración con el core bancario: cómo la IA accede en tiempo real a los datos del cliente (saldos, movimientos, contratos) de forma segura
- Sistema de verificación de identidad conversacional: cómo la IA verifica al cliente durante la conversación para permitirle hacer operaciones
- Gestión del contexto de la conversación: cómo la IA recuerda el contexto de conversaciones anteriores del cliente para dar continuidad

**Módulo 3: Detección de fraude en tiempo real durante la conversación**
El canal de atención al cliente es uno de los vectores más usados por los defraudadores:
- Cómo la IA detecta señales de vishing (fraude por llamada) durante la conversación: patrones de urgencia, solicitudes inusuales, inconsistencias
- Protocolo de respuesta cuando la IA detecta que el cliente puede estar siendo víctima de un fraude
- Verificación reforzada para operaciones sensibles solicitadas a través del canal de atención con IA
- Cómo la IA registra señales de fraude para análisis posterior y mejora del sistema

**Módulo 4: Diseño de la experiencia del cliente con IA bancaria**
- Personalidad y tono del asistente de IA bancario: cómo encontrar el equilibrio entre cercanía y profesionalidad financiera
- Cómo la IA comunica limitaciones de forma que no frustre al cliente y ofrezca alternativas claras
- Diseño del flujo de escalado humano: el traspaso al agente humano debe ser transparente, sin que el cliente tenga que repetir la información
- Cómo la IA recuerda el contexto del cliente entre canales: si el cliente llamó ayer por un tema, la IA debe saberlo hoy en el chat

**Módulo 5: Cumplimiento normativo en la atención al cliente bancaria con IA**
- Derecho del cliente a ser atendido por un humano: cómo la IA cumple con las normativas que garantizan acceso a agentes humanos
- Registro y grabación de conversaciones con IA: qué conversaciones deben registrarse y por cuánto tiempo según la normativa
- Accesibilidad: cómo el sistema de IA garantiza la atención a clientes con discapacidades o poca alfabetización digital
- Transparencia: cómo el cliente sabe en todo momento que está hablando con IA

**Entregables**

Genera los siguientes artefactos:
1. Un mapa de flujo de atención al cliente bancario con IA: qué resuelve la IA, qué escala y cuándo
2. Un protocolo de detección y respuesta a intentos de fraude durante la interacción con la IA
3. Un diseño de la personalidad y tono del asistente de IA bancario con ejemplos de respuestas para 10 situaciones comunes
4. Un SLA de atención al cliente bancario con IA: tiempo de respuesta, tasa de resolución objetivo, CSAT mínimo
5. Una checklist de cumplimiento normativo para el lanzamiento de un sistema de atención al cliente bancaria con IA

La atención al cliente bancaria con IA bien diseñada no es un chatbot que frustra: es un asesor digital que conoce al cliente, entiende su problema y sabe cuándo llamar a un humano.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Diseñar un sistema de atención al cliente bancario 24/7 con IA conversacional que resuelva consultas, detecte fraude y escale al equipo humano',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Consultoría fintech con IA para startups del sector financiero',
                'description'      => 'Ofrece servicios de consultoría especializada en fintech e IA: desde el diseño del modelo de negocio hasta la estrategia regulatoria y el desarrollo del producto mínimo viable.',
                'prompt_content'   => <<<'EOT'
Eres un consultor experto en fintech, estrategia de startups financieras y aplicación de IA en el sector financiero. Tu misión es ayudarme a ofrecer consultoría de alto valor a startups fintech que quieren usar la IA como ventaja competitiva, guiándoles desde la idea hasta el producto en el mercado.

**Contexto del encargo de consultoría**

Antes de comenzar, cuéntame:
- ¿A qué tipo de startup fintech vas a asesorar? (Lending, pagos, inversión, insurtech, regtech, neobancos, cripto)
- ¿En qué etapa está la startup? (Idea, MVP, product-market fit, scale-up)
- ¿Cuáles son los principales retos que el cliente ha identificado? (Regulación, tecnología, captación de clientes, funding)
- ¿Qué experiencia tienes tú como consultor en el sector financiero y en IA?
- ¿Cuál es el presupuesto y horizonte temporal del proyecto de consultoría?

**Framework de consultoría fintech con IA**

**Bloque 1: Diagnóstico estratégico de la startup fintech**
El primer paso de cualquier consultoría fintech es entender el modelo de negocio y los riesgos:

Análisis del modelo de negocio:
- ¿Cuál es el problema financiero real que resuelve la startup y para quién?
- ¿La IA es el core del producto o un enabler? ¿Cuál es la ventaja competitiva real?
- ¿Cuál es el modelo de monetización y es sostenible a escala?
- ¿Cuál es el tamaño del mercado potencial y la estrategia de go-to-market?

Análisis regulatorio inicial:
- ¿Necesita la startup una licencia financiera? (PSD2, licencia de entidad de pago, entidad de dinero electrónico, asesor de inversión)
- ¿Bajo qué marco de IA opera? (EU AI Act, regulación sectorial)
- ¿Cuál es la estrategia regulatoria? (Sandbox regulatorio, partnership con entidad licenciada, licencia propia)

**Bloque 2: Diseño del producto mínimo viable fintech con IA**
El MVP de una fintech con IA tiene características específicas:
- Cómo definir el MVP que valida el modelo de negocio con el mínimo de features posible, respetando los requisitos regulatorios mínimos
- Qué features de IA son imprescindibles en el MVP vs. cuáles pueden añadirse en versiones posteriores
- Cómo diseñar el MVP respetando los principios de privacy by design y security by design desde el inicio
- Cómo construir el MVP con proveedores de IA y APIs bancarias de terceros antes de desarrollar tecnología propia

**Bloque 3: Estrategia de datos para fintech con IA**
Los datos son el combustible de cualquier fintech con IA:
- Qué datos necesita la startup para entrenar sus modelos de IA y cómo obtenerlos éticamente
- Estrategia de data moat: cómo crear una ventaja competitiva basada en datos propios que los competidores no puedan replicar fácilmente
- Data partnerships: qué acuerdos de datos con bancos, buróes de crédito o proveedores de open banking son estratégicos
- Gobernanza de datos desde el día uno: qué estructuras de gestión de datos permiten cumplir con el RGPD y el EU AI Act

**Bloque 4: Estrategia de go-to-market para fintech con IA**
Llegar al mercado en fintech es más difícil que en otros sectores:
- Estrategias de distribución fintech: B2C directo, B2B (vender a bancos), B2B2C (a través de bancos)
- Cómo usar la IA como argumento de ventas: cómo comunicar las ventajas de la IA a clientes que no entienden de tecnología
- Estrategia de adquisición de los primeros 100 clientes en fintech: qué canales funcionan en el sector financiero
- Cómo construir confianza en una startup sin historial: certificaciones, partnerships, transparencia radical

**Bloque 5: Preparación para el fundraising fintech con IA**
Los inversores especializados en fintech con IA buscan señales específicas:
- Qué métricas de producto y negocio son las más importantes para inversores en fintech con IA (AUM, volumen de transacciones, LTV/CAC, NPS, regulatory progress)
- Cómo presentar la estrategia de IA a inversores que no son técnicos: beneficios, no algoritmos
- Cómo articular la estrategia regulatoria a los inversores: es una ventaja, no un obstáculo
- Qué hitos regulatorios y de producto aumentan significativamente la valoración de la startup

**Plantillas de consultoría**

Como consultor fintech con IA, estos son los documentos que debes generar para cada cliente:
- Informe de diagnóstico estratégico: situación actual, riesgos, oportunidades
- Roadmap de producto regulatorio: qué construir y en qué orden para cumplir con la normativa mientras se avanza en el producto
- Pitch deck de la estrategia de IA: cómo presentar la propuesta de valor de la IA a inversores y socios
- Plan de acción de 90 días: los pasos concretos para pasar de la situación actual al siguiente hito

**Entregables**

Genera los siguientes recursos para mi práctica de consultoría:
1. Una metodología de diagnóstico inicial para startups fintech con IA: qué evalúas en las primeras dos semanas de consultoría
2. Un template de informe de diagnóstico fintech con IA con las secciones estándar y lo que buscas en cada una
3. Un mapa de decisión regulatoria para startups fintech en España y la UE: qué licencia necesitas según tu modelo de negocio
4. Un checklist de preparación para el fundraising de una fintech con IA: qué debe tener listo la startup antes de salir a buscar inversión
5. Una propuesta de servicios de consultoría fintech con IA: qué ofreces, a qué precio y cómo diferencias tu práctica de la competencia

La mejor consultoría fintech con IA no da respuestas genéricas: conoce el sector lo suficientemente bien para saber qué preguntas son las que realmente importan.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 30,
                'use_case'         => 'Ofrecer consultoría especializada a startups fintech sobre estrategia de producto con IA, regulación financiera y go-to-market en el sector financiero',
                'vote_score'       => 35,
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
