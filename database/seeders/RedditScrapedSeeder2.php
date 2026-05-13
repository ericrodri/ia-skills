<?php

namespace Database\Seeders;

use App\Models\Profession;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class RedditScrapedSeeder2 extends Seeder
{
    public function run(): void
    {
        $admin = User::first();

        $skills = [

            // ── MARKETING ────────────────────────────────────────────────
            [
                'profession' => 'marketing',
                'title' => 'Generador de landing page de alta conversión (con copy completo)',
                'description' => 'Genera el copy completo de una landing page: headline, subheadline, beneficios, objeciones, testimonios y CTA. Basado en los patrones de las páginas con mayor conversión según comunidades de CRO en Reddit.',
                'prompt_content' => "Actúa como un copywriter de respuesta directa especializado en landing pages con más de 200 páginas publicadas y miles de tests A/B analizados.\n\nProducto/Servicio: [NOMBRE Y DESCRIPCIÓN DETALLADA]\nAudiencia objetivo: [DESCRIPCIÓN DEL ICP]\nPrincipal competidor: [NOMBRE]\nPropuesta de valor única: [QUÉ TE HACE DIFERENTE]\nPrecio: [PRECIO Y MODELO]\nObjetivo de la landing: [CAPTURAR LEADS / VENDER DIRECTO / REGISTRAR TRIAL]\n\nGenera el copy completo de la landing page en este orden:\n\n## HERO SECTION\n- Headline principal (máx. 8 palabras, promesa específica y medible)\n- Subheadline (25-30 palabras, amplía el headline con contexto y credibilidad)\n- 3 bullet points de beneficio (formato: [Resultado] + [Cómo] + [Tiempo])\n- CTA principal (texto del botón + microcopy debajo del botón)\n\n## SOCIAL PROOF (above the fold)\n- Frase de prueba social con número concreto\n- 3 logos de clientes o medios (placeholder)\n\n## SECCIÓN DE PROBLEMA\n- El dolor en palabras del cliente (usa lenguaje coloquial, no corporativo)\n- Las consecuencias de no resolverlo\n- La situación antes vs. después\n\n## SECCIÓN DE SOLUCIÓN\n- Cómo funciona (3 pasos simples)\n- Las 5 funcionalidades/beneficios más importantes (con icono placeholder y descripción 2 líneas)\n\n## PRUEBA SOCIAL PROFUNDA\n- 3 testimonios completos (nombre, cargo, empresa, foto placeholder, cita de 3-4 frases con resultado específico)\n- 1 caso de estudio en formato: Empresa → Problema → Solución → Resultado medible\n\n## OBJECIONES\n- Las 5 objeciones más comunes respondidas en formato pregunta-respuesta (FAQ)\n\n## PRICING\n- Copy que presenta el precio como inversión, no como gasto\n- Garantía si la hay\n\n## CTA FINAL\n- Headline de cierre urgente\n- CTA repetido con texto diferente al del hero\n- Risk reversal (qué pierden si NO actúan ahora)\n\nTono: directo, beneficio-céntrico, sin jerga corporativa. Cada sección debe fluir hacia la siguiente.",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 25,
                'use_case' => 'Al lanzar un nuevo producto, feature o campaña que necesita una landing page desde cero o para rediseñar una landing con bajo CVR.',
                'vote_score' => 489,
            ],
            [
                'profession' => 'marketing',
                'title' => 'Lanzamiento en Product Hunt: headline, primer comentario y estrategia',
                'description' => 'Genera todo lo necesario para un lanzamiento exitoso en Product Hunt: copy del listing, primer comentario del founder y plan de activación el día del lanzamiento.',
                'prompt_content' => "Eres un experto en lanzamientos de Product Hunt con 15+ productos lanzados, varios en el top 5 del día.\n\nProducto a lanzar:\n- Nombre: [NOMBRE DEL PRODUCTO]\n- Tagline actual (si tienes): [TAGLINE O 'ninguno']\n- Descripción breve: [QUÉ HACE EN 2-3 FRASES]\n- Audiencia objetivo: [QUIÉN LO USA]\n- Problema que resuelve: [PAIN POINT PRINCIPAL]\n- Diferenciador clave vs. alternativas: [QUÉ LO HACE ÚNICO]\n- Precio: [MODELO DE PRECIOS]\n- Oferta especial para PH (si tienes): [DESCUENTO / DEAL ESPECIAL]\n- Fundador: [NOMBRE + BACKGROUND BREVE]\n\nGenera el kit completo de lanzamiento:\n\n## 1. LISTING DE PRODUCT HUNT\n\n**Nombre:** [máx. 60 chars]\n**Tagline:** [máx. 60 chars — debe ser específico, evitar buzzwords como 'revolucionario' o 'AI-powered']\n**Descripción larga:** [260 chars — primera frase = gancho, resto = beneficio + prueba social]\n**Topics/Tags:** [5 tags relevantes]\n\n## 2. PRIMER COMENTARIO DEL FOUNDER\n[El comentario más importante. 150-200 palabras. Estructura: historia personal → problema → cómo nació el producto → qué pueden esperar los usuarios → oferta para la comunidad PH → pregunta que invite a comentar]\n\n## 3. GALERÍA DE SCREENSHOTS (guión)\nDescripción de las 5 imágenes ideales para el listing, en orden de impacto:\nSlide 1: [qué mostrar y qué copy poner encima]\n...\n\n## 4. PLAN DE ACTIVACIÓN (el día del lanzamiento)\n- A qué hora lanzar (PST) y por qué\n- Secuencia de emails/mensajes para activar supporters: plantilla de 3 mensajes\n- Canales a activar y en qué orden\n- Cómo responder a cada comentario para mantener el momentum\n\n## 5. RESPUESTAS A PREGUNTAS FRECUENTES\n5 respuestas preparadas para las preguntas más comunes en PH sobre este tipo de producto",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'La semana antes de un lanzamiento en Product Hunt para maximizar las posibilidades de llegar al top 5 del día.',
                'vote_score' => 412,
            ],
            [
                'profession' => 'marketing',
                'title' => 'Convertidor de podcast/vídeo en contenido multicanal',
                'description' => 'Transforma una transcripción de podcast o vídeo en blog post, newsletter, hilo de Twitter, LinkedIn post y clips de vídeo — todo en un solo prompt.',
                'prompt_content' => "Eres un content strategist especializado en repurposing de contenido de audio y vídeo.\n\nTranscripción del contenido:\n---\n[PEGA LA TRANSCRIPCIÓN COMPLETA O UN RESUMEN DETALLADO DEL EPISODIO]\n---\n\nDatos del contenido original:\n- Formato: [PODCAST / VÍDEO / WEBINAR / ENTREVISTA]\n- Duración: [MINUTOS]\n- Tema principal: [TEMA]\n- Puntos clave tratados: [LISTA]\n- Invitado (si hay): [NOMBRE + CARGO]\n- Audiencia del programa: [DESCRIPCIÓN]\n\nConvierte este contenido en:\n\n## 1. BLOG POST SEO (800-1200 palabras)\n- Título SEO-optimizado (incluye keyword principal)\n- Introducción con gancho (no empieces con 'En este artículo')\n- Desarrollo con H2 y H3 bien estructurados\n- Las 3-5 ideas más accionables del episodio\n- Conclusión con CTA para escuchar el episodio completo\n- Meta description (155 chars)\n\n## 2. NEWSLETTER (300-400 palabras)\n- Subject line + preview text\n- Saludo personalizado\n- Resumen de 3 ideas con 1 párrafo cada una\n- Tu opinión/contexto editorial (1 párrafo en primera persona)\n- CTA al episodio completo\n\n## 3. HILO DE X/TWITTER (10-12 tweets)\n- Tweet 1: gancho irresistible\n- Tweets 2-10: una idea accionable por tweet\n- Tweet final: CTA + link\n\n## 4. LINKEDIN POST (800-1000 caracteres)\n- Primera línea que detenga el scroll\n- 3-5 insights clave en formato lista\n- Pregunta final para generar comentarios\n\n## 5. 5 CLIPS PARA REDES (guión de texto)\nLos 5 momentos más citables del episodio, con:\n- Cita exacta (o paráfrasis del momento más potente)\n- Contexto para el caption de Instagram/TikTok\n- Hook sugerido para los primeros 3 segundos del vídeo clip",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Después de grabar un podcast o webinar para distribuir el contenido en todos los canales sin crear desde cero.',
                'vote_score' => 378,
            ],

            // ── DESARROLLO ────────────────────────────────────────────────
            [
                'profession' => 'desarrollo',
                'title' => 'Optimizador de queries SQL lentas con plan de ejecución',
                'description' => 'Analiza queries SQL lentas, interpreta el plan de ejecución y genera versiones optimizadas con índices, rewrites y estrategias de caché. Viral en r/SQL y r/devops.',
                'prompt_content' => "Actúa como un DBA (Database Administrator) senior especializado en optimización de performance con experiencia en PostgreSQL, MySQL y sistemas de alto tráfico.\n\nQuery problemática:\n```sql\n[PEGA LA QUERY LENTA]\n```\n\nContexto:\n- Base de datos: [PostgreSQL / MySQL / MariaDB / SQLite]\n- Versión: [VERSION]\n- Tamaño de la tabla principal: [Nº DE FILAS APROXIMADO]\n- Frecuencia de ejecución: [Nº VECES POR SEGUNDO/MINUTO]\n- Tiempo actual de ejecución: [MS O SEGUNDOS]\n- EXPLAIN / EXPLAIN ANALYZE output (si tienes):\n```\n[PEGA EL OUTPUT DEL EXPLAIN O ESCRIBE 'no disponible']\n```\n- Índices existentes en las tablas relevantes:\n```\n[LISTA LOS ÍNDICES O ESCRIBE 'desconocido']\n```\n\nRealiza el análisis completo:\n\n## DIAGNÓSTICO\n- Cuello de botella identificado (seq scan, nested loop, sort sin índice, etc.)\n- Por qué está tardando: explicación técnica y en lenguaje simple\n- Estimación de mejora posible (10x, 100x, etc.)\n\n## ÍNDICES RECOMENDADOS\nPara cada índice sugerido:\n```sql\n-- Justificación de este índice\nCREATE INDEX CONCURRENTLY idx_nombre ON tabla(columnas);\n```\n\n## QUERY OPTIMIZADA\n```sql\n-- Versión mejorada con comentarios inline explicando cada cambio\n[QUERY REESCRITA]\n```\n\n## ALTERNATIVAS (si aplica)\n- Versión con CTE vs. subquery vs. JOIN: cuál es más rápida y por qué\n- ¿Se puede materializar con una vista? ¿O cachear a nivel de aplicación?\n- Estrategia de particionado si la tabla seguirá creciendo\n\n## VERIFICACIÓN\nCómo confirmar que la optimización funcionó:\n```sql\nEXPLAIN (ANALYZE, BUFFERS, FORMAT TEXT) [QUERY OPTIMIZADA];\n```\nQué métricas mirar en el output\n\n## MONITORIZACIÓN CONTINUA\n3 queries de sistema para detectar queries lentas automáticamente",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 15,
                'use_case' => 'Cuando una query empieza a dar problemas en producción, en optimizaciones de performance o cuando el DBA no está disponible.',
                'vote_score' => 534,
            ],
            [
                'profession' => 'desarrollo',
                'title' => 'Generador de pipeline CI/CD completo para cualquier stack',
                'description' => 'Genera configuraciones de CI/CD completas y listas para producción para GitHub Actions, GitLab CI o CircleCI según tu stack tecnológico.',
                'prompt_content' => "Actúa como un DevOps engineer senior con experiencia en pipelines de CI/CD para equipos de 5 a 500 developers.\n\nStack del proyecto:\n- Lenguaje/Framework: [Node.js+Express / Python+Django / Laravel / Rails / Go / etc.]\n- Base de datos: [PostgreSQL / MySQL / MongoDB / Redis]\n- Plataforma CI/CD: [GitHub Actions / GitLab CI / CircleCI / Bitbucket Pipelines]\n- Destino de deploy: [AWS ECS / Fly.io / Railway / DigitalOcean / Heroku / VPS con SSH]\n- Container: [Docker: SÍ / NO]\n- Registry: [Docker Hub / GHCR / ECR / ninguno]\n- Entornos: [staging + production / solo production]\n- Tests disponibles: [unit / integration / e2e / ninguno]\n\nGenera el pipeline completo:\n\n## ARCHIVO DE CONFIGURACIÓN PRINCIPAL\n```yaml\n# [nombre del archivo según plataforma]\n# Pipeline completo con comentarios explicando cada sección\n[YAML COMPLETO]\n```\n\nEl pipeline debe incluir:\n1. **Trigger:** push a main, PRs, tags de versión\n2. **Lint & Format:** validación de estilo de código\n3. **Tests:** con cache de dependencias, matriz de versiones si aplica\n4. **Security scan:** dependencias vulnerables (Trivy, Snyk o equivalente gratuito)\n5. **Build:** compilación o build de Docker con caché de capas\n6. **Push a registry:** solo en rama main o tags\n7. **Deploy a staging:** automático en merge a main\n8. **Tests de smoke post-deploy:** verificación mínima de que la app responde\n9. **Deploy a production:** manual con aprobación o automático en tag\n10. **Notificación:** Slack/Discord en success y failure\n\n## SECRETS NECESARIOS\nLista de todos los secrets a configurar en la plataforma CI/CD con descripción de cada uno\n\n## DOCKERFILE OPTIMIZADO\n```dockerfile\n# Multi-stage build para imagen final mínima\n[DOCKERFILE COMPLETO]\n```\n\n## ESTRATEGIA DE CACHE\nQué cachear, cómo y por qué para reducir el tiempo del pipeline al máximo\n\n## TIEMPO ESTIMADO DEL PIPELINE\nDesglose por etapa y tiempo total esperado",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Al iniciar un proyecto nuevo, cuando el pipeline existente es lento o cuando migras de plataforma de CI/CD.',
                'vote_score' => 467,
            ],
            [
                'profession' => 'desarrollo',
                'title' => 'Escritor de documentación técnica que los devs realmente leen',
                'description' => 'Genera documentación técnica clara, estructurada y con ejemplos reales para APIs, librerías, SDKs o features internas. Elimina la documentación vaga que nadie usa.',
                'prompt_content' => "Eres un technical writer con experiencia en documentación de APIs y SDKs usados por millones de developers (estilo Stripe, Twilio o Vercel).\n\nQué necesita documentación:\n- Tipo: [API REST / SDK / LIBRERÍA / FEATURE INTERNA / CLI TOOL]\n- Nombre: [NOMBRE]\n- Lenguaje/Plataforma: [LENGUAJE]\n- Audiencia: [DEVELOPERS JUNIOR / SENIOR / MIXTO]\n- Código o descripción a documentar:\n```\n[PEGA EL CÓDIGO, ENDPOINTS O DESCRIPCIÓN]\n```\n\nGenera la documentación completa:\n\n## OVERVIEW (máx. 3 párrafos)\n- Qué hace y para qué sirve (sin tecnicismos innecesarios)\n- Cuándo usarlo vs. cuándo no\n- Prerequisitos y dependencias\n\n## QUICKSTART (< 5 minutos para el primer resultado)\n```bash\n# Instalación\n[COMANDO]\n```\n```[LENGUAJE]\n# Ejemplo mínimo que funciona (hello world del concepto)\n[CÓDIGO COMPLETO Y EJECUTABLE]\n```\n→ Output esperado: [QUÉ VE EL DEVELOPER AL EJECUTARLO]\n\n## GUÍA DE USO COMPLETA\nPara cada función/endpoint/feature principal:\n- Descripción en 1-2 líneas\n- Parámetros con tipos, si es requerido y valor por defecto\n- Ejemplo de uso con código real (no pseudocódigo)\n- Output/Response de ejemplo\n- Errores posibles y cómo manejarlos\n\n## EJEMPLOS AVANZADOS\n3 casos de uso reales con código completo:\n1. Caso básico\n2. Caso con opciones avanzadas\n3. Caso de integración con otro sistema\n\n## ERRORES COMUNES\n5 errores que los developers cometen al integrar esto, con solución para cada uno\n\n## FAQ\n5 preguntas reales de developers con respuestas concretas\n\n## CHANGELOG\nPlantilla para documentar cambios entre versiones",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 15,
                'use_case' => 'Al publicar una API o SDK nuevo, en sprints de deuda técnica o cuando los developers del equipo se quejan de que \"no hay documentación\".',
                'vote_score' => 389,
            ],

            // ── VENTAS ─────────────────────────────────────────────────────
            [
                'profession' => 'ventas',
                'title' => 'Mensajes de LinkedIn para conectar con decisores (sin ser spam)',
                'description' => 'Genera mensajes de LinkedIn personalizados para conectar con VPs, directores y C-level que tienen una tasa de respuesta del 30-40%, sin sonar a bot ni vendedor.',
                'prompt_content' => "Actúa como un SDR de élite con un ratio de respuesta en LinkedIn del 35%+, especializado en outreach a executives sin parecer spam.\n\nContexto del outreach:\n- Tu nombre y empresa: [NOMBRE] de [EMPRESA]\n- Tu producto/servicio en 1 frase: [DESCRIPCIÓN]\n- Prospect objetivo:\n  - Nombre: [NOMBRE]\n  - Cargo: [VP / DIRECTOR / C-LEVEL]\n  - Empresa: [EMPRESA]\n  - Industria: [SECTOR]\n- Qué sabes de ellos (artículo publicado, post de LinkedIn, noticia de la empresa, evento al que van, conexión mutua): [CONTEXTO PERSONALIZADO]\n- Objetivo del mensaje: [CONECTAR / PROPONER CALL / COMPARTIR RECURSO]\n\nGenera 4 variantes de mensaje para test A/B:\n\n**VARIANTE A — Conexión de contenido**\n(Referencia algo que publicaron o hicieron)\n[Mensaje de máx. 300 caracteres — LinkedIn limita las connection requests]\n\n**VARIANTE B — Pregunta de experto**\n(Pide su opinión sobre algo de su industria)\n[Mensaje de máx. 300 caracteres]\n\n**VARIANTE C — Problema compartido**\n(Menciona un desafío que probablemente tienen)\n[Mensaje de máx. 300 caracteres]\n\n**VARIANTE D — Conexión mutua o evento**\n(Referencia algo en común)\n[Mensaje de máx. 300 caracteres]\n\n## FOLLOW-UP (para conexiones que aceptaron pero no respondieron)\n**Mensaje de seguimiento 1 (día 3):** [Mensaje de 500 chars — ya son conexiones]\n**Mensaje de seguimiento 2 (día 10):** [Mensaje de 500 chars — más directo]\n**Breakup message (día 21):** [Mensaje de ruptura que paradójicamente reactiva]\n\n## REGLAS QUE APLICA CADA MENSAJE\n- Nunca empieza con 'Hola [nombre], vi tu perfil y...'\n- Nunca menciona el producto en el primer mensaje\n- Siempre tiene un motivo legítimo para contactar\n- La frase final no es una pregunta sobre si quieren una demo",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 10,
                'use_case' => 'Para outreach frío a prospects en LinkedIn, especialmente a executives difíciles de contactar por email.',
                'vote_score' => 423,
            ],
            [
                'profession' => 'ventas',
                'title' => 'Campaña de win-back para clientes que se fueron a la competencia',
                'description' => 'Genera una campaña completa para recuperar clientes perdidos: análisis de por qué se fueron, secuencia de contacto y argumentario de re-enganche.',
                'prompt_content' => "Actúa como un director de ventas con experiencia en recuperación de cuentas perdidas y revenue expansion.\n\nContexto de la cuenta perdida:\n- Cliente: [TIPO DE EMPRESA / INDUSTRIA]\n- Motivo de churn (si lo sabes): [PRECIO / FEATURE FALTANTE / COMPETIDOR / MAL SERVICIO / otro]\n- Tiempo desde que se fue: [MESES]\n- Competidor al que se fue: [NOMBRE O 'desconocido']\n- MRR que representaba: [CANTIDAD]\n- Contacto que había: [CARGO]\n- Cambios en tu producto desde que se fue: [MEJORAS RELEVANTES O 'ninguna']\n\nGenera la campaña de win-back:\n\n## ANÁLISIS DE TIMING\n¿Es buen momento para contactar? Señales que indican que el cliente podría estar listo para volver.\n\n## SECUENCIA DE WIN-BACK (4 touchpoints)\n\n**Touchpoint 1 — Email de reapertura (semana 1)**\nAsunto: [no mencionar venta]\nBody: reconocimiento honesto + cambio relevante + sin presión\n[Email completo, 120 palabras]\n\n**Touchpoint 2 — LinkedIn (día 10)**\nMensaje breve y personal que no suene a secuencia automatizada\n[Mensaje de 300 chars]\n\n**Touchpoint 3 — Email de valor (semana 3)**\nCompartir algo genuinamente útil (caso de éxito relevante, insight del sector)\n[Email completo, 100 palabras]\n\n**Touchpoint 4 — Email directo (semana 5)**\nPropuesta concreta con condición especial por tiempo limitado\n[Email completo, 150 palabras]\n\n## ARGUMENTARIO DE LA LLAMADA\nSi aceptan hablar:\n- Apertura (cómo abrir sin ponerse a la defensiva)\n- Preguntas para entender qué ha cambiado en su situación\n- Cómo presentar las mejoras del producto sin sonar a pitch\n- Cómo tratar la objeción 'estamos bien con [competidor]'\n- Cómo cerrar: propuesta y siguientes pasos\n\n## OFERTA ESPECIAL DE WIN-BACK\nEstructura de la oferta que maximiza la probabilidad de volver sin destruir el precio",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Cuando revisas la lista de churned customers y detectas cuentas que podrían volver, o cuando un ex-cliente aparece en LinkedIn mirando tu contenido.',
                'vote_score' => 334,
            ],

            // ── PM ─────────────────────────────────────────────────────────
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
                'prompt_content' => "Actúa como un analista de mercado con experiencia en due diligence para fondos de Venture Capital y en elaboración de pitch decks para startups de Series A+.\n\nStartup:\n- Nombre: [NOMBRE]\n- Descripción del producto: [QUÉ HACE Y PARA QUIÉN]\n- Geografía inicial: [PAÍS/REGIÓN]\n- Modelo de negocio: [SAAS / MARKETPLACE / TRANSACCIONAL / etc.]\n- Precio por cliente/transacción: [PRECIO]\n- Industria vertical: [SECTOR]\n- Datos de mercado que conoces (si tienes): [INFORMES, ESTADÍSTICAS O 'ninguno']\n\nGenera el análisis de mercado completo:\n\n## METODOLOGÍA TOP-DOWN (de macro a micro)\n\n**TAM — Total Addressable Market**\n- Tamaño del mercado global de la industria con fuente\n- Cálculo: [número de potenciales clientes globales × precio anual]\n- TAM: $[X]B con justificación\n\n**SAM — Serviceable Addressable Market**\n- Segmento al que realmente puedes llegar con tu modelo de negocio y recursos\n- Filtros aplicados: geografía, idioma, tamaño de empresa, madurez tecnológica\n- SAM: $[X]M con justificación\n\n**SOM — Serviceable Obtainable Market**\n- Lo que realísticamente puedes capturar en 3-5 años\n- Basado en: velocidad de crecimiento del sector, competencia, recursos de go-to-market\n- SOM: $[X]M con justificación\n\n## METODOLOGÍA BOTTOM-UP (validación desde la realidad)\n- Número de clientes potenciales en el mercado objetivo (con fuente)\n- Tasa de penetración realista por año (1-5%)\n- ARPU (annual revenue per user) basado en tu precio\n- Cálculo bottom-up del SOM: [clientes × ARPU]\n- ¿Coincide con el top-down? Si no, ¿por qué?\n\n## NARRATIVA PARA INVERSORES\nPárrafo de 150 palabras que presente el mercado de forma convincente:\n- Empieza con el problema de escala\n- Usa el número más impresionante con contexto\n- Explica por qué AHORA es el momento (viento de cola)\n- Termina con tu participación de mercado objetivo en 5 años\n\n## SLIDE DE MERCADO (estructura recomendada)\nQué poner en cada parte del slide de TAM/SAM/SOM para que sea visualmente claro y creíble\n\n## PREGUNTAS DE INVERSORES (con respuestas preparadas)\n5 preguntas que seguro harán sobre el mercado y cómo responderlas con datos",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 20,
                'use_case' => 'Al preparar un pitch deck para inversores, en fundraising o cuando necesitas justificar el tamaño de la oportunidad ante el board.',
                'vote_score' => 389,
            ],

            // ── RRHH ───────────────────────────────────────────────────────
            [
                'profession' => 'rrhh',
                'title' => 'Comunicación de despido colectivo con empatía y claridad legal',
                'description' => 'Genera el memo interno, la comunicación a los afectados y el FAQ para empleados tras un proceso de reestructuración, equilibrando honestidad, empatía y cumplimiento legal.',
                'prompt_content' => "Actúa como un Chief People Officer con experiencia gestionando reestructuraciones en empresas de 50 a 5000 personas, con historial de hacerlo manteniendo la confianza del equipo y el cumplimiento legal.\n\nContexto de la reestructuración:\n- Empresa: [NOMBRE]\n- Número de personas afectadas: [Nº] de [TOTAL EN PLANTILLA]\n- Departamentos afectados: [LISTA]\n- Motivo real (sé honesto): [RECORTE DE COSTES / PIVOTE ESTRATÉGICO / CIERRE DE ÁREA / etc.]\n- País y ley laboral aplicable: [PAÍS]\n- Compensación ofrecida: [INDEMNIZACIÓN LEGAL / ADICIONAL]\n- Servicios de outplacement: [SÍ / NO]\n- Timing: [CUÁNDO SE COMUNICA Y CUÁNDO ES EFECTIVO]\n\nGenera el paquete de comunicación completo:\n\n## 1. MEMO AL EQUIPO DE LIDERAZGO (antes de comunicar)\nInstrucciones para managers sobre cómo tener la conversación con sus equipos.\nIncluye: qué decir, qué NO decir, cómo responder preguntas difíciles.\n\n## 2. EMAIL/CARTA A PERSONAS AFECTADAS\n[Comunicación individual — honesta, empática, sin eufemismos vacíos]\n- Qué pasó y por qué (explicación directa sin excusas corporativas)\n- Qué significa para ellos específicamente\n- Qué ayuda recibirán (compensación, referencias, outplacement)\n- Próximos pasos concretos con fechas\n- Contacto para preguntas\n\n## 3. COMUNICACIÓN AL EQUIPO QUE SE QUEDA\n[All-hands message o email — dentro de las 2 horas de las conversaciones individuales]\n- Reconocimiento de la dificultad de la noticia\n- Honestidad sobre el por qué\n- Visión de por qué el equipo que queda está bien posicionado\n- Espacio para preguntas\n\n## 4. FAQ PARA EMPLOYEES (los que se quedan)\n10 preguntas que surgirán con respuestas claras:\n- ¿Habrá más despidos?\n- ¿Por qué ellos y no otros?\n- ¿Cómo afecta esto a mi trabajo?\n- etc.\n\n## 5. COMUNICACIÓN EXTERNA (si aplica)\nVersión para LinkedIn / prensa de 100 palabras máximo\n\n## LO QUE NO DEBES HACER\n5 errores comunicativos que destruyen la confianza del equipo que se queda",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 25,
                'use_case' => 'En procesos de reestructuración para gestionar la comunicación con el mínimo daño a la cultura y la máxima claridad legal.',
                'vote_score' => 445,
            ],

            // ── FINANZAS ─────────────────────────────────────────────────
            [
                'profession' => 'finanzas',
                'title' => 'Analizador de term sheet para rondas de inversión',
                'description' => 'Analiza un term sheet de inversión, explica cada cláusula en lenguaje simple, identifica los puntos de negociación y calcula el impacto en la dilución del founder.',
                'prompt_content' => "Actúa como un abogado corporativo especializado en venture capital y un CFO de startup con experiencia en más de 20 rondas de financiación.\n\nTerm sheet a analizar:\n---\n[PEGA EL TERM SHEET COMPLETO O LAS CLÁUSULAS PRINCIPALES]\n---\n\nContexto:\n- Stage de la ronda: [PRE-SEED / SEED / SERIES A / etc.]\n- Importe de la ronda: [CANTIDAD]\n- Valoración pre-money ofrecida: [CANTIDAD]\n- Tu cap table actual (simplificado): [Founders X% / Inversores previos Y% / Pool Z%]\n- ¿Tienes asesor legal propio? [SÍ / NO]\n\nGenera el análisis completo:\n\n## RESUMEN EJECUTIVO\n- Valoración pre-money y post-money\n- Dilución total de los founders\n- Las 3 cláusulas más importantes a negociar\n- Valoración general del deal: ¿es razonable para el mercado actual?\n\n## ANÁLISIS CLÁUSULA POR CLÁUSULA\nPara cada término importante:\n- **Cláusula:** [nombre técnico]\n- **Qué significa en español:** [explicación sin jerga]\n- **Impacto para el founder:** [concreto y cuantificado si es posible]\n- **¿Es estándar?** [SÍ / NO / DEPENDE — con contexto de mercado]\n- **Puntuación founder-friendly:** 🟢 Normal / 🟡 Negociable / 🔴 Red flag\n\nCláusulas a revisar siempre:\nValuation & Dilution | Liquidation preference | Anti-dilution | Pro-rata rights | Board composition | Information rights | Drag-along / Tag-along | Vesting acelerado | No-shop | Exclusivity\n\n## SIMULACIÓN DE DILUCIÓN\nTabla de cap table antes y después de la ronda con escenario de salida:\n- Exit a 1x | 3x | 10x la inversión: ¿cuánto recibe el founder?\n\n## ESTRATEGIA DE NEGOCIACIÓN\n- Top 3 puntos a negociar (ordenados por impacto)\n- Argumentos para cada punto\n- Alternativas de redacción que puedes proponer\n- Qué NO deberías sacrificar bajo ningún concepto\n\n## RED FLAGS\nCláusulas inusuales o agresivas que requieren atención inmediata",
                'tool_name' => 'Claude',
                'difficulty' => 'advanced',
                'estimated_minutes' => 25,
                'use_case' => 'Cuando recibes el primer term sheet de un inversor y necesitas entenderlo antes de hablar con tu abogado o antes de la reunión de negociación.',
                'vote_score' => 512,
            ],

            // ── CUSTOMER SUCCESS ──────────────────────────────────────────
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

            // ── FREELANCERS ───────────────────────────────────────────────
            [
                'profession' => 'freelancers',
                'title' => 'Pitch de posicionamiento freelance: de generalista a especialista',
                'description' => 'Define tu nicho de especialización como freelancer, reescribe tu propuesta de valor y genera el copy para tu web, LinkedIn y propuestas que te permite cobrar 2-3x más.',
                'prompt_content' => "Actúa como un business coach para freelancers especializado en posicionamiento y niching, que ha ayudado a más de 200 profesionales independientes a multiplicar sus tarifas.\n\nTu situación actual:\n- Tu servicio(s): [LISTA LO QUE HACES AHORA]\n- Años de experiencia: [AÑOS]\n- Proyectos más destacados o resultados conseguidos para clientes: [LISTA]\n- Sectores en los que más has trabajado: [LISTA]\n- Tipo de clientes actuales: [DESCRIPCIÓN]\n- Tarifa actual: [CANTIDAD / hora o proyecto]\n- Tarifa objetivo: [CANTIDAD]\n- Lo que más disfrutas hacer: [DESCRIBE]\n- Lo que MENOS disfrutas: [DESCRIBE]\n\nGenera la estrategia de posicionamiento completa:\n\n## ANÁLISIS DE POSICIONAMIENTO ACTUAL\n¿Eres un generalista o un especialista? ¿Qué señal das al mercado ahora mismo?\nProblema de posicionamiento actual en 2-3 frases.\n\n## 3 OPCIONES DE NICHO\nBasándote en tu experiencia y objetivos, 3 especializaciones viables:\nPara cada una:\n- Descripción del nicho\n- ICP (cliente ideal específico)\n- Por qué tienes ventaja aquí vs. otros freelancers\n- Tarifa de mercado para este nicho\n- Cómo de competido está\n- Recomendación: ¿esta opción para ti? SÍ / CON MATICES / NO\n\n## PROPUESTA DE VALOR (para el nicho elegido)\nFórmula: Ayudo a [CLIENTE ESPECÍFICO] a [RESULTADO MEDIBLE] mediante [TU MÉTODO/SERVICIO] sin [PAIN POINT QUE EVITAS]\n\n## COPY PARA TUS CANALES\n\n**Headline web/portfolio:**\n[3 opciones de headline principales]\n\n**Bio de LinkedIn (260 chars del banner + about section completo):**\n[Texto completo]\n\n**Pitch de 30 segundos (elevator pitch verbal):**\n[Texto para decir en persona o en calls]\n\n**Primera línea de tu propuesta comercial:**\n[Frase de apertura que demuestra que entiendes su problema específico]\n\n## PLAN DE TRANSICIÓN\nSi ahora eres generalista, cómo pasar a especialista en 90 días sin perder ingresos:\n- Mes 1: acciones para construir autoridad en el nicho\n- Mes 2: primeros proyectos especializados\n- Mes 3: comunicación del cambio y nueva tarifa",
                'tool_name' => 'Claude',
                'difficulty' => 'intermediate',
                'estimated_minutes' => 20,
                'use_case' => 'Cuando llevas tiempo como freelancer generalista y quieres diferenciarte para cobrar más, o cuando estás empezando y quieres posicionarte bien desde el principio.',
                'vote_score' => 478,
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
                'views_count'       => rand(400, 5000),
                'saves_count'       => rand(40, 500),
                'version'           => 1,
            ]);
            $count++;
        }

        $this->command->info("✅ RedditScrapedSeeder2: {$count} skills importadas desde Reddit/web.");
    }
}
