<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills221Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Documentar el conocimiento de marketing',
                'description'      => 'Captura el know-how del equipo de marketing: las campañas que funcionaron, los aprendizajes de las que no, y el sistema que asegura que el conocimiento no se va cuando rota el equipo.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en gestión del conocimiento aplicada a equipos de marketing. Quiero que me ayudes a construir el sistema que captura el know-how de mi equipo y lo convierte en un activo organizacional que sobrevive la rotación de personas y acelera el aprendizaje de los nuevos miembros.

Mi contexto:
- Tamaño del equipo de marketing: [número de personas y especialidades]
- Canales y tácticas principales: [SEM, SEO, social, email, contenido, eventos...]
- Problema actual: [fuga de conocimiento por rotación, procesos no documentados, dependencia de una persona clave...]
- Herramientas de trabajo: [Notion, Confluence, Google Drive, otra]
- Cultura del equipo respecto a la documentación: [nadie documenta, algunos lo hacen, hay un intento fallido previo]

Con esa información, quiero que me entregues:

1. AUDITORÍA DEL CONOCIMIENTO DE MARKETING
Explica cómo hacer una auditoría del conocimiento existente en el equipo de marketing: cómo identificar qué conocimiento es crítico versus qué es fácilmente recuperable, cómo mapear quién tiene qué conocimiento en la cabeza (el mapa de conocimiento del equipo) y cómo priorizar qué documentar primero en función del riesgo de pérdida. Dame una plantilla de auditoría de conocimiento adaptada a un equipo de marketing.

2. EL REPOSITORIO DE CAMPAÑAS: LA MEMORIA DE LO QUE FUNCIONÓ
Diseña la estructura del repositorio de campañas: la ficha estándar de cada campaña (objetivo, audiencia, canales, creatividades, presupuesto, resultados y aprendizajes), cómo hacer que sea fácil de buscar y filtrar y cómo garantizar que se rellena al cierre de cada campaña y no tres meses después cuando nadie recuerda nada. Dame una plantilla de ficha de campaña lista para usar.

3. PLAYBOOKS DE CANAL: EL MANUAL DE OPERACIONES DE MARKETING
Explica cómo construir playbooks por canal (SEO, SEM, email, social, contenido): qué debe incluir cada playbook (proceso paso a paso, herramientas usadas, benchmarks propios, errores conocidos y cómo evitarlos), cómo mantenerlos actualizados sin que se conviertan en documentos muertos y cómo estructurar el acceso para que el equipo los use de verdad. Dame el índice de un playbook de email marketing como ejemplo.

4. GESTIÓN DEL CONOCIMIENTO EN LAS TRANSICIONES DE EQUIPO
Define el proceso de knowledge transfer cuando alguien entra o sale del equipo: el offboarding de conocimiento cuando alguien deja la empresa (qué documentar en las últimas dos semanas), el onboarding de conocimiento para que el nuevo miembro sea productivo en 30 días y los rituales de equipo que aseguran que el conocimiento se comparte de forma continua, no solo en las crisis.

5. HERRAMIENTAS Y ARQUITECTURA DEL SISTEMA DE CONOCIMIENTO
Recomienda la arquitectura de herramientas para el sistema de gestión del conocimiento de marketing según mi stack actual: cómo organizar Notion o Confluence para que sea navegable y no un caos, cómo integrar el repositorio de conocimiento con las herramientas de trabajo diario (Slack, Asana, Google Docs) y qué convenciones de nomenclatura y etiquetado hacer cumplir para que la búsqueda funcione.

6. CULTURA DE DOCUMENTACIÓN: CÓMO HACER QUE EL EQUIPO DOCUMENTE
Explica cómo cambiar la cultura de un equipo que no documenta: los incentivos correctos, los rituales de equipo que integran la documentación en el flujo de trabajo (retrospectivas, weekly learnings), las frases de liderazgo que cambian la actitud hacia la documentación y cómo medir si el sistema está funcionando. Define los indicadores de un sistema de gestión del conocimiento sano en marketing.

Termina con un plan de implementación de 90 días: qué construir primero, qué procesos establecer en el segundo mes y cómo consolidar el hábito en el tercer mes para que el sistema sea autosostenible.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir el sistema de gestión del conocimiento del equipo de marketing',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Engineering knowledge management',
                'description'      => 'Gestiona el conocimiento técnico del equipo de ingeniería: el wiki técnico, los ADRs y las prácticas de documentación que evitan que el conocimiento viva solo en la cabeza de los developers más antiguos.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en gestión del conocimiento técnico para equipos de ingeniería de software. Quiero que me ayudes a construir el sistema que captura las decisiones arquitectónicas, los procesos técnicos y el know-how del equipo para que no dependa de las personas que llevan más tiempo.

Mi contexto:
- Tamaño del equipo de ingeniería: [número de developers y roles]
- Stack tecnológico: [lenguajes, frameworks, infraestructura]
- Problema principal: [bus factor alto, onboarding lento, decisiones que nadie recuerda por qué se tomaron, docs desactualizados]
- Herramientas de documentación actuales: [Confluence, Notion, GitHub Wiki, Readme.io, nada organizado]
- Madurez del equipo en documentación: [startups sin docs, empresa con docs desactualizados, intentos fallidos previos]

Con esa información, quiero que me entregues:

1. ARCHITECTURE DECISION RECORDS (ADRs): DOCUMENTAR EL POR QUÉ
Explica qué son los ADRs, por qué son la pieza más valiosa de conocimiento técnico que un equipo puede documentar y cómo implementarlos: el formato estándar de un ADR (contexto, decisión, consecuencias, alternativas consideradas), dónde almacenarlos (en el repositorio de código, en el wiki), cómo integrarlos en el proceso de diseño técnico y cómo hacer que el equipo los escriba antes de la implementación, no después. Dame una plantilla de ADR completa y un ejemplo ficticio para una decisión de base de datos.

2. EL WIKI TÉCNICO: ESTRUCTURA Y GOBIERNO
Diseña la estructura de un wiki técnico que funcione de verdad: la jerarquía de secciones (arquitectura del sistema, runbooks de operaciones, guías de desarrollo, onboarding, decisiones tomadas), las convenciones de nombrado y etiquetado que facilitan la búsqueda, el proceso de revisión para que el contenido no quede desactualizado y quién es responsable de qué sección. Explica la diferencia entre documentación evergreen y documentación temporal y cómo gestionar cada tipo.

3. RUNBOOKS Y PLAYBOOKS OPERACIONALES
Explica cómo construir runbooks que el equipo realmente use en producción: el formato de un runbook de incidente (síntoma, diagnóstico, solución paso a paso, rollback), cómo mantenerlos actualizados después de cada incidente, cómo integrarlos en el alerting para que aparezcan cuando hacen falta y cómo cubrir los escenarios de on-call para que cualquier miembro del equipo pueda resolver los incidentes más comunes sin llamar al experto.

4. ONBOARDING TÉCNICO: DE CERO A PRODUCTIVO EN 30 DÍAS
Diseña el plan de onboarding técnico para un nuevo developer: el roadmap de los primeros 30 días (arquitectura del sistema, entorno de desarrollo, primer PR, primera tarea de producción), los documentos que debe leer y en qué orden, las personas con quienes debe hablar y para qué, y el buddy system que garantiza que el nuevo miembro tiene a alguien a quien preguntar sin molestar a todo el equipo. Dame un template de plan de onboarding técnico de 30 días.

5. KNOWLEDGE SHARING RITUALS: LOS HÁBITOS DE UN EQUIPO QUE APRENDE
Define los rituales de equipo que convierten el conocimiento individual en conocimiento colectivo: el tech talk interno (frecuencia, formato, quién participa), el postmortem sin culpa (estructura, facilitación, documentación de aprendizajes), el pair programming como herramienta de transferencia de conocimiento y el código review como mecanismo de aprendizaje mutuo. Explica cómo institucionalizar estos rituales sin que se conviertan en reuniones vacías.

6. MEDIR EL BUS FACTOR Y REDUCIRLO
Explica cómo medir el bus factor del equipo: cómo identificar los cuellos de botella de conocimiento (las áreas del sistema que solo entiende una persona), cómo usar el análisis de código (git log, code ownership) para objetivizar el riesgo y cómo diseñar un plan de reducción del bus factor mediante rotación deliberada, documentación dirigida y pair programming en las áreas críticas.

Termina con un plan de implementación priorizado para los primeros 60 días: qué construir primero para reducir el riesgo inmediato y qué construir en el segundo mes para crear un sistema sostenible a largo plazo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Implementar gestión del conocimiento técnico en un equipo de ingeniería',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Design knowledge base y aprendizajes de equipo',
                'description'      => 'Captura y comparte el conocimiento de diseño: los principios aprendidos, las decisiones documentadas y el sistema de gestión del conocimiento que acelera el aprendizaje de los diseñadores nuevos.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en gestión del conocimiento para equipos de diseño de producto y diseño gráfico. Quiero que me ayudes a construir el sistema que captura el aprendizaje colectivo del equipo y lo hace accesible para que los nuevos diseñadores no partan de cero y los seniors no tengan que repetir siempre las mismas explicaciones.

Mi contexto:
- Tipo de equipo de diseño: [producto, gráfico, UX research, brand, mix]
- Tamaño del equipo: [número de personas y nivel de seniority]
- Herramientas de diseño: [Figma, Sketch, Adobe XD, herramientas de prototipado]
- Herramientas de documentación: [Notion, Confluence, Google Docs, Zeroheight, nada organizado]
- Problema principal: [decisiones de diseño que se repiten, onboarding lento, falta de coherencia entre proyectos]

Con esa información, quiero que me entregues:

1. EL DESIGN SYSTEM COMO BASE DE CONOCIMIENTO
Explica cómo el design system es el artefacto principal de gestión del conocimiento de un equipo de diseño: no solo los componentes visuales sino también los principios que los guían, los patrones de interacción documentados y la lógica de las decisiones tomadas. Define qué debe documentarse más allá del componente en sí (el cuándo usarlo, el cuándo no, las alternativas descartadas) y cómo mantener la documentación sincronizada con la evolución del design system.

2. DESIGN DECISIONS RECORDS: DOCUMENTAR EL POR QUÉ EN DISEÑO
Define un formato análogo a los ADRs de ingeniería para las decisiones de diseño importantes: el contexto del problema, la decisión tomada, los criterios de evaluación, las alternativas consideradas y las consecuencias conocidas. Dame una plantilla de Design Decision Record y un ejemplo concreto para una decisión de navegación o de componente complejo. Explica cómo integrar estos registros en el flujo de trabajo de diseño.

3. LIBRARY DE APRENDIZAJES Y RETROSPECTIVAS DE PROYECTO
Diseña el formato de retrospectiva de proyecto de diseño que genera conocimiento reutilizable: qué preguntas hacer al final de cada proyecto para extraer los aprendizajes más valiosos, cómo capturarlos en un formato consultable y cómo etiquetarlos para que sean fáciles de encontrar cuando el equipo afronte un proyecto similar. Dame una plantilla de retrospectiva de diseño con las preguntas y la estructura del documento de aprendizajes.

4. ONBOARDING DE DISEÑADORES: LA INMERSIÓN EN EL CONOCIMIENTO DEL EQUIPO
Diseña el plan de onboarding para un nuevo diseñador: los artefactos que debe revisar en la primera semana (design system, brand guidelines, decisiones pasadas, ejemplos del mejor trabajo del equipo), las conversaciones que debe tener con los seniors, los ejercicios de familiarización con el producto y el proceso de los primeros 30 días para que empiece a contribuir con criterio. Dame un template de onboarding de 30 días para un diseñador de producto.

5. RITUALES DE CONOCIMIENTO EN EL EQUIPO DE DISEÑO
Define los rituales que convierten el equipo en una organización que aprende: el critique semanal como mecanismo de aprendizaje colectivo (cómo estructurarlo para que sea psicológicamente seguro y genere feedback accionable), el design review como momento de documentar decisiones y el design share mensual donde los miembros del equipo presentan aprendizajes de proyectos recientes. Explica cómo facilitar cada ritual para que genere conocimiento y no solo conversación.

6. HERRAMIENTAS Y ARQUITECTURA: DÓNDE VIVE EL CONOCIMIENTO DE DISEÑO
Recomienda la arquitectura de herramientas para el conocimiento de diseño: cómo usar Figma no solo para diseñar sino para documentar (pages de documentación, componentes anotados, prototype flows explicados), cuándo usar una herramienta de wiki dedicada versus Figma para el conocimiento y cómo conectar la herramienta de diseño con la herramienta de documentación para que el desarrollador que implementa también acceda al conocimiento.

Termina con un plan de 60 días: qué construir en el primer mes para cubrir los gaps más urgentes de conocimiento y qué rituales establecer en el segundo mes para que el sistema crezca de forma orgánica.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir la base de conocimiento del equipo de diseño',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Sales playbook y captura del conocimiento comercial',
                'description'      => 'Documenta lo que funciona en ventas: el playbook que captura las mejores técnicas, los argumentos que funcionan y los aprendizajes de los mejores vendedores para que todo el equipo pueda beneficiarse.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en sales enablement y en la creación de playbooks comerciales. Quiero que me ayudes a construir el sistema que captura el conocimiento de los mejores vendedores del equipo y lo democratiza para que el equipo completo mejore su rendimiento.

Mi contexto:
- Tipo de venta: [B2B, B2C, enterprise, SMB, SaaS, servicios profesionales...]
- Proceso de venta actual: [ciclo de venta en semanas/meses, número de etapas, herramientas CRM]
- Tamaño del equipo comercial: [número de vendedores, perfiles, seniority]
- Problema principal: [rendimiento muy desigual entre vendedores, conocimiento concentrado en los mejores, falta de coherencia en el proceso]
- Productos o servicios: [describe brevemente qué vendes y a quién]

Con esa información, quiero que me entregues:

1. ANATOMÍA DEL SALES PLAYBOOK: QUÉ DEBE INCLUIR
Define la estructura completa de un sales playbook efectivo: el perfil de cliente ideal (ICP) con criterios de cualificación, el buyer journey desde el primer contacto hasta el cierre, los objection handlers para las 10 objeciones más comunes, las preguntas de descubrimiento que revelan el pain real del cliente, los email templates de cada etapa del proceso y los scripts de llamada para los momentos clave. Explica cómo estructurar el playbook para que sea consultable en tiempo real (mientras el vendedor está en la llamada) y no solo un documento de onboarding.

2. EXTRAER EL CONOCIMIENTO DE LOS MEJORES VENDEDORES
Diseña el proceso de captura del conocimiento de los mejores vendedores: cómo estructurar las entrevistas para extraer lo que hacen diferente (las preguntas concretas, los rituales de preparación, cómo manejan los momentos de tensión), cómo analizar las grabaciones de llamadas de los top performers para identificar los patterns que se pueden replicar y cómo convertir ese conocimiento tácito en procesos explícitos que otros puedan aprender.

3. WIN/LOSS ANALYSIS: APRENDER DE CADA DEAL
Define el proceso de análisis de deals ganados y perdidos: las preguntas que deben responder el vendedor y el cliente (si acepta dar feedback) al cerrar cada oportunidad, cómo estructurar la información en el CRM para que sea analizable a escala, qué patrones buscar en el análisis agregado y cómo convertir los hallazgos en actualizaciones del playbook. Dame una plantilla de win/loss interview de 10 preguntas.

4. CALL RECORDING Y COACHING BASADO EN DATOS
Explica cómo usar las herramientas de grabación y análisis de llamadas (Gong, Chorus, Clari o similares) para construir una biblioteca de conocimiento comercial: cómo identificar las llamadas que deben guardarse como ejemplos positivos o negativos, cómo usar los momentos de conversación grabados en las sesiones de coaching y cómo hacer que el equipo aprenda de las llamadas de sus compañeros de forma estructurada.

5. ONBOARDING COMERCIAL: DE CERO A CUOTA EN 90 DÍAS
Diseña el plan de onboarding de un nuevo vendedor usando el playbook como base: el roadmap de los primeros 90 días (conocimiento del producto, conocimiento del mercado, role plays, shadowing, primeras llamadas propias supervisadas), los hitos medibles de cada fase y cómo usar el playbook como hoja de ruta que el nuevo vendedor puede seguir de forma autónoma. Dame un template de plan de onboarding de 90 días con tareas semana a semana.

6. MANTENER EL PLAYBOOK VIVO Y ACTUALIZADO
Explica cómo evitar que el playbook se convierta en un documento muerto: el proceso de revisión periódica (quién, con qué frecuencia, qué disparadores activan una actualización urgente), cómo incorporar los aprendizajes de las retrospectivas de ventas en el playbook, cómo gestionar las versiones y comunicar los cambios al equipo y cómo medir si el playbook está siendo usado y está generando impacto en los resultados.

Termina con un plan de implementación de 60 días para crear el playbook desde cero o mejorar el existente, con las responsabilidades, los entregables de cada fase y las métricas de éxito.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear y mantener un sales playbook que mejore el rendimiento de todo el equipo comercial',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product wiki y gestión del conocimiento de producto',
                'description'      => 'Construye y mantiene el repositorio de conocimiento del equipo de producto: decisiones documentadas, histórico del roadmap y aprendizajes de experimentos que informan las decisiones futuras.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en gestión del conocimiento para equipos de producto. Quiero que me ayudes a construir el sistema que documenta las decisiones de producto, captura los aprendizajes de los experimentos y facilita el acceso al contexto histórico para que el equipo pueda tomar mejores decisiones más rápido.

Mi contexto:
- Tamaño del equipo de producto: [PMs, designers, data analysts]
- Tipo de producto: [SaaS B2B, consumer app, plataforma, marketplace...]
- Metodología: [Agile/Scrum, Shape Up, Kanban, mix]
- Herramientas de documentación: [Notion, Confluence, ProductBoard, otro]
- Problema principal: [decisiones que se repiten, contexto que se pierde, onboarding lento de nuevos PMs, experimentos sin documentar]

Con esa información, quiero que me entregues:

1. EL PRODUCT WIKI: ESTRUCTURA Y ARQUITECTURA
Diseña la arquitectura del wiki de producto: las secciones principales (visión y estrategia, roadmap histórico, especificaciones de features, decisiones de producto, aprendizajes de experimentos, métricas y OKRs), la jerarquía de documentos, las convenciones de nombrado y las reglas de gobierno (quién puede editar qué, proceso de revisión). Explica la diferencia entre documentación operativa (que cambia frecuentemente) y documentación estratégica (más estable) y cómo organizar cada tipo.

2. PRODUCT DECISION RECORDS: EL HISTORIAL DE DECISIONES
Define el formato de documento para registrar las decisiones importantes de producto: el contexto del mercado en ese momento, la decisión tomada, los datos y el razonamiento que la sustentan, las alternativas descartadas con sus pros y contras y las consecuencias esperadas. Explica cómo integrar los product decision records en el proceso de toma de decisiones para que se escriban antes de la implementación y cómo usarlos en las retrospectivas para aprender de las decisiones pasadas. Dame una plantilla completa.

3. EXPERIMENT REPOSITORY: DOCUMENTAR LOS APRENDIZAJES DE A/B TESTS
Diseña el sistema de documentación de experimentos: la ficha de cada experimento (hipótesis, métricas de éxito, diseño del test, resultados, aprendizajes y decisión tomada), cómo organizar el repositorio para que sea consultable por área de producto o tipo de hipótesis, y cómo usar los aprendizajes de los experimentos pasados para diseñar mejores hipótesis en el futuro. Dame una plantilla de ficha de experimento y explica cómo hacer el research review antes de diseñar un test nuevo.

4. HISTORICAL ROADMAP Y CONTEXTO DE DECISIONES PASADAS
Explica cómo documentar el histórico del roadmap: no solo qué se construyó sino por qué, qué problema resolvía, qué métricas movió y qué aprendimos de cada decisión estratégica. Define cómo estructurar el historial para que un PM nuevo pueda entender en horas el por qué del estado actual del producto y cómo usar el historical roadmap en las conversaciones con stakeholders para contextualizar las prioridades actuales.

5. ONBOARDING DEL PM: ACCEDER AL CONTEXTO DE PRODUCTO
Diseña el plan de onboarding de un nuevo Product Manager usando el wiki como base: los documentos que debe leer en la primera semana, las conversaciones que debe tener con los leads de cada área, los artefactos que debe producir en los primeros 30 días para demostrar comprensión del producto y el proceso de los primeros 90 días para pasar de receptor de contexto a contribuidor activo. Dame un template de onboarding de 90 días para un PM.

6. RITUALES DE CONOCIMIENTO EN PRODUCT
Define los rituales que mantienen el wiki vivo y actualizan el conocimiento colectivo del equipo de producto: la retrospectiva de quarter (qué aprendimos, cómo actualiza la estrategia), el postmortem de feature o experimento fallido (sin culpa, centrado en el sistema), el product review mensual donde el equipo comparte aprendizajes y el proceso de actualización del wiki después de cada ciclo de desarrollo. Explica cómo facilitar cada ritual para que genere documentación útil y no solo conversación.

Termina con un plan de 60 días para construir el wiki desde cero o reorganizar el existente, incluyendo qué documentar primero, quién es responsable de qué sección y cómo medir si el sistema está siendo adoptado por el equipo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Construir el repositorio de conocimiento del equipo de producto',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del conocimiento en RRHH: el capital intelectual de la empresa',
                'description'      => 'Gestiona el conocimiento de los empleados como un activo estratégico: programas de knowledge transfer, gestión de la sucesión y sistemas que reducen el riesgo de perder conocimiento crítico cuando alguien se va.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en gestión del capital intelectual y en los sistemas de gestión del conocimiento desde la perspectiva de RRHH. Quiero que me ayudes a construir el enfoque estratégico y los procesos que convierten el conocimiento de los empleados en un activo que la empresa retiene aunque las personas se vayan.

Mi contexto:
- Tamaño de la empresa y sector: [número de empleados, industria]
- Principal riesgo de conocimiento: [jubilaciones próximas, rotación alta en posiciones clave, crecimiento rápido sin documentación]
- Herramientas disponibles: [LMS, intranet, wiki, plataformas de e-learning]
- Madurez de la gestión del conocimiento: [inexistente, informal, intentos fallidos, sistema parcial]
- Roles más críticos desde el punto de vista del conocimiento: [describe las posiciones cuya salida sería más disruptiva]

Con esa información, quiero que me entregues:

1. MAPA DE CONOCIMIENTO CRÍTICO DE LA EMPRESA
Explica cómo identificar y mapear el conocimiento crítico de la organización: la diferencia entre conocimiento explícito (documentado) y conocimiento tácito (en la cabeza de las personas), cómo hacer el inventario de conocimiento por área y por persona, cómo calcular el riesgo de pérdida (probabilidad de rotación × impacto del conocimiento perdido) y cómo priorizar los focos de inversión en gestión del conocimiento. Dame una plantilla de mapa de conocimiento crítico.

2. PROGRAMAS DE KNOWLEDGE TRANSFER ESTRUCTURADO
Diseña el proceso de transferencia de conocimiento para roles críticos: el programa de mentoring entre el experto y el sucesor identificado, el proceso de documentación del conocimiento tácito (entrevistas de captura de conocimiento, job shadowing estructurado, comunidades de práctica), la duración óptima del proceso de transferencia según el tipo de conocimiento y cómo medir que la transferencia ha sido efectiva antes de que el experto se vaya.

3. GESTIÓN DE LA SUCESIÓN COMO GESTIÓN DEL CONOCIMIENTO
Explica la conexión entre los planes de sucesión y la gestión del conocimiento: cómo identificar a los sucesores potenciales, cómo diseñar las experiencias de desarrollo que les transfieren el conocimiento crítico del rol, cómo acelerar el proceso de transferencia cuando la salida es inminente y cómo gestionar la situación cuando no hay sucesor identificado y el experto se va de forma inesperada.

4. COMUNIDADES DE PRÁCTICA: EL CONOCIMIENTO COMPARTIDO
Define el modelo de comunidades de práctica para la empresa: qué son, cómo crearlas alrededor de las áreas de conocimiento más críticas, quién las facilita, con qué frecuencia se reúnen y qué actividades generan transferencia de conocimiento real (no solo conversación). Explica cómo medir el impacto de las comunidades de práctica en la retención y transferencia del conocimiento organizacional.

5. EL OFFBOARDING COMO MOMENTO DE CAPTURA DE CONOCIMIENTO
Diseña el proceso de offboarding orientado a la captura de conocimiento: las entrevistas de salida que van más allá de por qué se van (qué saben que solo ellos saben), los documentos de transición que deben producir, el período de overlap con el sucesor y cómo gestionar el conocimiento en el período entre la salida del experto y la llegada o formación del sucesor. Dame una checklist de offboarding centrada en la transferencia de conocimiento.

6. PLATAFORMAS Y TECNOLOGÍA PARA LA GESTIÓN DEL CONOCIMIENTO
Recomienda las herramientas tecnológicas para la gestión del conocimiento en RRHH según el tamaño de la empresa: los LMS (Learning Management Systems) para el conocimiento estructurado, las wikis y bases de conocimiento para el conocimiento operativo, las plataformas de preguntas y respuestas internas (tipo Guru o Tettra) para el conocimiento contextual y las herramientas de captura del conocimiento experto (entrevistas en vídeo, podcasts internos). Define los criterios de selección y la arquitectura recomendada según el tamaño y el presupuesto.

Termina con un plan de implementación de 90 días: el diagnóstico inicial del riesgo de conocimiento, los primeros programas de transferencia que lanzar y los indicadores que medirán el éxito del sistema.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar el sistema de gestión del conocimiento crítico de la empresa desde RRHH',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Financial knowledge management: documentar modelos y procesos',
                'description'      => 'Gestiona el conocimiento financiero de la empresa: los modelos financieros documentados, los supuestos explícitos y los procesos contables que sobreviven la rotación del equipo.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en gestión del conocimiento financiero y en la documentación de procesos y modelos en el área de finanzas. Quiero que me ayudes a construir el sistema que asegura que el conocimiento financiero de la empresa es accesible, comprensible y sobrevive la rotación del equipo.

Mi contexto:
- Tamaño del equipo financiero: [número de personas, roles: CFO, controller, FP&A, contabilidad]
- Tipo de empresa y sector: [startup, pyme, corporación, industria]
- Principal riesgo de conocimiento: [modelos financieros que solo entiende quien los construyó, procesos contables no documentados, rotación reciente de personal clave]
- Herramientas actuales: [Excel, Google Sheets, ERP, herramientas de FP&A]
- Estado de la documentación: [nada documentado, documentación desactualizada, buenas intenciones sin sistema]

Con esa información, quiero que me entregues:

1. DOCUMENTACIÓN DE MODELOS FINANCIEROS: MÁS ALLÁ DEL EXCEL
Explica cómo documentar los modelos financieros de forma que sean comprensibles para alguien que no los construyó: la hoja de supuestos explícita (con la fuente, la fecha y el responsable de cada supuesto), el mapa de flujos entre hojas, el registro de cambios y la guía de uso. Define los estándares de construcción de modelos que facilitan la documentación (convenciones de color, separación de inputs y outputs, nombres de rangos). Dame una plantilla de documentación de modelo financiero.

2. PROCESOS CONTABLES Y DE CIERRE: EL MANUAL DE OPERACIONES FINANCIERAS
Diseña el proceso de documentación de los procesos contables y de cierre mensual: el mapa de procesos del cierre (qué se hace, en qué orden, quién es responsable, qué herramientas se usan y qué pasa si algo falla), las checklist de cierre que reducen el error humano y el manual de operaciones que permite que otro miembro del equipo ejecute el cierre en caso de emergencia. Dame una plantilla de manual de cierre mensual.

3. KNOWLEDGE TRANSFER EN EL EQUIPO FINANCIERO
Define el proceso de transferencia de conocimiento cuando entra o sale alguien del equipo financiero: el offboarding financiero (qué documentar, qué accesos transferir, qué procesos explicar antes de irse), el onboarding financiero (en qué orden abordar el conocimiento del área, qué documentos leer primero, con quién hablar) y el período de overlap mínimo recomendado para distintos roles (controller vs. analista FP&A vs. contable).

4. SUPUESTOS Y CONTEXTO: LA MEMORIA DE LAS DECISIONES FINANCIERAS
Explica cómo documentar el contexto de las decisiones financieras más importantes: los supuestos del presupuesto anual (por qué el crecimiento era ese número, qué condiciones de mercado se asumían), las decisiones de política contable y sus razones, los cambios metodológicos en el modelo de negocio y cómo estos documentos ayudan al equipo a interpretar los históricos cuando el contexto original ha cambiado.

5. AUDITORÍA Y COMPLIANCE: LA DOCUMENTACIÓN COMO PROTECCIÓN
Define qué documentación financiera debe existir por obligación legal o de auditoría y cómo organizarla para que las auditorías sean eficientes: el expediente de cierre anual, la documentación de precios de transferencia, los controles internos documentados y el trail de aprobaciones. Explica cómo diseñar el archivo financiero para que sobreviva el cambio de auditor externo sin necesitar que alguien del equipo explique todo desde cero.

6. HERRAMIENTAS Y REPOSITORIO DEL CONOCIMIENTO FINANCIERO
Recomienda la arquitectura de herramientas para el repositorio de conocimiento financiero: cómo organizar el servidor o drive financiero (jerarquía de carpetas, convenciones de nombrado, política de versiones), cuándo usar una wiki para el conocimiento procedimental versus el drive para los archivos de trabajo, y cómo gestionar el acceso al conocimiento financiero sensible (quién ve qué) sin que la seguridad impida el acceso al conocimiento que el equipo necesita.

Termina con un plan de 60 días para documentar los tres procesos más críticos del área financiera, incluyendo quién es responsable de cada documentación y el estándar mínimo de calidad que debe cumplir cada documento.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Documentar modelos y procesos financieros para reducir la dependencia de personas clave',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Legal knowledge management: la base de conocimiento jurídica',
                'description'      => 'Gestiona el conocimiento jurídico del despacho o departamento legal: la base de datos de precedentes internos, las cláusulas tipo y el sistema que convierte la experiencia de cada asunto en un activo colectivo.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en gestión del conocimiento jurídico para despachos de abogados y departamentos legales de empresa. Quiero que me ayudes a construir el sistema que captura el conocimiento generado en cada asunto y lo convierte en un activo que beneficia a todo el equipo en los casos futuros.

Mi contexto:
- Tipo de organización: [despacho boutique, despacho grande, departamento in-house de empresa]
- Especialidad jurídica principal: [área de práctica o mix]
- Tamaño del equipo jurídico: [número de abogados, socios, asociados, paralegal]
- Estado actual del conocimiento: [cada abogado tiene sus propios archivos, existe un intento de base de conocimiento, dependencia de los socios más antiguos]
- Herramientas disponibles: [sistema de gestión de asuntos, drive compartido, herramientas específicas de legaltech]

Con esa información, quiero que me entregues:

1. ARQUITECTURA DEL KNOWLEDGE MANAGEMENT JURÍDICO
Define la arquitectura del sistema de gestión del conocimiento jurídico: las capas del conocimiento (precedentes internos, jurisprudencia curada, doctrina relevante, cláusulas tipo, checklists procedimentales, modelos de documentos, aprendizajes de asuntos), cómo organizar cada capa, quién es responsable de mantenerla actualizada y cómo indexar el contenido para que sea recuperable cuando un abogado está en medio de un asunto y necesita encontrar un precedente en cinco minutos.

2. BASE DE PRECEDENTES INTERNOS: EL KNOW-HOW DEL DESPACHO
Diseña el sistema de captura de precedentes internos: la ficha de cada asunto con los elementos de conocimiento extraíbles (argumentos jurídicos que funcionaron, estrategia procesal, negociación del acuerdo, lecciones aprendidas), el proceso de debriefing al cierre del asunto (quién lo hace, cuánto dura, qué preguntas se hacen), cómo anonimizar la información del cliente para que el conocimiento sea compartible y cómo estructurar la base para que sea searchable por tipo de asunto, materia, tribunal o resultado. Dame una plantilla de ficha de precedente interno.

3. BIBLIOTECA DE CLÁUSULAS Y MODELOS DOCUMENTALES
Explica cómo construir y mantener la biblioteca de cláusulas tipo y modelos de documentos: el proceso de estandarización (quién valida que una cláusula entra en la biblioteca, con qué criterio de calidad), cómo gestionar las versiones cuando cambia la legislación o la jurisprudencia, cómo documentar el contexto de uso de cada cláusula (cuándo usar esta versión versus la alternativa) y cómo integrar la biblioteca en el flujo de trabajo de redacción de contratos. Dame una estructura de biblioteca de cláusulas para el área de [especialidad].

4. KNOWLEDGE SHARING EN EL EQUIPO JURÍDICO
Define los rituales de intercambio de conocimiento jurídico: el seminario interno (con qué frecuencia, quién presenta, sobre qué temas), el newsletter jurídico interno de novedades legislativas y jurisprudenciales, el debriefing de asunto relevante (cómo extraer el conocimiento de un caso importante para que beneficie a todo el equipo) y el programa de mentoring entre socios y asociados como mecanismo de transferencia del conocimiento tácito.

5. ONBOARDING JURÍDICO: ACCEDER AL CONOCIMIENTO DEL DESPACHO
Diseña el plan de onboarding de un nuevo abogado que le permita acceder al conocimiento acumulado del despacho: los archivos que debe revisar en la primera semana, el acceso guiado a la base de precedentes relevantes para su área, los modelos y cláusulas que debe dominar antes de hacer trabajo autónomo y el proceso de supervisión del trabajo del junior que garantiza la transferencia del criterio jurídico que no está en ningún documento. Dame un plan de onboarding de 60 días para un abogado junior.

6. TECNOLOGÍA PARA EL KNOWLEDGE MANAGEMENT JURÍDICO
Recomienda las herramientas tecnológicas de legaltech para la gestión del conocimiento jurídico según el tamaño del despacho: los sistemas de gestión del conocimiento jurídico especializados (iManage, NetDocuments, Luminance), cuándo tiene sentido invertir en estas herramientas versus usar soluciones generalistas (Notion, SharePoint), cómo integrar la IA en el sistema de conocimiento jurídico para la búsqueda semántica en precedentes y cómo gestionar la confidencialidad cuando se usan herramientas en la nube.

Termina con un plan de implementación de 90 días para construir la base de conocimiento desde cero o mejorar la existente, con los hitos de cada fase y las métricas que indicarán que el sistema está generando valor real para el equipo.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir la base de conocimiento jurídica del despacho o departamento legal',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer knowledge: documentar lo que sabes de los clientes',
                'description'      => 'Captura y gestiona el conocimiento sobre los clientes: playbooks por perfil, notas de conversaciones y el sistema que permite al nuevo CSM continuar la relación sin empezar de cero.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en gestión del conocimiento de clientes para equipos de customer success. Quiero que me ayudes a construir el sistema que captura el conocimiento sobre cada cliente y lo hace accesible para que la continuidad de la relación no dependa de la memoria de una sola persona.

Mi contexto:
- Tipo de producto o servicio: [SaaS B2B, servicios profesionales, plataforma...]
- Tamaño del equipo de CS: [número de CSMs y CS managers]
- Número de cuentas gestionadas: [total y por CSM]
- CRM o herramienta de CS: [Salesforce, HubSpot, Gainsight, ChurnZero, otro]
- Problema principal: [transición de cuentas problemática, conocimiento del cliente que se pierde, reuniones donde hay que repetir el contexto]

Con esa información, quiero que me entregues:

1. EL ACCOUNT BRIEF: LA FICHA DE CONOCIMIENTO DE CADA CLIENTE
Define la estructura del account brief: el documento vivo de cada cuenta que captura el conocimiento acumulado. Incluye las secciones de contexto del cliente (industria, modelo de negocio, KPIs del cliente, estructura del equipo y mapa de stakeholders), la historia de la relación (hitos importantes, problemas resueltos, promesas hechas), el estado de salud actual (métricas de uso, NPS, riesgos identificados) y los próximos pasos acordados. Dame una plantilla completa lista para usar en mi herramienta de CS.

2. NOTAS DE CONVERSACIÓN: CAPTURAR EL CONOCIMIENTO EN TIEMPO REAL
Diseña el sistema de toma de notas de conversaciones con el cliente: el formato estándar (contexto previo, temas tratados, decisiones acordadas, próximos pasos con responsable y fecha), cuándo y cómo registrar las notas en el CRM (durante la llamada vs. inmediatamente después), qué información debe quedar accesible para cualquier miembro del equipo y cómo usar la IA (Otter, Fireflies, Gong) para asistir en la captura sin perder la calidad de la escucha activa.

3. PLAYBOOKS POR PERFIL DE CLIENTE
Diseña el sistema de playbooks por segmento o perfil de cliente: cómo categorizar los clientes por características relevantes para el CS (tamaño, madurez digital, nivel de adopción, sector), qué elementos del playbook de éxito son específicos de cada perfil (cadencia de contacto, tipo de recursos, métricas de éxito relevantes, riesgos típicos) y cómo usar el historial de clientes similares para informar la estrategia con un cliente nuevo. Dame la estructura de un playbook por perfil con los elementos clave.

4. TRANSICIÓN DE CUENTA: TRANSFERIR EL CONOCIMIENTO ENTRE CSMs
Define el proceso de transición de cuenta cuando un CSM deja la empresa o rota a otras cuentas: la reunión de briefing con el nuevo CSM (duración, agenda, documentos que revisar antes), el período de co-gestión recomendado, la comunicación al cliente (cuándo notificarle, qué mensaje darle, cómo presentar al nuevo CSM) y las señales de alerta que indican que la transición está comprometiendo la relación. Dame una checklist de transición de cuenta.

5. VOZ DEL CLIENTE: CAPTURAR Y COMPARTIR LOS INSIGHTS DE CLIENTE
Diseña el proceso para capturar y distribuir internamente la inteligencia de cliente generada en las conversaciones de CS: cómo estructurar el feedback del cliente para que llegue a producto, marketing y ventas en un formato accionable, el ritual de product feedback weekly donde el equipo de CS comparte los insights más relevantes, y cómo construir la biblioteca de citas de cliente que el equipo de marketing puede usar (con permiso del cliente) en materiales de venta.

6. MÉTRICAS DE CALIDAD DEL CONOCIMIENTO DE CLIENTE
Define los indicadores que miden si el sistema de conocimiento de cliente está funcionando: el porcentaje de cuentas con account brief actualizado, el tiempo medio de preparación de una reunión de renovación, la tasa de éxito de las transiciones de cuenta medida en churn post-transición y la satisfacción del equipo de CS con el acceso al conocimiento. Explica cómo usar estas métricas para identificar los gaps del sistema y priorizarlos.

Termina con un plan de implementación de 30 días para comenzar a capturar el conocimiento de cliente de forma sistemática, priorizando las cuentas de mayor riesgo o mayor valor.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 30,
                'use_case'         => 'Sistematizar la captura y transferencia del conocimiento sobre clientes en el equipo de CS',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Gestión del conocimiento del freelance: tu ventaja acumulada',
                'description'      => 'Construye el sistema que captura tu propio aprendizaje: la base de conocimiento personal, las plantillas reutilizables y el proceso de retrospectiva que convierte cada proyecto en aprendizaje para el siguiente.',
                'prompt_content'   => <<<'PROMPT'
Eres un experto en productividad y en la construcción de sistemas de conocimiento personal para freelancers y trabajadores independientes. Quiero que me ayudes a construir el sistema que captura lo que aprendo en cada proyecto y lo convierte en una ventaja competitiva acumulada que me permite hacer mejor trabajo más rápido con el tiempo.

Mi contexto:
- Especialidad como freelance: [desarrollo, diseño, consultoría, redacción, marketing...]
- Años de experiencia como freelance: [número]
- Herramientas de trabajo: [Notion, Obsidian, Google Drive, otro]
- Estado actual de mi gestión del conocimiento: [nada sistematizado, algunas carpetas de plantillas, buenas intenciones sin sistema]
- Principal problema: [repetir el mismo trabajo desde cero, no recordar cómo resolví un problema similar, no poder delegar porque nada está documentado]

Con esa información, quiero que me entregues:

1. EL PKM DEL FREELANCE: SISTEMA DE CONOCIMIENTO PERSONAL
Diseña el Personal Knowledge Management (PKM) del freelance: las áreas de conocimiento que debo capturar (conocimiento técnico de la especialidad, conocimiento de cliente y sector, procesos propios, plantillas reutilizables, reflexiones y aprendizajes), la herramienta o combinación de herramientas que mejor se adapta a mi flujo de trabajo y la estructura mínima que garantiza que el sistema sea consultable y no se convierta en un archivo muerto. Explica el método Zettelkasten, PARA y otros frameworks de PKM y cuál es el más adecuado para un freelance en mi especialidad.

2. BIBLIOTECA DE PLANTILLAS: EL ACTIVO MÁS VALIOSO DEL FREELANCE
Explica cómo construir y mantener la biblioteca de plantillas reutilizables: los tipos de plantillas que todo freelance debería tener (propuesta comercial, contrato, informe de avance, informe final, email de onboarding del cliente, email de cierre del proyecto), cómo crear plantillas que sean flexibles pero ahorren tiempo real, cómo versionarlas cuando el mercado cambia y cómo decidir qué merece convertirse en plantilla y qué es demasiado específico para reutilizar.

3. RETROSPECTIVA DE PROYECTO: APRENDER DE CADA TRABAJO
Define el proceso de retrospectiva de proyecto: las preguntas que debo hacerme al cierre de cada proyecto (qué salió bien y por qué, qué salió mal y cómo evitarlo, qué haría diferente, qué aprendí que es aplicable a otros proyectos, qué podría estandarizar o automatizar), el tiempo que debe llevar una retrospectiva honesta pero eficiente, cómo capturar los aprendizajes en el sistema de conocimiento y cómo convertir los patrones que aparecen en varias retrospectivas en mejoras del proceso.

4. DOCUMENTACIÓN DE PROCESOS PROPIOS: EL MANUAL DEL FREELANCE
Diseña el proceso de documentación de los procesos propios del freelance: el onboarding del cliente (los pasos desde que firma el contrato hasta que empieza el trabajo), el proceso de entrega (cómo estructuras las revisiones, cómo presentas el trabajo final), el proceso de facturación y seguimiento de cobros y los protocolos de comunicación que estableces con cada cliente. Explica por qué documentar los propios procesos es rentable aunque trabajes solo.

5. GESTIÓN DEL CONOCIMIENTO DE CLIENTES Y SECTORES
Define el sistema de captura de conocimiento sobre clientes y sectores: la ficha de cliente (qué información capturar sobre el cliente, su sector, su modelo de negocio y sus preferencias de trabajo), la carpeta de sector (los aprendizajes específicos de cada industria en la que trabajas que informan el siguiente proyecto), y cómo usar este conocimiento acumulado para hacer mejores propuestas, cobrar más y diferenciarte de los freelancers que empiezan de cero con cada cliente.

6. EL SISTEMA DE APRENDIZAJE CONTINUO DEL FREELANCE
Diseña el sistema de aprendizaje continuo que mantiene al freelance competitivo: cómo capturar y procesar los recursos de aprendizaje (cursos, libros, artículos, podcasts) de forma que el conocimiento quede en el sistema y no solo en la cabeza en el momento de consumirlo, cómo identificar los gaps de conocimiento que limitan el crecimiento de la tarifa y cómo planificar el aprendizaje anual para que esté alineado con la dirección estratégica del negocio freelance.

Termina con un plan de implementación de 30 días para arrancar el sistema desde cero: qué herramienta elegir, qué construir primero y cómo integrar el sistema en el flujo de trabajo diario sin que se convierta en una tarea más que no tienes tiempo de hacer.
PROMPT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 25,
                'use_case'         => 'Construir el sistema de gestión del conocimiento personal del freelance',
                'vote_score'       => 41,
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
