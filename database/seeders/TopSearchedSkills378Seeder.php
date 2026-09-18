<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills378Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de marketing para la expansión internacional de una startup',
                'description'      => 'Aprende a adaptar tu estrategia de marketing para entrar en nuevos mercados internacionales. Desde el análisis de mercado hasta la localización de mensajes y la selección de canales, domina el go-to-market internacional.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Marketing con experiencia en expansión internacional de startups B2B y B2C. Quiero que me ayudes a construir la estrategia de marketing para la entrada de mi startup en un nuevo mercado internacional.

**El reto del marketing internacional**

Copiar-pegar la estrategia de marketing del mercado de origen al mercado destino es uno de los errores más frecuentes y costosos en la expansión internacional. Los mensajes que funcionan en España pueden no resonar en México, Alemania o Brasil. Los canales que dominan en un país pueden ser irrelevantes en otro. La sensibilidad cultural, el comportamiento del consumidor y el ecosistema de medios varía enormemente.

**Lo que necesito que desarrolles**

1. **Análisis de mercado para selección de estrategia de entrada**: Qué variables de marketing debo analizar antes de entrar en un nuevo mercado: tamaño y crecimiento del segmento objetivo, comportamiento digital del consumidor (plataformas preferidas, dispositivos, hábitos de compra online), nivel de competencia local e internacional, sensibilidad al precio, barreras culturales.

2. **Localización de mensajes y propuesta de valor**: Cómo adaptar el posicionamiento y los mensajes clave al nuevo mercado. La diferencia entre traducción y localización. Qué elementos del mensaje son universales y cuáles deben adaptarse: tono, humor, referencias culturales, argumentos de compra, testimonios locales.

3. **Estrategia de canal por mercado**: Cómo seleccionar los canales de marketing adecuados para cada mercado. Ejemplos: en Brasil WhatsApp y YouTube son dominantes, en Alemania XING y email marketing tienen mayor penetración que en el sur de Europa, en EE.UU. los podcasts y newsletters tienen mayor ROI que en mercados hispanohablantes.

4. **Estrategia de contenidos para el nuevo mercado**: Cómo construir autoridad y visibilidad orgánica desde cero en un mercado donde no tienes presencia: SEO local, partnerships con medios locales, colaboración con influencers o thought leaders del sector, presencia en eventos locales.

5. **Métricas de validación del mercado**: Qué KPIs de marketing usar para validar que la entrada al mercado está funcionando antes de hacer inversiones grandes. CAC comparado con el mercado de origen, tasa de conversión por canal, tiempo de ciclo de venta, calidad de los leads generados.

6. **Plan de lanzamiento de 90 días**: Un plan de marketing para los primeros tres meses en el nuevo mercado. Semana a semana: qué actividades priorizar, con qué presupuesto mínimo y qué resultados esperar para decidir escalar o pivotar.

**Formato de salida**

Estructura la respuesta con secciones claras. Incluye ejemplos concretos de startups que han ejecutado bien o mal la expansión de su marketing. Cierra con los cinco errores de marketing más frecuentes en la expansión internacional y cómo evitarlos.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar la estrategia de marketing para entrar en nuevos mercados internacionales',
                'vote_score'       => 45,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura técnica para internacionalización y localización de software',
                'description'      => 'Aprende a diseñar e implementar una arquitectura técnica que soporte la internacionalización (i18n) y localización (l10n) de tu aplicación desde el inicio. Evita la deuda técnica de la internacionalización tardía.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software con experiencia en proyectos de internacionalización a gran escala. Necesito una guía técnica completa para diseñar e implementar la internacionalización y localización de una aplicación web o móvil.

**Por qué la i18n debe diseñarse desde el principio**

La internacionalización tardía es costosa. Refactorizar una aplicación que asume un único idioma, zona horaria y formato de datos puede consumir semanas o meses de desarrollo. El coste de hacerlo bien desde el principio es marginal comparado con el coste de la deuda técnica de i18n. Además, una mala implementación genera bugs sutiles: fechas que se muestran incorrectamente, strings truncados por diferencias de longitud entre idiomas, caracteres especiales que rompen formularios.

**Lo que necesito que desarrolles**

1. **Principios de arquitectura i18n**: Qué decisiones de arquitectura afectan a la internacionalización: separación de strings de la lógica de negocio, uso de sistemas de gestión de traducciones (TMS), diseño de base de datos para contenido multilingüe, gestión de URLs internacionalizadas (subdominio vs. subdirectorio vs. parámetro).

2. **Gestión de strings y archivos de traducción**: Formatos estándar (PO/MO, JSON, XLIFF, ICU MessageFormat). Cuándo usar cada uno. Cómo estructurar los namespaces de traducción. Cómo manejar pluralización, género gramatical e interpolación en diferentes idiomas.

3. **Fechas, horas, números y monedas**: El infierno de los formatos locales. Cómo usar la API Intl de JavaScript o equivalentes en otros lenguajes. Gestión de zonas horarias (almacenamiento siempre en UTC, conversión al mostrar). Formatos de fecha que varían por cultura (DD/MM/YYYY vs MM/DD/YYYY vs YYYY-MM-DD).

4. **Diseño de UI para múltiples idiomas**: Cómo diseñar interfaces que soporten idiomas de diferente longitud de texto (el alemán suele ser 30% más largo que el inglés), idiomas RTL (árabe, hebreo), y caracteres especiales de diferentes sistemas de escritura. Uso de unidades relativas, truncado inteligente y diseño flexible.

5. **Pipeline de localización y flujo de trabajo**: Cómo integrar la traducción en el proceso de desarrollo: extracción automática de strings, integración con herramientas de TMS (Phrase, Lokalise, Crowdin), revisión y aprobación de traducciones, importación al repositorio. Cómo evitar strings perdidos o desactualizados.

6. **Testing de i18n**: Cómo hacer QA de una aplicación internacionalizada: pseudolocalización para detectar problemas de UI sin traducciones reales, testing de RTL, testing de caracteres especiales (ñ, ü, 中文, árabe), verificación de formato de fechas y monedas por locale.

**Formato de salida**

Estructura la respuesta con secciones técnicas claras. Incluye ejemplos de código en al menos dos lenguajes o frameworks populares. Proporciona una checklist de implementación de i18n y los diez errores más frecuentes en proyectos de internacionalización.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar la arquitectura técnica de internacionalización y localización de software',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Localización cultural y visual de productos digitales para nuevos mercados',
                'description'      => 'Aprende a adaptar el diseño visual y la experiencia de usuario de tu producto para resonar culturalmente en nuevos mercados internacionales. Más allá de la traducción, descubre cómo los colores, iconos, imágenes y patrones de interacción varían entre culturas.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de UX especializado en localización cultural y diseño para mercados internacionales. Quiero que me guíes en el proceso de adaptar el diseño de un producto digital para resonar culturalmente en un nuevo mercado geográfico.

**La diferencia entre traducción y localización cultural**

Traducir el texto de una interfaz es solo el primer paso. La localización cultural va mucho más allá: los colores tienen significados diferentes por cultura (el blanco es luto en algunas culturas asiáticas, el verde tiene connotaciones religiosas en países islámicos), los iconos no son universales (el mailbox americano no existe en Europa), los patrones de interacción varían (la tendencia a completar formularios largos difiere entre mercados), y las imágenes de personas deben reflejar la diversidad del mercado destino.

**Lo que necesito que desarrolles**

1. **Framework de análisis cultural para diseño**: Cómo analizar un mercado objetivo desde la perspectiva del diseño. Dimensiones culturales de Hofstede aplicadas al diseño (individualismo vs. colectivismo, aversión a la incertidumbre, distancia al poder). Cómo estas dimensiones afectan las expectativas de los usuarios sobre la interfaz.

2. **Colores y simbolismo cultural**: Una guía de los significados culturales de los colores principales en los mercados más relevantes (EE.UU., Europa Occidental, China, Japón, India, Brasil, Oriente Medio). Cómo auditar la paleta de color actual para detectar conflictos culturales en el mercado destino.

3. **Iconografía y simbolismo visual**: Qué iconos asumen conocimiento cultural específico y deben adaptarse (gestos de mano, señales de tráfico, iconos de teléfono, buzones de correo, iconos de calendario). Cómo hacer un inventario de iconos con riesgo de malinterpretación cultural.

4. **Imágenes y representación**: Criterios para seleccionar imágenes de personas que sean culturalmente relevantes para el mercado destino: diversidad étnica, vestimenta, contextos sociales, lenguaje corporal. Cómo gestionar un banco de imágenes localizado para múltiples mercados.

5. **Patrones de UX que varían por cultura**: Qué patrones de interacción y layout funcionan diferente según el mercado: preferencia por densidad de información (mercados asiáticos suelen preferir más información en pantalla), formularios y privacidad de datos personales, patrones de pago y confianza en el comercio electrónico, uso de redes sociales en el login.

6. **Proceso de localización de diseño**: Cómo integrar la localización cultural en el proceso de diseño. Con quién colaborar (investigadores locales, usuarios beta en el mercado destino), qué artefactos crear (design tokens localizados, guía de estilo por mercado), cómo documentar las decisiones de localización para el equipo.

**Formato de salida**

Estructura la respuesta con secciones claras. Incluye ejemplos concretos de errores de localización cultural de marcas reconocidas y cómo los resolvieron. Cierra con una checklist de revisión de localización cultural para diseñadores.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Adaptar el diseño visual y UX para resonar culturalmente en mercados internacionales',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia de ventas B2B para entrar en nuevos mercados internacionales',
                'description'      => 'Diseña tu estrategia de ventas para conquistar un mercado internacional con un equipo pequeño. Aprende a seleccionar el modelo de entrada, construir el pipeline desde cero y adaptar el proceso de ventas a la cultura local.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Ventas con experiencia en expansión internacional de startups B2B. Quiero que me ayudes a diseñar la estrategia de ventas para entrar en un nuevo mercado internacional con un equipo pequeño y recursos limitados.

**El reto de las ventas en un mercado nuevo**

Cada mercado tiene su propia cultura de negocios: en Alemania el proceso de decisión es largo y estructurado; en EE.UU. la velocidad y el ROI son lo primero; en Japón la confianza personal y el protocolo son determinantes; en América Latina las relaciones personales son más importantes que las propuestas técnicas. Lo que funciona en el mercado de origen puede fallar completamente en el mercado destino.

**Lo que necesito que desarrolles**

1. **Selección del modelo de entrada en ventas**: Compara los modelos de entrada para ventas B2B: venta directa desde el mercado de origen (tele-ventas o viajes frecuentes), contratación de un representante local, partnership con distribuidor o reseller local, y canal indirecto a través de integradores. Para cada modelo, explica: cuándo es el adecuado, cuáles son los costes y tiempos de ramping, y cómo mitigar los riesgos.

2. **Cultura de negocios y proceso de venta**: Propón un guía de adaptación del proceso de ventas para al menos cuatro mercados distintos (por ejemplo: EE.UU., Alemania, Reino Unido y un mercado latinoamericano). Para cada uno: cómo es el proceso de decisión, quiénes son los stakeholders habituales, qué materiales de ventas se esperan, cuáles son las normas de protocolo en reuniones.

3. **Construcción de pipeline desde cero en un mercado nuevo**: Estrategias para generar los primeros leads cuando no tienes marca reconocida ni referencias en el mercado: cold outreach adaptado al mercado, participación en eventos locales del sector, co-marketing con partners locales, programas de referral para primeros clientes.

4. **Primer cliente en el nuevo mercado: la estrategia del ancla**: Cómo conseguir el primer cliente que sirva de referencia y abra el mercado. Estrategia de pricing para el cliente ancla, qué concesiones tienen sentido a largo plazo, cómo estructurar el caso de éxito para maximizar su valor comercial.

5. **Métricas de validación de mercado**: Qué KPIs de ventas usar para validar que el mercado está respondiendo antes de hacer inversiones significativas: número de demos conseguidas, tasa de conversión demo a propuesta, tiempo de ciclo de venta comparado con el mercado de origen, tamaño medio del contrato.

6. **Equipo de ventas local: cuándo y cómo contratar**: Cómo decidir cuándo es el momento de contratar el primer comercial local, qué perfil buscar (hunter vs. farmer, experiencia en el sector vs. en el mercado), y cómo gestionarlo a distancia desde la central.

**Formato de salida**

Estructura la respuesta con secciones claras. Incluye una tabla comparativa de modelos de entrada y una guía de protocolo de negocios para al menos tres mercados diferentes. Cierra con un plan de los primeros 90 días de entrada al mercado en ventas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar la estrategia de ventas B2B para la entrada en nuevos mercados internacionales',
                'vote_score'       => 46,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Gestión de producto para la expansión a mercados internacionales',
                'description'      => 'Aprende a gestionar un producto que sirve a múltiples mercados con necesidades diferentes. Desde la priorización de funcionalidades locales hasta la gestión de equipos distribuidos, domina el product management internacional.',
                'prompt_content'   => <<<'EOT'
Actúa como un Senior Product Manager con experiencia en productos globales y expansión internacional. Quiero que me ayudes a diseñar el enfoque de product management para gestionar un producto que está expandiéndose a nuevos mercados internacionales.

**El reto del PM en la expansión internacional**

La expansión internacional crea una tensión fundamental en el producto: entre la estandarización (un producto único para todos los mercados, más eficiente y mantenible) y la localización (adaptaciones que maximizan el fit con cada mercado). El PM debe gestionar esta tensión, priorizando qué adaptar y qué mantener común, sin perder el foco del roadmap global y sin crear un producto imposible de mantener.

**Lo que necesito que desarrolles**

1. **Framework de decisión: global vs. local**: Un modelo para decidir qué funcionalidades del producto deben ser globales (el mismo para todos los mercados) y cuáles deben ser localizadas. Criterios: frecuencia de uso, impacto en adopción, coste de localización, complejidad técnica, diferenciación competitiva en el mercado local.

2. **Investigación de usuarios en mercados nuevos**: Cómo hacer research de usuarios en un mercado donde no tienes presencia. Métodos: entrevistas remotas, encuestas localizadas, análisis de competencia local, colaboración con partners o distribuidores locales, shadowing de usuarios en visitas al mercado. Cómo interpretar los resultados con sensibilidad cultural.

3. **Gestión del backlog con múltiples mercados**: Cómo gestionar un backlog que recibe demandas de múltiples mercados con diferentes prioridades. Framework de scoring que incorpore el impacto global vs. local, y cómo comunicar a los stakeholders de cada mercado por qué sus peticiones no siempre son prioritarias.

4. **Roadmap de internacionalización por fases**: Cómo estructurar el roadmap de internacionalización del producto: fase 1 (i18n técnica y primer mercado), fase 2 (segundo y tercer mercado con aprendizajes del primero), fase 3 (escala a múltiples mercados con plataforma madura). Hitos y criterios de avance entre fases.

5. **Colaboración con equipos locales**: Cómo trabajar con equipos de ventas, marketing y customer success locales que conocen el mercado pero no el producto. Cómo recoger sus inputs de forma estructurada, cómo mantenerlos informados del roadmap y cómo gestionar sus expectativas cuando no podemos entregar lo que piden.

6. **Métricas de producto por mercado**: Cómo adaptar las métricas de producto para comparar y gestionar múltiples mercados. Engagement y retención ajustados a comportamientos locales, time-to-value por mercado, NPS por segmento geográfico. Cómo usar estas métricas para tomar decisiones de inversión por mercado.

**Formato de salida**

Estructura la respuesta con secciones claras. Incluye el framework de decisión global/local como tabla o matriz. Cierra con los cinco errores más frecuentes de los PMs en la gestión de productos internacionales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar el producto y el roadmap en la expansión a múltiples mercados internacionales',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Contratación y gestión de equipos internacionales en startups',
                'description'      => 'Aprende a contratar talento en múltiples países y a gestionar equipos distribuidos globalmente. Desde las consideraciones legales de empleo internacional hasta la cultura de equipo en entornos multiculturales, domina el RRHH global.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de RRHH con experiencia en startups de rápido crecimiento y contratación internacional. Necesito una guía completa para contratar y gestionar talento en múltiples países durante la expansión internacional de una startup.

**El reto de RRHH en la expansión internacional**

Contratar a alguien en otro país no es como contratar localmente. Cada país tiene su propio marco laboral, sistema de cotizaciones sociales, vacaciones obligatorias, causas de despido y beneficios mínimos. Las opciones de estructuración van desde la filial propia hasta el Employer of Record (EOR), y cada una tiene implicaciones legales, fiscales y de gestión muy diferentes.

**Lo que necesito que desarrolles**

1. **Modelos de contratación internacional**: Explica y compara las opciones para contratar en un país nuevo: filial propia (cuándo tiene sentido, costes y tiempos de constitución), Employer of Record o PEO (qué es, principales proveedores como Deel, Remote.com, Rippling, costes y limitaciones), contratista independiente (ventajas y riesgos de requalificación laboral), y agreement con empresa local partner.

2. **Consideraciones legales por región**: Para tres mercados relevantes (por ejemplo: EE.UU., Alemania y un país latinoamericano), explica los elementos clave del marco laboral que afectan a la contratación: periodo de prueba, causas y costes de despido, vacaciones obligatorias, beneficios mínimos legales, horario laboral máximo, sindicatos y convenios colectivos.

3. **Compensación internacional**: Cómo diseñar una política de compensación equitativa para un equipo distribuido en múltiples países. Diferencias de poder adquisitivo, coste de vida y salarios de mercado por país. Herramientas de benchmarking salarial internacional (Radford, Levels.fyi, Comptryx). Cómo evitar inequidades que generen tensión en el equipo.

4. **Onboarding en remoto para equipos distribuidos**: Cómo crear un proceso de onboarding efectivo para empleados en diferentes países y zonas horarias. Documentación accesible en el idioma local, buddy program, primeras semanas estructuradas, integración en la cultura de empresa sin presencialidad.

5. **Gestión de equipos multiculturales**: Cómo gestionar las diferencias culturales en el equipo: estilos de comunicación directa vs. indirecta, actitudes hacia la jerarquía, gestión del conflicto, expectativas sobre feedback, ritmo de trabajo y festivos locales. Herramientas y prácticas para crear cultura de equipo en la distancia.

6. **Cumplimiento de GDPR y privacidad de datos de empleados**: Las implicaciones de contratar en Europa para la gestión de datos de empleados. Qué información puede recogerse, cómo almacenarla y transferirla internacionalmente, y qué implica para los sistemas de RRHH.

**Formato de salida**

Estructura la respuesta con secciones claras. Incluye una tabla comparativa de los modelos de contratación internacional. Cierra con un checklist de 15 puntos para asegurar el cumplimiento en la contratación de un primer empleado en un nuevo país.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Contratar y gestionar equipos en múltiples países durante la expansión internacional',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Estructura financiera y fiscal para la expansión internacional de una startup',
                'description'      => 'Aprende a diseñar la estructura jurídica y fiscal óptima para la expansión internacional de tu startup. Desde la elección de la entidad legal en cada país hasta la planificación fiscal internacional, toma decisiones financieras sólidas.',
                'prompt_content'   => <<<'EOT'
Actúa como un CFO con experiencia en startups de alto crecimiento y estructuración financiera internacional. Necesito una guía para diseñar la estructura financiera y fiscal óptima para la expansión internacional de mi startup.

**Por qué la estructura financiera importa desde el principio**

Muchas startups abordan la expansión internacional sin pensar en la estructura legal y fiscal, y luego pagan el coste de una reestructuración compleja cuando crecen. La elección de la entidad legal en cada mercado, la estructura de holding, la política de precios de transferencia y la gestión de la tesorería multinacional tienen implicaciones que son mucho más baratas de resolver bien desde el principio que de corregir después.

**Lo que necesito que desarrolles**

1. **Modelos de estructura corporativa internacional**: Compara los modelos más habituales para startups europeas que se expanden: holding en España con filiales, holding en Holanda o Luxemburgo por eficiencia fiscal, estructura con entidad en EE.UU. para acceso a inversión americana (Delaware C-Corp), y modelos con IP holding en jurisdicciones favorables. Para cada modelo: cuándo tiene sentido, ventajas fiscales, complejidad operativa y coste de mantenimiento.

2. **Establecimiento permanente y obligaciones fiscales**: Cuándo una actividad en el extranjero genera obligación fiscal en ese país (establecimiento permanente). Qué actividades pueden realizarse sin crear establecimiento permanente. Cuáles son los umbrales y señales de alerta por país principal.

3. **Precios de transferencia**: Qué son y por qué importan para startups con filiales en múltiples países. Cómo establecer una política de precios de transferencia defensible para las transacciones entre entidades del grupo (royalties de IP, servicios intragrupo, distribución de costes). Documentación requerida y riesgos de no tenerla.

4. **Gestión de tesorería y tipos de cambio**: Cómo gestionar la tesorería en múltiples monedas. Estrategias básicas de cobertura de riesgo de cambio para startups sin recursos de treasury sofisticados. Centralización de la tesorería vs. cuentas locales. Proveedores de pago internacional para startups (Wise Business, Airwallex, Mercury).

5. **Financiación de la expansión**: Opciones de financiación específicas para la expansión internacional: venture debt, líneas de crédito bancario en el mercado destino, ayudas y subvenciones de ICEX, CDTI y organismos europeos para internacionalización.

6. **Reporting financiero consolidado**: Cómo construir el reporting financiero consolidado de un grupo con entidades en múltiples países. Tipos de cambio para consolidación (histórico vs. cierre), eliminación de operaciones intragrupo, presentación a inversores.

**Formato de salida**

Estructura la respuesta con secciones claras. Incluye una tabla comparativa de estructuras corporativas internacionales. Cierra con una guía de las diez preguntas que una startup debe responder antes de abrir su primera filial en el extranjero.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Diseñar la estructura financiera y fiscal para la expansión internacional',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Cumplimiento regulatorio en la expansión internacional de startups',
                'description'      => 'Aprende a navegar el laberinto regulatorio de múltiples jurisdicciones cuando tu startup entra en nuevos mercados. Desde la protección de datos hasta las licencias sectoriales y las restricciones de comercio, gestiona el cumplimiento legal internacional.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho mercantil internacional y cumplimiento regulatorio para startups. Necesito una guía para identificar y gestionar las obligaciones regulatorias cuando mi startup entra en nuevos mercados internacionales.

**El reto del cumplimiento regulatorio en la expansión**

La regulación es una de las barreras más subestimadas en la expansión internacional. Cada mercado tiene sus propias normas sobre privacidad de datos, contratos electrónicos, protección al consumidor, licencias sectoriales, restricciones de inversión extranjera y requisitos de establecimiento local. Desconocer estas normas puede resultar en multas, cierre forzado de operaciones o responsabilidad personal de los directivos.

**Lo que necesito que desarrolles**

1. **Mapa de riesgos regulatorios por mercado**: Cómo hacer un análisis inicial de riesgos regulatorios antes de entrar en un mercado. Qué preguntas hacer: ¿el sector está regulado localmente?, ¿se requiere licencia o registro local?, ¿hay restricciones a la inversión extranjera?, ¿qué norma de protección de datos aplica?, ¿hay restricciones a la importación de software o datos?

2. **Protección de datos e privacidad por región**: Compara los marcos de privacidad más relevantes: GDPR europeo, CCPA en California, LGPD en Brasil, PIPL en China y PDPA en algunos mercados asiáticos. Para cada uno: principios básicos, derechos de los usuarios, obligaciones del responsable del tratamiento, y sanciones por incumplimiento.

3. **Regulación sectorial**: Sectores con regulación especial que complica la expansión internacional: fintech (licencias de pago, dinero electrónico, crédito), healthtech (datos de salud, dispositivos médicos), edtech (privacidad de menores, COPPA, FERPA), legaltech (ejercicio de la abogacía), marketplace (responsabilidad sobre los vendedores).

4. **Contratos internacionales y ley aplicable**: Qué ley debe regir los contratos con clientes en el extranjero. Cuándo es necesario adaptar los Términos y Condiciones y la Política de Privacidad por mercado. Cláusulas de elección de foro y arbitraje internacional. Validez de contratos electrónicos por jurisdicción.

5. **Propiedad intelectual en mercados internacionales**: Cómo proteger la IP en los mercados de expansión. Marcas internacionales (Protocolo de Madrid), patentes (PCT), derechos de autor. Riesgos de IP en mercados con menor protección efectiva (China, algunos mercados emergentes). Cómo estructurar los contratos con distribuidores o partners para proteger la IP.

6. **Gestión del cumplimiento continuo**: Cómo mantenerse al día con los cambios regulatorios en múltiples mercados. Estructura interna de compliance, uso de asesores legales locales vs. firmas internacionales, herramientas de monitoring regulatorio, plan de respuesta ante cambios normativos.

**Formato de salida**

Estructura la respuesta con secciones claras. Incluye una tabla de comparación de marcos de privacidad por región. Cierra con un checklist de due diligence regulatoria antes de la entrada en un nuevo mercado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Gestionar el cumplimiento regulatorio en la expansión internacional de startups',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Soporte al cliente global: gestión en múltiples regiones y zonas horarias',
                'description'      => 'Diseña un sistema de customer success que sirva a clientes en múltiples países, zonas horarias e idiomas. Desde la cobertura 24/7 hasta la localización del soporte, construye una operación global de atención al cliente.',
                'prompt_content'   => <<<'EOT'
Actúa como un Director de Customer Success con experiencia en operaciones globales de soporte para empresas SaaS y tecnología. Quiero que me ayudes a diseñar un sistema de soporte al cliente que funcione eficazmente en múltiples regiones, zonas horarias e idiomas.

**El reto del soporte global**

Dar soporte a clientes en múltiples países introduce complejidades que no existen en el mercado local: diferencias horarias que crean huecos de cobertura, necesidad de soporte en múltiples idiomas, variaciones en las expectativas de servicio por cultura, y la dificultad de mantener consistencia en la calidad del soporte con equipos distribuidos en diferentes geografías.

**Lo que necesito que desarrolles**

1. **Modelo de cobertura horaria global**: Cómo diseñar un modelo de cobertura que garantice tiempos de respuesta aceptables para clientes en múltiples zonas horarias. Opciones: equipo único con turnos rotativos, centros de soporte en múltiples geografías (modelo "follow the sun"), soporte asíncrono prioritario fuera del horario de oficina, automatización para reducir la carga fuera de horario.

2. **Estrategia de soporte multilingüe**: Para cada fase de crecimiento, qué nivel de localización del soporte tiene sentido. Opciones: soporte en inglés como lengua franca, soporte en idiomas locales con agentes nativos, traducción automática asistida por IA para idiomas de menor volumen. Cuándo justifica la inversión en agentes nativos por idioma.

3. **Centro de ayuda y self-service localizado**: Cómo construir una base de conocimientos que escale globalmente. Estrategia de traducción de la documentación: qué traducir primero (los artículos de mayor tráfico), cómo mantener las traducciones actualizadas cuando el producto evoluciona, herramientas de gestión de contenido multilingüe.

4. **Expectativas de servicio por cultura**: Cómo adaptar el estilo de comunicación del soporte según la cultura del cliente. Ejemplos: clientes alemanes esperan respuestas técnicamente exhaustivas y sin ambigüedades; clientes latinoamericanos valoran el tono personal y la empatía; clientes japoneses esperan formalidad y seguimiento proactivo. Cómo formar al equipo en estas diferencias.

5. **Escalación y coordinación entre equipos globales**: Cómo gestionar la escalación de tickets entre equipos en diferentes geografías. Protocolos de handover entre turnos, documentación del contexto del cliente, responsabilidad clara del propietario del ticket durante el proceso de escalación.

6. **Métricas de calidad en equipos globales**: Cómo medir y asegurar la consistencia de la calidad del soporte entre diferentes equipos y regiones. CSAT y NPS por región y por idioma, tiempo de primera respuesta por zona horaria, adherencia a protocolos, calibraciones de calidad entre equipos distribuidos.

**Formato de salida**

Estructura la respuesta con secciones claras. Incluye una tabla de modelos de cobertura con pros y contras, y una guía de adaptación cultural del tono de soporte para al menos tres mercados. Cierra con un plan de implementación de soporte global en 6 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir una operación de customer success global con cobertura en múltiples regiones',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Captación de clientes internacionales como freelancer',
                'description'      => 'Aprende a posicionarte y captar clientes fuera de tu mercado local como profesional independiente. Desde la adaptación de tu propuesta de valor hasta la gestión de pagos internacionales y contratos en múltiples jurisdicciones.',
                'prompt_content'   => <<<'EOT'
Actúa como un freelancer internacional consolidado con experiencia trabajando con clientes de múltiples países y culturas. Quiero que me ayudes a diseñar mi estrategia para captar y gestionar clientes internacionales como profesional independiente.

**Por qué la internacionalización es una oportunidad para los freelancers**

El trabajo remoto ha eliminado muchas barreras geográficas para los freelancers. Un profesional en España puede trabajar con clientes en EE.UU., Alemania o Brasil sin necesidad de moverse. Esto abre el acceso a mercados donde las tarifas son más altas (especialmente el mercado anglosajón), donde hay mayor demanda de ciertas especialidades, o donde la competencia local es menor. Sin embargo, la internacionalización del negocio freelance tiene sus propios retos.

**Lo que necesito que desarrolles**

1. **Selección de mercados objetivo**: Cómo identificar los mercados internacionales más atractivos para mi especialidad como freelancer. Criterios: nivel de tarifas de mercado, demanda del tipo de servicio, barrera idiomática, diferencia cultural, facilidad de pago, y mi capacidad de competir con freelancers locales. Qué fuentes usar para hacer este análisis (Upwork, LinkedIn, Glassdoor, informes de asociaciones profesionales).

2. **Posicionamiento para clientes internacionales**: Cómo adaptar mi propuesta de valor para resonar con clientes en mercados anglosajones, alemanes o latinoamericanos. Diferencias en lo que valoran: un cliente americano suele valorar velocidad y ROI claro; uno alemán, precisión técnica y cumplimiento de plazos; uno latinoamericano, la relación personal además de la competencia técnica.

3. **Portfolio y presencia digital internacional**: Cómo construir un portfolio y una presencia digital que atraiga clientes internacionales. Perfil de LinkedIn en inglés, portfolio bilingüe, testimonios de clientes internacionales, presencia en plataformas globales (Toptal, Upwork, Contra, YunoJuno) vs. captación directa.

4. **Propuestas y contratos para clientes internacionales**: Cómo adaptar las propuestas comerciales para diferentes culturas. Qué elementos incluir en un contrato con cliente extranjero: ley aplicable, foro de resolución de conflictos, propiedad intelectual, confidencialidad. Plantillas de contrato en inglés para diferentes tipos de proyectos.

5. **Gestión de pagos internacionales**: Opciones para recibir pagos de clientes en el extranjero con mínimas comisiones: Wise (TransferWise), Payoneer, Stripe, SWIFT, facturación en moneda extranjera. Implicaciones fiscales de cobrar en divisas. Cómo gestionar el riesgo de tipo de cambio cuando el proyecto es largo.

6. **Comunicación y gestión de proyectos cross-cultural**: Cómo gestionar las diferencias culturales en la comunicación con clientes internacionales: expectativas de disponibilidad y tiempos de respuesta, estilo de feedback (directo vs. indirecto), gestión de las discrepancias sobre el alcance del trabajo, cómo manejar conflictos a distancia y en otro idioma.

**Formato de salida**

Estructura la respuesta con secciones claras. Incluye una tabla comparativa de plataformas para freelancers internacionales y una guía de adaptación cultural de la comunicación para al menos tres mercados. Cierra con un plan de 60 días para conseguir el primer cliente internacional.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Captar clientes internacionales y gestionar proyectos cross-border como freelancer',
                'vote_score'       => 47,
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
