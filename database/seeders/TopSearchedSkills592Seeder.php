<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills592Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Crear campañas de marketing inclusivo con IA',
                'description'      => 'Usa IA para diseñar campañas de marketing que representen la diversidad real de tu audiencia y eviten sesgos inconscientes en mensajes, imágenes y segmentación.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing inclusivo y comunicación libre de sesgos. Voy a pedirte ayuda para diseñar una campaña de marketing que respete y celebre la diversidad, la equidad y la inclusión (DEI) de manera auténtica.

Contexto de la campaña:
- Marca o producto: [describe brevemente tu marca, producto o servicio]
- Audiencia objetivo: [describe los segmentos de audiencia que deseas alcanzar]
- Canal principal: [redes sociales, email, vídeo, OOH, etc.]
- Objetivo de negocio: [reconocimiento de marca, generación de leads, fidelización, etc.]
- Presupuesto aproximado: [alto, medio, bajo o cantidad concreta]

Tu tarea es desarrollar una estrategia de campaña completa que incluya:

1. AUDITORÍA DE SESGOS PREVIOS
Antes de crear nada nuevo, revisa el brief de la marca (lo que te proporcione) e identifica:
- Lenguaje que excluye o estereotipa a ciertos grupos (género, edad, etnia, capacidad)
- Imágenes o iconografías que no representen la diversidad real
- Supuestos implícitos sobre el estilo de vida o situación económica del consumidor
- Mensajes que puedan resultar tokenizadores o superficiales en materia DEI

2. PROPUESTA DE MENSAJES INCLUSIVOS
Redacta 3 variantes de headline y copy principal para la campaña que:
- Utilicen lenguaje neutro o adaptado al contexto cultural
- Eviten el "pinkwashing", "greenwashing" o cualquier forma de inclusión performativa
- Conecten emocionalmente con personas de distintos orígenes, capacidades y situaciones vitales
- Sean auténticos y coherentes con los valores reales de la marca

3. GUÍA DE REPRESENTACIÓN VISUAL
Define criterios para seleccionar o producir el material visual (fotografía, ilustración, vídeo):
- Diversidad de edades, cuerpos, etnias, géneros y capacidades funcionales
- Contextos cotidianos no estereotipados
- Revisión checklist antes de aprobar cada pieza creativa

4. SEGMENTACIÓN EQUITATIVA
Propón cómo adaptar los mensajes para distintos segmentos de audiencia sin caer en estereotipos, explicando:
- Qué matices culturales considerar por segmento
- Cómo testear variantes A/B con enfoque DEI
- Métricas de inclusión a monitorizar (representación en CTR por segmento, diversidad de alcance, etc.)

5. PLAN DE VALIDACIÓN INTERNA
Describe un proceso de revisión antes del lanzamiento:
- Quién debe revisar el material (comité DEI, consultor externo, panel de personas de la comunidad representada)
- Lista de preguntas de validación para detectar errores de inclusión
- Protocolo para recibir y actuar ante feedback externo post-lanzamiento

6. MÉTRICAS Y KPIs DEI
Propón al menos 5 indicadores específicos para medir si la campaña está cumpliendo sus objetivos de inclusión, más allá de las métricas de negocio convencionales.

Formatea la respuesta con secciones claras y utiliza ejemplos concretos cuando sea posible. Al final, incluye una nota sobre las limitaciones éticas que debes tener en cuenta al implementar esta campaña.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Diseño de campañas publicitarias inclusivas libres de sesgos',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Auditar código y APIs para accesibilidad e inclusión digital',
                'description'      => 'Usa IA para revisar tu código fuente, APIs y documentación técnica en busca de barreras de accesibilidad y lenguaje no inclusivo que afecten a usuarios con diversidad funcional.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de software especializado en accesibilidad (a11y) y diseño inclusivo de sistemas. Tu misión es auditar un fragmento de código o una especificación de API para identificar barreras de accesibilidad y prácticas que excluyan a usuarios con distintas capacidades o contextos.

Información de entrada:
- Lenguaje o framework: [React, Vue, Django, Laravel, Node.js, etc.]
- Tipo de componente o endpoint: [formulario, modal, lista de resultados, API REST, etc.]
- Estándares de referencia: [WCAG 2.1 AA, ATAG 2.0, Section 508, etc.]
- Código o especificación a revisar: [pega aquí el fragmento relevante]

Realiza una auditoría completa en las siguientes dimensiones:

1. ACCESIBILIDAD DE LA INTERFAZ (si aplica frontend)
- Revisa el uso correcto de atributos ARIA (roles, labels, describedby, live regions)
- Comprueba la navegabilidad por teclado: orden de foco, atajos, trampas de foco
- Evalúa el contraste de colores y si la información solo se transmite por color
- Verifica que imágenes y medios tienen textos alternativos adecuados
- Detecta problemas con lectores de pantalla (VoiceOver, NVDA, JAWS)
- Señala formularios sin etiquetas asociadas, mensajes de error no descriptivos

2. INCLUSIÓN EN LENGUAJE TÉCNICO Y DOCUMENTACIÓN
- Identifica términos con carga de exclusión en nombres de variables, funciones, comentarios o docs (whitelist/blacklist, master/slave, dummy, etc.)
- Propón alternativas técnicamente equivalentes y ampliamente aceptadas (allowlist/denylist, primary/replica, placeholder, etc.)
- Revisa si los mensajes de error son comprensibles para usuarios no expertos

3. ACCESIBILIDAD EN APIs Y CONTRATOS DE DATOS
- Evalúa si los mensajes de error devueltos son descriptivos e internacionalizables
- Comprueba si la API soporta usuarios con distintas configuraciones regionales (formatos de fecha, moneda, idioma)
- Revisa si existe paginación accesible y filtros que no asuman capacidades técnicas avanzadas

4. PRÁCTICAS DE CÓDIGO INCLUSIVO
- Detecta supuestos sobre el género o nombre del usuario en la lógica del código
- Revisa campos de formulario que fuercen categorías binarias (género M/F sin opciones adicionales)
- Identifica validaciones de teléfono, dirección o nombre que excluyan formatos internacionales

5. PLAN DE CORRECCIÓN PRIORIZADO
Para cada problema encontrado:
- Clasifícalo por severidad: crítico, mayor, menor
- Explica el impacto concreto sobre el usuario afectado
- Proporciona el snippet de código corregido listo para implementar
- Indica el criterio WCAG o estándar relacionado

6. TESTING Y AUTOMATIZACIÓN
- Recomienda herramientas de testing de accesibilidad integrable en CI/CD (axe-core, Lighthouse, Pa11y, etc.)
- Propón pruebas de accesibilidad manuales prioritarias para complementar la automatización
- Sugiere cómo incluir personas con diversidad funcional en el proceso de QA

Finaliza con un resumen ejecutivo de los hallazgos y una puntuación de madurez en accesibilidad del 1 al 5, con justificación.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Auditoría de accesibilidad en código y APIs para eliminar barreras digitales',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseñar experiencias de usuario inclusivas con guía DEI',
                'description'      => 'Usa IA para evaluar y mejorar tus diseños de UI/UX identificando barreras de accesibilidad visual, cognitiva y motora, y asegurando representación diversa en ilustraciones y recursos gráficos.',
                'prompt_content'   => <<<'EOT'
Eres un diseñador UX/UI especializado en diseño inclusivo y sistemas de diseño accesibles. Voy a compartirte información sobre un proyecto de diseño para que lo evalúes desde la perspectiva de diversidad, equidad e inclusión (DEI).

Datos del proyecto:
- Tipo de producto: [aplicación web, app móvil, dashboard, landing page, etc.]
- Audiencia objetivo: [describir segmentos, edades, contexto cultural, etc.]
- Sistema de diseño base: [Material, Ant Design, propio, ninguno]
- Paleta de colores actual: [describe o pega los HEX principales]
- Estado del proyecto: [wireframes, mockups, prototipo, producción]

Desarrolla una evaluación y guía de mejoras en estas áreas:

1. ACCESIBILIDAD VISUAL
- Analiza si el contraste entre texto y fondo cumple WCAG AA (mínimo 4.5:1 para texto normal, 3:1 para texto grande)
- Identifica si la información se transmite únicamente mediante color (señales de error, estados, diferenciación de elementos)
- Evalúa el tamaño de fuente, interlineado y espaciado para usuarios con baja visión
- Revisa la legibilidad en pantallas de baja resolución o modos de alto contraste
- Comprueba si existe modo oscuro y si es accesible

2. ACCESIBILIDAD COGNITIVA
- Evalúa la complejidad del lenguaje en etiquetas, botones y mensajes de error (objetivo: nivel B1 de comprensión)
- Detecta interfaces sobrecargadas de información que dificulten la concentración
- Revisa si los flujos de usuario tienen demasiados pasos sin retroalimentación clara
- Propón microcopies más simples e inclusivos para los elementos de UI identificados

3. ACCESIBILIDAD MOTORA
- Revisa si los elementos interactivos tienen tamaño mínimo de 44x44px (recomendación Apple/Google)
- Identifica elementos difíciles de usar con control por voz o switch access
- Evalúa si los gestos complejos (swipe, pinch) tienen alternativas accesibles

4. REPRESENTACIÓN E INCLUSIÓN VISUAL
- Propón criterios para seleccionar o crear ilustraciones, avatares e imágenes de personas que representen diversidad de género, etnia, edad, cuerpo y capacidad funcional
- Detecta iconografía que refuerce estereotipos culturales o de género
- Sugiere recursos de ilustración y fotografía de stock con enfoque inclusivo (bibliotecas, comunidades)

5. DISEÑO INTERCULTURAL
- Identifica elementos de diseño que puedan tener significados diferentes según cultura (colores, símbolos, gestos, dirección de lectura RTL/LTR)
- Propón cómo adaptar el diseño para mercados hispanohablantes con matices culturales diversos

6. SISTEMA DE DISEÑO INCLUSIVO
- Define tokens de diseño mínimos para garantizar accesibilidad consistente: tamaños de tipografía, colores de foco, estados de componentes
- Propón un checklist de revisión DEI para nuevos componentes antes de incorporarlos al sistema

Devuelve los resultados organizados por severidad y con recomendaciones concretas listas para implementar en Figma, código CSS o el sistema de diseño elegido.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Evaluación DEI de diseños UI/UX para garantizar accesibilidad e inclusión',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Adaptar el discurso de ventas para audiencias diversas con IA',
                'description'      => 'Usa IA para revisar y adaptar tu pitch de ventas, emails y scripts de llamadas para que sean inclusivos, culturalmente sensibles y efectivos con audiencias diversas.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de ventas especializado en comunicación inclusiva y ventas con enfoque DEI (diversidad, equidad e inclusión). Voy a compartirte mi material de ventas actual para que lo revises y mejores.

Información del contexto:
- Producto o servicio: [describe qué vendes]
- Mercado objetivo: [B2B, B2C, sector, geografía]
- Canal de ventas: [email outreach, llamadas, demos, presencial, LinkedIn, etc.]
- Material a revisar: [pega tu pitch, email o script actual]
- Perfil de cliente tipo: [describe el buyer persona actual]

Realiza una revisión completa con las siguientes acciones:

1. ANÁLISIS DE SESGOS EN EL DISCURSO DE VENTAS
- Identifica suposiciones sobre el género, edad, cargo jerárquico o nivel técnico del interlocutor
- Detecta lenguaje que asuma un determinado poder adquisitivo o contexto empresarial homogéneo
- Señala referencias culturales o humor que puedan ser excluyentes o malinterpretados en diferentes contextos
- Evalúa si el CTA (llamada a la acción) es equitativo y no presupone disponibilidad de tiempo o recursos

2. REESCRITURA INCLUSIVA DEL PITCH
Reescribe el material de ventas en al menos 3 variantes adaptadas a:
- Variante A: interlocutor senior con experiencia (CEO, director, socio)
- Variante B: interlocutor técnico o especialista (manager, analyst, lead)
- Variante C: interlocutor de perfil diverso en organización con política DEI activa (incluye referencias al impacto social del producto si aplica)

Para cada variante, asegura que:
- El saludo no asuma género (usa nombre directo o "Estimado/a equipo de...")
- El lenguaje sea claro, sin jerga excluyente ni anglicismos innecesarios
- Los ejemplos de caso de uso representen empresas o situaciones diversas

3. GUÍA DE ADAPTACIÓN CULTURAL
Proporciona recomendaciones para adaptar el pitch a distintos contextos hispanohablantes:
- España, México, Colombia, Argentina (diferencias de trato formal/informal, expresiones, sensibilidades)
- Cómo ajustar el ritmo de la conversación y el nivel de directividad según la cultura

4. CHECKLIST DE REVISIÓN DEI PARA VENTAS
Crea una lista de verificación de 10 puntos que el equipo de ventas pueda usar antes de enviar cualquier comunicación, incluyendo:
- Prueba del nombre (¿funcionaría este email si el destinatario tuviera un nombre de otra cultura?)
- Prueba del género (¿el texto funciona sin asumir género?)
- Prueba de inclusión (¿excluye o invisibiliza algún perfil de decisor?)

5. FORMACIÓN RÁPIDA PARA EL EQUIPO
Resume en menos de 200 palabras los 5 principios de ventas inclusivas que todo el equipo debería interiorizar, con ejemplos prácticos del sector.

Entrega el resultado listo para compartir con el equipo de ventas, con un formato claro y accionable.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Revisión y adaptación del discurso de ventas para audiencias culturalmente diversas',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Integrar DEI en la estrategia de producto digital',
                'description'      => 'Usa IA para revisar tu roadmap, user stories y criterios de aceptación e incorporar principios de diversidad, equidad e inclusión desde el diseño del producto.',
                'prompt_content'   => <<<'EOT'
Eres un Product Manager especializado en diseño de productos inclusivos y estrategia DEI. Voy a compartirte información sobre mi producto digital para que me ayudes a integrar principios de diversidad, equidad e inclusión de manera estructural.

Contexto del producto:
- Nombre y descripción del producto: [describe brevemente el producto]
- Etapa actual: [discovery, MVP, growth, madurez]
- Usuarios principales: [describe los segmentos actuales de usuarios]
- Tecnología principal: [web app, móvil, SaaS, marketplace, etc.]
- Equipo: [tamaño, composición, cultura de trabajo]

Desarrolla un plan de integración DEI en el producto con estos componentes:

1. AUDITORÍA DEI DEL PRODUCTO ACTUAL
Evalúa las siguientes dimensiones del producto existente:
- ¿Los datos de usuario que se recogen respetan la diversidad de identidades? (campos de nombre, género, dirección)
- ¿Los algoritmos de recomendación o ranking pueden perpetuar sesgos de representación?
- ¿El onboarding asume contextos tecnológicos o económicos homogéneos?
- ¿Existe sesgo de confirmación en los flujos de feedback y valoración?
- ¿El producto excluye a usuarios con diversidad funcional por falta de accesibilidad?

2. REESCRITURA INCLUSIVA DE USER STORIES
Toma 3 user stories de ejemplo (puedes proporcionar las tuyas o te inventaré representativas) y:
- Identifica sesgos implícitos en el "persona" utilizado
- Reescríbelas con un enfoque de usuario universal (Universal Design)
- Añade criterios de aceptación específicos de accesibilidad e inclusión

3. FRAMEWORK DE REVISIÓN DEI PARA EL ROADMAP
Diseña un proceso para evaluar cada iniciativa del roadmap desde la perspectiva DEI:
- Preguntas DEI para el Product Discovery (¿a quién incluye?, ¿a quién excluye?, ¿cuál es el impacto diferencial?)
- Criterios mínimos de inclusión para pasar de discovery a desarrollo
- Cómo priorizar iniciativas de inclusión frente a iniciativas de crecimiento puro

4. MÉTRICAS DE INCLUSIÓN DEL PRODUCTO
Define un conjunto de KPIs de inclusión complementarios a las métricas de negocio:
- Índice de accesibilidad (porcentaje de flujos críticos que cumplen WCAG AA)
- Distribución demográfica de usuarios activos vs. población objetivo
- Tasa de abandono segmentada por perfil de usuario para detectar exclusión
- Net Promoter Score segmentado por colectivos subrepresentados

5. HOJA DE RUTA DE INCLUSIÓN A 6 MESES
Propón un mini-roadmap con iniciativas concretas priorizadas por impacto y esfuerzo:
- Quick wins (menos de 1 semana de implementación)
- Iniciativas medianas (1 sprint)
- Iniciativas estratégicas (trimestre completo)

6. CULTURA DE PRODUCTO INCLUSIVO
Recomienda prácticas para el equipo de producto:
- Cómo diversificar los paneles de usuarios en research
- Cómo hacer retrospectivas DEI del producto
- Recursos de formación recomendados para el equipo

Entrega el resultado en formato de documento de estrategia listo para presentar al equipo y a stakeholders.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Integración de DEI en roadmap, user stories y métricas de producto digital',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Eliminar sesgos en procesos de selección y evaluación con IA',
                'description'      => 'Usa IA para revisar tus ofertas de empleo, criterios de evaluación y procesos de entrevista y eliminar sesgos inconscientes que afecten a la diversidad de candidatos.',
                'prompt_content'   => <<<'EOT'
Eres un especialista en recursos humanos con expertise en reclutamiento inclusivo, psicología organizacional y estrategia DEI. Voy a compartirte material de selección para que lo analices y mejores desde la perspectiva de la diversidad, equidad e inclusión.

Material a revisar:
- Oferta de empleo: [pega el texto completo de la oferta]
- Criterios de evaluación actuales: [lista los criterios o competencias que se valoran]
- Proceso de entrevista: [describe las fases y tipos de entrevista]
- Sector y tipo de empresa: [indica el sector y tamaño de la organización]
- Objetivo de diversidad: [¿hay algún colectivo subrepresentado que quieras atraer?]

Realiza una auditoría y propuesta de mejora en estas áreas:

1. ANÁLISIS DE SESGOS EN LA OFERTA DE EMPLEO
- Identifica lenguaje con carga de género (términos como "dinámico", "agresivo", "rockstar" atraen más a hombres; "colaborador/a", "empático/a" pueden disuadir a algunos perfiles)
- Detecta requisitos excluyentes innecesarios (años de experiencia arbitrarios, títulos universitarios cuando no son imprescindibles, disponibilidad de movilidad sin justificación)
- Evalúa si los beneficios listados son inclusivos (conciliación, flexibilidad, permisos parentales igualitarios)
- Revisa si el proceso de candidatura en sí es accesible (formato del CV, plazos, canales)

2. REESCRITURA DE LA OFERTA INCLUSIVA
Reescribe la oferta de empleo aplicando:
- Lenguaje neutro en género o con doble forma según contexto
- Requisitos redefinidos como "indispensables" vs. "valorables" para ampliar el pool
- Sección de cultura de empresa y valores DEI auténtica y verificable
- Descripción del proceso de selección para reducir la ansiedad del candidato

3. REDISEÑO DE CRITERIOS DE EVALUACIÓN
- Transforma los criterios subjetivos en competencias observables y medibles con ejemplos conductuales
- Propón una rúbrica de evaluación estructurada que minimice el sesgo del entrevistador
- Incluye criterios de "potencial de aprendizaje" para no penalizar trayectorias no lineales

4. GUÍA DE ENTREVISTA INCLUSIVA
Diseña una guía de entrevista estructurada con:
- Al menos 8 preguntas conductuales (situación-tarea-acción-resultado) libres de sesgo
- Lista de preguntas prohibidas por ley o éticamente cuestionables (estado civil, planes de maternidad, edad, religión)
- Técnica de panel diverso: cómo componer y formar el comité entrevistador
- Protocolo de calibración post-entrevista para minimizar el sesgo de afinidad

5. MÉTRICAS DE INCLUSIÓN EN EL PROCESO
Define indicadores para monitorizar la salud DEI del proceso:
- Tasa de conversión por género, edad y origen en cada fase del funnel
- Tiempo hasta la oferta segmentado por perfil
- Diversidad del pool de candidatos vs. candidatos finalistas

6. PLAN DE MEJORA CONTINUA
Propón acciones trimestrales para mejorar la inclusión en atracción de talento: canales alternativos de difusión, colaboraciones con comunidades diversas, programas de referidos con enfoque DEI.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Revisión de ofertas de empleo y procesos de selección para eliminar sesgos',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Auditar brechas salariales y equidad retributiva con IA',
                'description'      => 'Usa IA para analizar datos salariales de tu organización, identificar brechas de equidad por género, origen u otros factores y diseñar un plan de corrección retributiva.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de compensación y beneficios especializado en equidad retributiva y análisis DEI. Voy a compartirte datos sobre la estructura salarial de mi organización para que identifiques brechas de equidad y propongas un plan de corrección.

Datos de entrada (proporciona lo que tengas disponible):
- Número de empleados y distribución por género, edad y antigüedad: [datos]
- Rangos salariales por nivel/banda: [datos o descripción]
- Política de revisión salarial actual: [descripción del proceso]
- Resultados de auditoría previa si existe: [datos o "ninguna auditoría previa"]
- Sector y país: [indica el contexto para comparativa de mercado]

Desarrolla un análisis y plan de acción completo:

1. METODOLOGÍA DE ANÁLISIS DE BRECHA SALARIAL
Explica paso a paso cómo calcular:
- Brecha salarial bruta (diferencia media entre grupos sin ajustar por variables)
- Brecha salarial ajustada (controlando por nivel, función, antigüedad y rendimiento)
- Índice de equidad por banda salarial
- Compa-ratio por grupo demográfico (salario real vs. punto medio de la banda)

Indica qué herramientas o fórmulas de hoja de cálculo aplicar para organizaciones sin software especializado.

2. DIAGNÓSTICO DE CAUSAS RAÍZ
Una vez calculadas las brechas, ayúdame a identificar las causas más probables:
- Segregación vertical (subrepresentación en puestos senior)
- Segregación horizontal (concentración de ciertos grupos en funciones peor pagadas)
- Sesgos en las evaluaciones de desempeño que influyen en los incrementos
- Diferencias en negociación salarial al incorporarse
- Impacto de las excedencias o reducciones de jornada en la progresión salarial

3. PLAN DE CORRECCIÓN RETRIBUTIVA
Diseña un plan de corrección con:
- Criterios para priorizar los ajustes más urgentes (mayor brecha, mayor impacto)
- Modelo de presupuesto de corrección salarial escalonado a 12, 24 y 36 meses
- Comunicación interna del plan: cómo explicar los ajustes a los afectados y al resto de la organización
- Mecanismo de seguimiento y auditoría anual

4. PREVENCIÓN DE NUEVAS BRECHAS
Propón cambios estructurales en los procesos de compensación:
- Bandas salariales transparentes y publicadas internamente
- Criterios objetivos y documentados para promociones e incrementos
- Formación para managers en equidad retributiva y sesgos inconscientes
- Revisión DEI obligatoria antes de aprobar cualquier oferta salarial

5. REPORTING Y COMUNICACIÓN EXTERNA
Si la empresa está obligada o quiere comunicar su progreso en equidad salarial:
- Qué métricas publicar en el informe de sostenibilidad o memoria ESG
- Cómo preparar la respuesta ante auditorías externas o requerimientos regulatorios (Ley de Igualdad Retributiva en España, directiva europea de transparencia salarial)

Entrega el análisis en formato de informe ejecutivo con resumen, hallazgos, recomendaciones y próximos pasos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Análisis de brecha salarial de género y diseño de plan de corrección retributiva',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Revisar contratos y políticas internas con enfoque DEI legal',
                'description'      => 'Usa IA para revisar contratos laborales, políticas de empresa y documentación legal en busca de cláusulas discriminatorias o lenguaje que vulnere los principios de igualdad.',
                'prompt_content'   => <<<'EOT'
Eres un abogado laboralista especializado en igualdad, no discriminación y cumplimiento normativo DEI. Voy a compartirte documentos legales y políticas internas para que los revises desde la perspectiva jurídica de la diversidad, equidad e inclusión.

Documentos a revisar:
- Tipo de documento: [contrato de trabajo, política de igualdad, código de conducta, protocolo anti-acoso, reglamento interno, etc.]
- Jurisdicción aplicable: [España, México, Argentina, Colombia, u otra]
- Sector de la empresa: [indica el sector para contextualizar los riesgos legales]
- Tamaño de la empresa: [número de empleados, para determinar obligaciones legales]
- Texto del documento: [pega el documento completo o los fragmentos relevantes]

Realiza una revisión jurídica DEI completa en estas áreas:

1. DETECCIÓN DE CLÁUSULAS POTENCIALMENTE DISCRIMINATORIAS
Identifica y clasifica por riesgo legal:
- Cláusulas que distingan, excluyan o restrinjan derechos por motivos de género, origen étnico, edad, discapacidad, orientación sexual, religión, situación familiar u otros protegidos
- Requisitos contractuales que puedan tener impacto dispar sobre colectivos protegidos (ej. cláusulas de disponibilidad absoluta, restricción de cambios de jornada)
- Lenguaje que no reconozca la diversidad de modelos familiares en permisos y beneficios
- Ausencia de regulación sobre igualdad retributiva o transparencia salarial

2. VERIFICACIÓN DE CUMPLIMIENTO NORMATIVO
Comprueba el cumplimiento con la normativa aplicable:
- Para España: Ley Orgánica 3/2007 de Igualdad, RD 902/2020 de igualdad retributiva, Ley 15/2022 integral para la igualdad de trato, obligaciones del Plan de Igualdad según plantilla
- Para México: Norma Mexicana NMX-R-025-SCFI-2015 de igualdad laboral e inclusión
- Para el resto: señala los marcos normativos aplicables y las brechas detectadas

3. REVISIÓN DEL PROTOCOLO ANTI-ACOSO
Si existe un protocolo de prevención y actuación frente al acoso sexual y por razón de género:
- Verifica que incluye definiciones claras, canal de denuncia confidencial, plazos de actuación, medidas cautelares y protección de la persona denunciante
- Señala las omisiones que generan riesgo legal o que invalidan el protocolo
- Propón el texto corrected para los apartados deficientes

4. LENGUAJE JURÍDICO INCLUSIVO
- Identifica el uso exclusivo del masculino genérico donde sería apropiado usar lenguaje inclusivo
- Propón fórmulas jurídicamente válidas y de lectura clara (doble forma, uso de sustantivos colectivos, etc.)
- Revisa que los formularios y anexos contractuales ofrezcan opciones de género no binario donde sea legalmente posible

5. RECOMENDACIONES DE MEJORA PRIORITARIAS
Clasifica los hallazgos por urgencia:
- Riesgo legal inmediato (exposición a sanciones o demandas)
- Riesgo reputacional medio
- Buenas prácticas recomendables no obligatorias

Para cada hallazgo, proporciona el texto de sustitución o el párrafo añadido listo para incorporar al documento.

Nota legal: este análisis es orientativo. Antes de implementar cambios en documentos contractuales, consúltese con el asesor jurídico de la organización.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Revisión legal de contratos y políticas internas para garantizar cumplimiento DEI',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Diseñar protocolos de atención inclusiva al cliente con IA',
                'description'      => 'Usa IA para crear guías de atención al cliente que respeten la diversidad, garanticen accesibilidad comunicativa y formen al equipo en soporte inclusivo y libre de sesgos.',
                'prompt_content'   => <<<'EOT'
Eres un experto en experiencia de cliente y comunicación inclusiva. Voy a pedirte que me ayudes a diseñar protocolos de atención al cliente que respeten la diversidad y garanticen que todos los usuarios reciben un trato equitativo e inclusivo.

Contexto del equipo:
- Canal de atención: [chat, email, teléfono, redes sociales, presencial o mixto]
- Tipo de clientes: [B2C general, B2B, colectivos vulnerables, personas mayores, etc.]
- Tamaño del equipo de soporte: [número de agentes]
- Situación actual: [¿existe algún protocolo? ¿hay quejas de trato discriminatorio?]
- Herramientas de soporte: [Zendesk, Intercom, Freshdesk, etc.]

Desarrolla un protocolo de atención inclusiva completo:

1. PRINCIPIOS DE ATENCIÓN INCLUSIVA
Define los 7 principios fundamentales que deben guiar toda interacción del equipo de soporte:
- Respeto a la diversidad de identidades (géneros, orientaciones, etnias, culturas, capacidades)
- Comunicación adaptada (lenguaje claro, sin tecnicismos innecesarios, ritmo adecuado)
- Neutralidad de trato (mismo nivel de servicio independientemente del perfil del cliente)
- Accesibilidad comunicativa (alternativas para clientes con diversidad funcional)
- Confidencialidad y no estigmatización
- Gestión de situaciones de vulnerabilidad con empatía y protocolo claro
- Mejora continua basada en feedback de clientes diversos

2. GUÍA DE LENGUAJE INCLUSIVO EN ATENCIÓN
Elabora una guía práctica con:
- Saludos neutros en género para inicio de conversación (chat, email, teléfono)
- Cómo preguntar el nombre preferido y los pronombres sin incomodar
- Alternativas a expresiones excluyentes comunes en soporte (ejemplos concretos con versión inclusiva)
- Cómo adaptar el nivel de lenguaje según el perfil detectado del cliente

3. PROTOCOLOS ESPECÍFICOS POR SITUACIÓN
Diseña protocolos detallados para estas situaciones:
- Atención a cliente con discapacidad auditiva, visual o cognitiva (qué hacer en cada canal)
- Gestión de cliente en situación de vulnerabilidad emocional (duelo, estrés, crisis)
- Respuesta ante comentarios discriminatorios del cliente hacia el agente o hacia terceros
- Escalado de incidencias de trato discriminatorio por parte del equipo

4. FORMACIÓN DEL EQUIPO
Diseña un programa de formación en atención inclusiva para el equipo:
- Módulo 1 (1h): Sesgos inconscientes y su impacto en la experiencia del cliente
- Módulo 2 (1h): Lenguaje inclusivo aplicado a los canales del equipo
- Módulo 3 (1h): Role-playing de situaciones difíciles con feedback estructurado
- Evaluación de conocimientos: 10 preguntas tipo test con respuestas comentadas

5. MÉTRICAS DE INCLUSIÓN EN SOPORTE
Define KPIs para medir la calidad inclusiva del servicio:
- CSAT segmentado por perfil de cliente
- Tiempo de resolución por colectivo (para detectar trato desigual)
- Tasa de escaladas relacionadas con trato inadecuado
- Resultados de auditoría de conversaciones con checklist DEI

6. PLANTILLAS DE RESPUESTA INCLUSIVA
Crea 5 plantillas de respuesta para situaciones frecuentes que sirvan de referencia al equipo, aplicando todos los principios de comunicación inclusiva establecidos.

Entrega el protocolo en formato de documento operativo listo para compartir con el equipo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Creación de protocolos y formación en atención al cliente inclusiva y libre de sesgos',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Crear propuestas y comunicaciones inclusivas como freelancer',
                'description'      => 'Usa IA para revisar y mejorar tus propuestas comerciales, perfiles profesionales y comunicaciones con clientes para que sean inclusivas, accesibles y culturalmente sensibles.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de comunicación profesional especializado en inclusión y diversidad. Voy a pedirte que revises y mejores mis materiales de comunicación como freelancer para asegurar que son inclusivos, accesibles y culturalmente sensibles.

Información de mi perfil freelance:
- Especialidad o servicio que ofrezco: [describe tu servicio principal]
- Mercados en los que trabajo: [España, Latinoamérica, ambos, internacional]
- Tipo de clientes habituales: [startups, PYMES, grandes empresas, ONGs, etc.]
- Material a revisar: [pega tu propuesta, bio, perfil de LinkedIn o email tipo]
- Objetivo de la revisión: [ampliar mercado, mejorar tasa de conversión, trabajar con clientes con política DEI, etc.]

Realiza una revisión y mejora completa en las siguientes áreas:

1. ANÁLISIS DEL MATERIAL ACTUAL
Evalúa el material que te proporciono en estas dimensiones:
- ¿El lenguaje asume características del cliente (género, tamaño de empresa, cultura)?
- ¿Los ejemplos o casos de uso mencionados representan diversidad de clientes?
- ¿El tono es adaptable a diferentes contextos culturales hispanohablantes?
- ¿La propuesta es accesible en formato y estructura para personas con dislexia o baja visión?
- ¿Hay jerga o anglicismos que pueden excluir a ciertos clientes?

2. REESCRITURA DE LA BIO O PERFIL PROFESIONAL
Reescribe mi bio o perfil aplicando:
- Lenguaje neutro en género o con doble forma donde sea apropiado
- Descripción del valor entregado sin asumir el perfil del cliente
- Mención auténtica (si aplica) de mi enfoque en trabajo con organizaciones diversas o con impacto social
- Versión corta (50 palabras) y versión larga (200 palabras) para distintos usos

3. PROPUESTA COMERCIAL INCLUSIVA
Transforma mi propuesta en un documento que:
- Comience con un saludo neutro y personalizable
- Describa el problema del cliente sin asumir contexto cultural específico
- Use casos de éxito que representen distintos tipos de organización
- Incluya una sección de accesibilidad del servicio (¿cómo trabajo con clientes con necesidades especiales?)
- Cierre con un CTA que no presuponga disponibilidad ni urgencia

4. GUÍA DE COMUNICACIÓN INTERCULTURAL
Proporciona consejos prácticos para adaptar mi comunicación cuando trabajo con clientes de:
- España: formalidad, tono directo vs. indirecto, diferencias regionales
- México: uso del tuteo/ustedeo, expresiones propias, sensibilidades culturales
- Argentina: informalidad relativa, expresiones locales, ritmo de negociación
- Colombia: formalidad profesional, respeto jerárquico, velocidad de decisión

5. POSICIONAMIENTO COMO FREELANCER CON ENFOQUE DEI
Si quiero posicionarme como un profesional que trabaja con enfoque DEI:
- Cómo comunicar este diferencial de manera auténtica y no performativa
- Qué añadir a mi perfil, propuestas y web para atraer clientes con política DEI
- Cómo demostrar competencia en DEI sin exagerar si apenas estoy empezando

6. CHECKLIST DE REVISIÓN ANTES DE ENVIAR
Crea una lista de 10 verificaciones rápidas que debo hacer antes de enviar cualquier propuesta o comunicación importante, incluyendo la perspectiva de inclusión.

Entrega los materiales reescritos listos para usar directamente, más la guía y el checklist en formato práctico.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Revisión y mejora de propuestas freelance para comunicación inclusiva e intercultural',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
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
