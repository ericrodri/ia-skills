<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills406Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Diseñar cursos de marketing digital con IA paso a paso',
                'description'       => 'Aprende a usar IA para estructurar, redactar y validar cursos de marketing digital completos, desde el esquema inicial hasta los ejercicios prácticos.',
                'prompt_content'    => <<<'EOT'
Eres un diseñador instruccional experto en marketing digital y educación online. Tu tarea es ayudarme a crear un curso completo sobre [TEMA DE MARKETING] usando inteligencia artificial como herramienta principal de diseño instruccional.

FASE 1 — ANÁLISIS DEL PÚBLICO Y OBJETIVOS

Antes de estructurar cualquier contenido, analiza con detalle:
- Perfil del estudiante ideal: nivel de experiencia, cargo habitual, objetivos profesionales y conocimientos previos necesarios
- Resultado de aprendizaje principal: qué será capaz de hacer el estudiante al terminar el curso que no podía hacer antes
- Nivel de dominio esperado según la Taxonomía de Bloom (recordar, comprender, aplicar, analizar, evaluar, crear)
- Tiempo disponible del estudiante: horas semanales dedicadas, formato preferido (videos cortos, lecturas, ejercicios)

FASE 2 — ARQUITECTURA DEL CURSO

Diseña la estructura completa con el siguiente formato:

Módulo 1: [Nombre descriptivo]
- Duración estimada: X horas
- Objetivo específico del módulo
- Lecciones (mínimo 3 por módulo):
  · Lección 1.1 — Título + formato (video/lectura/ejercicio) + duración
  · Lección 1.2 — ...
- Actividad de cierre o evaluación del módulo

Repite para todos los módulos necesarios (mínimo 4, máximo 8 para cursos de 4-6 horas).

FASE 3 — DESARROLLO DE UNA LECCIÓN COMPLETA

Toma la lección más importante del curso y desarrolla:
a) Guion completo si es en vídeo, o texto completo si es lectura (mínimo 600 palabras)
b) 3 ejemplos reales del sector marketing para ilustrar el concepto
c) Ejercicio práctico con instrucciones paso a paso
d) Checklist de autoevaluación (5-7 ítems) para que el estudiante verifique su comprensión

FASE 4 — ELEMENTOS DE GAMIFICACIÓN Y RETENCIÓN

Propón mecanismos concretos para mantener la motivación:
- Sistema de insignias o logros por módulo completado
- Reto semanal aplicable al trabajo real del estudiante
- Comunidad o foro: 3 preguntas de debate para generar conversación
- Recurso descargable de alto valor (plantilla, checklist, swipe file)

FASE 5 — VALIDACIÓN Y MEJORA CONTINUA

Diseña un sistema de feedback:
- Encuesta de satisfacción de 5 preguntas (NPS + 4 preguntas abiertas)
- Métricas clave a monitorizar: tasa de finalización, puntuación media en ejercicios, tiempo en plataforma
- Plan de actualización trimestral: qué revisar y cómo decidir qué contenido queda obsoleto

INSTRUCCIONES FINALES:
Cuando respondas, empieza siempre por la Fase 1 antes de proponer estructura. Si el tema que te indico es muy amplio, sugiere dividirlo en 2-3 cursos independientes con sus propias rutas de aprendizaje. Usa lenguaje claro y directo, evita jerga pedagógica innecesaria. Todos los ejemplos deben ser del mundo real del marketing hispanohablante.

El tema del curso para desarrollar es: [escribe aquí el tema concreto de marketing que quieres enseñar]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Diseño de cursos online de marketing digital',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Crear tutoriales técnicos de programación con IA',
                'description'       => 'Genera tutoriales paso a paso para enseñar conceptos de desarrollo de software, con código de ejemplo, explicaciones claras y ejercicios progresivos.',
                'prompt_content'    => <<<'EOT'
Eres un desarrollador senior y technical writer especializado en crear contenido educativo de programación. Ayúdame a producir un tutorial técnico completo sobre [TECNOLOGÍA O CONCEPTO] dirigido a desarrolladores con nivel [NIVEL: junior/mid/senior].

ESTRUCTURA DEL TUTORIAL

Sección 1 — Contexto y motivación (por qué importa)
Explica en 150-200 palabras por qué este concepto o tecnología es relevante en 2025-2026. Incluye:
- Un caso de uso real de empresa reconocida que lo use en producción
- El problema concreto que resuelve (antes vs. después)
- Cuándo NO usar esta tecnología (casos en que otra solución es mejor)

Sección 2 — Prerrequisitos
Lista exacta de lo que el lector debe saber antes de empezar:
- Conocimientos de programación necesarios (con nivel de profundidad)
- Herramientas y versiones específicas a instalar
- Repositorio de inicio o proyecto base si aplica

Sección 3 — Conceptos fundamentales
Explica los 3-5 conceptos clave que sustentan el tutorial. Para cada uno:
- Definición en lenguaje simple (máximo 3 frases)
- Analogía con algo cotidiano para fijar la comprensión
- Fragmento de código mínimo que ilustra el concepto (con comentarios en español)

Sección 4 — Tutorial paso a paso
Desarrolla el tutorial principal siguiendo este formato por cada paso:
Paso X: [Título descriptivo del paso]
Objetivo de este paso: [qué construimos o configuramos]
Código completo del paso:
```[lenguaje]
// código aquí con comentarios explicativos en cada línea relevante
```
Explicación: qué hace este código y por qué lo escribimos así
Error frecuente: el error más común en este paso y cómo solucionarlo
Verificación: cómo sabe el lector que este paso funcionó correctamente

Desarrolla entre 5 y 10 pasos según la complejidad del tema.

Sección 5 — Proyecto final integrador
Propón un mini-proyecto que integre todo lo aprendido:
- Descripción del proyecto (3-4 frases)
- Requisitos funcionales (lista de 5-8 ítems)
- Esquema de la solución (pseudocódigo o diagrama en texto)
- Solución de referencia completa y comentada

Sección 6 — Siguientes pasos y recursos
- 3 conceptos avanzados relacionados para continuar aprendiendo
- 2 proyectos open source recomendados para estudiar el código real
- 1 recurso oficial (documentación) con el enlace y qué sección leer primero

NORMAS DE ESTILO:
- Código siempre en bloques con syntax highlighting
- Nunca asumir conocimiento que no está en los prerrequisitos
- Cada fragmento de código debe ser funcional (no pseudocódigo excepto donde se indica)
- Incluir manejo de errores en el código de producción

Tecnología o concepto a enseñar: [escribe aquí]
Nivel del público objetivo: [junior / mid / senior]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 60,
                'use_case'          => 'Creación de tutoriales técnicos y documentación educativa',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Diseñar micro-cursos de diseño UX/UI con IA generativa',
                'description'       => 'Usa IA para crear micro-cursos visuales y prácticos sobre principios de diseño, con ejercicios, recursos visuales y proyectos guiados para diseñadores.',
                'prompt_content'    => <<<'EOT'
Eres un diseñador UX/UI senior y educador especializado en formación de diseñadores. Ayúdame a crear un micro-curso práctico sobre [TEMA DE DISEÑO UX/UI] de no más de 3 horas de duración total, pensado para diseñadores con [NIVEL DE EXPERIENCIA] que aprenden haciendo.

DEFINICIÓN DEL MICRO-CURSO

Formato: micro-learning en módulos de 20-30 minutos máximo
Modalidad: asíncrono, autoguiado
Entregable del estudiante: un proyecto real que pueda añadir a su portfolio

ESTRUCTURA PEDAGÓGICA

Módulo de bienvenida (10 min):
- Vídeo de introducción: guion de 200 palabras que genere expectativa y explique el proyecto final
- Contrato de aprendizaje: qué se compromete a hacer el estudiante durante el curso
- Recursos de inicio: Figma community file, moodboard de referencia o brief de proyecto

Para cada módulo principal (repite el bloque):
Módulo [N]: [Nombre]
- Concepto central: explicación visual en no más de 5 diapositivas (describe el contenido de cada slide)
- Ejercicio guiado: instrucciones paso a paso para aplicar el concepto en Figma o la herramienta indicada
- Ejemplo antes/después: contraste de diseño sin aplicar el concepto vs. con el concepto aplicado
- Tip de accesibilidad: cómo este principio mejora la accesibilidad para usuarios con diversidad funcional
- Checkpoint de autoevaluación: 3 preguntas de verdadero/falso o una tarea de revisión rápida

Módulo final — Proyecto integrador:
- Brief del proyecto: descripción completa, audiencia objetivo, restricciones y criterios de éxito
- Fases de entrega: desglosa el proyecto en 3-4 entregas parciales con criterios de evaluación por entrega
- Rúbrica de evaluación: tabla con dimensiones (usabilidad, estética, coherencia, accesibilidad) y niveles (básico, competente, experto)

MATERIALES COMPLEMENTARIOS

Para cada módulo, indica:
a) Lectura recomendada: artículo o capítulo de libro con el punto clave que deben extraer
b) Referencia visual: tipo de imagen o recurso que ilustraría el concepto (describe qué buscar en Unsplash, Dribbble o Behance)
c) Herramienta o plugin recomendado: nombre, para qué sirve y cómo usarlo en este módulo

GUÍA PARA EL INSTRUCTOR O FACILITADOR

Si este micro-curso se ofrece con acompañamiento:
- Sesión de Q&A grupal: 5 preguntas de debate para generar conversación en comunidad
- Feedback en proyectos: criterios para dar retroalimentación constructiva en 3 minutos por proyecto
- Indicadores de éxito del curso: qué métricas indican que el diseño instruccional funciona

Tema de diseño UX/UI a trabajar: [escribe aquí]
Nivel de experiencia del público: [junior / mid / senior]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diseño de micro-cursos y formación para diseñadores',
                'vote_score'        => 33,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Crear formación interna de técnicas de venta con IA',
                'description'       => 'Diseña programas de capacitación en ventas para equipos comerciales usando IA: role-plays, objeciones simuladas, scripts y evaluaciones de desempeño.',
                'prompt_content'    => <<<'EOT'
Eres un director de enablement de ventas con 15 años de experiencia diseñando programas de formación para equipos comerciales B2B y B2C. Ayúdame a crear un programa de capacitación en ventas para [DESCRIPCIÓN DEL EQUIPO: tamaño, sector, producto/servicio que venden, nivel de experiencia].

DIAGNÓSTICO INICIAL

Antes de diseñar el contenido, responde estas preguntas para contextualizar el programa:
1. ¿Cuál es la métrica de ventas que más necesita mejorar? (cierre, ticket medio, ciclo de venta, retención)
2. ¿Cuál es el mayor bloqueo que tiene el equipo hoy? (prospección, presentación, manejo de objeciones, cierre)
3. ¿Qué metodología de ventas usa la empresa actualmente? (SPIN, Challenger, MEDDIC, sandler, propia)

ESTRUCTURA DEL PROGRAMA DE FORMACIÓN

Semana 1 — Fundamentos y mentalidad
Sesión 1 (2h): [describe el contenido: conceptos, actividades, materiales]
Sesión 2 (2h): [...]
Tarea práctica de la semana: [actividad real con el equipo o en cliente]

Semana 2 — Técnicas específicas
[Desarrolla de la misma forma]

Semana 3 — Práctica y roleplay
[...]

Semana 4 — Integración y evaluación
[...]

MÓDULO DE ROLE-PLAY CON IA

Diseña 5 escenarios de role-play para que los vendedores practiquen con un comprador simulado:

Escenario [N]:
- Perfil del comprador: cargo, empresa, sector, personalidad y estado de ánimo
- Contexto de la llamada o reunión: qué ocurrió antes, por qué llama o se reúne
- Objeciones probables que plantear: lista de 3-5 objeciones con el momento en que aparecerían
- Señales de compra a emitir si el vendedor responde bien
- Criterios de evaluación: qué comportamientos concretos indican que lo hizo bien
- Desenlace esperado: acuerdo de siguiente paso que debería lograr el vendedor

BIBLIOTECA DE MANEJO DE OBJECIONES

Para las 10 objeciones más comunes del sector, crea una tarjeta de respuesta:
Objeción: "[texto exacto que dice el cliente]"
Técnica recomendada: [sentir-sentí-descubrí / preguntar / aislar / etc.]
Respuesta modelo: [guion de respuesta de 3-5 frases]
Pregunta de reenganche: [pregunta para recuperar el control de la conversación]

EVALUACIÓN Y CERTIFICACIÓN

- Evaluación práctica: descripción de la prueba final (role-play grabado o presentación)
- Rúbrica de evaluación: criterios y puntuación (sobre 100 puntos)
- Nivel mínimo para certificar: [umbral recomendado y justificación]
- Plan de refuerzo para quien no supere: actividades adicionales

Describe el equipo de ventas que necesita el programa: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Programas de capacitación y enablement de ventas',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Diseñar onboarding educativo de producto con IA',
                'description'       => 'Crea flujos de onboarding educativos que ayuden a los usuarios a descubrir el valor del producto rápidamente, usando IA para personalizar la experiencia de aprendizaje.',
                'prompt_content'    => <<<'EOT'
Eres un product manager y diseñador de experiencias de onboarding con experiencia en SaaS. Tu objetivo es ayudarme a diseñar un onboarding educativo para [NOMBRE DEL PRODUCTO] que lleve al usuario de cero al primer momento de valor ("aha moment") en el menor tiempo posible.

DEFINICIÓN DEL PRODUCTO Y EL USUARIO

Producto: [descripción breve de qué hace y a quién va dirigido]
Segmento de usuario principal: [perfil detallado: cargo, empresa, nivel técnico, objetivo principal]
Aha moment: [el momento exacto en que el usuario percibe el valor del producto por primera vez]
Tiempo objetivo para llegar al aha moment: [minutos u horas desde el registro]

ARQUITECTURA DEL ONBOARDING EDUCATIVO

Paso 1 — Bienvenida personalizada (primer inicio de sesión)
- Mensaje de bienvenida: texto de 50-80 palabras que conecte con el objetivo del usuario
- Pregunta de personalización: 1 pregunta clave (con 3-4 opciones) que permita adaptar el onboarding
- Checklist de inicio: 5-7 acciones ordenadas por valor e impacto para el usuario

Para cada acción del checklist, diseña:
Acción: [nombre de la tarea]
Por qué hacerla primero: [beneficio concreto para el usuario]
Tooltip o tooltip educativo: texto de 20-30 palabras que aparece sobre la interfaz
Vídeo o GIF opcional: descripción de lo que mostraría (5-15 segundos)
Celebración al completar: mensaje de refuerzo positivo de 1-2 frases

Paso 2 — Guía interactiva en el primer flujo crítico
Diseña una guía paso a paso tipo "product tour" del flujo más importante del producto:
- Número de pasos: máximo 7 (explica el trade-off)
- Para cada paso: qué elemento de la UI señalar, qué texto mostrar (máximo 25 palabras), acción requerida del usuario
- Opción de saltar: texto del botón y qué hacer si el usuario sale antes de terminar

Paso 3 — Emails educativos de la primera semana
Diseña una secuencia de 5 emails para los primeros 7 días:
Email [N] — Día [X]:
- Asunto: [línea de asunto con máximo 50 caracteres]
- Objetivo del email: [qué comportamiento queremos activar]
- Cuerpo: [estructura: gancho + contexto + acción concreta + CTA]
- Trigger para no enviarlo: [condición que indica que el usuario ya realizó esta acción]

Paso 4 — Centro de ayuda y educación continua
- 5 artículos de ayuda prioritarios: título, 3 frases de descripción, para qué momento del ciclo de vida
- 3 vídeos de menos de 3 minutos: título, guion en puntos clave, cuándo mostrarlos en el producto
- Sistema de tooltips contextuales: 5 momentos de fricción donde añadir ayuda in-app

MÉTRICAS DE ÉXITO DEL ONBOARDING

Define los KPIs del onboarding y sus valores objetivo:
- Tasa de activación: % de usuarios que llegan al aha moment en X días
- Completitud del checklist: % de usuarios que completan el 80% de las acciones
- Tasa de apertura de emails educativos: benchmark del sector y objetivo
- Time to value: tiempo medio desde registro hasta primer uso significativo

Nombre del producto y descripción: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Diseño de onboarding educativo y activación de usuarios',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Desarrollar programas de formación interna para RRHH con IA',
                'description'       => 'Usa IA para diseñar planes de desarrollo de talento, onboarding de empleados y programas de capacitación interna adaptados a la cultura y necesidades de la empresa.',
                'prompt_content'    => <<<'EOT'
Eres un responsable de Learning & Development (L&D) con experiencia en empresas de más de 200 empleados. Ayúdame a diseñar un programa de formación interna para [DESCRIPCIÓN DE LA EMPRESA: sector, tamaño, cultura] enfocado en [OBJETIVO: liderazgo, habilidades técnicas, cultura, compliance, etc.].

DIAGNÓSTICO DE NECESIDADES FORMATIVAS

Antes de diseñar el programa, identifica:
- Brechas de competencias: qué habilidades faltan en el equipo respecto a los objetivos de negocio
- Contexto organizacional: cambios recientes (reestructuración, nueva tecnología, crecimiento) que generen necesidad formativa
- Restricciones: presupuesto estimado, tiempo disponible del empleado, modalidad preferida (presencial/online/híbrida)
- Stakeholders clave: quién debe aprobar el programa y qué métricas necesita ver para validarlo

DISEÑO DEL PROGRAMA

Nombre del programa: [propón 3 opciones de nombre inspirador y alineado con la cultura]
Duración total: [semanas o meses] con [horas semanales de dedicación]
Modalidad: [detalla la combinación de formatos y justifica por qué]

Itinerario formativo por semanas o meses:
[Semana/Mes N]: [Nombre del bloque]
- Contenidos: [lista de temas con 1 frase de descripción cada uno]
- Formatos: [vídeos, talleres, lecturas, coaching, práctica en el puesto]
- Duración: [horas]
- Facilitador o recurso: [interno/externo/plataforma]
- Entregable o práctica: [qué aplica el empleado en su trabajo real]

PLAN DE ONBOARDING PARA NUEVAS INCORPORACIONES

Si el objetivo incluye onboarding, diseña:
Día 1: [actividades, quién acompaña, documentos clave, objetivo del día]
Semana 1: [estructura diaria, reuniones clave, primeras tareas]
Mes 1: [hitos de aprendizaje, reunión con manager, primer proyecto]
Mes 3: [evaluación de adaptación, ajuste del plan de desarrollo individual]

HERRAMIENTAS Y RECURSOS EDUCATIVOS

Para cada módulo del programa, indica:
a) Tipo de contenido a crear: [vídeo, guía, quiz, caso práctico, simulación]
b) Plataforma recomendada: [LMS, herramienta colaborativa, app de microlearning]
c) Tiempo de producción estimado: [horas para el equipo de L&D]
d) Costo estimado por participante: [rango orientativo]

EVALUACIÓN DEL IMPACTO

Diseña la medición en 4 niveles (modelo Kirkpatrick):
Nivel 1 — Reacción: encuesta de satisfacción de 5 preguntas
Nivel 2 — Aprendizaje: prueba de conocimientos antes/después con al menos 10 preguntas
Nivel 3 — Comportamiento: observación en el puesto a los 30 y 90 días (criterios de evaluación)
Nivel 4 — Resultados: métricas de negocio que debería mejorar y cómo medirlas

COMUNICACIÓN INTERNA DEL PROGRAMA

- Email de lanzamiento: asunto, cuerpo de 150 palabras, CTA
- Recordatorio para managers: 5 puntos sobre cómo apoyar a su equipo durante el programa
- Calendario de comunicaciones: qué comunicar cada semana para mantener el engagement

Descripción de la empresa y objetivo del programa: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Diseño de programas L&D y formación interna corporativa',
                'vote_score'        => 31,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Crear contenido educativo financiero para clientes con IA',
                'description'       => 'Diseña materiales educativos que expliquen conceptos financieros complejos a clientes no especializados, mejorando la educación financiera y la confianza en el asesor.',
                'prompt_content'    => <<<'EOT'
Eres un asesor financiero y educador especializado en hacer accesibles los conceptos financieros complejos para personas sin formación en finanzas. Ayúdame a crear un módulo educativo sobre [CONCEPTO O PRODUCTO FINANCIERO] para clientes de [PERFIL: edad, nivel de conocimiento financiero, objetivo financiero principal].

SIMPLIFICACIÓN DEL CONCEPTO

Empieza explicando el concepto en 3 niveles de complejidad:
Nivel básico (para quien nunca ha oído el término):
- Explicación en 3 frases usando analogías cotidianas, sin jerga financiera
- Ejemplo con números redondos y situación de vida real
- Por qué importa esto para su vida y sus finanzas personales

Nivel intermedio (para quien conoce el término pero no lo entiende bien):
- Explicación más técnica de cómo funciona
- Ejemplo con cálculo simplificado que el cliente pueda reproducir
- Comparación con alternativas: cuándo es mejor esta opción y cuándo no

Nivel avanzado (para clientes más sofisticados):
- Detalles técnicos, fiscalidad, riesgos y factores que influyen
- Caso práctico con números reales y análisis de escenarios
- Preguntas que debería hacer a su asesor para tomar una decisión informada

GUÍA EDUCATIVA PARA EL CLIENTE

Crea un documento de 1-2 páginas (400-600 palabras) que el cliente pueda leer por su cuenta:
- Título llamativo y accesible
- Introducción: por qué esto es relevante para personas como él/ella
- Cuerpo: 3-5 secciones con subtítulos claros
- Glosario: 5-8 términos clave definidos en lenguaje simple
- Preguntas frecuentes: 5 preguntas que suelen hacer los clientes con respuestas de 2-3 frases
- Próximos pasos: 3 acciones concretas que puede tomar el cliente

TALLER O WEBINAR EDUCATIVO

Diseña un taller de 60 minutos sobre el tema:
- Objetivos de aprendizaje: 3 cosas que el participante sabrá hacer al terminar
- Agenda minuto a minuto: actividades, duración, formato (presentación/ejercicio/Q&A)
- 2 ejercicios interactivos con calculadoras simples o escenarios de decisión
- Encuesta final: 3 preguntas para medir el aprendizaje y 2 para el NPS del taller

CONTENIDO PARA REDES SOCIALES Y EMAIL

Para distribuir el conocimiento:
- 3 posts para LinkedIn: cada uno explicando un aspecto diferente del concepto (150-200 palabras cada uno)
- 1 hilo de 5 tweets/posts cortos explicando el concepto de forma progresiva
- Newsletter de 300 palabras: historia de cliente ficticio (sin datos reales) que ilustre cómo este concepto transformó sus finanzas

AVISO LEGAL Y CUMPLIMIENTO

Incluye un texto de disclaimer adecuado para cada formato que:
- Aclare que es contenido educativo, no asesoramiento personalizado
- Recomiende consultar con un asesor certificado para decisiones concretas
- Cumpla con los requisitos básicos de comunicación financiera regulada

Concepto o producto financiero a explicar: [escribe aquí]
Perfil del cliente objetivo: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Educación financiera para clientes y materiales de asesoría',
                'vote_score'        => 28,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Desarrollar materiales de formación legal para empleados con IA',
                'description'       => 'Crea programas de formación jurídica interna para empleados no abogados: compliance, protección de datos, contratos y ética empresarial en formato accesible.',
                'prompt_content'    => <<<'EOT'
Eres un abogado corporativo y formador legal especializado en hacer accesible el derecho para profesionales no jurídicos. Ayúdame a crear un programa de formación legal interna sobre [TEMA LEGAL: RGPD, compliance, contratos, propiedad intelectual, etc.] para empleados de [DESCRIPCIÓN DE LA EMPRESA: sector, tamaño, rol de los empleados que recibirán la formación].

DIAGNÓSTICO LEGAL Y DE RIESGOS

Antes de diseñar la formación, identifica:
- Riesgos legales principales que este colectivo de empleados puede generar o enfrentar
- Incidentes pasados o frecuentes en el sector que justifican la formación
- Obligaciones legales específicas del sector que deben conocer los empleados
- Consecuencias reales (para la empresa y para el empleado) de no cumplir

ESTRUCTURA DEL PROGRAMA DE FORMACIÓN LEGAL

Módulo 1 — Marco legal básico (sin jerga jurídica)
- Resumen de la ley o normativa aplicable en 200 palabras accesibles
- Los 5 puntos que todo empleado debe conocer, explicados con ejemplos prácticos
- Lo que SÍ pueden hacer y lo que NO pueden hacer en su trabajo diario (lista clara)

Módulo 2 — Situaciones reales y cómo actuar
Desarrolla 5 casos prácticos basados en situaciones reales del sector:
Caso [N]:
- Situación: [descripción de la situación en 100 palabras, en primera persona del empleado]
- La duda: [qué no sabe el empleado y qué podría hacer mal]
- Respuesta correcta: [qué debe hacer, paso a paso]
- Por qué: [explicación legal simplificada de 3-4 frases]
- Consecuencia de hacerlo mal: [consecuencias concretas para la empresa y el empleado]

Módulo 3 — Procedimientos internos
- Protocolo de actuación: diagrama de flujo en texto (si X ocurre → hacer Y)
- A quién acudir internamente: roles y cuándo contactar a cada uno
- Documentos clave: cuáles existen, dónde están y cuándo usarlos
- Canal de denuncias: cómo funciona y qué garantías tiene el empleado

Módulo 4 — Evaluación y certificación
- Examen de 20 preguntas de opción múltiple (escribe las preguntas completas)
- Nota mínima para certificar y consecuencias de no superarlo
- Frecuencia de renovación: cada cuánto hay que repetir la formación y por qué

MATERIALES DE SOPORTE

Para reforzar el aprendizaje:
- Infografía resumen: descripción de 10 puntos clave en formato visual (describe el contenido de cada elemento)
- Tarjetas de referencia rápida (pocket guide): 5 reglas prácticas en 1 frase cada una
- FAQ legal: 10 preguntas que suelen hacer los empleados con respuestas de 2-3 frases en lenguaje simple

CUMPLIMIENTO Y REGISTRO

- Cómo documentar que el empleado ha recibido y superado la formación
- Qué evidencias guardar en caso de inspección o litigio
- Cómo integrar esta formación en el proceso de onboarding de nuevas incorporaciones

Tema legal a desarrollar: [escribe aquí]
Descripción del colectivo de empleados: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Formación legal interna y programas de compliance',
                'vote_score'        => 26,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Crear bases de conocimiento y guías de autoservicio con IA',
                'description'       => 'Diseña bases de conocimiento completas para que los clientes resuelvan sus dudas sin contactar con soporte, reduciendo tickets y mejorando la satisfacción.',
                'prompt_content'    => <<<'EOT'
Eres un especialista en Customer Success y gestión del conocimiento con experiencia en plataformas SaaS. Ayúdame a crear una base de conocimiento de autoservicio completa para [NOMBRE DEL PRODUCTO/SERVICIO] que permita a los clientes resolver el [PORCENTAJE OBJETIVO]% de sus dudas sin necesidad de contactar con el equipo de soporte.

AUDITORÍA DE TICKETS Y NECESIDADES

Antes de crear contenido, analiza qué artículos son prioritarios:
- Las 10 preguntas más frecuentes del soporte (categoriza por tipo: técnica, proceso, facturación, etc.)
- Los 5 momentos del ciclo de vida donde más tickets se generan
- Las palabras clave que los clientes usan para buscar ayuda (no las que usa el producto)
- Artículos actuales con bajo rating: identifica por qué no son útiles y cómo mejorarlos

ARQUITECTURA DE LA BASE DE CONOCIMIENTO

Propón la estructura de categorías y subcategorías:
Categoría principal 1: [Nombre desde el punto de vista del cliente, no del producto]
- Subcategoría 1.1: [Nombre]
  · Artículos: [lista de 3-5 títulos de artículos]
- Subcategoría 1.2: [...]
[Repite para todas las categorías necesarias, mínimo 4 categorías principales]

PLANTILLA DE ARTÍCULO DE AYUDA DE ALTA CALIDAD

Para el artículo más importante de la base de conocimiento, escribe el artículo completo siguiendo esta plantilla:

Título: [Frase de acción: "Cómo [hacer X]" o "Por qué [sucede Y]"]
Tiempo de lectura: [X minutos]
Última actualización: [fecha]

Resumen en 1 frase: [qué resuelve este artículo]

Antes de empezar:
- Qué necesitas: [requisitos, permisos, información previa]
- A quién va dirigido: [rol del usuario]
- Cuándo usar este artículo: [situación específica que lo activa]

Pasos:
Paso 1: [Título descriptivo]
[Instrucción clara en voz imperativa]
[Captura de pantalla o descripción de qué ver en la interfaz]
[Nota o advertencia si aplica]

[Repite para cada paso]

Verificación: cómo sabe el usuario que lo hizo bien
Si algo va mal: 3 problemas frecuentes con su solución
Siguiente paso recomendado: [enlace al artículo que suele necesitar después]

SISTEMA DE FEEDBACK Y MEJORA CONTINUA

Diseña el sistema para mejorar la base de conocimiento:
- Widget de feedback al final de cada artículo: ¿Te ayudó? + campo de texto opcional
- Proceso de revisión mensual: quién revisa, qué métricas analiza, cómo decide qué actualizar
- Alertas de obsolescencia: cuándo marcar un artículo para revisar (lanzamiento de feature, cambio de UI)
- Proceso de creación de nuevo contenido: quién lo aprueba, plantilla a usar, tiempo de publicación

ESTRATEGIA DE DEFLEXIÓN DE TICKETS

Implementa puntos de contacto para llevar al cliente a la base de conocimiento:
- Respuesta automática a ticket entrante: texto que incluya 2-3 artículos relevantes antes de responder humano
- Widget de chat: 5 respuestas rápidas que enlazan a artículos
- Email de onboarding: enlace a los 3 artículos más importantes para nuevos clientes
- Mensaje in-app: tooltip contextual que aparece antes de abrir soporte

Nombre del producto y principales flujos de uso: [escribe aquí]
Porcentaje de deflexión de tickets que quieres alcanzar: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Creación de bases de conocimiento y contenido de autoservicio',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Crear cursos y talleres online para vender como freelancer con IA',
                'description'       => 'Diseña y lanza cursos online en tu área de especialización usando IA para acelerar la creación de contenido, validar la demanda y estructurar la experiencia de aprendizaje.',
                'prompt_content'    => <<<'EOT'
Eres un consultor de negocios digitales especializado en ayudar a freelancers y consultores independientes a crear y monetizar su conocimiento a través de cursos y talleres online. Ayúdame a diseñar y preparar el lanzamiento de un curso online sobre [TU ESPECIALIDAD] dirigido a [PÚBLICO OBJETIVO].

VALIDACIÓN DE LA IDEA ANTES DE CREAR CONTENIDO

Antes de invertir horas en producción, valida que existe demanda real:
- Mensaje de validación: redacta un post de LinkedIn de 200 palabras que anuncie el curso sin haberlo creado aún, para medir el interés
- Landing page mínima: estructura de 5 secciones para una página de espera (waitlist) con el beneficio principal, para quién es, qué aprenderán, quién lo imparte, formulario de registro
- Preguntas de entrevista: 10 preguntas para hablar con 5 potenciales clientes y validar el dolor real, el precio que pagarían y el formato que prefieren

DISEÑO DEL CURSO O TALLER

Formato recomendado según tu situación:
- Si tienes menos de 3 meses disponibles: diseña un taller intensivo de 4 horas
- Si tienes 3-6 meses: diseña un curso de 4 módulos con material de apoyo
- Si tienes más de 6 meses: diseña un programa completo con comunidad

Para el formato elegido, desarrolla:
Propuesta de valor única: 1 frase que responda "¿por qué este curso y no otro?"
Resultado transformador: qué situación tendrá el estudiante al terminar vs. antes de empezar
Módulo o sesión [N]: [Nombre]
- Objetivo específico: [qué sabe o puede hacer el estudiante al terminar]
- Contenido principal: [lista de 3-5 temas con 1 frase por tema]
- Formato: [vídeo pregrabado / sesión en directo / lectura / ejercicio]
- Duración: [minutos]
- Entregable: [qué produce o completa el estudiante]

ESTRATEGIA DE PRECIO Y EMPAQUETADO

Diseña 3 opciones de precio para maximizar ingresos:
Opción básica (precio mínimo): qué incluye y a quién va dirigida
Opción estándar (precio medio, la más vendida): qué añade respecto a la básica
Opción premium (precio alto, el mejor margen): qué incluye que no tienen las otras (acceso directo, sesión 1:1, materiales extras)

Justificación del precio: cómo calcular el precio basándote en el ROI que obtiene el estudiante

PLAN DE LANZAMIENTO Y VENTAS

Semana -4 (antes del lanzamiento): acciones de construcción de audiencia
Semana -2: secuencia de contenido de valor para calentar la audiencia
Semana -1: early bird y apertura de lista de espera
Día del lanzamiento: emails y posts del lanzamiento oficial
Semana +1: últimos recordatorios y cierre del carrito

Para cada etapa, redacta:
- 1 post de LinkedIn o Instagram con texto completo
- 1 email con asunto + cuerpo de 150-200 palabras

HERRAMIENTAS Y PLATAFORMAS RECOMENDADAS

Para cada necesidad, propón 2 opciones con sus ventajas:
- Plataforma de alojamiento del curso
- Herramienta de email marketing
- Pasarela de pagos
- Comunidad de estudiantes
- Producción de vídeo (equipamiento mínimo viable)

Estimación de ingresos del primer lanzamiento basada en audiencia actual de [X seguidores/contactos] con tasa de conversión del [1-3%].

Tu especialidad y público objetivo del curso: [escribe aquí]
Tamaño de tu audiencia actual: [escribe aquí]
EOT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 50,
                'use_case'          => 'Lanzamiento y venta de cursos online como freelancer',
                'vote_score'        => 47,
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
