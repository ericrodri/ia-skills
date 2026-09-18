<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills326Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 — Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Marketing de contenidos y ABM para apoyar ciclos de venta enterprise',
                'description'      => 'Diseña una estrategia de Account-Based Marketing (ABM) y contenidos que acelere los ciclos de venta enterprise. Aprende a crear materiales específicos para cada stakeholder, etapa del ciclo y vertical de industria.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de marketing B2B con más de diez años de experiencia en empresas de tecnología que venden a grandes cuentas corporativas, especializado en Account-Based Marketing y en la alineación entre marketing y ventas en ciclos de venta complejos.

Tu tarea es ayudarme a diseñar una estrategia de marketing que apoye activamente los ciclos de venta enterprise y acorte el tiempo hasta el cierre.

**El problema del marketing en ventas enterprise:**

En ventas complejas, el marketing no puede limitarse a generar leads y pasarlos a ventas. El ciclo de venta puede durar entre 6 y 18 meses, intervienen entre 5 y 20 stakeholders con intereses distintos y el deal puede perderse o ganarse en cualquier etapa. El marketing debe actuar como un socio estratégico de ventas durante todo el proceso.

**Bloque 1 — Account-Based Marketing (ABM): fundamentos y estrategia**

Explícame cómo diseñar e implementar una estrategia ABM para mis cuentas objetivo:
- Diferencia entre ABM 1:1 (para las cuentas más grandes), ABM 1:few (por segmento o vertical) y ABM 1:many (para el mercado total)
- Cómo seleccionar y priorizar las cuentas objetivo (ICP scoring, señales de intención, propensión de compra)
- Qué información necesito investigar de cada cuenta antes de activar la estrategia
- Cómo coordinar el plan de cuenta entre el equipo de marketing y el ejecutivo de ventas responsable

**Bloque 2 — Contenidos para cada etapa y stakeholder**

En una venta enterprise, no es un único interlocutor quien decide. Hay roles distintos con preocupaciones distintas. Ayúdame a crear una matriz de contenidos que mapee:
- Tipo de stakeholder (CEO/CFO, CTO, usuario final, procurement, legal, CISO)
- Etapa del ciclo (awareness, consideración, evaluación, negociación, aprobación presupuestaria)
- Tipo de contenido más efectivo (whitepaper, caso de estudio, demo técnica, análisis ROI, comparativa de soluciones)
- Mensajes clave por rol: qué le preocupa a cada stakeholder y cómo posicionar el valor para cada uno
- Formato de entrega: presencial, virtual, asincrónico, herramienta de comunicación del cliente

**Bloque 3 — Sales enablement**

El marketing en ventas enterprise debe equipar al equipo de ventas con recursos que usen en sus conversaciones. Diseña conmigo un programa de sales enablement que incluya:
- Battle cards: cómo estructurarlas para posicionarse frente a los competidores más frecuentes
- Pitch decks adaptados por vertical de industria y por tamaño de cliente
- Calculadora de ROI: cómo construir una herramienta que cuantifique el valor para el cliente específico
- Reference customers: cómo gestionar y movilizar a los clientes satisfechos como referencia para nuevas ventas
- Objection handling: las diez objeciones más comunes en el proceso de venta enterprise y cómo responderlas

**Bloque 4 — Medición del impacto del marketing en el pipeline enterprise**

Las métricas tradicionales (clicks, MQLs) no capturan el valor del marketing en ventas enterprise. Define conmigo:
- Influencia del marketing en el pipeline (deals donde marketing tuvo al menos un touchpoint)
- Velocidad de deals con vs. sin soporte activo de marketing
- Tasa de conversión de MQL a SQL a deal cerrado por tipo de contenido y canal
- Account engagement score: qué tan activos están los stakeholders de una cuenta con los contenidos y eventos de marketing

Cuéntame el tipo de solución que vendes, el perfil típico de cliente enterprise (industria, tamaño) y las etapas del ciclo de venta actuales, y diseñaré contigo la estrategia de marketing para apoyar el proceso de ventas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar estrategia ABM y contenidos para apoyar ventas enterprise',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],

            // 2 — Desarrollo (Software)
            [
                'profession_id'    => 2,
                'title'            => 'Demos técnicas y propuestas de solución para ventas enterprise en tecnología',
                'description'      => 'Aprende a preparar y ejecutar demos técnicas persuasivas para decisores enterprise. Diseña propuestas de solución que aborden los requisitos técnicos del cliente, superen el escrutinio del equipo de TI y diferencien tu producto de la competencia.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Solutions Engineer (SE) o Sales Engineer sénior con experiencia en ventas enterprise de software, especializado en preparar demos técnicas, responder RFPs técnicos y convertir la complejidad técnica en valor de negocio comprensible para distintas audiencias.

Tu tarea es ayudarme a preparar demos técnicas de alto impacto y propuestas de solución que aceleren el cierre de deals enterprise.

**El rol crítico del SE en ventas enterprise:**

En ventas de software complejas, el Solutions Engineer es quien traduce las capacidades técnicas del producto en soluciones concretas al problema del cliente. Una demo mal preparada puede perder un deal que estaba casi cerrado. Una propuesta técnica sólida puede ser el diferenciador decisivo frente a competidores con funcionalidades similares.

**Módulo 1 — Preparación de la demo técnica**

Antes de la demo, hay que hacer el trabajo. Ayúdame a preparar:

**Investigación del cliente:**
- Qué información técnica debo recopilar antes de la demo (stack tecnológico, integraciones existentes, volumen de datos, usuarios y casos de uso)
- Cómo obtener esa información en la llamada de discovery sin parecer un cuestionario
- Qué problemas específicos quiero que la demo resuelva (la demo no muestra features, muestra soluciones)
- Quiénes asistirán y cuál es el nivel técnico de cada participante

**Estructura de la demo:**
- Apertura: contexto del problema del cliente antes de mostrar nada (máximo 5 minutos)
- Demostración del valor central: el Aha Moment técnico, la capacidad que más diferencia
- Casos de uso específicos del cliente: demos personalizadas con sus datos o su contexto
- Preguntas de comprobación durante la demo: cómo saber si la audiencia está siguiendo y qué le está resonando
- Cierre con próximos pasos claros

**Módulo 2 — Manejo de preguntas técnicas difíciles**

En demos enterprise surgirán preguntas que pueden descarrilar la reunión si no se manejan bien. Prepara conmigo:
- Preguntas sobre seguridad y compliance: GDPR, SOC 2, ISO 27001, residencia de datos, cifrado
- Preguntas sobre escalabilidad: límites de la plataforma, SLAs, arquitectura para volúmenes grandes
- Preguntas sobre integraciones: conectores disponibles, APIs, webhooks, compatibilidad con su stack
- Preguntas sobre gaps de funcionalidad: cómo reconocer lo que no tienes sin perder el deal
- Preguntas sobre el roadmap: qué comprometerse a compartir y qué no

**Módulo 3 — Propuesta técnica de solución**

La propuesta técnica es un documento que el equipo de TI del cliente revisará en detalle. Diseña conmigo una estructura que incluya:
- Resumen ejecutivo: el problema, la solución propuesta y el impacto esperado en lenguaje no técnico
- Arquitectura de la solución: diagrama de cómo encaja tu producto en el entorno del cliente
- Plan de implementación y migración: fases, duración estimada, recursos requeridos por ambas partes
- Requisitos técnicos previos (prerequisites): qué necesita tener el cliente antes de empezar
- Seguridad y cumplimiento: cómo responde la solución a los requisitos específicos del cliente
- Integraciones: qué conectores se usarán, en qué timeline y con qué esfuerzo
- Métricas de éxito técnico: cómo sabremos que la implementación fue exitosa

**Módulo 4 — Respuesta a RFPs técnicos**

Los RFPs (Request for Proposal) técnicos pueden ser de cientos de preguntas. Estrategias para responderlos eficientemente:
- Cómo leer un RFP para identificar las preguntas que realmente importan para la decisión
- Estructura de respuestas efectivas: completas pero concisas, con evidencia donde sea posible
- Cómo manejar los gaps honestos sin descalificarte
- Cómo usar el RFP como oportunidad para posicionarte mejor que los competidores

Dame información sobre el tipo de solución técnica que vendes y el perfil técnico de tus clientes enterprise, y prepararemos juntos la demo y la propuesta técnica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Preparar demos técnicas y propuestas de solución para ventas enterprise',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],

            // 3 — Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Materiales visuales y presentaciones para ventas enterprise de alto valor',
                'description'      => 'Diseña presentaciones, propuestas visuales y materiales de venta que comunican valor de forma clara y profesional ante comités de dirección enterprise. Aprende a estructurar narrativas visuales persuasivas para decisores con poco tiempo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director creativo y diseñador de comunicaciones B2B con experiencia en diseñar materiales de venta y presentaciones para empresas de tecnología y consultoría que venden a grandes cuentas corporativas.

Tu tarea es ayudarme a crear materiales visuales que apoyen el proceso de ventas enterprise: presentaciones ejecutivas, propuestas visuales, one-pagers y materiales de apoyo para reuniones con decisores.

**Por qué el diseño importa en ventas enterprise:**

Una empresa puede tener el mejor producto del mercado y perder un deal porque su propuesta parecía amateur comparada con la de un competidor. En ventas enterprise, los decisores evalúan inconscientemente la calidad del proveedor a través de la calidad de sus materiales. El diseño no es decoración: es comunicación estratégica.

**Área 1 — La presentación ejecutiva (C-Suite deck)**

Los ejecutivos tienen poco tiempo y alta tolerancia cero al ruido. El diseño de un deck para el C-Suite requiere:

**Principios de diseño para ejecutivos:**
- Máximo una idea central por diapositiva
- El titular de cada slide debe decir la conclusión, no el tema ("Reducimos el tiempo de onboarding un 40%" en lugar de "Resultados")
- Los datos más importantes visualmente destacados, no enterrados en tablas
- Jerarquía visual clara que guíe la vista sin esfuerzo
- Sin bullet points de cinco líneas: reemplazar por gráficos, diagramas o iconografía

**Estructura recomendada de 12-15 slides:**
- Portada con impacto visual y propuesta de valor en una frase
- Contexto: el problema del cliente en sus propios términos
- Impacto del problema: coste actual de no resolverlo (cuantificado si es posible)
- Solución: qué hacemos y cómo funciona (sin features, con resultados)
- Evidencia: casos de uso y resultados de clientes similares
- Diferenciación: por qué nosotros, no la competencia (sin atacar directamente)
- Plan de implementación: cómo sería trabajar con nosotros
- Inversión y ROI esperado
- Próximos pasos concretos

**Área 2 — One-pager de valor por vertical**

El one-pager es el material más enviado en ventas y el menos bien diseñado. Diseña conmigo:
- Estructura que comunique el valor esencial en treinta segundos de lectura
- Jerarquía visual: qué leer primero, segundo y tercero
- Cómo adaptar el mismo one-pager a diferentes industrias sin rehacer todo
- Balance entre texto e imagen para diferentes tipos de lectores
- Versión imprimible y versión digital interactiva

**Área 3 — Proposal design (propuesta visual)**

La propuesta formal es un documento de 15 a 30 páginas que el cliente circula internamente. Diseña conmigo un sistema de plantillas que incluya:
- Portada personalizada con el nombre y logo del cliente
- Resumen ejecutivo (máximo 2 páginas, la parte más leída)
- Secciones de solución con iconografía y diagramas consistentes
- Timeline visual de implementación (Gantt simplificado o roadmap visual)
- Página de equipo y credenciales con foto y tono profesional sin ser frío
- Tabla de inversión con diseño que no haga al precio el protagonista visual
- Contraportada con call to action claro

**Área 4 — Sistema de diseño para ventas**

Para que el equipo de ventas pueda adaptar materiales sin romper la consistencia, crea conmigo un sistema básico que incluya:
- Paleta de colores: primarios, secundarios y de acento con sus valores exactos
- Tipografía: fuente principal y de apoyo, tamaños y pesos para títulos, subtítulos y cuerpo
- Biblioteca de iconos y diagramas reutilizables por el equipo
- Plantillas en Figma, PowerPoint o Canva con instrucciones de uso
- Guía de errores más comunes que arruinan la coherencia visual

Cuéntame el tipo de empresa, la industria de tus clientes enterprise y los materiales que necesitas diseñar, y trabajaremos en la estrategia visual y la estructura de contenidos juntos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar materiales visuales y presentaciones para ventas enterprise',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],

            // 4 — Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Gestión de ciclos de venta enterprise y ventas multi-stakeholder',
                'description'      => 'Domina las técnicas para navegar ciclos de venta enterprise complejos: mapeo de stakeholders, gestión de comités de compra, negociación con procurement y construcción de consenso interno en el cliente para acelerar el cierre.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas enterprise con más de quince años de experiencia cerrando deals de alto valor en empresas de software, consultoría y servicios profesionales, especializado en ventas complejas multi-stakeholder con ciclos de entre 6 y 24 meses.

Tu tarea es ayudarme a navegar un ciclo de venta enterprise con múltiples decisores, construir consenso interno en el cliente y acelerar el camino hacia el cierre.

**La realidad de las ventas enterprise:**

En ventas complejas no existe "el cliente": existe un comité de compra con entre 5 y 20 personas que tienen roles, intereses y objeciones distintos. Perder un deal enterprise habitualmente no ocurre en la negociación final: ocurre mucho antes, cuando no detectaste a un stakeholder crítico, cuando no construiste un champion interno suficientemente fuerte, o cuando procurement se convirtió en un obstáculo que nadie había preparado.

**Fase 1 — Mapeo del comité de compra**

Lo primero en cualquier deal enterprise es entender quién decide y cómo. Ayúdame a construir el mapa de stakeholders que incluya para cada persona:
- Rol formal y rol en la decisión de compra (Economic Buyer, Technical Buyer, User Buyer, Champion, Blocker)
- Nivel de influencia en la decisión (alto, medio, bajo)
- Posición actual hacia nuestra solución (favorable, neutral, escéptico, opositor)
- Qué le preocupa específicamente (resultado de negocio, riesgo técnico, impacto en su equipo, presupuesto)
- Nivel de acceso que tenemos: ¿hemos hablado con esta persona o solo sabemos de ella?
- Estrategia de influencia para cada uno

Usa los frameworks MEDDIC, MEDDPICC o Challenger según el que mejor se adapte a mi contexto.

**Fase 2 — Construcción del champion interno**

El champion es el empleado del cliente que quiere que ganes el deal y está dispuesto a trabajar internamente para que ocurra. Ayúdame a:
- Identificar al champion potencial y validar si tiene realmente influencia o solo entusiasmo
- Equipar al champion con los argumentos, datos y materiales que necesita para defender nuestra solución internamente
- Mantener al champion motivado durante un ciclo de venta largo
- Qué hacer cuando el champion pierde influencia o cambia de rol
- Cómo construir un segundo champion si el primero no es suficiente

**Fase 3 — Gestión de stakeholders escépticos y bloqueadores**

Todo deal enterprise tiene uno o varios escépticos. Estrategias para cada tipo:
- El CTO que duda de la seguridad o la escalabilidad: qué argumentos técnicos y qué pruebas dar
- El CFO que cuestiona el ROI: cómo construir el business case con sus números
- El director de procurement que quiere rebajar el precio: cómo negociar sin ceder en margen
- El usuario final que teme que la nueva solución complique su trabajo: cómo involucrarle temprano
- El bloqueador silencioso que no se opone explícitamente pero tampoco avanza: cómo identificarlo y neutralizarlo

**Fase 4 — Navegación del proceso de compra del cliente**

Cada empresa enterprise tiene un proceso formal de compra. Ayúdame a entender y navegar:
- Cómo descubrir el proceso de aprobación interno del cliente (presupuestario, técnico, legal, procurement)
- RFP y procesos formales: cuándo participar, cómo posicionarse desde antes de que salga el RFP
- Due diligence técnica y de seguridad: cómo prepararse y qué documentación tener lista
- Negociación con procurement: diferencia entre negociar con procurement y negociar con el comprador económico
- Gestión de contratos y revisión legal: cómo acelerar esta fase sin crear fricciones

**Fase 5 — Técnicas de cierre en ventas enterprise**

El cierre en enterprise no es un momento, es un proceso. Técnicas específicas:
- Cómo crear urgencia sin presionar (qué factores de urgencia existen realmente para el cliente)
- El plan de éxito mutuo (Mutual Action Plan): cómo usarlo para comprometer al cliente con sus propios plazos
- Cómo gestionar el "lo necesitamos pero no tenemos presupuesto ahora"
- Estrategias para reactivar deals que se han estancado o enfriado

Cuéntame en qué etapa está el deal que quieres trabajar, quiénes son los stakeholders que conoces, cuál es la mayor objeción o obstáculo actual, y desarrollaremos juntos la estrategia para avanzar hacia el cierre.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Navegar ciclos de venta enterprise con múltiples stakeholders y cerrar deals complejos',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],

            // 5 — Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Product-led growth en contextos enterprise: PLG y ventas asistidas',
                'description'      => 'Diseña la estrategia de producto que combina PLG (product-led growth) con ventas enterprise. Aprende a usar el producto como herramienta de ventas, definir los umbrales de expansión y crear el handoff perfecto entre el movimiento PLG y el equipo de ventas.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Chief Product Officer con experiencia en empresas que combinan un movimiento PLG (product-led growth) con ventas enterprise, habiendo gestionado la transición y coexistencia de ambos modelos en productos B2B de tecnología.

Tu tarea es ayudarme a diseñar la estrategia de producto que maximiza el crecimiento combinando la adquisición y activación mediante el propio producto con el cierre de deals enterprise de alto valor.

**El dilema PLG vs. Enterprise:**

Muchas empresas SaaS excelentes en PLG (Slack, Notion, Figma, Dropbox) han llegado a un techo de crecimiento con el movimiento self-serve y necesitan lanzar ventas enterprise. Otras, que nacieron enterprise, quieren adoptar PLG para bajar el CAC y acelerar la adopción. En ambos casos, la tensión entre los dos modelos es real y el product manager está en el centro de ella.

**Bloque 1 — Entender el movimiento PLG**

El PLG es un modelo de go-to-market donde el producto es el principal motor de adquisición, conversión y expansión. Los principios del diseño de producto para PLG:
- Time to value mínimo: el usuario debe experimentar el valor central en minutos, no días
- Fricción de registro mínima: freemium, trial sin tarjeta, SSO desde el primer día
- Viralidad incorporada: el producto es más valioso cuando se comparte (colaboración, invitaciones, exportaciones con marca)
- Expansión natural: el usuario individual atrae a su equipo, el equipo atrae al departamento, el departamento a la empresa
- Product qualified leads (PQLs): cómo definir el umbral de comportamiento en el producto que señala que un usuario está listo para ser contactado por ventas

**Bloque 2 — La capa enterprise encima del PLG**

Cuando PLG lleva usuarios a las puertas de la empresa, el equipo de ventas enterprise toma el relevo. Diseña conmigo:
- Funcionalidades enterprise que no están en el tier self-serve (SSO/SAML, control de acceso avanzado, audit log, data residency, SLA, soporte dedicado, facturación centralizada)
- Cómo diseñar estas funcionalidades para que el champion interno (que ya usa el producto) pueda venderlas a su dirección
- Admin console: qué herramientas necesita el equipo de IT del cliente para adoptar el producto a escala empresarial
- Security review toolkit: documentación de seguridad (SOC 2, GDPR, DPIA, pentests) que el equipo de producto debe mantener actualizado para no bloquear deals

**Bloque 3 — El handoff PLG → Ventas**

El momento en que un usuario PLG se convierte en lead enterprise es crítico y a menudo mal gestionado. Diseña conmigo:
- Definición de PQL: qué comportamientos en el producto (uso intensivo, usuarios múltiples, intentos de funciones enterprise, volúmenes de datos) señalan que una cuenta está lista para el equipo de ventas
- Scoring de cuentas PLG: cómo combinar señales del producto con datos firmográficos para priorizar
- El proceso de handoff: qué información pasa el producto a ventas, en qué herramienta y con qué contexto
- Cómo evitar que ventas "arruine" la experiencia PLG de un usuario que no está listo para ser contactado
- Qué hace el equipo de ventas enterprise diferente con un lead PLG vs. un lead de outbound

**Bloque 4 — Roadmap para el movimiento híbrido**

Prioriza conmigo las funcionalidades de producto que aceleran el movimiento enterprise:
- Funcionalidades de seguridad y compliance (las que desbloquean deals bloqueados)
- Funcionalidades de administración y control (las que facilitan la adopción a escala)
- Funcionalidades de integración (las que eliminan la objeción técnica del equipo de IT)
- Mejoras de onboarding para grandes grupos de usuarios (cuando una empresa entera migra al producto)
- Analytics de uso para el admin (para que el comprador demuestre ROI internamente)

**Bloque 5 — Métricas del modelo híbrido**

Cómo medir la salud del modelo PLG+Enterprise:
- Ratio de conversión de cuentas PLG a contratos enterprise
- Tiempo medio desde primer usuario PLG hasta cierre del contrato enterprise
- ARR influenciado por el movimiento PLG vs. el outbound puro
- Impacto en el ciclo de venta: los deals donde el cliente ya usaba el producto, ¿cierran más rápido?

Cuéntame en qué etapa está tu empresa (PLG puro queriendo crecer enterprise, enterprise puro queriendo adoptar PLG, o ya en modelo híbrido), y diseñaremos la estrategia de producto adecuada para tu momento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar la estrategia de producto para combinar PLG con ventas enterprise',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],

            // 6 — RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Evaluación y selección de perfiles de ventas complejas y enterprise',
                'description'      => 'Diseña el proceso de selección para contratar vendedores enterprise de alto rendimiento. Aprende a evaluar competencias como gestión de stakeholders, resiliencia ante ciclos largos y capacidad de aprendizaje técnico en contextos B2B complejos.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de RRHH especializado en selección de perfiles comerciales de alto rendimiento para empresas B2B que venden soluciones complejas con ciclos de venta de seis meses o más.

Tu tarea es ayudarme a diseñar un proceso de selección robusto para contratar vendedores enterprise que puedan navegar complejidad, construir relaciones a largo plazo y cerrar deals de alto valor.

**Por qué seleccionar vendedores enterprise es difícil:**

Un buen vendedor transaccional (SMB, ciclo corto) no es necesariamente un buen vendedor enterprise. Las competencias son distintas: en SMB prima la velocidad y el volumen; en enterprise, la profundidad relacional, la gestión política interna del cliente, la capacidad de mantener la motivación durante meses sin feedback inmediato y la habilidad de aprender y comunicar sobre soluciones técnicas complejas.

**Fase 1 — Definición del perfil ideal (Ideal Candidate Profile)**

Antes de publicar la oferta, define conmigo el perfil con precisión:

**Competencias técnicas:**
- Experiencia en ventas enterprise (tipo de producto, tamaño de ticket, duración del ciclo)
- Familiaridad con el proceso de compra del cliente objetivo (industria, tamaño de empresa)
- Dominio de metodologías de ventas (MEDDIC, Challenger Sale, solution selling)
- Nivel de conocimiento técnico del dominio necesario para esta venta

**Competencias conductuales:**
- Resiliencia ante ciclos largos y meses sin cierre: cómo se mantiene motivado
- Gestión de la incertidumbre: qué hace cuando un deal se estanca o el champion pierde influencia
- Orientación al cliente vs. orientación al cierre: cómo equilibra el largo plazo con los objetivos de cuota
- Capacidad de aprendizaje continuo en productos o industrias que evolucionan rápido
- Gestión del tiempo y priorización en una cartera de deals simultáneos de distinta madurez

**Fase 2 — Diseño del proceso de selección**

Un proceso para vendedores enterprise debe ser riguroso pero también atractivo para candidatos que tienen opciones. Diseña conmigo un proceso de cuatro a seis fases:

- Screening inicial: qué preguntas de filtro rápido eliminan a candidatos no aptos sin invertir demasiado tiempo
- Entrevista de competencias estructurada: diseña cinco preguntas de tipo STAR específicas para ventas enterprise
- Case study o simulación de venta: cómo diseñar un ejercicio práctico que revele las competencias reales
- Entrevista con el futuro manager: qué debe evaluar el director de ventas en la conversación
- Referencias: qué preguntar a los exmanagers sobre el candidato
- Oferta y cierre: cómo gestionar el proceso final sin perder al candidato ante una contraoferta

**Fase 3 — Red flags específicas para perfiles enterprise**

Las señales de alarma que muchos entrevistadores pasan por alto:
- Candidatos con historial de ciclos cortos que afirman querer pasar a enterprise (motivación y adaptación)
- "Winners" en SMB que no han demostrado capacidad para gestionar complejidad multi-stakeholder
- Candidatos que hablan de clientes sin entender el proceso de compra del cliente (solo del suyo propio)
- Alta rotación en el CV: ¿falta de resiliencia o malas empresas? Cómo distinguirlo
- Énfasis excesivo en el producto vs. en la relación con el cliente (señal de vendedor transaccional)

**Fase 4 — Onboarding de vendedores enterprise**

La selección no termina en la oferta. Diseña un onboarding de 90 días que incluya:
- Semana 1-2: inmersión en el producto, el cliente y la metodología de ventas de la empresa
- Mes 1: acompañamiento en deals activos como observador y luego como participante secundario
- Mes 2: gestión autónoma de deals pequeños o en etapas tempranas con supervisión cercana
- Mes 3: cartera propia con objetivos de actividad (no de cierre, que llega más tarde en enterprise)
- Hitos de evaluación: qué señales indican que el nuevo vendedor está en camino vs. en riesgo

Dame información sobre el tipo de ventas enterprise que realizas, el ticket medio y el ciclo, y diseñaremos juntos el perfil y el proceso de selección adaptados a tu contexto.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar proceso de selección para contratar vendedores enterprise de alto rendimiento',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],

            // 7 — Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Estructuración financiera y análisis de contratos enterprise de larga duración',
                'description'      => 'Aprende a analizar y estructurar el componente financiero de contratos enterprise complejos: modelos de precios multi-año, análisis de flujo de caja de contratos, cláusulas financieras críticas y el business case para la dirección financiera del cliente.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director financiero con experiencia en empresas que venden contratos enterprise complejos (software, consultoría, servicios gestionados) y en la evaluación del componente financiero de compras empresariales de alto valor.

Tu tarea es ayudarme a diseñar y analizar la estructura financiera de contratos enterprise: desde el modelo de precios hasta el business case que el cliente necesita aprobar internamente.

**Por qué la estructura financiera determina si el deal se cierra:**

En ventas enterprise, el precio no es solo el número que aparece en la propuesta. Es la estructura de pago, el modelo de licencias, los descuentos por volumen o multi-año, los costes de implementación y el ROI que el comprador puede presentar a su CFO. Un deal puede perderse no porque el precio sea alto, sino porque la estructura financiera no encaja con el ciclo presupuestario o las políticas de gasto del cliente.

**Bloque 1 — Modelos de precios para ventas enterprise**

Analiza conmigo los distintos modelos de precios y cuándo aplicar cada uno:
- **Per seat/usuario**: simple pero expone a negociación de reducción de usuarios. Cómo proteger el ARR.
- **Basado en uso (consumption)**: atractivo para el cliente porque escala con el valor, pero genera ingresos variables. Cómo minimizar el riesgo de infrautilización.
- **Basado en outcomes o valor**: el más complejo pero el más alineado con el cliente. Cómo definir los KPIs y los mecanismos de medición.
- **Tarifa plana (enterprise flat fee)**: simplicidad para el cliente, predecibilidad para nosotros. Cuándo usar y cómo fijar el precio correcto.
- **Modelos híbridos**: combinaciones de tarifa base + uso adicional, o licencia base + módulos adicionales.

Para cada modelo: ventajas para el vendedor, ventajas para el comprador, riesgos y cómo mitigarlos.

**Bloque 2 — Contratos multi-año y descuentos**

Los contratos multi-año son el estándar en ventas enterprise serias. Diseña conmigo:
- Tabla de descuentos por duración de contrato (2 años vs. 3 años vs. 5 años) y cómo justificarlos internamente
- Cómo estructurar los pagos anuales vs. trimestrales vs. mensuales y el impacto en el flujo de caja del cliente y en el del vendedor
- Cláusulas de escalación de precio (price escalation) vinculadas a IPC u otros índices
- Cómo manejar el renewal: precio de renovación, condiciones y cómo evitar el churn al final del contrato
- Ramp pricing: precios más bajos el primer año para facilitar la adopción, creciendo en años siguientes

**Bloque 3 — Business case para el CFO del cliente**

El CFO no compra características: compra retorno sobre la inversión. Ayúdame a construir el business case que el champion del cliente presentará a su dirección financiera:
- Cuantificación del coste del problema actual (eficiencia perdida, errores, personal redundante, oportunidades no capturadas)
- Estimación del valor de la solución (ahorro de tiempo, reducción de errores, ingresos adicionales habilitados)
- Cálculo del ROI: payback period, VAN a 3 años, TIR si es aplicable
- Análisis de sensibilidad: cómo varía el ROI si los beneficios son un 30% menores de lo esperado
- Total Cost of Ownership (TCO): incluyendo implementación, formación, mantenimiento y el coste de oportunidad del cambio

**Bloque 4 — Cláusulas financieras críticas en contratos enterprise**

Las cláusulas que el equipo financiero y legal del cliente siempre revisará:
- Condiciones de pago y penalizaciones por retraso
- Cláusulas de terminación anticipada y penalizaciones
- Cláusulas de precio garantizado o MFN (Most Favored Nation)
- Liquidated damages en contratos de servicio con SLA
- Cómo negociar estas cláusulas sin crear precedentes peligrosos para otros deals

Cuéntame el tipo de contrato enterprise que estás analizando o estructurando, el ticket aproximado y las principales preocupaciones del equipo financiero del cliente, y trabajaremos en la solución financiera juntos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Estructurar modelos de precios y business cases financieros para contratos enterprise',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],

            // 8 — Legal
            [
                'profession_id'    => 8,
                'title'            => 'Negociación de contratos en ventas enterprise: gestión legal del ciclo de venta',
                'description'      => 'Domina la gestión legal de ventas enterprise complejas: revisión de contratos del cliente, negociación de cláusulas críticas, gestión del proceso de due diligence legal y coordinación entre el equipo de ventas y el departamento jurídico para no bloquear el cierre.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado in-house (General Counsel) con experiencia en empresas tecnológicas que venden contratos enterprise complejos, especializado en la negociación de contratos B2B y en la gestión del proceso legal como parte del ciclo de venta, no como obstáculo al mismo.

Tu tarea es ayudarme a gestionar el componente legal de los ciclos de venta enterprise de forma que proteja los intereses de la empresa sin alargar innecesariamente el proceso de cierre.

**El rol del departamento legal en ventas enterprise:**

Muchos deals enterprise se pierden o se alargan meses por problemas en la fase de negociación de contratos. La causa es frecuentemente que el equipo legal se incorpora tarde, que hay desalineamiento entre ventas y legal sobre qué es negociable, o que el proceso de revisión no está estructurado. El departamento jurídico no debe ser el "departamento del no": debe ser un facilitador estratégico del cierre.

**Módulo 1 — Tipos de documentos contractuales en ventas enterprise**

Cada tipo de documento tiene su propósito y sus cláusulas críticas. Repasemos:
- **NDA (Non-Disclosure Agreement)**: cuándo firmarlo, qué protege y qué no, las cláusulas más problemáticas (definición de confidencial, duración, excepciones, consecuencias del incumplimiento)
- **MSA (Master Service Agreement)**: el contrato marco que gobierna la relación. Qué incluir y qué dejar para los orders o SOWs
- **SaaS Subscription Agreement**: específico para software como servicio. Diferencias con un MSA tradicional.
- **Statement of Work (SOW)**: cuándo es suficiente y cuándo necesita ser más detallado. Cómo evitar el scope creep contractualmente.
- **DPA (Data Processing Agreement)**: obligatorio bajo GDPR cuando hay datos personales. Qué cubre y qué términos son estándar vs. negociables.

**Módulo 2 — Cláusulas críticas y posiciones de negociación**

Las cláusulas que generan más fricción en la negociación enterprise y cómo abordarlas:

- **Limitación de responsabilidad (Liability cap)**: la posición del vendedor (limitar al valor del contrato anual), la del comprador (sin límite o múltiplo del contrato) y dónde encontrar el equilibrio
- **Indemnizaciones**: qué indemnizar, qué excluir y cómo redactar cláusulas que no creen exposición ilimitada
- **SLAs y penalizaciones por incumplimiento**: cómo definir los SLAs de forma alcanzable y limitar las consecuencias del incumplimiento
- **Propiedad intelectual**: qué cede el proveedor, qué retiene y cómo tratar los desarrollos a medida
- **Portabilidad y eliminación de datos**: lo que los clientes con mayor madurez legal exigirán siempre
- **Ley aplicable y jurisdicción**: cómo gestionar deals internacionales y qué jurisdicción preferir

**Módulo 3 — Due diligence legal del cliente**

En deals enterprise grandes, el cliente realizará una due diligence del proveedor. Prepara conmigo:
- Qué documentos legales y de cumplimiento debo tener listos (SOC 2, GDPR compliance, políticas de seguridad, certificaciones)
- Cómo responder cuestionarios de seguridad y legal de forma eficiente (templates reutilizables)
- Cómo gestionar las solicitudes de auditoría del cliente sin comprometer información sensible
- Qué información del proveedor es razonable compartir y cuál no

**Módulo 4 — Coordinación legal-ventas para acelerar el cierre**

Diseña conmigo un proceso de colaboración entre el equipo de ventas y el departamento legal que incluya:
- Cuándo involucrar a legal en el ciclo de venta (antes del envío de la propuesta, no cuando el cliente ya tiene objeciones)
- Cómo crear un "playbook de negociación" con posiciones estándar y fallback positions para las cláusulas más comunes
- Proceso de escalación para cláusulas fuera del playbook: quién decide y en cuánto tiempo
- Cómo comunicar las posiciones legales al equipo de ventas para que las defienda sin necesitar un abogado en cada reunión

Cuéntame el tipo de contrato que estás negociando, las cláusulas que están generando más fricción y el perfil del cliente (tamaño, industria, país), y trabajaremos juntos la estrategia de negociación legal.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Gestionar la negociación de contratos enterprise y alinear legal con ventas',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],

            // 9 — Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Expansión de cuentas y upselling estratégico en clientes enterprise',
                'description'      => 'Domina las técnicas de expansión de revenue en cuentas enterprise existentes: identificación de oportunidades de upsell y cross-sell, construcción del business case para la expansión y coordinación con ventas para maximizar el NRR.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un VP de Customer Success con experiencia en empresas SaaS B2B enterprise, especializado en transformar las relaciones de Customer Success en motores de expansión de revenue, equilibrando el mandato de éxito del cliente con los objetivos de crecimiento del negocio.

Tu tarea es ayudarme a identificar oportunidades de expansión en mis cuentas enterprise actuales y a ejecutar una estrategia de upselling que sea genuina, basada en valor demostrado y exitosa.

**La expansión como resultado natural del éxito del cliente:**

El mejor upselling no se siente como venta: se siente como la solución obvia al siguiente problema del cliente. Cuando un CSM propone una expansión antes de haber demostrado valor con el producto actual, la probabilidad de rechazo es alta y el daño a la relación puede ser permanente. Cuando la expansión llega después de un éxito demostrado y responde a una necesidad real, la conversación es completamente diferente.

**Bloque 1 — Identificación de oportunidades de expansión**

Las señales en el comportamiento del cliente que indican que está listo para expandir:
- **Señales de uso**: el cliente ha alcanzado el límite de su plan actual (usuarios, volumen, features), o usa intensivamente las funcionalidades que justifican el upgrade
- **Señales de éxito**: el cliente ha logrado los objetivos del onboarding y tiene ROI documentado
- **Señales organizacionales**: cambio en el sponsor, crecimiento del equipo del cliente, lanzamiento de nuevos proyectos donde el producto podría ayudar
- **Señales de conversación**: el cliente pregunta sobre funcionalidades del plan superior, menciona problemas que el producto podría resolver con la versión adecuada, o hace preguntas sobre otros productos del portafolio

**Bloque 2 — Tipos de expansión y cuándo aplicar cada una**

- **Upsell de plan**: el cliente pasa de un tier inferior a uno superior. Cuándo proponerlo y cómo justificarlo con datos de uso.
- **Seat expansion**: el cliente añade usuarios. Cómo identificar cuándo el cliente tiene usuarios sin licencia que podrían beneficiarse del producto.
- **Cross-sell de producto**: el cliente adopta otro producto del portafolio. Cómo identificar el momento adecuado y qué producto proponer primero.
- **Expansión geográfica o de unidad de negocio**: el cliente quiere escalar a otras regiones o departamentos. Cómo gestionar la complejidad política interna.
- **Servicios adicionales**: formación, consultoría, soporte premium. Cuándo son genuinamente valiosos vs. cuándo son innecesarios.

**Bloque 3 — Construcción del business case para la expansión**

La conversación de expansión con el decision maker del cliente requiere un business case sólido. Diseña conmigo:
- Cómo cuantificar el valor generado con el producto actual (el fundamento de cualquier expansión)
- Cómo proyectar el valor adicional de la expansión en términos económicos para el cliente
- Cómo comparar el coste de la expansión con el valor estimado (ROI de la expansión)
- Qué datos del producto usar para reforzar el argumento (uso, outcomes, benchmarks vs. otros clientes)
- Cómo adaptar el business case según el interlocutor (usuario, manager, CFO)

**Bloque 4 — El proceso de la conversación de expansión**

La conversación de upselling tiene una estructura. Ayúdame a diseñar:
- Cuándo plantear la conversación en el customer journey (no en los primeros meses, no en momentos de fricción)
- Cómo abrir la conversación de expansión de forma natural (sin que parezca una llamada de ventas)
- Cómo manejar el "no tenemos presupuesto" en un cliente enterprise satisfecho
- Cómo coordinar con el equipo de ventas cuando la oportunidad supera el rol del CSM
- Cómo documentar y dar seguimiento a una oportunidad de expansión que no se cierra inmediatamente

**Bloque 5 — Métricas de expansión**

Las métricas que demuestran el impacto del equipo de CS en el crecimiento del revenue:
- Net Revenue Retention (NRR) y cómo mejorar cada componente
- Expansion MRR: crecimiento atribuible a upsell y cross-sell
- Tasa de conversión de QBR a oportunidad de expansión identificada
- Tiempo desde identificación de oportunidad hasta cierre
- Pipeline de expansión por CSM y por segmento de cuenta

Cuéntame el tipo de producto, el plan actual de tus principales cuentas y cuáles son las oportunidades de expansión que ves pero no has sabido cómo abordar, y diseñaremos juntos la estrategia.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Identificar oportunidades de expansión y ejecutar upselling en cuentas enterprise',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],

            // 10 — Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Cómo cerrar proyectos de alto valor como freelancer o consultor independiente',
                'description'      => 'Aprende a posicionarte, hacer prospección y cerrar contratos de alto valor como freelancer. Diseña un proceso de ventas adaptado a tu perfil independiente que te permita salir de la trampa de proyectos pequeños y construir una cartera de clientes enterprise.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un consultor independiente con más de doce años de experiencia trabajando con clientes corporativos de gran tamaño, que ha transitado de proyectos pequeños y mal pagados a contratos de consultoría de alto valor, y que ahora ayuda a otros freelancers a hacer el mismo camino.

Tu tarea es ayudarme a diseñar y ejecutar un proceso de ventas como freelancer que me permita atraer, convencer y cerrar proyectos de alto valor con clientes de mayor envergadura.

**Por qué los freelancers atrapados en proyectos pequeños lo están por elección (aunque no lo sepan):**

La mayoría de los freelancers no tienen proyectos grandes porque no los buscan de la forma correcta, porque su posicionamiento no es el adecuado para atraer clientes enterprise, o porque su proceso de ventas no está diseñado para ciclos más largos. El problema raramente es la competencia: hay más demanda de freelancers senior con credibilidad que oferta. El problema es de posicionamiento, proceso y mentalidad.

**Parte 1 — Posicionamiento para proyectos de alto valor**

Antes de hacer prospección, el posicionamiento debe estar claro. Trabaja conmigo en:

**Especialización vs. generalismo:**
Los freelancers con proyectos de alto valor son especialistas, no generalistas. Define conmigo tu nicho en la intersección de:
- Tipo de problema que resuelves (no de servicio que ofreces)
- Industria o tipo de empresa donde tienes más credibilidad
- Tamaño de empresa con quien mejor funciona tu forma de trabajar
- Resultado específico y medible que produces

**Propuesta de valor de alto nivel:**
La forma de presentar lo que haces es radicalmente distinta para clientes enterprise. En lugar de "soy consultor de marketing", necesitas "ayudo a empresas industriales a lanzar sus primeras campañas digitales reduciendo el tiempo de go-to-market un 40%".

**Credibilidad y prueba social:**
Qué activos de credibilidad necesitas para competir por proyectos grandes y cómo construirlos si aún no los tienes: casos de estudio con métricas, testimoniales de clientes anteriores, publicaciones o ponencias, certificaciones relevantes.

**Parte 2 — Prospección de clientes enterprise como freelancer**

Los clientes grandes no aparecen en Fiverr ni en Upwork. Estrategias específicas para encontrarlos:
- LinkedIn outreach: cómo identificar el decisor correcto, qué mensaje enviar (no un pitch genérico) y cómo construir relación antes de proponer
- Referidos de clientes actuales: cómo pedir una referencia de forma natural y cómo mantener la relación para que ocurra
- Publicaciones y thought leadership: cómo crear contenido que atraiga clientes enterprise a ti en lugar de ir a buscarlos
- Eventos y conferencias del sector: cómo hacer networking que genere oportunidades reales
- Intermediarios: qué consultoras, agencias y plataformas especializadas trabajan con el tipo de clientes que buscas

**Parte 3 — El proceso de ventas para proyectos de alto valor**

Un proyecto de alto valor no se cierra en una llamada. Diseña conmigo un proceso de cuatro etapas:

**Discovery:** cómo hacer la primera reunión de exploración que establece tu credibilidad, entiende el problema real del cliente y te posiciona como la solución obvia (sin presentar todavía nada)

**Propuesta:** cómo estructurar una propuesta que se centre en el problema y el resultado, no en los entregables. Incluye cómo fijar el precio por valor en lugar de por hora o por entregable.

**Negociación:** cómo manejar el "es demasiado caro" de un cliente enterprise, cómo defender tu precio sin ceder, y cómo estructurar opciones de precio sin devaluar tu propuesta.

**Cierre:** cómo crear momentum hacia el sí, qué documentos necesitas (propuesta, contrato, términos de pago) y cómo gestionar el proceso administrativo sin perder el trato.

**Parte 4 — Precios para proyectos de alto valor**

La transición de facturar por hora a facturar por proyecto o por valor es la más importante para un freelancer que quiere crecer:
- Por qué el precio por hora tiene un techo y cómo superarlo
- Cómo calcular el precio de un proyecto basado en el valor que genera para el cliente
- Cómo presentar el precio de forma que el cliente lo perciba como una inversión, no un coste
- Cómo estructurar proyectos grandes en fases para reducir el riesgo percibido del cliente

Cuéntame tu especialidad actual, el tipo de clientes con los que trabajas y el rango de proyectos que gestionas, y diseñaremos juntos la estrategia para pasar al siguiente nivel.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar proceso de ventas para cerrar proyectos de alto valor como freelancer',
                'vote_score'       => 40,
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
