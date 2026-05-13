<?php

namespace Database\Seeders;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ScrapedSkillsSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [

            // ─────────────────────────────────────────
            // MARKETING
            // ─────────────────────────────────────────
            [
                'profession' => 'marketing',
                'title' => 'Calendario de contenido SEO para 12 meses',
                'description' => 'Genera un calendario editorial SEO completo para todo el año, con temas mensuales, artículos y oportunidades de enlazado interno.',
                'prompt_content' => "Actúa como un estratega de contenidos SEO con 10 años de experiencia.\n\nNecesito un calendario de contenido para 12 meses para:\n- Tipo de negocio: [DESCRIBE TU NEGOCIO]\n- Audiencia objetivo: [DESCRIBE TU AUDIENCIA]\n- Sector / Nicho: [TU SECTOR]\n- Objetivo principal: [TRÁFICO ORGÁNICO / LEADS / VENTAS]\n\nPara cada mes genera:\n1. Tema central del mes (vinculado a estacionalidad o tendencia del sector)\n2. 4 artículos de blog con:\n   - Título SEO-optimizado\n   - Keyword principal\n   - Intención de búsqueda (informacional / transaccional / navegacional)\n   - Sugerencia de enlazado interno\n3. 1 pieza de contenido pilar (guía larga, white paper, o comparativa)\n\nAl final incluye:\n- Top 5 keywords de cola larga a priorizar\n- 3 quick wins de contenido (artículos con baja competencia y búsqueda decente)",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Planificación trimestral o anual de estrategia de contenidos orgánicos.',
                'vote_score' => 187,
            ],
            [
                'profession' => 'marketing',
                'title' => 'Scripts de vídeo corto para TikTok e Instagram Reels',
                'description' => 'Genera 10 guiones de vídeo corto (menos de 60 segundos) optimizados para el algoritmo con hooks potentes y CTAs claros.',
                'prompt_content' => "Eres un experto en contenido viral para redes sociales, especializado en TikTok e Instagram Reels.\n\nCrea 10 guiones de vídeo corto (máx. 60 segundos cada uno) para:\n- Negocio / Marca: [DESCRIBE TU NEGOCIO]\n- Producto / Servicio: [PRODUCTO O SERVICIO]\n- Audiencia: [DESCRIBE TU PÚBLICO]\n- Tono: [EDUCATIVO / ENTRETENIMIENTO / INSPIRACIONAL / DIRECTO]\n\nCada guión debe incluir:\n1. **Hook** (primeros 3 segundos): frase que detenga el scroll\n2. **Desarrollo** (15-45 segundos): contenido de valor o narrativa\n3. **CTA** (últimos 5-10 segundos): acción clara y específica\n4. **Texto en pantalla sugerido**: los textos clave que aparecen como overlays\n5. **Tipo de formato**: talking head / B-roll / texto animado / tutorial\n\nVariedad: incluye al menos 3 educativos, 3 de entretenimiento/humor, 2 de prueba social, y 2 de producto.",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'beginner',
                'estimated_minutes' => 10,
                'use_case' => 'Producción semanal de contenido para redes sociales de corto formato.',
                'vote_score' => 143,
            ],
            [
                'profession' => 'marketing',
                'title' => 'Actualiza y optimiza artículos de blog existentes para 2025',
                'description' => 'Detecta qué cambiar en tus artículos antiguos para recuperar o mejorar posiciones en Google sin reescribirlos desde cero.',
                'prompt_content' => "Eres un consultor SEO especializado en content refresh.\n\nAnaliza el siguiente artículo de blog y dame un plan de actualización:\n\n[PEGA AQUÍ EL ARTÍCULO COMPLETO]\n\nKeyword objetivo actual: [KEYWORD]\nURL del artículo: [URL]\nFecha de publicación original: [FECHA]\n\nNecesito:\n\n## 1. DIAGNÓSTICO RÁPIDO\n- ¿Qué está desactualizado? (estadísticas, menciones de herramientas, fechas)\n- ¿Qué secciones faltan vs. el top 3 de Google para esta keyword?\n- ¿Hay oportunidades de featured snippet no aprovechadas?\n\n## 2. CAMBIOS PRIORITARIOS (impacto alto, esfuerzo bajo)\n- 5 cambios específicos que puedo hacer en menos de 1 hora\n\n## 3. MEJORAS DE CONTENIDO\n- Secciones nuevas a añadir\n- Preguntas frecuentes a incluir (People Also Ask)\n- Datos o estudios recientes a citar\n\n## 4. SEO TÉCNICO\n- Sugerencia de nuevo H1/title tag\n- Meta description optimizada\n- Oportunidades de enlazado interno\n\n## 5. PUNTUACIÓN ACTUAL vs. POTENCIAL\n- Nota actual /10 y proyección tras cambios",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Auditoría mensual de contenido para recuperar rankings perdidos.',
                'vote_score' => 121,
            ],
            [
                'profession' => 'marketing',
                'title' => 'Estrategia completa de email marketing para un lanzamiento',
                'description' => 'Diseña una secuencia de emails de lanzamiento de producto: pre-lanzamiento, lanzamiento y post-lanzamiento con asuntos y body copy.',
                'prompt_content' => "Eres un experto en email marketing con especialización en lanzamientos de productos digitales.\n\nCrea una secuencia completa de email marketing para:\n- Producto / servicio: [DESCRIBE EL PRODUCTO]\n- Precio: [PRECIO]\n- Audiencia: [LISTA DE SUSCRIPTORES / SEGMENTO]\n- Fecha de lanzamiento: [FECHA]\n- Duración del lanzamiento: [DÍAS]\n\nEstructura la secuencia en 3 fases:\n\n**FASE 1 — Pre-lanzamiento (7 días antes)**\n- Email 1 (D-7): Despierta curiosidad, no reveles el producto\n- Email 2 (D-4): Muestra el problema que resuelve\n- Email 3 (D-1): Anticipo final + urgencia\n\n**FASE 2 — Lanzamiento (días 1-3)**\n- Email 4 (D+0 mañana): Apertura oficial + beneficios clave\n- Email 5 (D+1): Testimonios o prueba social\n- Email 6 (D+2 tarde): Objeciones frecuentes + FAQ\n\n**FASE 3 — Cierre (últimas 24h)**\n- Email 7: Urgencia real (cierre en 24h)\n- Email 8: Último aviso (2h antes del cierre)\n\nPara cada email incluye: asunto principal, asunto alternativo para A/B test, preview text, y estructura del cuerpo (no el texto completo, sino el esqueleto con los puntos clave).",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'advanced',
                'estimated_minutes' => 25,
                'use_case' => 'Lanzamiento de producto digital, curso online, o servicio con fecha límite.',
                'vote_score' => 98,
            ],

            // ─────────────────────────────────────────
            // DESARROLLO
            // ─────────────────────────────────────────
            [
                'profession' => 'desarrollo',
                'title' => 'Diagnóstico experto de bugs con análisis de stack trace',
                'description' => 'Pega tu error y contexto para obtener causa raíz, solución paso a paso y estrategia de prevención.',
                'prompt_content' => "Eres un senior developer con 15 años de experiencia en debugging.\n\nAyúdame a diagnosticar este error:\n\n**Mensaje de error:**\n```\n[PEGA EL ERROR COMPLETO]\n```\n\n**Código relevante:**\n```[LENGUAJE]\n[PEGA EL CÓDIGO]\n```\n\n**Contexto:**\n- Lenguaje / Framework: [EJ: PHP 8.3 / Laravel 11]\n- Qué debería ocurrir: [COMPORTAMIENTO ESPERADO]\n- Qué ocurre en realidad: [COMPORTAMIENTO ACTUAL]\n- Qué he probado ya: [INTENTOS PREVIOS]\n- Cuándo ocurre: [SIEMPRE / INTERMITENTE / EN PRODUCCIÓN]\n\nProvee:\n1. **Causa raíz** — explicación exacta de por qué falla\n2. **Solución paso a paso** — código corregido con explicación\n3. **Por qué ocurrió** — explicación del mecanismo subyacente\n4. **Cómo prevenirlo** — buenas prácticas o test a añadir\n5. **Riesgos colaterales** — ¿puede este fix romper algo más?",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 8,
                'use_case' => 'Cuando llevas más de 20 minutos atascado en un error y necesitas un segundo par de ojos.',
                'vote_score' => 234,
            ],
            [
                'profession' => 'desarrollo',
                'title' => 'Refactoring de código aplicando principios SOLID',
                'description' => 'Transforma código legacy o mal estructurado en código limpio, mantenible y con nombres descriptivos.',
                'prompt_content' => "Eres un arquitecto de software especializado en clean code y SOLID principles.\n\nRefactoriza el siguiente código:\n\n```[LENGUAJE]\n[PEGA TU CÓDIGO]\n```\n\n**Contexto:**\n- Lenguaje / Framework: [LENGUAJE Y VERSIÓN]\n- Qué hace este código: [DESCRIPCIÓN FUNCIONAL]\n- Principales problemas que ya detectas: [SI LOS SABES]\n\nAplica estas mejoras en orden de prioridad:\n1. **Naming** — variables, funciones y clases con nombres que se explican solos\n2. **Single Responsibility** — cada función hace una sola cosa\n3. **Extracción de funciones** — eliminar duplicación (DRY)\n4. **Type hints** — añadir tipos en todos los parámetros y retornos\n5. **Early returns** — eliminar anidamiento innecesario\n6. **Dependency Injection** — eliminar dependencias hardcoded\n\nFormato de respuesta:\n- Código refactorizado completo\n- Lista de cambios realizados con justificación\n- Métricas: complejidad ciclomática antes vs. después\n- 1-2 refactorizaciones adicionales que podrías hacer en un paso 2",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 12,
                'use_case' => 'Antes de hacer una PR en código heredado o tras una revisión que detectó code smells.',
                'vote_score' => 176,
            ],
            [
                'profession' => 'desarrollo',
                'title' => 'Generador de documentación de API en formato OpenAPI/Swagger',
                'description' => 'Genera documentación completa de tu API con ejemplos de request/response, códigos de error y autenticación.',
                'prompt_content' => "Eres un experto en documentación técnica de APIs REST.\n\nGenera documentación completa en formato [OPENAPI 3.0 / MARKDOWN / POSTMAN] para esta API:\n\n```[LENGUAJE]\n[PEGA EL CÓDIGO DE TUS ENDPOINTS]\n```\n\nPara cada endpoint incluye:\n1. **Descripción** — qué hace y cuándo usarlo\n2. **Método HTTP y ruta**\n3. **Autenticación requerida** — tipo y cómo enviarla\n4. **Parámetros de request:**\n   - Path params\n   - Query params\n   - Body (con schema JSON y tipos)\n   - Headers requeridos\n5. **Respuestas:**\n   - 200/201: schema completo con ejemplo real\n   - 400: errores de validación con estructura\n   - 401/403: casos de autenticación/autorización\n   - 404/422/500: descripción y cuándo ocurre\n6. **Ejemplo de código** en: cURL, JavaScript (fetch), y Python (requests)\n\nAdemás incluye una sección inicial con:\n- Base URL y versionado\n- Rate limiting\n- Convenciones de la API",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Documentar una API antes de entregarla a otro equipo o publicarla.',
                'vote_score' => 145,
            ],
            [
                'profession' => 'desarrollo',
                'title' => 'Diseño de arquitectura de microservicios',
                'description' => 'Obtén un diseño completo de arquitectura de microservicios con separación de responsabilidades, comunicación y estrategia de datos.',
                'prompt_content' => "Eres un arquitecto de software senior especializado en sistemas distribuidos.\n\nDiseña una arquitectura de microservicios para:\n\n**Aplicación:** [DESCRIBE LA APLICACIÓN]\n**Escala esperada:** [USUARIOS CONCURRENTES / REQUESTS POR SEGUNDO]\n**Funcionalidades principales:** [LISTA LAS FEATURES CLAVE]\n**Stack tecnológico preferido:** [TUS PREFERENCIAS O RESTRICCIONES]\n\nEl diseño debe incluir:\n\n## 1. SEPARACIÓN DE SERVICIOS\n- Lista de microservicios con responsabilidad única de cada uno\n- Justificación de los límites de cada servicio (bounded contexts)\n\n## 2. COMUNICACIÓN\n- Patrones síncronos (REST/gRPC): cuándo y entre qué servicios\n- Patrones asíncronos (eventos/mensajes): broker recomendado y casos de uso\n- API Gateway: qué gestiona y cómo\n\n## 3. DATOS\n- Base de datos por servicio vs. compartida: recomendación justificada\n- Estrategia de consistencia eventual\n- Gestión de transacciones distribuidas (Saga pattern si aplica)\n\n## 4. RESILIENCIA\n- Circuit breaker, retry, timeout: dónde aplicar\n- Estrategia de fallback para servicios críticos\n\n## 5. OBSERVABILIDAD\n- Logging centralizado, tracing distribuido, métricas\n- Herramientas recomendadas\n\n## 6. DESPLIEGUE\n- Containerización y orquestación sugerida\n- CI/CD por servicio",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 30,
                'use_case' => 'Fase de diseño de un nuevo sistema o migración de monolito a microservicios.',
                'vote_score' => 112,
            ],

            // ─────────────────────────────────────────
            // DISEÑO
            // ─────────────────────────────────────────
            [
                'profession' => 'diseno',
                'title' => 'Brief creativo completo para identidad visual de marca',
                'description' => 'Genera un brief creativo detallado para diseñar o rediseñar una identidad de marca: logo, paleta, tipografía y tono visual.',
                'prompt_content' => "Eres un director creativo con experiencia en branding para startups y empresas consolidadas.\n\nCrea un brief creativo completo para la identidad visual de:\n\n**Empresa/Marca:** [NOMBRE]\n**Sector:** [SECTOR]\n**Público objetivo:** [DESCRIBE EL PÚBLICO]\n**Valores de marca:** [3-5 VALORES CLAVE]\n**Competidores directos:** [2-3 COMPETIDORES]\n**Lo que nos diferencia:** [PROPUESTA DIFERENCIADORA]\n\nEl brief debe incluir:\n\n## POSICIONAMIENTO VISUAL\n- Adjetivos que debe transmitir la identidad (ej: moderno, cálido, confiable)\n- Adjetivos que debe EVITAR transmitir\n- Referencias visuales de marcas inspiradoras (fuera del sector) y por qué\n\n## SISTEMA DE COLOR\n- Color primario con justificación psicológica\n- Paleta secundaria (3-4 colores)\n- Combinaciones aprobadas y prohibidas\n- Casos de uso por color\n\n## TIPOGRAFÍA\n- Familia tipográfica principal (display/headlines)\n- Familia secundaria (cuerpo de texto)\n- Jerarquía tipográfica: H1, H2, H3, body, caption\n- Alternativas gratuitas (Google Fonts)\n\n## LOGO\n- Concepto/símbolo recomendado y justificación\n- Variantes necesarias: principal, horizontal, ícono, monograma\n- Usos incorrectos a evitar\n\n## TONO VISUAL GENERAL\n- Estilo fotográfico\n- Estilo de ilustraciones/iconografía\n- Patrones o texturas sugeridas",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Inicio de proyecto de identidad de marca o rebrand.',
                'vote_score' => 156,
            ],
            [
                'profession' => 'diseno',
                'title' => 'Prompt maestro para Midjourney: identidad visual consistente',
                'description' => 'Genera una serie de prompts de Midjourney coherentes entre sí para construir una identidad visual de marca completa.',
                'prompt_content' => "Eres un experto en prompt engineering para Midjourney v6/v7 y dirección de arte.\n\nNecesito crear una identidad visual consistente para:\n- Marca: [NOMBRE DE LA MARCA]\n- Sector: [SECTOR]\n- Estilo visual objetivo: [EJ: minimalista tech / cálido artesanal / futurista premium]\n- Paleta de colores: [COLORES HEX O DESCRIPCIÓN]\n- Referentes: [2-3 MARCAS CON ESTILO SIMILAR]\n\nGenera los siguientes prompts de Midjourney (listos para copiar y pegar):\n\n1. **Logo concept** — símbolo/ícono de la marca\n2. **Hero image** — imagen principal para web o campaña\n3. **Product photography style** — estilo para fotos de producto\n4. **Social media template style** — fondo y elementos para posts\n5. **Team/People photography** — estilo de fotos corporativas\n6. **Pattern/texture** — textura o patrón repetible para fondos\n\nPara cada prompt incluye:\n- Prompt principal (detallado, 50-80 palabras)\n- Parámetros recomendados: --ar, --style, --v, --q\n- Variaciones negativas (--no)\n- Tip para iterar si el resultado no es el esperado\n\nMantén coherencia de estilo entre todos los prompts.",
                'tool_name' => 'Midjourney',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Generación de assets visuales para nueva marca o campaña en pocas horas.',
                'vote_score' => 203,
            ],
            [
                'profession' => 'diseno',
                'title' => 'Análisis de UX y sugerencias de mejora para una pantalla',
                'description' => 'Obtén un análisis crítico de UX de cualquier pantalla o flujo con priorización de problemas y soluciones concretas.',
                'prompt_content' => "Eres un experto en UX/UI con experiencia en heurísticas de Nielsen y diseño centrado en el usuario.\n\nAnaliza el siguiente diseño / pantalla:\n\n[DESCRIBE LA PANTALLA O PEGA EL ENLACE A FIGMA/SCREENSHOT]\n\n**Contexto:**\n- Tipo de producto: [APP MÓVIL / WEB APP / LANDING PAGE]\n- Objetivo de esta pantalla: [QUÉ DEBE CONSEGUIR EL USUARIO]\n- Usuario objetivo: [PERFIL DE USUARIO]\n- Dispositivo principal: [MÓVIL / DESKTOP / AMBOS]\n\nEvalúa según las 10 heurísticas de Nielsen y devuelve:\n\n## PROBLEMAS CRÍTICOS (bloquean la tarea)\n[Máximo 3, con explicación y solución concreta]\n\n## PROBLEMAS MAYORES (dificultan la experiencia)\n[Máximo 5, con explicación y solución concreta]\n\n## MEJORAS RÁPIDAS (quick wins)\n[Cambios en menos de 1h de implementación]\n\n## LO QUE FUNCIONA BIEN\n[Para no romper lo que ya está bien]\n\n## PROPUESTA DE REDISEÑO\n[Descripción textual de cómo quedaría la pantalla mejorada]\n\nPuntúa la pantalla actual: /10 en usabilidad, claridad visual, y jerarquía de información.",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Review de diseño antes de pasar a desarrollo o tras recibir feedback de usuarios.',
                'vote_score' => 134,
            ],

            // ─────────────────────────────────────────
            // VENTAS
            // ─────────────────────────────────────────
            [
                'profession' => 'ventas',
                'title' => 'Respuesta perfecta a la objeción "es muy caro"',
                'description' => 'Genera una respuesta de 200 palabras que defiende el precio con ROI, valor a largo plazo y prueba social sin sonar defensivo.',
                'prompt_content' => "Eres un experto en ventas B2B con 10 años de experiencia en cierre de deals de alto valor.\n\nEl prospecto acaba de decir: \"Vuestro precio es demasiado alto.\"\n\nContexto de la venta:\n- Producto/servicio: [DESCRIBE LO QUE VENDES]\n- Precio: [PRECIO O RANGO]\n- Competidor principal con el que te comparan: [COMPETIDOR Y SU PRECIO APROX]\n- Dolor principal del cliente que resuelves: [DOLOR PRINCIPAL]\n- ROI o ahorro típico que obtienen tus clientes: [MÉTRICA DE VALOR]\n- Tipo de cliente: [EMPRESA / TAMAÑO / SECTOR]\n\nCrea una respuesta de 150-200 palabras que:\n1. **No sea defensiva** — valida la preocupación sin disculparte\n2. **Reencuadre el precio como inversión** — coste de NO comprarte vs. comprarte\n3. **Use ROI concreto** — número específico basado en el dato que te di\n4. **Incluya prueba social** — cómo lo han resuelto otros clientes similares\n5. **Cierre con pregunta** — para cualificar si el precio es la barrera real o hay otra objeción detrás\n\nAdemás, dame 2 preguntas de discovery para entender si es una objeción de precio real o de valor percibido.",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 5,
                'use_case' => 'Preparación antes de una demo o llamada de cierre donde el precio es un obstáculo frecuente.',
                'vote_score' => 178,
            ],
            [
                'profession' => 'ventas',
                'title' => 'Preguntas de discovery para cualificar y entender urgencia',
                'description' => 'Genera preguntas de discovery estructuradas para cuantificar el impacto del problema y el nivel de urgencia del prospecto.',
                'prompt_content' => "Eres un experto en metodologías de ventas consultivas (SPIN, MEDDIC, Challenger Sale).\n\nNecesito preguntas de discovery para una llamada con:\n- Cargo del prospecto: [CARGO]\n- Empresa: [TIPO Y TAMAÑO DE EMPRESA]\n- Problema que probablemente tienen: [DOLOR PRINCIPAL]\n- Mi producto/servicio: [LO QUE VENDO]\n- Fase de la venta: [PRIMERA LLAMADA / DEMO / NEGOCIACIÓN]\n\nGenera:\n\n## PREGUNTAS DE SITUACIÓN (entender el contexto actual)\n5 preguntas para mapear su proceso actual sin que parezca un interrogatorio.\n\n## PREGUNTAS DE PROBLEMA (hacer aflorar el dolor)\n5 preguntas que les hagan articular el coste y la frustración de su situación actual.\n\n## PREGUNTAS DE IMPLICACIÓN (amplificar el dolor)\n4 preguntas que conecten el problema con consecuencias de negocio mayores (revenue, tiempo, moral del equipo).\n\n## PREGUNTAS DE VALOR (proyectar el beneficio)\n4 preguntas que les hagan visualizar cómo sería su vida con el problema resuelto.\n\n## PREGUNTAS DE URGENCIA Y DECISIÓN\n3 preguntas para entender timeline, proceso de decisión y presupuesto disponible.\n\nAl final: secuencia recomendada de 8-10 preguntas para una llamada de 30 minutos.",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 8,
                'use_case' => 'Preparación de llamadas de discovery o demos para cualificar mejor y personalizar el pitch.',
                'vote_score' => 156,
            ],
            [
                'profession' => 'ventas',
                'title' => 'Email de seguimiento post-demo que mantiene momentum',
                'description' => 'Genera un email de follow-up tras una demo que resume los pain points, propone siguientes pasos y mantiene el deal caliente.',
                'prompt_content' => "Eres un experto en ventas B2B especializado en mantener deals activos y acelerar ciclos de venta.\n\nNecesito un email de seguimiento post-demo para:\n- Nombre del prospecto: [NOMBRE Y CARGO]\n- Empresa: [EMPRESA]\n- Producto/servicio presentado: [LO QUE DEMOSTRASTE]\n- 3 pain points principales mencionados en la llamada: [PAIN 1 / PAIN 2 / PAIN 3]\n- Siguientes pasos acordados: [LO QUE SE ACORDÓ AL FINAL DE LA DEMO]\n- Próxima reunión o deadline: [FECHA SI LA HAY]\n- Objeción principal que surgió: [OBJECIÓN SI LA HUBO]\n\nEscribe un email que:\n1. **Asunto** — memorable, que no suene a plantilla de CRM\n2. **Apertura** — referencia específica a algo dicho en la demo (personalización real)\n3. **Resumen de valor** — los 3 pain points vinculados a cómo los resuelves (en bullets)\n4. **Next step claro** — una sola acción, no varias opciones\n5. **P.D.** — dato, artículo o caso de estudio relevante para su sector\n\nMáximo 180 palabras. Tono: profesional pero humano, no corporativo.",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'beginner',
                'estimated_minutes' => 5,
                'use_case' => 'Inmediatamente después de una demo o reunión de ventas para mantener el momentum.',
                'vote_score' => 134,
            ],

            // ─────────────────────────────────────────
            // PRODUCT MANAGEMENT
            // ─────────────────────────────────────────
            [
                'profession' => 'product-management',
                'title' => 'Generador de user stories con criterios de aceptación y edge cases',
                'description' => 'Transforma cualquier feature o requisito en user stories bien escritas con criterios de aceptación, edge cases y requisitos no funcionales.',
                'prompt_content' => "Eres un Senior Product Manager con experiencia en metodologías ágiles y escritura de requisitos.\n\nConvierte el siguiente requisito en user stories:\n\n**Feature / Requisito:** [DESCRIBE LA FEATURE EN 2-3 FRASES]\n**Tipo de usuario:** [PERFIL DEL USUARIO QUE LA USA]\n**Contexto del producto:** [NOMBRE Y TIPO DE PRODUCTO]\n**Restricciones técnicas conocidas:** [SI LAS HAY]\n\nPara cada user story, usa este formato:\n\n---\n**US-[N]: [TÍTULO CORTO]**\n\nComo [tipo de usuario],\nQuiero [acción o capacidad],\nPara [beneficio o valor obtenido].\n\n**Criterios de aceptación:**\n- Dado [contexto inicial]\n  Cuando [acción del usuario]\n  Entonces [resultado esperado]\n[Repite para cada escenario principal]\n\n**Edge cases a considerar:**\n- [Lista de casos límite y comportamiento esperado]\n\n**Requisitos no funcionales:**\n- Performance: [si aplica]\n- Seguridad: [si aplica]\n- Accesibilidad: [si aplica]\n\n**Estimación de complejidad:** [XS/S/M/L/XL con justificación]\n\n---\n\nGenera entre 3 y 6 user stories que cubran el flujo completo, incluyendo happy path y casos de error.",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Sprint planning, grooming de backlog o antes de pasar features a desarrollo.',
                'vote_score' => 189,
            ],
            [
                'profession' => 'product-management',
                'title' => 'RICE scoring para priorizar features del backlog',
                'description' => 'Puntúa y prioriza tu backlog usando el framework RICE con contexto real de tu producto para tomar decisiones objetivas.',
                'prompt_content' => "Eres un Senior PM experto en priorización de producto y frameworks de decisión.\n\nAyúdame a priorizar estas features usando el framework RICE:\n\n**Features a evaluar:**\n1. [FEATURE 1]\n2. [FEATURE 2]\n3. [FEATURE 3]\n4. [FEATURE 4]\n5. [FEATURE 5]\n\n**Contexto del producto:**\n- Usuarios activos mensuales: [MAU]\n- Segmento principal: [B2B / B2C / AMBOS]\n- OKR actual del trimestre: [OBJETIVO PRINCIPAL]\n- Capacidad del equipo: [Nº DEVS Y SEMANAS DISPONIBLES]\n\nPara cada feature, estima y justifica:\n- **Reach** (usuarios impactados en el próximo trimestre)\n- **Impact** (escala 0.25 / 0.5 / 1 / 2 / 3)\n- **Confidence** (% de confianza en las estimaciones: 50% / 80% / 100%)\n- **Effort** (semanas-persona)\n- **RICE Score** = (Reach × Impact × Confidence) / Effort\n\nAl final:\n1. Ranking priorizado de las 5 features\n2. Features que deberían descartarse o posponerse con justificación\n3. Feature recomendada para el próximo sprint y por qué\n4. Riesgos o asunciones clave que cambiarían la priorización",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Sesiones de planificación trimestral o cuando el backlog está desbordado.',
                'vote_score' => 167,
            ],
            [
                'profession' => 'product-management',
                'title' => 'Análisis de feedback de usuarios: extrae insights accionables',
                'description' => 'Procesa cientos de reviews, tickets o respuestas de encuesta y obtén los temas principales, sentimiento y acciones de producto concretas.',
                'prompt_content' => "Eres un PM experto en investigación de usuarios y análisis cualitativo de feedback.\n\nAnaliza el siguiente feedback de usuarios:\n\n[PEGA AQUÍ: reviews de app store, tickets de soporte, respuestas de encuesta, o entrevistas]\n\n**Contexto:**\n- Fuente del feedback: [APP STORE / ENCUESTA NPS / TICKETS / ENTREVISTAS]\n- Período: [RANGO DE FECHAS]\n- Segmento de usuarios: [TODOS / SEGMENTO ESPECÍFICO]\n- Pregunta o métrica de contexto: [SI APLICA]\n\nDevuelve:\n\n## RESUMEN EJECUTIVO (3 líneas)\n\n## TEMAS PRINCIPALES\n| Tema | Frecuencia | Sentimiento | Urgencia |\n|------|-----------|-------------|----------|\n[Tabla con los top 8-10 temas]\n\n## TOP 3 PROBLEMAS CRÍTICOS\nCada uno con: descripción, citas textuales representativas, y propuesta de solución de producto.\n\n## QUICK WINS (resolvibles en 1 sprint)\n\n## SEÑALES DE CHURN RISK\nFeedback que indica usuarios a punto de abandonar el producto.\n\n## OPORTUNIDADES DE EXPANSIÓN\nPatrones que sugieren features nuevas o casos de uso no contemplados.\n\n## ACCIONES RECOMENDADAS\nPrioridad 1, 2 y 3 con owner sugerido (producto / engineering / CS / marketing).",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 10,
                'use_case' => 'Síntesis mensual de voz del cliente para alimentar el roadmap.',
                'vote_score' => 145,
            ],

            // ─────────────────────────────────────────
            // RRHH
            // ─────────────────────────────────────────
            [
                'profession' => 'rrhh',
                'title' => 'Plan de onboarding personalizado de 30/60/90 días',
                'description' => 'Crea un plan de onboarding estructurado para cualquier posición con hitos claros, recursos y check-ins.',
                'prompt_content' => "Actúa como un especialista en onboarding y employee experience con experiencia en empresas de rápido crecimiento.\n\nCrea un plan de onboarding completo de 90 días para:\n\n**Posición:** [TÍTULO DEL PUESTO]\n**Empresa:** [NOMBRE Y TAMAÑO]\n**Equipo al que se incorpora:** [EQUIPO Y MANAGER]\n**Modalidad:** [PRESENCIAL / REMOTO / HÍBRIDO]\n\nEstructura el plan en tres bloques:\n\n## PRIMEROS 30 DÍAS — Aprender y escuchar\n**Objetivo:** entender el contexto, las personas y los procesos\n- Semana 1: primeros pasos (sistemas, accesos, presentaciones clave)\n- Semanas 2-4: deep dives por área, shadowing, lecturas esenciales\n- Hito de 30 días: qué debe saber, hacer y tener claro al terminar este bloque\n- Check-in sugerido: preguntas para la reunión 1:1 con el manager\n\n## DÍAS 31-60 — Contribuir con supervisión\n**Objetivo:** primeras contribuciones reales con apoyo\n- Proyectos o tareas de baja-media complejidad para practicar\n- Relaciones clave a construir fuera del equipo inmediato\n- Hito de 60 días\n- Check-in sugerido\n\n## DÍAS 61-90 — Operar con autonomía\n**Objetivo:** funcionar de forma independiente\n- Responsabilidades plenas asumidas\n- Primer proyecto o entregable de impacto real\n- Hito de 90 días: criterios de éxito para considerar el onboarding exitoso\n- Evaluación 90 días: 5 preguntas para el manager y 5 para el nuevo empleado\n\nAl final: lista de recursos, documentación y personas clave que debe conocer.",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Preparar el onboarding de nuevas incorporaciones, especialmente en roles técnicos o de liderazgo.',
                'vote_score' => 172,
            ],
            [
                'profession' => 'rrhh',
                'title' => 'Generador de preguntas de entrevista por competencias',
                'description' => 'Crea una guía completa de entrevista por competencias para cualquier posición con preguntas STAR y criterios de evaluación.',
                'prompt_content' => "Eres un experto en selección de personal y entrevistas por competencias (metodología STAR).\n\nCrea una guía de entrevista para:\n\n**Posición:** [TÍTULO DEL PUESTO]\n**Seniority:** [JUNIOR / MID / SENIOR / LEAD]\n**Sector:** [SECTOR DE LA EMPRESA]\n**Competencias críticas para el rol:** [LISTA 4-5 COMPETENCIAS CLAVE]\n\nGenera:\n\n## ESTRUCTURA DE LA ENTREVISTA (60-90 min)\n\n### Apertura (5 min)\n- Presentación del evaluador\n- Contexto de la empresa y el rol\n- Explicación del formato STAR al candidato\n\n### Por cada competencia (8-10 min cada una):\n**[COMPETENCIA]**\n- Pregunta principal: (formato STAR)\n- Preguntas de profundización: (si la respuesta es superficial)\n- Señales positivas a buscar: (comportamientos que indican la competencia)\n- Señales de alerta: (red flags)\n- Puntuación: 1-4 con descriptores por nivel\n\n### Preguntas del candidato (10 min)\n- 3 preguntas que hacen los buenos candidatos (para evaluar su nivel de investigación)\n\n### Cierre (5 min)\n- Próximos pasos del proceso\n\n## SCORECARD DE EVALUACIÓN\nTabla resumen para comparar candidatos objetivamente.",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Preparación de procesos de selección para reducir el sesgo y mejorar la calidad de la evaluación.',
                'vote_score' => 148,
            ],
            [
                'profession' => 'rrhh',
                'title' => 'Análisis de entrevistas de salida: detecta patrones de fuga de talento',
                'description' => 'Sintetiza múltiples entrevistas de salida para identificar causas raíz de rotación y proponer acciones de retención.',
                'prompt_content' => "Actúa como un VP of People analizando la rotación de talento en la empresa.\n\nAnaliza las siguientes notas de entrevistas de salida:\n\n[PEGA AQUÍ LAS NOTAS O RESPUESTAS DE LAS ENTREVISTAS DE SALIDA]\n\n**Contexto:**\n- Período analizado: [FECHAS]\n- Número de salidas: [Nº]\n- Departamentos afectados: [ÁREAS]\n- Tasa de rotación actual: [%] vs. benchmark del sector: [%]\n\nDevuelve:\n\n## RESUMEN EJECUTIVO\n(3-4 líneas para presentar a dirección)\n\n## CAUSAS RAÍZ POR FRECUENCIA\n(Tabla: causa / % de menciones / ejemplos de citas textuales)\n\n## SEGMENTACIÓN\n- ¿Hay patrones por departamento?\n- ¿Por seniority?\n- ¿Por tiempo en empresa?\n\n## CAUSAS CONTROLABLES vs. NO CONTROLABLES\n(Lo que podemos mejorar vs. lo que no depende de nosotros)\n\n## PLAN DE ACCIÓN RECOMENDADO\n- Acciones inmediatas (próximas 2 semanas)\n- Acciones a 90 días\n- Métricas para medir el impacto\n\n## COSTE ESTIMADO DE LA ROTACIÓN\n(Basado en el regla general: 50-200% del salario anual del empleado)",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Revisión trimestral de retención o tras un período de alta rotación.',
                'vote_score' => 119,
            ],

            // ─────────────────────────────────────────
            // FINANZAS
            // ─────────────────────────────────────────
            [
                'profession' => 'finanzas',
                'title' => 'Estructura de modelo financiero para una startup',
                'description' => 'Obtén la arquitectura completa de un modelo financiero con todas las pestañas, supuestos y outputs necesarios para una startup.',
                'prompt_content' => "Eres un CFO y modelo financiero experto con experiencia en startups de Series A y B.\n\nCrea la estructura de un modelo financiero completo para:\n\n**Empresa:** [NOMBRE]\n**Modelo de negocio:** [EJ: SaaS B2B / Marketplace / E-commerce]\n**Etapa:** [PRE-REVENUE / SEED / SERIES A]\n**Período:** [3 o 5 años]\n**Moneda:** [EUR / USD]\n\nProporciona la arquitectura completa con:\n\n## HOJA 1 — SUPUESTOS (Assumptions)\nLista todos los inputs que deben parametrizarse:\n- Revenue drivers (por línea de negocio)\n- Métricas de adquisición de clientes (CAC, CVR, canales)\n- Unit economics (ARPU, churn, LTV)\n- COGS como % de revenue\n- Headcount y salarios por departamento\n- Opex por categoría\n- Capex e inversiones\n- Condiciones de financiación\n\n## HOJA 2 — P&L (Income Statement)\nEstructura línea a línea con fórmulas lógicas\n\n## HOJA 3 — CASH FLOW\nCash flow operativo, de inversión y financiero\n\n## HOJA 4 — BALANCE\nActivos, pasivos y patrimonio\n\n## HOJA 5 — MÉTRICAS SaaS / KPIs\n(MRR, ARR, churn, NRR, CAC payback, Rule of 40)\n\n## HOJA 6 — DASHBOARD\nGráficos clave para presentar a inversores\n\n## HOJA 7 — SCENARIOS\nCaso base, optimista y pesimista\n\nAdemás: lista de errores comunes a evitar en modelos financieros de startups.",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 30,
                'use_case' => 'Construcción de modelo financiero para fundraising o planificación anual.',
                'vote_score' => 134,
            ],
            [
                'profession' => 'finanzas',
                'title' => 'Comentario de varianza presupuestaria para reportes ejecutivos',
                'description' => 'Genera comentarios ejecutivos de varianza budget vs. real listos para incluir en reportes de board o management.',
                'prompt_content' => "Eres un Controller financiero experto en comunicación ejecutiva y reportes de management.\n\nGenera el comentario de varianza para el siguiente resultado:\n\n**Período:** [MES / TRIMESTRE / AÑO]\n**Datos:**\n- Revenue real: [X] vs. budget: [Y] → varianza: [+/-Z] ([+/-W%])\n- EBITDA real: [X] vs. budget: [Y] → varianza: [+/-Z]\n- Principales líneas de gasto con varianza significativa:\n  * [LÍNEA 1]: real [X] vs. budget [Y]\n  * [LÍNEA 2]: real [X] vs. budget [Y]\n  * [LÍNEA 3]: real [X] vs. budget [Y]\n- Contexto relevante: [EVENTOS DEL PERÍODO: lanzamientos, estacionalidad, hires, etc.]\n\nGenera:\n\n## COMENTARIO EJECUTIVO (máx. 150 palabras)\n(Listo para copiar en el report de board — lenguaje conciso, sin jerga innecesaria)\n\n## ANÁLISIS DE CAUSAS\nPor cada varianza significativa:\n- Causa principal\n- Naturaleza: estructural (permanente) o puntual (no recurrente)\n- Acción correctiva si aplica\n\n## OUTLOOK\nImplicaciones para el resto del año y revisión de forecast si procede\n\n## TABLA DE VARIANZAS\n| Línea | Budget | Real | € Var | % Var | Causa |\n|-------|--------|------|-------|-------|-------|",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 10,
                'use_case' => 'Cierre mensual o trimestral para preparar el management report.',
                'vote_score' => 112,
            ],

            // ─────────────────────────────────────────
            // LEGAL
            // ─────────────────────────────────────────
            [
                'profession' => 'legal',
                'title' => 'Revisión de contrato: detecta cláusulas de riesgo',
                'description' => 'Analiza cualquier contrato comercial e identifica cláusulas problemáticas, desequilibrios y puntos de negociación.',
                'prompt_content' => "Actúa como un abogado mercantilista con 15 años de experiencia en contratos comerciales B2B.\n\nRevisa el siguiente contrato e identifica riesgos:\n\n[PEGA EL CONTRATO COMPLETO O LAS SECCIONES RELEVANTES]\n\n**Contexto:**\n- Quién soy en el contrato: [PROVEEDOR / CLIENTE / SOCIO]\n- Tipo de contrato: [SERVICIOS / SUMINISTRO / LICENCIA / NDA / OTRO]\n- Sector: [SECTOR]\n- Valor económico del contrato: [IMPORTE ANUAL APROX]\n- Preocupaciones específicas: [SI LAS TIENES]\n\nAnaliza y devuelve:\n\n## 🔴 CLÁUSULAS DE RIESGO ALTO\n(Pueden causarte daño económico o legal significativo)\nPara cada una: qué dice, por qué es problemática, y cómo pedir que se modifique.\n\n## 🟡 CLÁUSULAS A NEGOCIAR\n(Desequilibradas pero no críticas)\nPropuesta de redacción alternativa para cada una.\n\n## 🟢 CLÁUSULAS QUE FALTAN\n(Protecciones estándar que debería incluir este contrato)\n\n## RESUMEN EJECUTIVO\n¿Firmarías este contrato tal como está? ¿Qué 3 cambios son innegociables?\n\n**AVISO:** Este análisis es orientativo. Consulta con un abogado colegiado antes de firmar.",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Primera revisión de contratos antes de involucrar a asesoría externa, para ir ya con los puntos clave identificados.',
                'vote_score' => 198,
            ],
            [
                'profession' => 'legal',
                'title' => 'Redacción de cláusulas de protección de datos (RGPD)',
                'description' => 'Genera cláusulas de protección de datos conformes con el RGPD para incluir en contratos, webs o políticas internas.',
                'prompt_content' => "Eres un abogado especializado en protección de datos y cumplimiento RGPD en la UE.\n\nNecesito cláusulas de protección de datos para:\n\n**Tipo de documento:** [CONTRATO DE SERVICIOS / POLÍTICA DE PRIVACIDAD WEB / ACUERDO INTERNO]\n**Empresa responsable del tratamiento:** [NOMBRE Y PAÍS]\n**Tipo de datos personales tratados:** [EJ: datos de empleados, datos de clientes, datos de menores]\n**Finalidad del tratamiento:** [PARA QUÉ SE USAN LOS DATOS]\n**Encargados de tratamiento externos:** [PROVEEDORES DE CLOUD, CRM, ETC.]\n**Transferencias internacionales:** [SÍ/NO — a qué países]\n\nGenera:\n\n## CLÁUSULA DE PROTECCIÓN DE DATOS\n(Redacción completa lista para insertar en el contrato)\n\n## POLÍTICA DE PRIVACIDAD RESUMIDA\n(Para incluir en footer de web o comunicaciones — versión corta)\n\n## CHECKLIST DE CUMPLIMIENTO\n¿Qué más necesitas para cumplir el RGPD en este caso concreto?\n- Registros de actividades de tratamiento\n- Contratos con encargados\n- Evaluación de impacto (¿es necesaria?)\n- Base legal del tratamiento\n\n**AVISO:** Este texto es un punto de partida. Valídalo con un DPO o asesor legal.",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Preparar documentación de cumplimiento RGPD para nuevos productos, contratos o políticas.',
                'vote_score' => 143,
            ],

            // ─────────────────────────────────────────
            // CUSTOMER SUPPORT
            // ─────────────────────────────────────────
            [
                'profession' => 'customer-support',
                'title' => 'Respuesta empática a cliente enfadado que amenaza con irse',
                'description' => 'Genera respuestas de soporte que desescalan la situación, reconocen el problema y proponen soluciones concretas sin prometer imposibles.',
                'prompt_content' => "Eres un experto en customer service con formación en comunicación no violenta y gestión de conflictos.\n\nNecesito responder a este mensaje de un cliente enfadado:\n\n[PEGA EL MENSAJE DEL CLIENTE]\n\n**Contexto:**\n- Problema real del cliente: [QUÉ PASÓ EXACTAMENTE]\n- ¿Fue error nuestro o del cliente?: [NUESTRO / SUYO / EXTERNO]\n- Solución que podemos ofrecer: [LO QUE PUEDES HACER]\n- Solución que NO podemos ofrecer: [LO QUE NO PUEDES HACER]\n- Valor del cliente (LTV / plan): [SI ES RELEVANTE]\n- Tono de la empresa: [FORMAL / CERCANO / TÉCNICO]\n\nGenera 2 versiones de respuesta:\n\n**VERSIÓN A — Conciliadora**\n(Para cuando la relación con el cliente es prioritaria)\n- Reconocimiento del problema sin admitir culpa innecesaria\n- Empatía genuina (no corporativa)\n- Solución concreta o próximo paso claro\n- Cierre que recupera la confianza\n\n**VERSIÓN B — Directa y resolutiva**\n(Para cuando el cliente quiere soluciones, no disculpas)\n- Ir directo al grano con la solución\n- Sin relleno emocional excesivo\n- CTA claro\n\nAdemás: 1 frase que NUNCA debes escribir en este contexto y por qué.",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'beginner',
                'estimated_minutes' => 5,
                'use_case' => 'Responder tickets de clientes insatisfechos o en riesgo de churn.',
                'vote_score' => 167,
            ],
            [
                'profession' => 'customer-support',
                'title' => 'Clasificación y triaje automático de tickets de soporte',
                'description' => 'Clasifica tickets de soporte automáticamente por categoría, urgencia y tipo de resolución para optimizar el routing del equipo.',
                'prompt_content' => "Eres un experto en operaciones de customer support y sistemas de ticketing.\n\nClasifica el siguiente ticket de soporte:\n\n[PEGA EL MENSAJE/TICKET DEL CLIENTE]\n\n**Contexto de la empresa:**\n- Producto/servicio: [DESCRIBE EL PRODUCTO]\n- Categorías de soporte existentes: [FACTURACIÓN / TÉCNICO / CUENTA / ONBOARDING / OTRO]\n- Niveles de soporte: [TIER 1 / TIER 2 / TIER 3]\n- SLA por urgencia: Crítico: [Xh] / Alto: [Xh] / Normal: [Xh]\n\nDevuelve en formato estructurado:\n\n**CATEGORÍA:** [categoría principal]\n**SUBCATEGORÍA:** [más específico]\n**URGENCIA:** [Crítica / Alta / Normal / Baja] + justificación\n**TIER RECOMENDADO:** [1/2/3] + por qué\n**SENTIMIENTO DEL CLIENTE:** [Muy negativo / Negativo / Neutro / Positivo]\n**INTENCIÓN DETECTADA:** [Problema técnico / Queja / Pregunta / Cancelación / Fraude / Otro]\n**REQUIERE ESCALADO:** [Sí/No] + razón si es Sí\n**RESPUESTA SUGERIDA:** Borrador de respuesta inicial (máx. 80 palabras)\n**TIEMPO ESTIMADO DE RESOLUCIÓN:** [estimación]\n**ARTÍCULO DE AYUDA RELACIONADO:** [si puedes inferirlo]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 3,
                'use_case' => 'Triaje de inbox de soporte o entrenamiento de modelos de clasificación de tickets.',
                'vote_score' => 145,
            ],
            [
                'profession' => 'customer-support',
                'title' => 'Generador de FAQ base de conocimiento desde tickets resueltos',
                'description' => 'Convierte un lote de tickets resueltos en artículos de FAQ estructurados para reducir el volumen de soporte repetitivo.',
                'prompt_content' => "Eres un experto en knowledge management y self-service para equipos de customer support.\n\nAnaliza estos tickets resueltos y convierte los más frecuentes en artículos de FAQ:\n\n[PEGA AQUÍ 10-30 TICKETS RESUELTOS CON SUS RESPUESTAS]\n\n**Contexto:**\n- Producto/servicio: [DESCRIBE EL PRODUCTO]\n- Audiencia de la FAQ: [USUARIOS FINALES / PARTNERS / TÉCNICOS]\n- Tono de comunicación: [FORMAL / CERCANO / TÉCNICO]\n- Plataforma donde se publicará: [HELPDESK / WEB / CHATBOT]\n\nDevuelve:\n\n## ANÁLISIS DE FRECUENCIA\nTop 10 preguntas más repetidas con % de aparición estimado.\n\n## ARTÍCULOS FAQ GENERADOS\nPara cada pregunta frecuente, genera un artículo completo con:\n\n**Título:** (formulado como pregunta, optimizado para búsqueda interna)\n**Resumen en 1 línea:** (para resultados de búsqueda)\n**Respuesta completa:**\n- Explicación clara sin jerga\n- Pasos numerados si es un proceso\n- Capturas/imágenes sugeridas: [descripción de lo que debería ilustrarse]\n- Soluciones alternativas si la principal no funciona\n**Tags:** para categorización\n**Artículos relacionados:** [títulos de otros FAQs relevantes]\n\n## GAPS DETECTADOS\nPreguntas que aparecen pero no tienen solución clara → requieren input del equipo de producto.",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Construcción inicial o expansión de base de conocimiento para reducir tickets repetitivos.',
                'vote_score' => 123,
            ],

            // ─────────────────────────────────────────
            // FREELANCERS
            // ─────────────────────────────────────────
            [
                'profession' => 'freelancers',
                'title' => 'Propuesta comercial ganadora para cliente potencial',
                'description' => 'Genera una propuesta profesional personalizada que destaca tu valor diferencial y justifica tu tarifa frente a opciones más baratas.',
                'prompt_content' => "Eres un coach de negocio para freelancers y consultor experto en escritura de propuestas ganadoras.\n\nCrea una propuesta comercial para:\n\n**Tu servicio:** [DESCRIBE LO QUE OFRECES]\n**Cliente potencial:** [EMPRESA O TIPO DE CLIENTE]\n**Proyecto específico:** [DESCRIBE EL PROYECTO]\n**Tu tarifa:** [PRECIO TOTAL O TARIFA/HORA]\n**Plazo de entrega:** [TIEMPO]\n**Por qué te eligieron para cotizar:** [CONTEXTO DE CÓMO LLEGASTE A ESTA OPORTUNIDAD]\n**Competencia (si sabes):** [OTROS FREELANCERS O AGENCIAS QUE COTIZAN]\n\nEstructura la propuesta así:\n\n## 1. RESUMEN EJECUTIVO (el cliente lee esto primero)\n3-4 líneas que demuestran que entiendes su problema mejor que ellos mismos.\n\n## 2. EL PROBLEMA QUE RESUELVO\n(No empieces por lo que haces, empieza por su dolor)\n\n## 3. MI ENFOQUE Y METODOLOGÍA\n(Diferenciador: cómo trabajas tú vs. cómo trabaja cualquier otro)\n\n## 4. ENTREGABLES Y ALCANCE\n(Qué incluye, qué no incluye — el scope es tu mejor protección)\n\n## 5. TIMELINE\nHitos clave con fechas\n\n## 6. INVERSIÓN\n(Encuadra el precio como inversión, no como coste)\n\n## 7. SOBRE MÍ\n3 líneas + 1 caso de éxito relevante para este cliente\n\n## 8. PRÓXIMOS PASOS\n1 sola acción clara",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Responder a RFPs o enviar propuestas a leads calificados.',
                'vote_score' => 189,
            ],
            [
                'profession' => 'freelancers',
                'title' => 'Negociación de tarifas: responde a "¿puedes bajar el precio?"',
                'description' => 'Aprende a negociar sin rebajar tu tarifa: contraoferta inteligente, reducción de scope, o mantenimiento de precio con valor añadido.',
                'prompt_content' => "Eres un coach de negocio especializado en freelancers y profesionales independientes.\n\nEl cliente acaba de pedirte bajar tu tarifa:\n\n**Su mensaje:** [PEGA SU MENSAJE O RESÚMELO]\n**Tu tarifa original:** [PRECIO]\n**La rebaja que piden:** [CUÁNTO PIDEN DE DESCUENTO]\n**Estado de la relación:** [CLIENTE NUEVO / CLIENTE RECURRENTE / LEAD FRÍO]\n**¿Quieres trabajar con este cliente?:** [SÍ, MUCHO / ES INDIFERENTE / PREFERIBLEMENTE NO]\n**Margen que tienes:** [% que podrías bajar sin comprometer rentabilidad]\n\nGenera 3 respuestas distintas para elegir según el contexto:\n\n**OPCIÓN A — Mantener precio, añadir valor**\n(Sin bajar ni un euro, pero haciendo el no feel menos doloroso)\n\n**OPCIÓN B — Reducir scope, mantener tarifa/hora**\n(Ofrecer una versión reducida al precio que piden)\n\n**OPCIÓN C — Contraoferta estratégica**\n(Bajar ligeramente a cambio de algo: pago adelantado, testimonio, referidos, más volumen)\n\nPara cada opción: el mensaje completo listo para enviar + la psicología detrás de por qué funciona.\n\nAdemás: ¿Cuándo deberías simplemente decir no y cómo hacerlo con elegancia?",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 8,
                'use_case' => 'Responder a negociaciones de precio sin perder rentabilidad ni la relación con el cliente.',
                'vote_score' => 167,
            ],
            [
                'profession' => 'freelancers',
                'title' => 'Define el scope de un proyecto para evitar scope creep',
                'description' => 'Genera un documento de alcance de proyecto claro que protege tus horas, define entregables y establece el proceso de gestión de cambios.',
                'prompt_content' => "Eres un consultor experto en gestión de proyectos freelance y prevención de scope creep.\n\nCrea un documento de alcance de proyecto para:\n\n**Servicio:** [TIPO DE PROYECTO: diseño web / desarrollo / consultoría / copy / etc.]\n**Cliente:** [TIPO DE EMPRESA]\n**Descripción del proyecto:** [RESUMEN DEL PROYECTO]\n**Duración:** [SEMANAS/MESES]\n**Tarifa:** [PRECIO TOTAL O POR FASE]\n\nEl documento debe incluir:\n\n## 1. ALCANCE DEL PROYECTO (lo que SÍ incluye)\nLista exhaustiva de entregables, formateada para que no haya ambigüedad.\n\n## 2. FUERA DEL ALCANCE (lo que NO incluye)\nLista explícita de lo que no está incluido y podría confundirse.\nEjemplo: \"No incluye: revisiones adicionales más allá de las 2 acordadas, mantenimiento posterior al lanzamiento, formación al equipo cliente.\"\n\n## 3. SUPUESTOS Y DEPENDENCIAS\nQué necesitas del cliente para cumplir plazos y qué ocurre si no lo recibes.\n\n## 4. PROCESO DE GESTIÓN DE CAMBIOS\nCómo se gestiona cualquier solicitud fuera del alcance:\n- Formulario o proceso de solicitud de cambio\n- Cómo se cotiza el trabajo adicional\n- Impacto en plazos\n\n## 5. HITOS Y PAGOS\nCalendario de entregables vinculado a hitos de pago.\n\n## 6. CONDICIONES DE ACEPTACIÓN\nCómo se aprueba cada entregable y qué pasa si no hay feedback en X días.",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Antes de empezar cualquier proyecto para protegerte legalmente y alinear expectativas.',
                'vote_score' => 156,
            ],
        ];

        foreach ($skills as $data) {
            $profession = Profession::where('slug', $data['profession'])->first();
            if (! $profession) {
                continue;
            }

            $slug = Str::slug($data['title']);
            $original = $slug;
            $counter = 1;
            while (Skill::where('slug', $slug)->exists()) {
                $slug = $original.'-'.$counter++;
            }

            Skill::firstOrCreate(
                ['slug' => $slug],
                [
                    'profession_id' => $profession->id,
                    'user_id' => $admin->id,
                    'title' => $data['title'],
                    'slug' => $slug,
                    'description' => $data['description'],
                    'prompt_content' => $data['prompt_content'],
                    'tool_name' => $data['tool_name'],
                    'difficulty' => $data['difficulty'],
                    'estimated_minutes' => $data['estimated_minutes'],
                    'use_case' => $data['use_case'],
                    'status' => 'published',
                    'vote_score' => $data['vote_score'],
                ]
            );
        }

        // Recalcular skills_count en profesiones
        Profession::all()->each(function (Profession $p) {
            $p->update(['skills_count' => $p->publishedSkills()->count()]);
        });

        $total = Skill::published()->count();
        $this->command->info("✓ Seeder completado: {$total} skills en total.");
    }
}
