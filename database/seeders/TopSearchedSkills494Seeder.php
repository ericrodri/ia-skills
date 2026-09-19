<?php
namespace Database\Seeders;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopSearchedSkills494Seeder extends Seeder
{
    public function run(): void
    {
        $admin = User::first();
        $skills = [
            [
                'profession_id'    => 1,
                'title'            => 'Estrategia de marketing para startups en fase temprana con IA',
                'description'      => 'Diseña estrategias de marketing de bajo coste y alto impacto para startups con recursos limitados, usando IA para validar mensajes, identificar canales y crear contenido que atraiga early adopters.',
                'prompt_content'   => <<<'EOT'
Eres un experto en marketing para startups con experiencia en growth hacking, marketing de contenidos y estrategias de adquisición de bajo coste. Has ayudado a decenas de startups en fase seed y series A a construir su base de usuarios iniciales y a encontrar su product-market fit desde el punto de vista del marketing.

**Mi situación:**
Soy cofundador de una startup B2B SaaS en fase pre-seed. Tenemos un producto funcional, los primeros 10 clientes beta y estamos listos para crecer. Tenemos un presupuesto de marketing de 500€/mes y necesito hacer el máximo con muy poco.

**objetivo 1 — Definición del ICP y messaging:**
Antes de gastar un euro en marketing, ayúdame a afinar quién es mi cliente ideal:

1. **Framework de ICP para startups:**
   - Qué preguntas hacer a mis 10 clientes beta para entender por qué compran
   - Cómo identificar los patrones comunes (industria, tamaño, cargo, dolor específico)
   - Cómo priorizar los segmentos con mayor potencial de crecimiento

2. **Mensaje principal de valor:**
   - Fórmula para escribir una propuesta de valor clara en una frase
   - Tres versiones del mensaje para diferentes segmentos del ICP
   - Prueba de claridad: cómo saber si mi mensaje es comprensible para alguien que no conoce mi producto

3. **Narrativa de startup:**
   - Cómo construir la historia del problema-solución que conecte emocionalmente
   - Formato para diferentes canales: LinkedIn (280 caracteres), elevator pitch (30 segundos), email en frío (150 palabras)

**objetivo 2 — Canales de adquisición sin dinero:**
Identifica los mejores canales de adquisición gratuitos para mi startup B2B SaaS:

- **Content marketing:** estrategia de SEO long-tail para términos de baja competencia donde puedo ganar sin presupuesto
- **LinkedIn orgánico:** estrategia de personal branding del fundador como canal de distribución
- **Comunidades online:** identificación de comunidades donde viven mis ICP (Slack, Discord, Reddit, foros especializados) y cómo aportar valor sin spam
- **Product Hunt:** cómo preparar un lanzamiento exitoso, timing, comunidad de apoyo
- **Directorios y marketplaces:** G2, Capterra, AlternativeTo, directorios de nicho

Para cada canal: tiempo estimado para ver resultados, recursos necesarios, métricas de éxito.

**objetivo 3 — Presupuesto de 500€/mes:**
Cómo distribuir el presupuesto de forma óptima:

- Qué canales de pago tienen sentido con budget tan limitado
- Experimentos de 100-200€ para validar canales antes de escalar
- Herramientas de marketing esenciales gratuitas o de bajo coste
- Cuándo escalar qué canal y qué señales buscar antes de invertir más

**objetivo 4 — Sistema de métricas para startups:**
Define las métricas de marketing más importantes para mi fase:

- Métricas de awareness: tráfico, impresiones, alcance
- Métricas de activación: registros, trials, demos solicitadas
- Métricas de conversión: CAC por canal, win rate, tiempo hasta el cierre
- North star metric: cuál debería ser la mía y por qué
- Dashboard simple de 5 métricas para revisar semanalmente

**objetivo 5 — Plan de 90 días:**
Crea un plan de marketing concreto para los próximos 90 días:
- Semanas 1-4: experimentos de mensaje y canal
- Semanas 5-8: escalar lo que funciona, descartar lo que no
- Semanas 9-12: optimización y sistematización

tarea final: Dame una lista de 10 acciones que puedo hacer esta semana, sin gastar dinero, para conseguir más usuarios para mi startup.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Construir una estrategia de marketing de bajo coste para startups en fase temprana con presupuesto limitado',
                'vote_score'       => 47,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 2,
                'title'            => 'Desarrollo rápido de MVP con asistencia de IA para startups',
                'description'      => 'Planifica y construye un MVP funcional en 4-8 semanas usando IA para acelerar decisiones técnicas, generar código, elegir el stack adecuado y priorizar features que validen tus hipótesis de negocio.',
                'prompt_content'   => <<<'EOT'
Eres un experto en desarrollo de productos digitales y metodologías ágiles para startups. Has construido decenas de MVPs y sabes cómo tomar decisiones técnicas rápidas, evitar el over-engineering y entregar productos que validen hipótesis de negocio en el menor tiempo posible.

**Mi contexto:**
Soy fundador técnico de una startup con una idea validada a nivel de problema. Tengo 8 semanas y recursos limitados para construir un MVP que demuestre el valor de mi solución y consiga los primeros 10 clientes de pago.

**instrucción 1 — Scoping del MVP:**
Ayúdame a definir exactamente qué construir:

1. **Hipótesis de negocio clave:** cuál es la hipótesis más importante que necesito validar con este MVP (no la tecnología, el modelo de negocio)
2. **Features mínimas:** cuáles son las features absolutamente necesarias para validar esa hipótesis, diferenciando:
   - Features "must have" (sin ellas el MVP no puede validar la hipótesis)
   - Features "nice to have" (tentación a evitar en el MVP)
   - Features "post-MVP" (para después de conseguir los primeros clientes)
3. **Test de usuario mínimo:** cómo saber que el MVP es suficiente antes de construirlo (criterios de éxito definidos)

**instrucción 2 — Stack tecnológico para velocidad:**
Recomiéndame el stack tecnológico óptimo para mi situación:

Para una aplicación web B2B SaaS con estas características [descríbelas], qué combinar de:
- Frontend: Next.js vs React vs Vue vs otro — justificación basada en velocidad de desarrollo y ecosistema
- Backend: Node.js vs Python (FastAPI/Django) vs Ruby on Rails vs Laravel — justificación
- Base de datos: PostgreSQL vs MongoDB vs Supabase vs Firebase — justificación
- Auth: Clerk vs Auth0 vs NextAuth vs custom — cuándo usar cada uno
- Pagos: Stripe — configuración mínima para MVP
- Deploy: Vercel vs Railway vs Heroku vs Render — balance coste/simplicidad

Para cada elección: cuánto tiempo ahorra vs. alternativa, qué sacrifico, en qué punto me limita.

**instrucción 3 — Plan de desarrollo semana a semana:**
Crea un roadmap de desarrollo de 8 semanas:

Semana 1-2: Setup y fundamentos
- Arquitectura mínima viable
- Auth, base de datos, deploy básico
- Definición de API si aplica

Semana 3-4: Core feature principal
- La feature que valida la hipótesis central
- No perfección, sí funcionalidad

Semana 5-6: Features de soporte
- Onboarding del usuario
- Pagos básicos
- Email transaccional

Semana 7-8: Pulido y lanzamiento
- Tests básicos
- Corrección de bugs críticos
- Lanzamiento con primeros usuarios

**instrucción 4 — Uso de IA para acelerar el desarrollo:**
Cómo usar IA de forma efectiva para construir más rápido:
- Qué tipo de código es más efectivo generar con IA y qué escribir manualmente
- Cómo estructurar los contextos para obtener código de mayor calidad
- Cómo hacer code review con IA para detectar bugs antes de producción
- Qué herramientas de IA coding asistido usar (GitHub Copilot, Cursor, Claude)
- Cómo documentar el código con IA para poder mantenerlo solo

**instrucción 5 — Deuda técnica aceptable en MVP:**
¿Qué deuda técnica es aceptable en un MVP?
- Qué shortcuts técnicos son legítimos en esta fase
- Dónde nunca hacer shortcuts (seguridad, datos de usuarios)
- Cómo documentar la deuda técnica para abordarla después
- Cuándo es el momento de refactorizar vs. seguir construyendo features

objetivo: Lanzar un MVP funcional en 8 semanas que me permita conseguir los primeros 10 clientes de pago y validar que tengo un negocio viable antes de buscar inversión.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 60,
                'use_case'         => 'Planificar y construir un MVP B2B SaaS en 8 semanas con decisiones técnicas rápidas y uso efectivo de IA',
                'vote_score'       => 52,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 3,
                'title'            => 'Diseño de pitch deck para inversores con IA',
                'description'      => 'Crea un pitch deck profesional y persuasivo para captar inversión, con la estructura narrativa correcta, diseño visual impactante y los datos que los inversores realmente necesitan ver.',
                'prompt_content'   => <<<'EOT'
Eres un experto en diseño de pitch decks y comunicación para inversores. Has trabajado con decenas de startups para crear presentaciones que han conseguido financiación de VCs, business angels y fondos de inversión. Conoces en profundidad qué buscan los inversores en cada slide y cómo estructurar la narrativa para captar su atención desde el primer momento.

**Mi situación:**
Soy cofundadora de una startup en fase pre-seed buscando levantar una ronda de 300.000€. Tengo el producto validado con primeros clientes, pero nunca he hecho un pitch formal a inversores y necesito crear mi primer deck profesional.

**instrucción 1 — Estructura narrativa del pitch deck:**
Guíame slide a slide con la estructura óptima para mi pitch:

**Slide 1 — Portada:**
- Qué elementos incluir (logo, tagline de una línea, datos de contacto)
- Cómo escribir el tagline perfecto que resume la propuesta de valor
- Qué NO poner en la portada

**Slide 2 — El Problema:**
- Cómo cuantificar el dolor del cliente (datos, estadísticas, coste del problema)
- Técnica de storytelling: empezar con un caso concreto antes de generalizar
- Cómo comunicar que el problema es grande y real, no fabricado

**Slide 3 — La Solución:**
- Demo o captura de pantalla vs. descripción conceptual: cuándo usar cada uno
- Cómo explicar la solución en 3 puntos sin tecnicismos
- Diferencia clave respecto a cómo el cliente resuelve el problema hoy

**Slide 4 — Tracción:**
- Qué métricas mostrar según mi etapa (pre-revenue, revenue temprano, crecimiento)
- Cómo presentar métricas débiles de forma honesta pero positiva
- El poder de los testimonios y logos de clientes

**Slide 5 — Modelo de negocio:**
- Cómo explicar el revenue model de forma simple
- Unit economics básicos: LTV, CAC, payback period
- Proyecciones realistas vs. proyecciones que los inversores no se creen

**Slide 6 — Mercado:**
- TAM/SAM/SOM: cómo calcularlos sin inflarlos artificialmente
- Top-down vs. bottom-up: cuándo usar cada enfoque
- Cómo elegir el tamaño de mercado que interesa al tipo de inversor que busco

**Slide 7 — Competencia:**
- Cómo crear una matriz de competencia que muestre mi diferenciación real
- El error de decir "no tenemos competencia"
- Cómo posicionarme frente a competidores más grandes

**Slide 8 — Equipo:**
- Qué destacar de cada fundador (experiencia relevante, unfair advantages)
- Cómo compensar la falta de experiencia emprendedora previa
- Advisors y su credibilidad

**Slide 9 — La ronda:**
- Cuánto pedir y cómo justificarlo (milestones específicos)
- Cómo explicar el uso de los fondos
- Valoración: cuándo y cómo mencionarla

**instrucción 2 — Diseño visual:**
Principios de diseño para un pitch deck efectivo:
- Jerarquía visual: qué debe verse primero en cada slide
- Paleta de colores para startups: profesional pero memorable
- Tipografía: qué familias usar, tamaños mínimos para presentación proyectada
- Data visualization: cómo mostrar métricas de forma clara e impactante
- Una idea por slide: cómo editar implacablemente

**instrucción 3 — El pitch verbal:**
Cómo acompañar el deck con un pitch verbal efectivo:
- Tiempo óptimo por slide en una presentación de 10 minutos
- Cómo manejar preguntas difíciles sobre proyecciones y valoración
- Errores de comunicación más comunes al presentar a inversores
- Cómo terminar con una llamada a la acción clara

objetivo: Crear un pitch deck de 10-12 slides que consiga reuniones con al menos 20 inversores potenciales y cierre una ronda de 300.000€ en los próximos 6 meses.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Crear un pitch deck profesional y persuasivo para captar inversión en rondas pre-seed y seed',
                'vote_score'       => 61,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 4,
                'title'            => 'Estrategia de ventas para startups en fase de validación con IA',
                'description'      => 'Construye tu proceso de ventas desde cero como startup: desde los primeros clientes "design partner" hasta escalar el equipo de ventas, con scripts, objeciones y métricas adaptadas a ventas B2B tempranas.',
                'prompt_content'   => <<<'EOT'
Eres un experto en ventas B2B para startups con experiencia en founder-led sales, construcción de equipos de ventas y transición de ventas artesanales a procesos escalables. Sabes que las ventas en una startup en fase temprana son completamente diferentes a las ventas en una empresa establecida.

**Mi situación:**
Soy founder de una startup B2B SaaS. Acabo de terminar el MVP y necesito conseguir los primeros 10 clientes de pago. No tengo experiencia previa en ventas y soy el único vendedor de momento. Mi ticket medio objetivo es de 500€/mes.

**tarea 1 — Ventas del founder (founder-led sales):**
Explícame cómo hacer ventas yo mismo como fundador, sin experiencia:

1. **Por qué el founder debe vender primero:**
   - Qué aprendo de las primeras ventas que no puedo aprender de otra forma
   - Por qué los clientes compran al founder más fácilmente que a un vendedor
   - Cómo usar las ventas para mejorar el producto

2. **Estrategia de "design partners":**
   - Qué es un design partner y cómo diferenciarlo de un cliente normal
   - Cómo ofrecer descuentos/acceso anticipado a cambio de feedback profundo
   - Cuántos design partners necesito y por cuánto tiempo

3. **Mi red de contactos como primer canal:**
   - Cómo mapear mi red para identificar primeros prospectos
   - Cómo hacer una introducción natural a lo que estoy construyendo
   - Cómo pedir feedback sin pedir dinero todavía (y cuándo hacer el switch)

**tarea 2 — Proceso de ventas básico:**
Diseña un proceso de ventas adaptado a mi situación:

Etapa 1 — Discovery:
- Las 10 preguntas de discovery más importantes para mi tipo de producto
- Cómo escuchar más de lo que hablo (ratio de escucha 70/30)
- Red flags que indican que este prospecto no va a comprar

Etapa 2 — Demo:
- Estructura de una demo de 30 minutos que venda
- Cómo personalizar la demo para cada prospecto
- Cómo manejar la demo cuando algo falla en vivo

Etapa 3 — Propuesta:
- Cuándo enviar propuesta y cuándo no
- Estructura de una propuesta simple y efectiva
- Pricing: cómo fijar el precio cuando no tengo referencias del mercado

Etapa 4 — Cierre:
- Las objeciones más comunes en ventas B2B SaaS y cómo responderlas
- Cómo crear urgencia sin ser agresivo
- Follow-up: cuándo insistir y cuándo aceptar el no

**tarea 3 — Herramientas de ventas mínimas:**
Qué herramientas necesito para gestionar mis ventas:
- CRM gratuito o de bajo coste para mis primeros 50 prospectos
- Cómo hacer seguimiento de pipelines con recursos mínimos
- Automatización básica de follow-up por email
- Grabación de llamadas para aprender y mejorar

**tarea 4 — Métricas de ventas para startups:**
Qué métricas seguir en esta fase:
- Win rate: qué es normal para un SaaS B2B en fase temprana
- Ciclo de ventas: cómo medirlo y cómo acortarlo
- CAC: cómo calcularlo con ventas del founder (mi tiempo tiene un coste)
- Pipeline coverage: cuántos prospectos necesito para cerrar 10 clientes

**tarea 5 — Cuándo contratar el primer vendedor:**
Señales que indican que es momento de contratar:
- Qué debe estar documentado antes de contratar un vendedor
- Cómo escribir el job description del primer SDR/AE
- Cómo hacer que un vendedor tenga éxito desde el primer día

objetivo: Conseguir 10 clientes de pago en los próximos 90 días usando exclusivamente mis propias ventas como fundador, sin presupuesto de ventas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 40,
                'use_case'         => 'Construir un proceso de ventas B2B desde cero como founder y conseguir los primeros 10 clientes de pago',
                'vote_score'       => 44,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 5,
                'title'            => 'Validación de ideas de producto con IA antes de construir',
                'description'      => 'Utiliza un framework sistemático con IA para validar tu idea de startup antes de invertir tiempo y dinero en desarrollo, reduciendo drásticamente el riesgo de construir algo que nadie quiera.',
                'prompt_content'   => <<<'EOT'
Eres un experto en product discovery, customer development y validación de startups. Conoces en profundidad los frameworks de Steve Blank, Eric Ries y los principios del lean startup. Tu especialidad es ayudar a fundadores a validar sus hipótesis de negocio lo más rápido y barato posible, antes de comprometer recursos en desarrollo.

**Mi situación:**
Tengo una idea de startup que creo que resuelve un problema real. Antes de empezar a construir, quiero asegurarme de que hay suficiente demanda y que estoy resolviendo el problema correcto de la forma correcta.

**instrucción 1 — Descomposición de hipótesis:**
Ayúdame a identificar y priorizar todas las hipótesis que necesito validar:

**Hipótesis de problema:**
- ¿El problema que creo que existe realmente existe?
- ¿Es lo suficientemente doloroso como para que alguien pague por resolverlo?
- ¿Cuál es el coste actual del problema (tiempo, dinero, frustración)?
- ¿Quién sufre el problema con mayor intensidad?

**Hipótesis de solución:**
- ¿Mi solución resuelve el problema?
- ¿Es mejor que las alternativas actuales de forma significativa?
- ¿El cliente puede adoptar mi solución sin cambios de comportamiento excesivos?

**Hipótesis de modelo de negocio:**
- ¿El cliente pagará por esto?
- ¿Cuánto pagará?
- ¿Cómo llegaré a los clientes de forma rentable?

Para cada hipótesis: nivel de riesgo (alto/medio/bajo), evidencia que tengo a favor/en contra, cómo validarla.

**instrucción 2 — Métodos de validación rápida:**
Para cada hipótesis crítica, elige el método de validación más rápido y barato:

- **Entrevistas de problema:** cómo estructurarlas para obtener información no sesgada, cuántas hacer, cómo analizarlas
- **Landing page test:** cómo crear una landing que valide interés sin tener producto, qué métricas seguir (conversion rate de email, ratio de rebote)
- **Wizard of Oz:** cómo simular el producto manualmente para validar que el cliente lo usaría
- **Concierge MVP:** entrega manual del servicio para validar disposición a pagar
- **Smoke test con anuncios:** 100-200€ en Google/LinkedIn ads para validar demanda

Para cada método: coste, tiempo, qué aprendo, cuándo usarlo.

**instrucción 3 — Entrevistas de cliente:**
Guía detallada para hacer entrevistas de customer development:

1. **Reclutamiento de entrevistados:**
   - Cómo encontrar a personas del segmento objetivo para entrevistar
   - Cómo conseguir que acepten una reunión
   - A cuántas personas entrevistar para cada hipótesis

2. **Estructura de la entrevista:**
   - Preguntas de apertura para crear confianza y contexto
   - Preguntas para explorar el problema en profundidad (técnica de los 5 porqués)
   - Preguntas para entender el comportamiento actual (no el hipotético)
   - Preguntas para explorar la disposición a pagar
   - Preguntas que NUNCA debes hacer en una entrevista de validación

3. **Análisis de entrevistas:**
   - Cómo identificar patrones en 10-20 entrevistas
   - Señales de que has encontrado un problema real y urgente
   - Señales de que debes pivotar o abandonar la idea

**instrucción 4 — Criterios de go/no-go:**
Define los criterios que usaré para decidir si construir o no:
- Qué combinación de señales me indica que debo construir
- Qué señales de alerta deben hacerme reconsiderar
- Cómo evitar el sesgo de confirmación (tendencia a ver solo lo que confirma mi idea)
- Cómo distinguir entusiasmo de los entrevistados de intención real de compra

**instrucción 5 — Plan de validación en 30 días:**
Crea un plan de validación para las próximas 4 semanas:
- Semana 1: definición de hipótesis y reclutamiento de entrevistados
- Semana 2: primeras 10 entrevistas y análisis preliminar
- Semana 3: landing page test y/o experimento adicional
- Semana 4: síntesis, decisión go/no-go y próximos pasos

objetivo: Reducir al máximo el riesgo de construir algo que nadie quiera, invirtiendo 30 días en validación antes de empezar el desarrollo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'beginner',
                'estimated_minutes'=> 50,
                'use_case'         => 'Validar sistemáticamente una idea de startup antes de invertir en desarrollo usando customer development',
                'vote_score'       => 58,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 6,
                'title'            => 'Construir el primer equipo de una startup con IA',
                'description'      => 'Define qué perfiles contratar primero, cómo atraer talento sin grandes salarios, cómo estructurar la equity y cómo crear una cultura de empresa desde el día uno en una startup en fase temprana.',
                'prompt_content'   => <<<'EOT'
Eres un experto en talent acquisition y construcción de equipos para startups. Has asesorado a decenas de startups en fase seed y series A para contratar sus primeros 10-20 empleados, establecer su cultura organizacional y competir por talento frente a empresas más grandes sin los mismos recursos financieros.

**Mi contexto:**
Soy CEO de una startup con financiación pre-seed de 200.000€. Actualmente somos 2 cofundadores y necesito hacer las primeras 3-5 contrataciones para ejecutar nuestro plan de producto y ventas. Tengo presupuesto limitado y necesito atraer talento de calidad con salarios por debajo del mercado.

**tarea 1 — Qué contratar primero:**
Ayúdame a priorizar las primeras contrataciones:

1. **Análisis de brechas del equipo fundador:**
   - Cuáles son las capacidades que más faltan en el equipo actual
   - Qué tareas me están frenando y no debo hacer yo como CEO
   - Qué puede esperar vs. qué bloquea el crecimiento ahora mismo

2. **Arquetipos de primeras contrataciones:**
   - Perfil técnico (CTO/Lead Developer): cuándo contratarlo, qué buscar
   - Perfil comercial (Head of Sales): cuándo necesito un vendedor dedicado
   - Perfil de operaciones: cuándo el CEO no puede gestionar todo
   - El "Swiss Army Knife": generalistas vs. especialistas en fase temprana

3. **Secuencia óptima para mi situación:**
   Dado mi contexto específico, qué contratar en qué orden y por qué.

**tarea 2 — Atraer talento sin dinero:**
Cómo competir por talento frente a empresas grandes:

1. **Propuesta de valor del empleado (EVP) para startups:**
   - Aprendizaje y desarrollo acelerado
   - Impacto y autonomía real
   - Equity con potencial de upside
   - Misión y propósito
   - Cómo articular esta EVP de forma auténtica

2. **Equity como herramienta de atracción:**
   - Estructuras de equity para primeros empleados (0.1% - 2% según rol y momento)
   - Cliff y vesting: cómo explicarlo y por qué protege a todos
   - Cómo calcular el valor potencial de la equity de forma honesta
   - Errores comunes en la gestión de equity que destruyen la cultura

3. **Canales de reclutamiento para startups:**
   - LinkedIn: cómo hacer outreach efectivo como fundador
   - Comunidades y meetups: dónde encontrar talento tech y comercial
   - Universidades y bootcamps: talento junior con potencial
   - Red de los cofundadores: primeras contrataciones de confianza

**tarea 3 — Proceso de selección para startups:**
Diseña un proceso de selección ágil (2-3 semanas máximo):

- Filtro inicial: qué preguntas hacer por escrito para filtrar candidatos
- Primera entrevista (45 min): qué evaluar, qué preguntar
- Prueba técnica o de caso: cómo hacerla breve y relevante
- Entrevista cultural: cómo evaluar fit cultural sin ser sesgado
- Referencia check: por qué es esencial y cómo hacerlo bien
- Oferta: cómo estructurarla y cómo negociar

**tarea 4 — Cultura desde el día uno:**
Cómo establecer la cultura cuando eres un equipo pequeño:
- Los valores fundacionales: cómo definirlos de forma auténtica (no decorativa)
- Rituales de equipo en fase temprana: qué prácticas instalar desde el principio
- Transparencia: cuánto compartir con el equipo sobre finanzas, métricas, estrategia
- Cómo manejar los primeros conflictos y desacuerdos en el equipo

objetivo: Contratar las 3 personas correctas en los próximos 60 días que multipliquen mi capacidad de ejecución y sienten las bases de la cultura que quiero construir a largo plazo.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Contratar los primeros 3-5 empleados de una startup y establecer la cultura organizacional desde el inicio',
                'vote_score'       => 37,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 7,
                'title'            => 'Modelo financiero para startups en fase pre-seed con IA',
                'description'      => 'Construye un modelo financiero realista para tu startup que proyecte ingresos, gastos y runway, comunique tu visión a inversores y te ayude a tomar decisiones de asignación de capital con criterio.',
                'prompt_content'   => <<<'EOT'
Eres un experto en finanzas corporativas con especialización en startups y venture capital. Has ayudado a decenas de startups a construir modelos financieros que convencen a inversores y sirven como herramienta real de gestión. Sabes que el modelo financiero de una startup no es una predicción del futuro sino una forma de comunicar los supuestos del negocio.

**Mi contexto:**
Soy cofundadora de una startup SaaS B2B en fase pre-seed. Necesito un modelo financiero para dos propósitos: (1) entender cuánta financiación necesito y cuándo, y (2) presentarlo a inversores como parte del fundraising.

**instrucción 1 — Fundamentos del modelo financiero para startups:**
Antes de construir el modelo, explícame:

1. **Qué hace que un modelo financiero sea creíble para inversores:**
   - La diferencia entre proyecciones top-down y bottom-up
   - Por qué los inversores prefieren los supuestos detallados a los números
   - Cómo manejar la incertidumbre de forma honesta
   - Los errores más comunes en modelos financieros de startups (y cómo evitarlos)

2. **Estructura del modelo:**
   - Income statement proyectado a 3-5 años
   - Cash flow statement para calcular el runway
   - Balance sheet simplificado
   - Métricas SaaS clave: ARR, MRR, churn, NRR, CAC, LTV, payback period

**instrucción 2 — Supuestos de ingresos (Revenue Model):**
Guíame para construir el driver de ingresos:

Para un SaaS B2B con precio de 500€/mes y ciclo de ventas de 30 días:

- **Supuestos de adquisición:** cuántos leads/mes, qué win rate, cuántas demos/semana puedo hacer como founder
- **Supuestos de expansión:** upsell a planes superiores, % de clientes que expanden
- **Supuestos de churn:** qué churn mensual es normal para mi segmento, cómo modelarlo
- **Escenarios:** cómo construir escenario pesimista, base y optimista de forma coherente
- **MRR waterfall:** nuevos MRR, expansión MRR, churned MRR, net MRR

**instrucción 3 — Supuestos de costes:**
Cómo modelar los costes de forma realista:

- **COGS (coste del servicio):** hosting, infraestructura, soporte, licencias de terceros
- **Equipo:** qué contratar cuándo (triggering events para cada contratación)
- **Marketing y ventas:** coste de adquisición, presupuesto de marketing por etapa
- **G&A:** operaciones, legal, contabilidad, herramientas
- **Cómo escalar los costes coherentemente con el crecimiento de ingresos**

**instrucción 4 — Runway y necesidades de capital:**
Las preguntas más importantes:

1. ¿Cuánta caja tengo y cuándo me quedo sin dinero (runway)?
2. ¿Qué hitos necesito alcanzar para la siguiente ronda?
3. ¿Cuánto dinero necesito levantar ahora para llegar a esos hitos con margen de seguridad?
4. ¿Qué supuestos son más sensibles al plan (análisis de sensibilidad)?
5. ¿En qué momento el negocio se vuelve cash flow positivo?

**instrucción 5 — Presentación del modelo a inversores:**
Cómo comunicar el modelo:
- Qué slides incluir en el deck sobre finanzas
- Cómo presentar proyecciones sin que parezcan inventadas
- Qué preguntas difíciles sobre el modelo harán los inversores
- Cómo defender los supuestos con datos de mercado y benchmarks del sector

objetivo: Crear un modelo financiero que me permita tomar decisiones de asignación de capital con criterio y que comunique mi visión de negocio de forma clara y creíble a los inversores.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'advanced',
                'estimated_minutes'=> 60,
                'use_case'         => 'Construir un modelo financiero SaaS creíble para inversores y para la gestión interna de una startup en fase pre-seed',
                'vote_score'       => 49,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 8,
                'title'            => 'Estructura legal de una startup desde el inicio con IA',
                'description'      => 'Navega las decisiones legales críticas de una startup en fase temprana: forma jurídica, pacto de socios, protección de propiedad intelectual, términos y condiciones y preparación para due diligence de inversores.',
                'prompt_content'   => <<<'EOT'
Eres un experto en derecho mercantil y startup law con especialización en estructuración legal de startups en España y Latinoamérica. Conoces los errores legales más comunes que cometen los fundadores y cómo evitarlos desde el principio, cuando el coste de corrección es bajo.

**Mi situación:**
Acabo de co-fundar una startup con dos socios. Tenemos una idea validada y vamos a empezar a desarrollar el producto. Necesito entender qué estructura legal crear, qué documentos son esenciales y qué errores legales debemos evitar desde el inicio.

**instrucción 1 — Forma jurídica:**
Ayúdame a elegir la forma jurídica correcta para mi startup:

En España:
- **SL (Sociedad Limitada) vs. SA:** cuándo usar cada una para una startup
- **Capital social mínimo:** 1€ vs. 3.000€ — qué implicaciones tiene para los inversores
- **Startups con vocación internacional:** España, Estonia (e-Residency), Delaware — cuándo y por qué cada opción
- **Constitución rápida:** plazos, costes, documentación necesaria

**instrucción 2 — Pacto de socios:**
Este es el documento más importante y el más ignorado. Explícame:

1. **Por qué es esencial tener un pacto de socios antes de cualquier otra cosa:**
   - Qué pasa si un socio quiere salir en 6 meses
   - Qué pasa si un socio no trabaja pero tiene el 33% de las acciones
   - Qué pasa si tenemos una discrepancia estratégica fundamental

2. **Cláusulas esenciales del pacto de socios:**
   - Vesting de los fundadores (por qué es esencial y cómo estructurarlo)
   - Good leaver / bad leaver: qué pasa con las acciones si alguien sale
   - Drag along / tag along: protección en caso de venta
   - Derecho de preferencia: control sobre quién entra en el cap table
   - Quórum para decisiones importantes: qué requiere unanimidad

3. **Plantilla comentada:**
   Proporciona una estructura de pacto de socios con los puntos más importantes explicados para que pueda revisarlo con mi abogado.

**instrucción 3 — Propiedad intelectual:**
Cómo proteger lo que construimos:

- **Asignación de IP a la empresa:** contrato que garantiza que el código pertenece a la empresa, no al developer
- **Acuerdos de confidencialidad (NDA):** cuándo usarlos y cuándo no (y no abusar de ellos con inversores)
- **Marca registrada:** cuándo registrar, clases de la EUIPO relevantes para SaaS, proceso y costes
- **Licencias de software:** cómo gestionar las licencias de terceros en tu producto
- **Open source:** implicaciones de usar código open source con licencias copyleft

**instrucción 4 — Documentos legales esenciales:**
Qué documentos debo crear antes de lanzar:

1. **Términos y condiciones de servicio:** qué cláusulas son esenciales, qué protegen, cómo hacerlos accesibles
2. **Política de privacidad (RGPD):** qué debo declarar, base legal del tratamiento, derechos de usuarios
3. **Contratos con primeros clientes:** orden de compra vs. contrato completo, cuándo necesito uno formal
4. **Contratos con employees y contractors:** diferencias legales, cláusulas de IP y confidencialidad

**instrucción 5 — Preparación para inversores:**
Qué tener en orden antes de hablar con VCs o business angels:
- Due diligence legal: qué documentos pedirán los inversores
- Cap table limpio: cómo estructurarlo desde el principio
- Data room: qué incluir y cómo organizarlo
- Errores legales más frecuentes que retrasan o bloquean una inversión

objetivo: Tener la base legal correcta para operar, proteger nuestra propiedad intelectual y estar listos para recibir inversión sin sorpresas en el proceso de due diligence.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 55,
                'use_case'         => 'Establecer la estructura legal correcta de una startup para operar, proteger IP y prepararse para recibir inversión',
                'vote_score'       => 43,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 9,
                'title'            => 'Atención al cliente escalable para startups con IA',
                'description'      => 'Diseña un sistema de customer success que pueda escalar de 10 a 1.000 clientes sin contratar proporcionalmente, usando automatización, bases de conocimiento y IA para mejorar la experiencia del cliente.',
                'prompt_content'   => <<<'EOT'
Eres un experto en customer success y soporte al cliente para startups SaaS. Tu especialidad es diseñar sistemas de atención al cliente que escalen sin crecer linealmente en coste, usando automatización, autoservicio y procesos eficientes para mantener alta satisfacción del cliente mientras el negocio crece.

**Mi situación:**
Tengo una startup SaaS con 50 clientes activos y estoy creciendo rápido. Actualmente yo mismo y mi cofundador manejamos todo el soporte, lo que nos consume 3-4 horas diarias. Necesito construir un sistema de customer success que no nos ahogue cuando lleguemos a 200-500 clientes.

**tarea 1 — Diagnóstico del soporte actual:**
Ayúdame a entender mi situación:

1. **Análisis de tickets por tipo:**
   - Cómo categorizar los tickets actuales para identificar patrones
   - Qué porcentaje de tickets son "repetitivos" y candidatos a automatizar
   - Cuáles son los "top 10 problemas" que más tiempo me consumen

2. **Métricas de soporte que debo seguir:**
   - CSAT (Customer Satisfaction Score): cómo medirlo y qué benchmark esperar
   - Time to First Response (TTFR): objetivo según mi segmento de clientes
   - Time to Resolution (TTR): cuándo un ticket lleva demasiado tiempo
   - Ticket volume per customer: señal de problemas de producto o UX

**tarea 2 — Base de conocimiento:**
El elemento más importante para escalar el soporte:

1. **Estructura de la base de conocimiento:**
   - Categorías principales (Onboarding, Features, Billing, Troubleshooting)
   - Formato de artículos: longitud, estructura, capturas de pantalla
   - Cómo hacer que la búsqueda funcione bien

2. **Priorización de contenido:**
   - Qué artículos crear primero (los que resuelven los tickets más frecuentes)
   - Cómo convertir tickets recurrentes en artículos de base de conocimiento
   - Proceso de actualización cuando cambia el producto

3. **Herramientas:**
   - Intercom vs. Zendesk vs. Freshdesk vs. Notion: qué usar en mi fase
   - Coste y ROI de cada opción para 50-500 clientes

**tarea 3 — Automatización y self-service:**
Qué automatizar para reducir la carga de soporte:

1. **Onboarding automatizado:**
   - Secuencia de emails de onboarding basada en comportamiento del usuario
   - Tooltips y walkthroughs in-app para reducir preguntas básicas
   - Checklist de activación: cómo asegurar que cada usuario llega al "aha moment"

2. **Chatbot y respuestas automáticas:**
   - Cuándo tiene sentido un chatbot con IA vs. cuándo es contraproducente
   - Cómo configurar respuestas automáticas para preguntas frecuentes
   - Escalado correcto al humano: cuándo y cómo

3. **Health scoring:**
   - Qué señales indican que un cliente va a hacer churn
   - Sistema simple de health score para priorizar la atención proactiva
   - Intervención temprana: cuándo y cómo contactar a clientes en riesgo

**tarea 4 — Primera contratación de CS:**
Cuándo y cómo contratar el primer agente de customer success:
- Señales que indican que es el momento
- Perfil ideal del primer CS (generalist vs. specialist)
- Cómo hacer que sea productivo desde el día 1 (documentation, playbooks)
- Cómo escalar de 1 a 5 personas en el equipo de CS

**tarea 5 — NPS y feedback estructurado:**
Cómo recoger feedback sistemático para mejorar el producto:
- Cuándo enviar el NPS y a quién
- Cómo seguir con los detractores para recuperarlos
- Cómo convertir el feedback de soporte en input de producto
- Quarterly Business Reviews (QBR) para clientes enterprise: cuándo implementarlos

objetivo: Crear un sistema de customer success que pueda manejar 500 clientes con máximo 1-2 personas dedicadas, manteniendo un NPS superior a 40.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 50,
                'use_case'         => 'Diseñar un sistema de customer success escalable para startups SaaS que crece de 50 a 500 clientes',
                'vote_score'       => 40,
                'resource_type'    => 'prompt',
            ],
            [
                'profession_id'    => 10,
                'title'            => 'Lanzar un negocio freelance como una startup con IA',
                'description'      => 'Aplica principios de startup (validación, growth, sistemas) a tu negocio freelance para escalar tus ingresos, especializarte en un nicho de alto valor y construir activos que trabajen para ti.',
                'prompt_content'   => <<<'EOT'
Eres un experto en negocios freelance y emprendimiento digital. Has ayudado a cientos de freelancers a transformar su trabajo autónomo en un negocio escalable, aplicando principios de startup como la validación de mercado, el posicionamiento de nicho y la construcción de sistemas que reducen la dependencia del tiempo personal.

**Mi situación:**
Soy freelancer con 3 años de experiencia en diseño UX. Facturo entre 3.000 y 4.000€/mes, pero he llegado a un techo: no puedo trabajar más horas y mis tarifas ya están en el límite de lo que pagan en mi mercado actual. Quiero llevar mi negocio al siguiente nivel.

**instrucción 1 — Diagnóstico del negocio freelance actual:**
Analiza mi situación y ayúdame a identificar las palancas de crecimiento:

1. **Análisis de mis servicios actuales:**
   - Qué servicios generan más ingreso por hora trabajada
   - Cuáles me gustan vs. cuáles acepto pero no disfruto
   - Cuáles tienen mayor demanda de mercado y mayor percepción de valor

2. **Análisis de mis clientes actuales:**
   - Qué segmento de clientes paga mejor y genera menos fricción
   - Cuál es el cliente ideal que debería clonar
   - De dónde vienen mis mejores clientes (canal de adquisición)

3. **Dónde estoy dejando dinero sobre la mesa:**
   - Servicios adyacentes que podría ofrecer
   - Proyectos que he rechazado por falta de tiempo/habilidad
   - Precios que he mantenido bajos por miedo

**instrucción 2 — Especialización en nicho de alto valor:**
Cómo elegir y posicionarme en un nicho premium:

1. **Framework de selección de nicho:**
   - Intersección entre lo que sé hacer, lo que me gusta y lo que el mercado paga bien
   - Cómo evaluar el potencial económico de diferentes nichos (tamaño, disposición a pagar, competencia)
   - Profundidad de especialización: industria (fintech) vs. tipo de trabajo (onboarding UX) vs. cliente (startups B2B)

2. **Validación del nicho:**
   - Cómo validar que hay suficiente demanda antes de reposicionarme
   - Cómo hablar con 10 potenciales clientes del nicho antes de comprometerte
   - Señales de que has elegido un nicho lucrativo

3. **Transición al nuevo nicho:**
   - Cómo gestionar el cambio sin perder ingresos durante la transición
   - Cómo actualizar mi portfolio y propuesta de valor para el nuevo nicho
   - Cuánto tiempo tarda en completarse el reposicionamiento

**instrucción 3 — Subir precios sin perder clientes:**
La forma correcta de aumentar tarifas:

- Cuándo es el momento correcto para subir precios
- Cómo comunicar la subida a clientes actuales
- Value-based pricing: cómo cobrar por el valor que genero, no por las horas
- Paquetes de servicio: cómo estructurarlos para aumentar el ticket medio
- Cómo manejar el miedo al rechazo cuando pides más dinero

**instrucción 4 — Sistemas para escalar sin trabajar más horas:**
Cómo construir activos que multipliquen mis ingresos:

- **Productización:** cómo convertir un servicio custom en un paquete estandarizado
- **Templates y procesos:** cómo reducir el tiempo por proyecto manteniendo la calidad
- **Subcontratación:** cuándo contratar a otros freelancers para escalar
- **Productos digitales:** cursos, templates, recursos descargables como fuente de ingreso pasivo
- **Agencia de una persona:** cómo pasar de freelancer a agencia boutique

**instrucción 5 — Marketing de nicho para freelancers:**
Cómo conseguir clientes de alta calidad de forma sistemática:
- LinkedIn como canal principal: estrategia de contenido de nicho, outreach efectivo
- Posicionamiento de autoridad: artículos, hablar en eventos, podcast del nicho
- Referidos: cómo construir un sistema de referidos que genere ingresos recurrentes
- Inbound vs. outbound: cuándo invertir en cada estrategia

objetivo: Duplicar mis ingresos de 4.000€/mes a 8.000€/mes en los próximos 12 meses, sin doblar las horas trabajadas, especializándome en un nicho de alto valor y subiendo significativamente mis tarifas.
EOT,
                'tool_name'        => 'Claude',
                'difficulty'       => 'intermediate',
                'estimated_minutes'=> 45,
                'use_case'         => 'Transformar un negocio freelance estancado en un negocio escalable aplicando principios de startup y especialización de nicho',
                'vote_score'       => 55,
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
