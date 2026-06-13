<?php

namespace Database\Seeders;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Skills11Seeder extends Seeder
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
            // MARKETING (2)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'marketing',
                'title' => 'Estrategia de contenido LinkedIn B2B para 30 días',
                'description' => 'Genera un plan de contenido completo para LinkedIn con 20 publicaciones listas para publicar, combinando formatos (carrusel, texto, video guionado), pilares de contenido y calendario de publicación.',
                'prompt_content' => "Eres un estratega de contenido B2B especializado en LinkedIn con experiencia construyendo personal brands y brand accounts que generan pipeline.\n\nCrea un plan de contenido LinkedIn para 30 días:\n\nEMPRESA O PERSONAL BRAND: [NOMBRE]\nIndustria / Nicho: [SECTOR]\nAudiencia objetivo (ICP): [CARGO + INDUSTRIA + TAMAÑO DE EMPRESA]\nPropuesta de valor principal: [QUÉ RESUELVES O VENDES]\nTono de voz: [EJ: experto accesible / provocador / educativo / conversacional]\nTemas de expertise que puedes hablar con autoridad: [LISTA DE 3-5 TEMAS]\nObjetivo principal del canal: [AWARENESS / GENERACIÓN DE LEADS / EMPLOYER BRANDING]\n\n## PILARES DE CONTENIDO\n[Define 4 pilares basados en el ICP y objetivos. Para cada pilar: nombre + propósito + 2 ejemplos de post]\n\n## CALENDARIO 30 DÍAS\n[20 posts distribuidos en 5 semanas, 4 posts/semana. Para cada post:]\n- Semana y día sugerido\n- Pilar al que pertenece\n- Formato: [TEXTO LARGO / CARRUSEL / ENCUESTA / DOCUMENTO / VIDEO GUIONADO]\n- Hook de apertura (primera línea, máx 200 caracteres — decide si el usuario hace clic en \"ver más\")\n- Estructura del contenido (bullets del desarrollo)\n- CTA final\n- Hashtags sugeridos (máx 5)\n\n## 3 POSTS COMPLETOS LISTOS PARA PUBLICAR\n[Elige los 3 más potentes del calendario y escríbelos completos]\n\n## GUÍA DE ENGAGEMENT\n- Cuándo responder comentarios y cómo\n- Cómo amplificar con el equipo\n- Métricas a trackear semana a semana",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 25,
                'use_case' => 'Lanzar o relanzar una presencia en LinkedIn con estrategia clara, sin improvisar publicación a publicación.',
                'vote_score' => 341,
            ],
            [
                'profession' => 'marketing',
                'title' => 'Análisis competitivo de marketing digital con insights accionables',
                'description' => 'Estructura un análisis profundo de la estrategia de marketing digital de tus competidores directos: canales, mensajes, posicionamiento, brechas y oportunidades para diferenciarte.',
                'prompt_content' => "Eres un consultor de marketing estratégico con expertise en inteligencia competitiva y posicionamiento de marca.\n\nRealiza un análisis competitivo de marketing digital para:\n\nMI EMPRESA: [NOMBRE + DESCRIPCIÓN EN 1 FRASE]\nMi propuesta de valor principal: [QUÉ ME DIFERENCIA HOY]\nMi segmento objetivo: [ICP]\n\nCOMPETIDORES A ANALIZAR:\n- Competidor 1: [NOMBRE + URL]\n- Competidor 2: [NOMBRE + URL]\n- Competidor 3: [NOMBRE + URL]\n\nINFORMACIÓN QUE TENGO SOBRE ELLOS (pega lo que sepas: ads, posts, emails, landings, reviews):\n[PEGA AQUÍ — puede ser capturas descritas, copies de ads, textos de landing, reviews de G2/Capterra]\n\n## ANÁLISIS POR COMPETIDOR\nPara cada uno:\n\n### [NOMBRE COMPETIDOR]\n**Posicionamiento principal:** [Cómo se definen a sí mismos]\n**Mensajes clave:** [Los 3 claims más repetidos]\n**Canales activos:** [SEO / Paid / Email / Social / Content]\n**Audiencia que atacan:** [Segmento percibido]\n**Fortalezas de marketing:** [Qué hacen bien]\n**Debilidades:** [Qué no comunican o hacen mal]\n**Tono de voz:** [Cómo hablan]\n\n## MAPA DE POSICIONAMIENTO\n[Ubica a cada competidor en 2 ejes relevantes para el sector]\n\n## BRECHAS Y OPORTUNIDADES\n[3-5 espacios que ningún competidor está ocupando bien]\n\n## ESTRATEGIA DE DIFERENCIACIÓN RECOMENDADA\n- Mensaje posicionamiento propuesto para mi empresa\n- 2-3 ángulos de contenido que ninguno explota\n- Canal prioritario a atacar basado en el análisis\n\n## PRÓXIMOS PASOS\n[5 acciones concretas para las próximas 2 semanas]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 30,
                'use_case' => 'Definir o refinar estrategia de marketing antes de una campaña, rebrand o entrada a nuevo mercado.',
                'vote_score' => 287,
            ],

            // ─────────────────────────────────────────────────────────────
            // DESARROLLO (2)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'desarrollo',
                'title' => 'Arquitectura de sistema desde requerimientos de negocio',
                'description' => 'Transforma requerimientos de negocio en una propuesta de arquitectura técnica con diagramas en texto, decisiones tecnológicas justificadas, trade-offs y plan de implementación por fases.',
                'prompt_content' => "Eres un Software Architect senior con experiencia en sistemas distribuidos, arquitecturas cloud y decisiones de diseño orientadas a negocio.\n\nDiseña la arquitectura técnica para:\n\nDESCRIPCIÓN DEL SISTEMA: [QUÉ HACE EL SISTEMA EN TÉRMINOS DE NEGOCIO]\nVolumen estimado de usuarios: [EJ: 1K usuarios concurrentes / 10M transacciones/mes]\nPresupuesto de infraestructura mensual estimado: [RANGO O \"sin restricción\"]\nEquipo técnico disponible: [TAMAÑO + TECNOLOGÍAS QUE DOMINA]\nRequerimientos no funcionales críticos: [EJ: 99.9% uptime / GDPR / latencia <200ms / offline-first]\nIntegraciones requeridas: [SISTEMAS EXTERNOS QUE DEBE CONECTAR]\nStacktecnológico actual (si existe): [O \"greenfield\"]\n\n## VISTA GENERAL DE ARQUITECTURA\n[Diagrama en texto ASCII o Mermaid mostrando componentes principales y sus relaciones]\n\n## DECISIONES ARQUITECTÓNICAS CLAVE\nPara cada decisión (mínimo 5):\n- Decisión: [QUÉ SE DECIDIÓ]\n- Contexto: [Por qué era una decisión necesaria]\n- Alternativas consideradas: [Qué más se evaluó]\n- Consecuencias: [Trade-offs asumidos]\n\n## STACK TECNOLÓGICO RECOMENDADO\n| Capa | Tecnología | Justificación |\n|------|-----------|---------------|\n| Frontend | ... | ... |\n| Backend | ... | ... |\n| Base de datos | ... | ... |\n| Cache | ... | ... |\n| Mensajería | ... | ... |\n| Infraestructura | ... | ... |\n| Observabilidad | ... | ... |\n\n## PLAN DE IMPLEMENTACIÓN POR FASES\n- Fase 1 (MVP): [Qué construir primero y por qué]\n- Fase 2 (Escala): [Qué añadir cuando el negocio valide]\n- Fase 3 (Optimización): [Mejoras post-product-market-fit]\n\n## RIESGOS TÉCNICOS Y MITIGACIONES\n[Top 3 riesgos con plan de contingencia]\n\n## LO QUE DELIBERADAMENTE SE DEJA FUERA\n[Decisiones postergadas y por qué está bien posponerlas]",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 35,
                'use_case' => 'Alinear a tech leads, CTOs y stakeholders antes de iniciar el desarrollo de un sistema nuevo o una migración mayor.',
                'vote_score' => 389,
            ],
            [
                'profession' => 'desarrollo',
                'title' => 'Generador de tests unitarios con casos borde',
                'description' => 'Genera una suite completa de tests unitarios para una función o clase existente, incluyendo happy path, casos borde, inputs inválidos y mocks de dependencias externas.',
                'prompt_content' => "Eres un Senior Software Engineer especializado en TDD, calidad de código y diseño de suites de test robustas.\n\nGenera tests unitarios completos para el siguiente código:\n\nLENGUAJE/FRAMEWORK: [EJ: TypeScript con Jest / Python con pytest / PHP con PHPUnit]\nFRAMEWORK DE TEST: [NOMBRE]\nCÓDIGO A TESTEAR:\n```\n[PEGA AQUÍ LA FUNCIÓN, CLASE O MÓDULO]\n```\nDependencias externas que tiene: [EJ: base de datos, API externa, sistema de archivos, etc.]\n¿Tiene tests existentes?: [SÍ — pégalos / NO]\n\nGenera la suite de tests con:\n\n## ANÁLISIS DEL CÓDIGO\n- Qué hace (comportamiento observable, no implementación)\n- Paths que necesitan cobertura\n- Dependencias que deben mockearse\n\n## SUITE DE TESTS COMPLETA\n\n### Happy Path\n[Tests del flujo principal con inputs válidos]\n\n### Casos Borde\n[Tests para:\n- Valores en límites (0, null, string vacío, array vacío, número máximo)\n- Tipos inesperados\n- Datos en los extremos del rango válido]\n\n### Casos de Error\n[Tests que verifican que los errores se lanzan/manejan correctamente]\n\n### Tests de Integración con Mocks\n[Simula las dependencias externas con mocks/stubs/fakes]\n\n## COBERTURA ESTIMADA\n[Porcentaje de líneas / branches cubiertos con esta suite]\n\n## TESTS QUE DELIBERADAMENTE NO SE INCLUYEN\n[Comportamientos que deberían testearse en tests de integración o E2E, no unitarios]\n\n## SUGERENCIAS DE REFACTOR\n[Si el código es difícil de testear, qué cambiarías para hacerlo más testeable — sin cambiar el comportamiento]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Aumentar cobertura de tests rápidamente, hacer TDD retroactivo sobre código legado, o preparar código para refactoring.',
                'vote_score' => 326,
            ],

            // ─────────────────────────────────────────────────────────────
            // DISEÑO (1)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'diseno',
                'title' => 'Brief creativo para identidad de marca desde cero',
                'description' => 'Genera un brief creativo completo para el desarrollo de identidad de marca: posicionamiento visual, dirección de arte, paleta de color con justificación psicológica, tipografía y ejemplos de aplicación.',
                'prompt_content' => "Eres un Director de Arte con experiencia en branding estratégico para startups, productos digitales y empresas en crecimiento.\n\nCrea el brief creativo de identidad de marca para:\n\nEMPRESA/PRODUCTO: [NOMBRE]\nIndustria: [SECTOR]\nDescripción en una frase: [QUÉ HACE]\nAudiencia principal: [PERFIL DEMOGRÁFICO Y PSICOGRÁFICO]\nCompetidores directos: [2-3 NOMBRES]\nPersonalidad de marca en 5 adjetivos: [EJ: confiable, moderna, cercana, ambiciosa, clara]\nLo que NUNCA debe comunicar: [2-3 atributos a evitar]\nReferencias visuales que te gustan (de otras marcas): [NOMBRES + POR QUÉ]\nReferencias que definitivamente NO: [NOMBRES + POR QUÉ]\nPresupuesto de producción estimado: [BAJO / MEDIO / ALTO]\n\n## PLATAFORMA DE MARCA\n- Esencia de marca (1 frase)\n- Propósito (por qué existimos más allá del dinero)\n- Valores (3-4 con descripción de cómo se manifiestan visualmente)\n- Promesa de marca\n\n## DIRECCIÓN CREATIVA\n### Concepto central\n[La idea que unifica todo el sistema visual — en 1-2 párrafos]\n\n### Metáfora visual\n[La imagen mental o concepto que inspira el diseño]\n\n## SISTEMA VISUAL\n\n### Paleta de color\n| Color | Hex sugerido | Rol | Psicología |\n|-------|-------------|-----|------------|\n| Primario | ... | ... | ... |\n| Secundario | ... | ... | ... |\n| Acento | ... | ... | ... |\n| Neutros | ... | ... | ... |\n\n### Tipografía\n- Fuente principal (headings): [NOMBRE + POR QUÉ]\n- Fuente secundaria (body): [NOMBRE + POR QUÉ]\n- Fuente de acento (si aplica): [NOMBRE + CUÁNDO USARLA]\n\n### Estilo de iconografía e ilustración\n[Descripción del estilo: outlined / filled / flat / 3D / custom / etc.]\n\n### Estilo fotográfico\n[Si la marca usará fotografía: describir estilo, colores, tipo de sujetos]\n\n## APLICACIONES PRIORITARIAS\n[Cómo se ve la marca en: logo principal, favicon, tarjeta de presentación, redes sociales, interfaz digital]\n\n## BRIEF PARA EL DISEÑADOR\n[Instrucciones concretas para el diseñador que ejecutará el sistema]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 25,
                'use_case' => 'Briefear a un estudio de diseño o diseñador freelance con claridad estratégica antes de iniciar la exploración visual.',
                'vote_score' => 298,
            ],

            // ─────────────────────────────────────────────────────────────
            // VENTAS (1)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'ventas',
                'title' => 'Propuesta comercial persuasiva para cliente enterprise',
                'description' => 'Genera una propuesta comercial estructurada con problem statement validado, solución personalizada, ROI cuantificado, plan de implementación y pricing con opciones estratégicas.',
                'prompt_content' => "Eres un Sales Consultant senior especializado en ventas consultivas enterprise y elaboración de propuestas de alto valor.\n\nCrea una propuesta comercial para:\n\nCLIENTE: [NOMBRE DE LA EMPRESA]\nIndustria del cliente: [SECTOR]\nCargo del decisor principal: [TÍTULO]\nProblema detectado en la discovery call: [DESCRIBE EL DOLOR ESPECÍFICO]\nImpacto cuantificado del problema (si lo tienes): [NÚMERO O \"no cuantificado\"]\nSolución que propones: [DESCRIPCIÓN]\nPrecio de tu solución: [MONTO O RANGO]\nTiempo de implementación: [SEMANAS / MESES]\nCasos de éxito relevantes: [EMPRESA SIMILAR + RESULTADO, O \"ninguno\"]\nFecha límite de la propuesta: [FECHA]\n\n## ESTRUCTURA DE LA PROPUESTA\n\n### 1. PORTADA\n[Título de la propuesta, fecha, preparado para/por]\n\n### 2. RESUMEN EJECUTIVO (para el C-level que no leerá todo)\n[Máx 1 página: problema, solución, ROI esperado, inversión requerida]\n\n### 3. ENTENDEMOS TU SITUACIÓN\n[Problem statement en sus propias palabras — demuestra que escuchaste]\n- Situación actual\n- Impacto de no resolver esto (en dinero, tiempo, riesgo)\n- Por qué ahora es el momento de actuar\n\n### 4. NUESTRA SOLUCIÓN\n[Descripción de la solución adaptada a su contexto específico]\n- Qué incluye exactamente\n- Cómo se implementa (fases + hitos)\n- Qué necesitamos de su equipo\n\n### 5. ROI Y BUSINESS CASE\n[Modelo simplificado: inversión vs. retorno esperado]\n- Beneficio cuantificado (ahorros, ingresos incrementales, reducción de riesgo)\n- Payback period estimado\n- Asunciones del modelo\n\n### 6. CASOS DE ÉXITO\n[1-2 clientes similares con resultados concretos]\n\n### 7. INVERSIÓN\n[Tabla de pricing con opciones estratégicas]\n| Opción | Alcance | Inversión | Ideal para |\n|--------|---------|-----------|------------|\n| Básica | ... | ... | ... |\n| Recomendada | ... | ... | ... |\n| Premium | ... | ... | ... |\n\n### 8. PRÓXIMOS PASOS\n[3 pasos concretos con responsable y fecha]\n\n### 9. GARANTÍA Y CONDICIONES\n[Términos de pago, garantía si ofreces, condiciones especiales]\n\n## NOTAS AL VENDEDOR\n[Puntos de negociación, anclas de precio, cuándo mencionar cada opción]",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 30,
                'use_case' => 'Preparar propuestas para deals de alto valor que requieren persuadir a múltiples stakeholders y justificar ROI.',
                'vote_score' => 334,
            ],

            // ─────────────────────────────────────────────────────────────
            // RRHH (1)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'rrhh',
                'title' => 'Evaluación de desempeño 360° con plan de desarrollo',
                'description' => 'Genera un proceso completo de evaluación 360° incluyendo formularios para autoevaluación, evaluación de pares, evaluación de manager y reporte final con plan de desarrollo individual.',
                'prompt_content' => "Eres un especialista en People Development y performance management con experiencia en implementar sistemas de feedback efectivos y culturas de alto rendimiento.\n\nCrea el proceso de evaluación 360° para:\n\nROL DEL EVALUADO: [TÍTULO DEL PUESTO]\nNivel de seniority: [JUNIOR / SEMI-SENIOR / SENIOR / MANAGER / DIRECTOR]\nÁrea / equipo: [DEPARTAMENTO]\nCompetencias clave del rol (las más importantes para rendir bien): [LISTA 4-6]\nValores de la empresa que deben evaluarse: [LISTA 2-3]\nObjetivos establecidos al inicio del período: [LISTA DE OBJETIVOS O \"no definidos formalmente\"]\nPeríodo evaluado: [TRIMESTRE / SEMESTRE / AÑO]\n\n## FORMULARIO DE AUTOEVALUACIÓN\n[10-12 preguntas reflexivas en primera persona]\n- Incluir: logros con evidencia, áreas de mejora con honestidad, cómo viví los valores, qué necesito de mi manager/empresa para crecer\n- Formato: preguntas abiertas + escala 1-5 con descripción de cada nivel\n\n## FORMULARIO PARA PARES (evaluación lateral)\n[8-10 preguntas orientadas a colaboración, confiabilidad y contribución al equipo]\n- Escala + pregunta abierta de fortaleza y área de mejora\n\n## FORMULARIO PARA MANAGER\n[12-15 preguntas sobre resultados, competencias, potencial y fit cultural]\n- Incluir: evaluación de objetivos, rating de competencias, assessment de potencial (performance/potential matrix)\n\n## GUÍA PARA CALIBRACIÓN\n[Cómo alinear ratings entre managers para evitar sesgos de leniencia, halo effect y sesgo de recencia]\n\n## REPORTE FINAL 360°\n[Template para el reporte consolidado que recibe el evaluado]\n- Resumen de fortalezas (con citas anonimizadas)\n- Áreas de desarrollo prioritarias\n- Rating final por competencia\n- Comparativa self vs. others\n\n## PLAN DE DESARROLLO INDIVIDUAL (PDI)\n[Template para los 6 meses siguientes]\n- 1-2 áreas de foco\n- Acciones concretas por área (con recursos, fechas y responsable)\n- Cómo se medirá el progreso",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 35,
                'use_case' => 'Implementar un ciclo de performance review completo o rediseñar un proceso de evaluación existente que no está generando valor.',
                'vote_score' => 267,
            ],

            // ─────────────────────────────────────────────────────────────
            // CUSTOMER SUPPORT (1)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'customer-support',
                'title' => 'Respuesta empática a cliente furioso con resolución',
                'description' => 'Genera respuestas de soporte para situaciones de alta tensión emocional: cliente furioso, queja pública, error grave de la empresa o amenaza de churn, con protocolo de desescalada y retención.',
                'prompt_content' => "Eres un Customer Experience Manager con expertise en manejo de crisis de clientes, comunicación empática y técnicas de retención.\n\nGenera la respuesta y el protocolo de manejo para esta situación:\n\nTIPO DE SITUACIÓN:\n[ ] Cliente furioso por falla del producto/servicio\n[ ] Error grave cometido por la empresa\n[ ] Queja pública en redes sociales o review negativa\n[ ] Cliente amenazando con cancelar / churn\n[ ] Combinación: [DESCRIBE]\n\nDESCRIPCIÓN DEL CASO:\n[EXPLICA QUÉ PASÓ EXACTAMENTE — qué falló, cuánto tiempo lleva el problema, qué ha dicho el cliente]\n\nTONO DEL CLIENTE EN SU ÚLTIMO MENSAJE: [MUY AGRESIVO / FRUSTRADO / DECEPCIONADO / FRÍO Y FORMAL]\n\nQUÉ PUEDE OFRECER LA EMPRESA PARA RESOLVER:\n[REEMBOLSO / DESCUENTO / SERVICIO GRATUITO / SOLO DISCULPA / OTRO]\n\nCanal de comunicación: [EMAIL / CHAT / REDES SOCIALES / TELÉFONO]\n\n## ANÁLISIS DE LA SITUACIÓN\n- Emoción principal del cliente y qué necesita escuchar primero\n- Responsabilidad real de la empresa (0-100%)\n- Riesgo de escalada si no se maneja bien\n\n## RESPUESTA INMEDIATA (lista para enviar)\n[Redacción completa con]\n1. Reconocimiento de la emoción (sin defensividad)\n2. Toma de responsabilidad sin excesos\n3. Qué vas a hacer y cuándo\n4. Solución concreta ofrecida\n5. Cierre que invita al diálogo\n\n## PROTOCOLO DE SEGUIMIENTO\n- Qué hacer en las próximas 24h\n- Qué ofrecer si el cliente no queda satisfecho\n- Cuándo escalar a un supervisor\n- Cómo documentar el caso\n\n## RESPUESTA PÚBLICA (si aplica)\n[Si fue queja en redes/reviews: versión pública corta que cierre el tema sin airear detalles]\n\n## LO QUE NO DEBES DECIR\n[Frases que empeorarían la situación en este caso específico]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Manejar situaciones de alto riesgo de churn o reputación, entrenar a agentes de soporte en desescalada y preparar respuestas en crisis.',
                'vote_score' => 312,
            ],

            // ─────────────────────────────────────────────────────────────
            // FINANZAS (1)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'finanzas',
                'title' => 'Análisis de estados financieros con diagnóstico ejecutivo',
                'description' => 'Interpreta balance general, estado de resultados y flujo de caja para extraer el diagnóstico financiero real de una empresa: solvencia, rentabilidad, liquidez y señales de alerta temprana.',
                'prompt_content' => "Eres un CFO con experiencia en análisis financiero de empresas en distintas etapas: startups, pymes y corporativos.\n\nAnaliza los siguientes estados financieros:\n\nEMPRESA: [NOMBRE]\nIndustria: [SECTOR]\nEtapa: [STARTUP / PYME / CORPORATIVO]\nPeríodo: [TRIMESTRE O AÑO]\nMoneda: [USD / EUR / MXN / OTRO]\n\n[PEGA AQUÍ EL BALANCE GENERAL — puede ser texto plano o tabla]\n\n[PEGA AQUÍ EL ESTADO DE RESULTADOS]\n\n[PEGA AQUÍ EL ESTADO DE FLUJO DE CAJA — si no tienes, escribe \"no disponible\"]\n\nContexto adicional relevante: [RECIENTE FINANCIACIÓN / ADQUISICIÓN / CRISIS / CRECIMIENTO ACELERADO / NADA ESPECIAL]\n\n## DIAGNÓSTICO EJECUTIVO (para board o CEO)\n[Máx 1 página: salud financiera en 3 oraciones, los 2 puntos fuertes y los 2 riesgos principales]\n\n## ANÁLISIS DE RENTABILIDAD\n- Gross Margin % (y vs. benchmark de industria)\n- EBITDA Margin %\n- Net Margin %\n- Tendencia: ¿mejorando o deteriorando?\n\n## ANÁLISIS DE LIQUIDEZ\n- Current Ratio\n- Quick Ratio\n- Días de caja disponibles\n- ¿Hay riesgo de liquidez en los próximos 90 días?\n\n## ANÁLISIS DE SOLVENCIA\n- Debt-to-Equity ratio\n- Cobertura de deuda\n- ¿La estructura de capital es sostenible?\n\n## ANÁLISIS DE EFICIENCIA OPERATIVA\n- Days Sales Outstanding (DSO)\n- Days Inventory Outstanding (si aplica)\n- Ciclo de conversión de caja\n\n## SEÑALES DE ALERTA\n[Banderas rojas detectadas — ser directo aunque sea incómodo]\n\n## PALANCAS FINANCIERAS RECOMENDADAS\n[3-5 acciones concretas para mejorar la situación, ordenadas por impacto/urgencia]\n\n## PREGUNTAS QUE QUEDAN ABIERTAS\n[Qué información adicional cambiaría el diagnóstico]",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 25,
                'use_case' => 'Análisis rápido de salud financiera para presentaciones a board, due diligence, preparación de ronda de inversión o revisión mensual ejecutiva.',
                'vote_score' => 256,
            ],

            // ─────────────────────────────────────────────────────────────
            // FREELANCERS (1)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'freelancers',
                'title' => 'Estrategia de precios y packaging para subir tarifas',
                'description' => 'Define una estrategia de pricing escalable con paquetes de servicios, anclas de precio y un script de negociación para dejar de cobrar por hora y empezar a cobrar por valor.',
                'prompt_content' => "Eres un business coach para freelancers y consultores independientes especializado en pricing estratégico, productización de servicios y posicionamiento premium.\n\nCrea una estrategia de pricing para:\n\nTIPO DE SERVICIO FREELANCE: [DISEÑO / DESARROLLO / CONSULTORÍA / COPYWRITING / OTRO]\nEspecialización concreta: [EJ: diseño de landing pages para SaaS / desarrollo backend Node.js / consultoría de marketing B2B]\nAño de experiencia: [NÚMERO]\nClientes actuales (tipo y tamaño): [EJ: startups de 5-20 personas / pymes retail]\nTarifa actual (hora o proyecto): [NÚMERO + MONEDA]\nTarifa que quieres llegar: [OBJETIVO]\nPor qué no has subido precios antes: [MIEDO A PERDER CLIENTES / NO SÉ CÓMO JUSTIFICARLO / MERCADO COMPETITIVO / OTRO]\nResultado más concreto que has entregado: [EJ: aumenté conversión de una landing de 2% a 6%]\n\n## DIAGNÓSTICO DE PRICING ACTUAL\n[Por qué tu tarifa actual está mal y qué está dejando dinero en la mesa]\n\n## ESTRATEGIA DE PRICING POR VALOR\n[Cómo pasar de cobrar por tiempo a cobrar por resultado]\n- Qué resultado concreto vende tu servicio (no el proceso, el outcome)\n- Cómo cuantificar ese valor para el cliente\n- Ratio inversión/retorno que debería guiar tu precio\n\n## ARQUITECTURA DE PAQUETES\nDiseña 3 paquetes (la clásica estructura de 3 opciones para anclar precio):\n\n### Paquete Starter\n- Qué incluye exactamente\n- Para quién es\n- Precio sugerido\n- Por qué existe (ancla baja que hace al medio parecer razonable)\n\n### Paquete Profesional ← RECOMENDAR ESTE\n- Qué incluye\n- Para quién es\n- Precio sugerido\n- Por qué es el que más valor entrega\n\n### Paquete Premium\n- Qué incluye (acceso, velocidad, garantía)\n- Para quién es\n- Precio sugerido\n- Por qué existe (ancla alta que hace al medio parecer accesible)\n\n## CÓMO COMUNICAR EL AUMENTO A CLIENTES ACTUALES\n[Script exacto de email o conversación para subir precios sin perder la relación]\n\n## CÓMO RESPONDER CUANDO DICEN \"ES MUY CARO\"\n[3 respuestas concretas alineadas a tu nuevo posicionamiento]\n\n## ROADMAP DE TRANSICIÓN\n[Plan de 90 días para llegar a la tarifa objetivo sin perder ingresos en el proceso]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Freelancers que quieren salir de la trampa del cobro por hora, productizar sus servicios y acceder a clientes de mayor valor.',
                'vote_score' => 345,
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
