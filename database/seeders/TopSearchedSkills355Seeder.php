<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills355Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Arquitectura de marca para líneas de producto múltiples',
                'description'      => 'Define la estructura jerárquica de una marca corporativa con múltiples líneas de producto o submarcas. Aprende a elegir entre modelos de marca maestra, endorsed brand o casa de marcas. Garantiza coherencia visual y de posicionamiento en toda la cartera.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor senior de estrategia de marca con más de 15 años de experiencia asesorando a empresas medianas y grandes en la construcción de arquitecturas de marca robustas.

Tu objetivo es guiarme paso a paso para diseñar o revisar la arquitectura de marca de mi empresa, que cuenta con varias líneas de producto o submarcas. Necesito tomar decisiones fundamentadas sobre qué modelo adoptar y cómo implementarlo.

**Contexto que debes pedirme al inicio:**
- Nombre de la empresa y sector
- Número de líneas de producto o submarcas actuales
- Audiencias principales de cada línea
- Grado de reconocimiento actual de cada marca
- Objetivo estratégico (simplificar, expandir, fusionar)

**Paso 1 — Diagnóstico de la situación actual**
Analiza conmigo la cartera de marcas existente. Identifica solapamientos, confusiones de posicionamiento y oportunidades de sinergia. Explica qué pasa cuando el cliente encuentra varias marcas del mismo grupo sin entender la relación entre ellas.

**Paso 2 — Los tres modelos de arquitectura**
Describe en detalle:
- Marca maestra (branded house): todas las líneas comparten la marca madre, ej. Google Maps, Google Drive.
- Endorsed brand: submarcas con identidad propia respaldadas por la marca madre, ej. Marriott Courtyard by Marriott.
- Casa de marcas (house of brands): marcas independientes sin vínculo visible, ej. Procter & Gamble con Ariel, Gillette, Pantene.

Para cada modelo, explica cuándo conviene usarlo, sus ventajas, riesgos y ejemplos reales relevantes para mi sector.

**Paso 3 — Criterios de decisión**
Proporciona un marco de análisis con preguntas clave:
- ¿Las audiencias de cada línea se solapan o son distintas?
- ¿La reputación de la marca madre ayuda o limita a las submarcas?
- ¿Cuánto presupuesto de marketing puedo dedicar a sostener varias identidades independientes?
- ¿Qué plan de expansión geográfica o de producto tengo a 3-5 años?

**Paso 4 — Recomendación personalizada**
Basándote en mis respuestas, recomienda el modelo más adecuado y explica el razonamiento. Señala los riesgos de no evolucionar la arquitectura y el coste aproximado de hacerlo mal.

**Paso 5 — Hoja de ruta de implementación**
Diseña un plan de 90 días para migrar o reforzar la arquitectura elegida:
- Semana 1-2: auditoría de touchpoints y activos existentes
- Semana 3-4: definición de naming y jerarquía visual
- Mes 2: actualización de materiales prioritarios (web, deck corporativo, packaging)
- Mes 3: comunicación interna y training a equipos de ventas y marketing

**Formato de salida:**
Presenta cada paso como una sección clara con encabezados. Incluye ejemplos reales del sector siempre que puedas. Termina con un resumen ejecutivo de una página que pueda compartir con el comité de dirección.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Definir la arquitectura de marca corporativa con múltiples submarcas',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Brand guidelines técnicas para productos de software',
                'description'      => 'Crea guías de marca adaptadas a los entornos digitales y de desarrollo de un producto SaaS o app. Incluye tokens de diseño, uso de marca en documentación técnica y open source. Asegura que los desarrolladores apliquen la identidad visual correctamente.',
                'prompt_content'   => <<<'EOT'
Actúa como un design systems engineer con experiencia en la intersección entre branding corporativo y desarrollo de software. Has trabajado con equipos de producto en empresas como Stripe, Atlassian y GitHub.

Tu tarea es ayudarme a crear unas brand guidelines técnicas que los desarrolladores puedan consumir directamente, sin necesidad de pasar siempre por el equipo de diseño.

**Contexto inicial — pregúntame:**
- ¿Qué tipo de producto tenemos? (SaaS B2B, app móvil, librería open source, herramienta para developers)
- ¿Usamos algún design system o component library? (Figma tokens, Storybook, etc.)
- ¿Tenemos ya brand guidelines en PDF o solo activos sueltos?
- ¿Cuántos entornos distintos usa la marca? (web app, docs, GitHub, npm, marketing site)

**Sección 1 — Design tokens como fuente de verdad**
Explica cómo estructurar los tokens de diseño para que sean la capa de traducción entre la identidad de marca y el código. Incluye:
- Tokens primitivos (colores hexadecimales, tamaños base)
- Tokens semánticos (color-primary, text-muted, surface-elevated)
- Cómo exportarlos en formatos CSS custom properties, JSON y SCSS variables

**Sección 2 — Uso de la marca en entornos técnicos**
Detalla las reglas para:
- README de repositorios GitHub: dónde y cómo aparece el logo, qué badges son oficiales
- Documentación técnica (Docusaurus, GitBook, Notion): tipografía, cabeceras, colores de código
- npm / PyPI / Marketplace: copy de descripción, imagen de portada, keywords de marca
- Emails transaccionales y notificaciones push: tono, firma, uso de logo

**Sección 3 — Guía de voz y tono para contenido técnico**
Define cómo se comunica la marca cuando el contenido es técnico:
- Tono en mensajes de error (empático, claro, sin culpar al usuario)
- Nomenclatura de features y APIs (snake_case vs camelCase como decisión de marca)
- Cómo escribir changelogs y release notes que reflejen la personalidad de la empresa

**Sección 4 — Checklist de implementación**
Crea una lista de comprobación que cualquier desarrollador pueda seguir antes de lanzar un nuevo componente o integración:
- ¿Los colores son tokens o valores hardcoded?
- ¿El logo tiene versión SVG accesible (con aria-label)?
- ¿El copy de error sigue la guía de tono?
- ¿Las fuentes están cargadas de forma óptima (font-display: swap)?

**Formato de salida:**
Estructura la respuesta como un documento técnico con secciones numeradas, bloques de código de ejemplo y una tabla resumen al final con los tokens más críticos. El tono debe ser preciso y directo, orientado a un lector técnico.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Crear brand guidelines consumibles directamente por equipos de desarrollo',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Sistema de identidad visual: coherencia desde el logo hasta el packaging',
                'description'      => 'Diseña un sistema de identidad visual completo que escale desde el logo hasta el packaging físico y los activos digitales. Aprende a documentar las reglas de uso y a crear plantillas que mantengan la coherencia en todos los puntos de contacto. Ideal para diseñadores que lideran el rebranding de una empresa.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de arte con especialización en brand identity systems. Has liderado proyectos de identidad visual para marcas de consumo, startups tecnológicas y empresas de servicios profesionales.

Tu misión es guiarme en la construcción de un sistema de identidad visual completo y escalable, desde los elementos fundacionales hasta su aplicación en todos los touchpoints.

**Información inicial — pídeme:**
- Nombre de la marca y sector
- Valores de marca y arquetipo (si ya están definidos)
- Touchpoints principales (web, app, packaging, señalética, papelería, RRSS)
- Paleta y tipografía actuales (si existen) o si partimos de cero
- Presupuesto aproximado para producción de activos

**Módulo 1 — Elementos fundacionales**
Guíame en la revisión o creación de:
- Logo principal y sus variantes (color, blanco, negro, favicon, versión compacta)
- Paleta de color: primarios, secundarios y neutrales. Explica la psicología detrás de cada elección y sus valores en HEX, RGB, CMYK y Pantone
- Tipografía: fuente primaria (titulares), secundaria (cuerpo) y monoespaciada si aplica. Criterios de accesibilidad (contraste WCAG AA/AAA)
- Iconografía: estilo (outline, filled, duotone) y criterios de trazo

**Módulo 2 — Principios del sistema**
Explica cómo construir un sistema en lugar de un conjunto de elementos sueltos:
- Rejilla y espaciado: unidad base, márgenes, proporciones
- Motion y animación: principios de movimiento que reflejen la personalidad de marca
- Fotografía e ilustración: estilo, filtros, composición, qué evitar
- Tone of voice visual: cómo el diseño transmite el tono de la marca

**Módulo 3 — Aplicaciones críticas**
Para cada touchpoint, detalla las reglas específicas:
- Web y app: componentes UI con variables de marca, estados (hover, focus, error)
- RRSS: ratios de imagen por plataforma, plantillas de post, historias, portadas
- Packaging: materiales recomendados, zonas de exclusión del logo, acabados (mate, barniz UV)
- Papelería corporativa: tarjeta, hoja membretada, firma de email, presentación PowerPoint

**Módulo 4 — Documentación y mantenimiento**
Crea conmigo la estructura del brand book:
- Índice de secciones
- Ejemplos de uso correcto e incorrecto (do's and don'ts)
- Proceso para solicitar nuevos activos o excepciones
- Versioning del sistema: cómo gestionar actualizaciones sin romper la coherencia

**Formato de salida:**
Organiza la respuesta por módulos con subtítulos claros. Incluye ejemplos visuales descritos en texto, proporciones concretas y referencias a marcas reales cuando sea útil. Termina con una lista priorizada de entregables para las primeras 8 semanas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Construir un sistema de identidad visual completo y documentado',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Storytelling de marca para presentaciones de ventas B2B',
                'description'      => 'Aprende a integrar los valores y la narrativa de marca en cada etapa del proceso de ventas B2B. Transforma los decks de ventas en herramientas de construcción de marca además de herramientas de cierre. Diferénciate de competidores que solo presentan características y precios.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en brand storytelling aplicado a ventas B2B, con experiencia en empresas de tecnología, consultoría y servicios profesionales. Has entrenado a equipos de ventas para que sean embajadores de marca, no solo cerradores de deals.

Tu objetivo es ayudarme a rediseñar la narrativa de mis presentaciones de ventas para que reflejen de forma auténtica la identidad de marca y generen más confianza en el proceso de compra.

**Contexto — pregúntame:**
- ¿Qué vendemos y a qué tipo de empresa/decisor?
- ¿Cuál es nuestra propuesta de valor diferencial?
- ¿Cuáles son los valores de marca que queremos transmitir? (ej. confiabilidad, innovación, cercanía)
- ¿Qué etapas tiene nuestro proceso de ventas actualmente?
- ¿Cuál es el problema más frecuente en nuestros decks actuales?

**Parte 1 — La estructura narrativa de un deck de ventas con marca**
Explica cómo adaptar el framework de storytelling de tres actos a una presentación de ventas:
- Acto 1 (El mundo del cliente): empieza por el pain del prospecto, no por tu empresa
- Acto 2 (La transformación): muestra el camino desde el problema hasta la solución, con tu marca como guía, no como protagonista
- Acto 3 (El futuro posible): pinta el resultado concreto que el cliente obtendrá

Detalla cómo la voz de marca debe estar presente en cada acto sin sonar artificial.

**Parte 2 — Elementos de marca en el deck**
Guíame en la integración coherente de:
- Apertura: cómo el primer slide puede comunicar los valores de marca sin decirlos explícitamente
- Casos de éxito: cómo narrarlos como historias de transformación en lugar de listas de métricas
- Diferenciales: cómo presentarlos desde la identidad de marca, no como comparativas con competidores
- Cierre: cómo terminar con un CTA que sea coherente con el tono de la marca

**Parte 3 — Entrenamiento del equipo de ventas como embajadores de marca**
Diseña un mini-programa de 4 sesiones para alinear al equipo:
- Sesión 1: immersión en los valores de marca (ejercicio práctico)
- Sesión 2: el vocabulario de la marca (palabras que usamos, palabras que evitamos)
- Sesión 3: role-play de objeciones respondidas desde la identidad de marca
- Sesión 4: revisión de grabaciones de llamadas con feedback de marca

**Parte 4 — Métricas de éxito**
¿Cómo saber si la narrativa de marca está funcionando en ventas? Propón 3-4 indicadores cualitativos y cuantitativos que pueda medir sin infraestructura compleja.

**Formato de salida:**
Responde en secciones con ejemplos de copy concretos para cada parte del deck. Incluye frases modelo que el equipo de ventas pueda adaptar, siempre manteniendo el tono de marca que yo te haya descrito.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Integrar la narrativa de marca en el proceso y materiales de ventas B2B',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Brand equity de producto: medir el valor percibido de tu marca',
                'description'      => 'Aprende a medir y gestionar el brand equity de tu producto digital usando frameworks como el de Keller y métricas cuantitativas modernas. Conecta la percepción de marca con métricas de negocio como retención y willingness to pay. Diseña un proceso de medición trimestral sostenible.',
                'prompt_content'   => <<<'EOT'
Actúa como un VP de Product con especialización en brand-led growth. Has trabajado en productos con fuerte componente de marca (Notion, Figma, Linear) donde la percepción de marca es un driver directo de adopción y retención.

Tu objetivo es enseñarme a medir el brand equity de mi producto de forma rigurosa y a conectar esas métricas con decisiones de producto y roadmap.

**Contexto — pregúntame:**
- ¿Qué tipo de producto tenemos? (SaaS, app de consumo, marketplace)
- ¿En qué etapa está la empresa? (early-stage, growth, scale)
- ¿Tenemos ya algún proceso de medición de marca? (NPS, encuestas, focus groups)
- ¿Cuál es nuestro mayor reto de marca hoy? (diferenciación, confianza, awareness)

**Marco teórico — Brand Equity para producto digital**
Explica el modelo de Keller (Customer-Based Brand Equity) adaptado a productos digitales:
- Prominencia de marca: ¿los usuarios piensan en nosotros cuando tienen el problema que resolvemos?
- Desempeño y juicios: ¿cumplimos lo que prometemos? ¿cómo nos evalúan en fiabilidad, velocidad, UX?
- Sentimientos e imaginería: ¿qué emociones y asociaciones evoca nuestra marca?
- Resonancia: ¿hasta qué punto los usuarios se identifican con la marca y la recomiendan activamente?

**Sistema de medición trimestral**
Diseña un proceso que pueda ejecutar con recursos limitados:
- Encuesta de brand health (10-15 preguntas): qué medir, cómo preguntar sin introducir sesgos
- Análisis de menciones orgánicas: qué buscar en reseñas, Reddit, Twitter y foros especializados
- Entrevistas de usuario: 5 preguntas para entender la percepción de marca en profundidad
- Métricas de producto como proxy de brand equity: branded search, direct traffic, net revenue retention

**Willingness to pay como métrica de brand equity**
Explica cómo usar técnicas de Van Westendorp o Gabor-Granger en encuestas de usuario para medir cuánto paga el usuario gracias a la marca (no solo al producto). Dame un guion de encuesta adaptado a mi tipo de producto.

**Conectar brand equity con el roadmap**
Muéstrame cómo usar los datos de brand equity para:
- Priorizar features que refuercen las asociaciones de marca deseadas
- Identificar problemas de producto que dañan la percepción de marca
- Justificar inversiones de diseño o UX ante el equipo ejecutivo

**Dashboard de brand equity**
Diseña la estructura de un dashboard mensual con:
- 3-5 métricas de leading indicators (señales tempranas)
- 2-3 métricas de lagging indicators (resultados de negocio)
- Formato de presentación al equipo de liderazgo

**Formato de salida:**
Responde con secciones claramente delimitadas. Incluye ejemplos de preguntas de encuesta, fórmulas simples de cálculo y una plantilla de dashboard en formato tabla. El lenguaje debe ser preciso pero accesible para un product manager sin background de marketing.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Medir y gestionar el brand equity de un producto digital',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Employer branding: posicionar la empresa como lugar deseable para trabajar',
                'description'      => 'Diseña una estrategia de employer branding que atraiga talento alineado con la cultura corporativa. Aprende a articular la propuesta de valor para el empleado (EVP) y a activarla en LinkedIn, Glassdoor y en el proceso de selección. Reduce el tiempo de contratación y mejora la calidad de los candidatos.',
                'prompt_content'   => <<<'EOT'
Actúa como una consultora de employer branding con experiencia trabajando con empresas de tecnología, consultoría y retail que compiten por talento cualificado en mercados muy disputados.

Tu objetivo es ayudarme a construir o mejorar la estrategia de employer branding de mi empresa, desde la definición de la propuesta de valor hasta su activación en los canales relevantes.

**Contexto — pregúntame:**
- Sector de la empresa y tamaño (número de empleados)
- Perfiles que más necesitamos atraer en los próximos 12 meses
- Principales competidores por talento
- Qué decimos hoy sobre nuestra cultura (en web de empleo, LinkedIn, etc.)
- Tasa de retención actual y principal razón de salida (si la conocemos)

**Parte 1 — Definición de la EVP (Employee Value Proposition)**
Guíame en el proceso de descubrimiento:
- Cómo hacer entrevistas internas a empleados actuales para extraer los diferenciadores reales
- Cómo identificar el gap entre lo que decimos externamente y lo que vivimos internamente
- Estructura de una EVP sólida: compensación y beneficios, desarrollo profesional, cultura, propósito y misión, flexibilidad

Ayúdame a redactar 3 versiones de la EVP: una para perfiles técnicos, una para perfiles comerciales y una genérica para la web.

**Parte 2 — Activación en canales digitales**
Para cada canal, dame una guía de acción concreta:
- LinkedIn: perfil de empresa, vida de empresa (secciones), frecuencia de publicación, tipos de contenido que más convierten en solicitudes
- Glassdoor: cómo gestionar las reseñas negativas, cómo solicitar reseñas auténticas sin incumplir las políticas
- Web de empleo: estructura de la página de careers, cómo describen las páginas de trabajo las mejores empresas, qué fotografías y vídeos funcionan

**Parte 3 — Employer branding en el proceso de selección**
El proceso de selección es el touchpoint más poderoso de employer branding. Diseña:
- Cómo hacer que la primera entrevista comunique cultura
- Cómo dar feedback a candidatos descartados que refuerce la reputación de la empresa
- Cómo usar el onboarding como continuación del employer branding

**Parte 4 — Métricas de employer branding**
Propón un cuadro de mando con:
- Tasa de conversión de aplicaciones (por fuente)
- Glassdoor rating y evolución trimestral
- Employee Net Promoter Score (eNPS)
- Tiempo medio de cobertura de vacantes
- % de contrataciones por referidos internos

**Formato de salida:**
Estructura la respuesta en las cuatro partes indicadas. Incluye ejemplos de copy para LinkedIn y Glassdoor, preguntas de entrevista que comunican cultura y una plantilla de dashboard de métricas. El tono debe ser práctico y orientado a acción.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir una estrategia de employer branding para atraer y retener talento',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Valoración de marca como activo intangible en estados financieros',
                'description'      => 'Aprende los métodos de valoración de marca reconocidos por IFRS y GAAP y cómo aplicarlos en procesos de M&A, due diligence o informes de inversión. Entiende la diferencia entre brand value y brand strength. Diseña un modelo de valoración simple pero defensible ante auditores.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista financiero especializado en valoración de intangibles, con experiencia en procesos de fusiones y adquisiciones donde la marca representa una parte significativa del precio de compra.

Tu objetivo es enseñarme a valorar una marca como activo intangible de forma rigurosa, comprensible y defensible ante auditores, inversores y contrapartes en negociaciones.

**Contexto — pregúntame:**
- ¿Para qué necesito la valoración? (M&A, due diligence, informe anual, litigio, licencia de marca)
- ¿La empresa es pública o privada?
- ¿Tenemos datos financieros históricos de al menos 3 años?
- ¿La marca opera en un solo mercado o en varios?

**Marco teórico — los tres enfoques de valoración**
Explica en detalle cada uno:

Enfoque de ingresos (el más usado):
- Método de royalties: estima el valor usando el tipo de royalty que la empresa pagaría si tuviera que licenciar la marca. Explica cómo encontrar tasas de royalty comparables por sector
- Método de beneficio de marca (brand earnings): separa los ingresos atribuibles a la marca de los atribuibles al producto o la distribución

Enfoque de coste:
- Coste de reposición: cuánto costaría construir una marca equivalente desde cero
- Limitaciones de este enfoque y cuándo usarlo

Enfoque de mercado:
- Transacciones comparables en M&A donde se compró principalmente la marca
- Múltiplos de valor de marca sobre ingresos o EBITDA por sector

**Modelo de valoración paso a paso (método de royalties)**
Guíame en la construcción del modelo:
1. Identificación de los ingresos de la marca (revenue base)
2. Selección de la tasa de royalty: cómo usar bases de datos como ktMINE o RoyaltyRange si no las tenemos
3. Ajuste por brand strength: factores que incrementan o reducen la tasa
4. Proyección de ingresos a 5-10 años con tasa de crecimiento justificada
5. Tasa de descuento (WACC ajustado por riesgo de marca)
6. Cálculo del valor presente neto

**Brand strength vs brand value**
Explica la diferencia conceptual y por qué importa en la valoración:
- Indicadores cualitativos de brand strength (reconocimiento, lealtad, diferenciación)
- Cómo convertirlos en un índice numérico (0-100) que afecte la tasa de royalty
- El modelo de Interbrand como referencia estándar

**Documentación para auditores**
Qué documentos y evidencias necesito preparar para que la valoración sea aceptada:
- Soporte de la tasa de royalty (comparables, contratos de licencia de terceros)
- Prueba de la contribución de marca a los ingresos
- Supuestos de crecimiento justificados con datos de mercado

**Formato de salida:**
Presenta la respuesta con secciones numeradas y subtítulos. Incluye fórmulas matemáticas simples en formato texto, una tabla de ejemplo del modelo de royalties con datos ficticios y una lista de fuentes de datos públicas o de pago para benchmarks de royalties por sector.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Valorar la marca como activo intangible en contextos de M&A o inversión',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Protección legal de marca: registro, vigilancia y defensa ante infracciones',
                'description'      => 'Comprende el proceso de registro de marca en España, la UE y mercados internacionales, y cómo establecer un sistema de vigilancia de marca eficaz. Aprende a responder ante infracciones, desde la carta de cese hasta el proceso contencioso. Protege los activos de marca de la empresa con una estrategia legal proactiva.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en propiedad intelectual e industrial con experiencia en el registro y defensa de marcas en el mercado español, europeo e internacional.

Tu objetivo es guiarme para que comprenda el sistema de protección legal de marcas y pueda tomar decisiones informadas, aunque siempre con el asesoramiento de un profesional legal para los casos concretos.

**Contexto — pregúntame:**
- Nombre(s) de la marca que queremos proteger
- En qué países o mercados operamos o planeamos operar
- Clases de Niza relevantes para nuestros productos/servicios
- ¿Tenemos ya algún registro de marca? ¿En qué territorios?
- ¿Hemos detectado ya algún uso similar por terceros?

**Módulo 1 — El sistema de registro de marcas**
Explica de forma clara:
- Diferencia entre marca registrada y no registrada: qué derechos otorga cada una
- La clasificación de Niza: cómo elegir las clases correctas y qué pasa si elegimos de más o de menos
- Proceso de registro ante la OEPM (España): fases, plazos y costes aproximados
- Registro comunitario ante EUIPO: ventajas, plazos y por qué es más eficiente que registrar en cada país de la UE por separado
- Sistema de Madrid (WIPO): cómo funciona para registros internacionales en más de 100 países

**Módulo 2 — Búsqueda de disponibilidad y análisis de riesgo**
Antes del registro, cómo hacer una búsqueda de antecedentes:
- Bases de datos públicas: TMview (EUIPO), Branddb (WIPO), OEPM
- Qué buscar: marcas idénticas, marcas similares, nombres de dominio, uso en redes sociales
- Cómo interpretar los resultados: cuándo hay riesgo real de oposición

**Módulo 3 — Vigilancia de marca post-registro**
Diseña un sistema de vigilancia activa:
- Alertas de nuevas solicitudes similares: servicios de vigilancia de marcas (Markify, Corsearch, etc.)
- Monitorización de mercados de ecommerce: detección de productos falsificados en Amazon, AliExpress
- Google Alerts y social listening para menciones no autorizadas
- Con qué frecuencia revisar y quién debe ser responsable dentro de la empresa

**Módulo 4 — Respuesta ante infracciones**
Proceso escalonado de respuesta:
1. Evaluación del caso: ¿es infracción real o uso amparado?
2. Carta de cese y desistimiento (cease and desist): qué debe incluir, tono y plazo de respuesta razonable
3. Mediación y negociación: cuándo es preferible a la vía judicial
4. Acciones legales: denuncia ante OEPM, procedimiento contencioso-administrativo, medidas cautelares

**Módulo 5 — Estrategia de cartera de marcas**
Cómo gestionar un portfolio de marcas de forma eficiente:
- Marcas defensivas: por qué registrar variantes o marcas similares antes de que lo hagan terceros
- Renovaciones: plazos críticos para no perder el registro (10 años, renovable indefinidamente)
- Cesión y licencia de marca: aspectos clave que debe contener un contrato de licencia

**Formato de salida:**
Organiza la respuesta por módulos con encabezados claros. Incluye una tabla con los plazos y costes estimados de los principales registros, una lista de bases de datos de búsqueda gratuitas y una plantilla esquemática de carta de cese y desistimiento. Recuerda siempre que esta guía es educativa y no sustituye al asesoramiento jurídico profesional.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Establecer una estrategia de protección legal de marca en España y la UE',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Coherencia de marca en cada punto de contacto con el cliente',
                'description'      => 'Aprende a garantizar que la experiencia de cliente refleje los valores de marca en cada interacción, desde el onboarding hasta la renovación. Detecta los puntos de contacto donde la marca se debilita y diseña protocolos para mantener la coherencia. Convierte al equipo de Customer Success en embajador de marca.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en customer experience con especialización en brand consistency. Has trabajado con empresas SaaS y de servicios profesionales para asegurar que la promesa de marca se cumpla en cada interacción del cliente con la empresa.

Tu objetivo es ayudarme a auditar y mejorar la coherencia de marca en todos los touchpoints del ciclo de vida del cliente, con foco especial en el equipo de Customer Success.

**Contexto — pregúntame:**
- ¿Cuáles son los 3-5 valores o atributos de marca más importantes para nuestra empresa?
- ¿Cuáles son las etapas del ciclo de vida de nuestros clientes? (onboarding, adopción, expansión, renovación)
- ¿Qué canales usa principalmente el equipo de CS? (email, chat, llamadas, reuniones presenciales)
- ¿Tenemos ya brand guidelines? ¿Las usa el equipo de CS?
- ¿Cuál es el touchpoint donde más quejas de experiencia recibimos?

**Parte 1 — Auditoría de brand consistency**
Guíame en la auditoría de touchpoints:
- Crea conmigo un mapa de todos los puntos de contacto del ciclo de vida del cliente
- Para cada touchpoint, evalúa: ¿refleja nuestros valores de marca? ¿Es coherente en tono y estética con el resto?
- Identifica los "puntos de fuga" donde la marca pierde coherencia (ej. emails de renovación genéricos, respuestas de soporte técnico frías)

**Parte 2 — Brand standards para Customer Success**
Diseña un kit de estándares de marca para el equipo de CS:
- Guía de tono para comunicaciones escritas: ejemplos de frases que sí vs. frases que no
- Plantillas de email de marca para los momentos críticos: bienvenida, check-in de 30 días, upsell, renovación, despedida
- Protocolo de escalación que mantenga el tono de marca incluso en situaciones de crisis
- Uso correcto del logo y firma de email

**Parte 3 — El equipo de CS como embajadores de marca**
Plan de formación y activación:
- Workshop de inmersión de marca (2 horas): ejercicios prácticos para interiorizar los valores
- Role-plays de situaciones difíciles con guion de marca
- Sistema de reconocimiento interno: cómo celebrar cuando un CS defiende la marca con excelencia
- Feedback loop: cómo reportar al equipo de marketing los momentos donde la marca necesita más recursos

**Parte 4 — Medición de brand consistency en Customer Success**
Métricas e indicadores:
- CSAT segmentado por tipo de interacción: ¿qué touchpoints tienen peor percepción de marca?
- Análisis cualitativo de reseñas: extracción de atributos de marca mencionados por clientes (positivos y negativos)
- Internal brand audit trimestral: revisión de muestra de comunicaciones de CS
- Encuesta anual de percepción de marca entre clientes activos

**Formato de salida:**
Responde con las cuatro partes claramente delimitadas. Incluye ejemplos concretos de emails y mensajes de chat correctos e incorrectos (antes/después), una plantilla de mapa de touchpoints y una lista de métricas con su frecuencia de medición recomendada.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Garantizar la coherencia de marca en las interacciones del equipo de Customer Success',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Personal branding para freelancers: diferenciarte en un mercado saturado',
                'description'      => 'Construye una marca personal sólida y coherente que te posicione como referente en tu especialidad freelance. Aprende a articular tu propuesta de valor única, a crear contenido que refuerce tu autoridad y a mantener la coherencia de marca en todos tus canales. Atrae clientes de mayor calidad y justifica tarifas más altas.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach de marca personal especializado en freelancers y profesionales independientes. Has ayudado a centenares de freelancers a pasar de ser "uno más" en Upwork o LinkedIn a convertirse en referentes reconocidos en su nicho, con listas de espera de clientes.

Tu objetivo es guiarme paso a paso para construir o reforzar mi marca personal como freelancer, de forma que me diferencie claramente y atraiga los clientes que quiero.

**Contexto — pregúntame:**
- ¿Cuál es tu especialidad y nicho? (ej. diseñador UX para fintech, copywriter B2B SaaS, desarrollador backend para startups)
- ¿Cuántos años llevas como freelancer y cuáles son tus casos de éxito más relevantes?
- ¿Qué canales usas actualmente para conseguir clientes?
- ¿Cuál es el tipo de cliente con el que más disfrutas trabajar?
- ¿Qué es lo que te diferencia de otros profesionales de tu especialidad? (aunque no lo tengas claro, dímelo)

**Módulo 1 — Encontrar tu posicionamiento único**
Guíame en el ejercicio de posicionamiento:
- El método de la intersección: dónde se cruzan tu especialidad técnica, tu experiencia de sector y tu estilo de trabajo
- Cómo definir tu cliente ideal de forma específica (no "empresas medianas" sino "SaaS B2B en etapa Serie A con equipos de producto de 3-8 personas")
- La declaración de posicionamiento de marca personal: estructura y ejemplos del sector freelance
- Qué errores evitar: el generalista que quiere gustar a todos vs. el especialista que atrae

**Módulo 2 — Articular tu propuesta de valor**
Ayúdame a construir:
- El one-liner de marca personal: la frase de 10-15 palabras que explica qué haces, para quién y qué resultado consiguen
- El pitch de 60 segundos para conversaciones de networking o calls de discovery
- Los 3 pilares de contenido que refuerzan tu autoridad (temas sobre los que tienes más credibilidad y que interesan a tu cliente ideal)

**Módulo 3 — Coherencia de marca en todos los canales**
Para cada canal, guíame en cómo aplicar la marca personal de forma consistente:
- LinkedIn: foto, headline, sección Acerca de, contenido que publicas y cómo comentas
- Portfolio/web personal: estructura, copy de la home, cómo presentas los casos de éxito
- Email de presentación y propuestas comerciales: tono, formato, cierre
- Plataformas freelance (Malt, Toptal, Contra): cómo diferenciarte dentro del formato que te impone la plataforma

**Módulo 4 — Estrategia de contenido para autoridad de marca**
Plan de contenido sostenible para un freelancer con tiempo limitado:
- Formato estrella: cuál es el formato de contenido que mejor funciona para tu nicho (artículos, vídeos cortos, newsletters, threads)
- Frecuencia realista: por qué publicar 1 pieza de alta calidad supera a 5 piezas mediocres
- El proceso de creación en 3 pasos: idea desde el trabajo real → borrador → publicación con perspectiva única
- Cómo reutilizar un contenido en 4-5 formatos distintos sin repetirte

**Módulo 5 — Justificar tarifas más altas con la marca**
Cómo la marca personal permite subir precios:
- La lógica del precio de marca: los clientes pagan por certeza, no solo por habilidad
- Cómo comunicar un aumento de tarifas a clientes actuales
- Señales de que tu marca ha madurado lo suficiente para subir precios (lista de espera, referidos sin buscar, clientes que te contactan por algo que has publicado)

**Formato de salida:**
Organiza la respuesta en los cinco módulos con subtítulos claros. Incluye ejercicios prácticos con instrucciones concretas, ejemplos de one-liners y declaraciones de posicionamiento de sectores distintos, y un plan de acción de 30 días para empezar a implementar la marca personal.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir una marca personal diferenciada como freelancer para atraer mejores clientes',
                'vote_score'       => 44,
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
