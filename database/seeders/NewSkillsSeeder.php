<?php

namespace Database\Seeders;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewSkillsSeeder extends Seeder
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
            // MARKETING (5 nuevas)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'marketing',
                'title' => 'Copy para landing page de alta conversión',
                'description' => 'Genera el copy completo de una landing page con headline, propuesta de valor, beneficios, prueba social y CTA optimizados para conversión.',
                'prompt_content' => "Eres un experto en conversion copywriting con metodología de Eugene Schwartz y David Ogilvy.\n\nNecesito el copy completo para una landing page:\n\nPRODUCTO/SERVICIO: [DESCRIBE TU OFERTA]\nAudiencia objetivo: [PERFIL DETALLADO DEL CLIENTE IDEAL]\nPrincipal dolor que resuelvo: [PROBLEMA ESPECÍFICO]\nPrincipal beneficio/resultado: [RESULTADO CONCRETO Y CUANTIFICABLE]\nPrecio/posicionamiento: [RANGO DE PRECIO O TIER]\nPrincipal objeción de compra: [OBJECIÓN #1]\n\nGenera el copy con esta estructura:\n\n## HEADLINE PRINCIPAL (5 variaciones)\n[impacto inmediato, beneficio concreto, sin jerga]\n\n## SUBHEADLINE\n[amplía el headline, introduce el problema-solución]\n\n## HERO SECTION (párrafo de apertura)\n[empatía con el dolor + promesa de transformación]\n\n## 3 BENEFICIOS CLAVE\n[icono + título + 2 frases cada uno, en lenguaje del cliente]\n\n## PRUEBA SOCIAL\n[template de 2 testimonios con datos específicos: nombre, empresa, resultado cuantificado]\n\n## MANEJO DE OBJECIÓN PRINCIPAL\n[sección 'Entendemos que...' que desarma la objeción]\n\n## CTA PRINCIPAL + SECUNDARIO\n[texto del botón + microcopy de confianza debajo]\n\n## P.D. (si aplica)\n[elemento de urgencia o refuerzo de valor]\n\nTono: [INFORMAL/PROFESIONAL/INSPIRACIONAL]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Lanzamiento de producto, campaña de paid ads o rediseño de página de ventas.',
                'vote_score' => 312,
            ],
            [
                'profession' => 'marketing',
                'title' => 'Estrategia de email nurture para leads fríos',
                'description' => 'Crea una secuencia de 7 emails de nurturing para convertir leads fríos en clientes, con un arco narrativo progresivo y llamadas a la acción graduales.',
                'prompt_content' => "Eres un experto en email marketing y automatización con especialidad en nurture sequences B2B/B2C.\n\nCrea una secuencia de 7 emails de nurturing para:\n\nEMPRESA/PRODUCTO: [NOMBRE Y DESCRIPCIÓN BREVE]\nLead magnet con el que se suscribieron: [LEAD MAGNET]\nPerfil del lead: [CARGO, INDUSTRIA, TAMAÑO DE EMPRESA]\nObjetivo final: [AGENDAR DEMO / COMPRAR / ACTIVAR TRIAL]\nDuración de la secuencia: [14 / 21 / 30 días]\n\nPara cada email incluye:\n- Día de envío\n- Asunto (+ 1 variante A/B)\n- Preview text\n- Cuerpo completo (150-250 palabras)\n- CTA principal\n- Objetivo del email en el journey\n\nArco narrativo de la secuencia:\n- Email 1 (Día 1): Bienvenida + entrega de valor inmediato\n- Email 2 (Día 3): Educación sobre el problema\n- Email 3 (Día 6): Historia/caso de éxito\n- Email 4 (Día 9): Desmontaje de mitos/objeciones\n- Email 5 (Día 12): Demostración de valor diferencial\n- Email 6 (Día 16): Urgencia soft + oferta\n- Email 7 (Día 20): Último intento + cierre de loop\n\nTono: [CONSULTIVO / AMIGABLE / AUTORITATIVO]\nEvita: lenguaje de spam, caps excesivos, más de 1 CTA por email.",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 30,
                'use_case' => 'Automatización de email marketing post-registro para leads que no convierten de inmediato.',
                'vote_score' => 278,
            ],
            [
                'profession' => 'marketing',
                'title' => 'Análisis de buyer persona con Jobs-to-be-Done',
                'description' => 'Construye un buyer persona profundo usando el framework Jobs-to-be-Done para entender motivaciones reales de compra, no solo demografía.',
                'prompt_content' => "Eres un estratega de marketing especializado en Jobs-to-be-Done (JTBD) y psicología del consumidor.\n\nCrea un buyer persona completo basado en JTBD para:\n\nPRODUCTO/SERVICIO: [DESCRIBE LO QUE VENDES]\nDato semilla: [DESCRIBE AL CLIENTE TÍPICO EN 2-3 FRASES]\nIndustria: [SECTOR]\n\nGenera el siguiente análisis:\n\n## PERFIL DEMOGRÁFICO Y PROFESIONAL\n- Nombre ficticio, edad, cargo, empresa tipo, salario estimado\n- Herramientas que usa a diario\n- Canales de información que consume\n\n## JOBS-TO-BE-DONE\n**Job funcional principal:** (la tarea concreta que intenta completar)\n**Job emocional:** (cómo quiere sentirse)\n**Job social:** (cómo quiere ser percibido)\n\n## MAPA DE DOLOR (Pain Map)\n- Frustraciones actuales con soluciones existentes\n- Consecuencias de no resolver el problema\n- Momento de máxima frustración (\"firing event\")\n\n## CRITERIOS DE COMPRA\n- Lo que lo hace comprar (pull factors)\n- Lo que lo frena (push factors / ansiedades)\n- Quién más influye en la decisión\n\n## FRASES TEXTUALES\n[5 frases reales que diría este persona en conversaciones, encuestas o reviews]\n\n## MENSAJES CLAVE PARA ESTE PERSONA\n[3 mensajes de marketing que resuenan directamente con sus JTBDs]\n\n## CANALES Y FORMATO DE CONTENIDO PREFERIDO\n[dónde encontrarlo y qué tipo de contenido consume]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 25,
                'use_case' => 'Research de mercado, ajuste de messaging y segmentación de campañas.',
                'vote_score' => 347,
            ],
            [
                'profession' => 'marketing',
                'title' => 'Generador de headlines virales para blog y redes',
                'description' => 'Crea 20 variaciones de headlines para cualquier contenido usando fórmulas probadas de copywriting que maximizan clicks y engagement.',
                'prompt_content' => "Eres un experto en copywriting de headlines con conocimiento de los frameworks de CoSchedule, Copyhackers y BuzzSumo.\n\nNecesito 20 variaciones de headline para este contenido:\n\nTEMA PRINCIPAL: [TEMA O ARTÍCULO]\nPalabra(s) clave SEO principal: [KEYWORD]\nAudiencia: [QUIÉN LO LEERÁ]\nObjetivo: [TRÁFICO SEO / ENGAGEMENT SOCIAL / EMAIL OPEN RATE]\nEmoción que quiero evocar: [CURIOSIDAD / URGENCIA / ASPIRACIÓN / MIEDO]\n\nCrea 20 headlines usando estas fórmulas (2 de cada una):\n\n1. NÚMERO + ADJETIVO + SUSTANTIVO + PROMESA\n   ej: \"7 Estrategias Probadas que Triplicarán tus Ventas en 90 Días\"\n\n2. CÓMO + VERBO + RESULTADO ESPECÍFICO\n   ej: \"Cómo Escribir Emails que Generan 40% de Open Rate\"\n\n3. POR QUÉ + [CREENCIA COMÚN] ES UN ERROR\n   ej: \"Por qué Publicar Todos los Días en LinkedIn es un Error\"\n\n4. LA GUÍA DEFINITIVA / COMPLETA PARA [OBJETIVO]\n5. [HACER ALGO] SIN [SACRIFICIO COMÚN]\n6. LO QUE [EXPERTOS / COMPETENCIA] NO TE DICEN SOBRE [TEMA]\n7. [NÚMERO] ERRORES QUE [AUDIENCIA] COMETEN EN [TEMA]\n8. DE [SITUACIÓN A] A [SITUACIÓN B] EN [TIEMPO]\n9. PREGUNTA PROVOCADORA QUE GENERA CURIOSIDAD\n10. FORMATO LISTA CON TENSIÓN NARRATIVA\n\nPara cada headline indica:\n- Fórmula usada\n- Plataforma ideal (Twitter/X, LinkedIn, blog, email)\n- Puntuación de urgencia/curiosidad (1-10)",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'beginner',
                'estimated_minutes' => 10,
                'use_case' => 'Crear variantes para A/B testing de posts, articles y asuntos de email.',
                'vote_score' => 234,
            ],
            [
                'profession' => 'marketing',
                'title' => 'Auditoría de estrategia de contenidos en LinkedIn',
                'description' => 'Analiza el perfil y contenido de LinkedIn de una empresa o persona y entrega un plan de mejora accionable para aumentar alcance y generación de leads.',
                'prompt_content' => "Eres un experto en estrategia de contenidos B2B para LinkedIn con experiencia en social selling y thought leadership.\n\nRealiza una auditoría completa del siguiente perfil/empresa de LinkedIn:\n\nPERFIL A AUDITAR: [URL O DESCRIPCIÓN DEL PERFIL]\nÚltimos 5 posts publicados:\n[POST 1: texto completo + métricas si las tienes]\n[POST 2: texto completo + métricas]\n[POST 3: texto completo + métricas]\n[POST 4: texto completo + métricas]\n[POST 5: texto completo + métricas]\n\nOBJETIVO DE NEGOCIO: [GENERAR LEADS / CONSTRUIR AUTORIDAD / CONTRATAR TALENTO]\nAudiencia objetivo: [CARGO, INDUSTRIA]\n\nGenera la auditoría con:\n\n## DIAGNÓSTICO DEL PERFIL (bio, headline, banner)\n[puntuación /10 + mejoras concretas]\n\n## ANÁLISIS DE CONTENIDO\n- Tipos de posts usados vs. recomendados\n- Frecuencia actual vs. óptima\n- Engagement rate real vs. benchmark de la industria\n- Fórmulas de posts que funcionan vs. las que no\n\n## TOP 3 GAPS CRÍTICOS\n[problemas principales que frenan el crecimiento]\n\n## PLAN DE ACCIÓN 30 DÍAS\n- Semana 1: [acciones específicas]\n- Semana 2: [acciones específicas]\n- Semana 3: [acciones específicas]\n- Semana 4: [acciones específicas]\n\n## 3 IDEAS DE POSTS PARA ESTA SEMANA\n[estructura completa de cada post, lista para publicar]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Revisión mensual de estrategia de contenidos B2B o preparación de propuesta para cliente.',
                'vote_score' => 291,
            ],

            // ─────────────────────────────────────────────────────────────
            // DESARROLLO (5 nuevas)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'desarrollo',
                'title' => 'Diseño de esquema de base de datos desde requisitos',
                'description' => 'Convierte requisitos de negocio en un esquema de base de datos relacional completo con tablas, relaciones, índices y justificaciones de diseño.',
                'prompt_content' => "Eres un database architect con experiencia en PostgreSQL, MySQL y diseño de sistemas escalables.\n\nDiseña el esquema de base de datos relacional para esta aplicación:\n\nDESCRIPCIÓN DE LA APLICACIÓN: [QUÉ HACE LA APP]\nEntidades principales del negocio: [LISTA DE ENTIDADES]\nFlujos de datos clave:\n1. [FLUJO 1: ej. \"Un usuario crea un pedido con múltiples productos\"]\n2. [FLUJO 2]\n3. [FLUJO 3]\n\nVolumen esperado: [USUARIOS / REGISTROS ESTIMADOS]\nBD objetivo: [PostgreSQL / MySQL / SQLite]\n\nEntrega:\n\n## DIAGRAMA ER (en texto/ASCII o descripción)\n\n## DEFINICIÓN DE TABLAS\nPara cada tabla:\n- Nombre\n- Columnas con tipos de datos, constraints (NOT NULL, UNIQUE, DEFAULT)\n- Primary key y foreign keys\n- Índices recomendados\n\n## RELACIONES\n- Tipo (1:1, 1:N, N:M)\n- Tabla pivot si aplica\n- ON DELETE / ON UPDATE strategy\n\n## DECISIONES DE DISEÑO\n[Justifica las 3-5 decisiones más importantes: normalización, soft deletes, timestamps, UUIDs vs integers]\n\n## QUERIES DE EJEMPLO\n[3 queries de uso frecuente con el esquema propuesto]\n\n## SQL DE CREACIÓN\n[SQL completo y ejecutable para crear todas las tablas]",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 25,
                'use_case' => 'Fase de diseño de un nuevo proyecto o refactoring de una BD existente.',
                'vote_score' => 389,
            ],
            [
                'profession' => 'desarrollo',
                'title' => 'Arquitectura de microservicios desde monolito',
                'description' => 'Analiza un monolito y propone una estrategia de migración a microservicios con límites de dominio, comunicación entre servicios y plan de migración incremental.',
                'prompt_content' => "Eres un software architect especializado en Domain-Driven Design y sistemas distribuidos.\n\nTengo este monolito y quiero migrar a microservicios:\n\nDESCRIPCIÓN DEL MONOLITO: [QUÉ HACE LA APLICACIÓN]\nStack tecnológico actual: [LENGUAJE, FRAMEWORK, BD]\nMódulos/dominios principales:\n1. [MÓDULO 1]\n2. [MÓDULO 2]\n3. [MÓDULO 3]\n4. [MÓDULO 4]\n\nProblemas actuales que motivan la migración:\n- [PROBLEMA 1: ej. \"El módulo de pagos bloquea deploys del resto\"]\n- [PROBLEMA 2]\n\nEquipo: [NÚMERO DE DEVELOPERS]\nTimeline disponible: [MESES]\n\nGenera el plan de arquitectura:\n\n## BOUNDED CONTEXTS (DDD)\n[Identifica los contextos delimitados naturales del dominio]\n\n## MAPA DE MICROSERVICIOS\nPara cada servicio propuesto:\n- Nombre y responsabilidad única\n- APIs que expone (endpoints clave)\n- BD propia (tipo recomendado)\n- Dependencias con otros servicios\n\n## ESTRATEGIA DE COMUNICACIÓN\n- Sync (REST/gRPC): cuándo y para qué\n- Async (events/queues): qué eventos y qué broker\n\n## STRANGLER FIG PATTERN\n[Plan de migración incremental: qué extraer primero y en qué orden]\n\n## RIESGOS Y MITIGACIONES\n[Top 5 riesgos con estrategias de mitigación]\n\n## QUICK WINS (primer servicio a extraer)\n[El servicio con mejor relación impacto/riesgo para empezar]",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 30,
                'use_case' => 'Planning de arquitectura en equipos que escalan y necesitan deploys independientes.',
                'vote_score' => 445,
            ],
            [
                'profession' => 'desarrollo',
                'title' => 'Generador de documentación técnica de API REST',
                'description' => 'Genera documentación completa tipo OpenAPI/Swagger para cualquier endpoint de tu API con ejemplos de request, response y códigos de error.',
                'prompt_content' => "Eres un technical writer especializado en documentación de APIs REST.\n\nGenera la documentación completa para esta API:\n\nNOMBRE DE LA API: [NOMBRE]\nBase URL: [URL BASE]\nAutenticación: [Bearer token / API Key / OAuth2 / etc.]\n\nEndpoints a documentar:\n[PEGA EL CÓDIGO DE LOS ENDPOINTS O DESCRÍBELOS]\n\nPara CADA endpoint genera:\n\n## [MÉTODO] /ruta\n**Descripción:** [qué hace]\n**Autenticación requerida:** Sí/No\n\n### Parámetros\n| Nombre | Tipo | Requerido | Descripción | Ejemplo |\n|--------|------|-----------|-------------|----------|\n\n### Request Body (si aplica)\n```json\n{\n  // Schema con todos los campos, tipos y validaciones\n}\n```\n\n### Respuestas\n**200 OK:**\n```json\n{\n  // Ejemplo de respuesta exitosa real y completo\n}\n```\n\n**400 Bad Request:**\n```json\n{ \"error\": \"...\", \"message\": \"...\", \"details\": {} }\n```\n\n**401 Unauthorized / 403 Forbidden / 404 Not Found / 500 Server Error**\n[esquema de error consistente]\n\n### Ejemplo cURL\n```bash\ncurl -X [METHOD] '[URL]' \\\n  -H 'Authorization: Bearer [TOKEN]' \\\n  -H 'Content-Type: application/json' \\\n  -d '{ ... }'\n```\n\n### Notas de implementación\n[Rate limiting, paginación, notas especiales]",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Documentar APIs para equipos internos, integraciones de terceros o portales para developers.',
                'vote_score' => 356,
            ],
            [
                'profession' => 'desarrollo',
                'title' => 'Análisis de vulnerabilidades de seguridad en código',
                'description' => 'Escanea tu código en busca de las vulnerabilidades OWASP Top 10 y recibe correcciones específicas con código mejorado.',
                'prompt_content' => "Eres un experto en seguridad aplicativa (AppSec) especializado en OWASP Top 10 y secure coding.\n\nAnaliza este código en busca de vulnerabilidades de seguridad:\n\nLenguaje/Framework: [LENGUAJE Y FRAMEWORK]\nContexto: [DESCRIBE QUÉ HACE ESTE CÓDIGO - auth, pagos, upload, etc.]\n\n```\n[PEGA EL CÓDIGO AQUÍ]\n```\n\nRevisa específicamente:\n\n## A01 - BROKEN ACCESS CONTROL\n[¿Hay checks de autorización? ¿Se puede acceder a recursos de otros usuarios?]\n\n## A02 - CRYPTOGRAPHIC FAILURES\n[Datos sensibles en texto plano, hashing débil, transmisión sin cifrar]\n\n## A03 - INJECTION\n[SQL injection, XSS, command injection, LDAP injection]\n\n## A04 - INSECURE DESIGN\n[Problemas de lógica de negocio, race conditions]\n\n## A05 - SECURITY MISCONFIGURATION\n[Headers HTTP, CORS, errores que exponen info del stack]\n\n## A07 - AUTHENTICATION FAILURES\n[Brute force, session management, JWT issues]\n\n## A08 - SOFTWARE & DATA INTEGRITY\n[Deserialización insegura, dependencias sin verificar]\n\nPara cada vulnerabilidad encontrada:\n1. Severidad: CRÍTICA / ALTA / MEDIA / BAJA\n2. Línea(s) afectada(s)\n3. Explicación del riesgo\n4. Código corregido (snippet completo listo para usar)\n5. Test para verificar la corrección\n\n## PUNTUACIÓN DE SEGURIDAD GLOBAL\n[score /10 con resumen ejecutivo]",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 15,
                'use_case' => 'Security review antes de deploy a producción o auditoría de código de terceros.',
                'vote_score' => 412,
            ],
            [
                'profession' => 'desarrollo',
                'title' => 'Optimización de queries SQL lentas',
                'description' => 'Analiza queries SQL con problemas de rendimiento y obtén versiones optimizadas con índices recomendados, reescritura de joins y estrategias de caching.',
                'prompt_content' => "Eres un DBA y performance engineer especializado en optimización de bases de datos relacionales.\n\nOptimiza este/estos query(ies) SQL que tienen problemas de rendimiento:\n\nBASE DE DATOS: [PostgreSQL / MySQL / SQL Server / etc.]\nVersión: [VERSIÓN]\nTamaño de las tablas involucradas: [ej. tabla_usuarios: 2M rows, tabla_pedidos: 50M rows]\nFrecuencia de ejecución: [ej. 1000 veces/minuto]\n\n```sql\n-- Query problemático:\n[PEGA EL QUERY AQUÍ]\n```\n\nEXPLAIN PLAN (si lo tienes):\n```\n[PEGA EL EXPLAIN AQUÍ O ESCRIBE 'no disponible']\n```\n\nProblemas que observas: [LENTITUD, LOCKS, MEMORY, etc.]\n\nPor favor entrega:\n\n## DIAGNÓSTICO\n[Qué está causando el problema: full table scan, N+1, falta de índice, joins ineficientes, etc.]\n\n## ÍNDICES RECOMENDADOS\n```sql\nCREATE INDEX ... ON ...;\n```\n[Explica por qué cada índice ayuda]\n\n## QUERY OPTIMIZADO\n```sql\n[Query reescrito y optimizado]\n```\n[Explica cada cambio y el impacto esperado]\n\n## ESTRATEGIA DE CACHING\n[Si aplica: qué cachear, con qué TTL y estrategia de invalidación]\n\n## GANANCIA ESTIMADA\n[Mejora esperada en tiempo de ejecución]\n\n## CONSIDERACIONES ADICIONALES\n[Particionamiento, materialised views, denormalización si aplica]",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Resolver cuellos de botella de base de datos en producción o durante load testing.',
                'vote_score' => 398,
            ],

            // ─────────────────────────────────────────────────────────────
            // DISEÑO (4 nuevas)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'diseño',
                'title' => 'User Journey Map desde investigación de usuarios',
                'description' => 'Crea un User Journey Map detallado a partir de notas de entrevistas o datos de usuarios, identificando puntos de dolor y oportunidades de mejora.',
                'prompt_content' => "Eres un UX researcher y service designer experto en User Journey Mapping.\n\nCrea un User Journey Map completo basado en esta información:\n\nPRODUCTO/SERVICIO: [NOMBRE Y DESCRIPCIÓN]\nPersona objetivo: [NOMBRE Y PERFIL DEL USUARIO]\nEscenario/objetivo del usuario: [QUÉ INTENTA LOGRAR]\n\nDatos disponibles (notas de entrevistas, soporte, analítica):\n[PEGA AQUÍ NOTAS, TICKETS DE SOPORTE, DATOS DE ANALÍTICA O CUALQUIER INSIGHT]\n\nGenera el Journey Map con estas fases:\n[PERSONALIZA LAS FASES O USA: Descubrimiento → Consideración → Registro → Onboarding → Uso habitual → Renovación/Abandono]\n\nPara CADA fase del journey:\n\n### FASE: [NOMBRE]\n**Acciones del usuario:** (qué hace concretamente)\n**Touchpoints:** (canales y puntos de contacto)\n**Pensamientos:** (qué piensa en esa fase, verbatim si es posible)\n**Emociones:** (nivel de frustración/satisfacción: 😫😕😐🙂😄)\n**Pain points:** (fricciones y problemas)\n**Oportunidades de mejora:** (ideas concretas para resolver cada pain)\n\n## MOMENTOS DE LA VERDAD\n[Los 3 momentos más críticos que definen la experiencia]\n\n## QUICK WINS\n[Top 3 mejoras de alto impacto y bajo esfuerzo]\n\n## MÉTRICAS SUGERIDAS\n[KPIs para medir el éxito de cada fase]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 25,
                'use_case' => 'Design sprints, workshops de producto o preparación de presentaciones para stakeholders.',
                'vote_score' => 318,
            ],
            [
                'profession' => 'diseño',
                'title' => 'Sistema de Design Tokens para design system',
                'description' => 'Genera un sistema completo de design tokens (colores, tipografía, espaciado, sombras) documentado y listo para implementar en Figma o código.',
                'prompt_content' => "Eres un design systems engineer y UI designer especializado en atomic design y design tokens.\n\nCrea un sistema completo de design tokens para:\n\nTIPO DE PRODUCTO: [WEB APP / MOBILE APP / MARKETING SITE]\nBRAND PERSONALITY: [ej. \"fintech confiable y moderna\", \"startup educativa y cercana\"]\nColores de marca existentes (si los tienes): [HEX codes o 'definir desde cero']\nFuentes de marca (si las tienes): [FUENTES o 'recomendar']\nFramework de CSS: [Tailwind / CSS Variables / Styled Components / tokens.json]\n\nGenera el design system con:\n\n## COLOR TOKENS\n```\n// Primitives (escala completa)\n--color-blue-50: #...;\n--color-blue-100: #...;\n...\n--color-blue-900: #...;\n\n// Semantic tokens\n--color-primary: var(--color-blue-600);\n--color-primary-hover: var(--color-blue-700);\n--color-text-primary: var(--color-gray-900);\n--color-text-secondary: var(--color-gray-600);\n--color-text-disabled: var(--color-gray-400);\n--color-bg-primary: #ffffff;\n--color-bg-secondary: var(--color-gray-50);\n--color-border: var(--color-gray-200);\n--color-success: ...;\n--color-warning: ...;\n--color-error: ...;\n--color-info: ...;\n```\n\n## TYPOGRAPHY TOKENS\n```\n// Font families\n// Font sizes (escala modular)\n// Font weights\n// Line heights\n// Letter spacing\n// Semantic: heading-1 through heading-6, body-lg, body-md, body-sm, caption, label\n```\n\n## SPACING TOKENS\n```\n// Escala de 4px base: space-1 (4px) through space-20 (80px)\n```\n\n## BORDER RADIUS TOKENS\n## SHADOW TOKENS\n## BREAKPOINTS\n\n## GUÍA DE USO\n[Reglas de cuándo usar cada token semántico]\n\n## MODO OSCURO\n[Override tokens para dark mode]",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 30,
                'use_case' => 'Crear o refactorizar un design system, onboarding de nuevos diseñadores al proyecto.',
                'vote_score' => 374,
            ],
            [
                'profession' => 'diseño',
                'title' => 'Critique de UI con principios de Gestalt y UX',
                'description' => 'Recibe una critique profesional de tu diseño UI basada en principios de Gestalt, jerarquía visual, usabilidad y mejores prácticas contemporáneas.',
                'prompt_content' => "Eres un senior UI/UX designer con 12 años de experiencia en productos digitales y formación en diseño visual.\n\nRealiza una critique de diseño profesional para este UI:\n\nDESCRIPCIÓN DEL DISEÑO: [DESCRIBE LA PANTALLA O FLUJO: tipo de app, qué hace esta pantalla, usuario objetivo]\nObjetivo de la pantalla: [QUÉ ACCIÓN QUIERES QUE EL USUARIO REALICE]\nContexto: [NUEVA FEATURE / REDISEÑO / LANDING / ONBOARDING / etc.]\n\n[Si puedes compartir el diseño, adjúntalo. Si no, describe los elementos: layout, colores, tipografía, CTA, imágenes, formularios.]\n\nEvalúa en estas dimensiones:\n\n## JERARQUÍA VISUAL (puntuación /10)\n[Análisis de contraste, tamaño, peso visual, eye-tracking path]\n\n## PRINCIPIOS DE GESTALT\n- Proximidad: [análisis]\n- Similitud: [análisis]\n- Continuidad: [análisis]\n- Figura/Fondo: [análisis]\n\n## USABILIDAD Y UX\n- Claridad del CTA principal\n- Cognitive load (cantidad de información)\n- Affordances y signifiers\n- Feedback visual de estados (hover, active, error, loading)\n\n## TIPOGRAFÍA\n[Legibilidad, escala, contraste de texto, pairing]\n\n## COLOR\n[Uso del color, contraste WCAG, coherencia con la marca]\n\n## ESPACIADO Y LAYOUT\n[Uso del grid, whitespace, alineación]\n\n## TOP 5 MEJORAS PRIORITARIAS\n[Ordenadas por impacto en la experiencia del usuario, con descripción específica de cada cambio]\n\n## PUNTUACIÓN GLOBAL: /10",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Design review antes de pasar a desarrollo, portfolio critique, feedback de cliente.',
                'vote_score' => 287,
            ],
            [
                'profession' => 'diseño',
                'title' => 'Brief creativo para identidad de marca desde cero',
                'description' => 'Genera un brief creativo completo para desarrollar la identidad visual de una marca, incluyendo dirección artística, moodboard conceptual y guías para el diseñador.',
                'prompt_content' => "Eres un brand strategist y director creativo especializado en identidad de marca.\n\nCrea un brief creativo completo para la identidad visual de:\n\nNOMBRE DE LA MARCA: [NOMBRE]\nDescripción del negocio: [QUÉ HACE, CÓMO Y PARA QUIÉN]\nIndustria: [SECTOR]\nAudiencia objetivo: [PERFIL DETALLADO]\nCompetidores directos: [LISTA 3-5 COMPETIDORES]\nPositionamiento deseado: [CÓMO QUIERE SER PERCIBIDA]\nValores de marca: [3-5 VALORES CORE]\nTono de comunicación: [CÓMO HABLA LA MARCA]\n\nGenera el brief completo:\n\n## ESENCIA DE MARCA\n[Una frase que capture el alma de la marca]\n\n## PERSONALIDAD DE MARCA\n[Escala en 5 ejes: Tradicional↔Moderno, Serio↔Juguetón, Exclusivo↔Accesible, Minimalista↔Expresivo, Corporativo↔Humano]\n\n## DIRECCIÓN ARTÍSTICA\n- Estilo visual (referencias y adjetivos)\n- Paleta de colores (colores primarios, secundarios, neutros con justificación psicológica)\n- Tipografía (1-2 fuentes con roles: display y body)\n- Estilo fotográfico / ilustrativo\n- Elementos gráficos o patrones\n\n## MOODBOARD CONCEPTUAL\n[Descripción detallada de 6-8 imágenes de referencia que capturarían la esencia visual: dónde buscarlas, qué elementos específicos capturar]\n\n## LO QUE NO ES ESTA MARCA\n[Estilos, colores, referencias a evitar explícitamente]\n\n## ENTREGABLES ESPERADOS DEL DISEÑADOR\n[Logo en variantes, paleta, tipografía, elementos secundarios, guía de uso]\n\n## CRITERIOS DE EVALUACIÓN\n[Cómo mediremos si el diseño logra los objetivos]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Inicio de proyecto de branding, briefing a agencia o diseñador freelance.',
                'vote_score' => 332,
            ],

            // ─────────────────────────────────────────────────────────────
            // VENTAS (3 nuevas)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'ventas',
                'title' => 'Análisis de deal perdido y plan de recuperación',
                'description' => 'Analiza un deal perdido para identificar las causas raíz, extraer aprendizajes y crear un playbook para evitar perder deals similares en el futuro.',
                'prompt_content' => "Eres un sales coach especializado en análisis win/loss y mejora continua de equipos de ventas.\n\nNecesito analizar un deal que perdimos:\n\nINFORMACIÓN DEL DEAL PERDIDO:\n- Empresa: [NOMBRE Y TAMAÑO]\n- Industria: [SECTOR]\n- Valor del deal: [ACV o VALOR]\n- Duración del ciclo de ventas: [SEMANAS/MESES]\n- Etapa en la que se perdió: [ETAPA DEL PIPELINE]\n- Razón declarada por el prospecto: [LO QUE DIJERON]\n- Competidor que ganó (si lo sabes): [COMPETIDOR]\n- Stakeholders involucrados: [CARGOS]\n- Actividades realizadas: [CALLS, DEMOS, PROPUESTAS, etc.]\n\nRealiza el análisis:\n\n## DIAGNÓSTICO REAL vs. RAZÓN DECLARADA\n[La razón real raramente es la declarada. Analiza qué pudo haber pasado realmente]\n\n## PUNTOS DE INFLEXIÓN\n[Los 3 momentos del ciclo donde se pudo haber cambiado el resultado]\n\n## ANÁLISIS DE STAKEHOLDERS\n[¿Tuvimos acceso al decision maker real? ¿Quién era el champion y era lo suficientemente fuerte?]\n\n## ANÁLISIS COMPETITIVO\n[¿Por qué ganó el competidor? ¿Precio, features, relación, timing?]\n\n## APRENDIZAJES ACCIONABLES\n[5 cambios concretos en el proceso de ventas para deals similares]\n\n## PLAYBOOK DE RECUPERACIÓN\n[Estrategia para mantener la relación y reabrir el deal en 6-12 meses]\n\n## SEÑALES DE ALERTA TEMPRANAS\n[Red flags en este deal que deberíamos detectar antes en futuros deals similares]",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Post-mortem de deals perdidos, coaching de equipo comercial, ajuste del sales process.',
                'vote_score' => 298,
            ],
            [
                'profession' => 'ventas',
                'title' => 'Preparación de discovery call de alto valor',
                'description' => 'Genera un framework completo para una discovery call con preguntas estratégicas, hipótesis sobre el cliente y estructura para maximizar el tiempo y avanzar el deal.',
                'prompt_content' => "Eres un sales consultant especializado en metodologías MEDDIC y Challenger Sale.\n\nPrepárame para esta discovery call:\n\nEMPRESA PROSPECTO: [NOMBRE]\nIndustria: [SECTOR]\nTamaño: [EMPLEADOS / REVENUE ESTIMADO]\nCargo del interlocutor: [TÍTULO]\nFuente del lead: [CÓMO NOS CONOCIERON]\nLo que sé de ellos: [CUALQUIER CONTEXTO: web, LinkedIn, noticias recientes]\nNuestro producto/servicio: [DESCRIPCIÓN]\nObjetivo de la call: [AVANZAR A DEMO / CALIFICAR / CERRAR PRIMERA VENTA]\n\nGenera el plan de discovery:\n\n## HIPÓTESIS DE NEGOCIO\n[3 problemas que probablemente tienen basados en su industria y tamaño]\n\n## OPENING (primeros 3 minutos)\n[Script de apertura que establece credibilidad y agenda]\n\n## PREGUNTAS DE SITUACIÓN (SPIN)\n[5 preguntas para entender el contexto actual]\n\n## PREGUNTAS DE PROBLEMA\n[5 preguntas para hacer consciente el dolor]\n\n## PREGUNTAS DE IMPLICACIÓN\n[3 preguntas que amplían el impacto del problema]\n\n## PREGUNTAS DE NECESIDAD-BENEFICIO\n[3 preguntas que llevan al prospecto a articular el valor de resolver el problema]\n\n## CALIFICACIÓN MEDDIC\n- Metrics: [qué métricas rastrear]\n- Economic Buyer: [cómo identificarlo]\n- Decision Criteria: [qué preguntar]\n- Decision Process: [cómo mapear el proceso]\n- Identify Pain: [ya cubierto arriba]\n- Champion: [cómo identificar al champion]\n\n## CIERRE DE LA CALL\n[Cómo proponer el siguiente paso concreto]\n\n## SEÑALES DE COMPRA A BUSCAR\n## SEÑALES DE DESCALIFICACIÓN",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Preparación para calls con cuentas estratégicas o enterprise deals.',
                'vote_score' => 341,
            ],
            [
                'profession' => 'ventas',
                'title' => 'Propuesta comercial persuasiva para cierre de deal',
                'description' => 'Genera una propuesta comercial estructurada que resuma el valor descubierto en el proceso de ventas, presente opciones claras y minimice la fricción al cierre.',
                'prompt_content' => "Eres un experto en sales enablement y cierre de deals B2B.\n\nCrea una propuesta comercial persuasiva con esta información del deal:\n\nCLIENTE: [NOMBRE DE LA EMPRESA]\nInterlocutor principal: [NOMBRE, CARGO]\nProblema específico identificado: [EL DOLOR REAL DEL CLIENTE]\nImpacto cuantificado del problema: [ej. \"están perdiendo $X al mes por...\"]\nNuestra solución: [PRODUCTO/SERVICIO Y CÓMO RESUELVE EL PROBLEMA]\nResultados de clientes similares: [CASOS DE USO / MÉTRICAS]\nTiempo de implementación: [SEMANAS/MESES]\nOpciones de precio:\n- Opción A (básica): [DESCRIPCIÓN Y PRECIO]\n- Opción B (recomendada): [DESCRIPCIÓN Y PRECIO]\n- Opción C (premium): [DESCRIPCIÓN Y PRECIO]\n\nGenera la propuesta con:\n\n## RESUMEN EJECUTIVO (1 página)\n[Resumen del problema y la solución en lenguaje del C-suite]\n\n## EL PROBLEMA ACTUAL\n[Descripción empática del estado actual con datos]\n\n## LA SOLUCIÓN PROPUESTA\n[Cómo específicamente resolvemos su problema]\n\n## ROI PROYECTADO\n[Cálculo simple: inversión vs. beneficio esperado en 12 meses]\n\n## OPCIONES Y PRECIOS\n[Tabla comparativa de las 3 opciones con la opción B destacada]\n\n## CASOS DE ÉXITO RELEVANTES\n[2 clientes similares con resultados concretos]\n\n## PRÓXIMOS PASOS\n[Proceso claro con fechas: firma → kickoff → go-live]\n\n## VALIDEZ DE LA OFERTA\n[Fecha límite y razón legítima de urgencia]",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 25,
                'use_case' => 'Cierre de deals enterprise o SMB cuando el prospecto está en fase de decisión.',
                'vote_score' => 326,
            ],

            // ─────────────────────────────────────────────────────────────
            // PM – PROJECT MANAGEMENT (3 nuevas)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'pm',
                'title' => 'User stories con criterios de aceptación Gherkin',
                'description' => 'Convierte una descripción de feature en user stories bien estructuradas con criterios de aceptación en formato Gherkin (Given/When/Then) listos para el equipo.',
                'prompt_content' => "Eres un Product Manager y agile coach experto en escritura de user stories y BDD (Behavior Driven Development).\n\nConvierte esta feature en user stories completas:\n\nFEATURE A DESARROLLAR: [DESCRIBE LA FUNCIONALIDAD]\nProducto: [NOMBRE DEL PRODUCTO]\nUsuarios afectados: [TIPOS DE USUARIOS]\nContexto de negocio: [POR QUÉ ES IMPORTANTE]\nRestricciones técnicas conocidas: [SI LAS HAY]\n\nGenera las user stories con este formato:\n\n---\n### EPIC: [Nombre del epic]\n\n**US-[número]: [Título descriptivo]**\n\nComo [tipo de usuario],\nQuiero [acción o funcionalidad],\nPara [beneficio o valor de negocio].\n\n**Definition of Ready:**\n- [ ] Criterio de ready 1\n- [ ] Criterio de ready 2\n\n**Criterios de Aceptación (Gherkin):**\n\n*Escenario 1: [nombre del escenario happy path]*\n```gherkin\nDado que [contexto/precondición]\nCuando [acción del usuario]\nEntonces [resultado esperado]\nY [resultado adicional si aplica]\n```\n\n*Escenario 2: [caso alternativo]*\n```gherkin\nDado que ...\nCuando ...\nEntonces ...\n```\n\n*Escenario 3: [caso de error]*\n```gherkin\nDado que ...\nCuando ...\nEntonces ...\n```\n\n**Story Points estimados:** [1/2/3/5/8/13 con justificación]\n**Dependencias:** [otras stories o sistemas]\n**Notas técnicas:** [consideraciones para el equipo de dev]\n---\n\n[Repite para todas las stories necesarias para cubrir la feature completa]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Sprint planning, refinement del backlog, onboarding de QA y developers a una feature.',
                'vote_score' => 367,
            ],
            [
                'profession' => 'pm',
                'title' => 'Retrospectiva de sprint accionable (formato 4Ls)',
                'description' => 'Facilita una retrospectiva de sprint estructurada con el framework 4Ls (Liked, Learned, Lacked, Longed For) y convierte los insights en action items medibles.',
                'prompt_content' => "Eres un agile coach experto en facilitación de ceremonias de Scrum y mejora continua de equipos.\n\nConvierte las notas de nuestra retrospectiva en un documento accionable:\n\nEQUIPO: [NOMBRE DEL EQUIPO]\nSprint #: [NÚMERO] | Duración: [FECHAS]\nVelocidad del sprint: [STORY POINTS COMPLETADOS / PLANEADOS]\nObjetivo del sprint: [SE LOGRÓ / NO SE LOGRÓ]\n\nNotas de la retro (lo que comentó el equipo):\n[PEGA AQUÍ LOS POST-ITS / COMENTARIOS CRUDOS DE LA RETRO]\n\nGenera el documento de retrospectiva:\n\n## RESUMEN EJECUTIVO DEL SPRINT\n[2-3 frases sobre cómo fue el sprint]\n\n## ANÁLISIS 4Ls\n\n### LIKED (Lo que funcionó bien)\n[Agrupa y sintetiza los temas positivos]\n\n### LEARNED (Lo que aprendimos)\n[Insights y conocimientos nuevos]\n\n### LACKED (Lo que nos faltó)\n[Recursos, información o procesos que faltaron]\n\n### LONGED FOR (Lo que deseamos para el próximo sprint)\n[Mejoras deseadas]\n\n## TEMAS RECURRENTES\n[Patrones que aparecen en múltiples sprints]\n\n## ACTION ITEMS (máx. 3 para el próximo sprint)\n| # | Acción específica | Owner | Fecha límite | Métrica de éxito |\n|---|-------------------|-------|--------------|------------------|\n| 1 | ... | ... | ... | ... |\n| 2 | ... | ... | ... | ... |\n| 3 | ... | ... | ... | ... |\n\n## REVISIÓN DE ACTION ITEMS DEL SPRINT ANTERIOR\n[¿Se completaron? ¿Qué impacto tuvieron?]\n\n## HEALTH SCORE DEL EQUIPO\n[Rating 1-5 en: Comunicación, Predictibilidad, Calidad, Motivación]",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'beginner',
                'estimated_minutes' => 15,
                'use_case' => 'Cierre de sprint, documentación para el equipo y stakeholders, mejora continua.',
                'vote_score' => 245,
            ],
            [
                'profession' => 'pm',
                'title' => 'OKRs trimestrales para equipo de producto',
                'description' => 'Define OKRs trimestrales bien estructurados para un equipo de producto, con key results medibles y el nivel correcto de ambición (60-70% achievable).',
                'prompt_content' => "Eres un experto en OKRs con experiencia en Google, Spotify y startups en etapa de escala.\n\nDefine los OKRs del próximo trimestre para nuestro equipo:\n\nCONTEXTO:\n- Empresa: [NOMBRE Y ETAPA: seed/series A/growth/enterprise]\n- Equipo: [NOMBRE Y FUNCIÓN]\n- OKR de la compañía (nivel superior): [EL OBJETIVO CORPORATIVO]\n- Situación actual: [MÉTRICAS ACTUALES CLAVE]\n- Principales retos o prioridades: [LIST 2-3]\n\nPara el trimestre Q[X] [AÑO]:\n\nGenera 2-3 OKRs siguiendo estas reglas:\n- Objective: inspiracional, cualitativo, memorable. Empieza con verbo (Crear, Transformar, Liderar...)\n- Key Results: máximo 4 por objetivo, 100% medibles con número, no son tareas sino outcomes\n- Ambición: 70% de probabilidad de alcanzarlos (no triviales ni imposibles)\n- Sin métricas de salud: las métricas que no deben caer van como \"health metrics\", no como KRs\n\n---\n**OBJETIVO 1: [título]**\n*KR1:* Incrementar [métrica] de [baseline] a [target] para [fecha]\n*KR2:* [métrica] de [baseline] a [target]\n*KR3:* [métrica] de [baseline] a [target]\n\n**OBJETIVO 2: [título]**\n...\n---\n\n## HEALTH METRICS (no deben degradarse)\n[Métricas a monitorear que no son OKRs pero son críticas]\n\n## INICIATIVAS CLAVE\n[Proyectos o proyectos principales para alcanzar estos OKRs]\n\n## DEPENDENCIAS CRÍTICAS\n[Qué necesitamos de otros equipos]\n\n## CÓMO MEDIR SEMANALMENTE\n[Check-in framework semanal con confidence score]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 25,
                'use_case' => 'Planning trimestral, QBRs internos, alineación de equipo con estrategia de la empresa.',
                'vote_score' => 403,
            ],

            // ─────────────────────────────────────────────────────────────
            // RRHH (3 nuevas)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'rrhh',
                'title' => 'Plan de desarrollo individual (IDI) personalizado',
                'description' => 'Crea un Plan de Desarrollo Individual completo para un empleado basado en su evaluación de desempeño, metas profesionales y brechas de competencias.',
                'prompt_content' => "Eres un HR Business Partner y coach de desarrollo profesional.\n\nCrea un Plan de Desarrollo Individual (PDI/IDI) para:\n\nINFORMACIÓN DEL EMPLEADO:\n- Nombre: [NOMBRE]\n- Cargo actual: [CARGO]\n- Tiempo en la empresa: [AÑOS/MESES]\n- Área/Equipo: [ÁREA]\n\nEVALUACIÓN RECIENTE:\n- Fortalezas identificadas: [LISTA]\n- Áreas de mejora: [LISTA]\n- Rating de desempeño: [RATING]\n\nASPIRACIONES:\n- Cargo objetivo a 2 años: [CARGO]\n- Áreas de interés profesional: [ÁREAS]\n\nBRECHAS IDENTIFICADAS:\n- Competencias técnicas que necesita: [LISTA]\n- Competencias blandas que necesita: [LISTA]\n\nGenera el PDI con:\n\n## VISIÓN DEL DESARROLLO\n[Narrative de dónde puede llegar este empleado en 2-3 años]\n\n## OBJETIVOS DE DESARROLLO (próximos 12 meses)\nPara cada objetivo:\n- Competencia a desarrollar\n- Estado actual vs. estado deseado\n- Actividades concretas (cursos, proyectos, mentoring, stretch assignments)\n- Recursos necesarios (tiempo, presupuesto, apoyo)\n- Fecha límite\n- Cómo se medirá el progreso\n\n## PLAN DE ACCIÓN TRIMESTRAL\n| Trimestre | Actividades | Responsable | Indicador |\n|-----------|-------------|-------------|----------|\n| Q1 | ... | ... | ... |\n| Q2 | ... | ... | ... |\n| Q3 | ... | ... | ... |\n| Q4 | ... | ... | ... |\n\n## SOPORTE DEL MANAGER\n[Compromisos específicos del manager para apoyar el desarrollo]\n\n## CHECK-IN SCHEDULE\n[Cadencia de revisión del PDI: mensual/trimestral]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Post performance review, inicio de año o tras una promoción fallida para retener talento.',
                'vote_score' => 289,
            ],
            [
                'profession' => 'rrhh',
                'title' => 'Encuesta de clima laboral con análisis de resultados',
                'description' => 'Diseña una encuesta de clima organizacional efectiva y genera una plantilla de análisis para convertir los resultados en planes de acción concretos.',
                'prompt_content' => "Eres un experto en people analytics y cultura organizacional.\n\nParte 1: Diseña una encuesta de clima laboral para:\n\nEMPRESA: [NOMBRE Y TIPO]\nTamaño: [NÚMERO DE EMPLEADOS]\nContexto: [ej. post-fusión, post-reestructuración, medición anual, etc.]\nÁreas críticas a medir: [ej. comunicación interna, liderazgo, desarrollo, work-life balance]\n\nGenera una encuesta con:\n- 20-25 preguntas en escala Likert 1-5\n- 3-5 preguntas abiertas estratégicas\n- Preguntas agrupadas por dimensión: [Liderazgo / Cultura / Compensación / Desarrollo / Colaboración / Bienestar / Propósito]\n- Instrucciones claras de anonimato\n- Tiempo estimado de respuesta: 8-10 minutos\n\nPara cada pregunta indica: dimensión, tipo (escala/abierta), y si es de satisfacción o engagement.\n\n---\nParte 2: Genera una plantilla de análisis de resultados:\n\nSuponiendo que los resultados muestran:\n[DESCRIBE LOS RESULTADOS FICTICIOS O REALES: ej. \"liderazgo: 3.2/5, desarrollo: 2.8/5, colaboración: 4.1/5\"]\n\nGenera:\n\n## INFORME EJECUTIVO (1 página)\n[Resumen para CEO/dirección]\n\n## ANÁLISIS POR DIMENSIÓN\n[Fortalezas + áreas críticas con interpretación]\n\n## SEGMENTACIÓN\n[Cómo analizar por departamento, antigüedad, nivel]\n\n## TOP 3 PRIORIDADES DE ACCIÓN\n[Con planes concretos, owners y timeline]\n\n## COMUNICACIÓN DE RESULTADOS A EMPLEADOS\n[Template de comunicado transparente]",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 25,
                'use_case' => 'Medición anual o semestral de cultura, post-cambio organizacional, diagnóstico de rotación.',
                'vote_score' => 256,
            ],
            [
                'profession' => 'rrhh',
                'title' => 'Guía de entrevista estructurada por competencias',
                'description' => 'Diseña una guía de entrevista estructurada con preguntas de competencias conductuales (BEI) específicas para el rol, con rúbrica de evaluación.',
                'prompt_content' => "Eres un experto en talent acquisition y evaluación por competencias conductuales (BEI - Behavioral Event Interview).\n\nCrea una guía de entrevista estructurada para:\n\nPOSICIÓN: [TÍTULO DEL PUESTO]\nNivel: [JUNIOR / MID / SENIOR / LEAD / MANAGER]\nÁrea: [DEPARTAMENTO]\nCompetencias críticas para el rol (elige 4-6):\n- [COMPETENCIA 1: ej. liderazgo de equipos]\n- [COMPETENCIA 2: ej. orientación a resultados]\n- [COMPETENCIA 3: ej. pensamiento analítico]\n- [COMPETENCIA 4]\n\nGenera la guía con:\n\n## INTRODUCCIÓN DE LA ENTREVISTA\n[Script de apertura: presentación, agenda, explicación del método STAR]\n\n## PREGUNTAS POR COMPETENCIA\nPara cada competencia:\n\n### COMPETENCIA: [NOMBRE]\n**Definición:** [qué significa esta competencia en el contexto del rol]\n\n**Pregunta principal (BEI):**\n\"Cuéntame de una situación en la que... [situación específica]\"\n\n**Preguntas de profundización (follow-ups):**\n- ¿Cuál era exactamente tu rol en esa situación?\n- ¿Qué opciones consideraste?\n- ¿Qué resultado se obtuvo?\n- ¿Qué harías diferente hoy?\n\n**RÚBRICA DE EVALUACIÓN:**\n| Score | Descripción del comportamiento observable |\n|-------|-------------------------------------------|\n| 1 - Insuficiente | [descripción] |\n| 2 - En desarrollo | [descripción] |\n| 3 - Competente | [descripción] |\n| 4 - Avanzado | [descripción] |\n| 5 - Excepcional | [descripción] |\n\n**Red flags a observar:** [comportamientos preocupantes]\n\n## PREGUNTAS DE CIERRE\n[Motivación, expectativas salariales, disponibilidad, preguntas del candidato]\n\n## SCORECARD FINAL\n[Template para comparar candidatos en todas las competencias]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Proceso de selección para posiciones clave, entrenamiento de entrevistadores, consistencia en hiring.',
                'vote_score' => 312,
            ],

            // ─────────────────────────────────────────────────────────────
            // FINANZAS (3 nuevas)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'finanzas',
                'title' => 'Análisis de varianza presupuestaria mensual',
                'description' => 'Genera una narrativa profesional de varianza presupuestaria para la dirección, con análisis de causas raíz y acciones correctivas.',
                'prompt_content' => "Eres un Financial Controller con experiencia en reporting financiero para C-suite y juntas directivas.\n\nRedacta el análisis de varianza presupuestaria de este mes:\n\nMES Y AÑO: [MES AÑO]\nEMPRESA/ÁREA: [NOMBRE]\n\nRESULTADOS DEL MES:\n| Línea | Real | Presupuesto | Varianza | Varianza % |\n|-------|------|-------------|----------|------------|\n| Ingresos | $[X] | $[Y] | $[Z] | [%] |\n| COGS | $[X] | $[Y] | $[Z] | [%] |\n| Margen Bruto | $[X] | $[Y] | $[Z] | [%] |\n| OPEX | $[X] | $[Y] | $[Z] | [%] |\n| EBITDA | $[X] | $[Y] | $[Z] | [%] |\n\nDrivers clave (los que sabes):\n- Ingresos: [RAZÓN DE LA VARIANZA]\n- COGS: [RAZÓN]\n- OPEX: [RAZÓN]\n\nGenera el análisis con:\n\n## RESUMEN EJECUTIVO (100 palabras)\n[Párrafo para el CEO: performance global, mensaje principal, outlook]\n\n## ANÁLISIS DE INGRESOS\n[Varianza explicada por: volumen, precio, mix, geografía/segmento]\n\n## ANÁLISIS DE MARGEN\n[Drivers del margen bruto y EBITDA]\n\n## ANÁLISIS DE GASTOS\n[Qué está sobre/bajo presupuesto y por qué]\n\n## YTD (AÑO ACUMULADO)\n[Análisis de si vamos bien en el año]\n\n## FORECAST REVISADO\n[Implicaciones para el forecast del año]\n\n## ACCIONES CORRECTIVAS\n[Medidas concretas para las varianzas negativas importantes]\n\n## RIESGOS Y OPORTUNIDADES\n[Para el resto del trimestre/año]",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Preparación del reporting mensual al CFO, CEO y board. Cierre contable mensual.',
                'vote_score' => 334,
            ],
            [
                'profession' => 'finanzas',
                'title' => 'Previsión de cash flow a 13 semanas',
                'description' => 'Construye una previsión de cash flow de 13 semanas con escenarios base, optimista y pesimista, identificando semanas de riesgo de liquidez.',
                'prompt_content' => "Eres un treasury analyst y CFO advisor especializado en gestión de liquidez.\n\nConstruye una previsión de cash flow de 13 semanas para:\n\nEMPRESA: [NOMBRE Y DESCRIPCIÓN]\nSector: [INDUSTRIA]\nCash actual: $[SALDO INICIAL]\nLínea de crédito disponible: $[LÍMITE] (utilizada: $[UTILIZADO])\n\nENTRADAS ESPERADAS:\n- Cobros de clientes por semana: $[PROMEDIO] (paymentDays: [DÍAS])\n- Otros ingresos recurrentes: [DESCRIPCIÓN Y MONTO]\n- Cobros excepcionales: [SEMANA X: $Y]\n\nSALIDAS COMPROMETIDAS:\n- Nómina: $[MONTO] - Semanas: [SEMANAS DE PAGO]\n- Proveedores principales: $[MONTO] - Términos: [DÍAS]\n- Alquileres: $[MONTO] - Día: [DÍA DEL MES]\n- Deuda financiera: $[CUOTA] - Fecha: [FECHA]\n- Impuestos próximos: $[MONTO] - Fecha: [FECHA]\n- OPEX recurrente: $[MONTO/semana]\n\nGenera:\n\n## TABLA DE 13 SEMANAS\n| Semana | Fecha | Saldo inicial | Entradas | Salidas | Saldo final | Alerta |\n|--------|-------|---------------|---------- |---------|-------------|--------|\n[Completa las 13 semanas con datos calculados]\n\n## ESCENARIOS\n- **Base:** [tabla de saldos finales por semana]\n- **Optimista (+15% cobros):** [tabla]\n- **Pesimista (-20% cobros, +10% gastos):** [tabla]\n\n## ALERTAS DE LIQUIDEZ\n[Semanas con saldo < $[THRESHOLD] o negativo]\n\n## RECOMENDACIONES DE TESORERÍA\n[Acciones concretas para gestionar el riesgo de liquidez identificado]\n\n## PALANCAS DISPONIBLES\n[Opciones para mejorar el cash flow: adelantar cobros, diferir pagos, draw down línea]",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 30,
                'use_case' => 'Gestión de liquidez en startups, pymes en crecimiento o empresas en restructuración.',
                'vote_score' => 367,
            ],
            [
                'profession' => 'finanzas',
                'title' => 'Due diligence financiero para inversión o adquisición',
                'description' => 'Genera un framework completo de due diligence financiero con checklist, preguntas clave para la dirección y red flags a identificar.',
                'prompt_content' => "Eres un M&A advisor y financial due diligence expert con experiencia en operaciones de private equity y corporate finance.\n\nGenera el framework de due diligence financiero para:\n\nTIPO DE OPERACIÓN: [ADQUISICIÓN / INVERSIÓN / FUSIÓN / JOINT VENTURE]\nTipo de empresa target: [DESCRIPCIÓN]\nSector: [INDUSTRIA]\nTamaño estimado: [REVENUE Y EMPLEADOS]\nFase del deal: [LOI firmado / Early exploration / Post-firma]\nPreocupaciones específicas del comprador: [ej. deuda oculta, cuentas por cobrar infladas, etc.]\n\nGenera:\n\n## CHECKLIST DE DOCUMENTOS REQUERIDOS\nOrganizado por categoría:\n- Financiero histórico (3-5 años)\n- Contratos y pasivos\n- Fiscal\n- Nómina y RRHH\n- Bancario y tesorería\n\n## ANÁLISIS FINANCIERO CLAVE\nPara cada área, qué analizar:\n\n### Quality of Earnings (QoE)\n[Ajustes para llegar al EBITDA normalizado real]\n\n### Working Capital\n[Análisis de ciclo de conversión de efectivo, working capital normalizado]\n\n### Deuda y Contingencias\n[Pasivos on y off balance, contingencias fiscales y legales]\n\n### Revenue Quality\n[Concentración de clientes, recurrencia, contratos, churn]\n\n## PREGUNTAS CLAVE PARA MANAGEMENT\n[20 preguntas críticas para las sesiones de management]\n\n## RED FLAGS FINANCIEROS\n[Lista de 15 señales de alerta con cómo detectarlas]\n\n## AJUSTES AL VALUATION\n[Cómo los hallazgos típicos impactan el precio]\n\n## DEAL KILLERS FRECUENTES\n[Los hallazgos que normalmente matan el deal o requieren renegociación]",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 35,
                'use_case' => 'Procesos de M&A, rondas de inversión, compra de empresas por fundadores o PE.',
                'vote_score' => 421,
            ],

            // ─────────────────────────────────────────────────────────────
            // LEGAL (2 nuevas)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'legal',
                'title' => 'Análisis de riesgo de contrato con tabla de cláusulas críticas',
                'description' => 'Analiza cualquier contrato comercial y genera una tabla de riesgo con las cláusulas más problemáticas, su nivel de riesgo y lenguaje alternativo sugerido.',
                'prompt_content' => "Eres un abogado corporativo especializado en contratos comerciales y gestión de riesgo legal.\n\nAnaliza el siguiente contrato y genera un informe de riesgo:\n\nTIPO DE CONTRATO: [COMPRAVENTA / SERVICIOS / DISTRIBUCIÓN / LICENCIA / SaaS / etc.]\nPARTES: [NOMBRE Y ROL: ej. \"Somos el proveedor\"]\nJURISDICCIÓN: [PAÍS/ESTADO]\nValor económico del contrato: [$MONTO]\nDuración: [PLAZO]\n\nCONTRATO:\n[PEGA EL TEXTO DEL CONTRATO O LAS CLÁUSULAS A REVISAR]\n\nGenera el análisis de riesgo:\n\n## TABLA DE CLÁUSULAS CRÍTICAS\n| # | Cláusula | Artículo | Problema identificado | Nivel de riesgo | Texto alternativo sugerido |\n|---|---------|----------|----------------------|-----------------|---------------------------|\n[Completa con todas las cláusulas problemáticas]\n\n## CLÁUSULAS AUSENTES (lo que debería estar y no está)\n[Lista de provisiones estándar que faltan: limitación de responsabilidad, force majeure, SLAs, penalidades, etc.]\n\n## ANÁLISIS DE RIESGO POR CATEGORÍA\n- **Riesgo financiero:** [cláusulas de pago, penalidades, garantías]\n- **Riesgo operativo:** [SLAs, entregables, plazos]\n- **Riesgo de terminación:** [causales, preaviso, consecuencias]\n- **Propiedad intelectual:** [quién es dueño de qué]\n- **Confidencialidad:** [alcance y duración]\n- **Jurisdicción y resolución de disputas:** [conveniencia para nosotros]\n\n## PUNTUACIÓN DE RIESGO GLOBAL\n[Score /10 de riesgo con justificación]\n\n## NEGOCIACIONES PRIORITARIAS\n[Top 3 cláusulas a renegociar antes de firmar, por orden de importancia]",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 25,
                'use_case' => 'Review de contratos antes de firma, due diligence legal, negociación de términos.',
                'vote_score' => 378,
            ],
            [
                'profession' => 'legal',
                'title' => 'Política de privacidad y cookies GDPR/CCPA compliant',
                'description' => 'Genera una política de privacidad y cookies actualizada y compliant con GDPR y CCPA, adaptada al tipo de negocio y los datos que realmente procesas.',
                'prompt_content' => "Eres un abogado especializado en privacidad de datos y cumplimiento normativo (GDPR, CCPA, LGPD).\n\nGenera una política de privacidad compliant para:\n\nEMPRESA: [NOMBRE]\nTipo de negocio: [SaaS / E-commerce / App móvil / Blog / Marketplace / etc.]\nPaíses donde operamos: [LISTA DE PAÍSES]\nNormativas aplicables: [GDPR / CCPA / ambas / LGPD]\n\nDATOS QUE RECOPILAMOS:\n- Datos de registro: [ej. nombre, email, empresa]\n- Datos de uso/analítica: [ej. páginas visitadas, clicks, sesiones]\n- Datos de pago: [sí/no, a través de: Stripe/PayPal/etc.]\n- Cookies: [funcionales, analíticas, marketing]\n- Datos de terceros: [ej. Google Analytics, Intercom, HubSpot]\n\nGenera la política completa con:\n\n## 1. QUIÉNES SOMOS (Responsable del tratamiento)\n## 2. QUÉ DATOS RECOPILAMOS Y CÓMO\n## 3. PARA QUÉ USAMOS TUS DATOS (finalidades y base legal GDPR)\n## 4. CON QUIÉN COMPARTIMOS TUS DATOS\n[Listado de subprocesadores con su rol]\n## 5. TRANSFERENCIAS INTERNACIONALES\n## 6. CUÁNTO TIEMPO CONSERVAMOS TUS DATOS\n[Tabla de retención por tipo de dato]\n## 7. TUS DERECHOS (ARCO+ para GDPR, opt-out para CCPA)\n[Cómo ejercerlos con email de contacto]\n## 8. COOKIES\n[Tabla: nombre, tipo, propósito, duración, tercero]\n## 9. SEGURIDAD\n## 10. MENORES DE EDAD\n## 11. CAMBIOS EN LA POLÍTICA\n## 12. CONTACTO Y DPO (si aplica)\n\nFormato: lenguaje claro y comprensible (no jerga legal excesiva). Fecha de última actualización: [FECHA].",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 25,
                'use_case' => 'Lanzamiento de producto digital, actualización de políticas post-cambio de features, auditoría de compliance.',
                'vote_score' => 289,
            ],

            // ─────────────────────────────────────────────────────────────
            // CS – CUSTOMER SUCCESS (2 nuevas)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'cs',
                'title' => 'QBR (Quarterly Business Review) ejecutivo para cliente enterprise',
                'description' => 'Prepara una presentación de QBR completa para una cuenta enterprise con análisis de ROI, métricas de adopción, logros del trimestre y plan para los próximos 90 días.',
                'prompt_content' => "Eres un Customer Success Manager senior especializado en cuentas enterprise y estrategia de retención.\n\nPrepara el QBR para esta cuenta:\n\nCLIENTE: [NOMBRE DE LA EMPRESA]\nIndustria: [SECTOR]\nTamaño del contrato: $[ACV]\nFecha de renovación: [FECHA]\nDuración de la relación: [TIEMPO]\nCSM asignado: [NOMBRE]\n\nDATOS DEL TRIMESTRE:\n- Usuarios activos: [X] de [Y] licencias ([%] adopción)\n- Features más usadas: [LISTA]\n- Features sin usar: [LISTA]\n- Tickets de soporte: [NÚMERO] (P1: [X], P2: [Y])\n- NPS score: [NÚMERO]\n- Objetivos acordados en el último QBR: [LISTA con estado: ✅/⚠️/❌]\n\nOBJETIVOS DE NEGOCIO DEL CLIENTE: [LOS QUE TE COMPARTIERON]\n\nGenera la estructura del QBR:\n\n## SLIDE 1: AGENDA\n## SLIDE 2: RESUMEN EJECUTIVO\n[3 bullets: logros clave, desafíos, siguiente paso]\n\n## SLIDE 3: PROGRESO HACIA OBJETIVOS DE NEGOCIO\n[Para cada objetivo: status, evidencia, próximo hito]\n\n## SLIDE 4: MÉTRICAS DE ADOPCIÓN\n[Análisis de uso con tendencias: subiendo / bajando / estable]\n\n## SLIDE 5: ROI CALCULADO\n[Intento de cuantificar el valor entregado: tiempo ahorrado, ingresos generados, costos reducidos]\n\n## SLIDE 6: LOGROS DEL TRIMESTRE\n[Top 3-5 momentos de valor]\n\n## SLIDE 7: ÁREAS DE OPORTUNIDAD\n[Features no adoptadas + plan de activación]\n\n## SLIDE 8: PLAN PRÓXIMOS 90 DÍAS\n[Objetivos, hitos, recursos necesarios del cliente]\n\n## SLIDE 9: EXPANSIÓN Y CASOS DE USO ADICIONALES\n[Oportunidades de upsell/cross-sell naturales]\n\n## NOTAS DEL PRESENTER\n[Para cada slide: puntos clave a mencionar y preguntas a hacer al cliente]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 25,
                'use_case' => 'Preparación trimestral de QBRs con cuentas enterprise, renovaciones y expansiones.',
                'vote_score' => 356,
            ],
            [
                'profession' => 'cs',
                'title' => 'Playbook de prevención de churn para cuenta en riesgo',
                'description' => 'Crea un plan de intervención detallado para recuperar una cuenta que muestra señales de churn, con comunicaciones listas para enviar y cadencia de acciones.',
                'prompt_content' => "Eres un Customer Success Manager experto en retención y rescate de cuentas en riesgo.\n\nCrea un playbook de retención para esta cuenta en riesgo:\n\nCLIENTE: [NOMBRE]\nContrato: $[ACV] - Renovación en: [SEMANAS/MESES]\nSeñales de churn detectadas:\n- [SEÑAL 1: ej. uso bajó 60% en las últimas 4 semanas]\n- [SEÑAL 2: ej. champion dejó la empresa]\n- [SEÑAL 3: ej. 3 tickets sin resolver de alta prioridad]\n- [SEÑAL 4: ej. no abrieron los últimos 3 emails]\n\nHistoria de la cuenta:\n- Tiempo como cliente: [TIEMPO]\n- Razón de compra original: [PROBLEMA QUE QUERÍAN RESOLVER]\n- Éxitos pasados: [LOGROS ANTERIORES]\n- Problemas históricos: [QUEJAS O ESCALACIONES PASADAS]\n\nGenera el playbook:\n\n## DIAGNÓSTICO DEL RIESGO\n[Análisis de qué está causando el riesgo real (razón superficial vs. raíz)]\n\n## PLAN DE INTERVENCIÓN (14 días)\n\n### INMEDIATO (Día 1-2)\n- Acciones internas previas al contacto\n- Email de apertura (BORRADOR LISTO)\n\n### PRIMERA SEMANA (Día 3-7)\n- Call de diagnóstico: agenda y preguntas clave\n- Quick wins para mostrar valor inmediato\n- Escalar internamente si es necesario (a quién y cómo)\n\n### SEGUNDA SEMANA (Día 8-14)\n- Presentación del plan de acción al cliente\n- Compromisos mutuos (qué hace CS, qué hace el cliente)\n\n## TEMPLATES DE COMUNICACIÓN\n- Email de apertura de intervención\n- Email post-call con plan de acción\n- Email de seguimiento semanal\n\n## CRITERIOS DE ÉXITO\n[Cómo saber que el cliente está estabilizado]\n\n## TRIGGER DE ESCALACIÓN\n[Cuándo y cómo escalar a dirección]",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Gestión de cuentas con señales tempranas de churn, renovaciones difíciles.',
                'vote_score' => 389,
            ],

            // ─────────────────────────────────────────────────────────────
            // FREELANCERS (2 nuevas)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'freelancers',
                'title' => 'Scope of Work detallado para prevenir scope creep',
                'description' => 'Genera un documento de alcance de trabajo (SOW) exhaustivo que define exactamente qué incluye y qué no incluye el proyecto, protegiendo al freelancer de cambios no pagados.',
                'prompt_content' => "Eres un consultor freelance senior especializado en gestión de proyectos y protección contractual.\n\nCrea un Scope of Work (SOW) completo para este proyecto:\n\nCLIENTE: [NOMBRE]\nTIPO DE PROYECTO: [DESARROLLO WEB / DISEÑO / CONSULTORÍA / MARKETING / etc.]\nDescripción del proyecto: [QUÉ HAY QUE HACER]\nFecha de inicio: [FECHA]\nFecha de entrega estimada: [FECHA]\nPresupuesto acordado: $[MONTO]\nForma de pago: [50% adelanto + 50% entrega / por hitos / mensual]\n\nGenera el SOW con:\n\n## RESUMEN DEL PROYECTO\n[Descripción ejecutiva del objetivo y resultado esperado]\n\n## ENTREGABLES INCLUIDOS\n[Lista numerada y detallada de TODO lo que se entrega]\nPor cada entregable:\n- Descripción exacta\n- Formato de entrega (PDF, Figma, código en repo, etc.)\n- Criterios de aceptación medibles\n\n## EXPLÍCITAMENTE EXCLUIDO DEL SCOPE\n[La sección más importante: lista de lo que NO está incluido]\nEjemplos tipo:\n- Más de X revisiones por entregable\n- Integración con sistemas no mencionados\n- Contenido (textos, imágenes) salvo que se especifique\n- Mantenimiento post-entrega\n- [Específico al proyecto]\n\n## HITOS Y PAGOS\n| Hito | Entregable | Fecha | Pago |\n|------|-----------|-------|------|\n\n## PROCESO DE REVISIONES\n[Número de rondas incluidas, qué es una revisión vs. nuevo proyecto]\n\n## GESTIÓN DE CAMBIOS (Change Request Process)\n[Cómo se solicita y cotiza trabajo adicional fuera del scope]\n\n## RESPONSABILIDADES DEL CLIENTE\n[Qué necesito del cliente para poder entregar: accesos, contenidos, aprobaciones, tiempos de respuesta]\n\n## CONDICIONES GENERALES\n[Propiedad intelectual, confidencialidad, proceso de aprobación final]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Antes de iniciar cualquier proyecto freelance para proteger tiempo y rentabilidad.',
                'vote_score' => 412,
            ],
            [
                'profession' => 'freelancers',
                'title' => 'Estrategia de pricing y paquetes de servicios freelance',
                'description' => 'Diseña una estructura de precios con 3 paquetes de servicios que maximiza el ticket promedio, reduce la negociación de precio y posiciona tu trabajo como una inversión.',
                'prompt_content' => "Eres un consultor de negocio especializado en pricing para profesionales independientes y agencias boutique.\n\nCrea una estrategia de pricing y paquetes para:\n\nTIPO DE SERVICIO: [DISEÑO / DESARROLLO / COPYWRITING / CONSULTORÍA / etc.]\nEspecialización: [NICHO ESPECÍFICO]\nAños de experiencia: [AÑOS]\nClientes típicos: [TIPO DE EMPRESA / INDUSTRIA]\nTarifa horaria actual (si la tienes): $[TARIFA]/hora\nIngreso mensual objetivo: $[META]\n\nGenera la estrategia completa:\n\n## ANÁLISIS DE POSICIONAMIENTO\n[Cómo deberías posicionarte vs. competencia: low cost / mid market / premium / ultra-premium]\n\n## ESTRUCTURA DE 3 PAQUETES\n\n### PAQUETE STARTER: \"[NOMBRE ATRACTIVO]\"\n- **Precio:** $[PRECIO] (pago único / mensual)\n- Incluye: [lista de entregables específicos]\n- Para quién es: [perfil ideal de cliente]\n- Tiempo de entrega: [DÍAS]\n- Limitaciones claras: [máx. X revisiones, etc.]\n\n### PAQUETE GROWTH: \"[NOMBRE ATRACTIVO]\" ⭐ RECOMENDADO\n- **Precio:** $[PRECIO]\n- Incluye: todo el Starter + [adicionales]\n- Para quién es: [perfil]\n- Propuesta de valor diferencial: [por qué vale más]\n\n### PAQUETE PREMIUM: \"[NOMBRE ATRACTIVO]\"\n- **Precio:** $[PRECIO]\n- Incluye: todo lo anterior + [adicionales premium]\n- Para quién es: [perfil]\n- Lo que hace especial este paquete: [ventaja exclusiva]\n\n## ANCHORING PSICOLÓGICO\n[Cómo presentar los 3 paquetes para que el del medio sea el más elegido]\n\n## POLÍTICA DE DESCUENTOS\n[Cuándo y cómo ofrecer descuentos sin devaluar]\n\n## CÓMO COMUNICAR TU PRECIO\n[Scripts para presentar el precio con confianza]\n\n## SEÑALES PARA SUBIR PRECIOS\n[Indicadores de que ya es momento de aumentar tarifas]",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Revisión anual de precios, nuevo nicho de servicio, transición de tarifa horaria a paquetes.',
                'vote_score' => 378,
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
                    'vote_score' => $data['vote_score'],
                ]
            );
        }

        // Update professions skills_count
        Profession::all()->each(function (Profession $profession) {
            $profession->update(['skills_count' => $profession->publishedSkills()->count()]);
        });
    }
}
