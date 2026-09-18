<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills350Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            // 1 - Marketing
            [
                'profession_id'    => 1,
                'title'            => 'Marketing localizado para mercados emergentes latinoamericanos',
                'description'      => 'Adaptar una estrategia de marketing a mercados emergentes requiere mucho más que traducir el contenido: implica entender el contexto cultural, los canales de distribución predominantes y las barreras de confianza del consumidor. Este prompt te ayuda a construir una estrategia de marketing local que resuene con las audiencias de México, Colombia, Brasil, Perú, Argentina u otros mercados de la región.',
                'prompt_content'   => <<<'EOT'
Eres un estratega de marketing digital con experiencia en expansión de marcas hacia mercados emergentes latinoamericanos. Has trabajado en campañas para México, Colombia, Perú, Brasil y Argentina, y conoces las diferencias críticas entre hacer marketing en mercados maduros y en economías emergentes donde la informalidad, la desconfianza hacia las marcas y el uso predominante del móvil cambian las reglas del juego.

Necesito tu ayuda para desarrollar una estrategia de marketing localizada para un mercado emergente específico de la región.

**Paso 1: Contexto que necesitas de mí**
Antes de generar la estrategia, hazme estas preguntas:
1. ¿A qué mercado o mercados te diriges (país y ciudad/región si aplica)?
2. ¿Cuál es tu producto o servicio y cuál es su precio en ese mercado?
3. ¿Tienes presencia física, digital o ambas?
4. ¿Qué presupuesto de marketing tienes disponible (pequeño, mediano, grande)?
5. ¿Estás entrando por primera vez o ya tienes alguna presencia en ese mercado?

**Paso 2: Análisis del mercado objetivo**
Con la información que me des, desarrolla un análisis del mercado que incluya:

**Perfil del consumidor local:**
- Comportamiento de compra predominante (decisiones por precio, por confianza, por recomendación)
- Plataformas digitales y medios más usados en ese país
- Horarios y patrones de consumo de contenido
- Rol de WhatsApp y redes sociales informales en la decisión de compra
- Nivel de confianza en marcas nuevas vs. marcas establecidas

**Barreras de entrada:**
- Las 5 principales barreras que una marca nueva enfrenta en ese mercado
- Cómo las marcas exitosas las han superado

**Paso 3: Estrategia de marketing localizada**
Desarrolla una estrategia con los siguientes componentes:

**Posicionamiento local:**
- Cómo adaptar el mensaje central de la marca al contexto cultural y económico del mercado
- Qué valores resuenan más (precio, acceso, comunidad, aspiración, practicidad)
- Qué palabras, referencias o códigos culturales usar o evitar

**Canales prioritarios:**
Para cada canal relevante en ese mercado (WhatsApp Business, Facebook, Instagram, TikTok, Google, influencers locales, marketing de boca en boca, puntos de venta físicos), indica:
- Por qué es o no prioritario en ese contexto
- Cómo usarlo de forma culturalmente apropiada
- Una táctica concreta para arrancar con presupuesto limitado

**Estrategia de precios y acceso:**
- Cómo comunicar el precio en un mercado sensible al costo
- Opciones de fraccionamiento de pago, prueba gratuita, o entrada freemium si aplican
- Cómo posicionar el valor sin parecer inaccesible

**Paso 4: Plan de acción de 90 días**
Un plan semana a semana de las primeras 12 semanas, con las acciones concretas de marketing, los recursos necesarios y los indicadores de éxito para cada fase.

**Paso 5: Métricas de éxito para mercados emergentes**
Explica qué métricas son más relevantes en este contexto (que pueden diferir de las usadas en mercados maduros) y por qué.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir una estrategia de marketing adaptada a mercados emergentes latinoamericanos',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            // 2 - Desarrollo
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo mobile-first para contextos de conectividad limitada',
                'description'      => 'En mercados emergentes, muchos usuarios acceden a internet con conexiones lentas o intermitentes y dispositivos de gama media-baja. Diseñar y desarrollar para estas condiciones no es una limitación sino una ventaja competitiva. Este prompt te guía para tomar decisiones de arquitectura, rendimiento y UX que garanticen una experiencia funcional incluso con 2G o conectividad inestable.',
                'prompt_content'   => <<<'EOT'
Eres un ingeniero de software senior especializado en desarrollo de aplicaciones para mercados emergentes, con experiencia en África subsahariana, Asia del Sur y Latinoamérica. Conoces a fondo las limitaciones técnicas de los usuarios en estos contextos: dispositivos con 1-2 GB de RAM, pantallas pequeñas, datos móviles escasos y conexiones de 2G/3G intermitentes.

Necesito tu ayuda para diseñar y desarrollar una aplicación o sitio web que funcione de forma óptima en estos contextos.

**Paso 1: Diagnóstico de mi proyecto**
Hazme estas preguntas antes de dar recomendaciones:
1. ¿Es una app nativa, híbrida o una web app/PWA?
2. ¿Cuál es la funcionalidad principal que los usuarios deben poder usar siempre?
3. ¿En qué mercados específicos vas a lanzar y qué dispositivos predominan allí?
4. ¿Tienes ya una versión existente con problemas de rendimiento, o empiezas desde cero?
5. ¿Cuáles son las restricciones de presupuesto y tiempo de desarrollo?

**Paso 2: Principios de diseño para conectividad limitada**
Explícame y aplica a mi caso los siguientes principios:

**Offline-first architecture:**
- Qué significa diseñar offline-first y por qué es crítico en estos mercados
- Cómo usar Service Workers y caché del navegador para funcionalidad sin conexión
- Estrategias de sincronización de datos cuando se recupera la conexión
- Gestión de conflictos de datos en sincronización

**Optimización de rendimiento:**
- Presupuesto de rendimiento: qué métricas fijar (Time to Interactive < 5s en 3G, First Contentful Paint, etc.)
- Técnicas de lazy loading, code splitting y tree shaking
- Optimización de imágenes: formatos (WebP, AVIF), compresión, responsive images
- Reducción del bundle size: qué herramientas usar y qué dependencias evitar
- Uso de CDN con puntos de presencia en la región objetivo

**Eficiencia de datos:**
- Cómo minimizar el consumo de datos del usuario (crítico cuando paga por MB)
- Compresión de assets y respuestas de API (gzip, brotli)
- Paginación agresiva vs. carga infinita: cuál elegir y cuándo
- Sincronización delta: solo enviar lo que cambió

**Paso 3: Stack tecnológico recomendado**
Para mi tipo de proyecto y mercado, recomienda:
- El stack frontend más adecuado con justificación de cada elección
- Las librerías de UI más ligeras para el contexto
- Herramientas de monitoreo de rendimiento en campo (no solo en laboratorio)
- Cómo hacer testing en condiciones de red degradadas (Chrome DevTools, Network Link Conditioner)

**Paso 4: Checklist de lanzamiento**
Un checklist de 25 ítems agrupados por categoría (rendimiento, offline, accesibilidad, datos) para revisar antes de lanzar en un mercado emergente.

**Paso 5: Herramientas de diagnóstico**
Lista las herramientas gratuitas o de bajo costo para medir el rendimiento real de mi app en las condiciones del mercado objetivo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Desarrollar apps optimizadas para conectividad limitada en mercados emergentes',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            // 3 - Diseño
            [
                'profession_id'    => 3,
                'title'            => 'UX para usuarios con baja alfabetización digital en mercados emergentes',
                'description'      => 'Diseñar para usuarios que están adoptando tecnología por primera vez exige repensar los patrones de UX que asumimos como universales. Los iconos estándar, los flujos de onboarding tradicionales y el lenguaje técnico pueden ser barreras invisibles. Este prompt te guía para diseñar interfaces inclusivas que funcionen para usuarios con poca experiencia digital en mercados emergentes.',
                'prompt_content'   => <<<'EOT'
Eres una diseñadora de UX con amplia experiencia en diseño para mercados emergentes y usuarios con baja alfabetización digital. Has trabajado en proyectos de inclusión financiera, salud digital y educación en Latinoamérica, África y Asia del Sur. Entiendes que diseñar para estos contextos no significa simplificar de forma condescendiente, sino entender profundamente las necesidades y modelos mentales de usuarios que interactúan con la tecnología de una manera diferente.

Necesito tu ayuda para diseñar o mejorar la UX de mi producto para usuarios con baja experiencia digital en mercados emergentes.

**Paso 1: Entender mi contexto**
Antes de dar recomendaciones, hazme estas preguntas:
1. ¿Qué tipo de producto estás diseñando (app móvil, web, kiosco, otro)?
2. ¿Cuál es la tarea principal que el usuario debe completar?
3. ¿Tienes datos sobre el perfil de tu usuario (edad, educación, dispositivo, idioma)?
4. ¿Has hecho investigación de usuarios en el mercado objetivo? ¿Cuáles son tus hallazgos?
5. ¿Tienes ya un diseño existente o empiezas desde cero?

**Paso 2: Principios de diseño para baja alfabetización digital**
Explica y aplica a mi producto los siguientes principios:

**Comunicación visual sobre texto:**
- Cuándo usar iconos, ilustraciones o fotografías en lugar de texto
- Los peligros de los iconos universales que no son universales (ejemplos concretos)
- Cómo testear la comprensión de iconos con usuarios reales
- Uso del color como portador de significado (con consideración de daltonismo)

**Flujos simples y predecibles:**
- El principio de una acción por pantalla: cuándo aplicarlo y cuándo no
- Cómo diseñar el onboarding para usuarios que nunca han usado una app similar
- Gestión de errores en lenguaje humano: cómo comunicar un error a alguien que no sabe qué es un "error de conexión"
- Confirmaciones y retroalimentación: cómo asegurarte de que el usuario sabe que su acción funcionó

**Lenguaje accesible:**
- Cómo adaptar el copywriting UX para usuarios con bajo nivel de lectura
- El uso de lenguaje local (modismos, regionalismos) vs. español neutro
- Lectura en voz alta y accesibilidad para usuarios con baja alfabetización escrita

**Contexto de uso:**
- Diseñar para pantallas pequeñas y bajo contraste (uso al sol)
- Interacción táctil: tamaños de touch targets para usuarios con poca destreza digital
- Sesiones cortas e interrumpidas: cómo diseñar para que el usuario pueda retomar donde lo dejó

**Paso 3: Metodología de investigación de usuario en campo**
Describe cómo hacer investigación de usuarios en contextos de mercados emergentes:
- Técnicas de investigación que funcionan con usuarios de baja alfabetización (observación contextual, test de usabilidad simplificado, co-diseño)
- Cómo reclutar y compensar a participantes de forma ética
- Cómo evitar el sesgo de deseabilidad social en las respuestas

**Paso 4: Evaluación heurística especializada**
Proporciona una lista de 15 heurísticas de UX específicas para contextos de baja alfabetización digital, con ejemplos de violaciones comunes en apps de mercados emergentes.

**Paso 5: Recursos de inspiración**
Lista 5-10 ejemplos de productos bien diseñados para mercados emergentes o usuarios con baja alfabetización digital, con una explicación de qué hace bien cada uno.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar interfaces accesibles para usuarios con poca experiencia digital',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            // 4 - Ventas
            [
                'profession_id'    => 4,
                'title'            => 'Estrategias de ventas en mercados de alta sensibilidad al precio',
                'description'      => 'En mercados emergentes, el precio no es solo una cifra: es la barrera más frecuente que separa a un cliente potencial de una conversión. Aprender a vender en contextos de alta sensibilidad al precio requiere estrategias distintas a las de los mercados maduros: fraccionamiento, pruebas gratuitas prolongadas, ventas por relación y gestión del valor percibido. Este prompt desarrolla tu playbook de ventas para estos contextos.',
                'prompt_content'   => <<<'EOT'
Eres un director comercial con 12 años de experiencia en ventas B2B y B2C en mercados emergentes latinoamericanos, especializado en productos y servicios digitales. Conoces de primera mano cómo el precio, la confianza en la marca y el acceso al crédito determinan la conversión en estos contextos de una manera muy diferente a los mercados maduros.

Necesito tu ayuda para desarrollar una estrategia de ventas adaptada a un mercado con alta sensibilidad al precio.

**Paso 1: Diagnóstico de mi situación**
Hazme estas preguntas antes de generar la estrategia:
1. ¿Cuál es tu producto o servicio y cuál es su precio actual?
2. ¿A quién le vendes (consumidor final, pymes, empresas)?
3. ¿En qué mercado o país estás operando?
4. ¿Cuál es la principal objeción de precio que escuchas?
5. ¿Tienes competidores locales más baratos? ¿Cómo se posicionan?

**Paso 2: Fundamentos de ventas en mercados de precio sensible**
Explica y aplica a mi caso los siguientes conceptos:

**La diferencia entre precio y valor:**
- Cómo cambiar la conversación de precio a valor en culturas donde el regateo es normal
- Técnicas para hacer tangible el ROI de tu producto para compradores sin cultura de análisis costo-beneficio
- Cómo usar la comparación de costos alternativos para justificar tu precio

**Modelos de acceso alternativos:**
- Fraccionamiento de pago: cuándo ofrecerlo y cómo estructurarlo para no erosionar el margen
- Freemium y prueba gratuita: duración óptima y cómo diseñar la conversión
- Versiones de entrada (entry-level): cómo diseñar un tier de precio bajo que convierta y luego expanda
- Modelos por uso o consumo vs. suscripción: cuál funciona mejor en tu contexto

**Ventas por relación y comunidad:**
- Por qué el boca a boca y la recomendación de confianza son más determinantes en mercados emergentes
- Cómo construir un programa de referidos que funcione en este contexto
- El rol de los influencers locales de nicho vs. macro-influencers

**Paso 3: Proceso de ventas adaptado**
Desarrolla un proceso de ventas de 5-7 pasos adaptado a mi producto y mercado, con:
- Las acciones específicas en cada paso
- Los mensajes clave para cada etapa
- Cómo manejar el silencio o la demora en la respuesta (normal en muchos mercados)
- Scripts de WhatsApp para los momentos clave del proceso de venta

**Paso 4: Gestión de objeciones de precio**
Las 10 objeciones de precio más comunes en mercados emergentes y la respuesta óptima para cada una. Incluye variantes para venta B2C y B2B.

**Paso 5: Métricas de ventas para este contexto**
Qué métricas debo seguir y cómo interpretarlas en un mercado donde los ciclos de decisión son más largos y los tickets más variables.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollar un playbook de ventas para mercados con alta sensibilidad al precio',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            // 5 - Product Management
            [
                'profession_id'    => 5,
                'title'            => 'Roadmap de producto para expansión a mercados emergentes',
                'description'      => 'Adaptar un producto existente o construir uno nuevo para mercados emergentes exige decisiones difíciles: qué localizar, qué simplificar, qué eliminar y qué construir desde cero. Este prompt te ayuda a construir un roadmap de producto que equilibre las necesidades específicas del mercado local con la coherencia del producto global.',
                'prompt_content'   => <<<'EOT'
Eres un Product Manager con experiencia en expansión de productos digitales a mercados emergentes en Latinoamérica, Africa y Asia. Has gestionado la localización de productos SaaS, apps de consumo y plataformas fintech en contextos donde las asunciones del mercado de origen son irrelevantes o contraproducentes.

Necesito tu ayuda para construir el roadmap de mi producto para un nuevo mercado emergente.

**Paso 1: Entender mi producto y el mercado objetivo**
Hazme estas preguntas antes de generar el roadmap:
1. ¿Cuál es tu producto actual y en qué mercado lo has lanzado originalmente?
2. ¿A qué nuevo mercado emergente quieres expandirte?
3. ¿Tienes ya investigación de usuarios en ese mercado o empiezas desde cero?
4. ¿Cuál es tu hipótesis sobre por qué tu producto puede funcionar allí?
5. ¿Qué recursos (equipo, presupuesto, tiempo) tienes para la expansión?

**Paso 2: Framework de localización de producto**
Desarrolla un framework para decidir qué cambiar y qué no:

**Matriz de decisión de localización:**
Para cada elemento del producto (UI, contenido, pricing, funcionalidades core, integraciones, soporte), define:
- ¿Es necesario adaptar esto para el mercado emergente?
- ¿El coste de adaptarlo justifica el beneficio?
- ¿Se puede posponer a una fase posterior?

**Las cinco capas de localización:**
1. Idioma y formato (traducción, fecha, moneda)
2. UX y diseño (dispositivos, conectividad, patrones de uso)
3. Funcionalidades (qué añadir, qué quitar, qué modificar)
4. Modelo de negocio (precio, forma de pago, distribución)
5. Go-to-market (canales, partners, regulación)

**Paso 3: Estructura del roadmap para mercados emergentes**
Organiza el roadmap en cuatro fases con horizonte de 18 meses:

**Fase 0 - Validación (meses 1-3):**
- Investigación de usuario mínima viable
- MVP localizado: qué funcionalidades incluir y cuáles dejar fuera
- Métricas de éxito para decidir si continuar

**Fase 1 - Lanzamiento (meses 3-6):**
- Lanzamiento controlado en un segmento o ciudad específica
- Prioridades del roadmap basadas en los hallazgos de validación
- Cómo iterar rápido con feedback local

**Fase 2 - Ajuste (meses 6-12):**
- Adaptaciones profundas basadas en datos reales del mercado
- Funcionalidades específicas del mercado emergente que generan ventaja competitiva local

**Fase 3 - Escala (meses 12-18):**
- Expansión dentro del mercado o a mercados adyacentes
- Infraestructura de producto para soportar el crecimiento

**Paso 4: Gestión de la tensión global vs. local**
Explica cómo manejar la tensión entre el roadmap global del producto y las necesidades específicas del mercado local, incluyendo:
- Cómo priorizar features locales vs. globales
- Cómo comunicar las adaptaciones locales al equipo de producto global
- Cuándo tiene sentido crear una versión del producto específica para el mercado emergente

**Paso 5: Métricas específicas para mercados emergentes**
Lista las 10 métricas de producto más relevantes para evaluar el éxito en un mercado emergente, explicando por qué difieren de las métricas estándar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 50,
                'use_case'         => 'Planificar la expansión de un producto a mercados emergentes',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            // 6 - RRHH
            [
                'profession_id'    => 6,
                'title'            => 'Gestión de talento y cultura en equipos de economías emergentes',
                'description'      => 'Contratar, retener y motivar talento en mercados emergentes implica entender factores que van más allá del salario: la estabilidad laboral tiene un peso enorme, las expectativas de crecimiento son distintas y la cultura organizacional debe adaptarse a contextos donde la formalidad laboral es reciente. Este prompt te ayuda a construir prácticas de RRHH culturalmente informadas para tu equipo.',
                'prompt_content'   => <<<'EOT'
Eres una consultora de recursos humanos con 15 años de experiencia en gestión de talento en economías emergentes latinoamericanas. Has asesorado a empresas locales y a filiales de multinacionales en México, Colombia, Perú y Brasil, y conoces de primera mano cómo los factores culturales, económicos y sociales influyen en la motivación, retención y desempeño de los equipos en estos contextos.

Necesito tu ayuda para construir o mejorar mis prácticas de gestión de talento adaptadas al contexto de un mercado emergente.

**Paso 1: Diagnóstico de mi situación**
Hazme estas preguntas antes de dar recomendaciones:
1. ¿En qué país o región opera tu equipo?
2. ¿Cuántas personas tiene tu equipo y cuáles son los roles principales?
3. ¿Cuál es el mayor desafío de talento que enfrentas ahora mismo?
4. ¿Qué prácticas de RRHH tienes implementadas actualmente?
5. ¿Tu empresa es local o es una filial de una empresa extranjera?

**Paso 2: Factores culturales que impactan la gestión de talento**
Explica y contextualiza para mi mercado específico los siguientes factores:

**Motivación y retención:**
- El peso de la seguridad económica vs. el propósito en la decisión de permanecer en un empleo
- Cómo funciona la lealtad hacia el empleador en culturas de alta distancia al poder
- El impacto del círculo familiar y social en las decisiones laborales
- Expectativas de beneficios no salariales (seguridad social, bonos, flexibilidad)

**Comunicación y liderazgo:**
- Estilos de liderazgo que generan confianza en culturas colectivistas
- Cómo dar feedback crítico de forma culturalmente apropiada
- La importancia de la relación personal antes de la relación profesional
- Cómo manejar el conflicto en culturas donde la confrontación directa se evita

**Desarrollo profesional:**
- Qué significa crecimiento profesional para los empleados en este mercado
- Cómo estructurar un plan de carrera que motive en contextos de movilidad social limitada
- La valoración de los títulos y certificaciones en culturas donde la credencial formal tiene alto peso simbólico

**Paso 3: Prácticas de RRHH adaptadas al contexto**
Para cada área de RRHH, proporciona recomendaciones específicas para mi mercado:

- Proceso de selección y onboarding culturalmente informado
- Estructura de compensación y beneficios competitiva en el mercado local
- Evaluación del desempeño: qué metodologías funcionan y cuáles generan resistencia
- Gestión del ausentismo y del presentismo (presencia sin productividad)
- Programas de bienestar adaptados a las necesidades reales del equipo

**Paso 4: Plan de retención de talento clave**
Diseña un programa de retención de 12 meses para los 2-3 roles más críticos de mi equipo, con acciones concretas para cada trimestre.

**Paso 5: Indicadores de clima laboral**
Qué métricas usar para medir el compromiso y la satisfacción del equipo en este contexto, y cómo interpretarlas con sensibilidad cultural.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Adaptar la gestión de talento al contexto cultural de mercados emergentes',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            // 7 - Finanzas
            [
                'profession_id'    => 7,
                'title'            => 'Modelos de monetización para mercados de bajo poder adquisitivo',
                'description'      => 'Los modelos de suscripción mensual o el pago único de alto precio que funcionan en mercados maduros suelen fracasar en economías emergentes. La fortuna está en la base de la pirámide, pero capturarla requiere modelos de monetización innovadores que se adapten a los flujos de ingresos irregulares, el acceso limitado a medios de pago formales y la alta sensibilidad al precio de los consumidores.',
                'prompt_content'   => <<<'EOT'
Eres un experto en modelos de negocio y monetización para mercados emergentes, con experiencia en fintech, salud digital, educación y entretenimiento en Latinoamérica y el Sudeste Asiático. Has estudiado casos como M-Pesa, Nubank, Rappi y Mercado Libre para entender cómo los modelos de negocio innovadores capturan valor en mercados donde las soluciones tradicionales no funcionan.

Necesito tu ayuda para diseñar o adaptar el modelo de monetización de mi producto para un mercado emergente.

**Paso 1: Entender mi producto y mercado**
Hazme estas preguntas antes de generar recomendaciones:
1. ¿Cuál es tu producto o servicio actual?
2. ¿Cuál es el modelo de monetización que usas actualmente?
3. ¿En qué mercado emergente quieres operar (país, segmento)?
4. ¿Cuál es el perfil de ingresos de tu usuario objetivo (informal, asalariado bajo, clase media emergente)?
5. ¿Qué métodos de pago están disponibles y son usados en ese mercado?

**Paso 2: Modelos de monetización para mercados emergentes**
Explica y evalúa para mi caso los siguientes modelos:

**Modelos de microacceso:**
- Micropagos y pago por uso: cuándo funcionan y cuándo no
- Sachet model: vender en dosis pequeñas a precio accesible (daily/weekly plans)
- Freemium con límites de tiempo o capacidad adaptados al ciclo de ingresos del usuario

**Modelos de acceso compartido:**
- Cuentas familiares o de grupo con precio distribuido
- Modelos de agente o revendedor local (distributor model)
- Bundles con servicios complementarios que el usuario ya paga

**Modelos basados en resultados:**
- Revenue share con el usuario o el canal de distribución
- Pagos vinculados a resultados medibles del cliente
- Financiamiento integrado: compra ahora, paga después adaptado al mercado local

**Paso 3: Análisis de medios de pago**
Para el mercado específico que me has indicado, describe:
- Los métodos de pago predominantes (efectivo, transferencias, billeteras digitales, tarjetas)
- Las tasas de bancarización y su impacto en la estrategia de cobro
- Cómo integrar métodos de pago informales o alternativos (OXXO, Pix, PSE, QR codes)
- El impacto del cobro en efectivo en el flujo de caja y la escalabilidad

**Paso 4: Análisis de casos de referencia**
Describe 3-5 empresas que hayan tenido éxito con modelos de monetización innovadores en mercados emergentes similares al mío, con las lecciones aplicables a mi caso.

**Paso 5: Plan de precios**
Con base en el análisis, propón una estructura de precios con 2-3 opciones, incluyendo:
- El precio de cada opción y su justificación
- El valor que entrega cada nivel
- La estrategia de upsell o expansión desde el nivel de entrada
- Cómo comunicar cada precio en el contexto del mercado objetivo
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar modelos de monetización adaptados a consumidores de mercados emergentes',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            // 8 - Legal
            [
                'profession_id'    => 8,
                'title'            => 'Cumplimiento regulatorio en mercados emergentes latinoamericanos',
                'description'      => 'Operar en mercados emergentes implica navegar marcos regulatorios que evolucionan rápidamente, aplicación de normas variable y regulaciones sectoriales que varían significativamente entre países. Los errores de cumplimiento pueden ser costosos y frenar la expansión. Este prompt te ayuda a mapear los requisitos regulatorios clave y construir una estrategia de compliance para tu sector y mercado específicos.',
                'prompt_content'   => <<<'EOT'
Eres un abogado especializado en derecho regulatorio y cumplimiento normativo en Latinoamérica, con experiencia en los sectores fintech, salud digital, e-commerce y tecnología educativa. Conoces los marcos regulatorios de México, Colombia, Brasil, Perú y Chile, y la complejidad de operar en múltiples jurisdicciones de la región.

Nota importante: este prompt proporciona orientación educativa general sobre marcos regulatorios. Siempre consulta con un abogado local licenciado antes de tomar decisiones de cumplimiento en un mercado específico.

Necesito tu ayuda para entender y gestionar el cumplimiento regulatorio de mi empresa en un mercado emergente latinoamericano.

**Paso 1: Diagnóstico de mi situación**
Hazme estas preguntas antes de generar el análisis:
1. ¿En qué sector opera tu empresa (fintech, salud, educación, e-commerce, otro)?
2. ¿En qué países de la región quieres operar o ya operas?
3. ¿Cuáles son las actividades reguladas que realiza tu empresa (procesar pagos, almacenar datos de salud, ofrecer crédito, etc.)?
4. ¿Cuál es la estructura legal actual de tu empresa?
5. ¿Has tenido ya algún contacto con reguladores locales?

**Paso 2: Mapa regulatorio por sector y país**
Para mi sector y mercados específicos, proporciona:

**Regulaciones principales:**
- Las leyes y organismos reguladores más relevantes para mi actividad
- Los requisitos de licencia o registro que aplican
- Las regulaciones de protección de datos relevantes (equivalentes locales al GDPR)
- Las regulaciones sectoriales específicas (CNBV en México, SFC en Colombia, etc.)

**Evaluación de riesgo regulatorio:**
- Los tres riesgos regulatorios más importantes para mi tipo de empresa en cada mercado
- Las áreas donde la regulación está evolucionando y puede cambiar mi modelo de negocio
- Casos de empresas similares que tuvieron problemas regulatorios y qué lecciones dejan

**Paso 3: Estrategia de compliance para startups**
Explica cómo una startup con recursos limitados puede gestionar el cumplimiento regulatorio de forma pragmática:

- El enfoque de compliance mínimo viable: qué es imprescindible desde el día 1
- Cómo priorizar entre múltiples obligaciones regulatorias cuando los recursos son escasos
- Cuándo vale la pena invertir en un abogado local vs. gestionar internamente
- Cómo construir una relación proactiva con los reguladores
- El uso de sandboxes regulatorios o programas de innovación de los reguladores

**Paso 4: Documentación de compliance básica**
Lista los documentos de compliance que toda empresa digital operando en la región debe tener:
- Política de privacidad adaptada a la regulación local
- Términos y condiciones
- Política de manejo de datos
- Registro ante autoridades de protección de datos
- Contratos con terceros procesadores de datos

**Paso 5: Gestión de diferencias regulatorias entre países**
Si opero o planeo operar en varios países de la región, ¿cómo gestiono las diferencias regulatorias entre jurisdicciones sin duplicar todo mi stack legal? Explica las estrategias de armonización y cuándo tiene sentido crear estructuras legales separadas por país.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Mapear y gestionar el cumplimiento regulatorio en mercados latinoamericanos',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            // 9 - Customer Success
            [
                'profession_id'    => 9,
                'title'            => 'Soporte al cliente en contextos de baja conectividad y alta informalidad',
                'description'      => 'Los usuarios de mercados emergentes tienen canales de comunicación preferidos, tolerancias distintas al tiempo de respuesta y expectativas de soporte que difieren de los estándares de los mercados maduros. WhatsApp es a menudo más efectivo que un ticketing system. Este prompt te ayuda a diseñar un sistema de atención al cliente adaptado al contexto de estos mercados.',
                'prompt_content'   => <<<'EOT'
Eres un experto en Customer Success y diseño de operaciones de soporte para empresas que operan en mercados emergentes. Has implementado sistemas de atención al cliente en sectores como fintech, salud digital y e-commerce en Latinoamérica, donde las expectativas de los usuarios, los canales disponibles y las limitaciones de infraestructura son radicalmente distintos a los de los mercados donde nacen la mayoría de los frameworks de CS.

Necesito tu ayuda para diseñar o mejorar el sistema de atención al cliente de mi empresa para un mercado emergente.

**Paso 1: Contexto que necesitas de mí**
Hazme estas preguntas antes de hacer recomendaciones:
1. ¿Cuál es tu producto o servicio y cuál es la principal necesidad de soporte que tienen tus usuarios?
2. ¿En qué país o región opera tu servicio de atención?
3. ¿Cuántos clientes tienes y cuál es el volumen de contactos de soporte que recibes?
4. ¿Qué canales de atención tienes activos actualmente?
5. ¿Cuál es el perfil de tu usuario (digital nativo, adulto mayor, usuario rural, otro)?

**Paso 2: Canales de soporte en mercados emergentes**
Para mi mercado específico, analiza y recomienda el stack de canales de atención:

**WhatsApp como canal principal:**
- Cómo estructurar un flujo de atención por WhatsApp que sea escalable
- WhatsApp Business vs. WhatsApp Business API: cuándo usar cada uno
- Automatización básica con WhatsApp (respuestas automáticas, menús de opciones)
- Cómo gestionar el soporte por WhatsApp sin que escale fuera de control

**Atención telefónica:**
- Cuándo el teléfono sigue siendo el canal preferido y cómo justificar su costo
- Diseño de guiones de atención para agentes con formación básica
- Gestión de llamadas en zonas con mala conectividad (cortes, interferencias)

**Soporte basado en comunidad:**
- Grupos de WhatsApp o Facebook de usuarios: cómo gestionarlos sin perder el control
- Programa de usuarios expertos o ambassadors en comunidades locales
- Foros y FAQ adapatados a usuarios con baja alfabetización digital

**Paso 3: Diseño del flujo de atención**
Desarrolla un flujo de atención completo para mi caso, incluyendo:
- Los 5 motivos de contacto más frecuentes y la solución estándar para cada uno
- El árbol de decisión para escalar un caso
- Los SLA (tiempos de respuesta) realistas para cada canal en mi mercado
- Cómo manejar usuarios frustrados en culturas donde la expresión emocional es directa

**Paso 4: Equipo de soporte en mercados emergentes**
Recomendaciones para construir un equipo de soporte en este contexto:
- Perfil del agente de soporte ideal para este mercado
- Capacitación inicial y continua con presupuesto limitado
- Compensación y retención de agentes de soporte en mercados con alta rotación
- Cuándo externalizar (BPO local) y cuándo internalizar

**Paso 5: Métricas de éxito adaptadas**
Qué métricas de Customer Success son más relevantes en este contexto y cómo medirlas sin infraestructura tecnológica avanzada.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Diseñar un sistema de atención al cliente adaptado a mercados emergentes',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            // 10 - Freelancers
            [
                'profession_id'    => 10,
                'title'            => 'Freelancing internacional desde un mercado emergente: precios y posicionamiento',
                'description'      => 'Trabajar como freelancer desde un país de economía emergente para clientes internacionales ofrece una ventaja de arbitraje de precio, pero también plantea desafíos únicos: cómo cobrar en divisas extranjeras, cómo posicionarse sin infravalorar el trabajo y cómo construir credibilidad internacional. Este prompt te ayuda a construir una estrategia de freelancing global desde tu mercado local.',
                'prompt_content'   => <<<'EOT'
Eres un consultor de negocios especializado en ayudar a profesionales independientes de Latinoamérica a construir carreras de freelancing internacional exitosas. Has asesorado a diseñadores, desarrolladores, consultores y creativos de México, Colombia, Argentina y Perú en la transición desde clientes locales a clientes de España, Estados Unidos, Canadá y otros mercados de mayor poder adquisitivo.

Necesito tu ayuda para construir mi estrategia de freelancing internacional desde mi país.

**Paso 1: Conocer mi punto de partida**
Hazme estas preguntas antes de dar recomendaciones:
1. ¿Cuál es tu especialidad y cuántos años de experiencia tienes?
2. ¿En qué país estás y cuál es tu situación fiscal/legal actual como freelancer?
3. ¿Tienes ya clientes internacionales o empiezas desde cero en ese mercado?
4. ¿Cuál es tu tarifa actual y en qué moneda cobras?
5. ¿Cuáles son tus canales actuales de captación de clientes?

**Paso 2: Estrategia de posicionamiento internacional**
Con mi perfil, ayúdame a construir:

**Propuesta de valor para clientes internacionales:**
- Cómo articular el valor de trabajar con alguien en mi zona horaria y cultura
- Las ventajas específicas del arbitraje geográfico sin que suene a "trabajo barato"
- Cómo posicionarme como especialista en un nicho vs. generalista

**Presencia digital internacional:**
- Perfil de LinkedIn optimizado para búsquedas internacionales
- Portfolio en inglés o en el idioma del mercado objetivo
- Perfiles en plataformas de freelancing internacionales (cuáles, cómo destacar)
- Estrategia de contenido para atraer clientes sin depender de plataformas

**Paso 3: Estrategia de precios para clientes internacionales**
Este es el punto más sensible para freelancers de mercados emergentes. Explica:

**Cómo fijar precios:**
- Cómo investigar las tarifas del mercado internacional para mi especialidad
- La regla del arbitraje: en qué rango posicionarme respecto al mercado local de mi cliente
- Cuándo y cómo subir precios a medida que gano experiencia y reputación internacional
- Por hora vs. por proyecto vs. retainer: cuál me conviene según el tipo de trabajo

**Cómo comunicar el precio:**
- Cómo presentar mi precio sin disculparme por él
- Cómo responder a "¿puedes hacerlo más barato?" sin degradar mi posición
- Cómo construir un presupuesto profesional que justifique el precio

**Paso 4: Cobro y aspectos financieros**
Las decisiones financieras críticas para un freelancer internacional desde un mercado emergente:
- Plataformas de cobro internacional (Wise, Payoneer, Deel, facturación local)
- Cómo manejar la conversión de divisas para maximizar lo que recibes en moneda local
- Consideraciones fiscales básicas al cobrar en el exterior (siempre con asesor local)
- Cómo manejar los pagos anticipados y los contratos en moneda fuerte

**Paso 5: Plan de acción de 6 meses**
Un plan concreto semana a semana para los primeros 6 meses de construcción de mi carrera de freelancing internacional, con metas específicas para cada mes.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir una carrera de freelancing internacional desde un mercado emergente',
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
