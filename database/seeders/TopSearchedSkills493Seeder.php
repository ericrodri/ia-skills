<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills493Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Crear campañas de marketing digitalmente accesibles con IA',
                'description'      => 'Diseña campañas de marketing que cumplan los estándares WCAG 2.1 y ADA, con alt texts generados automáticamente, paletas de colores con contraste adecuado y mensajes inclusivos para todos los públicos.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing digital y accesibilidad web. Tu objetivo es ayudarme a crear campañas de marketing que sean completamente accesibles para personas con discapacidades visuales, auditivas, cognitivas y motoras, cumpliendo con los estándares WCAG 2.1 nivel AA y la normativa ADA.

**Contexto de mi situación:**
Soy responsable de marketing en una empresa mediana y quiero asegurarme de que todas nuestras comunicaciones digitales sean inclusivas. Hasta ahora no hemos prestado suficiente atención a la accesibilidad y queremos corregir eso de forma sistemática.

**instrucción principal:**
Actúa como consultor de marketing accesible y ayúdame a revisar y mejorar nuestra próxima campaña digital. Para ello necesito que realices las siguientes tareas:

1. **Auditoría de accesibilidad del copy:**
   - Analiza el siguiente texto de campaña e identifica problemas de accesibilidad lingüística
   - Sugiere alternativas que sean claras, directas y comprensibles para personas con diversidad cognitiva
   - Proporciona una versión simplificada (nivel de lectura fácil) del mensaje principal

2. **Alt texts para imágenes:**
   - Para cada imagen que te describa, genera un alt text descriptivo y funcional (máximo 125 caracteres)
   - Diferencia entre alt texts decorativos (alt="") y alt texts informativos
   - Explica por qué cada alt text cumple con las pautas WCAG 1.1.1

3. **Paleta de colores accesible:**
   - Revisa nuestra paleta de marca actual y verifica el ratio de contraste (mínimo 4.5:1 para texto normal, 3:1 para texto grande)
   - Sugiere combinaciones de colores que mantengan nuestra identidad visual pero mejoren la accesibilidad
   - Indica qué combinaciones superan el estándar AAA (7:1) para máxima accesibilidad

4. **Adaptaciones para diferentes canales:**
   - Email marketing: estructuración correcta de encabezados, orden lógico de lectura, botones CTA descriptivos
   - Redes sociales: subtítulos para vídeos, transcripciones para audios, descripciones de infografías
   - Anuncios display: contraste, tipografía legible, animaciones respetuosas con usuarios con epilepsia fotosensible
   - Landing pages: formularios accesibles, mensajes de error descriptivos, navegación por teclado

5. **Checklist de revisión pre-publicación:**
   Crea una lista de verificación de 20 puntos que mi equipo pueda usar antes de publicar cualquier pieza de marketing para asegurar su accesibilidad.

6. **Métricas de impacto:**
   - ¿Cómo medir el alcance adicional que obtenemos al ser más accesibles?
   - Estima el porcentaje adicional de audiencia que podemos alcanzar en España/Latinoamérica con buenas prácticas de accesibilidad
   - Sugiere KPIs de accesibilidad para incluir en nuestros reportes de marketing

**Información adicional que necesito de tu parte:**
- Lista de errores comunes de accesibilidad que cometen los equipos de marketing
- Herramientas gratuitas para verificar accesibilidad de contenido digital
- Cómo comunicar la propuesta de valor de la accesibilidad a la dirección de la empresa

**Formato de entrega:**
Por favor estructura tu respuesta en secciones claramente diferenciadas, con ejemplos concretos y antes/después cuando sea relevante. Incluye referencias a los criterios WCAG específicos que aplican a cada recomendación.

objetivo final: Quiero que nuestra próxima campaña sea un referente de marketing accesible en nuestro sector, no solo por cumplimiento normativo, sino porque creemos que la inclusión es un valor de marca diferenciador.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar campañas de marketing que cumplan WCAG 2.1 y lleguen a audiencias con diversas capacidades',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Auditoría WCAG automatizada con IA para desarrolladores',
                'description'      => 'Realiza auditorías exhaustivas de accesibilidad web usando IA para identificar violaciones WCAG 2.1, generar reportes detallados y obtener código de remediación listo para implementar.',
                'prompt_content'   => <<<'EOT'
Eres un experto en desarrollo web y accesibilidad digital con profundo conocimiento de las pautas WCAG 2.1, ARIA (Accessible Rich Internet Applications) y las mejores prácticas de desarrollo inclusivo. Tu misión es ayudarme a auditar y corregir problemas de accesibilidad en mi aplicación web.

**Mi contexto:**
Soy desarrollador full-stack y necesito mejorar la accesibilidad de una aplicación web React/TypeScript. Tenemos clientes en sectores regulados (gobierno, educación, salud) que nos exigen cumplimiento ADA y WCAG 2.1 nivel AA como mínimo.

**tarea 1 — Análisis de código:**
Revisa el siguiente componente y lista todas las violaciones de accesibilidad:
- Problemas con atributos ARIA
- Elementos interactivos sin etiquetas descriptivas
- Jerarquía incorrecta de encabezados
- Imágenes sin alt text o con alt text inadecuado
- Formularios sin labels asociados correctamente
- Contraste de colores insuficiente en CSS
- Elementos que no son navegables por teclado

Para cada problema encontrado proporciona:
a) Criterio WCAG violado (número y nombre exacto)
b) Nivel de severidad (A, AA, AAA)
c) Código original problemático
d) Código corregido con explicación
e) Impacto en usuarios con discapacidades

**tarea 2 — Patrones accesibles en React:**
Proporciona implementaciones accesibles para los siguientes componentes comunes:

1. **Modal/Dialog:**
   - Focus trap correcto
   - Cierre con Escape
   - Atributos ARIA (role, aria-modal, aria-labelledby, aria-describedby)
   - Restauración del foco al cerrar

2. **Menú desplegable:**
   - Navegación con flechas del teclado
   - aria-expanded, aria-haspopup
   - Gestión correcta del foco

3. **Formulario con validación:**
   - Mensajes de error accesibles con aria-live
   - Asociación label-input correcta
   - aria-required, aria-invalid, aria-describedby para errores
   - Indicadores de campo obligatorio no solo por color

4. **Tabla de datos:**
   - scope en headers (col/row)
   - Resumen descriptivo
   - Navegación por teclado en tablas complejas

**tarea 3 — Testing automatizado:**
- Configura un pipeline de testing de accesibilidad con axe-core y jest-axe
- Escribe tests de accesibilidad para los componentes anteriores
- Muestra cómo integrar Lighthouse CI en GitHub Actions para bloquear PRs con regresiones de accesibilidad
- Explica cómo complementar el testing automatizado con testing manual usando lectores de pantalla (NVDA, VoiceOver)

**tarea 4 — Reporte ejecutivo:**
Genera una plantilla de reporte de auditoría de accesibilidad que incluya:
- Resumen ejecutivo para no técnicos
- Scoring por criterios WCAG
- Priorización de remediaciones (impacto vs esfuerzo)
- Estimación de horas de desarrollo para correcciones
- Roadmap de implementación en sprints

objetivo: Quiero que nuestra aplicación supere el nivel AA de WCAG 2.1 en los próximos dos sprints y establezca procesos para mantener ese nivel de forma sostenible.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Auditar y corregir violaciones WCAG 2.1 en aplicaciones web con código de remediación listo para producción',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño inclusivo y accesible con asistencia de IA',
                'description'      => 'Aplica principios de diseño universal e inclusivo con ayuda de IA para crear interfaces que funcionen para el mayor rango posible de capacidades, edades y contextos de uso.',
                'prompt_content'   => <<<'EOT'
Eres un experto en diseño UX/UI con especialización en diseño inclusivo y accesibilidad. Conoces profundamente los principios del Diseño Universal, las pautas WCAG 2.1, las necesidades de usuarios con diversas capacidades y las mejores prácticas de diseño centrado en la persona.

**Mi situación:**
Soy diseñador UX en una empresa de software y estoy rediseñando una aplicación de gestión financiera. Necesito aplicar principios de diseño inclusivo desde la fase de concepto, no como un parche al final del proceso.

**instrucción 1 — Evaluación heurística de accesibilidad:**
Actúa como un auditor de diseño inclusivo y evalúa los siguientes aspectos de mi diseño actual:

- **Visual:** contraste, tamaño de tipografía, espacio entre elementos táctiles (mínimo 44x44px), no dependencia exclusiva del color para transmitir información
- **Cognitivo:** carga cognitiva, consistencia de patrones, microcopy claro, progresión lógica de tareas
- **Motor:** áreas de toque suficientemente grandes, alternativas a gestos complejos, tolerancia al error
- **Contextual:** uso con una sola mano, bajo nivel de luz, conexión lenta, uso mientras se camina

Para cada área identifica problemas específicos y propón soluciones de diseño concretas.

**instrucción 2 — Sistema de diseño accesible:**
Ayúdame a crear las especificaciones para un sistema de diseño accesible:

1. **Tipografía:**
   - Escala tipográfica con ratios de contraste verificados
   - Tamaños mínimos por contexto (móvil, desktop, usuarios mayores)
   - Interlineado y espaciado óptimos para dislexia
   - Recomendaciones de fuentes inclusivas

2. **Color:**
   - Paleta primaria, secundaria y semántica con ratios de contraste documentados
   - Versión de alto contraste del sistema
   - Indicadores no dependientes de color (iconos, patrones, formas)
   - Simulaciones de daltonismo para validar decisiones de color

3. **Componentes:**
   - Especificaciones de estados accesibles (hover, focus, active, disabled, error)
   - Dimensiones mínimas de elementos interactivos
   - Feedback multimodal (visual, háptico, auditivo)
   - Patrones de formularios accesibles

**instrucción 3 — User journey para personas con discapacidades:**
Crea mapas de experiencia de usuario para los siguientes perfiles:
- Usuario con baja visión que usa zoom del sistema al 200%
- Usuario con daltonismo rojo-verde
- Usuario con movilidad reducida que usa teclado y switches
- Usuario con TDAH que necesita reducir distracciones
- Usuario mayor de 65 años con poca experiencia digital

Para cada perfil: puntos de fricción actuales, propuestas de mejora de diseño, métricas de éxito.

**instrucción 4 — Documentación para el equipo:**
Crea una guía de "Accessibility Design Tokens" que incluya:
- Variables de diseño accesibles listas para exportar a Figma y código
- Checklist de revisión de diseño antes de pasar a desarrollo
- Plantilla de anotaciones de accesibilidad en entregables de diseño
- Guía de cómo hacer testing de diseño con usuarios con discapacidades

objetivo final: Quiero que la accesibilidad sea una característica de diseño orgánica, no una lista de comprobación al final del proceso, y que mi equipo la interiorice como parte de nuestra cultura de diseño.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Crear sistemas de diseño accesibles e inclusivos aplicando principios WCAG desde la fase de concepto',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Adaptar argumentarios de ventas para clientes con discapacidades con IA',
                'description'      => 'Desarrolla estrategias de ventas inclusivas que eliminen barreras de comunicación para clientes con diversas capacidades, incluyendo formatos alternativos de presentación y materiales accesibles.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ventas consultivas y comunicación inclusiva. Tu especialidad es ayudar a equipos de ventas a eliminar barreras de accesibilidad en sus procesos comerciales para llegar a un mercado más amplio y ofrecer una experiencia de compra equitativa para todos los clientes.

**Mi contexto:**
Soy directora de ventas de una empresa de software B2B. Nos hemos dado cuenta de que algunos clientes potenciales abandonan nuestro proceso de ventas porque los materiales, las demos y las comunicaciones no son accesibles. Queremos cambiar eso y además posicionarnos como empresa comprometida con la inclusión.

**tarea 1 — Diagnóstico del proceso de ventas actual:**
Analiza nuestro proceso de ventas estándar e identifica las barreras de accesibilidad en cada etapa:

- **Prospección:** ¿Nuestros emails son accesibles para lectores de pantalla? ¿Usamos solo imágenes en infografías sin texto alternativo?
- **Discovery call:** ¿Ofrecemos transcripciones o intérpretes de señas para videollamadas? ¿La plataforma de videoconferencia es accesible?
- **Demo:** ¿Nuestra demo funciona para usuarios de teclado? ¿Hay subtítulos en videos grabados?
- **Propuesta:** ¿El PDF de propuesta es accesible? ¿Está correctamente etiquetado para lectores de pantalla?
- **Cierre y onboarding:** ¿Los contratos digitales son accesibles? ¿El proceso de firma electrónica funciona con tecnología asistiva?

Para cada barrera detectada, proporciona soluciones prácticas e inmediatas.

**tarea 2 — Materiales de ventas accesibles:**
Ayúdame a crear versiones accesibles de nuestros materiales de ventas principales:

1. **Email de prospección accesible:**
   - Estructura semántica correcta
   - Texto de enlace descriptivo (no "haz clic aquí")
   - Alternativas textuales para cualquier imagen
   - Versión en texto plano

2. **One-pager accesible:**
   - Jerarquía de información clara
   - Contraste de colores adecuado
   - Tipografía legible
   - Versión en lectura fácil para personas con diversidad cognitiva

3. **Script de demo accesible:**
   - Cómo describir verbalmente lo que ocurre en pantalla
   - Pausas para permitir procesamiento adicional
   - Alternativas si el cliente usa tecnología asistiva

**tarea 3 — Comunicación adaptativa:**
Desarrolla guías para comunicarse eficazmente con clientes con diferentes discapacidades:

- Clientes con baja visión o ceguera: qué decir, qué evitar, cómo estructurar la comunicación
- Clientes con discapacidad auditiva: alternativas a llamadas telefónicas, uso de captions, comunicación escrita
- Clientes con discapacidades cognitivas: lenguaje claro, resúmenes ejecutivos, pasos simplificados
- Clientes con discapacidades motoras: formularios alternativos, tiempos de respuesta flexibles

**tarea 4 — Argumentario de valor de la accesibilidad:**
Cuando vendemos a empresas que necesitan soluciones accesibles, ¿cómo articulamos nuestra propuesta de valor? Ayúdame a construir:
- Argumentos ROI de la accesibilidad para clientes corporativos
- Respuestas a objeciones comunes sobre el coste de la accesibilidad
- Casos de éxito de empresas que mejoraron resultados siendo más inclusivas
- Preguntas de discovery para identificar necesidades de accesibilidad del cliente

objetivo: Quiero que nuestro equipo de ventas sea tan accesible como el producto que vendemos, y que esto se convierta en un diferenciador competitivo real.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Eliminar barreras de accesibilidad en procesos de ventas y crear materiales comerciales inclusivos',
                'vote_score'       => 29,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Estrategia de producto accesible con IA desde el inicio',
                'description'      => 'Define requisitos de accesibilidad en la fase de descubrimiento de producto, integra WCAG en el proceso de desarrollo y mide el impacto de la inclusión digital en las métricas de negocio.',
                'prompt_content'   => <<<'EOT'
Eres un experto en product management con especialización en accesibilidad digital e inclusión. Tienes experiencia implementando estrategias de accesibilidad en productos digitales desde la fase de descubrimiento hasta el lanzamiento, y sabes cómo medir el impacto de la inclusión en las métricas de negocio.

**Mi situación:**
Soy Product Manager en una startup de fintech con un equipo de 15 personas. Estamos en fase de crecimiento y acabamos de enterarnos de que varios usuarios con discapacidades han abandonado nuestra app porque no es accesible. Queremos corregir esto urgentemente y establecer procesos sostenibles.

**objetivo 1 — Auditoría de accesibilidad del producto:**
Ayúdame a estructurar una auditoría completa de accesibilidad de nuestro producto:

- Framework de evaluación: qué áreas evaluar, qué metodología usar, quién debe participar
- Métricas de accesibilidad actuales: cómo establecer una línea base
- Priorización de problemas: matriz de impacto (afecta a muchos usuarios) × gravedad (bloquea la tarea principal)
- Estimación del mercado perdido: ¿cuántos usuarios potenciales estamos excluyendo?

**objetivo 2 — Roadmap de accesibilidad:**
Diseña un roadmap de 6 meses para alcanzar WCAG 2.1 nivel AA:

Mes 1-2 (Quick wins):
- Correcciones de accesibilidad de alto impacto y bajo esfuerzo
- Criterios de aceptación de accesibilidad básicos para nuevas historias de usuario
- Formación del equipo en conceptos básicos de accesibilidad

Mes 3-4 (Fundamentos):
- Componentes de diseño accesibles en el design system
- Pipeline de testing de accesibilidad automatizado
- Proceso de user research inclusivo con usuarios con discapacidades

Mes 5-6 (Excelencia):
- Alcanzar y verificar WCAG 2.1 AA
- Proceso de mantenimiento de accesibilidad integrado en el SDLC
- Programa de feedback continuo con usuarios con discapacidades

**objetivo 3 — Integrar accesibilidad en el proceso de producto:**
Crea templates y procesos para:

1. **User stories accesibles:** plantilla que incluya criterios de accesibilidad en la definición de hecho
2. **Personas inclusivas:** cómo añadir usuarios con discapacidades a tus user personas existentes sin hacer "personas de discapacidad" separadas
3. **Sesiones de user research inclusivas:** cómo reclutar y trabajar con participantes con discapacidades
4. **Definición de Done accesible:** checklist de accesibilidad que toda historia debe superar antes de cerrar
5. **OKRs de accesibilidad:** objetivos y resultados clave medibles para el equipo de producto

**objetivo 4 — Business case para la dirección:**
Prepara los argumentos para convencer a la dirección de invertir en accesibilidad:
- Tamaño del mercado de personas con discapacidades (datos globales y España/LATAM)
- Riesgos legales de incumplimiento (directiva europea de accesibilidad, ADA en EEUU)
- Correlación entre accesibilidad y métricas de negocio (conversión, retención, NPS)
- Coste de corregir accesibilidad tarde vs. hacerlo bien desde el inicio (regla 1-10-100)
- Casos de éxito de productos que mejoraron sus métricas al volverse más accesibles

tarea inmediata: Dame un plan de acción para los primeros 30 días, con entregables concretos y responsables, para iniciar nuestra transformación hacia un producto verdaderamente accesible.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Integrar accesibilidad en la estrategia de producto y establecer procesos sostenibles para WCAG 2.1',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Procesos de selección inclusivos y accesibles con IA',
                'description'      => 'Diseña procesos de reclutamiento que eliminen barreras para candidatos con discapacidades, desde las ofertas de empleo accesibles hasta las entrevistas adaptadas y el onboarding inclusivo.',
                'prompt_content'   => <<<'EOT'
Eres un experto en recursos humanos con especialización en diversidad, equidad e inclusión (DEI) y accesibilidad en el lugar de trabajo. Tu expertise incluye el diseño de procesos de selección accesibles, el cumplimiento de la normativa de igualdad de oportunidades y la creación de entornos de trabajo verdaderamente inclusivos.

**Mi contexto:**
Soy directora de RRHH en una empresa de 200 empleados. Tenemos un objetivo de aumentar la representación de personas con discapacidades del 2% al 5% en los próximos dos años. Para ello necesito revisar y mejorar todo nuestro proceso de selección para eliminar barreras invisibles.

**instrucción 1 — Auditoría del proceso de selección actual:**
Analiza las siguientes etapas de nuestro proceso de selección e identifica barreras de accesibilidad:

**Oferta de empleo:**
- ¿El lenguaje es inclusivo y no discriminatorio?
- ¿Los requisitos físicos listados son realmente necesarios para el puesto?
- ¿Indicamos explícitamente que aceptamos candidatos con discapacidades y que hacemos ajustes razonables?
- ¿La oferta está publicada en formatos accesibles?

**Proceso de aplicación:**
- ¿El formulario online es accesible para lectores de pantalla?
- ¿Permitimos enviar CV en formatos alternativos?
- ¿Los tests de selección están disponibles en formatos accesibles?

**Entrevistas:**
- ¿Preguntamos proactivamente si el candidato necesita ajustes?
- ¿Las videollamadas tienen subtítulos disponibles?
- ¿Las entrevistas presenciales son en espacios físicamente accesibles?
- ¿Nuestras preguntas de entrevista evitan sesgos hacia personas con discapacidades?

**instrucción 2 — Rediseño inclusivo:**
Para cada barrera identificada, proporciona:
1. La solución inmediata (cambio que puedo hacer esta semana)
2. La solución estructural (cambio de proceso a largo plazo)
3. El recurso o herramienta que me ayuda a implementarlo

**instrucción 3 — Templates y documentos:**
Crea los siguientes documentos accesibles:

1. **Plantilla de oferta de empleo inclusiva** con:
   - Declaración de compromiso con la diversidad
   - Cláusula de ajustes razonables
   - Requisitos diferenciando "esenciales" de "deseables"
   - Formato accesible para lectores de pantalla

2. **Guía de entrevista inclusiva** con:
   - Preguntas para detectar necesidades de ajuste sin preguntar directamente sobre la discapacidad
   - Cómo comunicar proactivamente las adaptaciones disponibles
   - Preguntas de entrevista que evalúan competencias sin sesgos hacia personas con discapacidades

3. **Plan de onboarding accesible** con:
   - Lista de ajustes razonables comunes y cómo implementarlos
   - Proceso para que el nuevo empleado comunique sus necesidades con confianza
   - Seguimiento durante los primeros 90 días

**instrucción 4 — Formación del equipo de selección:**
Diseña un módulo de formación de 2 horas para reclutadores y managers que incluya:
- Conceptos básicos de discapacidad y tipos (visible, invisible, adquirida)
- Sesgos inconscientes más comunes en la selección de personas con discapacidades
- Lenguaje apropiado e inapropiado
- Marcos legales relevantes (LISMI, cuota de reserva, bonificaciones)
- Role-play de situaciones de entrevista

objetivo final: Transformar nuestro proceso de selección en uno que atraiga activamente talento con discapacidades y que elimine todas las barreras sistémicas que hoy nos impiden acceder a ese talento.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Eliminar barreras en procesos de selección y crear entornos de trabajo verdaderamente inclusivos para personas con discapacidades',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Reportes financieros accesibles para todos los stakeholders con IA',
                'description'      => 'Transforma reportes financieros complejos en documentos accesibles para personas con diversas capacidades, incluyendo versiones en lectura fácil, formatos alternativos y visualizaciones inclusivas.',
                'prompt_content'   => <<<'EOT'
Eres un experto en finanzas corporativas y comunicación financiera accesible. Tu especialidad es transformar información financiera compleja en formatos comprensibles y accesibles para diferentes audiencias, incluyendo personas con discapacidades visuales, cognitivas o de lectura.

**Mi contexto:**
Soy CFO de una empresa cotizada en bolsa con obligación de publicar información financiera para inversores minoristas, empleados e institucionales. Queremos que todos nuestros reportes sean accesibles y comprensibles para el mayor rango posible de personas.

**tarea 1 — Auditoría de accesibilidad de documentos financieros:**
Analiza un reporte financiero típico nuestro e identifica:

**Problemas de accesibilidad visual:**
- PDFs sin etiquetas de accesibilidad (tagged PDFs)
- Gráficos que solo usan color para diferenciar series de datos
- Tablas sin encabezados correctamente marcados para lectores de pantalla
- Texto incrustado en imágenes que no puede ser leído por tecnología asistiva

**Problemas de accesibilidad cognitiva:**
- Jerga financiera sin definición
- Frases demasiado largas y complejas
- Falta de resumen ejecutivo en lenguaje simple
- Información más importante enterrada en el texto

**Problemas de formato:**
- Disponibilidad solo en PDF (no en HTML accesible o Word)
- Sin versión en lectura fácil
- Sin transcripciones de presentaciones a inversores

**tarea 2 — Versión en lectura fácil del reporte anual:**
Transforma el siguiente extracto de mi reporte anual en una versión de lectura fácil que:
- Use frases cortas (máximo 20 palabras)
- Evite jerga financiera o la defina inmediatamente
- Tenga un nivel de comprensión lectora de 8º grado
- Use bullet points en lugar de párrafos densos
- Incluya un resumen de 5 puntos al inicio

**tarea 3 — Visualizaciones financieras accesibles:**
Para los siguientes tipos de gráficos financieros, diseña versiones accesibles:

1. **Gráfico de evolución de ingresos:** cómo hacerlo accesible para usuarios daltónicos (no solo color, también patrones y etiquetas directas)
2. **Tabla de balance:** estructura correcta con headers para lectores de pantalla, resumen descriptivo
3. **Dashboard financiero:** cómo hacer que los KPIs sean accesibles sin depender de visualización
4. **Infografía de resultados:** alt text descriptivo completo, versión textual de todos los datos

**tarea 4 — Formatos de distribución accesibles:**
Crea un protocolo para distribuir información financiera en múltiples formatos:
- PDF etiquetado (cómo crear tagged PDFs desde Word y InDesign)
- HTML accesible para la web corporativa
- Versión Word accesible para descarga
- Audio-descripción para presentaciones a inversores
- Interpretación en lengua de signos para webinars (guía de coordinación)

**tarea 5 — Comunicación con inversores con discapacidades:**
Diseña adaptaciones para nuestras comunicaciones habituales con inversores:
- Junta de accionistas accesible (subtítulos en tiempo real, documentación en lectura fácil)
- Calls de resultados con transcripción disponible
- Portal de inversores accesible (checklist WCAG para la web IR)
- Respuesta a preguntas de inversores por canales alternativos

objetivo: Queremos ser referentes en comunicación financiera accesible en nuestro sector, reforzando así nuestra reputación ESG y eliminando barreras para que cualquier persona pueda ser inversora informada.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Transformar reportes financieros en documentos accesibles para todos los stakeholders con diversas capacidades',
                'vote_score'       => 27,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cumplimiento ADA y WCAG en servicios legales digitales con IA',
                'description'      => 'Analiza el cumplimiento de accesibilidad digital en despachos de abogados y servicios legales online, identifica riesgos legales por incumplimiento ADA/WCAG y diseña estrategias de remediación.',
                'prompt_content'   => <<<'EOT'
Eres un experto en derecho tecnológico y accesibilidad digital con profundo conocimiento de la normativa ADA (Americans with Disabilities Act), la Directiva Europea de Accesibilidad (2019/882), la WCAG 2.1, y la normativa española (Real Decreto 1112/2018). Tu especialidad es asesorar a empresas sobre sus obligaciones de accesibilidad digital y los riesgos legales del incumplimiento.

**Mi contexto:**
Soy socio de un despacho de abogados de tamaño mediano con presencia digital significativa: web corporativa, portal de clientes, plataforma de firma electrónica de documentos y chatbot de atención al cliente. Necesito entender mis obligaciones legales de accesibilidad y los riesgos de no cumplirlas.

**instrucción 1 — Análisis del marco normativo aplicable:**
Explícame detalladamente:

**En España/Europa:**
- Real Decreto 1112/2018: ¿a quién aplica, qué requiere exactamente?
- Directiva (UE) 2019/882 de accesibilidad de productos y servicios: cronograma de implementación, sectores afectados
- LSSI y obligaciones de accesibilidad para servicios de la sociedad de la información
- Sanciones por incumplimiento: importes, procedimientos sancionadores, casos reales

**En EEUU (si tenemos clientes allí):**
- ADA Title III para servicios online: situación legal actual, jurisprudencia relevante
- Nivel de riesgo de demandas por accesibilidad web (estadísticas de litigios)
- Acuerdos de resolución más comunes con el DOJ

**En Latinoamérica:**
- Normativa por país relevante (México, Colombia, Argentina, Chile)
- Tendencias regulatorias emergentes

**instrucción 2 — Auditoría de riesgo legal:**
Analiza los siguientes aspectos de nuestros servicios digitales y clasifica el riesgo legal (alto/medio/bajo):

1. **Web corporativa** sin declaración de accesibilidad
2. **Portal de clientes** no accesible para usuarios con lectores de pantalla
3. **Firma electrónica** que requiere arrastrar y soltar sin alternativa de teclado
4. **Chatbot** que no funciona con tecnología asistiva
5. **Documentos PDF** sin etiquetas de accesibilidad

Para cada elemento: riesgo legal, normativa violada, plazo de corrección recomendado.

**instrucción 3 — Estrategia de cumplimiento:**
Diseña una hoja de ruta de cumplimiento legal de accesibilidad:

- Plan de 90 días para mitigar los riesgos más críticos
- Política de accesibilidad digital que debemos publicar
- Declaración de accesibilidad: qué debe incluir y cómo redactarla
- Proceso de reclamaciones de accesibilidad (obligatorio en muchas jurisdicciones)
- Documentación para demostrar esfuerzo de buena fe en caso de reclamación

**instrucción 4 — Contratos y responsabilidad:**
Asesórame sobre aspectos contractuales de la accesibilidad:
- Cláusulas de accesibilidad que debemos incluir en contratos con proveedores tecnológicos
- Responsabilidad del despacho vs. responsabilidad del proveedor de la plataforma
- Cobertura de seguro de responsabilidad civil para reclamaciones de accesibilidad
- Cómo documentar los esfuerzos de accesibilidad para uso en defensa legal

**instrucción 5 — Accesibilidad como ventaja competitiva:**
¿Cómo posicionamos la accesibilidad como fortaleza del despacho?
- Mercado de clientes con discapacidades que necesitan servicios legales
- Posicionamiento como despacho líder en accesibilidad en el sector legal
- Comunicación al mercado de nuestro compromiso con la inclusión

objetivo: Quiero que nuestro despacho no solo cumpla con las obligaciones legales de accesibilidad, sino que sea referente en servicios legales digitales inclusivos, atrayendo a clientes que valoren ese compromiso.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Analizar obligaciones legales de accesibilidad digital ADA/WCAG y diseñar estrategias de cumplimiento para servicios legales',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente accesible para personas con discapacidades con IA',
                'description'      => 'Diseña canales y protocolos de atención al cliente que sean plenamente accesibles para personas con discapacidades visuales, auditivas, cognitivas y motoras, mejorando la satisfacción y reduciendo el churn.',
                'prompt_content'   => <<<'EOT'
Eres un experto en customer success y experiencia de cliente con especialización en accesibilidad e inclusión. Tu expertise incluye el diseño de canales de atención accesibles, la formación de equipos de soporte para atender a clientes con discapacidades y la medición del impacto de la accesibilidad en métricas de satisfacción y retención.

**Mi contexto:**
Soy directora de Customer Success en una plataforma de e-learning con 50.000 usuarios. Hemos detectado un índice de churn significativamente mayor en usuarios que se identifican como personas con discapacidades, y creemos que la causa principal es que nuestros canales de soporte no son accesibles para ellos.

**tarea 1 — Diagnóstico de accesibilidad del soporte actual:**
Evalúa nuestros canales de atención al cliente actuales e identifica barreras:

**Chat en vivo:**
- ¿El widget de chat funciona con lectores de pantalla?
- ¿Hay límites de tiempo que penalizan a usuarios más lentos?
- ¿El historial de chat es accesible?
- ¿Los agentes saben cómo atender a clientes con discapacidades?

**Email:**
- ¿Nuestros emails de respuesta son accesibles?
- ¿Aceptamos respuestas en formatos alternativos?
- ¿Los tiempos de respuesta son adecuados para clientes que necesitan más tiempo?

**Teléfono:**
- ¿Ofrecemos alternativas para clientes con discapacidad auditiva o de habla?
- ¿Tenemos servicio de relay/intermediación?
- ¿El IVR es accesible?

**Base de conocimiento/FAQ:**
- ¿Está en formato accesible (headings, contraste, alt texts)?
- ¿Hay versiones en lenguaje de señas para contenido complejo?
- ¿Los tutoriales en video tienen subtítulos y transcripciones?

**tarea 2 — Diseño de canales accesibles:**
Proporciona especificaciones detalladas para hacer cada canal accesible:

1. **Chat accesible:** requisitos técnicos, configuración, ajustes de tiempo extendido
2. **Email inclusivo:** plantillas accesibles, proceso para recibir respuestas en formato alternativo
3. **Video llamada accesible:** plataformas con subtítulos en tiempo real, protocolo para clientes con discapacidad auditiva
4. **Canal de texto/SMS:** como alternativa accesible al teléfono
5. **Formularios de soporte accesibles:** campos, validación, mensajes de error

**tarea 3 — Protocolos de atención:**
Crea guías de atención para diferentes tipos de discapacidades:

- **Clientes con discapacidad visual:** cómo describir capturas de pantalla, alternar entre descripción verbal y texto, evitar instrucciones visuales ("haz clic en el botón azul")
- **Clientes con discapacidad auditiva:** comunicación exclusivamente escrita, evitar referencias a tonos de llamada, canal de videollamada con intérprete
- **Clientes con discapacidades cognitivas:** lenguaje claro, pasos simplificados, más tiempo y paciencia, resúmenes escritos de cada interacción
- **Clientes con discapacidades motoras:** alternativas a interacciones que requieren precisión, sesiones más largas, soporte proactivo

**tarea 4 — Métricas e impacto de negocio:**
Define cómo medir el éxito de nuestra estrategia de atención accesible:
- KPIs específicos de accesibilidad en customer success
- Cómo segmentar el NPS y CSAT por usuarios con y sin discapacidades
- Impacto esperado en churn al eliminar barreras de accesibilidad
- ROI de invertir en soporte accesible (coste de pérdida de clientes vs. inversión en accesibilidad)

**tarea 5 — Formación del equipo:**
Diseña un programa de formación de 4 horas para agentes de soporte que incluya:
- Conceptos básicos sobre diversas discapacidades y su impacto en el uso de tecnología
- Etiqueta y comunicación apropiada con clientes con discapacidades
- Práctica con tecnologías asistivas (lector de pantalla, ampliación de pantalla)
- Simulaciones de casos complejos de atención accesible

objetivo: Quiero que ningún cliente abandone nuestra plataforma por barreras de accesibilidad en el soporte, y que los usuarios con discapacidades tengan una experiencia de atención equivalente o mejor que el resto de nuestros clientes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar canales de atención al cliente accesibles y protocolos para personas con diversas discapacidades',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Auditorías de accesibilidad web como servicio freelance con IA',
                'description'      => 'Lanza un servicio de consultoría de accesibilidad digital como freelance: aprende a realizar auditorías WCAG, redactar reportes ejecutivos y posicionarte como experto en inclusión digital.',
                'prompt_content'   => <<<'EOT'
Eres un experto en accesibilidad digital y consultoría freelance. Tu especialidad es ayudar a profesionales independientes a lanzar y escalar servicios de auditoría de accesibilidad web, un mercado en rápido crecimiento impulsado por la regulación europea, las demandas ADA en EEUU y la creciente conciencia sobre inclusión digital.

**Mi situación:**
Soy desarrollador web freelance con 5 años de experiencia. He aprendido conceptos básicos de accesibilidad y quiero convertirlo en un servicio especializado de alto valor. No sé por dónde empezar para estructurar un servicio profesional de auditorías de accesibilidad.

**instrucción 1 — Diseño del servicio de auditoría:**
Ayúdame a estructurar mis servicios de accesibilidad en paquetes diferenciados:

**Paquete Básico — "Diagnóstico Express":**
- Alcance: qué páginas analizar, qué herramientas usar, tiempo dedicado
- Entregable: reporte ejecutivo de 5 páginas con los 10 problemas más críticos
- Precio recomendado: argumentación de pricing para pequeñas empresas
- Tiempo de entrega: estimación realista

**Paquete Avanzado — "Auditoría Completa WCAG 2.1":**
- Alcance: análisis completo, testing manual, pruebas con tecnología asistiva
- Entregable: reporte técnico completo + plan de remediación priorizado
- Precio recomendado: argumentación para empresas medianas
- Incluye: sesión de presentación de resultados

**Paquete Enterprise — "Acompañamiento en Cumplimiento":**
- Alcance: auditoría + retainer mensual de seguimiento
- Entregable: auditoría inicial + revisiones trimestrales + soporte al equipo de desarrollo
- Precio recomendado: argumentación para grandes empresas con obligaciones legales
- Incluye: formación al equipo, testing periódico

**instrucción 2 — Metodología de auditoría profesional:**
Diseña mi metodología de trabajo paso a paso:

Fase 1 — Herramientas automatizadas:
- Qué herramientas usar (axe DevTools, WAVE, Lighthouse, Tenon)
- Cómo documentar los resultados
- Limitaciones del testing automatizado (solo detecta ~30% de problemas)

Fase 2 — Testing manual:
- Checklist de testing manual por criterio WCAG
- Cómo testar navegación por teclado
- Cómo hacer testing básico con NVDA (Windows) y VoiceOver (Mac/iOS)
- Cómo testar con zoom al 200% y sin CSS

Fase 3 — Redacción del reporte:
- Estructura del reporte técnico
- Cómo clasificar y priorizar hallazgos
- Cómo escribir recomendaciones que los desarrolladores puedan implementar
- Plantilla de reporte lista para usar

**instrucción 3 — Posicionamiento y captación de clientes:**
Ayúdame a definir mi estrategia de marketing:

- **Nicho recomendado:** qué sectores tienen mayor urgencia/presupuesto (gobierno, educación, salud, fintech, e-commerce de escala)
- **Propuesta de valor diferencial:** cómo comunicar el ROI y riesgo legal de la accesibilidad
- **Canales de captación:** LinkedIn, SEO, partnerships con agencias de diseño/desarrollo
- **Casos de éxito:** cómo construir mi portfolio inicial sin experiencia previa
- **Certificaciones:** qué certificaciones me darán credibilidad (CPACC, WAS, otros)

**instrucción 4 — Herramientas IA para acelerar el trabajo:**
Cómo usar IA para ser más eficiente en mis auditorías:
- Generar descripciones de alt texts para imágenes
- Redactar versiones accesibles de textos complejos
- Crear reportes ejecutivos a partir de notas de auditoría
- Generar código de remediación para problemas comunes
- Automatizar partes del análisis de accesibilidad

**instrucción 5 — Primer proyecto:**
Dame un plan de acción para conseguir mi primer cliente de auditoría de accesibilidad en los próximos 30 días:
- Qué aprender primero
- Cómo hacer una auditoría gratuita como portfolio
- Guión para primera llamada de ventas con un prospecto
- Cómo fijar el precio para el primer cliente real

objetivo: Quiero posicionarme como consultor de referencia en accesibilidad digital en España y generar 3.000€/mes adicionales con este servicio especializado en los próximos 6 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Lanzar un servicio freelance de auditorías de accesibilidad WCAG con metodología profesional y estrategia de captación de clientes',
                'vote_score'       => 39,
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
