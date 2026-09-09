<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills120Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Prompts de marketing con IA',
                'description'      => 'Domina el prompting para crear campañas, copies, briefs y estrategias con Claude o ChatGPT que realmente funcionan y ahorran horas de trabajo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un experto en prompting aplicado al marketing digital con experiencia práctica usando Claude y ChatGPT para producir resultados reales en campañas, contenido y estrategia. Quiero aprender a construir prompts de marketing eficaces desde cero.

**Mi perfil:**
- Rol: [marketing manager / content creator / growth hacker / brand manager / otro]
- Experiencia con IA: [nunca he usado / uso ChatGPT de forma básica / tengo experiencia pero quiero mejorar mis resultados]
- Tipo de contenido que más produzco: [copies de ads / emails / posts de redes / briefs de campaña / estrategia de contenidos / otro]
- Principal frustración: [la IA suena genérica / no sigue mi tono de marca / me da resultados mediocres / tardo más en corregir que en escribir yo]

**Módulo 1 – Los principios del prompting eficaz para marketing:**
Antes de darte prompts, entiende por qué unos funcionan y otros no:
1. La estructura de un prompt de marketing de alto rendimiento: rol + contexto + tarea + formato + restricciones
2. Por qué "escríbeme un email de marketing" falla y "actúa como copywriter especializado en SaaS B2B y escríbeme un email de reactivación para clientes que no han abierto ningún email en 60 días" funciona
3. Cómo transferir el tono de voz de marca a la IA: la técnica de los ejemplos propios (few-shot prompting)
4. Cómo dar feedback a la IA para iterar hacia el resultado correcto sin empezar de cero
5. Cuándo usar prompts de un solo disparo vs. conversaciones largas con contexto acumulado

**Módulo 2 – Prompts para copy y contenido:**
Los prompts concretos que más uso en marketing:
1. Email de campaña: dame el prompt base que usarías para generar un email de lanzamiento de producto con urgencia y CTA claro
2. Copy de anuncio: prompt para generar 5 variaciones de headline + descripción para una campaña de Meta Ads
3. Post de LinkedIn: prompt para escribir un post educativo en primera persona que no suene a contenido corporativo
4. Hilo de Twitter/X: estructura del prompt para un hilo que enganche desde el primer tweet
5. Landing page: cómo estructurar el prompt para que la IA genere los bloques de la landing en el orden correcto

**Módulo 3 – Prompts para estrategia y planificación:**
La IA como sparring estratégico:
1. Calendario de contenidos: prompt para generar un mes de contenido alineado con mis objetivos de marketing
2. Brief de campaña: cómo usar la IA para construir un brief completo a partir de un briefing mínimo del cliente
3. Análisis de competidores: prompt para que la IA analice la comunicación de un competidor y detecte oportunidades de diferenciación
4. Naming y taglines: prompt para generar y filtrar opciones de nombre o claim para un producto o campaña

**Módulo 4 – Errores frecuentes y cómo corregirlos:**
Por qué tus prompts de marketing no dan buenos resultados:
1. El error del contexto vacío: qué información mínima necesita la IA para que el resultado sea usable
2. El error del formato implícito: cómo especificar exactamente el formato que necesitas (longitud, estructura, tono)
3. El error de la corrección genérica: "hazlo mejor" vs. "hazlo más directo y reduce a 3 párrafos sin perder el CTA"
4. Cuándo la IA no es la herramienta correcta: qué tareas de marketing todavía haces mejor tú

**Entregable:**
Genera mi kit de prompts de marketing personalizados: 5 prompts listos para usar adaptados a mi rol y tipo de contenido habitual, con las instrucciones para ajustarlos a cada campaña concreta.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Aprender a escribir prompts de marketing eficaces para generar copies, estrategias y contenidos de calidad con IA',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Fundamentos de machine learning para developers',
                'description'      => 'Entiende regresión, clasificación, clustering y redes neuronales: lo que todo developer necesita saber de ML aunque no sea data scientist.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un machine learning engineer con experiencia enseñando a developers con sólidas bases de programación que se acercan por primera vez al ML. Quiero entender los conceptos fundamentales de machine learning desde la perspectiva de alguien que ya programa bien pero no tiene formación estadística.

**Mi perfil:**
- Lenguaje principal: [Python / JavaScript / Java / otro]
- Experiencia de programación: [años]
- Conocimiento de matemáticas: [básico del instituto / estadística universitaria / ninguno en años]
- Por qué me interesa ML: [integrar modelos en mis apps / entender qué hace el data scientist de mi equipo / cambiar de carrera / curiosidad]
- Contexto donde usaré el ML: [clasificación de texto / recomendaciones / detección de anomalías / predicciones de serie temporal / otro]

**Parte 1 – Los conceptos que todo developer debe entender:**
Sin jerga innecesaria, explícame:
1. La diferencia entre ML supervisado, no supervisado y por refuerzo — con ejemplos concretos de software real
2. Qué es un modelo: cómo pensar en él como una función matemática que aprende de datos
3. Training, validation y test set: por qué dividimos los datos así y qué error comete el 80% de los principiantes con esto
4. Overfitting y underfitting: cómo detectarlos visualmente y qué hacer cuando ocurren
5. Features e ingeniería de features: por qué los datos en bruto casi nunca sirven directamente

**Parte 2 – Algoritmos esenciales con perspectiva de developer:**
Para cada algoritmo, explícame cuándo usarlo, no solo cómo funciona:
1. Regresión lineal y logística: para qué tipo de problema, cómo interpretarlo como código
2. Decision trees y Random Forest: por qué son el punto de partida ideal para problemas de clasificación
3. Gradient Boosting (XGBoost, LightGBM): cuándo los necesitas y por qué ganan casi siempre en datos tabulares
4. K-Means y clustering: casos de uso reales en productos de software
5. Redes neuronales: cuándo la red neuronal justifica su complejidad vs. cuándo XGBoost es suficiente

**Parte 3 – El flujo de trabajo de un proyecto de ML:**
Cómo funciona realmente un proyecto de ML de principio a fin:
1. Definición del problema: cómo traducir un problema de negocio a un problema de ML (la pregunta correcta lo es todo)
2. Exploración y limpieza de datos (EDA): qué mirar primero en un dataset que no conoces
3. Entrenamiento y evaluación del modelo: qué métricas usar según el tipo de problema (accuracy, precision, recall, F1, AUC-ROC)
4. Deployment: cómo pasar un modelo de un notebook de Jupyter a una API REST que tus apps consuman
5. Monitoring: cómo detectar que tu modelo se ha degradado en producción (data drift, model drift)

**Parte 4 – Herramientas prácticas para empezar:**
El stack mínimo viable de ML para un developer:
1. scikit-learn: qué te da, para qué es suficiente, cómo empezar en 30 minutos
2. pandas y numpy: los fundamentos de manipulación de datos que necesitas aunque uses otra cosa
3. Jupyter Notebooks vs. scripts de Python: cuándo usar cada uno
4. Hugging Face: cómo usar modelos pre-entrenados sin entrenar nada tú mismo
5. MLflow o Weights & Biases: cuándo empezar a usar tracking de experimentos

**Entregable:**
Diseña para mí un plan de aprendizaje de ML de 8 semanas adaptado a mi perfil de developer, con recursos concretos (libros, cursos, proyectos prácticos) para cada semana y el proyecto final que demostrará que entiendo los fundamentos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Aprender los fundamentos de machine learning desde la perspectiva de un developer para integrar ML en proyectos reales',
                'vote_score'       => 48,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Prompts de diseño con IA generativa',
                'description'      => 'Usa IA generativa para crear moodboards, variaciones visuales, assets y referencias que aceleran el proceso de diseño sin reemplazar tu criterio creativo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un diseñador senior con experiencia integrando herramientas de IA generativa (Midjourney, Adobe Firefly, DALL-E, Stable Diffusion) en flujos de trabajo de diseño gráfico, branding y producto. Quiero aprender a usar estas herramientas de forma que aceleren mi proceso sin que el resultado parezca genérico.

**Mi perfil:**
- Especialidad de diseño: [branding / UX/UI / diseño editorial / ilustración / motion / fotografía]
- Herramientas de IA que uso o quiero usar: [Midjourney / Adobe Firefly / DALL-E / Stable Diffusion / otro]
- Nivel actual: [nunca he usado IA generativa en diseño / uso prompts básicos / quiero resultados más controlados]
- Principal uso previsto: [exploración de conceptos / presentación a clientes / generación de assets / moodboards / referencias visuales]

**Parte 1 – Cómo funciona el prompting visual:**
Entiende la lógica antes de escribir prompts:
1. La anatomía de un prompt visual efectivo: sujeto + estilo + ambiente + técnica + ratio + calidad
2. La diferencia entre un prompt descriptivo y un prompt de dirección de arte: "una mujer en la ciudad" vs. "retrato editorial, mujer 30s, Tokyo de noche, iluminación neón, fotografía analógica Portra 400, bokeh, Vogue 2020"
3. Cómo especificar el estilo visual de referencia: artistas, fotógrafos, épocas, movimientos artísticos que el modelo conoce bien
4. Términos técnicos que mejoran el output: tipos de lente, técnicas fotográficas, materiales, texturas, composición

**Parte 2 – Flujos de trabajo prácticos por especialidad:**

*Para branding:*
1. Prompts para generar moodboards de marca con coherencia visual
2. Cómo explorar direcciones de color y tipografía usando IA como generador de referencias
3. Generación de variaciones de concepto para presentar al cliente antes de abrir Illustrator

*Para UX/UI:*
1. Prompts para generar pantallas de referencia o inspiración para un tipo de interfaz específico
2. Cómo usar IA para generar assets de UI (iconos, ilustraciones de onboarding, empty states)
3. Límites de la IA en UX: qué nunca delegarle (la estructura de información, la arquitectura de navegación)

*Para fotografía y dirección de arte:*
1. Prompts para generar referencias de iluminación y composición antes del shooting
2. Cómo usar la IA para proponer variaciones de una campaña fotográfica al cliente sin coste de producción
3. Inpainting y outpainting: cuándo usarlos para extender o retocar imágenes reales

**Parte 3 – Control y consistencia:**
El mayor reto de la IA generativa es mantener coherencia:
1. Cómo usar seeds y parámetros de variación para conseguir coherencia entre imágenes de una misma campaña
2. Image-to-image y img2img: cómo guiar la generación a partir de tu propio boceto o referencia
3. Fine-tuning y LoRAs: cuándo tiene sentido entrenar el modelo con tu propio estilo
4. Cómo iterar un prompt cuando el resultado es "casi pero no": el proceso de debugging visual

**Parte 4 – Ética y propiedad intelectual:**
Lo que todo diseñador debe saber:
1. Derechos de las imágenes generadas: qué dice la ley en España y la UE actualmente
2. Cómo comunicar al cliente cuándo un trabajo incluye IA generativa
3. Cuándo la IA generativa daña tu marca personal como diseñador y cuándo la potencia

**Entregable:**
Para mi especialidad de diseño, genera 10 prompts de referencia listos para usar en mi herramienta preferida, con explicación de qué hace cada parte del prompt y cómo adaptarlo a distintos proyectos.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Integrar IA generativa en el flujo de diseño para crear moodboards, variaciones y assets visuales de referencia',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Scripts de ventas generados con IA',
                'description'      => 'Usa IA para crear y personalizar scripts, emails y propuestas que se adaptan a cada tipo de cliente en segundos y mejoran tu tasa de respuesta.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de ventas y experto en copywriting de ventas con experiencia en B2B SaaS, servicios profesionales y ventas complejas. Quiero aprender a usar IA para crear scripts, emails y materiales de ventas personalizados que realmente generen respuesta.

**Mi contexto:**
- Qué vendo: [producto o servicio, precio medio, ciclo de ventas típico]
- A quién vendo: [perfil del comprador, sector, tamaño de empresa]
- Canal principal de prospección: [cold email / LinkedIn / llamadas en frío / referidos / inbound]
- Principal frustración con los materiales actuales: [suenan genéricos / tasa de respuesta baja / tarda demasiado en personalizar / no sé cómo adaptar el mensaje a distintos perfiles]

**Parte 1 – Principios del copywriting de ventas que la IA debe respetar:**
Antes de generar nada, entiende qué hace que un mensaje de ventas funcione:
1. El framework PAS (Problema-Agitación-Solución) aplicado a ventas: cómo usarlo en un email de 5 líneas
2. Personalización real vs. falsa personalización: la diferencia entre "vi tu LinkedIn" y demostrar que entiendes el negocio del prospect
3. El asunto de email de prospección: qué funciona en 2025 (curiosidad específica, referencia directa, pregunta)
4. El CTA correcto: por qué "¿tienes 15 minutos?" funciona mejor que "reserva una demo" en el primer contacto

**Parte 2 – Prompts para crear scripts y secuencias:**
Los prompts exactos para generar materiales de ventas:
1. Email de cold outreach: dame el prompt para generar un primer email de prospección para [tu ICP] que mencione un dolor específico del sector
2. Seguimiento (follow-up): prompt para generar 3 emails de seguimiento que añaden valor en cada toque sin ser pesados
3. LinkedIn InMail: prompt para un mensaje de conexión que consiga respuesta sin parecer spam de ventas
4. Script de llamada en frío: cómo generar un opening de 30 segundos y las respuestas a las 3 objeciones más frecuentes
5. Email de reactivación: prompt para retomar el contacto con un lead que se enfrió hace 3 meses

**Parte 3 – Personalización a escala:**
Cómo usar IA para personalizar sin hacerlo manualmente uno a uno:
1. El enfoque de "variable de personalización": cómo diseñar un template con 2-3 puntos de personalización que la IA puede completar con información básica del prospect
2. Cómo usar noticias de empresa, posts de LinkedIn o casos de uso del sector para personalizar en segundos
3. Segmentación por ICP: cómo crear versiones distintas del mismo pitch para distintos perfiles de comprador (CEO vs. Head of Sales vs. IT Director)
4. A/B testing de mensajes con IA: cómo generar variaciones y qué testar primero

**Parte 4 – Propuestas y documentos de ventas:**
Más allá del outreach:
1. Propuesta comercial: cómo usar IA para generar el borrador de una propuesta personalizada a partir de las notas de la reunión de descubrimiento
2. Business case: prompt para construir un business case con ROI estimado para el comprador
3. Email de cierre: el mensaje que acompaña a la propuesta y aumenta la probabilidad de que la abran y respondan
4. Battlecard de objeciones: cómo usar IA para preparar respuestas a las objeciones que más escuchas

**Entregable:**
Genera mi kit de ventas personalizado: una secuencia de 4 emails de prospección para mi ICP, lista para adaptar y enviar, con las instrucciones de personalización para cada email y las métricas a monitorizar (open rate, reply rate, meeting booked rate).
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Crear y personalizar scripts, emails de prospección y propuestas de ventas con IA para mejorar la tasa de respuesta',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'PRDs y documentación de producto con IA',
                'description'      => 'Genera documentos de producto, user stories y especificaciones de mayor calidad en menos tiempo usando IA como copiloto del Product Manager.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un Product Manager senior con experiencia en equipos ágiles de empresas de software que usan IA para acelerar la documentación de producto sin sacrificar calidad ni pensamiento estratégico. Quiero aprender a usar la IA como copiloto de PM para producir documentación mejor y más rápida.

**Mi contexto:**
- Rol: [PM / CPO / Product Owner / founder con responsabilidad de producto]
- Tipo de producto: [SaaS B2B / app de consumo / plataforma / API / otro]
- Documentación que más produzco: [PRDs / user stories / specs técnicas / roadmap / OKRs / research insights]
- Principal problema: [tardo demasiado en documentar / la calidad es inconsistente entre PMs del equipo / los devs no leen los docs / empiezo con hoja en blanco cada vez]

**Módulo 1 – PRD con IA:**
El Product Requirements Document es el documento más importante del PM:
1. La estructura del PRD que realmente usan los equipos (no la versión académica de 20 páginas): problema, solución propuesta, criterios de éxito, alcance y fuera de alcance, user stories clave, dependencias
2. El prompt para generar un PRD borrador a partir de una descripción de problema en lenguaje natural
3. Cómo iterar el PRD con la IA: las preguntas que debes hacerle para detectar agujeros en tu razonamiento
4. Cómo adaptar el nivel de detalle según la audiencia: PRD para ingenieros vs. para stakeholders de negocio
5. Qué nunca delegar a la IA en un PRD: las decisiones de priorización y los tradeoffs que requieren tu juicio

**Módulo 2 – User stories y criterios de aceptación:**
La documentación del día a día del PM ágil:
1. El prompt para generar user stories bien formadas a partir de una funcionalidad descrita brevemente
2. Cómo generar criterios de aceptación exhaustivos (happy path + edge cases + casos de error) con IA
3. La técnica del "abogado del diablo": cómo pedirle a la IA que critique tu user story antes de pasarla al equipo
4. Definition of Done generada con IA: cómo crear una DoD específica para cada tipo de historia

**Módulo 3 – Documentación de discovery:**
Convierte el research en documentación estructurada:
1. Cómo convertir notas de entrevistas de usuario en insights estructurados usando IA
2. Síntesis de feedback de clientes: prompt para extraer patrones de 20 tickets de soporte o respuestas de NPS
3. Competitive analysis: cómo usar IA para estructurar y sintetizar el análisis de competidores
4. Jobs to Be Done: cómo usar IA para formular los JTBD a partir de las notas de research

**Módulo 4 – Comunicación del producto:**
Más allá de los docs técnicos:
1. Release notes: prompt para generar release notes dirigidas a usuarios técnicos y no técnicos a partir de los commits o las historias cerradas
2. Product updates para stakeholders: cómo generar el resumen quincenal de producto que dirección realmente lee
3. FAQ de producto: cómo usar IA para anticipar las preguntas que usuarios e internos harán sobre una nueva funcionalidad
4. Changelog público: cómo mantenerlo actualizado con un esfuerzo mínimo usando IA

**Entregable:**
Elige la funcionalidad en la que estés trabajando ahora mismo y genera conmigo: (1) el PRD completo en el formato mínimo viable, (2) 5 user stories con criterios de aceptación, y (3) las release notes para el usuario final. Todo en una sola sesión.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Generar PRDs, user stories y documentación de producto de calidad en menos tiempo usando IA como copiloto del PM',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Prompts de RRHH con IA',
                'description'      => 'Usa IA para redactar ofertas de empleo, planes de onboarding, políticas internas y evaluaciones de desempeño más efectivas y en menos tiempo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un HR Business Partner con experiencia usando IA para producir documentación de RRHH de calidad sin sacrificar el toque humano. Quiero aprender a usar la IA en mi trabajo diario de RRHH de forma práctica e inmediata.

**Mi contexto:**
- Rol: [HR Manager / Recruiter / HR Generalist / People Operations / HRBP]
- Tamaño de la empresa: [número de empleados]
- Documentación que más produzco: [ofertas de empleo / descripciones de puesto / políticas / evaluaciones / planes de onboarding / comunicaciones internas]
- Principal dolor: [las ofertas suenan corporativas y no atraen / las evaluaciones de desempeño son inconsistentes / el onboarding no está documentado / redactar políticas tarda demasiado]

**Bloque 1 – Ofertas de empleo y descripciones de puesto:**
El primer touchpoint con el talento:
1. El prompt para escribir una oferta de empleo que atraiga al candidato ideal sin espantar a los buenos perfiles con requisitos exagerados
2. Cómo usar IA para eliminar el lenguaje excluyente de las ofertas (lenguaje de género, requisitos que discriminan por edad, etc.)
3. Descripción de puesto vs. oferta de empleo: cuándo necesito cada una y cómo generarlas con IA
4. Cómo adaptar el tono de la oferta a la cultura de la empresa: startup vs. corporación vs. empresa familiar
5. Sección "Qué te ofrecemos": cómo redactarla de forma que destaque aunque el salario no sea el más alto del mercado

**Bloque 2 – Onboarding:**
Los primeros días determinan el primer año:
1. Plan de onboarding de 30-60-90 días: prompt para generarlo a partir del rol y el equipo del nuevo empleado
2. Welcome pack: cómo usar IA para redactar el mensaje de bienvenida, el manual de cultura y la guía práctica del primer día
3. Checklist de onboarding para el manager: qué debe preparar el responsable antes de que llegue el nuevo
4. Preguntas de check-in de onboarding: las preguntas para la reunión de las 2 semanas, el mes y los 3 meses

**Bloque 3 – Políticas y documentación interna:**
Los documentos que nadie lee pero todos necesitan:
1. Política de trabajo remoto: prompt para redactar una política flexible y justa a partir de las decisiones que ya ha tomado la empresa
2. Código de conducta: cómo generar un borrador que sea claro sin ser amenazante
3. Procedimiento disciplinario: cómo estructurarlo de forma que proteja a la empresa y sea justo con el empleado
4. Comunicaciones internas: cómo usar IA para redactar anuncios de cambios organizativos que generen confianza en lugar de ansiedad

**Bloque 4 – Evaluaciones y feedback:**
El proceso más temido de RRHH:
1. Formulario de evaluación de desempeño: cómo usar IA para diseñar preguntas que generen respuestas útiles, no rellenos
2. Evaluación 360: prompt para redactar la guía de evaluación de pares que sea honesta y constructiva
3. Feedback escrito: cómo usar IA para mejorar el feedback que un manager ha escrito y convertirlo en algo que el empleado pueda recibir y actuar
4. PIPs (Performance Improvement Plans): cómo estructurar un plan de mejora que sea justo, claro y legalmente sólido

**Entregable:**
Genera para mí una oferta de empleo completa para la próxima posición que vayas a publicar, usando el prompt correcto, y luego el plan de onboarding de 30-60-90 días para esa misma posición.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Usar IA para producir documentación de RRHH — ofertas, onboarding, políticas y evaluaciones — de mayor calidad en menos tiempo',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Análisis financiero asistido por IA',
                'description'      => 'Usa IA para interpretar datos financieros, generar informes y detectar patrones que el análisis manual tardaría horas en encontrar.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un CFO y analista financiero con experiencia usando IA y herramientas de análisis de datos para acelerar el trabajo financiero sin sacrificar rigor. Quiero aprender a usar la IA en mi trabajo financiero diario de forma práctica.

**Mi perfil:**
- Rol: [CFO / Controller / Finance Manager / Analista financiero / FP&A]
- Tipo de empresa: [startup / pyme / corporación / consultoría]
- Análisis que más hago: [P&L mensual / presupuesto / forecasting / análisis de rentabilidad / due diligence / reporting para inversores]
- Herramientas actuales: [Excel / Google Sheets / Power BI / Tableau / Python / otro]
- Principal dolor: [tarda demasiado en producir el informe mensual / los comentarios narrativos son siempre lo mismo / no sé cómo interpretar ciertos KPIs / el forecast es siempre inexacto]

**Parte 1 – IA para interpretación de datos financieros:**
Más allá de los números, la narrativa:
1. Cómo usar IA para convertir una tabla de P&L en un análisis narrativo con las variaciones más relevantes destacadas
2. El prompt para que la IA identifique las 3 anomalías más significativas en un conjunto de datos financieros
3. Cómo pedir a la IA que compare los resultados actuales con el presupuesto y explique las desviaciones con hipótesis
4. Análisis de sensibilidad: cómo usar IA para razonar sobre los escenarios "qué pasaría si" de forma rápida
5. Interpretación de ratios financieros: cómo usar IA para explicar qué significa un ratio específico en el contexto de tu sector

**Parte 2 – Automatización de informes:**
El informe mensual que tarda 3 días en 3 horas:
1. Cómo estructurar el prompt para generar los comentarios del cierre mensual a partir de los datos clave
2. Resumen ejecutivo financiero: prompt para generar el one-pager para dirección que va más allá de los números
3. Board deck financiero: cómo usar IA para estructurar la presentación financiera trimestral para el consejo
4. Informes para inversores: cómo generar el investor update financiero mensual o trimestral de forma consistente

**Parte 3 – Forecasting y modelización:**
La IA como asistente del modelo:
1. Cómo usar IA para revisar y criticar un modelo financiero (qué supuestos son razonables, cuáles son demasiado optimistas)
2. Identificación de patrones de estacionalidad: cómo pedirle a la IA que analice series temporales de revenue o coste
3. Escenarios: cómo generar rápidamente un análisis de escenarios (base, optimista, pesimista) con narrativa para cada uno
4. Detección de anomalías en transacciones: cómo usar IA para identificar transacciones atípicas que merezcan revisión

**Parte 4 – Comunicación financiera:**
Los financieros también necesitan comunicar:
1. Cómo usar IA para traducir un análisis financiero complejo en lenguaje comprensible para un CEO no financiero
2. Presentaciones financieras: cómo mejorar los comentarios de las diapositivas para que cuenten una historia, no solo datos
3. Respuestas a preguntas de inversores: cómo usar IA para preparar las respuestas a las preguntas más habituales de una due diligence
4. Emails financieros difíciles: cómo comunicar malas noticias financieras de forma clara y constructiva

**Entregable:**
Analiza este conjunto de datos financieros [pega tus datos de P&L o KPIs del mes] y genera: (1) el análisis narrativo de las 3-5 variaciones más relevantes, (2) las preguntas que debería hacerme sobre estos resultados y (3) el resumen ejecutivo de una página para presentar en el comité de dirección.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Usar IA para acelerar el análisis financiero, generar informes narrativos y detectar anomalías en los datos',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Revisión de contratos con IA',
                'description'      => 'Usa IA para hacer una primera revisión de contratos, detectar cláusulas problemáticas y preparar el trabajo previo al análisis del abogado en menos tiempo.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un abogado mercantil con experiencia en uso de IA para acelerar la revisión de contratos. Quiero aprender a usar la IA como primera capa de revisión de contratos, siendo claro sobre sus limitaciones y sobre cuándo es imprescindible la revisión de un abogado.

**AVISO IMPORTANTE:** Este prompt genera un primer análisis de apoyo. La IA no es un abogado y su análisis no sustituye el asesoramiento jurídico profesional. Úsala para preparar la conversación con tu abogado, no para reemplazarla.

**Mi contexto:**
- Tipo de contrato que más reviso: [NDAs / contratos de servicios / contratos laborales / acuerdos de colaboración / contratos de software / contratos de arrendamiento / otro]
- Mi rol en la revisión: [soy el que firma / soy el que redacta / soy el responsable de negocio que debe entender antes de pasar al legal]
- Principal problema: [no sé qué cláusulas son peligrosas / tarda demasiado en hacer la primera lectura / no entiendo el lenguaje legal / necesito priorizar qué revisar con el abogado]

**Parte 1 – Cómo usar IA para revisar contratos:**
El proceso correcto:
1. Cómo pegar el contrato (o las secciones clave) en un prompt y pedir un análisis estructurado
2. Qué pedirle exactamente a la IA: no "analiza este contrato" sino preguntas específicas que generan respuestas útiles
3. El prompt para identificar las 5 cláusulas más favorables al redactor del contrato (que suelen ser las más peligrosas para ti)
4. Cómo pedirle a la IA que compare el contrato con los estándares del mercado en ese tipo de documento
5. Cómo usar la IA para generar una lista de preguntas para tu abogado antes de la reunión

**Parte 2 – Cláusulas problemáticas por tipo de contrato:**

*NDAs y acuerdos de confidencialidad:*
- Las cláusulas que debes revisar siempre: definición de información confidencial, duración, excepciones, obligaciones post-terminación
- Señales de alerta: NDAs unilaterales disfrazados de bilaterales, definiciones demasiado amplias

*Contratos de servicios:*
- Alcance del servicio: cómo la IA puede detectar ambigüedades que generarán disputas
- Cláusulas de responsabilidad: limitaciones de responsabilidad, indemnizaciones, penalizaciones por retraso
- Condiciones de pago: plazos, condiciones de aceptación, retención de pagos

*Contratos de software y SaaS:*
- Propiedad intelectual: quién posee el trabajo creado, las mejoras, los datos generados
- SLAs: cómo evaluar si son realistas y si las penalizaciones son adecuadas
- Datos y privacidad: cláusulas de procesamiento de datos, auditorías, subprocesadores

**Parte 3 – Prompts concretos para la revisión:**
Dame los prompts exactos que debo usar:
1. Prompt de resumen ejecutivo: para entender de qué va el contrato en 5 minutos
2. Prompt de detección de cláusulas desfavorables: qué buscar específicamente
3. Prompt de análisis de riesgo: cómo pedirle que evalúe el riesgo global y las áreas de mayor exposición
4. Prompt de propuesta de mejoras: cómo pedir alternativas de redacción más equilibradas para negociar
5. Prompt de checklist: generar una lista de verificación personalizada para ese tipo de contrato

**Parte 4 – Límites de la IA en revisión de contratos:**
Lo que la IA no puede hacer:
1. Por qué la IA puede cometer errores legales importantes y cómo detectarlos
2. Qué tipos de contrato NUNCA debes revisar solo con IA (contratos laborales, acuerdos con implicaciones penales, contratos de alta cuantía)
3. Cómo usar la revisión de IA para reducir el coste del abogado, no para eliminarlo
4. Documentación: cómo registrar qué revisó la IA y cuándo, por si hay disputa posterior

**Entregable:**
Pega el contrato o la sección problemática y recibirás: (1) resumen ejecutivo en lenguaje llano, (2) las 5 cláusulas más importantes a revisar con detalle de por qué, (3) las preguntas concretas para tu abogado y (4) una propuesta de redacción alternativa para las cláusulas más desfavorables.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Usar IA para hacer una primera revisión de contratos, detectar cláusulas problemáticas y preparar la reunión con el abogado',
                'vote_score'       => 50,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Respuestas de soporte con IA',
                'description'      => 'Genera, personaliza y mejora las respuestas del equipo de soporte con IA para ser más rápido y consistente sin sonar como un bot.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un director de Customer Support con experiencia integrando IA en equipos de soporte de SaaS y ecommerce. Quiero aprender a usar la IA para mejorar la calidad y velocidad de las respuestas de mi equipo sin que el cliente note que hay una máquina de por medio.

**Mi contexto:**
- Tipo de negocio: [SaaS / ecommerce / app / servicio / otro]
- Canales de soporte: [email / chat en vivo / WhatsApp / Intercom / Zendesk / otro]
- Volumen de tickets: [por semana o mes]
- Perfil del equipo: [número de agentes, nivel de experiencia]
- Principal problema: [tiempos de respuesta altos / respuestas inconsistentes entre agentes / falta de conocimiento del producto / el equipo se quema contestando las mismas preguntas]

**Parte 1 – Cómo usar IA para responder tickets:**
El flujo correcto para que la IA ayude sin reemplazar al agente:
1. El modelo "IA como borrador, humano como editor": cómo estructurar el workflow para que la IA genere la respuesta y el agente la revise y personalice en segundos
2. El prompt para que la IA genere una respuesta de soporte: qué contexto necesita (el ticket, el historial del cliente, el tono de la marca)
3. Cómo evaluar si una respuesta generada por IA es buena antes de enviarla: la checklist de 5 puntos
4. Cuándo la IA no debe generar la respuesta: tickets con alta carga emocional, reclamaciones graves, clientes VIP

**Parte 2 – Respuestas por tipo de ticket:**
Prompts específicos para los tickets más frecuentes:
1. Preguntas frecuentes de producto: cómo generar respuestas precisas y útiles para preguntas que ya tienen respuesta en la documentación
2. Problemas técnicos: cómo estructurar el prompt para que la IA proponga un proceso de diagnóstico paso a paso
3. Reclamaciones y clientes frustrados: cómo generar una respuesta empática que reconoce el problema sin admitir culpa innecesariamente
4. Devoluciones y reembolsos: respuestas que siguen la política pero tratan al cliente como persona
5. Solicitudes fuera de política: cómo responder "no" de forma que el cliente lo entienda y no se vaya enfadado

**Parte 3 – Base de conocimiento y respuestas tipo:**
Construir el activo que mejora con el tiempo:
1. Cómo usar IA para generar la base de conocimiento inicial a partir de tickets históricos
2. Macro templates: cómo crear respuestas tipo con variables de personalización que la IA puede completar
3. Cómo mejorar una respuesta tipo existente con IA: "hazla más empática / más concisa / más específica"
4. Detección de gaps en la base de conocimiento: cómo usar IA para identificar preguntas frecuentes que no tienen respuesta documentada

**Parte 4 – Métricas de calidad en soporte con IA:**
Cómo saber si la IA está mejorando o dañando el soporte:
1. CSAT antes y después de introducir IA en el flujo: cómo medir el impacto real
2. Tiempo de primera respuesta: el KPI más visible y cómo la IA lo impacta
3. Tasa de resolución en el primer contacto (FCR): cómo mejorarla con mejores respuestas iniciales
4. Quality assurance con IA: cómo usar IA para evaluar la calidad de las respuestas del propio equipo

**Entregable:**
Para los 3 tipos de ticket más frecuentes en mi negocio, genera: el prompt que el agente debe usar, la respuesta tipo con las variables de personalización marcadas y los criterios para que el agente decida si enviarla tal cual o modificarla antes de enviar.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Usar IA para generar y mejorar las respuestas del equipo de soporte al cliente siendo más rápido sin perder el toque humano',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'IA como stack del freelance',
                'description'      => 'Las herramientas de IA que todo freelance debería usar hoy para trabajar más rápido, con más calidad y con mayor rentabilidad en su día a día.',
                'prompt_content'   => <<<'PROMPT'
Actúa como un freelance senior que lleva 3 años integrando herramientas de IA en su flujo de trabajo y ha multiplicado su productividad sin aumentar las horas trabajadas. Quiero que me ayudes a construir mi stack de IA como freelance adaptado a mi especialidad y mis necesidades reales.

**Mi perfil:**
- Especialidad: [diseño / desarrollo / redacción / marketing / consultoría / fotografía / traducción / otro]
- Tipo de proyectos habituales: [describe brevemente qué haces para tus clientes]
- Herramientas de IA que ya usas: [ninguna / ChatGPT / Claude / Midjourney / otro]
- Principal cuello de botella en tu trabajo: [la producción del entregable / la comunicación con el cliente / la gestión administrativa / el marketing propio / todo]
- Objetivo: [trabajar menos horas / asumir más proyectos / mejorar la calidad / cobrar más por el mismo trabajo]

**Parte 1 – El stack de IA del freelance moderno:**
Las herramientas por categoría con recomendaciones honestas:

*Producción de trabajo (el core de tu negocio):*
1. Claude vs. ChatGPT vs. Gemini: diferencias reales y para qué tipo de tareas brilla cada uno
2. Herramientas de IA específicas de tu sector: las que más impacto tienen para tu especialidad
3. Cómo integrar la IA en tu flujo de producción sin que se note (y sin que lo notes tú mismo en 3 meses)

*Comunicación y gestión de clientes:*
1. IA para emails de cliente: cómo acelerar la redacción de propuestas, actualizaciones y gestión de expectativas
2. Herramientas de transcripción y resumen de reuniones: cuáles funcionan, cómo usarlas para que el cliente vea que eres organizado
3. Chatbots o asistentes propios: cuándo tiene sentido crear tu propio bot para preguntas frecuentes de clientes

*Administración y gestión del negocio:*
1. IA para propuestas y presupuestos: cómo generar el primer borrador en minutos y personalizarlo en segundos
2. Contratos: cómo usar IA para revisar y adaptar contratos estándar (con los límites que ya conoces)
3. Facturación y gestión financiera: dónde la IA todavía no ayuda mucho y dónde sí

*Marketing propio:*
1. LinkedIn y redes sociales: cómo usar IA para mantener presencia sin que consuma tiempo que no tienes
2. Portafolio y web: cómo usar IA para escribir los textos de tu web y los casos de estudio
3. Newsletter o contenido propio: cómo la IA puede ser el 80% del trabajo de producción si la usas bien

**Parte 2 – Cómo integrar la IA sin caer en las trampas:**
1. La trampa del borrador sin editar: por qué el contenido de IA sin editar daña tu reputación y cómo evitarlo
2. Transparencia con clientes: cuándo decir que usas IA y cómo posicionarlo como valor, no como trampa
3. Calidad vs. velocidad: cómo encontrar el equilibrio para no producir más basura más rápido
4. Cómo actualizar tu stack: la IA cambia cada mes — cómo mantenerse al día sin perderse en el ruido

**Parte 3 – Monetizar la IA como freelance:**
Más allá de la productividad, cómo la IA cambia tu modelo de negocio:
1. Cómo reposicionarte de "vendedor de tiempo" a "vendedor de resultados" gracias a la IA
2. Nuevos servicios que puedes ofrecer con IA que antes no podías hacer solo
3. Cómo justificar tarifas más altas cuando la IA reduce tu tiempo de producción
4. El freelance que usa IA vs. el que no: cómo la brecha de productividad se convierte en brecha de precio

**Entregable:**
Diseña mi stack de IA personalizado: las 8 herramientas concretas que debo usar en mi especialidad, cómo integrarlas en mi flujo de trabajo semanal y el ahorro estimado de tiempo por tipo de tarea para que pueda calcular el ROI de adoptarlas.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 20,
                'use_case'         => 'Construir el stack de herramientas de IA para trabajar más rápido, con más calidad y mayor rentabilidad como freelance',
                'vote_score'       => 49,
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
