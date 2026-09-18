<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills361Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de plataforma para marketplaces digitales en marketing',
                'description'      => 'Aprende a diseñar estrategias de marketing específicas para plataformas de dos lados, donde tanto los vendedores como los compradores deben ser atraídos y retenidos simultáneamente. Domina los mecanismos de efectos de red y cómo amplificarlos desde la perspectiva del marketing. Esta habilidad te permite crear campañas que aceleren el crecimiento orgánico de tu marketplace.',
                'prompt_content'   => <<<'EOT'
Actúa como un experto en marketing de plataformas digitales con más de 10 años de experiencia ayudando a marketplaces a crecer y consolidar su posición competitiva.

## Contexto de la tarea

Las plataformas de dos lados son ecosistemas complejos donde el valor crece exponencialmente a medida que se incorporan más participantes en ambos lados. El reto del marketing en este contexto es diferente al marketing tradicional: no puedes atraer compradores sin vendedores, ni vendedores sin compradores. Esta interdependencia requiere estrategias específicas.

## Tu misión

Ayúdame a diseñar una estrategia de marketing completa para un marketplace digital que considera los siguientes elementos:

### 1. Análisis del lado de la oferta y la demanda
- Identifica cuál de los dos lados del mercado es más difícil de atraer (el "lado difícil")
- Propón tácticas diferenciadas para cada lado
- Define métricas de éxito específicas para cada segmento

### 2. Estrategia de efectos de red
- Explica cómo los efectos de red directos e indirectos impactan tu plataforma
- Diseña iniciativas de marketing que aceleren la adopción viral
- Propón mecanismos de referidos y programas de afiliados adaptados a plataformas

### 3. Secuencia de lanzamiento o crecimiento
- Propón una estrategia de "faking it" o mercados nicho para superar el problema del huevo y la gallina
- Define la secuencia óptima de expansión geográfica o de categoría
- Establece umbrales de masa crítica para cada mercado objetivo

### 4. Posicionamiento competitivo
- Analiza cómo diferenciarte de plataformas ya establecidas
- Identifica nichos donde puedas ser dominante antes de escalar
- Propón mensajes de marketing que resuenen con cada lado del mercado

### 5. Métricas y KPIs de plataforma
- Define el Gross Merchandise Volume (GMV) target
- Establece métricas de liquidez (ratio de oferta/demanda)
- Propón dashboards de marketing específicos para plataformas

## Formato de entrega

Organiza tu respuesta en secciones claras con:
- Diagnóstico inicial de la plataforma
- Plan de acción por cuatrimestre (primeros 12 meses)
- Presupuesto orientativo por canal
- Riesgos principales y planes de contingencia
- Ejemplos de plataformas similares y qué puedo aprender de ellas

## Información adicional que necesitas de mí

Antes de responder, pregúntame por: el tipo de marketplace (B2B, B2C, P2P), la categoría del negocio, el mercado geográfico objetivo, y el presupuesto disponible para los primeros 6 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 45,
                'use_case'         => 'Diseñar estrategia de marketing para marketplaces de dos lados',
                'vote_score'       => 38,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Arquitectura técnica de plataformas digitales escalables',
                'description'      => 'Diseña la arquitectura técnica de una plataforma digital que soporte efectos de red y crecimiento exponencial de usuarios. Aprende a tomar decisiones de infraestructura que permitan escalar tanto el lado de la oferta como el de la demanda sin degradar la experiencia. Esta habilidad es esencial para cualquier desarrollador que trabaje en productos tipo marketplace o ecosistema.',
                'prompt_content'   => <<<'EOT'
Actúa como un arquitecto de software senior especializado en plataformas digitales de alto tráfico, con experiencia en empresas como Airbnb, Uber o Etsy durante sus fases de hipercrecimiento.

## Contexto técnico

Las plataformas digitales tienen requerimientos técnicos únicos: deben gestionar múltiples tipos de usuarios con roles distintos, garantizar la liquidez del mercado en tiempo real, procesar transacciones con alta fiabilidad, y escalar de forma asimétrica cuando uno de los lados del mercado crece más rápido.

## Objetivo de la sesión

Guíame en el diseño de la arquitectura técnica de una plataforma digital, cubriendo los siguientes aspectos:

### 1. Modelo de datos para plataformas
- Diseña el esquema de entidades principales: usuarios, listings, transacciones, reviews
- Explica cómo modelar las relaciones entre los dos lados del mercado
- Propón estrategias de particionamiento de datos para escalar

### 2. Sistema de matching y búsqueda
- Describe cómo implementar un motor de búsqueda y recomendación eficiente
- Propón algoritmos para aumentar la tasa de conversión entre oferta y demanda
- Explica cómo personalizar los resultados según el historial del usuario

### 3. Gestión de transacciones y pagos
- Define el flujo técnico de una transacción segura en la plataforma
- Explica cómo manejar la retención de fondos, comisiones y liquidaciones
- Propón mecanismos de resolución de disputas a nivel técnico

### 4. Escalabilidad e infraestructura
- Recomienda una arquitectura cloud (microservicios vs monolito modular)
- Define la estrategia de caché para maximizar la liquidez percibida
- Propón soluciones para picos de tráfico estacionales o virales

### 5. APIs y ecosistema de integraciones
- Diseña una API pública que permita a terceros construir sobre tu plataforma
- Define niveles de acceso y monetización de la API
- Propón webhooks y eventos para mantener sincronizados a los desarrolladores externos

## Formato de entrega

- Diagrama conceptual de la arquitectura (descrito en texto estructurado)
- Stack tecnológico recomendado con justificación
- Roadmap técnico por fases (MVP, crecimiento, escala)
- Deuda técnica a evitar desde el inicio
- Preguntas de clarificación sobre el tipo de plataforma antes de responder
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Diseñar la arquitectura técnica de un marketplace o plataforma digital',
                'vote_score'       => 42,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de experiencia de usuario para ecosistemas de plataforma',
                'description'      => 'Aprende a diseñar interfaces y flujos de usuario que sirvan simultáneamente a múltiples perfiles en una plataforma de dos lados. El diseño UX en plataformas requiere equilibrar las necesidades de compradores y vendedores sin sacrificar la coherencia visual ni la usabilidad. Esta habilidad te enseña a crear sistemas de diseño duales que escalen con el crecimiento de la plataforma.',
                'prompt_content'   => <<<'EOT'
Actúa como un diseñador de experiencia de usuario experto en plataformas digitales y ecosistemas de dos lados, con experiencia diseñando para marketplaces como Fiverr, Upwork o Booking.

## El reto del diseño en plataformas

Las plataformas de dos lados presentan desafíos únicos de diseño: los compradores y vendedores tienen objetivos opuestos pero complementarios, cada uno necesita flujos distintos pero la experiencia debe sentirse coherente. El diseño debe facilitar el matching, la confianza y la transacción de forma fluida.

## Ejercicio de diseño

Ayúdame a diseñar la experiencia de usuario de una plataforma digital, abordando:

### 1. Arquitectura de información dual
- Diseña la estructura de navegación para cada tipo de usuario (comprador/vendedor)
- Propón cómo gestionar la alternancia de roles si un usuario puede ser ambos
- Define la jerarquía de contenidos para maximizar la liquidez del mercado

### 2. Flujos críticos de la plataforma
- Diseña el flujo de onboarding diferenciado para cada lado del mercado
- Crea el flujo de búsqueda y filtrado optimizado para conversión
- Diseña el flujo de transacción con gestión de confianza y garantías

### 3. Sistema de confianza y reputación
- Propón el diseño de perfiles que generen confianza en ambas partes
- Diseña el sistema de reviews y ratings visualmente
- Incluye elementos de social proof en los puntos de decisión clave

### 4. Diseño para el crecimiento
- Identifica los momentos "aha" para cada tipo de usuario
- Propón micro-interacciones que refuercen los efectos de red
- Diseña las notificaciones y re-engagement para aumentar la retención

### 5. Sistema de diseño escalable
- Define los componentes reutilizables entre ambos lados de la plataforma
- Propón tokens de diseño que permitan personalización por segmento
- Explica cómo testear el diseño con ambos tipos de usuario simultáneamente

## Entregables esperados

- Mapa de flujos de usuario para compradores y vendedores
- Lista priorizada de pantallas críticas a diseñar primero
- Guía de patrones de diseño específicos para plataformas
- Métricas de diseño: qué medir para saber si el UX funciona
- Recomendaciones de herramientas de prototipado y testing

Antes de empezar, pregúntame por el tipo de plataforma, el sector, y los dispositivos objetivo (mobile-first, desktop, ambos).
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar UX para plataformas de dos lados y marketplaces',
                'vote_score'       => 35,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia de ventas en ecosistemas de plataforma digital',
                'description'      => 'Domina las técnicas de venta específicas para incorporar nuevos proveedores o vendedores a una plataforma digital. Aprende a superar las objeciones típicas del efecto huevo-gallina y a comunicar el valor de unirse a un ecosistema en crecimiento. Esta habilidad transforma a cualquier vendedor en un experto en el ciclo de ventas B2B de plataformas.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de ventas con amplia experiencia en el lado de la oferta de plataformas digitales: has incorporado miles de proveedores, restaurantes, profesionales o vendedores a marketplaces en fases tempranas de crecimiento.

## El contexto de ventas en plataformas

Vender a proveedores para que se unan a tu plataforma es diferente a la venta tradicional: el valor que ofreces es parcialmente futuro (la demanda aún se está construyendo), la competencia puede ser la plataforma donde ya están, y el proveedor necesita hacer un esfuerzo de onboarding antes de ver resultados. Esto requiere técnicas específicas.

## Ejercicio de role-play y estrategia

Guíame a través de la estrategia de ventas para incorporar proveedores a una plataforma, cubriendo:

### 1. Identificación y segmentación de proveedores
- Define el perfil del proveedor ideal para tu fase de crecimiento actual
- Propón criterios de priorización: quién incorporar primero y por qué
- Diseña el proceso de prospección y calificación de leads de oferta

### 2. Propuesta de valor diferenciada
- Construye el pitch para proveedores cuando la plataforma aún es pequeña
- Desarrolla argumentos para superar la objeción "no hay suficiente demanda aún"
- Propón incentivos iniciales para los early adopters del lado de la oferta

### 3. Gestión del ciclo de ventas
- Define las etapas del funnel de ventas para incorporación de proveedores
- Propón las preguntas de descubrimiento más efectivas
- Diseña el proceso de seguimiento y nurturing hasta el cierre

### 4. Onboarding y activación post-venta
- Diseña el proceso de onboarding para maximizar la activación rápida
- Define qué métricas indican que un proveedor está "activado" en la plataforma
- Propón el plan de acompañamiento en los primeros 30 días

### 5. Expansión y upsell en plataformas
- Identifica señales de que un proveedor está listo para planes premium
- Diseña el proceso de referidos donde proveedores traen a otros proveedores
- Propón cómo convertir a los mejores proveedores en embajadores de la plataforma

## Formato de práctica

Hazme un role-play donde tú eres el proveedor escéptico y yo practico mi pitch. Luego dame feedback detallado sobre qué mejorar. Al final, dame el script de ventas completo adaptado a mi tipo de plataforma.

Primero pregúntame: ¿Qué tipo de plataforma es? ¿Cuántos proveedores tienes actualmente? ¿Cuál es la objeción más común que recibes?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 40,
                'use_case'         => 'Desarrollar estrategia de ventas para incorporar proveedores a plataformas',
                'vote_score'       => 33,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Product management de plataformas: equilibrando dos lados del mercado',
                'description'      => 'Aprende a tomar decisiones de producto cuando cada cambio afecta simultáneamente a múltiples tipos de usuarios con intereses distintos. El product management en plataformas requiere un framework específico para priorizar features, gestionar trade-offs y medir el impacto en la liquidez del mercado. Desarrolla la mentalidad de ecosistema que diferencia a los mejores PMs de plataforma.',
                'prompt_content'   => <<<'EOT'
Actúa como un product manager senior con experiencia en plataformas de dos lados, habiendo trabajado en productos tipo marketplace donde cada decisión de producto impacta simultáneamente a compradores y vendedores.

## El reto único del PM de plataforma

En una plataforma, cada feature puede beneficiar a un lado del mercado y perjudicar al otro. Una mejora en la búsqueda para compradores puede generar más competencia entre vendedores. Una comisión más baja para vendedores puede reducir la inversión en calidad del marketplace. El PM de plataforma debe pensar siempre en el ecosistema completo.

## Sesión de trabajo en profundidad

Ayúdame a desarrollar mis capacidades como PM de plataforma abordando:

### 1. Framework de priorización para plataformas
- Explica cómo adaptar frameworks como RICE o ICE al contexto de dos lados
- Propón cómo evaluar el impacto de una feature en la liquidez del mercado
- Define criterios para decidir cuándo beneficiar a un lado a costa del otro

### 2. Métricas de éxito de plataforma
- Define la jerarquía de métricas: North Star, métricas de input y output
- Explica cómo medir la salud de cada lado del mercado
- Propón dashboards de producto para plataformas: qué ver cada día, semana, mes

### 3. Gestión de stakeholders en ecosistemas
- Cómo comunicar decisiones de producto que afectan negativamente a un lado
- Diseña un proceso de feedback que incorpore a ambos lados del mercado
- Propón cómo gestionar las quejas de vendedores sin comprometer la experiencia del comprador

### 4. Decisiones sobre take rate y monetización
- Explica los modelos de monetización más comunes en plataformas
- Ayúdame a analizar el impacto de cambiar la comisión en la elasticidad de la oferta
- Propón una estrategia para introducir nuevos modelos de ingresos sin dañar la liquidez

### 5. Roadmap de plataforma a 12 meses
- Estructura un roadmap que balancee mejoras para ambos lados del mercado
- Define los OKRs de producto para una plataforma en fase de crecimiento
- Propón cómo gestionar la deuda de producto específica de plataformas

## Entregables de la sesión

- Template de documento de especificación de feature para plataformas
- Checklist de preguntas a hacerse antes de lanzar cualquier cambio
- Ejemplos de decisiones de producto famosas en plataformas y qué podemos aprender
- Plan de desarrollo profesional para convertirte en PM experto en plataformas

Empieza preguntándome sobre la plataforma en la que trabajo actualmente o quiero trabajar.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Tomar decisiones de producto en plataformas digitales de dos lados',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Gestión del talento en empresas de plataforma digital',
                'description'      => 'Descubre cómo gestionar los recursos humanos en organizaciones que operan plataformas digitales, donde conviven empleados tradicionales, trabajadores de la economía gig y comunidades de desarrolladores externos. Aprende a diseñar estructuras organizativas y políticas de RRHH que apoyen el crecimiento del ecosistema sin perder cohesión cultural.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de RRHH con experiencia en empresas de plataforma digital, habiendo gestionado equipos en organizaciones como Glovo, Wallapop o empresas similares donde la frontera entre empleados y participantes de la plataforma es compleja.

## El contexto de RRHH en empresas de plataforma

Las empresas de plataforma tienen una estructura de talento única: un núcleo de empleados que construyen y gestionan la plataforma, y una comunidad externa de participantes (vendedores, freelancers, conductores) que son clave para el negocio pero no son empleados. Gestionar esta dualidad requiere políticas específicas.

## Áreas de trabajo para esta sesión

### 1. Estructura organizativa para plataformas
- Diseña el organigrama de un equipo de plataforma en fase de crecimiento (50-200 personas)
- Explica cómo organizar los equipos en torno a los dos lados del mercado
- Propón modelos de squads o tribus adaptados a empresas de plataforma

### 2. Perfiles y competencias clave
- Define los perfiles más críticos para una empresa de plataforma (PM de marketplace, community manager de oferta, trust & safety, etc.)
- Diseña las job descriptions para estos roles específicos
- Propón rutas de carrera para cada perfil dentro de la organización

### 3. Cultura organizativa en plataformas
- Define los valores culturales que mejor soportan una empresa de plataforma en crecimiento
- Propón rituales de equipo que refuercen la mentalidad de ecosistema
- Explica cómo gestionar la tensión entre velocidad de iteración y calidad del marketplace

### 4. Gestión de la comunidad de proveedores como "talento externo"
- Diseña programas de desarrollo para los mejores proveedores de la plataforma
- Propón mecanismos de reconocimiento y fidelización de la comunidad
- Explica las implicaciones legales de la relación con trabajadores de la economía gig

### 5. Contratación y onboarding en empresas de plataforma
- Diseña el proceso de selección para roles de plataforma
- Propón un onboarding que transmita la mentalidad de dos lados desde el día uno
- Define las métricas de éxito del onboarding para roles de plataforma

## Entregables esperados

- Plantilla de organigrama para empresa de plataforma en fase de crecimiento
- Guía de competencias por área funcional
- Plan de formación interna sobre economía de plataformas para todo el equipo
- Checklist de compliance para gestión de trabajadores independientes en la plataforma
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Gestionar talento y estructuras organizativas en empresas de plataforma',
                'vote_score'       => 30,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelización financiera de plataformas y marketplaces digitales',
                'description'      => 'Aprende a construir modelos financieros específicos para plataformas digitales, donde el take rate, la liquidez y los efectos de red son las variables clave. Los modelos tradicionales no capturan la dinámica de dos lados: esta habilidad te enseña a proyectar el crecimiento de una plataforma de forma realista y a valorarla correctamente.',
                'prompt_content'   => <<<'EOT'
Actúa como un analista financiero especializado en plataformas digitales y marketplaces, con experiencia en modelos de valoración para startups de economía de plataforma en fases de Series A a Series C.

## Por qué los modelos financieros de plataformas son diferentes

Una plataforma digital tiene dinámicas financieras únicas: el GMV (Gross Merchandise Volume) es la métrica de escala, el take rate determina los ingresos reales, y el crecimiento no es lineal sino exponencial cuando los efectos de red se activan. Los modelos tradicionales subestiman sistemáticamente el potencial de crecimiento y el valor de las plataformas consolidadas.

## Sesión de modelización financiera

Guíame en la construcción de un modelo financiero robusto para una plataforma digital:

### 1. Estructura del modelo de ingresos
- Explica cómo modelar el GMV separando oferta activa, demanda activa y tasa de conversión
- Define las palancas del take rate: comisión base, servicios premium, publicidad interna
- Propón cómo modelar ingresos recurrentes vs. transaccionales en la plataforma

### 2. Proyecciones de crecimiento con efectos de red
- Diseña las curvas de crecimiento para cada lado del mercado
- Explica cómo modelar el punto de inflexión donde los efectos de red se vuelven autosustentables
- Propón supuestos de churn diferenciados para compradores y vendedores

### 3. Estructura de costes de una plataforma
- Desglosa los costes fijos (tecnología, equipo) vs. variables (comisiones de pago, soporte)
- Explica cómo modelar el unit economics de una transacción en la plataforma
- Propón el análisis de contribución marginal por categoría o segmento geográfico

### 4. Análisis de valoración de plataformas
- Explica los múltiplos más utilizados para valorar marketplaces (EV/GMV, EV/Revenue)
- Construye un DCF adaptado a la dinámica de crecimiento de plataformas
- Propón el análisis de sensibilidad sobre las variables más críticas (take rate, crecimiento GMV)

### 5. KPIs financieros de plataforma
- Define el dashboard financiero mensual de un CFO de marketplace
- Propón alertas tempranas de deterioro de la liquidez del mercado
- Explica cómo comunicar la salud financiera de la plataforma a inversores

## Entregables de la sesión

- Estructura de Excel/Google Sheets para el modelo financiero de plataforma
- Glosario de métricas financieras específicas de plataformas
- Benchmark de take rates por sector (e-commerce, servicios, transporte, etc.)
- Plantilla de investor update para plataformas en fase de crecimiento

Antes de empezar, cuéntame: ¿qué tipo de plataforma es? ¿Cuál es el GMV actual o proyectado? ¿Estás en fase de construcción del modelo o de optimización?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir modelos financieros para marketplaces y plataformas digitales',
                'vote_score'       => 41,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Marco legal para plataformas digitales y economía gig',
                'description'      => 'Navega los complejos marcos regulatorios que afectan a las plataformas digitales: desde la clasificación de trabajadores hasta la responsabilidad por contenido de terceros, pasando por la normativa de competencia específica para ecosistemas digitales. Esta habilidad es esencial para cualquier abogado o jurista que asesore a empresas de plataforma.',
                'prompt_content'   => <<<'EOT'
Actúa como un abogado especializado en derecho digital y economía de plataformas, con experiencia asesorando a marketplaces y empresas de la economía gig en Europa, especialmente en el marco regulatorio español y de la Unión Europea.

## El panorama legal de las plataformas digitales

Las plataformas digitales operan en una zona gris regulatoria: no son empleadores tradicionales, pero sí determinan las condiciones de trabajo de miles de personas. No producen el contenido que alojan, pero sí se benefician de él. Esta ambigüedad ha generado regulación específica que evoluciona rápidamente.

## Análisis jurídico para plataformas

Ayúdame a entender y navegar el marco legal de las plataformas digitales:

### 1. Clasificación laboral en la economía gig
- Explica el estado actual de la "Ley Rider" en España y su impacto en plataformas
- Analiza los criterios para distinguir entre empleado y trabajador independiente en el contexto digital
- Propón cómo estructurar los contratos de proveedores para minimizar riesgos de reclasificación

### 2. Responsabilidad por contenido de terceros
- Explica el régimen de responsabilidad de plataformas bajo la Directiva de Servicios Digitales (DSA)
- Analiza qué obligaciones tienen las plataformas según su tamaño (VLOP, plataformas medianas, pequeñas)
- Propón los procedimientos de moderación de contenido que cumplen con el DSA

### 3. Derecho de competencia en ecosistemas digitales
- Explica el Digital Markets Act (DMA) y qué empresas son "gatekeepers"
- Analiza las prácticas prohibidas para plataformas dominantes (auto-preferencia, paridad de precios)
- Propón cómo estructurar las condiciones de la plataforma para evitar problemas de competencia

### 4. Protección de datos en plataformas de dos lados
- Explica las obligaciones RGPD específicas cuando procesas datos de múltiples tipos de usuarios
- Analiza el uso de datos de los vendedores para mejorar la plataforma: ¿qué está permitido?
- Propón la política de privacidad y los consentimientos necesarios para una plataforma

### 5. Fiscalidad de plataformas digitales
- Explica las obligaciones de información fiscal de las plataformas respecto a sus vendedores
- Analiza la Directiva DAC7 y qué información debe reportarse a Hacienda
- Propón cómo estructurar los flujos de pago para cumplir con las obligaciones fiscales

## Formato de entrega

- Mapa de riesgos legales prioritarios por fase de crecimiento de la plataforma
- Checklist de compliance para el lanzamiento de una nueva plataforma en España
- Plantillas de cláusulas contractuales para acuerdos con proveedores de plataforma
- Recomendaciones para due diligence legal antes de levantar una ronda de inversión

Nota: Este análisis es orientativo y no reemplaza el asesoramiento legal específico.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 55,
                'use_case'         => 'Navegar el marco regulatorio de plataformas digitales y economía gig',
                'vote_score'       => 36,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Customer success para plataformas: retención de ambos lados del mercado',
                'description'      => 'Aprende a diseñar estrategias de customer success que retengan simultáneamente a compradores y vendedores de una plataforma digital. El éxito en plataformas depende de mantener la liquidez del mercado, lo que requiere un enfoque de CS diferente al de productos SaaS tradicionales. Esta habilidad te enseña a identificar y gestionar el churn en ecosistemas de dos lados.',
                'prompt_content'   => <<<'EOT'
Actúa como un director de Customer Success con experiencia en plataformas digitales de dos lados, habiendo gestionado programas de retención tanto para compradores como para vendedores en marketplaces con más de 100.000 usuarios activos.

## El reto del CS en plataformas

El customer success en plataformas es diferente al de un producto SaaS: si un vendedor se va, la experiencia de los compradores se degrada. Si los compradores no regresan, los vendedores pierden ingresos. La interdependencia hace que el churn de un lado del mercado sea más costoso que en negocios tradicionales: tienes que anticipar y gestionar el riesgo en dos audiencias simultáneamente.

## Plan de trabajo para esta sesión

### 1. Segmentación de clientes en plataformas
- Define los segmentos críticos en cada lado del mercado según valor y riesgo de churn
- Propón un modelo de scoring de salud del cliente adaptado a plataformas
- Identifica las señales de alerta tempranas de churn en compradores y en vendedores

### 2. Estrategia de onboarding para ambos lados
- Diseña el journey de activación para nuevos compradores (primeras 30 sesiones)
- Diseña el journey de activación para nuevos vendedores (primera venta, primeras 10 ventas)
- Propón touchpoints automáticos vs. humanos según el valor del cliente

### 3. Programa de Customer Success proactivo
- Define los playbooks de intervención para clientes en riesgo de churn
- Propón cómo priorizar el tiempo del equipo de CS entre compradores y vendedores
- Diseña los QBR (Quarterly Business Reviews) adaptados para vendedores clave de la plataforma

### 4. Gestión de disputas y resolución de conflictos
- Diseña el proceso de resolución de disputas entre compradores y vendedores
- Propón políticas de garantía que aumenten la confianza sin crear riesgo moral
- Explica cómo convertir una queja en una oportunidad de retención

### 5. Métricas de CS para plataformas
- Define el NPS diferenciado para compradores y vendedores
- Propón métricas de liquidez como proxy de la salud del CS: ratio actividad/catálogo
- Diseña el dashboard semanal del equipo de CS de una plataforma

## Entregables de la sesión

- Plantilla de health score para clientes de plataforma
- Playbooks de retención por segmento y lado del mercado
- Guía de escalado de disputas con criterios de compensación
- Plan de certificación o programa de éxito para los mejores vendedores

Cuéntame primero: ¿en qué tipo de plataforma trabajas? ¿Cuál es tu mayor problema de retención hoy: compradores, vendedores, o ambos?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Retener a compradores y vendedores en plataformas digitales',
                'vote_score'       => 32,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Posicionarte como freelancer en plataformas digitales de talento',
                'description'      => 'Aprende a destacar y generar ingresos sostenibles como freelancer en plataformas de talento como Upwork, Fiverr, Malt o Toptal. Entender la economía de estas plataformas desde dentro te da ventaja competitiva: sabrás cómo funciona el algoritmo, cómo posicionar tu perfil y cómo escalar tus ingresos sin depender de una sola plataforma.',
                'prompt_content'   => <<<'EOT'
Actúa como un consultor de carrera especializado en la economía freelance y las plataformas de talento digital, con experiencia habiendo ayudado a más de 200 freelancers a superar los 5.000€/mes en plataformas como Malt, Upwork y Fiverr.

## Por qué entender la plataforma te da ventaja

Las plataformas de talento son algoritmos antes que directorios. Tu posición en los resultados de búsqueda, tu tasa de conversión de propuestas y tu reputación son datos que el algoritmo pondera para decidir cuánto trabajo te muestra. Los freelancers que entienden esto ganan significativamente más que los que solo tienen buenas habilidades técnicas.

## Plan de trabajo para optimizar tu carrera en plataformas

### 1. Análisis y selección de plataformas
- Compara las principales plataformas de talento: Malt, Upwork, Fiverr, Toptal, Workana
- Define cuál es la más adecuada según tu especialidad, experiencia y mercado objetivo
- Propón una estrategia multi-plataforma sin violar los términos de servicio de cada una

### 2. Optimización del perfil para el algoritmo
- Diseña un perfil que maximice la visibilidad en los resultados de búsqueda
- Explica cómo elegir el título, las habilidades y las categorías correctas
- Propón cómo construir el portafolio inicial cuando no tienes proyectos en la plataforma

### 3. Estrategia de pricing en plataformas
- Explica el impacto del precio en el algoritmo y en la percepción de calidad
- Propón cómo escalar tarifas progresivamente sin perder proyectos
- Diseña una estrategia de paquetes (básico, estándar, premium) si la plataforma lo permite

### 4. Captación de los primeros proyectos y reviews
- Diseña una estrategia de lanzamiento para conseguir las primeras 5 reviews positivas
- Propón cómo redactar propuestas que conviertan mejor en las primeras fases
- Explica cómo gestionar los primeros clientes para maximizar la probabilidad de review de 5 estrellas

### 5. Escala y reducción de dependencia de plataformas
- Define el momento adecuado para comenzar a construir tu propia marca personal
- Propón cómo convertir clientes de plataforma en clientes directos de forma ética
- Diseña tu modelo de negocio freelance a 2 años: mezcla óptima de plataformas y canal propio

## Entregables de la sesión

- Checklist de optimización de perfil para tu plataforma elegida
- Plantilla de propuesta de proyecto de alta conversión
- Plan de 90 días para conseguir los primeros 3.000€ como freelancer en plataformas
- Guía de gestión de reputación y respuesta a reviews negativas

Antes de empezar: ¿cuál es tu especialidad? ¿Tienes experiencia previa como freelancer o estás empezando? ¿En qué plataformas estás o quieres estar?
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 35,
                'use_case'         => 'Optimizar perfil y generar ingresos como freelancer en plataformas digitales',
                'vote_score'       => 29,
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
