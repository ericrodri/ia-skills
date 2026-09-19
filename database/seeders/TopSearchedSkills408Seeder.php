<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills408Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Diseñar chatbots de atención al cliente para campañas de marketing con IA',
                'description'       => 'Crea flujos conversacionales para chatbots que cualifiquen leads, respondan dudas de producto y acompañen al cliente en el embudo de marketing de forma automatizada.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en conversational marketing y diseño de chatbots para equipos de marketing. Ayúdame a diseñar un chatbot de marketing conversacional para [EMPRESA: producto, sector, público objetivo] que gestione [OBJETIVO PRINCIPAL: cualificación de leads / atención en landing pages / campañas de remarketing / soporte en e-commerce].

DEFINICIÓN DEL CHATBOT DE MARKETING

Contexto de uso:
- Canal: [web / WhatsApp / Instagram DM / Facebook Messenger / email interactivo]
- Momento de activación: [primer visit a la web / click en anuncio / abandono de carrito / después de descarga de lead magnet]
- Tono de voz: [alineado con la marca — describe el tono en 3 adjetivos]

FLUJO CONVERSACIONAL PRINCIPAL

Diseña el árbol de conversación completo en formato:
Bot: [mensaje del chatbot]
Opciones de respuesta del usuario:
  A) [opción A] → ir a nodo X
  B) [opción B] → ir a nodo Y
  C) [escribir respuesta libre] → lógica de IA para interpretar

Nodo de bienvenida:
- Saludo personalizado según el contexto de entrada
- Propuesta de valor en 1-2 frases
- Primera pregunta de cualificación o apertura

Flujo de cualificación (si el objetivo es generación de leads):
- Secuencia de 3-5 preguntas para calificar al lead (BANT simplificado o tu propio criterio)
- Lógica de ramificación: qué hacer si el lead es cualificado vs. no cualificado
- Transición a humano: en qué momento y con qué mensaje pasar al equipo de ventas

Flujo de soporte de producto (si el objetivo es e-commerce o FAQ):
- Árbol de las 10 preguntas más frecuentes con respuestas directas
- Gestión de preguntas no respondidas: cómo derivar al soporte humano con contexto
- Seguimiento post-compra: mensaje automático a las 24h de la compra para verificar satisfacción

Flujo de recuperación de abandono:
- Mensaje de recuperación de carrito abandonado (dentro del canal)
- Oferta de incentivo: lógica para cuándo ofrecer descuento o bonus sin devaluar la marca
- Timing: cuándo enviar el primer mensaje y los recordatorios siguientes

PERSONALIZACIÓN Y SEGMENTACIÓN

Diseña la lógica de personalización:
- Variables del usuario que el chatbot debe capturar y guardar (nombre, empresa, interés, etapa del embudo)
- Mensajes diferentes según segmento: 3 variaciones del flujo para distintos perfiles de visitante
- Integración con CRM: qué datos transferir y con qué etiquetas o campos

MÉTRICAS Y OPTIMIZACIÓN

- KPIs del chatbot: tasa de apertura de conversación, tasa de completado de flujo, leads generados, CSAT
- Test A/B: 3 elementos a probar en los primeros 30 días (primer mensaje, pregunta de cualificación, CTA final)
- Reglas de escalado: cuándo el chatbot debe derivar siempre a humano sin intentar resolver (reclamaciones, cancelaciones, urgencias)

MENSAJES DE CIERRE Y NURTURING

- Mensaje de cierre de conversación exitosa: confirmación + próximo paso claro
- Mensaje de cierre sin conversión: cómo dejar la puerta abierta para retomar más adelante
- Secuencia de seguimiento posterior: 2-3 mensajes automáticos para nutrir al lead que no convirtió

Empresa, producto y canal del chatbot: [escribe aquí]
Objetivo principal del chatbot: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseño de chatbots conversacionales para marketing y generación de leads',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Construir sistema de soporte técnico automatizado con IA para desarrolladores',
                'description'       => 'Diseña e implementa un sistema de atención técnica con IA que responda consultas de desarrolladores, clasifique tickets y escale inteligentemente los problemas complejos.',
                'prompt_content'    => <<<'EOT'
Eres un ingeniero de software especializado en sistemas de soporte técnico automatizado y arquitectura de plataformas de atención al cliente. Ayúdame a diseñar e implementar un sistema de soporte técnico con IA para [PRODUCTO: API / SDK / plataforma / SaaS técnico] usado por [TIPO DE USUARIO: desarrolladores / empresas / usuarios finales].

ARQUITECTURA DEL SISTEMA DE SOPORTE IA

Diseña la arquitectura completa en capas:

Capa 1 — Recepción y clasificación automática de tickets:
- Canales de entrada: email, formulario web, Slack, Discord, GitHub Issues
- Clasificación automática: categorías de ticket (bug, feature request, documentación, configuración, facturación)
- Priorización: lógica para asignar urgencia (crítico/alto/medio/bajo) basada en señales del ticket
- Enrutamiento: reglas para asignar al agente IA correcto o al humano correcto desde el inicio

Capa 2 — Resolución automática por IA:
- Base de conocimiento: qué documentos, guías y FAQs debe indexar el sistema
- Capacidad de resolución autónoma: qué tipos de tickets puede resolver la IA sin supervisión (estimación % de cobertura)
- Generación de respuesta: instrucciones de sistema para que la IA responda en el tono y formato correcto
- Confianza y escalado: umbral de confianza por debajo del cual la IA deriva al humano

Capa 3 — Escalado inteligente a humanos:
- Criterios de escalado automático: lista de condiciones que siempre escalan (seguridad, producción caída, datos perdidos)
- Transferencia de contexto: qué información lleva el ticket cuando llega al agente humano
- SLA por prioridad: tiempos de respuesta objetivo para cada nivel

DISEÑO DEL AGENTE IA DE SOPORTE

Escribe el system prompt completo del agente de soporte técnico:
- Rol y capacidades que tiene el agente
- Tono y estilo de comunicación técnica (nivel de detalle, uso de código, formato de respuesta)
- Limitaciones explícitas: qué no puede ni debe hacer el agente
- Plantillas de respuesta: estructura estándar para los 5 tipos de respuesta más frecuentes (confirmación de recepción, solicitud de información adicional, solución paso a paso, escalado, cierre)
- Instrucciones para incluir código: cuándo incluirlo, en qué formato, con qué nivel de detalle

INTEGRACIÓN TÉCNICA

Stack tecnológico recomendado:
- LLM para el agente: modelo y justificación de la elección
- Base de conocimiento vectorial: tecnología de RAG recomendada y cómo indexar la documentación
- Plataforma de ticketing: integración con Zendesk / Linear / Jira / GitHub Issues
- Canales de mensajería: cómo integrar Slack o Discord para el soporte de desarrolladores
- Monitorización: herramientas para supervisar la calidad de las respuestas automáticas

MÉTRICAS Y CALIDAD

Define el sistema de evaluación continua:
- Métricas de eficiencia: tasa de resolución automática, tiempo de primera respuesta, tiempo de resolución
- Métricas de calidad: CSAT por tipo de ticket, tasa de reapertura, precisión de clasificación
- Revisión de muestras: proceso de revisión semanal de respuestas automáticas para detectar errores
- Ciclo de mejora: cómo usar los tickets mal resueltos para mejorar la base de conocimiento

Producto y tipo de usuarios que usan el soporte: [escribe aquí]
Volumen estimado de tickets mensuales: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Arquitectura de sistemas de soporte técnico automatizado con IA',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Crear asistente virtual de atención al cliente para estudios de diseño con IA',
                'description'       => 'Diseña un asistente de atención al cliente para estudios de diseño que gestione consultas, cualifique proyectos, responda preguntas sobre procesos creativos y agilice la captación de nuevos clientes.',
                'prompt_content'    => <<<'EOT'
Eres un director creativo y consultor de negocio para estudios de diseño gráfico, UX/UI y branding. Ayúdame a crear un asistente virtual de atención al cliente para [NOMBRE DEL ESTUDIO O FREELANCER] que gestione las comunicaciones con clientes potenciales y actuales de forma profesional y alineada con la marca.

PERSONALIDAD Y VOZ DEL ASISTENTE

Define la identidad del asistente:
- Nombre del asistente: [propón 3 nombres que encajen con el estilo del estudio]
- Personalidad: 5 adjetivos que describan cómo se comunica (ej. cercano, profesional, creativo, directo, inspirador)
- Tono de voz: cómo adapta el lenguaje según el interlocutor (cliente corporativo, startup, autónomo)
- Ejemplos de frase característica: 3 frases que ilustran el tono perfectamente
- Lo que nunca diría: 3 ejemplos de comunicación que no encajan con la marca

FLUJOS DE CONVERSACIÓN PRINCIPALES

Flujo 1 — Cualificación de nuevo proyecto:
El cliente escribe "quiero un proyecto de diseño" o similar. El asistente debe:
- Descubrir el tipo de proyecto: branding, web, app, ilustración, motion, packaging, etc.
- Entender el alcance: desde cero o rediseño, referencias visuales, plazos
- Conocer el presupuesto: técnica de rango + respuesta según el rango indicado
- Preguntar el contexto: sector, empresa, audiencia, objetivo del proyecto
- Resultado del flujo: resumen del briefing básico + siguiente paso (reunión de discovery / propuesta / declinar educadamente)

Diseña el flujo completo con los mensajes exactos del asistente y las opciones de respuesta del cliente.

Flujo 2 — Preguntas frecuentes del proceso creativo:
Desarrolla respuestas completas y en tono de marca para:
- ¿Cuánto tiempo dura un proyecto de branding/diseño web/app?
- ¿Cómo es vuestro proceso de trabajo?
- ¿Cuántas revisiones están incluidas?
- ¿Trabajáis con clientes de fuera de [ciudad/país]?
- ¿Puedo pedir referencias o ver proyectos similares?

Flujo 3 — Gestión de cliente actual con dudas:
- Estado de proyecto: cómo informar del avance sin revelar información sensible
- Cambios de alcance: cómo gestionar solicitudes de cambio fuera del briefing original
- Retrasos o problemas: cómo comunicar contratiempos manteniendo la confianza del cliente

INTEGRACIÓN CON EL FLUJO DE TRABAJO DEL ESTUDIO

- Qué información captura el asistente y guarda automáticamente (nombre, empresa, tipo de proyecto, presupuesto, plazo)
- Cómo notifica al diseñador o director cuando hay un lead cualificado listo para atender
- Cuándo y cómo transfiere la conversación al humano sin perder el contexto
- Respuesta fuera de horario: mensaje automático con expectativa de tiempo de respuesta y recursos útiles mientras tanto

PROPUESTAS COMERCIALES AUTOMATIZADAS

Para proyectos estándar y recurrentes:
- Propuesta de branding básica: qué incluye, precio orientativo, plazo, siguiente paso
- Propuesta de diseño web: variantes según tecnología (WordPress / Webflow / a medida)
- Pack de redes sociales: qué entrega, frecuencia, formato

Cada propuesta debe poder enviarse como mensaje estructurado en el chat o como PDF adjunto.

Nombre del estudio, especialidad principal y canal de atención preferido: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Asistente virtual de captación y atención al cliente para estudios creativos',
                'vote_score'        => 32,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Automatizar seguimiento de clientes y objeciones de venta con chatbot IA',
                'description'       => 'Diseña un sistema de seguimiento automatizado post-reunión que mantiene caliente al prospecto, responde objeciones frecuentes y abre oportunidades de cierre sin intervención manual constante.',
                'prompt_content'    => <<<'EOT'
Eres un experto en sales automation y diseño de secuencias de venta conversacionales. Ayúdame a crear un sistema de seguimiento automatizado con IA para el equipo de ventas de [EMPRESA: qué vende, ticket medio, ciclo de venta, canal principal] que mantenga el contacto con prospectos tras la primera reunión sin perder el toque personal.

DIAGNÓSTICO DEL PROCESO DE VENTA ACTUAL

Define el contexto para diseñar el sistema:
- Etapas del pipeline: lista las etapas actuales de tu proceso de venta
- Punto de mayor abandono: en qué etapa se pierde más prospectos sin comprar
- Tiempo entre contactos: cuánto tiempo pasa habitualmente entre la primera reunión y el cierre
- Capacidad del equipo: cuántos prospectos gestiona cada vendedor simultáneamente

SISTEMA DE SEGUIMIENTO POST-REUNIÓN

Secuencia de seguimiento para los primeros 14 días tras la reunión de descubrimiento:

Día 0 — Resumen y siguiente paso (enviar 2h después de la reunión):
- Email o mensaje: resumen de la reunión, puntos de dolor identificados, siguiente paso acordado
- Plantilla adaptable: [escribe la plantilla completa con variables entre corchetes]

Día 2 — Valor adicional:
- Tipo de contenido a enviar: caso de éxito relevante / artículo / calculadora de ROI / vídeo demostrativo
- Mensaje de acompañamiento: [plantilla de 3-5 frases que contextualice el recurso sin ser comercial]

Día 5 — Check-in de avance:
- Mensaje de seguimiento: [plantilla natural que pregunte sin presionar]
- Variaciones según señal: 3 versiones distintas según si el prospecto ha abierto emails anteriores o no

Día 10 — Manejo de objeciones anticipadas:
Para las 5 objeciones más frecuentes en tu proceso, diseña un mensaje proactivo que las aborde antes de que el prospecto las exprese:
Objeción [N]: "[objeción típica]"
Mensaje proactivo: [texto del mensaje que aborda la objeción de forma sutil y positiva]

Día 14 — Decisión o pausa:
- Mensaje de decisión: invite a avanzar o a expresar dudas, sin ultimátum
- Rama "necesito más tiempo": secuencia de nurturing mensual para prospectos que no están listos
- Rama "no es el momento": mensaje de cierre elegante que deja la puerta abierta para el futuro

CHATBOT DE OBJECIONES EN TIEMPO REAL

Diseña un asistente que ayude al vendedor durante la conversación con el cliente:
- El vendedor escribe la objeción que acaba de recibir
- El sistema sugiere: técnica de respuesta recomendada + 2-3 frases de respuesta adaptables
- El sistema indica: señal positiva o señal negativa que acompaña a esta objeción

Para las 10 objeciones más frecuentes del sector, desarrolla las fichas completas:
Objeción: "[texto exacto del cliente]"
Análisis: [qué hay detrás de esta objeción realmente]
Técnica: [nombre de la técnica de respuesta]
Respuesta A (directa): [guion de respuesta directa]
Respuesta B (pregunta de vuelta): [pregunta que invierte el control]
Señal de avance: [cómo saber si la respuesta funcionó]

AUTOMATIZACIÓN Y HERRAMIENTAS

Propón el stack tecnológico para implementar este sistema:
- CRM recomendado y configuración necesaria
- Herramienta de secuencias de email: configuración de triggers y condiciones
- Canal de mensajería: WhatsApp Business API, LinkedIn Sales Navigator, etc.
- Integración con IA: cómo conectar Claude o GPT para personalizar los mensajes en escala

Producto o servicio de la empresa y ciclo de venta actual: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Automatización de seguimiento de ventas y gestión de objeciones',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Diseñar chatbot de soporte in-app para reducir fricción en el producto con IA',
                'description'       => 'Crea un asistente conversacional integrado en el producto que ayude a los usuarios en tiempo real, reduzca la fricción en flujos clave y disminuya tickets de soporte.',
                'prompt_content'    => <<<'EOT'
Eres un product manager especializado en experiencia de usuario conversacional y reducción de fricción en productos digitales. Ayúdame a diseñar un chatbot de soporte in-app para [PRODUCTO: descripción, tipo de usuario, flujos más problemáticos] que ayude a los usuarios en el momento en que se atascan y reduzca la necesidad de contactar con soporte.

MAPEO DE FRICCIONES Y MOMENTOS DE AYUDA

Identifica dónde y cuándo los usuarios necesitan asistencia:
- Top 5 flujos con más abandono o errores: describe cada flujo y el punto específico de atasco
- Preguntas más frecuentes al soporte durante el uso del producto: top 10 con frecuencia estimada
- Errores y mensajes de error más comunes: cuáles confunden más a los usuarios
- Momentos de alta cognitive load: partes del producto donde el usuario procesa mucha información y puede necesitar ayuda contextual

DISEÑO DEL ASISTENTE IN-APP

Personalidad y presentación:
- Nombre y avatar del asistente: opciones alineadas con la marca del producto
- Cuándo aparece: proactivo (trigger automático) vs. reactivo (el usuario lo invoca), y en qué situaciones cada uno
- Mensaje de bienvenida: texto de apertura para cada contexto de activación

Tipos de respuesta del asistente:
a) Respuesta de guía paso a paso: instrucciones contextuales que cambian según la pantalla donde está el usuario
b) Respuesta de FAQ: respuesta a pregunta directa del usuario con posibilidad de ramificar a más detalle
c) Respuesta de diagnóstico de error: el usuario describe un problema, el asistente hace preguntas para diagnosticar y resuelve o escala
d) Respuesta de onboarding contextual: aparece la primera vez que el usuario llega a una sección nueva

FLUJOS CONVERSACIONALES PARA LOS 5 CASOS MÁS FRECUENTES

Para cada caso de uso prioritario, diseña el flujo completo:
Caso [N]: [Nombre del flujo, ej. "Usuario no puede conectar su cuenta de Google"]
Trigger de activación: [qué acción o inacción del usuario activa este flujo]
Mensaje inicial del asistente: [texto exacto]
Árbol de conversación:
  Si el usuario dice X → respuesta A
  Si el usuario dice Y → respuesta B
  Si no responde en 30s → mensaje de seguimiento
Resolución satisfactoria: [mensaje de cierre + acción siguiente]
Escalado a humano: [cuándo y cómo, con qué información de contexto]

INTEGRACIÓN CON SOPORTE HUMANO

Diseña la transición fluida cuando la IA no puede resolver:
- Criterios automáticos de escalado: lista de condiciones que siempre derivan a humano
- Transferencia de contexto: qué información lleva el transcript al agente humano
- Mensaje al usuario durante el escalado: cómo comunicarlo sin frustrar
- Horario fuera de soporte: qué hace el asistente cuando no hay agentes disponibles

ANÁLISIS Y MEJORA CONTINUA

- Métricas clave: tasa de resolución sin escalado, CSAT del asistente, tiempo de resolución
- Identificación de huecos: cómo detectar preguntas que el asistente no sabe responder para añadir contenido
- Ciclo de actualización: proceso mensual para revisar y mejorar los flujos basado en datos reales
- Test de regresión: cómo verificar que las actualizaciones no rompen flujos existentes

Producto y flujos más problemáticos: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseño de asistentes in-app para reducción de fricción y soporte contextual',
                'vote_score'        => 48,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Automatizar respuestas a candidatos y empleados con chatbot de RRHH con IA',
                'description'       => 'Crea un chatbot de RRHH que responda preguntas frecuentes de candidatos y empleados, agilice el proceso de selección y libere tiempo al equipo de personas.',
                'prompt_content'    => <<<'EOT'
Eres un responsable de People Operations y tecnología HR con experiencia en automatización de procesos de recursos humanos. Ayúdame a diseñar un chatbot de RRHH para [EMPRESA: sector, tamaño, volumen de contrataciones anuales] que atienda a [CANDIDATOS en proceso de selección / EMPLEADOS actuales / ambos].

CASOS DE USO DEL CHATBOT DE RRHH

Define el alcance por tipo de usuario:

Para candidatos en proceso de selección:
- Preguntas sobre el proceso: etapas, plazos, quién les contactará
- Estado de su candidatura: cómo informar sin revelar decisiones prematuras
- Preguntas sobre la empresa: cultura, beneficios, política de trabajo remoto, horarios
- Programación de entrevistas: confirmar, reprogramar o cancelar entrevistas
- Preguntas sobre el puesto: detalles del rol, equipo, expectativas
- Feedback post-rechazo: cómo comunicar el no de forma humana y constructiva

Para empleados actuales:
- Dudas de nómina y retribución: cómo revisar la nómina, cuándo se paga, deducciones
- Permisos y vacaciones: cómo solicitarlos, saldo disponible, proceso de aprobación
- Políticas de empresa: horarios, teletrabajo, código de conducta, gastos
- Desarrollo profesional: cómo solicitar formación, proceso de evaluación, planes de carrera
- Gestión de incidencias: a quién acudir según el tipo de problema

DISEÑO DE FLUJOS CONVERSACIONALES

Para cada caso de uso prioritario, escribe el flujo completo:

Flujo [N]: [Nombre, ej. "Candidato pregunta por el estado de su candidatura"]
Canal: [email / WhatsApp / Slack / plataforma ATS / intranet]
Apertura del asistente: [mensaje de bienvenida contextualizado]
Identificación del usuario: cómo el chatbot verifica quién es (email, número de proceso, nombre)
Árbol de conversación: diseña los 3-4 turnos principales de la conversación
Cierre: mensaje de despedida + expectativa de siguientes pasos

PERSONALIZACIÓN Y TONO

Define la voz del chatbot de RRHH:
- Nombre del asistente: [propón 3 opciones con justificación]
- Tono: profesional pero cercano / formal / desenfadado (según la cultura de la empresa)
- Límites del chatbot: qué nunca debe responder por sí mismo (negociaciones salariales, decisiones de selección, conflictos interpersonales)
- Mensaje de derivación a RRHH: cómo redirigir al humano de forma cálida y sin frustración

INTEGRACIÓN CON LOS SISTEMAS DE RRHH

Propón la integración técnica con:
- ATS (Workday, Lever, Greenhouse, BreezyHR, etc.): qué datos consulta y actualiza
- HRIS o sistema de nóminas: qué información puede mostrar sin riesgo de privacidad
- Calendario: cómo gestiona la programación de entrevistas con disponibilidad en tiempo real
- Slack / Teams: cómo se integra como bot en el canal de empresa

PRIVACIDAD Y CUMPLIMIENTO

- Datos personales que el chatbot maneja: lista y base legal para su tratamiento (RGPD)
- Qué NO debe guardar el chatbot: datos sensibles que deben borrase o no registrarse
- Aviso de privacidad: texto para informar al usuario de cómo se usan sus datos
- Auditoría: cómo se registran las conversaciones y quién puede acceder a ellas

Empresa, tamaño y tipo de usuario principal del chatbot: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Automatización de comunicaciones de RRHH con candidatos y empleados',
                'vote_score'        => 30,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Crear asistente de atención al cliente financiero con IA para banca y fintech',
                'description'       => 'Diseña un asistente virtual para servicios financieros que responda consultas sobre productos, ayude en la gestión de cuentas y escale correctamente los casos sensibles.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en experiencia de cliente digital para servicios financieros con experiencia en banca, fintech y aseguradoras. Ayúdame a diseñar un asistente de atención al cliente con IA para [ENTIDAD: banco / fintech / aseguradora / plataforma de inversión] que gestione [TIPOS DE CONSULTA: cuentas, tarjetas, inversiones, seguros, préstamos].

MARCO REGULATORIO Y COMPLIANCE

Antes de diseñar el asistente, define los límites regulatorios:
- Consultas que el asistente puede responder de forma autónoma (información pública, estado de cuenta, FAQ)
- Consultas que requieren verificación de identidad reforzada antes de responder
- Consultas que siempre derivan a un asesor humano certificado (asesoramiento financiero, reclamaciones formales, sospecha de fraude)
- Aviso legal obligatorio: texto que debe aparecer en toda conversación sobre productos financieros
- Grabación y registro: obligación de informar al usuario y cómo hacerlo

AUTENTICACIÓN Y SEGURIDAD

Diseña el proceso de verificación de identidad:
- Niveles de autenticación: básico (solo información pública) / estándar (datos de cuenta no sensibles) / reforzado (operaciones o datos sensibles)
- Factores de autenticación: qué combinar (contraseña + OTP + biometría según el nivel)
- Comportamiento ante sospecha de fraude: cómo detectar y qué hacer cuando las respuestas no coinciden
- Límite de intentos: qué ocurre tras X intentos fallidos y cómo comunicarlo

CATÁLOGO DE RESPUESTAS POR TIPO DE CONSULTA

Para cada categoría de consulta, desarrolla los flujos:

Consultas de cuenta y movimientos:
- Saldo disponible: cómo mostrar el saldo de forma segura tras autenticación
- Últimos movimientos: formato de presentación y opciones de filtro
- Movimiento no reconocido: flujo completo desde la duda del cliente hasta el inicio de reclamación

Consultas sobre productos:
- Información de tarjeta de crédito: límite, fecha de corte, saldo pendiente, puntos
- Préstamos e hipotecas: saldo pendiente, próxima cuota, amortización anticipada
- Productos de ahorro e inversión: saldo, rentabilidad, instrucciones para contratar o cancelar

Incidencias frecuentes:
- Tarjeta bloqueada: proceso de desbloqueo o solicitud de nueva tarjeta
- Cobro incorrecto: recogida del caso + inicio de la reclamación
- Acceso a banca online: recuperación de contraseña, activación de dispositivo

GESTIÓN DE RECLAMACIONES Y SITUACIONES SENSIBLES

Diseña el protocolo para situaciones delicadas:
- Reclamación formal: cómo registrarla, plazo de respuesta regulatorio que hay que comunicar, número de expediente
- Cliente en dificultades financieras: tono empático, información sobre moratoria o reestructuración, derivación a asesor especializado
- Sospecha de fraude o phishing: pasos de seguridad inmediatos + mensaje de tranquilización al cliente
- Cliente muy frustrado: técnica de desescalada + derivación a humano con contexto completo

MÉTRICAS REGULATORIAS Y DE EXPERIENCIA

- Tiempo de resolución: objetivos por tipo de consulta y obligaciones del sector
- Tasa de derivación a humano: benchmark del sector y objetivo
- CSAT y NPS del asistente: metodología y frecuencia de medición
- Auditoría regulatoria: qué registrar, durante cuánto tiempo y cómo proteger los datos

Tipo de entidad financiera y principales consultas que recibe: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Asistente de atención al cliente para banca y servicios financieros',
                'vote_score'        => 35,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Diseñar chatbot de consultas legales frecuentes para despachos de abogados con IA',
                'description'       => 'Crea un asistente virtual para despachos de abogados que responda preguntas legales frecuentes, cualifique nuevos clientes y gestione la agenda de consultas iniciales sin sustituir el asesoramiento profesional.',
                'prompt_content'    => <<<'EOT'
Eres un abogado y consultor de transformación digital para despachos jurídicos. Ayúdame a diseñar un asistente virtual para el despacho [NOMBRE O TIPO: despacho generalista / especializado en laboral / penal / civil / mercantil / inmobiliario] que gestione las primeras interacciones con clientes potenciales y responda preguntas frecuentes sin sustituir el asesoramiento jurídico profesional.

DELIMITACIÓN LEGAL DEL CHATBOT

Establece con precisión qué puede y no puede hacer el asistente:
Lo que SÍ puede hacer el asistente:
- Proporcionar información legal general disponible públicamente
- Explicar conceptos jurídicos en lenguaje comprensible
- Informar sobre el proceso de trabajo del despacho
- Recoger datos del caso para la primera consulta
- Gestionar la agenda de citas con los abogados

Lo que NUNCA debe hacer el asistente:
- Dar opiniones sobre casos concretos sin revisión del abogado
- Recomendar acciones legales específicas
- Calcular plazos procesales sin verificación profesional
- Garantizar resultados
- Atender casos de urgencia sin intervención humana inmediata

Disclaimer obligatorio: redacta el texto que debe aparecer al inicio de toda conversación y antes de cualquier respuesta con contenido legal.

CUALIFICACIÓN DE NUEVOS CLIENTES

Diseña el flujo de recepción de nuevos casos:
Mensaje de bienvenida: [texto del asistente de apertura]

Preguntas de cualificación (adaptar según área del despacho):
- Tipo de asunto: selección de categorías principales del despacho
- Urgencia: ¿existe algún plazo inminente? ¿Cuándo ocurrieron los hechos?
- Parte contraria: ¿existe o puede existir procedimiento judicial ya iniciado?
- Expectativa del cliente: ¿qué busca conseguir?
- Disponibilidad: para agendar la primera consulta

Clasificación del caso:
- Caso urgente (plazo en menos de 48h): protocolo de contacto inmediato
- Caso estándar: confirmación de cita + envío de documentación previa
- Caso fuera del área del despacho: derivación educada con información de dónde acudir

BIBLIOTECA DE RESPUESTAS A PREGUNTAS FRECUENTES

Para el área de especialización del despacho, desarrolla respuestas a las 15 preguntas más frecuentes:
Pregunta [N]: "[pregunta exacta que haría el cliente]"
Respuesta del asistente: [respuesta informativa de 100-150 palabras, sin asesoramiento concreto, con disclaimer si aplica]
Derivación: [cuándo esta respuesta debe ir acompañada de invitación a consulta profesional]

GESTIÓN DE AGENDA Y PRIMERA CONSULTA

Diseña el flujo de reserva de cita:
- Selección de tipo de consulta: presencial / videoconferencia / telefónica
- Disponibilidad: integración con Google Calendar o Calendly para mostrar huecos reales
- Confirmación: email o WhatsApp automático con datos de la cita + qué traer o preparar
- Recordatorio: mensaje 24h antes con opción de confirmar, reprogramar o cancelar

PRIVACIDAD Y SECRETO PROFESIONAL

- Datos personales que recoge el asistente: lista y base legal (RGPD + deber de confidencialidad del abogado)
- Almacenamiento y acceso: quién puede ver las conversaciones y durante cuánto tiempo
- Cifrado y seguridad: estándares mínimos para proteger información de cliente
- Protocolo si el cliente comparte información sensible no solicitada: cómo manejarla y documentarla

Tipo de despacho y áreas de especialización principales: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Chatbot de recepción y cualificación de clientes para despachos de abogados',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Crear playbooks de atención al cliente proactiva con IA para Customer Success',
                'description'       => 'Diseña flujos automatizados de customer success proactivo que anticipen problemas, detecten oportunidades de expansión y refuercen el valor del producto en momentos clave del ciclo de vida.',
                'prompt_content'    => <<<'EOT'
Eres un director de Customer Success con experiencia en diseño de programas de atención proactiva y automatización de la relación con clientes en empresas SaaS. Ayúdame a crear playbooks de customer success proactivo con IA para [EMPRESA: producto, modelo de suscripción, tamaño de cartera, segmentos de clientes] que reduzca el churn y aumente la expansión.

FILOSOFÍA DE CS PROACTIVO VS. REACTIVO

Define el cambio de paradigma:
- Modelo reactivo actual: cómo funciona hoy la atención (esperar el ticket, responder quejas)
- Modelo proactivo objetivo: cómo debería funcionar (anticipar, intervenir antes del problema)
- Puntos de contacto proactivos que falta activar: dónde el equipo podría actuar pero no lo hace por falta de tiempo o señales

SISTEMA DE SEÑALES Y TRIGGERS

Diseña el motor de detección proactiva:

Señales de riesgo (acción preventiva de churn):
- Señal [N]: [nombre y descripción del indicador]
  · Fuente de datos: [de dónde viene este dato: CRM, producto, email, soporte]
  · Umbral de alerta: [valor exacto que activa la señal]
  · Nivel de urgencia: rojo / amarillo / informativo
  · Tiempo de respuesta esperado: [horas o días]

Señales de oportunidad (acción de expansión o upsell):
- Señal [N]: [nombre y descripción]
  · Lo que indica: [por qué es señal de oportunidad]
  · Acción recomendada: [qué hace el CSM o el sistema automatizado]

Señales de salud positiva (acciones de celebración y refuerzo):
- Hito de adopción alcanzado: primer feature crítico usado, volumen récord, aniversario de cliente
- Resultado positivo obtenido: el cliente comparte un resultado que atribuye al producto

PLAYBOOKS POR TIPO DE SITUACIÓN

Para cada tipo de señal, diseña el playbook completo:

Playbook [N]: [Nombre, ej. "Cliente sin login en 7 días"]
Trigger: [descripción exacta de la condición]
Responsable: [CSM / sistema automático / combinación]
Paso 1 — Acción automática: [qué hace el sistema sin intervención humana]
Paso 2 — Revisión del CSM: [qué evalúa el CSM antes de actuar]
Paso 3 — Contacto con el cliente: [canal, timing, mensaje exacto o plantilla]
Paso 4 — Si no hay respuesta en X días: [siguiente acción]
Paso 5 — Cierre del playbook: [qué registrar en el CRM y qué hacer según el resultado]

Plantilla de mensaje para este playbook:
Asunto: [si aplica]
Cuerpo: [texto completo del mensaje con variables entre corchetes]

Desarrolla playbooks para: riesgo de churn temprano, riesgo de renovación, oportunidad de upsell, hito de adopción alcanzado, cliente que no usa una feature clave.

AUTOMATIZACIÓN Y PERSONALIZACIÓN A ESCALA

Diseña el sistema para automatizar sin perder el toque personal:
- Qué pasos de cada playbook puede ejecutar el sistema sin intervención del CSM
- Cómo personalizar los mensajes automáticos con datos reales del cliente (nombre, uso, sector)
- Cómo priorizar la cartera del CSM: scoring de clientes según urgencia y potencial
- Dashboard de CS proactivo: qué ver cada mañana para saber dónde actuar

MEDICIÓN DEL IMPACTO

- KPIs del programa proactivo: tasa de churn evitado, expansión generada, tiempo de respuesta
- Comparativa pre/post: cómo medir el impacto del modelo proactivo vs. el reactivo anterior
- Revisión mensual: qué datos analizar para ajustar los thresholds y los mensajes

Empresa, producto y segmentación de cartera de clientes: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseño de playbooks de customer success proactivo automatizado',
                'vote_score'        => 46,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Automatizar atención al cliente como freelancer con asistente IA personalizado',
                'description'       => 'Crea un asistente virtual que gestione las consultas, cualifique proyectos y responda clientes potenciales en tu nombre, permitiéndote atender más proyectos sin perder tiempo en comunicaciones repetitivas.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de productividad y automatización para profesionales independientes. Ayúdame a crear un asistente virtual personalizado que gestione la atención al cliente de mi negocio freelance de [TIPO DE SERVICIO: diseño / desarrollo / consultoría / redacción / marketing / etc.] funcionando en mi nombre cuando no estoy disponible.

DEFINICIÓN DE TU ASISTENTE PERSONAL

Personalidad y voz:
- El asistente habla en primera persona de tu marca (no dice "soy un asistente IA", sino actúa como tú)
- Define el tono: [escribe 3 adjetivos que describan cómo te comunicas tú con clientes]
- Límites de transparencia: decide si el asistente revelará que es IA si el cliente pregunta directamente (recomendado: sí, con honestidad)
- Qué puede prometer el asistente en tu nombre y qué no puede comprometer sin tu aprobación

CATÁLOGO DE RESPUESTAS PERSONALIZADAS

Desarrolla las respuestas para las situaciones más frecuentes:

Consulta de nuevo proyecto:
El potencial cliente escribe preguntando por tus servicios. El asistente debe:
- Agradecer el interés con tu tono característico
- Pedir la información necesaria para evaluar el proyecto (briefing mínimo)
- Dar una expectativa realista de tiempo de respuesta tuya
- Enviar tu portfolio o casos de éxito más relevantes según el tipo de proyecto mencionado

Consulta de precio:
- Respuesta cuando el cliente pregunta precio sin dar contexto: [plantilla que solicita más información antes de dar cifras]
- Respuesta con rango orientativo: [plantilla con rango según tipo de proyecto, sin comprometerse]
- Respuesta para cliente con presupuesto muy bajo: [plantilla de gestión elegante sin perder la oportunidad]

Seguimiento de propuesta enviada:
- Seguimiento a los 3 días sin respuesta: [plantilla de recordatorio natural]
- Seguimiento a los 7 días: [plantilla con enfoque diferente, valor añadido]
- Cierre si no hay respuesta a los 14 días: [mensaje de cierre elegante que deja la puerta abierta]

Gestión de cambios de alcance:
- El cliente pide algo fuera del acuerdo: [plantilla para gestionar sin conflicto y proponer ampliar el contrato]

SISTEMA DE CUALIFICACIÓN AUTOMÁTICA

Diseña el sistema que te permite priorizar leads sin revisar todos:

Formulario o conversación de cualificación:
- 5 preguntas cuyas respuestas te dicen si el proyecto merece tu tiempo
- Scoring automático: cómo puntuar cada respuesta para clasificar leads en A/B/C
- Respuesta según puntuación:
  · Lead A (puntuación alta): respuesta rápida, oferta de llamada de discovery
  · Lead B (puntuación media): respuesta con información adicional, invitación a responder más preguntas
  · Lead C (puntuación baja): respuesta educada con derivación o sin inversión de tiempo

GESTIÓN FUERA DE HORARIO

Configura el asistente para cuando estás desconectado:
- Mensaje de fuera de horario: informa de cuándo responderás personalmente (sin dar excusa)
- Urgencias reales: cómo el cliente puede contactarte de emergencia (si decides tener esa opción)
- Recursos de autoservicio: qué puedes ofrecer al cliente mientras espera tu respuesta (FAQ, portfolio, calculadora de precios)

HERRAMIENTAS Y CONFIGURACIÓN PRÁCTICA

Opciones para implementar tu asistente sin saber programar:
- Opción 1 — WhatsApp Business con Manychat o Landbot: pasos de configuración básica
- Opción 2 — Email con Zapier o Make: automatización de respuestas según palabras clave
- Opción 3 — Chatbot web con Tidio o Crisp: integración en tu web o portfolio
- Opción 4 — Claude Projects con instrucciones personalizadas: cómo usarlo manualmente como asistente de redacción de respuestas

Tipo de servicio freelance y canal principal de comunicación con clientes: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Automatización de atención al cliente para profesionales independientes',
                'vote_score'        => 53,
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
