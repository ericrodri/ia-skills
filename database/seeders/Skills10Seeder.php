<?php

namespace Database\Seeders;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Skills10Seeder extends Seeder
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

            // ─────────────────────────────────────────────────────────────
            // VENTAS (2)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'ventas',
                'title' => 'Cold email personalizado de alto impacto',
                'description' => 'Genera una secuencia de 3 cold emails hiperpersonalizados para outbound B2B, con subject lines probados, apertura por contexto y CTA de bajo compromiso.',
                'prompt_content' => "Eres un experto en outbound sales con experiencia en metodologías de Aaron Ross (Predictable Revenue) y Josh Braun.\n\nCrea una secuencia de 3 cold emails para este prospecto:\n\nEMPRESA PROSPECTO: [NOMBRE Y SECTOR]\nCargo del destinatario: [TÍTULO, ej: VP de Operaciones]\nProblema que resuelves: [DOLOR ESPECÍFICO QUE ENFRENTA SU ROL]\nTu producto/servicio: [DESCRIPCIÓN EN 1 FRASE]\nTrigger o contexto reciente: [NOTICIA, CONTRATACIÓN, FINANCIACIÓN, etc. — o escribe \"ninguno\"]\nCaso de éxito referenciable: [EMPRESA SIMILAR + RESULTADO] — o escribe \"ninguno\"\n\nPara cada email:\n- Asunto (máx 7 palabras, sin spam words)\n- Preview text (máx 90 caracteres)\n- Cuerpo (máx 120 palabras)\n- CTA de bajo compromiso (no pedir llamada de 30 min de entrada)\n- Día de envío en la secuencia\n\nReglas que debes seguir:\n1. Email 1: apertura por contexto del prospecto, NO por tu producto\n2. Email 2 (día 3): diferente ángulo — caso de éxito o dato de industria\n3. Email 3 (día 7): breakup email con honestidad directa\n4. Sin \"espero que este email te encuentre bien\"\n5. Sin párrafos de más de 2 líneas\n6. Nunca adjuntar nada en primer contacto\n\nFormato de salida:\n[EMAIL 1 — Día 1]\nAsunto:\nPreview:\nCuerpo:\nCTA:\n\n[EMAIL 2 — Día 3]\n...\n\n[EMAIL 3 — Día 7]\n...",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Outbound B2B: prospectar nuevas cuentas o reactivar leads fríos con secuencia multi-touch.',
                'vote_score' => 318,
            ],
            [
                'profession' => 'ventas',
                'title' => 'Manejo de objeciones de precio con contraoferta',
                'description' => 'Entrena respuestas a las 7 objeciones de precio más comunes en B2B/B2C, con técnicas de reencuadre, defensa de valor y estrategias de contraoferta sin descuentos innecesarios.',
                'prompt_content' => "Eres un coach de ventas consultivas especializado en negociación de valor y cierre sin descuentos.\n\nCrea un playbook de manejo de objeciones de precio para:\n\nPRODUCTO/SERVICIO: [DESCRIPCIÓN]\nPrecio/rango de precio: [PRECIO O RANGO]\nPrincipal propuesta de valor: [QUÉ RESULTADO CONCRETO ENTREGA]\nCompetidor más mencionado: [NOMBRE O \"genérico más barato\"]\nTipo de venta: [B2B / B2C] y [TRANSACCIONAL / CONSULTIVA]\n\nGenera respuestas para estas 7 objeciones:\n\n1. \"Es muy caro\" (objeción genérica)\n2. \"No tenemos presupuesto ahora\"\n3. \"La competencia cobra la mitad\"\n4. \"Necesito pensarlo / consultarlo\"\n5. \"¿Puedes hacerme un descuento?\"\n6. \"No veo por qué pagar tanto por eso\"\n7. [OBJECIÓN ESPECÍFICA DE TU INDUSTRIA — escríbela aquí]\n\nPara cada objeción entrega:\n- Técnica a usar (nombre del método: Feel-Felt-Found, Reencuadre ROI, etc.)\n- Respuesta completa lista para decir en voz alta (conversacional, no robótica)\n- Pregunta de seguimiento para mantener el diálogo\n- Señal de alerta de que el deal está perdido vs. la objeción es negociable\n\nBonus:\n- Cuándo SÍ ofrecer descuento (condiciones que lo justifican)\n- Cómo estructurar una contraoferta que preserve el precio sin perder el cliente",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Preparación de negociaciones de cierre, training de SDRs/AEs, o construcción de sales playbook.',
                'vote_score' => 267,
            ],

            // ─────────────────────────────────────────────────────────────
            // RRHH (2)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'rrhh',
                'title' => 'Plan de onboarding 30-60-90 días personalizado',
                'description' => 'Genera un plan de onboarding estructurado para un nuevo empleado, con objetivos progresivos, hitos medibles, recursos clave y checkpoints de feedback para los primeros 90 días.',
                'prompt_content' => "Eres un HR Business Partner especializado en employee experience y retención de talento.\n\nCrea un plan de onboarding 30-60-90 días para:\n\nROL DEL NUEVO EMPLEADO: [TÍTULO DEL PUESTO]\nÁrea/equipo: [DEPARTAMENTO]\nNivel de seniority: [JUNIOR / SEMI-SENIOR / SENIOR / MANAGER]\nModalidad: [PRESENCIAL / REMOTO / HÍBRIDO]\nPrincipales responsabilidades del rol: [3-5 responsabilidades clave]\nHerramientas/sistemas que usará: [LISTA DE TOOLS]\nDesafíos conocidos del área en este momento: [SI LOS HAY]\n\nEstructura del plan:\n\n## ANTES DEL DÍA 1 (Preboarding)\n- Documentos y accesos a preparar\n- Mensaje de bienvenida recomendado\n- Kit de materiales a enviar\n\n## PRIMEROS 30 DÍAS — Aprender\nObjetivo: entender el negocio, el equipo y las expectativas\n- Semana 1: [actividades específicas]\n- Semana 2: [actividades específicas]\n- Semanas 3-4: [actividades específicas]\n- Hito al día 30: [entregable o milestone concreto]\n- Check-in: [preguntas para el 1:1 de 30 días]\n\n## DÍAS 31-60 — Contribuir\nObjetivo: primeras contribuciones reales y autonomía creciente\n- [Actividades y proyectos específicos]\n- Hito al día 60:\n- Check-in:\n\n## DÍAS 61-90 — Impactar\nObjetivo: operar con autonomía y mostrar impacto medible\n- [Actividades y proyectos]\n- Hito al día 90:\n- Check-in:\n\n## MÉTRICAS DE ÉXITO DEL ONBOARDING\n[3-5 KPIs para medir si el onboarding funcionó]\n\n## RECURSOS CLAVE\n[Lista de documentos, personas y canales que debe conocer]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Estandarizar el proceso de incorporación de talento y reducir time-to-productivity en nuevas contrataciones.',
                'vote_score' => 243,
            ],
            [
                'profession' => 'rrhh',
                'title' => 'Job description que atrae talento top sin sesgo',
                'description' => 'Redacta una oferta de empleo estructurada que maximiza candidatos cualificados, minimiza sesgos inconscientes y comunica cultura de empresa de forma auténtica.',
                'prompt_content' => "Eres un especialista en employer branding y atracción de talento con expertise en bias-free hiring.\n\nCrea una job description optimizada para:\n\nROL: [TÍTULO DEL PUESTO]\nÁrea: [DEPARTAMENTO]\nNivel: [JUNIOR / MID / SENIOR / LEAD]\nModalidad: [PRESENCIAL / REMOTO / HÍBRIDO + ciudad si aplica]\nRango salarial: [RANGO O \"a definir según perfil\"]\nResponsabilidades clave: [3-6 responsabilidades principales]\nRequisitos técnicos imprescindibles: [SKILLS HARD OBLIGATORIAS]\nRequisitos técnicos deseables: [SKILLS HARD OPCIONALES]\nCultura del equipo en 3 palabras: [EJ: directa, autónoma, curiosa]\nBeneficios destacados: [LISTA]\n\nEstructura a generar:\n\n## TITULAR DE LA OFERTA\n[Título + seniority + modalidad en una línea atractiva]\n\n## SOBRE EL ROL (3-4 oraciones)\n[Por qué este rol importa y qué impacto tendrá]\n\n## LO QUE HARÁS (bullet points con verbo de acción)\n[5-7 responsabilidades en lenguaje activo y concreto]\n\n## LO QUE NECESITAS (separado en imprescindible vs. nice-to-have)\n\n## LO QUE OFRECEMOS\n[Beneficios + propuesta de cultura, sin promesas vacías]\n\n## SOBRE NOSOTROS (2-3 oraciones auténticas)\n\nReglas anti-sesgo:\n- Sin adjetivos de personalidad codificados por género (\"agresivo\", \"ninja\", \"rockstar\")\n- Sin requisitos de años de experiencia arbitrarios\n- Sin lenguaje que excluya por edad, estado civil o familia\n- Incluir frase de inclusión si aplica a la empresa\n\nRevisa el resultado y señala cualquier término potencialmente sesgado que hayas detectado.",
                'tool_name' => 'Claude',
                'difficulty' => 'beginner',
                'estimated_minutes' => 15,
                'use_case' => 'Publicar ofertas en LinkedIn, Glassdoor o portal interno con mayor ratio de aplicaciones de calidad.',
                'vote_score' => 301,
            ],

            // ─────────────────────────────────────────────────────────────
            // PRODUCT MANAGEMENT (2)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'product-management',
                'title' => 'PRD completo desde idea de feature',
                'description' => 'Transforma una idea de feature o problema de usuario en un Product Requirements Document (PRD) completo con contexto, objetivos, métricas, edge cases y criterios de éxito.',
                'prompt_content' => "Eres un Senior Product Manager con experiencia en startups de alto crecimiento y metodologías de producto modernas.\n\nCrea un PRD completo para la siguiente feature:\n\nIDEA/PROBLEMA: [DESCRIBE EL PROBLEMA DEL USUARIO O LA IDEA EN BRUTO]\nProducto/plataforma donde vive: [NOMBRE Y DESCRIPCIÓN BREVE DEL PRODUCTO]\nUsuario objetivo: [SEGMENTO O PERSONA]\nPrioridad de negocio: [HIGH / MEDIUM / LOW]\nFecha objetivo de lanzamiento: [FECHA O TRIMESTRE]\nEquipo que ejecutará: [ENGINEERING + DISEÑO + OTROS]\n\nEstructura del PRD:\n\n## RESUMEN EJECUTIVO\n[1 párrafo: el problema, la solución propuesta y el impacto esperado]\n\n## CONTEXTO Y PROBLEMA\n- Descripción detallada del problema\n- Evidencia: datos cuantitativos o cualitativos que validan el problema\n- Usuarios afectados y frecuencia\n- Costo de NO resolver este problema\n\n## OBJETIVOS Y MÉTRICAS DE ÉXITO\n- Objetivo de negocio (OKR al que contribuye)\n- Métricas primarias (lo que moveremos)\n- Métricas de guardia (lo que NO debemos mover)\n- Definición de éxito a 30 / 90 días post-lanzamiento\n\n## SOLUCIÓN PROPUESTA\n- Descripción del flujo principal (happy path)\n- Wireframe en texto / descripción de estados de UI\n- Alternativas consideradas y por qué se descartaron\n\n## REQUERIMIENTOS FUNCIONALES\n[Lista priorizada: Must Have / Should Have / Won't Have esta versión]\n\n## EDGE CASES Y REQUERIMIENTOS NO FUNCIONALES\n[Casos borde, performance, accesibilidad, seguridad]\n\n## DEPENDENCIAS Y RIESGOS\n[Bloqueos técnicos, dependencias de otros equipos, riesgos de adopción]\n\n## PLAN DE LANZAMIENTO\n[Rollout gradual, flags de feature, comunicación a usuarios]",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 30,
                'use_case' => 'Alinear a engineering, diseño y stakeholders antes de iniciar el ciclo de desarrollo de una feature.',
                'vote_score' => 356,
            ],
            [
                'profession' => 'product-management',
                'title' => 'Análisis de feedback de usuarios para priorización',
                'description' => 'Procesa un dump de feedback de usuarios (reviews, tickets, encuestas, entrevistas) y extrae insights accionables con categorización, frecuencia y sugerencias de priorización.',
                'prompt_content' => "Eres un Product Manager experto en síntesis de investigación de usuarios y frameworks de priorización como RICE, ICE y MoSCoW.\n\nAnaliza el siguiente feedback de usuarios:\n\nFUENTE DEL FEEDBACK: [APP STORE REVIEWS / TICKETS DE SOPORTE / ENCUESTAS / ENTREVISTAS / OTRO]\nProducto: [NOMBRE Y QUÉ HACE]\nFecha del feedback: [PERÍODO]\n\nFEEDBACK CRUDO:\n[PEGA AQUÍ TODO EL FEEDBACK — puede ser texto libre, reviews, transcripciones]\n\nEntrega el análisis con:\n\n## RESUMEN EJECUTIVO\n[3-5 bullets con los hallazgos más importantes]\n\n## CATEGORIZACIÓN DE FEEDBACK\n[Agrupa por tema: UI/UX, Performance, Features faltantes, Bugs, Pricing, Onboarding, etc.]\nPara cada categoría:\n- Frecuencia (N menciones = X%)\n- Sentimiento predominante (positivo/negativo/neutro)\n- Citas textuales más representativas (2-3)\n\n## TOP 5 PAIN POINTS\n[Ordenados por frecuencia + severidad]\nPara cada uno:\n- Descripción del problema\n- Impacto estimado en retención/conversión\n- Posible solución en hipótesis\n\n## TOP 3 DELIGHT FACTORS\n[Lo que los usuarios aman — no tocar o ampliar]\n\n## BACKLOG SUGERIDO\n[Features/fixes derivados del feedback, ordenados por score RICE estimado]\n| Feature | Reach | Impact | Confidence | Effort | RICE Score |\n\n## PRÓXIMOS PASOS DE INVESTIGACIÓN\n[Preguntas sin responder que requieren más datos o entrevistas]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Sesiones de priorización de roadmap, presentaciones a stakeholders o síntesis post-lanzamiento de feature.',
                'vote_score' => 289,
            ],

            // ─────────────────────────────────────────────────────────────
            // LEGAL (1)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'legal',
                'title' => 'Borrador de NDA bilateral para relación comercial',
                'description' => 'Genera un Non-Disclosure Agreement bilateral equilibrado para proteger información confidencial en negociaciones, partnerships o procesos de due diligence.',
                'prompt_content' => "Eres un abogado corporativo especializado en contratos mercantiles y propiedad intelectual.\n\n⚠️ AVISO: Este borrador es un punto de partida. Siempre revisa con un abogado licenciado en tu jurisdicción antes de firmar.\n\nGenera un NDA bilateral para:\n\nPARTE A: [NOMBRE EMPRESA / PERSONA + PAÍS]\nPARTE B: [NOMBRE EMPRESA / PERSONA + PAÍS]\nPropósito de la relación: [EJ: evaluación de adquisición, partnership tecnológico, negociación comercial]\nTipo de información a proteger: [EJ: código fuente, bases de datos, estrategia comercial, fórmulas]\nDuración de la confidencialidad: [EJ: 2 años desde firma, 5 años para secretos comerciales]\nJurisdicción y ley aplicable: [PAÍS / ESTADO]\n\nEl NDA debe incluir:\n\n1. DEFINICIÓN DE INFORMACIÓN CONFIDENCIAL\n   [Clara y amplia, con exclusiones explícitas]\n\n2. OBLIGACIONES DE CONFIDENCIALIDAD\n   [Obligaciones de ambas partes, estándar de cuidado]\n\n3. USO PERMITIDO DE LA INFORMACIÓN\n   [Solo para el propósito declarado]\n\n4. EXCLUSIONES\n   [Información pública, ya conocida, obtenida de terceros legítimamente, requerida por ley]\n\n5. DEVOLUCIÓN O DESTRUCCIÓN DE INFORMACIÓN\n   [Procedimiento al terminar la relación]\n\n6. PLAZO DE VIGENCIA\n7. REMEDIOS POR INCUMPLIMIENTO (injunction + daños)\n8. CLÁUSULA DE NO SOLICITUD DE EMPLEADOS (opcional)\n9. DISPOSICIONES GENERALES (cesión, modificaciones, ley aplicable, disputas)\n\nFormato: lenguaje legal formal pero claro, artículos numerados, sin lagunas en las definiciones clave.",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Iniciar negociaciones, partnerships o due diligence con protección legal básica mientras se prepara documentación formal.',
                'vote_score' => 198,
            ],

            // ─────────────────────────────────────────────────────────────
            // CUSTOMER SUPPORT (1)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'customer-support',
                'title' => 'Base de conocimiento desde tickets de soporte',
                'description' => 'Transforma un historial de tickets de soporte en una base de conocimiento estructurada con artículos de FAQ, guías paso a paso y árboles de decisión para agentes y autoservicio.',
                'prompt_content' => "Eres un especialista en Knowledge Management y Customer Experience con experiencia en Zendesk, Intercom y Help Scout.\n\nConvierte los siguientes tickets de soporte en una base de conocimiento estructurada:\n\nPRODUCTO/SERVICIO: [NOMBRE Y DESCRIPCIÓN BREVE]\nAudiencia de la KB: [CLIENTES FINALES / AGENTES DE SOPORTE / AMBOS]\nIdioma de salida: [ESPAÑOL / INGLÉS / OTRO]\n\nTICKETS DE SOPORTE:\n[PEGA AQUÍ LOS TICKETS — puedes incluir el asunto, descripción del problema y solución aplicada]\n\nProcesa los tickets y genera:\n\n## ANÁLISIS DE TICKETS\n- Total de tickets analizados\n- Categorías identificadas con frecuencia\n- Issues más recurrentes que deben documentarse primero\n\n## ARTÍCULOS DE FAQ (formato cliente final)\nPara cada categoría principal, crea un artículo con:\n- Título en formato pregunta (\"¿Cómo...?\", \"¿Por qué...?\", \"¿Qué hago si...?\")\n- Respuesta directa en 1-2 oraciones\n- Pasos detallados si aplica (numerados)\n- Captura de pantalla / imagen sugerida (describe qué mostrar)\n- Links relacionados (placeholders)\n- Etiquetas para búsqueda\n\n## GUÍAS DE TROUBLESHOOTING (formato agente)\nPara los 3 issues más frecuentes:\n- Árbol de decisión: pregunta → sí/no → siguiente paso\n- Escalado: cuándo escalar y a quién\n- Template de respuesta al cliente\n\n## GAPS DETECTADOS\n[Preguntas recurrentes que no tienen respuesta clara en los tickets — requieren investigación interna]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 25,
                'use_case' => 'Crear o actualizar la base de conocimiento interna y de autoservicio con datos reales de problemas de clientes.',
                'vote_score' => 234,
            ],

            // ─────────────────────────────────────────────────────────────
            // FREELANCERS (1)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'freelancers',
                'title' => 'Contrato de servicios freelance anti-scope creep',
                'description' => 'Genera un contrato de servicios profesionales claro y equilibrado que protege al freelancer del scope creep, pagos tardíos y disputas, sin necesidad de abogado para servicios estándar.',
                'prompt_content' => "Eres un consultor de negocios para freelancers y solopreneurs con expertise en protección contractual y gestión de clientes.\n\n⚠️ AVISO: Para contratos de alto valor o jurisdicciones complejas, consulta a un abogado.\n\nGenera un contrato de servicios para:\n\nFREELANCER: [NOMBRE / EMPRESA]\nCLIENTE: [NOMBRE / EMPRESA]\nSERVICIO A PRESTAR: [DESCRIPCIÓN DEL PROYECTO]\nAlcance específico incluido: [QUÉ ENTREGAS EXACTAMENTE]\nAlcance explícitamente EXCLUIDO: [QUÉ NO INCLUYE]\nHonorarios: [PRECIO TOTAL O TARIFA]\nEstructura de pagos: [EJ: 50% adelanto, 50% al entregar]\nFecha de inicio y entrega estimada: [FECHAS]\nForma de comunicación acordada: [EMAIL / SLACK / ETC.]\nJurisdicción: [PAÍS]\n\nEl contrato debe incluir:\n\n1. PARTES Y DESCRIPCIÓN DEL PROYECTO\n2. ALCANCE DEL TRABAJO (incluido y excluido con bullet points explícitos)\n3. ENTREGABLES Y CRITERIOS DE ACEPTACIÓN\n   [Qué se entrega, en qué formato, cómo se aprueba]\n4. CRONOGRAMA Y HITOS\n5. HONORARIOS Y FORMA DE PAGO\n   - Penalidad por pago tardío\n   - Proceso para solicitar revisiones (número incluido vs. cobro extra)\n6. POLÍTICA DE CAMBIOS DE ALCANCE\n   [Cómo se cotiza y aprueba trabajo fuera del scope]\n7. PROPIEDAD INTELECTUAL\n   [Cuándo transfiere al cliente: al pago completo]\n8. CONFIDENCIALIDAD\n9. CANCELACIÓN\n   [Por ambas partes: qué pasa con pagos y entregables]\n10. LIMITACIÓN DE RESPONSABILIDAD\n11. FIRMAS\n\nTono: profesional pero directo. Sin términos legales innecesariamente complejos.",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Formalizar proyectos con nuevos clientes, especialmente cuando no hay contrato estándar de por medio.',
                'vote_score' => 312,
            ],

            // ─────────────────────────────────────────────────────────────
            // FINANZAS (1)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'finanzas',
                'title' => 'Modelo de unit economics para startup o negocio digital',
                'description' => 'Construye un análisis completo de unit economics (CAC, LTV, payback period, margen de contribución) para validar la sostenibilidad financiera de un modelo de negocio.',
                'prompt_content' => "Eres un CFO fractional con experiencia en startups SaaS, marketplaces y negocios digitales en etapa early-stage a growth.\n\nConstruye el modelo de unit economics para:\n\nMODELO DE NEGOCIO: [DESCRIBE CÓMO GENERA DINERO TU EMPRESA]\nTipo de negocio: [SAAS / ECOMMERCE / MARKETPLACE / SERVICIOS / OTRO]\nTicket promedio o MRR por cliente: [NÚMERO]\nFrecuencia de compra o churn mensual: [NÚMERO]\nCostos variables directos por venta: [LISTA + MONTOS]\nCAC actual o estimado (costo de adquirir 1 cliente): [NÚMERO O \"desconocido\"]\nDesglose de canales de adquisición: [EJ: 40% paid ads, 30% referidos, 30% orgánico]\nMoneda: [USD / EUR / MXN / ARS / OTRO]\n\nCalcula y explica:\n\n## MÉTRICAS CORE\n- Revenue por cliente (mensual / anual)\n- Gross Margin % y en valor absoluto\n- Contribution Margin por cliente\n- LTV (Lifetime Value) con fórmula usada\n- CAC por canal y promedio blended\n- LTV:CAC ratio (benchmark: >3x saludable, >5x excelente)\n- Payback Period en meses\n\n## TABLA DE ESCENARIOS\n| Escenario | Churn/Conversión | LTV | CAC | LTV:CAC | Payback |\n| Pesimista | ... | ... | ... | ... | ... |\n| Base | ... | ... | ... | ... | ... |\n| Optimista | ... | ... | ... | ... | ... |\n\n## DIAGNÓSTICO\n- ¿El negocio es sostenible hoy? ¿Por qué?\n- Principal palanca para mejorar LTV:CAC\n- Cuello de botella financiero más urgente\n\n## ACCIONES CONCRETAS\n[3 iniciativas específicas para mejorar los unit economics en los próximos 90 días]\n\n## SUPUESTOS Y LIMITACIONES\n[Qué asumiste y qué datos harían el modelo más preciso]",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 25,
                'use_case' => 'Validar viabilidad financiera antes de escalar adquisición, preparar pitch deck para inversores o revisar salud del negocio.',
                'vote_score' => 274,
            ],

        ];

        foreach ($skills as $data) {
            $profession = Profession::where('slug', $data['profession'])->first();
            if (! $profession) {
                $this->command->warn("Profession not found: {$data['profession']}");
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
                    'vote_score' => $data['vote_score'],
                ]
            );

            $this->command->info("Created: {$title}");
        }

        Profession::all()->each(function (Profession $profession) {
            $profession->update(['skills_count' => $profession->publishedSkills()->count()]);
        });
    }
}
