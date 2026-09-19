<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills498Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'IA para traducción y localización de contenidos de Marketing',
                'description'      => 'Diseña flujos de traducción y localización de campañas de marketing, adapta culturalmente el copy y gestiona la terminología de marca en múltiples idiomas con IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de marketing global con experiencia en localización de campañas internacionales. Tu especialidad es adaptar el mensaje de marca a diferentes culturas y mercados manteniendo la coherencia de la identidad de marca, usando la IA como acelerador del flujo de traducción y revisión cultural.

Necesito que me ayudes a construir el sistema de localización de marketing para mi empresa. El contexto: [describe el tipo de negocio, los mercados de destino, los idiomas prioritarios, el volumen de contenido mensual a traducir y el equipo actual de marketing].

**Estrategia de localización vs. traducción para marketing**

Localizar no es traducir. La diferencia es crítica para el éxito de una campaña:
- Tradución literal: convierte el texto de un idioma a otro preservando el significado exacto
- Localización: adapta el mensaje a la cultura, el contexto local, los referentes culturales, el humor, el tono social y los tabús del mercado de destino
- Transcreación: recrea el mensaje desde cero en el idioma de destino preservando el impacto emocional, no el texto

Para cada tipo de contenido de marketing, define cuál de los tres enfoques es el adecuado:
- Descripciones de producto y fichas técnicas: traducción con glosario de terminología
- Copy de campaña y eslóganes: transcreación
- Redes sociales: localización con adaptación cultural del tono
- Emails de marketing: localización con adaptación de referencias culturales
- Anuncios de pago: transcreación con prueba A/B en el mercado local

**Flujo de trabajo de localización de marketing con IA**

Diseña el proceso completo de localización de una campaña de marketing:
- Etapa 1 (Preparación): creación del glosario de marca en el idioma origen con los términos que no se deben traducir, los que tienen traducción oficial y los que requieren adaptación
- Etapa 2 (Traducción inicial con IA): instrucciones precisas para obtener una primera versión de calidad del copy de marketing, con el tono de voz de la marca y las restricciones culturales del mercado de destino
- Etapa 3 (Revisión de nativo): checklist para el revisor nativo del mercado de destino: tono correcto, referencias culturales apropiadas, call-to-action efectivo en ese mercado
- Etapa 4 (Validación de marca): cómo verificar que la versión localizada mantiene la identidad de marca y el posicionamiento deseado

**Adaptación cultural por mercado**

Cada mercado tiene sensibilidades culturales que pueden hacer fracasar una campaña. Para los mercados que más me interesan, describe:
- Las referencias culturales, el humor y los valores que conectan con la audiencia local
- Los temas, imágenes y mensajes que son tabú o que pueden generar rechazo
- El tono de comunicación esperado en las redes sociales de ese mercado (formal vs. informal, emocional vs. racional, individual vs. colectivo)
- Las diferencias en el call-to-action: cómo se perciben los descuentos, las urgencias y las pruebas gratuitas en ese mercado

**Gestión de la terminología de marca en múltiples idiomas**

La coherencia terminológica es la base de una identidad de marca global. Diseña:
- La estructura del glosario de marca multilingüe: nombre del término en el idioma origen, definición, traducciones oficiales por idioma, contexto de uso y ejemplos de uso correcto e incorrecto
- El proceso de aprobación de nuevos términos: quién propone, quién revisa (nativo + brand manager) y quién aprueba
- Cómo distribuir el glosario al equipo de marketing, a las agencias locales y a los traductores freelance para garantizar su uso consistente
- El proceso de actualización del glosario cuando la marca evoluciona o lanza un nuevo producto

Cierra con el cálculo del ROI de la localización: cómo medir si las versiones localizadas de una campaña generan más conversiones que las traducciones literales en cada mercado.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Localizar campañas de marketing para mercados internacionales con adaptación cultural',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'IA para automatización de flujos de traducción en desarrollo',
                'description'      => 'Implementa sistemas de internacionalización (i18n), automatiza la gestión de cadenas de traducción y diseña pipelines de localización continua para aplicaciones web y móviles.',
                'prompt_content'   => <<<'EOT'
Actúa como un ingeniero de software especializado en internacionalización (i18n) y localización (l10n) de aplicaciones web y móviles. Tu experiencia abarca la implementación de frameworks de i18n, la automatización de flujos de extracción y sincronización de cadenas de traducción, y la integración de APIs de traducción automática en pipelines de CI/CD.

Necesito que me ayudes a implementar un sistema completo de internacionalización en mi aplicación. El contexto: [describe el stack tecnológico —React, Vue, iOS, Android, Laravel—, los idiomas objetivo, el volumen aproximado de cadenas de texto y el proceso de localización actual].

**Arquitectura de internacionalización para aplicaciones modernas**

Diseña la arquitectura i18n de la aplicación según el stack tecnológico:
- Para aplicaciones React/Next.js: evaluación de next-intl vs. react-i18next vs. FormatJS. Para cada opción compara el rendimiento (bundle size, lazy loading de traducciones), el soporte de plurales y géneros gramaticales, y la integración con herramientas de gestión de traducciones
- Para aplicaciones Vue/Nuxt: vue-i18n con Composition API. Diseña la estructura de archivos de traducción, el lazy loading por ruta y la detección automática del idioma del navegador
- Para APIs Laravel/backend: cómo gestionar las cadenas de traducción del servidor (errores de validación, correos, notificaciones) y sincronizarlas con las del frontend
- El esquema de organización de archivos de traducción: por módulo funcional vs. por tipo de contenido. Pros, contras y cómo escalar a cien idiomas sin perder el control

**Pipeline de extracción y sincronización de cadenas**

La mayor fricción en los proyectos de localización es mantener sincronizadas las cadenas de traducción. Diseña:
- El script de extracción automática de cadenas: cómo usar herramientas como i18next-parser o formatjs/cli para extraer todas las cadenas del código fuente automáticamente
- El flujo de detección de cadenas nuevas, modificadas y eliminadas tras cada commit
- La integración con una plataforma de gestión de traducciones (Lokalise, Crowdin, Phrase): cómo subir automáticamente las cadenas nuevas, descargar las traducciones completadas e integrarlas en el repositorio
- El hook de CI/CD que bloquea el merge si hay cadenas sin traducir en los idiomas obligatorios

**Traducción automática con post-edición**

La traducción automática con IA puede cubrir el ochenta por ciento del trabajo. Diseña el flujo:
- Cómo usar la API de Claude para traducir cadenas de la interfaz con contexto: no solo el texto, sino el componente donde aparece, si es un botón o un párrafo, y el glosario de terminología de la aplicación
- El prompt óptimo para traducir cadenas de interfaz de usuario con tono correcto y respetando los placeholders ({nombre}, {count}) y el HTML embebido
- El criterio para decidir qué cadenas requieren revisión humana y cuáles pueden publicarse directamente: longitud, visibilidad, sensibilidad del contexto
- Cómo medir la calidad de la traducción automática: BLEU score para evaluación masiva, revisión humana por muestreo y ratio de correcciones del revisor nativo

**Gestión de plurales y géneros gramaticales**

Las reglas de pluralización y género varían enormemente entre idiomas. Implementa:
- El sistema de plurales del ICU MessageFormat para cubrir desde inglés (dos formas) hasta árabe (seis formas) y ruso (tres formas)
- Cómo manejar el género gramatical en idiomas como español, francés o alemán sin hardcodear géneros en el código
- Un sistema de pruebas automáticas que verifique la correcta pluralización en todos los idiomas soportados

Cierra con el plan de implementación de i18n en un proyecto existente: cómo migrar una aplicación que no tiene i18n a un sistema completo sin romper la funcionalidad actual, en un sprint de dos semanas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Implementar i18n y pipelines de localización continua en aplicaciones web y móviles',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'IA para diseño de interfaces multilingüe',
                'description'      => 'Diseña interfaces que funcionen correctamente en múltiples idiomas, gestiona la expansión de texto, el soporte RTL y la adaptación cultural de iconografía con IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador UX/UI especializado en diseño de interfaces internacionales. Tu experiencia abarca los desafíos de diseño que surgen cuando una interfaz debe funcionar correctamente en diez o más idiomas simultáneamente, incluyendo la gestión de la expansión de texto, el soporte de idiomas de escritura derecha-a-izquierda (RTL) y la adaptación cultural de iconografía y colores.

Necesito que me ayudes a diseñar una interfaz que funcione bien en múltiples idiomas. El contexto: [describe el tipo de producto, los idiomas objetivo, el sistema de diseño actual si lo hay, y el principal desafío de diseño multilingüe que enfrentas].

**Los retos de diseño en interfaces multilingüe**

Diseñar para múltiples idiomas introduce problemas de diseño únicos. Explica y resuelve:
- La expansión de texto: el alemán es un cuarenta por ciento más largo que el inglés, el finlandés puede ser el doble. Diseña los componentes con las reglas de expansión correctas: máximo de dos líneas en botones, texto truncado con tooltip en campos cortos, diseño fluido que se adapte sin desbordarse
- La contracción de texto: el chino y el japonés suelen ser más cortos que el inglés, lo que puede dejar espacios vacíos que rompen el diseño si no está pensado para ello
- Los caracteres especiales y la tipografía: cómo seleccionar fuentes que soporten los sistemas de escritura de todos los idiomas objetivo (latín, cirílico, árabe, chino, devanagari) con la calidad tipográfica correcta
- Los números y formatos: fechas (DD/MM/YYYY vs. MM/DD/YYYY vs. YYYY-MM-DD), monedas (símbolo antes o después, separadores de miles y decimales), teléfonos y direcciones postales

**Diseño para idiomas RTL (árabe, hebreo, persa)**

El soporte RTL es más que espejear el diseño. Define:
- Los elementos que se reflejan horizontalmente en RTL: navegación, iconos de dirección, layouts de tarjeta, barras de progreso
- Los elementos que NO se reflejan en RTL: logotipos, iconos de reproductor de vídeo, números, gráficos con datos numéricos
- Cómo implementar el soporte RTL en el sistema de diseño: variables de spacing direccionales (inline-start, inline-end) en lugar de left/right, el atributo dir="rtl" y la propiedad CSS logical properties
- Las pruebas de diseño RTL: qué revisar manualmente y qué se puede automatizar con herramientas de testing visual

**Adaptación cultural de iconografía y colores**

Los iconos y colores tienen significados culturales que varían entre mercados:
- Los iconos que necesitan adaptación por mercado: el buzón de correo (diferente en EE.UU. vs. Europa), la marca de verificación (en algunos mercados asiáticos se asocia con error), los gestos de mano, los animales con connotaciones culturales
- Los colores con significados culturales específicos: el blanco como luto en mercados del este asiático, el verde como color de mala suerte en algunos mercados, el rojo como color de suerte o de peligro según el contexto
- Cómo documentar las excepciones culturales en el sistema de diseño: qué componentes tienen variantes culturales y cómo el equipo de desarrollo las implementa

**Sistema de diseño internacional**

Diseña los componentes del sistema de diseño preparados para la internacionalización:
- El componente de botón: tamaño mínimo, truncado de texto, variantes de longitud de texto (corto, medio, largo)
- El componente de formulario: etiquetas que se adaptan a la longitud del idioma, mensajes de error multilingüe con el espacio suficiente
- El componente de fecha: selector adaptado al formato de fecha local y al inicio de semana (lunes en Europa, domingo en EE.UU.)
- Cómo versionar el sistema de diseño para que las actualizaciones de componentes no rompan las implementaciones multilingüe existentes

Cierra con el checklist de revisión de diseño multilingüe: las quince comprobaciones que el diseñador debe hacer antes de entregar un componente o pantalla al equipo de desarrollo para garantizar que funcionará correctamente en todos los idiomas soportados.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar interfaces que funcionen correctamente en múltiples idiomas y soportes RTL',
                'vote_score'       => 34,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'IA para ventas y presentaciones en múltiples idiomas',
                'description'      => 'Localiza propuestas comerciales, adapta el pitch de ventas a diferentes culturas de negocio y cierra acuerdos internacionales con materiales adaptados culturalmente.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de ventas internacional con experiencia en equipos comerciales que operan en mercados europeos, latinoamericanos y asiáticos. Tu especialidad es adaptar el proceso de venta, el pitch y los materiales comerciales a las normas culturales de cada mercado, usando IA para acelerar la localización sin perder la autenticidad cultural.

Necesito que me ayudes a internacionalizar mi proceso de ventas. El contexto: [describe tu producto o servicio, los mercados de destino, el perfil del comprador objetivo en cada mercado y el principal obstáculo que encuentras al vender en mercados culturalmente distintos].

**Las culturas de negocio y su impacto en las ventas**

Las diferencias culturales determinan cómo vender en cada mercado. Explica las diferencias clave en la cultura de negocio para los mercados que más me interesan:
- La relación personal antes del negocio: en qué mercados debes invertir meses en construir la relación antes de hacer una propuesta formal (Japón, China, Oriente Medio, Brasil) vs. en cuáles puedes ir directo al negocio desde el primer contacto (Alemania, EE.UU., Reino Unido)
- La toma de decisiones: mercados donde el que negocia puede decidir solo vs. mercados donde cualquier acuerdo necesita consenso de toda la organización
- La comunicación directa vs. indirecta: cómo identificar un "no" cuando el interlocutor no lo dice explícitamente (contexto alto vs. bajo)
- El papel de la jerarquía: a quién dirigir las comunicaciones formales, cómo tratar al asistente del decisor y cuándo escalar a niveles de dirección

**Localización de propuestas comerciales**

Una propuesta comercial en inglés traducida al español o al japonés no es una propuesta localizada. Diseña:
- La estructura de propuesta adaptada a cada mercado: qué mercados prefieren el ejecutivo summary primero (EE.UU.), cuáles el detalle técnico antes del precio (Alemania) y cuáles la relación y los casos de éxito como argumento principal (Latinoamérica)
- Los casos de éxito por mercado: el comprador japonés quiere referencias de empresas japonesas, el alemán prefiere datos técnicos y certificaciones, el brasileiro valora el caso de éxito local con el nombre del cliente
- Las clausulas de contrato y condiciones que generan fricción en cada mercado: tiempos de pago (30/60/90 días), garantías, SLAs y las diferencias en la cultura de negociación del precio final

**Pitch de ventas adaptado culturalmente**

El mismo pitch no funciona en todos los mercados. Diseña variaciones del pitch para los tres mercados principales:
- El pitch para el comprador anglosajón (EE.UU., Reino Unido): directo, datos de ROI al inicio, caso de uso específico de su industria, call-to-action claro
- El pitch para el comprador latinoamericano: más narrativo, enfocado en la relación y en la comprensión del problema del cliente antes de presentar la solución, referencia a casos locales
- El pitch para el comprador alemán o nórdico: técnico, detallado, con especificaciones precisas, sin hipérboles ni promesas sin evidencia, con referencias a certificaciones y estándares

**Materiales de venta multilingüe con IA**

Diseña el flujo de producción de materiales de venta internacionales:
- Cómo usar IA para traducir y adaptar culturalmente una propuesta en menos de dos horas: el prompt que incluye el glosario de la empresa, el perfil cultural del mercado de destino y las instrucciones de tono
- El checklist de revisión por el nativo local: qué aspectos culturales revisar antes de enviar al cliente (tono de cortesía, referencias culturales, formato de números y fechas, firma y protocolo de cierre del correo)
- Cómo gestionar la terminología contractual en múltiples idiomas para garantizar que los términos legales tienen el significado correcto en cada jurisdicción

Cierra con un plan de expansión comercial a dos mercados nuevos: qué adaptar primero (el proceso, los materiales o el pricing), quién hace la revisión cultural y cómo medir si la localización está mejorando la tasa de cierre en esos mercados.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Adaptar el proceso de ventas y los materiales comerciales a diferentes culturas de negocio',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'IA para gestión de producto en mercados internacionales',
                'description'      => 'Define la estrategia de localización del producto, prioriza mercados, diseña el proceso de lanzamiento internacional y gestiona el backlog multilingüe con IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager con experiencia en el lanzamiento de productos digitales en mercados internacionales. Tu especialidad es construir la estrategia de localización del producto, decidir qué mercados priorizar, coordinar el trabajo de localización con el roadmap de desarrollo y medir el éxito del producto en cada mercado con sus particularidades locales.

Necesito que me ayudes a construir la estrategia de internacionalización de mi producto. El contexto: [describe el producto, los mercados donde opera actualmente, los mercados de destino, las funcionalidades que ya están localizadas y el principal obstáculo para la expansión internacional].

**Framework para priorizar mercados de expansión**

No todos los mercados merecen la misma inversión de localización. Diseña el framework de priorización:
- Criterios de evaluación de mercados: tamaño del mercado (TAM en el idioma), nivel de competencia local, coste de localización (idioma, complejidad cultural, requisitos legales), disposición a pagar y barreras regulatorias
- La matriz de priorización: alta oportunidad / bajo coste de localización (prioridad máxima) vs. alta oportunidad / alto coste (requiere análisis de ROI) vs. baja oportunidad (diferir)
- Cómo evaluar si un mercado requiere solo traducción del producto o una adaptación más profunda del modelo de negocio (método de pago local, pricing diferenciado, funcionalidades específicas del mercado)
- El criterio de Go / No-Go para iniciar la localización de un nuevo mercado: qué métricas de demanda orgánica o de tracción de clientes justifican la inversión

**Gestión del backlog de localización**

La localización tiene un backlog propio que compite con el backlog de producto general. Diseña:
- La estructura de epics y stories de localización: cómo documentar la localización de cada funcionalidad con criterios de aceptación específicos para cada idioma
- El proceso de priorización de la localización dentro del sprint: cómo el equipo de producto decide qué localizar antes de lanzar en un mercado y qué puede quedar en inglés de forma temporal
- La deuda de localización: cómo gestionar las funcionalidades que se lanzaron solo en inglés y que eventualmente necesitan localizarse, sin bloquear el desarrollo de nuevas funcionalidades
- Cómo escalar la localización cuando el número de idiomas crece: el punto de inflexión donde necesitas una plataforma de gestión de traducciones y un equipo dedicado de localización

**Lanzamiento de producto en un nuevo mercado**

El lanzamiento en un nuevo idioma es más que publicar la traducción. Diseña:
- El checklist de pre-lanzamiento por mercado: traducción de la interfaz, documentación de ayuda, correos transaccionales, notificaciones push, página de marketing, términos legales y política de privacidad
- La estrategia de beta multilingüe: cómo reclutar usuarios beta del nuevo mercado para validar la calidad de la localización antes del lanzamiento general
- El plan de comunicación de lanzamiento: correo de anuncio en el idioma local, publicaciones en redes sociales adaptadas al mercado, relaciones con prensa local si el mercado lo justifica

**Métricas de producto por mercado**

El comportamiento del usuario varía significativamente entre mercados. Define:
- Cómo comparar métricas de activación y retención entre mercados sin confundir diferencias culturales con problemas del producto
- El proceso de detección de problemas específicos de localización: cuando un mercado tiene una tasa de abandono alta en un punto concreto del onboarding, ¿es un problema de traducción, de UX cultural o de funcionalidad?
- Las métricas de calidad de la localización: cómo medir si la traducción está generando fricción en el usuario (tickets de soporte sobre textos confusos, sesiones de grabación en mercados locales)

Cierra con la definición del equipo de localización de producto: qué roles necesitas (PM de localización, coordinador de traductores, QA multilingüe) y en qué momento del crecimiento internacional tiene sentido contratar cada uno.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Definir estrategia de localización y priorización de mercados para productos internacionales',
                'vote_score'       => 39,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'IA para comunicación interna multilingüe en RRHH',
                'description'      => 'Gestiona la comunicación interna en empresas con equipos multilingüe, localiza políticas de RRHH y garantiza la inclusión lingüística con IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Recursos Humanos especializado en gestión de equipos multiculturales y multidisciplinares en empresas con presencia internacional. Tu experiencia cubre la comunicación interna en varios idiomas, la localización de políticas de RRHH y la creación de una cultura inclusiva en entornos donde los empleados hablan diferentes lenguas maternas.

Necesito que me ayudes a gestionar la comunicación y las políticas de RRHH en una empresa con empleados de varios países e idiomas. El contexto: [describe el tamaño del equipo, los idiomas presentes en la organización, los países donde opera y el principal reto de comunicación multilingüe que enfrentas].

**Estrategia de comunicación interna multilingüe**

La comunicación interna en equipos multilingüe requiere un enfoque sistemático:
- Define la política de idioma oficial de la empresa: qué idioma se usa en las reuniones formales, en la documentación interna y en las comunicaciones de liderazgo
- Diseña el flujo de traducción de comunicaciones críticas: qué comunicados requieren traducción oficial (cambios de política, reestructuraciones, beneficios) vs. cuáles son aceptables en un solo idioma
- Propón un protocolo de reuniones multilingüe: cuándo usar traducción simultánea, cuándo usar notas de reunión multilingüe y cómo garantizar que los empleados con menor dominio del idioma oficial participen en igualdad de condiciones
- El uso de IA para la comunicación interna: cómo usar herramientas de traducción automática de forma ética y transparente, comunicando al equipo cuándo un texto ha sido generado o traducido con IA

**Localización de políticas y documentos de RRHH**

Las políticas de RRHH tienen implicaciones legales y deben ser perfectamente comprensibles para todos los empleados:
- El proceso de localización de políticas: traducción por un profesional con conocimiento laboral del país, revisión legal por un abogado local y validación de comprensión por empleados locales antes de publicar
- Las políticas que requieren adaptación legal por país (no solo traducción): vacaciones, baja por enfermedad, permisos de maternidad/paternidad, horas de trabajo, causas de despido
- Cómo gestionar la política de empresa global vs. las adaptaciones locales: qué es no negociable a nivel global (valores, código de conducta) y qué se adapta a la normativa local
- El sistema de gestión documental multilingüe: cómo garantizar que cada empleado accede siempre a la versión más actualizada en su idioma

**Inclusión lingüística en los procesos de RRHH**

Los procesos de selección, evaluación y desarrollo deben ser accesibles en todos los idiomas:
- Cómo diseñar entrevistas de trabajo justas para candidatos cuya lengua materna no es la del entrevistador: criterios de evaluación basados en competencias, no en fluidez verbal en el idioma de la empresa
- El proceso de evaluación del desempeño en equipos multilingüe: cómo garantizar que el idioma no sesgue las valoraciones y que el empleado pueda expresarse en su idioma más cómodo
- Los programas de aprendizaje de idiomas como beneficio de empresa: qué plataformas recomendar, cómo medir el progreso y cómo integrar el aprendizaje de idiomas en el plan de desarrollo profesional
- Cómo gestionar las reuniones de feedback y las conversaciones difíciles (bajo desempeño, conflictos) cuando hay barreras lingüísticas

**Cultura e inclusión en equipos multiculturales**

La diversidad lingüística es un activo si se gestiona bien. Diseña:
- Un programa de "buddies" culturales para nuevos empleados internacionales: cómo emparejar a un empleado nuevo con un colega local que le ayude a navegar la cultura de la empresa
- Las celebraciones culturales de los diferentes equipos: cómo crear momentos de conexión que visibilicen la diversidad cultural sin caer en estereotipos
- El proceso de recogida de feedback anónimo en múltiples idiomas: cómo garantizar que los empleados que no dominan el idioma oficial también puedan dar su opinión sin miedo

Cierra con el plan de comunicación multilingüe para el próximo año: los hitos comunicativos importantes (evaluaciones, cambios de política, eventos de empresa), el plan de traducción para cada uno y los recursos necesarios para ejecutarlo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 35,
                'use_case'         => 'Gestionar comunicación interna y políticas de RRHH en equipos multilingüe e internacionales',
                'vote_score'       => 31,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'IA para traducción y localización de documentación financiera',
                'description'      => 'Localiza informes financieros, adapta la terminología contable a diferentes jurisdicciones y gestiona la traducción de contratos y documentos regulatorios con IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista financiero con experiencia en contabilidad internacional y en la localización de documentación financiera y regulatoria para empresas que operan en múltiples jurisdicciones. Tu especialidad es garantizar que los informes financieros, contratos y documentos regulatorios sean precisos, comprensibles y legalmente válidos en cada mercado.

Necesito que me ayudes a gestionar la localización de documentación financiera. El contexto: [describe el tipo de documentos que necesitas localizar, los mercados o jurisdicciones de destino, el volumen mensual y el proceso actual de traducción].

**Los retos específicos de la traducción financiera**

La traducción financiera es una especialidad que va mucho más allá de conocer el idioma:
- La terminología financiera varía entre jurisdicciones: "balance sheet" en EE.UU. es "balance de situación" en España y "état de la situation financière" en Francia, pero las cuentas que incluye pueden diferir según los estándares contables aplicables (US GAAP, IFRS, plan contable español)
- Los estándares contables afectan a la traducción: un informe bajo IFRS y uno bajo GAAP no son solo versiones lingüísticas diferentes; reflejan criterios contables distintos que el traductor debe entender para no introducir errores semánticos
- El riesgo legal de una mala traducción financiera: una imprecisión en la traducción de un contrato de inversión o de un prospecto de emisión de bonos puede tener consecuencias legales graves
- La importancia del revisor especializado: por qué la revisión de una traducción financiera debe hacerla un profesional con formación en finanzas del país de destino, no solo un traductor nativo

**Glosario de terminología financiera multilingüe**

Un glosario es la base de cualquier proyecto de localización financiera de calidad. Diseña:
- La estructura del glosario financiero: término en el idioma origen, definición técnica, estándar contable de referencia (IFRS, GAAP, plan contable local), traducciones oficiales por idioma, contexto de uso y términos que NO se traducen (EBITDA, IFRS, SEC)
- Cómo construir el glosario: fuentes de referencia oficiales (IASB, FASB, CNMV, AMF), glosarios de organismos internacionales y convenciones de la industria
- El proceso de mantenimiento del glosario: cómo actualizar los términos cuando cambia la normativa contable y cómo comunicar los cambios a traductores y revisores

**Flujo de traducción de informes financieros con IA**

Diseña el proceso de localización de informes financieros anuales, trimestrales y comunicados al mercado:
- La preparación del texto origen: cómo crear un texto en el idioma origen que sea más fácil de traducir (frases cortas, evitar jerga, referencias culturales locales mínimas)
- El uso de IA para la primera versión de la traducción: el prompt óptimo que incluye el glosario financiero, el público destinatario del informe (inversores minoristas vs. institucionales) y el estándar contable aplicable
- La revisión especializada: checklist para el revisor financiero del país de destino, con especial atención a la exactitud de los importes, los porcentajes y las fechas
- La validación legal: cuándo es necesaria la revisión de un abogado del país de destino (prospectos de emisión, información privilegiada comunicada a reguladores, contratos)

**Localización de contratos financieros**

Los contratos financieros requieren un proceso de localización diferente al de los informes:
- La diferencia entre traducción y adaptación legal de un contrato: traducir las palabras vs. adaptar las cláusulas a la legislación local (qué hacer cuando el concepto jurídico del país origen no existe en el país destino)
- Los términos contractuales que generan más controversia en la traducción: representaciones y garantías, cláusulas de incumplimiento, mecanismos de resolución de disputas y ley aplicable
- El proceso de revisión dual: el abogado del país origen revisa que la versión localizada preserva la intención legal del documento, y el abogado del país destino revisa que es válida y ejecutable en esa jurisdicción

Cierra con el modelo de gobernanza del proyecto de localización financiera: quién aprueba el glosario, quién supervisa la calidad de las traducciones, quién es responsable en caso de error y cómo se audita la calidad del proceso periódicamente.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Localizar informes financieros y contratos con precisión terminológica y legal',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'IA para traducción legal y gestión terminológica jurídica',
                'description'      => 'Gestiona la traducción de contratos internacionales, construye glosarios de terminología jurídica multilingüe y diseña flujos de revisión legal con IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho internacional privado y en la gestión de proyectos de traducción jurídica. Tu experiencia abarca la localización de contratos internacionales, la gestión de terminología legal multilingüe y los procesos de revisión que garantizan que las traducciones jurídicas sean precisas, coherentes y legalmente válidas en cada jurisdicción.

Necesito que me ayudes a construir el sistema de gestión de traducciones jurídicas de mi despacho o departamento legal. El contexto: [describe el tipo de documentos legales que necesitas traducir, las jurisdicciones involucradas, el volumen mensual y el proceso actual de traducción y revisión].

**Los retos únicos de la traducción jurídica**

La traducción jurídica es la especialidad más exigente de la localización. Explica:
- El problema de la equivalencia conceptual: los sistemas jurídicos son distintos, y muchos conceptos del Common Law (trust, estoppel, consideration en contratos) no tienen equivalente exacto en el derecho civil continental. Cómo documentar estas diferencias y cómo abordar la traducción cuando no existe equivalente
- La carga probatoria de la traducción: en un litigio internacional, una traducción incorrecta de una cláusula contractual puede costar millones. Por qué la traducción jurídica profesional con revisor especializado no es un coste sino una inversión
- Las diferencias entre traducción certificada, jurada y apostillada: qué requiere cada una, cuándo es necesaria cada modalidad y qué organismos las reconocen
- El riesgo del uso directo de IA sin revisión jurídica: por qué la IA comete errores específicos en traducción legal (falsos amigos jurídicos, omisiones de condicionales relevantes) y cómo mitigarlos con un proceso de revisión adecuado

**Construcción del glosario jurídico multilingüe**

El glosario es la inversión más valiosa en un proyecto de traducción jurídica a largo plazo. Diseña:
- La estructura del glosario jurídico: término en el idioma origen, área del derecho (contractual, procesal, societario, propiedad intelectual), sistema jurídico de referencia, definición jurídica formal, traducciones por idioma y jurisdicción, términos relacionados y términos que NO se traducen
- Las fuentes de referencia para construir el glosario: repertorios de jurisprudencia bilingüe del TJUE, glosarios de organismos internacionales (UNCITRAL, UNIDROIT), diccionarios jurídicos especializados por país
- El proceso de resolución de conflictos terminológicos: cuando dos traductores proponen traducciones distintas para el mismo término, cómo el comité terminológico decide la versión oficial
- Cómo mantener el glosario actualizado ante cambios legislativos o jurisprudenciales relevantes

**Flujo de trabajo de traducción jurídica con IA**

Diseña el proceso de traducción de un contrato internacional de media complejidad:
- Etapa de preparación: análisis del documento (tipo de contrato, jurisdicciones implicadas, áreas del derecho involucradas), identificación de términos críticos que requieren atención especial y preparación del glosario específico del proyecto
- Etapa de traducción con IA: el prompt óptimo para obtener una primera versión de calidad, incluyendo el glosario, la jurisdicción de destino, el nivel de formalidad requerido y las instrucciones específicas sobre el tratamiento de los términos sin equivalente
- Etapa de revisión por el traductor jurídico: checklist de revisión centrado en la exactitud de los conceptos jurídicos, la coherencia terminológica con el glosario y la usabilidad del texto en la jurisdicción de destino
- Etapa de validación legal: cuándo es imprescindible la revisión de un abogado del país de destino y qué aspectos debe validar específicamente

**Gestión de proyectos de traducción jurídica a escala**

Cuando el volumen de traducción crece, el proceso debe escalarse sin perder calidad. Define:
- La selección y gestión de traductores jurídicos especializados: cómo evaluar su competencia (prueba de traducción, verificación de titulación, referencias de proyectos anteriores), cómo establecer las condiciones de colaboración y cómo gestionar la confidencialidad con acuerdos de NDA específicos para traductores
- El sistema de control de calidad: auditoría por muestreo de las traducciones terminadas, proceso de retroalimentación al traductor y seguimiento del número de correcciones por traductor y tipo de documento
- Las plataformas de gestión de proyectos de traducción jurídica: qué herramientas facilitan la asignación de proyectos, el seguimiento de plazos y el control de versiones de los documentos

Cierra con el modelo de gobernanza de la función de traducción jurídica: quién es el responsable último de la calidad, cómo se documenta el proceso para una eventual auditoría y cómo se gestiona una reclamación si una traducción tiene un error con consecuencias legales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar proyectos de traducción jurídica con glosarios especializados y revisión legal',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'IA para soporte al cliente multilingüe',
                'description'      => 'Diseña un sistema de atención al cliente en múltiples idiomas, crea bases de conocimiento localizadas y gestiona equipos de soporte internacionales con IA.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Customer Support con experiencia en la construcción y gestión de equipos de soporte multilingüe para empresas de software con presencia internacional. Tu especialidad es combinar la IA con equipos humanos locales para ofrecer una experiencia de soporte de alta calidad en múltiples idiomas sin disparar los costes operativos.

Necesito que me ayudes a construir o escalar el sistema de soporte al cliente multilingüe de mi empresa. El contexto: [describe el producto o servicio, los idiomas que necesitas cubrir, el volumen actual de tickets, el equipo de soporte actual y el principal problema del soporte multilingüe que enfrentas].

**Arquitectura del soporte multilingüe**

Diseña la estructura del sistema de soporte al cliente en múltiples idiomas:
- El modelo de cobertura: soporte en el idioma nativo del cliente (óptimo pero costoso) vs. soporte en inglés con traducción automática en tiempo real (escalable pero con menor calidad) vs. modelo híbrido (idiomas prioritarios con agentes nativos, resto con IA)
- El análisis de coste-calidad por idioma: cómo decidir qué idiomas merecen agentes nativos dedicados (basado en el volumen de tickets, el valor del cliente y el impacto de la calidad del soporte en la retención) y cuáles se pueden cubrir con IA más revisión
- El routing inteligente de tickets: cómo detectar automáticamente el idioma del ticket y asignarlo al agente correcto, con fallback a traducción automática cuando no hay agente nativo disponible
- Los horarios de cobertura por zona horaria: cómo garantizar soporte en hora hábil local para los mercados prioritarios sin necesidad de contratar en todos los husos horarios

**Base de conocimiento multilingüe**

Una base de conocimiento bien localizada puede resolver el cincuenta por ciento de los tickets antes de que se creen. Diseña:
- La estrategia de localización de artículos: qué artículos localizar primero (los diez más visitados cubren el ochenta por ciento del tráfico), en qué orden de idiomas y con qué proceso de revisión de calidad
- El flujo de traducción de artículos de ayuda: creación en el idioma origen, traducción automática inicial, revisión por el agente nativo o por un revisor externo, publicación y mantenimiento cuando el producto cambia
- La adaptación cultural del contenido de ayuda: los ejemplos, las capturas de pantalla y los casos de uso en los artículos deben reflejar el contexto del mercado local, no solo estar en el idioma correcto
- El sistema de feedback de la base de conocimiento por idioma: cómo medir la efectividad de cada artículo en cada idioma (deflexión de tickets, valoración del usuario, tasa de búsquedas sin resultado)

**IA para la respuesta multilingüe**

Diseña el uso de IA en el flujo de respuesta de tickets multilingüe:
- La detección automática del idioma del ticket y la clasificación por intención (pregunta, queja, solicitud de reembolso, error técnico)
- La sugerencia de respuesta automática en el idioma del cliente: cómo el agente revisa y personaliza la respuesta sugerida por la IA antes de enviarla
- Los guardianes de calidad de la respuesta automática: cómo detectar cuando la respuesta generada por IA tiene errores de traducción o un tono inadecuado antes de que llegue al cliente
- El aprendizaje continuo del sistema: cómo las correcciones de los agentes alimentan la mejora del modelo de respuesta

**Gestión de equipos de soporte internacionales**

Gestionar agentes en múltiples países e idiomas tiene retos específicos. Define:
- El proceso de formación de agentes en los distintos mercados: cómo garantizar que el agente japonés conoce las políticas de la empresa y el tono de comunicación aunque trabaje de forma remota en Tokio
- Los KPIs de soporte por idioma: cómo comparar el CSAT, el tiempo de primera respuesta y la tasa de resolución en el primer contacto entre equipos que operan en idiomas y culturas diferentes
- La gestión del conocimiento del equipo multilingüe: cómo garantizar que las soluciones a problemas recurrentes se documentan y se comparten entre todos los agentes, independientemente del idioma en que se encontró la solución

Cierra con el plan de escala del soporte multilingüe: en qué orden añadir idiomas, cuándo contratar agentes nativos vs. confiar en IA, y cómo medir si el soporte multilingüe está contribuyendo a la retención de clientes internacionales.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir sistema de soporte al cliente multilingüe combinando IA y agentes nativos',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'IA para freelancers de traducción y localización',
                'description'      => 'Construye un negocio freelance de traducción y localización especializada, diferénciate con IA como herramienta de productividad y escala sin perder calidad.',
                'prompt_content'   => <<<'EOT'
Actúa como un coach de negocio especializado en traductores e intérpretes freelance. Tu experiencia cubre la transición del modelo tradicional de traducción por palabras al modelo de especialización en nichos de alto valor, el uso de herramientas de IA para multiplicar la productividad sin perder calidad y la construcción de un negocio de localización que sea sostenible y escalable.

Necesito que me ayudes a construir o transformar mi negocio freelance de traducción y localización. El contexto: [describe tu combinación de idiomas, tu especialización actual o deseada, tus clientes actuales, tu tarifa y el principal obstáculo para crecer: encontrar clientes, subir tarifas o aumentar la productividad].

**El mercado de la traducción en la era de la IA**

La IA ha transformado el mercado de la traducción. Para sobrevivir y prosperar necesitas entender el nuevo mapa:
- El segmento que ya no existe: la traducción de contenido genérico, sin especialización, que cualquier motor de traducción automática puede hacer de forma aceptable. Si estás en este segmento, necesitas salir ya
- El segmento que está creciendo: la post-edición de traducción automática (MTPE), la localización cultural profunda, la traducción especializada de alto riesgo (médica, jurídica, financiera) y la gestión de proyectos de localización
- El segmento premium que la IA no puede reemplazar: la transcreación, la localización de marketing que requiere comprensión cultural profunda, la traducción literaria y la interpretación simultánea
- Cómo posicionarte en el segmento correcto: la combinación de idiomas raros, la especialización temática y la certificación (jurada, médica, jurídica) son los tres pilares del posicionamiento de alto valor

**Productividad con herramientas de IA**

El traductor que usa IA correctamente puede producir tres veces más sin reducir la calidad. Diseña tu flujo de trabajo productivo:
- El proceso de post-edición de traducción automática (MTPE): cómo usar la salida de un motor de traducción como borrador, centrarte en las correcciones de significado y estilo en lugar de traducir desde cero, y establecer tu tarifa de MTPE (generalmente el cincuenta al setenta por ciento de la tarifa de traducción completa)
- Las herramientas de entorno de traducción asistida (CAT tools): SDL Trados, memoQ, Wordfast. Por qué son imprescindibles para cualquier traductor freelance serio, cómo reducen el tiempo de trabajo con memorias de traducción y glosarios automáticos
- La integración de IA en tu flujo de trabajo: cómo usar Claude para resolver dudas terminológicas, generar alternativas de traducción en contexto y revisar la coherencia del texto traducido antes de entregarlo al cliente
- Cómo medir tu productividad real: palabras por hora con y sin herramientas de IA, y el impacto en tu tarifa efectiva por hora de trabajo

**Especialización y tarifas de alto valor**

La especialización es la palanca más poderosa para subir las tarifas. Define tu estrategia:
- Cómo elegir tu nicho: intersección entre tu formación o experiencia previa, los idiomas que dominas y la demanda del mercado. Los nichos de mayor valor son médico-farmacéutico, jurídico, financiero, técnico de patentes y localización de videojuegos
- La certificación como diferenciador: traductor jurado, membresía en asociaciones profesionales (ATA, ITI, ASETRAD) y certificaciones de calidad (ISO 17100) que justifican tarifas un cincuenta por ciento superiores al mercado
- La construcción de portfolio en tu nicho: cómo conseguir los primeros proyectos especializados cuando empiezas y cómo documentarlos para atraer a clientes de mayor valor
- La escalada de tarifas: cómo comunicar una subida de tarifas a clientes existentes sin perderlos, y cómo posicionarte desde el inicio con nuevos clientes a tu tarifa objetivo

**Captación de clientes directos vs. agencias**

Las agencias de traducción son el canal de entrada, pero los clientes directos son el modelo de negocio sostenible:
- Las ventajas y desventajas de trabajar con agencias: volumen garantizado y menor esfuerzo comercial, a cambio de tarifas entre un treinta y un cincuenta por ciento más bajas que con cliente directo
- Cómo captar clientes directos en tu nicho: dónde están (asociaciones del sector, eventos especializados, LinkedIn), cómo llegar a ellos (contenido técnico, presentaciones, referidos de otros profesionales) y cómo presentar tu servicio en términos de valor para el negocio del cliente
- La propuesta de valor para el cliente directo: por qué contratar directamente a un especialista sale más barato y con mejor calidad que trabajar a través de una agencia generalista

Cierra con el plan de transformación de tu negocio freelance de traducción en los próximos doce meses: en qué nicho especializarte, qué herramientas implementar para multiplicar la productividad, qué certificación obtener y cuál es la tarifa objetivo al final del año.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 30,
                'use_case'         => 'Construir negocio freelance de traducción especializada usando IA para escalar la productividad',
                'vote_score'       => 40,
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
