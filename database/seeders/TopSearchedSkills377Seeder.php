<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills377Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Marketing inclusivo y campañas accesibles para todos los públicos',
                'description'      => 'Aprende a diseñar campañas de marketing que sean accesibles para personas con discapacidad visual, auditiva, cognitiva o motora. Descubre cómo la inclusión amplía tu audiencia y refuerza el posicionamiento de marca.',
                'prompt_content'   => <<<'EOT'
Actúa como un estratega de marketing especializado en accesibilidad e inclusión. Quiero que me ayudes a revisar y rediseñar mi estrategia de marketing para que sea genuinamente accesible para personas con diferentes capacidades.

**Por qué el marketing accesible importa**

Más de 1.000 millones de personas en el mundo tienen alguna forma de discapacidad. En la Unión Europea, representan el 15% de la población. Una campaña inaccesible excluye a una parte significativa de tu audiencia potencial. Además, el diseño accesible mejora la experiencia de todos los usuarios, no solo de quienes tienen discapacidad (efecto "curb cut").

**Lo que necesito que desarrolles**

1. **Auditoría de accesibilidad de mi estrategia de marketing actual**: Dame un framework de 20 preguntas para evaluar si mis campañas, canales y materiales son accesibles. Cubre: emails, redes sociales, sitio web, videos, publicidad digital y materiales impresos.

2. **Guía de accesibilidad por canal**: Para cada canal de marketing (Instagram, LinkedIn, YouTube, email, blog, publicidad display) explica las prácticas de accesibilidad específicas: texto alternativo en imágenes, subtítulos en videos, contraste de color, tipografía legible, lenguaje simple.

3. **Cómo escribir copies accesibles**: Principios de escritura clara y sencilla (plain language) para personas con dislexia o discapacidad cognitiva. Vocabulario, estructura de frases, longitud de párrafos, uso de listas y encabezados.

4. **Video y audio accesibles**: Subtítulos (automáticos vs. editados), audiodescripción, transcripciones, consideraciones para personas con epilepsia fotosensible (evitar parpadeos, advertencias previas).

5. **Representación auténtica en las campañas**: Cómo incluir personas con discapacidad en las campañas de forma auténtica, sin caer en el "inspiration porn" o la tokenización. Ejemplos de marcas que lo han hecho bien.

6. **Herramientas y recursos**: Lista de herramientas para verificar accesibilidad de materiales de marketing: verificadores de contraste, validadores de texto alternativo, simuladores de discapacidad visual, herramientas de subtitulado.

**Formato de salida**

Estructura la respuesta con secciones claras. Incluye ejemplos concretos de copies accesibles vs. inaccesibles para cada canal. Cierra con un checklist de accesibilidad que pueda incorporarse al proceso de aprobación de campañas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar campañas de marketing accesibles para personas con discapacidad',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Implementación de accesibilidad web según las pautas WCAG 2.2',
                'description'      => 'Aprende a implementar los estándares WCAG 2.2 en aplicaciones web de forma práctica y eficiente. Desde el contraste de color hasta la navegación por teclado y los lectores de pantalla, domina las técnicas que hacen tu código verdaderamente inclusivo.',
                'prompt_content'   => <<<'EOT'
Actúa como un desarrollador web senior especializado en accesibilidad digital y estándares WCAG. Necesito una guía técnica completa y práctica para implementar accesibilidad web según WCAG 2.2 en un proyecto de desarrollo.

**Contexto y motivación**

Las Pautas de Accesibilidad para el Contenido Web (WCAG) 2.2 son el estándar internacional de facto para la accesibilidad digital. Cumplirlas no es solo una cuestión ética: en muchos países (incluida España con el Real Decreto 1112/2018) es una obligación legal para entidades públicas y, progresivamente, para el sector privado. La directiva europea de accesibilidad amplía el alcance a 2025.

**Lo que necesito que desarrolles**

1. **Los cuatro principios WCAG explicados para developers**: Perceptible, Operable, Comprensible, Robusto (POUR). Para cada principio, explica los criterios de éxito más importantes con ejemplos de código HTML/CSS/JavaScript.

2. **Los 10 errores de accesibilidad más frecuentes**: Con ejemplos de código incorrecto y su versión corregida. Incluye: imágenes sin alt, formularios sin labels, contraste insuficiente, foco de teclado no visible, videos sin subtítulos, modales con trampa de foco.

3. **Implementación práctica de ARIA**: Cuándo usar ARIA y cuándo no (primero HTML semántico). Roles, propiedades y estados más importantes. Ejemplos de componentes complejos accesibles: tabs, modales, menús desplegables, datepickers.

4. **Pruebas de accesibilidad automatizadas y manuales**: Herramientas automáticas (axe, Lighthouse, WAVE) y sus limitaciones. Cómo hacer pruebas manuales con lector de pantalla (NVDA en Windows, VoiceOver en Mac). Cómo integrar las pruebas de accesibilidad en el pipeline de CI/CD.

5. **Accesibilidad en frameworks modernos**: Consideraciones específicas para React, Vue y Angular. Gestión del foco en SPAs, anuncios de cambios de ruta para lectores de pantalla, componentes de UI libraries y sus niveles de accesibilidad.

6. **Nivel AA vs AAA**: Qué criterios diferencian nivel A, AA y AAA. Cuál es el mínimo legal, cuál es el objetivo recomendado y qué AAA vale la pena perseguir aunque no sea obligatorio.

**Formato de salida**

Estructura la respuesta con secciones técnicas claras. Incluye fragmentos de código en HTML, CSS y JavaScript para ilustrar cada punto. Proporciona una checklist de implementación que el equipo pueda usar en code reviews.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Implementar WCAG 2.2 en aplicaciones web de forma técnica y práctica',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño universal e inclusive UX: crear productos para todos',
                'description'      => 'Aprende los principios del diseño universal y cómo aplicarlos en tu proceso de UX para crear productos digitales que funcionen bien para el mayor espectro posible de usuarios, independientemente de sus capacidades.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de UX especializado en diseño inclusivo y accesibilidad. Quiero que me guíes en la incorporación del diseño universal y el inclusive UX en mi proceso de diseño de producto.

**Qué es el diseño universal y por qué importa**

El diseño universal no es hacer una versión especial para personas con discapacidad: es crear desde el principio interfaces que funcionen bien para el mayor espectro posible de usuarios. Las soluciones diseñadas para necesidades extremas suelen mejorar la experiencia de todos (el menú hamburguesa, los subtítulos, el zoom de pantalla nacieron de necesidades de accesibilidad).

**Lo que necesito que desarrolles**

1. **Los siete principios del diseño universal aplicados a UX digital**: Explica cada principio (uso equitativo, flexibilidad, uso simple e intuitivo, información perceptible, tolerancia al error, bajo esfuerzo físico, tamaño y espacio) con ejemplos concretos en interfaces digitales.

2. **Personas de diseño inclusivo**: Cómo enriquecer las personas de usuario tradicionales con perfiles de accesibilidad: usuario con visión reducida, usuario que solo usa teclado, usuario con dislexia, usuario mayor con destreza motora reducida, usuario con baja alfabetización digital. Cómo estas personas revelan problemas de diseño que las personas convencionales ocultan.

3. **Contraste, tipografía y color accesible**: Criterios concretos de WCAG para contraste (4.5:1 para texto normal, 3:1 para texto grande), tipografías legibles, tamaño mínimo de texto, espaciado. Herramientas de verificación. Cómo diseñar paletas de color que funcionen para personas con daltonismo.

4. **Componentes de interfaz accesibles**: Cómo diseñar componentes específicos de forma accesible: formularios (labels, mensajes de error claros), botones (tamaño mínimo táctil de 44x44px), navegación, modales, notificaciones, tablas de datos.

5. **Accesibilidad en el proceso de diseño**: Cómo integrar la accesibilidad en cada fase: investigación (incluir usuarios con discapacidad en tests), wireframing (anotar jerarquía semántica), prototipado (flujos de navegación alternativa), entrega al desarrollo (documentar comportamientos de accesibilidad).

6. **Herramientas de diseño accesible**: Qué pueden hacer Figma, Adobe XD y Sketch para verificar accesibilidad. Plugins de verificación de contraste, simuladores de visión reducida y daltonismo.

**Formato de salida**

Estructura la respuesta con secciones claras con ejemplos visuales descritos en palabras. Incluye una lista de los errores más frecuentes en el diseño UX desde la perspectiva de la accesibilidad. Cierra con un checklist de accesibilidad para el proceso de diseño.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Aplicar diseño universal e inclusive UX en el proceso de diseño de producto',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia comercial para vender soluciones de accesibilidad digital',
                'description'      => 'Aprende a construir el caso de negocio y el argumentario de ventas para soluciones de accesibilidad digital. Descubre cómo posicionar la accesibilidad como ventaja competitiva, obligación legal y oportunidad de mercado.',
                'prompt_content'   => <<<'EOT'
Actúa como un comercial B2B especializado en soluciones de tecnología accesible y consultoría de accesibilidad digital. Necesito tu ayuda para construir una estrategia de ventas efectiva para este tipo de soluciones.

**El reto de vender accesibilidad**

La accesibilidad digital es un mercado en expansión por la presión regulatoria creciente (European Accessibility Act 2025, EN 301 549, Real Decreto 1112/2018 en España), pero es un mercado donde los compradores a menudo no saben que tienen un problema. El primer obstáculo es hacer visible la necesidad antes de poder vender la solución.

**Lo que necesito que desarrolles**

1. **Identificación del comprador y sus motivaciones**: Define los perfiles de decisor para soluciones de accesibilidad: Director de IT (riesgo técnico y cumplimiento), Director Legal (riesgo regulatorio y sancionador), CMO (reputación de marca e inclusión), Director de Producto (calidad del producto) y RRHH (herramientas accesibles para empleados). Para cada perfil, define su principal motivación y su mayor objeción.

2. **Argumentario por motivación**: Construye argumentos específicos para cada motivación: el argumento del riesgo legal (sanciones de hasta el 4% de la facturación en algunos marcos), el argumento de mercado (1.000 millones de personas con discapacidad como audiencia desatendida), el argumento de SEO y UX (accesibilidad mejora posicionamiento y experiencia general), el argumento de marca (imagen de empresa inclusiva).

3. **Cómo crear urgencia sin alarmismo**: El European Accessibility Act entra en vigor en 2025 para muchas empresas del sector privado en Europa. Cómo usar este deadline como palanca de urgencia sin hacer FUD (Fear, Uncertainty, Doubt) excesivo.

4. **Gestión de objeciones frecuentes**: Cómo responder a: "ya tenemos accesibilidad básica", "es muy caro y no vemos el ROI", "eso es para empresas grandes", "ya lo hacemos con el desarrollo habitual", "podemos hacerlo internamente".

5. **Ciclo de venta y stakeholders**: Cómo gestionar un ciclo de venta que suele involucrar a múltiples departamentos. Cómo mapear los stakeholders, generar consenso y avanzar cuando hay resistencias en alguno de los departamentos.

6. **Propuesta de valor diferenciada**: Si compito con consultoras de accesibilidad más grandes o soluciones más baratas, cómo construir una propuesta de valor diferenciada. Qué elementos destacar y cómo demostrar competencia antes del contrato (audit gratuito, demo técnica, certificaciones).

**Formato de salida**

Estructura la respuesta con secciones numeradas. Incluye scripts de conversación y frases concretas para usar en llamadas de ventas. Cierra con un mapa del proceso de venta recomendado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir un argumentario y proceso de venta para soluciones de accesibilidad digital',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Roadmap de accesibilidad para productos digitales',
                'description'      => 'Aprende a construir y priorizar un roadmap de accesibilidad que integre las mejoras necesarias sin paralizar el desarrollo de nuevas funcionalidades. Gestiona la deuda de accesibilidad y comunica el progreso a todos los stakeholders.',
                'prompt_content'   => <<<'EOT'
Actúa como un Product Manager con experiencia en accesibilidad digital y gestión de deuda técnica. Necesito ayuda para construir y gestionar un roadmap de accesibilidad para un producto digital que actualmente no cumple con los estándares WCAG.

**El reto del PM con la accesibilidad**

La accesibilidad en un producto establecido suele ser deuda acumulada. Abordarla de golpe es impracticable; ignorarla es un riesgo legal y reputacional creciente. El Product Manager necesita un enfoque pragmático: priorizar por impacto y riesgo, integrar la accesibilidad en el flujo habitual de desarrollo, y comunicar el progreso a dirección, desarrollo y usuarios.

**Lo que necesito que desarrolles**

1. **Auditoría de accesibilidad para priorización de producto**: Cómo interpretar los resultados de una auditoría de accesibilidad (informe de herramientas automáticas + auditoría manual) desde la perspectiva del PM. Cómo clasificar los issues por: nivel de conformidad WCAG (A, AA, AAA), impacto en usuarios con discapacidad, frecuencia del componente afectado y esfuerzo de corrección.

2. **Framework de priorización de deuda de accesibilidad**: Un modelo de scoring para priorizar los issues de accesibilidad en el backlog. Cómo ponderar: riesgo legal (si el issue afecta a funcionalidad crítica), alcance (cuántos usuarios afecta), severidad (bloqueo total vs. dificultad parcial) y esfuerzo de corrección.

3. **Integración en el proceso de desarrollo**: Cómo evitar que se acumule nueva deuda de accesibilidad: Definition of Done con criterios de accesibilidad, revisiones de accesibilidad en el proceso de diseño y desarrollo, automatización de pruebas en CI/CD.

4. **Roadmap a 12 meses**: Cómo estructurar un roadmap de accesibilidad en fases: fase 1 (quick wins y eliminación de bloqueos críticos), fase 2 (cumplimiento nivel AA en flujos principales), fase 3 (mejoras avanzadas y mantenimiento continuo). Con hitos medibles en cada fase.

5. **Comunicación con stakeholders**: Cómo presentar el roadmap de accesibilidad a: dirección (argumentos legales y de negocio), desarrollo (beneficios técnicos del código semántico), diseño (integración en el proceso de diseño), y cómo reportar el progreso periódicamente.

6. **OKRs de accesibilidad**: Propón un conjunto de OKRs para los próximos dos trimestres que midan el progreso en accesibilidad de forma significativa y no solo con métricas de cumplimiento formal.

**Formato de salida**

Estructura la respuesta con secciones claras. Incluye una plantilla de scoring para priorización y una propuesta de OKRs de accesibilidad concretos. Cierra con los cinco errores más frecuentes de los PMs al gestionar la accesibilidad.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir y priorizar un roadmap de accesibilidad para productos digitales',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Reclutamiento inclusivo con herramientas y procesos accesibles',
                'description'      => 'Diseña procesos de selección y herramientas de RRHH que sean accesibles para candidatos y empleados con discapacidad. Aprende a eliminar barreras en cada fase del ciclo de vida del empleado.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en RRHH y diversidad, equidad e inclusión (DEI) con experiencia en accesibilidad en el entorno laboral. Necesito ayuda para diseñar procesos de reclutamiento y gestión de personas que sean genuinamente accesibles para personas con discapacidad.

**El problema del reclutamiento no accesible**

El proceso de selección tradicional está lleno de barreras para personas con discapacidad: formularios de solicitud inaccesibles, pruebas psicotécnicas online sin adaptaciones, entrevistas que no contemplan necesidades de comunicación, sistemas de ATS (Applicant Tracking System) que no funcionan con lectores de pantalla. El resultado es la exclusión sistemática de talento valioso.

**Lo que necesito que desarrolles**

1. **Auditoría del proceso de selección actual**: Una checklist de 25 puntos para identificar barreras de accesibilidad en cada fase: publicación de la oferta, formulario de solicitud, criba automática (ATS), pruebas de selección, entrevistas, y comunicación durante el proceso.

2. **Ofertas de empleo accesibles e inclusivas**: Cómo redactar ofertas que no disuadan a candidatos con discapacidad: lenguaje inclusivo, mención explícita de la apertura a ajustes razonables, descripción de requisitos que no excluyan capacidades no esenciales.

3. **Entrevistas accesibles**: Adaptaciones para diferentes tipos de discapacidad en el proceso de entrevista: discapacidad visual (no usar lenguajes no verbales como referencia), discapacidad auditiva (intérprete de lengua de signos, subtitulado en video), neurodivergencia (instrucciones claras y previas, tiempo extra, entorno sin distracciones), discapacidad motora (accesibilidad del espacio físico o alternativas remotas).

4. **Tecnologías de RRHH accesibles**: Cómo evaluar la accesibilidad de los sistemas de RRHH: ATS, plataformas de pruebas, sistemas de gestión del desempeño, portales de empleados. Qué preguntar a los proveedores sobre WCAG y estándares de accesibilidad.

5. **Ajustes razonables: marco legal y práctica**: Qué son los ajustes razonables en el contexto español y europeo, cuáles son los más frecuentes, cómo gestionarlos de forma confidencial y sin estigma, y qué ayudas y subvenciones existen para financiarlos.

6. **Onboarding accesible**: Cómo asegurar que el proceso de incorporación de nuevos empleados sea accesible: materiales en formatos alternativos, sistemas internos accesibles, buddy program para empleados con discapacidad.

**Formato de salida**

Estructura la respuesta con secciones claras. Incluye plantillas de comunicación (email de solicitud de ajustes razonables, protocolo de entrevista accesible) y una guía de referencia rápida para reclutadores.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Eliminar barreras de accesibilidad en el proceso de selección y RRHH',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'ROI y caso de negocio de la inversión en accesibilidad digital',
                'description'      => 'Aprende a construir el modelo financiero que justifica la inversión en accesibilidad digital ante la dirección. Cuantifica el riesgo legal, el mercado desatendido y los beneficios de UX para obtener la aprobación del presupuesto.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista financiero especializado en inversiones en tecnología y cumplimiento normativo. Necesito ayuda para construir un caso de negocio sólido que justifique la inversión en accesibilidad digital ante la dirección financiera.

**El reto de justificar la accesibilidad**

La accesibilidad digital se percibe frecuentemente como un coste de cumplimiento sin retorno. Esta percepción es errónea: la inversión en accesibilidad tiene retornos concretos y medibles. El reto del analista financiero es cuantificarlos de forma convincente para obtener aprobación presupuestaria.

**Lo que necesito que desarrolles**

1. **Cuantificación del riesgo legal**: El European Accessibility Act (EAA) entró en vigor en junio de 2025. En España, el RD 1112/2018 afecta al sector público. Próximamente el sector privado con más de 10 empleados o facturación superior a 2M€ tendrá obligaciones. Cuantifica el riesgo sancionador: multas potenciales, coste de litigios (en EE.UU. hubo más de 4.000 demandas ADA en 2023), y daño reputacional.

2. **Tamaño del mercado desatendido**: Cuantifica el mercado de personas con discapacidad: 1.000 millones en el mundo (15% de la población), 87 millones en la UE, 4,5 millones en España. Poder adquisitivo colectivo estimado. Cómo traducirlo en potencial de conversión y revenue para la empresa.

3. **Beneficios de UX con impacto en conversión**: Estudios que muestran que la accesibilidad mejora la usabilidad para todos los usuarios y puede impactar positivamente en tasas de conversión, bounce rate y SEO. Incluye datos concretos de casos documentados.

4. **Modelo de coste-beneficio a 3 años**: Construye una estructura de modelo financiero con: costes de implementación (auditoría, desarrollo, formación, mantenimiento), beneficios cuantificados (riesgo evitado, nuevos usuarios alcanzados, mejora de conversión estimada), y cálculo de VAN, TIR y periodo de recuperación.

5. **Coste de no actuar**: Qué pasa si no se invierte: coste de retrofitting a último momento cuando la regulación obligue (siempre más caro que diseñar accesible desde el inicio), coste de demandas o sanciones, coste reputacional.

6. **Benchmarking de la competencia**: Cómo evaluar el nivel de accesibilidad de los competidores principales como argumento adicional de urgencia. Si la competencia ya es accesible, el riesgo de pérdida de clientes es real.

**Formato de salida**

Estructura la respuesta con secciones claras. Incluye fórmulas y ejemplos numéricos con datos ficticios pero realistas. Proporciona una estructura de presentación ejecutiva de 8 slides para el comité de dirección.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir el modelo financiero para aprobar la inversión en accesibilidad digital',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cumplimiento normativo de accesibilidad digital en España y la UE',
                'description'      => 'Conoce el marco legal completo de accesibilidad digital en España y la Unión Europea. Aprende a evaluar el riesgo de incumplimiento, diseñar planes de conformidad y gestionar las obligaciones legales de tu organización.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho digital y cumplimiento normativo de accesibilidad. Necesito una guía legal completa sobre las obligaciones de accesibilidad digital en España y la Unión Europea, sus implicaciones prácticas y cómo gestionar el cumplimiento.

**El contexto regulatorio**

La accesibilidad digital ha pasado de ser una recomendación a una obligación legal exigible. El European Accessibility Act (EAA, Directiva 2019/882) transpuesto en España como Ley 11/2023, junto al RD 1112/2018 sobre accesibilidad de los sitios web y aplicaciones del sector público, configuran un marco cada vez más exigente que se extiende progresivamente al sector privado.

**Lo que necesito que desarrolles**

1. **Mapa normativo completo**: Explica y relaciona las normas clave: Directiva 2019/882 (EAA) y su alcance al sector privado desde 2025, RD 1112/2018 para el sector público, Ley 11/2023 de transposición, EN 301 549 como estándar técnico armonizado, relación con WCAG 2.1 nivel AA como referencia técnica. Incluye quién está obligado y desde cuándo.

2. **Alcance del European Accessibility Act**: Qué productos y servicios quedan obligados bajo el EAA: cajeros automáticos, terminales de pago, ordenadores y sistemas operativos, televisores, telecomunicaciones, servicios de banca electrónica, comercio electrónico, libros electrónicos, servicios de comunicaciones audiovisuales. Qué queda excluido y por qué.

3. **Declaración de Accesibilidad**: Qué es, qué debe contener, con qué frecuencia actualizarse, dónde publicarse y qué ocurre si la declaración no es veraz. Proporciona una estructura de declaración de accesibilidad tipo.

4. **Régimen sancionador**: Qué sanciones existen por incumplimiento, quién tiene potestad sancionadora en España, qué precedentes hay de sanciones efectivas, y cómo se tramita una queja o reclamación por accesibilidad.

5. **Plan de conformidad y gestión del riesgo**: Cómo elaborar un plan de conformidad gradual que reduzca el riesgo legal de forma estructurada. Priorización por nivel de obligación (A > AA > AAA), por frecuencia de uso y por impacto en usuarios con discapacidad.

6. **Tendencias y evolución normativa**: Qué cambios regulatorios se esperan en los próximos 2-3 años. Cómo anticiparse a la regulación del sector privado que aún no ha entrado en vigor. El papel de la autoridad de control que se está creando en España.

**Formato de salida**

Estructura la respuesta con secciones y subsecciones claras. Incluye una tabla comparativa de las principales normas. Cierra con una checklist de cumplimiento mínimo recomendado para una empresa del sector privado con presencia digital.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar el cumplimiento legal de accesibilidad digital en España y la UE',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte al cliente accesible para usuarios con discapacidad',
                'description'      => 'Diseña un sistema de soporte al cliente que sea genuinamente accesible para personas con discapacidad visual, auditiva, cognitiva o motora. Aprende a capacitar al equipo y adaptar los canales para servir a todos los usuarios con excelencia.',
                'prompt_content'   => <<<'EOT'
Actúa como un especialista en customer success y accesibilidad del servicio al cliente. Quiero diseñar un sistema de soporte al cliente que sea verdaderamente accesible para personas con diferentes tipos de discapacidad, sin sacrificar la calidad del servicio para ningún usuario.

**El problema del soporte inaccesible**

Muchas empresas tienen productos digitales razonablemente accesibles pero canales de soporte que no lo son: formularios de contacto inaccesibles, soporte solo por teléfono o chat de texto sin alternativas, agentes sin formación para comunicarse con personas con discapacidad auditiva, y bases de conocimiento que no funcionan con lectores de pantalla. El resultado es que los usuarios que más necesitan ayuda son los que menos pueden acceder a ella.

**Lo que necesito que desarrolles**

1. **Auditoría de accesibilidad del servicio de soporte actual**: Una checklist de 20 puntos para evaluar la accesibilidad de todos los canales de soporte: formulario de contacto web, email, chat en vivo, teléfono, centro de ayuda o FAQ, redes sociales y soporte por video.

2. **Canales de soporte accesibles por tipo de discapacidad**: Para cada tipo de discapacidad (visual, auditiva, motora, cognitiva, neurológica), qué canales funcionan mejor y qué adaptaciones son necesarias. Por ejemplo: relay services para usuarios sordos, soporte por email o chat para quienes no pueden hablar por teléfono, formatos alternativos para documentación.

3. **Formación del equipo de soporte**: Qué debe saber un agente de soporte sobre discapacidad: terminología respetuosa, cómo comunicarse con paciencia y claridad, cómo gestionar tiempos de respuesta más largos cuando son necesarios, cómo escalar a recursos especializados.

4. **Centro de ayuda y documentación accesible**: Cómo hacer que la base de conocimientos sea accesible: estructura semántica, texto alternativo en imágenes y capturas, videos con subtítulos y transcripciones, lenguaje simple, navegación por teclado.

5. **Procesos especiales para situaciones de accesibilidad**: Cómo gestionar: solicitudes de formato alternativo (audio, braille, texto grande), clientes con necesidades de comunicación no estándar, situaciones donde el tiempo de resolución necesita ser mayor por razones de accesibilidad.

6. **Métricas de accesibilidad del soporte**: Cómo medir si el soporte es efectivamente accesible: CSAT segmentado por canal, tiempo de resolución para usuarios con necesidades especiales, tasa de uso de canales accesibles alternativos, número de escalaciones por barreras de accesibilidad.

**Formato de salida**

Estructura la respuesta con secciones claras. Incluye ejemplos de scripts de comunicación para situaciones específicas y una guía de referencia rápida para el equipo de soporte.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar un sistema de soporte al cliente accesible para personas con discapacidad',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Auditorías de accesibilidad digital como servicio freelance',
                'description'      => 'Aprende a ofrecer auditorías de accesibilidad digital como servicio freelance. Desde la metodología técnica hasta la propuesta comercial y el informe final, construye un servicio diferenciado en un mercado con demanda creciente.',
                'prompt_content'   => <<<'EOT'
Actúa como un freelancer especialista en accesibilidad digital con experiencia en consultoría y auditorías para empresas de diferentes tamaños. Quiero desarrollar un servicio de auditoría de accesibilidad digital como línea de negocio freelance y necesito tu guía completa.

**Por qué las auditorías de accesibilidad son una oportunidad para freelancers**

El European Accessibility Act (2025) ha generado una oleada de demanda de servicios de accesibilidad que el mercado no puede satisfacer con los recursos actuales. Las grandes consultoras están sobrepasadas y las empresas medianas no pueden permitirse sus tarifas. Los freelancers especializados tienen una ventana de oportunidad para posicionarse como expertos accesibles con tarifas competitivas y servicio personalizado.

**Lo que necesito que desarrolles**

1. **Metodología de auditoría de accesibilidad**: Cómo estructurar una auditoría profesional de accesibilidad. Fases: alcance y briefing, auditoría automática con herramientas (axe, WAVE, Lighthouse), auditoría manual con lectores de pantalla, test con usuarios reales si aplica, documentación y priorización de issues, informe de conformidad WCAG.

2. **Herramientas del auditor freelance**: Stack completo de herramientas: NVDA y VoiceOver para pruebas con lector de pantalla, axe DevTools y extensiones de navegador, Color Contrast Analyzer, Accessibility Insights, aXe-core para integración en CI, tablero para documentar y priorizar findings.

3. **Diseño del servicio y sus paquetes**: Cómo estructurar la oferta en paquetes: auditoría básica automatizada (quick scan), auditoría completa WCAG 2.2 nivel AA (informe detallado), auditoría continua como retainer (seguimiento trimestral), formación al equipo cliente como add-on.

4. **Propuesta comercial y pricing**: Cómo calcular el precio de una auditoría según el tamaño del sitio (número de páginas únicas, complejidad de componentes), el nivel de conformidad objetivo y el tiempo estimado. Rangos de precios de mercado en España y Europa. Cómo posicionarse frente a herramientas automáticas baratas.

5. **El informe de auditoría**: Estructura de un informe de accesibilidad profesional: resumen ejecutivo (para no técnicos), índice de conformidad WCAG, listado priorizado de issues (con captura, descripción del problema, usuario afectado, criterio WCAG incumplido, recomendación de corrección y esfuerzo estimado), plan de corrección sugerido.

6. **Captación de clientes**: Cómo posicionarse como auditor freelance de accesibilidad: SEO especializado, LinkedIn con casos de estudio, colaboración con agencias de desarrollo web, partnerships con consultoras de DEI, propuesta directa a empresas con deadline de EAA próximo.

**Formato de salida**

Estructura la respuesta con secciones claras. Incluye una plantilla de propuesta comercial y una estructura de informe de auditoría que pueda reutilizarse. Cierra con un plan de lanzamiento del servicio en 30 días.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Lanzar un servicio freelance de auditorías de accesibilidad digital',
                'vote_score'       => 42,
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
