<?php

namespace Database\Seeders;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Skills12Seeder extends Seeder
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
            // MARKETING (3)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'marketing',
                'title' => 'Secuencia de email marketing de bienvenida y nurturing',
                'description' => 'Genera una secuencia completa de 7 emails automáticos para convertir nuevos suscriptores en clientes: bienvenida, educación, prueba social, objeción, oferta y seguimiento.',
                'prompt_content' => "Eres un especialista en email marketing con expertise en automatización, copywriting de conversión y psicología del consumidor.\n\nCrea una secuencia de email automatizada de 7 emails para:\n\nNEGOCIO: [NOMBRE + QUÉ VENDE]\nProducto/servicio principal: [DESCRIPCIÓN]\nPrecio del producto/servicio: [MONTO]\nPerfil del suscriptor: [QUIÉN SE REGISTRA Y QUÉ PROBLEMA TIENE]\nCómo llegó el suscriptor (lead magnet, prueba gratis, etc.): [ORIGEN]\nTono de la marca: [FORMAL / CERCANO / EXPERTO / CONVERSACIONAL]\nEspecialist en el día de envío: [TZ o País]\n\nEstructura de la secuencia:\n\n## EMAIL 1 — Bienvenida (Inmediato)\nObjetivo: Entregar valor, establecer quién eres y qué esperar\n- Asunto (A/B: escribe 2 opciones)\n- Preview text\n- Cuerpo completo (máx 200 palabras)\n- CTA: presentación o recurso de bienvenida\n\n## EMAIL 2 — El Problema (Día 2)\nObjetivo: Validar el dolor del suscriptor\n- Asunto (A/B)\n- Cuerpo completo: historia del problema + por qué importa resolver\n- Sin CTA de venta\n\n## EMAIL 3 — Educación (Día 4)\nObjetivo: Posicionarte como experto, dar valor real\n- Asunto (A/B)\n- Contenido educativo accionable (tip, framework, checklist)\n- CTA: leer artículo / ver video / descargar recurso\n\n## EMAIL 4 — Prueba Social (Día 6)\nObjetivo: Reducir riesgo percibido con casos reales\n- Asunto (A/B)\n- Historia de cliente o resultado con datos concretos\n- CTA suave hacia el producto\n\n## EMAIL 5 — Objeción Principal (Día 9)\nObjetivo: Destruir la razón #1 por la que no compran\n- Asunto (A/B)\n- Enfrenta la objeción directamente + reencuadre\n- CTA hacia página de ventas\n\n## EMAIL 6 — Oferta (Día 12)\nObjetivo: Conversión directa\n- Asunto urgente (A/B)\n- Descripción del producto/servicio, precio, beneficios, garantía\n- CTA principal + CTA de urgencia (si aplica: tiempo límite)\n\n## EMAIL 7 — Último aviso (Día 14)\nObjetivo: Capturar indecisos\n- Asunto de escasez/urgencia (A/B)\n- Cuerpo corto (máx 100 palabras) + CTA directo\n\n## CONFIGURACIÓN TÉCNICA SUGERIDA\n- Plataforma recomendada y segmentación de lista\n- Tags o condiciones para salir de la secuencia\n- Métricas a monitorear: open rate objetivo, CTR, conversión",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 35,
                'use_case' => 'Automatizar la conversión de leads en clientes sin intervención manual, aumentando revenue por suscriptor.',
                'vote_score' => 378,
            ],
            [
                'profession' => 'marketing',
                'title' => 'Brief para campaña de paid ads Google y Meta',
                'description' => 'Genera un brief creativo completo para campañas de publicidad pagada en Google Ads y Meta Ads con audiencias, mensajes por etapa del funnel, copies de anuncios y estructura de campaña.',
                'prompt_content' => "Eres un Media Buyer y estratega de paid media con experiencia en campañas de performance para Google Ads y Meta Ads (Facebook/Instagram).\n\nCrea el brief completo de campaña para:\n\nPRODUCTO/SERVICIO: [DESCRIPCIÓN]\nPrecio/ticket promedio: [MONTO]\nURL de destino (landing page): [URL O \"por crear\"]\nObjetivo de la campaña: [VENTAS / LEADS / AWARENESS / TRÁFICO]\nPresupuesto mensual total: [MONTO + MONEDA]\nDistribución sugerida Google vs. Meta: [EJ: 60/40 o \"sugerir\"]\nMercado objetivo: [PAÍS/REGIÓN]\nICP (cliente ideal): [DESCRIPCIÓN DEMOGRÁFICA Y PSICOGRÁFICA]\nCompetidores que ya hacen paid: [NOMBRES O \"no sé\"]\nResultados históricos si tienes: [CPC actual, CTR, CPA — o \"primera campaña\"]\n\n## ESTRATEGIA DE FUNNEL\n[Define las 3 etapas: TOFU / MOFU / BOFU con objetivo y mensaje por etapa]\n\n## ESTRUCTURA GOOGLE ADS\n\n### Campaña de Búsqueda\n- Grupos de anuncios recomendados (por intención)\n- Keywords principales por grupo (10-15 por grupo)\n- Match types recomendados\n- Keywords negativas imprescindibles\n- 3 anuncios RSA completos (titulares + descripciones)\n- Extensiones recomendadas\n\n### Campaña de Display / YouTube (si aplica)\n- Audiencias objetivo\n- Concepto creativo\n\n## ESTRUCTURA META ADS\n\n### Campaña de Conversión\n- Estructura de campañas (campaña > ad set > anuncio)\n- Audiencias detalladas por ad set:\n  - Frío (intereses + comportamientos)\n  - Lookalike (% recomendado)\n  - Retargeting (visitantes, engagement, carrito)\n- 3 copies de anuncio completos por etapa de funnel:\n  - Formato: hook + desarrollo + CTA\n  - Variaciones de gancho (pain point / curiosidad / social proof)\n- Formatos creativos recomendados (imagen, carrusel, video, UGC)\n\n## KPIs Y METAS\n| Métrica | Meta | Cómo se mide |\n|---------|------|---------------|\n| CPC | ... | ... |\n| CTR | ... | ... |\n| CPL o CPA | ... | ... |\n| ROAS | ... | ... |\n\n## CALENDAR DE OPTIMIZACIÓN\n[Qué revisar cada día, cada semana, cada mes]",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 30,
                'use_case' => 'Lanzar campañas de paid media con estructura profesional desde el día uno, sin contratar agencia.',
                'vote_score' => 412,
            ],
            [
                'profession' => 'marketing',
                'title' => 'Guión de video para YouTube o Reels con storytelling',
                'description' => 'Crea un guión de video completo con estructura de storytelling, hook poderoso, desarrollo y CTA, optimizado para retención en YouTube (largo) o Reels/TikTok (corto).',
                'prompt_content' => "Eres un guionista y estratega de contenido en video con experiencia creando contenido viral y educativo para YouTube, Instagram Reels y TikTok.\n\nCrea el guión para:\n\nTEMA DEL VIDEO: [DE QUÉ TRATA EL VIDEO]\nObjetivo: [EDUCAR / ENTRETENER / VENDER / GENERAR LEADS / POSICIONAMIENTO]\nPlataforma: [YOUTUBE LARGO (8-15 min) / YOUTUBE CORTO (3-5 min) / REELS-TIKTOK (30-90 seg)]\nPersonaje o canal: [NOMBRE + TONO / PERSONALIDAD]\nAudiencia: [QUIÉN VE ESTE CANAL]\nProducto o CTA final (si aplica): [O \"sin CTA de venta\"]\nReferencias de estilo: [CANALES QUE TE GUSTAN O \"ninguna\"]\n\n## HOOK (primeros 3-10 segundos)\n[Lo más importante del video — decide si el usuario se queda]\n- Escribe 3 opciones de hook:\n  1. Hook de promesa (\"En este video vas a aprender...\")\n  2. Hook de problema/dolor (\"¿Por qué sigues...?\")\n  3. Hook de curiosidad/dato sorprendente\n- Indica cuál recomiendas y por qué\n\n## ESTRUCTURA DEL GUIÓN\n\n[Para cada sección: nombre, duración estimada, texto hablado completo, indicaciones de B-roll o visual sugerido]\n\n### Introducción (10-15% del total)\n- Ampliar el hook\n- Establecer credibilidad\n- Preview de lo que aprenderán\n\n### Desarrollo (70-75% del total)\n[Dividido en secciones con transiciones naturales]\n- Sección 1: [PUNTO PRINCIPAL]\n- Sección 2: [PUNTO PRINCIPAL]\n- Sección 3: [PUNTO PRINCIPAL]\n[Incluir: historias, ejemplos concretos, datos, analogías]\n\n### Conclusión + CTA (10-15%)\n- Resumen de puntos clave\n- CTA principal (suscribirse / comentar / enlace en bio / producto)\n- CTA secundario\n\n## DESCRIPCIÓN PARA SEO\n[Descripción de YouTube optimizada con keywords naturales, timestamps y enlaces]\n\n## HASHTAGS Y TAGS\n[Para la plataforma elegida]\n\n## THUMBNAIL CONCEPT\n[Descripción del thumbnail: texto en pantalla, expresión, colores, elementos visuales]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 25,
                'use_case' => 'Creadores de contenido, educadores, coaches y empresas que quieren producir video sin contratar guionista.',
                'vote_score' => 356,
            ],

            // ─────────────────────────────────────────────────────────────
            // DESARROLLO (3)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'desarrollo',
                'title' => 'Documentación técnica de API REST completa',
                'description' => 'Genera documentación técnica profesional de una API REST con descripción de endpoints, schemas de request/response, códigos de error, ejemplos en curl y guía de autenticación.',
                'prompt_content' => "Eres un Technical Writer y API Designer con experiencia documentando APIs para desarrolladores en empresas de tecnología.\n\nGenera la documentación técnica completa para esta API:\n\nNOMBRE DE LA API: [NOMBRE]\nDescripción en una línea: [QUÉ HACE]\nURL base: [BASE URL O \"api.ejemplo.com/v1\"]\nAutenticación: [API KEY / JWT BEARER / OAUTH2 / NINGUNA]\nLenguaje de los ejemplos: [curl + [LENGUAJE: Python / Node / PHP / otro]]\n\nENDPOINTS A DOCUMENTAR:\n[Lista los endpoints o pega el código de los controladores/routes]\n\nGenera la documentación con este formato:\n\n## INTRODUCCIÓN\n- Qué hace la API\n- Casos de uso principales\n- Versioning y base URL\n- Rate limits\n\n## AUTENTICACIÓN\n[Cómo obtener y usar credenciales — ejemplo completo]\n\n## ENDPOINTS\nPara cada endpoint:\n\n### [MÉTODO] /ruta\n**Descripción:** [Qué hace en 1-2 oraciones]\n\n**Request**\n| Parámetro | Tipo | Requerido | Descripción |\n|-----------|------|-----------|-------------|\n| ... | ... | ... | ... |\n\n**Request Body** (si aplica)\n```json\n{\n  // schema con tipos y descripciones\n}\n```\n\n**Response 200 — Success**\n```json\n{\n  // schema de respuesta exitosa\n}\n```\n\n**Errores posibles**\n| Código | Mensaje | Cuándo ocurre |\n|--------|---------|---------------|\n| 400 | ... | ... |\n| 401 | ... | ... |\n| 404 | ... | ... |\n\n**Ejemplo en curl**\n```bash\ncurl -X [MÉTODO] ...\n```\n\n**Ejemplo en [LENGUAJE]**\n```\n// código completo\n```\n\n## GLOSARIO\n[Términos del dominio que el desarrollador necesita entender]\n\n## CHANGELOG\n[Template para versioning de la documentación]\n\n## POSTMAN COLLECTION\n[Variables de entorno y estructura de colección sugerida]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 25,
                'use_case' => 'Documentar APIs internas o públicas para reducir soporte, facilitar integración y profesionalizar el producto.',
                'vote_score' => 334,
            ],
            [
                'profession' => 'desarrollo',
                'title' => 'Code review de seguridad con checklist OWASP',
                'description' => 'Realiza un análisis de seguridad de un fragmento de código identificando vulnerabilidades OWASP Top 10, con severidad, explicación del riesgo y código corregido.',
                'prompt_content' => "Eres un Security Engineer especializado en application security, penetration testing y secure code review con certificación OWASP y experiencia en auditorías de código.\n\nRealiza un security code review del siguiente código:\n\nLENGUAJE: [PHP / Node.js / Python / Java / otro]\nFRAMEWORK: [Laravel / Express / Django / Spring / otro]\nCONTEXTO (qué hace este código): [DESCRIPCIÓN]\n\nCÓDIGO A REVISAR:\n```\n[PEGA AQUÍ EL CÓDIGO]\n```\n\n¿Está expuesto a internet?: [SÍ / NO / PARCIALMENTE]\n¿Maneja datos sensibles (PII, pagos, salud)?: [SÍ / NO]\n\n## RESUMEN EJECUTIVO\n[Número de vulnerabilidades encontradas por severidad]\n| Crítica | Alta | Media | Baja | Informativa |\n|---------|------|-------|------|-------------|\n| N | N | N | N | N |\n\n## VULNERABILIDADES ENCONTRADAS\nPara cada vulnerabilidad:\n\n### [NÚMERO] [CATEGORÍA OWASP] — [NOMBRE DE LA VULNERABILIDAD]\n**Severidad:** CRÍTICA / ALTA / MEDIA / BAJA\n**Línea(s) afectadas:** [NÚMERO DE LÍNEA]\n**Descripción del riesgo:**\n[Qué puede hacer un atacante con esto — concreto, sin jerga innecesaria]\n**Código vulnerable:**\n```\n[extracto del código problemático]\n```\n**Código corregido:**\n```\n[código arreglado con comentarios explicando el fix]\n```\n**Referencias:** [OWASP link o CVE si aplica]\n\n## VULNERABILIDADES OWASP TOP 10 CHECKLIST\n[Verifica explícitamente cada categoría — encontrado / no encontrado / no aplicable]\n- A01 Broken Access Control:\n- A02 Cryptographic Failures:\n- A03 Injection (SQL, XSS, Command):\n- A04 Insecure Design:\n- A05 Security Misconfiguration:\n- A06 Vulnerable Components:\n- A07 Auth Failures:\n- A08 Integrity Failures:\n- A09 Logging Failures:\n- A10 SSRF:\n\n## BUENAS PRÁCTICAS ADICIONALES\n[3-5 mejoras de seguridad que no son vulnerabilidades críticas pero sí recomendables]\n\n## PRIORIDAD DE FIXES\n[Orden de remediación recomendado con estimación de esfuerzo]",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Auditar código antes de deploy a producción, preparación para pentest, o integrar en proceso de PR review.',
                'vote_score' => 445,
            ],
            [
                'profession' => 'desarrollo',
                'title' => 'Diseño de sistema de autenticación y autorización',
                'description' => 'Define la arquitectura completa de autenticación (login, JWT, OAuth, MFA) y autorización (RBAC/ABAC) para una aplicación, con decisiones técnicas justificadas y código de referencia.',
                'prompt_content' => "Eres un Security Architect y Backend Engineer con expertise en sistemas de identidad, OAuth 2.0, OIDC y control de acceso en aplicaciones de producción.\n\nDiseña el sistema de autenticación y autorización para:\n\nTIPO DE APLICACIÓN: [SPA + API / Mobile + API / Web tradicional / Microservicios]\nStack tecnológico: [LENGUAJE + FRAMEWORK]\nCasos de uso de usuarios:\n- Tipos de usuario: [EJ: admin, usuario regular, invitado, organización]\n- Acciones sensibles que deben protegerse: [LISTA]\nRequisitos especiales: [SSO / OAuth con Google-GitHub / MFA / API tokens / Sin sesiones]\nRegulación aplicable: [GDPR / HIPAA / PCI / NINGUNA]\nInfraestructura: [SELF-HOSTED / AWS / GCP / AZURE]\n\n## ARQUITECTURA DE AUTENTICACIÓN\n\n### Flujo de Login\n[Diagrama en texto + descripción paso a paso]\n\n### Estrategia de Tokens\n| Decisión | Elección | Justificación |\n|----------|---------|---------------|\n| Token type | JWT / Opaque | ... |\n| Almacenamiento | HttpOnly cookie / localStorage | ... |\n| Access token TTL | ... | ... |\n| Refresh token TTL | ... | ... |\n| Rotación de refresh | ... | ... |\n\n### Gestión de Sesiones\n[Invalidación, logout en todos los dispositivos, detección de robo de sesión]\n\n## ARQUITECTURA DE AUTORIZACIÓN\n\n### Modelo elegido: RBAC / ABAC / Hybrid\n[Justificación de la elección según los casos de uso]\n\n### Roles y Permisos\n[Tabla de roles × recursos × acciones]\n\n### Implementación de Guards/Middleware\n```\n[Código de ejemplo del middleware de autorización en el stack elegido]\n```\n\n## IMPLEMENTACIÓN REFERENCIA\n\n### Login + JWT\n```\n[Código completo: handler de login, generación de tokens, validación]\n```\n\n### Middleware de Auth\n```\n[Código del middleware que valida el token en cada request]\n```\n\n### Control de permisos\n```\n[Ejemplo de cómo verificar un permiso específico]\n```\n\n## SEGURIDAD ADICIONAL\n- Protección contra brute force (rate limiting + lockout)\n- Implementación de MFA (si aplica)\n- Auditoría de accesos (qué loguear)\n- Rotación de secrets\n\n## CHECKLIST DE SEGURIDAD PRE-DEPLOY\n[15 puntos a verificar antes de lanzar el sistema a producción]",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 35,
                'use_case' => 'Diseñar desde cero o auditar el sistema de auth de una aplicación antes de escalar o lanzar a producción.',
                'vote_score' => 398,
            ],

            // ─────────────────────────────────────────────────────────────
            // DISEÑO (3)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'diseno',
                'title' => 'Auditoría UX con heurísticas de Nielsen',
                'description' => 'Evalúa una interfaz digital aplicando las 10 heurísticas de usabilidad de Nielsen Norman Group, identificando problemas por severidad y generando recomendaciones priorizadas.',
                'prompt_content' => "Eres un UX Researcher y diseñador de interacción con experiencia en evaluaciones heurísticas, tests de usabilidad y diseño centrado en el usuario.\n\nRealiza una auditoría UX heurística de:\n\nPRODUCTO/PANTALLA: [NOMBRE + QUÉ HACE]\nTipo de interfaz: [WEB / MOBILE IOS / MOBILE ANDROID / DESKTOP APP]\nFlujo o pantallas a auditar: [EJ: flujo de registro, dashboard principal, checkout]\nUsuario objetivo: [PERFIL]\nDescripción de las pantallas (o pega URLs si son públicas): [DESCRIPCIÓN DETALLADA O CAPTURAS]\nContexto de uso: [CÓMO Y DÓNDE SE USA ESTA INTERFAZ]\n\n## HALLAZGOS POR HEURÍSTICA\nPara cada problema encontrado:\n\n**H[N] — [Nombre de la Heurística]**\n- Descripción del problema: [Qué viola esta heurística]\n- Pantalla/elemento afectado: [Dónde ocurre]\n- Severidad: 0-Cosmético / 1-Menor / 2-Moderado / 3-Grave / 4-Catástrofe\n- Impacto en el usuario: [Qué confusión o frustración genera]\n- Recomendación: [Qué cambiar y cómo]\n- Referencia visual: [Describir cómo debería verse el fix]\n\nHeurísticas a evaluar:\n1. Visibilidad del estado del sistema\n2. Correspondencia entre el sistema y el mundo real\n3. Control y libertad del usuario\n4. Consistencia y estándares\n5. Prevención de errores\n6. Reconocimiento en lugar de recuerdo\n7. Flexibilidad y eficiencia de uso\n8. Diseño estético y minimalista\n9. Ayuda para reconocer, diagnosticar y recuperarse de errores\n10. Ayuda y documentación\n\n## RESUMEN DE SEVERIDAD\n| Heurística | Problemas encontrados | Severidad máxima |\n|-----------|----------------------|-------------------|\n| H1 | N | ... |\n...\n\n## TOP 5 FIXES PRIORITARIOS\n[Ordenados por impacto/esfuerzo — los que más mejorarán la experiencia]\n\n## QUICK WINS (menos de 1 día de implementación)\n[Cambios rápidos con alto impacto]\n\n## PRÓXIMOS PASOS\n[Si se recomienda test con usuarios, encuesta o A/B test para validar los fixes]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 25,
                'use_case' => 'Auditar interfaces existentes antes de un rediseño, identificar quick wins de UX, o preparar argumentos para priorizar mejoras con el equipo de producto.',
                'vote_score' => 287,
            ],
            [
                'profession' => 'diseno',
                'title' => 'Sistema de design tokens y guía de componentes UI',
                'description' => 'Define un design system completo con tokens de color, tipografía, espaciado y elevación, más la guía de uso de componentes core para garantizar consistencia en toda la interfaz.',
                'prompt_content' => "Eres un Design Systems Lead con experiencia creando y manteniendo sistemas de diseño para productos digitales a escala.\n\nCrea el design system para:\n\nPRODUCTO: [NOMBRE + TIPO DE APP]\nStack de frontend: [React / Vue / Angular / HTML vanilla / otro]\nTool de diseño: [Figma / Sketch / otro]\nBrand (si tienes): [Paleta de color base, fuentes — o \"por definir\"]\nEscala del equipo: [NÚMERO DE DISEÑADORES + DEVELOPERS]\n¿Existe UI parcial a unificar?: [SÍ — describe / NO]\n\n## PRINCIPIOS DEL DESIGN SYSTEM\n[3-5 principios que guiarán cada decisión de diseño]\n\n## DESIGN TOKENS\n\n### Color\n```\n// Paleta completa con semántica\n--color-primary-50 al 900\n--color-neutral-50 al 900\n--color-success / warning / error / info (con variantes)\n--color-background-primary/secondary/tertiary\n--color-text-primary/secondary/disabled\n--color-border-default/strong/subtle\n```\n\n### Tipografía\n```\n// Font families, sizes, weights, line-heights\n--font-family-base / display / mono\n--font-size-xs al 4xl (escala 8pt)\n--font-weight-regular / medium / semibold / bold\n--line-height-tight / normal / relaxed\n```\n\n### Espaciado\n```\n// Escala de spacing (base 4px)\n--space-1 (4px) al --space-16 (64px)\n```\n\n### Elevación / Sombras\n```\n--shadow-sm / md / lg / xl\n```\n\n### Bordes y Radii\n```\n--radius-sm / md / lg / full\n--border-width-thin / medium\n```\n\n## COMPONENTES CORE\nPara cada componente (Button, Input, Card, Modal, Toast, Badge, Dropdown):\n\n### [Nombre del Componente]\n- **Variantes:** [lista con descripción de cuándo usar cada una]\n- **Estados:** default, hover, focus, disabled, loading, error\n- **Props/API:** tabla de propiedades\n- **Reglas de uso:** cuándo usarlo, cuándo NO usarlo\n- **Accesibilidad:** ARIA roles, keyboard navigation\n\n## GUÍA DE COMPOSICIÓN\n[Reglas de cómo combinar componentes: spacing entre elementos, jerarquía visual, grid]\n\n## PROCESO DE CONTRIBUCIÓN\n[Cómo agregar nuevos componentes: criterios, proceso de review, documentación mínima]",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 30,
                'use_case' => 'Crear la base de un design system desde cero o documentar un sistema existente para escalarlo al equipo.',
                'vote_score' => 312,
            ],
            [
                'profession' => 'diseno',
                'title' => 'Guión de test de usabilidad con usuarios reales',
                'description' => 'Prepara un protocolo completo de test de usabilidad moderado con guión de facilitador, tareas para el usuario, métricas de éxito y plantilla de análisis de resultados.',
                'prompt_content' => "Eres un UX Researcher con experiencia en research cualitativo, tests de usabilidad moderados y no-moderados, y síntesis de insights.\n\nCrea el protocolo de test de usabilidad para:\n\nPRODUCTO: [NOMBRE]\nFlujo o funcionalidad a testear: [EJ: proceso de registro, flujo de pago, onboarding]\nPreguntas de investigación: [QUÉ QUIERES APRENDER — EJ: ¿pueden los usuarios completar el checkout sin ayuda?]\nPerfil de participantes: [DESCRIPCIÓN DEL USUARIO OBJETIVO]\nNúmero de participantes: [CANTIDAD — EJ: 5]\nModalidad: [PRESENCIAL / REMOTO MODERADO / NO MODERADO]\nHerramienta si es remoto: [Maze / UserTesting / Lookback / Zoom / otra]\nDuración estimada: [MINUTOS POR SESIÓN]\n\n## GUIÓN COMPLETO DEL FACILITADOR\n\n### Introducción (5-7 minutos)\n[Script exacto de bienvenida, explicación del proceso, firma de consentimiento, instrucciones de think aloud]\n\n### Preguntas de calentamiento (3-5 minutos)\n[5 preguntas contextuales sobre el usuario, no sobre el producto]\n\n### TAREAS DE USABILIDAD\n[Para cada tarea:]\n\n**Tarea [N]: [NOMBRE]**\n- Escenario para el participante (en segunda persona, sin spoilers de cómo hacerlo):\n  _\"Imagina que...\"_\n- Criterio de éxito: [Qué significa completarla correctamente]\n- Tiempo máximo: [MINUTOS]\n- Señales de fallo a observar: [Comportamientos que indican confusión]\n- Métricas: tasa de éxito / tiempo en tarea / errores / satisfacción post-tarea (SEQ)\n- Preguntas de seguimiento post-tarea:\n  1. [Pregunta]\n  2. [Pregunta]\n\n### Preguntas de cierre (5-7 minutos)\n[Impresión general, aspectos positivos, aspectos frustrantes, comparación con expectativas, NPS de usabilidad]\n\n### Cierre y agradecimiento\n[Script de cierre]\n\n## MÉTRICAS A TRACKEAR\n| Métrica | Cómo medirla | Benchmark de éxito |\n|---------|-------------|--------------------|\n| Task completion rate | ... | >80% |\n| Time on task | ... | ... |\n| Error rate | ... | ... |\n| SUS Score | cuestionario | >68 |\n\n## PLANTILLA DE NOTAS DURANTE LA SESIÓN\n[Grid de observación por tarea + participante]\n\n## ANÁLISIS POST-TEST\n[Framework de síntesis: rainbow spreadsheet, affinity diagram, severity rating de problemas]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Preparar y facilitar tests de usabilidad para validar decisiones de diseño con datos reales de usuarios.',
                'vote_score' => 256,
            ],

            // ─────────────────────────────────────────────────────────────
            // VENTAS (3)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'ventas',
                'title' => 'Script de discovery call con metodología SPIN',
                'description' => 'Genera un script completo de llamada de discovery basado en SPIN Selling (Situación, Problema, Implicación, Need-Payoff) con preguntas abiertas, transiciones naturales y cierre de próximos pasos.',
                'prompt_content' => "Eres un Sales Trainer experto en metodologías SPIN Selling, Challenger Sale y ventas consultivas B2B.\n\nCrea el script de discovery call para:\n\nPRODUCTO/SERVICIO: [DESCRIPCIÓN]\nTicket promedio: [MONTO]\nTipo de venta: [TRANSACCIONAL / CONSULTIVA] y [CICLO CORTO (<1 semana) / LARGO (>1 mes)]\nCargo del prospecto habitual: [TÍTULO]\nIndustria del prospecto: [SECTOR]\nProblemas principales que resuelves: [LISTA 3-5]\nDolores más comunes que mencionan tus prospectos: [LISTA]\nDuración de la call: [30 / 45 / 60 minutos]\n\n## ESTRUCTURA DE LA CALL\n\n### Apertura (3-5 min)\n[Script exacto de bienvenida, establecimiento de agenda y permiso para tomar notas]\n\"Perfecto [NOMBRE], gracias por sacar el tiempo. Para aprovechar bien los [X] minutos, tenía en mente...\"\n\n### PREGUNTAS DE SITUACIÓN (S) — 5-8 min\n[6-8 preguntas para entender el contexto actual — sin ser un interrogatorio]\n1. [Pregunta S]\n2. [Pregunta S]\n...\n\n### PREGUNTAS DE PROBLEMA (P) — 8-10 min\n[5-7 preguntas para que el prospecto articule sus dolores]\n1. [Pregunta P]\n2. [Pregunta P]\n...\n\n### PREGUNTAS DE IMPLICACIÓN (I) — 8-10 min\n[4-6 preguntas que amplían el impacto del problema — las más poderosas del SPIN]\n1. [Pregunta I]\n2. [Pregunta I]\n...\n\n### PREGUNTAS DE NECESIDAD DE BENEFICIO (N) — 5-7 min\n[4-5 preguntas que hacen que el prospecto visualice la solución y la pida]\n1. [Pregunta N]\n2. [Pregunta N]\n...\n\n### Presentación ligera de la solución (5-8 min)\n[Solo si el prospecto ha articulado el problema — presentación adaptada a sus dolores específicos]\n\n### Cierre de próximos pasos (3-5 min)\n[Script exacto para acordar siguiente paso concreto — nunca terminar sin fecha]\n\n## MANEJO DE SITUACIONES DIFÍCILES\n- Prospecto que no habla mucho: [Script]\n- Prospecto que quiere demo inmediata: [Script]\n- Prospecto que dice \"solo estoy explorando\": [Script]\n- Prospecto que menciona a un competidor: [Script]\n\n## CHECKLIST POST-CALL\n[Qué registrar en el CRM + email de seguimiento plantilla]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Preparar SDRs y AEs para calls más efectivas, estandarizar el proceso de discovery o mejorar win rate.',
                'vote_score' => 367,
            ],
            [
                'profession' => 'ventas',
                'title' => 'Secuencia de follow-up post-demo de 5 touchpoints',
                'description' => 'Genera una secuencia multicanal de seguimiento tras una demo, con 5 touchpoints en 14 días (email + LinkedIn) que mantienen el interés sin ser invasivos y aceleran la decisión.',
                'prompt_content' => "Eres un Account Executive experto en deal management, multithread selling y secuencias de seguimiento post-demo en B2B.\n\nCrea la secuencia de follow-up para:\n\nPRODUCTO/SERVICIO: [DESCRIPCIÓN]\nResultado de la demo: [MUY POSITIVA / BIEN / TIBIA / NO SÉ]\nPróximo paso acordado en la demo: [EJ: propuesta en 3 días / evaluación técnica / nada concreto]\nDecisores involucrados: [NOMBRES Y CARGOS]\nFecha límite del deal (si la hay): [FECHA O \"sin urgencia declarada\"]\nPrincipal objeción o duda que quedó: [O \"ninguna aparente\"]\nCompetidores en evaluación: [O \"no mencionaron\"]\n\n## SECUENCIA DE 5 TOUCHPOINTS\n\n### Touchpoint 1 — Email (2 horas post-demo)\nObjetivo: Recapitular valor + confirmar próximo paso\n- Asunto:\n- Cuerpo: [Recapping los puntos que resonaron, material prometido, próximo paso concreto con fecha]\n\n### Touchpoint 2 — Email (Día 3)\nObjetivo: Añadir valor con recurso relevante\n- Asunto:\n- Cuerpo: [Caso de éxito de industria similar / artículo / dato que refuerza el problema discutido]\n\n### Touchpoint 3 — LinkedIn DM (Día 5)\nObjetivo: Toque informal, mantener relación\n- Mensaje corto (máx 3 líneas): [Referencia a algo de la conversación / noticia de su empresa / logro que viste en su perfil]\n\n### Touchpoint 4 — Email (Día 9)\nObjetivo: Abordar la objeción que quedó implícita\n- Asunto:\n- Cuerpo: [Directo sobre la duda principal + respuesta con evidencia]\n\n### Touchpoint 5 — Email (Día 14)\nObjetivo: Crear urgencia sin presión artificial\n- Asunto:\n- Cuerpo: [Breakup suave + pregunta directa sobre el estado de la decisión]\n\n## VARIANTES POR ESCENARIO\n- Si no responde a ningún touchpoint: [Qué hacer en día 21]\n- Si responde positivamente: [Cómo acelerar el cierre]\n- Si pide más tiempo: [Cómo mantener momentum sin acosar]\n\n## MULTI-THREAD STRATEGY\n[Cómo involucrar a otros decisores del deal — contactos adicionales para hacer outreach]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Estandarizar el proceso post-demo para reducir deals perdidos por seguimiento tardío o inconsistente.',
                'vote_score' => 334,
            ],
            [
                'profession' => 'ventas',
                'title' => 'Forecast de ventas y análisis de pipeline',
                'description' => 'Analiza el estado de tu pipeline de ventas, calcula el forecast del mes/trimestre con diferentes metodologías y genera un plan de acción para cerrar el gap contra el objetivo.',
                'prompt_content' => "Eres un Revenue Operations Manager con expertise en sales analytics, forecasting y gestión de pipeline B2B.\n\nAnaliza el siguiente pipeline:\n\nOBJETIVO DEL PERÍODO: [MONTO + PERÍODO: mes/trimestre]\nCRR o MRR actual: [MONTO O \"primera venta\"]\nMONEDA: [USD / EUR / MXN / otro]\n\nPIPELINE ACTUAL (pega tu lista de deals):\n[FORMATO SUGERIDO: Nombre deal | Etapa | Monto | Fecha cierre estimada | Probabilidad o confianza | Bloqueos]\n\nMETODOLOGÍA DE STAGES DE TU CRM: [EJ: Prospecting 10% / Discovery 25% / Demo 40% / Propuesta 60% / Negociación 80% / Cerrado 100%]\n\nCiclo de venta promedio histórico: [DÍAS]\nWin rate histórico: [PORCENTAJE O \"no lo sé\"]\n\n## ANÁLISIS DEL PIPELINE\n\n### Métricas de Salud\n- Pipeline total valor bruto: \$X\n- Pipeline coverage ratio: X:1 (benchmark: 3:1 para hit quota)\n- Weighted pipeline (suma de monto × probabilidad): \$X\n- Distribución por etapa: [tabla]\n- Deals en riesgo (sin actividad >14 días): [lista]\n\n### Forecast del Período\n| Metodología | Forecast | Confianza |\n|-------------|----------|----------|\n| Weighted pipeline | \$X | ... |\n| Historical conversion | \$X | ... |\n| Commit (deals 80%+) | \$X | ... |\n| Best case | \$X | ... |\n| Forecast recomendado | \$X | Alta |\n\n### Gap Analysis\n- Objetivo: \$X\n- Forecast: \$X\n- Gap: \$X\n- Deals adicionales necesarios para cerrar el gap: [N deals de \$X promedio]\n\n## TOP DEALS — PLAN DE ACCIÓN\n[Para los 5 deals más importantes:]\n**[Nombre del deal]**\n- Estado actual y fecha de close estimada\n- Riesgo principal\n- Acción específica a tomar esta semana\n- Quién debe hacer qué\n\n## PIPELINE HYGIENE\n[Deals a mover de etapa / limpiar / reactivar / eliminar con justificación]\n\n## PLAN DE PROSPECCIÓN\n[Cuántos nuevos deals hay que agregar al pipeline esta semana para cubrir el gap]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Revisiones semanales de pipeline con el equipo, reportes a dirección, o planificación de sprint de ventas.',
                'vote_score' => 289,
            ],

            // ─────────────────────────────────────────────────────────────
            // PRODUCT MANAGEMENT (3)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'product-management',
                'title' => 'User story mapping para epic completo',
                'description' => 'Convierte un epic o funcionalidad en un mapa de user stories estructurado por actividades del usuario, con criterios de aceptación, estimaciones relativas y propuesta de slicing para MVP.',
                'prompt_content' => "Eres un Agile Coach y Product Manager con experiencia en user story mapping, refinement de backlog y planificación de sprints con equipos de desarrollo.\n\nCrea el user story map para:\n\nEPIC O FUNCIONALIDAD: [NOMBRE Y DESCRIPCIÓN]\nProducto donde vive: [NOMBRE + DESCRIPCIÓN BREVE]\nPersona o usuario objetivo: [NOMBRE DE LA PERSONA + NECESIDAD PRINCIPAL]\nObjetivo del usuario (job-to-be-done): [QUÉ TAREA QUIERE COMPLETAR]\nEquipo de desarrollo: [TAMAÑO + VELOCIDAD EN STORY POINTS POR SPRINT, O \"desconocida\"]\nFecha límite (si existe): [FECHA O \"sin restricción\"]\n\n## BACKBONE (actividades principales)\n[Las 5-8 actividades principales del usuario para lograr su objetivo]\n1. [Actividad]\n2. [Actividad]\n...\n\n## USER STORY MAP COMPLETO\nPara cada actividad:\n\n### Actividad [N]: [NOMBRE]\n**Tasks del usuario** (pasos concretos que el usuario da dentro de esta actividad):\n- [Task]\n- [Task]\n\n**User stories por task:**\n| Story | Como... | Quiero... | Para... | Criterios de aceptación | Estimación (XS/S/M/L/XL) | Release |\n|-------|---------|-----------|---------|------------------------|--------------------------|---------|\n| US-01 | ... | ... | ... | ... | S | MVP |\n\n## SLICING — RELEASES\n\n### MVP (Release 1) — [Qué funcionalidad mínima entrega valor real]\n[Lista de US del MVP con justificación de por qué cada una es imprescindible]\nTotal estimado: [story points aprox]\n\n### Release 2 — [Qué añade sobre el MVP]\n[Lista de US]\n\n### Backlog futuro — [Nice to have]\n[Lista de US postergadas con razón]\n\n## DEFINICIÓN DE DONE\n[Checklist estándar que toda US debe cumplir para considerarse terminada]\n\n## RIESGOS DEL EPIC\n[3-5 riesgos técnicos o de negocio que podrían bloquear el delivery]\n\n## DEPENDENCIAS\n[Otras features, APIs externas, equipos o decisiones que deben resolverse antes]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 25,
                'use_case' => 'Sesiones de story mapping con el equipo, planificación de PI (SAFe) o breakdown de un epic grande antes del sprint.',
                'vote_score' => 312,
            ],
            [
                'profession' => 'product-management',
                'title' => 'OKRs trimestrales con métricas e iniciativas',
                'description' => 'Define OKRs (Objectives & Key Results) trimestrales para producto o empresa con objetivos ambiciosos, key results medibles, iniciativas asociadas y proceso de check-in.',
                'prompt_content' => "Eres un OKR Coach y Head of Product con experiencia implementando OKRs en startups de alto crecimiento y equipos de producto.\n\nDefine los OKRs para:\n\nNIVEL: [EMPRESA / ÁREA DE PRODUCTO / SQUAD]\nÁrea: [PRODUCTO / GROWTH / ENGINEERING / DISEÑO / OTRO]\nPeríodo: [Q1 / Q2 / Q3 / Q4] de [AÑO]\nEstrategia anual o norte estrella: [EN QUÉ ESTÁ ENFOCADA LA EMPRESA ESTE AÑO]\nResultados del trimestre anterior: [LOGROS Y FALLOS PRINCIPALES — O \"primer trimestre\"]\nContexto del negocio actual: [STAGE: seed / growth / escala / otro]\nRecursos disponibles: [EQUIPO Y PRESUPUESTO APROXIMADO]\nRestricciones o compromisos inamovibles: [LAUNCHES, EVENTOS, DEADLINES]\n\n## OKRs PROPUESTOS\n\n[Para cada Objective — máximo 3-4 por nivel:]\n\n### OBJECTIVE [N]: [Nombre inspirador — debe ser cualitativo, ambicioso y memorable]\n**Por qué este objetivo:** [Vínculo con la estrategia anual]\n**Propietario:** [Rol]\n\n**Key Result 1:** [Métrica específica y medible]\n- Baseline actual: [NÚMERO]\n- Target Q[X]: [NÚMERO]\n- Cómo se mide: [FUENTE DE DATOS]\n- Frecuencia de check-in: [SEMANAL / QUINCENAL]\n\n**Key Result 2:** [Métrica]\n- Baseline: [NÚMERO]\n- Target: [NÚMERO]\n- Cómo se mide: [FUENTE]\n\n**Key Result 3:** [Métrica]\n- Baseline: [NÚMERO]\n- Target: [NÚMERO]\n- Cómo se mide: [FUENTE]\n\n**Iniciativas asociadas a este Objective:**\n| Iniciativa | Responsible | Deadline | Impacto en KRs |\n|-----------|-------------|----------|----------------|\n| ... | ... | ... | KR1, KR2 |\n\n## ANÁLISIS DE TENSIONES\n[¿Algún KR puede ir en contra de otro? ¿Velocidad vs. calidad? — identifica y resuelve]\n\n## CADENCIA DE SEGUIMIENTO\n- Check-in semanal: [Qué revisar, formato, duración]\n- Mid-quarter review (semana 6): [Cómo ajustar sin perder el norte]\n- End-of-quarter scoring: [Criterios de puntuación 0.0 a 1.0]\n\n## RED FLAGS\n[Señales de que los OKRs necesitan ser revisados o el trimestre está en riesgo]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 25,
                'use_case' => 'Definir el trimestre con claridad, alinear al equipo y crear accountability sobre los resultados más importantes.',
                'vote_score' => 356,
            ],
            [
                'profession' => 'product-management',
                'title' => 'Análisis de competencia de producto digital',
                'description' => 'Analiza y compara hasta 5 competidores directos de tu producto en profundidad: features, pricing, posicionamiento, fortalezas, debilidades y oportunidades de diferenciación.',
                'prompt_content' => "Eres un Senior Product Manager con experiencia en competitive intelligence, positioning y estrategia de producto en mercados competitivos.\n\nRealiza el análisis competitivo de producto para:\n\nMI PRODUCTO: [NOMBRE + DESCRIPCIÓN]\nMi usuario objetivo (ICP): [PERFIL]\nMi diferenciación actual: [O \"sin diferenciación clara\"]\nCompetidores a analizar:\n- C1: [NOMBRE + URL]\n- C2: [NOMBRE + URL]\n- C3: [NOMBRE + URL]\n- C4: [NOMBRE + URL — opcional]\n- C5: [NOMBRE + URL — opcional]\n\nINFORMACIÓN DISPONIBLE SOBRE ELLOS (pega lo que tengas: pricing pages, feature lists, reviews de G2/Capterra, app store reviews, demos vistas):\n[PEGA AQUÍ]\n\n## FEATURE COMPARISON MATRIX\n| Feature | Mi producto | C1 | C2 | C3 | Importancia para el ICP |\n|---------|------------|----|----|----|--------------------------|\n| [Feature core] | ✓/✗/~ | ... | ... | ... | Alta/Media/Baja |\n\n## ANÁLISIS POR COMPETIDOR\nPara cada competidor:\n\n### [NOMBRE]\n**Posicionamiento:** [Cómo se definen a sí mismos, tagline, claim principal]\n**ICP principal:** [A quién realmente van]\n**Pricing:** [Modelo + rangos]\n**Fortalezas del producto:** [Top 3]\n**Debilidades del producto:** [Top 3 — basado en reviews y señales]\n**Crecimiento percibido:** [Creciendo / Estable / Declinando + señales]\n**Por qué usuarios se van de ellos hacia nosotros (o viceversa):**\n\n## POSITIONING MAP\n[Posiciona cada producto en 2 ejes relevantes para este mercado]\nEje X: [Dimensión 1 — EJ: Precio bajo ↔ Precio alto]\nEje Y: [Dimensión 2 — EJ: Simple ↔ Completo]\n\n## OPORTUNIDADES DE DIFERENCIACIÓN\n[3-5 espacios donde podríamos ganar que ningún competidor ocupa bien]\n\n## AMENAZAS COMPETITIVAS\n[2-3 movimientos de competidores que podrían afectarnos en los próximos 6 meses]\n\n## RECOMENDACIONES DE PRODUCTO\n[Features o mejoras que deberíamos priorizar basados en los gaps identificados]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 25,
                'use_case' => 'Preparar reviews de estrategia de producto, definir roadmap basado en gaps competitivos, o preparar pitch deck para inversores.',
                'vote_score' => 298,
            ],

            // ─────────────────────────────────────────────────────────────
            // RRHH (3)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'rrhh',
                'title' => 'Guía de entrevista conductual con método STAR',
                'description' => 'Genera un kit de entrevista estructurada por competencias con preguntas STAR, rubrica de evaluación por nivel y guía para minimizar sesgos inconscientes en la selección.',
                'prompt_content' => "Eres un Talent Acquisition Specialist y psicólogo organizacional con experiencia en entrevistas estructuradas basadas en competencias y reducción de sesgos de selección.\n\nCrea la guía de entrevista para:\n\nROL: [TÍTULO DEL PUESTO]\nNivel: [JUNIOR / SEMI / SENIOR / MANAGER]\nCompetencias core del rol (las 4-6 más críticas): [LISTA]\nValores de empresa a evaluar: [1-3]\nDuración de la entrevista: [45 / 60 / 90 minutos]\nQuién entrevista: [RRHH / HIRING MANAGER / PANEL]\n\n## ESTRUCTURA DE LA ENTREVISTA\n\n### Apertura (5 min)\n[Script de bienvenida, explicación del formato, permiso para tomar notas]\n\n### PREGUNTAS POR COMPETENCIA\nPara cada competencia:\n\n**Competencia: [NOMBRE]**\n_Definición para este rol:_ [Qué significa esta competencia en la práctica diaria del puesto]\n\n**Pregunta STAR principal:**\n_\"Cuéntame de una situación en la que...\"_ [Pregunta abierta que obliga a dar un ejemplo real]\n\n**Follow-up questions:**\n1. [Ahonda en Situación/Tarea — si no fue claro]\n2. [Ahonda en Acción — qué hizo específicamente]\n3. [Ahonda en Resultado — qué pasó, qué aprendió]\n4. [Pregunta de profundidad — saca a los mejores candidatos]\n\n**Señales positivas:** [Qué respuesta indica alta competencia]\n**Señales de alerta:** [Qué respuesta indica baja competencia o candidato no apto]\n**Rubrica:** [Escala 1-4 con descripción de cada nivel]\n\n### PREGUNTAS DE VALORES\n[2-3 preguntas conductuales para evaluar fit cultural y valores]\n\n### Espacio para preguntas del candidato (10 min)\n\n### Cierre (3 min)\n[Script de próximos pasos, timeline de decisión]\n\n## GUÍA ANTI-SESGO\n[10 sesgos más comunes en entrevistas y cómo evitarlos]\n- Halo effect, horns effect, similar-to-me, confirmation bias...\n\n## SCORECARD DE EVALUACIÓN\n[Template para calificar al candidato y comparar objetivamente entre evaluadores]\n\n## DEBRIEF DE PANEL\n[Proceso para tomar la decisión de contratación de forma estructurada]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Estandarizar el proceso de entrevistas, reducir contrataciones erróneas y evaluar candidatos de forma consistente y justa.',
                'vote_score' => 312,
            ],
            [
                'profession' => 'rrhh',
                'title' => 'Estructura de compensación y bandas salariales',
                'description' => 'Diseña una estructura de compensación competitiva con bandas salariales por nivel y rol, política de revisión salarial, componentes variables y estrategia de total rewards.',
                'prompt_content' => "Eres un Compensation & Benefits Specialist con experiencia diseñando estructuras de compensación competitivas para startups y empresas en crecimiento.\n\nDiseña la estructura de compensación para:\n\nEMPRESA: [NOMBRE + SECTOR]\nEtapa: [PRE-SEED / SEED / SERIES A-B / GROWTH / CORPORATIVO]\nNúmero de empleados actuales: [NÚMERO]\nPaíses donde opera: [LISTA]\nPhilosophy de compensación deseada: [EJ: percentil 50 / 65 / 75 del mercado]\nRoles a estructurar: [LISTA DE TÍTULOS]\nIncluir equity/stock options: [SÍ / NO]\nPresupuesto de nómina total estimado: [RANGO O \"a calcular\"]\n\n## FILOSOFÍA DE COMPENSACIÓN\n[Declaración de 1 párrafo sobre cómo la empresa piensa sobre la compensación — sirve para comunicar a candidatos y empleados]\n\n## FRAMEWORK DE NIVELES\n[Definición de cada nivel de seniority — criterios de impacto, autonomía, scope]\n| Nivel | Título genérico | Descripción | Experiencia típica |\n|-------|----------------|-------------|--------------------|\n| IC1 | Junior | ... | 0-2 años |\n| IC2 | Mid | ... | ... |\n| IC3 | Senior | ... | ... |\n| IC4 | Staff | ... | ... |\n| M1 | Manager | ... | ... |\n| M2 | Director | ... | ... |\n\n## BANDAS SALARIALES\n[Para cada combinación rol × nivel]\n| Rol | Nivel | Mínimo | Midpoint | Máximo | Percentil mercado |\n|-----|-------|--------|----------|--------|-------------------|\n| [ROL] | IC2 | \$X | \$Y | \$Z | P60 |\n\n_Fuentes de mercado sugeridas para validar: Glassdoor, Levels.fyi, Radford, Comptryx_\n\n## POLÍTICA DE REVISIÓN SALARIAL\n- Frecuencia: [ANUAL / SEMESTRAL]\n- Criterios para aumento: [Desempeño, inflación, market adjustment]\n- Rangos típicos de aumento: [% por rating de performance]\n- Proceso de aprobación\n\n## COMPONENTE VARIABLE\n[Estructura de bonos, comisiones o profit sharing si aplica]\n\n## EQUITY (si aplica)\n[Rango de opciones por nivel, vesting schedule, cliff, refresh grants]\n\n## TOTAL REWARDS STATEMENT\n[Template para comunicar a empleados el valor total de su compensación]",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 30,
                'use_case' => 'Profesionalizar la compensación para atraer y retener talento, reducir inequidades internas y comunicar valor total a empleados.',
                'vote_score' => 278,
            ],
            [
                'profession' => 'rrhh',
                'title' => 'Plan de capacitación y desarrollo de equipo',
                'description' => 'Diseña un plan de learning & development trimestral para un equipo, con detección de brechas de skills, matriz de competencias, rutas de aprendizaje personalizadas y métricas de impacto.',
                'prompt_content' => "Eres un Learning & Development Manager con experiencia diseñando programas de capacitación efectivos que impactan directamente en el desempeño del negocio.\n\nCrea el plan de L&D para:\n\nEQUIPO: [ÁREA + NÚMERO DE PERSONAS]\nRoles en el equipo: [LISTA DE TÍTULOS]\nObjetivos de negocio del equipo este trimestre: [3-5 objetivos]\nBrechas de skills detectadas o sospechadas: [LISTA — O \"no identificadas, sugerir proceso\"]\nPresupuesto de capacitación: [MONTO O \"a definir\"]\nTiempo disponible para aprendizaje: [HORAS/SEMANA POR PERSONA]\nModalidades preferidas: [PRESENCIAL / ONLINE / BLENDED / COACHING / MENTORING]\nHerramienta de LMS si tienen: [NOMBRE O \"ninguna\"]\n\n## DIAGNÓSTICO DE NECESIDADES\n[Proceso de detección de brechas si no están identificadas]\n- Encuesta de autoevaluación de skills (template con 20 competencias del área)\n- 1:1 de necesidades con cada persona (preguntas sugeridas)\n- Análisis de performance reviews anteriores\n\n## MATRIZ DE COMPETENCIAS\n[Grid equipo × competencias con nivel actual recomendado y nivel target]\n\n| Competencia | [Persona 1] | [Persona 2] | Prioridad |\n|-------------|-------------|-------------|----------|\n| [Skill] | Actual/Target | ... | Alta |\n\n## RUTAS DE APRENDIZAJE\nPara cada brecha prioritaria:\n\n### [COMPETENCIA A DESARROLLAR]\n**Para nivel:** [TODOS / SENIORS / JUNIORS]\n**Recurso 1 (fundamento):** [Curso, libro, certificación con link genérico + duración + costo]\n**Recurso 2 (práctica):** [Proyecto interno / challenge / shadowing]\n**Recurso 3 (consolidación):** [Mentoring, presentación interna, aplicación en proyecto real]\n**Tiempo estimado:** [HORAS TOTALES]\n\n## CALENDARIO TRIMESTRAL\n[Timeline de actividades de L&D para el trimestre — por semana o por mes]\n\n## MÉTRICAS DE IMPACTO\n| Métrica | Cómo medir | Baseline | Target trimestre |\n|---------|-----------|----------|------------------|\n| Skill level improvement | Autoevaluación | ... | +1 nivel |\n| Aplicación en proyectos | Manager review | ... | ... |\n| NPS del programa | Encuesta | ... | >7 |\n\n## PRESUPUESTO DETALLADO\n[Desglose de inversión por persona y actividad]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 25,
                'use_case' => 'Planificar el crecimiento de skills del equipo alineado a objetivos de negocio, con presupuesto justificado y métricas reales.',
                'vote_score' => 245,
            ],

            // ─────────────────────────────────────────────────────────────
            // FINANZAS (3)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'finanzas',
                'title' => 'Proyecciones financieras P&L a 12 meses',
                'description' => 'Construye un modelo de proyecciones de ingresos, costos y rentabilidad a 12 meses con escenarios pesimista/base/optimista, análisis de punto de equilibrio y supuestos documentados.',
                'prompt_content' => "Eres un CFO Fractional con experiencia construyendo modelos financieros para startups y pymes en etapas de validación, crecimiento y fundraising.\n\nConstruye las proyecciones financieras para:\n\nMODELO DE NEGOCIO: [CÓMO GENERA DINERO]\nIngresos actuales mensuales: [MONTO O \"pre-revenue\"]\nCosto de ventas (COGS) %: [PORCENTAJE O \"estimar\"]\nGastos fijos mensuales actuales: [LISTA CON MONTOS: nómina, oficina, herramientas, etc.]\nGastos variables (% de ingresos): [LISTA]\nPlan de crecimiento / hipótesis de crecimiento: [EJ: crecer 15% MoM / agregar 5 clientes nuevos/mes]\nInversiones planeadas: [EJ: contratar 2 personas en Q2, abrir nueva ubicación en Q3]\nMoneda: [USD / MXN / EUR]\n\n## MODELO DE PROYECCIONES — 12 MESES\n\n### Supuestos Documentados\n[Lista de todos los supuestos del modelo — qué asumes sobre crecimiento, churn, precios, costos]\n\n### Tabla P&L Mensual\n| Concepto | M1 | M2 | M3 | M4 | M5 | M6 | M7 | M8 | M9 | M10 | M11 | M12 |\n|----------|----|----|----|----|----|----|----|----|----|----|-----|-----|\n| Ingresos | | | | | | | | | | | | |\n| COGS | | | | | | | | | | | | |\n| **Gross Profit** | | | | | | | | | | | | |\n| Gross Margin % | | | | | | | | | | | | |\n| Gastos operativos | | | | | | | | | | | | |\n| **EBITDA** | | | | | | | | | | | | |\n| EBITDA % | | | | | | | | | | | | |\n| **Net Income** | | | | | | | | | | | | |\n\n### Flujo de Caja Simplificado\n[Posición de caja mes a mes — cuándo hay riesgo de quedarse sin caja]\n\n### Análisis de Punto de Equilibrio\n- Break-even mensual: \$X en ingresos\n- Mes proyectado de break-even: [MES]\n\n### Escenarios\n| KPI | Pesimista | Base | Optimista |\n|-----|-----------|------|----------|\n| Ingresos M12 | | | |\n| Caja disponible M12 | | | |\n| Runway | | | |\n\n## ANÁLISIS DE SENSIBILIDAD\n[Qué variables tienen más impacto en el resultado — si cambia X en Y%, el resultado cambia Z%]\n\n## ALERTAS TEMPRANAS\n[Métricas a monitorear mensualmente para detectar si el modelo está fallando]",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 30,
                'use_case' => 'Preparar proyecciones para inversores, planificación presupuestaria anual o toma de decisiones de contratación e inversión.',
                'vote_score' => 334,
            ],
            [
                'profession' => 'finanzas',
                'title' => 'Dashboard de KPIs financieros para reporte ejecutivo',
                'description' => 'Define el set de KPIs financieros más relevantes para el reporting mensual a CEO/Board, con fórmulas, fuentes de datos, benchmarks de industria e interpretación ejecutiva.',
                'prompt_content' => "Eres un Controller y Business Intelligence Manager con experiencia diseñando dashboards ejecutivos y reportes financieros que impulsan decisiones.\n\nDiseña el dashboard de KPIs financieros para:\n\nTIPO DE EMPRESA: [SAAS / ECOMMERCE / SERVICIOS / RETAIL / MANUFACTURA]\nEtapa: [STARTUP / PYME / CORPORATIVO]\nAudiencia del reporte: [CEO / BOARD / INVERSORES / CFO / TODOS]\nFrecuencia del reporte: [MENSUAL / SEMANAL]\nHerramienta de visualización: [Excel / Google Sheets / Power BI / Looker / Tableau / otra]\nMoneda: [USD / EUR / MXN]\nDatos disponibles actualmente: [LISTA DE FUENTES: QuickBooks, Stripe, CRM, etc.]\n\n## KPIs RECOMENDADOS POR CATEGORÍA\n\nPara cada KPI:\n\n### [NOMBRE DEL KPI]\n**Fórmula exacta:** [cálculo paso a paso]\n**Fuente de datos:** [dónde obtener cada dato]\n**Frecuencia de actualización:** [diaria / semanal / mensual]\n**Benchmark:** [qué es bueno para este tipo de empresa]\n**Interpretación:** [qué significa cuando sube / cuando baja]\n**Semáforo:** Verde si X, Amarillo si Y, Rojo si Z\n\nCategorías a cubrir:\n\n### Rentabilidad\n- Gross Margin %, EBITDA %, Net Margin %, Operating Leverage\n\n### Liquidez y Caja\n- Runway (meses), Cash Burn, Operating Cash Flow, DSO\n\n### Crecimiento\n- MoM Revenue Growth, ARR (si SaaS), YoY comparison\n\n### Eficiencia Operativa\n- CAC, LTV, LTV:CAC, Payback Period (si aplica al modelo)\n- Revenue per Employee\n\n### Riesgo\n- Concentration risk (% de revenue del top 3 clientes), Churn Rate\n\n## ESTRUCTURA DEL REPORTE EJECUTIVO\n[Layout del dashboard — qué va en el header, qué gráficas, qué tabla]\n\n## NARRATIVE PARA EL BOARD\n[Template de los 3-5 párrafos ejecutivos que acompañan los números]\n\n## PROCESO DE CIERRE MENSUAL\n[Checklist de pasos para preparar el reporte en menos de 2 días hábiles]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Crear o mejorar el reporting financiero ejecutivo para comunicar claridad, confianza y control a inversores y directivos.',
                'vote_score' => 267,
            ],
            [
                'profession' => 'finanzas',
                'title' => 'Análisis de viabilidad de inversión o proyecto',
                'description' => 'Evalúa la viabilidad financiera de una inversión o proyecto con cálculo de ROI, VPN (NPV), TIR (IRR), payback period y análisis de riesgo para una decisión informada.',
                'prompt_content' => "Eres un analista de inversiones y CFO con experiencia evaluando proyectos de capital, expansiones, adquisiciones y nuevas líneas de negocio.\n\nEvalúa la viabilidad de:\n\nTIPO DE INVERSIÓN: [NUEVA LÍNEA DE NEGOCIO / EXPANSIÓN / ADQUISICIÓN / CAPEX / PROYECTO TECNOLÓGICO / OTRO]\nDescripción del proyecto: [QUÉ SE HARÍA]\nInversión inicial requerida: [MONTO]\nCostos adicionales en el tiempo: [EJ: \$X/mes durante Y meses, o detalles]\nIngresos o ahorros proyectados: [DETALLE: cuándo empiezan, cuánto, durante cuánto tiempo]\nTasa de descuento o costo de capital: [% O \"sugerir\"]\nHorizonte de evaluación: [NÚMERO DE AÑOS]\nMoneda: [USD / MXN / EUR]\nAlternativas consideradas: [QUÉ MÁS SE PODRÍA HACER CON ESE CAPITAL]\n\n## FLUJO DE CAJA DEL PROYECTO\n[Tabla año a año de inversión, ingresos/ahorros, costos y flujo neto]\n\n| Año | Inversión | Ingresos/Ahorros | Costos operativos | Flujo Neto | Flujo Acumulado |\n|-----|-----------|------------------|-------------------|------------|------------------|\n| 0 | (\$X) | — | — | (\$X) | (\$X) |\n| 1 | — | \$Y | \$Z | \$A | \$B |\n...\n\n## MÉTRICAS DE VIABILIDAD\n\n| Métrica | Valor | Interpretación | ¿Viable? |\n|---------|-------|----------------|----------|\n| ROI | X% | ... | Sí/No/Depende |\n| Payback Period | X meses | ... | ... |\n| VPN (NPV) | \$X | Si >0, crea valor | ... |\n| TIR (IRR) | X% | Si > costo capital, viable | ... |\n| Índice de Rentabilidad | X | Si >1, viable | ... |\n\n## ANÁLISIS DE SENSIBILIDAD\n[¿Qué tan robusta es la decisión si cambian las variables clave?]\n\n| Variable | -20% | Base | +20% | Impacto en VPN |\n|----------|------|------|------|----------------|\n| Ingresos | \$X | \$Y | \$Z | Alto |\n\n## ANÁLISIS DE RIESGO\n[Top 5 riesgos con probabilidad e impacto]\n\n## RECOMENDACIÓN EJECUTIVA\n[SÍ INVERTIR / NO INVERTIR / CONDICIONAL — con justificación clara en 3-4 oraciones]\n\n## CONDICIONES PARA PROCEDER\n[Qué debe ser verdad para que la inversión tenga sentido]",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 25,
                'use_case' => 'Justificar o rechazar inversiones con datos, comparar proyectos alternativos y presentar la lógica financiera a directivos o inversores.',
                'vote_score' => 298,
            ],

            // ─────────────────────────────────────────────────────────────
            // LEGAL (3)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'legal',
                'title' => 'Política de privacidad y términos de servicio',
                'description' => 'Genera una política de privacidad y términos de servicio completos para productos digitales, adaptados a GDPR, CCPA o regulación latinoamericana según el mercado objetivo.',
                'prompt_content' => "Eres un abogado especializado en derecho digital, protección de datos y regulación de productos tecnológicos.\n\n⚠️ AVISO IMPORTANTE: Este documento es un punto de partida. Para productos que manejan datos sensibles, pagos, salud, menores de edad o que operan en múltiples jurisdicciones, es indispensable la revisión por un abogado licenciado.\n\nGenera la Política de Privacidad y Términos de Servicio para:\n\nPRODUCTO/SERVICIO: [NOMBRE + DESCRIPCIÓN]\nTipo de producto: [APP MÓVIL / WEB APP / SaaS / ECOMMERCE / OTRO]\nDatos que recopilas: [LISTA: email, nombre, pago, ubicación, comportamiento en app, etc.]\nDatos de menores: [SÍ / NO]\nMercados donde opera: [UNIÓN EUROPEA (GDPR) / EEUU (CCPA) / LATINOAMÉRICA / GLOBAL]\nUso de cookies: [SÍ — qué tipos / NO]\nIntegraciones de terceros: [Analytics, pagos, publicidad — LISTA]\nResponsable de datos: [NOMBRE EMPRESA + PAÍS + EMAIL DE CONTACTO]\n\n## POLÍTICA DE PRIVACIDAD\n\n### 1. Introducción y Responsable del Tratamiento\n### 2. Datos que Recopilamos y Por Qué\n[Para cada tipo de dato: nombre del dato / base legal / finalidad / período de retención]\n### 3. Cómo Usamos tus Datos\n### 4. Con Quién Compartimos tus Datos\n[Terceros, procesadores, transferencias internacionales]\n### 5. Cookies y Tecnologías de Seguimiento\n### 6. Tus Derechos\n[Acceso, rectificación, supresión, portabilidad, oposición — adaptado a la jurisdicción]\n### 7. Seguridad de los Datos\n### 8. Cambios en esta Política\n### 9. Contacto\n\n## TÉRMINOS Y CONDICIONES DE USO\n\n### 1. Aceptación de los Términos\n### 2. Descripción del Servicio\n### 3. Registro y Cuenta\n### 4. Uso Aceptable y Prohibiciones\n### 5. Propiedad Intelectual\n### 6. Contenido del Usuario (si aplica)\n### 7. Pagos y Facturación (si aplica)\n### 8. Limitación de Responsabilidad\n### 9. Modificaciones al Servicio\n### 10. Terminación\n### 11. Ley Aplicable y Resolución de Disputas\n### 12. Contacto\n\n## BANNER DE COOKIES\n[Texto del banner de consentimiento de cookies si aplica GDPR/ePrivacy]",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 25,
                'use_case' => 'Lanzar un producto digital con documentación legal básica, cumplir con requisitos de app stores o protegerse ante disputas de usuarios.',
                'vote_score' => 389,
            ],
            [
                'profession' => 'legal',
                'title' => 'Revisión de contrato comercial con mapa de riesgos',
                'description' => 'Analiza un contrato comercial identificando cláusulas problemáticas, desequilibrios de poder, riesgos ocultos y sugiere redacciones alternativas más equilibradas.',
                'prompt_content' => "Eres un abogado corporativo especializado en contratos comerciales, con experiencia en negociación y análisis de riesgo contractual para empresas.\n\n⚠️ AVISO: Esta revisión es orientativa. Para contratos de alto valor o con implicaciones regulatorias complejas, contrata a un abogado en tu jurisdicción.\n\nRevisa el siguiente contrato:\n\nTIPO DE CONTRATO: [EJ: contrato de servicios, SLA con proveedor, acuerdo de distribución, contrato de software]\nTU ROL EN EL CONTRATO: [PROVEEDOR / CLIENTE / DISTRIBUIDOR / OTRO]\nValor del contrato: [MONTO O \"no especificado\"]\nDuración: [PERÍODO]\nJurisdicción declarada: [PAÍS/ESTADO]\n\nCONTRATO A REVISAR:\n[PEGA AQUÍ EL TEXTO COMPLETO DEL CONTRATO]\n\n## RESUMEN EJECUTIVO\n[¿Es este contrato razonablemente equilibrado? ¿Cuál es el nivel de riesgo global? — 3-5 oraciones]\n\n## ANÁLISIS POR SECCIÓN\n[Para cada cláusula relevante revisada:]\n\n**Cláusula [N] — [Nombre]**\n- Texto original: [extracto]\n- Interpretación: [qué significa en la práctica]\n- Riesgo: ALTO / MEDIO / BAJO\n- Problema: [qué puede salir mal con esta redacción]\n- Redacción alternativa propuesta:\n  ```\n  [Nueva redacción más equilibrada]\n  ```\n\n## MAPA DE RIESGOS\n| Categoría de Riesgo | Cláusula | Severidad | Probabilidad |\n|---------------------|----------|-----------|---------------|\n| Riesgo financiero | ... | Alta | Media |\n| Riesgo operativo | ... | ... | ... |\n| Riesgo legal/regulatorio | ... | ... | ... |\n| Riesgo de reputación | ... | ... | ... |\n\n## CLÁUSULAS FALTANTES\n[Cláusulas que deberían estar y no están: SLA, propiedad intelectual, confidencialidad, limitación de daños, etc.]\n\n## TÉRMINOS NEGOCIABLES vs. ESTÁNDAR\n[Qué puedes intentar negociar y qué es boilerplate no negociable]\n\n## PRÓXIMOS PASOS ANTES DE FIRMAR\n[Acciones concretas recomendadas: qué revisar, qué pedir cambiar, cuándo escalar a abogado]",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Primera revisión de contratos antes de involucrar a un abogado, negociación de contratos de proveedores/clientes, formación de equipos no legales.',
                'vote_score' => 423,
            ],
            [
                'profession' => 'legal',
                'title' => 'Acuerdo de nivel de servicio (SLA) para productos digitales',
                'description' => 'Redacta un SLA completo para productos digitales o servicios B2B con definición de métricas de disponibilidad, tiempos de respuesta a incidentes, penalizaciones y proceso de reporte.',
                'prompt_content' => "Eres un abogado tecnológico y consultor de contratos de servicios digitales con experiencia en SLAs para SaaS, infraestructura cloud y servicios gestionados.\n\n⚠️ AVISO: Revisa con asesor legal antes de usar en contratos de alto valor.\n\nRedacta el SLA para:\n\nSERVICIO: [DESCRIPCIÓN DEL PRODUCTO O SERVICIO DIGITAL]\nProveedor: [NOMBRE + PAÍS]\nCliente tipo: [EMPRESA / CONSUMIDOR FINAL]\nNivel de criticidad del servicio para el cliente: [MISIÓN CRÍTICA / ALTO / MEDIO / BAJO]\nHorario de soporte ofrecido: [24/7 / L-V 9-18h / otro]\nInfraestructura en: [AWS / GCP / AZURE / ON-PREMISE / OTRO]\nPrecio/tier del servicio: [BÁSICO / PROFESIONAL / ENTERPRISE — o monto]\n\n## DEFINICIONES\n[Glosario de términos técnicos del SLA: downtime, uptime, incidente, mantenimiento programado, fuerza mayor, etc.]\n\n## COMPROMISOS DE DISPONIBILIDAD\n| Métrica | Compromiso | Cómo se mide | Período de medición |\n|---------|-----------|-------------|--------------------|\n| Uptime | 99.9% | [herramienta] | Mensual |\n| Latencia P95 | <Xms | [herramienta] | ... |\n| RTO (Recovery Time Objective) | X horas | ... | Por incidente |\n| RPO (Recovery Point Objective) | X horas | ... | Por incidente |\n\n## CLASIFICACIÓN Y TIEMPOS DE RESPUESTA A INCIDENTES\n| Severidad | Definición | Tiempo de respuesta | Tiempo de resolución | Comunicación |\n|-----------|-----------|---------------------|---------------------|---------------|\n| Crítico (P1) | Servicio caído para todos | 15 min | 4 horas | Cada 30 min |\n| Alto (P2) | ... | 1 hora | ... | ... |\n| Medio (P3) | ... | 4 horas | ... | ... |\n| Bajo (P4) | ... | 24 horas | ... | ... |\n\n## CRÉDITOS POR INCUMPLIMIENTO\n| Uptime mensual | Crédito sobre factura mensual |\n|----------------|-------------------------------|\n| 99.0% – 99.9% | 10% |\n| 95.0% – 99.0% | 25% |\n| <95.0% | 50% |\n\n## EXCLUSIONES DEL SLA\n[Qué no cuenta como downtime imputable al proveedor]\n\n## PROCESO DE RECLAMACIÓN DE CRÉDITOS\n[Cómo el cliente reporta y reclama incumplimientos]\n\n## MANTENIMIENTO PROGRAMADO\n[Notificación previa, ventanas permitidas, impacto en cálculo de uptime]\n\n## SOPORTE\n[Canales, horarios, escalación, tiempos de respuesta por canal]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Formalizar compromisos de disponibilidad con clientes enterprise, negociar SLAs con proveedores de cloud, o crear el SLA estándar de un producto SaaS.',
                'vote_score' => 312,
            ],

            // ─────────────────────────────────────────────────────────────
            // CUSTOMER SUPPORT (3)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'customer-support',
                'title' => 'Análisis de NPS y feedback con plan de acción',
                'description' => 'Procesa resultados de encuesta NPS y comentarios cualitativos para extraer insights segmentados por perfil, identificar drivers de promotores y detractores, y generar un plan de mejora priorizado.',
                'prompt_content' => "Eres un Customer Experience Analyst con experiencia en metodología Net Promoter Score, análisis de voz del cliente y programas de CX en empresas B2B y B2C.\n\nAnaliza los siguientes resultados de NPS:\n\nPRODUCTO/SERVICIO: [NOMBRE]\nPeríodo de la encuesta: [FECHAS]\nTotal de respuestas: [NÚMERO]\nScore NPS actual: [NÚMERO O \"calcular con los datos\"]\nNPS anterior (si existe): [NÚMERO O \"primera medición\"]\nSegmentos de clientes: [EJ: plan básico / pro / enterprise — o \"no segmentado\"]\n\nDATOS DE NPS (pega aquí):\n[FORMATO: Score (0-10), Segmento, Comentario abierto]\n[Puedes pegar el CSV o texto plano con los datos]\n\n## RESULTADOS GENERALES\n- NPS calculado: [Fórmula: % Promotores - % Detractores]\n- % Promotores (9-10): X%\n- % Pasivos (7-8): X%\n- % Detractores (0-6): X%\n- Comparación vs. período anterior: [+/- puntos]\n- Benchmark de industria: [referencia]\n\n## ANÁLISIS POR SEGMENTO\n[NPS desglosado por plan, industria, antigüedad u otro segmento disponible]\n\n## DRIVERS DE PROMOTORES\n[Temas más mencionados por usuarios con score 9-10]\n- Tema 1: [Frecuencia + citas textuales representativas]\n- Tema 2: ...\n\n## DRIVERS DE DETRACTORES\n[Temas más mencionados por usuarios con score 0-6]\n- Tema 1: [Frecuencia + citas + patrón de segmento si existe]\n- Tema 2: ...\n\n## INSIGHTS ACCIONABLES\n[Los hallazgos más sorprendentes o no obvios del análisis]\n\n## PLAN DE ACCIÓN PRIORIZADO\n| Acción | Segmento objetivo | Impacto esperado en NPS | Esfuerzo | Responsible | Deadline |\n|--------|------------------|-------------------------|----------|-------------|----------|\n\n## CASOS DE RIESGO (detractores a contactar)\n[Criterios para identificar los detractores que merecen outreach personalizado]\n\n## PRÓXIMA MEDICIÓN\n[Cambios recomendados para la metodología y fecha sugerida del próximo NPS]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Análisis post-encuesta NPS para compartir con equipo de producto, soporte y liderazgo con insights claros y plan de mejora.',
                'vote_score' => 289,
            ],
            [
                'profession' => 'customer-support',
                'title' => 'Script de upsell y cross-sell empático en soporte',
                'description' => 'Genera scripts para que agentes de soporte identifiquen oportunidades de upsell/cross-sell de forma natural y empática, sin presión, convirtiendo tickets de soporte en revenue.',
                'prompt_content' => "Eres un Customer Success Manager con experiencia en revenue expansion, upsell strategies y entrenamiento de equipos de soporte que también venden sin ser invasivos.\n\nCrea los scripts de upsell/cross-sell para:\n\nPRODUCTO/SERVICIO PRINCIPAL: [DESCRIPCIÓN]\nPlan/producto al que hacer upsell: [DESCRIPCIÓN + PRECIO]\nProducto complementario (cross-sell): [DESCRIPCIÓN + PRECIO]\nPerfil del cliente en soporte: [QUÉ TIPOS DE TICKETS RECIBEN HABITUALMENTE]\nMomento actual: [CLIENTE NUEVO / MID-CONTRACT / RENOVACIÓN / POST-INCIDENTE]\nTono del equipo de soporte: [FORMAL / CERCANO]\n\n## CUÁNDO ES APROPIADO HACER UPSELL EN SOPORTE\n[Señales claras de que hay oportunidad + situaciones donde NUNCA hacerlo]\n\n## SCRIPTS POR ESCENARIO\n\n### Escenario 1: Cliente alcanzó límite de plan\n_Señal: \"Estoy llegando al límite de X\"_\n[Script de respuesta al problema + transición natural a upsell + respuesta a objeción de precio]\n\n### Escenario 2: Cliente pide feature del plan superior\n_Señal: \"¿Puedo hacer X?\" — donde X es del plan Pro_\n[Script de respuesta + oferta de upgrade + CTA suave]\n\n### Escenario 3: Cliente tiene un dolor que el producto complementario resuelve\n_Señal: el cliente describe un problema que el cross-sell soluciona_\n[Script que valida el dolor + introduce el producto + no presiona]\n\n### Escenario 4: Ticket resuelto satisfactoriamente — ventana de satisfacción\n_Momento: justo después de resolver el problema con éxito_\n[Script de cierre del ticket + transición orgánica a expansión]\n\n### Escenario 5: Cliente en renovación próxima\n_Señal: interacción cercana a fecha de renovación_\n[Script que valida valor recibido + ofrece upgrade en la renovación]\n\n## FRASES QUE ABREN LA CONVERSACIÓN (no cierran la venta)\n[10 frases de transición que suenan naturales, no a script de ventas]\n\n## MANEJO DE \"No me interesa ahora\"\n[Cómo cerrar la conversación de expansión sin que el cliente se sienta presionado]\n\n## MÉTRICAS DE ÉXITO\n[Cómo medir expansion revenue desde soporte sin crear incentivos que perjudiquen el CX]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Entrenar equipos de soporte para generar expansion revenue sin comprometer la experiencia del cliente ni la confianza.',
                'vote_score' => 267,
            ],
            [
                'profession' => 'customer-support',
                'title' => 'Proceso de escalación y gestión de SLAs de soporte',
                'description' => 'Define un proceso completo de escalación de tickets con niveles de soporte, criterios de escalación, SLAs por severidad, roles y responsabilidades, y métricas de equipo.',
                'prompt_content' => "Eres un Support Operations Manager con experiencia diseñando procesos de soporte escalables para empresas SaaS y tecnológicas.\n\nDiseña el proceso de escalación para:\n\nEMPRESA/PRODUCTO: [NOMBRE]\nVolumen actual de tickets: [TICKETS/DÍA O MES]\nTamaño del equipo de soporte: [NÚMERO DE AGENTES]\nTipos de clientes: [B2B ENTERPRISE / B2C / MIXTO]\nHerramienta de ticketing: [Zendesk / Freshdesk / Intercom / otro]\nHorario de soporte: [24/7 / Horario de negocio + zona horaria]\nÁreas técnicas de soporte disponibles: [EJ: L1 Agentes / L2 Técnicos / L3 Engineering]\n\n## CLASIFICACIÓN DE TICKETS\n[Definición operativa de cada nivel de severidad con ejemplos reales]\n\n| Severidad | Definición | Ejemplos concretos |\n|-----------|-----------|--------------------|\n| P1 — Crítico | Impacto total en el negocio del cliente | ... |\n| P2 — Alto | Funcionalidad core degradada | ... |\n| P3 — Medio | Feature secundaria no funciona | ... |\n| P4 — Bajo | Pregunta, mejora, cosmético | ... |\n\n## SLAs POR SEVERIDAD Y TIPO DE CLIENTE\n| Severidad | Cliente Enterprise | Cliente Pro | Cliente Free |\n|-----------|-------------------|-------------|---------------|\n| P1 | FRT: 15 min | FRT: 1 hora | FRT: 4 horas |\n| P2 | ... | ... | ... |\n\n_FRT = First Response Time / RT = Resolution Time_\n\n## PROCESO DE ESCALACIÓN\n\n### Nivel 1 → Nivel 2\n**Cuándo escalar:** [Criterios objetivos]\n**Cómo escalar:** [Pasos exactos en la herramienta]\n**Información que debe incluir el handoff:** [Checklist]\n**Tiempo máximo en L1 antes de escalar:** [Minutos/horas]\n\n### Nivel 2 → Nivel 3 (Engineering)\n[Mismo formato]\n\n### Escalación a Management (VP/C-Level)\n[Criterios para involucrar liderazgo — solo para crisis]\n\n## COMUNICACIÓN CON EL CLIENTE DURANTE ESCALACIÓN\n[Templates de mensajes en cada transición para que el cliente siempre sepa qué pasa]\n\n## ROLES Y RESPONSABILIDADES\n| Rol | En un P1 | En un P2 | En un P4 |\n|-----|----------|----------|----------|\n| Agente L1 | ... | ... | ... |\n| Team Lead | ... | ... | ... |\n\n## KPIs DEL EQUIPO\n[Métricas a monitorear semanalmente: FCR, CSAT, AHT, SLA compliance por tier]\n\n## GESTIÓN POST-INCIDENTE (P1)\n[Proceso de root cause analysis y comunicación proactiva al cliente]",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Estructurar o profesionalizar el proceso de soporte técnico cuando el equipo escala o se incorporan clientes enterprise con SLAs contractuales.',
                'vote_score' => 245,
            ],

            // ─────────────────────────────────────────────────────────────
            // FREELANCERS (3)
            // ─────────────────────────────────────────────────────────────
            [
                'profession' => 'freelancers',
                'title' => 'Propuesta ganadora para Upwork, Toptal o LinkedIn',
                'description' => 'Redacta una propuesta de proyecto personalizada y persuasiva para plataformas freelance o LinkedIn que demuestra comprensión del problema, diferenciación y genera respuesta del cliente.',
                'prompt_content' => "Eres un coach de negocios freelance con experiencia ayudando a independientes a conseguir proyectos de alto valor en plataformas como Upwork, Toptal, Malt, LinkedIn y referencias directas.\n\nCrea la propuesta para:\n\nPLATAFORMA: [UPWORK / TOPTAL / LINKEDIN / EMAIL DIRECTO / OTRA]\nTU ESPECIALIDAD: [EJ: diseño UX para SaaS / desarrollo backend Node.js / consultoría de marketing]\nANUNCIO DEL CLIENTE (pega el texto completo):\n[PEGA AQUÍ LA DESCRIPCIÓN DEL PROYECTO O JOB POST]\nTU EXPERIENCIA RELEVANTE: [2-3 proyectos o logros concretos relacionados]\nTu tarifa: [HORA O PROYECTO]\nDisponibilidad: [INMEDIATA / en X días]\n\n## PROPUESTA COMPLETA\n\n### Hook (primera línea — la más importante)\n[Captura la atención en 1-2 oraciones. NO empieces con \"Hola, soy [nombre] y tengo X años de experiencia\"]\nEjemplo de buen hook: _\"He reducido el tiempo de carga de 3 apps SaaS similares a la tuya en más de 60% — aquí te cuento cómo haría lo mismo para [nombre de su empresa]\"_\n\n### Demostración de comprensión del problema\n[Muestra que leíste y entiendes el problema REAL, no solo las palabras del anuncio]\n\n### Solución propuesta (específica, no genérica)\n[Tu enfoque concreto para este proyecto — qué harías, cómo, en qué orden]\n\n### Prueba de capacidad\n[1-2 ejemplos concretos de trabajo similar con resultados medibles]\n\n### Proceso de trabajo\n[Cómo sería trabajar contigo: comunicación, entregables, revisiones, plazos]\n\n### CTA claro\n[Propuesta de próximo paso específico — no \"espero tu respuesta\"]\n\n## VARIANTES POR CONTEXTO\n- Propuesta corta para Upwork (máx 150 palabras): [versión comprimida]\n- Mensaje de LinkedIn (máx 300 caracteres): [versión ultra-corta]\n- Email en frío (si es contacto directo): [versión formal]\n\n## LO QUE NO DEBES ESCRIBIR\n[Frases genéricas y errores comunes que matan las propuestas freelance]",
                'tool_name' => 'Claude',
                'difficulty' => 'beginner',
                'estimated_minutes' => 15,
                'use_case' => 'Mejorar el win rate en propuestas de proyectos freelance diferenciándose de los cientos de aplicaciones genéricas.',
                'vote_score' => 389,
            ],
            [
                'profession' => 'freelancers',
                'title' => 'Sistema de onboarding profesional para nuevos clientes',
                'description' => 'Crea un proceso de onboarding de nuevos clientes freelance con cuestionario de discovery, primer email de bienvenida, kick-off meeting agenda y portal de proyecto organizado.',
                'prompt_content' => "Eres un business coach para freelancers y consultores con experiencia en operaciones, experiencia del cliente y sistemas de trabajo que escalan sin añadir horas.\n\nCrea el sistema de onboarding para:\n\nTIPO DE SERVICIO FREELANCE: [DISEÑO / DESARROLLO / CONSULTORÍA / MARKETING / OTRO]\nDuración típica de tus proyectos: [SEMANAS / MESES]\nHerramientas que usas: [Notion / Trello / Asana / ClickUp / Slack / Email / otro]\nPrecio promedio por proyecto: [MONTO]\nPuntos de fricción actuales con nuevos clientes: [QUÉ SUELE SALIR MAL O SER CONFUSO]\n\n## CUESTIONARIO DE DISCOVERY (pre-kick-off)\n[Formulario de 10-15 preguntas que el cliente completa antes de la reunión inicial]\n- Preguntas sobre el proyecto, objetivos, audiencia, restricciones técnicas, referencias, aprobadores, plazos y éxito definido\n- Herramienta sugerida para enviar: [Typeform / Notion form / Google Form]\n\n## EMAIL DE BIENVENIDA (se envía al firmar el contrato)\n[Plantilla completa con: bienvenida cálida, qué esperar, próximos pasos con fechas, qué necesitas del cliente, cómo contactarte]\n\n## AGENDA DE KICK-OFF MEETING (60 minutos)\n| Tiempo | Tema | Responsable | Objetivo |\n|--------|------|-------------|----------|\n| 0-5 min | Bienvenida y agenda | Freelancer | ... |\n| 5-20 min | Revisión del brief y aclaraciones | Ambos | Alinear expectativas |\n...\n\n## PORTAL DE PROYECTO\n[Estructura del workspace compartido — qué carpetas/secciones crear]\n- 📋 Brief y objetivos\n- 📁 Activos del cliente (logos, brand, accesos)\n- 🔄 Estado del proyecto (in progress / en revisión / completado)\n- 💬 Feedback y revisiones\n- 📄 Entregables finales\n- 💰 Facturas y pagos\n\n## PROCESO DE FEEDBACK Y REVISIONES\n[Cómo presentar el trabajo, cuántas rondas de revisión incluye, cómo documentar cambios aprobados]\n\n## CLOSING Y OFFBOARDING\n[Proceso de entrega final, solicitud de testimonial, referidos y seguimiento post-proyecto]\n\n## AUTOMATIZACIONES RECOMENDADAS\n[Qué automatizar con Zapier/Make para que el sistema funcione casi solo]",
                'tool_name' => 'Claude',
                'difficulty' => 'beginner',
                'estimated_minutes' => 15,
                'use_case' => 'Profesionalizar la relación con clientes desde el día uno, reducir confusión y malentendidos, y entregar una experiencia que genera recomendaciones.',
                'vote_score' => 334,
            ],
            [
                'profession' => 'freelancers',
                'title' => 'Informe de progreso semanal profesional para clientes',
                'description' => 'Genera plantillas de informes de progreso semanales que demuestran valor, mantienen al cliente informado sin reuniones innecesarias y refuerzan la confianza a lo largo del proyecto.',
                'prompt_content' => "Eres un project manager freelance con experiencia en comunicación efectiva con clientes, gestión de expectativas y creación de confianza a distancia.\n\nCrea el sistema de reporte para:\n\nTIPO DE PROYECTO: [DISEÑO / DESARROLLO / CONSULTORÍA / MARKETING / OTRO]\nDuración del proyecto: [SEMANAS / MESES]\nFrecuencia de reporte acordada: [SEMANAL / QUINCENAL]\nCliente: [STARTUP / PYME / CORPORATE — nivel de detalle técnico que entienden]\nHerramienta de entrega del reporte: [EMAIL / NOTION / SLACK / PDF]\nPrincipales preocupaciones del cliente en proyectos similares: [EJ: no saber el avance real, cambios de alcance, retrasos]\n\n## TEMPLATE SEMANA ESTÁNDAR (sin problemas)\n\n**Asunto:** Actualización Semanal — [Nombre del Proyecto] — Semana [N]\n\n[Estructura del reporte:]\n\n### ✅ Esta semana completamos\n[Lista concreta de logros — con output tangible, no actividades abstractas]\n\n### 📅 La semana que viene\n[Plan específico — 3-5 items con descripción y fecha]\n\n### 🔴 Necesito de ti\n[Decisiones, aprobaciones, activos o información que bloquean el avance — con deadline]\n\n### 📊 Estado general del proyecto\n[Semáforo: Verde / Amarillo / Rojo + una línea de contexto]\n\n### 📈 Métricas (si aplica)\n[Números concretos: páginas diseñadas, endpoints desarrollados, keywords posicionadas, etc.]\n\n## TEMPLATE SEMANA COMPLICADA (hay un problema)\n[Cómo comunicar un retraso, bug grave o cambio de alcance con honestidad sin generar pánico]\n\n## TEMPLATE SEMANA DE ENTREGA\n[Cuando presentas el entregable principal — cómo contextualizar, pedir feedback y definir próximos pasos]\n\n## TEMPLATE FIN DE PROYECTO\n[Cierre formal: resumen de lo entregado, métricas finales, agradecimiento, solicitud de testimonial/referido]\n\n## REGLAS DE ORO DEL REPORTE\n[10 principios para que los reportes generen confianza y no ansiedad en el cliente]",
                'tool_name' => 'Claude',
                'difficulty' => 'beginner',
                'estimated_minutes' => 10,
                'use_case' => 'Mantener clientes informados con mínimo tiempo invertido, prevenir micromanagement y construir reputación de profesional organizado.',
                'vote_score' => 312,
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
