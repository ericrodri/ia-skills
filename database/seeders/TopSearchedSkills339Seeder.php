<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills339Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de contenido B2B para ciclos de venta largos y decisores múltiples',
                'description'      => 'Diseña una estrategia de contenido B2B que acompañe al comprador durante todo el ciclo de decisión, desde la concienciación del problema hasta la justificación de la compra ante el comité ejecutivo. Aprende a crear contenido que eduque, genere confianza y acelere el ciclo de ventas sin ser agresivo.',
                'prompt_content'   => <<<EOT
Actúa como un estratega de contenido B2B con más de 10 años de experiencia en sectores de tecnología, servicios profesionales e industria. Eres especialista en crear ecosistemas de contenido que apoyan ciclos de ventas complejos de 6 a 18 meses, con múltiples tomadores de decisión y procesos de compra comité. Has ayudado a empresas a reducir sus ciclos de venta en un 30% mediante programas de contenido estratégico.

Necesito diseñar una estrategia de contenido B2B completa para mi empresa que apoye el proceso de compra de nuestros clientes y acelere el ciclo de ventas.

**Mi contexto:**
[Describe tu empresa: sector, solución que vendes, perfil del cliente ideal (sector, tamaño de empresa, roles que participan en la compra), ciclo de ventas típico, principales objeciones y el estado actual de tu estrategia de contenido]

**Bloque 1: Arquitectura del ciclo de compra B2B**

Construye el mapa del journey del comprador B2B en mi contexto:

Etapa 1 - Concienciación del problema:
- Qué síntomas llevan a los potenciales clientes a reconocer que tienen un problema que resolver
- Qué tipo de contenido buscan en esta etapa (artículos, informes, vídeos educativos)
- Cómo aparecer en su radar sin ser intrusivos

Etapa 2 - Exploración de soluciones:
- Cómo el comprador evalúa las categorías de solución disponibles
- Qué preguntas se hace antes de considerar proveedores específicos
- Contenido que posiciona tu categoría de solución como la más adecuada

Etapa 3 - Evaluación de proveedores:
- Criterios de evaluación más comunes y cómo el contenido puede influir en ellos
- Roles que participan en la evaluación y qué necesita cada uno
- Contenido de comparación, demos, trials y pruebas de concepto

Etapa 4 - Justificación interna y aprobación:
- Cómo el campeón interno justifica la compra ante el comité de decisión
- Contenido que facilita la venta interna: ROI, casos de negocio, comparativas de riesgo
- Materiales que el cliente puede usar en sus propias presentaciones internas

**Bloque 2: Tipos de contenido B2B de alto impacto**

Para cada formato, guíame en su propósito, estructura y mejores prácticas:

Thought leadership:
- Qué diferencia el verdadero liderazgo de pensamiento del contenido de marketing disfrazado
- Cómo identificar los temas en los que tu empresa puede ser una voz genuinamente diferencial
- Formatos: artículos de opinión, análisis del sector, predicciones, investigación propia

White papers e informes de investigación:
- Estructura de un white paper B2B efectivo (no un folleto de producto de 20 páginas)
- Cómo usar datos propios o de terceros para generar insights genuinos
- Distribución y promoción para maximizar el alcance y la generación de leads cualificados

Casos de éxito (case studies):
- La estructura narrativa de un caso de éxito B2B que realmente convence
- Cómo obtener la colaboración del cliente para un buen case study
- Formatos: escrito, vídeo, webinar con cliente, presentación en evento

Webinars y eventos educativos:
- Cómo diseñar webinars que aporten valor real y no sean demos de producto encubiertas
- Estructura de webinar para cada etapa del funnel B2B
- Estrategia de seguimiento post-webinar para convertir asistentes en oportunidades

**Bloque 3: Contenido por persona y rol en el comité de compra**

Adapta el contenido a cada actor del proceso de decisión:
- Para el Director/VP de área: contenido de impacto estratégico, tendencias, ROI del sector
- Para el Director de TI o técnico: integraciones, seguridad, arquitectura, implementación
- Para el CFO: TCO (coste total de propiedad), ROI con casos comparables, modelos de pricing
- Para el CEO o C-suite: riesgo de no actuar, ventaja competitiva, testimonios de pares
- Para el usuario final o manager de equipo: casos de uso prácticos, facilidad de adopción, impacto en el día a día

**Bloque 4: Calendario editorial B2B**

Diseña el sistema de producción y publicación de contenido:
- Frecuencia de publicación realista por formato según los recursos disponibles
- Proceso de creación de contenido: briefing, producción, revisión, aprobación, publicación
- Reutilización de contenido: cómo extraer el máximo valor de cada pieza en múltiples formatos y canales
- Calendario anual con momentos clave del sector: eventos, informes del sector, temporadas de presupuestos

**Bloque 5: Distribución y amplificación de contenido B2B**

Cómo hacer que el contenido llegue a los compradores correctos:
- LinkedIn como canal principal de distribución de contenido B2B: estrategia de empresa y personal branding del equipo
- Nurturing por email: secuencias de contenido diferenciadas por segmento y etapa del funnel
- Sindicación en medios especializados del sector
- SEO B2B: cómo optimizar el contenido para las búsquedas que hace tu comprador ideal
- Contenido que el equipo de ventas puede usar directamente en sus conversaciones

**Bloque 6: Métricas de contenido B2B**

Cómo medir el impacto real del contenido en el pipeline:
- Métricas de audiencia: alcance, engagement, subscribers, descargas
- Métricas de generación de demanda: leads, MQLs, conversión de contenido a pipeline
- Atribución en ciclos de venta largos: cómo vincular el contenido a oportunidades que cierran meses después
- Qué reportar a la dirección para demostrar el ROI del programa de contenido

**Entregables:**
1. Mapa completo del journey del comprador B2B para mi empresa con gaps de contenido identificados
2. Plan editorial de 6 meses con los 12 contenidos prioritarios por tipo y etapa del funnel
3. Estructura detallada del primer white paper o informe de investigación a desarrollar
4. Guía de contenido por rol del comité de compra para el equipo de ventas
5. Dashboard de métricas de contenido con KPIs por objetivo y frecuencia de revisión
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Generación de demanda B2B',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Documentación técnica como contenido B2B: convierte el conocimiento en activo de marketing',
                'description'      => 'Aprende a transformar la documentación técnica, tutoriales y guías de tu producto en contenido de marketing B2B que atrae a desarrolladores y equipos técnicos, genera confianza y acelera el proceso de evaluación. Crea una estrategia de developer marketing basada en contenido técnico de alta calidad.',
                'prompt_content'   => <<<EOT
Actúa como un director de Developer Relations (DevRel) y Developer Marketing con experiencia en empresas de herramientas para desarrolladores, APIs e infraestructura cloud. Has construido programas de contenido técnico que han convertido la documentación y el conocimiento de ingeniería en activos de marketing que generan tráfico orgánico, leads cualificados y aceleran el proceso de evaluación técnica en ventas B2B.

Quiero desarrollar una estrategia de contenido técnico B2B que convierta el conocimiento de mi equipo de ingeniería en un activo de marketing que atraiga a compradores técnicos y acelere el ciclo de ventas.

**Mi contexto:**
[Describe tu producto o servicio (API, plataforma, herramienta para desarrolladores, software empresarial), a quién va dirigido (developers, arquitectos, CTOs, equipos de IT), el contenido técnico que ya tienes y los principales objetivos de negocio]

**Parte 1: El comprador técnico B2B y su proceso de evaluación**

Entiende cómo piensa y decide el comprador técnico:
- La diferencia entre el influenciador técnico (quien evalúa) y el tomador de decisión (quien aprueba)
- Cómo el desarrollador o arquitecto evalúa herramientas: documentación, demos, proof of concept, comunidad
- Por qué el contenido técnico honesto genera más confianza que el marketing tradicional
- La paradoja de la documentación: cómo la calidad de los docs puede ser el factor decisivo en la evaluación
- Señales de compra en el comportamiento técnico: qué indica que un usuario de prueba se está convirtiendo en comprador

**Parte 2: Tipos de contenido técnico B2B de alto impacto**

Para cada formato, explícame su propósito y cómo hacerlo bien:

Documentación como marketing:
- Cómo una documentación excelente se convierte en el mejor argumento de ventas técnico
- Estructura de documentación que convierte: getting started, conceptos clave, casos de uso, referencia
- Cómo optimizar la documentación para el SEO técnico: términos que buscan los desarrolladores

Tutoriales y guías técnicas:
- Los mejores tutoriales técnicos resuelven un problema real paso a paso: cómo identificarlos
- Estructura del tutorial técnico ideal: contexto del problema, código completo y funcional, explicación
- Cómo publicar y distribuir tutoriales para maximizar el alcance orgánico

Artículos de ingeniería y arquitectura:
- Cómo el equipo de ingeniería puede convertir sus decisiones técnicas en contenido de thought leadership
- Temas de alto impacto: cómo resolvimos X problema, por qué elegimos Y arquitectura, análisis de trade-offs
- Proceso de escritura con ingenieros: cómo reducir la fricción para que el equipo técnico contribuya

Comparativas y benchmarks técnicos:
- Cómo hacer comparativas honestas que generen credibilidad en lugar de sonar a marketing
- Benchmarks de rendimiento: metodología, reproducibilidad y presentación de resultados
- Análisis de alternativas: cómo mencionar a los competidores sin sonar defensivo

**Parte 3: SEO técnico y distribución de contenido para desarrolladores**

Cómo hacer que el contenido llegue a los desarrolladores correctos:
- Keyword research técnico: cómo identificar los términos que buscan los desarrolladores al evaluar soluciones como la tuya
- Optimización de documentación y tutoriales para aparecer en búsquedas técnicas
- Distribución en comunidades técnicas: Hacker News, Reddit, comunidades especializadas, newsletters
- GitHub como canal de contenido: cómo los repos, los READMEs y los ejemplos de código son marketing
- Developer advocates y comunidad: cómo escalar la creación y distribución de contenido técnico

**Parte 4: Contenido técnico para cada etapa del ciclo de ventas**

Mapea el contenido técnico al proceso de evaluación y compra:
- Etapa de descubrimiento: contenido que aparece cuando el developer busca soluciones a su problema
- Etapa de evaluación técnica: documentación, sandbox, ejemplos de código, compatibilidad con su stack
- Etapa de proof of concept: guías de implementación, arquitecturas de referencia, soporte técnico de ventas
- Etapa de aprobación ejecutiva: casos de éxito técnicos, análisis de seguridad y compliance, TCO

**Parte 5: Programa de contenido técnico con el equipo de ingeniería**

Cómo involucrar al equipo técnico en la creación de contenido:
- Cómo crear una cultura de escritura técnica en el equipo de ingeniería
- Proceso de edición técnica: cómo mejorar el contenido del equipo sin desmotivarlos
- Estructura de blog de ingeniería: qué publicar, con qué frecuencia y con qué proceso de revisión
- Incentivos y reconocimiento para los ingenieros que contribuyen al contenido

**Parte 6: Métricas del programa de contenido técnico**

Cómo medir el impacto del contenido técnico en el negocio:
- Tráfico orgánico a documentación y tutoriales: crecimiento y términos de búsqueda
- Tiempo en documentación y tasa de activación: correlación entre uso de docs y conversión a cuenta de pago
- Leads de contenido técnico: cuántos trials o solicitudes de demo vienen de artículos técnicos
- Atribución técnica: cómo rastrear si la documentación o los tutoriales influyeron en el cierre de una oportunidad

**Entregables:**
1. Auditoría del contenido técnico existente con identificación de gaps y oportunidades
2. Plan de contenido técnico de 6 meses con tipos, temas, canales y responsables
3. Proceso de creación de contenido con el equipo de ingeniería con menor fricción posible
4. Guía de SEO técnico para documentación y tutoriales con los 20 términos de mayor oportunidad
5. Dashboard de métricas del programa de contenido técnico con KPIs trimestrales
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Developer marketing y contenido técnico',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de white papers y case studies B2B de alto impacto',
                'description'      => 'Aprende a diseñar white papers, informes y casos de éxito B2B que no solo comunican bien sino que también generan credibilidad, aceleran el proceso de decisión y quedan grabados en la memoria del lector. Domina el diseño editorial de contenido largo B2B que combina datos, narrativa y diseño visual efectivo.',
                'prompt_content'   => <<<EOT
Actúa como un director creativo especializado en diseño editorial B2B con experiencia en agencias de comunicación corporativa y consultoras de estrategia. Has diseñado más de 200 white papers, informes anuales y casos de éxito para empresas en sectores como tecnología, consultoría, servicios financieros y salud. Eres conocido por crear piezas que los compradores B2B guardan y comparten, en lugar de descargar y olvidar.

Necesito diseñar una pieza de contenido B2B de largo alcance (white paper, informe o case study) que genere credibilidad, apoye el proceso de venta y se convierta en un activo duradero para mi empresa.

**Mi proyecto:**
[Describe la pieza que necesitas crear: tipo (white paper, case study, informe de investigación, guía), tema, audiencia objetivo, objetivo de negocio, recursos disponibles (escribano, diseñador, datos propios) y el contexto de distribución]

**Parte 1: Estrategia antes del diseño**

Define el propósito estratégico de la pieza:
- El lector correcto: quién debe leer esta pieza y qué debe pensar, sentir o hacer después
- El argumento central: la tesis o punto de vista que la pieza debe defender o ilustrar
- La promesa de valor: qué conocimiento o perspectiva obtendrá el lector que no encontrará en otro lugar
- La llamada a la acción: qué quieres que haga el lector cuando termine
- Cómo se integra esta pieza en el journey del comprador B2B

**Parte 2: Estructura y arquitectura de la información**

Diseña la estructura de la pieza para maximizar la lectura y la retención:

Para un white paper:
- Executive summary: los insights clave para el lector que solo lee las primeras páginas
- Contexto y problema: por qué este tema importa ahora
- Análisis o investigación: datos, evidencia y perspectiva experta
- Implicaciones y recomendaciones: qué debe hacer el lector con esta información
- Conclusión y CTA: próximos pasos concretos

Para un case study:
- La situación antes: contexto del cliente y el desafío que enfrentaba
- El proceso: cómo se implementó la solución, incluyendo los obstáculos reales
- Los resultados: métricas concretas, testimonios y el impacto en el negocio
- Las lecciones: qué aprendizajes son transferibles para otros clientes similares

**Parte 3: Principios de diseño visual para contenido B2B**

Guíame en las decisiones de diseño que hacen que la pieza se vea y se lea bien:

Tipografía y legibilidad:
- Elección de tipografía para documentos extensos: qué funciona para lectura larga
- Jerarquía tipográfica: cómo los títulos, subtítulos y cuerpo de texto guían al lector
- Longitud de línea óptima, interlineado y espaciado para una lectura cómoda

Datos y visualizaciones:
- Cuándo usar tabla, gráfico de barras, línea, circular o infografía para cada tipo de dato
- Principios de diseño de datos: cómo presentar información cuantitativa que sea fácil de leer y retener
- Cómo citar fuentes de datos de manera que refuerce la credibilidad sin interrumpir el flujo

Layout y estructura visual:
- Uso del espacio en blanco en documentos corporativos: por qué menos es más
- Grids de diseño para documentos B2B: cómo crear consistencia visual sin rigidez
- Elementos gráficos de apoyo: iconografía, callouts, pull quotes y cuándo usarlos

**Parte 4: Portada y páginas clave**

Diseña los elementos que más impacto tienen en la primera impresión:
- Portada: qué debe comunicar en 3 segundos (título, subtítulo, credencial de la empresa)
- Tabla de contenido: cómo diseñarla para que sea navegable y genere curiosidad
- Executive summary: el diseño de las dos páginas más importantes del documento
- Páginas de datos o hallazgos clave: cómo hacer que los números sean memorables

**Parte 5: Adaptación a múltiples formatos y canales**

Maximiza el valor de la pieza reutilizándola en múltiples formatos:
- Del white paper al infográfico de una página: cómo extraer los 5 insights más poderosos
- Del case study al slide deck de ventas: qué elementos del caso de éxito se trasladan mejor
- Del informe al carrusel de LinkedIn: cómo adaptar los datos y el diseño al formato social
- Del white paper al webinar: cómo convertir el contenido escrito en presentación interactiva

**Parte 6: Proceso de producción y revisión**

Organiza el proceso de creación desde el brief hasta la publicación:
- Brief de contenido: qué información necesitas del equipo antes de empezar a diseñar
- Flujo de trabajo recomendado: texto primero o diseño primero, y por qué
- Ciclo de revisión: cuántas rondas son razonables y cómo gestionar el feedback contradictorio
- Entregables finales: qué formatos necesitas para los distintos canales de distribución

**Entregables:**
1. Esquema completo de la pieza que necesito crear, con estructura de secciones y enfoque de cada una
2. Guía de estilo editorial: tono, vocabulario, longitud de párrafos y elementos de marca
3. Especificaciones de diseño: paleta de colores, tipografía, grid y elementos gráficos recomendados
4. Plan de reutilización: cómo convertir esta pieza en 5 activos de contenido adicionales
5. Checklist de revisión antes de publicar: qué verificar en contenido, diseño y distribución
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseño editorial de contenido corporativo B2B',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Contenido de sales enablement B2B: arma a tu equipo para vender mejor',
                'description'      => 'Diseña el ecosistema de contenido que necesita tu equipo de ventas para tener conversaciones más efectivas, manejar objeciones con confianza y acortar el ciclo de ventas. Crea materiales que los vendedores realmente usen y que los compradores encuentren valiosos.',
                'prompt_content'   => <<<EOT
Actúa como un director de Sales Enablement con experiencia en empresas B2B de tecnología y servicios profesionales. Has diseñado programas completos de habilitación de ventas que han aumentado las tasas de conversión en un 35% y reducido el tiempo de rampa de los nuevos representantes de ventas de 6 a 3 meses. Tu especialidad es crear contenido que los vendedores realmente usan porque les hace el trabajo más fácil.

Necesito diseñar un programa de contenido de sales enablement para mi equipo de ventas B2B que les ayude a tener mejores conversaciones y cerrar más oportunidades.

**Mi contexto:**
[Describe el equipo de ventas: tamaño, perfil, nivel de experiencia, el producto o servicio que venden, los principales desafíos del equipo (largo tiempo de rampa, tasas de conversión bajas, manejo de objeciones deficiente, etc.) y los tipos de clientes con los que trabajan]

**Sección 1: Diagnóstico de necesidades de contenido de ventas**

Evalúa qué necesita el equipo para vender mejor:
- Las 5 etapas del ciclo de ventas y el contenido que falta o no funciona en cada una
- Las 5 objeciones más frecuentes y cómo el contenido actual las maneja (o no)
- Análisis de win/loss: qué contenido o argumentos se asocian con oportunidades ganadas
- Feedback del equipo de ventas: qué piden, qué tienen y por qué no usan lo que ya existe
- Análisis del contenido de la competencia: qué tienen ellos que tú no tienes

**Sección 2: Tipos de contenido de sales enablement y su propósito**

Para cada tipo de material, guíame en su diseño y mejores prácticas:

Battlecards de competidores:
- Estructura de una battlecard efectiva (no de 10 páginas, sino de 1 que se consulta en la llamada)
- Qué comparar: fortalezas propias, debilidades del competidor, cómo responder cuando te mencionan
- Cómo mantener las battlecards actualizadas con nueva información del mercado

Playbooks de ventas por industria o segmento:
- Estructura del playbook: perfil del cliente ideal, dolores típicos, argumentos de valor, proceso de ventas recomendado
- Cómo hacer playbooks suficientemente específicos para ser útiles pero suficientemente flexibles para distintos contextos
- Cuándo tener un playbook genérico vs. uno por industria vertical

Guías de conversación y talk tracks:
- Talk track de primera reunión: preguntas de descubrimiento, presentación de la empresa y cierre de siguiente paso
- Talk tracks de objeciones: respuestas específicas para las 10 objeciones más frecuentes
- Guión de demo: cómo estructurar una demostración que conecta el producto con los problemas del cliente

Materiales de seguimiento y nurturing:
- Email templates para cada etapa del proceso de ventas (post-primera reunión, post-demo, seguimiento de propuesta)
- Contenido de valor para compartir durante el ciclo de ventas: artículos, casos de éxito, calculadoras de ROI
- Deck de propuesta: estructura que funciona para presentaciones de cierre

**Sección 3: Contenido por etapa del ciclo de ventas**

Diseña el mapa de contenido de ventas:

Prospección y primer contacto:
- Scripts de prospección (email, LinkedIn, teléfono) que generan respuesta
- Material de introducción a la empresa para compartir antes de la primera reunión
- Videos cortos de presentación personalizada

Descubrimiento y calificación:
- Preguntas de descubrimiento que revelan necesidades y dolor de negocio
- Herramientas de diagnóstico o assessment que añaden valor al prospecto
- Resumen de reunión de discovery: qué documentar y compartir

Propuesta y cierre:
- Estructura de la propuesta que justifica el precio y facilita la decisión
- Calculadora de ROI o de coste de no actuar
- Materiales de referencia para la venta interna del campeón ante el comité de compra

**Sección 4: Sistema de gestión y acceso al contenido de ventas**

El mejor contenido no sirve de nada si nadie lo encuentra:
- Organización del repositorio de contenido de ventas: estructura, nombrado y accesibilidad
- Integración con el CRM: cómo hacer que el contenido correcto aparezca en el momento correcto del proceso
- Proceso de actualización: quién mantiene el contenido actualizado y con qué frecuencia
- Sistema de feedback del equipo de ventas sobre qué funciona y qué no

**Sección 5: Onboarding de nuevos representantes con contenido**

Usa el contenido de enablement para acelerar la rampa de los nuevos vendedores:
- Programa de onboarding de 90 días basado en contenido y role-plays
- Secuencia de aprendizaje: qué debe saber un nuevo vendedor en el día 30, 60 y 90
- Certificación de conocimiento: cómo asegurar que el nuevo vendedor domina los materiales clave
- Buddy system: cómo los vendedores senior pueden transferir conocimiento a los nuevos

**Entregables:**
1. Auditoría del contenido de ventas actual con gaps identificados por etapa del ciclo
2. Mapa de contenido de ventas completo: qué crear, para qué etapa y con qué prioridad
3. Estructura de battlecard para los dos principales competidores
4. Template de talk track para la objeción más frecuente del equipo
5. Plan de implementación de 60 días con orden de creación y proceso de rollout al equipo
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Habilitación del equipo de ventas B2B',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Case studies de producto B2B que aceleran el ciclo de ventas',
                'description'      => 'Aprende a crear casos de éxito de producto que no solo documentan resultados sino que se convierten en herramientas estratégicas de ventas B2B. Domina el proceso de selección de clientes, la estructura narrativa y la distribución para maximizar el impacto de cada case study en el pipeline.',
                'prompt_content'   => <<<EOT
Actúa como un product marketer senior especializado en estrategia de go-to-market y contenido de producto para empresas B2B. Tu especialidad son los casos de éxito y las historias de cliente que conectan las capacidades del producto con los resultados de negocio que importan a los compradores. Has creado programas de case studies que han reducido el tiempo de cierre en un 25% al proporcionar evidencia social y técnica en el momento correcto del proceso de compra.

Necesito crear un programa de cases studies de producto que sea estratégico para el negocio, no solo una colección de testimonios, y que el equipo de ventas realmente use.

**Mi contexto:**
[Describe el producto, el tipo de cliente (sector, tamaño, perfil del comprador), los resultados más relevantes que tus clientes consiguen con el producto, el estado actual de los casos de éxito que tienes y los desafíos del equipo de ventas para usarlos]

**Módulo 1: Estrategia de programa de case studies**

Define el programa desde una perspectiva estratégica:
- Qué tipos de case studies necesitas: por industria, por rol del comprador, por caso de uso, por tamaño de empresa
- Criterios de priorización: qué historias de cliente tienen mayor impacto en las ventas activas
- Gap analysis: qué historias te faltan y qué oportunidades de venta están bloqueadas por esa ausencia
- Frecuencia de producción realista según los recursos disponibles
- Cómo construir un pipeline de clientes candidatos para casos de éxito futuros

**Módulo 2: Selección y outreach con clientes para el case study**

El proceso de conseguir que un cliente participe:
- Criterios de selección del cliente ideal para un case study (resultados, representatividad, disposición)
- Cómo identificar a los clientes más adecuados y al contacto correcto dentro de la empresa
- Email de solicitud de participación: qué incluir para maximizar la tasa de respuesta
- Qué ofreces al cliente a cambio: visibilidad, co-marketing, relación estratégica
- Proceso de aprobación legal: cómo agilizar la revisión del cliente sin perder el momentum

**Módulo 3: Proceso de entrevista para un case study de producto**

Extrae la historia correcta en la entrevista:
- Preparación previa: qué datos de uso y resultados debes tener antes de la entrevista
- Las 15 preguntas más importantes para un case study de producto B2B (con variaciones por objetivo)
- Cómo conseguir que el cliente hable de resultados cuantificados, no solo de satisfacción general
- Cómo explorar los obstáculos y el proceso de decisión de compra: la parte más valiosa para ventas
- Cómo manejar al cliente que quiere controlar demasiado el mensaje final

**Módulo 4: Estructura narrativa del case study de producto**

La arquitectura de un case study que realmente convence:

Apertura (el gancho):
- El resultado más impresionante primero, no el contexto
- Una cita del cliente que captura la esencia de la transformación
- El perfil del cliente en 2-3 líneas para que el lector se identifique

El problema (antes):
- La situación antes de usar el producto: procesos, limitaciones, costes, riesgos
- Por qué el cliente no encontraba solución con otras alternativas
- El coste del problema: qué le estaba costando al negocio no tenerlo resuelto

La solución (cómo):
- Por qué eligieron vuestro producto (el proceso de decisión)
- Cómo se implementó: timeline, equipo involucrado, facilidad de adopción
- Funcionalidades clave que marcaron la diferencia

Los resultados (después):
- Métricas cuantificadas: porcentajes, tiempo ahorrado, ingresos generados, costes reducidos
- Impacto cualitativo: cambios en el equipo, en los procesos, en la cultura
- Testimonios directos del cliente en sus propias palabras

**Módulo 5: Formatos del case study para distintos canales**

El mismo caso de éxito, en múltiples formatos:
- Formato web: una página que sea escaneable y tenga CTA clara para ventas
- PDF descargable: para compartir por email en el proceso de ventas
- Slide deck: 5-7 slides para que el equipo de ventas use en presentaciones
- Video testimonial: guión y preguntas para grabar al cliente
- Extractos para LinkedIn, email de nurturing y newsletter

**Módulo 6: Distribución estratégica del case study en el proceso de ventas**

Cómo integrar el case study en el proceso de ventas:
- En qué momento del ciclo de ventas enviar cada case study y cómo contextualizarlo
- Cómo entrenar al equipo de ventas para usar los cases studies de manera efectiva
- Segmentación por industria, rol y tamaño de empresa para personalizar el envío
- Cómo medir el impacto del case study en el pipeline: vistas, conversiones, influencia en el cierre

**Entregables:**
1. Framework de programa de case studies: tipos necesarios, prioridades y calendario de producción
2. Guía de proceso completo: desde la selección del cliente hasta la publicación y distribución
3. Cuestionario de entrevista adaptado a mi producto y tipo de cliente
4. Plantilla de case study con estructura y guías de escritura para cada sección
5. Guía de uso del case study para el equipo de ventas: cuándo enviarlo y cómo contextualizarlo
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Product marketing y evidencia de ventas',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Contenido B2B para employer branding: atrae talento como si fuera un cliente',
                'description'      => 'Aplica las técnicas del marketing de contenido B2B al employer branding para atraer a los candidatos adecuados, reducir el tiempo de cobertura de vacantes y mejorar la calidad de los perfiles que llegan espontáneamente. Trata la captación de talento con la misma sofisticación que la captación de clientes.',
                'prompt_content'   => <<<EOT
Actúa como un director de Employer Branding con experiencia en la aplicación de estrategias de contenido B2B al marketing de talento. Has ayudado a empresas a reducir el coste de adquisición de talento en un 40% y a mejorar la calidad de los candidatos espontáneos mediante la construcción de una marca empleadora sólida y una estrategia de contenido orientada a los perfiles que la empresa necesita.

Quiero desarrollar una estrategia de contenido de employer branding que funcione como marketing B2B: atrayendo a los candidatos correctos con contenido de valor antes de que estén activamente buscando empleo.

**Mi contexto:**
[Describe la empresa: sector, tamaño, cultura, los perfiles que más dificultad tienen para captar, los principales atributos diferenciadores como empleador y los desafíos actuales en captación de talento]

**Bloque 1: El candidato como comprador B2B**

Entiende el proceso de decisión del candidato de alto nivel:
- Por qué los mejores candidatos se comportan como compradores B2B: investigación larga, múltiples puntos de contacto, decisión racional y emocional
- El journey del candidato pasivo: desde que no está buscando hasta que decide aplicar o unirse
- Los momentos de verdad en el proceso: cuándo el candidato decide si la empresa le interesa o no
- Qué información buscan los candidatos que las job descriptions no proporcionan

**Bloque 2: Propuesta de valor del empleador (EVP) como base del contenido**

Define los pilares de contenido de tu employer brand:
- Cómo identificar tu EVP real: qué dice el equipo actual que les hace quedarse y qué no encuentran en otros lados
- Los 4-6 pilares del EVP que se traducen en contenido: cultura, misión, crecimiento, equipo, compensación, impacto
- Cómo validar que tu EVP es creíble y diferenciador en tu sector
- La coherencia entre lo que comunicas y lo que vive el empleado: por qué la autenticidad es la estrategia más efectiva

**Bloque 3: Tipos de contenido de employer branding B2B**

Para cada formato, diseña el enfoque y la estructura:

Thought leadership de liderazgo:
- Artículos y charlas de los líderes de la empresa sobre cultura, visión y forma de trabajar
- Podcasts y entrevistas donde los candidatos escuchan cómo piensan los líderes que serían sus superiores
- Publicaciones de LinkedIn del equipo directivo que muestran la cultura real

Contenido de behind the scenes:
- Cómo es el trabajo real: un día en la vida de distintos roles de la empresa
- Cómo se toman las decisiones: transparencia sobre el proceso de trabajo
- Los proyectos en los que trabajamos: qué retos técnicos, de negocio o creativos atrae la empresa

Contenido de crecimiento y desarrollo:
- Historias de empleados que han crecido dentro de la empresa
- Cómo se aprende en la empresa: formación, mentoring, proyectos con impacto real
- Los hitos que la empresa ha alcanzado y el rol del equipo en ellos

**Bloque 4: Canales de distribución por perfil de candidato**

Adapta los canales al perfil que buscas:
- LinkedIn: cómo gestionar la página de empresa y los perfiles del equipo como canal de employer branding
- GitHub y comunidades técnicas: cómo atraer perfiles técnicos con contribuciones y contenido de ingeniería
- Twitter/X y Substack: para perfiles de marketing, producto y estrategia
- Eventos y comunidades: cómo construir presencia en los espacios donde está el talento que buscas
- Employee advocacy: cómo convertir al equipo actual en embajadores del employer brand

**Bloque 5: Contenido para cada momento del proceso de selección**

El contenido no termina cuando el candidato aplica:
- Antes de aplicar: contenido que convierte la curiosidad en interés activo
- Durante la selección: qué compartir en cada etapa del proceso para mantener el engagement
- Oferta y decisión: contenido que facilita la decisión del candidato cuando tiene múltiples opciones
- Pre-boarding: contenido que mantiene el entusiasmo y reduce el no-show antes del primer día

**Bloque 6: Métricas de employer branding como marketing B2B**

Mide el programa como si fuera marketing de demanda:
- Awareness: alcance del contenido de employer branding en los segmentos de talento objetivo
- Engagement: cómo interactúa el talento potencial con el contenido antes de aplicar
- Conversión: ratio de candidatos espontáneos vs. buscados activamente, calidad de los perfiles inbound
- Influencia en la oferta: tasa de aceptación de ofertas y tiempo de decisión del candidato
- Retención y advocacy: cómo los empleados actuales amplifican la marca empleadora

**Entregables:**
1. Definición del EVP con los 5 pilares de contenido diferenciadores para mi empresa
2. Mapa del journey del candidato con el contenido a crear en cada momento
3. Plan editorial de employer branding de 6 meses con tipos, canales y responsables
4. Guía de employee advocacy: cómo activar al equipo como embajadores de la marca empleadora
5. Dashboard de métricas de employer branding adaptado a los objetivos de captación de talento
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Atracción de talento mediante contenido',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'White papers financieros para decisores ejecutivos en ventas B2B',
                'description'      => 'Aprende a crear informes y white papers financieros que hablen directamente al CFO y a los decisores económicos en el proceso de compra B2B. Domina la construcción de análisis de ROI, comparativas de coste-beneficio y modelos de justificación financiera que aceleran la aprobación de presupuesto.',
                'prompt_content'   => <<<EOT
Actúa como un director de finanzas corporativas con experiencia en la creación de materiales financieros de alto impacto para procesos de decisión de compra B2B. Has ayudado a equipos de ventas y marketing a crear white papers, calculadoras de ROI y análisis financieros que hablan el idioma del CFO y facilitan la aprobación de presupuesto, reduciendo el tiempo de la etapa de justificación financiera del ciclo de ventas.

Necesito crear contenido financiero B2B que ayude a nuestros compradores a justificar internamente la inversión en nuestro producto o servicio ante sus CFOs y comités ejecutivos.

**Mi contexto:**
[Describe el producto o servicio, el precio típico (rango o modelo de precio), el tipo de empresa cliente, los principales beneficios económicos que aporta y los desafíos habituales en la etapa de aprobación financiera del ciclo de ventas]

**Parte 1: Cómo piensa el CFO como audiencia de contenido B2B**

Entiende al decisor financiero para crear contenido que resuene:
- Las preguntas que hace el CFO antes de aprobar cualquier inversión significativa
- La diferencia entre cómo presenta el vendedor el valor y cómo lo procesa el CFO
- Métricas financieras que importan al CFO: ROI, payback period, NPV, IRR, impacto en EBITDA
- Por qué el CFO no cree en los números del vendedor y cómo crear credibilidad financiera
- El proceso interno de aprobación de inversión: quién firma qué y en qué orden

**Parte 2: Análisis de ROI riguroso y creíble**

Construye el análisis financiero que sobrevive el escrutinio del CFO:
- Categorías de beneficio económico que tu solución puede generar (con ejemplos de tu sector):
  - Reducción de costes directos e indirectos
  - Ingresos adicionales o aceleración de ingresos
  - Reducción de riesgos con impacto financiero (operacional, regulatorio, reputacional)
  - Mejora de la productividad del equipo: cómo cuantificarla honestamente
  - Liberación de capital inmovilizado

- Cómo estructurar el análisis de ROI:
  - Investment required: coste total de propiedad (software, implementación, formación, mantenimiento)
  - Benefits: cuantificación conservadora y optimista de cada categoría de beneficio
  - Timeline: cuándo se materializan los beneficios (no todos en el año 1)
  - Sensibilidad: cómo cambia el ROI si los supuestos son más conservadores

**Parte 3: Estructura del white paper financiero B2B**

Diseña el documento que el campeón interno usará para presentar ante el CFO:

Sección 1: Executive Summary financiero (1 página)
- El argumento de inversión en 3-4 bullets: qué, cuánto cuesta, qué retorna y cuándo
- La métrica de ROI más sólida en primer plano
- El riesgo de no invertir: qué le costará a la empresa seguir como está

Sección 2: El problema y su coste actual
- Cuantificación del problema: cuánto le cuesta hoy a la empresa el problema que se resuelve
- Cómo estimar el coste del statu quo para distintos tipos de empresa
- Benchmarking del sector: qué hacen las empresas líderes y qué resultados obtienen

Sección 3: El análisis de inversión
- Estructura de costes detallada: primer año y años siguientes
- Modelo de beneficios con supuestos explícitos y transparentes
- Tabla de ROI por escenario (conservador, base, optimista)
- Comparativa con alternativas (hacer nada, solución interna, competidores)

Sección 4: Evidencia y casos de referencia
- 3-5 ejemplos de clientes comparables con resultados cuantificados
- Testimonios de CFOs o directores financieros si están disponibles
- Análisis de analistas o consultoras independientes si existen

**Parte 4: Calculadora de ROI interactiva**

Complementa el white paper con una herramienta de autodiagnóstico:
- Qué variables debe poder personalizar el prospecto para calcular su ROI específico
- Cómo diseñar la calculadora para que sea simple pero rigurosa
- Cómo usar la calculadora como herramienta de ventas: el vendedor la rellena junto al prospecto
- Cómo convertir el output de la calculadora en un informe personalizado para el CFO

**Parte 5: Distribución del contenido financiero en el ciclo de ventas**

Cuándo y cómo usar el white paper financiero:
- En qué momento del ciclo de ventas presentar el análisis financiero
- Cómo el campeón interno puede usar el white paper para vender internamente
- Cómo personalizar los números del white paper para cada prospecto
- Cómo el equipo de ventas debe facilitar la presentación al CFO sin estar presente

**Entregables:**
1. Framework de análisis de ROI adaptado a mi producto con categorías de beneficio y supuestos estándar
2. Estructura del white paper financiero con guías de contenido para cada sección
3. Plantilla de calculadora de ROI con las variables más relevantes para mi caso
4. Guía de uso del contenido financiero para el equipo de ventas: cuándo y cómo usarlo
5. Template de resumen ejecutivo financiero de 1 página para presentación al CFO
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Justificación financiera de compras B2B',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Contenido educativo legal para clientes B2B: construye autoridad y genera confianza',
                'description'      => 'Diseña una estrategia de contenido legal educativo dirigido a empresas que te permita posicionarte como referente en tu área de práctica, generar leads cualificados y acortar el proceso de decisión de contratar servicios jurídicos. Aprende a crear contenido que demuestre expertise sin dar asesoramiento gratuito.',
                'prompt_content'   => <<<EOT
Actúa como un socio de un despacho de abogados especializado con experiencia en marketing jurídico y desarrollo de negocio. Eres uno de los pocos abogados que entiende que el contenido educativo es la herramienta más efectiva para construir autoridad y generar trabajo de calidad, sin necesidad de técnicas de venta agresivas. Has construido una práctica basada en gran parte en clientes que llegan directamente después de consumir tu contenido durante meses o años.

Quiero desarrollar una estrategia de contenido legal B2B que me posicione como referente en mi área de práctica, atraiga clientes de calidad y acelere el proceso de decisión de contratar mis servicios.

**Mi contexto:**
[Describe tu especialidad jurídica (mercantil, laboral, fiscal, propiedad intelectual, regulatorio, M&A, etc.), el perfil de tus clientes ideales (tamaño de empresa, sector, rol del contacto), los principales problemas legales que resuelves y tu situación actual de marketing y desarrollo de negocio]

**Capítulo 1: El cliente de servicios jurídicos como comprador B2B**

Entiende el proceso de decisión de contratar un abogado:
- Por qué los clientes de servicios jurídicos son especialmente conservadores en su decisión de cambiar de abogado
- Los factores que influyen en la decisión de contratar: confianza, expertise percibido, referencias, precio
- Cómo el contenido educativo construye confianza antes del primer contacto
- La diferencia entre dar información (que hace el contenido) y dar consejo (que requiere una relación de cliente)
- Cuándo un prospecto está listo para contactar: señales de madurez en el proceso de decisión

**Capítulo 2: Tipos de contenido jurídico B2B y su propósito**

Para cada formato, guíame en el diseño y la ejecución:

Alertas y novedades normativas:
- Cómo convertir un cambio normativo en una oportunidad de contenido de alto valor
- Estructura de la alerta legal que combina la novedad con las implicaciones prácticas para el cliente
- Por qué ser el primero en publicar cuando hay un cambio importante es una ventaja competitiva

Guías prácticas sobre temas recurrentes:
- Identificación de los 10 temas que más preguntan tus clientes potenciales antes de contratar
- Estructura de la guía práctica: contexto del problema, marco normativo, opciones disponibles, recomendaciones prácticas y cuándo buscar asesoramiento profesional
- Cómo hacer las guías suficientemente útiles para demostrar expertise sin convertirlas en sustitutos del asesoramiento

Análisis de sentencias y casos:
- Cómo comentar una sentencia relevante para que sea accesible y relevante para un cliente no abogado
- Qué implica la sentencia para la empresa cliente: riesgos, oportunidades, cambios en los contratos
- Cómo convertir un análisis jurídico en contenido de negocio que le interese al director general

Webinars y formación para empresas:
- Diseño de webinars jurídicos que aporten valor real y posicionen tu despacho como referente
- Temas de mayor atracción de audiencia empresarial por área de práctica
- Cómo estructurar el webinar para que sea educativo pero genere interés en los servicios del despacho

**Capítulo 3: El equilibrio entre dar valor y generar negocio**

La tensión central del marketing jurídico:
- Cómo dar suficiente valor para demostrar expertise sin dar el servicio de manera gratuita
- La regla del 80/20: 80% educación, 20% referencia a tus servicios
- Frases de transición que convierten el contenido en oportunidad sin sonar comercial
- Cuándo y cómo incluir CTAs en el contenido jurídico: formatos que funcionan y formatos que espantan

**Capítulo 4: Distribución de contenido jurídico B2B**

Llega a los decisores empresariales correctos:
- LinkedIn como canal principal: estrategia de perfil personal y página de despacho
- Newsletter jurídica propia: cómo construir una lista de suscriptores de calidad y mantenerlos
- Relación con medios especializados: cómo conseguir cobertura en publicaciones del sector
- Eventos y conferencias: presencia en los foros donde se reúnen tus clientes potenciales
- Colaboraciones con asociaciones empresariales y cámaras de comercio como canal de distribución

**Capítulo 5: Plan editorial para el despacho**

Diseña un sistema de producción de contenido sostenible:
- Frecuencia de publicación realista según el tiempo disponible del equipo jurídico
- Proceso de producción: de la identificación del tema a la publicación en todos los canales
- Cómo involucrar a los socios y asociados del despacho en la creación de contenido
- Reutilización de contenido: de un análisis jurídico a un artículo, a una presentación y a posts de LinkedIn

**Capítulo 6: Medición del impacto del contenido en el desarrollo de negocio**

Cómo saber si el contenido está generando resultados:
- Métricas de audiencia: reach, engagement, suscriptores, seguidores en LinkedIn
- Métricas de negocio: consultas entrantes atribuibles al contenido, tipo de cliente y asunto
- Cómo preguntar a los nuevos clientes cómo llegaron al despacho y qué contenido consumieron
- ROI del programa de contenido: tiempo invertido vs. negocio generado

**Entregables:**
1. Definición de los 5 temas prioritarios de contenido con mayor potencial para mi área y perfil de cliente
2. Plan editorial de 6 meses con tipos de contenido, frecuencia, canales y proceso de producción
3. Estructura de guía práctica para el tema más frecuente que preguntan mis clientes potenciales
4. Guía de LinkedIn para abogados B2B: qué publicar, con qué frecuencia y cómo hacer crecer la red
5. Sistema de seguimiento de leads generados por contenido para medir el impacto en el negocio
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Marketing de contenidos para despachos de abogados',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Webinars y contenido educativo B2B para retención y expansión de clientes',
                'description'      => 'Diseña un programa de contenido educativo para clientes B2B que aumente la adopción del producto, prevenga el churn y cree oportunidades de expansión. Aprende a usar webinars, guías y contenido de éxito del cliente para maximizar el valor de la relación y demostrar ROI de manera continua.',
                'prompt_content'   => <<<EOT
Actúa como un director de Customer Education y Customer Success con experiencia en empresas SaaS B2B de alto crecimiento. Has construido programas de contenido educativo para clientes que aumentaron la tasa de adopción de funcionalidades en un 60%, redujeron el churn en un 25% y generaron oportunidades de expansión al exponer a los clientes a casos de uso que no conocían.

Quiero desarrollar un programa de contenido educativo B2B para mis clientes que aumente la adopción, reduzca el churn y genere oportunidades de expansión de manera escalable.

**Mi contexto:**
[Describe el producto o servicio, el perfil de los clientes (tamaño, sector, nivel técnico), los principales problemas de adopción que tienes (bajo uso de ciertas funcionalidades, churn por falta de valor percibido, clientes que desconocen casos de uso avanzados) y los recursos del equipo de Customer Success]

**Módulo 1: Por qué el contenido educativo es una palanca de retención**

El caso de negocio del contenido para Customer Success:
- La correlación entre adopción del producto y retención: por qué los clientes que más usan el producto casi nunca se van
- Cómo el contenido educativo escala el Customer Success sin escalar el equipo en la misma proporción
- El cliente educado vs. el cliente dependiente: por qué la educación es mejor para el negocio a largo plazo
- Cómo el contenido de éxito del cliente reduce las consultas de soporte y libera al equipo para trabajo estratégico

**Módulo 2: Programa de webinars para clientes B2B**

Diseña el programa de webinars desde cero:

Tipos de webinar para cada objetivo:
- Webinar de onboarding: para clientes nuevos, cubrir los fundamentos en las primeras semanas
- Webinar de funcionalidades avanzadas: para aumentar la adopción de capacidades infrautilizadas
- Webinar de casos de uso por industria: para mostrar cómo otros clientes del mismo sector usan el producto
- Webinar de mejores prácticas: thought leadership que posiciona al equipo como expertos
- Webinar con cliente invitado: historias de éxito en formato conversación que genera credibilidad y comunidad

Para cada tipo: estructura recomendada, duración óptima, formato (en directo vs. grabado), canal de distribución y métricas de éxito.

**Módulo 3: Contenido de éxito del cliente en múltiples formatos**

Más allá del webinar: el ecosistema de contenido educativo:

Base de conocimiento y tutoriales:
- Qué debe cubrir una base de conocimiento que los clientes realmente usen
- Cómo identificar qué tutoriales crear primero según el volumen de consultas de soporte
- Formato de tutorial en video vs. escrito: cuándo usar cada uno

Guías de mejores prácticas por caso de uso:
- Guías que muestran cómo usar el producto para resolver problemas específicos del cliente
- Cómo co-crear guías con los clientes más avanzados para aumentar la credibilidad
- Distribución de guías: dentro del producto, por email, en la comunidad de clientes

Newsletter de Customer Success:
- Contenido que puede tener una newsletter para clientes B2B que les haga abrir el email
- Frecuencia y formato recomendados según el perfil del cliente
- Cómo usar la newsletter para comunicar novedades del producto de manera que generen adopción

**Módulo 4: Contenido para cada etapa del ciclo de vida del cliente**

Mapea el contenido al momento del cliente:
- Primeras semanas (onboarding): contenido que lleva al cliente al primer valor lo antes posible
- Primeros 90 días (activación): contenido que expande el uso más allá de los casos de uso básicos
- Cliente establecido (retención): contenido que muestra nuevas formas de obtener más valor
- Cliente en riesgo (rescate): contenido personalizado que retoma el engagement y demuestra valor
- Cliente expansivo (crecimiento): contenido que expone al cliente a capacidades o casos de uso que justifican la expansión

**Módulo 5: Comunidad de clientes como canal de contenido**

Cómo construir y usar una comunidad de clientes B2B:
- Plataformas y formatos para comunidades de clientes B2B: cuál es el más adecuado para mi contexto
- Tipos de contenido que funcionan en la comunidad: preguntas, mejores prácticas, casos de uso, novedades
- Cómo activar a los clientes más avanzados como generadores de contenido y referentes de la comunidad
- Cómo convertir la comunidad en un canal de detección temprana de churn y de oportunidades de expansión

**Módulo 6: Medición del impacto del contenido en la retención y la expansión**

Métricas del programa de Customer Education:
- Adopción de funcionalidades post-contenido: cómo medir si el contenido aumenta el uso
- Correlación entre participación en webinars y tasa de retención
- Leads de expansión generados por el programa de contenido
- NPS segmentado por nivel de engagement con el contenido educativo
- Cómo comunicar el ROI del programa de Customer Education a la dirección

**Entregables:**
1. Calendario de webinars de 6 meses con temas, tipos y objetivos de cada uno
2. Programa de contenido educativo por etapa del ciclo de vida del cliente
3. Estructura de newsletter de Customer Success con secciones tipo y frecuencia recomendada
4. Plan de lanzamiento de comunidad de clientes o de mejora de la comunidad existente
5. Dashboard de métricas del programa de Customer Education con KPIs trimestrales
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Retención y expansión de clientes mediante contenido',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Estrategia de contenido B2B para freelancers: posiciónate como experto y atrae clientes de calidad',
                'description'      => 'Diseña una estrategia de contenido B2B que posicione tu práctica freelance como referente en tu especialidad, atraiga clientes que valoran tu expertise y te permitan salir del ciclo de propuestas de precio. Crea un sistema de contenido sostenible que trabaje para ti incluso cuando estás ejecutando proyectos.',
                'prompt_content'   => <<<EOT
Actúa como un consultor de marketing y posicionamiento para profesionales independientes con experiencia ayudando a freelancers y consultores a construir negocios basados en el reconocimiento como expertos, no en la competencia por precio. Has ayudado a docenas de freelancers a multiplicar sus tarifas y a conseguir clientes de mayor calidad mediante la construcción de una presencia de contenido estratégica y coherente.

Quiero desarrollar una estrategia de contenido B2B que me posicione como referente en mi especialidad, atraiga clientes que valoran mi expertise y me permita salir de la guerra de precios típica del mercado freelance.

**Mi situación:**
[Describe tu especialidad como freelancer, el tipo de clientes a los que quieres llegar (tamaño de empresa, sector, rol del contacto), tu situación actual (cómo consigues clientes actualmente, qué contenido tienes o has intentado, los principales desafíos y los objetivos a 12 meses)]

**Parte 1: El posicionamiento de expertise como base del contenido**

Define tu posición única antes de crear contenido:
- La diferencia entre ser un proveedor de servicios y ser un experto reconocido: qué cambia en la relación con el cliente
- Cómo definir tu nicho de especialización que sea suficientemente estrecho para diferenciarte pero suficientemente amplio para sostener un negocio
- Tu punto de vista distintivo: el ángulo único desde el que deberías abordar todos tus contenidos
- Por qué el contenido genérico no posiciona: cómo encontrar los temas en los que puedes decir algo genuinamente diferente
- El riesgo de parecer demasiado generalista vs. demasiado especialista

**Parte 2: Tipos de contenido B2B para el freelancer expert**

Para cada formato, guíame en el enfoque correcto para mi posicionamiento:

Artículos y análisis de fondo:
- Cómo elegir temas que demuestren tu profundidad de expertise y sean relevantes para tus clientes ideales
- Estructura del artículo de thought leadership que funciona en LinkedIn y en tu web
- La frecuencia realista: cuánto contenido necesitas para tener impacto sin agotarte

Casos de éxito y resultados de clientes:
- Cómo documentar y publicar casos de éxito respetando la confidencialidad del cliente
- La estructura del case study de freelancer: antes, proceso, resultados, aprendizajes
- Formas de mostrar resultados cuando el cliente no quiere ser identificado

Newsletter propia:
- Por qué la newsletter es el activo de contenido más valioso para un freelancer a largo plazo
- Qué contenido puede tener tu newsletter que tus suscriptores esperen con interés
- Cómo hacer crecer la lista de suscriptores con el tipo de cliente al que quieres llegar

Presencia en LinkedIn:
- Estrategia de LinkedIn para el freelancer experto: qué publicar, con qué frecuencia y cómo hacer crecer la red correcta
- La diferencia entre publicar para likes y publicar para posicionamiento ante clientes potenciales
- Cómo usar los comentarios y la participación en conversaciones como estrategia de visibilidad

**Parte 3: El ciclo de contenido B2B de largo ciclo de decisión**

Entiende cómo el contenido funciona en el proceso de decisión de contratar un freelancer de alto nivel:
- Por qué los mejores clientes te observan durante semanas o meses antes de contactar
- Los puntos de contacto típicos: cómo un cliente pasa de desconocerte a contratarte
- Qué tipo de contenido construye confianza en cada momento de ese proceso
- Cómo el contenido reduce el proceso de venta: cuando el cliente llega ya convencido

**Parte 4: Proceso de producción de contenido sostenible**

Cómo crear contenido de calidad sin que interfiera con el trabajo facturable:
- Cuánto tiempo deberías dedicar al contenido según el estado de tu negocio
- Sistema de batching de contenido: cómo crear un mes de contenido en 2-3 sesiones
- Cómo aprovechar el trabajo del cliente para generar ideas de contenido de manera sistemática
- Reutilización: de un artículo largo a 5 posts de LinkedIn, a un email de newsletter y a una respuesta en foros
- Cómo mantener el ritmo durante los períodos de máxima carga de proyectos

**Parte 5: Distribución y amplificación del contenido**

Llega a los clientes correctos sin depender de los algoritmos:
- La estrategia de distribución del freelancer: qué canales son prioritarios según tu especialidad y el perfil de cliente
- Cómo construir una red de amplificadores: otros profesionales que comparten tu contenido con sus audiencias
- Participación en comunidades, foros y grupos: cómo ser visible sin ser autopromocional
- SEO para el freelancer: cómo tu contenido puede generar búsquedas orgánicas de clientes potenciales

**Parte 6: De la audiencia al cliente: el proceso de conversión**

Cómo convertir el seguidor de tu contenido en cliente:
- Cómo diseñar CTAs naturales en el contenido sin sonar a vendedor
- La página de servicios que convierte: cómo posicionarla con el lenguaje del cliente, no el tuyo
- El proceso de primera consulta: cómo calificar al prospecto y hacer la propuesta cuando el cliente ya confía en ti
- Cómo medir si el contenido está generando negocio: tracking de dónde vienen tus clientes

**Entregables:**
1. Definición de posicionamiento: nicho, punto de vista distintivo y temas de contenido prioritarios
2. Plan de contenido de 6 meses con tipos, temas, canales y tiempo estimado de producción
3. Estructura de los primeros 3 artículos o posts de thought leadership con ángulo y puntos clave
4. Sistema de seguimiento de origen de clientes para medir el impacto del contenido en el negocio
5. Checklist de la semana de contenido: proceso para mantener la constancia sin agotarse
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Posicionamiento y captación de clientes para freelancers',
                'vote_score'       => 38,
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
