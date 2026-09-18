<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills316Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'     => 1,
                'title'             => 'Análisis competitivo de estrategias de contenido y SEO',
                'description'       => 'Examina en profundidad el posicionamiento orgánico y la estrategia de contenido de tus principales competidores para identificar brechas y oportunidades. Aprende a extraer inteligencia accionable que oriente tu calendario editorial y tu plan de palabras clave.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un analista de marketing digital especializado en inteligencia competitiva y SEO. Tu tarea es guiarme paso a paso en la realización de un análisis competitivo completo de las estrategias de contenido y posicionamiento orgánico de mis competidores directos.

## Contexto y objetivo

Necesito entender cómo se posicionan mis competidores en buscadores, qué tipo de contenido producen, con qué frecuencia publican y qué brechas puedo aprovechar para superar su visibilidad online. El resultado debe ser un plan de acción concreto basado en evidencia, no en suposiciones.

## Paso 1 — Identificación del ecosistema competitivo

Primero ayúdame a definir el mapa competitivo. Para cada uno de los tres competidores principales que te indique:
- Clasifícalos como competidores directos, indirectos o aspiracionales.
- Identifica sus principales categorías de contenido (blog, video, podcast, guías, herramientas gratuitas).
- Estima su nivel de autoridad de dominio y antigüedad del sitio.
- Señala si tienen presencia en snippets destacados, preguntas frecuentes o paneles de conocimiento en Google.

## Paso 2 — Auditoría de contenido y palabras clave

Guíame para construir una tabla de brechas de palabras clave (keyword gap analysis):
- ¿Qué términos de alta intención posicionan mis competidores pero yo no?
- ¿Qué palabras clave compartimos donde ellos tienen mejor ranking?
- ¿Qué temas de contenido cubren de forma exhaustiva que yo aún no he abordado?
- ¿Cuáles son sus piezas de contenido con más backlinks o mayor tráfico estimado?

Explica cómo interpretar estos datos con herramientas como Ahrefs, SEMrush o Google Search Console de forma gratuita o de bajo coste.

## Paso 3 — Análisis de frecuencia, formato y calidad editorial

Para cada competidor, ayúdame a evaluar:
- Cadencia de publicación (artículos por semana/mes).
- Longitud media de los contenidos más rankados.
- Uso de elementos multimedia (vídeo embebido, infografías, herramientas interactivas).
- Profundidad técnica del contenido: ¿es superficial o exhaustivo?
- Calidad de la estructura: uso de encabezados, tablas, listas, datos propios o estudios.

## Paso 4 — Evaluación de su estrategia de link building

Examina el perfil de backlinks de cada competidor:
- ¿De qué tipo de sitios reciben enlaces? (medios, blogs especializados, directorios, universidades)
- ¿Qué formatos de contenido atraen más enlaces orgánicos? (estudios, estadísticas, herramientas)
- ¿Existen dominios que enlazan a varios competidores pero no a mí? Esos son mis primeros objetivos de prospección.

## Paso 5 — Construcción del informe de posicionamiento y brechas

Redacta un informe ejecutivo en formato tabla y resumen narrativo que incluya:
1. Matriz de comparación de los tres competidores vs. mi empresa (columnas: autoridad, volumen estimado de tráfico, número de artículos indexados, palabras clave top 3, palabras clave top 10).
2. Top 10 de oportunidades de contenido ordenadas por potencial de tráfico y dificultad de posicionamiento.
3. Tres recomendaciones prioritarias para los próximos 90 días.
4. Un calendario editorial sugerido con frecuencia, formatos y temas clave para el primer mes.

## Restricciones y formato de salida

- Usa lenguaje profesional pero accesible, evitando jerga innecesaria.
- Estructura la respuesta con encabezados Markdown claros.
- Incluye plantillas reutilizables para las tablas de análisis.
- Señala explícitamente qué datos debes recopilar manualmente versus qué herramientas los extraen automáticamente.
- El informe final debe poder presentarse directamente a un director de marketing sin modificaciones adicionales.

Cuando estés listo, pídeme el nombre de los tres competidores y la URL de mi sitio web para comenzar el análisis.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Análisis de brechas de contenido y SEO frente a competidores',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 2,
                'title'             => 'Benchmarking técnico de arquitecturas de software competidoras',
                'description'       => 'Compara de forma sistemática las decisiones tecnológicas, patrones de arquitectura y prácticas de ingeniería de los principales productos competidores. Obtén un análisis estructurado que informe las decisiones de stack y diseño de tu propio equipo.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un arquitecto de software senior con experiencia en análisis de sistemas distribuidos y evaluación tecnológica. Tu misión es ayudarme a realizar un benchmarking técnico riguroso de los productos de software que compiten con el mío.

## Objetivo del análisis

Necesito comprender las decisiones de arquitectura, stack tecnológico, patrones de diseño y prácticas de ingeniería de mis competidores. El resultado orientará las decisiones de refactoring, modernización o adopción de nuevas tecnologías en nuestro producto.

## Dimensión 1 — Reconocimiento del stack tecnológico

Para cada competidor, ayúdame a identificar con fuentes verificables:
- Lenguajes de programación principales y secundarios.
- Frameworks de backend y frontend más probables (análisis de job postings, GitHub público, documentación de API, cookies de sesión, cabeceras HTTP).
- Base de datos inferida: relacional, documental, en grafo, series temporales.
- Infraestructura cloud visible: proveedor (AWS, GCP, Azure), servicios específicos si son detectables (CloudFront, Fastly, Vercel, etc.).
- CDN, herramientas de monitoreo visibles (Sentry, Datadog, New Relic) y plataformas de analytics.

Explica las técnicas de reconocimiento pasivo que se pueden usar éticamente: análisis de job offers, código fuente público, respuestas de API, registros DNS, cabeceras de respuesta HTTP y documentación oficial.

## Dimensión 2 — Análisis de rendimiento observable

Guíame para medir y comparar métricas de rendimiento de usuario final:
- Core Web Vitals de las páginas públicas (LCP, FID/INP, CLS) usando PageSpeed Insights o WebPageTest.
- Tiempo hasta el primer byte (TTFB) en diferentes regiones geográficas.
- Tamaño de los bundles de JavaScript y estrategias de carga diferida.
- Número de solicitudes HTTP en la carga inicial y uso de HTTP/2 o HTTP/3.
- Disponibilidad histórica si publican un status page.

## Dimensión 3 — Calidad de la API y experiencia del desarrollador

Si el competidor expone una API pública:
- Evalúa el diseño RESTful o GraphQL: consistencia de naming, versionado, manejo de errores.
- Revisa la calidad de su documentación: ejemplos de código, sandbox interactivo, changelogs.
- Compara los límites de tasa (rate limits) y modelos de autenticación (OAuth 2.0, API keys, JWTs).
- Identifica si ofrecen webhooks, SDKs oficiales o integraciones nativas.

## Dimensión 4 — Seguridad y cumplimiento visible

- Cabeceras de seguridad HTTP presentes (HSTS, CSP, X-Frame-Options).
- Certificaciones publicadas (SOC 2, ISO 27001, GDPR, HIPAA si aplica).
- Política de divulgación de vulnerabilidades o programa de bug bounty.
- Frecuencia y transparencia en comunicación de incidentes de seguridad.

## Dimensión 5 — Prácticas de ingeniería y cultura de desarrollo

Infiere a partir de fuentes públicas:
- ¿Tienen repositorios open source activos? ¿Contribuyen a proyectos externos?
- ¿Publican post-mortems o artículos técnicos en un blog de ingeniería?
- ¿Cuál es su cadencia aproximada de releases? (changelog público)
- ¿Usan feature flags, despliegue continuo, trunk-based development?

## Formato de entrega

Genera una tabla comparativa con puntuación del 1 al 5 en cada dimensión para cada competidor. Añade un resumen narrativo con las tres fortalezas técnicas más significativas de cada competidor y las tres brechas que representan oportunidades para nuestro producto. Concluye con un ranking de decisiones técnicas prioritarias a considerar en nuestro roadmap de ingeniería para los próximos dos trimestres.

Pídeme los nombres y URLs de los competidores para iniciar el análisis.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Evaluación tecnológica comparativa de productos competidores',
                'vote_score'        => 41,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 3,
                'title'             => 'Auditoría de UX competitiva y análisis de patrones de interfaz',
                'description'       => 'Evalúa sistemáticamente la experiencia de usuario de los productos competidores para identificar convenciones del sector, oportunidades de diferenciación y mejores prácticas adoptables. Obtén un informe de hallazgos directamente presentable al equipo de producto.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un investigador senior de experiencia de usuario especializado en análisis competitivo de interfaces digitales. Tu tarea es guiarme en la realización de una auditoría UX comparativa exhaustiva de los principales productos competidores.

## Por qué hacer este análisis

El análisis competitivo de UX no consiste en copiar a la competencia, sino en entender las convenciones del sector que los usuarios ya conocen, identificar innovaciones reales que mejoran la experiencia y detectar los puntos de dolor que ningún competidor ha resuelto todavía. Este es el mayor espacio de oportunidad para la diferenciación.

## Marco de evaluación — Flujos críticos

Para cada competidor, analiza los siguientes flujos de usuario clave:
1. **Onboarding**: primer acceso, configuración inicial, activación del primer valor (time to value).
2. **Flujo principal de tarea**: la acción que los usuarios realizan con más frecuencia según el propósito del producto.
3. **Gestión de errores**: mensajes de error, estados vacíos, flujos de recuperación.
4. **Navegación global**: arquitectura de información, menús, búsqueda, miga de pan.
5. **Flujo de pago o conversión** (si aplica): formularios, confirmaciones, gestión de fricción.

## Dimensiones de evaluación por flujo

Para cada flujo en cada competidor, puntúa del 1 al 5 y justifica:
- **Claridad**: ¿Es obvio qué hacer en cada paso sin instrucciones adicionales?
- **Eficiencia**: ¿Cuántos pasos o clics requiere completar la tarea principal?
- **Consistencia**: ¿Los patrones visuales e interactivos se repiten de forma coherente?
- **Manejo de errores**: ¿Los errores son claros, específicos y accionables?
- **Accesibilidad visible**: ¿Hay texto alternativo, contraste adecuado, navegación por teclado aparente?
- **Deleite**: ¿Existen microinteracciones, animaciones o mensajes que generan una emoción positiva?

## Inventario de patrones de diseño

Documenta los patrones de interfaz utilizados por cada competidor:
- Sistemas de navegación: barra lateral, barra superior, navegación por pestañas, navegación por comandos.
- Componentes de entrada: formularios en línea, modales, paneles deslizantes, wizards paso a paso.
- Feedback de estado: loaders, skeleton screens, toasts, banners de error.
- Vacíos y estados cero: ¿cómo guían al usuario cuando no hay datos?
- Personalización y contextualización: ¿adaptan la interfaz al rol, historial o preferencias del usuario?

## Análisis de identidad visual y sistema de diseño

- Paleta de colores dominante y uso del color para jerarquía y acción.
- Tipografía: familias usadas, escala tipográfica, legibilidad en diferentes densidades de información.
- Iconografía: ¿usan un sistema propio, una librería conocida o íconos mixtos?
- Densidad de información: ¿priorizan la simplicidad o la información densa?
- Tono de voz en microcopy: formal, amigable, técnico, conversacional.

## Síntesis y recomendaciones

Produce un informe estructurado con:
1. Tabla comparativa de puntuaciones por competidor y dimensión.
2. Mapa de convenciones del sector: qué patrones usan todos los competidores (no cambiarlos reduce la curva de aprendizaje del usuario).
3. Mapa de oportunidades: qué problemas ningún competidor resuelve bien.
4. Top 5 de mejoras de UX priorizadas por impacto estimado y esfuerzo de implementación.
5. Moodboard de referencia: qué elementos visuales o de interacción vale la pena tomar como inspiración.

Indícame los productos competidores que debo analizar y el tipo de producto (SaaS B2B, app móvil, e-commerce, etc.) para comenzar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 45,
                'use_case'          => 'Auditoría comparativa de experiencia de usuario de competidores',
                'vote_score'        => 36,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 4,
                'title'             => 'Inteligencia competitiva para ciclos de venta B2B',
                'description'       => 'Desarrolla un sistema estructurado de inteligencia competitiva que equipe a tu equipo comercial con los argumentos, objeciones y estrategias necesarias para ganar frente a competidores específicos. Incluye análisis de win/loss y tarjetas de batalla.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de ventas con experiencia en inteligencia competitiva para entornos B2B complejos. Tu misión es ayudarme a construir un sistema completo de inteligencia competitiva que empodere a mi equipo comercial para ganar más oportunidades frente a competidores identificados.

## El problema que resolvemos

En ciclos de venta B2B, los representantes comerciales pierden oportunidades no por falta de habilidad, sino por falta de información: no saben cómo posicionar diferenciadamente frente a un competidor concreto, cómo rebatir sus argumentos más comunes o cómo detectar señales de que el prospecto está evaluando a un rival en paralelo. Este sistema resuelve ese problema.

## Módulo 1 — Perfil competitivo profundo

Para cada competidor principal, ayúdame a construir un perfil que incluya:
- Propuesta de valor oficial vs. propuesta de valor percibida por los clientes (basada en reseñas en G2, Capterra, Trustpilot o Glassdoor).
- Segmentos de cliente objetivo: ¿a qué tamaño de empresa, sector y tipo de comprador apuntan?
- Modelo de ventas: ¿venden de forma directa, a través de canal, con PLG (product-led growth) o enterprise sales?
- Ciclo de venta típico y proceso de evaluación que imponen al prospecto.
- Estructura de precios conocida o estimada y modelo de licenciamiento.
- Debilidades documentadas públicamente: quejas recurrentes, funcionalidades ausentes, problemas de soporte.

## Módulo 2 — Análisis de win/loss

Diseña una plantilla estructurada para registrar y analizar oportunidades ganadas y perdidas:
- ¿En qué etapa del funnel se pierde frente a este competidor con mayor frecuencia?
- ¿Cuáles son los tres argumentos del competidor que más resuenen con los prospectos?
- ¿Qué objeción interna de nuestra solución aparece con más frecuencia cuando perdemos?
- ¿Qué perfiles de comprador tienden a preferir al competidor? (CTO técnico vs. CEO de negocio, empresa grande vs. pyme)
- Cuando ganamos, ¿qué factor de decisión menciona más el cliente?

## Módulo 3 — Tarjeta de batalla (battle card)

Genera una tarjeta de batalla lista para usar en el campo, con secciones:
1. **Resumen ejecutivo del competidor** (tres líneas máximo): quiénes son y a quién sirven mejor.
2. **Cuándo ganaremos**: situaciones y perfiles de comprador donde nuestra solución es la mejor opción objetiva.
3. **Cuándo perderemos**: situaciones donde el competidor es genuinamente superior y cómo minimizar el daño.
4. **Sus mejores argumentos contra nosotros** + nuestra respuesta preparada para cada uno.
5. **Nuestros mejores argumentos contra ellos** + evidencia concreta (datos, casos de uso, testimonios).
6. **Preguntas para descubrir si el prospecto evalúa a este competidor** (señales de humo).
7. **Minas terrestres**: temas que jamás debes mencionar porque activan una comparación desfavorable.

## Módulo 4 — Estrategia de posicionamiento diferencial

Más allá de la tarjeta de batalla, ayúdame a definir:
- Nuestra narrativa de "nosotros vs. ellos" que no suene defensiva sino propositiva.
- Tres historias de clientes (formato mini-caso) que demuestran nuestra superioridad en escenarios concretos.
- Un marco de evaluación que podamos sugerir al prospecto para estructurar la comparación a nuestro favor.

## Formato de entrega

Genera todos los documentos en formato Markdown listo para importar a una plataforma de enablement de ventas (Highspot, Seismic, Notion o Confluence). Usa tablas y listas para facilitar la consulta rápida durante una llamada de ventas.

Indícame el nombre de los competidores y una descripción de tu solución para comenzar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 50,
                'use_case'          => 'Creación de battle cards y sistema de inteligencia competitiva para ventas B2B',
                'vote_score'        => 44,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 5,
                'title'             => 'Análisis SWOT aplicado al roadmap de producto digital',
                'description'       => 'Conecta el análisis SWOT con decisiones concretas de roadmap, convirtiendo la inteligencia competitiva en prioridades de producto accionables. Aprende a evaluar el posicionamiento de mercado de tu producto frente a alternativas directas e indirectas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un product manager senior especializado en estrategia de producto y análisis de mercado. Tu objetivo es guiarme en la realización de un análisis SWOT aplicado específicamente a las decisiones de roadmap de mi producto digital, conectando la inteligencia competitiva con la priorización de funcionalidades.

## Por qué el SWOT tradicional no es suficiente

El análisis SWOT convencional produce listas genéricas que raramente se traducen en decisiones de producto. En este análisis, cada elemento del SWOT estará vinculado directamente a una decisión de roadmap, una funcionalidad a desarrollar, una capacidad a fortalecer o un riesgo a mitigar en los próximos dos a cuatro trimestres.

## Fase 1 — Mapeo competitivo del mercado

Antes del SWOT, construye el mapa competitivo:
- Define las dos o tres dimensiones más relevantes para comparar productos en este mercado (por ejemplo: facilidad de uso vs. potencia, precio vs. integraciones, nicho vs. generalista).
- Posiciona en ese mapa a tu producto y a los tres competidores principales.
- Identifica el espacio vacío: ¿existe una posición de mercado que ningún competidor ocupa?
- Clasifica los competidores: ¿cuál es el líder de mercado, cuál el retador, cuál el jugador de nicho?

## Fase 2 — Análisis SWOT orientado al producto

Para cada cuadrante, te pido profundidad y especificidad:

**Fortalezas internas**
- ¿Qué capacidades del producto son difíciles de replicar por competidores?
- ¿En qué flujos o casos de uso tenemos una ventaja medible (tiempo de tarea, NPS, retención)?
- ¿Qué activos de datos, red o ecosistema tenemos que los competidores no?

**Debilidades internas**
- ¿Qué funcionalidades críticas tenemos peores que la alternativa más usada?
- ¿Qué deuda técnica o de diseño limita nuestra velocidad de mejora?
- ¿Dónde nos abandonan los usuarios en los flujos de activación o retención?

**Oportunidades externas**
- ¿Qué segmentos de cliente no están siendo bien servidos por ningún competidor?
- ¿Qué tendencias tecnológicas o regulatorias favorecen nuestra propuesta de valor?
- ¿Qué integraciones o partnerships podrían generar ventaja competitiva?

**Amenazas externas**
- ¿Qué movimiento del competidor líder podría erosionar nuestra propuesta de valor en los próximos 12 meses?
- ¿Existen nuevos entrantes con modelos de negocio disruptivos (gratuito, open source, AI-first)?
- ¿Qué cambios regulatorios o de plataforma podrían afectar nuestra distribución o retención?

## Fase 3 — De SWOT a decisiones de roadmap

Para cada hallazgo significativo del SWOT, genera una decisión de roadmap asociada:

| Hallazgo SWOT | Tipo | Iniciativa de producto propuesta | Trimestre sugerido | Prioridad (Alta/Media/Baja) |
|---|---|---|---|---|

Explica también cómo gestionar tensiones: por ejemplo, si una debilidad requiere inversión pero también existe una amenaza urgente, ¿cómo priorizas entre corregir lo existente y defender el mercado?

## Fase 4 — Síntesis estratégica

Redacta un resumen ejecutivo de una página que incluya:
- La posición competitiva actual de nuestro producto en tres frases.
- Las dos o tres apuestas estratégicas de producto para los próximos dos trimestres.
- Los riesgos competitivos que requieren vigilancia mensual.
- Un indicador clave para medir si la estrategia está funcionando.

Pídeme el nombre del producto, el mercado en el que opera y los competidores principales para iniciar el análisis.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 45,
                'use_case'          => 'Priorización estratégica de roadmap mediante análisis competitivo SWOT',
                'vote_score'        => 40,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 6,
                'title'             => 'Benchmarking de compensaciones y beneficios para retención de talento',
                'description'       => 'Realiza un análisis comparativo riguroso de las políticas de compensación, beneficios y paquetes de retención de las empresas competidoras en talento. Obtén datos y metodología para construir propuestas de valor del empleador competitivas.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un director de compensaciones y beneficios con amplia experiencia en benchmarking de mercado laboral. Tu misión es guiarme en la construcción de un análisis comparativo completo de las políticas retributivas y de beneficios de las empresas que compiten por el mismo talento que nosotros.

## Por qué el benchmarking de compensaciones es estratégico

En mercados de talento competitivos, una diferencia del 10% en compensación puede multiplicar la rotación no deseada. Sin embargo, el benchmarking mal ejecutado lleva a guerras salariales insostenibles. El objetivo no es simplemente igualar a los competidores, sino construir una propuesta de valor del empleador (EVP) competitiva y auténtica que atraiga al talento que más necesitamos.

## Módulo 1 — Definición del mercado de referencia

Antes de comparar números, hay que definir correctamente el mercado:
- ¿Con quién competimos por talento? (no siempre son los mismos que los competidores de negocio)
- Define los perfiles de puesto prioritarios a analizar (mínimo tres roles estratégicos).
- Segmenta por nivel de senioridad: junior, semi-senior, senior, lead, manager, director.
- Define las geografías relevantes: ¿el mercado es local, nacional, europeo, o es un mercado remoto global?

## Módulo 2 — Fuentes de datos para el benchmarking

Guíame en el uso de fuentes de datos específicas:
- **Encuestas salariales**: Mercer, Willis Towers Watson, Radford (para grandes empresas); Glassdoor, Levels.fyi, LinkedIn Salary, Jobted (para datos accesibles).
- **Datos de ofertas de empleo**: análisis de bandas salariales publicadas en LinkedIn, Indeed, InfoJobs.
- **Conversaciones de salida**: qué revelan las entrevistas de salida sobre comparaciones de mercado.
- **Comunidades profesionales**: foros de Slack, Discord o Reddit donde los profesionales del sector comparten rangos.
- **Informes de sector**: asociaciones industriales, consultoras especializadas.

Explica cómo triangular entre estas fuentes para obtener rangos fiables cuando no tenemos acceso a encuestas propietarias.

## Módulo 3 — Componentes del paquete de compensación total

El análisis debe ir más allá del salario base. Para cada competidor, construye el cuadro de compensación total:
- Salario base (rango por nivel).
- Variable: comisiones, bonos de rendimiento, bonos de firma.
- Equity: opciones sobre acciones, RSUs, participación en beneficios.
- Beneficios monetizables: seguro médico, plan de pensiones, dietas, vehículo de empresa.
- Beneficios no monetizables: flexibilidad horaria, trabajo remoto, días adicionales de vacaciones.
- Desarrollo profesional: presupuesto de formación, acceso a conferencias, tiempo dedicado a aprendizaje.
- Ventajas culturales: oficinas, eventos, subsidios de bienestar.

## Módulo 4 — Análisis de posicionamiento y brechas

Con los datos recopilados, genera:
- Una tabla de posicionamiento: ¿estamos en el percentil 25, 50 o 75 del mercado en cada componente?
- Identificación de brechas críticas: ¿en qué elementos estamos por debajo del mercado en los roles con mayor rotación o mayor dificultad de contratación?
- Fortalezas actuales: ¿en qué beneficios o condiciones destacamos positivamente y podemos comunicar mejor en el employer branding?

## Módulo 5 — Recomendaciones y plan de acción

Redacta un informe de recomendaciones que incluya:
1. Ajustes salariales prioritarios justificados por datos de mercado.
2. Beneficios de bajo coste y alto impacto percibido que podemos implementar en menos de 90 días.
3. Propuesta de EVP actualizada basada en los hallazgos.
4. Plan de comunicación interna para presentar los cambios al equipo.

Todo el análisis debe seguir principios de equidad interna y cumplimiento legal en materia de igualdad retributiva. Indícame los roles prioritarios y el sector de tu empresa para comenzar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Análisis de mercado salarial para diseñar paquetes de compensación competitivos',
                'vote_score'        => 37,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 7,
                'title'             => 'Análisis financiero comparativo de competidores del sector',
                'description'       => 'Extrae y compara los indicadores financieros clave de los competidores cotizados o con información pública disponible. Construye un análisis estructurado que informe decisiones de inversión, expansión o benchmarking de eficiencia operativa.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un analista financiero senior especializado en análisis de empresas comparables y valoración relativa. Tu misión es guiarme en la construcción de un análisis financiero comparativo riguroso de las principales empresas competidoras de nuestro sector.

## Objetivo del análisis

Este benchmarking financiero sirve para múltiples propósitos: evaluar la eficiencia operativa propia frente al sector, identificar palancas de mejora de rentabilidad, preparar argumentos para inversores o directivos, o valorar adquisiciones potenciales. El análisis debe ser reproducible, basado en datos verificables y presentable a un comité ejecutivo.

## Fase 1 — Selección del universo comparable (peer group)

Ayúdame a definir el universo de comparación correcto:
- Criterios de selección: sector NAICS o GICS, rango de ingresos, modelo de negocio similar, geografía principal.
- Diferencia entre comparables directos (mismo producto, mismo mercado) y comparables de modelo (mismo modelo de negocio pero diferente sector).
- Cómo manejar diferencias de tamaño: ¿usar métricas absolutas o ratios normalizados?
- Fuentes de datos financieros públicos: SEC EDGAR, CNMV, Refinitiv, Bloomberg, Macrotrends, Simply Wall St., Wisesheets.

## Fase 2 — Indicadores de rentabilidad y eficiencia

Para cada empresa del universo comparable, recoge y compara:
- **Margen bruto**: ¿cuánto genera cada empresa por cada euro de ingresos antes de costes operativos?
- **EBITDA y margen EBITDA**: eficiencia operativa normalizada.
- **Margen neto**: rentabilidad final después de impuestos y financiación.
- **ROE (Return on Equity)** y **ROA (Return on Assets)**: eficiencia en el uso del capital.
- **ROIC (Return on Invested Capital)**: rentabilidad sobre el capital total invertido.
- **Ratio de eficiencia de gastos generales y administrativos** (SG&A / Ingresos).

## Fase 3 — Estructura de capital y salud financiera

Analiza la solidez del balance y la gestión del capital:
- **Ratio de deuda neta / EBITDA**: cuántos años de EBITDA se necesitan para pagar la deuda neta.
- **Ratio de cobertura de intereses**: capacidad de servicio de la deuda.
- **Ratio corriente y ratio rápido**: liquidez a corto plazo.
- **Ciclo de conversión de efectivo**: ¿cómo de eficientemente convierten ventas en caja?
- **Capex como porcentaje de ingresos**: intensidad de capital del negocio.

## Fase 4 — Métricas de crecimiento y valoración

- Crecimiento de ingresos interanual (YoY) y CAGR a tres y cinco años.
- Crecimiento del EBITDA y evolución de márgenes en el tiempo.
- **EV/EBITDA**: múltiplo de valoración más utilizado para comparaciones sectoriales.
- **EV/Ingresos**: útil cuando las empresas no son rentables pero tienen alto crecimiento.
- **P/E y P/B**: para empresas maduras y rentables.
- **PEG ratio**: P/E ajustado por crecimiento esperado.

## Fase 5 — Síntesis y análisis narrativo

Genera el informe con:
1. Tabla comparativa con todos los ratios para cada empresa (mínimo cinco empresas del peer group).
2. Posicionamiento de nuestra empresa en cada métrica: ¿percentil 25, 50, 75 del sector?
3. Identificación de las dos o tres áreas donde la empresa está significativamente por debajo del sector y análisis de causas.
4. Análisis de las empresas más eficientes: ¿qué prácticas operativas o decisiones estratégicas explican su superioridad?
5. Recomendaciones financieras para mejorar los ratios más rezagados en los próximos 12-24 meses.

Indica el sector, los años fiscales a analizar y las empresas del universo comparable para comenzar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Benchmarking de ratios financieros y posicionamiento relativo en el sector',
                'vote_score'        => 43,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 8,
                'title'             => 'Análisis de estrategias de propiedad intelectual de competidores',
                'description'       => 'Mapea el portfolio de patentes, marcas y activos de propiedad intelectual de los competidores para identificar riesgos legales, espacios de libertad para operar y oportunidades estratégicas. Genera un informe de inteligencia de PI accionable.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un abogado especializado en propiedad intelectual con experiencia en análisis de portfolios de patentes y estrategia de PI para empresas tecnológicas. Tu misión es guiarme en la elaboración de un análisis de inteligencia de propiedad intelectual de nuestros competidores.

## Propósito y alcance del análisis

El análisis de PI competitiva cumple varios objetivos simultáneos: identificar el espacio de libertad para operar (freedom to operate) antes de lanzar un producto, detectar riesgos de infracción, evaluar las barreras de entrada que los competidores han construido con sus activos de PI y encontrar oportunidades de licenciamiento o adquisición estratégica.

**Nota importante**: Este análisis proporciona orientación estratégica y un punto de partida para la investigación. Cualquier decisión legal definitiva sobre libertad para operar, infracción o validez de patentes debe ser confirmada por un abogado de PI cualificado en la jurisdicción correspondiente.

## Módulo 1 — Análisis de portfolio de patentes

Guíame en el análisis del portfolio de patentes de cada competidor:
- **Búsqueda en bases de datos**: Google Patents, Espacenet (EPO), USPTO Patent Full-Text Database, WIPO PATENTSCOPE.
- **Criterios de búsqueda**: por nombre de empresa titular, nombres de inventores conocidos, clasificación CPC de la tecnología.
- **Métricas del portfolio**: número total de patentes activas, distribución geográfica de protección, antigüedad media del portfolio, velocidad de solicitud en los últimos tres años.
- **Calidad vs. cantidad**: ¿tienen patentes fundamentales (blocking patents) o un portfolio defensivo de protección perimetral?
- **Citaciones**: las patentes más citadas suelen ser las más estratégicamente relevantes. Identifica las diez más citadas de cada competidor.

## Módulo 2 — Análisis de marcas registradas

Para cada competidor, revisa su estrategia de marcas:
- Portfolio de marcas registradas en las clases de Niza relevantes para nuestro negocio.
- Cobertura geográfica: ¿han registrado la marca en los mercados donde operamos o queremos operar?
- Marcas de producto, marcas de servicio y marcas de certificación registradas.
- Historial de litigios de marcas: ¿han sido agresivos en la defensa de sus marcas?
- Posibles conflictos con nuestra propia marca o productos futuros.

## Módulo 3 — Secretos comerciales y estrategia de PI no registrada

Aunque los secretos comerciales no son públicos, se pueden inferir:
- ¿Qué capacidades clave no han patentado? (la ausencia puede indicar una estrategia de secreto comercial)
- ¿Han publicado artículos académicos o técnicos que revelan su know-how sin registrarlo?
- ¿Cuál es su política de publicación de código abierto? (contribuciones a proyectos open source pueden revelar arquitectura interna)

## Módulo 4 — Mapa de riesgos y espacios de oportunidad

Con el análisis anterior, construye:
- **Mapa de riesgos de PI**: áreas tecnológicas donde existe alta densidad de patentes competidoras y debemos operar con precaución o buscar diseños alternativos.
- **Espacios de libertad**: áreas donde no existe protección fuerte de PI y podemos innovar o comercializar con menor riesgo.
- **Oportunidades estratégicas**: patentes de competidores próximas a expirar, portfolios de empresas en dificultades que podrían estar disponibles para licenciamiento o adquisición.

## Módulo 5 — Recomendaciones de estrategia de PI propia

Basándose en el análisis competitivo, recomienda:
- Prioridades de solicitud de patentes para los próximos 12 meses.
- Tecnologías donde deberíamos preferir el secreto comercial sobre la patente.
- Estrategia de registro de marcas para los mercados de expansión.
- Políticas de publicación y open source coherentes con nuestra estrategia de PI.

Indica el sector tecnológico, los competidores a analizar y las áreas de innovación de tu empresa para comenzar.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'advanced',
                'estimated_minutes' => 55,
                'use_case'          => 'Mapeo de portfolios de PI competidores e identificación de riesgos y oportunidades',
                'vote_score'        => 39,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 9,
                'title'             => 'Benchmarking de métricas de satisfacción y retención del cliente',
                'description'       => 'Compara las métricas clave de experiencia del cliente (NPS, CSAT, churn rate, time to value) de tu empresa frente a estándares del sector y competidores. Obtén un diagnóstico objetivo con recomendaciones priorizadas para mejorar la retención.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un experto en Customer Success y análisis de experiencia del cliente con experiencia en benchmarking de métricas de satisfacción y retención. Tu misión es ayudarme a construir un análisis comparativo riguroso de nuestras métricas de CS frente a los estándares del sector y los competidores.

## Por qué el benchmarking de CS es crítico

Un NPS de 42 puede ser excelente en un sector y mediocre en otro. Sin el contexto correcto, las métricas de satisfacción no permiten tomar decisiones informadas. Este análisis establece el punto de referencia correcto, identifica las brechas más costosas en términos de churn y LTV, y prioriza las iniciativas de mejora con mayor retorno.

## Fase 1 — Definición del universo de comparación

Primero establece el marco de referencia correcto:
- **Benchmarks de industria**: identifica las fuentes de datos más relevantes para tu sector (Gainsight, Totango, ChurnZero State of CS, Bain & Company, Forrester, NICE Satmetrix para NPS por industria).
- **Tamaño de empresa**: los benchmarks varían significativamente entre SMB, mid-market y enterprise. Define tu segmento.
- **Modelo de negocio**: SaaS B2B, marketplace, e-commerce, servicios profesionales. Cada modelo tiene rangos esperados distintos.
- **Madurez del producto**: las métricas esperadas en un producto de tres años difieren de las de uno de diez años.

## Fase 2 — Inventario y análisis de métricas propias

Antes de comparar, necesitamos entender nuestra posición actual con precisión:

**Métricas de satisfacción**:
- NPS (Net Promoter Score): score global y por segmento, tendencia en los últimos 12 meses.
- CSAT (Customer Satisfaction Score): por touchpoint clave (onboarding, soporte, renovación).
- CES (Customer Effort Score): facilidad de uso y resolución de problemas.

**Métricas de retención y churn**:
- Churn rate mensual y anual (por número de clientes y por ARR).
- Net Revenue Retention (NRR) o Net Dollar Retention (NDR): incluye expansión y contracción.
- Gross Revenue Retention (GRR): churn puro sin expansión.
- Logo retention: porcentaje de clientes que renuevan independientemente del ARR.

**Métricas de activación y valor**:
- Time to Value (TtV): tiempo entre la firma y el primer valor tangible obtenido.
- Product Adoption Rate: porcentaje de features clave activadas por cliente.
- Engagement Score: frecuencia y profundidad de uso del producto.

## Fase 3 — Comparación con benchmarks de industria

Para cada métrica, construye la tabla de posicionamiento:
| Métrica | Nuestro valor | P25 del sector | P50 del sector | P75 del sector | Mejor en clase |
|---|---|---|---|---|---|

Identifica las métricas donde estamos por debajo de la mediana del sector: estas representan el mayor riesgo de churn y la mayor oportunidad de mejora.

## Fase 4 — Análisis de competidores específicos

Para los competidores con reseñas públicas verificables:
- Análisis de reseñas en G2, Capterra, Trustpilot: ¿cuáles son sus puntos fuertes y débiles en experiencia del cliente según sus propios usuarios?
- Comparación de scores de soporte: tiempo de respuesta declarado, canales disponibles, calidad percibida.
- Análisis de NPS públicos si están disponibles.
- Inferencia de churn por patrones de contratación y despidos en LinkedIn.

## Fase 5 — Plan de mejora priorizado

Con base en el análisis, genera:
1. Top 3 de métricas críticas a mejorar ordenadas por impacto en LTV y ARR.
2. Iniciativas concretas de Customer Success para cada métrica: programas de onboarding, QBRs, sistemas de alerta temprana, estrategias de expansión.
3. Quick wins: acciones implementables en menos de 30 días con impacto visible en 90 días.
4. Plan de seguimiento: cadencia de medición, responsable y umbrales de alerta.

Indícame tu sector, modelo de negocio y los datos de métricas actuales que tienes disponibles para comenzar el análisis.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 40,
                'use_case'          => 'Diagnóstico de métricas de CS y priorización de iniciativas de retención',
                'vote_score'        => 38,
                'resource_type'     => 'prompt',
            ],
            [
                'profession_id'     => 10,
                'title'             => 'Análisis de posicionamiento y tarifas en el mercado freelance',
                'description'       => 'Evalúa tu posicionamiento competitivo como freelance analizando las tarifas, propuestas de valor y estrategias de diferenciación de otros profesionales en tu nicho. Obtén un plan de reposicionamiento y fijación de precios basado en inteligencia de mercado real.',
                'prompt_content'    => <<<'PROMPT'
Actúa como un consultor de negocio especializado en estrategia de posicionamiento para profesionales independientes y freelances. Tu misión es guiarme en la realización de un análisis competitivo completo de mi mercado freelance para optimizar mi tarifa, mi propuesta de valor y mi estrategia de captación de clientes.

## El problema del freelance sin referencia de mercado

La mayoría de los freelances fija sus tarifas basándose en lo que cobraban en su último empleo, lo que les parece "razonable" o lo que un cliente aceptó una vez. Ninguno de estos métodos es estratégico. Sin inteligencia de mercado, hay dos errores igualmente dañinos: cobrar demasiado poco y dejar dinero sobre la mesa, o cobrar demasiado sin la propuesta de valor que lo justifique y perder oportunidades.

## Módulo 1 — Definición del nicho y del mercado de referencia

Antes de comparar, hay que delimitar correctamente el mercado:
- ¿Cuál es tu especialidad concreta? (no "diseñador web", sino "diseñador de interfaces para SaaS B2B fintech")
- ¿A qué tipo de cliente sirves? (agencias, startups, empresas medianas, corporaciones)
- ¿En qué geografía compites? (mercado local, nacional, europeo, mercado anglófono global)
- ¿Cuál es tu modelo de trabajo predominante? (por proyecto, por hora, retainer mensual, modelo mixto)

La combinación de especialidad + cliente + geografía + modelo define tu mercado real de referencia.

## Módulo 2 — Investigación de tarifas del mercado

Guíame en la recopilación de datos de tarifas con estas fuentes:

**Plataformas de freelance**:
- Upwork: revisa los perfiles Top Rated y Top Rated Plus en tu especialidad. ¿Qué tarifas por hora tienen? ¿Cómo describen su propuesta de valor?
- Malt: perfiles destacados en tu categoría. Analiza también las tarifas visibles en sus perfiles públicos.
- Toptal, Lemon.io, Gun.io: plataformas de alta gama. ¿Cuál es el rango de tarifas que publican?
- LinkedIn: analiza la sección de servicios de profesionales independientes en tu especialidad.

**Fuentes adicionales**:
- Encuestas salariales de asociaciones profesionales de tu sector.
- Comunidades de Slack o Discord de freelances en tu especialidad.
- Foros como Reddit (r/freelance, subreddits de tu sector).
- Informes anuales de freelancing: Payoneer, Fiverr Business, Malt Barometer.

## Módulo 3 — Análisis de propuestas de valor de competidores

Más allá de las tarifas, analiza cómo se posicionan los competidores más exitosos:
- ¿Qué resultados o transformaciones prometen? (no "hago diseño", sino "reduzco el tiempo de incorporación de usuarios un 40%")
- ¿Qué credenciales o pruebas sociales muestran? (empresas clientes, casos de estudio, métricas de resultados)
- ¿Cómo estructuran sus servicios? (paquetes fijos, propuestas personalizadas, servicios productizados)
- ¿Cómo generan confianza antes del primer contacto? (portfolio, testimonios, contenido de liderazgo intelectual)
- ¿Qué canales de captación utilizan? (perfil de Upwork, LinkedIn, web propia, referencias, contenido)

## Módulo 4 — Diagnóstico de tu posición actual

Con los datos recopilados, posiciónate en el mercado:
- ¿En qué percentil de tarifas estás actualmente? (P25, P50, P75, P90)
- ¿Tu propuesta de valor es comparable a la de los freelances en tu rango de tarifa?
- ¿Qué atributos te diferencian genuinamente de los competidores en tu rango?
- ¿Existen nichos dentro de tu especialidad que estén sub-servidos y mejor pagados?

## Módulo 5 — Estrategia de reposicionamiento y fijación de precios

Genera un plan de acción concreto:
1. Tarifa objetivo basada en el análisis de mercado y tu propuesta de valor (con justificación).
2. Estrategia de transición si la tarifa objetivo supera significativamente la actual.
3. Reescritura de propuesta de valor: cómo articular tus diferenciadores en una frase de posicionamiento.
4. Plan de construcción de credenciales para justificar tarifas más altas (casos de estudio, certificaciones, especialización).
5. Estructura de servicios recomendada: paquetes, retainers o propuestas personalizadas según tu mercado.

Indícame tu especialidad, tu tarifa actual, los tipos de cliente que sirves y la geografía en la que compites para comenzar el análisis.
PROMPT,
                'tool_name'         => 'Claude',
                'difficulty'        => 'intermediate',
                'estimated_minutes' => 35,
                'use_case'          => 'Investigación de mercado freelance para reposicionamiento y fijación de tarifas',
                'vote_score'        => 42,
                'resource_type'     => 'prompt',
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
