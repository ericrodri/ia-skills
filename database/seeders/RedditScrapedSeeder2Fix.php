<?php

namespace Database\Seeders;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RedditScrapedSeeder2Fix extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [
            [
                'profession' => 'product-management',
                'title' => 'Creador de SWOT accionable con matriz estratégica',
                'description' => 'Genera un análisis SWOT profesional que va más allá de listar factores: cruza fortalezas, debilidades, oportunidades y amenazas en estrategias concretas para ejecutar.',
                'prompt_content' => "Actúa como un consultor de estrategia senior formado en McKinsey, especializado en análisis situacional de empresas tech.\n\nEmpresa/Producto a analizar:\n- Nombre: [EMPRESA O PRODUCTO]\n- Descripción: [QUÉ HACE, PARA QUIÉN, CÓMO GANA DINERO]\n- Stage: [IDEA / MVP / PRODUCTO CON TRACCIÓN / SCALEUP / ENTERPRISE]\n- Mercado: [GEOGRAFÍA E INDUSTRIA]\n- Información disponible:\n  [PEGA MÉTRICAS, NOTICIAS, FEEDBACK, LO QUE TENGAS]\n\nGenera el análisis SWOT accionable en 3 niveles:\n\n## NIVEL 1: DIAGNÓSTICO\n\n**FORTALEZAS** (factores internos positivos)\n- Lista de 5-7 fortalezas con evidencia concreta para cada una\n- Ranking por importancia estratégica\n\n**DEBILIDADES** (factores internos negativos)\n- Lista de 5-7 debilidades con impacto estimado\n- Distingue: debilidades urgentes vs. aceptables a corto plazo\n\n**OPORTUNIDADES** (factores externos positivos)\n- Lista de 5-7 oportunidades con tamaño estimado y ventana de tiempo\n- Ranking por accesibilidad con los recursos actuales\n\n**AMENAZAS** (factores externos negativos)\n- Lista de 5-7 amenazas con probabilidad (alta/media/baja) e impacto (alto/medio/bajo)\n\n## NIVEL 2: MATRIZ CRUZADA (el análisis que pocos hacen)\n\n**Estrategias FO (Fortalezas + Oportunidades)**\n→ Cómo usar tus fortalezas para aprovechar las oportunidades: 3 estrategias concretas\n\n**Estrategias DO (Debilidades + Oportunidades)**\n→ Cómo aprovechar oportunidades para superar debilidades: 3 estrategias\n\n**Estrategias FA (Fortalezas + Amenazas)**\n→ Cómo usar fortalezas para mitigar amenazas: 3 estrategias\n\n**Estrategias DA (Debilidades + Amenazas)**\n→ Plan defensivo para reducir exposición: 3 estrategias\n\n## NIVEL 3: PLAN DE ACCIÓN\nTop 5 iniciativas estratégicas priorizadas, con:\n- Estrategia que ejecuta\n- Owner sugerido\n- Timeline (30/60/90 días)\n- Métrica de éxito\n- Recursos necesarios",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'En sesiones de planificación estratégica, antes de una ronda de inversión o cuando el equipo necesita alinear hacia dónde ir.',
                'vote_score' => 356,
            ],
            [
                'profession' => 'product-management',
                'title' => 'Calculadora de TAM/SAM/SOM con narrativa para inversores',
                'description' => 'Genera el cálculo de mercado total, disponible y obtenible con metodología top-down y bottom-up, más la narrativa convincente para presentar a inversores.',
                'prompt_content' => "Actúa como un analista de mercado con experiencia en due diligence para fondos de Venture Capital y en elaboración de pitch decks para startups de Series A+.\n\nStartup:\n- Nombre: [NOMBRE]\n- Descripción del producto: [QUÉ HACE Y PARA QUIÉN]\n- Geografía inicial: [PAÍS/REGIÓN]\n- Modelo de negocio: [SAAS / MARKETPLACE / TRANSACCIONAL / etc.]\n- Precio por cliente/transacción: [PRECIO]\n- Industria vertical: [SECTOR]\n- Datos de mercado que conoces (si tienes): [INFORMES, ESTADÍSTICAS O 'ninguno']\n\nGenera el análisis de mercado completo:\n\n## METODOLOGÍA TOP-DOWN (de macro a micro)\n\n**TAM — Total Addressable Market**\n- Tamaño del mercado global de la industria con fuente\n- Cálculo: [número de potenciales clientes globales × precio anual]\n- TAM: \$[X]B con justificación\n\n**SAM — Serviceable Addressable Market**\n- Segmento al que realmente puedes llegar con tu modelo de negocio y recursos\n- Filtros aplicados: geografía, idioma, tamaño de empresa, madurez tecnológica\n- SAM: \$[X]M con justificación\n\n**SOM — Serviceable Obtainable Market**\n- Lo que realísticamente puedes capturar en 3-5 años\n- Basado en: velocidad de crecimiento del sector, competencia, recursos de go-to-market\n- SOM: \$[X]M con justificación\n\n## METODOLOGÍA BOTTOM-UP (validación desde la realidad)\n- Número de clientes potenciales en el mercado objetivo (con fuente)\n- Tasa de penetración realista por año (1-5%)\n- ARPU (annual revenue per user) basado en tu precio\n- Cálculo bottom-up del SOM: [clientes × ARPU]\n- ¿Coincide con el top-down? Si no, ¿por qué?\n\n## NARRATIVA PARA INVERSORES\nPárrafo de 150 palabras que presente el mercado de forma convincente:\n- Empieza con el problema de escala\n- Usa el número más impresionante con contexto\n- Explica por qué AHORA es el momento (viento de cola)\n- Termina con tu participación de mercado objetivo en 5 años\n\n## SLIDE DE MERCADO (estructura recomendada)\nQué poner en cada parte del slide de TAM/SAM/SOM para que sea visualmente claro y creíble\n\n## PREGUNTAS DE INVERSORES (con respuestas preparadas)\n5 preguntas que seguro harán sobre el mercado y cómo responderlas con datos",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Al preparar un pitch deck para inversores, en fundraising o cuando necesitas justificar el tamaño de la oportunidad ante el board.',
                'vote_score' => 389,
            ],
            [
                'profession' => 'customer-support',
                'title' => 'Sistema de health score para cuentas B2B (modelo completo)',
                'description' => 'Diseña un modelo de customer health score desde cero: métricas a incluir, pesos, umbrales de alerta y playbooks de acción para cada nivel de salud.',
                'prompt_content' => "Actúa como un VP of Customer Success con experiencia construyendo health score models en SaaS B2B con más de 500 cuentas.\n\nContexto del producto:\n- Tipo de SaaS: [DESCRIPCIÓN DEL PRODUCTO]\n- Segmento de clientes: [SMB / MID-MARKET / ENTERPRISE]\n- MRR promedio por cuenta: [CANTIDAD]\n- Ciclo de renovación: [MENSUAL / ANUAL]\n- Datos disponibles:\n  - Uso del producto: [SÍ / NO — qué datos tienes]\n  - Soporte/tickets: [SÍ / NO]\n  - Facturación: [SÍ / NO]\n  - NPS/CSAT: [SÍ / NO]\n  - Actividad de contactos: [SÍ / NO]\n\nDiseña el health score model completo:\n\n## DIMENSIONES DEL HEALTH SCORE\nPara cada dimensión:\n- Nombre y por qué importa\n- Métricas específicas a medir\n- Cómo calcular la puntuación (0-100) para esa dimensión\n- Peso en el score final (% del total)\n\nDimensiones a considerar:\n1. **Product Adoption** (uso activo, features adoptadas, frecuencia)\n2. **Engagement** (contacto con CSM, respuesta a emails, asistencia a QBRs)\n3. **ROI Achievement** (¿están logrando sus objetivos?)\n4. **Support Health** (tickets abiertos, tiempo de resolución, sentimiento)\n5. **Commercial Health** (pagos a tiempo, expansión, señales de churn)\n6. **Relationship Depth** (nº de stakeholders involucrados, nivel de sponsor)\n\n## CÁLCULO DEL SCORE COMPUESTO\nFórmula ponderada y cómo actualizar el score (frecuencia de recálculo)\n\n## UMBRALES Y SEMÁFORO\n- 🟢 Verde (score 70-100): definición + qué significa\n- 🟡 Amarillo (score 40-69): definición + señales de alerta\n- 🔴 Rojo (score 0-39): definición + riesgo de churn inminente\n\n## PLAYBOOKS DE ACCIÓN POR NIVEL\n\n**Cuenta Verde:** ¿Qué hacer para mantenerla y expandirla?\n**Cuenta Amarilla:** Secuencia de acción en 30 días para estabilizar\n**Cuenta Roja:** Plan de rescate urgente (acciones en las primeras 48h, 2 semanas, 30 días)\n\n## IMPLEMENTACIÓN\n- Cómo recopilar los datos necesarios\n- Herramientas recomendadas (Gainsight, ChurnZero, Totango o alternativas más baratas)\n- Cómo presentarlo al equipo y a management\n- Cómo iterar el modelo cuando no predice bien",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 25,
                'use_case' => 'Al construir el área de Customer Success desde cero o cuando el equipo necesita ser más proactivo y menos reactivo con la retención.',
                'vote_score' => 378,
            ],
        ];

        $count = 0;
        foreach ($skills as $data) {
            $profession = Profession::where('slug', $data['profession'])->first();
            if (! $profession) {
                $this->command->warn("Profesión no encontrada: {$data['profession']}");
                continue;
            }

            $slug = Str::slug($data['title']);
            if (Skill::where('slug', $slug)->exists()) {
                $this->command->warn("Ya existe: {$slug}");
                continue;
            }

            Skill::create([
                'profession_id'     => $profession->id,
                'user_id'           => $admin->id,
                'title'             => $data['title'],
                'slug'              => $slug,
                'description'       => $data['description'],
                'prompt_content'    => $data['prompt_content'],
                'tool_name'         => $data['tool_name'],
                'difficulty'        => $data['difficulty'],
                'estimated_minutes' => $data['estimated_minutes'],
                'use_case'          => $data['use_case'],
                'status'            => 'published',
                'vote_score'        => $data['vote_score'],
                'views_count'       => rand(400, 5000),
                'saves_count'       => rand(40, 500),
                'version'           => 1,
            ]);
            $count++;
        }

        $this->command->info("✅ RedditScrapedSeeder2Fix: {$count} skills insertadas.");
    }
}
