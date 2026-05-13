<?php

namespace Database\Seeders;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SkillSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        if (! $admin) {
            $admin = User::factory()->create([
                'name' => 'IA Skills Team',
                'email' => 'team@ia-skills.com',
                'username' => 'ia-skills',
                'reputation' => 500,
                'is_verified_expert' => true,
            ]);
        }

        $skills = [
            [
                'profession' => 'marketing',
                'title' => 'Genera 10 variaciones de copy para anuncios Facebook Ads',
                'description' => 'Genera 10 variaciones de copy para tus anuncios de Facebook en segundos, adaptadas a tu público objetivo y con diferentes enfoques (emocional, racional, urgencia).',
                'prompt_content' => "Eres un experto en copywriting para Facebook Ads con 10 años de experiencia.\n\nNecesito 10 variaciones de copy para un anuncio de Facebook Ads con estas características:\n- Producto/servicio: [DESCRIBE TU PRODUCTO]\n- Público objetivo: [DESCRIBE TU AUDIENCIA]\n- Objetivo del anuncio: [VENTAS / LEADS / TRÁFICO]\n- Tono de marca: [FORMAL / CASUAL / INSPIRACIONAL]\n- Beneficio principal: [PRINCIPAL BENEFICIO]\n\nPara cada variación incluye:\n1. Headline (máx. 40 caracteres)\n2. Texto principal (máx. 125 caracteres)\n3. CTA sugerido\n4. Enfoque usado (emocional / urgencia / social proof / beneficio / curiosidad)\n\nVaria los enfoques entre las 10 versiones para poder hacer A/B testing efectivo.",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'beginner',
                'estimated_minutes' => 5,
                'use_case' => 'Lanzamiento de campaña de paid social con múltiples creatividades para A/B testing.',
            ],
            [
                'profession' => 'marketing',
                'title' => 'Análisis de competidores para estrategia de contenido SEO',
                'description' => 'Analiza el contenido de tus competidores y encuentra gaps de contenido que puedes aprovechar para superar sus rankings en Google.',
                'prompt_content' => "Actúa como un experto en SEO y estrategia de contenidos.\n\nVoy a compartirte URLs de mis competidores y necesito:\n\n1. ANÁLISIS DE GAPS:\n   - Temas que cubren ellos pero yo no\n   - Ángulos que no han explorado\n   - Palabras clave de cola larga sin cubrir\n\n2. OPORTUNIDADES:\n   - Top 10 artículos que debería crear con mayor potencial de ranking\n   - Para cada uno: título, keyword principal, intención de búsqueda, dificultad estimada (1-10)\n\n3. DIFERENCIACIÓN:\n   - Cómo abordar los temas de forma única vs. la competencia\n\nMis competidores son:\n[LISTA DE URLs]\n\nMi nicho es: [TU NICHO]\nMi audiencia objetivo: [AUDIENCIA]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Planificación trimestral de calendario editorial SEO.',
            ],
            [
                'profession' => 'desarrollo',
                'title' => 'Code review detallado con sugerencias de mejora',
                'description' => 'Obtén un code review exhaustivo de tu código con detección de bugs, problemas de performance, seguridad y mejores prácticas.',
                'prompt_content' => "Eres un senior developer con 15 años de experiencia. Realiza un code review exhaustivo del siguiente código.\n\nLenguaje/Framework: [LENGUAJE Y VERSIÓN]\nContexto: [QUÉ HACE ESTE CÓDIGO]\n\n```\n[PEGA TU CÓDIGO AQUÍ]\n```\n\nRevisa y reporta en este formato:\n\n## 🐛 BUGS CRÍTICOS\n[bugs que romperían la app]\n\n## ⚠️ PROBLEMAS DE SEGURIDAD\n[vulnerabilidades, inyecciones, exposición de datos]\n\n## 🚀 PERFORMANCE\n[queries N+1, loops innecesarios, memory leaks]\n\n## 📐 CALIDAD DE CÓDIGO\n[naming, SOLID principles, DRY, legibilidad]\n\n## ✅ SUGERENCIAS DE MEJORA\n[con código mejorado para cada punto]\n\n## 📊 PUNTUACIÓN GLOBAL\n[nota /10 con justificación]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 10,
                'use_case' => 'Review de PRs antes de merge a main.',
            ],
            [
                'profession' => 'desarrollo',
                'title' => 'Genera tests unitarios completos para tu función',
                'description' => 'Genera una suite completa de tests unitarios cubriendo casos felices, edge cases y casos de error para cualquier función.',
                'prompt_content' => "Eres un experto en testing y TDD.\n\nGenera una suite completa de tests unitarios para esta función:\n\nLenguaje/Framework de testing: [ej. PHP/PHPUnit, JS/Jest, Python/pytest]\n\n```\n[PEGA TU FUNCIÓN AQUÍ]\n```\n\nIncluye:\n1. Happy path tests (casos normales)\n2. Edge cases (límites, valores extremos)\n3. Error cases (inputs inválidos, excepciones)\n4. Mocks necesarios para dependencias externas\n\nFormato: Tests listos para ejecutar con nombres descriptivos en snake_case que expliquen qué se está testeando.\n\nCoverage objetivo: 100% de branches.",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 8,
                'use_case' => 'Añadir tests a código legacy o nuevo antes de refactoring.',
            ],
            [
                'profession' => 'product-management',
                'title' => 'Crea un PRD completo desde una idea de feature',
                'description' => 'Convierte una idea de feature en un Product Requirements Document estructurado y listo para el equipo de desarrollo.',
                'prompt_content' => "Eres un Senior Product Manager con experiencia en empresas B2B SaaS.\n\nNecesito un PRD completo para esta feature:\n\nIDEA: [DESCRIBE LA FEATURE EN 2-3 FRASES]\nProducto: [NOMBRE Y TIPO DE PRODUCTO]\nUsuarios afectados: [SEGMENTO DE USUARIOS]\n\nGenera el PRD con:\n\n## Resumen Ejecutivo\n## Problema que resuelve\n## Objetivos y métricas de éxito (OKRs/KPIs)\n## User Stories (formato: Como [usuario], quiero [acción], para [beneficio])\n## Criterios de aceptación por story\n## Casos de uso detallados\n## Out of scope\n## Riesgos e incertidumbres\n## Dependencias técnicas\n## Estimación de impacto vs. esfuerzo\n## Plan de lanzamiento sugerido",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Inicio de sprint de discovery para nueva funcionalidad.',
            ],
            [
                'profession' => 'ventas',
                'title' => 'Email de outreach personalizado que genera respuestas',
                'description' => 'Genera emails de cold outreach altamente personalizados basados en el perfil LinkedIn y empresa del prospecto.',
                'prompt_content' => "Eres un experto en ventas B2B y outreach con alta tasa de respuesta.\n\nCrea un email de outreach personalizado con estos datos:\n\nINFO DEL PROSPECTO:\n- Nombre: [NOMBRE]\n- Cargo: [CARGO]\n- Empresa: [EMPRESA]\n- Sector: [SECTOR]\n- Dato personal relevante: [algo de su LinkedIn, artículo que escribió, logro reciente]\n\nMI CONTEXTO:\n- Mi empresa: [EMPRESA]\n- Qué ofrezco: [PRODUCTO/SERVICIO]\n- Por qué encaja con ellos: [RAZÓN ESPECÍFICA]\n\nEstructura el email así:\n- Asunto: [máx 50 chars, personalizado, sin clickbait]\n- Opener: referencia al dato personal (1-2 frases)\n- Bridge: conexión natural con el problema que resuelvo\n- Value prop: 1-2 frases máximo, centrado en su beneficio\n- CTA: simple y de bajo compromiso\n- P.D.: opcional, humanizador\n\nTono: profesional pero conversacional. Máx. 150 palabras.",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'beginner',
                'estimated_minutes' => 5,
                'use_case' => 'Secuencias de outreach para pipeline de ventas.',
            ],
            [
                'profession' => 'rrhh',
                'title' => 'Job description atractivo que reduce sesgos',
                'description' => 'Crea descripciones de trabajo inclusivas que atraigan talento diverso y reduzcan el sesgo inconsciente en el lenguaje.',
                'prompt_content' => "Eres un experto en employer branding y diversidad & inclusión en RRHH.\n\nCrea una job description para esta posición:\n\nROL: [TÍTULO DEL PUESTO]\nEmpresa: [NOMBRE Y BREVE DESCRIPCIÓN]\nEquipo: [EQUIPO Y TAMAÑO]\nModalidad: [REMOTO/HÍBRIDO/PRESENCIAL] - [CIUDAD]\nRango salarial: [RANGO O 'competitivo']\n\nRequisitos que tengo en mente:\n- Must have: [lista]\n- Nice to have: [lista]\n\nGenera una JD que:\n1. Use lenguaje neutro (sin sesgos de género/edad)\n2. Describa impacto real del rol, no solo tareas\n3. Liste beneficios de forma atractiva\n4. Incluya proceso de selección transparente\n5. Tenga un about us auténtico\n\nAdemás, resalta en rojo cualquier frase que pueda generar sesgo y sugiere alternativa.",
                'tool_name' => 'Claude',
                'difficulty' => 'beginner',
                'estimated_minutes' => 10,
                'use_case' => 'Apertura de nuevas posiciones con enfoque en diversidad.',
            ],
        ];

        foreach ($skills as $data) {
            $profession = Profession::where('slug', $data['profession'])->first();
            if (! $profession) {
                continue;
            }

            $title = $data['title'];
            $slug = Str::slug($title);
            $counter = 1;
            while (Skill::where('slug', $slug)->exists()) {
                $slug = Str::slug($title).'-'.$counter++;
            }

            Skill::firstOrCreate(
                ['slug' => $slug],
                [
                    'profession_id' => $profession->id,
                    'user_id' => $admin->id,
                    'title' => $title,
                    'slug' => $slug,
                    'description' => $data['description'],
                    'prompt_content' => $data['prompt_content'],
                    'tool_name' => $data['tool_name'],
                    'difficulty' => $data['difficulty'],
                    'estimated_minutes' => $data['estimated_minutes'],
                    'use_case' => $data['use_case'],
                    'status' => 'published',
                    'vote_score' => rand(10, 150),
                ]
            );
        }

        // Update professions skills_count
        Profession::all()->each(function (Profession $profession) {
            $profession->update(['skills_count' => $profession->publishedSkills()->count()]);
        });
    }
}
