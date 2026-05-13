<?php

namespace Database\Seeders;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class WebSkillsSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [

            // ── MARKETING ────────────────────────────────────────────────
            [
                'profession' => 'marketing',
                'title' => 'Análisis de competencia con IA',
                'description' => 'Genera un informe de inteligencia competitiva completo con gaps de posicionamiento, oportunidades de contenido y recomendaciones estratégicas accionables.',
                'prompt_content' => "Actúa como un estratega de inteligencia competitiva con 10 años de experiencia.\n\nEMPRESA: [TU EMPRESA]\nPROPUESTA DE VALOR: [DESCRIPCIÓN EN 1 FRASE]\nCOMPETIDORES: [COMPETIDOR 1], [COMPETIDOR 2], [COMPETIDOR 3]\nINDUSTRIA: [SECTOR]\n\nGenera un análisis competitivo estructurado:\n\n## 1. MATRIZ COMPARATIVA\nTabla con: Empresa | Propuesta de valor | Segmento principal | Canal de adquisición | Precio estimado | Fortaleza clave | Debilidad clara\n\n## 2. ANÁLISIS DE POSICIONAMIENTO\nPara cada competidor:\n- Mensaje principal en su homepage\n- Tono y palabras clave de comunicación\n- ICP al que se dirigen\n- Problemas que resuelven explícitamente\n\n## 3. GAP ANALYSIS\n- 3 necesidades no cubiertas por ningún competidor\n- 2 segmentos desatendidos\n- 1 ángulo de posicionamiento único disponible para [TU EMPRESA]\n\n## 4. OPORTUNIDADES DE CONTENIDO\n5 temas que los competidores no abordan correctamente, con justificación.\n\n## 5. RECOMENDACIONES\n3 acciones concretas con impacto esperado y prioridad (alta/media/baja).",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Antes de lanzar una campaña, redefinir el posicionamiento o preparar un pitch a inversores.',
                'vote_score' => 342,
            ],
            [
                'profession' => 'marketing',
                'title' => 'Generador de meta descriptions SEO en masa',
                'description' => 'Crea meta titles y descriptions optimizados para SEO para múltiples páginas a la vez, siguiendo las mejores prácticas de Google y maximizando el CTR.',
                'prompt_content' => "Eres un especialista en SEO on-page con experiencia en optimización de CTR en SERPs.\n\nTengo las siguientes páginas web que necesitan meta tags optimizados:\n\n[PEGA UNA LISTA CON FORMATO:\nURL | Título actual | Contenido principal de la página (1-2 frases)\nEjemplo:\n/servicios/consultoria | Consultoría | Ofrecemos servicios de consultoría empresarial]\n\nSITIO WEB: [URL RAÍZ]\nINDUSTRIA: [SECTOR]\nPALABRA CLAVE PRINCIPAL DEL SITIO: [KEYWORD]\n\nPara CADA página genera:\n1. **Meta title** (50-60 caracteres, keyword al inicio si es natural, incluye beneficio o diferenciador)\n2. **Meta description** (140-155 caracteres, incluye keyword, CTA implícito, propuesta de valor)\n3. **Puntuación estimada de CTR** (1-10) con justificación en 1 línea\n4. **Variante A/B** del meta title para test\n\nReglas:\n- Nunca truncar con '...'\n- Incluir números cuando sean relevantes\n- Evitar clickbait pero sí generar curiosidad\n- Adaptar tono al sector (formal para B2B, dinámico para B2C)",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'beginner',
                'estimated_minutes' => 10,
                'use_case' => 'Auditorías SEO, migraciones web o lanzamiento de nuevas secciones que necesitan meta tags desde cero.',
                'vote_score' => 287,
            ],
            [
                'profession' => 'marketing',
                'title' => 'Estratega de A/B testing para copy de anuncios',
                'description' => 'Diseña un plan completo de A/B testing para anuncios de paid media, con hipótesis, variantes de copy y métricas de éxito claras.',
                'prompt_content' => "Actúa como un experto en CRO y paid media con experiencia en Meta Ads y Google Ads.\n\nCAMPAÑA ACTUAL:\n- Plataforma: [META ADS / GOOGLE ADS / LINKEDIN ADS]\n- Objetivo: [TRÁFICO / CONVERSIONES / LEADS / RECONOCIMIENTO]\n- Producto/Servicio: [DESCRIBE]\n- Audiencia: [SEGMENTO]\n- Copy actual del anuncio ganador:\n---\n[PEGA EL COPY ACTUAL]\n---\n- CTR actual: [%]\n- CVR actual: [%]\n\nDiseña un plan de A/B testing con:\n\n## HIPÓTESIS\nPara cada test: \"Si cambiamos X por Y, esperamos Z porque...\"\n\n## 5 VARIANTES DE TEST (ordenadas por prioridad)\nPara cada variante:\n- Elemento a testear (headline / descripción / CTA / propuesta de valor)\n- Copy original vs. copy nuevo\n- Hipótesis específica\n- Métrica principal a medir\n- Duración recomendada del test\n- Tamaño de muestra mínimo para significancia estadística\n\n## ESTRUCTURA DE IMPLEMENTACIÓN\n- Qué testear primero y por qué\n- Cómo aislar variables\n- Cuándo declarar un ganador",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Optimización de campañas de paid media con bajo rendimiento o para escalar anuncios ganadores.',
                'vote_score' => 312,
            ],
            [
                'profession' => 'marketing',
                'title' => 'Brief para influencers y creadores de contenido',
                'description' => 'Genera briefs profesionales para campañas con influencers que clarifican expectativas, mantienen la voz de marca y maximizan la autenticidad del contenido.',
                'prompt_content' => "Eres un influencer marketing manager con experiencia en campañas de 6 y 7 cifras.\n\nDatos de la campaña:\n- Marca: [NOMBRE]\n- Producto/Servicio: [DESCRIPCIÓN]\n- Tipo de influencer: [NANO / MICRO / MACRO / MEGA]\n- Plataforma: [INSTAGRAM / TIKTOK / YOUTUBE / TWITCH]\n- Formato: [REEL / POST / STORY / VIDEO / LIVE]\n- Presupuesto por creador: [RANGO]\n- Fecha de publicación: [FECHA]\n\nGenera un brief completo con:\n\n1. **OVERVIEW DE CAMPAÑA** (3-4 líneas: contexto, objetivo, por qué este creador)\n2. **MENSAJES CLAVE** (3 puntos que DEBEN comunicarse, 2 que NUNCA deben decirse)\n3. **GUÍA DE CONTENIDO**\n   - Estructura sugerida (no obligatoria)\n   - Hooks recomendados para los primeros 3 segundos\n   - Puntos de integración natural del producto\n4. **GUÍA DE ESTILO DE MARCA**\n   - Tono: qué SÍ / qué NO\n   - Palabras permitidas vs. prohibidas\n5. **ENTREGABLES Y PLAZOS**\n   - Borrador para revisión: [fecha]\n   - Correcciones: máx. 2 rondas\n   - Publicación: [fecha]\n6. **MÉTRICAS DE ÉXITO** (qué mediremos y cómo)\n7. **PROCESO DE APROBACIÓN** (pasos, contacto, tiempos de respuesta)",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Antes de iniciar cualquier colaboración con un creador de contenido para garantizar alineación y reducir revisiones.',
                'vote_score' => 256,
            ],
            [
                'profession' => 'marketing',
                'title' => 'Nota de prensa que los periodistas realmente leen',
                'description' => 'Redacta notas de prensa con estructura periodística real, ángulo de noticia claro y ganchos que hacen que los periodistas las lean hasta el final.',
                'prompt_content' => "Eres un periodista senior reconvertido en PR specialist con 10 años de experiencia.\n\nNOTICIA A COMUNICAR: [DESCRIBE EL EVENTO / LANZAMIENTO / LOGRO]\n\nDetalles clave:\n- Empresa: [NOMBRE + 1 LÍNEA DE CONTEXTO]\n- Protagonistas: [PERSONAS CITABLES CON CARGOS]\n- Fecha del evento/lanzamiento: [FECHA]\n- Mercados afectados: [GEOGRAFÍA / INDUSTRIA]\n- Datos duros disponibles: [CIFRAS, ESTADÍSTICAS, PORCENTAJES]\n- Medio objetivo principal: [TIPO DE MEDIO: tech / negocios / generalista / sectorial]\n\nRedacta una nota de prensa que incluya:\n\n1. **TITULAR** (máx. 10 palabras, noticias en presente, con el dato más impactante)\n2. **SUBTÍTULO** (amplía el titular en 20-25 palabras con contexto)\n3. **LEAD** (primer párrafo: quién, qué, cuándo, dónde, por qué — máx. 50 palabras)\n4. **CUERPO** (2-3 párrafos con contexto, datos y detalles)\n5. **CITA PRINCIPAL** (portavoz empresa, 2-3 frases con opinión real, no corporativismo)\n6. **CITA SECUNDARIA** (cliente, experto o partner si aplica)\n7. **BOILERPLATE** (about the company, 3-4 líneas estándar)\n8. **DATOS DE CONTACTO** (placeholder)\n\nTono: informativo, sin exageraciones, con datos verificables.",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Lanzamientos de producto, hitos de empresa, rondas de inversión o cualquier evento que merezca cobertura mediática.',
                'vote_score' => 198,
            ],

            // ── DESARROLLO ───────────────────────────────────────────────
            [
                'profession' => 'desarrollo',
                'title' => 'Code review profesional con checklist completo',
                'description' => 'Realiza una revisión de código exhaustiva como un senior developer, detectando bugs, problemas de seguridad, performance y deuda técnica.',
                'prompt_content' => "Actúa como un senior software engineer con 10+ años de experiencia en code reviews.\n\nRevisa el siguiente código:\n\n```[LENGUAJE]\n[PEGA EL CÓDIGO AQUÍ]\n```\n\nContexto:\n- Propósito del código: [QUÉ HACE]\n- Stack tecnológico: [STACK]\n- Entorno: [PRODUCCIÓN / DESARROLLO / MICROSERVICIO / etc.]\n- Tráfico esperado: [BAJO / MEDIO / ALTO]\n\nRealiza una code review completa evaluando:\n\n## 🔴 CRÍTICO (bloquea el merge)\n- Bugs que causarán fallos en producción\n- Vulnerabilidades de seguridad (SQLi, XSS, IDOR, secrets expuestos)\n- Race conditions o problemas de concurrencia\n\n## 🟡 IMPORTANTE (debe corregirse pronto)\n- Problemas de performance (N+1, llamadas innecesarias, sin índices)\n- Manejo de errores incompleto\n- Código no testeable\n\n## 🟢 SUGERENCIAS (mejora la calidad)\n- Naming y legibilidad\n- Principios SOLID violados\n- Duplicación de lógica (DRY)\n- Complejidad ciclomática alta\n\n## ✅ LO QUE ESTÁ BIEN\n(Reconoce 2-3 cosas bien hechas)\n\n## RESUMEN\n- Puntuación general: X/10\n- ¿Apruebas el merge? SÍ / NO / CON CAMBIOS\n- Top 3 cambios prioritarios",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 10,
                'use_case' => 'Antes de hacer merge en main, en pull requests o cuando revisas código de un junior.',
                'vote_score' => 478,
            ],
            [
                'profession' => 'desarrollo',
                'title' => 'Generador de documentación de API (OpenAPI/Swagger)',
                'description' => 'Genera documentación completa de API en formato OpenAPI 3.0 a partir de tu código de endpoints, lista para publicar en Swagger UI.',
                'prompt_content' => "Eres un technical writer especializado en documentación de APIs REST.\n\nGenera documentación OpenAPI 3.0 completa para estos endpoints:\n\n```[LENGUAJE]\n[PEGA TU CÓDIGO DE RUTAS / CONTROLLERS]\n```\n\nInformación adicional:\n- Nombre de la API: [NOMBRE]\n- Versión: [VERSION]\n- Base URL: [URL]\n- Autenticación: [BEARER TOKEN / API KEY / OAUTH2 / NINGUNA]\n- Descripción general: [QUÉ HACE LA API]\n\nGenera el YAML de OpenAPI 3.0 con:\n1. **info** section completa (título, versión, descripción, contacto)\n2. **servers** (producción + staging)\n3. **components/securitySchemes** según el tipo de auth\n4. **paths** para cada endpoint con:\n   - Summary y description claros\n   - Parameters (path, query, header) con tipos y ejemplos\n   - Request body con schema y ejemplo real\n   - Responses para todos los códigos posibles (200, 201, 400, 401, 403, 404, 422, 500)\n   - Ejemplos de response body para cada caso\n5. **components/schemas** reutilizables\n\nAl final incluye: un ejemplo de curl para cada endpoint.",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Al finalizar el desarrollo de una API para generar documentación lista para entregar o publicar en un developer portal.',
                'vote_score' => 389,
            ],
            [
                'profession' => 'desarrollo',
                'title' => 'Diseñador de esquema de base de datos normalizado',
                'description' => 'Diseña esquemas de base de datos optimizados a partir de requisitos en lenguaje natural, con relaciones, índices y justificaciones de diseño.',
                'prompt_content' => "Eres un database architect con experiencia en sistemas de alto tráfico.\n\nNecesito diseñar una base de datos para:\n\nDESCRIPCIÓN DEL SISTEMA: [DESCRIBE QUÉ HACE TU APLICACIÓN]\n\nENTIDADES PRINCIPALES: [LISTA LAS ENTIDADES CLAVE, ej: Usuario, Producto, Pedido]\n\nREQUISITOS FUNCIONALES:\n[LISTA LOS CASOS DE USO PRINCIPALES, ej:\n- Un usuario puede tener múltiples pedidos\n- Cada pedido tiene varios productos\n- Los productos pertenecen a categorías]\n\nBASE DE DATOS: [PostgreSQL / MySQL / SQLite]\nESCALA ESPERADA: [FILAS ESTIMADAS POR TABLA]\n\nEntrega:\n\n1. **DIAGRAMA ERD** (en formato texto ASCII o Mermaid)\n2. **DDL COMPLETO** (CREATE TABLE con todos los campos, tipos, constraints)\n3. **ÍNDICES RECOMENDADOS** (con justificación de cada uno)\n4. **DECISIONES DE DISEÑO** (por qué normalizaste así, trade-offs considerados)\n5. **QUERIES DE EJEMPLO** para los 3 casos de uso más frecuentes\n6. **POSIBLES PROBLEMAS** de escala y cómo mitigarlos\n7. **MIGRACIONES SUGERIDAS** si la BD crece",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Al inicio de un proyecto nuevo o cuando necesitas rediseñar una BD existente con problemas de performance.',
                'vote_score' => 356,
            ],
            [
                'profession' => 'desarrollo',
                'title' => 'Refactorizador de código legacy con plan de migración',
                'description' => 'Analiza código legacy y genera un plan de refactorización priorizado con el código refactorizado, sin romper funcionalidad existente.',
                'prompt_content' => "Eres un senior engineer especializado en modernización de código legacy.\n\nCódigo a refactorizar:\n```[LENGUAJE]\n[PEGA EL CÓDIGO LEGACY]\n```\n\nContexto:\n- Antigüedad del código: [AÑOS]\n- Tiene tests: [SÍ / NO / PARCIALMENTE]\n- Razón para refactorizar: [PERFORMANCE / MANTENIBILIDAD / MIGRACIÓN DE STACK / etc.]\n- Restricción: [NO SE PUEDE CAMBIAR LA INTERFAZ PÚBLICA / etc.]\n\nEntrega:\n\n## DIAGNÓSTICO\n- Code smells identificados (lista con severidad)\n- Deuda técnica estimada (horas de trabajo)\n- Riesgos de romper funcionalidad\n\n## PLAN DE REFACTORIZACIÓN\nFase 1 (sin cambiar comportamiento): [lista de cambios seguros]\nFase 2 (mejoras de estructura): [lista de cambios con tests]\nFase 3 (modernización): [cambios de arquitectura]\n\n## CÓDIGO REFACTORIZADO\nVersion mejorada con comentarios explicando cada cambio importante\n\n## TESTS A AÑADIR\nLos 5 tests más críticos para cubrir antes de refactorizar\n\n## MÉTRICAS DE MEJORA\nComplejidad ciclomática antes/después, líneas de código, cobertura estimada",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 25,
                'use_case' => 'Cuando heredas código difícil de mantener o antes de añadir funcionalidad a un módulo problemático.',
                'vote_score' => 423,
            ],
            [
                'profession' => 'desarrollo',
                'title' => 'Auditoría de seguridad de código (OWASP Top 10)',
                'description' => 'Escanea tu código buscando las 10 vulnerabilidades de seguridad más críticas según OWASP, con ejemplos de explotación y código corregido.',
                'prompt_content' => "Actúa como un penetration tester y security engineer senior.\n\nAudita el siguiente código para detectar vulnerabilidades de seguridad:\n\n```[LENGUAJE]\n[PEGA EL CÓDIGO A AUDITAR]\n```\n\nStack tecnológico completo: [FRONTEND / BACKEND / DB / CLOUD]\nTipo de aplicación: [WEB APP / API / MOBILE BACKEND / etc.]\nDatos que maneja: [DATOS SENSIBLES: pagos, PII, etc.]\n\nBusca específicamente las vulnerabilidades OWASP Top 10:\n1. Broken Access Control\n2. Cryptographic Failures\n3. Injection (SQL, NoSQL, Command, LDAP)\n4. Insecure Design\n5. Security Misconfiguration\n6. Vulnerable Components\n7. Authentication Failures\n8. Software Integrity Failures\n9. Logging & Monitoring Failures\n10. Server-Side Request Forgery\n\nPara cada vulnerabilidad encontrada:\n- **Severidad**: CRÍTICA / ALTA / MEDIA / BAJA\n- **Línea de código afectada**\n- **Descripción del riesgo** (qué puede hacer un atacante)\n- **Ejemplo de explotación** (cómo se atacaría)\n- **Código corregido** (fix específico)\n- **Recursos adicionales** (OWASP link)\n\nAl final: CVSS Score estimado y recomendación de prioridad de parcheo.",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Antes de desplegar a producción, en auditorías de seguridad periódicas o después de añadir features con manejo de datos sensibles.',
                'vote_score' => 512,
            ],

            // ── DISEÑO ────────────────────────────────────────────────────
            [
                'profession' => 'diseño',
                'title' => 'Creador de sistema de nomenclatura para design systems',
                'description' => 'Genera una guía de nomenclatura consistente para tokens de diseño, componentes y variantes en Figma o en código, alineada con las convenciones del equipo.',
                'prompt_content' => "Eres un design systems architect con experiencia en sistemas a escala.\n\nNecesito crear un sistema de nomenclatura para:\n\nTIPO DE SISTEMA: [WEB APP / MOBILE APP / MULTI-PLATAFORMA]\nHERRAMIENTA: [FIGMA / STORYBOOK / TAILWIND / CSS CUSTOM PROPERTIES / DESIGN TOKENS]\nTAMAÑO DEL EQUIPO: [Nº DISEÑADORES + Nº DEVELOPERS]\nFRAMEWORK DE CÓDIGO: [REACT / VUE / ANGULAR / etc.]\nBRAND NAME: [NOMBRE]\n\nGenera el sistema de nomenclatura completo:\n\n## TOKENS DE COLOR\nEstructura: categoria/variante/modificador\nEjemplo con paletas: primario, secundario, neutros, semánticos (success, warning, error, info)\n\n## TOKENS DE TIPOGRAFÍA\nEscalas, pesos, line-heights con nombres semánticos\n\n## TOKENS DE ESPACIADO\nEscala de spacing con nombres funcionales\n\n## COMPONENTES\nConvención de nombres: [Átomos / Moléculas / Organismos] o [Base / Composite / Feature]\nEjemplos de 10 componentes comunes con sus variantes y estados\n\n## ICONOGRAFÍA\nConvención de nombres para iconos\n\n## REGLAS GENERALES\n- Qué usar: camelCase / kebab-case / PascalCase (y cuándo)\n- Prefijos del sistema\n- Cómo nombrar estados (hover, active, disabled, focus)\n- Cómo documentar excepciones\n\n## GLOSARIO\nTabla de términos prohibidos vs. términos aprobados",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Al iniciar o reorganizar un design system para garantizar coherencia entre diseño y código.',
                'vote_score' => 234,
            ],
            [
                'profession' => 'diseño',
                'title' => 'Escritor de microcopy y UX writing',
                'description' => 'Genera textos de interfaz (botones, errores, onboarding, tooltips, empty states) que reducen fricción y mejoran la experiencia del usuario.',
                'prompt_content' => "Eres un UX writer con experiencia en productos digitales de alto tráfico.\n\nPRODUCTO: [NOMBRE Y DESCRIPCIÓN EN 1 FRASE]\nVOZ DE MARCA: [FORMAL / AMIGABLE / TÉCNICA / JUGUETONA]\nUSUARIO OBJETIVO: [DESCRIPCIÓN]\n\nGenera microcopy para los siguientes elementos (indica cuáles necesitas):\n\n**BOTONES Y CTAs**\nContexto: [ACCIÓN QUE REALIZA]\nGenera: 3 opciones de texto con explicación de por qué cada una funciona\n\n**MENSAJES DE ERROR**\nError a comunicar: [DESCRIBE EL ERROR TÉCNICO]\nGenera: mensaje amigable que explica qué pasó + cómo solucionarlo + tono empático\n\n**ESTADOS VACÍOS (Empty States)**\nPantalla: [QUÉ MUESTRA CUANDO ESTÁ VACÍO]\nGenera: título + descripción + CTA para el empty state\n\n**TOOLTIPS Y HINTS**\nFunción compleja a explicar: [DESCRIBE LA FUNCIÓN]\nGenera: tooltip de máx. 15 palabras + hint más largo (1-2 frases)\n\n**ONBOARDING**\nPaso del onboarding: [DESCRIBE EL PASO]\nGenera: título motivador + descripción + CTA para avanzar\n\n**CONFIRMACIONES DESTRUCTIVAS**\nAcción a confirmar: [DESCRIBE LA ACCIÓN IRREVERSIBLE]\nGenera: modal de confirmación con texto que previene errores\n\nPara cada texto: versión corta + versión larga + nota de por qué funciona.",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 10,
                'use_case' => 'Durante el diseño de nuevas features, en revisiones de UX o cuando el equipo detecta fricción en el funnel.',
                'vote_score' => 289,
            ],
            [
                'profession' => 'diseño',
                'title' => 'Extractor de brief de diseño desde notas de cliente',
                'description' => 'Transforma notas caóticas de reuniones con clientes en un brief de diseño estructurado, con objetivos claros, restricciones y criterios de éxito.',
                'prompt_content' => "Eres un design strategist experto en traducir necesidades de negocio en requisitos de diseño.\n\nNotas de la reunión con el cliente:\n---\n[PEGA LAS NOTAS TAL COMO LAS TIENES, aunque sean caóticas]\n---\n\nTransforma estas notas en un brief de diseño profesional:\n\n## CONTEXTO DEL PROYECTO\n- Empresa y sector\n- Problema que se intenta resolver\n- Contexto de negocio relevante\n\n## OBJETIVOS DE DISEÑO\n- Objetivo principal (1 frase clara)\n- Objetivos secundarios (máx. 3)\n- Lo que NO es objetivo (igual de importante)\n\n## USUARIOS\n- Perfil del usuario primario\n- Perfil del usuario secundario (si aplica)\n- Jobs to be done principales\n\n## ALCANCE Y ENTREGABLES\n- Qué se diseña (lista específica)\n- Qué está fuera de alcance\n- Formatos de entrega requeridos\n\n## RESTRICCIONES\n- Técnicas (plataforma, dispositivos, limitaciones)\n- De marca (guidelines existentes)\n- De tiempo y presupuesto\n\n## CRITERIOS DE ÉXITO\n- Cómo mediremos que el diseño funciona (3 métricas concretas)\n\n## PREGUNTAS SIN RESPONDER\n- Lista de ambigüedades que necesitan clarificación antes de empezar\n\n## PRÓXIMOS PASOS\n- Acción inmediata + responsable + fecha",
                'tool_name' => 'Claude',
                'difficulty' => 'beginner',
                'estimated_minutes' => 10,
                'use_case' => 'Después de una reunión de kickoff con un cliente para convertir los apuntes en un documento formal que todos firmen.',
                'vote_score' => 312,
            ],
            [
                'profession' => 'diseño',
                'title' => 'Generador de paleta de colores con justificación psicológica',
                'description' => 'Crea paletas de colores completas para marcas, con justificación psicológica, accesibilidad WCAG y casos de uso para cada color.',
                'prompt_content' => "Eres un brand designer y color theorist con experiencia en identidad visual.\n\nCrea una paleta de colores completa para:\n\nMARCA: [NOMBRE]\nSECTOR: [INDUSTRIA]\nPERSONALIDAD DE MARCA: [3-5 adjetivos, ej: \"innovadora, cercana, profesional\"]\nAUDIENCIA: [DESCRIPCIÓN DEL PÚBLICO]\nCOMPETIDORES PRINCIPALES: [MARCAS COMPETIDORAS]\nCOLOR BASE (si tienes uno): [HEX O 'ninguno']\nCASOS DE USO: [WEB / APP / PRINT / PACKAGING / TODOS]\n\nGenera la paleta completa:\n\n## COLOR PRIMARIO\n- Hex + RGB + HSL\n- Por qué este color (psicología + diferenciación vs. competencia)\n- Variantes (50/100/200/300/400/500/600/700/800/900)\n\n## COLOR SECUNDARIO\n- Hex + relación armónica con el primario (complementario / análogo / triádico)\n- Cuándo usarlo vs. el primario\n\n## COLORES DE ACENTO (2 máximo)\n- Uso específico de cada uno\n\n## COLORES SEMÁNTICOS\n- Success: hex + cuándo\n- Warning: hex + cuándo\n- Error: hex + cuándo\n- Info: hex + cuándo\n\n## NEUTROS\n- Escala de grises (10 valores) para textos, fondos y bordes\n\n## VERIFICACIÓN DE ACCESIBILIDAD\n- Contraste de cada color principal sobre blanco y negro\n- Cumplimiento WCAG AA / AAA\n\n## GUÍA DE USO\n- Combinaciones recomendadas\n- Combinaciones prohibidas\n- Proporciones (60-30-10 rule aplicada)",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Al crear o renovar la identidad visual de una marca, antes de entrar en Figma.',
                'vote_score' => 367,
            ],

            // ── VENTAS ─────────────────────────────────────────────────────
            [
                'profession' => 'ventas',
                'title' => 'Guión de discovery call para cualificar oportunidades',
                'description' => 'Genera un guión completo de discovery call con preguntas SPIN selling, señales de compra y árbol de decisión para cualificar o descartar oportunidades rápido.',
                'prompt_content' => "Actúa como un account executive con más de $5M en ventas cerradas usando metodología SPIN y Challenger Sale.\n\nProducto/Servicio: [DESCRIPCIÓN]\nTicket promedio: [PRECIO]\nCiclo de venta habitual: [DURACIÓN]\nPerfil del prospect ideal: [CARGO + INDUSTRIA + TAMAÑO DE EMPRESA]\n\nGenera el guión completo de discovery call (45-60 min):\n\n## APERTURA (5 min)\n- Frase de apertura que establece credibilidad\n- Agenda de la llamada (cómo presentarla)\n- Permiso para hacer preguntas\n\n## PREGUNTAS DE SITUACIÓN (10 min)\n5 preguntas para entender el contexto actual (Stack actual, procesos, equipo)\n\n## PREGUNTAS DE PROBLEMA (10 min)\n5 preguntas para descubrir pain points que quizás no han verbalizado\n\n## PREGUNTAS DE IMPLICACIÓN (10 min)\n4 preguntas para que el prospect sienta el coste del problema\n\n## PREGUNTAS DE NECESIDAD DE SOLUCIÓN (5 min)\n3 preguntas para que el prospect verbalice el valor de resolver el problema\n\n## SEÑALES DE COMPRA A DETECTAR\n5 frases que indican interés real vs. 5 señales de que no es el momento\n\n## CUALIFICACIÓN BANT/MEDDIC\nPregunta específica para cada criterio: Budget, Authority, Need, Timeline\n\n## CIERRE DE LA CALL\n- Cómo presentar los próximos pasos\n- Cómo conseguir el compromiso para el siguiente meeting\n- Email de seguimiento (plantilla de 5 líneas)",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Para preparar discovery calls con nuevos prospects o para entrenar a SDRs y AEs nuevos en el equipo.',
                'vote_score' => 423,
            ],
            [
                'profession' => 'ventas',
                'title' => 'Secuencia de 6 emails de nurturing post-demo',
                'description' => 'Genera la secuencia completa de follow-up después de una demo, desde el recap hasta el último intento de cierre, adaptada al nivel de interés del prospect.',
                'prompt_content' => "Eres un sales strategist especializado en enterprise B2B con ciclos de venta largos.\n\nContexto de la oportunidad:\n- Producto/Servicio demostrado: [DESCRIPCIÓN]\n- Prospect: [CARGO] en [TIPO DE EMPRESA]\n- Nivel de interés post-demo: [ALTO / MEDIO / BAJO]\n- Pain point principal identificado: [PROBLEMA]\n- Objeción principal expresada: [OBJECIÓN O 'ninguna']\n- Próximo paso acordado: [SÍ: qué / NO]\n- Timeline del prospect: [URGENCIA]\n\nGenera la secuencia de 6 emails:\n\n**Email 1 — Recap inmediato (enviar en 2h)**\nResumen de la demo, key takeaways, próximos pasos acordados\n\n**Email 2 — Valor añadido (día 3)**\nCaso de éxito relevante o recurso específico para su pain point\n\n**Email 3 — Respuesta a la objeción (día 7)**\nAborda directamente la objeción con evidencia concreta\n\n**Email 4 — Business case (día 14)**\nROI estimado personalizado para su situación\n\n**Email 5 — Urgencia real (día 21)**\nPlazos o condiciones que crean urgencia legítima\n\n**Email 6 — Breakup email (día 30)**\nEl email de ruptura que paradójicamente reactiva conversaciones\n\nCada email: subject line + preview text + body (máx. 150 palabras) + CTA específico.",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Después de cualquier demo para mantener el momentum y cerrar oportunidades que se enfrían.',
                'vote_score' => 378,
            ],
            [
                'profession' => 'ventas',
                'title' => 'Playbook de expansión de cuenta (upsell/cross-sell)',
                'description' => 'Estrategia completa para crecer el revenue en cuentas existentes, identificando oportunidades de expansión y el momento ideal para plantearlas.',
                'prompt_content' => "Eres un Account Manager con especialización en expansión de revenue y customer success.\n\nCuenta a expandir:\n- Cliente: [TIPO DE EMPRESA + INDUSTRIA]\n- Producto/Plan actual: [QUÉ TIENEN CONTRATADO]\n- Tiempo como cliente: [DURACIÓN]\n- NPS/Satisfacción: [PUNTUACIÓN O 'desconocido']\n- Uso actual del producto: [ALTO / MEDIO / BAJO]\n- Contacto principal: [CARGO]\n- Presupuesto estimado disponible: [RANGO O 'desconocido']\n\nGenera el playbook de expansión:\n\n## DIAGNÓSTICO DE LA CUENTA\n- Señales de expansión presentes (lista de indicadores positivos)\n- Señales de riesgo a resolver antes de plantear upsell\n\n## OPORTUNIDADES DE EXPANSIÓN\nPara cada oportunidad:\n- Producto/feature a ofrecer\n- Business case específico para ESTE cliente\n- Momento ideal para plantearla (trigger event)\n- Obstáculos previsibles\n\n## ESTRATEGIA DE CONTACTO\n- A quién contactar (puede que no sea el contacto actual)\n- Canal y momento óptimo\n- Guión de conversación de expansión (no de venta)\n\n## EMAIL DE PLANTEO\nEmail personalizado para iniciar la conversación de expansión\n\n## GESTIÓN DE OBJECIONES DE EXPANSIÓN\n5 objeciones típicas en upsell con respuestas específicas\n\n## MÉTRICAS DE ÉXITO\nCómo medir si la expansión fue exitosa a 30/60/90 días",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'En revisiones trimestrales de cartera o cuando recibes una señal de que el cliente está creciendo o tiene nuevas necesidades.',
                'vote_score' => 289,
            ],

            // ── PM ────────────────────────────────────────────────────────
            [
                'profession' => 'pm',
                'title' => 'Facilitador de sprint planning con user stories listas',
                'description' => 'Genera el sprint planning completo: user stories bien escritas, criterios de aceptación, estimaciones y backlog priorizado según impacto/esfuerzo.',
                'prompt_content' => "Actúa como un Scrum Master / Product Manager senior con experiencia en equipos de 5-15 personas.\n\nContexto del sprint:\n- Producto: [NOMBRE Y DESCRIPCIÓN BREVE]\n- Duración del sprint: [1 / 2 SEMANAS]\n- Velocidad del equipo: [STORY POINTS POR SPRINT]\n- Objetivo del sprint: [QUÉ QUEREMOS CONSEGUIR]\n- Capacidad del equipo este sprint: [% (ej: 80% si hay vacaciones)]\n\nFuncionalidades a desarrollar:\n[LISTA LAS FUNCIONALIDADES EN FORMATO LIBRE]\n\nGenera el sprint planning completo:\n\n## OBJETIVO DEL SPRINT (Sprint Goal)\nUna frase que describe el valor entregado al usuario\n\n## USER STORIES\nPara cada funcionalidad:\n- User story: \"Como [ROL], quiero [ACCIÓN] para [BENEFICIO]\"\n- Criterios de aceptación (Given/When/Then)\n- Definición de Done específica\n- Story points estimados (Fibonacci)\n- Dependencias\n- Riesgos\n\n## BACKLOG PRIORIZADO\nTabla: Historia | Story Points | Impacto (1-5) | Esfuerzo (1-5) | Prioridad\n\n## CAPACIDAD VS. COMPROMISO\n- Total story points comprometidos vs. velocidad\n- ¿Es realista? Ajustes recomendados\n\n## IMPEDIMENTOS IDENTIFICADOS\nRiesgos y bloqueadores conocidos antes de empezar",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'La tarde antes del sprint planning para llegar con el backlog preparado y reducir el tiempo de la reunión a la mitad.',
                'vote_score' => 334,
            ],
            [
                'profession' => 'pm',
                'title' => 'Redactor de PRD (Product Requirements Document)',
                'description' => 'Genera un PRD completo y profesional a partir de una idea de producto, listo para compartir con ingeniería y stakeholders.',
                'prompt_content' => "Eres un Senior Product Manager con experiencia en productos con millones de usuarios.\n\nIdea de feature/producto:\n[DESCRIBE LA IDEA EN DETALLE, cuanto más específico mejor]\n\nContexto:\n- Producto existente (si aplica): [DESCRIPCIÓN]\n- Stage de la empresa: [STARTUP / SCALEUP / ENTERPRISE]\n- Usuarios afectados: [SEGMENTO]\n- Problema que resuelve: [PAIN POINT]\n- Solución alternativa actual: [CÓMO LO RESUELVEN HOY]\n\nGenera el PRD completo:\n\n## RESUMEN EJECUTIVO (TL;DR)\n3 bullets: problema, solución, impacto esperado\n\n## PROBLEMA\n- Descripción del problema con datos (o hipótesis a validar)\n- A quién afecta y con qué frecuencia\n- Coste del problema (cuantificado si es posible)\n\n## SOLUCIÓN PROPUESTA\n- Descripción de la solución\n- Lo que NO incluye esta versión (scope)\n- Decisiones de diseño clave\n\n## REQUISITOS FUNCIONALES\nTabla: ID | Requisito | Prioridad (Must/Should/Could) | Notas\n\n## REQUISITOS NO FUNCIONALES\nPerformance, seguridad, accesibilidad, escalabilidad\n\n## USER FLOWS\nFlujos principales en formato texto paso a paso\n\n## MÉTRICAS DE ÉXITO\n- Métrica norte (North Star)\n- KPIs secundarios con targets\n- Cómo mediremos el éxito a 30/60/90 días\n\n## DEPENDENCIAS Y RIESGOS\n## TIMELINE ESTIMADO\n## PREGUNTAS ABIERTAS",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 25,
                'use_case' => 'Antes de entrar en diseño o desarrollo para alinear a todo el equipo en qué se construye y por qué.',
                'vote_score' => 412,
            ],
            [
                'profession' => 'pm',
                'title' => 'Email de actualización de stakeholders (status update)',
                'description' => 'Genera emails de actualización ejecutiva para stakeholders que comunican progreso, riesgos y decisiones necesarias de forma clara y sin ruido.',
                'prompt_content' => "Eres un PM con habilidades de comunicación ejecutiva.\n\nProyecto: [NOMBRE]\nDestinatarios: [CARGOS: CEO, CTO, Inversores, etc.]\nFrecuencia: [SEMANAL / QUINCENAL / MENSUAL]\n\nEstado actual:\n- Lo completado esta semana: [LISTA]\n- Lo planificado para la próxima semana: [LISTA]\n- Métricas clave: [KPIs actuales vs. objetivos]\n- Riesgos actuales: [LISTA]\n- Decisiones que necesitan los stakeholders: [LISTA O 'ninguna']\n- Presupuesto: [EN TIEMPO / EN DINERO si aplica]\n\nGenera el email de status update:\n\nFormato: máximo 200 palabras en el body, con estructura visual clara\n\n**Asunto:** [Genera 2 opciones de subject]\n\n**Estructura del email:**\n🟢 / 🟡 / 🔴 Estado general del proyecto\n\n**Esta semana:** (3 bullets máximo)\n**Próxima semana:** (3 bullets máximo)\n**Métricas:** (tabla compacta)\n**Riesgos:** (solo los que requieren atención)\n**Necesito de vosotros:** (decisiones pendientes, si las hay)\n\nTono: directo, sin jerga, orientado a decisiones. Los ejecutivos no leen emails largos.",
                'tool_name' => 'ChatGPT',
                'difficulty' => 'beginner',
                'estimated_minutes' => 5,
                'use_case' => 'Cada semana o quincena para mantener informados a los stakeholders sin reuniones innecesarias.',
                'vote_score' => 267,
            ],

            // ── RRHH ──────────────────────────────────────────────────────
            [
                'profession' => 'rrhh',
                'title' => 'Redactor de evaluaciones de desempeño (performance reviews)',
                'description' => 'Genera evaluaciones de desempeño constructivas, específicas y accionables que ayudan al empleado a crecer y documentan el rendimiento de forma objetiva.',
                'prompt_content' => "Eres un People Manager con experiencia en dar feedback de alto impacto.\n\nEmpleado evaluado:\n- Nombre: [NOMBRE]\n- Cargo: [TÍTULO]\n- Tiempo en el puesto: [DURACIÓN]\n- Período evaluado: [FECHAS]\n\nRendimiento observado:\n- Logros destacados: [LISTA CON EJEMPLOS ESPECÍFICOS]\n- Áreas de mejora observadas: [LISTA CON EJEMPLOS ESPECÍFICOS]\n- Competencias a evaluar: [LISTA: ej. comunicación, liderazgo, ejecución, etc.]\n- Objetivos del período anterior: [LISTA Y SI SE CUMPLIERON]\n- Feedback de compañeros (si tienes): [RESUMEN]\n\nGenera la evaluación completa:\n\n## RESUMEN EJECUTIVO\n2-3 frases que capturan el rendimiento general con un tono justo\n\n## LOGROS DEL PERÍODO\nPara cada logro: situación → acción → resultado (formato STAR)\n\n## COMPETENCIAS\nPara cada competencia: puntuación 1-5 + evidencia específica + ejemplo conductual\n\n## ÁREAS DE DESARROLLO\nPara cada área: observación específica → impacto → comportamiento esperado → plan de acción concreto\n\n## OBJETIVOS PRÓXIMO PERÍODO\n3-5 objetivos SMART con criterios de medición\n\n## PLAN DE DESARROLLO\nAcciones concretas con fechas y recursos para el crecimiento\n\n## RESUMEN PARA EL EMPLEADO\nFrase final motivadora y honesta",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'En ciclos anuales o semestrales de performance review para documentar el rendimiento y planificar el desarrollo.',
                'vote_score' => 345,
            ],
            [
                'profession' => 'rrhh',
                'title' => 'Escritor de job descriptions que atraen al candidato ideal',
                'description' => 'Genera ofertas de empleo que atraen candidatos cualificados y disuaden a los que no encajan, reduciendo el tiempo de selección a la mitad.',
                'prompt_content' => "Eres un talent acquisition specialist con expertise en employer branding.\n\nPuesto a cubrir:\n- Título del puesto: [TÍTULO]\n- Departamento: [ÁREA]\n- Tipo: [PRESENCIAL / REMOTO / HÍBRIDO]\n- Nivel: [JUNIOR / MID / SENIOR / LEAD]\n- Salario: [RANGO O 'competitivo']\n- Empresa: [NOMBRE + 1 FRASE DE PITCH]\n\nRequisitos del puesto:\n- Must-haves (no negociables): [LISTA]\n- Nice-to-haves: [LISTA]\n- Responsabilidades principales: [LISTA]\n- Con quién trabajará: [EQUIPO / REPORTA A]\n\nGenera la job description completa:\n\n## TÍTULO Y GANCHO\nTítulo optimizado para búsqueda + frase inicial que hace que el candidato ideal diga \"esto es para mí\"\n\n## SOBRE LA EMPRESA\n3-4 líneas auténticas (no corporativas) sobre cultura y misión\n\n## EL ROL\nDescripción del impacto real del puesto (no lista de tareas)\n\n## RESPONSABILIDADES\n6-8 bullets orientados a resultados, no a actividades\n\n## REQUISITOS\nMust-haves claramente separados de nice-to-haves\n\n## LO QUE OFRECEMOS\nBeneficios reales y concretos (evitar \"buen ambiente de trabajo\")\n\n## PROCESO DE SELECCIÓN\nPasos claros y timeline estimado\n\n## NOTA DE INCLUSIÓN\n1-2 líneas que invitan a candidatos de grupos subrepresentados",
                'tool_name' => 'Claude',
                'difficulty' => 'beginner',
                'estimated_minutes' => 10,
                'use_case' => 'Cada vez que se abre una posición nueva, para reducir candidatos no cualificados y atraer al perfil exacto que se necesita.',
                'vote_score' => 312,
            ],
            [
                'profession' => 'rrhh',
                'title' => 'Coach de negociación salarial para empleados',
                'description' => 'Prepara a empleados para negociar su salario con argumentos basados en datos, guiones de conversación y respuestas a las contraofensivas más comunes del manager.',
                'prompt_content' => "Actúa como un career coach especializado en negociaciones salariales con 15 años de experiencia.\n\nSituación del empleado:\n- Puesto actual: [TÍTULO]\n- Salario actual: [CANTIDAD]\n- Salario objetivo: [CANTIDAD]\n- Tiempo en la empresa: [DURACIÓN]\n- Tiempo en el puesto actual: [DURACIÓN]\n- Logros del último año: [LISTA ESPECÍFICA CON IMPACTO]\n- Mercado: [PAÍS / CIUDAD]\n- Motivo para pedir aumento: [REVISIÓN ANUAL / PROMOCIÓN / OFERTA EXTERNA / etc.]\n- ¿Tiene oferta externa?: [SÍ: cuánto / NO]\n\nPrepara la negociación completa:\n\n## ANÁLISIS DE POSICIÓN\n- ¿Es razonable tu petición? (basado en contexto)\n- Tu punto de partida vs. tu BATNA\n- El BATNA de la empresa\n\n## GUIÓN DE LA CONVERSACIÓN\nApertura → Argumentos → Manejo de silencios → Cierre\n\n## TUS 5 ARGUMENTOS MÁS FUERTES\nEn orden de impacto, con datos específicos\n\n## RESPUESTAS A LAS OBJECIONES MÁS COMUNES\n- \"No hay presupuesto ahora\"\n- \"Estás bien pagado vs. el mercado\"\n- \"Vamos a verlo en la próxima revisión\"\n- \"Si te doy a ti, tengo que darlo a todos\"\n\n## LO QUE NO DEBES HACER\n5 errores que debilitan tu posición\n\n## PLAN B\nSi el dinero no es posible: qué más puedes negociar",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Antes de una reunión de revisión salarial o tras recibir una oferta externa para preparar la contrapropuesta.',
                'vote_score' => 456,
            ],

            // ── FINANZAS ──────────────────────────────────────────────────
            [
                'profession' => 'finanzas',
                'title' => 'Analizador de desviaciones presupuestarias (Budget vs. Actual)',
                'description' => 'Analiza las desviaciones entre presupuesto y resultado real, identifica las causas raíz y genera el informe ejecutivo para el comité de dirección.',
                'prompt_content' => "Actúa como un Financial Controller con experiencia en reporting ejecutivo.\n\nDatos del período:\n- Empresa: [NOMBRE]\n- Período: [MES/TRIMESTRE]\n- Área: [TODA LA EMPRESA / DEPARTAMENTO ESPECÍFICO]\n\n[PEGA LOS DATOS EN FORMATO:\nConcepto | Presupuesto | Real | Desviación €/$ | Desviación %]\n\nGenera el análisis de desviaciones:\n\n## RESUMEN EJECUTIVO (para el comité)\n3 bullets: desviación total, 2 drivers principales, recomendación\n\n## ANÁLISIS DE DESVIACIONES SIGNIFICATIVAS\nPara toda desviación > [X]% o > [Y]€:\n- Nombre del concepto\n- Desviación en € y %\n- Causa raíz (¿fue precio, volumen o mix?)\n- ¿Era previsible? ¿Qué señal se ignoró?\n- Impacto en el año completo si persiste\n\n## DESVIACIONES POSITIVAS\nLo que fue mejor de lo esperado y por qué\n\n## ACCIONES CORRECTORAS\nPara cada desviación negativa significativa:\n- Acción específica\n- Responsable\n- Fecha de implementación\n- Ahorro/corrección esperada\n\n## FORECAST ACTUALIZADO\n¿Hay que revisar el presupuesto anual? Nueva proyección de cierre de año.",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'En el cierre mensual o trimestral para preparar el informe del comité de dirección en minutos en vez de horas.',
                'vote_score' => 298,
            ],
            [
                'profession' => 'finanzas',
                'title' => 'Redactor de investor update mensual para startups',
                'description' => 'Genera el investor update mensual con el formato que los inversores prefieren: métricas clave, progreso, retos y peticiones, en menos de 500 palabras.',
                'prompt_content' => "Eres un founder con experiencia en comunicación con inversores y una cartera de 20+ startups.\n\nStartup: [NOMBRE]\nMes: [MES AÑO]\nStage: [PRE-SEED / SEED / SERIES A]\n\nDatos del mes:\n- MRR actual: [CANTIDAD] (vs. mes anterior: [CANTIDAD])\n- MoM growth: [%]\n- Nuevos clientes: [Nº]\n- Churn: [%]\n- Burn rate: [CANTIDAD/mes]\n- Runway: [MESES]\n- Equipo: [Nº] personas\n- Hito más importante del mes: [DESCRIBE]\n- Reto principal del mes: [DESCRIBE]\n- Foco del próximo mes: [DESCRIBE]\n- Petición a inversores (si tienes): [INTRO / CANDIDATO / CONSEJO / etc.]\n\nGenera el investor update con este formato probado:\n\n**Asunto:** [STARTUP] — Update [MES] | MRR [CANTIDAD] ([+/-X%])\n\n**TL;DR:** 2 frases con el estado en 10 segundos\n\n**El mes en números:** tabla compacta de métricas clave\n\n**Lo que fue bien:** 3 bullets concretos\n\n**Lo que fue mal / retos:** 2 bullets honestos (los inversores valoran la transparencia)\n\n**Foco próximo mes:** 3 prioridades\n\n**Ask:** petición específica o 'Nada esta vez'\n\nTono: directo, honesto, sin spin. Máximo 400 palabras.",
                'tool_name' => 'Claude',
                'difficulty' => 'beginner',
                'estimated_minutes' => 10,
                'use_case' => 'El primer día de cada mes para mantener a los inversores informados y activar su red cuando lo necesites.',
                'vote_score' => 378,
            ],
            [
                'profession' => 'finanzas',
                'title' => 'Proyección de cash flow a 13 semanas',
                'description' => 'Genera una proyección de tesorería a 13 semanas con escenarios optimista/base/pesimista y alertas de liquidez críticas.',
                'prompt_content' => "Actúa como un CFO con experiencia en gestión de tesorería en situaciones de estrés de liquidez.\n\nDatos actuales:\n- Saldo en cuenta: [CANTIDAD]\n- Cobros previstos (próximas 13 semanas):\n[PEGA: Semana | Concepto | Importe previsto | Probabilidad %]\n\n- Pagos fijos (próximas 13 semanas):\n[PEGA: Semana | Concepto | Importe | Fijo/Variable]\n\n- Pagos variables estimados: [DESCRIPCIÓN Y ESTIMACIÓN]\n- Línea de crédito disponible: [CANTIDAD O 'ninguna']\n\nGenera la proyección completa:\n\n## TABLA DE CASH FLOW (13 semanas)\nColumnas: Semana | Cobros | Pagos | Saldo neto | Saldo acumulado\nTres escenarios: Optimista / Base / Pesimista\n\n## ALERTAS CRÍTICAS\n¿Hay semanas con saldo negativo en algún escenario? Señálalas en rojo con la magnitud del problema.\n\n## ANÁLISIS DE LIQUIDEZ\n- Días de runway en cada escenario\n- Concentración de riesgo (¿hay cobros muy dependientes de 1-2 clientes?)\n- Puntos de decisión críticos (semanas donde debes actuar si el escenario se deteriora)\n\n## ACCIONES RECOMENDADAS\nPor orden de urgencia: cobros a acelerar, pagos a negociar, financiación a buscar\n\n## INDICADORES EARLY WARNING\n3 KPIs a monitorizar semanalmente para detectar deterioro antes de que sea crisis",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 25,
                'use_case' => 'En momentos de incertidumbre de liquidez, antes de levantar deuda o cuando el runway es inferior a 6 meses.',
                'vote_score' => 334,
            ],

            // ── LEGAL ──────────────────────────────────────────────────────
            [
                'profession' => 'legal',
                'title' => 'Generador de política de privacidad (GDPR/LOPD)',
                'description' => 'Genera una política de privacidad completa y conforme al GDPR/LOPD para sitios web y apps, sin jerga innecesaria y con las cláusulas obligatorias.',
                'prompt_content' => "Actúa como un abogado especialista en protección de datos y derecho digital.\n\nDatos de la empresa:\n- Nombre: [NOMBRE]\n- Tipo de entidad: [EMPRESA / AUTÓNOMO / ONG]\n- País/Jurisdicción: [PAÍS]\n- Sitio web / App: [URL]\n- Sector: [INDUSTRIA]\n\nDatos personales que se recopilan:\n- [LISTA: nombre, email, teléfono, dirección, datos de pago, cookies, etc.]\n\nFinalidades del tratamiento:\n- [LISTA: newsletter, compras, analytics, publicidad, etc.]\n\nTerceros con quien se comparten datos:\n- [LISTA: Mailchimp, Stripe, Google Analytics, etc.]\n\nGenera la política de privacidad completa con:\n\n1. **Responsable del tratamiento** (datos identificativos)\n2. **Datos que recopilamos** (y base legal de cada uno: consentimiento / interés legítimo / contrato / obligación legal)\n3. **Finalidad del tratamiento**\n4. **Destinatarios** (terceros y transferencias internacionales si aplica)\n5. **Conservación de datos** (plazos por categoría)\n6. **Derechos del usuario** (ARCOPOL: acceso, rectificación, cancelación, oposición, portabilidad, olvido, limitación)\n7. **Cookies** (si aplica: tipos, duración, cómo gestionar)\n8. **Seguridad**\n9. **Menores**\n10. **Contacto DPO o responsable**\n11. **Actualizaciones de la política**\n\nLenguaje: claro, comprensible, cumple con el requisito de transparencia del GDPR.",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Al lanzar un sitio web, app o cuando se añaden nuevas formas de recopilación de datos.',
                'vote_score' => 289,
            ],
            [
                'profession' => 'legal',
                'title' => 'Revisor de contratos con resumen de riesgos',
                'description' => 'Analiza cualquier contrato e identifica cláusulas abusivas, riesgos ocultos y términos inusuales con recomendaciones específicas de negociación.',
                'prompt_content' => "Actúa como un abogado corporativo senior especializado en revisión de contratos.\n\nRevisa el siguiente contrato:\n\n[PEGA EL CONTRATO COMPLETO]\n\nContexto:\n- Tipo de contrato: [SERVICIO / LABORAL / COMPRAVENTA / SaaS / etc.]\n- Tu posición: [COMPRADOR / VENDEDOR / EMPLEADO / EMPLEADOR / etc.]\n- Sector: [INDUSTRIA]\n- Valor del contrato: [IMPORTE O RANGO]\n- Jurisdicción: [PAÍS]\n\nRealiza una revisión completa:\n\n## RESUMEN EJECUTIVO\n- Tipo de acuerdo y partes\n- Puntos clave en 5 bullets\n- Valoración de riesgo general: BAJO / MEDIO / ALTO\n\n## CLÁUSULAS DE RIESGO ALTO\nPara cada una: cláusula literal → por qué es problemática → cómo renegociarla\n\n## CLÁUSULAS DE RIESGO MEDIO\nMisma estructura\n\n## LO QUE FALTA\nCláusulas habituales en este tipo de contrato que no aparecen y deberían estar\n\n## TÉRMINOS INUSUALES O AMBIGUOS\nPasos confusos que podrían interpretarse en tu contra\n\n## RECOMENDACIONES DE NEGOCIACIÓN\nTop 5 cambios a pedir, ordenados por importancia\n\n## ALTERNATIVAS DE REDACCIÓN\nPara las 3 cláusulas más problemáticas: texto alternativo que puedes proponer\n\nNota: este análisis es orientativo. Consulta con un abogado para decisiones finales.",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Antes de firmar cualquier contrato importante: de servicios, laboral, de inversión o SaaS.',
                'vote_score' => 412,
            ],

            // ── CUSTOMER SUCCESS ──────────────────────────────────────────
            [
                'profession' => 'cs',
                'title' => 'Detector de riesgo de churn con plan de retención',
                'description' => 'Analiza las señales de una cuenta para calcular el riesgo de churn y genera un plan de retención personalizado con acciones concretas por urgencia.',
                'prompt_content' => "Actúa como un Customer Success Manager con experiencia en retención de cuentas B2B de alto valor.\n\nSeñales de la cuenta:\n- Cliente: [NOMBRE + INDUSTRIA]\n- Plan/Producto: [DESCRIPCIÓN]\n- MRR: [CANTIDAD]\n- Tiempo como cliente: [DURACIÓN]\n- Fecha de renovación: [FECHA]\n- Uso del producto (últimos 30 días): [ALTO / MEDIO / BAJO / NULO]\n- Tickets de soporte recientes: [DESCRIPCIÓN O 'ninguno']\n- Último contacto: [FECHA + TONO: positivo/neutro/negativo]\n- NPS más reciente: [PUNTUACIÓN O 'desconocido']\n- Cambios en la cuenta: [ROL CONTACTO CAMBIÓ / EMPRESA ADQUIRIDA / RECORTE PRESUPUESTO / etc.]\n- Competidores mencionados: [NOMBRES O 'ninguno']\n\nGenera el plan de retención:\n\n## SCORE DE RIESGO\nPuntuación 1-10 con justificación de cada señal (positiva y negativa)\n\n## DIAGNÓSTICO\nCausa raíz probable del riesgo\n\n## PLAN DE RETENCIÓN\n**Esta semana (urgente):** acción inmediata + guión de la llamada\n**Este mes:** 3 iniciativas de re-engagement con el cliente\n**Este trimestre:** cambios en la relación para garantizar la renovación\n\n## EMAIL DE REACTIVACIÓN\nEmail personalizado para retomar contacto\n\n## RED FLAGS A MONITORIZAR\nSeñales que confirmarían que el churn es inminente",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'En revisiones semanales de cartera o cuando recibes una señal de alerta de una cuenta importante.',
                'vote_score' => 356,
            ],
            [
                'profession' => 'cs',
                'title' => 'Creador de QBR (Quarterly Business Review) ejecutivo',
                'description' => 'Genera el deck y el guión de una QBR ejecutiva que demuestra valor, refuerza la relación y siembra el terreno para la renovación y expansión.',
                'prompt_content' => "Eres un Strategic CSM especializado en cuentas enterprise y presentaciones ejecutivas.\n\nDatos para la QBR:\n- Cliente: [NOMBRE]\n- Contacto ejecutivo: [CARGO]\n- Período a revisar: [TRIMESTRE]\n- Producto/plan: [DESCRIPCIÓN]\n- MRR: [CANTIDAD]\n- Fecha de renovación: [FECHA]\n\nResultados del trimestre:\n- KPIs del cliente conseguidos gracias a tu producto: [LISTA CON DATOS]\n- Hitos del cliente: [LOGROS DE SU EMPRESA]\n- Uso del producto: [MÉTRICAS]\n- Tickets/incidencias: [RESUMEN]\n\nObjetivos del cliente para el próximo trimestre: [LISTA]\n\nGenera la QBR completa:\n\n## ESTRUCTURA DEL DECK (diapositiva por diapositiva)\nPara cada slide: título + contenido clave + mensaje que quieres transmitir\n\n**Slide 1:** Agenda\n**Slide 2:** Logros del trimestre (los SUYOS, no los tuyos)\n**Slide 3:** ROI y valor entregado (en sus términos de negocio)\n**Slide 4:** Métricas de uso y adopción\n**Slide 5:** Retos y cómo los resolvimos juntos\n**Slide 6:** Objetivos del próximo trimestre\n**Slide 7:** Roadmap de producto relevante para ellos\n**Slide 8:** Próximos pasos\n\n## GUIÓN DE LA REUNIÓN\nQué decir en cada slide + preguntas clave para el ejecutivo\n\n## PREGUNTAS TRAMPA A EVITAR\n3 preguntas difíciles que pueden hacer y cómo responderlas",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 25,
                'use_case' => 'Preparar las reuniones trimestrales con los ejecutivos de cuentas clave para reforzar la relación y preparar la renovación.',
                'vote_score' => 312,
            ],

            // ── FREELANCERS ───────────────────────────────────────────────
            [
                'profession' => 'freelancers',
                'title' => 'Email para subir tarifas a clientes actuales',
                'description' => 'Redacta el email difícil de subida de tarifas de forma que los clientes lo entiendan, no se molesten y la mayoría acepten la nueva tarifa.',
                'prompt_content' => "Eres un business coach para freelancers con experiencia ayudando a profesionales a aumentar sus tarifas sin perder clientes.\n\nTu situación:\n- Tu servicio: [DESCRIPCIÓN]\n- Tarifa actual con este cliente: [CANTIDAD]\n- Nueva tarifa que quieres aplicar: [CANTIDAD] ([% de subida])\n- Tiempo trabajando con este cliente: [DURACIÓN]\n- Calidad de la relación: [EXCELENTE / BUENA / CORRECTA]\n- Motivo real de la subida: [INFLACIÓN / DEMANDA / ESPECIALIZACIÓN / COSTES / etc.]\n- Fecha de implementación deseada: [FECHA]\n- ¿Estás dispuesto a perder este cliente?: [SÍ / NO / DEPENDE]\n\nGenera el email de subida de tarifas:\n\nPrincipios aplicados:\n- Confianza, no disculpa\n- Valor primero, precio después\n- Aviso con suficiente antelación\n- Sin negociación implícita\n\n**Asunto:** [2 opciones]\n\n**Email:** máximo 200 palabras\n\nEstructura:\n1. Reconocimiento de la relación (1 línea genuina)\n2. El anuncio (directo, sin rodeos)\n3. El valor que han recibido / seguirán recibiendo\n4. El motivo (breve, sin excesivas justificaciones)\n5. La fecha de entrada en vigor\n6. Próximo paso claro\n\nDespués del email: 3 respuestas posibles del cliente y cómo manejar cada una.",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 10,
                'use_case' => 'Cuando llevas más de un año sin subir tarifas o cuando el mercado ha subido y tus precios ya no reflejan tu valor.',
                'vote_score' => 489,
            ],
            [
                'profession' => 'freelancers',
                'title' => 'Cuestionario de onboarding de clientes nuevos',
                'description' => 'Genera el cuestionario de discovery para nuevos clientes que extrae toda la información que necesitas antes de empezar, evitando cambios de alcance y malentendidos.',
                'prompt_content' => "Eres un freelancer senior que ha perfeccionado su proceso de onboarding de clientes.\n\nTu especialidad: [DESCRIBE TU SERVICIO]\nDuración típica de tus proyectos: [CORTO <1 mes / MEDIO 1-3 meses / LARGO >3 meses]\nTamaño típico de tus clientes: [STARTUPS / PYMES / ENTERPRISE]\n\nGenera el cuestionario de onboarding completo:\n\n## SECCIÓN 1: EL NEGOCIO (5 preguntas)\nPreguntas para entender el contexto, el modelo de negocio y el mercado del cliente.\n\n## SECCIÓN 2: EL PROYECTO (8 preguntas)\nPreguntas para definir alcance, objetivos, métricas de éxito y limitaciones.\n\n## SECCIÓN 3: LA AUDIENCIA (4 preguntas)\nPreguntas para entender a quién va dirigido el trabajo.\n\n## SECCIÓN 4: REFERENCIAS Y ESTILO (4 preguntas)\nPreguntas para entender el gusto estético, competencia y ejemplos de lo que les gusta/disgusta.\n\n## SECCIÓN 5: PROCESO Y LOGÍSTICA (5 preguntas)\nPreguntas sobre plazos, decisores, proceso de aprobación, activos disponibles.\n\n## SECCIÓN 6: PRESUPUESTO Y EXPECTATIVAS (3 preguntas)\nPreguntas delicadas pero necesarias sobre presupuesto y expectativas de ROI.\n\nPara cada pregunta:\n- La pregunta formulada claramente\n- Por qué la haces (qué información clave extrae)\n- Si es obligatoria u opcional\n\nAl final: nota de entrega al cliente (cómo presentar el cuestionario para que lo completen).",
                'tool_name' => 'Claude',
                'difficulty' => 'beginner',
                'estimated_minutes' => 10,
                'use_case' => 'Al inicio de cualquier proyecto nuevo para recopilar toda la información necesaria antes de empezar a trabajar.',
                'vote_score' => 334,
            ],
        ];

        foreach ($skills as $data) {
            $profession = Profession::where('slug', $data['profession'])->first();
            if (! $profession) continue;

            $slug = Str::slug($data['title']);
            $base = $slug;
            $i = 1;
            while (Skill::where('slug', $slug)->exists()) {
                $slug = $base . '-' . $i++;
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
                'views_count'       => rand(300, 3000),
                'saves_count'       => rand(30, 300),
                'version'           => 1,
            ]);
        }

        $this->command->info('✅ WebSkillsSeeder: ' . count($skills) . ' skills importadas.');
    }
}
