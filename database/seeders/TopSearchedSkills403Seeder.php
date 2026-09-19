<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills403Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Copywriting B2B con IA para campañas de account-based marketing',
                'description'       => 'Aprende a usar herramientas de IA para crear mensajes personalizados y secuencias de email B2B de alto impacto orientadas a cuentas estratégicas.',
                'prompt_content'    => <<<'EOT'
Eres un experto en copywriting B2B y account-based marketing (ABM). Tu tarea es ayudarme a crear una campaña de outreach personalizada para una cuenta objetivo específica usando inteligencia artificial.

Contexto de la tarea:
Trabajo en el equipo de marketing de una empresa SaaS y necesito crear mensajes de alto impacto para una cuenta clave. Quiero que me ayudes a construir una secuencia completa de comunicación adaptada al perfil de la empresa objetivo.

Instrucción principal:
Actúa como mi asistente de copywriting B2B especializado en ABM. Sigue el proceso paso a paso que te describo a continuación y genera el contenido completo al final.

Paso 1 — Análisis de la cuenta objetivo:
Antes de escribir, necesito que analices la información que te voy a proporcionar sobre la empresa. Identifica: sector, tamaño, dolores habituales del sector, posibles iniciativas estratégicas y el perfil del decisor (ICP). Si no tengo toda la información, ayúdame a inferir detalles plausibles con base en el sector.

Datos de la cuenta (rellena con los tuyos):
- Nombre de la empresa: [EMPRESA]
- Sector: [SECTOR]
- Tamaño aproximado: [N.º EMPLEADOS]
- Decisor objetivo (cargo): [CARGO]
- Problema que resuelve mi solución: [PROBLEMA]

Paso 2 — Generación de la propuesta de valor personalizada:
Con base en el análisis anterior, crea una propuesta de valor diferenciada para esta cuenta específica. La propuesta debe:
- Hablar directamente del dolor del decisor, no de las funcionalidades del producto
- Incluir un resultado concreto y medible que la empresa podría esperar
- Diferenciarse de los mensajes genéricos que reciben a diario

Paso 3 — Secuencia de emails de outreach (5 mensajes):
Redacta una secuencia de 5 emails de prospección para esta cuenta. Cada email debe tener:
- Asunto irresistible (máximo 8 palabras, sin clickbait)
- Apertura personalizada que no empiece con "Espero que estés bien"
- Cuerpo de máximo 120 palabras
- CTA claro y de baja fricción
- Tono: profesional, directo y humano, nunca robótico

Los 5 emails deben seguir esta cadencia:
- Email 1 (Día 1): Introducción y gancho de valor
- Email 2 (Día 3): Caso de éxito de un cliente similar
- Email 3 (Día 7): Recurso de valor (guía, informe, herramienta)
- Email 4 (Día 12): Ángulo diferente — pregunta provocadora
- Email 5 (Día 18): Cierre con humor o autorreferencia al silencio

Paso 4 — Mensajes de LinkedIn:
Complementa la secuencia de email con 2 mensajes de conexión en LinkedIn:
- Solicitud de conexión (máximo 300 caracteres)
- Mensaje de seguimiento tras la aceptación (máximo 150 palabras)

Paso 5 — Revisión y scoring:
Una vez generados todos los mensajes, evalúa cada uno con una puntuación del 1 al 10 en: personalización, claridad, urgencia y probabilidad de respuesta. Sugiere una mejora concreta para cualquier mensaje que baje de 7.

Formato de entrega:
Organiza todo el contenido en secciones claramente separadas con títulos. Incluye notas al pie con explicaciones de por qué cada decisión de copywriting fue tomada.

Objetivo final:
Que esta secuencia genere al menos una respuesta positiva de la cuenta objetivo y abra una oportunidad comercial real.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Crear secuencias de outreach B2B personalizadas para campañas ABM con IA',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Automatización de pipeline de ventas B2B con IA y webhooks en CRM',
                'description'       => 'Diseña e implementa flujos de automatización inteligentes en tu CRM para calificar leads B2B, actualizar etapas y disparar notificaciones usando IA.',
                'prompt_content'    => <<<'EOT'
Eres un ingeniero de software especializado en integraciones CRM y automatización de ventas B2B. Tu tarea es ayudarme a diseñar e implementar un sistema de automatización de pipeline usando webhooks, APIs y modelos de IA.

Contexto del proyecto:
Trabajo como desarrollador en una empresa B2B con un ciclo de ventas largo (60-90 días). El equipo comercial pierde tiempo calificando leads manualmente y actualizando el CRM. Quiero automatizar estas tareas usando IA para priorizar el tiempo del equipo de ventas.

Instrucción principal:
Actúa como mi arquitecto de soluciones y guíame en el diseño e implementación del sistema de automatización. Sé técnico y práctico — proporciona código funcional cuando sea apropiado.

Tarea 1 — Arquitectura del sistema:
Dibuja (en texto estructurado) la arquitectura de un sistema de automatización que incluya:
- Fuentes de entrada de leads (formularios, LinkedIn, email, API)
- Capa de procesamiento con IA para scoring y calificación
- Integración con CRM (HubSpot, Salesforce o Pipedrive — elige el más común)
- Webhooks de salida para notificaciones al equipo
- Logging y monitoreo de errores

Tarea 2 — Modelo de scoring de leads con IA:
Diseña un prompt de sistema para un modelo de IA (Claude o GPT-4) que, dado un perfil de lead B2B, devuelva:
- Puntuación de calificación (0-100)
- Categoría ICP: A (ideal), B (potencial), C (descalificado)
- Razón principal de la puntuación (máximo 2 frases)
- Siguiente acción recomendada para el equipo comercial

Incluye el código Python o Node.js para llamar a la API del modelo y parsear la respuesta.

Tarea 3 — Webhook de enriquecimiento de leads:
Escribe el código de un endpoint webhook (Express.js o FastAPI) que:
- Reciba un payload con datos básicos del lead (nombre, empresa, email)
- Llame a una API de enriquecimiento (Clearbit, Apollo o Hunter)
- Envíe los datos enriquecidos al modelo de IA para scoring
- Actualice el lead en el CRM con la puntuación y categoría
- Dispare una notificación Slack al SDR asignado si el lead es categoría A

Tarea 4 — Automatización de cambios de etapa:
Crea la lógica de negocio para automatizar el movimiento de deals entre etapas del pipeline basado en señales de comportamiento:
- Email abierto 3+ veces → mover a "Interesado"
- Demo agendada → mover a "Oportunidad calificada"
- Sin actividad 14 días → trigger de tarea de seguimiento automática
- Propuesta enviada y no vista en 5 días → alerta al manager

Tarea 5 — Testing y monitoreo:
Proporciona:
- Suite de tests unitarios para las funciones críticas
- Estrategia de logging para auditar decisiones de la IA
- Dashboard mínimo (consulta SQL o query de analytics) para medir efectividad del sistema

Formato de entrega:
Código comentado, arquitectura en ASCII/texto estructurado, y lista de dependencias npm/pip necesarias.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Implementar automatización inteligente de pipeline de ventas B2B en CRM',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseño de materiales de ventas B2B con IA generativa para equipos comerciales',
                'description'       => 'Crea propuestas visuales, one-pagers y presentaciones comerciales B2B de alta calidad usando herramientas de IA generativa para acelerar el proceso de ventas.',
                'prompt_content'    => <<<'EOT'
Eres un diseñador de comunicación comercial especializado en materiales de ventas B2B. Tu tarea es ayudarme a crear un sistema de producción de materiales comerciales usando IA generativa para que el equipo de diseño pueda escalar su output sin sacrificar calidad.

Contexto del proyecto:
El equipo comercial de nuestra empresa B2B necesita materiales personalizados para cada cuenta clave: propuestas visuales, one-pagers sectoriales, decks de presentación y battle cards. Actualmente tarda 3-5 días en producir cada set. Quiero reducirlo a menos de 4 horas usando IA.

Instrucción principal:
Guíame en la creación de un sistema de producción de materiales B2B con IA, desde la arquitectura de contenidos hasta el flujo de trabajo con herramientas específicas.

Tarea 1 — Sistema de arquitectura de mensajes:
Crea una estructura de contenido (content framework) para los materiales B2B que incluya:
- Jerarquía de mensajes: propuesta de valor macro → beneficios → pruebas → CTA
- Variables de personalización por sector (fintech, retail, manufactura, salud)
- Tono de voz por nivel de decisor (C-level vs. manager técnico)
- Biblioteca de titulares reutilizables por pain point

Tarea 2 — Prompts para generación de one-pagers:
Escribe 3 prompts especializados para generar el copy completo de un one-pager B2B:
- One-pager de producto/servicio (orientado a beneficios)
- One-pager de caso de éxito (storytelling con datos)
- One-pager de comparativa (nosotros vs. alternativas)

Cada prompt debe incluir instrucciones de formato, longitud de cada sección y ejemplos del tono esperado.

Tarea 3 — Flujo de trabajo con IA generativa:
Diseña el flujo completo paso a paso para producir una propuesta visual en menos de 4 horas:
- Paso 1: Briefing con IA (preguntas clave que la IA debe hacer al comercial)
- Paso 2: Generación del contenido escrito con Claude/ChatGPT
- Paso 3: Generación de imágenes conceptuales con Midjourney o Dall-E
- Paso 4: Ensamblaje en Figma o Canva con plantilla base
- Paso 5: Revisión y personalización final

Tarea 4 — Sistema de plantillas modulares:
Define la estructura de un sistema de plantillas modulares en Figma para materiales B2B:
- Componentes base: portada, sección de problema, solución, prueba social, pricing, CTA
- Variables de personalización: logo cliente, colores de marca, sector, nombre del decisor
- Guía de uso rápido para el equipo comercial (no diseñadores)

Tarea 5 — Control de calidad con IA:
Crea un checklist de revisión que un modelo de IA pueda ejecutar sobre cualquier material generado para verificar:
- Consistencia del mensaje con el ICP objetivo
- Presencia de todos los elementos obligatorios
- Calidad del copy (claridad, brevedad, orientación al beneficio)
- Coherencia visual (sugerencias de texto, no puede ver imágenes)

Formato de entrega:
Documentación estructurada con ejemplos concretos, prompts listos para copiar y pegar, y el flujo de trabajo en formato checklist.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Producir materiales de ventas B2B de alta calidad en menos tiempo usando IA',
                'vote_score'        => 34,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Prospección B2B inteligente con IA: de lista fría a reunión agendada',
                'description'       => 'Domina el proceso completo de prospección B2B usando herramientas de IA para investigar cuentas, personalizar mensajes y aumentar drásticamente tu tasa de respuesta.',
                'prompt_content'    => <<<'EOT'
Eres un experto en ventas B2B con más de 10 años de experiencia en desarrollo de negocio y prospección outbound. Tu tarea es actuar como mi coach de ventas y ayudarme a transformar mi proceso de prospección usando herramientas de IA.

Contexto:
Soy SDR (Sales Development Representative) en una empresa B2B. Mi cuota mensual es generar 15 reuniones calificadas. Actualmente convierto el 2% de mis contactos en reuniones. Quiero usar IA para aumentar esa tasa al 6-8% en los próximos 60 días.

Instrucción principal:
Actúa como mi mentor de ventas y guíame a través de un proceso sistemático de mejora de mi prospección usando IA. Sé concreto, práctico y orientado a resultados.

Fase 1 — Definición del ICP con IA:
Ayúdame a refinar mi Ideal Customer Profile usando un proceso estructurado:
- Lista de preguntas para identificar mis 5 mejores clientes actuales y qué tienen en común
- Prompt para analizar esos perfiles y extraer el ICP más rentable
- Señales de compra que debo buscar en LinkedIn y noticias de empresa
- Red flags que indican que una cuenta no es buen fit

Fase 2 — Investigación de cuentas con IA:
Crea un proceso de investigación rápida (máximo 15 minutos por cuenta) usando IA:
- Prompt para extraer insights clave de la web de una empresa
- Prompt para analizar el perfil de LinkedIn de un decisor y encontrar ganchos personales
- Fuentes de trigger events: expansiones, contrataciones, financiación, premios, cambios directivos
- Plantilla de "cuenta de una página" para organizar la información antes de contactar

Fase 3 — Personalización en escala:
Diseña un sistema para personalizar mensajes de forma eficiente:
- Prompt para generar una primera línea ultra-personalizada basada en un trigger event
- Cómo usar variables dinámicas en secuencias de email para simular personalización manual
- Ejemplos de 5 primeras líneas personalizadas para 5 triggers distintos

Fase 4 — Gestión de objeciones con IA:
Prepárame para las 7 objeciones más comunes en prospección B2B:
- "No tenemos presupuesto"
- "Ya trabajamos con [competidor]"
- "Envíame información por email"
- "No es el momento"
- "¿Quién eres?"
- "No soy yo quien toma esta decisión"
- "Ya lo intentamos y no funcionó"

Para cada objeción: respuesta corta de menos de 30 palabras + respuesta extendida de seguimiento.

Fase 5 — Métricas y mejora continua:
Define el sistema de seguimiento que debo implementar:
- KPIs semanales que debo medir (más allá de llamadas y emails enviados)
- Cómo usar IA para analizar mis secuencias y detectar qué mensajes funcionan mejor
- Proceso de revisión mensual del ICP basado en datos reales de conversión

Objetivo final:
Al terminar esta sesión, quiero tener un playbook completo de prospección B2B con IA listo para implementar esta semana.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Mejorar la tasa de conversión en prospección B2B outbound con IA como coach',
                'vote_score'        => 52,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Análisis de win/loss B2B con IA para informar la estrategia de producto',
                'description'       => 'Usa IA para analizar por qué se ganan y pierden deals B2B, extraer insights accionables y priorizar el roadmap de producto basándose en datos reales de ventas.',
                'prompt_content'    => <<<'EOT'
Eres un analista de producto especializado en inteligencia competitiva y análisis de win/loss para empresas B2B. Tu tarea es ayudarme a diseñar e implementar un sistema de análisis de win/loss potenciado por IA que conecte los aprendizajes de ventas con las decisiones de producto.

Contexto:
Soy Product Manager en una empresa SaaS B2B. El equipo de ventas cierra entre 20 y 30 deals al mes. No tenemos ningún proceso sistemático para aprender de los deals ganados y perdidos. Quiero construir ese sistema usando IA para informar el roadmap.

Instrucción principal:
Guíame en la construcción de un sistema completo de win/loss analysis con IA, desde la recopilación de datos hasta la integración con el proceso de roadmap.

Módulo 1 — Diseño del proceso de entrevistas:
Crea un protocolo de entrevistas de win/loss para que los Account Executives lo ejecuten después de cada deal cerrado:
- Guión de entrevista para deals ganados (10-15 minutos)
- Guión de entrevista para deals perdidos (10-15 minutos)
- Guión de entrevista con clientes que eligieron a un competidor
- Preguntas prohibidas que sesgan las respuestas

Módulo 2 — Análisis con IA de transcripciones:
Escribe un prompt de sistema para analizar transcripciones de entrevistas win/loss y extraer automáticamente:
- Razones principales de la decisión (máximo 3, ordenadas por peso)
- Menciones de competidores y contexto de la comparación
- Features que fueron decisivas (para bien o para mal)
- Objeciones de precio y percepción de valor
- Segmento/perfil del comprador y sus criterios de selección
- Citas textuales más relevantes para ilustrar cada insight

Módulo 3 — Síntesis mensual de patrones:
Diseña el prompt para un análisis agregado mensual que procese todas las entrevistas del mes y genere:
- Top 5 razones de pérdida ordenadas por frecuencia e impacto en ARR
- Top 5 razones de victoria y su fortaleza como diferenciadores
- Tendencias emergentes vs. el mes anterior
- Amenazas competitivas detectadas
- Oportunidades de producto identificadas en las entrevistas

Módulo 4 — Integración con el roadmap:
Crea un framework para traducir los insights de win/loss en decisiones de producto:
- Matriz de priorización: frecuencia del problema × impacto en ARR × esfuerzo de desarrollo
- Plantilla de "business case" para proponer una feature basada en datos de win/loss
- Proceso para presentar los hallazgos al equipo de producto en la planning mensual
- Criterios para escalar un insight al C-level vs. gestionarlo a nivel de equipo

Módulo 5 — Dashboard de inteligencia competitiva:
Define el dashboard mínimo que debería existir para que el equipo de producto consulte el estado de la inteligencia competitiva:
- Métricas clave a mostrar (win rate por segmento, por competidor, por feature)
- Frecuencia de actualización recomendada
- Alertas automáticas que debe generar el sistema

Formato de entrega:
Documentación completa con guiones, prompts y frameworks listos para implementar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Conectar insights de ventas B2B con decisiones de roadmap de producto usando IA',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Reclutamiento de talento comercial B2B con criba y scoring asistido por IA',
                'description'       => 'Optimiza el proceso de selección de SDRs, Account Executives y managers de ventas B2B usando IA para cribar candidatos, diseñar entrevistas y predecir el fit cultural.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en talent acquisition con experiencia en reclutamiento de perfiles comerciales B2B de alto rendimiento. Tu tarea es ayudarme a rediseñar el proceso de selección de talento comercial usando herramientas de IA para reducir el tiempo de contratación y mejorar la calidad de las contrataciones.

Contexto:
Soy HR Business Partner en una empresa SaaS B2B en crecimiento. Necesitamos contratar 8 SDRs y 3 Account Executives en los próximos 3 meses. El proceso actual es lento (6 semanas de media) y tenemos una tasa de rotación del 40% en el primer año.

Instrucción principal:
Ayúdame a construir un proceso de selección de talento comercial B2B más rápido y efectivo usando IA en cada etapa.

Etapa 1 — Definición del perfil ideal:
Ayúdame a crear el perfil de candidato ideal (scorecard) para cada rol:
- SDR (Sales Development Representative): competencias, experiencias previas, rasgos de personalidad
- Account Executive B2B: perfil consultivo vs. perfil hunter
- Sales Manager: liderazgo de equipos outbound

Para cada rol, incluye: competencias obligatorias (must-have), deseables (nice-to-have) y señales de alarma (red flags).

Etapa 2 — Criba de CVs con IA:
Escribe el prompt para analizar un CV de candidato comercial B2B y generar:
- Puntuación de 0 a 100 con justificación
- Fortalezas del candidato respecto al perfil buscado
- Áreas de riesgo o gaps importantes
- Preguntas específicas que debo hacer en la entrevista basadas en su historial
- Recomendación: avanzar / revisar con más contexto / descartar

Etapa 3 — Proceso de entrevistas estructuradas:
Diseña un proceso de entrevistas en 3 fases para AEs:
- Fase 1 (30 min, HR): Motivación, cultura, expectativas salariales
- Fase 2 (45 min, Sales Manager): Role play de prospección en vivo + preguntas de situación (STAR)
- Fase 3 (30 min, CEO o VP Sales): Visión, ambición y encaje estratégico

Para cada fase: preguntas concretas, rúbrica de evaluación y red flags a observar.

Etapa 4 — Role play evaluado con IA:
Diseña un ejercicio de role play de prospección B2B que se pueda evaluar con IA:
- Escenario del role play (empresa ficticia, producto, perfil del prospecto)
- Criterios de evaluación: apertura, manejo de objeciones, escucha, cierre de próxima acción
- Prompt para que la IA evalúe la transcripción del role play y genere un feedback estructurado

Etapa 5 — Mejora de retención a 12 meses:
Con base en los patrones de rotación habituales en ventas B2B, ayúdame a identificar:
- Las 5 causas más comunes de abandono en el primer año
- Preguntas de entrevista diseñadas para detectar estas causas antes de contratar
- Plan de onboarding de 90 días que reduce el riesgo de rotación temprana

Formato de entrega:
Documentación lista para implementar: scorecards, prompts de criba, guiones de entrevista y rúbricas de evaluación.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Reducir tiempo de contratación y mejorar calidad de perfiles comerciales B2B con IA',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Forecasting de pipeline B2B con IA para proyecciones de ingresos más precisas',
                'description'       => 'Aplica modelos de IA para analizar el pipeline de ventas B2B, detectar deals en riesgo y generar proyecciones de ingresos más fiables que el forecast manual del equipo comercial.',
                'prompt_content'    => <<<'EOT'
Eres un analista financiero especializado en revenue operations y forecasting de ventas B2B. Tu tarea es ayudarme a construir un modelo de forecasting de pipeline más preciso usando inteligencia artificial, que complemente el forecast subjetivo del equipo comercial.

Contexto:
Soy el CFO de una empresa SaaS B2B con un ARR de 2M€. El equipo de ventas da forecasts mensuales con una varianza del ±35%, lo que complica enormemente la planificación financiera, la gestión de caja y las decisiones de contratación.

Instrucción principal:
Guíame en el diseño de un sistema de forecasting de pipeline B2B basado en IA que reduzca la varianza del forecast al ±15% en 90 días.

Componente 1 — Diagnóstico del pipeline actual:
Ayúdame a auditar la calidad de los datos del pipeline actual:
- Lista de campos del CRM que deben estar completos para un forecast fiable
- Señales de datos de mala calidad que invalidan el forecast
- Preguntas de auditoría para el equipo de ventas sobre la calidad de sus datos
- Plan de limpieza de datos en 2 semanas

Componente 2 — Variables predictivas de cierre:
Identifica y explica las variables más predictivas del cierre de un deal B2B:
- Variables de comportamiento (velocidad de avance, número de stakeholders, engagement)
- Variables del deal (tamaño, descuento, días en etapa, competidores)
- Variables del cliente (sector, tamaño, madurez tecnológica)
- Cómo ponderar cada variable según el historial de cierre de mi empresa

Componente 3 — Modelo de scoring con IA:
Diseña un prompt de sistema para que un modelo de IA evalúe cada oportunidad del pipeline y genere:
- Probabilidad de cierre ajustada (diferente a la del CRM que pone el comercial)
- ARR esperado ponderado por probabilidad
- Clasificación de riesgo: verde / amarillo / rojo
- Factores que están aumentando o reduciendo la probabilidad
- Acción recomendada para el manager de ventas

Componente 4 — Modelo de forecasting mensual:
Crea el framework para construir 3 escenarios de forecast mensual:
- Escenario conservador: solo deals con probabilidad IA > 70%
- Escenario base: deals ajustados por probabilidad IA ponderada
- Escenario optimista: incluyendo upside identificado por la IA
- Cómo comparar el forecast IA con el forecast del equipo y resolver discrepancias

Componente 5 — Alertas de riesgo de pipeline:
Define el sistema de alertas automáticas para deals en riesgo:
- Deal sin actividad en más de X días según la etapa
- Deal con múltiples pushes de fecha de cierre
- Deal donde el champion ha abandonado la empresa
- Deal donde el competidor acaba de lanzar una feature relevante
- Formato del reporte semanal de riesgo para el CEO y el CFO

Formato de entrega:
Framework completo con criterios de scoring, plantillas de reporte y prompts listos para implementar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Mejorar la precisión del forecast de ventas B2B y reducir varianza financiera con IA',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Revisión y negociación de contratos B2B con asistencia de IA legal',
                'description'       => 'Usa IA para revisar contratos B2B, identificar cláusulas de riesgo, proponer alternativas y preparar la negociación contractual con clientes y proveedores.',
                'prompt_content'    => <<<'EOT'
Eres un abogado especializado en derecho mercantil y contratos B2B con experiencia en negociación de acuerdos comerciales complejos. Tu tarea es ayudarme a usar IA como herramienta de soporte en la revisión y negociación de contratos B2B, manteniendo siempre la responsabilidad profesional del abogado.

Importante: la IA es un soporte para el análisis preliminar. El criterio jurídico final corresponde siempre al abogado responsable.

Contexto:
Soy abogado en el departamento legal de una empresa SaaS B2B. Recibimos entre 10 y 15 contratos de clientes y proveedores al mes para revisar. El volumen hace que la revisión exhaustiva tome mucho tiempo. Quiero usar IA para acelerar la primera lectura y el análisis de riesgos.

Instrucción principal:
Guíame en el uso de IA como herramienta de análisis preliminar de contratos B2B, diseñando prompts especializados y flujos de trabajo para distintos tipos de contrato.

Área 1 — Revisión de contratos de cliente (MSA/SaaS):
Crea el prompt de análisis para revisar un Master Service Agreement o contrato SaaS B2B y extraer:
- Cláusulas de limitación de responsabilidad: ¿son recíprocas o asimétri­cas?
- Cláusulas de indemnización: ¿qué supuestos cubren y cuáles excluyen?
- SLAs y penalizaciones: ¿son asumibles operativamente?
- Protección de datos (RGPD): ¿hay DPA correctamente incorporado?
- Propiedad intelectual: ¿quién es dueño de los datos procesados?
- Cláusulas de rescisión: ¿qué causa baja y con qué preaviso?
- Ley aplicable y fuero: ¿es favorable o neutro?

Área 2 — Revisión de contratos de proveedor:
Crea el prompt para analizar contratos de proveedores tecnológicos (AWS, subcontratistas, APIs) e identificar:
- Riesgos de dependencia tecnológica (lock-in)
- Cláusulas de cambio de precio unilateral
- Garantías de continuidad del servicio y SLAs del proveedor
- Tratamiento de brechas de seguridad y notificaciones

Área 3 — Comparativa de versiones en negociación:
Diseña el prompt para comparar dos versiones de un contrato (la propuesta original vs. la contrapropuesta del cliente) y generar:
- Lista de cambios relevantes en términos jurídicos
- Evaluación del impacto de cada cambio: favorable / neutro / desfavorable para nuestra empresa
- Sugerencias de contraofertas para los puntos más desfavorables
- Resumen ejecutivo de 1 página para el CEO antes de la firma

Área 4 — Preparación de la negociación:
Crea un prompt para preparar la estrategia de negociación de un contrato B2B:
- Identificar nuestros "must-have" no negociables
- Identificar puntos de concesión aceptables
- Anticipar los argumentos de la otra parte para cada cláusula conflictiva
- Redactar las cláusulas alternativas que propondremos

Área 5 — Base de datos de cláusulas estándar:
Diseña el prompt para que la IA me ayude a construir una biblioteca de cláusulas estándar para contratos B2B:
- Cláusula de limitación de responsabilidad equilibrada
- Cláusula de confidencialidad recíproca
- Cláusula de propiedad intelectual para SaaS
- Cláusula de protección de datos con DPA integrado

Formato de entrega:
Prompts listos para usar, plantillas de análisis y un checklist de revisión contractual.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Acelerar la revisión y negociación de contratos B2B con IA como soporte legal',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Estrategia de upsell y cross-sell B2B con IA en customer success',
                'description'       => 'Diseña un sistema de detección de oportunidades de expansión en cuentas B2B existentes usando IA para analizar uso del producto, señales de compra y momentos óptimos de conversación.',
                'prompt_content'    => <<<'EOT'
Eres un experto en customer success B2B especializado en estrategias de expansión de cuentas y revenue de retención. Tu tarea es ayudarme a construir un sistema de upsell y cross-sell impulsado por IA que permita al equipo de CSM identificar y ejecutar oportunidades de expansión de forma sistemática.

Contexto:
Soy Director de Customer Success en una empresa SaaS B2B con 120 cuentas activas y un ARR de 3M€. El Net Revenue Retention (NRR) actual es del 105%. El objetivo de la compañía es llevar el NRR al 120% en 12 meses. Necesito un sistema proactivo, no reactivo, de expansión de cuentas.

Instrucción principal:
Guíame en el diseño de un sistema completo de detección y ejecución de oportunidades de upsell y cross-sell con IA, desde las señales hasta el cierre.

Módulo 1 — Señales de expansión con IA:
Define el modelo de señales que el sistema de IA debe monitorizar para detectar oportunidades:
- Señales de uso del producto: features más usadas, volumen de actividad, usuarios activos
- Señales de negocio del cliente: contrataciones, expansión geográfica, rondas de financiación
- Señales de conversación: tickets de soporte que revelan necesidades no cubiertas, NPS alto
- Señales de timing: renovación próxima, QBR agendado, cambio de champion
- Cómo ponderar y combinar estas señales en un score de expansión

Módulo 2 — Scoring de cuentas para expansión:
Escribe el prompt de IA para analizar el perfil de una cuenta y generar:
- Puntuación de potencial de expansión (0-100)
- Tipo de oportunidad más probable: upsell de plan, upsell de usuarios, cross-sell de producto
- ARR adicional estimado si se ejecuta la oportunidad
- Momento óptimo para iniciar la conversación (basado en señales)
- Argumentos personalizados para la conversación de expansión con este cliente

Módulo 3 — Playbook de conversación de expansión:
Diseña el playbook de conversación para que los CSMs ejecuten el upsell/cross-sell de forma consultiva:
- Cómo abrir la conversación sin sonar a "venta"
- Preguntas de descubrimiento de nuevas necesidades
- Cómo conectar el upsell con el ROI que ya está obteniendo el cliente
- Cómo manejar la objeción de presupuesto en renovación
- Cómo involucrar al equipo de ventas cuando la oportunidad supera el rol del CSM

Módulo 4 — QBR como motor de expansión:
Crea la estructura de un QBR (Quarterly Business Review) diseñado para generar oportunidades de expansión:
- Agenda de 60 minutos orientada al valor y a los próximos objetivos del cliente
- Preguntas estratégicas que abren la puerta al upsell de forma natural
- Prompt de IA para preparar automáticamente el QBR usando datos de uso del cliente
- Cómo cerrar el QBR con un "next step" de expansión acordado

Módulo 5 — Métricas de expansión y reporting:
Define el sistema de métricas para gestionar el programa de expansión:
- KPIs del equipo CSM más allá del NRR (pipeline de expansión, conversion rate, tiempo al cierre)
- Dashboard mínimo para el Director de CS (qué ver en 5 minutos cada lunes)
- Revisión mensual del modelo de señales: cómo mejorarlo con los datos reales de cierre

Formato de entrega:
Playbooks, prompts, scorecards y estructura de reporting listos para implementar.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Aumentar el NRR en cuentas B2B con un sistema de expansión proactivo impulsado por IA',
                'vote_score'        => 47,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Propuestas comerciales B2B freelance de alto impacto asistidas por IA',
                'description'       => 'Crea propuestas comerciales B2B que ganen proyectos usando IA para personalizar el contenido, estructurar el argumento de valor y diferenciarte de otros freelancers.',
                'prompt_content'    => <<<'EOT'
Eres un consultor freelance B2B con alta tasa de cierre que sabe escribir propuestas comerciales que convierten. Tu tarea es ayudarme a crear un sistema para generar propuestas B2B de alta calidad y personalizadas usando IA, que aumente mi tasa de conversión de propuestas enviadas a proyectos ganados.

Contexto:
Soy freelancer especializado en [marketing digital / desarrollo web / diseño / consultoría — elige el tuyo]. Envío entre 4 y 6 propuestas al mes a clientes B2B. Mi tasa de conversión actual es del 20%. Quiero llegar al 40% sin aumentar el número de propuestas que envío.

Instrucción principal:
Guíame en la construcción de un sistema de propuestas B2B de alto impacto usando IA, desde la investigación previa hasta el seguimiento post-envío.

Fase 1 — Investigación pre-propuesta con IA:
Diseña el proceso de investigación que debo completar antes de escribir cualquier propuesta:
- Prompt para analizar la web, LinkedIn y noticias del cliente potencial
- Preguntas que debo hacer en la llamada de discovery para revelar el dolor real
- Cómo identificar el criterio de decisión real del cliente (precio, velocidad, reputación, metodología)
- Cómo detectar si el cliente tiene presupuesto real o solo está comparando precios

Fase 2 — Estructura de propuesta ganadora:
Define la estructura óptima de una propuesta B2B para freelancer:
- Portada: cómo personalizarla sin perder tiempo
- Resumen ejecutivo: los 3 párrafos más importantes de la propuesta
- Diagnóstico del problema del cliente: demostrar que entiendes su situación mejor que ellos
- Solución propuesta: metodología, entregables, timeline claro
- Inversión: cómo presentar el precio sin que sea lo primero que vean
- Por qué yo: diferenciación sin sonar arrogante
- Próximos pasos: CTA claro y de baja fricción

Fase 3 — Prompts para generar cada sección:
Escribe un prompt especializado para que la IA genere cada sección de la propuesta de forma personalizada. Para cada sección, incluye:
- El prompt completo con instrucciones de tono y longitud
- Las variables que debo rellenar antes de ejecutarlo (nombre del cliente, sector, problema, etc.)
- Ejemplo de output esperado (máximo 3-4 líneas de muestra)

Fase 4 — Presentación del precio:
Esta es la sección más crítica. Ayúdame a:
- Cómo estructurar 3 opciones de precio (buena/mejor/ideal) para anclar el valor
- Cómo justificar mi tarifa con el ROI del cliente
- Cómo hablar de precio en la llamada de seguimiento sin entrar en guerra de precios
- Prompt de IA para generar la justificación de precio basada en el valor esperado del proyecto

Fase 5 — Seguimiento post-propuesta:
Diseña la secuencia de seguimiento para después de enviar la propuesta:
- Email de seguimiento a las 48 horas (tono y contenido)
- Llamada de seguimiento a los 5 días (guión de 3 minutos)
- Mensaje final si no hay respuesta (cierre elegante que deja la puerta abierta)
- Cómo usar la IA para personalizar cada seguimiento según el comportamiento del cliente (si abrió el email, si vio la propuesta, etc.)

Formato de entrega:
Sistema completo con plantillas, prompts listos para copiar y estructura de propuesta descargable.
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'beginner',
                'estimated_minutes' => 35,
                'use_case'          => 'Duplicar la tasa de conversión de propuestas B2B freelance usando IA para personalizar y estructurar',
                'vote_score'        => 49,
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
