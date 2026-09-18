<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills367Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1. Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Documentar y transferir el conocimiento de campañas de marketing',
                'description'      => 'Captura el aprendizaje acumulado en cada campaña para que el equipo no repita errores y pueda iterar sobre el éxito. Incluye plantillas de post-mortem, repositorios de assets y protocolos de traspaso. Garantiza la continuidad aunque cambien las personas.',
                'prompt_content'   => <<<'EOT'
Actúa como consultor de gestión del conocimiento especializado en equipos de marketing. Tu objetivo es ayudarme a construir un sistema sólido para documentar y transferir el conocimiento generado por cada campaña, de modo que el equipo no dependa de la memoria individual y pueda escalar de forma sostenible.

**Contexto**
Los equipos de marketing acumulan conocimiento valioso en cada campaña: qué mensajes resonaron, qué canales funcionaron mejor, qué creatividades fracasaron y por qué. Sin embargo, ese aprendizaje suele vivir en la cabeza de una o dos personas o en conversaciones de Slack que desaparecen. Cuando alguien sale del equipo o se asigna un nuevo proyecto, se pierde meses de aprendizaje.

**Lo que necesito**

1. **Plantilla de post-mortem de campaña**: crea una plantilla detallada en formato Markdown con secciones para objetivos vs. resultados, hipótesis iniciales, canales usados, creatividades probadas, segmentos de audiencia, aprendizajes positivos, errores cometidos, recomendaciones para futuras campañas y archivos de referencia vinculados.

2. **Sistema de etiquetado y categorización**: propone un esquema de tags para organizar el conocimiento por tipo de campaña (awareness, conversión, retención), canal (email, paid social, SEO), industria o segmento, y nivel de impacto del aprendizaje (bajo / medio / alto).

3. **Protocolo de traspaso**: escribe un checklist paso a paso que debe seguir cualquier miembro del equipo cuando deja un proyecto o cambia de rol. Incluye qué documentos actualizar, a quién notificar, cómo hacer sesiones de knowledge transfer en vivo y cómo archivar materiales en el repositorio.

4. **Guía de adopción**: explica cómo conseguir que el equipo realmente use el sistema. Incluye rituales de equipo (reuniones de revisión mensuales, review de post-mortems antes de lanzar una nueva campaña), incentivos, y cómo medir si el sistema se está usando.

5. **Ejemplo práctico**: simula un post-mortem completo para una campaña ficticia de email marketing que tuvo un open rate del 18 % (por debajo del objetivo del 25 %) debido a líneas de asunto genéricas. Rellena la plantilla completa con datos realistas.

**Formato de salida**
- Devuelve cada sección con un encabezado H2 claro.
- Usa listas numeradas para pasos secuenciales y viñetas para listas de referencia.
- El post-mortem de ejemplo debe ir al final, claramente separado.
- Extensión total: suficiente para ser un documento de trabajo real, no un resumen superficial.

**Restricciones**
- Usa terminología en español, pero puedes dejar términos técnicos ampliamente aceptados en inglés (post-mortem, brief, KPI).
- No asumas ninguna herramienta específica; el sistema debe poder funcionar en Notion, Confluence o incluso Google Docs.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Crear sistema de documentación de campañas para equipos de marketing',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 2. Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Crear una wiki técnica efectiva para equipos de desarrollo de software',
                'description'      => 'Una wiki técnica bien estructurada reduce el tiempo de onboarding y evita que el conocimiento se silos en personas concretas. Aprende a diseñar la arquitectura de información, escribir documentación que se mantenga actualizada y crear rituales de mantenimiento. El resultado es un equipo más autónomo y resiliente ante la rotación.',
                'prompt_content'   => <<<'EOT'
Actúa como ingeniero de software senior con experiencia en gestión del conocimiento y documentación técnica. Ayúdame a diseñar y poner en marcha una wiki técnica para un equipo de desarrollo de entre 5 y 20 personas.

**Problema que quiero resolver**
El equipo tiene conocimiento valioso disperso: algunos desarrolladores saben cómo está configurado el entorno de producción, otros conocen las decisiones de arquitectura pasadas (ADRs), y los más antiguos recuerdan por qué ciertos patrones se adoptaron. Cuando alguien sale o llega alguien nuevo, hay un cuello de botella enorme. Quiero eliminar ese problema.

**Entregables que necesito**

1. **Arquitectura de la wiki**: propón una estructura de carpetas y categorías para organizar el conocimiento técnico. Incluye secciones para: onboarding, arquitectura del sistema, guías de configuración de entornos, runbooks operativos, decisiones de diseño (ADRs), convenciones de código, APIs internas, glosario técnico y postmortems de incidentes.

2. **Plantilla de ADR (Architecture Decision Record)**: crea una plantilla completa con campos para contexto, opciones consideradas, decisión tomada, consecuencias positivas, consecuencias negativas, estado (propuesto / aceptado / obsoleto) y fecha.

3. **Guía para escribir documentación que dure**: lista los principios para escribir documentación técnica que se mantenga útil en el tiempo. Incluye: cómo evitar duplicación, cuándo actualizar vs. archivar, cómo vincular documentos entre sí, y cómo escribir para el lector del futuro que no tiene tu contexto actual.

4. **Runbook de ejemplo**: escribe un runbook completo para un escenario ficticio: reiniciar un worker de colas en producción cuando está bloqueado. Incluye síntomas, pasos de diagnóstico, comandos exactos, verificación de solución y escalado si no funciona.

5. **Ritual de mantenimiento**: propón un proceso ligero para mantener la wiki actualizada. Define quién es responsable de cada sección, con qué frecuencia se revisa, cómo detectar documentación obsoleta, y cómo incorporar el hábito de documentar en el flujo de trabajo diario (por ejemplo, al cerrar un ticket o desplegar un cambio significativo).

6. **Métricas de salud de la wiki**: define 3-5 indicadores para saber si la wiki está siendo útil (por ejemplo, número de búsquedas sin resultado, tiempo medio de onboarding, número de páginas sin editar en más de 6 meses).

**Formato de salida**
Devuelve cada entregable con su propio encabezado. Usa bloques de código para comandos y plantillas. Sé específico y práctico; evita respuestas genéricas que no se puedan aplicar directamente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar wiki técnica para equipos de desarrollo de software',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            // 3. Diseño
            [
                'profession_id'    => 3,
                'title'            => 'Construir una biblioteca de assets y decisiones de diseño documentadas',
                'description'      => 'Un equipo de diseño sin documentación repite decisiones ya tomadas y pierde coherencia visual cuando cambian sus miembros. Aprende a documentar principios, decisiones y assets de forma que cualquier diseñador nuevo pueda incorporarse rápidamente. Crea una fuente única de verdad para el sistema de diseño.',
                'prompt_content'   => <<<'EOT'
Actúa como design systems lead con experiencia en gestión del conocimiento para equipos de diseño de producto. Ayúdame a construir una biblioteca de assets y decisiones de diseño documentadas que funcione como fuente única de verdad para el equipo.

**Problema**
El equipo de diseño trabaja de forma descoordinada: cada diseñador tiene sus propios componentes, las decisiones sobre tipografía o color no están escritas en ningún lado, y cuando llega alguien nuevo tarda semanas en entender el sistema. Además, las mismas decisiones se debaten una y otra vez porque no hay registro de por qué se tomaron.

**Entregables que necesito**

1. **Estructura de la biblioteca de conocimiento de diseño**: propón cómo organizar el repositorio de conocimiento del equipo. Incluye secciones para: principios de diseño, sistema de tokens (color, tipografía, espaciado), decisiones de diseño registradas (DDRs - Design Decision Records), guías de uso de componentes, biblioteca de iconos y assets, changelog de versiones del sistema, y recursos de inspiración y referencia.

2. **Plantilla de DDR (Design Decision Record)**: crea una plantilla para documentar decisiones de diseño con campos para: contexto del problema, opciones exploradas (con capturas o sketches), decisión tomada, justificación basada en principios o datos, impacto en accesibilidad, y fecha y autor.

3. **Guía de onboarding para diseñadores nuevos**: escribe un documento de bienvenida que explique cómo navegar el sistema de conocimiento, dónde encontrar cada tipo de recurso, cómo proponer cambios al sistema y qué herramientas usa el equipo.

4. **Ejemplo de DDR completo**: simula una decisión real: elegir entre usar 4px o 8px como unidad base de espaciado para el sistema de diseño. Rellena la plantilla con argumentos reales, referencia a sistemas de diseño conocidos y decisión final justificada.

5. **Proceso de contribución**: define cómo un diseñador puede añadir, modificar o deprecar un componente o decisión. Incluye quién tiene que revisar, cómo se documenta el cambio y cómo se comunica al equipo.

6. **Rituales de equipo**: propón reuniones o procesos recurrentes para mantener el sistema vivo: revisión de tokens, retrospectivas de diseño, sesiones de critique documentadas, y cómo incorporar el aprendizaje de proyectos al repositorio común.

**Formato de salida**
Usa encabezados claros para cada sección. Incluye ejemplos concretos, no teoría abstracta. Las plantillas deben estar en formato que pueda copiarse directamente a Notion, Confluence o un archivo Markdown.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Documentar sistema de diseño y decisiones visuales del equipo',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            // 4. Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Capturar y transferir el conocimiento de cierre de ventas en el equipo comercial',
                'description'      => 'Los mejores vendedores de un equipo acumulan tácticas, objeciones respondidas y patrones de éxito que raramente se comparten. Documenta ese conocimiento para que todo el equipo venda con la misma efectividad. Reduce la dependencia de estrellas individuales y acelera el onboarding de comerciales nuevos.',
                'prompt_content'   => <<<'EOT'
Actúa como director comercial con experiencia en formación y gestión del conocimiento en equipos de ventas B2B. Ayúdame a construir un sistema para capturar, organizar y transferir el conocimiento de cierre de ventas de los miembros más experimentados del equipo al resto.

**El problema que quiero resolver**
Tengo un equipo de ventas donde dos o tres personas generan el 70 % de los resultados. Cuando les pregunto qué hacen diferente, responden con intuición difícil de replicar. Si esas personas salen, perdemos años de aprendizaje. Necesito sistematizar ese conocimiento.

**Entregables que necesito**

1. **Entrevista de extracción de conocimiento**: diseña una guía de preguntas para entrevistar a los mejores vendedores del equipo y extraer su conocimiento tácito. Incluye preguntas sobre: cómo cualifican un lead, cómo descubren el dolor real del cliente, qué dicen en los primeros 5 minutos de una demo, cómo manejan las objeciones más frecuentes, qué señales usan para saber que el deal está en riesgo, y cómo cierran cuando hay resistencia de precio.

2. **Repositorio de objeciones y respuestas**: crea una estructura para documentar las 10 objeciones más comunes en ventas B2B con sus respuestas. Para cada objeción incluye: la objeción exacta como la dice el prospecto, la emoción o preocupación real detrás, 2-3 respuestas alternativas según el perfil del interlocutor, y el siguiente paso recomendado tras responder.

3. **Plantilla de win/loss review**: diseña una plantilla para analizar cada deal cerrado (ganado o perdido) capturando: perfil del cliente, proceso de decisión, competidores involucrados, objeciones superadas, razón de la decisión final, aprendizajes accionables y cambios recomendados en el proceso de venta.

4. **Guía de onboarding comercial**: escribe un plan de 30 días para incorporar un nuevo vendedor usando el repositorio de conocimiento. Semana a semana, qué debe leer, qué llamadas debe escuchar en grabación, qué roleplay debe practicar y con qué métricas se evalúa su progreso.

5. **Ritual semanal de conocimiento**: propón un ritual de equipo de 30 minutos a la semana donde los vendedores compartan aprendizajes recientes. Define la estructura de la sesión, cómo documentar lo que sale y cómo integrarlo al repositorio.

**Formato de salida**
Entregables separados con encabezados claros. Las plantillas deben ser copiables directamente. El repositorio de objeciones debe usar formato de tabla o lista estructurada.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Sistematizar el conocimiento táctico de los mejores vendedores del equipo',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            // 5. Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Construir una base de conocimiento de decisiones de producto',
                'description'      => 'Las decisiones de producto sin documentar generan deuda de contexto: el equipo debate una y otra vez sobre lo mismo, y los nuevos PMs no entienden por qué el producto está como está. Aprende a registrar decisiones, hipótesis y aprendizajes de manera que el equipo tenga siempre el contexto completo. Acelera la toma de decisiones futuras y reduce conflictos.',
                'prompt_content'   => <<<'EOT'
Actúa como Product Manager senior con experiencia en organizaciones de producto maduras. Ayúdame a diseñar una base de conocimiento de decisiones de producto (Product Decision Log) que permita al equipo tomar mejores decisiones más rápido y onboardear nuevos PMs sin pérdida de contexto.

**El problema**
Cada vez que entra un nuevo miembro al equipo de producto, hay semanas de preguntas repetidas: "¿por qué no usamos X enfoque?", "¿qué pasó con aquella funcionalidad que se eliminó?", "¿cómo decidimos que el precio sería así?". Las decisiones existen en correos, conversaciones de Slack o en la memoria de las personas. Quiero cambiar eso.

**Entregables que necesito**

1. **Plantilla de PRD enriquecido con contexto de decisión**: toma un PRD estándar y añade secciones específicas para capturar: hipótesis de negocio detrás de la feature, alternativas descartadas y por qué, métricas de éxito predefinidas, criterios de pivote o cancelación, y registro de decisiones tomadas durante el desarrollo con su justificación.

2. **Product Decision Record (PDR)**: diseña una plantilla ligera para documentar decisiones de producto importantes que no ameritan un PRD completo. Incluye: pregunta de decisión, contexto, opciones evaluadas, evidencia utilizada, decisión tomada, responsable, fecha y fecha de revisión prevista.

3. **Repositorio de hipótesis validadas e invalidadas**: propón una estructura para mantener un registro de todas las hipótesis que el equipo ha testado. Incluye: hipótesis, experimento realizado, resultado, conclusión y implicaciones para el producto.

4. **Guía de onboarding para PMs nuevos**: escribe un plan de inmersión de 4 semanas usando la base de conocimiento. Qué documentos leer en qué orden, con quién reunirse, qué preguntas hacer y cómo empezar a contribuir al repositorio desde la primera semana.

5. **Proceso de mantenimiento**: define con qué frecuencia se revisa la base de conocimiento, quién es responsable de qué sección, cómo se archivan decisiones obsoletas y cómo se enlaza el repositorio con el roadmap y los tickets de desarrollo.

6. **Ejemplo completo**: simula un PDR real para la decisión de eliminar un plan de precios freemium de un producto SaaS. Rellena todos los campos con argumentos, datos inventados pero realistas, y la decisión final justificada.

**Formato de salida**
Encabezados claros para cada entregable. Plantillas en formato copiable. El ejemplo debe ser suficientemente detallado para usarse como referencia.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Documentar decisiones de producto para reducir deuda de contexto',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            // 6. RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Diseñar un programa de transferencia de conocimiento para la gestión del talento',
                'description'      => 'La rotación de personal y las jubilaciones representan un riesgo real para cualquier organización. Diseña un programa estructurado para capturar el conocimiento crítico antes de que se vaya con las personas. Incluye entrevistas de salida efectivas, mentoring inverso y protocolos de sucesión que protegen el know-how institucional.',
                'prompt_content'   => <<<'EOT'
Actúa como especialista en gestión de talento y desarrollo organizacional con experiencia en programas de transferencia de conocimiento. Ayúdame a diseñar un programa integral para que la organización no pierda conocimiento crítico cuando rotan sus empleados.

**Contexto**
La empresa tiene un problema de dependencia de personas clave: hay empleados con 10 o más años de experiencia cuyo conocimiento no está documentado. Cuando se van, sea por renuncia o jubilación, el equipo tarda meses en recuperar la productividad. Necesito un programa sistemático para gestionar esto.

**Entregables que necesito**

1. **Mapa de conocimiento crítico**: diseña una metodología para identificar qué conocimiento es crítico en la organización. Incluye preguntas para hacer a los líderes de equipo, criterios para priorizar el conocimiento por riesgo de pérdida y una plantilla de inventario de conocimiento por persona.

2. **Protocolo de entrevista de captura de conocimiento**: escribe una guía detallada para entrevistar a un empleado antes de que se vaya. Incluye preguntas sobre: procesos que solo él conoce, contactos clave, trucos y atajos que ha desarrollado, problemas recurrentes y cómo los resuelve, y decisiones históricas que hay que entender para no repetir errores.

3. **Programa de mentoring y shadowing**: diseña un programa de 60-90 días para transferir conocimiento entre un empleado saliente y su sucesor. Incluye semana a semana qué actividades hacer, cómo documentar lo aprendido, hitos de validación y cómo medir que la transferencia fue exitosa.

4. **Entrevista de salida orientada al conocimiento**: diseña una entrevista de salida que vaya más allá de los motivos de renuncia y capture conocimiento institucional valioso. Incluye preguntas sobre proyectos pendientes, riesgos que la persona conocía pero no ha escalado, y recomendaciones para su sucesor.

5. **Plan de sucesión basado en conocimiento**: propón un proceso para identificar y preparar sucesores para posiciones críticas. Incluye cómo evaluar brechas de conocimiento, cómo diseñar planes de desarrollo personalizados, y cómo medir la preparación del sucesor.

6. **Indicadores del programa**: define 5 KPIs para medir si el programa de transferencia de conocimiento está funcionando. Incluye cómo medirlos y cuál sería un buen resultado a 12 meses.

**Formato de salida**
Cada entregable con encabezado claro. Las guías de entrevista en formato de preguntas directas. Las plantillas copiables. Evita generalidades: cada recomendación debe ser accionable.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Proteger el conocimiento institucional ante la rotación de talento clave',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            // 7. Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Documentar procesos financieros críticos para garantizar la continuidad operativa',
                'description'      => 'Los procesos financieros complejos suelen vivir en la cabeza de pocas personas, lo que crea un riesgo operativo significativo. Aprende a documentar cierres contables, procesos de tesorería y controles internos de forma que cualquier persona capacitada pueda ejecutarlos. Reduce el riesgo de errores y garantiza la continuidad ante imprevistos.',
                'prompt_content'   => <<<'EOT'
Actúa como controller financiero con experiencia en gestión del conocimiento y continuidad de negocio. Ayúdame a construir un sistema de documentación de procesos financieros que garantice que el área de finanzas pueda operar incluso si sus personas clave no están disponibles.

**El problema**
El área de finanzas tiene procesos críticos (cierre mensual, conciliaciones, gestión de tesorería, reporting regulatorio) que solo conocen en detalle dos o tres personas. Si una de ellas está de baja o renuncia, hay riesgo real de errores, retrasos y problemas de cumplimiento.

**Entregables que necesito**

1. **Inventario de procesos críticos**: diseña una metodología para mapear todos los procesos del área de finanzas y clasificarlos por criticidad (alto, medio, bajo) según tres criterios: impacto en el negocio si falla, frecuencia de ejecución, y número de personas que saben ejecutarlo. Incluye una plantilla de inventario en formato de tabla.

2. **Plantilla de procedimiento financiero estándar (SOP)**: crea una plantilla para documentar un proceso financiero paso a paso. Incluye secciones para: objetivo del proceso, frecuencia, sistemas y herramientas utilizados, roles involucrados, precondiciones, pasos detallados (con screenshots si aplica), controles y verificaciones, errores comunes y cómo evitarlos, y a quién escalar si hay un problema.

3. **SOP de ejemplo completo**: rellena la plantilla para el proceso de cierre contable mensual. Incluye todos los pasos típicos: revisión de asientos pendientes, conciliaciones bancarias, revisión de provisiones, cierre de módulos, generación de balances, y revisión final por el controller.

4. **Mapa de dependencias de conocimiento**: explica cómo crear un diagrama que muestre qué personas saben qué procesos, identificando dónde hay dependencias únicas (solo una persona sabe ejecutar algo) y priorizando esos puntos para documentación urgente.

5. **Plan de redundancia de conocimiento**: diseña un plan para que cada proceso crítico sea conocido por al menos dos personas. Incluye cómo organizar sesiones de transferencia, cómo certificar que alguien ha aprendido el proceso, y cómo mantener el conocimiento actualizado cuando cambian los sistemas.

6. **Calendario de mantenimiento de SOPs**: propón un proceso para revisar y actualizar la documentación regularmente. Define quién revisa qué, con qué frecuencia, cómo se valida que la documentación sigue siendo correcta, y cómo se gestiona el control de versiones.

**Formato de salida**
Encabezados claros. El SOP de ejemplo debe ser suficientemente detallado para que alguien con conocimientos de contabilidad pueda seguirlo sin supervisión. Plantillas en formato tabla o Markdown copiable.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Documentar procesos financieros críticos para reducir riesgo operativo',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            // 8. Legal
            [
                'profession_id'    => 8,
                'title'            => 'Gestionar el conocimiento legal interno y la jurisprudencia aplicable al negocio',
                'description'      => 'Los departamentos legales acumulan criterios, precedentes internos y conocimiento regulatorio que rara vez está sistematizado. Construye una base de conocimiento legal que permita responder consultas internas más rápido y mantener la consistencia en criterios y posiciones legales. Reduce la dependencia de abogados específicos y mejora la gestión del riesgo legal.',
                'prompt_content'   => <<<'EOT'
Actúa como director jurídico con experiencia en gestión del conocimiento legal en entornos corporativos. Ayúdame a diseñar un sistema de gestión del conocimiento para el departamento legal que capture criterios internos, precedentes relevantes y posiciones corporativas de forma que estén accesibles y sean consistentes.

**El problema**
El departamento legal toma decisiones y adopta posiciones que no siempre quedan documentadas. Cuando un abogado interno se va o hay un litigio después de años, es difícil reconstruir el razonamiento detrás de una decisión. Además, el conocimiento regulatorio se actualiza constantemente y no hay un sistema para gestionar esas actualizaciones.

**Entregables que necesito**

1. **Taxonomía del conocimiento legal**: propón una estructura de categorías para organizar el conocimiento legal interno. Incluye categorías para: contratos por tipo (laboral, comercial, propiedad intelectual), regulaciones aplicables por área de negocio, criterios y posiciones corporativas, precedentes internos relevantes, plantillas y cláusulas estándar, y alertas regulatorias.

2. **Plantilla de criterio legal interno**: diseña una plantilla para documentar las posiciones y criterios adoptados por el departamento en temas recurrentes. Incluye: la pregunta o situación que motiva el criterio, la normativa aplicable, el análisis realizado, la posición adoptada, excepciones conocidas, fecha de adopción y fecha de revisión.

3. **Repositorio de cláusulas estándar**: explica cómo construir y mantener una biblioteca de cláusulas contractuales estándar. Incluye cómo clasificarlas, cómo indicar cuándo usar cada variante, cómo marcar las cláusulas que requieren revisión por cambios regulatorios, y cómo controlar las versiones.

4. **Proceso de gestión de actualizaciones regulatorias**: diseña un flujo de trabajo para capturar, evaluar e incorporar cambios regulatorios al repositorio de conocimiento. Define quién monitorea qué regulaciones, cómo se evalúa el impacto en el negocio, cómo se actualiza la documentación afectada y cómo se comunica al resto de la empresa.

5. **Protocolo de lecciones aprendidas en litigios y negociaciones**: propón un proceso para documentar los aprendizajes de cada litigio, arbitraje o negociación importante. Incluye qué capturar, cuándo hacerlo y cómo usarlo para mejorar contratos y posiciones futuras.

6. **Guía de onboarding para abogados nuevos**: escribe un plan para que un abogado que se incorpora al departamento pueda estar operativo en 4 semanas usando el repositorio. Define qué leer en qué orden y cómo empezar a contribuir.

**Formato de salida**
Usa encabezados claros. Las plantillas deben ser copiables directamente. El análisis debe ser práctico y orientado a la implementación, no a la teoría jurídica.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Sistematizar criterios y conocimiento jurídico del departamento legal',
                'vote_score'       => 28,
                'resource_type'    => 'prompt',
            ],
            // 9. Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Construir una base de conocimiento para el equipo de soporte y customer success',
                'description'      => 'Un equipo de customer success sin una base de conocimiento sólida responde las mismas preguntas una y otra vez y da respuestas inconsistentes. Aprende a construir una knowledge base que reduzca el tiempo de respuesta, mejore la consistencia y permita resolver la mayoría de consultas sin escalar. Consigue además que los clientes puedan resolver sus dudas solos.',
                'prompt_content'   => <<<'EOT'
Actúa como Head of Customer Success con experiencia en gestión del conocimiento y escalado de operaciones de soporte. Ayúdame a construir una base de conocimiento efectiva para mi equipo que mejore la calidad y consistencia de las respuestas, reduzca el tiempo de resolución y permita el autoservicio de los clientes.

**El problema**
El equipo de customer success responde preguntas similares de formas distintas, escala demasiados tickets a producto o ingeniería, y los nuevos agentes tardan semanas en ser autónomos. No hay un lugar centralizado donde buscar la respuesta correcta antes de responder al cliente.

**Entregables que necesito**

1. **Arquitectura de la knowledge base**: propón una estructura de categorías y subcategorías para organizar el conocimiento. Considera secciones para: onboarding de nuevos clientes, preguntas frecuentes por tipo de usuario, guías paso a paso para funcionalidades, troubleshooting de problemas comunes, escalados y a quién contactar, y política de devoluciones y compensaciones.

2. **Plantilla de artículo de conocimiento**: diseña una plantilla estándar para escribir artículos de la knowledge base. Incluye: título orientado a la pregunta del cliente, audiencia objetivo, situación en que aplica, solución paso a paso, capturas o videos opcionales, artículos relacionados, y fecha de última revisión.

3. **Proceso de captura de conocimiento desde tickets**: diseña un flujo para convertir tickets resueltos en artículos de conocimiento. Define qué criterios hacen que un ticket merezca un artículo (frecuencia, impacto, complejidad), quién escribe el artículo, quién lo revisa, y cómo se mide el impacto del artículo (deflexión de tickets).

4. **Guía de onboarding para nuevos agentes**: escribe un plan de 30 días usando la knowledge base como eje central. Define qué artículos leer en qué orden, qué tickets reales observar, cómo practicar en un entorno seguro, y cuándo el agente puede responder de forma autónoma.

5. **Estrategia de self-service para clientes**: explica cómo usar la misma knowledge base para crear un portal de autoservicio para clientes. Define qué contenido es solo interno y qué puede publicarse externamente, cómo medir si los clientes encuentran respuestas solos, y cómo reducir el volumen de tickets entrantes.

6. **Métricas de la knowledge base**: define 5 indicadores para medir la efectividad de la knowledge base. Incluye cómo medirlos y qué valores son buenos benchmarks en empresas SaaS.

**Formato de salida**
Encabezados claros para cada sección. Plantillas copiables. Sé específico en los procesos: da pasos concretos, no principios generales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Reducir tickets y mejorar consistencia con una knowledge base efectiva',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            // 10. Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Diseñar un sistema personal de gestión del conocimiento para freelancers',
                'description'      => 'Como freelancer, tu conocimiento acumulado es tu principal activo competitivo. Sin un sistema para capturarlo, repites trabajo, pierdes aprendizajes entre proyectos y tardas más de lo necesario en proyectos similares. Aprende a construir un second brain que te haga más rápido, más consistente y más valioso para tus clientes.',
                'prompt_content'   => <<<'EOT'
Actúa como consultor de productividad especializado en sistemas de gestión del conocimiento para profesionales independientes. Ayúdame a diseñar un sistema personal de gestión del conocimiento (PKM - Personal Knowledge Management) adaptado a las necesidades de un freelancer.

**El problema**
Como freelancer trabajo en múltiples proyectos y clientes a la vez. Cada proyecto genera aprendizajes: cómo resolver ciertos problemas técnicos, qué tipo de clientes son difíciles, qué procesos funcionan mejor. Pero ese conocimiento se queda en mi cabeza o disperso en notas sin estructura, y no lo aprovecho en proyectos futuros. Quiero cambiar eso.

**Entregables que necesito**

1. **Sistema de captura de conocimiento**: diseña un proceso diario o semanal para capturar el conocimiento que genero trabajando. Incluye: cuándo capturar (inmediatamente, al final del día, al cerrar un proyecto), qué capturar (no todo, solo lo reutilizable), en qué formato, y cómo evitar que se convierta en una carga.

2. **Estructura del repositorio personal**: propón una organización para mi base de conocimiento personal. Incluye secciones para: snippets de código o procesos reutilizables, plantillas de documentos recurrentes (propuestas, contratos, briefs), aprendizajes por tipo de cliente o industria, errores cometidos y cómo evitarlos, recursos y referencias de alta calidad, y proyectos de referencia que puedo usar como portfolio.

3. **Biblioteca de plantillas propias**: explica cómo construir una biblioteca de plantillas personales que se mejoran con cada proyecto. Incluye: cómo versionar las plantillas, cómo documentar cuándo usar cada variante, y cómo capturar el feedback del cliente para mejorarlas.

4. **Proceso de cierre de proyecto**: diseña una rutina al finalizar cada proyecto para extraer el máximo aprendizaje. Incluye preguntas de reflexión sobre qué funcionó, qué mejorar, qué reutilizar, y cómo actualizar el repositorio con los aprendizajes.

5. **Sistema de revisión periódica**: propón un ritual mensual o trimestral para revisar y consolidar el conocimiento acumulado. Define cuánto tiempo dedicar, qué revisar, cómo conectar ideas de diferentes proyectos, y cómo convertir patrones en contenido publicable (artículos, posts) que atraiga nuevos clientes.

6. **Herramientas recomendadas**: da una lista comentada de 5 herramientas para construir un PKM personal siendo freelancer. Para cada una explica sus fortalezas, sus debilidades y para qué tipo de freelancer es mejor. No te limites a Notion: considera opciones como Obsidian, Roam, Logseq u otras.

**Formato de salida**
Encabezados claros. Consejos prácticos y directos. Incluye ejemplos de cómo se vería una nota bien capturada, una plantilla bien documentada, y una sesión de revisión mensual.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir un second brain para aprovechar el conocimiento entre proyectos',
                'vote_score'       => 45,
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
