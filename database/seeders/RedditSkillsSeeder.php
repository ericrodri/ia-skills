<?php

namespace Database\Seeders;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RedditSkillsSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [

            // ─────────────────────────────────────────
            // UNIVERSAL / ESTRATEGIA
            // ─────────────────────────────────────────
            [
                'profession' => 'pm',
                'title' => 'Meta-prompt de clarificación antes de actuar',
                'description' => 'Uno de los prompts más votados en r/ChatGPT. Obliga a la IA a hacer preguntas hasta tener un 95% de confianza antes de ejecutar cualquier tarea, eliminando los primeros borradores malos.',
                'prompt_content' => "Before responding, ask me any clarifying questions until you are 95% confident you can complete this task successfully. Use only verifiable, credible sources. Do not speculate.\n\nOnce you have all the information you need, proceed with the task:\n\n[DESCRIBE TU TAREA AQUÍ]",
                'tool_name' => 'Claude',
                'difficulty' => 'beginner',
                'estimated_minutes' => 5,
                'use_case' => 'Cualquier tarea compleja donde un mal entendimiento del contexto arruinaría el resultado. Especialmente útil para briefs de proyectos, análisis o generación de documentos importantes.',
                'vote_score' => 412,
            ],
            [
                'profession' => 'pm',
                'title' => 'Red Team: destruye tu propia idea antes que otros',
                'description' => 'Prompt viral en r/PromptEngineering. Activa el pensamiento crítico de la IA para atacar tu plan desde todos los ángulos posibles, identificando debilidades antes de comprometer recursos.',
                'prompt_content' => "Red team this idea: [PEGA TU IDEA, PLAN O PROPUESTA]\n\nWhat is wrong with it? What are the weaknesses, risks, and failure modes?\n\nBe specific and brutal. I want:\n1. Top 5 critical flaws (ordered by severity)\n2. Assumptions I'm making that could be wrong\n3. What a smart competitor would exploit\n4. What could kill this in the first 90 days\n5. The one thing that would make you bet against this succeeding",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 10,
                'use_case' => 'Antes de presentar una propuesta, lanzar un producto o tomar una decisión estratégica importante. Funciona como un abogado del diablo implacable.',
                'vote_score' => 356,
            ],
            [
                'profession' => 'pm',
                'title' => 'Pre-mortem: escribe el post-mortem antes de empezar',
                'description' => 'Basado en la técnica de Jeff Bezos. Imagina que el proyecto ya fracasó 12 meses después y reconstruye qué salió mal. Referenciado constantemente en r/PromptEngineering.',
                'prompt_content' => "Imagine it is 12 months from now and [NOMBRE DEL PROYECTO / INICIATIVA] has completely failed.\n\nWrite the post-mortem. Be specific:\n\n1. What was the #1 root cause of failure?\n2. What were the 5 biggest mistakes made?\n3. What warning signs were ignored in the first 30 days?\n4. Which assumptions turned out to be completely wrong?\n5. What would the team say they wish they had done differently?\n6. What external factors made it worse?\n\nWrite this as if it is a real retrospective document, with specifics, not generalities.",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 10,
                'use_case' => 'Kick-off de proyectos, antes de validar una idea de negocio o antes de pedir presupuesto para una iniciativa. Identifica riesgos que el equipo ignoraría por sesgo de optimismo.',
                'vote_score' => 298,
            ],

            // ─────────────────────────────────────────
            // DESARROLLO
            // ─────────────────────────────────────────
            [
                'profession' => 'desarrollo',
                'title' => 'Debugger con análisis de causa raíz',
                'description' => 'El prompt de debugging más upvoteado en r/learnprogramming. No solo te da el fix: te explica por qué falla y cómo evitarlo en el futuro.',
                'prompt_content' => "Here is a code snippet that is not working as expected:\n\n```\n[PEGA TU CÓDIGO AQUÍ]\n```\n\nExpected behavior: [QUÉ DEBERÍA HACER]\nActual behavior: [QUÉ ESTÁ HACIENDO]\nError message (if any): [MENSAJE DE ERROR]\nLanguage/Framework: [LENGUAJE Y VERSIÓN]\n\nPlease:\n1. Identify the exact bug and explain why it fails\n2. Provide a corrected version with inline comments explaining each fix\n3. Explain the root cause (not just the symptom)\n4. Show me how to write a test that would have caught this bug\n5. Suggest any related issues in the code I should review",
                'tool_name' => 'Claude',
                'difficulty' => 'beginner',
                'estimated_minutes' => 5,
                'use_case' => 'Debugging de cualquier lenguaje. Especialmente útil cuando llevas 30+ minutos atascado en un error que no entiendes.',
                'vote_score' => 534,
            ],
            [
                'profession' => 'desarrollo',
                'title' => 'Generador de tests unitarios con edge cases',
                'description' => 'Genera tests completos para cualquier función, incluyendo los casos borde que normalmente se olvidan. Muy popular en r/learnprogramming y r/webdev.',
                'prompt_content' => "Write comprehensive unit tests for the following function:\n\n```\n[PEGA LA FUNCIÓN AQUÍ]\n```\n\nTesting framework: [Jest / Pytest / JUnit / etc.]\nLanguage: [LENGUAJE]\n\nRequirements:\n1. Test normal/happy path operation\n2. Test all edge cases (empty input, null, undefined, boundary values)\n3. Test invalid/unexpected input\n4. Test error handling\n5. Add a clear description for each test explaining what it verifies\n6. Aim for 100% branch coverage\n\nAlso tell me: what are the top 3 scenarios most likely to cause bugs in production that are NOT covered by these tests?",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 10,
                'use_case' => 'TDD, code reviews, o antes de un release. También ideal para añadir cobertura a código legacy sin tests.',
                'vote_score' => 287,
            ],
            [
                'profession' => 'desarrollo',
                'title' => 'Generador de GitHub Actions CI/CD completo',
                'description' => 'Crea el workflow completo de CI/CD con tests, Docker build y deploy automático. Uno de los prompts más guardados en r/devops.',
                'prompt_content' => "Generate a production-ready GitHub Actions workflow that:\n\n1. Triggers on: push to main, pull requests to main\n2. Runs all tests (framework: [Jest/Pytest/etc.])\n3. Builds a Docker image and pushes to [registry: Docker Hub / GHCR / ECR]\n4. Deploys to [hosting: Railway / Fly.io / AWS ECS / DigitalOcean]\n5. Only deploys if tests pass\n6. Sends a Slack/Discord notification on failure\n\nProject details:\n- Language/Framework: [STACK]\n- Dockerfile location: [ROOT / custom path]\n- Environment variables needed: [LIST]\n\nInclude:\n- Caching for dependencies (npm/pip/etc.)\n- Docker layer caching\n- Security: no hardcoded secrets, use GitHub Secrets\n- Comments explaining each step",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'advanced',
                'estimated_minutes' => 15,
                'use_case' => 'Setup inicial de CI/CD para proyectos nuevos o migración de pipelines manuales a automáticos.',
                'vote_score' => 241,
            ],

            // ─────────────────────────────────────────
            // MARKETING
            // ─────────────────────────────────────────
            [
                'profession' => 'marketing',
                'title' => 'Clonador de voz y tono de escritura',
                'description' => 'Analiza 3 muestras de tu escritura y replica tu voz exacta. Muy solicitado en r/copywriting para escalar producción sin perder autenticidad.',
                'prompt_content' => "Here are 3 samples of my writing:\n\n---SAMPLE 1---\n[PEGA MUESTRA 1]\n\n---SAMPLE 2---\n[PEGA MUESTRA 2]\n\n---SAMPLE 3---\n[PEGA MUESTRA 3]\n---\n\nAnalyze my writing voice in detail:\n- Sentence structure and length patterns\n- Vocabulary level and word choices\n- Tone (formal/casual/authoritative/conversational)\n- Rhythm and pacing\n- Use of humor, metaphors, or specific stylistic devices\n- Things I never say or avoid\n\nThen write [TIPO DE CONTENIDO: email / blog post / social post] about [TEMA] in my EXACT voice.\n\nAfter writing it, rate how well you matched my voice (1-10) and explain 3 specific ways you replicated it.",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Escalar producción de contenido manteniendo la autenticidad de la marca personal o empresarial.',
                'vote_score' => 389,
            ],
            [
                'profession' => 'marketing',
                'title' => 'Secuencia de 5 emails de bienvenida con psicología de conversión',
                'description' => 'Genera una secuencia de onboarding completa con el principio psicológico detrás de cada email. Uno de los workflows más guardados en r/EmailMarketing.',
                'prompt_content' => "Build a 5-email welcome sequence for [DESCRIBE TU NEGOCIO / PRODUCTO].\n\nAudience: [DESCRIBE TU AUDIENCIA]\nGoal of the sequence: [CONVERTIR TRIALS / ACTIVAR USUARIOS / VENDER UPGRADE / etc.]\n\nFor each email provide:\n1. Subject line (A/B test: give 2 options)\n2. Preview text (under 90 characters)\n3. Complete body copy (ready to send, no placeholders except [NOMBRE])\n4. Primary CTA (text + where it links)\n5. The psychological principle being leveraged (scarcity, social proof, reciprocity, etc.) and WHY it works here\n6. Best send time (hours after signup)\n\nSequence structure:\n- Email 1: Immediate (welcome + quick win)\n- Email 2: 24h (social proof / case study)\n- Email 3: 48h (educate / overcome main objection)\n- Email 4: Day 5 (urgency / offer)\n- Email 5: Day 10 (last chance / alternative path)",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Onboarding de nuevos usuarios o suscriptores. También funciona para secuencias post-compra o reactivación.',
                'vote_score' => 312,
            ],
            [
                'profession' => 'marketing',
                'title' => 'Motor de repurposing: 1 artículo → 6 formatos',
                'description' => 'Convierte cualquier artículo o post en contenido para todos los canales en un solo prompt. Muy popular en r/ContentMarketing y r/socialmedia.',
                'prompt_content' => "Take this content:\n\n[PEGA EL ARTÍCULO, VIDEO TRANSCRIPT O POST]\n\nRepurpose it into all of the following formats. Keep the core message consistent but adapt tone and length to each platform:\n\n1. **5 tweets/X posts** (under 280 chars each, punchy, one key insight per tweet)\n2. **1 LinkedIn post** (under 1,300 chars, hook + value + CTA, professional tone)\n3. **3 email subject lines** (A/B/C test options, under 50 chars each)\n4. **1 Instagram caption** (conversational, 150-200 words + 10 relevant hashtags)\n5. **1 short-form video script** (60 seconds, hook + 3 points + CTA)\n6. **1 newsletter intro paragraph** (friendly, 80-100 words, creates curiosity to read more)\n\nFor each format, add a brief note on the best time/day to post.",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'beginner',
                'estimated_minutes' => 10,
                'use_case' => 'Maximizar el ROI de cada pieza de contenido distribuyéndola en todos los canales con copy adaptado a cada formato.',
                'vote_score' => 267,
            ],
            [
                'profession' => 'marketing',
                'title' => 'Constructor de customer avatar (buyer persona detallado)',
                'description' => 'Crea un buyer persona ultra-detallado con psicografía, pain points y triggers de compra. Base de cualquier estrategia de marketing según r/marketing.',
                'prompt_content' => "Help me build a detailed customer avatar for [PRODUCTO / SERVICIO].\n\nI already know: [PEGA CUALQUIER DATO QUE TENGAS: analytics, encuestas, reseñas, etc. Si no tienes nada, escribe 'ninguno']\n\nBuild a complete avatar including:\n\n**DEMOGRAPHICS**\n- Age range, gender distribution, location, income, education, job title\n\n**PSYCHOGRAPHICS**\n- Core values and beliefs\n- Aspirations (what they want to become)\n- Fears and frustrations\n- Identity (how they see themselves vs. how they want to be seen)\n\n**PAIN POINTS** (ordered by intensity)\n- Top 3 problems that keep them awake at night\n- The #1 mistake they keep making\n\n**BUYING BEHAVIOR**\n- Where they discover products like this\n- Objections before purchasing\n- The emotional trigger that makes them buy\n- Trusted voices/influencers they follow\n\n**MESSAGING GUIDE**\n- 3 phrases that would stop them mid-scroll\n- Words they use (to use in copy) vs. words that repel them\n- The transformation they're really buying (not the product)",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Fundamento para cualquier estrategia de marketing, copy o desarrollo de producto. Hacer esto antes de crear cualquier campaña.',
                'vote_score' => 198,
            ],

            // ─────────────────────────────────────────
            // VENTAS
            // ─────────────────────────────────────────
            [
                'profession' => 'ventas',
                'title' => 'Playbook de objeciones de ventas con 15 respuestas listas',
                'description' => 'Genera respuestas a las 15 objeciones más comunes para tu producto, con la técnica psicológica exacta para cada una. Muy utilizado en r/sales.',
                'prompt_content' => "Act as a world-class B2B sales coach.\n\nProduct/Service: [DESCRIBE TU PRODUCTO O SERVICIO]\nTarget customer: [CARGO / INDUSTRIA]\nAverage deal size: [RANGO DE PRECIO]\n\nList the top 15 objections a prospect will raise when considering buying.\n\nFor each objection provide:\n1. The objection (worded exactly how a prospect says it)\n2. What they REALLY mean (the underlying fear or concern)\n3. A response that: acknowledges the concern, reframes it, and advances the conversation\n4. The psychological technique being used (e.g., feel-felt-found, preemptive objection, ROI reframe)\n5. A follow-up question to continue the conversation\n\nOrganize by category:\n- Price objections (5)\n- Timing objections (3)\n- Competitor/alternative objections (3)\n- Authority/decision objections (2)\n- Risk/trust objections (2)",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Training de equipos de ventas, preparación para demos o calls de cierre. También sirve para crear scripts de sales enablement.',
                'vote_score' => 445,
            ],
            [
                'profession' => 'ventas',
                'title' => 'Cold email B2B de alto impacto (menos de 120 palabras)',
                'description' => 'Genera cold emails que siguen los frameworks probados de los mejores SDRs. Referenciado en r/sales como uno de los mejores prompts para prospección B2B.',
                'prompt_content' => "Actúa como un SDR experto con 10+ años en ventas B2B y más de $10M en pipeline generado.\n\nEscribe un cold email para:\n- Destinatario: [CARGO + INDUSTRIA, ej: \"VP de Marketing en empresa SaaS B2B\"]\n- Empresa objetivo: [TIPO DE EMPRESA, tamaño aprox.]\n- Tu producto/servicio: [DESCRIPCIÓN EN 1-2 FRASES]\n- Principal pain point que resuelves: [PROBLEMA]\n\nReglas del email:\n- Máximo 120 palabras en el body\n- Subject line: personalizado, NO genérico, max 8 palabras\n- Línea 1: conexión relevante (menciona algo específico de ellos)\n- Párrafo 2: el problema específico que probablemente tienen\n- Párrafo 3: cómo lo resuelves con un resultado concreto (usa número si puedes)\n- CTA: una pregunta de 15 palabras o menos, no un link\n- Tono: directo, profesional, sin adulaciones ni relleno\n\nDame también: 2 subject lines alternativas y 1 follow-up de 3 frases para enviar 3 días después.",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 10,
                'use_case' => 'Generación de pipeline outbound B2B. Especialmente útil para secuencias de prospección y mensajes de LinkedIn.',
                'vote_score' => 387,
            ],

            // ─────────────────────────────────────────
            // RRHH
            // ─────────────────────────────────────────
            [
                'profession' => 'rrhh',
                'title' => 'Generador de preguntas de entrevista conductual (método STAR)',
                'description' => 'Crea una guía completa de entrevista con preguntas STAR, criterios de evaluación y follow-ups. Muy popular en r/humanresources y r/recruiting.',
                'prompt_content' => "Actúa como recruiter senior especializado en metodología STAR con 15 años de experiencia.\n\nGenera una guía de entrevista conductual para:\n- Puesto: [TÍTULO DEL PUESTO]\n- Nivel: [JUNIOR / MID / SENIOR / MANAGER]\n- Competencias clave a evaluar: [LISTA 4-6 COMPETENCIAS]\n- Industria: [TU SECTOR]\n\nPara cada competencia, proporciona:\n1. **Pregunta principal** (formulada en estilo STAR)\n2. **Por qué evalúa esta competencia** (qué comportamiento predice)\n3. **Respuesta strong** (qué debería incluir para dar 9-10/10)\n4. **Respuesta weak** (señales de alerta)\n5. **2 follow-up questions** para profundizar si la respuesta es vaga\n6. **Red flags** específicos de esta competencia\n\nAl final incluye:\n- Scorecard de evaluación (tabla con competencias y escala 1-5)\n- 3 preguntas de cierre para evaluar fit cultural\n- Plantilla de email de feedback post-entrevista",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 10,
                'use_case' => 'Preparación de procesos de selección. Garantiza consistencia entre entrevistadores y reduce el sesgo de contratación.',
                'vote_score' => 276,
            ],
            [
                'profession' => 'rrhh',
                'title' => 'Plan de onboarding de 90 días (3 fases)',
                'description' => 'Genera un plan de incorporación estructurado en 3 fases con objetivos, actividades y métricas de éxito para cada etapa.',
                'prompt_content' => "Eres un People Ops specialist con experiencia en onboarding de alto rendimiento.\n\nCrea un plan de onboarding de 90 días para:\n- Puesto: [TÍTULO]\n- Departamento: [NOMBRE DEL DEPARTAMENTO]\n- Tamaño de empresa: [STARTUP <50 / MEDIANA 50-500 / GRANDE 500+]\n- Trabaja: [PRESENCIAL / REMOTO / HÍBRIDO]\n- Manager directo: [PERFIL DEL MANAGER]\n\nEstructura el plan en 3 fases:\n\n**FASE 1 — Días 1-30 (Adaptación)**\n- Objetivos de aprendizaje (qué debe saber)\n- Actividades y reuniones clave\n- Entregables del nuevo empleado\n- Check-in del manager: qué revisar\n\n**FASE 2 — Días 31-60 (Contribución)**\n- Primer proyecto o responsabilidad real\n- Hitos medibles\n- Personas clave que debe conocer\n\n**FASE 3 — Días 61-90 (Autonomía)**\n- Objetivos de rendimiento independiente\n- Entregable final de evaluación\n- Criterios para considerar el onboarding exitoso\n\nIncluye también: plantilla de 1:1 semanal para el manager durante los 90 días.",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Estructurar la incorporación de nuevas contrataciones. Reduce drásticamente el tiempo de ramp-up y mejora la retención en los primeros 6 meses.',
                'vote_score' => 198,
            ],

            // ─────────────────────────────────────────
            // LEGAL
            // ─────────────────────────────────────────
            [
                'profession' => 'legal',
                'title' => 'Carta de requerimiento legal (breach of contract)',
                'description' => 'Redacta cartas de requerimiento profesionales para incumplimientos contractuales. Referenciado en r/legaladvice como uno de los mejores usos de IA para documentos legales.',
                'prompt_content' => "Act as an experienced commercial litigation attorney with expertise in breach of contract claims.\n\nFacts:\n- My client: [NOMBRE / TIPO DE EMPRESA]\n- Opposing party: [NOMBRE / TIPO DE EMPRESA]\n- Type of agreement: [TIPO DE CONTRATO]\n- Date of agreement: [FECHA]\n- The breach: [DESCRIBE QUÉ OBLIGACIÓN INCUMPLIERON]\n- Duration of breach: [CUÁNTO TIEMPO LLEVAN EN INCUMPLIMIENTO]\n- Prior notifications: [HAS NOTIFICADO? CUÁNDO?]\n- Remedy sought: [QUÉ PIDES: pago, cumplimiento, resolución del contrato]\n- Jurisdiction: [PAÍS / ESTADO / COMUNIDAD]\n\nDraft a formal demand letter that:\n- Is approximately 600-800 words\n- Uses professional legal formatting\n- States facts clearly and chronologically\n- Cites the specific contractual obligations breached\n- Demands specific remedy with a clear deadline (suggest appropriate timeframe)\n- Is assertive but not antagonistic\n- Includes standard legal notices for the jurisdiction\n- Ends with consequences if demand is not met\n\nNote: This is a first draft. Flag any sections where you need jurisdiction-specific legal input.",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Primera versión de cartas de requerimiento que después un abogado revisa. Ahorra 2-3 horas de trabajo en borradores iniciales.',
                'vote_score' => 334,
            ],
            [
                'profession' => 'legal',
                'title' => 'Redactor de NDA mutuo adaptado al sector',
                'description' => 'Genera borradores de acuerdos de confidencialidad mutuos adaptados al sector y jurisdicción. Muy utilizado en r/legaladvice y r/startups.',
                'prompt_content' => "Draft a mutual non-disclosure agreement (mutual NDA) between:\n- Party A: [TIPO DE EMPRESA O PROFESIONAL, ej: empresa de software]\n- Party B: [TIPO DE EMPRESA O PROFESIONAL, ej: cliente corporativo]\n- Sector: [INDUSTRIA]\n- Purpose of disclosure: [POR QUÉ SE COMPARTE INFORMACIÓN CONFIDENCIAL]\n- Jurisdiction/Governing law: [PAÍS / ESTADO]\n\nThe NDA should include:\n1. Definition of Confidential Information (with carve-outs for: already public, independently developed, required by law)\n2. Confidentiality period: [X] years following disclosure\n3. Permitted use restrictions\n4. Standard exceptions\n5. Return/destruction of materials clause\n6. No license grant language\n7. Governing law and dispute resolution (arbitration vs. courts)\n8. Signature block for both parties\n\nFormat: approximately 2-3 pages, standard legal formatting.\n\nAfter drafting, flag: the 3 clauses most likely to be negotiated and suggest alternative language for each.",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 25,
                'use_case' => 'Primer borrador de NDAs para startups, freelancers y empresas. Reduce el tiempo de un abogado en acuerdos estándar.',
                'vote_score' => 245,
            ],

            // ─────────────────────────────────────────
            // FINANZAS
            // ─────────────────────────────────────────
            [
                'profession' => 'finanzas',
                'title' => 'Análisis de estados financieros con alertas y recomendaciones',
                'description' => 'Convierte estados financieros en bruto en un análisis ejecutivo con ratios, tendencias, red flags y recomendaciones accionables.',
                'prompt_content' => "Actúa como un analista financiero senior con certificación CFA y 15 años de experiencia en [SECTOR].\n\nAnaliza los siguientes estados financieros de los últimos 2 años:\n\n**BALANCE GENERAL:**\n[PEGA LOS DATOS]\n\n**CUENTA DE RESULTADOS (P&L):**\n[PEGA LOS DATOS]\n\n**FLUJO DE CAJA:**\n[PEGA LOS DATOS]\n\nEmpresa: [NOMBRE]\nIndustria: [SECTOR]\nTamaño: [EMPLEADOS / REVENUE APROXIMADO]\n\nEntrega un análisis estructurado con:\n\n## 1. RATIOS FINANCIEROS CLAVE\n- Liquidez (current ratio, quick ratio)\n- Rentabilidad (ROE, ROA, margen neto, EBITDA margin)\n- Endeudamiento (D/E ratio, interest coverage)\n- Eficiencia (asset turnover, days receivable)\nIncluye benchmark vs. industria para cada ratio.\n\n## 2. ANÁLISIS DE TENDENCIAS\n- Evolución YoY de las métricas más importantes\n- ¿Mejorando o deteriorándose?\n\n## 3. RED FLAGS\n- Señales de alerta que requieren atención inmediata\n- Riesgos en los próximos 12 meses\n\n## 4. FORTALEZAS\n- Ventajas financieras vs. competidores\n\n## 5. RECOMENDACIONES\n- 3 acciones prioritarias con impacto estimado",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Due diligence, informes de inversión, revisiones de board o preparación para rondas de financiación.',
                'vote_score' => 312,
            ],
            [
                'profession' => 'finanzas',
                'title' => 'Modelo financiero de startup para fundraising (3 años)',
                'description' => 'Genera la estructura completa de un modelo financiero de 3 años para presentar a inversores, con unit economics y proyecciones de runway.',
                'prompt_content' => "Actúa como CFO de startup con experiencia en más de 10 rondas de financiación (Seed a Series B).\n\nCrea un modelo financiero simplificado para los próximos 3 años:\n\n**Startup:** [NOMBRE]\n**Modelo de negocio:** [B2B SaaS / B2C / Marketplace / etc.]\n**Stage actual:** [PRE-SEED / SEED / SERIES A]\n**MRR actual:** [CANTIDAD o 0 si es pre-revenue]\n**Equipo actual:** [Nº de personas]\n\n**Assumptions que debes usar:**\n- Precio promedio: [PRECIO]\n- CAC estimado: [COSTE DE ADQUISICIÓN]\n- LTV estimado: [LIFETIME VALUE]\n- Churn rate mensual: [%]\n- Crecimiento MoM esperado: [%]\n\nGenera la estructura de:\n\n1. **Proyección de ingresos** (mensual año 1, trimestral años 2-3)\n2. **Estructura de costes** (COGS, Opex, Marketing, Equipo)\n3. **EBITDA y burn rate mensual**\n4. **Runway** con el capital actual\n5. **Unit Economics** (LTV:CAC ratio, payback period, contribution margin)\n6. **Hitos para la siguiente ronda** (métricas que un inversor querría ver)\n\nFormato: tabla estructurada con los números y explicación de los assumptions clave.",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 30,
                'use_case' => 'Preparar deck financiero para inversores, calcular cuándo levantar la siguiente ronda o hacer planning de headcount.',
                'vote_score' => 289,
            ],

            // ─────────────────────────────────────────
            // DISEÑO
            // ─────────────────────────────────────────
            [
                'profession' => 'diseño',
                'title' => 'Auditoría de accesibilidad UX (WCAG 2.1)',
                'description' => 'Revisa cualquier UI para detectar problemas de accesibilidad WCAG, clasificados por severidad con soluciones específicas.',
                'prompt_content' => "You are a UX accessibility specialist certified in WCAG 2.1 and Section 508 compliance.\n\nReview this UI description/screenshot/code for accessibility issues:\n\n[DESCRIBE LA UI, PEGA EL HTML/CSS, O DESCRIBE LOS COMPONENTES]\n\nContext:\n- Type of product: [WEB APP / MOBILE / LANDING PAGE]\n- Primary users: [AUDIENCIA, menciona si incluye usuarios con discapacidades conocidas]\n- Current WCAG level target: [A / AA / AAA]\n\nProvide a full audit:\n\n## CRITICAL ISSUES (must fix before launch)\n[List with: issue, WCAG criterion violated, impact on users, specific fix]\n\n## MAJOR ISSUES (fix within sprint)\n[Same format]\n\n## MINOR ISSUES (backlog)\n[Same format]\n\n## QUICK WINS (under 30 min to fix)\n[List the easiest fixes with highest impact]\n\n## OVERALL SCORE\n- Estimated WCAG AA compliance: X%\n- Top 3 priorities to reach full AA compliance",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Revisión de accesibilidad antes de un release. También útil para auditorías de productos existentes o licitaciones que requieren cumplimiento WCAG.',
                'vote_score' => 198,
            ],
            [
                'profession' => 'diseño',
                'title' => 'Optimizador de prompts para generación de imágenes (Midjourney/DALL-E)',
                'description' => 'Transforma una descripción vaga en un prompt optimizado para generadores de imágenes IA con todos los parámetros técnicos necesarios.',
                'prompt_content' => "Actúa como experto en prompt engineering para generadores de imágenes IA con más de 2 años de experiencia en Midjourney, DALL-E 3 y Stable Diffusion.\n\nNecesito crear:\n- Tipo de imagen: [ILUSTRACIÓN / FOTO REALISTA / LOGO / ICONO / BANNER]\n- Tema/sujeto: [DESCRIBE LO QUE QUIERES]\n- Estilo: [REALISTA / CARTOON / MINIMALISTA / VINTAGE / CORPORATIVO / etc.]\n- Uso final: [WEB / REDES SOCIALES / PRINT / APP]\n- Herramienta que usaré: [MIDJOURNEY / DALL-E 3 / STABLE DIFFUSION]\n\nGenera un prompt optimizado que incluya:\n1. **Sujeto principal** (descripción detallada)\n2. **Estilo visual** (referencias artísticas si aplica)\n3. **Iluminación** (tipo, dirección, calidad)\n4. **Ángulo y composición**\n5. **Paleta de colores dominante**\n6. **Mood/atmósfera**\n7. **Parámetros técnicos** (aspect ratio, calidad, versión)\n8. **Negative prompt** (qué excluir)\n\nDame también: 2 variaciones del prompt para explorar diferentes direcciones creativas.",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 10,
                'use_case' => 'Antes de usar Midjourney o DALL-E. Elimina el trial-and-error y consigue imágenes de calidad desde el primer intento.',
                'vote_score' => 356,
            ],

            // ─────────────────────────────────────────
            // CS (CUSTOMER SUCCESS)
            // ─────────────────────────────────────────
            [
                'profession' => 'cs',
                'title' => 'Generador de SOP para cualquier proceso operativo',
                'description' => 'Crea procedimientos operativos estándar detallados que un nuevo empleado puede seguir desde el día 1. Muy votado en r/CustomerSuccess y r/operations.',
                'prompt_content' => "Write a detailed Standard Operating Procedure (SOP) for the following process:\n\nProcess name: [NOMBRE DEL PROCESO]\nDepartment: [DEPARTAMENTO]\nFrequency: [DIARIO / SEMANAL / AD-HOC]\nTools involved: [LISTA DE HERRAMIENTAS / SOFTWARE]\n\nThe SOP must be complete enough for a new hire to follow on day 1. Include:\n\n## PURPOSE\nWhat this process achieves and why it matters\n\n## PREREQUISITES\nAccess, tools, or knowledge required before starting\n\n## STEP-BY-STEP INSTRUCTIONS\nNumbered steps with:\n- Exact actions (screenshots placeholder noted where visual is needed)\n- Decision trees where multiple paths exist (IF X → do Y, ELSE → do Z)\n- Common mistakes at each step and how to avoid them\n\n## TROUBLESHOOTING\nTop 5 things that go wrong and how to fix them\n\n## DEFINITION OF DONE\nChecklist: how to know the process is complete and correct\n\n## ESCALATION PATH\nWhen and who to contact if something goes wrong",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Documentar procesos críticos para escalar el equipo. Ideal para operaciones, customer success, soporte o cualquier proceso repetible.',
                'vote_score' => 223,
            ],

            // ─────────────────────────────────────────
            // FREELANCERS
            // ─────────────────────────────────────────
            [
                'profession' => 'freelancers',
                'title' => 'Contrato de servicios freelance con cláusulas de protección',
                'description' => 'Genera contratos profesionales para freelancers con todas las cláusulas clave para proteger tu trabajo y cobrar a tiempo. Muy solicitado en r/freelance.',
                'prompt_content' => "Actúa como abogado corporativo especializado en contratos de servicios profesionales y economía gig.\n\nRedacta un contrato de servicios para:\n- Proveedor (freelancer): [TU NOMBRE / EMPRESA]\n- Cliente: [NOMBRE DEL CLIENTE]\n- Servicios: [DESCRIBE EL ALCANCE EN DETALLE]\n- Duración: [PROYECTO CON FECHA FIN / RETAINER MENSUAL]\n- Honorarios: [MONTO Y ESTRUCTURA DE PAGOS]\n- Jurisdicción: [PAÍS]\n\nEl contrato debe incluir estas cláusulas:\n1. **Objeto y alcance** (qué incluye Y qué no incluye explícitamente)\n2. **Plazos y entregables** (con fechas y criterios de aceptación)\n3. **Compensación y condiciones de pago** (incluye penalización por pago tardío)\n4. **Revisiones** (número de rondas incluidas, coste de adicionales)\n5. **Propiedad intelectual** (cuándo se transfiere: al pago completo)\n6. **Confidencialidad** (NDA incorporado)\n7. **Terminación** (con y sin causa, notice period, trabajos en curso)\n8. **Indemnización** (límite de responsabilidad del freelancer)\n9. **Fuerza mayor**\n10. **Resolución de conflictos**\n\nAl final, lista las 3 cláusulas que protegen más al freelancer y explica por qué.",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Protegerse legalmente en proyectos freelance. Especialmente útil para proyectos de más de €1.000 o con clientes nuevos.',
                'vote_score' => 467,
            ],
            [
                'profession' => 'freelancers',
                'title' => 'Propuesta comercial freelance que cierra el 60% de los proyectos',
                'description' => 'Estructura y redacta propuestas comerciales profesionales siguiendo el framework más efectivo. Referenciado en r/freelance como uno de los mejores recursos de IA para freelancers.',
                'prompt_content' => "Eres un freelancer senior con 10+ años de experiencia y ratio de cierre del 60%+.\n\nRedacta una propuesta comercial para:\n- Proyecto: [DESCRIBE EL PROYECTO]\n- Cliente: [TIPO DE EMPRESA, tamaño, industria]\n- Presupuesto estimado: [RANGO]\n- Deadline del cliente: [FECHA]\n- Tu especialidad: [TU SERVICIO / HABILIDAD PRINCIPAL]\n\nEstructura la propuesta en:\n\n1. **Executive Summary** (3-4 líneas que demuestren que entiendes su problema)\n2. **El problema** (articula su dolor mejor de lo que ellos lo harían)\n3. **Tu solución** (específica, no genérica, vinculada a su problema)\n4. **Proceso de trabajo** (fases, duración, qué necesitas de ellos)\n5. **Entregables** (lista exacta de qué van a recibir)\n6. **Por qué yo** (3 razones específicas, no genéricas. Si tienes casos de éxito relevantes, úsalos)\n7. **Inversión** (precio presentado como ROI, no como coste)\n8. **Próximos pasos** (CTA claro con fecha límite para la oferta)\n\nTono: profesional, directo, orientado a resultados. Sin adulaciones ni relleno.",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Responder RFPs o enviar propuestas no solicitadas a clientes potenciales. También útil para reestructurar propuestas que no están convirtiendo.',
                'vote_score' => 389,
            ],
        ];

        foreach ($skills as $data) {
            $profession = Profession::where('slug', $data['profession'])->first();
            if (!$profession) continue;

            $slug = Str::slug($data['title']);
            $baseSlug = $slug;
            $i = 1;
            while (Skill::where('slug', $slug)->exists()) {
                $slug = $baseSlug . '-' . $i++;
            }

            Skill::create([
                'profession_id'      => $profession->id,
                'user_id'            => $admin->id,
                'title'              => $data['title'],
                'slug'               => $slug,
                'description'        => $data['description'],
                'prompt_content'     => $data['prompt_content'],
                'tool_name'          => $data['tool_name'],
                'difficulty'         => $data['difficulty'],
                'estimated_minutes'  => $data['estimated_minutes'],
                'use_case'           => $data['use_case'],
                'status'             => 'published',
                'vote_score'         => $data['vote_score'],
                'views_count'        => rand(200, 2000),
                'saves_count'        => rand(20, 200),
                'version'            => 1,
            ]);
        }

        $this->command->info('✅ RedditSkillsSeeder: ' . count($skills) . ' skills importadas desde Reddit.');
    }
}
