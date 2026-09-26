<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills638Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'title'         => 'Crear contenido de marketing multilingüe con IA',
                'description'   => 'Genera campañas publicitarias, posts y emails adaptados culturalmente a distintos mercados e idiomas usando Claude.',
                'profession_id' => 1,
                'difficulty'    => 'intermediate',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Crear una campaña de marketing completa en [IDIOMA_DESTINO] para el mercado de [PAÍS_DESTINO] que se sienta auténtica, culturalmente apropiada y persuasiva para los hablantes nativos.

contexto: Eres un experto en marketing internacional con dominio nativo de [IDIOMA_DESTINO] y profundo conocimiento de la cultura de consumo en [PAÍS_DESTINO]. Tu misión es adaptar, no solo traducir, el mensaje de marketing de una marca para que resuene genuinamente con la audiencia local.

instrucción principal: Dado el siguiente briefing del producto o servicio:
- Nombre del producto/servicio: [NOMBRE]
- Propuesta de valor principal: [PROPUESTA]
- Audiencia objetivo: [AUDIENCIA]
- Tono de marca: [TONO: formal, cercano, aspiracional, etc.]
- Mercado origen (idioma base): [IDIOMA_ORIGEN]
- Mercado destino: [PAÍS_DESTINO] ([IDIOMA_DESTINO])

tarea principal: Desarrolla los siguientes materiales de marketing en [IDIOMA_DESTINO]:

1. Análisis cultural previo (200 palabras):
   - Diferencias culturales clave entre el mercado origen y el destino que afectan a la comunicación
   - Valores culturales relevantes que debes incorporar
   - Palabras, expresiones o referencias que debes EVITAR por connotaciones negativas
   - Equivalentes culturales locales que funcionan mejor

2. Adaptación del slogan principal:
   - Versión literal (para referencia)
   - Versión culturalmente adaptada con explicación de por qué funciona mejor
   - 2 alternativas adicionales con sus justificaciones

3. Email de bienvenida para nuevos clientes (300 palabras):
   - Asunto optimizado para la cultura local
   - Cuerpo del email con tono apropiado para el mercado
   - CTA adaptado culturalmente
   - Postdata con elemento local que genere confianza

4. 5 posts para redes sociales:
   - 2 para Instagram (con sugerencias de elementos visuales culturalmente relevantes)
   - 2 para LinkedIn (tono más profesional si aplica en esa cultura)
   - 1 para la red social más usada localmente si difiere de las anteriores

5. Anuncio de pago por clic (Google Ads):
   - Título 1 (30 caracteres máx.)
   - Título 2 (30 caracteres máx.)
   - Título 3 (30 caracteres máx.)
   - Descripción 1 (90 caracteres máx.)
   - Descripción 2 (90 caracteres máx.)
   - Palabras clave locales sugeridas (10 términos de búsqueda)

6. Fragmentos de página de aterrizaje:
   - Headline principal
   - Subtítulo
   - 3 bullets de beneficios adaptados culturalmente
   - Sección de testimoniales (crea 2 testimoniales ficticios creíbles para esa cultura)
   - CTA final

7. Guía de estilo de comunicación:
   - ¿Tutear o ustedear? ¿Por qué?
   - Nivel de formalidad recomendado
   - Humor: ¿sí o no? ¿De qué tipo?
   - Referencias culturales permitidas (deportes, celebridades, festividades)
   - Formato de fechas, monedas y números para ese mercado

8. Red flags culturales a evitar:
   - Lista de 5 errores comunes que cometen las marcas extranjeras en ese mercado
   - Ejemplo de campaña fallida (real o hipotética) y por qué falló

instrucción final: Asegúrate de que todo el contenido suene como escrito por un nativo, no como una traducción. Si hay términos del producto que no tienen equivalente natural en el idioma destino, indícalo y recomienda cómo manejarlo (anglicismo aceptado, préstamo, explicación, etc.).
EOT,
            ],
            [
                'title'         => 'Generar documentación técnica multilingüe con IA',
                'description'   => 'Traduce y adapta documentación técnica de software, APIs y sistemas a múltiples idiomas manteniendo la precisión técnica.',
                'profession_id' => 2,
                'difficulty'    => 'advanced',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Traducir y adaptar documentación técnica de software al [IDIOMA_DESTINO] manteniendo absoluta precisión técnica, consistencia terminológica y legibilidad para desarrolladores nativos.

contexto: Eres un traductor técnico especializado en software con experiencia como desarrollador. Entiendes que la documentación técnica requiere un equilibrio delicado: debe ser técnicamente exacta, pero también legible y natural para un desarrollador que trabaja en ese idioma.

instrucción inicial: Antes de comenzar la traducción, solicita el siguiente glosario técnico del proyecto (o créalo si no existe):
- Términos propios del sistema que NO se deben traducir
- Términos técnicos estándar con su traducción preferida en el idioma destino
- Convenciones de nomenclatura del proyecto (camelCase, snake_case, etc. se mantienen)

tarea: Dado el siguiente fragmento de documentación técnica en [IDIOMA_ORIGEN]:
[DOCUMENTACION_ORIGINAL]

genera la documentación en [IDIOMA_DESTINO] con estas especificaciones:

1. Principios de traducción técnica aplicados:
   - Los nombres de funciones, métodos, clases y variables NUNCA se traducen
   - Los bloques de código se copian exactamente sin modificar
   - Los comentarios dentro del código SÍ se traducen
   - Los mensajes de error que el usuario final verá SÍ se traducen
   - Las URLs, rutas de archivos y comandos se mantienen en el original

2. Documento traducido completo:
   Incluye:
   - Encabezados y estructura exactamente igual al original
   - Todos los ejemplos de código intactos
   - Notas, advertencias y tips traducidos
   - Tablas de parámetros con tipos y descripciones traducidas
   - Sección de troubleshooting adaptada

3. Glosario de términos utilizados:
   Para cada término técnico clave, indica:
   - Término original en inglés (si aplica)
   - Término usado en la traducción
   - Justificación (por qué esta elección vs. alternativas)
   - Ejemplos de uso en contexto

4. Notas del traductor:
   - Términos donde hubo ambigüedad y cómo se resolvió
   - Términos en inglés que se mantuvieron sin traducir y por qué
   - Adaptaciones culturales necesarias (formatos de fecha, ejemplos locales)
   - Secciones que requieren revisión por un experto nativo

5. Control de calidad:
   - Verifica que todos los fragmentos de código se reprodujeron exactamente
   - Confirma la consistencia terminológica a lo largo del documento
   - Lista de términos que aparecen traducidos de forma diferente (inconsistencias a resolver)

6. Guía de mantenimiento de la documentación:
   - Cómo mantener sincronizadas la versión original y la traducción
   - Proceso recomendado para actualizar cuando cambia la documentación fuente
   - Herramientas de traducción asistida compatibles con este tipo de documentación

contexto adicional sobre tipos de documentación:
- README: mantén el tono técnico pero accesible; los badges y shields se dejan en inglés
- Docstrings/JSDoc: sigue el formato estándar del lenguaje de programación
- Guías de contribución: adapta los ejemplos de mensajes de commit al idioma local si hay convención establecida
- Changelogs: mantén el formato convencional del proyecto (Keep a Changelog, etc.)
- Tutoriales: aquí sí puedes ser más explicativo y añadir contexto cultural si ayuda a la comprensión

instrucción de calidad final: Revisa la traducción completa y puntúa del 1 al 10 en: precisión técnica, fluidez en el idioma destino, y consistencia terminológica. Indica qué mejorarías con más tiempo.
EOT,
            ],
            [
                'title'         => 'Diseñar UX writing para apps de aprendizaje de idiomas',
                'description'   => 'Crea microcopy, mensajes de error, onboarding y textos de interfaz para aplicaciones de enseñanza de lenguas extranjeras.',
                'profession_id' => 3,
                'difficulty'    => 'intermediate',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Crear el sistema completo de UX writing para una aplicación de aprendizaje de idiomas, asegurando que cada texto de la interfaz motive al usuario, sea pedagógicamente correcto y se adapte al nivel del aprendiz.

contexto: Eres un UX writer especializado en aplicaciones educativas de idiomas con experiencia en psicología del aprendizaje. Entiendes que el microcopy en estas apps tiene una doble función: guiar al usuario en la interfaz Y reforzar su aprendizaje del idioma. Cada texto es una oportunidad de enseñanza.

instrucción: Diseña el sistema de UX writing para la siguiente aplicación:
- Idioma que enseña la app: [IDIOMA_QUE_SE_APRENDE]
- Idioma de la interfaz: [IDIOMA_DE_LA_INTERFAZ]
- Niveles de usuario: Principiante (A1-A2), Intermedio (B1-B2), Avanzado (C1-C2)
- Tono de la app: [TONO: gamificado y divertido / académico y serio / conversacional y amigable]
- Nombre de la app: [NOMBRE_APP]

tarea principal: Desarrolla los siguientes elementos:

1. Sistema de mensajes adaptativos por nivel:
   Para cada uno de los 3 niveles (principiante, intermedio, avanzado), escribe versiones de:
   - Mensaje de bienvenida al iniciar sesión
   - Felicitación al completar una lección
   - Mensaje de ánimo tras un error
   - Notificación de racha de estudio (1 día, 7 días, 30 días)
   - Mensaje al completar un nivel completo

2. Onboarding flow (primeras 5 pantallas):
   Para cada pantalla incluye: título, subtítulo, descripción (máx. 2 líneas), texto del botón principal y texto del botón secundario (si aplica).
   - Pantalla 1: Bienvenida y propuesta de valor
   - Pantalla 2: Selección de objetivo (viajes, trabajo, exámenes, hobby)
   - Pantalla 3: Autoevaluación del nivel actual
   - Pantalla 4: Definición del compromiso diario (5, 10, 15, 20 minutos)
   - Pantalla 5: Configuración de recordatorio diario

3. Mensajes de error humanizados:
   - Error de conexión sin internet
   - Respuesta incorrecta (5 variantes para no repetir siempre lo mismo)
   - Respuesta correcta (5 variantes de celebración)
   - Tiempo agotado en ejercicio cronometrado
   - Suscripción caducada (persuasivo pero no agresivo)
   - Error al cargar el audio de pronunciación
   - Respuesta "casi correcta" (error de pronunciación menor)

4. Sistema de gamificación textual:
   - Nombres y descripciones de las 10 insignias principales
   - Textos de desbloqueo de nuevos niveles
   - Mensajes del ranking semanal (posición 1, top 3, top 10, fuera del top 10)
   - Textos de la tienda de la app (si tiene moneda virtual)
   - Nombres creativos para las ligas o grupos de competición

5. Ejercicios con doble función (UX + aprendizaje):
   Diseña 5 tipos de microcopy donde el texto de la interfaz incluye vocabulario del idioma que se aprende, con traducción sutil integrada:
   Ejemplo: "¡Perfecto! En [idioma], 'perfecto' se dice [palabra]. Lo acabas de usar correctamente."

6. Notificaciones push:
   - Recordatorio suave (30 min antes del horario habitual)
   - Recordatorio urgente (si no ha estudiado en 2 días)
   - Celebración de logro
   - Novedad en la app
   - Motivación semanal (7 mensajes distintos, uno por día)

7. Tooltips y textos de ayuda:
   - Explicación del sistema de puntuación
   - Cómo funciona el modo conversación con IA
   - Qué significa cada indicador de progreso
   - Guía del sistema de pronunciación

8. Textos para el módulo de preparación de exámenes:
   Si la app incluye preparación para DELE, IELTS o TOEFL:
   - Introducción a cada tipo de examen
   - Instrucciones de los ejercicios prácticos
   - Mensajes de simulacro completado
   - Análisis de puntuación con recomendaciones

instrucción de calidad: Para cada texto, indica el conteo de caracteres (importante para limitaciones de UI) y señala si algún mensaje podría resultar condescendiente o frustrante para usuarios adultos.
EOT,
            ],
            [
                'title'         => 'Redactar scripts de ventas en idioma extranjero con IA',
                'description'   => 'Crea guiones de ventas, emails de seguimiento y objecciones en el idioma del cliente con fluidez y persuasión culturalmente adaptada.',
                'profession_id' => 4,
                'difficulty'    => 'intermediate',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Crear un sistema completo de scripts de ventas en [IDIOMA_DEL_CLIENTE] que suenen auténticos, persuasivos y culturalmente apropiados, adaptados al estilo de negociación de [PAÍS_CLIENTE].

contexto: Eres un consultor de ventas internacionales con experiencia nativa en [IDIOMA_DEL_CLIENTE] y profundo conocimiento del estilo de negociación en [PAÍS_CLIENTE]. Sabes que vender en otro idioma no es solo traducir palabras: implica adaptar el ritmo, las referencias, el nivel de formalidad y el proceso de toma de decisiones a la cultura local.

instrucción de contexto: Analiza primero las particularidades culturales de ventas en [PAÍS_CLIENTE]:
- Nivel de formalidad esperado en comunicaciones comerciales (de 1 a 5)
- ¿Se valora la relación personal antes del negocio, o se va directo al grano?
- Ciclo de toma de decisiones típico (individual, comité, jerárquico)
- Sensibilidad al precio vs. sensibilidad al valor
- Canales de comunicación preferidos (email, teléfono, WhatsApp, LinkedIn, reunión presencial)

tarea: Genera los siguientes materiales de ventas en [IDIOMA_DEL_CLIENTE]:

1. Secuencia de email en frío (5 emails):
   Email 1: Primer contacto (apertura de relación)
   Email 2: Follow-up con valor añadido (3 días después)
   Email 3: Caso de éxito relevante para su sector (5 días después)
   Email 4: Oferta de demostración o llamada (7 días después)
   Email 5: Cierre de secuencia con puerta abierta (10 días después)
   Para cada email: asunto, cuerpo, CTA y duración estimada de lectura.

2. Script de llamada de descubrimiento (15-20 minutos):
   - Apertura y presentación (30 segundos)
   - Preguntas de diagnóstico (7 preguntas abiertas)
   - Transición a la presentación de la solución
   - Identificación de próximos pasos
   - Cierre de la llamada y agenda del siguiente paso

3. Manejo de objeciones más comunes en [PAÍS_CLIENTE]:
   Para cada objeción, incluye: la objeción típica en ese idioma/cultura, la respuesta empática y la reconducción al cierre.
   - "Es muy caro / no tenemos presupuesto"
   - "Necesito consultarlo con [superior/socio/comité]"
   - "Ahora no es buen momento"
   - "Ya trabajamos con [competidor]"
   - "Necesito más tiempo para pensarlo"
   - Objeción cultural específica de [PAÍS_CLIENTE] (identifícala)

4. Propuesta comercial ejecutiva (estructura):
   - Portada y datos del cliente
   - Resumen ejecutivo (½ página, estilo apropiado para esa cultura)
   - Análisis de la situación actual del cliente
   - Solución propuesta con desglose
   - ROI o valor esperado (con métricas culturalmente relevantes)
   - Inversión y condiciones (cómo presentar el precio en esa cultura)
   - Próximos pasos y timeline
   - Información sobre la empresa (cuánto peso tiene esto en esa cultura)

5. Mensajes de WhatsApp/LinkedIn (según cultura):
   - Primer mensaje de conexión en LinkedIn
   - Follow-up post reunión por WhatsApp (si es el canal apropiado)
   - Mensaje de cierre de negociación
   - Mensaje de felicitación post-firma

6. Guía de negociación cultural:
   - ¿Cómo regatear (o no hacerlo) en [PAÍS_CLIENTE]?
   - Señales de interés genuino vs. educación cultural (el "sí" que significa "tal vez")
   - Cómo interpretar el silencio
   - Regalos y hospitalidad: ¿sí o no, y cómo?
   - Errores típicos de vendedores extranjeros en ese mercado

instrucción de tono: Todo el contenido debe sonar como escrito por un vendedor nativo, no como una traducción. Usa expresiones, muletillas y referencias propias de ese mercado.
EOT,
            ],
            [
                'title'         => 'Diseñar roadmap para producto de aprendizaje de idiomas',
                'description'   => 'Define la estrategia de producto, funcionalidades y métricas para una aplicación o plataforma de enseñanza de lenguas extranjeras con IA.',
                'profession_id' => 5,
                'difficulty'    => 'advanced',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Crear un roadmap completo de producto para una plataforma de aprendizaje de idiomas potenciada por IA, con estrategia, métricas de éxito, priorización de funcionalidades y plan de lanzamiento.

contexto: Eres un Product Manager senior con experiencia en EdTech y aplicaciones de idiomas. Has estudiado en profundidad productos como Duolingo, Babbel, Pimsleur y Rosetta Stone, y entiendes los patrones de retención, los momentos clave en el journey del aprendiz y cómo la IA está transformando la enseñanza de idiomas.

instrucción de contexto del producto:
- Nombre del producto: [NOMBRE]
- Idiomas que enseña: [IDIOMAS]
- Modelo de negocio: [freemium / suscripción / B2B / marketplace de tutores]
- Fase actual: [idea / MVP / beta / product-market fit / crecimiento]
- Diferenciador principal frente a Duolingo: [TU_DIFERENCIADOR]
- Audiencia principal: [adultos trabajadores / estudiantes / viajeros / preparación exámenes]

tarea: Desarrolla el siguiente documento de producto:

1. Análisis de oportunidad (benchmarking):
   Compara las siguientes dimensiones en los 4 grandes competidores (Duolingo, Babbel, Italki, Busuu):
   - Modelo pedagógico principal
   - Integración de IA actual
   - Modelo de monetización
   - Fortaleza/debilidad principal
   - Gap de mercado que no cubren

2. Propuesta de valor y positioning:
   - Statement de positioning (formato: Para [audiencia] que [necesidad], [nombre] es el [categoría] que [beneficio clave], a diferencia de [alternativa], nuestro producto [diferenciador único])
   - Los 3 pilares del producto
   - Anti-features (lo que conscientemente NO harás y por qué)

3. Métricas north star y KPIs:
   - North Star Metric principal (con justificación)
   - Árbol de métricas que influyen en la North Star
   - Métricas de retención específicas para apps de idiomas
   - Definición de "usuario activo" para este contexto
   - OKRs para los próximos 2 trimestres

4. Roadmap por fases (12 meses):
   Para cada trimestre, detalla:
   - Tema o enfoque principal del trimestre
   - 3-5 funcionalidades a lanzar (con descripción de una frase)
   - Hipótesis que se está validando
   - Métrica de éxito del trimestre
   - Dependencias técnicas o de negocio

   Funcionalidades a considerar para priorizar:
   - Sistema de conversación con IA (tutor virtual)
   - Corrección de pronunciación en tiempo real
   - Personalización del plan de estudio con IA
   - Preparación de exámenes oficiales (DELE, IELTS, TOEFL)
   - Modo viaje (vocabulario contextual por situación)
   - Comunidad de intercambio de idiomas
   - Dashboard de progreso para empresas (B2B)
   - Integración con calendarios para planificación de estudio

5. Framework de priorización:
   Aplica el método RICE a las 8 funcionalidades listadas arriba:
   - Reach (alcance de usuarios)
   - Impact (impacto en la métrica north star)
   - Confidence (confianza en las estimaciones)
   - Effort (esfuerzo en semanas-ingeniero)
   - Puntuación RICE final y ranking

6. Discovery plan para los próximos 30 días:
   - 5 preguntas de investigación críticas para validar los supuestos del producto
   - Metodología para responder cada pregunta
   - 10 perfiles de usuarios a entrevistar con criterios de selección

7. Estrategia de monetización:
   - Comparativa de modelos de pricing de los competidores
   - Recomendación de modelo para esta fase
   - Precio sugerido con justificación de valor
   - Estrategia de conversión freemium → premium
   - Potencial de expansión B2B

instrucción final: Identifica los 3 mayores riesgos del producto y propón un plan de mitigación para cada uno.
EOT,
            ],
            [
                'title'         => 'Preparar entrevistas de trabajo en idioma extranjero con IA',
                'description'   => 'Practica y prepara entrevistas de trabajo en inglés u otro idioma extranjero con simulaciones, correcciones y vocabulario específico del sector.',
                'profession_id' => 6,
                'difficulty'    => 'intermediate',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Preparar al candidato para superar con éxito una entrevista de trabajo en [IDIOMA_DE_LA_ENTREVISTA], trabajando tanto el idioma como las respuestas de contenido, el vocabulario técnico del sector y la confianza comunicativa.

contexto: Eres un coach de entrevistas bilingüe con experiencia en reclutamiento internacional. Conoces tanto las expectativas de los entrevistadores en empresas de [PAÍS_DE_LA_EMPRESA] como las trampas lingüísticas más frecuentes para candidatos no nativos. Tu enfoque es práctico: simulas entrevistas reales, corriges con explicaciones y construyes confianza progresivamente.

instrucción de contexto del candidato:
- Puesto al que opta: [PUESTO]
- Sector/industria: [SECTOR]
- Nivel actual de [IDIOMA]: [A1/A2/B1/B2/C1/C2]
- País/empresa destino: [PAÍS_EMPRESA]
- Años de experiencia relevante: [AÑOS]
- Mayor preocupación del candidato: [PRONUNCIACIÓN / VOCABULARIO / NERVIOS / ESTRUCTURA DE RESPUESTAS]

tarea: Desarrolla el siguiente programa de preparación:

1. Análisis de perfil lingüístico:
   Basado en el nivel declarado, identifica:
   - Errores gramaticales más comunes a ese nivel para hablantes de español
   - Falsos amigos más peligrosos en entrevistas (palabras que suenan parecidas pero significan algo diferente)
   - Estructuras de cortesía específicas para entrevistas en [PAÍS_EMPRESA]
   - Diferencias culturales en la comunicación de logros (humildad vs. autoafirmación)

2. Vocabulario técnico del puesto:
   Crea un glosario de 50 términos clave para el puesto [PUESTO] en [SECTOR] en [IDIOMA]:
   - Término en [IDIOMA]
   - Traducción al español
   - Ejemplo de uso en frase de entrevista
   - Nivel de uso esperado (básico / avanzado)

3. Respuestas modelo para las 10 preguntas más frecuentes:
   Para cada pregunta, proporciona:
   - La pregunta en [IDIOMA] (con pronunciación aproximada si es útil)
   - Respuesta modelo en [IDIOMA] (2-3 minutos de habla)
   - Traducción de la respuesta al español
   - Vocabulario clave subrayado con notas
   - Variante para nivel B1 (más simple) y variante para C1 (más sofisticada)
   Las preguntas:
   - Tell me about yourself
   - Why do you want to work here?
   - What is your greatest strength?
   - What is your greatest weakness?
   - Tell me about a challenge you faced and how you overcame it
   - Where do you see yourself in 5 years?
   - Why are you leaving your current job?
   - What is your salary expectation?
   - Do you have any questions for us?
   - Describe a situation where you had to work as part of a team

4. Simulación de entrevista:
   Actúa como entrevistador de [EMPRESA_TIPO] para el puesto [PUESTO].
   - Realiza 5 preguntas en [IDIOMA] de dificultad creciente
   - Después de cada respuesta del candidato (que puede escribirla en la conversación), proporciona:
     * Puntuación de contenido (1-5)
     * Puntuación de idioma (1-5)
     * 3 aspectos positivos
     * 3 aspectos a mejorar
     * Versión mejorada de su respuesta

5. Frases de transición y conectores:
   50 frases útiles para una entrevista en [IDIOMA]:
   - Para empezar una respuesta
   - Para estructurar (primero, además, por otro lado, finalmente)
   - Para ganar tiempo mientras piensas
   - Para pedir que repitan o aclaren
   - Para hacer preguntas al entrevistador
   - Para negociar salario

6. Guía de lenguaje no verbal y comportamiento cultural:
   Para una entrevista presencial en [PAÍS_EMPRESA]:
   - Saludo inicial apropiado
   - Contacto visual esperado
   - Nivel de formalidad en el vestir
   - Small talk apropiado vs. inapropiado
   - Cómo manejar los silencios
   - Señales de que la entrevista va bien / mal

instrucción de práctica continua: Al final, proporciona un plan de estudio de 2 semanas (30 minutos diarios) para alcanzar el máximo nivel de preparación posible desde [NIVEL_ACTUAL].
EOT,
            ],
            [
                'title'         => 'Dominar terminología financiera en inglés con IA',
                'description'   => 'Aprende y practica el vocabulario financiero y contable en inglés para comunicarte con inversores, auditores y socios internacionales.',
                'profession_id' => 7,
                'difficulty'    => 'advanced',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Dominar la terminología financiera y contable en inglés para comunicarte con confianza en reuniones con inversores, preparar informes financieros internacionales, entender documentos legales-financieros y participar en due diligence processes.

contexto: Eres un CFO virtual con dominio del inglés financiero de nivel C2 y experiencia trabajando con Big Four, fondos de inversión de Londres y Nueva York, y empresas cotizadas en bolsas internacionales. Conoces tanto la terminología de las IFRS/GAAP como el argot financiero informal de las salas de juntas angloamericanas.

instrucción de nivel: El profesional es un [PUESTO: CFO / Controller / Analista Financiero / Director General] con nivel [B2/C1] de inglés general pero terminología financiera más débil. Ha trabajado principalmente en entornos de habla española.

tarea: Crea el siguiente programa de dominio de inglés financiero:

1. Mapa de terminología por área (150 términos con contexto):
   Para cada término: inglés, equivalente en español financiero formal, ejemplo de uso en oración completa, y nivel de uso (reunión ejecutiva / informe técnico / email informal)
   Áreas a cubrir:
   - Estados financieros (P&L, Balance Sheet, Cash Flow)
   - Valoración de empresas y M&A
   - Financiación y estructura de capital
   - Auditoría y control interno
   - Mercados de capitales
   - Gestión de riesgos y derivados
   - Terminología de startups y venture capital

2. Emails modelo en inglés financiero:
   - Presentación de resultados trimestrales a la junta directiva
   - Solicitud de información adicional a un auditor externo
   - Respuesta a due diligence request de un inversor
   - Negociación de condiciones de un crédito con un banco extranjero
   - Comunicación de forecast revision al CEO

3. Presentación de resultados en inglés:
   Template completo para una earnings call de 30 minutos:
   - Opening statement del CEO
   - Presentación de resultados del CFO (con frases exactas para cada slide)
   - Cómo hablar de números: pronunciación de millones, billones, porcentajes
   - Frases para contextualizar buenos resultados
   - Frases para comunicar malos resultados sin alarmar
   - Q&A: cómo manejar preguntas difíciles de analistas

4. Due diligence vocabulary:
   Guía completa para participar en un proceso de due diligence:
   - Tipos de due diligence (financial, legal, commercial, technical)
   - Documentos más solicitados con sus nombres en inglés
   - Frases para pedir aclaraciones o tiempo para responder
   - Cómo presentar el data room
   - Red flags y cómo comunicar riesgos identificados

5. Comprensión de documentos financieros en inglés:
   Explica en español, con ejemplos, las secciones más crípticas de:
   - Un annual report de empresa cotizada en NYSE/LSE
   - Un term sheet de inversión (Serie A/B)
   - Un loan agreement con covenants financieros
   - Un financial model en Excel con comentarios en inglés

6. Falsos amigos financieros español-inglés:
   Los 20 errores más costosos en finanzas internacionales:
   Ejemplos: "actual" ≠ actual (significa "real/effective"), "billion" ≠ billón, etc.

7. Simulación de board meeting:
   Actúa como presidente del consejo en una reunión donde se revisan los resultados del Q3 y se aprueba el budget del año siguiente.
   - Conduce la reunión en inglés financiero
   - Propón preguntas duras de los consejeros independientes
   - Evalúa las respuestas en términos de precisión terminológica

instrucción de pronunciación: Para los 20 términos con pronunciación más contraintuitiva para hispanohablantes, proporciona una guía de pronunciación aproximada en español.
EOT,
            ],
            [
                'title'         => 'Traducir y revisar contratos en idioma extranjero con IA',
                'description'   => 'Analiza, traduce y detecta cláusulas problemáticas en contratos redactados en inglés u otro idioma extranjero para proteger los intereses del cliente.',
                'profession_id' => 8,
                'difficulty'    => 'advanced',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Analizar contratos redactados en [IDIOMA_DEL_CONTRATO], identificar cláusulas problemáticas o inusuales, generar una traducción funcional al español con notas explicativas, y preparar una lista de puntos de negociación para el cliente hispanohablante.

contexto: Eres un abogado mercantilista con experiencia en contratos internacionales, formado tanto en el sistema de Common Law como en el Derecho Civil continental. Dominas el inglés jurídico (legalese) y sabes que los contratos en inglés tienen convenciones propias que no se traducen literalmente y que pueden crear malentendidos graves si se lee con una óptica del Derecho Civil.

instrucción de contexto:
- Tipo de contrato: [TIPO: NDA / MSA / SaaS Agreement / Distribution Agreement / Employment Contract / Shareholders Agreement]
- Jurisdicción del contrato: [PAÍS_JURISDICCIÓN]
- Tu cliente es: [PROVEEDOR / CLIENTE / EMPLEADO / EMPLEADOR / COMPRADOR / VENDEDOR]
- Área de preocupación principal: [LIMITACIÓN DE RESPONSABILIDAD / CONFIDENCIALIDAD / PROPIEDAD INTELECTUAL / CONDICIONES DE PAGO / TERMINACIÓN]

tarea: Dado el siguiente contrato en [IDIOMA]:
[TEXTO_DEL_CONTRATO o "proporciona el texto en el siguiente mensaje"]

realiza el siguiente análisis:

1. Resumen ejecutivo del contrato (para el cliente no abogado):
   - ¿Qué firma exactamente?
   - ¿Cuáles son sus 5 obligaciones principales?
   - ¿Cuáles son sus 5 derechos principales?
   - ¿Cuánto tiempo dura y cómo se termina?
   - ¿Cuánto va a pagar o cobrar?
   - Riesgo general del contrato: [BAJO / MEDIO / ALTO] con justificación

2. Traducción funcional con notas:
   Para cada sección del contrato:
   - Título original → Título traducido
   - Texto original (en bloques manejables)
   - Traducción funcional en español jurídico
   - Nota del traductor: explicación de conceptos del Common Law sin equivalente directo
   - Alerta si la cláusula es inusualmente favorable o desfavorable

3. Cláusulas de alto riesgo identificadas:
   Para cada cláusula problemática:
   - Número y nombre de la cláusula
   - Texto original
   - Por qué es problemática (explicación técnica y en lenguaje llano)
   - Impacto económico potencial si se activa
   - Versión alternativa más equilibrada que puedes proponer

4. Conceptos del Common Law que debes entender:
   Explica los siguientes si aparecen en el contrato:
   - Indemnification vs. guarantee
   - Limitation of liability y caps
   - "Best efforts" vs. "reasonable efforts" vs. "commercially reasonable efforts"
   - Representations and warranties (y sus consecuencias)
   - Governing law y jurisdiction/venue
   - Liquidated damages
   - Force majeure y su alcance típico en inglés
   - At-will employment (si es un contrato laboral)

5. Lista de negociación prioritaria:
   Ordena del 1 al 10 los puntos a negociar, con:
   - El texto actual
   - El texto que deberías pedir
   - Probabilidad de que la otra parte acepte (alta/media/baja)
   - Alternativa de compromiso si rechazan el cambio

6. Preguntas a hacer a la otra parte:
   10 preguntas que el cliente debe hacer antes de firmar, con su versión en inglés para enviar por email.

7. Red flags absolutos (deal-breakers):
   Cláusulas, si las hay, que recomendarías NO firmar bajo ninguna circunstancia y por qué.

advertencia legal: Este análisis es orientativo y no sustituye el asesoramiento de un abogado licenciado en la jurisdicción del contrato. Para contratos de alto valor o alto riesgo, siempre contrata un abogado local.
EOT,
            ],
            [
                'title'         => 'Crear respuestas de atención al cliente en múltiples idiomas',
                'description'   => 'Genera respuestas de soporte técnico y atención al cliente en inglés, francés, alemán u otro idioma con el tono y vocabulario apropiados.',
                'profession_id' => 9,
                'difficulty'    => 'beginner',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Generar respuestas de atención al cliente en [IDIOMA_DESTINO] que sean claras, empáticas, profesionales y culturalmente apropiadas para resolver la consulta del cliente de manera eficiente.

contexto: Eres un especialista en Customer Support con experiencia en equipos internacionales. Conoces las diferencias culturales en las expectativas de servicio al cliente: los clientes alemanes esperan precisión técnica, los británicos prefieren la cortesía indirecta, los estadounidenses valoran la inmediatez y el tono amigable, y los franceses aprecian la formalidad inicial.

instrucción de contexto:
- Empresa/producto: [NOMBRE_EMPRESA]
- Tipo de negocio: [SaaS / E-commerce / Servicios / Hardware]
- Idioma del cliente: [IDIOMA]
- País del cliente: [PAÍS]
- Canal de comunicación: [Email / Chat en vivo / WhatsApp / Redes sociales]
- Tono de marca: [formal / amigable / técnico / aspiracional]

tarea: El cliente ha enviado el siguiente mensaje en [IDIOMA]:
[MENSAJE_DEL_CLIENTE]

genera la respuesta completa siguiendo este proceso:

1. Análisis del mensaje del cliente:
   - Emoción principal detectada (frustración / confusión / urgencia / satisfacción)
   - Problema técnico real vs. problema emocional
   - Información que falta para resolver completamente el caso
   - Prioridad (urgente / normal / baja)

2. Respuesta principal en [IDIOMA]:
   Siguiendo la estructura:
   - Saludo personalizado (con el nombre si está disponible)
   - Reconocimiento empático de la situación (sin admitir culpa innecesariamente)
   - Confirmación de entendimiento del problema
   - Solución paso a paso (numerada, clara)
   - Pregunta de verificación o próximos pasos
   - Cierre cálido y profesional
   - Firma con nombre, cargo y canales de contacto

3. Variantes por nivel de urgencia:
   - Versión para chat en vivo (más concisa, frases cortas)
   - Versión para email (más detallada)
   - Versión para redes sociales (pública, cuidadosa, invita a continuar en privado)

4. Respuestas complementarias de seguimiento:
   - Si el cliente responde "sigue sin funcionar"
   - Si el cliente responde "gracias, ya está resuelto"
   - Si el cliente escala a queja formal
   - Si el cliente pide hablar con un supervisor

5. Base de conocimiento en [IDIOMA]:
   A partir de este caso, genera:
   - Pregunta frecuente (FAQ) para la base de conocimiento
   - Artículo de ayuda breve (300 palabras) que el cliente podría haber encontrado antes de escribir
   - Macro de respuesta rápida para el equipo de soporte

6. Guía de estilo de soporte para [PAÍS]:
   - Fórmulas de saludo apropiadas vs. inapropiadas
   - Cómo disculparse en esa cultura (directa vs. indirecta)
   - Cómo manejar clientes extremadamente enfadados
   - Expresiones de empatía naturales en ese idioma
   - Frases que parecen educadas pero pueden sonar condescendientes

7. CSAT prediction:
   Basándote en la respuesta generada, estima la probabilidad de obtener una puntuación de satisfacción de 4-5/5 y qué elemento de la respuesta tiene más impacto en esa predicción.

instrucción de calidad: Revisa que la respuesta no contenga ninguna de estas frases problemáticas en [IDIOMA]: "como ya le dije", "eso no es posible", "no podemos hacer eso", "es política de la empresa". Si aparecen, sustitúyelas por alternativas que mantengan el mensaje sin generar fricción.
EOT,
            ],
            [
                'title'         => 'Ofrecer servicios de traducción con IA como freelancer',
                'description'   => 'Construye un servicio de traducción profesional con IA como asistente: flujo de trabajo, control de calidad, precios y captación de clientes.',
                'profession_id' => 10,
                'difficulty'    => 'intermediate',
                'resource_type' => 'prompt',
                'tool_name'     => 'Claude',
                'prompt_content' => <<<'EOT'
objetivo: Diseñar un servicio de traducción profesional como freelancer donde la IA actúa como asistente de alta productividad, manteniendo la calidad humana y construyendo una propuesta de valor diferenciada en un mercado altamente competitivo.

contexto: Eres un consultor de negocio especializado en freelancers del sector lingüístico. Conoces la realidad del mercado: la IA está presionando los precios de la traducción genérica a la baja, pero está creando nuevas oportunidades para traductores especializados que saben combinar expertise humano con herramientas de IA para ofrecer mayor velocidad, consistencia y valor añadido.

instrucción de perfil del freelancer:
- Par de idiomas principal: [IDIOMA_ORIGEN] → [IDIOMA_DESTINO]
- Especialización temática: [ÁREA: legal / médica / técnica / marketing / literaria]
- Años de experiencia: [AÑOS]
- Mercado objetivo: [EMPRESAS / AGENCIAS / CLIENTES DIRECTOS]
- Herramientas actuales: [HERRAMIENTAS: Memoq, SDL Trados, DeepL, etc.]

tarea: Desarrolla el siguiente plan de negocio y operación:

1. Posicionamiento y diferenciación:
   - Por qué la IA te hace más competitivo, no obsoleto
   - Tu propuesta de valor única en 1 frase
   - Los 3 tipos de clientes que NO puedes servir con IA (y debes declinarlo)
   - Los 3 tipos de proyecto donde la IA + tu expertise es imbatible
   - Cómo comunicar el uso de IA a los clientes (con qué palabras y cuáles evitar)

2. Flujo de trabajo optimizado con IA:
   Diseña el proceso paso a paso para un proyecto de [TIPO_DOCUMENTO] de 5.000 palabras:
   - Análisis inicial del texto y preparación del glosario terminológico
   - Uso de Claude para generar el primer borrador (con el prompt exacto)
   - Revisión humana: dónde centrar el esfuerzo (los puntos donde la IA falla más)
   - Post-edición: checklist de los 15 puntos a verificar siempre
   - Control de calidad final antes de entrega
   - Tiempo estimado vs. traducción 100% humana vs. ahorro porcentual

3. Estructura de precios:
   - Tarifa por palabra: rango para tu especialización con/sin IA
   - Cómo justificar tus precios aunque uses IA
   - Servicios de mayor valor añadido que puedes ofrecer (transcreación, localización, revisión de IA pura, glossary management)
   - Política de descuentos para volumen y clientes recurrentes
   - Cómo manejar la objeción "DeepL ya puede hacer esto gratis"

4. Captación de clientes en [MERCADO_OBJETIVO]:
   - Perfil del cliente ideal (ICP) con 5 criterios de calificación
   - Canales de adquisición más efectivos para tu especialización
   - Perfil de LinkedIn optimizado para traductores especializados
   - Propuesta inicial tipo para 3 tipos de cliente diferente
   - 5 estrategias de contenido que demuestran tu expertise

5. Gestión de proyectos y clientes:
   - Briefing que debes pedir SIEMPRE antes de aceptar un proyecto
   - Contrato tipo con las cláusulas esenciales para protegerte
   - Cómo gestionar revisiones y cambios de alcance
   - Sistema de feedback y testimoniales
   - Herramientas recomendadas para gestionar múltiples proyectos

6. Plan de escalabilidad:
   - Cómo pasar de [X euros/mes] a [2X euros/mes] sin trabajar más horas
   - Cuándo y cómo subcontratar (el riesgo y la oportunidad)
   - Creación de activos: glosarios, memorias de traducción, guías de estilo que te hacen más eficiente con cada proyecto
   - Especialización progresiva: cómo elegir el nicho más rentable

instrucción final: Genera un plan de acción de 90 días con hitos semanales específicos para lanzar o relanzar este servicio de traducción asistida por IA.
EOT,
            ],
        ];

        foreach ($skills as $data) {
            $slug = Str::slug($data['title']);
            if (Skill::where('slug', $slug)->exists()) {
                $this->command->info("Skipping: {$data['title']}");
                continue;
            }
            Skill::create(array_merge($data, [
                'user_id'     => $admin->id,
                'slug'        => $slug,
                'status'      => 'published',
                'version'     => 1,
                'views_count' => rand(80, 400),
                'saves_count' => rand(5, 30),
            ]));
            $this->command->info("Created: {$data['title']}");
        }
    }
}
